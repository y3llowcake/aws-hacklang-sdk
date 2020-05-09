<?hh // strict
namespace slack\aws\organizations;

interface Organizations {
  public function AcceptHandshake(AcceptHandshakeRequest): Awaitable<Errors\Result<AcceptHandshakeResponse>>;
  public function AttachPolicy(AttachPolicyRequest): Awaitable<Errors\Error>;
  public function CancelHandshake(CancelHandshakeRequest): Awaitable<Errors\Result<CancelHandshakeResponse>>;
  public function CreateAccount(CreateAccountRequest): Awaitable<Errors\Result<CreateAccountResponse>>;
  public function CreateGovCloudAccount(CreateGovCloudAccountRequest): Awaitable<Errors\Result<CreateGovCloudAccountResponse>>;
  public function CreateOrganization(CreateOrganizationRequest): Awaitable<Errors\Result<CreateOrganizationResponse>>;
  public function CreateOrganizationalUnit(CreateOrganizationalUnitRequest): Awaitable<Errors\Result<CreateOrganizationalUnitResponse>>;
  public function CreatePolicy(CreatePolicyRequest): Awaitable<Errors\Result<CreatePolicyResponse>>;
  public function DeclineHandshake(DeclineHandshakeRequest): Awaitable<Errors\Result<DeclineHandshakeResponse>>;
  public function DeleteOrganization(): Awaitable<Errors\Error>;
  public function DeleteOrganizationalUnit(DeleteOrganizationalUnitRequest): Awaitable<Errors\Error>;
  public function DeletePolicy(DeletePolicyRequest): Awaitable<Errors\Error>;
  public function DeregisterDelegatedAdministrator(DeregisterDelegatedAdministratorRequest): Awaitable<Errors\Error>;
  public function DescribeAccount(DescribeAccountRequest): Awaitable<Errors\Result<DescribeAccountResponse>>;
  public function DescribeCreateAccountStatus(DescribeCreateAccountStatusRequest): Awaitable<Errors\Result<DescribeCreateAccountStatusResponse>>;
  public function DescribeEffectivePolicy(DescribeEffectivePolicyRequest): Awaitable<Errors\Result<DescribeEffectivePolicyResponse>>;
  public function DescribeHandshake(DescribeHandshakeRequest): Awaitable<Errors\Result<DescribeHandshakeResponse>>;
  public function DescribeOrganization(): Awaitable<Errors\Result<DescribeOrganizationResponse>>;
  public function DescribeOrganizationalUnit(DescribeOrganizationalUnitRequest): Awaitable<Errors\Result<DescribeOrganizationalUnitResponse>>;
  public function DescribePolicy(DescribePolicyRequest): Awaitable<Errors\Result<DescribePolicyResponse>>;
  public function DetachPolicy(DetachPolicyRequest): Awaitable<Errors\Error>;
  public function DisableAWSServiceAccess(DisableAWSServiceAccessRequest): Awaitable<Errors\Error>;
  public function DisablePolicyType(DisablePolicyTypeRequest): Awaitable<Errors\Result<DisablePolicyTypeResponse>>;
  public function EnableAWSServiceAccess(EnableAWSServiceAccessRequest): Awaitable<Errors\Error>;
  public function EnableAllFeatures(EnableAllFeaturesRequest): Awaitable<Errors\Result<EnableAllFeaturesResponse>>;
  public function EnablePolicyType(EnablePolicyTypeRequest): Awaitable<Errors\Result<EnablePolicyTypeResponse>>;
  public function InviteAccountToOrganization(InviteAccountToOrganizationRequest): Awaitable<Errors\Result<InviteAccountToOrganizationResponse>>;
  public function LeaveOrganization(): Awaitable<Errors\Error>;
  public function ListAWSServiceAccessForOrganization(ListAWSServiceAccessForOrganizationRequest): Awaitable<Errors\Result<ListAWSServiceAccessForOrganizationResponse>>;
  public function ListAccounts(ListAccountsRequest): Awaitable<Errors\Result<ListAccountsResponse>>;
  public function ListAccountsForParent(ListAccountsForParentRequest): Awaitable<Errors\Result<ListAccountsForParentResponse>>;
  public function ListChildren(ListChildrenRequest): Awaitable<Errors\Result<ListChildrenResponse>>;
  public function ListCreateAccountStatus(ListCreateAccountStatusRequest): Awaitable<Errors\Result<ListCreateAccountStatusResponse>>;
  public function ListDelegatedAdministrators(ListDelegatedAdministratorsRequest): Awaitable<Errors\Result<ListDelegatedAdministratorsResponse>>;
  public function ListDelegatedServicesForAccount(ListDelegatedServicesForAccountRequest): Awaitable<Errors\Result<ListDelegatedServicesForAccountResponse>>;
  public function ListHandshakesForAccount(ListHandshakesForAccountRequest): Awaitable<Errors\Result<ListHandshakesForAccountResponse>>;
  public function ListHandshakesForOrganization(ListHandshakesForOrganizationRequest): Awaitable<Errors\Result<ListHandshakesForOrganizationResponse>>;
  public function ListOrganizationalUnitsForParent(ListOrganizationalUnitsForParentRequest): Awaitable<Errors\Result<ListOrganizationalUnitsForParentResponse>>;
  public function ListParents(ListParentsRequest): Awaitable<Errors\Result<ListParentsResponse>>;
  public function ListPolicies(ListPoliciesRequest): Awaitable<Errors\Result<ListPoliciesResponse>>;
  public function ListPoliciesForTarget(ListPoliciesForTargetRequest): Awaitable<Errors\Result<ListPoliciesForTargetResponse>>;
  public function ListRoots(ListRootsRequest): Awaitable<Errors\Result<ListRootsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTargetsForPolicy(ListTargetsForPolicyRequest): Awaitable<Errors\Result<ListTargetsForPolicyResponse>>;
  public function MoveAccount(MoveAccountRequest): Awaitable<Errors\Error>;
  public function RegisterDelegatedAdministrator(RegisterDelegatedAdministratorRequest): Awaitable<Errors\Error>;
  public function RemoveAccountFromOrganization(RemoveAccountFromOrganizationRequest): Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateOrganizationalUnit(UpdateOrganizationalUnitRequest): Awaitable<Errors\Result<UpdateOrganizationalUnitResponse>>;
  public function UpdatePolicy(UpdatePolicyRequest): Awaitable<Errors\Result<UpdatePolicyResponse>>;
}

