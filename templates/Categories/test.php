<div class="item-container">
    <?php foreach ($listSeries as $serie) : ?>
    <div class="item">
        <a href="https://codepen.io/vincenzopiromalli/pen/LYNpBgq">
            <div class="item-flip">
                <div class="item-inner">
                    <img src="<?= $serie->serie_image ?>" alt="<?= $serie->serie_name ?>">
                </div>
                <div class="item-details">
                    <div class="item-details-inner">
                        <h2 class="movie-title"><?= $serie->serie_name ?></h2>
                        <p class="movie-description">Description ta grand mère</p>
                        <div class="watch-btn">
                            <div class="imdb-rating" data-content="6.3">
                                <i class="fa fa-star"></i>UNE NOTE /10</div>
                            <span class="movie-date">MOVIE DATE</span>
<!--                            <span>Play</span>-->
                            <?= $this->Html->link(
                                [
                                    'controller'=> 'Series',
                                    'action' => 'view',
                                    $serie->id
                                ],
                                [
                                    'escape' => false,
                                    'class' => 'test',
                                ]
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; ?>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<?php $this->start('script'); ?>
<?= $this->AssetMix->css('slider'); ?>
<?= $this->AssetMix->script('slider'); ?>
<?php $this->end(); ?>

















<body>
<div class="wrapper">

    <!-- MAIN CONTAINER -->
    <section class="main-container" >
        <?php foreach ($categories as $category) : ?>
            <div class="location" id="home">
                <h1 id="home"><?= ucfirst(h($category->name)) ?></h1>
                <div class="box">
                    <!--                --><?php //dd($category->list_series) ?>
                    <?php foreach ($category->list_series as $serie) : ?>
                        <?= $this->Html->link(
                            $this->Html->image($serie->serie_image, ["alt" => $serie->serie_name]),
                            [
                                'controller'=> 'Series',
                                'action' => 'view',
                                $serie->id
                            ],
                            ['escape' => false]
                        ); ?>

                        <!-- FORMAT HTML CI-DESSOUS -->
                        <!--                <a href=""><img src="--><?php //$serie->serie_image ?><!--" alt=""></a>-->
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <h1 id="myList">Trending Now</h1>
        <div class="box">
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t2.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t3.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t4.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t5.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t6.PNG?raw=true" alt=""></a>
        </div>

        <h1 id="tvShows">TV Shows</h1>
        <div class="box">
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv1.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv2.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv3.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv4.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv5.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv6.PNG?raw=true" alt=""></a>

            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv7.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv8.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv9.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv10.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv11.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv12.PNG?raw=true" alt=""></a>
        </div>


        <h1 id="movies">Blockbuster Action & Adventure</h1>
        <div class="box">
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m1.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m2.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m3.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m4.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m5.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m6.PNG?raw=true" alt=""></a>
        </div>

        <h1 id="originals">Netflix Originals</h1>
        <div class="box">
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o1.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o2.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o3.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o4.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o5.PNG?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o6.PNG?raw=true" alt=""></a>
        </div>

        <!-- END OF MAIN CONTAINER -->

        <!-- LINKS -->
        <section class="link">
            <div class="logos">
                <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
                <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
            </div>
            <div class="sub-links">
                <ul>
                    <li><a href="#">Audio and Subtitles</a></li>
                    <li><a href="#">Audio Description</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Gift Cards</a></li>
                    <li><a href="#">Media Center</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Legal Notices</a></li>
                    <li><a href="#">Corporate Information</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </section>
        <!-- END OF LINKS -->
</div>
</body>

<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
<?php $this->start('script'); ?>
<?= $this->AssetMix->css('slider'); ?>
<?php $this->end(); ?>

