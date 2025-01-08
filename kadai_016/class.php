<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kadai_016</title>
</head>
<body>
  <p>
    <?php
      class Food {
        private $name;
        private $price;

        public function set_price($price) {
          $this->price = $price;
        }
        public function show_price() {
          echo $this->price;
          echo '<br>';
        }
        public function __construct($name, $price) {
          $this->name = $name;
          $this->price = $price;
        }
      }
      
      class Animal {
        private $name;
        private $height;
        private $weight;
        
        public function get_height($height) {
          $this->height = $height;
        }
        public function show_height() {
          echo $this->height;
          echo '<br>';
        }
        
        public function __construct($name, $height, $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }
      

      $food = new Food('potato', 250);
      print_r($food);
      echo '<br>';
      $animal = new Animal('dog', 60, 5000);
      print_r($animal);
      echo '<br>';
      
      $food->show_price();
      $animal->show_height();
    ?>
  </p>
</body>
</html>