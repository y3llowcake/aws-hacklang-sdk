<?hh // strict
namespace slack\aws\config;

interface Config Service {
  public function DescribeComplianceByResource(DescribeComplianceByResourceRequest) Awaitable<Errors\Result<DescribeComplianceByResourceResponse>>;
  public function DescribeConfigurationAggregators(DescribeConfigurationAggregatorsRequest) Awaitable<Errors\Result<DescribeConfigurationAggregatorsResponse>>;
  public function DescribeDeliveryChannelStatus(DescribeDeliveryChannelStatusRequest) Awaitable<Errors\Result<DescribeDeliveryChannelStatusResponse>>;
  public function DescribePendingAggregationRequests(DescribePendingAggregationRequestsRequest) Awaitable<Errors\Result<DescribePendingAggregationRequestsResponse>>;
  public function GetAggregateConfigRuleComplianceSummary(GetAggregateConfigRuleComplianceSummaryRequest) Awaitable<Errors\Result<GetAggregateConfigRuleComplianceSummaryResponse>>;
  public function GetAggregateResourceConfig(GetAggregateResourceConfigRequest) Awaitable<Errors\Result<GetAggregateResourceConfigResponse>>;
  public function PutDeliveryChannel(PutDeliveryChannelRequest) Awaitable<Errors\Error>;
  public function DeleteRemediationConfiguration(DeleteRemediationConfigurationRequest) Awaitable<Errors\Result<DeleteRemediationConfigurationResponse>>;
  public function DescribeConfigurationAggregatorSourcesStatus(DescribeConfigurationAggregatorSourcesStatusRequest) Awaitable<Errors\Result<DescribeConfigurationAggregatorSourcesStatusResponse>>;
  public function DescribeConformancePacks(DescribeConformancePacksRequest) Awaitable<Errors\Result<DescribeConformancePacksResponse>>;
  public function DescribeDeliveryChannels(DescribeDeliveryChannelsRequest) Awaitable<Errors\Result<DescribeDeliveryChannelsResponse>>;
  public function GetComplianceSummaryByConfigRule() Awaitable<Errors\Result<GetComplianceSummaryByConfigRuleResponse>>;
  public function GetConformancePackComplianceDetails(GetConformancePackComplianceDetailsRequest) Awaitable<Errors\Result<GetConformancePackComplianceDetailsResponse>>;
  public function StartConfigRulesEvaluation(StartConfigRulesEvaluationRequest) Awaitable<Errors\Result<StartConfigRulesEvaluationResponse>>;
  public function DescribeAggregateComplianceByConfigRules(DescribeAggregateComplianceByConfigRulesRequest) Awaitable<Errors\Result<DescribeAggregateComplianceByConfigRulesResponse>>;
  public function DescribeRemediationExceptions(DescribeRemediationExceptionsRequest) Awaitable<Errors\Result<DescribeRemediationExceptionsResponse>>;
  public function GetComplianceDetailsByConfigRule(GetComplianceDetailsByConfigRuleRequest) Awaitable<Errors\Result<GetComplianceDetailsByConfigRuleResponse>>;
  public function DeleteConformancePack(DeleteConformancePackRequest) Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function PutOrganizationConformancePack(PutOrganizationConformancePackRequest) Awaitable<Errors\Result<PutOrganizationConformancePackResponse>>;
  public function DescribeOrganizationConfigRuleStatuses(DescribeOrganizationConfigRuleStatusesRequest) Awaitable<Errors\Result<DescribeOrganizationConfigRuleStatusesResponse>>;
  public function PutRemediationExceptions(PutRemediationExceptionsRequest) Awaitable<Errors\Result<PutRemediationExceptionsResponse>>;
  public function DeleteConfigRule(DeleteConfigRuleRequest) Awaitable<Errors\Error>;
  public function DescribeAggregationAuthorizations(DescribeAggregationAuthorizationsRequest) Awaitable<Errors\Result<DescribeAggregationAuthorizationsResponse>>;
  public function DescribeOrganizationConformancePackStatuses(DescribeOrganizationConformancePackStatusesRequest) Awaitable<Errors\Result<DescribeOrganizationConformancePackStatusesResponse>>;
  public function GetDiscoveredResourceCounts(GetDiscoveredResourceCountsRequest) Awaitable<Errors\Result<GetDiscoveredResourceCountsResponse>>;
  public function ListDiscoveredResources(ListDiscoveredResourcesRequest) Awaitable<Errors\Result<ListDiscoveredResourcesResponse>>;
  public function PutAggregationAuthorization(PutAggregationAuthorizationRequest) Awaitable<Errors\Result<PutAggregationAuthorizationResponse>>;
  public function DeleteRetentionConfiguration(DeleteRetentionConfigurationRequest) Awaitable<Errors\Error>;
  public function GetComplianceDetailsByResource(GetComplianceDetailsByResourceRequest) Awaitable<Errors\Result<GetComplianceDetailsByResourceResponse>>;
  public function PutConformancePack(PutConformancePackRequest) Awaitable<Errors\Result<PutConformancePackResponse>>;
  public function PutRetentionConfiguration(PutRetentionConfigurationRequest) Awaitable<Errors\Result<PutRetentionConfigurationResponse>>;
  public function DeleteDeliveryChannel(DeleteDeliveryChannelRequest) Awaitable<Errors\Error>;
  public function DescribeConfigurationRecorders(DescribeConfigurationRecordersRequest) Awaitable<Errors\Result<DescribeConfigurationRecordersResponse>>;
  public function DescribeConformancePackStatus(DescribeConformancePackStatusRequest) Awaitable<Errors\Result<DescribeConformancePackStatusResponse>>;
  public function GetConformancePackComplianceSummary(GetConformancePackComplianceSummaryRequest) Awaitable<Errors\Result<GetConformancePackComplianceSummaryResponse>>;
  public function PutConfigRule(PutConfigRuleRequest) Awaitable<Errors\Error>;
  public function PutOrganizationConfigRule(PutOrganizationConfigRuleRequest) Awaitable<Errors\Result<PutOrganizationConfigRuleResponse>>;
  public function DescribeComplianceByConfigRule(DescribeComplianceByConfigRuleRequest) Awaitable<Errors\Result<DescribeComplianceByConfigRuleResponse>>;
  public function DeleteConfigurationAggregator(DeleteConfigurationAggregatorRequest) Awaitable<Errors\Error>;
  public function DeleteEvaluationResults(DeleteEvaluationResultsRequest) Awaitable<Errors\Result<DeleteEvaluationResultsResponse>>;
  public function DeleteOrganizationConfigRule(DeleteOrganizationConfigRuleRequest) Awaitable<Errors\Error>;
  public function DeletePendingAggregationRequest(DeletePendingAggregationRequestRequest) Awaitable<Errors\Error>;
  public function GetAggregateComplianceDetailsByConfigRule(GetAggregateComplianceDetailsByConfigRuleRequest) Awaitable<Errors\Result<GetAggregateComplianceDetailsByConfigRuleResponse>>;
  public function GetAggregateDiscoveredResourceCounts(GetAggregateDiscoveredResourceCountsRequest) Awaitable<Errors\Result<GetAggregateDiscoveredResourceCountsResponse>>;
  public function GetOrganizationConformancePackDetailedStatus(GetOrganizationConformancePackDetailedStatusRequest) Awaitable<Errors\Result<GetOrganizationConformancePackDetailedStatusResponse>>;
  public function BatchGetResourceConfig(BatchGetResourceConfigRequest) Awaitable<Errors\Result<BatchGetResourceConfigResponse>>;
  public function PutEvaluations(PutEvaluationsRequest) Awaitable<Errors\Result<PutEvaluationsResponse>>;
  public function PutResourceConfig(PutResourceConfigRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function ListAggregateDiscoveredResources(ListAggregateDiscoveredResourcesRequest) Awaitable<Errors\Result<ListAggregateDiscoveredResourcesResponse>>;
  public function DeliverConfigSnapshot(DeliverConfigSnapshotRequest) Awaitable<Errors\Result<DeliverConfigSnapshotResponse>>;
  public function DescribeConformancePackCompliance(DescribeConformancePackComplianceRequest) Awaitable<Errors\Result<DescribeConformancePackComplianceResponse>>;
  public function DescribeRemediationConfigurations(DescribeRemediationConfigurationsRequest) Awaitable<Errors\Result<DescribeRemediationConfigurationsResponse>>;
  public function DescribeRemediationExecutionStatus(DescribeRemediationExecutionStatusRequest) Awaitable<Errors\Result<DescribeRemediationExecutionStatusResponse>>;
  public function GetOrganizationConfigRuleDetailedStatus(GetOrganizationConfigRuleDetailedStatusRequest) Awaitable<Errors\Result<GetOrganizationConfigRuleDetailedStatusResponse>>;
  public function PutConfigurationRecorder(PutConfigurationRecorderRequest) Awaitable<Errors\Error>;
  public function DeleteConfigurationRecorder(DeleteConfigurationRecorderRequest) Awaitable<Errors\Error>;
  public function DescribeRetentionConfigurations(DescribeRetentionConfigurationsRequest) Awaitable<Errors\Result<DescribeRetentionConfigurationsResponse>>;
  public function DescribeOrganizationConfigRules(DescribeOrganizationConfigRulesRequest) Awaitable<Errors\Result<DescribeOrganizationConfigRulesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutRemediationConfigurations(PutRemediationConfigurationsRequest) Awaitable<Errors\Result<PutRemediationConfigurationsResponse>>;
  public function SelectResourceConfig(SelectResourceConfigRequest) Awaitable<Errors\Result<SelectResourceConfigResponse>>;
  public function DeleteOrganizationConformancePack(DeleteOrganizationConformancePackRequest) Awaitable<Errors\Error>;
  public function DeleteAggregationAuthorization(DeleteAggregationAuthorizationRequest) Awaitable<Errors\Error>;
  public function DeleteRemediationExceptions(DeleteRemediationExceptionsRequest) Awaitable<Errors\Result<DeleteRemediationExceptionsResponse>>;
  public function DescribeOrganizationConformancePacks(DescribeOrganizationConformancePacksRequest) Awaitable<Errors\Result<DescribeOrganizationConformancePacksResponse>>;
  public function StartConfigurationRecorder(StartConfigurationRecorderRequest) Awaitable<Errors\Error>;
  public function StartRemediationExecution(StartRemediationExecutionRequest) Awaitable<Errors\Result<StartRemediationExecutionResponse>>;
  public function BatchGetAggregateResourceConfig(BatchGetAggregateResourceConfigRequest) Awaitable<Errors\Result<BatchGetAggregateResourceConfigResponse>>;
  public function DescribeConfigRules(DescribeConfigRulesRequest) Awaitable<Errors\Result<DescribeConfigRulesResponse>>;
  public function SelectAggregateResourceConfig(SelectAggregateResourceConfigRequest) Awaitable<Errors\Result<SelectAggregateResourceConfigResponse>>;
  public function DeleteResourceConfig(DeleteResourceConfigRequest) Awaitable<Errors\Error>;
  public function GetResourceConfigHistory(GetResourceConfigHistoryRequest) Awaitable<Errors\Result<GetResourceConfigHistoryResponse>>;
  public function PutConfigurationAggregator(PutConfigurationAggregatorRequest) Awaitable<Errors\Result<PutConfigurationAggregatorResponse>>;
  public function DescribeConfigRuleEvaluationStatus(DescribeConfigRuleEvaluationStatusRequest) Awaitable<Errors\Result<DescribeConfigRuleEvaluationStatusResponse>>;
  public function GetComplianceSummaryByResourceType(GetComplianceSummaryByResourceTypeRequest) Awaitable<Errors\Result<GetComplianceSummaryByResourceTypeResponse>>;
  public function StopConfigurationRecorder(StopConfigurationRecorderRequest) Awaitable<Errors\Error>;
  public function DescribeConfigurationRecorderStatus(DescribeConfigurationRecorderStatusRequest) Awaitable<Errors\Result<DescribeConfigurationRecorderStatusResponse>>;
}

class OrganizationAllFeaturesNotEnabledException {
}

class ResourceCountFilters {
  public ResourceType $resource_type;
  public AccountId $account_id;
  public AwsRegion $region;
}

class Value {
}

class DescribeConformancePackComplianceRequest {
  public ConformancePackComplianceFilters $filters;
  public DescribeConformancePackComplianceLimit $limit;
  public NextToken $next_token;
  public ConformancePackName $conformance_pack_name;
}

class SelectAggregateResourceConfigRequest {
  public Expression $expression;
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public Limit $limit;
  public Limit $max_results;
  public NextToken $next_token;
}

class ConfigurationRecorder {
  public RecorderName $name;
  public string $role_arn;
  public RecordingGroup $recording_group;
}

class PutRemediationExceptionsRequest {
  public ConfigRuleName $config_rule_name;
  public RemediationExceptionResourceKeys $resource_keys;
  public StringWithCharLimit1024 $message;
  public Date $expiration_time;
}

class StringWithCharLimit2048 {
}

class ConfigurationItem {
  public Version $version;
  public AccountId $account_id;
  public ResourceName $resource_name;
  public ConfigurationItemCaptureTime $configuration_item_capture_time;
  public ARN $arn;
  public SupplementaryConfiguration $supplementary_configuration;
  public ConfigurationItemStatus $configuration_item_status;
  public ConfigurationItemMD5Hash $configuration_item_md_5_hash;
  public AvailabilityZone $availability_zone;
  public RelationshipList $relationships;
  public Tags $tags;
  public RelatedEventList $related_events;
  public Configuration $configuration;
  public ConfigurationStateId $configuration_state_id;
  public ResourceType $resource_type;
  public ResourceId $resource_id;
  public AwsRegion $aws_region;
  public ResourceCreationTime $resource_creation_time;
}

class DescribeAggregationAuthorizationsRequest {
  public Limit $limit;
  public string $next_token;
}

class ResourceCounts {
}

class SourceDetail {
  public EventSource $event_source;
  public MessageType $message_type;
  public MaximumExecutionFrequency $maximum_execution_frequency;
}

class ConformancePackArn {
}

class ConfigurationItemStatus {
}

class InvalidS3KeyPrefixException {
}

class NoAvailableDeliveryChannelException {
}

class OrganizationConformancePackName {
}

class AutoRemediationAttempts {
}

class StatusDetailFilters {
  public AccountId $account_id;
  public MemberAccountRuleStatus $member_account_rule_status;
}

class ComplianceType {
}

class DescribeConfigurationAggregatorsResponse {
  public ConfigurationAggregatorList $configuration_aggregators;
  public string $next_token;
}

class FieldInfoList {
}

class DescribeOrganizationConfigRuleStatusesRequest {
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConfigRuleNames $organization_config_rule_names;
}

class FailedDeleteRemediationExceptionsBatch {
  public string $failure_message;
  public RemediationExceptionResourceKeys $failed_items;
}

class PageSizeLimit {
}

class ReevaluateConfigRuleNames {
}

class ResourceIdentifiersList {
}

class GetResourceConfigHistoryResponse {
  public ConfigurationItemList $configuration_items;
  public NextToken $next_token;
}

class NoSuchOrganizationConfigRuleException {
}

class ConfigurationItemList {
}

class DescribeConfigRuleEvaluationStatusResponse {
  public string $next_token;
  public ConfigRuleEvaluationStatusList $config_rules_evaluation_status;
}

class InvalidLimitException {
}

class ARN {
}

class BatchGetResourceConfigResponse {
  public BaseConfigurationItems $base_configuration_items;
  public ResourceKeys $unprocessed_resource_keys;
}

class FieldName {
}

class GetAggregateComplianceDetailsByConfigRuleRequest {
  public ConfigRuleName $config_rule_name;
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public ComplianceType $compliance_type;
  public Limit $limit;
  public NextToken $next_token;
  public ConfigurationAggregatorName $configuration_aggregator_name;
}

class GetComplianceSummaryByResourceTypeResponse {
  public ComplianceSummariesByResourceType $compliance_summaries_by_resource_type;
}

class LimitExceededException {
}

class PutAggregationAuthorizationRequest {
  public AccountId $authorized_account_id;
  public AwsRegion $authorized_aws_region;
  public TagsList $tags;
}

class EarlierTime {
}

class GetAggregateResourceConfigResponse {
  public ConfigurationItem $configuration_item;
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class StringWithCharLimit768 {
}

class AccountAggregationSourceAccountList {
}

class DescribeDeliveryChannelsResponse {
  public DeliveryChannelList $delivery_channels;
}

class PutRetentionConfigurationRequest {
  public RetentionPeriodInDays $retention_period_in_days;
}

class StaticValue {
  public StaticParameterValues $values;
}

class ConfigurationItemCaptureTime {
}

class DeliveryChannelList {
}

class DeliveryChannelStatus {
  public string $name;
  public ConfigExportDeliveryInfo $config_snapshot_delivery_info;
  public ConfigExportDeliveryInfo $config_history_delivery_info;
  public ConfigStreamDeliveryInfo $config_stream_delivery_info;
}

class EmptiableStringWithCharLimit256 {
}

class MaxActiveResourcesExceededException {
}

class MaxNumberOfConfigurationRecordersExceededException {
}

class OrganizationConfigRule {
  public OrganizationManagedRuleMetadata $organization_managed_rule_metadata;
  public OrganizationCustomRuleMetadata $organization_custom_rule_metadata;
  public ExcludedAccounts $excluded_accounts;
  public Date $last_update_time;
  public OrganizationConfigRuleName $organization_config_rule_name;
  public StringWithCharLimit256 $organization_config_rule_arn;
}

class IncludeGlobalResourceTypes {
}

class PutRemediationConfigurationsResponse {
  public FailedRemediationBatches $failed_batches;
}

class RemediationExecutionStep {
  public string $error_message;
  public Date $start_time;
  public Date $stop_time;
  public string $name;
  public RemediationExecutionStepState $state;
}

class DescribeOrganizationConformancePacksResponse {
  public OrganizationConformancePacks $organization_conformance_packs;
  public string $next_token;
}

class GetComplianceDetailsByResourceRequest {
  public ComplianceTypes $compliance_types;
  public string $next_token;
  public StringWithCharLimit256 $resource_type;
  public BaseResourceId $resource_id;
}

class ResourceTypeList {
}

class TagList {
}

class ConfigSnapshotDeliveryProperties {
  public MaximumExecutionFrequency $delivery_frequency;
}

class PutConformancePackRequest {
  public TemplateBody $template_body;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public ConformancePackName $conformance_pack_name;
  public TemplateS3Uri $template_s_3_uri;
}

class ChronologicalOrder {
}

class ConformancePackRuleComplianceList {
}

class DeleteRemediationConfigurationRequest {
  public ConfigRuleName $config_rule_name;
  public string $resource_type;
}

class DeliveryStatus {
}

class ConformancePackComplianceType {
}

class DescribeConformancePackComplianceResponse {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackRuleComplianceList $conformance_pack_rule_compliance_list;
  public NextToken $next_token;
}

class RetentionConfigurationList {
}

class StringWithCharLimit1024 {
}

class DescribeRetentionConfigurationsRequest {
  public RetentionConfigurationNameList $retention_configuration_names;
  public NextToken $next_token;
}

class RemediationConfiguration {
  public string $target_version;
  public RemediationParameters $parameters;
  public boolean $automatic;
  public ExecutionControls $execution_controls;
  public AutoRemediationAttempts $maximum_automatic_attempts;
  public AutoRemediationAttemptSeconds $retry_attempt_seconds;
  public StringWithCharLimit1024 $arn;
  public StringWithCharLimit1024 $created_by_service;
  public ConfigRuleName $config_rule_name;
  public RemediationTargetType $target_type;
  public StringWithCharLimit256 $target_id;
  public string $resource_type;
}

class ResourceTypes {
}

class StringWithCharLimit256Min0 {
}

class AggregatedSourceStatusType {
}

class DeleteConfigurationRecorderRequest {
  public RecorderName $configuration_recorder_name;
}

class DescribeOrganizationConfigRulesRequest {
  public OrganizationConfigRuleNames $organization_config_rule_names;
  public CosmosPageLimit $limit;
  public string $next_token;
}

class InvalidDeliveryChannelNameException {
}

class InvalidParameterValueException {
}

class RemediationExecutionStatus {
  public Date $last_updated_time;
  public ResourceKey $resource_key;
  public RemediationExecutionState $state;
  public RemediationExecutionSteps $step_details;
  public Date $invocation_time;
}

class AmazonResourceName {
}

class DescribeAggregationAuthorizationsResponse {
  public AggregationAuthorizationList $aggregation_authorizations;
  public string $next_token;
}

class PutRemediationExceptionsResponse {
  public FailedRemediationExceptionBatches $failed_batches;
}

class GroupedResourceCountList {
}

class DeliveryChannel {
  public ChannelName $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public string $sns_topic_arn;
  public ConfigSnapshotDeliveryProperties $config_snapshot_delivery_properties;
}

class DescribeRemediationConfigurationsResponse {
  public RemediationConfigurations $remediation_configurations;
}

class MaximumExecutionFrequency {
}

class MaxNumberOfConfigRulesExceededException {
}

class Name {
}

class RemediationExecutionStatuses {
}

class ResourceIdList {
}

class SupplementaryConfiguration {
}

class AggregatedSourceStatusTypeList {
}

class ComplianceByConfigRules {
}

class GetOrganizationConformancePackDetailedStatusResponse {
  public OrganizationConformancePackDetailedStatuses $organization_conformance_pack_detailed_statuses;
  public string $next_token;
}

class GroupedResourceCount {
  public StringWithCharLimit256 $group_name;
  public Long $resource_count;
}

class OrganizationAggregationSource {
  public string $role_arn;
  public AggregatorRegionList $aws_regions;
  public boolean $all_aws_regions;
}

class TemplateS3Uri {
}

class OrderingTimestamp {
}

class DescribeConfigurationAggregatorSourcesStatusRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public AggregatedSourceStatusTypeList $update_status;
  public string $next_token;
  public Limit $limit;
}

class StartConfigurationRecorderRequest {
  public RecorderName $configuration_recorder_name;
}

class ConformancePackRuleEvaluationResultsList {
}

class DeleteAggregationAuthorizationRequest {
  public AccountId $authorized_account_id;
  public AwsRegion $authorized_aws_region;
}

class Integer {
}

class NoSuchConfigRuleInConformancePackException {
}

class ChannelName {
}

class ConformancePackStatusDetailsList {
}

class DeleteConfigurationAggregatorRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
}

