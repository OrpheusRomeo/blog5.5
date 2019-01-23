<?php

use Illuminate\Database\Seeder;

class FriendLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'github',
                'link' => 'https://github.com/',
                'is_show' => 1
            ],
            [
                'name' => 'lintcode',
                'link' => 'https://www.lintcode.com/',
                'is_show' => 1
            ],
            [
                'name' => '书栈',
                'link' => 'https://www.bookstack.cn/',
                'is_show' => 0
            ]
        ];
        for ($i = 0; $i < count($data); $i++){
            factory('App\Models\FriendLink',1)->create([
                'name' => $data[$i]['name'],
                'link' => $data[$i]['link'],
                'is_show' => $data[$i]['is_show'],
            ]);
        }

    }
}
