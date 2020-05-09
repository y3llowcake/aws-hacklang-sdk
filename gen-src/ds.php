<?hh // strict
namespace slack\aws\ds;

interface Directory Service {
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function RemoveIpRoutes(RemoveIpRoutesRequest) Awaitable<Errors\Result<RemoveIpRoutesResult>>;
  public function StartSchemaExtension(StartSchemaExtensionRequest) Awaitable<Errors\Result<StartSchemaExtensionResult>>;
  public function DeregisterCertificate(DeregisterCertificateRequest) Awaitable<Errors\Result<DeregisterCertificateResult>>;
  public function DescribeSnapshots(DescribeSnapshotsRequest) Awaitable<Errors\Result<DescribeSnapshotsResult>>;
  public function DisableLDAPS(DisableLDAPSRequest) Awaitable<Errors\Result<DisableLDAPSResult>>;
  public function DisableRadius(DisableRadiusRequest) Awaitable<Errors\Result<DisableRadiusResult>>;
  public function ListCertificates(ListCertificatesRequest) Awaitable<Errors\Result<ListCertificatesResult>>;
  public function ListLogSubscriptions(ListLogSubscriptionsRequest) Awaitable<Errors\Result<ListLogSubscriptionsResult>>;
  public function UpdateRadius(UpdateRadiusRequest) Awaitable<Errors\Result<UpdateRadiusResult>>;
  public function VerifyTrust(VerifyTrustRequest) Awaitable<Errors\Result<VerifyTrustResult>>;
  public function ConnectDirectory(ConnectDirectoryRequest) Awaitable<Errors\Result<ConnectDirectoryResult>>;
  public function DeleteConditionalForwarder(DeleteConditionalForwarderRequest) Awaitable<Errors\Result<DeleteConditionalForwarderResult>>;
  public function DeleteTrust(DeleteTrustRequest) Awaitable<Errors\Result<DeleteTrustResult>>;
  public function CreateAlias(CreateAliasRequest) Awaitable<Errors\Result<CreateAliasResult>>;
  public function DescribeConditionalForwarders(DescribeConditionalForwardersRequest) Awaitable<Errors\Result<DescribeConditionalForwardersResult>>;
  public function RejectSharedDirectory(RejectSharedDirectoryRequest) Awaitable<Errors\Result<RejectSharedDirectoryResult>>;
  public function UpdateConditionalForwarder(UpdateConditionalForwarderRequest) Awaitable<Errors\Result<UpdateConditionalForwarderResult>>;
  public function DeleteDirectory(DeleteDirectoryRequest) Awaitable<Errors\Result<DeleteDirectoryResult>>;
  public function DescribeSharedDirectories(DescribeSharedDirectoriesRequest) Awaitable<Errors\Result<DescribeSharedDirectoriesResult>>;
  public function DisableSso(DisableSsoRequest) Awaitable<Errors\Result<DisableSsoResult>>;
  public function CreateComputer(CreateComputerRequest) Awaitable<Errors\Result<CreateComputerResult>>;
  public function CreateMicrosoftAD(CreateMicrosoftADRequest) Awaitable<Errors\Result<CreateMicrosoftADResult>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceRequest) Awaitable<Errors\Result<RemoveTagsFromResourceResult>>;
  public function ListIpRoutes(ListIpRoutesRequest) Awaitable<Errors\Result<ListIpRoutesResult>>;
  public function UnshareDirectory(UnshareDirectoryRequest) Awaitable<Errors\Result<UnshareDirectoryResult>>;
  public function RestoreFromSnapshot(RestoreFromSnapshotRequest) Awaitable<Errors\Result<RestoreFromSnapshotResult>>;
  public function DeleteSnapshot(DeleteSnapshotRequest) Awaitable<Errors\Result<DeleteSnapshotResult>>;
  public function DescribeDirectories(DescribeDirectoriesRequest) Awaitable<Errors\Result<DescribeDirectoriesResult>>;
  public function EnableLDAPS(EnableLDAPSRequest) Awaitable<Errors\Result<EnableLDAPSResult>>;
  public function AddIpRoutes(AddIpRoutesRequest) Awaitable<Errors\Result<AddIpRoutesResult>>;
  public function DescribeEventTopics(DescribeEventTopicsRequest) Awaitable<Errors\Result<DescribeEventTopicsResult>>;
  public function EnableSso(EnableSsoRequest) Awaitable<Errors\Result<EnableSsoResult>>;
  public function DeregisterEventTopic(DeregisterEventTopicRequest) Awaitable<Errors\Result<DeregisterEventTopicResult>>;
  public function CreateTrust(CreateTrustRequest) Awaitable<Errors\Result<CreateTrustResult>>;
  public function UpdateTrust(UpdateTrustRequest) Awaitable<Errors\Result<UpdateTrustResult>>;
  public function DeleteLogSubscription(DeleteLogSubscriptionRequest) Awaitable<Errors\Result<DeleteLogSubscriptionResult>>;
  public function RegisterEventTopic(RegisterEventTopicRequest) Awaitable<Errors\Result<RegisterEventTopicResult>>;
  public function AddTagsToResource(AddTagsToResourceRequest) Awaitable<Errors\Result<AddTagsToResourceResult>>;
  public function CreateLogSubscription(CreateLogSubscriptionRequest) Awaitable<Errors\Result<CreateLogSubscriptionResult>>;
  public function CreateSnapshot(CreateSnapshotRequest) Awaitable<Errors\Result<CreateSnapshotResult>>;
  public function ListSchemaExtensions(ListSchemaExtensionsRequest) Awaitable<Errors\Result<ListSchemaExtensionsResult>>;
  public function CancelSchemaExtension(CancelSchemaExtensionRequest) Awaitable<Errors\Result<CancelSchemaExtensionResult>>;
  public function DescribeCertificate(DescribeCertificateRequest) Awaitable<Errors\Result<DescribeCertificateResult>>;
  public function DescribeLDAPSSettings(DescribeLDAPSSettingsRequest) Awaitable<Errors\Result<DescribeLDAPSSettingsResult>>;
  public function EnableRadius(EnableRadiusRequest) Awaitable<Errors\Result<EnableRadiusResult>>;
  public function ResetUserPassword(ResetUserPasswordRequest) Awaitable<Errors\Result<ResetUserPasswordResult>>;
  public function CreateConditionalForwarder(CreateConditionalForwarderRequest) Awaitable<Errors\Result<CreateConditionalForwarderResult>>;
  public function DescribeTrusts(DescribeTrustsRequest) Awaitable<Errors\Result<DescribeTrustsResult>>;
  public function GetSnapshotLimits(GetSnapshotLimitsRequest) Awaitable<Errors\Result<GetSnapshotLimitsResult>>;
  public function GetDirectoryLimits(GetDirectoryLimitsRequest) Awaitable<Errors\Result<GetDirectoryLimitsResult>>;
  public function RegisterCertificate(RegisterCertificateRequest) Awaitable<Errors\Result<RegisterCertificateResult>>;
  public function ShareDirectory(ShareDirectoryRequest) Awaitable<Errors\Result<ShareDirectoryResult>>;
  public function UpdateNumberOfDomainControllers(UpdateNumberOfDomainControllersRequest) Awaitable<Errors\Result<UpdateNumberOfDomainControllersResult>>;
  public function AcceptSharedDirectory(AcceptSharedDirectoryRequest) Awaitable<Errors\Result<AcceptSharedDirectoryResult>>;
  public function CreateDirectory(CreateDirectoryRequest) Awaitable<Errors\Result<CreateDirectoryResult>>;
  public function DescribeDomainControllers(DescribeDomainControllersRequest) Awaitable<Errors\Result<DescribeDomainControllersResult>>;
}

