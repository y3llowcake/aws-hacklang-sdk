<?hh // strict
namespace slack\aws\codestar-notifications;

interface codestar notifications {
  public function CreateNotificationRule(CreateNotificationRuleRequest): Awaitable<Errors\Result<CreateNotificationRuleResult>>;
  public function DeleteNotificationRule(DeleteNotificationRuleRequest): Awaitable<Errors\Result<DeleteNotificationRuleResult>>;
  public function DeleteTarget(DeleteTargetRequest): Awaitable<Errors\Result<DeleteTargetResult>>;
  public function DescribeNotificationRule(DescribeNotificationRuleRequest): Awaitable<Errors\Result<DescribeNotificationRuleResult>>;
  public function ListEventTypes(ListEventTypesRequest): Awaitable<Errors\Result<ListEventTypesResult>>;
  public function ListNotificationRules(ListNotificationRulesRequest): Awaitable<Errors\Result<ListNotificationRulesResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function ListTargets(ListTargetsRequest): Awaitable<Errors\Result<ListTargetsResult>>;
  public function Subscribe(SubscribeRequest): Awaitable<Errors\Result<SubscribeResult>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResult>>;
  public function Unsubscribe(UnsubscribeRequest): Awaitable<Errors\Result<UnsubscribeResult>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResult>>;
  public function UpdateNotificationRule(UpdateNotificationRuleRequest): Awaitable<Errors\Result<UpdateNotificationRuleResult>>;
}

class AccessDeniedException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ClientRequestToken = string;

class ConcurrentModificationException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ConfigurationException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CreateNotificationRuleRequest {
  public ClientRequestToken $client_request_token;
  public DetailType $detail_type;
  public EventTypeIds $event_type_ids;
  public NotificationRuleName $name;
  public NotificationRuleResource $resource;
  public NotificationRuleStatus $status;
  public Tags $tags;
  public Targets $targets;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'detail_type' => DetailType,
  ?'event_type_ids' => EventTypeIds,
  ?'name' => NotificationRuleName,
  ?'resource' => NotificationRuleResource,
  ?'status' => NotificationRuleStatus,
  ?'tags' => Tags,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->detail_type = $detail_type ?? "";
    $this->event_type_ids = $event_type_ids ?? [];
    $this->name = $name ?? ;
    $this->resource = $resource ?? ;
    $this->status = $status ?? ;
    $this->tags = $tags ?? [];
    $this->targets = $targets ?? [];
  }
}

class CreateNotificationRuleResult {
  public NotificationRuleArn $arn;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

type CreatedTimestamp = int;

class DeleteNotificationRuleRequest {
  public NotificationRuleArn $arn;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

class DeleteNotificationRuleResult {
  public NotificationRuleArn $arn;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

class DeleteTargetRequest {
  public ForceUnsubscribeAll $force_unsubscribe_all;
  public TargetAddress $target_address;

  public function __construct(shape(
  ?'force_unsubscribe_all' => ForceUnsubscribeAll,
  ?'target_address' => TargetAddress,
  ) $s = shape()) {
    $this->force_unsubscribe_all = $force_unsubscribe_all ?? false;
    $this->target_address = $target_address ?? "";
  }
}

class DeleteTargetResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeNotificationRuleRequest {
  public NotificationRuleArn $arn;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

class DescribeNotificationRuleResult {
  public NotificationRuleArn $arn;
  public NotificationRuleCreatedBy $created_by;
  public CreatedTimestamp $created_timestamp;
  public DetailType $detail_type;
  public EventTypeBatch $event_types;
  public LastModifiedTimestamp $last_modified_timestamp;
  public NotificationRuleName $name;
  public NotificationRuleResource $resource;
  public NotificationRuleStatus $status;
  public Tags $tags;
  public TargetsBatch $targets;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ?'created_by' => NotificationRuleCreatedBy,
  ?'created_timestamp' => CreatedTimestamp,
  ?'detail_type' => DetailType,
  ?'event_types' => EventTypeBatch,
  ?'last_modified_timestamp' => LastModifiedTimestamp,
  ?'name' => NotificationRuleName,
  ?'resource' => NotificationRuleResource,
  ?'status' => NotificationRuleStatus,
  ?'tags' => Tags,
  ?'targets' => TargetsBatch,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created_by = $created_by ?? ;
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->detail_type = $detail_type ?? "";
    $this->event_types = $event_types ?? ;
    $this->last_modified_timestamp = $last_modified_timestamp ?? 0;
    $this->name = $name ?? ;
    $this->resource = $resource ?? ;
    $this->status = $status ?? ;
    $this->tags = $tags ?? [];
    $this->targets = $targets ?? [];
  }
}

type DetailType = string;

type EventTypeBatch = vec<EventTypeSummary>;

type EventTypeId = string;

type EventTypeIds = vec<EventTypeId>;

type EventTypeName = string;

class EventTypeSummary {
  public EventTypeId $event_type_id;
  public EventTypeName $event_type_name;
  public ResourceType $resource_type;
  public ServiceName $service_name;

  public function __construct(shape(
  ?'event_type_id' => EventTypeId,
  ?'event_type_name' => EventTypeName,
  ?'resource_type' => ResourceType,
  ?'service_name' => ServiceName,
  ) $s = shape()) {
    $this->event_type_id = $event_type_id ?? "";
    $this->event_type_name = $event_type_name ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->service_name = $service_name ?? "";
  }
}

type ForceUnsubscribeAll = bool;

class InvalidNextTokenException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LastModifiedTimestamp = int;

class LimitExceededException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListEventTypesFilter {
  public ListEventTypesFilterName $name;
  public ListEventTypesFilterValue $value;

