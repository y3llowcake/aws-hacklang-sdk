<?hh // strict
namespace slack\aws\config;

interface Config Service {
  public function BatchGetAggregateResourceConfig(BatchGetAggregateResourceConfigRequest) Awaitable<Errors\Result<BatchGetAggregateResourceConfigResponse>>;
  public function BatchGetResourceConfig(BatchGetResourceConfigRequest) Awaitable<Errors\Result<BatchGetResourceConfigResponse>>;
  public function DeleteAggregationAuthorization(DeleteAggregationAuthorizationRequest) Awaitable<Errors\Error>;
  public function DeleteConfigRule(DeleteConfigRuleRequest) Awaitable<Errors\Error>;
  public function DeleteConfigurationAggregator(DeleteConfigurationAggregatorRequest) Awaitable<Errors\Error>;
  public function DeleteConfigurationRecorder(DeleteConfigurationRecorderRequest) Awaitable<Errors\Error>;
  public function DeleteConformancePack(DeleteConformancePackRequest) Awaitable<Errors\Error>;
  public function DeleteDeliveryChannel(DeleteDeliveryChannelRequest) Awaitable<Errors\Error>;
  public function DeleteEvaluationResults(DeleteEvaluationResultsRequest) Awaitable<Errors\Result<DeleteEvaluationResultsResponse>>;
  public function DeleteOrganizationConfigRule(DeleteOrganizationConfigRuleRequest) Awaitable<Errors\Error>;
  public function DeleteOrganizationConformancePack(DeleteOrganizationConformancePackRequest) Awaitable<Errors\Error>;
  public function DeletePendingAggregationRequest(DeletePendingAggregationRequestRequest) Awaitable<Errors\Error>;
  public function DeleteRemediationConfiguration(DeleteRemediationConfigurationRequest) Awaitable<Errors\Result<DeleteRemediationConfigurationResponse>>;
  public function DeleteRemediationExceptions(DeleteRemediationExceptionsRequest) Awaitable<Errors\Result<DeleteRemediationExceptionsResponse>>;
  public function DeleteResourceConfig(DeleteResourceConfigRequest) Awaitable<Errors\Error>;
  public function DeleteRetentionConfiguration(DeleteRetentionConfigurationRequest) Awaitable<Errors\Error>;
  public function DeliverConfigSnapshot(DeliverConfigSnapshotRequest) Awaitable<Errors\Result<DeliverConfigSnapshotResponse>>;
  public function DescribeAggregateComplianceByConfigRules(DescribeAggregateComplianceByConfigRulesRequest) Awaitable<Errors\Result<DescribeAggregateComplianceByConfigRulesResponse>>;
  public function DescribeAggregationAuthorizations(DescribeAggregationAuthorizationsRequest) Awaitable<Errors\Result<DescribeAggregationAuthorizationsResponse>>;
  public function DescribeComplianceByConfigRule(DescribeComplianceByConfigRuleRequest) Awaitable<Errors\Result<DescribeComplianceByConfigRuleResponse>>;
  public function DescribeComplianceByResource(DescribeComplianceByResourceRequest) Awaitable<Errors\Result<DescribeComplianceByResourceResponse>>;
  public function DescribeConfigRuleEvaluationStatus(DescribeConfigRuleEvaluationStatusRequest) Awaitable<Errors\Result<DescribeConfigRuleEvaluationStatusResponse>>;
  public function DescribeConfigRules(DescribeConfigRulesRequest) Awaitable<Errors\Result<DescribeConfigRulesResponse>>;
  public function DescribeConfigurationAggregatorSourcesStatus(DescribeConfigurationAggregatorSourcesStatusRequest) Awaitable<Errors\Result<DescribeConfigurationAggregatorSourcesStatusResponse>>;
  public function DescribeConfigurationAggregators(DescribeConfigurationAggregatorsRequest) Awaitable<Errors\Result<DescribeConfigurationAggregatorsResponse>>;
  public function DescribeConfigurationRecorderStatus(DescribeConfigurationRecorderStatusRequest) Awaitable<Errors\Result<DescribeConfigurationRecorderStatusResponse>>;
  public function DescribeConfigurationRecorders(DescribeConfigurationRecordersRequest) Awaitable<Errors\Result<DescribeConfigurationRecordersResponse>>;
  public function DescribeConformancePackCompliance(DescribeConformancePackComplianceRequest) Awaitable<Errors\Result<DescribeConformancePackComplianceResponse>>;
  public function DescribeConformancePackStatus(DescribeConformancePackStatusRequest) Awaitable<Errors\Result<DescribeConformancePackStatusResponse>>;
  public function DescribeConformancePacks(DescribeConformancePacksRequest) Awaitable<Errors\Result<DescribeConformancePacksResponse>>;
  public function DescribeDeliveryChannelStatus(DescribeDeliveryChannelStatusRequest) Awaitable<Errors\Result<DescribeDeliveryChannelStatusResponse>>;
  public function DescribeDeliveryChannels(DescribeDeliveryChannelsRequest) Awaitable<Errors\Result<DescribeDeliveryChannelsResponse>>;
  public function DescribeOrganizationConfigRuleStatuses(DescribeOrganizationConfigRuleStatusesRequest) Awaitable<Errors\Result<DescribeOrganizationConfigRuleStatusesResponse>>;
  public function DescribeOrganizationConfigRules(DescribeOrganizationConfigRulesRequest) Awaitable<Errors\Result<DescribeOrganizationConfigRulesResponse>>;
  public function DescribeOrganizationConformancePackStatuses(DescribeOrganizationConformancePackStatusesRequest) Awaitable<Errors\Result<DescribeOrganizationConformancePackStatusesResponse>>;
  public function DescribeOrganizationConformancePacks(DescribeOrganizationConformancePacksRequest) Awaitable<Errors\Result<DescribeOrganizationConformancePacksResponse>>;
  public function DescribePendingAggregationRequests(DescribePendingAggregationRequestsRequest) Awaitable<Errors\Result<DescribePendingAggregationRequestsResponse>>;
  public function DescribeRemediationConfigurations(DescribeRemediationConfigurationsRequest) Awaitable<Errors\Result<DescribeRemediationConfigurationsResponse>>;
  public function DescribeRemediationExceptions(DescribeRemediationExceptionsRequest) Awaitable<Errors\Result<DescribeRemediationExceptionsResponse>>;
  public function DescribeRemediationExecutionStatus(DescribeRemediationExecutionStatusRequest) Awaitable<Errors\Result<DescribeRemediationExecutionStatusResponse>>;
  public function DescribeRetentionConfigurations(DescribeRetentionConfigurationsRequest) Awaitable<Errors\Result<DescribeRetentionConfigurationsResponse>>;
  public function GetAggregateComplianceDetailsByConfigRule(GetAggregateComplianceDetailsByConfigRuleRequest) Awaitable<Errors\Result<GetAggregateComplianceDetailsByConfigRuleResponse>>;
  public function GetAggregateConfigRuleComplianceSummary(GetAggregateConfigRuleComplianceSummaryRequest) Awaitable<Errors\Result<GetAggregateConfigRuleComplianceSummaryResponse>>;
  public function GetAggregateDiscoveredResourceCounts(GetAggregateDiscoveredResourceCountsRequest) Awaitable<Errors\Result<GetAggregateDiscoveredResourceCountsResponse>>;
  public function GetAggregateResourceConfig(GetAggregateResourceConfigRequest) Awaitable<Errors\Result<GetAggregateResourceConfigResponse>>;
  public function GetComplianceDetailsByConfigRule(GetComplianceDetailsByConfigRuleRequest) Awaitable<Errors\Result<GetComplianceDetailsByConfigRuleResponse>>;
  public function GetComplianceDetailsByResource(GetComplianceDetailsByResourceRequest) Awaitable<Errors\Result<GetComplianceDetailsByResourceResponse>>;
  public function GetComplianceSummaryByConfigRule() Awaitable<Errors\Result<GetComplianceSummaryByConfigRuleResponse>>;
  public function GetComplianceSummaryByResourceType(GetComplianceSummaryByResourceTypeRequest) Awaitable<Errors\Result<GetComplianceSummaryByResourceTypeResponse>>;
  public function GetConformancePackComplianceDetails(GetConformancePackComplianceDetailsRequest) Awaitable<Errors\Result<GetConformancePackComplianceDetailsResponse>>;
  public function GetConformancePackComplianceSummary(GetConformancePackComplianceSummaryRequest) Awaitable<Errors\Result<GetConformancePackComplianceSummaryResponse>>;
  public function GetDiscoveredResourceCounts(GetDiscoveredResourceCountsRequest) Awaitable<Errors\Result<GetDiscoveredResourceCountsResponse>>;
  public function GetOrganizationConfigRuleDetailedStatus(GetOrganizationConfigRuleDetailedStatusRequest) Awaitable<Errors\Result<GetOrganizationConfigRuleDetailedStatusResponse>>;
  public function GetOrganizationConformancePackDetailedStatus(GetOrganizationConformancePackDetailedStatusRequest) Awaitable<Errors\Result<GetOrganizationConformancePackDetailedStatusResponse>>;
  public function GetResourceConfigHistory(GetResourceConfigHistoryRequest) Awaitable<Errors\Result<GetResourceConfigHistoryResponse>>;
  public function ListAggregateDiscoveredResources(ListAggregateDiscoveredResourcesRequest) Awaitable<Errors\Result<ListAggregateDiscoveredResourcesResponse>>;
  public function ListDiscoveredResources(ListDiscoveredResourcesRequest) Awaitable<Errors\Result<ListDiscoveredResourcesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutAggregationAuthorization(PutAggregationAuthorizationRequest) Awaitable<Errors\Result<PutAggregationAuthorizationResponse>>;
  public function PutConfigRule(PutConfigRuleRequest) Awaitable<Errors\Error>;
  public function PutConfigurationAggregator(PutConfigurationAggregatorRequest) Awaitable<Errors\Result<PutConfigurationAggregatorResponse>>;
  public function PutConfigurationRecorder(PutConfigurationRecorderRequest) Awaitable<Errors\Error>;
  public function PutConformancePack(PutConformancePackRequest) Awaitable<Errors\Result<PutConformancePackResponse>>;
  public function PutDeliveryChannel(PutDeliveryChannelRequest) Awaitable<Errors\Error>;
  public function PutEvaluations(PutEvaluationsRequest) Awaitable<Errors\Result<PutEvaluationsResponse>>;
  public function PutOrganizationConfigRule(PutOrganizationConfigRuleRequest) Awaitable<Errors\Result<PutOrganizationConfigRuleResponse>>;
  public function PutOrganizationConformancePack(PutOrganizationConformancePackRequest) Awaitable<Errors\Result<PutOrganizationConformancePackResponse>>;
  public function PutRemediationConfigurations(PutRemediationConfigurationsRequest) Awaitable<Errors\Result<PutRemediationConfigurationsResponse>>;
  public function PutRemediationExceptions(PutRemediationExceptionsRequest) Awaitable<Errors\Result<PutRemediationExceptionsResponse>>;
  public function PutResourceConfig(PutResourceConfigRequest) Awaitable<Errors\Error>;
  public function PutRetentionConfiguration(PutRetentionConfigurationRequest) Awaitable<Errors\Result<PutRetentionConfigurationResponse>>;
  public function SelectAggregateResourceConfig(SelectAggregateResourceConfigRequest) Awaitable<Errors\Result<SelectAggregateResourceConfigResponse>>;
  public function SelectResourceConfig(SelectResourceConfigRequest) Awaitable<Errors\Result<SelectResourceConfigResponse>>;
  public function StartConfigRulesEvaluation(StartConfigRulesEvaluationRequest) Awaitable<Errors\Result<StartConfigRulesEvaluationResponse>>;
  public function StartConfigurationRecorder(StartConfigurationRecorderRequest) Awaitable<Errors\Error>;
  public function StartRemediationExecution(StartRemediationExecutionRequest) Awaitable<Errors\Result<StartRemediationExecutionResponse>>;
  public function StopConfigurationRecorder(StopConfigurationRecorderRequest) Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
}

