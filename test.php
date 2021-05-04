<?php
session_start();
include('headerSt.php');
?>


<div class="imag">
  <div class="text_centre">
            <h1> <center>Description des Filières</center></h1>
            
         
         <?php 
            $connex=mysqli_connect("localhost","root","","bd_este");
         ?>
        
<div class="liste">
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#gi" role="tab" aria-controls="nav-home" aria-selected="true">GI&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#er" role="tab" aria-controls="nav-profile" aria-selected="false">ER&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#tm" role="tab" aria-controls="nav-contact" aria-selected="false">TM&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#godt" role="tab" aria-controls="nav-profile" aria-selected="false">GODT&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#idsd" role="tab" aria-controls="nav-contact" aria-selected="false">IDSD&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#ge" role="tab" aria-controls="nav-profile" aria-selected="false">GE&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#isil" role="tab" aria-controls="nav-contact" aria-selected="false">ISIL&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#mbf" role="tab" aria-controls="nav-profile" aria-selected="false">MBF&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#erdd" role="tab" aria-controls="nav-contact" aria-selected="false">ERDD&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#mge" role="tab" aria-controls="nav-profile" aria-selected="false">MGE&nbsp;&nbsp;</a>
         <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#mt" role="tab" aria-controls="nav-profile" aria-selected="false">MT&nbsp;&nbsp;</a>
      </div>
   </nav>
   <!--  GI  -->
<div class="tab-content" id="nav-tabContent" class="cont">
                  <div class="tab-pane fade show active" id="gi" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php 
                        $query="SELECT nom_filiere FROM filiere where code_filiere='GI'";
                        $query_run=mysqli_query($connex,$query);
                        if(mysqli_num_rows($query_run)>0)
                        {
                           while($row=mysqli_fetch_assoc($query_run))
                           {
                              echo '<br><br>'.$row['nom_filiere'].' ';
                              
                           } 
                           echo' :<br>  <em>DUT<em><br>
                              <strong> Première année:</strong> Tronc commun<br>
                              <strong>Deuxième année:</strong> Options / Spécialisation et renforcement / Projet de fin
                              d′études / Stage en entreprise.<br>
                              <strong>Options:</strong> Génie logiciel/Réseaux ';    
                        } 
                        ?>         
                  </div>
   
<!----  -->

<!--  ER  -->
   
                 <div class="tab-pane fade" id="er" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <?php 
                        $query="SELECT nom_filiere FROM filiere where code_filiere='ER'";
                        $query_run=mysqli_query($connex,$query);
                        if(mysqli_num_rows($query_run)>0)
                        {
                           while($row=mysqli_fetch_assoc($query_run))
                           {
                              echo '<br><br>'.$row['nom_filiere'].'';
                              
                           }
                           echo ' : <br> <em>DUT<em><br>
                              <strong>Première année:</strong> Tronc commun<br>
                              <strong>Deuxième année:</strong>Options / Spécialisation et renforcement 
                              / Projet de fin d′études / Stage en entreprise.<br>
                              <strong>Options:</strong> Energies Renouvelables';     
                        } 
                        ?>         
                </div>
<!------------------- -->
   
      
 <!------------ TM-------------  -->
                 <div class="tab-pane fade" id="tm" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <?php 
                           $query="SELECT nom_filiere FROM filiere where code_filiere='TM'";
                           $query_run=mysqli_query($connex,$query);
                           if(mysqli_num_rows($query_run)>0)
                           {
                              while($row=mysqli_fetch_assoc($query_run))
                              {
                                 echo '<br><br>'.$row['nom_filiere'].'';
                                 
                              }  
                              echo ': <br> <em>DUT<em><br> 
                                 <strong>Première année:</strong>  Tronc commun<br>
                                 <strong>Deuxième année:</strong> Options / Spécialisation et renforcement 
                                 / Projet de fin d′études / Stage en entreprise.<br>
                                 <strong>Options:</strong>  Finance, Comptabilité, Fiscalité (F.C.F)';   
                           } 
                           ?>         
                 </div>
<!------------------- -->
<!------------ GODT-------------  -->
                 <div class="tab-pane fade" id="godt" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <?php 
                           $query="SELECT nom_filiere FROM filiere where code_filiere='GODT'";
                           $query_run=mysqli_query($connex,$query);
                           if(mysqli_num_rows($query_run)>0)
                           {
                              while($row=mysqli_fetch_assoc($query_run))
                              {
                                 echo '<br><br>'.$row['nom_filiere'].': <br> <em>DUT<em><br>
                                 <strong>Première année:</strong> Tronc commun<br>
                                 <strong>Deuxième année:</strong>Options / Spécialisation et renforcement /
                                  Projet de fin d′études / Stage en entreprise.<br>
                                 <strong>Options:</strong> Gestion Touristique et Hôtelière ';
                              }     
                           } 
                           ?>         
                 </div>
