<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getDepartureTime()
    {
        $time = $this->departure_time;
        return substr($time, 0, 5);
    }
    public function getArrivalTime()
    {
        $time = $this->arrival_time;
        return substr($time, 0, 5);
    }
}
