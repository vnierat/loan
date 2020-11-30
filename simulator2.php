<?php
    $page = 3;
    $content = "Simulez votre taux d'endettement";
    require_once('header.php');
?>
<div class="container" style="margin-top:150px">
    <div class="row">

    <h2 class="mt-5 mb-5">Financement - Taux d'endettement</h2>
        <div class="col-md-6">
            

            <div class="form-group row">
                <label for="prix-vente" class="col-sm-4 col-form-label">Prix de Vente</label>
                <div class="col-sm-8">
                    <input type="text" class="prix-vente form-control" placeholder="Prix de Vente en €" name="prix-vente">
                </div>
            </div>


        
            <div class="d-flex mt-2 mb-2">
                    <input type="checkbox" id="travaux" name="question1" value="">
                    <label for="travaux" class="yes" style="font-size:10px;">Avez-vous un budget travaux ou construction ?</label>
                    
            </div>
            
            
            <div class="form-group row travauxHide mt-4" style="display:none;">
                
                <label for="construction-travaux" class="col-sm-4 col-form-label">Montant Travaux</label>
                <div class="col-sm-8">
                    <input id="travaux" class="construction-travaux  form-control" name="construction-travaux" type="text" placeholder="Montant des travaux en €"/ value="0">
                </div>
            </div>


            <div class="form-group row mt-4">
                <label for="frais-agence" class="col-sm-4 col-form-label">Frais d'agence</label>
                <div class="col-sm-8">
                    <input class="frais-agence form-control" name="frais-agence" type="text" readonly />
                </div>
            </div>

            <div class="form-group row">
                <label for="frais-notaire" class="col-sm-4 col-form-label">Frais de Notaire</label>
                <div class="col-sm-8">
                    <input class="frais-notaire form-control" name="frais-notaire" type="text" readonly />
                </div>
            </div>

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

            <div class="d-none">
                <label for="total">Total</label>
                <div class="total-row">
                <input class="total form-control" name="total" type="hidden" readonly />
                </div>
            </div>

            <div class="d-flex mt-2 mb-2">
                    <input type="checkbox" id="apportCheck" name="apportCheck" value="">
                    <label for="apportCheck" class="yes" style="font-size:10px;">Avez-vous un apport ?</label>
                    
            </div>

            <div class="form-group row apportRow mt-4" style="display:none;">
                <label for="apport" class="col-sm-4 col-form-label">Apport</label>
                <div class="col-sm-8">
                    <input class="apport form-control" name="apport" type="text" placeholder="Montant de l'apport en €" value="0" />
                </div>
            </div>

            <div class="form-group row mt-4">
                <label for="total-financer" class="col-sm-4 col-form-label font-weight-bold text-primary">Total à financer</label>
                <div class="col-sm-8">
                    <input class="total-financer form-control total-financer-row" name="total-financer" type="text" readonly />
                </div>
            </div>

            

            <hr>


            <div class="form-group row">
                <label for="mensualite-souhaitee" class="col-sm-4 col-form-label">Mensualités</label>
                <div class="col-sm-8">
                    <input class="mensualite-souhaitee form-control" name="mensualite-souhaitee" type="text" />
                    <input class="duree" name="duree" type="hidden" readonly />
                </div>
            </div>

            <div class="form-group row">
                <label for="duree-souhaitee" class="col-sm-4 col-form-label">Durée souhaitée</label>
                <div class="col-sm-8">
                    <input class="duree-souhaitee form-control" name="duree-souhaitee" type="text" />
                    <input class="mensualite" name="mensualite" type="hidden" readonly />
                </div>
            </div>

            <div class="form-group row">
                <label for="taux" class="col-sm-4 col-form-label">Taux d'intéret</label>
                <div class="input-group mb-2 col-sm-8">
                    <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                        </div>
                        <input type="text" class="taux form-control" id="inlineFormInputGroup" placeholder="Taux d'intéret" name="taux">
                    </div>
            </div>

            <div class="font-weight-bold mt-3 mb-3">Revenus mensuels du foyer</div>
            
            <div class="form-group row">
                <label for="emprunteur" class="col-sm-4 col-form-label">Emprunteur</label>
                <div class="col-sm-8">
                    <input class="emprunteur form-control" name="emprunteur" type="text" value="0" />
                </div>
            </div>

            <div class="mt-2 mb-2">
                <input type="checkbox" id="co-emp" name="co-emp" value="">
                <label for="co-emp" class="yes" style="font-size:11px;">Avez-vous un co-emprunteur ?</label>
            </div>

            
            <div class="form-group row co-input mt-4" style="display:none;">
                <label for="co-emprunteur" class="col-sm-4 col-form-label">Co-emprunteur</label>
                <div class="col-sm-8">
                    <input class="co-emprunteur form-control" name="co-emprunteur" type="text" value="0" />
                </div>
            </div>

            <div class="form-group row mt-4">
                <label for="total-revenus" class="col-sm-4 col-form-label font-weight-bold text-primary">Total des revenus</label>
                <div class="col-sm-8">
                    <input class="total-revenus form-control" name="total-revenus" type="text" readonly /> 
                </div>
            </div>
           



        </div>

        

        <div class="col-md-6 bgCalc">
            <p class="font-weight-bold mt-3">Calcul de l'étalement de la dette</p>
            <div class="etalement"></div>

            <hr>

            <p class="font-weight-bold mt-3">Calcul de votre taux d'endettement</p>
            <div class="resultatTot"></div>
            
        </div>

    </div><!-- END ROW--> 
</div> <!-- END CONTAINER --> 

<?php
    require_once('footer.php')
?>