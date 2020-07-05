<!-- module de l'image de la bannière sur index et map -->
<!-- dans le style on a l'image -->
<style>
  .bouton-style {
    background-color: #f1cb76;
  }

  .bouton-style:hover {
    background-color: #f1be4f;
  }
</style>
<section class="premiere-partie container-fluid">
  <div class="picturepresentation ">
    <div class="container ">
      <div class="row ">

        <!-- on insert le module catégorie -->
        <?php include("categorie.php"); ?>
      </div>
      <!--  on peut rechercher par nom -->
      <div class="input-group espace_bouton ">
        <div class="input-group-prepend espace_bouton">
          <div class="input-group-text  " id="btnGroupAddon">Nom</div>
        </div>
        <input type="text" class="form-control  mr-sm-3" placeholder="Recherche" aria-label="Recherche" aria-describedby="btnGroupAddon">
        <button class="btn  bouton-style " type="submit"><i class="fas fa-search"></i> Chercher </button>
      </div>
    </div>





  </div>
  </div>





</section>