class GetConformancePackComplianceDetailsRequest {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackEvaluationFilters $filters;
  public GetConformancePackComplianceDetailsLimit $limit;
  public NextToken $next_token;
}

class OrganizationConfigRuleNames {
}

class PutConfigurationAggregatorResponse {
  public ConfigurationAggregator $configuration_aggregator;
}

class FailedDeleteRemediationExceptionsBatches {
}

class NoSuchRetentionConfigurationException {
}

class RemediationTargetType {
}

class FailedRemediationExceptionBatches {
}

class NoSuchRemediationExceptionException {
}

class ParameterValue {
}

class Results {
}

class ConformancePackState {
}

class ResourceNotDiscoveredException {
}

class RetentionPeriodInDays {
}

class ConfigurationRecorderStatusList {
}

class RelatedEvent {
}

class ConfigRuleComplianceSummaryGroupKey {
}

class NextToken {
}

class SourceDetails {
}

class ComplianceResourceTypes {
}

class ConfigurationStateId {
}

class PutRetentionConfigurationResponse {
  public RetentionConfiguration $retention_configuration;
}

class ResourceIdentifier {
  public ResourceName $resource_name;
  public ResourceDeletionTime $resource_deletion_time;
  public ResourceType $resource_type;
  public ResourceId $resource_id;
}

