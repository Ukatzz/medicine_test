<?php

namespace Yamobile\Staff\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Staff\Models\Member;

class MembersComponent extends ComponentBase
{
    public $members;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.staff::lang.components.members.name',
            'description' => 'yamobile.staff::lang.components.members.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'membersPerPage' => [
                'title' => 'yamobile.staff::lang.components.members.properties.membersPerPage.title',
                'description' => 'yamobile.staff::lang.components.members.properties.membersPerPage.description',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'default' => '20',
            ],
        ];
    }

    public function onRun()
    {
        $this->members = $this->loadMembers();
    }

    private function loadMembers()
    {
        $membersPerPage = $this->property('membersPerPage');
        $members = Member::isActive();

        if ($membersPerPage) {
            return $members->paginate($membersPerPage);
        }
        return $members->get();
    }
}
