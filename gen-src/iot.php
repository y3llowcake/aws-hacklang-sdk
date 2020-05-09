<?hh // strict
namespace slack\aws\iot;

interface IoT {
  public function CreateTopicRule(CreateTopicRuleRequest) Awaitable<Errors\Error>;
  public function DescribeThingType(DescribeThingTypeRequest) Awaitable<Errors\Result<DescribeThingTypeResponse>>;
  public function GetRegistrationCode(GetRegistrationCodeRequest) Awaitable<Errors\Result<GetRegistrationCodeResponse>>;
  public function ListTopicRules(ListTopicRulesRequest) Awaitable<Errors\Result<ListTopicRulesResponse>>;
  public function UpdateAuthorizer(UpdateAuthorizerRequest) Awaitable<Errors\Result<UpdateAuthorizerResponse>>;
  public function DescribeBillingGroup(DescribeBillingGroupRequest) Awaitable<Errors\Result<DescribeBillingGroupResponse>>;
  public function DescribeCertificate(DescribeCertificateRequest) Awaitable<Errors\Result<DescribeCertificateResponse>>;
  public function DescribeRoleAlias(DescribeRoleAliasRequest) Awaitable<Errors\Result<DescribeRoleAliasResponse>>;
  public function DescribeThingGroup(DescribeThingGroupRequest) Awaitable<Errors\Result<DescribeThingGroupResponse>>;
  public function ListProvisioningTemplateVersions(ListProvisioningTemplateVersionsRequest) Awaitable<Errors\Result<ListProvisioningTemplateVersionsResponse>>;
  public function ListThings(ListThingsRequest) Awaitable<Errors\Result<ListThingsResponse>>;
  public function UpdateCertificate(UpdateCertificateRequest) Awaitable<Errors\Error>;
  public function UpdateDynamicThingGroup(UpdateDynamicThingGroupRequest) Awaitable<Errors\Result<UpdateDynamicThingGroupResponse>>;
  public function GetJobDocument(GetJobDocumentRequest) Awaitable<Errors\Result<GetJobDocumentResponse>>;
  public function GetOTAUpdate(GetOTAUpdateRequest) Awaitable<Errors\Result<GetOTAUpdateResponse>>;
  public function AttachPrincipalPolicy(AttachPrincipalPolicyRequest) Awaitable<Errors\Error>;
  public function DeleteProvisioningTemplateVersion(DeleteProvisioningTemplateVersionRequest) Awaitable<Errors\Result<DeleteProvisioningTemplateVersionResponse>>;
  public function DeleteThingGroup(DeleteThingGroupRequest) Awaitable<Errors\Result<DeleteThingGroupResponse>>;
  public function DeleteThingType(DeleteThingTypeRequest) Awaitable<Errors\Result<DeleteThingTypeResponse>>;
  public function DescribeIndex(DescribeIndexRequest) Awaitable<Errors\Result<DescribeIndexResponse>>;
  public function DescribeMitigationAction(DescribeMitigationActionRequest) Awaitable<Errors\Result<DescribeMitigationActionResponse>>;
  public function ListAuditMitigationActionsExecutions(ListAuditMitigationActionsExecutionsRequest) Awaitable<Errors\Result<ListAuditMitigationActionsExecutionsResponse>>;
  public function ListSecurityProfiles(ListSecurityProfilesRequest) Awaitable<Errors\Result<ListSecurityProfilesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListThingGroupsForThing(ListThingGroupsForThingRequest) Awaitable<Errors\Result<ListThingGroupsForThingResponse>>;
  public function UpdateCACertificate(UpdateCACertificateRequest) Awaitable<Errors\Error>;
  public function CancelCertificateTransfer(CancelCertificateTransferRequest) Awaitable<Errors\Error>;
  public function DeleteDomainConfiguration(DeleteDomainConfigurationRequest) Awaitable<Errors\Result<DeleteDomainConfigurationResponse>>;
  public function DescribeScheduledAudit(DescribeScheduledAuditRequest) Awaitable<Errors\Result<DescribeScheduledAuditResponse>>;
  public function ListAttachedPolicies(ListAttachedPoliciesRequest) Awaitable<Errors\Result<ListAttachedPoliciesResponse>>;
  public function ListThingRegistrationTasks(ListThingRegistrationTasksRequest) Awaitable<Errors\Result<ListThingRegistrationTasksResponse>>;
  public function UpdateBillingGroup(UpdateBillingGroupRequest) Awaitable<Errors\Result<UpdateBillingGroupResponse>>;
  public function DescribeJobExecution(DescribeJobExecutionRequest) Awaitable<Errors\Result<DescribeJobExecutionResponse>>;
  public function ListPrincipalPolicies(ListPrincipalPoliciesRequest) Awaitable<Errors\Result<ListPrincipalPoliciesResponse>>;
  public function ListV2LoggingLevels(ListV2LoggingLevelsRequest) Awaitable<Errors\Result<ListV2LoggingLevelsResponse>>;
  public function SetV2LoggingLevel(SetV2LoggingLevelRequest) Awaitable<Errors\Error>;
  public function ConfirmTopicRuleDestination(ConfirmTopicRuleDestinationRequest) Awaitable<Errors\Result<ConfirmTopicRuleDestinationResponse>>;
  public function DetachPolicy(DetachPolicyRequest) Awaitable<Errors\Error>;
  public function DetachThingPrincipal(DetachThingPrincipalRequest) Awaitable<Errors\Result<DetachThingPrincipalResponse>>;
  public function ListPolicyPrincipals(ListPolicyPrincipalsRequest) Awaitable<Errors\Result<ListPolicyPrincipalsResponse>>;
  public function ListTargetsForSecurityProfile(ListTargetsForSecurityProfileRequest) Awaitable<Errors\Result<ListTargetsForSecurityProfileResponse>>;
  public function ListThingsInThingGroup(ListThingsInThingGroupRequest) Awaitable<Errors\Result<ListThingsInThingGroupResponse>>;
  public function EnableTopicRule(EnableTopicRuleRequest) Awaitable<Errors\Error>;
  public function ListDomainConfigurations(ListDomainConfigurationsRequest) Awaitable<Errors\Result<ListDomainConfigurationsResponse>>;
  public function UpdateAccountAuditConfiguration(UpdateAccountAuditConfigurationRequest) Awaitable<Errors\Result<UpdateAccountAuditConfigurationResponse>>;
  public function DeleteTopicRuleDestination(DeleteTopicRuleDestinationRequest) Awaitable<Errors\Result<DeleteTopicRuleDestinationResponse>>;
  public function DescribeAccountAuditConfiguration(DescribeAccountAuditConfigurationRequest) Awaitable<Errors\Result<DescribeAccountAuditConfigurationResponse>>;
  public function DescribeJob(DescribeJobRequest) Awaitable<Errors\Result<DescribeJobResponse>>;
  public function StartOnDemandAuditTask(StartOnDemandAuditTaskRequest) Awaitable<Errors\Result<StartOnDemandAuditTaskResponse>>;
  public function UpdateThingGroup(UpdateThingGroupRequest) Awaitable<Errors\Result<UpdateThingGroupResponse>>;
  public function DescribeAuditMitigationActionsTask(DescribeAuditMitigationActionsTaskRequest) Awaitable<Errors\Result<DescribeAuditMitigationActionsTaskResponse>>;
  public function DescribeProvisioningTemplateVersion(DescribeProvisioningTemplateVersionRequest) Awaitable<Errors\Result<DescribeProvisioningTemplateVersionResponse>>;
  public function AddThingToThingGroup(AddThingToThingGroupRequest) Awaitable<Errors\Result<AddThingToThingGroupResponse>>;
  public function AttachThingPrincipal(AttachThingPrincipalRequest) Awaitable<Errors\Result<AttachThingPrincipalResponse>>;
  public function CreateAuthorizer(CreateAuthorizerRequest) Awaitable<Errors\Result<CreateAuthorizerResponse>>;
  public function CreateDynamicThingGroup(CreateDynamicThingGroupRequest) Awaitable<Errors\Result<CreateDynamicThingGroupResponse>>;
  public function CreateMitigationAction(CreateMitigationActionRequest) Awaitable<Errors\Result<CreateMitigationActionResponse>>;
  public function CreateProvisioningClaim(CreateProvisioningClaimRequest) Awaitable<Errors\Result<CreateProvisioningClaimResponse>>;
  public function ListScheduledAudits(ListScheduledAuditsRequest) Awaitable<Errors\Result<ListScheduledAuditsResponse>>;
  public function ListThingsInBillingGroup(ListThingsInBillingGroupRequest) Awaitable<Errors\Result<ListThingsInBillingGroupResponse>>;
  public function UpdateScheduledAudit(UpdateScheduledAuditRequest) Awaitable<Errors\Result<UpdateScheduledAuditResponse>>;
  public function UpdateThing(UpdateThingRequest) Awaitable<Errors\Result<UpdateThingResponse>>;
  public function ListAuditFindings(ListAuditFindingsRequest) Awaitable<Errors\Result<ListAuditFindingsResponse>>;
  public function ListJobExecutionsForThing(ListJobExecutionsForThingRequest) Awaitable<Errors\Result<ListJobExecutionsForThingResponse>>;
  public function CreatePolicy(CreatePolicyRequest) Awaitable<Errors\Result<CreatePolicyResponse>>;
  public function CreateProvisioningTemplateVersion(CreateProvisioningTemplateVersionRequest) Awaitable<Errors\Result<CreateProvisioningTemplateVersionResponse>>;
  public function DeleteJobExecution(DeleteJobExecutionRequest) Awaitable<Errors\Error>;
  public function DisableTopicRule(DisableTopicRuleRequest) Awaitable<Errors\Error>;
  public function GetIndexingConfiguration(GetIndexingConfigurationRequest) Awaitable<Errors\Result<GetIndexingConfigurationResponse>>;
  public function GetTopicRuleDestination(GetTopicRuleDestinationRequest) Awaitable<Errors\Result<GetTopicRuleDestinationResponse>>;
  public function TransferCertificate(TransferCertificateRequest) Awaitable<Errors\Result<TransferCertificateResponse>>;
  public function ListJobExecutionsForJob(ListJobExecutionsForJobRequest) Awaitable<Errors\Result<ListJobExecutionsForJobResponse>>;
  public function UpdateMitigationAction(UpdateMitigationActionRequest) Awaitable<Errors\Result<UpdateMitigationActionResponse>>;
  public function CancelAuditTask(CancelAuditTaskRequest) Awaitable<Errors\Result<CancelAuditTaskResponse>>;
  public function CreateOTAUpdate(CreateOTAUpdateRequest) Awaitable<Errors\Result<CreateOTAUpdateResponse>>;
  public function CreateSecurityProfile(CreateSecurityProfileRequest) Awaitable<Errors\Result<CreateSecurityProfileResponse>>;
  public function DeleteRoleAlias(DeleteRoleAliasRequest) Awaitable<Errors\Result<DeleteRoleAliasResponse>>;
  public function DescribeDomainConfiguration(DescribeDomainConfigurationRequest) Awaitable<Errors\Result<DescribeDomainConfigurationResponse>>;
  public function DescribeProvisioningTemplate(DescribeProvisioningTemplateRequest) Awaitable<Errors\Result<DescribeProvisioningTemplateResponse>>;
  public function AttachPolicy(AttachPolicyRequest) Awaitable<Errors\Error>;
  public function CreateJob(CreateJobRequest) Awaitable<Errors\Result<CreateJobResponse>>;
  public function ListThingGroups(ListThingGroupsRequest) Awaitable<Errors\Result<ListThingGroupsResponse>>;
  public function UpdateProvisioningTemplate(UpdateProvisioningTemplateRequest) Awaitable<Errors\Result<UpdateProvisioningTemplateResponse>>;
  public function UpdateRoleAlias(UpdateRoleAliasRequest) Awaitable<Errors\Result<UpdateRoleAliasResponse>>;
  public function ClearDefaultAuthorizer(ClearDefaultAuthorizerRequest) Awaitable<Errors\Result<ClearDefaultAuthorizerResponse>>;
  public function DeleteCertificate(DeleteCertificateRequest) Awaitable<Errors\Error>;
  public function ListMitigationActions(ListMitigationActionsRequest) Awaitable<Errors\Result<ListMitigationActionsResponse>>;
  public function SetDefaultPolicyVersion(SetDefaultPolicyVersionRequest) Awaitable<Errors\Error>;
  public function UpdateDimension(UpdateDimensionRequest) Awaitable<Errors\Result<UpdateDimensionResponse>>;
  public function UpdateEventConfigurations(UpdateEventConfigurationsRequest) Awaitable<Errors\Result<UpdateEventConfigurationsResponse>>;
  public function DescribeThing(DescribeThingRequest) Awaitable<Errors\Result<DescribeThingResponse>>;
  public function ListDimensions(ListDimensionsRequest) Awaitable<Errors\Result<ListDimensionsResponse>>;
  public function ListOutgoingCertificates(ListOutgoingCertificatesRequest) Awaitable<Errors\Result<ListOutgoingCertificatesResponse>>;
  public function RegisterThing(RegisterThingRequest) Awaitable<Errors\Result<RegisterThingResponse>>;
  public function ReplaceTopicRule(ReplaceTopicRuleRequest) Awaitable<Errors\Error>;
  public function StopThingRegistrationTask(StopThingRegistrationTaskRequest) Awaitable<Errors\Result<StopThingRegistrationTaskResponse>>;
  public function ListTargetsForPolicy(ListTargetsForPolicyRequest) Awaitable<Errors\Result<ListTargetsForPolicyResponse>>;
  public function AssociateTargetsWithJob(AssociateTargetsWithJobRequest) Awaitable<Errors\Result<AssociateTargetsWithJobResponse>>;
  public function CreateBillingGroup(CreateBillingGroupRequest) Awaitable<Errors\Result<CreateBillingGroupResponse>>;
  public function DeleteSecurityProfile(DeleteSecurityProfileRequest) Awaitable<Errors\Result<DeleteSecurityProfileResponse>>;
  public function DeleteV2LoggingLevel(DeleteV2LoggingLevelRequest) Awaitable<Errors\Error>;
  public function DescribeEventConfigurations(DescribeEventConfigurationsRequest) Awaitable<Errors\Result<DescribeEventConfigurationsResponse>>;
  public function ListPolicyVersions(ListPolicyVersionsRequest) Awaitable<Errors\Result<ListPolicyVersionsResponse>>;
  public function ListAuditMitigationActionsTasks(ListAuditMitigationActionsTasksRequest) Awaitable<Errors\Result<ListAuditMitigationActionsTasksResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function AttachSecurityProfile(AttachSecurityProfileRequest) Awaitable<Errors\Result<AttachSecurityProfileResponse>>;
  public function CreatePolicyVersion(CreatePolicyVersionRequest) Awaitable<Errors\Result<CreatePolicyVersionResponse>>;
  public function CreateProvisioningTemplate(CreateProvisioningTemplateRequest) Awaitable<Errors\Result<CreateProvisioningTemplateResponse>>;
  public function CreateThing(CreateThingRequest) Awaitable<Errors\Result<CreateThingResponse>>;
  public function DeleteDynamicThingGroup(DeleteDynamicThingGroupRequest) Awaitable<Errors\Result<DeleteDynamicThingGroupResponse>>;
  public function DeleteOTAUpdate(DeleteOTAUpdateRequest) Awaitable<Errors\Result<DeleteOTAUpdateResponse>>;
  public function UpdateDomainConfiguration(UpdateDomainConfigurationRequest) Awaitable<Errors\Result<UpdateDomainConfigurationResponse>>;
  public function CreateRoleAlias(CreateRoleAliasRequest) Awaitable<Errors\Result<CreateRoleAliasResponse>>;
  public function DeleteJob(DeleteJobRequest) Awaitable<Errors\Error>;
  public function GetStatistics(GetStatisticsRequest) Awaitable<Errors\Result<GetStatisticsResponse>>;
  public function ListStreams(ListStreamsRequest) Awaitable<Errors\Result<ListStreamsResponse>>;
  public function ListViolationEvents(ListViolationEventsRequest) Awaitable<Errors\Result<ListViolationEventsResponse>>;
  public function RegisterCertificate(RegisterCertificateRequest) Awaitable<Errors\Result<RegisterCertificateResponse>>;
  public function DescribeThingRegistrationTask(DescribeThingRegistrationTaskRequest) Awaitable<Errors\Result<DescribeThingRegistrationTaskResponse>>;
  public function ListSecurityProfilesForTarget(ListSecurityProfilesForTargetRequest) Awaitable<Errors\Result<ListSecurityProfilesForTargetResponse>>;
  public function RemoveThingFromThingGroup(RemoveThingFromThingGroupRequest) Awaitable<Errors\Result<RemoveThingFromThingGroupResponse>>;
  public function UpdateTopicRuleDestination(UpdateTopicRuleDestinationRequest) Awaitable<Errors\Result<UpdateTopicRuleDestinationResponse>>;
  public function DescribeStream(DescribeStreamRequest) Awaitable<Errors\Result<DescribeStreamResponse>>;
  public function UpdateSecurityProfile(UpdateSecurityProfileRequest) Awaitable<Errors\Result<UpdateSecurityProfileResponse>>;
  public function ListPolicies(ListPoliciesRequest) Awaitable<Errors\Result<ListPoliciesResponse>>;
  public function CancelAuditMitigationActionsTask(CancelAuditMitigationActionsTaskRequest) Awaitable<Errors\Result<CancelAuditMitigationActionsTaskResponse>>;
  public function CreateThingGroup(CreateThingGroupRequest) Awaitable<Errors\Result<CreateThingGroupResponse>>;
  public function CreateThingType(CreateThingTypeRequest) Awaitable<Errors\Result<CreateThingTypeResponse>>;
  public function DeleteScheduledAudit(DeleteScheduledAuditRequest) Awaitable<Errors\Result<DeleteScheduledAuditResponse>>;
  public function DescribeAuditTask(DescribeAuditTaskRequest) Awaitable<Errors\Result<DescribeAuditTaskResponse>>;
  public function ListActiveViolations(ListActiveViolationsRequest) Awaitable<Errors\Result<ListActiveViolationsResponse>>;
  public function UpdateThingGroupsForThing(UpdateThingGroupsForThingRequest) Awaitable<Errors\Result<UpdateThingGroupsForThingResponse>>;
  public function DescribeAuditFinding(DescribeAuditFindingRequest) Awaitable<Errors\Result<DescribeAuditFindingResponse>>;
  public function GetCardinality(GetCardinalityRequest) Awaitable<Errors\Result<GetCardinalityResponse>>;
  public function GetPolicyVersion(GetPolicyVersionRequest) Awaitable<Errors\Result<GetPolicyVersionResponse>>;
  public function GetTopicRule(GetTopicRuleRequest) Awaitable<Errors\Result<GetTopicRuleResponse>>;
  public function ListProvisioningTemplates(ListProvisioningTemplatesRequest) Awaitable<Errors\Result<ListProvisioningTemplatesResponse>>;
  public function TestAuthorization(TestAuthorizationRequest) Awaitable<Errors\Result<TestAuthorizationResponse>>;
  public function ValidateSecurityProfileBehaviors(ValidateSecurityProfileBehaviorsRequest) Awaitable<Errors\Result<ValidateSecurityProfileBehaviorsResponse>>;
  public function CreateDomainConfiguration(CreateDomainConfigurationRequest) Awaitable<Errors\Result<CreateDomainConfigurationResponse>>;
  public function DeleteDimension(DeleteDimensionRequest) Awaitable<Errors\Result<DeleteDimensionResponse>>;
  public function DeleteMitigationAction(DeleteMitigationActionRequest) Awaitable<Errors\Result<DeleteMitigationActionResponse>>;
  public function ListIndices(ListIndicesRequest) Awaitable<Errors\Result<ListIndicesResponse>>;
  public function ListPrincipalThings(ListPrincipalThingsRequest) Awaitable<Errors\Result<ListPrincipalThingsResponse>>;
  public function ListThingPrincipals(ListThingPrincipalsRequest) Awaitable<Errors\Result<ListThingPrincipalsResponse>>;
  public function CreateKeysAndCertificate(CreateKeysAndCertificateRequest) Awaitable<Errors\Result<CreateKeysAndCertificateResponse>>;
  public function DeleteCACertificate(DeleteCACertificateRequest) Awaitable<Errors\Result<DeleteCACertificateResponse>>;
  public function DeleteTopicRule(DeleteTopicRuleRequest) Awaitable<Errors\Error>;
  public function DescribeAuthorizer(DescribeAuthorizerRequest) Awaitable<Errors\Result<DescribeAuthorizerResponse>>;
  public function CancelJob(CancelJobRequest) Awaitable<Errors\Result<CancelJobResponse>>;
  public function DeleteThing(DeleteThingRequest) Awaitable<Errors\Result<DeleteThingResponse>>;
  public function DescribeDefaultAuthorizer(DescribeDefaultAuthorizerRequest) Awaitable<Errors\Result<DescribeDefaultAuthorizerResponse>>;
  public function RegisterCACertificate(RegisterCACertificateRequest) Awaitable<Errors\Result<RegisterCACertificateResponse>>;
  public function RemoveThingFromBillingGroup(RemoveThingFromBillingGroupRequest) Awaitable<Errors\Result<RemoveThingFromBillingGroupResponse>>;
  public function SetDefaultAuthorizer(SetDefaultAuthorizerRequest) Awaitable<Errors\Result<SetDefaultAuthorizerResponse>>;
  public function AddThingToBillingGroup(AddThingToBillingGroupRequest) Awaitable<Errors\Result<AddThingToBillingGroupResponse>>;
  public function DeleteBillingGroup(DeleteBillingGroupRequest) Awaitable<Errors\Result<DeleteBillingGroupResponse>>;
  public function DeprecateThingType(DeprecateThingTypeRequest) Awaitable<Errors\Result<DeprecateThingTypeResponse>>;
  public function ListBillingGroups(ListBillingGroupsRequest) Awaitable<Errors\Result<ListBillingGroupsResponse>>;
  public function ListRoleAliases(ListRoleAliasesRequest) Awaitable<Errors\Result<ListRoleAliasesResponse>>;
  public function RejectCertificateTransfer(RejectCertificateTransferRequest) Awaitable<Errors\Error>;
  public function DeleteProvisioningTemplate(DeleteProvisioningTemplateRequest) Awaitable<Errors\Result<DeleteProvisioningTemplateResponse>>;
  public function DescribeEndpoint(DescribeEndpointRequest) Awaitable<Errors\Result<DescribeEndpointResponse>>;
  public function ListTopicRuleDestinations(ListTopicRuleDestinationsRequest) Awaitable<Errors\Result<ListTopicRuleDestinationsResponse>>;
  public function SetLoggingOptions(SetLoggingOptionsRequest) Awaitable<Errors\Error>;
  public function CreateDimension(CreateDimensionRequest) Awaitable<Errors\Result<CreateDimensionResponse>>;
  public function DescribeDimension(DescribeDimensionRequest) Awaitable<Errors\Result<DescribeDimensionResponse>>;
  public function ListThingTypes(ListThingTypesRequest) Awaitable<Errors\Result<ListThingTypesResponse>>;
  public function UpdateIndexingConfiguration(UpdateIndexingConfigurationRequest) Awaitable<Errors\Result<UpdateIndexingConfigurationResponse>>;
  public function CancelJobExecution(CancelJobExecutionRequest) Awaitable<Errors\Error>;
  public function CreateScheduledAudit(CreateScheduledAuditRequest) Awaitable<Errors\Result<CreateScheduledAuditResponse>>;
  public function DeleteAccountAuditConfiguration(DeleteAccountAuditConfigurationRequest) Awaitable<Errors\Result<DeleteAccountAuditConfigurationResponse>>;
  public function DescribeSecurityProfile(DescribeSecurityProfileRequest) Awaitable<Errors\Result<DescribeSecurityProfileResponse>>;
  public function GetV2LoggingOptions(GetV2LoggingOptionsRequest) Awaitable<Errors\Result<GetV2LoggingOptionsResponse>>;
  public function SearchIndex(SearchIndexRequest) Awaitable<Errors\Result<SearchIndexResponse>>;
  public function StartAuditMitigationActionsTask(StartAuditMitigationActionsTaskRequest) Awaitable<Errors\Result<StartAuditMitigationActionsTaskResponse>>;
  public function CreateCertificateFromCsr(CreateCertificateFromCsrRequest) Awaitable<Errors\Result<CreateCertificateFromCsrResponse>>;
  public function DeletePolicy(DeletePolicyRequest) Awaitable<Errors\Error>;
  public function DeleteRegistrationCode(DeleteRegistrationCodeRequest) Awaitable<Errors\Result<DeleteRegistrationCodeResponse>>;
  public function DetachSecurityProfile(DetachSecurityProfileRequest) Awaitable<Errors\Result<DetachSecurityProfileResponse>>;
  public function GetEffectivePolicies(GetEffectivePoliciesRequest) Awaitable<Errors\Result<GetEffectivePoliciesResponse>>;
  public function ListCACertificates(ListCACertificatesRequest) Awaitable<Errors\Result<ListCACertificatesResponse>>;
  public function StartThingRegistrationTask(StartThingRegistrationTaskRequest) Awaitable<Errors\Result<StartThingRegistrationTaskResponse>>;
  public function TestInvokeAuthorizer(TestInvokeAuthorizerRequest) Awaitable<Errors\Result<TestInvokeAuthorizerResponse>>;
  public function CreateStream(CreateStreamRequest) Awaitable<Errors\Result<CreateStreamResponse>>;
  public function DeleteStream(DeleteStreamRequest) Awaitable<Errors\Result<DeleteStreamResponse>>;
  public function ListCertificatesByCA(ListCertificatesByCARequest) Awaitable<Errors\Result<ListCertificatesByCAResponse>>;
  public function ListOTAUpdates(ListOTAUpdatesRequest) Awaitable<Errors\Result<ListOTAUpdatesResponse>>;
  public function UpdateJob(UpdateJobRequest) Awaitable<Errors\Error>;
  public function UpdateStream(UpdateStreamRequest) Awaitable<Errors\Result<UpdateStreamResponse>>;
  public function ListCertificates(ListCertificatesRequest) Awaitable<Errors\Result<ListCertificatesResponse>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResponse>>;
  public function CreateTopicRuleDestination(CreateTopicRuleDestinationRequest) Awaitable<Errors\Result<CreateTopicRuleDestinationResponse>>;
  public function DeletePolicyVersion(DeletePolicyVersionRequest) Awaitable<Errors\Error>;
  public function DetachPrincipalPolicy(DetachPrincipalPolicyRequest) Awaitable<Errors\Error>;
  public function GetLoggingOptions(GetLoggingOptionsRequest) Awaitable<Errors\Result<GetLoggingOptionsResponse>>;
  public function ListAuditTasks(ListAuditTasksRequest) Awaitable<Errors\Result<ListAuditTasksResponse>>;
  public function ListAuthorizers(ListAuthorizersRequest) Awaitable<Errors\Result<ListAuthorizersResponse>>;
  public function ListThingRegistrationTaskReports(ListThingRegistrationTaskReportsRequest) Awaitable<Errors\Result<ListThingRegistrationTaskReportsResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function AcceptCertificateTransfer(AcceptCertificateTransferRequest) Awaitable<Errors\Error>;
  public function DeleteAuthorizer(DeleteAuthorizerRequest) Awaitable<Errors\Result<DeleteAuthorizerResponse>>;
  public function DescribeCACertificate(DescribeCACertificateRequest) Awaitable<Errors\Result<DescribeCACertificateResponse>>;
  public function GetPercentiles(GetPercentilesRequest) Awaitable<Errors\Result<GetPercentilesResponse>>;
  public function GetPolicy(GetPolicyRequest) Awaitable<Errors\Result<GetPolicyResponse>>;
  public function SetV2LoggingOptions(SetV2LoggingOptionsRequest) Awaitable<Errors\Error>;
}

