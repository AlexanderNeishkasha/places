<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function setCreatedAtAttribute($value) {
        $this->attribute['created_at'] = Carbon::now();
    }
}
