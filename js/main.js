
//changement carte a liste et inversement
  function myFunction() {
    // initialise checkbox

    var checkBox = document.getElementById("boutoncarte");
    // initialise url
    var newUrl = ["carte.php"];
    var newurl = ["index.php"];
  
    // change de page en fonction de la checkbox
    if (checkBox.checked == true){
      window.location.replace(newUrl);
    } else {
      window.location.replace(newurl);
    }
};

