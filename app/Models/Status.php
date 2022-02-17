<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function order()
    {
        return $this->hasmany(Order::class);
    }

    public function donate()
    {
        return $this->hasmany(Donate::class);
    }
}
