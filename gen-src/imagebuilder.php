<?hh // strict
namespace slack\aws\imagebuilder;

interface imagebuilder {
  public function CancelImageCreation(CancelImageCreationRequest) Awaitable<Errors\Result<CancelImageCreationResponse>>;
  public function CreateComponent(CreateComponentRequest) Awaitable<Errors\Result<CreateComponentResponse>>;
  public function CreateDistributionConfiguration(CreateDistributionConfigurationRequest) Awaitable<Errors\Result<CreateDistributionConfigurationResponse>>;
  public function CreateImage(CreateImageRequest) Awaitable<Errors\Result<CreateImageResponse>>;
  public function CreateImagePipeline(CreateImagePipelineRequest) Awaitable<Errors\Result<CreateImagePipelineResponse>>;
  public function CreateImageRecipe(CreateImageRecipeRequest) Awaitable<Errors\Result<CreateImageRecipeResponse>>;
  public function CreateInfrastructureConfiguration(CreateInfrastructureConfigurationRequest) Awaitable<Errors\Result<CreateInfrastructureConfigurationResponse>>;
  public function DeleteComponent(DeleteComponentRequest) Awaitable<Errors\Result<DeleteComponentResponse>>;
  public function DeleteDistributionConfiguration(DeleteDistributionConfigurationRequest) Awaitable<Errors\Result<DeleteDistributionConfigurationResponse>>;
  public function DeleteImage(DeleteImageRequest) Awaitable<Errors\Result<DeleteImageResponse>>;
  public function DeleteImagePipeline(DeleteImagePipelineRequest) Awaitable<Errors\Result<DeleteImagePipelineResponse>>;
  public function DeleteImageRecipe(DeleteImageRecipeRequest) Awaitable<Errors\Result<DeleteImageRecipeResponse>>;
  public function DeleteInfrastructureConfiguration(DeleteInfrastructureConfigurationRequest) Awaitable<Errors\Result<DeleteInfrastructureConfigurationResponse>>;
  public function GetComponent(GetComponentRequest) Awaitable<Errors\Result<GetComponentResponse>>;
  public function GetComponentPolicy(GetComponentPolicyRequest) Awaitable<Errors\Result<GetComponentPolicyResponse>>;
  public function GetDistributionConfiguration(GetDistributionConfigurationRequest) Awaitable<Errors\Result<GetDistributionConfigurationResponse>>;
  public function GetImage(GetImageRequest) Awaitable<Errors\Result<GetImageResponse>>;
  public function GetImagePipeline(GetImagePipelineRequest) Awaitable<Errors\Result<GetImagePipelineResponse>>;
  public function GetImagePolicy(GetImagePolicyRequest) Awaitable<Errors\Result<GetImagePolicyResponse>>;
  public function GetImageRecipe(GetImageRecipeRequest) Awaitable<Errors\Result<GetImageRecipeResponse>>;
  public function GetImageRecipePolicy(GetImageRecipePolicyRequest) Awaitable<Errors\Result<GetImageRecipePolicyResponse>>;
  public function GetInfrastructureConfiguration(GetInfrastructureConfigurationRequest) Awaitable<Errors\Result<GetInfrastructureConfigurationResponse>>;
  public function ImportComponent(ImportComponentRequest) Awaitable<Errors\Result<ImportComponentResponse>>;
  public function ListComponentBuildVersions(ListComponentBuildVersionsRequest) Awaitable<Errors\Result<ListComponentBuildVersionsResponse>>;
  public function ListComponents(ListComponentsRequest) Awaitable<Errors\Result<ListComponentsResponse>>;
  public function ListDistributionConfigurations(ListDistributionConfigurationsRequest) Awaitable<Errors\Result<ListDistributionConfigurationsResponse>>;
  public function ListImageBuildVersions(ListImageBuildVersionsRequest) Awaitable<Errors\Result<ListImageBuildVersionsResponse>>;
  public function ListImagePipelineImages(ListImagePipelineImagesRequest) Awaitable<Errors\Result<ListImagePipelineImagesResponse>>;
  public function ListImagePipelines(ListImagePipelinesRequest) Awaitable<Errors\Result<ListImagePipelinesResponse>>;
  public function ListImageRecipes(ListImageRecipesRequest) Awaitable<Errors\Result<ListImageRecipesResponse>>;
  public function ListImages(ListImagesRequest) Awaitable<Errors\Result<ListImagesResponse>>;
  public function ListInfrastructureConfigurations(ListInfrastructureConfigurationsRequest) Awaitable<Errors\Result<ListInfrastructureConfigurationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutComponentPolicy(PutComponentPolicyRequest) Awaitable<Errors\Result<PutComponentPolicyResponse>>;
  public function PutImagePolicy(PutImagePolicyRequest) Awaitable<Errors\Result<PutImagePolicyResponse>>;
  public function PutImageRecipePolicy(PutImageRecipePolicyRequest) Awaitable<Errors\Result<PutImageRecipePolicyResponse>>;
  public function StartImagePipelineExecution(StartImagePipelineExecutionRequest) Awaitable<Errors\Result<StartImagePipelineExecutionResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDistributionConfiguration(UpdateDistributionConfigurationRequest) Awaitable<Errors\Result<UpdateDistributionConfigurationResponse>>;
  public function UpdateImagePipeline(UpdateImagePipelineRequest) Awaitable<Errors\Result<UpdateImagePipelineResponse>>;
  public function UpdateInfrastructureConfiguration(UpdateInfrastructureConfigurationRequest) Awaitable<Errors\Result<UpdateInfrastructureConfigurationResponse>>;
}

