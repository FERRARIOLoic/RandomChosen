<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='description' content='_____________'>
    <meta name='keywords' content='_____________'>
    <meta name='robots' content='_____________'>
    <meta name='author' content='FERRARIO Loïc'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' type='image/x-icon' href='public/assets/img/icons/favicon.ico'>
    <link rel='icon' type='image/png' sizes='32x32' href='/favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='/favicon-16x16.png'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='style.css'>
    <meta name='google-site-verification' content='_____________' />
    <meta property='og:locale' content='fr_FR' />
    <meta property='og:title' content='_____________' />
    <meta property='og:type' content='siteweb' />
    <meta property='og:image' content='_____________' />
    <meta property='og:url' content='_____________' />
    <title><?= $pageTitle; ?></title>
</head>

<body>
    <header>
        <header class="container-fluid">
            <div class="row">
                <div class="col-12 fs-2 text-center">
                    <?= $pageTitle ?>
                </div>
            </div>
        </header>
    </header>
    <main class="container-fluid">
        <div class="row mt-5 boxExercice">
            <div class="col-12 fs-3">
                Tirage au sort du prochain qui part au piloris...
            </div>
        </div>
        <div class="row">
            <div class="col-12 pt-5 text-center">
                <form class="row text-center" action="index.php" method="post">
                    <input type="hidden" name="launch" value="ok">
                    <div class="col-12">
                    <button class="btn bg-warning">Choisir le sacrifié</button>
                    </div>
                </form>
            </div>
            <div class="col-12 pt-5 text-center fs-1">
                <?php 
                
                ?>
            </div>
        </div>
    </main>

    <!------------- FOOTER --------->
    <footer class="container-fluid fixed-bottom">
        <div class="row copyright">
            <div class="col-3"><a href="copyright.php">&#169;FERRARIOLoïc-2022</a>
            </div>
            <div class="col-3"><a href="confidence.php">Déclaration de confidentialité</a></div>
            <div class="col-3"><a href="legal.php">Mentions légales</a></div>
            <div class="col-3"><a href="contact.php">Nous contacter</a></div>
        </div>
    </footer>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'>
    </script>
    <script src='script.js'></script>
</body>

</html>