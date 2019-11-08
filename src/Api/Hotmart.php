<?php

namespace Hotmart\Api;

use Hotmart\HotConnect;

use Hotmart\Api\Environment;

use Hotmart\Api\Affiliation\Request\CreateListOfAffiliationRequest;
use Hotmart\Api\Affiliation\Request\GetHotlinksRequest;
use Hotmart\Api\Product\Request\AddAnOfferRequest;
use Hotmart\Api\Product\Request\DeleteOfferRequest;
use Hotmart\Api\Product\Request\GetOffersOfProductRequest;
use Hotmart\Api\Product\Request\GetAllProductsRequest;
use Hotmart\Api\Product\Request\GetAllCategoriesRequest;
use Hotmart\Api\Product\Request\GetAllSubCategoriesRequest;
use Hotmart\Api\Product\Request\GetProductRequest;
use Hotmart\Api\Product\Request\UpdateAnOfferRequest;
use Hotmart\Api\Product\Request\UpdateProductRequest;
use Hotmart\Api\Report\Request\GetPurchaseDetailsRequest;
use Hotmart\Api\Report\Request\GetSalesHistoryRequest;
use Hotmart\Api\Subscription\Request\CancelSubscriptionRequest;
use Hotmart\Api\Subscription\Request\GetSubscribersRequest;
use Hotmart\Api\Subscription\Request\GetSubscriptionPurchasesRequest;
use Hotmart\Api\SwitchPlan\Request\FindPlanForSwitchPlanRequest;
use Hotmart\Api\SwitchPlan\Request\SendInviteForSwitchPlanRequest;
use Hotmart\Api\User\Request\CreateUserRequest;
use Hotmart\Api\User\Request\GetLoggedUserRequest;
use Hotmart\Api\User\Request\GetUserRequest;

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

    public function createListOfAffiliation($affiliationListRequestVO)
    {
        return (new CreateListOfAffiliationRequest($this->hotconnect, $this->environment))->execute($affiliationListRequestVO);
    }

    public function getHotlinks()
    {
        return (new GetHotlinksRequest($this->hotconnect, $this->environment))->execute();
    }


    public function addAnOffer($productId, $productPaymentRequestVO)
    {
        return (new AddAnOfferRequest($this->hotconnect, $this->environment, $productId))->execute($productPaymentRequestVO);
    }

    public function deleteOffer($productId, $offerId)
    {
        return (new DeleteOfferRequest($this->hotconnect, $this->environment, $productId, $offerId))->execute();
    }

    public function getOffersOfProduct($productId)
    {
        return (new GetOffersOfProductRequest($this->hotconnect, $this->environment, $productId))->execute();
    }

    public function getProduct($productId)
    {
        return (new GetProductRequest($this->hotconnect, $this->environment, $productId))->execute();
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

    public function getAllCategories()
    {
        return (new GetAllCategoriesRequest($this->hotconnect, $this->environment))->execute();
    }

    public function getAllSubCategories()
    {
        return (new GetAllSubCategoriesRequest($this->hotconnect, $this->environment))->execute();
    }

    public function updateAnOffer($productId, $offerId, $productPaymentRequestVO)
    {
        return (new UpdateAnOfferRequest($this->hotconnect, $this->environment, $productId, $offerId))->execute($productPaymentRequestVO);
    }

    public function updateProduct($productId, $productInfoRequestVO)
    {
        return (new UpdateProductRequest($this->hotconnect, $this->environment, $productId))->execute($productInfoRequestVO);
    }

    public function getPurchaseDetails($purchaseDetailsQuery)
    {
        return (new GetPurchaseDetailsRequest($this->hotconnect, $this->environment))->execute($purchaseDetailsQuery);
    }

    public function getSalesHistory($salesHistoryQuery)
    {
        return (new GetSalesHistoryRequest($this->hotconnect, $this->environment))->execute($salesHistoryQuery);
    }


    public function cancelSubscription($subscriptionCode)
    {
        return (new CancelSubscriptionRequest($this->hotconnect, $this->environment, $subscriptionCode))->execute();
    }

    public function getSubscribers($page, $rows)
    {
        return (new GetSubscribersRequest($this->hotconnect, $this->environment, $page, $rows))->execute();
    }

    public function getSubscriptionPurchasesRequest($subscriptionCode)
    {
        return (new GetSubscriptionPurchasesRequest($this->hotconnect, $this->environment))->execute($subscriptionCode);
    }

    public function findPlanForSwitchPlan($switchPlanPlansRequest)
    {
        return (new FindPlanForSwitchPlanRequest($this->hotconnect, $this->environment))->execute($switchPlanPlansRequest);
    }

    public function sendInviteForSwitchPlan($sendInviteSwitchPlanRequest)
    {
        return (new SendInviteForSwitchPlanRequest($this->hotconnect, $this->environment))->execute($sendInviteSwitchPlanRequest);
    }


    public function createUser($userRequestVO)
    {
        return (new CreateUserRequest($this->hotconnect, $this->environment))->execute($userRequestVO);
    }

    public function getLoggedUser()
    {
        return (new GetLoggedUserRequest($this->hotconnect, $this->environment))->execute();
    }

    public function getUser($id, $ucode)
    {
        return (new GetUserRequest($this->hotconnect, $this->environment, $id, $ucode))->execute();
    }
}
