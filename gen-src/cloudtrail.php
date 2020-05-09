<?hh // strict
namespace slack\aws\cloudtrail;

interface CloudTrail {
  public function CreateTrail(CreateTrailRequest) Awaitable<Errors\Result<CreateTrailResponse>>;
  public function DescribeTrails(DescribeTrailsRequest) Awaitable<Errors\Result<DescribeTrailsResponse>>;
  public function GetTrail(GetTrailRequest) Awaitable<Errors\Result<GetTrailResponse>>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function ListTrails(ListTrailsRequest) Awaitable<Errors\Result<ListTrailsResponse>>;
  public function RemoveTags(RemoveTagsRequest) Awaitable<Errors\Result<RemoveTagsResponse>>;
  public function StopLogging(StopLoggingRequest) Awaitable<Errors\Result<StopLoggingResponse>>;
  public function GetTrailStatus(GetTrailStatusRequest) Awaitable<Errors\Result<GetTrailStatusResponse>>;
  public function PutInsightSelectors(PutInsightSelectorsRequest) Awaitable<Errors\Result<PutInsightSelectorsResponse>>;
  public function StartLogging(StartLoggingRequest) Awaitable<Errors\Result<StartLoggingResponse>>;
  public function GetInsightSelectors(GetInsightSelectorsRequest) Awaitable<Errors\Result<GetInsightSelectorsResponse>>;
  public function ListPublicKeys(ListPublicKeysRequest) Awaitable<Errors\Result<ListPublicKeysResponse>>;
  public function UpdateTrail(UpdateTrailRequest) Awaitable<Errors\Result<UpdateTrailResponse>>;
  public function AddTags(AddTagsRequest) Awaitable<Errors\Result<AddTagsResponse>>;
  public function DeleteTrail(DeleteTrailRequest) Awaitable<Errors\Result<DeleteTrailResponse>>;
  public function GetEventSelectors(GetEventSelectorsRequest) Awaitable<Errors\Result<GetEventSelectorsResponse>>;
  public function LookupEvents(LookupEventsRequest) Awaitable<Errors\Result<LookupEventsResponse>>;
  public function PutEventSelectors(PutEventSelectorsRequest) Awaitable<Errors\Result<PutEventSelectorsResponse>>;
}

class GetEventSelectorsResponse {
  public string $trail_arn;
  public EventSelectors $event_selectors;
}

class InsufficientS3BucketPolicyException {
}

class MaxResults {
}

class TrailNotFoundException {
}

class DataResource {
  public string $type;
  public DataResourceValues $values;
}

class InvalidS3BucketNameException {
}

class StartLoggingRequest {
  public string $name;
}

class TrailList {
}

class Event {
  public string $read_only;
  public string $event_source;
  public string $cloud_trail_event;
  public string $event_id;
  public string $event_name;
  public string $username;
  public ResourceList $resources;
  public string $access_key_id;
  public Date $event_time;
}

class InvalidCloudWatchLogsRoleArnException {
}

class ResourceTagList {
}

class Tag {
  public string $value;
  public string $key;
}

class DataResourceValues {
}

class TagsList {
}

class InsightSelector {
  public InsightType $insight_type;
}

class ListTagsResponse {
  public ResourceTagList $resource_tag_list;
  public string $next_token;
}

class PutEventSelectorsRequest {
  public string $trail_name;
  public EventSelectors $event_selectors;
}

class ResourceTypeNotSupportedException {
}

class Trail {
  public boolean $include_global_service_events;
  public string $s_3_bucket_name;
  public string $sns_topic_arn;
  public string $cloud_watch_logs_role_arn;
  public boolean $has_insight_selectors;
  public boolean $is_organization_trail;
  public string $name;
  public string $s_3_key_prefix;
  public string $sns_topic_name;
  public string $cloud_watch_logs_log_group_arn;
  public boolean $is_multi_region_trail;
  public string $home_region;
  public string $trail_arn;
  public boolean $log_file_validation_enabled;
  public string $kms_key_id;
  public boolean $has_custom_event_selectors;
}

