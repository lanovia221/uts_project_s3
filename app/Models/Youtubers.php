<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtubers extends Model
{
    use HasFactory;

    protected $table="youtuber";
    protected $primaryKey = 'code';
    protected $keyType = 'string';

    protected $fillable =['name','salary', 
    'code', 'description'
    ];

    public function contents(){
        return $this->hasMany(Content::class, 'youtuber', 'code');
    }

}
