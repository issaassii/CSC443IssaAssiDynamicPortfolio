<?php 
    session_start();
    $username = $_POST['loginusername'];
    $password = sha1($_POST['loginpassword']);
    $signuparray = ['username'=> $username,'password'=> $password];
    $file = file_get_contents("users.json");
    $users = json_decode($file, true);

    function checkValidLogin($username, $password, $users) {
        for($i = 0; $i < count($users); $i++) {
            if($users[$i]['username'] == $username && $users[$i]['password'] == $password) {
                return true;
            }
        }
        return false;
    }

    if(checkValidLogin($username, $password, $users)) {
        $_SESSION['username'] = $username;
        echo "Successful Login!";
    } else {
        echo "Incorrect Details!";
    }
    header('Location: ../index.php');
?>