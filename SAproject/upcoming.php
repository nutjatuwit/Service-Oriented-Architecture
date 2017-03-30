<?php
  include "conf/info.php";
  $title="Upcoming Movies";
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
    <h1>Upcoming Movies</h1>
    <?php
      include_once "api/api_upcoming.php";
      $min = date('d F Y', strtotime($upcoming->dates->minimum));
      $max = date('d F Y', strtotime($upcoming->dates->maximum));
      echo "<h4><sub>coming soon from </sub> <span>". $min . "</span> , <sub>until</sub> <span>" . $max . "</span></h4>";
    ?>
    <hr>
    <ul>
      <table width="300" border="1">
        <?php 
                 $i=0;
      
        foreach($upcoming->results as $p){?>
        <?php if($i == 4){ 
                     $i=-1; ?>
                  <tr>
              <?php }else{ ?>
                
               <td>
         <?php echo '<a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_2.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5><h5>Release : ". date('d F Y', strtotime($p->release_date)) . "</h5></a>"; ?>
          </td>
       <?php }
             $i = $i+1;
         }  ?>
      </table>
    </ul>

