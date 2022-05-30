<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adminRecords = [
          ['id'=>1,'name'=>'Super Admin','type'=>'superadmin','vendor_id'=>0,'mobile'=>'9800000000'
          ,'email'=>'admin@admin.com','password'=>'$2a$12$su1GUjuPdker3QOPWgnXZOc6zOw5CbCqbFLVv/xQRkaj4bEep0pm6','image'=>'','status'=>1],
      ];
      admin::insert($adminRecords);
    }
}
