<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db("comments");
$find_comments = mysql_query("select * from comments");
while($row = mysql_fetch_assoc ($find_comments))
{
$comment_name = $row['name'];
$comment = $row['comment'];
echo "$comment_name -$comment<p>";
}

if(isset($_GET['error']))
{
echo"<p>100 character limit ";


}
$name = $_POST["name"];
$comment = $_POST["comment"];

$comment_length = strlen($comment);

if($comment_length > 100)
{
header("location:jaopho.php?error=1 ");
}
else
{
    mysql_query("insert into comments value('','$name','$comment')");
    header("location: jaopho.php");
}
?>