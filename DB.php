<?php

namespace character;
class DB
{

    private $host;
    private $dbname;
    private $username;
    private $password;
    private $connection;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->connection = new \PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getImages()
    {
        $image_items = [];
        $sql = "SELECT * FROM image_item";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $image_items[] = [
                'id'=>$row ['id'],
                'desktop_no'=>$row ['desktop_no'],
                'mobile_no' => $row ['mobile_no'],
                'src' => $row['src'],
                'alt'=>$row['alt'],
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at'],

            ];

        }
        return $image_items;
    }

    public function getContent()
    {
        $content = [];
        $sql = "SELECT * FROM content";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $content[] = [
                'id'=>$row ['id'],
                'content'=>$row ['content'],
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at'],

            ];

        }
        return $content;
    }


    public function deleteImage($id){
        $sql="DELETE FROM image_item WHERE id=".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function imageDetail($id){
        $sql="SELECT id, desktop_no, mobile_no, src, alt FROM image_item WHERE id=".$id;


        try {
            $query=$this->connection->query($sql);
            $result=$query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateImage($id,$desktop_no,$mobile_no,$src,$alt){
        $dateTime = date('Y-m-d H:i:s', time());
        $sql="UPDATE image_item SET desktop_no ='".$desktop_no."',mobile_no ='".$mobile_no."', src='".$src."', alt ='".$alt."',updated_at='".$dateTime."' WHERE id=".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }


    public function insertImage($desktop_no,$mobile_no,$src,$alt){

        $dateTime = date('Y-m-d H:i:s', time());
        $sql="INSERT into image_item ( desktop_no,mobile_no,src,alt,created_at,updated_at) VALUE('" . $desktop_no . "','" . $mobile_no . "','" . $src . "','" . $alt . "','" . $dateTime . "','" . $dateTime . "')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }



    public function contentDetail($id){
        $sql="SELECT id, content FROM content WHERE id=".$id;


        try {
            $query=$this->connection->query($sql);
            $result=$query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateContent($id,$content){
        $dateTime = date('Y-m-d H:i:s', time());
        $sql="UPDATE content SET content ='".$content."', updated_at = '".$dateTime."'WHERE id=".$id;


        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deleteContent($id){
        $sql="DELETE FROM content WHERE id=".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function insertEmail($name,$email,$message){
        $dateTime = date('Y-m-d H:i:s', time());
        $sql="INSERT into email ( name, email,message,created_at,updated_at) VALUE('" . $name . "','" . $email . "','" . $message . "','" . $dateTime . "','" . $dateTime . "')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getEmails()
    {
        $email = [];
        $sql = "SELECT * FROM email";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $email[] = [
                'id'=>$row ['id'],
                'name'=>$row ['name'],
                'email'=>$row ['email'],
                'message'=>$row ['message'],
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at'],

            ];

        }
        return $email;
    }


    public function emailDetail($id){
        $sql="SELECT id, name, email, message FROM email WHERE id=".$id;

        try {
            $query=$this->connection->query($sql);
            $result=$query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateEmail($id,$name,$email,$message){
        $dateTime = date('Y-m-d H:i:s', time());
        $sql="UPDATE email SET name ='".$name."', email = '".$email."',message ='".$message."',updated_at ='".$dateTime."'WHERE id=".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deleteEmails($id){
        $sql = "DELETE  FROM email WHERE id=".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
