<!-- Search Widget -->
<div class="card my-4">
<!--    <h5 class="card-header">Search</h5>-->
    <div class="card-body">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" name="s" class="form-control" placeholder="搜索">
                <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
            </div>
        </form>
    </div>
</div>
<!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">标签</h5>
    <div class="card-body">
        <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
        <?php while($tags->next()): ?>
            <a style="color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)"
               href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'>
                <?php $tags->name(); ?>
            </a>
        <?php endwhile; ?>
    </div>
</div>
<!-- 归档 -->
<div class="card my-4">
    <h5 class="card-header">归档</h5>
    <div class="card-body">
        <ul>
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </div>
</div>
<!--<div class="card my-4">-->
<!--    <h5 class="card-header">Side Widget</h5>-->
<!--    <div class="card-body">-->
<!--        test-->
<!--    </div>-->
<!--</div>-->