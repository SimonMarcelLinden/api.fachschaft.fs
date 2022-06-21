<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Settings\SettingSeeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
			SettingSeeder::class,
			CategoryDrink::class,
			DrinkSeeder::class,
        ]);
    }
}