class AccountList {
}

class Ami {
  public NonEmptyString $description;
  public NonEmptyString $image;
  public NonEmptyString $name;
  public NonEmptyString $region;
  public ImageState $state;
}

class AmiDistributionConfiguration {
  public TagMap $ami_tags;
  public NonEmptyString $description;
  public LaunchPermissionConfiguration $launch_permission;
  public AmiNameString $name;
}

class AmiList {
}

class AmiNameString {
}

class Arn {
}

class ArnList {
}

class CallRateLimitExceededException {
  public ErrorMessage $message;
}

class CancelImageCreationRequest {
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
}

class CancelImageCreationResponse {
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
  public NonEmptyString $request_id;
}

class ClientException {
  public ErrorMessage $message;
}

class ClientToken {
}

class Component {
  public ImageBuilderArn $arn;
  public NonEmptyString $change_description;
  public ComponentData $data;
  public DateTime $date_created;
  public NonEmptyString $description;
  public NullableBoolean $encrypted;
  public NonEmptyString $kms_key_id;
  public ResourceName $name;
  public NonEmptyString $owner;
  public Platform $platform;
  public TagMap $tags;
  public ComponentType $type;
  public VersionNumber $version;
}

class ComponentBuildVersionArn {
}

class ComponentConfiguration {
  public ComponentVersionArnOrBuildVersionArn $component_arn;
}

class ComponentConfigurationList {
}

class ComponentData {
}

class ComponentFormat {
}

class ComponentSummary {
  public ImageBuilderArn $arn;
  public NonEmptyString $change_description;
  public DateTime $date_created;
  public NonEmptyString $description;
  public ResourceName $name;
  public NonEmptyString $owner;
  public Platform $platform;
  public TagMap $tags;
  public ComponentType $type;
  public VersionNumber $version;
}

class ComponentSummaryList {
}

class ComponentType {
}

class ComponentVersion {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public NonEmptyString $description;
  public ResourceName $name;
  public NonEmptyString $owner;
  public Platform $platform;
  public ComponentType $type;
  public VersionNumber $version;
}

class ComponentVersionArn {
}

class ComponentVersionArnOrBuildVersionArn {
}

class ComponentVersionList {
}

class CreateComponentRequest {
  public NonEmptyString $change_description;
  public ClientToken $client_token;
  public InlineComponentData $data;
  public NonEmptyString $description;
  public NonEmptyString $kms_key_id;
  public ResourceName $name;
  public Platform $platform;
  public VersionNumber $semantic_version;
  public TagMap $tags;
  public Uri $uri;
}

class CreateComponentResponse {
  public ClientToken $client_token;
  public ComponentBuildVersionArn $component_build_version_arn;
  public NonEmptyString $request_id;
}

class CreateDistributionConfigurationRequest {
  public ClientToken $client_token;
  public NonEmptyString $description;
  public DistributionList $distributions;
  public ResourceName $name;
  public TagMap $tags;
}

