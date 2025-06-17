<?php get_header(); ?>

<main class="container">
  <div class="gallery-column">
    <div class="gallery">
      <h3>Słoneczne Chaty</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/images/sloneczne chaty/7.jpg" alt="Słoneczne Chaty" data-gallery="1" />
    </div>
    <div class="gallery">
      <h3>Słoneczna Chata</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/images/Sloneczna chata/2.jpg" alt="Słoneczna Chata" data-gallery="2" />
    </div>
    <div class="gallery">
      <h3>Chata Jarka</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/images/chatajarka/dom JAREK.JPG" alt="Chata Jarka" data-gallery="0" />
    </div>
  </div>

  <div class="description">
    <!-- tu wkleiłem cały opis, możesz dodać shortcode lub pobrać z edytowalnego wpisu -->
    <p>W sercu malowniczej Kasiny Wielkiej... (itd.)</p>
  </div>
</main>

<!-- Modal + Kontakt -->
<?php get_template_part('partials/modal-contact'); ?>

<?php get_footer(); ?>