class CertificateCN {
}

class DomainController {
  public DirectoryId $directory_id;
  public DomainControllerId $domain_controller_id;
  public SubnetId $subnet_id;
  public AvailabilityZone $availability_zone;
  public LaunchTime $launch_time;
  public IpAddr $dns_ip_addr;
  public VpcId $vpc_id;
  public DomainControllerStatus $status;
  public DomainControllerStatusReason $status_reason;
  public LastUpdatedDateTime $status_last_updated_date_time;
}

class TagLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class UnsupportedOperationException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class IpAddrs {
}

class RemoveTagsFromResourceResult {
}

class SchemaExtensionId {
}

class StageReason {
}

class TagKey {
}

class CreateConditionalForwarderRequest {
  public DirectoryId $directory_id;
  public RemoteDomainName $remote_domain_name;
  public DnsIpAddrs $dns_ip_addrs;
}

class ExceptionMessage {
}

class ListCertificatesResult {
  public NextToken $next_token;
  public CertificatesInfo $certificates_info;
}

class TrustStateReason {
}

class CancelSchemaExtensionResult {
}

class DeleteLogSubscriptionRequest {
  public DirectoryId $directory_id;
}

class DomainControllerId {
}

class IpRoutesInfo {
}

class RadiusTimeout {
}

