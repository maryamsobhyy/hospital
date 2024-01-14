<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class major extends Model
{

    use HasFactory;
    protected $table='majors';
    protected $guarded=['created_at','updated_at'];
    protected $fillable=['title'];
    // public $timestamps = false;
    public function doctor(){
        return $this->belongsTo(doctor::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::updated(function ($major) {
            $activity = new activity_log();
            $activity->user_id =auth()->user()->id;
            $activity->Description = "updated";
            $activity->Model_name=Major::class;
            $activity->save();
            ;
        });
        parent::boot();
        static::created(function ($major) {
            $activity = new activity_log();
            $activity->user_id =auth()->user()->id;
            $activity->Description = "created";
            $activity->Model_name=Major::class;
            $activity->save();
            ;
        });

    }
}
