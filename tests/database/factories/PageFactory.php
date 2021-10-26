<?php

namespace Okipa\LaravelBrickables\Tests\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Okipa\LaravelBrickables\Tests\Models\Page;

class PageFactory extends Factory
{
    /** @var string */
    protected $model = Page::class;

    public function definition(): array
    {
        return ['slug' => $this->faker->unique()->slug];
    }
}
