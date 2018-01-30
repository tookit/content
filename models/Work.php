<?php

namespace Socklab\Content\Models;


/**
 * Model
 */
class Work extends Item
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'socklab_content_works';


    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'tags'
    ];

    public static function boot()
    {
        parent::boot();

    }

    public $belongsTo = [
        'category' => [
            Category::class
        ]
    ];

    public $attachMany = [
        'images' => [
            \System\Models\File::class
        ]
    ];

    public $morphTo = [
        WorkExtend::class
    ];

    public $morphToMany = [
        'tags' => [
            Tag::class,
            'name'=> 'taggable',
            'table' => 'socklab_content_taggables',
        ]
    ];





    public function save(array $options = NULL, $sessionKey = NULL)
    {
        parent::save($options, $sessionKey);

    }
}
