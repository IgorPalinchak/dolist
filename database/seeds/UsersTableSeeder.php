<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 'admin', 1)->create()->each(function ($user) {
        });

        $role = factory(App\Modesl\Role::class, 'default', 1)->create();
        factory(App\User::class, 'default', 4)->create()->each(function ($user) use ($role) {
            $user->role_id = last($role->pluck('id')->toArray());
            $user->save();
        });

    }
}
