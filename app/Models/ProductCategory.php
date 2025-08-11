<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_categories'; // Explicitly set table name

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    /**
     * Get the products for the product category.
     */
    public function products()
    {
        // Defines a one-to-many relationship: one product category has many products
        // Uses 'product_category_id' as the foreign key in the products table
        return $this->hasMany(Product::class, 'product_category_id');
    }
}

