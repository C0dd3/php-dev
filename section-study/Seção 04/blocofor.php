<?php 
	
echo "<selectt>";

for ($i=date("Y"); $i >= date("Y")-100; $i--) { 


	echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>";

 ?>