class DescribeAggregateComplianceByConfigRulesResponse {
  public AggregateComplianceByConfigRuleList $aggregate_compliance_by_config_rules;
  public NextToken $next_token;
}

class NoSuchOrganizationConformancePackException {
}

class OrganizationManagedRuleMetadata {
  public StringWithCharLimit768 $resource_id_scope;
  public StringWithCharLimit128 $tag_key_scope;
  public StringWithCharLimit256 $tag_value_scope;
  public StringWithCharLimit256Min0 $description;
  public StringWithCharLimit256 $rule_identifier;
  public StringWithCharLimit2048 $input_parameters;
  public MaximumExecutionFrequency $maximum_execution_frequency;
  public ResourceTypesScope $resource_types_scope;
}

class SsmControls {
  public Percentage $concurrent_execution_rate_percentage;
  public Percentage $error_percentage;
}

class DescribeConfigurationAggregatorsRequest {
  public ConfigurationAggregatorNameList $configuration_aggregator_names;
  public string $next_token;
  public Limit $limit;
}

class RuleLimit {
}

class SelectResourceConfigRequest {
  public NextToken $next_token;
  public Expression $expression;
  public Limit $limit;
}

class ConformancePackComplianceSummaryList {
}

class DeleteDeliveryChannelRequest {
  public ChannelName $delivery_channel_name;
}

