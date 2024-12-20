<?php
include("connect.php");
include("personalities.php");

$personalities = array();

$personalityQuery = "SELECT * FROM islandsofpersonality";
$personalityResult = executeQuery($personalityQuery);

while ($personalityRow = mysqli_fetch_assoc($personalityResult)) {
  $a = new Personality($personalityRow['name'], $personalityRow['shortDescription'], $personalityRow['longDescription'], $personalityRow['color'], $personalityRow['image']);
  array_push($personalities, $a);
}

$islandContents = array();

$islandContentQuery = "SELECT * FROM islandcontents";
$islandContentResult = executeQuery($islandContentQuery);

while ($islandContentRow = mysqli_fetch_assoc($islandContentResult)) {
  $content = new IslandContent($islandContentRow['islandContentID'], $islandContentRow['islandOfPersonalityID'], $islandContentRow['image'], $islandContentRow['content'], $islandContentRow['color']);
  array_push($islandContents, $content);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Core Memories</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body, h1, h2, h3, h4, h5, h6 {
      font-family: "Lato", sans-serif;
    }

    body, html {
      height: 100%;
      color: #777;
      line-height: 1.8;
    }

    .bgimg-2, .bgimg-3 {
      min-height: 400px;
    }

    .w3-wide {
      letter-spacing: 10px;
    }

    .w3-hover-opacity {
      cursor: pointer;
    }

    @media only screen and (max-device-width: 1600px) {
      .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
        min-height: 400px;
      }
    }
  </style>
</head>

<body>

  <div class="row" id="personality">
    <?php
    foreach ($personalities as $personality) {
      echo $personality->generateCard();
    }
    ?>
  </div>

  <div class="container mt-5" id="islandcontents">
    <h2 class="mb-4">Island Contents</h2>
    <div class="row">
      <?php
      foreach ($islandContents as $content) {
        echo $content->generateCard();
      }
      ?>
    </div>
  </div>

  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>

  <div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
    </div>
  </div>

</body>

</html>
