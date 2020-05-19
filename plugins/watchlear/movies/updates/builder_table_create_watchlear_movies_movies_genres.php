<?php namespace Watchlear\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('watchlear_movies_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlear_movies_movies_genres');
    }
}
