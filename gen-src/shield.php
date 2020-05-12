<?hh // strict
namespace slack\aws\shield;

interface Shield {
  public function AssociateDRTLogBucket(AssociateDRTLogBucketRequest $in): Awaitable<\Errors\Result<AssociateDRTLogBucketResponse>>;
  public function AssociateDRTRole(AssociateDRTRoleRequest $in): Awaitable<\Errors\Result<AssociateDRTRoleResponse>>;
  public function AssociateHealthCheck(AssociateHealthCheckRequest $in): Awaitable<\Errors\Result<AssociateHealthCheckResponse>>;
  public function CreateProtection(CreateProtectionRequest $in): Awaitable<\Errors\Result<CreateProtectionResponse>>;
  public function CreateSubscription(CreateSubscriptionRequest $in): Awaitable<\Errors\Result<CreateSubscriptionResponse>>;
  public function DeleteProtection(DeleteProtectionRequest $in): Awaitable<\Errors\Result<DeleteProtectionResponse>>;
  public function DeleteSubscription(DeleteSubscriptionRequest $in): Awaitable<\Errors\Result<DeleteSubscriptionResponse>>;
  public function DescribeAttack(DescribeAttackRequest $in): Awaitable<\Errors\Result<DescribeAttackResponse>>;
  public function DescribeDRTAccess(DescribeDRTAccessRequest $in): Awaitable<\Errors\Result<DescribeDRTAccessResponse>>;
  public function DescribeEmergencyContactSettings(DescribeEmergencyContactSettingsRequest $in): Awaitable<\Errors\Result<DescribeEmergencyContactSettingsResponse>>;
  public function DescribeProtection(DescribeProtectionRequest $in): Awaitable<\Errors\Result<DescribeProtectionResponse>>;
  public function DescribeSubscription(DescribeSubscriptionRequest $in): Awaitable<\Errors\Result<DescribeSubscriptionResponse>>;
  public function DisassociateDRTLogBucket(DisassociateDRTLogBucketRequest $in): Awaitable<\Errors\Result<DisassociateDRTLogBucketResponse>>;
  public function DisassociateDRTRole(DisassociateDRTRoleRequest $in): Awaitable<\Errors\Result<DisassociateDRTRoleResponse>>;
  public function DisassociateHealthCheck(DisassociateHealthCheckRequest $in): Awaitable<\Errors\Result<DisassociateHealthCheckResponse>>;
  public function GetSubscriptionState(GetSubscriptionStateRequest $in): Awaitable<\Errors\Result<GetSubscriptionStateResponse>>;
  public function ListAttacks(ListAttacksRequest $in): Awaitable<\Errors\Result<ListAttacksResponse>>;
  public function ListProtections(ListProtectionsRequest $in): Awaitable<\Errors\Result<ListProtectionsResponse>>;
  public function UpdateEmergencyContactSettings(UpdateEmergencyContactSettingsRequest $in): Awaitable<\Errors\Result<UpdateEmergencyContactSettingsResponse>>;
  public function UpdateSubscription(UpdateSubscriptionRequest $in): Awaitable<\Errors\Result<UpdateSubscriptionResponse>>;
}

class AccessDeniedException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AccessDeniedForDependencyException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AssociateDRTLogBucketRequest {
  public ?LogBucket $log_bucket;

  public function __construct(shape(
    ?'log_bucket' => ?LogBucket,
  ) $s = shape()) {
    $this->log_bucket = $s['log_bucket'] ?? '';
  }
}

class AssociateDRTLogBucketResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateDRTRoleRequest {
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class AssociateDRTRoleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateHealthCheckRequest {
  public ?HealthCheckArn $health_check_arn;
  public ?ProtectionId $protection_id;

  public function __construct(shape(
    ?'health_check_arn' => ?HealthCheckArn,
    ?'protection_id' => ?ProtectionId,
  ) $s = shape()) {
    $this->health_check_arn = $s['health_check_arn'] ?? '';
    $this->protection_id = $s['protection_id'] ?? '';
  }
}

class AssociateHealthCheckResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AttackDetail {
  public ?SummarizedCounterList $attack_counters;
  public ?AttackId $attack_id;
  public ?AttackProperties $attack_properties;
  public ?AttackTimestamp $end_time;
  public ?MitigationList $mitigations;
  public ?ResourceArn $resource_arn;
  public ?AttackTimestamp $start_time;
  public ?SubResourceSummaryList $sub_resources;

