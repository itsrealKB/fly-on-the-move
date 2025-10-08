<?php

namespace App\Models;

use App\Models\Cms;
use Illuminate\Database\Eloquent\Model;

class CmsMeta extends Model
{
    protected $guarded = [];

    public function cms(){
        return $this->belongsTo(Cms::class);
    }
}