class Count {
}

class ListAuditFindingsResponse {
  public AuditFindings $findings;
  public NextToken $next_token;
}

class QueueUrl {
}

class TagKey {
}

class DeleteRegistrationCodeRequest {
}

class ListTargetsForPolicyResponse {
  public PolicyTargets $targets;
  public Marker $next_marker;
}

class RemoveThingFromThingGroupRequest {
  public ThingGroupName $thing_group_name;
  public ThingGroupArn $thing_group_arn;
  public ThingName $thing_name;
  public ThingArn $thing_arn;
}

class StreamFiles {
}

class DescribeMitigationActionResponse {
  public RoleArn $role_arn;
  public MitigationActionParams $action_params;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public MitigationActionName $action_name;
  public MitigationActionType $action_type;
  public MitigationActionArn $action_arn;
  public MitigationActionId $action_id;
}

class MqttClientId {
}

class TaskId {
}

class UpdateCertificateRequest {
  public CertificateId $certificate_id;
  public CertificateStatus $new_status;
}

class OTAUpdateSummary {
  public DateType $creation_date;
  public OTAUpdateId $ota_update_id;
  public OTAUpdateArn $ota_update_arn;
}

class CreatePolicyVersionRequest {
  public PolicyName $policy_name;
  public PolicyDocument $policy_document;
  public SetAsDefault $set_as_default;
}

class DeleteCertificateRequest {
  public CertificateId $certificate_id;
  public ForceDelete $force_delete;
}

class GetRegistrationCodeRequest {
}

class OTAUpdateDescription {
}

class StreamsSummary {
}

class UpdateRoleAliasRequest {
  public RoleAlias $role_alias;
  public RoleArn $role_arn;
  public CredentialDurationSeconds $credential_duration_seconds;
}

class Certificate {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public CertificateStatus $status;
  public DateType $creation_date;
}

class CreateDimensionResponse {
  public DimensionName $name;
  public DimensionArn $arn;
}

class DeleteCACertificateRequest {
  public CertificateId $certificate_id;
}

class Policy {
  public PolicyName $policy_name;
  public PolicyArn $policy_arn;
}

class AssetPropertyId {
}

class IndexName {
}

class ListOutgoingCertificatesRequest {
  public PageSize $page_size;
  public Marker $marker;
  public AscendingOrder $ascending_order;
}

class OTAUpdateArn {
}

class StartThingRegistrationTaskResponse {
  public TaskId $task_id;
}

class AssetPropertyStringValue {
}

class DescribeAccountAuditConfigurationResponse {
  public AuditNotificationTargetConfigurations $audit_notification_target_configurations;
  public AuditCheckConfigurations $audit_check_configurations;
  public RoleArn $role_arn;
}

