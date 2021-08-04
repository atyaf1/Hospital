<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /*** Run the database seeds.** @return void */
    public function run()
    {
        $permissions = [
            'اضافة طلب',
            'اظهار الطلبات',
            'اضافة دكتور',
            'اظهار الدكاترة',
            'اضافة قسم',
            'اظهار الاقسام',
            'اظهار المستخدمين',
            'اضافة مستخدمين',
            'اظهار الصلاحيات',
            'اضافة صلاحيات',


        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
