<?php namespace Watchlear\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
         return [
            'Watchlear\Contact\Components\ContactForm' => 'contactform'
        ];
    }

    public function registerSettings()
    {
    }
}
