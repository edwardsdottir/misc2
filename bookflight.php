<?php

// retrieve the form data by using the element's name attributes value as key

	$from = $_POST['from'];
	$to = $_POST['to'];
	// display the results

		if($from == 'DAB' && $to =="BCN")
		{

			echo 'You booked your flight. The Flag is {cCCHs9x$?g&v_Y%7}';
		}
		else
		{
			echo 'This is not correct. Please check spelling and make sure it is all uppercase.';
		}

//}


?>
