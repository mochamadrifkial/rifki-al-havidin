<?php
$angka =[23,56,8,90,34,1,43,987];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lathian pengulangan foreach</title>
    <style>
        div{
            width: 50px;
            height: 50px;
            background-color: skyblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }
    </style>
</head>
<body>
    
<?php foreach ($angka  as $key) : ?>
    <div><?= $key; ?></div>
<?php endforeach; ?>

</body>
</html>