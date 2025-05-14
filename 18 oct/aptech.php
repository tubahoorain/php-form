<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
if(isset($_POST['submit'])){
    // echo $_POST['name'];
    // echo $_POST['email'];
    // $name=$_POST['name'];
    // $email=$_POST['email'];
    extract($_POST);
}
?>
<table align="center" border="1">
<tr>
<td>Name</td>
<td>
<?php echo $name; ?>
</td>
</tr>
<tr>
<td>Name</td>
<td>
<?php echo $email; ?>
</td>
</tr>

</table>
</body>
</html>