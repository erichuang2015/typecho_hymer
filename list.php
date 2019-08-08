<!-- 博文列表 -->
<?php while($this->next()): ?>
    <div class="card mb-4">
        <!--<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">-->
        <div class="card-body">
            <div class="card-title">
                <span class="title"><?php $this->title() ?></span>
                <span class="tags">
                    <i class="fas fa-tags"></i>
                    <?php $this->tags('  ', true, ''); ?>
                </span>
            </div>
            <p class="card-text">
                <?php $this->excerpt(100, '...'); ?>
            </p>
            <a href="<?php $this->permalink() ?>" class="btn btn-primary">阅读更多 &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            发表于 <?php $this->date(); ?> by
            <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
            <div class="float-right">
                <span><?php Postviews($this); ?></span>
                <span><?php $this->commentsNum('评论(%d)', '评论(%d)'); ?></span>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php
    include('pagination.php')
?>
