<?php namespace Watchlear\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearMovies3 extends Migration
{
    public function up()
    {
        Schema::table('watchlear_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
    
    public function down()
    {
        Schema::table('watchlear_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
}
