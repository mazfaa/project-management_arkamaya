<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'client_id' => 1,
                'project_name' => 'WMS',
                'project_start' => '2022-07-28',
                'project_end' => '2022-08-28',
                'project_status' => 'Open'
            ],

            [
                'client_id' => 2,
                'project_name' => 'FILMS',
                'project_start' => '2022-06-1',
                'project_end' => '2022-08-31',
                'project_status' => 'Doing'
            ],

            [
                'client_id' => 2,
                'project_name' => 'DOC',
                'project_start' => '2022-01-01',
                'project_end' => '2022-04-30',
                'project_status' => 'Done'
            ],

            [
                'client_id' => 3,
                'project_name' => 'POS',
                'project_start' => '2022-05-01',
                'project_end' => '2022-08-31',
                'project_status' => 'Doing'
            ]
        ])->each(fn ($projects) => Project::create($projects));
    }
}
