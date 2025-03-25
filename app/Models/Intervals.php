<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Intervals extends Model
{
    protected $fillable = [
        'start',
        'end',
    ];

    protected function casts(): array
    {
        return [
            'start' => 'integer'
        ];
    }

    public $timestamps = false;
}
