<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>

      <script type="text/javascript">
setTimeout('location.replace("profil.php")', 500);
</script>
<?php




//$id=2;
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����

           $query = "DELETE FROM `zai`";
  mysql_query($query) or die(mysql_error());


     ?>