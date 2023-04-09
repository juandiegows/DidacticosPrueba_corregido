<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class BlogFactory extends Factory
{

    protected $model = Blog::class;



    public function definition(): array
    {

        return [
            'title' => $title = $this->faker->sentence(),
            'content' => $this->faker->paragraph(50),
            'user_id' => 1,
            'slug' => Str::slug($title),
            'created_at' => $this->faker->dateTimeBetween(date('2023/04/01') , date('Y-m-d H:i:s'))
        ];
    }
}
