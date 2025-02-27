<?php
namespace Prize;

class FormValidator {
    public static function validate($phone, $comment) {
        $errors = [];

        if (empty($phone)) {
            $errors['tel'] = 'Номер телефона обязателен для заполнения';
        } else {
            $phoneRegex = '/^(?:\+7|8)\d{10}$/';
            if (!preg_match($phoneRegex, $phone)) {
                $errors['tel'] = 'Формат номера: +7XXXXXXXXXX или 8XXXXXXXXXX';
            }
        }

        if (empty($comment)) {
            $errors['comment'] = 'Комментарий обязателен для заполнения';
        } elseif (strlen($comment) < 5 || strlen($comment) > 255) {
            $errors['comment'] = 'Комментарий должен быть от 5 до 255 символов';
        } else {
            $comment = strip_tags($comment);
        }

        return [$errors, $comment];
    }
}


