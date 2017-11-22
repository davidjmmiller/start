<?php

$message = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == '' || $password == '' ){
        $message[] = 'Username and password are required';
    }

    $conn = db_connect();
    $sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".md5($password)."' and active = 1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        header('Location: /');
    } else {
       $message[] = 'Username or pasword invalid';
    }
    $conn->close();
        

}

?>
<div class="login">
    <?php
        if(count($message)>0):
            echo '<div class="message">';
            echo '<ul>';
            if (is_array($message) && count($message) > 0){
                foreach($message as $msg){
                    echo '<li>'.$msg.'</li>';
                }
            }
            echo '</ul>';
            echo '</div>';
        endif;
    ?>
    <form method="post" action="/login">
        <label>User <input type="username" name="username"></label>
        <label>Password <input type="password" name="password"></label>
        <input type="submit" value="Login">
    </form>
</div>