class DescribeConformancePackStatusRequest {
  public ConformancePackNamesList $conformance_pack_names;
  public PageSizeLimit $limit;
  public NextToken $next_token;
}

class OrganizationConfigRuleStatuses {
}

class AggregateComplianceByConfigRuleList {
}

class ConfigRuleEvaluationStatus {
  public boolean $first_evaluation_started;
  public string $config_rule_arn;
  public string $config_rule_id;
  public Date $last_successful_invocation_time;
  public Date $last_failed_invocation_time;
  public Date $first_activated_time;
  public string $last_error_message;
  public ConfigRuleName $config_rule_name;
  public Date $last_successful_evaluation_time;
  public Date $last_failed_evaluation_time;
  public Date $last_deactivated_time;
  public string $last_error_code;
}

class ConfigurationAggregatorArn {
}

class DescribeComplianceByConfigRuleResponse {
  public ComplianceByConfigRules $compliance_by_config_rules;
  public string $next_token;
}

class DescribeConformancePacksResponse {
  public ConformancePackDetailList $conformance_pack_details;
  public NextToken $next_token;
}

class OrganizationConfigRuleTriggerType {
}

class StartConfigRulesEvaluationRequest {
  public ReevaluateConfigRuleNames $config_rule_names;
}

class AggregatedSourceType {
}

class ConfigRuleComplianceFilters {
  public ComplianceType $compliance_type;
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public ConfigRuleName $config_rule_name;
}

class ConfigRuleEvaluationStatusList {
}

class FailedRemediationBatches {
}

class OrganizationConformancePackTemplateValidationException {
}

class PutOrganizationConfigRuleRequest {
  public OrganizationCustomRuleMetadata $organization_custom_rule_metadata;
  public ExcludedAccounts $excluded_accounts;
  public OrganizationConfigRuleName $organization_config_rule_name;
  public OrganizationManagedRuleMetadata $organization_managed_rule_metadata;
}

class ResourceValueType {
}

class ComplianceTypes {
}

class OrganizationConfigRuleDetailedStatus {
}

class OrganizationConformancePack {
  public ExcludedAccounts $excluded_accounts;
  public Date $last_update_time;
  public OrganizationConformancePackName $organization_conformance_pack_name;
  public StringWithCharLimit256 $organization_conformance_pack_arn;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public ConformancePackInputParameters $conformance_pack_input_parameters;
}

class OrganizationRuleStatus {
}

class UnprocessedResourceIdentifierList {
}

class DescribeConfigurationAggregatorSourcesStatusResponse {
  public AggregatedSourceStatusList $aggregated_source_status_list;
  public string $next_token;
}

class DescribeOrganizationConfigRulesResponse {
  public OrganizationConfigRules $organization_config_rules;
  public string $next_token;
}

class PendingAggregationRequest {
  public AccountId $requester_account_id;
  public AwsRegion $requester_aws_region;
}

class AggregateEvaluationResult {
  public ComplianceType $compliance_type;
  public Date $result_recorded_time;
  public Date $config_rule_invoked_time;
  public StringWithCharLimit256 $annotation;
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public EvaluationResultIdentifier $evaluation_result_identifier;
}

class DeliveryS3Bucket {
}

