<?php

namespace Yamobile\ThirdPartyCode\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Codes extends Controller
{
    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController', 'Backend\Behaviors\ReorderController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Yamobile.ThirdPartyCode', 'code');
    }
}
