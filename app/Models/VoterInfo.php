<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoterInfo extends Model
{
    protected $fillable = [
        'si',
        'name',
        'fathers_or_husband',
        'birth_date',
        'division',
        'district',
        'upazila',
        'union',
        'election_area'
    ];
}
