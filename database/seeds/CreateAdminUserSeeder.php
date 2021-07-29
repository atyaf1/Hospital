<?php use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /*** Run the database seeds.** @return void */
    public function run()
    {
        $user = User::create([
            'name' => 'Ahmad Raid',
            'email' => 'a@a',
            'password' => bcrypt('123456'),
            'roles_name' => "Admin"
        ]);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}

