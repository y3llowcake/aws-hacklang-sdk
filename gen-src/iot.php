<?hh // strict
namespace slack\aws\iot;

interface IoT {
  public function AcceptCertificateTransfer(AcceptCertificateTransferRequest): Awaitable<Errors\Error>;
  public function AddThingToBillingGroup(AddThingToBillingGroupRequest): Awaitable<Errors\Result<AddThingToBillingGroupResponse>>;
  public function AddThingToThingGroup(AddThingToThingGroupRequest): Awaitable<Errors\Result<AddThingToThingGroupResponse>>;
  public function AssociateTargetsWithJob(AssociateTargetsWithJobRequest): Awaitable<Errors\Result<AssociateTargetsWithJobResponse>>;
  public function AttachPolicy(AttachPolicyRequest): Awaitable<Errors\Error>;
  public function AttachPrincipalPolicy(AttachPrincipalPolicyRequest): Awaitable<Errors\Error>;
  public function AttachSecurityProfile(AttachSecurityProfileRequest): Awaitable<Errors\Result<AttachSecurityProfileResponse>>;
  public function AttachThingPrincipal(AttachThingPrincipalRequest): Awaitable<Errors\Result<AttachThingPrincipalResponse>>;
  public function CancelAuditMitigationActionsTask(CancelAuditMitigationActionsTaskRequest): Awaitable<Errors\Result<CancelAuditMitigationActionsTaskResponse>>;
  public function CancelAuditTask(CancelAuditTaskRequest): Awaitable<Errors\Result<CancelAuditTaskResponse>>;
  public function CancelCertificateTransfer(CancelCertificateTransferRequest): Awaitable<Errors\Error>;
  public function CancelJob(CancelJobRequest): Awaitable<Errors\Result<CancelJobResponse>>;
  public function CancelJobExecution(CancelJobExecutionRequest): Awaitable<Errors\Error>;
  public function ClearDefaultAuthorizer(ClearDefaultAuthorizerRequest): Awaitable<Errors\Result<ClearDefaultAuthorizerResponse>>;
  public function ConfirmTopicRuleDestination(ConfirmTopicRuleDestinationRequest): Awaitable<Errors\Result<ConfirmTopicRuleDestinationResponse>>;
  public function CreateAuthorizer(CreateAuthorizerRequest): Awaitable<Errors\Result<CreateAuthorizerResponse>>;
  public function CreateBillingGroup(CreateBillingGroupRequest): Awaitable<Errors\Result<CreateBillingGroupResponse>>;
  public function CreateCertificateFromCsr(CreateCertificateFromCsrRequest): Awaitable<Errors\Result<CreateCertificateFromCsrResponse>>;
  public function CreateDimension(CreateDimensionRequest): Awaitable<Errors\Result<CreateDimensionResponse>>;
  public function CreateDomainConfiguration(CreateDomainConfigurationRequest): Awaitable<Errors\Result<CreateDomainConfigurationResponse>>;
  public function CreateDynamicThingGroup(CreateDynamicThingGroupRequest): Awaitable<Errors\Result<CreateDynamicThingGroupResponse>>;
  public function CreateJob(CreateJobRequest): Awaitable<Errors\Result<CreateJobResponse>>;
  public function CreateKeysAndCertificate(CreateKeysAndCertificateRequest): Awaitable<Errors\Result<CreateKeysAndCertificateResponse>>;
  public function CreateMitigationAction(CreateMitigationActionRequest): Awaitable<Errors\Result<CreateMitigationActionResponse>>;
  public function CreateOTAUpdate(CreateOTAUpdateRequest): Awaitable<Errors\Result<CreateOTAUpdateResponse>>;
  public function CreatePolicy(CreatePolicyRequest): Awaitable<Errors\Result<CreatePolicyResponse>>;
  public function CreatePolicyVersion(CreatePolicyVersionRequest): Awaitable<Errors\Result<CreatePolicyVersionResponse>>;
  public function CreateProvisioningClaim(CreateProvisioningClaimRequest): Awaitable<Errors\Result<CreateProvisioningClaimResponse>>;
  public function CreateProvisioningTemplate(CreateProvisioningTemplateRequest): Awaitable<Errors\Result<CreateProvisioningTemplateResponse>>;
  public function CreateProvisioningTemplateVersion(CreateProvisioningTemplateVersionRequest): Awaitable<Errors\Result<CreateProvisioningTemplateVersionResponse>>;
  public function CreateRoleAlias(CreateRoleAliasRequest): Awaitable<Errors\Result<CreateRoleAliasResponse>>;
  public function CreateScheduledAudit(CreateScheduledAuditRequest): Awaitable<Errors\Result<CreateScheduledAuditResponse>>;
  public function CreateSecurityProfile(CreateSecurityProfileRequest): Awaitable<Errors\Result<CreateSecurityProfileResponse>>;
  public function CreateStream(CreateStreamRequest): Awaitable<Errors\Result<CreateStreamResponse>>;
  public function CreateThing(CreateThingRequest): Awaitable<Errors\Result<CreateThingResponse>>;
  public function CreateThingGroup(CreateThingGroupRequest): Awaitable<Errors\Result<CreateThingGroupResponse>>;
  public function CreateThingType(CreateThingTypeRequest): Awaitable<Errors\Result<CreateThingTypeResponse>>;
  public function CreateTopicRule(CreateTopicRuleRequest): Awaitable<Errors\Error>;
  public function CreateTopicRuleDestination(CreateTopicRuleDestinationRequest): Awaitable<Errors\Result<CreateTopicRuleDestinationResponse>>;
  public function DeleteAccountAuditConfiguration(DeleteAccountAuditConfigurationRequest): Awaitable<Errors\Result<DeleteAccountAuditConfigurationResponse>>;
  public function DeleteAuthorizer(DeleteAuthorizerRequest): Awaitable<Errors\Result<DeleteAuthorizerResponse>>;
  public function DeleteBillingGroup(DeleteBillingGroupRequest): Awaitable<Errors\Result<DeleteBillingGroupResponse>>;
  public function DeleteCACertificate(DeleteCACertificateRequest): Awaitable<Errors\Result<DeleteCACertificateResponse>>;
  public function DeleteCertificate(DeleteCertificateRequest): Awaitable<Errors\Error>;
  public function DeleteDimension(DeleteDimensionRequest): Awaitable<Errors\Result<DeleteDimensionResponse>>;
  public function DeleteDomainConfiguration(DeleteDomainConfigurationRequest): Awaitable<Errors\Result<DeleteDomainConfigurationResponse>>;
  public function DeleteDynamicThingGroup(DeleteDynamicThingGroupRequest): Awaitable<Errors\Result<DeleteDynamicThingGroupResponse>>;
  public function DeleteJob(DeleteJobRequest): Awaitable<Errors\Error>;
  public function DeleteJobExecution(DeleteJobExecutionRequest): Awaitable<Errors\Error>;
  public function DeleteMitigationAction(DeleteMitigationActionRequest): Awaitable<Errors\Result<DeleteMitigationActionResponse>>;
  public function DeleteOTAUpdate(DeleteOTAUpdateRequest): Awaitable<Errors\Result<DeleteOTAUpdateResponse>>;
  public function DeletePolicy(DeletePolicyRequest): Awaitable<Errors\Error>;
  public function DeletePolicyVersion(DeletePolicyVersionRequest): Awaitable<Errors\Error>;
  public function DeleteProvisioningTemplate(DeleteProvisioningTemplateRequest): Awaitable<Errors\Result<DeleteProvisioningTemplateResponse>>;
  public function DeleteProvisioningTemplateVersion(DeleteProvisioningTemplateVersionRequest): Awaitable<Errors\Result<DeleteProvisioningTemplateVersionResponse>>;
  public function DeleteRegistrationCode(DeleteRegistrationCodeRequest): Awaitable<Errors\Result<DeleteRegistrationCodeResponse>>;
  public function DeleteRoleAlias(DeleteRoleAliasRequest): Awaitable<Errors\Result<DeleteRoleAliasResponse>>;
  public function DeleteScheduledAudit(DeleteScheduledAuditRequest): Awaitable<Errors\Result<DeleteScheduledAuditResponse>>;
  public function DeleteSecurityProfile(DeleteSecurityProfileRequest): Awaitable<Errors\Result<DeleteSecurityProfileResponse>>;
  public function DeleteStream(DeleteStreamRequest): Awaitable<Errors\Result<DeleteStreamResponse>>;
  public function DeleteThing(DeleteThingRequest): Awaitable<Errors\Result<DeleteThingResponse>>;
  public function DeleteThingGroup(DeleteThingGroupRequest): Awaitable<Errors\Result<DeleteThingGroupResponse>>;
  public function DeleteThingType(DeleteThingTypeRequest): Awaitable<Errors\Result<DeleteThingTypeResponse>>;
  public function DeleteTopicRule(DeleteTopicRuleRequest): Awaitable<Errors\Error>;
  public function DeleteTopicRuleDestination(DeleteTopicRuleDestinationRequest): Awaitable<Errors\Result<DeleteTopicRuleDestinationResponse>>;
  public function DeleteV2LoggingLevel(DeleteV2LoggingLevelRequest): Awaitable<Errors\Error>;
  public function DeprecateThingType(DeprecateThingTypeRequest): Awaitable<Errors\Result<DeprecateThingTypeResponse>>;
  public function DescribeAccountAuditConfiguration(DescribeAccountAuditConfigurationRequest): Awaitable<Errors\Result<DescribeAccountAuditConfigurationResponse>>;
  public function DescribeAuditFinding(DescribeAuditFindingRequest): Awaitable<Errors\Result<DescribeAuditFindingResponse>>;
  public function DescribeAuditMitigationActionsTask(DescribeAuditMitigationActionsTaskRequest): Awaitable<Errors\Result<DescribeAuditMitigationActionsTaskResponse>>;
  public function DescribeAuditTask(DescribeAuditTaskRequest): Awaitable<Errors\Result<DescribeAuditTaskResponse>>;
  public function DescribeAuthorizer(DescribeAuthorizerRequest): Awaitable<Errors\Result<DescribeAuthorizerResponse>>;
  public function DescribeBillingGroup(DescribeBillingGroupRequest): Awaitable<Errors\Result<DescribeBillingGroupResponse>>;
  public function DescribeCACertificate(DescribeCACertificateRequest): Awaitable<Errors\Result<DescribeCACertificateResponse>>;
  public function DescribeCertificate(DescribeCertificateRequest): Awaitable<Errors\Result<DescribeCertificateResponse>>;
  public function DescribeDefaultAuthorizer(DescribeDefaultAuthorizerRequest): Awaitable<Errors\Result<DescribeDefaultAuthorizerResponse>>;
  public function DescribeDimension(DescribeDimensionRequest): Awaitable<Errors\Result<DescribeDimensionResponse>>;
  public function DescribeDomainConfiguration(DescribeDomainConfigurationRequest): Awaitable<Errors\Result<DescribeDomainConfigurationResponse>>;
  public function DescribeEndpoint(DescribeEndpointRequest): Awaitable<Errors\Result<DescribeEndpointResponse>>;
  public function DescribeEventConfigurations(DescribeEventConfigurationsRequest): Awaitable<Errors\Result<DescribeEventConfigurationsResponse>>;
  public function DescribeIndex(DescribeIndexRequest): Awaitable<Errors\Result<DescribeIndexResponse>>;
  public function DescribeJob(DescribeJobRequest): Awaitable<Errors\Result<DescribeJobResponse>>;
  public function DescribeJobExecution(DescribeJobExecutionRequest): Awaitable<Errors\Result<DescribeJobExecutionResponse>>;
  public function DescribeMitigationAction(DescribeMitigationActionRequest): Awaitable<Errors\Result<DescribeMitigationActionResponse>>;
  public function DescribeProvisioningTemplate(DescribeProvisioningTemplateRequest): Awaitable<Errors\Result<DescribeProvisioningTemplateResponse>>;
  public function DescribeProvisioningTemplateVersion(DescribeProvisioningTemplateVersionRequest): Awaitable<Errors\Result<DescribeProvisioningTemplateVersionResponse>>;
  public function DescribeRoleAlias(DescribeRoleAliasRequest): Awaitable<Errors\Result<DescribeRoleAliasResponse>>;
  public function DescribeScheduledAudit(DescribeScheduledAuditRequest): Awaitable<Errors\Result<DescribeScheduledAuditResponse>>;
  public function DescribeSecurityProfile(DescribeSecurityProfileRequest): Awaitable<Errors\Result<DescribeSecurityProfileResponse>>;
  public function DescribeStream(DescribeStreamRequest): Awaitable<Errors\Result<DescribeStreamResponse>>;
  public function DescribeThing(DescribeThingRequest): Awaitable<Errors\Result<DescribeThingResponse>>;
  public function DescribeThingGroup(DescribeThingGroupRequest): Awaitable<Errors\Result<DescribeThingGroupResponse>>;
  public function DescribeThingRegistrationTask(DescribeThingRegistrationTaskRequest): Awaitable<Errors\Result<DescribeThingRegistrationTaskResponse>>;
  public function DescribeThingType(DescribeThingTypeRequest): Awaitable<Errors\Result<DescribeThingTypeResponse>>;
  public function DetachPolicy(DetachPolicyRequest): Awaitable<Errors\Error>;
  public function DetachPrincipalPolicy(DetachPrincipalPolicyRequest): Awaitable<Errors\Error>;
  public function DetachSecurityProfile(DetachSecurityProfileRequest): Awaitable<Errors\Result<DetachSecurityProfileResponse>>;
  public function DetachThingPrincipal(DetachThingPrincipalRequest): Awaitable<Errors\Result<DetachThingPrincipalResponse>>;
  public function DisableTopicRule(DisableTopicRuleRequest): Awaitable<Errors\Error>;
  public function EnableTopicRule(EnableTopicRuleRequest): Awaitable<Errors\Error>;
  public function GetCardinality(GetCardinalityRequest): Awaitable<Errors\Result<GetCardinalityResponse>>;
  public function GetEffectivePolicies(GetEffectivePoliciesRequest): Awaitable<Errors\Result<GetEffectivePoliciesResponse>>;
  public function GetIndexingConfiguration(GetIndexingConfigurationRequest): Awaitable<Errors\Result<GetIndexingConfigurationResponse>>;
  public function GetJobDocument(GetJobDocumentRequest): Awaitable<Errors\Result<GetJobDocumentResponse>>;
  public function GetLoggingOptions(GetLoggingOptionsRequest): Awaitable<Errors\Result<GetLoggingOptionsResponse>>;
  public function GetOTAUpdate(GetOTAUpdateRequest): Awaitable<Errors\Result<GetOTAUpdateResponse>>;
  public function GetPercentiles(GetPercentilesRequest): Awaitable<Errors\Result<GetPercentilesResponse>>;
  public function GetPolicy(GetPolicyRequest): Awaitable<Errors\Result<GetPolicyResponse>>;
  public function GetPolicyVersion(GetPolicyVersionRequest): Awaitable<Errors\Result<GetPolicyVersionResponse>>;
  public function GetRegistrationCode(GetRegistrationCodeRequest): Awaitable<Errors\Result<GetRegistrationCodeResponse>>;
  public function GetStatistics(GetStatisticsRequest): Awaitable<Errors\Result<GetStatisticsResponse>>;
  public function GetTopicRule(GetTopicRuleRequest): Awaitable<Errors\Result<GetTopicRuleResponse>>;
  public function GetTopicRuleDestination(GetTopicRuleDestinationRequest): Awaitable<Errors\Result<GetTopicRuleDestinationResponse>>;
  public function GetV2LoggingOptions(GetV2LoggingOptionsRequest): Awaitable<Errors\Result<GetV2LoggingOptionsResponse>>;
  public function ListActiveViolations(ListActiveViolationsRequest): Awaitable<Errors\Result<ListActiveViolationsResponse>>;
  public function ListAttachedPolicies(ListAttachedPoliciesRequest): Awaitable<Errors\Result<ListAttachedPoliciesResponse>>;
  public function ListAuditFindings(ListAuditFindingsRequest): Awaitable<Errors\Result<ListAuditFindingsResponse>>;
  public function ListAuditMitigationActionsExecutions(ListAuditMitigationActionsExecutionsRequest): Awaitable<Errors\Result<ListAuditMitigationActionsExecutionsResponse>>;
  public function ListAuditMitigationActionsTasks(ListAuditMitigationActionsTasksRequest): Awaitable<Errors\Result<ListAuditMitigationActionsTasksResponse>>;
  public function ListAuditTasks(ListAuditTasksRequest): Awaitable<Errors\Result<ListAuditTasksResponse>>;
  public function ListAuthorizers(ListAuthorizersRequest): Awaitable<Errors\Result<ListAuthorizersResponse>>;
  public function ListBillingGroups(ListBillingGroupsRequest): Awaitable<Errors\Result<ListBillingGroupsResponse>>;
  public function ListCACertificates(ListCACertificatesRequest): Awaitable<Errors\Result<ListCACertificatesResponse>>;
  public function ListCertificates(ListCertificatesRequest): Awaitable<Errors\Result<ListCertificatesResponse>>;
  public function ListCertificatesByCA(ListCertificatesByCARequest): Awaitable<Errors\Result<ListCertificatesByCAResponse>>;
  public function ListDimensions(ListDimensionsRequest): Awaitable<Errors\Result<ListDimensionsResponse>>;
  public function ListDomainConfigurations(ListDomainConfigurationsRequest): Awaitable<Errors\Result<ListDomainConfigurationsResponse>>;
  public function ListIndices(ListIndicesRequest): Awaitable<Errors\Result<ListIndicesResponse>>;
  public function ListJobExecutionsForJob(ListJobExecutionsForJobRequest): Awaitable<Errors\Result<ListJobExecutionsForJobResponse>>;
  public function ListJobExecutionsForThing(ListJobExecutionsForThingRequest): Awaitable<Errors\Result<ListJobExecutionsForThingResponse>>;
  public function ListJobs(ListJobsRequest): Awaitable<Errors\Result<ListJobsResponse>>;
  public function ListMitigationActions(ListMitigationActionsRequest): Awaitable<Errors\Result<ListMitigationActionsResponse>>;
  public function ListOTAUpdates(ListOTAUpdatesRequest): Awaitable<Errors\Result<ListOTAUpdatesResponse>>;
  public function ListOutgoingCertificates(ListOutgoingCertificatesRequest): Awaitable<Errors\Result<ListOutgoingCertificatesResponse>>;
  public function ListPolicies(ListPoliciesRequest): Awaitable<Errors\Result<ListPoliciesResponse>>;
  public function ListPolicyPrincipals(ListPolicyPrincipalsRequest): Awaitable<Errors\Result<ListPolicyPrincipalsResponse>>;
  public function ListPolicyVersions(ListPolicyVersionsRequest): Awaitable<Errors\Result<ListPolicyVersionsResponse>>;
  public function ListPrincipalPolicies(ListPrincipalPoliciesRequest): Awaitable<Errors\Result<ListPrincipalPoliciesResponse>>;
  public function ListPrincipalThings(ListPrincipalThingsRequest): Awaitable<Errors\Result<ListPrincipalThingsResponse>>;
  public function ListProvisioningTemplateVersions(ListProvisioningTemplateVersionsRequest): Awaitable<Errors\Result<ListProvisioningTemplateVersionsResponse>>;
  public function ListProvisioningTemplates(ListProvisioningTemplatesRequest): Awaitable<Errors\Result<ListProvisioningTemplatesResponse>>;
  public function ListRoleAliases(ListRoleAliasesRequest): Awaitable<Errors\Result<ListRoleAliasesResponse>>;
  public function ListScheduledAudits(ListScheduledAuditsRequest): Awaitable<Errors\Result<ListScheduledAuditsResponse>>;
  public function ListSecurityProfiles(ListSecurityProfilesRequest): Awaitable<Errors\Result<ListSecurityProfilesResponse>>;
  public function ListSecurityProfilesForTarget(ListSecurityProfilesForTargetRequest): Awaitable<Errors\Result<ListSecurityProfilesForTargetResponse>>;
  public function ListStreams(ListStreamsRequest): Awaitable<Errors\Result<ListStreamsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTargetsForPolicy(ListTargetsForPolicyRequest): Awaitable<Errors\Result<ListTargetsForPolicyResponse>>;
  public function ListTargetsForSecurityProfile(ListTargetsForSecurityProfileRequest): Awaitable<Errors\Result<ListTargetsForSecurityProfileResponse>>;
  public function ListThingGroups(ListThingGroupsRequest): Awaitable<Errors\Result<ListThingGroupsResponse>>;
  public function ListThingGroupsForThing(ListThingGroupsForThingRequest): Awaitable<Errors\Result<ListThingGroupsForThingResponse>>;
  public function ListThingPrincipals(ListThingPrincipalsRequest): Awaitable<Errors\Result<ListThingPrincipalsResponse>>;
  public function ListThingRegistrationTaskReports(ListThingRegistrationTaskReportsRequest): Awaitable<Errors\Result<ListThingRegistrationTaskReportsResponse>>;
  public function ListThingRegistrationTasks(ListThingRegistrationTasksRequest): Awaitable<Errors\Result<ListThingRegistrationTasksResponse>>;
  public function ListThingTypes(ListThingTypesRequest): Awaitable<Errors\Result<ListThingTypesResponse>>;
  public function ListThings(ListThingsRequest): Awaitable<Errors\Result<ListThingsResponse>>;
  public function ListThingsInBillingGroup(ListThingsInBillingGroupRequest): Awaitable<Errors\Result<ListThingsInBillingGroupResponse>>;
  public function ListThingsInThingGroup(ListThingsInThingGroupRequest): Awaitable<Errors\Result<ListThingsInThingGroupResponse>>;
  public function ListTopicRuleDestinations(ListTopicRuleDestinationsRequest): Awaitable<Errors\Result<ListTopicRuleDestinationsResponse>>;
  public function ListTopicRules(ListTopicRulesRequest): Awaitable<Errors\Result<ListTopicRulesResponse>>;
  public function ListV2LoggingLevels(ListV2LoggingLevelsRequest): Awaitable<Errors\Result<ListV2LoggingLevelsResponse>>;
  public function ListViolationEvents(ListViolationEventsRequest): Awaitable<Errors\Result<ListViolationEventsResponse>>;
  public function RegisterCACertificate(RegisterCACertificateRequest): Awaitable<Errors\Result<RegisterCACertificateResponse>>;
  public function RegisterCertificate(RegisterCertificateRequest): Awaitable<Errors\Result<RegisterCertificateResponse>>;
  public function RegisterThing(RegisterThingRequest): Awaitable<Errors\Result<RegisterThingResponse>>;
  public function RejectCertificateTransfer(RejectCertificateTransferRequest): Awaitable<Errors\Error>;
  public function RemoveThingFromBillingGroup(RemoveThingFromBillingGroupRequest): Awaitable<Errors\Result<RemoveThingFromBillingGroupResponse>>;
  public function RemoveThingFromThingGroup(RemoveThingFromThingGroupRequest): Awaitable<Errors\Result<RemoveThingFromThingGroupResponse>>;
  public function ReplaceTopicRule(ReplaceTopicRuleRequest): Awaitable<Errors\Error>;
  public function SearchIndex(SearchIndexRequest): Awaitable<Errors\Result<SearchIndexResponse>>;
  public function SetDefaultAuthorizer(SetDefaultAuthorizerRequest): Awaitable<Errors\Result<SetDefaultAuthorizerResponse>>;
  public function SetDefaultPolicyVersion(SetDefaultPolicyVersionRequest): Awaitable<Errors\Error>;
  public function SetLoggingOptions(SetLoggingOptionsRequest): Awaitable<Errors\Error>;
  public function SetV2LoggingLevel(SetV2LoggingLevelRequest): Awaitable<Errors\Error>;
  public function SetV2LoggingOptions(SetV2LoggingOptionsRequest): Awaitable<Errors\Error>;
  public function StartAuditMitigationActionsTask(StartAuditMitigationActionsTaskRequest): Awaitable<Errors\Result<StartAuditMitigationActionsTaskResponse>>;
  public function StartOnDemandAuditTask(StartOnDemandAuditTaskRequest): Awaitable<Errors\Result<StartOnDemandAuditTaskResponse>>;
  public function StartThingRegistrationTask(StartThingRegistrationTaskRequest): Awaitable<Errors\Result<StartThingRegistrationTaskResponse>>;
  public function StopThingRegistrationTask(StopThingRegistrationTaskRequest): Awaitable<Errors\Result<StopThingRegistrationTaskResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function TestAuthorization(TestAuthorizationRequest): Awaitable<Errors\Result<TestAuthorizationResponse>>;
  public function TestInvokeAuthorizer(TestInvokeAuthorizerRequest): Awaitable<Errors\Result<TestInvokeAuthorizerResponse>>;
  public function TransferCertificate(TransferCertificateRequest): Awaitable<Errors\Result<TransferCertificateResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateAccountAuditConfiguration(UpdateAccountAuditConfigurationRequest): Awaitable<Errors\Result<UpdateAccountAuditConfigurationResponse>>;
  public function UpdateAuthorizer(UpdateAuthorizerRequest): Awaitable<Errors\Result<UpdateAuthorizerResponse>>;
  public function UpdateBillingGroup(UpdateBillingGroupRequest): Awaitable<Errors\Result<UpdateBillingGroupResponse>>;
  public function UpdateCACertificate(UpdateCACertificateRequest): Awaitable<Errors\Error>;
  public function UpdateCertificate(UpdateCertificateRequest): Awaitable<Errors\Error>;
  public function UpdateDimension(UpdateDimensionRequest): Awaitable<Errors\Result<UpdateDimensionResponse>>;
  public function UpdateDomainConfiguration(UpdateDomainConfigurationRequest): Awaitable<Errors\Result<UpdateDomainConfigurationResponse>>;
  public function UpdateDynamicThingGroup(UpdateDynamicThingGroupRequest): Awaitable<Errors\Result<UpdateDynamicThingGroupResponse>>;
  public function UpdateEventConfigurations(UpdateEventConfigurationsRequest): Awaitable<Errors\Result<UpdateEventConfigurationsResponse>>;
  public function UpdateIndexingConfiguration(UpdateIndexingConfigurationRequest): Awaitable<Errors\Result<UpdateIndexingConfigurationResponse>>;
  public function UpdateJob(UpdateJobRequest): Awaitable<Errors\Error>;
  public function UpdateMitigationAction(UpdateMitigationActionRequest): Awaitable<Errors\Result<UpdateMitigationActionResponse>>;
  public function UpdateProvisioningTemplate(UpdateProvisioningTemplateRequest): Awaitable<Errors\Result<UpdateProvisioningTemplateResponse>>;
  public function UpdateRoleAlias(UpdateRoleAliasRequest): Awaitable<Errors\Result<UpdateRoleAliasResponse>>;
  public function UpdateScheduledAudit(UpdateScheduledAuditRequest): Awaitable<Errors\Result<UpdateScheduledAuditResponse>>;
  public function UpdateSecurityProfile(UpdateSecurityProfileRequest): Awaitable<Errors\Result<UpdateSecurityProfileResponse>>;
  public function UpdateStream(UpdateStreamRequest): Awaitable<Errors\Result<UpdateStreamResponse>>;
  public function UpdateThing(UpdateThingRequest): Awaitable<Errors\Result<UpdateThingResponse>>;
  public function UpdateThingGroup(UpdateThingGroupRequest): Awaitable<Errors\Result<UpdateThingGroupResponse>>;
  public function UpdateThingGroupsForThing(UpdateThingGroupsForThingRequest): Awaitable<Errors\Result<UpdateThingGroupsForThingResponse>>;
  public function UpdateTopicRuleDestination(UpdateTopicRuleDestinationRequest): Awaitable<Errors\Result<UpdateTopicRuleDestinationResponse>>;
  public function ValidateSecurityProfileBehaviors(ValidateSecurityProfileBehaviorsRequest): Awaitable<Errors\Result<ValidateSecurityProfileBehaviorsResponse>>;
}

