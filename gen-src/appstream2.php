<?hh // strict
namespace slack\aws\appstream2;

interface AppStream {
  public function ExpireSession(ExpireSessionRequest) Awaitable<Errors\Result<ExpireSessionResult>>;
  public function UpdateFleet(UpdateFleetRequest) Awaitable<Errors\Result<UpdateFleetResult>>;
  public function DeleteFleet(DeleteFleetRequest) Awaitable<Errors\Result<DeleteFleetResult>>;
  public function DeleteImage(DeleteImageRequest) Awaitable<Errors\Result<DeleteImageResult>>;
  public function DescribeFleets(DescribeFleetsRequest) Awaitable<Errors\Result<DescribeFleetsResult>>;
  public function DisableUser(DisableUserRequest) Awaitable<Errors\Result<DisableUserResult>>;
  public function DisassociateFleet(DisassociateFleetRequest) Awaitable<Errors\Result<DisassociateFleetResult>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDirectoryConfig(UpdateDirectoryConfigRequest) Awaitable<Errors\Result<UpdateDirectoryConfigResult>>;
  public function CreateStreamingURL(CreateStreamingURLRequest) Awaitable<Errors\Result<CreateStreamingURLResult>>;
  public function DeleteImagePermissions(DeleteImagePermissionsRequest) Awaitable<Errors\Result<DeleteImagePermissionsResult>>;
  public function DescribeUsers(DescribeUsersRequest) Awaitable<Errors\Result<DescribeUsersResult>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function AssociateFleet(AssociateFleetRequest) Awaitable<Errors\Result<AssociateFleetResult>>;
  public function DeleteImageBuilder(DeleteImageBuilderRequest) Awaitable<Errors\Result<DeleteImageBuilderResult>>;
  public function EnableUser(EnableUserRequest) Awaitable<Errors\Result<EnableUserResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function UpdateImagePermissions(UpdateImagePermissionsRequest) Awaitable<Errors\Result<UpdateImagePermissionsResult>>;
  public function UpdateStack(UpdateStackRequest) Awaitable<Errors\Result<UpdateStackResult>>;
  public function CreateDirectoryConfig(CreateDirectoryConfigRequest) Awaitable<Errors\Result<CreateDirectoryConfigResult>>;
  public function CreateFleet(CreateFleetRequest) Awaitable<Errors\Result<CreateFleetResult>>;
  public function CreateStack(CreateStackRequest) Awaitable<Errors\Result<CreateStackResult>>;
  public function DeleteDirectoryConfig(DeleteDirectoryConfigRequest) Awaitable<Errors\Result<DeleteDirectoryConfigResult>>;
  public function ListAssociatedStacks(ListAssociatedStacksRequest) Awaitable<Errors\Result<ListAssociatedStacksResult>>;
  public function DeleteUsageReportSubscription(DeleteUsageReportSubscriptionRequest) Awaitable<Errors\Result<DeleteUsageReportSubscriptionResult>>;
  public function DescribeImagePermissions(DescribeImagePermissionsRequest) Awaitable<Errors\Result<DescribeImagePermissionsResult>>;
  public function DescribeImages(DescribeImagesRequest) Awaitable<Errors\Result<DescribeImagesResult>>;
  public function DescribeUsageReportSubscriptions(DescribeUsageReportSubscriptionsRequest) Awaitable<Errors\Result<DescribeUsageReportSubscriptionsResult>>;
  public function CreateImageBuilderStreamingURL(CreateImageBuilderStreamingURLRequest) Awaitable<Errors\Result<CreateImageBuilderStreamingURLResult>>;
  public function CreateUsageReportSubscription(CreateUsageReportSubscriptionRequest) Awaitable<Errors\Result<CreateUsageReportSubscriptionResult>>;
  public function DescribeImageBuilders(DescribeImageBuildersRequest) Awaitable<Errors\Result<DescribeImageBuildersResult>>;
  public function DescribeSessions(DescribeSessionsRequest) Awaitable<Errors\Result<DescribeSessionsResult>>;
  public function ListAssociatedFleets(ListAssociatedFleetsRequest) Awaitable<Errors\Result<ListAssociatedFleetsResult>>;
  public function StartImageBuilder(StartImageBuilderRequest) Awaitable<Errors\Result<StartImageBuilderResult>>;
  public function StopFleet(StopFleetRequest) Awaitable<Errors\Result<StopFleetResult>>;
  public function DescribeDirectoryConfigs(DescribeDirectoryConfigsRequest) Awaitable<Errors\Result<DescribeDirectoryConfigsResult>>;
  public function BatchAssociateUserStack(BatchAssociateUserStackRequest) Awaitable<Errors\Result<BatchAssociateUserStackResult>>;
  public function BatchDisassociateUserStack(BatchDisassociateUserStackRequest) Awaitable<Errors\Result<BatchDisassociateUserStackResult>>;
  public function CopyImage(CopyImageRequest) Awaitable<Errors\Result<CopyImageResponse>>;
  public function CreateImageBuilder(CreateImageBuilderRequest) Awaitable<Errors\Result<CreateImageBuilderResult>>;
  public function CreateUser(CreateUserRequest) Awaitable<Errors\Result<CreateUserResult>>;
  public function DeleteStack(DeleteStackRequest) Awaitable<Errors\Result<DeleteStackResult>>;
  public function DeleteUser(DeleteUserRequest) Awaitable<Errors\Result<DeleteUserResult>>;
  public function DescribeStacks(DescribeStacksRequest) Awaitable<Errors\Result<DescribeStacksResult>>;
  public function DescribeUserStackAssociations(DescribeUserStackAssociationsRequest) Awaitable<Errors\Result<DescribeUserStackAssociationsResult>>;
  public function StartFleet(StartFleetRequest) Awaitable<Errors\Result<StartFleetResult>>;
  public function StopImageBuilder(StopImageBuilderRequest) Awaitable<Errors\Result<StopImageBuilderResult>>;
}

