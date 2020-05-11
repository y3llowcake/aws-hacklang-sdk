<?hh // strict
namespace slack\aws\cloudtrail;

interface CloudTrail {
  public function AddTags(AddTagsRequest): Awaitable<Errors\Result<AddTagsResponse>>;
  public function CreateTrail(CreateTrailRequest): Awaitable<Errors\Result<CreateTrailResponse>>;
  public function DeleteTrail(DeleteTrailRequest): Awaitable<Errors\Result<DeleteTrailResponse>>;
  public function DescribeTrails(DescribeTrailsRequest): Awaitable<Errors\Result<DescribeTrailsResponse>>;
  public function GetEventSelectors(GetEventSelectorsRequest): Awaitable<Errors\Result<GetEventSelectorsResponse>>;
  public function GetInsightSelectors(GetInsightSelectorsRequest): Awaitable<Errors\Result<GetInsightSelectorsResponse>>;
  public function GetTrail(GetTrailRequest): Awaitable<Errors\Result<GetTrailResponse>>;
  public function GetTrailStatus(GetTrailStatusRequest): Awaitable<Errors\Result<GetTrailStatusResponse>>;
  public function ListPublicKeys(ListPublicKeysRequest): Awaitable<Errors\Result<ListPublicKeysResponse>>;
  public function ListTags(ListTagsRequest): Awaitable<Errors\Result<ListTagsResponse>>;
  public function ListTrails(ListTrailsRequest): Awaitable<Errors\Result<ListTrailsResponse>>;
  public function LookupEvents(LookupEventsRequest): Awaitable<Errors\Result<LookupEventsResponse>>;
  public function PutEventSelectors(PutEventSelectorsRequest): Awaitable<Errors\Result<PutEventSelectorsResponse>>;
  public function PutInsightSelectors(PutInsightSelectorsRequest): Awaitable<Errors\Result<PutInsightSelectorsResponse>>;
  public function RemoveTags(RemoveTagsRequest): Awaitable<Errors\Result<RemoveTagsResponse>>;
  public function StartLogging(StartLoggingRequest): Awaitable<Errors\Result<StartLoggingResponse>>;
  public function StopLogging(StopLoggingRequest): Awaitable<Errors\Result<StopLoggingResponse>>;
  public function UpdateTrail(UpdateTrailRequest): Awaitable<Errors\Result<UpdateTrailResponse>>;
}

class AddTagsRequest {
  public string $resource_id;
  public TagsList $tags_list;

  public function __construct(shape(
  ?'resource_id' => string,
  ?'tags_list' => TagsList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->tags_list = $tags_list ?? [];
  }
}

class AddTagsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Boolean = bool;

type ByteBuffer = string;

class CloudTrailARNInvalidException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CloudTrailAccessNotEnabledException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CloudWatchLogsDeliveryUnavailableException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateTrailRequest {
  public string $cloud_watch_logs_log_group_arn;
  public string $cloud_watch_logs_role_arn;
  public boolean $enable_log_file_validation;
  public boolean $include_global_service_events;
  public boolean $is_multi_region_trail;
  public boolean $is_organization_trail;
  public string $kms_key_id;
  public string $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public string $sns_topic_name;
  public TagsList $tags_list;

  public function __construct(shape(
  ?'cloud_watch_logs_log_group_arn' => string,
  ?'cloud_watch_logs_role_arn' => string,
  ?'enable_log_file_validation' => boolean,
  ?'include_global_service_events' => boolean,
  ?'is_multi_region_trail' => boolean,
  ?'is_organization_trail' => boolean,
  ?'kms_key_id' => string,
  ?'name' => string,
  ?'s_3_bucket_name' => string,
  ?'s_3_key_prefix' => string,
  ?'sns_topic_name' => string,
  ?'tags_list' => TagsList,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $cloud_watch_logs_log_group_arn ?? ;
    $this->cloud_watch_logs_role_arn = $cloud_watch_logs_role_arn ?? ;
    $this->enable_log_file_validation = $enable_log_file_validation ?? ;
    $this->include_global_service_events = $include_global_service_events ?? ;
    $this->is_multi_region_trail = $is_multi_region_trail ?? ;
    $this->is_organization_trail = $is_organization_trail ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->name = $name ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? ;
    $this->sns_topic_name = $sns_topic_name ?? ;
    $this->tags_list = $tags_list ?? [];
  }
}

class CreateTrailResponse {
  public string $cloud_watch_logs_log_group_arn;
  public string $cloud_watch_logs_role_arn;
  public boolean $include_global_service_events;
  public boolean $is_multi_region_trail;
  public boolean $is_organization_trail;
  public string $kms_key_id;
  public boolean $log_file_validation_enabled;
  public string $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public string $sns_topic_arn;
  public string $sns_topic_name;
  public string $trail_arn;

