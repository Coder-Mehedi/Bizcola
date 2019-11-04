<?php require_once (dirname(__FILE__)."/../include/acf_query/portfolio_query.php"); ?>


<!-- portfolio area start -->
    <section class="portfolio-area section-padding">
        <div class="container" id="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown"><?php echo $recent_project_section_title ? $recent_project_section_title : ''; ?></h2>
                        <p class="wow fadeInUp"><?php echo $recent_project_section_description ? $recent_project_section_description : ''; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInDown">
                    <div class="filtering-btn">
                        <ul class="filter-button-group">
                            <li class="filter-btn active-btn" data-filter="*">All</li>
                            <li class="filter-btn" data-filter=".cat1">Air cargo</li>
                            <li class="filter-btn" data-filter=".cat2">Sea shipping</li>
                            <li class="filter-btn" data-filter=".cat3">Road Transport </li>
                            <li class="filter-btn" data-filter=".cat4">Lighter ship</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row grid">
                
            <!-- Air Cargo -->
        <?php if($recent_project_air_cargos): ?>
            <?php foreach($recent_project_air_cargos as $recent_project_air_cargo): ?>
                <div class="col-lg-5 col-md-7 grid-item cat1 wow fadeInDown">
                    <div class="port-img">
                        <a href="<?php echo $recent_project_air_cargo['url'] ?>" data-fancybox="images" data-caption="image 2">
                            <img src="<?php echo $recent_project_air_cargo['url'] ?>" alt="portlio-image">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if($recent_project_sea_shippings): ?>
            <?php foreach($recent_project_sea_shippings as $recent_project_sea_shipping): ?>

                <div class="col-lg-3 col-md-5 grid-item cat2 wow fadeInDown">
                    <div class="port-img">
                        <a href="<?php echo $recent_project_sea_shipping['url'] ?>" data-fancybox="images" data-caption="image 3">
                            <img src="<?php echo $recent_project_sea_shipping['url']; ?>" alt="portlio-image">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php if($recent_project_road_transports): ?>
        <?php foreach($recent_project_road_transports as $recent_project_road_transport): ?>    
                
                <div class="col-lg-4 col-md-7 grid-item cat3  wow fadeInUp">
                    <div class="port-img">
                        <a href="<?php echo $recent_project_road_transport['url'] ?>" data-fancybox="images" data-caption="image 6">
                            <img src="<?php echo $recent_project_road_transport['url'] ?>" alt="portlio-image">
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>

    <?php if($recent_project_lighter_ships): ?>
        <?php foreach($recent_project_lighter_ships as $recent_project_lighter_ship): ?> 

        <div class="col-lg-5 col-md-6 grid-item cat4 wow fadeInDown">
            <div class="port-img">
                <a href="<?php echo $recent_project_lighter_ship['url']; ?>" data-fancybox="images" data-caption="image 1">
                    <img src="<?php echo $recent_project_lighter_ship['url']; ?>" alt="portlio-image">
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>


            </div>
        </div>
    </section>
    <!-- project area end -->