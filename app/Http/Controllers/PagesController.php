<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use App\Models\User;
use Clockwork\Request\RequestType;

class PagesController extends Controller
{
    //
    public function index(){

       
        return view('home',[
            'title'=>'Home',
            'active'=> 'home',
            // "posts"=>Post::all()
            // "posts"=>Post::with(['author', 'category'])->latest()->get()
            // "posts"=>$posts->get()
            "posts"=>Post::latest()->get()

        ]);
    }
    public function show(Post $post){
        return view('news.news_kamera',[
            "title"=>"Single Post",
            'active'=>'news',
            "post" =>$post
            // "post" =>Post::find($id)
        ]);
    }

    // controller pages news
    public function news(){
        // dd(request('search')); untuk cek apakah sudah ditangkap proses get nya
    


        return view("news",[
            "title" => "News",
            'active'=>'news',
            // 'posts'=>Post::all()
            'posts'=>Post::latest()->filter(request(['search', 'category']))->get()
           
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
            'active'=>'smartphone',
            'posts'=>Post::latest()->get()
        ]);
    }

   
    public function postSmartphone(Post $post){
        return view("smartphone/show/show",[
            "title" => "Smartphone",
            'active'=>'smartphone',
            "post"=>$post
        ]);
    }
    public function postLaptop(Post $post){
        return view("laptop/show/show",[
            "title" => "Laptop",
            'active'=>'laptop',
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
            'active'=>'gadget',
            'posts'=>Post::all()
        ]);
    }
    public function postGadget(Post $post){
        return view("gadget/show/postGadget",[
            "title"=>"Gadget",
            'active'=>'gadget',
            "post"=>$post
        ]);
    }

    // controller pages tutorial
    public function tutorial(){
        return view('tutorial',[
            "title"=>"Tutorial",
            'active'=>'tutorial'
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
            "title"=>"About Us",
            'active'=> 'about'
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
            'active'=>'categories',
            'categories'=>Category::all()
        ]);
    }
    public function category(Category $category){
        return view('showCategories', [
            'title'=>$category->name,
            'active'=>'categories',
            'posts'=>$category->posts,
            'category'=>$category->name
         ]);
    }
    public function showCategories(){
        return view('showCategories', [
            "title" => "Show Categories",
            'active'=>'categories',
            // 'posts'=>Post::all()
            'posts'=>Post::latest()->filter(request(['search', 'category']))->get()
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

