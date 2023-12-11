<?php
require_once "Connection.php";

class User extends Connection
{
    public function store($request)
    {
        $first_name = $request['first_name'];
        $last_name  = $request['last_name'];
        $username   = $request['username'];
        $password   = $request['password'];

        $password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (`first_name`, `last_name`, `username`, `password`)
                VALUES ('$first_name', '$last_name', '$username', '$password')";

        if ($this->conn->query($sql)){
            header('location: ../views');   
            exit;                           // same as die
        } else {
            die('Error creating the user: ' . $this->conn->error);
        }
    }

    public function login($request)
    {
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        # Check the username
        if ($result->num_rows == 1){
            # Check if the password is correct
            $user = $result->fetch_assoc();
           
            
            if (password_verify($password, $user['password'])){
                # Create session variables for future use.
                session_start();
                $_SESSION['id']         = $user['id'];
                $_SESSION['username']   = $user['username'];
                $_SESSION['full_name']  = $user['first_name'] . " " . $user['last_name'];

                header('location: ../views/dashboard.php');
                exit;
            } else {
                die('Password is incorrect');
            }
        } else {
            die('Username not found.');
        }
    }

    public function getUser(){
        $id = $_SESSION['id'];

        $sql = "SELECT first_name, last_name, username, FROM users WHERE id= $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('error in retrieving a specific record'. $this->conn->error);
        }
    }


}

