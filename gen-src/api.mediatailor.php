<?hh // strict
namespace slack\aws\api.mediatailor;

interface MediaTailor {
  public function DeletePlaybackConfiguration(DeletePlaybackConfigurationRequest) Awaitable<Errors\Result<DeletePlaybackConfigurationResponse>>;
  public function GetPlaybackConfiguration(GetPlaybackConfigurationRequest) Awaitable<Errors\Result<GetPlaybackConfigurationResponse>>;
  public function ListPlaybackConfigurations(ListPlaybackConfigurationsRequest) Awaitable<Errors\Result<ListPlaybackConfigurationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutPlaybackConfiguration(PutPlaybackConfigurationRequest) Awaitable<Errors\Result<PutPlaybackConfigurationResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
}

class AvailSuppression {
  public Mode $mode;
  public __string $value;
}

class BadRequestException {
  public __string $message;
}

class CdnConfiguration {
  public __string $ad_segment_url_prefix;
  public __string $content_segment_url_prefix;
}

class DashConfiguration {
  public __string $manifest_endpoint_prefix;
  public __string $mpd_location;
  public OriginManifestType $origin_manifest_type;
}

class DashConfigurationForPut {
  public __string $mpd_location;
  public OriginManifestType $origin_manifest_type;
}

class DeletePlaybackConfigurationRequest {
  public __string $name;
}

class DeletePlaybackConfigurationResponse {
}

class GetPlaybackConfigurationRequest {
  public __string $name;
}

class GetPlaybackConfigurationResponse {
  public __string $ad_decision_server_url;
  public AvailSuppression $avail_suppression;
  public CdnConfiguration $cdn_configuration;
  public DashConfiguration $dash_configuration;
  public HlsConfiguration $hls_configuration;
  public LivePreRollConfiguration $live_pre_roll_configuration;
  public __string $name;
  public __integerMin1 $personalization_threshold_seconds;
  public __string $playback_configuration_arn;
  public __string $playback_endpoint_prefix;
  public __string $session_initialization_endpoint_prefix;
  public __string $slate_ad_url;
  public __mapOf__string $tags;
  public __string $transcode_profile_name;
  public __string $video_content_source_url;
}

class HlsConfiguration {
  public __string $manifest_endpoint_prefix;
}

class ListPlaybackConfigurationsRequest {
  public __integerMin1Max100 $max_results;
  public __string $next_token;
}

class ListPlaybackConfigurationsResponse {
  public __listOfPlaybackConfigurations $items;
  public __string $next_token;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public __mapOf__string $tags;
}

class LivePreRollConfiguration {
  public __string $ad_decision_server_url;
  public __integer $max_duration_seconds;
}

class Mode {
}

class OriginManifestType {
}

class PlaybackConfiguration {
  public __string $ad_decision_server_url;
  public CdnConfiguration $cdn_configuration;
  public DashConfiguration $dash_configuration;
  public HlsConfiguration $hls_configuration;
  public __string $name;
  public __integerMin1 $personalization_threshold_seconds;
  public __string $playback_configuration_arn;
  public __string $playback_endpoint_prefix;
  public __string $session_initialization_endpoint_prefix;
  public __string $slate_ad_url;
  public __mapOf__string $tags;
  public __string $transcode_profile_name;
  public __string $video_content_source_url;
}

class PutPlaybackConfigurationRequest {
  public __string $ad_decision_server_url;
  public AvailSuppression $avail_suppression;
  public CdnConfiguration $cdn_configuration;
  public DashConfigurationForPut $dash_configuration;
  public LivePreRollConfiguration $live_pre_roll_configuration;
  public __string $name;
  public __integerMin1 $personalization_threshold_seconds;
  public __string $slate_ad_url;
  public __mapOf__string $tags;
  public __string $transcode_profile_name;
  public __string $video_content_source_url;
}

class PutPlaybackConfigurationResponse {
  public __string $ad_decision_server_url;
  public AvailSuppression $avail_suppression;
  public CdnConfiguration $cdn_configuration;
  public DashConfiguration $dash_configuration;
  public HlsConfiguration $hls_configuration;
  public LivePreRollConfiguration $live_pre_roll_configuration;
  public __string $name;
  public __string $playback_configuration_arn;
  public __string $playback_endpoint_prefix;
  public __string $session_initialization_endpoint_prefix;
  public __string $slate_ad_url;
  public __mapOf__string $tags;
  public __string $transcode_profile_name;
  public __string $video_content_source_url;
}

class TagResourceRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;
}

class TagsModel {
  public __mapOf__string $tags;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class __boolean {
}

class __double {
}

class __integer {
}

class __integerMin1 {
}

class __integerMin1Max100 {
}

class __listOfPlaybackConfigurations {
}

class __listOf__string {
}

class __long {
}

class __mapOf__string {
}

class __string {
}

class __timestampIso8601 {
}

class __timestampUnix {
}