class ARN {
}

class AccountAggregationSource {
  public AccountAggregationSourceAccountList $account_ids;
  public boolean $all_aws_regions;
  public AggregatorRegionList $aws_regions;
}

class AccountAggregationSourceAccountList {
}

class AccountAggregationSourceList {
}

class AccountId {
}

class AggregateComplianceByConfigRule {
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public Compliance $compliance;
  public ConfigRuleName $config_rule_name;
}

class AggregateComplianceByConfigRuleList {
}

class AggregateComplianceCount {
  public ComplianceSummary $compliance_summary;
  public StringWithCharLimit256 $group_name;
}

class AggregateComplianceCountList {
}

class AggregateEvaluationResult {
  public AccountId $account_id;
  public StringWithCharLimit256 $annotation;
  public AwsRegion $aws_region;
  public ComplianceType $compliance_type;
  public Date $config_rule_invoked_time;
  public EvaluationResultIdentifier $evaluation_result_identifier;
  public Date $result_recorded_time;
}

class AggregateEvaluationResultList {
}

class AggregateResourceIdentifier {
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
  public AccountId $source_account_id;
  public AwsRegion $source_region;
}

class AggregatedSourceStatus {
  public AwsRegion $aws_region;
  public string $last_error_code;
  public string $last_error_message;
  public AggregatedSourceStatusType $last_update_status;
  public Date $last_update_time;
  public string $source_id;
  public AggregatedSourceType $source_type;
}

class AggregatedSourceStatusList {
}

class AggregatedSourceStatusType {
}

class AggregatedSourceStatusTypeList {
}

class AggregatedSourceType {
}

class AggregationAuthorization {
  public string $aggregation_authorization_arn;
  public AccountId $authorized_account_id;
  public AwsRegion $authorized_aws_region;
  public Date $creation_time;
}

class AggregationAuthorizationList {
}

class AggregatorRegionList {
}

class AllSupported {
}

