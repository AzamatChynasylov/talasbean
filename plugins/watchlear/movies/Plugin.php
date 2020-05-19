<?php namespace Watchlear\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Watchlear\Movies\Components\Actors' => 'actors',
            'Watchlear\Movies\Components\ActorForm' => 'actorform'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Watchlear\Movies\FormWidgets\Actorbox' =>[
                'name' => 'Actorbox field',
                'code' => 'actorbox'
            ],
            
        ];
    }

    public function registerSettings()
    {
    }
}
