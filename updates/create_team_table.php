<?php

namespace Socklab\Content\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class CreateTeamTable extends Migration
{

    protected $tbl = 'socklab_content_teams';
    public function up()
    {
        Schema::create($this->tbl, function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nickname');
            $table->string('position');
            $table->text('intro');
            $table->text('specity');
            $table->date('join_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->tbl);
    }
}