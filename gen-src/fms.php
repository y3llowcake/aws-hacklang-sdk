<?hh // strict
namespace slack\aws\fms;

interface FMS {
  public function AssociateAdminAccount(AssociateAdminAccountRequest) Awaitable<Errors\Error>;
  public function DeleteNotificationChannel(DeleteNotificationChannelRequest) Awaitable<Errors\Error>;
  public function DeletePolicy(DeletePolicyRequest) Awaitable<Errors\Error>;
  public function DisassociateAdminAccount(DisassociateAdminAccountRequest) Awaitable<Errors\Error>;
  public function GetAdminAccount(GetAdminAccountRequest) Awaitable<Errors\Result<GetAdminAccountResponse>>;
  public function GetComplianceDetail(GetComplianceDetailRequest) Awaitable<Errors\Result<GetComplianceDetailResponse>>;
  public function GetNotificationChannel(GetNotificationChannelRequest) Awaitable<Errors\Result<GetNotificationChannelResponse>>;
  public function GetPolicy(GetPolicyRequest) Awaitable<Errors\Result<GetPolicyResponse>>;
  public function GetProtectionStatus(GetProtectionStatusRequest) Awaitable<Errors\Result<GetProtectionStatusResponse>>;
  public function ListComplianceStatus(ListComplianceStatusRequest) Awaitable<Errors\Result<ListComplianceStatusResponse>>;
  public function ListMemberAccounts(ListMemberAccountsRequest) Awaitable<Errors\Result<ListMemberAccountsResponse>>;
  public function ListPolicies(ListPoliciesRequest) Awaitable<Errors\Result<ListPoliciesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutNotificationChannel(PutNotificationChannelRequest) Awaitable<Errors\Error>;
  public function PutPolicy(PutPolicyRequest) Awaitable<Errors\Result<PutPolicyResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
}

class AWSAccountId {
}

class AccountRoleStatus {
}

class AssociateAdminAccountRequest {
  public AWSAccountId $admin_account;
}

class Boolean {
}

class ComplianceViolator {
  public ResourceId $resource_id;
  public ResourceType $resource_type;
  public ViolationReason $violation_reason;
}

class ComplianceViolators {
}

class CustomerPolicyScopeId {
}

class CustomerPolicyScopeIdList {
}

class CustomerPolicyScopeIdType {
}

class CustomerPolicyScopeMap {
}

class DeleteNotificationChannelRequest {
}

class DeletePolicyRequest {
  public boolean $delete_all_policy_resources;
  public PolicyId $policy_id;
}

class DependentServiceName {
}

class DetailedInfo {
}

class DisassociateAdminAccountRequest {
}

class ErrorMessage {
}

class EvaluationResult {
  public PolicyComplianceStatusType $compliance_status;
  public boolean $evaluation_limit_exceeded;
  public ResourceCount $violator_count;
}

class EvaluationResults {
}

class GetAdminAccountRequest {
}

class GetAdminAccountResponse {
  public AWSAccountId $admin_account;
  public AccountRoleStatus $role_status;
}

class GetComplianceDetailRequest {
  public AWSAccountId $member_account;
  public PolicyId $policy_id;
}

class GetComplianceDetailResponse {
  public PolicyComplianceDetail $policy_compliance_detail;
}

class GetNotificationChannelRequest {
}

class GetNotificationChannelResponse {
  public ResourceArn $sns_role_name;
  public ResourceArn $sns_topic_arn;
}

class GetPolicyRequest {
  public PolicyId $policy_id;
}

class GetPolicyResponse {
  public Policy $policy;
  public ResourceArn $policy_arn;
}

class GetProtectionStatusRequest {
  public TimeStamp $end_time;
  public PaginationMaxResults $max_results;
  public AWSAccountId $member_account_id;
  public PaginationToken $next_token;
  public PolicyId $policy_id;
  public TimeStamp $start_time;
}

class GetProtectionStatusResponse {
  public AWSAccountId $admin_account_id;
  public ProtectionData $data;
  public PaginationToken $next_token;
  public SecurityServiceType $service_type;
}

class InternalErrorException {
  public ErrorMessage $message;
}

class InvalidInputException {
  public ErrorMessage $message;
}

class InvalidOperationException {
  public ErrorMessage $message;
}

class InvalidTypeException {
  public ErrorMessage $message;
}

class IssueInfoMap {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListComplianceStatusRequest {
  public PaginationMaxResults $max_results;
  public PaginationToken $next_token;
  public PolicyId $policy_id;
}

class ListComplianceStatusResponse {
  public PaginationToken $next_token;
  public PolicyComplianceStatusList $policy_compliance_status_list;
}

class ListMemberAccountsRequest {
  public PaginationMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListMemberAccountsResponse {
  public MemberAccounts $member_accounts;
  public PaginationToken $next_token;
}

class ListPoliciesRequest {
  public PaginationMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListPoliciesResponse {
  public PaginationToken $next_token;
  public PolicySummaryList $policy_list;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tag_list;
}

class ManagedServiceData {
}

class MemberAccounts {
}

class PaginationMaxResults {
}

class PaginationToken {
}

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
}

class PolicyComplianceDetail {
  public boolean $evaluation_limit_exceeded;
  public TimeStamp $expired_at;
  public IssueInfoMap $issue_info_map;
  public AWSAccountId $member_account;
  public PolicyId $policy_id;
  public AWSAccountId $policy_owner;
  public ComplianceViolators $violators;
}

class PolicyComplianceStatus {
  public EvaluationResults $evaluation_results;
  public IssueInfoMap $issue_info_map;
  public TimeStamp $last_updated;
  public AWSAccountId $member_account;
  public PolicyId $policy_id;
  public ResourceName $policy_name;
  public AWSAccountId $policy_owner;
}

class PolicyComplianceStatusList {
}

class PolicyComplianceStatusType {
}

class PolicyId {
}

class PolicySummary {
  public ResourceArn $policy_arn;
  public PolicyId $policy_id;
  public ResourceName $policy_name;
  public boolean $remediation_enabled;
  public ResourceType $resource_type;
  public SecurityServiceType $security_service_type;
}

class PolicySummaryList {
}

class PolicyUpdateToken {
}

class ProtectionData {
}

class PutNotificationChannelRequest {
  public ResourceArn $sns_role_name;
  public ResourceArn $sns_topic_arn;
}

class PutPolicyRequest {
  public Policy $policy;
  public TagList $tag_list;
}

class PutPolicyResponse {
  public Policy $policy;
  public ResourceArn $policy_arn;
}

class ResourceArn {
}

class ResourceCount {
}

class ResourceId {
}

class ResourceName {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class ResourceTag {
  public ResourceTagKey $key;
  public ResourceTagValue $value;
}

class ResourceTagKey {
}

class ResourceTagValue {
}

class ResourceTags {
}

class ResourceType {
}

class ResourceTypeList {
}

class SecurityServicePolicyData {
  public ManagedServiceData $managed_service_data;
  public SecurityServiceType $type;
}

class SecurityServiceType {
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
  public TagList $tag_list;
}

class TagResourceResponse {
}

class TagValue {
}

class TimeStamp {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class ViolationReason {
}

