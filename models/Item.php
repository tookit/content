<?php

namespace Socklab\Content\Models;

use October\Rain\Database\Model;

/**
 * Model
 */
class Item extends Model
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
    public $table = 'socklab_content_items';


    public $belongsTo = [
        'category' => [
            Category::class
        ]
    ];



}
