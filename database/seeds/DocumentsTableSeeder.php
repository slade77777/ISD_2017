<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert([
            ['name' => 'picture_link', 'type' => 1],
            ['name' => 'document', 'type' => 2],
        ]);
    }
}
