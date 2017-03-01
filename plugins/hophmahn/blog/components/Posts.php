<?php namespace Hophmahn\Blog\Components;

use Cms\Classes\ComponentBase;
use Hophmahn\Blog\Models\Post;

class Posts extends ComponentBase
{
    public $posts;

    public function componentDetails()
    {
        return [
            'name'        => 'Posts Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->posts = $this->page['posts'] = $this->loadPosts();
    }

    public function loadPosts()
    {
        $posts = Post::orderBy('id', 'desc')->get();

        return $posts;
    }
}
