<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Student extends Model
{
    protected $primaryKey = 'std_id';
    use SoftDeletes;
}	

