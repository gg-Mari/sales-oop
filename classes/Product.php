<?php
require_once "Connection.php";

class Product extends Connection
{
    public function store($request)
    {
        $product_name = $request['product_name'];
        $price  = $request['price'];
        $quantity   = $request['quantity'];
        
        $sql = "INSERT INTO products (`product_name`, `price`, `quantity`)
                VALUES ('$product_name', '$price', '$quantity')";

        if ($this->conn->query($sql)){
            header('location: ../views');   
            exit;                           // same as die
        } else {
            die('Error creating the user: ' . $this->conn->error);
        }
    }

    public function getAllProducts(){
        $sql = "SELECT id, product_name, price, quantity FROM products";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('error of retrieving all products'. $this->conn->error);
        }
    }
    public function getProduct(){
        $id = $_SESSION['id'];

        $sql = "SELECT product_name, price, quantity FROM products WHERE id= $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('error in retrieving a specific record'. $this->conn->error);
        }
    }
                    
    public function update($request){
        $id = $_SESSION['id'];

        $product_name = $request['product_name'];
        $price  = $request['price'];
        $quantity   = $request['quantity'];
       

        $sql = "UPDATE products SET product_name = '$product_name',price = '$price', quantity = '$quantity' WHERE id = '$id'";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die("ERROR: ". $this->conn->error);
        }
        
    }

    public function delete($id){
        $sql = "DELETE FROM products WHERE id  = $id";
        if($this->conn->query($sql)){
            session_destroy();
            header('location: ../views/login.php');
            exit;
        }else{
            die("ERROR: ". $this->conn->error);
        }
    }


}

