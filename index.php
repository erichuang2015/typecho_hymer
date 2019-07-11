<?php
/**
 * 追梦人
 *
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
        <div class="col-md-8">
            <div class="my-4"></div>
            <?php include('list.php') ?>
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
