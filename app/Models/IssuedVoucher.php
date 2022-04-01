<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IssuedVoucher extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_reg_id',
        'name',
        'quantity',
        'price',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_reg_id' => 'integer',
        'price' => 'decimal:2',
    ];

    public function studentReg()
    {
        return $this->belongsTo(RegisteredStudent::class, 'student_reg_id', 'id');
    }
}
