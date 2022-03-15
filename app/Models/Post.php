<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use stdClass;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

   // protected $fillable = ['title', 'excerpt', 'body'];
   protected $guarded = ['id'];
   protected $with    = ['category', 'author'];


   public function scopeFilter($query, array $filters)
   {
    $query->when($filters['search'] ?? false, function($query, $search) {
        return $query->where(function($query) use ($search) {
               $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
         });
     });
     //callback
      $query->when($filters['category'] ?? false,function($query, $category){
         return $query->whereHas('category', function ($query,) use ($category) {
                 $query->where('slug', $category);
         });
      });
       // error function
      $query->when($filters['author'] ?? false, fn($query, $author) =>
      $query->whereHas('author', fn($query) =>
         $query->where('username', $author)
      )
   );  
}

   public function category()
   {
       return $this->belongsTo(Category::class);
   }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function create($request) {
        $data = new Post();
        $data->title = $request->title;
        $data->slug  = $request->slug;
        $data->category_id = $request->category_id;
        $data->image = $request->file('image')->store('post-images');
        $data->body    = $request->body;
        $data->user_id = auth()->user()->id;
        $data->excerpt = Str::limit(strip_tags($request->body), 200);

        // session(['posts' => $data]);

        $data->save();

        return $data;
    }

}
