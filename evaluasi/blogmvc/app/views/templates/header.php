<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?> Page</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- <div class="container"> -->
            <a class="navbar-brand" href="<?= BASEURL; ?>/article">MY BLOG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="<?= BASEURL; ?>/article">Article<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                    <a class="nav-link" href="<?= BASEURL; ?>" onclick="return confirm('Are you sure you want to log out from this account?');">Log out</a>
                </div>
            </div>
        <!-- </div> -->
    </nav>