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

    <div class="w3-content" style="max-width:1400px">

        <!-- modal -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalLabel">Add Article</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="<?=BASEURL;?>/article/add" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">

                            <div class="form-group">
                                <label for="pic">Cover</label>
                                <input type="file" class="form-control" id="pic" name="pic">
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" cols="30" rows="5"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" id="author" name="author">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>-ARTICLES-</b></h1>
            <p>Aricle page based on blog of <span class="w3-tag">Muhgenta</span></p>
        </header>

        <!-- Grid -->
        <div class="w3-row">

            <div class="w3-col l8 s12">

            </div>
            <div class="row center">
                <div class="w3-col w3-margin w3-margin-top">
                    <div class="col-lg-6">
                        <?php Flasher::flash();?>
                    </div>
                </div>
            </div>

            <!-- Blog entries -->
            <div class="w3-col l8 s12">

                <div class="w3-card w3-margin w3-margin-top">

                    <nav class="navbar navbar-dark bg-dark w3-black">
                        <button class="btn btn-warning tombolTambahData" type="button" data-toggle="modal"
                            data-target="#formModal">Create New</button>
                        <form action="<?=BASEURL;?>/article/search" method="post">
                            <div class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search Article..."
                                    name="keyword" id="keyword" autocomplete="off">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit"
                                    id="tombolCari">Search</button>
                            </div>
                        </form>
                    </nav>

                </div>

                <div class="row center">
                    <div class="col-lg-7">
                        <?php Flasher::flash();?>
                    </div>
                </div>

                <!-- Blog entry -->
                <!-- CARD -->
                <?php foreach ($data['article'] as $article): ?>
                <div class="w3-card w3-margin w3-margin-top">


                    <div class="card mb-3 mt-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= BASEURL . "/img/"  . $article['pic'];?>" class="card-img" alt="COVER">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title"><b><?=$article['title'];?></b></h2>
                                    <p class="card-text"><b><?=substr($article['content'], 0, 100);?>...</b></p>
                                    <p class="card-text"><small class="text-muted"><b>By
                                                <?=$article['author'];?></b></small></p>
                                    <div class="w3-col m8 s12">
                                        <p><a href="<?= BASEURL; ?>/article/detail/<?=$article['id']; ?>"
                                                class="w3-button w3-padding-large w3-black w3-border"><b>READ MORE »</b>
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <?php endforeach;?>

            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">
                <!-- About Card -->
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="<?= BASEURL; ?>/img/profile.jpg" style="width:100%">
                    <div class="w3-container w3-white">
                        <h4><b>Hello World!</b></h4>
                        <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love
                            and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with
                            you.
                        </p>
                    </div>
                </div>
                <hr>

                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding w3-black">
                        <h4>Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <img src="/w3images/workshop.jpg" alt="cover" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Coming Soon</span><br>
                            <span>Under Development...</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/w3images/gondol.jpg" alt="cover" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Coming Soon</span><br>
                            <span>Under Development...</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/w3images/skies.jpg" alt="cover" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Coming Soon</span><br>
                            <span>Under Development...</span>
                        </li>
                        <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                            <img src="/w3images/rock.jpg" alt="cover" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Coming Soon</span><br>
                            <span>Under Development...</span>
                        </li>
                    </ul>
                </div>
                <hr>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding w3-black">
                        <h4>Categories (Coming Soon!)</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-light-grey w3-margin-bottom">Travel</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span
                                class="w3-tag w3-yellow w3-small w3-margin-bottom">Clothing</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                        </p>
                    </div>
                </div>

                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div><br>

        <!-- END w3-content -->
    </div>