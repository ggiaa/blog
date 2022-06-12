<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 7)),
            'slug' => $this->faker->slug(mt_rand(3, 7)),
            'excerpt' => $this->faker->paragraph(3, 4),
            // 'content' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 12))) . '</p>',
            'content' => collect($this->faker->paragraphs(mt_rand(5, 12)))
                ->map(function ($paragraf) {
                    return "<p>$paragraf</p>";
                })
                ->implode(''),
            'category_id' => mt_rand(1, 9),
            'writer_id' => mt_rand(1, 10)
        ];
    }
}
