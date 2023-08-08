<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'floor',
        'room_no',
        'phone',
        'updated_by'
    ];

    public function type()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function services()
    {
        return $this->belongsToMany(ServiceFacility::class);
    }
}
