<?php

namespace Yamobile\Staff\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Staff\Models\Member;

class MemberComponent extends ComponentBase
{
    public $member;
    
    public function componentDetails()
    {
        return [
            'name' => 'yamobile.staff::lang.components.member.name',
            'description' => 'yamobile.staff::lang.components.member.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'yamobile.staff::lang.components.member.properties.slug.title',
                'description' => 'yamobile.staff::lang.components.member.properties.slug.description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function onRun()
    {
        $this->member = $this->loadMember();

        if (!$this->member) {
            $this->setStatusCode(404);

            return $this->controller->run('404');
        }
    }

    private function loadMember()
    {
        $slug = $this->property('slug');
        $member = Member::isActive()->where('slug', $slug)->first();

        return $member;
    }
}
