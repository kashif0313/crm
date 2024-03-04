<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class role extends Model
{   
    protected $guarded = [
       'id'
    ];
    
    use HasFactory;
    public function users()
    {
       return $this->belongsToMany(user::class);
    }

}
