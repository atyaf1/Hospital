<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /*** Run the database seeds.** @return void */
    public function run()
    {
        $permissions = [
            'طلبات',
            'اضافة طلب',
            'اظهار الطلبات',
            'الدكاترة',
            'اضافة دكتور',
            'اظهار الدكاترة',
            'الاقسام',
            'اضافة قسم',
            'اظهار الاقسام',
            'المستخدمين',
            'اظهار المستخدمين',
            'اضافة مستخدمين',
            'الصلاحيات',
            'اظهار الصلاحيات',
            'اضافة صلاحيات',


        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
