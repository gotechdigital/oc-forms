<?php

    namespace GoTech\Forms\Components;

    use GoTech\Forms\Classes\MagicForm;

    class GenericForm extends MagicForm {

        public function componentDetails() {
            return [
                'name'        => 'gotech.forms::lang.components.generic_form.name',
                'description' => 'gotech.forms::lang.components.generic_form.description',
            ];
        }

    }

?>