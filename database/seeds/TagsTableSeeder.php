<?php

use Conner\Tagging\Model\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tagging_tags')->truncate();

        $tags = [
            'C',
            'C++',
            'Python',
            'C#',
            'PHP',
            'Django'
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'slug' => str_slug($tag),
                'name' => $tag,
                'suggest' => true,
            ]);
        }
    }
}
