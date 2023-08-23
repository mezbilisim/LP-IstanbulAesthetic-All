<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardWinner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'ip', 'country', 'country_name', 'award', 'cookie'
    ];
}
