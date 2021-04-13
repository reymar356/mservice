<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\blogModel;

class BlogController extends Controller
{
    private $request;
    
     
    public function __construct(Request $request)
    {
        $this->request = $request;
        
    }


    public function getUsers()
    {
        $users =  blogModel::all();
        return response()->json($users);
    }

    
}
