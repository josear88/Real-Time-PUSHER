<?php
  require __DIR__ . '/../vendor/autoload.php';
  include "../config/index.php";

  $options = array(
    'cluster' => 'us2',
    'encrypted' => true
  );
  $pusher = new Pusher\Pusher(
    'cc65b85352b508063ab5',
    'f5cf694b257bb3e237bb',
    '477359',
    $options
  );

  $envio = $_POST['info'];
  $data['message'] = $_POST['info'];
  $query = mysqli_query($link,"INSERT INTO info VALUES(null,'$envio')");
  $pusher->trigger('my-channel', 'my-event', $data);
  header('location:../');
?>
