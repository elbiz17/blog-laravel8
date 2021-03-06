<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;



class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title','author', 'excerpt', 'body' ];
    protected $guarded = ['id'];

    protected $with =['category', 'author'];


    public function scopeFilter($query, array $filters){
        
        // $query->when($filters['search'] ?? false, function($query, $search) {
        //     return $query->where('title', 'like', '%' . $search . '%')
        //                 ->orWhere('body', 'like', '%' . $search . '%');
        // });

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                             ->orWhere('body', 'like', '%' . $search . '%');
             });
         });


        // versi isset
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //             ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // versi arrow function
    // $query->when($filters['search'] ?? false, fn($query, $search)=>
    //      $query->where(fn($query)=>
    //         $query->where('title', 'like', '%' . $search . '%')
    //               ->orWhere('body', 'like', '%' . $search . '%')
    //      )
    
    
    //     );


        // versi callback
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        // versi arrow function
        $query->when($filters['author'] ?? false, fn($query, $author)=>
            $query->whereHas('author', fn($query)=>
                $query->where('username', $author)
            )
        );
    }
    // public function scopeFilter($query, array $filters){
        
    //     if(isset($filters['search']) ? $filters['search'] : false){
    //         return $query->where('title', 'like', '%' . request('search') . '%')
    //                ->orWhere('body', 'like', '%' . request('search') . '%');
    //     }
    // }
    // public function scopeFilter($query){
        
    //     if(request('search')){
    //         return $query->where('title', 'like', '%' . request('search') . '%')
    //                ->orWhere('body', 'like', '%' . request('search') . '%');
    //     }
    // }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    
    // route model binding modification with slug
    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable(): array  {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


}