class AmazonResourceName {
}

class Annotation {
}

class AutoRemediationAttemptSeconds {
}

class AutoRemediationAttempts {
}

class AvailabilityZone {
}

class AwsRegion {
}

class BaseConfigurationItem {
  public AccountId $account_id;
  public ARN $arn;
  public AvailabilityZone $availability_zone;
  public AwsRegion $aws_region;
  public Configuration $configuration;
  public ConfigurationItemCaptureTime $configuration_item_capture_time;
  public ConfigurationItemStatus $configuration_item_status;
  public ConfigurationStateId $configuration_state_id;
  public ResourceCreationTime $resource_creation_time;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
  public SupplementaryConfiguration $supplementary_configuration;
  public Version $version;
}

class BaseConfigurationItems {
}

class BaseResourceId {
}

class BatchGetAggregateResourceConfigRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ResourceIdentifiersList $resource_identifiers;
}

class BatchGetAggregateResourceConfigResponse {
  public BaseConfigurationItems $base_configuration_items;
  public UnprocessedResourceIdentifierList $unprocessed_resource_identifiers;
}

class BatchGetResourceConfigRequest {
  public ResourceKeys $resource_keys;
}

class BatchGetResourceConfigResponse {
  public BaseConfigurationItems $base_configuration_items;
  public ResourceKeys $unprocessed_resource_keys;
}

class Boolean {
}

class ChannelName {
}

class ChronologicalOrder {
}

class Compliance {
  public ComplianceContributorCount $compliance_contributor_count;
  public ComplianceType $compliance_type;
}

class ComplianceByConfigRule {
  public Compliance $compliance;
  public StringWithCharLimit64 $config_rule_name;
}

class ComplianceByConfigRules {
}

class ComplianceByResource {
  public Compliance $compliance;
  public BaseResourceId $resource_id;
  public StringWithCharLimit256 $resource_type;
}

class ComplianceByResources {
}

class ComplianceContributorCount {
  public boolean $cap_exceeded;
  public int $capped_count;
}

class ComplianceResourceTypes {
}

class ComplianceSummariesByResourceType {
}

class ComplianceSummary {
  public Date $compliance_summary_timestamp;
  public ComplianceContributorCount $compliant_resource_count;
  public ComplianceContributorCount $non_compliant_resource_count;
}

class ComplianceSummaryByResourceType {
  public ComplianceSummary $compliance_summary;
  public StringWithCharLimit256 $resource_type;
}

class ComplianceType {
}

class ComplianceTypes {
}

class ConfigExportDeliveryInfo {
  public Date $last_attempt_time;
  public string $last_error_code;
  public string $last_error_message;
  public DeliveryStatus $last_status;
  public Date $last_successful_time;
  public Date $next_delivery_time;
}

class ConfigRule {
  public StringWithCharLimit256 $config_rule_arn;
  public StringWithCharLimit64 $config_rule_id;
  public ConfigRuleName $config_rule_name;
  public ConfigRuleState $config_rule_state;
  public StringWithCharLimit256 $created_by;
  public EmptiableStringWithCharLimit256 $description;
  public StringWithCharLimit1024 $input_parameters;
  public MaximumExecutionFrequency $maximum_execution_frequency;
  public Scope $scope;
  public Source $source;
}

class ConfigRuleComplianceFilters {
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public ComplianceType $compliance_type;
  public ConfigRuleName $config_rule_name;
}

class ConfigRuleComplianceSummaryFilters {
  public AccountId $account_id;
  public AwsRegion $aws_region;
}

class ConfigRuleComplianceSummaryGroupKey {
}

class ConfigRuleEvaluationStatus {
  public string $config_rule_arn;
  public string $config_rule_id;
  public ConfigRuleName $config_rule_name;
  public Date $first_activated_time;
  public boolean $first_evaluation_started;
  public Date $last_deactivated_time;
  public string $last_error_code;
  public string $last_error_message;
  public Date $last_failed_evaluation_time;
  public Date $last_failed_invocation_time;
  public Date $last_successful_evaluation_time;
  public Date $last_successful_invocation_time;
}

class ConfigRuleEvaluationStatusList {
}

class ConfigRuleName {
}

class ConfigRuleNames {
}

class ConfigRuleState {
}

class ConfigRules {
}

class ConfigSnapshotDeliveryProperties {
  public MaximumExecutionFrequency $delivery_frequency;
}

class ConfigStreamDeliveryInfo {
  public string $last_error_code;
  public string $last_error_message;
  public DeliveryStatus $last_status;
  public Date $last_status_change_time;
}

class Configuration {
}

class ConfigurationAggregator {
  public AccountAggregationSourceList $account_aggregation_sources;
  public ConfigurationAggregatorArn $configuration_aggregator_arn;
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public Date $creation_time;
  public Date $last_updated_time;
  public OrganizationAggregationSource $organization_aggregation_source;
}

class ConfigurationAggregatorArn {
}

class ConfigurationAggregatorList {
}

class ConfigurationAggregatorName {
}

class ConfigurationAggregatorNameList {
}

class ConfigurationItem {
  public AccountId $account_id;
  public ARN $arn;
  public AvailabilityZone $availability_zone;
  public AwsRegion $aws_region;
  public Configuration $configuration;
  public ConfigurationItemCaptureTime $configuration_item_capture_time;
  public ConfigurationItemMD5Hash $configuration_item_md_5_hash;
  public ConfigurationItemStatus $configuration_item_status;
  public ConfigurationStateId $configuration_state_id;
  public RelatedEventList $related_events;
  public RelationshipList $relationships;
  public ResourceCreationTime $resource_creation_time;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
  public SupplementaryConfiguration $supplementary_configuration;
  public Tags $tags;
  public Version $version;
}

class ConfigurationItemCaptureTime {
}

class ConfigurationItemList {
}

class ConfigurationItemMD5Hash {
}

class ConfigurationItemStatus {
}

class ConfigurationRecorder {
  public RecorderName $name;
  public RecordingGroup $recording_group;
  public string $role_arn;
}

class ConfigurationRecorderList {
}

class ConfigurationRecorderNameList {
}

class ConfigurationRecorderStatus {
  public string $last_error_code;
  public string $last_error_message;
  public Date $last_start_time;
  public RecorderStatus $last_status;
  public Date $last_status_change_time;
  public Date $last_stop_time;
  public string $name;
  public boolean $recording;
}

class ConfigurationRecorderStatusList {
}

class ConfigurationStateId {
}

class ConformancePackArn {
}

class ConformancePackComplianceFilters {
  public ConformancePackComplianceType $compliance_type;
  public ConformancePackConfigRuleNames $config_rule_names;
}

class ConformancePackComplianceResourceIds {
}

class ConformancePackComplianceSummary {
  public ConformancePackComplianceType $conformance_pack_compliance_status;
  public ConformancePackName $conformance_pack_name;
}

class ConformancePackComplianceSummaryList {
}

class ConformancePackComplianceType {
}

class ConformancePackConfigRuleNames {
}

