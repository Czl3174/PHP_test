<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $link =  mysqli_connect('localhost', 'root', 'password', 'demo', '3306');
    if (!$link) {
        exit(mysqli_connect_error());
    }
    //设置字符集
    if (!mysqli_set_charset($link, 'utf8')) {
        exit(mysqli_error($link));
    }
    //选择数据库
    if (!mysqli_select_db($link, 'demo')) {
        exit(mysqli_error($link));
    }
    //执行插入数据的SQL语句
    $query = 'INSERT INTO `student` VALUES(NULL,\'Bob\',20)';
    //执行写入操作
    $result = mysqli_query($link, $query);
    if ($result) {
        echo mysqli_insert_id($link); //获取自增id
    } else {
        exit(mysqli_error($link));
    }

    //删除数据的SQL语句
    $query1 = 'delete from `student` WHERE `id`=5';
    //执行删除操作
    $result1 = mysqli_query($link, $query1);
    if ($result1) {
        exit(mysqli_error($link));
    }
    //返回结果
    echo mysqli_affected_rows($link);

    //修改数据的SQL语句
    $query2 = 'update `student` SET `age` = 21 WHERE `id`=5';
    //执行修改操作
    $result2 = mysqli_query($link, $query2);
    if (!$result2) {
        exit(mysqli_error($link));
    }
    //返回结果
    echo mysqli_affected_rows($link);

    //查询数据的SQL语句
    $query3 = 'select * from `student`';
    //执行删除操作
    $result3 = mysqli_query($link, $query3);
    if (!$result3) {
        exit(mysqli_error($link));
    }
    //处理结果集
    $list = [];
    while ($row = mysqli_fetch_assoc($result3)) {
        $list[] = $row;
    }
    //释放资源结果集
    mysqli_free_result($result3);
    //关闭连接
    mysqli_close($link);

    echo '<table><tr><th?>id</th>
    <th>姓名</th>
    <th>年龄</th>
    </tr>';
    foreach ($list as $val) {
    echo '<tr>
        <td>{$val["id"]}</td>
        <td>{$val["name"]}</td>s
        <td>{$val["age"]}</td>
    </tr>';
    }
    echo '<table>';

        ?>
</body>

</html>