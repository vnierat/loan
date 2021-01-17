<?php
  $page = 2;
  require_once('header.php');
?>
    <!-- HERO SECTION-->

    <section class="hero hero-home with-pattern d-flex align-items-center py-5">
      <div class="container py-5 mt-5">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            <h1 class="mb-3">Le crédit, <span class="text-primary">immobilier</span></h1>
            <p class="text-muted">Crédit immobilier : Afin de mieux cerner votre projet et vos attentes, voici un récapitulatif des différents types de crédit immobilier disponible.</p>
            
            

          </div>
          <div class="col-md-5 ml-auto">
            <div><img class="img-fluid" src="img/loan.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </section>


        <!--
        <div class="row">
          <div class="col-md-6">
            <h4>We’re a global stakeholder relations and partnership building consultancy.</h4>
            <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-6">
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam.</p>
            <p class="text-muted text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div> -->


        <div class="row mt-5">
            <div class="col-lg-9 mx-auto">
              <!-- Accordion -->
              <div id="accordionExample" class="accordion shadow">

                <!-- Accordion item 1 -->
                <div class="card">
                    <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                        <h6 class="mb-0 font-weight-bold">
                            <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2">Prêt immobilier à Taux fixe</a>
                        </h6>
                    </div>
                    <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                            <div class="card-body p-5">
                                <p class="font-weight-light m-0"><span class="font-weight-bold">Un prêt immobilier à taux fixe vous garantit que le taux de votre prêt ne sera pas modifié</span> au fil de vos remboursements. </p>

                                <p class="font-weight-light mt-2">Vous savez donc à l’avance quelles seront exactement vos mensualités pendant toute la période où court votre prêt.</p>

                                <p class="font-weight-light mt-2"><span class="font-weight-bold">Le taux fixe est donc une garantie de sécurité</span>, notamment dans des périodes où les taux d’intérêt fluctuent à la hausse.</p>

                                <p class="font-weight-light mt-2">En revanche, si vous êtes dans une période de baisse des taux d’intérêt, vous ne pourrez pas en profiter.</p>
                        </div>
                    </div>
                </div>

                <!-- Accordion item 2 -->
                <div class="card">
                    <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                        <h6 class="mb-0 font-weight-bold">
                            <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Prêt immobilier à Taux variable</a>
                        </h6>
                    </div>
                  <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0">Le taux d’intérêt est révisé périodiquement, en général chaque année à la date anniversaire du prêt, en fonction de l’évolution d’un indice de référence. Cet indice est souvent l’Euribor, qui correspond au prix auquel les banques se prêtent de l’argent à court terme sur le marché monétaire.</p>
                            <p class="font-weight-light mt-4"><i class="fas fa-plus text-success mr-2"></i> Le taux de départ est plus faible que pour un prêt à taux fixe</p>
                            <p class="font-weight-light mt-2"><i class="fas fa-plus text-success mr-2"></i> <span class="font-weight-bold">Vous profitez des éventuelles baisses de taux qui se répercutent sur vos mensualités</span></p>
                            <p class="font-weight-light mt-2"><i class="fas fa-plus text-success mr-2"></i> <span class="font-weight-bold">Il est généralement possible de transformer un taux variable en taux fixe à des conditions proches de celles du marché</span> en cas de hausse des taux. Cette clause doit être incluse dans votre contrat de prêt.</p>
                            <p class="font-weight-light mt-2"><i class="fas fa-minus text-danger mr-2"></i> <span class="font-weight-bold"> Le principal inconvénient du prêt à taux révisable est son risque.</span> Vous êtes en effet exposé à une hausse des taux et à un renchérissement de votre crédit, ce qui peut se révéler dramatique si votre trésorerie est insuffisante pour assumer l’augmentation de vos mensualités.</p>
                        </div>
                    </div>
                </div>

                <!-- Accordion item 3 -->
                <div class="card">
                    <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                        <h6 class="mb-0 font-weight-bold">
                            <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Prêt immobilier à Taux variable cape</a>
                        </h6>
                    </div>
                    <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0">Le taux du prêt est révisé périodiquement mais il ne peut dépasser un « cap » ou « plafond » défini lors de la signature du contrat.</p>
                            <p class="font-weight-light mt-2">Il s’agit généralement du taux de départ auquel on ajoute 1 a 2% selon les contrats.</p>
                            <p class="font-weight-light mt-2">Les hausses et baisses de l’indice seront répercutées sur vos mensualités, mais celles-ci ne pourront dépasser un certain montant connu a l’avance.</p>
                        </div>
                    </div>
                </div>


                <!-- Accordion item 4 -->
                <div class="card">
                  <div id="heading4" class="card-header bg-white shadow-sm border-0">
                        <h6 class="mb-0 font-weight-bold">
                            <a href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Prêt immobilier à Taux 0 +</a>
                        </h6>
                  </div>
                    <div id="collapse4" aria-labelledby="heading4" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0">Le prêt immobilier à taux 0 + : Le PTZ+ (Prêt à Taux Zéro Plus) est un crédit immobilier réglementé destiné à financer l’acquisition ou la construction d’un logement neuf, ainsi qu’un logement ancien dès lors qu’il s’agit d’un appartement du parc social (HLM, SEM) vendu à des occupants.<br>Destiné essentiellement aux emprunteurs dits « primo-accédants », il a vocation à faciliter le premier achat d’une résidence principale.</p>
                            <p class="font-weight-light mt-4"><i class="fas fa-plus text-success mr-2"></i> Un prêt sans intérêts</p>
                            <p class="font-weight-light mt-2"><i class="fas fa-plus text-success mr-2"></i> Pas de frais de dossier</p>
                            <p class="font-weight-light mt-2"><i class="fas fa-plus text-success mr-2"></i> Des remboursements adaptés à votre situation</p>
                        </div>
                    </div>
                </div>

                <!-- Accordion item 4 -->
                <div class="card">
                    <div id="heading5" class="card-header bg-white shadow-sm border-0">
                            <h6 class="mb-0 font-weight-bold">
                                <a href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Prêt relais acquisition</a>
                            </h6>
                    </div>
                    <div id="collapse5" aria-labelledby="heading5" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0"><span class="font-weight-bold">Le Prêt Relais Acquisition est un prêt immobilier global qui permet de financer une nouvelle acquisition avant la revente d’un bien immobilier.</span></p>
                            <p class="font-weight-light mt-4"><i class="fas fa-plus text-success mr-2"></i> Une solution budgétaire idéale : une seule mensualité et une seule banque pour l’ensemble de vos crédits</p>
                            <p class="font-weight-light mt-2"><i class="fas fa-plus text-success mr-2"></i> Une mensualité adaptée pendant toute la durée du crédit</p>
                            <p class="font-weight-light mt-2"><i class="fas fa-plus text-success mr-2"></i> Un montage souple avec un remboursement personnalisable</p>
                            <p class="font-weight-light mt-2"><i class="fas fa-plus text-success mr-2"></i> Un projet sécurisé grâce à une marge de 20% par rapport à la valeur du bien à vendre</p>
                            <p class="font-weight-light mt-2"><i class="fas fa-plus text-success mr-2"></i> Un prêt à taux fixe ou variable</p>
                                                    
                        </div>
                     </div>
                </div>

                <!-- Accordion item 5 -->
                <div class="card">
                    <div id="heading6" class="card-header bg-white shadow-sm border-0">
                            <h6 class="mb-0 font-weight-bold">
                                <a href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Prêt in fine</a>
                            </h6>
                    </div>
                    <div id="collapse6" aria-labelledby="heading6" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0"><span class="font-weight-bold">Le prêt immobilier in fine est, comme son nom l’indique, un prêt immobilier non amortissable dont le remboursement intervient en une seule fois à l’échéance du prêt.</span></p>
                            <p class="font-weight-light mt-3">Jumelé à une adhésion à un contrat d’assurance vie, il permet à un particulier de financer (directement ou par l’intermédiaire d’une SCI) tout achat immobilier, neuf ou ancien, à usage locatif.</p>
                            <p class="font-weight-light mt-4"><i class="fas fa-plus text-success mr-2"></i> Remboursement du capital à l’échéance du prêt en une seule fois ✓Idéal dans l’optique d’un investissement locatif</p>
                            <p class="font-weight-light mt-2"><i class="fas fa-plus text-success mr-2"></i> Remboursement du capital à l’échéance du prêt en une seule fois ✓Idéal dans l’optique d’un investissement locatif</p>
                            <p class="font-weight-light mt-5">Le contrat d’assurance vie doit être nanti : il a pour vocation de rembourser le capital du crédit emprunté à l’échéance.</p>
                            
                                                    
                        </div>
                    </div>
                </div>


                <!-- Accordion item 6 -->
                <div class="card">
                    <div id="heading7" class="card-header bg-white shadow-sm border-0">
                            <h6 class="mb-0 font-weight-bold">
                                <a href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Prêt conventionné / Prêt accession sociale</a>
                            </h6>
                    </div>
                    <div id="collapse7" aria-labelledby="heading7" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0"><span class="font-weight-bold">Le Prêt Conventionné (PC) et le Prêt à l’Accession Sociale (PAS) sont des prêts immobiliers réglementés, destinés à financer l’achat d’un logement neuf ou ancien, à titre de résidence principale, avec ou sans travaux. </span> </p>
                            <p class="font-weight-light mt-3">Ces deux prêts permettent aussi de financer des travaux seuls dans une résidence principale.</p>
                            <p class="font-weight-light mt-3">Ils ouvrent également droit à l’Aide Personnalisée au Logement (APL) dans les conditions prévues par la législation</p>
                            <p class="font-weight-light mt-3">Pour en bénéficier, le logement doit remplir des normes de surface et d’habitabilité.</p>
                            <p class="font-weight-light mt-3">En outre, <span class="font-weight-bold">pour le PAS, les ressources de l’emprunteur ne doivent pas excéder un plafond réglementaire.</span> </p>
                            
                                                    
                        </div>
                    </div>
                </div>


                <!-- Accordion item 8 -->
                <div class="card">
                    <div id="heading8" class="card-header bg-white shadow-sm border-0">
                            <h6 class="mb-0 font-weight-bold">
                                <a href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Prêt employeur</a>
                            </h6>
                    </div>
                    <div id="collapse8" aria-labelledby="heading8" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0"><span class="font-weight-bold">Le prêt employeur : Grâce au prêt employeur ou 1% logement, les salariés peuvent obtenir, auprès de leur employeur, des prêts pour acheter leur résidence principale ou y réaliser des travaux. Le taux de ce prêt varie de 1,5% à 3%.</span></p>

                            <p class="font-weight-light mt-3"><i class="fas fa-plus text-success mr-2"></i>Dans la majorité des cas, il est accordé quel que soit le montant des revenus du demandeur.</p>
                            <p class="font-weight-light mt-3"><i class="fas fa-minus text-danger mr-2"></i>Ce dispositif est mis en place uniquement dans les entreprises de plus de 10 salariés.</p>

                            <p class="font-weight-bold text-primary">Dans quels cas ?</p>

                            <p class="font-weight-light mt-3">Le prêt 1% logement ne peut être obtenu que par :</p>
                            <ul>
                                <li>Les primo-accédants : c’est-à-dire les personnes qui achètent pour la première fois leur résidence principale.</li>
                                <li>Les personnes en mobilité professionnelle qui se trouvent dans l’obligation de changer de résidence principale.</li>
                                <li>La construction d’une maison : le prêt 1% logement peut servir à acheter le terrain à bâtir et à l’aménager ou à financer la construction de la maison elle-même</li>
                                <li>L’achat d’un logement neuf</li>
                                <li>L’acquisition d’un logement ancien avec travaux : le prêt ne peut être obtenu que si le logement a plus de 20 ans d’âge. En outre, les travaux doivent représenter au moins 20% du coût total de l’opération</li>
                                <li>L’achat dans de l’ancien mais sans travaux</li>
                                <li>L’achat d’un logement HLM, mais aussi des travaux d’agrandissement ou d’amélioration (économies d’énergie, mises aux normes, aménagement pour personnes handicapées …) dans le logement répondant à une condition d’ancienneté dont le salarié est propriétaire.</li>
                            </ul>


                            <p class="font-weight-bold text-primary">Où s'adresser</p>
                            <p class="font-weight-light mt-3">Si vous appartenez à une entreprise du secteur privé non agricole de plus de 10 salariés, adressez-vous à la Direction du personnel. Pour les autres, renseignez-vous auprès du CIL ou de la CCI gestionnaire du 1% logement le plus proche de votre domicile.</p>
                            
                                                    
                        </div>
                    </div>
                </div>



              </div>
            </div>
          </div>
        </div>


