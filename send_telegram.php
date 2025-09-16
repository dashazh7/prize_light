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
         $agreement = $_POST['agreement'] ?? '';

        list($errors, $comment) = FormValidator::validate($phone, $comment, $agreement);

        if (!empty($errors)) {
            session_start();
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = ['tel' => $phone, 'comment' => $comment];
            header("Location: /request");
            exit();
        }

        $token = $_ENV['TELEGRAM_TOKEN']; 
        $chat_id = $_ENV['TELEGRAM_CHAT_ID']; 

        $telegram = new TelegramSender($token, $chat_id);
        $telegram->sendMessage($phone, $comment);

        header("Location: /?success=1");
        exit();
    }
?>