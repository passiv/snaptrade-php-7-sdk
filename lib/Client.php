<?php

namespace SnapTrade;

class Client
{
    /** @var \SnapTrade\Api\AccountInformationApi */
    public $accountInformation;
    /** @var \SnapTrade\Api\ApiStatusApi */
    public $apiStatus;
    /** @var \SnapTrade\Api\AuthenticationApi */
    public $authentication;
    /** @var \SnapTrade\Api\ConnectionsApi */
    public $connections;
    /** @var \SnapTrade\Api\OptionsApi */
    public $options;
    /** @var \SnapTrade\Api\ReferenceDataApi */
    public $referenceData;
    /** @var \SnapTrade\Api\TradingApi */
    public $trading;
    /** @var \SnapTrade\Api\TransactionsAndReportingApi */
    public $transactionsAndReporting;

    /**
     * Constructor
     */
    public function __construct(
        string $consumerKey = null,
        string $clientId = null,
        string $Signature = null,
        string $timestamp = null,
        bool $verifySsl = null,
        string $host = 'https://api.snaptrade.com/api/v1',
        \SnapTrade\Configuration $config = null
    )
    {
        if ($config == null) {
            $config = new \SnapTrade\Configuration(
            );
            $config->setConsumerKey($consumerKey);
            $config->setApiKey("clientId", $clientId);
            $config->setApiKey("Signature", $Signature);
            $config->setApiKey("timestamp", $timestamp);
            if ($host !== null) $config->setHost($host);
            if ($verifySsl !== null) $config->setVerifySsl($verifySsl);
        }
        $this->accountInformation = new \SnapTrade\Api\AccountInformationApi($config);
        $this->apiStatus = new \SnapTrade\Api\ApiStatusApi($config);
        $this->authentication = new \SnapTrade\Api\AuthenticationApi($config);
        $this->connections = new \SnapTrade\Api\ConnectionsApi($config);
        $this->options = new \SnapTrade\Api\OptionsApi($config);
        $this->referenceData = new \SnapTrade\Api\ReferenceDataApi($config);
        $this->trading = new \SnapTrade\Api\TradingApi($config);
        $this->transactionsAndReporting = new \SnapTrade\Api\TransactionsAndReportingApi($config);
    }
}