class AWSOrganizationsNotInUseException {
  public ExceptionMessage $message;
}

class AcceptHandshakeRequest {
  public HandshakeId $handshake_id;
}

class AcceptHandshakeResponse {
  public Handshake $handshake;
}

class AccessDeniedException {
  public ExceptionMessage $message;
}

class AccessDeniedForDependencyException {
  public ExceptionMessage $message;
  public AccessDeniedForDependencyExceptionReason $reason;
}

class AccessDeniedForDependencyExceptionReason {
}

class Account {
  public AccountArn $arn;
  public Email $email;
  public AccountId $id;
  public AccountJoinedMethod $joined_method;
  public Timestamp $joined_timestamp;
  public AccountName $name;
  public AccountStatus $status;
}

class AccountAlreadyRegisteredException {
  public ExceptionMessage $message;
}

class AccountArn {
}

class AccountId {
}

class AccountJoinedMethod {
}

class AccountName {
}

class AccountNotFoundException {
  public ExceptionMessage $message;
}

class AccountNotRegisteredException {
  public ExceptionMessage $message;
}

class AccountOwnerNotVerifiedException {
  public ExceptionMessage $message;
}

class AccountStatus {
}

class Accounts {
}

class ActionType {
}

class AlreadyInOrganizationException {
  public ExceptionMessage $message;
}

class AttachPolicyRequest {
  public PolicyId $policy_id;
  public PolicyTargetId $target_id;
}