class CreateDistributionConfigurationResponse {
  public ClientToken $client_token;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NonEmptyString $request_id;
}

class CreateImagePipelineRequest {
  public ClientToken $client_token;
  public NonEmptyString $description;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NullableBoolean $enhanced_image_metadata_enabled;
  public ImageRecipeArn $image_recipe_arn;
  public ImageTestsConfiguration $image_tests_configuration;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public ResourceName $name;
  public Schedule $schedule;
  public PipelineStatus $status;
  public TagMap $tags;
}

class CreateImagePipelineResponse {
  public ClientToken $client_token;
  public ImagePipelineArn $image_pipeline_arn;
  public NonEmptyString $request_id;
}

class CreateImageRecipeRequest {
  public InstanceBlockDeviceMappings $block_device_mappings;
  public ClientToken $client_token;
  public ComponentConfigurationList $components;
  public NonEmptyString $description;
  public ResourceName $name;
  public NonEmptyString $parent_image;
  public VersionNumber $semantic_version;
  public TagMap $tags;
}

class CreateImageRecipeResponse {
  public ClientToken $client_token;
  public ImageRecipeArn $image_recipe_arn;
  public NonEmptyString $request_id;
}

class CreateImageRequest {
  public ClientToken $client_token;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NullableBoolean $enhanced_image_metadata_enabled;
  public ImageRecipeArn $image_recipe_arn;
  public ImageTestsConfiguration $image_tests_configuration;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public TagMap $tags;
}

class CreateImageResponse {
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
  public NonEmptyString $request_id;
}

class CreateInfrastructureConfigurationRequest {
  public ClientToken $client_token;
  public NonEmptyString $description;
  public NonEmptyString $instance_profile_name;
  public InstanceTypeList $instance_types;
  public NonEmptyString $key_pair;
  public Logging $logging;
  public ResourceName $name;
  public SecurityGroupIds $security_group_ids;
  public SnsTopicArn $sns_topic_arn;
  public NonEmptyString $subnet_id;
  public TagMap $tags;
  public NullableBoolean $terminate_instance_on_failure;
}

class CreateInfrastructureConfigurationResponse {
  public ClientToken $client_token;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public NonEmptyString $request_id;
}

class DateTime {
}

class DeleteComponentRequest {
  public ComponentBuildVersionArn $component_build_version_arn;
}

class DeleteComponentResponse {
  public ComponentBuildVersionArn $component_build_version_arn;
  public NonEmptyString $request_id;
}

class DeleteDistributionConfigurationRequest {
  public DistributionConfigurationArn $distribution_configuration_arn;
}

class DeleteDistributionConfigurationResponse {
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NonEmptyString $request_id;
}

class DeleteImagePipelineRequest {
  public ImagePipelineArn $image_pipeline_arn;
}

class DeleteImagePipelineResponse {
  public ImagePipelineArn $image_pipeline_arn;
  public NonEmptyString $request_id;
}

class DeleteImageRecipeRequest {
  public ImageRecipeArn $image_recipe_arn;
}

class DeleteImageRecipeResponse {
  public ImageRecipeArn $image_recipe_arn;
  public NonEmptyString $request_id;
}

class DeleteImageRequest {
  public ImageBuildVersionArn $image_build_version_arn;
}

class DeleteImageResponse {
  public ImageBuildVersionArn $image_build_version_arn;
  public NonEmptyString $request_id;
}

class DeleteInfrastructureConfigurationRequest {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
}

class DeleteInfrastructureConfigurationResponse {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public NonEmptyString $request_id;
}

class Distribution {
  public AmiDistributionConfiguration $ami_distribution_configuration;
  public ArnList $license_configuration_arns;
  public NonEmptyString $region;
}

class DistributionConfiguration {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public DateTime $date_updated;
  public NonEmptyString $description;
  public DistributionList $distributions;
  public ResourceName $name;
  public TagMap $tags;
  public DistributionTimeoutMinutes $timeout_minutes;
}

class DistributionConfigurationArn {
}

class DistributionConfigurationSummary {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public DateTime $date_updated;
  public NonEmptyString $description;
  public ResourceName $name;
  public TagMap $tags;
}

class DistributionConfigurationSummaryList {
}

class DistributionList {
}

class DistributionTimeoutMinutes {
}

