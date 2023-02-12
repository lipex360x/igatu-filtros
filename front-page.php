<?php 
  get_header(); 

  get_template_part('src/template-parts/hero/index');

  FilterSection();
  ElementSection();
?>

<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.1115583728138!2d-43.87840214997314!3d-19.792866839104395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x405e4117020392d%3A0x903cb7dbeee7b57b!2sIgatu+Filtros+Para+%C3%81gua+Ind%C3%BAstria+e+Com%C3%A9rcio+LTDA!5e0!3m2!1spt-BR!2sbr!4v1477509493318" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<h4>Contact Us</h4> 
 
<form id="form">
  <input type="text" name="text1" value="foo" />
  <input type="text" name="text2" value="bar" />
  <input type="text" name="text3" value="baz" />
  <input type="checkbox" name="check" value="hello" checked />
  <input type="submit" id="contact-form-submit" value="send">
</form>

<!-- 
 <form id="contact-form" action="<?php echo esc_url( get_permalink() ); ?>"
    method="post">

    <input type="hidden" name="contact_form">

    <div class="form-section">
        <label for="full-name"><?php echo esc_html( 'Full Name', 'twentytwentyone' ); ?></label>
        <input type="text" id="full-name" name="full_name">
    </div>

    <div class="form-section">
        <label for="email"><?php echo esc_html( 'Email', 'twentytwentyone' ); ?></label>
        <input type="text" id="email" name="email">
    </div>

    <div class="form-section">
        <label for="message"><?php echo esc_html( 'Message', 'twentytwentyone' ); ?></label>
        <textarea id="message" name="message"></textarea>
    </div>

    <input type="submit" id="contact-form-submit" value="<?php echo esc_attr( 'Submit', 'twentytwentyone' ); ?>">
</form> -->

<?php get_footer(); ?>
