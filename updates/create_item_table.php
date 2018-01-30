<?php

namespace Socklab\Content\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class CreateItemTable extends Migration
{

    protected $tbl = 'socklab_content_items';
    public function up()
    {
        Schema::create($this->tbl, function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id')->unsigned()->index()->default(0);
            $table->enum('content_type',['News','Works','Teams','Questions','Jobs'])->default('News');
            $table->string('title');
            $table->string('slug')->index();
            $table->text('description')->nullable();
            $table->text('body')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->tbl);
    }
}