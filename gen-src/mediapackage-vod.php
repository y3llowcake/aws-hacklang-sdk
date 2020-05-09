<?hh // strict
namespace slack\aws\mediapackage-vod;

interface MediaPackage Vod {
  public function CreateAsset(CreateAssetRequest) Awaitable<Errors\Result<CreateAssetResponse>>;
  public function CreatePackagingConfiguration(CreatePackagingConfigurationRequest) Awaitable<Errors\Result<CreatePackagingConfigurationResponse>>;
  public function CreatePackagingGroup(CreatePackagingGroupRequest) Awaitable<Errors\Result<CreatePackagingGroupResponse>>;
  public function DeleteAsset(DeleteAssetRequest) Awaitable<Errors\Result<DeleteAssetResponse>>;
  public function DeletePackagingConfiguration(DeletePackagingConfigurationRequest) Awaitable<Errors\Result<DeletePackagingConfigurationResponse>>;
  public function DeletePackagingGroup(DeletePackagingGroupRequest) Awaitable<Errors\Result<DeletePackagingGroupResponse>>;
  public function DescribeAsset(DescribeAssetRequest) Awaitable<Errors\Result<DescribeAssetResponse>>;
  public function DescribePackagingConfiguration(DescribePackagingConfigurationRequest) Awaitable<Errors\Result<DescribePackagingConfigurationResponse>>;
  public function DescribePackagingGroup(DescribePackagingGroupRequest) Awaitable<Errors\Result<DescribePackagingGroupResponse>>;
  public function ListAssets(ListAssetsRequest) Awaitable<Errors\Result<ListAssetsResponse>>;
  public function ListPackagingConfigurations(ListPackagingConfigurationsRequest) Awaitable<Errors\Result<ListPackagingConfigurationsResponse>>;
  public function ListPackagingGroups(ListPackagingGroupsRequest) Awaitable<Errors\Result<ListPackagingGroupsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
}

class AdMarkers {
}

class Asset {
  public __string $arn;
  public __string $created_at;
  public __listOfEgressEndpoint $egress_endpoints;
  public __string $id;
  public __string $packaging_group_id;
  public __string $resource_id;
  public __string $source_arn;
  public __string $source_role_arn;
  public Tags $tags;
}

class AssetCreateParameters {
  public __string $id;
  public __string $packaging_group_id;
  public __string $resource_id;
  public __string $source_arn;
  public __string $source_role_arn;
  public Tags $tags;
}

class AssetList {
  public __listOfAssetShallow $assets;
  public __string $next_token;
}

class AssetShallow {
  public __string $arn;
  public __string $created_at;
  public __string $id;
  public __string $packaging_group_id;
  public __string $resource_id;
  public __string $source_arn;
  public __string $source_role_arn;
  public Tags $tags;
}

class CmafEncryption {
  public SpekeKeyProvider $speke_key_provider;
}

class CmafPackage {
  public CmafEncryption $encryption;
  public __listOfHlsManifest $hls_manifests;
  public __integer $segment_duration_seconds;
}

class CreateAssetRequest {
  public __string $id;
  public __string $packaging_group_id;
  public __string $resource_id;
  public __string $source_arn;
  public __string $source_role_arn;
  public Tags $tags;
}

class CreateAssetResponse {
  public __string $arn;
  public __string $created_at;
  public __listOfEgressEndpoint $egress_endpoints;
  public __string $id;
  public __string $packaging_group_id;
  public __string $resource_id;
  public __string $source_arn;
  public __string $source_role_arn;
  public Tags $tags;
}

class CreatePackagingConfigurationRequest {
  public CmafPackage $cmaf_package;
  public DashPackage $dash_package;
  public HlsPackage $hls_package;
  public __string $id;
  public MssPackage $mss_package;
  public __string $packaging_group_id;
  public Tags $tags;
}

class CreatePackagingConfigurationResponse {
  public __string $arn;
  public CmafPackage $cmaf_package;
  public DashPackage $dash_package;
  public HlsPackage $hls_package;
  public __string $id;
  public MssPackage $mss_package;
  public __string $packaging_group_id;
  public Tags $tags;
}

class CreatePackagingGroupRequest {
  public __string $id;
  public Tags $tags;
}

class CreatePackagingGroupResponse {
  public __string $arn;
  public __string $domain_name;
  public __string $id;
  public Tags $tags;
}

class DashEncryption {
  public SpekeKeyProvider $speke_key_provider;
}

class DashManifest {
  public ManifestLayout $manifest_layout;
  public __string $manifest_name;
  public __integer $min_buffer_time_seconds;
  public Profile $profile;
  public StreamSelection $stream_selection;
}

class DashPackage {
  public __listOfDashManifest $dash_manifests;
  public DashEncryption $encryption;
  public __listOf__PeriodTriggersElement $period_triggers;
  public __integer $segment_duration_seconds;
  public SegmentTemplateFormat $segment_template_format;
}

