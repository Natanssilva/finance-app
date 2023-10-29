<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';// Certifique-se de que o autoload do Composer seja incluído

// Crie uma instância do PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'natanssilva10@gmail.com';
    $mail->Password = 'moyp edpa ogof bqyt';
    $mail->SMTPSecure = 'tls';  // Use 'tls' para o Gmail
    $mail->Port = 587;  // Porta SMTP padrão do Gmail


    // Remetente e destinatário
    $mail->setFrom('natanssilva10@gmail.com', 'me');
    $mail->addAddress('natanssilva10@gmail.com', 'Natan');

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Assunto do E-mail';
    $mail->Body = 'Este é um e-mail de teste enviado com o PHPMailer.';

    // Envie o e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso.';
} catch (Exception $e) {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
}

$host = 'localhost';
$database = 'myfinance';
$user = 'root';
$password = '';

//verificar conexao com banco de dados
try {
    
    if ( strlen($database) == 0) {
        echo "Banco de dados inexistente";
        die();
    }else{
        $ligacao = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $statusConnect = $ligacao -> getAttribute(PDO::ATTR_CONNECTION_STATUS);
    }
   

} catch (PDOException  $statusConnect) {
    echo "erro ao conectar ao db " . $statusConnect ->getMessage();
    die();
}

function showArray($array)
{
    echo "<pre>";

    print_r($array);

    echo "</pre>";
}