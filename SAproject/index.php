<?php
  include "conf/info.php";
  $title="CHECK MOVIES";
  include_once "header.php";
?>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

    <h1>Top Rated Movies</h1>
    <hr>
    <ul>
      
       <?php include_once "api/api_toprated.php";  
           $i=0;
          ?>
        <table width="300" border="1">
          
       <?php foreach($toprated->results as $p){ ?>
            

            <?php if($i == 4){ 
                     $i=-1; ?>
                  <tr>
              <?php }else{ ?>
                
               <td>
         <?php echo '<a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w300'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a>"; ?>
               </td> 
               
             <?php }
                $i = $i+1;
                   
           }  ?>
          
          </table>
    </ul>

