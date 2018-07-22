<div align="center">


	<div >
    	
   		 <div class="mainDiv" >
         
        
  			 <div style="width:1200px;height:227px;
                /padding-top:10px;">
                <?php include("blocks/header.php");?></div>
                
            <div id="orders">
            <?php if(($result= mysql_query("SELECT * FROM description_problem",$db))==false){}	?>
          	<?php if(($result1= mysql_query("SELECT * FROM phoneOrders",$db))==false){}	?>	
            <div class="nameSelect">Консультация</div>
                <table id="selectMain">
                	<thead>
                    <tr>
                    	<th>#</th>
                        <th>Name</th>
												<th>Phones</th>
												<th>Description</th>
                    </tr>
                    </thead>
                <?php 
				$i=1;
				$table="";
				while($myrow = mysql_fetch_array($result)) {                   //цикл
				 $table .= "<tr id='".$myrow[0]."' qtable='description_problem'>";
				 $table .= "<td align='center' width='50px'>".$i."</td>";
				 $table .= "<td align='center' width='100px'>".$myrow[1]."</td>";
				 $table .= "<td align='center' width='100px'>".$myrow[2]."</td>";
				 $table .= "<td align='left'><textarea class='description_textarea' width='100%'>".$myrow[3]."</textarea></td>";
				 $table .= "<td align='center' class='dell-red'  width='50px'><a href='blocks/selectOrders/del_main.php' id='".$myrow[0]."'qtable='description_problem'>Удалить</a></td>";
				 $table .= "</tr>";
				 $i++;
				}
				
						echo  $table;           // выводитс			
				?>
                </table>
                <div class="nameSelect">Обратный звонок</div>
                    <table id="selectMain">
                	<thead>
                    <tr>
                    	<th>#</th>
                        <th>Name</th>
												<th>Phones</th>
												<th>Description</th>
                    </tr>
                    </thead>
                <?php 
				$i=1;
				$table="";
				while($myrow1 = mysql_fetch_array($result1)) {                   //цикл
				 $table .= "<tr id='".$myrow1[0]."' qtable='phoneOrders'>";
				 $table .= "<td align='center' width='50px'>".$i."</td>";
				 $table .= "<td align='center' width='150px'>".$myrow1[1]."</td>";
				 $table .= "<td align='center' width='150px'>".$myrow1[2]."</td>";
				 $table .= "<td align='center' width='150px'>".$myrow1[3]."</td>";
				 $table .= "<td align='center' class='dell-red'  width='50px'><a href='blocks/selectOrders/del_main.php' id='".$myrow1[0]."' 	qtable='phoneOrders'>Удалить</a></td>";
				 $table .= "</tr>";
				 $i++;
				}
				
						echo  $table;           // выводитс			
				?>
                </table>
            
            </div>
   </div>
   
</div>

	</div>
   
    </div>
    <div id="back"></div>