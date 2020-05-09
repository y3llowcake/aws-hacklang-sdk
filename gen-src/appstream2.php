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
}

class AccessEndpointList {
}

class AccessEndpointType {
}

class AccountName {
}

class AccountPassword {
}

class Action {
}

class Application {
  public string $display_name;
  public boolean $enabled;
  public string $icon_url;
  public string $launch_parameters;
  public string $launch_path;
  public Metadata $metadata;
  public string $name;
}

class ApplicationSettings {
  public boolean $enabled;
  public SettingsGroup $settings_group;
}

class ApplicationSettingsResponse {
  public boolean $enabled;
  public string $s_3_bucket_name;
  public SettingsGroup $settings_group;
}

class Applications {
}

class AppstreamAgentVersion {
}

class Arn {
}

class ArnList {
}

class AssociateFleetRequest {
  public string $fleet_name;
  public string $stack_name;
}

class AssociateFleetResult {
}

class AuthenticationType {
}

class AwsAccountId {
}

class AwsAccountIdList {
}

class BatchAssociateUserStackRequest {
  public UserStackAssociationList $user_stack_associations;
}

class BatchAssociateUserStackResult {
  public UserStackAssociationErrorList $errors;
}

class BatchDisassociateUserStackRequest {
  public UserStackAssociationList $user_stack_associations;
}

class BatchDisassociateUserStackResult {
  public UserStackAssociationErrorList $errors;
}

class Boolean {
}

class BooleanObject {
}

class ComputeCapacity {
  public int $desired_instances;
}

class ComputeCapacityStatus {
  public int $available;
  public int $desired;
  public int $in_use;
  public int $running;
}

class ConcurrentModificationException {
  public ErrorMessage $message;
}

class CopyImageRequest {
  public Description $destination_image_description;
  public Name $destination_image_name;
  public RegionName $destination_region;
  public Name $source_image_name;
}

class CopyImageResponse {
  public Name $destination_image_name;
}

class CreateDirectoryConfigRequest {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedNamesList $organizational_unit_distinguished_names;
  public ServiceAccountCredentials $service_account_credentials;
}

class CreateDirectoryConfigResult {
  public DirectoryConfig $directory_config;
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
}

class CreateFleetResult {
  public Fleet $fleet;
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
}

class CreateImageBuilderResult {
  public ImageBuilder $image_builder;
}

class CreateImageBuilderStreamingURLRequest {
  public string $name;
  public Long $validity;
}

class CreateImageBuilderStreamingURLResult {
  public Timestamp $expires;
  public string $streaming_url;
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
}

class CreateStackResult {
  public Stack $stack;
}

class CreateStreamingURLRequest {
  public string $application_id;
  public string $fleet_name;
  public string $session_context;
  public string $stack_name;
  public StreamingUrlUserId $user_id;
  public Long $validity;
}

class CreateStreamingURLResult {
  public Timestamp $expires;
  public string $streaming_url;
}

class CreateUsageReportSubscriptionRequest {
}

class CreateUsageReportSubscriptionResult {
  public string $s_3_bucket_name;
  public UsageReportSchedule $schedule;
}

class CreateUserRequest {
  public AuthenticationType $authentication_type;
  public UserAttributeValue $first_name;
  public UserAttributeValue $last_name;
  public MessageAction $message_action;
  public Username $user_name;
}

class CreateUserResult {
}

class DeleteDirectoryConfigRequest {
  public DirectoryName $directory_name;
}

class DeleteDirectoryConfigResult {
}

class DeleteFleetRequest {
  public string $name;
}

class DeleteFleetResult {
}

class DeleteImageBuilderRequest {
  public Name $name;
}

class DeleteImageBuilderResult {
  public ImageBuilder $image_builder;
}

class DeleteImagePermissionsRequest {
  public Name $name;
  public AwsAccountId $shared_account_id;
}

class DeleteImagePermissionsResult {
}

class DeleteImageRequest {
  public Name $name;
}

class DeleteImageResult {
  public Image $image;
}

class DeleteStackRequest {
  public string $name;
}

class DeleteStackResult {
}

class DeleteUsageReportSubscriptionRequest {
}

class DeleteUsageReportSubscriptionResult {
}

class DeleteUserRequest {
  public AuthenticationType $authentication_type;
  public Username $user_name;
}

class DeleteUserResult {
}

class DescribeDirectoryConfigsRequest {
  public DirectoryNameList $directory_names;
  public int $max_results;
  public string $next_token;
}

class DescribeDirectoryConfigsResult {
  public DirectoryConfigList $directory_configs;
  public string $next_token;
}

