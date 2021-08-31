<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Html as BootstrapHtml;
use yii\helpers\BaseUrl;
use yii\helpers\Url;
use yii\web\UrlManager;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets-admin/css/admin.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title>  <?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<body>
    <?= $this->beginBody() ?> 
    <header>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?= Url::to(['/admin']) ?>">Cadê meu Médico</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= Url::to(['/admin']) ?>">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['/admin/medicos']) ?>">
                        <span data-feather="file"></span>
                        Médicos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['/admin/especialidades']) ?>">
                        <span data-feather="shopping-cart"></span>
                        Especialidades
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['/admin/clinicas']) ?>">
                        <span data-feather="users"></span>
                        Clinicas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['/admin/medico-has-especialidades']) ?>">
                        <span data-feather="bar-chart-2"></span>
                        Medicos-Especialidades
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Integrações
                        </a>
                    </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Year-end sale
                        </a>
                    </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <?= $content; ?>
            </main>
        </div>
    </div>
    <div class="container">
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="/assets-admin/js/dashboard.js"></script>
    <?= $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>