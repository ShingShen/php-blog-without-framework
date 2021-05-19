<?php include("path.php");?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 

if (isset($_GET['id'])) {
$post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?> | ShemShen</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dbd8bf1e56.js" crossorigin="anonymous"></script>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Facebook Page Plugin SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" 
    src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v9.0" nonce="VanFnhCD">
    </script>
    <?php include("app/includes/header.php");?>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Content -->
        <div class="content clearfix">
            <!-- Main Content Wrapper -->
            <div class="main-content-wrapper">
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>
                <div class="post-content">
                   <?php echo html_entity_decode($post['body']); ?> 
                </div>
            </div>
            </div>
            <!-- //Main Content -->
            <!-- Sidebar -->
            <div class="sidebar single">
                <div class="fb-page" data-href="https://www.facebook.com/shemshen31415926535" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/shemshen31415926535" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/shemshen31415926535">Shem Shen</a>
                    </blockquote>
                </div>
                <div class="section popular">
                    <h2 class="section-title">Popular</h2>
                    
                    <?php foreach ($posts as $p): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <a href="" class="title">
                            <h4><?php echo $p['title'] ?></h4>
                        </a>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $topic): ?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- //Sidebar -->
        </div>
        <!-- //Content -->
    </div>
    <!-- //Page Wrapper -->
    <!-- footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php");?>
    <!-- //footer -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>