class EbsInstanceBlockDeviceSpecification {
  public NullableBoolean $delete_on_termination;
  public NullableBoolean $encrypted;
  public EbsIopsInteger $iops;
  public NonEmptyString $kms_key_id;
  public NonEmptyString $snapshot_id;
  public EbsVolumeSizeInteger $volume_size;
  public EbsVolumeType $volume_type;
}

class EbsIopsInteger {
}

class EbsVolumeSizeInteger {
}

class EbsVolumeType {
}

class EmptyString {
}

class ErrorMessage {
}

class Filter {
  public FilterName $name;
  public FilterValues $values;
}

class FilterList {
}

class FilterName {
}

class FilterValue {
}

class FilterValues {
}

class ForbiddenException {
  public ErrorMessage $message;
}

class GetComponentPolicyRequest {
  public ComponentBuildVersionArn $component_arn;
}

class GetComponentPolicyResponse {
  public ResourcePolicyDocument $policy;
  public NonEmptyString $request_id;
}

class GetComponentRequest {
  public ComponentBuildVersionArn $component_build_version_arn;
}

class GetComponentResponse {
  public Component $component;
  public NonEmptyString $request_id;
}

class GetDistributionConfigurationRequest {
  public DistributionConfigurationArn $distribution_configuration_arn;
}

class GetDistributionConfigurationResponse {
  public DistributionConfiguration $distribution_configuration;
  public NonEmptyString $request_id;
}

class GetImagePipelineRequest {
  public ImagePipelineArn $image_pipeline_arn;
}

class GetImagePipelineResponse {
  public ImagePipeline $image_pipeline;
  public NonEmptyString $request_id;
}

class GetImagePolicyRequest {
  public ImageBuildVersionArn $image_arn;
}

class GetImagePolicyResponse {
  public ResourcePolicyDocument $policy;
  public NonEmptyString $request_id;
}

class GetImageRecipePolicyRequest {
  public ImageRecipeArn $image_recipe_arn;
}

class GetImageRecipePolicyResponse {
  public ResourcePolicyDocument $policy;
  public NonEmptyString $request_id;
}

class GetImageRecipeRequest {
  public ImageRecipeArn $image_recipe_arn;
}

class GetImageRecipeResponse {
  public ImageRecipe $image_recipe;
  public NonEmptyString $request_id;
}

class GetImageRequest {
  public ImageBuildVersionArn $image_build_version_arn;
}

class GetImageResponse {
  public Image $image;
  public NonEmptyString $request_id;
}

class GetInfrastructureConfigurationRequest {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
}

class GetInfrastructureConfigurationResponse {
  public InfrastructureConfiguration $infrastructure_configuration;
  public NonEmptyString $request_id;
}

class IdempotentParameterMismatchException {
  public ErrorMessage $message;
}

class Image {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public DistributionConfiguration $distribution_configuration;
  public NullableBoolean $enhanced_image_metadata_enabled;
  public ImageRecipe $image_recipe;
  public ImageTestsConfiguration $image_tests_configuration;
  public InfrastructureConfiguration $infrastructure_configuration;
  public ResourceName $name;
  public OsVersion $os_version;
  public OutputResources $output_resources;
  public Platform $platform;
  public Arn $source_pipeline_arn;
  public ResourceName $source_pipeline_name;
  public ImageState $state;
  public TagMap $tags;
  public VersionNumber $version;
}

class ImageBuildVersionArn {
}

class ImageBuilderArn {
}

class ImagePipeline {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public DateTime $date_last_run;
  public DateTime $date_next_run;
  public DateTime $date_updated;
  public NonEmptyString $description;
  public Arn $distribution_configuration_arn;
  public NullableBoolean $enhanced_image_metadata_enabled;
  public Arn $image_recipe_arn;
  public ImageTestsConfiguration $image_tests_configuration;
  public Arn $infrastructure_configuration_arn;
  public ResourceName $name;
  public Platform $platform;
  public Schedule $schedule;
  public PipelineStatus $status;
  public TagMap $tags;
}

class ImagePipelineArn {
}

class ImagePipelineList {
}

class ImageRecipe {
  public ImageBuilderArn $arn;
  public InstanceBlockDeviceMappings $block_device_mappings;
  public ComponentConfigurationList $components;
  public DateTime $date_created;
  public NonEmptyString $description;
  public ResourceName $name;
  public NonEmptyString $owner;
  public NonEmptyString $parent_image;
  public Platform $platform;
  public TagMap $tags;
  public VersionNumber $version;
}

