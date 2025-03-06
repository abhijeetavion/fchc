<?php
/*
 * Page Name: Targeting & Rules
 */

use FloatMenuLite\Admin\CreateFields;
use FloatMenuLite\Settings_Helper;

defined( 'ABSPATH' ) || exit;

$page_opt = include( 'options/rules.php' );
$field    = new CreateFields( $options, $page_opt );

$item_order = ! empty( $options['item_order']['rules'] ) ? 1 : 0;
$open       = ! empty( $item_order ) ? ' open' : '';
?>
<details class="wpie-item"<?php
echo esc_attr( $open ); ?>>
    <input type="hidden" name="param[item_order][rules]" class="wpie-item__toggle"
           value="<?php echo absint( $item_order ); ?>">
    <summary class="wpie-item_heading">
        <span class="wpie-item_heading_icon">
            <span class="wpie-icon wpie_icon-roadmap"></span>
        </span>
        <span class="wpie-item_heading_label">
            <?php esc_html_e( 'Display Rules', 'float-menu' ); ?>
        </span>
        <span class="wpie-item_heading_type"></span>
        <span class="wpie-item_heading_toogle">
        <span class="wpie-icon wpie_icon-chevron-down"></span>
        <span class="wpie-icon wpie_icon-chevron-up "></span>
    </span>
    </summary>
    <div class="wpie-item_content">

        <div class="wpie-fieldset wpie-rules">
            <div class="wpie-fields">
				<?php $field->create( 'show', 0 ); ?>
            </div>
        </div>
    </div>
</details>


<?php
$item_order = ! empty( $options['item_order']['responsive'] ) ? 1 : 0;
$open       = ! empty( $item_order ) ? ' open' : '';
?>
<details class="wpie-item"<?php echo esc_attr( $open ); ?>>
    <input type="hidden" name="param[item_order][responsive]" class="wpie-item__toggle"
           value="<?php echo absint( $item_order ); ?>">
    <summary class="wpie-item_heading">
        <span class="wpie-item_heading_icon">
            <span class="wpie-icon wpie_icon-laptop-mobile"></span>
        </span>
        <span class="wpie-item_heading_label">
            <?php esc_html_e( 'Responsive Visibility', 'float-menu' ); ?>
        </span>
        <span class="wpie-item_heading_type"></span>
        <span class="wpie-item_heading_toogle">
        <span class="wpie-icon wpie_icon-chevron-down"></span>
        <span class="wpie-icon wpie_icon-chevron-up "></span>
    </span>
    </summary>
    <div class="wpie-item_content">

        <div class="wpie-fieldset">
            <div class="wpie-fields">
				<?php $field->create( 'mobile_rules_on' ); ?>
				<?php $field->create( 'mobile' ); ?>
				<?php $field->create( 'desktop' ); ?>
            </div>
        </div>
    </div>
</details>

<?php
$item_order = ! empty( $options['item_order']['other'] ) ? 1 : 0;
$open       = ! empty( $item_order ) ? ' open' : '';
?>
<details class="wpie-item"<?php echo esc_attr( $open ); ?>>
    <input type="hidden" name="param[item_order][other]" class="wpie-item__toggle"
           value="<?php echo absint( $item_order ); ?>">
    <summary class="wpie-item_heading">
        <span class="wpie-item_heading_icon">
            <span class="wpie-icon wpie_icon-gear"></span>
        </span>
        <span class="wpie-item_heading_label">
            <?php esc_html_e( 'Other', 'float-menu' ); ?>
        </span>
        <span class="wpie-item_heading_type"></span>
        <span class="wpie-item_heading_toogle">
        <span class="wpie-icon wpie_icon-chevron-down"></span>
        <span class="wpie-icon wpie_icon-chevron-up "></span>
    </span>
    </summary>
    <div class="wpie-item_content">

        <div class="wpie-fieldset">
            <div class="wpie-fields">
				<?php $field->create( 'fontawesome' ); ?>
            </div>
        </div>

    </div>
</details>

<?php
