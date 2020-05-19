<?php namespace Watchlear\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearMovies extends Migration
{
    public function up()
    {
        Schema::table('watchlear_movies_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('watchlear_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
