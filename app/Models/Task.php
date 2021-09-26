<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    protected $fillable = [
        'activity_date', 'activity_desc', 'activity_comment', 'status' , 'title', 'start', 'end', 'activity_customer', 'activity_tec'
    ];

}
