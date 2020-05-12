<?hh // strict
namespace slack\aws\mediapackage;

interface MediaPackage {
  public function CreateChannel(CreateChannelRequest $in): Awaitable<\Errors\Result<CreateChannelResponse>>;
  public function CreateHarvestJob(CreateHarvestJobRequest $in): Awaitable<\Errors\Result<CreateHarvestJobResponse>>;
  public function CreateOriginEndpoint(CreateOriginEndpointRequest $in): Awaitable<\Errors\Result<CreateOriginEndpointResponse>>;
  public function DeleteChannel(DeleteChannelRequest $in): Awaitable<\Errors\Result<DeleteChannelResponse>>;
  public function DeleteOriginEndpoint(DeleteOriginEndpointRequest $in): Awaitable<\Errors\Result<DeleteOriginEndpointResponse>>;
  public function DescribeChannel(DescribeChannelRequest $in): Awaitable<\Errors\Result<DescribeChannelResponse>>;
  public function DescribeHarvestJob(DescribeHarvestJobRequest $in): Awaitable<\Errors\Result<DescribeHarvestJobResponse>>;
  public function DescribeOriginEndpoint(DescribeOriginEndpointRequest $in): Awaitable<\Errors\Result<DescribeOriginEndpointResponse>>;
  public function ListChannels(ListChannelsRequest $in): Awaitable<\Errors\Result<ListChannelsResponse>>;
  public function ListHarvestJobs(ListHarvestJobsRequest $in): Awaitable<\Errors\Result<ListHarvestJobsResponse>>;
  public function ListOriginEndpoints(ListOriginEndpointsRequest $in): Awaitable<\Errors\Result<ListOriginEndpointsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function RotateChannelCredentials(RotateChannelCredentialsRequest $in): Awaitable<\Errors\Result<RotateChannelCredentialsResponse>>;
  public function RotateIngestEndpointCredentials(RotateIngestEndpointCredentialsRequest $in): Awaitable<\Errors\Result<RotateIngestEndpointCredentialsResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateChannel(UpdateChannelRequest $in): Awaitable<\Errors\Result<UpdateChannelResponse>>;
  public function UpdateOriginEndpoint(UpdateOriginEndpointRequest $in): Awaitable<\Errors\Result<UpdateOriginEndpointResponse>>;
}

type AdMarkers = string;

type AdTriggers = vec<__AdTriggersElement>;

type AdsOnDeliveryRestrictions = string;

class Authorization {
  public ?__string $cdn_identifier_secret;
  public ?__string $secrets_role_arn;

  public function __construct(shape(
    ?'cdn_identifier_secret' => ?__string,
    ?'secrets_role_arn' => ?__string,
  ) $s = shape()) {
    $this->cdn_identifier_secret = $s['cdn_identifier_secret'] ?? '';
    $this->secrets_role_arn = $s['secrets_role_arn'] ?? '';
  }
}

