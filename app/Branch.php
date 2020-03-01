<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes;
    //User Relationship
    public function users()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = client_id, localKey = id)
        return $this->belongsToMany(User::class);
    }
    //SoftDelete and Restore Childs of this model using foreign key
	protected static function boot() {
        parent::boot();
    
            //For users
            static::deleting(function($branch) {
                $branch->user()->delete();
            });
            static::restoring(function($branch) {
                $branch->user()->restore();
            });
    }
}
