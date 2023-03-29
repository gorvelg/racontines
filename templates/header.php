<?php
$page = $_SERVER['REQUEST_URI'];
?>
<!-- navbar mobile -->
<div class="navbar-mobile">
<div id="logo">
    <a href="index.php">
      <img src="images/cigogne.svg" alt="cigogne portant un bébé" />
      <h1>Dans la boîte de Christine</h1>
    </a>
  </div>
  <i class="fas fa-bars"></i>
  <div class="modal">
    <div class="navbar-mobile-list">
      <a href="index.php">ACCUEIL</a>
      <a href="galerie.php">MES CRÉATIONS</a>
      <a href="tarifs.php">TARIFS</a>
      <a href="contact.php">CONTACT</a>
    </div>
  </div>
</div>
<!-- fin navbar mobile -->
<header>
  <div id="logo">
    <a href="index.php">
      <img src="images/cigogne.svg" alt="cigogne portant un bébé" />
      <h1>Dans la boîte de Christine</h1>
    </a>
  </div>
  <nav>
    <ul>
      <li>
        <a <?php if($page=="/racontines/index.php") echo'class="active"'; ?> href="index.php">Accueil</a>
      </li>
      <li>
        <a <?php if($page=="/racontines/galerie.php") echo'class="active"'; ?> href="galerie.php">Mes créations</a>
      </li>
      <li>
        <a <?php if($page=="/racontines/tarifs.php") echo'class="active"'; ?> href="tarifs.php">Tarifs</a>
      </li>
      <li>
        <a <?php if($page=="/racontines/contact.php") echo'class="active"'; ?> href="contact.php">Contact</a>
      </li>
    </ul>
  </nav>
</header>
