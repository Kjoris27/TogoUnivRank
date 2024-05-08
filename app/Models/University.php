<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'acronym',
        'name',
        'country',
        'city',
        'address',
        'website_link',
        'email_address',
        'contact1',
        'contact2',
        'total_students',
        'integration_percentage',
        'image',
    ];
}