class FieldType {
}

class ListAuditMitigationActionsTasksRequest {
  public AuditTaskId $audit_task_id;
  public FindingId $finding_id;
  public AuditMitigationActionsTaskStatus $task_status;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Timestamp $start_time;
  public Timestamp $end_time;
}

class CanceledThings {
}

class DescribeCACertificateResponse {
  public CACertificateDescription $certificate_description;
  public RegistrationConfig $registration_config;
}

class ElasticsearchType {
}

class CreateDynamicThingGroupResponse {
  public ThingGroupName $thing_group_name;
  public ThingGroupArn $thing_group_arn;
  public ThingGroupId $thing_group_id;
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
}

class resourceArn {
}

class errorMessage {
}

class AttributesMap {
}

class AuditMitigationActionsTaskMetadataList {
}

class DeleteProvisioningTemplateVersionRequest {
  public TemplateName $template_name;
  public TemplateVersionId $version_id;
}

class DeleteTopicRuleDestinationResponse {
}

class ListAuthorizersResponse {
  public Marker $next_marker;
  public Authorizers $authorizers;
}

class ListJobsResponse {
  public JobSummaryList $jobs;
  public NextToken $next_token;
}

class ListRoleAliasesResponse {
  public RoleAliases $role_aliases;
  public Marker $next_marker;
}

class Signature {
}

class CertificateConflictException {
  public errorMessage $message;
}

class CreateDomainConfigurationResponse {
  public DomainConfigurationName $domain_configuration_name;
  public DomainConfigurationArn $domain_configuration_arn;
}

class CreateThingGroupRequest {
  public ThingGroupName $parent_group_name;
  public ThingGroupProperties $thing_group_properties;
  public TagList $tags;
  public ThingGroupName $thing_group_name;
}

class DetachPrincipalPolicyRequest {
  public PolicyName $policy_name;
  public Principal $principal;
}

class TopicRuleDestinationMaxResults {
}

class Url {
}

class CreateDimensionRequest {
  public DimensionName $name;
  public DimensionType $type;
  public DimensionStringValues $string_values;
  public TagList $tags;
  public ClientRequestToken $client_request_token;
}

class EffectivePolicy {
  public PolicyName $policy_name;
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
}

class HashKeyValue {
}

class TokenKeyName {
}

class ListSecurityProfilesForTargetResponse {
  public SecurityProfileTargetMappings $security_profile_target_mappings;
  public NextToken $next_token;
}

class TemplateVersionId {
}

class ServiceType {
}

class AssetPropertyAlias {
}

class AuditCheckConfiguration {
  public Enabled $enabled;
}

class AwsAccountId {
}

class DescribeAccountAuditConfigurationRequest {
}

class DetachThingPrincipalResponse {
}

class MitigationActionIdentifierList {
}

class Denied {
  public ImplicitDeny $implicit_deny;
  public ExplicitDeny $explicit_deny;
}

class DescribeScheduledAuditResponse {
  public AuditFrequency $frequency;
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public TargetAuditCheckNames $target_check_names;
  public ScheduledAuditName $scheduled_audit_name;
  public ScheduledAuditArn $scheduled_audit_arn;
}

class ListBillingGroupsResponse {
  public BillingGroupNameAndArnList $billing_groups;
  public NextToken $next_token;
}

class ServerCertificateSummary {
  public AcmCertificateArn $server_certificate_arn;
  public ServerCertificateStatus $server_certificate_status;
  public ServerCertificateStatusDetail $server_certificate_status_detail;
}

class ServerCertificateStatus {
}

class Topic {
}

class UpdateScheduledAuditResponse {
  public ScheduledAuditArn $scheduled_audit_arn;
}

class GetTopicRuleDestinationResponse {
  public TopicRuleDestination $topic_rule_destination;
}

class ListJobExecutionsForThingResponse {
  public JobExecutionSummaryForThingList $execution_summaries;
  public NextToken $next_token;
}

class ListPolicyVersionsRequest {
  public PolicyName $policy_name;
}

class RolloutRatePerMinute {
}

class ExpiresInSec {
}

class GetEffectivePoliciesResponse {
  public EffectivePolicies $effective_policies;
}

class ListPrincipalThingsResponse {
  public ThingNameList $things;
  public NextToken $next_token;
}

class Parameter {
}

class AcmCertificateArn {
}

class CertificateStateException {
  public errorMessage $message;
}

class CreateThingGroupResponse {
  public ThingGroupName $thing_group_name;
  public ThingGroupArn $thing_group_arn;
  public ThingGroupId $thing_group_id;
}

class DescribeBillingGroupResponse {
  public BillingGroupName $billing_group_name;
  public BillingGroupId $billing_group_id;
  public BillingGroupArn $billing_group_arn;
  public Version $version;
  public BillingGroupProperties $billing_group_properties;
  public BillingGroupMetadata $billing_group_metadata;
}

class UpdateDomainConfigurationRequest {
  public ReservedDomainConfigurationName $domain_configuration_name;
  public AuthorizerConfig $authorizer_config;
  public DomainConfigurationStatus $domain_configuration_status;
  public RemoveAuthorizerConfig $remove_authorizer_config;
}

class MitigationActionArn {
}

class IsDisabled {
}

class JobProcessDetails {
  public ProcessingTargetNameList $processing_targets;
  public CanceledThings $number_of_canceled_things;
  public FailedThings $number_of_failed_things;
  public RejectedThings $number_of_rejected_things;
  public InProgressThings $number_of_in_progress_things;
  public RemovedThings $number_of_removed_things;
  public TimedOutThings $number_of_timed_out_things;
  public SucceededThings $number_of_succeeded_things;
  public QueuedThings $number_of_queued_things;
}

class ListAuthorizersRequest {
  public PageSize $page_size;
  public Marker $marker;
  public AscendingOrder $ascending_order;
  public AuthorizerStatus $status;
}

class ListV2LoggingLevelsRequest {
  public NextToken $next_token;
  public SkyfallMaxResults $max_results;
  public LogTargetType $target_type;
}

class PartitionKey {
}

class RangeKeyField {
}

class CancelAuditMitigationActionsTaskResponse {
}

class ComparisonOperator {
}

class CustomCodeSigning {
  public CodeSigningSignature $signature;
  public CodeSigningCertificateChain $certificate_chain;
  public HashAlgorithm $hash_algorithm;
  public SignatureAlgorithm $signature_algorithm;
}

class OTAUpdateFileVersion {
}

class FileName {
}

class JobExecutionStatus {
}

class DescribeEventConfigurationsResponse {
  public EventConfigurations $event_configurations;
  public CreationDate $creation_date;
  public LastModifiedDate $last_modified_date;
}

class GetPolicyVersionRequest {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;
}

class ValidationErrors {
}

class AuditTaskMetadataList {
}

class DescribeProvisioningTemplateVersionResponse {
  public TemplateVersionId $version_id;
  public DateType $creation_date;
  public TemplateBody $template_body;
  public IsDefaultVersion $is_default_version;
}

class ListThingGroupsResponse {
  public NextToken $next_token;
  public ThingGroupNameAndArnList $thing_groups;
}

class CertificateValidationException {
  public errorMessage $message;
}

class CreateDynamicThingGroupRequest {
  public QueryVersion $query_version;
  public TagList $tags;
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;
  public IndexName $index_name;
  public QueryString $query_string;
}

class DescribeThingRegistrationTaskRequest {
  public TaskId $task_id;
}

class GetStatisticsRequest {
  public IndexName $index_name;
  public QueryString $query_string;
  public AggregationField $aggregation_field;
  public QueryVersion $query_version;
}

class BehaviorName {
}

class DayOfWeek {
}

class ThingGroupNameAndArnList {
}

class IndexNamesList {
}

class Targets {
}

class AcceptCertificateTransferRequest {
  public CertificateId $certificate_id;
  public SetAsActive $set_as_active;
}

class AttachPolicyRequest {
  public PolicyName $policy_name;
  public PolicyTarget $target;
}

class ListDimensionsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class DescribeRoleAliasResponse {
  public RoleAliasDescription $role_alias_description;
}

class SecurityProfileIdentifier {
  public SecurityProfileName $name;
  public SecurityProfileArn $arn;
}

class ValidateSecurityProfileBehaviorsRequest {
  public Behaviors $behaviors;
}

class ListThingsInBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
}

class RegistrationCode {
}

class CannedAccessControlList {
}

class DimensionType {
}

class ListDomainConfigurationsRequest {
  public Marker $marker;
  public PageSize $page_size;
  public ServiceType $service_type;
}

class ListThingGroupsForThingResponse {
  public ThingGroupNameAndArnList $thing_groups;
  public NextToken $next_token;
}

class CertificateValidity {
  public DateType $not_before;
  public DateType $not_after;
}

class DisableTopicRuleRequest {
  public RuleName $rule_name;
}

class JobDocumentSource {
}

class SetDefaultPolicyVersionRequest {
  public PolicyVersionId $policy_version_id;
  public PolicyName $policy_name;
}

class UpdateThingGroupRequest {
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;
  public OptionalVersion $expected_version;
}

class AssetPropertyQuality {
}

class AwsJobExecutionsRolloutConfig {
  public MaximumPerMinute $maximum_per_minute;
}

class ExponentialRolloutRate {
  public RolloutRatePerMinute $base_rate_per_minute;
  public IncrementFactor $increment_factor;
  public RateIncreaseCriteria $rate_increase_criteria;
}

class TransferAlreadyCompletedException {
  public errorMessage $message;
}

class DetailsValue {
}

class InvalidStateTransitionException {
  public errorMessage $message;
}

class RemoveAutoRegistration {
}

class Stream {
  public StreamId $stream_id;
  public FileId $file_id;
}

class AuditNotificationType {
}

class DynamicGroupStatus {
}

class AuthorizerConfig {
  public AuthorizerName $default_authorizer_name;
  public AllowAuthorizerOverride $allow_authorizer_override;
}

class DeleteDynamicThingGroupRequest {
  public OptionalVersion $expected_version;
  public ThingGroupName $thing_group_name;
}

class IotAnalyticsAction {
  public AwsArn $channel_arn;
  public ChannelName $channel_name;
  public AwsArn $role_arn;
}

class StopThingRegistrationTaskResponse {
}

class AuditTaskType {
}

class HttpAction {
  public Url $confirmation_url;
  public HeaderList $headers;
  public HttpAuthorization $auth;
  public Url $url;
}

class TopicRuleDestinationSummaries {
}

class TotalChecksCount {
}

class AuditCheckRunStatus {
}

class DeleteBehaviors {
}

class PercentValue {
}

class AttributeKey {
}

class ExecutionNamePrefix {
}

class S3Action {
  public AwsArn $role_arn;
  public BucketName $bucket_name;
  public Key $key;
  public CannedAccessControlList $canned_acl;
}

class TransferData {
  public DateType $reject_date;
  public Message $transfer_message;
  public Message $reject_reason;
  public DateType $transfer_date;
  public DateType $accept_date;
}

class UpdateDimensionResponse {
  public DimensionType $type;
  public DimensionStringValues $string_values;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public DimensionName $name;
  public DimensionArn $arn;
}

class RemoveThingFromBillingGroupResponse {
}

class StateMachineName {
}

class String {
}

class TargetAuditCheckNames {
}

class CloudwatchAlarmAction {
  public StateReason $state_reason;
  public StateValue $state_value;
  public AwsArn $role_arn;
  public AlarmName $alarm_name;
}

class ListTagsForResourceRequest {
  public NextToken $next_token;
  public ResourceArn $resource_arn;
}

class ListTopicRuleDestinationsResponse {
  public TopicRuleDestinationSummaries $destination_summaries;
  public NextToken $next_token;
}

class RuleName {
}

class ConsecutiveDatapointsToClear {
}

class CreateProvisioningTemplateVersionResponse {
  public TemplateArn $template_arn;
  public TemplateName $template_name;
  public TemplateVersionId $version_id;
  public IsDefaultVersion $is_default_version;
}

class DeletePolicyRequest {
  public PolicyName $policy_name;
}

class CreatedAtDate {
}

class DeleteStream {
}

class HashAlgorithm {
}

class MissingContextValue {
}

class OTAUpdatesSummary {
}

class UpdateIndexingConfigurationResponse {
}

class AuditMitigationActionsTaskId {
}

class ConfirmTopicRuleDestinationRequest {
  public ConfirmationToken $confirmation_token;
}

class DetachPolicyRequest {
  public PolicyTarget $target;
  public PolicyName $policy_name;
}

class Parameters {
}

class PrivateKey {
}

class Target {
}

class AuditNotificationTarget {
  public TargetArn $target_arn;
  public RoleArn $role_arn;
  public Enabled $enabled;
}

class DeleteOTAUpdateRequest {
  public OTAUpdateId $ota_update_id;
  public DeleteStream $delete_stream;
  public ForceDeleteAWSJob $force_delete_aws_job;
}

class GetPolicyRequest {
  public PolicyName $policy_name;
}

class ListAuditMitigationActionsExecutionsResponse {
  public AuditMitigationActionExecutionMetadataList $actions_executions;
  public NextToken $next_token;
}

class CACertificateStatus {
}

class ListBillingGroupsRequest {
  public BillingGroupName $name_prefix_filter;
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
}

class ListThingsRequest {
  public ThingTypeName $thing_type_name;
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
  public AttributeName $attribute_name;
  public AttributeValue $attribute_value;
}

class HttpUrlDestinationSummary {
  public Url $confirmation_url;
}

class IncrementFactor {
}

class LastModifiedDate {
}

class UpdateDimensionRequest {
  public DimensionName $name;
  public DimensionStringValues $string_values;
}

class DescribeThingGroupResponse {
  public ThingGroupName $thing_group_name;
  public ThingGroupId $thing_group_id;
  public Version $version;
  public ThingGroupProperties $thing_group_properties;
  public ThingGroupMetadata $thing_group_metadata;
  public QueryString $query_string;
  public ThingGroupArn $thing_group_arn;
  public IndexName $index_name;
  public QueryVersion $query_version;
  public DynamicGroupStatus $status;
}

class DescribeThingRegistrationTaskResponse {
  public TaskId $task_id;
  public CreationDate $creation_date;
  public TemplateBody $template_body;
  public RegistryS3KeyName $input_file_key;
  public Status $status;
  public Count $failure_count;
  public Percentage $percentage_progress;
  public LastModifiedDate $last_modified_date;
  public RegistryS3BucketName $input_file_bucket;
  public RoleArn $role_arn;
  public ErrorMessage $message;
  public Count $success_count;
}

class DescribeThingTypeResponse {
  public ThingTypeProperties $thing_type_properties;
  public ThingTypeMetadata $thing_type_metadata;
  public ThingTypeName $thing_type_name;
  public ThingTypeId $thing_type_id;
  public ThingTypeArn $thing_type_arn;
}

class DimensionValueOperator {
}

class ProvisioningTemplateVersionListing {
}

class SecurityProfileTargetMapping {
  public SecurityProfileIdentifier $security_profile_identifier;
  public SecurityProfileTarget $target;
}

class AuditMitigationActionExecutionMetadata {
  public AuditMitigationActionsExecutionStatus $status;
  public Timestamp $start_time;
  public Timestamp $end_time;
  public ErrorCode $error_code;
  public ErrorMessage $message;
  public AuditMitigationActionsTaskId $task_id;
  public FindingId $finding_id;
  public MitigationActionName $action_name;
  public MitigationActionId $action_id;
}

