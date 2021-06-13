<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;


class Grade extends Model
{
    use HasTranslations;
    protected $fillable=['name','notes'];
    public $translatable = ['name'];//TRANSLATE ONLY NAME COLOMN
    protected $table = 'Grade';
    public $timestamps = true;



}
