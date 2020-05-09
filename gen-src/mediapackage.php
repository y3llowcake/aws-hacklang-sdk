<?hh // strict
namespace slack\aws\mediapackage;

interface MediaPackage {
  public function CreateChannel(CreateChannelRequest): Awaitable<Errors\Result<CreateChannelResponse>>;
  public function CreateHarvestJob(CreateHarvestJobRequest): Awaitable<Errors\Result<CreateHarvestJobResponse>>;
  public function CreateOriginEndpoint(CreateOriginEndpointRequest): Awaitable<Errors\Result<CreateOriginEndpointResponse>>;
  public function DeleteChannel(DeleteChannelRequest): Awaitable<Errors\Result<DeleteChannelResponse>>;
  public function DeleteOriginEndpoint(DeleteOriginEndpointRequest): Awaitable<Errors\Result<DeleteOriginEndpointResponse>>;
  public function DescribeChannel(DescribeChannelRequest): Awaitable<Errors\Result<DescribeChannelResponse>>;
  public function DescribeHarvestJob(DescribeHarvestJobRequest): Awaitable<Errors\Result<DescribeHarvestJobResponse>>;
  public function DescribeOriginEndpoint(DescribeOriginEndpointRequest): Awaitable<Errors\Result<DescribeOriginEndpointResponse>>;
  public function ListChannels(ListChannelsRequest): Awaitable<Errors\Result<ListChannelsResponse>>;
  public function ListHarvestJobs(ListHarvestJobsRequest): Awaitable<Errors\Result<ListHarvestJobsResponse>>;
  public function ListOriginEndpoints(ListOriginEndpointsRequest): Awaitable<Errors\Result<ListOriginEndpointsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function RotateChannelCredentials(RotateChannelCredentialsRequest): Awaitable<Errors\Result<RotateChannelCredentialsResponse>>;
  public function RotateIngestEndpointCredentials(RotateIngestEndpointCredentialsRequest): Awaitable<Errors\Result<RotateIngestEndpointCredentialsResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateChannel(UpdateChannelRequest): Awaitable<Errors\Result<UpdateChannelResponse>>;
  public function UpdateOriginEndpoint(UpdateOriginEndpointRequest): Awaitable<Errors\Result<UpdateOriginEndpointResponse>>;
}

class AdMarkers {
}

class AdTriggers {
}

class AdsOnDeliveryRestrictions {
}

class Authorization {
  public __string $cdn_identifier_secret;
  public __string $secrets_role_arn;
}

class Channel {
  public __string $arn;
  public __string $description;
  public HlsIngest $hls_ingest;
  public __string $id;
  public Tags $tags;
}

class ChannelCreateParameters {
  public __string $description;
  public __string $id;
  public Tags $tags;
}

class ChannelList {
  public __listOfChannel $channels;
  public __string $next_token;
}

class ChannelUpdateParameters {
  public __string $description;
}

class CmafEncryption {
  public __integer $key_rotation_interval_seconds;
  public SpekeKeyProvider $speke_key_provider;
}

class CmafPackage {
  public CmafEncryption $encryption;
  public __listOfHlsManifest $hls_manifests;
  public __integer $segment_duration_seconds;
  public __string $segment_prefix;
  public StreamSelection $stream_selection;
}

class CmafPackageCreateOrUpdateParameters {
  public CmafEncryption $encryption;
  public __listOfHlsManifestCreateOrUpdateParameters $hls_manifests;
  public __integer $segment_duration_seconds;
  public __string $segment_prefix;
  public StreamSelection $stream_selection;
}

class CreateChannelRequest {
  public __string $description;
  public __string $id;
  public Tags $tags;
}

class CreateChannelResponse {
  public __string $arn;
  public __string $description;
  public HlsIngest $hls_ingest;
  public __string $id;
  public Tags $tags;
}

class CreateHarvestJobRequest {
  public __string $end_time;
  public __string $id;
  public __string $origin_endpoint_id;
  public S3Destination $s_3_destination;
  public __string $start_time;
}

