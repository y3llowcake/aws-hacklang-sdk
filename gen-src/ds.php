<?hh // strict
namespace slack\aws\ds;

interface Directory Service {
  public function AcceptSharedDirectory(AcceptSharedDirectoryRequest) Awaitable<Errors\Result<AcceptSharedDirectoryResult>>;
  public function AddIpRoutes(AddIpRoutesRequest) Awaitable<Errors\Result<AddIpRoutesResult>>;
  public function AddTagsToResource(AddTagsToResourceRequest) Awaitable<Errors\Result<AddTagsToResourceResult>>;
  public function CancelSchemaExtension(CancelSchemaExtensionRequest) Awaitable<Errors\Result<CancelSchemaExtensionResult>>;
  public function ConnectDirectory(ConnectDirectoryRequest) Awaitable<Errors\Result<ConnectDirectoryResult>>;
  public function CreateAlias(CreateAliasRequest) Awaitable<Errors\Result<CreateAliasResult>>;
  public function CreateComputer(CreateComputerRequest) Awaitable<Errors\Result<CreateComputerResult>>;
  public function CreateConditionalForwarder(CreateConditionalForwarderRequest) Awaitable<Errors\Result<CreateConditionalForwarderResult>>;
  public function CreateDirectory(CreateDirectoryRequest) Awaitable<Errors\Result<CreateDirectoryResult>>;
  public function CreateLogSubscription(CreateLogSubscriptionRequest) Awaitable<Errors\Result<CreateLogSubscriptionResult>>;
  public function CreateMicrosoftAD(CreateMicrosoftADRequest) Awaitable<Errors\Result<CreateMicrosoftADResult>>;
  public function CreateSnapshot(CreateSnapshotRequest) Awaitable<Errors\Result<CreateSnapshotResult>>;
  public function CreateTrust(CreateTrustRequest) Awaitable<Errors\Result<CreateTrustResult>>;
  public function DeleteConditionalForwarder(DeleteConditionalForwarderRequest) Awaitable<Errors\Result<DeleteConditionalForwarderResult>>;
  public function DeleteDirectory(DeleteDirectoryRequest) Awaitable<Errors\Result<DeleteDirectoryResult>>;
  public function DeleteLogSubscription(DeleteLogSubscriptionRequest) Awaitable<Errors\Result<DeleteLogSubscriptionResult>>;
  public function DeleteSnapshot(DeleteSnapshotRequest) Awaitable<Errors\Result<DeleteSnapshotResult>>;
  public function DeleteTrust(DeleteTrustRequest) Awaitable<Errors\Result<DeleteTrustResult>>;
  public function DeregisterCertificate(DeregisterCertificateRequest) Awaitable<Errors\Result<DeregisterCertificateResult>>;
  public function DeregisterEventTopic(DeregisterEventTopicRequest) Awaitable<Errors\Result<DeregisterEventTopicResult>>;
  public function DescribeCertificate(DescribeCertificateRequest) Awaitable<Errors\Result<DescribeCertificateResult>>;
  public function DescribeConditionalForwarders(DescribeConditionalForwardersRequest) Awaitable<Errors\Result<DescribeConditionalForwardersResult>>;
  public function DescribeDirectories(DescribeDirectoriesRequest) Awaitable<Errors\Result<DescribeDirectoriesResult>>;
  public function DescribeDomainControllers(DescribeDomainControllersRequest) Awaitable<Errors\Result<DescribeDomainControllersResult>>;
  public function DescribeEventTopics(DescribeEventTopicsRequest) Awaitable<Errors\Result<DescribeEventTopicsResult>>;
  public function DescribeLDAPSSettings(DescribeLDAPSSettingsRequest) Awaitable<Errors\Result<DescribeLDAPSSettingsResult>>;
  public function DescribeSharedDirectories(DescribeSharedDirectoriesRequest) Awaitable<Errors\Result<DescribeSharedDirectoriesResult>>;
  public function DescribeSnapshots(DescribeSnapshotsRequest) Awaitable<Errors\Result<DescribeSnapshotsResult>>;
  public function DescribeTrusts(DescribeTrustsRequest) Awaitable<Errors\Result<DescribeTrustsResult>>;
  public function DisableLDAPS(DisableLDAPSRequest) Awaitable<Errors\Result<DisableLDAPSResult>>;
  public function DisableRadius(DisableRadiusRequest) Awaitable<Errors\Result<DisableRadiusResult>>;
  public function DisableSso(DisableSsoRequest) Awaitable<Errors\Result<DisableSsoResult>>;
  public function EnableLDAPS(EnableLDAPSRequest) Awaitable<Errors\Result<EnableLDAPSResult>>;
  public function EnableRadius(EnableRadiusRequest) Awaitable<Errors\Result<EnableRadiusResult>>;
  public function EnableSso(EnableSsoRequest) Awaitable<Errors\Result<EnableSsoResult>>;
  public function GetDirectoryLimits(GetDirectoryLimitsRequest) Awaitable<Errors\Result<GetDirectoryLimitsResult>>;
  public function GetSnapshotLimits(GetSnapshotLimitsRequest) Awaitable<Errors\Result<GetSnapshotLimitsResult>>;
  public function ListCertificates(ListCertificatesRequest) Awaitable<Errors\Result<ListCertificatesResult>>;
  public function ListIpRoutes(ListIpRoutesRequest) Awaitable<Errors\Result<ListIpRoutesResult>>;
  public function ListLogSubscriptions(ListLogSubscriptionsRequest) Awaitable<Errors\Result<ListLogSubscriptionsResult>>;
  public function ListSchemaExtensions(ListSchemaExtensionsRequest) Awaitable<Errors\Result<ListSchemaExtensionsResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function RegisterCertificate(RegisterCertificateRequest) Awaitable<Errors\Result<RegisterCertificateResult>>;
  public function RegisterEventTopic(RegisterEventTopicRequest) Awaitable<Errors\Result<RegisterEventTopicResult>>;
  public function RejectSharedDirectory(RejectSharedDirectoryRequest) Awaitable<Errors\Result<RejectSharedDirectoryResult>>;
  public function RemoveIpRoutes(RemoveIpRoutesRequest) Awaitable<Errors\Result<RemoveIpRoutesResult>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceRequest) Awaitable<Errors\Result<RemoveTagsFromResourceResult>>;
  public function ResetUserPassword(ResetUserPasswordRequest) Awaitable<Errors\Result<ResetUserPasswordResult>>;
  public function RestoreFromSnapshot(RestoreFromSnapshotRequest) Awaitable<Errors\Result<RestoreFromSnapshotResult>>;
  public function ShareDirectory(ShareDirectoryRequest) Awaitable<Errors\Result<ShareDirectoryResult>>;
  public function StartSchemaExtension(StartSchemaExtensionRequest) Awaitable<Errors\Result<StartSchemaExtensionResult>>;
  public function UnshareDirectory(UnshareDirectoryRequest) Awaitable<Errors\Result<UnshareDirectoryResult>>;
  public function UpdateConditionalForwarder(UpdateConditionalForwarderRequest) Awaitable<Errors\Result<UpdateConditionalForwarderResult>>;
  public function UpdateNumberOfDomainControllers(UpdateNumberOfDomainControllersRequest) Awaitable<Errors\Result<UpdateNumberOfDomainControllersResult>>;
  public function UpdateRadius(UpdateRadiusRequest) Awaitable<Errors\Result<UpdateRadiusResult>>;
  public function UpdateTrust(UpdateTrustRequest) Awaitable<Errors\Result<UpdateTrustResult>>;
  public function VerifyTrust(VerifyTrustRequest) Awaitable<Errors\Result<VerifyTrustResult>>;
}