class AbortAction {
}

class AbortConfig {
  public AbortCriteriaList $criteria_list;
}

class AbortCriteria {
  public AbortAction $action;
  public JobExecutionFailureType $failure_type;
  public MinimumNumberOfExecutedThings $min_number_of_executed_things;
  public AbortThresholdPercentage $threshold_percentage;
}

class AbortCriteriaList {
}

class AbortThresholdPercentage {
}

class AcceptCertificateTransferRequest {
  public CertificateId $certificate_id;
  public SetAsActive $set_as_active;
}

class AcmCertificateArn {
}

class Action {
  public CloudwatchAlarmAction $cloudwatch_alarm;
  public CloudwatchLogsAction $cloudwatch_logs;
  public CloudwatchMetricAction $cloudwatch_metric;
  public DynamoDBAction $dynamo_db;
  public DynamoDBv2Action $dynamo_d_bv_2;
  public ElasticsearchAction $elasticsearch;
  public FirehoseAction $firehose;
  public HttpAction $http;
  public IotAnalyticsAction $iot_analytics;
  public IotEventsAction $iot_events;
  public IotSiteWiseAction $iot_site_wise;
  public KinesisAction $kinesis;
  public LambdaAction $lambda;
  public RepublishAction $republish;
  public S3Action $s_3;
  public SalesforceAction $salesforce;
  public SnsAction $sns;
  public SqsAction $sqs;
  public StepFunctionsAction $step_functions;
}

class ActionList {
}

class ActionType {
}

class ActiveViolation {
  public Behavior $behavior;
  public Timestamp $last_violation_time;
  public MetricValue $last_violation_value;
  public SecurityProfileName $security_profile_name;
  public DeviceDefenderThingName $thing_name;
  public ViolationId $violation_id;
  public Timestamp $violation_start_time;
}

class ActiveViolations {
}

