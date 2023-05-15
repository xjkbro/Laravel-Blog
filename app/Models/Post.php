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
    public function __constructor($title, $excerpt, $date, $body){
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }
    public static function find($slug) {
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}", now()->addHours(), fn () => file_get_contents($path));
    }
    public static function all() {
        $files = File::files(resource_path("posts/"));
        // $documents  = [];
        // foreach ($files as $file) {
        //     $documents[] = YamlFrontMatter::parseFile($file);
        // }
        return array_map(fn($file) => $file->getContents(), $files);
    }
}
