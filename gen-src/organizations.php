<?hh // strict
namespace slack\aws\organizations;

interface Organizations {
  public function AcceptHandshake(AcceptHandshakeRequest $in): Awaitable<\Errors\Result<AcceptHandshakeResponse>>;
  public function AttachPolicy(AttachPolicyRequest $in): Awaitable<\Errors\Error>;
  public function CancelHandshake(CancelHandshakeRequest $in): Awaitable<\Errors\Result<CancelHandshakeResponse>>;
  public function CreateAccount(CreateAccountRequest $in): Awaitable<\Errors\Result<CreateAccountResponse>>;
  public function CreateGovCloudAccount(CreateGovCloudAccountRequest $in): Awaitable<\Errors\Result<CreateGovCloudAccountResponse>>;
  public function CreateOrganization(CreateOrganizationRequest $in): Awaitable<\Errors\Result<CreateOrganizationResponse>>;
  public function CreateOrganizationalUnit(CreateOrganizationalUnitRequest $in): Awaitable<\Errors\Result<CreateOrganizationalUnitResponse>>;
  public function CreatePolicy(CreatePolicyRequest $in): Awaitable<\Errors\Result<CreatePolicyResponse>>;
  public function DeclineHandshake(DeclineHandshakeRequest $in): Awaitable<\Errors\Result<DeclineHandshakeResponse>>;
  public function DeleteOrganization( $in): Awaitable<\Errors\Error>;
  public function DeleteOrganizationalUnit(DeleteOrganizationalUnitRequest $in): Awaitable<\Errors\Error>;
  public function DeletePolicy(DeletePolicyRequest $in): Awaitable<\Errors\Error>;
  public function DeregisterDelegatedAdministrator(DeregisterDelegatedAdministratorRequest $in): Awaitable<\Errors\Error>;
  public function DescribeAccount(DescribeAccountRequest $in): Awaitable<\Errors\Result<DescribeAccountResponse>>;
  public function DescribeCreateAccountStatus(DescribeCreateAccountStatusRequest $in): Awaitable<\Errors\Result<DescribeCreateAccountStatusResponse>>;
  public function DescribeEffectivePolicy(DescribeEffectivePolicyRequest $in): Awaitable<\Errors\Result<DescribeEffectivePolicyResponse>>;
  public function DescribeHandshake(DescribeHandshakeRequest $in): Awaitable<\Errors\Result<DescribeHandshakeResponse>>;
  public function DescribeOrganization( $in): Awaitable<\Errors\Result<DescribeOrganizationResponse>>;
  public function DescribeOrganizationalUnit(DescribeOrganizationalUnitRequest $in): Awaitable<\Errors\Result<DescribeOrganizationalUnitResponse>>;
  public function DescribePolicy(DescribePolicyRequest $in): Awaitable<\Errors\Result<DescribePolicyResponse>>;
  public function DetachPolicy(DetachPolicyRequest $in): Awaitable<\Errors\Error>;
  public function DisableAWSServiceAccess(DisableAWSServiceAccessRequest $in): Awaitable<\Errors\Error>;
  public function DisablePolicyType(DisablePolicyTypeRequest $in): Awaitable<\Errors\Result<DisablePolicyTypeResponse>>;
  public function EnableAWSServiceAccess(EnableAWSServiceAccessRequest $in): Awaitable<\Errors\Error>;
  public function EnableAllFeatures(EnableAllFeaturesRequest $in): Awaitable<\Errors\Result<EnableAllFeaturesResponse>>;
  public function EnablePolicyType(EnablePolicyTypeRequest $in): Awaitable<\Errors\Result<EnablePolicyTypeResponse>>;
  public function InviteAccountToOrganization(InviteAccountToOrganizationRequest $in): Awaitable<\Errors\Result<InviteAccountToOrganizationResponse>>;
  public function LeaveOrganization( $in): Awaitable<\Errors\Error>;
  public function ListAWSServiceAccessForOrganization(ListAWSServiceAccessForOrganizationRequest $in): Awaitable<\Errors\Result<ListAWSServiceAccessForOrganizationResponse>>;
  public function ListAccounts(ListAccountsRequest $in): Awaitable<\Errors\Result<ListAccountsResponse>>;
  public function ListAccountsForParent(ListAccountsForParentRequest $in): Awaitable<\Errors\Result<ListAccountsForParentResponse>>;
  public function ListChildren(ListChildrenRequest $in): Awaitable<\Errors\Result<ListChildrenResponse>>;
  public function ListCreateAccountStatus(ListCreateAccountStatusRequest $in): Awaitable<\Errors\Result<ListCreateAccountStatusResponse>>;
  public function ListDelegatedAdministrators(ListDelegatedAdministratorsRequest $in): Awaitable<\Errors\Result<ListDelegatedAdministratorsResponse>>;
  public function ListDelegatedServicesForAccount(ListDelegatedServicesForAccountRequest $in): Awaitable<\Errors\Result<ListDelegatedServicesForAccountResponse>>;
  public function ListHandshakesForAccount(ListHandshakesForAccountRequest $in): Awaitable<\Errors\Result<ListHandshakesForAccountResponse>>;
  public function ListHandshakesForOrganization(ListHandshakesForOrganizationRequest $in): Awaitable<\Errors\Result<ListHandshakesForOrganizationResponse>>;
  public function ListOrganizationalUnitsForParent(ListOrganizationalUnitsForParentRequest $in): Awaitable<\Errors\Result<ListOrganizationalUnitsForParentResponse>>;
  public function ListParents(ListParentsRequest $in): Awaitable<\Errors\Result<ListParentsResponse>>;
  public function ListPolicies(ListPoliciesRequest $in): Awaitable<\Errors\Result<ListPoliciesResponse>>;
  public function ListPoliciesForTarget(ListPoliciesForTargetRequest $in): Awaitable<\Errors\Result<ListPoliciesForTargetResponse>>;
  public function ListRoots(ListRootsRequest $in): Awaitable<\Errors\Result<ListRootsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListTargetsForPolicy(ListTargetsForPolicyRequest $in): Awaitable<\Errors\Result<ListTargetsForPolicyResponse>>;
  public function MoveAccount(MoveAccountRequest $in): Awaitable<\Errors\Error>;
  public function RegisterDelegatedAdministrator(RegisterDelegatedAdministratorRequest $in): Awaitable<\Errors\Error>;
  public function RemoveAccountFromOrganization(RemoveAccountFromOrganizationRequest $in): Awaitable<\Errors\Error>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateOrganizationalUnit(UpdateOrganizationalUnitRequest $in): Awaitable<\Errors\Result<UpdateOrganizationalUnitResponse>>;
  public function UpdatePolicy(UpdatePolicyRequest $in): Awaitable<\Errors\Result<UpdatePolicyResponse>>;
}

