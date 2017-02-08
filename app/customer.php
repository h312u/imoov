<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected sfillable = [
      'idcustomer',
      'last_name_nustomer',
      'first_name_customer',
      'matric_num',
      'address',
      'phone',
      'faculty',
      'driver_license_num',
      'birthdate',
      'created_at',
      'delete_at'
    ];
}
