<?php namespace Hophmahn\Blog\Components;

use Cms\Classes\ComponentBase;
use Hophmahn\Blog\Models\Post as PostModel;

class Post extends ComponentBase
{
    public $post;

    public function componentDetails()
    {
        return [
            'name'        => 'Post Component',
            'description' => 'Blog posts'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'default' => '{{ :slug }}',
                'type' => 'string',
            ]
        ];
    }

    public function onRun()
    {
        $this->post = $this->page['post'] = $this->loadPost();
    }

    public function loadPost()
    {
        $slug = $this->property('slug');

        $post = PostModel::where('slug', $slug)->get();

        if ($post)
            $post = $post[0];

        return $post;
    }
}