class OrganizationResourceDetailedStatusFilters {
  public AccountId $account_id;
  public OrganizationResourceDetailedStatus $status;
}

class StopConfigurationRecorderRequest {
  public RecorderName $configuration_recorder_name;
}

class ConfigurationAggregator {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ConfigurationAggregatorArn $configuration_aggregator_arn;
  public AccountAggregationSourceList $account_aggregation_sources;
  public OrganizationAggregationSource $organization_aggregation_source;
  public Date $creation_time;
  public Date $last_updated_time;
}

class ConformancePackName {
}

class OversizedConfigurationItemException {
}

class Percentage {
}

class ConfigurationAggregatorNameList {
}

class DescribePendingAggregationRequestsRequest {
  public string $next_token;
  public DescribePendingAggregationRequestsLimit $limit;
}

class InvalidConfigurationRecorderNameException {
}

class NoAvailableOrganizationException {
}

class QueryInfo {
  public FieldInfoList $select_fields;
}

class Scope {
  public StringWithCharLimit256 $tag_value;
  public BaseResourceId $compliance_resource_id;
  public ComplianceResourceTypes $compliance_resource_types;
  public StringWithCharLimit128 $tag_key;
}

class AggregatedSourceStatusList {
}

class BatchGetAggregateResourceConfigRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ResourceIdentifiersList $resource_identifiers;
}

class Configuration {
}

class InvalidSNSTopicARNException {
}

class OrganizationConfigRuleTriggerTypes {
}

class PutConfigRuleRequest {
  public TagsList $tags;
  public ConfigRule $config_rule;
}

class ResourceId {
}

class AggregateEvaluationResultList {
}

class ConformancePackId {
}

class DeleteEvaluationResultsRequest {
  public StringWithCharLimit64 $config_rule_name;
}

class MaxNumberOfOrganizationConfigRulesExceededException {
}

class GetDiscoveredResourceCountsResponse {
  public Long $total_discovered_resources;
  public ResourceCounts $resource_counts;
  public NextToken $next_token;
}

class AggregateResourceIdentifier {
  public ResourceName $resource_name;
  public AccountId $source_account_id;
  public AwsRegion $source_region;
  public ResourceId $resource_id;
  public ResourceType $resource_type;
}

class BaseConfigurationItems {
}

class ComplianceContributorCount {
  public boolean $cap_exceeded;
  public int $capped_count;
}

class ConformancePackNamesList {
}

class DeletePendingAggregationRequestRequest {
  public AccountId $requester_account_id;
  public AwsRegion $requester_aws_region;
}

class DiscoveredResourceIdentifierList {
}

class GetResourceConfigHistoryRequest {
  public Limit $limit;
  public NextToken $next_token;
  public ResourceType $resource_type;
  public ResourceId $resource_id;
  public LaterTime $later_time;
  public EarlierTime $earlier_time;
  public ChronologicalOrder $chronological_order;
}

class Long {
}

class Relationship {
  public ResourceName $resource_name;
  public RelationshipName $relationship_name;
  public ResourceType $resource_type;
  public ResourceId $resource_id;
}

class StartRemediationExecutionRequest {
  public ConfigRuleName $config_rule_name;
  public ResourceKeys $resource_keys;
}

class TagsList {
}

class GetComplianceSummaryByResourceTypeRequest {
  public ResourceTypes $resource_types;
}

class PutOrganizationConformancePackResponse {
  public StringWithCharLimit256 $organization_conformance_pack_arn;
}

class StringWithCharLimit64 {
}

class DescribeDeliveryChannelStatusResponse {
  public DeliveryChannelStatusList $delivery_channels_status;
}

class PutEvaluationsResponse {
  public Evaluations $failed_evaluations;
}

class Boolean {
}

class GetConformancePackComplianceSummaryRequest {
  public NextToken $next_token;
  public ConformancePackNamesToSummarizeList $conformance_pack_names;
  public PageSizeLimit $limit;
}

class RemediationInProgressException {
}

class RetentionConfigurationName {
}

class ConformancePackStatusDetail {
  public ConformancePackStatusReason $conformance_pack_status_reason;
  public Date $last_update_requested_time;
  public Date $last_update_completed_time;
  public ConformancePackName $conformance_pack_name;
  public ConformancePackId $conformance_pack_id;
  public ConformancePackArn $conformance_pack_arn;
  public ConformancePackState $conformance_pack_state;
  public StackArn $stack_arn;
}

class DeleteRemediationConfigurationResponse {
}

class DescribeComplianceByResourceRequest {
  public BaseResourceId $resource_id;
  public ComplianceTypes $compliance_types;
  public Limit $limit;
  public NextToken $next_token;
  public StringWithCharLimit256 $resource_type;
}

class Source {
  public Owner $owner;
  public StringWithCharLimit256 $source_identifier;
  public SourceDetails $source_details;
}

class AggregateComplianceCountList {
}

class NoSuchConformancePackException {
}

class PutDeliveryChannelRequest {
  public DeliveryChannel $delivery_channel;
}

class RetentionConfiguration {
  public RetentionConfigurationName $name;
  public RetentionPeriodInDays $retention_period_in_days;
}

class ConformancePackEvaluationFilters {
  public ConformancePackConfigRuleNames $config_rule_names;
  public ConformancePackComplianceType $compliance_type;
  public StringWithCharLimit256 $resource_type;
  public ConformancePackComplianceResourceIds $resource_ids;
}

class ResourceValue {
  public ResourceValueType $value;
}

class PutResourceConfigRequest {
  public ResourceTypeString $resource_type;
  public SchemaVersionId $schema_version_id;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public Configuration $configuration;
  public Tags $tags;
}

class StaticParameterValues {
}

class DeliverConfigSnapshotResponse {
  public string $config_snapshot_id;
}

class DescribeConformancePacksRequest {
  public ConformancePackNamesList $conformance_pack_names;
  public PageSizeLimit $limit;
  public NextToken $next_token;
}

class DescribeRemediationExecutionStatusResponse {
  public RemediationExecutionStatuses $remediation_execution_statuses;
  public string $next_token;
}

class ListDiscoveredResourcesResponse {
  public ResourceIdentifierList $resource_identifiers;
  public NextToken $next_token;
}

class MaxNumberOfOrganizationConformancePacksExceededException {
}

class ResourceCountGroupKey {
}

class ResourceName {
}

class ConfigStreamDeliveryInfo {
  public DeliveryStatus $last_status;
  public string $last_error_code;
  public string $last_error_message;
  public Date $last_status_change_time;
}

class PutOrganizationConfigRuleResponse {
  public StringWithCharLimit256 $organization_config_rule_arn;
}

class ResourceCreationTime {
}

class ConfigurationItemMD5Hash {
}

class DeliveryS3KeyPrefix {
}

class ListAggregateDiscoveredResourcesResponse {
  public DiscoveredResourceIdentifierList $resource_identifiers;
  public NextToken $next_token;
}

class String {
}

class SupplementaryConfigurationValue {
}

class AggregatorRegionList {
}

class ConformancePackComplianceFilters {
  public ConformancePackConfigRuleNames $config_rule_names;
  public ConformancePackComplianceType $compliance_type;
}

