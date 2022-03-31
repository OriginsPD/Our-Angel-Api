<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDirectory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'registered_status',
        'studentCard_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'registered_status' => 'boolean',
        'studentCard_id' => 'integer',
    ];

    public function registeredStudents()
    {
        return $this->hasMany(RegisteredStudent::class);
    }

    public function issuedVouchers()
    {
        return $this->hasMany(IssuedVoucher::class);
    }

    public function voucherHistories()
    {
        return $this->hasMany(VoucherHistory::class);
    }
}