<section>








    </section>
    
    
    
    <section class="py-5">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-md-7 order-2 order-md-1">
            <p class="text-muted text-uppercase mb-2">Our Best Services</p>
            <h2>The Best Choice For Your Successful Business!</h2>
            <p class="text-muted py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit eum illum tempora? Ducimus eum culpa voluptates dolorem dolorum et sit nisi, mollitia animi porro fuga sequi.</p>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="media">
                  <div class="icon-block">
                    <svg class="svg-icon text-primary svg-icon-sm">
                      <use xlink:href="#paper-stack-1"> </use>
                    </svg>
                  </div>
                  <div class="media-body ml-3">
                    <h5>Strategic vision</h5>
                    <p class="text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="media">
                  <div class="icon-block">
                    <svg class="svg-icon text-primary svg-icon-sm">
                      <use xlink:href="#sales-up-1"> </use>
                    </svg>
                  </div>
                  <div class="media-body ml-3">
                    <h5>Business growth</h5>
                    <p class="text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4 mb-md-0">
                <div class="media">
                  <div class="icon-block">
                    <svg class="svg-icon text-primary svg-icon-sm">
                      <use xlink:href="#quality-1"> </use>
                    </svg>
                  </div>
                  <div class="media-body ml-3">
                    <h5>Leadership work</h5>
                    <p class="text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="media">
                  <div class="icon-block">
                    <svg class="svg-icon text-primary svg-icon-sm">
                      <use xlink:href="#arrow-target-1"> </use>
                    </svg>
                  </div>
                  <div class="media-body ml-3">
                    <h5>Success fulfill</h5>
                    <p class="text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 order-1 order-md-2 mb-5 mb-md-0">
            <div class="img-gradient img-gradient-right video-block"><img class="img-fluid shadow rounded" src="img/demo-img-5.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5 bg-primary text-white has-quote">
      <div class="container py-5 index-forward">
        <div class="row text-center">
          <div class="col-lg-7 mx-auto">
            <h2 class="mb-4">"You only have to do a few things right in your life so long as you don’t do too many things wrong."</h2>
            <p class="h6 text-uppercase mb-0">Henry Waren - Founder</p>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5">           
      <div class="container py-5 text-center">
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <p class="h6 text-uppercase text-primary">Newsletter</p>
            <h2 class="mb-3">Stay up to date with useful tips via our newsletter</h2>
            <p class="text-muted mb-5">Lorem ipsum dolor sit amet, consetetur sadipscing elite.</p>
            <form class="p-2 bg-white rounded shadow-sm">
              <div class="input-group p-1">
                <input class="form-control border-0 shadow-0" type="email" placeholder="Enter your email address">
                <div class="input-group-append">
                  <button class="btn btn-primary rounded" type="submit">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 mt-5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="img/logo-1.png" alt="" height="25"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="img/logo-2.png" alt="" height="25"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="img/logo-3.png" alt="" height="25"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="img/logo-4.png" alt="" height="25"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="img/logo-5.png" alt="" height="25"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="img/logo-6.png" alt="" height="25"></div>
        </div>
      </div>
    </section>

    <?php
      require_once('footer.php');
    ?>