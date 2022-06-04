<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogCategory>
 */
class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(3, 8), true);
        $createdAt = $this->faker->dateTimeBetween('-3 months', '-2 months');

        $data = [

            'title' => Str::slug($title),
            'slug' => $title,
            'description' => $this->faker->text(rand(40, 100)),
            'created_at' => $createdAt,
            'updated_at' => $createdAt,

            // 'category_id'    => rand(1, 11),
            // 'user_id'        => (rand(1, 5) == 5) ? 1 : 2,
            // 'slug'           => 'slug',
            // 'title'          => 'title',
            // 'excerpt'        => 'excerpt',
            // 'content_raw'    => 'content_raw',
            // 'content_html'   => 'content_html',
            // 'is_published'   => 1,
            // 'published_at'   => null,
            // 'created_at'     => $createdAt,
            // 'updated_at'     => $createdAt

        ];
        return $data;
    }
}
