<?php $socials = get_field('social_settings_repeater', 'widget_follow_us_widget-2'); ?>

<div class="follow-us">
    <h4 class=" wow fadeInUp">
        <?php the_field('follow_us_title', 'widget_follow_us_widget-2'); ?>
        </h4>
    <div class="footer-follow wow fadeInUp">
        <p>
        <?php the_field('follow_us_description', 'widget_follow_us_widget-2'); ?>
        </p>

    <?php foreach($socials as $social): ?>
        <a href="<?php echo $social['account_profile_url'] ?>"><?php echo $social['add_social_accounts']; ?></a>
    <?php endforeach; ?>

    </div>
    <h4 class=" wow fadeInUp">
        <?php the_field('follow_us_widget_second_title', 'widget_follow_us_widget-2'); ?>
    </h4>
    <p class=" wow fadeInUp">
        <?php the_field('secondary_follow_us_description', 'widget_follow_us_widget-2'); ?>
    </p>
    <form action="<?php the_field('subscribe_button_action_url', 'widget_follow_us_widget-2'); ?>" class="subscrib">
        <div class="input wow fadeInUp">
            <input type="email" placeholder="Email">
        </div>
        <div class="input mb-0  wow fadeInUp">
            <input type="submit" class="submit theme-btn" value="<?php the_field('subscribe_button_text', 'widget_follow_us_widget-2'); ?>">
        </div>
    </form>
</div>