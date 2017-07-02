<?php

/*
Template Name: accueil.php
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package understrap
*/
get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
    <?php get_template_part('global-templates/hero', 'none'); ?>
<?php endif; ?>

    <div class="wrapper" id="wrapper-index">

        <div class="<?php echo esc_attr($container); ?> accueil" id="content" tabindex="-1">

            <div class="row">
                <div class="col-lg-6 ">
                    <h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/src/logo.png" ></a></h1>
                </div>
            <div class="col-lg-6 infos">
                <div class="row ">
                    <a href="#" class="reservation">Réservation</a>
                </div>
                <div class="row">
                    <a href="#" class="adresse">1190 Rue St-Jean, Vieux-Québec</a>
                </div>
                <div class="row">
                    <a href="tel:1-418-692-5524" class="telephone">418-692-5524</a>
                </div>
            </div>
            <main class="site-main" id="main">

            </main><!-- #main -->

            <!-- The pagination component -->
            <?php understrap_pagination(); ?>

        </div><!-- #primary -->


    </div><!-- .row -->


    </div><!-- Wrapper end -->
<div class="wrapper-hour">
    <div class="row">
        <div class="col-lg-12 heures">
            <p>c'est quand</p>
            <p>dimanche-jeudi<span>11h-22h</span></p>
            <p>vendredi-samedi<span>11h-23h</span></p>
        </div>
    </div>
</div>

<div class="wrapper-menu">
    <div class="row">
        <div class="col-lg-8">
            <div id="tabs" class="tabs">
                <nav class="cl-effect-7">
                    <ul>
                        <li><a href="#section-1"  ><span>Entrées</span></a></li>
                        <li><a href="#section-2" ><span>Plats</span></a></li>
                        <li><a href="#section-3" ><span>Desserts</span></a></li>
                        <li><a href="#section-4" ><span>Menu enfants</span></a></li>
                        <li><a href="#section-5" ><span>Menu midi</span></a></li>
                        <li><a href="#section-6" ><span>Table d'hôte</span></a></li>
                    </ul>
                </nav>
                <div class="content">
                    <section id="section-1">
                        <div class="mediabox">
                            <h3>Sushi Gumbo Beetroot</h3>
                            <p>Sushi gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Pea Sprouts Fava Soup</h3>
                            <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Turnip Broccoli Sashimi</h3>
                            <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip.</p>
                        </div>
                    </section>
                    <section id="section-2">
                        <div class="mediabox">
                            <h3>Asparagus Cucumber Cake</h3>
                            <p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
                        </div>
                        <div class="mediabox">
                            <h3>Magis Kohlrabi Gourd</h3>
                            <p>Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Ricebean Rutabaga</h3>
                            <p>Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. </p>
                        </div>
                    </section>
                    <section id="section-3">
                        <div class="mediabox">
                            <h3>Noodle Curry</h3>
                            <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea.Sushi gumbo beet greens corn soko endive gumbo gourd.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Leek Wasabi</h3>
                            <p>Sushi gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Green Tofu Wrap</h3>
                            <p>Pea horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut wasabi tofu broccoli mixture soup.</p>
                        </div>
                    </section>
                    <section id="section-4">
                        <div class="mediabox">
                            <h3>Tomato Cucumber Curd</h3>
                            <p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
                        </div>
                        <div class="mediabox">
                            <h3>Mushroom Green</h3>
                            <p>Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Swiss Celery Chard</h3>
                            <p>Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. </p>
                        </div>
                    </section>
                    <section id="section-5">
                        <div class="mediabox">
                            <h3>Radish Tomato</h3>
                            <p>Catsear cauliflower garbanzo yarrow salsify chicory garlic bell pepper napa cabbage lettuce tomato kale arugula melon sierra leone bologi rutabaga tigernut.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Fennel Wasabi</h3>
                            <p>Sea lettuce gumbo grape kale kombu cauliflower salsify kohlrabi okra sea lettuce broccoli celery lotus root carrot winter purslane turnip greens garlic.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Red Tofu Wrap</h3>
                            <p>Green horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut wasabi tofu broccoli mixture soup.</p>
                        </div>
                    </section>
                    <section id="section-6">
                        <div class="mediabox">
                            <h3>Radish Tomato</h3>
                            <p>Catsear cauliflower garbanzo yarrow salsify chicory garlic bell pepper napa cabbage lettuce tomato kale arugula melon sierra leone bologi rutabaga tigernut.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Fennel Wasabi</h3>
                            <p>Sea lettuce gumbo grape kale kombu cauliflower salsify kohlrabi okra sea lettuce broccoli celery lotus root carrot winter purslane turnip greens garlic.</p>
                        </div>
                        <div class="mediabox">
                            <h3>Red Tofu Wrap</h3>
                            <p>Green horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut wasabi tofu broccoli mixture soup.</p>
                        </div>
                    </section>
                </div><!-- /content -->
            </div><!-- /tabs -->

        </div>
    </div>
</div>


<?php get_footer(); ?>