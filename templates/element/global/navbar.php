<nav class="mobile-nav">
    <ul>
        <li class="active">
<!--            <i class="fa fa-film"></i>-->
                <?= $this->Html->link(
                    '<i class="fa fa-film"></i>',
//                   __('Films'),

                    [
                        'controller' => 'Series',
                        'action' => 'view',
                        1
                    ],
                    [
                        'escape' => false,
                        'class' => 'test',
                    ]
                ); ?>
<!--            </span>-->
        </li>
        <li><a href="/genre/in-theaters/"><i class="fa fa-ticket"></i><span>In Theaters</span></a></li>
        <li><a href="/top/"><i class="fa fa-trophy"></i><span>Top</span></a></li>
        <li><a href="/random/"><i class="fa fa-random"></i><span>Random</span></a></li>
        <li><a href="/genre/tv-series/"><i class="fa fa-desktop"></i><span>TV Series</span></a></li>
        <li><a href="/contact/"><i class="fa fa-envelope"></i><span>Contact us</span></a></li>
        <li><a href="/feed"><i class="fa fa-rss"></i><span>Feed</span></a></li>
    </ul>
</nav>
