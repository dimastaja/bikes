
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

error_reporting(E_ALL  & ~E_NOTICE & ~E_WARNING);


require_once('wp-includes/class-phpmailer.php');
require_once('wp-includes/class-smtp.php');
require $_SERVER["DOCUMENT_ROOT"]."/dbconnect.php";
foreach($_REQUEST as $key => $value)
{
    $$key=$value;
}
$query="INSERT INTO `bikes`.`orders` (`ID`, `DETAILS`, `NAME`, `EMAIL`, `PHONE`, `COMMENT`) VALUES (NULL, '$orderDetails', '$name', '$email', '$phone', '$body');";
$res=$db->query($query);
   if (!$res)
       die('Что-то пошло не так, пожалуйста, вернитесь на <a href="/"> главную страницу </a>');

$query="select max(ID) ID from `bikes`.`orders`";
$res=$db->query($query);
if (!$res)
       die('Что-то пошло не так, пожалуйста, вернитесь на <a href="/"> главную страницу </a>');

$row =$res->fetch_assoc();
$orderNum=$row['ID'];


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
  $Mailer->AddBCC('dmitriy.supov@gmail.com');
 // $Mailer->AddBCC('ichichkan@gmail.com ');
  $Mailer->AddAddress($email);
  $subject = "Заказ с сайта vintageelectricbikes.ru #$orderNum";
  $Mailer->Subject = $subject;
 

$messageToCustomer="<head>
<title>Заказ с сайта vintageelectricbikes.ru #$orderNum</title>
</head>
<body>
<p> $name, cпасибо за Ваш заказ #$orderNum!</p> 
<p> Детали заказа</p> 
".$orderDetails."<p>В ближайшее время мы свяжемся с Вами.</p></body>";

  
  $Mailer->Body = $messageToCustomer;
  $Mailer->isHTML(true);
 if($Mailer->Send()) echo ' '; else echo 'Произошла ошибка';
 
 
 
 
 
 
 
 
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
  $Mailer->AddBCC('s_dimon88@list.ru');
  $Mailer->AddAddress('dmitriy.supov@gmail.com');
 // $Mailer->AddAddress('ichichkan@gmail.com');
  $subject = "Заказ с сайта vintageelectricbikes.ru #$orderNum";
  $Mailer->Subject = $subject;
 
 
 $message="<head>
<title>Заказ с сайта vintageelectricbikes.ru</title>
</head>
<body>
<p> Заказ #$orderNum.</p> 
<p> Детали заказа</p> 
".$orderDetails."<p>Контактные данные покупателя.</p>
<div>
Имя: $name;<br>
email: $email;<br>
Телефон: $phone;<br>
Сообщение: $body;<br>

</div>
</body>";

  $Mailer->Body = $message;
 $Mailer->isHTML(true);
 if($Mailer->Send()) echo ' '; else echo 'Произошла ошибка';
  
 
?>
<h3>Спасибо за Ваш заказ #<?=$orderNum?>. В ближайшее время мы свяжемся с Вами.</h3>
<script>
function toMain()
{
    window.location='/';
}
setTimeout(toMain,3000);
</script>
</body>
</html>