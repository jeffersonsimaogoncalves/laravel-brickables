<?php

namespace Okipa\LaravelBrickables\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Okipa\LaravelBrickables\Tests\Database\Factories\CompanyFactory;

class Company extends Model
{
    use HasFactory;

    /** @var string */
    protected $table = 'companies';

    /** @var array */
    protected $fillable = ['name'];

    protected static function newFactory(): CompanyFactory
    {
        return CompanyFactory::new();
    }
}
