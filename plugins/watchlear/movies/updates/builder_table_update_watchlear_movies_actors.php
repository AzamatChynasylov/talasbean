<?php namespace Watchlear\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearMoviesActors extends Migration
{
    public function up()
    {
        Schema::table('watchlear_movies_actors', function($table)
        {
            $table->string('lastname')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('watchlear_movies_actors', function($table)
        {
            $table->dropColumn('lastname');
        });
    }
}
