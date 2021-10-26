<?php

namespace Okipa\LaravelBrickables\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Okipa\LaravelBrickables\Contracts\HasBrickables;
use Okipa\LaravelBrickables\Tests\Database\Factories\PageFactory;
use Okipa\LaravelBrickables\Traits\HasBrickablesTrait;

class Page extends Model implements HasBrickables
{
    use HasBrickablesTrait;
    use HasFactory;

    /** @var string */
    protected $table = 'pages';

    /** @var array */
    protected $fillable = ['slug'];

    protected static function newFactory(): PageFactory
    {
        return PageFactory::new();
    }
}
