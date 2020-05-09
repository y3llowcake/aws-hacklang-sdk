<?hh // strict
namespace slack\aws\dlm;

interface DLM {
  public function GetLifecyclePolicy(GetLifecyclePolicyRequest) Awaitable<Errors\Result<GetLifecyclePolicyResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateLifecyclePolicy(UpdateLifecyclePolicyRequest) Awaitable<Errors\Result<UpdateLifecyclePolicyResponse>>;
  public function CreateLifecyclePolicy(CreateLifecyclePolicyRequest) Awaitable<Errors\Result<CreateLifecyclePolicyResponse>>;
  public function DeleteLifecyclePolicy(DeleteLifecyclePolicyRequest) Awaitable<Errors\Result<DeleteLifecyclePolicyResponse>>;
  public function GetLifecyclePolicies(GetLifecyclePoliciesRequest) Awaitable<Errors\Result<GetLifecyclePoliciesResponse>>;
}

class TimesList {
}

class Timestamp {
}

class CrossRegionCopyRules {
}

class Encrypted {
}

class TagKey {
}

class TagResourceResponse {
}

class CrossRegionCopyRule {
  public CmkArn $cmk_arn;
  public CopyTagsNullable $copy_tags;
  public CrossRegionCopyRetainRule $retain_rule;
  public TargetRegion $target_region;
  public Encrypted $encrypted;
}

class LifecyclePolicySummary {
  public GettablePolicyStateValues $state;
  public TagMap $tags;
  public PolicyId $policy_id;
  public PolicyDescription $description;
}

class Parameter {
}

class String {
}

class TagsToAddFilterList {
}

class TargetRegion {
}

class TargetTagsFilterList {
}

class Count {
}

class CreateLifecyclePolicyRequest {
  public PolicyDescription $description;
  public SettablePolicyStateValues $state;
  public PolicyDetails $policy_details;
  public TagMap $tags;
  public ExecutionRoleArn $execution_role_arn;
}

class CreateRule {
  public TimesList $times;
  public Interval $interval;
  public IntervalUnitValues $interval_unit;
}

class CmkArn {
}

class FastRestoreRule {
  public Count $count;
  public Interval $interval;
  public RetentionIntervalUnitValues $interval_unit;
  public AvailabilityZoneList $availability_zones;
}

class RetentionIntervalUnitValues {
}

class StatusMessage {
}

class CreateLifecyclePolicyResponse {
  public PolicyId $policy_id;
}

class Schedule {
  public FastRestoreRule $fast_restore_rule;
  public CrossRegionCopyRules $cross_region_copy_rules;
  public ScheduleName $name;
  public CopyTags $copy_tags;
  public TagsToAddList $tags_to_add;
  public VariableTagsList $variable_tags;
  public CreateRule $create_rule;
  public RetainRule $retain_rule;
}

class SettablePolicyStateValues {
}

class InvalidRequestException {
  public ParameterList $required_parameters;
  public ParameterList $mutually_exclusive_parameters;
  public ErrorMessage $message;
  public ErrorCode $code;
}

class ResourceTypeValues {
}

class TagResourceRequest {
  public PolicyArn $resource_arn;
  public TagMap $tags;
}

class UntagResourceResponse {
}

class Parameters {
  public ExcludeBootVolume $exclude_boot_volume;
}

class GetLifecyclePoliciesResponse {
  public LifecyclePolicySummaryList $policies;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class PolicyIdList {
}

class ScheduleList {
}

class CopyTags {
}

class ExcludeBootVolume {
}

class GetLifecyclePoliciesRequest {
  public PolicyIdList $policy_ids;
  public GettablePolicyStateValues $state;
  public ResourceTypeValuesList $resource_types;
  public TargetTagsFilterList $target_tags;
  public TagsToAddFilterList $tags_to_add;
}

class InternalServerException {
  public ErrorMessage $message;
  public ErrorCode $code;
}

class TagFilter {
}

class DeleteLifecyclePolicyRequest {
  public PolicyId $policy_id;
}

class GettablePolicyStateValues {
}

class Interval {
}

class LimitExceededException {
  public ErrorMessage $message;
  public ErrorCode $code;
  public string $resource_type;
}

class PolicyArn {
}

class PolicyDetails {
  public PolicyTypeValues $policy_type;
  public ResourceTypeValuesList $resource_types;
  public TargetTagList $target_tags;
  public ScheduleList $schedules;
  public Parameters $parameters;
}

class PolicyTypeValues {
}

class TagMap {
}

class DeleteLifecyclePolicyResponse {
}

class UpdateLifecyclePolicyResponse {
}

class UntagResourceRequest {
  public TagKeyList $tag_keys;
  public PolicyArn $resource_arn;
}

class CopyTagsNullable {
}

class CrossRegionCopyRetainRule {
  public Interval $interval;
  public RetentionIntervalUnitValues $interval_unit;
}

class LifecyclePolicySummaryList {
}

class ListTagsForResourceRequest {
  public PolicyArn $resource_arn;
}

class ParameterList {
}

class ResourceTypeValuesList {
}

class ScheduleName {
}

class AvailabilityZoneList {
}

class UpdateLifecyclePolicyRequest {
  public PolicyDescription $description;
  public PolicyDetails $policy_details;
  public PolicyId $policy_id;
  public ExecutionRoleArn $execution_role_arn;
  public SettablePolicyStateValues $state;
}

class Time {
}

class VariableTagsList {
}

class GetLifecyclePolicyRequest {
  public PolicyId $policy_id;
}

class ExecutionRoleArn {
}

class GetLifecyclePolicyResponse {
  public LifecyclePolicy $policy;
}

class LifecyclePolicy {
  public GettablePolicyStateValues $state;
  public Timestamp $date_modified;
  public PolicyDetails $policy_details;
  public ExecutionRoleArn $execution_role_arn;
  public Timestamp $date_created;
  public TagMap $tags;
  public PolicyArn $policy_arn;
  public PolicyId $policy_id;
  public PolicyDescription $description;
  public StatusMessage $status_message;
}

class TagKeyList {
}

class AvailabilityZone {
}

class RetainRule {
  public Interval $interval;
  public RetentionIntervalUnitValues $interval_unit;
  public Count $count;
}

class TagValue {
}

class ResourceNotFoundException {
  public string $resource_type;
  public PolicyIdList $resource_ids;
  public ErrorMessage $message;
  public ErrorCode $code;
}

class PolicyId {
}

class Tag {
  public string $key;
  public string $value;
}

class IntervalUnitValues {
}

class ErrorMessage {
}

class PolicyDescription {
}

class TagsToAddList {
}

class TargetTagList {
}

class ErrorCode {
}

