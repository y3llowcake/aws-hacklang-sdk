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

type AbortAction = string;

class AbortConfig {
  public AbortCriteriaList $criteria_list;

  public function __construct(shape(
  ?'criteria_list' => AbortCriteriaList,
  ) $s = shape()) {
    $this->criteria_list = $criteria_list ?? ;
  }
}

class AbortCriteria {
  public AbortAction $action;
  public JobExecutionFailureType $failure_type;
  public MinimumNumberOfExecutedThings $min_number_of_executed_things;
  public AbortThresholdPercentage $threshold_percentage;

  public function __construct(shape(
  ?'action' => AbortAction,
  ?'failure_type' => JobExecutionFailureType,
  ?'min_number_of_executed_things' => MinimumNumberOfExecutedThings,
  ?'threshold_percentage' => AbortThresholdPercentage,
  ) $s = shape()) {
    $this->action = $action ?? ;
    $this->failure_type = $failure_type ?? ;
    $this->min_number_of_executed_things = $min_number_of_executed_things ?? ;
    $this->threshold_percentage = $threshold_percentage ?? ;
  }
}

type AbortCriteriaList = vec<AbortCriteria>;

type AbortThresholdPercentage = float;

class AcceptCertificateTransferRequest {
  public CertificateId $certificate_id;
  public SetAsActive $set_as_active;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ?'set_as_active' => SetAsActive,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
    $this->set_as_active = $set_as_active ?? ;
  }
}

type AcmCertificateArn = string;

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

  public function __construct(shape(
  ?'cloudwatch_alarm' => CloudwatchAlarmAction,
  ?'cloudwatch_logs' => CloudwatchLogsAction,
  ?'cloudwatch_metric' => CloudwatchMetricAction,
  ?'dynamo_db' => DynamoDBAction,
  ?'dynamo_d_bv_2' => DynamoDBv2Action,
  ?'elasticsearch' => ElasticsearchAction,
  ?'firehose' => FirehoseAction,
  ?'http' => HttpAction,
  ?'iot_analytics' => IotAnalyticsAction,
  ?'iot_events' => IotEventsAction,
  ?'iot_site_wise' => IotSiteWiseAction,
  ?'kinesis' => KinesisAction,
  ?'lambda' => LambdaAction,
  ?'republish' => RepublishAction,
  ?'s_3' => S3Action,
  ?'salesforce' => SalesforceAction,
  ?'sns' => SnsAction,
  ?'sqs' => SqsAction,
  ?'step_functions' => StepFunctionsAction,
  ) $s = shape()) {
    $this->cloudwatch_alarm = $cloudwatch_alarm ?? ;
    $this->cloudwatch_logs = $cloudwatch_logs ?? ;
    $this->cloudwatch_metric = $cloudwatch_metric ?? ;
    $this->dynamo_db = $dynamo_db ?? ;
    $this->dynamo_d_bv_2 = $dynamo_d_bv_2 ?? ;
    $this->elasticsearch = $elasticsearch ?? ;
    $this->firehose = $firehose ?? ;
    $this->http = $http ?? ;
    $this->iot_analytics = $iot_analytics ?? ;
    $this->iot_events = $iot_events ?? ;
    $this->iot_site_wise = $iot_site_wise ?? ;
    $this->kinesis = $kinesis ?? ;
    $this->lambda = $lambda ?? ;
    $this->republish = $republish ?? ;
    $this->s_3 = $s_3 ?? ;
    $this->salesforce = $salesforce ?? ;
    $this->sns = $sns ?? ;
    $this->sqs = $sqs ?? ;
    $this->step_functions = $step_functions ?? ;
  }
}

type ActionList = vec<Action>;

type ActionType = string;

class ActiveViolation {
  public Behavior $behavior;
  public Timestamp $last_violation_time;
  public MetricValue $last_violation_value;
  public SecurityProfileName $security_profile_name;
  public DeviceDefenderThingName $thing_name;
  public ViolationId $violation_id;
  public Timestamp $violation_start_time;

  public function __construct(shape(
  ?'behavior' => Behavior,
  ?'last_violation_time' => Timestamp,
  ?'last_violation_value' => MetricValue,
  ?'security_profile_name' => SecurityProfileName,
  ?'thing_name' => DeviceDefenderThingName,
  ?'violation_id' => ViolationId,
  ?'violation_start_time' => Timestamp,
  ) $s = shape()) {
    $this->behavior = $behavior ?? ;
    $this->last_violation_time = $last_violation_time ?? ;
    $this->last_violation_value = $last_violation_value ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
    $this->thing_name = $thing_name ?? ;
    $this->violation_id = $violation_id ?? ;
    $this->violation_start_time = $violation_start_time ?? ;
  }
}

type ActiveViolations = vec<ActiveViolation>;

