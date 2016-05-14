
<!DOCTYPE html>
<html lang="ru-RU">
<head>
<link rel="shortcut icon" href="http://bikes.ru/wp-content/themes/bikes/i/favicon.png" type="image/png" />
<meta charset="UTF-8"/>
</head>
<body>
<?//error_reporting
//echo '<pre>';
//print_r($_REQUEST);
require_once('wp-includes/class-phpmailer.php');
require_once('wp-includes/class-smtp.php');
foreach($_REQUEST as $key => $value)
{
    $$key=$value;
}
  $Mailer = new PHPMailer();
  //$Mailer->SMTPDebug = 1;
  $Mailer->CharSet = 'UTF-8';
  $Mailer->IsSMTP();
  $Mailer->Host = 'smtp.yandex.ru';
  $Mailer->Port = 25;
  $Mailer->SMTPAuth = true;
  $Mailer->Username = 'info@vintageelectricbikes.ru';
  $Mailer->Password = 'VEB-ru1';

  $Mailer->SetFrom('info@vintageelectricbikes.ru', 'Info');
  $Mailer->AddAddress('dmitriy.supov@gmail.com');
 // $Mailer->AddAddress('ichichkan@gmail.com ');
  $Mailer->AddBCC('s_dimon88@list.ru');
  $subject = "Запрос с сайта vintageelectricbikes.ru";
  $Mailer->Subject = $subject;
  $message = "
Данные сообщения \r\n
Имя: $name;\r\n
email: $email;\r\n
Телефон: $phone;\r\n
Сообщение: $body;\r\n

";
  $Mailer->Body = $message;
 if($Mailer->Send()) echo ' '; else echo 'Произошла ошибка';
?>
<h3>Спасибо! В ближайшее время мы свяжемся с вами и ответим на все интересующие вас вопросы!</h3>
<script>
function toMain()
{
    window.location='/';
}
setTimeout(toMain,3000);
</script>
</body>
</html>