<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = DB::table('categories')
            ->inRandomOrder()
            ->limit(1)
            ->first(['id']);

        $name = $this->faker->words(2, true);
        $status = ['Active', 'InActive'];
        return [
            //
            'name' => $name,
            'slug' => Str::slug($name),
            'category_id' => $category? $category->id : null,
            'short_description' => $this->faker->words(20, true),
            'full_description' => $this->faker->words(200, true),
            'image' => $this->faker->imageUrl(),
            'status' => $status[rand(0, 1)]
        ];
    }
}
