<?php

    namespace GoTech\Forms\Models;

    use Lang, Model;
    use Cms\Classes\Theme;
    use Cms\Classes\Page;

    class Settings extends Model {

        use \October\Rain\Database\Traits\Validation;

        public $implement      = ['System.Behaviors.SettingsModel'];
        public $settingsCode   = 'gotech_forms_settings';
        public $settingsFields = 'fields.yaml';

        // public function __construct() {
        //     $this->attributes = [
        //         'global_messages_success' => Lang::get('gotech.forms::lang.settings.global_messages_success.default'),
        //         'global_messages_errors'  => Lang::get('gotech.forms::lang.settings.global_messages_errors.default'),
        //     ];
        //     parent::__construct();
        // }

        public $rules = [
            'gdpr_days' => 'required|numeric',
        ];

        public $attributeNames = [
            'gdpr_days' => 'GDPR',
        ];

    }

?>