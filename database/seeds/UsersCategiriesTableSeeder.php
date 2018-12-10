<?php

use Illuminate\Database\Seeder;

class UsersCategiriesTableSeeder extends Seeder
{
    private static $userId = 1;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Modesl\UsersCategory::class, 'cat', 60)->make()->each(function ($category) {
            $category->user_id = $this->getRandomUserId();
            $category->parent_id = $this->getRandomCategoryId();
            $category->save();
        });

        $posts = factory(App\Modesl\UsersTask::class, 'cat_task', 50)->make()->each(function ($post) {
            $post->user_id = $this->getRandomUserId();
            $post->users_category_id = $this->getRandomCategoryId();
            // $post->save();
        })->toArray();
        App\Modesl\UsersTask::insert($posts);
    }

    /**
     * @return int|null
     */
    private function getRandomUserId()
    {
        $rundomUser = App\User::inRandomOrder()->first();
        self::$userId = !is_null($rundomUser) ? $rundomUser->id : null;
        return self::$userId;
    }

    /**
     * @return int|null
     */
    private function getRandomCategoryId()
    {
        $rundomCat = App\Modesl\UsersCategory::inRandomOrder()->where('user_id', self::$userId)->first();
        return !is_null($rundomCat) ? $rundomCat->id : null;
    }
}
