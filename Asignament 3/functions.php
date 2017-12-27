<?php
	/*function dateComparison*/
	/*It takes a start date and an end date then creates a range to search */
	/*one day  then a  period of  time is  set up to loop through  if the  */
	/*number of day is  bigger than 6 they are not weekdays it returns the */
	/*value of how many weekdays   were in date  range					   */
	function dateComparison($startDate , $endDate) {
		$interval = DateInterval::createFromDateString('1 day');
		$period   = new DatePeriod($startDate, $interval, $endDate);
		$returnValue = 0;
		foreach ($period as $dt) {
		   if ($dt->format("N") < 6) {
        		$returnValue++;
    		}
		}
		return $returnValue;
	}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Functions</title>
   </head>
   <body>
      <h1>Functions</h1>
      <?php
         $datesys = dateComparison( new DateTime('2013-05-01'),new DateTime('2013-08-30'));
         
         echo "<p> there is {$datesys} weekdays</p>";
         ?>
   </body>
</html>