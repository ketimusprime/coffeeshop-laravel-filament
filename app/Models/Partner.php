<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'thumbnail',
        'content',
        'link'
    ];

    //membuat gambar akan otomatis ketiban pada storage public
    protected static function booted()
    {
        parent::booted();
        static::updating(function($model){
            if($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') != null)){
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
}