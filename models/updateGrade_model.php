<?php

class UpdateGrade_Model extends Model {

	public function __construct() {
		parent:: __construct();
        Session::init();
        Session::guard();
	}

    public function getID($id){
        (int)$userid = mysqli_real_escape_string($this->DataBase, $id);
        $sql = "SELECT * FROM users WHERE id = '$userid'";
        $dataid = [];
        if($result = mysqli_query($this->DataBase, $sql)){
            $result = $this->DataBase->query($sql);
            foreach ($result as $row){
                return $row;
            }
        }
    }

    public function setID($data){
        $userid = mysqli_real_escape_string($this->DataBase, $data["id"]);
        $algebra = mysqli_real_escape_string($this->DataBase, $data["algebra"]);
        $russian_language = mysqli_real_escape_string($this->DataBase, $data["russian_language"]);
        $Biology = mysqli_real_escape_string($this->DataBase, $data["Biology"]);
        $Chemistry = mysqli_real_escape_string($this->DataBase, $data["Chemistry"]);
        $History = mysqli_real_escape_string($this->DataBase, $data["History"]);

        $sql = "UPDATE users SET ";
        $sql.= 'algebra = ' . (!empty($algebra) ? $algebra : 'NULL');
        $sql.= ', russian_language = ' . (!empty($russian_language) ? $russian_language : 'NULL');
        $sql.= ', Biology = ' . (!empty($Biology) ? $Biology : 'NULL');
        $sql.= ', Chemistry = ' . (!empty($Chemistry) ? $Chemistry : 'NULL');
        $sql.= ', History = ' . (!empty($History) ? $History : 'NULL');
        $sql.= ' WHERE id = '.$userid;
        mysqli_query($this->DataBase, $sql);
    }
}