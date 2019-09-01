<?php

namespace Hotmart\Api;

use Hotmart\HotConnect;

use Hotmart\Api\Environment;

use Hotmart\Api\Affiliation\Request\CreateListOfAffiliationRequest;
use Hotmart\Api\Affiliation\Request\GetHotlinksRequest;
use Hotmart\Api\Product\Request\AddAnOfferRequest;
use Hotmart\Api\Product\Request\DeleteOfferRequest;
use Hotmart\Api\Product\Request\GetOffersOfProductRequest;
use Hotmart\Api\Product\Request\GetProductRequest;
use Hotmart\Api\Product\Request\UpdateAnOfferRequest;
use Hotmart\Api\Product\Request\UpdateProductRequest;
use Hotmart\Api\Report\Request\GetPurchaseDetailsRequest;
use Hotmart\Api\Report\Request\GetSalesHistoryRequest;
use Hotmart\Api\Subscription\Request\CancelSubscriptionRequest;
use Hotmart\Api\Subscription\Request\GetSubscribersRequest;
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
        $createListOfAffiliationRequest = new CreateListOfAffiliationRequest($this->hotconnect, $this->environment);
        return $createListOfAffiliationRequest->execute($affiliationListRequestVO);
    }

    public function getHotlinks()
    {
        $getHotlinksRequest = new GetHotlinksRequest($this->hotconnect, $this->environment);
        return $getHotlinksRequest->execute();
    }


    public function addAnOffer($productId, $productPaymentRequestVO)
    {
        $addAnOfferRequest = new AddAnOfferRequest($this->hotconnect, $this->environment, $productId);
        return $addAnOfferRequest->execute($productPaymentRequestVO);
    }

    public function deleteOffer($productId, $offerId)
    {
        $deleteOfferRequest = new DeleteOfferRequest($this->hotconnect, $this->environment, $productId, $offerId);
        return $deleteOfferRequest->execute();
    }

    public function getOffersOfProduct($productId)
    {
        $getOffersOfProductRequest = new GetOffersOfProductRequest($this->hotconnect, $this->environment, $productId);
        return $getOffersOfProductRequest->execute();
    }

    public function getProduct($productId)
    {
        $getProduct = new GetProductRequest($this->hotconnect, $this->environment, $productId);
        return $getProduct->execute();
    }

    public function updateAnOffer($productId, $offerId, $productPaymentRequestVO)
    {
        $updateAnOfferRequest = new UpdateAnOfferRequest($this->hotconnect, $this->environment, $productId, $offerId);
        return $updateAnOfferRequest->execute($productPaymentRequestVO);
    }

    public function updateProduct($productId, $productInfoRequestVO)
    {
        $updateProductRequest = new UpdateProductRequest($this->hotconnect, $this->environment, $productId);
        return $updateProductRequest->execute($productInfoRequestVO);
    }

    public function getPurchaseDetails($purchaseDetailsQuery)
    {
        $getPurchaseDetailsRequest = new GetPurchaseDetailsRequest($this->hotconnect, $this->environment);
        return $getPurchaseDetailsRequest->execute($purchaseDetailsQuery);
    }

    public function getSalesHistory($salesHistoryQuery)
    {
        $getSalesHistoryRequest = new GetSalesHistoryRequest($this->hotconnect, $this->environment);
        return $getSalesHistoryRequest->execute($salesHistoryQuery);
    }


    public function cancelSubscription($subscriptionCode)
    {
        $cancelSubscriptionRequest = new CancelSubscriptionRequest($this->hotconnect, $this->environment, $subscriptionCode);
        return $cancelSubscriptionRequest->execute();
    }

    public function getSubscribers($page, $rows)
    {
        $getSubscribersRequest = new GetSubscribersRequest($this->hotconnect, $this->environment, $page, $rows);
        return $getSubscribersRequest->execute();
    }


    public function findPlanForSwitchPlan($switchPlanPlansRequest)
    {
        $findPlanForSwitchPlanRequest = new FindPlanForSwitchPlanRequest($this->hotconnect, $this->environment);
        return $findPlanForSwitchPlanRequest->execute($switchPlanPlansRequest);
    }

    public function sendInviteForSwitchPlan($sendInviteSwitchPlanRequest)
    {
        $sendInviteForSwitchPlanRequest = new SendInviteForSwitchPlanRequest($this->hotconnect, $this->environment);
        return $sendInviteForSwitchPlanRequest->execute($sendInviteSwitchPlanRequest);
    }


    public function createUser($userRequestVO)
    {
        $createUserRequest = new CreateUserRequest($this->hotconnect, $this->environment);
        return $createUserRequest->execute($userRequestVO);
    }

    public function getLoggedUser()
    {
        $getLoggedUserRequest = new GetLoggedUserRequest($this->hotconnect, $this->environment);
        return $getLoggedUserRequest->execute();
    }

    public function getUser ($id, $ucode)
    {
        $getUserRequest = new GetUserRequest($this->hotconnect, $this->environment, $id, $ucode);
        return $getUserRequest->execute();
    }

    
}