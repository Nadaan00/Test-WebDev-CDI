<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'project_name',
        'client',
        'name_project_leader',
        'email_project_leader',
        'image',
    ];
}