class AWSOrganizationsNotInUseException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AcceptHandshakeRequest {
  public ?HandshakeId $handshake_id;

  public function __construct(shape(
    ?'handshake_id' => ?HandshakeId,
  ) $s = shape()) {
    $this->handshake_id = $s['handshake_id'] ?? '';
  }
}

class AcceptHandshakeResponse {
  public ?Handshake $handshake;

  public function __construct(shape(
    ?'handshake' => ?Handshake,
  ) $s = shape()) {
    $this->handshake = $s['handshake'] ?? null;
  }
}

class AccessDeniedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AccessDeniedForDependencyException {
  public ?ExceptionMessage $message;
  public ?AccessDeniedForDependencyExceptionReason $reason;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'reason' => ?AccessDeniedForDependencyExceptionReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

type AccessDeniedForDependencyExceptionReason = string;

class Account {
  public ?AccountArn $arn;
  public ?Email $email;
  public ?AccountId $id;
  public ?AccountJoinedMethod $joined_method;
  public ?Timestamp $joined_timestamp;
  public ?AccountName $name;
  public ?AccountStatus $status;

  public function __construct(shape(
    ?'arn' => ?AccountArn,
    ?'email' => ?Email,
    ?'id' => ?AccountId,
    ?'joined_method' => ?AccountJoinedMethod,
    ?'joined_timestamp' => ?Timestamp,
    ?'name' => ?AccountName,
    ?'status' => ?AccountStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->joined_method = $s['joined_method'] ?? '';
    $this->joined_timestamp = $s['joined_timestamp'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class AccountAlreadyRegisteredException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type AccountArn = string;

type AccountId = string;

type AccountJoinedMethod = string;

type AccountName = string;

class AccountNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AccountNotRegisteredException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AccountOwnerNotVerifiedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type AccountStatus = string;

type Accounts = vec<Account>;

type ActionType = string;

class AlreadyInOrganizationException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AttachPolicyRequest {
  public ?PolicyId $policy_id;
  public ?PolicyTargetId $target_id;

  public function __construct(shape(
    ?'policy_id' => ?PolicyId,
    ?'target_id' => ?PolicyTargetId,
  ) $s = shape()) {
    $this->policy_id = $s['policy_id'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
  }
}

type AwsManagedPolicy = bool;

class CancelHandshakeRequest {
  public ?HandshakeId $handshake_id;

  public function __construct(shape(
    ?'handshake_id' => ?HandshakeId,
  ) $s = shape()) {
    $this->handshake_id = $s['handshake_id'] ?? '';
  }
}

class CancelHandshakeResponse {
  public ?Handshake $handshake;

  public function __construct(shape(
    ?'handshake' => ?Handshake,
  ) $s = shape()) {
    $this->handshake = $s['handshake'] ?? null;
  }
}

class Child {
  public ?ChildId $id;
  public ?ChildType $type;

  public function __construct(shape(
    ?'id' => ?ChildId,
    ?'type' => ?ChildType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ChildId = string;

class ChildNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ChildType = string;

type Children = vec<Child>;

class ConcurrentModificationException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ConstraintViolationException {
  public ?ExceptionMessage $message;
  public ?ConstraintViolationExceptionReason $reason;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'reason' => ?ConstraintViolationExceptionReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

type ConstraintViolationExceptionReason = string;

type CreateAccountFailureReason = string;

class CreateAccountRequest {
  public ?AccountName $account_name;
  public ?Email $email;
  public ?IAMUserAccessToBilling $iam_user_access_to_billing;
  public ?RoleName $role_name;

  public function __construct(shape(
    ?'account_name' => ?AccountName,
    ?'email' => ?Email,
    ?'iam_user_access_to_billing' => ?IAMUserAccessToBilling,
    ?'role_name' => ?RoleName,
  ) $s = shape()) {
    $this->account_name = $s['account_name'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->iam_user_access_to_billing = $s['iam_user_access_to_billing'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

type CreateAccountRequestId = string;

class CreateAccountResponse {
  public ?CreateAccountStatus $create_account_status;

  public function __construct(shape(
    ?'create_account_status' => ?CreateAccountStatus,
  ) $s = shape()) {
    $this->create_account_status = $s['create_account_status'] ?? null;
  }
}

type CreateAccountState = string;

type CreateAccountStates = vec<CreateAccountState>;

class CreateAccountStatus {
  public ?AccountId $account_id;
  public ?AccountName $account_name;
  public ?Timestamp $completed_timestamp;
  public ?CreateAccountFailureReason $failure_reason;
  public ?AccountId $gov_cloud_account_id;
  public ?CreateAccountRequestId $id;
  public ?Timestamp $requested_timestamp;
  public ?CreateAccountState $state;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'account_name' => ?AccountName,
    ?'completed_timestamp' => ?Timestamp,
    ?'failure_reason' => ?CreateAccountFailureReason,
    ?'gov_cloud_account_id' => ?AccountId,
    ?'id' => ?CreateAccountRequestId,
    ?'requested_timestamp' => ?Timestamp,
    ?'state' => ?CreateAccountState,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->account_name = $s['account_name'] ?? '';
    $this->completed_timestamp = $s['completed_timestamp'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->gov_cloud_account_id = $s['gov_cloud_account_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->requested_timestamp = $s['requested_timestamp'] ?? 0;
    $this->state = $s['state'] ?? '';
  }
}

class CreateAccountStatusNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type CreateAccountStatuses = vec<CreateAccountStatus>;

class CreateGovCloudAccountRequest {
  public ?AccountName $account_name;
  public ?Email $email;
  public ?IAMUserAccessToBilling $iam_user_access_to_billing;
  public ?RoleName $role_name;

  public function __construct(shape(
    ?'account_name' => ?AccountName,
    ?'email' => ?Email,
    ?'iam_user_access_to_billing' => ?IAMUserAccessToBilling,
    ?'role_name' => ?RoleName,
  ) $s = shape()) {
    $this->account_name = $s['account_name'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->iam_user_access_to_billing = $s['iam_user_access_to_billing'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class CreateGovCloudAccountResponse {
  public ?CreateAccountStatus $create_account_status;

  public function __construct(shape(
    ?'create_account_status' => ?CreateAccountStatus,
  ) $s = shape()) {
    $this->create_account_status = $s['create_account_status'] ?? null;
  }
}

class CreateOrganizationRequest {
  public ?OrganizationFeatureSet $feature_set;

  public function __construct(shape(
    ?'feature_set' => ?OrganizationFeatureSet,
  ) $s = shape()) {
    $this->feature_set = $s['feature_set'] ?? '';
  }
}

class CreateOrganizationResponse {
  public ?Organization $organization;

  public function __construct(shape(
    ?'organization' => ?Organization,
  ) $s = shape()) {
    $this->organization = $s['organization'] ?? null;
  }
}

class CreateOrganizationalUnitRequest {
  public ?OrganizationalUnitName $name;
  public ?ParentId $parent_id;

  public function __construct(shape(
    ?'name' => ?OrganizationalUnitName,
    ?'parent_id' => ?ParentId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->parent_id = $s['parent_id'] ?? '';
  }
}

class CreateOrganizationalUnitResponse {
  public ?OrganizationalUnit $organizational_unit;

  public function __construct(shape(
    ?'organizational_unit' => ?OrganizationalUnit,
  ) $s = shape()) {
    $this->organizational_unit = $s['organizational_unit'] ?? null;
  }
}

class CreatePolicyRequest {
  public ?PolicyContent $content;
  public ?PolicyDescription $description;
  public ?PolicyName $name;
  public ?PolicyType $type;

  public function __construct(shape(
    ?'content' => ?PolicyContent,
    ?'description' => ?PolicyDescription,
    ?'name' => ?PolicyName,
    ?'type' => ?PolicyType,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class CreatePolicyResponse {
  public ?Policy $policy;

  public function __construct(shape(
    ?'policy' => ?Policy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
  }
}

class DeclineHandshakeRequest {
  public ?HandshakeId $handshake_id;

  public function __construct(shape(
    ?'handshake_id' => ?HandshakeId,
  ) $s = shape()) {
    $this->handshake_id = $s['handshake_id'] ?? '';
  }
}

class DeclineHandshakeResponse {
  public ?Handshake $handshake;

  public function __construct(shape(
    ?'handshake' => ?Handshake,
  ) $s = shape()) {
    $this->handshake = $s['handshake'] ?? null;
  }
}

class DelegatedAdministrator {
  public ?AccountArn $arn;
  public ?Timestamp $delegation_enabled_date;
  public ?Email $email;
  public ?AccountId $id;
  public ?AccountJoinedMethod $joined_method;
  public ?Timestamp $joined_timestamp;
  public ?AccountName $name;
  public ?AccountStatus $status;

  public function __construct(shape(
    ?'arn' => ?AccountArn,
    ?'delegation_enabled_date' => ?Timestamp,
    ?'email' => ?Email,
    ?'id' => ?AccountId,
    ?'joined_method' => ?AccountJoinedMethod,
    ?'joined_timestamp' => ?Timestamp,
    ?'name' => ?AccountName,
    ?'status' => ?AccountStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->delegation_enabled_date = $s['delegation_enabled_date'] ?? 0;
    $this->email = $s['email'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->joined_method = $s['joined_method'] ?? '';
    $this->joined_timestamp = $s['joined_timestamp'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DelegatedAdministrators = vec<DelegatedAdministrator>;

class DelegatedService {
  public ?Timestamp $delegation_enabled_date;
  public ?ServicePrincipal $service_principal;

  public function __construct(shape(
    ?'delegation_enabled_date' => ?Timestamp,
    ?'service_principal' => ?ServicePrincipal,
  ) $s = shape()) {
    $this->delegation_enabled_date = $s['delegation_enabled_date'] ?? 0;
    $this->service_principal = $s['service_principal'] ?? '';
  }
}

type DelegatedServices = vec<DelegatedService>;

class DeleteOrganizationalUnitRequest {
  public ?OrganizationalUnitId $organizational_unit_id;

  public function __construct(shape(
    ?'organizational_unit_id' => ?OrganizationalUnitId,
  ) $s = shape()) {
    $this->organizational_unit_id = $s['organizational_unit_id'] ?? '';
  }
}

class DeletePolicyRequest {
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class DeregisterDelegatedAdministratorRequest {
  public ?AccountId $account_id;
  public ?ServicePrincipal $service_principal;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'service_principal' => ?ServicePrincipal,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->service_principal = $s['service_principal'] ?? '';
  }
}

class DescribeAccountRequest {
  public ?AccountId $account_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
  }
}

class DescribeAccountResponse {
  public ?Account $account;

  public function __construct(shape(
    ?'account' => ?Account,
  ) $s = shape()) {
    $this->account = $s['account'] ?? null;
  }
}

class DescribeCreateAccountStatusRequest {
  public ?CreateAccountRequestId $create_account_request_id;

  public function __construct(shape(
    ?'create_account_request_id' => ?CreateAccountRequestId,
  ) $s = shape()) {
    $this->create_account_request_id = $s['create_account_request_id'] ?? '';
  }
}

class DescribeCreateAccountStatusResponse {
  public ?CreateAccountStatus $create_account_status;

  public function __construct(shape(
    ?'create_account_status' => ?CreateAccountStatus,
  ) $s = shape()) {
    $this->create_account_status = $s['create_account_status'] ?? null;
  }
}

class DescribeEffectivePolicyRequest {
  public ?EffectivePolicyType $policy_type;
  public ?PolicyTargetId $target_id;

  public function __construct(shape(
    ?'policy_type' => ?EffectivePolicyType,
    ?'target_id' => ?PolicyTargetId,
  ) $s = shape()) {
    $this->policy_type = $s['policy_type'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
  }
}

class DescribeEffectivePolicyResponse {
  public ?EffectivePolicy $effective_policy;

  public function __construct(shape(
    ?'effective_policy' => ?EffectivePolicy,
  ) $s = shape()) {
    $this->effective_policy = $s['effective_policy'] ?? null;
  }
}

class DescribeHandshakeRequest {
  public ?HandshakeId $handshake_id;

  public function __construct(shape(
    ?'handshake_id' => ?HandshakeId,
  ) $s = shape()) {
    $this->handshake_id = $s['handshake_id'] ?? '';
  }
}

class DescribeHandshakeResponse {
  public ?Handshake $handshake;

  public function __construct(shape(
    ?'handshake' => ?Handshake,
  ) $s = shape()) {
    $this->handshake = $s['handshake'] ?? null;
  }
}

class DescribeOrganizationResponse {
  public ?Organization $organization;

  public function __construct(shape(
    ?'organization' => ?Organization,
  ) $s = shape()) {
    $this->organization = $s['organization'] ?? null;
  }
}

class DescribeOrganizationalUnitRequest {
  public ?OrganizationalUnitId $organizational_unit_id;

  public function __construct(shape(
    ?'organizational_unit_id' => ?OrganizationalUnitId,
  ) $s = shape()) {
    $this->organizational_unit_id = $s['organizational_unit_id'] ?? '';
  }
}

class DescribeOrganizationalUnitResponse {
  public ?OrganizationalUnit $organizational_unit;

  public function __construct(shape(
    ?'organizational_unit' => ?OrganizationalUnit,
  ) $s = shape()) {
    $this->organizational_unit = $s['organizational_unit'] ?? null;
  }
}

class DescribePolicyRequest {
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class DescribePolicyResponse {
  public ?Policy $policy;

  public function __construct(shape(
    ?'policy' => ?Policy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
  }
}

class DestinationParentNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DetachPolicyRequest {
  public ?PolicyId $policy_id;
  public ?PolicyTargetId $target_id;

  public function __construct(shape(
    ?'policy_id' => ?PolicyId,
    ?'target_id' => ?PolicyTargetId,
  ) $s = shape()) {
    $this->policy_id = $s['policy_id'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
  }
}

class DisableAWSServiceAccessRequest {
  public ?ServicePrincipal $service_principal;

  public function __construct(shape(
    ?'service_principal' => ?ServicePrincipal,
  ) $s = shape()) {
    $this->service_principal = $s['service_principal'] ?? '';
  }
}

class DisablePolicyTypeRequest {
  public ?PolicyType $policy_type;
  public ?RootId $root_id;

  public function __construct(shape(
    ?'policy_type' => ?PolicyType,
    ?'root_id' => ?RootId,
  ) $s = shape()) {
    $this->policy_type = $s['policy_type'] ?? '';
    $this->root_id = $s['root_id'] ?? '';
  }
}

class DisablePolicyTypeResponse {
  public ?Root $root;

  public function __construct(shape(
    ?'root' => ?Root,
  ) $s = shape()) {
    $this->root = $s['root'] ?? null;
  }
}

class DuplicateAccountException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DuplicateHandshakeException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DuplicateOrganizationalUnitException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DuplicatePolicyAttachmentException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DuplicatePolicyException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class EffectivePolicy {
  public ?Timestamp $last_updated_timestamp;
  public ?PolicyContent $policy_content;
  public ?EffectivePolicyType $policy_type;
  public ?PolicyTargetId $target_id;

  public function __construct(shape(
    ?'last_updated_timestamp' => ?Timestamp,
    ?'policy_content' => ?PolicyContent,
    ?'policy_type' => ?EffectivePolicyType,
    ?'target_id' => ?PolicyTargetId,
  ) $s = shape()) {
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? 0;
    $this->policy_content = $s['policy_content'] ?? '';
    $this->policy_type = $s['policy_type'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
  }
}

class EffectivePolicyNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type EffectivePolicyType = string;

type Email = string;

class EnableAWSServiceAccessRequest {
  public ?ServicePrincipal $service_principal;

  public function __construct(shape(
    ?'service_principal' => ?ServicePrincipal,
  ) $s = shape()) {
    $this->service_principal = $s['service_principal'] ?? '';
  }
}

class EnableAllFeaturesRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableAllFeaturesResponse {
  public ?Handshake $handshake;

  public function __construct(shape(
    ?'handshake' => ?Handshake,
  ) $s = shape()) {
    $this->handshake = $s['handshake'] ?? null;
  }
}

class EnablePolicyTypeRequest {
  public ?PolicyType $policy_type;
  public ?RootId $root_id;

  public function __construct(shape(
    ?'policy_type' => ?PolicyType,
    ?'root_id' => ?RootId,
  ) $s = shape()) {
    $this->policy_type = $s['policy_type'] ?? '';
    $this->root_id = $s['root_id'] ?? '';
  }
}

class EnablePolicyTypeResponse {
  public ?Root $root;

  public function __construct(shape(
    ?'root' => ?Root,
  ) $s = shape()) {
    $this->root = $s['root'] ?? null;
  }
}

class EnabledServicePrincipal {
  public ?Timestamp $date_enabled;
  public ?ServicePrincipal $service_principal;

  public function __construct(shape(
    ?'date_enabled' => ?Timestamp,
    ?'service_principal' => ?ServicePrincipal,
  ) $s = shape()) {
    $this->date_enabled = $s['date_enabled'] ?? 0;
    $this->service_principal = $s['service_principal'] ?? '';
  }
}

type EnabledServicePrincipals = vec<EnabledServicePrincipal>;

type ExceptionMessage = string;

type ExceptionType = string;

class FinalizingOrganizationException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type GenericArn = string;

class Handshake {
  public ?ActionType $action;
  public ?HandshakeArn $arn;
  public ?Timestamp $expiration_timestamp;
  public ?HandshakeId $id;
  public ?HandshakeParties $parties;
  public ?Timestamp $requested_timestamp;
  public ?HandshakeResources $resources;
  public ?HandshakeState $state;

  public function __construct(shape(
    ?'action' => ?ActionType,
    ?'arn' => ?HandshakeArn,
    ?'expiration_timestamp' => ?Timestamp,
    ?'id' => ?HandshakeId,
    ?'parties' => ?HandshakeParties,
    ?'requested_timestamp' => ?Timestamp,
    ?'resources' => ?HandshakeResources,
    ?'state' => ?HandshakeState,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->expiration_timestamp = $s['expiration_timestamp'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->parties = $s['parties'] ?? vec[];
    $this->requested_timestamp = $s['requested_timestamp'] ?? 0;
    $this->resources = $s['resources'] ?? vec[];
    $this->state = $s['state'] ?? '';
  }
}

class HandshakeAlreadyInStateException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type HandshakeArn = string;

class HandshakeConstraintViolationException {
  public ?ExceptionMessage $message;
  public ?HandshakeConstraintViolationExceptionReason $reason;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'reason' => ?HandshakeConstraintViolationExceptionReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

type HandshakeConstraintViolationExceptionReason = string;

class HandshakeFilter {
  public ?ActionType $action_type;
  public ?HandshakeId $parent_handshake_id;

  public function __construct(shape(
    ?'action_type' => ?ActionType,
    ?'parent_handshake_id' => ?HandshakeId,
  ) $s = shape()) {
    $this->action_type = $s['action_type'] ?? '';
    $this->parent_handshake_id = $s['parent_handshake_id'] ?? '';
  }
}

type HandshakeId = string;

class HandshakeNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type HandshakeNotes = string;

type HandshakeParties = vec<HandshakeParty>;

class HandshakeParty {
  public ?HandshakePartyId $id;
  public ?HandshakePartyType $type;

  public function __construct(shape(
    ?'id' => ?HandshakePartyId,
    ?'type' => ?HandshakePartyType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type HandshakePartyId = string;

type HandshakePartyType = string;

class HandshakeResource {
  public ?HandshakeResources $resources;
  public ?HandshakeResourceType $type;
  public ?HandshakeResourceValue $value;

  public function __construct(shape(
    ?'resources' => ?HandshakeResources,
    ?'type' => ?HandshakeResourceType,
    ?'value' => ?HandshakeResourceValue,
  ) $s = shape()) {
    $this->resources = $s['resources'] ?? vec[];
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type HandshakeResourceType = string;

type HandshakeResourceValue = string;

type HandshakeResources = vec<HandshakeResource>;

type HandshakeState = string;

type Handshakes = vec<Handshake>;

type IAMUserAccessToBilling = string;

class InvalidHandshakeTransitionException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInputException {
  public ?ExceptionMessage $message;
  public ?InvalidInputExceptionReason $reason;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'reason' => ?InvalidInputExceptionReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

type InvalidInputExceptionReason = string;

class InviteAccountToOrganizationRequest {
  public ?HandshakeNotes $notes;
  public ?HandshakeParty $target;

  public function __construct(shape(
    ?'notes' => ?HandshakeNotes,
    ?'target' => ?HandshakeParty,
  ) $s = shape()) {
    $this->notes = $s['notes'] ?? '';
    $this->target = $s['target'] ?? null;
  }
}

class InviteAccountToOrganizationResponse {
  public ?Handshake $handshake;

  public function __construct(shape(
    ?'handshake' => ?Handshake,
  ) $s = shape()) {
    $this->handshake = $s['handshake'] ?? null;
  }
}

class ListAWSServiceAccessForOrganizationRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAWSServiceAccessForOrganizationResponse {
  public ?EnabledServicePrincipals $enabled_service_principals;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'enabled_service_principals' => ?EnabledServicePrincipals,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->enabled_service_principals = $s['enabled_service_principals'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAccountsForParentRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ParentId $parent_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'parent_id' => ?ParentId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->parent_id = $s['parent_id'] ?? '';
  }
}

class ListAccountsForParentResponse {
  public ?Accounts $accounts;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'accounts' => ?Accounts,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->accounts = $s['accounts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAccountsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAccountsResponse {
  public ?Accounts $accounts;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'accounts' => ?Accounts,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->accounts = $s['accounts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListChildrenRequest {
  public ?ChildType $child_type;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ParentId $parent_id;

  public function __construct(shape(
    ?'child_type' => ?ChildType,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'parent_id' => ?ParentId,
  ) $s = shape()) {
    $this->child_type = $s['child_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->parent_id = $s['parent_id'] ?? '';
  }
}

class ListChildrenResponse {
  public ?Children $children;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'children' => ?Children,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->children = $s['children'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCreateAccountStatusRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?CreateAccountStates $states;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'states' => ?CreateAccountStates,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->states = $s['states'] ?? vec[];
  }
}

class ListCreateAccountStatusResponse {
  public ?CreateAccountStatuses $create_account_statuses;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'create_account_statuses' => ?CreateAccountStatuses,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->create_account_statuses = $s['create_account_statuses'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDelegatedAdministratorsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ServicePrincipal $service_principal;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'service_principal' => ?ServicePrincipal,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_principal = $s['service_principal'] ?? '';
  }
}

class ListDelegatedAdministratorsResponse {
  public ?DelegatedAdministrators $delegated_administrators;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'delegated_administrators' => ?DelegatedAdministrators,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->delegated_administrators = $s['delegated_administrators'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDelegatedServicesForAccountRequest {
  public ?AccountId $account_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDelegatedServicesForAccountResponse {
  public ?DelegatedServices $delegated_services;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'delegated_services' => ?DelegatedServices,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->delegated_services = $s['delegated_services'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHandshakesForAccountRequest {
  public ?HandshakeFilter $filter;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filter' => ?HandshakeFilter,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHandshakesForAccountResponse {
  public ?Handshakes $handshakes;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'handshakes' => ?Handshakes,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->handshakes = $s['handshakes'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHandshakesForOrganizationRequest {
  public ?HandshakeFilter $filter;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filter' => ?HandshakeFilter,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHandshakesForOrganizationResponse {
  public ?Handshakes $handshakes;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'handshakes' => ?Handshakes,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->handshakes = $s['handshakes'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOrganizationalUnitsForParentRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ParentId $parent_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'parent_id' => ?ParentId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->parent_id = $s['parent_id'] ?? '';
  }
}

class ListOrganizationalUnitsForParentResponse {
  public ?NextToken $next_token;
  public ?OrganizationalUnits $organizational_units;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'organizational_units' => ?OrganizationalUnits,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->organizational_units = $s['organizational_units'] ?? vec[];
  }
}

class ListParentsRequest {
  public ?ChildId $child_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'child_id' => ?ChildId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->child_id = $s['child_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListParentsResponse {
  public ?NextToken $next_token;
  public ?Parents $parents;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'parents' => ?Parents,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->parents = $s['parents'] ?? vec[];
  }
}

class ListPoliciesForTargetRequest {
  public ?PolicyType $filter;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?PolicyTargetId $target_id;

  public function __construct(shape(
    ?'filter' => ?PolicyType,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'target_id' => ?PolicyTargetId,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
  }
}

class ListPoliciesForTargetResponse {
  public ?NextToken $next_token;
  public ?Policies $policies;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'policies' => ?Policies,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->policies = $s['policies'] ?? vec[];
  }
}

class ListPoliciesRequest {
  public ?PolicyType $filter;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filter' => ?PolicyType,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPoliciesResponse {
  public ?NextToken $next_token;
  public ?Policies $policies;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'policies' => ?Policies,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->policies = $s['policies'] ?? vec[];
  }
}

class ListRootsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRootsResponse {
  public ?NextToken $next_token;
  public ?Roots $roots;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'roots' => ?Roots,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->roots = $s['roots'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?NextToken $next_token;
  public ?TaggableResourceId $resource_id;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'resource_id' => ?TaggableResourceId,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?NextToken $next_token;
  public ?Tags $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListTargetsForPolicyRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class ListTargetsForPolicyResponse {
  public ?NextToken $next_token;
  public ?PolicyTargets $targets;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'targets' => ?PolicyTargets,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->targets = $s['targets'] ?? vec[];
  }
}

class MalformedPolicyDocumentException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class MasterCannotLeaveOrganizationException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type MaxResults = int;

class MoveAccountRequest {
  public ?AccountId $account_id;
  public ?ParentId $destination_parent_id;
  public ?ParentId $source_parent_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'destination_parent_id' => ?ParentId,
    ?'source_parent_id' => ?ParentId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->destination_parent_id = $s['destination_parent_id'] ?? '';
    $this->source_parent_id = $s['source_parent_id'] ?? '';
  }
}

type NextToken = string;

class Organization {
  public ?OrganizationArn $arn;
  public ?PolicyTypes $available_policy_types;
  public ?OrganizationFeatureSet $feature_set;
  public ?OrganizationId $id;
  public ?AccountArn $master_account_arn;
  public ?Email $master_account_email;
  public ?AccountId $master_account_id;

  public function __construct(shape(
    ?'arn' => ?OrganizationArn,
    ?'available_policy_types' => ?PolicyTypes,
    ?'feature_set' => ?OrganizationFeatureSet,
    ?'id' => ?OrganizationId,
    ?'master_account_arn' => ?AccountArn,
    ?'master_account_email' => ?Email,
    ?'master_account_id' => ?AccountId,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->available_policy_types = $s['available_policy_types'] ?? vec[];
    $this->feature_set = $s['feature_set'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->master_account_arn = $s['master_account_arn'] ?? '';
    $this->master_account_email = $s['master_account_email'] ?? '';
    $this->master_account_id = $s['master_account_id'] ?? '';
  }
}

type OrganizationArn = string;

type OrganizationFeatureSet = string;

type OrganizationId = string;

class OrganizationNotEmptyException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OrganizationalUnit {
  public ?OrganizationalUnitArn $arn;
  public ?OrganizationalUnitId $id;
  public ?OrganizationalUnitName $name;

  public function __construct(shape(
    ?'arn' => ?OrganizationalUnitArn,
    ?'id' => ?OrganizationalUnitId,
    ?'name' => ?OrganizationalUnitName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type OrganizationalUnitArn = string;

type OrganizationalUnitId = string;

type OrganizationalUnitName = string;

class OrganizationalUnitNotEmptyException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OrganizationalUnitNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type OrganizationalUnits = vec<OrganizationalUnit>;

class Parent {
  public ?ParentId $id;
  public ?ParentType $type;

  public function __construct(shape(
    ?'id' => ?ParentId,
    ?'type' => ?ParentType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ParentId = string;

class ParentNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ParentType = string;

type Parents = vec<Parent>;

type Policies = vec<PolicySummary>;

class Policy {
  public ?PolicyContent $content;
  public ?PolicySummary $policy_summary;

  public function __construct(shape(
    ?'content' => ?PolicyContent,
    ?'policy_summary' => ?PolicySummary,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->policy_summary = $s['policy_summary'] ?? null;
  }
}

type PolicyArn = string;

class PolicyChangesInProgressException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PolicyContent = string;

type PolicyDescription = string;

type PolicyId = string;

class PolicyInUseException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PolicyName = string;

class PolicyNotAttachedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PolicyNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PolicySummary {
  public ?PolicyArn $arn;
  public ?AwsManagedPolicy $aws_managed;
  public ?PolicyDescription $description;
  public ?PolicyId $id;
  public ?PolicyName $name;
  public ?PolicyType $type;

  public function __construct(shape(
    ?'arn' => ?PolicyArn,
    ?'aws_managed' => ?AwsManagedPolicy,
    ?'description' => ?PolicyDescription,
    ?'id' => ?PolicyId,
    ?'name' => ?PolicyName,
    ?'type' => ?PolicyType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->aws_managed = $s['aws_managed'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type PolicyTargetId = string;

class PolicyTargetSummary {
  public ?GenericArn $arn;
  public ?TargetName $name;
  public ?PolicyTargetId $target_id;
  public ?TargetType $type;

  public function __construct(shape(
    ?'arn' => ?GenericArn,
    ?'name' => ?TargetName,
    ?'target_id' => ?PolicyTargetId,
    ?'type' => ?TargetType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type PolicyTargets = vec<PolicyTargetSummary>;

type PolicyType = string;

class PolicyTypeAlreadyEnabledException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PolicyTypeNotAvailableForOrganizationException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PolicyTypeNotEnabledException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PolicyTypeStatus = string;

class PolicyTypeSummary {
  public ?PolicyTypeStatus $status;
  public ?PolicyType $type;

  public function __construct(shape(
    ?'status' => ?PolicyTypeStatus,
    ?'type' => ?PolicyType,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type PolicyTypes = vec<PolicyTypeSummary>;

class RegisterDelegatedAdministratorRequest {
  public ?AccountId $account_id;
  public ?ServicePrincipal $service_principal;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'service_principal' => ?ServicePrincipal,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->service_principal = $s['service_principal'] ?? '';
  }
}

class RemoveAccountFromOrganizationRequest {
  public ?AccountId $account_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
  }
}

type RoleName = string;

class Root {
  public ?RootArn $arn;
  public ?RootId $id;
  public ?RootName $name;
  public ?PolicyTypes $policy_types;

  public function __construct(shape(
    ?'arn' => ?RootArn,
    ?'id' => ?RootId,
    ?'name' => ?RootName,
    ?'policy_types' => ?PolicyTypes,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->policy_types = $s['policy_types'] ?? vec[];
  }
}

type RootArn = string;

type RootId = string;

type RootName = string;

class RootNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Roots = vec<Root>;

class ServiceException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ServicePrincipal = string;

class SourceParentNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

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

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public ?TaggableResourceId $resource_id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_id' => ?TaggableResourceId,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type TagValue = string;

type TaggableResourceId = string;

type Tags = vec<Tag>;

type TargetName = string;

class TargetNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TargetType = string;

type Timestamp = int;

class TooManyRequestsException {
  public ?ExceptionMessage $message;
  public ?ExceptionType $type;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'type' => ?ExceptionType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class UnsupportedAPIEndpointException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?TaggableResourceId $resource_id;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_id' => ?TaggableResourceId,
    ?'tag_keys' => ?TagKeys,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateOrganizationalUnitRequest {
  public ?OrganizationalUnitName $name;
  public ?OrganizationalUnitId $organizational_unit_id;

  public function __construct(shape(
    ?'name' => ?OrganizationalUnitName,
    ?'organizational_unit_id' => ?OrganizationalUnitId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->organizational_unit_id = $s['organizational_unit_id'] ?? '';
  }
}

class UpdateOrganizationalUnitResponse {
  public ?OrganizationalUnit $organizational_unit;

  public function __construct(shape(
    ?'organizational_unit' => ?OrganizationalUnit,
  ) $s = shape()) {
    $this->organizational_unit = $s['organizational_unit'] ?? null;
  }
}

class UpdatePolicyRequest {
  public ?PolicyContent $content;
  public ?PolicyDescription $description;
  public ?PolicyName $name;
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'content' => ?PolicyContent,
    ?'description' => ?PolicyDescription,
    ?'name' => ?PolicyName,
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class UpdatePolicyResponse {
  public ?Policy $policy;

  public function __construct(shape(
    ?'policy' => ?Policy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
  }
}

