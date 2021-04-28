<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Candidate extends Model
{
        protected $primaryKey = 'cdt_id';
        use SoftDeletes;
}
