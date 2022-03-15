<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
    public function  home ()
    {
        return view('home',[
            "title" => "Home",
            'active' => 'home'
        ]);
    }


    public function  about ()
     {
        return view(' about', [
            "title"=> "About",
            'active' => 'about',
            "name" => "Zhong Chenle",
            "email"=> "chenlele@gmail.com",
            "image"=> "lele.jpg"
        ]);
     }


    public function index()
    {
         $title ='';
         if(request('category')) {
             $category = Category::firstWhere('slug', request('category'));
             $title = ' in '  . $category->name;
         }
         
          if(request('author')) {
              $author = User::firstWhere('username', request('author'));
              $title = 'by' . $author->name;
          }
         return view('posts', [
            "title"=> "All Posts" . $title,
            "active"=> 'posts',
            "posts" => Post::latest()->filter(request(['search','category', 'author' ]))
            ->paginate(7)->withQueryString()
           
        ]);
    }

    public function categories()
     {
        return view('categories', [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active"=> 'posts',
            "post"  => $post
        ]);
    }
}

