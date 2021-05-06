<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_name',
        'description',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function workers()
    {
        return $this->hasMany(User::class)->orderBy('users.name');
    }
}
