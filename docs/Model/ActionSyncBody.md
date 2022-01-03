# ActionSyncBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | The action indicates what should happen with the provided payload. * &#x60;upsert&#x60;: The Sync API does not differ between create and update operations, but always performs an upsert operation. During an upsert, the system checks whether the entity already exists in the system and updates it if an identifier has been passed, otherwise a new entity is created with this identifier. * &#x60;delete&#x60;: Deletes entites with the provided identifiers | 
**entity** | **string** | The entity that should be processed with the payload. | 
**payload** | **object[]** | Contains a list of changesets for an entity. If the action type is &#x60;delete&#x60;, a list of identifiers can be provided. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

