<?php namespace Watchlear\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
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
    public $table = 'watchlear_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['actors'];

    public $belongsToMany = [
        'genres' => [
            'Watchlear\Movies\Models\Genre',
            'table'=>'watchlear_movies_movies_genres',
            'order'=>'genre_title'
        ],
         'actors' => [
            'Watchlear\Movies\Models\Actor',
            'table'=>'watchlear_movies_actors_movies',
            'order'=>'name'
        ]
    ];

    
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'movie_gallery' => 'System\Models\File'
    ];
}
