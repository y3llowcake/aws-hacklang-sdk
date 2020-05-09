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
}

class AccessDeniedForDependencyException {
  public errorMessage $message;
}

class AssociateDRTLogBucketRequest {
  public LogBucket $log_bucket;
}

class AssociateDRTLogBucketResponse {
}

class AssociateDRTRoleRequest {
  public RoleArn $role_arn;
}

class AssociateDRTRoleResponse {
}

class AssociateHealthCheckRequest {
  public HealthCheckArn $health_check_arn;
  public ProtectionId $protection_id;
}

class AssociateHealthCheckResponse {
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
}

class AttackId {
}

class AttackLayer {
}

class AttackProperties {
}

class AttackProperty {
  public AttackLayer $attack_layer;
  public AttackPropertyIdentifier $attack_property_identifier;
  public TopContributors $top_contributors;
  public Long $total;
  public Unit $unit;
}

class AttackPropertyIdentifier {
}

class AttackSummaries {
}

class AttackSummary {
  public string $attack_id;
  public AttackVectorDescriptionList $attack_vectors;
  public AttackTimestamp $end_time;
  public string $resource_arn;
  public AttackTimestamp $start_time;
}

class AttackTimestamp {
}

class AttackVectorDescription {
  public string $vector_type;
}

class AttackVectorDescriptionList {
}

class AutoRenew {
}

class Contributor {
  public string $name;
  public Long $value;
}

class CreateProtectionRequest {
  public ProtectionName $name;
  public ResourceArn $resource_arn;
}

class CreateProtectionResponse {
  public ProtectionId $protection_id;
}

class CreateSubscriptionRequest {
}

class CreateSubscriptionResponse {
}

class DeleteProtectionRequest {
  public ProtectionId $protection_id;
}

class DeleteProtectionResponse {
}

class DeleteSubscriptionRequest {
}

class DeleteSubscriptionResponse {
}

class DescribeAttackRequest {
  public AttackId $attack_id;
}

class DescribeAttackResponse {
  public AttackDetail $attack;
}

class DescribeDRTAccessRequest {
}

class DescribeDRTAccessResponse {
  public LogBucketList $log_bucket_list;
  public RoleArn $role_arn;
}

class DescribeEmergencyContactSettingsRequest {
}

class DescribeEmergencyContactSettingsResponse {
  public EmergencyContactList $emergency_contact_list;
}

class DescribeProtectionRequest {
  public ProtectionId $protection_id;
  public ResourceArn $resource_arn;
}

class DescribeProtectionResponse {
  public Protection $protection;
}

class DescribeSubscriptionRequest {
}

class DescribeSubscriptionResponse {
  public Subscription $subscription;
}

class DisassociateDRTLogBucketRequest {
  public LogBucket $log_bucket;
}

class DisassociateDRTLogBucketResponse {
}

class DisassociateDRTRoleRequest {
}

class DisassociateDRTRoleResponse {
}

class DisassociateHealthCheckRequest {
  public HealthCheckArn $health_check_arn;
  public ProtectionId $protection_id;
}

class DisassociateHealthCheckResponse {
}

class Double {
}

class DurationInSeconds {
}

class EmailAddress {
}

class EmergencyContact {
  public EmailAddress $email_address;
}

class EmergencyContactList {
}

class GetSubscriptionStateRequest {
}

class GetSubscriptionStateResponse {
  public SubscriptionState $subscription_state;
}

class HealthCheckArn {
}

class HealthCheckId {
}

class HealthCheckIds {
}

class Integer {
}

class InternalErrorException {
  public errorMessage $message;
}

class InvalidOperationException {
  public errorMessage $message;
}

class InvalidPaginationTokenException {
  public errorMessage $message;
}

class InvalidParameterException {
  public errorMessage $message;
}

class InvalidResourceException {
  public errorMessage $message;
}

class Limit {
  public Long $max;
  public string $type;
}

class LimitNumber {
}

class LimitType {
}

class Limits {
}

class LimitsExceededException {
  public LimitNumber $limit;
  public LimitType $type;
  public errorMessage $message;
}

class ListAttacksRequest {
  public TimeRange $end_time;
  public MaxResults $max_results;
  public Token $next_token;
  public ResourceArnFilterList $resource_arns;
  public TimeRange $start_time;
}

class ListAttacksResponse {
  public AttackSummaries $attack_summaries;
  public Token $next_token;
}

class ListProtectionsRequest {
  public MaxResults $max_results;
  public Token $next_token;
}

class ListProtectionsResponse {
  public Token $next_token;
  public Protections $protections;
}

class LockedSubscriptionException {
  public errorMessage $message;
}

class LogBucket {
}

class LogBucketList {
}

class Long {
}

class MaxResults {
}

class Mitigation {
  public string $mitigation_name;
}

class MitigationList {
}

class NoAssociatedRoleException {
  public errorMessage $message;
}

class OptimisticLockException {
  public errorMessage $message;
}

class Protection {
  public HealthCheckIds $health_check_ids;
  public ProtectionId $id;
  public ProtectionName $name;
  public ResourceArn $resource_arn;
}

class ProtectionId {
}

class ProtectionName {
}

class Protections {
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
}

class ResourceArn {
}

class ResourceArnFilterList {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class RoleArn {
}

class String {
}

class SubResourceSummary {
  public SummarizedAttackVectorList $attack_vectors;
  public SummarizedCounterList $counters;
  public string $id;
  public SubResourceType $type;
}

class SubResourceSummaryList {
}

class SubResourceType {
}

class Subscription {
  public AutoRenew $auto_renew;
  public Timestamp $end_time;
  public Limits $limits;
  public Timestamp $start_time;
  public DurationInSeconds $time_commitment_in_seconds;
}

class SubscriptionState {
}

class SummarizedAttackVector {
  public SummarizedCounterList $vector_counters;
  public string $vector_type;
}

class SummarizedAttackVectorList {
}

class SummarizedCounter {
  public Double $average;
  public Double $max;
  public int $n;
  public string $name;
  public Double $sum;
  public string $unit;
}

class SummarizedCounterList {
}

class TimeRange {
  public AttackTimestamp $from_inclusive;
  public AttackTimestamp $to_exclusive;
}

class Timestamp {
}

class Token {
}

class TopContributors {
}

class Unit {
}

class UpdateEmergencyContactSettingsRequest {
  public EmergencyContactList $emergency_contact_list;
}

class UpdateEmergencyContactSettingsResponse {
}

class UpdateSubscriptionRequest {
  public AutoRenew $auto_renew;
}

class UpdateSubscriptionResponse {
}

class errorMessage {
}

