<?php

namespace AlibabaCloud\WebsiteBuild\V20250429;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllocateSupabaseForAdmin allocateSupabaseForAdmin(array $options = [])
 * @method BatchCheckResourceMeasure batchCheckResourceMeasure(array $options = [])
 * @method BindAppDomain bindAppDomain(array $options = [])
 * @method CheckResourceMeasure checkResourceMeasure(array $options = [])
 * @method CheckUserResourceMeasure checkUserResourceMeasure(array $options = [])
 * @method CopyAppPluginConfig copyAppPluginConfig(array $options = [])
 * @method CreateAIStaffChat createAIStaffChat(array $options = [])
 * @method CreateAIStaffConversation createAIStaffConversation(array $options = [])
 * @method CreateAppAssistantAgent createAppAssistantAgent(array $options = [])
 * @method CreateAppAssistantAgentSsoLogin createAppAssistantAgentSsoLogin(array $options = [])
 * @method CreateAppChat createAppChat(array $options = [])
 * @method CreateAppInstance createAppInstance(array $options = [])
 * @method CreateAppInstanceTicket createAppInstanceTicket(array $options = [])
 * @method CreateAppTokenService createAppTokenService(array $options = [])
 * @method CreateLogoTask createLogoTask(array $options = [])
 * @method CreateMaterialDirectory createMaterialDirectory(array $options = [])
 * @method DeleteAppDomainCertificate deleteAppDomainCertificate(array $options = [])
 * @method DeleteAppDomainRedirect deleteAppDomainRedirect(array $options = [])
 * @method DeleteAppInstanceFile deleteAppInstanceFile(array $options = [])
 * @method DeleteAppSupabaseSecrets deleteAppSupabaseSecrets(array $options = [])
 * @method DeleteMaterialDirectory deleteMaterialDirectory(array $options = [])
 * @method DeleteMaterialTask deleteMaterialTask(array $options = [])
 * @method DescribeAppDomainDnsRecord describeAppDomainDnsRecord(array $options = [])
 * @method DispatchConsoleAPIForPartner dispatchConsoleAPIForPartner(array $options = [])
 * @method EditPluginConfig editPluginConfig(array $options = [])
 * @method ExportMaterialFile exportMaterialFile(array $options = [])
 * @method GetAIStaffPreviewUrl getAIStaffPreviewUrl(array $options = [])
 * @method GetAppCodeWorkspaceDetail getAppCodeWorkspaceDetail(array $options = [])
 * @method GetAppConversation getAppConversation(array $options = [])
 * @method GetAppConversationLockStatus getAppConversationLockStatus(array $options = [])
 * @method GetAppDatabaseTableSchemas getAppDatabaseTableSchemas(array $options = [])
 * @method GetAppFileContent getAppFileContent(array $options = [])
 * @method GetAppInstance getAppInstance(array $options = [])
 * @method GetAppInstanceEntitlement getAppInstanceEntitlement(array $options = [])
 * @method GetAppInstanceForAdmin getAppInstanceForAdmin(array $options = [])
 * @method GetAppInstanceForPartner getAppInstanceForPartner(array $options = [])
 * @method GetAppInstanceTempShortUrl getAppInstanceTempShortUrl(array $options = [])
 * @method GetAppPluginConfig getAppPluginConfig(array $options = [])
 * @method GetAppPublishStatus getAppPublishStatus(array $options = [])
 * @method GetAppRecommendedCommodities getAppRecommendedCommodities(array $options = [])
 * @method GetAppRequirement getAppRequirement(array $options = [])
 * @method GetAppSandboxPreviewUrl getAppSandboxPreviewUrl(array $options = [])
 * @method GetAppSeoStatus getAppSeoStatus(array $options = [])
 * @method GetAppSeoTrends getAppSeoTrends(array $options = [])
 * @method GetAppSitemap getAppSitemap(array $options = [])
 * @method GetAppSupabaseAuthConfig getAppSupabaseAuthConfig(array $options = [])
 * @method GetAppSupabaseInstance getAppSupabaseInstance(array $options = [])
 * @method GetAppSupabaseSecrets getAppSupabaseSecrets(array $options = [])
 * @method GetAppTemplate getAppTemplate(array $options = [])
 * @method GetAppTokenService getAppTokenService(array $options = [])
 * @method GetAppWorkspaceDirectory getAppWorkspaceDirectory(array $options = [])
 * @method GetCreateLogoTask getCreateLogoTask(array $options = [])
 * @method GetDomainInfoForPartner getDomainInfoForPartner(array $options = [])
 * @method GetIcpFilingInfoForPartner getIcpFilingInfoForPartner(array $options = [])
 * @method GetLlmProxyConfigForAdmin getLlmProxyConfigForAdmin(array $options = [])
 * @method GetUserAccessTokenForPartner getUserAccessTokenForPartner(array $options = [])
 * @method GetUserTmpIdentityForPartner getUserTmpIdentityForPartner(array $options = [])
 * @method IntrospectAppInstanceTicketForPreview introspectAppInstanceTicketForPreview(array $options = [])
 * @method ListAIStaffChatEvents listAIStaffChatEvents(array $options = [])
 * @method ListAIStaffChatMessages listAIStaffChatMessages(array $options = [])
 * @method ListAppAssistantAgents listAppAssistantAgents(array $options = [])
 * @method ListAppChatMessages listAppChatMessages(array $options = [])
 * @method ListAppCommoditySpecificationsForPartner listAppCommoditySpecificationsForPartner(array $options = [])
 * @method ListAppCommoditySpecificationsV2ForPartner listAppCommoditySpecificationsV2ForPartner(array $options = [])
 * @method ListAppConversationMessages listAppConversationMessages(array $options = [])
 * @method ListAppConversations listAppConversations(array $options = [])
 * @method ListAppDomainRedirectRecords listAppDomainRedirectRecords(array $options = [])
 * @method ListAppInstanceDomains listAppInstanceDomains(array $options = [])
 * @method ListAppInstances listAppInstances(array $options = [])
 * @method ListAppPluginConfigs listAppPluginConfigs(array $options = [])
 * @method ListAppPlugins listAppPlugins(array $options = [])
 * @method ListAppPublishHistory listAppPublishHistory(array $options = [])
 * @method ListAppTemplateDicts listAppTemplateDicts(array $options = [])
 * @method ListAppTemplates listAppTemplates(array $options = [])
 * @method ListIsvPaymentPluginConfigs listIsvPaymentPluginConfigs(array $options = [])
 * @method ModifyAppInstanceSpec modifyAppInstanceSpec(array $options = [])
 * @method ModifyMaterialDirectory modifyMaterialDirectory(array $options = [])
 * @method ModifyMaterialFile modifyMaterialFile(array $options = [])
 * @method ModifyMaterialFileStatus modifyMaterialFileStatus(array $options = [])
 * @method MoveMaterialDirectory moveMaterialDirectory(array $options = [])
 * @method MoveMaterialFile moveMaterialFile(array $options = [])
 * @method OperateAppInstanceForPartner operateAppInstanceForPartner(array $options = [])
 * @method OperateAppServiceForPartner operateAppServiceForPartner(array $options = [])
 * @method OperateAppTemplateLike operateAppTemplateLike(array $options = [])
 * @method OperateSupabaseForAdmin operateSupabaseForAdmin(array $options = [])
 * @method PublishAppInstance publishAppInstance(array $options = [])
 * @method PushResourceMeasure pushResourceMeasure(array $options = [])
 * @method QueryInspirationAccountDetails queryInspirationAccountDetails(array $options = [])
 * @method QueryInspirationBalance queryInspirationBalance(array $options = [])
 * @method QueryInspirationConsumeRecords queryInspirationConsumeRecords(array $options = [])
 * @method QueryMaterialDirectoryTree queryMaterialDirectoryTree(array $options = [])
 * @method QueryMaterialFileDetail queryMaterialFileDetail(array $options = [])
 * @method QueryMaterialFileList queryMaterialFileList(array $options = [])
 * @method QueryMaterialFileSummaryInfo queryMaterialFileSummaryInfo(array $options = [])
 * @method QueryMaterialTaskDetail queryMaterialTaskDetail(array $options = [])
 * @method QueryMaterialTaskList queryMaterialTaskList(array $options = [])
 * @method QuerySupabaseAuthConfigsForAdmin querySupabaseAuthConfigsForAdmin(array $options = [])
 * @method QuerySupabaseConfigsForAdmin querySupabaseConfigsForAdmin(array $options = [])
 * @method QuerySupabaseInstanceInfoForAdmin querySupabaseInstanceInfoForAdmin(array $options = [])
 * @method ReconnectAppChat reconnectAppChat(array $options = [])
 * @method RefreshAppInstanceTicket refreshAppInstanceTicket(array $options = [])
 * @method RefundAppInstanceForPartner refundAppInstanceForPartner(array $options = [])
 * @method RenewAppInstance renewAppInstance(array $options = [])
 * @method RenewAppSandbox renewAppSandbox(array $options = [])
 * @method RollbackAppCodeSnapshot rollbackAppCodeSnapshot(array $options = [])
 * @method RollbackAppInstancePublish rollbackAppInstancePublish(array $options = [])
 * @method SaveAppRequirement saveAppRequirement(array $options = [])
 * @method SaveAppSupabaseSecrets saveAppSupabaseSecrets(array $options = [])
 * @method SearchImage searchImage(array $options = [])
 * @method SetAppDomainCertificate setAppDomainCertificate(array $options = [])
 * @method SubmitAppSeoIndex submitAppSeoIndex(array $options = [])
 * @method SubmitMaterialTask submitMaterialTask(array $options = [])
 * @method SwitchAppConversation switchAppConversation(array $options = [])
 * @method SyncAppInstanceForPartner syncAppInstanceForPartner(array $options = [])
 * @method UnbindAppDomain unbindAppDomain(array $options = [])
 * @method UpdateAppChatMessage updateAppChatMessage(array $options = [])
 * @method UpdateAppCode updateAppCode(array $options = [])
 * @method UpdateAppFile updateAppFile(array $options = [])
 * @method UpdateAppInstance updateAppInstance(array $options = [])
 * @method UpdateAppSeoStatus updateAppSeoStatus(array $options = [])
 * @method UpdateAppSupabaseAuthConfig updateAppSupabaseAuthConfig(array $options = [])
 * @method UpdateAppSupabaseSecret updateAppSupabaseSecret(array $options = [])
 * @method UploadAppSiteValidationFile uploadAppSiteValidationFile(array $options = [])
 * @method UploadMaterialFile uploadMaterialFile(array $options = [])
 */
class WebsiteBuildApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'WebsiteBuild';

    /** @var string */
    public $version = '2025-04-29';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class AllocateSupabaseForAdmin extends Rpc
{
}

/**
 * @method string getOrderComponentParams()
 * @method $this withOrderComponentParams($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getEspBizId()
 * @method $this withEspBizId($value)
 * @method string getResourceCheckItems()
 * @method $this withResourceCheckItems($value)
 * @method string getBelongId()
 * @method $this withBelongId($value)
 * @method string getBelongIdType()
 * @method $this withBelongIdType($value)
 */
class BatchCheckResourceMeasure extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class BindAppDomain extends Rpc
{
}

/**
 * @method string getResourceCode()
 * @method $this withResourceCode($value)
 * @method string getOrderComponentParams()
 * @method $this withOrderComponentParams($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getEspBizId()
 * @method $this withEspBizId($value)
 * @method string getBelongId()
 * @method $this withBelongId($value)
 * @method string getResourceValue()
 * @method $this withResourceValue($value)
 * @method string getBelongIdType()
 * @method $this withBelongIdType($value)
 */
class CheckResourceMeasure extends Rpc
{
}

/**
 * @method string getResourceCode()
 * @method $this withResourceCode($value)
 * @method string getOrderComponentParams()
 * @method $this withOrderComponentParams($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getEspBizId()
 * @method $this withEspBizId($value)
 * @method string getBelongId()
 * @method $this withBelongId($value)
 * @method string getResourceValue()
 * @method $this withResourceValue($value)
 * @method string getBelongIdType()
 * @method $this withBelongIdType($value)
 */
