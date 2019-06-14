<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'cliente';
        $role->description = 'Cliente';
        $role->save();
        $role = new Role();
        $role->name = 'arrendatario';
        $role->description = 'Arrendatario';
        $role->save();
    }
}