class AwsManagedPolicy {
}

class CancelHandshakeRequest {
  public HandshakeId $handshake_id;
}

class CancelHandshakeResponse {
  public Handshake $handshake;
}

class Child {
  public ChildId $id;
  public ChildType $type;
}

class ChildId {
}

class ChildNotFoundException {
  public ExceptionMessage $message;
}

class ChildType {
}

class Children {
}

class ConcurrentModificationException {
  public ExceptionMessage $message;
}

class ConstraintViolationException {
  public ExceptionMessage $message;
  public ConstraintViolationExceptionReason $reason;
}

class ConstraintViolationExceptionReason {
}

class CreateAccountFailureReason {
}

class CreateAccountRequest {
  public AccountName $account_name;
  public Email $email;
  public IAMUserAccessToBilling $iam_user_access_to_billing;
  public RoleName $role_name;
}

class CreateAccountRequestId {
}

class CreateAccountResponse {
  public CreateAccountStatus $create_account_status;
}

class CreateAccountState {
}

class CreateAccountStates {
}

class CreateAccountStatus {
  public AccountId $account_id;
  public AccountName $account_name;
  public Timestamp $completed_timestamp;
  public CreateAccountFailureReason $failure_reason;
  public AccountId $gov_cloud_account_id;
  public CreateAccountRequestId $id;
  public Timestamp $requested_timestamp;
  public CreateAccountState $state;
}

class CreateAccountStatusNotFoundException {
  public ExceptionMessage $message;
}

class CreateAccountStatuses {
}

class CreateGovCloudAccountRequest {
  public AccountName $account_name;
  public Email $email;
  public IAMUserAccessToBilling $iam_user_access_to_billing;
  public RoleName $role_name;
}

class CreateGovCloudAccountResponse {
  public CreateAccountStatus $create_account_status;
}

class CreateOrganizationRequest {
  public OrganizationFeatureSet $feature_set;
}

class CreateOrganizationResponse {
  public Organization $organization;
}

class CreateOrganizationalUnitRequest {
  public OrganizationalUnitName $name;
  public ParentId $parent_id;
}

class CreateOrganizationalUnitResponse {
  public OrganizationalUnit $organizational_unit;
}

class CreatePolicyRequest {
  public PolicyContent $content;
  public PolicyDescription $description;
  public PolicyName $name;
  public PolicyType $type;
}

class CreatePolicyResponse {
  public Policy $policy;
}

class DeclineHandshakeRequest {
  public HandshakeId $handshake_id;
}

class DeclineHandshakeResponse {
  public Handshake $handshake;
}

class DelegatedAdministrator {
  public AccountArn $arn;
  public Timestamp $delegation_enabled_date;
  public Email $email;
  public AccountId $id;
  public AccountJoinedMethod $joined_method;
  public Timestamp $joined_timestamp;
  public AccountName $name;
  public AccountStatus $status;
}

class DelegatedAdministrators {
}

class DelegatedService {
  public Timestamp $delegation_enabled_date;
  public ServicePrincipal $service_principal;
}

class DelegatedServices {
}

class DeleteOrganizationalUnitRequest {
  public OrganizationalUnitId $organizational_unit_id;
}

class DeletePolicyRequest {
  public PolicyId $policy_id;
}

class DeregisterDelegatedAdministratorRequest {
  public AccountId $account_id;
  public ServicePrincipal $service_principal;
}

class DescribeAccountRequest {
  public AccountId $account_id;
}

class DescribeAccountResponse {
  public Account $account;
}

class DescribeCreateAccountStatusRequest {
  public CreateAccountRequestId $create_account_request_id;
}

class DescribeCreateAccountStatusResponse {
  public CreateAccountStatus $create_account_status;
}

class DescribeEffectivePolicyRequest {
  public EffectivePolicyType $policy_type;
  public PolicyTargetId $target_id;
}

class DescribeEffectivePolicyResponse {
  public EffectivePolicy $effective_policy;
}