  public function __construct(shape(
  ?'cloud_watch_logs_log_group_arn' => string,
  ?'cloud_watch_logs_role_arn' => string,
  ?'include_global_service_events' => boolean,
  ?'is_multi_region_trail' => boolean,
  ?'is_organization_trail' => boolean,
  ?'kms_key_id' => string,
  ?'log_file_validation_enabled' => boolean,
  ?'name' => string,
  ?'s_3_bucket_name' => string,
  ?'s_3_key_prefix' => string,
  ?'sns_topic_arn' => string,
  ?'sns_topic_name' => string,
  ?'trail_arn' => string,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $cloud_watch_logs_log_group_arn ?? ;
    $this->cloud_watch_logs_role_arn = $cloud_watch_logs_role_arn ?? ;
    $this->include_global_service_events = $include_global_service_events ?? ;
    $this->is_multi_region_trail = $is_multi_region_trail ?? ;
    $this->is_organization_trail = $is_organization_trail ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->log_file_validation_enabled = $log_file_validation_enabled ?? ;
    $this->name = $name ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? ;
    $this->sns_topic_arn = $sns_topic_arn ?? ;
    $this->sns_topic_name = $sns_topic_name ?? ;
    $this->trail_arn = $trail_arn ?? ;
  }
}

class DataResource {
  public string $type;
  public DataResourceValues $values;

  public function __construct(shape(
  ?'type' => string,
  ?'values' => DataResourceValues,
  ) $s = shape()) {
    $this->type = $type ?? ;
    $this->values = $values ?? ;
  }
}

type DataResourceValues = vec<String>;

type DataResources = vec<DataResource>;

type Date = int;

class DeleteTrailRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DeleteTrailResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeTrailsRequest {
  public boolean $include_shadow_trails;
  public TrailNameList $trail_name_list;

  public function __construct(shape(
  ?'include_shadow_trails' => boolean,
  ?'trail_name_list' => TrailNameList,
  ) $s = shape()) {
    $this->include_shadow_trails = $include_shadow_trails ?? ;
    $this->trail_name_list = $trail_name_list ?? ;
  }
}

class DescribeTrailsResponse {
  public TrailList $trail_list;

  public function __construct(shape(
  ?'trail_list' => TrailList,
  ) $s = shape()) {
    $this->trail_list = $trail_list ?? ;
  }
}

class Event {
  public string $access_key_id;
  public string $cloud_trail_event;
  public string $event_id;
  public string $event_name;
  public string $event_source;
  public Date $event_time;
  public string $read_only;
  public ResourceList $resources;
  public string $username;

  public function __construct(shape(
  ?'access_key_id' => string,
  ?'cloud_trail_event' => string,
  ?'event_id' => string,
  ?'event_name' => string,
  ?'event_source' => string,
  ?'event_time' => Date,
  ?'read_only' => string,
  ?'resources' => ResourceList,
  ?'username' => string,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? ;
    $this->cloud_trail_event = $cloud_trail_event ?? ;
    $this->event_id = $event_id ?? ;
    $this->event_name = $event_name ?? ;
    $this->event_source = $event_source ?? ;
    $this->event_time = $event_time ?? ;
    $this->read_only = $read_only ?? ;
    $this->resources = $resources ?? ;
    $this->username = $username ?? ;
  }
}

type EventCategory = string;

class EventSelector {
  public DataResources $data_resources;
  public ExcludeManagementEventSources $exclude_management_event_sources;
  public boolean $include_management_events;
  public ReadWriteType $read_write_type;

  public function __construct(shape(
  ?'data_resources' => DataResources,
  ?'exclude_management_event_sources' => ExcludeManagementEventSources,
  ?'include_management_events' => boolean,
  ?'read_write_type' => ReadWriteType,
  ) $s = shape()) {
    $this->data_resources = $data_resources ?? [];
    $this->exclude_management_event_sources = $exclude_management_event_sources ?? [];
    $this->include_management_events = $include_management_events ?? ;
    $this->read_write_type = $read_write_type ?? "";
  }
}

type EventSelectors = vec<EventSelector>;

type EventsList = vec<Event>;

type ExcludeManagementEventSources = vec<String>;

class GetEventSelectorsRequest {
  public string $trail_name;

