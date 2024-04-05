<div align="center">

[![Visit SnapTrade](./header.png)](https://snaptrade.com)

# [SnapTrade](https://snaptrade.com)<a id="snaptrade"></a>

Connect brokerage accounts to your app for live positions and trading

[![Packagist](https://img.shields.io/badge/Packagist-v2.0.11-blue)](https://packagist.org/packages/konfig/snaptrade-php-7-sdk)
[![More Info](https://img.shields.io/badge/More%20Info-Click%20Here-orange)](https://snaptrade.com/)

</div>

## Table of Contents<a id="table-of-contents"></a>

<!-- toc -->

- [Installation & Usage](#installation--usage)
  * [Requirements](#requirements)
  * [Composer](#composer)
  * [Manual Installation](#manual-installation)
- [Getting Started](#getting-started)
- [Reference](#reference)
  * [`snaptrade.accountInformation.getAllUserHoldings`](#snaptradeaccountinformationgetalluserholdings)
  * [`snaptrade.accountInformation.getUserAccountBalance`](#snaptradeaccountinformationgetuseraccountbalance)
  * [`snaptrade.accountInformation.getUserAccountDetails`](#snaptradeaccountinformationgetuseraccountdetails)
  * [`snaptrade.accountInformation.getUserAccountOrders`](#snaptradeaccountinformationgetuseraccountorders)
  * [`snaptrade.accountInformation.getUserAccountPositions`](#snaptradeaccountinformationgetuseraccountpositions)
  * [`snaptrade.accountInformation.getUserHoldings`](#snaptradeaccountinformationgetuserholdings)
  * [`snaptrade.accountInformation.listUserAccounts`](#snaptradeaccountinformationlistuseraccounts)
  * [`snaptrade.accountInformation.updateUserAccount`](#snaptradeaccountinformationupdateuseraccount)
  * [`snaptrade.apiStatus.check`](#snaptradeapistatuscheck)
  * [`snaptrade.authentication.deleteSnapTradeUser`](#snaptradeauthenticationdeletesnaptradeuser)
  * [`snaptrade.authentication.getUserJWT`](#snaptradeauthenticationgetuserjwt)
  * [`snaptrade.authentication.listSnapTradeUsers`](#snaptradeauthenticationlistsnaptradeusers)
  * [`snaptrade.authentication.loginSnapTradeUser`](#snaptradeauthenticationloginsnaptradeuser)
  * [`snaptrade.authentication.registerSnapTradeUser`](#snaptradeauthenticationregistersnaptradeuser)
  * [`snaptrade.authentication.resetSnapTradeUserSecret`](#snaptradeauthenticationresetsnaptradeusersecret)
  * [`snaptrade.connections.detailBrokerageAuthorization`](#snaptradeconnectionsdetailbrokerageauthorization)
  * [`snaptrade.connections.listBrokerageAuthorizations`](#snaptradeconnectionslistbrokerageauthorizations)
  * [`snaptrade.connections.removeBrokerageAuthorization`](#snaptradeconnectionsremovebrokerageauthorization)
  * [`snaptrade.connections.sessionEvents`](#snaptradeconnectionssessionevents)
  * [`snaptrade.options.getOptionStrategy`](#snaptradeoptionsgetoptionstrategy)
  * [`snaptrade.options.getOptionsChain`](#snaptradeoptionsgetoptionschain)
  * [`snaptrade.options.getOptionsStrategyQuote`](#snaptradeoptionsgetoptionsstrategyquote)
  * [`snaptrade.options.listOptionHoldings`](#snaptradeoptionslistoptionholdings)
  * [`snaptrade.options.placeOptionStrategy`](#snaptradeoptionsplaceoptionstrategy)
  * [`snaptrade.referenceData.getCurrencyExchangeRatePair`](#snaptradereferencedatagetcurrencyexchangeratepair)
  * [`snaptrade.referenceData.getPartnerInfo`](#snaptradereferencedatagetpartnerinfo)
  * [`snaptrade.referenceData.getSecurityTypes`](#snaptradereferencedatagetsecuritytypes)
  * [`snaptrade.referenceData.getStockExchanges`](#snaptradereferencedatagetstockexchanges)
  * [`snaptrade.referenceData.getSymbols`](#snaptradereferencedatagetsymbols)
  * [`snaptrade.referenceData.getSymbolsByTicker`](#snaptradereferencedatagetsymbolsbyticker)
  * [`snaptrade.referenceData.listAllBrokerageAuthorizationType`](#snaptradereferencedatalistallbrokerageauthorizationtype)
  * [`snaptrade.referenceData.listAllBrokerages`](#snaptradereferencedatalistallbrokerages)
  * [`snaptrade.referenceData.listAllCurrencies`](#snaptradereferencedatalistallcurrencies)
  * [`snaptrade.referenceData.listAllCurrenciesRates`](#snaptradereferencedatalistallcurrenciesrates)
  * [`snaptrade.referenceData.symbolSearchUserAccount`](#snaptradereferencedatasymbolsearchuseraccount)
  * [`snaptrade.trading.cancelUserAccountOrder`](#snaptradetradingcanceluseraccountorder)
  * [`snaptrade.trading.getOrderImpact`](#snaptradetradinggetorderimpact)
  * [`snaptrade.trading.getUserAccountQuotes`](#snaptradetradinggetuseraccountquotes)
  * [`snaptrade.trading.placeForceOrder`](#snaptradetradingplaceforceorder)
  * [`snaptrade.trading.placeOCOOrder`](#snaptradetradingplaceocoorder)
  * [`snaptrade.trading.placeOrder`](#snaptradetradingplaceorder)
  * [`snaptrade.transactionsAndReporting.getActivities`](#snaptradetransactionsandreportinggetactivities)
  * [`snaptrade.transactionsAndReporting.getReportingCustomRange`](#snaptradetransactionsandreportinggetreportingcustomrange)

<!-- tocstop -->

## Installation & Usage<a id="installation--usage"></a>

### Requirements<a id="requirements"></a>

This library requires `PHP ^7.0`

### Composer<a id="composer"></a>

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/passiv/snaptrade-php-7-sdk.git"
    }
  ],
  "require": {
    "konfig/snaptrade-php-7-sdk": "2.0.11"
  }
}
```

Then run `composer install`

### Manual Installation<a id="manual-installation"></a>

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/snaptrade-php-7-sdk/vendor/autoload.php');
```

## Getting Started<a id="getting-started"></a>

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    getenv("SNAPTRADE_CONSUMER_KEY"),
    getenv("SNAPTRADE_CLIENT_ID")
);

$result = $snaptrade->accountInformation->getAllUserHoldings(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```
## Reference<a id="reference"></a>


### `snaptrade.accountInformation.getAllUserHoldings`<a id="snaptradeaccountinformationgetalluserholdings"></a>

List all accounts for the user, plus balances, positions, and orders for each account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getAllUserHoldings(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### brokerage_authorizations: `string`<a id="brokerage_authorizations-string"></a>

Optional. Comma seperated list of authorization IDs (only use if filtering is needed on one or more authorizations).


#### 🔄 Return<a id="🔄-return"></a>

[**AccountHoldings**](./lib/Model/AccountHoldings.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/holdings` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountBalance`<a id="snaptradeaccountinformationgetuseraccountbalance"></a>

A list of account balances for the specified account (one per currency that the account holds).


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountBalance(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to get balances.


#### 🔄 Return<a id="🔄-return"></a>

[**Balance**](./lib/Model/Balance.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/balances` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountDetails`<a id="snaptradeaccountinformationgetuseraccountdetails"></a>

Return details of a specific investment account


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountDetails(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to get detail of.


#### 🔄 Return<a id="🔄-return"></a>

[**Account**](./lib/Model/Account.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountOrders`<a id="snaptradeaccountinformationgetuseraccountorders"></a>

Fetch all recent orders from a user's account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountOrders(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    "all", 
    30
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to get orders.

##### state: `string`<a id="state-string"></a>

defaults value is set to \"all\"

##### days: `int`<a id="days-int"></a>

Number of days in the past to fetch the most recent orders. Defaults to the last 30 days if no value is passed in.


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/orders` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountPositions`<a id="snaptradeaccountinformationgetuseraccountpositions"></a>

List account positions


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountPositions(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to get positions.


#### 🔄 Return<a id="🔄-return"></a>

[**Position**](./lib/Model/Position.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/positions` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserHoldings`<a id="snaptradeaccountinformationgetuserholdings"></a>

List balances, positions and orders for the specified account


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserHoldings(
    "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    "John.doe@snaptrade.com", 
    "USERSECRET123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to fetch holdings for.

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**AccountHoldingsAccount**](./lib/Model/AccountHoldingsAccount.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/holdings` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.listUserAccounts`<a id="snaptradeaccountinformationlistuseraccounts"></a>

List accounts


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->listUserAccounts(
    "John.doe@snaptrade.com", 
    "USERSECRET123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Account**](./lib/Model/Account.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.updateUserAccount`<a id="snaptradeaccountinformationupdateuseraccount"></a>

Update details of an investment account


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->updateUserAccount(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "accountId_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to update.


#### 🔄 Return<a id="🔄-return"></a>

[**Account**](./lib/Model/Account.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}` `PUT`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.apiStatus.check`<a id="snaptradeapistatuscheck"></a>

Check whether the API is operational and verify timestamps.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->apiStatus->check();
```


#### 🔄 Return<a id="🔄-return"></a>

[**Status**](./lib/Model/Status.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.deleteSnapTradeUser`<a id="snaptradeauthenticationdeletesnaptradeuser"></a>

Deletes a user you've registered over the SnapTrade API, and any data associated with them or their investment accounts.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->deleteSnapTradeUser(
    "John.doe@snaptrade.com"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**DeleteUserResponse**](./lib/Model/DeleteUserResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/deleteUser` `DELETE`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.getUserJWT`<a id="snaptradeauthenticationgetuserjwt"></a>

Generate encrypted JWT token


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->getUserJWT(
    "John.doe@snaptrade.com", 
    "USERSECRET123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**EncryptedResponse**](./lib/Model/EncryptedResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/encryptedJWT` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.listSnapTradeUsers`<a id="snaptradeauthenticationlistsnaptradeusers"></a>

Returns a list of users you've registered over the SnapTrade API.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->listSnapTradeUsers();
```


#### 🔄 Return<a id="🔄-return"></a>

**string[]**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/listUsers` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.loginSnapTradeUser`<a id="snaptradeauthenticationloginsnaptradeuser"></a>

Logs in a SnapTrade user and returns an authenticated connection portal URL for them to use to connect a brokerage account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->loginSnapTradeUser(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "ALPACA", 
    True, 
    "https://snaptrade.com", 
    "8b5f262d-4bb9-365d-888a-202bd3b15fa1", 
    "read", 
    "v2"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### broker: `string`<a id="broker-string"></a>

Slug of the brokerage to connect the user to

##### immediateRedirect: `bool`<a id="immediateredirect-bool"></a>

When set to True, user will be redirected back to the partner's site instead of the connection portal

##### customRedirect: `string`<a id="customredirect-string"></a>

URL to redirect the user to after the user connects their brokerage account

##### reconnect: `string`<a id="reconnect-string"></a>

The UUID of the brokerage connection to be reconnected. This parameter should be left empty unless you are reconnecting a disabled connection. See ‘Reconnecting Accounts’ for more information.

##### connectionType: `string`<a id="connectiontype-string"></a>

Sets whether the connection should be read or trade

##### connectionPortalVersion: `string`<a id="connectionportalversion-string"></a>

Sets the version of the connection portal to render, with a default to 'v2'


#### 🔄 Return<a id="🔄-return"></a>

[**AuthenticationLoginSnapTradeUser200Response**](./lib/Model/AuthenticationLoginSnapTradeUser200Response.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/login` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.registerSnapTradeUser`<a id="snaptradeauthenticationregistersnaptradeuser"></a>

Create SnapTrade user


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->registerSnapTradeUser(
    "snaptrade-user-123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### userId: `string`<a id="userid-string"></a>

SnapTrade User ID. Provided by SnapTrade Partner. Can be any string, as long as it's unique to a user


#### 🔄 Return<a id="🔄-return"></a>

[**UserIDandSecret**](./lib/Model/UserIDandSecret.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/registerUser` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.resetSnapTradeUserSecret`<a id="snaptradeauthenticationresetsnaptradeusersecret"></a>

Obtain a new user secret for a user


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->resetSnapTradeUserSecret(
    "snaptrade-user-123", 
    "h81@cx1lkalablakwjaltkejraj11="
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### userId: `string`<a id="userid-string"></a>

SnapTrade User ID. Provided by SnapTrade Partner. Can be any string, as long as it's unique to a user

##### userSecret: `string`<a id="usersecret-string"></a>

SnapTrade User Secret randomly generated by SnapTrade. This should be considered priviledged information and if compromised, you should delete and re-create this SnapTrade user.


#### 🔄 Return<a id="🔄-return"></a>

[**UserIDandSecret**](./lib/Model/UserIDandSecret.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/resetUserSecret` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.detailBrokerageAuthorization`<a id="snaptradeconnectionsdetailbrokerageauthorization"></a>

Get brokerage authorization details


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->detailBrokerageAuthorization(
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "John.doe@snaptrade.com", 
    "USERSECRET123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### authorization_id: `string`<a id="authorization_id-string"></a>

The ID of a brokerage authorization object.

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorization**](./lib/Model/BrokerageAuthorization.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations/{authorizationId}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.listBrokerageAuthorizations`<a id="snaptradeconnectionslistbrokerageauthorizations"></a>

List all brokerage authorizations for the user


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->listBrokerageAuthorizations(
    "John.doe@snaptrade.com", 
    "USERSECRET123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorization**](./lib/Model/BrokerageAuthorization.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.removeBrokerageAuthorization`<a id="snaptradeconnectionsremovebrokerageauthorization"></a>

Delete brokerage authorization


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$snaptrade->connections->removeBrokerageAuthorization(
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "John.doe@snaptrade.com", 
    "USERSECRET123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### authorization_id: `string`<a id="authorization_id-string"></a>

The ID of the Authorization to delete.

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

void (empty response body)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations/{authorizationId}` `DELETE`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.sessionEvents`<a id="snaptradeconnectionssessionevents"></a>

List all session events for the partner


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->sessionEvents(
    "SNAPTRADETEST", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### partner_client_id: `string`<a id="partner_client_id-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

Optional comma seperated list of user IDs used to filter the request on specific users

##### session_id: `string`<a id="session_id-string"></a>

Optional comma seperated list of session IDs used to filter the request on specific users


#### 🔄 Return<a id="🔄-return"></a>

[**ConnectionsSessionEvents200ResponseInner**](./lib/Model/ConnectionsSessionEvents200ResponseInner.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/sessionEvents` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.getOptionStrategy`<a id="snaptradeoptionsgetoptionstrategy"></a>

Creates an option strategy object that will be used to place an option strategy order


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->getOptionStrategy(
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    [
        [
            "action" => "BUY_TO_OPEN",
            "option_symbol_id" => "SPY220819P00200000",
            "quantity" => 1,
        ]
    ], 
    "CUSTOM", 
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "accountId_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### underlying_symbol_id: `string`<a id="underlying_symbol_id-string"></a>

##### legs: [`OptionLeg`](./lib/Model/OptionLeg.php)[]<a id="legs-optionleglibmodeloptionlegphp"></a>

##### strategy_type: `string`<a id="strategy_type-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to create the option strategy object in.


#### 🔄 Return<a id="🔄-return"></a>

[**StrategyQuotes**](./lib/Model/StrategyQuotes.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/optionStrategy` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.getOptionsChain`<a id="snaptradeoptionsgetoptionschain"></a>

Get the options chain


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->getOptionsChain(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "accountId_example", 
    "symbol_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to get the options chain from.

##### symbol: `string`<a id="symbol-string"></a>

Universal symbol ID if symbol


#### 🔄 Return<a id="🔄-return"></a>

[**OptionChainInner**](./lib/Model/OptionChainInner.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/optionsChain` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.getOptionsStrategyQuote`<a id="snaptradeoptionsgetoptionsstrategyquote"></a>

Get latest market data of option strategy


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->getOptionsStrategyQuote(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "accountId_example", 
    "2bcd7cc3-e922-4976-bce1-9858296801c3"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account the strategy will be placed in.

##### option_strategy_id: `string`<a id="option_strategy_id-string"></a>

Option strategy id obtained from response when creating option strategy object


#### 🔄 Return<a id="🔄-return"></a>

[**StrategyQuotes**](./lib/Model/StrategyQuotes.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/optionStrategy/{optionStrategyId}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.listOptionHoldings`<a id="snaptradeoptionslistoptionholdings"></a>

Get the options holdings in the account


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->listOptionHoldings(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "accountId_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to fetch options holdings for.


#### 🔄 Return<a id="🔄-return"></a>

[**OptionsPosition**](./lib/Model/OptionsPosition.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/options` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.placeOptionStrategy`<a id="snaptradeoptionsplaceoptionstrategy"></a>

Place an option strategy order on the brokerage


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->placeOptionStrategy(
    "Limit", 
    "FOK", 
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    31.33
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### order_type:<a id="order_type"></a>

##### time_in_force:<a id="time_in_force"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to execute the strategy in.

##### option_strategy_id: `string`<a id="option_strategy_id-string"></a>

Option strategy id obtained from response when creating option strategy object

##### price: `float`<a id="price-float"></a>

Trade Price if limit or stop limit order


#### 🔄 Return<a id="🔄-return"></a>

[**StrategyOrderRecord**](./lib/Model/StrategyOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/optionStrategy/{optionStrategyId}/execute` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getCurrencyExchangeRatePair`<a id="snaptradereferencedatagetcurrencyexchangeratepair"></a>

Return the exchange rate of a currency pair


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getCurrencyExchangeRatePair(
    "currencyPair_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### currency_pair: `string`<a id="currency_pair-string"></a>

A currency pair based on currency code for example, {CAD-USD}


#### 🔄 Return<a id="🔄-return"></a>

[**ExchangeRatePairs**](./lib/Model/ExchangeRatePairs.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/currencies/rates/{currencyPair}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getPartnerInfo`<a id="snaptradereferencedatagetpartnerinfo"></a>

Get metadata related to Snaptrade partner


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getPartnerInfo();
```


#### 🔄 Return<a id="🔄-return"></a>

[**PartnerData**](./lib/Model/PartnerData.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/partners` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getSecurityTypes`<a id="snaptradereferencedatagetsecuritytypes"></a>

List security types available on SnapTrade.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getSecurityTypes();
```


#### 🔄 Return<a id="🔄-return"></a>

[**SecurityType**](./lib/Model/SecurityType.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/securityTypes` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getStockExchanges`<a id="snaptradereferencedatagetstockexchanges"></a>

List exchanges


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getStockExchanges();
```


#### 🔄 Return<a id="🔄-return"></a>

[**Exchange**](./lib/Model/Exchange.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/exchanges` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getSymbols`<a id="snaptradereferencedatagetsymbols"></a>

Search for symbols


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getSymbols(
    "apple"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### substring: `string`<a id="substring-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**UniversalSymbol**](./lib/Model/UniversalSymbol.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/symbols` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getSymbolsByTicker`<a id="snaptradereferencedatagetsymbolsbyticker"></a>

Get details of a symbol by the ticker or the universal_symbol_id


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getSymbolsByTicker(
    "query_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### query: `string`<a id="query-string"></a>

The ticker or universal_symbol_id of the UniversalSymbol to get.


#### 🔄 Return<a id="🔄-return"></a>

[**UniversalSymbol**](./lib/Model/UniversalSymbol.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/symbols/{query}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.listAllBrokerageAuthorizationType`<a id="snaptradereferencedatalistallbrokerageauthorizationtype"></a>

List of all brokerage authorization types


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->listAllBrokerageAuthorizationType(
    "QUESTRADE,ALPACA"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### brokerage: `string`<a id="brokerage-string"></a>

Comma separated value of brokerage slugs


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorizationTypeReadOnly**](./lib/Model/BrokerageAuthorizationTypeReadOnly.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/brokerageAuthorizationTypes` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.listAllBrokerages`<a id="snaptradereferencedatalistallbrokerages"></a>

List brokerages


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->listAllBrokerages();
```


#### 🔄 Return<a id="🔄-return"></a>

[**Brokerage**](./lib/Model/Brokerage.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/brokerages` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.listAllCurrencies`<a id="snaptradereferencedatalistallcurrencies"></a>

List currencies


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->listAllCurrencies();
```


#### 🔄 Return<a id="🔄-return"></a>

[**Currency**](./lib/Model/Currency.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/currencies` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.listAllCurrenciesRates`<a id="snaptradereferencedatalistallcurrenciesrates"></a>

List currency exchange rates


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->listAllCurrenciesRates();
```


#### 🔄 Return<a id="🔄-return"></a>

[**ExchangeRatePairs**](./lib/Model/ExchangeRatePairs.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/currencies/rates` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.symbolSearchUserAccount`<a id="snaptradereferencedatasymbolsearchuseraccount"></a>

Search for symbols available in an account


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->symbolSearchUserAccount(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    "apple"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to search for symbols within.

##### substring: `string`<a id="substring-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**UniversalSymbol**](./lib/Model/UniversalSymbol.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/symbols` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.cancelUserAccountOrder`<a id="snaptradetradingcanceluseraccountorder"></a>

Cancel open order in account


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->cancelUserAccountOrder(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    "2bcd7cc3-e922-4976-bce1-9858296801c3"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to cancel the order in.

##### brokerage_order_id: `string`<a id="brokerage_order_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/orders/cancel` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.getOrderImpact`<a id="snaptradetradinggetorderimpact"></a>

Check impact of trades on account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->getOrderImpact(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "BUY", 
    "Limit", 
    31.33, 
    31.33, 
    "FOK", 
    3.14, 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    100
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

##### action:<a id="action"></a>

##### order_type:<a id="order_type"></a>

##### price: `float`<a id="price-float"></a>

Trade Price if limit or stop limit order

##### stop: `float`<a id="stop-float"></a>

Stop Price. If stop loss or stop limit order, the price to trigger the stop

##### time_in_force:<a id="time_in_force"></a>

##### units: [`float`](./lib/Model/float.php)<a id="units-floatlibmodelfloatphp"></a>

##### universal_symbol_id: `string`<a id="universal_symbol_id-string"></a>

##### notional_value: [`float`](./lib/Model/float.php)<a id="notional_value-floatlibmodelfloatphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**ManualTradeAndImpact**](./lib/Model/ManualTradeAndImpact.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/trade/impact` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.getUserAccountQuotes`<a id="snaptradetradinggetuseraccountquotes"></a>

Get symbol quotes


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->getUserAccountQuotes(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "symbols_example", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    True
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### symbols: `string`<a id="symbols-string"></a>

List of universal_symbol_id or tickers to get quotes for.

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to get quotes.

##### use_ticker: `bool`<a id="use_ticker-bool"></a>

Should be set to True if providing tickers.


#### 🔄 Return<a id="🔄-return"></a>

[**SymbolsQuotesInner**](./lib/Model/SymbolsQuotesInner.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/quotes` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.placeForceOrder`<a id="snaptradetradingplaceforceorder"></a>

Place a trade with NO validation.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->placeForceOrder(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "BUY", 
    "Limit", 
    31.33, 
    31.33, 
    "FOK", 
    3.14, 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    100
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

##### action:<a id="action"></a>

##### order_type:<a id="order_type"></a>

##### price: `float`<a id="price-float"></a>

Trade Price if limit or stop limit order

##### stop: `float`<a id="stop-float"></a>

Stop Price. If stop loss or stop limit order, the price to trigger the stop

##### time_in_force:<a id="time_in_force"></a>

##### units: [`float`](./lib/Model/float.php)<a id="units-floatlibmodelfloatphp"></a>

##### universal_symbol_id: `string`<a id="universal_symbol_id-string"></a>

##### notional_value: [`float`](./lib/Model/float.php)<a id="notional_value-floatlibmodelfloatphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/trade/place` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.placeOCOOrder`<a id="snaptradetradingplaceocoorder"></a>

Place a OCO (One Cancels Other) order


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->placeOCOOrder(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    None, 
    None
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### first_trade_id:<a id="first_trade_id"></a>

The ID of first trade object obtained from trade/impact endpoint

##### second_trade_id:<a id="second_trade_id"></a>

The ID of second trade object obtained from trade/impact endpoint


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/trade/oco` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.placeOrder`<a id="snaptradetradingplaceorder"></a>

Place order


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->placeOrder(
    "tradeId_example", 
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    True
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### trade_id: `string`<a id="trade_id-string"></a>

The ID of trade object obtained from trade/impact endpoint

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### wait_to_confirm: `bool`<a id="wait_to_confirm-bool"></a>

Optional, defaults to true. Determines if a wait is performed to check on order status. If false, latency will be reduced but orders returned will be more likely to be of status PENDING as we will not wait to check on the status before responding to the request


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/trade/{tradeId}` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.transactionsAndReporting.getActivities`<a id="snaptradetransactionsandreportinggetactivities"></a>

Returns activities (transactions) for a user. Specifying start and end date is highly recommended for better performance


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->transactionsAndReporting->getActivities(
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "2022-01-24", 
    "2022-01-24", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2", 
    "DIVIDEND"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### start_date: `\DateTime`<a id="start_date-datetime"></a>

##### end_date: `\DateTime`<a id="end_date-datetime"></a>

##### accounts: `string`<a id="accounts-string"></a>

Optional comma seperated list of account IDs used to filter the request on specific accounts

##### brokerage_authorizations: `string`<a id="brokerage_authorizations-string"></a>

Optional comma seperated list of brokerage authorization IDs used to filter the request on only accounts that belong to those authorizations

##### type: `string`<a id="type-string"></a>

Optional comma seperated list of types to filter activities by. This is not an exhaustive list, if we fail to match to these types, we will return the raw description from the brokerage. Potential values include - DIVIDEND - BUY - SELL - CONTRIBUTION - WITHDRAWAL - EXTERNAL_ASSET_TRANSFER_IN - EXTERNAL_ASSET_TRANSFER_OUT - INTERNAL_CASH_TRANSFER_IN - INTERNAL_CASH_TRANSFER_OUT - INTERNAL_ASSET_TRANSFER_IN - INTERNAL_ASSET_TRANSFER_OUT - INTEREST - REBATE - GOV_GRANT - TAX - FEE - REI - FXT


#### 🔄 Return<a id="🔄-return"></a>

[**UniversalActivity**](./lib/Model/UniversalActivity.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/activities` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.transactionsAndReporting.getReportingCustomRange`<a id="snaptradetransactionsandreportinggetreportingcustomrange"></a>

Returns performance information (contributions, dividends, rate of return, etc) for a specific timeframe. Please note that Total Equity Timeframe and Rate of Returns are experimental features. Please contact support@snaptrade.com if you notice any inconsistencies.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->transactionsAndReporting->getReportingCustomRange(
    "2022-01-24", 
    "2022-01-24", 
    "John.doe@snaptrade.com", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2", 
    True, 
    "monthly"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### start_date: `\DateTime`<a id="start_date-datetime"></a>

##### end_date: `\DateTime`<a id="end_date-datetime"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### accounts: `string`<a id="accounts-string"></a>

Optional comma seperated list of account IDs used to filter the request on specific accounts

##### detailed: `bool`<a id="detailed-bool"></a>

Optional, increases frequency of data points for the total value and contribution charts if set to true

##### frequency: `string`<a id="frequency-string"></a>

Optional frequency for the rate of return chart (defaults to monthly). Possible values are daily, weekly, monthly, quarterly, yearly.


#### 🔄 Return<a id="🔄-return"></a>

[**PerformanceCustom**](./lib/Model/PerformanceCustom.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/performance/custom` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


## Author<a id="author"></a>
This PHP package is automatically generated by [Konfig](https://konfigthis.com)
