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
}

class AddTagsResponse {
}

class Boolean {
}

class ByteBuffer {
}

class CloudTrailARNInvalidException {
}

class CloudTrailAccessNotEnabledException {
}

class CloudWatchLogsDeliveryUnavailableException {
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
}

class DataResource {
  public string $type;
  public DataResourceValues $values;
}

class DataResourceValues {
}

class DataResources {
}

class Date {
}

class DeleteTrailRequest {
  public string $name;
}

class DeleteTrailResponse {
}

class DescribeTrailsRequest {
  public boolean $include_shadow_trails;
  public TrailNameList $trail_name_list;
}

class DescribeTrailsResponse {
  public TrailList $trail_list;
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
}

class EventCategory {
}

class EventSelector {
  public DataResources $data_resources;
  public ExcludeManagementEventSources $exclude_management_event_sources;
  public boolean $include_management_events;
  public ReadWriteType $read_write_type;
}

class EventSelectors {
}

class EventsList {
}

class ExcludeManagementEventSources {
}

class GetEventSelectorsRequest {
  public string $trail_name;
}

class GetEventSelectorsResponse {
  public EventSelectors $event_selectors;
  public string $trail_arn;
}

class GetInsightSelectorsRequest {
  public string $trail_name;
}

class GetInsightSelectorsResponse {
  public InsightSelectors $insight_selectors;
  public string $trail_arn;
}

class GetTrailRequest {
  public string $name;
}

class GetTrailResponse {
  public Trail $trail;
}

class GetTrailStatusRequest {
  public string $name;
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
}

class InsightNotEnabledException {
}

class InsightSelector {
  public InsightType $insight_type;
}

class InsightSelectors {
}

class InsightType {
}

class InsufficientDependencyServiceAccessPermissionException {
}

class InsufficientEncryptionPolicyException {
}

class InsufficientS3BucketPolicyException {
}

class InsufficientSnsTopicPolicyException {
}

class InvalidCloudWatchLogsLogGroupArnException {
}

class InvalidCloudWatchLogsRoleArnException {
}

class InvalidEventCategoryException {
}

class InvalidEventSelectorsException {
}

class InvalidHomeRegionException {
}

class InvalidInsightSelectorsException {
}

class InvalidKmsKeyIdException {
}

class InvalidLookupAttributesException {
}

class InvalidMaxResultsException {
}

class InvalidNextTokenException {
}

class InvalidParameterCombinationException {
}

class InvalidS3BucketNameException {
}

class InvalidS3PrefixException {
}

class InvalidSnsTopicNameException {
}

class InvalidTagParameterException {
}

class InvalidTimeRangeException {
}

class InvalidTokenException {
}

class InvalidTrailNameException {
}

class KmsException {
}

class KmsKeyDisabledException {
}

class KmsKeyNotFoundException {
}

class ListPublicKeysRequest {
  public Date $end_time;
  public string $next_token;
  public Date $start_time;
}

class ListPublicKeysResponse {
  public string $next_token;
  public PublicKeyList $public_key_list;
}

class ListTagsRequest {
  public string $next_token;
  public ResourceIdList $resource_id_list;
}

class ListTagsResponse {
  public string $next_token;
  public ResourceTagList $resource_tag_list;
}

class ListTrailsRequest {
  public string $next_token;
}

class ListTrailsResponse {
  public string $next_token;
  public Trails $trails;
}

class LookupAttribute {
  public LookupAttributeKey $attribute_key;
  public string $attribute_value;
}

class LookupAttributeKey {
}

class LookupAttributesList {
}

class LookupEventsRequest {
  public Date $end_time;
  public EventCategory $event_category;
  public LookupAttributesList $lookup_attributes;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Date $start_time;
}

class LookupEventsResponse {
  public EventsList $events;
  public NextToken $next_token;
}

class MaxResults {
}

class MaximumNumberOfTrailsExceededException {
}

class NextToken {
}

class NotOrganizationMasterAccountException {
}

class OperationNotPermittedException {
}

class OrganizationNotInAllFeaturesModeException {
}

class OrganizationsNotInUseException {
}

class PublicKey {
  public string $fingerprint;
  public Date $validity_end_time;
  public Date $validity_start_time;
  public ByteBuffer $value;
}

class PublicKeyList {
}

class PutEventSelectorsRequest {
  public EventSelectors $event_selectors;
  public string $trail_name;
}

class PutEventSelectorsResponse {
  public EventSelectors $event_selectors;
  public string $trail_arn;
}

class PutInsightSelectorsRequest {
  public InsightSelectors $insight_selectors;
  public string $trail_name;
}

class PutInsightSelectorsResponse {
  public InsightSelectors $insight_selectors;
  public string $trail_arn;
}

class ReadWriteType {
}

class RemoveTagsRequest {
  public string $resource_id;
  public TagsList $tags_list;
}

class RemoveTagsResponse {
}

class Resource {
  public string $resource_name;
  public string $resource_type;
}

class ResourceIdList {
}

class ResourceList {
}

class ResourceNotFoundException {
}

class ResourceTag {
  public string $resource_id;
  public TagsList $tags_list;
}

class ResourceTagList {
}

class ResourceTypeNotSupportedException {
}

class S3BucketDoesNotExistException {
}

class StartLoggingRequest {
  public string $name;
}

class StartLoggingResponse {
}

class StopLoggingRequest {
  public string $name;
}

class StopLoggingResponse {
}

class String {
}

class Tag {
  public string $key;
  public string $value;
}

class TagsLimitExceededException {
}

class TagsList {
}

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
}

class TrailAlreadyExistsException {
}

class TrailInfo {
  public string $home_region;
  public string $name;
  public string $trail_arn;
}

class TrailList {
}

class TrailNameList {
}

class TrailNotFoundException {
}

class TrailNotProvidedException {
}

class Trails {
}

class UnsupportedOperationException {
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
}

