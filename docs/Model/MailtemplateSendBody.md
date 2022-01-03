# MailtemplateSendBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recipients** | **map[string,string]** | A list of recipients with name and mail address. | 
**sales_channel_id** | **string** | Identifier of the sales channel from which the mail should be send. | 
**content_html** | **string** | The content of the mail in HTML format. | 
**content_plain** | **string** | The content of the mail as plain text. | 
**subject** | **string** | Subject of the mail. | 
**sender_name** | **string** | Name of the sender. | 
**sender_email** | **string** | Mail address of the sender. If not set, &#x60;core.basicInformation.email&#x60; or &#x60;core.mailerSettings.senderAddress&#x60; will be used from the shop configuration. | [optional] 
**media_ids** | **string[]** | List of media identifiers which should be attached to the mail. | [optional] 
**bin_attachments** | [**\Swagger\Client\Model\ActionmailtemplatesendBinAttachments[]**](ActionmailtemplatesendBinAttachments.md) | A list of binary attachments which should be added to the mail. | [optional] 
**recipients_bcc** | **map[string,string]** | A list of recipients with name and mail address to be set in BCC. | [optional] 
**recipients_cc** | **map[string,string]** | A list of recipients with name and mail address to be set in CC. | [optional] 
**reply_to** | **map[string,string]** | A list of mail addresses with name and mail address to be set in reply to. | [optional] 
**return_path** | **map[string,string]** | A list of mail addresses with name and mail address to be set in return path. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

