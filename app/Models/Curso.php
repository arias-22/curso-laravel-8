<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function similar(){
        return $this->where('categoria_id', $this->categoria_id)->with('user')
        ->take('2')
        ->get();
    }

    public function getEstractoAttribute(){
        return substr($this->description, 0, 80, ) . "...";
    }
}
