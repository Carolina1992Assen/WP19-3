
<div class="card text-center news-card">
    <div class="card-header">Peilingwijzer: VVD en Forum voor...</div>
    <div class="card-body"><h5 class="card-title">Peilingwijzer: VVD en ...</h5>
        <p class="card-text">In de nieuwste Peilingwijzer zijn de VVD en ...</p>
        <div class="row">
            <div class="col-md-6" style="text-align: right;">
                <form action="news_edit.php" method="POST">
                    <input type="hidden" name="id" value="1">
                    <button type="submit" class="btn btn-light">Edit</button>
                </form>
            </div>
            <div class="col-md-6" style="text-align: left;">
                <button class="btn btn-danger article_remove" article-id="1">Remove</button>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted">Wednesday 1 May 2019 13:02</div>
</div>


<div class="pd-40"></div>
<div class="row">
    <div class="col-md-12">
        <form action="/xampp/assignment_3/scripts/edit_item.php" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $article_title ?> ">
            </div>
            <div class="form-group">
                <label for="article">Article</label>
                <textarea class="form-control" id="article" name="article" rows="3"><?= $article_txt ?>/textarea>
            </div>
            <input type="hidden" name="article_id" value="// $article_id" />
            <div id="subm">hello</div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>