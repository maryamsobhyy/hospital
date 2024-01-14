<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        static::deleted(function ($contact) {
            $activity = new activity_log();
            $activity->user_id =auth()->user()->id;
            $activity->Description = "updated";
            $activity->Model_name=contact::class;
            $activity->save();
            ;
        });
        parent::boot();
        static::created(function ($contact) {
            $activity = new activity_log();
            $activity->user_id =auth()->user()->id;
            $activity->Description = "updated";
            $activity->Model_name=contact::class;
            $activity->save();
            ;
        });

    }
    
}