class JobExecutionsRolloutConfig {
  public MaxJobExecutionsPerMin $maximum_per_minute;
  public ExponentialRolloutRate $exponential_rate;
}

class ListOTAUpdatesResponse {
  public OTAUpdatesSummary $ota_updates;
  public NextToken $next_token;
}

class ListProvisioningTemplatesResponse {
  public ProvisioningTemplateListing $templates;
  public NextToken $next_token;
}

class ServerCertificateStatusDetail {
}

class FindingId {
}

class MitigationActionNameList {
}

class RecursiveWithoutDefault {
}

class ReplaceTopicRuleRequest {
  public RuleName $rule_name;
  public TopicRulePayload $topic_rule_payload;
}

class ListThingTypesResponse {
  public ThingTypeList $thing_types;
  public NextToken $next_token;
}

class ThingIndexingMode {
}

class ListMitigationActionsRequest {
  public MitigationActionType $action_type;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListTargetsForSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class StartAuditMitigationActionsTaskResponse {
  public AuditMitigationActionsTaskId $task_id;
}

class Status {
}

class AuthResults {
}

class DimensionStringValue {
}

class InProgressThings {
}

class ListCertificatesByCARequest {
  public PageSize $page_size;
  public Marker $marker;
  public AscendingOrder $ascending_order;
  public CertificateId $ca_certificate_id;
}

class CancelJobRequest {
  public JobId $job_id;
  public ReasonCode $reason_code;
  public Comment $comment;
  public ForceFlag $force;
}

class HttpActionHeader {
  public HeaderKey $key;
  public HeaderValue $value;
}

class NotConfiguredException {
  public errorMessage $message;
}

class StepFunctionsAction {
  public AwsArn $role_arn;
  public ExecutionNamePrefix $execution_name_prefix;
  public StateMachineName $state_machine_name;
}

class ThingGroupMetadata {
  public ThingGroupName $parent_group_name;
  public ThingGroupNameAndArnList $root_to_parent_thing_groups;
  public CreationDate $creation_date;
}

class CancelAuditTaskRequest {
  public AuditTaskId $task_id;
}

class CreateJobResponse {
  public JobDescription $description;
  public JobArn $job_arn;
  public JobId $job_id;
}

class HttpContext {
  public HttpHeaders $headers;
  public HttpQueryString $query_string;
}

class NonCompliantResourcesCount {
}

class AuthorizerName {
}

class DeleteThingRequest {
  public OptionalVersion $expected_version;
  public ThingName $thing_name;
}

class SetV2LoggingLevelRequest {
  public LogTarget $log_target;
  public LogLevel $log_level;
}

class ThingGroupName {
}

class SecurityProfileName {
}

class TopicRuleDestinationSummary {
  public AwsArn $arn;
  public TopicRuleDestinationStatus $status;
  public string $status_reason;
  public HttpUrlDestinationSummary $http_url_summary;
}

class EvaluationStatistic {
}

class HeaderValue {
}

class HttpUrlDestinationProperties {
  public Url $confirmation_url;
}

class MitigationActionType {
}

class ListSecurityProfilesRequest {
  public MaxResults $max_results;
  public DimensionName $dimension_name;
  public NextToken $next_token;
}

class MaxResults {
}

class PolicyVersionId {
}

class AttachThingPrincipalResponse {
}

class IotSiteWiseAction {
  public PutAssetPropertyValueEntryList $put_asset_property_value_entries;
  public AwsArn $role_arn;
}

class ListAuditMitigationActionsTasksResponse {
  public AuditMitigationActionsTaskMetadataList $tasks;
  public NextToken $next_token;
}

class ListScheduledAuditsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class AuditMitigationActionExecutionMetadataList {
}

class DeleteThingGroupRequest {
  public ThingGroupName $thing_group_name;
  public OptionalVersion $expected_version;
}

class DescribeIndexRequest {
  public IndexName $index_name;
}

class ThingGroupDocumentList {
}

class GetCardinalityRequest {
  public QueryVersion $query_version;
  public IndexName $index_name;
  public QueryString $query_string;
  public AggregationField $aggregation_field;
}

class StreamArn {
}

class UnauthorizedException {
  public errorMessage $message;
}

class DescribeProvisioningTemplateResponse {
  public Enabled $enabled;
  public RoleArn $provisioning_role_arn;
  public TemplateArn $template_arn;
  public TemplateName $template_name;
  public TemplateDescription $description;
  public DateType $last_modified_date;
  public TemplateVersionId $default_version_id;
  public TemplateBody $template_body;
  public DateType $creation_date;
}

class GetRegistrationCodeResponse {
  public RegistrationCode $registration_code;
}

class Principals {
}

class SnsAction {
  public AwsArn $target_arn;
  public AwsArn $role_arn;
  public MessageFormat $message_format;
}

class SecurityProfileTarget {
  public SecurityProfileTargetArn $arn;
}

class StringMap {
}

class TaskAlreadyExistsException {
  public errorMessage $message;
}

class DimensionArn {
}

class JobDescription {
}

class ListCertificatesByCAResponse {
  public Certificates $certificates;
  public Marker $next_marker;
}

class PolicyVersions {
}

class FailedFindingsCount {
}

class GetJobDocumentRequest {
  public JobId $job_id;
}

class ThingId {
}

class StatisticalThreshold {
  public EvaluationStatistic $statistic;
}

class AttachPrincipalPolicyRequest {
  public PolicyName $policy_name;
  public Principal $principal;
}

class ListJobExecutionsForThingRequest {
  public ThingName $thing_name;
  public JobExecutionStatus $status;
  public LaserMaxResults $max_results;
  public NextToken $next_token;
}

class Prefix {
}

class QueryMaxResults {
}

class ServerCertificates {
}

class UpdateCACertificateParams {
  public CACertificateUpdateAction $action;
}

class StartSigningJobParameter {
  public Destination $destination;
  public SigningProfileParameter $signing_profile_parameter;
  public SigningProfileName $signing_profile_name;
}

class TopicRuleDestination {
  public string $status_reason;
  public HttpUrlDestinationProperties $http_url_properties;
  public AwsArn $arn;
  public TopicRuleDestinationStatus $status;
}

class UndoDeprecate {
}

class AssetId {
}

class AuditMitigationActionsTaskStatistics {
}

class AwsArn {
}

class BillingGroupId {
}

class EventType {
}

class FileId {
}

class NonCompliantChecksCount {
}

class AttachSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
  public SecurityProfileTargetArn $security_profile_target_arn;
}

class BillingGroupNameAndArnList {
}

class BooleanKey {
}

class CertificateDescription {
  public DateType $creation_date;
  public DateType $last_modified_date;
  public CustomerVersion $customer_version;
  public TransferData $transfer_data;
  public CertificateValidity $validity;
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public CertificateId $ca_certificate_id;
  public AwsAccountId $previous_owned_by;
  public GenerationId $generation_id;
  public CertificateStatus $status;
  public CertificatePem $certificate_pem;
  public AwsAccountId $owned_by;
}

class CertificatePathOnDevice {
}

class Forced {
}

class ListJobsRequest {
  public LaserMaxResults $max_results;
  public NextToken $next_token;
  public ThingGroupName $thing_group_name;
  public ThingGroupId $thing_group_id;
  public JobStatus $status;
  public TargetSelection $target_selection;
}

class TopicRuleListItem {
  public RuleArn $rule_arn;
  public RuleName $rule_name;
  public TopicPattern $topic_pattern;
  public CreatedAtDate $created_at;
  public IsDisabled $rule_disabled;
}

class OTAUpdateId {
}

class AddThingsToThingGroupParams {
  public ThingGroupNames $thing_group_names;
  public OverrideDynamicGroups $override_dynamic_groups;
}

class CreateThingTypeRequest {
  public TagList $tags;
  public ThingTypeName $thing_type_name;
  public ThingTypeProperties $thing_type_properties;
}

class OTAUpdateFile {
  public CodeSigning $code_signing;
  public AttributesMap $attributes;
  public FileName $file_name;
  public OTAUpdateFileVersion $file_version;
  public FileLocation $file_location;
}

class ClientRequestToken {
}

class DeleteProvisioningTemplateResponse {
}

class ListSecurityProfilesResponse {
  public SecurityProfileIdentifiers $security_profile_identifiers;
  public NextToken $next_token;
}

class CancelJobResponse {
  public JobDescription $description;
  public JobArn $job_arn;
  public JobId $job_id;
}

class DescribeStreamResponse {
  public StreamInfo $stream_info;
}

class GetStatisticsResponse {
  public Statistics $statistics;
}

class ListPrincipalPoliciesRequest {
  public Principal $principal;
  public Marker $marker;
  public PageSize $page_size;
  public AscendingOrder $ascending_order;
}

class ResourceType {
}

class AuditMitigationActionsTaskTarget {
  public AuditCheckToReasonCodeFilter $audit_check_to_reason_code_filter;
  public AuditTaskId $audit_task_id;
  public FindingIds $finding_ids;
}

class ElasticsearchId {
}

class FailedChecksCount {
}

class ListAuditMitigationActionsExecutionsRequest {
  public NextToken $next_token;
  public AuditMitigationActionsTaskId $task_id;
  public AuditMitigationActionsExecutionStatus $action_status;
  public FindingId $finding_id;
  public MaxResults $max_results;
}

class LambdaAction {
  public FunctionArn $function_arn;
}

class ThingArn {
}

class UpdateScheduledAuditRequest {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public TargetAuditCheckNames $target_check_names;
  public ScheduledAuditName $scheduled_audit_name;
  public AuditFrequency $frequency;
}

class UpdateTopicRuleDestinationRequest {
  public AwsArn $arn;
  public TopicRuleDestinationStatus $status;
}

class GetV2LoggingOptionsRequest {
}

class ListOTAUpdatesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OTAUpdateStatus $ota_update_status;
}

class ListThingsInBillingGroupResponse {
  public ThingNameList $things;
  public NextToken $next_token;
}

class RegisterThingResponse {
  public CertificatePem $certificate_pem;
  public ResourceArns $resource_arns;
}

class AddThingToBillingGroupRequest {
  public ThingName $thing_name;
  public ThingArn $thing_arn;
  public BillingGroupName $billing_group_name;
  public BillingGroupArn $billing_group_arn;
}

class AssetPropertyValueList {
}

class ListAttachedPoliciesResponse {
  public Policies $policies;
  public Marker $next_marker;
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class RemoveThingType {
}

class TopicRulePayload {
  public Description $description;
  public ActionList $actions;
  public IsDisabled $rule_disabled;
  public AwsIotSqlVersion $aws_iot_sql_version;
  public Action $error_action;
  public SQL $sql;
}

class Variance {
}

class HttpAuthorization {
  public SigV4Authorization $sigv_4;
}

class PutAssetPropertyValueEntryList {
}

class TestInvokeAuthorizerResponse {
  public PolicyDocuments $policy_documents;
  public Seconds $refresh_after_in_seconds;
  public Seconds $disconnect_after_in_seconds;
  public IsAuthenticated $is_authenticated;
  public PrincipalId $principal_id;
}

class ThingTypeDescription {
}

class ThingConnectivityIndexingMode {
}

class TotalFindingsCount {
}

class Valid {
}

class DurationSeconds {
}

class ListTargetsForSecurityProfileResponse {
  public SecurityProfileTargets $security_profile_targets;
  public NextToken $next_token;
}

class OTAUpdateStatus {
}

class StartOnDemandAuditTaskRequest {
  public TargetAuditCheckNames $target_check_names;
}

class JobExecution {
  public JobId $job_id;
  public DateType $queued_at;
  public DateType $last_updated_at;
  public ApproximateSecondsBeforeTimedOut $approximate_seconds_before_timed_out;
  public ExecutionNumber $execution_number;
  public VersionNumber $version_number;
  public JobExecutionStatus $status;
  public Forced $force_canceled;
  public JobExecutionStatusDetails $status_details;
  public ThingArn $thing_arn;
  public DateType $started_at;
}

class ThingGroupIndexingConfiguration {
  public ThingGroupIndexingMode $thing_group_indexing_mode;
  public Fields $managed_fields;
  public Fields $custom_fields;
}

class BehaviorCriteria {
  public ComparisonOperator $comparison_operator;
  public MetricValue $value;
  public DurationSeconds $duration_seconds;
  public ConsecutiveDatapointsToAlarm $consecutive_datapoints_to_alarm;
  public ConsecutiveDatapointsToClear $consecutive_datapoints_to_clear;
  public StatisticalThreshold $statistical_threshold;
}

class IsDefaultVersion {
}

class SigV4Authorization {
  public SigningRegion $signing_region;
  public ServiceName $service_name;
  public AwsArn $role_arn;
}

class UpdateAccountAuditConfigurationRequest {
  public AuditCheckConfigurations $audit_check_configurations;
  public RoleArn $role_arn;
  public AuditNotificationTargetConfigurations $audit_notification_target_configurations;
}

class JobExecutionSummaryForThingList {
}

class LogTarget {
  public LogTargetType $target_type;
  public LogTargetName $target_name;
}

class ChannelName {
}

class CodeSigningSignature {
  public Signature $inline_document;
}

class CreateCertificateFromCsrResponse {
  public CertificatePem $certificate_pem;
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
}

class InvalidResponseException {
  public errorMessage $message;
}

class CreationDate {
}

class ListThingGroupsForThingRequest {
  public ThingName $thing_name;
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
}

class TransferConflictException {
  public errorMessage $message;
}

class ValidateSecurityProfileBehaviorsResponse {
  public Valid $valid;
  public ValidationErrors $validation_errors;
}

class CreateAuthorizerResponse {
  public AuthorizerName $authorizer_name;
  public AuthorizerArn $authorizer_arn;
}

class DescribeProvisioningTemplateVersionRequest {
  public TemplateVersionId $version_id;
  public TemplateName $template_name;
}

class SearchIndexResponse {
  public NextToken $next_token;
  public ThingDocumentList $things;
  public ThingGroupDocumentList $thing_groups;
}

class ViolationEventType {
}

class ForceFlag {
}

class ListRoleAliasesRequest {
  public PageSize $page_size;
  public Marker $marker;
  public AscendingOrder $ascending_order;
}

class ListTagsForResourceResponse {
  public TagList $tags;
  public NextToken $next_token;
}

class UntagResourceResponse {
}

class ConnectivityTimestamp {
}

class DescribeIndexResponse {
  public IndexSchema $schema;
  public IndexName $index_name;
  public IndexStatus $index_status;
}

class DescribeRoleAliasRequest {
  public RoleAlias $role_alias;
}

class ElasticsearchIndex {
}

class StreamInfo {
  public StreamArn $stream_arn;
  public StreamVersion $stream_version;
  public StreamDescription $description;
  public StreamFiles $files;
  public DateType $created_at;
  public DateType $last_updated_at;
  public RoleArn $role_arn;
  public StreamId $stream_id;
}

class Attributes {
}

class ConflictingResourceUpdateException {
  public errorMessage $message;
}

class GetPercentilesResponse {
  public Percentiles $percentiles;
}

class UseBase64 {
}

class DimensionStringValues {
}

class PercentPair {
  public Percent $percent;
  public PercentValue $value;
}

class SqsAction {
  public QueueUrl $queue_url;
  public UseBase64 $use_base_64;
  public AwsArn $role_arn;
}

class SucceededFindingsCount {
}

class DescribeDefaultAuthorizerResponse {
  public AuthorizerDescription $authorizer_description;
}

class FirehoseSeparator {
}

class MqttContext {
  public MqttUsername $username;
  public MqttPassword $password;
  public MqttClientId $client_id;
}

class ResourceRegistrationFailureException {
  public errorMessage $message;
}

class ListCACertificatesRequest {
  public PageSize $page_size;
  public Marker $marker;
  public AscendingOrder $ascending_order;
}

class DeviceCertificateUpdateAction {
}

class MqttPassword {
}

class ViolationEvents {
}

class EndpointAddress {
}

class GetLoggingOptionsResponse {
  public AwsArn $role_arn;
  public LogLevel $log_level;
}

class PolicyDocument {
}

class QueuedThings {
}

class ActiveViolation {
  public Timestamp $last_violation_time;
  public Timestamp $violation_start_time;
  public ViolationId $violation_id;
  public DeviceDefenderThingName $thing_name;
  public SecurityProfileName $security_profile_name;
  public Behavior $behavior;
  public MetricValue $last_violation_value;
}

class CancelCertificateTransferRequest {
  public CertificateId $certificate_id;
}

class CreateOTAUpdateRequest {
  public OTAUpdateDescription $description;
  public Targets $targets;
  public TargetSelection $target_selection;
  public AwsJobExecutionsRolloutConfig $aws_job_executions_rollout_config;
  public AwsJobPresignedUrlConfig $aws_job_presigned_url_config;
  public OTAUpdateId $ota_update_id;
  public Protocols $protocols;
  public OTAUpdateFiles $files;
  public RoleArn $role_arn;
  public AdditionalParameterMap $additional_parameters;
  public TagList $tags;
}

class DescribeDefaultAuthorizerRequest {
}

class ScheduledAuditArn {
}

class CompliantChecksCount {
}

class DetailsMap {
}

class GroupNameAndArn {
  public ThingGroupName $group_name;
  public ThingGroupArn $group_arn;
}

class RegistrationCodeValidationException {
  public errorMessage $message;
}

class AlertTargetArn {
}

class DeleteJobRequest {
  public ForceFlag $force;
  public JobId $job_id;
}

class ListThingPrincipalsResponse {
  public Principals $principals;
}

class JobArn {
}

class AuditMitigationActionsTaskMetadata {
  public AuditMitigationActionsTaskId $task_id;
  public Timestamp $start_time;
  public AuditMitigationActionsTaskStatus $task_status;
}

class DeleteMitigationActionResponse {
}

class DeleteSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
  public OptionalVersion $expected_version;
}

