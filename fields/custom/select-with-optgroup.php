<?php
/**
 * This file creates new field type 'selectomatic' which is similar to 'select' field type, but allows you to group options using `optgroup`.
 *
 * See discussion here:
 * https://metabox.io/support/topic/custom-field-that-adds-option-groups-optgroup-to-select-field/
 * https://metabox.io/support/topic/option-group-support-for-select-select-advanced-field-types/
 *
 * @credit pluginoven
 */

if ( class_exists( 'RWMB_Field' ) ) {
    class RWMB_Selectomatic_Field extends RWMB_Select_Field {
        public static function html( $meta, $field ) {
                $options                     = self::transform_options( $field['options'] );
                $attributes                  = self::call( 'get_attributes', $field, $meta );
                $attributes['data-selected'] = $meta;
                $walker                      = new RWMB_Walker_Selectomatic( $field, $meta );
                $output                      = sprintf(
                    '<select %s>',
                    self::render_attributes( $attributes )
                );
                if ( ! $field['multiple'] && $field['placeholder'] ) {
                    $output .= '<option value="">' . esc_html( $field['placeholder'] ) . '</option>';
                }
                $output .= $walker->walk( $options, $field['flatten'] ? -1 : 0 );
                $output .= '</select>';
                $output .= self::get_select_all_html( $field );
                return $output;
        }
    }

    class RWMB_Walker_Selectomatic extends RWMB_Walker_Select {

        public function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
            $meta = $this->meta;
            if($depth){
                $output .= sprintf(
                    '<option value="%s" %s>%s</option>',
                    esc_attr( $object->value ),
                    selected( in_array( $object->value, $meta ), true, false ),
                    esc_html( RWMB_Field::filter( 'choice_label', $object->label, $this->field, $object )
                    )
                );
            }
            else{
                $output .= sprintf(
                    '<optgroup label="%s">',
                    esc_html( RWMB_Field::filter( 'choice_label', $object->label, $this->field, $object )
                    )
                );
            }
        }

        public function rwmb_end_html_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
            if(!$depth){
                $output .= '</optgroup>';
            }
        }
    }
}
