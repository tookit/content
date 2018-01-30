<?php namespace Socklab\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSocklabContentWorks extends Migration
{
    public function up()
    {
        Schema::dropIfExists('socklab_content_works');
    }
    
    public function down()
    {
        Schema::create('socklab_content_works', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('client', 255);
            $table->string('project_url', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}