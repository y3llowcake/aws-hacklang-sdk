<?hh // strict
namespace slack\aws\fms;

interface FMS {
  public function PutPolicy(PutPolicyRequest) Awaitable<Errors\Result<PutPolicyResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function AssociateAdminAccount(AssociateAdminAccountRequest) Awaitable<Errors\Error>;
  public function GetNotificationChannel(GetNotificationChannelRequest) Awaitable<Errors\Result<GetNotificationChannelResponse>>;
  public function GetProtectionStatus(GetProtectionStatusRequest) Awaitable<Errors\Result<GetProtectionStatusResponse>>;
  public function ListMemberAccounts(ListMemberAccountsRequest) Awaitable<Errors\Result<ListMemberAccountsResponse>>;
  public function ListPolicies(ListPoliciesRequest) Awaitable<Errors\Result<ListPoliciesResponse>>;
  public function DeletePolicy(DeletePolicyRequest) Awaitable<Errors\Error>;
  public function ListComplianceStatus(ListComplianceStatusRequest) Awaitable<Errors\Result<ListComplianceStatusResponse>>;
  public function DisassociateAdminAccount(DisassociateAdminAccountRequest) Awaitable<Errors\Error>;
  public function GetComplianceDetail(GetComplianceDetailRequest) Awaitable<Errors\Result<GetComplianceDetailResponse>>;
  public function GetPolicy(GetPolicyRequest) Awaitable<Errors\Result<GetPolicyResponse>>;
  public function PutNotificationChannel(PutNotificationChannelRequest) Awaitable<Errors\Error>;
  public function DeleteNotificationChannel(DeleteNotificationChannelRequest) Awaitable<Errors\Error>;
  public function GetAdminAccount(GetAdminAccountRequest) Awaitable<Errors\Result<GetAdminAccountResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
}

class ResourceTagKey {
}

class UntagResourceResponse {
}

class CustomerPolicyScopeIdType {
}

class GetComplianceDetailResponse {
  public PolicyComplianceDetail $policy_compliance_detail;
}

class ManagedServiceData {
}

class ResourceCount {
}

class TimeStamp {
}

class ComplianceViolator {
  public ResourceId $resource_id;
  public ViolationReason $violation_reason;
  public ResourceType $resource_type;
}

class DependentServiceName {
}

class PolicySummaryList {
}

class ResourceTags {
}

