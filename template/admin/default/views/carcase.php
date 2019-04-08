<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/starter-template/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="icon" href="<?= $_->path('img/favicon.ico') ?>" sizes="16x16" type="image/ico">

    <title><?=$_->l('Панель администратора')?> || HopeBilling</title>

    <!-- Bootstrap core CSS -->
    <?php $_->CSS("bootstrap.min.css"); ?>
    <?php $_->CSS("bootstrap-theme.min.css"); ?>


    <?php $_->Js("jquery.min.js"); ?>

    <?php $_->Js("ie-emulation-modes-warning.js"); ?>



    <?php $_->JS('inputmask/jquery.inputmask.bundle.js') ?>
    <?php $_->JS('inputmask/phone.js') ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        var validate_messages = {
            required: "<?=$_->l('Поле обязательное к заполнению')?>",
            username: "<?=$_->l("3-20 символов, которыми могут быть буквы и цифры, первый символ обязательно буква")?>",
            email: "<?=$_->l("Введите правильный email")?>",
            pass: "<?=$_->l("Строчные и прописные латинские буквы, цифры, спецсимволы. Минимум 4 символов.")?>",
            pass2: "<?=$_->l("Повторите ввод пароля")?>",
            fio: "<?=$_->l("Введите фамилию и имя")?>",
            ajax: "<?=$_->l("Значение занято")?>",
            phone: "<?=$_->l("Введите номер телефона в международном формате (например +380921235478)")?>",
            date: "<?=$_->l("Дата в формате: 2015-06-18")?>",
            date_new: "<?=$_->l('Дата в формате: 18-06-2015')?>",
            domain: "<?=$_->l("Введите доменное имя")?>",
            possitive_number: "<?=$_->l('Введите число больше нуля')?>",
            valid: "<?=$_->l("Поле заполнено правильно!")?>"
        };
    </script>

</head>

<body>

<?= $content ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<?php $_->Js("bootstrap.min.js"); ?>
<?php $_->Js("script.js"); ?>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<?php $_->Js("ie10-viewport-bug-workaround.js"); ?>
<?php $_->JS('inputmask/inputmask.binding.js') ?>

</body>
</html>

