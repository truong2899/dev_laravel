<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i < 50; $i++){
            $news = new News;
            $news->title = 'bai viet'.$i;
            $news->content = 'noi dung'.$i;
            $news->save();
        }
    }
}
