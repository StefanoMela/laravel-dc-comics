<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = 
    [
    'writer',
    'artist',
    'title',
    'issue_number',
    'release_date',
    'price'
    ]; 
}
