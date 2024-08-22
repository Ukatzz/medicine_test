<?php

namespace Yamobile\ThirdPartyCode;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Yamobile\ThirdPartyCode\Components\CodesComponent::class => 'Codes',
        ];
    }

    public function registerSettings()
    {
    }
}
