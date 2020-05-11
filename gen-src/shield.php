<?hh // strict
namespace slack\aws\shield;

interface Shield {
  public function AssociateDRTLogBucket(AssociateDRTLogBucketRequest): Awaitable<Errors\Result<AssociateDRTLogBucketResponse>>;
  public function AssociateDRTRole(AssociateDRTRoleRequest): Awaitable<Errors\Result<AssociateDRTRoleResponse>>;
  public function AssociateHealthCheck(AssociateHealthCheckRequest): Awaitable<Errors\Result<AssociateHealthCheckResponse>>;
  public function CreateProtection(CreateProtectionRequest): Awaitable<Errors\Result<CreateProtectionResponse>>;
  public function CreateSubscription(CreateSubscriptionRequest): Awaitable<Errors\Result<CreateSubscriptionResponse>>;
  public function DeleteProtection(DeleteProtectionRequest): Awaitable<Errors\Result<DeleteProtectionResponse>>;
  public function DeleteSubscription(DeleteSubscriptionRequest): Awaitable<Errors\Result<DeleteSubscriptionResponse>>;
  public function DescribeAttack(DescribeAttackRequest): Awaitable<Errors\Result<DescribeAttackResponse>>;
  public function DescribeDRTAccess(DescribeDRTAccessRequest): Awaitable<Errors\Result<DescribeDRTAccessResponse>>;
  public function DescribeEmergencyContactSettings(DescribeEmergencyContactSettingsRequest): Awaitable<Errors\Result<DescribeEmergencyContactSettingsResponse>>;
  public function DescribeProtection(DescribeProtectionRequest): Awaitable<Errors\Result<DescribeProtectionResponse>>;
  public function DescribeSubscription(DescribeSubscriptionRequest): Awaitable<Errors\Result<DescribeSubscriptionResponse>>;
  public function DisassociateDRTLogBucket(DisassociateDRTLogBucketRequest): Awaitable<Errors\Result<DisassociateDRTLogBucketResponse>>;
  public function DisassociateDRTRole(DisassociateDRTRoleRequest): Awaitable<Errors\Result<DisassociateDRTRoleResponse>>;
  public function DisassociateHealthCheck(DisassociateHealthCheckRequest): Awaitable<Errors\Result<DisassociateHealthCheckResponse>>;
  public function GetSubscriptionState(GetSubscriptionStateRequest): Awaitable<Errors\Result<GetSubscriptionStateResponse>>;
  public function ListAttacks(ListAttacksRequest): Awaitable<Errors\Result<ListAttacksResponse>>;
  public function ListProtections(ListProtectionsRequest): Awaitable<Errors\Result<ListProtectionsResponse>>;
  public function UpdateEmergencyContactSettings(UpdateEmergencyContactSettingsRequest): Awaitable<Errors\Result<UpdateEmergencyContactSettingsResponse>>;
  public function UpdateSubscription(UpdateSubscriptionRequest): Awaitable<Errors\Result<UpdateSubscriptionResponse>>;
}

class AccessDeniedException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AccessDeniedForDependencyException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AssociateDRTLogBucketRequest {
  public LogBucket $log_bucket;

  public function __construct(shape(
  ?'log_bucket' => LogBucket,
  ) $s = shape()) {
    $this->log_bucket = $log_bucket ?? "";
  }
}

class AssociateDRTLogBucketResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateDRTRoleRequest {
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? "";
  }
}

class AssociateDRTRoleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateHealthCheckRequest {
  public HealthCheckArn $health_check_arn;
  public ProtectionId $protection_id;

  public function __construct(shape(
  ?'health_check_arn' => HealthCheckArn,
  ?'protection_id' => ProtectionId,
  ) $s = shape()) {
    $this->health_check_arn = $health_check_arn ?? "";
    $this->protection_id = $protection_id ?? "";
  }
}

class AssociateHealthCheckResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AttackDetail {
  public SummarizedCounterList $attack_counters;
  public AttackId $attack_id;
  public AttackProperties $attack_properties;
  public AttackTimestamp $end_time;
  public MitigationList $mitigations;
  public ResourceArn $resource_arn;
  public AttackTimestamp $start_time;
  public SubResourceSummaryList $sub_resources;

