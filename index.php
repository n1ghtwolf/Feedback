<head>
    <title> Feedback form </title>
</head>
<body>
<form action="index.php" method="POST" autocomplete="off">
    <label> Назовите себя </label>
    </br>
    <input type="text" name="user" required>
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
    <label> Captcha </label>

    <input type="text" name="captchaResponse" hidden >
    </br>
    <input type="text" name="captcha" required>
    </br>
    <input type="submit" name="submit">
</form>
<p><a href="export.php">Посмотреть записи из БД</a></p>
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