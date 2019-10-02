<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Merujan99\LaravelVideoEmbed\Facades\LaravelVideoEmbed;

class Document extends Model
{
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function url()
    {
        return $this->course->url().'/resources/'.$this->id;
    }

    public function getVideoUrlAttribute()
    {
        $attributes = [
            'type' => null,
            'class' => 'embed-responsive-item',
            'data-html5-parameter' => true
        ];
        return LaravelVideoEmbed::parse($this->video, null, null, $attributes);
    }

    public function getVideoThumbnailAttribute()
    {
        return LaravelVideoEmbed::getYoutubeThumbnail($this->video);
    }
}
