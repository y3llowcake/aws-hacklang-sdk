<?hh // strict
namespace slack\aws\fms;

interface FMS {
  public function AssociateAdminAccount(AssociateAdminAccountRequest): Awaitable<Errors\Error>;
  public function DeleteNotificationChannel(DeleteNotificationChannelRequest): Awaitable<Errors\Error>;
  public function DeletePolicy(DeletePolicyRequest): Awaitable<Errors\Error>;
  public function DisassociateAdminAccount(DisassociateAdminAccountRequest): Awaitable<Errors\Error>;
  public function GetAdminAccount(GetAdminAccountRequest): Awaitable<Errors\Result<GetAdminAccountResponse>>;
  public function GetComplianceDetail(GetComplianceDetailRequest): Awaitable<Errors\Result<GetComplianceDetailResponse>>;
  public function GetNotificationChannel(GetNotificationChannelRequest): Awaitable<Errors\Result<GetNotificationChannelResponse>>;
  public function GetPolicy(GetPolicyRequest): Awaitable<Errors\Result<GetPolicyResponse>>;
  public function GetProtectionStatus(GetProtectionStatusRequest): Awaitable<Errors\Result<GetProtectionStatusResponse>>;
  public function ListComplianceStatus(ListComplianceStatusRequest): Awaitable<Errors\Result<ListComplianceStatusResponse>>;
  public function ListMemberAccounts(ListMemberAccountsRequest): Awaitable<Errors\Result<ListMemberAccountsResponse>>;
  public function ListPolicies(ListPoliciesRequest): Awaitable<Errors\Result<ListPoliciesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutNotificationChannel(PutNotificationChannelRequest): Awaitable<Errors\Error>;
  public function PutPolicy(PutPolicyRequest): Awaitable<Errors\Result<PutPolicyResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
}

type AWSAccountId = string;

type AccountRoleStatus = string;

class AssociateAdminAccountRequest {
  public AWSAccountId $admin_account;

  public function __construct(shape(
  ?'admin_account' => AWSAccountId,
  ) $s = shape()) {
    $this->admin_account = $admin_account ?? "";
  }
}

type Boolean = bool;

class ComplianceViolator {
  public ResourceId $resource_id;
  public ResourceType $resource_type;
  public ViolationReason $violation_reason;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'resource_type' => ResourceType,
  ?'violation_reason' => ViolationReason,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->violation_reason = $violation_reason ?? "";
  }
}

type ComplianceViolators = vec<ComplianceViolator>;

type CustomerPolicyScopeId = string;

type CustomerPolicyScopeIdList = vec<CustomerPolicyScopeId>;

type CustomerPolicyScopeIdType = string;

type CustomerPolicyScopeMap = dict<CustomerPolicyScopeIdType, CustomerPolicyScopeIdList>;

class DeleteNotificationChannelRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePolicyRequest {
  public boolean $delete_all_policy_resources;
  public PolicyId $policy_id;

  public function __construct(shape(
  ?'delete_all_policy_resources' => boolean,
  ?'policy_id' => PolicyId,
  ) $s = shape()) {
    $this->delete_all_policy_resources = $delete_all_policy_resources ?? false;
    $this->policy_id = $policy_id ?? "";
  }
}

type DependentServiceName = string;

type DetailedInfo = string;

class DisassociateAdminAccountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ErrorMessage = string;

class EvaluationResult {
  public PolicyComplianceStatusType $compliance_status;
  public boolean $evaluation_limit_exceeded;
  public ResourceCount $violator_count;

  public function __construct(shape(
  ?'compliance_status' => PolicyComplianceStatusType,
  ?'evaluation_limit_exceeded' => boolean,
  ?'violator_count' => ResourceCount,
  ) $s = shape()) {
    $this->compliance_status = $compliance_status ?? "";
    $this->evaluation_limit_exceeded = $evaluation_limit_exceeded ?? false;
    $this->violator_count = $violator_count ?? 0;
  }
}

type EvaluationResults = vec<EvaluationResult>;

class GetAdminAccountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetAdminAccountResponse {
  public AWSAccountId $admin_account;
  public AccountRoleStatus $role_status;

  public function __construct(shape(
  ?'admin_account' => AWSAccountId,
  ?'role_status' => AccountRoleStatus,
  ) $s = shape()) {
    $this->admin_account = $admin_account ?? "";
    $this->role_status = $role_status ?? "";
  }
}

class GetComplianceDetailRequest {
  public AWSAccountId $member_account;
  public PolicyId $policy_id;

  public function __construct(shape(
  ?'member_account' => AWSAccountId,
  ?'policy_id' => PolicyId,
  ) $s = shape()) {
    $this->member_account = $member_account ?? "";
    $this->policy_id = $policy_id ?? "";
  }
}

class GetComplianceDetailResponse {
  public PolicyComplianceDetail $policy_compliance_detail;

  public function __construct(shape(
  ?'policy_compliance_detail' => PolicyComplianceDetail,
  ) $s = shape()) {
    $this->policy_compliance_detail = $policy_compliance_detail ?? null;
  }
}

class GetNotificationChannelRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetNotificationChannelResponse {
  public ResourceArn $sns_role_name;
  public ResourceArn $sns_topic_arn;

  public function __construct(shape(
  ?'sns_role_name' => ResourceArn,
  ?'sns_topic_arn' => ResourceArn,
  ) $s = shape()) {
    $this->sns_role_name = $sns_role_name ?? "";
    $this->sns_topic_arn = $sns_topic_arn ?? "";
  }
}

class GetPolicyRequest {
  public PolicyId $policy_id;

  public function __construct(shape(
  ?'policy_id' => PolicyId,
  ) $s = shape()) {
    $this->policy_id = $policy_id ?? "";
  }
}

class GetPolicyResponse {
  public Policy $policy;
  public ResourceArn $policy_arn;

  public function __construct(shape(
  ?'policy' => Policy,
  ?'policy_arn' => ResourceArn,
  ) $s = shape()) {
    $this->policy = $policy ?? null;
    $this->policy_arn = $policy_arn ?? "";
  }
}

class GetProtectionStatusRequest {
  public TimeStamp $end_time;
  public PaginationMaxResults $max_results;
  public AWSAccountId $member_account_id;
  public PaginationToken $next_token;
  public PolicyId $policy_id;
  public TimeStamp $start_time;

