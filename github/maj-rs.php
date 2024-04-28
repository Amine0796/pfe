<div class="table content" id="table-maj">

<div class="navbar-Table-Button">
        <button onclick="showTable('tableTerrain')">Mission du terrain</button>
        <button onclick="showTable('tableEtranger')">Mission à l'étranger</button>
        <button onclick="showTable('tableCourse')">Course</button>
        <!-- <button onclick="showTable('tableAcheminement')">Acheminement</button> -->

    </div>

    <!-- *********************************************************
******************************************************************
******************************************************************
*************************** travail ******************************
******************************************************************
****************************************************************** -->
<div id="tableTerrain" class="tables-container">
        <div class="table-header">
            <p>Mise à jour des demande de mission du terrain</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Objet mission</th>
                        <th>Période du</th>
                        <th>Période au</th>
                        <th>Departement</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     
                    <?php
                    
                    $sql="Select * from `travail`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                           

                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $ObjetMission = $row['ObjetMission'];
                            $DateDu = $row['DateDu'];
                            $DateAu = $row['DateAu'];
                            $Departement = $row['Departement'];
                            echo '<tr>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$ObjetMission.'</td>
                            <td>'.$DateDu.'</td>
                            <td>'.$DateAu.'</td>
                            <td>'.$Departement.'</td>
                            <td>
                            <form action="delete_update_travail_rs.php?idT='.$row["id"].'" method="post">
                            <div class="btn-dlt-upt-rs">
                                <button name="update-travail-rs" ><i class="bx bxs-edit"></i></button> 
                                <button name="delete-travail-rs" ><i class="bx bxs-trash"></i></button>
                                </div>
                            </form>
                            </td>
                        </tr>';
                        }
                    }
                
                ?>
                        
                </tbody>
            </table>
        </div>


</div>
<!-- *************************************************************
******************************************************************
******************************************************************
*************************** etranger *****************************
******************************************************************
****************************************************************** -->
<div id="tableEtranger" class="tables-container">
        <div class="table-header">
            <p>Mise à jour des demandes des mission à l'étranger</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Pays</th>
                        <th>Nom demandeur</th>
                        <th>Objet</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql="Select * from `etranger`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            
                            

                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $Pays = $row['Pays'];
                            $Demandeur = $row['Demandeur'];
                            $ObjetMission = $row['ObjetMission'];
                            
                            echo '<tr>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$Pays.'</td>
                            <td>'.$Demandeur.'</td>
                            <td>'.$ObjetMission.'</td>
                            
                            <td>
                            <form action="delete_update_etranger_rs.php?idRSE='.$row["id"].'" method="post">
                            <div class="btn-dlt-upt-rs">
                                <button name="update-etranger-rs" ><i class="bx bxs-edit"></i></button> 
                                <button name="delete-etranger-rs" ><i class="bx bxs-trash"></i></button>
                                </div>
                            </form>
                            </td>
                        </tr>';
                        }
                    }
                
                ?>
                </tbody>
            </table>
        </div>

</div>




<!-- *************************************************************
******************************************************************
******************************************************************
*************************** course *******************************
******************************************************************
****************************************************************** -->
<div id="tableCourse" class="tables-container">
    <div class="table-header">
            <p>Mise à jour des demandes de course</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Point depart</th>
                        <th>Date depart</th>
                        <th>Heure depart</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    
                    $sql="Select * from `courses`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            

                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $PointDepart = $row['PointDepart'];
                            $DateDepart = $row['DateDepart'];
                            $HeureDepart = $row['HeureDepart'];
                            echo '<tr>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$PointDepart.'</td>
                            <td>'.$DateDepart.'</td>
                            <td>'.$HeureDepart.'</td>
                            <td>
                            <form action="delete_update_course_rs.php?idC='.$row["id"].'" method="post">
                            <div class="btn-dlt-upt-rs">
                                <button name="update-course-rs" ><i class="bx bxs-edit"></i></button> 
                                <button name="delete-course-rs" ><i class="bx bxs-trash"></i></button>
                                </div>
                            </form>
                            </td>
                            </tr>';
                        }
                    }
                
                ?>

                </tbody>
            </table>
        </div>
</div>


</div>
<script src="tableswitcher.js"></script>