class DescribeHandshakeRequest {
  public HandshakeId $handshake_id;
}

class DescribeHandshakeResponse {
  public Handshake $handshake;
}

class DescribeOrganizationResponse {
  public Organization $organization;
}

class DescribeOrganizationalUnitRequest {
  public OrganizationalUnitId $organizational_unit_id;
}

class DescribeOrganizationalUnitResponse {
  public OrganizationalUnit $organizational_unit;
}

class DescribePolicyRequest {
  public PolicyId $policy_id;
}

class DescribePolicyResponse {
  public Policy $policy;
}

class DestinationParentNotFoundException {
  public ExceptionMessage $message;
}

class DetachPolicyRequest {
  public PolicyId $policy_id;
  public PolicyTargetId $target_id;
}

class DisableAWSServiceAccessRequest {
  public ServicePrincipal $service_principal;
}

class DisablePolicyTypeRequest {
  public PolicyType $policy_type;
  public RootId $root_id;
}

class DisablePolicyTypeResponse {
  public Root $root;
}

class DuplicateAccountException {
  public ExceptionMessage $message;
}

class DuplicateHandshakeException {
  public ExceptionMessage $message;
}

class DuplicateOrganizationalUnitException {
  public ExceptionMessage $message;
}

class DuplicatePolicyAttachmentException {
  public ExceptionMessage $message;
}

class DuplicatePolicyException {
  public ExceptionMessage $message;
}

class EffectivePolicy {
  public Timestamp $last_updated_timestamp;
  public PolicyContent $policy_content;
  public EffectivePolicyType $policy_type;
  public PolicyTargetId $target_id;
}

class EffectivePolicyNotFoundException {
  public ExceptionMessage $message;
}

class EffectivePolicyType {
}

class Email {
}

class EnableAWSServiceAccessRequest {
  public ServicePrincipal $service_principal;
}

class EnableAllFeaturesRequest {
}

class EnableAllFeaturesResponse {
  public Handshake $handshake;
}

class EnablePolicyTypeRequest {
  public PolicyType $policy_type;
  public RootId $root_id;
}

class EnablePolicyTypeResponse {
  public Root $root;
}

class EnabledServicePrincipal {
  public Timestamp $date_enabled;
  public ServicePrincipal $service_principal;
}

class EnabledServicePrincipals {
}

class ExceptionMessage {
}

class ExceptionType {
}

class FinalizingOrganizationException {
  public ExceptionMessage $message;
}

class GenericArn {
}

class Handshake {
  public ActionType $action;
  public HandshakeArn $arn;
  public Timestamp $expiration_timestamp;
  public HandshakeId $id;
  public HandshakeParties $parties;
  public Timestamp $requested_timestamp;
  public HandshakeResources $resources;
  public HandshakeState $state;
}

class HandshakeAlreadyInStateException {
  public ExceptionMessage $message;
}

class HandshakeArn {
}

class HandshakeConstraintViolationException {
  public ExceptionMessage $message;
  public HandshakeConstraintViolationExceptionReason $reason;
}

class HandshakeConstraintViolationExceptionReason {
}

class HandshakeFilter {
  public ActionType $action_type;
  public HandshakeId $parent_handshake_id;
}

class HandshakeId {
}

class HandshakeNotFoundException {
  public ExceptionMessage $message;
}

class HandshakeNotes {
}

class HandshakeParties {
}

class HandshakeParty {
  public HandshakePartyId $id;
  public HandshakePartyType $type;
}

class HandshakePartyId {
}

class HandshakePartyType {
}

class HandshakeResource {
  public HandshakeResources $resources;
  public HandshakeResourceType $type;
  public HandshakeResourceValue $value;
}

class HandshakeResourceType {
}

class HandshakeResourceValue {
}

class HandshakeResources {
}

class HandshakeState {
}

class Handshakes {
}

class IAMUserAccessToBilling {
}

class InvalidHandshakeTransitionException {
  public ExceptionMessage $message;
}

