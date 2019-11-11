<?php

namespace Hotmart\Api;

use Hotmart\HotConnect;

use Hotmart\Api\Environment;

// Affiliation Endpoints
use Hotmart\Api\Affiliation\Request\GetHotlinksRequest;
use Hotmart\Api\Affiliation\Request\CreateListOfAffiliationRequest;

// Product Endpoints
use Hotmart\Api\Product\Request\DeleteOfferRequest;
use Hotmart\Api\Product\Request\GetOffersOfProductRequest;
use Hotmart\Api\Product\Request\GetAllProductsRequest;
use Hotmart\Api\Product\Request\GetProductRequest;
use Hotmart\Api\Product\Request\GetAllCategoriesRequest;
use Hotmart\Api\Product\Request\GetAllSubCategoriesRequest;
use Hotmart\Api\Product\Request\AddAnOfferRequest;
use Hotmart\Api\Product\Request\UpdateProductRequest;
use Hotmart\Api\Product\Request\UpdateAnOfferRequest;

// Report Endpoints
use Hotmart\Api\Report\Request\GetSalesHistoryRequest;
use Hotmart\Api\Report\Request\GetPurchaseDetailsRequest;

// Subscription Endpoints
use Hotmart\Api\Subscription\Request\GetSubscribersRequest;
use Hotmart\Api\Subscription\Request\GetSubscriptionPurchasesRequest;
use Hotmart\Api\Subscription\Request\CancelAListOfActiveSubscriptionsRequest;
use Hotmart\Api\Subscription\Request\ReactivateAListOfInactiveSubscriptionsRequest;
use Hotmart\Api\Subscription\Request\ReactivateAndChargeAListOfInactiveSubscriptionsRequest;
use Hotmart\Api\Subscription\Request\CancelSubscriptionRequest;
use Hotmart\Api\Subscription\Request\RefundPaymentOfASubscriptionRequest;
use Hotmart\Api\Subscription\Request\ExchangeBillingDayOfASubscriptionRequest;
use Hotmart\Api\Subscription\Request\ReactivateAnInactiveSubscriptionRequest;
use Hotmart\Api\Subscription\Request\ReactivateAndChargeAnInactiveSubscriptionRequest;

// User Endpoints
use Hotmart\Api\User\Request\GetUserRequest;
use Hotmart\Api\User\Request\GetLoggedUserRequest;
use Hotmart\Api\User\Request\CreateUserRequest;

// Switch Plan Endpoints
use Hotmart\Api\SwitchPlan\Request\FindPlansForSwitchPlanRequest;
use Hotmart\Api\SwitchPlan\Request\SendInviteForSwitchPlanRequest;
use Hotmart\Api\SwitchPlan\Request\AuthorizeSwitchPlanBatchRequest;
use Hotmart\Api\SwitchPlan\Request\AuthorizeSwitchPlanRequest;

/**
 * The Hotmart API (HOTCONNECT) SDK front-end;
 */
class Hotmart
{

    private $environment;

    private $hotconnect;

    /**
     * Create an instance of HOTMART choosing the environment where the
     * requests will be send
     *     
     * @param Environment environment
     *            The environment: {@link Environment::production()} or
     *            {@link Environment::sandbox()}
     */
    public function __construct(Environment $environment = null, HotConnect $hotConnect)
    {
        if ($environment == null) {
            $environment = Environment::sandbox();
        }

        $this->environment = $environment;

        $this->hotconnect = $hotConnect;
    }

    // Affiliation Endpoints

    public function getHotlinks()
    {
        return (new GetHotlinksRequest($this->hotconnect, $this->environment))->execute();
    }

    public function createListOfAffiliation($affiliationListRequestVO)
    {
        return (new CreateListOfAffiliationRequest($this->hotconnect, $this->environment))->execute($affiliationListRequestVO);
    }

    // Product Endpoints

    public function deleteOffer($productId, $offerId)
    {
        return (new DeleteOfferRequest($this->hotconnect, $this->environment, $productId, $offerId))->execute();
    }

    public function getOffersOfProduct($productId)
    {
        return (new GetOffersOfProductRequest($this->hotconnect, $this->environment, $productId))->execute();
    }

    public function getAllProducts(
        $name = null,
        $categoryId = null,
        $subcategoryId = null,
        $page = null,
        $rows = null
    ) {
        $getAllProducts = new GetAllProductsRequest(
            $this->hotconnect,
            $this->environment,
            $name,
            $categoryId,
            $subcategoryId,
            $page,
            $rows
        );
        return $getAllProducts->execute();
    }

    public function getProduct($productId)
    {
        return (new GetProductRequest($this->hotconnect, $this->environment, $productId))->execute();
    }

    public function getAllCategories()
    {
        return (new GetAllCategoriesRequest($this->hotconnect, $this->environment))->execute();
    }

    public function getAllSubCategories()
    {
        return (new GetAllSubCategoriesRequest($this->hotconnect, $this->environment))->execute();
    }

