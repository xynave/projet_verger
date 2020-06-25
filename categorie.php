<div class="form-row">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Type</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Choisi ton type de produit</option>
                              <option value="1">Fruit</option>
                              <option value="2">Légume</option>
                              <option value="3">Autres</option>
                            </select>
                            <input type="button" value="CHANGE" onclick="selectFunction()" />
                          </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect02">Variété</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect02">
                              <option selected>Choisi ta variété</option>
                              
                            </select>
                          </div>
                    </div>
                   

                     </br>
                    
                     <script>
                      var p=0;
                      function selectFunction() {
                        var c = document.createElement("option");
                        
                      
                            document.getElementById("accueil").textContent= document.getElementById("inputGroupSelect01").options.item(0).text;
                            //document.getElementById("profil").textContent=document.getElementById("inputGroupSelect01").selectedIndex;
                         
                       if( document.getElementById("inputGroupSelect01").value==='1'){
                           if(p===0){
                            document.getElementById("inputGroupSelect01").options.remove(0);
                            p++;
                           }

                        
                           if(document.getElementById("inputGroupSelect02").options[1].text)
                          {
                            document.getElementById("inputGroupSelect02").options[1].text="Kiwi";
                           
                          }else{
                            c.text = "Kiwi";
                            document.getElementById("inputGroupSelect02").options.add(c,1);
                          }
                            
                            
                       }
                          
                        
                       }
                       
                      
                     </script>