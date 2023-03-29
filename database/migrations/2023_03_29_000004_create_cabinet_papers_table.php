<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinetPapersTable extends Migration
{
    public function up()
    {
        Schema::create('cabinet_papers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cabinet_type');
            $table->integer('cabinet_num');
            $table->date('issue_date');
            $table->date('dispatch_date');
            $table->date('archive_date');
            $table->string('cabinet_title');
            $table->string('cabinet_ministry');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
