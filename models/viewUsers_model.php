<?php


class ViewUsers_Model extends Model {

	public function __construct() {
		parent:: __construct();
	}


    public function viewUsers(){
        $sort_list = array(
            'id_asc'   => '`id`',
            'id_desc'  => '`id` DESC',
            'username_asc'  => '`username`',
            'username_desc' => '`username` DESC',
            'status_asc'   => '`status`',
            'status_desc'  => '`status` DESC',
            'surname_asc'   => '`surname`',
            'surname_desc'  => '`surname` DESC',
            'firstname_asc'   => '`firstname`',
            'firstname_desc'  => '`firstname` DESC',
            'patronymic_asc'  => '`patronymic`',
            'patronymic_desc' => '`patronymic` DESC',
            'dob_asc'   => '`dob`',
            'dob_desc'  => '`dob` DESC',
        );

        /* Проверка GET-переменной */
	    $sort = $_GET['sort'];
	    if (array_key_exists($sort, $sort_list)) {
		    $sort_sql = $sort_list[$sort];
	    } else {
		    $sort_sql = reset($sort_list);
	    }

        $name = mysqli_real_escape_string($this->DataBase ,$_GET['search']);
        $sql = "SELECT * FROM users";
        if (!empty($name)){
            $sql.= " WHERE CONCAT(id, username, status, surname, firstname, patronymic, DATE_FORMAT(dob, '%Y-%m-%d')) ";
            $sql.= " LIKE N'%$name%' ";
        }
        $sql.= " ORDER BY {$sort_sql}";
        echo $sql;
        $result = $this->DataBase->query($sql);
        return $result;

    }

}