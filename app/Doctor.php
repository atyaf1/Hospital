<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $guarded=[];

    // protected $fillable = ['name', 'birthday', 'phone', 'address', 'department_id', 'salary'];


    // // here we put the columns name that i want to hide it from selection
    // protected $hidden = ['created_at' ,'updated_at'];

    public function setNameAttribute($val){   // اسم الدالة يجب ان يكون بهذه الطريقة فقط
        $this->attributes['name'] = ucfirst($val);
    }
}
