<?hh // strict
namespace slack\aws\appstream2;

interface AppStream {
  public function AssociateFleet(AssociateFleetRequest): Awaitable<Errors\Result<AssociateFleetResult>>;
  public function BatchAssociateUserStack(BatchAssociateUserStackRequest): Awaitable<Errors\Result<BatchAssociateUserStackResult>>;
  public function BatchDisassociateUserStack(BatchDisassociateUserStackRequest): Awaitable<Errors\Result<BatchDisassociateUserStackResult>>;
  public function CopyImage(CopyImageRequest): Awaitable<Errors\Result<CopyImageResponse>>;
  public function CreateDirectoryConfig(CreateDirectoryConfigRequest): Awaitable<Errors\Result<CreateDirectoryConfigResult>>;
  public function CreateFleet(CreateFleetRequest): Awaitable<Errors\Result<CreateFleetResult>>;
  public function CreateImageBuilder(CreateImageBuilderRequest): Awaitable<Errors\Result<CreateImageBuilderResult>>;
  public function CreateImageBuilderStreamingURL(CreateImageBuilderStreamingURLRequest): Awaitable<Errors\Result<CreateImageBuilderStreamingURLResult>>;
  public function CreateStack(CreateStackRequest): Awaitable<Errors\Result<CreateStackResult>>;
  public function CreateStreamingURL(CreateStreamingURLRequest): Awaitable<Errors\Result<CreateStreamingURLResult>>;
  public function CreateUsageReportSubscription(CreateUsageReportSubscriptionRequest): Awaitable<Errors\Result<CreateUsageReportSubscriptionResult>>;
  public function CreateUser(CreateUserRequest): Awaitable<Errors\Result<CreateUserResult>>;
  public function DeleteDirectoryConfig(DeleteDirectoryConfigRequest): Awaitable<Errors\Result<DeleteDirectoryConfigResult>>;
  public function DeleteFleet(DeleteFleetRequest): Awaitable<Errors\Result<DeleteFleetResult>>;
  public function DeleteImage(DeleteImageRequest): Awaitable<Errors\Result<DeleteImageResult>>;
  public function DeleteImageBuilder(DeleteImageBuilderRequest): Awaitable<Errors\Result<DeleteImageBuilderResult>>;
  public function DeleteImagePermissions(DeleteImagePermissionsRequest): Awaitable<Errors\Result<DeleteImagePermissionsResult>>;
  public function DeleteStack(DeleteStackRequest): Awaitable<Errors\Result<DeleteStackResult>>;
  public function DeleteUsageReportSubscription(DeleteUsageReportSubscriptionRequest): Awaitable<Errors\Result<DeleteUsageReportSubscriptionResult>>;
  public function DeleteUser(DeleteUserRequest): Awaitable<Errors\Result<DeleteUserResult>>;
  public function DescribeDirectoryConfigs(DescribeDirectoryConfigsRequest): Awaitable<Errors\Result<DescribeDirectoryConfigsResult>>;
  public function DescribeFleets(DescribeFleetsRequest): Awaitable<Errors\Result<DescribeFleetsResult>>;
  public function DescribeImageBuilders(DescribeImageBuildersRequest): Awaitable<Errors\Result<DescribeImageBuildersResult>>;
  public function DescribeImagePermissions(DescribeImagePermissionsRequest): Awaitable<Errors\Result<DescribeImagePermissionsResult>>;
  public function DescribeImages(DescribeImagesRequest): Awaitable<Errors\Result<DescribeImagesResult>>;
  public function DescribeSessions(DescribeSessionsRequest): Awaitable<Errors\Result<DescribeSessionsResult>>;
  public function DescribeStacks(DescribeStacksRequest): Awaitable<Errors\Result<DescribeStacksResult>>;
  public function DescribeUsageReportSubscriptions(DescribeUsageReportSubscriptionsRequest): Awaitable<Errors\Result<DescribeUsageReportSubscriptionsResult>>;
  public function DescribeUserStackAssociations(DescribeUserStackAssociationsRequest): Awaitable<Errors\Result<DescribeUserStackAssociationsResult>>;
  public function DescribeUsers(DescribeUsersRequest): Awaitable<Errors\Result<DescribeUsersResult>>;
  public function DisableUser(DisableUserRequest): Awaitable<Errors\Result<DisableUserResult>>;
  public function DisassociateFleet(DisassociateFleetRequest): Awaitable<Errors\Result<DisassociateFleetResult>>;
  public function EnableUser(EnableUserRequest): Awaitable<Errors\Result<EnableUserResult>>;
  public function ExpireSession(ExpireSessionRequest): Awaitable<Errors\Result<ExpireSessionResult>>;
  public function ListAssociatedFleets(ListAssociatedFleetsRequest): Awaitable<Errors\Result<ListAssociatedFleetsResult>>;
  public function ListAssociatedStacks(ListAssociatedStacksRequest): Awaitable<Errors\Result<ListAssociatedStacksResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function StartFleet(StartFleetRequest): Awaitable<Errors\Result<StartFleetResult>>;
  public function StartImageBuilder(StartImageBuilderRequest): Awaitable<Errors\Result<StartImageBuilderResult>>;
  public function StopFleet(StopFleetRequest): Awaitable<Errors\Result<StopFleetResult>>;
  public function StopImageBuilder(StopImageBuilderRequest): Awaitable<Errors\Result<StopImageBuilderResult>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDirectoryConfig(UpdateDirectoryConfigRequest): Awaitable<Errors\Result<UpdateDirectoryConfigResult>>;
  public function UpdateFleet(UpdateFleetRequest): Awaitable<Errors\Result<UpdateFleetResult>>;
  public function UpdateImagePermissions(UpdateImagePermissionsRequest): Awaitable<Errors\Result<UpdateImagePermissionsResult>>;
  public function UpdateStack(UpdateStackRequest): Awaitable<Errors\Result<UpdateStackResult>>;
}

class AccessEndpoint {
  public AccessEndpointType $endpoint_type;
  public string $vpce_id;

  public function __construct(shape(
  ?'endpoint_type' => AccessEndpointType,
  ?'vpce_id' => string,
  ) $s = shape()) {
    $this->endpoint_type = $endpoint_type ?? "";
    $this->vpce_id = $vpce_id ?? "";
  }
}

type AccessEndpointList = vec<AccessEndpoint>;

type AccessEndpointType = string;

type AccountName = string;

type AccountPassword = string;

type Action = string;

class Application {
  public string $display_name;
  public boolean $enabled;
  public string $icon_url;
  public string $launch_parameters;
  public string $launch_path;
  public Metadata $metadata;
  public string $name;