class DeleteAssetRequest {
  public __string $id;
}

class DeleteAssetResponse {
}

class DeletePackagingConfigurationRequest {
  public __string $id;
}

class DeletePackagingConfigurationResponse {
}

class DeletePackagingGroupRequest {
  public __string $id;
}

class DeletePackagingGroupResponse {
}

class DescribeAssetRequest {
  public __string $id;
}

class DescribeAssetResponse {
  public __string $arn;
  public __string $created_at;
  public __listOfEgressEndpoint $egress_endpoints;
  public __string $id;
  public __string $packaging_group_id;
  public __string $resource_id;
  public __string $source_arn;
  public __string $source_role_arn;
  public Tags $tags;
}

class DescribePackagingConfigurationRequest {
  public __string $id;
}

class DescribePackagingConfigurationResponse {
  public __string $arn;
  public CmafPackage $cmaf_package;
  public DashPackage $dash_package;
  public HlsPackage $hls_package;
  public __string $id;
  public MssPackage $mss_package;
  public __string $packaging_group_id;
  public Tags $tags;
}

class DescribePackagingGroupRequest {
  public __string $id;
}

class DescribePackagingGroupResponse {
  public __string $arn;
  public __string $domain_name;
  public __string $id;
  public Tags $tags;
}

class EgressEndpoint {
  public __string $packaging_configuration_id;
  public __string $url;
}

class EncryptionMethod {
}

class ForbiddenException {
  public __string $message;
}

class HlsEncryption {
  public __string $constant_initialization_vector;
  public EncryptionMethod $encryption_method;
  public SpekeKeyProvider $speke_key_provider;
}

class HlsManifest {
  public AdMarkers $ad_markers;
  public __boolean $include_iframe_only_stream;
  public __string $manifest_name;
  public __integer $program_date_time_interval_seconds;
  public __boolean $repeat_ext_x_key;
  public StreamSelection $stream_selection;
}

class HlsPackage {
  public HlsEncryption $encryption;
  public __listOfHlsManifest $hls_manifests;
  public __integer $segment_duration_seconds;
  public __boolean $use_audio_rendition_group;
}

class InternalServerErrorException {
  public __string $message;
}

class ListAssetsRequest {
  public MaxResults $max_results;
  public __string $next_token;
  public __string $packaging_group_id;
}

class ListAssetsResponse {
  public __listOfAssetShallow $assets;
  public __string $next_token;
}

class ListPackagingConfigurationsRequest {
  public MaxResults $max_results;
  public __string $next_token;
  public __string $packaging_group_id;
}

class ListPackagingConfigurationsResponse {
  public __string $next_token;
  public __listOfPackagingConfiguration $packaging_configurations;
}

class ListPackagingGroupsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListPackagingGroupsResponse {
  public __string $next_token;
  public __listOfPackagingGroup $packaging_groups;
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

class MssManifest {
  public __string $manifest_name;
  public StreamSelection $stream_selection;
}

class MssPackage {
  public MssEncryption $encryption;
  public __listOfMssManifest $mss_manifests;
  public __integer $segment_duration_seconds;
}

class NotFoundException {
  public __string $message;
}

class PackagingConfiguration {
  public __string $arn;
  public CmafPackage $cmaf_package;
  public DashPackage $dash_package;
  public HlsPackage $hls_package;
  public __string $id;
  public MssPackage $mss_package;
  public __string $packaging_group_id;
  public Tags $tags;
}

class PackagingConfigurationCreateParameters {
  public CmafPackage $cmaf_package;
  public DashPackage $dash_package;
  public HlsPackage $hls_package;
  public __string $id;
  public MssPackage $mss_package;
  public __string $packaging_group_id;
  public Tags $tags;
}

class PackagingConfigurationList {
  public __string $next_token;
  public __listOfPackagingConfiguration $packaging_configurations;
}

class PackagingGroup {
  public __string $arn;
  public __string $domain_name;
  public __string $id;
  public Tags $tags;
}

class PackagingGroupCreateParameters {
  public __string $id;
  public Tags $tags;
}

class PackagingGroupList {
  public __string $next_token;
  public __listOfPackagingGroup $packaging_groups;
}

class Profile {
}

class SegmentTemplateFormat {
}

class ServiceUnavailableException {
  public __string $message;
}

class SpekeKeyProvider {
  public __string $role_arn;
  public __listOf__string $system_ids;
  public __string $url;
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

class __PeriodTriggersElement {
}

class __boolean {
}

class __double {
}

class __integer {
}

class __listOfAssetShallow {
}

class __listOfDashManifest {
}

class __listOfEgressEndpoint {
}

class __listOfHlsManifest {
}

class __listOfMssManifest {
}

class __listOfPackagingConfiguration {
}

class __listOfPackagingGroup {
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

