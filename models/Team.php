<?php

namespace Socklab\Content\Models;

use Backend\Models\User;
use October\Rain\Database\Model;

/**
 * Model
 */
class Team extends Model
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
    public $table = 'socklab_content_teams';

    public $belongsTo = [
      'user'  => [
          User::class
      ]
    ];

    public $attachOne = [
        'avatar' => [
            \System\Models\File::class
        ]
    ];

}
