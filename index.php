<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>TO-DO List</title>
</head>
<body>
	<form action="add.php" method="POST">
		<input type="text" name="title" required>
		<input type="submit" value="Add">
	</form>
	<ul>
		<?php
        //Подключаем базу данных из файла db.php
				require 'db.php';
        //Берем все элементы из базы данных, из таблицы list
				$query = $pdo->query('SELECT * FROM `list` ORDER BY `id` DESC');
        //Цикл который выводит все элементы, значения
				while($row = $query->fetch(PDO::FETCH_OBJ)) {
				        echo '<div><li>'. $row->title .' <a href="delete.php?id='.$row->id.'" id="card-link-click">X</a></li>' . ' </div>';

					}
				 ?>
	</ul>
</body>


 <div id="myDIV" class="header">
 <div class="calendar-item">
   <div id="myDIV" class="header">
 			<div class="calendar-head">Январь 2022</div>
 			<table>
 				<tr>
 					<th>Пн</th>
 					<th>Вт</th>
 					<th>Ср</th>
 					<th>Чт</th>
 					<th>Пт</th>
 					<th>Сб</th>
 					<th>Вс</th>
 				</tr><tr><td></td><td></td><td></td><td></td><td></td><td class="calendar-day last">1</td><td class="calendar-day last">2</td></tr><tr><td class="calendar-day last">3</td><td class="calendar-day last">4</td><td class="calendar-day last">5</td><td class="calendar-day last">6</td><td class="calendar-day last">7</td><td class="calendar-day last">8</td><td class="calendar-day last">9</td></tr><tr><td class="calendar-day last">10</td><td class="calendar-day last">11</td><td class="calendar-day last">12</td><td class="calendar-day today">13</td><td class="calendar-day ">14</td><td class="calendar-day ">15</td><td class="calendar-day ">16</td></tr><tr><td class="calendar-day ">17</td><td class="calendar-day ">18</td><td class="calendar-day ">19</td><td class="calendar-day ">20</td><td class="calendar-day ">21</td><td class="calendar-day ">22</td><td class="calendar-day ">23</td></tr><tr><td class="calendar-day ">24</td><td class="calendar-day ">25</td><td class="calendar-day ">26</td><td class="calendar-day ">27</td><td class="calendar-day ">28</td><td class="calendar-day ">29</td><td class="calendar-day ">30</td></tr><tr><td class="calendar-day ">31</td></tr></table></div>
 <style type="text/css">
 .calendar-item {
 	width: 700px;
 	display: inline-block;
   vertical-align: top;
 	margin: 0 300px 20px;
 	font: 14px/1.2 Arial, sans-serif;
 }
 .calendar-head {
 	text-align: center;
 	padding: 5px;
 	font-weight: 700;
 	font-size: 14px;
 }
 .calendar-item table {
 	border-collapse: collapse;
 	width: 100%;
 }
 .calendar-item th {
 	font-size: 12px;
 	padding: 6px 7px;
 	text-align: center;
 	color: #888;
 	font-weight: normal;
 }
 .calendar-item td {
 	font-size: 20px;
 	padding: 25px 5px;
 	text-align: justify;
 	border: 1px solid #ddd;
 }
 .calendar-item tr th:nth-child(6), .calendar-item tr th:nth-child(7),
 .calendar-item tr td:nth-child(6), .calendar-item tr td:nth-child(7)  {
 	color: #e65a5a;
 }
 .calendar-day.last {
 	color: #999 !important;
 }
 .calendar-day.today {
 	font-weight: bold;
 }
 .calendar-day.event {
 	background: #ffe2ad;
 	position: relative;
 	cursor: pointer;
 }
 .calendar-day.event:hover .calendar-popup {
 	display: block;
 }
 .calendar-popup {
 	display: none;
 	position: absolute;
 	top: 40px;
 	left: 0;
 	min-width: 200px;
 	padding: 15px;
 	background: #fff;
 	text-align: left;
 	font-size: 13px;
 	z-index: 100;
 	box-shadow: 0 0 10px rgba(0,0,0,0.5);
 	color: #000;
 }
 .calendar-popup:before {
 	content: "";
 	border: solid transparent;
 	position: absolute;
 	left: 8px;
 	bottom: 100%;
 	border-bottom-color: #fff;
 	border-width: 9px;
 	margin-left: 0;
 }
 </style>
</html>