class AddThingToBillingGroupRequest {
  public BillingGroupArn $billing_group_arn;
  public BillingGroupName $billing_group_name;
  public ThingArn $thing_arn;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'billing_group_arn' => BillingGroupArn,
  ?'billing_group_name' => BillingGroupName,
  ?'thing_arn' => ThingArn,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->billing_group_arn = $billing_group_arn ?? ;
    $this->billing_group_name = $billing_group_name ?? ;
    $this->thing_arn = $thing_arn ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class AddThingToBillingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AddThingToThingGroupRequest {
  public OverrideDynamicGroups $override_dynamic_groups;
  public ThingArn $thing_arn;
  public ThingGroupArn $thing_group_arn;
  public ThingGroupName $thing_group_name;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'override_dynamic_groups' => OverrideDynamicGroups,
  ?'thing_arn' => ThingArn,
  ?'thing_group_arn' => ThingGroupArn,
  ?'thing_group_name' => ThingGroupName,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->override_dynamic_groups = $override_dynamic_groups ?? ;
    $this->thing_arn = $thing_arn ?? ;
    $this->thing_group_arn = $thing_group_arn ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class AddThingToThingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AddThingsToThingGroupParams {
  public OverrideDynamicGroups $override_dynamic_groups;
  public ThingGroupNames $thing_group_names;

  public function __construct(shape(
  ?'override_dynamic_groups' => OverrideDynamicGroups,
  ?'thing_group_names' => ThingGroupNames,
  ) $s = shape()) {
    $this->override_dynamic_groups = $override_dynamic_groups ?? ;
    $this->thing_group_names = $thing_group_names ?? ;
  }
}

type AdditionalMetricsToRetainList = vec<BehaviorMetric>;

type AdditionalMetricsToRetainV2List = vec<MetricToRetain>;

type AdditionalParameterMap = dict<AttributeKey, Value>;

type AggregationField = string;

type AlarmName = string;

class AlertTarget {
  public AlertTargetArn $alert_target_arn;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'alert_target_arn' => AlertTargetArn,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->alert_target_arn = $alert_target_arn ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type AlertTargetArn = string;

type AlertTargetType = string;

type AlertTargets = dict<AlertTargetType, AlertTarget>;

type AllowAuthorizerOverride = bool;

type AllowAutoRegistration = bool;

class Allowed {
  public Policies $policies;

  public function __construct(shape(
  ?'policies' => Policies,
  ) $s = shape()) {
    $this->policies = $policies ?? ;
  }
}

type ApproximateSecondsBeforeTimedOut = int;

type AscendingOrder = bool;

type AssetId = string;

type AssetPropertyAlias = string;

type AssetPropertyBooleanValue = string;

type AssetPropertyDoubleValue = string;

type AssetPropertyEntryId = string;

type AssetPropertyId = string;

type AssetPropertyIntegerValue = string;

type AssetPropertyOffsetInNanos = string;

type AssetPropertyQuality = string;

type AssetPropertyStringValue = string;

type AssetPropertyTimeInSeconds = string;

class AssetPropertyTimestamp {
  public AssetPropertyOffsetInNanos $offset_in_nanos;
  public AssetPropertyTimeInSeconds $time_in_seconds;

  public function __construct(shape(
  ?'offset_in_nanos' => AssetPropertyOffsetInNanos,
  ?'time_in_seconds' => AssetPropertyTimeInSeconds,
  ) $s = shape()) {
    $this->offset_in_nanos = $offset_in_nanos ?? ;
    $this->time_in_seconds = $time_in_seconds ?? ;
  }
}

class AssetPropertyValue {
  public AssetPropertyQuality $quality;
  public AssetPropertyTimestamp $timestamp;
  public AssetPropertyVariant $value;

  public function __construct(shape(
  ?'quality' => AssetPropertyQuality,
  ?'timestamp' => AssetPropertyTimestamp,
  ?'value' => AssetPropertyVariant,
  ) $s = shape()) {
    $this->quality = $quality ?? ;
    $this->timestamp = $timestamp ?? ;
    $this->value = $value ?? ;
  }
}

type AssetPropertyValueList = vec<AssetPropertyValue>;

class AssetPropertyVariant {
  public AssetPropertyBooleanValue $boolean_value;
  public AssetPropertyDoubleValue $double_value;
  public AssetPropertyIntegerValue $integer_value;
  public AssetPropertyStringValue $string_value;

  public function __construct(shape(
  ?'boolean_value' => AssetPropertyBooleanValue,
  ?'double_value' => AssetPropertyDoubleValue,
  ?'integer_value' => AssetPropertyIntegerValue,
  ?'string_value' => AssetPropertyStringValue,
  ) $s = shape()) {
    $this->boolean_value = $boolean_value ?? ;
    $this->double_value = $double_value ?? ;
    $this->integer_value = $integer_value ?? ;
    $this->string_value = $string_value ?? ;
  }
}

class AssociateTargetsWithJobRequest {
  public Comment $comment;
  public JobId $job_id;
  public JobTargets $targets;

  public function __construct(shape(
  ?'comment' => Comment,
  ?'job_id' => JobId,
  ?'targets' => JobTargets,
  ) $s = shape()) {
    $this->comment = $comment ?? ;
    $this->job_id = $job_id ?? ;
    $this->targets = $targets ?? ;
  }
}

class AssociateTargetsWithJobResponse {
  public JobDescription $description;
  public JobArn $job_arn;
  public JobId $job_id;

  public function __construct(shape(
  ?'description' => JobDescription,
  ?'job_arn' => JobArn,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->job_arn = $job_arn ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class AttachPolicyRequest {
  public PolicyName $policy_name;
  public PolicyTarget $target;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'target' => PolicyTarget,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
    $this->target = $target ?? ;
  }
}

class AttachPrincipalPolicyRequest {
  public PolicyName $policy_name;
  public Principal $principal;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'principal' => Principal,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
    $this->principal = $principal ?? ;
  }
}

class AttachSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
  public SecurityProfileTargetArn $security_profile_target_arn;

  public function __construct(shape(
  ?'security_profile_name' => SecurityProfileName,
  ?'security_profile_target_arn' => SecurityProfileTargetArn,
  ) $s = shape()) {
    $this->security_profile_name = $security_profile_name ?? ;
    $this->security_profile_target_arn = $security_profile_target_arn ?? ;
  }
}

class AttachSecurityProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AttachThingPrincipalRequest {
  public Principal $principal;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'principal' => Principal,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->principal = $principal ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class AttachThingPrincipalResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AttributeKey = string;

type AttributeName = string;

class AttributePayload {
  public Attributes $attributes;
  public Flag $merge;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'merge' => Flag,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->merge = $merge ?? ;
  }
}

type AttributeValue = string;

type Attributes = dict<AttributeName, AttributeValue>;

type AttributesMap = dict<AttributeKey, Value>;

class AuditCheckConfiguration {
  public Enabled $enabled;

  public function __construct(shape(
  ?'enabled' => Enabled,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
  }
}

type AuditCheckConfigurations = dict<AuditCheckName, AuditCheckConfiguration>;

class AuditCheckDetails {
  public CheckCompliant $check_compliant;
  public AuditCheckRunStatus $check_run_status;
  public ErrorCode $error_code;
  public ErrorMessage $message;
  public NonCompliantResourcesCount $non_compliant_resources_count;
  public TotalResourcesCount $total_resources_count;

  public function __construct(shape(
  ?'check_compliant' => CheckCompliant,
  ?'check_run_status' => AuditCheckRunStatus,
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ?'non_compliant_resources_count' => NonCompliantResourcesCount,
  ?'total_resources_count' => TotalResourcesCount,
  ) $s = shape()) {
    $this->check_compliant = $check_compliant ?? ;
    $this->check_run_status = $check_run_status ?? ;
    $this->error_code = $error_code ?? ;
    $this->message = $message ?? ;
    $this->non_compliant_resources_count = $non_compliant_resources_count ?? ;
    $this->total_resources_count = $total_resources_count ?? ;
  }
}

type AuditCheckName = string;

type AuditCheckRunStatus = string;

type AuditCheckToActionsMapping = dict<AuditCheckName, MitigationActionNameList>;

type AuditCheckToReasonCodeFilter = dict<AuditCheckName, ReasonForNonComplianceCodes>;

type AuditDetails = dict<AuditCheckName, AuditCheckDetails>;

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

  public function __construct(shape(
  ?'check_name' => AuditCheckName,
  ?'finding_id' => FindingId,
  ?'finding_time' => Timestamp,
  ?'non_compliant_resource' => NonCompliantResource,
  ?'reason_for_non_compliance' => ReasonForNonCompliance,
  ?'reason_for_non_compliance_code' => ReasonForNonComplianceCode,
  ?'related_resources' => RelatedResources,
  ?'severity' => AuditFindingSeverity,
  ?'task_id' => AuditTaskId,
  ?'task_start_time' => Timestamp,
  ) $s = shape()) {
    $this->check_name = $check_name ?? ;
    $this->finding_id = $finding_id ?? ;
    $this->finding_time = $finding_time ?? ;
    $this->non_compliant_resource = $non_compliant_resource ?? ;
    $this->reason_for_non_compliance = $reason_for_non_compliance ?? ;
    $this->reason_for_non_compliance_code = $reason_for_non_compliance_code ?? ;
    $this->related_resources = $related_resources ?? ;
    $this->severity = $severity ?? ;
    $this->task_id = $task_id ?? ;
    $this->task_start_time = $task_start_time ?? ;
  }
}

type AuditFindingSeverity = string;

type AuditFindings = vec<AuditFinding>;

type AuditFrequency = string;

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

  public function __construct(shape(
  ?'action_id' => MitigationActionId,
  ?'action_name' => MitigationActionName,
  ?'end_time' => Timestamp,
  ?'error_code' => ErrorCode,
  ?'finding_id' => FindingId,
  ?'message' => ErrorMessage,
  ?'start_time' => Timestamp,
  ?'status' => AuditMitigationActionsExecutionStatus,
  ?'task_id' => AuditMitigationActionsTaskId,
  ) $s = shape()) {
    $this->action_id = $action_id ?? ;
    $this->action_name = $action_name ?? ;
    $this->end_time = $end_time ?? ;
    $this->error_code = $error_code ?? ;
    $this->finding_id = $finding_id ?? ;
    $this->message = $message ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
    $this->task_id = $task_id ?? ;
  }
}

type AuditMitigationActionExecutionMetadataList = vec<AuditMitigationActionExecutionMetadata>;

type AuditMitigationActionsExecutionStatus = string;

type AuditMitigationActionsTaskId = string;

class AuditMitigationActionsTaskMetadata {
  public Timestamp $start_time;
  public AuditMitigationActionsTaskId $task_id;
  public AuditMitigationActionsTaskStatus $task_status;

  public function __construct(shape(
  ?'start_time' => Timestamp,
  ?'task_id' => AuditMitigationActionsTaskId,
  ?'task_status' => AuditMitigationActionsTaskStatus,
  ) $s = shape()) {
    $this->start_time = $start_time ?? ;
    $this->task_id = $task_id ?? ;
    $this->task_status = $task_status ?? ;
  }
}

type AuditMitigationActionsTaskMetadataList = vec<AuditMitigationActionsTaskMetadata>;

type AuditMitigationActionsTaskStatistics = dict<AuditCheckName, TaskStatisticsForAuditCheck>;

type AuditMitigationActionsTaskStatus = string;

class AuditMitigationActionsTaskTarget {
  public AuditCheckToReasonCodeFilter $audit_check_to_reason_code_filter;
  public AuditTaskId $audit_task_id;
  public FindingIds $finding_ids;

  public function __construct(shape(
  ?'audit_check_to_reason_code_filter' => AuditCheckToReasonCodeFilter,
  ?'audit_task_id' => AuditTaskId,
  ?'finding_ids' => FindingIds,
  ) $s = shape()) {
    $this->audit_check_to_reason_code_filter = $audit_check_to_reason_code_filter ?? ;
    $this->audit_task_id = $audit_task_id ?? ;
    $this->finding_ids = $finding_ids ?? ;
  }
}

class AuditNotificationTarget {
  public Enabled $enabled;
  public RoleArn $role_arn;
  public TargetArn $target_arn;

  public function __construct(shape(
  ?'enabled' => Enabled,
  ?'role_arn' => RoleArn,
  ?'target_arn' => TargetArn,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->target_arn = $target_arn ?? ;
  }
}

type AuditNotificationTargetConfigurations = dict<AuditNotificationType, AuditNotificationTarget>;

type AuditNotificationType = string;

type AuditTaskId = string;

class AuditTaskMetadata {
  public AuditTaskId $task_id;
  public AuditTaskStatus $task_status;
  public AuditTaskType $task_type;

  public function __construct(shape(
  ?'task_id' => AuditTaskId,
  ?'task_status' => AuditTaskStatus,
  ?'task_type' => AuditTaskType,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
    $this->task_status = $task_status ?? ;
    $this->task_type = $task_type ?? ;
  }
}

type AuditTaskMetadataList = vec<AuditTaskMetadata>;

type AuditTaskStatus = string;

type AuditTaskType = string;

type AuthDecision = string;

class AuthInfo {
  public ActionType $action_type;
  public Resources $resources;

  public function __construct(shape(
  ?'action_type' => ActionType,
  ?'resources' => Resources,
  ) $s = shape()) {
    $this->action_type = $action_type ?? ;
    $this->resources = $resources ?? ;
  }
}

type AuthInfos = vec<AuthInfo>;

class AuthResult {
  public Allowed $allowed;
  public AuthDecision $auth_decision;
  public AuthInfo $auth_info;
  public Denied $denied;
  public MissingContextValues $missing_context_values;

  public function __construct(shape(
  ?'allowed' => Allowed,
  ?'auth_decision' => AuthDecision,
  ?'auth_info' => AuthInfo,
  ?'denied' => Denied,
  ?'missing_context_values' => MissingContextValues,
  ) $s = shape()) {
    $this->allowed = $allowed ?? ;
    $this->auth_decision = $auth_decision ?? ;
    $this->auth_info = $auth_info ?? ;
    $this->denied = $denied ?? ;
    $this->missing_context_values = $missing_context_values ?? ;
  }
}

type AuthResults = vec<AuthResult>;

type AuthorizerArn = string;

class AuthorizerConfig {
  public AllowAuthorizerOverride $allow_authorizer_override;
  public AuthorizerName $default_authorizer_name;

  public function __construct(shape(
  ?'allow_authorizer_override' => AllowAuthorizerOverride,
  ?'default_authorizer_name' => AuthorizerName,
  ) $s = shape()) {
    $this->allow_authorizer_override = $allow_authorizer_override ?? ;
    $this->default_authorizer_name = $default_authorizer_name ?? ;
  }
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

  public function __construct(shape(
  ?'authorizer_arn' => AuthorizerArn,
  ?'authorizer_function_arn' => AuthorizerFunctionArn,
  ?'authorizer_name' => AuthorizerName,
  ?'creation_date' => DateType,
  ?'last_modified_date' => DateType,
  ?'signing_disabled' => BooleanKey,
  ?'status' => AuthorizerStatus,
  ?'token_key_name' => TokenKeyName,
  ?'token_signing_public_keys' => PublicKeyMap,
  ) $s = shape()) {
    $this->authorizer_arn = $authorizer_arn ?? ;
    $this->authorizer_function_arn = $authorizer_function_arn ?? ;
    $this->authorizer_name = $authorizer_name ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->signing_disabled = $signing_disabled ?? ;
    $this->status = $status ?? ;
    $this->token_key_name = $token_key_name ?? ;
    $this->token_signing_public_keys = $token_signing_public_keys ?? ;
  }
}

type AuthorizerFunctionArn = string;

type AuthorizerName = string;

type AuthorizerStatus = string;

class AuthorizerSummary {
  public AuthorizerArn $authorizer_arn;
  public AuthorizerName $authorizer_name;

  public function __construct(shape(
  ?'authorizer_arn' => AuthorizerArn,
  ?'authorizer_name' => AuthorizerName,
  ) $s = shape()) {
    $this->authorizer_arn = $authorizer_arn ?? ;
    $this->authorizer_name = $authorizer_name ?? ;
  }
}

type Authorizers = vec<AuthorizerSummary>;

type AutoRegistrationStatus = string;

type Average = float;

type AwsAccountId = string;

type AwsArn = string;

type AwsIotJobArn = string;

type AwsIotJobId = string;

type AwsIotSqlVersion = string;

class AwsJobExecutionsRolloutConfig {
  public MaximumPerMinute $maximum_per_minute;

  public function __construct(shape(
  ?'maximum_per_minute' => MaximumPerMinute,
  ) $s = shape()) {
    $this->maximum_per_minute = $maximum_per_minute ?? ;
  }
}

class AwsJobPresignedUrlConfig {
  public ExpiresInSeconds $expires_in_sec;

  public function __construct(shape(
  ?'expires_in_sec' => ExpiresInSeconds,
  ) $s = shape()) {
    $this->expires_in_sec = $expires_in_sec ?? ;
  }
}

class Behavior {
  public BehaviorCriteria $criteria;
  public BehaviorMetric $metric;
  public MetricDimension $metric_dimension;
  public BehaviorName $name;

  public function __construct(shape(
  ?'criteria' => BehaviorCriteria,
  ?'metric' => BehaviorMetric,
  ?'metric_dimension' => MetricDimension,
  ?'name' => BehaviorName,
  ) $s = shape()) {
    $this->criteria = $criteria ?? ;
    $this->metric = $metric ?? ;
    $this->metric_dimension = $metric_dimension ?? ;
    $this->name = $name ?? ;
  }
}

class BehaviorCriteria {
  public ComparisonOperator $comparison_operator;
  public ConsecutiveDatapointsToAlarm $consecutive_datapoints_to_alarm;
  public ConsecutiveDatapointsToClear $consecutive_datapoints_to_clear;
  public DurationSeconds $duration_seconds;
  public StatisticalThreshold $statistical_threshold;
  public MetricValue $value;

  public function __construct(shape(
  ?'comparison_operator' => ComparisonOperator,
  ?'consecutive_datapoints_to_alarm' => ConsecutiveDatapointsToAlarm,
  ?'consecutive_datapoints_to_clear' => ConsecutiveDatapointsToClear,
  ?'duration_seconds' => DurationSeconds,
  ?'statistical_threshold' => StatisticalThreshold,
  ?'value' => MetricValue,
  ) $s = shape()) {
    $this->comparison_operator = $comparison_operator ?? ;
    $this->consecutive_datapoints_to_alarm = $consecutive_datapoints_to_alarm ?? ;
    $this->consecutive_datapoints_to_clear = $consecutive_datapoints_to_clear ?? ;
    $this->duration_seconds = $duration_seconds ?? ;
    $this->statistical_threshold = $statistical_threshold ?? ;
    $this->value = $value ?? ;
  }
}

type BehaviorMetric = string;

type BehaviorName = string;

type Behaviors = vec<Behavior>;

type BillingGroupArn = string;

type BillingGroupDescription = string;

type BillingGroupId = string;

class BillingGroupMetadata {
  public CreationDate $creation_date;

  public function __construct(shape(
  ?'creation_date' => CreationDate,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
  }
}

type BillingGroupName = string;

type BillingGroupNameAndArnList = vec<GroupNameAndArn>;

class BillingGroupProperties {
  public BillingGroupDescription $billing_group_description;

  public function __construct(shape(
  ?'billing_group_description' => BillingGroupDescription,
  ) $s = shape()) {
    $this->billing_group_description = $billing_group_description ?? ;
  }
}

type Boolean = bool;

type BooleanKey = bool;

type BucketName = string;

class CACertificate {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public DateType $creation_date;
  public CACertificateStatus $status;

  public function __construct(shape(
  ?'certificate_arn' => CertificateArn,
  ?'certificate_id' => CertificateId,
  ?'creation_date' => DateType,
  ?'status' => CACertificateStatus,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_id = $certificate_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->status = $status ?? ;
  }
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

  public function __construct(shape(
  ?'auto_registration_status' => AutoRegistrationStatus,
  ?'certificate_arn' => CertificateArn,
  ?'certificate_id' => CertificateId,
  ?'certificate_pem' => CertificatePem,
  ?'creation_date' => DateType,
  ?'customer_version' => CustomerVersion,
  ?'generation_id' => GenerationId,
  ?'last_modified_date' => DateType,
  ?'owned_by' => AwsAccountId,
  ?'status' => CACertificateStatus,
  ?'validity' => CertificateValidity,
  ) $s = shape()) {
    $this->auto_registration_status = $auto_registration_status ?? ;
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_id = $certificate_id ?? ;
    $this->certificate_pem = $certificate_pem ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->customer_version = $customer_version ?? ;
    $this->generation_id = $generation_id ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->owned_by = $owned_by ?? ;
    $this->status = $status ?? ;
    $this->validity = $validity ?? ;
  }
}

type CACertificateStatus = string;

type CACertificateUpdateAction = string;

type CACertificates = vec<CACertificate>;

class CancelAuditMitigationActionsTaskRequest {
  public AuditMitigationActionsTaskId $task_id;

  public function __construct(shape(
  ?'task_id' => AuditMitigationActionsTaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
  }
}

class CancelAuditMitigationActionsTaskResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CancelAuditTaskRequest {
  public AuditTaskId $task_id;

  public function __construct(shape(
  ?'task_id' => AuditTaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
  }
}

class CancelAuditTaskResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CancelCertificateTransferRequest {
  public CertificateId $certificate_id;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
  }
}

class CancelJobExecutionRequest {
  public ExpectedVersion $expected_version;
  public ForceFlag $force;
  public JobId $job_id;
  public DetailsMap $status_details;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'expected_version' => ExpectedVersion,
  ?'force' => ForceFlag,
  ?'job_id' => JobId,
  ?'status_details' => DetailsMap,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->expected_version = $expected_version ?? ;
    $this->force = $force ?? ;
    $this->job_id = $job_id ?? ;
    $this->status_details = $status_details ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class CancelJobRequest {
  public Comment $comment;
  public ForceFlag $force;
  public JobId $job_id;
  public ReasonCode $reason_code;

  public function __construct(shape(
  ?'comment' => Comment,
  ?'force' => ForceFlag,
  ?'job_id' => JobId,
  ?'reason_code' => ReasonCode,
  ) $s = shape()) {
    $this->comment = $comment ?? ;
    $this->force = $force ?? ;
    $this->job_id = $job_id ?? ;
    $this->reason_code = $reason_code ?? ;
  }
}

class CancelJobResponse {
  public JobDescription $description;
  public JobArn $job_arn;
  public JobId $job_id;

  public function __construct(shape(
  ?'description' => JobDescription,
  ?'job_arn' => JobArn,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->job_arn = $job_arn ?? ;
    $this->job_id = $job_id ?? ;
  }
}

type CanceledChecksCount = int;

type CanceledFindingsCount = int;

type CanceledThings = int;

type CannedAccessControlList = string;

class Certificate {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public DateType $creation_date;
  public CertificateStatus $status;

  public function __construct(shape(
  ?'certificate_arn' => CertificateArn,
  ?'certificate_id' => CertificateId,
  ?'creation_date' => DateType,
  ?'status' => CertificateStatus,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_id = $certificate_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->status = $status ?? ;
  }
}

type CertificateArn = string;

class CertificateConflictException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
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

  public function __construct(shape(
  ?'ca_certificate_id' => CertificateId,
  ?'certificate_arn' => CertificateArn,
  ?'certificate_id' => CertificateId,
  ?'certificate_pem' => CertificatePem,
  ?'creation_date' => DateType,
  ?'customer_version' => CustomerVersion,
  ?'generation_id' => GenerationId,
  ?'last_modified_date' => DateType,
  ?'owned_by' => AwsAccountId,
  ?'previous_owned_by' => AwsAccountId,
  ?'status' => CertificateStatus,
  ?'transfer_data' => TransferData,
  ?'validity' => CertificateValidity,
  ) $s = shape()) {
    $this->ca_certificate_id = $ca_certificate_id ?? ;
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_id = $certificate_id ?? ;
    $this->certificate_pem = $certificate_pem ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->customer_version = $customer_version ?? ;
    $this->generation_id = $generation_id ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->owned_by = $owned_by ?? ;
    $this->previous_owned_by = $previous_owned_by ?? ;
    $this->status = $status ?? ;
    $this->transfer_data = $transfer_data ?? ;
    $this->validity = $validity ?? ;
  }
}

type CertificateId = string;

type CertificateName = string;

type CertificatePathOnDevice = string;

type CertificatePem = string;

type CertificateSigningRequest = string;

class CertificateStateException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type CertificateStatus = string;

class CertificateValidationException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CertificateValidity {
  public DateType $not_after;
  public DateType $not_before;

  public function __construct(shape(
  ?'not_after' => DateType,
  ?'not_before' => DateType,
  ) $s = shape()) {
    $this->not_after = $not_after ?? ;
    $this->not_before = $not_before ?? ;
  }
}

type Certificates = vec<Certificate>;

type ChannelName = string;

type CheckCompliant = bool;

type Cidr = string;

type Cidrs = vec<Cidr>;

class ClearDefaultAuthorizerRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClearDefaultAuthorizerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ClientId = string;

type ClientRequestToken = string;

class CloudwatchAlarmAction {
  public AlarmName $alarm_name;
  public AwsArn $role_arn;
  public StateReason $state_reason;
  public StateValue $state_value;

  public function __construct(shape(
  ?'alarm_name' => AlarmName,
  ?'role_arn' => AwsArn,
  ?'state_reason' => StateReason,
  ?'state_value' => StateValue,
  ) $s = shape()) {
    $this->alarm_name = $alarm_name ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->state_reason = $state_reason ?? ;
    $this->state_value = $state_value ?? ;
  }
}

class CloudwatchLogsAction {
  public LogGroupName $log_group_name;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class CloudwatchMetricAction {
  public string $metric_name;
  public string $metric_namespace;
  public string $metric_timestamp;
  public string $metric_unit;
  public string $metric_value;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'metric_name' => string,
  ?'metric_namespace' => string,
  ?'metric_timestamp' => string,
  ?'metric_unit' => string,
  ?'metric_value' => string,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? ;
    $this->metric_namespace = $metric_namespace ?? ;
    $this->metric_timestamp = $metric_timestamp ?? ;
    $this->metric_unit = $metric_unit ?? ;
    $this->metric_value = $metric_value ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type Code = string;

class CodeSigning {
  public SigningJobId $aws_signer_job_id;
  public CustomCodeSigning $custom_code_signing;
  public StartSigningJobParameter $start_signing_job_parameter;

  public function __construct(shape(
  ?'aws_signer_job_id' => SigningJobId,
  ?'custom_code_signing' => CustomCodeSigning,
  ?'start_signing_job_parameter' => StartSigningJobParameter,
  ) $s = shape()) {
    $this->aws_signer_job_id = $aws_signer_job_id ?? ;
    $this->custom_code_signing = $custom_code_signing ?? ;
    $this->start_signing_job_parameter = $start_signing_job_parameter ?? ;
  }
}

class CodeSigningCertificateChain {
  public CertificateName $certificate_name;
  public InlineDocument $inline_document;

  public function __construct(shape(
  ?'certificate_name' => CertificateName,
  ?'inline_document' => InlineDocument,
  ) $s = shape()) {
    $this->certificate_name = $certificate_name ?? ;
    $this->inline_document = $inline_document ?? ;
  }
}

class CodeSigningSignature {
  public Signature $inline_document;

  public function __construct(shape(
  ?'inline_document' => Signature,
  ) $s = shape()) {
    $this->inline_document = $inline_document ?? ;
  }
}

type CognitoIdentityPoolId = string;

type Comment = string;

type ComparisonOperator = string;

type CompliantChecksCount = int;

class Configuration {
  public Enabled $enabled;

  public function __construct(shape(
  ?'enabled' => Enabled,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
  }
}

class ConfirmTopicRuleDestinationRequest {
  public ConfirmationToken $confirmation_token;

  public function __construct(shape(
  ?'confirmation_token' => ConfirmationToken,
  ) $s = shape()) {
    $this->confirmation_token = $confirmation_token ?? ;
  }
}

class ConfirmTopicRuleDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ConfirmationToken = string;

class ConflictingResourceUpdateException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ConnectivityTimestamp = int;

type ConsecutiveDatapointsToAlarm = int;

type ConsecutiveDatapointsToClear = int;

type Count = int;

class CreateAuthorizerRequest {
  public AuthorizerFunctionArn $authorizer_function_arn;
  public AuthorizerName $authorizer_name;
  public BooleanKey $signing_disabled;
  public AuthorizerStatus $status;
  public TokenKeyName $token_key_name;
  public PublicKeyMap $token_signing_public_keys;

  public function __construct(shape(
  ?'authorizer_function_arn' => AuthorizerFunctionArn,
  ?'authorizer_name' => AuthorizerName,
  ?'signing_disabled' => BooleanKey,
  ?'status' => AuthorizerStatus,
  ?'token_key_name' => TokenKeyName,
  ?'token_signing_public_keys' => PublicKeyMap,
  ) $s = shape()) {
    $this->authorizer_function_arn = $authorizer_function_arn ?? ;
    $this->authorizer_name = $authorizer_name ?? ;
    $this->signing_disabled = $signing_disabled ?? ;
    $this->status = $status ?? ;
    $this->token_key_name = $token_key_name ?? ;
    $this->token_signing_public_keys = $token_signing_public_keys ?? ;
  }
}

class CreateAuthorizerResponse {
  public AuthorizerArn $authorizer_arn;
  public AuthorizerName $authorizer_name;

  public function __construct(shape(
  ?'authorizer_arn' => AuthorizerArn,
  ?'authorizer_name' => AuthorizerName,
  ) $s = shape()) {
    $this->authorizer_arn = $authorizer_arn ?? ;
    $this->authorizer_name = $authorizer_name ?? ;
  }
}

class CreateBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public BillingGroupProperties $billing_group_properties;
  public TagList $tags;

  public function __construct(shape(
  ?'billing_group_name' => BillingGroupName,
  ?'billing_group_properties' => BillingGroupProperties,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->billing_group_name = $billing_group_name ?? ;
    $this->billing_group_properties = $billing_group_properties ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateBillingGroupResponse {
  public BillingGroupArn $billing_group_arn;
  public BillingGroupId $billing_group_id;
  public BillingGroupName $billing_group_name;

  public function __construct(shape(
  ?'billing_group_arn' => BillingGroupArn,
  ?'billing_group_id' => BillingGroupId,
  ?'billing_group_name' => BillingGroupName,
  ) $s = shape()) {
    $this->billing_group_arn = $billing_group_arn ?? ;
    $this->billing_group_id = $billing_group_id ?? ;
    $this->billing_group_name = $billing_group_name ?? ;
  }
}

class CreateCertificateFromCsrRequest {
  public CertificateSigningRequest $certificate_signing_request;
  public SetAsActive $set_as_active;

  public function __construct(shape(
  ?'certificate_signing_request' => CertificateSigningRequest,
  ?'set_as_active' => SetAsActive,
  ) $s = shape()) {
    $this->certificate_signing_request = $certificate_signing_request ?? ;
    $this->set_as_active = $set_as_active ?? ;
  }
}

class CreateCertificateFromCsrResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public CertificatePem $certificate_pem;

  public function __construct(shape(
  ?'certificate_arn' => CertificateArn,
  ?'certificate_id' => CertificateId,
  ?'certificate_pem' => CertificatePem,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_id = $certificate_id ?? ;
    $this->certificate_pem = $certificate_pem ?? ;
  }
}

class CreateDimensionRequest {
  public ClientRequestToken $client_request_token;
  public DimensionName $name;
  public DimensionStringValues $string_values;
  public TagList $tags;
  public DimensionType $type;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'name' => DimensionName,
  ?'string_values' => DimensionStringValues,
  ?'tags' => TagList,
  ?'type' => DimensionType,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->name = $name ?? ;
    $this->string_values = $string_values ?? ;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
  }
}

class CreateDimensionResponse {
  public DimensionArn $arn;
  public DimensionName $name;

  public function __construct(shape(
  ?'arn' => DimensionArn,
  ?'name' => DimensionName,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->name = $name ?? ;
  }
}

class CreateDomainConfigurationRequest {
  public AuthorizerConfig $authorizer_config;
  public DomainConfigurationName $domain_configuration_name;
  public DomainName $domain_name;
  public ServerCertificateArns $server_certificate_arns;
  public ServiceType $service_type;
  public AcmCertificateArn $validation_certificate_arn;

  public function __construct(shape(
  ?'authorizer_config' => AuthorizerConfig,
  ?'domain_configuration_name' => DomainConfigurationName,
  ?'domain_name' => DomainName,
  ?'server_certificate_arns' => ServerCertificateArns,
  ?'service_type' => ServiceType,
  ?'validation_certificate_arn' => AcmCertificateArn,
  ) $s = shape()) {
    $this->authorizer_config = $authorizer_config ?? ;
    $this->domain_configuration_name = $domain_configuration_name ?? ;
    $this->domain_name = $domain_name ?? ;
    $this->server_certificate_arns = $server_certificate_arns ?? ;
    $this->service_type = $service_type ?? ;
    $this->validation_certificate_arn = $validation_certificate_arn ?? ;
  }
}

class CreateDomainConfigurationResponse {
  public DomainConfigurationArn $domain_configuration_arn;
  public DomainConfigurationName $domain_configuration_name;

  public function __construct(shape(
  ?'domain_configuration_arn' => DomainConfigurationArn,
  ?'domain_configuration_name' => DomainConfigurationName,
  ) $s = shape()) {
    $this->domain_configuration_arn = $domain_configuration_arn ?? ;
    $this->domain_configuration_name = $domain_configuration_name ?? ;
  }
}

class CreateDynamicThingGroupRequest {
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
  public TagList $tags;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;

  public function __construct(shape(
  ?'index_name' => IndexName,
  ?'query_string' => QueryString,
  ?'query_version' => QueryVersion,
  ?'tags' => TagList,
  ?'thing_group_name' => ThingGroupName,
  ?'thing_group_properties' => ThingGroupProperties,
  ) $s = shape()) {
    $this->index_name = $index_name ?? ;
    $this->query_string = $query_string ?? ;
    $this->query_version = $query_version ?? ;
    $this->tags = $tags ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
    $this->thing_group_properties = $thing_group_properties ?? ;
  }
}

class CreateDynamicThingGroupResponse {
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
  public ThingGroupArn $thing_group_arn;
  public ThingGroupId $thing_group_id;
  public ThingGroupName $thing_group_name;

  public function __construct(shape(
  ?'index_name' => IndexName,
  ?'query_string' => QueryString,
  ?'query_version' => QueryVersion,
  ?'thing_group_arn' => ThingGroupArn,
  ?'thing_group_id' => ThingGroupId,
  ?'thing_group_name' => ThingGroupName,
  ) $s = shape()) {
    $this->index_name = $index_name ?? ;
    $this->query_string = $query_string ?? ;
    $this->query_version = $query_version ?? ;
    $this->thing_group_arn = $thing_group_arn ?? ;
    $this->thing_group_id = $thing_group_id ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
  }
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

  public function __construct(shape(
  ?'abort_config' => AbortConfig,
  ?'description' => JobDescription,
  ?'document' => JobDocument,
  ?'document_source' => JobDocumentSource,
  ?'job_executions_rollout_config' => JobExecutionsRolloutConfig,
  ?'job_id' => JobId,
  ?'presigned_url_config' => PresignedUrlConfig,
  ?'tags' => TagList,
  ?'target_selection' => TargetSelection,
  ?'targets' => JobTargets,
  ?'timeout_config' => TimeoutConfig,
  ) $s = shape()) {
    $this->abort_config = $abort_config ?? ;
    $this->description = $description ?? ;
    $this->document = $document ?? ;
    $this->document_source = $document_source ?? ;
    $this->job_executions_rollout_config = $job_executions_rollout_config ?? ;
    $this->job_id = $job_id ?? ;
    $this->presigned_url_config = $presigned_url_config ?? ;
    $this->tags = $tags ?? ;
    $this->target_selection = $target_selection ?? ;
    $this->targets = $targets ?? ;
    $this->timeout_config = $timeout_config ?? ;
  }
}

class CreateJobResponse {
  public JobDescription $description;
  public JobArn $job_arn;
  public JobId $job_id;

  public function __construct(shape(
  ?'description' => JobDescription,
  ?'job_arn' => JobArn,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->job_arn = $job_arn ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class CreateKeysAndCertificateRequest {
  public SetAsActive $set_as_active;

  public function __construct(shape(
  ?'set_as_active' => SetAsActive,
  ) $s = shape()) {
    $this->set_as_active = $set_as_active ?? ;
  }
}

class CreateKeysAndCertificateResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public CertificatePem $certificate_pem;
  public KeyPair $key_pair;

  public function __construct(shape(
  ?'certificate_arn' => CertificateArn,
  ?'certificate_id' => CertificateId,
  ?'certificate_pem' => CertificatePem,
  ?'key_pair' => KeyPair,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_id = $certificate_id ?? ;
    $this->certificate_pem = $certificate_pem ?? ;
    $this->key_pair = $key_pair ?? ;
  }
}

class CreateMitigationActionRequest {
  public MitigationActionName $action_name;
  public MitigationActionParams $action_params;
  public RoleArn $role_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'action_name' => MitigationActionName,
  ?'action_params' => MitigationActionParams,
  ?'role_arn' => RoleArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
    $this->action_params = $action_params ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateMitigationActionResponse {
  public MitigationActionArn $action_arn;
  public MitigationActionId $action_id;

  public function __construct(shape(
  ?'action_arn' => MitigationActionArn,
  ?'action_id' => MitigationActionId,
  ) $s = shape()) {
    $this->action_arn = $action_arn ?? ;
    $this->action_id = $action_id ?? ;
  }
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

  public function __construct(shape(
  ?'additional_parameters' => AdditionalParameterMap,
  ?'aws_job_executions_rollout_config' => AwsJobExecutionsRolloutConfig,
  ?'aws_job_presigned_url_config' => AwsJobPresignedUrlConfig,
  ?'description' => OTAUpdateDescription,
  ?'files' => OTAUpdateFiles,
  ?'ota_update_id' => OTAUpdateId,
  ?'protocols' => Protocols,
  ?'role_arn' => RoleArn,
  ?'tags' => TagList,
  ?'target_selection' => TargetSelection,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->additional_parameters = $additional_parameters ?? ;
    $this->aws_job_executions_rollout_config = $aws_job_executions_rollout_config ?? ;
    $this->aws_job_presigned_url_config = $aws_job_presigned_url_config ?? ;
    $this->description = $description ?? ;
    $this->files = $files ?? ;
    $this->ota_update_id = $ota_update_id ?? ;
    $this->protocols = $protocols ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->tags = $tags ?? ;
    $this->target_selection = $target_selection ?? ;
    $this->targets = $targets ?? ;
  }
}

class CreateOTAUpdateResponse {
  public AwsIotJobArn $aws_iot_job_arn;
  public AwsIotJobId $aws_iot_job_id;
  public OTAUpdateArn $ota_update_arn;
  public OTAUpdateId $ota_update_id;
  public OTAUpdateStatus $ota_update_status;

  public function __construct(shape(
  ?'aws_iot_job_arn' => AwsIotJobArn,
  ?'aws_iot_job_id' => AwsIotJobId,
  ?'ota_update_arn' => OTAUpdateArn,
  ?'ota_update_id' => OTAUpdateId,
  ?'ota_update_status' => OTAUpdateStatus,
  ) $s = shape()) {
    $this->aws_iot_job_arn = $aws_iot_job_arn ?? ;
    $this->aws_iot_job_id = $aws_iot_job_id ?? ;
    $this->ota_update_arn = $ota_update_arn ?? ;
    $this->ota_update_id = $ota_update_id ?? ;
    $this->ota_update_status = $ota_update_status ?? ;
  }
}

class CreatePolicyRequest {
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'policy_document' => PolicyDocument,
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->policy_document = $policy_document ?? ;
    $this->policy_name = $policy_name ?? ;
  }
}

class CreatePolicyResponse {
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;

  public function __construct(shape(
  ?'policy_arn' => PolicyArn,
  ?'policy_document' => PolicyDocument,
  ?'policy_name' => PolicyName,
  ?'policy_version_id' => PolicyVersionId,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? ;
    $this->policy_document = $policy_document ?? ;
    $this->policy_name = $policy_name ?? ;
    $this->policy_version_id = $policy_version_id ?? ;
  }
}

class CreatePolicyVersionRequest {
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
  public SetAsDefault $set_as_default;

  public function __construct(shape(
  ?'policy_document' => PolicyDocument,
  ?'policy_name' => PolicyName,
  ?'set_as_default' => SetAsDefault,
  ) $s = shape()) {
    $this->policy_document = $policy_document ?? ;
    $this->policy_name = $policy_name ?? ;
    $this->set_as_default = $set_as_default ?? ;
  }
}

class CreatePolicyVersionResponse {
  public IsDefaultVersion $is_default_version;
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyVersionId $policy_version_id;

  public function __construct(shape(
  ?'is_default_version' => IsDefaultVersion,
  ?'policy_arn' => PolicyArn,
  ?'policy_document' => PolicyDocument,
  ?'policy_version_id' => PolicyVersionId,
  ) $s = shape()) {
    $this->is_default_version = $is_default_version ?? ;
    $this->policy_arn = $policy_arn ?? ;
    $this->policy_document = $policy_document ?? ;
    $this->policy_version_id = $policy_version_id ?? ;
  }
}

class CreateProvisioningClaimRequest {
  public TemplateName $template_name;

  public function __construct(shape(
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
  }
}

class CreateProvisioningClaimResponse {
  public CertificateId $certificate_id;
  public CertificatePem $certificate_pem;
  public DateType $expiration;
  public KeyPair $key_pair;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ?'certificate_pem' => CertificatePem,
  ?'expiration' => DateType,
  ?'key_pair' => KeyPair,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
    $this->certificate_pem = $certificate_pem ?? ;
    $this->expiration = $expiration ?? ;
    $this->key_pair = $key_pair ?? ;
  }
}

class CreateProvisioningTemplateRequest {
  public TemplateDescription $description;
  public Enabled $enabled;
  public RoleArn $provisioning_role_arn;
  public TagList $tags;
  public TemplateBody $template_body;
  public TemplateName $template_name;

  public function __construct(shape(
  ?'description' => TemplateDescription,
  ?'enabled' => Enabled,
  ?'provisioning_role_arn' => RoleArn,
  ?'tags' => TagList,
  ?'template_body' => TemplateBody,
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->enabled = $enabled ?? ;
    $this->provisioning_role_arn = $provisioning_role_arn ?? ;
    $this->tags = $tags ?? ;
    $this->template_body = $template_body ?? ;
    $this->template_name = $template_name ?? ;
  }
}

class CreateProvisioningTemplateResponse {
  public TemplateVersionId $default_version_id;
  public TemplateArn $template_arn;
  public TemplateName $template_name;

  public function __construct(shape(
  ?'default_version_id' => TemplateVersionId,
  ?'template_arn' => TemplateArn,
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->default_version_id = $default_version_id ?? ;
    $this->template_arn = $template_arn ?? ;
    $this->template_name = $template_name ?? ;
  }
}

class CreateProvisioningTemplateVersionRequest {
  public SetAsDefault $set_as_default;
  public TemplateBody $template_body;
  public TemplateName $template_name;

  public function __construct(shape(
  ?'set_as_default' => SetAsDefault,
  ?'template_body' => TemplateBody,
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->set_as_default = $set_as_default ?? ;
    $this->template_body = $template_body ?? ;
    $this->template_name = $template_name ?? ;
  }
}

class CreateProvisioningTemplateVersionResponse {
  public IsDefaultVersion $is_default_version;
  public TemplateArn $template_arn;
  public TemplateName $template_name;
  public TemplateVersionId $version_id;

  public function __construct(shape(
  ?'is_default_version' => IsDefaultVersion,
  ?'template_arn' => TemplateArn,
  ?'template_name' => TemplateName,
  ?'version_id' => TemplateVersionId,
  ) $s = shape()) {
    $this->is_default_version = $is_default_version ?? ;
    $this->template_arn = $template_arn ?? ;
    $this->template_name = $template_name ?? ;
    $this->version_id = $version_id ?? ;
  }
}

class CreateRoleAliasRequest {
  public CredentialDurationSeconds $credential_duration_seconds;
  public RoleAlias $role_alias;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'credential_duration_seconds' => CredentialDurationSeconds,
  ?'role_alias' => RoleAlias,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->credential_duration_seconds = $credential_duration_seconds ?? ;
    $this->role_alias = $role_alias ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class CreateRoleAliasResponse {
  public RoleAlias $role_alias;
  public RoleAliasArn $role_alias_arn;

  public function __construct(shape(
  ?'role_alias' => RoleAlias,
  ?'role_alias_arn' => RoleAliasArn,
  ) $s = shape()) {
    $this->role_alias = $role_alias ?? ;
    $this->role_alias_arn = $role_alias_arn ?? ;
  }
}

class CreateScheduledAuditRequest {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public AuditFrequency $frequency;
  public ScheduledAuditName $scheduled_audit_name;
  public TagList $tags;
  public TargetAuditCheckNames $target_check_names;

  public function __construct(shape(
  ?'day_of_month' => DayOfMonth,
  ?'day_of_week' => DayOfWeek,
  ?'frequency' => AuditFrequency,
  ?'scheduled_audit_name' => ScheduledAuditName,
  ?'tags' => TagList,
  ?'target_check_names' => TargetAuditCheckNames,
  ) $s = shape()) {
    $this->day_of_month = $day_of_month ?? ;
    $this->day_of_week = $day_of_week ?? ;
    $this->frequency = $frequency ?? ;
    $this->scheduled_audit_name = $scheduled_audit_name ?? ;
    $this->tags = $tags ?? ;
    $this->target_check_names = $target_check_names ?? ;
  }
}

class CreateScheduledAuditResponse {
  public ScheduledAuditArn $scheduled_audit_arn;

  public function __construct(shape(
  ?'scheduled_audit_arn' => ScheduledAuditArn,
  ) $s = shape()) {
    $this->scheduled_audit_arn = $scheduled_audit_arn ?? ;
  }
}

class CreateSecurityProfileRequest {
  public AdditionalMetricsToRetainList $additional_metrics_to_retain;
  public AdditionalMetricsToRetainV2List $additional_metrics_to_retain_v_2;
  public AlertTargets $alert_targets;
  public Behaviors $behaviors;
  public SecurityProfileDescription $security_profile_description;
  public SecurityProfileName $security_profile_name;
  public TagList $tags;

  public function __construct(shape(
  ?'additional_metrics_to_retain' => AdditionalMetricsToRetainList,
  ?'additional_metrics_to_retain_v_2' => AdditionalMetricsToRetainV2List,
  ?'alert_targets' => AlertTargets,
  ?'behaviors' => Behaviors,
  ?'security_profile_description' => SecurityProfileDescription,
  ?'security_profile_name' => SecurityProfileName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->additional_metrics_to_retain = $additional_metrics_to_retain ?? ;
    $this->additional_metrics_to_retain_v_2 = $additional_metrics_to_retain_v_2 ?? ;
    $this->alert_targets = $alert_targets ?? ;
    $this->behaviors = $behaviors ?? ;
    $this->security_profile_description = $security_profile_description ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateSecurityProfileResponse {
  public SecurityProfileArn $security_profile_arn;
  public SecurityProfileName $security_profile_name;

  public function __construct(shape(
  ?'security_profile_arn' => SecurityProfileArn,
  ?'security_profile_name' => SecurityProfileName,
  ) $s = shape()) {
    $this->security_profile_arn = $security_profile_arn ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
  }
}

class CreateStreamRequest {
  public StreamDescription $description;
  public StreamFiles $files;
  public RoleArn $role_arn;
  public StreamId $stream_id;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => StreamDescription,
  ?'files' => StreamFiles,
  ?'role_arn' => RoleArn,
  ?'stream_id' => StreamId,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->files = $files ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->stream_id = $stream_id ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateStreamResponse {
  public StreamDescription $description;
  public StreamArn $stream_arn;
  public StreamId $stream_id;
  public StreamVersion $stream_version;

  public function __construct(shape(
  ?'description' => StreamDescription,
  ?'stream_arn' => StreamArn,
  ?'stream_id' => StreamId,
  ?'stream_version' => StreamVersion,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->stream_arn = $stream_arn ?? ;
    $this->stream_id = $stream_id ?? ;
    $this->stream_version = $stream_version ?? ;
  }
}

class CreateThingGroupRequest {
  public ThingGroupName $parent_group_name;
  public TagList $tags;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;

  public function __construct(shape(
  ?'parent_group_name' => ThingGroupName,
  ?'tags' => TagList,
  ?'thing_group_name' => ThingGroupName,
  ?'thing_group_properties' => ThingGroupProperties,
  ) $s = shape()) {
    $this->parent_group_name = $parent_group_name ?? ;
    $this->tags = $tags ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
    $this->thing_group_properties = $thing_group_properties ?? ;
  }
}

class CreateThingGroupResponse {
  public ThingGroupArn $thing_group_arn;
  public ThingGroupId $thing_group_id;
  public ThingGroupName $thing_group_name;

  public function __construct(shape(
  ?'thing_group_arn' => ThingGroupArn,
  ?'thing_group_id' => ThingGroupId,
  ?'thing_group_name' => ThingGroupName,
  ) $s = shape()) {
    $this->thing_group_arn = $thing_group_arn ?? ;
    $this->thing_group_id = $thing_group_id ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
  }
}

class CreateThingRequest {
  public AttributePayload $attribute_payload;
  public BillingGroupName $billing_group_name;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;

  public function __construct(shape(
  ?'attribute_payload' => AttributePayload,
  ?'billing_group_name' => BillingGroupName,
  ?'thing_name' => ThingName,
  ?'thing_type_name' => ThingTypeName,
  ) $s = shape()) {
    $this->attribute_payload = $attribute_payload ?? ;
    $this->billing_group_name = $billing_group_name ?? ;
    $this->thing_name = $thing_name ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
  }
}

class CreateThingResponse {
  public ThingArn $thing_arn;
  public ThingId $thing_id;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'thing_arn' => ThingArn,
  ?'thing_id' => ThingId,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->thing_arn = $thing_arn ?? ;
    $this->thing_id = $thing_id ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class CreateThingTypeRequest {
  public TagList $tags;
  public ThingTypeName $thing_type_name;
  public ThingTypeProperties $thing_type_properties;

  public function __construct(shape(
  ?'tags' => TagList,
  ?'thing_type_name' => ThingTypeName,
  ?'thing_type_properties' => ThingTypeProperties,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
    $this->thing_type_properties = $thing_type_properties ?? ;
  }
}

class CreateThingTypeResponse {
  public ThingTypeArn $thing_type_arn;
  public ThingTypeId $thing_type_id;
  public ThingTypeName $thing_type_name;

  public function __construct(shape(
  ?'thing_type_arn' => ThingTypeArn,
  ?'thing_type_id' => ThingTypeId,
  ?'thing_type_name' => ThingTypeName,
  ) $s = shape()) {
    $this->thing_type_arn = $thing_type_arn ?? ;
    $this->thing_type_id = $thing_type_id ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
  }
}

class CreateTopicRuleDestinationRequest {
  public TopicRuleDestinationConfiguration $destination_configuration;

  public function __construct(shape(
  ?'destination_configuration' => TopicRuleDestinationConfiguration,
  ) $s = shape()) {
    $this->destination_configuration = $destination_configuration ?? ;
  }
}

class CreateTopicRuleDestinationResponse {
  public TopicRuleDestination $topic_rule_destination;

  public function __construct(shape(
  ?'topic_rule_destination' => TopicRuleDestination,
  ) $s = shape()) {
    $this->topic_rule_destination = $topic_rule_destination ?? ;
  }
}

class CreateTopicRuleRequest {
  public RuleName $rule_name;
  public string $tags;
  public TopicRulePayload $topic_rule_payload;

  public function __construct(shape(
  ?'rule_name' => RuleName,
  ?'tags' => string,
  ?'topic_rule_payload' => TopicRulePayload,
  ) $s = shape()) {
    $this->rule_name = $rule_name ?? ;
    $this->tags = $tags ?? ;
    $this->topic_rule_payload = $topic_rule_payload ?? ;
  }
}

type CreatedAtDate = int;

type CreationDate = int;

type CredentialDurationSeconds = int;

class CustomCodeSigning {
  public CodeSigningCertificateChain $certificate_chain;
  public HashAlgorithm $hash_algorithm;
  public CodeSigningSignature $signature;
  public SignatureAlgorithm $signature_algorithm;

  public function __construct(shape(
  ?'certificate_chain' => CodeSigningCertificateChain,
  ?'hash_algorithm' => HashAlgorithm,
  ?'signature' => CodeSigningSignature,
  ?'signature_algorithm' => SignatureAlgorithm,
  ) $s = shape()) {
    $this->certificate_chain = $certificate_chain ?? ;
    $this->hash_algorithm = $hash_algorithm ?? ;
    $this->signature = $signature ?? ;
    $this->signature_algorithm = $signature_algorithm ?? ;
  }
}

type CustomerVersion = int;

type DateType = int;

type DayOfMonth = string;

type DayOfWeek = string;

class DeleteAccountAuditConfigurationRequest {
  public DeleteScheduledAudits $delete_scheduled_audits;

  public function __construct(shape(
  ?'delete_scheduled_audits' => DeleteScheduledAudits,
  ) $s = shape()) {
    $this->delete_scheduled_audits = $delete_scheduled_audits ?? ;
  }
}

class DeleteAccountAuditConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeleteAdditionalMetricsToRetain = bool;

type DeleteAlertTargets = bool;

class DeleteAuthorizerRequest {
  public AuthorizerName $authorizer_name;

  public function __construct(shape(
  ?'authorizer_name' => AuthorizerName,
  ) $s = shape()) {
    $this->authorizer_name = $authorizer_name ?? ;
  }
}

class DeleteAuthorizerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeleteBehaviors = bool;

class DeleteBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public OptionalVersion $expected_version;

  public function __construct(shape(
  ?'billing_group_name' => BillingGroupName,
  ?'expected_version' => OptionalVersion,
  ) $s = shape()) {
    $this->billing_group_name = $billing_group_name ?? ;
    $this->expected_version = $expected_version ?? ;
  }
}

class DeleteBillingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteCACertificateRequest {
  public CertificateId $certificate_id;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
  }
}

class DeleteCACertificateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteCertificateRequest {
  public CertificateId $certificate_id;
  public ForceDelete $force_delete;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ?'force_delete' => ForceDelete,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
    $this->force_delete = $force_delete ?? ;
  }
}

class DeleteConflictException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DeleteDimensionRequest {
  public DimensionName $name;

  public function __construct(shape(
  ?'name' => DimensionName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DeleteDimensionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDomainConfigurationRequest {
  public DomainConfigurationName $domain_configuration_name;

  public function __construct(shape(
  ?'domain_configuration_name' => DomainConfigurationName,
  ) $s = shape()) {
    $this->domain_configuration_name = $domain_configuration_name ?? ;
  }
}

class DeleteDomainConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDynamicThingGroupRequest {
  public OptionalVersion $expected_version;
  public ThingGroupName $thing_group_name;

  public function __construct(shape(
  ?'expected_version' => OptionalVersion,
  ?'thing_group_name' => ThingGroupName,
  ) $s = shape()) {
    $this->expected_version = $expected_version ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
  }
}

class DeleteDynamicThingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteJobExecutionRequest {
  public ExecutionNumber $execution_number;
  public ForceFlag $force;
  public JobId $job_id;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'execution_number' => ExecutionNumber,
  ?'force' => ForceFlag,
  ?'job_id' => JobId,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->execution_number = $execution_number ?? ;
    $this->force = $force ?? ;
    $this->job_id = $job_id ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class DeleteJobRequest {
  public ForceFlag $force;
  public JobId $job_id;

  public function __construct(shape(
  ?'force' => ForceFlag,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->force = $force ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class DeleteMitigationActionRequest {
  public MitigationActionName $action_name;

  public function __construct(shape(
  ?'action_name' => MitigationActionName,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
  }
}

class DeleteMitigationActionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteOTAUpdateRequest {
  public DeleteStream $delete_stream;
  public ForceDeleteAWSJob $force_delete_aws_job;
  public OTAUpdateId $ota_update_id;

  public function __construct(shape(
  ?'delete_stream' => DeleteStream,
  ?'force_delete_aws_job' => ForceDeleteAWSJob,
  ?'ota_update_id' => OTAUpdateId,
  ) $s = shape()) {
    $this->delete_stream = $delete_stream ?? ;
    $this->force_delete_aws_job = $force_delete_aws_job ?? ;
    $this->ota_update_id = $ota_update_id ?? ;
  }
}

class DeleteOTAUpdateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePolicyRequest {
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
  }
}

class DeletePolicyVersionRequest {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'policy_version_id' => PolicyVersionId,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
    $this->policy_version_id = $policy_version_id ?? ;
  }
}

class DeleteProvisioningTemplateRequest {
  public TemplateName $template_name;

  public function __construct(shape(
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
  }
}

class DeleteProvisioningTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteProvisioningTemplateVersionRequest {
  public TemplateName $template_name;
  public TemplateVersionId $version_id;

  public function __construct(shape(
  ?'template_name' => TemplateName,
  ?'version_id' => TemplateVersionId,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version_id = $version_id ?? ;
  }
}

class DeleteProvisioningTemplateVersionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRegistrationCodeRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRegistrationCodeResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRoleAliasRequest {
  public RoleAlias $role_alias;

  public function __construct(shape(
  ?'role_alias' => RoleAlias,
  ) $s = shape()) {
    $this->role_alias = $role_alias ?? ;
  }
}

class DeleteRoleAliasResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteScheduledAuditRequest {
  public ScheduledAuditName $scheduled_audit_name;

  public function __construct(shape(
  ?'scheduled_audit_name' => ScheduledAuditName,
  ) $s = shape()) {
    $this->scheduled_audit_name = $scheduled_audit_name ?? ;
  }
}

class DeleteScheduledAuditResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeleteScheduledAudits = bool;

class DeleteSecurityProfileRequest {
  public OptionalVersion $expected_version;
  public SecurityProfileName $security_profile_name;

  public function __construct(shape(
  ?'expected_version' => OptionalVersion,
  ?'security_profile_name' => SecurityProfileName,
  ) $s = shape()) {
    $this->expected_version = $expected_version ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
  }
}

class DeleteSecurityProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeleteStream = bool;

class DeleteStreamRequest {
  public StreamId $stream_id;

  public function __construct(shape(
  ?'stream_id' => StreamId,
  ) $s = shape()) {
    $this->stream_id = $stream_id ?? ;
  }
}

class DeleteStreamResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteThingGroupRequest {
  public OptionalVersion $expected_version;
  public ThingGroupName $thing_group_name;

  public function __construct(shape(
  ?'expected_version' => OptionalVersion,
  ?'thing_group_name' => ThingGroupName,
  ) $s = shape()) {
    $this->expected_version = $expected_version ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
  }
}

class DeleteThingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteThingRequest {
  public OptionalVersion $expected_version;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'expected_version' => OptionalVersion,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->expected_version = $expected_version ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class DeleteThingResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteThingTypeRequest {
  public ThingTypeName $thing_type_name;

  public function __construct(shape(
  ?'thing_type_name' => ThingTypeName,
  ) $s = shape()) {
    $this->thing_type_name = $thing_type_name ?? ;
  }
}

class DeleteThingTypeResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTopicRuleDestinationRequest {
  public AwsArn $arn;

  public function __construct(shape(
  ?'arn' => AwsArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

class DeleteTopicRuleDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTopicRuleRequest {
  public RuleName $rule_name;

  public function __construct(shape(
  ?'rule_name' => RuleName,
  ) $s = shape()) {
    $this->rule_name = $rule_name ?? ;
  }
}

class DeleteV2LoggingLevelRequest {
  public LogTargetName $target_name;
  public LogTargetType $target_type;

  public function __construct(shape(
  ?'target_name' => LogTargetName,
  ?'target_type' => LogTargetType,
  ) $s = shape()) {
    $this->target_name = $target_name ?? ;
    $this->target_type = $target_type ?? ;
  }
}

type DeliveryStreamName = string;

class Denied {
  public ExplicitDeny $explicit_deny;
  public ImplicitDeny $implicit_deny;

  public function __construct(shape(
  ?'explicit_deny' => ExplicitDeny,
  ?'implicit_deny' => ImplicitDeny,
  ) $s = shape()) {
    $this->explicit_deny = $explicit_deny ?? ;
    $this->implicit_deny = $implicit_deny ?? ;
  }
}

class DeprecateThingTypeRequest {
  public ThingTypeName $thing_type_name;
  public UndoDeprecate $undo_deprecate;

  public function __construct(shape(
  ?'thing_type_name' => ThingTypeName,
  ?'undo_deprecate' => UndoDeprecate,
  ) $s = shape()) {
    $this->thing_type_name = $thing_type_name ?? ;
    $this->undo_deprecate = $undo_deprecate ?? ;
  }
}

class DeprecateThingTypeResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeprecationDate = int;

class DescribeAccountAuditConfigurationRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountAuditConfigurationResponse {
  public AuditCheckConfigurations $audit_check_configurations;
  public AuditNotificationTargetConfigurations $audit_notification_target_configurations;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'audit_check_configurations' => AuditCheckConfigurations,
  ?'audit_notification_target_configurations' => AuditNotificationTargetConfigurations,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->audit_check_configurations = $audit_check_configurations ?? ;
    $this->audit_notification_target_configurations = $audit_notification_target_configurations ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class DescribeAuditFindingRequest {
  public FindingId $finding_id;

  public function __construct(shape(
  ?'finding_id' => FindingId,
  ) $s = shape()) {
    $this->finding_id = $finding_id ?? ;
  }
}

class DescribeAuditFindingResponse {
  public AuditFinding $finding;

  public function __construct(shape(
  ?'finding' => AuditFinding,
  ) $s = shape()) {
    $this->finding = $finding ?? ;
  }
}

class DescribeAuditMitigationActionsTaskRequest {
  public AuditMitigationActionsTaskId $task_id;

  public function __construct(shape(
  ?'task_id' => AuditMitigationActionsTaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
  }
}

class DescribeAuditMitigationActionsTaskResponse {
  public MitigationActionList $actions_definition;
  public AuditCheckToActionsMapping $audit_check_to_actions_mapping;
  public Timestamp $end_time;
  public Timestamp $start_time;
  public AuditMitigationActionsTaskTarget $target;
  public AuditMitigationActionsTaskStatistics $task_statistics;
  public AuditMitigationActionsTaskStatus $task_status;

  public function __construct(shape(
  ?'actions_definition' => MitigationActionList,
  ?'audit_check_to_actions_mapping' => AuditCheckToActionsMapping,
  ?'end_time' => Timestamp,
  ?'start_time' => Timestamp,
  ?'target' => AuditMitigationActionsTaskTarget,
  ?'task_statistics' => AuditMitigationActionsTaskStatistics,
  ?'task_status' => AuditMitigationActionsTaskStatus,
  ) $s = shape()) {
    $this->actions_definition = $actions_definition ?? ;
    $this->audit_check_to_actions_mapping = $audit_check_to_actions_mapping ?? ;
    $this->end_time = $end_time ?? ;
    $this->start_time = $start_time ?? ;
    $this->target = $target ?? ;
    $this->task_statistics = $task_statistics ?? ;
    $this->task_status = $task_status ?? ;
  }
}

class DescribeAuditTaskRequest {
  public AuditTaskId $task_id;

  public function __construct(shape(
  ?'task_id' => AuditTaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
  }
}

class DescribeAuditTaskResponse {
  public AuditDetails $audit_details;
  public ScheduledAuditName $scheduled_audit_name;
  public Timestamp $task_start_time;
  public TaskStatistics $task_statistics;
  public AuditTaskStatus $task_status;
  public AuditTaskType $task_type;

  public function __construct(shape(
  ?'audit_details' => AuditDetails,
  ?'scheduled_audit_name' => ScheduledAuditName,
  ?'task_start_time' => Timestamp,
  ?'task_statistics' => TaskStatistics,
  ?'task_status' => AuditTaskStatus,
  ?'task_type' => AuditTaskType,
  ) $s = shape()) {
    $this->audit_details = $audit_details ?? ;
    $this->scheduled_audit_name = $scheduled_audit_name ?? ;
    $this->task_start_time = $task_start_time ?? ;
    $this->task_statistics = $task_statistics ?? ;
    $this->task_status = $task_status ?? ;
    $this->task_type = $task_type ?? ;
  }
}

class DescribeAuthorizerRequest {
  public AuthorizerName $authorizer_name;

  public function __construct(shape(
  ?'authorizer_name' => AuthorizerName,
  ) $s = shape()) {
    $this->authorizer_name = $authorizer_name ?? ;
  }
}

class DescribeAuthorizerResponse {
  public AuthorizerDescription $authorizer_description;

  public function __construct(shape(
  ?'authorizer_description' => AuthorizerDescription,
  ) $s = shape()) {
    $this->authorizer_description = $authorizer_description ?? ;
  }
}

class DescribeBillingGroupRequest {
  public BillingGroupName $billing_group_name;

  public function __construct(shape(
  ?'billing_group_name' => BillingGroupName,
  ) $s = shape()) {
    $this->billing_group_name = $billing_group_name ?? ;
  }
}

class DescribeBillingGroupResponse {
  public BillingGroupArn $billing_group_arn;
  public BillingGroupId $billing_group_id;
  public BillingGroupMetadata $billing_group_metadata;
  public BillingGroupName $billing_group_name;
  public BillingGroupProperties $billing_group_properties;
  public Version $version;

  public function __construct(shape(
  ?'billing_group_arn' => BillingGroupArn,
  ?'billing_group_id' => BillingGroupId,
  ?'billing_group_metadata' => BillingGroupMetadata,
  ?'billing_group_name' => BillingGroupName,
  ?'billing_group_properties' => BillingGroupProperties,
  ?'version' => Version,
  ) $s = shape()) {
    $this->billing_group_arn = $billing_group_arn ?? ;
    $this->billing_group_id = $billing_group_id ?? ;
    $this->billing_group_metadata = $billing_group_metadata ?? ;
    $this->billing_group_name = $billing_group_name ?? ;
    $this->billing_group_properties = $billing_group_properties ?? ;
    $this->version = $version ?? ;
  }
}

class DescribeCACertificateRequest {
  public CertificateId $certificate_id;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
  }
}

class DescribeCACertificateResponse {
  public CACertificateDescription $certificate_description;
  public RegistrationConfig $registration_config;

  public function __construct(shape(
  ?'certificate_description' => CACertificateDescription,
  ?'registration_config' => RegistrationConfig,
  ) $s = shape()) {
    $this->certificate_description = $certificate_description ?? ;
    $this->registration_config = $registration_config ?? ;
  }
}

class DescribeCertificateRequest {
  public CertificateId $certificate_id;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
  }
}

class DescribeCertificateResponse {
  public CertificateDescription $certificate_description;

  public function __construct(shape(
  ?'certificate_description' => CertificateDescription,
  ) $s = shape()) {
    $this->certificate_description = $certificate_description ?? ;
  }
}

class DescribeDefaultAuthorizerRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeDefaultAuthorizerResponse {
  public AuthorizerDescription $authorizer_description;

  public function __construct(shape(
  ?'authorizer_description' => AuthorizerDescription,
  ) $s = shape()) {
    $this->authorizer_description = $authorizer_description ?? ;
  }
}

class DescribeDimensionRequest {
  public DimensionName $name;

  public function __construct(shape(
  ?'name' => DimensionName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DescribeDimensionResponse {
  public DimensionArn $arn;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public DimensionName $name;
  public DimensionStringValues $string_values;
  public DimensionType $type;

  public function __construct(shape(
  ?'arn' => DimensionArn,
  ?'creation_date' => Timestamp,
  ?'last_modified_date' => Timestamp,
  ?'name' => DimensionName,
  ?'string_values' => DimensionStringValues,
  ?'type' => DimensionType,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->name = $name ?? ;
    $this->string_values = $string_values ?? ;
    $this->type = $type ?? ;
  }
}

class DescribeDomainConfigurationRequest {
  public ReservedDomainConfigurationName $domain_configuration_name;

  public function __construct(shape(
  ?'domain_configuration_name' => ReservedDomainConfigurationName,
  ) $s = shape()) {
    $this->domain_configuration_name = $domain_configuration_name ?? ;
  }
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

  public function __construct(shape(
  ?'authorizer_config' => AuthorizerConfig,
  ?'domain_configuration_arn' => DomainConfigurationArn,
  ?'domain_configuration_name' => ReservedDomainConfigurationName,
  ?'domain_configuration_status' => DomainConfigurationStatus,
  ?'domain_name' => DomainName,
  ?'domain_type' => DomainType,
  ?'server_certificates' => ServerCertificates,
  ?'service_type' => ServiceType,
  ) $s = shape()) {
    $this->authorizer_config = $authorizer_config ?? ;
    $this->domain_configuration_arn = $domain_configuration_arn ?? ;
    $this->domain_configuration_name = $domain_configuration_name ?? ;
    $this->domain_configuration_status = $domain_configuration_status ?? ;
    $this->domain_name = $domain_name ?? ;
    $this->domain_type = $domain_type ?? ;
    $this->server_certificates = $server_certificates ?? ;
    $this->service_type = $service_type ?? ;
  }
}

class DescribeEndpointRequest {
  public EndpointType $endpoint_type;

  public function __construct(shape(
  ?'endpoint_type' => EndpointType,
  ) $s = shape()) {
    $this->endpoint_type = $endpoint_type ?? ;
  }
}

class DescribeEndpointResponse {
  public EndpointAddress $endpoint_address;

  public function __construct(shape(
  ?'endpoint_address' => EndpointAddress,
  ) $s = shape()) {
    $this->endpoint_address = $endpoint_address ?? ;
  }
}

class DescribeEventConfigurationsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeEventConfigurationsResponse {
  public CreationDate $creation_date;
  public EventConfigurations $event_configurations;
  public LastModifiedDate $last_modified_date;

  public function __construct(shape(
  ?'creation_date' => CreationDate,
  ?'event_configurations' => EventConfigurations,
  ?'last_modified_date' => LastModifiedDate,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->event_configurations = $event_configurations ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
  }
}

class DescribeIndexRequest {
  public IndexName $index_name;

  public function __construct(shape(
  ?'index_name' => IndexName,
  ) $s = shape()) {
    $this->index_name = $index_name ?? ;
  }
}

class DescribeIndexResponse {
  public IndexName $index_name;
  public IndexStatus $index_status;
  public IndexSchema $schema;

  public function __construct(shape(
  ?'index_name' => IndexName,
  ?'index_status' => IndexStatus,
  ?'schema' => IndexSchema,
  ) $s = shape()) {
    $this->index_name = $index_name ?? ;
    $this->index_status = $index_status ?? ;
    $this->schema = $schema ?? ;
  }
}

class DescribeJobExecutionRequest {
  public ExecutionNumber $execution_number;
  public JobId $job_id;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'execution_number' => ExecutionNumber,
  ?'job_id' => JobId,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->execution_number = $execution_number ?? ;
    $this->job_id = $job_id ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class DescribeJobExecutionResponse {
  public JobExecution $execution;

  public function __construct(shape(
  ?'execution' => JobExecution,
  ) $s = shape()) {
    $this->execution = $execution ?? ;
  }
}

class DescribeJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
  }
}

class DescribeJobResponse {
  public JobDocumentSource $document_source;
  public Job $job;

  public function __construct(shape(
  ?'document_source' => JobDocumentSource,
  ?'job' => Job,
  ) $s = shape()) {
    $this->document_source = $document_source ?? ;
    $this->job = $job ?? ;
  }
}

class DescribeMitigationActionRequest {
  public MitigationActionName $action_name;

  public function __construct(shape(
  ?'action_name' => MitigationActionName,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
  }
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

  public function __construct(shape(
  ?'action_arn' => MitigationActionArn,
  ?'action_id' => MitigationActionId,
  ?'action_name' => MitigationActionName,
  ?'action_params' => MitigationActionParams,
  ?'action_type' => MitigationActionType,
  ?'creation_date' => Timestamp,
  ?'last_modified_date' => Timestamp,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->action_arn = $action_arn ?? ;
    $this->action_id = $action_id ?? ;
    $this->action_name = $action_name ?? ;
    $this->action_params = $action_params ?? ;
    $this->action_type = $action_type ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class DescribeProvisioningTemplateRequest {
  public TemplateName $template_name;

  public function __construct(shape(
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
  }
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

  public function __construct(shape(
  ?'creation_date' => DateType,
  ?'default_version_id' => TemplateVersionId,
  ?'description' => TemplateDescription,
  ?'enabled' => Enabled,
  ?'last_modified_date' => DateType,
  ?'provisioning_role_arn' => RoleArn,
  ?'template_arn' => TemplateArn,
  ?'template_body' => TemplateBody,
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->default_version_id = $default_version_id ?? ;
    $this->description = $description ?? ;
    $this->enabled = $enabled ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->provisioning_role_arn = $provisioning_role_arn ?? ;
    $this->template_arn = $template_arn ?? ;
    $this->template_body = $template_body ?? ;
    $this->template_name = $template_name ?? ;
  }
}

class DescribeProvisioningTemplateVersionRequest {
  public TemplateName $template_name;
  public TemplateVersionId $version_id;

  public function __construct(shape(
  ?'template_name' => TemplateName,
  ?'version_id' => TemplateVersionId,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version_id = $version_id ?? ;
  }
}

class DescribeProvisioningTemplateVersionResponse {
  public DateType $creation_date;
  public IsDefaultVersion $is_default_version;
  public TemplateBody $template_body;
  public TemplateVersionId $version_id;

  public function __construct(shape(
  ?'creation_date' => DateType,
  ?'is_default_version' => IsDefaultVersion,
  ?'template_body' => TemplateBody,
  ?'version_id' => TemplateVersionId,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->is_default_version = $is_default_version ?? ;
    $this->template_body = $template_body ?? ;
    $this->version_id = $version_id ?? ;
  }
}

class DescribeRoleAliasRequest {
  public RoleAlias $role_alias;

  public function __construct(shape(
  ?'role_alias' => RoleAlias,
  ) $s = shape()) {
    $this->role_alias = $role_alias ?? ;
  }
}

class DescribeRoleAliasResponse {
  public RoleAliasDescription $role_alias_description;

  public function __construct(shape(
  ?'role_alias_description' => RoleAliasDescription,
  ) $s = shape()) {
    $this->role_alias_description = $role_alias_description ?? ;
  }
}

class DescribeScheduledAuditRequest {
  public ScheduledAuditName $scheduled_audit_name;

  public function __construct(shape(
  ?'scheduled_audit_name' => ScheduledAuditName,
  ) $s = shape()) {
    $this->scheduled_audit_name = $scheduled_audit_name ?? ;
  }
}

class DescribeScheduledAuditResponse {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public AuditFrequency $frequency;
  public ScheduledAuditArn $scheduled_audit_arn;
  public ScheduledAuditName $scheduled_audit_name;
  public TargetAuditCheckNames $target_check_names;

  public function __construct(shape(
  ?'day_of_month' => DayOfMonth,
  ?'day_of_week' => DayOfWeek,
  ?'frequency' => AuditFrequency,
  ?'scheduled_audit_arn' => ScheduledAuditArn,
  ?'scheduled_audit_name' => ScheduledAuditName,
  ?'target_check_names' => TargetAuditCheckNames,
  ) $s = shape()) {
    $this->day_of_month = $day_of_month ?? ;
    $this->day_of_week = $day_of_week ?? ;
    $this->frequency = $frequency ?? ;
    $this->scheduled_audit_arn = $scheduled_audit_arn ?? ;
    $this->scheduled_audit_name = $scheduled_audit_name ?? ;
    $this->target_check_names = $target_check_names ?? ;
  }
}

class DescribeSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;

  public function __construct(shape(
  ?'security_profile_name' => SecurityProfileName,
  ) $s = shape()) {
    $this->security_profile_name = $security_profile_name ?? ;
  }
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

  public function __construct(shape(
  ?'additional_metrics_to_retain' => AdditionalMetricsToRetainList,
  ?'additional_metrics_to_retain_v_2' => AdditionalMetricsToRetainV2List,
  ?'alert_targets' => AlertTargets,
  ?'behaviors' => Behaviors,
  ?'creation_date' => Timestamp,
  ?'last_modified_date' => Timestamp,
  ?'security_profile_arn' => SecurityProfileArn,
  ?'security_profile_description' => SecurityProfileDescription,
  ?'security_profile_name' => SecurityProfileName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->additional_metrics_to_retain = $additional_metrics_to_retain ?? ;
    $this->additional_metrics_to_retain_v_2 = $additional_metrics_to_retain_v_2 ?? ;
    $this->alert_targets = $alert_targets ?? ;
    $this->behaviors = $behaviors ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->security_profile_arn = $security_profile_arn ?? ;
    $this->security_profile_description = $security_profile_description ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
    $this->version = $version ?? ;
  }
}

class DescribeStreamRequest {
  public StreamId $stream_id;

  public function __construct(shape(
  ?'stream_id' => StreamId,
  ) $s = shape()) {
    $this->stream_id = $stream_id ?? ;
  }
}

class DescribeStreamResponse {
  public StreamInfo $stream_info;

  public function __construct(shape(
  ?'stream_info' => StreamInfo,
  ) $s = shape()) {
    $this->stream_info = $stream_info ?? ;
  }
}

class DescribeThingGroupRequest {
  public ThingGroupName $thing_group_name;

  public function __construct(shape(
  ?'thing_group_name' => ThingGroupName,
  ) $s = shape()) {
    $this->thing_group_name = $thing_group_name ?? ;
  }
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

  public function __construct(shape(
  ?'index_name' => IndexName,
  ?'query_string' => QueryString,
  ?'query_version' => QueryVersion,
  ?'status' => DynamicGroupStatus,
  ?'thing_group_arn' => ThingGroupArn,
  ?'thing_group_id' => ThingGroupId,
  ?'thing_group_metadata' => ThingGroupMetadata,
  ?'thing_group_name' => ThingGroupName,
  ?'thing_group_properties' => ThingGroupProperties,
  ?'version' => Version,
  ) $s = shape()) {
    $this->index_name = $index_name ?? ;
    $this->query_string = $query_string ?? ;
    $this->query_version = $query_version ?? ;
    $this->status = $status ?? ;
    $this->thing_group_arn = $thing_group_arn ?? ;
    $this->thing_group_id = $thing_group_id ?? ;
    $this->thing_group_metadata = $thing_group_metadata ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
    $this->thing_group_properties = $thing_group_properties ?? ;
    $this->version = $version ?? ;
  }
}

class DescribeThingRegistrationTaskRequest {
  public TaskId $task_id;

  public function __construct(shape(
  ?'task_id' => TaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
  }
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

  public function __construct(shape(
  ?'creation_date' => CreationDate,
  ?'failure_count' => Count,
  ?'input_file_bucket' => RegistryS3BucketName,
  ?'input_file_key' => RegistryS3KeyName,
  ?'last_modified_date' => LastModifiedDate,
  ?'message' => ErrorMessage,
  ?'percentage_progress' => Percentage,
  ?'role_arn' => RoleArn,
  ?'status' => Status,
  ?'success_count' => Count,
  ?'task_id' => TaskId,
  ?'template_body' => TemplateBody,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->failure_count = $failure_count ?? ;
    $this->input_file_bucket = $input_file_bucket ?? ;
    $this->input_file_key = $input_file_key ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->message = $message ?? ;
    $this->percentage_progress = $percentage_progress ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->status = $status ?? ;
    $this->success_count = $success_count ?? ;
    $this->task_id = $task_id ?? ;
    $this->template_body = $template_body ?? ;
  }
}

class DescribeThingRequest {
  public ThingName $thing_name;

  public function __construct(shape(
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->thing_name = $thing_name ?? ;
  }
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

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'billing_group_name' => BillingGroupName,
  ?'default_client_id' => ClientId,
  ?'thing_arn' => ThingArn,
  ?'thing_id' => ThingId,
  ?'thing_name' => ThingName,
  ?'thing_type_name' => ThingTypeName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->billing_group_name = $billing_group_name ?? ;
    $this->default_client_id = $default_client_id ?? ;
    $this->thing_arn = $thing_arn ?? ;
    $this->thing_id = $thing_id ?? ;
    $this->thing_name = $thing_name ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
    $this->version = $version ?? ;
  }
}

class DescribeThingTypeRequest {
  public ThingTypeName $thing_type_name;

  public function __construct(shape(
  ?'thing_type_name' => ThingTypeName,
  ) $s = shape()) {
    $this->thing_type_name = $thing_type_name ?? ;
  }
}

class DescribeThingTypeResponse {
  public ThingTypeArn $thing_type_arn;
  public ThingTypeId $thing_type_id;
  public ThingTypeMetadata $thing_type_metadata;
  public ThingTypeName $thing_type_name;
  public ThingTypeProperties $thing_type_properties;

  public function __construct(shape(
  ?'thing_type_arn' => ThingTypeArn,
  ?'thing_type_id' => ThingTypeId,
  ?'thing_type_metadata' => ThingTypeMetadata,
  ?'thing_type_name' => ThingTypeName,
  ?'thing_type_properties' => ThingTypeProperties,
  ) $s = shape()) {
    $this->thing_type_arn = $thing_type_arn ?? ;
    $this->thing_type_id = $thing_type_id ?? ;
    $this->thing_type_metadata = $thing_type_metadata ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
    $this->thing_type_properties = $thing_type_properties ?? ;
  }
}

type Description = string;

class Destination {
  public S3Destination $s_3_destination;

  public function __construct(shape(
  ?'s_3_destination' => S3Destination,
  ) $s = shape()) {
    $this->s_3_destination = $s_3_destination ?? ;
  }
}

class DetachPolicyRequest {
  public PolicyName $policy_name;
  public PolicyTarget $target;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'target' => PolicyTarget,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
    $this->target = $target ?? ;
  }
}

class DetachPrincipalPolicyRequest {
  public PolicyName $policy_name;
  public Principal $principal;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'principal' => Principal,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
    $this->principal = $principal ?? ;
  }
}

class DetachSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
  public SecurityProfileTargetArn $security_profile_target_arn;

  public function __construct(shape(
  ?'security_profile_name' => SecurityProfileName,
  ?'security_profile_target_arn' => SecurityProfileTargetArn,
  ) $s = shape()) {
    $this->security_profile_name = $security_profile_name ?? ;
    $this->security_profile_target_arn = $security_profile_target_arn ?? ;
  }
}

class DetachSecurityProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DetachThingPrincipalRequest {
  public Principal $principal;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'principal' => Principal,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->principal = $principal ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class DetachThingPrincipalResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DetailsKey = string;

type DetailsMap = dict<DetailsKey, DetailsValue>;

type DetailsValue = string;

type DeviceCertificateUpdateAction = string;

type DeviceDefenderThingName = string;

type DimensionArn = string;

type DimensionName = string;

type DimensionNames = vec<DimensionName>;

type DimensionStringValue = string;

type DimensionStringValues = vec<DimensionStringValue>;

type DimensionType = string;

type DimensionValueOperator = string;

type DisableAllLogs = bool;

class DisableTopicRuleRequest {
  public RuleName $rule_name;

  public function __construct(shape(
  ?'rule_name' => RuleName,
  ) $s = shape()) {
    $this->rule_name = $rule_name ?? ;
  }
}

type DomainConfigurationArn = string;

type DomainConfigurationName = string;

type DomainConfigurationStatus = string;

class DomainConfigurationSummary {
  public DomainConfigurationArn $domain_configuration_arn;
  public ReservedDomainConfigurationName $domain_configuration_name;
  public ServiceType $service_type;

  public function __construct(shape(
  ?'domain_configuration_arn' => DomainConfigurationArn,
  ?'domain_configuration_name' => ReservedDomainConfigurationName,
  ?'service_type' => ServiceType,
  ) $s = shape()) {
    $this->domain_configuration_arn = $domain_configuration_arn ?? ;
    $this->domain_configuration_name = $domain_configuration_name ?? ;
    $this->service_type = $service_type ?? ;
  }
}

type DomainConfigurations = vec<DomainConfigurationSummary>;

type DomainName = string;

type DomainType = string;

type DurationSeconds = int;

type DynamicGroupStatus = string;

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

  public function __construct(shape(
  ?'hash_key_field' => HashKeyField,
  ?'hash_key_type' => DynamoKeyType,
  ?'hash_key_value' => HashKeyValue,
  ?'operation' => DynamoOperation,
  ?'payload_field' => PayloadField,
  ?'range_key_field' => RangeKeyField,
  ?'range_key_type' => DynamoKeyType,
  ?'range_key_value' => RangeKeyValue,
  ?'role_arn' => AwsArn,
  ?'table_name' => TableName,
  ) $s = shape()) {
    $this->hash_key_field = $hash_key_field ?? ;
    $this->hash_key_type = $hash_key_type ?? ;
    $this->hash_key_value = $hash_key_value ?? ;
    $this->operation = $operation ?? ;
    $this->payload_field = $payload_field ?? ;
    $this->range_key_field = $range_key_field ?? ;
    $this->range_key_type = $range_key_type ?? ;
    $this->range_key_value = $range_key_value ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->table_name = $table_name ?? ;
  }
}

class DynamoDBv2Action {
  public PutItemInput $put_item;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'put_item' => PutItemInput,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->put_item = $put_item ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type DynamoKeyType = string;

type DynamoOperation = string;

type EffectivePolicies = vec<EffectivePolicy>;

class EffectivePolicy {
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'policy_arn' => PolicyArn,
  ?'policy_document' => PolicyDocument,
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? ;
    $this->policy_document = $policy_document ?? ;
    $this->policy_name = $policy_name ?? ;
  }
}

class ElasticsearchAction {
  public ElasticsearchEndpoint $endpoint;
  public ElasticsearchId $id;
  public ElasticsearchIndex $index;
  public AwsArn $role_arn;
  public ElasticsearchType $type;

  public function __construct(shape(
  ?'endpoint' => ElasticsearchEndpoint,
  ?'id' => ElasticsearchId,
  ?'index' => ElasticsearchIndex,
  ?'role_arn' => AwsArn,
  ?'type' => ElasticsearchType,
  ) $s = shape()) {
    $this->endpoint = $endpoint ?? ;
    $this->id = $id ?? ;
    $this->index = $index ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->type = $type ?? ;
  }
}

type ElasticsearchEndpoint = string;

type ElasticsearchId = string;

type ElasticsearchIndex = string;

type ElasticsearchType = string;

class EnableIoTLoggingParams {
  public LogLevel $log_level;
  public RoleArn $role_arn_for_logging;

  public function __construct(shape(
  ?'log_level' => LogLevel,
  ?'role_arn_for_logging' => RoleArn,
  ) $s = shape()) {
    $this->log_level = $log_level ?? ;
    $this->role_arn_for_logging = $role_arn_for_logging ?? ;
  }
}

class EnableTopicRuleRequest {
  public RuleName $rule_name;

  public function __construct(shape(
  ?'rule_name' => RuleName,
  ) $s = shape()) {
    $this->rule_name = $rule_name ?? ;
  }
}

type Enabled = bool;

type EndpointAddress = string;

type EndpointType = string;

type ErrorCode = string;

class ErrorInfo {
  public Code $code;
  public OTAUpdateErrorMessage $message;

  public function __construct(shape(
  ?'code' => Code,
  ?'message' => OTAUpdateErrorMessage,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type ErrorMessage = string;

type EvaluationStatistic = string;

type EventConfigurations = dict<EventType, Configuration>;

type EventType = string;

type ExecutionNamePrefix = string;

type ExecutionNumber = int;

type ExpectedVersion = int;

type ExpiresInSec = int;

type ExpiresInSeconds = int;

class ExplicitDeny {
  public Policies $policies;

  public function __construct(shape(
  ?'policies' => Policies,
  ) $s = shape()) {
    $this->policies = $policies ?? ;
  }
}

class ExponentialRolloutRate {
  public RolloutRatePerMinute $base_rate_per_minute;
  public IncrementFactor $increment_factor;
  public RateIncreaseCriteria $rate_increase_criteria;

  public function __construct(shape(
  ?'base_rate_per_minute' => RolloutRatePerMinute,
  ?'increment_factor' => IncrementFactor,
  ?'rate_increase_criteria' => RateIncreaseCriteria,
  ) $s = shape()) {
    $this->base_rate_per_minute = $base_rate_per_minute ?? ;
    $this->increment_factor = $increment_factor ?? ;
    $this->rate_increase_criteria = $rate_increase_criteria ?? ;
  }
}

type FailedChecksCount = int;

type FailedFindingsCount = int;

type FailedThings = int;

class Field {
  public FieldName $name;
  public FieldType $type;

  public function __construct(shape(
  ?'name' => FieldName,
  ?'type' => FieldType,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->type = $type ?? ;
  }
}

type FieldName = string;

type FieldType = string;

type Fields = vec<Field>;

type FileId = int;

class FileLocation {
  public S3Location $s_3_location;
  public Stream $stream;

  public function __construct(shape(
  ?'s_3_location' => S3Location,
  ?'stream' => Stream,
  ) $s = shape()) {
    $this->s_3_location = $s_3_location ?? ;
    $this->stream = $stream ?? ;
  }
}

type FileName = string;

type FindingId = string;

type FindingIds = vec<FindingId>;

class FirehoseAction {
  public DeliveryStreamName $delivery_stream_name;
  public AwsArn $role_arn;
  public FirehoseSeparator $separator;

  public function __construct(shape(
  ?'delivery_stream_name' => DeliveryStreamName,
  ?'role_arn' => AwsArn,
  ?'separator' => FirehoseSeparator,
  ) $s = shape()) {
    $this->delivery_stream_name = $delivery_stream_name ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->separator = $separator ?? ;
  }
}

type FirehoseSeparator = string;

type Flag = bool;

type ForceDelete = bool;

type ForceDeleteAWSJob = bool;

type ForceFlag = bool;

type Forced = bool;

type FunctionArn = string;

type GenerationId = string;

class GetCardinalityRequest {
  public AggregationField $aggregation_field;
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;

  public function __construct(shape(
  ?'aggregation_field' => AggregationField,
  ?'index_name' => IndexName,
  ?'query_string' => QueryString,
  ?'query_version' => QueryVersion,
  ) $s = shape()) {
    $this->aggregation_field = $aggregation_field ?? ;
    $this->index_name = $index_name ?? ;
    $this->query_string = $query_string ?? ;
    $this->query_version = $query_version ?? ;
  }
}

class GetCardinalityResponse {
  public Count $cardinality;

  public function __construct(shape(
  ?'cardinality' => Count,
  ) $s = shape()) {
    $this->cardinality = $cardinality ?? ;
  }
}

class GetEffectivePoliciesRequest {
  public CognitoIdentityPoolId $cognito_identity_pool_id;
  public Principal $principal;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'cognito_identity_pool_id' => CognitoIdentityPoolId,
  ?'principal' => Principal,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->cognito_identity_pool_id = $cognito_identity_pool_id ?? ;
    $this->principal = $principal ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class GetEffectivePoliciesResponse {
  public EffectivePolicies $effective_policies;

  public function __construct(shape(
  ?'effective_policies' => EffectivePolicies,
  ) $s = shape()) {
    $this->effective_policies = $effective_policies ?? ;
  }
}

class GetIndexingConfigurationRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetIndexingConfigurationResponse {
  public ThingGroupIndexingConfiguration $thing_group_indexing_configuration;
  public ThingIndexingConfiguration $thing_indexing_configuration;

  public function __construct(shape(
  ?'thing_group_indexing_configuration' => ThingGroupIndexingConfiguration,
  ?'thing_indexing_configuration' => ThingIndexingConfiguration,
  ) $s = shape()) {
    $this->thing_group_indexing_configuration = $thing_group_indexing_configuration ?? ;
    $this->thing_indexing_configuration = $thing_indexing_configuration ?? ;
  }
}

class GetJobDocumentRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
  }
}

class GetJobDocumentResponse {
  public JobDocument $document;

  public function __construct(shape(
  ?'document' => JobDocument,
  ) $s = shape()) {
    $this->document = $document ?? ;
  }
}

class GetLoggingOptionsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetLoggingOptionsResponse {
  public LogLevel $log_level;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'log_level' => LogLevel,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->log_level = $log_level ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class GetOTAUpdateRequest {
  public OTAUpdateId $ota_update_id;

  public function __construct(shape(
  ?'ota_update_id' => OTAUpdateId,
  ) $s = shape()) {
    $this->ota_update_id = $ota_update_id ?? ;
  }
}

class GetOTAUpdateResponse {
  public OTAUpdateInfo $ota_update_info;

  public function __construct(shape(
  ?'ota_update_info' => OTAUpdateInfo,
  ) $s = shape()) {
    $this->ota_update_info = $ota_update_info ?? ;
  }
}

class GetPercentilesRequest {
  public AggregationField $aggregation_field;
  public IndexName $index_name;
  public PercentList $percents;
  public QueryString $query_string;
  public QueryVersion $query_version;

  public function __construct(shape(
  ?'aggregation_field' => AggregationField,
  ?'index_name' => IndexName,
  ?'percents' => PercentList,
  ?'query_string' => QueryString,
  ?'query_version' => QueryVersion,
  ) $s = shape()) {
    $this->aggregation_field = $aggregation_field ?? ;
    $this->index_name = $index_name ?? ;
    $this->percents = $percents ?? ;
    $this->query_string = $query_string ?? ;
    $this->query_version = $query_version ?? ;
  }
}

class GetPercentilesResponse {
  public Percentiles $percentiles;

  public function __construct(shape(
  ?'percentiles' => Percentiles,
  ) $s = shape()) {
    $this->percentiles = $percentiles ?? ;
  }
}

class GetPolicyRequest {
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
  }
}

class GetPolicyResponse {
  public DateType $creation_date;
  public PolicyVersionId $default_version_id;
  public GenerationId $generation_id;
  public DateType $last_modified_date;
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'creation_date' => DateType,
  ?'default_version_id' => PolicyVersionId,
  ?'generation_id' => GenerationId,
  ?'last_modified_date' => DateType,
  ?'policy_arn' => PolicyArn,
  ?'policy_document' => PolicyDocument,
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->default_version_id = $default_version_id ?? ;
    $this->generation_id = $generation_id ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->policy_arn = $policy_arn ?? ;
    $this->policy_document = $policy_document ?? ;
    $this->policy_name = $policy_name ?? ;
  }
}

class GetPolicyVersionRequest {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'policy_version_id' => PolicyVersionId,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
    $this->policy_version_id = $policy_version_id ?? ;
  }
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

  public function __construct(shape(
  ?'creation_date' => DateType,
  ?'generation_id' => GenerationId,
  ?'is_default_version' => IsDefaultVersion,
  ?'last_modified_date' => DateType,
  ?'policy_arn' => PolicyArn,
  ?'policy_document' => PolicyDocument,
  ?'policy_name' => PolicyName,
  ?'policy_version_id' => PolicyVersionId,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->generation_id = $generation_id ?? ;
    $this->is_default_version = $is_default_version ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->policy_arn = $policy_arn ?? ;
    $this->policy_document = $policy_document ?? ;
    $this->policy_name = $policy_name ?? ;
    $this->policy_version_id = $policy_version_id ?? ;
  }
}

class GetRegistrationCodeRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetRegistrationCodeResponse {
  public RegistrationCode $registration_code;

  public function __construct(shape(
  ?'registration_code' => RegistrationCode,
  ) $s = shape()) {
    $this->registration_code = $registration_code ?? ;
  }
}

class GetStatisticsRequest {
  public AggregationField $aggregation_field;
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;

  public function __construct(shape(
  ?'aggregation_field' => AggregationField,
  ?'index_name' => IndexName,
  ?'query_string' => QueryString,
  ?'query_version' => QueryVersion,
  ) $s = shape()) {
    $this->aggregation_field = $aggregation_field ?? ;
    $this->index_name = $index_name ?? ;
    $this->query_string = $query_string ?? ;
    $this->query_version = $query_version ?? ;
  }
}

class GetStatisticsResponse {
  public Statistics $statistics;

  public function __construct(shape(
  ?'statistics' => Statistics,
  ) $s = shape()) {
    $this->statistics = $statistics ?? ;
  }
}

class GetTopicRuleDestinationRequest {
  public AwsArn $arn;

  public function __construct(shape(
  ?'arn' => AwsArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

class GetTopicRuleDestinationResponse {
  public TopicRuleDestination $topic_rule_destination;

  public function __construct(shape(
  ?'topic_rule_destination' => TopicRuleDestination,
  ) $s = shape()) {
    $this->topic_rule_destination = $topic_rule_destination ?? ;
  }
}

class GetTopicRuleRequest {
  public RuleName $rule_name;

  public function __construct(shape(
  ?'rule_name' => RuleName,
  ) $s = shape()) {
    $this->rule_name = $rule_name ?? ;
  }
}

class GetTopicRuleResponse {
  public TopicRule $rule;
  public RuleArn $rule_arn;

  public function __construct(shape(
  ?'rule' => TopicRule,
  ?'rule_arn' => RuleArn,
  ) $s = shape()) {
    $this->rule = $rule ?? ;
    $this->rule_arn = $rule_arn ?? ;
  }
}

class GetV2LoggingOptionsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetV2LoggingOptionsResponse {
  public LogLevel $default_log_level;
  public DisableAllLogs $disable_all_logs;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'default_log_level' => LogLevel,
  ?'disable_all_logs' => DisableAllLogs,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->default_log_level = $default_log_level ?? ;
    $this->disable_all_logs = $disable_all_logs ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class GroupNameAndArn {
  public ThingGroupArn $group_arn;
  public ThingGroupName $group_name;

  public function __construct(shape(
  ?'group_arn' => ThingGroupArn,
  ?'group_name' => ThingGroupName,
  ) $s = shape()) {
    $this->group_arn = $group_arn ?? ;
    $this->group_name = $group_name ?? ;
  }
}

type HashAlgorithm = string;

type HashKeyField = string;

type HashKeyValue = string;

type HeaderKey = string;

type HeaderList = vec<HttpActionHeader>;

type HeaderValue = string;

class HttpAction {
  public HttpAuthorization $auth;
  public Url $confirmation_url;
  public HeaderList $headers;
  public Url $url;

  public function __construct(shape(
  ?'auth' => HttpAuthorization,
  ?'confirmation_url' => Url,
  ?'headers' => HeaderList,
  ?'url' => Url,
  ) $s = shape()) {
    $this->auth = $auth ?? ;
    $this->confirmation_url = $confirmation_url ?? ;
    $this->headers = $headers ?? ;
    $this->url = $url ?? ;
  }
}

class HttpActionHeader {
  public HeaderKey $key;
  public HeaderValue $value;

  public function __construct(shape(
  ?'key' => HeaderKey,
  ?'value' => HeaderValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

class HttpAuthorization {
  public SigV4Authorization $sigv_4;

  public function __construct(shape(
  ?'sigv_4' => SigV4Authorization,
  ) $s = shape()) {
    $this->sigv_4 = $sigv_4 ?? ;
  }
}

class HttpContext {
  public HttpHeaders $headers;
  public HttpQueryString $query_string;

  public function __construct(shape(
  ?'headers' => HttpHeaders,
  ?'query_string' => HttpQueryString,
  ) $s = shape()) {
    $this->headers = $headers ?? ;
    $this->query_string = $query_string ?? ;
  }
}

type HttpHeaderName = string;

type HttpHeaderValue = string;

type HttpHeaders = dict<HttpHeaderName, HttpHeaderValue>;

type HttpQueryString = string;

class HttpUrlDestinationConfiguration {
  public Url $confirmation_url;

  public function __construct(shape(
  ?'confirmation_url' => Url,
  ) $s = shape()) {
    $this->confirmation_url = $confirmation_url ?? ;
  }
}

class HttpUrlDestinationProperties {
  public Url $confirmation_url;

  public function __construct(shape(
  ?'confirmation_url' => Url,
  ) $s = shape()) {
    $this->confirmation_url = $confirmation_url ?? ;
  }
}

class HttpUrlDestinationSummary {
  public Url $confirmation_url;

  public function __construct(shape(
  ?'confirmation_url' => Url,
  ) $s = shape()) {
    $this->confirmation_url = $confirmation_url ?? ;
  }
}

class ImplicitDeny {
  public Policies $policies;

  public function __construct(shape(
  ?'policies' => Policies,
  ) $s = shape()) {
    $this->policies = $policies ?? ;
  }
}

type InProgressChecksCount = int;

type InProgressThings = int;

type InProgressTimeoutInMinutes = int;

type IncrementFactor = float;

type IndexName = string;

type IndexNamesList = vec<IndexName>;

class IndexNotReadyException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type IndexSchema = string;

type IndexStatus = string;

type InlineDocument = string;

type InputName = string;

class InternalException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InternalFailureException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidAggregationException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidQueryException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidResponseException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidStateTransitionException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class IotAnalyticsAction {
  public AwsArn $channel_arn;
  public ChannelName $channel_name;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'channel_arn' => AwsArn,
  ?'channel_name' => ChannelName,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->channel_arn = $channel_arn ?? ;
    $this->channel_name = $channel_name ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class IotEventsAction {
  public InputName $input_name;
  public MessageId $message_id;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'input_name' => InputName,
  ?'message_id' => MessageId,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->input_name = $input_name ?? ;
    $this->message_id = $message_id ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class IotSiteWiseAction {
  public PutAssetPropertyValueEntryList $put_asset_property_value_entries;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'put_asset_property_value_entries' => PutAssetPropertyValueEntryList,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->put_asset_property_value_entries = $put_asset_property_value_entries ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type IsAuthenticated = bool;

type IsDefaultVersion = bool;

type IsDisabled = bool;

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

  public function __construct(shape(
  ?'abort_config' => AbortConfig,
  ?'comment' => Comment,
  ?'completed_at' => DateType,
  ?'created_at' => DateType,
  ?'description' => JobDescription,
  ?'force_canceled' => Forced,
  ?'job_arn' => JobArn,
  ?'job_executions_rollout_config' => JobExecutionsRolloutConfig,
  ?'job_id' => JobId,
  ?'job_process_details' => JobProcessDetails,
  ?'last_updated_at' => DateType,
  ?'presigned_url_config' => PresignedUrlConfig,
  ?'reason_code' => ReasonCode,
  ?'status' => JobStatus,
  ?'target_selection' => TargetSelection,
  ?'targets' => JobTargets,
  ?'timeout_config' => TimeoutConfig,
  ) $s = shape()) {
    $this->abort_config = $abort_config ?? ;
    $this->comment = $comment ?? ;
    $this->completed_at = $completed_at ?? ;
    $this->created_at = $created_at ?? ;
    $this->description = $description ?? ;
    $this->force_canceled = $force_canceled ?? ;
    $this->job_arn = $job_arn ?? ;
    $this->job_executions_rollout_config = $job_executions_rollout_config ?? ;
    $this->job_id = $job_id ?? ;
    $this->job_process_details = $job_process_details ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->presigned_url_config = $presigned_url_config ?? ;
    $this->reason_code = $reason_code ?? ;
    $this->status = $status ?? ;
    $this->target_selection = $target_selection ?? ;
    $this->targets = $targets ?? ;
    $this->timeout_config = $timeout_config ?? ;
  }
}

type JobArn = string;

type JobDescription = string;

type JobDocument = string;

type JobDocumentSource = string;

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

  public function __construct(shape(
  ?'approximate_seconds_before_timed_out' => ApproximateSecondsBeforeTimedOut,
  ?'execution_number' => ExecutionNumber,
  ?'force_canceled' => Forced,
  ?'job_id' => JobId,
  ?'last_updated_at' => DateType,
  ?'queued_at' => DateType,
  ?'started_at' => DateType,
  ?'status' => JobExecutionStatus,
  ?'status_details' => JobExecutionStatusDetails,
  ?'thing_arn' => ThingArn,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->approximate_seconds_before_timed_out = $approximate_seconds_before_timed_out ?? ;
    $this->execution_number = $execution_number ?? ;
    $this->force_canceled = $force_canceled ?? ;
    $this->job_id = $job_id ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->queued_at = $queued_at ?? ;
    $this->started_at = $started_at ?? ;
    $this->status = $status ?? ;
    $this->status_details = $status_details ?? ;
    $this->thing_arn = $thing_arn ?? ;
    $this->version_number = $version_number ?? ;
  }
}

type JobExecutionFailureType = string;

type JobExecutionStatus = string;

class JobExecutionStatusDetails {
  public DetailsMap $details_map;

  public function __construct(shape(
  ?'details_map' => DetailsMap,
  ) $s = shape()) {
    $this->details_map = $details_map ?? ;
  }
}

class JobExecutionSummary {
  public ExecutionNumber $execution_number;
  public DateType $last_updated_at;
  public DateType $queued_at;
  public DateType $started_at;
  public JobExecutionStatus $status;

  public function __construct(shape(
  ?'execution_number' => ExecutionNumber,
  ?'last_updated_at' => DateType,
  ?'queued_at' => DateType,
  ?'started_at' => DateType,
  ?'status' => JobExecutionStatus,
  ) $s = shape()) {
    $this->execution_number = $execution_number ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->queued_at = $queued_at ?? ;
    $this->started_at = $started_at ?? ;
    $this->status = $status ?? ;
  }
}

class JobExecutionSummaryForJob {
  public JobExecutionSummary $job_execution_summary;
  public ThingArn $thing_arn;

  public function __construct(shape(
  ?'job_execution_summary' => JobExecutionSummary,
  ?'thing_arn' => ThingArn,
  ) $s = shape()) {
    $this->job_execution_summary = $job_execution_summary ?? ;
    $this->thing_arn = $thing_arn ?? ;
  }
}

type JobExecutionSummaryForJobList = vec<JobExecutionSummaryForJob>;

class JobExecutionSummaryForThing {
  public JobExecutionSummary $job_execution_summary;
  public JobId $job_id;

  public function __construct(shape(
  ?'job_execution_summary' => JobExecutionSummary,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_execution_summary = $job_execution_summary ?? ;
    $this->job_id = $job_id ?? ;
  }
}

type JobExecutionSummaryForThingList = vec<JobExecutionSummaryForThing>;

class JobExecutionsRolloutConfig {
  public ExponentialRolloutRate $exponential_rate;
  public MaxJobExecutionsPerMin $maximum_per_minute;

  public function __construct(shape(
  ?'exponential_rate' => ExponentialRolloutRate,
  ?'maximum_per_minute' => MaxJobExecutionsPerMin,
  ) $s = shape()) {
    $this->exponential_rate = $exponential_rate ?? ;
    $this->maximum_per_minute = $maximum_per_minute ?? ;
  }
}

type JobId = string;

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

  public function __construct(shape(
  ?'number_of_canceled_things' => CanceledThings,
  ?'number_of_failed_things' => FailedThings,
  ?'number_of_in_progress_things' => InProgressThings,
  ?'number_of_queued_things' => QueuedThings,
  ?'number_of_rejected_things' => RejectedThings,
  ?'number_of_removed_things' => RemovedThings,
  ?'number_of_succeeded_things' => SucceededThings,
  ?'number_of_timed_out_things' => TimedOutThings,
  ?'processing_targets' => ProcessingTargetNameList,
  ) $s = shape()) {
    $this->number_of_canceled_things = $number_of_canceled_things ?? ;
    $this->number_of_failed_things = $number_of_failed_things ?? ;
    $this->number_of_in_progress_things = $number_of_in_progress_things ?? ;
    $this->number_of_queued_things = $number_of_queued_things ?? ;
    $this->number_of_rejected_things = $number_of_rejected_things ?? ;
    $this->number_of_removed_things = $number_of_removed_things ?? ;
    $this->number_of_succeeded_things = $number_of_succeeded_things ?? ;
    $this->number_of_timed_out_things = $number_of_timed_out_things ?? ;
    $this->processing_targets = $processing_targets ?? ;
  }
}

type JobStatus = string;

class JobSummary {
  public DateType $completed_at;
  public DateType $created_at;
  public JobArn $job_arn;
  public JobId $job_id;
  public DateType $last_updated_at;
  public JobStatus $status;
  public TargetSelection $target_selection;
  public ThingGroupId $thing_group_id;

  public function __construct(shape(
  ?'completed_at' => DateType,
  ?'created_at' => DateType,
  ?'job_arn' => JobArn,
  ?'job_id' => JobId,
  ?'last_updated_at' => DateType,
  ?'status' => JobStatus,
  ?'target_selection' => TargetSelection,
  ?'thing_group_id' => ThingGroupId,
  ) $s = shape()) {
    $this->completed_at = $completed_at ?? ;
    $this->created_at = $created_at ?? ;
    $this->job_arn = $job_arn ?? ;
    $this->job_id = $job_id ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->status = $status ?? ;
    $this->target_selection = $target_selection ?? ;
    $this->thing_group_id = $thing_group_id ?? ;
  }
}

type JobSummaryList = vec<JobSummary>;

type JobTargets = vec<TargetArn>;

type JsonDocument = string;

type Key = string;

type KeyName = string;

class KeyPair {
  public PrivateKey $private_key;
  public PublicKey $public_key;

  public function __construct(shape(
  ?'private_key' => PrivateKey,
  ?'public_key' => PublicKey,
  ) $s = shape()) {
    $this->private_key = $private_key ?? "";
    $this->public_key = $public_key ?? "";
  }
}

type KeyValue = string;

class KinesisAction {
  public PartitionKey $partition_key;
  public AwsArn $role_arn;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'partition_key' => PartitionKey,
  ?'role_arn' => AwsArn,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->partition_key = $partition_key ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->stream_name = $stream_name ?? ;
  }
}

class LambdaAction {
  public FunctionArn $function_arn;

  public function __construct(shape(
  ?'function_arn' => FunctionArn,
  ) $s = shape()) {
    $this->function_arn = $function_arn ?? ;
  }
}

type LaserMaxResults = int;

type LastModifiedDate = int;

class LimitExceededException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListActiveViolationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public SecurityProfileName $security_profile_name;
  public DeviceDefenderThingName $thing_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'security_profile_name' => SecurityProfileName,
  ?'thing_name' => DeviceDefenderThingName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class ListActiveViolationsResponse {
  public ActiveViolations $active_violations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'active_violations' => ActiveViolations,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->active_violations = $active_violations ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListAttachedPoliciesRequest {
  public Marker $marker;
  public PageSize $page_size;
  public Recursive $recursive;
  public PolicyTarget $target;

  public function __construct(shape(
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ?'recursive' => Recursive,
  ?'target' => PolicyTarget,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
    $this->recursive = $recursive ?? ;
    $this->target = $target ?? ;
  }
}

class ListAttachedPoliciesResponse {
  public Marker $next_marker;
  public Policies $policies;

  public function __construct(shape(
  ?'next_marker' => Marker,
  ?'policies' => Policies,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? ;
    $this->policies = $policies ?? ;
  }
}

class ListAuditFindingsRequest {
  public AuditCheckName $check_name;
  public Timestamp $end_time;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceIdentifier $resource_identifier;
  public Timestamp $start_time;
  public AuditTaskId $task_id;

  public function __construct(shape(
  ?'check_name' => AuditCheckName,
  ?'end_time' => Timestamp,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'resource_identifier' => ResourceIdentifier,
  ?'start_time' => Timestamp,
  ?'task_id' => AuditTaskId,
  ) $s = shape()) {
    $this->check_name = $check_name ?? ;
    $this->end_time = $end_time ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_identifier = $resource_identifier ?? ;
    $this->start_time = $start_time ?? ;
    $this->task_id = $task_id ?? ;
  }
}

class ListAuditFindingsResponse {
  public AuditFindings $findings;
  public NextToken $next_token;

  public function __construct(shape(
  ?'findings' => AuditFindings,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->findings = $findings ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListAuditMitigationActionsExecutionsRequest {
  public AuditMitigationActionsExecutionStatus $action_status;
  public FindingId $finding_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public AuditMitigationActionsTaskId $task_id;

  public function __construct(shape(
  ?'action_status' => AuditMitigationActionsExecutionStatus,
  ?'finding_id' => FindingId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'task_id' => AuditMitigationActionsTaskId,
  ) $s = shape()) {
    $this->action_status = $action_status ?? ;
    $this->finding_id = $finding_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->task_id = $task_id ?? ;
  }
}

class ListAuditMitigationActionsExecutionsResponse {
  public AuditMitigationActionExecutionMetadataList $actions_executions;
  public NextToken $next_token;

  public function __construct(shape(
  ?'actions_executions' => AuditMitigationActionExecutionMetadataList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->actions_executions = $actions_executions ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListAuditMitigationActionsTasksRequest {
  public AuditTaskId $audit_task_id;
  public Timestamp $end_time;
  public FindingId $finding_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Timestamp $start_time;
  public AuditMitigationActionsTaskStatus $task_status;

  public function __construct(shape(
  ?'audit_task_id' => AuditTaskId,
  ?'end_time' => Timestamp,
  ?'finding_id' => FindingId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'start_time' => Timestamp,
  ?'task_status' => AuditMitigationActionsTaskStatus,
  ) $s = shape()) {
    $this->audit_task_id = $audit_task_id ?? ;
    $this->end_time = $end_time ?? ;
    $this->finding_id = $finding_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->start_time = $start_time ?? ;
    $this->task_status = $task_status ?? ;
  }
}

class ListAuditMitigationActionsTasksResponse {
  public NextToken $next_token;
  public AuditMitigationActionsTaskMetadataList $tasks;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tasks' => AuditMitigationActionsTaskMetadataList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->tasks = $tasks ?? ;
  }
}

class ListAuditTasksRequest {
  public Timestamp $end_time;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Timestamp $start_time;
  public AuditTaskStatus $task_status;
  public AuditTaskType $task_type;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'start_time' => Timestamp,
  ?'task_status' => AuditTaskStatus,
  ?'task_type' => AuditTaskType,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->start_time = $start_time ?? ;
    $this->task_status = $task_status ?? ;
    $this->task_type = $task_type ?? ;
  }
}

class ListAuditTasksResponse {
  public NextToken $next_token;
  public AuditTaskMetadataList $tasks;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tasks' => AuditTaskMetadataList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->tasks = $tasks ?? ;
  }
}

class ListAuthorizersRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
  public AuthorizerStatus $status;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ?'status' => AuthorizerStatus,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
    $this->status = $status ?? ;
  }
}

class ListAuthorizersResponse {
  public Authorizers $authorizers;
  public Marker $next_marker;

  public function __construct(shape(
  ?'authorizers' => Authorizers,
  ?'next_marker' => Marker,
  ) $s = shape()) {
    $this->authorizers = $authorizers ?? ;
    $this->next_marker = $next_marker ?? ;
  }
}

class ListBillingGroupsRequest {
  public RegistryMaxResults $max_results;
  public BillingGroupName $name_prefix_filter;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => RegistryMaxResults,
  ?'name_prefix_filter' => BillingGroupName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->name_prefix_filter = $name_prefix_filter ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListBillingGroupsResponse {
  public BillingGroupNameAndArnList $billing_groups;
  public NextToken $next_token;

  public function __construct(shape(
  ?'billing_groups' => BillingGroupNameAndArnList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->billing_groups = $billing_groups ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListCACertificatesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
  }
}

class ListCACertificatesResponse {
  public CACertificates $certificates;
  public Marker $next_marker;

  public function __construct(shape(
  ?'certificates' => CACertificates,
  ?'next_marker' => Marker,
  ) $s = shape()) {
    $this->certificates = $certificates ?? ;
    $this->next_marker = $next_marker ?? ;
  }
}

class ListCertificatesByCARequest {
  public AscendingOrder $ascending_order;
  public CertificateId $ca_certificate_id;
  public Marker $marker;
  public PageSize $page_size;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'ca_certificate_id' => CertificateId,
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->ca_certificate_id = $ca_certificate_id ?? ;
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
  }
}

class ListCertificatesByCAResponse {
  public Certificates $certificates;
  public Marker $next_marker;

  public function __construct(shape(
  ?'certificates' => Certificates,
  ?'next_marker' => Marker,
  ) $s = shape()) {
    $this->certificates = $certificates ?? ;
    $this->next_marker = $next_marker ?? ;
  }
}

class ListCertificatesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
  }
}

class ListCertificatesResponse {
  public Certificates $certificates;
  public Marker $next_marker;

  public function __construct(shape(
  ?'certificates' => Certificates,
  ?'next_marker' => Marker,
  ) $s = shape()) {
    $this->certificates = $certificates ?? ;
    $this->next_marker = $next_marker ?? ;
  }
}

class ListDimensionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDimensionsResponse {
  public DimensionNames $dimension_names;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dimension_names' => DimensionNames,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dimension_names = $dimension_names ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDomainConfigurationsRequest {
  public Marker $marker;
  public PageSize $page_size;
  public ServiceType $service_type;

  public function __construct(shape(
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ?'service_type' => ServiceType,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
    $this->service_type = $service_type ?? ;
  }
}

class ListDomainConfigurationsResponse {
  public DomainConfigurations $domain_configurations;
  public Marker $next_marker;

  public function __construct(shape(
  ?'domain_configurations' => DomainConfigurations,
  ?'next_marker' => Marker,
  ) $s = shape()) {
    $this->domain_configurations = $domain_configurations ?? ;
    $this->next_marker = $next_marker ?? ;
  }
}

class ListIndicesRequest {
  public QueryMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => QueryMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListIndicesResponse {
  public IndexNamesList $index_names;
  public NextToken $next_token;

  public function __construct(shape(
  ?'index_names' => IndexNamesList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->index_names = $index_names ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListJobExecutionsForJobRequest {
  public JobId $job_id;
  public LaserMaxResults $max_results;
  public NextToken $next_token;
  public JobExecutionStatus $status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'max_results' => LaserMaxResults,
  ?'next_token' => NextToken,
  ?'status' => JobExecutionStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->status = $status ?? ;
  }
}

class ListJobExecutionsForJobResponse {
  public JobExecutionSummaryForJobList $execution_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'execution_summaries' => JobExecutionSummaryForJobList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->execution_summaries = $execution_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListJobExecutionsForThingRequest {
  public LaserMaxResults $max_results;
  public NextToken $next_token;
  public JobExecutionStatus $status;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'max_results' => LaserMaxResults,
  ?'next_token' => NextToken,
  ?'status' => JobExecutionStatus,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->status = $status ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class ListJobExecutionsForThingResponse {
  public JobExecutionSummaryForThingList $execution_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'execution_summaries' => JobExecutionSummaryForThingList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->execution_summaries = $execution_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListJobsRequest {
  public LaserMaxResults $max_results;
  public NextToken $next_token;
  public JobStatus $status;
  public TargetSelection $target_selection;
  public ThingGroupId $thing_group_id;
  public ThingGroupName $thing_group_name;

  public function __construct(shape(
  ?'max_results' => LaserMaxResults,
  ?'next_token' => NextToken,
  ?'status' => JobStatus,
  ?'target_selection' => TargetSelection,
  ?'thing_group_id' => ThingGroupId,
  ?'thing_group_name' => ThingGroupName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->status = $status ?? ;
    $this->target_selection = $target_selection ?? ;
    $this->thing_group_id = $thing_group_id ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
  }
}

class ListJobsResponse {
  public JobSummaryList $jobs;
  public NextToken $next_token;

  public function __construct(shape(
  ?'jobs' => JobSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->jobs = $jobs ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMitigationActionsRequest {
  public MitigationActionType $action_type;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'action_type' => MitigationActionType,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->action_type = $action_type ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMitigationActionsResponse {
  public MitigationActionIdentifierList $action_identifiers;
  public NextToken $next_token;

  public function __construct(shape(
  ?'action_identifiers' => MitigationActionIdentifierList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->action_identifiers = $action_identifiers ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListOTAUpdatesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OTAUpdateStatus $ota_update_status;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'ota_update_status' => OTAUpdateStatus,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->ota_update_status = $ota_update_status ?? ;
  }
}

class ListOTAUpdatesResponse {
  public NextToken $next_token;
  public OTAUpdatesSummary $ota_updates;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'ota_updates' => OTAUpdatesSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->ota_updates = $ota_updates ?? ;
  }
}

class ListOutgoingCertificatesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
  }
}

class ListOutgoingCertificatesResponse {
  public Marker $next_marker;
  public OutgoingCertificates $outgoing_certificates;

  public function __construct(shape(
  ?'next_marker' => Marker,
  ?'outgoing_certificates' => OutgoingCertificates,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? ;
    $this->outgoing_certificates = $outgoing_certificates ?? ;
  }
}

class ListPoliciesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
  }
}

class ListPoliciesResponse {
  public Marker $next_marker;
  public Policies $policies;

  public function __construct(shape(
  ?'next_marker' => Marker,
  ?'policies' => Policies,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? ;
    $this->policies = $policies ?? ;
  }
}

class ListPolicyPrincipalsRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
    $this->policy_name = $policy_name ?? ;
  }
}

class ListPolicyPrincipalsResponse {
  public Marker $next_marker;
  public Principals $principals;

  public function __construct(shape(
  ?'next_marker' => Marker,
  ?'principals' => Principals,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? ;
    $this->principals = $principals ?? ;
  }
}

class ListPolicyVersionsRequest {
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
  }
}

class ListPolicyVersionsResponse {
  public PolicyVersions $policy_versions;

  public function __construct(shape(
  ?'policy_versions' => PolicyVersions,
  ) $s = shape()) {
    $this->policy_versions = $policy_versions ?? ;
  }
}

class ListPrincipalPoliciesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;
  public Principal $principal;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ?'principal' => Principal,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
    $this->principal = $principal ?? ;
  }
}

class ListPrincipalPoliciesResponse {
  public Marker $next_marker;
  public Policies $policies;

  public function __construct(shape(
  ?'next_marker' => Marker,
  ?'policies' => Policies,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? ;
    $this->policies = $policies ?? ;
  }
}

class ListPrincipalThingsRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public Principal $principal;

  public function __construct(shape(
  ?'max_results' => RegistryMaxResults,
  ?'next_token' => NextToken,
  ?'principal' => Principal,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->principal = $principal ?? ;
  }
}

class ListPrincipalThingsResponse {
  public NextToken $next_token;
  public ThingNameList $things;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'things' => ThingNameList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->things = $things ?? ;
  }
}

class ListProvisioningTemplateVersionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public TemplateName $template_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->template_name = $template_name ?? ;
  }
}

class ListProvisioningTemplateVersionsResponse {
  public NextToken $next_token;
  public ProvisioningTemplateVersionListing $versions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'versions' => ProvisioningTemplateVersionListing,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->versions = $versions ?? ;
  }
}

class ListProvisioningTemplatesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListProvisioningTemplatesResponse {
  public NextToken $next_token;
  public ProvisioningTemplateListing $templates;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'templates' => ProvisioningTemplateListing,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->templates = $templates ?? ;
  }
}

class ListRoleAliasesRequest {
  public AscendingOrder $ascending_order;
  public Marker $marker;
  public PageSize $page_size;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
  }
}

class ListRoleAliasesResponse {
  public Marker $next_marker;
  public RoleAliases $role_aliases;

  public function __construct(shape(
  ?'next_marker' => Marker,
  ?'role_aliases' => RoleAliases,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? ;
    $this->role_aliases = $role_aliases ?? ;
  }
}

class ListScheduledAuditsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListScheduledAuditsResponse {
  public NextToken $next_token;
  public ScheduledAuditMetadataList $scheduled_audits;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'scheduled_audits' => ScheduledAuditMetadataList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->scheduled_audits = $scheduled_audits ?? ;
  }
}

class ListSecurityProfilesForTargetRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Recursive $recursive;
  public SecurityProfileTargetArn $security_profile_target_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'recursive' => Recursive,
  ?'security_profile_target_arn' => SecurityProfileTargetArn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->recursive = $recursive ?? ;
    $this->security_profile_target_arn = $security_profile_target_arn ?? ;
  }
}

class ListSecurityProfilesForTargetResponse {
  public NextToken $next_token;
  public SecurityProfileTargetMappings $security_profile_target_mappings;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'security_profile_target_mappings' => SecurityProfileTargetMappings,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->security_profile_target_mappings = $security_profile_target_mappings ?? ;
  }
}

class ListSecurityProfilesRequest {
  public DimensionName $dimension_name;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dimension_name' => DimensionName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dimension_name = $dimension_name ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListSecurityProfilesResponse {
  public NextToken $next_token;
  public SecurityProfileIdentifiers $security_profile_identifiers;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'security_profile_identifiers' => SecurityProfileIdentifiers,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->security_profile_identifiers = $security_profile_identifiers ?? ;
  }
}

class ListStreamsRequest {
  public AscendingOrder $ascending_order;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'ascending_order' => AscendingOrder,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->ascending_order = $ascending_order ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListStreamsResponse {
  public NextToken $next_token;
  public StreamsSummary $streams;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'streams' => StreamsSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->streams = $streams ?? ;
  }
}

class ListTagsForResourceRequest {
  public NextToken $next_token;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->tags = $tags ?? ;
  }
}

class ListTargetsForPolicyRequest {
  public Marker $marker;
  public PageSize $page_size;
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'marker' => Marker,
  ?'page_size' => PageSize,
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->page_size = $page_size ?? ;
    $this->policy_name = $policy_name ?? ;
  }
}

class ListTargetsForPolicyResponse {
  public Marker $next_marker;
  public PolicyTargets $targets;

  public function __construct(shape(
  ?'next_marker' => Marker,
  ?'targets' => PolicyTargets,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? ;
    $this->targets = $targets ?? ;
  }
}

class ListTargetsForSecurityProfileRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public SecurityProfileName $security_profile_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'security_profile_name' => SecurityProfileName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
  }
}

class ListTargetsForSecurityProfileResponse {
  public NextToken $next_token;
  public SecurityProfileTargets $security_profile_targets;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'security_profile_targets' => SecurityProfileTargets,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->security_profile_targets = $security_profile_targets ?? ;
  }
}

class ListThingGroupsForThingRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'max_results' => RegistryMaxResults,
  ?'next_token' => NextToken,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class ListThingGroupsForThingResponse {
  public NextToken $next_token;
  public ThingGroupNameAndArnList $thing_groups;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'thing_groups' => ThingGroupNameAndArnList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->thing_groups = $thing_groups ?? ;
  }
}

class ListThingGroupsRequest {
  public RegistryMaxResults $max_results;
  public ThingGroupName $name_prefix_filter;
  public NextToken $next_token;
  public ThingGroupName $parent_group;
  public RecursiveWithoutDefault $recursive;

  public function __construct(shape(
  ?'max_results' => RegistryMaxResults,
  ?'name_prefix_filter' => ThingGroupName,
  ?'next_token' => NextToken,
  ?'parent_group' => ThingGroupName,
  ?'recursive' => RecursiveWithoutDefault,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->name_prefix_filter = $name_prefix_filter ?? ;
    $this->next_token = $next_token ?? ;
    $this->parent_group = $parent_group ?? ;
    $this->recursive = $recursive ?? ;
  }
}

class ListThingGroupsResponse {
  public NextToken $next_token;
  public ThingGroupNameAndArnList $thing_groups;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'thing_groups' => ThingGroupNameAndArnList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->thing_groups = $thing_groups ?? ;
  }
}

class ListThingPrincipalsRequest {
  public ThingName $thing_name;

  public function __construct(shape(
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->thing_name = $thing_name ?? ;
  }
}

class ListThingPrincipalsResponse {
  public Principals $principals;

  public function __construct(shape(
  ?'principals' => Principals,
  ) $s = shape()) {
    $this->principals = $principals ?? ;
  }
}

class ListThingRegistrationTaskReportsRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public ReportType $report_type;
  public TaskId $task_id;

  public function __construct(shape(
  ?'max_results' => RegistryMaxResults,
  ?'next_token' => NextToken,
  ?'report_type' => ReportType,
  ?'task_id' => TaskId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->report_type = $report_type ?? ;
    $this->task_id = $task_id ?? ;
  }
}

class ListThingRegistrationTaskReportsResponse {
  public NextToken $next_token;
  public ReportType $report_type;
  public S3FileUrlList $resource_links;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'report_type' => ReportType,
  ?'resource_links' => S3FileUrlList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->report_type = $report_type ?? ;
    $this->resource_links = $resource_links ?? ;
  }
}

class ListThingRegistrationTasksRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public Status $status;

  public function __construct(shape(
  ?'max_results' => RegistryMaxResults,
  ?'next_token' => NextToken,
  ?'status' => Status,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->status = $status ?? ;
  }
}

class ListThingRegistrationTasksResponse {
  public NextToken $next_token;
  public TaskIdList $task_ids;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'task_ids' => TaskIdList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->task_ids = $task_ids ?? ;
  }
}

class ListThingTypesRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public ThingTypeName $thing_type_name;

  public function __construct(shape(
  ?'max_results' => RegistryMaxResults,
  ?'next_token' => NextToken,
  ?'thing_type_name' => ThingTypeName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
  }
}

class ListThingTypesResponse {
  public NextToken $next_token;
  public ThingTypeList $thing_types;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'thing_types' => ThingTypeList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->thing_types = $thing_types ?? ;
  }
}

class ListThingsInBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public RegistryMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'billing_group_name' => BillingGroupName,
  ?'max_results' => RegistryMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->billing_group_name = $billing_group_name ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListThingsInBillingGroupResponse {
  public NextToken $next_token;
  public ThingNameList $things;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'things' => ThingNameList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->things = $things ?? ;
  }
}

class ListThingsInThingGroupRequest {
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public Recursive $recursive;
  public ThingGroupName $thing_group_name;

  public function __construct(shape(
  ?'max_results' => RegistryMaxResults,
  ?'next_token' => NextToken,
  ?'recursive' => Recursive,
  ?'thing_group_name' => ThingGroupName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->recursive = $recursive ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
  }
}

class ListThingsInThingGroupResponse {
  public NextToken $next_token;
  public ThingNameList $things;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'things' => ThingNameList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->things = $things ?? ;
  }
}

class ListThingsRequest {
  public AttributeName $attribute_name;
  public AttributeValue $attribute_value;
  public RegistryMaxResults $max_results;
  public NextToken $next_token;
  public ThingTypeName $thing_type_name;

  public function __construct(shape(
  ?'attribute_name' => AttributeName,
  ?'attribute_value' => AttributeValue,
  ?'max_results' => RegistryMaxResults,
  ?'next_token' => NextToken,
  ?'thing_type_name' => ThingTypeName,
  ) $s = shape()) {
    $this->attribute_name = $attribute_name ?? ;
    $this->attribute_value = $attribute_value ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
  }
}

class ListThingsResponse {
  public NextToken $next_token;
  public ThingAttributeList $things;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'things' => ThingAttributeList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->things = $things ?? ;
  }
}

class ListTopicRuleDestinationsRequest {
  public TopicRuleDestinationMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => TopicRuleDestinationMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListTopicRuleDestinationsResponse {
  public TopicRuleDestinationSummaries $destination_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'destination_summaries' => TopicRuleDestinationSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->destination_summaries = $destination_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListTopicRulesRequest {
  public TopicRuleMaxResults $max_results;
  public NextToken $next_token;
  public IsDisabled $rule_disabled;
  public Topic $topic;

  public function __construct(shape(
  ?'max_results' => TopicRuleMaxResults,
  ?'next_token' => NextToken,
  ?'rule_disabled' => IsDisabled,
  ?'topic' => Topic,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->rule_disabled = $rule_disabled ?? ;
    $this->topic = $topic ?? ;
  }
}

class ListTopicRulesResponse {
  public NextToken $next_token;
  public TopicRuleList $rules;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'rules' => TopicRuleList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->rules = $rules ?? ;
  }
}

class ListV2LoggingLevelsRequest {
  public SkyfallMaxResults $max_results;
  public NextToken $next_token;
  public LogTargetType $target_type;

  public function __construct(shape(
  ?'max_results' => SkyfallMaxResults,
  ?'next_token' => NextToken,
  ?'target_type' => LogTargetType,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->target_type = $target_type ?? ;
  }
}

class ListV2LoggingLevelsResponse {
  public LogTargetConfigurations $log_target_configurations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'log_target_configurations' => LogTargetConfigurations,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->log_target_configurations = $log_target_configurations ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListViolationEventsRequest {
  public Timestamp $end_time;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SecurityProfileName $security_profile_name;
  public Timestamp $start_time;
  public DeviceDefenderThingName $thing_name;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'security_profile_name' => SecurityProfileName,
  ?'start_time' => Timestamp,
  ?'thing_name' => DeviceDefenderThingName,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
    $this->start_time = $start_time ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class ListViolationEventsResponse {
  public NextToken $next_token;
  public ViolationEvents $violation_events;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'violation_events' => ViolationEvents,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->violation_events = $violation_events ?? ;
  }
}

type LogGroupName = string;

type LogLevel = string;

class LogTarget {
  public LogTargetName $target_name;
  public LogTargetType $target_type;

  public function __construct(shape(
  ?'target_name' => LogTargetName,
  ?'target_type' => LogTargetType,
  ) $s = shape()) {
    $this->target_name = $target_name ?? ;
    $this->target_type = $target_type ?? ;
  }
}

class LogTargetConfiguration {
  public LogLevel $log_level;
  public LogTarget $log_target;

  public function __construct(shape(
  ?'log_level' => LogLevel,
  ?'log_target' => LogTarget,
  ) $s = shape()) {
    $this->log_level = $log_level ?? ;
    $this->log_target = $log_target ?? ;
  }
}

type LogTargetConfigurations = vec<LogTargetConfiguration>;

type LogTargetName = string;

type LogTargetType = string;

class LoggingOptionsPayload {
  public LogLevel $log_level;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'log_level' => LogLevel,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->log_level = $log_level ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class MalformedPolicyException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Marker = string;

type MaxJobExecutionsPerMin = int;

type MaxResults = int;

type Maximum = float;

type MaximumPerMinute = int;

type Message = string;

type MessageFormat = string;

type MessageId = string;

class MetricDimension {
  public DimensionName $dimension_name;
  public DimensionValueOperator $operator;

  public function __construct(shape(
  ?'dimension_name' => DimensionName,
  ?'operator' => DimensionValueOperator,
  ) $s = shape()) {
    $this->dimension_name = $dimension_name ?? ;
    $this->operator = $operator ?? ;
  }
}

class MetricToRetain {
  public BehaviorMetric $metric;
  public MetricDimension $metric_dimension;

  public function __construct(shape(
  ?'metric' => BehaviorMetric,
  ?'metric_dimension' => MetricDimension,
  ) $s = shape()) {
    $this->metric = $metric ?? ;
    $this->metric_dimension = $metric_dimension ?? ;
  }
}

class MetricValue {
  public Cidrs $cidrs;
  public UnsignedLong $count;
  public Ports $ports;

  public function __construct(shape(
  ?'cidrs' => Cidrs,
  ?'count' => UnsignedLong,
  ?'ports' => Ports,
  ) $s = shape()) {
    $this->cidrs = $cidrs ?? ;
    $this->count = $count ?? ;
    $this->ports = $ports ?? ;
  }
}

type Minimum = float;

type MinimumNumberOfExecutedThings = int;

type MissingContextValue = string;

type MissingContextValues = vec<MissingContextValue>;

class MitigationAction {
  public MitigationActionParams $action_params;
  public MitigationActionId $id;
  public MitigationActionName $name;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'action_params' => MitigationActionParams,
  ?'id' => MitigationActionId,
  ?'name' => MitigationActionName,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->action_params = $action_params ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type MitigationActionArn = string;

type MitigationActionId = string;

class MitigationActionIdentifier {
  public MitigationActionArn $action_arn;
  public MitigationActionName $action_name;
  public Timestamp $creation_date;

  public function __construct(shape(
  ?'action_arn' => MitigationActionArn,
  ?'action_name' => MitigationActionName,
  ?'creation_date' => Timestamp,
  ) $s = shape()) {
    $this->action_arn = $action_arn ?? ;
    $this->action_name = $action_name ?? ;
    $this->creation_date = $creation_date ?? ;
  }
}

type MitigationActionIdentifierList = vec<MitigationActionIdentifier>;

type MitigationActionList = vec<MitigationAction>;

type MitigationActionName = string;

type MitigationActionNameList = vec<MitigationActionName>;

class MitigationActionParams {
  public AddThingsToThingGroupParams $add_things_to_thing_group_params;
  public EnableIoTLoggingParams $enable_io_t_logging_params;
  public PublishFindingToSnsParams $publish_finding_to_sns_params;
  public ReplaceDefaultPolicyVersionParams $replace_default_policy_version_params;
  public UpdateCACertificateParams $update_ca_certificate_params;
  public UpdateDeviceCertificateParams $update_device_certificate_params;

  public function __construct(shape(
  ?'add_things_to_thing_group_params' => AddThingsToThingGroupParams,
  ?'enable_io_t_logging_params' => EnableIoTLoggingParams,
  ?'publish_finding_to_sns_params' => PublishFindingToSnsParams,
  ?'replace_default_policy_version_params' => ReplaceDefaultPolicyVersionParams,
  ?'update_ca_certificate_params' => UpdateCACertificateParams,
  ?'update_device_certificate_params' => UpdateDeviceCertificateParams,
  ) $s = shape()) {
    $this->add_things_to_thing_group_params = $add_things_to_thing_group_params ?? ;
    $this->enable_io_t_logging_params = $enable_io_t_logging_params ?? ;
    $this->publish_finding_to_sns_params = $publish_finding_to_sns_params ?? ;
    $this->replace_default_policy_version_params = $replace_default_policy_version_params ?? ;
    $this->update_ca_certificate_params = $update_ca_certificate_params ?? ;
    $this->update_device_certificate_params = $update_device_certificate_params ?? ;
  }
}

type MitigationActionType = string;

type MqttClientId = string;

class MqttContext {
  public MqttClientId $client_id;
  public MqttPassword $password;
  public MqttUsername $username;

  public function __construct(shape(
  ?'client_id' => MqttClientId,
  ?'password' => MqttPassword,
  ?'username' => MqttUsername,
  ) $s = shape()) {
    $this->client_id = $client_id ?? ;
    $this->password = $password ?? ;
    $this->username = $username ?? ;
  }
}

type MqttPassword = string;

type MqttUsername = string;

type NextToken = string;

type NonCompliantChecksCount = int;

class NonCompliantResource {
  public StringMap $additional_info;
  public ResourceIdentifier $resource_identifier;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'additional_info' => StringMap,
  ?'resource_identifier' => ResourceIdentifier,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->additional_info = $additional_info ?? ;
    $this->resource_identifier = $resource_identifier ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

type NonCompliantResourcesCount = int;

class NotConfiguredException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type NumberOfThings = int;

type OTAUpdateArn = string;

type OTAUpdateDescription = string;

type OTAUpdateErrorMessage = string;

class OTAUpdateFile {
  public AttributesMap $attributes;
  public CodeSigning $code_signing;
  public FileLocation $file_location;
  public FileName $file_name;
  public OTAUpdateFileVersion $file_version;

  public function __construct(shape(
  ?'attributes' => AttributesMap,
  ?'code_signing' => CodeSigning,
  ?'file_location' => FileLocation,
  ?'file_name' => FileName,
  ?'file_version' => OTAUpdateFileVersion,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->code_signing = $code_signing ?? ;
    $this->file_location = $file_location ?? ;
    $this->file_name = $file_name ?? ;
    $this->file_version = $file_version ?? ;
  }
}

type OTAUpdateFileVersion = string;

type OTAUpdateFiles = vec<OTAUpdateFile>;

type OTAUpdateId = string;

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

  public function __construct(shape(
  ?'additional_parameters' => AdditionalParameterMap,
  ?'aws_iot_job_arn' => AwsIotJobArn,
  ?'aws_iot_job_id' => AwsIotJobId,
  ?'aws_job_executions_rollout_config' => AwsJobExecutionsRolloutConfig,
  ?'aws_job_presigned_url_config' => AwsJobPresignedUrlConfig,
  ?'creation_date' => DateType,
  ?'description' => OTAUpdateDescription,
  ?'error_info' => ErrorInfo,
  ?'last_modified_date' => DateType,
  ?'ota_update_arn' => OTAUpdateArn,
  ?'ota_update_files' => OTAUpdateFiles,
  ?'ota_update_id' => OTAUpdateId,
  ?'ota_update_status' => OTAUpdateStatus,
  ?'protocols' => Protocols,
  ?'target_selection' => TargetSelection,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->additional_parameters = $additional_parameters ?? ;
    $this->aws_iot_job_arn = $aws_iot_job_arn ?? ;
    $this->aws_iot_job_id = $aws_iot_job_id ?? ;
    $this->aws_job_executions_rollout_config = $aws_job_executions_rollout_config ?? ;
    $this->aws_job_presigned_url_config = $aws_job_presigned_url_config ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->description = $description ?? ;
    $this->error_info = $error_info ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->ota_update_arn = $ota_update_arn ?? ;
    $this->ota_update_files = $ota_update_files ?? ;
    $this->ota_update_id = $ota_update_id ?? ;
    $this->ota_update_status = $ota_update_status ?? ;
    $this->protocols = $protocols ?? ;
    $this->target_selection = $target_selection ?? ;
    $this->targets = $targets ?? ;
  }
}

type OTAUpdateStatus = string;

class OTAUpdateSummary {
  public DateType $creation_date;
  public OTAUpdateArn $ota_update_arn;
  public OTAUpdateId $ota_update_id;

  public function __construct(shape(
  ?'creation_date' => DateType,
  ?'ota_update_arn' => OTAUpdateArn,
  ?'ota_update_id' => OTAUpdateId,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->ota_update_arn = $ota_update_arn ?? ;
    $this->ota_update_id = $ota_update_id ?? ;
  }
}

type OTAUpdatesSummary = vec<OTAUpdateSummary>;

type OptionalVersion = int;

class OutgoingCertificate {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public DateType $creation_date;
  public DateType $transfer_date;
  public Message $transfer_message;
  public AwsAccountId $transferred_to;

  public function __construct(shape(
  ?'certificate_arn' => CertificateArn,
  ?'certificate_id' => CertificateId,
  ?'creation_date' => DateType,
  ?'transfer_date' => DateType,
  ?'transfer_message' => Message,
  ?'transferred_to' => AwsAccountId,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_id = $certificate_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->transfer_date = $transfer_date ?? ;
    $this->transfer_message = $transfer_message ?? ;
    $this->transferred_to = $transferred_to ?? ;
  }
}

type OutgoingCertificates = vec<OutgoingCertificate>;

type OverrideDynamicGroups = bool;

type PageSize = int;

type Parameter = string;

type Parameters = dict<Parameter, Value>;

type PartitionKey = string;

type PayloadField = string;

type Percent = float;

type PercentList = vec<Percent>;

class PercentPair {
  public Percent $percent;
  public PercentValue $value;

  public function __construct(shape(
  ?'percent' => Percent,
  ?'value' => PercentValue,
  ) $s = shape()) {
    $this->percent = $percent ?? ;
    $this->value = $value ?? ;
  }
}

type PercentValue = float;

type Percentage = int;

type Percentiles = vec<PercentPair>;

type Platform = string;

type Policies = vec<Policy>;

class Policy {
  public PolicyArn $policy_arn;
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'policy_arn' => PolicyArn,
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? ;
    $this->policy_name = $policy_name ?? ;
  }
}

type PolicyArn = string;

type PolicyDocument = string;

type PolicyDocuments = vec<PolicyDocument>;

type PolicyName = string;

type PolicyNames = vec<PolicyName>;

type PolicyTarget = string;

type PolicyTargets = vec<PolicyTarget>;

type PolicyTemplateName = string;

class PolicyVersion {
  public DateType $create_date;
  public IsDefaultVersion $is_default_version;
  public PolicyVersionId $version_id;

  public function __construct(shape(
  ?'create_date' => DateType,
  ?'is_default_version' => IsDefaultVersion,
  ?'version_id' => PolicyVersionId,
  ) $s = shape()) {
    $this->create_date = $create_date ?? ;
    $this->is_default_version = $is_default_version ?? ;
    $this->version_id = $version_id ?? ;
  }
}

type PolicyVersionId = string;

class PolicyVersionIdentifier {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'policy_version_id' => PolicyVersionId,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
    $this->policy_version_id = $policy_version_id ?? ;
  }
}

type PolicyVersions = vec<PolicyVersion>;

type Port = int;

type Ports = vec<Port>;

type Prefix = string;

class PresignedUrlConfig {
  public ExpiresInSec $expires_in_sec;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'expires_in_sec' => ExpiresInSec,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->expires_in_sec = $expires_in_sec ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type Principal = string;

type PrincipalArn = string;

type PrincipalId = string;

type Principals = vec<PrincipalArn>;

type PrivateKey = string;

type ProcessingTargetName = string;

type ProcessingTargetNameList = vec<ProcessingTargetName>;

type Protocol = string;

type Protocols = vec<Protocol>;

type ProvisioningTemplateListing = vec<ProvisioningTemplateSummary>;

class ProvisioningTemplateSummary {
  public DateType $creation_date;
  public TemplateDescription $description;
  public Enabled $enabled;
  public DateType $last_modified_date;
  public TemplateArn $template_arn;
  public TemplateName $template_name;

  public function __construct(shape(
  ?'creation_date' => DateType,
  ?'description' => TemplateDescription,
  ?'enabled' => Enabled,
  ?'last_modified_date' => DateType,
  ?'template_arn' => TemplateArn,
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->description = $description ?? ;
    $this->enabled = $enabled ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->template_arn = $template_arn ?? ;
    $this->template_name = $template_name ?? ;
  }
}

type ProvisioningTemplateVersionListing = vec<ProvisioningTemplateVersionSummary>;

class ProvisioningTemplateVersionSummary {
  public DateType $creation_date;
  public IsDefaultVersion $is_default_version;
  public TemplateVersionId $version_id;

  public function __construct(shape(
  ?'creation_date' => DateType,
  ?'is_default_version' => IsDefaultVersion,
  ?'version_id' => TemplateVersionId,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->is_default_version = $is_default_version ?? ;
    $this->version_id = $version_id ?? ;
  }
}

type PublicKey = string;

type PublicKeyMap = dict<KeyName, KeyValue>;

class PublishFindingToSnsParams {
  public SnsTopicArn $topic_arn;

  public function __construct(shape(
  ?'topic_arn' => SnsTopicArn,
  ) $s = shape()) {
    $this->topic_arn = $topic_arn ?? ;
  }
}

class PutAssetPropertyValueEntry {
  public AssetId $asset_id;
  public AssetPropertyEntryId $entry_id;
  public AssetPropertyAlias $property_alias;
  public AssetPropertyId $property_id;
  public AssetPropertyValueList $property_values;

  public function __construct(shape(
  ?'asset_id' => AssetId,
  ?'entry_id' => AssetPropertyEntryId,
  ?'property_alias' => AssetPropertyAlias,
  ?'property_id' => AssetPropertyId,
  ?'property_values' => AssetPropertyValueList,
  ) $s = shape()) {
    $this->asset_id = $asset_id ?? ;
    $this->entry_id = $entry_id ?? ;
    $this->property_alias = $property_alias ?? ;
    $this->property_id = $property_id ?? ;
    $this->property_values = $property_values ?? ;
  }
}

type PutAssetPropertyValueEntryList = vec<PutAssetPropertyValueEntry>;

class PutItemInput {
  public TableName $table_name;

  public function __construct(shape(
  ?'table_name' => TableName,
  ) $s = shape()) {
    $this->table_name = $table_name ?? ;
  }
}

type Qos = int;

type QueryMaxResults = int;

type QueryString = string;

type QueryVersion = string;

type QueueUrl = string;

type QueuedThings = int;

type RangeKeyField = string;

type RangeKeyValue = string;

class RateIncreaseCriteria {
  public NumberOfThings $number_of_notified_things;
  public NumberOfThings $number_of_succeeded_things;

  public function __construct(shape(
  ?'number_of_notified_things' => NumberOfThings,
  ?'number_of_succeeded_things' => NumberOfThings,
  ) $s = shape()) {
    $this->number_of_notified_things = $number_of_notified_things ?? ;
    $this->number_of_succeeded_things = $number_of_succeeded_things ?? ;
  }
}

type ReasonCode = string;

type ReasonForNonCompliance = string;

type ReasonForNonComplianceCode = string;

type ReasonForNonComplianceCodes = vec<ReasonForNonComplianceCode>;

type Recursive = bool;

type RecursiveWithoutDefault = bool;

class RegisterCACertificateRequest {
  public AllowAutoRegistration $allow_auto_registration;
  public CertificatePem $ca_certificate;
  public RegistrationConfig $registration_config;
  public SetAsActive $set_as_active;
  public CertificatePem $verification_certificate;

  public function __construct(shape(
  ?'allow_auto_registration' => AllowAutoRegistration,
  ?'ca_certificate' => CertificatePem,
  ?'registration_config' => RegistrationConfig,
  ?'set_as_active' => SetAsActive,
  ?'verification_certificate' => CertificatePem,
  ) $s = shape()) {
    $this->allow_auto_registration = $allow_auto_registration ?? ;
    $this->ca_certificate = $ca_certificate ?? ;
    $this->registration_config = $registration_config ?? ;
    $this->set_as_active = $set_as_active ?? ;
    $this->verification_certificate = $verification_certificate ?? ;
  }
}

class RegisterCACertificateResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;

  public function __construct(shape(
  ?'certificate_arn' => CertificateArn,
  ?'certificate_id' => CertificateId,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_id = $certificate_id ?? ;
  }
}

class RegisterCertificateRequest {
  public CertificatePem $ca_certificate_pem;
  public CertificatePem $certificate_pem;
  public SetAsActiveFlag $set_as_active;
  public CertificateStatus $status;

  public function __construct(shape(
  ?'ca_certificate_pem' => CertificatePem,
  ?'certificate_pem' => CertificatePem,
  ?'set_as_active' => SetAsActiveFlag,
  ?'status' => CertificateStatus,
  ) $s = shape()) {
    $this->ca_certificate_pem = $ca_certificate_pem ?? ;
    $this->certificate_pem = $certificate_pem ?? ;
    $this->set_as_active = $set_as_active ?? ;
    $this->status = $status ?? ;
  }
}

class RegisterCertificateResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;

  public function __construct(shape(
  ?'certificate_arn' => CertificateArn,
  ?'certificate_id' => CertificateId,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_id = $certificate_id ?? ;
  }
}

class RegisterThingRequest {
  public Parameters $parameters;
  public TemplateBody $template_body;

  public function __construct(shape(
  ?'parameters' => Parameters,
  ?'template_body' => TemplateBody,
  ) $s = shape()) {
    $this->parameters = $parameters ?? ;
    $this->template_body = $template_body ?? ;
  }
}

class RegisterThingResponse {
  public CertificatePem $certificate_pem;
  public ResourceArns $resource_arns;

  public function __construct(shape(
  ?'certificate_pem' => CertificatePem,
  ?'resource_arns' => ResourceArns,
  ) $s = shape()) {
    $this->certificate_pem = $certificate_pem ?? ;
    $this->resource_arns = $resource_arns ?? ;
  }
}

type RegistrationCode = string;

class RegistrationCodeValidationException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class RegistrationConfig {
  public RoleArn $role_arn;
  public TemplateBody $template_body;

  public function __construct(shape(
  ?'role_arn' => RoleArn,
  ?'template_body' => TemplateBody,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? ;
    $this->template_body = $template_body ?? ;
  }
}

type RegistryMaxResults = int;

type RegistryS3BucketName = string;

type RegistryS3KeyName = string;

class RejectCertificateTransferRequest {
  public CertificateId $certificate_id;
  public Message $reject_reason;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ?'reject_reason' => Message,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
    $this->reject_reason = $reject_reason ?? ;
  }
}

type RejectedThings = int;

class RelatedResource {
  public StringMap $additional_info;
  public ResourceIdentifier $resource_identifier;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'additional_info' => StringMap,
  ?'resource_identifier' => ResourceIdentifier,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->additional_info = $additional_info ?? ;
    $this->resource_identifier = $resource_identifier ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

type RelatedResources = vec<RelatedResource>;

type RemoveAuthorizerConfig = bool;

type RemoveAutoRegistration = bool;

class RemoveThingFromBillingGroupRequest {
  public BillingGroupArn $billing_group_arn;
  public BillingGroupName $billing_group_name;
  public ThingArn $thing_arn;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'billing_group_arn' => BillingGroupArn,
  ?'billing_group_name' => BillingGroupName,
  ?'thing_arn' => ThingArn,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->billing_group_arn = $billing_group_arn ?? ;
    $this->billing_group_name = $billing_group_name ?? ;
    $this->thing_arn = $thing_arn ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class RemoveThingFromBillingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemoveThingFromThingGroupRequest {
  public ThingArn $thing_arn;
  public ThingGroupArn $thing_group_arn;
  public ThingGroupName $thing_group_name;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'thing_arn' => ThingArn,
  ?'thing_group_arn' => ThingGroupArn,
  ?'thing_group_name' => ThingGroupName,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->thing_arn = $thing_arn ?? ;
    $this->thing_group_arn = $thing_group_arn ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class RemoveThingFromThingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RemoveThingType = bool;

type RemovedThings = int;

class ReplaceDefaultPolicyVersionParams {
  public PolicyTemplateName $template_name;

  public function __construct(shape(
  ?'template_name' => PolicyTemplateName,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
  }
}

class ReplaceTopicRuleRequest {
  public RuleName $rule_name;
  public TopicRulePayload $topic_rule_payload;

  public function __construct(shape(
  ?'rule_name' => RuleName,
  ?'topic_rule_payload' => TopicRulePayload,
  ) $s = shape()) {
    $this->rule_name = $rule_name ?? ;
    $this->topic_rule_payload = $topic_rule_payload ?? ;
  }
}

type ReportType = string;

class RepublishAction {
  public Qos $qos;
  public AwsArn $role_arn;
  public TopicPattern $topic;

  public function __construct(shape(
  ?'qos' => Qos,
  ?'role_arn' => AwsArn,
  ?'topic' => TopicPattern,
  ) $s = shape()) {
    $this->qos = $qos ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->topic = $topic ?? ;
  }
}

type ReservedDomainConfigurationName = string;

type Resource = string;

class ResourceAlreadyExistsException {
  public errorMessage $message;
  public resourceArn $resource_arn;
  public resourceId $resource_id;

  public function __construct(shape(
  ?'message' => errorMessage,
  ?'resource_arn' => resourceArn,
  ?'resource_id' => resourceId,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

type ResourceArn = string;

type ResourceArns = dict<ResourceLogicalId, ResourceArn>;

class ResourceIdentifier {
  public AwsAccountId $account;
  public CertificateId $ca_certificate_id;
  public ClientId $client_id;
  public CognitoIdentityPoolId $cognito_identity_pool_id;
  public CertificateId $device_certificate_id;
  public RoleArn $iam_role_arn;
  public PolicyVersionIdentifier $policy_version_identifier;
  public RoleAliasArn $role_alias_arn;

  public function __construct(shape(
  ?'account' => AwsAccountId,
  ?'ca_certificate_id' => CertificateId,
  ?'client_id' => ClientId,
  ?'cognito_identity_pool_id' => CognitoIdentityPoolId,
  ?'device_certificate_id' => CertificateId,
  ?'iam_role_arn' => RoleArn,
  ?'policy_version_identifier' => PolicyVersionIdentifier,
  ?'role_alias_arn' => RoleAliasArn,
  ) $s = shape()) {
    $this->account = $account ?? ;
    $this->ca_certificate_id = $ca_certificate_id ?? ;
    $this->client_id = $client_id ?? ;
    $this->cognito_identity_pool_id = $cognito_identity_pool_id ?? ;
    $this->device_certificate_id = $device_certificate_id ?? ;
    $this->iam_role_arn = $iam_role_arn ?? ;
    $this->policy_version_identifier = $policy_version_identifier ?? ;
    $this->role_alias_arn = $role_alias_arn ?? ;
  }
}

type ResourceLogicalId = string;

class ResourceNotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceRegistrationFailureException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ResourceType = string;

type Resources = vec<Resource>;

type RoleAlias = string;

type RoleAliasArn = string;

class RoleAliasDescription {
  public DateType $creation_date;
  public CredentialDurationSeconds $credential_duration_seconds;
  public DateType $last_modified_date;
  public AwsAccountId $owner;
  public RoleAlias $role_alias;
  public RoleAliasArn $role_alias_arn;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'creation_date' => DateType,
  ?'credential_duration_seconds' => CredentialDurationSeconds,
  ?'last_modified_date' => DateType,
  ?'owner' => AwsAccountId,
  ?'role_alias' => RoleAlias,
  ?'role_alias_arn' => RoleAliasArn,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->credential_duration_seconds = $credential_duration_seconds ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->owner = $owner ?? ;
    $this->role_alias = $role_alias ?? ;
    $this->role_alias_arn = $role_alias_arn ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type RoleAliases = vec<RoleAlias>;

type RoleArn = string;

type RolloutRatePerMinute = int;

type RuleArn = string;

type RuleName = string;

class S3Action {
  public BucketName $bucket_name;
  public CannedAccessControlList $canned_acl;
  public Key $key;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'bucket_name' => BucketName,
  ?'canned_acl' => CannedAccessControlList,
  ?'key' => Key,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->bucket_name = $bucket_name ?? ;
    $this->canned_acl = $canned_acl ?? ;
    $this->key = $key ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type S3Bucket = string;

class S3Destination {
  public S3Bucket $bucket;
  public Prefix $prefix;

  public function __construct(shape(
  ?'bucket' => S3Bucket,
  ?'prefix' => Prefix,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->prefix = $prefix ?? ;
  }
}

type S3FileUrl = string;

type S3FileUrlList = vec<S3FileUrl>;

type S3Key = string;

class S3Location {
  public S3Bucket $bucket;
  public S3Key $key;
  public S3Version $version;

  public function __construct(shape(
  ?'bucket' => S3Bucket,
  ?'key' => S3Key,
  ?'version' => S3Version,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->key = $key ?? ;
    $this->version = $version ?? ;
  }
}

type S3Version = string;

type SQL = string;

class SalesforceAction {
  public SalesforceToken $token;
  public SalesforceEndpoint $url;

  public function __construct(shape(
  ?'token' => SalesforceToken,
  ?'url' => SalesforceEndpoint,
  ) $s = shape()) {
    $this->token = $token ?? ;
    $this->url = $url ?? ;
  }
}

type SalesforceEndpoint = string;

type SalesforceToken = string;

type ScheduledAuditArn = string;

class ScheduledAuditMetadata {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public AuditFrequency $frequency;
  public ScheduledAuditArn $scheduled_audit_arn;
  public ScheduledAuditName $scheduled_audit_name;

  public function __construct(shape(
  ?'day_of_month' => DayOfMonth,
  ?'day_of_week' => DayOfWeek,
  ?'frequency' => AuditFrequency,
  ?'scheduled_audit_arn' => ScheduledAuditArn,
  ?'scheduled_audit_name' => ScheduledAuditName,
  ) $s = shape()) {
    $this->day_of_month = $day_of_month ?? ;
    $this->day_of_week = $day_of_week ?? ;
    $this->frequency = $frequency ?? ;
    $this->scheduled_audit_arn = $scheduled_audit_arn ?? ;
    $this->scheduled_audit_name = $scheduled_audit_name ?? ;
  }
}

type ScheduledAuditMetadataList = vec<ScheduledAuditMetadata>;

type ScheduledAuditName = string;

class SearchIndexRequest {
  public IndexName $index_name;
  public QueryMaxResults $max_results;
  public NextToken $next_token;
  public QueryString $query_string;
  public QueryVersion $query_version;

  public function __construct(shape(
  ?'index_name' => IndexName,
  ?'max_results' => QueryMaxResults,
  ?'next_token' => NextToken,
  ?'query_string' => QueryString,
  ?'query_version' => QueryVersion,
  ) $s = shape()) {
    $this->index_name = $index_name ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->query_string = $query_string ?? ;
    $this->query_version = $query_version ?? ;
  }
}

class SearchIndexResponse {
  public NextToken $next_token;
  public ThingGroupDocumentList $thing_groups;
  public ThingDocumentList $things;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'thing_groups' => ThingGroupDocumentList,
  ?'things' => ThingDocumentList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->thing_groups = $thing_groups ?? ;
    $this->things = $things ?? ;
  }
}

type SearchableAttributes = vec<AttributeName>;

type Seconds = int;

type SecurityProfileArn = string;

type SecurityProfileDescription = string;

class SecurityProfileIdentifier {
  public SecurityProfileArn $arn;
  public SecurityProfileName $name;

  public function __construct(shape(
  ?'arn' => SecurityProfileArn,
  ?'name' => SecurityProfileName,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->name = $name ?? ;
  }
}

type SecurityProfileIdentifiers = vec<SecurityProfileIdentifier>;

type SecurityProfileName = string;

class SecurityProfileTarget {
  public SecurityProfileTargetArn $arn;

  public function __construct(shape(
  ?'arn' => SecurityProfileTargetArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

type SecurityProfileTargetArn = string;

class SecurityProfileTargetMapping {
  public SecurityProfileIdentifier $security_profile_identifier;
  public SecurityProfileTarget $target;

  public function __construct(shape(
  ?'security_profile_identifier' => SecurityProfileIdentifier,
  ?'target' => SecurityProfileTarget,
  ) $s = shape()) {
    $this->security_profile_identifier = $security_profile_identifier ?? ;
    $this->target = $target ?? ;
  }
}

type SecurityProfileTargetMappings = vec<SecurityProfileTargetMapping>;

type SecurityProfileTargets = vec<SecurityProfileTarget>;

type ServerCertificateArns = vec<AcmCertificateArn>;

type ServerCertificateStatus = string;

type ServerCertificateStatusDetail = string;

class ServerCertificateSummary {
  public AcmCertificateArn $server_certificate_arn;
  public ServerCertificateStatus $server_certificate_status;
  public ServerCertificateStatusDetail $server_certificate_status_detail;

  public function __construct(shape(
  ?'server_certificate_arn' => AcmCertificateArn,
  ?'server_certificate_status' => ServerCertificateStatus,
  ?'server_certificate_status_detail' => ServerCertificateStatusDetail,
  ) $s = shape()) {
    $this->server_certificate_arn = $server_certificate_arn ?? ;
    $this->server_certificate_status = $server_certificate_status ?? ;
    $this->server_certificate_status_detail = $server_certificate_status_detail ?? ;
  }
}

type ServerCertificates = vec<ServerCertificateSummary>;

type ServerName = string;

type ServiceName = string;

type ServiceType = string;

class ServiceUnavailableException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type SetAsActive = bool;

type SetAsActiveFlag = bool;

type SetAsDefault = bool;

class SetDefaultAuthorizerRequest {
  public AuthorizerName $authorizer_name;

  public function __construct(shape(
  ?'authorizer_name' => AuthorizerName,
  ) $s = shape()) {
    $this->authorizer_name = $authorizer_name ?? ;
  }
}

class SetDefaultAuthorizerResponse {
  public AuthorizerArn $authorizer_arn;
  public AuthorizerName $authorizer_name;

  public function __construct(shape(
  ?'authorizer_arn' => AuthorizerArn,
  ?'authorizer_name' => AuthorizerName,
  ) $s = shape()) {
    $this->authorizer_arn = $authorizer_arn ?? ;
    $this->authorizer_name = $authorizer_name ?? ;
  }
}

class SetDefaultPolicyVersionRequest {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'policy_version_id' => PolicyVersionId,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? ;
    $this->policy_version_id = $policy_version_id ?? ;
  }
}

class SetLoggingOptionsRequest {
  public LoggingOptionsPayload $logging_options_payload;

  public function __construct(shape(
  ?'logging_options_payload' => LoggingOptionsPayload,
  ) $s = shape()) {
    $this->logging_options_payload = $logging_options_payload ?? ;
  }
}

class SetV2LoggingLevelRequest {
  public LogLevel $log_level;
  public LogTarget $log_target;

  public function __construct(shape(
  ?'log_level' => LogLevel,
  ?'log_target' => LogTarget,
  ) $s = shape()) {
    $this->log_level = $log_level ?? ;
    $this->log_target = $log_target ?? ;
  }
}

class SetV2LoggingOptionsRequest {
  public LogLevel $default_log_level;
  public DisableAllLogs $disable_all_logs;
  public AwsArn $role_arn;

  public function __construct(shape(
  ?'default_log_level' => LogLevel,
  ?'disable_all_logs' => DisableAllLogs,
  ?'role_arn' => AwsArn,
  ) $s = shape()) {
    $this->default_log_level = $default_log_level ?? ;
    $this->disable_all_logs = $disable_all_logs ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class SigV4Authorization {
  public AwsArn $role_arn;
  public ServiceName $service_name;
  public SigningRegion $signing_region;

  public function __construct(shape(
  ?'role_arn' => AwsArn,
  ?'service_name' => ServiceName,
  ?'signing_region' => SigningRegion,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? ;
    $this->service_name = $service_name ?? ;
    $this->signing_region = $signing_region ?? ;
  }
}

type Signature = string;

type SignatureAlgorithm = string;

type SigningJobId = string;

type SigningProfileName = string;

class SigningProfileParameter {
  public CertificateArn $certificate_arn;
  public CertificatePathOnDevice $certificate_path_on_device;
  public Platform $platform;

  public function __construct(shape(
  ?'certificate_arn' => CertificateArn,
  ?'certificate_path_on_device' => CertificatePathOnDevice,
  ?'platform' => Platform,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_path_on_device = $certificate_path_on_device ?? ;
    $this->platform = $platform ?? ;
  }
}

type SigningRegion = string;

type SkippedFindingsCount = int;

type SkyfallMaxResults = int;

class SnsAction {
  public MessageFormat $message_format;
  public AwsArn $role_arn;
  public AwsArn $target_arn;

  public function __construct(shape(
  ?'message_format' => MessageFormat,
  ?'role_arn' => AwsArn,
  ?'target_arn' => AwsArn,
  ) $s = shape()) {
    $this->message_format = $message_format ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->target_arn = $target_arn ?? ;
  }
}

type SnsTopicArn = string;

class SqlParseException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class SqsAction {
  public QueueUrl $queue_url;
  public AwsArn $role_arn;
  public UseBase64 $use_base_64;

  public function __construct(shape(
  ?'queue_url' => QueueUrl,
  ?'role_arn' => AwsArn,
  ?'use_base_64' => UseBase64,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->use_base_64 = $use_base_64 ?? ;
  }
}

class StartAuditMitigationActionsTaskRequest {
  public AuditCheckToActionsMapping $audit_check_to_actions_mapping;
  public ClientRequestToken $client_request_token;
  public AuditMitigationActionsTaskTarget $target;
  public AuditMitigationActionsTaskId $task_id;

  public function __construct(shape(
  ?'audit_check_to_actions_mapping' => AuditCheckToActionsMapping,
  ?'client_request_token' => ClientRequestToken,
  ?'target' => AuditMitigationActionsTaskTarget,
  ?'task_id' => AuditMitigationActionsTaskId,
  ) $s = shape()) {
    $this->audit_check_to_actions_mapping = $audit_check_to_actions_mapping ?? ;
    $this->client_request_token = $client_request_token ?? ;
    $this->target = $target ?? ;
    $this->task_id = $task_id ?? ;
  }
}

class StartAuditMitigationActionsTaskResponse {
  public AuditMitigationActionsTaskId $task_id;

  public function __construct(shape(
  ?'task_id' => AuditMitigationActionsTaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
  }
}

class StartOnDemandAuditTaskRequest {
  public TargetAuditCheckNames $target_check_names;

  public function __construct(shape(
  ?'target_check_names' => TargetAuditCheckNames,
  ) $s = shape()) {
    $this->target_check_names = $target_check_names ?? ;
  }
}

class StartOnDemandAuditTaskResponse {
  public AuditTaskId $task_id;

  public function __construct(shape(
  ?'task_id' => AuditTaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
  }
}

class StartSigningJobParameter {
  public Destination $destination;
  public SigningProfileName $signing_profile_name;
  public SigningProfileParameter $signing_profile_parameter;

  public function __construct(shape(
  ?'destination' => Destination,
  ?'signing_profile_name' => SigningProfileName,
  ?'signing_profile_parameter' => SigningProfileParameter,
  ) $s = shape()) {
    $this->destination = $destination ?? ;
    $this->signing_profile_name = $signing_profile_name ?? ;
    $this->signing_profile_parameter = $signing_profile_parameter ?? ;
  }
}

class StartThingRegistrationTaskRequest {
  public RegistryS3BucketName $input_file_bucket;
  public RegistryS3KeyName $input_file_key;
  public RoleArn $role_arn;
  public TemplateBody $template_body;

  public function __construct(shape(
  ?'input_file_bucket' => RegistryS3BucketName,
  ?'input_file_key' => RegistryS3KeyName,
  ?'role_arn' => RoleArn,
  ?'template_body' => TemplateBody,
  ) $s = shape()) {
    $this->input_file_bucket = $input_file_bucket ?? ;
    $this->input_file_key = $input_file_key ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->template_body = $template_body ?? ;
  }
}

class StartThingRegistrationTaskResponse {
  public TaskId $task_id;

  public function __construct(shape(
  ?'task_id' => TaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
  }
}

type StateMachineName = string;

type StateReason = string;

type StateValue = string;

class StatisticalThreshold {
  public EvaluationStatistic $statistic;

  public function __construct(shape(
  ?'statistic' => EvaluationStatistic,
  ) $s = shape()) {
    $this->statistic = $statistic ?? ;
  }
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

  public function __construct(shape(
  ?'average' => Average,
  ?'count' => Count,
  ?'maximum' => Maximum,
  ?'minimum' => Minimum,
  ?'std_deviation' => StdDeviation,
  ?'sum' => Sum,
  ?'sum_of_squares' => SumOfSquares,
  ?'variance' => Variance,
  ) $s = shape()) {
    $this->average = $average ?? ;
    $this->count = $count ?? ;
    $this->maximum = $maximum ?? ;
    $this->minimum = $minimum ?? ;
    $this->std_deviation = $std_deviation ?? ;
    $this->sum = $sum ?? ;
    $this->sum_of_squares = $sum_of_squares ?? ;
    $this->variance = $variance ?? ;
  }
}

type Status = string;

type StdDeviation = float;

class StepFunctionsAction {
  public ExecutionNamePrefix $execution_name_prefix;
  public AwsArn $role_arn;
  public StateMachineName $state_machine_name;

  public function __construct(shape(
  ?'execution_name_prefix' => ExecutionNamePrefix,
  ?'role_arn' => AwsArn,
  ?'state_machine_name' => StateMachineName,
  ) $s = shape()) {
    $this->execution_name_prefix = $execution_name_prefix ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->state_machine_name = $state_machine_name ?? ;
  }
}

class StopThingRegistrationTaskRequest {
  public TaskId $task_id;

  public function __construct(shape(
  ?'task_id' => TaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? ;
  }
}

class StopThingRegistrationTaskResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Stream {
  public FileId $file_id;
  public StreamId $stream_id;

  public function __construct(shape(
  ?'file_id' => FileId,
  ?'stream_id' => StreamId,
  ) $s = shape()) {
    $this->file_id = $file_id ?? ;
    $this->stream_id = $stream_id ?? ;
  }
}

type StreamArn = string;

type StreamDescription = string;

class StreamFile {
  public FileId $file_id;
  public S3Location $s_3_location;

  public function __construct(shape(
  ?'file_id' => FileId,
  ?'s_3_location' => S3Location,
  ) $s = shape()) {
    $this->file_id = $file_id ?? ;
    $this->s_3_location = $s_3_location ?? ;
  }
}

type StreamFiles = vec<StreamFile>;

type StreamId = string;

class StreamInfo {
  public DateType $created_at;
  public StreamDescription $description;
  public StreamFiles $files;
  public DateType $last_updated_at;
  public RoleArn $role_arn;
  public StreamArn $stream_arn;
  public StreamId $stream_id;
  public StreamVersion $stream_version;

  public function __construct(shape(
  ?'created_at' => DateType,
  ?'description' => StreamDescription,
  ?'files' => StreamFiles,
  ?'last_updated_at' => DateType,
  ?'role_arn' => RoleArn,
  ?'stream_arn' => StreamArn,
  ?'stream_id' => StreamId,
  ?'stream_version' => StreamVersion,
  ) $s = shape()) {
    $this->created_at = $created_at ?? ;
    $this->description = $description ?? ;
    $this->files = $files ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->stream_arn = $stream_arn ?? ;
    $this->stream_id = $stream_id ?? ;
    $this->stream_version = $stream_version ?? ;
  }
}

type StreamName = string;

class StreamSummary {
  public StreamDescription $description;
  public StreamArn $stream_arn;
  public StreamId $stream_id;
  public StreamVersion $stream_version;

  public function __construct(shape(
  ?'description' => StreamDescription,
  ?'stream_arn' => StreamArn,
  ?'stream_id' => StreamId,
  ?'stream_version' => StreamVersion,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->stream_arn = $stream_arn ?? ;
    $this->stream_id = $stream_id ?? ;
    $this->stream_version = $stream_version ?? ;
  }
}

type StreamVersion = int;

type StreamsSummary = vec<StreamSummary>;

type String = string;

type StringMap = dict<String, String>;

type SucceededFindingsCount = int;

type SucceededThings = int;

type Sum = float;

type SumOfSquares = float;

type TableName = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Target = string;

type TargetArn = string;

type TargetAuditCheckNames = vec<AuditCheckName>;

type TargetSelection = string;

type Targets = vec<Target>;

class TaskAlreadyExistsException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type TaskId = string;

type TaskIdList = vec<TaskId>;

class TaskStatistics {
  public CanceledChecksCount $canceled_checks;
  public CompliantChecksCount $compliant_checks;
  public FailedChecksCount $failed_checks;
  public InProgressChecksCount $in_progress_checks;
  public NonCompliantChecksCount $non_compliant_checks;
  public TotalChecksCount $total_checks;
  public WaitingForDataCollectionChecksCount $waiting_for_data_collection_checks;

  public function __construct(shape(
  ?'canceled_checks' => CanceledChecksCount,
  ?'compliant_checks' => CompliantChecksCount,
  ?'failed_checks' => FailedChecksCount,
  ?'in_progress_checks' => InProgressChecksCount,
  ?'non_compliant_checks' => NonCompliantChecksCount,
  ?'total_checks' => TotalChecksCount,
  ?'waiting_for_data_collection_checks' => WaitingForDataCollectionChecksCount,
  ) $s = shape()) {
    $this->canceled_checks = $canceled_checks ?? ;
    $this->compliant_checks = $compliant_checks ?? ;
    $this->failed_checks = $failed_checks ?? ;
    $this->in_progress_checks = $in_progress_checks ?? ;
    $this->non_compliant_checks = $non_compliant_checks ?? ;
    $this->total_checks = $total_checks ?? ;
    $this->waiting_for_data_collection_checks = $waiting_for_data_collection_checks ?? ;
  }
}

class TaskStatisticsForAuditCheck {
  public CanceledFindingsCount $canceled_findings_count;
  public FailedFindingsCount $failed_findings_count;
  public SkippedFindingsCount $skipped_findings_count;
  public SucceededFindingsCount $succeeded_findings_count;
  public TotalFindingsCount $total_findings_count;

  public function __construct(shape(
  ?'canceled_findings_count' => CanceledFindingsCount,
  ?'failed_findings_count' => FailedFindingsCount,
  ?'skipped_findings_count' => SkippedFindingsCount,
  ?'succeeded_findings_count' => SucceededFindingsCount,
  ?'total_findings_count' => TotalFindingsCount,
  ) $s = shape()) {
    $this->canceled_findings_count = $canceled_findings_count ?? ;
    $this->failed_findings_count = $failed_findings_count ?? ;
    $this->skipped_findings_count = $skipped_findings_count ?? ;
    $this->succeeded_findings_count = $succeeded_findings_count ?? ;
    $this->total_findings_count = $total_findings_count ?? ;
  }
}

type TemplateArn = string;

type TemplateBody = string;

type TemplateDescription = string;

type TemplateName = string;

type TemplateVersionId = int;

class TestAuthorizationRequest {
  public AuthInfos $auth_infos;
  public ClientId $client_id;
  public CognitoIdentityPoolId $cognito_identity_pool_id;
  public PolicyNames $policy_names_to_add;
  public PolicyNames $policy_names_to_skip;
  public Principal $principal;

  public function __construct(shape(
  ?'auth_infos' => AuthInfos,
  ?'client_id' => ClientId,
  ?'cognito_identity_pool_id' => CognitoIdentityPoolId,
  ?'policy_names_to_add' => PolicyNames,
  ?'policy_names_to_skip' => PolicyNames,
  ?'principal' => Principal,
  ) $s = shape()) {
    $this->auth_infos = $auth_infos ?? ;
    $this->client_id = $client_id ?? ;
    $this->cognito_identity_pool_id = $cognito_identity_pool_id ?? ;
    $this->policy_names_to_add = $policy_names_to_add ?? ;
    $this->policy_names_to_skip = $policy_names_to_skip ?? ;
    $this->principal = $principal ?? ;
  }
}

class TestAuthorizationResponse {
  public AuthResults $auth_results;

  public function __construct(shape(
  ?'auth_results' => AuthResults,
  ) $s = shape()) {
    $this->auth_results = $auth_results ?? ;
  }
}

class TestInvokeAuthorizerRequest {
  public AuthorizerName $authorizer_name;
  public HttpContext $http_context;
  public MqttContext $mqtt_context;
  public TlsContext $tls_context;
  public Token $token;
  public TokenSignature $token_signature;

  public function __construct(shape(
  ?'authorizer_name' => AuthorizerName,
  ?'http_context' => HttpContext,
  ?'mqtt_context' => MqttContext,
  ?'tls_context' => TlsContext,
  ?'token' => Token,
  ?'token_signature' => TokenSignature,
  ) $s = shape()) {
    $this->authorizer_name = $authorizer_name ?? ;
    $this->http_context = $http_context ?? ;
    $this->mqtt_context = $mqtt_context ?? ;
    $this->tls_context = $tls_context ?? ;
    $this->token = $token ?? ;
    $this->token_signature = $token_signature ?? ;
  }
}

class TestInvokeAuthorizerResponse {
  public Seconds $disconnect_after_in_seconds;
  public IsAuthenticated $is_authenticated;
  public PolicyDocuments $policy_documents;
  public PrincipalId $principal_id;
  public Seconds $refresh_after_in_seconds;

  public function __construct(shape(
  ?'disconnect_after_in_seconds' => Seconds,
  ?'is_authenticated' => IsAuthenticated,
  ?'policy_documents' => PolicyDocuments,
  ?'principal_id' => PrincipalId,
  ?'refresh_after_in_seconds' => Seconds,
  ) $s = shape()) {
    $this->disconnect_after_in_seconds = $disconnect_after_in_seconds ?? ;
    $this->is_authenticated = $is_authenticated ?? ;
    $this->policy_documents = $policy_documents ?? ;
    $this->principal_id = $principal_id ?? ;
    $this->refresh_after_in_seconds = $refresh_after_in_seconds ?? ;
  }
}

type ThingArn = string;

class ThingAttribute {
  public Attributes $attributes;
  public ThingArn $thing_arn;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;
  public Version $version;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'thing_arn' => ThingArn,
  ?'thing_name' => ThingName,
  ?'thing_type_name' => ThingTypeName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->thing_arn = $thing_arn ?? ;
    $this->thing_name = $thing_name ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
    $this->version = $version ?? ;
  }
}

type ThingAttributeList = vec<ThingAttribute>;

class ThingConnectivity {
  public boolean $connected;
  public ConnectivityTimestamp $timestamp;

  public function __construct(shape(
  ?'connected' => boolean,
  ?'timestamp' => ConnectivityTimestamp,
  ) $s = shape()) {
    $this->connected = $connected ?? ;
    $this->timestamp = $timestamp ?? ;
  }
}

type ThingConnectivityIndexingMode = string;

class ThingDocument {
  public Attributes $attributes;
  public ThingConnectivity $connectivity;
  public JsonDocument $shadow;
  public ThingGroupNameList $thing_group_names;
  public ThingId $thing_id;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'connectivity' => ThingConnectivity,
  ?'shadow' => JsonDocument,
  ?'thing_group_names' => ThingGroupNameList,
  ?'thing_id' => ThingId,
  ?'thing_name' => ThingName,
  ?'thing_type_name' => ThingTypeName,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->connectivity = $connectivity ?? ;
    $this->shadow = $shadow ?? ;
    $this->thing_group_names = $thing_group_names ?? ;
    $this->thing_id = $thing_id ?? ;
    $this->thing_name = $thing_name ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
  }
}

type ThingDocumentList = vec<ThingDocument>;

type ThingGroupArn = string;

type ThingGroupDescription = string;

class ThingGroupDocument {
  public Attributes $attributes;
  public ThingGroupNameList $parent_group_names;
  public ThingGroupDescription $thing_group_description;
  public ThingGroupId $thing_group_id;
  public ThingGroupName $thing_group_name;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'parent_group_names' => ThingGroupNameList,
  ?'thing_group_description' => ThingGroupDescription,
  ?'thing_group_id' => ThingGroupId,
  ?'thing_group_name' => ThingGroupName,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->parent_group_names = $parent_group_names ?? ;
    $this->thing_group_description = $thing_group_description ?? ;
    $this->thing_group_id = $thing_group_id ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
  }
}

type ThingGroupDocumentList = vec<ThingGroupDocument>;

type ThingGroupId = string;

class ThingGroupIndexingConfiguration {
  public Fields $custom_fields;
  public Fields $managed_fields;
  public ThingGroupIndexingMode $thing_group_indexing_mode;

  public function __construct(shape(
  ?'custom_fields' => Fields,
  ?'managed_fields' => Fields,
  ?'thing_group_indexing_mode' => ThingGroupIndexingMode,
  ) $s = shape()) {
    $this->custom_fields = $custom_fields ?? ;
    $this->managed_fields = $managed_fields ?? ;
    $this->thing_group_indexing_mode = $thing_group_indexing_mode ?? ;
  }
}

type ThingGroupIndexingMode = string;

type ThingGroupList = vec<ThingGroupName>;

class ThingGroupMetadata {
  public CreationDate $creation_date;
  public ThingGroupName $parent_group_name;
  public ThingGroupNameAndArnList $root_to_parent_thing_groups;

  public function __construct(shape(
  ?'creation_date' => CreationDate,
  ?'parent_group_name' => ThingGroupName,
  ?'root_to_parent_thing_groups' => ThingGroupNameAndArnList,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->parent_group_name = $parent_group_name ?? ;
    $this->root_to_parent_thing_groups = $root_to_parent_thing_groups ?? ;
  }
}

type ThingGroupName = string;

type ThingGroupNameAndArnList = vec<GroupNameAndArn>;

type ThingGroupNameList = vec<ThingGroupName>;

type ThingGroupNames = vec<ThingGroupName>;

class ThingGroupProperties {
  public AttributePayload $attribute_payload;
  public ThingGroupDescription $thing_group_description;

  public function __construct(shape(
  ?'attribute_payload' => AttributePayload,
  ?'thing_group_description' => ThingGroupDescription,
  ) $s = shape()) {
    $this->attribute_payload = $attribute_payload ?? ;
    $this->thing_group_description = $thing_group_description ?? ;
  }
}

type ThingId = string;

class ThingIndexingConfiguration {
  public Fields $custom_fields;
  public Fields $managed_fields;
  public ThingConnectivityIndexingMode $thing_connectivity_indexing_mode;
  public ThingIndexingMode $thing_indexing_mode;

  public function __construct(shape(
  ?'custom_fields' => Fields,
  ?'managed_fields' => Fields,
  ?'thing_connectivity_indexing_mode' => ThingConnectivityIndexingMode,
  ?'thing_indexing_mode' => ThingIndexingMode,
  ) $s = shape()) {
    $this->custom_fields = $custom_fields ?? ;
    $this->managed_fields = $managed_fields ?? ;
    $this->thing_connectivity_indexing_mode = $thing_connectivity_indexing_mode ?? ;
    $this->thing_indexing_mode = $thing_indexing_mode ?? ;
  }
}

type ThingIndexingMode = string;

type ThingName = string;

type ThingNameList = vec<ThingName>;

type ThingTypeArn = string;

class ThingTypeDefinition {
  public ThingTypeArn $thing_type_arn;
  public ThingTypeMetadata $thing_type_metadata;
  public ThingTypeName $thing_type_name;
  public ThingTypeProperties $thing_type_properties;

  public function __construct(shape(
  ?'thing_type_arn' => ThingTypeArn,
  ?'thing_type_metadata' => ThingTypeMetadata,
  ?'thing_type_name' => ThingTypeName,
  ?'thing_type_properties' => ThingTypeProperties,
  ) $s = shape()) {
    $this->thing_type_arn = $thing_type_arn ?? ;
    $this->thing_type_metadata = $thing_type_metadata ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
    $this->thing_type_properties = $thing_type_properties ?? ;
  }
}

type ThingTypeDescription = string;

type ThingTypeId = string;

type ThingTypeList = vec<ThingTypeDefinition>;

class ThingTypeMetadata {
  public CreationDate $creation_date;
  public boolean $deprecated;
  public DeprecationDate $deprecation_date;

  public function __construct(shape(
  ?'creation_date' => CreationDate,
  ?'deprecated' => boolean,
  ?'deprecation_date' => DeprecationDate,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->deprecated = $deprecated ?? ;
    $this->deprecation_date = $deprecation_date ?? ;
  }
}

type ThingTypeName = string;

class ThingTypeProperties {
  public SearchableAttributes $searchable_attributes;
  public ThingTypeDescription $thing_type_description;

  public function __construct(shape(
  ?'searchable_attributes' => SearchableAttributes,
  ?'thing_type_description' => ThingTypeDescription,
  ) $s = shape()) {
    $this->searchable_attributes = $searchable_attributes ?? ;
    $this->thing_type_description = $thing_type_description ?? ;
  }
}

class ThrottlingException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type TimedOutThings = int;

class TimeoutConfig {
  public InProgressTimeoutInMinutes $in_progress_timeout_in_minutes;

  public function __construct(shape(
  ?'in_progress_timeout_in_minutes' => InProgressTimeoutInMinutes,
  ) $s = shape()) {
    $this->in_progress_timeout_in_minutes = $in_progress_timeout_in_minutes ?? ;
  }
}

type Timestamp = int;

class TlsContext {
  public ServerName $server_name;

  public function __construct(shape(
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->server_name = $server_name ?? ;
  }
}

type Token = string;

type TokenKeyName = string;

type TokenSignature = string;

type Topic = string;

type TopicPattern = string;

class TopicRule {
  public ActionList $actions;
  public AwsIotSqlVersion $aws_iot_sql_version;
  public CreatedAtDate $created_at;
  public Description $description;
  public Action $error_action;
  public IsDisabled $rule_disabled;
  public RuleName $rule_name;
  public SQL $sql;

  public function __construct(shape(
  ?'actions' => ActionList,
  ?'aws_iot_sql_version' => AwsIotSqlVersion,
  ?'created_at' => CreatedAtDate,
  ?'description' => Description,
  ?'error_action' => Action,
  ?'rule_disabled' => IsDisabled,
  ?'rule_name' => RuleName,
  ?'sql' => SQL,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->aws_iot_sql_version = $aws_iot_sql_version ?? ;
    $this->created_at = $created_at ?? ;
    $this->description = $description ?? ;
    $this->error_action = $error_action ?? ;
    $this->rule_disabled = $rule_disabled ?? ;
    $this->rule_name = $rule_name ?? ;
    $this->sql = $sql ?? ;
  }
}

class TopicRuleDestination {
  public AwsArn $arn;
  public HttpUrlDestinationProperties $http_url_properties;
  public TopicRuleDestinationStatus $status;
  public string $status_reason;

  public function __construct(shape(
  ?'arn' => AwsArn,
  ?'http_url_properties' => HttpUrlDestinationProperties,
  ?'status' => TopicRuleDestinationStatus,
  ?'status_reason' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->http_url_properties = $http_url_properties ?? ;
    $this->status = $status ?? ;
    $this->status_reason = $status_reason ?? ;
  }
}

class TopicRuleDestinationConfiguration {
  public HttpUrlDestinationConfiguration $http_url_configuration;

  public function __construct(shape(
  ?'http_url_configuration' => HttpUrlDestinationConfiguration,
  ) $s = shape()) {
    $this->http_url_configuration = $http_url_configuration ?? ;
  }
}

type TopicRuleDestinationMaxResults = int;

type TopicRuleDestinationStatus = string;

type TopicRuleDestinationSummaries = vec<TopicRuleDestinationSummary>;

class TopicRuleDestinationSummary {
  public AwsArn $arn;
  public HttpUrlDestinationSummary $http_url_summary;
  public TopicRuleDestinationStatus $status;
  public string $status_reason;

  public function __construct(shape(
  ?'arn' => AwsArn,
  ?'http_url_summary' => HttpUrlDestinationSummary,
  ?'status' => TopicRuleDestinationStatus,
  ?'status_reason' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->http_url_summary = $http_url_summary ?? ;
    $this->status = $status ?? ;
    $this->status_reason = $status_reason ?? ;
  }
}

type TopicRuleList = vec<TopicRuleListItem>;

class TopicRuleListItem {
  public CreatedAtDate $created_at;
  public RuleArn $rule_arn;
  public IsDisabled $rule_disabled;
  public RuleName $rule_name;
  public TopicPattern $topic_pattern;

  public function __construct(shape(
  ?'created_at' => CreatedAtDate,
  ?'rule_arn' => RuleArn,
  ?'rule_disabled' => IsDisabled,
  ?'rule_name' => RuleName,
  ?'topic_pattern' => TopicPattern,
  ) $s = shape()) {
    $this->created_at = $created_at ?? ;
    $this->rule_arn = $rule_arn ?? ;
    $this->rule_disabled = $rule_disabled ?? ;
    $this->rule_name = $rule_name ?? ;
    $this->topic_pattern = $topic_pattern ?? ;
  }
}

type TopicRuleMaxResults = int;

class TopicRulePayload {
  public ActionList $actions;
  public AwsIotSqlVersion $aws_iot_sql_version;
  public Description $description;
  public Action $error_action;
  public IsDisabled $rule_disabled;
  public SQL $sql;

  public function __construct(shape(
  ?'actions' => ActionList,
  ?'aws_iot_sql_version' => AwsIotSqlVersion,
  ?'description' => Description,
  ?'error_action' => Action,
  ?'rule_disabled' => IsDisabled,
  ?'sql' => SQL,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->aws_iot_sql_version = $aws_iot_sql_version ?? ;
    $this->description = $description ?? ;
    $this->error_action = $error_action ?? ;
    $this->rule_disabled = $rule_disabled ?? ;
    $this->sql = $sql ?? ;
  }
}

type TotalChecksCount = int;

type TotalFindingsCount = int;

type TotalResourcesCount = int;

class TransferAlreadyCompletedException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TransferCertificateRequest {
  public CertificateId $certificate_id;
  public AwsAccountId $target_aws_account;
  public Message $transfer_message;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ?'target_aws_account' => AwsAccountId,
  ?'transfer_message' => Message,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
    $this->target_aws_account = $target_aws_account ?? ;
    $this->transfer_message = $transfer_message ?? ;
  }
}

class TransferCertificateResponse {
  public CertificateArn $transferred_certificate_arn;

  public function __construct(shape(
  ?'transferred_certificate_arn' => CertificateArn,
  ) $s = shape()) {
    $this->transferred_certificate_arn = $transferred_certificate_arn ?? ;
  }
}

class TransferConflictException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TransferData {
  public DateType $accept_date;
  public DateType $reject_date;
  public Message $reject_reason;
  public DateType $transfer_date;
  public Message $transfer_message;

  public function __construct(shape(
  ?'accept_date' => DateType,
  ?'reject_date' => DateType,
  ?'reject_reason' => Message,
  ?'transfer_date' => DateType,
  ?'transfer_message' => Message,
  ) $s = shape()) {
    $this->accept_date = $accept_date ?? ;
    $this->reject_date = $reject_date ?? ;
    $this->reject_reason = $reject_reason ?? ;
    $this->transfer_date = $transfer_date ?? ;
    $this->transfer_message = $transfer_message ?? ;
  }
}

class UnauthorizedException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type UndoDeprecate = bool;

type UnsignedLong = int;

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateAccountAuditConfigurationRequest {
  public AuditCheckConfigurations $audit_check_configurations;
  public AuditNotificationTargetConfigurations $audit_notification_target_configurations;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'audit_check_configurations' => AuditCheckConfigurations,
  ?'audit_notification_target_configurations' => AuditNotificationTargetConfigurations,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->audit_check_configurations = $audit_check_configurations ?? ;
    $this->audit_notification_target_configurations = $audit_notification_target_configurations ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class UpdateAccountAuditConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateAuthorizerRequest {
  public AuthorizerFunctionArn $authorizer_function_arn;
  public AuthorizerName $authorizer_name;
  public AuthorizerStatus $status;
  public TokenKeyName $token_key_name;
  public PublicKeyMap $token_signing_public_keys;

  public function __construct(shape(
  ?'authorizer_function_arn' => AuthorizerFunctionArn,
  ?'authorizer_name' => AuthorizerName,
  ?'status' => AuthorizerStatus,
  ?'token_key_name' => TokenKeyName,
  ?'token_signing_public_keys' => PublicKeyMap,
  ) $s = shape()) {
    $this->authorizer_function_arn = $authorizer_function_arn ?? ;
    $this->authorizer_name = $authorizer_name ?? ;
    $this->status = $status ?? ;
    $this->token_key_name = $token_key_name ?? ;
    $this->token_signing_public_keys = $token_signing_public_keys ?? ;
  }
}

class UpdateAuthorizerResponse {
  public AuthorizerArn $authorizer_arn;
  public AuthorizerName $authorizer_name;

  public function __construct(shape(
  ?'authorizer_arn' => AuthorizerArn,
  ?'authorizer_name' => AuthorizerName,
  ) $s = shape()) {
    $this->authorizer_arn = $authorizer_arn ?? ;
    $this->authorizer_name = $authorizer_name ?? ;
  }
}

class UpdateBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public BillingGroupProperties $billing_group_properties;
  public OptionalVersion $expected_version;

  public function __construct(shape(
  ?'billing_group_name' => BillingGroupName,
  ?'billing_group_properties' => BillingGroupProperties,
  ?'expected_version' => OptionalVersion,
  ) $s = shape()) {
    $this->billing_group_name = $billing_group_name ?? ;
    $this->billing_group_properties = $billing_group_properties ?? ;
    $this->expected_version = $expected_version ?? ;
  }
}

class UpdateBillingGroupResponse {
  public Version $version;

  public function __construct(shape(
  ?'version' => Version,
  ) $s = shape()) {
    $this->version = $version ?? ;
  }
}

class UpdateCACertificateParams {
  public CACertificateUpdateAction $action;

  public function __construct(shape(
  ?'action' => CACertificateUpdateAction,
  ) $s = shape()) {
    $this->action = $action ?? ;
  }
}

class UpdateCACertificateRequest {
  public CertificateId $certificate_id;
  public AutoRegistrationStatus $new_auto_registration_status;
  public CACertificateStatus $new_status;
  public RegistrationConfig $registration_config;
  public RemoveAutoRegistration $remove_auto_registration;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ?'new_auto_registration_status' => AutoRegistrationStatus,
  ?'new_status' => CACertificateStatus,
  ?'registration_config' => RegistrationConfig,
  ?'remove_auto_registration' => RemoveAutoRegistration,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
    $this->new_auto_registration_status = $new_auto_registration_status ?? ;
    $this->new_status = $new_status ?? ;
    $this->registration_config = $registration_config ?? ;
    $this->remove_auto_registration = $remove_auto_registration ?? ;
  }
}

class UpdateCertificateRequest {
  public CertificateId $certificate_id;
  public CertificateStatus $new_status;

  public function __construct(shape(
  ?'certificate_id' => CertificateId,
  ?'new_status' => CertificateStatus,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? ;
    $this->new_status = $new_status ?? ;
  }
}

class UpdateDeviceCertificateParams {
  public DeviceCertificateUpdateAction $action;

  public function __construct(shape(
  ?'action' => DeviceCertificateUpdateAction,
  ) $s = shape()) {
    $this->action = $action ?? ;
  }
}

class UpdateDimensionRequest {
  public DimensionName $name;
  public DimensionStringValues $string_values;

  public function __construct(shape(
  ?'name' => DimensionName,
  ?'string_values' => DimensionStringValues,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->string_values = $string_values ?? ;
  }
}

class UpdateDimensionResponse {
  public DimensionArn $arn;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public DimensionName $name;
  public DimensionStringValues $string_values;
  public DimensionType $type;

  public function __construct(shape(
  ?'arn' => DimensionArn,
  ?'creation_date' => Timestamp,
  ?'last_modified_date' => Timestamp,
  ?'name' => DimensionName,
  ?'string_values' => DimensionStringValues,
  ?'type' => DimensionType,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->name = $name ?? ;
    $this->string_values = $string_values ?? ;
    $this->type = $type ?? ;
  }
}

class UpdateDomainConfigurationRequest {
  public AuthorizerConfig $authorizer_config;
  public ReservedDomainConfigurationName $domain_configuration_name;
  public DomainConfigurationStatus $domain_configuration_status;
  public RemoveAuthorizerConfig $remove_authorizer_config;

  public function __construct(shape(
  ?'authorizer_config' => AuthorizerConfig,
  ?'domain_configuration_name' => ReservedDomainConfigurationName,
  ?'domain_configuration_status' => DomainConfigurationStatus,
  ?'remove_authorizer_config' => RemoveAuthorizerConfig,
  ) $s = shape()) {
    $this->authorizer_config = $authorizer_config ?? ;
    $this->domain_configuration_name = $domain_configuration_name ?? ;
    $this->domain_configuration_status = $domain_configuration_status ?? ;
    $this->remove_authorizer_config = $remove_authorizer_config ?? ;
  }
}

class UpdateDomainConfigurationResponse {
  public DomainConfigurationArn $domain_configuration_arn;
  public ReservedDomainConfigurationName $domain_configuration_name;

  public function __construct(shape(
  ?'domain_configuration_arn' => DomainConfigurationArn,
  ?'domain_configuration_name' => ReservedDomainConfigurationName,
  ) $s = shape()) {
    $this->domain_configuration_arn = $domain_configuration_arn ?? ;
    $this->domain_configuration_name = $domain_configuration_name ?? ;
  }
}

class UpdateDynamicThingGroupRequest {
  public OptionalVersion $expected_version;
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;

  public function __construct(shape(
  ?'expected_version' => OptionalVersion,
  ?'index_name' => IndexName,
  ?'query_string' => QueryString,
  ?'query_version' => QueryVersion,
  ?'thing_group_name' => ThingGroupName,
  ?'thing_group_properties' => ThingGroupProperties,
  ) $s = shape()) {
    $this->expected_version = $expected_version ?? ;
    $this->index_name = $index_name ?? ;
    $this->query_string = $query_string ?? ;
    $this->query_version = $query_version ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
    $this->thing_group_properties = $thing_group_properties ?? ;
  }
}

class UpdateDynamicThingGroupResponse {
  public Version $version;

  public function __construct(shape(
  ?'version' => Version,
  ) $s = shape()) {
    $this->version = $version ?? ;
  }
}

class UpdateEventConfigurationsRequest {
  public EventConfigurations $event_configurations;

  public function __construct(shape(
  ?'event_configurations' => EventConfigurations,
  ) $s = shape()) {
    $this->event_configurations = $event_configurations ?? ;
  }
}

class UpdateEventConfigurationsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateIndexingConfigurationRequest {
  public ThingGroupIndexingConfiguration $thing_group_indexing_configuration;
  public ThingIndexingConfiguration $thing_indexing_configuration;

  public function __construct(shape(
  ?'thing_group_indexing_configuration' => ThingGroupIndexingConfiguration,
  ?'thing_indexing_configuration' => ThingIndexingConfiguration,
  ) $s = shape()) {
    $this->thing_group_indexing_configuration = $thing_group_indexing_configuration ?? ;
    $this->thing_indexing_configuration = $thing_indexing_configuration ?? ;
  }
}

class UpdateIndexingConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateJobRequest {
  public AbortConfig $abort_config;
  public JobDescription $description;
  public JobExecutionsRolloutConfig $job_executions_rollout_config;
  public JobId $job_id;
  public PresignedUrlConfig $presigned_url_config;
  public TimeoutConfig $timeout_config;

  public function __construct(shape(
  ?'abort_config' => AbortConfig,
  ?'description' => JobDescription,
  ?'job_executions_rollout_config' => JobExecutionsRolloutConfig,
  ?'job_id' => JobId,
  ?'presigned_url_config' => PresignedUrlConfig,
  ?'timeout_config' => TimeoutConfig,
  ) $s = shape()) {
    $this->abort_config = $abort_config ?? ;
    $this->description = $description ?? ;
    $this->job_executions_rollout_config = $job_executions_rollout_config ?? ;
    $this->job_id = $job_id ?? ;
    $this->presigned_url_config = $presigned_url_config ?? ;
    $this->timeout_config = $timeout_config ?? ;
  }
}

class UpdateMitigationActionRequest {
  public MitigationActionName $action_name;
  public MitigationActionParams $action_params;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'action_name' => MitigationActionName,
  ?'action_params' => MitigationActionParams,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
    $this->action_params = $action_params ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class UpdateMitigationActionResponse {
  public MitigationActionArn $action_arn;
  public MitigationActionId $action_id;

  public function __construct(shape(
  ?'action_arn' => MitigationActionArn,
  ?'action_id' => MitigationActionId,
  ) $s = shape()) {
    $this->action_arn = $action_arn ?? ;
    $this->action_id = $action_id ?? ;
  }
}

class UpdateProvisioningTemplateRequest {
  public TemplateVersionId $default_version_id;
  public TemplateDescription $description;
  public Enabled $enabled;
  public RoleArn $provisioning_role_arn;
  public TemplateName $template_name;

  public function __construct(shape(
  ?'default_version_id' => TemplateVersionId,
  ?'description' => TemplateDescription,
  ?'enabled' => Enabled,
  ?'provisioning_role_arn' => RoleArn,
  ?'template_name' => TemplateName,
  ) $s = shape()) {
    $this->default_version_id = $default_version_id ?? ;
    $this->description = $description ?? ;
    $this->enabled = $enabled ?? ;
    $this->provisioning_role_arn = $provisioning_role_arn ?? ;
    $this->template_name = $template_name ?? ;
  }
}

class UpdateProvisioningTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateRoleAliasRequest {
  public CredentialDurationSeconds $credential_duration_seconds;
  public RoleAlias $role_alias;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'credential_duration_seconds' => CredentialDurationSeconds,
  ?'role_alias' => RoleAlias,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->credential_duration_seconds = $credential_duration_seconds ?? ;
    $this->role_alias = $role_alias ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class UpdateRoleAliasResponse {
  public RoleAlias $role_alias;
  public RoleAliasArn $role_alias_arn;

  public function __construct(shape(
  ?'role_alias' => RoleAlias,
  ?'role_alias_arn' => RoleAliasArn,
  ) $s = shape()) {
    $this->role_alias = $role_alias ?? ;
    $this->role_alias_arn = $role_alias_arn ?? ;
  }
}

class UpdateScheduledAuditRequest {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public AuditFrequency $frequency;
  public ScheduledAuditName $scheduled_audit_name;
  public TargetAuditCheckNames $target_check_names;

  public function __construct(shape(
  ?'day_of_month' => DayOfMonth,
  ?'day_of_week' => DayOfWeek,
  ?'frequency' => AuditFrequency,
  ?'scheduled_audit_name' => ScheduledAuditName,
  ?'target_check_names' => TargetAuditCheckNames,
  ) $s = shape()) {
    $this->day_of_month = $day_of_month ?? ;
    $this->day_of_week = $day_of_week ?? ;
    $this->frequency = $frequency ?? ;
    $this->scheduled_audit_name = $scheduled_audit_name ?? ;
    $this->target_check_names = $target_check_names ?? ;
  }
}

class UpdateScheduledAuditResponse {
  public ScheduledAuditArn $scheduled_audit_arn;

  public function __construct(shape(
  ?'scheduled_audit_arn' => ScheduledAuditArn,
  ) $s = shape()) {
    $this->scheduled_audit_arn = $scheduled_audit_arn ?? ;
  }
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

  public function __construct(shape(
  ?'additional_metrics_to_retain' => AdditionalMetricsToRetainList,
  ?'additional_metrics_to_retain_v_2' => AdditionalMetricsToRetainV2List,
  ?'alert_targets' => AlertTargets,
  ?'behaviors' => Behaviors,
  ?'delete_additional_metrics_to_retain' => DeleteAdditionalMetricsToRetain,
  ?'delete_alert_targets' => DeleteAlertTargets,
  ?'delete_behaviors' => DeleteBehaviors,
  ?'expected_version' => OptionalVersion,
  ?'security_profile_description' => SecurityProfileDescription,
  ?'security_profile_name' => SecurityProfileName,
  ) $s = shape()) {
    $this->additional_metrics_to_retain = $additional_metrics_to_retain ?? ;
    $this->additional_metrics_to_retain_v_2 = $additional_metrics_to_retain_v_2 ?? ;
    $this->alert_targets = $alert_targets ?? ;
    $this->behaviors = $behaviors ?? ;
    $this->delete_additional_metrics_to_retain = $delete_additional_metrics_to_retain ?? ;
    $this->delete_alert_targets = $delete_alert_targets ?? ;
    $this->delete_behaviors = $delete_behaviors ?? ;
    $this->expected_version = $expected_version ?? ;
    $this->security_profile_description = $security_profile_description ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
  }
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

  public function __construct(shape(
  ?'additional_metrics_to_retain' => AdditionalMetricsToRetainList,
  ?'additional_metrics_to_retain_v_2' => AdditionalMetricsToRetainV2List,
  ?'alert_targets' => AlertTargets,
  ?'behaviors' => Behaviors,
  ?'creation_date' => Timestamp,
  ?'last_modified_date' => Timestamp,
  ?'security_profile_arn' => SecurityProfileArn,
  ?'security_profile_description' => SecurityProfileDescription,
  ?'security_profile_name' => SecurityProfileName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->additional_metrics_to_retain = $additional_metrics_to_retain ?? ;
    $this->additional_metrics_to_retain_v_2 = $additional_metrics_to_retain_v_2 ?? ;
    $this->alert_targets = $alert_targets ?? ;
    $this->behaviors = $behaviors ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->security_profile_arn = $security_profile_arn ?? ;
    $this->security_profile_description = $security_profile_description ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
    $this->version = $version ?? ;
  }
}

class UpdateStreamRequest {
  public StreamDescription $description;
  public StreamFiles $files;
  public RoleArn $role_arn;
  public StreamId $stream_id;

  public function __construct(shape(
  ?'description' => StreamDescription,
  ?'files' => StreamFiles,
  ?'role_arn' => RoleArn,
  ?'stream_id' => StreamId,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->files = $files ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->stream_id = $stream_id ?? ;
  }
}

class UpdateStreamResponse {
  public StreamDescription $description;
  public StreamArn $stream_arn;
  public StreamId $stream_id;
  public StreamVersion $stream_version;

  public function __construct(shape(
  ?'description' => StreamDescription,
  ?'stream_arn' => StreamArn,
  ?'stream_id' => StreamId,
  ?'stream_version' => StreamVersion,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->stream_arn = $stream_arn ?? ;
    $this->stream_id = $stream_id ?? ;
    $this->stream_version = $stream_version ?? ;
  }
}

class UpdateThingGroupRequest {
  public OptionalVersion $expected_version;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;

  public function __construct(shape(
  ?'expected_version' => OptionalVersion,
  ?'thing_group_name' => ThingGroupName,
  ?'thing_group_properties' => ThingGroupProperties,
  ) $s = shape()) {
    $this->expected_version = $expected_version ?? ;
    $this->thing_group_name = $thing_group_name ?? ;
    $this->thing_group_properties = $thing_group_properties ?? ;
  }
}

class UpdateThingGroupResponse {
  public Version $version;

  public function __construct(shape(
  ?'version' => Version,
  ) $s = shape()) {
    $this->version = $version ?? ;
  }
}

class UpdateThingGroupsForThingRequest {
  public OverrideDynamicGroups $override_dynamic_groups;
  public ThingGroupList $thing_groups_to_add;
  public ThingGroupList $thing_groups_to_remove;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'override_dynamic_groups' => OverrideDynamicGroups,
  ?'thing_groups_to_add' => ThingGroupList,
  ?'thing_groups_to_remove' => ThingGroupList,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->override_dynamic_groups = $override_dynamic_groups ?? ;
    $this->thing_groups_to_add = $thing_groups_to_add ?? ;
    $this->thing_groups_to_remove = $thing_groups_to_remove ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class UpdateThingGroupsForThingResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateThingRequest {
  public AttributePayload $attribute_payload;
  public OptionalVersion $expected_version;
  public RemoveThingType $remove_thing_type;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;

  public function __construct(shape(
  ?'attribute_payload' => AttributePayload,
  ?'expected_version' => OptionalVersion,
  ?'remove_thing_type' => RemoveThingType,
  ?'thing_name' => ThingName,
  ?'thing_type_name' => ThingTypeName,
  ) $s = shape()) {
    $this->attribute_payload = $attribute_payload ?? ;
    $this->expected_version = $expected_version ?? ;
    $this->remove_thing_type = $remove_thing_type ?? ;
    $this->thing_name = $thing_name ?? ;
    $this->thing_type_name = $thing_type_name ?? ;
  }
}

class UpdateThingResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateTopicRuleDestinationRequest {
  public AwsArn $arn;
  public TopicRuleDestinationStatus $status;

  public function __construct(shape(
  ?'arn' => AwsArn,
  ?'status' => TopicRuleDestinationStatus,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateTopicRuleDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Url = string;

type UseBase64 = bool;

type Valid = bool;

class ValidateSecurityProfileBehaviorsRequest {
  public Behaviors $behaviors;

  public function __construct(shape(
  ?'behaviors' => Behaviors,
  ) $s = shape()) {
    $this->behaviors = $behaviors ?? ;
  }
}

class ValidateSecurityProfileBehaviorsResponse {
  public Valid $valid;
  public ValidationErrors $validation_errors;

  public function __construct(shape(
  ?'valid' => Valid,
  ?'validation_errors' => ValidationErrors,
  ) $s = shape()) {
    $this->valid = $valid ?? ;
    $this->validation_errors = $validation_errors ?? ;
  }
}

class ValidationError {
  public ErrorMessage $error_message;

  public function __construct(shape(
  ?'error_message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_message = $error_message ?? "";
  }
}

type ValidationErrors = vec<ValidationError>;

type Value = string;

type Variance = float;

type Version = int;

class VersionConflictException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type VersionNumber = int;

class VersionsLimitExceededException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ViolationEvent {
  public Behavior $behavior;
  public MetricValue $metric_value;
  public SecurityProfileName $security_profile_name;
  public DeviceDefenderThingName $thing_name;
  public Timestamp $violation_event_time;
  public ViolationEventType $violation_event_type;
  public ViolationId $violation_id;

  public function __construct(shape(
  ?'behavior' => Behavior,
  ?'metric_value' => MetricValue,
  ?'security_profile_name' => SecurityProfileName,
  ?'thing_name' => DeviceDefenderThingName,
  ?'violation_event_time' => Timestamp,
  ?'violation_event_type' => ViolationEventType,
  ?'violation_id' => ViolationId,
  ) $s = shape()) {
    $this->behavior = $behavior ?? ;
    $this->metric_value = $metric_value ?? ;
    $this->security_profile_name = $security_profile_name ?? ;
    $this->thing_name = $thing_name ?? ;
    $this->violation_event_time = $violation_event_time ?? ;
    $this->violation_event_type = $violation_event_type ?? ;
    $this->violation_id = $violation_id ?? ;
  }
}

type ViolationEventType = string;

type ViolationEvents = vec<ViolationEvent>;

type ViolationId = string;

type WaitingForDataCollectionChecksCount = int;

type errorMessage = string;

type resourceArn = string;

type resourceId = string;

