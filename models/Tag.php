<?php namespace Socklab\Content\Models;

use October\Rain\Database\Model;

/**
 * Model
 */
class Tag extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'socklab_content_tags';

    public $morphedByMany = [
        'news'  => [News::class, 'name' => 'taggable','table'=>'socklab_content_taggables'],
        'works' => [Work::class, 'name' => 'taggable','table'=>'socklab_content_taggables']
    ];

}
