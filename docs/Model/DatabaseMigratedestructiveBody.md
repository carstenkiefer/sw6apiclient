# DatabaseMigratedestructiveBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | Name of the bundle whose migrations are to be synced. | [optional] [default to 'core']
**mode** | **string** | The mode defines what type of migrations are executed. * Possible values: * &#x60;all&#x60;: Execute all migrations * &#x60;blue-green&#x60;: Blue-green safe     * update from 6.a.* to 6.(a+1).0 -&gt; migrations for major 6.a are NOT executed     * rollback from 6.(a+1).0 to 6.a.* is still possible     * update from 6.(a+1).0 to 6.(a+1).1 or higher - migrations for major 6.a are executed     * rollback possible from 6.(a+1).1 to 6.(a+1).0 possible     * but rollback to 6.a.* not possible anymore! * &#x60;safe&#x60;: Executing the migrations of the penultimate major. This should always be safe | [optional] [default to 'safe']
**limit** | **int** | Limit the amout of migrations to be executed. By default, there is no limit. | [optional] 
**until** | **int** | A timestamp that controls until which &#x60;creation_date&#x60; migrations are executed.     By default, all migrations are executed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

