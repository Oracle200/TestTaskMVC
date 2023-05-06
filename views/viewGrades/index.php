<table>
<?php
	echo "<table>";
	echo "<tr>";
			if (Session::get('status') === 'admin'){
				echo "<th>Логин &nbsp</th>";
			}
	  echo "<th>Алгебра &nbsp</th>
			<th>Русский язык &nbsp</th>
			<th>Биология &nbsp</th>
			<th>Химия &nbsp</th>
			<th>История &nbsp</th>
		</tr>";
	foreach($this->gradeList as $key => $value) {
		if ($value['username'] != 'direktor'){
			echo '<tr>';
				if (Session::get('status') === 'admin'){
				echo '<td>'.$value['username'].'</td>';
			}
			echo '<td>'.$value['algebra'].'</td>';
			echo '<td>'.$value['russian_language'].'</td>';
			echo '<td>'.$value['Biology'].'</td>';
			echo '<td>'.$value['Chemistry'].'</td>';
			echo '<td>'.$value['History'].'</td>';
			if (Session::get('status') === 'admin'){
				echo "<td><a href='updateGrade/updateFromID/{$value['id']}'>изменить</a></td>";

			}
			echo "</tr>";
		}
	}
?>
</table>