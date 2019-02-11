<?php namespace MantisEye\Photofields;

use System\Classes\PluginBase;
use Graker\PhotoAlbums\Models\Photo as PhotoModel;
use Event;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot(){
        Event::listen('backend.form.extendFieldsBefore', function($widget) {
            //we are adding our fields before our form is being created so that the are also available as a relation to albums
           
            if(!$widget->model instanceof PhotoModel) {
                return;
            }
           
            $widget->fields['photo_location'] = [
                'label' => 'Photo Location',
                'comment' => 'Enter photo location. E.g -> Ujjain, Madhya Pradesh',
                'type' => 'text',
            ];
            $widget->fields['photo_latitude'] = [
                'label' => 'Photo Latitude',
                'comment' => 'Enter photo latitude. E.g -> 45.0978',
                'type' => 'text',
            ];
            $widget->fields['photo_longitude'] = [
                'label' => 'Photo Longitude',
                'comment' => 'Enter photo longitude. E.g -> -75.0978',
                'type' => 'text',
            ];
       
            
        });

    }
}