class TagKey {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class DisassociateAdminAccountRequest {
}

class GetNotificationChannelResponse {
  public ResourceArn $sns_role_name;
  public ResourceArn $sns_topic_arn;
}

class PutNotificationChannelRequest {
  public ResourceArn $sns_topic_arn;
  public ResourceArn $sns_role_name;
}

class ResourceName {
}

class ListMemberAccountsResponse {
  public MemberAccounts $member_accounts;
  public PaginationToken $next_token;
}

class ProtectionData {
}

class ResourceTagValue {
}

class SecurityServicePolicyData {
  public SecurityServiceType $type;
  public ManagedServiceData $managed_service_data;
}

class DeleteNotificationChannelRequest {
}

class ErrorMessage {
}

class InvalidTypeException {
  public ErrorMessage $message;
}

class ListComplianceStatusResponse {
  public PolicyComplianceStatusList $policy_compliance_status_list;
  public PaginationToken $next_token;
}

class TagKeyList {
}

class TagList {
}

class SecurityServiceType {
}

class GetPolicyResponse {
  public Policy $policy;
  public ResourceArn $policy_arn;
}

class GetProtectionStatusResponse {
  public ProtectionData $data;
  public PaginationToken $next_token;
  public AWSAccountId $admin_account_id;
  public SecurityServiceType $service_type;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tag_list;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class PolicyComplianceStatus {
  public PolicyId $policy_id;
  public ResourceName $policy_name;
  public AWSAccountId $member_account;
  public EvaluationResults $evaluation_results;
  public TimeStamp $last_updated;
  public IssueInfoMap $issue_info_map;
  public AWSAccountId $policy_owner;
}

class AWSAccountId {
}

class CustomerPolicyScopeId {
}

class GetProtectionStatusRequest {
  public PolicyId $policy_id;
  public AWSAccountId $member_account_id;
  public TimeStamp $start_time;
  public TimeStamp $end_time;
  public PaginationToken $next_token;
  public PaginationMaxResults $max_results;
}

class InvalidOperationException {
  public ErrorMessage $message;
}

class IssueInfoMap {
}

class PolicyComplianceDetail {
  public IssueInfoMap $issue_info_map;
  public AWSAccountId $policy_owner;
  public PolicyId $policy_id;
  public AWSAccountId $member_account;
  public ComplianceViolators $violators;
  public boolean $evaluation_limit_exceeded;
  public TimeStamp $expired_at;
}

class ResourceTypeList {
}

class DetailedInfo {
}

class EvaluationResults {
}

class GetNotificationChannelRequest {
}

class InvalidInputException {
  public ErrorMessage $message;
}

class GetAdminAccountResponse {
  public AWSAccountId $admin_account;
  public AccountRoleStatus $role_status;
}

class ListComplianceStatusRequest {
  public PaginationMaxResults $max_results;
  public PolicyId $policy_id;
  public PaginationToken $next_token;
}

class ListPoliciesResponse {
  public PolicySummaryList $policy_list;
  public PaginationToken $next_token;
}

class PolicyId {
}

class DeletePolicyRequest {
  public PolicyId $policy_id;
  public boolean $delete_all_policy_resources;
}

class ListMemberAccountsRequest {
  public PaginationToken $next_token;
  public PaginationMaxResults $max_results;
}

class TagResourceResponse {
}

class TagValue {
}

class GetAdminAccountRequest {
}

class PolicySummary {
  public ResourceArn $policy_arn;
  public PolicyId $policy_id;
  public ResourceName $policy_name;
  public ResourceType $resource_type;
  public SecurityServiceType $security_service_type;
  public boolean $remediation_enabled;
}

class PolicyUpdateToken {
}

class PutPolicyResponse {
  public Policy $policy;
  public ResourceArn $policy_arn;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class GetComplianceDetailRequest {
  public PolicyId $policy_id;
  public AWSAccountId $member_account;
}

class Policy {
  public ResourceTags $resource_tags;
  public PolicyId $policy_id;
  public ResourceName $policy_name;
  public PolicyUpdateToken $policy_update_token;
  public boolean $exclude_resource_tags;
  public boolean $remediation_enabled;
  public CustomerPolicyScopeMap $include_map;
  public CustomerPolicyScopeMap $exclude_map;
  public SecurityServicePolicyData $security_service_policy_data;
  public ResourceType $resource_type;
  public ResourceTypeList $resource_type_list;
}

class PutPolicyRequest {
  public Policy $policy;
  public TagList $tag_list;
}

class ResourceArn {
}

class PaginationMaxResults {
}

class PolicyComplianceStatusType {
}

class PaginationToken {
}

class AccountRoleStatus {
}

class AssociateAdminAccountRequest {
  public AWSAccountId $admin_account;
}

class Boolean {
}

class InternalErrorException {
  public ErrorMessage $message;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class ViolationReason {
}

class ComplianceViolators {
}

class GetPolicyRequest {
  public PolicyId $policy_id;
}

class ResourceId {
}

class ResourceType {
}

class EvaluationResult {
  public PolicyComplianceStatusType $compliance_status;
  public ResourceCount $violator_count;
  public boolean $evaluation_limit_exceeded;
}

class MemberAccounts {
}

class ResourceTag {
  public ResourceTagKey $key;
  public ResourceTagValue $value;
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tag_list;
}

class CustomerPolicyScopeIdList {
}

class CustomerPolicyScopeMap {
}

class ListPoliciesRequest {
  public PaginationToken $next_token;
  public PaginationMaxResults $max_results;
}

class PolicyComplianceStatusList {
}

