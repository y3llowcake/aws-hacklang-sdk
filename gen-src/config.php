<?hh // strict
namespace slack\aws\config;

interface Config Service {
  public function BatchGetAggregateResourceConfig(BatchGetAggregateResourceConfigRequest): Awaitable<Errors\Result<BatchGetAggregateResourceConfigResponse>>;
  public function BatchGetResourceConfig(BatchGetResourceConfigRequest): Awaitable<Errors\Result<BatchGetResourceConfigResponse>>;
  public function DeleteAggregationAuthorization(DeleteAggregationAuthorizationRequest): Awaitable<Errors\Error>;
  public function DeleteConfigRule(DeleteConfigRuleRequest): Awaitable<Errors\Error>;
  public function DeleteConfigurationAggregator(DeleteConfigurationAggregatorRequest): Awaitable<Errors\Error>;
  public function DeleteConfigurationRecorder(DeleteConfigurationRecorderRequest): Awaitable<Errors\Error>;
  public function DeleteConformancePack(DeleteConformancePackRequest): Awaitable<Errors\Error>;
  public function DeleteDeliveryChannel(DeleteDeliveryChannelRequest): Awaitable<Errors\Error>;
  public function DeleteEvaluationResults(DeleteEvaluationResultsRequest): Awaitable<Errors\Result<DeleteEvaluationResultsResponse>>;
  public function DeleteOrganizationConfigRule(DeleteOrganizationConfigRuleRequest): Awaitable<Errors\Error>;
  public function DeleteOrganizationConformancePack(DeleteOrganizationConformancePackRequest): Awaitable<Errors\Error>;
  public function DeletePendingAggregationRequest(DeletePendingAggregationRequestRequest): Awaitable<Errors\Error>;
  public function DeleteRemediationConfiguration(DeleteRemediationConfigurationRequest): Awaitable<Errors\Result<DeleteRemediationConfigurationResponse>>;
  public function DeleteRemediationExceptions(DeleteRemediationExceptionsRequest): Awaitable<Errors\Result<DeleteRemediationExceptionsResponse>>;
  public function DeleteResourceConfig(DeleteResourceConfigRequest): Awaitable<Errors\Error>;
  public function DeleteRetentionConfiguration(DeleteRetentionConfigurationRequest): Awaitable<Errors\Error>;
  public function DeliverConfigSnapshot(DeliverConfigSnapshotRequest): Awaitable<Errors\Result<DeliverConfigSnapshotResponse>>;
  public function DescribeAggregateComplianceByConfigRules(DescribeAggregateComplianceByConfigRulesRequest): Awaitable<Errors\Result<DescribeAggregateComplianceByConfigRulesResponse>>;
  public function DescribeAggregationAuthorizations(DescribeAggregationAuthorizationsRequest): Awaitable<Errors\Result<DescribeAggregationAuthorizationsResponse>>;
  public function DescribeComplianceByConfigRule(DescribeComplianceByConfigRuleRequest): Awaitable<Errors\Result<DescribeComplianceByConfigRuleResponse>>;
  public function DescribeComplianceByResource(DescribeComplianceByResourceRequest): Awaitable<Errors\Result<DescribeComplianceByResourceResponse>>;
  public function DescribeConfigRuleEvaluationStatus(DescribeConfigRuleEvaluationStatusRequest): Awaitable<Errors\Result<DescribeConfigRuleEvaluationStatusResponse>>;
  public function DescribeConfigRules(DescribeConfigRulesRequest): Awaitable<Errors\Result<DescribeConfigRulesResponse>>;
  public function DescribeConfigurationAggregatorSourcesStatus(DescribeConfigurationAggregatorSourcesStatusRequest): Awaitable<Errors\Result<DescribeConfigurationAggregatorSourcesStatusResponse>>;
  public function DescribeConfigurationAggregators(DescribeConfigurationAggregatorsRequest): Awaitable<Errors\Result<DescribeConfigurationAggregatorsResponse>>;
  public function DescribeConfigurationRecorderStatus(DescribeConfigurationRecorderStatusRequest): Awaitable<Errors\Result<DescribeConfigurationRecorderStatusResponse>>;
  public function DescribeConfigurationRecorders(DescribeConfigurationRecordersRequest): Awaitable<Errors\Result<DescribeConfigurationRecordersResponse>>;
  public function DescribeConformancePackCompliance(DescribeConformancePackComplianceRequest): Awaitable<Errors\Result<DescribeConformancePackComplianceResponse>>;
  public function DescribeConformancePackStatus(DescribeConformancePackStatusRequest): Awaitable<Errors\Result<DescribeConformancePackStatusResponse>>;
  public function DescribeConformancePacks(DescribeConformancePacksRequest): Awaitable<Errors\Result<DescribeConformancePacksResponse>>;
  public function DescribeDeliveryChannelStatus(DescribeDeliveryChannelStatusRequest): Awaitable<Errors\Result<DescribeDeliveryChannelStatusResponse>>;
  public function DescribeDeliveryChannels(DescribeDeliveryChannelsRequest): Awaitable<Errors\Result<DescribeDeliveryChannelsResponse>>;
  public function DescribeOrganizationConfigRuleStatuses(DescribeOrganizationConfigRuleStatusesRequest): Awaitable<Errors\Result<DescribeOrganizationConfigRuleStatusesResponse>>;
  public function DescribeOrganizationConfigRules(DescribeOrganizationConfigRulesRequest): Awaitable<Errors\Result<DescribeOrganizationConfigRulesResponse>>;
  public function DescribeOrganizationConformancePackStatuses(DescribeOrganizationConformancePackStatusesRequest): Awaitable<Errors\Result<DescribeOrganizationConformancePackStatusesResponse>>;
  public function DescribeOrganizationConformancePacks(DescribeOrganizationConformancePacksRequest): Awaitable<Errors\Result<DescribeOrganizationConformancePacksResponse>>;
  public function DescribePendingAggregationRequests(DescribePendingAggregationRequestsRequest): Awaitable<Errors\Result<DescribePendingAggregationRequestsResponse>>;
  public function DescribeRemediationConfigurations(DescribeRemediationConfigurationsRequest): Awaitable<Errors\Result<DescribeRemediationConfigurationsResponse>>;
  public function DescribeRemediationExceptions(DescribeRemediationExceptionsRequest): Awaitable<Errors\Result<DescribeRemediationExceptionsResponse>>;
  public function DescribeRemediationExecutionStatus(DescribeRemediationExecutionStatusRequest): Awaitable<Errors\Result<DescribeRemediationExecutionStatusResponse>>;
  public function DescribeRetentionConfigurations(DescribeRetentionConfigurationsRequest): Awaitable<Errors\Result<DescribeRetentionConfigurationsResponse>>;
  public function GetAggregateComplianceDetailsByConfigRule(GetAggregateComplianceDetailsByConfigRuleRequest): Awaitable<Errors\Result<GetAggregateComplianceDetailsByConfigRuleResponse>>;
  public function GetAggregateConfigRuleComplianceSummary(GetAggregateConfigRuleComplianceSummaryRequest): Awaitable<Errors\Result<GetAggregateConfigRuleComplianceSummaryResponse>>;
  public function GetAggregateDiscoveredResourceCounts(GetAggregateDiscoveredResourceCountsRequest): Awaitable<Errors\Result<GetAggregateDiscoveredResourceCountsResponse>>;
  public function GetAggregateResourceConfig(GetAggregateResourceConfigRequest): Awaitable<Errors\Result<GetAggregateResourceConfigResponse>>;
  public function GetComplianceDetailsByConfigRule(GetComplianceDetailsByConfigRuleRequest): Awaitable<Errors\Result<GetComplianceDetailsByConfigRuleResponse>>;
  public function GetComplianceDetailsByResource(GetComplianceDetailsByResourceRequest): Awaitable<Errors\Result<GetComplianceDetailsByResourceResponse>>;
  public function GetComplianceSummaryByConfigRule(): Awaitable<Errors\Result<GetComplianceSummaryByConfigRuleResponse>>;
  public function GetComplianceSummaryByResourceType(GetComplianceSummaryByResourceTypeRequest): Awaitable<Errors\Result<GetComplianceSummaryByResourceTypeResponse>>;
  public function GetConformancePackComplianceDetails(GetConformancePackComplianceDetailsRequest): Awaitable<Errors\Result<GetConformancePackComplianceDetailsResponse>>;
  public function GetConformancePackComplianceSummary(GetConformancePackComplianceSummaryRequest): Awaitable<Errors\Result<GetConformancePackComplianceSummaryResponse>>;
  public function GetDiscoveredResourceCounts(GetDiscoveredResourceCountsRequest): Awaitable<Errors\Result<GetDiscoveredResourceCountsResponse>>;
  public function GetOrganizationConfigRuleDetailedStatus(GetOrganizationConfigRuleDetailedStatusRequest): Awaitable<Errors\Result<GetOrganizationConfigRuleDetailedStatusResponse>>;
  public function GetOrganizationConformancePackDetailedStatus(GetOrganizationConformancePackDetailedStatusRequest): Awaitable<Errors\Result<GetOrganizationConformancePackDetailedStatusResponse>>;
  public function GetResourceConfigHistory(GetResourceConfigHistoryRequest): Awaitable<Errors\Result<GetResourceConfigHistoryResponse>>;
  public function ListAggregateDiscoveredResources(ListAggregateDiscoveredResourcesRequest): Awaitable<Errors\Result<ListAggregateDiscoveredResourcesResponse>>;
  public function ListDiscoveredResources(ListDiscoveredResourcesRequest): Awaitable<Errors\Result<ListDiscoveredResourcesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutAggregationAuthorization(PutAggregationAuthorizationRequest): Awaitable<Errors\Result<PutAggregationAuthorizationResponse>>;
  public function PutConfigRule(PutConfigRuleRequest): Awaitable<Errors\Error>;
  public function PutConfigurationAggregator(PutConfigurationAggregatorRequest): Awaitable<Errors\Result<PutConfigurationAggregatorResponse>>;
  public function PutConfigurationRecorder(PutConfigurationRecorderRequest): Awaitable<Errors\Error>;
  public function PutConformancePack(PutConformancePackRequest): Awaitable<Errors\Result<PutConformancePackResponse>>;
  public function PutDeliveryChannel(PutDeliveryChannelRequest): Awaitable<Errors\Error>;
  public function PutEvaluations(PutEvaluationsRequest): Awaitable<Errors\Result<PutEvaluationsResponse>>;
  public function PutOrganizationConfigRule(PutOrganizationConfigRuleRequest): Awaitable<Errors\Result<PutOrganizationConfigRuleResponse>>;
  public function PutOrganizationConformancePack(PutOrganizationConformancePackRequest): Awaitable<Errors\Result<PutOrganizationConformancePackResponse>>;
  public function PutRemediationConfigurations(PutRemediationConfigurationsRequest): Awaitable<Errors\Result<PutRemediationConfigurationsResponse>>;
  public function PutRemediationExceptions(PutRemediationExceptionsRequest): Awaitable<Errors\Result<PutRemediationExceptionsResponse>>;
  public function PutResourceConfig(PutResourceConfigRequest): Awaitable<Errors\Error>;
  public function PutRetentionConfiguration(PutRetentionConfigurationRequest): Awaitable<Errors\Result<PutRetentionConfigurationResponse>>;
  public function SelectAggregateResourceConfig(SelectAggregateResourceConfigRequest): Awaitable<Errors\Result<SelectAggregateResourceConfigResponse>>;
  public function SelectResourceConfig(SelectResourceConfigRequest): Awaitable<Errors\Result<SelectResourceConfigResponse>>;
  public function StartConfigRulesEvaluation(StartConfigRulesEvaluationRequest): Awaitable<Errors\Result<StartConfigRulesEvaluationResponse>>;
  public function StartConfigurationRecorder(StartConfigurationRecorderRequest): Awaitable<Errors\Error>;
  public function StartRemediationExecution(StartRemediationExecutionRequest): Awaitable<Errors\Result<StartRemediationExecutionResponse>>;
  public function StopConfigurationRecorder(StopConfigurationRecorderRequest): Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
}

type ARN = string;

class AccountAggregationSource {
  public AccountAggregationSourceAccountList $account_ids;
  public boolean $all_aws_regions;
  public AggregatorRegionList $aws_regions;

  public function __construct(shape(
  ?'account_ids' => AccountAggregationSourceAccountList,
  ?'all_aws_regions' => boolean,
  ?'aws_regions' => AggregatorRegionList,
  ) $s = shape()) {
    $this->account_ids = $account_ids ?? ;
    $this->all_aws_regions = $all_aws_regions ?? ;
    $this->aws_regions = $aws_regions ?? ;
  }
}

type AccountAggregationSourceAccountList = vec<AccountId>;

type AccountAggregationSourceList = vec<AccountAggregationSource>;

type AccountId = string;

class AggregateComplianceByConfigRule {
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public Compliance $compliance;
  public ConfigRuleName $config_rule_name;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'aws_region' => AwsRegion,
  ?'compliance' => Compliance,
  ?'config_rule_name' => ConfigRuleName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->aws_region = $aws_region ?? "";
    $this->compliance = $compliance ?? null;
    $this->config_rule_name = $config_rule_name ?? "";
  }
}

type AggregateComplianceByConfigRuleList = vec<AggregateComplianceByConfigRule>;

class AggregateComplianceCount {
  public ComplianceSummary $compliance_summary;
  public StringWithCharLimit256 $group_name;

  public function __construct(shape(
  ?'compliance_summary' => ComplianceSummary,
  ?'group_name' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->compliance_summary = $compliance_summary ?? null;
    $this->group_name = $group_name ?? ;
  }
}

type AggregateComplianceCountList = vec<AggregateComplianceCount>;

class AggregateEvaluationResult {
  public AccountId $account_id;
  public StringWithCharLimit256 $annotation;
  public AwsRegion $aws_region;
  public ComplianceType $compliance_type;
  public Date $config_rule_invoked_time;
  public EvaluationResultIdentifier $evaluation_result_identifier;
  public Date $result_recorded_time;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'annotation' => StringWithCharLimit256,
  ?'aws_region' => AwsRegion,
  ?'compliance_type' => ComplianceType,
  ?'config_rule_invoked_time' => Date,
  ?'evaluation_result_identifier' => EvaluationResultIdentifier,
  ?'result_recorded_time' => Date,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->annotation = $annotation ?? "";
    $this->aws_region = $aws_region ?? "";
    $this->compliance_type = $compliance_type ?? "";
    $this->config_rule_invoked_time = $config_rule_invoked_time ?? ;
    $this->evaluation_result_identifier = $evaluation_result_identifier ?? null;
    $this->result_recorded_time = $result_recorded_time ?? ;
  }
}

