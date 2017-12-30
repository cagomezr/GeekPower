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
               <a href="{{route('home')}}" class="btn btn-success">See Task</a>
               <br>
               <hr>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
               <form action="create.php"  method="post">
                  <div class="form-group">
                     <label for=title >Title</label>
                     <input type="text" name="title" id="title" class="form-control"/>
                  </div>
                  <div class="form-group">
                     <label for=title >Genre</label>
                     <input type="text" name="genre" id="genre" class="form-control"/>
                  </div>
                  <div class="form-group">
                     <label for=title >ESRB Rating</label>
                     <select name="esrb" id="esrb" class="form-control">
                        <option value="">Select Rating</option>
                        <option value="Early Childhood">Early Childhood</option>
                        <option value="Everyone">Everyone</option>
                        <option value="Everyone 10+">Everyone 10+</option>
                        <option value="Teen ">Teen </option>
                        <option value="Mature ">Mature</option>
                        <option value="Adults Only">Adults Only</option>
                        <option value="Rating Pending">Rating Pending</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for=title >Quantity</label>
                     <input type="number"  min="0"  name="quantity" id="quantity" class="form-control"/>				
                  </div>
                  <div class="form-group">
                     <label for=title >Price</label>
                     <input type="number"  step="any" min="0" name="price" id="price" class="form-control"/>				
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary"> Save</button>
                  </div>
               </form>
            </div>
         </div>
      </main>
      <footer><span class="container">Games manager 2017</span></footer>
      <style>
         footer{background:#15224f;color:#FFF;min-height: 2em;margin-top:2em;}
      </style>
   </body>
</html>