<?php
require "Database.php";

$data = Database::getAll();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Games Manager 0.1</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   </head>
   <body>
      <header class="jumbotron">
         <h1 class="text-center">Games Manager 2017</h1>
      </header>
      <main class="container">
         <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
               <a href="creategame.php" class="btn btn-success">Add Game!</a>
               <br>
               <hr>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
               <div class="card">
                  <div class="card-heading">
                     Game List:
                  </div>
                  <div>
                     <table class="table">
                        <tr>
                           <th>Title</th>
                           <th>Genre</th>
                           <th>ESRB Rating</th>
                           <th>Quantity</th>
                           <th>Price</th>
                           <th>Edit</th>
                           <th>delete</th>
                        </tr>
                        <?php	
                           foreach ($data as $row){
                           	echo '<tr>';
                           	echo '<td>'	.  $row['title'] .'</td>';
                           	echo '<td>'	.  $row['genre'] .'</td>';
                           	echo '<td>'	.  $row['esrb'] .'</td>';
                           	echo '<td>'	.  $row['quantity'] .'</td>';
                           	echo '<td>$' . $row['price'] .'</td>';	
                           	echo '<td> <form action="editgame.php"  method="post">	<input type="hidden" name="id" value="' .  $row['id'] .'"/>
                           <button type="submit" class="btn btn-primary"> Edit</button></form></td>';
                           	echo '<td> <form action="delete.php"  method="post">	<input type="hidden" name="id" value="' .  $row['id'] .'"/>
                           <button type="submit" class="btn btn-danger"> Edit</button></form></td>';
                           	echo '</tr>';
                           }
                           ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <footer><span class="container">Games manager 2017</span></footer>
      <style>
         footer{background:#15224f;color:#FFF;min-height: 2em;margin-top:2em;}
      </style>
   </body>
</html>