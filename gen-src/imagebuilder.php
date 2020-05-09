<?hh // strict
namespace slack\aws\imagebuilder;

interface imagebuilder {
  public function GetComponent(GetComponentRequest) Awaitable<Errors\Result<GetComponentResponse>>;
  public function GetComponentPolicy(GetComponentPolicyRequest) Awaitable<Errors\Result<GetComponentPolicyResponse>>;
  public function GetImagePipeline(GetImagePipelineRequest) Awaitable<Errors\Result<GetImagePipelineResponse>>;
  public function CreateImage(CreateImageRequest) Awaitable<Errors\Result<CreateImageResponse>>;
  public function CreateImagePipeline(CreateImagePipelineRequest) Awaitable<Errors\Result<CreateImagePipelineResponse>>;
  public function DeleteImagePipeline(DeleteImagePipelineRequest) Awaitable<Errors\Result<DeleteImagePipelineResponse>>;
  public function DeleteInfrastructureConfiguration(DeleteInfrastructureConfigurationRequest) Awaitable<Errors\Result<DeleteInfrastructureConfigurationResponse>>;
  public function ImportComponent(ImportComponentRequest) Awaitable<Errors\Result<ImportComponentResponse>>;
  public function ListComponentBuildVersions(ListComponentBuildVersionsRequest) Awaitable<Errors\Result<ListComponentBuildVersionsResponse>>;
  public function ListImageBuildVersions(ListImageBuildVersionsRequest) Awaitable<Errors\Result<ListImageBuildVersionsResponse>>;
  public function ListImageRecipes(ListImageRecipesRequest) Awaitable<Errors\Result<ListImageRecipesResponse>>;
  public function CreateDistributionConfiguration(CreateDistributionConfigurationRequest) Awaitable<Errors\Result<CreateDistributionConfigurationResponse>>;
  public function DeleteComponent(DeleteComponentRequest) Awaitable<Errors\Result<DeleteComponentResponse>>;
  public function DeleteImageRecipe(DeleteImageRecipeRequest) Awaitable<Errors\Result<DeleteImageRecipeResponse>>;
  public function PutImagePolicy(PutImagePolicyRequest) Awaitable<Errors\Result<PutImagePolicyResponse>>;
  public function GetImageRecipePolicy(GetImageRecipePolicyRequest) Awaitable<Errors\Result<GetImageRecipePolicyResponse>>;
  public function ListImages(ListImagesRequest) Awaitable<Errors\Result<ListImagesResponse>>;
  public function UpdateImagePipeline(UpdateImagePipelineRequest) Awaitable<Errors\Result<UpdateImagePipelineResponse>>;
  public function CancelImageCreation(CancelImageCreationRequest) Awaitable<Errors\Result<CancelImageCreationResponse>>;
  public function CreateComponent(CreateComponentRequest) Awaitable<Errors\Result<CreateComponentResponse>>;
  public function DeleteImage(DeleteImageRequest) Awaitable<Errors\Result<DeleteImageResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function GetImage(GetImageRequest) Awaitable<Errors\Result<GetImageResponse>>;
  public function ListInfrastructureConfigurations(ListInfrastructureConfigurationsRequest) Awaitable<Errors\Result<ListInfrastructureConfigurationsResponse>>;
  public function PutImageRecipePolicy(PutImageRecipePolicyRequest) Awaitable<Errors\Result<PutImageRecipePolicyResponse>>;
  public function CreateInfrastructureConfiguration(CreateInfrastructureConfigurationRequest) Awaitable<Errors\Result<CreateInfrastructureConfigurationResponse>>;
  public function ListImagePipelineImages(ListImagePipelineImagesRequest) Awaitable<Errors\Result<ListImagePipelineImagesResponse>>;
  public function PutComponentPolicy(PutComponentPolicyRequest) Awaitable<Errors\Result<PutComponentPolicyResponse>>;
  public function UpdateInfrastructureConfiguration(UpdateInfrastructureConfigurationRequest) Awaitable<Errors\Result<UpdateInfrastructureConfigurationResponse>>;
  public function ListComponents(ListComponentsRequest) Awaitable<Errors\Result<ListComponentsResponse>>;
  public function ListDistributionConfigurations(ListDistributionConfigurationsRequest) Awaitable<Errors\Result<ListDistributionConfigurationsResponse>>;
  public function StartImagePipelineExecution(StartImagePipelineExecutionRequest) Awaitable<Errors\Result<StartImagePipelineExecutionResponse>>;
  public function GetInfrastructureConfiguration(GetInfrastructureConfigurationRequest) Awaitable<Errors\Result<GetInfrastructureConfigurationResponse>>;
  public function CreateImageRecipe(CreateImageRecipeRequest) Awaitable<Errors\Result<CreateImageRecipeResponse>>;
  public function GetDistributionConfiguration(GetDistributionConfigurationRequest) Awaitable<Errors\Result<GetDistributionConfigurationResponse>>;
  public function GetImageRecipe(GetImageRecipeRequest) Awaitable<Errors\Result<GetImageRecipeResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function UpdateDistributionConfiguration(UpdateDistributionConfigurationRequest) Awaitable<Errors\Result<UpdateDistributionConfigurationResponse>>;
  public function DeleteDistributionConfiguration(DeleteDistributionConfigurationRequest) Awaitable<Errors\Result<DeleteDistributionConfigurationResponse>>;
  public function GetImagePolicy(GetImagePolicyRequest) Awaitable<Errors\Result<GetImagePolicyResponse>>;
  public function ListImagePipelines(ListImagePipelinesRequest) Awaitable<Errors\Result<ListImagePipelinesResponse>>;
}

class StartImagePipelineExecutionResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
}

class ComponentConfiguration {
  public ComponentVersionArnOrBuildVersionArn $component_arn;
}

class ComponentVersionArn {
}

class DeleteDistributionConfigurationResponse {
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NonEmptyString $request_id;
}

class EbsInstanceBlockDeviceSpecification {
  public NonEmptyString $kms_key_id;
  public NonEmptyString $snapshot_id;
  public EbsVolumeSizeInteger $volume_size;
  public EbsVolumeType $volume_type;
  public NullableBoolean $encrypted;
  public NullableBoolean $delete_on_termination;
  public EbsIopsInteger $iops;
}

class GetImagePipelineRequest {
  public ImagePipelineArn $image_pipeline_arn;
}

class ListComponentBuildVersionsRequest {
  public NonEmptyString $next_token;
  public ComponentVersionArn $component_version_arn;
  public RestrictedInteger $max_results;
}

class TagResourceRequest {
  public ImageBuilderArn $resource_arn;
  public TagMap $tags;
}

class DeleteImageResponse {
  public NonEmptyString $request_id;
  public ImageBuildVersionArn $image_build_version_arn;
}

class ErrorMessage {
}

class Filter {
  public FilterName $name;
  public FilterValues $values;
}

class NullableBoolean {
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
}

class Schedule {
  public NonEmptyString $schedule_expression;
  public PipelineExecutionStartCondition $pipeline_execution_start_condition;
}

class Component {
  public NonEmptyString $kms_key_id;
  public DateTime $date_created;
  public NonEmptyString $description;
  public NonEmptyString $change_description;
  public ComponentType $type;
  public Platform $platform;
  public NonEmptyString $owner;
  public TagMap $tags;
  public ImageBuilderArn $arn;
  public ResourceName $name;
  public VersionNumber $version;
  public ComponentData $data;
  public NullableBoolean $encrypted;
}

class DateTime {
}

class ImagePipelineArn {
}

class ImageRecipeSummaryList {
}

class ResourcePolicyDocument {
}

class AmiNameString {
}

class DeleteImagePipelineRequest {
  public ImagePipelineArn $image_pipeline_arn;
}

class ImageState {
  public ImageStatus $status;
  public NonEmptyString $reason;
}

class ListInfrastructureConfigurationsRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
}

class Ownership {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class InstanceType {
}

class ComponentType {
}

class CreateInfrastructureConfigurationResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
}

class FilterValue {
}

class GetComponentPolicyResponse {
  public ResourcePolicyDocument $policy;
  public NonEmptyString $request_id;
}

class GetInfrastructureConfigurationResponse {
  public InfrastructureConfiguration $infrastructure_configuration;
  public NonEmptyString $request_id;
}

class ImportComponentResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public ComponentBuildVersionArn $component_build_version_arn;
}

class ComponentSummary {
  public ResourceName $name;
  public VersionNumber $version;
  public TagMap $tags;
  public ImageBuilderArn $arn;
  public Platform $platform;
  public ComponentType $type;
  public NonEmptyString $owner;
  public NonEmptyString $description;
  public NonEmptyString $change_description;
  public DateTime $date_created;
}

class CreateInfrastructureConfigurationRequest {
  public NonEmptyString $instance_profile_name;
  public SecurityGroupIds $security_group_ids;
  public NonEmptyString $key_pair;
  public NullableBoolean $terminate_instance_on_failure;
  public SnsTopicArn $sns_topic_arn;
  public TagMap $tags;
  public ResourceName $name;
  public InstanceTypeList $instance_types;
  public NonEmptyString $subnet_id;
  public Logging $logging;
  public ClientToken $client_token;
  public NonEmptyString $description;
}

class FilterValues {
}

class GetImageRecipeResponse {
  public NonEmptyString $request_id;
  public ImageRecipe $image_recipe;
}

class ImageRecipeSummary {
  public DateTime $date_created;
  public TagMap $tags;
  public ImageBuilderArn $arn;
  public ResourceName $name;
  public Platform $platform;
  public NonEmptyString $owner;
  public NonEmptyString $parent_image;
}

class InfrastructureConfigurationSummary {
  public DateTime $date_created;
  public DateTime $date_updated;
  public TagMap $tags;
  public ImageBuilderArn $arn;
  public ResourceName $name;
  public NonEmptyString $description;
}

class EbsVolumeSizeInteger {
}

class GetImagePolicyResponse {
  public NonEmptyString $request_id;
  public ResourcePolicyDocument $policy;
}

class ImageVersionArn {
}

class ComponentVersionArnOrBuildVersionArn {
}

class InstanceTypeList {
}

class ListDistributionConfigurationsRequest {
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
  public FilterList $filters;
}

class CreateImageRequest {
  public ClientToken $client_token;
  public ImageRecipeArn $image_recipe_arn;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public ImageTestsConfiguration $image_tests_configuration;
  public NullableBoolean $enhanced_image_metadata_enabled;
  public TagMap $tags;
}

class ImageRecipeArn {
}

class RestrictedInteger {
}

class TagValue {
}

class UpdateDistributionConfigurationResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public DistributionConfigurationArn $distribution_configuration_arn;
}

class ListComponentsRequest {
  public NonEmptyString $next_token;
  public Ownership $owner;
  public FilterList $filters;
  public RestrictedInteger $max_results;
}

class S3Logs {
  public NonEmptyString $s_3_bucket_name;
  public NonEmptyString $s_3_key_prefix;
}

class CreateDistributionConfigurationRequest {
  public ResourceName $name;
  public NonEmptyString $description;
  public DistributionList $distributions;
  public TagMap $tags;
  public ClientToken $client_token;
}

class DeleteImageRecipeResponse {
  public NonEmptyString $request_id;
  public ImageRecipeArn $image_recipe_arn;
}

class GetDistributionConfigurationRequest {
  public DistributionConfigurationArn $distribution_configuration_arn;
}

class GetImagePipelineResponse {
  public NonEmptyString $request_id;
  public ImagePipeline $image_pipeline;
}