class DescribeFleetsRequest {
  public StringList $names;
  public string $next_token;
}

class DescribeFleetsResult {
  public FleetList $fleets;
  public string $next_token;
}

class DescribeImageBuildersRequest {
  public int $max_results;
  public StringList $names;
  public string $next_token;
}

class DescribeImageBuildersResult {
  public ImageBuilderList $image_builders;
  public string $next_token;
}

class DescribeImagePermissionsRequest {
  public MaxResults $max_results;
  public Name $name;
  public string $next_token;
  public AwsAccountIdList $shared_aws_account_ids;
}

class DescribeImagePermissionsResult {
  public Name $name;
  public string $next_token;
  public SharedImagePermissionsList $shared_image_permissions_list;
}

class DescribeImagesMaxResults {
}

class DescribeImagesRequest {
  public ArnList $arns;
  public DescribeImagesMaxResults $max_results;
  public StringList $names;
  public string $next_token;
  public VisibilityType $type;
}

class DescribeImagesResult {
  public ImageList $images;
  public string $next_token;
}

class DescribeSessionsRequest {
  public AuthenticationType $authentication_type;
  public string $fleet_name;
  public int $limit;
  public string $next_token;
  public string $stack_name;
  public UserId $user_id;
}

class DescribeSessionsResult {
  public string $next_token;
  public SessionList $sessions;
}

class DescribeStacksRequest {
  public StringList $names;
  public string $next_token;
}

class DescribeStacksResult {
  public string $next_token;
  public StackList $stacks;
}

class DescribeUsageReportSubscriptionsRequest {
  public int $max_results;
  public string $next_token;
}

class DescribeUsageReportSubscriptionsResult {
  public string $next_token;
  public UsageReportSubscriptionList $usage_report_subscriptions;
}

class DescribeUserStackAssociationsRequest {
  public AuthenticationType $authentication_type;
  public MaxResults $max_results;
  public string $next_token;
  public string $stack_name;
  public Username $user_name;
}

class DescribeUserStackAssociationsResult {
  public string $next_token;
  public UserStackAssociationList $user_stack_associations;
}

class DescribeUsersRequest {
  public AuthenticationType $authentication_type;
  public int $max_results;
  public string $next_token;
}

class DescribeUsersResult {
  public string $next_token;
  public UserList $users;
}

class Description {
}

class DirectoryConfig {
  public Timestamp $created_time;
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedNamesList $organizational_unit_distinguished_names;
  public ServiceAccountCredentials $service_account_credentials;
}

class DirectoryConfigList {
}

class DirectoryName {
}

class DirectoryNameList {
}

class DisableUserRequest {
  public AuthenticationType $authentication_type;
  public Username $user_name;
}

class DisableUserResult {
}

class DisassociateFleetRequest {
  public string $fleet_name;
  public string $stack_name;
}

class DisassociateFleetResult {
}

class DisplayName {
}

class Domain {
}

class DomainJoinInfo {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedName $organizational_unit_distinguished_name;
}

class DomainList {
}

class EmbedHostDomain {
}

class EmbedHostDomains {
}

class EnableUserRequest {
  public AuthenticationType $authentication_type;
  public Username $user_name;
}

class EnableUserResult {
}

class ErrorMessage {
}

class ExpireSessionRequest {
  public string $session_id;
}

class ExpireSessionResult {
}

class FeedbackURL {
}

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
}

class FleetAttribute {
}

class FleetAttributes {
}

class FleetError {
  public FleetErrorCode $error_code;
  public string $error_message;
}

class FleetErrorCode {
}

class FleetErrors {
}

class FleetList {
}

class FleetState {
}

class FleetType {
}

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
}

class ImageBuilderList {
}

class ImageBuilderState {
}

class ImageBuilderStateChangeReason {
  public ImageBuilderStateChangeReasonCode $code;
  public string $message;
}

class ImageBuilderStateChangeReasonCode {
}

class ImageList {
}

class ImagePermissions {
  public BooleanObject $allow_fleet;
  public BooleanObject $allow_image_builder;
}

class ImageState {
}

class ImageStateChangeReason {
  public ImageStateChangeReasonCode $code;
  public string $message;
}

class ImageStateChangeReasonCode {
}

class IncompatibleImageException {
  public ErrorMessage $message;
}

class Integer {
}

class InvalidAccountStatusException {
  public ErrorMessage $message;
}

class InvalidParameterCombinationException {
  public ErrorMessage $message;
}

class InvalidRoleException {
  public ErrorMessage $message;
}

class LastReportGenerationExecutionError {
  public UsageReportExecutionErrorCode $error_code;
  public string $error_message;
}

