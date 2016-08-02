<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
	protected $table = 'lytuan_sinhvien';
     protected $fillable = [
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