class ImageRecipe {
  public DateTime $date_created;
  public TagMap $tags;
  public ResourceName $name;
  public ComponentConfigurationList $components;
  public NonEmptyString $parent_image;
  public NonEmptyString $owner;
  public VersionNumber $version;
  public InstanceBlockDeviceMappings $block_device_mappings;
  public ImageBuilderArn $arn;
  public NonEmptyString $description;
  public Platform $platform;
}

class ImageSummary {
  public OsVersion $os_version;
  public ImageState $state;
  public DateTime $date_created;
  public OutputResources $output_resources;
  public ImageBuilderArn $arn;
  public VersionNumber $version;
  public Platform $platform;
  public NonEmptyString $owner;
  public TagMap $tags;
  public ResourceName $name;
}

class Logging {
  public S3Logs $s_3_logs;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class DistributionConfigurationSummary {
  public DateTime $date_updated;
  public TagMap $tags;
  public ImageBuilderArn $arn;
  public ResourceName $name;
  public NonEmptyString $description;
  public DateTime $date_created;
}

class GetImageRecipePolicyRequest {
  public ImageRecipeArn $image_recipe_arn;
}

class InvalidParameterValueException {
  public ErrorMessage $message;
}

class ListImagePipelineImagesResponse {
  public NonEmptyString $request_id;
  public ImageSummaryList $image_summary_list;
  public NonEmptyString $next_token;
}

class ListImagePipelinesRequest {
  public NonEmptyString $next_token;
  public FilterList $filters;
  public RestrictedInteger $max_results;
}

class ListImageRecipesRequest {
  public NonEmptyString $next_token;
  public Ownership $owner;
  public FilterList $filters;
  public RestrictedInteger $max_results;
}

class CancelImageCreationResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
}

class CreateImageRecipeRequest {
  public NonEmptyString $description;
  public VersionNumber $semantic_version;
  public ComponentConfigurationList $components;
  public NonEmptyString $parent_image;
  public InstanceBlockDeviceMappings $block_device_mappings;
  public TagMap $tags;
  public ClientToken $client_token;
  public ResourceName $name;
}

class ImagePipeline {
  public Arn $distribution_configuration_arn;
  public PipelineStatus $status;
  public DateTime $date_updated;
  public DateTime $date_next_run;
  public ResourceName $name;
  public Platform $platform;
  public Arn $image_recipe_arn;
  public Schedule $schedule;
  public TagMap $tags;
  public Arn $infrastructure_configuration_arn;
  public ImageTestsConfiguration $image_tests_configuration;
  public DateTime $date_created;
  public DateTime $date_last_run;
  public ImageBuilderArn $arn;
  public NonEmptyString $description;
  public NullableBoolean $enhanced_image_metadata_enabled;
}

class ListImagePipelineImagesRequest {
  public NonEmptyString $next_token;
  public ImagePipelineArn $image_pipeline_arn;
  public FilterList $filters;
  public RestrictedInteger $max_results;
}

class TagKeyList {
}

class ClientToken {
}

class StringList {
}

class ComponentData {
}

class GetComponentResponse {
  public NonEmptyString $request_id;
  public Component $component;
}

class ImportComponentRequest {
  public Uri $uri;
  public NonEmptyString $kms_key_id;
  public TagMap $tags;
  public VersionNumber $semantic_version;
  public ComponentFormat $format;
  public NonEmptyString $data;
  public ComponentType $type;
  public Platform $platform;
  public ClientToken $client_token;
  public ResourceName $name;
  public NonEmptyString $description;
  public NonEmptyString $change_description;
}

class PutComponentPolicyRequest {
  public ComponentBuildVersionArn $component_arn;
  public ResourcePolicyDocument $policy;
}

class DeleteImageRecipeRequest {
  public ImageRecipeArn $image_recipe_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class UntagResourceRequest {
  public ImageBuilderArn $resource_arn;
  public TagKeyList $tag_keys;
}

class CreateImageResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
}

class EbsVolumeType {
}

class OsVersion {
}

class UntagResourceResponse {
}