class AcceptSharedDirectoryRequest {
  public DirectoryId $shared_directory_id;
}

class AcceptSharedDirectoryResult {
  public SharedDirectory $shared_directory;
}

class AccessDeniedException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class AccessUrl {
}

class AddIpRoutesRequest {
  public DirectoryId $directory_id;
  public IpRoutes $ip_routes;
  public UpdateSecurityGroupForDirectoryControllers $update_security_group_for_directory_controllers;
}

class AddIpRoutesResult {
}

class AddTagsToResourceRequest {
  public ResourceId $resource_id;
  public Tags $tags;
}

class AddTagsToResourceResult {
}

class AddedDateTime {
}

class AliasName {
}

class Attribute {
  public AttributeName $name;
  public AttributeValue $value;
}

class AttributeName {
}

class AttributeValue {
}

class Attributes {
}

class AuthenticationFailedException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class AvailabilityZone {
}

class AvailabilityZones {
}

class CancelSchemaExtensionRequest {
  public DirectoryId $directory_id;
  public SchemaExtensionId $schema_extension_id;
}

class CancelSchemaExtensionResult {
}

class Certificate {
  public CertificateId $certificate_id;
  public CertificateCN $common_name;
  public CertificateExpiryDateTime $expiry_date_time;
  public CertificateRegisteredDateTime $registered_date_time;
  public CertificateState $state;
  public CertificateStateReason $state_reason;
}

