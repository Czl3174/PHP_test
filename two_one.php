头像：
<?php print_r($_FILES["pic"]) ?>
<br />
昵称：
<?php echo $_POST["name"] ?>
<br />
手机号：
<?php echo $_POST["telephone"] ?>
<br />
密码：
<?php echo $_POST["password"] ?>
<br />
性别：
<?php echo $_POST["gender"] ?>
<br />
兴趣：
<?php var_dump($_POST["hobby"]) ?>
<br />
所在城市：
<?php echo $_POST["city"] ?>
<br />
自我简介：
<?php echo $_POST["intro"] ?>