class CheckUserResourceMeasure extends Rpc
{
}

/**
 * @method string getSourceBizId()
 * @method $this withSourceBizId($value)
 * @method string getTargetBizId()
 * @method $this withTargetBizId($value)
 */
class CopyAppPluginConfig extends Rpc
{
}

/**
 * @method string getMetaData()
 * @method string getChatId()
 * @method string getConversationId()
 * @method string getBizId()
 * @method array getMessages()
 */
class CreateAIStaffChat extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetaData($value)
    {
        $this->data['MetaData'] = $value;
        $this->options['form_params']['MetaData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChatId($value)
    {
        $this->data['ChatId'] = $value;
        $this->options['form_params']['ChatId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConversationId($value)
    {
        $this->data['ConversationId'] = $value;
        $this->options['form_params']['ConversationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param array $messages
     *
     * @return $this
     */
	public function withMessages(array $messages)
	{
	    $this->data['Messages'] = $messages;
		foreach ($messages as $depth1 => $depth1Value) {
			if(isset($depth1Value['MetaData'])){
				$this->options['form_params']['Messages.' . ($depth1 + 1) . '.MetaData'] = $depth1Value['MetaData'];
			}
			if(isset($depth1Value['Role'])){
				$this->options['form_params']['Messages.' . ($depth1 + 1) . '.Role'] = $depth1Value['Role'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['form_params']['Messages.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Content'])){
				$this->options['form_params']['Messages.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
			}
			if(isset($depth1Value['ContentType'])){
				$this->options['form_params']['Messages.' . ($depth1 + 1) . '.ContentType'] = $depth1Value['ContentType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getText()
 */
class CreateAIStaffConversation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getAgentName()
 * @method $this withAgentName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPlatformType()
 * @method $this withPlatformType($value)
 */
class CreateAppAssistantAgent extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPlatformType()
 * @method $this withPlatformType($value)
 * @method string getTargetUrl()
 * @method $this withTargetUrl($value)
 */
class CreateAppAssistantAgentSsoLogin extends Rpc
{
}

/**
 * @method string getChatId()
 * @method $this withChatId($value)
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getSiteId()
 * @method $this withSiteId($value)
 * @method string getMessages()
 * @method $this withMessages($value)
 * @method string getBotId()
 * @method $this withBotId($value)
 */
class CreateAppChat extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCreateAction()
 * @method $this withCreateAction($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceGroupId()
 * @method string getSiteVersion()
 * @method $this withSiteVersion($value)
 * @method string getDeployArea()
 * @method $this withDeployArea($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTags()
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 */
class CreateAppInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CreateAppInstanceTicket extends Rpc
{
}

/**
 * @method string getCreateAction()
 * @method $this withCreateAction($value)
 */
class CreateAppTokenService extends Rpc
{
}

/**
 * @method string getNegativePrompt()
 * @method $this withNegativePrompt($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getLogoVersion()
 * @method $this withLogoVersion($value)
 */
class CreateLogoTask extends Rpc
{
}

/**
 * @method string getParentDirectoryId()
 * @method $this withParentDirectoryId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateMaterialDirectory extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteAppDomainCertificate extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteAppDomainRedirect extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getFilePath()
 * @method $this withFilePath($value)
 */
class DeleteAppInstanceFile extends Rpc
{
}

/**
 * @method string getKeysJson()
 * @method $this withKeysJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteAppSupabaseSecrets extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 */
class DeleteMaterialDirectory extends Rpc
{
}

/**
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class DeleteMaterialTask extends Rpc
{
}

/**
 * @method string getPurpose()
 * @method $this withPurpose($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeAppDomainDnsRecord extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLiveToken()
 * @method $this withLiveToken($value)
 * @method string getSiteHost()
 * @method $this withSiteHost($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class DispatchConsoleAPIForPartner extends Rpc
{
}

/**
 * @method string getPluginConfig()
 * @method $this withPluginConfig($value)
 * @method string getPluginName()
 * @method $this withPluginName($value)
 * @method string getPluginId()
 * @method $this withPluginId($value)
 * @method string getPluginDesc()
 * @method $this withPluginDesc($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class EditPluginConfig extends Rpc
{
}

/**
 * @method string getFileIds()
 * @method $this withFileIds($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ExportMaterialFile extends Rpc
{
}

/**
 * @method string getRestart()
 * @method string getConversationId()
 */
class GetAIStaffPreviewUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRestart($value)
    {
        $this->data['Restart'] = $value;
        $this->options['form_params']['Restart'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConversationId($value)
    {
        $this->data['ConversationId'] = $value;
        $this->options['form_params']['ConversationId'] = $value;

        return $this;
    }
}

/**
 * @method string getSiteId()
 * @method $this withSiteId($value)
 */
class GetAppCodeWorkspaceDetail extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getBotId()
 * @method $this withBotId($value)
 */
class GetAppConversation extends Rpc
{
}

/**
 * @method string getConversationId()
 */
class GetAppConversationLockStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConversationId($value)
    {
        $this->data['ConversationId'] = $value;
        $this->options['form_params']['ConversationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetAppDatabaseTableSchemas extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getFilePath()
 * @method $this withFilePath($value)
 */
class GetAppFileContent extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppInstance extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppInstanceEntitlement extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppInstanceForAdmin extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppInstanceForPartner extends Rpc
{
}

/**
 * @method string getBizId()
 */
class GetAppInstanceTempShortUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getPluginId()
 * @method string getBizId()
 */
class GetAppPluginConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPluginId($value)
    {
        $this->data['PluginId'] = $value;
        $this->options['form_params']['PluginId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getWebsiteDomain()
 * @method $this withWebsiteDomain($value)
 * @method string getDeployOrderId()
 * @method $this withDeployOrderId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppPublishStatus extends Rpc
{
}

/**
 * @method string getResourceConditions()
 * @method $this withResourceConditions($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppRecommendedCommodities extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 */
class GetAppRequirement extends Rpc
{
}

/**
 * @method string getRestart()
 * @method string getConversationId()
 */
class GetAppSandboxPreviewUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRestart($value)
    {
        $this->data['Restart'] = $value;
        $this->options['form_params']['Restart'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConversationId($value)
    {
        $this->data['ConversationId'] = $value;
        $this->options['form_params']['ConversationId'] = $value;

        return $this;
    }
}

/**
 * @method string getSeType()
 * @method $this withSeType($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppSeoStatus extends Rpc
{
}

/**
 * @method string getSeType()
 * @method $this withSeType($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppSeoTrends extends Rpc
{
}

/**
 * @method string getSeType()
 * @method $this withSeType($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppSitemap extends Rpc
{
}

/**
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppSupabaseAuthConfig extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppSupabaseInstance extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class GetAppSupabaseSecrets extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetAppTemplate extends Rpc
{
}

class GetAppTokenService extends Rpc
{
}

/**
 * @method string getDeep()
 * @method string getConversationId()
 * @method string getFilePath()
 */
class GetAppWorkspaceDirectory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeep($value)
    {
        $this->data['Deep'] = $value;
        $this->options['form_params']['Deep'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConversationId($value)
    {
        $this->data['ConversationId'] = $value;
        $this->options['form_params']['ConversationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['form_params']['FilePath'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetCreateLogoTask extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetDomainInfoForPartner extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetIcpFilingInfoForPartner extends Rpc
{
}

/**
 * @method string getCapability()
 * @method $this withCapability($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetLlmProxyConfigForAdmin extends Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getSiteHost()
 * @method $this withSiteHost($value)
 */
class GetUserAccessTokenForPartner extends Rpc
{
}

/**
 * @method string getAuthPurpose()
 * @method $this withAuthPurpose($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getServiceLinkedRole()
 * @method $this withServiceLinkedRole($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetUserTmpIdentityForPartner extends Rpc
{
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class IntrospectAppInstanceTicketForPreview extends Rpc
{
}

/**
 * @method string getChatId()
 * @method string getConversationId()
 * @method string getLastEventId()
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ListAIStaffChatEvents extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChatId($value)
    {
        $this->data['ChatId'] = $value;
        $this->options['form_params']['ChatId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConversationId($value)
    {
        $this->data['ConversationId'] = $value;
        $this->options['form_params']['ConversationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLastEventId($value)
    {
        $this->data['LastEventId'] = $value;
        $this->options['form_params']['LastEventId'] = $value;

        return $this;
    }
}

/**
 * @method string getConversationId()
 * @method string getStartCreateTime()
 * @method string getPageSize()
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ListAIStaffChatMessages extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConversationId($value)
    {
        $this->data['ConversationId'] = $value;
        $this->options['form_params']['ConversationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartCreateTime($value)
    {
        $this->data['StartCreateTime'] = $value;
        $this->options['form_params']['StartCreateTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPlatformType()
 * @method $this withPlatformType($value)
 */
class ListAppAssistantAgents extends Rpc
{
}

/**
 * @method string getChatId()
 * @method $this withChatId($value)
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getSectionId()
 * @method $this withSectionId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAppChatMessages extends Rpc
{
}

class ListAppCommoditySpecificationsForPartner extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAppCommoditySpecificationsV2ForPartner extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getStartCreateTime()
 * @method $this withStartCreateTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSiteId()
 * @method $this withSiteId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAppConversationMessages extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSiteId()
 * @method $this withSiteId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getBotId()
 * @method $this withBotId($value)
 * @method string getStartModifyTime()
 * @method $this withStartModifyTime($value)
 * @method string getEndModifyTime()
 * @method $this withEndModifyTime($value)
 */
class ListAppConversations extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAppDomainRedirectRecords extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getDomainKeyword()
 * @method $this withDomainKeyword($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListAppInstanceDomains extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTimeBegin()
 * @method $this withEndTimeBegin($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getEndTimeEnd()
 * @method $this withEndTimeEnd($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListAppInstances extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAppPluginConfigs extends Rpc
{
}

/**
 * @method string getPhase()
 * @method $this withPhase($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAppPlugins extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getWebsiteDomain()
 * @method $this withWebsiteDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListAppPublishHistory extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDictType()
 * @method $this withDictType($value)
 */
class ListAppTemplateDicts extends Rpc
{
}

/**
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getProductVersion()
 * @method $this withProductVersion($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getColorScheme()
 * @method $this withColorScheme($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListAppTemplates extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListIsvPaymentPluginConfigs extends Rpc
{
}

/**
 * @method string getDeployArea()
 * @method $this withDeployArea($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getSiteVersion()
 * @method $this withSiteVersion($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 */
class ModifyAppInstanceSpec extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 */
class ModifyMaterialDirectory extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class ModifyMaterialFile extends Rpc
{
}

/**
 * @method string getFileIds()
 * @method $this withFileIds($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyMaterialFileStatus extends Rpc
{
}

/**
 * @method string getParentDirectoryId()
 * @method $this withParentDirectoryId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getSortNum()
 * @method $this withSortNum($value)
 */
class MoveMaterialDirectory extends Rpc
{
}

/**
 * @method string getFileIds()
 * @method $this withFileIds($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 */
class MoveMaterialFile extends Rpc
{
}

/**
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getOperateEvent()
 * @method $this withOperateEvent($value)
 */
class OperateAppInstanceForPartner extends Rpc
{
}

/**
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOperateEvent()
 * @method $this withOperateEvent($value)
 */
class OperateAppServiceForPartner extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getLiked()
 * @method $this withLiked($value)
 */
class OperateAppTemplateLike extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getWhereClause()
 * @method $this withWhereClause($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getOrderByClause()
 * @method $this withOrderByClause($value)
 * @method string getExecuteSql()
 * @method $this withExecuteSql($value)
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class OperateSupabaseForAdmin extends Rpc
{
}

/**
 * @method string getLogicalNumber()
 * @method $this withLogicalNumber($value)
 * @method string getDeployChannel()
 * @method $this withDeployChannel($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getWeappAction()
 * @method $this withWeappAction($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPublishNumber()
 * @method $this withPublishNumber($value)
 */
class PublishAppInstance extends Rpc
{
}

/**
 * @method string getMetaData()
 * @method $this withMetaData($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getResourceCode()
 * @method $this withResourceCode($value)
 * @method string getMeasureData()
 * @method $this withMeasureData($value)
 * @method string getUseTime()
 * @method $this withUseTime($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getBelongId()
 * @method $this withBelongId($value)
 * @method string getUseType()
 * @method $this withUseType($value)
 * @method string getBelongIdType()
 * @method $this withBelongIdType($value)
 */
class PushResourceMeasure extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryInspirationAccountDetails extends Rpc
{
}

class QueryInspirationBalance extends Rpc
{
}

/**
 * @method string getSceneName()
 * @method $this withSceneName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryInspirationConsumeRecords extends Rpc
{
}

/**
 * @method string getHiddenPublic()
 * @method $this withHiddenPublic($value)
 * @method string getRoot()
 * @method $this withRoot($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryMaterialDirectoryTree extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class QueryMaterialFileDetail extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getMinFileSize()
 * @method $this withMinFileSize($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getSuffixList()
 * @method $this withSuffixList($value)
 * @method string getMaxFileSize()
 * @method $this withMaxFileSize($value)
 * @method string getTypeList()
 * @method $this withTypeList($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryMaterialFileList extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getTypeList()
 * @method $this withTypeList($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryMaterialFileSummaryInfo extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryMaterialTaskDetail extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskTypeList()
 * @method $this withTaskTypeList($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryMaterialTaskList extends Rpc
{
}

/**
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QuerySupabaseAuthConfigsForAdmin extends Rpc
{
}

/**
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QuerySupabaseConfigsForAdmin extends Rpc
{
}

/**
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QuerySupabaseInstanceInfoForAdmin extends Rpc
{
}

/**
 * @method string getChatId()
 * @method $this withChatId($value)
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getLastEventId()
 * @method $this withLastEventId($value)
 */
class ReconnectAppChat extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefreshAppInstanceTicket extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRefundReason()
 * @method $this withRefundReason($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefundAppInstanceForPartner extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 */
class RenewAppInstance extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 */
class RenewAppSandbox extends Rpc
{
}

/**
 * @method string getTargetLogicalNumber()
 * @method $this withTargetLogicalNumber($value)
 * @method string getSiteId()
 * @method $this withSiteId($value)
 */
class RollbackAppCodeSnapshot extends Rpc
{
}

/**
 * @method string getDeployChannel()
 * @method $this withDeployChannel($value)
 * @method string getQuickRollback()
 * @method $this withQuickRollback($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPublishNumber()
 * @method $this withPublishNumber($value)
 */
class RollbackAppInstancePublish extends Rpc
{
}

/**
 * @method string getPrd()
 * @method string getConversationId()
 * @method $this withConversationId($value)
 */
class SaveAppRequirement extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrd($value)
    {
        $this->data['Prd'] = $value;
        $this->options['form_params']['Prd'] = $value;

        return $this;
    }
}

/**
 * @method string getSecretsJson()
 * @method $this withSecretsJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class SaveAppSupabaseSecrets extends Rpc
{
}

/**
 * @method string getHasPerson()
 * @method $this withHasPerson($value)
 * @method string getMaxWidth()
 * @method $this withMaxWidth($value)
 * @method string getOssKey()
 * @method $this withOssKey($value)
 * @method string getImageCategory()
 * @method $this withImageCategory($value)
 * @method string getMaxHeight()
 * @method $this withMaxHeight($value)
 * @method string getImageRatio()
 * @method $this withImageRatio($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getColorHex()
 * @method $this withColorHex($value)
 * @method string getMinHeight()
 * @method $this withMinHeight($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMinWidth()
 * @method $this withMinWidth($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class SearchImage extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPublicKey()
 * @method $this withPublicKey($value)
 * @method string getCertificateType()
 * @method $this withCertificateType($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getCertificateName()
 * @method $this withCertificateName($value)
 */
class SetAppDomainCertificate extends Rpc
{
}

/**
 * @method string getSubmitLater()
 * @method $this withSubmitLater($value)
 * @method string getSeType()
 * @method $this withSeType($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class SubmitAppSeoIndex extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskParam()
 * @method $this withTaskParam($value)
 */
class SubmitMaterialTask extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getBotId()
 * @method $this withBotId($value)
 */
class SwitchAppConversation extends Rpc
{
}

/**
 * @method string getAppInstance()
 * @method $this withAppInstance($value)
 * @method string getSourceBizId()
 * @method $this withSourceBizId($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class SyncAppInstanceForPartner extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class UnbindAppDomain extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAddedMetaData()
 * @method $this withAddedMetaData($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class UpdateAppChatMessage extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class UpdateAppCode extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getFilePath()
 * @method $this withFilePath($value)
 */
class UpdateAppFile extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method string getSiteVersion()
 * @method $this withSiteVersion($value)
 * @method string getDeployArea()
 * @method $this withDeployArea($value)
 * @method string getTags()
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIconUrl()
 * @method $this withIconUrl($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 * @method string getThumbnailUrl()
 * @method $this withThumbnailUrl($value)
 */
class UpdateAppInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }
}

/**
 * @method string getSeType()
 * @method $this withSeType($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class UpdateAppSeoStatus extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getConfigsJson()
 * @method $this withConfigsJson($value)
 */
class UpdateAppSupabaseAuthConfig extends Rpc
{
}

/**
 * @method string getSecretType()
 * @method $this withSecretType($value)
 * @method string getSecretKey()
 * @method $this withSecretKey($value)
 * @method string getSecretValue()
 * @method $this withSecretValue($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class UpdateAppSupabaseSecret extends Rpc
{
}

/**
 * @method string getFileType()
 * @method $this withFileType($value)
 * @method string getSiteHost()
 * @method $this withSiteHost($value)
 * @method string getFile()
 * @method $this withFile($value)
 * @method string getFileContent()
 * @method $this withFileContent($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class UploadAppSiteValidationFile extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 */
class UploadMaterialFile extends Rpc
{
}
