<?php namespace Hophmahn\Blog\Models;

use Model;

/**
 * Post Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Sluggable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hophmahn_blog_posts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Generate a slug from title
     */
    protected $slugs = ['slug' => 'title'];

    /**
     * @var array Make translatable some fields
     */
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array List of translatable fields
     */
    public $translatable = ['title', 'text'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function beforeSave()
    {
        $this->setSluggedValue('slug', 'title');
    }

}
