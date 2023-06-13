<?php
require 'data/brands.php';
require 'data/types.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Beauvoir-shoes</title>
</head>
<body>
    <header>
        <div id="header-title">
            <h1 class="display-1 ms-4">Beauvoir-shoes</h1>
            <h3 class="ms-4">Des chaussures pour tous, à tous les prix</h3>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">accueil</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <!--
                  <li class="nav-item">
                    <a class="nav-link" href="#">connexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">déconnexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">inscription</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">mon compte</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">mon panier</a>
                  </li>
                  -->
                  <!-- bloc liste déroulante des marques
                  --------------------------------------------------------------->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Marques
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php
                      foreach($brands as $value):
                        $brand_id = $value['id'];
                        $brand_name = $value['name'];
                      ?>
                      <li><a class="dropdown-item" href="./brand_view.php?marque=<?=$brand_id?>"><?=ucfirst($brand_name)?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                  <!--------------------------------------------------------------->
                  <!-- bloc liste déroulante des types
                  --------------------------------------------------------------->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Types
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php
                      foreach($type_array as $value):
                        $type_id = $value['id'];
                        $type_name = $value['name'];
                      ?>
                      <li><a class="dropdown-item" href="./type_view.php?type=<?=$type_id?>"><?=ucfirst($type_name)?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                  <!--------------------------------------------------------------->
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main class="mt-2 pt-2 border-top border-secondary">