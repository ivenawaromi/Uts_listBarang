<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
             [
                'code_unit' => 'ml',
                'name' =>'Mililiter'
             ],
             [
                'code_unit' => 'L',
                'name' =>'Liter'
             ],
             [
                'code_unit' => 'kg',
                'name' =>'Kilogram'
             ],
             [
                'code_unit' => 'g',
                'name' =>'Gram'
             ],
             [
                'code_unit' => 'bh',
                'name' =>'buah'
             ],
             [
                'code_unit' => 'Lsn',
                'name' =>'Lusin'
             ],
        ]);
    }
}
