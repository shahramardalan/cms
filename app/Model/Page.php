<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model{
    protected $guarded = ['id'];

    public function menus(){
        return $this->hasMany(Menu::class);
    }
}