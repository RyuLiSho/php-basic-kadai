<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
      $nums = [15, 4, 18, 23, 10 ];
      
      function sort_2way($array, $order) {
        if ($order === true) {
          echo '昇順にソートします。<br>';
          sort($array);
          foreach ($array as $asc) {
            echo $asc . '<br>';
          }
        } else {
          echo '降順にソートします。<br>';
          rsort($array);
          foreach ($array as $dsc) {
            echo $dsc.'<br>';
          }
        }
      }

      sort_2way($nums, true);
      sort_2way($nums, false);
    ?>
  </p>
</body>
</html>