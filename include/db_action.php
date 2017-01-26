<?php
  include_once "config.php";
  include_once "db.php";

  if ($_POST['action'] == "add_switch") {
    $sql = "insert into dba_switch (switch-name,switch-description,switch-GPIO,switch-state,switch-ts) VALUES('" . $_POST['name'] . "','" . $_POST['desc'] . "','" . $_POST['gpio']. "','" .$_POST['state']. "','$ts')";


  }

  if ($_POST['action'] == "add_cam") {
    $sql = "insert into dba_cams (cam-name,cam-url,cam-user,cam-passwd,cam-place) VALUES('" . $_POST['name'] . "','" . $_POST['url'] . "','" . $_POST['user']. "','" . $_POST['passwd']. "','" . $_POST['place']. "')";
  }


  if ($_POST['action'] == "del_cam") {
    $id = $_POST['id'];
    if (is_int($id)) {
      $sql = "delete from dba_cams where id='$id'";

    }


  }
  if ($_POST['action'] == "del_switch") {
    $id = $_POST['id'];
    if (is_int($id)) {
      $sql = "delete from dba_switch where id='$id'";

    }

  }
  print "OK";
 ?>
