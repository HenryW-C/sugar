<!DOCTYPE html>
<html>
<head>
    
    <title>Add Users</title>
    
</head>
<body>
       
    <form action="addusers.php" method = "post">
        First name:<input type="text" name="forename"><br>
        Last name:<input type="text" name="surname"><br>
        Password:<input type="password" name="passwd"><br>
        Balance:<input type="DEC" name="balance"><br>
        Total Spent:<input type="DEC" name="totspend"><br>
        <br>
        <!--Next 3 lines create a radio button which we can use to select the user role-->
        <input type="radio" name="role" value="Pupil" checked> Pupil<br>
        <input type="radio" name="role" value="Admin"> Admin<br>
        <br>
        <input type="submit" value="Add User">
        <br>
      </form>      

</body>
</html>

<?php
include_once('connection.php');

$stmt = $conn->prepare("SELECT * FROM TblUsers");
$stmt->execute();
echo("<br>"."<br>");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{echo($row["Forename"].' '.$row["Surname"].' - £'.$row["Wallet"]."<br>");}
?>