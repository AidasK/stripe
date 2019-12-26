<?php

/**
 * Part of the Stripe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe
 * @version    2.4.1
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2020, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Cartalyst\Stripe;

class Config implements ConfigInterface
{
    /**
     * The current package version.
     *
     * @var string
     */
    protected $version;

    /**
     * The Stripe API key.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * The Stripe API version.
     *
     * @var string
     */
    protected $apiVersion;

    /**
     * The managed account id.
     *
     * @var string
     */
    protected $accountId;

    /**
     * The application's information.
     *
     * @var array|null
     */
    protected $appInfo;

    /**
     * Constructor.
     *
     * @param  string  $version
     * @param  string  $apiKey
     * @param  string  $apiVersion
     * @return void
     */
    public function __construct($version, $apiKey, $apiVersion)
    {
        $this->setVersion($version);

        $this->setApiKey($apiKey);

        $this->setApiVersion($apiVersion);
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * {@inheritdoc}
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * {@inheritdoc}
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * {@inheritdoc}
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAppInfo()
    {
        return $this->appInfo;
    }

    /**
     * {@inheritdoc}
     */
    public function setAppInfo($appName, $appVersion = null, $appUrl = null, $appPartnerId = null)
    {
        $this->appInfo = [
            'name'       => $appName,
            'version'    => $appVersion,
            'url'        => $appUrl,
            'partner_id' => $appPartnerId,
        ];

        return $this;
    }
}
