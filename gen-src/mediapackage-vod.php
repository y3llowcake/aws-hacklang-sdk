<?hh // strict
namespace slack\aws\mediapackage-vod;

interface MediaPackageVod {
  public function CreateAsset(CreateAssetRequest $in): Awaitable<\Errors\Result<CreateAssetResponse>>;
  public function CreatePackagingConfiguration(CreatePackagingConfigurationRequest $in): Awaitable<\Errors\Result<CreatePackagingConfigurationResponse>>;
  public function CreatePackagingGroup(CreatePackagingGroupRequest $in): Awaitable<\Errors\Result<CreatePackagingGroupResponse>>;
  public function DeleteAsset(DeleteAssetRequest $in): Awaitable<\Errors\Result<DeleteAssetResponse>>;
  public function DeletePackagingConfiguration(DeletePackagingConfigurationRequest $in): Awaitable<\Errors\Result<DeletePackagingConfigurationResponse>>;
  public function DeletePackagingGroup(DeletePackagingGroupRequest $in): Awaitable<\Errors\Result<DeletePackagingGroupResponse>>;
  public function DescribeAsset(DescribeAssetRequest $in): Awaitable<\Errors\Result<DescribeAssetResponse>>;
  public function DescribePackagingConfiguration(DescribePackagingConfigurationRequest $in): Awaitable<\Errors\Result<DescribePackagingConfigurationResponse>>;
  public function DescribePackagingGroup(DescribePackagingGroupRequest $in): Awaitable<\Errors\Result<DescribePackagingGroupResponse>>;
  public function ListAssets(ListAssetsRequest $in): Awaitable<\Errors\Result<ListAssetsResponse>>;
  public function ListPackagingConfigurations(ListPackagingConfigurationsRequest $in): Awaitable<\Errors\Result<ListPackagingConfigurationsResponse>>;
  public function ListPackagingGroups(ListPackagingGroupsRequest $in): Awaitable<\Errors\Result<ListPackagingGroupsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
}

type AdMarkers = string;