  public function __construct(shape(
  ?'attack_counters' => SummarizedCounterList,
  ?'attack_id' => AttackId,
  ?'attack_properties' => AttackProperties,
  ?'end_time' => AttackTimestamp,
  ?'mitigations' => MitigationList,
  ?'resource_arn' => ResourceArn,
  ?'start_time' => AttackTimestamp,
  ?'sub_resources' => SubResourceSummaryList,
  ) $s = shape()) {
    $this->attack_counters = $attack_counters ?? [];
    $this->attack_id = $attack_id ?? "";
    $this->attack_properties = $attack_properties ?? [];
    $this->end_time = $end_time ?? 0;
    $this->mitigations = $mitigations ?? [];
    $this->resource_arn = $resource_arn ?? "";
    $this->start_time = $start_time ?? 0;
    $this->sub_resources = $sub_resources ?? [];
  }
}

type AttackId = string;

type AttackLayer = string;

type AttackProperties = vec<AttackProperty>;

class AttackProperty {
  public AttackLayer $attack_layer;
  public AttackPropertyIdentifier $attack_property_identifier;
  public TopContributors $top_contributors;
  public Long $total;
  public Unit $unit;

  public function __construct(shape(
  ?'attack_layer' => AttackLayer,
  ?'attack_property_identifier' => AttackPropertyIdentifier,
  ?'top_contributors' => TopContributors,
  ?'total' => Long,
  ?'unit' => Unit,
  ) $s = shape()) {
    $this->attack_layer = $attack_layer ?? "";
    $this->attack_property_identifier = $attack_property_identifier ?? "";
    $this->top_contributors = $top_contributors ?? [];
    $this->total = $total ?? 0;
    $this->unit = $unit ?? "";
  }
}

type AttackPropertyIdentifier = string;

type AttackSummaries = vec<AttackSummary>;

class AttackSummary {
  public string $attack_id;
  public AttackVectorDescriptionList $attack_vectors;
  public AttackTimestamp $end_time;
  public string $resource_arn;
  public AttackTimestamp $start_time;

