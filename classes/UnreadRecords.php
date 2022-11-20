<?php

namespace GoTech\Forms\Classes;

use Schema;
use GoTech\Forms\Models\Record;

class UnreadRecords {

    public static function getTotal() {
        if (Schema::hasTable('gotech_forms_records')) {
            $unread = Record::where('unread', 1)->count();
        }

        return (isset($unread) && $unread > 0) ? $unread : null;
    }

}

?>