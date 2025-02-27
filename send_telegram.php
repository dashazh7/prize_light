<?php
    require 'vendor/autoload.php';

    use Prize\FormValidator;
    use Prize\TelegramSender;
    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $errors = []; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phone = htmlspecialchars($_POST['tel']);
        $comment = htmlspecialchars($_POST['comment']);

        list($errors, $comment) = FormValidator::validate($phone, $comment);

        if (!empty($errors)) {
            session_start();
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = ['tel' => $phone, 'comment' => $comment];
            header("Location: index.php#request");
            exit();
        }

        $token = $_ENV['TELEGRAM_TOKEN']; 
        $chat_id = $_ENV['TELEGRAM_CHAT_ID']; 

        $telegram = new TelegramSender($token, $chat_id);
        $telegram->sendMessage($phone, $comment);

        header("Location: index.php?success=1");
        exit();
    }
?>