class ConformancePackDetail {
  public ConformancePackArn $conformance_pack_arn;
  public ConformancePackId $conformance_pack_id;
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public ConformancePackName $conformance_pack_name;
  public StringWithCharLimit256 $created_by;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public Date $last_update_requested_time;
}

class ConformancePackDetailList {
}

class ConformancePackEvaluationFilters {
  public ConformancePackComplianceType $compliance_type;
  public ConformancePackConfigRuleNames $config_rule_names;
  public ConformancePackComplianceResourceIds $resource_ids;
  public StringWithCharLimit256 $resource_type;
}

class ConformancePackEvaluationResult {
  public Annotation $annotation;
  public ConformancePackComplianceType $compliance_type;
  public Date $config_rule_invoked_time;
  public EvaluationResultIdentifier $evaluation_result_identifier;
  public Date $result_recorded_time;
}

class ConformancePackId {
}

class ConformancePackInputParameter {
  public ParameterName $parameter_name;
  public ParameterValue $parameter_value;
}

class ConformancePackInputParameters {
}

class ConformancePackName {
}

class ConformancePackNamesList {
}

class ConformancePackNamesToSummarizeList {
}

class ConformancePackRuleCompliance {
  public ConformancePackComplianceType $compliance_type;
  public ConfigRuleName $config_rule_name;
}

class ConformancePackRuleComplianceList {
}

class ConformancePackRuleEvaluationResultsList {
}

class ConformancePackState {
}

class ConformancePackStatusDetail {
  public ConformancePackArn $conformance_pack_arn;
  public ConformancePackId $conformance_pack_id;
  public ConformancePackName $conformance_pack_name;
  public ConformancePackState $conformance_pack_state;
  public ConformancePackStatusReason $conformance_pack_status_reason;
  public Date $last_update_completed_time;
  public Date $last_update_requested_time;
  public StackArn $stack_arn;
}

class ConformancePackStatusDetailsList {
}

class ConformancePackStatusReason {
}

class ConformancePackTemplateValidationException {
}

class CosmosPageLimit {
}

class Date {
}

class DeleteAggregationAuthorizationRequest {
  public AccountId $authorized_account_id;
  public AwsRegion $authorized_aws_region;
}

class DeleteConfigRuleRequest {
  public ConfigRuleName $config_rule_name;
}

class DeleteConfigurationAggregatorRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
}

class DeleteConfigurationRecorderRequest {
  public RecorderName $configuration_recorder_name;
}

class DeleteConformancePackRequest {
  public ConformancePackName $conformance_pack_name;
}

class DeleteDeliveryChannelRequest {
  public ChannelName $delivery_channel_name;
}

class DeleteEvaluationResultsRequest {
  public StringWithCharLimit64 $config_rule_name;
}

class DeleteEvaluationResultsResponse {
}

class DeleteOrganizationConfigRuleRequest {
  public OrganizationConfigRuleName $organization_config_rule_name;
}

class DeleteOrganizationConformancePackRequest {
  public OrganizationConformancePackName $organization_conformance_pack_name;
}

class DeletePendingAggregationRequestRequest {
  public AccountId $requester_account_id;
  public AwsRegion $requester_aws_region;
}

class DeleteRemediationConfigurationRequest {
  public ConfigRuleName $config_rule_name;
  public string $resource_type;
}

class DeleteRemediationConfigurationResponse {
}

class DeleteRemediationExceptionsRequest {
  public ConfigRuleName $config_rule_name;
  public RemediationExceptionResourceKeys $resource_keys;
}

class DeleteRemediationExceptionsResponse {
  public FailedDeleteRemediationExceptionsBatches $failed_batches;
}

class DeleteResourceConfigRequest {
  public ResourceId $resource_id;
  public ResourceTypeString $resource_type;
}

class DeleteRetentionConfigurationRequest {
  public RetentionConfigurationName $retention_configuration_name;
}

class DeliverConfigSnapshotRequest {
  public ChannelName $delivery_channel_name;
}

class DeliverConfigSnapshotResponse {
  public string $config_snapshot_id;
}

class DeliveryChannel {
  public ConfigSnapshotDeliveryProperties $config_snapshot_delivery_properties;
  public ChannelName $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public string $sns_topic_arn;
}

class DeliveryChannelList {
}

class DeliveryChannelNameList {
}

class DeliveryChannelStatus {
  public ConfigExportDeliveryInfo $config_history_delivery_info;
  public ConfigExportDeliveryInfo $config_snapshot_delivery_info;
  public ConfigStreamDeliveryInfo $config_stream_delivery_info;
  public string $name;
}

class DeliveryChannelStatusList {
}

class DeliveryS3Bucket {
}

class DeliveryS3KeyPrefix {
}

class DeliveryStatus {
}

class DescribeAggregateComplianceByConfigRulesRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ConfigRuleComplianceFilters $filters;
  public GroupByAPILimit $limit;
  public NextToken $next_token;
}

class DescribeAggregateComplianceByConfigRulesResponse {
  public AggregateComplianceByConfigRuleList $aggregate_compliance_by_config_rules;
  public NextToken $next_token;
}

class DescribeAggregationAuthorizationsRequest {
  public Limit $limit;
  public string $next_token;
}

class DescribeAggregationAuthorizationsResponse {
  public AggregationAuthorizationList $aggregation_authorizations;
  public string $next_token;
}

class DescribeComplianceByConfigRuleRequest {
  public ComplianceTypes $compliance_types;
  public ConfigRuleNames $config_rule_names;
  public string $next_token;
}

class DescribeComplianceByConfigRuleResponse {
  public ComplianceByConfigRules $compliance_by_config_rules;
  public string $next_token;
}

class DescribeComplianceByResourceRequest {
  public ComplianceTypes $compliance_types;
  public Limit $limit;
  public NextToken $next_token;
  public BaseResourceId $resource_id;
  public StringWithCharLimit256 $resource_type;
}

class DescribeComplianceByResourceResponse {
  public ComplianceByResources $compliance_by_resources;
  public NextToken $next_token;
}

class DescribeConfigRuleEvaluationStatusRequest {
  public ConfigRuleNames $config_rule_names;
  public RuleLimit $limit;
  public string $next_token;
}

class DescribeConfigRuleEvaluationStatusResponse {
  public ConfigRuleEvaluationStatusList $config_rules_evaluation_status;
  public string $next_token;
}

class DescribeConfigRulesRequest {
  public ConfigRuleNames $config_rule_names;
  public string $next_token;
}

class DescribeConfigRulesResponse {
  public ConfigRules $config_rules;
  public string $next_token;
}

class DescribeConfigurationAggregatorSourcesStatusRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public Limit $limit;
  public string $next_token;
  public AggregatedSourceStatusTypeList $update_status;
}

class DescribeConfigurationAggregatorSourcesStatusResponse {
  public AggregatedSourceStatusList $aggregated_source_status_list;
  public string $next_token;
}

class DescribeConfigurationAggregatorsRequest {
  public ConfigurationAggregatorNameList $configuration_aggregator_names;
  public Limit $limit;
  public string $next_token;
}

