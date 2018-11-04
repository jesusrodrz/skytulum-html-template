<?php
/**
 * Template Name: Modelos
 * @since 1.0
 * @version 1.0
 */

get_header();
?>
<?php 
    if ( have_posts() ) : 
      while ( have_posts() ) : the_post();
      $post_id = get_the_ID();
      $post_meta = get_post_meta( $post->ID,  'modelos_custom_field', true ); 
        if (isset($post_meta['hero'])) {
          $title = $post_meta['hero']['title'];
          $imgs = $post_meta['hero']['gallery'];
        } else {
          $title = the_title();
          $img = get_stylesheet_directory_uri() . '/dist/assets/img/interior.jpg';
        }

      ?>  
        <section class="hero section" id="slider">
          <h1 class="hero__title title-1 bg-square-2"><?php esc_html_e( $title, 'sky-tulum' );?></h1>
          <?php	
              if(is_array($imgs) &&  isset($post_meta['hero']['gallery']) ) {
              
                foreach ($imgs as $index => $img):
                ?>
                  <img class="hero__img <?php echo ($index == 0) ? 'active' : '';?>" src="<?php echo $img;?>" alt="interior apartamento">
                <?php
                endforeach;
              }
            ?>
          
          <img class="hero__flor" src="<?php get_asset('assets/img/flordevida.png')?>" alt="flor de la vida">
        </section> 
<?php 
  endwhile;
  endif;
?>
<section class="section-models models">
<?php $loop = new WP_Query( array( 'post_type' => 'models', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php 
  $post_id = get_the_ID();

  $post_meta = get_post_meta( $post_id,  'models_custom_field', true );
  // isset($post_meta['gallery'])
?> 
<?php 
// if ( isset( $post_meta['area'] ) ) echo $post_meta['area']); 
?>
  <article class="models__item">
    <h2 class="models__title section__title title-2 bg-square-center t-uppercase"> <?php the_title();?></h2>
    <div class="models__description">
      <p class="models__text"> <?php 
        if (isset($post_meta['area'])) esc_html_e( $post_meta['area'], 'sky-tulum' ); 
      ?></p>
      <ul class="models__list">
        <?php	
          if (isset($post_meta['list'])) {

            $list_items = $post_meta['list'];
            foreach ($list_items as $index => $item):
              if ($item == '' || $item == ' ') {continue;}
            ?>
              <li class="models__list-item"><?php esc_html_e( $item, 'sky-tulum' );?></li>
            <?php
            endforeach;
          }      
        ?>
      </ul>
    </div>
    <figure class="models__fig">
      <img class="models__img" src="<?php 
        if (isset($post_meta['image'])) echo $post_meta['image']; 
      ?>" alt=""/>
      <?php 
      if (isset($post_meta['sell'])) echo '<span class="models__sold">Vendido</span>'; 
      ?>
    </figure>
  </article>
<?php endwhile; wp_reset_query(); ?>
</section>
<?php 
 
get_footer();