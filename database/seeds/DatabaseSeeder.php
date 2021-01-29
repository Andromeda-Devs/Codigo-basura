<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissions::class);
        $this->call(CreateUsersSeeder::class);
        $this->call(CreateCargosSeeder::class);
        $this->call(CreateRegionsSeeder::class);
        $this->call(CreateDocumentoSeeder::class);
    }
}
