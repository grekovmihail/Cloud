<html>
<head>
<title>Регистрация</title>

   <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />


</head>
<body>


  <div class="navbar">
        <div class="navbar-inner">
        <a class="brand" href="index.php">Cloud logistics</a>


        </div>
        </div>

         <style type="text/css">

        H3 {
    color: black; /* Синий цвет текста */
     font-size: 17pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */   }

          a {
    color: black; /* Синий цвет текста */
      padding: 5px;

    font-size: 17pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */

   }

     a:hover {
    text-decoration: underline; /* Добавляем подчеркивание
                                   при наведении курсора мыши на ссылку */

                             label      {
    width: 3000%; /* Ширина в процентах */
    height: 300px; /* Высота в пикселах */
   }

  </style>


<h3 align=center>Добро пожаловать на наш сайт, чтобы начать работу, введите, пожалуйста ваши данные. </h3>




<form  method="post"   name="form"   action="save_user.php" >
<!--**** save_user.php - это адрес обработчика. То есть, после нажатия на кнопку "Зарегистрироваться",
данные из полей отправятся на страничку save_user.php методом "post" ***** -->
  <h3 align=center><p >
    <label>Ваш логин:<br></label>
    <input name="login" type="textarea" height: 300px size="15" maxlength="15" >
  </p>

    <p>
    <label>Ваш e-mail:<br></label>
    <input name="email" type="textarea" height=300px size="25" maxlength="55" >
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
  <p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="textarea"  type="password" size="15" maxlength="15">
  </p>
       </h3>
         <br>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
<p align=center>
<input type="submit" class="btn btn-large btn-primary" name="submit" value="Зарегистрироваться">

<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->
</p></form>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>




</body>
</html>
