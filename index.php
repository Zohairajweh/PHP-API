<?php
  // Submit a request to the API endpoint.
  $SoccerJSONString = file_get_contents( 'https://www.scorebat.com/video-api/v1/' );
  // Convert the response to a PHP object.
  $SoccerObject = json_decode( $SoccerJSONString );
  // Collect the first user in the results array.
  $Soccer = $SoccerObject[1];
  $videos = $Soccer->videos[1];

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
  
  <dl>
    <dd>
      <dt>Title :</dt>
      <?php echo $Soccer->title; ?>
      <dt>Embed :</dt>
      <?php echo $Soccer->embed;?>
      <dt>URL :</dt>
      <a href="<?php echo $Soccer->url;?>">Visit scorebat.com</a>
      <dt>Thumbnail :</dt>
      <dd><img src="<?php echo $Soccer->thumbnail; ?>"></dd>
      <dt>Date :</dt>
      <?php echo $Soccer->date;?>
      <dt>Side1 :</dt>
      <dt>Name :</dt>
      <?php echo $Soccer->side1->name;?>
      <dt>URL :</dt>
      <a href="<?php echo $Soccer->side1->url;?>">Visit side1 URL</a>
      <dt>Side2 :</dt>
      <dt>Name :</dt>
      <?php echo $Soccer->side2->name;?>
      <dt>ID:</dt>
      <?php echo $Soccer->side2->id;?>
      <dt>URL :</dt>
      <a href="<?php echo $Soccer->side2->url;?>">Visit side2 URL</a>
      <dt>Competition :</dt>
      <dt>Name :</dt>
      <?php echo $Soccer->competition->name;?>
      <dt>Id :</dt>
      <?php echo $Soccer->competition->id;?>
      <dt>URL :</dt>
      <a href="<?php echo $Soccer->competition->url;?>">Visit competition URL :</a>
      <dt>Videos :</dt>
      <dt>Title :</dt>
      <?php echo $videos->title;?>
      <dt>Embed :</dt>
      <?php echo $videos->embed;?>
    </dd>

</body>
</html>

