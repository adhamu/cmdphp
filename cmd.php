<?php

	/*for($i=0; $i<10; $i++) {
		fwrite(STDOUT, $i);
		sleep(1);
	}*/

	/*fwrite(STDOUT, "Enter your name\n");

	$name = fgets(STDIN);

	fwrite(STDOUT, "Hello $name");
	exit;*/

	/*fwrite(STDOUT, "Pick some colors (enter the letter and press return)\n");

	// An array of choice to color
	$colors = array (
	'a'=>'Red',
	'b'=>'Green',
	'c'=>'Blue',
	);

	fwrite(STDOUT, "Enter 'q' to quit\n");

	// Display the choices
	foreach ( $colors as $choice => $color ) {
	fwrite(STDOUT, "\t$choice: $color\n");
	}

	// Loop until they enter 'q' for Quit
	do {
	// A character from STDIN, ignoring whitespace characters
	do {
	$selection = fgetc(STDIN);
	} while ( trim($selection) == '' );

	if ( array_key_exists($selection,$colors) ) {
	fwrite(STDOUT, "You picked {$colors[$selection]}\n");
	}

	} while ( $selection != 'q' );

	exit(0);*/

	/*$handle = fopen("xError.log", "w+");
	if(fwrite($handle, "Errors")) {
		echo "Log file written\n";
	}
	fclose($handle);*/

	/*# Output below to text file by executing
	# php cmd.php > myfile.txt
	echo "Hi";*/



?>