<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'tags' => 'array',
    ];

    public function dateArray()  {
        $parsedDate = Carbon::parse($this->created_at);

        return [
            'month' => $parsedDate->format('M'),
            'day' => $parsedDate->format('d'),
            'year' => $parsedDate->format('Y'),
        ];
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('M-d-Y');
    }
}