class CertificateAlreadyExistsException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class CertificateCN {
}

class CertificateData {
}

class CertificateDoesNotExistException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class CertificateExpiryDateTime {
}

class CertificateId {
}

class CertificateInUseException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class CertificateInfo {
  public CertificateId $certificate_id;
  public CertificateCN $common_name;
  public CertificateExpiryDateTime $expiry_date_time;
  public CertificateState $state;
}

class CertificateLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class CertificateRegisteredDateTime {
}

class CertificateState {
}

class CertificateStateReason {
}

class CertificatesInfo {
}

class CidrIp {
}

class CidrIps {
}

class ClientException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class CloudOnlyDirectoriesLimitReached {
}

class Computer {
  public Attributes $computer_attributes;
  public SID $computer_id;
  public ComputerName $computer_name;
}

class ComputerName {
}

class ComputerPassword {
}

class ConditionalForwarder {
  public DnsIpAddrs $dns_ip_addrs;
  public RemoteDomainName $remote_domain_name;
  public ReplicationScope $replication_scope;
}

class ConditionalForwarders {
}

class ConnectDirectoryRequest {
  public DirectoryConnectSettings $connect_settings;
  public Description $description;
  public DirectoryName $name;
  public ConnectPassword $password;
  public DirectoryShortName $short_name;
  public DirectorySize $size;
  public Tags $tags;
}

class ConnectDirectoryResult {
  public DirectoryId $directory_id;
}

class ConnectPassword {
}

class ConnectedDirectoriesLimitReached {
}

class CreateAliasRequest {
  public AliasName $alias;
  public DirectoryId $directory_id;
}

class CreateAliasResult {
  public AliasName $alias;
  public DirectoryId $directory_id;
}

class CreateComputerRequest {
  public Attributes $computer_attributes;
  public ComputerName $computer_name;
  public DirectoryId $directory_id;
  public OrganizationalUnitDN $organizational_unit_distinguished_name;
  public ComputerPassword $password;
}

class CreateComputerResult {
  public Computer $computer;
}

class CreateConditionalForwarderRequest {
  public DirectoryId $directory_id;
  public DnsIpAddrs $dns_ip_addrs;
  public RemoteDomainName $remote_domain_name;
}

class CreateConditionalForwarderResult {
}

class CreateDirectoryRequest {
  public Description $description;
  public DirectoryName $name;
  public Password $password;
  public DirectoryShortName $short_name;
  public DirectorySize $size;
  public Tags $tags;
  public DirectoryVpcSettings $vpc_settings;
}

class CreateDirectoryResult {
  public DirectoryId $directory_id;
}

class CreateLogSubscriptionRequest {
  public DirectoryId $directory_id;
  public LogGroupName $log_group_name;
}

class CreateLogSubscriptionResult {
}

