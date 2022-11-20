<?php

    namespace GoTech\Forms\Updates;

    use Schema;
    use October\Rain\Database\Updates\Migration;
    use GoTech\Forms\Models\Record;

    class AddUnreadField extends Migration {

        public function up() {

            // CREATE FIELD
            Schema::table('gotech_forms_records', function ($table) {
                $table->boolean('unread')->default(1)->after('ip');
            });
            
            // UPDATE EXISTING RECORDS TO READED
            Record::where('unread', 1)->update(['unread' => 0]);

        }

        public function down() {
            if(Schema::hasColumn('gotech_forms_records', 'unread')) {
                Schema::table('gotech_forms_records', function ($table) {
                    $table->dropColumn('unread');
                });
            }
        }

    }

?>
