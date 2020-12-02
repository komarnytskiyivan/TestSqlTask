<?php require "./includes/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>TestTask</title>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="./includes/style.css" rel="stylesheet">
   </head>
   <body>
      <div class="container bootstrap snippets bootdey">
         <div class="row">
            <div class="col-lg-12">
               <div class="main-box no-header clearfix">
                  <div class="main-box-body clearfix">
                     <div class="table-responsive ">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="text-center"><span>Director name</span></th>
                                 <th class="text-center"><span>Critics reviews</span></th>
                                 <th class="text-center"><span>Duration</span></th>
                                 <th class="text-center"><span>Movie title</span></th>
                                 <th class="text-center"><span>Language</span></th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $movies = mysqli_query($connection,"SELECT * FROM `movies` ORDER BY `movie_title` LIMIT 20");
                                 while($movie = mysqli_fetch_assoc($movies)){
                                 ?>
                              <tr>
                                 <td class="text-center" style="width: 20%;">
                                    <p><?php echo $movie['director_name']; ?></p> 
                                 </td>
                                 <td class="text-center" style="width: 20%;">
                                    <p><?php echo $movie['num_critic_for_reviews']; ?></p> 
                                 </td>
                                 <td class="text-center" style="width: 20%;">
                                    <p><?php echo $movie['duration']; ?></p> 
                                 </td>
                                 <td class="text-center" style="width: 20%;">
                                    <p><?php echo $movie['movie_title']; ?></p> 
                                 </td>
                                 <td class="text-center" style="width: 20%;">
                                    <p><?php echo $movie['language']; ?></p> 
                                 </td>
                              </tr>
                              <?php
                                 }
                              ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="./includes/main.js" type="text/javascript"></script>
   </body>
</html>