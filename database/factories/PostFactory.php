<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $title = $this->faker->sentence($nbWords = 6, $variableNbWords = true);
        $slug = Str::slug($title,'-');
        return [
            //
            'postcategory_id' => $this->faker->numberBetween(1,4),
            'photo_id' => 3,
            'title' => $title,
            'slug'=> $slug,
            'body' => $this->faker->text(2500),
        ];
    }
}
