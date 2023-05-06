<?
	$flag= $this->userID;
?>

<form action='' method='post' >
    <input type='hidden' name='id' value='<?=$flag["id"]?>' />
    <p>Логин: <input type='text' name='username' value='<?=$flag["username"]?>' /></p>
    <p>Статус: <input type='text' name='status' value='<?=$flag["status"]?>' /></p>
    <p>Фамилия: <input type='text' name='surname' value='<?=$flag["surname"]?>' /></p>
    <p>Имя: <input type='text' name='firstname' value='<?=$flag["firstname"]?>' /></p>
    <p>Отчество: <input type='text' name='patronymic' value='<?=$flag["patronymic"]?>' /></p>
    <p>Дата рождения: <input type='date' name='dob' value='<?=$flag["dob"]?>' /></p>
    <button name='update' type='submit' value='1'>Сохранить</button>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <?if ($flag["status"] !== 'admin'):?>
        <button name='delete' type='submit' value='1'>Удалить</button>
    <?endif?>
</form>