class RegionName {
}

class StartImageBuilderRequest {
  public string $name;
  public AppstreamAgentVersion $appstream_agent_version;
}

class CreateStackResult {
  public Stack $stack;
}

class FeedbackURL {
}

class ImageBuilderStateChangeReasonCode {
}

class StopImageBuilderRequest {
  public string $name;
}

class ImageList {
}

class Tags {
}

class Arn {
}

class AwsAccountIdList {
}

class UpdateFleetRequest {
  public string $name;
  public int $idle_disconnect_timeout_in_seconds;
  public FleetAttributes $attributes_to_delete;
  public Arn $iam_role_arn;
  public DomainJoinInfo $domain_join_info;
  public Arn $image_arn;
  public string $instance_type;
  public ComputeCapacity $compute_capacity;
  public int $disconnect_timeout_in_seconds;
  public boolean $delete_vpc_config;
  public DisplayName $display_name;
  public string $image_name;
  public Description $description;
  public BooleanObject $enable_default_internet_access;
  public VpcConfig $vpc_config;
  public int $max_user_duration_in_seconds;
}

class AuthenticationType {
}

class ComputeCapacityStatus {
  public int $in_use;
  public int $available;
  public int $desired;
  public int $running;
}

class StackErrorCode {
}

class AccountName {
}

class DirectoryConfig {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedNamesList $organizational_unit_distinguished_names;
  public ServiceAccountCredentials $service_account_credentials;
  public Timestamp $created_time;
}

class Name {
}

class Applications {
}

class CreateUserRequest {
  public AuthenticationType $authentication_type;
  public Username $user_name;
  public MessageAction $message_action;
  public UserAttributeValue $first_name;
  public UserAttributeValue $last_name;
}

class Session {
  public SessionState $state;
  public Timestamp $start_time;
  public Timestamp $max_expiration_time;
  public AuthenticationType $authentication_type;
  public UserId $user_id;
  public string $stack_name;
  public SessionConnectionState $connection_state;
  public NetworkAccessConfiguration $network_access_configuration;
  public string $id;
  public string $fleet_name;
}

class StopFleetResult {
}

class StopImageBuilderResult {
  public ImageBuilder $image_builder;
}

class ApplicationSettingsResponse {
  public boolean $enabled;
  public SettingsGroup $settings_group;
  public string $s_3_bucket_name;
}

class BatchAssociateUserStackResult {
  public UserStackAssociationErrorList $errors;
}

class ErrorMessage {
}

class ResourceError {
  public FleetErrorCode $error_code;
  public string $error_message;
  public Timestamp $error_timestamp;
}

