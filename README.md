# php-hotmart-sdk

A PHP SDK to Use Hotmart API (Hotmart's API does not support Sandbox Mode yet).

# Supported Requests

* BASE URL: https://api-hot-connect.hotmart.com

## Affiliation
* Get Hotlinks

| Field | Value |
| ----- | ------- |
| URL   | /affiliation/rest/v2/ |
| METHOD | GET |
| DESCRIPTION | Get hotlinks of products of the users. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Create list of Affiliation

| Field | Value |
| ----- | ------- |
| URL   | /affiliation/rest/v2/list |
| METHOD | POST |
| DESCRIPTION | Create affiliations for a list of given products. If the product has open affiliation, it's created. If the product has an affiliation program which needs approval, a request will be created. If the product doesn't allow affiliation, an error will be occur. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

## Product
* Delete Offer

| Field | Value |
| ----- | ------- |
| URL   | /product/rest/v2/{productId}/offer/{offerId} |
| METHOD | DELETE |
| DESCRIPTION | Delete a product offer by product id and offer id. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Get Offers of Product

| Field | Value |
| ----- | ------- |
| URL   | /product/rest/v2/{productId}/offers/ |
| METHOD | GET |
| DESCRIPTION | Get offers of product. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Get Product

| Field | Value |
| ----- | ------- |
| URL   | /product/rest/v2/{productId} |
| METHOD | GET |
| DESCRIPTION | Get product information. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Add an Offer

| Field | Value |
| ----- | ------- |
| URL   | /product/rest/v2/{productId}/offer |
| METHOD | POST |
| DESCRIPTION | Add an offer to an existing product. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Update Product

| Field | Value |
| ----- | ------- |
| URL   | /product/rest/v2/{productId} |
| METHOD | PUT |
| DESCRIPTION | Update basic info of a Product. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Update an Offer

| Field | Value |
| ----- | ------- |
| URL   | /product/rest/v2/{productId}/offer/{offerId} |
| METHOD | PUT |
| DESCRIPTION | Update basic info of a Product Offer. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

## Report
* Get Sales History

| Field | Value |
| ----- | ------- |
| URL   | /reports/rest/v2/history |
| METHOD | GET |
| DESCRIPTION | Get the history of sales in which the user got a commission, as producer, affiliate or co-producer |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Get Purchase Details

| Field | Value |
| ----- | ------- |
| URL   | /reports/rest/v2/purchaseDetails |
| METHOD | GET |
| DESCRIPTION | Get the details of a purchase. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

## Subscription
* Get Subscribers

| Field | Value |
| ----- | ------- |
| URL   | /subscriber/rest/v2 |
| METHOD | GET |
| DESCRIPTION | Get the subscribers. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Cancel Subscription

| Field | Value |
| ----- | ------- |
| URL   | /subscription/rest/v2/{subscriptionCode}/cancel |
| METHOD | PUT |
| DESCRIPTION | Cancel subscription of the given code. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

## User
* Get User

| Field | Value |
| ----- | ------- |
| URL   | /user/rest/v2 |
| METHOD | GET |
| DESCRIPTION | Get User by given filters. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Get Logged User

| Field | Value |
| ----- | ------- |
| URL   | /user/rest/v2/me |
| METHOD | GET |
| DESCRIPTION | Get Logged User info. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Create User

| Field | Value |
| ----- | ------- |
| URL   | /user/rest/v2/signup |
| METHOD | POST |
| DESCRIPTION | Create a new user. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

## Switch Plan
* Find Plans for Switch Plan

| Field | Value |
| ----- | ------- |
| URL   | /switchPlan/rest/v2/plans |
| METHOD | POST |
| DESCRIPTION | This service aims to provide the status of plans in relation to plan change. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |

* Send Invite for Switch Plan

| Field | Value |
| ----- | ------- |
| URL   | /switchPlan/rest/v2/sendInvite |
| METHOD | POST |
| DESCRIPTION | This service is responsible for sending plan change invitations to the selected subscribers. |
| PATH    |  |
| BODY    |  |
| RESPONSE    |  |