<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
 

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug'
    ];

    
    public function category() {
        return $this->belongsTo('App\category');
    }

    
    public static function getPostSlugFromTitle ($title) {
        //generiamo slug base
        //finche slug è nel db 
            // aggiungiamo un nmero progressivo
            // se non esiste aggiungo slug nel model
            $base_slug = str::slug($title, '-');
            $slug = $base_slug;
            $count = 1;
            $post_found = Post::where('slug', '=', $slug)->first();
            while ($post_found) {
                $slug = $base_slug . '-' . $count;
                $post_found = Post::where('slug', '=', $slug)->first();
                $count++;
            }
            return $slug;
    }
}