class DescribeDomainConfigurationRequest {
  public ReservedDomainConfigurationName $domain_configuration_name;
}

class DeleteStreamResponse {
}

class Protocols {
}

class PublicKeyMap {
}

class AbortConfig {
  public AbortCriteriaList $criteria_list;
}

class ListIndicesResponse {
  public IndexNamesList $index_names;
  public NextToken $next_token;
}

class MaxJobExecutionsPerMin {
}

class ServerCertificateArns {
}

class DetailsKey {
}

class HttpHeaderName {
}

class UpdateSecurityProfileResponse {
  public SecurityProfileArn $security_profile_arn;
  public SecurityProfileDescription $security_profile_description;
  public AlertTargets $alert_targets;
  public AdditionalMetricsToRetainV2List $additional_metrics_to_retain_v_2;
  public SecurityProfileName $security_profile_name;
  public AdditionalMetricsToRetainList $additional_metrics_to_retain;
  public Version $version;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public Behaviors $behaviors;
}

class UpdateMitigationActionResponse {
  public MitigationActionArn $action_arn;
  public MitigationActionId $action_id;
}

class AlertTarget {
  public AlertTargetArn $alert_target_arn;
  public RoleArn $role_arn;
}

class DescribeAuditTaskResponse {
  public Timestamp $task_start_time;
  public TaskStatistics $task_statistics;
  public ScheduledAuditName $scheduled_audit_name;
  public AuditDetails $audit_details;
  public AuditTaskStatus $task_status;
  public AuditTaskType $task_type;
}

class PolicyVersionIdentifier {
  public PolicyVersionId $policy_version_id;
  public PolicyName $policy_name;
}

class SigningRegion {
}

class ThingTypeId {
}

class Authorizers {
}

class CreateStreamRequest {
  public StreamId $stream_id;
  public StreamDescription $description;
  public StreamFiles $files;
  public RoleArn $role_arn;
  public TagList $tags;
}

class DeprecateThingTypeRequest {
  public ThingTypeName $thing_type_name;
  public UndoDeprecate $undo_deprecate;
}

class ThingGroupDocument {
  public ThingGroupId $thing_group_id;
  public ThingGroupDescription $thing_group_description;
  public Attributes $attributes;
  public ThingGroupNameList $parent_group_names;
  public ThingGroupName $thing_group_name;
}

class CanceledChecksCount {
}

class ProvisioningTemplateSummary {
  public Enabled $enabled;
  public TemplateArn $template_arn;
  public TemplateName $template_name;
  public TemplateDescription $description;
  public DateType $creation_date;
  public DateType $last_modified_date;
}

class UpdateProvisioningTemplateResponse {
}

class StreamFile {
  public FileId $file_id;
  public S3Location $s_3_location;
}

class UpdateDynamicThingGroupResponse {
  public Version $version;
}

class UpdateThingGroupsForThingResponse {
}

class CredentialDurationSeconds {
}

class JobExecutionSummaryForJob {
  public ThingArn $thing_arn;
  public JobExecutionSummary $job_execution_summary;
}

class KeyName {
}

class RejectedThings {
}

class JobSummaryList {
}

class SetLoggingOptionsRequest {
  public LoggingOptionsPayload $logging_options_payload;
}

class VersionConflictException {
  public errorMessage $message;
}

class Configuration {
  public Enabled $enabled;
}

class DeleteTopicRuleDestinationRequest {
  public AwsArn $arn;
}

class TimedOutThings {
}

class MetricDimension {
  public DimensionName $dimension_name;
  public DimensionValueOperator $operator;
}

class SqlParseException {
  public errorMessage $message;
}

class TagList {
}

class AssetPropertyTimestamp {
  public AssetPropertyTimeInSeconds $time_in_seconds;
  public AssetPropertyOffsetInNanos $offset_in_nanos;
}

class CreateCertificateFromCsrRequest {
  public CertificateSigningRequest $certificate_signing_request;
  public SetAsActive $set_as_active;
}

class DomainConfigurationArn {
}

class DynamoKeyType {
}

class ListV2LoggingLevelsResponse {
  public LogTargetConfigurations $log_target_configurations;
  public NextToken $next_token;
}

class ClientId {
}

class DynamoDBv2Action {
  public AwsArn $role_arn;
  public PutItemInput $put_item;
}

class Enabled {
}

class ListStreamsResponse {
  public StreamsSummary $streams;
  public NextToken $next_token;
}

class LogGroupName {
}

class Percentiles {
}

class SumOfSquares {
}

class UpdateBillingGroupResponse {
  public Version $version;
}

class AuditDetails {
}

class RemovedThings {
}

class TimeoutConfig {
  public InProgressTimeoutInMinutes $in_progress_timeout_in_minutes;
}

class AssetPropertyIntegerValue {
}

class AttachSecurityProfileResponse {
}

class ScheduledAuditName {
}

class AuditMitigationActionsTaskStatus {
}

class Average {
}

class DetachSecurityProfileResponse {
}

class EndpointType {
}

class AllowAuthorizerOverride {
}

class CheckCompliant {
}

class FileLocation {
  public Stream $stream;
  public S3Location $s_3_location;
}

class AlertTargets {
}

class Recursive {
}

class DeleteProvisioningTemplateRequest {
  public TemplateName $template_name;
}

class ReasonCode {
}

class StartAuditMitigationActionsTaskRequest {
  public AuditMitigationActionsTaskId $task_id;
  public AuditMitigationActionsTaskTarget $target;
  public AuditCheckToActionsMapping $audit_check_to_actions_mapping;
  public ClientRequestToken $client_request_token;
}

class StartThingRegistrationTaskRequest {
  public TemplateBody $template_body;
  public RegistryS3BucketName $input_file_bucket;
  public RegistryS3KeyName $input_file_key;
  public RoleArn $role_arn;
}

class TagResourceResponse {
}

class DeleteJobExecutionRequest {
  public JobId $job_id;
  public ThingName $thing_name;
  public ExecutionNumber $execution_number;
  public ForceFlag $force;
}

class DescribeSecurityProfileResponse {
  public AdditionalMetricsToRetainV2List $additional_metrics_to_retain_v_2;
  public SecurityProfileArn $security_profile_arn;
  public Behaviors $behaviors;
  public AdditionalMetricsToRetainList $additional_metrics_to_retain;
  public Version $version;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
  public SecurityProfileName $security_profile_name;
  public SecurityProfileDescription $security_profile_description;
  public AlertTargets $alert_targets;
}

class DescribeThingTypeRequest {
  public ThingTypeName $thing_type_name;
}

class SecurityProfileTargetMappings {
}

class CreateRoleAliasRequest {
  public CredentialDurationSeconds $credential_duration_seconds;
  public RoleAlias $role_alias;
  public RoleArn $role_arn;
}

class RegisterCACertificateRequest {
  public CertificatePem $ca_certificate;
  public CertificatePem $verification_certificate;
  public SetAsActive $set_as_active;
  public AllowAutoRegistration $allow_auto_registration;
  public RegistrationConfig $registration_config;
}

class DeleteAccountAuditConfigurationResponse {
}

class DescribeCACertificateRequest {
  public CertificateId $certificate_id;
}

class ThingGroupNames {
}

class AlertTargetType {
}

class DeviceDefenderThingName {
}

class Marker {
}

class CertificatePem {
}

class ConfirmationToken {
}

class ListAuditTasksResponse {
  public AuditTaskMetadataList $tasks;
  public NextToken $next_token;
}

class SecurityProfileIdentifiers {
}

class AwsIotSqlVersion {
}

class DomainConfigurationStatus {
}

class GetIndexingConfigurationResponse {
  public ThingIndexingConfiguration $thing_indexing_configuration;
  public ThingGroupIndexingConfiguration $thing_group_indexing_configuration;
}

class CreateKeysAndCertificateResponse {
  public CertificatePem $certificate_pem;
  public KeyPair $key_pair;
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
}

class Field {
  public FieldName $name;
  public FieldType $type;
}

class InlineDocument {
}

class ListThingRegistrationTaskReportsResponse {
  public S3FileUrlList $resource_links;
  public ReportType $report_type;
  public NextToken $next_token;
}

class Fields {
}

class ForceDeleteAWSJob {
}

class Percent {
}

class JobExecutionSummary {
  public JobExecutionStatus $status;
  public DateType $queued_at;
  public DateType $started_at;
  public DateType $last_updated_at;
  public ExecutionNumber $execution_number;
}

class OptionalVersion {
}

class OutgoingCertificates {
}

class RoleAliasArn {
}

class AuthorizerSummary {
  public AuthorizerName $authorizer_name;
  public AuthorizerArn $authorizer_arn;
}

class CreateAuthorizerRequest {
  public AuthorizerName $authorizer_name;
  public AuthorizerFunctionArn $authorizer_function_arn;
  public TokenKeyName $token_key_name;
  public PublicKeyMap $token_signing_public_keys;
  public AuthorizerStatus $status;
  public BooleanKey $signing_disabled;
}

class DeleteDynamicThingGroupResponse {
}

class DomainConfigurations {
}

class SigningProfileName {
}

class SigningProfileParameter {
  public CertificateArn $certificate_arn;
  public Platform $platform;
  public CertificatePathOnDevice $certificate_path_on_device;
}

class ThrottlingException {
  public errorMessage $message;
}

class UpdateAccountAuditConfigurationResponse {
}

class TagValue {
}

class PresignedUrlConfig {
  public RoleArn $role_arn;
  public ExpiresInSec $expires_in_sec;
}

class RateIncreaseCriteria {
  public NumberOfThings $number_of_succeeded_things;
  public NumberOfThings $number_of_notified_things;
}

class SalesforceToken {
}

class AuthInfo {
  public ActionType $action_type;
  public Resources $resources;
}

class JobExecutionSummaryForThing {
  public JobId $job_id;
  public JobExecutionSummary $job_execution_summary;
}

class ListTopicRulesResponse {
  public TopicRuleList $rules;
  public NextToken $next_token;
}

class MessageFormat {
}

class UpdateEventConfigurationsResponse {
}

class AbortThresholdPercentage {
}

class CreateOTAUpdateResponse {
  public OTAUpdateId $ota_update_id;
  public AwsIotJobId $aws_iot_job_id;
  public OTAUpdateArn $ota_update_arn;
  public AwsIotJobArn $aws_iot_job_arn;
  public OTAUpdateStatus $ota_update_status;
}

class DescribeDimensionRequest {
  public DimensionName $name;
}

class IotEventsAction {
  public InputName $input_name;
  public MessageId $message_id;
  public AwsArn $role_arn;
}

class PolicyTemplateName {
}

class CreateProvisioningTemplateRequest {
  public TagList $tags;
  public TemplateName $template_name;
  public TemplateDescription $description;
  public TemplateBody $template_body;
  public Enabled $enabled;
  public RoleArn $provisioning_role_arn;
}

class DeleteRegistrationCodeResponse {
}

class ListDomainConfigurationsResponse {
  public DomainConfigurations $domain_configurations;
  public Marker $next_marker;
}

class ListPoliciesResponse {
  public Policies $policies;
  public Marker $next_marker;
}

class CreateProvisioningTemplateVersionRequest {
  public TemplateName $template_name;
  public TemplateBody $template_body;
  public SetAsDefault $set_as_default;
}

class CreateSecurityProfileRequest {
  public SecurityProfileDescription $security_profile_description;
  public Behaviors $behaviors;
  public AlertTargets $alert_targets;
  public AdditionalMetricsToRetainList $additional_metrics_to_retain;
  public AdditionalMetricsToRetainV2List $additional_metrics_to_retain_v_2;
  public TagList $tags;
  public SecurityProfileName $security_profile_name;
}

class ListStreamsRequest {
  public NextToken $next_token;
  public AscendingOrder $ascending_order;
  public MaxResults $max_results;
}

class RoleAlias {
}

class resourceId {
}

class ClearDefaultAuthorizerRequest {
}

class DeleteOTAUpdateResponse {
}

class ForceDelete {
}

class RemoveThingFromBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public BillingGroupArn $billing_group_arn;
  public ThingName $thing_name;
  public ThingArn $thing_arn;
}

class ProvisioningTemplateListing {
}

class S3Bucket {
}

class Value {
}

class DynamoDBAction {
  public HashKeyField $hash_key_field;
  public RangeKeyField $range_key_field;
  public AwsArn $role_arn;
  public DynamoOperation $operation;
  public DynamoKeyType $hash_key_type;
  public RangeKeyValue $range_key_value;
  public DynamoKeyType $range_key_type;
  public PayloadField $payload_field;
  public TableName $table_name;
  public HashKeyValue $hash_key_value;
}

class Version {
}

class TaskStatisticsForAuditCheck {
  public SucceededFindingsCount $succeeded_findings_count;
  public SkippedFindingsCount $skipped_findings_count;
  public CanceledFindingsCount $canceled_findings_count;
  public TotalFindingsCount $total_findings_count;
  public FailedFindingsCount $failed_findings_count;
}

