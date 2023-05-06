<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css?"<?=date('m:s')?>>
	<script src="<?php echo URL; ?>public/js/custom.js?"<?=date('m:s')?>></script>
</head>
<body>
	<?php if(Session::get('loggedIn') == true):?>
		<div id="header">
			<br>
			<a href="<?php echo URL; ?>index">Главная страница</a>
			&nbsp
			<?php if(Session::get('status') === 'admin'):?>
				<a href="<?php echo URL; ?>createUser">Созать пользователя для входа в систему</a>
				&nbsp
				<a href="<?php echo URL; ?>viewGrades">Изменить оценки</a>
				&nbsp
				<a href="<?php echo URL; ?>viewUsers">Посмотреть информацию об учащихся</a>
				&nbsp
			<?php endif; ?>
			<?php if(Session::get('status') === 'student'):?>
				<a href="<?php echo URL; ?>viewGrades">Посмотреть оценки</a>
				&nbsp
			<?php endif; ?>
			<a href="<?php echo URL; ?>index/logout">Выйти из системы</a>
		</div>
	<?php endif; ?>
	<div id="content">