class AddThingToBillingGroupRequest {
  public BillingGroupArn $billing_group_arn;
  public BillingGroupName $billing_group_name;
  public ThingArn $thing_arn;
  public ThingName $thing_name;
}

class AddThingToBillingGroupResponse {
}

class AddThingToThingGroupRequest {
  public OverrideDynamicGroups $override_dynamic_groups;
  public ThingArn $thing_arn;
  public ThingGroupArn $thing_group_arn;
  public ThingGroupName $thing_group_name;
  public ThingName $thing_name;
}

class AddThingToThingGroupResponse {
}

class AddThingsToThingGroupParams {
  public OverrideDynamicGroups $override_dynamic_groups;
  public ThingGroupNames $thing_group_names;
}

class AdditionalMetricsToRetainList {
}

class AdditionalMetricsToRetainV2List {
}

class AdditionalParameterMap {
}

class AggregationField {
}

class AlarmName {
}

class AlertTarget {
  public AlertTargetArn $alert_target_arn;
  public RoleArn $role_arn;
}

class AlertTargetArn {
}

class AlertTargetType {
}

class AlertTargets {
}

class AllowAuthorizerOverride {
}

class AllowAutoRegistration {
}

class Allowed {
  public Policies $policies;
}

class ApproximateSecondsBeforeTimedOut {
}

class AscendingOrder {
}

class AssetId {
}

class AssetPropertyAlias {
}

class AssetPropertyBooleanValue {
}

class AssetPropertyDoubleValue {
}

class AssetPropertyEntryId {
}

class AssetPropertyId {
}

class AssetPropertyIntegerValue {
}

class AssetPropertyOffsetInNanos {
}

class AssetPropertyQuality {
}

class AssetPropertyStringValue {
}

class AssetPropertyTimeInSeconds {
}

class AssetPropertyTimestamp {
  public AssetPropertyOffsetInNanos $offset_in_nanos;
  public AssetPropertyTimeInSeconds $time_in_seconds;
}

class AssetPropertyValue {
  public AssetPropertyQuality $quality;
  public AssetPropertyTimestamp $timestamp;
  public AssetPropertyVariant $value;
}

class AssetPropertyValueList {
}

class AssetPropertyVariant {
  public AssetPropertyBooleanValue $boolean_value;
  public AssetPropertyDoubleValue $double_value;
  public AssetPropertyIntegerValue $integer_value;
  public AssetPropertyStringValue $string_value;
}

class AssociateTargetsWithJobRequest {
  public Comment $comment;
  public JobId $job_id;
  public JobTargets $targets;
}

class AssociateTargetsWithJobResponse {
  public JobDescription $description;
  public JobArn $job_arn;
  public JobId $job_id;
}

class AttachPolicyRequest {
  public PolicyName $policy_name;
  public PolicyTarget $target;
}

class AttachPrincipalPolicyRequest {
  public PolicyName $policy_name;
  public Principal $principal;
}

class AttachSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
  public SecurityProfileTargetArn $security_profile_target_arn;
}

class AttachSecurityProfileResponse {
}

class AttachThingPrincipalRequest {
  public Principal $principal;
  public ThingName $thing_name;
}

class AttachThingPrincipalResponse {
}

class AttributeKey {
}

class AttributeName {
}

class AttributePayload {
  public Attributes $attributes;
  public Flag $merge;
}

class AttributeValue {
}

class Attributes {
}

class AttributesMap {
}

class AuditCheckConfiguration {
  public Enabled $enabled;
}

class AuditCheckConfigurations {
}

class AuditCheckDetails {
  public CheckCompliant $check_compliant;
  public AuditCheckRunStatus $check_run_status;
  public ErrorCode $error_code;
  public ErrorMessage $message;
  public NonCompliantResourcesCount $non_compliant_resources_count;
  public TotalResourcesCount $total_resources_count;
}

class AuditCheckName {
}

class AuditCheckRunStatus {
}

class AuditCheckToActionsMapping {
}

class AuditCheckToReasonCodeFilter {
}

class AuditDetails {
}

class AuditFinding {
  public AuditCheckName $check_name;
  public FindingId $finding_id;
  public Timestamp $finding_time;
  public NonCompliantResource $non_compliant_resource;
  public ReasonForNonCompliance $reason_for_non_compliance;
  public ReasonForNonComplianceCode $reason_for_non_compliance_code;
  public RelatedResources $related_resources;
  public AuditFindingSeverity $severity;
  public AuditTaskId $task_id;
  public Timestamp $task_start_time;
}

class AuditFindingSeverity {
}

class AuditFindings {
}

class AuditFrequency {
}

class AuditMitigationActionExecutionMetadata {
  public MitigationActionId $action_id;
  public MitigationActionName $action_name;
  public Timestamp $end_time;
  public ErrorCode $error_code;
  public FindingId $finding_id;
  public ErrorMessage $message;
  public Timestamp $start_time;
  public AuditMitigationActionsExecutionStatus $status;
  public AuditMitigationActionsTaskId $task_id;
}

class AuditMitigationActionExecutionMetadataList {
}

class AuditMitigationActionsExecutionStatus {
}

class AuditMitigationActionsTaskId {
}

class AuditMitigationActionsTaskMetadata {
  public Timestamp $start_time;
  public AuditMitigationActionsTaskId $task_id;
  public AuditMitigationActionsTaskStatus $task_status;
}

class AuditMitigationActionsTaskMetadataList {
}

class AuditMitigationActionsTaskStatistics {
}

class AuditMitigationActionsTaskStatus {
}

class AuditMitigationActionsTaskTarget {
  public AuditCheckToReasonCodeFilter $audit_check_to_reason_code_filter;
  public AuditTaskId $audit_task_id;
  public FindingIds $finding_ids;
}

class AuditNotificationTarget {
  public Enabled $enabled;
  public RoleArn $role_arn;
  public TargetArn $target_arn;
}

class AuditNotificationTargetConfigurations {
}

class AuditNotificationType {
}

class AuditTaskId {
}

class AuditTaskMetadata {
  public AuditTaskId $task_id;
  public AuditTaskStatus $task_status;
  public AuditTaskType $task_type;
}

class AuditTaskMetadataList {
}

class AuditTaskStatus {
}

class AuditTaskType {
}

class AuthDecision {
}

class AuthInfo {
  public ActionType $action_type;
  public Resources $resources;
}

class AuthInfos {
}

class AuthResult {
  public Allowed $allowed;
  public AuthDecision $auth_decision;
  public AuthInfo $auth_info;
  public Denied $denied;
  public MissingContextValues $missing_context_values;
}

class AuthResults {
}

class AuthorizerArn {
}

class AuthorizerConfig {
  public AllowAuthorizerOverride $allow_authorizer_override;
  public AuthorizerName $default_authorizer_name;
}

class AuthorizerDescription {
  public AuthorizerArn $authorizer_arn;
  public AuthorizerFunctionArn $authorizer_function_arn;
  public AuthorizerName $authorizer_name;
  public DateType $creation_date;
  public DateType $last_modified_date;
  public BooleanKey $signing_disabled;
  public AuthorizerStatus $status;
  public TokenKeyName $token_key_name;
  public PublicKeyMap $token_signing_public_keys;
}

class AuthorizerFunctionArn {
}

class AuthorizerName {
}

class AuthorizerStatus {
}

class AuthorizerSummary {
  public AuthorizerArn $authorizer_arn;
  public AuthorizerName $authorizer_name;
}

class Authorizers {
}

class AutoRegistrationStatus {
}

class Average {
}

class AwsAccountId {
}

class AwsArn {
}

class AwsIotJobArn {
}

class AwsIotJobId {
}

class AwsIotSqlVersion {
}

class AwsJobExecutionsRolloutConfig {
  public MaximumPerMinute $maximum_per_minute;
}

class AwsJobPresignedUrlConfig {
  public ExpiresInSeconds $expires_in_sec;
}

class Behavior {
  public BehaviorCriteria $criteria;
  public BehaviorMetric $metric;
  public MetricDimension $metric_dimension;
  public BehaviorName $name;
}

class BehaviorCriteria {
  public ComparisonOperator $comparison_operator;
  public ConsecutiveDatapointsToAlarm $consecutive_datapoints_to_alarm;
  public ConsecutiveDatapointsToClear $consecutive_datapoints_to_clear;
  public DurationSeconds $duration_seconds;
  public StatisticalThreshold $statistical_threshold;
  public MetricValue $value;
}

class BehaviorMetric {
}

class BehaviorName {
}

class Behaviors {
}

class BillingGroupArn {
}

class BillingGroupDescription {
}

class BillingGroupId {
}

class BillingGroupMetadata {
  public CreationDate $creation_date;
}

class BillingGroupName {
}

class BillingGroupNameAndArnList {
}

class BillingGroupProperties {
  public BillingGroupDescription $billing_group_description;
}

class Boolean {
}

class BooleanKey {
}

class BucketName {
}

class CACertificate {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public DateType $creation_date;
  public CACertificateStatus $status;
}

class CACertificateDescription {
  public AutoRegistrationStatus $auto_registration_status;
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public CertificatePem $certificate_pem;
  public DateType $creation_date;
  public CustomerVersion $customer_version;
  public GenerationId $generation_id;
  public DateType $last_modified_date;
  public AwsAccountId $owned_by;
  public CACertificateStatus $status;
  public CertificateValidity $validity;
}

class CACertificateStatus {
}

class CACertificateUpdateAction {
}

class CACertificates {
}

class CancelAuditMitigationActionsTaskRequest {
  public AuditMitigationActionsTaskId $task_id;
}

class CancelAuditMitigationActionsTaskResponse {
}

class CancelAuditTaskRequest {
  public AuditTaskId $task_id;
}

class CancelAuditTaskResponse {
}

class CancelCertificateTransferRequest {
  public CertificateId $certificate_id;
}

class CancelJobExecutionRequest {
  public ExpectedVersion $expected_version;
  public ForceFlag $force;
  public JobId $job_id;
  public DetailsMap $status_details;
  public ThingName $thing_name;
}

class CancelJobRequest {
  public Comment $comment;
  public ForceFlag $force;
  public JobId $job_id;
  public ReasonCode $reason_code;
}

class CancelJobResponse {
  public JobDescription $description;
  public JobArn $job_arn;
  public JobId $job_id;
}

class CanceledChecksCount {
}

class CanceledFindingsCount {
}

class CanceledThings {
}

class CannedAccessControlList {
}

class Certificate {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public DateType $creation_date;
  public CertificateStatus $status;
}

class CertificateArn {
}

class CertificateConflictException {
  public errorMessage $message;
}

class CertificateDescription {
  public CertificateId $ca_certificate_id;
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public CertificatePem $certificate_pem;
  public DateType $creation_date;
  public CustomerVersion $customer_version;
  public GenerationId $generation_id;
  public DateType $last_modified_date;
  public AwsAccountId $owned_by;
  public AwsAccountId $previous_owned_by;
  public CertificateStatus $status;
  public TransferData $transfer_data;
  public CertificateValidity $validity;
}

class CertificateId {
}

class CertificateName {
}

class CertificatePathOnDevice {
}

class CertificatePem {
}

class CertificateSigningRequest {
}

class CertificateStateException {
  public errorMessage $message;
}

class CertificateStatus {
}

class CertificateValidationException {
  public errorMessage $message;
}

class CertificateValidity {
  public DateType $not_after;
  public DateType $not_before;
}

class Certificates {
}

class ChannelName {
}

class CheckCompliant {
}

class Cidr {
}

class Cidrs {
}

class ClearDefaultAuthorizerRequest {
}

class ClearDefaultAuthorizerResponse {
}

class ClientId {
}

class ClientRequestToken {
}

class CloudwatchAlarmAction {
  public AlarmName $alarm_name;
  public AwsArn $role_arn;
  public StateReason $state_reason;
  public StateValue $state_value;
}

class CloudwatchLogsAction {
  public LogGroupName $log_group_name;
  public AwsArn $role_arn;
}

class CloudwatchMetricAction {
  public string $metric_name;
  public string $metric_namespace;
  public string $metric_timestamp;
  public string $metric_unit;
  public string $metric_value;
  public AwsArn $role_arn;
}

class Code {
}

class CodeSigning {
  public SigningJobId $aws_signer_job_id;
  public CustomCodeSigning $custom_code_signing;
  public StartSigningJobParameter $start_signing_job_parameter;
}

class CodeSigningCertificateChain {
  public CertificateName $certificate_name;
  public InlineDocument $inline_document;
}

class CodeSigningSignature {
  public Signature $inline_document;
}

class CognitoIdentityPoolId {
}

class Comment {
}

class ComparisonOperator {
}

class CompliantChecksCount {
}

class Configuration {
  public Enabled $enabled;
}

class ConfirmTopicRuleDestinationRequest {
  public ConfirmationToken $confirmation_token;
}

class ConfirmTopicRuleDestinationResponse {
}

class ConfirmationToken {
}

class ConflictingResourceUpdateException {
  public errorMessage $message;
}

class ConnectivityTimestamp {
}

class ConsecutiveDatapointsToAlarm {
}

class ConsecutiveDatapointsToClear {
}

class Count {
}

class CreateAuthorizerRequest {
  public AuthorizerFunctionArn $authorizer_function_arn;
  public AuthorizerName $authorizer_name;
  public BooleanKey $signing_disabled;
  public AuthorizerStatus $status;
  public TokenKeyName $token_key_name;
  public PublicKeyMap $token_signing_public_keys;
}

class CreateAuthorizerResponse {
  public AuthorizerArn $authorizer_arn;
  public AuthorizerName $authorizer_name;
}

class CreateBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public BillingGroupProperties $billing_group_properties;
  public TagList $tags;
}

class CreateBillingGroupResponse {
  public BillingGroupArn $billing_group_arn;
  public BillingGroupId $billing_group_id;
  public BillingGroupName $billing_group_name;
}

class CreateCertificateFromCsrRequest {
  public CertificateSigningRequest $certificate_signing_request;
  public SetAsActive $set_as_active;
}

class CreateCertificateFromCsrResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public CertificatePem $certificate_pem;
}

class CreateDimensionRequest {
  public ClientRequestToken $client_request_token;
  public DimensionName $name;
  public DimensionStringValues $string_values;
  public TagList $tags;
  public DimensionType $type;
}

class CreateDimensionResponse {
  public DimensionArn $arn;
  public DimensionName $name;
}

class CreateDomainConfigurationRequest {
  public AuthorizerConfig $authorizer_config;
  public DomainConfigurationName $domain_configuration_name;
  public DomainName $domain_name;
  public ServerCertificateArns $server_certificate_arns;
  public ServiceType $service_type;
  public AcmCertificateArn $validation_certificate_arn;
}

class CreateDomainConfigurationResponse {
  public DomainConfigurationArn $domain_configuration_arn;
  public DomainConfigurationName $domain_configuration_name;
}

class CreateDynamicThingGroupRequest {
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
  public TagList $tags;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;
}

