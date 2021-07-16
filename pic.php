<!DOCTYPE html>
<html>
  
<body>
    <center>
        <?php
			$id=$_GET["id"];
			$csv = array_map('str_getcsv', file('names.csv'));

			foreach($csv as $line){
				if($line[2] == $id){
					$name = $line[4];
					if(strlen($name)==0){
						echo "No picture available"
					}
					else{
						echo '<center><img src = $name alt="s" width="500" height="500"></center>'
					}
					
				}
			}
        ?>
    </center>
</body>
  
</html>