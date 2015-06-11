<?php
/**
 *	The template for displaying Header.
 *
 *	@package flatpress
 */
?>
			<?php if ( apply_filters( 'show_flat_credits', true ) ) : ?>
				<?php flat_hook_footer_before(); ?>
				<footer class="site-info" itemscope itemtype="http://schema.org/WPFooter">
					<?php flat_hook_footer_top(); ?>
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'flatpress' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'flatpress' ); ?>"><?php printf( __( 'Proudly powered by %s', 'flatpress' ), 'WordPress' ); ?></a>.
				</footer>
				<?php flat_hook_footer_after(); ?>
			<?php endif; ?>
				<?php flat_hook_content_bottom(); ?>
			</div>
			<?php flat_hook_content_after(); ?>
		</div>
	</div>
</div>
<?php flat_hook_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>