type AggregateEvaluationResultList = vec<AggregateEvaluationResult>;

class AggregateResourceIdentifier {
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
  public AccountId $source_account_id;
  public AwsRegion $source_region;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ?'source_account_id' => AccountId,
  ?'source_region' => AwsRegion,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_name = $resource_name ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->source_account_id = $source_account_id ?? ;
    $this->source_region = $source_region ?? ;
  }
}

class AggregatedSourceStatus {
  public AwsRegion $aws_region;
  public string $last_error_code;
  public string $last_error_message;
  public AggregatedSourceStatusType $last_update_status;
  public Date $last_update_time;
  public string $source_id;
  public AggregatedSourceType $source_type;

  public function __construct(shape(
  ?'aws_region' => AwsRegion,
  ?'last_error_code' => string,
  ?'last_error_message' => string,
  ?'last_update_status' => AggregatedSourceStatusType,
  ?'last_update_time' => Date,
  ?'source_id' => string,
  ?'source_type' => AggregatedSourceType,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->last_error_code = $last_error_code ?? ;
    $this->last_error_message = $last_error_message ?? ;
    $this->last_update_status = $last_update_status ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->source_id = $source_id ?? ;
    $this->source_type = $source_type ?? ;
  }
}

type AggregatedSourceStatusList = vec<AggregatedSourceStatus>;

type AggregatedSourceStatusType = string;

type AggregatedSourceStatusTypeList = vec<AggregatedSourceStatusType>;

type AggregatedSourceType = string;

class AggregationAuthorization {
  public string $aggregation_authorization_arn;
  public AccountId $authorized_account_id;
  public AwsRegion $authorized_aws_region;
  public Date $creation_time;

  public function __construct(shape(
  ?'aggregation_authorization_arn' => string,
  ?'authorized_account_id' => AccountId,
  ?'authorized_aws_region' => AwsRegion,
  ?'creation_time' => Date,
  ) $s = shape()) {
    $this->aggregation_authorization_arn = $aggregation_authorization_arn ?? ;
    $this->authorized_account_id = $authorized_account_id ?? ;
    $this->authorized_aws_region = $authorized_aws_region ?? ;
    $this->creation_time = $creation_time ?? ;
  }
}

type AggregationAuthorizationList = vec<AggregationAuthorization>;

type AggregatorRegionList = vec<String>;

type AllSupported = bool;

type AmazonResourceName = string;

type Annotation = string;

type AutoRemediationAttemptSeconds = int;

type AutoRemediationAttempts = int;

type AvailabilityZone = string;

type AwsRegion = string;

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

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'arn' => ARN,
  ?'availability_zone' => AvailabilityZone,
  ?'aws_region' => AwsRegion,
  ?'configuration' => Configuration,
  ?'configuration_item_capture_time' => ConfigurationItemCaptureTime,
  ?'configuration_item_status' => ConfigurationItemStatus,
  ?'configuration_state_id' => ConfigurationStateId,
  ?'resource_creation_time' => ResourceCreationTime,
  ?'resource_id' => ResourceId,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ?'supplementary_configuration' => SupplementaryConfiguration,
  ?'version' => Version,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->arn = $arn ?? ;
    $this->availability_zone = $availability_zone ?? ;
    $this->aws_region = $aws_region ?? ;
    $this->configuration = $configuration ?? ;
    $this->configuration_item_capture_time = $configuration_item_capture_time ?? ;
    $this->configuration_item_status = $configuration_item_status ?? ;
    $this->configuration_state_id = $configuration_state_id ?? ;
    $this->resource_creation_time = $resource_creation_time ?? ;
    $this->resource_id = $resource_id ?? ;
    $this->resource_name = $resource_name ?? ;
    $this->resource_type = $resource_type ?? ;
    $this->supplementary_configuration = $supplementary_configuration ?? ;
    $this->version = $version ?? ;
  }
}

type BaseConfigurationItems = vec<BaseConfigurationItem>;

type BaseResourceId = string;

class BatchGetAggregateResourceConfigRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ResourceIdentifiersList $resource_identifiers;

  public function __construct(shape(
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'resource_identifiers' => ResourceIdentifiersList,
  ) $s = shape()) {
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->resource_identifiers = $resource_identifiers ?? ;
  }
}

class BatchGetAggregateResourceConfigResponse {
  public BaseConfigurationItems $base_configuration_items;
  public UnprocessedResourceIdentifierList $unprocessed_resource_identifiers;

  public function __construct(shape(
  ?'base_configuration_items' => BaseConfigurationItems,
  ?'unprocessed_resource_identifiers' => UnprocessedResourceIdentifierList,
  ) $s = shape()) {
    $this->base_configuration_items = $base_configuration_items ?? [];
    $this->unprocessed_resource_identifiers = $unprocessed_resource_identifiers ?? ;
  }
}

class BatchGetResourceConfigRequest {
  public ResourceKeys $resource_keys;

  public function __construct(shape(
  ?'resource_keys' => ResourceKeys,
  ) $s = shape()) {
    $this->resource_keys = $resource_keys ?? ;
  }
}

class BatchGetResourceConfigResponse {
  public BaseConfigurationItems $base_configuration_items;
  public ResourceKeys $unprocessed_resource_keys;

  public function __construct(shape(
  ?'base_configuration_items' => BaseConfigurationItems,
  ?'unprocessed_resource_keys' => ResourceKeys,
  ) $s = shape()) {
    $this->base_configuration_items = $base_configuration_items ?? ;
    $this->unprocessed_resource_keys = $unprocessed_resource_keys ?? ;
  }
}

type Boolean = bool;

type ChannelName = string;

type ChronologicalOrder = string;

class Compliance {
  public ComplianceContributorCount $compliance_contributor_count;
  public ComplianceType $compliance_type;

  public function __construct(shape(
  ?'compliance_contributor_count' => ComplianceContributorCount,
  ?'compliance_type' => ComplianceType,
  ) $s = shape()) {
    $this->compliance_contributor_count = $compliance_contributor_count ?? null;
    $this->compliance_type = $compliance_type ?? "";
  }
}

class ComplianceByConfigRule {
  public Compliance $compliance;
  public StringWithCharLimit64 $config_rule_name;

  public function __construct(shape(
  ?'compliance' => Compliance,
  ?'config_rule_name' => StringWithCharLimit64,
  ) $s = shape()) {
    $this->compliance = $compliance ?? null;
    $this->config_rule_name = $config_rule_name ?? "";
  }
}

type ComplianceByConfigRules = vec<ComplianceByConfigRule>;

class ComplianceByResource {
  public Compliance $compliance;
  public BaseResourceId $resource_id;
  public StringWithCharLimit256 $resource_type;

  public function __construct(shape(
  ?'compliance' => Compliance,
  ?'resource_id' => BaseResourceId,
  ?'resource_type' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->compliance = $compliance ?? null;
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type ComplianceByResources = vec<ComplianceByResource>;

class ComplianceContributorCount {
  public boolean $cap_exceeded;
  public int $capped_count;

  public function __construct(shape(
  ?'cap_exceeded' => boolean,
  ?'capped_count' => int,
  ) $s = shape()) {
    $this->cap_exceeded = $cap_exceeded ?? ;
    $this->capped_count = $capped_count ?? ;
  }
}

type ComplianceResourceTypes = vec<StringWithCharLimit256>;

type ComplianceSummariesByResourceType = vec<ComplianceSummaryByResourceType>;

class ComplianceSummary {
  public Date $compliance_summary_timestamp;
  public ComplianceContributorCount $compliant_resource_count;
  public ComplianceContributorCount $non_compliant_resource_count;

  public function __construct(shape(
  ?'compliance_summary_timestamp' => Date,
  ?'compliant_resource_count' => ComplianceContributorCount,
  ?'non_compliant_resource_count' => ComplianceContributorCount,
  ) $s = shape()) {
    $this->compliance_summary_timestamp = $compliance_summary_timestamp ?? ;
    $this->compliant_resource_count = $compliant_resource_count ?? ;
    $this->non_compliant_resource_count = $non_compliant_resource_count ?? ;
  }
}

class ComplianceSummaryByResourceType {
  public ComplianceSummary $compliance_summary;
  public StringWithCharLimit256 $resource_type;

  public function __construct(shape(
  ?'compliance_summary' => ComplianceSummary,
  ?'resource_type' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->compliance_summary = $compliance_summary ?? null;
    $this->resource_type = $resource_type ?? "";
  }
}

type ComplianceType = string;

type ComplianceTypes = vec<ComplianceType>;

class ConfigExportDeliveryInfo {
  public Date $last_attempt_time;
  public string $last_error_code;
  public string $last_error_message;
  public DeliveryStatus $last_status;
  public Date $last_successful_time;
  public Date $next_delivery_time;

  public function __construct(shape(
  ?'last_attempt_time' => Date,
  ?'last_error_code' => string,
  ?'last_error_message' => string,
  ?'last_status' => DeliveryStatus,
  ?'last_successful_time' => Date,
  ?'next_delivery_time' => Date,
  ) $s = shape()) {
    $this->last_attempt_time = $last_attempt_time ?? ;
    $this->last_error_code = $last_error_code ?? ;
    $this->last_error_message = $last_error_message ?? ;
    $this->last_status = $last_status ?? ;
    $this->last_successful_time = $last_successful_time ?? ;
    $this->next_delivery_time = $next_delivery_time ?? ;
  }
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

  public function __construct(shape(
  ?'config_rule_arn' => StringWithCharLimit256,
  ?'config_rule_id' => StringWithCharLimit64,
  ?'config_rule_name' => ConfigRuleName,
  ?'config_rule_state' => ConfigRuleState,
  ?'created_by' => StringWithCharLimit256,
  ?'description' => EmptiableStringWithCharLimit256,
  ?'input_parameters' => StringWithCharLimit1024,
  ?'maximum_execution_frequency' => MaximumExecutionFrequency,
  ?'scope' => Scope,
  ?'source' => Source,
  ) $s = shape()) {
    $this->config_rule_arn = $config_rule_arn ?? ;
    $this->config_rule_id = $config_rule_id ?? ;
    $this->config_rule_name = $config_rule_name ?? "";
    $this->config_rule_state = $config_rule_state ?? "";
    $this->created_by = $created_by ?? ;
    $this->description = $description ?? ;
    $this->input_parameters = $input_parameters ?? ;
    $this->maximum_execution_frequency = $maximum_execution_frequency ?? "";
    $this->scope = $scope ?? null;
    $this->source = $source ?? null;
  }
}

class ConfigRuleComplianceFilters {
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public ComplianceType $compliance_type;
  public ConfigRuleName $config_rule_name;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'aws_region' => AwsRegion,
  ?'compliance_type' => ComplianceType,
  ?'config_rule_name' => ConfigRuleName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->aws_region = $aws_region ?? "";
    $this->compliance_type = $compliance_type ?? "";
    $this->config_rule_name = $config_rule_name ?? "";
  }
}

class ConfigRuleComplianceSummaryFilters {
  public AccountId $account_id;
  public AwsRegion $aws_region;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'aws_region' => AwsRegion,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->aws_region = $aws_region ?? "";
  }
}

type ConfigRuleComplianceSummaryGroupKey = string;

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

  public function __construct(shape(
  ?'config_rule_arn' => string,
  ?'config_rule_id' => string,
  ?'config_rule_name' => ConfigRuleName,
  ?'first_activated_time' => Date,
  ?'first_evaluation_started' => boolean,
  ?'last_deactivated_time' => Date,
  ?'last_error_code' => string,
  ?'last_error_message' => string,
  ?'last_failed_evaluation_time' => Date,
  ?'last_failed_invocation_time' => Date,
  ?'last_successful_evaluation_time' => Date,
  ?'last_successful_invocation_time' => Date,
  ) $s = shape()) {
    $this->config_rule_arn = $config_rule_arn ?? ;
    $this->config_rule_id = $config_rule_id ?? ;
    $this->config_rule_name = $config_rule_name ?? "";
    $this->first_activated_time = $first_activated_time ?? ;
    $this->first_evaluation_started = $first_evaluation_started ?? ;
    $this->last_deactivated_time = $last_deactivated_time ?? ;
    $this->last_error_code = $last_error_code ?? ;
    $this->last_error_message = $last_error_message ?? ;
    $this->last_failed_evaluation_time = $last_failed_evaluation_time ?? ;
    $this->last_failed_invocation_time = $last_failed_invocation_time ?? ;
    $this->last_successful_evaluation_time = $last_successful_evaluation_time ?? ;
    $this->last_successful_invocation_time = $last_successful_invocation_time ?? ;
  }
}

type ConfigRuleEvaluationStatusList = vec<ConfigRuleEvaluationStatus>;

type ConfigRuleName = string;

type ConfigRuleNames = vec<ConfigRuleName>;

type ConfigRuleState = string;

type ConfigRules = vec<ConfigRule>;

class ConfigSnapshotDeliveryProperties {
  public MaximumExecutionFrequency $delivery_frequency;

  public function __construct(shape(
  ?'delivery_frequency' => MaximumExecutionFrequency,
  ) $s = shape()) {
    $this->delivery_frequency = $delivery_frequency ?? ;
  }
}

class ConfigStreamDeliveryInfo {
  public string $last_error_code;
  public string $last_error_message;
  public DeliveryStatus $last_status;
  public Date $last_status_change_time;

  public function __construct(shape(
  ?'last_error_code' => string,
  ?'last_error_message' => string,
  ?'last_status' => DeliveryStatus,
  ?'last_status_change_time' => Date,
  ) $s = shape()) {
    $this->last_error_code = $last_error_code ?? ;
    $this->last_error_message = $last_error_message ?? ;
    $this->last_status = $last_status ?? ;
    $this->last_status_change_time = $last_status_change_time ?? ;
  }
}

type Configuration = string;

class ConfigurationAggregator {
  public AccountAggregationSourceList $account_aggregation_sources;
  public ConfigurationAggregatorArn $configuration_aggregator_arn;
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public Date $creation_time;
  public Date $last_updated_time;
  public OrganizationAggregationSource $organization_aggregation_source;

