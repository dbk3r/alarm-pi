<?php

 ?>

 <div class="subcontent" id="setup-content" style="display: none;">
     <table width=100%><tr>
       <td width="30%">SCHALTER</td>
       <td align=right>
         <div id="add_switch" class="add_btn">
           +
         </div>
       </td></tr>
     </table>
       <br>

     <div id="add_switch_form" class="add_switch_form" style="display:none">
       <table width=100%>
        <tr><td width="30%" align="right">Name</td><td width="70%" align="left"><input id="switch_name" class="mytextfield" type="text"></input></td></tr>
        <tr><td align="right">Beschreibung</td align="left"><td><input id="switch_desc" class="mytextfield" type="text"></input></td></tr>
        <tr><td align="right">GPIO</td><td align="left"><input id="switch_gpio" class="mytextfield" type="text"></input></td></tr>
        <tr><td align="right">State</td><td align="left"><input id="switch_state" class="mycheckbox" type="checkbox"></input></td></tr>
        <tr><td></td><td align="left"><button class="new-entry-btn" id="add_switch">Hinzufügen</button></td></tr>
      </table>
     </div>
     <?php
     $sql = "SELECT * from dba_switch ORDER BY id DESC";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
         print "<div class=setup-entry>".$row['switch_description']."</div>";
       }
     }
      ?>

      <table width=100%><tr>
        <td width="30%">KAMERA</td>
        <td align=right>
          <div id="add_cam" class="add_btn">
            +
          </div>
        </td></tr>
      </table>
      <br>

    <div id="add_cam_form" class="add_cam_form" style="display:none">
      <table width=100%>
       <tr><td width="30%" align="right">Name</td><td width="70%" align="left"><input id="cam_name" class="mytextfield" type="text"></input></td></tr>
       <tr><td align="right">URL</td align="left"><td><input id="cam_url" class="mytextfield" type="text"></input></td></tr>
       <tr><td align="right">Ort</td align="left"><td><input id="cam_place" class="mytextfield" type="text"></input></td></tr>
       <tr><td align="right">Benutzer</td><td align="left"><input id="cam_user" class="mytextfield" type="text"></input></td></tr>
       <tr><td align="right">Passwort</td><td align="left"><input id="cam_password" class="mypassword" type="password"></input></td></tr>
       <tr><td></td><td align="left"><button class="new-entry-btn" id="add_cam">Hinzufügen</button></td></tr>
     </table>
    </div>
    <?php
    $sql = "SELECT * from dba_switch ORDER BY id DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        print "<div class='setup-entry'>".$row['cam_name']."</div>";
      }
    }
     ?>

 </div>
