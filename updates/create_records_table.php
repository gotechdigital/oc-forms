<?php

namespace GoTech\Forms\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRecordsTable extends Migration {

    public function up() {
        
        if (Schema::hasTable('martin_forms_records')) {
            Schema::rename('martin_forms_records', 'gotech_forms_records');
        } else {
            Schema::create('gotech_forms_records', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('group')->nullable();
                $table->text('form_data')->nullable();
                $table->string('ip')->nullable();
                $table->boolean('unread')->default(1);
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    public function down() {
        Schema::dropIfExists('gotech_forms_records');
    }

}

?>