class ImageRecipeArn {
}

class ImageRecipeSummary {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public ResourceName $name;
  public NonEmptyString $owner;
  public NonEmptyString $parent_image;
  public Platform $platform;
  public TagMap $tags;
}

class ImageRecipeSummaryList {
}

class ImageState {
  public NonEmptyString $reason;
  public ImageStatus $status;
}

class ImageStatus {
}

class ImageSummary {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public ResourceName $name;
  public OsVersion $os_version;
  public OutputResources $output_resources;
  public NonEmptyString $owner;
  public Platform $platform;
  public ImageState $state;
  public TagMap $tags;
  public VersionNumber $version;
}

class ImageSummaryList {
}

class ImageTestsConfiguration {
  public NullableBoolean $image_tests_enabled;
  public ImageTestsTimeoutMinutes $timeout_minutes;
}

class ImageTestsTimeoutMinutes {
}

class ImageVersion {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public ResourceName $name;
  public OsVersion $os_version;
  public NonEmptyString $owner;
  public Platform $platform;
  public VersionNumber $version;
}

class ImageVersionArn {
}

class ImageVersionList {
}

class ImportComponentRequest {
  public NonEmptyString $change_description;
  public ClientToken $client_token;
  public NonEmptyString $data;
  public NonEmptyString $description;
  public ComponentFormat $format;
  public NonEmptyString $kms_key_id;
  public ResourceName $name;
  public Platform $platform;
  public VersionNumber $semantic_version;
  public TagMap $tags;
  public ComponentType $type;
  public Uri $uri;
}

class ImportComponentResponse {
  public ClientToken $client_token;
  public ComponentBuildVersionArn $component_build_version_arn;
  public NonEmptyString $request_id;
}

class InfrastructureConfiguration {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public DateTime $date_updated;
  public NonEmptyString $description;
  public NonEmptyString $instance_profile_name;
  public InstanceTypeList $instance_types;
  public NonEmptyString $key_pair;
  public Logging $logging;
  public ResourceName $name;
  public SecurityGroupIds $security_group_ids;
  public NonEmptyString $sns_topic_arn;
  public NonEmptyString $subnet_id;
  public TagMap $tags;
  public NullableBoolean $terminate_instance_on_failure;
}

class InfrastructureConfigurationArn {
}

class InfrastructureConfigurationSummary {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public DateTime $date_updated;
  public NonEmptyString $description;
  public ResourceName $name;
  public TagMap $tags;
}

class InfrastructureConfigurationSummaryList {
}

class InlineComponentData {
}

class InstanceBlockDeviceMapping {
  public NonEmptyString $device_name;
  public EbsInstanceBlockDeviceSpecification $ebs;
  public EmptyString $no_device;
  public NonEmptyString $virtual_name;
}

class InstanceBlockDeviceMappings {
}

class InstanceType {
}

class InstanceTypeList {
}

class InvalidPaginationTokenException {
  public ErrorMessage $message;
}

class InvalidParameterCombinationException {
  public ErrorMessage $message;
}

class InvalidParameterException {
  public ErrorMessage $message;
}

class InvalidParameterValueException {
  public ErrorMessage $message;
}

class InvalidRequestException {
  public ErrorMessage $message;
}

class InvalidVersionNumberException {
  public ErrorMessage $message;
}

class LaunchPermissionConfiguration {
  public StringList $user_groups;
  public AccountList $user_ids;
}

class ListComponentBuildVersionsRequest {
  public ComponentVersionArn $component_version_arn;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
}

class ListComponentBuildVersionsResponse {
  public ComponentSummaryList $component_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class ListComponentsRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
  public Ownership $owner;
}

class ListComponentsResponse {
  public ComponentVersionList $component_version_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class ListDistributionConfigurationsRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
}