class InvalidInputException {
  public ExceptionMessage $message;
  public InvalidInputExceptionReason $reason;
}

class InvalidInputExceptionReason {
}

class InviteAccountToOrganizationRequest {
  public HandshakeNotes $notes;
  public HandshakeParty $target;
}

class InviteAccountToOrganizationResponse {
  public Handshake $handshake;
}

class ListAWSServiceAccessForOrganizationRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListAWSServiceAccessForOrganizationResponse {
  public EnabledServicePrincipals $enabled_service_principals;
  public NextToken $next_token;
}

class ListAccountsForParentRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ParentId $parent_id;
}

class ListAccountsForParentResponse {
  public Accounts $accounts;
  public NextToken $next_token;
}

class ListAccountsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListAccountsResponse {
  public Accounts $accounts;
  public NextToken $next_token;
}

class ListChildrenRequest {
  public ChildType $child_type;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ParentId $parent_id;
}

class ListChildrenResponse {
  public Children $children;
  public NextToken $next_token;
}

class ListCreateAccountStatusRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public CreateAccountStates $states;
}

class ListCreateAccountStatusResponse {
  public CreateAccountStatuses $create_account_statuses;
  public NextToken $next_token;
}

class ListDelegatedAdministratorsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServicePrincipal $service_principal;
}

class ListDelegatedAdministratorsResponse {
  public DelegatedAdministrators $delegated_administrators;
  public NextToken $next_token;
}

