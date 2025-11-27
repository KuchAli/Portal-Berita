<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'site_name',
        'site_logo',
        'site_favicon',
        'site_description',
        'facebook',
        'instagram',
        'youtube',
        'email',
        'whatsapp',
        'address',
    ];
}