class EvaluationResult {
  public EvaluationResultIdentifier $evaluation_result_identifier;
  public ComplianceType $compliance_type;
  public Date $result_recorded_time;
  public Date $config_rule_invoked_time;
  public StringWithCharLimit256 $annotation;
  public string $result_token;
}

class NoSuchRemediationConfigurationException {
}

class RemediationParameterValue {
  public ResourceValue $resource_value;
  public StaticValue $static_value;
}

class StartRemediationExecutionResponse {
  public string $failure_message;
  public ResourceKeys $failed_items;
}

class GetOrganizationConformancePackDetailedStatusRequest {
  public OrganizationConformancePackName $organization_conformance_pack_name;
  public OrganizationResourceDetailedStatusFilters $filters;
  public CosmosPageLimit $limit;
  public string $next_token;
}

class FailedRemediationBatch {
  public RemediationConfigurations $failed_items;
  public string $failure_message;
}

class GetConformancePackComplianceDetailsLimit {
}

class ConfigurationRecorderList {
}

class NoSuchConfigRuleException {
}

class SelectResourceConfigResponse {
  public Results $results;
  public QueryInfo $query_info;
  public NextToken $next_token;
}

class ConformancePackDetail {
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public Date $last_update_requested_time;
  public StringWithCharLimit256 $created_by;
  public ConformancePackName $conformance_pack_name;
  public ConformancePackArn $conformance_pack_arn;
  public ConformancePackId $conformance_pack_id;
}

class DescribeConfigRulesRequest {
  public ConfigRuleNames $config_rule_names;
  public string $next_token;
}

class DescribeRemediationConfigurationsRequest {
  public ConfigRuleNames $config_rule_names;
}

class DescribeRetentionConfigurationsResponse {
  public NextToken $next_token;
  public RetentionConfigurationList $retention_configurations;
}

class ConformancePackRuleCompliance {
  public ConfigRuleName $config_rule_name;
  public ConformancePackComplianceType $compliance_type;
}

class FailedRemediationExceptionBatch {
  public string $failure_message;
  public RemediationExceptions $failed_items;
}

class StringWithCharLimit256 {
}

class ResourceTypesScope {
}

class ConfigRuleName {
}

class DeleteEvaluationResultsResponse {
}

class DescribeConfigRulesResponse {
  public ConfigRules $config_rules;
  public string $next_token;
}

class DescribeRemediationExceptionsRequest {
  public ConfigRuleName $config_rule_name;
  public RemediationExceptionResourceKeys $resource_keys;
  public Limit $limit;
  public string $next_token;
}

class EventSource {
}

class OrganizationConformancePackDetailedStatus {
  public AccountId $account_id;
  public StringWithCharLimit256 $conformance_pack_name;
  public OrganizationResourceDetailedStatus $status;
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
}

class ResourceCount {
  public Long $count;
  public ResourceType $resource_type;
}

class StackArn {
}

class CosmosPageLimit {
}

class ComplianceSummariesByResourceType {
}

class DescribePendingAggregationRequestsLimit {
}

class ExcludedAccounts {
}

class InsufficientDeliveryPolicyException {
}

class RemediationExceptionResourceKey {
  public StringWithCharLimit256 $resource_type;
  public StringWithCharLimit1024 $resource_id;
}

class ResourceKeys {
}

class AggregationAuthorizationList {
}

class ConformancePackInputParameter {
  public ParameterName $parameter_name;
  public ParameterValue $parameter_value;
}

class InvalidExpressionException {
}

class ListDiscoveredResourcesRequest {
  public ResourceName $resource_name;
  public Limit $limit;
  public boolean $include_deleted_resources;
  public NextToken $next_token;
  public ResourceType $resource_type;
  public ResourceIdList $resource_ids;
}

class OrganizationConformancePacks {
}

class ResourceInUseException {
}

class DescribeAggregateComplianceByConfigRulesRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ConfigRuleComplianceFilters $filters;
  public GroupByAPILimit $limit;
  public NextToken $next_token;
}

class GetAggregateDiscoveredResourceCountsResponse {
  public GroupedResourceCountList $grouped_resource_counts;
  public NextToken $next_token;
  public Long $total_discovered_resources;
  public StringWithCharLimit256 $group_by_key;
}

class LaterTime {
}

class MemberAccountRuleStatus {
}

class NoSuchConfigurationRecorderException {
}

class RecorderName {
}

class DeleteConfigRuleRequest {
  public ConfigRuleName $config_rule_name;
}

class GetAggregateDiscoveredResourceCountsRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ResourceCountFilters $filters;
  public ResourceCountGroupKey $group_by_key;
  public GroupByAPILimit $limit;
  public NextToken $next_token;
}

class RetentionConfigurationNameList {
}

class SchemaVersionId {
}

class Tags {
}

class ValidationException {
}

class ConfigRules {
}

class DescribeOrganizationConformancePacksRequest {
  public OrganizationConformancePackNames $organization_conformance_pack_names;
  public CosmosPageLimit $limit;
  public string $next_token;
}

class GetComplianceDetailsByConfigRuleRequest {
  public NextToken $next_token;
  public StringWithCharLimit64 $config_rule_name;
  public ComplianceTypes $compliance_types;
  public Limit $limit;
}

class OrganizationResourceDetailedStatus {
}

class ResourceType {
}

class ConfigRule {
  public ConfigRuleName $config_rule_name;
  public StringWithCharLimit64 $config_rule_id;
  public StringWithCharLimit1024 $input_parameters;
  public MaximumExecutionFrequency $maximum_execution_frequency;
  public ConfigRuleState $config_rule_state;
  public StringWithCharLimit256 $created_by;
  public StringWithCharLimit256 $config_rule_arn;
  public EmptiableStringWithCharLimit256 $description;
  public Scope $scope;
  public Source $source;
}

class DescribeConfigurationRecordersRequest {
  public ConfigurationRecorderNameList $configuration_recorder_names;
}

class MaxNumberOfDeliveryChannelsExceededException {
}

class NoRunningConfigurationRecorderException {
}

class GetAggregateConfigRuleComplianceSummaryResponse {
  public StringWithCharLimit256 $group_by_key;
  public AggregateComplianceCountList $aggregate_compliance_counts;
  public NextToken $next_token;
}

class MaxNumberOfRetentionConfigurationsExceededException {
}

class OrganizationAccessDeniedException {
}

class PutConfigurationAggregatorRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public AccountAggregationSourceList $account_aggregation_sources;
  public OrganizationAggregationSource $organization_aggregation_source;
  public TagsList $tags;
}

class ConformancePackEvaluationResult {
  public ConformancePackComplianceType $compliance_type;
  public EvaluationResultIdentifier $evaluation_result_identifier;
  public Date $config_rule_invoked_time;
  public Date $result_recorded_time;
  public Annotation $annotation;
}

class DeleteRetentionConfigurationRequest {
  public RetentionConfigurationName $retention_configuration_name;
}

class EvaluationResultIdentifier {
  public EvaluationResultQualifier $evaluation_result_qualifier;
  public Date $ordering_timestamp;
}

class SelectAggregateResourceConfigResponse {
  public Results $results;
  public QueryInfo $query_info;
  public NextToken $next_token;
}

