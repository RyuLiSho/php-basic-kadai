<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_005</title>
</head>

<body>
  <p>
    <?php
    $scores = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);
    
    $sum = 0;
    foreach ($scores as $score) {
      $sum += $score;
    };

    $ave = $sum / count($scores);

    echo "合計：{$sum}";
    echo '<br>';
    echo "平均：{$ave}";
    ?>
  </p>
</body>

</html>