class NextToken {
}

class ReadWriteType {
}

class InvalidKmsKeyIdException {
}

class InvalidNextTokenException {
}

class ListTrailsResponse {
  public Trails $trails;
  public string $next_token;
}

class ByteBuffer {
}

class ListTagsRequest {
  public ResourceIdList $resource_id_list;
  public string $next_token;
}

class PublicKey {
  public ByteBuffer $value;
  public Date $validity_start_time;
  public Date $validity_end_time;
  public string $fingerprint;
}

class RemoveTagsResponse {
}

class TrailNameList {
}

class GetInsightSelectorsRequest {
  public string $trail_name;
}

class OperationNotPermittedException {
}

class PutInsightSelectorsResponse {
  public string $trail_arn;
  public InsightSelectors $insight_selectors;
}

class ResourceTag {
  public string $resource_id;
  public TagsList $tags_list;
}

class UpdateTrailResponse {
  public string $sns_topic_arn;
  public boolean $include_global_service_events;
  public boolean $is_multi_region_trail;
  public string $cloud_watch_logs_log_group_arn;
  public string $kms_key_id;
  public string $name;
  public string $s_3_bucket_name;
  public string $trail_arn;
  public boolean $log_file_validation_enabled;
  public string $cloud_watch_logs_role_arn;
  public boolean $is_organization_trail;
  public string $s_3_key_prefix;
  public string $sns_topic_name;
}

class S3BucketDoesNotExistException {
}

class InvalidCloudWatchLogsLogGroupArnException {
}

class InvalidParameterCombinationException {
}

class LookupAttributeKey {
}

class LookupEventsResponse {
  public EventsList $events;
  public NextToken $next_token;
}

class ResourceNotFoundException {
}

class EventCategory {
}

class UpdateTrailRequest {
  public string $cloud_watch_logs_role_arn;
  public string $kms_key_id;
  public boolean $is_organization_trail;
  public string $sns_topic_name;
  public boolean $include_global_service_events;
  public boolean $is_multi_region_trail;
  public boolean $enable_log_file_validation;
  public string $cloud_watch_logs_log_group_arn;
  public string $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
}

class CreateTrailRequest {
  public boolean $is_multi_region_trail;
  public boolean $enable_log_file_validation;
  public TagsList $tags_list;
  public string $sns_topic_name;
  public boolean $include_global_service_events;
  public string $cloud_watch_logs_log_group_arn;
  public string $cloud_watch_logs_role_arn;
  public string $kms_key_id;
  public string $name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public boolean $is_organization_trail;
}

class Date {
}

class GetTrailStatusRequest {
  public string $name;
}

class InsightType {
}

class OrganizationsNotInUseException {
}

class MaximumNumberOfTrailsExceededException {
}

class RemoveTagsRequest {
  public string $resource_id;
  public TagsList $tags_list;
}

class DescribeTrailsResponse {
  public TrailList $trail_list;
}

class GetTrailResponse {
  public Trail $trail;
}

class InvalidInsightSelectorsException {
}

class InvalidS3PrefixException {
}

class KmsException {
}

class AddTagsRequest {
  public string $resource_id;
  public TagsList $tags_list;
}

class TagsLimitExceededException {
}

class TrailInfo {
  public string $trail_arn;
  public string $name;
  public string $home_region;
}

class UnsupportedOperationException {
}

class ListTrailsRequest {
  public string $next_token;
}

class LookupAttributesList {
}

