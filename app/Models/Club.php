<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    public function club()
    {
        return $this->belongsTo('App\Models\Club');
    }
}