<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\admin;
use App\Models\Contact;
class Dashboard extends Controller
{
    public function index(){
        $article=Article::all()->count();
        $hit=Article::sum('hit');
        $category=Category::all()->count();
        $page=Category::all()->count();
        $admin=Admin::all('name');
        $message=Contact::all()->count();

        return view('back.back',compact('article','hit','category','page','admin','message'));
    }
}
