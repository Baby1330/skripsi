<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    
    protected $table = 'employees';

    protected $fillable = [
        'full_name',
        'nik',
        'division_id',
        'branch_id',
        'status',
        'join_date'
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
