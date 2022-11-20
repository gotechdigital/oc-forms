<?php

    namespace GoTech\Forms;

    use Backend, Lang, Validator;
    use System\Classes\PluginBase;
    use System\Classes\SettingsManager;
    use GoTech\Forms\Classes\BackendHelpers;
    use GoTech\Forms\Classes\GDPR;
    use GoTech\Forms\Classes\ReCaptchaValidator;
    use GoTech\Forms\Classes\UnreadRecords;
    use GoTech\Forms\Models\Settings;

    class Plugin extends PluginBase {

        public function pluginDetails() {
            return [
                'name'        => 'gotech.forms::lang.plugin.name',
                'description' => 'gotech.forms::lang.plugin.description',
                'author'      => 'Martin M. (Forked by Blake Jones)',
                'icon'        => 'icon-bolt',
                'homepage'    => 'https://github.com/gotechdigital/oc-forms'
            ];
        }

        public function registerNavigation() {
            if(Settings::get('global_hide_button', false)) { return; }
            return [
                'forms' => [
                    'label'       => 'gotech.forms::lang.menu.label',
                    'icon'        => 'icon-bolt',
                    'iconSvg'     => 'plugins/gotech/forms/assets/imgs/icon.svg',
                    'url'         => BackendHelpers::getBackendURL(['gotech.forms.access_records' => 'gotech/forms/records', 'gotech.forms.access_exports' => 'gotech/forms/exports'], 'gotech.forms.access_records'),
                    'permissions' => ['gotech.forms.*'],
                    'sideMenu' => [
                        'records' => [
                            'label'        => 'gotech.forms::lang.menu.records.label',
                            'icon'         => 'icon-database',
                            'url'          => Backend::url('gotech/forms/records'),
                            'permissions'  => ['gotech.forms.access_records'],
                            'counter'      => UnreadRecords::getTotal(),
                            'counterLabel' => 'Un-Read Messages'
                        ],
                        'exports' => [
                            'label'       => 'gotech.forms::lang.menu.exports.label',
                            'icon'        => 'icon-download',
                            'url'         => Backend::url('gotech/forms/exports'),
                            'permissions' => ['gotech.forms.access_exports']
                        ],
                    ]
                ]
            ];
        }

        public function registerSettings() {
            return [
                'config' => [
                    'label'       => 'gotech.forms::lang.menu.label',
                    'description' => 'gotech.forms::lang.menu.settings',
                    'category'    => SettingsManager::CATEGORY_CMS,
                    'icon'        => 'icon-bolt',
                    'class'       => 'GoTech\Forms\Models\Settings',
                    'permissions' => ['gotech.forms.access_settings'],
                    'order'       => 500
                ]
            ];
        }

        public function registerPermissions() {
            return [
                'gotech.forms.access_settings' => ['tab' => 'gotech.forms::lang.permissions.tab', 'label' => 'gotech.forms::lang.permissions.access_settings'],
                'gotech.forms.access_records'  => ['tab' => 'gotech.forms::lang.permissions.tab', 'label' => 'gotech.forms::lang.permissions.access_records'],
                'gotech.forms.access_exports'  => ['tab' => 'gotech.forms::lang.permissions.tab', 'label' => 'gotech.forms::lang.permissions.access_exports'],
                'gotech.forms.gdpr_cleanup'    => ['tab' => 'gotech.forms::lang.permissions.tab', 'label' => 'gotech.forms::lang.permissions.gdpr_cleanup'],
            ];
        }

        public function registerComponents() {
            return [
                'GoTech\Forms\Components\GenericForm' => 'genericForm',
                'GoTech\Forms\Components\UploadForm'  => 'uploadForm',
                'GoTech\Forms\Components\EmptyForm'   => 'emptyForm',
            ];
        }

        public function registerMailTemplates() {
            return [
                'gotech.forms::mail.notification' => Lang::get('gotech.forms::lang.mails.form_notification.description'),
                'gotech.forms::mail.autoresponse' => Lang::get('gotech.forms::lang.mails.form_autoresponse.description'),
            ];
        }

        public function register() {
            $this->app->resolving('validator', function($validator) {
                Validator::extend('recaptcha', 'GoTech\Forms\Classes\ReCaptchaValidator@validateReCaptcha');
            });
        }

        public function registerSchedule($schedule) {
            $schedule->call(function () {
                $records = GDPR::cleanRecords();
            })->daily();
        }

    }

?>
