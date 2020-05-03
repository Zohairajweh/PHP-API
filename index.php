<?php
  // Submit a request to the API endpoint.
  $SoccerJSONString = file_get_contents( 'https://www.scorebat.com/video-api/v1/' );
  // Convert the response to a PHP object.
  $SoccerObject = json_decode( $SoccerJSONString );
  // Collect the first user in the results array.
  $Soccer = $SoccerObject[9];
  $videos = $Soccer->videos[0];

  // $routes = $stops->routes[1];
  // $stop_times = $routes->stop_times[1];
 
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scorebat</title>
</head>
<body>
  <h1>Scorebat</h1>
  
      <!-- <dt>Title :</dt> -->
      <h1> <?php echo $Soccer->title; ?><h1>
      <!-- <dt>Embed :</dt> -->
      <?php echo $Soccer->embed;?>
      <!-- <dt>URL :</dt> -->
      <a href="<?php echo $Soccer->url;?>">Click here</a>
      <!-- <dt>Thumbnail :</dt> -->
      <img src="<?php echo $Soccer->thumbnail; ?>">
      <h3>Date : <?php echo $Soccer->date;?></h3>
      
      <!-- <dt>Side1 :</dt>
      <dt>Name :</dt> -->
      <?php echo $Soccer->side1->name;?>
      <!-- <dt>URL :</dt> -->
      <a href="<?php echo $Soccer->side1->url;?>">Click here</a>
      <!-- <dt>Side2 :</dt>
      <dt>Name :</dt> -->
      <p><strong><?php echo $Soccer->side2->name;?></strong></p>
      
      <!-- <dt>URL :</dt> -->
      <a href="<?php echo $Soccer->side2->url;?>">Click here</a>
      <!-- <dt>Competition :</dt>
      <dt>Name :</dt> -->
      <?php echo $Soccer->competition->name;?>
      <h3>Id : <?php echo $Soccer->competition->id;?> </h3>
      
      <a href="<?php echo $Soccer->competition->url;?>">Click here</a> 
      <?php echo $videos->videos;?>
      <?php echo $videos->embed;?>
</body>
</html>

