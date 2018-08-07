<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/CST-438/src/API/Controllers/CoinController.php');

    $coinController = new CoinController();

    $coin = $coinController->getCoin(1182);
    $coinList = $coinController->getCoins();

?>

<!--ONLY VIEW RIGHT NOW SHOULD INCLUDE MODEL-->
<!DOCTYPE html>



<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <title>Crypto Coin MVC</title>

  </head>

  <body cz-shortcut-listen="true">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Crypto Coin MVC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#"></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"> </a>
              <a class="dropdown-item" href="#"> </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Crypto Coin MVC </h1>
          <p class="lead text-muted">A PHP MVC Application showing rankings of Crypto Currency</p>
          <p>
            <!-- <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
          </p>
        </div>
      </section>
      <div class="starter-template">
      <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col" width="10%"></th>
                <th scope="col">Symbol</th>
                <th scope="col">Name</th>
                <th scope="col">Algorithm</th>
                <th> Price Alert</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=0; ?>
            <?php foreach($coinList['Data'] as $value): ?>

                <?php if ($i++ > 25) break; ?>
                <tr>
                    <td><img height="50px" width="50" src='https://www.cryptocompare.com/<?=$value['ImageUrl'];?>'</td>
                    <td><?=$value['Symbol'];?></td>
                    <td><?=$value['CoinName'];?></td>
                    <td><?=$value['Algorithm'];?></td>
                    <td><button type="button" class="btn btn-primary">Create Price Alert</button></td>
                </tr>
            <?php endforeach;?>

            </tbody>
            </table>

      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>

</body></html>