<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <center>
    <h2>用户注册</h2>
    <hr width="500px" />
    <form action="two_one.php" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>头像:</td>
          <td><input type="file" name="pic" /></td>
        </tr>
        <tr>
          <td>昵称:</td>
          <td><input type="text" name="name" /></td>
        </tr>
        <tr>
          <td>手机号:</td>
          <td><input type="text" name="telephone" /></td>
        </tr>
        <tr>
          <td>密码:</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td>性别:</td>
          <td>
            <input type="radio" name="gender" value="男" />男
            <input type="radio" name="gender" value="女" />女
          </td>
        </tr>
        <tr>
          <td>兴趣:</td>
          <td><input type="checkbox" name="hobby[]" value="football" />足球
            <input type="checkbox" name="hobby[]" value="basketball" />篮球
            <input type="checkbox" name="hobby[]" value="tennis" />网球
            <input type="checkbox" name="hobby[]" value="badminton" />羽毛球
          </td>
        </tr>
        <tr>
          <td>所在城市:</td>
          <td><input type="text" name="city" /></td>
        </tr>
        <tr>
          <td>自我简介:</td>
          <td><textarea rows="4" cols="21" name="intro"></textarea></td>
        </tr>
      </table>
      <input type="submit" name="submit" value="注册">
    </form>
  </center>
</body>

</html>