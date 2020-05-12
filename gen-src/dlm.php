<?hh // strict
namespace slack\aws\dlm;

interface DLM {
  public function CreateLifecyclePolicy(CreateLifecyclePolicyRequest $in): Awaitable<\Errors\Result<CreateLifecyclePolicyResponse>>;
  public function DeleteLifecyclePolicy(DeleteLifecyclePolicyRequest $in): Awaitable<\Errors\Result<DeleteLifecyclePolicyResponse>>;
  public function GetLifecyclePolicies(GetLifecyclePoliciesRequest $in): Awaitable<\Errors\Result<GetLifecyclePoliciesResponse>>;
  public function GetLifecyclePolicy(GetLifecyclePolicyRequest $in): Awaitable<\Errors\Result<GetLifecyclePolicyResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateLifecyclePolicy(UpdateLifecyclePolicyRequest $in): Awaitable<\Errors\Result<UpdateLifecyclePolicyResponse>>;
}

type AvailabilityZone = string;

type AvailabilityZoneList = vec<AvailabilityZone>;

type CmkArn = string;

type CopyTags = bool;

type CopyTagsNullable = bool;

type Count = int;

class CreateLifecyclePolicyRequest {
  public ?PolicyDescription $description;
  public ?ExecutionRoleArn $execution_role_arn;
  public ?PolicyDetails $policy_details;
  public ?SettablePolicyStateValues $state;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'description' => ?PolicyDescription,
    ?'execution_role_arn' => ?ExecutionRoleArn,
    ?'policy_details' => ?PolicyDetails,
    ?'state' => ?SettablePolicyStateValues,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->policy_details = $s['policy_details'] ?? null;
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateLifecyclePolicyResponse {
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class CreateRule {
  public ?Interval $interval;
  public ?IntervalUnitValues $interval_unit;
  public ?TimesList $times;

  public function __construct(shape(
    ?'interval' => ?Interval,
    ?'interval_unit' => ?IntervalUnitValues,
    ?'times' => ?TimesList,
  ) $s = shape()) {
    $this->interval = $s['interval'] ?? 0;
    $this->interval_unit = $s['interval_unit'] ?? '';
    $this->times = $s['times'] ?? vec[];
  }
}

class CrossRegionCopyRetainRule {
  public ?Interval $interval;
  public ?RetentionIntervalUnitValues $interval_unit;

  public function __construct(shape(
    ?'interval' => ?Interval,
    ?'interval_unit' => ?RetentionIntervalUnitValues,
  ) $s = shape()) {
    $this->interval = $s['interval'] ?? 0;
    $this->interval_unit = $s['interval_unit'] ?? '';
  }
}

class CrossRegionCopyRule {
  public ?CmkArn $cmk_arn;
  public ?CopyTagsNullable $copy_tags;
  public ?Encrypted $encrypted;
  public ?CrossRegionCopyRetainRule $retain_rule;
  public ?TargetRegion $target_region;

  public function __construct(shape(
    ?'cmk_arn' => ?CmkArn,
    ?'copy_tags' => ?CopyTagsNullable,
    ?'encrypted' => ?Encrypted,
    ?'retain_rule' => ?CrossRegionCopyRetainRule,
    ?'target_region' => ?TargetRegion,
  ) $s = shape()) {
    $this->cmk_arn = $s['cmk_arn'] ?? '';
    $this->copy_tags = $s['copy_tags'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->retain_rule = $s['retain_rule'] ?? null;
    $this->target_region = $s['target_region'] ?? '';
  }
}

type CrossRegionCopyRules = vec<CrossRegionCopyRule>;

class DeleteLifecyclePolicyRequest {
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class DeleteLifecyclePolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Encrypted = bool;

type ErrorCode = string;

type ErrorMessage = string;

type ExcludeBootVolume = bool;

type ExecutionRoleArn = string;

class FastRestoreRule {
  public ?AvailabilityZoneList $availability_zones;
  public ?Count $count;
  public ?Interval $interval;
  public ?RetentionIntervalUnitValues $interval_unit;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZoneList,
    ?'count' => ?Count,
    ?'interval' => ?Interval,
    ?'interval_unit' => ?RetentionIntervalUnitValues,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->count = $s['count'] ?? 0;
    $this->interval = $s['interval'] ?? 0;
    $this->interval_unit = $s['interval_unit'] ?? '';
  }
}

class GetLifecyclePoliciesRequest {
  public ?PolicyIdList $policy_ids;
  public ?ResourceTypeValuesList $resource_types;
  public ?GettablePolicyStateValues $state;
  public ?TagsToAddFilterList $tags_to_add;
  public ?TargetTagsFilterList $target_tags;

  public function __construct(shape(
    ?'policy_ids' => ?PolicyIdList,
    ?'resource_types' => ?ResourceTypeValuesList,
    ?'state' => ?GettablePolicyStateValues,
    ?'tags_to_add' => ?TagsToAddFilterList,
    ?'target_tags' => ?TargetTagsFilterList,
  ) $s = shape()) {
    $this->policy_ids = $s['policy_ids'] ?? vec[];
    $this->resource_types = $s['resource_types'] ?? vec[];
    $this->state = $s['state'] ?? '';
    $this->tags_to_add = $s['tags_to_add'] ?? vec[];
    $this->target_tags = $s['target_tags'] ?? vec[];
  }
}

class GetLifecyclePoliciesResponse {
  public ?LifecyclePolicySummaryList $policies;

  public function __construct(shape(
    ?'policies' => ?LifecyclePolicySummaryList,
  ) $s = shape()) {
    $this->policies = $s['policies'] ?? vec[];
  }
}

class GetLifecyclePolicyRequest {
  public ?PolicyId $policy_id;

  public function __construct(shape(
    ?'policy_id' => ?PolicyId,
  ) $s = shape()) {
    $this->policy_id = $s['policy_id'] ?? '';
  }
}

class GetLifecyclePolicyResponse {
  public ?LifecyclePolicy $policy;

  public function __construct(shape(
    ?'policy' => ?LifecyclePolicy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
  }
}

type GettablePolicyStateValues = string;

class InternalServerException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type Interval = int;

type IntervalUnitValues = string;

class InvalidRequestException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;
  public ?ParameterList $mutually_exclusive_parameters;
  public ?ParameterList $required_parameters;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
    ?'mutually_exclusive_parameters' => ?ParameterList,
    ?'required_parameters' => ?ParameterList,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->mutually_exclusive_parameters = $s['mutually_exclusive_parameters'] ?? vec[];
    $this->required_parameters = $s['required_parameters'] ?? vec[];
  }
}

class LifecyclePolicy {
  public ?Timestamp $date_created;
  public ?Timestamp $date_modified;
  public ?PolicyDescription $description;
  public ?ExecutionRoleArn $execution_role_arn;
  public ?PolicyArn $policy_arn;
  public ?PolicyDetails $policy_details;
  public ?PolicyId $policy_id;
  public ?GettablePolicyStateValues $state;
  public ?StatusMessage $status_message;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'date_created' => ?Timestamp,
    ?'date_modified' => ?Timestamp,
    ?'description' => ?PolicyDescription,
    ?'execution_role_arn' => ?ExecutionRoleArn,
    ?'policy_arn' => ?PolicyArn,
    ?'policy_details' => ?PolicyDetails,
    ?'policy_id' => ?PolicyId,
    ?'state' => ?GettablePolicyStateValues,
    ?'status_message' => ?StatusMessage,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->date_created = $s['date_created'] ?? 0;
    $this->date_modified = $s['date_modified'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->policy_details = $s['policy_details'] ?? null;
    $this->policy_id = $s['policy_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class LifecyclePolicySummary {
  public ?PolicyDescription $description;
  public ?PolicyId $policy_id;
  public ?GettablePolicyStateValues $state;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'description' => ?PolicyDescription,
    ?'policy_id' => ?PolicyId,
    ?'state' => ?GettablePolicyStateValues,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type LifecyclePolicySummaryList = vec<LifecyclePolicySummary>;

class LimitExceededException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;
  public string $resource_type;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?PolicyArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?PolicyArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

type Parameter = string;

type ParameterList = vec<Parameter>;

class Parameters {
  public ?ExcludeBootVolume $exclude_boot_volume;

  public function __construct(shape(
    ?'exclude_boot_volume' => ?ExcludeBootVolume,
  ) $s = shape()) {
    $this->exclude_boot_volume = $s['exclude_boot_volume'] ?? false;
  }
}

type PolicyArn = string;

type PolicyDescription = string;

class PolicyDetails {
  public ?Parameters $parameters;
  public ?PolicyTypeValues $policy_type;
  public ?ResourceTypeValuesList $resource_types;
  public ?ScheduleList $schedules;
  public ?TargetTagList $target_tags;

  public function __construct(shape(
    ?'parameters' => ?Parameters,
    ?'policy_type' => ?PolicyTypeValues,
    ?'resource_types' => ?ResourceTypeValuesList,
    ?'schedules' => ?ScheduleList,
    ?'target_tags' => ?TargetTagList,
  ) $s = shape()) {
    $this->parameters = $s['parameters'] ?? null;
    $this->policy_type = $s['policy_type'] ?? '';
    $this->resource_types = $s['resource_types'] ?? vec[];
    $this->schedules = $s['schedules'] ?? vec[];
    $this->target_tags = $s['target_tags'] ?? vec[];
  }
}

type PolicyId = string;

type PolicyIdList = vec<PolicyId>;

type PolicyTypeValues = string;

class ResourceNotFoundException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;
  public ?PolicyIdList $resource_ids;
  public string $resource_type;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
    ?'resource_ids' => ?PolicyIdList,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->resource_ids = $s['resource_ids'] ?? vec[];
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type ResourceTypeValues = string;

type ResourceTypeValuesList = vec<ResourceTypeValues>;

class RetainRule {
  public ?Count $count;
  public ?Interval $interval;
  public ?RetentionIntervalUnitValues $interval_unit;

  public function __construct(shape(
    ?'count' => ?Count,
    ?'interval' => ?Interval,
    ?'interval_unit' => ?RetentionIntervalUnitValues,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->interval = $s['interval'] ?? 0;
    $this->interval_unit = $s['interval_unit'] ?? '';
  }
}

type RetentionIntervalUnitValues = string;

class Schedule {
  public ?CopyTags $copy_tags;
  public ?CreateRule $create_rule;
  public ?CrossRegionCopyRules $cross_region_copy_rules;
  public ?FastRestoreRule $fast_restore_rule;
  public ?ScheduleName $name;
  public ?RetainRule $retain_rule;
  public ?TagsToAddList $tags_to_add;
  public ?VariableTagsList $variable_tags;

  public function __construct(shape(
    ?'copy_tags' => ?CopyTags,
    ?'create_rule' => ?CreateRule,
    ?'cross_region_copy_rules' => ?CrossRegionCopyRules,
    ?'fast_restore_rule' => ?FastRestoreRule,
    ?'name' => ?ScheduleName,
    ?'retain_rule' => ?RetainRule,
    ?'tags_to_add' => ?TagsToAddList,
    ?'variable_tags' => ?VariableTagsList,
  ) $s = shape()) {
    $this->copy_tags = $s['copy_tags'] ?? false;
    $this->create_rule = $s['create_rule'] ?? null;
    $this->cross_region_copy_rules = $s['cross_region_copy_rules'] ?? vec[];
    $this->fast_restore_rule = $s['fast_restore_rule'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->retain_rule = $s['retain_rule'] ?? null;
    $this->tags_to_add = $s['tags_to_add'] ?? vec[];
    $this->variable_tags = $s['variable_tags'] ?? vec[];
  }
}

type ScheduleList = vec<Schedule>;

type ScheduleName = string;

type SettablePolicyStateValues = string;

type StatusMessage = string;

type String = string;

class Tag {
  public string $key;
  public string $value;

  public function __construct(shape(
    ?'key' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagFilter = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ?PolicyArn $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?PolicyArn,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type TagsToAddFilterList = vec<TagFilter>;

type TagsToAddList = vec<Tag>;

type TargetRegion = string;

type TargetTagList = vec<Tag>;

type TargetTagsFilterList = vec<TagFilter>;

type Time = string;

type TimesList = vec<Time>;

type Timestamp = int;

class UntagResourceRequest {
  public ?PolicyArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?PolicyArn,
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

class UpdateLifecyclePolicyRequest {
  public ?PolicyDescription $description;
  public ?ExecutionRoleArn $execution_role_arn;
  public ?PolicyDetails $policy_details;
  public ?PolicyId $policy_id;
  public ?SettablePolicyStateValues $state;

  public function __construct(shape(
    ?'description' => ?PolicyDescription,
    ?'execution_role_arn' => ?ExecutionRoleArn,
    ?'policy_details' => ?PolicyDetails,
    ?'policy_id' => ?PolicyId,
    ?'state' => ?SettablePolicyStateValues,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->policy_details = $s['policy_details'] ?? null;
    $this->policy_id = $s['policy_id'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class UpdateLifecyclePolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type VariableTagsList = vec<Tag>;

