<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$uniqClass = 'woolentorblock-'.$settings['blockUniqId'];
$areaClasses = array( $uniqClass, 'woolentorfaq-block-area' );
$classes = array( 'htwoolentor-faq' );

!empty( $settings['align'] ) ? $areaClasses[] = 'align'.$settings['align'] : '';
!empty( $settings['className'] ) ? $areaClasses[] = esc_attr( $settings['className'] ) : '';
!empty( $settings['iconPosition'] ) ? $classes[] = 'woolentorfaq-icon-pos-'.$settings['iconPosition'] : '';

$icon = '<span class="htwoolentor-faq-head-indicator"></span>';

$accordion_settings = [
	'showitem' => ( $settings['showFirstItem'] === true ),
];
$dataOptions = 'data-settings='.wp_json_encode( $accordion_settings );

?>
<div class="<?php echo esc_attr(implode(' ', $areaClasses )); ?>">
	<div class="<?php echo esc_attr(implode(' ', $classes )); ?>" id="<?php echo esc_attr('htwoolentor-faq-'.$settings['blockUniqId']); ?>" <?php echo esc_attr($dataOptions); ?>>

		<?php
			foreach ( $settings['faqList'] as $item ):
				
				$title = ( !empty( $item['title'] ) ? '<span class="htwoolentor-faq-head-text">'.esc_html($item['title']).'</span>' : '' );

			?>
				<div class="htwoolentor-faq-card">
					<?php
						if( $settings['iconPosition'] == 'right'){
							echo sprintf( '<div class="htwoolentor-faq-head">%2$s %1$s</div>',$icon, $title ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						}else{
							echo sprintf( '<div class="htwoolentor-faq-head">%1$s %2$s</div>',$icon, $title ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						}
					?>
					<div class="htwoolentor-faq-body">
						<div class="htwoolentor-faq-content">
							<?php 
								if ( !empty( $item['content'] ) ) {
									echo wp_kses_post( $item['content'] );
								}
							?>
						</div>
					</div>
				</div>
				
			<?php
			endforeach;
		?>

	</div>
</div>