<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Qiboi',
               'email'=>'qiboi@dkm.com',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Zalfa',
               'email'=>'zalfa@dkm.com',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Parid',
               'email'=>'parid@dkm.com',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Kibem',
               'email'=>'kibem@dkm.com',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Raya',
               'email'=>'raya@dkm.com',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Dodi',
               'email'=>'dodi@dkm.com',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Yusran',
               'email'=>'yusran@dkm.com',
               'password'=> bcrypt('12345678'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
