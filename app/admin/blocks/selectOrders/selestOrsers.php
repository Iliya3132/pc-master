 <?php 	
		
 		include("ordersSelect.php");
											
		
 ?>
<div class="selectBox">
<h1>Заявки на полный комплект</h1>
<table id="selectOrderTable">
    <thead>
    <tr>
        <th>#</th>        
        <th>Имя</th>
        <th>Телефон</th>
        <th>Email</th>
    </tr>

    </thead>
<?php 
$i=1;
$table = "";
while($myrow = mysql_fetch_array($result)) {                   //цикл
 $table .= "<tr id='".$myrow[0]."' qtable='mainOrder'>";
 $table .= "<td align='center' width='150px'>".$i."</td>";
 $table .= "<td align='center' width='150px'>".$myrow[1]."</td>";
 $table .= "<td align='center' width='150px'>".$myrow[2]."</td>";
 $table .= "<td align='center' width='150px'>".$myrow[3]."</td>";
 $table .= "<td align='center' class='dell-red'  width='50px'><a href='blocks/selectOrders/del_main.php' id='".$myrow[0]."' qtable='mainOrder'>Удалить</a></td>";
 $table .= "</tr>";
 $i++;
}

        echo  $table;           // выводится
?> 
</table>
</div>
 
<div class="selectBox">
<h1>Заявки на системный блок</h1>
<table id="selectOrderTable">
    <thead>
    <tr>
        <th>#</th>        
        <th>Имя</th>
        <th>Телефон</th>
        <th>Email</th>
    </tr>
    </thead>
<?php 
$i=1;
$table2="";
while($myrow1 = mysql_fetch_array($result1)) {                   //цикл
 $table2 .= "<tr id='".$myrow1[0]."' qtable='pc_skidka40'>";
 $table2 .= "<td align='center' width='150px'>".$i."</td>";
 $table2 .= "<td align='center' width='150px'>".$myrow1[1]."</td>";
 $table2 .= "<td align='center' width='150px'>".$myrow1[2]."</td>";
 $table2 .= "<td align='center' width='150px'>".$myrow1[3]."</td>";
 $table2 .= "<td align='center' class='dell-red'  width='50px'><a href='blocks/selectOrders/del_main.php'id='".$myrow1[0]."' qtable='pc_skidka40'>Удалить</a></td>";
 $table2 .= "</tr>";
 $i++;
}

        echo  $table2;
		           // выводится
?> 
</table>
</div>
 


<div class="selectBox">
<h1>Заявки на обратный звонок</h1>
<table id="selectOrderTable">
    <thead>
    <tr>
        <th>#</th>        
        <th>Имя</th>
        <th>Телефон</th>
        <th>Email</th>
    </tr>
    </thead>
<?php 
$i=1;
$table1="";
while($myrow2 = mysql_fetch_array($result2)) {                   //цикл
 $table1 .= "<tr id='".$myrow2[0]."' qtable='phone'>";
 $table1 .= "<td align='center' width='150px'>".$i."</td>";
 $table1 .= "<td align='center' width='150px'>".$myrow2[1]."</td>";
 $table1 .= "<td align='center' width='150px'>".$myrow2[2]."</td>";
 $table1 .= "<td align='center' width='150px'>".$myrow2[3]."</td>";
 $table1 .= "<td align='center' class='dell-red'  width='50px'><a href='blocks/selectOrders/del_main.php'id='".$myrow2[0]."' qtable='phone'>Удалить</a></td>";
 $table1 .= "</tr>";
 $i++;
}

        echo  $table1;           // выводится
?> 
</table>
</div>
 

   