$( document ).ready(function() {

  setInterval(function(){
    d = new Date();
    $("#cam-1").attr("src", "/cam/cam-1.jpg?"+d.getTime());

  },500);

  $(".schalter").click(function() {
    $(this).toggleClass( "schalter", 1000 );
  });

  $("#menu").on("swipeleft", function(){
    $(".menu").toggle("slide");
  });

  $("#maindiv").on("swiperight", function(){
    $(".menu").toggle("slide");
  });

  $(".menu-button").click(function() {
    $(".menu").toggle("slide");
  });

  $(".add_btn").click(function(){
    $("#"+this.id+"_form").toggle("fadeIn");
  });

  $(".menu-schalter").click(function(){
    $(".menu").toggle("slide");
    $(".subcontent").hide();
    $("#"+this.id+'-content').fadeIn();
  });



  $(".pinboard-btn-x").click(function() {
    $("#mypin").val("");
  });

  $(".new-entry-btn").click(function(){
    var formData = "";
    alert(this.id);
    if (this.id == "add_cam") {
      formData = 'action=' + this.id + '&name=' + $("#cam_name").val() + '&url=' +  $("#cam_url").val()+ '&user=' +  $("#cam_user").val() + '&password=' +  $("#cam_password").val() + '&place=' +  $("#cam_place").val();
    }
    if (this.id == "add_switch") {
      formData = 'action=' + this.id + '&name=' + $("#switch_name").val() + '&desc=' +  $("#switch_desc").val()+ '&gpio=' +  $("#switch_gpio").val() + '&state=' +  $("#switch_state").val();
    }
    alert(formData);
    $.ajax({
      type: 'POST',
      url:'include/db_action.php',
      data:formData,
      success: function(msg){

          if (msg == "OK") {
            alert("Datensatz erfolgreich hinzugefügt");
          }
          else {
            console.log(msg)


          }
           }
    });
  });



  $(".pinboard-btn").click(function() {
    if ($("#mypin").val().length < 4){
      $("#mypin").val($('#mypin').val() + this.value);
    }
    if ($("#mypin").val().length == 4) {

      $.ajax({
        type: 'POST',
        url:'include/auth.php',
        data:'mypin='+ $("#mypin").val() +'&test='+ "1",
        success: function(msg){

            if (msg == "OK") {
              window.location.href = "index.php";
            }
            else {
              alert("Flascher PIN");
              $("#mypin").val("");
            }
             }
      });
    }
  });

});