class RemoveIpRoutesResult {
}

class SsoEnabled {
}

class SubnetId {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class AvailabilityZone {
}

class CreateConditionalForwarderResult {
}

class CreateLogSubscriptionRequest {
  public DirectoryId $directory_id;
  public LogGroupName $log_group_name;
}

class DeregisterCertificateRequest {
  public CertificateId $certificate_id;
  public DirectoryId $directory_id;
}

class DescribeDomainControllersResult {
  public DomainControllers $domain_controllers;
  public NextToken $next_token;
}

class DescribeSnapshotsResult {
  public Snapshots $snapshots;
  public NextToken $next_token;
}

class SnapshotType {
}

class UpdateConditionalForwarderResult {
}

class UpdateNumberOfDomainControllersResult {
}

class EnableRadiusResult {
}

class Trust {
  public TrustType $trust_type;
  public TrustDirection $trust_direction;
  public CreatedDateTime $created_date_time;
  public TrustStateReason $trust_state_reason;
  public SelectiveAuth $selective_auth;
  public StateLastUpdatedDateTime $state_last_updated_date_time;
  public DirectoryId $directory_id;
  public TrustId $trust_id;
  public RemoteDomainName $remote_domain_name;
  public TrustState $trust_state;
  public LastUpdatedDateTime $last_updated_date_time;
}

class UnshareTarget {
  public TargetId $id;
  public TargetType $type;
}

class UpdateConditionalForwarderRequest {
  public DirectoryId $directory_id;
  public RemoteDomainName $remote_domain_name;
  public DnsIpAddrs $dns_ip_addrs;
}

class AddIpRoutesResult {
}

class CreateSnapshotResult {
  public SnapshotId $snapshot_id;
}

class CustomerUserName {
}

class DeleteDirectoryRequest {
  public DirectoryId $directory_id;
}

class IpRouteInfo {
  public Description $description;
  public DirectoryId $directory_id;
  public CidrIp $cidr_ip;
  public IpRouteStatusMsg $ip_route_status_msg;
  public AddedDateTime $added_date_time;
  public IpRouteStatusReason $ip_route_status_reason;
}

class LaunchTime {
}

class CreateSnapshotRequest {
  public SnapshotName $name;
  public DirectoryId $directory_id;
}

class DescribeDomainControllersRequest {
  public DomainControllerIds $domain_controller_ids;
  public NextToken $next_token;
  public Limit $limit;
  public DirectoryId $directory_id;
}

class EnableSsoRequest {
  public DirectoryId $directory_id;
  public UserName $user_name;
  public ConnectPassword $password;
}

class RestoreFromSnapshotRequest {
  public SnapshotId $snapshot_id;
}

class StartTime {
}

class TrustPassword {
}

class ConditionalForwarders {
}

class DescribeEventTopicsResult {
  public EventTopics $event_topics;
}

class DescribeLDAPSSettingsRequest {
  public DirectoryId $directory_id;
  public LDAPSType $type;
  public NextToken $next_token;
  public PageLimit $limit;
}

class DirectoryVpcSettingsDescription {
  public SecurityGroupId $security_group_id;
  public AvailabilityZones $availability_zones;
  public VpcId $vpc_id;
  public SubnetIds $subnet_ids;
}

class RemoteDomainName {
}

class TopicStatus {
}

class Trusts {
}

class VerifyTrustRequest {
  public TrustId $trust_id;
}

class Attributes {
}

class CreateLogSubscriptionResult {
}

class DirectoryDescriptions {
}

class DirectorySize {
}

class DisableLDAPSResult {
}

class GetSnapshotLimitsRequest {
  public DirectoryId $directory_id;
}

class InvalidParameterException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class ManualSnapshotsLimitReached {
}

class SelectiveAuth {
}

class CertificateState {
}

class CreateDirectoryResult {
  public DirectoryId $directory_id;
}

class CreateSnapshotBeforeSchemaExtension {
}

class DescribeCertificateResult {
  public Certificate $certificate;
}

class DisableRadiusRequest {
  public DirectoryId $directory_id;
}

class IpAddr {
}

class Limit {
}

class ListTagsForResourceResult {
  public Tags $tags;
  public NextToken $next_token;
}

class PortNumber {
}

class SchemaExtensionInfo {
  public DirectoryId $directory_id;
  public SchemaExtensionId $schema_extension_id;
  public Description $description;
  public SchemaExtensionStatus $schema_extension_status;
  public SchemaExtensionStatusReason $schema_extension_status_reason;
  public StartDateTime $start_date_time;
  public EndDateTime $end_date_time;
}

class StateLastUpdatedDateTime {
}

class VpcId {
}

class CertificateExpiryDateTime {
}

class CustomerId {
}

class ListSchemaExtensionsRequest {
  public DirectoryId $directory_id;
  public NextToken $next_token;
  public Limit $limit;
}

class ListTagsForResourceRequest {
  public ResourceId $resource_id;
  public NextToken $next_token;
  public Limit $limit;
}

class Snapshot {
  public DirectoryId $directory_id;
  public SnapshotId $snapshot_id;
  public SnapshotType $type;
  public SnapshotName $name;
  public SnapshotStatus $status;
  public StartTime $start_time;
}

class SnapshotIds {
}

class CertificateData {
}

class DirectoryStage {
}

class EnableSsoResult {
}

class RemoteDomainNames {
}

class ShareDirectoryRequest {
  public ShareTarget $share_target;
  public ShareMethod $share_method;
  public DirectoryId $directory_id;
  public Notes $share_notes;
}

class TopicNames {
}

class IpRoute {
  public Description $description;
  public CidrIp $cidr_ip;
}

class ListIpRoutesRequest {
  public DirectoryId $directory_id;
  public NextToken $next_token;
  public Limit $limit;
}

class Servers {
}

class Snapshots {
}

class DeleteAssociatedConditionalForwarder {
}

class UnshareDirectoryRequest {
  public DirectoryId $directory_id;
  public UnshareTarget $unshare_target;
}

class CertificatesInfo {
}

class RadiusAuthenticationProtocol {
}

class AddedDateTime {
}

class ConnectPassword {
}

class DescribeLDAPSSettingsResult {
  public LDAPSSettingsInfo $ldaps_settings_info;
  public NextToken $next_token;
}

class DirectoryUnavailableException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class Tags {
}

class DeleteConditionalForwarderRequest {
  public DirectoryId $directory_id;
  public RemoteDomainName $remote_domain_name;
}

class DisableSsoRequest {
  public DirectoryId $directory_id;
  public UserName $user_name;
  public ConnectPassword $password;
}

class LDAPSSettingsInfo {
}

class RadiusSharedSecret {
}

class TagKeys {
}

class TagValue {
}

class AuthenticationFailedException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class CreateComputerResult {
  public Computer $computer;
}

class DescribeTrustsResult {
  public Trusts $trusts;
  public NextToken $next_token;
}

class DesiredNumberOfDomainControllers {
}

class DomainControllerStatus {
}

class DomainControllerStatusReason {
}

class LDAPSSettingInfo {
  public LDAPSStatus $ldaps_status;
  public LDAPSStatusReason $ldaps_status_reason;
  public LastUpdatedDateTime $last_updated_date_time;
}

class RestoreFromSnapshotResult {
}

class AttributeValue {
}

class CertificateLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class ResetUserPasswordRequest {
  public DirectoryId $directory_id;
  public CustomerUserName $user_name;
  public UserPassword $new_password;
}

class SharedDirectory {
  public CreatedDateTime $created_date_time;
  public LastUpdatedDateTime $last_updated_date_time;
  public DirectoryId $owner_directory_id;
  public ShareMethod $share_method;
  public DirectoryId $shared_directory_id;
  public ShareStatus $share_status;
  public Notes $share_notes;
  public CustomerId $owner_account_id;
  public CustomerId $shared_account_id;
}

class DeleteSnapshotResult {
  public SnapshotId $snapshot_id;
}

class LastUpdatedDateTime {
}

class ResetUserPasswordResult {
}

class ServiceException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class UpdateRadiusResult {
}

class AliasName {
}

class DeregisterEventTopicResult {
}

class DescribeConditionalForwardersResult {
  public ConditionalForwarders $conditional_forwarders;
}

class DescribeEventTopicsRequest {
  public TopicNames $topic_names;
  public DirectoryId $directory_id;
}

class DirectoryIds {
}

class LogSubscription {
  public DirectoryId $directory_id;
  public LogGroupName $log_group_name;
  public SubscriptionCreatedDateTime $subscription_created_date_time;
}

class UserName {
}

class GetDirectoryLimitsRequest {
}

class RejectSharedDirectoryResult {
  public DirectoryId $shared_directory_id;
}

class UpdateSecurityGroupForDirectoryControllers {
}

class Attribute {
  public AttributeName $name;
  public AttributeValue $value;
}

class ConnectDirectoryResult {
  public DirectoryId $directory_id;
}

class DirectoryConnectSettings {
  public VpcId $vpc_id;
  public SubnetIds $subnet_ids;
  public DnsIpAddrs $customer_dns_ips;
  public UserName $customer_user_name;
}

class DirectoryShortName {
}

class InvalidCertificateException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class ShareStatus {
}

class DisableSsoResult {
}

class GetSnapshotLimitsResult {
  public SnapshotLimits $snapshot_limits;
}

class RegisterCertificateResult {
  public CertificateId $certificate_id;
}

class ResourceId {
}

class SchemaExtensionStatusReason {
}

class VerifyTrustResult {
  public TrustId $trust_id;
}

class EnableLDAPSResult {
}

class NoAvailableCertificateException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class CreateAliasResult {
  public AliasName $alias;
  public DirectoryId $directory_id;
}

class LDAPSType {
}

class ReplicationScope {
}

class StartDateTime {
}

class AddTagsToResourceRequest {
  public ResourceId $resource_id;
  public Tags $tags;
}

class CertificateRegisteredDateTime {
}

class DirectoryVpcSettings {
  public VpcId $vpc_id;
  public SubnetIds $subnet_ids;
}

class IpRoutes {
}

class AcceptSharedDirectoryResult {
  public SharedDirectory $shared_directory;
}

class DirectoryDoesNotExistException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class TrustIds {
}

class TrustType {
}

class AddTagsToResourceResult {
}

class EventTopics {
}

class ShareMethod {
}

class CertificateAlreadyExistsException {
  public RequestId $request_id;
  public ExceptionMessage $message;
}

class ComputerName {
}

class DescribeConditionalForwardersRequest {
  public DirectoryId $directory_id;
  public RemoteDomainNames $remote_domain_names;
}

class DescribeSharedDirectoriesResult {
  public SharedDirectories $shared_directories;
  public NextToken $next_token;
}

class UpdateTrustRequest {
  public TrustId $trust_id;
  public SelectiveAuth $selective_auth;
}

class EndDateTime {
}

class RadiusSettings {
  public RadiusTimeout $radius_timeout;
  public RadiusRetries $radius_retries;
  public RadiusSharedSecret $shared_secret;
  public RadiusAuthenticationProtocol $authentication_protocol;
  public RadiusDisplayLabel $display_label;
  public UseSameUsername $use_same_username;
  public Servers $radius_servers;
  public PortNumber $radius_port;
}

class RadiusStatus {
}

class ShareTarget {
  public TargetId $id;
  public TargetType $type;
}

class TrustState {
}

class Computer {
  public SID $computer_id;
  public ComputerName $computer_name;
  public Attributes $computer_attributes;
}

class DirectoryNotSharedException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DomainControllerIds {
}

class InvalidPasswordException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class StartSchemaExtensionResult {
  public SchemaExtensionId $schema_extension_id;
}

class CreateComputerRequest {
  public Attributes $computer_attributes;
  public DirectoryId $directory_id;
  public ComputerName $computer_name;
  public ComputerPassword $password;
  public OrganizationalUnitDN $organizational_unit_distinguished_name;
}

class CreatedDateTime {
}

class RegisterEventTopicRequest {
  public DirectoryId $directory_id;
  public TopicName $topic_name;
}

class RemoveIpRoutesRequest {
  public CidrIps $cidr_ips;
  public DirectoryId $directory_id;
}

class SecurityGroupId {
}

class ClientException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class Description {
}

class InvalidTargetException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class SchemaExtensionsInfo {
}

class EntityDoesNotExistException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class LDAPSStatus {
}

class DeregisterEventTopicRequest {
  public DirectoryId $directory_id;
  public TopicName $topic_name;
}

class IpRouteLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class StartSchemaExtensionRequest {
  public DirectoryId $directory_id;
  public CreateSnapshotBeforeSchemaExtension $create_snapshot_before_schema_extension;
  public LdifContent $ldif_content;
  public Description $description;
}

class CidrIps {
}

class CreateTrustRequest {
  public DirectoryId $directory_id;
  public RemoteDomainName $remote_domain_name;
  public TrustPassword $trust_password;
  public TrustDirection $trust_direction;
  public TrustType $trust_type;
  public DnsIpAddrs $conditional_forwarder_ip_addrs;
  public SelectiveAuth $selective_auth;
}

class DeleteDirectoryResult {
  public DirectoryId $directory_id;
}

class OwnerDirectoryDescription {
  public DirectoryVpcSettingsDescription $vpc_settings;
  public RadiusSettings $radius_settings;
  public RadiusStatus $radius_status;
  public DirectoryId $directory_id;
  public CustomerId $account_id;
  public DnsIpAddrs $dns_ip_addrs;
}

class RejectSharedDirectoryRequest {
  public DirectoryId $shared_directory_id;
}

class TargetType {
}

class AttributeName {
}

class CreateTrustResult {
  public TrustId $trust_id;
}

class DeleteTrustRequest {
  public TrustId $trust_id;
  public DeleteAssociatedConditionalForwarder $delete_associated_conditional_forwarder;
}

class IpRouteStatusReason {
}

class AddIpRoutesRequest {
  public IpRoutes $ip_routes;
  public UpdateSecurityGroupForDirectoryControllers $update_security_group_for_directory_controllers;
  public DirectoryId $directory_id;
}

class DeleteSnapshotRequest {
  public SnapshotId $snapshot_id;
}

class ListCertificatesRequest {
  public DirectoryId $directory_id;
  public NextToken $next_token;
  public PageLimit $limit;
}

class SchemaExtensionStatus {
}

class ShareLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class TrustDirection {
}

class CreateDirectoryRequest {
  public Description $description;
  public DirectorySize $size;
  public DirectoryVpcSettings $vpc_settings;
  public Tags $tags;
  public DirectoryName $name;
  public DirectoryShortName $short_name;
  public Password $password;
}

class CreateMicrosoftADRequest {
  public Password $password;
  public Description $description;
  public DirectoryVpcSettings $vpc_settings;
  public DirectoryEdition $edition;
  public Tags $tags;
  public DirectoryName $name;
  public DirectoryShortName $short_name;
}

class DescribeSharedDirectoriesRequest {
  public DirectoryId $owner_directory_id;
  public DirectoryIds $shared_directory_ids;
  public NextToken $next_token;
  public Limit $limit;
}

class AccessUrl {
}

class ConnectDirectoryRequest {
  public DirectorySize $size;
  public DirectoryConnectSettings $connect_settings;
  public Tags $tags;
  public DirectoryName $name;
  public DirectoryShortName $short_name;
  public ConnectPassword $password;
  public Description $description;
}

class DescribeTrustsRequest {
  public DirectoryId $directory_id;
  public TrustIds $trust_ids;
  public NextToken $next_token;
  public Limit $limit;
}

class DirectoryDescription {
  public AccessUrl $access_url;
  public Description $description;
  public DnsIpAddrs $dns_ip_addrs;
  public ShareMethod $share_method;
  public Notes $share_notes;
  public LastUpdatedDateTime $stage_last_updated_date_time;
  public DirectoryConnectSettingsDescription $connect_settings;
  public DirectorySize $size;
  public DirectoryEdition $edition;
  public RadiusStatus $radius_status;
  public SsoEnabled $sso_enabled;
  public OwnerDirectoryDescription $owner_directory_description;
  public LaunchTime $launch_time;
  public DirectoryType $type;
  public RadiusSettings $radius_settings;
  public StageReason $stage_reason;
  public DesiredNumberOfDomainControllers $desired_number_of_domain_controllers;
  public DirectoryId $directory_id;
  public DirectoryName $name;
  public DirectoryShortName $short_name;
  public AliasName $alias;
  public DirectoryStage $stage;
  public ShareStatus $share_status;
  public DirectoryVpcSettingsDescription $vpc_settings;
}

class DnsIpAddrs {
}

class DomainControllerLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class LdifContent {
}

class SnapshotLimits {
  public Limit $manual_snapshots_limit;
  public Limit $manual_snapshots_current_count;
  public ManualSnapshotsLimitReached $manual_snapshots_limit_reached;
}

class DirectoryLimits {
  public CloudOnlyDirectoriesLimitReached $cloud_only_directories_limit_reached;
  public Limit $cloud_only_microsoft_ad_limit;
  public Limit $connected_directories_current_count;
  public Limit $cloud_only_directories_limit;
  public Limit $cloud_only_directories_current_count;
  public Limit $cloud_only_microsoft_ad_current_count;
  public CloudOnlyDirectoriesLimitReached $cloud_only_microsoft_ad_limit_reached;
  public Limit $connected_directories_limit;
  public ConnectedDirectoriesLimitReached $connected_directories_limit_reached;
}

class CertificateStateReason {
}

class Notes {
}

class RegisterCertificateRequest {
  public DirectoryId $directory_id;
  public CertificateData $certificate_data;
}

class RequestId {
}

class UpdateTrustResult {
  public RequestId $request_id;
  public TrustId $trust_id;
}

class InvalidLDAPSStatusException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class OrganizationalUnitDN {
}

class SID {
}

class AvailabilityZones {
}

class CreateAliasRequest {
  public DirectoryId $directory_id;
  public AliasName $alias;
}

class DeregisterCertificateResult {
}

class DescribeSnapshotsRequest {
  public DirectoryId $directory_id;
  public SnapshotIds $snapshot_ids;
  public NextToken $next_token;
  public Limit $limit;
}

class InsufficientPermissionsException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class LogGroupName {
}

class PageLimit {
}

class TrustId {
}

class DescribeCertificateRequest {
  public CertificateId $certificate_id;
  public DirectoryId $directory_id;
}

class DirectoryId {
}

class OrganizationsException {
  public RequestId $request_id;
  public ExceptionMessage $message;
}

class SnapshotLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class SubscriptionCreatedDateTime {
}

class TopicName {
}

class CertificateDoesNotExistException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class CertificateInUseException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DirectoryName {
}

class UnshareDirectoryResult {
  public DirectoryId $shared_directory_id;
}

class ComputerPassword {
}

class UseSameUsername {
}

class ConnectedDirectoriesLimitReached {
}

class IpRouteStatusMsg {
}

class RadiusDisplayLabel {
}

class SnapshotId {
}

class SubnetIds {
}

class Certificate {
  public CertificateId $certificate_id;
  public CertificateState $state;
  public CertificateStateReason $state_reason;
  public CertificateCN $common_name;
  public CertificateRegisteredDateTime $registered_date_time;
  public CertificateExpiryDateTime $expiry_date_time;
}

class LDAPSStatusReason {
}

class ListIpRoutesResult {
  public IpRoutesInfo $ip_routes_info;
  public NextToken $next_token;
}

class TopicArn {
}

class DirectoryAlreadySharedException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class EnableLDAPSRequest {
  public DirectoryId $directory_id;
  public LDAPSType $type;
}

class UserDoesNotExistException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class UserPassword {
}

class ConditionalForwarder {
  public RemoteDomainName $remote_domain_name;
  public DnsIpAddrs $dns_ip_addrs;
  public ReplicationScope $replication_scope;
}

class DisableLDAPSRequest {
  public LDAPSType $type;
  public DirectoryId $directory_id;
}

class EnableRadiusRequest {
  public DirectoryId $directory_id;
  public RadiusSettings $radius_settings;
}

class CloudOnlyDirectoriesLimitReached {
}

class DeleteConditionalForwarderResult {
}

class DescribeDirectoriesResult {
  public DirectoryDescriptions $directory_descriptions;
  public NextToken $next_token;
}

class RemoveTagsFromResourceRequest {
  public ResourceId $resource_id;
  public TagKeys $tag_keys;
}

class DirectoryType {
}

class SnapshotName {
}

class AccessDeniedException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DomainControllers {
}

class EntityAlreadyExistsException {
  public RequestId $request_id;
  public ExceptionMessage $message;
}

class InvalidNextTokenException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class ListSchemaExtensionsResult {
  public SchemaExtensionsInfo $schema_extensions_info;
  public NextToken $next_token;
}

class RegisterEventTopicResult {
}

class Server {
}

class ShareDirectoryResult {
  public DirectoryId $shared_directory_id;
}

class UpdateNumberOfDomainControllersRequest {
  public DirectoryId $directory_id;
  public DesiredNumberOfDomainControllers $desired_number;
}

class AcceptSharedDirectoryRequest {
  public DirectoryId $shared_directory_id;
}

class CertificateId {
}

class CidrIp {
}

class CreateMicrosoftADResult {
  public DirectoryId $directory_id;
}

class DescribeDirectoriesRequest {
  public DirectoryIds $directory_ids;
  public NextToken $next_token;
  public Limit $limit;
}

class DirectoryConnectSettingsDescription {
  public SecurityGroupId $security_group_id;
  public AvailabilityZones $availability_zones;
  public IpAddrs $connect_ips;
  public VpcId $vpc_id;
  public SubnetIds $subnet_ids;
  public UserName $customer_user_name;
}

class DirectoryEdition {
}

class LogSubscriptions {
}

class RadiusRetries {
}

class SnapshotStatus {
}

class CertificateInfo {
  public CertificateCN $common_name;
  public CertificateState $state;
  public CertificateExpiryDateTime $expiry_date_time;
  public CertificateId $certificate_id;
}

class DeleteLogSubscriptionResult {
}

class EventTopic {
  public DirectoryId $directory_id;
  public TopicName $topic_name;
  public TopicArn $topic_arn;
  public CreatedDateTime $created_date_time;
  public TopicStatus $status;
}

class GetDirectoryLimitsResult {
  public DirectoryLimits $directory_limits;
}

class SharedDirectories {
}

class UpdateRadiusRequest {
  public DirectoryId $directory_id;
  public RadiusSettings $radius_settings;
}

class CancelSchemaExtensionRequest {
  public SchemaExtensionId $schema_extension_id;
  public DirectoryId $directory_id;
}

class TargetId {
}

class DeleteTrustResult {
  public TrustId $trust_id;
}

class DirectoryLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DisableRadiusResult {
}

class ListLogSubscriptionsRequest {
  public DirectoryId $directory_id;
  public NextToken $next_token;
  public Limit $limit;
}

class ListLogSubscriptionsResult {
  public NextToken $next_token;
  public LogSubscriptions $log_subscriptions;
}

class NextToken {
}

class Password {
}

