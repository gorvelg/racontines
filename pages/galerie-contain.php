<div class="galerie-header">
  <h2>Quelques créations...</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nam
    cumque facilis architecto qui deleniti accusamus explicabo dolor enim? Iusto
    debitis tempore non quaerat maiores totam in sit beatae consequuntur?
  </p>
  <hr class="hr-separation"></hr>
  <div class="network-box">
    <p>Toutes mes créations sont disponibles sur mes réseaux :</p>
    <div class="galerie-network">
      <a href="https://www.facebook.com/ChristineLiseuseetRaconteuse"
        ><img
          class="galerie-network-itm"
          src="images/facebook-round.svg"
          alt="logo facebook"
      /></a>
      <a href="https://www.instagram.com/danslaboitedechristine/"
        ><img
          class="galerie-network-itm"
          src="images/instagram-round.svg"
          alt="logo instagram"
      /></a>
    </div>
  </div>
<div class="galerie-container">
  <?php

  $nbFichiers=-2; // Le dossier contient deux fichier cachés . et ..
  $dossier= opendir("images/galerie");
  while ($fichier = readdir($dossier)) {
  $nbFichiers++;
  }
  //echo 'Nous avons : '.$nbFichiers.' images.'; // On verifie que le compte est bon, à supprimer/commenter ensuite
  
  $i=2; // On initialise i à 1
  while($i <= $nbFichiers) {
    //echo "I vaut : $i <br>"; // Pour tester, à supprimer/commenter ensuite
    echo '<div class="galerie-item">
    <img
      src="images/galerie/image'.$i.'.jpg " alt="photo des créations de la boite à christine"
    />
  </div>';
  $i++;
  }
  ?>
     
</div>
