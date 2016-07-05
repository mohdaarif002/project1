<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('BooksTableSeeder');
	}


}

class BooksTableSeeder extends Seeder{

public function run()
{

	$faker=Faker\Factory::create(); 

for($i=0;$i<5;$i++)
{
   DB::table('books')->insert(array(
     'title'=>$faker->firstName,
     'summary'=>$faker->realText
   	));
}
    

    }



}