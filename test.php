<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<?php 
		
		sayHello('remote world');
			
		// phpinfo(); 
		?>
		<form>
		    
		    <label for="password">Password:</label>
            <input type="password" id="password" name="password">
	    </form>
		<?php 
		    echo("Hello World!"); 
		?>
		<br>
        <? echo("Hello World!"); ?>
        <p>văn bản HTML.</p>
		<form>
			<?php echo '<p> khối dư liệu. </p>' ;  ?>
			<p>dữ liệu html, <?php echo ' khối dư liệu 2.' ;  ?> </p>
			<?php echo '<b>';  ?>
			một ví dụ kết hợp.

			<?php echo '</b>';  ?>
			<?php 
			define("pi",3.14);
			$r=10;
			$s=pi
			  ?>
		</form>
		

	
    </body>
</html>
