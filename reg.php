<html>
<head>
<title>�����������</title>

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
    color: black; /* ����� ���� ������ */
     font-size: 17pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */   }

          a {
    color: black; /* ����� ���� ������ */
      padding: 5px;

    font-size: 17pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */

   }

     a:hover {
    text-decoration: underline; /* ��������� �������������
                                   ��� ��������� ������� ���� �� ������ */

                             label      {
    width: 3000%; /* ������ � ��������� */
    height: 300px; /* ������ � �������� */
   }

  </style>


<h3 align=center>����� ���������� �� ��� ����, ����� ������ ������, �������, ���������� ���� ������. </h3>




<form  method="post"   name="form"   action="save_user.php" >
<!--**** save_user.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "������������������",
������ �� ����� ���������� �� ��������� save_user.php ������� "post" ***** -->
  <h3 align=center><p >
    <label>��� �����:<br></label>
    <input name="login" type="textarea" height: 300px size="15" maxlength="15" >
  </p>

    <p>
    <label>��� e-mail:<br></label>
    <input name="email" type="textarea" height=300px size="25" maxlength="55" >
  </p>
<!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->
  <p>
    <label>��� ������:<br></label>
    <input name="password" type="textarea"  type="password" size="15" maxlength="15">
  </p>
       </h3>
         <br>
<!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** -->
<p align=center>
<input type="submit" class="btn btn-large btn-primary" name="submit" value="������������������">

<!--**** �������� (type="submit") ���������� ������ �� ��������� save_user.php ***** -->
</p></form>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>




</body>
</html>
