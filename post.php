<?php
/**
 * 文章详情页面
 * @package Hymer
 * @author Myxuan
 * @version 1.0.0
 * @link http://www.lmissy.cn
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <?php
    include('header.php')
    ?>
</head>
<body>
<?php
include('nav.php')
?>
<!-- 页面内容 -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-lg-8">
            <!-- Title -->
            <h1 class="mt-4"><?php $this->title() ?></h1>
            <!-- Author -->
            <p class="lead">
                by
                <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                at
                <span><?php $this->date('Y-m-d G:i'); ?></span>
            </p>
            <hr>
            <!-- Tags -->
            <div>
                <span>
                    <i class="fa fa-tags"></i><?php $this->tags('  ', true, ''); ?>
                </span>
                <span class="float-right">
                    <span><?php Postviews($this); ?></span>
                    <span><?php $this->commentsNum('评论(%d)', '评论(%d)'); ?></span>
                </span>
            </div>
            <hr>
            <!-- Preview Image -->
            <!--<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">-->
<!--            <hr>-->

            <!-- Post Content -->
            <div class="post-content">
                <?php $this->content('Continue Reading...'); ?>
            </div>
            <hr>
            <?php
            include('comments.php')
            ?>
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            <?php
            include('sidebar.php')
            ?>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<!-- Footer -->
<footer class="py-5 bg-dark">
    <?php
    include('footer.php')
    ?>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
