<?php namespace MantisEye\Vip;

use System\Classes\PluginBase;

use Rainlab\User\Controllers\Users as UsersController;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        UsersController::extendFormFields(function($form,$model,$context){
            $form->addFields([
                'vip' => [
                    'label'   => 'Vip Status',
                    'comment' => 'Assigns VIP status to the expert',
                    'type' => 'switch'
                    
                ]
            ]);
        });
    }
}
