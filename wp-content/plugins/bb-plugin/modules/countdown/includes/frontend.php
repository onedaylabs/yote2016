<?php 

	$counters = array(
		'days'		=> __( 'Day', 'fl-builder' ),
		'hours'		=> __( 'Hour', 'fl-builder' ),
		'minutes'	=> __( 'Minute', 'fl-builder' ),
		'seconds'	=> __( 'Second', 'fl-builder' ),
	);

 ?>

<div class="fl-countdown<?php if( $settings->layout == 'default' && $settings->show_separator == 'yes' && isset($settings->separator_type ) ) echo ' fl-countdown-separator-'. $settings->separator_type ?>">

	<?php foreach( $counters as $class => $label ): ?>
		<div class="fl-countdown-number fl-countdown-<?php echo $class ?>">
			<div class="fl-countdown-unit">
				<span class="fl-countdown-unit-number"></span>
				<div class="fl-countdown-unit-label" data-label="<?php echo $label ?>"><?php echo $label ?></div>
			</div>
			<?php if( $settings->layout == 'circle' ) : ?>
				<div class="fl-countdown-circle-container">
					<?php $module->render_circle(); ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
</div>