  public function __construct(shape(
  ?'trail_name' => string,
  ) $s = shape()) {
    $this->trail_name = $trail_name ?? ;
  }
}

class GetEventSelectorsResponse {
  public EventSelectors $event_selectors;
  public string $trail_arn;

  public function __construct(shape(
  ?'event_selectors' => EventSelectors,
  ?'trail_arn' => string,
  ) $s = shape()) {
    $this->event_selectors = $event_selectors ?? [];
    $this->trail_arn = $trail_arn ?? ;
  }
}

class GetInsightSelectorsRequest {
  public string $trail_name;

  public function __construct(shape(
  ?'trail_name' => string,
  ) $s = shape()) {
    $this->trail_name = $trail_name ?? ;
  }
}

class GetInsightSelectorsResponse {
  public InsightSelectors $insight_selectors;
  public string $trail_arn;

  public function __construct(shape(
  ?'insight_selectors' => InsightSelectors,
  ?'trail_arn' => string,
  ) $s = shape()) {
    $this->insight_selectors = $insight_selectors ?? [];
    $this->trail_arn = $trail_arn ?? ;
  }
}

class GetTrailRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class GetTrailResponse {
  public Trail $trail;

  public function __construct(shape(
  ?'trail' => Trail,
  ) $s = shape()) {
    $this->trail = $trail ?? null;
  }
}

class GetTrailStatusRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class GetTrailStatusResponse {
  public boolean $is_logging;
  public string $latest_cloud_watch_logs_delivery_error;
  public Date $latest_cloud_watch_logs_delivery_time;
  public string $latest_delivery_attempt_succeeded;
  public string $latest_delivery_attempt_time;
  public string $latest_delivery_error;
  public Date $latest_delivery_time;
  public string $latest_digest_delivery_error;
  public Date $latest_digest_delivery_time;
  public string $latest_notification_attempt_succeeded;
  public string $latest_notification_attempt_time;
  public string $latest_notification_error;
  public Date $latest_notification_time;
  public Date $start_logging_time;
  public Date $stop_logging_time;
  public string $time_logging_started;
  public string $time_logging_stopped;

  public function __construct(shape(
  ?'is_logging' => boolean,
  ?'latest_cloud_watch_logs_delivery_error' => string,
  ?'latest_cloud_watch_logs_delivery_time' => Date,
  ?'latest_delivery_attempt_succeeded' => string,
  ?'latest_delivery_attempt_time' => string,
  ?'latest_delivery_error' => string,
  ?'latest_delivery_time' => Date,
  ?'latest_digest_delivery_error' => string,
  ?'latest_digest_delivery_time' => Date,
  ?'latest_notification_attempt_succeeded' => string,
  ?'latest_notification_attempt_time' => string,
  ?'latest_notification_error' => string,
  ?'latest_notification_time' => Date,
  ?'start_logging_time' => Date,
  ?'stop_logging_time' => Date,
  ?'time_logging_started' => string,
  ?'time_logging_stopped' => string,
  ) $s = shape()) {
    $this->is_logging = $is_logging ?? ;
    $this->latest_cloud_watch_logs_delivery_error = $latest_cloud_watch_logs_delivery_error ?? ;
    $this->latest_cloud_watch_logs_delivery_time = $latest_cloud_watch_logs_delivery_time ?? ;
    $this->latest_delivery_attempt_succeeded = $latest_delivery_attempt_succeeded ?? ;
    $this->latest_delivery_attempt_time = $latest_delivery_attempt_time ?? ;
    $this->latest_delivery_error = $latest_delivery_error ?? ;
    $this->latest_delivery_time = $latest_delivery_time ?? ;
    $this->latest_digest_delivery_error = $latest_digest_delivery_error ?? ;
    $this->latest_digest_delivery_time = $latest_digest_delivery_time ?? ;
    $this->latest_notification_attempt_succeeded = $latest_notification_attempt_succeeded ?? ;
    $this->latest_notification_attempt_time = $latest_notification_attempt_time ?? ;
    $this->latest_notification_error = $latest_notification_error ?? ;
    $this->latest_notification_time = $latest_notification_time ?? ;
    $this->start_logging_time = $start_logging_time ?? ;
    $this->stop_logging_time = $stop_logging_time ?? ;
    $this->time_logging_started = $time_logging_started ?? ;
    $this->time_logging_stopped = $time_logging_stopped ?? ;
  }
}

class InsightNotEnabledException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsightSelector {
  public InsightType $insight_type;

