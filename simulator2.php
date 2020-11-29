<?php
    $page = 3;
    $content = "Simulez votre taux d'endettement";
    require_once('header.php');
?>
<div class="container" style="margin-top:150px">
    <div class="row">
        <div class="col-md-6">
            <label for="prix-vente">Prix de Vente</label>
            <input class="prix-vente form-control" name="prix-vente" type="text" value="0"/>

            <div class="d-flex flex-row-reverse mt-2 mb-2">
                <input type="checkbox" id="travaux" name="question1" value="">
                <label for="travaux" class="yes" style="font-size:11px;">Avez-vous un budget travaux/construction ?</label>
            </div>
            
            

            <div class="travauxHide" style="display:none;">
                <label for="construction-travaux">Montant Travaux</label>
                <input class="construction-travaux  form-control" name="construction-travaux" type="text" value="0" />
            </div>

            <label for="frais-agence">Frais d'agence</label>
            <input class="frais-agence form-control" name="frais-agence" type="text" readonly />

            <label for="frais-notaire">Frais de Notaire</label>
            <input class="frais-notaire form-control" name="frais-notaire" type="text" readonly />

            <div class="garantie d-none">
                    <td>Garantie
                                    <span class="glyphicon glyphicon-question-sign  info-comp"
                                          title="La garantie est une sorte de sécurité demandée à l’emprunteur par le prêteur, afin de recouvrir sa créance en cas de défaillance de l’emprunteur. Elle peut être personnelle (caution simple ou solidaire) ou réelle (hypothèque, nantissement)"></span>                                
                                    
                                    </td>
                    <td>
                        Casden
                            <input style="margin-left:21px;" type="radio" class="casden-check" value="casden" name="garantie-check"/>
                            <input class="casden" name="casden" type="text" value="0" /> €<br />
                        Saccef
                            <input style="margin-left:27px;" type="radio" class="saccef-check" value="saccef" name="garantie-check"/>
                            <input class="saccef" name="saccef" type="text" value="0" /> €<br />
                        Crédit log
                            <input style="margin-left:10px;" type="radio" class="credit-log-check" value="credit-log" name="garantie-check"/>
                            <input class="credit-log" name="credit-log" type="text" value="0" /> €<br />
                        PPD+Hypo
                            <input type="radio" class="ppd-hypo-check" value="ppd" name="garantie-check"/>
                            <input class="ppd-hypo" name="ppd-hypo" type="text" value="0" /> €
                    </td>
            </div> <!-- end garantie -->

            
            <label for="total">Total</label>
            <div class="total-row">
            <input class="total form-control" name="total" type="text" readonly />
            </div>

            <label for="apport">Apport</label>
            <input class="apport form-control" name="apport" type="text" value="0" />

            
            <label for="total-financer">Total à financer</label>
            <input class="total-financer form-control total-financer-row" name="total-financer" type="text" readonly />

            <label for="taux">Taux</label>
            <label class="sr-only" for="inlineFormInputGroup">Taux d'intéret</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                <div class="input-group-text">%</div>
                </div>
                <input type="text" class="taux form-control" id="inlineFormInputGroup" placeholder="Taux d'intéret" name="taux">
            </div>

            <label for="mensualite-souhaitee">Mensualités</label>
            <input class="mensualite-souhaitee form-control" name="mensualite-souhaitee" type="text" />
            <input class="duree" name="duree" type="hidden" readonly />

            <label for="duree-souhaitee">Durée souhaitée</label>
            <input class="duree-souhaitee form-control" name="duree-souhaitee" type="text" />
            <input class="mensualite" name="mensualite" type="hidden" readonly />

            <div class="font-weight-bold mt-3 mb-3">Revenus mensuels du foyer</div>
            <label for="emprunteur">Emprunteur</label>
            <input class="emprunteur form-control" name="emprunteur" type="text" value="0" />

            <div class="d-flex flex-row-reverse mt-2 mb-2">
                <input type="checkbox" id="co-emp" name="co-emp" value="">
                <label for="co-emp" class="yes" style="font-size:11px;">Avez-vous un co-emprunteur ?</label>
            </div>

            <div class="co-input" style="display:none;">
                <label for="co-emprunteur">Co-emprunteur</label>
                <input class="co-emprunteur form-control" name="co-emprunteur" type="text" value="0" />
            </div>

            <label for="total-revenus">Total des revenus</label>
            <input class="total-revenus form-control" name="total-revenus" type="text" readonly /> 
           



        </div>

        

        <div class="col-md-6 jumbotron">
            <p class="font-weight-bold">Taux d'endettement</p>
            <div class="resultatTot"></div>
            
        </div>

    </div><!-- END ROW--> 
</div> <!-- END CONTAINER --> 

<?php
    require_once('footer.php')
?>