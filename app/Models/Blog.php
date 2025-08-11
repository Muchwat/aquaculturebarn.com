<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('M-d-Y');
    }

    public function dateArray()  {
        $parsedDate = Carbon::parse($this->created_at);

        return [
            'month' => $parsedDate->format('M'),
            'day' => $parsedDate->format('d'),
            'year' => $parsedDate->format('Y'),
        ];
    }

    protected $casts = [
        'tags' => 'array',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
}
