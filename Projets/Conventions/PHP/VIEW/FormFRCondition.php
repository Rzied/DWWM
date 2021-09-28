


<section class="colonne">

<!-- ******************Jours et heures de présence proposés****************** -->
<form action="index.php?page=ActionFRCondition&mode=ajouter" method="POST">
    <div class="horaire colonne">
        <!-- libelle horaire et valeur horaire -->
        <h3 class="centre">Jours et heures de présence proposés</h3>
        <div class="tab colonne">
            <div class="ligne ">
                <div class="double"></div>
                <div class="lundi border">Lundi</div>
                <div class="mardi border">Mardi</div>
                <div class="mercredi border">Mercredi</div>
                <div class="jeudi border">Jeudi</div>
                <div class="vendredi border">Vendredi</div>
                <div class="samedi border">Samedi</div>
            </div>
            <div class="ligne">
                <div class="border double">Début de journée</div>
    <?php
        for ($i=1; $i <7; $i++) { 
            jours("horaireDebutJour",$i);
        }
    ?>

            </div>
            <div class="ligne">
                <div class="border double">Début déjeuner</div>
                
    <?php
        for ($i=1; $i <7; $i++) { 
            jours("horaireDebutDej",$i);
        }
    ?>
            </div>
            <div class="ligne">
                <div class="border double">Fin déjeuner</div>
                
    <?php
        for ($i=1; $i <7; $i++) { 
            jours("horaireFinDej",$i);
        }
    ?>
            </div>
            <div class="ligne">
                <div class="border double">Fin de journée</div>
    <?php
        for ($i=1; $i <7; $i++) { 
            jours("horaireFinJour",$i);
        }
    ?>
            </div>
            <div class="ligne">
                <div class="mini border">Durée /<br> jour</div>
                <div class="ligne colonne">

                    <div class="ligne">
                        <div class="border"></div>
                        <div class="border"></div>
                        <div class="border"></div>
                        <div class="border"></div>
                        <div class="border"></div>
                        <div class="border"></div>
                    </div>
                    <div class="ligne border">Maximum 10 H / Jour, pause déjeuner incluse si inférieure à 1 H</div>
                </div>
            </div>
            <div class="ligne">
                <div class="demi border">Durée hebdomadaire</div>
                <div class="border mini"></div>
                <div class="border">Minimum 30 heures – Maximum 35 heures chaque semaine</div>
            </div>
        </div>
        <div>Compléter le formulaire bis pour chaque semaine si les horaires varient au cours des semaines d'accueil.
        </div>
    </div>
    <div class="espaceHor"></div>

<!-- ******************Lieu de réalisation****************** -->

   
        <fieldset>
            <legend>Lieu de réalisation</legend>
            <!-- table stage -->
            <div class="info">
                <div class="label centre demi">Lieu de réalisation</div>
                <div class="colonne">
                    <div class="info">
                        <input type="checkbox" id="" name="lieuRealisation1" value="entreprise">
                        <label for="entreprise">Locaux de l'entreprise </label>
                        <div class="mini"></div>
                        <input type="checkbox" id="" name="lieuRealisation2" value="Chantier">
                        <label for="Chantier">Chantier(s) </label>
                        <div class="mini"></div>
                        <input type="checkbox" id="" name="lieuRealisation3" value="clients">
                        <label for="clients">Locaux des clients</label>
                    </div>
                    <div class="info centre">
                        <input type="checkbox" id="" name="lieuRealisation4">
                        <label for="Lieu">Autre (préciser) : </label>
                        <input type="text" name="lieuRealisation5">
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>

            <div class="info">
                <div class="label centre demi">Déplacements occasionnés par le stage</div>

                <div class="info">
                    <input type="radio" id="" name="deplacement" value="OUI" required>
                    <label for="oui">OUI</label>
                    <div class="mini"></div>
                    <input type="radio" id="" name="deplacement" value="NON">
                    <label for="non">NON</label>
                </div>
            </div>
            <div class="espaceHor"></div>
            <div class="info">
                <div class="label centre demi">Fréquence</div>
                <div class="colonne">
                    <div class="info">
                        <input type="radio" id="" name="frequenceDeplacement" value="Quotidien" required>
                        <label for="Quotidien">Quotidien </label>
                        <div class="mini"></div>
                        <input type="radio" id="" name="frequenceDeplacement" value="Occasionnels">
                        <label for="Occasionnels">Occasionnels </label>
                    </div>
                    <div class="info centre">
                        <input type="radio" id="" name="frequenceDeplacement" value="autre">
                        <label for="Autre">Autre (préciser) : </label>
                        <input type="text" name="frequenceDeplacement1">
                         <!-- il faut faire un script -->
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>
            <div class="info">
                <div class="label centre demi">Modes de déplacement</div>
                <div class="colonne">
                    <div class="info">
                        <input type="checkbox" id="" name="modeDeplacement1" value="vehicule de l'Entreprise">
                        <label for="vehiculeEntreprise">Véhicule de l'entreprise </label>
                        <div class="mini"></div>
                        <input type="checkbox" id="" name="modeDeplacement2" value="vehicule de Stagiaire">
                        <label for="vehiculeStagiaire">Véhicule personnel du stagiaire </label>
                    </div>
                    <div class="info centre">
                        <input type="checkbox" id="" name="modeDeplacement3">
                        <label for="AutreModeDeplacement">Autre (préciser) : </label>
                        <input type="text" name="modeDeplacement4">
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>

