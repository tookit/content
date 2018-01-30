<?php namespace Socklab\Content\Updates;

use October\Rain\Database\Updates\Seeder;
use Illuminate\Support\Facades\DB;

class BaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('socklab_content_category')->insert(
            [
                'title' => 'default',
                'slug' => 'default'
            ]
        );
    }
}