<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    // protected $table = 'jobs';
    use HasFactory;

    // protected $fillable = ['title', 'salary', 'employer_id', 'job_description'];

    // guard nothing, don't need to add manully fillable fields
    protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
