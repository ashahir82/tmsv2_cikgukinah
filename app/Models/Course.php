<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";
    protected $primaryKey = 'id';

    // public $incrementing  = false;

    protected $fillable = [
        "id",
        "code",
        "name",
        "is_active",
        "created_at",
        "updated_at"
    ];

    public function students(){
        return $this->hasMany(Student::class);
    }
}
