<?php
    $page = 3;
    $content = "Simulez votre taux d'endettement";
    require_once('header.php');
?>
<div class="container" style="margin-top:300px">


    <div class="row">


        <div class="col-md-6">
            <table>
                <tr>
                    <td>Prix de vente
                                    <span class="glyphicon glyphicon-question-sign info-comp"
                                          title="Prix auquel le bien est vendu (hors frais d’agence et de notaire)"></span>
                                    </td>
                    <td><input class="prix-vente" name="prix-vente" type="text" value="0" /> €</td>
                </tr>
                <tr>
                    <td>Construction ou travaux
                                    <span class="glyphicon glyphicon-question-sign info-comp"
                                          title="Montant total de la construction (neuf) ou des travaux"></span>
                                    </td>
                    <td><input class="construction-travaux" name="construction-travaux" type="text" value="0" /> €</td>
                </tr>
                <tr>
                    <td>Frais d'agence
                                    <span class="glyphicon glyphicon-question-sign  info-comp"
                                          title="Montant des frais perçus par l’agence sur la transaction et repris dans le compromis de vente"></span>
                                    </td>
                    <td><input class="frais-agence" name="frais-agence" type="text" readonly /> €</td>
                </tr>
                <tr>
                    <td>Frais de notaire
                                    <span class="glyphicon glyphicon-question-sign  info-comp"
                                          title="Ensemble des frais et droits consécutifs à l’établissement d’une vente immobilière. Les frais d’acquisition sont constitués pour l’essentiel de différents droits, taxes, impôts et frais d’obtention de pièces administratives, et pour une part moins importante par les honoraires du notaire."></span>                                
                                    </td>
                    <td><input class="frais-notaire" name="frais-notaire" type="text" readonly /> €</td>
                </tr>
                <tr class="garantie d-none">
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
                </tr>
                <tr class="total-row">
                    <td>Total</td>
                    <td><input class="total" name="total" type="text" readonly /> €</td>
                </tr>
                <tr>
                    <td>Apport
                                    <span class="glyphicon glyphicon-question-sign  info-comp"
                                          title="L’apport personnel peut être constitué par les fonds détenus par l’emprunteur, un prêt personnel 1% patronal, un prêt Epargne Logement, un prêt à taux zéro, un prêt fonctionnaire à caractère social ou un prêt relais. Son montant est un élément déterminant du taux qui sera appliqué au crédit immobilier. Plus l’apport personnel est important, plus les conditions financières du prêt principal sont attractives."></span>                                
                                    
                                    </td>
                    <td><input class="apport" name="apport" type="text" value="0" /> €</td>
                </tr>
                <tr class="total-financer-row">
                    <td>TOTAL à financer</td>
                    <td><input class="total-financer" name="total-financer" type="text" readonly /> €</td>
                </tr>
            </table>
        
            <hr>
        
            <table class="taux-calc1">
                <tr>
                    <td>Taux
                                    <span class="glyphicon glyphicon-question-sign  info-comp"
                                    title="Pourcentage exprimant la part des intérêts dans un emprunt. Ce sont ces intérêts qui vont rémunérer les banques. On distingue deux types de taux d’intérêt :
     
        +Le taux d’intérêt fixe : le taux ne bouge pas durant la totalité de la période de remboursement.
        +Le taux d’intérêt variable : le taux bouge en fonction d’un indice de référence, le plus souvent à la date d’anniversaire du prêt."></span>
                                    
                                    <input class="taux" name="taux" type="text" /> %</td>
                </tr>
                    </table>
                    
                    <table>
                <!--<tr style="height:64px"></tr>-->
                <tr>
                    <td>Mensualité souhaitée</td>
                    <td><input class="mensualite-souhaitee" name="mensualite-souhaitee" type="text" />
                    <span class="result-fleche-calc1 glyphicon glyphicon-triangle-right"></span>
                                    <input class="duree" name="duree" type="text" readonly />
                    </td>
                </tr>
                            
                    </table>
                    
                    <table>
                <!--<tr style="height:64px"></tr>-->
                <tr>
                    <td>Durée souhaitée</td>
                    <td><input class="duree-souhaitee" name="duree-souhaitee" type="text" />
                    <span class="result-fleche-calc1 glyphicon glyphicon-triangle-right"></span>
                                    <input class="mensualite" name="mensualite" type="hidden" readonly /> €
                    </td>
                </tr>
                    </table>
                    
                    <center><span class="title-entity">Revenus mensuels</span>
                                    <span class="glyphicon glyphicon-question-sign  info-comp"
                                          title="Ensemble des sommes perçues annuellement (salaires, pensions, allocations, revenus sociaux, locatifs, financiers, bénéfices déclarés des Professionnels)
    
    Important : L’établissement prêteur pourra ne prendre en compte qu’une partie des prestations familiales ou des pensions reçues dans les revenus"></span>                
                    
                    </center>
                    <table>
                <tr>
                    <td>Emprunteur</td>
                    <td><input class="emprunteur" name="emprunteur" type="text" value="0" /> €</td>
                </tr>
                <tr>
                    <td>Co-emprunteur</td>
                    <td><input class="co-emprunteur" name="co-emprunteur" type="text" value="0" /> €</td>
                </tr>
                <tr class="import-1">
                    <td>Total</td>
                    <td><input class="total-revenus" name="total-revenus" type="text" readonly /> €</td>
                </tr>
                <!--<tr style="height:64px"></tr>-->
                            
                    </table>
    
                    <table>
                
            </table>	
        </div><!-- end col-md-6 -->

        <div class="col-md-6 jumbotron">
            <tr class="import-2">
                <td>Taux endettement</td>
                <td><input class="taux-endettement" name="taux-endettement" type="hidden" value="0" readonly /></td>
                <td><div class="resultatTot"></div></td>
            
            </tr>
        </div>
    
    </div> <!-- end row -->
 
    
</div>

<?php
    require_once('footer.php')
?>