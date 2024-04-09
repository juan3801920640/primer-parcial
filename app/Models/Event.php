<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_events';

    protected $fillable = [
        'id_events',
        'name',
        'start_date',
        'end_date',
        'location',
        'capacity'
    ];
}
