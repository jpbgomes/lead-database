<?php

namespace App\Livewire;

use App\Models\Newsletter;
use Carbon\Carbon;
use Livewire\Component;

class Footer extends Component
{
    public $currentYear = null;
    public $newsletterEmail = null;

    public function mount()
    {
        $this->currentYear = Carbon::now()->year;
    }

    public function subscribe()
    {   
        try {
            $this->validate([
                'newsletterEmail' => 'required|email|unique:newsletters,email|max:255',
            ]);

            $canGo = false;
            $finalToken = null;

            while ($canGo == false) {
                $randomToken = $this->generateRandomString();
                $tokenExists = Newsletter::where('token', $randomToken)->first();
                
                if (!$tokenExists) {
                    $finalToken = $randomToken;
                    $canGo = true;
                }
            }
            
            if ($finalToken != null) {
                $newsletter = new Newsletter();

                $newsletter->email = $this->newsletterEmail;
                $newsletter->token = $finalToken;
                $newsletter->save();

                session()->flash('success', 'Your now subscribed to my newsletter, thank you!');
            } else {
                session()->flash('error', 'Something went wrong, please try again!');
            }
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            $firstError = $e->validator->errors()->first();
            session()->flash('error', $firstError);
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong, please try again!');
        }
    }

    function generateRandomString() {
        $length = rand(30, 50);
        return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', $length)), 0, $length);
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