class CreateMicrosoftADRequest {
  public Description $description;
  public DirectoryEdition $edition;
  public DirectoryName $name;
  public Password $password;
  public DirectoryShortName $short_name;
  public Tags $tags;
  public DirectoryVpcSettings $vpc_settings;
}

class CreateMicrosoftADResult {
  public DirectoryId $directory_id;
}

class CreateSnapshotBeforeSchemaExtension {
}

class CreateSnapshotRequest {
  public DirectoryId $directory_id;
  public SnapshotName $name;
}

class CreateSnapshotResult {
  public SnapshotId $snapshot_id;
}

class CreateTrustRequest {
  public DnsIpAddrs $conditional_forwarder_ip_addrs;
  public DirectoryId $directory_id;
  public RemoteDomainName $remote_domain_name;
  public SelectiveAuth $selective_auth;
  public TrustDirection $trust_direction;
  public TrustPassword $trust_password;
  public TrustType $trust_type;
}

class CreateTrustResult {
  public TrustId $trust_id;
}

class CreatedDateTime {
}

class CustomerId {
}

class CustomerUserName {
}

class DeleteAssociatedConditionalForwarder {
}

class DeleteConditionalForwarderRequest {
  public DirectoryId $directory_id;
  public RemoteDomainName $remote_domain_name;
}

class DeleteConditionalForwarderResult {
}

class DeleteDirectoryRequest {
  public DirectoryId $directory_id;
}

class DeleteDirectoryResult {
  public DirectoryId $directory_id;
}

class DeleteLogSubscriptionRequest {
  public DirectoryId $directory_id;
}

class DeleteLogSubscriptionResult {
}

class DeleteSnapshotRequest {
  public SnapshotId $snapshot_id;
}

class DeleteSnapshotResult {
  public SnapshotId $snapshot_id;
}

class DeleteTrustRequest {
  public DeleteAssociatedConditionalForwarder $delete_associated_conditional_forwarder;
  public TrustId $trust_id;
}

class DeleteTrustResult {
  public TrustId $trust_id;
}

class DeregisterCertificateRequest {
  public CertificateId $certificate_id;
  public DirectoryId $directory_id;
}

class DeregisterCertificateResult {
}

class DeregisterEventTopicRequest {
  public DirectoryId $directory_id;
  public TopicName $topic_name;
}

class DeregisterEventTopicResult {
}

class DescribeCertificateRequest {
  public CertificateId $certificate_id;
  public DirectoryId $directory_id;
}

class DescribeCertificateResult {
  public Certificate $certificate;
}

class DescribeConditionalForwardersRequest {
  public DirectoryId $directory_id;
  public RemoteDomainNames $remote_domain_names;
}

class DescribeConditionalForwardersResult {
  public ConditionalForwarders $conditional_forwarders;
}

class DescribeDirectoriesRequest {
  public DirectoryIds $directory_ids;
  public Limit $limit;
  public NextToken $next_token;
}

class DescribeDirectoriesResult {
  public DirectoryDescriptions $directory_descriptions;
  public NextToken $next_token;
}

class DescribeDomainControllersRequest {
  public DirectoryId $directory_id;
  public DomainControllerIds $domain_controller_ids;
  public Limit $limit;
  public NextToken $next_token;
}

class DescribeDomainControllersResult {
  public DomainControllers $domain_controllers;
  public NextToken $next_token;
}

class DescribeEventTopicsRequest {
  public DirectoryId $directory_id;
  public TopicNames $topic_names;
}

class DescribeEventTopicsResult {
  public EventTopics $event_topics;
}

class DescribeLDAPSSettingsRequest {
  public DirectoryId $directory_id;
  public PageLimit $limit;
  public NextToken $next_token;
  public LDAPSType $type;
}

class DescribeLDAPSSettingsResult {
  public LDAPSSettingsInfo $ldaps_settings_info;
  public NextToken $next_token;
}

class DescribeSharedDirectoriesRequest {
  public Limit $limit;
  public NextToken $next_token;
  public DirectoryId $owner_directory_id;
  public DirectoryIds $shared_directory_ids;
}

