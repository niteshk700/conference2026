<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImportantDate extends Model
{
    protected $fillable = ['label', 'date_value', 'is_highlighted', 'order'];
}
