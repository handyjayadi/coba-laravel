<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','excerpt','body'];
    protected $guarded = ['id'];
    protected $with = ['category','user'];

    public function category(){
        
        return $this->belongsTo(Category::class);
    }

    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters){

        if(isset($filters['search']) ? $filters['search'] : false) 
            {
               return $query->where('title','like','%'. $filters['search'] . '%')
                            ->orWhere('excerpt','like','%'. $filters['search'] . '%');
            }

    }
}
