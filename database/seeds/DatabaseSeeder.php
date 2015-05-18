<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\User;
use App\Role;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

	# =========================================================================
    # DEPARTMENTS SEEDS
    # =========================================================================


		DB::table('departments')->delete();

        $departments = [
                ['name' => 'Administration','slug'  => 'Administration'],
                ['name' => 'Marketing','slug'       => 'Marketing'],
                ['name' => 'Field Support','slug'   => 'Field Support']
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }


    # =========================================================================
    #  USERS SEEDS
    # =========================================================================

        DB::table('users')->delete();

        User::create([

                        'firstName'     => 'Admin',
                        'surname'       => 'Ubulwembu',
                        'email'         => 'info@ubulwembu.co.za',
                        'password'      =>  bcrypt('admin'),
                        'cellphone'     => '074 736 6112',
                        'slug'          => 'admin',
                        'role'          => 1,
                        'department'    => 1
        ]);


    # =========================================================================
    # ROLES SEEDS
    # =========================================================================


        DB::table('roles')->delete();

        $roles = [
                ['name' => 'Admin'],
                ['name' => 'Agent']
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }




	}

}
