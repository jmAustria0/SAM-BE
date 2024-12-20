<?php
class Personality{
  public $name;
  public $shortDescription;
  public $longDescription;
  public $color;
  public $image;

  public function __construct($name, $shortDescription, $longDescription, $color, $image){
    $this->name = $name;
    $this->shortDescription = $shortDescription;
    $this->longDescription = $longDescription;
    $this->color = $color;
    $this->image = $image;
  }

  public function generateCard(){
    return '
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 card py-5 mb-5" style =  "background-color:'.$this->color.'">
      <div class="card p-4 rounded-5" style = "border: none;  background-color:'.$this->color.'" >
        <div class="h3">
          <h2 class="text-center">'. $this->name .'</h2>
          <div class="d-flex justify-content-center">
            <img src="'.$this->image.'" style="min-height: 300px; max-height: 500px; object-fit: cover; border: none;" class = "rounded-5"> 
          </div>
        </div>
        <div class="mb-3 text-secondary">
          '.$this->shortDescription.'
        </div>
        <div class="mb-3">
          '.$this->longDescription.'
        </div>
      </div>
    </div>
    ';
}
}

class IslandContent {
  public $islandContentID;
  public $islandOfPersonalityID;
  public $image;
  public $content;
  public $color;

  public function __construct($islandContentID, $islandOfPersonalityID, $image, $content, $color) {
      $this->islandContentID = $islandContentID;
      $this->islandOfPersonalityID = $islandOfPersonalityID;
      $this->image = $image;
      $this->content = $content;
      $this->color = $color;
  }

  public function generateCard() {
    return '
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="'.$this->image.'" style="height: 200px; object-fit: cover; width: 100%;">
                <div class="card-body" style="background-color: '.$this->color.'">
                    <p class="card-text"><strong>Content:</strong> '.$this->content.'</p>
                </div>
            </div>
        </div>';
}
}

?>