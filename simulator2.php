<?php
    $page = 3;
    $content = "Simulez votre taux d'endettement";
    require_once('header.php');
?>

<section class="hero hero-home with-pattern d-flex align-items-center py-5">
      <div class="container py-5 mt-5">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
          <h2 class="mt-5"><span class="text-primary">Financement</span> - Taux d'endettement</h2>
            <p class="text-muted mb-5">Calculez et simulez votre taux d'endettement ainsi que l'étalement de votre financement selon la durée souhaitée.</p>
            
            

          </div>
          <div class="col-md-5 ml-auto">
            <div class="img-gradient img-gradient-right"><img class="img-fluid" src="img/calculator.jpg" alt="calculator" ></div>
          </div>
        </div>
      </div>
    </section>

<div class="container">
    <div class="row">

        
            <div class="col-lg-6 mt-5">
                

                <div class="form-group row">
                    <label for="prix-vente" class="col-sm-6 col-form-label">Prix de Vente</label>
                    <div class="input-group col-sm-6">
                        <div class="input-group-prepend">
                                <div class="input-group-text">€</div>
                        </div>
                            <input type="text" class="prix-vente form-control" placeholder="Prix de Vente en €" name="prix-vente" id="inlineFormInputGroup">
                        
                    </div>
                </div>


            
                <div class="d-flex mt-2 mb-2">
                        <input type="checkbox" id="travaux" name="question1" value="">
                        <label for="travaux" class="yes" style="font-size:10px;">Avez-vous un budget travaux ou construction ?</label>
                        
                </div>
                
                
                <div class="form-group row travauxHide mt-4" style="display:none;">
                    
                    <label for="construction-travaux" class="col-sm-6 col-form-label">Montant Travaux</label>
                    <div class="col-sm-6">
                        <input id="travaux" class="construction-travaux  form-control" name="construction-travaux" type="text" placeholder="Montant des travaux en €"/ value="0">
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="frais-agence" class="col-sm-6 col-form-label">Frais d'agence</label>
                    <div class="col-sm-6">
                        <input class="frais-agence form-control" name="frais-agence" type="hidden"  />
                        <div class="fraisAgence pt-2 text-primary calc-font-sm"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="frais-notaire" class="col-sm-6 col-form-label">Frais de Notaire</label>
                    <div class="col-sm-6">
                        <input class="frais-notaire form-control" name="frais-notaire" type="hidden"/>
                        <div class="fraisNotaire pt-2 text-primary calc-font-sm"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="taux" class="col-sm-6 col-form-label">Taux d'intéret</label>
                    <div class="input-group mb-2 col-sm-6">
                        <div class="input-group-prepend">
                            <div class="input-group-text">%</div>
                        </div>
                            <input type="number" class="taux form-control" id="inlineFormInputGroup2" placeholder="Taux d'intéret" name="taux" value="0"/>
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
                    <input class="total form-control" name="total" type="text" readonly />
                    </div>
                </div>

                <div class="d-flex mt-2 mb-2">
                        <input type="checkbox" id="apportCheck" name="apportCheck" value="">
                        <label for="apportCheck" class="yes" style="font-size:10px;">Avez-vous un apport ?</label>
                        
                </div>

                <div class="form-group row apportRow mt-4" style="display:none;">
                    <label for="apport" class="col-sm-6 col-form-label">Apport</label>
                    
                    <div class="input-group col-sm-6">
                        <div class="input-group-prepend">
                                <div class="input-group-text">€</div>
                        </div>
                            <input type="text" class="apport form-control"  placeholder="Montant de l'apport en €" value="0" name="apport" id="inlineFormInputGroup7">
                        
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label for="total-financer" class="col-sm-6 col-form-label font-weight-bold text-primary">Total à financer</label>
                    <div class="col-sm-6">
                        <input class="total-financer form-control total-financer-row" name="total-financer" type="hidden" readonly />
                        <div class="totFin pt-2 py-2 font-weight-bold calc-font"></div>
                    </div>
                </div>

                

                <hr>


                <div class="form-group row">
                    <label for="mensualite-souhaitee" class="col-sm-6 col-form-label">Mensualités</label>
                    <div class="input-group col-sm-6">
                        <div class="input-group-prepend">
                                <div class="input-group-text">€</div>
                        </div>
                            <input type="text" class="mensualite-souhaitee form-control" placeholder="Mensualités en €" name="mensualite-souhaitee" id="inlineFormInputGroup1">
                            <input class="duree" name="duree" type="hidden" readonly />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="duree-souhaitee" class="col-sm-6 col-form-label">Durée souhaitée</label>
                    
                    <div class="col-sm-6">
                        <input class="duree-souhaitee form-control" name="duree-souhaitee" type="text" placeholder="Durée en années"/>
                        <input class="mensualite" name="mensualite" type="hidden" readonly />
                    </div>
                </div>

                

                <div class="font-weight-bold mt-3 mb-3">Revenus mensuels du foyer</div>
                
                <div class="form-group row">
                    <label for="emprunteur" class="col-sm-6 col-form-label">Emprunteur</label>
                    <div class="input-group col-sm-6">
                        <div class="input-group-prepend">
                                <div class="input-group-text">€</div>
                        </div>
                            <input type="text" class="emprunteur form-control" name="emprunteur" id="inlineFormInputGroup5" placeholder="Salaire net emprunteur" value="">
                    </div>
                </div>

                <div class="mt-2 mb-2">
                    <input type="checkbox" id="co-emp" name="co-emp" value="">
                    <label for="co-emp" class="yes" style="font-size:11px;">Avez-vous un co-emprunteur ?</label>
                </div>

                
                <div class="form-group row co-input mt-4" style="display:none;">
                    <label for="co-emprunteur" class="col-sm-6 col-form-label">Co-emprunteur</label>
                    <div class="input-group col-sm-6">
                        <div class="input-group-prepend">
                                <div class="input-group-text">€</div>
                        </div>
                            <input type="text" class="co-emprunteur form-control" name="co-emprunteur" id="inlineFormInputGroup6" value="0" placeholder="Salaire net co-emprunteur">
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label for="total-revenus" class="col-sm-6 col-form-label font-weight-bold text-primary">Total des revenus</label>
                    <div class="col-sm-6">
                        <input class="total-revenus form-control" name="total-revenus" type="hidden" readonly /> 
                        <div class="totRevenus py-2 font-weight-bold calc-font"></div>
                    </div>
                </div>
            



            </div>

            
            <!-- résultats -->
            <div class="col-lg-6 bgCalc mt-5">
                <p class="font-weight-bold mt-5">Calcul de l'étalement de la dette</p>
                <div class="etalement mb-5"></div>

                <hr>

                <p class="font-weight-bold mt-5">Calcul de votre taux d'endettement</p>
                <div class="resultatTot"></div>
                <div class="infos-danger mt-2">
                    <div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> Afin d'être éligible à un financement de notre part, le taux d'endettement doit être inférieur à <span class="font-weight-bold">33%</span>. <br>
                    Veuillez réajuster vos mensualités ou bien prendre contact avec nous <br> 
                    <button class="btn btn-primary" type="button" data-target="#quoteForm" data-toggle="modal">Contactez-nous</button> 
                
                    </div>
                </div>
                
            </div>
        

    </div><!-- END ROW--> 
</div> <!-- END CONTAINER -->




<?php
    require_once('footer.php')
?>