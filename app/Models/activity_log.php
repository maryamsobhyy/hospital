<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_log extends Model
{
    use HasFactory;
    protected $table='activity_logs';
    protected $fillable=['user_id','description','created_at','updated_at'];
}
