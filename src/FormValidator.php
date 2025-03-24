<?php
namespace Prize;

class FormValidator {
    public static function validate($phone, $comment) {
        $errors = [];

        if (empty($phone)) {
            $errors['tel'] = 'Номер телефона обязателен для заполнения';
        } else {
            $phoneRegex = '/^\+7\d{10}$/';
            if (!preg_match($phoneRegex, $phone)) {
                $errors['tel'] = 'Формат номера: +7XXXXXXXXXX';
            }
        }

        if (strlen($comment) > 255) {
            $errors['comment'] = 'Комментарий не может быть длиннее 255 символов';
        } else {
            $comment = strip_tags($comment); 
        }

        return [$errors, $comment];
    }
}