class ListDistributionConfigurationsResponse {
  public DistributionConfigurationSummaryList $distribution_configuration_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class ListImageBuildVersionsRequest {
  public FilterList $filters;
  public ImageVersionArn $image_version_arn;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
}

class ListImageBuildVersionsResponse {
  public ImageSummaryList $image_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class ListImagePipelineImagesRequest {
  public FilterList $filters;
  public ImagePipelineArn $image_pipeline_arn;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
}

class ListImagePipelineImagesResponse {
  public ImageSummaryList $image_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class ListImagePipelinesRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
}

class ListImagePipelinesResponse {
  public ImagePipelineList $image_pipeline_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class ListImageRecipesRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
  public Ownership $owner;
}

class ListImageRecipesResponse {
  public ImageRecipeSummaryList $image_recipe_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class ListImagesRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
  public Ownership $owner;
}

class ListImagesResponse {
  public ImageVersionList $image_version_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class ListInfrastructureConfigurationsRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
}

class ListInfrastructureConfigurationsResponse {
  public InfrastructureConfigurationSummaryList $infrastructure_configuration_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class ListTagsForResourceRequest {
  public ImageBuilderArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class Logging {
  public S3Logs $s_3_logs;
}

class NonEmptyString {
}

class NullableBoolean {
}

class OsVersion {
}

class OutputResources {
  public AmiList $amis;
}

class Ownership {
}

class PipelineExecutionStartCondition {
}

class PipelineStatus {
}

class Platform {
}

class PutComponentPolicyRequest {
  public ComponentBuildVersionArn $component_arn;
  public ResourcePolicyDocument $policy;
}

class PutComponentPolicyResponse {
  public ComponentBuildVersionArn $component_arn;
  public NonEmptyString $request_id;
}

class PutImagePolicyRequest {
  public ImageBuildVersionArn $image_arn;
  public ResourcePolicyDocument $policy;
}

class PutImagePolicyResponse {
  public ImageBuildVersionArn $image_arn;
  public NonEmptyString $request_id;
}

class PutImageRecipePolicyRequest {
  public ImageRecipeArn $image_recipe_arn;
  public ResourcePolicyDocument $policy;
}

class PutImageRecipePolicyResponse {
  public ImageRecipeArn $image_recipe_arn;
  public NonEmptyString $request_id;
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
}

class ResourceDependencyException {
  public ErrorMessage $message;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceName {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class ResourcePolicyDocument {
}

class RestrictedInteger {
}

class S3Logs {
  public NonEmptyString $s_3_bucket_name;
  public NonEmptyString $s_3_key_prefix;
}

class Schedule {
  public PipelineExecutionStartCondition $pipeline_execution_start_condition;
  public NonEmptyString $schedule_expression;
}

class SecurityGroupIds {
}

class ServiceException {
  public ErrorMessage $message;
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class SnsTopicArn {
}

class StartImagePipelineExecutionRequest {
  public ClientToken $client_token;
  public ImagePipelineArn $image_pipeline_arn;
}

class StartImagePipelineExecutionResponse {
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
  public NonEmptyString $request_id;
}

class StringList {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public ImageBuilderArn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class UntagResourceRequest {
  public ImageBuilderArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateDistributionConfigurationRequest {
  public ClientToken $client_token;
  public NonEmptyString $description;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public DistributionList $distributions;
}

class UpdateDistributionConfigurationResponse {
  public ClientToken $client_token;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NonEmptyString $request_id;
}

class UpdateImagePipelineRequest {
  public ClientToken $client_token;
  public NonEmptyString $description;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NullableBoolean $enhanced_image_metadata_enabled;
  public ImagePipelineArn $image_pipeline_arn;
  public ImageRecipeArn $image_recipe_arn;
  public ImageTestsConfiguration $image_tests_configuration;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public Schedule $schedule;
  public PipelineStatus $status;
}

class UpdateImagePipelineResponse {
  public ClientToken $client_token;
  public ImagePipelineArn $image_pipeline_arn;
  public NonEmptyString $request_id;
}

class UpdateInfrastructureConfigurationRequest {
  public ClientToken $client_token;
  public NonEmptyString $description;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public NonEmptyString $instance_profile_name;
  public InstanceTypeList $instance_types;
  public NonEmptyString $key_pair;
  public Logging $logging;
  public SecurityGroupIds $security_group_ids;
  public SnsTopicArn $sns_topic_arn;
  public NonEmptyString $subnet_id;
  public NullableBoolean $terminate_instance_on_failure;
}

class UpdateInfrastructureConfigurationResponse {
  public ClientToken $client_token;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public NonEmptyString $request_id;
}

class Uri {
}

class VersionNumber {
}

