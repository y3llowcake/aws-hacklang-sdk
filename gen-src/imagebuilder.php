<?hh // strict
namespace slack\aws\imagebuilder;

interface imagebuilder {
  public function CancelImageCreation(CancelImageCreationRequest): Awaitable<Errors\Result<CancelImageCreationResponse>>;
  public function CreateComponent(CreateComponentRequest): Awaitable<Errors\Result<CreateComponentResponse>>;
  public function CreateDistributionConfiguration(CreateDistributionConfigurationRequest): Awaitable<Errors\Result<CreateDistributionConfigurationResponse>>;
  public function CreateImage(CreateImageRequest): Awaitable<Errors\Result<CreateImageResponse>>;
  public function CreateImagePipeline(CreateImagePipelineRequest): Awaitable<Errors\Result<CreateImagePipelineResponse>>;
  public function CreateImageRecipe(CreateImageRecipeRequest): Awaitable<Errors\Result<CreateImageRecipeResponse>>;
  public function CreateInfrastructureConfiguration(CreateInfrastructureConfigurationRequest): Awaitable<Errors\Result<CreateInfrastructureConfigurationResponse>>;
  public function DeleteComponent(DeleteComponentRequest): Awaitable<Errors\Result<DeleteComponentResponse>>;
  public function DeleteDistributionConfiguration(DeleteDistributionConfigurationRequest): Awaitable<Errors\Result<DeleteDistributionConfigurationResponse>>;
  public function DeleteImage(DeleteImageRequest): Awaitable<Errors\Result<DeleteImageResponse>>;
  public function DeleteImagePipeline(DeleteImagePipelineRequest): Awaitable<Errors\Result<DeleteImagePipelineResponse>>;
  public function DeleteImageRecipe(DeleteImageRecipeRequest): Awaitable<Errors\Result<DeleteImageRecipeResponse>>;
  public function DeleteInfrastructureConfiguration(DeleteInfrastructureConfigurationRequest): Awaitable<Errors\Result<DeleteInfrastructureConfigurationResponse>>;
  public function GetComponent(GetComponentRequest): Awaitable<Errors\Result<GetComponentResponse>>;
  public function GetComponentPolicy(GetComponentPolicyRequest): Awaitable<Errors\Result<GetComponentPolicyResponse>>;
  public function GetDistributionConfiguration(GetDistributionConfigurationRequest): Awaitable<Errors\Result<GetDistributionConfigurationResponse>>;
  public function GetImage(GetImageRequest): Awaitable<Errors\Result<GetImageResponse>>;
  public function GetImagePipeline(GetImagePipelineRequest): Awaitable<Errors\Result<GetImagePipelineResponse>>;
  public function GetImagePolicy(GetImagePolicyRequest): Awaitable<Errors\Result<GetImagePolicyResponse>>;
  public function GetImageRecipe(GetImageRecipeRequest): Awaitable<Errors\Result<GetImageRecipeResponse>>;
  public function GetImageRecipePolicy(GetImageRecipePolicyRequest): Awaitable<Errors\Result<GetImageRecipePolicyResponse>>;
  public function GetInfrastructureConfiguration(GetInfrastructureConfigurationRequest): Awaitable<Errors\Result<GetInfrastructureConfigurationResponse>>;
  public function ImportComponent(ImportComponentRequest): Awaitable<Errors\Result<ImportComponentResponse>>;
  public function ListComponentBuildVersions(ListComponentBuildVersionsRequest): Awaitable<Errors\Result<ListComponentBuildVersionsResponse>>;
  public function ListComponents(ListComponentsRequest): Awaitable<Errors\Result<ListComponentsResponse>>;
  public function ListDistributionConfigurations(ListDistributionConfigurationsRequest): Awaitable<Errors\Result<ListDistributionConfigurationsResponse>>;
  public function ListImageBuildVersions(ListImageBuildVersionsRequest): Awaitable<Errors\Result<ListImageBuildVersionsResponse>>;
  public function ListImagePipelineImages(ListImagePipelineImagesRequest): Awaitable<Errors\Result<ListImagePipelineImagesResponse>>;
  public function ListImagePipelines(ListImagePipelinesRequest): Awaitable<Errors\Result<ListImagePipelinesResponse>>;
  public function ListImageRecipes(ListImageRecipesRequest): Awaitable<Errors\Result<ListImageRecipesResponse>>;
  public function ListImages(ListImagesRequest): Awaitable<Errors\Result<ListImagesResponse>>;
  public function ListInfrastructureConfigurations(ListInfrastructureConfigurationsRequest): Awaitable<Errors\Result<ListInfrastructureConfigurationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutComponentPolicy(PutComponentPolicyRequest): Awaitable<Errors\Result<PutComponentPolicyResponse>>;
  public function PutImagePolicy(PutImagePolicyRequest): Awaitable<Errors\Result<PutImagePolicyResponse>>;
  public function PutImageRecipePolicy(PutImageRecipePolicyRequest): Awaitable<Errors\Result<PutImageRecipePolicyResponse>>;
  public function StartImagePipelineExecution(StartImagePipelineExecutionRequest): Awaitable<Errors\Result<StartImagePipelineExecutionResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDistributionConfiguration(UpdateDistributionConfigurationRequest): Awaitable<Errors\Result<UpdateDistributionConfigurationResponse>>;
  public function UpdateImagePipeline(UpdateImagePipelineRequest): Awaitable<Errors\Result<UpdateImagePipelineResponse>>;
  public function UpdateInfrastructureConfiguration(UpdateInfrastructureConfigurationRequest): Awaitable<Errors\Result<UpdateInfrastructureConfigurationResponse>>;
}

type AccountList = vec<NonEmptyString>;

class Ami {
  public NonEmptyString $description;
  public NonEmptyString $image;
  public NonEmptyString $name;
  public NonEmptyString $region;
  public ImageState $state;

