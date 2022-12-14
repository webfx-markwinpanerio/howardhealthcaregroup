<section class="image-buttons bg-gray section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="title-heading text-center">
                    <?php if($subheading = get_field('subheading')): ?>
                        <h5 class="center"><span><?php echo $subheading; ?></span></h5>
                    <?php endif; ?>
                    <?php if($title = get_field('title')): ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if($description = get_field('description')): ?>
                        <?php echo $description; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row image-buttons__row">
            <?php if(have_rows('image_buttons')): ?>
            <?php while(have_rows('image_buttons')): the_row(); ?>
            <div class="col-lg-4 col-sm-6 col-xxs-12">
                <a class="image-button image-button--link<?php echo get_sub_field('description') ? '' : ' image-button--no-description'; ?>" href="<?php echo get_sub_field('link')['url']; ?>"<?php echo get_sub_field('link')['target'] ? ' target="' . get_sub_field('link')['target'] . '"': ''; ?>>
                    <?php echo fx_get_image_tag(get_sub_field('image'), 'image-button__img'); ?>
                    <div class="image-button__hidden">
                        <div class="image-button__hidden__content">
                            <?php if($image_button_title = get_sub_field('title')): ?>
                                <h4 class="image-button__title"><?php echo $image_button_title; ?></span></h4>
                            <?php endif; ?>
                            <?php if($image_button_description = get_sub_field('description')): ?>
                                <span class="image-button__description"> <?php echo $image_button_description; ?> </span>
                            <?php endif; ?>
                        </div>
                        <div class="image-button__cta">
                            <span class="h4 image-button__cta__title"><?php echo $image_button_title; ?></span>
                            <span class="btn btn-tertiary">Read More</span>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>