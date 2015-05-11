<html>
<head><title>User Form</title></head>

<body>
<form>
	<?php
		for (colCount = 1; colCount < NoOfCols; col++)
		{
			
			(top,left)= parse(resultSet[colCOunt]);
			$top="105px";
			$left="280px";
			?>
			
				<p> Degree: <input type="text" value="text" style="position:absolute; top:<?php echo $top ?>;left:<?php echo $left ?>"></input> </p>
			
		}
		</form>
</body>
</html>