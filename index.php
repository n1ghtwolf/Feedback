<head>
    <title> feedback form </title>
    <link rel="stylesheet" href="css/style.css">
<!--    <script src="jv/dist/jquery.validate.js"></script>-->
<!--    <script src="skripts.js">  </script>-->
<!--    <script src="jv/dist/jquery.validate.js"></script>-->
</head>
<body>
<form action="index.php" method="POST" autocomplete="off" id="form">
    <label> Назовите себя </label>
    </br>
    <input type="text" name="user" title="Поле обязательно для заполнения" >
    </br>
    <label> Ваш e-mail </label>
    </br>
    <input type="text" name="email" required>
    </br>
    <label> Ваш сайт </label>
    </br>
    <input type="text" name="homepage">
    </br>
    <label> Сообщение </label>
    </br>
    <input type="textarea" name="subject" required>
    </br>
    <label> Вы можете прикрепить текстовый файл или изображение </label>
    <input type="file" name="file" >
    </br>
    <label> Captcha </label>
    <input type="text" name="captchaResponse" hidden >
    </br>
    <input type="text" name="captcha" >
    </br>
    <input type="submit" name="submit">
</form>
<p><a href="export.php">Посмотреть записи из БД</a></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="jv/dist/jquery.validate.js"></script>
<script src="scripts.js">  </script>
<?
include('DB.php');
include('config.php');
//добавить отправление на имейл
if ($_POST['submit']) {
    $db = new DB;
    $name = $_POST['user'];
    $email = $_POST['email'];
    $homepage = $_POST['homepage'];
    $subject = $_POST['subject'];

    $db->add($name, $email, $subject, $homepage);
    }

?>