  public function __construct(shape(
    ?'attack_counters' => ?SummarizedCounterList,
    ?'attack_id' => ?AttackId,
    ?'attack_properties' => ?AttackProperties,
    ?'end_time' => ?AttackTimestamp,
    ?'mitigations' => ?MitigationList,
    ?'resource_arn' => ?ResourceArn,
    ?'start_time' => ?AttackTimestamp,
    ?'sub_resources' => ?SubResourceSummaryList,
  ) $s = shape()) {
    $this->attack_counters = $s['attack_counters'] ?? vec[];
    $this->attack_id = $s['attack_id'] ?? '';
    $this->attack_properties = $s['attack_properties'] ?? vec[];
    $this->end_time = $s['end_time'] ?? 0;
    $this->mitigations = $s['mitigations'] ?? vec[];
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->sub_resources = $s['sub_resources'] ?? vec[];
  }
}

type AttackId = string;

type AttackLayer = string;

type AttackProperties = vec<AttackProperty>;

class AttackProperty {
  public ?AttackLayer $attack_layer;
  public ?AttackPropertyIdentifier $attack_property_identifier;
  public ?TopContributors $top_contributors;
  public ?Long $total;
  public ?Unit $unit;

  public function __construct(shape(
    ?'attack_layer' => ?AttackLayer,
    ?'attack_property_identifier' => ?AttackPropertyIdentifier,
    ?'top_contributors' => ?TopContributors,
    ?'total' => ?Long,
    ?'unit' => ?Unit,
  ) $s = shape()) {
    $this->attack_layer = $s['attack_layer'] ?? '';
    $this->attack_property_identifier = $s['attack_property_identifier'] ?? '';
    $this->top_contributors = $s['top_contributors'] ?? vec[];
    $this->total = $s['total'] ?? 0;
    $this->unit = $s['unit'] ?? '';
  }
}

type AttackPropertyIdentifier = string;

type AttackSummaries = vec<AttackSummary>;

class AttackSummary {
  public string $attack_id;
  public ?AttackVectorDescriptionList $attack_vectors;
  public ?AttackTimestamp $end_time;
  public string $resource_arn;
  public ?AttackTimestamp $start_time;

