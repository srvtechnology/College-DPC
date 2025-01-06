<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    use HasFactory;
    protected $fillable = [
       'session_id'
    ];
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
