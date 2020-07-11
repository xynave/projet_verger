<!-- module choix d'input  -->
<div class="form-row">
  <!-- liste deroulante type produit -->
  <div class="mr-4 ml-4 input-group mb-3">
    <div class=" input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Type</label>
    </div>
    <select class="custom-select" name="type" id="inputGroupSelect01">
      <option value="choisis">Choisis un type de produit</option>
      <option value="fruit">Fruit</option>
      <option value="legume">Légume</option>
      <option value="autres">Autres</option>
    </select>
  </div>
</div>
<!--  liste deroulante variété-->
<div class="form-row">
  <div class="input-group mr-4 ml-4 mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect02">Variété</label>
    </div>
    <select class="custom-select" name="variete" id="inputGroupSelect02">
    
        <option selected>Choisis une variété</option>
      
    </select>
  </div>
</div>

</br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
  /* on initialise la fonction */
  $(document).ready(function() {
    /*on choisi id*/
    $("#inputGroupSelect01").click(function() {
      $('#inputGroupSelect02')
        /*on choisi et supprime toute les options*/
        .find('option')
        .remove()
        .end()
      /*on rajoute des nouvelles fonctions en fonctions de celles que l'on a choisi */
      if ($("#inputGroupSelect01").children("option:selected").val() === 'fruit') {
        $('#inputGroupSelect02')
          .append('<option  value="Choisis_ta_variete">Choisis ta variété</option>')
          .append('<option value="Pomme">Pomme</option>')
          .append('<option value="Poire">Poire</option>')
          .append('<option value="Abricot">Abricot</option>')
          var o = new Option("option text", "value");
      /// jquerify the DOM object 'o' so we can use the html method
        $(o).html("option text");
        $("#inputGroupSelect02").append(o);
      } else if ($("#inputGroupSelect01").children("option:selected").val() === 'legume') {
        $('#inputGroupSelect02')
          .append('<option  value="Choisis_ta_variete">Choisis ta variété</option>')
          .append('<option value="Courgette">Courgette</option>')
          .append('<option value="Carotte">Carotte</option>')
          .append('<option value="Radis">Radis</option>')
      } else if ($("#inputGroupSelect01").children("option:selected").val() === 'autres') {
        $('#inputGroupSelect02')
          .append('<option  value="Choisis_ta_variete">Choisis ta variété</option>')
          .append('<option value="Oeuf">Oeuf</option>')
          .append('<option value="Noix">Noix</option>')
      } else if ($("#inputGroupSelect01").children("option:selected").val() === 'choisis') {
        $('#inputGroupSelect02')
          .append('<option  value="Choisis_une_variete">Choisis une variété</option>')
      }
    });
  });
  
</script>