class AssociateFleetRequest {
  public string $fleet_name;
  public string $stack_name;
}

class DeleteImageBuilderResult {
  public ImageBuilder $image_builder;
}

class DescribeUsersResult {
  public UserList $users;
  public string $next_token;
}

class CreateDirectoryConfigRequest {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedNamesList $organizational_unit_distinguished_names;
  public ServiceAccountCredentials $service_account_credentials;
}

class InvalidAccountStatusException {
  public ErrorMessage $message;
}

class InvalidParameterCombinationException {
  public ErrorMessage $message;
}

class LastReportGenerationExecutionError {
  public UsageReportExecutionErrorCode $error_code;
  public string $error_message;
}

class ResourceErrors {
}

class CreateFleetResult {
  public Fleet $fleet;
}

class DescribeFleetsResult {
  public FleetList $fleets;
  public string $next_token;
}

class DeleteDirectoryConfigResult {
}

class Stack {
  public AccessEndpointList $access_endpoints;
  public EmbedHostDomains $embed_host_domains;
  public Arn $arn;
  public string $description;
  public string $display_name;
  public RedirectURL $redirect_url;
  public ApplicationSettingsResponse $application_settings;
  public UserSettingList $user_settings;
  public string $name;
  public Timestamp $created_time;
  public StorageConnectorList $storage_connectors;
  public FeedbackURL $feedback_url;
  public StackErrors $stack_errors;
}

class CreateStreamingURLRequest {
  public string $stack_name;
  public string $fleet_name;
  public StreamingUrlUserId $user_id;
  public string $application_id;
  public Long $validity;
  public string $session_context;
}

class FleetState {
}

class FleetList {
}

class ImageBuilderList {
}

class BatchDisassociateUserStackRequest {
  public UserStackAssociationList $user_stack_associations;
}

class Description {
}

class LastReportGenerationExecutionErrors {
}

class SessionList {
}

class UpdateFleetResult {
  public Fleet $fleet;
}

class Image {
  public string $description;
  public Timestamp $public_base_image_released_date;
  public ImagePermissions $image_permissions;
  public Arn $arn;
  public ImageState $state;
  public Applications $applications;
  public VisibilityType $visibility;
  public PlatformType $platform;
  public Timestamp $created_time;
  public string $name;
  public Arn $base_image_arn;
  public string $display_name;
  public AppstreamAgentVersion $appstream_agent_version;
  public boolean $image_builder_supported;
  public string $image_builder_name;
  public ImageStateChangeReason $state_change_reason;
}

class OrganizationalUnitDistinguishedNamesList {
}

class StringList {
}

class CreateUserResult {
}

class DeleteImageResult {
  public Image $image;
}

class DescribeSessionsRequest {
  public string $stack_name;
  public string $fleet_name;
  public UserId $user_id;
  public string $next_token;
  public int $limit;
  public AuthenticationType $authentication_type;
}

class ServiceAccountCredentials {
  public AccountName $account_name;
  public AccountPassword $account_password;
}

class StreamingUrlUserId {
}

class UpdateImagePermissionsResult {
}

class UserStackAssociationErrorList {
}

class UserStackAssociationList {
}

class CreateImageBuilderRequest {
  public DisplayName $display_name;
  public Arn $iam_role_arn;
  public Tags $tags;
  public Arn $image_arn;
  public string $instance_type;
  public Description $description;
  public VpcConfig $vpc_config;
  public BooleanObject $enable_default_internet_access;
  public DomainJoinInfo $domain_join_info;
  public AppstreamAgentVersion $appstream_agent_version;
  public AccessEndpointList $access_endpoints;
  public Name $name;
  public string $image_name;
}

class DeleteDirectoryConfigRequest {
  public DirectoryName $directory_name;
}

class DescribeImagePermissionsResult {
  public Name $name;
  public SharedImagePermissionsList $shared_image_permissions_list;
  public string $next_token;
}

class RedirectURL {
}

class SharedImagePermissionsList {
}

class TagValue {
}

class AccessEndpointList {
}

class DeleteImagePermissionsRequest {
  public Name $name;
  public AwsAccountId $shared_account_id;
}

class ExpireSessionRequest {
  public string $session_id;
}

class ResourceNotAvailableException {
  public ErrorMessage $message;
}