class DescribeSharedDirectoriesResult {
  public NextToken $next_token;
  public SharedDirectories $shared_directories;
}

class DescribeSnapshotsRequest {
  public DirectoryId $directory_id;
  public Limit $limit;
  public NextToken $next_token;
  public SnapshotIds $snapshot_ids;
}

class DescribeSnapshotsResult {
  public NextToken $next_token;
  public Snapshots $snapshots;
}

class DescribeTrustsRequest {
  public DirectoryId $directory_id;
  public Limit $limit;
  public NextToken $next_token;
  public TrustIds $trust_ids;
}

class DescribeTrustsResult {
  public NextToken $next_token;
  public Trusts $trusts;
}

class Description {
}

class DesiredNumberOfDomainControllers {
}

class DirectoryAlreadySharedException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DirectoryConnectSettings {
  public DnsIpAddrs $customer_dns_ips;
  public UserName $customer_user_name;
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;
}

class DirectoryConnectSettingsDescription {
  public AvailabilityZones $availability_zones;
  public IpAddrs $connect_ips;
  public UserName $customer_user_name;
  public SecurityGroupId $security_group_id;
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;
}

class DirectoryDescription {
  public AccessUrl $access_url;
  public AliasName $alias;
  public DirectoryConnectSettingsDescription $connect_settings;
  public Description $description;
  public DesiredNumberOfDomainControllers $desired_number_of_domain_controllers;
  public DirectoryId $directory_id;
  public DnsIpAddrs $dns_ip_addrs;
  public DirectoryEdition $edition;
  public LaunchTime $launch_time;
  public DirectoryName $name;
  public OwnerDirectoryDescription $owner_directory_description;
  public RadiusSettings $radius_settings;
  public RadiusStatus $radius_status;
  public ShareMethod $share_method;
  public Notes $share_notes;
  public ShareStatus $share_status;
  public DirectoryShortName $short_name;
  public DirectorySize $size;
  public SsoEnabled $sso_enabled;
  public DirectoryStage $stage;
  public LastUpdatedDateTime $stage_last_updated_date_time;
  public StageReason $stage_reason;
  public DirectoryType $type;
  public DirectoryVpcSettingsDescription $vpc_settings;
}

class DirectoryDescriptions {
}

class DirectoryDoesNotExistException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DirectoryEdition {
}

class DirectoryId {
}

class DirectoryIds {
}

class DirectoryLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DirectoryLimits {
  public Limit $cloud_only_directories_current_count;
  public Limit $cloud_only_directories_limit;
  public CloudOnlyDirectoriesLimitReached $cloud_only_directories_limit_reached;
  public Limit $cloud_only_microsoft_ad_current_count;
  public Limit $cloud_only_microsoft_ad_limit;
  public CloudOnlyDirectoriesLimitReached $cloud_only_microsoft_ad_limit_reached;
  public Limit $connected_directories_current_count;
  public Limit $connected_directories_limit;
  public ConnectedDirectoriesLimitReached $connected_directories_limit_reached;
}

class DirectoryName {
}

class DirectoryNotSharedException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DirectoryShortName {
}

class DirectorySize {
}

class DirectoryStage {
}

class DirectoryType {
}

class DirectoryUnavailableException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DirectoryVpcSettings {
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;
}

class DirectoryVpcSettingsDescription {
  public AvailabilityZones $availability_zones;
  public SecurityGroupId $security_group_id;
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;
}

class DisableLDAPSRequest {
  public DirectoryId $directory_id;
  public LDAPSType $type;
}

class DisableLDAPSResult {
}

class DisableRadiusRequest {
  public DirectoryId $directory_id;
}

class DisableRadiusResult {
}

class DisableSsoRequest {
  public DirectoryId $directory_id;
  public ConnectPassword $password;
  public UserName $user_name;
}

class DisableSsoResult {
}

class DnsIpAddrs {
}

