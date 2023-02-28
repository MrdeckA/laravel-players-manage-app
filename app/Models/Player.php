<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function joueurs()
    {
        return $this->hasMany('App\Models\Joueur');
    }
}