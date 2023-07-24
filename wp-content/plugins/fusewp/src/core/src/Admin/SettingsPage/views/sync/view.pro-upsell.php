<?php
$pro_features = [
    esc_html__('Custom Fields & Tagging Support') => [
        esc_html__("Upgrade to map custom fields to profile information and assign tags to users for supported email marketing platforms.", 'fusewp')
    ],
    'WooCommerce Subscriptions'                     => [
        esc_html__("Sync users in WooCommerce Subscriptions with your CRM and email marketing software based on their subscribed product and subscription status. If a user's subscription status changes, they will be moved to the corresponding email or contact list.", 'fusewp')
    ],
    'WooCommerce Memberships'                     => [
        esc_html__("Sync users in WooCommerce memberships with your email marketing software based on their subscribed plans and membership status. If a user's membership status changes, they will be moved to the corresponding email list.", 'fusewp')
    ],
    'MemberPress'                     => [
        esc_html__("Sync members in MemberPress with your email marketing software based on their memberships and subscription status. If a user's subscription status changes, they will be moved to the corresponding email list.", 'fusewp')
    ]
];
?>

<div class="fusewp-pro-features-wrap">
    <?php foreach ($pro_features as $label => $feature): ?>
        <div class="fusewp-pro-features">
            <strong><?php echo esc_html($label) ?>:</strong> <?php echo esc_html(implode(', ', $feature)) ?>
        </div>
    <?php endforeach; ?>
    <div>
        <a href="https://fusewp.com/pricing/?utm_source=wp_dashboard&utm_medium=upgrade&utm_campaign=syn_pro_upgrade_metabox" target="__blank" class="button-primary">
            <?php esc_html_e('Get FuseWP Pro →', 'fusewp') ?>
        </a>
    </div>
</div>