  public function __construct(shape(
  ?'end_time' => TimeStamp,
  ?'max_results' => PaginationMaxResults,
  ?'member_account_id' => AWSAccountId,
  ?'next_token' => PaginationToken,
  ?'policy_id' => PolicyId,
  ?'start_time' => TimeStamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->max_results = $max_results ?? 0;
    $this->member_account_id = $member_account_id ?? "";
    $this->next_token = $next_token ?? "";
    $this->policy_id = $policy_id ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class GetProtectionStatusResponse {
  public AWSAccountId $admin_account_id;
  public ProtectionData $data;
  public PaginationToken $next_token;
  public SecurityServiceType $service_type;

  public function __construct(shape(
  ?'admin_account_id' => AWSAccountId,
  ?'data' => ProtectionData,
  ?'next_token' => PaginationToken,
  ?'service_type' => SecurityServiceType,
  ) $s = shape()) {
    $this->admin_account_id = $admin_account_id ?? "";
    $this->data = $data ?? "";
    $this->next_token = $next_token ?? "";
    $this->service_type = $service_type ?? "";
  }
}

class InternalErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidInputException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidOperationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidTypeException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type IssueInfoMap = dict<DependentServiceName, DetailedInfo>;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListComplianceStatusRequest {
  public PaginationMaxResults $max_results;
  public PaginationToken $next_token;
  public PolicyId $policy_id;

  public function __construct(shape(
  ?'max_results' => PaginationMaxResults,
  ?'next_token' => PaginationToken,
  ?'policy_id' => PolicyId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->policy_id = $policy_id ?? "";
  }
}

class ListComplianceStatusResponse {
  public PaginationToken $next_token;
  public PolicyComplianceStatusList $policy_compliance_status_list;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'policy_compliance_status_list' => PolicyComplianceStatusList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->policy_compliance_status_list = $policy_compliance_status_list ?? [];
  }
}

class ListMemberAccountsRequest {
  public PaginationMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => PaginationMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListMemberAccountsResponse {
  public MemberAccounts $member_accounts;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'member_accounts' => MemberAccounts,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->member_accounts = $member_accounts ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListPoliciesRequest {
  public PaginationMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => PaginationMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListPoliciesResponse {
  public PaginationToken $next_token;
  public PolicySummaryList $policy_list;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'policy_list' => PolicySummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->policy_list = $policy_list ?? [];
  }
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tag_list;

  public function __construct(shape(
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->tag_list = $tag_list ?? [];
  }
}

type ManagedServiceData = string;

type MemberAccounts = vec<AWSAccountId>;

type PaginationMaxResults = int;

type PaginationToken = string;

class Policy {
  public CustomerPolicyScopeMap $exclude_map;
  public boolean $exclude_resource_tags;
  public CustomerPolicyScopeMap $include_map;
  public PolicyId $policy_id;
  public ResourceName $policy_name;
  public PolicyUpdateToken $policy_update_token;
  public boolean $remediation_enabled;
  public ResourceTags $resource_tags;
  public ResourceType $resource_type;
  public ResourceTypeList $resource_type_list;
  public SecurityServicePolicyData $security_service_policy_data;

  public function __construct(shape(
  ?'exclude_map' => CustomerPolicyScopeMap,
  ?'exclude_resource_tags' => boolean,
  ?'include_map' => CustomerPolicyScopeMap,
  ?'policy_id' => PolicyId,
  ?'policy_name' => ResourceName,
  ?'policy_update_token' => PolicyUpdateToken,
  ?'remediation_enabled' => boolean,
  ?'resource_tags' => ResourceTags,
  ?'resource_type' => ResourceType,
  ?'resource_type_list' => ResourceTypeList,
  ?'security_service_policy_data' => SecurityServicePolicyData,
  ) $s = shape()) {
    $this->exclude_map = $exclude_map ?? [];
    $this->exclude_resource_tags = $exclude_resource_tags ?? false;
    $this->include_map = $include_map ?? [];
    $this->policy_id = $policy_id ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->policy_update_token = $policy_update_token ?? "";
    $this->remediation_enabled = $remediation_enabled ?? false;
    $this->resource_tags = $resource_tags ?? [];
    $this->resource_type = $resource_type ?? "";
    $this->resource_type_list = $resource_type_list ?? [];
    $this->security_service_policy_data = $security_service_policy_data ?? null;
  }
}

class PolicyComplianceDetail {
  public boolean $evaluation_limit_exceeded;
  public TimeStamp $expired_at;
  public IssueInfoMap $issue_info_map;
  public AWSAccountId $member_account;
  public PolicyId $policy_id;
  public AWSAccountId $policy_owner;
  public ComplianceViolators $violators;

  public function __construct(shape(
  ?'evaluation_limit_exceeded' => boolean,
  ?'expired_at' => TimeStamp,
  ?'issue_info_map' => IssueInfoMap,
  ?'member_account' => AWSAccountId,
  ?'policy_id' => PolicyId,
  ?'policy_owner' => AWSAccountId,
  ?'violators' => ComplianceViolators,
  ) $s = shape()) {
    $this->evaluation_limit_exceeded = $evaluation_limit_exceeded ?? false;
    $this->expired_at = $expired_at ?? 0;
    $this->issue_info_map = $issue_info_map ?? [];
    $this->member_account = $member_account ?? "";
    $this->policy_id = $policy_id ?? "";
    $this->policy_owner = $policy_owner ?? "";
    $this->violators = $violators ?? [];
  }
}

class PolicyComplianceStatus {
  public EvaluationResults $evaluation_results;
  public IssueInfoMap $issue_info_map;
  public TimeStamp $last_updated;
  public AWSAccountId $member_account;
  public PolicyId $policy_id;
  public ResourceName $policy_name;
  public AWSAccountId $policy_owner;

  public function __construct(shape(
  ?'evaluation_results' => EvaluationResults,
  ?'issue_info_map' => IssueInfoMap,
  ?'last_updated' => TimeStamp,
  ?'member_account' => AWSAccountId,
  ?'policy_id' => PolicyId,
  ?'policy_name' => ResourceName,
  ?'policy_owner' => AWSAccountId,
  ) $s = shape()) {
    $this->evaluation_results = $evaluation_results ?? [];
    $this->issue_info_map = $issue_info_map ?? [];
    $this->last_updated = $last_updated ?? 0;
    $this->member_account = $member_account ?? "";
    $this->policy_id = $policy_id ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->policy_owner = $policy_owner ?? "";
  }
}

type PolicyComplianceStatusList = vec<PolicyComplianceStatus>;

type PolicyComplianceStatusType = string;

type PolicyId = string;

class PolicySummary {
  public ResourceArn $policy_arn;
  public PolicyId $policy_id;
  public ResourceName $policy_name;
  public boolean $remediation_enabled;
  public ResourceType $resource_type;
  public SecurityServiceType $security_service_type;

  public function __construct(shape(
  ?'policy_arn' => ResourceArn,
  ?'policy_id' => PolicyId,
  ?'policy_name' => ResourceName,
  ?'remediation_enabled' => boolean,
  ?'resource_type' => ResourceType,
  ?'security_service_type' => SecurityServiceType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->policy_id = $policy_id ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->remediation_enabled = $remediation_enabled ?? false;
    $this->resource_type = $resource_type ?? "";
    $this->security_service_type = $security_service_type ?? "";
  }
}

type PolicySummaryList = vec<PolicySummary>;

type PolicyUpdateToken = string;

type ProtectionData = string;

class PutNotificationChannelRequest {
  public ResourceArn $sns_role_name;
  public ResourceArn $sns_topic_arn;

  public function __construct(shape(
  ?'sns_role_name' => ResourceArn,
  ?'sns_topic_arn' => ResourceArn,
  ) $s = shape()) {
    $this->sns_role_name = $sns_role_name ?? "";
    $this->sns_topic_arn = $sns_topic_arn ?? "";
  }
}

class PutPolicyRequest {
  public Policy $policy;
  public TagList $tag_list;

  public function __construct(shape(
  ?'policy' => Policy,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->policy = $policy ?? null;
    $this->tag_list = $tag_list ?? [];
  }
}

class PutPolicyResponse {
  public Policy $policy;
  public ResourceArn $policy_arn;

  public function __construct(shape(
  ?'policy' => Policy,
  ?'policy_arn' => ResourceArn,
  ) $s = shape()) {
    $this->policy = $policy ?? null;
    $this->policy_arn = $policy_arn ?? "";
  }
}

type ResourceArn = string;

type ResourceCount = int;

type ResourceId = string;

type ResourceName = string;

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceTag {
  public ResourceTagKey $key;
  public ResourceTagValue $value;

  public function __construct(shape(
  ?'key' => ResourceTagKey,
  ?'value' => ResourceTagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type ResourceTagKey = string;

type ResourceTagValue = string;

type ResourceTags = vec<ResourceTag>;

type ResourceType = string;

type ResourceTypeList = vec<ResourceType>;

class SecurityServicePolicyData {
  public ManagedServiceData $managed_service_data;
  public SecurityServiceType $type;

  public function __construct(shape(
  ?'managed_service_data' => ManagedServiceData,
  ?'type' => SecurityServiceType,
  ) $s = shape()) {
    $this->managed_service_data = $managed_service_data ?? "";
    $this->type = $type ?? "";
  }
}

type SecurityServiceType = string;

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
  public TagList $tag_list;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_list = $tag_list ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type TimeStamp = int;

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ViolationReason = string;