class InvalidParameterCombinationException {
  public ErrorMessage $message;
}

class CreateComponentResponse {
  public ClientToken $client_token;
  public ComponentBuildVersionArn $component_build_version_arn;
  public NonEmptyString $request_id;
}

class FilterList {
}

class IdempotentParameterMismatchException {
  public ErrorMessage $message;
}

class ImageTestsConfiguration {
  public NullableBoolean $image_tests_enabled;
  public ImageTestsTimeoutMinutes $timeout_minutes;
}

class InfrastructureConfigurationArn {
}

class InvalidPaginationTokenException {
  public ErrorMessage $message;
}

class CreateImagePipelineRequest {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public ImageTestsConfiguration $image_tests_configuration;
  public NullableBoolean $enhanced_image_metadata_enabled;
  public Schedule $schedule;
  public ClientToken $client_token;
  public ResourceName $name;
  public NonEmptyString $description;
  public ImageRecipeArn $image_recipe_arn;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public PipelineStatus $status;
  public TagMap $tags;
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class UpdateImagePipelineResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public ImagePipelineArn $image_pipeline_arn;
}

class ComponentBuildVersionArn {
}

class GetImageRecipeRequest {
  public ImageRecipeArn $image_recipe_arn;
}

class ImageBuilderArn {
}

class PutImagePolicyRequest {
  public ImageBuildVersionArn $image_arn;
  public ResourcePolicyDocument $policy;
}

class PutImagePolicyResponse {
  public NonEmptyString $request_id;
  public ImageBuildVersionArn $image_arn;
}

class PutImageRecipePolicyRequest {
  public ImageRecipeArn $image_recipe_arn;
  public ResourcePolicyDocument $policy;
}

class VersionNumber {
}

class DeleteComponentResponse {
  public ComponentBuildVersionArn $component_build_version_arn;
  public NonEmptyString $request_id;
}

class EmptyString {
}

class GetImageRequest {
  public ImageBuildVersionArn $image_build_version_arn;
}

class ListComponentsResponse {
  public NonEmptyString $request_id;
  public ComponentVersionList $component_version_list;
  public NonEmptyString $next_token;
}

class ListImageBuildVersionsResponse {
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
  public ImageSummaryList $image_summary_list;
}

class SecurityGroupIds {
}

class DeleteImagePipelineResponse {
  public NonEmptyString $request_id;
  public ImagePipelineArn $image_pipeline_arn;
}

class Distribution {
  public NonEmptyString $region;
  public AmiDistributionConfiguration $ami_distribution_configuration;
  public ArnList $license_configuration_arns;
}