class ListDelegatedServicesForAccountRequest {
  public AccountId $account_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDelegatedServicesForAccountResponse {
  public DelegatedServices $delegated_services;
  public NextToken $next_token;
}

class ListHandshakesForAccountRequest {
  public HandshakeFilter $filter;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListHandshakesForAccountResponse {
  public Handshakes $handshakes;
  public NextToken $next_token;
}

class ListHandshakesForOrganizationRequest {
  public HandshakeFilter $filter;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListHandshakesForOrganizationResponse {
  public Handshakes $handshakes;
  public NextToken $next_token;
}

class ListOrganizationalUnitsForParentRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ParentId $parent_id;
}

class ListOrganizationalUnitsForParentResponse {
  public NextToken $next_token;
  public OrganizationalUnits $organizational_units;
}

class ListParentsRequest {
  public ChildId $child_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListParentsResponse {
  public NextToken $next_token;
  public Parents $parents;
}

class ListPoliciesForTargetRequest {
  public PolicyType $filter;
  public MaxResults $max_results;
  public NextToken $next_token;
  public PolicyTargetId $target_id;
}

class ListPoliciesForTargetResponse {
  public NextToken $next_token;
  public Policies $policies;
}

class ListPoliciesRequest {
  public PolicyType $filter;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListPoliciesResponse {
  public NextToken $next_token;
  public Policies $policies;
}

class ListRootsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListRootsResponse {
  public NextToken $next_token;
  public Roots $roots;
}

class ListTagsForResourceRequest {
  public NextToken $next_token;
  public TaggableResourceId $resource_id;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public Tags $tags;
}

class ListTargetsForPolicyRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public PolicyId $policy_id;
}

class ListTargetsForPolicyResponse {
  public NextToken $next_token;
  public PolicyTargets $targets;
}

class MalformedPolicyDocumentException {
  public ExceptionMessage $message;
}

class MasterCannotLeaveOrganizationException {
  public ExceptionMessage $message;
}

class MaxResults {
}

class MoveAccountRequest {
  public AccountId $account_id;
  public ParentId $destination_parent_id;
  public ParentId $source_parent_id;
}

class NextToken {
}

class Organization {
  public OrganizationArn $arn;
  public PolicyTypes $available_policy_types;
  public OrganizationFeatureSet $feature_set;
  public OrganizationId $id;
  public AccountArn $master_account_arn;
  public Email $master_account_email;
  public AccountId $master_account_id;
}

class OrganizationArn {
}

class OrganizationFeatureSet {
}

class OrganizationId {
}

class OrganizationNotEmptyException {
  public ExceptionMessage $message;
}

class OrganizationalUnit {
  public OrganizationalUnitArn $arn;
  public OrganizationalUnitId $id;
  public OrganizationalUnitName $name;
}

class OrganizationalUnitArn {
}

class OrganizationalUnitId {
}

class OrganizationalUnitName {
}

class OrganizationalUnitNotEmptyException {
  public ExceptionMessage $message;
}

class OrganizationalUnitNotFoundException {
  public ExceptionMessage $message;
}

class OrganizationalUnits {
}

class Parent {
  public ParentId $id;
  public ParentType $type;
}

class ParentId {
}

class ParentNotFoundException {
  public ExceptionMessage $message;
}

class ParentType {
}

class Parents {
}

class Policies {
}

class Policy {
  public PolicyContent $content;
  public PolicySummary $policy_summary;
}

class PolicyArn {
}

class PolicyChangesInProgressException {
  public ExceptionMessage $message;
}

class PolicyContent {
}

class PolicyDescription {
}

class PolicyId {
}

class PolicyInUseException {
  public ExceptionMessage $message;
}

class PolicyName {
}

class PolicyNotAttachedException {
  public ExceptionMessage $message;
}

class PolicyNotFoundException {
  public ExceptionMessage $message;
}

class PolicySummary {
  public PolicyArn $arn;
  public AwsManagedPolicy $aws_managed;
  public PolicyDescription $description;
  public PolicyId $id;
  public PolicyName $name;
  public PolicyType $type;
}

class PolicyTargetId {
}

class PolicyTargetSummary {
  public GenericArn $arn;
  public TargetName $name;
  public PolicyTargetId $target_id;
  public TargetType $type;
}

class PolicyTargets {
}

class PolicyType {
}

class PolicyTypeAlreadyEnabledException {
  public ExceptionMessage $message;
}

class PolicyTypeNotAvailableForOrganizationException {
  public ExceptionMessage $message;
}

class PolicyTypeNotEnabledException {
  public ExceptionMessage $message;
}

class PolicyTypeStatus {
}

class PolicyTypeSummary {
  public PolicyTypeStatus $status;
  public PolicyType $type;
}

class PolicyTypes {
}

class RegisterDelegatedAdministratorRequest {
  public AccountId $account_id;
  public ServicePrincipal $service_principal;
}

class RemoveAccountFromOrganizationRequest {
  public AccountId $account_id;
}

class RoleName {
}

class Root {
  public RootArn $arn;
  public RootId $id;
  public RootName $name;
  public PolicyTypes $policy_types;
}

class RootArn {
}

class RootId {
}

class RootName {
}

class RootNotFoundException {
  public ExceptionMessage $message;
}

class Roots {
}

class ServiceException {
  public ExceptionMessage $message;
}

class ServicePrincipal {
}

class SourceParentNotFoundException {
  public ExceptionMessage $message;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public TaggableResourceId $resource_id;
  public Tags $tags;
}

class TagValue {
}

class TaggableResourceId {
}

class Tags {
}

class TargetName {
}

class TargetNotFoundException {
  public ExceptionMessage $message;
}

class TargetType {
}

class Timestamp {
}

class TooManyRequestsException {
  public ExceptionMessage $message;
  public ExceptionType $type;
}

class UnsupportedAPIEndpointException {
  public ExceptionMessage $message;
}

class UntagResourceRequest {
  public TaggableResourceId $resource_id;
  public TagKeys $tag_keys;
}

class UpdateOrganizationalUnitRequest {
  public OrganizationalUnitName $name;
  public OrganizationalUnitId $organizational_unit_id;
}

class UpdateOrganizationalUnitResponse {
  public OrganizationalUnit $organizational_unit;
}

class UpdatePolicyRequest {
  public PolicyContent $content;
  public PolicyDescription $description;
  public PolicyName $name;
  public PolicyId $policy_id;
}

class UpdatePolicyResponse {
  public Policy $policy;
}