  public function __construct(shape(
  ?'account_aggregation_sources' => AccountAggregationSourceList,
  ?'configuration_aggregator_arn' => ConfigurationAggregatorArn,
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'creation_time' => Date,
  ?'last_updated_time' => Date,
  ?'organization_aggregation_source' => OrganizationAggregationSource,
  ) $s = shape()) {
    $this->account_aggregation_sources = $account_aggregation_sources ?? ;
    $this->configuration_aggregator_arn = $configuration_aggregator_arn ?? "";
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->creation_time = $creation_time ?? ;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->organization_aggregation_source = $organization_aggregation_source ?? null;
  }
}

type ConfigurationAggregatorArn = string;

type ConfigurationAggregatorList = vec<ConfigurationAggregator>;

type ConfigurationAggregatorName = string;

type ConfigurationAggregatorNameList = vec<ConfigurationAggregatorName>;

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

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'arn' => ARN,
  ?'availability_zone' => AvailabilityZone,
  ?'aws_region' => AwsRegion,
  ?'configuration' => Configuration,
  ?'configuration_item_capture_time' => ConfigurationItemCaptureTime,
  ?'configuration_item_md_5_hash' => ConfigurationItemMD5Hash,
  ?'configuration_item_status' => ConfigurationItemStatus,
  ?'configuration_state_id' => ConfigurationStateId,
  ?'related_events' => RelatedEventList,
  ?'relationships' => RelationshipList,
  ?'resource_creation_time' => ResourceCreationTime,
  ?'resource_id' => ResourceId,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ?'supplementary_configuration' => SupplementaryConfiguration,
  ?'tags' => Tags,
  ?'version' => Version,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->arn = $arn ?? ;
    $this->availability_zone = $availability_zone ?? ;
    $this->aws_region = $aws_region ?? ;
    $this->configuration = $configuration ?? ;
    $this->configuration_item_capture_time = $configuration_item_capture_time ?? ;
    $this->configuration_item_md_5_hash = $configuration_item_md_5_hash ?? ;
    $this->configuration_item_status = $configuration_item_status ?? ;
    $this->configuration_state_id = $configuration_state_id ?? ;
    $this->related_events = $related_events ?? ;
    $this->relationships = $relationships ?? ;
    $this->resource_creation_time = $resource_creation_time ?? ;
    $this->resource_id = $resource_id ?? ;
    $this->resource_name = $resource_name ?? ;
    $this->resource_type = $resource_type ?? ;
    $this->supplementary_configuration = $supplementary_configuration ?? ;
    $this->tags = $tags ?? ;
    $this->version = $version ?? ;
  }
}

type ConfigurationItemCaptureTime = int;

type ConfigurationItemList = vec<ConfigurationItem>;

type ConfigurationItemMD5Hash = string;

type ConfigurationItemStatus = string;

class ConfigurationRecorder {
  public RecorderName $name;
  public RecordingGroup $recording_group;
  public string $role_arn;

