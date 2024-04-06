<?php
require_once "database.php";
if(isset($_POST['valider-formation'])){
    $Direction=$_POST['direction-formation'];
    $Departement=$_POST['departement-formation'];
    $Demandeur=$_POST['demande-dffuctuee-par-formation']; 
    $CompteAnalytique=$_POST['compte-analytique-formation']; 
    $NumDemande=$_POST['num-demande-formation'];
    $DateDemande=$_POST['date-demande-formation'];
    $Destinataire=$_POST['destinataire-formation']; 
    $DateDu=$_POST['du-formation'];
    $DateAu=$_POST['au-formation'];
    $RegionDeroulementMission=$_POST['region-deroulement-mission-formation']; 
    $LieuMission=$_POST['lieu-de-la-mission-formation'];
    $Itineraire=$_POST['itineraire-formation'] ;
    $ObjetMission=$_POST['objet-de-la-mission-formation'] ;
    $NomMissionnaires=$_POST['noms-des-missionaires-formation'] ;
    $MoyenTransportAller=$_POST['moyen-de-transport-aller-formation'] ;
    $MoyenTransportRetour=$_POST['moyen-de-transport-retour-formation'] ;
    $DemandeHebergement=$_POST['demande-hebergement-formation'] ;
    $DemandeVehiculeServiceAller=$_POST['demande-vehicule-service-aller-formation'] ;
    $DemandeVehiculeServiceRetour=$_POST['demande-vehicule-service-retour-formation'];
    $PointDepart=$_POST['point-de-depart-formation'] ;
    $DemandeHebergementAller=$_POST['demande-hebergement-aller-formation'] ;
    $NombreNuitesTrajetAller=$_POST['nombre-de-nuite-du-trajet-aller-formation'] ;
    $PointRetour=$_POST['point-de-retour-formation'] ;
    $DemandeHebergementRetour=$_POST['demande-hebergement-retour-formation'] ;
    $NombreNuitesTrajetRetour=$_POST['nombre-de-nuite-du-trajet-retour-formation'] ;
    $BesoinAutorisationTransportProduitsDangereux=$_POST['besoin-autorisation-transport-produits-dangereux-formation'] ;
    $TypeProduits=$_POST['type-produits-formation']; 
    $DemandeAcheminementMateriel=$_POST['demande-acheminement-du-materiel-formation'] ;
    $TypeAcheminementMateriel=$_POST['type-acheminement-du-materiel-formation'] ;
    $Observation=$_POST['observation-formation'] ;

    $sql = "INSERT INTO demande_mission (Direction, Departement, Demandeur, CompteAnalytique, NumDemande, DateDemande, Destinataire, DateDu, DateAu, RegionDeroulementMission, LieuMission, Itineraire, ObjetMission, NomMissionnaires, MoyenTransportAller, MoyenTransportRetour, DemandeHebergement, DemandeVehiculeServiceAller, DemandeVehiculeServiceRetour, PointDepart, DemandeHebergementAller, NombreNuitesTrajetAller, PointRetour, DemandeHebergementRetour, NombreNuitesTrajetRetour, BesoinAutorisationTransportProduitsDangereux, TypeProduits, DemandeAcheminementMateriel, TypeAcheminementMateriel, Observation) 
    VALUES ('$Direction', '$Departement', '$Demandeur', '$CompteAnalytique','$NumDemande', '$DateDemande', '$Destinataire', '$DateDu', '$DateAu', '$RegionDeroulementMission', '$LieuMission', '$Itineraire', '$ObjetMission', '$NomMissionnaires', '$MoyenTransportAller', '$MoyenTransportRetour', '$DemandeHebergement', '$DemandeVehiculeServiceAller', '$DemandeVehiculeServiceRetour', '$PointDepart', '$DemandeHebergementAller', '$NombreNuitesTrajetAller', '$PointRetour', '$DemandeHebergementRetour', '$NombreNuitesTrajetRetour', '$BesoinAutorisationTransportProduitsDangereux', '$TypeProduits', '$DemandeAcheminementMateriel', '$TypeAcheminementMateriel', '$Observation')";
    
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Data inserted successfully!');</script>";
        echo "<script>window.location.replace('RS.php');</script>";
        exit();
    }else{
        echo "<script>alert('Something went wrong');</script>";
        echo "<script>window.location.replace('RS.php');</script>";
        exit();
    }

}
?>
<div class="content" id="table-travail">
    <form method="post">
    <p class="header-text">Ajouter une demande de mission du terrain</p>

    <div class="container-kr">
        <label for="text1">
            Direction
            <input type="text"  name="direction-formation">
        </label>
                                                

        <label for="text2">
            Département 
            <input type="text"  name="departement-formation">
        </label>


        <label for="text3">
            Demande effuctuée Par 
            <input type="text" name="demande-dffuctuee-par-formation" value="<?php echo $_SESSION["username"]; ?>">
        </label>
                                                

        <label for="text4">
            Compte Analytique
            <input type="text" id="text4" name="compte-analytique-formation">
        </label>
                                                

        <label>
            Num Demande 
            <input type="text" name="num-demande-formation" required>
        </label>



        <label for="date1">
            Date Demande 
            <input type="date"  name="date-demande-formation">
        </label>
                                                
                                                
        <label for="text5">
            Destinataire 
            <input type="text"  name="destinataire-formation">
        </label>
                                                
                                                
        <label for="date2">
            Du 
            <input type="date" name="du-formation">
        </label>

        <label for="date3">
            Au
            <input type="date" name="au-formation">
        </label>
                                                

        <label for="select1">
            Region deroulement mission
            <select id="select1" name="region-deroulement-mission-formation">
                <option>NORD</option>
                <option>SUD</option>
                <option>EST</option>
                <option>OUEST</option>
            </select>
        </label>
                                                
        <label for="text6">
            lieu de la mission 
            <input type="text" name="lieu-de-la-mission-formation">
        </label>
                                                

        <label for="text7">
            Itineraire
            <input type="text" name="itineraire-formation">
        </label>

        <label for="text8">
            objet de la mission
            <input type="text" name="objet-de-la-mission-formation">
        </label>
                                                

        <label for="text9">
            Nom(s) du(des) missionaire(s)
            <input type="text" name="noms-des-missionaires-formation">
        </label>
                                                


        <label >
            Moyen de Transport aller 
            <select  name="moyen-de-transport-aller-formation">
                <option value="avion">Avion</option>
                <option value="vehicule">Vehicule</option>
            </select>
        </label>
                                                


        <label >
            Moyen de transport retour 
            <select  name="moyen-de-transport-retour-formation">
                <option value="avion">Avion</option>
                <option value="vehicule">Vehicule</option>
            </select>
        </label>
                                                

        <label >
            Demande hebergement
            <select  name="demande-hebergement-formation">
                <!-- <option></option>  -->
                <option value="oui">Oui</option> 
                <option value="non">Non</option>
            </select>
        </label>
                                                

        <div class="aller">
            <label for="text10">
                Demande Vehicule service aller 
                <select  name="demande-vehicule-service-aller-formation">
                    <!-- <option></option>  -->
                    <option value="oui">Oui</option> 
                    <option value="non">Non</option>
                </select>
            </label>


            <label for="text12">
                Point de depart
                <input type="text" name="point-de-depart-formation">
            </label>


            <label for="text11">
                Demande hebergement aller
                <select  name="demande-hebergement-aller-formation">
                    <option value="oui">Oui</option> 
                    <option value="non">Non</option>
                </select>
            </label>




                                                <label for="text13">
                                                    nombre de nuite du trajet - Aller
                                                    <input type="number" name="nombre-de-nuite-du-trajet-aller-formation">
                                                </label>
                                            </div>



                                            <div class="retour">
                                                <label for="text10">
                                                    Demande Vehicule service Retour 
                                                    <select  name="demande-vehicule-service-retour-formation">
                                                        <option value="oui">Oui</option> 
                                                        <option value="non">Non</option>
                                                    </select>
                                                </label>


                                                <label for="text12">
                                                    Point de retour
                                                    <input type="text"  name="point-de-retour-formation">
                                                </label>


                                                <label for="text11">
                                                    Demande hebergement Retour
                                                    <select  name="demande-hebergement-retour-formation">
                                                        <option value="oui">Oui</option> 
                                                        <option value="non">Non</option>
                                                    </select>
                                                </label>




                                                <label for="text13">
                                                    nombre de nuite du trajet - Retour
                                                    <input type="number" id="text13" name="nombre-de-nuite-du-trajet-retour-formation">
                                                </label>
                                            </div>



                                            <div class="observation-formation">
                                                <label for="besoin-autorisation-transport-produits-dangereux-formation">
                                                    Besoin Autorisation Transport Produits Dangereux
                                                    <select  name="besoin-autorisation-transport-produits-dangereux-formation">
                                                        
                                                        <option>Oui</option> 
                                                        <option>Non</option>
                                                    </select>
                                                </label>

                                                <label for="type-produits-formation">
                                                    Type Produits
                                                    <input type="text" name="type-produits-formation">
                                                </label>

                                                <label for="demande-acheminement-du-materiel-formation">
                                                    Demande Acheminement du materiel
                                                    <select  name="demande-acheminement-du-materiel-formation">
                                                        <option value="oui">Oui</option> 
                                                        <option value="non">Non</option>
                                                    </select>
                                                </label>

                                                <label for="type-acheminement-du-materiel-formation">
                                                    Type Acheminement du materiel
                                                    <input type="text" name="type-acheminement-du-materiel-formation">
                                                </label>


                                                <label for="observation-formation">
                                                    Observation
                                                    <input type="text" name="observation-formation">
                                                </label>

                                            </div>

                                            <div class="boutons-kr">
                                                <button type="submit" class="btn-formation" name="valider-formation">Valider</button>
                                                <button type="submit" class="btn-formation" name="annuler-formation" >Annuler</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
