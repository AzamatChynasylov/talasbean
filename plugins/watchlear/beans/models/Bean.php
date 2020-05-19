<?php namespace Watchlear\Beans\Models;

use Model;

/**
 * Model
 */
class Bean extends Model
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
    public $table = 'watchlear_beans_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachOne = [
        'beanimage' => 'System\Models\File'
    ];
}
