# php-hotmart-sdk

A PHP SDK to Use Hotmart API (Hotmart's API does not support Sandbox Mode yet).

## Running Tests

This project is embeded with PhpUnit Test Library. 

To execute all test, you can use the following command:

``` bash

vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/

```

To execute a specific test, you can use the following command:

``` bash

vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/RequestHelperUnitTest

```

## Supported Requests

### BASE URL:
* Production: https://api-hot-connect.hotmart.com
* Sandbox: N/A

### AUTH URL:
* Production: https://api-sec-vlc.hotmart.com
* Sandbox: N/A

### Authentication
* Get Access Token

| Field | Value |
| ----- | ------- |
| URL   | [AUTH-URL](#auth-url)/security/oauth/token?grant_type=client_credentials&client_id=`[CLIENT_ID]`&client_secret=`[CLIENT_SECRET]` |
| HEADER | "Authorization" -> "Basic [BASIC]" |
| METHOD | POST |
| DESCRIPTION | Request Acess Token. |
| PATH    | X |
| BODY    | X |
| RESPONSE  **HTTP200**  | ``` { "access_token": "36d73dc7-4f7d-4ed5-9520-b48e26d1a88d", "token_type": "bearer", "expires_in": 172799, "scope": "read write" }```|

### Affiliation
* Get Hotlinks

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/affiliation/rest/v2/ |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | GET |
| DESCRIPTION | Get hotlinks of products of the users. |
| PATH    | X |
| BODY    | X |
| RESPONSE **HTTP200**   | ResultData(AffiliationResponseVO) - OK Success|
| RESPONSE **HTTP404**   | No affiliation found |
| RESPONSE **HTTP500**   | Internal Server Error |

* Create list of Affiliation

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/affiliation/rest/v2/list |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | POST |
| DESCRIPTION | Create affiliations for a list of given products. If the product has open affiliation, it's created. If the product has an affiliation program which needs approval, a request will be created. If the product doesn't allow affiliation, an error will be occur. |
| PATH    | X |
| BODY    | AffiliationListRequestVO (**Required**) |
| RESPONSE **HTTP200**    | AffiliationCreationResponseVO - 200 OK Success |

### Product
* Delete Offer

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/product/rest/v2/{productId}/offer/{offerId} |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | DELETE |
| DESCRIPTION | Delete a product offer by product id and offer id. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Get Offers of Product

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/product/rest/v2/{productId}/offers/ |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | GET |
| DESCRIPTION | Get offers of product. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Get Product

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/product/rest/v2/{productId} |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | GET |
| DESCRIPTION | Get product information. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Add an Offer

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/product/rest/v2/{productId}/offer |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | POST |
| DESCRIPTION | Add an offer to an existing product. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Update Product

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/product/rest/v2/{productId} |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | PUT |
| DESCRIPTION | Update basic info of a Product. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Update an Offer

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/product/rest/v2/{productId}/offer/{offerId} |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | PUT |
| DESCRIPTION | Update basic info of a Product Offer. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

### Report
* Get Sales History

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/reports/rest/v2/history |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | GET |
| DESCRIPTION | Get the history of sales in which the user got a commission, as producer, affiliate or co-producer |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Get Purchase Details

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/reports/rest/v2/purchaseDetails |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | GET |
| DESCRIPTION | Get the details of a purchase. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

### Subscription
* Get Subscribers

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/subscriber/rest/v2 |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | GET |
| DESCRIPTION | Get the subscribers. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Cancel Subscription

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/subscription/rest/v2/{subscriptionCode}/cancel |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | PUT |
| DESCRIPTION | Cancel subscription of the given code. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

### User
* Get User

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/user/rest/v2 |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | GET |
| DESCRIPTION | Get User by given filters. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Get Logged User

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/user/rest/v2/me |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | GET |
| DESCRIPTION | Get Logged User info. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Create User

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/user/rest/v2/signup |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | POST |
| DESCRIPTION | Create a new user. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

### Switch Plan
* Find Plans for Switch Plan

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/switchPlan/rest/v2/plans |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | POST |
| DESCRIPTION | This service aims to provide the status of plans in relation to plan change. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Send Invite for Switch Plan

| Field | Value |
| ----- | ------- |
| URL   | [BASE-URL](#base-url)/switchPlan/rest/v2/sendInvite |
| HEADER | "Authorization" -> "Bearer `[ACCESS_TOKEN]`" |
| METHOD | POST |
| DESCRIPTION | This service is responsible for sending plan change invitations to the selected subscribers. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |