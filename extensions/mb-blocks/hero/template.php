<?php
/**
 * The template file to display the block.
 *
 * Available parameters:
 * @param array $attributes The block attributes.
 * @param bool  $is_preview Whether in the preview mode.
 */

// Fields data.
if ( empty( $attributes['data'] ) ) {
	return;
}

// Unique HTML ID if available.
$id = 'hero-' . ( $attributes['id'] ?? '' );
if ( ! empty( $attributes['anchor'] ) ) {
	$id = $attributes['anchor'];
}

// Custom CSS class name.
$class = 'hero ' . ( $attributes['className'] ?? '' );
if ( ! empty( $attributes['align'] ) ) {
	$class .= " align{$attributes['align']}";
}
?>

<div id="<?= $id ?>" class="<?= $class ?>" style="background-color: <?= mb_get_block_field( 'background_color' ) ?>">
	<?php $image = mb_get_block_field( 'image' ); ?>
	<img class="hero__image" src="<?= $image['full_url'] ?>">
	<div class="hero__body">
		<h2><?php mb_the_block_field( 'title' ) ?></h2>
		<h3><?php mb_the_block_field( 'subtitle' ) ?></h3>

		<div class="hero__line"></div>

		<div class="hero__content"><?php mb_the_block_field( 'content' ) ?></div>

		<?php $signature = mb_get_block_field( 'signature' ); ?>
		<img class="hero__signature" src="<?= $signature['full_url'] ?>">

		<?php if ( mb_get_block_field( 'button_url' ) ) : ?>
			<p><a class="hero__button" href="<?php mb_the_block_field( 'button_url' ) ?>"><?php mb_the_block_field( 'button_text' ) ?></a></p>
		<?php endif ?>
	</div>
</div>