class CreateHarvestJobResponse {
  public __string $arn;
  public __string $channel_id;
  public __string $created_at;
  public __string $end_time;
  public __string $id;
  public __string $origin_endpoint_id;
  public S3Destination $s_3_destination;
  public __string $start_time;
  public Status $status;
}

class CreateOriginEndpointRequest {
  public Authorization $authorization;
  public __string $channel_id;
  public CmafPackageCreateOrUpdateParameters $cmaf_package;
  public DashPackage $dash_package;
  public __string $description;
  public HlsPackage $hls_package;
  public __string $id;
  public __string $manifest_name;
  public MssPackage $mss_package;
  public Origination $origination;
  public __integer $startover_window_seconds;
  public Tags $tags;
  public __integer $time_delay_seconds;
  public __listOf__string $whitelist;
}

class CreateOriginEndpointResponse {
  public __string $arn;
  public Authorization $authorization;
  public __string $channel_id;
  public CmafPackage $cmaf_package;
  public DashPackage $dash_package;
  public __string $description;
  public HlsPackage $hls_package;
  public __string $id;
  public __string $manifest_name;
  public MssPackage $mss_package;
  public Origination $origination;
  public __integer $startover_window_seconds;
  public Tags $tags;
  public __integer $time_delay_seconds;
  public __string $url;
  public __listOf__string $whitelist;
}

class DashEncryption {
  public __integer $key_rotation_interval_seconds;
  public SpekeKeyProvider $speke_key_provider;
}

class DashPackage {
  public AdTriggers $ad_triggers;
  public AdsOnDeliveryRestrictions $ads_on_delivery_restrictions;
  public DashEncryption $encryption;
  public ManifestLayout $manifest_layout;
  public __integer $manifest_window_seconds;
  public __integer $min_buffer_time_seconds;
  public __integer $min_update_period_seconds;
  public __listOf__PeriodTriggersElement $period_triggers;
  public Profile $profile;
  public __integer $segment_duration_seconds;
  public SegmentTemplateFormat $segment_template_format;
  public StreamSelection $stream_selection;
  public __integer $suggested_presentation_delay_seconds;
}

class DeleteChannelRequest {
  public __string $id;
}

class DeleteChannelResponse {
}

class DeleteOriginEndpointRequest {
  public __string $id;
}

class DeleteOriginEndpointResponse {
}

class DescribeChannelRequest {
  public __string $id;
}

class DescribeChannelResponse {
  public __string $arn;
  public __string $description;
  public HlsIngest $hls_ingest;
  public __string $id;
  public Tags $tags;
}

class DescribeHarvestJobRequest {
  public __string $id;
}

class DescribeHarvestJobResponse {
  public __string $arn;
  public __string $channel_id;
  public __string $created_at;
  public __string $end_time;
  public __string $id;
  public __string $origin_endpoint_id;
  public S3Destination $s_3_destination;
  public __string $start_time;
  public Status $status;
}

class DescribeOriginEndpointRequest {
  public __string $id;
}

class DescribeOriginEndpointResponse {
  public __string $arn;
  public Authorization $authorization;
  public __string $channel_id;
  public CmafPackage $cmaf_package;
  public DashPackage $dash_package;
  public __string $description;
  public HlsPackage $hls_package;
  public __string $id;
  public __string $manifest_name;
  public MssPackage $mss_package;
  public Origination $origination;
  public __integer $startover_window_seconds;
  public Tags $tags;
  public __integer $time_delay_seconds;
  public __string $url;
  public __listOf__string $whitelist;
}

class EncryptionMethod {
}

class ForbiddenException {
  public __string $message;
}

class HarvestJob {
  public __string $arn;
  public __string $channel_id;
  public __string $created_at;
  public __string $end_time;
  public __string $id;
  public __string $origin_endpoint_id;
  public S3Destination $s_3_destination;
  public __string $start_time;
  public Status $status;
}

