<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 20; $i++) {
            DB::table('cars')->insert([
                'title' => '丰田汉兰达 2015款 2.0T 自动 5座精英版(国Ⅴ)',
                'icon' => 'http://pic8.58cdn.com.cn/p1/big/n_v1bkuyfvl3os4vlwph7bua_99d3418873db65c7.jpg',
                'price' => 19,
                'content' => '本店车辆为4S店新车，汉兰达全系现车，均有检测报告或质保、可售全国！购车当天办齐车辆所有手续，合格证、发票、车辆信息表、一致性证书、使用说明书、保养手册、全国维修保养通讯录',
            ]);
        }
    }
}