class LastReportGenerationExecutionErrors {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListAssociatedFleetsRequest {
  public string $next_token;
  public string $stack_name;
}

class ListAssociatedFleetsResult {
  public StringList $names;
  public string $next_token;
}

class ListAssociatedStacksRequest {
  public string $fleet_name;
  public string $next_token;
}

class ListAssociatedStacksResult {
  public StringList $names;
  public string $next_token;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class Long {
}

class MaxResults {
}

class MessageAction {
}

class Metadata {
}

class Name {
}

class NetworkAccessConfiguration {
  public string $eni_id;
  public string $eni_private_ip_address;
}

class OperationNotPermittedException {
  public ErrorMessage $message;
}

class OrganizationalUnitDistinguishedName {
}

class OrganizationalUnitDistinguishedNamesList {
}

class Permission {
}

class PlatformType {
}

class RedirectURL {
}

class RegionName {
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
}

class ResourceError {
  public FleetErrorCode $error_code;
  public string $error_message;
  public Timestamp $error_timestamp;
}

class ResourceErrors {
}

class ResourceIdentifier {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotAvailableException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class SecurityGroupIdList {
}

class ServiceAccountCredentials {
  public AccountName $account_name;
  public AccountPassword $account_password;
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
}

class SessionConnectionState {
}

class SessionList {
}

class SessionState {
}

class SettingsGroup {
}

class SharedImagePermissions {
  public ImagePermissions $image_permissions;
  public AwsAccountId $shared_account_id;
}

class SharedImagePermissionsList {
}

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
}

class StackAttribute {
}

class StackAttributes {
}

class StackError {
  public StackErrorCode $error_code;
  public string $error_message;
}

class StackErrorCode {
}

class StackErrors {
}

class StackList {
}

class StartFleetRequest {
  public string $name;
}

class StartFleetResult {
}

class StartImageBuilderRequest {
  public AppstreamAgentVersion $appstream_agent_version;
  public string $name;
}

class StartImageBuilderResult {
  public ImageBuilder $image_builder;
}

class StopFleetRequest {
  public string $name;
}

class StopFleetResult {
}

class StopImageBuilderRequest {
  public string $name;
}

class StopImageBuilderResult {
  public ImageBuilder $image_builder;
}

class StorageConnector {
  public StorageConnectorType $connector_type;
  public DomainList $domains;
  public ResourceIdentifier $resource_identifier;
}

class StorageConnectorList {
}

class StorageConnectorType {
}

class StreamingUrlUserId {
}

class String {
}

class StringList {
}

class SubnetIdList {
}

class TagKey {
}

class TagKeyList {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public Tags $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Tags {
}

class Timestamp {
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateDirectoryConfigRequest {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedNamesList $organizational_unit_distinguished_names;
  public ServiceAccountCredentials $service_account_credentials;
}

class UpdateDirectoryConfigResult {
  public DirectoryConfig $directory_config;
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
}

class UpdateFleetResult {
  public Fleet $fleet;
}

class UpdateImagePermissionsRequest {
  public ImagePermissions $image_permissions;
  public Name $name;
  public AwsAccountId $shared_account_id;
}

class UpdateImagePermissionsResult {
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
}

class UpdateStackResult {
  public Stack $stack;
}

class UsageReportExecutionErrorCode {
}

class UsageReportSchedule {
}

class UsageReportSubscription {
  public Timestamp $last_generated_report_date;
  public string $s_3_bucket_name;
  public UsageReportSchedule $schedule;
  public LastReportGenerationExecutionErrors $subscription_errors;
}

class UsageReportSubscriptionList {
}

class User {
  public Arn $arn;
  public AuthenticationType $authentication_type;
  public Timestamp $created_time;
  public boolean $enabled;
  public UserAttributeValue $first_name;
  public UserAttributeValue $last_name;
  public string $status;
  public Username $user_name;
}

class UserAttributeValue {
}

class UserId {
}

class UserList {
}

class UserSetting {
  public Action $action;
  public Permission $permission;
}

class UserSettingList {
}

class UserStackAssociation {
  public AuthenticationType $authentication_type;
  public boolean $send_email_notification;
  public string $stack_name;
  public Username $user_name;
}

class UserStackAssociationError {
  public UserStackAssociationErrorCode $error_code;
  public string $error_message;
  public UserStackAssociation $user_stack_association;
}

class UserStackAssociationErrorCode {
}

class UserStackAssociationErrorList {
}

class UserStackAssociationList {
}

class Username {
}

class VisibilityType {
}

class VpcConfig {
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
}

