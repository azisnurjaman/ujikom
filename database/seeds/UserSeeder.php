<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "Admin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        $memberRole = new Role();
        $memberRole->name = "Peminjam";
        $memberRole->display_name = "peminjam";
        $memberRole->save();

        $admin = new User();
        $admin->name = 'Azis Nurjaman';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        // $admin->attachRole($adminRole);

        $member = new User();
        $member->name ='peminjam';
        $member->email ='peminjam@gmail.com';
        $member->password = bcrypt('rahasiapisan');
        $member->save();
        // $member->attachRole($memberRole);
    }
}
