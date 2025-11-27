<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
        protected $table = 'articles';
        protected $fillable = [
        'user_id','category_id','title','slug',
        'content','thumbnail','tags','status','views','published_at'
    ];

    protected $casts = [
        'tags' => 'array',
        'published_at' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
