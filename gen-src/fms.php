<?hh // strict
namespace slack\aws\fms;

interface FMS {
  public function AssociateAdminAccount(AssociateAdminAccountRequest $in): Awaitable<\Errors\Error>;
  public function DeleteNotificationChannel(DeleteNotificationChannelRequest $in): Awaitable<\Errors\Error>;
  public function DeletePolicy(DeletePolicyRequest $in): Awaitable<\Errors\Error>;
  public function DisassociateAdminAccount(DisassociateAdminAccountRequest $in): Awaitable<\Errors\Error>;
  public function GetAdminAccount(GetAdminAccountRequest $in): Awaitable<\Errors\Result<GetAdminAccountResponse>>;
  public function GetComplianceDetail(GetComplianceDetailRequest $in): Awaitable<\Errors\Result<GetComplianceDetailResponse>>;
  public function GetNotificationChannel(GetNotificationChannelRequest $in): Awaitable<\Errors\Result<GetNotificationChannelResponse>>;
  public function GetPolicy(GetPolicyRequest $in): Awaitable<\Errors\Result<GetPolicyResponse>>;
  public function GetProtectionStatus(GetProtectionStatusRequest $in): Awaitable<\Errors\Result<GetProtectionStatusResponse>>;
  public function ListComplianceStatus(ListComplianceStatusRequest $in): Awaitable<\Errors\Result<ListComplianceStatusResponse>>;
  public function ListMemberAccounts(ListMemberAccountsRequest $in): Awaitable<\Errors\Result<ListMemberAccountsResponse>>;
  public function ListPolicies(ListPoliciesRequest $in): Awaitable<\Errors\Result<ListPoliciesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PutNotificationChannel(PutNotificationChannelRequest $in): Awaitable<\Errors\Error>;
  public function PutPolicy(PutPolicyRequest $in): Awaitable<\Errors\Result<PutPolicyResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
}

type AWSAccountId = string;

type AccountRoleStatus = string;

class AssociateAdminAccountRequest {
  public ?AWSAccountId $admin_account;

  public function __construct(shape(
    ?'admin_account' => ?AWSAccountId,
  ) $s = shape()) {
    $this->admin_account = $s['admin_account'] ?? '';
  }
}

type Boolean = bool;

class ComplianceViolator {
  public ?ResourceId $resource_id;
  public ?ResourceType $resource_type;
  public ?ViolationReason $violation_reason;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'resource_type' => ?ResourceType,
    ?'violation_reason' => ?ViolationReason,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->violation_reason = $s['violation_reason'] ?? '';
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
  public bool $delete_all_policy_resources;
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'delete_all_policy_resources' => bool,
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->delete_all_policy_resources = $s['delete_all_policy_resources'] ?? false;
    $this->policy_id = $s['policy_id'] ?? '';
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
  public ?PolicyComplianceStatusType $compliance_status;
  public bool $evaluation_limit_exceeded;
  public ?ResourceCount $violator_count;

  public function __construct(shape(
    ?'compliance_status' => ?PolicyComplianceStatusType,
    ?'evaluation_limit_exceeded' => bool,
    ?'violator_count' => ?ResourceCount,
  ) $s = shape()) {
    $this->compliance_status = $s['compliance_status'] ?? '';
    $this->evaluation_limit_exceeded = $s['evaluation_limit_exceeded'] ?? false;
    $this->violator_count = $s['violator_count'] ?? 0;
  }
}

type EvaluationResults = vec<EvaluationResult>;

class GetAdminAccountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetAdminAccountResponse {
  public ?AWSAccountId $admin_account;
  public ?AccountRoleStatus $role_status;

  public function __construct(shape(
    ?'admin_account' => ?AWSAccountId,
    ?'role_status' => ?AccountRoleStatus,
  ) $s = shape()) {
    $this->admin_account = $s['admin_account'] ?? '';
    $this->role_status = $s['role_status'] ?? '';
  }
}

