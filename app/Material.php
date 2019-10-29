<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use UuisTrait;
    protected $table = 'Materials';
    public $incremeting = false;
    protected $fillable = ['content', 'thumbnail', 'title'];
}