  public function __construct(shape(
  ?'display_name' => string,
  ?'enabled' => boolean,
  ?'icon_url' => string,
  ?'launch_parameters' => string,
  ?'launch_path' => string,
  ?'metadata' => Metadata,
  ?'name' => string,
  ) $s = shape()) {
    $this->display_name = $display_name ?? "";
    $this->enabled = $enabled ?? false;
    $this->icon_url = $icon_url ?? "";
    $this->launch_parameters = $launch_parameters ?? "";
    $this->launch_path = $launch_path ?? "";
    $this->metadata = $metadata ?? [];
    $this->name = $name ?? "";
  }
}

class ApplicationSettings {
  public boolean $enabled;
  public SettingsGroup $settings_group;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'settings_group' => SettingsGroup,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
    $this->settings_group = $settings_group ?? "";
  }
}

class ApplicationSettingsResponse {
  public boolean $enabled;
  public string $s_3_bucket_name;
  public SettingsGroup $settings_group;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'s_3_bucket_name' => string,
  ?'settings_group' => SettingsGroup,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
    $this->s_3_bucket_name = $s_3_bucket_name ?? "";
    $this->settings_group = $settings_group ?? "";
  }
}

type Applications = vec<Application>;

type AppstreamAgentVersion = string;

type Arn = string;

type ArnList = vec<Arn>;

class AssociateFleetRequest {
  public string $fleet_name;
  public string $stack_name;

