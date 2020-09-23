<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $categories = ['', 'HTML', 'Freebies', 'JavaScript', 'CSS', 'Tutorials'];

      foreach ($categories as $row) {
        Category::create(['name' => $row]);
      }
    }
}
