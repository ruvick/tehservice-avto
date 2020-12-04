<?php
header("Access-Control-Allow-Origin: *"); 

if((isset($_POST['phone'])&&$_POST['phone']!="")){
        $to = 'asmi046@gmail.com,office@aprofi46.ru'; 
        $subject = 'Обращение с сайта tehosmotr-klikova.ru';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p> 
                        <p>Марка и модель авто: '.$_POST['model'].'</p>                   
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: Заявка с сайта АвтоПрофи <noreply@antikor46.ru>\r\n";
        if (mail($to, $subject, $message, $headers)) {
            http_response_code(200);
            die();
        } else {
            http_response_code(403);
            die();
        }

}
?>