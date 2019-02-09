<?php namespace MantisEye\Reliccordinates;

use System\Classes\PluginBase;

use Graker\PhotoAlbums\Controllers\Photos as PhotosController;

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
        PhotosController::extendFormFields(function($form,$model,$context){
            $form->addFields([
                'lat' => [
                    'label'   => 'Latitude',
                    'comment' => 'Add the latitude for this relic',
                    'type' => 'text',
                    'span' => 'left'
                ],
                'long' => [
                    'label'   => 'Longititude',
                    'comment' => 'Add the longitude for this relic',
                    'type' => 'text',
                    'span' => 'right'
                ]
            ]);
        });
    }
}