<!-- ******************Les activités****************** -->
        </fieldset>
        <div class="espaceHor"></div>
        <div class="espaceHor"></div>
        <div class="espaceHor"></div>
        <fieldset>
            <legend>Les activités
            </legend>
            <div class="info">
                <div class="label centre demi">demandent une attestation de formation règlementaire</div>
                <div class="colonne">
                    <div class="info">
                        <input type="radio" id="" name="attFormReglement" value="OUI" required>
                        <label for="attFormReglement">OUI</label>
                        <div class="mini"></div>
                        <input type="radio" id="" name="attFormReglement" value="NON">
                        <label for="attFormReglement">NON</label>
                        <div class="mini"></div>
                    </div>
                    <div class="info centre">
                      
                        <label for="libelleAttFormReg">laquelle : </label>
                        <input type="text" name="libelleAttFormReg">
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>
            <div class="info">
                <div class="label centre demi">Exige une visite médicale d'aptitude:</div>
                <div class="colonne">
                    <div class="info">
                        <input type="radio" id="" name="visiteMedical" value="OUI" required>
                        <label for="visiteMedical">OUI</label>
                        <div class="mini"></div>
                        <input type="radio" id="" name="visiteMedical" value="NON">
                        <label for="visiteMedical">NON</label>
                        <div class="mini"></div>
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>
            <div class="info">
                <div class="label centre demi">comportent des travaux dangereux </div>
                <div class="colonne">
                    <div class="info">
                        <input type="radio" id="" name="travauxDang" value="OUI" required>
                        <label for="lieu">OUI</label>
                        <div class="mini"></div>
                        <input type="radio" id="" name="travauxDang" value="NON">
                        <label for="Chantier">NON</label>
                        <div class="mini"></div>
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>
            <div class="info">
                <div class="label centre demi">Préciser</div>
                <div class="colonne">
                    <div class="info colonne">
                        <div class="info">
                            <div>
                                <input type="checkbox" id="" name="td1" value="Agents chimiques dangereux">
                                <label for="lieu">Agents chimiques dangereux </label>
                            </div>
                            <div class="mini"></div>
                            <div>
                                <input type="checkbox" id="" name="td2" value="Milieu confiné">
                                <label for="Chantier"> Milieu confiné </label>
                            </div>
                        </div>




                        <div class="info">
                            <div>
                                <input type="checkbox" id="" name="td3" value="Agents biologiques">
                                <label for="lieu">Agents biologiques </label>
                            </div>
                            <div class="mini"></div>
                            <div>
                                <input type="checkbox" id="" name="td4" value="Travaux en contact avec du verre ou du métal en fusion">
                                <label for="Chantier">Travaux en contact avec du verre ou du métal en fusion</label>


                            </div>

                        </div>

                        <div>
                            <input type="checkbox" id="" name="td5" value="Vibrations mécaniques">
                            <label for="lieu">Vibrations mécaniques</label>

                            <!-- <div class="mini"></div> -->
                            <div>
                                <input type="checkbox" id="" name="td6" value="Manutentions manuelles">
                                <label for="Chantier">Manutentions manuelles</label>
                            </div>

                        </div>
                        <div>
                            <input type="checkbox" id="" name="td7" value="Rayonnements">
                            <label for="lieu">Rayonnements </label>

                            <!-- <div class="mini"></div> -->
                            <div>
                                <input type="checkbox" id="" name="td8" value="Risques électriques">
                                <label for="Chantier">Risques électriques </label>
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" id="" name="td9" value="Milieu hyperbare">
                            <label for="lieu">Milieu hyperbare </label>

                            <!-- <div class="mini"></div> -->
                            <div>
                                <input type="checkbox" id="" name="td10" value="Utilisation de machines">
                                <label for="Chantier">Utilisation de machines </label>
                            </div>

                        </div>
                        <div>
                            <input type="checkbox" id="" name="td11" value="Températures extrêmes">
                            <label for="lieu">Températures extrêmes</label>

                            <!-- <div class="mini"></div> -->
                            <div>
                                <input type="checkbox" id="" name="td12" value="Travaux en hauteur">
                                <label for="Chantier">Travaux en hauteur </label>
                            </div>

                        </div>
                        <div>
                            <input type="checkbox" id="" name="td13" value="Effondrement et ensevelissement">
                            <label for="lieu">Effondrement et ensevelissement </label>

                            <!-- <div class="mini"></div> -->
                            <div>
                                <input type="checkbox" id="" name="td14" value="Contact avec des animaux">
                                <label for="Chantier">Contact avec des animaux</label>
                            </div>

                        </div>
                        <div>
                            <input type="checkbox" id="" name="td15" value="Appareils sous pression">
                            <label for="lieu">Appareils sous pression</label>

                            <!-- <div class="mini"></div> -->
                            <div>

                            </div>
                        </div>

                    </div>
                </div>



        </fieldset>
        <div class="espaceHor"></div>
        <input type="submit">
        <div class="espaceHor"></div>
        <div class="espaceHor"></div>

    </form>
</section>


<?php
function jours($momentJours,$numJours)
{
    
    echo'<div class="border"><input type="time" name="'.$momentJours.$numJours.'"></div>';

}

?>