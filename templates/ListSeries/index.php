<div id="header-secondary">
    <div class="inner-container">
        <nav class="filters">
            <ul>
                <li class="search">
                    <form method="get" role="form" id="searchform" autocomplete="off" action="">
                        <i class="fa fa-search"></i>
                        <input id="search" name="searchBySerieName" type="search" class="search-input" value="" placeholder="Rechercher...">
                    </form>
                    <div class="live-search"></div>
                </li>
                <li>
                    <?php
                    if ($this->Search->isSearch()) {
                        echo $this->Search->resetLink(__('Réinitialiser la recherche'), ['class' => 'active']);
                    }
                    ?>
                </li>
            </ul>
        </nav>
        <p id="slogan">Regarde tes films en ligne gratuitement ZEBI</p>
    </div>
</div>
<section id="content" class="inner-container">
    <!--    <div class="cookie-message notice show">-->
    <!--        <div class="notice-icon"><i class="fa fa-info-circle"></i></div>-->
    <!--        <p>Your personal online video library that allows you to watch streaming movies in high definition for free and-->
    <!--            without limits on PC, Smart TV, Console, tablet and smartphone.</p>-->
    <!--        <div class="close-notice"><i>x</i></div>-->
    <!--    </div>-->
    <div class="item-container">
        <?php foreach ($listSeries as $serie) : ?>
            <div class="item">
                <!--                <a href="https://codepen.io/vincenzopiromalli/pen/LYNpBgq">-->
                <div class="item-flip">
                    <div class="item-inner">
                        <img src="<?= 'https://image.tmdb.org/t/p/w370_and_h556_bestv2/prdFM08mGvVDA6uQxKJh8n8Vek1.jpg' ?>" alt="<?= $serie->serie_name ?>">
                    </div>
                    <div class="item-details">
                        <div class="item-details-inner">
                            <h2 class="movie-title"><?= $serie->serie_name ?></h2>
                            <p class="movie-description">Test text zebi</p>
                            <div class="watch-btn">
                                <div class="imdb-rating" data-content="6.2">
                                    <i class="fa fa-star"></i>6.2
                                </div>
                                <span class="movie-date">2020</span>
                                <span>
                                    <?= $this->Html->link(__('Play'),
                                        [
                                            'label' => 'bonjour',
                                            'controller' => 'Series',
                                            'action' => 'view',
                                            $serie->id
                                        ],
                                        [
                                            'escape' => false,
                                            'class' => 'test',
                                        ]
                                    ); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                </a>-->
            </div>
        <?php endforeach; ?>
        <div class="pagination">
<!--            <span class="current">1</span><a href='/page/2/' class="inactive">2</a>-->
<!--            <a href='/page/3/' class="inactive">3</a>-->
            <?= $this->Paginator->numbers(
                array(
                    'separator' => '',
                    'currentTag' => 'a',
                    'tag' => 'li',
                    'class' => 'inactive',
                    'currentClass' => 'disabled page-link',
                    ' class' => 'page-link'
                )
            );
            ?>
        </div>
        <div class='resppages'>
<!--            <a href="/page/2/"><span class="fa fa-caret-right"></span>-->
<!--            </a>-->

        </div>
        <div>
            <?= $this->Paginator->numbers(
                [
                    'separator' => '',
                    'currentTag' => 'a',
                    'tag' => 'li',
                    'class' => 'page-item',
                    'currentClass' => 'disabled page-link',
                    ' class' => 'page-link'
                ]
            );
        ?>
            </div>
    </div>
</section>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<?php $this->start('script'); ?>
<?= $this->AssetMix->css('slider'); ?>
<?= $this->AssetMix->script('slider'); ?>
<?php $this->end(); ?>

