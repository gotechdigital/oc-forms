<?php

    namespace GoTech\Forms\Components;

    use GoTech\Forms\Classes\MagicForm;

    class EmptyForm extends MagicForm {

        public function componentDetails() {
            return [
                'name'        => 'gotech.forms::lang.components.empty_form.name',
                'description' => 'gotech.forms::lang.components.empty_form.description',
            ];
        }

    }

?>