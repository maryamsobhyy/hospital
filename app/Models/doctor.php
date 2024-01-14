<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable=['name','major_id','bio'];
    use HasFactory;
    public function major(){
        return $this->belongsTo(major::class);
    }
}