class DomainController {
  public AvailabilityZone $availability_zone;
  public DirectoryId $directory_id;
  public IpAddr $dns_ip_addr;
  public DomainControllerId $domain_controller_id;
  public LaunchTime $launch_time;
  public DomainControllerStatus $status;
  public LastUpdatedDateTime $status_last_updated_date_time;
  public DomainControllerStatusReason $status_reason;
  public SubnetId $subnet_id;
  public VpcId $vpc_id;
}

class DomainControllerId {
}

class DomainControllerIds {
}

class DomainControllerLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class DomainControllerStatus {
}

class DomainControllerStatusReason {
}

class DomainControllers {
}

class EnableLDAPSRequest {
  public DirectoryId $directory_id;
  public LDAPSType $type;
}

class EnableLDAPSResult {
}

class EnableRadiusRequest {
  public DirectoryId $directory_id;
  public RadiusSettings $radius_settings;
}

class EnableRadiusResult {
}

class EnableSsoRequest {
  public DirectoryId $directory_id;
  public ConnectPassword $password;
  public UserName $user_name;
}

class EnableSsoResult {
}

class EndDateTime {
}

class EntityAlreadyExistsException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class EntityDoesNotExistException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class EventTopic {
  public CreatedDateTime $created_date_time;
  public DirectoryId $directory_id;
  public TopicStatus $status;
  public TopicArn $topic_arn;
  public TopicName $topic_name;
}

class EventTopics {
}

class ExceptionMessage {
}

class GetDirectoryLimitsRequest {
}

class GetDirectoryLimitsResult {
  public DirectoryLimits $directory_limits;
}

class GetSnapshotLimitsRequest {
  public DirectoryId $directory_id;
}

class GetSnapshotLimitsResult {
  public SnapshotLimits $snapshot_limits;
}

class InsufficientPermissionsException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class InvalidCertificateException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class InvalidLDAPSStatusException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class InvalidNextTokenException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class InvalidParameterException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class InvalidPasswordException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class InvalidTargetException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class IpAddr {
}

class IpAddrs {
}

class IpRoute {
  public CidrIp $cidr_ip;
  public Description $description;
}

class IpRouteInfo {
  public AddedDateTime $added_date_time;
  public CidrIp $cidr_ip;
  public Description $description;
  public DirectoryId $directory_id;
  public IpRouteStatusMsg $ip_route_status_msg;
  public IpRouteStatusReason $ip_route_status_reason;
}

class IpRouteLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class IpRouteStatusMsg {
}

class IpRouteStatusReason {
}

class IpRoutes {
}

class IpRoutesInfo {
}

class LDAPSSettingInfo {
  public LDAPSStatus $ldaps_status;
  public LDAPSStatusReason $ldaps_status_reason;
  public LastUpdatedDateTime $last_updated_date_time;
}

class LDAPSSettingsInfo {
}

class LDAPSStatus {
}

class LDAPSStatusReason {
}

class LDAPSType {
}

class LastUpdatedDateTime {
}

class LaunchTime {
}

class LdifContent {
}

class Limit {
}

class ListCertificatesRequest {
  public DirectoryId $directory_id;
  public PageLimit $limit;
  public NextToken $next_token;
}

class ListCertificatesResult {
  public CertificatesInfo $certificates_info;
  public NextToken $next_token;
}

class ListIpRoutesRequest {
  public DirectoryId $directory_id;
  public Limit $limit;
  public NextToken $next_token;
}

class ListIpRoutesResult {
  public IpRoutesInfo $ip_routes_info;
  public NextToken $next_token;
}

class ListLogSubscriptionsRequest {
  public DirectoryId $directory_id;
  public Limit $limit;
  public NextToken $next_token;
}

class ListLogSubscriptionsResult {
  public LogSubscriptions $log_subscriptions;
  public NextToken $next_token;
}

class ListSchemaExtensionsRequest {
  public DirectoryId $directory_id;
  public Limit $limit;
  public NextToken $next_token;
}

class ListSchemaExtensionsResult {
  public NextToken $next_token;
  public SchemaExtensionsInfo $schema_extensions_info;
}

class ListTagsForResourceRequest {
  public Limit $limit;
  public NextToken $next_token;
  public ResourceId $resource_id;
}

