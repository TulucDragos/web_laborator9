<?php
class Database
{
    public function sanitize($var)
    {   
        var_dump($var);
        $return = mysqli_real_escape_string($this->connection, $var);
        var_dump($return);
        return $var;
    }
    public function create($fname, $lname, $email, $gender, $age)
    {
        $sql = "INSERT INTO ex (first_name, last_name, gender, age,  email_id) VALUES ('$fname', '$lname', '$gender', '$age', '$email')";
        $res = mysqli_query($this->connection, $sql);
        var_dump($res);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function read()
    {
        $sql = "SELECT * FROM ex";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function update($fname, $lname, $email, $gender, $age, $id)
    {
        $sql = "UPDATE ex SET first_name='$fname', last_name='$lname', gender='$gender', age='$age', email_id='$email' WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM ex WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
$database = new Database();
