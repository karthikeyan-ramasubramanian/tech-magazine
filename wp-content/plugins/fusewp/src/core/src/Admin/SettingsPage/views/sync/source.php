<?php
/** @var mixed $sync_rule_data */
$db_source = fusewpVarObj($sync_rule_data, 'source', '');
$sources   = fusewp_get_registered_sync_sources();
?>
<table class="fusewp-table">
    <tbody>
    <tr class="fusewp-table__row" data-name="trigger_name" data-type="select" data-required="1">
        <td class="fusewp-table__col fusewp-table__col--label">
            <label>Source <span class="required">*</span></label>
        </td>
        <td class="fusewp-table__col fusewp-table__col--field">
            <select name="fusewp_sync_source" class="fusewp-field fusewp-source-select">
                <option value="">&mdash;&mdash;&mdash;</option>
                <?php foreach ($sources as $source) : $source_items = $source->get_source_items(); ?>
                    <?php if (empty($source_items)) : ?>
                        <option value="<?php echo esc_attr($source->id) ?>" <?php selected($db_source, $source->id) ?>><?php echo esc_html($source->title) ?></option>
                    <?php else : ?>
                        <optgroup label="<?php echo $source->title ?>">
                            <?php foreach ($source->get_source_items() as $item_id => $item) : $source_item_id = sprintf('%s|%s', $source->id, $item_id); ?>
                                <option value="<?php echo esc_attr($source_item_id) ?>" <?php selected($db_source, $source_item_id) ?>><?php echo esc_attr($item) ?></option>
                            <?php endforeach; ?>
                        </optgroup>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <div class="fusewp-trigger-description">
                <p class="fusewp-field-description"><?php esc_html_e('Select the user role, membership plan or source plugin to synchronize from.', 'fusewp'); ?></p>
            </div>
        </td>
    </tr>
    </tbody>
</table>