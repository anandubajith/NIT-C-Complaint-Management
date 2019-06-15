<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'title', 'description', 'created_by', 'user_id'
    ];
}
