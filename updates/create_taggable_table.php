<?php

namespace Socklab\Content\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTaggableTable extends Migration
{

    protected $tbl = 'socklab_content_taggables';
    public function up()
    {
        Schema::create($this->tbl, function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('tag_id');
            $table->nullableMorphs('taggable');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->tbl);
    }
}