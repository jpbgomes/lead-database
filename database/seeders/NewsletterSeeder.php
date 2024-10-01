<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsletters = [
            [
                'email' => 'josepedrogomes27@gmail.com',
                'token' => 'Co$d97Tbnv9hdI5WaT&$Qq1g$yz1Ut&SYZVVs&uJ',
            ],

            [
                'email' => 'moreiiramariia@gmail.com',
                'token' => 'TOCVrLv4w8CoNeiUt4Nf#OVnr0MqRul?E1ocZRa@',
            ],

            [
                'email' => 'amaisterapia@gmail.com',
                'token' => '@4gaQSvC2hXW27FN!C51Vu#BGwJvcMMx3er@NKXE',
            ],

            [
                'email' => 'nortadadesabores2023@gmail.com',
                'token' => '6KtvfFpUPXbX?pcHqGt3hGeiDMANzQlcS!Fy4ty1',
            ],
        ];

        DB::table('newsletters')->insert($newsletters);
    }
}
