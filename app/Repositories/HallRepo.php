<?php

namespace App\Repositories;

use App\Models\HallBooking;

class HallRepo
{


    public function update($id, $data)
    {
        return HallBooking::find($id)->update($data);
    }

    public function find($id)
    {
        return HallBooking::find($id);
    }


}