class BaseConfigurationItem {
  public AccountId $account_id;
  public ConfigurationItemCaptureTime $configuration_item_capture_time;
  public ARN $arn;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
  public AvailabilityZone $availability_zone;
  public ConfigurationItemStatus $configuration_item_status;
  public ConfigurationStateId $configuration_state_id;
  public AwsRegion $aws_region;
  public Configuration $configuration;
  public SupplementaryConfiguration $supplementary_configuration;
  public Version $version;
  public ResourceId $resource_id;
  public ResourceCreationTime $resource_creation_time;
}

class ConformancePackNamesToSummarizeList {
}

class AvailabilityZone {
}

class EvaluationResults {
}

class PutEvaluationsRequest {
  public Evaluations $evaluations;
  public string $result_token;
  public boolean $test_mode;
}

class StartConfigRulesEvaluationResponse {
}

class ConfigRuleComplianceSummaryFilters {
  public AccountId $account_id;
  public AwsRegion $aws_region;
}

class InvalidTimeRangeException {
}

class NoAvailableConfigurationRecorderException {
}

class AccountId {
}

class BaseResourceId {
}

class ComplianceByResource {
  public Compliance $compliance;
  public StringWithCharLimit256 $resource_type;
  public BaseResourceId $resource_id;
}

class DeleteRemediationExceptionsResponse {
  public FailedDeleteRemediationExceptionsBatches $failed_batches;
}

class InsufficientPermissionsException {
}

class AggregateComplianceByConfigRule {
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public ConfigRuleName $config_rule_name;
  public Compliance $compliance;
}

class BatchGetResourceConfigRequest {
  public ResourceKeys $resource_keys;
}

class DescribeOrganizationConfigRuleStatusesResponse {
  public OrganizationConfigRuleStatuses $organization_config_rule_statuses;
  public string $next_token;
}

class DescribeRemediationExceptionsResponse {
  public RemediationExceptions $remediation_exceptions;
  public string $next_token;
}

class Expression {
}

class TagValue {
}

class ConformancePackDetailList {
}

class EvaluationResultQualifier {
  public StringWithCharLimit256 $resource_type;
  public BaseResourceId $resource_id;
  public ConfigRuleName $config_rule_name;
}

class GetComplianceSummaryByConfigRuleResponse {
  public ComplianceSummary $compliance_summary;
}

class NoSuchDeliveryChannelException {
}

class TemplateBody {
}

class RemediationParameters {
}

class AutoRemediationAttemptSeconds {
}

class ConformancePackTemplateValidationException {
}

class ExecutionControls {
  public SsmControls $ssm_controls;
}

class GetOrganizationConfigRuleDetailedStatusRequest {
  public OrganizationConfigRuleName $organization_config_rule_name;
  public StatusDetailFilters $filters;
  public CosmosPageLimit $limit;
  public string $next_token;
}

class OrganizationConformancePackNames {
}

class PendingAggregationRequestList {
}

class RemediationConfigurations {
}

class ConfigurationRecorderNameList {
}

class ConformancePackConfigRuleNames {
}

class DeliverConfigSnapshotRequest {
  public ChannelName $delivery_channel_name;
}

class DescribeRemediationExecutionStatusRequest {
  public ConfigRuleName $config_rule_name;
  public ResourceKeys $resource_keys;
  public Limit $limit;
  public string $next_token;
}

class ResourceIdentifierList {
}

class TagKey {
}

class ComplianceSummaryByResourceType {
  public StringWithCharLimit256 $resource_type;
  public ComplianceSummary $compliance_summary;
}

class DeliveryChannelStatusList {
}

class Evaluation {
  public ComplianceType $compliance_type;
  public StringWithCharLimit256 $annotation;
  public OrderingTimestamp $ordering_timestamp;
  public StringWithCharLimit256 $compliance_resource_type;
  public BaseResourceId $compliance_resource_id;
}

class MessageType {
}

class RemediationExceptions {
}

class ComplianceByConfigRule {
  public StringWithCharLimit64 $config_rule_name;
  public Compliance $compliance;
}

class Evaluations {
}

class PutConformancePackResponse {
  public ConformancePackArn $conformance_pack_arn;
}

class TagKeyList {
}

class OrganizationConformancePackStatus {
  public OrganizationConformancePackName $organization_conformance_pack_name;
  public OrganizationResourceStatus $status;
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
}

class Compliance {
  public ComplianceType $compliance_type;
  public ComplianceContributorCount $compliance_contributor_count;
}

class ConfigExportDeliveryInfo {
  public string $last_error_code;
  public string $last_error_message;
  public Date $last_attempt_time;
  public Date $last_successful_time;
  public Date $next_delivery_time;
  public DeliveryStatus $last_status;
}

class ConformancePackStatusReason {
}

class DescribeComplianceByConfigRuleRequest {
  public ConfigRuleNames $config_rule_names;
  public ComplianceTypes $compliance_types;
  public string $next_token;
}

class DescribeConfigRuleEvaluationStatusRequest {
  public string $next_token;
  public RuleLimit $limit;
  public ConfigRuleNames $config_rule_names;
}

class DescribeOrganizationConformancePackStatusesResponse {
  public OrganizationConformancePackStatuses $organization_conformance_pack_statuses;
  public string $next_token;
}

class GetOrganizationConfigRuleDetailedStatusResponse {
  public OrganizationConfigRuleDetailedStatus $organization_config_rule_detailed_status;
  public string $next_token;
}

class RelationshipList {
}

class RemediationExecutionStepState {
}

class ConfigRuleState {
}

class DeliveryChannelNameList {
}

class GetConformancePackComplianceSummaryResponse {
  public ConformancePackComplianceSummaryList $conformance_pack_compliance_summary_list;
  public NextToken $next_token;
}

class InvalidRecordingGroupException {
}

class RecorderStatus {
}

class AccountAggregationSourceList {
}

class ResourceFilters {
  public AccountId $account_id;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public AwsRegion $region;
}

class AggregatedSourceStatus {
  public string $last_error_message;
  public string $source_id;
  public AggregatedSourceType $source_type;
  public AwsRegion $aws_region;
  public AggregatedSourceStatusType $last_update_status;
  public Date $last_update_time;
  public string $last_error_code;
}

class ConformancePackComplianceSummary {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackComplianceType $conformance_pack_compliance_status;
}

class ConformancePackInputParameters {
}

class ListTagsForResourceRequest {
  public Limit $limit;
  public NextToken $next_token;
  public AmazonResourceName $resource_arn;
}

class RecordingGroup {
  public AllSupported $all_supported;
  public IncludeGlobalResourceTypes $include_global_resource_types;
  public ResourceTypeList $resource_types;
}

class PutAggregationAuthorizationResponse {
  public AggregationAuthorization $aggregation_authorization;
}

class MaxNumberOfConformancePacksExceededException {
}

class BatchGetAggregateResourceConfigResponse {
  public UnprocessedResourceIdentifierList $unprocessed_resource_identifiers;
  public BaseConfigurationItems $base_configuration_items;
}

class ConfigRuleNames {
}

class GetComplianceDetailsByResourceResponse {
  public EvaluationResults $evaluation_results;
  public string $next_token;
}

class InvalidNextTokenException {
}

