<?php
include('connect.php');
class data
{
    public function insert_signup($username, $phone, $email, $password, $confirmPass) {
        global $connect;
        $sql = "insert into signup (username, phone, email, password, confirmPass)
        values ('$username', '$phone', '$email', '$password', '$confirmPass')";
        $run = mysqli_query($connect, $sql);
        return $run;
    }
    public function select_signup_username($username)
    {
        global $connect;
        $sql = "select * from signup where username = '$username'";
        $run = mysqli_query($connect, $sql);
        return $run;
    }
    public function select_signup_email($email)
    {
        global $connect;
        $sql = "select * from signup where email = '$email'";
        $run = mysqli_query($connect, $sql);
        return $run;
    }
    public function select_user_account($email, $password) {
        global $connect;
        $sql = "select * from signup where email = '$email' and password = '$password'";
        $run = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($run);
        return $num;
    }
}
