<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['item', 'isCompleted'];
    protected $visible = ['id', 'item', 'isCompleted', 'deleted_at'];
}
