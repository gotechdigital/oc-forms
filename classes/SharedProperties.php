<?php

namespace GoTech\Forms\Classes;

use Lang;

trait SharedProperties {

    public function defineProperties() {
        return [
            'group' => [
                'title'             => 'gotech.forms::lang.components.shared.group.title',
                'description'       => 'gotech.forms::lang.components.shared.group.description',
                'type'              => 'string',
                'showExternalParam' => false,
            ],
            'rules' => [
                'title'             => 'gotech.forms::lang.components.shared.rules.title',
                'description'       => 'gotech.forms::lang.components.shared.rules.description',
                'type'              => 'dictionary',
                'group'             => 'gotech.forms::lang.components.shared.group_validation',
                'showExternalParam' => false,
            ],
            'rules_messages' => [
                'title'             => 'gotech.forms::lang.components.shared.rules_messages.title',
                'description'       => 'gotech.forms::lang.components.shared.rules_messages.description',
                'type'              => 'dictionary',
                'group'             => 'gotech.forms::lang.components.shared.group_validation',
                'showExternalParam' => false,
            ],
            'custom_attributes' => [
                'title'             => 'gotech.forms::lang.components.shared.custom_attributes.title',
                'description'       => 'gotech.forms::lang.components.shared.custom_attributes.description',
                'type'              => 'dictionary',
                'group'             => 'gotech.forms::lang.components.shared.group_validation',
                'showExternalParam' => false,
            ],
            'messages_success' => [
                'title'             => 'gotech.forms::lang.components.shared.messages_success.title',
                'description'       => 'gotech.forms::lang.components.shared.messages_success.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_messages',
                'default'           => Lang::get('gotech.forms::lang.components.shared.messages_success.default'),
                'showExternalParam' => false,
                'validation'        => ['required' => ['message' => Lang::get('gotech.forms::lang.components.shared.validation_req')]]
            ],
            'messages_errors' => [
                'title'             => 'gotech.forms::lang.components.shared.messages_errors.title',
                'description'       => 'gotech.forms::lang.components.shared.messages_errors.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_messages',
                'default'           => Lang::get('gotech.forms::lang.components.shared.messages_errors.default'),
                'showExternalParam' => false,
                'validation'        => ['required' => ['message' => Lang::get('gotech.forms::lang.components.shared.validation_req')]]
            ],
            'messages_partial' => [
                'title'             => 'gotech.forms::lang.components.shared.messages_partial.title',
                'description'       => 'gotech.forms::lang.components.shared.messages_partial.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_messages',
                'showExternalParam' => false
            ],
            'mail_enabled' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_enabled.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_enabled.description',
                'type'              => 'checkbox',
                'group'             => 'gotech.forms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_subject' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_subject.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_subject.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_recipients' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_recipients.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_recipients.description',
                'type'              => 'dictionary',
                'group'             => 'gotech.forms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_bcc' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_bcc.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_bcc.description',
                'type'              => 'stringList',
                'group'             => 'gotech.forms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_replyto' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_replyto.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_replyto.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_template' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_template.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_template.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_resp_enabled' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_resp_enabled.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_resp_enabled.description',
                'type'              => 'checkbox',
                'group'             => 'gotech.forms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'mail_resp_field' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_resp_field.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_resp_field.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'mail_resp_from' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_resp_from.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_resp_from.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'mail_resp_subject' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_resp_subject.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_resp_subject.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'mail_resp_template' => [
                'title'             => 'gotech.forms::lang.components.shared.mail_template.title',
                'description'       => 'gotech.forms::lang.components.shared.mail_template.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'reset_form' => [
                'title'             => 'gotech.forms::lang.components.shared.reset_form.title',
                'description'       => 'gotech.forms::lang.components.shared.reset_form.description',
                'type'              => 'checkbox',
                'group'             => 'gotech.forms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'redirect' => [
                'title'             => 'gotech.forms::lang.components.shared.redirect.title',
                'description'       => 'gotech.forms::lang.components.shared.redirect.description',
                'type'              => 'string',
                'group'             => 'gotech.forms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'inline_errors' => [
                'title'             => 'gotech.forms::lang.components.shared.inline_errors.title',
                'description'       => 'gotech.forms::lang.components.shared.inline_errors.description',
                'type'              => 'dropdown',
                'options'           => ['disabled' => 'gotech.forms::lang.components.shared.inline_errors.disabled', 'display' => 'gotech.forms::lang.components.shared.inline_errors.display', 'variable' => 'gotech.forms::lang.components.shared.inline_errors.variable'],
                'default'           => 'disabled',
                'group'             => 'gotech.forms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'js_on_success' => [
                'title'             => 'gotech.forms::lang.components.shared.js_on_success.title',
                'description'       => 'gotech.forms::lang.components.shared.js_on_success.description',
                'type'              => 'text',
                'group'             => 'gotech.forms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'js_on_error' => [
                'title'             => 'gotech.forms::lang.components.shared.js_on_error.title',
                'description'       => 'gotech.forms::lang.components.shared.js_on_error.description',
                'type'              => 'text',
                'group'             => 'gotech.forms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'allowed_fields' => [
                'title'             => 'gotech.forms::lang.components.shared.allowed_fields.title',
                'description'       => 'gotech.forms::lang.components.shared.allowed_fields.description',
                'type'              => 'stringList',
                'group'             => 'gotech.forms::lang.components.shared.group_security',
                'showExternalParam' => false
            ],
            'sanitize_data' => [
                'title'             => 'gotech.forms::lang.components.shared.sanitize_data.title',
                'description'       => 'gotech.forms::lang.components.shared.sanitize_data.description',
                'type'              => 'dropdown',
                'options'           => ['disabled' => 'gotech.forms::lang.components.shared.sanitize_data.disabled', 'htmlspecialchars' => 'gotech.forms::lang.components.shared.sanitize_data.htmlspecialchars'],
                'default'           => 'disabled',
                'group'             => 'gotech.forms::lang.components.shared.group_security',
                'showExternalParam' => false
            ],
            'anonymize_ip' => [
                'title'             => 'gotech.forms::lang.components.shared.anonymize_ip.title',
                'description'       => 'gotech.forms::lang.components.shared.anonymize_ip.description',
                'type'              => 'dropdown',
                'options'           => ['disabled' => 'gotech.forms::lang.components.shared.anonymize_ip.disabled', 'partial' => 'gotech.forms::lang.components.shared.anonymize_ip.partial', 'full' => 'gotech.forms::lang.components.shared.anonymize_ip.full'],
                'default'           => 'disabled',
                'group'             => 'gotech.forms::lang.components.shared.group_security',
                'showExternalParam' => false
            ],
            'recaptcha_enabled' => [
                'title'             => 'gotech.forms::lang.components.shared.recaptcha_enabled.title',
                'description'       => 'gotech.forms::lang.components.shared.recaptcha_enabled.description',
                'type'              => 'checkbox',
                'group'             => 'gotech.forms::lang.components.shared.group_recaptcha',
                'showExternalParam' => false
            ],
            'recaptcha_theme' => [
                'title'             => 'gotech.forms::lang.components.shared.recaptcha_theme.title',
                'description'       => 'gotech.forms::lang.components.shared.recaptcha_theme.description',
                'type'              => 'dropdown',
                'options'           => ['light' => 'gotech.forms::lang.components.shared.recaptcha_theme.light', 'dark' => 'gotech.forms::lang.components.shared.recaptcha_theme.dark'],
                'default'           => 'light',
                'group'             => 'gotech.forms::lang.components.shared.group_recaptcha',
                'showExternalParam' => false
            ],
            'recaptcha_type' => [
                'title'             => 'gotech.forms::lang.components.shared.recaptcha_type.title',
                'description'       => 'gotech.forms::lang.components.shared.recaptcha_type.description',
                'type'              => 'dropdown',
                'options'           => ['image' => 'gotech.forms::lang.components.shared.recaptcha_type.image', 'audio' => 'gotech.forms::lang.components.shared.recaptcha_type.audio'],
                'default'           => 'image',
                'group'             => 'gotech.forms::lang.components.shared.group_recaptcha',
                'showExternalParam' => false
            ],
            'recaptcha_size' => [
                'title'             => 'gotech.forms::lang.components.shared.recaptcha_size.title',
                'description'       => 'gotech.forms::lang.components.shared.recaptcha_size.description',
                'type'              => 'dropdown',
                'options'           => [
                    'normal' => 'gotech.forms::lang.components.shared.recaptcha_size.normal',
                    'compact' => 'gotech.forms::lang.components.shared.recaptcha_size.compact',
                    'invisible' => 'gotech.forms::lang.components.shared.recaptcha_size.invisible',
                ],
                'default'           => 'normal',
                'group'             => 'gotech.forms::lang.components.shared.group_recaptcha',
                'showExternalParam' => false
            ],
            'skip_database' => [
                'title'             => 'gotech.forms::lang.components.shared.skip_database.title',
                'description'       => 'gotech.forms::lang.components.shared.skip_database.description',
                'type'              => 'checkbox',
                'group'             => 'gotech.forms::lang.components.shared.group_advanced',
                'showExternalParam' => false
            ],
            'emails_date_format' => [
                'title'             => 'gotech.forms::lang.components.shared.emails_date_format.title',
                'description'       => 'gotech.forms::lang.components.shared.emails_date_format.description',
                'default'           => 'Y-m-d',
                'group'             => 'gotech.forms::lang.components.shared.group_advanced',
                'showExternalParam' => false
            ],
        ];
    }

}

?>