class CreateDynamicThingGroupResponse {
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
  public ThingGroupArn $thing_group_arn;
  public ThingGroupId $thing_group_id;
  public ThingGroupName $thing_group_name;
}

class CreateJobRequest {
  public AbortConfig $abort_config;
  public JobDescription $description;
  public JobDocument $document;
  public JobDocumentSource $document_source;
  public JobExecutionsRolloutConfig $job_executions_rollout_config;
  public JobId $job_id;
  public PresignedUrlConfig $presigned_url_config;
  public TagList $tags;
  public TargetSelection $target_selection;
  public JobTargets $targets;
  public TimeoutConfig $timeout_config;
}

class CreateJobResponse {
  public JobDescription $description;
  public JobArn $job_arn;
  public JobId $job_id;
}

class CreateKeysAndCertificateRequest {
  public SetAsActive $set_as_active;
}

class CreateKeysAndCertificateResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public CertificatePem $certificate_pem;
  public KeyPair $key_pair;
}

class CreateMitigationActionRequest {
  public MitigationActionName $action_name;
  public MitigationActionParams $action_params;
  public RoleArn $role_arn;
  public TagList $tags;
}

class CreateMitigationActionResponse {
  public MitigationActionArn $action_arn;
  public MitigationActionId $action_id;
}

class CreateOTAUpdateRequest {
  public AdditionalParameterMap $additional_parameters;
  public AwsJobExecutionsRolloutConfig $aws_job_executions_rollout_config;
  public AwsJobPresignedUrlConfig $aws_job_presigned_url_config;
  public OTAUpdateDescription $description;
  public OTAUpdateFiles $files;
  public OTAUpdateId $ota_update_id;
  public Protocols $protocols;
  public RoleArn $role_arn;
  public TagList $tags;
  public TargetSelection $target_selection;
  public Targets $targets;
}

class CreateOTAUpdateResponse {
  public AwsIotJobArn $aws_iot_job_arn;
  public AwsIotJobId $aws_iot_job_id;
  public OTAUpdateArn $ota_update_arn;
  public OTAUpdateId $ota_update_id;
  public OTAUpdateStatus $ota_update_status;
}

class CreatePolicyRequest {
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
}

class CreatePolicyResponse {
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;
}

class CreatePolicyVersionRequest {
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
  public SetAsDefault $set_as_default;
}

class CreatePolicyVersionResponse {
  public IsDefaultVersion $is_default_version;
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyVersionId $policy_version_id;
}

class CreateProvisioningClaimRequest {
  public TemplateName $template_name;
}

class CreateProvisioningClaimResponse {
  public CertificateId $certificate_id;
  public CertificatePem $certificate_pem;
  public DateType $expiration;
  public KeyPair $key_pair;
}

class CreateProvisioningTemplateRequest {
  public TemplateDescription $description;
  public Enabled $enabled;
  public RoleArn $provisioning_role_arn;
  public TagList $tags;
  public TemplateBody $template_body;
  public TemplateName $template_name;
}

class CreateProvisioningTemplateResponse {
  public TemplateVersionId $default_version_id;
  public TemplateArn $template_arn;
  public TemplateName $template_name;
}

class CreateProvisioningTemplateVersionRequest {
  public SetAsDefault $set_as_default;
  public TemplateBody $template_body;
  public TemplateName $template_name;
}

class CreateProvisioningTemplateVersionResponse {
  public IsDefaultVersion $is_default_version;
  public TemplateArn $template_arn;
  public TemplateName $template_name;
  public TemplateVersionId $version_id;
}

class CreateRoleAliasRequest {
  public CredentialDurationSeconds $credential_duration_seconds;
  public RoleAlias $role_alias;
  public RoleArn $role_arn;
}

class CreateRoleAliasResponse {
  public RoleAlias $role_alias;
  public RoleAliasArn $role_alias_arn;
}

class CreateScheduledAuditRequest {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public AuditFrequency $frequency;
  public ScheduledAuditName $scheduled_audit_name;
  public TagList $tags;
  public TargetAuditCheckNames $target_check_names;
}

class CreateScheduledAuditResponse {
  public ScheduledAuditArn $scheduled_audit_arn;
}

class CreateSecurityProfileRequest {
  public AdditionalMetricsToRetainList $additional_metrics_to_retain;
  public AdditionalMetricsToRetainV2List $additional_metrics_to_retain_v_2;
  public AlertTargets $alert_targets;
  public Behaviors $behaviors;
  public SecurityProfileDescription $security_profile_description;
  public SecurityProfileName $security_profile_name;
  public TagList $tags;
}

class CreateSecurityProfileResponse {
  public SecurityProfileArn $security_profile_arn;
  public SecurityProfileName $security_profile_name;
}

class CreateStreamRequest {
  public StreamDescription $description;
  public StreamFiles $files;
  public RoleArn $role_arn;
  public StreamId $stream_id;
  public TagList $tags;
}

class CreateStreamResponse {
  public StreamDescription $description;
  public StreamArn $stream_arn;
  public StreamId $stream_id;
  public StreamVersion $stream_version;
}

class CreateThingGroupRequest {
  public ThingGroupName $parent_group_name;
  public TagList $tags;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;
}

class CreateThingGroupResponse {
  public ThingGroupArn $thing_group_arn;
  public ThingGroupId $thing_group_id;
  public ThingGroupName $thing_group_name;
}

class CreateThingRequest {
  public AttributePayload $attribute_payload;
  public BillingGroupName $billing_group_name;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;
}

class CreateThingResponse {
  public ThingArn $thing_arn;
  public ThingId $thing_id;
  public ThingName $thing_name;
}

class CreateThingTypeRequest {
  public TagList $tags;
  public ThingTypeName $thing_type_name;
  public ThingTypeProperties $thing_type_properties;
}

class CreateThingTypeResponse {
  public ThingTypeArn $thing_type_arn;
  public ThingTypeId $thing_type_id;
  public ThingTypeName $thing_type_name;
}

class CreateTopicRuleDestinationRequest {
  public TopicRuleDestinationConfiguration $destination_configuration;
}

class CreateTopicRuleDestinationResponse {
  public TopicRuleDestination $topic_rule_destination;
}

class CreateTopicRuleRequest {
  public RuleName $rule_name;
  public string $tags;
  public TopicRulePayload $topic_rule_payload;
}

class CreatedAtDate {
}

class CreationDate {
}

class CredentialDurationSeconds {
}

class CustomCodeSigning {
  public CodeSigningCertificateChain $certificate_chain;
  public HashAlgorithm $hash_algorithm;
  public CodeSigningSignature $signature;
  public SignatureAlgorithm $signature_algorithm;
}

class CustomerVersion {
}

class DateType {
}

class DayOfMonth {
}

class DayOfWeek {
}

class DeleteAccountAuditConfigurationRequest {
  public DeleteScheduledAudits $delete_scheduled_audits;
}

class DeleteAccountAuditConfigurationResponse {
}

class DeleteAdditionalMetricsToRetain {
}

class DeleteAlertTargets {
}

class DeleteAuthorizerRequest {
  public AuthorizerName $authorizer_name;
}

class DeleteAuthorizerResponse {
}

class DeleteBehaviors {
}

class DeleteBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public OptionalVersion $expected_version;
}

class DeleteBillingGroupResponse {
}

class DeleteCACertificateRequest {
  public CertificateId $certificate_id;
}

class DeleteCACertificateResponse {
}

class DeleteCertificateRequest {
  public CertificateId $certificate_id;
  public ForceDelete $force_delete;
}

class DeleteConflictException {
  public errorMessage $message;
}

class DeleteDimensionRequest {
  public DimensionName $name;
}

class DeleteDimensionResponse {
}

class DeleteDomainConfigurationRequest {
  public DomainConfigurationName $domain_configuration_name;
}

class DeleteDomainConfigurationResponse {
}

class DeleteDynamicThingGroupRequest {
  public OptionalVersion $expected_version;
  public ThingGroupName $thing_group_name;
}

class DeleteDynamicThingGroupResponse {
}

class DeleteJobExecutionRequest {
  public ExecutionNumber $execution_number;
  public ForceFlag $force;
  public JobId $job_id;
  public ThingName $thing_name;
}

class DeleteJobRequest {
  public ForceFlag $force;
  public JobId $job_id;
}

class DeleteMitigationActionRequest {
  public MitigationActionName $action_name;
}

class DeleteMitigationActionResponse {
}

class DeleteOTAUpdateRequest {
  public DeleteStream $delete_stream;
  public ForceDeleteAWSJob $force_delete_aws_job;
  public OTAUpdateId $ota_update_id;
}

class DeleteOTAUpdateResponse {
}

class DeletePolicyRequest {
  public PolicyName $policy_name;
}

class DeletePolicyVersionRequest {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;
}

class DeleteProvisioningTemplateRequest {
  public TemplateName $template_name;
}

class DeleteProvisioningTemplateResponse {
}

class DeleteProvisioningTemplateVersionRequest {
  public TemplateName $template_name;
  public TemplateVersionId $version_id;
}

class DeleteProvisioningTemplateVersionResponse {
}

class DeleteRegistrationCodeRequest {
}

class DeleteRegistrationCodeResponse {
}

class DeleteRoleAliasRequest {
  public RoleAlias $role_alias;
}

class DeleteRoleAliasResponse {
}

class DeleteScheduledAuditRequest {
  public ScheduledAuditName $scheduled_audit_name;
}

class DeleteScheduledAuditResponse {
}

class DeleteScheduledAudits {
}

class DeleteSecurityProfileRequest {
  public OptionalVersion $expected_version;
  public SecurityProfileName $security_profile_name;
}

class DeleteSecurityProfileResponse {
}

class DeleteStream {
}

class DeleteStreamRequest {
  public StreamId $stream_id;
}

class DeleteStreamResponse {
}

class DeleteThingGroupRequest {
  public OptionalVersion $expected_version;
  public ThingGroupName $thing_group_name;
}

class DeleteThingGroupResponse {
}

class DeleteThingRequest {
  public OptionalVersion $expected_version;
  public ThingName $thing_name;
}

class DeleteThingResponse {
}

class DeleteThingTypeRequest {
  public ThingTypeName $thing_type_name;
}

class DeleteThingTypeResponse {
}

class DeleteTopicRuleDestinationRequest {
  public AwsArn $arn;
}

class DeleteTopicRuleDestinationResponse {
}

class DeleteTopicRuleRequest {
  public RuleName $rule_name;
}

class DeleteV2LoggingLevelRequest {
  public LogTargetName $target_name;
  public LogTargetType $target_type;
}

class DeliveryStreamName {
}

class Denied {
  public ExplicitDeny $explicit_deny;
  public ImplicitDeny $implicit_deny;
}

class DeprecateThingTypeRequest {
  public ThingTypeName $thing_type_name;
  public UndoDeprecate $undo_deprecate;
}

class DeprecateThingTypeResponse {
}

class DeprecationDate {
}

class DescribeAccountAuditConfigurationRequest {
}

class DescribeAccountAuditConfigurationResponse {
  public AuditCheckConfigurations $audit_check_configurations;
  public AuditNotificationTargetConfigurations $audit_notification_target_configurations;
  public RoleArn $role_arn;
}

class DescribeAuditFindingRequest {
  public FindingId $finding_id;
}

class DescribeAuditFindingResponse {
  public AuditFinding $finding;
}

class DescribeAuditMitigationActionsTaskRequest {
  public AuditMitigationActionsTaskId $task_id;
}

class DescribeAuditMitigationActionsTaskResponse {
  public MitigationActionList $actions_definition;
  public AuditCheckToActionsMapping $audit_check_to_actions_mapping;
  public Timestamp $end_time;
  public Timestamp $start_time;
  public AuditMitigationActionsTaskTarget $target;
  public AuditMitigationActionsTaskStatistics $task_statistics;
  public AuditMitigationActionsTaskStatus $task_status;
}

class DescribeAuditTaskRequest {
  public AuditTaskId $task_id;
}

class DescribeAuditTaskResponse {
  public AuditDetails $audit_details;
  public ScheduledAuditName $scheduled_audit_name;
  public Timestamp $task_start_time;
  public TaskStatistics $task_statistics;
  public AuditTaskStatus $task_status;
  public AuditTaskType $task_type;
}

class DescribeAuthorizerRequest {
  public AuthorizerName $authorizer_name;
}

class DescribeAuthorizerResponse {
  public AuthorizerDescription $authorizer_description;
}

class DescribeBillingGroupRequest {
  public BillingGroupName $billing_group_name;
}

class DescribeBillingGroupResponse {
  public BillingGroupArn $billing_group_arn;
  public BillingGroupId $billing_group_id;
  public BillingGroupMetadata $billing_group_metadata;
  public BillingGroupName $billing_group_name;
  public BillingGroupProperties $billing_group_properties;
  public Version $version;
}

class DescribeCACertificateRequest {
  public CertificateId $certificate_id;
}

class DescribeCACertificateResponse {
  public CACertificateDescription $certificate_description;
  public RegistrationConfig $registration_config;
}

class DescribeCertificateRequest {
  public CertificateId $certificate_id;
}

class DescribeCertificateResponse {
  public CertificateDescription $certificate_description;
}

class DescribeDefaultAuthorizerRequest {
}

class DescribeDefaultAuthorizerResponse {
  public AuthorizerDescription $authorizer_description;
}

class DescribeDimensionRequest {
  public DimensionName $name;
}

class DescribeDimensionResponse {
  public DimensionArn $arn;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public DimensionName $name;
  public DimensionStringValues $string_values;
  public DimensionType $type;
}

class DescribeDomainConfigurationRequest {
  public ReservedDomainConfigurationName $domain_configuration_name;
}

class DescribeDomainConfigurationResponse {
  public AuthorizerConfig $authorizer_config;
  public DomainConfigurationArn $domain_configuration_arn;
  public ReservedDomainConfigurationName $domain_configuration_name;
  public DomainConfigurationStatus $domain_configuration_status;
  public DomainName $domain_name;
  public DomainType $domain_type;
  public ServerCertificates $server_certificates;
  public ServiceType $service_type;
}

class DescribeEndpointRequest {
  public EndpointType $endpoint_type;
}

class DescribeEndpointResponse {
  public EndpointAddress $endpoint_address;
}

class DescribeEventConfigurationsRequest {
}

class DescribeEventConfigurationsResponse {
  public CreationDate $creation_date;
  public EventConfigurations $event_configurations;
  public LastModifiedDate $last_modified_date;
}

class DescribeIndexRequest {
  public IndexName $index_name;
}

class DescribeIndexResponse {
  public IndexName $index_name;
  public IndexStatus $index_status;
  public IndexSchema $schema;
}

class DescribeJobExecutionRequest {
  public ExecutionNumber $execution_number;
  public JobId $job_id;
  public ThingName $thing_name;
}

class DescribeJobExecutionResponse {
  public JobExecution $execution;
}

class DescribeJobRequest {
  public JobId $job_id;
}

class DescribeJobResponse {
  public JobDocumentSource $document_source;
  public Job $job;
}

class DescribeMitigationActionRequest {
  public MitigationActionName $action_name;
}

