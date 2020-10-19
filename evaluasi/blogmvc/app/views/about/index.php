<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Raleway", sans-serif
    }
</style>

<body class="w3-light-grey">

<div class="container text-center mt-5">


    <img src="<?= BASEURL; ?>/img/Untitled-design.png" alt="profile" width="200" class="rounded-circle">
    <h1 class="mt-5"><b>About Me</b></h1>
    <p>Whats Up! My name is <?= $data['name']; ?>, I am <?= $data['age']; ?> years old, I am a <?= $data['job']; ?>.</p>

    </div>
