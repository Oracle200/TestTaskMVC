<?
	$flag= $this->userID;
?>
<h3>Обновления оценок</h3>
<form action='' method='post'>
	<input type='hidden' name='id' value='<?=$flag["id"]?>'/>
	<p>Алгебра: <input type='number' name='algebra' value='<?=$flag["algebra"]?>' /></p>
	<p>Русский язык: <input type='number' name='russian_language' value='<?=$flag["russian_language"]?>' /></p>
	<p>Биология: <input type='number' name='Biology' value='<?=$flag["Biology"]?>' /></p>
	<p>Химия: <input type='number' name='Chemistry' value='<?=$flag["Chemistry"]?>' /></p>
	<p>История: <input type='number' name='History' value='<?=$flag["History"]?>' /></p>
	<input type='submit' value='Сохранить'>
</form>