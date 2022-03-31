<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guardian extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'trn',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'trn' => 'integer',
    ];

    public function registeredStudents()
    {
        return $this->hasMany(RegisteredStudent::class)
            ->has('studentDir')
            ->with('studentDir');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