class Channel {
  public ?__string $arn;
  public ?__string $description;
  public ?HlsIngest $hls_ingest;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'description' => ?__string,
    ?'hls_ingest' => ?HlsIngest,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->hls_ingest = $s['hls_ingest'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ChannelCreateParameters {
  public ?__string $description;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'description' => ?__string,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ChannelList {
  public ?__listOfChannel $channels;
  public ?__string $next_token;

  public function __construct(shape(
    ?'channels' => ?__listOfChannel,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->channels = $s['channels'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ChannelUpdateParameters {
  public ?__string $description;

  public function __construct(shape(
    ?'description' => ?__string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
  }
}

class CmafEncryption {
  public ?__integer $key_rotation_interval_seconds;
  public ?SpekeKeyProvider $speke_key_provider;

  public function __construct(shape(
    ?'key_rotation_interval_seconds' => ?__integer,
    ?'speke_key_provider' => ?SpekeKeyProvider,
  ) $s = shape()) {
    $this->key_rotation_interval_seconds = $s['key_rotation_interval_seconds'] ?? 0;
    $this->speke_key_provider = $s['speke_key_provider'] ?? null;
  }
}

class CmafPackage {
  public ?CmafEncryption $encryption;
  public ?__listOfHlsManifest $hls_manifests;
  public ?__integer $segment_duration_seconds;
  public ?__string $segment_prefix;
  public ?StreamSelection $stream_selection;

  public function __construct(shape(
    ?'encryption' => ?CmafEncryption,
    ?'hls_manifests' => ?__listOfHlsManifest,
    ?'segment_duration_seconds' => ?__integer,
    ?'segment_prefix' => ?__string,
    ?'stream_selection' => ?StreamSelection,
  ) $s = shape()) {
    $this->encryption = $s['encryption'] ?? null;
    $this->hls_manifests = $s['hls_manifests'] ?? vec[];
    $this->segment_duration_seconds = $s['segment_duration_seconds'] ?? 0;
    $this->segment_prefix = $s['segment_prefix'] ?? '';
    $this->stream_selection = $s['stream_selection'] ?? null;
  }
}

class CmafPackageCreateOrUpdateParameters {
  public ?CmafEncryption $encryption;
  public ?__listOfHlsManifestCreateOrUpdateParameters $hls_manifests;
  public ?__integer $segment_duration_seconds;
  public ?__string $segment_prefix;
  public ?StreamSelection $stream_selection;

  public function __construct(shape(
    ?'encryption' => ?CmafEncryption,
    ?'hls_manifests' => ?__listOfHlsManifestCreateOrUpdateParameters,
    ?'segment_duration_seconds' => ?__integer,
    ?'segment_prefix' => ?__string,
    ?'stream_selection' => ?StreamSelection,
  ) $s = shape()) {
    $this->encryption = $s['encryption'] ?? null;
    $this->hls_manifests = $s['hls_manifests'] ?? vec[];
    $this->segment_duration_seconds = $s['segment_duration_seconds'] ?? 0;
    $this->segment_prefix = $s['segment_prefix'] ?? '';
    $this->stream_selection = $s['stream_selection'] ?? null;
  }
}

class CreateChannelRequest {
  public ?__string $description;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'description' => ?__string,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateChannelResponse {
  public ?__string $arn;
  public ?__string $description;
  public ?HlsIngest $hls_ingest;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'description' => ?__string,
    ?'hls_ingest' => ?HlsIngest,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->hls_ingest = $s['hls_ingest'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateHarvestJobRequest {
  public ?__string $end_time;
  public ?__string $id;
  public ?__string $origin_endpoint_id;
  public ?S3Destination $s_3_destination;
  public ?__string $start_time;

  public function __construct(shape(
    ?'end_time' => ?__string,
    ?'id' => ?__string,
    ?'origin_endpoint_id' => ?__string,
    ?'s_3_destination' => ?S3Destination,
    ?'start_time' => ?__string,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->origin_endpoint_id = $s['origin_endpoint_id'] ?? '';
    $this->s_3_destination = $s['s_3_destination'] ?? null;
    $this->start_time = $s['start_time'] ?? '';
  }
}

class CreateHarvestJobResponse {
  public ?__string $arn;
  public ?__string $channel_id;
  public ?__string $created_at;
  public ?__string $end_time;
  public ?__string $id;
  public ?__string $origin_endpoint_id;
  public ?S3Destination $s_3_destination;
  public ?__string $start_time;
  public ?Status $status;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'channel_id' => ?__string,
    ?'created_at' => ?__string,
    ?'end_time' => ?__string,
    ?'id' => ?__string,
    ?'origin_endpoint_id' => ?__string,
    ?'s_3_destination' => ?S3Destination,
    ?'start_time' => ?__string,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->channel_id = $s['channel_id'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->end_time = $s['end_time'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->origin_endpoint_id = $s['origin_endpoint_id'] ?? '';
    $this->s_3_destination = $s['s_3_destination'] ?? null;
    $this->start_time = $s['start_time'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class CreateOriginEndpointRequest {
  public ?Authorization $authorization;
  public ?__string $channel_id;
  public ?CmafPackageCreateOrUpdateParameters $cmaf_package;
  public ?DashPackage $dash_package;
  public ?__string $description;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?__string $manifest_name;
  public ?MssPackage $mss_package;
  public ?Origination $origination;
  public ?__integer $startover_window_seconds;
  public ?Tags $tags;
  public ?__integer $time_delay_seconds;
  public ?__listOf__string $whitelist;

  public function __construct(shape(
    ?'authorization' => ?Authorization,
    ?'channel_id' => ?__string,
    ?'cmaf_package' => ?CmafPackageCreateOrUpdateParameters,
    ?'dash_package' => ?DashPackage,
    ?'description' => ?__string,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'manifest_name' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'origination' => ?Origination,
    ?'startover_window_seconds' => ?__integer,
    ?'tags' => ?Tags,
    ?'time_delay_seconds' => ?__integer,
    ?'whitelist' => ?__listOf__string,
  ) $s = shape()) {
    $this->authorization = $s['authorization'] ?? null;
    $this->channel_id = $s['channel_id'] ?? '';
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->origination = $s['origination'] ?? '';
    $this->startover_window_seconds = $s['startover_window_seconds'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
    $this->time_delay_seconds = $s['time_delay_seconds'] ?? 0;
    $this->whitelist = $s['whitelist'] ?? vec[];
  }
}

class CreateOriginEndpointResponse {
  public ?__string $arn;
  public ?Authorization $authorization;
  public ?__string $channel_id;
  public ?CmafPackage $cmaf_package;
  public ?DashPackage $dash_package;
  public ?__string $description;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?__string $manifest_name;
  public ?MssPackage $mss_package;
  public ?Origination $origination;
  public ?__integer $startover_window_seconds;
  public ?Tags $tags;
  public ?__integer $time_delay_seconds;
  public ?__string $url;
  public ?__listOf__string $whitelist;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'authorization' => ?Authorization,
    ?'channel_id' => ?__string,
    ?'cmaf_package' => ?CmafPackage,
    ?'dash_package' => ?DashPackage,
    ?'description' => ?__string,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'manifest_name' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'origination' => ?Origination,
    ?'startover_window_seconds' => ?__integer,
    ?'tags' => ?Tags,
    ?'time_delay_seconds' => ?__integer,
    ?'url' => ?__string,
    ?'whitelist' => ?__listOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->authorization = $s['authorization'] ?? null;
    $this->channel_id = $s['channel_id'] ?? '';
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->origination = $s['origination'] ?? '';
    $this->startover_window_seconds = $s['startover_window_seconds'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
    $this->time_delay_seconds = $s['time_delay_seconds'] ?? 0;
    $this->url = $s['url'] ?? '';
    $this->whitelist = $s['whitelist'] ?? vec[];
  }
}

class DashEncryption {
  public ?__integer $key_rotation_interval_seconds;
  public ?SpekeKeyProvider $speke_key_provider;

  public function __construct(shape(
    ?'key_rotation_interval_seconds' => ?__integer,
    ?'speke_key_provider' => ?SpekeKeyProvider,
  ) $s = shape()) {
    $this->key_rotation_interval_seconds = $s['key_rotation_interval_seconds'] ?? 0;
    $this->speke_key_provider = $s['speke_key_provider'] ?? null;
  }
}

class DashPackage {
  public ?AdTriggers $ad_triggers;
  public ?AdsOnDeliveryRestrictions $ads_on_delivery_restrictions;
  public ?DashEncryption $encryption;
  public ?ManifestLayout $manifest_layout;
  public ?__integer $manifest_window_seconds;
  public ?__integer $min_buffer_time_seconds;
  public ?__integer $min_update_period_seconds;
  public ?__listOf__PeriodTriggersElement $period_triggers;
  public ?Profile $profile;
  public ?__integer $segment_duration_seconds;
  public ?SegmentTemplateFormat $segment_template_format;
  public ?StreamSelection $stream_selection;
  public ?__integer $suggested_presentation_delay_seconds;

  public function __construct(shape(
    ?'ad_triggers' => ?AdTriggers,
    ?'ads_on_delivery_restrictions' => ?AdsOnDeliveryRestrictions,
    ?'encryption' => ?DashEncryption,
    ?'manifest_layout' => ?ManifestLayout,
    ?'manifest_window_seconds' => ?__integer,
    ?'min_buffer_time_seconds' => ?__integer,
    ?'min_update_period_seconds' => ?__integer,
    ?'period_triggers' => ?__listOf__PeriodTriggersElement,
    ?'profile' => ?Profile,
    ?'segment_duration_seconds' => ?__integer,
    ?'segment_template_format' => ?SegmentTemplateFormat,
    ?'stream_selection' => ?StreamSelection,
    ?'suggested_presentation_delay_seconds' => ?__integer,
  ) $s = shape()) {
    $this->ad_triggers = $s['ad_triggers'] ?? vec[];
    $this->ads_on_delivery_restrictions = $s['ads_on_delivery_restrictions'] ?? '';
    $this->encryption = $s['encryption'] ?? null;
    $this->manifest_layout = $s['manifest_layout'] ?? '';
    $this->manifest_window_seconds = $s['manifest_window_seconds'] ?? 0;
    $this->min_buffer_time_seconds = $s['min_buffer_time_seconds'] ?? 0;
    $this->min_update_period_seconds = $s['min_update_period_seconds'] ?? 0;
    $this->period_triggers = $s['period_triggers'] ?? vec[];
    $this->profile = $s['profile'] ?? '';
    $this->segment_duration_seconds = $s['segment_duration_seconds'] ?? 0;
    $this->segment_template_format = $s['segment_template_format'] ?? '';
    $this->stream_selection = $s['stream_selection'] ?? null;
    $this->suggested_presentation_delay_seconds = $s['suggested_presentation_delay_seconds'] ?? 0;
  }
}

class DeleteChannelRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteChannelResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteOriginEndpointRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteOriginEndpointResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeChannelRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DescribeChannelResponse {
  public ?__string $arn;
  public ?__string $description;
  public ?HlsIngest $hls_ingest;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'description' => ?__string,
    ?'hls_ingest' => ?HlsIngest,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->hls_ingest = $s['hls_ingest'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DescribeHarvestJobRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DescribeHarvestJobResponse {
  public ?__string $arn;
  public ?__string $channel_id;
  public ?__string $created_at;
  public ?__string $end_time;
  public ?__string $id;
  public ?__string $origin_endpoint_id;
  public ?S3Destination $s_3_destination;
  public ?__string $start_time;
  public ?Status $status;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'channel_id' => ?__string,
    ?'created_at' => ?__string,
    ?'end_time' => ?__string,
    ?'id' => ?__string,
    ?'origin_endpoint_id' => ?__string,
    ?'s_3_destination' => ?S3Destination,
    ?'start_time' => ?__string,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->channel_id = $s['channel_id'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->end_time = $s['end_time'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->origin_endpoint_id = $s['origin_endpoint_id'] ?? '';
    $this->s_3_destination = $s['s_3_destination'] ?? null;
    $this->start_time = $s['start_time'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DescribeOriginEndpointRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DescribeOriginEndpointResponse {
  public ?__string $arn;
  public ?Authorization $authorization;
  public ?__string $channel_id;
  public ?CmafPackage $cmaf_package;
  public ?DashPackage $dash_package;
  public ?__string $description;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?__string $manifest_name;
  public ?MssPackage $mss_package;
  public ?Origination $origination;
  public ?__integer $startover_window_seconds;
  public ?Tags $tags;
  public ?__integer $time_delay_seconds;
  public ?__string $url;
  public ?__listOf__string $whitelist;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'authorization' => ?Authorization,
    ?'channel_id' => ?__string,
    ?'cmaf_package' => ?CmafPackage,
    ?'dash_package' => ?DashPackage,
    ?'description' => ?__string,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'manifest_name' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'origination' => ?Origination,
    ?'startover_window_seconds' => ?__integer,
    ?'tags' => ?Tags,
    ?'time_delay_seconds' => ?__integer,
    ?'url' => ?__string,
    ?'whitelist' => ?__listOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->authorization = $s['authorization'] ?? null;
    $this->channel_id = $s['channel_id'] ?? '';
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->origination = $s['origination'] ?? '';
    $this->startover_window_seconds = $s['startover_window_seconds'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
    $this->time_delay_seconds = $s['time_delay_seconds'] ?? 0;
    $this->url = $s['url'] ?? '';
    $this->whitelist = $s['whitelist'] ?? vec[];
  }
}

type EncryptionMethod = string;

class ForbiddenException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class HarvestJob {
  public ?__string $arn;
  public ?__string $channel_id;
  public ?__string $created_at;
  public ?__string $end_time;
  public ?__string $id;
  public ?__string $origin_endpoint_id;
  public ?S3Destination $s_3_destination;
  public ?__string $start_time;
  public ?Status $status;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'channel_id' => ?__string,
    ?'created_at' => ?__string,
    ?'end_time' => ?__string,
    ?'id' => ?__string,
    ?'origin_endpoint_id' => ?__string,
    ?'s_3_destination' => ?S3Destination,
    ?'start_time' => ?__string,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->channel_id = $s['channel_id'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->end_time = $s['end_time'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->origin_endpoint_id = $s['origin_endpoint_id'] ?? '';
    $this->s_3_destination = $s['s_3_destination'] ?? null;
    $this->start_time = $s['start_time'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class HarvestJobCreateParameters {
  public ?__string $end_time;
  public ?__string $id;
  public ?__string $origin_endpoint_id;
  public ?S3Destination $s_3_destination;
  public ?__string $start_time;

  public function __construct(shape(
    ?'end_time' => ?__string,
    ?'id' => ?__string,
    ?'origin_endpoint_id' => ?__string,
    ?'s_3_destination' => ?S3Destination,
    ?'start_time' => ?__string,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->origin_endpoint_id = $s['origin_endpoint_id'] ?? '';
    $this->s_3_destination = $s['s_3_destination'] ?? null;
    $this->start_time = $s['start_time'] ?? '';
  }
}

class HarvestJobList {
  public ?__listOfHarvestJob $harvest_jobs;
  public ?__string $next_token;

  public function __construct(shape(
    ?'harvest_jobs' => ?__listOfHarvestJob,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->harvest_jobs = $s['harvest_jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class HlsEncryption {
  public ?__string $constant_initialization_vector;
  public ?EncryptionMethod $encryption_method;
  public ?__integer $key_rotation_interval_seconds;
  public ?__boolean $repeat_ext_x_key;
  public ?SpekeKeyProvider $speke_key_provider;

  public function __construct(shape(
    ?'constant_initialization_vector' => ?__string,
    ?'encryption_method' => ?EncryptionMethod,
    ?'key_rotation_interval_seconds' => ?__integer,
    ?'repeat_ext_x_key' => ?__boolean,
    ?'speke_key_provider' => ?SpekeKeyProvider,
  ) $s = shape()) {
    $this->constant_initialization_vector = $s['constant_initialization_vector'] ?? '';
    $this->encryption_method = $s['encryption_method'] ?? '';
    $this->key_rotation_interval_seconds = $s['key_rotation_interval_seconds'] ?? 0;
    $this->repeat_ext_x_key = $s['repeat_ext_x_key'] ?? false;
    $this->speke_key_provider = $s['speke_key_provider'] ?? null;
  }
}

class HlsIngest {
  public ?__listOfIngestEndpoint $ingest_endpoints;

  public function __construct(shape(
    ?'ingest_endpoints' => ?__listOfIngestEndpoint,
  ) $s = shape()) {
    $this->ingest_endpoints = $s['ingest_endpoints'] ?? vec[];
  }
}

class HlsManifest {
  public ?AdMarkers $ad_markers;
  public ?__string $id;
  public ?__boolean $include_iframe_only_stream;
  public ?__string $manifest_name;
  public ?PlaylistType $playlist_type;
  public ?__integer $playlist_window_seconds;
  public ?__integer $program_date_time_interval_seconds;
  public ?__string $url;

  public function __construct(shape(
    ?'ad_markers' => ?AdMarkers,
    ?'id' => ?__string,
    ?'include_iframe_only_stream' => ?__boolean,
    ?'manifest_name' => ?__string,
    ?'playlist_type' => ?PlaylistType,
    ?'playlist_window_seconds' => ?__integer,
    ?'program_date_time_interval_seconds' => ?__integer,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->ad_markers = $s['ad_markers'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->include_iframe_only_stream = $s['include_iframe_only_stream'] ?? false;
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->playlist_type = $s['playlist_type'] ?? '';
    $this->playlist_window_seconds = $s['playlist_window_seconds'] ?? 0;
    $this->program_date_time_interval_seconds = $s['program_date_time_interval_seconds'] ?? 0;
    $this->url = $s['url'] ?? '';
  }
}

class HlsManifestCreateOrUpdateParameters {
  public ?AdMarkers $ad_markers;
  public ?AdTriggers $ad_triggers;
  public ?AdsOnDeliveryRestrictions $ads_on_delivery_restrictions;
  public ?__string $id;
  public ?__boolean $include_iframe_only_stream;
  public ?__string $manifest_name;
  public ?PlaylistType $playlist_type;
  public ?__integer $playlist_window_seconds;
  public ?__integer $program_date_time_interval_seconds;

  public function __construct(shape(
    ?'ad_markers' => ?AdMarkers,
    ?'ad_triggers' => ?AdTriggers,
    ?'ads_on_delivery_restrictions' => ?AdsOnDeliveryRestrictions,
    ?'id' => ?__string,
    ?'include_iframe_only_stream' => ?__boolean,
    ?'manifest_name' => ?__string,
    ?'playlist_type' => ?PlaylistType,
    ?'playlist_window_seconds' => ?__integer,
    ?'program_date_time_interval_seconds' => ?__integer,
  ) $s = shape()) {
    $this->ad_markers = $s['ad_markers'] ?? '';
    $this->ad_triggers = $s['ad_triggers'] ?? vec[];
    $this->ads_on_delivery_restrictions = $s['ads_on_delivery_restrictions'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->include_iframe_only_stream = $s['include_iframe_only_stream'] ?? false;
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->playlist_type = $s['playlist_type'] ?? '';
    $this->playlist_window_seconds = $s['playlist_window_seconds'] ?? 0;
    $this->program_date_time_interval_seconds = $s['program_date_time_interval_seconds'] ?? 0;
  }
}

class HlsPackage {
  public ?AdMarkers $ad_markers;
  public ?AdTriggers $ad_triggers;
  public ?AdsOnDeliveryRestrictions $ads_on_delivery_restrictions;
  public ?HlsEncryption $encryption;
  public ?__boolean $include_iframe_only_stream;
  public ?PlaylistType $playlist_type;
  public ?__integer $playlist_window_seconds;
  public ?__integer $program_date_time_interval_seconds;
  public ?__integer $segment_duration_seconds;
  public ?StreamSelection $stream_selection;
  public ?__boolean $use_audio_rendition_group;

  public function __construct(shape(
    ?'ad_markers' => ?AdMarkers,
    ?'ad_triggers' => ?AdTriggers,
    ?'ads_on_delivery_restrictions' => ?AdsOnDeliveryRestrictions,
    ?'encryption' => ?HlsEncryption,
    ?'include_iframe_only_stream' => ?__boolean,
    ?'playlist_type' => ?PlaylistType,
    ?'playlist_window_seconds' => ?__integer,
    ?'program_date_time_interval_seconds' => ?__integer,
    ?'segment_duration_seconds' => ?__integer,
    ?'stream_selection' => ?StreamSelection,
    ?'use_audio_rendition_group' => ?__boolean,
  ) $s = shape()) {
    $this->ad_markers = $s['ad_markers'] ?? '';
    $this->ad_triggers = $s['ad_triggers'] ?? vec[];
    $this->ads_on_delivery_restrictions = $s['ads_on_delivery_restrictions'] ?? '';
    $this->encryption = $s['encryption'] ?? null;
    $this->include_iframe_only_stream = $s['include_iframe_only_stream'] ?? false;
    $this->playlist_type = $s['playlist_type'] ?? '';
    $this->playlist_window_seconds = $s['playlist_window_seconds'] ?? 0;
    $this->program_date_time_interval_seconds = $s['program_date_time_interval_seconds'] ?? 0;
    $this->segment_duration_seconds = $s['segment_duration_seconds'] ?? 0;
    $this->stream_selection = $s['stream_selection'] ?? null;
    $this->use_audio_rendition_group = $s['use_audio_rendition_group'] ?? false;
  }
}

class IngestEndpoint {
  public ?__string $id;
  public ?__string $password;
  public ?__string $url;
  public ?__string $username;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'password' => ?__string,
    ?'url' => ?__string,
    ?'username' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->url = $s['url'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class InternalServerErrorException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListChannelsRequest {
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListChannelsResponse {
  public ?__listOfChannel $channels;
  public ?__string $next_token;

  public function __construct(shape(
    ?'channels' => ?__listOfChannel,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->channels = $s['channels'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHarvestJobsRequest {
  public ?__string $include_channel_id;
  public ?__string $include_status;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'include_channel_id' => ?__string,
    ?'include_status' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->include_channel_id = $s['include_channel_id'] ?? '';
    $this->include_status = $s['include_status'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHarvestJobsResponse {
  public ?__listOfHarvestJob $harvest_jobs;
  public ?__string $next_token;

  public function __construct(shape(
    ?'harvest_jobs' => ?__listOfHarvestJob,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->harvest_jobs = $s['harvest_jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOriginEndpointsRequest {
  public ?__string $channel_id;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'channel_id' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->channel_id = $s['channel_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOriginEndpointsResponse {
  public ?__string $next_token;
  public ?__listOfOriginEndpoint $origin_endpoints;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'origin_endpoints' => ?__listOfOriginEndpoint,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->origin_endpoints = $s['origin_endpoints'] ?? vec[];
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

type ManifestLayout = string;

type MaxResults = int;

class MssEncryption {
  public ?SpekeKeyProvider $speke_key_provider;

  public function __construct(shape(
    ?'speke_key_provider' => ?SpekeKeyProvider,
  ) $s = shape()) {
    $this->speke_key_provider = $s['speke_key_provider'] ?? null;
  }
}

class MssPackage {
  public ?MssEncryption $encryption;
  public ?__integer $manifest_window_seconds;
  public ?__integer $segment_duration_seconds;
  public ?StreamSelection $stream_selection;

  public function __construct(shape(
    ?'encryption' => ?MssEncryption,
    ?'manifest_window_seconds' => ?__integer,
    ?'segment_duration_seconds' => ?__integer,
    ?'stream_selection' => ?StreamSelection,
  ) $s = shape()) {
    $this->encryption = $s['encryption'] ?? null;
    $this->manifest_window_seconds = $s['manifest_window_seconds'] ?? 0;
    $this->segment_duration_seconds = $s['segment_duration_seconds'] ?? 0;
    $this->stream_selection = $s['stream_selection'] ?? null;
  }
}

class NotFoundException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OriginEndpoint {
  public ?__string $arn;
  public ?Authorization $authorization;
  public ?__string $channel_id;
  public ?CmafPackage $cmaf_package;
  public ?DashPackage $dash_package;
  public ?__string $description;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?__string $manifest_name;
  public ?MssPackage $mss_package;
  public ?Origination $origination;
  public ?__integer $startover_window_seconds;
  public ?Tags $tags;
  public ?__integer $time_delay_seconds;
  public ?__string $url;
  public ?__listOf__string $whitelist;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'authorization' => ?Authorization,
    ?'channel_id' => ?__string,
    ?'cmaf_package' => ?CmafPackage,
    ?'dash_package' => ?DashPackage,
    ?'description' => ?__string,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'manifest_name' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'origination' => ?Origination,
    ?'startover_window_seconds' => ?__integer,
    ?'tags' => ?Tags,
    ?'time_delay_seconds' => ?__integer,
    ?'url' => ?__string,
    ?'whitelist' => ?__listOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->authorization = $s['authorization'] ?? null;
    $this->channel_id = $s['channel_id'] ?? '';
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->origination = $s['origination'] ?? '';
    $this->startover_window_seconds = $s['startover_window_seconds'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
    $this->time_delay_seconds = $s['time_delay_seconds'] ?? 0;
    $this->url = $s['url'] ?? '';
    $this->whitelist = $s['whitelist'] ?? vec[];
  }
}

class OriginEndpointCreateParameters {
  public ?Authorization $authorization;
  public ?__string $channel_id;
  public ?CmafPackageCreateOrUpdateParameters $cmaf_package;
  public ?DashPackage $dash_package;
  public ?__string $description;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?__string $manifest_name;
  public ?MssPackage $mss_package;
  public ?Origination $origination;
  public ?__integer $startover_window_seconds;
  public ?Tags $tags;
  public ?__integer $time_delay_seconds;
  public ?__listOf__string $whitelist;

  public function __construct(shape(
    ?'authorization' => ?Authorization,
    ?'channel_id' => ?__string,
    ?'cmaf_package' => ?CmafPackageCreateOrUpdateParameters,
    ?'dash_package' => ?DashPackage,
    ?'description' => ?__string,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'manifest_name' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'origination' => ?Origination,
    ?'startover_window_seconds' => ?__integer,
    ?'tags' => ?Tags,
    ?'time_delay_seconds' => ?__integer,
    ?'whitelist' => ?__listOf__string,
  ) $s = shape()) {
    $this->authorization = $s['authorization'] ?? null;
    $this->channel_id = $s['channel_id'] ?? '';
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->origination = $s['origination'] ?? '';
    $this->startover_window_seconds = $s['startover_window_seconds'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
    $this->time_delay_seconds = $s['time_delay_seconds'] ?? 0;
    $this->whitelist = $s['whitelist'] ?? vec[];
  }
}

class OriginEndpointList {
  public ?__string $next_token;
  public ?__listOfOriginEndpoint $origin_endpoints;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'origin_endpoints' => ?__listOfOriginEndpoint,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->origin_endpoints = $s['origin_endpoints'] ?? vec[];
  }
}

class OriginEndpointUpdateParameters {
  public ?Authorization $authorization;
  public ?CmafPackageCreateOrUpdateParameters $cmaf_package;
  public ?DashPackage $dash_package;
  public ?__string $description;
  public ?HlsPackage $hls_package;
  public ?__string $manifest_name;
  public ?MssPackage $mss_package;
  public ?Origination $origination;
  public ?__integer $startover_window_seconds;
  public ?__integer $time_delay_seconds;
  public ?__listOf__string $whitelist;

  public function __construct(shape(
    ?'authorization' => ?Authorization,
    ?'cmaf_package' => ?CmafPackageCreateOrUpdateParameters,
    ?'dash_package' => ?DashPackage,
    ?'description' => ?__string,
    ?'hls_package' => ?HlsPackage,
    ?'manifest_name' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'origination' => ?Origination,
    ?'startover_window_seconds' => ?__integer,
    ?'time_delay_seconds' => ?__integer,
    ?'whitelist' => ?__listOf__string,
  ) $s = shape()) {
    $this->authorization = $s['authorization'] ?? null;
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->hls_package = $s['hls_package'] ?? null;
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->origination = $s['origination'] ?? '';
    $this->startover_window_seconds = $s['startover_window_seconds'] ?? 0;
    $this->time_delay_seconds = $s['time_delay_seconds'] ?? 0;
    $this->whitelist = $s['whitelist'] ?? vec[];
  }
}

type Origination = string;

type PlaylistType = string;

type Profile = string;

class RotateChannelCredentialsRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class RotateChannelCredentialsResponse {
  public ?__string $arn;
  public ?__string $description;
  public ?HlsIngest $hls_ingest;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'description' => ?__string,
    ?'hls_ingest' => ?HlsIngest,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->hls_ingest = $s['hls_ingest'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class RotateIngestEndpointCredentialsRequest {
  public ?__string $id;
  public ?__string $ingest_endpoint_id;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'ingest_endpoint_id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->ingest_endpoint_id = $s['ingest_endpoint_id'] ?? '';
  }
}

class RotateIngestEndpointCredentialsResponse {
  public ?__string $arn;
  public ?__string $description;
  public ?HlsIngest $hls_ingest;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'description' => ?__string,
    ?'hls_ingest' => ?HlsIngest,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->hls_ingest = $s['hls_ingest'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class S3Destination {
  public ?__string $bucket_name;
  public ?__string $manifest_key;
  public ?__string $role_arn;

  public function __construct(shape(
    ?'bucket_name' => ?__string,
    ?'manifest_key' => ?__string,
    ?'role_arn' => ?__string,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->manifest_key = $s['manifest_key'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type SegmentTemplateFormat = string;

class ServiceUnavailableException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SpekeKeyProvider {
  public ?__string $certificate_arn;
  public ?__string $resource_id;
  public ?__string $role_arn;
  public ?__listOf__string $system_ids;
  public ?__string $url;

  public function __construct(shape(
    ?'certificate_arn' => ?__string,
    ?'resource_id' => ?__string,
    ?'role_arn' => ?__string,
    ?'system_ids' => ?__listOf__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->system_ids = $s['system_ids'] ?? vec[];
    $this->url = $s['url'] ?? '';
  }
}

type Status = string;

type StreamOrder = string;

class StreamSelection {
  public ?__integer $max_video_bits_per_second;
  public ?__integer $min_video_bits_per_second;
  public ?StreamOrder $stream_order;

  public function __construct(shape(
    ?'max_video_bits_per_second' => ?__integer,
    ?'min_video_bits_per_second' => ?__integer,
    ?'stream_order' => ?StreamOrder,
  ) $s = shape()) {
    $this->max_video_bits_per_second = $s['max_video_bits_per_second'] ?? 0;
    $this->min_video_bits_per_second = $s['min_video_bits_per_second'] ?? 0;
    $this->stream_order = $s['stream_order'] ?? '';
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

type Tags = dict<__string, __string>;

class TagsModel {
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TooManyRequestsException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnprocessableEntityException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
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

class UpdateChannelRequest {
  public ?__string $description;
  public ?__string $id;

  public function __construct(shape(
    ?'description' => ?__string,
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class UpdateChannelResponse {
  public ?__string $arn;
  public ?__string $description;
  public ?HlsIngest $hls_ingest;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'description' => ?__string,
    ?'hls_ingest' => ?HlsIngest,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->hls_ingest = $s['hls_ingest'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class UpdateOriginEndpointRequest {
  public ?Authorization $authorization;
  public ?CmafPackageCreateOrUpdateParameters $cmaf_package;
  public ?DashPackage $dash_package;
  public ?__string $description;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?__string $manifest_name;
  public ?MssPackage $mss_package;
  public ?Origination $origination;
  public ?__integer $startover_window_seconds;
  public ?__integer $time_delay_seconds;
  public ?__listOf__string $whitelist;

  public function __construct(shape(
    ?'authorization' => ?Authorization,
    ?'cmaf_package' => ?CmafPackageCreateOrUpdateParameters,
    ?'dash_package' => ?DashPackage,
    ?'description' => ?__string,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'manifest_name' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'origination' => ?Origination,
    ?'startover_window_seconds' => ?__integer,
    ?'time_delay_seconds' => ?__integer,
    ?'whitelist' => ?__listOf__string,
  ) $s = shape()) {
    $this->authorization = $s['authorization'] ?? null;
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->origination = $s['origination'] ?? '';
    $this->startover_window_seconds = $s['startover_window_seconds'] ?? 0;
    $this->time_delay_seconds = $s['time_delay_seconds'] ?? 0;
    $this->whitelist = $s['whitelist'] ?? vec[];
  }
}

class UpdateOriginEndpointResponse {
  public ?__string $arn;
  public ?Authorization $authorization;
  public ?__string $channel_id;
  public ?CmafPackage $cmaf_package;
  public ?DashPackage $dash_package;
  public ?__string $description;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?__string $manifest_name;
  public ?MssPackage $mss_package;
  public ?Origination $origination;
  public ?__integer $startover_window_seconds;
  public ?Tags $tags;
  public ?__integer $time_delay_seconds;
  public ?__string $url;
  public ?__listOf__string $whitelist;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'authorization' => ?Authorization,
    ?'channel_id' => ?__string,
    ?'cmaf_package' => ?CmafPackage,
    ?'dash_package' => ?DashPackage,
    ?'description' => ?__string,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'manifest_name' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'origination' => ?Origination,
    ?'startover_window_seconds' => ?__integer,
    ?'tags' => ?Tags,
    ?'time_delay_seconds' => ?__integer,
    ?'url' => ?__string,
    ?'whitelist' => ?__listOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->authorization = $s['authorization'] ?? null;
    $this->channel_id = $s['channel_id'] ?? '';
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->origination = $s['origination'] ?? '';
    $this->startover_window_seconds = $s['startover_window_seconds'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
    $this->time_delay_seconds = $s['time_delay_seconds'] ?? 0;
    $this->url = $s['url'] ?? '';
    $this->whitelist = $s['whitelist'] ?? vec[];
  }
}

type __AdTriggersElement = string;

type __PeriodTriggersElement = string;

type __boolean = bool;

type __double = float;

type __integer = int;

type __listOfChannel = vec<Channel>;

type __listOfHarvestJob = vec<HarvestJob>;

type __listOfHlsManifest = vec<HlsManifest>;

type __listOfHlsManifestCreateOrUpdateParameters = vec<HlsManifestCreateOrUpdateParameters>;

type __listOfIngestEndpoint = vec<IngestEndpoint>;

type __listOfOriginEndpoint = vec<OriginEndpoint>;

type __listOf__PeriodTriggersElement = vec<__PeriodTriggersElement>;

type __listOf__string = vec<__string>;

type __long = int;

type __mapOf__string = dict<__string, __string>;

type __string = string;