class HarvestJobCreateParameters {
  public __string $end_time;
  public __string $id;
  public __string $origin_endpoint_id;
  public S3Destination $s_3_destination;
  public __string $start_time;
}

class HarvestJobList {
  public __listOfHarvestJob $harvest_jobs;
  public __string $next_token;
}

class HlsEncryption {
  public __string $constant_initialization_vector;
  public EncryptionMethod $encryption_method;
  public __integer $key_rotation_interval_seconds;
  public __boolean $repeat_ext_x_key;
  public SpekeKeyProvider $speke_key_provider;
}

class HlsIngest {
  public __listOfIngestEndpoint $ingest_endpoints;
}

class HlsManifest {
  public AdMarkers $ad_markers;
  public __string $id;
  public __boolean $include_iframe_only_stream;
  public __string $manifest_name;
  public PlaylistType $playlist_type;
  public __integer $playlist_window_seconds;
  public __integer $program_date_time_interval_seconds;
  public __string $url;
}

class HlsManifestCreateOrUpdateParameters {
  public AdMarkers $ad_markers;
  public AdTriggers $ad_triggers;
  public AdsOnDeliveryRestrictions $ads_on_delivery_restrictions;
  public __string $id;
  public __boolean $include_iframe_only_stream;
  public __string $manifest_name;
  public PlaylistType $playlist_type;
  public __integer $playlist_window_seconds;
  public __integer $program_date_time_interval_seconds;
}

class HlsPackage {
  public AdMarkers $ad_markers;
  public AdTriggers $ad_triggers;
  public AdsOnDeliveryRestrictions $ads_on_delivery_restrictions;
  public HlsEncryption $encryption;
  public __boolean $include_iframe_only_stream;
  public PlaylistType $playlist_type;
  public __integer $playlist_window_seconds;
  public __integer $program_date_time_interval_seconds;
  public __integer $segment_duration_seconds;
  public StreamSelection $stream_selection;
  public __boolean $use_audio_rendition_group;
}

class IngestEndpoint {
  public __string $id;
  public __string $password;
  public __string $url;
  public __string $username;
}

class InternalServerErrorException {
  public __string $message;
}

class ListChannelsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListChannelsResponse {
  public __listOfChannel $channels;
  public __string $next_token;
}

