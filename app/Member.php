<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Member extends Model
{
     protected $primaryKey = 'mbr_id';
        use SoftDeletes;
}

