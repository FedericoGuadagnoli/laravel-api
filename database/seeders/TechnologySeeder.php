<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['label' => 'HTML', 'color' => 'primary'],
            ['label' => 'CSS', 'color' => 'danger'],
            ['label' => 'ES6', 'color' => 'warning'],
            ['label' => 'Boostrap', 'color' => 'danger'],
            ['label' => 'Vue', 'color' => 'success'],
            ['label' => 'PHP', 'color' => 'primary'],
            ['label' => 'SQL', 'color' => 'secondary'],
            ['label' => 'SASS', 'color' => 'info'],
            ['label' => 'Laravel', 'color' => 'info']
        ];

        foreach ($technologies as $tech) {
            $new_tech = new Technology();
            $new_tech->label = $tech['label'];
            $new_tech->color = $tech['color'];
            $new_tech->save();
        }
    }
}