  public function __construct(shape(
  ?'description' => NonEmptyString,
  ?'image' => NonEmptyString,
  ?'name' => NonEmptyString,
  ?'region' => NonEmptyString,
  ?'state' => ImageState,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->image = $image ?? ;
    $this->name = $name ?? ;
    $this->region = $region ?? ;
    $this->state = $state ?? ;
  }
}

class AmiDistributionConfiguration {
  public TagMap $ami_tags;
  public NonEmptyString $description;
  public LaunchPermissionConfiguration $launch_permission;
  public AmiNameString $name;

  public function __construct(shape(
  ?'ami_tags' => TagMap,
  ?'description' => NonEmptyString,
  ?'launch_permission' => LaunchPermissionConfiguration,
  ?'name' => AmiNameString,
  ) $s = shape()) {
    $this->ami_tags = $ami_tags ?? ;
    $this->description = $description ?? ;
    $this->launch_permission = $launch_permission ?? ;
    $this->name = $name ?? ;
  }
}

type AmiList = vec<Ami>;

type AmiNameString = string;

type Arn = string;

type ArnList = vec<Arn>;

class CallRateLimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CancelImageCreationRequest {
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'image_build_version_arn' => ImageBuildVersionArn,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->image_build_version_arn = $image_build_version_arn ?? ;
  }
}

class CancelImageCreationResponse {
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'image_build_version_arn' => ImageBuildVersionArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->image_build_version_arn = $image_build_version_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ClientException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ClientToken = string;

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

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'change_description' => NonEmptyString,
  ?'data' => ComponentData,
  ?'date_created' => DateTime,
  ?'description' => NonEmptyString,
  ?'encrypted' => NullableBoolean,
  ?'kms_key_id' => NonEmptyString,
  ?'name' => ResourceName,
  ?'owner' => NonEmptyString,
  ?'platform' => Platform,
  ?'tags' => TagMap,
  ?'type' => ComponentType,
  ?'version' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->change_description = $change_description ?? ;
    $this->data = $data ?? ;
    $this->date_created = $date_created ?? ;
    $this->description = $description ?? ;
    $this->encrypted = $encrypted ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->name = $name ?? ;
    $this->owner = $owner ?? ;
    $this->platform = $platform ?? ;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
    $this->version = $version ?? ;
  }
}

type ComponentBuildVersionArn = string;

class ComponentConfiguration {
  public ComponentVersionArnOrBuildVersionArn $component_arn;

  public function __construct(shape(
  ?'component_arn' => ComponentVersionArnOrBuildVersionArn,
  ) $s = shape()) {
    $this->component_arn = $component_arn ?? ;
  }
}

type ComponentConfigurationList = vec<ComponentConfiguration>;

type ComponentData = string;

type ComponentFormat = string;

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

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'change_description' => NonEmptyString,
  ?'date_created' => DateTime,
  ?'description' => NonEmptyString,
  ?'name' => ResourceName,
  ?'owner' => NonEmptyString,
  ?'platform' => Platform,
  ?'tags' => TagMap,
  ?'type' => ComponentType,
  ?'version' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->change_description = $change_description ?? ;
    $this->date_created = $date_created ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->owner = $owner ?? ;
    $this->platform = $platform ?? ;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
    $this->version = $version ?? ;
  }
}

type ComponentSummaryList = vec<ComponentSummary>;

type ComponentType = string;

class ComponentVersion {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public NonEmptyString $description;
  public ResourceName $name;
  public NonEmptyString $owner;
  public Platform $platform;
  public ComponentType $type;
  public VersionNumber $version;

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'description' => NonEmptyString,
  ?'name' => ResourceName,
  ?'owner' => NonEmptyString,
  ?'platform' => Platform,
  ?'type' => ComponentType,
  ?'version' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->owner = $owner ?? ;
    $this->platform = $platform ?? ;
    $this->type = $type ?? ;
    $this->version = $version ?? ;
  }
}

type ComponentVersionArn = string;

type ComponentVersionArnOrBuildVersionArn = string;

type ComponentVersionList = vec<ComponentVersion>;

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

  public function __construct(shape(
  ?'change_description' => NonEmptyString,
  ?'client_token' => ClientToken,
  ?'data' => InlineComponentData,
  ?'description' => NonEmptyString,
  ?'kms_key_id' => NonEmptyString,
  ?'name' => ResourceName,
  ?'platform' => Platform,
  ?'semantic_version' => VersionNumber,
  ?'tags' => TagMap,
  ?'uri' => Uri,
  ) $s = shape()) {
    $this->change_description = $change_description ?? ;
    $this->client_token = $client_token ?? ;
    $this->data = $data ?? ;
    $this->description = $description ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->name = $name ?? ;
    $this->platform = $platform ?? ;
    $this->semantic_version = $semantic_version ?? ;
    $this->tags = $tags ?? ;
    $this->uri = $uri ?? ;
  }
}

