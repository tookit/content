<?php namespace Socklab\Content\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Team extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Socklab.Content', 'main-menu-item', 'side-menu-team');
    }
}