class ListTagsForResourceResult {
  public NextToken $next_token;
  public Tags $tags;
}

class LogGroupName {
}

class LogSubscription {
  public DirectoryId $directory_id;
  public LogGroupName $log_group_name;
  public SubscriptionCreatedDateTime $subscription_created_date_time;
}

class LogSubscriptions {
}

class ManualSnapshotsLimitReached {
}

class NextToken {
}

class NoAvailableCertificateException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class Notes {
}

class OrganizationalUnitDN {
}

class OrganizationsException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class OwnerDirectoryDescription {
  public CustomerId $account_id;
  public DirectoryId $directory_id;
  public DnsIpAddrs $dns_ip_addrs;
  public RadiusSettings $radius_settings;
  public RadiusStatus $radius_status;
  public DirectoryVpcSettingsDescription $vpc_settings;
}

class PageLimit {
}

class Password {
}

class PortNumber {
}

class RadiusAuthenticationProtocol {
}

class RadiusDisplayLabel {
}

class RadiusRetries {
}

class RadiusSettings {
  public RadiusAuthenticationProtocol $authentication_protocol;
  public RadiusDisplayLabel $display_label;
  public PortNumber $radius_port;
  public RadiusRetries $radius_retries;
  public Servers $radius_servers;
  public RadiusTimeout $radius_timeout;
  public RadiusSharedSecret $shared_secret;
  public UseSameUsername $use_same_username;
}

class RadiusSharedSecret {
}

class RadiusStatus {
}

class RadiusTimeout {
}

class RegisterCertificateRequest {
  public CertificateData $certificate_data;
  public DirectoryId $directory_id;
}

class RegisterCertificateResult {
  public CertificateId $certificate_id;
}

class RegisterEventTopicRequest {
  public DirectoryId $directory_id;
  public TopicName $topic_name;
}

class RegisterEventTopicResult {
}

class RejectSharedDirectoryRequest {
  public DirectoryId $shared_directory_id;
}

class RejectSharedDirectoryResult {
  public DirectoryId $shared_directory_id;
}

class RemoteDomainName {
}

class RemoteDomainNames {
}

class RemoveIpRoutesRequest {
  public CidrIps $cidr_ips;
  public DirectoryId $directory_id;
}

class RemoveIpRoutesResult {
}

class RemoveTagsFromResourceRequest {
  public ResourceId $resource_id;
  public TagKeys $tag_keys;
}

class RemoveTagsFromResourceResult {
}

class ReplicationScope {
}

class RequestId {
}

class ResetUserPasswordRequest {
  public DirectoryId $directory_id;
  public UserPassword $new_password;
  public CustomerUserName $user_name;
}

class ResetUserPasswordResult {
}

class ResourceId {
}

class RestoreFromSnapshotRequest {
  public SnapshotId $snapshot_id;
}

class RestoreFromSnapshotResult {
}

class SID {
}

class SchemaExtensionId {
}

class SchemaExtensionInfo {
  public Description $description;
  public DirectoryId $directory_id;
  public EndDateTime $end_date_time;
  public SchemaExtensionId $schema_extension_id;
  public SchemaExtensionStatus $schema_extension_status;
  public SchemaExtensionStatusReason $schema_extension_status_reason;
  public StartDateTime $start_date_time;
}

class SchemaExtensionStatus {
}

class SchemaExtensionStatusReason {
}

class SchemaExtensionsInfo {
}

class SecurityGroupId {
}

class SelectiveAuth {
}

class Server {
}

class Servers {
}

class ServiceException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class ShareDirectoryRequest {
  public DirectoryId $directory_id;
  public ShareMethod $share_method;
  public Notes $share_notes;
  public ShareTarget $share_target;
}

class ShareDirectoryResult {
  public DirectoryId $shared_directory_id;
}

class ShareLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class ShareMethod {
}

class ShareStatus {
}

class ShareTarget {
  public TargetId $id;
  public TargetType $type;
}

class SharedDirectories {
}

