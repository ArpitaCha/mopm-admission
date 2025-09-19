<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Token extends Model
{
    protected $table        =   'tokens';
    protected $primaryKey   =   't_id';
    public $timestamps      =   false;

    protected $fillable = [
        't_token',
        't_generated_on',
        't_expired_on',
        't_user_id'
    ];
}