class ListHarvestJobsRequest {
  public __string $include_channel_id;
  public __string $include_status;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListHarvestJobsResponse {
  public __listOfHarvestJob $harvest_jobs;
  public __string $next_token;
}

class ListOriginEndpointsRequest {
  public __string $channel_id;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListOriginEndpointsResponse {
  public __string $next_token;
  public __listOfOriginEndpoint $origin_endpoints;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public __mapOf__string $tags;
}

class ManifestLayout {
}

class MaxResults {
}

class MssEncryption {
  public SpekeKeyProvider $speke_key_provider;
}

class MssPackage {
  public MssEncryption $encryption;
  public __integer $manifest_window_seconds;
  public __integer $segment_duration_seconds;
  public StreamSelection $stream_selection;
}

class NotFoundException {
  public __string $message;
}

class OriginEndpoint {
  public __string $arn;
  public Authorization $authorization;
  public __string $channel_id;
  public CmafPackage $cmaf_package;
  public DashPackage $dash_package;
  public __string $description;
  public HlsPackage $hls_package;
  public __string $id;
  public __string $manifest_name;
  public MssPackage $mss_package;
  public Origination $origination;
  public __integer $startover_window_seconds;
  public Tags $tags;
  public __integer $time_delay_seconds;
  public __string $url;
  public __listOf__string $whitelist;
}

class OriginEndpointCreateParameters {
  public Authorization $authorization;
  public __string $channel_id;
  public CmafPackageCreateOrUpdateParameters $cmaf_package;
  public DashPackage $dash_package;
  public __string $description;
  public HlsPackage $hls_package;
  public __string $id;
  public __string $manifest_name;
  public MssPackage $mss_package;
  public Origination $origination;
  public __integer $startover_window_seconds;
  public Tags $tags;
  public __integer $time_delay_seconds;
  public __listOf__string $whitelist;
}

class OriginEndpointList {
  public __string $next_token;
  public __listOfOriginEndpoint $origin_endpoints;
}

class OriginEndpointUpdateParameters {
  public Authorization $authorization;
  public CmafPackageCreateOrUpdateParameters $cmaf_package;
  public DashPackage $dash_package;
  public __string $description;
  public HlsPackage $hls_package;
  public __string $manifest_name;
  public MssPackage $mss_package;
  public Origination $origination;
  public __integer $startover_window_seconds;
  public __integer $time_delay_seconds;
  public __listOf__string $whitelist;
}

class Origination {
}

class PlaylistType {
}

class Profile {
}

class RotateChannelCredentialsRequest {
  public __string $id;
}

class RotateChannelCredentialsResponse {
  public __string $arn;
  public __string $description;
  public HlsIngest $hls_ingest;
  public __string $id;
  public Tags $tags;
}

class RotateIngestEndpointCredentialsRequest {
  public __string $id;
  public __string $ingest_endpoint_id;
}

class RotateIngestEndpointCredentialsResponse {
  public __string $arn;
  public __string $description;
  public HlsIngest $hls_ingest;
  public __string $id;
  public Tags $tags;
}

class S3Destination {
  public __string $bucket_name;
  public __string $manifest_key;
  public __string $role_arn;
}

class SegmentTemplateFormat {
}

class ServiceUnavailableException {
  public __string $message;
}

class SpekeKeyProvider {
  public __string $certificate_arn;
  public __string $resource_id;
  public __string $role_arn;
  public __listOf__string $system_ids;
  public __string $url;
}

class Status {
}

class StreamOrder {
}

class StreamSelection {
  public __integer $max_video_bits_per_second;
  public __integer $min_video_bits_per_second;
  public StreamOrder $stream_order;
}

class TagResourceRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;
}

class Tags {
}

class TagsModel {
  public __mapOf__string $tags;
}

class TooManyRequestsException {
  public __string $message;
}

class UnprocessableEntityException {
  public __string $message;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class UpdateChannelRequest {
  public __string $description;
  public __string $id;
}

class UpdateChannelResponse {
  public __string $arn;
  public __string $description;
  public HlsIngest $hls_ingest;
  public __string $id;
  public Tags $tags;
}

class UpdateOriginEndpointRequest {
  public Authorization $authorization;
  public CmafPackageCreateOrUpdateParameters $cmaf_package;
  public DashPackage $dash_package;
  public __string $description;
  public HlsPackage $hls_package;
  public __string $id;
  public __string $manifest_name;
  public MssPackage $mss_package;
  public Origination $origination;
  public __integer $startover_window_seconds;
  public __integer $time_delay_seconds;
  public __listOf__string $whitelist;
}

class UpdateOriginEndpointResponse {
  public __string $arn;
  public Authorization $authorization;
  public __string $channel_id;
  public CmafPackage $cmaf_package;
  public DashPackage $dash_package;
  public __string $description;
  public HlsPackage $hls_package;
  public __string $id;
  public __string $manifest_name;
  public MssPackage $mss_package;
  public Origination $origination;
  public __integer $startover_window_seconds;
  public Tags $tags;
  public __integer $time_delay_seconds;
  public __string $url;
  public __listOf__string $whitelist;
}

class __AdTriggersElement {
}

class __PeriodTriggersElement {
}

class __boolean {
}

class __double {
}

class __integer {
}

class __listOfChannel {
}

class __listOfHarvestJob {
}

class __listOfHlsManifest {
}

class __listOfHlsManifestCreateOrUpdateParameters {
}

class __listOfIngestEndpoint {
}

class __listOfOriginEndpoint {
}

class __listOf__PeriodTriggersElement {
}

class __listOf__string {
}

class __long {
}

class __mapOf__string {
}

class __string {
}