class DescribeConfigurationAggregatorsResponse {
  public ConfigurationAggregatorList $configuration_aggregators;
  public string $next_token;
}

class DescribeConfigurationRecorderStatusRequest {
  public ConfigurationRecorderNameList $configuration_recorder_names;
}

class DescribeConfigurationRecorderStatusResponse {
  public ConfigurationRecorderStatusList $configuration_recorders_status;
}

class DescribeConfigurationRecordersRequest {
  public ConfigurationRecorderNameList $configuration_recorder_names;
}

class DescribeConfigurationRecordersResponse {
  public ConfigurationRecorderList $configuration_recorders;
}

class DescribeConformancePackComplianceLimit {
}

class DescribeConformancePackComplianceRequest {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackComplianceFilters $filters;
  public DescribeConformancePackComplianceLimit $limit;
  public NextToken $next_token;
}

class DescribeConformancePackComplianceResponse {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackRuleComplianceList $conformance_pack_rule_compliance_list;
  public NextToken $next_token;
}

class DescribeConformancePackStatusRequest {
  public ConformancePackNamesList $conformance_pack_names;
  public PageSizeLimit $limit;
  public NextToken $next_token;
}

class DescribeConformancePackStatusResponse {
  public ConformancePackStatusDetailsList $conformance_pack_status_details;
  public NextToken $next_token;
}

class DescribeConformancePacksRequest {
  public ConformancePackNamesList $conformance_pack_names;
  public PageSizeLimit $limit;
  public NextToken $next_token;
}

class DescribeConformancePacksResponse {
  public ConformancePackDetailList $conformance_pack_details;
  public NextToken $next_token;
}

class DescribeDeliveryChannelStatusRequest {
  public DeliveryChannelNameList $delivery_channel_names;
}

class DescribeDeliveryChannelStatusResponse {
  public DeliveryChannelStatusList $delivery_channels_status;
}

class DescribeDeliveryChannelsRequest {
  public DeliveryChannelNameList $delivery_channel_names;
}

class DescribeDeliveryChannelsResponse {
  public DeliveryChannelList $delivery_channels;
}

class DescribeOrganizationConfigRuleStatusesRequest {
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConfigRuleNames $organization_config_rule_names;
}

class DescribeOrganizationConfigRuleStatusesResponse {
  public string $next_token;
  public OrganizationConfigRuleStatuses $organization_config_rule_statuses;
}

class DescribeOrganizationConfigRulesRequest {
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConfigRuleNames $organization_config_rule_names;
}

class DescribeOrganizationConfigRulesResponse {
  public string $next_token;
  public OrganizationConfigRules $organization_config_rules;
}

class DescribeOrganizationConformancePackStatusesRequest {
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConformancePackNames $organization_conformance_pack_names;
}

class DescribeOrganizationConformancePackStatusesResponse {
  public string $next_token;
  public OrganizationConformancePackStatuses $organization_conformance_pack_statuses;
}

class DescribeOrganizationConformancePacksRequest {
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConformancePackNames $organization_conformance_pack_names;
}

class DescribeOrganizationConformancePacksResponse {
  public string $next_token;
  public OrganizationConformancePacks $organization_conformance_packs;
}

class DescribePendingAggregationRequestsLimit {
}

class DescribePendingAggregationRequestsRequest {
  public DescribePendingAggregationRequestsLimit $limit;
  public string $next_token;
}

class DescribePendingAggregationRequestsResponse {
  public string $next_token;
  public PendingAggregationRequestList $pending_aggregation_requests;
}

class DescribeRemediationConfigurationsRequest {
  public ConfigRuleNames $config_rule_names;
}

class DescribeRemediationConfigurationsResponse {
  public RemediationConfigurations $remediation_configurations;
}

class DescribeRemediationExceptionsRequest {
  public ConfigRuleName $config_rule_name;
  public Limit $limit;
  public string $next_token;
  public RemediationExceptionResourceKeys $resource_keys;
}

class DescribeRemediationExceptionsResponse {
  public string $next_token;
  public RemediationExceptions $remediation_exceptions;
}

class DescribeRemediationExecutionStatusRequest {
  public ConfigRuleName $config_rule_name;
  public Limit $limit;
  public string $next_token;
  public ResourceKeys $resource_keys;
}

class DescribeRemediationExecutionStatusResponse {
  public string $next_token;
  public RemediationExecutionStatuses $remediation_execution_statuses;
}

class DescribeRetentionConfigurationsRequest {
  public NextToken $next_token;
  public RetentionConfigurationNameList $retention_configuration_names;
}

class DescribeRetentionConfigurationsResponse {
  public NextToken $next_token;
  public RetentionConfigurationList $retention_configurations;
}

class DiscoveredResourceIdentifierList {
}

class EarlierTime {
}

class EmptiableStringWithCharLimit256 {
}

class Evaluation {
  public StringWithCharLimit256 $annotation;
  public BaseResourceId $compliance_resource_id;
  public StringWithCharLimit256 $compliance_resource_type;
  public ComplianceType $compliance_type;
  public OrderingTimestamp $ordering_timestamp;
}

class EvaluationResult {
  public StringWithCharLimit256 $annotation;
  public ComplianceType $compliance_type;
  public Date $config_rule_invoked_time;
  public EvaluationResultIdentifier $evaluation_result_identifier;
  public Date $result_recorded_time;
  public string $result_token;
}

class EvaluationResultIdentifier {
  public EvaluationResultQualifier $evaluation_result_qualifier;
  public Date $ordering_timestamp;
}

class EvaluationResultQualifier {
  public ConfigRuleName $config_rule_name;
  public BaseResourceId $resource_id;
  public StringWithCharLimit256 $resource_type;
}

class EvaluationResults {
}

class Evaluations {
}

class EventSource {
}

class ExcludedAccounts {
}

class ExecutionControls {
  public SsmControls $ssm_controls;
}

class Expression {
}

class FailedDeleteRemediationExceptionsBatch {
  public RemediationExceptionResourceKeys $failed_items;
  public string $failure_message;
}

class FailedDeleteRemediationExceptionsBatches {
}

class FailedRemediationBatch {
  public RemediationConfigurations $failed_items;
  public string $failure_message;
}

class FailedRemediationBatches {
}

class FailedRemediationExceptionBatch {
  public RemediationExceptions $failed_items;
  public string $failure_message;
}

class FailedRemediationExceptionBatches {
}

class FieldInfo {
  public FieldName $name;
}

class FieldInfoList {
}

class FieldName {
}

class GetAggregateComplianceDetailsByConfigRuleRequest {
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public ComplianceType $compliance_type;
  public ConfigRuleName $config_rule_name;
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public Limit $limit;
  public NextToken $next_token;
}

class GetAggregateComplianceDetailsByConfigRuleResponse {
  public AggregateEvaluationResultList $aggregate_evaluation_results;
  public NextToken $next_token;
}

class GetAggregateConfigRuleComplianceSummaryRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ConfigRuleComplianceSummaryFilters $filters;
  public ConfigRuleComplianceSummaryGroupKey $group_by_key;
  public GroupByAPILimit $limit;
  public NextToken $next_token;
}