class StorageConnector {
  public StorageConnectorType $connector_type;
  public ResourceIdentifier $resource_identifier;
  public DomainList $domains;
}

class VpcConfig {
  public SubnetIdList $subnet_ids;
  public SecurityGroupIdList $security_group_ids;
}

class UserStackAssociationError {
  public string $error_message;
  public UserStackAssociation $user_stack_association;
  public UserStackAssociationErrorCode $error_code;
}

class DescribeImagePermissionsRequest {
  public Name $name;
  public MaxResults $max_results;
  public AwsAccountIdList $shared_aws_account_ids;
  public string $next_token;
}

class FleetAttributes {
}

class UserList {
}

class ComputeCapacity {
  public int $desired_instances;
}

class DeleteUsageReportSubscriptionResult {
}

class UsageReportSubscription {
  public string $s_3_bucket_name;
  public UsageReportSchedule $schedule;
  public Timestamp $last_generated_report_date;
  public LastReportGenerationExecutionErrors $subscription_errors;
}

class DescribeDirectoryConfigsRequest {
  public string $next_token;
  public DirectoryNameList $directory_names;
  public int $max_results;
}

class DescribeStacksRequest {
  public StringList $names;
  public string $next_token;
}

class ListAssociatedFleetsResult {
  public StringList $names;
  public string $next_token;
}

class StackErrors {
}

class StartFleetRequest {
  public string $name;
}

class DescribeDirectoryConfigsResult {
  public DirectoryConfigList $directory_configs;
  public string $next_token;
}

class DescribeImagesRequest {
  public VisibilityType $type;
  public string $next_token;
  public DescribeImagesMaxResults $max_results;
  public StringList $names;
  public ArnList $arns;
}

class SettingsGroup {
}

class UpdateDirectoryConfigResult {
  public DirectoryConfig $directory_config;
}

class UserAttributeValue {
}

class DisassociateFleetRequest {
  public string $fleet_name;
  public string $stack_name;
}

class UserId {
}

