<?php
    namespace Prize;

    class TelegramSender {
        private $token;
        private $chat_id;

        public function __construct($token, $chat_id) {
            $this->token = $token;
            $this->chat_id = $chat_id;
        }

        public function sendMessage($phone, $comment) {
            $message = "*Новая заявка!*\n\n";
            $message .= "*Телефон:* " . $phone . "\n";
            $message .= "*Комментарий:* " . $comment;

            $url = "https://api.telegram.org/bot{$this->token}/sendMessage";

            $data = [
                'chat_id' => $this->chat_id,
                'text' => $message,
                'parse_mode' => 'Markdown'
            ];

            $options = [
                'http' => [
                    'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data),
                ],
            ];

            $context  = stream_context_create($options);
            file_get_contents($url, false, $context);
        }
    }
?>