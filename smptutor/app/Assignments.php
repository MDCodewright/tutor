<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    protected $fillable = ['assignment_title', 'assignment_details'];
}