<?php namespace MantisEye\ExpertsSpeak\Models;

use Model;
use RainLab\User\Models\User;
use Graker\PhotoAlbums\Models\Photo;
use System\Models\File;
/**
 * Model
 */
class ExpertsComment extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mantiseye_expertsspeak_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'user' => ['RainLab\User\Models\User'],
        'photo_id' => ['Graker\PhotoAlbums\Models\Photo']
    ];

    public $attachOne = [
        'commentImage' => 'System\Models\File'
    ];

}
