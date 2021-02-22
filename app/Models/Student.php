<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Student extends Model
{
    protected $table = "students";

    use softDeletes;

    protected $fillable = [
        'nama',
        'nrp',
        'email',
        'jurusan'
    ];
}