  public function __construct(shape(
  ?'attack_id' => string,
  ?'attack_vectors' => AttackVectorDescriptionList,
  ?'end_time' => AttackTimestamp,
  ?'resource_arn' => string,
  ?'start_time' => AttackTimestamp,
  ) $s = shape()) {
    $this->attack_id = $attack_id ?? "";
    $this->attack_vectors = $attack_vectors ?? [];
    $this->end_time = $end_time ?? 0;
    $this->resource_arn = $resource_arn ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

type AttackTimestamp = int;

class AttackVectorDescription {
  public string $vector_type;

  public function __construct(shape(
  ?'vector_type' => string,
  ) $s = shape()) {
    $this->vector_type = $vector_type ?? "";
  }
}

type AttackVectorDescriptionList = vec<AttackVectorDescription>;

type AutoRenew = string;

class Contributor {
  public string $name;
  public Long $value;

  public function __construct(shape(
  ?'name' => string,
  ?'value' => Long,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? 0;
  }
}

class CreateProtectionRequest {
  public ProtectionName $name;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'name' => ProtectionName,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class CreateProtectionResponse {
  public ProtectionId $protection_id;

  public function __construct(shape(
  ?'protection_id' => ProtectionId,
  ) $s = shape()) {
    $this->protection_id = $protection_id ?? "";
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
  public ProtectionId $protection_id;

  public function __construct(shape(
  ?'protection_id' => ProtectionId,
  ) $s = shape()) {
    $this->protection_id = $protection_id ?? "";
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
  public AttackId $attack_id;

  public function __construct(shape(
  ?'attack_id' => AttackId,
  ) $s = shape()) {
    $this->attack_id = $attack_id ?? "";
  }
}

class DescribeAttackResponse {
  public AttackDetail $attack;

  public function __construct(shape(
  ?'attack' => AttackDetail,
  ) $s = shape()) {
    $this->attack = $attack ?? null;
  }
}

class DescribeDRTAccessRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeDRTAccessResponse {
  public LogBucketList $log_bucket_list;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'log_bucket_list' => LogBucketList,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->log_bucket_list = $log_bucket_list ?? [];
    $this->role_arn = $role_arn ?? "";
  }
}

class DescribeEmergencyContactSettingsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeEmergencyContactSettingsResponse {
  public EmergencyContactList $emergency_contact_list;

  public function __construct(shape(
  ?'emergency_contact_list' => EmergencyContactList,
  ) $s = shape()) {
    $this->emergency_contact_list = $emergency_contact_list ?? [];
  }
}

class DescribeProtectionRequest {
  public ProtectionId $protection_id;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'protection_id' => ProtectionId,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->protection_id = $protection_id ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class DescribeProtectionResponse {
  public Protection $protection;

  public function __construct(shape(
  ?'protection' => Protection,
  ) $s = shape()) {
    $this->protection = $protection ?? null;
  }
}

class DescribeSubscriptionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeSubscriptionResponse {
  public Subscription $subscription;

  public function __construct(shape(
  ?'subscription' => Subscription,
  ) $s = shape()) {
    $this->subscription = $subscription ?? null;
  }
}

class DisassociateDRTLogBucketRequest {
  public LogBucket $log_bucket;

  public function __construct(shape(
  ?'log_bucket' => LogBucket,
  ) $s = shape()) {
    $this->log_bucket = $log_bucket ?? "";
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
  public HealthCheckArn $health_check_arn;
  public ProtectionId $protection_id;

  public function __construct(shape(
  ?'health_check_arn' => HealthCheckArn,
  ?'protection_id' => ProtectionId,
  ) $s = shape()) {
    $this->health_check_arn = $health_check_arn ?? "";
    $this->protection_id = $protection_id ?? "";
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
  public EmailAddress $email_address;

  public function __construct(shape(
  ?'email_address' => EmailAddress,
  ) $s = shape()) {
    $this->email_address = $email_address ?? "";
  }
}

type EmergencyContactList = vec<EmergencyContact>;

class GetSubscriptionStateRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetSubscriptionStateResponse {
  public SubscriptionState $subscription_state;

  public function __construct(shape(
  ?'subscription_state' => SubscriptionState,
  ) $s = shape()) {
    $this->subscription_state = $subscription_state ?? "";
  }
}

type HealthCheckArn = string;

type HealthCheckId = string;

type HealthCheckIds = vec<HealthCheckId>;

type Integer = int;

class InternalErrorException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidOperationException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidPaginationTokenException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidResourceException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Limit {
  public Long $max;
  public string $type;

  public function __construct(shape(
  ?'max' => Long,
  ?'type' => string,
  ) $s = shape()) {
    $this->max = $max ?? 0;
    $this->type = $type ?? "";
  }
}

type LimitNumber = int;

type LimitType = string;

type Limits = vec<Limit>;

class LimitsExceededException {
  public LimitNumber $limit;
  public LimitType $type;
  public errorMessage $message;

  public function __construct(shape(
  ?'limit' => LimitNumber,
  ?'type' => LimitType,
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->type = $type ?? "";
    $this->message = $message ?? "";
  }
}

class ListAttacksRequest {
  public TimeRange $end_time;
  public MaxResults $max_results;
  public Token $next_token;
  public ResourceArnFilterList $resource_arns;
  public TimeRange $start_time;

  public function __construct(shape(
  ?'end_time' => TimeRange,
  ?'max_results' => MaxResults,
  ?'next_token' => Token,
  ?'resource_arns' => ResourceArnFilterList,
  ?'start_time' => TimeRange,
  ) $s = shape()) {
    $this->end_time = $end_time ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arns = $resource_arns ?? [];
    $this->start_time = $start_time ?? null;
  }
}

class ListAttacksResponse {
  public AttackSummaries $attack_summaries;
  public Token $next_token;

  public function __construct(shape(
  ?'attack_summaries' => AttackSummaries,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->attack_summaries = $attack_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListProtectionsRequest {
  public MaxResults $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListProtectionsResponse {
  public Token $next_token;
  public Protections $protections;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'protections' => Protections,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->protections = $protections ?? [];
  }
}

class LockedSubscriptionException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
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
    $this->mitigation_name = $mitigation_name ?? "";
  }
}

type MitigationList = vec<Mitigation>;

class NoAssociatedRoleException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class OptimisticLockException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Protection {
  public HealthCheckIds $health_check_ids;
  public ProtectionId $id;
  public ProtectionName $name;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'health_check_ids' => HealthCheckIds,
  ?'id' => ProtectionId,
  ?'name' => ProtectionName,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->health_check_ids = $health_check_ids ?? [];
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

type ProtectionId = string;

type ProtectionName = string;

type Protections = vec<Protection>;

class ResourceAlreadyExistsException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceArn = string;

type ResourceArnFilterList = vec<ResourceArn>;

class ResourceNotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type RoleArn = string;

type String = string;

class SubResourceSummary {
  public SummarizedAttackVectorList $attack_vectors;
  public SummarizedCounterList $counters;
  public string $id;
  public SubResourceType $type;

  public function __construct(shape(
  ?'attack_vectors' => SummarizedAttackVectorList,
  ?'counters' => SummarizedCounterList,
  ?'id' => string,
  ?'type' => SubResourceType,
  ) $s = shape()) {
    $this->attack_vectors = $attack_vectors ?? [];
    $this->counters = $counters ?? [];
    $this->id = $id ?? "";
    $this->type = $type ?? "";
  }
}

type SubResourceSummaryList = vec<SubResourceSummary>;

type SubResourceType = string;

class Subscription {
  public AutoRenew $auto_renew;
  public Timestamp $end_time;
  public Limits $limits;
  public Timestamp $start_time;
  public DurationInSeconds $time_commitment_in_seconds;

  public function __construct(shape(
  ?'auto_renew' => AutoRenew,
  ?'end_time' => Timestamp,
  ?'limits' => Limits,
  ?'start_time' => Timestamp,
  ?'time_commitment_in_seconds' => DurationInSeconds,
  ) $s = shape()) {
    $this->auto_renew = $auto_renew ?? "";
    $this->end_time = $end_time ?? 0;
    $this->limits = $limits ?? [];
    $this->start_time = $start_time ?? 0;
    $this->time_commitment_in_seconds = $time_commitment_in_seconds ?? 0;
  }
}

type SubscriptionState = string;

class SummarizedAttackVector {
  public SummarizedCounterList $vector_counters;
  public string $vector_type;

  public function __construct(shape(
  ?'vector_counters' => SummarizedCounterList,
  ?'vector_type' => string,
  ) $s = shape()) {
    $this->vector_counters = $vector_counters ?? [];
    $this->vector_type = $vector_type ?? "";
  }
}

type SummarizedAttackVectorList = vec<SummarizedAttackVector>;

class SummarizedCounter {
  public Double $average;
  public Double $max;
  public int $n;
  public string $name;
  public Double $sum;
  public string $unit;

  public function __construct(shape(
  ?'average' => Double,
  ?'max' => Double,
  ?'n' => int,
  ?'name' => string,
  ?'sum' => Double,
  ?'unit' => string,
  ) $s = shape()) {
    $this->average = $average ?? 0.0;
    $this->max = $max ?? 0.0;
    $this->n = $n ?? 0;
    $this->name = $name ?? "";
    $this->sum = $sum ?? 0.0;
    $this->unit = $unit ?? "";
  }
}

type SummarizedCounterList = vec<SummarizedCounter>;

class TimeRange {
  public AttackTimestamp $from_inclusive;
  public AttackTimestamp $to_exclusive;

  public function __construct(shape(
  ?'from_inclusive' => AttackTimestamp,
  ?'to_exclusive' => AttackTimestamp,
  ) $s = shape()) {
    $this->from_inclusive = $from_inclusive ?? 0;
    $this->to_exclusive = $to_exclusive ?? 0;
  }
}

type Timestamp = int;

type Token = string;

type TopContributors = vec<Contributor>;

type Unit = string;

class UpdateEmergencyContactSettingsRequest {
  public EmergencyContactList $emergency_contact_list;

  public function __construct(shape(
  ?'emergency_contact_list' => EmergencyContactList,
  ) $s = shape()) {
    $this->emergency_contact_list = $emergency_contact_list ?? [];
  }
}

class UpdateEmergencyContactSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateSubscriptionRequest {
  public AutoRenew $auto_renew;

  public function __construct(shape(
  ?'auto_renew' => AutoRenew,
  ) $s = shape()) {
    $this->auto_renew = $auto_renew ?? "";
  }
}

class UpdateSubscriptionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type errorMessage = string;

