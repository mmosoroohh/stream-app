<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = []; // YOLO

    public function user()
    {
        return $this->belongsTo(User::class)
        ->select(['id','name']);
    }
}
