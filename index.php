<?php


class Post
{

    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [

    new Post('This is my first post', 'KW', true),
    new Post('This is my second post', 'MW', true),
    new Post('This is my third post', 'NW', true),
    new Post('This is my fourth post', 'JW', false),

];

$unpublishedPost = array_filter($posts, function ($post) {
    return $post->published;
});


$publishedPost = array_filter($posts, function ($post) {
    return !$post->published;
});



$postss = array_map(function ($post) {

    //return (array) $post;

    return ['Oishala'=> $post->author];

}, $posts);

//same thing in another way in one line.

$author = array_column($posts, 'author', 'title');





var_dump($postss);


// $database = require 'core/bootstrap.php';


// $router = new Router;

// require 'routes.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');

// require $router->direct($uri);
