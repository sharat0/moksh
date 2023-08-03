<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/lab/style.css"> -->
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../../style.css">
    <link rel="stylesheet" href="../style.css">

    <style>
        .head1 {
            text-align: center;
            display: block;
            font-size: 5rem;
            text-align: center;
            font-family: 'Maven Pro', sans-serif;
        }

        .head2 {
            display: block;
            font-size: 2.5rem;
            text-align: center;
            padding-bottom: 15px;
            font-family: 'Maven Pro', sans-serif;
            text-transform: uppercase;
            font-weight: bold;
        }

        form {
            padding-left: 0;
            background-color: #e5ebfa;
            padding: 15px;
        }

        .head-text {
            display: block;
            text-align: center;
            margin-top: 15px;
        }

        .text {
            margin-bottom: 15px;
        }

        .flex {
            padding: 10px 10px;
            /* space between */
            justify-content: space-between;
        }

        body {
            overflow-x: hidden;
        }

        /* responsive */

        @media (max-width: 600px) {
            .flex {
                flex-direction: row;
            }

            form {
                width: 90%;
                margin: 0 auto;
            }

            .head1 {
                font-size: 3rem;
            }

            .head2 {
                font-size: 1.5rem;
            }

            .head-text {
                font-size: 1rem;
            }

            .text {
                font-size: 1rem;
            }
        }
    </style>


    <title>View Departments</title>
</head>

<body>
    <nav>
        <ul>
        <li class="logo"><a href="https://mokshfenster.com/"><img src="../../../img/moksh-logo.png" style="width: 160px; height:6vh; margin-top: -5px"></a></li>
            <li><a href="../../home">Home</a></li>
            <li><a href="../../category">Category</a></li>
            <li><a href="../../product">Products</a></li>
            <li><a href="../about">About</a></li>
            <li><a href="../../logout.php">Logout</a></li>

        </ul>
    </nav>
    <span class="head1">Testimonial</span>
    <span class="head-text text">Please refresh the page after deleting</span>
    <form action="" method="post">
        <?php
        require('../../../essentials/_config.php');
        $sql_fac = "SELECT * from testimonial";
        $fac = mysqli_query($conn, $sql_fac);
        $row = "";
        if ($fac) {
            if (mysqli_num_rows($fac) <= 0) {
                echo '<span class="head2">No Category Found</span>';
            } else {
                $row = mysqli_fetch_all($fac, MYSQLI_ASSOC);
                $i = 0;
                foreach ($row as $rows) {
                    $i++;
                    $id = $rows['id'];
                    $name = $rows['name'];

                    echo '<div class="flex">';

                    echo '<span class="uid text">' . $i . ' .' . $name . '</span>';
                    echo '<a href="../delete-testimonial?id=' . $id . '" class="del" target="_BLANK">Delete</a>';
                    echo '</div>';
                }
            }
        } else {
            echo 'Unable to connect';
        }
        ?>
    </form>
</body>

</html>