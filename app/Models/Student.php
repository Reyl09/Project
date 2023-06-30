<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // protected $fillable = [''];
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('student_id', 'like', '%' . request('search') . '%')
            ->orWhere('firstname', 'like', '%' . request('search') . '%');
        };
    }
//     public function course()
// {
//     return $this->belongsTo(Course::class);
// }
}