  public function __construct(shape(
  ?'name' => RecorderName,
  ?'recording_group' => RecordingGroup,
  ?'role_arn' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->recording_group = $recording_group ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type ConfigurationRecorderList = vec<ConfigurationRecorder>;

type ConfigurationRecorderNameList = vec<RecorderName>;

class ConfigurationRecorderStatus {
  public string $last_error_code;
  public string $last_error_message;
  public Date $last_start_time;
  public RecorderStatus $last_status;
  public Date $last_status_change_time;
  public Date $last_stop_time;
  public string $name;
  public boolean $recording;

  public function __construct(shape(
  ?'last_error_code' => string,
  ?'last_error_message' => string,
  ?'last_start_time' => Date,
  ?'last_status' => RecorderStatus,
  ?'last_status_change_time' => Date,
  ?'last_stop_time' => Date,
  ?'name' => string,
  ?'recording' => boolean,
  ) $s = shape()) {
    $this->last_error_code = $last_error_code ?? ;
    $this->last_error_message = $last_error_message ?? ;
    $this->last_start_time = $last_start_time ?? ;
    $this->last_status = $last_status ?? ;
    $this->last_status_change_time = $last_status_change_time ?? ;
    $this->last_stop_time = $last_stop_time ?? ;
    $this->name = $name ?? ;
    $this->recording = $recording ?? ;
  }
}

type ConfigurationRecorderStatusList = vec<ConfigurationRecorderStatus>;

type ConfigurationStateId = string;

type ConformancePackArn = string;

class ConformancePackComplianceFilters {
  public ConformancePackComplianceType $compliance_type;
  public ConformancePackConfigRuleNames $config_rule_names;

  public function __construct(shape(
  ?'compliance_type' => ConformancePackComplianceType,
  ?'config_rule_names' => ConformancePackConfigRuleNames,
  ) $s = shape()) {
    $this->compliance_type = $compliance_type ?? "";
    $this->config_rule_names = $config_rule_names ?? [];
  }
}

type ConformancePackComplianceResourceIds = vec<StringWithCharLimit256>;

class ConformancePackComplianceSummary {
  public ConformancePackComplianceType $conformance_pack_compliance_status;
  public ConformancePackName $conformance_pack_name;

  public function __construct(shape(
  ?'conformance_pack_compliance_status' => ConformancePackComplianceType,
  ?'conformance_pack_name' => ConformancePackName,
  ) $s = shape()) {
    $this->conformance_pack_compliance_status = $conformance_pack_compliance_status ?? ;
    $this->conformance_pack_name = $conformance_pack_name ?? "";
  }
}

type ConformancePackComplianceSummaryList = vec<ConformancePackComplianceSummary>;

type ConformancePackComplianceType = string;

type ConformancePackConfigRuleNames = vec<StringWithCharLimit64>;

class ConformancePackDetail {
  public ConformancePackArn $conformance_pack_arn;
  public ConformancePackId $conformance_pack_id;
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public ConformancePackName $conformance_pack_name;
  public StringWithCharLimit256 $created_by;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public Date $last_update_requested_time;

  public function __construct(shape(
  ?'conformance_pack_arn' => ConformancePackArn,
  ?'conformance_pack_id' => ConformancePackId,
  ?'conformance_pack_input_parameters' => ConformancePackInputParameters,
  ?'conformance_pack_name' => ConformancePackName,
  ?'created_by' => StringWithCharLimit256,
  ?'delivery_s_3_bucket' => DeliveryS3Bucket,
  ?'delivery_s_3_key_prefix' => DeliveryS3KeyPrefix,
  ?'last_update_requested_time' => Date,
  ) $s = shape()) {
    $this->conformance_pack_arn = $conformance_pack_arn ?? "";
    $this->conformance_pack_id = $conformance_pack_id ?? "";
    $this->conformance_pack_input_parameters = $conformance_pack_input_parameters ?? [];
    $this->conformance_pack_name = $conformance_pack_name ?? "";
    $this->created_by = $created_by ?? ;
    $this->delivery_s_3_bucket = $delivery_s_3_bucket ?? "";
    $this->delivery_s_3_key_prefix = $delivery_s_3_key_prefix ?? "";
    $this->last_update_requested_time = $last_update_requested_time ?? ;
  }
}

type ConformancePackDetailList = vec<ConformancePackDetail>;

class ConformancePackEvaluationFilters {
  public ConformancePackComplianceType $compliance_type;
  public ConformancePackConfigRuleNames $config_rule_names;
  public ConformancePackComplianceResourceIds $resource_ids;
  public StringWithCharLimit256 $resource_type;

  public function __construct(shape(
  ?'compliance_type' => ConformancePackComplianceType,
  ?'config_rule_names' => ConformancePackConfigRuleNames,
  ?'resource_ids' => ConformancePackComplianceResourceIds,
  ?'resource_type' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->compliance_type = $compliance_type ?? "";
    $this->config_rule_names = $config_rule_names ?? [];
    $this->resource_ids = $resource_ids ?? ;
    $this->resource_type = $resource_type ?? "";
  }
}

class ConformancePackEvaluationResult {
  public Annotation $annotation;
  public ConformancePackComplianceType $compliance_type;
  public Date $config_rule_invoked_time;
  public EvaluationResultIdentifier $evaluation_result_identifier;
  public Date $result_recorded_time;

  public function __construct(shape(
  ?'annotation' => Annotation,
  ?'compliance_type' => ConformancePackComplianceType,
  ?'config_rule_invoked_time' => Date,
  ?'evaluation_result_identifier' => EvaluationResultIdentifier,
  ?'result_recorded_time' => Date,
  ) $s = shape()) {
    $this->annotation = $annotation ?? "";
    $this->compliance_type = $compliance_type ?? "";
    $this->config_rule_invoked_time = $config_rule_invoked_time ?? ;
    $this->evaluation_result_identifier = $evaluation_result_identifier ?? null;
    $this->result_recorded_time = $result_recorded_time ?? ;
  }
}

type ConformancePackId = string;

class ConformancePackInputParameter {
  public ParameterName $parameter_name;
  public ParameterValue $parameter_value;

  public function __construct(shape(
  ?'parameter_name' => ParameterName,
  ?'parameter_value' => ParameterValue,
  ) $s = shape()) {
    $this->parameter_name = $parameter_name ?? "";
    $this->parameter_value = $parameter_value ?? "";
  }
}

type ConformancePackInputParameters = vec<ConformancePackInputParameter>;

type ConformancePackName = string;

type ConformancePackNamesList = vec<ConformancePackName>;

type ConformancePackNamesToSummarizeList = vec<ConformancePackName>;

class ConformancePackRuleCompliance {
  public ConformancePackComplianceType $compliance_type;
  public ConfigRuleName $config_rule_name;

  public function __construct(shape(
  ?'compliance_type' => ConformancePackComplianceType,
  ?'config_rule_name' => ConfigRuleName,
  ) $s = shape()) {
    $this->compliance_type = $compliance_type ?? "";
    $this->config_rule_name = $config_rule_name ?? "";
  }
}

type ConformancePackRuleComplianceList = vec<ConformancePackRuleCompliance>;

type ConformancePackRuleEvaluationResultsList = vec<ConformancePackEvaluationResult>;

type ConformancePackState = string;

class ConformancePackStatusDetail {
  public ConformancePackArn $conformance_pack_arn;
  public ConformancePackId $conformance_pack_id;
  public ConformancePackName $conformance_pack_name;
  public ConformancePackState $conformance_pack_state;
  public ConformancePackStatusReason $conformance_pack_status_reason;
  public Date $last_update_completed_time;
  public Date $last_update_requested_time;
  public StackArn $stack_arn;

  public function __construct(shape(
  ?'conformance_pack_arn' => ConformancePackArn,
  ?'conformance_pack_id' => ConformancePackId,
  ?'conformance_pack_name' => ConformancePackName,
  ?'conformance_pack_state' => ConformancePackState,
  ?'conformance_pack_status_reason' => ConformancePackStatusReason,
  ?'last_update_completed_time' => Date,
  ?'last_update_requested_time' => Date,
  ?'stack_arn' => StackArn,
  ) $s = shape()) {
    $this->conformance_pack_arn = $conformance_pack_arn ?? "";
    $this->conformance_pack_id = $conformance_pack_id ?? "";
    $this->conformance_pack_name = $conformance_pack_name ?? "";
    $this->conformance_pack_state = $conformance_pack_state ?? "";
    $this->conformance_pack_status_reason = $conformance_pack_status_reason ?? "";
    $this->last_update_completed_time = $last_update_completed_time ?? ;
    $this->last_update_requested_time = $last_update_requested_time ?? ;
    $this->stack_arn = $stack_arn ?? "";
  }
}

type ConformancePackStatusDetailsList = vec<ConformancePackStatusDetail>;

type ConformancePackStatusReason = string;

class ConformancePackTemplateValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CosmosPageLimit = int;

type Date = int;

class DeleteAggregationAuthorizationRequest {
  public AccountId $authorized_account_id;
  public AwsRegion $authorized_aws_region;

  public function __construct(shape(
  ?'authorized_account_id' => AccountId,
  ?'authorized_aws_region' => AwsRegion,
  ) $s = shape()) {
    $this->authorized_account_id = $authorized_account_id ?? ;
    $this->authorized_aws_region = $authorized_aws_region ?? ;
  }
}

class DeleteConfigRuleRequest {
  public ConfigRuleName $config_rule_name;

  public function __construct(shape(
  ?'config_rule_name' => ConfigRuleName,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
  }
}

class DeleteConfigurationAggregatorRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;

  public function __construct(shape(
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ) $s = shape()) {
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
  }
}

class DeleteConfigurationRecorderRequest {
  public RecorderName $configuration_recorder_name;

  public function __construct(shape(
  ?'configuration_recorder_name' => RecorderName,
  ) $s = shape()) {
    $this->configuration_recorder_name = $configuration_recorder_name ?? ;
  }
}

class DeleteConformancePackRequest {
  public ConformancePackName $conformance_pack_name;

  public function __construct(shape(
  ?'conformance_pack_name' => ConformancePackName,
  ) $s = shape()) {
    $this->conformance_pack_name = $conformance_pack_name ?? "";
  }
}

class DeleteDeliveryChannelRequest {
  public ChannelName $delivery_channel_name;

  public function __construct(shape(
  ?'delivery_channel_name' => ChannelName,
  ) $s = shape()) {
    $this->delivery_channel_name = $delivery_channel_name ?? ;
  }
}

class DeleteEvaluationResultsRequest {
  public StringWithCharLimit64 $config_rule_name;

  public function __construct(shape(
  ?'config_rule_name' => StringWithCharLimit64,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
  }
}

class DeleteEvaluationResultsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteOrganizationConfigRuleRequest {
  public OrganizationConfigRuleName $organization_config_rule_name;

  public function __construct(shape(
  ?'organization_config_rule_name' => OrganizationConfigRuleName,
  ) $s = shape()) {
    $this->organization_config_rule_name = $organization_config_rule_name ?? "";
  }
}

class DeleteOrganizationConformancePackRequest {
  public OrganizationConformancePackName $organization_conformance_pack_name;

  public function __construct(shape(
  ?'organization_conformance_pack_name' => OrganizationConformancePackName,
  ) $s = shape()) {
    $this->organization_conformance_pack_name = $organization_conformance_pack_name ?? "";
  }
}

class DeletePendingAggregationRequestRequest {
  public AccountId $requester_account_id;
  public AwsRegion $requester_aws_region;

  public function __construct(shape(
  ?'requester_account_id' => AccountId,
  ?'requester_aws_region' => AwsRegion,
  ) $s = shape()) {
    $this->requester_account_id = $requester_account_id ?? ;
    $this->requester_aws_region = $requester_aws_region ?? ;
  }
}

class DeleteRemediationConfigurationRequest {
  public ConfigRuleName $config_rule_name;
  public string $resource_type;

  public function __construct(shape(
  ?'config_rule_name' => ConfigRuleName,
  ?'resource_type' => string,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class DeleteRemediationConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRemediationExceptionsRequest {
  public ConfigRuleName $config_rule_name;
  public RemediationExceptionResourceKeys $resource_keys;

  public function __construct(shape(
  ?'config_rule_name' => ConfigRuleName,
  ?'resource_keys' => RemediationExceptionResourceKeys,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
    $this->resource_keys = $resource_keys ?? [];
  }
}

class DeleteRemediationExceptionsResponse {
  public FailedDeleteRemediationExceptionsBatches $failed_batches;

  public function __construct(shape(
  ?'failed_batches' => FailedDeleteRemediationExceptionsBatches,
  ) $s = shape()) {
    $this->failed_batches = $failed_batches ?? ;
  }
}

class DeleteResourceConfigRequest {
  public ResourceId $resource_id;
  public ResourceTypeString $resource_type;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'resource_type' => ResourceTypeString,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class DeleteRetentionConfigurationRequest {
  public RetentionConfigurationName $retention_configuration_name;

  public function __construct(shape(
  ?'retention_configuration_name' => RetentionConfigurationName,
  ) $s = shape()) {
    $this->retention_configuration_name = $retention_configuration_name ?? "";
  }
}

class DeliverConfigSnapshotRequest {
  public ChannelName $delivery_channel_name;

  public function __construct(shape(
  ?'delivery_channel_name' => ChannelName,
  ) $s = shape()) {
    $this->delivery_channel_name = $delivery_channel_name ?? ;
  }
}

class DeliverConfigSnapshotResponse {
  public string $config_snapshot_id;

  public function __construct(shape(
  ?'config_snapshot_id' => string,
  ) $s = shape()) {
    $this->config_snapshot_id = $config_snapshot_id ?? ;
  }
}

class DeliveryChannel {
  public ConfigSnapshotDeliveryProperties $config_snapshot_delivery_properties;
  public ChannelName $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public string $sns_topic_arn;

  public function __construct(shape(
  ?'config_snapshot_delivery_properties' => ConfigSnapshotDeliveryProperties,
  ?'name' => ChannelName,
  ?'s_3_bucket_name' => string,
  ?'s_3_key_prefix' => string,
  ?'sns_topic_arn' => string,
  ) $s = shape()) {
    $this->config_snapshot_delivery_properties = $config_snapshot_delivery_properties ?? ;
    $this->name = $name ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? ;
    $this->sns_topic_arn = $sns_topic_arn ?? ;
  }
}

type DeliveryChannelList = vec<DeliveryChannel>;

type DeliveryChannelNameList = vec<ChannelName>;

class DeliveryChannelStatus {
  public ConfigExportDeliveryInfo $config_history_delivery_info;
  public ConfigExportDeliveryInfo $config_snapshot_delivery_info;
  public ConfigStreamDeliveryInfo $config_stream_delivery_info;
  public string $name;

  public function __construct(shape(
  ?'config_history_delivery_info' => ConfigExportDeliveryInfo,
  ?'config_snapshot_delivery_info' => ConfigExportDeliveryInfo,
  ?'config_stream_delivery_info' => ConfigStreamDeliveryInfo,
  ?'name' => string,
  ) $s = shape()) {
    $this->config_history_delivery_info = $config_history_delivery_info ?? ;
    $this->config_snapshot_delivery_info = $config_snapshot_delivery_info ?? ;
    $this->config_stream_delivery_info = $config_stream_delivery_info ?? ;
    $this->name = $name ?? ;
  }
}

type DeliveryChannelStatusList = vec<DeliveryChannelStatus>;

type DeliveryS3Bucket = string;

type DeliveryS3KeyPrefix = string;

type DeliveryStatus = string;

class DescribeAggregateComplianceByConfigRulesRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ConfigRuleComplianceFilters $filters;
  public GroupByAPILimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'filters' => ConfigRuleComplianceFilters,
  ?'limit' => GroupByAPILimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->filters = $filters ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAggregateComplianceByConfigRulesResponse {
  public AggregateComplianceByConfigRuleList $aggregate_compliance_by_config_rules;
  public NextToken $next_token;

  public function __construct(shape(
  ?'aggregate_compliance_by_config_rules' => AggregateComplianceByConfigRuleList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->aggregate_compliance_by_config_rules = $aggregate_compliance_by_config_rules ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAggregationAuthorizationsRequest {
  public Limit $limit;
  public string $next_token;

  public function __construct(shape(
  ?'limit' => Limit,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAggregationAuthorizationsResponse {
  public AggregationAuthorizationList $aggregation_authorizations;
  public string $next_token;

  public function __construct(shape(
  ?'aggregation_authorizations' => AggregationAuthorizationList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aggregation_authorizations = $aggregation_authorizations ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeComplianceByConfigRuleRequest {
  public ComplianceTypes $compliance_types;
  public ConfigRuleNames $config_rule_names;
  public string $next_token;

  public function __construct(shape(
  ?'compliance_types' => ComplianceTypes,
  ?'config_rule_names' => ConfigRuleNames,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->compliance_types = $compliance_types ?? [];
    $this->config_rule_names = $config_rule_names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeComplianceByConfigRuleResponse {
  public ComplianceByConfigRules $compliance_by_config_rules;
  public string $next_token;

  public function __construct(shape(
  ?'compliance_by_config_rules' => ComplianceByConfigRules,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->compliance_by_config_rules = $compliance_by_config_rules ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeComplianceByResourceRequest {
  public ComplianceTypes $compliance_types;
  public Limit $limit;
  public NextToken $next_token;
  public BaseResourceId $resource_id;
  public StringWithCharLimit256 $resource_type;

  public function __construct(shape(
  ?'compliance_types' => ComplianceTypes,
  ?'limit' => Limit,
  ?'next_token' => NextToken,
  ?'resource_id' => BaseResourceId,
  ?'resource_type' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->compliance_types = $compliance_types ?? [];
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class DescribeComplianceByResourceResponse {
  public ComplianceByResources $compliance_by_resources;
  public NextToken $next_token;

  public function __construct(shape(
  ?'compliance_by_resources' => ComplianceByResources,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->compliance_by_resources = $compliance_by_resources ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConfigRuleEvaluationStatusRequest {
  public ConfigRuleNames $config_rule_names;
  public RuleLimit $limit;
  public string $next_token;

  public function __construct(shape(
  ?'config_rule_names' => ConfigRuleNames,
  ?'limit' => RuleLimit,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->config_rule_names = $config_rule_names ?? [];
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConfigRuleEvaluationStatusResponse {
  public ConfigRuleEvaluationStatusList $config_rules_evaluation_status;
  public string $next_token;

  public function __construct(shape(
  ?'config_rules_evaluation_status' => ConfigRuleEvaluationStatusList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->config_rules_evaluation_status = $config_rules_evaluation_status ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConfigRulesRequest {
  public ConfigRuleNames $config_rule_names;
  public string $next_token;

  public function __construct(shape(
  ?'config_rule_names' => ConfigRuleNames,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->config_rule_names = $config_rule_names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConfigRulesResponse {
  public ConfigRules $config_rules;
  public string $next_token;

  public function __construct(shape(
  ?'config_rules' => ConfigRules,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->config_rules = $config_rules ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConfigurationAggregatorSourcesStatusRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public Limit $limit;
  public string $next_token;
  public AggregatedSourceStatusTypeList $update_status;

  public function __construct(shape(
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'limit' => Limit,
  ?'next_token' => string,
  ?'update_status' => AggregatedSourceStatusTypeList,
  ) $s = shape()) {
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->update_status = $update_status ?? ;
  }
}

class DescribeConfigurationAggregatorSourcesStatusResponse {
  public AggregatedSourceStatusList $aggregated_source_status_list;
  public string $next_token;

  public function __construct(shape(
  ?'aggregated_source_status_list' => AggregatedSourceStatusList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aggregated_source_status_list = $aggregated_source_status_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConfigurationAggregatorsRequest {
  public ConfigurationAggregatorNameList $configuration_aggregator_names;
  public Limit $limit;
  public string $next_token;

  public function __construct(shape(
  ?'configuration_aggregator_names' => ConfigurationAggregatorNameList,
  ?'limit' => Limit,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->configuration_aggregator_names = $configuration_aggregator_names ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConfigurationAggregatorsResponse {
  public ConfigurationAggregatorList $configuration_aggregators;
  public string $next_token;

  public function __construct(shape(
  ?'configuration_aggregators' => ConfigurationAggregatorList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->configuration_aggregators = $configuration_aggregators ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConfigurationRecorderStatusRequest {
  public ConfigurationRecorderNameList $configuration_recorder_names;

  public function __construct(shape(
  ?'configuration_recorder_names' => ConfigurationRecorderNameList,
  ) $s = shape()) {
    $this->configuration_recorder_names = $configuration_recorder_names ?? ;
  }
}

class DescribeConfigurationRecorderStatusResponse {
  public ConfigurationRecorderStatusList $configuration_recorders_status;

  public function __construct(shape(
  ?'configuration_recorders_status' => ConfigurationRecorderStatusList,
  ) $s = shape()) {
    $this->configuration_recorders_status = $configuration_recorders_status ?? ;
  }
}

class DescribeConfigurationRecordersRequest {
  public ConfigurationRecorderNameList $configuration_recorder_names;

  public function __construct(shape(
  ?'configuration_recorder_names' => ConfigurationRecorderNameList,
  ) $s = shape()) {
    $this->configuration_recorder_names = $configuration_recorder_names ?? ;
  }
}

class DescribeConfigurationRecordersResponse {
  public ConfigurationRecorderList $configuration_recorders;

  public function __construct(shape(
  ?'configuration_recorders' => ConfigurationRecorderList,
  ) $s = shape()) {
    $this->configuration_recorders = $configuration_recorders ?? ;
  }
}

type DescribeConformancePackComplianceLimit = int;

class DescribeConformancePackComplianceRequest {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackComplianceFilters $filters;
  public DescribeConformancePackComplianceLimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_name' => ConformancePackName,
  ?'filters' => ConformancePackComplianceFilters,
  ?'limit' => DescribeConformancePackComplianceLimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_name = $conformance_pack_name ?? "";
    $this->filters = $filters ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConformancePackComplianceResponse {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackRuleComplianceList $conformance_pack_rule_compliance_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_name' => ConformancePackName,
  ?'conformance_pack_rule_compliance_list' => ConformancePackRuleComplianceList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_name = $conformance_pack_name ?? "";
    $this->conformance_pack_rule_compliance_list = $conformance_pack_rule_compliance_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConformancePackStatusRequest {
  public ConformancePackNamesList $conformance_pack_names;
  public PageSizeLimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_names' => ConformancePackNamesList,
  ?'limit' => PageSizeLimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_names = $conformance_pack_names ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConformancePackStatusResponse {
  public ConformancePackStatusDetailsList $conformance_pack_status_details;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_status_details' => ConformancePackStatusDetailsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_status_details = $conformance_pack_status_details ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConformancePacksRequest {
  public ConformancePackNamesList $conformance_pack_names;
  public PageSizeLimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_names' => ConformancePackNamesList,
  ?'limit' => PageSizeLimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_names = $conformance_pack_names ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeConformancePacksResponse {
  public ConformancePackDetailList $conformance_pack_details;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_details' => ConformancePackDetailList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_details = $conformance_pack_details ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeDeliveryChannelStatusRequest {
  public DeliveryChannelNameList $delivery_channel_names;

  public function __construct(shape(
  ?'delivery_channel_names' => DeliveryChannelNameList,
  ) $s = shape()) {
    $this->delivery_channel_names = $delivery_channel_names ?? ;
  }
}

class DescribeDeliveryChannelStatusResponse {
  public DeliveryChannelStatusList $delivery_channels_status;

  public function __construct(shape(
  ?'delivery_channels_status' => DeliveryChannelStatusList,
  ) $s = shape()) {
    $this->delivery_channels_status = $delivery_channels_status ?? ;
  }
}

class DescribeDeliveryChannelsRequest {
  public DeliveryChannelNameList $delivery_channel_names;

  public function __construct(shape(
  ?'delivery_channel_names' => DeliveryChannelNameList,
  ) $s = shape()) {
    $this->delivery_channel_names = $delivery_channel_names ?? ;
  }
}

class DescribeDeliveryChannelsResponse {
  public DeliveryChannelList $delivery_channels;

  public function __construct(shape(
  ?'delivery_channels' => DeliveryChannelList,
  ) $s = shape()) {
    $this->delivery_channels = $delivery_channels ?? ;
  }
}

class DescribeOrganizationConfigRuleStatusesRequest {
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConfigRuleNames $organization_config_rule_names;

  public function __construct(shape(
  ?'limit' => CosmosPageLimit,
  ?'next_token' => string,
  ?'organization_config_rule_names' => OrganizationConfigRuleNames,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_config_rule_names = $organization_config_rule_names ?? [];
  }
}

class DescribeOrganizationConfigRuleStatusesResponse {
  public string $next_token;
  public OrganizationConfigRuleStatuses $organization_config_rule_statuses;

  public function __construct(shape(
  ?'next_token' => string,
  ?'organization_config_rule_statuses' => OrganizationConfigRuleStatuses,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->organization_config_rule_statuses = $organization_config_rule_statuses ?? [];
  }
}

class DescribeOrganizationConfigRulesRequest {
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConfigRuleNames $organization_config_rule_names;

  public function __construct(shape(
  ?'limit' => CosmosPageLimit,
  ?'next_token' => string,
  ?'organization_config_rule_names' => OrganizationConfigRuleNames,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_config_rule_names = $organization_config_rule_names ?? [];
  }
}

class DescribeOrganizationConfigRulesResponse {
  public string $next_token;
  public OrganizationConfigRules $organization_config_rules;

  public function __construct(shape(
  ?'next_token' => string,
  ?'organization_config_rules' => OrganizationConfigRules,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->organization_config_rules = $organization_config_rules ?? [];
  }
}

class DescribeOrganizationConformancePackStatusesRequest {
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConformancePackNames $organization_conformance_pack_names;

  public function __construct(shape(
  ?'limit' => CosmosPageLimit,
  ?'next_token' => string,
  ?'organization_conformance_pack_names' => OrganizationConformancePackNames,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_conformance_pack_names = $organization_conformance_pack_names ?? [];
  }
}

class DescribeOrganizationConformancePackStatusesResponse {
  public string $next_token;
  public OrganizationConformancePackStatuses $organization_conformance_pack_statuses;

  public function __construct(shape(
  ?'next_token' => string,
  ?'organization_conformance_pack_statuses' => OrganizationConformancePackStatuses,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->organization_conformance_pack_statuses = $organization_conformance_pack_statuses ?? [];
  }
}

class DescribeOrganizationConformancePacksRequest {
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConformancePackNames $organization_conformance_pack_names;

  public function __construct(shape(
  ?'limit' => CosmosPageLimit,
  ?'next_token' => string,
  ?'organization_conformance_pack_names' => OrganizationConformancePackNames,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_conformance_pack_names = $organization_conformance_pack_names ?? [];
  }
}

class DescribeOrganizationConformancePacksResponse {
  public string $next_token;
  public OrganizationConformancePacks $organization_conformance_packs;

  public function __construct(shape(
  ?'next_token' => string,
  ?'organization_conformance_packs' => OrganizationConformancePacks,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->organization_conformance_packs = $organization_conformance_packs ?? [];
  }
}

type DescribePendingAggregationRequestsLimit = int;

class DescribePendingAggregationRequestsRequest {
  public DescribePendingAggregationRequestsLimit $limit;
  public string $next_token;

  public function __construct(shape(
  ?'limit' => DescribePendingAggregationRequestsLimit,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribePendingAggregationRequestsResponse {
  public string $next_token;
  public PendingAggregationRequestList $pending_aggregation_requests;

  public function __construct(shape(
  ?'next_token' => string,
  ?'pending_aggregation_requests' => PendingAggregationRequestList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->pending_aggregation_requests = $pending_aggregation_requests ?? ;
  }
}

class DescribeRemediationConfigurationsRequest {
  public ConfigRuleNames $config_rule_names;

  public function __construct(shape(
  ?'config_rule_names' => ConfigRuleNames,
  ) $s = shape()) {
    $this->config_rule_names = $config_rule_names ?? [];
  }
}

class DescribeRemediationConfigurationsResponse {
  public RemediationConfigurations $remediation_configurations;

  public function __construct(shape(
  ?'remediation_configurations' => RemediationConfigurations,
  ) $s = shape()) {
    $this->remediation_configurations = $remediation_configurations ?? [];
  }
}

class DescribeRemediationExceptionsRequest {
  public ConfigRuleName $config_rule_name;
  public Limit $limit;
  public string $next_token;
  public RemediationExceptionResourceKeys $resource_keys;

  public function __construct(shape(
  ?'config_rule_name' => ConfigRuleName,
  ?'limit' => Limit,
  ?'next_token' => string,
  ?'resource_keys' => RemediationExceptionResourceKeys,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_keys = $resource_keys ?? [];
  }
}

class DescribeRemediationExceptionsResponse {
  public string $next_token;
  public RemediationExceptions $remediation_exceptions;

  public function __construct(shape(
  ?'next_token' => string,
  ?'remediation_exceptions' => RemediationExceptions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->remediation_exceptions = $remediation_exceptions ?? [];
  }
}

class DescribeRemediationExecutionStatusRequest {
  public ConfigRuleName $config_rule_name;
  public Limit $limit;
  public string $next_token;
  public ResourceKeys $resource_keys;

  public function __construct(shape(
  ?'config_rule_name' => ConfigRuleName,
  ?'limit' => Limit,
  ?'next_token' => string,
  ?'resource_keys' => ResourceKeys,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_keys = $resource_keys ?? [];
  }
}

class DescribeRemediationExecutionStatusResponse {
  public string $next_token;
  public RemediationExecutionStatuses $remediation_execution_statuses;

  public function __construct(shape(
  ?'next_token' => string,
  ?'remediation_execution_statuses' => RemediationExecutionStatuses,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->remediation_execution_statuses = $remediation_execution_statuses ?? [];
  }
}

class DescribeRetentionConfigurationsRequest {
  public NextToken $next_token;
  public RetentionConfigurationNameList $retention_configuration_names;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'retention_configuration_names' => RetentionConfigurationNameList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->retention_configuration_names = $retention_configuration_names ?? ;
  }
}

class DescribeRetentionConfigurationsResponse {
  public NextToken $next_token;
  public RetentionConfigurationList $retention_configurations;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'retention_configurations' => RetentionConfigurationList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->retention_configurations = $retention_configurations ?? ;
  }
}

type DiscoveredResourceIdentifierList = vec<AggregateResourceIdentifier>;

type EarlierTime = int;

type EmptiableStringWithCharLimit256 = string;

class Evaluation {
  public StringWithCharLimit256 $annotation;
  public BaseResourceId $compliance_resource_id;
  public StringWithCharLimit256 $compliance_resource_type;
  public ComplianceType $compliance_type;
  public OrderingTimestamp $ordering_timestamp;

  public function __construct(shape(
  ?'annotation' => StringWithCharLimit256,
  ?'compliance_resource_id' => BaseResourceId,
  ?'compliance_resource_type' => StringWithCharLimit256,
  ?'compliance_type' => ComplianceType,
  ?'ordering_timestamp' => OrderingTimestamp,
  ) $s = shape()) {
    $this->annotation = $annotation ?? "";
    $this->compliance_resource_id = $compliance_resource_id ?? ;
    $this->compliance_resource_type = $compliance_resource_type ?? ;
    $this->compliance_type = $compliance_type ?? "";
    $this->ordering_timestamp = $ordering_timestamp ?? 0;
  }
}

class EvaluationResult {
  public StringWithCharLimit256 $annotation;
  public ComplianceType $compliance_type;
  public Date $config_rule_invoked_time;
  public EvaluationResultIdentifier $evaluation_result_identifier;
  public Date $result_recorded_time;
  public string $result_token;

  public function __construct(shape(
  ?'annotation' => StringWithCharLimit256,
  ?'compliance_type' => ComplianceType,
  ?'config_rule_invoked_time' => Date,
  ?'evaluation_result_identifier' => EvaluationResultIdentifier,
  ?'result_recorded_time' => Date,
  ?'result_token' => string,
  ) $s = shape()) {
    $this->annotation = $annotation ?? "";
    $this->compliance_type = $compliance_type ?? "";
    $this->config_rule_invoked_time = $config_rule_invoked_time ?? ;
    $this->evaluation_result_identifier = $evaluation_result_identifier ?? null;
    $this->result_recorded_time = $result_recorded_time ?? ;
    $this->result_token = $result_token ?? ;
  }
}

class EvaluationResultIdentifier {
  public EvaluationResultQualifier $evaluation_result_qualifier;
  public Date $ordering_timestamp;

  public function __construct(shape(
  ?'evaluation_result_qualifier' => EvaluationResultQualifier,
  ?'ordering_timestamp' => Date,
  ) $s = shape()) {
    $this->evaluation_result_qualifier = $evaluation_result_qualifier ?? null;
    $this->ordering_timestamp = $ordering_timestamp ?? 0;
  }
}

class EvaluationResultQualifier {
  public ConfigRuleName $config_rule_name;
  public BaseResourceId $resource_id;
  public StringWithCharLimit256 $resource_type;

  public function __construct(shape(
  ?'config_rule_name' => ConfigRuleName,
  ?'resource_id' => BaseResourceId,
  ?'resource_type' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type EvaluationResults = vec<EvaluationResult>;

type Evaluations = vec<Evaluation>;

type EventSource = string;

type ExcludedAccounts = vec<AccountId>;

class ExecutionControls {
  public SsmControls $ssm_controls;

  public function __construct(shape(
  ?'ssm_controls' => SsmControls,
  ) $s = shape()) {
    $this->ssm_controls = $ssm_controls ?? null;
  }
}

type Expression = string;

class FailedDeleteRemediationExceptionsBatch {
  public RemediationExceptionResourceKeys $failed_items;
  public string $failure_message;

  public function __construct(shape(
  ?'failed_items' => RemediationExceptionResourceKeys,
  ?'failure_message' => string,
  ) $s = shape()) {
    $this->failed_items = $failed_items ?? ;
    $this->failure_message = $failure_message ?? ;
  }
}

type FailedDeleteRemediationExceptionsBatches = vec<FailedDeleteRemediationExceptionsBatch>;

class FailedRemediationBatch {
  public RemediationConfigurations $failed_items;
  public string $failure_message;

  public function __construct(shape(
  ?'failed_items' => RemediationConfigurations,
  ?'failure_message' => string,
  ) $s = shape()) {
    $this->failed_items = $failed_items ?? ;
    $this->failure_message = $failure_message ?? ;
  }
}

type FailedRemediationBatches = vec<FailedRemediationBatch>;

class FailedRemediationExceptionBatch {
  public RemediationExceptions $failed_items;
  public string $failure_message;

  public function __construct(shape(
  ?'failed_items' => RemediationExceptions,
  ?'failure_message' => string,
  ) $s = shape()) {
    $this->failed_items = $failed_items ?? ;
    $this->failure_message = $failure_message ?? ;
  }
}

type FailedRemediationExceptionBatches = vec<FailedRemediationExceptionBatch>;

class FieldInfo {
  public FieldName $name;

  public function __construct(shape(
  ?'name' => FieldName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type FieldInfoList = vec<FieldInfo>;

type FieldName = string;

class GetAggregateComplianceDetailsByConfigRuleRequest {
  public AccountId $account_id;
  public AwsRegion $aws_region;
  public ComplianceType $compliance_type;
  public ConfigRuleName $config_rule_name;
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public Limit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'aws_region' => AwsRegion,
  ?'compliance_type' => ComplianceType,
  ?'config_rule_name' => ConfigRuleName,
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'limit' => Limit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->aws_region = $aws_region ?? "";
    $this->compliance_type = $compliance_type ?? "";
    $this->config_rule_name = $config_rule_name ?? "";
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetAggregateComplianceDetailsByConfigRuleResponse {
  public AggregateEvaluationResultList $aggregate_evaluation_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'aggregate_evaluation_results' => AggregateEvaluationResultList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->aggregate_evaluation_results = $aggregate_evaluation_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetAggregateConfigRuleComplianceSummaryRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ConfigRuleComplianceSummaryFilters $filters;
  public ConfigRuleComplianceSummaryGroupKey $group_by_key;
  public GroupByAPILimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'filters' => ConfigRuleComplianceSummaryFilters,
  ?'group_by_key' => ConfigRuleComplianceSummaryGroupKey,
  ?'limit' => GroupByAPILimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->filters = $filters ?? ;
    $this->group_by_key = $group_by_key ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetAggregateConfigRuleComplianceSummaryResponse {
  public AggregateComplianceCountList $aggregate_compliance_counts;
  public StringWithCharLimit256 $group_by_key;
  public NextToken $next_token;

  public function __construct(shape(
  ?'aggregate_compliance_counts' => AggregateComplianceCountList,
  ?'group_by_key' => StringWithCharLimit256,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->aggregate_compliance_counts = $aggregate_compliance_counts ?? ;
    $this->group_by_key = $group_by_key ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetAggregateDiscoveredResourceCountsRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ResourceCountFilters $filters;
  public ResourceCountGroupKey $group_by_key;
  public GroupByAPILimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'filters' => ResourceCountFilters,
  ?'group_by_key' => ResourceCountGroupKey,
  ?'limit' => GroupByAPILimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->filters = $filters ?? ;
    $this->group_by_key = $group_by_key ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetAggregateDiscoveredResourceCountsResponse {
  public StringWithCharLimit256 $group_by_key;
  public GroupedResourceCountList $grouped_resource_counts;
  public NextToken $next_token;
  public Long $total_discovered_resources;

  public function __construct(shape(
  ?'group_by_key' => StringWithCharLimit256,
  ?'grouped_resource_counts' => GroupedResourceCountList,
  ?'next_token' => NextToken,
  ?'total_discovered_resources' => Long,
  ) $s = shape()) {
    $this->group_by_key = $group_by_key ?? ;
    $this->grouped_resource_counts = $grouped_resource_counts ?? ;
    $this->next_token = $next_token ?? "";
    $this->total_discovered_resources = $total_discovered_resources ?? ;
  }
}

class GetAggregateResourceConfigRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public AggregateResourceIdentifier $resource_identifier;

  public function __construct(shape(
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'resource_identifier' => AggregateResourceIdentifier,
  ) $s = shape()) {
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->resource_identifier = $resource_identifier ?? null;
  }
}

class GetAggregateResourceConfigResponse {
  public ConfigurationItem $configuration_item;

  public function __construct(shape(
  ?'configuration_item' => ConfigurationItem,
  ) $s = shape()) {
    $this->configuration_item = $configuration_item ?? null;
  }
}

class GetComplianceDetailsByConfigRuleRequest {
  public ComplianceTypes $compliance_types;
  public StringWithCharLimit64 $config_rule_name;
  public Limit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'compliance_types' => ComplianceTypes,
  ?'config_rule_name' => StringWithCharLimit64,
  ?'limit' => Limit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->compliance_types = $compliance_types ?? [];
    $this->config_rule_name = $config_rule_name ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetComplianceDetailsByConfigRuleResponse {
  public EvaluationResults $evaluation_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'evaluation_results' => EvaluationResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->evaluation_results = $evaluation_results ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetComplianceDetailsByResourceRequest {
  public ComplianceTypes $compliance_types;
  public string $next_token;
  public BaseResourceId $resource_id;
  public StringWithCharLimit256 $resource_type;

  public function __construct(shape(
  ?'compliance_types' => ComplianceTypes,
  ?'next_token' => string,
  ?'resource_id' => BaseResourceId,
  ?'resource_type' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->compliance_types = $compliance_types ?? [];
    $this->next_token = $next_token ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class GetComplianceDetailsByResourceResponse {
  public EvaluationResults $evaluation_results;
  public string $next_token;

  public function __construct(shape(
  ?'evaluation_results' => EvaluationResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->evaluation_results = $evaluation_results ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetComplianceSummaryByConfigRuleResponse {
  public ComplianceSummary $compliance_summary;

  public function __construct(shape(
  ?'compliance_summary' => ComplianceSummary,
  ) $s = shape()) {
    $this->compliance_summary = $compliance_summary ?? null;
  }
}

class GetComplianceSummaryByResourceTypeRequest {
  public ResourceTypes $resource_types;

  public function __construct(shape(
  ?'resource_types' => ResourceTypes,
  ) $s = shape()) {
    $this->resource_types = $resource_types ?? [];
  }
}

class GetComplianceSummaryByResourceTypeResponse {
  public ComplianceSummariesByResourceType $compliance_summaries_by_resource_type;

  public function __construct(shape(
  ?'compliance_summaries_by_resource_type' => ComplianceSummariesByResourceType,
  ) $s = shape()) {
    $this->compliance_summaries_by_resource_type = $compliance_summaries_by_resource_type ?? [];
  }
}

type GetConformancePackComplianceDetailsLimit = int;

class GetConformancePackComplianceDetailsRequest {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackEvaluationFilters $filters;
  public GetConformancePackComplianceDetailsLimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_name' => ConformancePackName,
  ?'filters' => ConformancePackEvaluationFilters,
  ?'limit' => GetConformancePackComplianceDetailsLimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_name = $conformance_pack_name ?? "";
    $this->filters = $filters ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetConformancePackComplianceDetailsResponse {
  public ConformancePackName $conformance_pack_name;
  public ConformancePackRuleEvaluationResultsList $conformance_pack_rule_evaluation_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_name' => ConformancePackName,
  ?'conformance_pack_rule_evaluation_results' => ConformancePackRuleEvaluationResultsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_name = $conformance_pack_name ?? "";
    $this->conformance_pack_rule_evaluation_results = $conformance_pack_rule_evaluation_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetConformancePackComplianceSummaryRequest {
  public ConformancePackNamesToSummarizeList $conformance_pack_names;
  public PageSizeLimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_names' => ConformancePackNamesToSummarizeList,
  ?'limit' => PageSizeLimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_names = $conformance_pack_names ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetConformancePackComplianceSummaryResponse {
  public ConformancePackComplianceSummaryList $conformance_pack_compliance_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conformance_pack_compliance_summary_list' => ConformancePackComplianceSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conformance_pack_compliance_summary_list = $conformance_pack_compliance_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetDiscoveredResourceCountsRequest {
  public Limit $limit;
  public NextToken $next_token;
  public ResourceTypes $resource_types;

  public function __construct(shape(
  ?'limit' => Limit,
  ?'next_token' => NextToken,
  ?'resource_types' => ResourceTypes,
  ) $s = shape()) {
    $this->limit = $limit ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_types = $resource_types ?? ;
  }
}

class GetDiscoveredResourceCountsResponse {
  public NextToken $next_token;
  public ResourceCounts $resource_counts;
  public Long $total_discovered_resources;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resource_counts' => ResourceCounts,
  ?'total_discovered_resources' => Long,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->resource_counts = $resource_counts ?? ;
    $this->total_discovered_resources = $total_discovered_resources ?? ;
  }
}

class GetOrganizationConfigRuleDetailedStatusRequest {
  public StatusDetailFilters $filters;
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConfigRuleName $organization_config_rule_name;

  public function __construct(shape(
  ?'filters' => StatusDetailFilters,
  ?'limit' => CosmosPageLimit,
  ?'next_token' => string,
  ?'organization_config_rule_name' => OrganizationConfigRuleName,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_config_rule_name = $organization_config_rule_name ?? "";
  }
}

class GetOrganizationConfigRuleDetailedStatusResponse {
  public string $next_token;
  public OrganizationConfigRuleDetailedStatus $organization_config_rule_detailed_status;

  public function __construct(shape(
  ?'next_token' => string,
  ?'organization_config_rule_detailed_status' => OrganizationConfigRuleDetailedStatus,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->organization_config_rule_detailed_status = $organization_config_rule_detailed_status ?? [];
  }
}

class GetOrganizationConformancePackDetailedStatusRequest {
  public OrganizationResourceDetailedStatusFilters $filters;
  public CosmosPageLimit $limit;
  public string $next_token;
  public OrganizationConformancePackName $organization_conformance_pack_name;

  public function __construct(shape(
  ?'filters' => OrganizationResourceDetailedStatusFilters,
  ?'limit' => CosmosPageLimit,
  ?'next_token' => string,
  ?'organization_conformance_pack_name' => OrganizationConformancePackName,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_conformance_pack_name = $organization_conformance_pack_name ?? "";
  }
}

class GetOrganizationConformancePackDetailedStatusResponse {
  public string $next_token;
  public OrganizationConformancePackDetailedStatuses $organization_conformance_pack_detailed_statuses;

  public function __construct(shape(
  ?'next_token' => string,
  ?'organization_conformance_pack_detailed_statuses' => OrganizationConformancePackDetailedStatuses,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->organization_conformance_pack_detailed_statuses = $organization_conformance_pack_detailed_statuses ?? [];
  }
}

class GetResourceConfigHistoryRequest {
  public ChronologicalOrder $chronological_order;
  public EarlierTime $earlier_time;
  public LaterTime $later_time;
  public Limit $limit;
  public NextToken $next_token;
  public ResourceId $resource_id;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'chronological_order' => ChronologicalOrder,
  ?'earlier_time' => EarlierTime,
  ?'later_time' => LaterTime,
  ?'limit' => Limit,
  ?'next_token' => NextToken,
  ?'resource_id' => ResourceId,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->chronological_order = $chronological_order ?? ;
    $this->earlier_time = $earlier_time ?? ;
    $this->later_time = $later_time ?? ;
    $this->limit = $limit ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_id = $resource_id ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

class GetResourceConfigHistoryResponse {
  public ConfigurationItemList $configuration_items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'configuration_items' => ConfigurationItemList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->configuration_items = $configuration_items ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type GroupByAPILimit = int;

class GroupedResourceCount {
  public StringWithCharLimit256 $group_name;
  public Long $resource_count;

  public function __construct(shape(
  ?'group_name' => StringWithCharLimit256,
  ?'resource_count' => Long,
  ) $s = shape()) {
    $this->group_name = $group_name ?? ;
    $this->resource_count = $resource_count ?? null;
  }
}

type GroupedResourceCountList = vec<GroupedResourceCount>;

type IncludeGlobalResourceTypes = bool;

class InsufficientDeliveryPolicyException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsufficientPermissionsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Integer = int;

class InvalidConfigurationRecorderNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeliveryChannelNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidExpressionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidLimitException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidNextTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParameterValueException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRecordingGroupException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidResultTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRoleException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidS3KeyPrefixException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSNSTopicARNException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTimeRangeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LastDeliveryChannelDeleteFailedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type LaterTime = int;

type Limit = int;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListAggregateDiscoveredResourcesRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public ResourceFilters $filters;
  public Limit $limit;
  public NextToken $next_token;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'filters' => ResourceFilters,
  ?'limit' => Limit,
  ?'next_token' => NextToken,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->filters = $filters ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class ListAggregateDiscoveredResourcesResponse {
  public NextToken $next_token;
  public DiscoveredResourceIdentifierList $resource_identifiers;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resource_identifiers' => DiscoveredResourceIdentifierList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_identifiers = $resource_identifiers ?? ;
  }
}

class ListDiscoveredResourcesRequest {
  public boolean $include_deleted_resources;
  public Limit $limit;
  public NextToken $next_token;
  public ResourceIdList $resource_ids;
  public ResourceName $resource_name;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'include_deleted_resources' => boolean,
  ?'limit' => Limit,
  ?'next_token' => NextToken,
  ?'resource_ids' => ResourceIdList,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->include_deleted_resources = $include_deleted_resources ?? ;
    $this->limit = $limit ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_ids = $resource_ids ?? ;
    $this->resource_name = $resource_name ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

class ListDiscoveredResourcesResponse {
  public NextToken $next_token;
  public ResourceIdentifierList $resource_identifiers;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resource_identifiers' => ResourceIdentifierList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->resource_identifiers = $resource_identifiers ?? ;
  }
}

class ListTagsForResourceRequest {
  public Limit $limit;
  public NextToken $next_token;
  public AmazonResourceName $resource_arn;

  public function __construct(shape(
  ?'limit' => Limit,
  ?'next_token' => NextToken,
  ?'resource_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

type Long = int;

class MaxActiveResourcesExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaxNumberOfConfigRulesExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaxNumberOfConfigurationRecordersExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaxNumberOfConformancePacksExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaxNumberOfDeliveryChannelsExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaxNumberOfOrganizationConfigRulesExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaxNumberOfOrganizationConformancePacksExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaxNumberOfRetentionConfigurationsExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type MaximumExecutionFrequency = string;

type MemberAccountRuleStatus = string;

class MemberAccountStatus {
  public AccountId $account_id;
  public StringWithCharLimit64 $config_rule_name;
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
  public MemberAccountRuleStatus $member_account_rule_status;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'config_rule_name' => StringWithCharLimit64,
  ?'error_code' => string,
  ?'error_message' => string,
  ?'last_update_time' => Date,
  ?'member_account_rule_status' => MemberAccountRuleStatus,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->config_rule_name = $config_rule_name ?? "";
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->member_account_rule_status = $member_account_rule_status ?? "";
  }
}

type MessageType = string;

type Name = string;

type NextToken = string;

class NoAvailableConfigurationRecorderException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoAvailableDeliveryChannelException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoAvailableOrganizationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoRunningConfigurationRecorderException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchBucketException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchConfigRuleException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchConfigRuleInConformancePackException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchConfigurationAggregatorException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchConfigurationRecorderException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchConformancePackException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchDeliveryChannelException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchOrganizationConfigRuleException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchOrganizationConformancePackException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchRemediationConfigurationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchRemediationExceptionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchRetentionConfigurationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type OrderingTimestamp = int;

class OrganizationAccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OrganizationAggregationSource {
  public boolean $all_aws_regions;
  public AggregatorRegionList $aws_regions;
  public string $role_arn;

  public function __construct(shape(
  ?'all_aws_regions' => boolean,
  ?'aws_regions' => AggregatorRegionList,
  ?'role_arn' => string,
  ) $s = shape()) {
    $this->all_aws_regions = $all_aws_regions ?? ;
    $this->aws_regions = $aws_regions ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class OrganizationAllFeaturesNotEnabledException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OrganizationConfigRule {
  public ExcludedAccounts $excluded_accounts;
  public Date $last_update_time;
  public StringWithCharLimit256 $organization_config_rule_arn;
  public OrganizationConfigRuleName $organization_config_rule_name;
  public OrganizationCustomRuleMetadata $organization_custom_rule_metadata;
  public OrganizationManagedRuleMetadata $organization_managed_rule_metadata;

  public function __construct(shape(
  ?'excluded_accounts' => ExcludedAccounts,
  ?'last_update_time' => Date,
  ?'organization_config_rule_arn' => StringWithCharLimit256,
  ?'organization_config_rule_name' => OrganizationConfigRuleName,
  ?'organization_custom_rule_metadata' => OrganizationCustomRuleMetadata,
  ?'organization_managed_rule_metadata' => OrganizationManagedRuleMetadata,
  ) $s = shape()) {
    $this->excluded_accounts = $excluded_accounts ?? [];
    $this->last_update_time = $last_update_time ?? ;
    $this->organization_config_rule_arn = $organization_config_rule_arn ?? ;
    $this->organization_config_rule_name = $organization_config_rule_name ?? "";
    $this->organization_custom_rule_metadata = $organization_custom_rule_metadata ?? null;
    $this->organization_managed_rule_metadata = $organization_managed_rule_metadata ?? null;
  }
}

type OrganizationConfigRuleDetailedStatus = vec<MemberAccountStatus>;

type OrganizationConfigRuleName = string;

type OrganizationConfigRuleNames = vec<StringWithCharLimit64>;

class OrganizationConfigRuleStatus {
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
  public OrganizationConfigRuleName $organization_config_rule_name;
  public OrganizationRuleStatus $organization_rule_status;

  public function __construct(shape(
  ?'error_code' => string,
  ?'error_message' => string,
  ?'last_update_time' => Date,
  ?'organization_config_rule_name' => OrganizationConfigRuleName,
  ?'organization_rule_status' => OrganizationRuleStatus,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->organization_config_rule_name = $organization_config_rule_name ?? "";
    $this->organization_rule_status = $organization_rule_status ?? "";
  }
}

type OrganizationConfigRuleStatuses = vec<OrganizationConfigRuleStatus>;

type OrganizationConfigRuleTriggerType = string;

type OrganizationConfigRuleTriggerTypes = vec<OrganizationConfigRuleTriggerType>;

type OrganizationConfigRules = vec<OrganizationConfigRule>;

class OrganizationConformancePack {
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public ExcludedAccounts $excluded_accounts;
  public Date $last_update_time;
  public StringWithCharLimit256 $organization_conformance_pack_arn;
  public OrganizationConformancePackName $organization_conformance_pack_name;

  public function __construct(shape(
  ?'conformance_pack_input_parameters' => ConformancePackInputParameters,
  ?'delivery_s_3_bucket' => DeliveryS3Bucket,
  ?'delivery_s_3_key_prefix' => DeliveryS3KeyPrefix,
  ?'excluded_accounts' => ExcludedAccounts,
  ?'last_update_time' => Date,
  ?'organization_conformance_pack_arn' => StringWithCharLimit256,
  ?'organization_conformance_pack_name' => OrganizationConformancePackName,
  ) $s = shape()) {
    $this->conformance_pack_input_parameters = $conformance_pack_input_parameters ?? [];
    $this->delivery_s_3_bucket = $delivery_s_3_bucket ?? "";
    $this->delivery_s_3_key_prefix = $delivery_s_3_key_prefix ?? "";
    $this->excluded_accounts = $excluded_accounts ?? [];
    $this->last_update_time = $last_update_time ?? ;
    $this->organization_conformance_pack_arn = $organization_conformance_pack_arn ?? ;
    $this->organization_conformance_pack_name = $organization_conformance_pack_name ?? "";
  }
}

class OrganizationConformancePackDetailedStatus {
  public AccountId $account_id;
  public StringWithCharLimit256 $conformance_pack_name;
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
  public OrganizationResourceDetailedStatus $status;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'conformance_pack_name' => StringWithCharLimit256,
  ?'error_code' => string,
  ?'error_message' => string,
  ?'last_update_time' => Date,
  ?'status' => OrganizationResourceDetailedStatus,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->conformance_pack_name = $conformance_pack_name ?? "";
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->status = $status ?? ;
  }
}

type OrganizationConformancePackDetailedStatuses = vec<OrganizationConformancePackDetailedStatus>;

type OrganizationConformancePackName = string;

type OrganizationConformancePackNames = vec<OrganizationConformancePackName>;

class OrganizationConformancePackStatus {
  public string $error_code;
  public string $error_message;
  public Date $last_update_time;
  public OrganizationConformancePackName $organization_conformance_pack_name;
  public OrganizationResourceStatus $status;

  public function __construct(shape(
  ?'error_code' => string,
  ?'error_message' => string,
  ?'last_update_time' => Date,
  ?'organization_conformance_pack_name' => OrganizationConformancePackName,
  ?'status' => OrganizationResourceStatus,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->organization_conformance_pack_name = $organization_conformance_pack_name ?? "";
    $this->status = $status ?? ;
  }
}

type OrganizationConformancePackStatuses = vec<OrganizationConformancePackStatus>;

class OrganizationConformancePackTemplateValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type OrganizationConformancePacks = vec<OrganizationConformancePack>;

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

  public function __construct(shape(
  ?'description' => StringWithCharLimit256Min0,
  ?'input_parameters' => StringWithCharLimit2048,
  ?'lambda_function_arn' => StringWithCharLimit256,
  ?'maximum_execution_frequency' => MaximumExecutionFrequency,
  ?'organization_config_rule_trigger_types' => OrganizationConfigRuleTriggerTypes,
  ?'resource_id_scope' => StringWithCharLimit768,
  ?'resource_types_scope' => ResourceTypesScope,
  ?'tag_key_scope' => StringWithCharLimit128,
  ?'tag_value_scope' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->input_parameters = $input_parameters ?? ;
    $this->lambda_function_arn = $lambda_function_arn ?? ;
    $this->maximum_execution_frequency = $maximum_execution_frequency ?? "";
    $this->organization_config_rule_trigger_types = $organization_config_rule_trigger_types ?? [];
    $this->resource_id_scope = $resource_id_scope ?? ;
    $this->resource_types_scope = $resource_types_scope ?? [];
    $this->tag_key_scope = $tag_key_scope ?? ;
    $this->tag_value_scope = $tag_value_scope ?? ;
  }
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

  public function __construct(shape(
  ?'description' => StringWithCharLimit256Min0,
  ?'input_parameters' => StringWithCharLimit2048,
  ?'maximum_execution_frequency' => MaximumExecutionFrequency,
  ?'resource_id_scope' => StringWithCharLimit768,
  ?'resource_types_scope' => ResourceTypesScope,
  ?'rule_identifier' => StringWithCharLimit256,
  ?'tag_key_scope' => StringWithCharLimit128,
  ?'tag_value_scope' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->input_parameters = $input_parameters ?? ;
    $this->maximum_execution_frequency = $maximum_execution_frequency ?? "";
    $this->resource_id_scope = $resource_id_scope ?? ;
    $this->resource_types_scope = $resource_types_scope ?? [];
    $this->rule_identifier = $rule_identifier ?? ;
    $this->tag_key_scope = $tag_key_scope ?? ;
    $this->tag_value_scope = $tag_value_scope ?? ;
  }
}

type OrganizationResourceDetailedStatus = string;

class OrganizationResourceDetailedStatusFilters {
  public AccountId $account_id;
  public OrganizationResourceDetailedStatus $status;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'status' => OrganizationResourceDetailedStatus,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->status = $status ?? ;
  }
}

type OrganizationResourceStatus = string;

type OrganizationRuleStatus = string;

class OversizedConfigurationItemException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Owner = string;

type PageSizeLimit = int;

type ParameterName = string;

type ParameterValue = string;

class PendingAggregationRequest {
  public AccountId $requester_account_id;
  public AwsRegion $requester_aws_region;

  public function __construct(shape(
  ?'requester_account_id' => AccountId,
  ?'requester_aws_region' => AwsRegion,
  ) $s = shape()) {
    $this->requester_account_id = $requester_account_id ?? ;
    $this->requester_aws_region = $requester_aws_region ?? ;
  }
}

type PendingAggregationRequestList = vec<PendingAggregationRequest>;

type Percentage = int;

class PutAggregationAuthorizationRequest {
  public AccountId $authorized_account_id;
  public AwsRegion $authorized_aws_region;
  public TagsList $tags;

  public function __construct(shape(
  ?'authorized_account_id' => AccountId,
  ?'authorized_aws_region' => AwsRegion,
  ?'tags' => TagsList,
  ) $s = shape()) {
    $this->authorized_account_id = $authorized_account_id ?? ;
    $this->authorized_aws_region = $authorized_aws_region ?? ;
    $this->tags = $tags ?? [];
  }
}

class PutAggregationAuthorizationResponse {
  public AggregationAuthorization $aggregation_authorization;

  public function __construct(shape(
  ?'aggregation_authorization' => AggregationAuthorization,
  ) $s = shape()) {
    $this->aggregation_authorization = $aggregation_authorization ?? null;
  }
}

class PutConfigRuleRequest {
  public ConfigRule $config_rule;
  public TagsList $tags;

  public function __construct(shape(
  ?'config_rule' => ConfigRule,
  ?'tags' => TagsList,
  ) $s = shape()) {
    $this->config_rule = $config_rule ?? null;
    $this->tags = $tags ?? [];
  }
}

class PutConfigurationAggregatorRequest {
  public AccountAggregationSourceList $account_aggregation_sources;
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public OrganizationAggregationSource $organization_aggregation_source;
  public TagsList $tags;

  public function __construct(shape(
  ?'account_aggregation_sources' => AccountAggregationSourceList,
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'organization_aggregation_source' => OrganizationAggregationSource,
  ?'tags' => TagsList,
  ) $s = shape()) {
    $this->account_aggregation_sources = $account_aggregation_sources ?? ;
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->organization_aggregation_source = $organization_aggregation_source ?? null;
    $this->tags = $tags ?? [];
  }
}

class PutConfigurationAggregatorResponse {
  public ConfigurationAggregator $configuration_aggregator;

  public function __construct(shape(
  ?'configuration_aggregator' => ConfigurationAggregator,
  ) $s = shape()) {
    $this->configuration_aggregator = $configuration_aggregator ?? null;
  }
}

class PutConfigurationRecorderRequest {
  public ConfigurationRecorder $configuration_recorder;

  public function __construct(shape(
  ?'configuration_recorder' => ConfigurationRecorder,
  ) $s = shape()) {
    $this->configuration_recorder = $configuration_recorder ?? null;
  }
}

class PutConformancePackRequest {
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public ConformancePackName $conformance_pack_name;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public TemplateBody $template_body;
  public TemplateS3Uri $template_s_3_uri;

  public function __construct(shape(
  ?'conformance_pack_input_parameters' => ConformancePackInputParameters,
  ?'conformance_pack_name' => ConformancePackName,
  ?'delivery_s_3_bucket' => DeliveryS3Bucket,
  ?'delivery_s_3_key_prefix' => DeliveryS3KeyPrefix,
  ?'template_body' => TemplateBody,
  ?'template_s_3_uri' => TemplateS3Uri,
  ) $s = shape()) {
    $this->conformance_pack_input_parameters = $conformance_pack_input_parameters ?? [];
    $this->conformance_pack_name = $conformance_pack_name ?? "";
    $this->delivery_s_3_bucket = $delivery_s_3_bucket ?? "";
    $this->delivery_s_3_key_prefix = $delivery_s_3_key_prefix ?? "";
    $this->template_body = $template_body ?? "";
    $this->template_s_3_uri = $template_s_3_uri ?? "";
  }
}

class PutConformancePackResponse {
  public ConformancePackArn $conformance_pack_arn;

  public function __construct(shape(
  ?'conformance_pack_arn' => ConformancePackArn,
  ) $s = shape()) {
    $this->conformance_pack_arn = $conformance_pack_arn ?? "";
  }
}

class PutDeliveryChannelRequest {
  public DeliveryChannel $delivery_channel;

  public function __construct(shape(
  ?'delivery_channel' => DeliveryChannel,
  ) $s = shape()) {
    $this->delivery_channel = $delivery_channel ?? null;
  }
}

class PutEvaluationsRequest {
  public Evaluations $evaluations;
  public string $result_token;
  public boolean $test_mode;

  public function __construct(shape(
  ?'evaluations' => Evaluations,
  ?'result_token' => string,
  ?'test_mode' => boolean,
  ) $s = shape()) {
    $this->evaluations = $evaluations ?? [];
    $this->result_token = $result_token ?? ;
    $this->test_mode = $test_mode ?? ;
  }
}

class PutEvaluationsResponse {
  public Evaluations $failed_evaluations;

  public function __construct(shape(
  ?'failed_evaluations' => Evaluations,
  ) $s = shape()) {
    $this->failed_evaluations = $failed_evaluations ?? ;
  }
}

class PutOrganizationConfigRuleRequest {
  public ExcludedAccounts $excluded_accounts;
  public OrganizationConfigRuleName $organization_config_rule_name;
  public OrganizationCustomRuleMetadata $organization_custom_rule_metadata;
  public OrganizationManagedRuleMetadata $organization_managed_rule_metadata;

  public function __construct(shape(
  ?'excluded_accounts' => ExcludedAccounts,
  ?'organization_config_rule_name' => OrganizationConfigRuleName,
  ?'organization_custom_rule_metadata' => OrganizationCustomRuleMetadata,
  ?'organization_managed_rule_metadata' => OrganizationManagedRuleMetadata,
  ) $s = shape()) {
    $this->excluded_accounts = $excluded_accounts ?? [];
    $this->organization_config_rule_name = $organization_config_rule_name ?? "";
    $this->organization_custom_rule_metadata = $organization_custom_rule_metadata ?? null;
    $this->organization_managed_rule_metadata = $organization_managed_rule_metadata ?? null;
  }
}

class PutOrganizationConfigRuleResponse {
  public StringWithCharLimit256 $organization_config_rule_arn;

  public function __construct(shape(
  ?'organization_config_rule_arn' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->organization_config_rule_arn = $organization_config_rule_arn ?? ;
  }
}

class PutOrganizationConformancePackRequest {
  public ConformancePackInputParameters $conformance_pack_input_parameters;
  public DeliveryS3Bucket $delivery_s_3_bucket;
  public DeliveryS3KeyPrefix $delivery_s_3_key_prefix;
  public ExcludedAccounts $excluded_accounts;
  public OrganizationConformancePackName $organization_conformance_pack_name;
  public TemplateBody $template_body;
  public TemplateS3Uri $template_s_3_uri;

  public function __construct(shape(
  ?'conformance_pack_input_parameters' => ConformancePackInputParameters,
  ?'delivery_s_3_bucket' => DeliveryS3Bucket,
  ?'delivery_s_3_key_prefix' => DeliveryS3KeyPrefix,
  ?'excluded_accounts' => ExcludedAccounts,
  ?'organization_conformance_pack_name' => OrganizationConformancePackName,
  ?'template_body' => TemplateBody,
  ?'template_s_3_uri' => TemplateS3Uri,
  ) $s = shape()) {
    $this->conformance_pack_input_parameters = $conformance_pack_input_parameters ?? [];
    $this->delivery_s_3_bucket = $delivery_s_3_bucket ?? "";
    $this->delivery_s_3_key_prefix = $delivery_s_3_key_prefix ?? "";
    $this->excluded_accounts = $excluded_accounts ?? [];
    $this->organization_conformance_pack_name = $organization_conformance_pack_name ?? "";
    $this->template_body = $template_body ?? "";
    $this->template_s_3_uri = $template_s_3_uri ?? "";
  }
}

class PutOrganizationConformancePackResponse {
  public StringWithCharLimit256 $organization_conformance_pack_arn;

  public function __construct(shape(
  ?'organization_conformance_pack_arn' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->organization_conformance_pack_arn = $organization_conformance_pack_arn ?? ;
  }
}

class PutRemediationConfigurationsRequest {
  public RemediationConfigurations $remediation_configurations;

  public function __construct(shape(
  ?'remediation_configurations' => RemediationConfigurations,
  ) $s = shape()) {
    $this->remediation_configurations = $remediation_configurations ?? [];
  }
}

class PutRemediationConfigurationsResponse {
  public FailedRemediationBatches $failed_batches;

  public function __construct(shape(
  ?'failed_batches' => FailedRemediationBatches,
  ) $s = shape()) {
    $this->failed_batches = $failed_batches ?? ;
  }
}

class PutRemediationExceptionsRequest {
  public ConfigRuleName $config_rule_name;
  public Date $expiration_time;
  public StringWithCharLimit1024 $message;
  public RemediationExceptionResourceKeys $resource_keys;

  public function __construct(shape(
  ?'config_rule_name' => ConfigRuleName,
  ?'expiration_time' => Date,
  ?'message' => StringWithCharLimit1024,
  ?'resource_keys' => RemediationExceptionResourceKeys,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
    $this->expiration_time = $expiration_time ?? ;
    $this->message = $message ?? ;
    $this->resource_keys = $resource_keys ?? [];
  }
}

class PutRemediationExceptionsResponse {
  public FailedRemediationExceptionBatches $failed_batches;

  public function __construct(shape(
  ?'failed_batches' => FailedRemediationExceptionBatches,
  ) $s = shape()) {
    $this->failed_batches = $failed_batches ?? ;
  }
}

class PutResourceConfigRequest {
  public Configuration $configuration;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceTypeString $resource_type;
  public SchemaVersionId $schema_version_id;
  public Tags $tags;

  public function __construct(shape(
  ?'configuration' => Configuration,
  ?'resource_id' => ResourceId,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceTypeString,
  ?'schema_version_id' => SchemaVersionId,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->configuration = $configuration ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->resource_name = $resource_name ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->schema_version_id = $schema_version_id ?? "";
    $this->tags = $tags ?? [];
  }
}

class PutRetentionConfigurationRequest {
  public RetentionPeriodInDays $retention_period_in_days;

  public function __construct(shape(
  ?'retention_period_in_days' => RetentionPeriodInDays,
  ) $s = shape()) {
    $this->retention_period_in_days = $retention_period_in_days ?? 0;
  }
}

class PutRetentionConfigurationResponse {
  public RetentionConfiguration $retention_configuration;

  public function __construct(shape(
  ?'retention_configuration' => RetentionConfiguration,
  ) $s = shape()) {
    $this->retention_configuration = $retention_configuration ?? null;
  }
}

class QueryInfo {
  public FieldInfoList $select_fields;

  public function __construct(shape(
  ?'select_fields' => FieldInfoList,
  ) $s = shape()) {
    $this->select_fields = $select_fields ?? ;
  }
}

type RecorderName = string;

type RecorderStatus = string;

class RecordingGroup {
  public AllSupported $all_supported;
  public IncludeGlobalResourceTypes $include_global_resource_types;
  public ResourceTypeList $resource_types;

  public function __construct(shape(
  ?'all_supported' => AllSupported,
  ?'include_global_resource_types' => IncludeGlobalResourceTypes,
  ?'resource_types' => ResourceTypeList,
  ) $s = shape()) {
    $this->all_supported = $all_supported ?? ;
    $this->include_global_resource_types = $include_global_resource_types ?? ;
    $this->resource_types = $resource_types ?? ;
  }
}

type ReevaluateConfigRuleNames = vec<ConfigRuleName>;

type RelatedEvent = string;

type RelatedEventList = vec<RelatedEvent>;

class Relationship {
  public RelationshipName $relationship_name;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'relationship_name' => RelationshipName,
  ?'resource_id' => ResourceId,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->relationship_name = $relationship_name ?? ;
    $this->resource_id = $resource_id ?? ;
    $this->resource_name = $resource_name ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

type RelationshipList = vec<Relationship>;

type RelationshipName = string;

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

  public function __construct(shape(
  ?'arn' => StringWithCharLimit1024,
  ?'automatic' => boolean,
  ?'config_rule_name' => ConfigRuleName,
  ?'created_by_service' => StringWithCharLimit1024,
  ?'execution_controls' => ExecutionControls,
  ?'maximum_automatic_attempts' => AutoRemediationAttempts,
  ?'parameters' => RemediationParameters,
  ?'resource_type' => string,
  ?'retry_attempt_seconds' => AutoRemediationAttemptSeconds,
  ?'target_id' => StringWithCharLimit256,
  ?'target_type' => RemediationTargetType,
  ?'target_version' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->automatic = $automatic ?? ;
    $this->config_rule_name = $config_rule_name ?? "";
    $this->created_by_service = $created_by_service ?? ;
    $this->execution_controls = $execution_controls ?? null;
    $this->maximum_automatic_attempts = $maximum_automatic_attempts ?? ;
    $this->parameters = $parameters ?? ;
    $this->resource_type = $resource_type ?? "";
    $this->retry_attempt_seconds = $retry_attempt_seconds ?? ;
    $this->target_id = $target_id ?? ;
    $this->target_type = $target_type ?? ;
    $this->target_version = $target_version ?? ;
  }
}

type RemediationConfigurations = vec<RemediationConfiguration>;

class RemediationException {
  public ConfigRuleName $config_rule_name;
  public Date $expiration_time;
  public StringWithCharLimit1024 $message;
  public StringWithCharLimit1024 $resource_id;
  public StringWithCharLimit256 $resource_type;

  public function __construct(shape(
  ?'config_rule_name' => ConfigRuleName,
  ?'expiration_time' => Date,
  ?'message' => StringWithCharLimit1024,
  ?'resource_id' => StringWithCharLimit1024,
  ?'resource_type' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
    $this->expiration_time = $expiration_time ?? ;
    $this->message = $message ?? ;
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class RemediationExceptionResourceKey {
  public StringWithCharLimit1024 $resource_id;
  public StringWithCharLimit256 $resource_type;

  public function __construct(shape(
  ?'resource_id' => StringWithCharLimit1024,
  ?'resource_type' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type RemediationExceptionResourceKeys = vec<RemediationExceptionResourceKey>;

type RemediationExceptions = vec<RemediationException>;

type RemediationExecutionState = string;

class RemediationExecutionStatus {
  public Date $invocation_time;
  public Date $last_updated_time;
  public ResourceKey $resource_key;
  public RemediationExecutionState $state;
  public RemediationExecutionSteps $step_details;

  public function __construct(shape(
  ?'invocation_time' => Date,
  ?'last_updated_time' => Date,
  ?'resource_key' => ResourceKey,
  ?'state' => RemediationExecutionState,
  ?'step_details' => RemediationExecutionSteps,
  ) $s = shape()) {
    $this->invocation_time = $invocation_time ?? ;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->resource_key = $resource_key ?? null;
    $this->state = $state ?? ;
    $this->step_details = $step_details ?? ;
  }
}

type RemediationExecutionStatuses = vec<RemediationExecutionStatus>;

class RemediationExecutionStep {
  public string $error_message;
  public string $name;
  public Date $start_time;
  public RemediationExecutionStepState $state;
  public Date $stop_time;

  public function __construct(shape(
  ?'error_message' => string,
  ?'name' => string,
  ?'start_time' => Date,
  ?'state' => RemediationExecutionStepState,
  ?'stop_time' => Date,
  ) $s = shape()) {
    $this->error_message = $error_message ?? ;
    $this->name = $name ?? "";
    $this->start_time = $start_time ?? ;
    $this->state = $state ?? ;
    $this->stop_time = $stop_time ?? ;
  }
}

type RemediationExecutionStepState = string;

type RemediationExecutionSteps = vec<RemediationExecutionStep>;

class RemediationInProgressException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemediationParameterValue {
  public ResourceValue $resource_value;
  public StaticValue $static_value;

  public function __construct(shape(
  ?'resource_value' => ResourceValue,
  ?'static_value' => StaticValue,
  ) $s = shape()) {
    $this->resource_value = $resource_value ?? null;
    $this->static_value = $static_value ?? null;
  }
}

type RemediationParameters = dict<StringWithCharLimit256, RemediationParameterValue>;

type RemediationTargetType = string;

class ResourceCount {
  public Long $count;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'count' => Long,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->count = $count ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

class ResourceCountFilters {
  public AccountId $account_id;
  public AwsRegion $region;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'region' => AwsRegion,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->region = $region ?? ;
    $this->resource_type = $resource_type ?? "";
  }
}

type ResourceCountGroupKey = string;

type ResourceCounts = vec<ResourceCount>;

type ResourceCreationTime = int;

type ResourceDeletionTime = int;

class ResourceFilters {
  public AccountId $account_id;
  public AwsRegion $region;
  public ResourceId $resource_id;
  public ResourceName $resource_name;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'region' => AwsRegion,
  ?'resource_id' => ResourceId,
  ?'resource_name' => ResourceName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->region = $region ?? ;
    $this->resource_id = $resource_id ?? "";
    $this->resource_name = $resource_name ?? "";
  }
}

type ResourceId = string;

type ResourceIdList = vec<ResourceId>;

class ResourceIdentifier {
  public ResourceDeletionTime $resource_deletion_time;
  public ResourceId $resource_id;
  public ResourceName $resource_name;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'resource_deletion_time' => ResourceDeletionTime,
  ?'resource_id' => ResourceId,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->resource_deletion_time = $resource_deletion_time ?? ;
    $this->resource_id = $resource_id ?? ;
    $this->resource_name = $resource_name ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

type ResourceIdentifierList = vec<ResourceIdentifier>;

type ResourceIdentifiersList = vec<AggregateResourceIdentifier>;

class ResourceInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceKey {
  public ResourceId $resource_id;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

type ResourceKeys = vec<ResourceKey>;

type ResourceName = string;

class ResourceNotDiscoveredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ResourceType = string;

type ResourceTypeList = vec<ResourceType>;

type ResourceTypeString = string;

type ResourceTypes = vec<StringWithCharLimit256>;

type ResourceTypesScope = vec<StringWithCharLimit256>;

class ResourceValue {
  public ResourceValueType $value;

  public function __construct(shape(
  ?'value' => ResourceValueType,
  ) $s = shape()) {
    $this->value = $value ?? "";
  }
}

type ResourceValueType = string;

type Results = vec<String>;

class RetentionConfiguration {
  public RetentionConfigurationName $name;
  public RetentionPeriodInDays $retention_period_in_days;

  public function __construct(shape(
  ?'name' => RetentionConfigurationName,
  ?'retention_period_in_days' => RetentionPeriodInDays,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->retention_period_in_days = $retention_period_in_days ?? 0;
  }
}

type RetentionConfigurationList = vec<RetentionConfiguration>;

type RetentionConfigurationName = string;

type RetentionConfigurationNameList = vec<RetentionConfigurationName>;

type RetentionPeriodInDays = int;

type RuleLimit = int;

type SchemaVersionId = string;

class Scope {
  public BaseResourceId $compliance_resource_id;
  public ComplianceResourceTypes $compliance_resource_types;
  public StringWithCharLimit128 $tag_key;
  public StringWithCharLimit256 $tag_value;

  public function __construct(shape(
  ?'compliance_resource_id' => BaseResourceId,
  ?'compliance_resource_types' => ComplianceResourceTypes,
  ?'tag_key' => StringWithCharLimit128,
  ?'tag_value' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->compliance_resource_id = $compliance_resource_id ?? ;
    $this->compliance_resource_types = $compliance_resource_types ?? [];
    $this->tag_key = $tag_key ?? "";
    $this->tag_value = $tag_value ?? "";
  }
}

class SelectAggregateResourceConfigRequest {
  public ConfigurationAggregatorName $configuration_aggregator_name;
  public Expression $expression;
  public Limit $limit;
  public Limit $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'configuration_aggregator_name' => ConfigurationAggregatorName,
  ?'expression' => Expression,
  ?'limit' => Limit,
  ?'max_results' => Limit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->configuration_aggregator_name = $configuration_aggregator_name ?? "";
    $this->expression = $expression ?? "";
    $this->limit = $limit ?? 0;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class SelectAggregateResourceConfigResponse {
  public NextToken $next_token;
  public QueryInfo $query_info;
  public Results $results;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'query_info' => QueryInfo,
  ?'results' => Results,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->query_info = $query_info ?? null;
    $this->results = $results ?? [];
  }
}

class SelectResourceConfigRequest {
  public Expression $expression;
  public Limit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'expression' => Expression,
  ?'limit' => Limit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->expression = $expression ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class SelectResourceConfigResponse {
  public NextToken $next_token;
  public QueryInfo $query_info;
  public Results $results;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'query_info' => QueryInfo,
  ?'results' => Results,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->query_info = $query_info ?? null;
    $this->results = $results ?? [];
  }
}

class Source {
  public Owner $owner;
  public SourceDetails $source_details;
  public StringWithCharLimit256 $source_identifier;

  public function __construct(shape(
  ?'owner' => Owner,
  ?'source_details' => SourceDetails,
  ?'source_identifier' => StringWithCharLimit256,
  ) $s = shape()) {
    $this->owner = $owner ?? "";
    $this->source_details = $source_details ?? [];
    $this->source_identifier = $source_identifier ?? ;
  }
}

class SourceDetail {
  public EventSource $event_source;
  public MaximumExecutionFrequency $maximum_execution_frequency;
  public MessageType $message_type;

  public function __construct(shape(
  ?'event_source' => EventSource,
  ?'maximum_execution_frequency' => MaximumExecutionFrequency,
  ?'message_type' => MessageType,
  ) $s = shape()) {
    $this->event_source = $event_source ?? "";
    $this->maximum_execution_frequency = $maximum_execution_frequency ?? "";
    $this->message_type = $message_type ?? "";
  }
}

type SourceDetails = vec<SourceDetail>;

class SsmControls {
  public Percentage $concurrent_execution_rate_percentage;
  public Percentage $error_percentage;

  public function __construct(shape(
  ?'concurrent_execution_rate_percentage' => Percentage,
  ?'error_percentage' => Percentage,
  ) $s = shape()) {
    $this->concurrent_execution_rate_percentage = $concurrent_execution_rate_percentage ?? ;
    $this->error_percentage = $error_percentage ?? ;
  }
}

type StackArn = string;

class StartConfigRulesEvaluationRequest {
  public ReevaluateConfigRuleNames $config_rule_names;

  public function __construct(shape(
  ?'config_rule_names' => ReevaluateConfigRuleNames,
  ) $s = shape()) {
    $this->config_rule_names = $config_rule_names ?? [];
  }
}

class StartConfigRulesEvaluationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartConfigurationRecorderRequest {
  public RecorderName $configuration_recorder_name;

  public function __construct(shape(
  ?'configuration_recorder_name' => RecorderName,
  ) $s = shape()) {
    $this->configuration_recorder_name = $configuration_recorder_name ?? ;
  }
}

class StartRemediationExecutionRequest {
  public ConfigRuleName $config_rule_name;
  public ResourceKeys $resource_keys;

  public function __construct(shape(
  ?'config_rule_name' => ConfigRuleName,
  ?'resource_keys' => ResourceKeys,
  ) $s = shape()) {
    $this->config_rule_name = $config_rule_name ?? "";
    $this->resource_keys = $resource_keys ?? [];
  }
}

class StartRemediationExecutionResponse {
  public ResourceKeys $failed_items;
  public string $failure_message;

  public function __construct(shape(
  ?'failed_items' => ResourceKeys,
  ?'failure_message' => string,
  ) $s = shape()) {
    $this->failed_items = $failed_items ?? ;
    $this->failure_message = $failure_message ?? ;
  }
}

type StaticParameterValues = vec<StringWithCharLimit256>;

class StaticValue {
  public StaticParameterValues $values;

  public function __construct(shape(
  ?'values' => StaticParameterValues,
  ) $s = shape()) {
    $this->values = $values ?? ;
  }
}

class StatusDetailFilters {
  public AccountId $account_id;
  public MemberAccountRuleStatus $member_account_rule_status;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'member_account_rule_status' => MemberAccountRuleStatus,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->member_account_rule_status = $member_account_rule_status ?? "";
  }
}

class StopConfigurationRecorderRequest {
  public RecorderName $configuration_recorder_name;

  public function __construct(shape(
  ?'configuration_recorder_name' => RecorderName,
  ) $s = shape()) {
    $this->configuration_recorder_name = $configuration_recorder_name ?? ;
  }
}

type String = string;

type StringWithCharLimit1024 = string;

type StringWithCharLimit128 = string;

type StringWithCharLimit2048 = string;

type StringWithCharLimit256 = string;

type StringWithCharLimit256Min0 = string;

type StringWithCharLimit64 = string;

type StringWithCharLimit768 = string;

type SupplementaryConfiguration = dict<SupplementaryConfigurationName, SupplementaryConfigurationValue>;

type SupplementaryConfigurationName = string;

type SupplementaryConfigurationValue = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? [];
  }
}

type TagValue = string;

type Tags = dict<Name, Value>;

type TagsList = vec<Tag>;

type TemplateBody = string;

type TemplateS3Uri = string;

class TooManyTagsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UnprocessedResourceIdentifierList = vec<AggregateResourceIdentifier>;

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class ValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Value = string;

type Version = string;

