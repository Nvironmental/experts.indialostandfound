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

            // You should always check to see if you're extending correct model/controller
            if(!$widget->model instanceof PhotoModel) {
                return;
            }
            // Here you can't use addFields() because it will throw you an exception because form is not yet created 
            // and it does not have tabs and fields
            // For this example we will pretend that we want to add a new field named example_field
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
            // Ok that's it about adding field inside form, now we need to tell our model that this field is translatable
            
        });

    }
}
