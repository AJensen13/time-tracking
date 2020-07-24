<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create();

        factory(App\User::class)->create([
            'name' => 'Test',
            'email' => 'test@example.com'
        ]);
    }
}
