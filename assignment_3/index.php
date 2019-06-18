<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'News',
    'items' => Array(
        'News' => '/xampp/assignment_3/index.php',
        'Add news item' => '/xampp/assignment_3/news_add.php',
        'leapyear' => '/xampp/assignment_3/leapyear.php',
        'edit' => '/xampp/assignment_3/news_edit.php',
        'simpleform' => '/xampp/assignment_3/simple_form.php'
    )
);
include __DIR__ . '/tpl/head2.php';
include __DIR__ . '/tpl/body_start.php';


?>


    <div class="pd-40">
    <div class="row">
        <div class="col-md-12" id="news_container">
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
        </div>
    </div>



<?php
include __DIR__ . '/tpl/body_end.php';
?>