class ThingGroupArn {
}

class AuthorizerStatus {
}

class CreatePolicyResponse {
  public PolicyName $policy_name;
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyVersionId $policy_version_id;
}

class GetLoggingOptionsRequest {
}

class StreamDescription {
}

class DescribeSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
}

class Job {
  public JobId $job_id;
  public ReasonCode $reason_code;
  public Comment $comment;
  public JobArn $job_arn;
  public JobTargets $targets;
  public PresignedUrlConfig $presigned_url_config;
  public AbortConfig $abort_config;
  public DateType $last_updated_at;
  public DateType $completed_at;
  public JobProcessDetails $job_process_details;
  public Forced $force_canceled;
  public JobExecutionsRolloutConfig $job_executions_rollout_config;
  public TimeoutConfig $timeout_config;
  public TargetSelection $target_selection;
  public JobDescription $description;
  public DateType $created_at;
  public JobStatus $status;
}

class MitigationAction {
  public MitigationActionName $name;
  public MitigationActionId $id;
  public RoleArn $role_arn;
  public MitigationActionParams $action_params;
}

class SnsTopicArn {
}

class CACertificate {
  public DateType $creation_date;
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public CACertificateStatus $status;
}

class CreateScheduledAuditRequest {
  public AuditFrequency $frequency;
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public TargetAuditCheckNames $target_check_names;
  public ScheduledAuditName $scheduled_audit_name;
  public TagList $tags;
}

class DescribeProvisioningTemplateRequest {
  public TemplateName $template_name;
}

class KeyPair {
  public PublicKey $public_key;
  public PrivateKey $private_key;
}

class ApproximateSecondsBeforeTimedOut {
}

class DeleteBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public OptionalVersion $expected_version;
}

class MitigationActionName {
}

class Principal {
}

class GetPolicyResponse {
  public DateType $creation_date;
  public DateType $last_modified_date;
  public GenerationId $generation_id;
  public PolicyName $policy_name;
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyVersionId $default_version_id;
}

class ListTopicRulesRequest {
  public Topic $topic;
  public TopicRuleMaxResults $max_results;
  public NextToken $next_token;
  public IsDisabled $rule_disabled;
}

class LogTargetConfigurations {
}

class ThingDocumentList {
}

class AssetPropertyOffsetInNanos {
}

class AuthorizerFunctionArn {
}

class DescribeStreamRequest {
  public StreamId $stream_id;
}

class DomainType {
}

class CustomerVersion {
}

class DeleteAccountAuditConfigurationRequest {
  public DeleteScheduledAudits $delete_scheduled_audits;
}

class PolicyTarget {
}

class ListThingPrincipalsRequest {
  public ThingName $thing_name;
}

class Port {
}

class ThingTypeArn {
}

class WaitingForDataCollectionChecksCount {
}

class DescribeAuditFindingRequest {
  public FindingId $finding_id;
}

class KeyValue {
}

class LaserMaxResults {
}

class ListScheduledAuditsResponse {
  public ScheduledAuditMetadataList $scheduled_audits;
  public NextToken $next_token;
}

class PolicyName {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class TopicPattern {
}

class DescribeDomainConfigurationResponse {
  public ServiceType $service_type;
  public DomainType $domain_type;
  public ReservedDomainConfigurationName $domain_configuration_name;
  public DomainConfigurationArn $domain_configuration_arn;
  public DomainName $domain_name;
  public ServerCertificates $server_certificates;
  public AuthorizerConfig $authorizer_config;
  public DomainConfigurationStatus $domain_configuration_status;
}

class DescribeEndpointRequest {
  public EndpointType $endpoint_type;
}

class MitigationActionParams {
  public EnableIoTLoggingParams $enable_io_t_logging_params;
  public PublishFindingToSnsParams $publish_finding_to_sns_params;
  public UpdateDeviceCertificateParams $update_device_certificate_params;
  public UpdateCACertificateParams $update_ca_certificate_params;
  public AddThingsToThingGroupParams $add_things_to_thing_group_params;
  public ReplaceDefaultPolicyVersionParams $replace_default_policy_version_params;
}

class ReasonForNonCompliance {
}

class SalesforceEndpoint {
}

class CreateThingTypeResponse {
  public ThingTypeId $thing_type_id;
  public ThingTypeName $thing_type_name;
  public ThingTypeArn $thing_type_arn;
}

class DayOfMonth {
}

class LimitExceededException {
  public errorMessage $message;
}

class ListProvisioningTemplatesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DeleteThingTypeResponse {
}

class RoleAliasDescription {
  public RoleAlias $role_alias;
  public RoleAliasArn $role_alias_arn;
  public RoleArn $role_arn;
  public AwsAccountId $owner;
  public CredentialDurationSeconds $credential_duration_seconds;
  public DateType $creation_date;
  public DateType $last_modified_date;
}

class UpdateAuthorizerRequest {
  public TokenKeyName $token_key_name;
  public PublicKeyMap $token_signing_public_keys;
  public AuthorizerStatus $status;
  public AuthorizerName $authorizer_name;
  public AuthorizerFunctionArn $authorizer_function_arn;
}

class FailedThings {
}

class SearchIndexRequest {
  public IndexName $index_name;
  public QueryString $query_string;
  public NextToken $next_token;
  public QueryMaxResults $max_results;
  public QueryVersion $query_version;
}

class CACertificateUpdateAction {
}

class CreateDomainConfigurationRequest {
  public DomainConfigurationName $domain_configuration_name;
  public DomainName $domain_name;
  public ServerCertificateArns $server_certificate_arns;
  public AcmCertificateArn $validation_certificate_arn;
  public AuthorizerConfig $authorizer_config;
  public ServiceType $service_type;
}

class DateType {
}

class DescribeJobExecutionRequest {
  public ThingName $thing_name;
  public ExecutionNumber $execution_number;
  public JobId $job_id;
}

class AwsIotJobArn {
}

class ExecutionNumber {
}

class RegisterCACertificateResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
}

class Seconds {
}

class ThingName {
}

class IndexNotReadyException {
  public errorMessage $message;
}

class InvalidAggregationException {
  public errorMessage $message;
}

class ListPoliciesRequest {
  public PageSize $page_size;
  public AscendingOrder $ascending_order;
  public Marker $marker;
}

class Qos {
}

class VersionsLimitExceededException {
  public errorMessage $message;
}

class ClearDefaultAuthorizerResponse {
}

class EffectivePolicies {
}

class ErrorInfo {
  public Code $code;
  public OTAUpdateErrorMessage $message;
}

class InvalidQueryException {
  public errorMessage $message;
}

class DomainConfigurationSummary {
  public ReservedDomainConfigurationName $domain_configuration_name;
  public DomainConfigurationArn $domain_configuration_arn;
  public ServiceType $service_type;
}

class OutgoingCertificate {
  public DateType $transfer_date;
  public Message $transfer_message;
  public DateType $creation_date;
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
  public AwsAccountId $transferred_to;
}

class PageSize {
}

class TargetSelection {
}

class AuthorizerArn {
}

class MetricToRetain {
  public BehaviorMetric $metric;
  public MetricDimension $metric_dimension;
}

class PrincipalArn {
}

class UpdateStreamRequest {
  public StreamDescription $description;
  public StreamFiles $files;
  public RoleArn $role_arn;
  public StreamId $stream_id;
}

class Protocol {
}

class ActiveViolations {
}

class CreateMitigationActionRequest {
  public MitigationActionName $action_name;
  public RoleArn $role_arn;
  public MitigationActionParams $action_params;
  public TagList $tags;
}

class MitigationActionList {
}

class Ports {
}

class DeprecateThingTypeResponse {
}

class ListPolicyVersionsResponse {
  public PolicyVersions $policy_versions;
}

class PrincipalId {
}

class TopicRuleMaxResults {
}

class ListCertificatesResponse {
  public Certificates $certificates;
  public Marker $next_marker;
}

class AbortCriteria {
  public AbortThresholdPercentage $threshold_percentage;
  public MinimumNumberOfExecutedThings $min_number_of_executed_things;
  public JobExecutionFailureType $failure_type;
  public AbortAction $action;
}

class DeleteDimensionRequest {
  public DimensionName $name;
}

class DeleteRoleAliasResponse {
}

class DynamoOperation {
}

class ActionType {
}

class DeleteScheduledAuditRequest {
  public ScheduledAuditName $scheduled_audit_name;
}

class ThingGroupId {
}

class ThingTypeDefinition {
  public ThingTypeMetadata $thing_type_metadata;
  public ThingTypeName $thing_type_name;
  public ThingTypeArn $thing_type_arn;
  public ThingTypeProperties $thing_type_properties;
}

class AuthDecision {
}

class Minimum {
}

class AttributePayload {
  public Attributes $attributes;
  public Flag $merge;
}

class Boolean {
}

class ExplicitDeny {
  public Policies $policies;
}

class SkyfallMaxResults {
}

class PutItemInput {
  public TableName $table_name;
}

class Sum {
}

class RoleAliases {
}

class AssociateTargetsWithJobRequest {
  public Comment $comment;
  public JobTargets $targets;
  public JobId $job_id;
}

class DisableAllLogs {
}

class ExpectedVersion {
}

class RegistryS3BucketName {
}

class TransferCertificateResponse {
  public CertificateArn $transferred_certificate_arn;
}

class BillingGroupDescription {
}

class HeaderKey {
}

class HeaderList {
}

class HttpHeaders {
}

class JobId {
}

class TargetArn {
}

class AssetPropertyDoubleValue {
}

class AuditFindings {
}

class CreateStreamResponse {
  public StreamId $stream_id;
  public StreamArn $stream_arn;
  public StreamDescription $description;
  public StreamVersion $stream_version;
}

class DeleteAuthorizerRequest {
  public AuthorizerName $authorizer_name;
}

class DeleteThingTypeRequest {
  public ThingTypeName $thing_type_name;
}

class ListCertificatesRequest {
  public PageSize $page_size;
  public Marker $marker;
  public AscendingOrder $ascending_order;
}

class JobExecutionSummaryForJobList {
}

class ListViolationEventsResponse {
  public NextToken $next_token;
  public ViolationEvents $violation_events;
}

class AddThingToThingGroupRequest {
  public OverrideDynamicGroups $override_dynamic_groups;
  public ThingGroupName $thing_group_name;
  public ThingGroupArn $thing_group_arn;
  public ThingName $thing_name;
  public ThingArn $thing_arn;
}

class AttributeValue {
}

class Behavior {
  public BehaviorMetric $metric;
  public MetricDimension $metric_dimension;
  public BehaviorCriteria $criteria;
  public BehaviorName $name;
}

class Cidrs {
}

class MitigationActionId {
}

class SecurityProfileDescription {
}

class EventConfigurations {
}

class RemoveAuthorizerConfig {
}

class AlarmName {
}

class BillingGroupArn {
}

class DescribeAuditMitigationActionsTaskRequest {
  public AuditMitigationActionsTaskId $task_id;
}

class ElasticsearchAction {
  public ElasticsearchIndex $index;
  public ElasticsearchType $type;
  public ElasticsearchId $id;
  public AwsArn $role_arn;
  public ElasticsearchEndpoint $endpoint;
}

class Code {
}

class DeleteStreamRequest {
  public StreamId $stream_id;
}

class DimensionName {
}

class DeleteConflictException {
  public errorMessage $message;
}

class DetachThingPrincipalRequest {
  public ThingName $thing_name;
  public Principal $principal;
}

class GetTopicRuleRequest {
  public RuleName $rule_name;
}

class ListAuditFindingsRequest {
  public AuditTaskId $task_id;
  public AuditCheckName $check_name;
  public ResourceIdentifier $resource_identifier;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Timestamp $start_time;
  public Timestamp $end_time;
}

class AssetPropertyTimeInSeconds {
}

class AuditCheckToActionsMapping {
}

class CodeSigning {
  public SigningJobId $aws_signer_job_id;
  public StartSigningJobParameter $start_signing_job_parameter;
  public CustomCodeSigning $custom_code_signing;
}

class CreateKeysAndCertificateRequest {
  public SetAsActive $set_as_active;
}

class TemplateArn {
}

class UpdateAuthorizerResponse {
  public AuthorizerName $authorizer_name;
  public AuthorizerArn $authorizer_arn;
}

class UpdateSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
  public Behaviors $behaviors;
  public AlertTargets $alert_targets;
  public DeleteBehaviors $delete_behaviors;
  public DeleteAlertTargets $delete_alert_targets;
  public DeleteAdditionalMetricsToRetain $delete_additional_metrics_to_retain;
  public SecurityProfileDescription $security_profile_description;
  public AdditionalMetricsToRetainList $additional_metrics_to_retain;
  public AdditionalMetricsToRetainV2List $additional_metrics_to_retain_v_2;
  public OptionalVersion $expected_version;
}

class AggregationField {
}

class CancelAuditTaskResponse {
}

class IndexSchema {
}

class MqttUsername {
}

class AdditionalMetricsToRetainList {
}

class AwsIotJobId {
}

class ErrorMessage {
}

class UpdateTopicRuleDestinationResponse {
}

class AuditFrequency {
}

class DeleteCACertificateResponse {
}

class DomainName {
}

class ProcessingTargetNameList {
}

class ListThingGroupsRequest {
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
  public ThingGroupName $parent_group;
  public ThingGroupName $name_prefix_filter;
  public RecursiveWithoutDefault $recursive;
}

class CreateTopicRuleDestinationRequest {
  public TopicRuleDestinationConfiguration $destination_configuration;
}

class DeleteScheduledAuditResponse {
}

class InvalidRequestException {
  public errorMessage $message;
}

class KinesisAction {
  public AwsArn $role_arn;
  public StreamName $stream_name;
  public PartitionKey $partition_key;
}

class ListMitigationActionsResponse {
  public MitigationActionIdentifierList $action_identifiers;
  public NextToken $next_token;
}

class ResourceLogicalId {
}

class UpdateDynamicThingGroupRequest {
  public ThingGroupName $thing_group_name;
  public ThingGroupProperties $thing_group_properties;
  public OptionalVersion $expected_version;
  public IndexName $index_name;
  public QueryString $query_string;
  public QueryVersion $query_version;
}

class ViolationId {
}

class IndexStatus {
}

class Maximum {
}

class Platform {
}

class ThingAttributeList {
}

class AuditMitigationActionsExecutionStatus {
}

class CreateTopicRuleRequest {
  public TopicRulePayload $topic_rule_payload;
  public string $tags;
  public RuleName $rule_name;
}

class DescribeAuthorizerRequest {
  public AuthorizerName $authorizer_name;
}

class GetJobDocumentResponse {
  public JobDocument $document;
}

class ErrorCode {
}

class FirehoseAction {
  public DeliveryStreamName $delivery_stream_name;
  public FirehoseSeparator $separator;
  public AwsArn $role_arn;
}

class MitigationActionIdentifier {
  public MitigationActionArn $action_arn;
  public Timestamp $creation_date;
  public MitigationActionName $action_name;
}

class RejectCertificateTransferRequest {
  public CertificateId $certificate_id;
  public Message $reject_reason;
}

class PayloadField {
}

class ReasonForNonComplianceCode {
}

class Certificates {
}

class ListPrincipalPoliciesResponse {
  public Policies $policies;
  public Marker $next_marker;
}

class ListThingRegistrationTasksRequest {
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
  public Status $status;
}

