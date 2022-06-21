<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use App\Models\User;


class PagesController extends Controller
{
    //
    public function index(){
        return view('home',[
            'title'=>'Home',
            // "posts"=>Post::all()
            "posts"=>Post::with(['author', 'category'])->latest()->get(),

        ]);
    }
    public function show(Post $post){
        return view('news.news_kamera',[
            "title"=>"Single Post",
            "post" =>$post
            // "post" =>Post::find($id)
        ]);
    }

    // controller pages news
    public function news(){
        return view("news",[
            "title" => "News",
            'posts'=>Post::all()
           
        ]);
    }
    // public function news_kamera(){
    //     return view("news/news_kamera",[
    //         "title" => "News",
            
    //     ]);
    // }

    // controller pages smartphone
    public function smartphone(){
        return view("smartphone",[
            "title" => "Smartphone ",
            'posts'=>Post::latest()->get()
        ]);
    }

    // controller pages xiaomi
    public function postSmartphone(Post $post){
        return view("smartphone/show/show",[
            "title" => "Smartphone",
            "post"=>$post
        ]);
    }

    // controller pages asus

    // public function smartphone_asus(){
    //     return view("smartphone_asus",[
    //         "title" => "Smartphone",
    //         'posts'=>Post::all()
    //     ]);
    // }
    // public function asusM2(Post $post){
    //     return view("smartphone/asus/asusM2",[
    //         "title" => "Smartphone",
    //         "post"=>$post
    //     ]);
    // }

    // controller pages samsung

    // public function smartphone_samsung(){
    //     return view("smartphone_samsung",[
    //         "title" => "Smartphone",
    //         'posts'=>Post::all()
    //     ]);
    // }
    // public function samsungS22(Post $post){
    //     return view("smartphone/samsung/samsungS22",[
    //         "title" => "Smartphone",
    //         "post"=>$post
    //     ]);
    // }


    // controller pages gadget
    public function gadget(){
        return view("gadget",[
            "title"=>"Gadget",
            'posts'=>Post::all()
        ]);
    }
    public function postGadget(Post $post){
        return view("gadget/show/postGadget",[
            "title"=>"Gadget",
            "post"=>$post
        ]);
    }

    // controller pages tutorial
    public function tutorial(){
        return view('tutorial',[
            "title"=>"Tutorial"
        ]);
    }
    public function baterai_hp(){
        return view('tutorial/ganti_baterai_hp',[
            "title"=>"Tutorial"
        ]);
    }

    //controller pages laptop
    public function laptop_acer(){
        return view('laptop_acer',[
            "title"=>"Laptop",
            "laptops"=>Post::all()
        ]);
    }

    public function laptop_asus(){
        return view('laptop_asus',[
            "title"=>"Laptop",
            "laptops"=>Post::all()
        ]);
    }

    public function laptop_axioo(){
        return view('laptop_axioo',[
            "title"=>"Laptop",
            "laptops"=>Post::all()
        ]);
    }

    public function acer_1(Post $laptop){
        return view('laptop.acer.acer_1',[
            "title"=>"Laptop",
            "laptop"=>$laptop
        ]);
    }

    public function asus_1(Post $laptop){
        return view('laptop.asus.asus_1',[
            "title"=>"Laptop",
            "laptop"=>$laptop
        ]);
    }

    public function axioo_1(Post $laptop){
        return view('laptop.axioo.axioo_1',[
            "title"=>"Laptop",
            "laptop"=>$laptop
        ]);
    }

    // controller pages about us
    public function about_us(){
        return view('about/about_us',[
            "title"=>"About Us"
        ]);
    }

    // controller login
    // public function login(){
    //     return view('login',[
    //         "title"=>"Login"
    //     ]);
    // }


    // controller categories

    public function categories(){
        return view('category.categories',[
            'title'=>'Post Categories',
            'categories'=>Category::all()
        ]);
    }
    public function category(Category $category){
        return view('smartphone', [
            'title'=>$category->name,
            'posts'=>$category->posts,
            'category'=>$category->name
         ]);
    }
    // public function categories_laptop(){
    //     return view('category.categories_laptop',[
    //         'title'=>'Post Categories',
    //         'laptops'=>Post::all()
    //     ]);
    // }
    // public function category_laptop(Category $category){
    //     return view('category.category_laptop', [
    //         'title'=>$category->name,
    //         'laptops'=>$category->laptops,
    //         'category'=>$category->name
    //      ]);
    // }


    // public function category_laptop_acer(Category $category){
    //     return view('category.category_laptop_acer', [
    //         'title'=>$category->name,
    //         'laptops'=>$category->laptops,
    //         'category'=>$category->name
    //      ]);
    // }
    // public function category_laptop_asus(Category $category){
    //     return view('category.category_laptop_asus', [
    //         'title'=>$category->name,
    //         'laptops'=>$category->laptops,
    //         'category'=>$category->name
    //      ]);
    // }

    // public function category_laptop_axioo(Category $category){
    //     return view('category.category_laptop_axioo',[
    //         'title'=>$category->name,
    //         'laptops'=>$category->laptops,
    //         'category'=>$category->name
    //     ]);
    // }

    public function author(User $author){
        return view('postingan.post',[
            'title'=>'User Posts',
            'posts' => $author->posts,
            'laptops' => $author->laptops
        ]);
    }

    // public function smartCategories(){
    //     return view('category.smartphone',[
    //         'title'=>'Post Smartphones',
    //         'smartphones'=>Smartphone::all()
    //     ]);
    // }
    // public function smartCategory(Smartphone $smartphone){
    //     return view('category.smartphone', [
    //         'title'=>$smartphone->name,
    //         'posts'=>$smartphone->posts,
    //         'smartphone'=>$smartphone->name
    //     ]);
    // }

}