class GetComplianceDetailRequest {
  public ?AWSAccountId $member_account;
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'member_account' => ?AWSAccountId,
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->member_account = $s['member_account'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class GetComplianceDetailResponse {
  public ?PolicyComplianceDetail $policy_compliance_detail;

  public function __construct(shape(
    ?'policy_compliance_detail' => ?PolicyComplianceDetail,
  ) $s = shape()) {
    $this->policy_compliance_detail = $s['policy_compliance_detail'] ?? null;
  }
}

class GetNotificationChannelRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetNotificationChannelResponse {
  public ?ResourceArn $sns_role_name;
  public ?ResourceArn $sns_topic_arn;

  public function __construct(shape(
    ?'sns_role_name' => ?ResourceArn,
    ?'sns_topic_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->sns_role_name = $s['sns_role_name'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
  }
}

class GetPolicyRequest {
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class GetPolicyResponse {
  public ?Policy $policy;
  public ?ResourceArn $policy_arn;

  public function __construct(shape(
    ?'policy' => ?Policy,
    ?'policy_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

class GetProtectionStatusRequest {
  public ?TimeStamp $end_time;
  public ?PaginationMaxResults $max_results;
  public ?AWSAccountId $member_account_id;
  public ?PaginationToken $next_token;
  public ?PolicyId $policy_id;
  public ?TimeStamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?TimeStamp,
    ?'max_results' => ?PaginationMaxResults,
    ?'member_account_id' => ?AWSAccountId,
    ?'next_token' => ?PaginationToken,
    ?'policy_id' => ?PolicyId,
    ?'start_time' => ?TimeStamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->max_results = $s['max_results'] ?? 0;
    $this->member_account_id = $s['member_account_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetProtectionStatusResponse {
  public ?AWSAccountId $admin_account_id;
  public ?ProtectionData $data;
  public ?PaginationToken $next_token;
  public ?SecurityServiceType $service_type;

  public function __construct(shape(
    ?'admin_account_id' => ?AWSAccountId,
    ?'data' => ?ProtectionData,
    ?'next_token' => ?PaginationToken,
    ?'service_type' => ?SecurityServiceType,
  ) $s = shape()) {
    $this->admin_account_id = $s['admin_account_id'] ?? '';
    $this->data = $s['data'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->service_type = $s['service_type'] ?? '';
  }
}

class InternalErrorException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInputException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidOperationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidTypeException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IssueInfoMap = dict<DependentServiceName, DetailedInfo>;

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListComplianceStatusRequest {
  public ?PaginationMaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'max_results' => ?PaginationMaxResults,
    ?'next_token' => ?PaginationToken,
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class ListComplianceStatusResponse {
  public ?PaginationToken $next_token;
  public ?PolicyComplianceStatusList $policy_compliance_status_list;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'policy_compliance_status_list' => ?PolicyComplianceStatusList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_compliance_status_list = $s['policy_compliance_status_list'] ?? vec[];
  }
}

class ListMemberAccountsRequest {
  public ?PaginationMaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?PaginationMaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListMemberAccountsResponse {
  public ?MemberAccounts $member_accounts;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'member_accounts' => ?MemberAccounts,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->member_accounts = $s['member_accounts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPoliciesRequest {
  public ?PaginationMaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?PaginationMaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPoliciesResponse {
  public ?PaginationToken $next_token;
  public ?PolicySummaryList $policy_list;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'policy_list' => ?PolicySummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_list = $s['policy_list'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

type ManagedServiceData = string;

type MemberAccounts = vec<AWSAccountId>;

type PaginationMaxResults = int;

type PaginationToken = string;

class Policy {
  public ?CustomerPolicyScopeMap $exclude_map;
  public bool $exclude_resource_tags;
  public ?CustomerPolicyScopeMap $include_map;
  public ?PolicyId $policy_id;
  public ?ResourceName $policy_name;
  public ?PolicyUpdateToken $policy_update_token;
  public bool $remediation_enabled;
  public ?ResourceTags $resource_tags;
  public ?ResourceType $resource_type;
  public ?ResourceTypeList $resource_type_list;
  public ?SecurityServicePolicyData $security_service_policy_data;

  public function __construct(shape(
    ?'exclude_map' => ?CustomerPolicyScopeMap,
    ?'exclude_resource_tags' => bool,
    ?'include_map' => ?CustomerPolicyScopeMap,
    ?'policy_id' => ?PolicyId,
    ?'policy_name' => ?ResourceName,
    ?'policy_update_token' => ?PolicyUpdateToken,
    ?'remediation_enabled' => bool,
    ?'resource_tags' => ?ResourceTags,
    ?'resource_type' => ?ResourceType,
    ?'resource_type_list' => ?ResourceTypeList,
    ?'security_service_policy_data' => ?SecurityServicePolicyData,
  ) $s = shape()) {
    $this->exclude_map = $s['exclude_map'] ?? dict[];
    $this->exclude_resource_tags = $s['exclude_resource_tags'] ?? false;
    $this->include_map = $s['include_map'] ?? dict[];
    $this->policy_id = $s['policy_id'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->policy_update_token = $s['policy_update_token'] ?? '';
    $this->remediation_enabled = $s['remediation_enabled'] ?? false;
    $this->resource_tags = $s['resource_tags'] ?? vec[];
    $this->resource_type = $s['resource_type'] ?? '';
    $this->resource_type_list = $s['resource_type_list'] ?? vec[];
    $this->security_service_policy_data = $s['security_service_policy_data'] ?? null;
  }
}

class PolicyComplianceDetail {
  public bool $evaluation_limit_exceeded;
  public ?TimeStamp $expired_at;
  public ?IssueInfoMap $issue_info_map;
  public ?AWSAccountId $member_account;
  public ?PolicyId $policy_id;
  public ?AWSAccountId $policy_owner;
  public ?ComplianceViolators $violators;

  public function __construct(shape(
    ?'evaluation_limit_exceeded' => bool,
    ?'expired_at' => ?TimeStamp,
    ?'issue_info_map' => ?IssueInfoMap,
    ?'member_account' => ?AWSAccountId,
    ?'policy_id' => ?PolicyId,
    ?'policy_owner' => ?AWSAccountId,
    ?'violators' => ?ComplianceViolators,
  ) $s = shape()) {
    $this->evaluation_limit_exceeded = $s['evaluation_limit_exceeded'] ?? false;
    $this->expired_at = $s['expired_at'] ?? 0;
    $this->issue_info_map = $s['issue_info_map'] ?? dict[];
    $this->member_account = $s['member_account'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
    $this->policy_owner = $s['policy_owner'] ?? '';
    $this->violators = $s['violators'] ?? vec[];
  }
}

class PolicyComplianceStatus {
  public ?EvaluationResults $evaluation_results;
  public ?IssueInfoMap $issue_info_map;
  public ?TimeStamp $last_updated;
  public ?AWSAccountId $member_account;
  public ?PolicyId $policy_id;
  public ?ResourceName $policy_name;
  public ?AWSAccountId $policy_owner;

  public function __construct(shape(
    ?'evaluation_results' => ?EvaluationResults,
    ?'issue_info_map' => ?IssueInfoMap,
    ?'last_updated' => ?TimeStamp,
    ?'member_account' => ?AWSAccountId,
    ?'policy_id' => ?PolicyId,
    ?'policy_name' => ?ResourceName,
    ?'policy_owner' => ?AWSAccountId,
  ) $s = shape()) {
    $this->evaluation_results = $s['evaluation_results'] ?? vec[];
    $this->issue_info_map = $s['issue_info_map'] ?? dict[];
    $this->last_updated = $s['last_updated'] ?? 0;
    $this->member_account = $s['member_account'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->policy_owner = $s['policy_owner'] ?? '';
  }
}

type PolicyComplianceStatusList = vec<PolicyComplianceStatus>;

type PolicyComplianceStatusType = string;

type PolicyId = string;

class PolicySummary {
  public ?ResourceArn $policy_arn;
  public ?PolicyId $policy_id;
  public ?ResourceName $policy_name;
  public bool $remediation_enabled;
  public ?ResourceType $resource_type;
  public ?SecurityServiceType $security_service_type;

  public function __construct(shape(
    ?'policy_arn' => ?ResourceArn,
    ?'policy_id' => ?PolicyId,
    ?'policy_name' => ?ResourceName,
    ?'remediation_enabled' => bool,
    ?'resource_type' => ?ResourceType,
    ?'security_service_type' => ?SecurityServiceType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->remediation_enabled = $s['remediation_enabled'] ?? false;
    $this->resource_type = $s['resource_type'] ?? '';
    $this->security_service_type = $s['security_service_type'] ?? '';
  }
}

type PolicySummaryList = vec<PolicySummary>;

type PolicyUpdateToken = string;

type ProtectionData = string;

class PutNotificationChannelRequest {
  public ?ResourceArn $sns_role_name;
  public ?ResourceArn $sns_topic_arn;

  public function __construct(shape(
    ?'sns_role_name' => ?ResourceArn,
    ?'sns_topic_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->sns_role_name = $s['sns_role_name'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
  }
}

class PutPolicyRequest {
  public ?Policy $policy;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'policy' => ?Policy,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

class PutPolicyResponse {
  public ?Policy $policy;
  public ?ResourceArn $policy_arn;

  public function __construct(shape(
    ?'policy' => ?Policy,
    ?'policy_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

type ResourceArn = string;

type ResourceCount = int;

type ResourceId = string;

type ResourceName = string;

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceTag {
  public ?ResourceTagKey $key;
  public ?ResourceTagValue $value;

  public function __construct(shape(
    ?'key' => ?ResourceTagKey,
    ?'value' => ?ResourceTagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ResourceTagKey = string;

type ResourceTagValue = string;

type ResourceTags = vec<ResourceTag>;

type ResourceType = string;

type ResourceTypeList = vec<ResourceType>;

class SecurityServicePolicyData {
  public ?ManagedServiceData $managed_service_data;
  public ?SecurityServiceType $type;

  public function __construct(shape(
    ?'managed_service_data' => ?ManagedServiceData,
    ?'type' => ?SecurityServiceType,
  ) $s = shape()) {
    $this->managed_service_data = $s['managed_service_data'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type SecurityServiceType = string;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
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
  public ?ResourceArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ViolationReason = string;

