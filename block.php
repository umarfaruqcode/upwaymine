<?php


include 'block_io.php';

?>
      <?php

      $apikey = "f284-8e41-1e29-24e6";
      $version =2;
      $pin = "linumaroh";
      $block_io = new BlockIo($apikey, $pin, $version);
      $address = $block_io->get_new_address(array('label' => 'faruq_address'));
      /*$address = json_encode($address);
      $address = json_decode($address, true);*/
      $address = $address['data']["address"];
      var_dump($address);

/*      $amount = $block_io ->get_address_balance
      $address = $block_io ->get_new_address(array('label' => 'shibe1'));

      $block_io->get_new_address();
      $block_io->get_balance();*/


      ?>