class GetAggregateConfigRuleComplianceSummaryResponse {
  public AggregateComplianceCountList $aggregate_compliance_counts;
  public StringWithCharLimit256 $group_by_key;
  public NextToken $next_token;
}

class GetAggregateDiscoveredResourceCountsRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ResourceCountFilters $filters;
  public ResourceCountGroupKey $group_by_key;
  public GroupByAPILimit $limit;
  public NextToken $next_token;
}

class GetAggregateDiscoveredResourceCountsResponse {
  public StringWithCharLimit256 $group_by_key;
  public GroupedResourceCountList $grouped_resource_counts;
  public NextToken $next_token;
  public Long $total_discovered_resources;
}

class GetAggregateResourceConfigRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public AggregateResourceIdentifier $resource_identifier;
}

class GetAggregateResourceConfigResponse {
  public ConfigurationItem $configuration_item;
}

class GetComplianceDetailsByConfigRuleRequest {
  public ComplianceTypes $compliance_types;
  public StringWithCharLimit64 $config_rule_name;
  public Limit $limit;
  public NextToken $next_token;
}

class GetComplianceDetailsByConfigRuleResponse {
  public EvaluationResults $evaluation_results;
  public NextToken $next_token;
}

class GetComplianceDetailsByResourceRequest {
  public ComplianceTypes $compliance_types;
  public string $next_token;
  public BaseResourceId $resource_id;
  public StringWithCharLimit256 $resource_type;
}

class GetComplianceDetailsByResourceResponse {
  public EvaluationResults $evaluation_results;
  public string $next_token;
}

class GetComplianceSummaryByConfigRuleResponse {
  public ComplianceSummary $compliance_summary;
}

class GetComplianceSummaryByResourceTypeRequest {
  public ResourceTypes $resource_types;
}

class GetComplianceSummaryByResourceTypeResponse {
  public ComplianceSummariesByResourceType $compliance_summaries_by_resource_type;
}

class GetConformancePackComplianceDetailsLimit {
}

class GetConformancePackComplianceDetailsRequest {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackEvaluationFilters $filters;
  public GetConformancePackComplianceDetailsLimit $limit;
  public NextToken $next_token;
}

class GetConformancePackComplianceDetailsResponse {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackRuleEvaluationResultsList $conformance_pack_rule_evaluation_results;
  public NextToken $next_token;
}

class GetConformancePackComplianceSummaryRequest {
  public ConformancePackNamesToSummarizeList $conformance_pack_names;
  public PageSizeLimit $limit;
  public NextToken $next_token;
}

class GetConformancePackComplianceSummaryResponse {
  public ConformancePackComplianceSummaryList $conformance_pack_compliance_summary_list;
  public NextToken $next_token;
}

class GetDiscoveredResourceCountsRequest {
  public Limit $limit;
  public NextToken $next_token;
  public ResourceTypes $resource_types;
}

class GetDiscoveredResourceCountsResponse {
  public NextToken $next_token;
  public ResourceCounts $resource_counts;
  public Long $total_discovered_resources;
}

class GetOrganizationConfigRuleDetailedStatusRequest {
  public StatusDetailFilters $filters;
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConfigRuleName $organization_config_rule_name;
}

class GetOrganizationConfigRuleDetailedStatusResponse {
  public string $next_token;
  public OrganizationConfigRuleDetailedStatus $organization_config_rule_detailed_status;
}

class GetOrganizationConformancePackDetailedStatusRequest {
  public OrganizationResourceDetailedStatusFilters $filters;
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConformancePackName $organization_conformance_pack_name;
}

class GetOrganizationConformancePackDetailedStatusResponse {
  public string $next_token;
  public OrganizationConformancePackDetailedStatuses $organization_conformance_pack_detailed_statuses;
}

class GetResourceConfigHistoryRequest {
  public ChronologicalOrder $chronological_order;
  public EarlierTime $earlier_time;
  public LaterTime $later_time;
  public Limit $limit;
  public NextToken $next_token;
  public ResourceId $resource_id;
  public ResourceType $resource_type;
}

class GetResourceConfigHistoryResponse {
  public ConfigurationItemList $configuration_items;
  public NextToken $next_token;
}

class GroupByAPILimit {
}

class GroupedResourceCount {
  public StringWithCharLimit256 $group_name;
  public Long $resource_count;
}

class GroupedResourceCountList {
}

class IncludeGlobalResourceTypes {
}

class InsufficientDeliveryPolicyException {
}

class InsufficientPermissionsException {
}

class Integer {
}

class InvalidConfigurationRecorderNameException {
}

class InvalidDeliveryChannelNameException {
}

class InvalidExpressionException {
}

class InvalidLimitException {
}

class InvalidNextTokenException {
}

class InvalidParameterValueException {
}

class InvalidRecordingGroupException {
}

class InvalidResultTokenException {
}

class InvalidRoleException {
}

class InvalidS3KeyPrefixException {
}

class InvalidSNSTopicARNException {
}

class InvalidTimeRangeException {
}

class LastDeliveryChannelDeleteFailedException {
}

class LaterTime {
}

class Limit {
}

class LimitExceededException {
}

class ListAggregateDiscoveredResourcesRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ResourceFilters $filters;
  public Limit $limit;
  public NextToken $next_token;
  public ResourceType $resource_type;
}

class ListAggregateDiscoveredResourcesResponse {
  public NextToken $next_token;
  public DiscoveredResourceIdentifierList $resource_identifiers;
}

class ListDiscoveredResourcesRequest {
  public boolean $include_deleted_resources;
  public Limit $limit;
  public NextToken $next_token;
  public ResourceIdList $resource_ids;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
}

class ListDiscoveredResourcesResponse {
  public NextToken $next_token;
  public ResourceIdentifierList $resource_identifiers;
}

