<?php

class Page extends SiteTree
{

    public static $allowed_actions = array (
    );

    private static $db = array(
        'Tagline' => 'Varchar',
        'Transition_inc'=>'Varchar(100)',
        'Transition_dec'=>'Varchar(100)',
    );

    private static $has_one = array(
    );


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', TextField::create('Tagline'), 'Content');

        $transitions = array(
            'slide-right' => 'Slide Right',
            'slide-left' => 'Slide Left',
            'fade' => 'Fade',
            'slide-down' => 'Slide Down',
            'slide-up' => 'Slide Up',
            'scale-down' => 'Scale Down',
            'scale-up' => 'Scale Up',
        );

        $fields->addFieldToTab('Root.Page Settings',
            DropdownField::create(
                'Transition_inc',
                'Transition Increment',
                $transitions
            )
        );
        $fields->addFieldToTab('Root.Page Settings',
            DropdownField::create(
                'Transition_dec',
                'Transition Decrement',
                $transitions
            )
        );

        return $fields;
    }

}
