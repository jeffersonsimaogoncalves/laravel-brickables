<?php

namespace Okipa\LaravelBrickables\Tests\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Okipa\LaravelBrickables\Tests\Models\Company;

class CompanyFactory extends Factory
{
    /** @var string */
    protected $model = Company::class;

    public function definition(): array
    {
        return ['name' => $this->faker->unique()->company];
    }
}
