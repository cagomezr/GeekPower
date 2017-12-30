<?php
/*function dateComparison*/
/*It takes a start date and an end date then creates a range to search */
/*one day  then a  period of  time is  set up to loop through  if the  */
/*number of day is  bigger than 6 they are not weekdays it returns the */
/*value of how many weekdays   were in date  range                       */
function dateComparison($startDate, $endDate)
{
    $interval    = DateInterval::createFromDateString('1 day');
    $period      = new DatePeriod($startDate, $interval, $endDate);
    $returnValue = 0;
    foreach ($period as $dt) {
        if ($dt->format("N") < 6) {
            $returnValue++;
        }
    }
    return $returnValue;
}
$datesys = 0;
$date1   = "";
$date2   = "";
if (isset($_POST['date1'])) {
    $datesys = dateComparison(new DateTime($_POST['date1']), new DateTime($_POST['date2']));
    $date1   = $_POST['date1'];
    $date2   = $_POST['date2'];
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Date Diference</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   </head>
   <body>
      <header class="jumbotron">
         <h1 class="text-center">Date Diference</h1>
      </header>
      <main class="container">
         <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
               <form action="index.php"  method="post">
                  <div class="form-group">
                     <label for=title >Date 1</label>
                     <input type="text" name="date1" id="date1" class="form-control" value="<?php echo $date1 ?>" />
                  </div>
                  <div class="form-group">
                     <label for=title >Date 2</label>
                     <input type="text" name="date2" id="date2" class="form-control" value="<?php echo $date2 ?>" />
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary"> Save</button>
                  </div>
               </form>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
               <p>
                  <?php 
                     if(isset($_POST['date1'])){
                     	echo "<p> there is {$datesys} weekdays</p>";
                     }
                     ?>
               </p>
            </div>
         </div>
      </main>
   </body>
</html>