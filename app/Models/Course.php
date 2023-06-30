<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('course', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%');
        };
    }
    public function students()
{
    return $this->hasMany(Student::class);
}

}
