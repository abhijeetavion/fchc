<?php
/*
 * Page Name: Settings
 */

use FloatMenuLite\Admin\CreateFields;

defined( 'ABSPATH' ) || exit;

$page_opt = include( 'options/settings.php' );
$field    = new CreateFields( $options, $page_opt );

$item_order = ! empty( $options['item_order']['position'] ) ? 1 : 0;
$open       = ! empty( $item_order ) ? ' open' : '';
?>
    <details class="wpie-item"<?php echo esc_attr( $open ); ?>>
        <input type="hidden" name="param[item_order][position]" class="wpie-item__toggle"
               value="<?php echo absint( $item_order ); ?>">
        <summary class="wpie-item_heading">
            <span class="wpie-item_heading_icon">
                <span class="wpie-icon wpie_icon-pointer"></span>
            </span>
            <span class="wpie-item_heading_label">
                <?php esc_html_e( 'Position', 'float-menu' ); ?></span>
            <span class="wpie-item_heading_type"></span>
            <span class="wpie-item_heading_toogle">
                <span class="wpie-icon wpie_icon-chevron-down"></span>
                <span class="wpie-icon wpie_icon-chevron-up"></span>
            </span>
        </summary>
        <div class="wpie-item_content">

            <div class="wpie-fieldset">
                <div class="wpie-fields">
					<?php $field->create( 'menu' ); ?>
					<?php $field->create( 'top_offset' ); ?>
					<?php $field->create( 'side_offset' ); ?>
                </div>
            </div>
        </div>
    </details>

<?php
$item_order = ! empty( $options['item_order']['appearance'] ) ? 1 : 0;
$open       = ! empty( $item_order ) ? ' open' : '';
?>

    <details class="wpie-item"<?php echo esc_attr( $open ); ?>>
        <input type="hidden" name="param[item_order][appearance]" class="wpie-item__toggle"
               value="<?php echo absint( $item_order ); ?>">
        <summary class="wpie-item_heading">
            <span class="wpie-item_heading_icon">
                <span class="wpie-icon wpie_icon-paintbrush"></span>
            </span>
            <span class="wpie-item_heading_label">
                <?php esc_html_e( 'Appearance', 'float-menu' ); ?></span>
            <span class="wpie-item_heading_type"></span>
            <span class="wpie-item_heading_toogle">
                <span class="wpie-icon wpie_icon-chevron-down"></span>
                <span class="wpie-icon wpie_icon-chevron-up "></span>
            </span>
        </summary>
        <div class="wpie-item_content">

            <div class="wpie-fieldset">
                <div class="wpie-fields">
					<?php
					$field->create( 'shape' );
					$field->create( 'sideSpace' );
					$field->create( 'buttonSpace' );
					$field->create( 'labelSpace' ); ?>
                </div>
                <div class="wpie-fields">
					<?php
					$field->create( 'labelsOn' );
					$field->create( 'labelConnected' );
					$field->create( 'labelEffect' );
					$field->create( 'labelSpeed' ); ?>
                </div>
                <div class="wpie-fields">
					<?php $field->create( 'zindex' ); ?>
                </div>
            </div>
        </div>
    </details>

<?php
$item_order = ! empty( $options['item_order']['size'] ) ? 1 : 0;
$open       = ! empty( $item_order ) ? ' open' : '';
?>

    <details class="wpie-item"<?php echo esc_attr( $open ); ?>>
        <input type="hidden" name="param[item_order][size]" class="wpie-item__toggle"
               value="<?php echo absint( $item_order ); ?>">
        <summary class="wpie-item_heading">
            <span class="wpie-item_heading_icon">
                <span class="wpie-icon wpie_icon-text"></span>
            </span>
            <span class="wpie-item_heading_label">
                <?php esc_html_e( 'Size', 'float-menu' ); ?>
            </span>
            <span class="wpie-item_heading_type"></span>
            <span class="wpie-item_heading_toogle">
                <span class="wpie-icon wpie_icon-chevron-down"></span>
                <span class="wpie-icon wpie_icon-chevron-up "></span>
            </span>
        </summary>
        <div class="wpie-item_content">

            <div class="wpie-fieldset">
                <div class="wpie-legend">
					<?php esc_html_e( 'Size', 'float-menu' ); ?></div>
                <div class="wpie-fields">
					<?php $field->create( 'iconSize' );
					$field->create( 'labelSize' ); ?>
                </div>
                <div class="wpie-fields">
					<?php
					$field->create( 'mobilieScreen' );
					$field->create( 'mobiliconSize' );
					$field->create( 'mobillabelSize' ); ?>
                </div>
            </div>
        </div>
    </details>

<?php
