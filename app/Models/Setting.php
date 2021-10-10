<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = ['site_icon','logo','fb_link','tw_link','in_link','ig_link','footer_logo','footer_info'];
}
