<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home View</title>
</head>
<body>
    <table>
        <tr>
            <th>Serial</th>
            <th>Category Name</th>
            <th>Category Title</th>
            <th>Category Action</th>
        </tr>
        <?php
        $i = 0;
        foreach ($user as $key => $value) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><?php echo $value['password']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>