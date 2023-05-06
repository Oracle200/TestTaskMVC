<?
	function sort_link_th($title, $a, $b) {
		$sort = @$_GET['sort'];
		if ($sort == $a) {
			return '<a class="active" href="/viewUsers?sort=' . $b .'&search='.$_GET['search'].'">' . $title . ' <i>▲</i></a>';
		} elseif ($sort == $b) {
			return '<a class="active" href="/viewUsers?sort=' . $a . '&search='.$_GET['search'].'">' . $title . ' <i>▼</i></a>';
		} else {
			return '<a href="/viewUsers?sort=' . $a .'&search='.$_GET['search'].'">' . $title . '</a>';
		}
	}
?>

<h3>Все пользователи</h3>
	<form method="get" action="" id="searchform" >
		<p>Поиск: <input type="text" name="search" value="<?=$_GET['search']?>" id=""></p>
		<button type="submit" name='buttonSearch'>Поиск</button>
        <hr>
    </form>

<table>
	<tr>
		<th><?php echo sort_link_th('id', 'id_asc', 'id_desc'); ?></th>
		<th><?php echo sort_link_th('Логин', 'username_asc', 'username_desc'); ?></th>
		<th><?php echo sort_link_th('Статус', 'status_asc', 'status_desc'); ?></th>
		<th><?php echo sort_link_th('Фамилия', 'surname_asc', 'surname_desc'); ?></th>
		<th><?php echo sort_link_th('Имя', 'firstname_asc', 'firstname_desc'); ?></th>
		<th><?php echo sort_link_th('Отчество', 'patronymic_asc', 'patronymic_desc'); ?></th>
		<th><?php echo sort_link_th('Дата рождения', 'dob_asc', 'dob_desc'); ?></th>
	</tr>
<?php
    foreach($this->userList as $key => $row) {
        echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["username"] . "</td>";
				echo "<td>" . $row["status"] . "</td>";
				echo "<td>" . $row["surname"] . "</td>";
				echo "<td>" . $row["firstname"] . "</td>";
				echo "<td>" . $row["patronymic"] . "</td>";
				echo "<td>" . $row["dob"] . "</td>";
				echo "<td><a href='UpdateInfo/updateInfoID/{$row["id"]}'>Изменить</a></td>";
				echo "</tr>";
    }
?>

</table>
