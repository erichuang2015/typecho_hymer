<!-- 分页 -->
<?php
    $this->pageNav(
        '«',
        '»',
        1,
        '...',
        array(
            'wrapTag' => 'ul',
            'wrapClass' => 'pagination justify-content-center mb-4',
            'itemTag' => 'li',
            'itemClass' => 'page-item',
            'textTag' => 'a',
            'currentClass' => 'active',
            'prevClass' => 'prev',
            'nextClass' => 'next',
        )
    );
?>