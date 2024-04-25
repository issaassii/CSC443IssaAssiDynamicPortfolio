<?php 
    session_start();
    $username = $_POST['signupusername'];
    $password = sha1($_POST['signuppassword']);
    $signuparray = ['username'=> $username,'password'=> $password];
    $file = file_get_contents("users.json");
    $users = json_decode($file, true);

    function checkExists($username, $users) {
        for($i = 0; $i < count($users); $i++) {
            if($users[$i]['username'] == $username) {
                return true;
            }
        }
        return false;
    }

    if(checkExists($username, $users )) {
        echo "Error! User already exists!";
    } else {
        $fp = fopen("users.json", 'w');
        array_push($users, $signuparray);
        $submit=json_encode($users, JSON_PRETTY_PRINT);
        if(fwrite($fp, $submit)) {
            echo "Registered Succesfully!";
        };
        fclose($fp);
        header('Location: ../index.php');
    }
?>