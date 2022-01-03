# Swagger\Client\DatabaseMigrationsApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**migrate**](DatabaseMigrationsApi.md#migrate) | **POST** /_action/database/migrate | Execute migrations
[**migrateDestructive**](DatabaseMigrationsApi.md#migratedestructive) | **POST** /_action/database/migrate-destructive | Execute destructive migrations
[**syncMigrations**](DatabaseMigrationsApi.md#syncmigrations) | **POST** /_action/database/sync-migration | Sync migrations to the database

# **migrate**
> migrate($body)

Execute migrations

Executes all migrations for the provided bundle name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DatabaseMigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DatabaseMigrateBody(); // \Swagger\Client\Model\DatabaseMigrateBody | 

try {
    $apiInstance->migrate($body);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseMigrationsApi->migrate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DatabaseMigrateBody**](../Model/DatabaseMigrateBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrateDestructive**
> migrateDestructive($body)

Execute destructive migrations

Executes all destructive migrations for the provided bundle name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DatabaseMigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DatabaseMigratedestructiveBody(); // \Swagger\Client\Model\DatabaseMigratedestructiveBody | 

try {
    $apiInstance->migrateDestructive($body);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseMigrationsApi->migrateDestructive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DatabaseMigratedestructiveBody**](../Model/DatabaseMigratedestructiveBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncMigrations**
> syncMigrations($body)

Sync migrations to the database

Reads all migrations of the provided bundle name and inserts them to the `migration` database table.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DatabaseMigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DatabaseSyncmigrationBody(); // \Swagger\Client\Model\DatabaseSyncmigrationBody | 

try {
    $apiInstance->syncMigrations($body);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseMigrationsApi->syncMigrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DatabaseSyncmigrationBody**](../Model/DatabaseSyncmigrationBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