class SharedDirectory {
  public CreatedDateTime $created_date_time;
  public LastUpdatedDateTime $last_updated_date_time;
  public CustomerId $owner_account_id;
  public DirectoryId $owner_directory_id;
  public ShareMethod $share_method;
  public Notes $share_notes;
  public ShareStatus $share_status;
  public CustomerId $shared_account_id;
  public DirectoryId $shared_directory_id;
}

class Snapshot {
  public DirectoryId $directory_id;
  public SnapshotName $name;
  public SnapshotId $snapshot_id;
  public StartTime $start_time;
  public SnapshotStatus $status;
  public SnapshotType $type;
}

class SnapshotId {
}

class SnapshotIds {
}

class SnapshotLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class SnapshotLimits {
  public Limit $manual_snapshots_current_count;
  public Limit $manual_snapshots_limit;
  public ManualSnapshotsLimitReached $manual_snapshots_limit_reached;
}

class SnapshotName {
}

class SnapshotStatus {
}

class SnapshotType {
}

class Snapshots {
}

class SsoEnabled {
}

class StageReason {
}

class StartDateTime {
}

class StartSchemaExtensionRequest {
  public CreateSnapshotBeforeSchemaExtension $create_snapshot_before_schema_extension;
  public Description $description;
  public DirectoryId $directory_id;
  public LdifContent $ldif_content;
}

class StartSchemaExtensionResult {
  public SchemaExtensionId $schema_extension_id;
}

class StartTime {
}

class StateLastUpdatedDateTime {
}

class SubnetId {
}

class SubnetIds {
}

class SubscriptionCreatedDateTime {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagLimitExceededException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class TagValue {
}

class Tags {
}

class TargetId {
}

class TargetType {
}

class TopicArn {
}

class TopicName {
}

class TopicNames {
}

class TopicStatus {
}

class Trust {
  public CreatedDateTime $created_date_time;
  public DirectoryId $directory_id;
  public LastUpdatedDateTime $last_updated_date_time;
  public RemoteDomainName $remote_domain_name;
  public SelectiveAuth $selective_auth;
  public StateLastUpdatedDateTime $state_last_updated_date_time;
  public TrustDirection $trust_direction;
  public TrustId $trust_id;
  public TrustState $trust_state;
  public TrustStateReason $trust_state_reason;
  public TrustType $trust_type;
}

class TrustDirection {
}

class TrustId {
}

class TrustIds {
}

class TrustPassword {
}

class TrustState {
}

class TrustStateReason {
}

class TrustType {
}

class Trusts {
}

class UnshareDirectoryRequest {
  public DirectoryId $directory_id;
  public UnshareTarget $unshare_target;
}

class UnshareDirectoryResult {
  public DirectoryId $shared_directory_id;
}

class UnshareTarget {
  public TargetId $id;
  public TargetType $type;
}

class UnsupportedOperationException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class UpdateConditionalForwarderRequest {
  public DirectoryId $directory_id;
  public DnsIpAddrs $dns_ip_addrs;
  public RemoteDomainName $remote_domain_name;
}

class UpdateConditionalForwarderResult {
}

class UpdateNumberOfDomainControllersRequest {
  public DesiredNumberOfDomainControllers $desired_number;
  public DirectoryId $directory_id;
}

class UpdateNumberOfDomainControllersResult {
}

class UpdateRadiusRequest {
  public DirectoryId $directory_id;
  public RadiusSettings $radius_settings;
}

class UpdateRadiusResult {
}

class UpdateSecurityGroupForDirectoryControllers {
}

class UpdateTrustRequest {
  public SelectiveAuth $selective_auth;
  public TrustId $trust_id;
}

class UpdateTrustResult {
  public RequestId $request_id;
  public TrustId $trust_id;
}

class UseSameUsername {
}

class UserDoesNotExistException {
  public ExceptionMessage $message;
  public RequestId $request_id;
}

class UserName {
}

class UserPassword {
}

class VerifyTrustRequest {
  public TrustId $trust_id;
}

class VerifyTrustResult {
  public TrustId $trust_id;
}

class VpcId {
}

