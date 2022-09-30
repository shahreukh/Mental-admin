<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentalite extends Model
{
    use HasFactory;

    protected $table ='mentalites';

    protected $fillable = [
        'name',
        'introduction',
        'description',
    ];


}