class ListTagsForResourceRequest {
  public Limit $limit;
  public NextToken $next_token;
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class Long {
}

class MaxActiveResourcesExceededException {
}

class MaxNumberOfConfigRulesExceededException {
}

class MaxNumberOfConfigurationRecordersExceededException {
}

class MaxNumberOfConformancePacksExceededException {
}

class MaxNumberOfDeliveryChannelsExceededException {
}

class MaxNumberOfOrganizationConfigRulesExceededException {
}

class MaxNumberOfOrganizationConformancePacksExceededException {
}

class MaxNumberOfRetentionConfigurationsExceededException {
}

class MaximumExecutionFrequency {
}

class MemberAccountRuleStatus {
}

class MemberAccountStatus {
  public AccountId $account_id;
  public StringWithCharLimit64 $config_rule_name;
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
  public MemberAccountRuleStatus $member_account_rule_status;
}

class MessageType {
}

class Name {
}

class NextToken {
}

class NoAvailableConfigurationRecorderException {
}

class NoAvailableDeliveryChannelException {
}

class NoAvailableOrganizationException {
}

class NoRunningConfigurationRecorderException {
}

class NoSuchBucketException {
}

class NoSuchConfigRuleException {
}

class NoSuchConfigRuleInConformancePackException {
}

class NoSuchConfigurationAggregatorException {
}

class NoSuchConfigurationRecorderException {
}

class NoSuchConformancePackException {
}

class NoSuchDeliveryChannelException {
}

class NoSuchOrganizationConfigRuleException {
}

class NoSuchOrganizationConformancePackException {
}

class NoSuchRemediationConfigurationException {
}

class NoSuchRemediationExceptionException {
}

class NoSuchRetentionConfigurationException {
}

class OrderingTimestamp {
}

class OrganizationAccessDeniedException {
}

class OrganizationAggregationSource {
  public boolean $all_aws_regions;
  public AggregatorRegionList $aws_regions;
  public string $role_arn;
}

class OrganizationAllFeaturesNotEnabledException {
}

class OrganizationConfigRule {
  public ExcludedAccounts $excluded_accounts;
  public Date $last_update_time;
  public StringWithCharLimit256 $organization_config_rule_arn;
  public OrganizationConfigRuleName $organization_config_rule_name;
  public OrganizationCustomRuleMetadata $organization_custom_rule_metadata;
  public OrganizationManagedRuleMetadata $organization_managed_rule_metadata;
}

class OrganizationConfigRuleDetailedStatus {
}

class OrganizationConfigRuleName {
}

class OrganizationConfigRuleNames {
}

class OrganizationConfigRuleStatus {
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
  public OrganizationConfigRuleName $organization_config_rule_name;
  public OrganizationRuleStatus $organization_rule_status;
}

class OrganizationConfigRuleStatuses {
}

class OrganizationConfigRuleTriggerType {
}

class OrganizationConfigRuleTriggerTypes {
}

class OrganizationConfigRules {
}

class OrganizationConformancePack {
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public ExcludedAccounts $excluded_accounts;
  public Date $last_update_time;
  public StringWithCharLimit256 $organization_conformance_pack_arn;
  public OrganizationConformancePackName $organization_conformance_pack_name;
}

class OrganizationConformancePackDetailedStatus {
  public AccountId $account_id;
  public StringWithCharLimit256 $conformance_pack_name;
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
  public OrganizationResourceDetailedStatus $status;
}

class OrganizationConformancePackDetailedStatuses {
}

class OrganizationConformancePackName {
}

class OrganizationConformancePackNames {
}

class OrganizationConformancePackStatus {
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
  public OrganizationConformancePackName $organization_conformance_pack_name;
  public OrganizationResourceStatus $status;
}

class OrganizationConformancePackStatuses {
}

class OrganizationConformancePackTemplateValidationException {
}

class OrganizationConformancePacks {
}

class OrganizationCustomRuleMetadata {
  public StringWithCharLimit256Min0 $description;
  public StringWithCharLimit2048 $input_parameters;
  public StringWithCharLimit256 $lambda_function_arn;
  public MaximumExecutionFrequency $maximum_execution_frequency;
  public OrganizationConfigRuleTriggerTypes $organization_config_rule_trigger_types;
  public StringWithCharLimit768 $resource_id_scope;
  public ResourceTypesScope $resource_types_scope;
  public StringWithCharLimit128 $tag_key_scope;
  public StringWithCharLimit256 $tag_value_scope;
}

class OrganizationManagedRuleMetadata {
  public StringWithCharLimit256Min0 $description;
  public StringWithCharLimit2048 $input_parameters;
  public MaximumExecutionFrequency $maximum_execution_frequency;
  public StringWithCharLimit768 $resource_id_scope;
  public ResourceTypesScope $resource_types_scope;
  public StringWithCharLimit256 $rule_identifier;
  public StringWithCharLimit128 $tag_key_scope;
  public StringWithCharLimit256 $tag_value_scope;
}

class OrganizationResourceDetailedStatus {
}

class OrganizationResourceDetailedStatusFilters {
  public AccountId $account_id;
  public OrganizationResourceDetailedStatus $status;
}

class OrganizationResourceStatus {
}

class OrganizationRuleStatus {
}

class OversizedConfigurationItemException {
}

class Owner {
}

class PageSizeLimit {
}

class ParameterName {
}

class ParameterValue {
}

class PendingAggregationRequest {
  public AccountId $requester_account_id;
  public AwsRegion $requester_aws_region;
}

class PendingAggregationRequestList {
}

class Percentage {
}

class PutAggregationAuthorizationRequest {
  public AccountId $authorized_account_id;
  public AwsRegion $authorized_aws_region;
  public TagsList $tags;
}

class PutAggregationAuthorizationResponse {
  public AggregationAuthorization $aggregation_authorization;
}

class PutConfigRuleRequest {
  public ConfigRule $config_rule;
  public TagsList $tags;
}

class PutConfigurationAggregatorRequest {
  public AccountAggregationSourceList $account_aggregation_sources;
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public OrganizationAggregationSource $organization_aggregation_source;
  public TagsList $tags;
}

class PutConfigurationAggregatorResponse {
  public ConfigurationAggregator $configuration_aggregator;
}

class PutConfigurationRecorderRequest {
  public ConfigurationRecorder $configuration_recorder;
}

class PutConformancePackRequest {
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public ConformancePackName $conformance_pack_name;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public TemplateBody $template_body;
  public TemplateS3Uri $template_s_3_uri;
}

class PutConformancePackResponse {
  public ConformancePackArn $conformance_pack_arn;
}

class PutDeliveryChannelRequest {
  public DeliveryChannel $delivery_channel;
}

class PutEvaluationsRequest {
  public Evaluations $evaluations;
  public string $result_token;
  public boolean $test_mode;
}

class PutEvaluationsResponse {
  public Evaluations $failed_evaluations;
}

class PutOrganizationConfigRuleRequest {
  public ExcludedAccounts $excluded_accounts;
  public OrganizationConfigRuleName $organization_config_rule_name;
  public OrganizationCustomRuleMetadata $organization_custom_rule_metadata;
  public OrganizationManagedRuleMetadata $organization_managed_rule_metadata;
}

class PutOrganizationConfigRuleResponse {
  public StringWithCharLimit256 $organization_config_rule_arn;
}

class PutOrganizationConformancePackRequest {
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public ExcludedAccounts $excluded_accounts;
  public OrganizationConformancePackName $organization_conformance_pack_name;
  public TemplateBody $template_body;
  public TemplateS3Uri $template_s_3_uri;
}

class PutOrganizationConformancePackResponse {
  public StringWithCharLimit256 $organization_conformance_pack_arn;
}

class PutRemediationConfigurationsRequest {
  public RemediationConfigurations $remediation_configurations;
}

class PutRemediationConfigurationsResponse {
  public FailedRemediationBatches $failed_batches;
}

class PutRemediationExceptionsRequest {
  public ConfigRuleName $config_rule_name;
  public Date $expiration_time;
  public StringWithCharLimit1024 $message;
  public RemediationExceptionResourceKeys $resource_keys;
}

class PutRemediationExceptionsResponse {
  public FailedRemediationExceptionBatches $failed_batches;
}

class PutResourceConfigRequest {
  public Configuration $configuration;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceTypeString $resource_type;
  public SchemaVersionId $schema_version_id;
  public Tags $tags;
}

class PutRetentionConfigurationRequest {
  public RetentionPeriodInDays $retention_period_in_days;
}

class PutRetentionConfigurationResponse {
  public RetentionConfiguration $retention_configuration;
}

class QueryInfo {
  public FieldInfoList $select_fields;
}

class RecorderName {
}

class RecorderStatus {
}

class RecordingGroup {
  public AllSupported $all_supported;
  public IncludeGlobalResourceTypes $include_global_resource_types;
  public ResourceTypeList $resource_types;
}

class ReevaluateConfigRuleNames {
}

class RelatedEvent {
}

class RelatedEventList {
}

class Relationship {
  public RelationshipName $relationship_name;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
}

class RelationshipList {
}

class RelationshipName {
}

class RemediationConfiguration {
  public StringWithCharLimit1024 $arn;
  public boolean $automatic;
  public ConfigRuleName $config_rule_name;
  public StringWithCharLimit1024 $created_by_service;
  public ExecutionControls $execution_controls;
  public AutoRemediationAttempts $maximum_automatic_attempts;
  public RemediationParameters $parameters;
  public string $resource_type;
  public AutoRemediationAttemptSeconds $retry_attempt_seconds;
  public StringWithCharLimit256 $target_id;
  public RemediationTargetType $target_type;
  public string $target_version;
}

class RemediationConfigurations {
}

class RemediationException {
  public ConfigRuleName $config_rule_name;
  public Date $expiration_time;
  public StringWithCharLimit1024 $message;
  public StringWithCharLimit1024 $resource_id;
  public StringWithCharLimit256 $resource_type;
}

class RemediationExceptionResourceKey {
  public StringWithCharLimit1024 $resource_id;
  public StringWithCharLimit256 $resource_type;
}

class RemediationExceptionResourceKeys {
}

class RemediationExceptions {
}

class RemediationExecutionState {
}

class RemediationExecutionStatus {
  public Date $invocation_time;
  public Date $last_updated_time;
  public ResourceKey $resource_key;
  public RemediationExecutionState $state;
  public RemediationExecutionSteps $step_details;
}

class RemediationExecutionStatuses {
}

class RemediationExecutionStep {
  public string $error_message;
  public string $name;
  public Date $start_time;
  public RemediationExecutionStepState $state;
  public Date $stop_time;
}

class RemediationExecutionStepState {
}

class RemediationExecutionSteps {
}

class RemediationInProgressException {
}

class RemediationParameterValue {
  public ResourceValue $resource_value;
  public StaticValue $static_value;
}

class RemediationParameters {
}

class RemediationTargetType {
}

class ResourceCount {
  public Long $count;
  public ResourceType $resource_type;
}

class ResourceCountFilters {
  public AccountId $account_id;
  public AwsRegion $region;
  public ResourceType $resource_type;
}

class ResourceCountGroupKey {
}

class ResourceCounts {
}

class ResourceCreationTime {
}

class ResourceDeletionTime {
}

class ResourceFilters {
  public AccountId $account_id;
  public AwsRegion $region;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
}

class ResourceId {
}

class ResourceIdList {
}

class ResourceIdentifier {
  public ResourceDeletionTime $resource_deletion_time;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
}

class ResourceIdentifierList {
}

class ResourceIdentifiersList {
}

class ResourceInUseException {
}

class ResourceKey {
  public ResourceId $resource_id;
  public ResourceType $resource_type;
}

class ResourceKeys {
}

class ResourceName {
}

class ResourceNotDiscoveredException {
}

class ResourceNotFoundException {
}

class ResourceType {
}

class ResourceTypeList {
}

class ResourceTypeString {
}

class ResourceTypes {
}

class ResourceTypesScope {
}

class ResourceValue {
  public ResourceValueType $value;
}

class ResourceValueType {
}

class Results {
}

class RetentionConfiguration {
  public RetentionConfigurationName $name;
  public RetentionPeriodInDays $retention_period_in_days;
}

class RetentionConfigurationList {
}

class RetentionConfigurationName {
}

class RetentionConfigurationNameList {
}

class RetentionPeriodInDays {
}

class RuleLimit {
}

class SchemaVersionId {
}

class Scope {
  public BaseResourceId $compliance_resource_id;
  public ComplianceResourceTypes $compliance_resource_types;
  public StringWithCharLimit128 $tag_key;
  public StringWithCharLimit256 $tag_value;
}

class SelectAggregateResourceConfigRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public Expression $expression;
  public Limit $limit;
  public Limit $max_results;
  public NextToken $next_token;
}

