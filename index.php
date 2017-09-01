<!DOCTYPE html>
<html>
	<head>
		<title>OOP PHP</title>
		<?php include("class_lib.php");?>
	</head>
	<body>
		<?php			
			$sakhawat = new Person();
			$faysal = new Person();

			$sakhawat->set_name("sakhawat");
			$faysal->set_name("faysal");

			echo $sakhawat->get_name();
			echo $faysal->get_name();

		?>
		<?php
			$base = new Base();
			$sub = new SubClass();

		?>

		
	</body>
</html>