class DescribeMitigationActionResponse {
  public MitigationActionArn $action_arn;
  public MitigationActionId $action_id;
  public MitigationActionName $action_name;
  public MitigationActionParams $action_params;
  public MitigationActionType $action_type;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public RoleArn $role_arn;
}

class DescribeProvisioningTemplateRequest {
  public TemplateName $template_name;
}

class DescribeProvisioningTemplateResponse {
  public DateType $creation_date;
  public TemplateVersionId $default_version_id;
  public TemplateDescription $description;
  public Enabled $enabled;
  public DateType $last_modified_date;
  public RoleArn $provisioning_role_arn;
  public TemplateArn $template_arn;
  public TemplateBody $template_body;
  public TemplateName $template_name;
}

class DescribeProvisioningTemplateVersionRequest {
  public TemplateName $template_name;
  public TemplateVersionId $version_id;
}

class DescribeProvisioningTemplateVersionResponse {
  public DateType $creation_date;
  public IsDefaultVersion $is_default_version;
  public TemplateBody $template_body;
  public TemplateVersionId $version_id;
}

class DescribeRoleAliasRequest {
  public RoleAlias $role_alias;
}

class DescribeRoleAliasResponse {
  public RoleAliasDescription $role_alias_description;
}

class DescribeScheduledAuditRequest {
  public ScheduledAuditName $scheduled_audit_name;
}

class DescribeScheduledAuditResponse {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public AuditFrequency $frequency;
  public ScheduledAuditArn $scheduled_audit_arn;
  public ScheduledAuditName $scheduled_audit_name;
  public TargetAuditCheckNames $target_check_names;
}

class DescribeSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
}

class DescribeSecurityProfileResponse {
  public AdditionalMetricsToRetainList $additional_metrics_to_retain;
  public AdditionalMetricsToRetainV2List $additional_metrics_to_retain_v_2;
  public AlertTargets $alert_targets;
  public Behaviors $behaviors;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public SecurityProfileArn $security_profile_arn;
  public SecurityProfileDescription $security_profile_description;
  public SecurityProfileName $security_profile_name;
  public Version $version;
}

class DescribeStreamRequest {
  public StreamId $stream_id;
}

class DescribeStreamResponse {
  public StreamInfo $stream_info;
}

class DescribeThingGroupRequest {
  public ThingGroupName $thing_group_name;
}

class DescribeThingGroupResponse {
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
  public DynamicGroupStatus $status;
  public ThingGroupArn $thing_group_arn;
  public ThingGroupId $thing_group_id;
  public ThingGroupMetadata $thing_group_metadata;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;
  public Version $version;
}

class DescribeThingRegistrationTaskRequest {
  public TaskId $task_id;
}

class DescribeThingRegistrationTaskResponse {
  public CreationDate $creation_date;
  public Count $failure_count;
  public RegistryS3BucketName $input_file_bucket;
  public RegistryS3KeyName $input_file_key;
  public LastModifiedDate $last_modified_date;
  public ErrorMessage $message;
  public Percentage $percentage_progress;
  public RoleArn $role_arn;
  public Status $status;
  public Count $success_count;
  public TaskId $task_id;
  public TemplateBody $template_body;
}

class DescribeThingRequest {
  public ThingName $thing_name;
}

class DescribeThingResponse {
  public Attributes $attributes;
  public BillingGroupName $billing_group_name;
  public ClientId $default_client_id;
  public ThingArn $thing_arn;
  public ThingId $thing_id;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;
  public Version $version;
}

class DescribeThingTypeRequest {
  public ThingTypeName $thing_type_name;
}

class DescribeThingTypeResponse {
  public ThingTypeArn $thing_type_arn;
  public ThingTypeId $thing_type_id;
  public ThingTypeMetadata $thing_type_metadata;
  public ThingTypeName $thing_type_name;
  public ThingTypeProperties $thing_type_properties;
}

class Description {
}

class Destination {
  public S3Destination $s_3_destination;
}

class DetachPolicyRequest {
  public PolicyName $policy_name;
  public PolicyTarget $target;
}

class DetachPrincipalPolicyRequest {
  public PolicyName $policy_name;
  public Principal $principal;
}

class DetachSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
  public SecurityProfileTargetArn $security_profile_target_arn;
}

class DetachSecurityProfileResponse {
}

class DetachThingPrincipalRequest {
  public Principal $principal;
  public ThingName $thing_name;
}

class DetachThingPrincipalResponse {
}

class DetailsKey {
}

class DetailsMap {
}

class DetailsValue {
}

class DeviceCertificateUpdateAction {
}

class DeviceDefenderThingName {
}

class DimensionArn {
}

class DimensionName {
}

class DimensionNames {
}

class DimensionStringValue {
}

class DimensionStringValues {
}

class DimensionType {
}

class DimensionValueOperator {
}

class DisableAllLogs {
}

class DisableTopicRuleRequest {
  public RuleName $rule_name;
}

class DomainConfigurationArn {
}

class DomainConfigurationName {
}

class DomainConfigurationStatus {
}

class DomainConfigurationSummary {
  public DomainConfigurationArn $domain_configuration_arn;
  public ReservedDomainConfigurationName $domain_configuration_name;
  public ServiceType $service_type;
}

class DomainConfigurations {
}

class DomainName {
}

class DomainType {
}

class DurationSeconds {
}

class DynamicGroupStatus {
}

class DynamoDBAction {
  public HashKeyField $hash_key_field;
  public DynamoKeyType $hash_key_type;
  public HashKeyValue $hash_key_value;
  public DynamoOperation $operation;
  public PayloadField $payload_field;
  public RangeKeyField $range_key_field;
  public DynamoKeyType $range_key_type;
  public RangeKeyValue $range_key_value;
  public AwsArn $role_arn;
  public TableName $table_name;
}

class DynamoDBv2Action {
  public PutItemInput $put_item;
  public AwsArn $role_arn;
}

class DynamoKeyType {
}

class DynamoOperation {
}

class EffectivePolicies {
}

class EffectivePolicy {
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
}

class ElasticsearchAction {
  public ElasticsearchEndpoint $endpoint;
  public ElasticsearchId $id;
  public ElasticsearchIndex $index;
  public AwsArn $role_arn;
  public ElasticsearchType $type;
}

class ElasticsearchEndpoint {
}

class ElasticsearchId {
}

class ElasticsearchIndex {
}

class ElasticsearchType {
}

class EnableIoTLoggingParams {
  public LogLevel $log_level;
  public RoleArn $role_arn_for_logging;
}

class EnableTopicRuleRequest {
  public RuleName $rule_name;
}

class Enabled {
}

class EndpointAddress {
}

class EndpointType {
}

class ErrorCode {
}

class ErrorInfo {
  public Code $code;
  public OTAUpdateErrorMessage $message;
}

class ErrorMessage {
}

class EvaluationStatistic {
}

class EventConfigurations {
}

class EventType {
}

class ExecutionNamePrefix {
}

class ExecutionNumber {
}

class ExpectedVersion {
}

class ExpiresInSec {
}

class ExpiresInSeconds {
}

class ExplicitDeny {
  public Policies $policies;
}

class ExponentialRolloutRate {
  public RolloutRatePerMinute $base_rate_per_minute;
  public IncrementFactor $increment_factor;
  public RateIncreaseCriteria $rate_increase_criteria;
}

class FailedChecksCount {
}

class FailedFindingsCount {
}

class FailedThings {
}

class Field {
  public FieldName $name;
  public FieldType $type;
}

class FieldName {
}

class FieldType {
}

class Fields {
}

class FileId {
}

class FileLocation {
  public S3Location $s_3_location;
  public Stream $stream;
}

class FileName {
}

class FindingId {
}

class FindingIds {
}

class FirehoseAction {
  public DeliveryStreamName $delivery_stream_name;
  public AwsArn $role_arn;
  public FirehoseSeparator $separator;
}

class FirehoseSeparator {
}

class Flag {
}

class ForceDelete {
}

class ForceDeleteAWSJob {
}

class ForceFlag {
}

class Forced {
}

class FunctionArn {
}

class GenerationId {
}

class GetCardinalityRequest {
  public AggregationField $aggregation_field;
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
}

class GetCardinalityResponse {
  public Count $cardinality;
}

class GetEffectivePoliciesRequest {
  public CognitoIdentityPoolId $cognito_identity_pool_id;
  public Principal $principal;
  public ThingName $thing_name;
}

class GetEffectivePoliciesResponse {
  public EffectivePolicies $effective_policies;
}

class GetIndexingConfigurationRequest {
}

class GetIndexingConfigurationResponse {
  public ThingGroupIndexingConfiguration $thing_group_indexing_configuration;
  public ThingIndexingConfiguration $thing_indexing_configuration;
}

class GetJobDocumentRequest {
  public JobId $job_id;
}

class GetJobDocumentResponse {
  public JobDocument $document;
}

class GetLoggingOptionsRequest {
}

class GetLoggingOptionsResponse {
  public LogLevel $log_level;
  public AwsArn $role_arn;
}

class GetOTAUpdateRequest {
  public OTAUpdateId $ota_update_id;
}

class GetOTAUpdateResponse {
  public OTAUpdateInfo $ota_update_info;
}

class GetPercentilesRequest {
  public AggregationField $aggregation_field;
  public IndexName $index_name;
  public PercentList $percents;
  public QueryString $query_string;
  public QueryVersion $query_version;
}

class GetPercentilesResponse {
  public Percentiles $percentiles;
}

class GetPolicyRequest {
  public PolicyName $policy_name;
}

class GetPolicyResponse {
  public DateType $creation_date;
  public PolicyVersionId $default_version_id;
  public GenerationId $generation_id;
  public DateType $last_modified_date;
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
}

class GetPolicyVersionRequest {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;
}

class GetPolicyVersionResponse {
  public DateType $creation_date;
  public GenerationId $generation_id;
  public IsDefaultVersion $is_default_version;
  public DateType $last_modified_date;
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;
}

class GetRegistrationCodeRequest {
}

class GetRegistrationCodeResponse {
  public RegistrationCode $registration_code;
}

class GetStatisticsRequest {
  public AggregationField $aggregation_field;
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
}

class GetStatisticsResponse {
  public Statistics $statistics;
}

class GetTopicRuleDestinationRequest {
  public AwsArn $arn;
}

class GetTopicRuleDestinationResponse {
  public TopicRuleDestination $topic_rule_destination;
}

class GetTopicRuleRequest {
  public RuleName $rule_name;
}

class GetTopicRuleResponse {
  public TopicRule $rule;
  public RuleArn $rule_arn;
}

class GetV2LoggingOptionsRequest {
}

class GetV2LoggingOptionsResponse {
  public LogLevel $default_log_level;
  public DisableAllLogs $disable_all_logs;
  public AwsArn $role_arn;
}

class GroupNameAndArn {
  public ThingGroupArn $group_arn;
  public ThingGroupName $group_name;
}

class HashAlgorithm {
}

class HashKeyField {
}

class HashKeyValue {
}

class HeaderKey {
}

class HeaderList {
}

class HeaderValue {
}

class HttpAction {
  public HttpAuthorization $auth;
  public Url $confirmation_url;
  public HeaderList $headers;
  public Url $url;
}

class HttpActionHeader {
  public HeaderKey $key;
  public HeaderValue $value;
}

class HttpAuthorization {
  public SigV4Authorization $sigv_4;
}

class HttpContext {
  public HttpHeaders $headers;
  public HttpQueryString $query_string;
}

class HttpHeaderName {
}

class HttpHeaderValue {
}

class HttpHeaders {
}

class HttpQueryString {
}

class HttpUrlDestinationConfiguration {
  public Url $confirmation_url;
}

class HttpUrlDestinationProperties {
  public Url $confirmation_url;
}

class HttpUrlDestinationSummary {
  public Url $confirmation_url;
}

class ImplicitDeny {
  public Policies $policies;
}

class InProgressChecksCount {
}

class InProgressThings {
}

class InProgressTimeoutInMinutes {
}

class IncrementFactor {
}

class IndexName {
}

class IndexNamesList {
}

class IndexNotReadyException {
  public errorMessage $message;
}

class IndexSchema {
}

class IndexStatus {
}

class InlineDocument {
}

class InputName {
}

class InternalException {
  public errorMessage $message;
}

class InternalFailureException {
  public errorMessage $message;
}

class InvalidAggregationException {
  public errorMessage $message;
}

class InvalidQueryException {
  public errorMessage $message;
}

class InvalidRequestException {
  public errorMessage $message;
}

class InvalidResponseException {
  public errorMessage $message;
}

class InvalidStateTransitionException {
  public errorMessage $message;
}

class IotAnalyticsAction {
  public AwsArn $channel_arn;
  public ChannelName $channel_name;
  public AwsArn $role_arn;
}

class IotEventsAction {
  public InputName $input_name;
  public MessageId $message_id;
  public AwsArn $role_arn;
}

class IotSiteWiseAction {
  public PutAssetPropertyValueEntryList $put_asset_property_value_entries;
  public AwsArn $role_arn;
}

class IsAuthenticated {
}

class IsDefaultVersion {
}

class IsDisabled {
}

class Job {
  public AbortConfig $abort_config;
  public Comment $comment;
  public DateType $completed_at;
  public DateType $created_at;
  public JobDescription $description;
  public Forced $force_canceled;
  public JobArn $job_arn;
  public JobExecutionsRolloutConfig $job_executions_rollout_config;
  public JobId $job_id;
  public JobProcessDetails $job_process_details;
  public DateType $last_updated_at;
  public PresignedUrlConfig $presigned_url_config;
  public ReasonCode $reason_code;
  public JobStatus $status;
  public TargetSelection $target_selection;
  public JobTargets $targets;
  public TimeoutConfig $timeout_config;
}

class JobArn {
}

class JobDescription {
}

class JobDocument {
}

class JobDocumentSource {
}

class JobExecution {
  public ApproximateSecondsBeforeTimedOut $approximate_seconds_before_timed_out;
  public ExecutionNumber $execution_number;
  public Forced $force_canceled;
  public JobId $job_id;
  public DateType $last_updated_at;
  public DateType $queued_at;
  public DateType $started_at;
  public JobExecutionStatus $status;
  public JobExecutionStatusDetails $status_details;
  public ThingArn $thing_arn;
  public VersionNumber $version_number;
}

class JobExecutionFailureType {
}

class JobExecutionStatus {
}

class JobExecutionStatusDetails {
  public DetailsMap $details_map;
}

class JobExecutionSummary {
  public ExecutionNumber $execution_number;
  public DateType $last_updated_at;
  public DateType $queued_at;
  public DateType $started_at;
  public JobExecutionStatus $status;
}

class JobExecutionSummaryForJob {
  public JobExecutionSummary $job_execution_summary;
  public ThingArn $thing_arn;
}

class JobExecutionSummaryForJobList {
}

class JobExecutionSummaryForThing {
  public JobExecutionSummary $job_execution_summary;
  public JobId $job_id;
}

class JobExecutionSummaryForThingList {
}

