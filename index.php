<?php require_once 'formatSizeUnits.php'; ?>
<?php   $size = new formatSizeUnits();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Library</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css">

</head>
<body>

<div class="tg-wrap"><table class="tg" style="undefined;table-layout: fixed; width: 95%">
<!--        <colgroup>-->
<!--            <col style="width: 25%">-->
<!--            <col style="width: 75%">-->
<!--        </colgroup>-->
        <tr>
            <th class="tg-431l first">Размер файла</th>
            <th class="tg-431l second">Название книги</th>

        </tr>
            <?php require_once 'table.php';?>
    </table></div>
</body>
</html>




