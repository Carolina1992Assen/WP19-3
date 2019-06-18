<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'edit',
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

<?php

if (isset($_POST['id'])) {
    // Read articles
    $json_file = file_get_contents("data/articles.json");
    $articles = json_decode($json_file, true);
    $articles = array_reverse($articles);
    // Get article information
    $article_id = '';
    $article_title = '';
    $article_txt = '';
    foreach ($articles as $key => $value) {
        if ($value['id'] == $_POST['id']) {
            $article_id = $value['id'];
            $article_title = $value['title'];
            $article_txt = $value['article'];
        }
    }
}

?>


    <div class="pd-40"></div>
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

if (isset($_POST['submit'])) {
    // Read articles
    $json_file = file_get_contents("../data/articles.json");
    $articles = json_decode($json_file, true);
    // Get article key
    foreach ($articles as $key => $value){
        if ($value['id'] == $_POST['article_id']){
            $article_key = $key;
        }
    }
    // Edit article
    $articles
    [$article_key] = ['id' => $_POST['article_id'],
        'date' => time(),
        'title' => $_POST['title'],
        'article' => $_POST['article']];

 // Save to external file
 $json_file = fopen('articles.json', 'w');
 fwrite($json_file, json_encode($articles));
 fclose($json_file);
 // Redirect to homepage
 header("Location: ../");
 die();
}

?>

<?php
include __DIR__ . '/tpl/body_end.php';
?>
