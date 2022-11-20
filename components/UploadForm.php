<?php

    namespace GoTech\Forms\Components;

    use Lang;
    use October\Rain\Filesystem\Definitions;
    use GoTech\Forms\Classes\MagicForm;
    use GoTech\Forms\Models\Record;

    class UploadForm extends MagicForm {

        use \GoTech\Forms\Traits\FileUploader;

        public function componentDetails() {
            return [
                'name'        => 'gotech.forms::lang.components.upload_form.name',
                'description' => 'gotech.forms::lang.components.upload_form.description',
            ];
        }

        public function init() {
            parent::init();
            $this->fileTypes       = $this->processFileTypes(true);
            $this->maxSize         = $this->property('maxSize');
            $this->placeholderText = $this->property('placeholderText');
            $this->removeText      = $this->property('removeText');
            $this->setProperty('deferredBinding', 1);
            $this->bindModel('files', new Record);
        }

        public function onRun() {
            parent::onRun();
            $this->addCss('assets/css/uploader.css');
            $this->addJs('assets/vendor/dropzone/dropzone.js');
            $this->addJs('assets/js/uploader.js');
            $this->isMulti = $this->property('uploader_multi');
            if($result = $this->checkUploadAction()) { return $result; }
        }

        public function defineProperties() {
            $local = [
                'mail_uploads' => [
                    'title'             => 'gotech.forms::lang.components.shared.mail_uploads.title',
                    'description'       => 'gotech.forms::lang.components.shared.mail_uploads.description',
                    'type'              => 'checkbox',
                    'default'           => false,
                    'group'             => 'gotech.forms::lang.components.shared.group_mail',
                    'showExternalParam' => false
                ],
                'uploader_enable' => [
                    'title'             => 'gotech.forms::lang.components.shared.uploader_enable.title',
                    'description'       => 'gotech.forms::lang.components.shared.uploader_enable.description',
                    'default'           => false,
                    'type'              => 'checkbox',
                    'group'             => 'gotech.forms::lang.components.shared.group_uploader',
                    'showExternalParam' => false,
                ],
                'uploader_multi' => [
                    'title'             => 'gotech.forms::lang.components.shared.uploader_multi.title',
                    'description'       => 'gotech.forms::lang.components.shared.uploader_multi.description',
                    'default'           => true,
                    'type'              => 'checkbox',
                    'group'             => 'gotech.forms::lang.components.shared.group_uploader',
                    'showExternalParam' => false,
                ],
                'placeholderText' => [
                    'title'             => 'gotech.forms::lang.components.shared.uploader_pholder.title',
                    'description'       => 'gotech.forms::lang.components.shared.uploader_pholder.description',
                    'default'           => Lang::get('gotech.forms::lang.components.shared.uploader_pholder.default'),
                    'type'              => 'string',
                    'group'             => 'gotech.forms::lang.components.shared.group_uploader',
                    'showExternalParam' => false,
                ],
                'removeText' => [
                    'title'             => 'gotech.forms::lang.components.shared.uploader_remFile.title',
                    'description'       => 'gotech.forms::lang.components.shared.uploader_remFile.description',
                    'default'           => Lang::get('gotech.forms::lang.components.shared.uploader_remFile.default'),
                    'type'              => 'string',
                    'group'             => 'gotech.forms::lang.components.shared.group_uploader',
                    'showExternalParam' => false,
                ],
                'maxSize' => [
                    'title'             => 'gotech.forms::lang.components.shared.uploader_maxsize.title',
                    'description'       => 'gotech.forms::lang.components.shared.uploader_maxsize.description',
                    'default'           => '5',
                    'type'              => 'string',
                    'group'             => 'gotech.forms::lang.components.shared.group_uploader',
                    'showExternalParam' => false,
                ],
                'fileTypes' => [
                    'title'             => 'gotech.forms::lang.components.shared.uploader_types.title',
                    'description'       => 'gotech.forms::lang.components.shared.uploader_types.description',
                    'default'           => Definitions::get('defaultExtensions'),
                    'type'              => 'stringList',
                    'group'             => 'gotech.forms::lang.components.shared.group_uploader',
                    'showExternalParam' => false,
                ],
            ];
            return array_merge(parent::defineProperties(), $local);
        }

    }

?>