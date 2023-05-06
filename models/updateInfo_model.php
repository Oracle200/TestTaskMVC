<?php

class UpdateInfo_Model extends Model {

	public function __construct() {
		parent:: __construct();
        Session::init();
        Session::guard();
	}

    public function getInfoID($id){
        (int)$userid = mysqli_real_escape_string($this->DataBase, $id);
        $sql = "SELECT * FROM users WHERE id = '$userid'";
        if($result = mysqli_query($this->DataBase, $sql)){
            $result = $this->DataBase->query($sql);
            foreach ($result as $row){
                return $row;
            }
        }
    }


    public function setInfoID($data){
        $userid = mysqli_real_escape_string($this->DataBase, $data["id"]);
        $username = mysqli_real_escape_string($this->DataBase, $data["username"]);
        $status = mysqli_real_escape_string($this->DataBase, $data["status"]);
        $surname = mysqli_real_escape_string($this->DataBase, $data["surname"]);
        $firstname = mysqli_real_escape_string($this->DataBase, $data["firstname"]);
        $patronymic = mysqli_real_escape_string($this->DataBase, $data["patronymic"]);
        $dob = mysqli_real_escape_string($this->DataBase, $data["dob"]);

        if (!empty($data['update']))
        {
            $sql = "UPDATE users SET ";
            $sql.= 'username = "' . (!empty($username) ? $username : 'NULL');
            $sql.= '" , status = "' . (!empty($status) ? $status : 'NULL');
            $sql.= '" , surname = "' . (!empty($surname) ? $surname : 'NULL');
            $sql.= '" , firstname = "' . (!empty($firstname) ? $firstname : 'NULL');
            $sql.= '" , patronymic = "' . (!empty($patronymic) ? $patronymic : 'NULL');
            $sql.= '", dob = "' . (!empty($dob) ? $dob : 'NULL');
            $sql.= '" WHERE id = '.$userid;
            mysqli_query($this->DataBase, $sql);
        }
        if (!empty($data['delete']) ) {
            $sql = "DELETE FROM users WHERE id = '$userid'";
            mysqli_query($this->DataBase, $sql);
            header("Location: ../../viewUsers");
        }
    }
}