class ListInfrastructureConfigurationsResponse {
  public InfrastructureConfigurationSummaryList $infrastructure_configuration_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class PutComponentPolicyResponse {
  public NonEmptyString $request_id;
  public ComponentBuildVersionArn $component_arn;
}

class PipelineExecutionStartCondition {
}

class AmiList {
}

class GetInfrastructureConfigurationRequest {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
}

class ImagePipelineList {
}

class ImageStatus {
}

class ListComponentBuildVersionsResponse {
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
  public ComponentSummaryList $component_summary_list;
}

class ListImagePipelinesResponse {
  public NonEmptyString $request_id;
  public ImagePipelineList $image_pipeline_list;
  public NonEmptyString $next_token;
}

class ListImageRecipesResponse {
  public NonEmptyString $request_id;
  public ImageRecipeSummaryList $image_recipe_summary_list;
  public NonEmptyString $next_token;
}

class TagMap {
}

class ArnList {
}

class ClientException {
  public ErrorMessage $message;
}

class ComponentVersion {
  public ComponentType $type;
  public NonEmptyString $owner;
  public DateTime $date_created;
  public ImageBuilderArn $arn;
  public ResourceName $name;
  public VersionNumber $version;
  public NonEmptyString $description;
  public Platform $platform;
}

class GetComponentPolicyRequest {
  public ComponentBuildVersionArn $component_arn;
}

class GetDistributionConfigurationResponse {
  public NonEmptyString $request_id;
  public DistributionConfiguration $distribution_configuration;
}

class ListDistributionConfigurationsResponse {
  public DistributionConfigurationSummaryList $distribution_configuration_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;
}

class UpdateInfrastructureConfigurationResponse {
  public ClientToken $client_token;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public NonEmptyString $request_id;
}

class UpdateDistributionConfigurationRequest {
  public NonEmptyString $description;
  public DistributionList $distributions;
  public ClientToken $client_token;
  public DistributionConfigurationArn $distribution_configuration_arn;
}

class Arn {
}

class ComponentSummaryList {
}

class DeleteInfrastructureConfigurationResponse {
  public NonEmptyString $request_id;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
}

class DistributionList {
}

class ImageVersion {
  public OsVersion $os_version;
  public NonEmptyString $owner;
  public DateTime $date_created;
  public ImageBuilderArn $arn;
  public ResourceName $name;
  public VersionNumber $version;
  public Platform $platform;
}

class InfrastructureConfiguration {
  public NonEmptyString $instance_profile_name;
  public ImageBuilderArn $arn;
  public ResourceName $name;
  public Logging $logging;
  public NonEmptyString $subnet_id;
  public NonEmptyString $sns_topic_arn;
  public DateTime $date_created;
  public TagMap $tags;
  public NonEmptyString $description;
  public InstanceTypeList $instance_types;
  public NullableBoolean $terminate_instance_on_failure;
  public DateTime $date_updated;
  public SecurityGroupIds $security_group_ids;
  public NonEmptyString $key_pair;
}

class CreateDistributionConfigurationResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public DistributionConfigurationArn $distribution_configuration_arn;
}

class DeleteInfrastructureConfigurationRequest {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
}

class ForbiddenException {
  public ErrorMessage $message;
}

class OutputResources {
  public AmiList $amis;
}

class ResourceDependencyException {
  public ErrorMessage $message;
}

class InstanceBlockDeviceMappings {
}

class InvalidParameterException {
  public ErrorMessage $message;
}

class AmiDistributionConfiguration {
  public TagMap $ami_tags;
  public LaunchPermissionConfiguration $launch_permission;
  public AmiNameString $name;
  public NonEmptyString $description;
}

class ComponentFormat {
}

class CreateImagePipelineResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public ImagePipelineArn $image_pipeline_arn;
}

class CreateImageRecipeResponse {
  public NonEmptyString $request_id;
  public ClientToken $client_token;
  public ImageRecipeArn $image_recipe_arn;
}

class ImageBuildVersionArn {
}

class InstanceBlockDeviceMapping {
  public NonEmptyString $device_name;
  public EbsInstanceBlockDeviceSpecification $ebs;
  public NonEmptyString $virtual_name;
  public EmptyString $no_device;
}

class ListTagsForResourceRequest {
  public ImageBuilderArn $resource_arn;
}

class Platform {
}

class PutImageRecipePolicyResponse {
  public NonEmptyString $request_id;
  public ImageRecipeArn $image_recipe_arn;
}

class SnsTopicArn {
}

class Ami {
  public ImageState $state;
  public NonEmptyString $region;
  public NonEmptyString $image;
  public NonEmptyString $name;
  public NonEmptyString $description;
}

class CancelImageCreationRequest {
  public ImageBuildVersionArn $image_build_version_arn;
  public ClientToken $client_token;
}

class DeleteComponentRequest {
  public ComponentBuildVersionArn $component_build_version_arn;
}

class EbsIopsInteger {
}

class GetComponentRequest {
  public ComponentBuildVersionArn $component_build_version_arn;
}

class InlineComponentData {
}