class JobExecutionsRolloutConfig {
  public ExponentialRolloutRate $exponential_rate;
  public MaxJobExecutionsPerMin $maximum_per_minute;
}

class JobId {
}

class JobProcessDetails {
  public CanceledThings $number_of_canceled_things;
  public FailedThings $number_of_failed_things;
  public InProgressThings $number_of_in_progress_things;
  public QueuedThings $number_of_queued_things;
  public RejectedThings $number_of_rejected_things;
  public RemovedThings $number_of_removed_things;
  public SucceededThings $number_of_succeeded_things;
  public TimedOutThings $number_of_timed_out_things;
  public ProcessingTargetNameList $processing_targets;
}

class JobStatus {
}

class JobSummary {
  public DateType $completed_at;
  public DateType $created_at;
  public JobArn $job_arn;
  public JobId $job_id;
  public DateType $last_updated_at;
  public JobStatus $status;
  public TargetSelection $target_selection;
  public ThingGroupId $thing_group_id;
}

class JobSummaryList {
}

class JobTargets {
}

class JsonDocument {
}

class Key {
}

class KeyName {
}

class KeyPair {
  public PrivateKey $private_key;
  public PublicKey $public_key;
}

class KeyValue {
}

class KinesisAction {
  public PartitionKey $partition_key;
  public AwsArn $role_arn;
  public StreamName $stream_name;
}

class LambdaAction {
  public FunctionArn $function_arn;
}

class LaserMaxResults {
}

class LastModifiedDate {
}

class LimitExceededException {
  public errorMessage $message;
}

class ListActiveViolationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public SecurityProfileName $security_profile_name;
  public DeviceDefenderThingName $thing_name;
}

class ListActiveViolationsResponse {
  public ActiveViolations $active_violations;
  public NextToken $next_token;
}

class ListAttachedPoliciesRequest {
  public Marker $marker;
  public PageSize $page_size;
  public Recursive $recursive;
  public PolicyTarget $target;
}

class ListAttachedPoliciesResponse {
  public Marker $next_marker;
  public Policies $policies;
}

class ListAuditFindingsRequest {
  public AuditCheckName $check_name;
  public Timestamp $end_time;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceIdentifier $resource_identifier;
  public Timestamp $start_time;
  public AuditTaskId $task_id;
}

class ListAuditFindingsResponse {
  public AuditFindings $findings;
  public NextToken $next_token;
}

class ListAuditMitigationActionsExecutionsRequest {
  public AuditMitigationActionsExecutionStatus $action_status;
  public FindingId $finding_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public AuditMitigationActionsTaskId $task_id;
}

class ListAuditMitigationActionsExecutionsResponse {
  public AuditMitigationActionExecutionMetadataList $actions_executions;
  public NextToken $next_token;
}

class ListAuditMitigationActionsTasksRequest {
  public AuditTaskId $audit_task_id;
  public Timestamp $end_time;
  public FindingId $finding_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Timestamp $start_time;
  public AuditMitigationActionsTaskStatus $task_status;
}

class ListAuditMitigationActionsTasksResponse {
  public NextToken $next_token;
  public AuditMitigationActionsTaskMetadataList $tasks;
}

class ListAuditTasksRequest {
  public Timestamp $end_time;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Timestamp $start_time;
  public AuditTaskStatus $task_status;
  public AuditTaskType $task_type;
}

class ListAuditTasksResponse {
  public NextToken $next_token;
  public AuditTaskMetadataList $tasks;
}

class ListAuthorizersRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
  public AuthorizerStatus $status;
}

class ListAuthorizersResponse {
  public Authorizers $authorizers;
  public Marker $next_marker;
}

class ListBillingGroupsRequest {
  public RegistryMaxResults $max_results;
  public BillingGroupName $name_prefix_filter;
  public NextToken $next_token;
}

class ListBillingGroupsResponse {
  public BillingGroupNameAndArnList $billing_groups;
  public NextToken $next_token;
}

class ListCACertificatesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
}

class ListCACertificatesResponse {
  public CACertificates $certificates;
  public Marker $next_marker;
}

class ListCertificatesByCARequest {
  public AscendingOrder $ascending_order;
  public CertificateId $ca_certificate_id;
  public Marker $marker;
  public PageSize $page_size;
}

class ListCertificatesByCAResponse {
  public Certificates $certificates;
  public Marker $next_marker;
}

class ListCertificatesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
}

class ListCertificatesResponse {
  public Certificates $certificates;
  public Marker $next_marker;
}

class ListDimensionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDimensionsResponse {
  public DimensionNames $dimension_names;
  public NextToken $next_token;
}

class ListDomainConfigurationsRequest {
  public Marker $marker;
  public PageSize $page_size;
  public ServiceType $service_type;
}

class ListDomainConfigurationsResponse {
  public DomainConfigurations $domain_configurations;
  public Marker $next_marker;
}

class ListIndicesRequest {
  public QueryMaxResults $max_results;
  public NextToken $next_token;
}

class ListIndicesResponse {
  public IndexNamesList $index_names;
  public NextToken $next_token;
}

class ListJobExecutionsForJobRequest {
  public JobId $job_id;
  public LaserMaxResults $max_results;
  public NextToken $next_token;
  public JobExecutionStatus $status;
}

class ListJobExecutionsForJobResponse {
  public JobExecutionSummaryForJobList $execution_summaries;
  public NextToken $next_token;
}

class ListJobExecutionsForThingRequest {
  public LaserMaxResults $max_results;
  public NextToken $next_token;
  public JobExecutionStatus $status;
  public ThingName $thing_name;
}

class ListJobExecutionsForThingResponse {
  public JobExecutionSummaryForThingList $execution_summaries;
  public NextToken $next_token;
}

class ListJobsRequest {
  public LaserMaxResults $max_results;
  public NextToken $next_token;
  public JobStatus $status;
  public TargetSelection $target_selection;
  public ThingGroupId $thing_group_id;
  public ThingGroupName $thing_group_name;
}

class ListJobsResponse {
  public JobSummaryList $jobs;
  public NextToken $next_token;
}

class ListMitigationActionsRequest {
  public MitigationActionType $action_type;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListMitigationActionsResponse {
  public MitigationActionIdentifierList $action_identifiers;
  public NextToken $next_token;
}

class ListOTAUpdatesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OTAUpdateStatus $ota_update_status;
}

class ListOTAUpdatesResponse {
  public NextToken $next_token;
  public OTAUpdatesSummary $ota_updates;
}

class ListOutgoingCertificatesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
}

class ListOutgoingCertificatesResponse {
  public Marker $next_marker;
  public OutgoingCertificates $outgoing_certificates;
}

class ListPoliciesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
}

class ListPoliciesResponse {
  public Marker $next_marker;
  public Policies $policies;
}

class ListPolicyPrincipalsRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
  public PolicyName $policy_name;
}

class ListPolicyPrincipalsResponse {
  public Marker $next_marker;
  public Principals $principals;
}

class ListPolicyVersionsRequest {
  public PolicyName $policy_name;
}

class ListPolicyVersionsResponse {
  public PolicyVersions $policy_versions;
}

class ListPrincipalPoliciesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
  public Principal $principal;
}

class ListPrincipalPoliciesResponse {
  public Marker $next_marker;
  public Policies $policies;
}

class ListPrincipalThingsRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public Principal $principal;
}

class ListPrincipalThingsResponse {
  public NextToken $next_token;
  public ThingNameList $things;
}

class ListProvisioningTemplateVersionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public TemplateName $template_name;
}

class ListProvisioningTemplateVersionsResponse {
  public NextToken $next_token;
  public ProvisioningTemplateVersionListing $versions;
}

class ListProvisioningTemplatesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListProvisioningTemplatesResponse {
  public NextToken $next_token;
  public ProvisioningTemplateListing $templates;
}

class ListRoleAliasesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
}

class ListRoleAliasesResponse {
  public Marker $next_marker;
  public RoleAliases $role_aliases;
}

class ListScheduledAuditsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListScheduledAuditsResponse {
  public NextToken $next_token;
  public ScheduledAuditMetadataList $scheduled_audits;
}

class ListSecurityProfilesForTargetRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Recursive $recursive;
  public SecurityProfileTargetArn $security_profile_target_arn;
}

class ListSecurityProfilesForTargetResponse {
  public NextToken $next_token;
  public SecurityProfileTargetMappings $security_profile_target_mappings;
}

class ListSecurityProfilesRequest {
  public DimensionName $dimension_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListSecurityProfilesResponse {
  public NextToken $next_token;
  public SecurityProfileIdentifiers $security_profile_identifiers;
}

class ListStreamsRequest {
  public AscendingOrder $ascending_order;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListStreamsResponse {
  public NextToken $next_token;
  public StreamsSummary $streams;
}

class ListTagsForResourceRequest {
  public NextToken $next_token;
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class ListTargetsForPolicyRequest {
  public Marker $marker;
  public PageSize $page_size;
  public PolicyName $policy_name;
}

class ListTargetsForPolicyResponse {
  public Marker $next_marker;
  public PolicyTargets $targets;
}

class ListTargetsForSecurityProfileRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public SecurityProfileName $security_profile_name;
}

class ListTargetsForSecurityProfileResponse {
  public NextToken $next_token;
  public SecurityProfileTargets $security_profile_targets;
}

class ListThingGroupsForThingRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public ThingName $thing_name;
}

class ListThingGroupsForThingResponse {
  public NextToken $next_token;
  public ThingGroupNameAndArnList $thing_groups;
}

class ListThingGroupsRequest {
  public RegistryMaxResults $max_results;
  public ThingGroupName $name_prefix_filter;
  public NextToken $next_token;
  public ThingGroupName $parent_group;
  public RecursiveWithoutDefault $recursive;
}

class ListThingGroupsResponse {
  public NextToken $next_token;
  public ThingGroupNameAndArnList $thing_groups;
}

class ListThingPrincipalsRequest {
  public ThingName $thing_name;
}

class ListThingPrincipalsResponse {
  public Principals $principals;
}

class ListThingRegistrationTaskReportsRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public ReportType $report_type;
  public TaskId $task_id;
}

class ListThingRegistrationTaskReportsResponse {
  public NextToken $next_token;
  public ReportType $report_type;
  public S3FileUrlList $resource_links;
}

class ListThingRegistrationTasksRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public Status $status;
}

class ListThingRegistrationTasksResponse {
  public NextToken $next_token;
  public TaskIdList $task_ids;
}

class ListThingTypesRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public ThingTypeName $thing_type_name;
}

class ListThingTypesResponse {
  public NextToken $next_token;
  public ThingTypeList $thing_types;
}

class ListThingsInBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
}

class ListThingsInBillingGroupResponse {
  public NextToken $next_token;
  public ThingNameList $things;
}

class ListThingsInThingGroupRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public Recursive $recursive;
  public ThingGroupName $thing_group_name;
}

class ListThingsInThingGroupResponse {
  public NextToken $next_token;
  public ThingNameList $things;
}

class ListThingsRequest {
  public AttributeName $attribute_name;
  public AttributeValue $attribute_value;
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public ThingTypeName $thing_type_name;
}

class ListThingsResponse {
  public NextToken $next_token;
  public ThingAttributeList $things;
}

class ListTopicRuleDestinationsRequest {
  public TopicRuleDestinationMaxResults $max_results;
  public NextToken $next_token;
}

class ListTopicRuleDestinationsResponse {
  public TopicRuleDestinationSummaries $destination_summaries;
  public NextToken $next_token;
}

class ListTopicRulesRequest {
  public TopicRuleMaxResults $max_results;
  public NextToken $next_token;
  public IsDisabled $rule_disabled;
  public Topic $topic;
}

class ListTopicRulesResponse {
  public NextToken $next_token;
  public TopicRuleList $rules;
}

class ListV2LoggingLevelsRequest {
  public SkyfallMaxResults $max_results;
  public NextToken $next_token;
  public LogTargetType $target_type;
}

class ListV2LoggingLevelsResponse {
  public LogTargetConfigurations $log_target_configurations;
  public NextToken $next_token;
}

class ListViolationEventsRequest {
  public Timestamp $end_time;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SecurityProfileName $security_profile_name;
  public Timestamp $start_time;
  public DeviceDefenderThingName $thing_name;
}

class ListViolationEventsResponse {
  public NextToken $next_token;
  public ViolationEvents $violation_events;
}

class LogGroupName {
}

class LogLevel {
}

class LogTarget {
  public LogTargetName $target_name;
  public LogTargetType $target_type;
}

class LogTargetConfiguration {
  public LogLevel $log_level;
  public LogTarget $log_target;
}

class LogTargetConfigurations {
}

class LogTargetName {
}

class LogTargetType {
}

class LoggingOptionsPayload {
  public LogLevel $log_level;
  public AwsArn $role_arn;
}

class MalformedPolicyException {
  public errorMessage $message;
}

class Marker {
}

class MaxJobExecutionsPerMin {
}

class MaxResults {
}

class Maximum {
}

class MaximumPerMinute {
}

class Message {
}

class MessageFormat {
}

class MessageId {
}

class MetricDimension {
  public DimensionName $dimension_name;
  public DimensionValueOperator $operator;
}

class MetricToRetain {
  public BehaviorMetric $metric;
  public MetricDimension $metric_dimension;
}

class MetricValue {
  public Cidrs $cidrs;
  public UnsignedLong $count;
  public Ports $ports;
}

class Minimum {
}

class MinimumNumberOfExecutedThings {
}

class MissingContextValue {
}

class MissingContextValues {
}

class MitigationAction {
  public MitigationActionParams $action_params;
  public MitigationActionId $id;
  public MitigationActionName $name;
  public RoleArn $role_arn;
}

class MitigationActionArn {
}

class MitigationActionId {
}

class MitigationActionIdentifier {
  public MitigationActionArn $action_arn;
  public MitigationActionName $action_name;
  public Timestamp $creation_date;
}

class MitigationActionIdentifierList {
}

class MitigationActionList {
}

class MitigationActionName {
}

class MitigationActionNameList {
}

class MitigationActionParams {
  public AddThingsToThingGroupParams $add_things_to_thing_group_params;
  public EnableIoTLoggingParams $enable_io_t_logging_params;
  public PublishFindingToSnsParams $publish_finding_to_sns_params;
  public ReplaceDefaultPolicyVersionParams $replace_default_policy_version_params;
  public UpdateCACertificateParams $update_ca_certificate_params;
  public UpdateDeviceCertificateParams $update_device_certificate_params;
}

class MitigationActionType {
}

class MqttClientId {
}

class MqttContext {
  public MqttClientId $client_id;
  public MqttPassword $password;
  public MqttUsername $username;
}

class MqttPassword {
}

class MqttUsername {
}

class NextToken {
}

class NonCompliantChecksCount {
}

class NonCompliantResource {
  public StringMap $additional_info;
  public ResourceIdentifier $resource_identifier;
  public ResourceType $resource_type;
}

class NonCompliantResourcesCount {
}

class NotConfiguredException {
  public errorMessage $message;
}