  public function __construct(shape(
  ?'insight_type' => InsightType,
  ) $s = shape()) {
    $this->insight_type = $insight_type ?? "";
  }
}

type InsightSelectors = vec<InsightSelector>;

type InsightType = string;

class InsufficientDependencyServiceAccessPermissionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsufficientEncryptionPolicyException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsufficientS3BucketPolicyException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsufficientSnsTopicPolicyException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidCloudWatchLogsLogGroupArnException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidCloudWatchLogsRoleArnException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidEventCategoryException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidEventSelectorsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidHomeRegionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidInsightSelectorsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidKmsKeyIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidLookupAttributesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidMaxResultsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidNextTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParameterCombinationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidS3BucketNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidS3PrefixException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSnsTopicNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTagParameterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTimeRangeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTrailNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class KmsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class KmsKeyDisabledException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class KmsKeyNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListPublicKeysRequest {
  public Date $end_time;
  public string $next_token;
  public Date $start_time;

  public function __construct(shape(
  ?'end_time' => Date,
  ?'next_token' => string,
  ?'start_time' => Date,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->next_token = $next_token ?? "";
    $this->start_time = $start_time ?? ;
  }
}

class ListPublicKeysResponse {
  public string $next_token;
  public PublicKeyList $public_key_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'public_key_list' => PublicKeyList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->public_key_list = $public_key_list ?? [];
  }
}

class ListTagsRequest {
  public string $next_token;
  public ResourceIdList $resource_id_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'resource_id_list' => ResourceIdList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_id_list = $resource_id_list ?? [];
  }
}

class ListTagsResponse {
  public string $next_token;
  public ResourceTagList $resource_tag_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'resource_tag_list' => ResourceTagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_tag_list = $resource_tag_list ?? [];
  }
}

class ListTrailsRequest {
  public string $next_token;

