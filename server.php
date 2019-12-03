<?php

  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'mt1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '04eaba3cb5f2812e39d4',
    'b751c5e0239f6945d4c5',
    '532369',
    $options
  );

  $data['message'] = $_GET['valor'] ?? 'no existe valor';
  $pusher->trigger('my-channel', 'my-event', $data);
?>