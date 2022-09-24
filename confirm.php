<!DOCTYPE html>
<html lang="ja">

<style>
   
        
 </style>

<head>
    <meta charset="UTF-8"> 
    <title>W/M 確認</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="wamoo.css">
</head>
<body>
<form class="confirm-form" action="complete.php" method="post"> 
    <h2>- Confirmation -</h2>

    <div class="form-item"><span>▶︎</span>Name</div>

    <?php 
    echo  $_POST['name'];?>

    <div class="form-item"><span>▶︎</span>E-mail</div>
    <?php 
    echo  $_POST['email'];?>

    <div class="form-item"><span>▶︎</span>Membership number</div>
    <?php 
    echo $_POST['number'];?>

    <div class="form-item"><span>▶︎</span>Country</div>
    <?php 
    echo $_POST['country'];?>

    <div class="form-item"><span>▶︎</span>Inquiries</div>
    <?php 
    echo $_POST['inquiries'];?>

<div class=confirm_btn>
 <input type="button" value="< back" onclick="history.back()">
 <input type="submit" value="OK">
 <input type="hidden" name="name" value="<?php echo $name;?>">
 <input type="hidden" name="email" value="<?php echo $email;?>">
 <input type="hidden" name="number" value="<?php echo $number;?>">
 <input type="hidden" name="country" value="<?php echo $country;?>">
 <input type="hidden" name="inquiries" value="<?php echo $inquiries;?>">
 

</div>


</form>
</body>

</html>