  public function __construct(shape(
  ?'name' => ListEventTypesFilterName,
  ?'value' => ListEventTypesFilterValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

type ListEventTypesFilterName = string;

type ListEventTypesFilterValue = string;

type ListEventTypesFilters = vec<ListEventTypesFilter>;

class ListEventTypesRequest {
  public ListEventTypesFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => ListEventTypesFilters,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListEventTypesResult {
  public EventTypeBatch $event_types;
  public NextToken $next_token;

  public function __construct(shape(
  ?'event_types' => EventTypeBatch,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->event_types = $event_types ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListNotificationRulesFilter {
  public ListNotificationRulesFilterName $name;
  public ListNotificationRulesFilterValue $value;

  public function __construct(shape(
  ?'name' => ListNotificationRulesFilterName,
  ?'value' => ListNotificationRulesFilterValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

type ListNotificationRulesFilterName = string;

type ListNotificationRulesFilterValue = string;

type ListNotificationRulesFilters = vec<ListNotificationRulesFilter>;

class ListNotificationRulesRequest {
  public ListNotificationRulesFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => ListNotificationRulesFilters,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListNotificationRulesResult {
  public NextToken $next_token;
  public NotificationRuleBatch $notification_rules;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'notification_rules' => NotificationRuleBatch,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->notification_rules = $notification_rules ?? ;
  }
}

class ListTagsForResourceRequest {
  public NotificationRuleArn $arn;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

class ListTagsForResourceResult {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListTargetsFilter {
  public ListTargetsFilterName $name;
  public ListTargetsFilterValue $value;

  public function __construct(shape(
  ?'name' => ListTargetsFilterName,
  ?'value' => ListTargetsFilterValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

type ListTargetsFilterName = string;

type ListTargetsFilterValue = string;

type ListTargetsFilters = vec<ListTargetsFilter>;

class ListTargetsRequest {
  public ListTargetsFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => ListTargetsFilters,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListTargetsResult {
  public NextToken $next_token;
  public TargetsBatch $targets;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'targets' => TargetsBatch,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->targets = $targets ?? [];
  }
}

type MaxResults = int;

type Message = string;

type NextToken = string;

type NotificationRuleArn = string;

type NotificationRuleBatch = vec<NotificationRuleSummary>;

type NotificationRuleCreatedBy = string;

type NotificationRuleId = string;

type NotificationRuleName = string;

type NotificationRuleResource = string;

type NotificationRuleStatus = string;

class NotificationRuleSummary {
  public NotificationRuleArn $arn;
  public NotificationRuleId $id;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ?'id' => NotificationRuleId,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->id = $id ?? ;
  }
}

class ResourceAlreadyExistsException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceType = string;

type ServiceName = string;

class SubscribeRequest {
  public NotificationRuleArn $arn;
  public ClientRequestToken $client_request_token;
  public Target $target;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ?'client_request_token' => ClientRequestToken,
  ?'target' => Target,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->client_request_token = $client_request_token ?? "";
    $this->target = $target ?? null;
  }
}

class SubscribeResult {
  public NotificationRuleArn $arn;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public NotificationRuleArn $arn;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->tags = $tags ?? [];
  }
}

class TagResourceResult {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type TagValue = string;

type Tags = dict<TagKey, TagValue>;

class Target {
  public TargetAddress $target_address;
  public TargetType $target_type;

  public function __construct(shape(
  ?'target_address' => TargetAddress,
  ?'target_type' => TargetType,
  ) $s = shape()) {
    $this->target_address = $target_address ?? "";
    $this->target_type = $target_type ?? "";
  }
}

type TargetAddress = string;

type TargetStatus = string;

class TargetSummary {
  public TargetAddress $target_address;
  public TargetStatus $target_status;
  public TargetType $target_type;

  public function __construct(shape(
  ?'target_address' => TargetAddress,
  ?'target_status' => TargetStatus,
  ?'target_type' => TargetType,
  ) $s = shape()) {
    $this->target_address = $target_address ?? "";
    $this->target_status = $target_status ?? "";
    $this->target_type = $target_type ?? "";
  }
}

type TargetType = string;

type Targets = vec<Target>;

type TargetsBatch = vec<TargetSummary>;

class UnsubscribeRequest {
  public NotificationRuleArn $arn;
  public TargetAddress $target_address;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ?'target_address' => TargetAddress,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->target_address = $target_address ?? "";
  }
}

class UnsubscribeResult {
  public NotificationRuleArn $arn;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

class UntagResourceRequest {
  public NotificationRuleArn $arn;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateNotificationRuleRequest {
  public NotificationRuleArn $arn;
  public DetailType $detail_type;
  public EventTypeIds $event_type_ids;
  public NotificationRuleName $name;
  public NotificationRuleStatus $status;
  public Targets $targets;

  public function __construct(shape(
  ?'arn' => NotificationRuleArn,
  ?'detail_type' => DetailType,
  ?'event_type_ids' => EventTypeIds,
  ?'name' => NotificationRuleName,
  ?'status' => NotificationRuleStatus,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->detail_type = $detail_type ?? "";
    $this->event_type_ids = $event_type_ids ?? [];
    $this->name = $name ?? ;
    $this->status = $status ?? ;
    $this->targets = $targets ?? [];
  }
}

class UpdateNotificationRuleResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ValidationException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

