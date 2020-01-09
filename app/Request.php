<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $primaryKey = 'request_id';
    public $incrementing = true;
}
