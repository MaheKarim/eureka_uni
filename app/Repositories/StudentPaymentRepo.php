<?php

namespace App\Repositories;

use App\Models\StudentPayment;

class StudentPaymentRepo
{

    public function update($id, $data)
    {
        return StudentPayment::find($id)->update($data);
    }

    public function find($id)
    {
        return StudentPayment::find($id);
    }


}
