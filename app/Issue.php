<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    public $timestamp = false;
    protected $table('issues');
}
