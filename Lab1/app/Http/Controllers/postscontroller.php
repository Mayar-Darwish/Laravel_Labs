<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postscontroller extends Controller
{
    
    function getPosts(){
        $posts=[
            ["id"=>'1',"Title"=>"Learn PHP", "PostedBY"=>"Ahmed", "CreatedAt"=>"2018-04-10"], 
            ["id"=>'2',"Title"=>"Solid Princible", "PostedBY"=>"Mhme", "CreatedAt"=>"2018-04-12"], 
            ["id"=>'3',"Title"=>"Design Patterns", "PostedBY"=>"Ali", "CreatedAt"=>"2018-04-13"]
            
        ];

        return view("posts",['posts'=>$posts]);
    }
}
