<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()    
    {   
        $array = array(
            array('videos' => array('title' => '2022 OSCP EXAM CHANGES - Goodbye Buffer Overflow, Hello Active Directory','url' => "https://www.youtube.com/watch?v=uvqdSGlwEkA", 'description' => 'What do YOU think about the OSCP exam changes? Drop your thoughts in the comments!')),
            array('videos' => array('title' => 'Authorization vs. Authentication (Google Bug Bounty)','url' => "https://www.youtube.com/watch?v=hmJKUQlcGAc", 'description' => 'Authorization and Authentication can be confusing. In this video we look at their differences, and then focus on valid and invalid authorization bugs.            ')),
            array('videos' => array('title' => 'HackTheBox - Pikaboo','url' => "https://www.youtube.com/watch?v=4tXFHoeOytE", 'description' => 'HackTheBox - Pikaboo')),
            array('videos' => array('title' => 'HackTheBox - Oouch','url' => "https://www.youtube.com/watch?v=EUtqjK27MxQ", 'description' => 'HackTheBox - Oouch')),
            array('videos' => array('title' => 'UHC - Jarmis','url' => "https://www.youtube.com/watch?v=R5aNxdD0_bs", 'description' => 'UHC - Jarmis'))
    );

        foreach ($array as $element) {
            $post = new Post();
            $post->fill([
                'title' => $element{'videos'}{'title'},
                'url' => $element{'videos'}{'url'},
                'description' => $element{'videos'}{'description'}
            ])->save();
        }
    }
}