class DirectoryName {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class DescribeImagesMaxResults {
}

class FleetType {
}

class MaxResults {
}

class UsageReportSubscriptionList {
}

class BatchDisassociateUserStackResult {
  public UserStackAssociationErrorList $errors;
}

class DeleteImageBuilderRequest {
  public Name $name;
}

class DomainJoinInfo {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedName $organizational_unit_distinguished_name;
}

class FleetAttribute {
}

class FleetErrorCode {
}

class OrganizationalUnitDistinguishedName {
}

class TagResourceResponse {
}

class UserStackAssociationErrorCode {
}

class DeleteImageRequest {
  public Name $name;
}

class DescribeImageBuildersResult {
  public ImageBuilderList $image_builders;
  public string $next_token;
}

class OperationNotPermittedException {
  public ErrorMessage $message;
}

class AccountPassword {
}

class CreateDirectoryConfigResult {
  public DirectoryConfig $directory_config;
}

class CreateFleetRequest {
  public Arn $image_arn;
  public FleetType $fleet_type;
  public int $idle_disconnect_timeout_in_seconds;
  public string $image_name;
  public VpcConfig $vpc_config;
  public int $max_user_duration_in_seconds;
  public Arn $iam_role_arn;
  public Name $name;
  public ComputeCapacity $compute_capacity;
  public DisplayName $display_name;
  public DomainJoinInfo $domain_join_info;
  public string $instance_type;
  public int $disconnect_timeout_in_seconds;
  public Description $description;
  public BooleanObject $enable_default_internet_access;
  public Tags $tags;
}

class DescribeImagesResult {
  public string $next_token;
  public ImageList $images;
}

class EmbedHostDomain {
}

class ListAssociatedStacksResult {
  public StringList $names;
  public string $next_token;
}

class CreateStackRequest {
  public Name $name;
  public AccessEndpointList $access_endpoints;
  public Description $description;
  public DisplayName $display_name;
  public StorageConnectorList $storage_connectors;
  public RedirectURL $redirect_url;
  public FeedbackURL $feedback_url;
  public UserSettingList $user_settings;
  public ApplicationSettings $application_settings;
  public Tags $tags;
  public EmbedHostDomains $embed_host_domains;
}

class DisplayName {
}

class Metadata {
}

class PlatformType {
}

class ArnList {
}

class DescribeSessionsResult {
  public SessionList $sessions;
  public string $next_token;
}

class DescribeUsageReportSubscriptionsRequest {
  public int $max_results;
  public string $next_token;
}

class DisableUserResult {
}

class ImageState {
}

class InvalidRoleException {
  public ErrorMessage $message;
}

class UntagResourceResponse {
}

class AccessEndpoint {
  public AccessEndpointType $endpoint_type;
  public string $vpce_id;
}

class DisableUserRequest {
  public AuthenticationType $authentication_type;
  public Username $user_name;
}

class TagKeyList {
}

class UpdateImagePermissionsRequest {
  public Name $name;
  public AwsAccountId $shared_account_id;
  public ImagePermissions $image_permissions;
}

class DirectoryNameList {
}

class Domain {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class DescribeFleetsRequest {
  public string $next_token;
  public StringList $names;
}

class DescribeImageBuildersRequest {
  public StringList $names;
  public int $max_results;
  public string $next_token;
}

class DescribeUserStackAssociationsResult {
  public UserStackAssociationList $user_stack_associations;
  public string $next_token;
}

class EnableUserResult {
}

class UserSetting {
  public Action $action;
  public Permission $permission;
}

class DeleteStackRequest {
  public string $name;
}

class DisassociateFleetResult {
}

class EnableUserRequest {
  public Username $user_name;
  public AuthenticationType $authentication_type;
}

class ImagePermissions {
  public BooleanObject $allow_fleet;
  public BooleanObject $allow_image_builder;
}

class UserSettingList {
}

class BooleanObject {
}

class DirectoryConfigList {
}

class ImageBuilderStateChangeReason {
  public ImageBuilderStateChangeReasonCode $code;
  public string $message;
}

class NetworkAccessConfiguration {
  public string $eni_private_ip_address;
  public string $eni_id;
}

class StorageConnectorList {
}

class CreateImageBuilderStreamingURLResult {
  public string $streaming_url;
  public Timestamp $expires;
}

class String {
}

class AppstreamAgentVersion {
}

class DomainList {
}

class Integer {
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class Action {
}

class ImageBuilderState {
}

class CreateUsageReportSubscriptionResult {
  public string $s_3_bucket_name;
  public UsageReportSchedule $schedule;
}

class DescribeStacksResult {
  public string $next_token;
  public StackList $stacks;
}

class ImageStateChangeReason {
  public ImageStateChangeReasonCode $code;
  public string $message;
}

class ResourceIdentifier {
}

class UsageReportExecutionErrorCode {
}

class Username {
}

class CopyImageRequest {
  public Description $destination_image_description;
  public Name $source_image_name;
  public Name $destination_image_name;
  public RegionName $destination_region;
}

class DeleteFleetRequest {
  public string $name;
}

class DeleteUsageReportSubscriptionRequest {
}

class EmbedHostDomains {
}

class IncompatibleImageException {
  public ErrorMessage $message;
}

class SecurityGroupIdList {
}

class SessionState {
}

class SharedImagePermissions {
  public AwsAccountId $shared_account_id;
  public ImagePermissions $image_permissions;
}

class StackError {
  public StackErrorCode $error_code;
  public string $error_message;
}

class StorageConnectorType {
}

class TagResourceRequest {
  public Tags $tags;
  public Arn $resource_arn;
}

class ExpireSessionResult {
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class Long {
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
}

class StackList {
}

class UsageReportSchedule {
}

class StartFleetResult {
}

class DeleteUserRequest {
  public Username $user_name;
  public AuthenticationType $authentication_type;
}

class DescribeUserStackAssociationsRequest {
  public string $stack_name;
  public Username $user_name;
  public AuthenticationType $authentication_type;
  public MaxResults $max_results;
  public string $next_token;
}

class MessageAction {
}

class StartImageBuilderResult {
  public ImageBuilder $image_builder;
}

class DeleteImagePermissionsResult {
}

class AssociateFleetResult {
}

class Boolean {
}

class DeleteUserResult {
}

class User {
  public boolean $enabled;
  public string $status;
  public UserAttributeValue $first_name;
  public UserAttributeValue $last_name;
  public Timestamp $created_time;
  public AuthenticationType $authentication_type;
  public Arn $arn;
  public Username $user_name;
}

class AwsAccountId {
}

class DescribeUsageReportSubscriptionsResult {
  public UsageReportSubscriptionList $usage_report_subscriptions;
  public string $next_token;
}

class FleetErrors {
}

class Permission {
}

class SubnetIdList {
}

class AccessEndpointType {
}

class CreateImageBuilderResult {
  public ImageBuilder $image_builder;
}

class CreateStreamingURLResult {
  public string $streaming_url;
  public Timestamp $expires;
}

class DeleteFleetResult {
}

class StackAttributes {
}

class Application {
  public Metadata $metadata;
  public string $name;
  public string $display_name;
  public string $icon_url;
  public string $launch_path;
  public string $launch_parameters;
  public boolean $enabled;
}

class BatchAssociateUserStackRequest {
  public UserStackAssociationList $user_stack_associations;
}

class CreateImageBuilderStreamingURLRequest {
  public string $name;
  public Long $validity;
}

class CreateUsageReportSubscriptionRequest {
}

class DescribeUsersRequest {
  public AuthenticationType $authentication_type;
  public int $max_results;
  public string $next_token;
}

class Fleet {
  public string $image_name;
  public FleetState $state;
  public VpcConfig $vpc_config;
  public DomainJoinInfo $domain_join_info;
  public Arn $iam_role_arn;
  public string $display_name;
  public Arn $image_arn;
  public int $disconnect_timeout_in_seconds;
  public Timestamp $created_time;
  public FleetErrors $fleet_errors;
  public BooleanObject $enable_default_internet_access;
  public int $idle_disconnect_timeout_in_seconds;
  public Arn $arn;
  public string $name;
  public string $description;
  public string $instance_type;
  public FleetType $fleet_type;
  public ComputeCapacityStatus $compute_capacity_status;
  public int $max_user_duration_in_seconds;
}

class FleetError {
  public string $error_message;
  public FleetErrorCode $error_code;
}

class ImageBuilder {
  public string $display_name;
  public NetworkAccessConfiguration $network_access_configuration;
  public string $description;
  public AppstreamAgentVersion $appstream_agent_version;
  public VpcConfig $vpc_config;
  public Arn $iam_role_arn;
  public ImageBuilderState $state;
  public Timestamp $created_time;
  public BooleanObject $enable_default_internet_access;
  public ResourceErrors $image_builder_errors;
  public DomainJoinInfo $domain_join_info;
  public AccessEndpointList $access_endpoints;
  public string $name;
  public Arn $arn;
  public Arn $image_arn;
  public string $instance_type;
  public PlatformType $platform;
  public ImageBuilderStateChangeReason $state_change_reason;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListAssociatedFleetsRequest {
  public string $stack_name;
  public string $next_token;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class TagKey {
}

class UpdateStackRequest {
  public Description $description;
  public string $name;
  public boolean $delete_storage_connectors;
  public FeedbackURL $feedback_url;
  public AccessEndpointList $access_endpoints;
  public DisplayName $display_name;
  public RedirectURL $redirect_url;
  public StackAttributes $attributes_to_delete;
  public UserSettingList $user_settings;
  public ApplicationSettings $application_settings;
  public EmbedHostDomains $embed_host_domains;
  public StorageConnectorList $storage_connectors;
}

class ConcurrentModificationException {
  public ErrorMessage $message;
}

class ListAssociatedStacksRequest {
  public string $fleet_name;
  public string $next_token;
}

class UserStackAssociation {
  public string $stack_name;
  public Username $user_name;
  public AuthenticationType $authentication_type;
  public boolean $send_email_notification;
}

class ApplicationSettings {
  public boolean $enabled;
  public SettingsGroup $settings_group;
}

class CopyImageResponse {
  public Name $destination_image_name;
}

class ImageStateChangeReasonCode {
}

class SessionConnectionState {
}

class StackAttribute {
}

class StopFleetRequest {
  public string $name;
}

class Timestamp {
}

class VisibilityType {
}

class DeleteStackResult {
}

class UpdateDirectoryConfigRequest {
  public DirectoryName $directory_name;
  public OrganizationalUnitDistinguishedNamesList $organizational_unit_distinguished_names;
  public ServiceAccountCredentials $service_account_credentials;
}

class UpdateStackResult {
  public Stack $stack;
}

