<?php 
function keep_track()
{
	static $count = 0;
	echo $count++;

}
keep_track();
keep_track();
keep_track();
keep_track();


?>