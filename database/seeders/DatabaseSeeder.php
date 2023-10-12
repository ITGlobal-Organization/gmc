<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        // DB::table('roles')->insert([
        //     'name' => 'super_admin',
        // ]);
        DB::table('roles')->insert([
            'name' => 'admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'user',
        ]);
        DB::table('roles')->insert([
            'name' => 'customer',
        ]);
        DB::table('roles')->insert([
            'name' => 'employee',
        ]);
        DB::table('permissions')->insert([
            'name' => 'create',
        ]);
        DB::table('permissions')->insert([
            'name' => 'edit',
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete',
        ]);
        DB::table('permissions')->insert([
            'name' => 'update',
        ]);
        DB::table('role_has_permissions')->insert([
            'role_id' => 1,
            'permission_id'=>1
        ]);
        DB::table('role_has_permissions')->insert([
            'role_id' => 1,
            'permission_id'=>2
        ]);
        DB::table('role_has_permissions')->insert([
            'role_id' => 1,
            'permission_id'=>3
        ]);
        DB::table('role_has_permissions')->insert([
            'role_id' => 1,
            'permission_id'=>4
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email'=>'admin@gmail.com',
            'is_email_verified'=>'admin@gmail.com',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'password' => Hash::make('admin123'),
            'remember_token'=>null,
            'phone'=>'03332424345',
            'signin_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}