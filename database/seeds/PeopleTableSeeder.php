<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.com',
            'age' => 21,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'jiro',
            'mail' => 'jiro@yamada.com',
            'age' => 27,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'saburo',
            'mail' => 'saburo@yamada.com',
            'age' => 45,
        ];

        DB::table('people')->insert($param);
    }
}
