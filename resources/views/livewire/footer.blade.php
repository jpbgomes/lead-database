<footer class="py-5 relative mt-10">
    <x-full-container class="w-full flex justify-center items-center gap-10">
        <x-container>
            <div class="w-full bg-lightblack flex flex-col items-center justify-center rounded-xl pb-5 px-4 sm:px-0">
                <i class="fa-solid fa-envelope-open-text scale-[3] bg-lightblack border border-white rounded-full p-1"></i>

                <div class="mt-10 flex flex-col items-center justify-center gap-5">
                    <div class="flex flex-col items-center justify-center gap-2">
                        <h1 class="font-bold text-xl">NEWSLETTER</h1>
                        <h2 class="text-neutral-300">Keep up with all my <strong>updates</strong>, <strong>discounts</strong> and <strong>campains</strong>, <strong>new services</strong> and <strong>new projects</strong>.</h2>
                    </div>

                    <div class="w-full flex items-center justify-center gap-5">
                        <x-input type="email" class="w-full" placeholder="Your email ..." wire:model="newsletterEmail" required/>
                        <x-cbutton class="bg-white" wire:click="subscribe">Subscribe</x-cbutton>
                    </div>

                    @if (session('success'))
                        <div class="w-full bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-sm mb-6"
                            role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="w-full bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg shadow-sm mb-6"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif
                </div>
            </div>
        </x-container>

        <a href="https://joaonm.com/" class="absolute left-5 bottom-1 hidden sm:flex">
            <h1 class="mb-3 text-neutral-500 text-[10px]">Design inspired in JoãoNM</h1>
        </a>

        <x-container class="flex flex-col items-center justify-center">
            <a href="{{ env('APP_URL') }}" target="_blank">
                <div>
                    <h1>©️ {{ $currentYear }} - Powered with ❤️ by José Gomes</h1>
                </div>
            </a>
        </x-container>
    </x-full-container>
</footer>
