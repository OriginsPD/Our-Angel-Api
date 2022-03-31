<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisteredStudent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_dir_id',
        'guardian_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_dir_id' => 'integer',
        'guardian_id' => 'integer',
    ];

    public function issuedVouchers()
    {
        return $this->hasMany(IssuedVoucher::class);
    }

    public function voucherHistories()
    {
        return $this->hasMany(VoucherHistory::class);
    }

    public function studentDir()
    {
        return $this->belongsTo(StudentDirectory::class);
    }

    public function guardian()
    {
        return $this->belongsTo(Guardian::class)->with('user');
    }
}
