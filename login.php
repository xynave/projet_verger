<!-- page création de profil -->
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>tuto</title>
<!--boostrap css file-->
<link rel="stylesheet" href="./css/bootstrap.min.css">

<!--fonat awesome icons-->
<link rel="stylesheet" href="./css/all.min.css">

<!--custom css file-->
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
 

   <!--==================Start header Area==========================-->
   <?php include("menu.php");?>


   <!--==================END header Area==========================-->
  
<section class="premiere ">
 <div class="picture">
    <div class="block">
<!-- carte general-->
        <div class="card  border-dark ">
            <div class="card-header text-center"  style="background-color:#1e1f1a;  color: white; ">
                Inscription
              </div>
              <!-- carte body -->
            <div class="card-body ">
                <form>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <!-- zone rentre nom et prenom -->
                      <label for="validationDefault01">Prénom</label>
                      <input type="text" class="form-control border-dark" id="validationDefault01"  required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault02">Nom</label>
                      <input type="text" class="form-control border-dark" id="validationDefault02"  required>
                    </div>
                  </div>
                <!-- selection date de naissance 
              <label for="date">Example date</label>
          <input type="date" id="date">
        -->
                  <label >Date de naissance</label>
                  <div class="form-row">
                      <!-- selection jour -->
                  <div class="col-md-3 mb-3">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Jour</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                          <option>31</option>
                        </select>
                      </div>
                    </div>
                      <!-- slection mois -->
                    <div class="col-md-3 mb-3">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Mois</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Janvier</option>
                          <option>Février</option>
                          <option>Mars</option>
                          <option>Avril</option>
                          <option>Mai</option>
                          <option>Juin</option>
                          <option>Juillet</option>
                          <option>Août</option>
                          <option>Septembre</option>
                          <option>Octobre</option>
                          <option>Novembre</option>
                          <option>Décembre</option>
                        </select>
                      </div>
                      </div>
                    <!-- selection année -->
                    <div class="col-md-3 mb-3">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Année</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1930</option>
                          <option>1931</option>
                          <option>1932</option>
                          <option>1933</option>
                          <option>1934</option>
                          <option>1935</option>
                          <option>1936</option>
                          <option>1937</option>
                          <option>1938</option>
                          <option>1939</option>
                          <option>1940</option>
                          <option>1941</option>
                          <option>1942</option>
                          <option>1943</option>
                          <option>1944</option>
                          <option>1945</option>
                          <option>1946</option>
                          <option>1947</option>
                          <option>1948</option>
                          <option>1949</option> 
                          <option>1950</option>
                          <option>1951</option>
                          <option>1952</option>
                          <option>1953</option>
                          <option>1954</option>
                          <option>1955</option>
                          <option>1956</option>
                          <option>1957</option>
                          <option>1958</option>
                          <option>1959</option>
                          <option>1960</option>
                          <option>1961</option>
                          <option>1962</option>
                          <option>1963</option>
                          <option>1964</option>
                          <option>1965</option>
                          <option>1966</option>
                          <option>1967</option>
                          <option>1968</option>
                          <option>1969</option>
                          <option>1970</option>
                          <option>1971</option>
                          <option>1972</option>
                          <option>1973</option>
                          <option>1974</option>
                          <option>1975</option>
                          <option>1976</option>
                          <option>1977</option>
                          <option>1978</option>
                          <option>1979</option>
                          <option>1980</option>
                          <option>1971</option>
                          <option>1972</option>
                          <option>1973</option>
                          <option>1974</option>
                          <option>1975</option>
                          <option>1976</option>
                          <option>1977</option>
                          <option>1978</option>
                          <option>1979</option>
                          <option>1980</option>
                          <option>1981</option>
                          <option>1982</option>
                          <option>1983</option>
                          <option>1984</option>
                          <option>1985</option>
                          <option>1986</option>
                          <option>1987</option>
                          <option>1988</option>
                          <option>1989</option>
                          <option>1990</option>
                          <option>1991</option>
                          <option>1992</option>
                          <option>1993</option>
                          <option>1994</option>
                          <option>1995</option>
                          <option>1996</option>
                          <option>1997</option>
                          <option>1998</option>
                          <option>1999</option>
                          <option>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2003</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                        </select>
                      </div>
                    </div>
                    </div>
                      <!-- selection mail -->
                    <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Mail</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text border-dark" id="inputGroupPrepend2">@</span>
                              </div>
                              <input type="text" class="form-control border-dark" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                            </div>
                          </div>
                      </div>
                        <!--selection mot de passe  -->
                      <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Mot de passe</label>
                            <input type="text" class="form-control border-dark" id="validationDefault02"  required>
                          </div>
                      </div>
                        <!-- confirmation de mot de passe -->
                      <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Confirmation du mot de passe</label>
                            <input type="text" class="form-control border-dark" id="validationDefault02"  required>
                          </div>
                      </div>
                        <!-- selection ville -->
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Ville</label>
                        <input type="text" class="form-control border-dark" id="validationDefault03" required>
                      </div>
                        <!--  selection code postal-->
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault05">Code postal</label>
                        <input type="text" class="form-control border-dark" id="validationDefault05" required>
                      </div>
                    </div>
                      <!--  selection adresse-->
                    <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">Adresse</label>
                            <input type="text" class="form-control border-dark" id="validationDefault03" required>
                          </div>
                      </div>
                        <!-- validation des conditions d'utilisation -->
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                          Agree to terms and conditions
                        </label>
                      </div>
                    </div>
                      <!-- validation de l'inscription -->
                    <button class="btn btn-dark float-right" type="submit">Inscription</button>
                  </form>
            </div>
          </div>
        
          <br>
    </div>

 </div>

  
</section>
<!-- end banniere -->




  









<?php include("footer.php");?>

<!--jquery-->
<script src="./js/jquery3.4.1.min.js"></script>
<!--boostrap js file-->
<script src="./js/bootstrap.min.js"></script>
</body>
</html>