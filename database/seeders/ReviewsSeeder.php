<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\reviews;
use Illuminate\Support\Str;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        reviews::insert([
            'id' => 1, 'user_id' =>1, 'comment' => 'maganda', 'star_rating' => '5','status'=>0,
            
        ]);
    }
}
