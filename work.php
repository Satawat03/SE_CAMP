<html>

<head>
    <meta charset="utf-8">
</head>

<body style="background-color: pink">


    <?php $multi_x = isset($_POST['num_x']) ? $_POST['num_x'] : 2; ?>

    <center>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    
    
        <div>
            <table>

                <tbody>



                    <?php
                    for ($i = 1; $i <= 25; $i++) {
                    ?>
                        <tr>
                            <td><?php echo $multi_x ?></td>
                            <td>x</td>
                            <td><?php echo $i ?></td>
                            <td>=</td>
                            <td><?php echo $multi_x * $i ?></td>
                        </tr>
                    <?php } ?>



                </tbody>

            </table>
        </div>
    </center>

    <style>
        div {
            overflow-y: scroll;
            width: 220px;
            height: 380px;
            border: 1px solid black;
        }
        body{
            background-image:url(https://scontent.fbkk9-2.fna.fbcdn.net/v/t1.15752-9/413185291_888852039569048_9040187717895068337_n.png?_nc_cat=109&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeEIHvmyslVTjynIf3bhBtXlWuvJzegR95Za68nN6BH3ljOAs5LTnoR7ZVPXpBI0c7S1Vs34p1CBs5v_VqWwObqJ&_nc_ohc=ko7UlSXAra4AX8GH5mT&_nc_ht=scontent.fbkk9-2.fna&oh=03_AdRsXUjiXZ5HKR4ADk95GRl2F8gMLXxBN8aEg3koKQQYfw&oe=65CCCAB1);
            background-repeat: no-repeat;
            background-size: cover;


        }
    </style>

</body>

</html>