  public function __construct(shape(
    ?'attack_id' => string,
    ?'attack_vectors' => ?AttackVectorDescriptionList,
    ?'end_time' => ?AttackTimestamp,
    ?'resource_arn' => string,
    ?'start_time' => ?AttackTimestamp,
  ) $s = shape()) {
    $this->attack_id = $s['attack_id'] ?? '';
    $this->attack_vectors = $s['attack_vectors'] ?? vec[];
    $this->end_time = $s['end_time'] ?? 0;
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

type AttackTimestamp = int;

class AttackVectorDescription {
  public string $vector_type;

  public function __construct(shape(
    ?'vector_type' => string,
  ) $s = shape()) {
    $this->vector_type = $s['vector_type'] ?? '';
  }
}

type AttackVectorDescriptionList = vec<AttackVectorDescription>;

type AutoRenew = string;

class Contributor {
  public string $name;
  public ?Long $value;

  public function __construct(shape(
    ?'name' => string,
    ?'value' => ?Long,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? 0;
  }
}

class CreateProtectionRequest {
  public ?ProtectionName $name;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'name' => ?ProtectionName,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class CreateProtectionResponse {
  public ?ProtectionId $protection_id;

  public function __construct(shape(
    ?'protection_id' => ?ProtectionId,
  ) $s = shape()) {
    $this->protection_id = $s['protection_id'] ?? '';
  }
}

class CreateSubscriptionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateSubscriptionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteProtectionRequest {
  public ?ProtectionId $protection_id;

  public function __construct(shape(
    ?'protection_id' => ?ProtectionId,
  ) $s = shape()) {
    $this->protection_id = $s['protection_id'] ?? '';
  }
}

class DeleteProtectionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSubscriptionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSubscriptionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAttackRequest {
  public ?AttackId $attack_id;

  public function __construct(shape(
    ?'attack_id' => ?AttackId,
  ) $s = shape()) {
    $this->attack_id = $s['attack_id'] ?? '';
  }
}

class DescribeAttackResponse {
  public ?AttackDetail $attack;

  public function __construct(shape(
    ?'attack' => ?AttackDetail,
  ) $s = shape()) {
    $this->attack = $s['attack'] ?? null;
  }
}

class DescribeDRTAccessRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeDRTAccessResponse {
  public ?LogBucketList $log_bucket_list;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'log_bucket_list' => ?LogBucketList,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->log_bucket_list = $s['log_bucket_list'] ?? vec[];
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class DescribeEmergencyContactSettingsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeEmergencyContactSettingsResponse {
  public ?EmergencyContactList $emergency_contact_list;

  public function __construct(shape(
    ?'emergency_contact_list' => ?EmergencyContactList,
  ) $s = shape()) {
    $this->emergency_contact_list = $s['emergency_contact_list'] ?? vec[];
  }
}

class DescribeProtectionRequest {
  public ?ProtectionId $protection_id;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'protection_id' => ?ProtectionId,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->protection_id = $s['protection_id'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class DescribeProtectionResponse {
  public ?Protection $protection;

  public function __construct(shape(
    ?'protection' => ?Protection,
  ) $s = shape()) {
    $this->protection = $s['protection'] ?? null;
  }
}

class DescribeSubscriptionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeSubscriptionResponse {
  public ?Subscription $subscription;

  public function __construct(shape(
    ?'subscription' => ?Subscription,
  ) $s = shape()) {
    $this->subscription = $s['subscription'] ?? null;
  }
}

class DisassociateDRTLogBucketRequest {
  public ?LogBucket $log_bucket;

  public function __construct(shape(
    ?'log_bucket' => ?LogBucket,
  ) $s = shape()) {
    $this->log_bucket = $s['log_bucket'] ?? '';
  }
}

class DisassociateDRTLogBucketResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateDRTRoleRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateDRTRoleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateHealthCheckRequest {
  public ?HealthCheckArn $health_check_arn;
  public ?ProtectionId $protection_id;

  public function __construct(shape(
    ?'health_check_arn' => ?HealthCheckArn,
    ?'protection_id' => ?ProtectionId,
  ) $s = shape()) {
    $this->health_check_arn = $s['health_check_arn'] ?? '';
    $this->protection_id = $s['protection_id'] ?? '';
  }
}

class DisassociateHealthCheckResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Double = float;

type DurationInSeconds = int;

type EmailAddress = string;

class EmergencyContact {
  public ?EmailAddress $email_address;

  public function __construct(shape(
    ?'email_address' => ?EmailAddress,
  ) $s = shape()) {
    $this->email_address = $s['email_address'] ?? '';
  }
}

type EmergencyContactList = vec<EmergencyContact>;

class GetSubscriptionStateRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetSubscriptionStateResponse {
  public ?SubscriptionState $subscription_state;

  public function __construct(shape(
    ?'subscription_state' => ?SubscriptionState,
  ) $s = shape()) {
    $this->subscription_state = $s['subscription_state'] ?? '';
  }
}

type HealthCheckArn = string;

type HealthCheckId = string;

type HealthCheckIds = vec<HealthCheckId>;

type Integer = int;

class InternalErrorException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidOperationException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidPaginationTokenException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidResourceException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Limit {
  public ?Long $max;
  public string $type;

  public function __construct(shape(
    ?'max' => ?Long,
    ?'type' => string,
  ) $s = shape()) {
    $this->max = $s['max'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type LimitNumber = int;

type LimitType = string;

type Limits = vec<Limit>;

class LimitsExceededException {
  public ?LimitNumber $limit;
  public ?LimitType $type;
  public ?errorMessage $message;

  public function __construct(shape(
    ?'limit' => ?LimitNumber,
    ?'type' => ?LimitType,
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class ListAttacksRequest {
  public ?TimeRange $end_time;
  public ?MaxResults $max_results;
  public ?Token $next_token;
  public ?ResourceArnFilterList $resource_arns;
  public ?TimeRange $start_time;

  public function __construct(shape(
    ?'end_time' => ?TimeRange,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?Token,
    ?'resource_arns' => ?ResourceArnFilterList,
    ?'start_time' => ?TimeRange,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arns = $s['resource_arns'] ?? vec[];
    $this->start_time = $s['start_time'] ?? null;
  }
}

class ListAttacksResponse {
  public ?AttackSummaries $attack_summaries;
  public ?Token $next_token;

  public function __construct(shape(
    ?'attack_summaries' => ?AttackSummaries,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->attack_summaries = $s['attack_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListProtectionsRequest {
  public ?MaxResults $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListProtectionsResponse {
  public ?Token $next_token;
  public ?Protections $protections;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'protections' => ?Protections,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->protections = $s['protections'] ?? vec[];
  }
}

class LockedSubscriptionException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LogBucket = string;

type LogBucketList = vec<LogBucket>;

type Long = int;

type MaxResults = int;

class Mitigation {
  public string $mitigation_name;

  public function __construct(shape(
    ?'mitigation_name' => string,
  ) $s = shape()) {
    $this->mitigation_name = $s['mitigation_name'] ?? '';
  }
}

type MitigationList = vec<Mitigation>;

class NoAssociatedRoleException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OptimisticLockException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Protection {
  public ?HealthCheckIds $health_check_ids;
  public ?ProtectionId $id;
  public ?ProtectionName $name;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'health_check_ids' => ?HealthCheckIds,
    ?'id' => ?ProtectionId,
    ?'name' => ?ProtectionName,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->health_check_ids = $s['health_check_ids'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

type ProtectionId = string;

type ProtectionName = string;

type Protections = vec<Protection>;

class ResourceAlreadyExistsException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceArn = string;

type ResourceArnFilterList = vec<ResourceArn>;

class ResourceNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RoleArn = string;

type String = string;

class SubResourceSummary {
  public ?SummarizedAttackVectorList $attack_vectors;
  public ?SummarizedCounterList $counters;
  public string $id;
  public ?SubResourceType $type;

  public function __construct(shape(
    ?'attack_vectors' => ?SummarizedAttackVectorList,
    ?'counters' => ?SummarizedCounterList,
    ?'id' => string,
    ?'type' => ?SubResourceType,
  ) $s = shape()) {
    $this->attack_vectors = $s['attack_vectors'] ?? vec[];
    $this->counters = $s['counters'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type SubResourceSummaryList = vec<SubResourceSummary>;

type SubResourceType = string;

class Subscription {
  public ?AutoRenew $auto_renew;
  public ?Timestamp $end_time;
  public ?Limits $limits;
  public ?Timestamp $start_time;
  public ?DurationInSeconds $time_commitment_in_seconds;

  public function __construct(shape(
    ?'auto_renew' => ?AutoRenew,
    ?'end_time' => ?Timestamp,
    ?'limits' => ?Limits,
    ?'start_time' => ?Timestamp,
    ?'time_commitment_in_seconds' => ?DurationInSeconds,
  ) $s = shape()) {
    $this->auto_renew = $s['auto_renew'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->limits = $s['limits'] ?? vec[];
    $this->start_time = $s['start_time'] ?? 0;
    $this->time_commitment_in_seconds = $s['time_commitment_in_seconds'] ?? 0;
  }
}

type SubscriptionState = string;

class SummarizedAttackVector {
  public ?SummarizedCounterList $vector_counters;
  public string $vector_type;

  public function __construct(shape(
    ?'vector_counters' => ?SummarizedCounterList,
    ?'vector_type' => string,
  ) $s = shape()) {
    $this->vector_counters = $s['vector_counters'] ?? vec[];
    $this->vector_type = $s['vector_type'] ?? '';
  }
}

type SummarizedAttackVectorList = vec<SummarizedAttackVector>;

class SummarizedCounter {
  public ?Double $average;
  public ?Double $max;
  public int $n;
  public string $name;
  public ?Double $sum;
  public string $unit;

  public function __construct(shape(
    ?'average' => ?Double,
    ?'max' => ?Double,
    ?'n' => int,
    ?'name' => string,
    ?'sum' => ?Double,
    ?'unit' => string,
  ) $s = shape()) {
    $this->average = $s['average'] ?? 0.0;
    $this->max = $s['max'] ?? 0.0;
    $this->n = $s['n'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->sum = $s['sum'] ?? 0.0;
    $this->unit = $s['unit'] ?? '';
  }
}

type SummarizedCounterList = vec<SummarizedCounter>;

class TimeRange {
  public ?AttackTimestamp $from_inclusive;
  public ?AttackTimestamp $to_exclusive;

  public function __construct(shape(
    ?'from_inclusive' => ?AttackTimestamp,
    ?'to_exclusive' => ?AttackTimestamp,
  ) $s = shape()) {
    $this->from_inclusive = $s['from_inclusive'] ?? 0;
    $this->to_exclusive = $s['to_exclusive'] ?? 0;
  }
}

type Timestamp = int;

type Token = string;

type TopContributors = vec<Contributor>;

type Unit = string;

class UpdateEmergencyContactSettingsRequest {
  public ?EmergencyContactList $emergency_contact_list;

  public function __construct(shape(
    ?'emergency_contact_list' => ?EmergencyContactList,
  ) $s = shape()) {
    $this->emergency_contact_list = $s['emergency_contact_list'] ?? vec[];
  }
}

class UpdateEmergencyContactSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateSubscriptionRequest {
  public ?AutoRenew $auto_renew;

  public function __construct(shape(
    ?'auto_renew' => ?AutoRenew,
  ) $s = shape()) {
    $this->auto_renew = $s['auto_renew'] ?? '';
  }
}

class UpdateSubscriptionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type errorMessage = string;