class PolicyNames {
}

class ListTargetsForPolicyRequest {
  public PolicyName $policy_name;
  public Marker $marker;
  public PageSize $page_size;
}

class ThingGroupDescription {
}

class OTAUpdateInfo {
  public OTAUpdateArn $ota_update_arn;
  public OTAUpdateDescription $description;
  public Targets $targets;
  public ErrorInfo $error_info;
  public AwsJobExecutionsRolloutConfig $aws_job_executions_rollout_config;
  public AwsJobPresignedUrlConfig $aws_job_presigned_url_config;
  public OTAUpdateFiles $ota_update_files;
  public AwsIotJobId $aws_iot_job_id;
  public OTAUpdateId $ota_update_id;
  public OTAUpdateStatus $ota_update_status;
  public DateType $creation_date;
  public DateType $last_modified_date;
  public Protocols $protocols;
  public TargetSelection $target_selection;
  public AwsIotJobArn $aws_iot_job_arn;
  public AdditionalParameterMap $additional_parameters;
}

class Resource {
}

class DescribeCertificateRequest {
  public CertificateId $certificate_id;
}

class DetachSecurityProfileRequest {
  public SecurityProfileName $security_profile_name;
  public SecurityProfileTargetArn $security_profile_target_arn;
}

class JobExecutionStatusDetails {
  public DetailsMap $details_map;
}

class JobSummary {
  public JobStatus $status;
  public DateType $created_at;
  public DateType $last_updated_at;
  public DateType $completed_at;
  public JobArn $job_arn;
  public JobId $job_id;
  public ThingGroupId $thing_group_id;
  public TargetSelection $target_selection;
}

class CancelAuditMitigationActionsTaskRequest {
  public AuditMitigationActionsTaskId $task_id;
}

class CancelJobExecutionRequest {
  public JobId $job_id;
  public ThingName $thing_name;
  public ForceFlag $force;
  public ExpectedVersion $expected_version;
  public DetailsMap $status_details;
}

class CertificateArn {
}

class OTAUpdateFiles {
}

class UpdateThingGroupResponse {
  public Version $version;
}

class CognitoIdentityPoolId {
}

class DescribeAuthorizerResponse {
  public AuthorizerDescription $authorizer_description;
}

class LogLevel {
}

class UpdateProvisioningTemplateRequest {
  public Enabled $enabled;
  public TemplateVersionId $default_version_id;
  public RoleArn $provisioning_role_arn;
  public TemplateName $template_name;
  public TemplateDescription $description;
}

class Allowed {
  public Policies $policies;
}

class AuditCheckDetails {
  public CheckCompliant $check_compliant;
  public TotalResourcesCount $total_resources_count;
  public NonCompliantResourcesCount $non_compliant_resources_count;
  public ErrorCode $error_code;
  public ErrorMessage $message;
  public AuditCheckRunStatus $check_run_status;
}

class AuditCheckToReasonCodeFilter {
}

class GetEffectivePoliciesRequest {
  public Principal $principal;
  public CognitoIdentityPoolId $cognito_identity_pool_id;
  public ThingName $thing_name;
}

class TemplateBody {
}

class AssociateTargetsWithJobResponse {
  public JobArn $job_arn;
  public JobId $job_id;
  public JobDescription $description;
}

class AuditNotificationTargetConfigurations {
}

class AuditTaskStatus {
}

class RelatedResources {
}

class UpdateDeviceCertificateParams {
  public DeviceCertificateUpdateAction $action;
}

class Action {
  public DynamoDBv2Action $dynamo_d_bv_2;
  public KinesisAction $kinesis;
  public SalesforceAction $salesforce;
  public IotEventsAction $iot_events;
  public LambdaAction $lambda;
  public S3Action $s_3;
  public CloudwatchAlarmAction $cloudwatch_alarm;
  public CloudwatchLogsAction $cloudwatch_logs;
  public ElasticsearchAction $elasticsearch;
  public IotAnalyticsAction $iot_analytics;
  public IotSiteWiseAction $iot_site_wise;
  public StepFunctionsAction $step_functions;
  public SnsAction $sns;
  public SqsAction $sqs;
  public RepublishAction $republish;
  public FirehoseAction $firehose;
  public DynamoDBAction $dynamo_db;
  public CloudwatchMetricAction $cloudwatch_metric;
  public HttpAction $http;
}

class Flag {
}

class OTAUpdateErrorMessage {
}

class S3Location {
  public S3Key $key;
  public S3Version $version;
  public S3Bucket $bucket;
}

class ListAttachedPoliciesRequest {
  public PolicyTarget $target;
  public Recursive $recursive;
  public Marker $marker;
  public PageSize $page_size;
}

class RepublishAction {
  public AwsArn $role_arn;
  public TopicPattern $topic;
  public Qos $qos;
}

class StreamId {
}

class GetIndexingConfigurationRequest {
}

class OverrideDynamicGroups {
}

class QueryString {
}

class TestAuthorizationResponse {
  public AuthResults $auth_results;
}

class AssetPropertyValue {
  public AssetPropertyVariant $value;
  public AssetPropertyTimestamp $timestamp;
  public AssetPropertyQuality $quality;
}

class DeleteDomainConfigurationResponse {
}

class DeleteTopicRuleRequest {
  public RuleName $rule_name;
}

class DescribeJobResponse {
  public JobDocumentSource $document_source;
  public Job $job;
}

class ThingAttribute {
  public Version $version;
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;
  public ThingArn $thing_arn;
  public Attributes $attributes;
}

class AuthResult {
  public AuthInfo $auth_info;
  public Allowed $allowed;
  public Denied $denied;
  public AuthDecision $auth_decision;
  public MissingContextValues $missing_context_values;
}

class DeleteDimensionResponse {
}

class DescribeEndpointResponse {
  public EndpointAddress $endpoint_address;
}

class SucceededThings {
}

class AutoRegistrationStatus {
}

class ListTopicRuleDestinationsRequest {
  public TopicRuleDestinationMaxResults $max_results;
  public NextToken $next_token;
}

class StopThingRegistrationTaskRequest {
  public TaskId $task_id;
}

class EnableTopicRuleRequest {
  public RuleName $rule_name;
}

class FunctionArn {
}

class IsAuthenticated {
}

class TlsContext {
  public ServerName $server_name;
}

class DeleteAuthorizerResponse {
}

class PutAssetPropertyValueEntry {
  public AssetPropertyEntryId $entry_id;
  public AssetId $asset_id;
  public AssetPropertyId $property_id;
  public AssetPropertyAlias $property_alias;
  public AssetPropertyValueList $property_values;
}

class UpdateIndexingConfigurationRequest {
  public ThingIndexingConfiguration $thing_indexing_configuration;
  public ThingGroupIndexingConfiguration $thing_group_indexing_configuration;
}

class AuthorizerDescription {
  public AuthorizerFunctionArn $authorizer_function_arn;
  public TokenKeyName $token_key_name;
  public PublicKeyMap $token_signing_public_keys;
  public AuthorizerStatus $status;
  public DateType $last_modified_date;
  public AuthorizerName $authorizer_name;
  public AuthorizerArn $authorizer_arn;
  public DateType $creation_date;
  public BooleanKey $signing_disabled;
}

class CreateProvisioningClaimRequest {
  public TemplateName $template_name;
}

class DescribeThingRequest {
  public ThingName $thing_name;
}

class MissingContextValues {
}

class CreateBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public BillingGroupProperties $billing_group_properties;
  public TagList $tags;
}

class DeliveryStreamName {
}

class DescribeAuditMitigationActionsTaskResponse {
  public AuditMitigationActionsTaskTarget $target;
  public AuditCheckToActionsMapping $audit_check_to_actions_mapping;
  public MitigationActionList $actions_definition;
  public AuditMitigationActionsTaskStatus $task_status;
  public Timestamp $start_time;
  public Timestamp $end_time;
  public AuditMitigationActionsTaskStatistics $task_statistics;
}

class GetTopicRuleResponse {
  public RuleArn $rule_arn;
  public TopicRule $rule;
}

class BillingGroupProperties {
  public BillingGroupDescription $billing_group_description;
}

class ProcessingTargetName {
}

class ProvisioningTemplateVersionSummary {
  public TemplateVersionId $version_id;
  public DateType $creation_date;
  public IsDefaultVersion $is_default_version;
}

class ReservedDomainConfigurationName {
}

class AdditionalParameterMap {
}

class DescribeEventConfigurationsRequest {
}

class GetOTAUpdateRequest {
  public OTAUpdateId $ota_update_id;
}

class SetV2LoggingOptionsRequest {
  public LogLevel $default_log_level;
  public DisableAllLogs $disable_all_logs;
  public AwsArn $role_arn;
}

class TestAuthorizationRequest {
  public Principal $principal;
  public CognitoIdentityPoolId $cognito_identity_pool_id;
  public AuthInfos $auth_infos;
  public ClientId $client_id;
  public PolicyNames $policy_names_to_add;
  public PolicyNames $policy_names_to_skip;
}

class AuditTaskId {
}

class DescribeCertificateResponse {
  public CertificateDescription $certificate_description;
}

class DescribeScheduledAuditRequest {
  public ScheduledAuditName $scheduled_audit_name;
}

class MessageId {
}

class BillingGroupMetadata {
  public CreationDate $creation_date;
}

class ListOutgoingCertificatesResponse {
  public OutgoingCertificates $outgoing_certificates;
  public Marker $next_marker;
}

class RoleArn {
}

class CreateThingResponse {
  public ThingName $thing_name;
  public ThingArn $thing_arn;
  public ThingId $thing_id;
}

class ElasticsearchEndpoint {
}

