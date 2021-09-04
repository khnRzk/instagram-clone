<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];

    public function ProfileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/GUB07CNeCxaCpbnMTfUXfAhRUUL2lykDnIbnrzHE.jpg';
        return '/storage/'.$imagePath;
    }
    public function user(){
        
        return $this->belongsTo(User::class);
    }
    
    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