class Asset {
  public ?__string $arn;
  public ?__string $created_at;
  public ?__listOfEgressEndpoint $egress_endpoints;
  public ?__string $id;
  public ?__string $packaging_group_id;
  public ?__string $resource_id;
  public ?__string $source_arn;
  public ?__string $source_role_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created_at' => ?__string,
    ?'egress_endpoints' => ?__listOfEgressEndpoint,
    ?'id' => ?__string,
    ?'packaging_group_id' => ?__string,
    ?'resource_id' => ?__string,
    ?'source_arn' => ?__string,
    ?'source_role_arn' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->egress_endpoints = $s['egress_endpoints'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
    $this->source_role_arn = $s['source_role_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class AssetCreateParameters {
  public ?__string $id;
  public ?__string $packaging_group_id;
  public ?__string $resource_id;
  public ?__string $source_arn;
  public ?__string $source_role_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'packaging_group_id' => ?__string,
    ?'resource_id' => ?__string,
    ?'source_arn' => ?__string,
    ?'source_role_arn' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
    $this->source_role_arn = $s['source_role_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class AssetList {
  public ?__listOfAssetShallow $assets;
  public ?__string $next_token;

  public function __construct(shape(
    ?'assets' => ?__listOfAssetShallow,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->assets = $s['assets'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class AssetShallow {
  public ?__string $arn;
  public ?__string $created_at;
  public ?__string $id;
  public ?__string $packaging_group_id;
  public ?__string $resource_id;
  public ?__string $source_arn;
  public ?__string $source_role_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created_at' => ?__string,
    ?'id' => ?__string,
    ?'packaging_group_id' => ?__string,
    ?'resource_id' => ?__string,
    ?'source_arn' => ?__string,
    ?'source_role_arn' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
    $this->source_role_arn = $s['source_role_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CmafEncryption {
  public ?SpekeKeyProvider $speke_key_provider;

  public function __construct(shape(
    ?'speke_key_provider' => ?SpekeKeyProvider,
  ) $s = shape()) {
    $this->speke_key_provider = $s['speke_key_provider'] ?? null;
  }
}

class CmafPackage {
  public ?CmafEncryption $encryption;
  public ?__listOfHlsManifest $hls_manifests;
  public ?__integer $segment_duration_seconds;

  public function __construct(shape(
    ?'encryption' => ?CmafEncryption,
    ?'hls_manifests' => ?__listOfHlsManifest,
    ?'segment_duration_seconds' => ?__integer,
  ) $s = shape()) {
    $this->encryption = $s['encryption'] ?? null;
    $this->hls_manifests = $s['hls_manifests'] ?? vec[];
    $this->segment_duration_seconds = $s['segment_duration_seconds'] ?? 0;
  }
}

class CreateAssetRequest {
  public ?__string $id;
  public ?__string $packaging_group_id;
  public ?__string $resource_id;
  public ?__string $source_arn;
  public ?__string $source_role_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'packaging_group_id' => ?__string,
    ?'resource_id' => ?__string,
    ?'source_arn' => ?__string,
    ?'source_role_arn' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
    $this->source_role_arn = $s['source_role_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateAssetResponse {
  public ?__string $arn;
  public ?__string $created_at;
  public ?__listOfEgressEndpoint $egress_endpoints;
  public ?__string $id;
  public ?__string $packaging_group_id;
  public ?__string $resource_id;
  public ?__string $source_arn;
  public ?__string $source_role_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created_at' => ?__string,
    ?'egress_endpoints' => ?__listOfEgressEndpoint,
    ?'id' => ?__string,
    ?'packaging_group_id' => ?__string,
    ?'resource_id' => ?__string,
    ?'source_arn' => ?__string,
    ?'source_role_arn' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->egress_endpoints = $s['egress_endpoints'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
    $this->source_role_arn = $s['source_role_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreatePackagingConfigurationRequest {
  public ?CmafPackage $cmaf_package;
  public ?DashPackage $dash_package;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?MssPackage $mss_package;
  public ?__string $packaging_group_id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'cmaf_package' => ?CmafPackage,
    ?'dash_package' => ?DashPackage,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'packaging_group_id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreatePackagingConfigurationResponse {
  public ?__string $arn;
  public ?CmafPackage $cmaf_package;
  public ?DashPackage $dash_package;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?MssPackage $mss_package;
  public ?__string $packaging_group_id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'cmaf_package' => ?CmafPackage,
    ?'dash_package' => ?DashPackage,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'packaging_group_id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreatePackagingGroupRequest {
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreatePackagingGroupResponse {
  public ?__string $arn;
  public ?__string $domain_name;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'domain_name' => ?__string,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DashEncryption {
  public ?SpekeKeyProvider $speke_key_provider;

  public function __construct(shape(
    ?'speke_key_provider' => ?SpekeKeyProvider,
  ) $s = shape()) {
    $this->speke_key_provider = $s['speke_key_provider'] ?? null;
  }
}

class DashManifest {
  public ?ManifestLayout $manifest_layout;
  public ?__string $manifest_name;
  public ?__integer $min_buffer_time_seconds;
  public ?Profile $profile;
  public ?StreamSelection $stream_selection;

  public function __construct(shape(
    ?'manifest_layout' => ?ManifestLayout,
    ?'manifest_name' => ?__string,
    ?'min_buffer_time_seconds' => ?__integer,
    ?'profile' => ?Profile,
    ?'stream_selection' => ?StreamSelection,
  ) $s = shape()) {
    $this->manifest_layout = $s['manifest_layout'] ?? '';
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->min_buffer_time_seconds = $s['min_buffer_time_seconds'] ?? 0;
    $this->profile = $s['profile'] ?? '';
    $this->stream_selection = $s['stream_selection'] ?? null;
  }
}

class DashPackage {
  public ?__listOfDashManifest $dash_manifests;
  public ?DashEncryption $encryption;
  public ?__listOf__PeriodTriggersElement $period_triggers;
  public ?__integer $segment_duration_seconds;
  public ?SegmentTemplateFormat $segment_template_format;

  public function __construct(shape(
    ?'dash_manifests' => ?__listOfDashManifest,
    ?'encryption' => ?DashEncryption,
    ?'period_triggers' => ?__listOf__PeriodTriggersElement,
    ?'segment_duration_seconds' => ?__integer,
    ?'segment_template_format' => ?SegmentTemplateFormat,
  ) $s = shape()) {
    $this->dash_manifests = $s['dash_manifests'] ?? vec[];
    $this->encryption = $s['encryption'] ?? null;
    $this->period_triggers = $s['period_triggers'] ?? vec[];
    $this->segment_duration_seconds = $s['segment_duration_seconds'] ?? 0;
    $this->segment_template_format = $s['segment_template_format'] ?? '';
  }
}

class DeleteAssetRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteAssetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePackagingConfigurationRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeletePackagingConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePackagingGroupRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeletePackagingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAssetRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DescribeAssetResponse {
  public ?__string $arn;
  public ?__string $created_at;
  public ?__listOfEgressEndpoint $egress_endpoints;
  public ?__string $id;
  public ?__string $packaging_group_id;
  public ?__string $resource_id;
  public ?__string $source_arn;
  public ?__string $source_role_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created_at' => ?__string,
    ?'egress_endpoints' => ?__listOfEgressEndpoint,
    ?'id' => ?__string,
    ?'packaging_group_id' => ?__string,
    ?'resource_id' => ?__string,
    ?'source_arn' => ?__string,
    ?'source_role_arn' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->egress_endpoints = $s['egress_endpoints'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
    $this->source_role_arn = $s['source_role_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DescribePackagingConfigurationRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DescribePackagingConfigurationResponse {
  public ?__string $arn;
  public ?CmafPackage $cmaf_package;
  public ?DashPackage $dash_package;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?MssPackage $mss_package;
  public ?__string $packaging_group_id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'cmaf_package' => ?CmafPackage,
    ?'dash_package' => ?DashPackage,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'packaging_group_id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DescribePackagingGroupRequest {
  public ?__string $id;

  public function __construct(shape(
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DescribePackagingGroupResponse {
  public ?__string $arn;
  public ?__string $domain_name;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'domain_name' => ?__string,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class EgressEndpoint {
  public ?__string $packaging_configuration_id;
  public ?__string $url;

  public function __construct(shape(
    ?'packaging_configuration_id' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->packaging_configuration_id = $s['packaging_configuration_id'] ?? '';
    $this->url = $s['url'] ?? '';
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

class HlsEncryption {
  public ?__string $constant_initialization_vector;
  public ?EncryptionMethod $encryption_method;
  public ?SpekeKeyProvider $speke_key_provider;

  public function __construct(shape(
    ?'constant_initialization_vector' => ?__string,
    ?'encryption_method' => ?EncryptionMethod,
    ?'speke_key_provider' => ?SpekeKeyProvider,
  ) $s = shape()) {
    $this->constant_initialization_vector = $s['constant_initialization_vector'] ?? '';
    $this->encryption_method = $s['encryption_method'] ?? '';
    $this->speke_key_provider = $s['speke_key_provider'] ?? null;
  }
}

class HlsManifest {
  public ?AdMarkers $ad_markers;
  public ?__boolean $include_iframe_only_stream;
  public ?__string $manifest_name;
  public ?__integer $program_date_time_interval_seconds;
  public ?__boolean $repeat_ext_x_key;
  public ?StreamSelection $stream_selection;

  public function __construct(shape(
    ?'ad_markers' => ?AdMarkers,
    ?'include_iframe_only_stream' => ?__boolean,
    ?'manifest_name' => ?__string,
    ?'program_date_time_interval_seconds' => ?__integer,
    ?'repeat_ext_x_key' => ?__boolean,
    ?'stream_selection' => ?StreamSelection,
  ) $s = shape()) {
    $this->ad_markers = $s['ad_markers'] ?? '';
    $this->include_iframe_only_stream = $s['include_iframe_only_stream'] ?? false;
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->program_date_time_interval_seconds = $s['program_date_time_interval_seconds'] ?? 0;
    $this->repeat_ext_x_key = $s['repeat_ext_x_key'] ?? false;
    $this->stream_selection = $s['stream_selection'] ?? null;
  }
}

class HlsPackage {
  public ?HlsEncryption $encryption;
  public ?__listOfHlsManifest $hls_manifests;
  public ?__integer $segment_duration_seconds;
  public ?__boolean $use_audio_rendition_group;

  public function __construct(shape(
    ?'encryption' => ?HlsEncryption,
    ?'hls_manifests' => ?__listOfHlsManifest,
    ?'segment_duration_seconds' => ?__integer,
    ?'use_audio_rendition_group' => ?__boolean,
  ) $s = shape()) {
    $this->encryption = $s['encryption'] ?? null;
    $this->hls_manifests = $s['hls_manifests'] ?? vec[];
    $this->segment_duration_seconds = $s['segment_duration_seconds'] ?? 0;
    $this->use_audio_rendition_group = $s['use_audio_rendition_group'] ?? false;
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

class ListAssetsRequest {
  public ?MaxResults $max_results;
  public ?__string $next_token;
  public ?__string $packaging_group_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
    ?'packaging_group_id' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
  }
}

class ListAssetsResponse {
  public ?__listOfAssetShallow $assets;
  public ?__string $next_token;

  public function __construct(shape(
    ?'assets' => ?__listOfAssetShallow,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->assets = $s['assets'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPackagingConfigurationsRequest {
  public ?MaxResults $max_results;
  public ?__string $next_token;
  public ?__string $packaging_group_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
    ?'packaging_group_id' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
  }
}

class ListPackagingConfigurationsResponse {
  public ?__string $next_token;
  public ?__listOfPackagingConfiguration $packaging_configurations;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'packaging_configurations' => ?__listOfPackagingConfiguration,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->packaging_configurations = $s['packaging_configurations'] ?? vec[];
  }
}

class ListPackagingGroupsRequest {
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

class ListPackagingGroupsResponse {
  public ?__string $next_token;
  public ?__listOfPackagingGroup $packaging_groups;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'packaging_groups' => ?__listOfPackagingGroup,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->packaging_groups = $s['packaging_groups'] ?? vec[];
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

class MssManifest {
  public ?__string $manifest_name;
  public ?StreamSelection $stream_selection;

  public function __construct(shape(
    ?'manifest_name' => ?__string,
    ?'stream_selection' => ?StreamSelection,
  ) $s = shape()) {
    $this->manifest_name = $s['manifest_name'] ?? '';
    $this->stream_selection = $s['stream_selection'] ?? null;
  }
}

class MssPackage {
  public ?MssEncryption $encryption;
  public ?__listOfMssManifest $mss_manifests;
  public ?__integer $segment_duration_seconds;

  public function __construct(shape(
    ?'encryption' => ?MssEncryption,
    ?'mss_manifests' => ?__listOfMssManifest,
    ?'segment_duration_seconds' => ?__integer,
  ) $s = shape()) {
    $this->encryption = $s['encryption'] ?? null;
    $this->mss_manifests = $s['mss_manifests'] ?? vec[];
    $this->segment_duration_seconds = $s['segment_duration_seconds'] ?? 0;
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

class PackagingConfiguration {
  public ?__string $arn;
  public ?CmafPackage $cmaf_package;
  public ?DashPackage $dash_package;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?MssPackage $mss_package;
  public ?__string $packaging_group_id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'cmaf_package' => ?CmafPackage,
    ?'dash_package' => ?DashPackage,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'packaging_group_id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class PackagingConfigurationCreateParameters {
  public ?CmafPackage $cmaf_package;
  public ?DashPackage $dash_package;
  public ?HlsPackage $hls_package;
  public ?__string $id;
  public ?MssPackage $mss_package;
  public ?__string $packaging_group_id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'cmaf_package' => ?CmafPackage,
    ?'dash_package' => ?DashPackage,
    ?'hls_package' => ?HlsPackage,
    ?'id' => ?__string,
    ?'mss_package' => ?MssPackage,
    ?'packaging_group_id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->cmaf_package = $s['cmaf_package'] ?? null;
    $this->dash_package = $s['dash_package'] ?? null;
    $this->hls_package = $s['hls_package'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->mss_package = $s['mss_package'] ?? null;
    $this->packaging_group_id = $s['packaging_group_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class PackagingConfigurationList {
  public ?__string $next_token;
  public ?__listOfPackagingConfiguration $packaging_configurations;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'packaging_configurations' => ?__listOfPackagingConfiguration,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->packaging_configurations = $s['packaging_configurations'] ?? vec[];
  }
}

class PackagingGroup {
  public ?__string $arn;
  public ?__string $domain_name;
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'domain_name' => ?__string,
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class PackagingGroupCreateParameters {
  public ?__string $id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class PackagingGroupList {
  public ?__string $next_token;
  public ?__listOfPackagingGroup $packaging_groups;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'packaging_groups' => ?__listOfPackagingGroup,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->packaging_groups = $s['packaging_groups'] ?? vec[];
  }
}

type Profile = string;

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
  public ?__string $role_arn;
  public ?__listOf__string $system_ids;
  public ?__string $url;

  public function __construct(shape(
    ?'role_arn' => ?__string,
    ?'system_ids' => ?__listOf__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
    $this->system_ids = $s['system_ids'] ?? vec[];
    $this->url = $s['url'] ?? '';
  }
}

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

type __PeriodTriggersElement = string;

type __boolean = bool;

type __double = float;

type __integer = int;

type __listOfAssetShallow = vec<AssetShallow>;

type __listOfDashManifest = vec<DashManifest>;

type __listOfEgressEndpoint = vec<EgressEndpoint>;

type __listOfHlsManifest = vec<HlsManifest>;

type __listOfMssManifest = vec<MssManifest>;

type __listOfPackagingConfiguration = vec<PackagingConfiguration>;

type __listOfPackagingGroup = vec<PackagingGroup>;

type __listOf__PeriodTriggersElement = vec<__PeriodTriggersElement>;

type __listOf__string = vec<__string>;

type __long = int;

type __mapOf__string = dict<__string, __string>;

type __string = string;

