<?php



 ?>
 <!doctype html>

 <html lang="de">
 <head>
   <meta charset="utf-8">

   <title>Becker Alarm Enter Pin</title>
   <meta name="description" content="Becker Alarm">
   <meta name="author" content="Denis Becker">

   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/jquery-ui.min.css">
   <link rel="stylesheet" href="css/jquery-ui.structure.css">
   <link rel="stylesheet" href="css/jquery-ui.theme.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
 </head>
 <body>
   <div class="maindiv" id="maindiv">
     <table width="100%" border="0">
       <tr><td><button class="pinboard-btn" id="btn-1" value="1">1</button></td><td><button class="pinboard-btn" id="btn-2" value="2">2</button></td><td><button class="pinboard-btn" id="btn-3" value="3">3</button></td></tr>
       <tr><td><button class="pinboard-btn" id="btn-4" value="4">4</button></td><td><button class="pinboard-btn" id="btn-5" value="5">5</button></td><td><button class="pinboard-btn" id="btn-6" value="6">6</button></td></tr>
       <tr><td><button class="pinboard-btn" id="btn-7" value="7">7</button></td><td><button class="pinboard-btn" id="btn-8" value="8">8</button></td><td><button class="pinboard-btn" id="btn-9" value="9">9</button></td></tr>
       <tr><td></td><td><button class="pinboard-btn" id="btn-0" value="0">0</button></td><td><button class="pinboard-btn-x" id="btn-x" value="x">X</button></td></tr>
       <tr><td width="100%" align="center" colspan="3"><input id="mypin" size="4" class="pinfield" type="password"></td></tr>
     </table>
   </div>
   <script src="js/jquery.js"></script>
   <script src="js/jquery-ui.min.js"></script>
   <script src="js/jquery.mobile-1.4.5.js"></script>
   <script src="js/myscripts.js"></script>
 </body>
 </html>
