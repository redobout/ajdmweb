<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ajdm
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ajdm' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ajdm' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ajdm' ), 'ajdm', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
            
 <div class="reseaux-sociaux">
    <a href="https://www.facebook.com">
    <!--img class="facebook" title="Facebook" alt="Facebook" src="/ajdm/wp-content/themes/ajdm_enfant_Boutemine/assets/images/facebook.png" width="35" height="35" /-->
   
     <img id="facebook" src="/ajdm/wp-content/themes/ajdm_enfant_Boutemine/assets/images/facebook.png" width="35" height="35">
     
     </a>

    <a class="linkedin" href="https://www.linkedin.com">
    <!--img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin1.png" width="35" height="35" /-->
    </a>

     <a class="twitter" href="[full link to your Twitter]">
     <!--img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/twitter.png" width="35" height="35" /-->  
    </a>


    <a class="youtube" href="https://www.youtube.com">
    <!--img title="Youtube" alt="Youtube" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest1.png" width="35" height="35" /-->
    </a>
</div>
            
            
            
            
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
