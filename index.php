<?php
require_once 'connect.php';
$sql = "SELECT * FROM slider";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$tests = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($tests);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>testrocket</title>
</head>
<body>
    <header class="header">

      <div class="container">
        <div class="d-flex justify-content-between"> 
          <div class="burger"></div>
            <ul class="nav nav-left">
              <li class="nav-item">
                <a class="nav-link" href="#"><img class="header__logo" src="images/LOGO.svg"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <img class="header__icon" src="images/placeholder.svg">
                  <p class="header__address">Ростов-на-Дону<br><span>ул. Ленина, 2Б</span></p>
                </a>
              </li>
            </ul>
      
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link">
                  <img class="header__whatsapp-logo" src="images/whatsapp 1.svg">
                  <p class="header__tel" href="tel:+78630000000">+7(863) 000 00 00 </p>
                  </a>   
              </li>
              <li class="nav-item">
                <a class="btn btn-success btn-sign-up" href="#">Записаться на прием</a>
              </li>
            </ul>
       </div>

    </div><!-- /container -->
     <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1fa181;">  
            <div class="container">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">О клинике</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Услуги</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Специалисты</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Цены</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                  </li>
                </ul>
              </div>
            </div><!-- /container -->
          </nav>

        <nav class="mobile-menu">
          <ul class="mobile-list">
            <li><a class="mobile-link" href="#">О клинике</a></li>
            <li><a class="mobile-link" href="#">Услуги</a></li>
            <li><a class="mobile-link" href="#">Специалисты</a></li>
            <li><a class="mobile-link" href="#">Цены</a></li>
            <li><a class="mobile-link" href="#">Контакты</a></li>
            <li><a class="mobile-link btn btn-success sign-up" href="#">Записаться на прием</a></li>
          </ul>
          </ul>
        </nav>

        <img class="mobile-photo" src="images/mobile_photo.jpg">

          <div class="header__intro">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="header__intro-left">
                  <h1 class="header__title">Многопрофильная<br> клиника для детей<br>
                    и взрослых</h1>
                    <p class="header__text">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </p>
                  </div>
                </div>

                <div class="col-md-6" style="padding-right: 0px;">
                  <img class="header__intro-image desktop-photo" src="images/Rectangle 9.jpg">
                </div>
              </div><!-- /row -->
            </div>
          </div>

    </header>


<!-- Check-up -->
<div class="check-up">
  <div class="container">
    <div class="row">

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
           
        <div class="carousel-inner">
          <?php foreach ($tests as  $test): ?>
              <div class="carousel-item <?= $test['active'];?>">
                <img src="images/slider.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="check-up__title">Check-UP</h5>
                  <p class="check-up__text"><?=$test['user'];?></p>
                  <ul class="check-up__list">
                    
                    <?php 
                    $t = explode("\n", $test['list']);   ?>
                    <li><?= $t[0];?></li>
                    <li><?= $t[1];?></li>
                    <li><?= $t[2];?></li>
                    <li><?= $t[3];?></li>
                  </ul>
                  <p class="check-up__cost"><?= $test['cost'];?>₽ <span><?= $test['old_cost'] ;?>₽</span></p>
                  <a class="btn btn-success btn-sign-up check-up" href="#">Записаться</a>
                  <a class="btn btn-success btn-sign-up check-up right" href="#">Подробнее</a>
                </div>
              </div>
           <?php endforeach; ?>    

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Предыдущий</span>
        </button>
        
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div><!-- /carousel -->
      <div class="carousel__count">1/4</div>
    </div><!-- /row -->
  </div>
</div>



<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="d-flex justify-content-between"> 

      <ul class="nav nav-top">
        <li class="nav-item">
          <a class="nav-link" href="#"><img class="footer__logo" src="images/logo_bottom.svg"></a>
        </li>
      </ul>

      <ul class="nav nav-footer">
        <li class="nav-item">
          <a class="nav-link" href="#">О клинике</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Услуги</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Специалисты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Цены</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Контакты</a>
        </li>
      </ul>

      <ul class="nav nav-icon">
        <li class="nav-item">
          <a class="nav-link">
            <img class="footer__icon" src="images/insta_bottom.svg"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link">
            <img class="footer__icon" src="images/whatsapp_bottom.svg"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link">
            <img class="footer__icon" src="images/telegram_bottom.svg"></a>
        </li>
      </ul>

  </div>
  </div>
</footer>


<!-- Modal -->

<div class="modal">
    <div class="inner">
  
        <form action="my_mail.php" class="submission__form" method="post">
            <h4 class="modal__title">Записаться на прием</h4>
            
            <div class="mb-3 mt-2">
              <label for="name" class="form-label">Имя</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            
            <div class="mb-3">
              <label for="tel" class="form-label">Телефон</label>
              <input type="tel" name="tel" class="form-control" id="tel">
            </div>

            <div class="mb-2">
            <label for="message" class="form-label">Сообщение</label>
              <textarea name="message" id="message" cols="5" rows="3"  class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-block mb-2 btn-sign-up modal-btn">Submit</button>
      </form>

          <button class="modal__close" type="button">
                <img src="images/close.svg" alt="Close">
          </button>
    </div>
</div><!-- /.modal -->




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="burger.js"></script>

</body>
</html>