class SelectAggregateResourceConfigResponse {
  public NextToken $next_token;
  public QueryInfo $query_info;
  public Results $results;
}

class SelectResourceConfigRequest {
  public Expression $expression;
  public Limit $limit;
  public NextToken $next_token;
}

class SelectResourceConfigResponse {
  public NextToken $next_token;
  public QueryInfo $query_info;
  public Results $results;
}

class Source {
  public Owner $owner;
  public SourceDetails $source_details;
  public StringWithCharLimit256 $source_identifier;
}

class SourceDetail {
  public EventSource $event_source;
  public MaximumExecutionFrequency $maximum_execution_frequency;
  public MessageType $message_type;
}

class SourceDetails {
}

class SsmControls {
  public Percentage $concurrent_execution_rate_percentage;
  public Percentage $error_percentage;
}

class StackArn {
}

class StartConfigRulesEvaluationRequest {
  public ReevaluateConfigRuleNames $config_rule_names;
}

class StartConfigRulesEvaluationResponse {
}

class StartConfigurationRecorderRequest {
  public RecorderName $configuration_recorder_name;
}

class StartRemediationExecutionRequest {
  public ConfigRuleName $config_rule_name;
  public ResourceKeys $resource_keys;
}

class StartRemediationExecutionResponse {
  public ResourceKeys $failed_items;
  public string $failure_message;
}

class StaticParameterValues {
}

class StaticValue {
  public StaticParameterValues $values;
}

class StatusDetailFilters {
  public AccountId $account_id;
  public MemberAccountRuleStatus $member_account_rule_status;
}

class StopConfigurationRecorderRequest {
  public RecorderName $configuration_recorder_name;
}

class String {
}

class StringWithCharLimit1024 {
}

class StringWithCharLimit128 {
}

class StringWithCharLimit2048 {
}

class StringWithCharLimit256 {
}

class StringWithCharLimit256Min0 {
}

class StringWithCharLimit64 {
}

class StringWithCharLimit768 {
}

class SupplementaryConfiguration {
}

class SupplementaryConfigurationName {
}

class SupplementaryConfigurationValue {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagValue {
}

class Tags {
}

class TagsList {
}

class TemplateBody {
}

class TemplateS3Uri {
}

class TooManyTagsException {
}

class UnprocessedResourceIdentifierList {
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class ValidationException {
}

class Value {
}

class Version {
}

