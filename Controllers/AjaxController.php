<?php

    namespace App\Controllers;
    
    require(SYS_PATH . "/vendor/phpmailer/PHPMailer.php");
    require(SYS_PATH . "/vendor/phpmailer/SMTP.php");
    require(SYS_PATH . "/vendor/phpmailer/Exception.php");

    use Core\Controller as MainController;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
        
    class AjaxController extends MainController {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function contact() {
            if( $_POST ) {
                $formName = $_POST['name'];
                $formEmail = $_POST['email'];
                $formPhone = $_POST['phone'];
                $formMessage = $_POST['message'];

                $result = array(
                    'success' => false,
                    'message' => '',
                );
                
                if ( empty( $formName ) ) {
                    $result['message'] = 'Nome é obrigatório.';
                } else if ( empty( $formEmail ) ) {
                    $result['message'] = 'E-mail é obrigatório.';
                } else if ( empty( $formPhone ) ) {
                    $result['message'] = 'Telefone é obrigatório.';
                } else if ( empty( $formMessage ) ) {
                    $result['message'] = 'Mensagem é obrigatória.';
                } else {                    
                    $emailSubject = "Contato do Site";
                    $emailMessage = "Ol&aacute;,<br/><br/>";
                    $emailMessage .= "<b>{$formName}</b> entrou no site e gostaria de saber mais informa&ccedil;&otilde;es!<br/><br/>";
                    $emailMessage .= "Dados para contato:<br/>";
                    $emailMessage .= "Telefone: {$formPhone}<br/>";
                    $emailMessage .= "E-mail: {$formEmail}<br/>";
                    $emailMessage .= "Mensagem: {$formMessage}";
                    
                    $nomeDest = "Contato";
                    $emailDest = "contato@agencia7etti.com.br";

                    $mail = new PHPMailer;
                    $mail->IsSMTP();
                    $mail->SMTPAuth = SMTP_AUTH;
                    $mail->SMTPSecure = SMTP_SECURE;
                    $mail->Host = SMTP_HOST;
                    $mail->Port = SMTP_PORT;
                    $mail->Username = SMTP_USERNAME;
                    $mail->Password = base64_decode(SMTP_PASSWORD);

                    $mail->IsHTML(true);
                    $mail->CharSet = 'UTF-8';
                    $mail->setFrom($formEmail, $formName);
                    $mail->addAddress($emailDest, $nomeDest);
                    $mail->Subject = $emailSubject;
                    $mail->Body = $emailMessage;
                    
                    if( $mail->Send() ) {
                        $result['success'] = true;
                        $result['message'] = 'E-mail enviado com sucesso.';
                    } else {
                        $result['message'] = 'Não foi possível enviar o e-mail.';
                    }
                }
                
                echo json_encode($result);
            }
        }

    }

?>
