<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkRecord extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Set the period attribute. This is important for saving data correctly.
     *
     * @param  string  $value
     * @return void
     */
    public function setPeriodAttribute($value)
    {
        $this->attributes['period'] = $value ? str_replace(['/', '.'], '-', $value) : null;
    }
}