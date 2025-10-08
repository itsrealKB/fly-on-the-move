<?php

namespace App\Models;

use App\Models\CmsMeta;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    protected $guarded = [];

    public function cmsMeta(){
        return $this->hasMany(CmsMeta::class);
    }
}
