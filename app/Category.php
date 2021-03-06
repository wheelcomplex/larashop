<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends BaseModel
{
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'categories';
    protected $fillable = ['name', 'description'];
}
