# Cpayment.Connector

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
      "url": "https://github.com/CCommercePayment/PhpConnector.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "CCommercePayment"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Cpayment.Connector/vendor/autoload.php');
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



$apiInstance = new OpenAPI\Client\Api\CardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$request = new \OpenAPI\Client\Model\CardPaymentCreditHolderRequest(); // \OpenAPI\Client\Model\CardPaymentCreditHolderRequest | 

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
*CardApi* | [**v1CardCreditHolderPost**](docs/Api/CardApi.md#v1cardcreditholderpost) | **POST** /v1/card/creditHolder | Credit a card payment
*Card3DsPaymentApi* | [**v1PaymentsCard3dsPaymentPost**](docs/Api/Card3DsPaymentApi.md#v1paymentscard3dspaymentpost) | **POST** /v1/payments/card3ds-payment | Achieve a 3DS payment (CheckEnrollment)
*Card3DsPaymentApi* | [**v1PaymentsCard3dsPaymentPut**](docs/Api/Card3DsPaymentApi.md#v1paymentscard3dspaymentput) | **PUT** /v1/payments/card3ds-payment | Finish the 3DS payment.  Reuse the order references and the paymentRequestId (returned from the POST).
*CardPaymentApi* | [**v1PaymentsCardPaymentPost**](docs/Api/CardPaymentApi.md#v1paymentscardpaymentpost) | **POST** /v1/payments/card-payment | Achieve a payment with a card without 3DSecure.  To achieve a 3DS payment (CheckEnrollment), see the /payment/card3ds-payment resource.
*DuplicatePaymentApi* | [**v1PaymentsDuplicatePaymentBatchPost**](docs/Api/DuplicatePaymentApi.md#v1paymentsduplicatepaymentbatchpost) | **POST** /v1/payments/duplicate-payment/batch | Achieve a batch of payments by copy of previously processed payments, with the same payment method.
*DuplicatePaymentApi* | [**v1PaymentsDuplicatePaymentPost**](docs/Api/DuplicatePaymentApi.md#v1paymentsduplicatepaymentpost) | **POST** /v1/payments/duplicate-payment | Achieve a payment by copy of a previously processed payment, with the same payment method.
*PaymentOptionsApi* | [**v1PaymentOptionsMerchantsByMerchantIdSitesByMerchantSiteIdGet**](docs/Api/PaymentOptionsApi.md#v1paymentoptionsmerchantsbymerchantidsitesbymerchantsiteidget) | **GET** /v1/payment-options/merchants/{merchantId}/sites/{merchantSiteId} | Gets the payment options for a specified site.
*PaymentOptionsApi* | [**v1PaymentOptionsPost**](docs/Api/PaymentOptionsApi.md#v1paymentoptionspost) | **POST** /v1/payment-options | Gets the payment options for a specified context.
*PaymentOptionsApi* | [**v1PaymentOptionsValidateEligibilityPost**](docs/Api/PaymentOptionsApi.md#v1paymentoptionsvalidateeligibilitypost) | **POST** /v1/payment-options/validateEligibility | Validates the eligibility of the given payment option, according to context.
*PaymentSessionApi* | [**v1PaymentSessionsByPaymentSessionIdPaymentResultGet**](docs/Api/PaymentSessionApi.md#v1paymentsessionsbypaymentsessionidpaymentresultget) | **GET** /v1/payment-sessions/{paymentSessionId}/paymentResult | Gets the payment result from its session id.
*PaymentSessionApi* | [**v1PaymentSessionsPost**](docs/Api/PaymentSessionApi.md#v1paymentsessionspost) | **POST** /v1/payment-sessions | Creates a payment session.
*PaymentsApi* | [**v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet**](docs/Api/PaymentsApi.md#v1paymentsallbyorderrefmerchantsbymerchantidsitesbymerchantsiteidget) | **GET** /v1/payments/all/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId} | Gets ALL the details for a specified OrderRef.
*PaymentsApi* | [**v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefmerchantsbymerchantidsitesbymerchantsiteidbyordertagget) | **GET** /v1/payments/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId}/{orderTag} | Gets the details for a specified couple of OrderRef/OrderTag.
*PaymentsApi* | [**v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefmerchantsbymerchantidsitesbymerchantsiteidget) | **GET** /v1/payments/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId} | Gets the details for a specified OrderRef.
*PaymentsApi* | [**v1PaymentsByOrderRefOperationsCancelOrRefundPut**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefoperationscancelorrefundput) | **PUT** /v1/payments/{orderRef}/operations/cancelOrRefund | Executes a cancel or refund operation on the specified OrderRef.
*PaymentsApi* | [**v1PaymentsByOrderRefOperationsCapturePut**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefoperationscaptureput) | **PUT** /v1/payments/{orderRef}/operations/capture | Executes a capture operation on the specified OrderRef.
*PaymentsApi* | [**v1PaymentsByOrderRefOperationsRecomputePut**](docs/Api/PaymentsApi.md#v1paymentsbyorderrefoperationsrecomputeput) | **PUT** /v1/payments/{orderRef}/operations/recompute | Executes a recompute operation on the specified OrderRef.
*SecurityTokenApi* | [**v1AuthTokenGet**](docs/Api/SecurityTokenApi.md#v1authtokenget) | **GET** /v1/auth/token | Get the token provided by the Security Token Service (STS).  The authentication token is mandatory for the others api calls.  It&#39;s expire after 48h by default.
*StoredPaymentMethodsApi* | [**v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdCustomerRefByCustomerRefGet**](docs/Api/StoredPaymentMethodsApi.md#v1storedpaymentmethodsmerchantsbymerchantidsitesbymerchantsiteidcustomerrefbycustomerrefget) | **GET** /v1/stored-payment-methods/merchants/{merchantId}/sites/{merchantSiteId}/customerRef/{customerRef} | Gets the stored payment methods by customer reference.
*StoredPaymentMethodsApi* | [**v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdDelete**](docs/Api/StoredPaymentMethodsApi.md#v1storedpaymentmethodsmerchantsbymerchantidsitesbymerchantsiteidstoredpaymentmethodidbystoredpaymentmethodiddelete) | **DELETE** /v1/stored-payment-methods/merchants/{merchantId}/sites/{merchantSiteId}/storedPaymentMethodId/{storedPaymentMethodId} | Deletes the specified stored payment method.
*StoredPaymentMethodsApi* | [**v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdGet**](docs/Api/StoredPaymentMethodsApi.md#v1storedpaymentmethodsmerchantsbymerchantidsitesbymerchantsiteidstoredpaymentmethodidbystoredpaymentmethodidget) | **GET** /v1/stored-payment-methods/merchants/{merchantId}/sites/{merchantSiteId}/storedPaymentMethodId/{storedPaymentMethodId} | Gets the stored payment method by identifier.
*StoredPaymentMethodsApi* | [**v1StoredPaymentMethodsPost**](docs/Api/StoredPaymentMethodsApi.md#v1storedpaymentmethodspost) | **POST** /v1/stored-payment-methods | Creates the specified stored payment method.


## Documentation For Models

 - [AcquiringBank](docs/Model/AcquiringBank.md)
 - [Card3DsPaymentPutRequest](docs/Model/Card3DsPaymentPutRequest.md)
 - [Card3DsPaymentRequest](docs/Model/Card3DsPaymentRequest.md)
 - [Card3DsPaymentResponse](docs/Model/Card3DsPaymentResponse.md)
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


