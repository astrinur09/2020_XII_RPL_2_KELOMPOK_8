<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class VoteOfCandidates extends Model
{
    protected $primaryKey = 'voc_id';
    use SoftDeletes;
}
