<?php
namespace Socklab\Content\Models;

use October\Rain\Database\Model;

/**
 * Model
 */
class Category extends Model
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
    public $table = 'socklab_content_categories';


    public  function items()
    {
        return $this->hasMany(Item::class);
    }

    public $hasMany = [
      'works' =>[
          Work::class
      ]
    ];

}
