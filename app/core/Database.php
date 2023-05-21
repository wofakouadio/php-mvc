<?php

trait Database{
    private function connect(){
        $con = new PDO(DSN, USERNAME, PASSWORD);
        return $con;
    }
    public function query($query, $data = []){
        $con = $this->connect();
        $stmt = $con->prepare($query);
        $check = $stmt->execute($data);
        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)){
                return $result;
            }
        }
        return false;
    }

    public function get_row($query, $data = []){
        $con = $this->connect();
        $stmt = $con->prepare($query);
        $check = $stmt->execute($data);
        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)){
                return $result;
            }
        }
        return false;
    }
}