class OrganizationConfigRuleName {
}

class StringWithCharLimit128 {
}

class ConfigurationRecorderStatus {
  public boolean $recording;
  public RecorderStatus $last_status;
  public string $last_error_code;
  public string $last_error_message;
  public Date $last_status_change_time;
  public string $name;
  public Date $last_start_time;
  public Date $last_stop_time;
}

class DeleteRemediationExceptionsRequest {
  public ConfigRuleName $config_rule_name;
  public RemediationExceptionResourceKeys $resource_keys;
}

class OrganizationConformancePackDetailedStatuses {
}

class RemediationException {
  public ConfigRuleName $config_rule_name;
  public StringWithCharLimit256 $resource_type;
  public StringWithCharLimit1024 $resource_id;
  public StringWithCharLimit1024 $message;
  public Date $expiration_time;
}

class ResourceKey {
  public ResourceType $resource_type;
  public ResourceId $resource_id;
}

class DescribePendingAggregationRequestsResponse {
  public PendingAggregationRequestList $pending_aggregation_requests;
  public string $next_token;
}

class DeleteOrganizationConformancePackRequest {
  public OrganizationConformancePackName $organization_conformance_pack_name;
}

class NoSuchConfigurationAggregatorException {
}

class DescribeConformancePackComplianceLimit {
}

class FieldInfo {
  public FieldName $name;
}

class Version {
}

class DescribeOrganizationConformancePackStatusesRequest {
  public OrganizationConformancePackNames $organization_conformance_pack_names;
  public CosmosPageLimit $limit;
  public string $next_token;
}

class OrganizationConformancePackStatuses {
}

class PutConfigurationRecorderRequest {
  public ConfigurationRecorder $configuration_recorder;
}

class ComplianceByResources {
}

class GetComplianceDetailsByConfigRuleResponse {
  public EvaluationResults $evaluation_results;
  public NextToken $next_token;
}

class ComplianceSummary {
  public ComplianceContributorCount $compliant_resource_count;
  public ComplianceContributorCount $non_compliant_resource_count;
  public Date $compliance_summary_timestamp;
}

class ConfigurationAggregatorList {
}

class MemberAccountStatus {
  public AccountId $account_id;
  public StringWithCharLimit64 $config_rule_name;
  public MemberAccountRuleStatus $member_account_rule_status;
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
}

class OrganizationCustomRuleMetadata {
  public OrganizationConfigRuleTriggerTypes $organization_config_rule_trigger_types;
  public StringWithCharLimit2048 $input_parameters;
  public MaximumExecutionFrequency $maximum_execution_frequency;
  public ResourceTypesScope $resource_types_scope;
  public StringWithCharLimit128 $tag_key_scope;
  public StringWithCharLimit256 $tag_value_scope;
  public StringWithCharLimit256Min0 $description;
  public StringWithCharLimit256 $lambda_function_arn;
  public StringWithCharLimit768 $resource_id_scope;
}

class ResourceTypeString {
}

class AccountAggregationSource {
  public AccountAggregationSourceAccountList $account_ids;
  public boolean $all_aws_regions;
  public AggregatorRegionList $aws_regions;
}

class OrganizationConfigRuleStatus {
  public OrganizationConfigRuleName $organization_config_rule_name;
  public OrganizationRuleStatus $organization_rule_status;
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
}

class RemediationExecutionState {
}

class GetAggregateResourceConfigRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public AggregateResourceIdentifier $resource_identifier;
}

class GroupByAPILimit {
}

class InvalidRoleException {
}

class RelationshipName {
}

class DescribeDeliveryChannelStatusRequest {
  public DeliveryChannelNameList $delivery_channel_names;
}

class DeleteResourceConfigRequest {
  public ResourceTypeString $resource_type;
  public ResourceId $resource_id;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TooManyTagsException {
}

class ParameterName {
}

class AggregationAuthorization {
  public Date $creation_time;
  public string $aggregation_authorization_arn;
  public AccountId $authorized_account_id;
  public AwsRegion $authorized_aws_region;
}

class DeleteOrganizationConfigRuleRequest {
  public OrganizationConfigRuleName $organization_config_rule_name;
}

class DescribeConfigurationRecordersResponse {
  public ConfigurationRecorderList $configuration_recorders;
}

class AllSupported {
}

class DescribeComplianceByResourceResponse {
  public NextToken $next_token;
  public ComplianceByResources $compliance_by_resources;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class InvalidResultTokenException {
}

class LastDeliveryChannelDeleteFailedException {
}

class ListAggregateDiscoveredResourcesRequest {
  public Limit $limit;
  public NextToken $next_token;
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ResourceType $resource_type;
  public ResourceFilters $filters;
}

class OrganizationConfigRules {
}

class Owner {
}

class Annotation {
}

class DescribeDeliveryChannelsRequest {
  public DeliveryChannelNameList $delivery_channel_names;
}

class GetDiscoveredResourceCountsRequest {
  public ResourceTypes $resource_types;
  public Limit $limit;
  public NextToken $next_token;
}

class RemediationExecutionSteps {
}

class ResourceDeletionTime {
}

class ConformancePackComplianceResourceIds {
}

class SupplementaryConfigurationName {
}

class ConfigurationAggregatorName {
}

class DescribeConfigurationRecorderStatusRequest {
  public ConfigurationRecorderNameList $configuration_recorder_names;
}

class PutOrganizationConformancePackRequest {
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public ExcludedAccounts $excluded_accounts;
  public OrganizationConformancePackName $organization_conformance_pack_name;
  public TemplateS3Uri $template_s_3_uri;
  public TemplateBody $template_body;
  public DeliveryS3Bucket $delivery_s_3_bucket;
}

class NoSuchBucketException {
}

class AwsRegion {
}

class DescribeConfigurationRecorderStatusResponse {
  public ConfigurationRecorderStatusList $configuration_recorders_status;
}

class DescribeConformancePackStatusResponse {
  public ConformancePackStatusDetailsList $conformance_pack_status_details;
  public NextToken $next_token;
}

class GetAggregateConfigRuleComplianceSummaryRequest {
  public ConfigRuleComplianceSummaryFilters $filters;
  public ConfigRuleComplianceSummaryGroupKey $group_by_key;
  public GroupByAPILimit $limit;
  public NextToken $next_token;
  public ConfigurationAggregatorName $configuration_aggregator_name;
}

class RemediationExceptionResourceKeys {
}

class Date {
}

class OrganizationResourceStatus {
}

class RelatedEventList {
}

class DeleteConformancePackRequest {
  public ConformancePackName $conformance_pack_name;
}

class GetAggregateComplianceDetailsByConfigRuleResponse {
  public AggregateEvaluationResultList $aggregate_evaluation_results;
  public NextToken $next_token;
}

class GetConformancePackComplianceDetailsResponse {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackRuleEvaluationResultsList $conformance_pack_rule_evaluation_results;
  public NextToken $next_token;
}

class ResourceNotFoundException {
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class AggregateComplianceCount {
  public StringWithCharLimit256 $group_name;
  public ComplianceSummary $compliance_summary;
}

class Limit {
}

class PutRemediationConfigurationsRequest {
  public RemediationConfigurations $remediation_configurations;
}

