<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\BlogPost;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(3, 8), true);
        $txt = $this->faker->realText(rand(1000, 4000));
        $isPublished = rand(1, 5) > 1;
        $createdAt = $this->faker->dateTimeBetween('-3 months', '-2 months');

        $data = [
            'category_id'    => rand(1, 10),
            'user_id'        => 1,
            'slug'           => Str::slug($title),
            'title'          => $title,
            'excerpt'        => $this->faker->text(rand(40, 100)),
            'content_raw'    => $txt,
            'content_html'   => $txt,
            'published_at'   => $isPublished ? $this->faker->dateTimeBetween('-2 months', '-1 days') : null,
            'created_at'     => $createdAt,
            'updated_at'     => $createdAt

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
