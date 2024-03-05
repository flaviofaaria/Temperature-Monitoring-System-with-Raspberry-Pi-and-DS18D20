<?php
require_once('vendor/autoload.php');
$mail = new PHPMailer\PHPMailer\PHPMailer();

$nome   = $_POST['nome'];
$email  = $_POST['email'];
$tempmin = $_POST['tempmin'];
$tempmax = $_POST['tempmax'];

$mail->isSMTP();
$mail->Host = 'smtp'; // Insira o host do servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'email@example.com'; // Insira seu e-mail
$mail->Password = 'senha'; // Insira sua senha
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

while (true) {
    $temp = exec('python read_temp.py');
    if ($temp <= $tempmin || $temp >= $tempmax) {

        $mail->setFrom('email@example.com'); // Insira seu e-mail aqui
        $mail->addAddress($email);

        $mail->Subject = 'TEMPERATURA ATINGIU O LIMITE';
        $mail->Body = 'Olá ' . $nome . ' a sua refrigeração atingiu os limites. Temperatura: ' . $temp;

        // Envia o email
        if(!$mail->send()) {
            echo 'Erro ao enviar o email: ' . $mail->ErrorInfo;
        } else {
            echo 'Email enviado com sucesso!';
            break;
        }
    }

    sleep(5);
}

sleep(10);

while (true) {
    $temp = exec('python read_temp.py');
    if ($temp <= $tempmin || $temp >= $tempmax) {

        $mail->setFrom('email@example.com'); // Insira seu e-mail aqui
        $mail->addAddress($email);

        $mail->Subject = 'TEMPERATURA ATINGIU O LIMITE';
        $mail->Body = 'Olá ' . $nome . ' a sua refrigeração atingiu o limite. Mande um tecnico ao local, nosso sistema precisa ser reiniciado. Temperatura: ' . $temp;

        // Envia o email
        if(!$mail->send()) {
            echo 'Erro ao enviar o email: ' . $mail->ErrorInfo;
        } else {
            echo 'Email enviado com sucesso!';
            break;
        }
    }

    sleep(5);
}
?>
