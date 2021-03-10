<?php
    
    session_start();

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if (!empty($username)) {
        # code...
        if (!empty($password)) {
            # code...
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "login";

            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
            if (mysqli_connect_error()) {
                # code...
                die('Connect Error ('.mysqli_connect_errno().')' .mysqli_connect_error());
            }else{

                    if (isset($_POST['submit'])) {
                    # code...
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $sql = "select * from users where username = '$username' and password = '$password'";
                        $query = mysqli_query($conn, $sql);

                        $row = mysqli_num_rows($query);

                            if ($username == "tashrif") {
                                # code...
                                echo "Login Successful";
                                $_SESSION['username'] = $username;
                                header('location:index.php');
                            }
                            elseif($username == "user") {
                                # code...
                                Echo "Login Successful";
                                $_SESSION['username'] = $username;
                                header('location:random.php');
                            }
                            else{
                                echo "Login Failed";
                                header('location:login.php');
                            }   
                    }
                }
                  
                /*
                $sql = "INSERT INTO users (username, password) values ('$username', '$password')";
                if ($conn->query($sql)) {
                    # code...
                    echo "New record is inserted successfully";
                }else{
                    echo "Error: ". $sql . "<br>". $conn->error;
                }
                $conn->close();
*/
            }

        }
    
?>