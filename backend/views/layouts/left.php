<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [

                        YII_ENV ==='dev'?['label'=>'CMS','icon'=>'th-list','url'=>['/cms/home']]:[],

                    ['label' => 'Меню', 'options' => ['class' => 'header']],
                    ['label' => 'Главное меню', 'icon' => 'th-list', 'url' => ['/cms/menu/index?slug=main']],
                    ['label' => 'Полезные ссылки', 'icon' => 'th-list', 'url' => ['/cms/menu/index?slug=footer']],
                    ['label' => 'Контент', 'options' => ['class' => 'header']],
                    ['label' => 'Слайдер', 'icon' => 'image', 'url' => ['/cms/items/index?slug=slayd']],
                    ['label' => '"О нас" в главной', 'icon' => 'vcard', 'url' => ['/cms/items/view?id=27&slug=about-us']],
                    ['label' => 'Партнеры', 'icon' => 'apple', 'url' => ['/cms/items/index?slug=partners']],
                    ['label' => 'Инфраструктура', 'icon' => 'list-alt', 'url' => ['/cms/items/index?slug=infrastructure']],
                    ['label' => 'География покрытия', 'icon' => 'globe', 'url' => ['/cms/items/index?slug=map']],
                    ['label' => 'Мы в цифрах', 'icon' => 'bar-chart', 'url' => ['/cms/items/index?slug=counters']],
                    ['label' => 'Новости', 'icon' => 'newspaper-o', 'url' => ['/cms/items/index?slug=news']],
                    ['label' => 'Kоманда', 'icon' =>'users', 'url' => ['/cms/items/index?slug=team']],
                    ['label' => 'Страницы', 'icon' =>'clone', 'url' => ['/cms/items/index?slug=pages']],
                    ['label' => 'Инфо', 'options' => ['class' => 'header']],
                    ['label' => 'Контакты', 'icon' => 'phone', 'url' => ['/cms/unit-categories/unit?slug=contacts']],
                    ['label' => 'Соц. сети', 'icon' => 'telegram', 'url' => ['/cms/unit-categories/unit?slug=socials']],
                    ['label' => 'Прочее', 'options' => ['class' => 'header']],
                    ['label' => 'Оставленные сообщения', 'icon' => 'envelope', 'url' => ['/contact']],
            ],
            ]
        ) ?>
    </section>
</aside>