  public function __construct(shape(
  ?'fleet_name' => string,
  ?'stack_name' => string,
  ) $s = shape()) {
    $this->fleet_name = $fleet_name ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class AssociateFleetResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AuthenticationType = string;

type AwsAccountId = string;

type AwsAccountIdList = vec<AwsAccountId>;

class BatchAssociateUserStackRequest {
  public UserStackAssociationList $user_stack_associations;

  public function __construct(shape(
  ?'user_stack_associations' => UserStackAssociationList,
  ) $s = shape()) {
    $this->user_stack_associations = $user_stack_associations ?? [];
  }
}

class BatchAssociateUserStackResult {
  public UserStackAssociationErrorList $errors;

  public function __construct(shape(
  ?'errors' => UserStackAssociationErrorList,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
  }
}

class BatchDisassociateUserStackRequest {
  public UserStackAssociationList $user_stack_associations;

  public function __construct(shape(
  ?'user_stack_associations' => UserStackAssociationList,
  ) $s = shape()) {
    $this->user_stack_associations = $user_stack_associations ?? [];
  }
}

class BatchDisassociateUserStackResult {
  public UserStackAssociationErrorList $errors;

  public function __construct(shape(
  ?'errors' => UserStackAssociationErrorList,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
  }
}

type Boolean = bool;

type BooleanObject = bool;

class ComputeCapacity {
  public int $desired_instances;

  public function __construct(shape(
  ?'desired_instances' => int,
  ) $s = shape()) {
    $this->desired_instances = $desired_instances ?? 0;
  }
}

class ComputeCapacityStatus {
  public int $available;
  public int $desired;
  public int $in_use;
  public int $running;

  public function __construct(shape(
  ?'available' => int,
  ?'desired' => int,
  ?'in_use' => int,
  ?'running' => int,
  ) $s = shape()) {
    $this->available = $available ?? 0;
    $this->desired = $desired ?? 0;
    $this->in_use = $in_use ?? 0;
    $this->running = $running ?? 0;
  }
}

class ConcurrentModificationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CopyImageRequest {
  public Description $destination_image_description;
  public Name $destination_image_name;
  public RegionName $destination_region;
  public Name $source_image_name;

  public function __construct(shape(
  ?'destination_image_description' => Description,
  ?'destination_image_name' => Name,
  ?'destination_region' => RegionName,
  ?'source_image_name' => Name,
  ) $s = shape()) {
    $this->destination_image_description = $destination_image_description ?? "";
    $this->destination_image_name = $destination_image_name ?? "";
    $this->destination_region = $destination_region ?? "";
    $this->source_image_name = $source_image_name ?? "";
  }
}

class CopyImageResponse {
  public Name $destination_image_name;

  public function __construct(shape(
  ?'destination_image_name' => Name,
  ) $s = shape()) {
    $this->destination_image_name = $destination_image_name ?? "";
  }
}

class CreateDirectoryConfigRequest {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedNamesList $organizational_unit_distinguished_names;
  public ServiceAccountCredentials $service_account_credentials;

  public function __construct(shape(
  ?'directory_name' => DirectoryName,
  ?'organizational_unit_distinguished_names' => OrganizationalUnitDistinguishedNamesList,
  ?'service_account_credentials' => ServiceAccountCredentials,
  ) $s = shape()) {
    $this->directory_name = $directory_name ?? "";
    $this->organizational_unit_distinguished_names = $organizational_unit_distinguished_names ?? [];
    $this->service_account_credentials = $service_account_credentials ?? null;
  }
}

class CreateDirectoryConfigResult {
  public DirectoryConfig $directory_config;

  public function __construct(shape(
  ?'directory_config' => DirectoryConfig,
  ) $s = shape()) {
    $this->directory_config = $directory_config ?? null;
  }
}

class CreateFleetRequest {
  public ComputeCapacity $compute_capacity;
  public Description $description;
  public int $disconnect_timeout_in_seconds;
  public DisplayName $display_name;
  public DomainJoinInfo $domain_join_info;
  public BooleanObject $enable_default_internet_access;
  public FleetType $fleet_type;
  public Arn $iam_role_arn;
  public int $idle_disconnect_timeout_in_seconds;
  public Arn $image_arn;
  public string $image_name;
  public string $instance_type;
  public int $max_user_duration_in_seconds;
  public Name $name;
  public Tags $tags;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'compute_capacity' => ComputeCapacity,
  ?'description' => Description,
  ?'disconnect_timeout_in_seconds' => int,
  ?'display_name' => DisplayName,
  ?'domain_join_info' => DomainJoinInfo,
  ?'enable_default_internet_access' => BooleanObject,
  ?'fleet_type' => FleetType,
  ?'iam_role_arn' => Arn,
  ?'idle_disconnect_timeout_in_seconds' => int,
  ?'image_arn' => Arn,
  ?'image_name' => string,
  ?'instance_type' => string,
  ?'max_user_duration_in_seconds' => int,
  ?'name' => Name,
  ?'tags' => Tags,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->compute_capacity = $compute_capacity ?? null;
    $this->description = $description ?? "";
    $this->disconnect_timeout_in_seconds = $disconnect_timeout_in_seconds ?? 0;
    $this->display_name = $display_name ?? "";
    $this->domain_join_info = $domain_join_info ?? null;
    $this->enable_default_internet_access = $enable_default_internet_access ?? false;
    $this->fleet_type = $fleet_type ?? "";
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->idle_disconnect_timeout_in_seconds = $idle_disconnect_timeout_in_seconds ?? 0;
    $this->image_arn = $image_arn ?? "";
    $this->image_name = $image_name ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->max_user_duration_in_seconds = $max_user_duration_in_seconds ?? 0;
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
    $this->vpc_config = $vpc_config ?? null;
  }
}

class CreateFleetResult {
  public Fleet $fleet;

  public function __construct(shape(
  ?'fleet' => Fleet,
  ) $s = shape()) {
    $this->fleet = $fleet ?? null;
  }
}

class CreateImageBuilderRequest {
  public AccessEndpointList $access_endpoints;
  public AppstreamAgentVersion $appstream_agent_version;
  public Description $description;
  public DisplayName $display_name;
  public DomainJoinInfo $domain_join_info;
  public BooleanObject $enable_default_internet_access;
  public Arn $iam_role_arn;
  public Arn $image_arn;
  public string $image_name;
  public string $instance_type;
  public Name $name;
  public Tags $tags;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'access_endpoints' => AccessEndpointList,
  ?'appstream_agent_version' => AppstreamAgentVersion,
  ?'description' => Description,
  ?'display_name' => DisplayName,
  ?'domain_join_info' => DomainJoinInfo,
  ?'enable_default_internet_access' => BooleanObject,
  ?'iam_role_arn' => Arn,
  ?'image_arn' => Arn,
  ?'image_name' => string,
  ?'instance_type' => string,
  ?'name' => Name,
  ?'tags' => Tags,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->access_endpoints = $access_endpoints ?? [];
    $this->appstream_agent_version = $appstream_agent_version ?? "";
    $this->description = $description ?? "";
    $this->display_name = $display_name ?? "";
    $this->domain_join_info = $domain_join_info ?? null;
    $this->enable_default_internet_access = $enable_default_internet_access ?? false;
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->image_arn = $image_arn ?? "";
    $this->image_name = $image_name ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
    $this->vpc_config = $vpc_config ?? null;
  }
}

class CreateImageBuilderResult {
  public ImageBuilder $image_builder;

  public function __construct(shape(
  ?'image_builder' => ImageBuilder,
  ) $s = shape()) {
    $this->image_builder = $image_builder ?? null;
  }
}

class CreateImageBuilderStreamingURLRequest {
  public string $name;
  public Long $validity;

  public function __construct(shape(
  ?'name' => string,
  ?'validity' => Long,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->validity = $validity ?? 0;
  }
}

class CreateImageBuilderStreamingURLResult {
  public Timestamp $expires;
  public string $streaming_url;

  public function __construct(shape(
  ?'expires' => Timestamp,
  ?'streaming_url' => string,
  ) $s = shape()) {
    $this->expires = $expires ?? 0;
    $this->streaming_url = $streaming_url ?? "";
  }
}

class CreateStackRequest {
  public AccessEndpointList $access_endpoints;
  public ApplicationSettings $application_settings;
  public Description $description;
  public DisplayName $display_name;
  public EmbedHostDomains $embed_host_domains;
  public FeedbackURL $feedback_url;
  public Name $name;
  public RedirectURL $redirect_url;
  public StorageConnectorList $storage_connectors;
  public Tags $tags;
  public UserSettingList $user_settings;

  public function __construct(shape(
  ?'access_endpoints' => AccessEndpointList,
  ?'application_settings' => ApplicationSettings,
  ?'description' => Description,
  ?'display_name' => DisplayName,
  ?'embed_host_domains' => EmbedHostDomains,
  ?'feedback_url' => FeedbackURL,
  ?'name' => Name,
  ?'redirect_url' => RedirectURL,
  ?'storage_connectors' => StorageConnectorList,
  ?'tags' => Tags,
  ?'user_settings' => UserSettingList,
  ) $s = shape()) {
    $this->access_endpoints = $access_endpoints ?? [];
    $this->application_settings = $application_settings ?? null;
    $this->description = $description ?? "";
    $this->display_name = $display_name ?? "";
    $this->embed_host_domains = $embed_host_domains ?? [];
    $this->feedback_url = $feedback_url ?? "";
    $this->name = $name ?? "";
    $this->redirect_url = $redirect_url ?? "";
    $this->storage_connectors = $storage_connectors ?? [];
    $this->tags = $tags ?? [];
    $this->user_settings = $user_settings ?? [];
  }
}

class CreateStackResult {
  public Stack $stack;

  public function __construct(shape(
  ?'stack' => Stack,
  ) $s = shape()) {
    $this->stack = $stack ?? null;
  }
}

class CreateStreamingURLRequest {
  public string $application_id;
  public string $fleet_name;
  public string $session_context;
  public string $stack_name;
  public StreamingUrlUserId $user_id;
  public Long $validity;

  public function __construct(shape(
  ?'application_id' => string,
  ?'fleet_name' => string,
  ?'session_context' => string,
  ?'stack_name' => string,
  ?'user_id' => StreamingUrlUserId,
  ?'validity' => Long,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->fleet_name = $fleet_name ?? "";
    $this->session_context = $session_context ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->user_id = $user_id ?? "";
    $this->validity = $validity ?? 0;
  }
}

class CreateStreamingURLResult {
  public Timestamp $expires;
  public string $streaming_url;

  public function __construct(shape(
  ?'expires' => Timestamp,
  ?'streaming_url' => string,
  ) $s = shape()) {
    $this->expires = $expires ?? 0;
    $this->streaming_url = $streaming_url ?? "";
  }
}

class CreateUsageReportSubscriptionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateUsageReportSubscriptionResult {
  public string $s_3_bucket_name;
  public UsageReportSchedule $schedule;

  public function __construct(shape(
  ?'s_3_bucket_name' => string,
  ?'schedule' => UsageReportSchedule,
  ) $s = shape()) {
    $this->s_3_bucket_name = $s_3_bucket_name ?? "";
    $this->schedule = $schedule ?? "";
  }
}

class CreateUserRequest {
  public AuthenticationType $authentication_type;
  public UserAttributeValue $first_name;
  public UserAttributeValue $last_name;
  public MessageAction $message_action;
  public Username $user_name;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'first_name' => UserAttributeValue,
  ?'last_name' => UserAttributeValue,
  ?'message_action' => MessageAction,
  ?'user_name' => Username,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->first_name = $first_name ?? "";
    $this->last_name = $last_name ?? "";
    $this->message_action = $message_action ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class CreateUserResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDirectoryConfigRequest {
  public DirectoryName $directory_name;

  public function __construct(shape(
  ?'directory_name' => DirectoryName,
  ) $s = shape()) {
    $this->directory_name = $directory_name ?? "";
  }
}

class DeleteDirectoryConfigResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteFleetRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteFleetResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteImageBuilderRequest {
  public Name $name;

  public function __construct(shape(
  ?'name' => Name,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteImageBuilderResult {
  public ImageBuilder $image_builder;

  public function __construct(shape(
  ?'image_builder' => ImageBuilder,
  ) $s = shape()) {
    $this->image_builder = $image_builder ?? null;
  }
}

class DeleteImagePermissionsRequest {
  public Name $name;
  public AwsAccountId $shared_account_id;

  public function __construct(shape(
  ?'name' => Name,
  ?'shared_account_id' => AwsAccountId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->shared_account_id = $shared_account_id ?? "";
  }
}

class DeleteImagePermissionsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteImageRequest {
  public Name $name;

  public function __construct(shape(
  ?'name' => Name,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteImageResult {
  public Image $image;

  public function __construct(shape(
  ?'image' => Image,
  ) $s = shape()) {
    $this->image = $image ?? null;
  }
}

class DeleteStackRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteStackResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUsageReportSubscriptionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUsageReportSubscriptionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUserRequest {
  public AuthenticationType $authentication_type;
  public Username $user_name;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'user_name' => Username,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DeleteUserResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeDirectoryConfigsRequest {
  public DirectoryNameList $directory_names;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'directory_names' => DirectoryNameList,
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->directory_names = $directory_names ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeDirectoryConfigsResult {
  public DirectoryConfigList $directory_configs;
  public string $next_token;

  public function __construct(shape(
  ?'directory_configs' => DirectoryConfigList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->directory_configs = $directory_configs ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeFleetsRequest {
  public StringList $names;
  public string $next_token;

  public function __construct(shape(
  ?'names' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->names = $names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeFleetsResult {
  public FleetList $fleets;
  public string $next_token;

  public function __construct(shape(
  ?'fleets' => FleetList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->fleets = $fleets ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeImageBuildersRequest {
  public int $max_results;
  public StringList $names;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => int,
  ?'names' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->names = $names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeImageBuildersResult {
  public ImageBuilderList $image_builders;
  public string $next_token;

  public function __construct(shape(
  ?'image_builders' => ImageBuilderList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->image_builders = $image_builders ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeImagePermissionsRequest {
  public MaxResults $max_results;
  public Name $name;
  public string $next_token;
  public AwsAccountIdList $shared_aws_account_ids;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name' => Name,
  ?'next_token' => string,
  ?'shared_aws_account_ids' => AwsAccountIdList,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
    $this->shared_aws_account_ids = $shared_aws_account_ids ?? [];
  }
}

class DescribeImagePermissionsResult {
  public Name $name;
  public string $next_token;
  public SharedImagePermissionsList $shared_image_permissions_list;

  public function __construct(shape(
  ?'name' => Name,
  ?'next_token' => string,
  ?'shared_image_permissions_list' => SharedImagePermissionsList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
    $this->shared_image_permissions_list = $shared_image_permissions_list ?? [];
  }
}

type DescribeImagesMaxResults = int;

class DescribeImagesRequest {
  public ArnList $arns;
  public DescribeImagesMaxResults $max_results;
  public StringList $names;
  public string $next_token;
  public VisibilityType $type;

  public function __construct(shape(
  ?'arns' => ArnList,
  ?'max_results' => DescribeImagesMaxResults,
  ?'names' => StringList,
  ?'next_token' => string,
  ?'type' => VisibilityType,
  ) $s = shape()) {
    $this->arns = $arns ?? [];
    $this->max_results = $max_results ?? 0;
    $this->names = $names ?? [];
    $this->next_token = $next_token ?? "";
    $this->type = $type ?? "";
  }
}

class DescribeImagesResult {
  public ImageList $images;
  public string $next_token;

  public function __construct(shape(
  ?'images' => ImageList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->images = $images ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeSessionsRequest {
  public AuthenticationType $authentication_type;
  public string $fleet_name;
  public int $limit;
  public string $next_token;
  public string $stack_name;
  public UserId $user_id;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'fleet_name' => string,
  ?'limit' => int,
  ?'next_token' => string,
  ?'stack_name' => string,
  ?'user_id' => UserId,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->fleet_name = $fleet_name ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class DescribeSessionsResult {
  public string $next_token;
  public SessionList $sessions;

  public function __construct(shape(
  ?'next_token' => string,
  ?'sessions' => SessionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->sessions = $sessions ?? [];
  }
}

class DescribeStacksRequest {
  public StringList $names;
  public string $next_token;

  public function __construct(shape(
  ?'names' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->names = $names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeStacksResult {
  public string $next_token;
  public StackList $stacks;

  public function __construct(shape(
  ?'next_token' => string,
  ?'stacks' => StackList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stacks = $stacks ?? [];
  }
}

class DescribeUsageReportSubscriptionsRequest {
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeUsageReportSubscriptionsResult {
  public string $next_token;
  public UsageReportSubscriptionList $usage_report_subscriptions;

  public function __construct(shape(
  ?'next_token' => string,
  ?'usage_report_subscriptions' => UsageReportSubscriptionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->usage_report_subscriptions = $usage_report_subscriptions ?? [];
  }
}

class DescribeUserStackAssociationsRequest {
  public AuthenticationType $authentication_type;
  public MaxResults $max_results;
  public string $next_token;
  public string $stack_name;
  public Username $user_name;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'stack_name' => string,
  ?'user_name' => Username,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DescribeUserStackAssociationsResult {
  public string $next_token;
  public UserStackAssociationList $user_stack_associations;

  public function __construct(shape(
  ?'next_token' => string,
  ?'user_stack_associations' => UserStackAssociationList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->user_stack_associations = $user_stack_associations ?? [];
  }
}

class DescribeUsersRequest {
  public AuthenticationType $authentication_type;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeUsersResult {
  public string $next_token;
  public UserList $users;

  public function __construct(shape(
  ?'next_token' => string,
  ?'users' => UserList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->users = $users ?? [];
  }
}

type Description = string;

class DirectoryConfig {
  public Timestamp $created_time;
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedNamesList $organizational_unit_distinguished_names;
  public ServiceAccountCredentials $service_account_credentials;

  public function __construct(shape(
  ?'created_time' => Timestamp,
  ?'directory_name' => DirectoryName,
  ?'organizational_unit_distinguished_names' => OrganizationalUnitDistinguishedNamesList,
  ?'service_account_credentials' => ServiceAccountCredentials,
  ) $s = shape()) {
    $this->created_time = $created_time ?? 0;
    $this->directory_name = $directory_name ?? "";
    $this->organizational_unit_distinguished_names = $organizational_unit_distinguished_names ?? [];
    $this->service_account_credentials = $service_account_credentials ?? null;
  }
}

type DirectoryConfigList = vec<DirectoryConfig>;

type DirectoryName = string;

type DirectoryNameList = vec<DirectoryName>;

class DisableUserRequest {
  public AuthenticationType $authentication_type;
  public Username $user_name;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'user_name' => Username,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DisableUserResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateFleetRequest {
  public string $fleet_name;
  public string $stack_name;

  public function __construct(shape(
  ?'fleet_name' => string,
  ?'stack_name' => string,
  ) $s = shape()) {
    $this->fleet_name = $fleet_name ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class DisassociateFleetResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DisplayName = string;

type Domain = string;

class DomainJoinInfo {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedName $organizational_unit_distinguished_name;

  public function __construct(shape(
  ?'directory_name' => DirectoryName,
  ?'organizational_unit_distinguished_name' => OrganizationalUnitDistinguishedName,
  ) $s = shape()) {
    $this->directory_name = $directory_name ?? "";
    $this->organizational_unit_distinguished_name = $organizational_unit_distinguished_name ?? "";
  }
}

type DomainList = vec<Domain>;

type EmbedHostDomain = string;

type EmbedHostDomains = vec<EmbedHostDomain>;

class EnableUserRequest {
  public AuthenticationType $authentication_type;
  public Username $user_name;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'user_name' => Username,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class EnableUserResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ErrorMessage = string;

class ExpireSessionRequest {
  public string $session_id;

  public function __construct(shape(
  ?'session_id' => string,
  ) $s = shape()) {
    $this->session_id = $session_id ?? "";
  }
}

class ExpireSessionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type FeedbackURL = string;

class Fleet {
  public Arn $arn;
  public ComputeCapacityStatus $compute_capacity_status;
  public Timestamp $created_time;
  public string $description;
  public int $disconnect_timeout_in_seconds;
  public string $display_name;
  public DomainJoinInfo $domain_join_info;
  public BooleanObject $enable_default_internet_access;
  public FleetErrors $fleet_errors;
  public FleetType $fleet_type;
  public Arn $iam_role_arn;
  public int $idle_disconnect_timeout_in_seconds;
  public Arn $image_arn;
  public string $image_name;
  public string $instance_type;
  public int $max_user_duration_in_seconds;
  public string $name;
  public FleetState $state;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'compute_capacity_status' => ComputeCapacityStatus,
  ?'created_time' => Timestamp,
  ?'description' => string,
  ?'disconnect_timeout_in_seconds' => int,
  ?'display_name' => string,
  ?'domain_join_info' => DomainJoinInfo,
  ?'enable_default_internet_access' => BooleanObject,
  ?'fleet_errors' => FleetErrors,
  ?'fleet_type' => FleetType,
  ?'iam_role_arn' => Arn,
  ?'idle_disconnect_timeout_in_seconds' => int,
  ?'image_arn' => Arn,
  ?'image_name' => string,
  ?'instance_type' => string,
  ?'max_user_duration_in_seconds' => int,
  ?'name' => string,
  ?'state' => FleetState,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->compute_capacity_status = $compute_capacity_status ?? null;
    $this->created_time = $created_time ?? 0;
    $this->description = $description ?? "";
    $this->disconnect_timeout_in_seconds = $disconnect_timeout_in_seconds ?? 0;
    $this->display_name = $display_name ?? "";
    $this->domain_join_info = $domain_join_info ?? null;
    $this->enable_default_internet_access = $enable_default_internet_access ?? false;
    $this->fleet_errors = $fleet_errors ?? [];
    $this->fleet_type = $fleet_type ?? "";
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->idle_disconnect_timeout_in_seconds = $idle_disconnect_timeout_in_seconds ?? 0;
    $this->image_arn = $image_arn ?? "";
    $this->image_name = $image_name ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->max_user_duration_in_seconds = $max_user_duration_in_seconds ?? 0;
    $this->name = $name ?? "";
    $this->state = $state ?? "";
    $this->vpc_config = $vpc_config ?? null;
  }
}

type FleetAttribute = string;

type FleetAttributes = vec<FleetAttribute>;

class FleetError {
  public FleetErrorCode $error_code;
  public string $error_message;

  public function __construct(shape(
  ?'error_code' => FleetErrorCode,
  ?'error_message' => string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
  }
}

type FleetErrorCode = string;

type FleetErrors = vec<FleetError>;

type FleetList = vec<Fleet>;

type FleetState = string;

type FleetType = string;

class Image {
  public Applications $applications;
  public AppstreamAgentVersion $appstream_agent_version;
  public Arn $arn;
  public Arn $base_image_arn;
  public Timestamp $created_time;
  public string $description;
  public string $display_name;
  public string $image_builder_name;
  public boolean $image_builder_supported;
  public ImagePermissions $image_permissions;
  public string $name;
  public PlatformType $platform;
  public Timestamp $public_base_image_released_date;
  public ImageState $state;
  public ImageStateChangeReason $state_change_reason;
  public VisibilityType $visibility;

  public function __construct(shape(
  ?'applications' => Applications,
  ?'appstream_agent_version' => AppstreamAgentVersion,
  ?'arn' => Arn,
  ?'base_image_arn' => Arn,
  ?'created_time' => Timestamp,
  ?'description' => string,
  ?'display_name' => string,
  ?'image_builder_name' => string,
  ?'image_builder_supported' => boolean,
  ?'image_permissions' => ImagePermissions,
  ?'name' => string,
  ?'platform' => PlatformType,
  ?'public_base_image_released_date' => Timestamp,
  ?'state' => ImageState,
  ?'state_change_reason' => ImageStateChangeReason,
  ?'visibility' => VisibilityType,
  ) $s = shape()) {
    $this->applications = $applications ?? [];
    $this->appstream_agent_version = $appstream_agent_version ?? "";
    $this->arn = $arn ?? "";
    $this->base_image_arn = $base_image_arn ?? "";
    $this->created_time = $created_time ?? 0;
    $this->description = $description ?? "";
    $this->display_name = $display_name ?? "";
    $this->image_builder_name = $image_builder_name ?? "";
    $this->image_builder_supported = $image_builder_supported ?? false;
    $this->image_permissions = $image_permissions ?? null;
    $this->name = $name ?? "";
    $this->platform = $platform ?? "";
    $this->public_base_image_released_date = $public_base_image_released_date ?? 0;
    $this->state = $state ?? "";
    $this->state_change_reason = $state_change_reason ?? null;
    $this->visibility = $visibility ?? "";
  }
}

class ImageBuilder {
  public AccessEndpointList $access_endpoints;
  public AppstreamAgentVersion $appstream_agent_version;
  public Arn $arn;
  public Timestamp $created_time;
  public string $description;
  public string $display_name;
  public DomainJoinInfo $domain_join_info;
  public BooleanObject $enable_default_internet_access;
  public Arn $iam_role_arn;
  public Arn $image_arn;
  public ResourceErrors $image_builder_errors;
  public string $instance_type;
  public string $name;
  public NetworkAccessConfiguration $network_access_configuration;
  public PlatformType $platform;
  public ImageBuilderState $state;
  public ImageBuilderStateChangeReason $state_change_reason;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'access_endpoints' => AccessEndpointList,
  ?'appstream_agent_version' => AppstreamAgentVersion,
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'description' => string,
  ?'display_name' => string,
  ?'domain_join_info' => DomainJoinInfo,
  ?'enable_default_internet_access' => BooleanObject,
  ?'iam_role_arn' => Arn,
  ?'image_arn' => Arn,
  ?'image_builder_errors' => ResourceErrors,
  ?'instance_type' => string,
  ?'name' => string,
  ?'network_access_configuration' => NetworkAccessConfiguration,
  ?'platform' => PlatformType,
  ?'state' => ImageBuilderState,
  ?'state_change_reason' => ImageBuilderStateChangeReason,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->access_endpoints = $access_endpoints ?? [];
    $this->appstream_agent_version = $appstream_agent_version ?? "";
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? 0;
    $this->description = $description ?? "";
    $this->display_name = $display_name ?? "";
    $this->domain_join_info = $domain_join_info ?? null;
    $this->enable_default_internet_access = $enable_default_internet_access ?? false;
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->image_arn = $image_arn ?? "";
    $this->image_builder_errors = $image_builder_errors ?? [];
    $this->instance_type = $instance_type ?? "";
    $this->name = $name ?? "";
    $this->network_access_configuration = $network_access_configuration ?? null;
    $this->platform = $platform ?? "";
    $this->state = $state ?? "";
    $this->state_change_reason = $state_change_reason ?? null;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type ImageBuilderList = vec<ImageBuilder>;

type ImageBuilderState = string;

class ImageBuilderStateChangeReason {
  public ImageBuilderStateChangeReasonCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ImageBuilderStateChangeReasonCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type ImageBuilderStateChangeReasonCode = string;

type ImageList = vec<Image>;

class ImagePermissions {
  public BooleanObject $allow_fleet;
  public BooleanObject $allow_image_builder;

  public function __construct(shape(
  ?'allow_fleet' => BooleanObject,
  ?'allow_image_builder' => BooleanObject,
  ) $s = shape()) {
    $this->allow_fleet = $allow_fleet ?? false;
    $this->allow_image_builder = $allow_image_builder ?? false;
  }
}

type ImageState = string;

class ImageStateChangeReason {
  public ImageStateChangeReasonCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ImageStateChangeReasonCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type ImageStateChangeReasonCode = string;

class IncompatibleImageException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Integer = int;

class InvalidAccountStatusException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterCombinationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidRoleException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LastReportGenerationExecutionError {
  public UsageReportExecutionErrorCode $error_code;
  public string $error_message;

  public function __construct(shape(
  ?'error_code' => UsageReportExecutionErrorCode,
  ?'error_message' => string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
  }
}

type LastReportGenerationExecutionErrors = vec<LastReportGenerationExecutionError>;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListAssociatedFleetsRequest {
  public string $next_token;
  public string $stack_name;

  public function __construct(shape(
  ?'next_token' => string,
  ?'stack_name' => string,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class ListAssociatedFleetsResult {
  public StringList $names;
  public string $next_token;

  public function __construct(shape(
  ?'names' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->names = $names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListAssociatedStacksRequest {
  public string $fleet_name;
  public string $next_token;

  public function __construct(shape(
  ?'fleet_name' => string,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->fleet_name = $fleet_name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListAssociatedStacksResult {
  public StringList $names;
  public string $next_token;

  public function __construct(shape(
  ?'names' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->names = $names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type Long = int;

type MaxResults = int;

type MessageAction = string;

type Metadata = dict<String, String>;

type Name = string;

class NetworkAccessConfiguration {
  public string $eni_id;
  public string $eni_private_ip_address;

  public function __construct(shape(
  ?'eni_id' => string,
  ?'eni_private_ip_address' => string,
  ) $s = shape()) {
    $this->eni_id = $eni_id ?? "";
    $this->eni_private_ip_address = $eni_private_ip_address ?? "";
  }
}

class OperationNotPermittedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type OrganizationalUnitDistinguishedName = string;

type OrganizationalUnitDistinguishedNamesList = vec<OrganizationalUnitDistinguishedName>;

type Permission = string;

type PlatformType = string;

type RedirectURL = string;

type RegionName = string;

class ResourceAlreadyExistsException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceError {
  public FleetErrorCode $error_code;
  public string $error_message;
  public Timestamp $error_timestamp;

  public function __construct(shape(
  ?'error_code' => FleetErrorCode,
  ?'error_message' => string,
  ?'error_timestamp' => Timestamp,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->error_timestamp = $error_timestamp ?? 0;
  }
}

type ResourceErrors = vec<ResourceError>;

type ResourceIdentifier = string;

class ResourceInUseException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotAvailableException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type SecurityGroupIdList = vec<String>;

class ServiceAccountCredentials {
  public AccountName $account_name;
  public AccountPassword $account_password;

  public function __construct(shape(
  ?'account_name' => AccountName,
  ?'account_password' => AccountPassword,
  ) $s = shape()) {
    $this->account_name = $account_name ?? "";
    $this->account_password = $account_password ?? "";
  }
}

class Session {
  public AuthenticationType $authentication_type;
  public SessionConnectionState $connection_state;
  public string $fleet_name;
  public string $id;
  public Timestamp $max_expiration_time;
  public NetworkAccessConfiguration $network_access_configuration;
  public string $stack_name;
  public Timestamp $start_time;
  public SessionState $state;
  public UserId $user_id;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'connection_state' => SessionConnectionState,
  ?'fleet_name' => string,
  ?'id' => string,
  ?'max_expiration_time' => Timestamp,
  ?'network_access_configuration' => NetworkAccessConfiguration,
  ?'stack_name' => string,
  ?'start_time' => Timestamp,
  ?'state' => SessionState,
  ?'user_id' => UserId,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->connection_state = $connection_state ?? "";
    $this->fleet_name = $fleet_name ?? "";
    $this->id = $id ?? "";
    $this->max_expiration_time = $max_expiration_time ?? 0;
    $this->network_access_configuration = $network_access_configuration ?? null;
    $this->stack_name = $stack_name ?? "";
    $this->start_time = $start_time ?? 0;
    $this->state = $state ?? "";
    $this->user_id = $user_id ?? "";
  }
}

type SessionConnectionState = string;

type SessionList = vec<Session>;

type SessionState = string;

type SettingsGroup = string;

class SharedImagePermissions {
  public ImagePermissions $image_permissions;
  public AwsAccountId $shared_account_id;

  public function __construct(shape(
  ?'image_permissions' => ImagePermissions,
  ?'shared_account_id' => AwsAccountId,
  ) $s = shape()) {
    $this->image_permissions = $image_permissions ?? null;
    $this->shared_account_id = $shared_account_id ?? "";
  }
}

type SharedImagePermissionsList = vec<SharedImagePermissions>;

class Stack {
  public AccessEndpointList $access_endpoints;
  public ApplicationSettingsResponse $application_settings;
  public Arn $arn;
  public Timestamp $created_time;
  public string $description;
  public string $display_name;
  public EmbedHostDomains $embed_host_domains;
  public FeedbackURL $feedback_url;
  public string $name;
  public RedirectURL $redirect_url;
  public StackErrors $stack_errors;
  public StorageConnectorList $storage_connectors;
  public UserSettingList $user_settings;

  public function __construct(shape(
  ?'access_endpoints' => AccessEndpointList,
  ?'application_settings' => ApplicationSettingsResponse,
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'description' => string,
  ?'display_name' => string,
  ?'embed_host_domains' => EmbedHostDomains,
  ?'feedback_url' => FeedbackURL,
  ?'name' => string,
  ?'redirect_url' => RedirectURL,
  ?'stack_errors' => StackErrors,
  ?'storage_connectors' => StorageConnectorList,
  ?'user_settings' => UserSettingList,
  ) $s = shape()) {
    $this->access_endpoints = $access_endpoints ?? [];
    $this->application_settings = $application_settings ?? null;
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? 0;
    $this->description = $description ?? "";
    $this->display_name = $display_name ?? "";
    $this->embed_host_domains = $embed_host_domains ?? [];
    $this->feedback_url = $feedback_url ?? "";
    $this->name = $name ?? "";
    $this->redirect_url = $redirect_url ?? "";
    $this->stack_errors = $stack_errors ?? [];
    $this->storage_connectors = $storage_connectors ?? [];
    $this->user_settings = $user_settings ?? [];
  }
}

type StackAttribute = string;

type StackAttributes = vec<StackAttribute>;

class StackError {
  public StackErrorCode $error_code;
  public string $error_message;

  public function __construct(shape(
  ?'error_code' => StackErrorCode,
  ?'error_message' => string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
  }
}

type StackErrorCode = string;

type StackErrors = vec<StackError>;

type StackList = vec<Stack>;

class StartFleetRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class StartFleetResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartImageBuilderRequest {
  public AppstreamAgentVersion $appstream_agent_version;
  public string $name;

  public function __construct(shape(
  ?'appstream_agent_version' => AppstreamAgentVersion,
  ?'name' => string,
  ) $s = shape()) {
    $this->appstream_agent_version = $appstream_agent_version ?? "";
    $this->name = $name ?? "";
  }
}

class StartImageBuilderResult {
  public ImageBuilder $image_builder;

  public function __construct(shape(
  ?'image_builder' => ImageBuilder,
  ) $s = shape()) {
    $this->image_builder = $image_builder ?? null;
  }
}

class StopFleetRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class StopFleetResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopImageBuilderRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class StopImageBuilderResult {
  public ImageBuilder $image_builder;

  public function __construct(shape(
  ?'image_builder' => ImageBuilder,
  ) $s = shape()) {
    $this->image_builder = $image_builder ?? null;
  }
}

class StorageConnector {
  public StorageConnectorType $connector_type;
  public DomainList $domains;
  public ResourceIdentifier $resource_identifier;

  public function __construct(shape(
  ?'connector_type' => StorageConnectorType,
  ?'domains' => DomainList,
  ?'resource_identifier' => ResourceIdentifier,
  ) $s = shape()) {
    $this->connector_type = $connector_type ?? "";
    $this->domains = $domains ?? [];
    $this->resource_identifier = $resource_identifier ?? "";
  }
}

type StorageConnectorList = vec<StorageConnector>;

type StorageConnectorType = string;

type StreamingUrlUserId = string;

type String = string;

type StringList = vec<String>;

type SubnetIdList = vec<String>;

type TagKey = string;

type TagKeyList = vec<TagKey>;

class TagResourceRequest {
  public Arn $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Tags = dict<TagKey, TagValue>;

type Timestamp = int;

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDirectoryConfigRequest {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedNamesList $organizational_unit_distinguished_names;
  public ServiceAccountCredentials $service_account_credentials;

  public function __construct(shape(
  ?'directory_name' => DirectoryName,
  ?'organizational_unit_distinguished_names' => OrganizationalUnitDistinguishedNamesList,
  ?'service_account_credentials' => ServiceAccountCredentials,
  ) $s = shape()) {
    $this->directory_name = $directory_name ?? "";
    $this->organizational_unit_distinguished_names = $organizational_unit_distinguished_names ?? [];
    $this->service_account_credentials = $service_account_credentials ?? null;
  }
}

class UpdateDirectoryConfigResult {
  public DirectoryConfig $directory_config;

  public function __construct(shape(
  ?'directory_config' => DirectoryConfig,
  ) $s = shape()) {
    $this->directory_config = $directory_config ?? null;
  }
}

class UpdateFleetRequest {
  public FleetAttributes $attributes_to_delete;
  public ComputeCapacity $compute_capacity;
  public boolean $delete_vpc_config;
  public Description $description;
  public int $disconnect_timeout_in_seconds;
  public DisplayName $display_name;
  public DomainJoinInfo $domain_join_info;
  public BooleanObject $enable_default_internet_access;
  public Arn $iam_role_arn;
  public int $idle_disconnect_timeout_in_seconds;
  public Arn $image_arn;
  public string $image_name;
  public string $instance_type;
  public int $max_user_duration_in_seconds;
  public string $name;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'attributes_to_delete' => FleetAttributes,
  ?'compute_capacity' => ComputeCapacity,
  ?'delete_vpc_config' => boolean,
  ?'description' => Description,
  ?'disconnect_timeout_in_seconds' => int,
  ?'display_name' => DisplayName,
  ?'domain_join_info' => DomainJoinInfo,
  ?'enable_default_internet_access' => BooleanObject,
  ?'iam_role_arn' => Arn,
  ?'idle_disconnect_timeout_in_seconds' => int,
  ?'image_arn' => Arn,
  ?'image_name' => string,
  ?'instance_type' => string,
  ?'max_user_duration_in_seconds' => int,
  ?'name' => string,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->attributes_to_delete = $attributes_to_delete ?? [];
    $this->compute_capacity = $compute_capacity ?? null;
    $this->delete_vpc_config = $delete_vpc_config ?? false;
    $this->description = $description ?? "";
    $this->disconnect_timeout_in_seconds = $disconnect_timeout_in_seconds ?? 0;
    $this->display_name = $display_name ?? "";
    $this->domain_join_info = $domain_join_info ?? null;
    $this->enable_default_internet_access = $enable_default_internet_access ?? false;
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->idle_disconnect_timeout_in_seconds = $idle_disconnect_timeout_in_seconds ?? 0;
    $this->image_arn = $image_arn ?? "";
    $this->image_name = $image_name ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->max_user_duration_in_seconds = $max_user_duration_in_seconds ?? 0;
    $this->name = $name ?? "";
    $this->vpc_config = $vpc_config ?? null;
  }
}

class UpdateFleetResult {
  public Fleet $fleet;

  public function __construct(shape(
  ?'fleet' => Fleet,
  ) $s = shape()) {
    $this->fleet = $fleet ?? null;
  }
}

class UpdateImagePermissionsRequest {
  public ImagePermissions $image_permissions;
  public Name $name;
  public AwsAccountId $shared_account_id;

  public function __construct(shape(
  ?'image_permissions' => ImagePermissions,
  ?'name' => Name,
  ?'shared_account_id' => AwsAccountId,
  ) $s = shape()) {
    $this->image_permissions = $image_permissions ?? null;
    $this->name = $name ?? "";
    $this->shared_account_id = $shared_account_id ?? "";
  }
}

class UpdateImagePermissionsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateStackRequest {
  public AccessEndpointList $access_endpoints;
  public ApplicationSettings $application_settings;
  public StackAttributes $attributes_to_delete;
  public boolean $delete_storage_connectors;
  public Description $description;
  public DisplayName $display_name;
  public EmbedHostDomains $embed_host_domains;
  public FeedbackURL $feedback_url;
  public string $name;
  public RedirectURL $redirect_url;
  public StorageConnectorList $storage_connectors;
  public UserSettingList $user_settings;

  public function __construct(shape(
  ?'access_endpoints' => AccessEndpointList,
  ?'application_settings' => ApplicationSettings,
  ?'attributes_to_delete' => StackAttributes,
  ?'delete_storage_connectors' => boolean,
  ?'description' => Description,
  ?'display_name' => DisplayName,
  ?'embed_host_domains' => EmbedHostDomains,
  ?'feedback_url' => FeedbackURL,
  ?'name' => string,
  ?'redirect_url' => RedirectURL,
  ?'storage_connectors' => StorageConnectorList,
  ?'user_settings' => UserSettingList,
  ) $s = shape()) {
    $this->access_endpoints = $access_endpoints ?? [];
    $this->application_settings = $application_settings ?? null;
    $this->attributes_to_delete = $attributes_to_delete ?? [];
    $this->delete_storage_connectors = $delete_storage_connectors ?? false;
    $this->description = $description ?? "";
    $this->display_name = $display_name ?? "";
    $this->embed_host_domains = $embed_host_domains ?? [];
    $this->feedback_url = $feedback_url ?? "";
    $this->name = $name ?? "";
    $this->redirect_url = $redirect_url ?? "";
    $this->storage_connectors = $storage_connectors ?? [];
    $this->user_settings = $user_settings ?? [];
  }
}

class UpdateStackResult {
  public Stack $stack;

  public function __construct(shape(
  ?'stack' => Stack,
  ) $s = shape()) {
    $this->stack = $stack ?? null;
  }
}

type UsageReportExecutionErrorCode = string;

type UsageReportSchedule = string;

class UsageReportSubscription {
  public Timestamp $last_generated_report_date;
  public string $s_3_bucket_name;
  public UsageReportSchedule $schedule;
  public LastReportGenerationExecutionErrors $subscription_errors;

  public function __construct(shape(
  ?'last_generated_report_date' => Timestamp,
  ?'s_3_bucket_name' => string,
  ?'schedule' => UsageReportSchedule,
  ?'subscription_errors' => LastReportGenerationExecutionErrors,
  ) $s = shape()) {
    $this->last_generated_report_date = $last_generated_report_date ?? 0;
    $this->s_3_bucket_name = $s_3_bucket_name ?? "";
    $this->schedule = $schedule ?? "";
    $this->subscription_errors = $subscription_errors ?? [];
  }
}

type UsageReportSubscriptionList = vec<UsageReportSubscription>;

class User {
  public Arn $arn;
  public AuthenticationType $authentication_type;
  public Timestamp $created_time;
  public boolean $enabled;
  public UserAttributeValue $first_name;
  public UserAttributeValue $last_name;
  public string $status;
  public Username $user_name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'authentication_type' => AuthenticationType,
  ?'created_time' => Timestamp,
  ?'enabled' => boolean,
  ?'first_name' => UserAttributeValue,
  ?'last_name' => UserAttributeValue,
  ?'status' => string,
  ?'user_name' => Username,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->authentication_type = $authentication_type ?? "";
    $this->created_time = $created_time ?? 0;
    $this->enabled = $enabled ?? false;
    $this->first_name = $first_name ?? "";
    $this->last_name = $last_name ?? "";
    $this->status = $status ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type UserAttributeValue = string;

type UserId = string;

type UserList = vec<User>;

class UserSetting {
  public Action $action;
  public Permission $permission;

  public function __construct(shape(
  ?'action' => Action,
  ?'permission' => Permission,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->permission = $permission ?? "";
  }
}

type UserSettingList = vec<UserSetting>;

class UserStackAssociation {
  public AuthenticationType $authentication_type;
  public boolean $send_email_notification;
  public string $stack_name;
  public Username $user_name;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'send_email_notification' => boolean,
  ?'stack_name' => string,
  ?'user_name' => Username,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->send_email_notification = $send_email_notification ?? false;
    $this->stack_name = $stack_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class UserStackAssociationError {
  public UserStackAssociationErrorCode $error_code;
  public string $error_message;
  public UserStackAssociation $user_stack_association;

  public function __construct(shape(
  ?'error_code' => UserStackAssociationErrorCode,
  ?'error_message' => string,
  ?'user_stack_association' => UserStackAssociation,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->user_stack_association = $user_stack_association ?? null;
  }
}

type UserStackAssociationErrorCode = string;

type UserStackAssociationErrorList = vec<UserStackAssociationError>;

type UserStackAssociationList = vec<UserStackAssociation>;

type Username = string;

type VisibilityType = string;

class VpcConfig {
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;

  public function __construct(shape(
  ?'security_group_ids' => SecurityGroupIdList,
  ?'subnet_ids' => SubnetIdList,
  ) $s = shape()) {
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnet_ids = $subnet_ids ?? [];
  }
}

