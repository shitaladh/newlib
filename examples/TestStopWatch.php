<?php
    use Src\StopWatchClass;
	/**
	 *Use: TestStopWatch.php
	 */
	include_once "src/StopWatchClass.php";

	$watch = new StopWatchClass();

	$startTime = $watch->start();

	echo "test script to calculate execution time";
	sleep(2);

	for($i=0;$i<5;$i++) {
		echo "for loop execution.. \n";		
	}
	sleep(4);

    echo "done.. \n";

	$executionTime = $watch->stop($startTime);
    echo "This page was created in ".$executionTime." seconds \n"; 
?>