class LookupEventsRequest {
  public LookupAttributesList $lookup_attributes;
  public Date $start_time;
  public Date $end_time;
  public EventCategory $event_category;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class CreateTrailResponse {
  public boolean $include_global_service_events;
  public boolean $is_multi_region_trail;
  public string $trail_arn;
  public string $cloud_watch_logs_log_group_arn;
  public string $sns_topic_name;
  public string $s_3_bucket_name;
  public string $s_3_key_prefix;
  public string $sns_topic_arn;
  public boolean $log_file_validation_enabled;
  public string $cloud_watch_logs_role_arn;
  public string $kms_key_id;
  public boolean $is_organization_trail;
  public string $name;
}

class EventsList {
}

class GetEventSelectorsRequest {
  public string $trail_name;
}

class InvalidEventCategoryException {
}

class ListPublicKeysRequest {
  public Date $start_time;
  public Date $end_time;
  public string $next_token;
}

class Trails {
}

class Boolean {
}

class CloudTrailAccessNotEnabledException {
}

class CloudWatchLogsDeliveryUnavailableException {
}

class InvalidTrailNameException {
}

class ResourceIdList {
}

class InvalidHomeRegionException {
}

class InvalidLookupAttributesException {
}

class ResourceList {
}

class TrailNotProvidedException {
}

class AddTagsResponse {
}

class InvalidMaxResultsException {
}

class CloudTrailARNInvalidException {
}

class InsightSelectors {
}

class KmsKeyNotFoundException {
}

class OrganizationNotInAllFeaturesModeException {
}

class Resource {
  public string $resource_type;
  public string $resource_name;
}

class EventSelector {
  public ReadWriteType $read_write_type;
  public boolean $include_management_events;
  public DataResources $data_resources;
  public ExcludeManagementEventSources $exclude_management_event_sources;
}

class InsufficientDependencyServiceAccessPermissionException {
}

class InsufficientEncryptionPolicyException {
}

class NotOrganizationMasterAccountException {
}

class ExcludeManagementEventSources {
}

class GetInsightSelectorsResponse {
  public string $trail_arn;
  public InsightSelectors $insight_selectors;
}

class StopLoggingRequest {
  public string $name;
}

class DeleteTrailResponse {
}

class GetTrailStatusResponse {
  public string $latest_notification_attempt_time;
  public boolean $is_logging;
  public Date $start_logging_time;
  public string $latest_cloud_watch_logs_delivery_error;
  public string $latest_notification_attempt_succeeded;
  public string $latest_notification_error;
  public Date $latest_delivery_time;
  public Date $latest_cloud_watch_logs_delivery_time;
  public Date $latest_digest_delivery_time;
  public string $latest_digest_delivery_error;
  public string $latest_delivery_attempt_time;
  public string $latest_delivery_attempt_succeeded;
  public Date $latest_notification_time;
  public Date $stop_logging_time;
  public string $time_logging_stopped;
  public string $latest_delivery_error;
  public string $time_logging_started;
}

class InvalidTokenException {
}

class ListPublicKeysResponse {
  public PublicKeyList $public_key_list;
  public string $next_token;
}

class StartLoggingResponse {
}

class InsufficientSnsTopicPolicyException {
}

class InvalidSnsTopicNameException {
}

class PublicKeyList {
}

class StopLoggingResponse {
}

class GetTrailRequest {
  public string $name;
}

class KmsKeyDisabledException {
}

class PutEventSelectorsResponse {
  public string $trail_arn;
  public EventSelectors $event_selectors;
}

class DescribeTrailsRequest {
  public TrailNameList $trail_name_list;
  public boolean $include_shadow_trails;
}

class EventSelectors {
}

class InvalidTagParameterException {
}

class InvalidTimeRangeException {
}

class DataResources {
}

class InsightNotEnabledException {
}

class PutInsightSelectorsRequest {
  public string $trail_name;
  public InsightSelectors $insight_selectors;
}

class TrailAlreadyExistsException {
}

class LookupAttribute {
  public string $attribute_value;
  public LookupAttributeKey $attribute_key;
}

class DeleteTrailRequest {
  public string $name;
}

class InvalidEventSelectorsException {
}

class String {
}

