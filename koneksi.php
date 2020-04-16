 <?php
try
{
$con = new PDO("mysql:host=localhost;dbname=db_nyoba","root","");
// echo "Database Terhubung";
}
catch(PDOException $e)
{
echo $e->getMessage();
}
 ?>