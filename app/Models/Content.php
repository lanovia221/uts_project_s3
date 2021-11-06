<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable =['nama','durasi', 
    'jenis','youtuber'
    ];

    public function youtubers(){
        return $this->belongsTo(youtubers::class, 'youtuber', 'code'); //connect database child ke parent
    }

}