class NumberOfThings {
}

class OTAUpdateArn {
}

class OTAUpdateDescription {
}

class OTAUpdateErrorMessage {
}

class OTAUpdateFile {
  public AttributesMap $attributes;
  public CodeSigning $code_signing;
  public FileLocation $file_location;
  public FileName $file_name;
  public OTAUpdateFileVersion $file_version;
}

class OTAUpdateFileVersion {
}

class OTAUpdateFiles {
}

class OTAUpdateId {
}

class OTAUpdateInfo {
  public AdditionalParameterMap $additional_parameters;
  public AwsIotJobArn $aws_iot_job_arn;
  public AwsIotJobId $aws_iot_job_id;
  public AwsJobExecutionsRolloutConfig $aws_job_executions_rollout_config;
  public AwsJobPresignedUrlConfig $aws_job_presigned_url_config;
  public DateType $creation_date;
  public OTAUpdateDescription $description;
  public ErrorInfo $error_info;
  public DateType $last_modified_date;
  public OTAUpdateArn $ota_update_arn;
  public OTAUpdateFiles $ota_update_files;
  public OTAUpdateId $ota_update_id;
  public OTAUpdateStatus $ota_update_status;
  public Protocols $protocols;
  public TargetSelection $target_selection;
  public Targets $targets;
}

class OTAUpdateStatus {
}

class OTAUpdateSummary {
  public DateType $creation_date;
  public OTAUpdateArn $ota_update_arn;
  public OTAUpdateId $ota_update_id;
}

class OTAUpdatesSummary {
}

class OptionalVersion {
}

class OutgoingCertificate {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public DateType $creation_date;
  public DateType $transfer_date;
  public Message $transfer_message;
  public AwsAccountId $transferred_to;
}

class OutgoingCertificates {
}

class OverrideDynamicGroups {
}

class PageSize {
}

class Parameter {
}

class Parameters {
}

class PartitionKey {
}

class PayloadField {
}

class Percent {
}

class PercentList {
}

class PercentPair {
  public Percent $percent;
  public PercentValue $value;
}

class PercentValue {
}

class Percentage {
}

class Percentiles {
}

class Platform {
}

class Policies {
}

class Policy {
  public PolicyArn $policy_arn;
  public PolicyName $policy_name;
}

class PolicyArn {
}

class PolicyDocument {
}

class PolicyDocuments {
}

class PolicyName {
}

class PolicyNames {
}

class PolicyTarget {
}

class PolicyTargets {
}

class PolicyTemplateName {
}

class PolicyVersion {
  public DateType $create_date;
  public IsDefaultVersion $is_default_version;
  public PolicyVersionId $version_id;
}

class PolicyVersionId {
}

class PolicyVersionIdentifier {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;
}

class PolicyVersions {
}

class Port {
}

class Ports {
}

class Prefix {
}

class PresignedUrlConfig {
  public ExpiresInSec $expires_in_sec;
  public RoleArn $role_arn;
}

class Principal {
}

class PrincipalArn {
}

class PrincipalId {
}

class Principals {
}

class PrivateKey {
}

class ProcessingTargetName {
}

class ProcessingTargetNameList {
}

class Protocol {
}

class Protocols {
}

class ProvisioningTemplateListing {
}

class ProvisioningTemplateSummary {
  public DateType $creation_date;
  public TemplateDescription $description;
  public Enabled $enabled;
  public DateType $last_modified_date;
  public TemplateArn $template_arn;
  public TemplateName $template_name;
}

class ProvisioningTemplateVersionListing {
}

class ProvisioningTemplateVersionSummary {
  public DateType $creation_date;
  public IsDefaultVersion $is_default_version;
  public TemplateVersionId $version_id;
}

class PublicKey {
}

class PublicKeyMap {
}

class PublishFindingToSnsParams {
  public SnsTopicArn $topic_arn;
}

class PutAssetPropertyValueEntry {
  public AssetId $asset_id;
  public AssetPropertyEntryId $entry_id;
  public AssetPropertyAlias $property_alias;
  public AssetPropertyId $property_id;
  public AssetPropertyValueList $property_values;
}

class PutAssetPropertyValueEntryList {
}

class PutItemInput {
  public TableName $table_name;
}

class Qos {
}

class QueryMaxResults {
}

class QueryString {
}

class QueryVersion {
}

class QueueUrl {
}

class QueuedThings {
}

class RangeKeyField {
}

class RangeKeyValue {
}

class RateIncreaseCriteria {
  public NumberOfThings $number_of_notified_things;
  public NumberOfThings $number_of_succeeded_things;
}

class ReasonCode {
}

class ReasonForNonCompliance {
}

class ReasonForNonComplianceCode {
}

class ReasonForNonComplianceCodes {
}

class Recursive {
}

class RecursiveWithoutDefault {
}

class RegisterCACertificateRequest {
  public AllowAutoRegistration $allow_auto_registration;
  public CertificatePem $ca_certificate;
  public RegistrationConfig $registration_config;
  public SetAsActive $set_as_active;
  public CertificatePem $verification_certificate;
}

class RegisterCACertificateResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
}

class RegisterCertificateRequest {
  public CertificatePem $ca_certificate_pem;
  public CertificatePem $certificate_pem;
  public SetAsActiveFlag $set_as_active;
  public CertificateStatus $status;
}

class RegisterCertificateResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
}

class RegisterThingRequest {
  public Parameters $parameters;
  public TemplateBody $template_body;
}

class RegisterThingResponse {
  public CertificatePem $certificate_pem;
  public ResourceArns $resource_arns;
}

class RegistrationCode {
}

class RegistrationCodeValidationException {
  public errorMessage $message;
}

class RegistrationConfig {
  public RoleArn $role_arn;
  public TemplateBody $template_body;
}

class RegistryMaxResults {
}

class RegistryS3BucketName {
}

class RegistryS3KeyName {
}

class RejectCertificateTransferRequest {
  public CertificateId $certificate_id;
  public Message $reject_reason;
}

class RejectedThings {
}

class RelatedResource {
  public StringMap $additional_info;
  public ResourceIdentifier $resource_identifier;
  public ResourceType $resource_type;
}

class RelatedResources {
}

class RemoveAuthorizerConfig {
}

class RemoveAutoRegistration {
}

class RemoveThingFromBillingGroupRequest {
  public BillingGroupArn $billing_group_arn;
  public BillingGroupName $billing_group_name;
  public ThingArn $thing_arn;
  public ThingName $thing_name;
}

class RemoveThingFromBillingGroupResponse {
}

class RemoveThingFromThingGroupRequest {
  public ThingArn $thing_arn;
  public ThingGroupArn $thing_group_arn;
  public ThingGroupName $thing_group_name;
  public ThingName $thing_name;
}

class RemoveThingFromThingGroupResponse {
}

class RemoveThingType {
}

class RemovedThings {
}

class ReplaceDefaultPolicyVersionParams {
  public PolicyTemplateName $template_name;
}

class ReplaceTopicRuleRequest {
  public RuleName $rule_name;
  public TopicRulePayload $topic_rule_payload;
}

class ReportType {
}

class RepublishAction {
  public Qos $qos;
  public AwsArn $role_arn;
  public TopicPattern $topic;
}

class ReservedDomainConfigurationName {
}

class Resource {
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
  public resourceArn $resource_arn;
  public resourceId $resource_id;
}

class ResourceArn {
}

class ResourceArns {
}

class ResourceIdentifier {
  public AwsAccountId $account;
  public CertificateId $ca_certificate_id;
  public ClientId $client_id;
  public CognitoIdentityPoolId $cognito_identity_pool_id;
  public CertificateId $device_certificate_id;
  public RoleArn $iam_role_arn;
  public PolicyVersionIdentifier $policy_version_identifier;
  public RoleAliasArn $role_alias_arn;
}

