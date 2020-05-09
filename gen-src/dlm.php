<?hh // strict
namespace slack\aws\dlm;

interface DLM {
  public function CreateLifecyclePolicy(CreateLifecyclePolicyRequest): Awaitable<Errors\Result<CreateLifecyclePolicyResponse>>;
  public function DeleteLifecyclePolicy(DeleteLifecyclePolicyRequest): Awaitable<Errors\Result<DeleteLifecyclePolicyResponse>>;
  public function GetLifecyclePolicies(GetLifecyclePoliciesRequest): Awaitable<Errors\Result<GetLifecyclePoliciesResponse>>;
  public function GetLifecyclePolicy(GetLifecyclePolicyRequest): Awaitable<Errors\Result<GetLifecyclePolicyResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateLifecyclePolicy(UpdateLifecyclePolicyRequest): Awaitable<Errors\Result<UpdateLifecyclePolicyResponse>>;
}

class AvailabilityZone {
}

class AvailabilityZoneList {
}

class CmkArn {
}

class CopyTags {
}

class CopyTagsNullable {
}

class Count {
}

class CreateLifecyclePolicyRequest {
  public PolicyDescription $description;
  public ExecutionRoleArn $execution_role_arn;
  public PolicyDetails $policy_details;
  public SettablePolicyStateValues $state;
  public TagMap $tags;
}

class CreateLifecyclePolicyResponse {
  public PolicyId $policy_id;
}

class CreateRule {
  public Interval $interval;
  public IntervalUnitValues $interval_unit;
  public TimesList $times;
}

class CrossRegionCopyRetainRule {
  public Interval $interval;
  public RetentionIntervalUnitValues $interval_unit;
}

class CrossRegionCopyRule {
  public CmkArn $cmk_arn;
  public CopyTagsNullable $copy_tags;
  public Encrypted $encrypted;
  public CrossRegionCopyRetainRule $retain_rule;
  public TargetRegion $target_region;
}

class CrossRegionCopyRules {
}

class DeleteLifecyclePolicyRequest {
  public PolicyId $policy_id;
}

class DeleteLifecyclePolicyResponse {
}

class Encrypted {
}

class ErrorCode {
}

class ErrorMessage {
}

class ExcludeBootVolume {
}

class ExecutionRoleArn {
}

class FastRestoreRule {
  public AvailabilityZoneList $availability_zones;
  public Count $count;
  public Interval $interval;
  public RetentionIntervalUnitValues $interval_unit;
}

class GetLifecyclePoliciesRequest {
  public PolicyIdList $policy_ids;
  public ResourceTypeValuesList $resource_types;
  public GettablePolicyStateValues $state;
  public TagsToAddFilterList $tags_to_add;
  public TargetTagsFilterList $target_tags;
}

class GetLifecyclePoliciesResponse {
  public LifecyclePolicySummaryList $policies;
}

class GetLifecyclePolicyRequest {
  public PolicyId $policy_id;
}

class GetLifecyclePolicyResponse {
  public LifecyclePolicy $policy;
}

class GettablePolicyStateValues {
}

class InternalServerException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class Interval {
}

class IntervalUnitValues {
}

class InvalidRequestException {
  public ErrorCode $code;
  public ErrorMessage $message;
  public ParameterList $mutually_exclusive_parameters;
  public ParameterList $required_parameters;
}

class LifecyclePolicy {
  public Timestamp $date_created;
  public Timestamp $date_modified;
  public PolicyDescription $description;
  public ExecutionRoleArn $execution_role_arn;
  public PolicyArn $policy_arn;
  public PolicyDetails $policy_details;
  public PolicyId $policy_id;
  public GettablePolicyStateValues $state;
  public StatusMessage $status_message;
  public TagMap $tags;
}

class LifecyclePolicySummary {
  public PolicyDescription $description;
  public PolicyId $policy_id;
  public GettablePolicyStateValues $state;
  public TagMap $tags;
}

class LifecyclePolicySummaryList {
}

class LimitExceededException {
  public ErrorCode $code;
  public ErrorMessage $message;
  public string $resource_type;
}

class ListTagsForResourceRequest {
  public PolicyArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class Parameter {
}

class ParameterList {
}

class Parameters {
  public ExcludeBootVolume $exclude_boot_volume;
}

class PolicyArn {
}

class PolicyDescription {
}

class PolicyDetails {
  public Parameters $parameters;
  public PolicyTypeValues $policy_type;
  public ResourceTypeValuesList $resource_types;
  public ScheduleList $schedules;
  public TargetTagList $target_tags;
}

class PolicyId {
}

class PolicyIdList {
}

class PolicyTypeValues {
}

class ResourceNotFoundException {
  public ErrorCode $code;
  public ErrorMessage $message;
  public PolicyIdList $resource_ids;
  public string $resource_type;
}

class ResourceTypeValues {
}

class ResourceTypeValuesList {
}

class RetainRule {
  public Count $count;
  public Interval $interval;
  public RetentionIntervalUnitValues $interval_unit;
}

class RetentionIntervalUnitValues {
}

class Schedule {
  public CopyTags $copy_tags;
  public CreateRule $create_rule;
  public CrossRegionCopyRules $cross_region_copy_rules;
  public FastRestoreRule $fast_restore_rule;
  public ScheduleName $name;
  public RetainRule $retain_rule;
  public TagsToAddList $tags_to_add;
  public VariableTagsList $variable_tags;
}

class ScheduleList {
}

class ScheduleName {
}

class SettablePolicyStateValues {
}

class StatusMessage {
}

class String {
}

class Tag {
  public string $key;
  public string $value;
}

class TagFilter {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public PolicyArn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TagsToAddFilterList {
}

class TagsToAddList {
}

class TargetRegion {
}

class TargetTagList {
}

class TargetTagsFilterList {
}

class Time {
}

class TimesList {
}

class Timestamp {
}

class UntagResourceRequest {
  public PolicyArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateLifecyclePolicyRequest {
  public PolicyDescription $description;
  public ExecutionRoleArn $execution_role_arn;
  public PolicyDetails $policy_details;
  public PolicyId $policy_id;
  public SettablePolicyStateValues $state;
}

class UpdateLifecyclePolicyResponse {
}

class VariableTagsList {
}

