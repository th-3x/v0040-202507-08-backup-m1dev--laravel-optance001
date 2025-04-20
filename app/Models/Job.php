<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_listing';

    protected $fillable = [
        'title',
        'description',
        'company_name',
        'salary',
    ];

    public function getSalaryAttribute($value)
    {
        return number_format($value, 2);
    }
    public function setSalaryAttribute($value)
    {
        $this->attributes['salary'] = str_replace(',', '', $value);
    }
    public function getDescriptionAttribute($value)
    {
        return nl2br(e($value));
    }
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strip_tags($value);
    }
    public function getTitleAttribute($value)
    {
        return ucwords($value);
    }
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }
}
