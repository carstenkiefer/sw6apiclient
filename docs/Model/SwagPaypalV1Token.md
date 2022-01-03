# SwagPaypalV1Token

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scope** | **string** | Scopes expressed in the form of resource URL endpoints. The value of the scope parameter is expressed as a list of space-delimited, case-sensitive strings. | [optional] 
**nonce** | **string** |  | [optional] 
**access_token** | **string** | The access token issued by PayPal. After the access token expires (see $expiresIn), you must request a new access token. | [optional] 
**token_type** | **string** | The type of the token issued as described in OAuth2.0 RFC6749, Section 7.1. Value is case insensitive. | [optional] 
**app_id** | **string** |  | [optional] 
**expires_in** | **int** | The lifetime of the access token, in seconds. | [optional] 
**expire_date_time** | [**\DateTime**](\DateTime.md) | Calculated expiration date | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

