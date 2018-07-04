<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Core extends Controller
{
    //
    public function getArticle($id)
    {
    	//return view('welcome');
    	echo 'Answer - '.$id;
    }
    public function getArticles()
    {
    	//return view('welcome');
    	//echo 'Answer - '.$id;
    	echo 'articles';
    }
}
