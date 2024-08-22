<?php

namespace Yamobile\ThirdPartyCode\Components;

use Cms\Classes\ComponentBase;
use Yamobile\ThirdPartyCode\Models\Target;

class CodesComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'yamobile.thirdpartycode::lang.components.codes.name',
            'description' => 'yamobile.thirdpartycode::lang.components.codes.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'target' => [
                'title'       => 'yamobile.thirdpartycode::lang.components.codes.properties.target.title',
                'description' => 'yamobile.thirdpartycode::lang.components.codes.properties.target.description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function get()
    {
        $targetName = $this->property('target');

        $target = Target::where('is_enabled', true)->where('value', $targetName)->first();
        if ($target) {
            $codes = $target->codes()->where('is_enabled', true)->get();

            return $codes;
        }

        return null;
    }
}