<!------------------- -->
<!------------ IDSD-------------  -->
                  <div class="tab-pane fade" id="idsd" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <?php 
                           $query="SELECT nom_filiere FROM filiere where code_filiere='IDSD'";
                           $query_run=mysqli_query($connex,$query);
                           if(mysqli_num_rows($query_run)>0)
                           {
                              while($row=mysqli_fetch_assoc($query_run))
                              {
                                 echo '<br><br>'.$row['nom_filiere'].' :<br> <em>DUT<em><br>
                                 <strong>Première année:</strong> Tronc commun<br>
                                 <strong>Deuxième année:</strong>Options / Spécialisation et renforcement / Projet de fin
                                  d′études / Stage en entreprise.<br>
                                  <strong>Options:</strong> Informatique et Big Data.
                                 
                                 
                                 ';
                              }     
                           } 
                           ?>         
                 </div>
<!------------------- -->
<!------------ GE------------  -->
                  <div class="tab-pane fade" id="ge" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <?php 
                           $query="SELECT nom_filiere FROM filiere where code_filiere='GE'";
                           $query_run=mysqli_query($connex,$query);
                           if(mysqli_num_rows($query_run)>0)
                           {
                              while($row=mysqli_fetch_assoc($query_run))
                              {
                                 echo '<br><br>'.$row['nom_filiere'].': <em>DUT<em><br>  
                                 <strong>Première année:</strong> Tronc commun<br> 
                                 <strong>Deuxième année:</strong>Options / Spécialisation et renforcement / 
                                 Projet de fin d′études / Stage en entreprise.<br> 
                                 <strong>Options:</strong> Gestion de l′environnement, Evaluation d′impact, Traitement de pollution,
                                 gestion d′entreprise environnementale,valorisation de déchets et des eaux usées
                                 
                                 ';
                              }     
                           } 
                           ?>         
                 </div>
<!------------------- -->
<!------------ ISIL------------  -->
                  <div class="tab-pane fade" id="isil" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <?php 
                           $query="SELECT nom_filiere FROM filiere where code_filiere='ISIL'";
                           $query_run=mysqli_query($connex,$query);
                           if(mysqli_num_rows($query_run)>0)
                           {
                              while($row=mysqli_fetch_assoc($query_run))
                              {
                                 echo '<br><br>'.$row['nom_filiere'].' : <br>';
                                 echo '<img href="http://www.este.ucam.ac.ma/images/lp_isil.jpg">';
                              }     
                           } 
                           ?>         
                 </div>
<!------------------- -->
<!------------ MBF------------  -->
                  <div class="tab-pane fade" id="mbf" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <?php 
                           $query="SELECT nom_filiere FROM filiere where code_filiere='MBF'";
                           $query_run=mysqli_query($connex,$query);
                           if(mysqli_num_rows($query_run)>0)
                           {
                              while($row=mysqli_fetch_assoc($query_run))
                              {
                                 echo '<br><br>'. $row['nom_filiere'].': <br>  ';
                                 echo '<img href="http://www.este.ucam.ac.ma/images/lp_mbf.jpg">';
                              }     
                           } 
                           ?>         
                 </div>
<!------------------- -->
<!------------ ERDD------------  -->
                   <div class="tab-pane fade" id="erdd" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <?php 
                           $query="SELECT nom_filiere FROM filiere where code_filiere='ERDD'";
                           $query_run=mysqli_query($connex,$query);
                           if(mysqli_num_rows($query_run)>0)
                           {
                              while($row=mysqli_fetch_assoc($query_run))
                              {
                                 echo '<br><br>'.$row['nom_filiere'].' : <br> ';
                                 echo '<img href="http://www.este.ucam.ac.ma/images/lp_erdd.jpg">';
                              }     
                           } 
                           ?>         
                 </div>
<!------------------- -->
<!------------ MGE------------  -->
                    <div class="tab-pane fade" id="mge" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <?php 
                           $query="SELECT nom_filiere FROM filiere where code_filiere='MGE'";
                           $query_run=mysqli_query($connex,$query);
                           if(mysqli_num_rows($query_run)>0)
                           {
                              while($row=mysqli_fetch_assoc($query_run))
                              {
                                 echo '<br><br>'.$row['nom_filiere'].' : <br>  ';
                                 echo '<img href="http://www.este.ucam.ac.ma/images/lp_mge.jpg">';
                              }     
                           } 
                           ?>         
                 </div>
<!------------------- -->
<!------------ MT------------  -->
                    <div class="tab-pane fade" id="mt" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <?php 
                           $query="SELECT nom_filiere FROM filiere where code_filiere='MT'";
                           $query_run=mysqli_query($connex,$query);
                           if(mysqli_num_rows($query_run)>0)
                           {
                              while($row=mysqli_fetch_assoc($query_run))
                              {
                                 echo '<br><br>'.$row['nom_filiere'].': <br>  ';
                                 echo '<img href="http://www.este.ucam.ac.ma/images/lp_mt.jpg">';
                              }     
                           } 
                           ?>         
                 </div>
<!------------------- -->
     
</div> <!------------ fin tab-content -------------  -->


  </div> 
<!---liste  -->


  </div>   
  </div>
<?php
include('foot.php');

?>