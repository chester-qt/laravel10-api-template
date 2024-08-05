<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasUuids;

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'is_featured',
        'description',
        'price'
    ];

    public function createdAt() : Attribute
    {
        return Attribute::make(
            get: fn($attributes) => strtotime($attributes['created_at'])
        );
    }

    public function updatedAt() : Attribute
    {
        return Attribute::make(
            get: fn($attributes) => strtotime($attributes['updated_at'])
        );
    }
}
