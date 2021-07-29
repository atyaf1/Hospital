<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Patient_Request extends Model
{
    protected $guarded=[];

    protected $table="requests";

    public function age()
    {
        return Carbon::parse($this->attributes['birthday'])->age;
    }


}
