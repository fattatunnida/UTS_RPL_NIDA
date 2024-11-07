<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'nomor_telepon'];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
