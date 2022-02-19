<?php

namespace MailOptin\Ctctv3Connect;

use Authifly\Provider\ConstantContactV3;
use Authifly\Storage\OAuthCredentialStorage;
use MailOptin\Core\Connections\AbstractConnect;
use MailOptin\Core\PluginSettings\Connections;

class AbstractCtctv3Connect extends AbstractConnect
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Is Constant Contact v3 successfully connected to?
     *
     * @return bool
     */
    public static function is_connected()
    {
        $db_options = get_option(MAILOPTIN_CONNECTIONS_DB_OPTION_NAME);

        return ! empty($db_options['ctctv3_access_token']);
    }

    /**
     * Return instance of ConstantContactv3 class.
     *
     * @return ConstantContactV3
     * @throws \Exception
     *
     */
    public function ctctv3Instance()
    {
        $connections_settings = Connections::instance(true);
        $access_token         = $connections_settings->ctctv3_access_token();
        $refresh_token        = $connections_settings->ctctv3_refresh_token();
        $date_created        = $connections_settings->ctctv3_date_created();
        
        if (empty($access_token)) {
            throw new \Exception(__('Constant Contact (v3) access token not found.', 'mailoptin'));
        }

        if (empty($refresh_token)) {
            throw new \Exception(__('Constant Contact (v3) refresh token not found.', 'mailoptin'));
        }

        $config = [
            'callback' => MAILOPTIN_OAUTH_URL,
            'keys'     => ['id' => '2790994c-ff75-4fc2-9f7d-298ee4eac199', 'secret' => '__']
        ];

        return new ConstantContactV3($config, null,
            new OAuthCredentialStorage([
                'constantcontactv3.access_token'  => $access_token,
                'constantcontactv3.refresh_token' => $refresh_token,
                'constantcontactv3.date_created' => $date_created
            ])
        );
    }
}