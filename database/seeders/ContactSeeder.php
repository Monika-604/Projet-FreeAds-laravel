<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=0;$i<5;$i++)
       {
           Contact::create
           (
               [
               'name'=> "name$i",
                'email'=>"email$i",
                'subject'=>"subject$i",
                  "message"=>"message$i",

               ]
           );

       }
    }
}