class ResourceLogicalId {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class ResourceRegistrationFailureException {
  public errorMessage $message;
}

class ResourceType {
}

class Resources {
}

class RoleAlias {
}

class RoleAliasArn {
}

class RoleAliasDescription {
  public DateType $creation_date;
  public CredentialDurationSeconds $credential_duration_seconds;
  public DateType $last_modified_date;
  public AwsAccountId $owner;
  public RoleAlias $role_alias;
  public RoleAliasArn $role_alias_arn;
  public RoleArn $role_arn;
}

class RoleAliases {
}

class RoleArn {
}

class RolloutRatePerMinute {
}

class RuleArn {
}

class RuleName {
}

class S3Action {
  public BucketName $bucket_name;
  public CannedAccessControlList $canned_acl;
  public Key $key;
  public AwsArn $role_arn;
}

class S3Bucket {
}

class S3Destination {
  public S3Bucket $bucket;
  public Prefix $prefix;
}

class S3FileUrl {
}

class S3FileUrlList {
}

class S3Key {
}

class S3Location {
  public S3Bucket $bucket;
  public S3Key $key;
  public S3Version $version;
}

class S3Version {
}

class SQL {
}

class SalesforceAction {
  public SalesforceToken $token;
  public SalesforceEndpoint $url;
}

class SalesforceEndpoint {
}

class SalesforceToken {
}

class ScheduledAuditArn {
}

class ScheduledAuditMetadata {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public AuditFrequency $frequency;
  public ScheduledAuditArn $scheduled_audit_arn;
  public ScheduledAuditName $scheduled_audit_name;
}

class ScheduledAuditMetadataList {
}

class ScheduledAuditName {
}

class SearchIndexRequest {
  public IndexName $index_name;
  public QueryMaxResults $max_results;
  public NextToken $next_token;
  public QueryString $query_string;
  public QueryVersion $query_version;
}

class SearchIndexResponse {
  public NextToken $next_token;
  public ThingGroupDocumentList $thing_groups;
  public ThingDocumentList $things;
}

class SearchableAttributes {
}

class Seconds {
}

class SecurityProfileArn {
}

class SecurityProfileDescription {
}

class SecurityProfileIdentifier {
  public SecurityProfileArn $arn;
  public SecurityProfileName $name;
}

class SecurityProfileIdentifiers {
}

class SecurityProfileName {
}

class SecurityProfileTarget {
  public SecurityProfileTargetArn $arn;
}

class SecurityProfileTargetArn {
}

class SecurityProfileTargetMapping {
  public SecurityProfileIdentifier $security_profile_identifier;
  public SecurityProfileTarget $target;
}

class SecurityProfileTargetMappings {
}

class SecurityProfileTargets {
}

class ServerCertificateArns {
}

class ServerCertificateStatus {
}

class ServerCertificateStatusDetail {
}

class ServerCertificateSummary {
  public AcmCertificateArn $server_certificate_arn;
  public ServerCertificateStatus $server_certificate_status;
  public ServerCertificateStatusDetail $server_certificate_status_detail;
}

class ServerCertificates {
}

class ServerName {
}

class ServiceName {
}

class ServiceType {
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class SetAsActive {
}

class SetAsActiveFlag {
}

class SetAsDefault {
}

class SetDefaultAuthorizerRequest {
  public AuthorizerName $authorizer_name;
}

class SetDefaultAuthorizerResponse {
  public AuthorizerArn $authorizer_arn;
  public AuthorizerName $authorizer_name;
}

class SetDefaultPolicyVersionRequest {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;
}

class SetLoggingOptionsRequest {
  public LoggingOptionsPayload $logging_options_payload;
}

class SetV2LoggingLevelRequest {
  public LogLevel $log_level;
  public LogTarget $log_target;
}

class SetV2LoggingOptionsRequest {
  public LogLevel $default_log_level;
  public DisableAllLogs $disable_all_logs;
  public AwsArn $role_arn;
}

class SigV4Authorization {
  public AwsArn $role_arn;
  public ServiceName $service_name;
  public SigningRegion $signing_region;
}

class Signature {
}

class SignatureAlgorithm {
}

class SigningJobId {
}

class SigningProfileName {
}

class SigningProfileParameter {
  public CertificateArn $certificate_arn;
  public CertificatePathOnDevice $certificate_path_on_device;
  public Platform $platform;
}

class SigningRegion {
}

class SkippedFindingsCount {
}

class SkyfallMaxResults {
}

class SnsAction {
  public MessageFormat $message_format;
  public AwsArn $role_arn;
  public AwsArn $target_arn;
}

class SnsTopicArn {
}

class SqlParseException {
  public errorMessage $message;
}

class SqsAction {
  public QueueUrl $queue_url;
  public AwsArn $role_arn;
  public UseBase64 $use_base_64;
}

class StartAuditMitigationActionsTaskRequest {
  public AuditCheckToActionsMapping $audit_check_to_actions_mapping;
  public ClientRequestToken $client_request_token;
  public AuditMitigationActionsTaskTarget $target;
  public AuditMitigationActionsTaskId $task_id;
}

class StartAuditMitigationActionsTaskResponse {
  public AuditMitigationActionsTaskId $task_id;
}

class StartOnDemandAuditTaskRequest {
  public TargetAuditCheckNames $target_check_names;
}

class StartOnDemandAuditTaskResponse {
  public AuditTaskId $task_id;
}

class StartSigningJobParameter {
  public Destination $destination;
  public SigningProfileName $signing_profile_name;
  public SigningProfileParameter $signing_profile_parameter;
}

class StartThingRegistrationTaskRequest {
  public RegistryS3BucketName $input_file_bucket;
  public RegistryS3KeyName $input_file_key;
  public RoleArn $role_arn;
  public TemplateBody $template_body;
}

class StartThingRegistrationTaskResponse {
  public TaskId $task_id;
}

class StateMachineName {
}

class StateReason {
}

class StateValue {
}

class StatisticalThreshold {
  public EvaluationStatistic $statistic;
}

class Statistics {
  public Average $average;
  public Count $count;
  public Maximum $maximum;
  public Minimum $minimum;
  public StdDeviation $std_deviation;
  public Sum $sum;
  public SumOfSquares $sum_of_squares;
  public Variance $variance;
}

class Status {
}

class StdDeviation {
}

class StepFunctionsAction {
  public ExecutionNamePrefix $execution_name_prefix;
  public AwsArn $role_arn;
  public StateMachineName $state_machine_name;
}

class StopThingRegistrationTaskRequest {
  public TaskId $task_id;
}

class StopThingRegistrationTaskResponse {
}

class Stream {
  public FileId $file_id;
  public StreamId $stream_id;
}

class StreamArn {
}

class StreamDescription {
}

class StreamFile {
  public FileId $file_id;
  public S3Location $s_3_location;
}

class StreamFiles {
}

class StreamId {
}

class StreamInfo {
  public DateType $created_at;
  public StreamDescription $description;
  public StreamFiles $files;
  public DateType $last_updated_at;
  public RoleArn $role_arn;
  public StreamArn $stream_arn;
  public StreamId $stream_id;
  public StreamVersion $stream_version;
}

class StreamName {
}

class StreamSummary {
  public StreamDescription $description;
  public StreamArn $stream_arn;
  public StreamId $stream_id;
  public StreamVersion $stream_version;
}

class StreamVersion {
}

class StreamsSummary {
}

class String {
}

class StringMap {
}

class SucceededFindingsCount {
}

class SucceededThings {
}

class Sum {
}

class SumOfSquares {
}

class TableName {
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
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Target {
}

class TargetArn {
}

class TargetAuditCheckNames {
}

class TargetSelection {
}

class Targets {
}

class TaskAlreadyExistsException {
  public errorMessage $message;
}

class TaskId {
}

class TaskIdList {
}

class TaskStatistics {
  public CanceledChecksCount $canceled_checks;
  public CompliantChecksCount $compliant_checks;
  public FailedChecksCount $failed_checks;
  public InProgressChecksCount $in_progress_checks;
  public NonCompliantChecksCount $non_compliant_checks;
  public TotalChecksCount $total_checks;
  public WaitingForDataCollectionChecksCount $waiting_for_data_collection_checks;
}

class TaskStatisticsForAuditCheck {
  public CanceledFindingsCount $canceled_findings_count;
  public FailedFindingsCount $failed_findings_count;
  public SkippedFindingsCount $skipped_findings_count;
  public SucceededFindingsCount $succeeded_findings_count;
  public TotalFindingsCount $total_findings_count;
}

class TemplateArn {
}

class TemplateBody {
}

class TemplateDescription {
}

class TemplateName {
}

class TemplateVersionId {
}

class TestAuthorizationRequest {
  public AuthInfos $auth_infos;
  public ClientId $client_id;
  public CognitoIdentityPoolId $cognito_identity_pool_id;
  public PolicyNames $policy_names_to_add;
  public PolicyNames $policy_names_to_skip;
  public Principal $principal;
}

class TestAuthorizationResponse {
  public AuthResults $auth_results;
}

class TestInvokeAuthorizerRequest {
  public AuthorizerName $authorizer_name;
  public HttpContext $http_context;
  public MqttContext $mqtt_context;
  public TlsContext $tls_context;
  public Token $token;
  public TokenSignature $token_signature;
}

class TestInvokeAuthorizerResponse {
  public Seconds $disconnect_after_in_seconds;
  public IsAuthenticated $is_authenticated;
  public PolicyDocuments $policy_documents;
  public PrincipalId $principal_id;
  public Seconds $refresh_after_in_seconds;
}

class ThingArn {
}

class ThingAttribute {
  public Attributes $attributes;
  public ThingArn $thing_arn;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;
  public Version $version;
}

class ThingAttributeList {
}

class ThingConnectivity {
  public boolean $connected;
  public ConnectivityTimestamp $timestamp;
}

class ThingConnectivityIndexingMode {
}

class ThingDocument {
  public Attributes $attributes;
  public ThingConnectivity $connectivity;
  public JsonDocument $shadow;
  public ThingGroupNameList $thing_group_names;
  public ThingId $thing_id;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;
}

class ThingDocumentList {
}

class ThingGroupArn {
}

class ThingGroupDescription {
}

class ThingGroupDocument {
  public Attributes $attributes;
  public ThingGroupNameList $parent_group_names;
  public ThingGroupDescription $thing_group_description;
  public ThingGroupId $thing_group_id;
  public ThingGroupName $thing_group_name;
}

class ThingGroupDocumentList {
}

class ThingGroupId {
}

class ThingGroupIndexingConfiguration {
  public Fields $custom_fields;
  public Fields $managed_fields;
  public ThingGroupIndexingMode $thing_group_indexing_mode;
}

class ThingGroupIndexingMode {
}

class ThingGroupList {
}

class ThingGroupMetadata {
  public CreationDate $creation_date;
  public ThingGroupName $parent_group_name;
  public ThingGroupNameAndArnList $root_to_parent_thing_groups;
}

class ThingGroupName {
}

class ThingGroupNameAndArnList {
}

class ThingGroupNameList {
}

class ThingGroupNames {
}

class ThingGroupProperties {
  public AttributePayload $attribute_payload;
  public ThingGroupDescription $thing_group_description;
}

class ThingId {
}

class ThingIndexingConfiguration {
  public Fields $custom_fields;
  public Fields $managed_fields;
  public ThingConnectivityIndexingMode $thing_connectivity_indexing_mode;
  public ThingIndexingMode $thing_indexing_mode;
}

class ThingIndexingMode {
}

class ThingName {
}

class ThingNameList {
}

class ThingTypeArn {
}

class ThingTypeDefinition {
  public ThingTypeArn $thing_type_arn;
  public ThingTypeMetadata $thing_type_metadata;
  public ThingTypeName $thing_type_name;
  public ThingTypeProperties $thing_type_properties;
}

class ThingTypeDescription {
}

class ThingTypeId {
}

class ThingTypeList {
}

class ThingTypeMetadata {
  public CreationDate $creation_date;
  public boolean $deprecated;
  public DeprecationDate $deprecation_date;
}

class ThingTypeName {
}

class ThingTypeProperties {
  public SearchableAttributes $searchable_attributes;
  public ThingTypeDescription $thing_type_description;
}

class ThrottlingException {
  public errorMessage $message;
}

class TimedOutThings {
}

class TimeoutConfig {
  public InProgressTimeoutInMinutes $in_progress_timeout_in_minutes;
}

class Timestamp {
}

class TlsContext {
  public ServerName $server_name;
}

class Token {
}

class TokenKeyName {
}

class TokenSignature {
}

class Topic {
}

class TopicPattern {
}

class TopicRule {
  public ActionList $actions;
  public AwsIotSqlVersion $aws_iot_sql_version;
  public CreatedAtDate $created_at;
  public Description $description;
  public Action $error_action;
  public IsDisabled $rule_disabled;
  public RuleName $rule_name;
  public SQL $sql;
}

class TopicRuleDestination {
  public AwsArn $arn;
  public HttpUrlDestinationProperties $http_url_properties;
  public TopicRuleDestinationStatus $status;
  public string $status_reason;
}

class TopicRuleDestinationConfiguration {
  public HttpUrlDestinationConfiguration $http_url_configuration;
}

class TopicRuleDestinationMaxResults {
}

class TopicRuleDestinationStatus {
}

class TopicRuleDestinationSummaries {
}

class TopicRuleDestinationSummary {
  public AwsArn $arn;
  public HttpUrlDestinationSummary $http_url_summary;
  public TopicRuleDestinationStatus $status;
  public string $status_reason;
}

class TopicRuleList {
}

class TopicRuleListItem {
  public CreatedAtDate $created_at;
  public RuleArn $rule_arn;
  public IsDisabled $rule_disabled;
  public RuleName $rule_name;
  public TopicPattern $topic_pattern;
}

class TopicRuleMaxResults {
}

class TopicRulePayload {
  public ActionList $actions;
  public AwsIotSqlVersion $aws_iot_sql_version;
  public Description $description;
  public Action $error_action;
  public IsDisabled $rule_disabled;
  public SQL $sql;
}

class TotalChecksCount {
}

class TotalFindingsCount {
}

class TotalResourcesCount {
}

class TransferAlreadyCompletedException {
  public errorMessage $message;
}

class TransferCertificateRequest {
  public CertificateId $certificate_id;
  public AwsAccountId $target_aws_account;
  public Message $transfer_message;
}

class TransferCertificateResponse {
  public CertificateArn $transferred_certificate_arn;
}

class TransferConflictException {
  public errorMessage $message;
}

class TransferData {
  public DateType $accept_date;
  public DateType $reject_date;
  public Message $reject_reason;
  public DateType $transfer_date;
  public Message $transfer_message;
}

class UnauthorizedException {
  public errorMessage $message;
}

class UndoDeprecate {
}

class UnsignedLong {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateAccountAuditConfigurationRequest {
  public AuditCheckConfigurations $audit_check_configurations;
  public AuditNotificationTargetConfigurations $audit_notification_target_configurations;
  public RoleArn $role_arn;
}

class UpdateAccountAuditConfigurationResponse {
}

class UpdateAuthorizerRequest {
  public AuthorizerFunctionArn $authorizer_function_arn;
  public AuthorizerName $authorizer_name;
  public AuthorizerStatus $status;
  public TokenKeyName $token_key_name;
  public PublicKeyMap $token_signing_public_keys;
}

class UpdateAuthorizerResponse {
  public AuthorizerArn $authorizer_arn;
  public AuthorizerName $authorizer_name;
}

class UpdateBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public BillingGroupProperties $billing_group_properties;
  public OptionalVersion $expected_version;
}

class UpdateBillingGroupResponse {
  public Version $version;
}

class UpdateCACertificateParams {
  public CACertificateUpdateAction $action;
}

class UpdateCACertificateRequest {
  public CertificateId $certificate_id;
  public AutoRegistrationStatus $new_auto_registration_status;
  public CACertificateStatus $new_status;
  public RegistrationConfig $registration_config;
  public RemoveAutoRegistration $remove_auto_registration;
}

class UpdateCertificateRequest {
  public CertificateId $certificate_id;
  public CertificateStatus $new_status;
}

class UpdateDeviceCertificateParams {
  public DeviceCertificateUpdateAction $action;
}

class UpdateDimensionRequest {
  public DimensionName $name;
  public DimensionStringValues $string_values;
}

class UpdateDimensionResponse {
  public DimensionArn $arn;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public DimensionName $name;
  public DimensionStringValues $string_values;
  public DimensionType $type;
}

class UpdateDomainConfigurationRequest {
  public AuthorizerConfig $authorizer_config;
  public ReservedDomainConfigurationName $domain_configuration_name;
  public DomainConfigurationStatus $domain_configuration_status;
  public RemoveAuthorizerConfig $remove_authorizer_config;
}

class UpdateDomainConfigurationResponse {
  public DomainConfigurationArn $domain_configuration_arn;
  public ReservedDomainConfigurationName $domain_configuration_name;
}

class UpdateDynamicThingGroupRequest {
  public OptionalVersion $expected_version;
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;
}

class UpdateDynamicThingGroupResponse {
  public Version $version;
}

class UpdateEventConfigurationsRequest {
  public EventConfigurations $event_configurations;
}

class UpdateEventConfigurationsResponse {
}

class UpdateIndexingConfigurationRequest {
  public ThingGroupIndexingConfiguration $thing_group_indexing_configuration;
  public ThingIndexingConfiguration $thing_indexing_configuration;
}

class UpdateIndexingConfigurationResponse {
}

class UpdateJobRequest {
  public AbortConfig $abort_config;
  public JobDescription $description;
  public JobExecutionsRolloutConfig $job_executions_rollout_config;
  public JobId $job_id;
  public PresignedUrlConfig $presigned_url_config;
  public TimeoutConfig $timeout_config;
}

class UpdateMitigationActionRequest {
  public MitigationActionName $action_name;
  public MitigationActionParams $action_params;
  public RoleArn $role_arn;
}

class UpdateMitigationActionResponse {
  public MitigationActionArn $action_arn;
  public MitigationActionId $action_id;
}

class UpdateProvisioningTemplateRequest {
  public TemplateVersionId $default_version_id;
  public TemplateDescription $description;
  public Enabled $enabled;
  public RoleArn $provisioning_role_arn;
  public TemplateName $template_name;
}

class UpdateProvisioningTemplateResponse {
}

class UpdateRoleAliasRequest {
  public CredentialDurationSeconds $credential_duration_seconds;
  public RoleAlias $role_alias;
  public RoleArn $role_arn;
}

class UpdateRoleAliasResponse {
  public RoleAlias $role_alias;
  public RoleAliasArn $role_alias_arn;
}

class UpdateScheduledAuditRequest {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public AuditFrequency $frequency;
  public ScheduledAuditName $scheduled_audit_name;
  public TargetAuditCheckNames $target_check_names;
}

class UpdateScheduledAuditResponse {
  public ScheduledAuditArn $scheduled_audit_arn;
}

class UpdateSecurityProfileRequest {
  public AdditionalMetricsToRetainList $additional_metrics_to_retain;
  public AdditionalMetricsToRetainV2List $additional_metrics_to_retain_v_2;
  public AlertTargets $alert_targets;
  public Behaviors $behaviors;
  public DeleteAdditionalMetricsToRetain $delete_additional_metrics_to_retain;
  public DeleteAlertTargets $delete_alert_targets;
  public DeleteBehaviors $delete_behaviors;
  public OptionalVersion $expected_version;
  public SecurityProfileDescription $security_profile_description;
  public SecurityProfileName $security_profile_name;
}

class UpdateSecurityProfileResponse {
  public AdditionalMetricsToRetainList $additional_metrics_to_retain;
  public AdditionalMetricsToRetainV2List $additional_metrics_to_retain_v_2;
  public AlertTargets $alert_targets;
  public Behaviors $behaviors;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public SecurityProfileArn $security_profile_arn;
  public SecurityProfileDescription $security_profile_description;
  public SecurityProfileName $security_profile_name;
  public Version $version;
}

class UpdateStreamRequest {
  public StreamDescription $description;
  public StreamFiles $files;
  public RoleArn $role_arn;
  public StreamId $stream_id;
}

class UpdateStreamResponse {
  public StreamDescription $description;
  public StreamArn $stream_arn;
  public StreamId $stream_id;
  public StreamVersion $stream_version;
}

class UpdateThingGroupRequest {
  public OptionalVersion $expected_version;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;
}

class UpdateThingGroupResponse {
  public Version $version;
}

class UpdateThingGroupsForThingRequest {
  public OverrideDynamicGroups $override_dynamic_groups;
  public ThingGroupList $thing_groups_to_add;
  public ThingGroupList $thing_groups_to_remove;
  public ThingName $thing_name;
}

class UpdateThingGroupsForThingResponse {
}

class UpdateThingRequest {
  public AttributePayload $attribute_payload;
  public OptionalVersion $expected_version;
  public RemoveThingType $remove_thing_type;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;
}

class UpdateThingResponse {
}

class UpdateTopicRuleDestinationRequest {
  public AwsArn $arn;
  public TopicRuleDestinationStatus $status;
}

class UpdateTopicRuleDestinationResponse {
}

class Url {
}

class UseBase64 {
}

class Valid {
}

class ValidateSecurityProfileBehaviorsRequest {
  public Behaviors $behaviors;
}

class ValidateSecurityProfileBehaviorsResponse {
  public Valid $valid;
  public ValidationErrors $validation_errors;
}

class ValidationError {
  public ErrorMessage $error_message;
}

class ValidationErrors {
}

class Value {
}

class Variance {
}

class Version {
}

class VersionConflictException {
  public errorMessage $message;
}

class VersionNumber {
}

class VersionsLimitExceededException {
  public errorMessage $message;
}

class ViolationEvent {
  public Behavior $behavior;
  public MetricValue $metric_value;
  public SecurityProfileName $security_profile_name;
  public DeviceDefenderThingName $thing_name;
  public Timestamp $violation_event_time;
  public ViolationEventType $violation_event_type;
  public ViolationId $violation_id;
}

class ViolationEventType {
}

class ViolationEvents {
}

class ViolationId {
}

class WaitingForDataCollectionChecksCount {
}

class errorMessage {
}

class resourceArn {
}

class resourceId {
}

