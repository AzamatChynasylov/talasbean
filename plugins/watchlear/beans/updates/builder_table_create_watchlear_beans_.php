<?php namespace Watchlear\Beans\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearBeans extends Migration
{
    public function up()
    {
        Schema::create('watchlear_beans_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('type')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlear_beans_');
    }
}
