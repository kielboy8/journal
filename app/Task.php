<?php

namespace App;

class Task extends Model
{
    public function user() {
    	return $this->belongsTo(User::class);
    }
}
