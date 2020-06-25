<div class="form-row">
                        <div class="mr-4 ml-4 input-group mb-3">
                            <div class=" input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Type</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option value="0">Choisi un type de produit</option>
                              <option value="1">Fruit</option>
                              <option value="2">Légume</option>
                              <option value="3">Autres</option>
                            </select>
                          </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group mr-4 ml-4 mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect02">Variété</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect02">
                              <option selected>Choisi une variété</option>
                             
                            </select>
                          </div>
                    </div>
                   

                     </br>
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
                     <script>
                     
                      $(document).ready(function () {
                      $("#inputGroupSelect01").click(function () {
                      $('#inputGroupSelect02')
                      .find('option')
                       .remove()
                       .end()
                    
                             if($("#inputGroupSelect01").children("option:selected").val()==='1')
                            {$('#inputGroupSelect02')
                            .append('<option  value="Choisi_ta_variété">Choisi ta variété</option>')
                            .append('<option value="Pomme">Pomme</option>')
                            .append('<option value="Poire">Poire</option>')
                           .append('<option value="Abricot">Abricot</option>')
                          }
                          else if($("#inputGroupSelect01").children("option:selected").val()==='2')
                            {$('#inputGroupSelect02')
                            .append('<option  value="Choisi_ta_variété">Choisi ta variété</option>')
                            .append('<option value="Courgette">Courgette</option>')
                            .append('<option value="Carotte">Carrotte</option>')
                           .append('<option value="Radis">Radis</option>')
                          }
                          else if($("#inputGroupSelect01").children("option:selected").val()==='3')
                            {$('#inputGroupSelect02')
                            .append('<option  value="Choisi_ta_variété">Choisi ta variété</option>')
                            .append('<option value="Oeuf">Oeuf</option>')
                            .append('<option value="Noix">Noix</option>')
                          }
                          else if($("#inputGroupSelect01").children("option:selected").val()==='0')
                            {$('#inputGroupSelect02')
                            .append('<option  value="Choisi_ta_variété">Choisi ta variété</option>')
                           
                          }
                      });
                       });
                   
                       
                      
                     </script>