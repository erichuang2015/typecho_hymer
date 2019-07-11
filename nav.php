<!-- 导航条 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php $this->options->siteUrl(); ?>">首页</a>
                </li>
                <?php $this->widget('Widget_Metas_Category_List@options', 'ignore=1')->to($category); ?>
                <?php
                while($category->next()):
                    if ($category->levels == 0):
                        $children = $category->getAllChildren($category->mid);
                        if (empty($children)):
                ?>
                            <li>
                                <a class="nav-link" href="<?php $category->permalink(); ?>">
                                    <?php $category->name(); ?>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php $category->permalink(); ?>">
                                    <?php $category->name(); ?>
                                </a>
                                <?php
                                foreach ($children as $mid) {
                                    $child = $category->getCategory($mid);
                                    ?>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo $child['permalink'] ?>">
                                            <?php echo $child['name'] ?>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                            </li>
                <?php
                        endif;
                    endif;
                endwhile;
                ?>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                    <?php if($pages->fields->show): ?>
                    <li>
                        <a class="nav-link" href="<?php $pages->permalink(); ?>">
                            <?php $pages->title(); ?>
                        </a>
                    </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</nav>