class ListViolationEventsRequest {
  public Timestamp $start_time;
  public Timestamp $end_time;
  public DeviceDefenderThingName $thing_name;
  public SecurityProfileName $security_profile_name;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class UnsignedLong {
}

class AllowAutoRegistration {
}

class Cidr {
}

class AscendingOrder {
}

class CreateThingRequest {
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;
  public AttributePayload $attribute_payload;
  public BillingGroupName $billing_group_name;
}

class DeleteThingResponse {
}

class TopicRuleDestinationConfiguration {
  public HttpUrlDestinationConfiguration $http_url_configuration;
}

class AddThingToBillingGroupResponse {
}

class AwsJobPresignedUrlConfig {
  public ExpiresInSeconds $expires_in_sec;
}

class Description {
}

class Statistics {
  public Minimum $minimum;
  public Maximum $maximum;
  public SumOfSquares $sum_of_squares;
  public Variance $variance;
  public StdDeviation $std_deviation;
  public Count $count;
  public Average $average;
  public Sum $sum;
}

class TemplateDescription {
}

class CreateBillingGroupResponse {
  public BillingGroupId $billing_group_id;
  public BillingGroupName $billing_group_name;
  public BillingGroupArn $billing_group_arn;
}

class InternalException {
  public errorMessage $message;
}

class Message {
}

class PublicKey {
}

class AuditCheckConfigurations {
}

class AuditTaskMetadata {
  public AuditTaskId $task_id;
  public AuditTaskStatus $task_status;
  public AuditTaskType $task_type;
}

class HttpUrlDestinationConfiguration {
  public Url $confirmation_url;
}

class ThingTypeProperties {
  public ThingTypeDescription $thing_type_description;
  public SearchableAttributes $searchable_attributes;
}

class LogTargetType {
}

class PublishFindingToSnsParams {
  public SnsTopicArn $topic_arn;
}

class ThingConnectivity {
  public boolean $connected;
  public ConnectivityTimestamp $timestamp;
}

class ThingGroupProperties {
  public ThingGroupDescription $thing_group_description;
  public AttributePayload $attribute_payload;
}

class BucketName {
}

class DeleteRoleAliasRequest {
  public RoleAlias $role_alias;
}

class InProgressTimeoutInMinutes {
}

class ListDimensionsResponse {
  public DimensionNames $dimension_names;
  public NextToken $next_token;
}

class ThingTypeList {
}

class DeleteAdditionalMetricsToRetain {
}

class JobExecutionFailureType {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class SecurityProfileTargets {
}

class InputName {
}

class CACertificateDescription {
  public CertificateId $certificate_id;
  public CustomerVersion $customer_version;
  public DateType $creation_date;
  public AutoRegistrationStatus $auto_registration_status;
  public DateType $last_modified_date;
  public GenerationId $generation_id;
  public CertificateArn $certificate_arn;
  public CACertificateStatus $status;
  public CertificatePem $certificate_pem;
  public AwsAccountId $owned_by;
  public CertificateValidity $validity;
}

class JsonDocument {
}

class SetAsActiveFlag {
}

class DeleteScheduledAudits {
}

class SalesforceAction {
  public SalesforceToken $token;
  public SalesforceEndpoint $url;
}

class AssetPropertyEntryId {
}

class CloudwatchLogsAction {
  public LogGroupName $log_group_name;
  public AwsArn $role_arn;
}

class S3Version {
}

class ThingIndexingConfiguration {
  public ThingIndexingMode $thing_indexing_mode;
  public ThingConnectivityIndexingMode $thing_connectivity_indexing_mode;
  public Fields $managed_fields;
  public Fields $custom_fields;
}

class CreateSecurityProfileResponse {
  public SecurityProfileName $security_profile_name;
  public SecurityProfileArn $security_profile_arn;
}

class PercentList {
}

class RegistryS3KeyName {
}

class DescribeThingResponse {
  public Attributes $attributes;
  public Version $version;
  public BillingGroupName $billing_group_name;
  public ClientId $default_client_id;
  public ThingName $thing_name;
  public ThingId $thing_id;
  public ThingArn $thing_arn;
  public ThingTypeName $thing_type_name;
}

class JobStatus {
}

class ListPrincipalThingsRequest {
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
  public Principal $principal;
}

class Policies {
}

class AuditFindingSeverity {
}

class ScheduledAuditMetadata {
  public AuditFrequency $frequency;
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public ScheduledAuditName $scheduled_audit_name;
  public ScheduledAuditArn $scheduled_audit_arn;
}

class TokenSignature {
}

class BehaviorMetric {
}

class DeleteThingGroupResponse {
}

class DescribeMitigationActionRequest {
  public MitigationActionName $action_name;
}

class ListProvisioningTemplateVersionsResponse {
  public ProvisioningTemplateVersionListing $versions;
  public NextToken $next_token;
}

class GetTopicRuleDestinationRequest {
  public AwsArn $arn;
}

class ListThingRegistrationTaskReportsRequest {
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
  public TaskId $task_id;
  public ReportType $report_type;
}

class ListThingsResponse {
  public ThingAttributeList $things;
  public NextToken $next_token;
}

class LoggingOptionsPayload {
  public AwsArn $role_arn;
  public LogLevel $log_level;
}

class TransferCertificateRequest {
  public AwsAccountId $target_aws_account;
  public Message $transfer_message;
  public CertificateId $certificate_id;
}

class CreateJobRequest {
  public JobTargets $targets;
  public JobDocumentSource $document_source;
  public JobDescription $description;
  public PresignedUrlConfig $presigned_url_config;
  public JobExecutionsRolloutConfig $job_executions_rollout_config;
  public TimeoutConfig $timeout_config;
  public TagList $tags;
  public JobId $job_id;
  public JobDocument $document;
  public TargetSelection $target_selection;
  public AbortConfig $abort_config;
}

class CreateTopicRuleDestinationResponse {
  public TopicRuleDestination $topic_rule_destination;
}

class DomainConfigurationName {
}

class S3FileUrl {
}

class SigningJobId {
}

class TaskIdList {
}

class BillingGroupName {
}

class ListJobExecutionsForJobRequest {
  public JobId $job_id;
  public JobExecutionStatus $status;
  public LaserMaxResults $max_results;
  public NextToken $next_token;
}

class PolicyVersion {
  public PolicyVersionId $version_id;
  public IsDefaultVersion $is_default_version;
  public DateType $create_date;
}

class ScheduledAuditMetadataList {
}

class DeleteMitigationActionRequest {
  public MitigationActionName $action_name;
}

class ResourceIdentifier {
  public RoleArn $iam_role_arn;
  public RoleAliasArn $role_alias_arn;
  public CertificateId $device_certificate_id;
  public CertificateId $ca_certificate_id;
  public CognitoIdentityPoolId $cognito_identity_pool_id;
  public ClientId $client_id;
  public PolicyVersionIdentifier $policy_version_identifier;
  public AwsAccountId $account;
}

class ListAuditTasksRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public Timestamp $start_time;
  public Timestamp $end_time;
  public AuditTaskType $task_type;
  public AuditTaskStatus $task_status;
}

class StreamName {
}

class CreatePolicyVersionResponse {
  public PolicyArn $policy_arn;
  public PolicyDocument $policy_document;
  public PolicyVersionId $policy_version_id;
  public IsDefaultVersion $is_default_version;
}

class GetOTAUpdateResponse {
  public OTAUpdateInfo $ota_update_info;
}

class HashKeyField {
}

class ImplicitDeny {
  public Policies $policies;
}

class AbortAction {
}

class AttachThingPrincipalRequest {
  public Principal $principal;
  public ThingName $thing_name;
}

class HttpQueryString {
}

class TaskStatistics {
  public CanceledChecksCount $canceled_checks;
  public TotalChecksCount $total_checks;
  public InProgressChecksCount $in_progress_checks;
  public WaitingForDataCollectionChecksCount $waiting_for_data_collection_checks;
  public CompliantChecksCount $compliant_checks;
  public NonCompliantChecksCount $non_compliant_checks;
  public FailedChecksCount $failed_checks;
}

class LogTargetConfiguration {
  public LogTarget $log_target;
  public LogLevel $log_level;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class UpdateDomainConfigurationResponse {
  public ReservedDomainConfigurationName $domain_configuration_name;
  public DomainConfigurationArn $domain_configuration_arn;
}

class UpdateMitigationActionRequest {
  public MitigationActionName $action_name;
  public RoleArn $role_arn;
  public MitigationActionParams $action_params;
}

class AttributeName {
}

class RegisterThingRequest {
  public TemplateBody $template_body;
  public Parameters $parameters;
}

class ThingDocument {
  public ThingConnectivity $connectivity;
  public ThingName $thing_name;
  public ThingId $thing_id;
  public ThingTypeName $thing_type_name;
  public ThingGroupNameList $thing_group_names;
  public Attributes $attributes;
  public JsonDocument $shadow;
}

class UpdateBillingGroupRequest {
  public BillingGroupName $billing_group_name;
  public BillingGroupProperties $billing_group_properties;
  public OptionalVersion $expected_version;
}

class ConsecutiveDatapointsToAlarm {
}

class DeleteProvisioningTemplateVersionResponse {
}

class ResourceArn {
}

class SecurityProfileTargetArn {
}

class DeleteDomainConfigurationRequest {
  public DomainConfigurationName $domain_configuration_name;
}

class TopicRuleList {
}

class CreatePolicyRequest {
  public PolicyName $policy_name;
  public PolicyDocument $policy_document;
}

class FindingIds {
}

class ThingGroupList {
}

class ThingTypeMetadata {
  public boolean $deprecated;
  public DeprecationDate $deprecation_date;
  public CreationDate $creation_date;
}

class ViolationEvent {
  public MetricValue $metric_value;
  public ViolationEventType $violation_event_type;
  public Timestamp $violation_event_time;
  public ViolationId $violation_id;
  public DeviceDefenderThingName $thing_name;
  public SecurityProfileName $security_profile_name;
  public Behavior $behavior;
}

class ReplaceDefaultPolicyVersionParams {
  public PolicyTemplateName $template_name;
}

class StateValue {
}

class TagKeyList {
}

class ThingGroupIndexingMode {
}

class StateReason {
}

class AddThingToThingGroupResponse {
}

class DescribeAuditFindingResponse {
  public AuditFinding $finding;
}

class GenerationId {
}

class SetAsActive {
}

class DeleteV2LoggingLevelRequest {
  public LogTargetType $target_type;
  public LogTargetName $target_name;
}

class Destination {
  public S3Destination $s_3_destination;
}

class ServiceName {
}

class UpdateEventConfigurationsRequest {
  public EventConfigurations $event_configurations;
}

class Behaviors {
}

class CanceledFindingsCount {
}

class Token {
}

class ValidationError {
  public ErrorMessage $error_message;
}

class CreateRoleAliasResponse {
  public RoleAlias $role_alias;
  public RoleAliasArn $role_alias_arn;
}

class DeleteAlertTargets {
}

class TopicRuleDestinationStatus {
}

class UpdateStreamResponse {
  public StreamId $stream_id;
  public StreamArn $stream_arn;
  public StreamDescription $description;
  public StreamVersion $stream_version;
}

class ListActiveViolationsResponse {
  public ActiveViolations $active_violations;
  public NextToken $next_token;
}

class SignatureAlgorithm {
}

class AuditFinding {
  public AuditCheckName $check_name;
  public Timestamp $task_start_time;
  public RelatedResources $related_resources;
  public ReasonForNonCompliance $reason_for_non_compliance;
  public AuditTaskId $task_id;
  public Timestamp $finding_time;
  public AuditFindingSeverity $severity;
  public NonCompliantResource $non_compliant_resource;
  public ReasonForNonComplianceCode $reason_for_non_compliance_code;
  public FindingId $finding_id;
}

class ListCACertificatesResponse {
  public CACertificates $certificates;
  public Marker $next_marker;
}

class ListSecurityProfilesForTargetRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public Recursive $recursive;
  public SecurityProfileTargetArn $security_profile_target_arn;
}

class MalformedPolicyException {
  public errorMessage $message;
}

class SetAsDefault {
}

class TestInvokeAuthorizerRequest {
  public AuthorizerName $authorizer_name;
  public Token $token;
  public TokenSignature $token_signature;
  public HttpContext $http_context;
  public MqttContext $mqtt_context;
  public TlsContext $tls_context;
}

class ThingGroupNameList {
}

class DeletePolicyVersionRequest {
  public PolicyName $policy_name;
  public PolicyVersionId $policy_version_id;
}

class MaximumPerMinute {
}

class NonCompliantResource {
  public StringMap $additional_info;
  public ResourceType $resource_type;
  public ResourceIdentifier $resource_identifier;
}

class ReportType {
}

class AuthInfos {
}

class DescribeAuditTaskRequest {
  public AuditTaskId $task_id;
}

class UpdateThingGroupsForThingRequest {
  public ThingGroupList $thing_groups_to_add;
  public ThingGroupList $thing_groups_to_remove;
  public OverrideDynamicGroups $override_dynamic_groups;
  public ThingName $thing_name;
}

class MetricValue {
  public UnsignedLong $count;
  public Cidrs $cidrs;
  public Ports $ports;
}

class PolicyTargets {
}

class SQL {
}

class StreamSummary {
  public StreamVersion $stream_version;
  public StreamDescription $description;
  public StreamId $stream_id;
  public StreamArn $stream_arn;
}

class S3Key {
}

class DescribeThingGroupRequest {
  public ThingGroupName $thing_group_name;
}

class EnableIoTLoggingParams {
  public RoleArn $role_arn_for_logging;
  public LogLevel $log_level;
}

class ListActiveViolationsRequest {
  public DeviceDefenderThingName $thing_name;
  public SecurityProfileName $security_profile_name;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class QueryVersion {
}

class CertificateStatus {
}

class LogTargetName {
}

class CreateScheduledAuditResponse {
  public ScheduledAuditArn $scheduled_audit_arn;
}

class ListIndicesRequest {
  public NextToken $next_token;
  public QueryMaxResults $max_results;
}

class ServerName {
}

class Timestamp {
}

class DeleteBillingGroupResponse {
}

class Key {
}

class TableName {
}

class TopicRule {
  public CreatedAtDate $created_at;
  public ActionList $actions;
  public IsDisabled $rule_disabled;
  public AwsIotSqlVersion $aws_iot_sql_version;
  public Action $error_action;
  public RuleName $rule_name;
  public SQL $sql;
  public Description $description;
}

class CertificateId {
}

class ListPolicyPrincipalsResponse {
  public Principals $principals;
  public Marker $next_marker;
}

class RegistryMaxResults {
}

class SecurityProfileArn {
}

class GetV2LoggingOptionsResponse {
  public AwsArn $role_arn;
  public LogLevel $default_log_level;
  public DisableAllLogs $disable_all_logs;
}

class NumberOfThings {
}

class ThingNameList {
}

class UpdateCACertificateRequest {
  public CertificateId $certificate_id;
  public CACertificateStatus $new_status;
  public AutoRegistrationStatus $new_auto_registration_status;
  public RegistrationConfig $registration_config;
  public RemoveAutoRegistration $remove_auto_registration;
}

class AssetPropertyBooleanValue {
}

class CreateProvisioningTemplateResponse {
  public TemplateArn $template_arn;
  public TemplateName $template_name;
  public TemplateVersionId $default_version_id;
}

class DeprecationDate {
}

class DescribeJobExecutionResponse {
  public JobExecution $execution;
}

class AssetPropertyVariant {
  public AssetPropertyDoubleValue $double_value;
  public AssetPropertyBooleanValue $boolean_value;
  public AssetPropertyStringValue $string_value;
  public AssetPropertyIntegerValue $integer_value;
}

class CertificateSigningRequest {
}

class GetPercentilesRequest {
  public IndexName $index_name;
  public QueryString $query_string;
  public AggregationField $aggregation_field;
  public QueryVersion $query_version;
  public PercentList $percents;
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
  public resourceId $resource_id;
  public resourceArn $resource_arn;
}

class ListThingTypesRequest {
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
  public ThingTypeName $thing_type_name;
}

class RemoveThingFromThingGroupResponse {
}

class StreamVersion {
}

class TemplateName {
}

class RangeKeyValue {
}

class ReasonForNonComplianceCodes {
}

class ResourceArns {
}

class SetDefaultAuthorizerResponse {
  public AuthorizerName $authorizer_name;
  public AuthorizerArn $authorizer_arn;
}

class CertificateName {
}

class Comment {
}

class ListPolicyPrincipalsRequest {
  public PolicyName $policy_name;
  public Marker $marker;
  public PageSize $page_size;
  public AscendingOrder $ascending_order;
}

class ListThingRegistrationTasksResponse {
  public TaskIdList $task_ids;
  public NextToken $next_token;
}

class UpdateThingRequest {
  public ThingName $thing_name;
  public ThingTypeName $thing_type_name;
  public AttributePayload $attribute_payload;
  public OptionalVersion $expected_version;
  public RemoveThingType $remove_thing_type;
}

class UpdateThingResponse {
}

class MinimumNumberOfExecutedThings {
}

class S3Destination {
  public S3Bucket $bucket;
  public Prefix $prefix;
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class StartOnDemandAuditTaskResponse {
  public AuditTaskId $task_id;
}

class AuditCheckName {
}

class CodeSigningCertificateChain {
  public CertificateName $certificate_name;
  public InlineDocument $inline_document;
}

class ExpiresInSeconds {
}

class GetCardinalityResponse {
  public Count $cardinality;
}

class AdditionalMetricsToRetainV2List {
}

class CACertificates {
}

class DescribeBillingGroupRequest {
  public BillingGroupName $billing_group_name;
}

class RelatedResource {
  public ResourceType $resource_type;
  public ResourceIdentifier $resource_identifier;
  public StringMap $additional_info;
}

class DescribeDimensionResponse {
  public DimensionName $name;
  public DimensionArn $arn;
  public DimensionType $type;
  public DimensionStringValues $string_values;
  public Timestamp $creation_date;
  public Timestamp $last_modified_date;
}

class ListThingsInThingGroupResponse {
  public ThingNameList $things;
  public NextToken $next_token;
}

class ThingTypeName {
}

class UpdateRoleAliasResponse {
  public RoleAlias $role_alias;
  public RoleAliasArn $role_alias_arn;
}

class GetPolicyVersionResponse {
  public PolicyArn $policy_arn;
  public PolicyName $policy_name;
  public PolicyDocument $policy_document;
  public PolicyVersionId $policy_version_id;
  public IsDefaultVersion $is_default_version;
  public DateType $creation_date;
  public DateType $last_modified_date;
  public GenerationId $generation_id;
}

class HttpHeaderValue {
}

class RegisterCertificateResponse {
  public CertificateArn $certificate_arn;
  public CertificateId $certificate_id;
}

class SearchableAttributes {
}

class CreateMitigationActionResponse {
  public MitigationActionArn $action_arn;
  public MitigationActionId $action_id;
}

class JobTargets {
}

class ListJobExecutionsForJobResponse {
  public JobExecutionSummaryForJobList $execution_summaries;
  public NextToken $next_token;
}

class SetDefaultAuthorizerRequest {
  public AuthorizerName $authorizer_name;
}

class InternalFailureException {
  public errorMessage $message;
}

class Percentage {
}

class ConfirmTopicRuleDestinationResponse {
}

class DescribeJobRequest {
  public JobId $job_id;
}

class RegisterCertificateRequest {
  public CertificateStatus $status;
  public CertificatePem $certificate_pem;
  public CertificatePem $ca_certificate_pem;
  public SetAsActiveFlag $set_as_active;
}

class VersionNumber {
}

class ActionList {
}

class S3FileUrlList {
}

class SkippedFindingsCount {
}

class TotalResourcesCount {
}

class Resources {
}

class RuleArn {
}

class UpdateJobRequest {
  public JobId $job_id;
  public JobDescription $description;
  public PresignedUrlConfig $presigned_url_config;
  public JobExecutionsRolloutConfig $job_executions_rollout_config;
  public AbortConfig $abort_config;
  public TimeoutConfig $timeout_config;
}

class AbortCriteriaList {
}

class DimensionNames {
}

class PolicyDocuments {
}

class RegistrationConfig {
  public TemplateBody $template_body;
  public RoleArn $role_arn;
}

class ListProvisioningTemplateVersionsRequest {
  public TemplateName $template_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class NextToken {
}

class CloudwatchMetricAction {
  public string $metric_namespace;
  public string $metric_name;
  public string $metric_value;
  public string $metric_unit;
  public string $metric_timestamp;
  public AwsArn $role_arn;
}

class CreateProvisioningClaimResponse {
  public CertificateId $certificate_id;
  public CertificatePem $certificate_pem;
  public KeyPair $key_pair;
  public DateType $expiration;
}

class FieldName {
}

class JobDocument {
}

class DeleteSecurityProfileResponse {
}

class PolicyArn {
}

class StdDeviation {
}

class InProgressChecksCount {
}

class ListThingsInThingGroupRequest {
  public Recursive $recursive;
  public NextToken $next_token;
  public RegistryMaxResults $max_results;
  public ThingGroupName $thing_group_name;
}

