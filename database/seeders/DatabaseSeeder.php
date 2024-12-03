<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $tag = Tag::factory(3)->create();

        Job::factory(10)->hasAttached($tag)->create(new Sequence(
            [
                "featured" => false,
                "schedule" => "Full Time",
            ],
            [
                "featured" => true,
                "schedule" => "Part Time",
            ],
        ));
    }
}
