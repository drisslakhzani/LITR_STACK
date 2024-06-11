<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['jobTitle', 'salary'];
    protected $table= 'job_listings';
    public function users()
    {
        return $this->belongsToMany(User::class, 'job_user');
    }
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