class Image {
  public NullableBoolean $enhanced_image_metadata_enabled;
  public DistributionConfiguration $distribution_configuration;
  public TagMap $tags;
  public ImageBuilderArn $arn;
  public VersionNumber $version;
  public OsVersion $os_version;
  public ImageState $state;
  public ImageTestsConfiguration $image_tests_configuration;
  public Platform $platform;
  public ResourceName $source_pipeline_name;
  public Arn $source_pipeline_arn;
  public InfrastructureConfiguration $infrastructure_configuration;
  public DateTime $date_created;
  public OutputResources $output_resources;
  public ResourceName $name;
  public ImageRecipe $image_recipe;
}

class InvalidVersionNumberException {
  public ErrorMessage $message;
}

class NonEmptyString {
}

class UpdateInfrastructureConfigurationRequest {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public NonEmptyString $description;
  public InstanceTypeList $instance_types;
  public NonEmptyString $subnet_id;
  public Logging $logging;
  public NonEmptyString $key_pair;
  public NullableBoolean $terminate_instance_on_failure;
  public NonEmptyString $instance_profile_name;
  public SecurityGroupIds $security_group_ids;
  public SnsTopicArn $sns_topic_arn;
  public ClientToken $client_token;
}

class AccountList {
}

class CallRateLimitExceededException {
  public ErrorMessage $message;
}

class DeleteDistributionConfigurationRequest {
  public DistributionConfigurationArn $distribution_configuration_arn;
}

class LaunchPermissionConfiguration {
  public AccountList $user_ids;
  public StringList $user_groups;
}

class ListImagesRequest {
  public Ownership $owner;
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
}

class TagResourceResponse {
}

class InfrastructureConfigurationSummaryList {
}

class InvalidRequestException {
  public ErrorMessage $message;
}

class ComponentConfigurationList {
}

class CreateComponentRequest {
  public InlineComponentData $data;
  public Uri $uri;
  public ClientToken $client_token;
  public ResourceName $name;
  public VersionNumber $semantic_version;
  public NonEmptyString $description;
  public NonEmptyString $change_description;
  public Platform $platform;
  public NonEmptyString $kms_key_id;
  public TagMap $tags;
}

class DistributionConfigurationArn {
}

class DistributionTimeoutMinutes {
}

class ImageSummaryList {
}

class ImageTestsTimeoutMinutes {
}

class ListImageBuildVersionsRequest {
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
  public ImageVersionArn $image_version_arn;
  public FilterList $filters;
}

class ListImagesResponse {
  public NonEmptyString $request_id;
  public ImageVersionList $image_version_list;
  public NonEmptyString $next_token;
}

class Uri {
}

class PipelineStatus {
}

class ResourceName {
}

class ComponentVersionList {
}

class DistributionConfiguration {
  public DistributionList $distributions;
  public DistributionTimeoutMinutes $timeout_minutes;
  public DateTime $date_created;
  public DateTime $date_updated;
  public TagMap $tags;
  public ImageBuilderArn $arn;
  public ResourceName $name;
  public NonEmptyString $description;
}

class DistributionConfigurationSummaryList {
}

class GetImagePolicyRequest {
  public ImageBuildVersionArn $image_arn;
}

class GetImageRecipePolicyResponse {
  public NonEmptyString $request_id;
  public ResourcePolicyDocument $policy;
}

class GetImageResponse {
  public NonEmptyString $request_id;
  public Image $image;
}

class ServiceException {
  public ErrorMessage $message;
}

class StartImagePipelineExecutionRequest {
  public ImagePipelineArn $image_pipeline_arn;
  public ClientToken $client_token;
}

class TagKey {
}

class UpdateImagePipelineRequest {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public Schedule $schedule;
  public PipelineStatus $status;
  public ImagePipelineArn $image_pipeline_arn;
  public NonEmptyString $description;
  public ImageRecipeArn $image_recipe_arn;
  public ImageTestsConfiguration $image_tests_configuration;
  public NullableBoolean $enhanced_image_metadata_enabled;
  public ClientToken $client_token;
}

class DeleteImageRequest {
  public ImageBuildVersionArn $image_build_version_arn;
}

class FilterName {
}

class ImageVersionList {
}

