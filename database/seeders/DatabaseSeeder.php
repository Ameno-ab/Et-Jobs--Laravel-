<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(2)->create();

        $user=User::factory()->create([
            'name' => 'John doe',
            'email' => 'jogn@gmail.com',
            // 'password' => '123456'
        ]);

       Listing::factory(6)->create([
        'user_id' => $user->id
       ]);
//         Listing:: create([
//             'title'=>'react devloper',
//             'tags'=>'asdas',
//             'company'=>'asdas',
//             'location'=>'sadsa',
//             'email'=>'sada',
//             'website'=>'jhhygy',
//             'description'=>'devloping react with sda media'
//         ],
//        );
//        Listing:: create([
//         'title'=>'laravel devloper',
//         'tags'=>'asdas',
//         'company'=>'asdas',
//         'location'=>'sadsa',
//         'email'=>'sada',
//         'website'=>'jhhygy',
//         'description'=>'devloping react with sda media'
//     ],
//    );
    }
}