    public function addAnOffer($productId, $productPaymentRequestVO)
    {
        return (new AddAnOfferRequest($this->hotconnect, $this->environment, $productId))->execute($productPaymentRequestVO);
    }

    public function updateProduct($productId, $productInfoRequestVO)
    {
        return (new UpdateProductRequest($this->hotconnect, $this->environment, $productId))->execute($productInfoRequestVO);
    }

    public function updateAnOffer($productId, $offerId, $productPaymentRequestVO)
    {
        return (new UpdateAnOfferRequest($this->hotconnect, $this->environment, $productId, $offerId))->execute($productPaymentRequestVO);
    }

    // Reports Endpoints

    public function getSalesHistory($salesHistoryQuery)
    {
        return (new GetSalesHistoryRequest($this->hotconnect, $this->environment))->execute($salesHistoryQuery);
    }

    public function getPurchaseDetails($purchaseDetailsQuery)
    {
        return (new GetPurchaseDetailsRequest($this->hotconnect, $this->environment))->execute($purchaseDetailsQuery);
    }

    // Subscriptions Endpoints

    public function getSubscribers($getSubscribersRequestQuery)
    {
        return (new GetSubscribersRequest($this->hotconnect, $this->environment))->execute($getSubscribersRequestQuery);
    }

    public function getSubscriptionPurchasesRequest($subscriptionCode)
    {
        return (new GetSubscriptionPurchasesRequest($this->hotconnect, $this->environment, $subscriptionCode))->execute();
    }

    public function cancelAListOfActiveSubscriptionsRequest($sendEmail, $subscriptionsArray)
    {
        return (new CancelAListOfActiveSubscriptionsRequest($this->hotconnect, $this->environment, $sendEmail))->execute($subscriptionsArray);
    }

    public function reactivateAListOfInactiveSubscriptionsRequest($subscriptionsArray)
    {
        return (new ReactivateAListOfInactiveSubscriptionsRequest($this->hotconnect, $this->environment))->execute($subscriptionsArray);
    }

    public function reactivateAndChargeAListOfInactiveSubscriptionsRequest($subscriptionsArray)
    {
        return (new ReactivateAndChargeAListOfInactiveSubscriptionsRequest($this->hotconnect, $this->environment))->execute($subscriptionsArray);
    }

    public function cancelSubscription($subscriptionCode, $sendEmail)
    {
        return (new CancelSubscriptionRequest($this->hotconnect, $this->environment, $subscriptionCode))->execute($sendEmail);
    }

    // Not available Yet
    public function refundPaymentOfASubscriptionRequest($subscriptionCode, $paymentReference)
    {
        return (new RefundPaymentOfASubscriptionRequest($this->hotconnect, $this->environment, $subscriptionCode, $paymentReference))->execute();
    }

    // Not available Yet
    public function exchangeBillingDayOfASubscriptionRequest($subscriptionCode, $day)
    {
        return (new ExchangeBillingDayOfASubscriptionRequest($this->hotconnect, $this->environment, $subscriptionCode))->execute($day);
    }

    // Not available Yet
    public function reactivateAnInactiveSubscriptionRequest($subscriptionCode)
    {
        return (new ReactivateAnInactiveSubscriptionRequest($this->hotconnect, $this->environment))->execute($subscriptionCode);
    }

    // Not available Yet
    public function reactivateAndChargeAnInactiveSubscriptionRequest($subscriptionCode)
    {
        return (new ReactivateAndChargeAnInactiveSubscriptionRequest($this->hotconnect, $this->environment))->execute($subscriptionCode);
    }

    // Users Endpoints

    public function getUser($id, $ucode)
    {
        return (new GetUserRequest($this->hotconnect, $this->environment, $id, $ucode))->execute();
    }

    public function getLoggedUser()
    {
        return (new GetLoggedUserRequest($this->hotconnect, $this->environment))->execute();
    }

    public function createUser($userRequestVO)
    {
        return (new CreateUserRequest($this->hotconnect, $this->environment))->execute($userRequestVO);
    }

    // Switch Plan Endpoints

    public function findPlanForSwitchPlan($switchPlanPlansRequest)
    {
        return (new FindPlansForSwitchPlanRequest($this->hotconnect, $this->environment))->execute($switchPlanPlansRequest);
    }

    public function sendInviteForSwitchPlan($sendInviteSwitchPlanRequest)
    {
        return (new SendInviteForSwitchPlanRequest($this->hotconnect, $this->environment))->execute($sendInviteSwitchPlanRequest);
    }

    public function authorizeSwitchPlanBatchRequest($switchPlanAuthoriseRequest)
    {
        return (new AuthorizeSwitchPlanBatchRequest($this->hotconnect, $this->environment))->execute($switchPlanAuthoriseRequest);
    }

    public function authorizeSwitchPlanRequest($switchPlanAuthoriseRequest)
    {
        return (new authorizeSwitchPlanRequest($this->hotconnect, $this->environment))->execute($switchPlanAuthoriseRequest);
    }
}
