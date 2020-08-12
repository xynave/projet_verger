<!-- module choix d'input  -->
<div class="form-row">
  <!-- liste deroulante type produit -->
  <div class="mr-4 ml-4 input-group mb-3">
    <div class=" input-group-prepend">
      <label class="input-group-text" for="type">Type</label>
    </div>
    <select onchange="change()" class="custom-select" name="type" id="type">
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
      <label class="input-group-text" for="variete">Variété</label>
    </div>
    <select class="custom-select" name="variete" id="variete">

      <option selected>Choisis une variété</option>

    </select>
  </div>
</div>

</br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
  /* on initialise la fonction */
  function change() {
    // Suppression du contenu HTML de la liste
  document.getElementById("variete").innerHTML = "";

  if(document.getElementById('type').value == "fruit") {

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Choisis_ta_variete"; // Définition de son identifiant
    element.textContent = "Choisis ta variété"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Pomme"; // Définition de son identifiant
    element.textContent = "Pomme"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Poire"; // Définition de son identifiant
    element.textContent = "Poire"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Cerise"; // Définition de son identifiant
    element.textContent = "Cerise"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Abricot"; // Définition de son identifiant
    element.textContent = "Abricot"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 
  }
  else if(document.getElementById('type').value == "legume"){
    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Choisis_ta_variete"; // Définition de son identifiant
    element.textContent = "Choisis ta variété"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Courgette"; // Définition de son identifiant
    element.textContent = "Courgette"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Carotte"; // Définition de son identifiant
    element.textContent = "Carotte"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Radis"; // Définition de son identifiant
    element.textContent = "Radis"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

  }
  else if(document.getElementById('type').value == "autres"){
    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Choisis_ta_variete"; // Définition de son identifiant
    element.textContent = "Choisis ta variété"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Oeuf"; // Définition de son identifiant
    element.textContent = "Oeuf"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 

    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Noix"; // Définition de son identifiant
    element.textContent = "Noix"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element); 
  }else{
    var element = document.createElement("option"); // Création d'un élément li
    element.id = "Choisis_ta_variete"; // Définition de son identifiant
    element.textContent = "Choisis ta variété"; // Définition de son contenu textuel
    document.getElementById("variete").appendChild(element);
  }

  }

</script>