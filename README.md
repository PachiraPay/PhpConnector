# cpaymentconnector

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: v1
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/cpaymentconnector/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new CpaymentConnector\Api\CardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$request = new \CpaymentConnector\Model\CardPaymentCreditHolderRequest(); // \CpaymentConnector\Model\CardPaymentCreditHolderRequest | 

try {
    $result = $apiInstance->v1CardCreditHolderPost($auth_token, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardApi->v1CardCreditHolderPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CardApi* | [**v1CardCreditHolderPost**](docs/Api/CardApi.md#v1cardcreditholderpost) | **POST** /v1/card/creditHolder | Credit a card.
*Card3DsPaymentApi* | [**v1PaymentsCard3dsPaymentAuthenticationPost**](docs/Api/Card3DsPaymentApi.md#v1paymentscard3dspaymentauthenticationpost) | **POST** /v1/payments/card3ds-payment/authentication | Validate authentication.
*Card3DsPaymentApi* | [**v1PaymentsCard3dsPaymentPost**](docs/Api/Card3DsPaymentApi.md#v1paymentscard3dspaymentpost) | **POST** /v1/payments/card3ds-payment | Check enrollment
*Card3DsPaymentApi* | [**v1PaymentsCard3dsPaymentPut**](docs/Api/Card3DsPaymentApi.md#v1paymentscard3dspaymentput) | **PUT** /v1/payments/card3ds-payment | Validate authentication AND authorize / payment
*Card3DsPaymentApi* | [**v1PaymentsCard3dsPaymentWithAuthenticationDataPost**](docs/Api/Card3DsPaymentApi.md#v1paymentscard3dspaymentwithauthenticationdatapost) | **POST** /v1/payments/card3ds-payment/with-authentication-data | Authorization / payment -with- authentication data
*CardPaymentApi* | [**v1PaymentsCardPaymentPost**](docs/Api/CardPaymentApi.md#v1paymentscardpaymentpost) | **POST** /v1/payments/card-payment | Authorization / payment
*DuplicatePaymentApi* | [**v1PaymentsDuplicatePaymentBatchPost**](docs/Api/DuplicatePaymentApi.md#v1paymentsduplicatepaymentbatchpost) | **POST** /v1/payments/duplicate-payment/batch | Duplicate payment batch
*DuplicatePaymentApi* | [**v1PaymentsDuplicatePaymentPost**](docs/Api/DuplicatePaymentApi.md#v1paymentsduplicatepaymentpost) | **POST** /v1/payments/duplicate-payment | Duplicate payment
*PaymentOptionsApi* | [**v1PaymentOptionsMerchantsByMerchantIdSitesByMerchantSiteIdGet**](docs/Api/PaymentOptionsApi.md#v1paymentoptionsmerchantsbymerchantidsitesbymerchantsiteidget) | **GET** /v1/payment-options/merchants/{merchantId}/sites/{merchantSiteId} | Gets payment options
*PaymentOptionsApi* | [**v1PaymentOptionsPost**](docs/Api/PaymentOptionsApi.md#v1paymentoptionspost) | **POST** /v1/payment-options | Gets payment options for a context
*PaymentOptionsApi* | [**v1PaymentOptionsValidateEligibilityPost**](docs/Api/PaymentOptionsApi.md#v1paymentoptionsvalidateeligibilitypost) | **POST** /v1/payment-options/validateEligibility | Validates eligibility
*PaymentSessionApi* | [**v1PaymentSessionsByPaymentSessionIdPaymentResultGet**](docs/Api/PaymentSessionApi.md#v1paymentsessionsbypaymentsessionidpaymentresultget) | **GET** /v1/payment-sessions/{paymentSessionId}/paymentResult | Gets the payment result from its session id.
*PaymentSessionApi* | [**v1PaymentSessionsPost**](docs/Api/PaymentSessionApi.md#v1paymentsessionspost) | **POST** /v1/payment-sessions | Creates a payment session.
*PaymentsApi* | [**v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet**](docs/Api/PaymentsApi.md#v1paymentsallbyorderrefmerchantsbymerchantidsitesbymerchantsiteidget) | **GET** /v1/payments/all/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId} | Gets all payment schedules
*PaymentsApi* | [**v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefmerchantsbymerchantidsitesbymerchantsiteidbyordertagget) | **GET** /v1/payments/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId}/{orderTag} | Gets payment schedule by tag.
*PaymentsApi* | [**v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefmerchantsbymerchantidsitesbymerchantsiteidget) | **GET** /v1/payments/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId} | Gets payment schedule
*PaymentsApi* | [**v1PaymentsByOrderRefOperationsCancelOrRefundPut**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefoperationscancelorrefundput) | **PUT** /v1/payments/{orderRef}/operations/cancelOrRefund | Cancel or refund
*PaymentsApi* | [**v1PaymentsByOrderRefOperationsCapturePut**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefoperationscaptureput) | **PUT** /v1/payments/{orderRef}/operations/capture | Capture
*PaymentsApi* | [**v1PaymentsByOrderRefOperationsRecomputePut**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefoperationsrecomputeput) | **PUT** /v1/payments/{orderRef}/operations/recompute | Recompute schedule
*SecurityTokenApi* | [**v1AuthTokenGet**](docs/Api/SecurityTokenApi.md#v1authtokenget) | **GET** /v1/auth/token | Authenticate
*StoredPaymentMethodsApi* | [**v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdCustomerRefByCustomerRefGet**](docs/Api/StoredPaymentMethodsApi.md#v1storedpaymentmethodsmerchantsbymerchantidsitesbymerchantsiteidcustomerrefbycustomerrefget) | **GET** /v1/stored-payment-methods/merchants/{merchantId}/sites/{merchantSiteId}/customerRef/{customerRef} | Gets stored payment methods by CustomerRef
*StoredPaymentMethodsApi* | [**v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdDelete**](docs/Api/StoredPaymentMethodsApi.md#v1storedpaymentmethodsmerchantsbymerchantidsitesbymerchantsiteidstoredpaymentmethodidbystoredpaymentmethodiddelete) | **DELETE** /v1/stored-payment-methods/merchants/{merchantId}/sites/{merchantSiteId}/storedPaymentMethodId/{storedPaymentMethodId} | Deletes a stored payment method
*StoredPaymentMethodsApi* | [**v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdGet**](docs/Api/StoredPaymentMethodsApi.md#v1storedpaymentmethodsmerchantsbymerchantidsitesbymerchantsiteidstoredpaymentmethodidbystoredpaymentmethodidget) | **GET** /v1/stored-payment-methods/merchants/{merchantId}/sites/{merchantSiteId}/storedPaymentMethodId/{storedPaymentMethodId} | Gets a stored payment method
*StoredPaymentMethodsApi* | [**v1StoredPaymentMethodsPost**](docs/Api/StoredPaymentMethodsApi.md#v1storedpaymentmethodspost) | **POST** /v1/stored-payment-methods | Stores a new payment method.


## Documentation For Models

 - [AcquiringBank](docs/Model/AcquiringBank.md)
 - [Card3DsAuthorizeWithAuthDataRequest](docs/Model/Card3DsAuthorizeWithAuthDataRequest.md)
 - [Card3DsCheckEnrollmentRequest](docs/Model/Card3DsCheckEnrollmentRequest.md)
 - [Card3DsCheckEnrollmentResponse](docs/Model/Card3DsCheckEnrollmentResponse.md)
 - [Card3DsValidateAuthenticationAndAuthorizeRequest](docs/Model/Card3DsValidateAuthenticationAndAuthorizeRequest.md)
 - [Card3DsValidateAuthenticationRequest](docs/Model/Card3DsValidateAuthenticationRequest.md)
 - [Card3DsValidateAuthenticationResponse](docs/Model/Card3DsValidateAuthenticationResponse.md)
 - [CardData](docs/Model/CardData.md)
 - [CardPaymentContextData](docs/Model/CardPaymentContextData.md)
 - [CardPaymentCreditHolderRequest](docs/Model/CardPaymentCreditHolderRequest.md)
 - [CardPaymentCreditHolderResponse](docs/Model/CardPaymentCreditHolderResponse.md)
 - [CardPaymentRequest](docs/Model/CardPaymentRequest.md)
 - [CardPaymentResponse](docs/Model/CardPaymentResponse.md)
 - [Configuration](docs/Model/Configuration.md)
 - [CopyReference](docs/Model/CopyReference.md)
 - [Customer](docs/Model/Customer.md)
 - [DuplicatePaymentBatchRequest](docs/Model/DuplicatePaymentBatchRequest.md)
 - [DuplicatePaymentRequest](docs/Model/DuplicatePaymentRequest.md)
 - [GetPaymentSessionResult](docs/Model/GetPaymentSessionResult.md)
 - [LoanOffer](docs/Model/LoanOffer.md)
 - [LoanTerm](docs/Model/LoanTerm.md)
 - [Options](docs/Model/Options.md)
 - [Order](docs/Model/Order.md)
 - [OrderData](docs/Model/OrderData.md)
 - [PaymentCard](docs/Model/PaymentCard.md)
 - [PaymentCardOption](docs/Model/PaymentCardOption.md)
 - [PaymentFee](docs/Model/PaymentFee.md)
 - [PaymentOperationsRequest](docs/Model/PaymentOperationsRequest.md)
 - [PaymentOperationsResponse](docs/Model/PaymentOperationsResponse.md)
 - [PaymentOption](docs/Model/PaymentOption.md)
 - [PaymentOptionsContextData](docs/Model/PaymentOptionsContextData.md)
 - [PaymentOptionsRequest](docs/Model/PaymentOptionsRequest.md)
 - [PaymentOptionsResponse](docs/Model/PaymentOptionsResponse.md)
 - [PaymentScheduleRule](docs/Model/PaymentScheduleRule.md)
 - [PaymentSessionRequest](docs/Model/PaymentSessionRequest.md)
 - [PaymentSessionResponse](docs/Model/PaymentSessionResponse.md)
 - [RedirectionData](docs/Model/RedirectionData.md)
 - [Schedule](docs/Model/Schedule.md)
 - [ScheduleLight](docs/Model/ScheduleLight.md)
 - [ShippingAddress](docs/Model/ShippingAddress.md)
 - [StoredCard](docs/Model/StoredCard.md)
 - [StoredPaymentMethod](docs/Model/StoredPaymentMethod.md)
 - [StoredPaymentMethodRequest](docs/Model/StoredPaymentMethodRequest.md)
 - [StoredPaymentMethodResponse](docs/Model/StoredPaymentMethodResponse.md)
 - [SubOrder](docs/Model/SubOrder.md)
 - [ValidationModeOverride](docs/Model/ValidationModeOverride.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author



