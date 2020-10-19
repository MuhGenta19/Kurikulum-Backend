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

    <div class="w3-container w3-center w3-padding-32">

        <div class="container">
            <div class="card">
                <img src="<?=BASEURL . "/img/" . $data['article']['pic'];?>" class=" img-thumbnail" alt="COVER">
                <div class="card-body">
                    <h1 class="card-title">
                        <b><?=$data['article']['title'];?></b>
                    </h1>
                    <p class="card-text"><small class="text-muted"><b>By <?=$data['article']['author'];?></b></small>
                    </p>
                    <hr class="my-4">
                    <p class="card-text text-left"><b><?=$data['article']['content']?></b></p>
                    <hr class="my-4">
                    <a href="<?=BASEURL;?>/article"
                        class="w3-button w3-padding-large w3-black w3-border float-left"><b>BACK »</b></a>
                    <a href="<?=BASEURL;?>/article/delete/<?=$data['article']['id'];?>"
                        class="w3-button w3-padding-large w3-black w3-border float-right"
                        onclick="return confirm('Are you sure you want to delete this article?');"><b>Delete</b></a>
                    <a href="<?=BASEURL;?>/article"
                        class="w3-button w3-padding-large w3-black w3-border float-right tampilModalUbah"
                        data-toggle="modal" data-target="#formModal"><b>Edit</b></a>
                </div>
            </div>
        </div>
    </div>


    </div>

    <!-- MODAL -->
    <div class="modal fade" id="formModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Edit Article</h4>
                </div>

                <div class="modal-body">
                    <form action="<?=BASEURL;?>/article/update" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?= $data['article']['id'] ?>">
                        <input type="hidden" name="gambarlama" id="gambarlama" value="<?= $data['article']['pic'] ?>">

                        <div class="form-group">
                            <label for="pic">Cover</label>
                            <input type="file" class="form-control" id="pic" name="pic">
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?= $data['article']['title']?>">
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" cols="30" rows="5" class="form-control"><?= $data['article']['content']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" id="author" name="author" value="<?= $data['article']['author']?>">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Done</button>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>