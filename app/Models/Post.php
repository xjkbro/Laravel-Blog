<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function find($slug)
    {
        $post = static::all()->firstWhere('slug', $slug);
        if(!$post) {
            abort(404);
        }
        return $post;
    }
    public static function findOrFail($slug)
    {
        $post = static::find($slug);
        if(!$post) {
            abort(404);
        }
        return $post;
    }

    public static function all()
    {
        return cache()->remember('posts.all', 5, fn () => 
            collect(File::files(resource_path("posts")))
            ->map(fn ($file) => YamlFrontMatter::parseFile($file->getPathname()))
            ->map(fn ($doc) => new Post(
                $doc->title,
                $doc->excerpt,
                $doc->date,
                $doc->body(),
                $doc->slug
            ))->sortByDesc('date')
        );
    }
}
