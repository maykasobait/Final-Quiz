<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stu_mngt extends Model
{
    use HasFactory;

    protected $table = 'stud_tbl';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'add',
        'dob',
    ];
}
