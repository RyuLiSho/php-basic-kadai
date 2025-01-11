<?php
  session_start();

  $name = $_POST['user_name'];
  $age = $_POST['user_age'];
  $department = $_POST['department'];

  $errors = [];
  if (empty($name)) {
    $errors[] = 'お名前を入力してください。';
  }

  if (empty($age)) {
    $errors[] = '年齢を入力してください。';
  }

  if (empty($errors)) {
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;
    $_SESSION['department'] = $department;

    setcookie('name', $name, time() + 3600);
    setcookie('age', $age, time() + 3600);
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>入力内容をご確認ください。</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>

    <tr>
      <td>お名前</td>
      <td><?php echo $name; ?></td>
    </tr>

    <tr>
      <td>年齢</td>
      <td><?php echo $age; ?></td>
    </tr>

    <tr>
      <td>所属部署</td>
      <td><?php echo $department; ?></td>
    </tr>
  </table>

  <p>
    <button id="conirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>

  <?php
    if (!empty($errors)) {
      foreach ($errors as $error) {
        echo '<font color="red">' . $error . '</font>' . '<br>';
      }
      echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
    }
  ?>
</body>
</html>