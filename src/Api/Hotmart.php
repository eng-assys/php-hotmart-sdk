<?php

namespace Hotmart\Api;

use Hotmart\HotConnect;

use Hotmart\Api\Environment;

use Hotmart\Api\Affiliation\Request\CreateListOfAffiliationRequest;
use Hotmart\Api\Affiliation\Request\GetHotlinksRequest;
use Hotmart\Api\Product\Request\AddAnOfferRequest;
use Hotmart\Api\Product\Request\DeleteOfferRequest;
use Hotmart\Api\Product\Request\GetOfferOfProductRequest;
use Hotmart\Api\Product\Request\GetProduct;
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

    public function createListOfAffiliation($auth)
    {
        $createListOfAffiliationRequest = new CreateListOfAffiliationRequest($this->hotconnect, $this->environment);
        return $createListOfAffiliationRequest->execute($auth);
    }

    public function getHotlinks()
    {
        $getHotlinksRequest = new GetHotlinksRequest($this->hotconnect, $this->environment);
        return $getHotlinksRequest->execute();
    }


    public function addAnOffer($auth)
    {
        $addAnOfferRequest = new AddAnOfferRequest($this->hotconnect, $this->environment);
        return $addAnOfferRequest->execute($auth);
    }

    public function deleteOffer($productId, $offerId)
    {
        $deleteOfferRequest = new DeleteOfferRequest($this->hotconnect, $this->environment, $productId, $offerId);
        return $deleteOfferRequest->execute();
    }

    public function getOfferOfProduct($auth)
    {
        $getOfferOfProductRequest = new GetOfferOfProductRequest($this->hotconnect, $this->environment);
        return $getOfferOfProductRequest->execute($auth);
    }

    public function getProduct($auth)
    {
        $getProduct = new GetProduct($this->hotconnect, $this->environment);
        return $getProduct->execute($auth);
    }

    public function updateAnOffer($auth)
    {
        $updateAnOfferRequest = new UpdateAnOfferRequest($this->hotconnect, $this->environment);
        return $updateAnOfferRequest->execute($auth);
    }

    public function updateProduct($auth)
    {
        $updateProductRequest = new UpdateProductRequest($this->hotconnect, $this->environment);
        return $updateProductRequest->execute($auth);
    }


    public function getPurchaseDetails($auth)
    {
        $getPurchaseDetailsRequest = new GetPurchaseDetailsRequest($this->hotconnect, $this->environment);
        return $getPurchaseDetailsRequest->execute($auth);
    }

    public function getSalesHistory($auth)
    {
        $getSalesHistoryRequest = new GetSalesHistoryRequest($this->hotconnect, $this->environment);
        return $getSalesHistoryRequest->execute($auth);
    }


    public function cancelSubscription($auth)
    {
        $cancelSubscriptionRequest = new CancelSubscriptionRequest($this->hotconnect, $this->environment);
        return $cancelSubscriptionRequest->execute($auth);
    }

    public function getSubscribers($auth)
    {
        $getSubscribersRequest = new GetSubscribersRequest($this->hotconnect, $this->environment);
        return $getSubscribersRequest->execute($auth);
    }


    public function findPlanForSwitchPlan($auth)
    {
        $findPlanForSwitchPlanRequest = new FindPlanForSwitchPlanRequest($this->hotconnect, $this->environment);
        return $findPlanForSwitchPlanRequest->execute($auth);
    }

    public function sendInviteForSwitchPlan($auth)
    {
        $sendInviteForSwitchPlanRequest = new SendInviteForSwitchPlanRequest($this->hotconnect, $this->environment);
        return $sendInviteForSwitchPlanRequest->execute($auth);
    }


    public function createUser($auth)
    {
        $createUserRequest = new CreateUserRequest($this->hotconnect, $this->environment);
        return $createUserRequest->execute($auth);
    }

    public function getLoggedUser($auth)
    {
        $getLoggedUserRequest = new GetLoggedUserRequest($this->hotconnect, $this->environment);
        return $getLoggedUserRequest->execute($auth);
    }

    public function getUserRequest ($auth)
    {
        $getUserRequest = new GetUserRequest($this->hotconnect, $this->environment);
        return $getUserRequest->execute($auth);
    }

    
}