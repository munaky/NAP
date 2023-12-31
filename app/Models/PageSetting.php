<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    protected $table = 'page_settings';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'value'];
}
