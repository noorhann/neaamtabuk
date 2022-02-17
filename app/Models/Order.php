<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'close_at',
    ];


    public function donate()
    {
        return $this->belongsTo(Donate::class , 'donation_id');
    }


    public function status()
    {
        return $this->belongsTo(Status::class );
    }
}
