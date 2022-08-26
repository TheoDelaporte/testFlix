<nav class="mobile-nav">
    <ul>
        <li class="active">
                <?= $this->Html->link(
                    '<i class="fa fa-film"></i><span>Films</span>',
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
        </li>
        <li class="">
            <?= $this->Html->link(
                '<i class="fa fa-ticket"></i><span>Test</span>',
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
        </li>
        <li class="">
            <?= $this->Html->link(
                '<i class="fa fa-trophy"></i><span>Top</span>',
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
        </li>
        <li class="">
            <?= $this->Html->link(
                '<i class="fa fa-random"></i><span>Sélection Aléatoire</span>',
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
        </li>
        <li class="">
            <?= $this->Html->link(
                '<i class="fa fa-desktop"></i><span>Séries</span>',
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
        </li>
        <li class="">
            <?= $this->Html->link(
                '<i class="fa fa-envelope"></i><span>Proposer du contenu</span>',
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
        </li>
        <li class="">
            <?= $this->Html->link(
                '<i class="fa fa-rss"></i><span>Les nouveautés</span>',
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
        </li>
    </ul>
</nav>