class CreateComponentResponse {
  public ClientToken $client_token;
  public ComponentBuildVersionArn $component_build_version_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'component_build_version_arn' => ComponentBuildVersionArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->component_build_version_arn = $component_build_version_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class CreateDistributionConfigurationRequest {
  public ClientToken $client_token;
  public NonEmptyString $description;
  public DistributionList $distributions;
  public ResourceName $name;
  public TagMap $tags;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'description' => NonEmptyString,
  ?'distributions' => DistributionList,
  ?'name' => ResourceName,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->description = $description ?? ;
    $this->distributions = $distributions ?? ;
    $this->name = $name ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateDistributionConfigurationResponse {
  public ClientToken $client_token;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'distribution_configuration_arn' => DistributionConfigurationArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
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

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'description' => NonEmptyString,
  ?'distribution_configuration_arn' => DistributionConfigurationArn,
  ?'enhanced_image_metadata_enabled' => NullableBoolean,
  ?'image_recipe_arn' => ImageRecipeArn,
  ?'image_tests_configuration' => ImageTestsConfiguration,
  ?'infrastructure_configuration_arn' => InfrastructureConfigurationArn,
  ?'name' => ResourceName,
  ?'schedule' => Schedule,
  ?'status' => PipelineStatus,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->description = $description ?? ;
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
    $this->enhanced_image_metadata_enabled = $enhanced_image_metadata_enabled ?? ;
    $this->image_recipe_arn = $image_recipe_arn ?? ;
    $this->image_tests_configuration = $image_tests_configuration ?? ;
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
    $this->name = $name ?? ;
    $this->schedule = $schedule ?? ;
    $this->status = $status ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateImagePipelineResponse {
  public ClientToken $client_token;
  public ImagePipelineArn $image_pipeline_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'image_pipeline_arn' => ImagePipelineArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->image_pipeline_arn = $image_pipeline_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
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

  public function __construct(shape(
  ?'block_device_mappings' => InstanceBlockDeviceMappings,
  ?'client_token' => ClientToken,
  ?'components' => ComponentConfigurationList,
  ?'description' => NonEmptyString,
  ?'name' => ResourceName,
  ?'parent_image' => NonEmptyString,
  ?'semantic_version' => VersionNumber,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->block_device_mappings = $block_device_mappings ?? ;
    $this->client_token = $client_token ?? ;
    $this->components = $components ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->parent_image = $parent_image ?? ;
    $this->semantic_version = $semantic_version ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateImageRecipeResponse {
  public ClientToken $client_token;
  public ImageRecipeArn $image_recipe_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'image_recipe_arn' => ImageRecipeArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->image_recipe_arn = $image_recipe_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class CreateImageRequest {
  public ClientToken $client_token;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NullableBoolean $enhanced_image_metadata_enabled;
  public ImageRecipeArn $image_recipe_arn;
  public ImageTestsConfiguration $image_tests_configuration;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'distribution_configuration_arn' => DistributionConfigurationArn,
  ?'enhanced_image_metadata_enabled' => NullableBoolean,
  ?'image_recipe_arn' => ImageRecipeArn,
  ?'image_tests_configuration' => ImageTestsConfiguration,
  ?'infrastructure_configuration_arn' => InfrastructureConfigurationArn,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
    $this->enhanced_image_metadata_enabled = $enhanced_image_metadata_enabled ?? ;
    $this->image_recipe_arn = $image_recipe_arn ?? ;
    $this->image_tests_configuration = $image_tests_configuration ?? ;
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateImageResponse {
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'image_build_version_arn' => ImageBuildVersionArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->image_build_version_arn = $image_build_version_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
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

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'description' => NonEmptyString,
  ?'instance_profile_name' => NonEmptyString,
  ?'instance_types' => InstanceTypeList,
  ?'key_pair' => NonEmptyString,
  ?'logging' => Logging,
  ?'name' => ResourceName,
  ?'security_group_ids' => SecurityGroupIds,
  ?'sns_topic_arn' => SnsTopicArn,
  ?'subnet_id' => NonEmptyString,
  ?'tags' => TagMap,
  ?'terminate_instance_on_failure' => NullableBoolean,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->description = $description ?? ;
    $this->instance_profile_name = $instance_profile_name ?? ;
    $this->instance_types = $instance_types ?? ;
    $this->key_pair = $key_pair ?? ;
    $this->logging = $logging ?? ;
    $this->name = $name ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->sns_topic_arn = $sns_topic_arn ?? ;
    $this->subnet_id = $subnet_id ?? ;
    $this->tags = $tags ?? ;
    $this->terminate_instance_on_failure = $terminate_instance_on_failure ?? ;
  }
}

class CreateInfrastructureConfigurationResponse {
  public ClientToken $client_token;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'infrastructure_configuration_arn' => InfrastructureConfigurationArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

type DateTime = string;

class DeleteComponentRequest {
  public ComponentBuildVersionArn $component_build_version_arn;

  public function __construct(shape(
  ?'component_build_version_arn' => ComponentBuildVersionArn,
  ) $s = shape()) {
    $this->component_build_version_arn = $component_build_version_arn ?? ;
  }
}

class DeleteComponentResponse {
  public ComponentBuildVersionArn $component_build_version_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'component_build_version_arn' => ComponentBuildVersionArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->component_build_version_arn = $component_build_version_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class DeleteDistributionConfigurationRequest {
  public DistributionConfigurationArn $distribution_configuration_arn;

  public function __construct(shape(
  ?'distribution_configuration_arn' => DistributionConfigurationArn,
  ) $s = shape()) {
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
  }
}

class DeleteDistributionConfigurationResponse {
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'distribution_configuration_arn' => DistributionConfigurationArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class DeleteImagePipelineRequest {
  public ImagePipelineArn $image_pipeline_arn;

  public function __construct(shape(
  ?'image_pipeline_arn' => ImagePipelineArn,
  ) $s = shape()) {
    $this->image_pipeline_arn = $image_pipeline_arn ?? ;
  }
}

class DeleteImagePipelineResponse {
  public ImagePipelineArn $image_pipeline_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_pipeline_arn' => ImagePipelineArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_pipeline_arn = $image_pipeline_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class DeleteImageRecipeRequest {
  public ImageRecipeArn $image_recipe_arn;

  public function __construct(shape(
  ?'image_recipe_arn' => ImageRecipeArn,
  ) $s = shape()) {
    $this->image_recipe_arn = $image_recipe_arn ?? ;
  }
}

class DeleteImageRecipeResponse {
  public ImageRecipeArn $image_recipe_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_recipe_arn' => ImageRecipeArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_recipe_arn = $image_recipe_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class DeleteImageRequest {
  public ImageBuildVersionArn $image_build_version_arn;

  public function __construct(shape(
  ?'image_build_version_arn' => ImageBuildVersionArn,
  ) $s = shape()) {
    $this->image_build_version_arn = $image_build_version_arn ?? ;
  }
}

class DeleteImageResponse {
  public ImageBuildVersionArn $image_build_version_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_build_version_arn' => ImageBuildVersionArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_build_version_arn = $image_build_version_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class DeleteInfrastructureConfigurationRequest {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;

  public function __construct(shape(
  ?'infrastructure_configuration_arn' => InfrastructureConfigurationArn,
  ) $s = shape()) {
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
  }
}

class DeleteInfrastructureConfigurationResponse {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'infrastructure_configuration_arn' => InfrastructureConfigurationArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class Distribution {
  public AmiDistributionConfiguration $ami_distribution_configuration;
  public ArnList $license_configuration_arns;
  public NonEmptyString $region;

  public function __construct(shape(
  ?'ami_distribution_configuration' => AmiDistributionConfiguration,
  ?'license_configuration_arns' => ArnList,
  ?'region' => NonEmptyString,
  ) $s = shape()) {
    $this->ami_distribution_configuration = $ami_distribution_configuration ?? ;
    $this->license_configuration_arns = $license_configuration_arns ?? ;
    $this->region = $region ?? ;
  }
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

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'date_updated' => DateTime,
  ?'description' => NonEmptyString,
  ?'distributions' => DistributionList,
  ?'name' => ResourceName,
  ?'tags' => TagMap,
  ?'timeout_minutes' => DistributionTimeoutMinutes,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->date_updated = $date_updated ?? ;
    $this->description = $description ?? ;
    $this->distributions = $distributions ?? ;
    $this->name = $name ?? ;
    $this->tags = $tags ?? ;
    $this->timeout_minutes = $timeout_minutes ?? ;
  }
}

type DistributionConfigurationArn = string;

class DistributionConfigurationSummary {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public DateTime $date_updated;
  public NonEmptyString $description;
  public ResourceName $name;
  public TagMap $tags;

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'date_updated' => DateTime,
  ?'description' => NonEmptyString,
  ?'name' => ResourceName,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->date_updated = $date_updated ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->tags = $tags ?? ;
  }
}

type DistributionConfigurationSummaryList = vec<DistributionConfigurationSummary>;

type DistributionList = vec<Distribution>;

type DistributionTimeoutMinutes = int;

class EbsInstanceBlockDeviceSpecification {
  public NullableBoolean $delete_on_termination;
  public NullableBoolean $encrypted;
  public EbsIopsInteger $iops;
  public NonEmptyString $kms_key_id;
  public NonEmptyString $snapshot_id;
  public EbsVolumeSizeInteger $volume_size;
  public EbsVolumeType $volume_type;

  public function __construct(shape(
  ?'delete_on_termination' => NullableBoolean,
  ?'encrypted' => NullableBoolean,
  ?'iops' => EbsIopsInteger,
  ?'kms_key_id' => NonEmptyString,
  ?'snapshot_id' => NonEmptyString,
  ?'volume_size' => EbsVolumeSizeInteger,
  ?'volume_type' => EbsVolumeType,
  ) $s = shape()) {
    $this->delete_on_termination = $delete_on_termination ?? ;
    $this->encrypted = $encrypted ?? ;
    $this->iops = $iops ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->snapshot_id = $snapshot_id ?? ;
    $this->volume_size = $volume_size ?? ;
    $this->volume_type = $volume_type ?? ;
  }
}

type EbsIopsInteger = int;

type EbsVolumeSizeInteger = int;

type EbsVolumeType = string;

type EmptyString = string;

type ErrorMessage = string;

class Filter {
  public FilterName $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'name' => FilterName,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->values = $values ?? ;
  }
}

type FilterList = vec<Filter>;

type FilterName = string;

type FilterValue = string;

type FilterValues = vec<FilterValue>;

class ForbiddenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class GetComponentPolicyRequest {
  public ComponentBuildVersionArn $component_arn;

  public function __construct(shape(
  ?'component_arn' => ComponentBuildVersionArn,
  ) $s = shape()) {
    $this->component_arn = $component_arn ?? ;
  }
}

class GetComponentPolicyResponse {
  public ResourcePolicyDocument $policy;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'policy' => ResourcePolicyDocument,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class GetComponentRequest {
  public ComponentBuildVersionArn $component_build_version_arn;

  public function __construct(shape(
  ?'component_build_version_arn' => ComponentBuildVersionArn,
  ) $s = shape()) {
    $this->component_build_version_arn = $component_build_version_arn ?? ;
  }
}

class GetComponentResponse {
  public Component $component;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'component' => Component,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->component = $component ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class GetDistributionConfigurationRequest {
  public DistributionConfigurationArn $distribution_configuration_arn;

  public function __construct(shape(
  ?'distribution_configuration_arn' => DistributionConfigurationArn,
  ) $s = shape()) {
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
  }
}

class GetDistributionConfigurationResponse {
  public DistributionConfiguration $distribution_configuration;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'distribution_configuration' => DistributionConfiguration,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->distribution_configuration = $distribution_configuration ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class GetImagePipelineRequest {
  public ImagePipelineArn $image_pipeline_arn;

  public function __construct(shape(
  ?'image_pipeline_arn' => ImagePipelineArn,
  ) $s = shape()) {
    $this->image_pipeline_arn = $image_pipeline_arn ?? ;
  }
}

class GetImagePipelineResponse {
  public ImagePipeline $image_pipeline;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_pipeline' => ImagePipeline,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_pipeline = $image_pipeline ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class GetImagePolicyRequest {
  public ImageBuildVersionArn $image_arn;

  public function __construct(shape(
  ?'image_arn' => ImageBuildVersionArn,
  ) $s = shape()) {
    $this->image_arn = $image_arn ?? ;
  }
}

class GetImagePolicyResponse {
  public ResourcePolicyDocument $policy;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'policy' => ResourcePolicyDocument,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class GetImageRecipePolicyRequest {
  public ImageRecipeArn $image_recipe_arn;

  public function __construct(shape(
  ?'image_recipe_arn' => ImageRecipeArn,
  ) $s = shape()) {
    $this->image_recipe_arn = $image_recipe_arn ?? ;
  }
}

class GetImageRecipePolicyResponse {
  public ResourcePolicyDocument $policy;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'policy' => ResourcePolicyDocument,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class GetImageRecipeRequest {
  public ImageRecipeArn $image_recipe_arn;

  public function __construct(shape(
  ?'image_recipe_arn' => ImageRecipeArn,
  ) $s = shape()) {
    $this->image_recipe_arn = $image_recipe_arn ?? ;
  }
}

class GetImageRecipeResponse {
  public ImageRecipe $image_recipe;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_recipe' => ImageRecipe,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_recipe = $image_recipe ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class GetImageRequest {
  public ImageBuildVersionArn $image_build_version_arn;

  public function __construct(shape(
  ?'image_build_version_arn' => ImageBuildVersionArn,
  ) $s = shape()) {
    $this->image_build_version_arn = $image_build_version_arn ?? ;
  }
}

class GetImageResponse {
  public Image $image;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image' => Image,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image = $image ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class GetInfrastructureConfigurationRequest {
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;

  public function __construct(shape(
  ?'infrastructure_configuration_arn' => InfrastructureConfigurationArn,
  ) $s = shape()) {
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
  }
}

class GetInfrastructureConfigurationResponse {
  public InfrastructureConfiguration $infrastructure_configuration;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'infrastructure_configuration' => InfrastructureConfiguration,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->infrastructure_configuration = $infrastructure_configuration ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class IdempotentParameterMismatchException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
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

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'distribution_configuration' => DistributionConfiguration,
  ?'enhanced_image_metadata_enabled' => NullableBoolean,
  ?'image_recipe' => ImageRecipe,
  ?'image_tests_configuration' => ImageTestsConfiguration,
  ?'infrastructure_configuration' => InfrastructureConfiguration,
  ?'name' => ResourceName,
  ?'os_version' => OsVersion,
  ?'output_resources' => OutputResources,
  ?'platform' => Platform,
  ?'source_pipeline_arn' => Arn,
  ?'source_pipeline_name' => ResourceName,
  ?'state' => ImageState,
  ?'tags' => TagMap,
  ?'version' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->distribution_configuration = $distribution_configuration ?? ;
    $this->enhanced_image_metadata_enabled = $enhanced_image_metadata_enabled ?? ;
    $this->image_recipe = $image_recipe ?? ;
    $this->image_tests_configuration = $image_tests_configuration ?? ;
    $this->infrastructure_configuration = $infrastructure_configuration ?? ;
    $this->name = $name ?? ;
    $this->os_version = $os_version ?? ;
    $this->output_resources = $output_resources ?? ;
    $this->platform = $platform ?? ;
    $this->source_pipeline_arn = $source_pipeline_arn ?? ;
    $this->source_pipeline_name = $source_pipeline_name ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? ;
    $this->version = $version ?? ;
  }
}

type ImageBuildVersionArn = string;

type ImageBuilderArn = string;

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

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'date_last_run' => DateTime,
  ?'date_next_run' => DateTime,
  ?'date_updated' => DateTime,
  ?'description' => NonEmptyString,
  ?'distribution_configuration_arn' => Arn,
  ?'enhanced_image_metadata_enabled' => NullableBoolean,
  ?'image_recipe_arn' => Arn,
  ?'image_tests_configuration' => ImageTestsConfiguration,
  ?'infrastructure_configuration_arn' => Arn,
  ?'name' => ResourceName,
  ?'platform' => Platform,
  ?'schedule' => Schedule,
  ?'status' => PipelineStatus,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->date_last_run = $date_last_run ?? ;
    $this->date_next_run = $date_next_run ?? ;
    $this->date_updated = $date_updated ?? ;
    $this->description = $description ?? ;
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
    $this->enhanced_image_metadata_enabled = $enhanced_image_metadata_enabled ?? ;
    $this->image_recipe_arn = $image_recipe_arn ?? ;
    $this->image_tests_configuration = $image_tests_configuration ?? ;
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
    $this->name = $name ?? ;
    $this->platform = $platform ?? ;
    $this->schedule = $schedule ?? ;
    $this->status = $status ?? ;
    $this->tags = $tags ?? ;
  }
}

type ImagePipelineArn = string;

type ImagePipelineList = vec<ImagePipeline>;

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

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'block_device_mappings' => InstanceBlockDeviceMappings,
  ?'components' => ComponentConfigurationList,
  ?'date_created' => DateTime,
  ?'description' => NonEmptyString,
  ?'name' => ResourceName,
  ?'owner' => NonEmptyString,
  ?'parent_image' => NonEmptyString,
  ?'platform' => Platform,
  ?'tags' => TagMap,
  ?'version' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->block_device_mappings = $block_device_mappings ?? ;
    $this->components = $components ?? ;
    $this->date_created = $date_created ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->owner = $owner ?? ;
    $this->parent_image = $parent_image ?? ;
    $this->platform = $platform ?? ;
    $this->tags = $tags ?? ;
    $this->version = $version ?? ;
  }
}

type ImageRecipeArn = string;

class ImageRecipeSummary {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public ResourceName $name;
  public NonEmptyString $owner;
  public NonEmptyString $parent_image;
  public Platform $platform;
  public TagMap $tags;

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'name' => ResourceName,
  ?'owner' => NonEmptyString,
  ?'parent_image' => NonEmptyString,
  ?'platform' => Platform,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->name = $name ?? ;
    $this->owner = $owner ?? ;
    $this->parent_image = $parent_image ?? ;
    $this->platform = $platform ?? ;
    $this->tags = $tags ?? ;
  }
}

type ImageRecipeSummaryList = vec<ImageRecipeSummary>;

class ImageState {
  public NonEmptyString $reason;
  public ImageStatus $status;

  public function __construct(shape(
  ?'reason' => NonEmptyString,
  ?'status' => ImageStatus,
  ) $s = shape()) {
    $this->reason = $reason ?? ;
    $this->status = $status ?? ;
  }
}

type ImageStatus = string;

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

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'name' => ResourceName,
  ?'os_version' => OsVersion,
  ?'output_resources' => OutputResources,
  ?'owner' => NonEmptyString,
  ?'platform' => Platform,
  ?'state' => ImageState,
  ?'tags' => TagMap,
  ?'version' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->name = $name ?? ;
    $this->os_version = $os_version ?? ;
    $this->output_resources = $output_resources ?? ;
    $this->owner = $owner ?? ;
    $this->platform = $platform ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? ;
    $this->version = $version ?? ;
  }
}

type ImageSummaryList = vec<ImageSummary>;

class ImageTestsConfiguration {
  public NullableBoolean $image_tests_enabled;
  public ImageTestsTimeoutMinutes $timeout_minutes;

  public function __construct(shape(
  ?'image_tests_enabled' => NullableBoolean,
  ?'timeout_minutes' => ImageTestsTimeoutMinutes,
  ) $s = shape()) {
    $this->image_tests_enabled = $image_tests_enabled ?? ;
    $this->timeout_minutes = $timeout_minutes ?? ;
  }
}

type ImageTestsTimeoutMinutes = int;

class ImageVersion {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public ResourceName $name;
  public OsVersion $os_version;
  public NonEmptyString $owner;
  public Platform $platform;
  public VersionNumber $version;

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'name' => ResourceName,
  ?'os_version' => OsVersion,
  ?'owner' => NonEmptyString,
  ?'platform' => Platform,
  ?'version' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->name = $name ?? ;
    $this->os_version = $os_version ?? ;
    $this->owner = $owner ?? ;
    $this->platform = $platform ?? ;
    $this->version = $version ?? ;
  }
}

type ImageVersionArn = string;

type ImageVersionList = vec<ImageVersion>;

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

  public function __construct(shape(
  ?'change_description' => NonEmptyString,
  ?'client_token' => ClientToken,
  ?'data' => NonEmptyString,
  ?'description' => NonEmptyString,
  ?'format' => ComponentFormat,
  ?'kms_key_id' => NonEmptyString,
  ?'name' => ResourceName,
  ?'platform' => Platform,
  ?'semantic_version' => VersionNumber,
  ?'tags' => TagMap,
  ?'type' => ComponentType,
  ?'uri' => Uri,
  ) $s = shape()) {
    $this->change_description = $change_description ?? ;
    $this->client_token = $client_token ?? ;
    $this->data = $data ?? ;
    $this->description = $description ?? ;
    $this->format = $format ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->name = $name ?? ;
    $this->platform = $platform ?? ;
    $this->semantic_version = $semantic_version ?? ;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
    $this->uri = $uri ?? ;
  }
}

class ImportComponentResponse {
  public ClientToken $client_token;
  public ComponentBuildVersionArn $component_build_version_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'component_build_version_arn' => ComponentBuildVersionArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->component_build_version_arn = $component_build_version_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
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

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'date_updated' => DateTime,
  ?'description' => NonEmptyString,
  ?'instance_profile_name' => NonEmptyString,
  ?'instance_types' => InstanceTypeList,
  ?'key_pair' => NonEmptyString,
  ?'logging' => Logging,
  ?'name' => ResourceName,
  ?'security_group_ids' => SecurityGroupIds,
  ?'sns_topic_arn' => NonEmptyString,
  ?'subnet_id' => NonEmptyString,
  ?'tags' => TagMap,
  ?'terminate_instance_on_failure' => NullableBoolean,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->date_updated = $date_updated ?? ;
    $this->description = $description ?? ;
    $this->instance_profile_name = $instance_profile_name ?? ;
    $this->instance_types = $instance_types ?? ;
    $this->key_pair = $key_pair ?? ;
    $this->logging = $logging ?? ;
    $this->name = $name ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->sns_topic_arn = $sns_topic_arn ?? ;
    $this->subnet_id = $subnet_id ?? ;
    $this->tags = $tags ?? ;
    $this->terminate_instance_on_failure = $terminate_instance_on_failure ?? ;
  }
}

type InfrastructureConfigurationArn = string;

class InfrastructureConfigurationSummary {
  public ImageBuilderArn $arn;
  public DateTime $date_created;
  public DateTime $date_updated;
  public NonEmptyString $description;
  public ResourceName $name;
  public TagMap $tags;

  public function __construct(shape(
  ?'arn' => ImageBuilderArn,
  ?'date_created' => DateTime,
  ?'date_updated' => DateTime,
  ?'description' => NonEmptyString,
  ?'name' => ResourceName,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->date_created = $date_created ?? ;
    $this->date_updated = $date_updated ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->tags = $tags ?? ;
  }
}

type InfrastructureConfigurationSummaryList = vec<InfrastructureConfigurationSummary>;

type InlineComponentData = string;

class InstanceBlockDeviceMapping {
  public NonEmptyString $device_name;
  public EbsInstanceBlockDeviceSpecification $ebs;
  public EmptyString $no_device;
  public NonEmptyString $virtual_name;

  public function __construct(shape(
  ?'device_name' => NonEmptyString,
  ?'ebs' => EbsInstanceBlockDeviceSpecification,
  ?'no_device' => EmptyString,
  ?'virtual_name' => NonEmptyString,
  ) $s = shape()) {
    $this->device_name = $device_name ?? ;
    $this->ebs = $ebs ?? ;
    $this->no_device = $no_device ?? ;
    $this->virtual_name = $virtual_name ?? ;
  }
}

type InstanceBlockDeviceMappings = vec<InstanceBlockDeviceMapping>;

type InstanceType = string;

type InstanceTypeList = vec<InstanceType>;

class InvalidPaginationTokenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterCombinationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterValueException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidVersionNumberException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class LaunchPermissionConfiguration {
  public StringList $user_groups;
  public AccountList $user_ids;

  public function __construct(shape(
  ?'user_groups' => StringList,
  ?'user_ids' => AccountList,
  ) $s = shape()) {
    $this->user_groups = $user_groups ?? ;
    $this->user_ids = $user_ids ?? ;
  }
}

class ListComponentBuildVersionsRequest {
  public ComponentVersionArn $component_version_arn;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;

  public function __construct(shape(
  ?'component_version_arn' => ComponentVersionArn,
  ?'max_results' => RestrictedInteger,
  ?'next_token' => NonEmptyString,
  ) $s = shape()) {
    $this->component_version_arn = $component_version_arn ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListComponentBuildVersionsResponse {
  public ComponentSummaryList $component_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'component_summary_list' => ComponentSummaryList,
  ?'next_token' => NonEmptyString,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->component_summary_list = $component_summary_list ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ListComponentsRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
  public Ownership $owner;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => RestrictedInteger,
  ?'next_token' => NonEmptyString,
  ?'owner' => Ownership,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->owner = $owner ?? ;
  }
}

class ListComponentsResponse {
  public ComponentVersionList $component_version_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'component_version_list' => ComponentVersionList,
  ?'next_token' => NonEmptyString,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->component_version_list = $component_version_list ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ListDistributionConfigurationsRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => RestrictedInteger,
  ?'next_token' => NonEmptyString,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDistributionConfigurationsResponse {
  public DistributionConfigurationSummaryList $distribution_configuration_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'distribution_configuration_summary_list' => DistributionConfigurationSummaryList,
  ?'next_token' => NonEmptyString,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->distribution_configuration_summary_list = $distribution_configuration_summary_list ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ListImageBuildVersionsRequest {
  public FilterList $filters;
  public ImageVersionArn $image_version_arn;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'image_version_arn' => ImageVersionArn,
  ?'max_results' => RestrictedInteger,
  ?'next_token' => NonEmptyString,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->image_version_arn = $image_version_arn ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListImageBuildVersionsResponse {
  public ImageSummaryList $image_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_summary_list' => ImageSummaryList,
  ?'next_token' => NonEmptyString,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_summary_list = $image_summary_list ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ListImagePipelineImagesRequest {
  public FilterList $filters;
  public ImagePipelineArn $image_pipeline_arn;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'image_pipeline_arn' => ImagePipelineArn,
  ?'max_results' => RestrictedInteger,
  ?'next_token' => NonEmptyString,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->image_pipeline_arn = $image_pipeline_arn ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListImagePipelineImagesResponse {
  public ImageSummaryList $image_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_summary_list' => ImageSummaryList,
  ?'next_token' => NonEmptyString,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_summary_list = $image_summary_list ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ListImagePipelinesRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => RestrictedInteger,
  ?'next_token' => NonEmptyString,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListImagePipelinesResponse {
  public ImagePipelineList $image_pipeline_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_pipeline_list' => ImagePipelineList,
  ?'next_token' => NonEmptyString,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_pipeline_list = $image_pipeline_list ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ListImageRecipesRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
  public Ownership $owner;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => RestrictedInteger,
  ?'next_token' => NonEmptyString,
  ?'owner' => Ownership,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->owner = $owner ?? ;
  }
}

class ListImageRecipesResponse {
  public ImageRecipeSummaryList $image_recipe_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_recipe_summary_list' => ImageRecipeSummaryList,
  ?'next_token' => NonEmptyString,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_recipe_summary_list = $image_recipe_summary_list ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ListImagesRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;
  public Ownership $owner;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => RestrictedInteger,
  ?'next_token' => NonEmptyString,
  ?'owner' => Ownership,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->owner = $owner ?? ;
  }
}

class ListImagesResponse {
  public ImageVersionList $image_version_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_version_list' => ImageVersionList,
  ?'next_token' => NonEmptyString,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_version_list = $image_version_list ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ListInfrastructureConfigurationsRequest {
  public FilterList $filters;
  public RestrictedInteger $max_results;
  public NonEmptyString $next_token;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => RestrictedInteger,
  ?'next_token' => NonEmptyString,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListInfrastructureConfigurationsResponse {
  public InfrastructureConfigurationSummaryList $infrastructure_configuration_summary_list;
  public NonEmptyString $next_token;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'infrastructure_configuration_summary_list' => InfrastructureConfigurationSummaryList,
  ?'next_token' => NonEmptyString,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->infrastructure_configuration_summary_list = $infrastructure_configuration_summary_list ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ListTagsForResourceRequest {
  public ImageBuilderArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ImageBuilderArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

class Logging {
  public S3Logs $s_3_logs;

  public function __construct(shape(
  ?'s_3_logs' => S3Logs,
  ) $s = shape()) {
    $this->s_3_logs = $s_3_logs ?? ;
  }
}

type NonEmptyString = string;

type NullableBoolean = bool;

type OsVersion = string;

class OutputResources {
  public AmiList $amis;

  public function __construct(shape(
  ?'amis' => AmiList,
  ) $s = shape()) {
    $this->amis = $amis ?? ;
  }
}

type Ownership = string;

type PipelineExecutionStartCondition = string;

type PipelineStatus = string;

type Platform = string;

class PutComponentPolicyRequest {
  public ComponentBuildVersionArn $component_arn;
  public ResourcePolicyDocument $policy;

  public function __construct(shape(
  ?'component_arn' => ComponentBuildVersionArn,
  ?'policy' => ResourcePolicyDocument,
  ) $s = shape()) {
    $this->component_arn = $component_arn ?? ;
    $this->policy = $policy ?? ;
  }
}

class PutComponentPolicyResponse {
  public ComponentBuildVersionArn $component_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'component_arn' => ComponentBuildVersionArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->component_arn = $component_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class PutImagePolicyRequest {
  public ImageBuildVersionArn $image_arn;
  public ResourcePolicyDocument $policy;

  public function __construct(shape(
  ?'image_arn' => ImageBuildVersionArn,
  ?'policy' => ResourcePolicyDocument,
  ) $s = shape()) {
    $this->image_arn = $image_arn ?? ;
    $this->policy = $policy ?? ;
  }
}

class PutImagePolicyResponse {
  public ImageBuildVersionArn $image_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_arn' => ImageBuildVersionArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_arn = $image_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class PutImageRecipePolicyRequest {
  public ImageRecipeArn $image_recipe_arn;
  public ResourcePolicyDocument $policy;

  public function __construct(shape(
  ?'image_recipe_arn' => ImageRecipeArn,
  ?'policy' => ResourcePolicyDocument,
  ) $s = shape()) {
    $this->image_recipe_arn = $image_recipe_arn ?? ;
    $this->policy = $policy ?? ;
  }
}

class PutImageRecipePolicyResponse {
  public ImageRecipeArn $image_recipe_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'image_recipe_arn' => ImageRecipeArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->image_recipe_arn = $image_recipe_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceDependencyException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceInUseException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ResourceName = string;

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ResourcePolicyDocument = string;

type RestrictedInteger = int;

class S3Logs {
  public NonEmptyString $s_3_bucket_name;
  public NonEmptyString $s_3_key_prefix;

  public function __construct(shape(
  ?'s_3_bucket_name' => NonEmptyString,
  ?'s_3_key_prefix' => NonEmptyString,
  ) $s = shape()) {
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? ;
  }
}

class Schedule {
  public PipelineExecutionStartCondition $pipeline_execution_start_condition;
  public NonEmptyString $schedule_expression;

  public function __construct(shape(
  ?'pipeline_execution_start_condition' => PipelineExecutionStartCondition,
  ?'schedule_expression' => NonEmptyString,
  ) $s = shape()) {
    $this->pipeline_execution_start_condition = $pipeline_execution_start_condition ?? ;
    $this->schedule_expression = $schedule_expression ?? ;
  }
}

type SecurityGroupIds = vec<NonEmptyString>;

class ServiceException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ServiceUnavailableException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type SnsTopicArn = string;

class StartImagePipelineExecutionRequest {
  public ClientToken $client_token;
  public ImagePipelineArn $image_pipeline_arn;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'image_pipeline_arn' => ImagePipelineArn,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->image_pipeline_arn = $image_pipeline_arn ?? ;
  }
}

class StartImagePipelineExecutionResponse {
  public ClientToken $client_token;
  public ImageBuildVersionArn $image_build_version_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'image_build_version_arn' => ImageBuildVersionArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->image_build_version_arn = $image_build_version_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

type StringList = vec<NonEmptyString>;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ImageBuilderArn $resource_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn' => ImageBuilderArn,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class UntagResourceRequest {
  public ImageBuilderArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ImageBuilderArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDistributionConfigurationRequest {
  public ClientToken $client_token;
  public NonEmptyString $description;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public DistributionList $distributions;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'description' => NonEmptyString,
  ?'distribution_configuration_arn' => DistributionConfigurationArn,
  ?'distributions' => DistributionList,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->description = $description ?? ;
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
    $this->distributions = $distributions ?? ;
  }
}

class UpdateDistributionConfigurationResponse {
  public ClientToken $client_token;
  public DistributionConfigurationArn $distribution_configuration_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'distribution_configuration_arn' => DistributionConfigurationArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
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

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'description' => NonEmptyString,
  ?'distribution_configuration_arn' => DistributionConfigurationArn,
  ?'enhanced_image_metadata_enabled' => NullableBoolean,
  ?'image_pipeline_arn' => ImagePipelineArn,
  ?'image_recipe_arn' => ImageRecipeArn,
  ?'image_tests_configuration' => ImageTestsConfiguration,
  ?'infrastructure_configuration_arn' => InfrastructureConfigurationArn,
  ?'schedule' => Schedule,
  ?'status' => PipelineStatus,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->description = $description ?? ;
    $this->distribution_configuration_arn = $distribution_configuration_arn ?? ;
    $this->enhanced_image_metadata_enabled = $enhanced_image_metadata_enabled ?? ;
    $this->image_pipeline_arn = $image_pipeline_arn ?? ;
    $this->image_recipe_arn = $image_recipe_arn ?? ;
    $this->image_tests_configuration = $image_tests_configuration ?? ;
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
    $this->schedule = $schedule ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateImagePipelineResponse {
  public ClientToken $client_token;
  public ImagePipelineArn $image_pipeline_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'image_pipeline_arn' => ImagePipelineArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->image_pipeline_arn = $image_pipeline_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
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

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'description' => NonEmptyString,
  ?'infrastructure_configuration_arn' => InfrastructureConfigurationArn,
  ?'instance_profile_name' => NonEmptyString,
  ?'instance_types' => InstanceTypeList,
  ?'key_pair' => NonEmptyString,
  ?'logging' => Logging,
  ?'security_group_ids' => SecurityGroupIds,
  ?'sns_topic_arn' => SnsTopicArn,
  ?'subnet_id' => NonEmptyString,
  ?'terminate_instance_on_failure' => NullableBoolean,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->description = $description ?? ;
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
    $this->instance_profile_name = $instance_profile_name ?? ;
    $this->instance_types = $instance_types ?? ;
    $this->key_pair = $key_pair ?? ;
    $this->logging = $logging ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->sns_topic_arn = $sns_topic_arn ?? ;
    $this->subnet_id = $subnet_id ?? ;
    $this->terminate_instance_on_failure = $terminate_instance_on_failure ?? ;
  }
}

class UpdateInfrastructureConfigurationResponse {
  public ClientToken $client_token;
  public InfrastructureConfigurationArn $infrastructure_configuration_arn;
  public NonEmptyString $request_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'infrastructure_configuration_arn' => InfrastructureConfigurationArn,
  ?'request_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->infrastructure_configuration_arn = $infrastructure_configuration_arn ?? ;
    $this->request_id = $request_id ?? ;
  }
}

type Uri = string;

type VersionNumber = string;