  public function __construct(shape(
  ?'next_token' => string,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class ListTrailsResponse {
  public string $next_token;
  public Trails $trails;

  public function __construct(shape(
  ?'next_token' => string,
  ?'trails' => Trails,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->trails = $trails ?? [];
  }
}

class LookupAttribute {
  public LookupAttributeKey $attribute_key;
  public string $attribute_value;

  public function __construct(shape(
  ?'attribute_key' => LookupAttributeKey,
  ?'attribute_value' => string,
  ) $s = shape()) {
    $this->attribute_key = $attribute_key ?? ;
    $this->attribute_value = $attribute_value ?? ;
  }
}

type LookupAttributeKey = string;

type LookupAttributesList = vec<LookupAttribute>;

class LookupEventsRequest {
  public Date $end_time;
  public EventCategory $event_category;
  public LookupAttributesList $lookup_attributes;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Date $start_time;

  public function __construct(shape(
  ?'end_time' => Date,
  ?'event_category' => EventCategory,
  ?'lookup_attributes' => LookupAttributesList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'start_time' => Date,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->event_category = $event_category ?? "";
    $this->lookup_attributes = $lookup_attributes ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->start_time = $start_time ?? ;
  }
}

class LookupEventsResponse {
  public EventsList $events;
  public NextToken $next_token;

  public function __construct(shape(
  ?'events' => EventsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->events = $events ?? ;
    $this->next_token = $next_token ?? "";
  }
}

type MaxResults = int;

class MaximumNumberOfTrailsExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type NextToken = string;

class NotOrganizationMasterAccountException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OperationNotPermittedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OrganizationNotInAllFeaturesModeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OrganizationsNotInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PublicKey {
  public string $fingerprint;
  public Date $validity_end_time;
  public Date $validity_start_time;
  public ByteBuffer $value;

  public function __construct(shape(
  ?'fingerprint' => string,
  ?'validity_end_time' => Date,
  ?'validity_start_time' => Date,
  ?'value' => ByteBuffer,
  ) $s = shape()) {
    $this->fingerprint = $fingerprint ?? ;
    $this->validity_end_time = $validity_end_time ?? ;
    $this->validity_start_time = $validity_start_time ?? ;
    $this->value = $value ?? ;
  }
}

type PublicKeyList = vec<PublicKey>;

class PutEventSelectorsRequest {
  public EventSelectors $event_selectors;
  public string $trail_name;

  public function __construct(shape(
  ?'event_selectors' => EventSelectors,
  ?'trail_name' => string,
  ) $s = shape()) {
    $this->event_selectors = $event_selectors ?? [];
    $this->trail_name = $trail_name ?? ;
  }
}

class PutEventSelectorsResponse {
  public EventSelectors $event_selectors;
  public string $trail_arn;

  public function __construct(shape(
  ?'event_selectors' => EventSelectors,
  ?'trail_arn' => string,
  ) $s = shape()) {
    $this->event_selectors = $event_selectors ?? [];
    $this->trail_arn = $trail_arn ?? ;
  }
}

class PutInsightSelectorsRequest {
  public InsightSelectors $insight_selectors;
  public string $trail_name;

  public function __construct(shape(
  ?'insight_selectors' => InsightSelectors,
  ?'trail_name' => string,
  ) $s = shape()) {
    $this->insight_selectors = $insight_selectors ?? [];
    $this->trail_name = $trail_name ?? ;
  }
}

class PutInsightSelectorsResponse {
  public InsightSelectors $insight_selectors;
  public string $trail_arn;

  public function __construct(shape(
  ?'insight_selectors' => InsightSelectors,
  ?'trail_arn' => string,
  ) $s = shape()) {
    $this->insight_selectors = $insight_selectors ?? [];
    $this->trail_arn = $trail_arn ?? ;
  }
}

type ReadWriteType = string;

class RemoveTagsRequest {
  public string $resource_id;
  public TagsList $tags_list;

  public function __construct(shape(
  ?'resource_id' => string,
  ?'tags_list' => TagsList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->tags_list = $tags_list ?? [];
  }
}

class RemoveTagsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Resource {
  public string $resource_name;
  public string $resource_type;

  public function __construct(shape(
  ?'resource_name' => string,
  ?'resource_type' => string,
  ) $s = shape()) {
    $this->resource_name = $resource_name ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

type ResourceIdList = vec<String>;

type ResourceList = vec<Resource>;

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceTag {
  public string $resource_id;
  public TagsList $tags_list;

  public function __construct(shape(
  ?'resource_id' => string,
  ?'tags_list' => TagsList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->tags_list = $tags_list ?? [];
  }
}

type ResourceTagList = vec<ResourceTag>;

class ResourceTypeNotSupportedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class S3BucketDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartLoggingRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class StartLoggingResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopLoggingRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class StopLoggingResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type String = string;

class Tag {
  public string $key;
  public string $value;

  public function __construct(shape(
  ?'key' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

class TagsLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagsList = vec<Tag>;

class Trail {
  public string $cloud_watch_logs_log_group_arn;
  public string $cloud_watch_logs_role_arn;
  public boolean $has_custom_event_selectors;
  public boolean $has_insight_selectors;
  public string $home_region;
  public boolean $include_global_service_events;
  public boolean $is_multi_region_trail;
  public boolean $is_organization_trail;
  public string $kms_key_id;
  public boolean $log_file_validation_enabled;
  public string $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public string $sns_topic_arn;
  public string $sns_topic_name;
  public string $trail_arn;

  public function __construct(shape(
  ?'cloud_watch_logs_log_group_arn' => string,
  ?'cloud_watch_logs_role_arn' => string,
  ?'has_custom_event_selectors' => boolean,
  ?'has_insight_selectors' => boolean,
  ?'home_region' => string,
  ?'include_global_service_events' => boolean,
  ?'is_multi_region_trail' => boolean,
  ?'is_organization_trail' => boolean,
  ?'kms_key_id' => string,
  ?'log_file_validation_enabled' => boolean,
  ?'name' => string,
  ?'s_3_bucket_name' => string,
  ?'s_3_key_prefix' => string,
  ?'sns_topic_arn' => string,
  ?'sns_topic_name' => string,
  ?'trail_arn' => string,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $cloud_watch_logs_log_group_arn ?? ;
    $this->cloud_watch_logs_role_arn = $cloud_watch_logs_role_arn ?? ;
    $this->has_custom_event_selectors = $has_custom_event_selectors ?? ;
    $this->has_insight_selectors = $has_insight_selectors ?? ;
    $this->home_region = $home_region ?? ;
    $this->include_global_service_events = $include_global_service_events ?? ;
    $this->is_multi_region_trail = $is_multi_region_trail ?? ;
    $this->is_organization_trail = $is_organization_trail ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->log_file_validation_enabled = $log_file_validation_enabled ?? ;
    $this->name = $name ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? ;
    $this->sns_topic_arn = $sns_topic_arn ?? ;
    $this->sns_topic_name = $sns_topic_name ?? ;
    $this->trail_arn = $trail_arn ?? ;
  }
}

class TrailAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TrailInfo {
  public string $home_region;
  public string $name;
  public string $trail_arn;

  public function __construct(shape(
  ?'home_region' => string,
  ?'name' => string,
  ?'trail_arn' => string,
  ) $s = shape()) {
    $this->home_region = $home_region ?? ;
    $this->name = $name ?? ;
    $this->trail_arn = $trail_arn ?? ;
  }
}

type TrailList = vec<Trail>;

type TrailNameList = vec<String>;

class TrailNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TrailNotProvidedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Trails = vec<TrailInfo>;

class UnsupportedOperationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateTrailRequest {
  public string $cloud_watch_logs_log_group_arn;
  public string $cloud_watch_logs_role_arn;
  public boolean $enable_log_file_validation;
  public boolean $include_global_service_events;
  public boolean $is_multi_region_trail;
  public boolean $is_organization_trail;
  public string $kms_key_id;
  public string $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public string $sns_topic_name;

  public function __construct(shape(
  ?'cloud_watch_logs_log_group_arn' => string,
  ?'cloud_watch_logs_role_arn' => string,
  ?'enable_log_file_validation' => boolean,
  ?'include_global_service_events' => boolean,
  ?'is_multi_region_trail' => boolean,
  ?'is_organization_trail' => boolean,
  ?'kms_key_id' => string,
  ?'name' => string,
  ?'s_3_bucket_name' => string,
  ?'s_3_key_prefix' => string,
  ?'sns_topic_name' => string,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $cloud_watch_logs_log_group_arn ?? ;
    $this->cloud_watch_logs_role_arn = $cloud_watch_logs_role_arn ?? ;
    $this->enable_log_file_validation = $enable_log_file_validation ?? ;
    $this->include_global_service_events = $include_global_service_events ?? ;
    $this->is_multi_region_trail = $is_multi_region_trail ?? ;
    $this->is_organization_trail = $is_organization_trail ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->name = $name ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? ;
    $this->sns_topic_name = $sns_topic_name ?? ;
  }
}

class UpdateTrailResponse {
  public string $cloud_watch_logs_log_group_arn;
  public string $cloud_watch_logs_role_arn;
  public boolean $include_global_service_events;
  public boolean $is_multi_region_trail;
  public boolean $is_organization_trail;
  public string $kms_key_id;
  public boolean $log_file_validation_enabled;
  public string $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public string $sns_topic_arn;
  public string $sns_topic_name;
  public string $trail_arn;

  public function __construct(shape(
  ?'cloud_watch_logs_log_group_arn' => string,
  ?'cloud_watch_logs_role_arn' => string,
  ?'include_global_service_events' => boolean,
  ?'is_multi_region_trail' => boolean,
  ?'is_organization_trail' => boolean,
  ?'kms_key_id' => string,
  ?'log_file_validation_enabled' => boolean,
  ?'name' => string,
  ?'s_3_bucket_name' => string,
  ?'s_3_key_prefix' => string,
  ?'sns_topic_arn' => string,
  ?'sns_topic_name' => string,
  ?'trail_arn' => string,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $cloud_watch_logs_log_group_arn ?? ;
    $this->cloud_watch_logs_role_arn = $cloud_watch_logs_role_arn ?? ;
    $this->include_global_service_events = $include_global_service_events ?? ;
    $this->is_multi_region_trail = $is_multi_region_trail ?? ;
    $this->is_organization_trail = $is_organization_trail ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->log_file_validation_enabled = $log_file_validation_enabled ?? ;
    $this->name = $name ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? ;
    $this->sns_topic_arn = $sns_topic_arn ?? ;
    $this->sns_topic_name = $sns_topic_name ?? ;
    $this->trail_arn = $trail_arn ?? ;
  }
}

