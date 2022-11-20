<?php

    namespace GoTech\Forms\Updates;

    use Schema;
    use October\Rain\Database\Updates\Migration;

    class AddGroupField extends Migration {

        public function up() {
            Schema::table('gotech_forms_records', function ($table) {
                $table->string('group')->default('(Empty)')->after('id');
            });

        }

        public function down() {
            if(Schema::hasColumn('gotech_forms_records', 'group')) {
                Schema::table('gotech_forms_records', function ($table) {
                    $table->dropColumn('group');
                });
            }
        }

    }

?>