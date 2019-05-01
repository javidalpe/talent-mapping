<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('teams')->insert([
		    'name' => 'X by Orange',
		    'address' => 'Palos de la Frontera 12, Madrid, Madrid'
	    ]);

	    DB::table('teams')->insert([
		    'name' => 'Zara',
		    'address' => 'sHub'
	    ]);

	    DB::table('teams')->insert([
		    'name' => 'BBVA',
		    'address' => 'Edificio Vela, BBVA'
	    ]);

	    DB::table('teams')->insert([
		    'name' => 'Orange Bank',
		    'address' => 'Palos de la Frontera 12, Madrid, Madrid'
	    ]);

	    DB::table('teams')->insert([
		    'name' => 'Pull & Bear',
		    'address' => 'sHub'
	    ]);

	    DB::table('teams')->insert([
		    'name' => 'ING',
		    'address' => 'Las Rozas, Madrid'
	    ]);
    }
}
