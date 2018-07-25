<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> feedback form </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!--    <script src="jv/dist/jquery.validate.js"></script>-->
<!--    <script src="skripts.js">  </script>-->
<!--    <script src="jv/dist/jquery.validate.js"></script>-->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-3">
                <form action="index.php" method="POST" autocomplete="off" id="form">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Представтесь </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Представтесь ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ваш e-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ваш сайт</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="url сайта ">
                    </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Ваше сообщение</label>
                        <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Сообщение">
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
                <p><a href="pages/export.php">Посмотреть записи из БД</a></p>
            </div>

        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="jv/dist/jquery.validate.js"></script>
<script src="scripts/scripts.js">  </script>
<?
include('classes/DB.php');
include('classes/config.php');
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
</body>
</html>
