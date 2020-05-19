<?php namespace Watchlear\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('watchlear_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlear_movies_genres');
    }
}
