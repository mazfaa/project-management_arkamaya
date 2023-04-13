<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'client_name' => 'NEC',
                'client_address' => 'Jakarta'
            ],

            [
                'client_name' => 'TAM',
                'client_address' => 'Jakarta'
            ],

            [
                'client_name' => 'TUA',
                'client_address' => 'Bandung'
            ],
        ])->each(fn ($clients) => Client::create($clients));
    }
}
