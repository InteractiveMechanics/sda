<?php
/**
 * Events Navigation Bar Module Template
 * Renders our events navigation bar used across our views
 *
 * $filters and $views variables are loaded in and coming from
 * the show funcion in: lib/Bar.php
 *
 * @package TribeEventsCalendar
 *
 */
?>

<?php

$filters = tribe_events_get_filters();
$views   = tribe_events_get_views();

$current_url = tribe_events_get_current_filter_url();
$path_array = array_filter(explode('/', $_SERVER['REQUEST_URI']));
if (empty($path_array[count($path_array)])) {
    $last_path = $path_array[count($path_array) - 1];
} else {
    $last_path = $path_array[count($path_array)];
}
?>

<?php do_action( 'tribe_events_bar_before_template' ) ?>
<div id="tribe-events-bar">

	<form id="tribe-bar-form" class="tribe-clearfix" name="tribe-bar-form" method="post" action="<?php echo esc_attr( $current_url ); ?>">

		<!-- Mobile Filters Toggle -->

		<div id="tribe-bar-collapse-toggle" <?php if ( count( $views ) == 1 ) { ?> class="tribe-bar-collapse-toggle-full-width"<?php } ?>>
			<?php printf( esc_html__( 'Find %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?><span class="tribe-bar-toggle-arrow"></span>
		</div>

		<!-- Views -->
		<?php if ( count( $views ) > 1 ) { ?>
			<div id="tribe-bar-views">
				<div class="tribe-bar-views-inner tribe-clearfix">
					<h3 class="tribe-events-visuallyhidden"><?php esc_html_e( 'Event Views Navigation', 'the-events-calendar' ) ?></h3>
					<label><?php esc_html_e( 'View As', 'the-events-calendar' ); ?></label>
					<select class="tribe-bar-views-select tribe-no-param" name="tribe-bar-view">
						<?php foreach ( $views as $view ) : ?>
							<option <?php echo tribe_is_view( $view['displaying'] ) ? 'selected' : 'tribe-inactive' ?> value="<?php echo esc_attr( $view['url'] ); ?>" data-view="<?php echo esc_attr( $view['displaying'] ); ?>">
								<?php echo $view['anchor']; ?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
				<!-- .tribe-bar-views-inner -->
			</div><!-- .tribe-bar-views -->
		<?php } // if ( count( $views ) > 1 ) ?>
		
		
		
	
		<?php if ( ! empty( $filters ) ) { ?>
			<div class="tribe-bar-filters">
				<div class="tribe-bar-filters-inner tribe-clearfix">
					
					
					<?php foreach ( $filters as $filter ) : ?>
						<div class="<?php echo esc_attr( $filter['name'] ) ?>-filter">
							<label class="label-<?php echo esc_attr( $filter['name'] ) ?>" for="<?php echo esc_attr( $filter['name'] ) ?>"><?php echo $filter['caption'] ?></label>
							<?php echo $filter['html'] ?>
						</div>
					<?php endforeach; ?>
                    <div class="event-category-filter">
                        <label class="label-event-category" for="event-category">Event Category</label>
                        <?php $terms = get_terms(array('hide_empty' => true, 'taxonomy' => 'tribe_events_cat')); ?>
                        <select class="selectpicker" title="All Categories" name="category" id='select-category' data-size="5">
                            <option value="">All Categories</option>
                            <?php foreach ($terms as $term): ?>
                                <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>                            
                            <?php endforeach; ?>
                        </select>
                    </div>
					<div class="tribe-bar-submit">
						<input class="tribe-events-button tribe-no-param" type="submit" name="submit-bar" value="<?php printf( esc_attr__( 'Find %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?>" />
					</div>
					<!-- .tribe-bar-submit -->
				</div>
				<!-- .tribe-bar-filters-inner -->
			</div><!-- .tribe-bar-filters -->
		<?php } // if ( !empty( $filters ) ) ?>

	</form>
	<!-- #tribe-bar-form -->

    <script>
        document.querySelectorAll('#select-category option[value="<?php echo htmlentities( $last_path ); ?>"]')[0].setAttribute('selected','selected');
    </script>

</div><!-- #tribe-events-bar -->
<?php
do_action( 'tribe_events_bar_after_template' );
