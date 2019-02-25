<?php namespace MantisEye\Albumfields;

use System\Classes\PluginBase;
use Graker\PhotoAlbums\Controllers\Albums as AlbumsController;
use Graker\PhotoAlbums\Models\Album as AlbumModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot () {
        AlbumsController::extendFormFields(function($form,$model,$context){
            if( !$model instanceof AlbumModel){ // check if this is not a album model, if true abort operation.
                return;
            }

            $form->addFields([
                'location' => [
                    'label'   => 'Album Location',
                    'comment' => 'Add location to this album. E.g Ujjain, Madhya Pradesh',
                    'type' => 'text',
                    'span' => 'left'
                ],
                'century' => [
                    'label'   => 'Album Date',
                    'comment' => 'What century does this album belong to. E.g 16th C.On.',
                    'type' => 'text',
                    'span' => 'right'
                ]
            ]);
        });
    }
}
