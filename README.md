<div align="center">

[![Visit SnapTrade](./header.png)](https://snaptrade.com)

# [SnapTrade](https://snaptrade.com)<a id="snaptrade"></a>

Connect brokerage accounts to your app for live positions and trading

[![Packagist](https://img.shields.io/badge/Packagist-v2.0.30-blue)](https://packagist.org/packages/konfig/snaptrade-php-7-sdk)
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
  * [`snaptrade.authentication.listSnapTradeUsers`](#snaptradeauthenticationlistsnaptradeusers)
  * [`snaptrade.authentication.loginSnapTradeUser`](#snaptradeauthenticationloginsnaptradeuser)
  * [`snaptrade.authentication.registerSnapTradeUser`](#snaptradeauthenticationregistersnaptradeuser)
  * [`snaptrade.authentication.resetSnapTradeUserSecret`](#snaptradeauthenticationresetsnaptradeusersecret)
  * [`snaptrade.connections.detailBrokerageAuthorization`](#snaptradeconnectionsdetailbrokerageauthorization)
  * [`snaptrade.connections.disableBrokerageAuthorization`](#snaptradeconnectionsdisablebrokerageauthorization)
  * [`snaptrade.connections.listBrokerageAuthorizations`](#snaptradeconnectionslistbrokerageauthorizations)
  * [`snaptrade.connections.refreshBrokerageAuthorization`](#snaptradeconnectionsrefreshbrokerageauthorization)
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
    "konfig/snaptrade-php-7-sdk": "2.0.30"
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
    "snaptrade-user-123", 
    "USERSECRET123", 
    "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```
## Reference<a id="reference"></a>


### `snaptrade.accountInformation.getAllUserHoldings`<a id="snaptradeaccountinformationgetalluserholdings"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

**Deprecated, please use the account-specific holdings endpoint instead.**

List all accounts for the user, plus balances, positions, and orders for each
account.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getAllUserHoldings(
    "snaptrade-user-123", 
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
    "snaptrade-user-123", 
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

Returns an account object with details for the specified account,
including the total account market value.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountDetails(
    "snaptrade-user-123", 
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
    "snaptrade-user-123", 
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

Returns a list of positions in the specified account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountPositions(
    "snaptrade-user-123", 
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

Lists balances, positions, option positions, and recent orders for the specified account. The data returned is similar to the data returned over the more fine-grained [balances](/reference/Account%20Information/AccountInformation_getUserAccountBalance), [positions](/reference/Account%20Information/AccountInformation_getUserAccountPositions) and [orders](/reference/Account%20Information/AccountInformation_getUserAccountOrders) endpoints. __The finer-grained APIs are preferred. They are easier to work with, faster, and have better error handling than this coarse-grained API.__



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserHoldings(
    "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    "snaptrade-user-123", 
    "USERSECRET123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### account_id: `string`<a id="account_id-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**AccountHoldingsAccount**](./lib/Model/AccountHoldingsAccount.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/holdings` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.listUserAccounts`<a id="snaptradeaccountinformationlistuseraccounts"></a>

Get a list of all Account objects for the authenticated SnapTrade user.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->listUserAccounts(
    "snaptrade-user-123", 
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

Updates various properties of a specified account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->updateUserAccount(
    "snaptrade-user-123", 
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
    "snaptrade-user-123"
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
    "snaptrade-user-123", 
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

Slug of the brokerage to connect the user to. See [this document](https://snaptrade.notion.site/SnapTrade-Brokerage-Integrations-f83946a714a84c3caf599f6a945f0ead) for a list of supported brokerages and their slugs.

##### immediateRedirect: `bool`<a id="immediateredirect-bool"></a>

When set to True, user will be redirected back to the partner's site instead of the connection portal

##### customRedirect: `string`<a id="customredirect-string"></a>

URL to redirect the user to after the user connects their brokerage account

##### reconnect: `string`<a id="reconnect-string"></a>

The UUID of the brokerage connection to be reconnected. This parameter should be left empty unless you are reconnecting a disabled connection. See ‘Reconnecting Accounts’ for more information.

##### connectionType: `string`<a id="connectiontype-string"></a>

Sets whether the connection should be read or trade

##### connectionPortalVersion: `string`<a id="connectionportalversion-string"></a>

Sets the version of the connection portal to render, with a default to 'v3'


#### 🔄 Return<a id="🔄-return"></a>

[**AuthenticationLoginSnapTradeUser200Response**](./lib/Model/AuthenticationLoginSnapTradeUser200Response.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/login` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.registerSnapTradeUser`<a id="snaptradeauthenticationregistersnaptradeuser"></a>

Registers a new SnapTrade user under your ClientID. A user secret will be automatically generated for you and must be properly stored in your database.
Most SnapTrade operations require a user ID and user secret to be passed as a parameter.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->registerSnapTradeUser(
    "snaptrade-user-123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### userId: `string`<a id="userid-string"></a>

SnapTrade User ID. This is chosen by the API partner and can be any string that is a) unique to the user, and b) immutable for the user. It is recommended to NOT use email addresses for this property because they are usually not immutable.


#### 🔄 Return<a id="🔄-return"></a>

[**UserIDandSecret**](./lib/Model/UserIDandSecret.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/registerUser` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.resetSnapTradeUserSecret`<a id="snaptradeauthenticationresetsnaptradeusersecret"></a>

This API is used to rotate the secret for a SnapTrade user. You might use this if a userSecret
is compromised. Please note that if you call this endpoint and fail to save the new secret, you'll no longer be able to access any data for this user, and your only option will be to delete and recreate the user, then ask them to reconnect.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->resetSnapTradeUserSecret(
    "snaptrade-user-123", 
    "h81@cx1lkalablakwjaltkejraj11="
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### userId: `string`<a id="userid-string"></a>

SnapTrade User ID. This is chosen by the API partner and can be any string that is a) unique to the user, and b) immutable for the user. It is recommended to NOT use email addresses for this property because they are usually not immutable.

##### userSecret: `string`<a id="usersecret-string"></a>

SnapTrade User Secret randomly generated by SnapTrade. This is privileged information and if compromised, should be rotated via the SnapTrade API.


#### 🔄 Return<a id="🔄-return"></a>

[**UserIDandSecret**](./lib/Model/UserIDandSecret.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/resetUserSecret` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.detailBrokerageAuthorization`<a id="snaptradeconnectionsdetailbrokerageauthorization"></a>

Returns a single brokerage authorization object for the specified ID.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->detailBrokerageAuthorization(
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "snaptrade-user-123", 
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


### `snaptrade.connections.disableBrokerageAuthorization`<a id="snaptradeconnectionsdisablebrokerageauthorization"></a>

Manually disable a connection. This should only be used for testing a reconnect flow, and never used on production connections. Will trigger a disconnect as if it happened naturally, and send a CONNECTION_BROKEN webhook for the connection. Please contact us in order to use this endpoint as it is disabled by default.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->disableBrokerageAuthorization(
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "snaptrade-user-123", 
    "USERSECRET123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### authorization_id: `string`<a id="authorization_id-string"></a>

The ID of a brokerage authorization object.

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorizationDisabledConfirmation**](./lib/Model/BrokerageAuthorizationDisabledConfirmation.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations/{authorizationId}/disable` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.listBrokerageAuthorizations`<a id="snaptradeconnectionslistbrokerageauthorizations"></a>

Returns a list of Brokerage Authorization objects for the user


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->listBrokerageAuthorizations(
    "snaptrade-user-123", 
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


### `snaptrade.connections.refreshBrokerageAuthorization`<a id="snaptradeconnectionsrefreshbrokerageauthorization"></a>

Trigger a holdings update for all accounts under this authorization. Updates will be queued asynchronously. ACCOUNT_HOLDINGS_UPDATED webhook will be sent once the sync completes. Please contact support for access as this endpoint is not enabled by default


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->refreshBrokerageAuthorization(
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "snaptrade-user-123", 
    "USERSECRET123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### authorization_id: `string`<a id="authorization_id-string"></a>

The ID of a brokerage authorization object.

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorizationRefreshConfirmation**](./lib/Model/BrokerageAuthorizationRefreshConfirmation.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations/{authorizationId}/refresh` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.removeBrokerageAuthorization`<a id="snaptradeconnectionsremovebrokerageauthorization"></a>

Deletes a specified brokerage authorization given by the ID.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$snaptrade->connections->removeBrokerageAuthorization(
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "snaptrade-user-123", 
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

Returns a list of session events associated with a user.


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

Creates an option strategy object that will be used to place an option strategy order.



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
    "snaptrade-user-123", 
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

Returns the option chain for the specified symbol in the specified account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->getOptionsChain(
    "snaptrade-user-123", 
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

Returns a Strategy Quotes object which has latest market data of the specified option strategy.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->getOptionsStrategyQuote(
    "snaptrade-user-123", 
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

Returns a list of Options Positions.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->listOptionHoldings(
    "snaptrade-user-123", 
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

Places the option strategy order and returns the order record received from the brokerage.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->placeOptionStrategy(
    "Limit", 
    "FOK", 
    "snaptrade-user-123", 
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

Returns an Exchange Rate Pair object for the specified Currency Pair.


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

Returns useful data related to the specified ClientID, including allowed brokerages and data access.


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

Returns a list of all supported Exchanges.


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

Returns a list of Universal Symbol objects that match a defined string.

Matches on ticker or name.



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

Returns the Universal Symbol object specified by the ticker or the universal_symbol_id.


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

Returns a list of all defined Brokerage authorization Type objects.


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

Returns a list of all defined Brokerage objects.


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

Returns a list of all defined Currency objects.


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

Returns a list of all Exchange Rate Pairs for all supported Currencies.


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

Returns a list of universal symbols that are supported by
the specificied account. Returned symbols are based on the
provided search string, matching on ticker and name.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->symbolSearchUserAccount(
    "snaptrade-user-123", 
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

Sends a signal to the brokerage to cancel the specified order.
This will only work if the order has not yet been executed.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->cancelUserAccountOrder(
    "snaptrade-user-123", 
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

Return the trade object and it's impact on the account for the specified order.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->getOrderImpact(
    "snaptrade-user-123", 
    "USERSECRET123", 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "BUY", 
    "Limit", 
    31.33, 
    31.33, 
    "FOK", 
    3.14, 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    None
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

##### notional_value: [`ManualTradeFormNotionalValue`](./lib/Model/ManualTradeFormNotionalValue.php)<a id="notional_value-manualtradeformnotionalvaluelibmodelmanualtradeformnotionalvaluephp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**ManualTradeAndImpact**](./lib/Model/ManualTradeAndImpact.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/trade/impact` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.getUserAccountQuotes`<a id="snaptradetradinggetuseraccountquotes"></a>

Returns quote(s) from the brokerage for the specified symbol(s).


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->getUserAccountQuotes(
    "snaptrade-user-123", 
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

Places a specified trade in the specified account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->placeForceOrder(
    "snaptrade-user-123", 
    "USERSECRET123", 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    "BUY", 
    "Limit", 
    31.33, 
    31.33, 
    "FOK", 
    3.14, 
    "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    None
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

##### notional_value: [`ManualTradeFormNotionalValue`](./lib/Model/ManualTradeFormNotionalValue.php)<a id="notional_value-manualtradeformnotionalvaluelibmodelmanualtradeformnotionalvaluephp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/trade/place` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.placeOrder`<a id="snaptradetradingplaceorder"></a>

Places the specified trade object. This places the order in the account and
returns the status of the order from the brokerage.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->placeOrder(
    "tradeId_example", 
    "snaptrade-user-123", 
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
    "snaptrade-user-123", 
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
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

Returns performance information (contributions, dividends, rate of return, etc) for a specific timeframe. Please note that Total Equity Timeframe and Rate of Returns are experimental features. Please contact support@snaptrade.com if you notice any inconsistencies.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->transactionsAndReporting->getReportingCustomRange(
    "2022-01-24", 
    "2022-01-24", 
    "snaptrade-user-123", 
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
