<?hh // strict
namespace slack\aws\api.mediatailor;

interface MediaTailor {
  public function DeletePlaybackConfiguration(DeletePlaybackConfigurationRequest $in): Awaitable<\Errors\Result<DeletePlaybackConfigurationResponse>>;
  public function GetPlaybackConfiguration(GetPlaybackConfigurationRequest $in): Awaitable<\Errors\Result<GetPlaybackConfigurationResponse>>;
  public function ListPlaybackConfigurations(ListPlaybackConfigurationsRequest $in): Awaitable<\Errors\Result<ListPlaybackConfigurationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PutPlaybackConfiguration(PutPlaybackConfigurationRequest $in): Awaitable<\Errors\Result<PutPlaybackConfigurationResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
}

class AvailSuppression {
  public ?Mode $mode;
  public ?__string $value;

  public function __construct(shape(
    ?'mode' => ?Mode,
    ?'value' => ?__string,
  ) $s = shape()) {
    $this->mode = $s['mode'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class BadRequestException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CdnConfiguration {
  public ?__string $ad_segment_url_prefix;
  public ?__string $content_segment_url_prefix;

  public function __construct(shape(
    ?'ad_segment_url_prefix' => ?__string,
    ?'content_segment_url_prefix' => ?__string,
  ) $s = shape()) {
    $this->ad_segment_url_prefix = $s['ad_segment_url_prefix'] ?? '';
    $this->content_segment_url_prefix = $s['content_segment_url_prefix'] ?? '';
  }
}

class DashConfiguration {
  public ?__string $manifest_endpoint_prefix;
  public ?__string $mpd_location;
  public ?OriginManifestType $origin_manifest_type;

  public function __construct(shape(
    ?'manifest_endpoint_prefix' => ?__string,
    ?'mpd_location' => ?__string,
    ?'origin_manifest_type' => ?OriginManifestType,
  ) $s = shape()) {
    $this->manifest_endpoint_prefix = $s['manifest_endpoint_prefix'] ?? '';
    $this->mpd_location = $s['mpd_location'] ?? '';
    $this->origin_manifest_type = $s['origin_manifest_type'] ?? '';
  }
}

class DashConfigurationForPut {
  public ?__string $mpd_location;
  public ?OriginManifestType $origin_manifest_type;

  public function __construct(shape(
    ?'mpd_location' => ?__string,
    ?'origin_manifest_type' => ?OriginManifestType,
  ) $s = shape()) {
    $this->mpd_location = $s['mpd_location'] ?? '';
    $this->origin_manifest_type = $s['origin_manifest_type'] ?? '';
  }
}

class DeletePlaybackConfigurationRequest {
  public ?__string $name;

  public function __construct(shape(
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeletePlaybackConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetPlaybackConfigurationRequest {
  public ?__string $name;

  public function __construct(shape(
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class GetPlaybackConfigurationResponse {
  public ?__string $ad_decision_server_url;
  public ?AvailSuppression $avail_suppression;
  public ?CdnConfiguration $cdn_configuration;
  public ?DashConfiguration $dash_configuration;
  public ?HlsConfiguration $hls_configuration;
  public ?LivePreRollConfiguration $live_pre_roll_configuration;
  public ?__string $name;
  public ?__integerMin1 $personalization_threshold_seconds;
  public ?__string $playback_configuration_arn;
  public ?__string $playback_endpoint_prefix;
  public ?__string $session_initialization_endpoint_prefix;
  public ?__string $slate_ad_url;
  public ?__mapOf__string $tags;
  public ?__string $transcode_profile_name;
  public ?__string $video_content_source_url;

  public function __construct(shape(
    ?'ad_decision_server_url' => ?__string,
    ?'avail_suppression' => ?AvailSuppression,
    ?'cdn_configuration' => ?CdnConfiguration,
    ?'dash_configuration' => ?DashConfiguration,
    ?'hls_configuration' => ?HlsConfiguration,
    ?'live_pre_roll_configuration' => ?LivePreRollConfiguration,
    ?'name' => ?__string,
    ?'personalization_threshold_seconds' => ?__integerMin1,
    ?'playback_configuration_arn' => ?__string,
    ?'playback_endpoint_prefix' => ?__string,
    ?'session_initialization_endpoint_prefix' => ?__string,
    ?'slate_ad_url' => ?__string,
    ?'tags' => ?__mapOf__string,
    ?'transcode_profile_name' => ?__string,
    ?'video_content_source_url' => ?__string,
  ) $s = shape()) {
    $this->ad_decision_server_url = $s['ad_decision_server_url'] ?? '';
    $this->avail_suppression = $s['avail_suppression'] ?? null;
    $this->cdn_configuration = $s['cdn_configuration'] ?? null;
    $this->dash_configuration = $s['dash_configuration'] ?? null;
    $this->hls_configuration = $s['hls_configuration'] ?? null;
    $this->live_pre_roll_configuration = $s['live_pre_roll_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->personalization_threshold_seconds = $s['personalization_threshold_seconds'] ?? 0;
    $this->playback_configuration_arn = $s['playback_configuration_arn'] ?? '';
    $this->playback_endpoint_prefix = $s['playback_endpoint_prefix'] ?? '';
    $this->session_initialization_endpoint_prefix = $s['session_initialization_endpoint_prefix'] ?? '';
    $this->slate_ad_url = $s['slate_ad_url'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->transcode_profile_name = $s['transcode_profile_name'] ?? '';
    $this->video_content_source_url = $s['video_content_source_url'] ?? '';
  }
}

class HlsConfiguration {
  public ?__string $manifest_endpoint_prefix;

  public function __construct(shape(
    ?'manifest_endpoint_prefix' => ?__string,
  ) $s = shape()) {
    $this->manifest_endpoint_prefix = $s['manifest_endpoint_prefix'] ?? '';
  }
}

class ListPlaybackConfigurationsRequest {
  public ?__integerMin1Max100 $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__integerMin1Max100,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPlaybackConfigurationsResponse {
  public ?__listOfPlaybackConfigurations $items;
  public ?__string $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfPlaybackConfigurations,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?__string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class LivePreRollConfiguration {
  public ?__string $ad_decision_server_url;
  public ?__integer $max_duration_seconds;

  public function __construct(shape(
    ?'ad_decision_server_url' => ?__string,
    ?'max_duration_seconds' => ?__integer,
  ) $s = shape()) {
    $this->ad_decision_server_url = $s['ad_decision_server_url'] ?? '';
    $this->max_duration_seconds = $s['max_duration_seconds'] ?? 0;
  }
}

type Mode = string;

type OriginManifestType = string;

class PlaybackConfiguration {
  public ?__string $ad_decision_server_url;
  public ?CdnConfiguration $cdn_configuration;
  public ?DashConfiguration $dash_configuration;
  public ?HlsConfiguration $hls_configuration;
  public ?__string $name;
  public ?__integerMin1 $personalization_threshold_seconds;
  public ?__string $playback_configuration_arn;
  public ?__string $playback_endpoint_prefix;
  public ?__string $session_initialization_endpoint_prefix;
  public ?__string $slate_ad_url;
  public ?__mapOf__string $tags;
  public ?__string $transcode_profile_name;
  public ?__string $video_content_source_url;

  public function __construct(shape(
    ?'ad_decision_server_url' => ?__string,
    ?'cdn_configuration' => ?CdnConfiguration,
    ?'dash_configuration' => ?DashConfiguration,
    ?'hls_configuration' => ?HlsConfiguration,
    ?'name' => ?__string,
    ?'personalization_threshold_seconds' => ?__integerMin1,
    ?'playback_configuration_arn' => ?__string,
    ?'playback_endpoint_prefix' => ?__string,
    ?'session_initialization_endpoint_prefix' => ?__string,
    ?'slate_ad_url' => ?__string,
    ?'tags' => ?__mapOf__string,
    ?'transcode_profile_name' => ?__string,
    ?'video_content_source_url' => ?__string,
  ) $s = shape()) {
    $this->ad_decision_server_url = $s['ad_decision_server_url'] ?? '';
    $this->cdn_configuration = $s['cdn_configuration'] ?? null;
    $this->dash_configuration = $s['dash_configuration'] ?? null;
    $this->hls_configuration = $s['hls_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->personalization_threshold_seconds = $s['personalization_threshold_seconds'] ?? 0;
    $this->playback_configuration_arn = $s['playback_configuration_arn'] ?? '';
    $this->playback_endpoint_prefix = $s['playback_endpoint_prefix'] ?? '';
    $this->session_initialization_endpoint_prefix = $s['session_initialization_endpoint_prefix'] ?? '';
    $this->slate_ad_url = $s['slate_ad_url'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->transcode_profile_name = $s['transcode_profile_name'] ?? '';
    $this->video_content_source_url = $s['video_content_source_url'] ?? '';
  }
}

class PutPlaybackConfigurationRequest {
  public ?__string $ad_decision_server_url;
  public ?AvailSuppression $avail_suppression;
  public ?CdnConfiguration $cdn_configuration;
  public ?DashConfigurationForPut $dash_configuration;
  public ?LivePreRollConfiguration $live_pre_roll_configuration;
  public ?__string $name;
  public ?__integerMin1 $personalization_threshold_seconds;
  public ?__string $slate_ad_url;
  public ?__mapOf__string $tags;
  public ?__string $transcode_profile_name;
  public ?__string $video_content_source_url;

  public function __construct(shape(
    ?'ad_decision_server_url' => ?__string,
    ?'avail_suppression' => ?AvailSuppression,
    ?'cdn_configuration' => ?CdnConfiguration,
    ?'dash_configuration' => ?DashConfigurationForPut,
    ?'live_pre_roll_configuration' => ?LivePreRollConfiguration,
    ?'name' => ?__string,
    ?'personalization_threshold_seconds' => ?__integerMin1,
    ?'slate_ad_url' => ?__string,
    ?'tags' => ?__mapOf__string,
    ?'transcode_profile_name' => ?__string,
    ?'video_content_source_url' => ?__string,
  ) $s = shape()) {
    $this->ad_decision_server_url = $s['ad_decision_server_url'] ?? '';
    $this->avail_suppression = $s['avail_suppression'] ?? null;
    $this->cdn_configuration = $s['cdn_configuration'] ?? null;
    $this->dash_configuration = $s['dash_configuration'] ?? null;
    $this->live_pre_roll_configuration = $s['live_pre_roll_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->personalization_threshold_seconds = $s['personalization_threshold_seconds'] ?? 0;
    $this->slate_ad_url = $s['slate_ad_url'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->transcode_profile_name = $s['transcode_profile_name'] ?? '';
    $this->video_content_source_url = $s['video_content_source_url'] ?? '';
  }
}

class PutPlaybackConfigurationResponse {
  public ?__string $ad_decision_server_url;
  public ?AvailSuppression $avail_suppression;
  public ?CdnConfiguration $cdn_configuration;
  public ?DashConfiguration $dash_configuration;
  public ?HlsConfiguration $hls_configuration;
  public ?LivePreRollConfiguration $live_pre_roll_configuration;
  public ?__string $name;
  public ?__string $playback_configuration_arn;
  public ?__string $playback_endpoint_prefix;
  public ?__string $session_initialization_endpoint_prefix;
  public ?__string $slate_ad_url;
  public ?__mapOf__string $tags;
  public ?__string $transcode_profile_name;
  public ?__string $video_content_source_url;

  public function __construct(shape(
    ?'ad_decision_server_url' => ?__string,
    ?'avail_suppression' => ?AvailSuppression,
    ?'cdn_configuration' => ?CdnConfiguration,
    ?'dash_configuration' => ?DashConfiguration,
    ?'hls_configuration' => ?HlsConfiguration,
    ?'live_pre_roll_configuration' => ?LivePreRollConfiguration,
    ?'name' => ?__string,
    ?'playback_configuration_arn' => ?__string,
    ?'playback_endpoint_prefix' => ?__string,
    ?'session_initialization_endpoint_prefix' => ?__string,
    ?'slate_ad_url' => ?__string,
    ?'tags' => ?__mapOf__string,
    ?'transcode_profile_name' => ?__string,
    ?'video_content_source_url' => ?__string,
  ) $s = shape()) {
    $this->ad_decision_server_url = $s['ad_decision_server_url'] ?? '';
    $this->avail_suppression = $s['avail_suppression'] ?? null;
    $this->cdn_configuration = $s['cdn_configuration'] ?? null;
    $this->dash_configuration = $s['dash_configuration'] ?? null;
    $this->hls_configuration = $s['hls_configuration'] ?? null;
    $this->live_pre_roll_configuration = $s['live_pre_roll_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->playback_configuration_arn = $s['playback_configuration_arn'] ?? '';
    $this->playback_endpoint_prefix = $s['playback_endpoint_prefix'] ?? '';
    $this->session_initialization_endpoint_prefix = $s['session_initialization_endpoint_prefix'] ?? '';
    $this->slate_ad_url = $s['slate_ad_url'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->transcode_profile_name = $s['transcode_profile_name'] ?? '';
    $this->video_content_source_url = $s['video_content_source_url'] ?? '';
  }
}

class TagResourceRequest {
  public ?__string $resource_arn;
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagsModel {
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class UntagResourceRequest {
  public ?__string $resource_arn;
  public ?__listOf__string $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tag_keys' => ?__listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

type __boolean = bool;

type __double = float;

type __integer = int;

type __integerMin1 = int;

type __integerMin1Max100 = int;

type __listOfPlaybackConfigurations = vec<PlaybackConfiguration>;

type __listOf__string = vec<__string>;

type __long = int;

type __mapOf__string = dict<__string, __string>;

type __string = string;

type __timestampIso8601 = int;

type __timestampUnix = int;

