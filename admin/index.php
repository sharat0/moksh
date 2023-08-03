<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .flex {
            display: flex;
        }

        #main {
            min-height: 100vh;
        }

        .left {
            width: 60%;
            background: url('../img/login.jpg') no-repeat center;
            background-size: cover;
        }

        .right {
            width: 40%;
            background-color: #fff;
        }

        form {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        input[type="submit"] {
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #fff;
            color: #000;
            border: 1px solid #000;
        }
        /* responsive */
        @media (max-width: 600px) {
            .flex {
                flex-direction: column;
            }

            .left {
                width: 100%;
            }

            .right {
                width: 100%;
                /* bg image */
            }

            form {
                width: 100%;
            }
        }
        
    </style>
</head>

<body>
    <div id="main" class="flex">
        <div class="left">

        </div>
        <div class="right">
            <h1>Login</h1>
            <form action="" method="post">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="submit" value="Login">

            </form>
            <?php
            include '../essentials/_config.php';
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "select * from login where email='$username' and pass='$password'";
                $result = mysqli_query($conn, $query);
                if ($row = mysqli_fetch_assoc($result)) {
                    if ($row['email'] == $username && $row['pass'] == $password) {
                        session_start();
                        $_SESSION['username'] = $username;
                        header("Location: home");
                    }
                    else {
                        echo "<script>alert('Invalid Credentials')</script>";
                    }
                } else {
                    echo "<script>alert('Invalid Credentials')</script>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>