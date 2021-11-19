<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title> Ventanilla (Demo) </title>
        <?php $this->head() ?>
    </head>
    <body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
        <?php $this->beginBody() ?>

        <header id="header-section">
            <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
                <div class="container">
                    <div class="navbar-brand-wrapper d-flex w-100">
                        <a href="/index.php/">
                            <img src="/img/presidencia.png" width="200px" alt="Logo">
                        </a>

                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="mdi mdi-menu navbar-toggler-icon"></span>
                        </button> 
                    </div>
                    <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                            <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                                <div class="navbar-collapse-logo">
                                    <img src="/theme/images/Group2.svg" alt="">
                                </div>
                                <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#header-section">Inicio<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#features-section">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#digital-marketing-section">Blog</a>  
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#feedback-section">Testimonials</a>
                            </li>
                            <?php 
                                if(Yii::$app->user->isGuest){ ?>
                            <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                                <a class="btn btn-outline-danger"  href="/user/login">Entrar</a>
                                <a class="btn btn-info"  href="/user/register">Registrate</a>
                            </li>
                                <?php } ?>
                        </ul>
                    </div>
                </div> 
            </nav>   
        </header>

        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <?= Alert::widget() ?>
        <?= $content ?>

        <div class="container">
            <section class="contact-details" id="contact-details-section">
                <div class="row text-center text-md-left">
                    <div class="col-12 col-md-6 col-lg-4 grid-margin">
                        <img src="/img/footer.png" alt="" class="pb-2" >
<!--                        <div class="pt-2">
                            <p class="text-muted m-0">mikayla_beer@feil.name</p>
                            <p class="text-muted m-0">906-179-8309</p>
                        </div>         -->
                    </div>
<!--                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Get in Touch</h5>
                        <p class="text-muted">Don’t miss any updates of our new templates and extensions.!</p>
                        <form>
                            <input type="text" class="form-control" id="Email" placeholder="Email id">
                        </form>
                        <div class="pt-3">
                            <button class="btn btn-dark">Subscribe</button>
                        </div>   
                    </div>-->
                    <div class="col-12 col-md-6 col-lg-4 grid-margin">
                        <h5 class="pb-2">Menu</h5>
                        <a href="#"><p class="m-0 pb-2">Inicio</p></a>   
                        <a href="#" ><p class="m-0 pt-1 pb-2">About</p></a> 
                        <a href="#"><p class="m-0 pt-1 pb-2">Blog</p></a> 
                        <a href="#"><p class="m-0 pt-1">Testimonials</p></a> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 grid-margin">
                        <h5 class="pb-2">Dirección</h5>
                        <p class="text-muted">Chiapas 514 <br>Ramón Farías, 60157 <br>452 5240092</p>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <a href="https://www.facebook.com/UruapanGobiernoMunicipal"><span class="mdi mdi-facebook"></span></a>
                            <a href="https://twitter.com/GobiernoUruapan"><span class="mdi mdi-twitter"></span></a>
                            <a href="https://www.instagram.com/uruapan_gobiernomunicipal/"><span class="mdi mdi-instagram"></span></a>
                            <a href="https://www.youtube.com/channel/UC5EZpOMngQLwqtfwSIbVIXg"><span class="mdi mdi-youtube-play"></span></a>
                        </div>
                    </div>
                </div>  
            </section>
        </div>


        <div class="content-wrapper">
            <div class="container">

                <footer class="border-top">
                    <p class="text-center text-muted pt-4">Copyright © 2021 |<a href="/index.php/" class="px-1">Gobierno de Uruapan </a></p>

                    <p class="text-center text-muted pt-2">Todos los Derechos Reservados.</p>
                </footer>
                <!-- Modal for Contact - us Button -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" class="form-control" id="Name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" class="form-control" id="Email-1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="Message">Message</label>
                                        <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <!--        <main role="main" class="flex-shrink-0">
                    <div class="container">
        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <?= Alert::widget() ?>
        <?= $content ?>
                    </div>
                </main>-->

        <!--<footer class="footer mt-auto py-3 text-muted">
            <div class="container">
                <p class="float-left">&copy; My Company <?= date('Y') ?></p>
                <p class="float-right"><?= Yii::powered() ?></p>
            </div>
        </footer>-->

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
