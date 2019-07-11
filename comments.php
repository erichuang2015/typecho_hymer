<!-- Comments Form -->
<?php if($this->allow('comment')): ?>
<div class="card my-4">
    <h5 class="card-header">添加新评论:</h5>
    <div class="card-body">
        <form class="comment" action="<?php $this->commentUrl() ?>" method="post">
            <!-- 如果当前用户已经登录 -->
            <?php if($this->user->hasLogin()): ?>
                <!-- 显示当前登录用户的用户名以及登出连接 -->
                <p>Logged in as <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>.
                    <a href="<?php $this->options->index('Logout.do'); ?>" title="Logout">Logout &raquo;</a>
                </p>
                <div class="form-group">
                    <textarea class="form-control" rows="3" style="vertical-align: middle;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

                <!-- 若当前用户未登录 -->
            <?php else: ?>
                <!-- 要求输入名字、邮箱、网址 -->
                <div class="form-group">
                    请先 <a href="<?php $this->options->adminUrl('login.php'); ?>">登录</a>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>
<?php endif; ?>

<?php $this->comments()->to($comments); ?>
<?php while($comments->next()): ?>
    <!-- Single Comment -->
    <div class="media mb-4" id="<?php $comments->theId(); ?>">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <div>
                <span class="h5"><?php $comments->author(); ?></span>
                <span><?php $comments->date('Y-m-d G:i'); ?></span>
            </div>
            <div class="comment-body">
                <?php $comments->content(); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<!-- Comment with nested comments -->
<!--<div class="media mb-4">-->
<!--    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">-->
<!--    <div class="media-body">-->
<!--        <h5 class="mt-0">Commenter Name</h5>-->
<!--        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
<!--        <div class="media mt-4">-->
<!--            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">-->
<!--            <div class="media-body">-->
<!--                <h5 class="mt-0">Commenter Name</h5>-->
<!--                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="media mt-4">-->
<!--            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">-->
<!--            <div class="media-body">-->
<!--                <h5 class="mt-0">Commenter Name</h5>-->
<!--                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->