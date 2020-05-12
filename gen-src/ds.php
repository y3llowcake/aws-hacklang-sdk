<?hh // strict
namespace slack\aws\ds;

interface DirectoryService {
  public function AcceptSharedDirectory(AcceptSharedDirectoryRequest $in): Awaitable<\Errors\Result<AcceptSharedDirectoryResult>>;
  public function AddIpRoutes(AddIpRoutesRequest $in): Awaitable<\Errors\Result<AddIpRoutesResult>>;
  public function AddTagsToResource(AddTagsToResourceRequest $in): Awaitable<\Errors\Result<AddTagsToResourceResult>>;
  public function CancelSchemaExtension(CancelSchemaExtensionRequest $in): Awaitable<\Errors\Result<CancelSchemaExtensionResult>>;
  public function ConnectDirectory(ConnectDirectoryRequest $in): Awaitable<\Errors\Result<ConnectDirectoryResult>>;
  public function CreateAlias(CreateAliasRequest $in): Awaitable<\Errors\Result<CreateAliasResult>>;
  public function CreateComputer(CreateComputerRequest $in): Awaitable<\Errors\Result<CreateComputerResult>>;
  public function CreateConditionalForwarder(CreateConditionalForwarderRequest $in): Awaitable<\Errors\Result<CreateConditionalForwarderResult>>;
  public function CreateDirectory(CreateDirectoryRequest $in): Awaitable<\Errors\Result<CreateDirectoryResult>>;
  public function CreateLogSubscription(CreateLogSubscriptionRequest $in): Awaitable<\Errors\Result<CreateLogSubscriptionResult>>;
  public function CreateMicrosoftAD(CreateMicrosoftADRequest $in): Awaitable<\Errors\Result<CreateMicrosoftADResult>>;
  public function CreateSnapshot(CreateSnapshotRequest $in): Awaitable<\Errors\Result<CreateSnapshotResult>>;
  public function CreateTrust(CreateTrustRequest $in): Awaitable<\Errors\Result<CreateTrustResult>>;
  public function DeleteConditionalForwarder(DeleteConditionalForwarderRequest $in): Awaitable<\Errors\Result<DeleteConditionalForwarderResult>>;
  public function DeleteDirectory(DeleteDirectoryRequest $in): Awaitable<\Errors\Result<DeleteDirectoryResult>>;
  public function DeleteLogSubscription(DeleteLogSubscriptionRequest $in): Awaitable<\Errors\Result<DeleteLogSubscriptionResult>>;
  public function DeleteSnapshot(DeleteSnapshotRequest $in): Awaitable<\Errors\Result<DeleteSnapshotResult>>;
  public function DeleteTrust(DeleteTrustRequest $in): Awaitable<\Errors\Result<DeleteTrustResult>>;
  public function DeregisterCertificate(DeregisterCertificateRequest $in): Awaitable<\Errors\Result<DeregisterCertificateResult>>;
  public function DeregisterEventTopic(DeregisterEventTopicRequest $in): Awaitable<\Errors\Result<DeregisterEventTopicResult>>;
  public function DescribeCertificate(DescribeCertificateRequest $in): Awaitable<\Errors\Result<DescribeCertificateResult>>;
  public function DescribeConditionalForwarders(DescribeConditionalForwardersRequest $in): Awaitable<\Errors\Result<DescribeConditionalForwardersResult>>;
  public function DescribeDirectories(DescribeDirectoriesRequest $in): Awaitable<\Errors\Result<DescribeDirectoriesResult>>;
  public function DescribeDomainControllers(DescribeDomainControllersRequest $in): Awaitable<\Errors\Result<DescribeDomainControllersResult>>;
  public function DescribeEventTopics(DescribeEventTopicsRequest $in): Awaitable<\Errors\Result<DescribeEventTopicsResult>>;
  public function DescribeLDAPSSettings(DescribeLDAPSSettingsRequest $in): Awaitable<\Errors\Result<DescribeLDAPSSettingsResult>>;
  public function DescribeSharedDirectories(DescribeSharedDirectoriesRequest $in): Awaitable<\Errors\Result<DescribeSharedDirectoriesResult>>;
  public function DescribeSnapshots(DescribeSnapshotsRequest $in): Awaitable<\Errors\Result<DescribeSnapshotsResult>>;
  public function DescribeTrusts(DescribeTrustsRequest $in): Awaitable<\Errors\Result<DescribeTrustsResult>>;
  public function DisableLDAPS(DisableLDAPSRequest $in): Awaitable<\Errors\Result<DisableLDAPSResult>>;
  public function DisableRadius(DisableRadiusRequest $in): Awaitable<\Errors\Result<DisableRadiusResult>>;
  public function DisableSso(DisableSsoRequest $in): Awaitable<\Errors\Result<DisableSsoResult>>;
  public function EnableLDAPS(EnableLDAPSRequest $in): Awaitable<\Errors\Result<EnableLDAPSResult>>;
  public function EnableRadius(EnableRadiusRequest $in): Awaitable<\Errors\Result<EnableRadiusResult>>;
  public function EnableSso(EnableSsoRequest $in): Awaitable<\Errors\Result<EnableSsoResult>>;
  public function GetDirectoryLimits(GetDirectoryLimitsRequest $in): Awaitable<\Errors\Result<GetDirectoryLimitsResult>>;
  public function GetSnapshotLimits(GetSnapshotLimitsRequest $in): Awaitable<\Errors\Result<GetSnapshotLimitsResult>>;
  public function ListCertificates(ListCertificatesRequest $in): Awaitable<\Errors\Result<ListCertificatesResult>>;
  public function ListIpRoutes(ListIpRoutesRequest $in): Awaitable<\Errors\Result<ListIpRoutesResult>>;
  public function ListLogSubscriptions(ListLogSubscriptionsRequest $in): Awaitable<\Errors\Result<ListLogSubscriptionsResult>>;
  public function ListSchemaExtensions(ListSchemaExtensionsRequest $in): Awaitable<\Errors\Result<ListSchemaExtensionsResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResult>>;
  public function RegisterCertificate(RegisterCertificateRequest $in): Awaitable<\Errors\Result<RegisterCertificateResult>>;
  public function RegisterEventTopic(RegisterEventTopicRequest $in): Awaitable<\Errors\Result<RegisterEventTopicResult>>;
  public function RejectSharedDirectory(RejectSharedDirectoryRequest $in): Awaitable<\Errors\Result<RejectSharedDirectoryResult>>;
  public function RemoveIpRoutes(RemoveIpRoutesRequest $in): Awaitable<\Errors\Result<RemoveIpRoutesResult>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceRequest $in): Awaitable<\Errors\Result<RemoveTagsFromResourceResult>>;
  public function ResetUserPassword(ResetUserPasswordRequest $in): Awaitable<\Errors\Result<ResetUserPasswordResult>>;
  public function RestoreFromSnapshot(RestoreFromSnapshotRequest $in): Awaitable<\Errors\Result<RestoreFromSnapshotResult>>;
  public function ShareDirectory(ShareDirectoryRequest $in): Awaitable<\Errors\Result<ShareDirectoryResult>>;
  public function StartSchemaExtension(StartSchemaExtensionRequest $in): Awaitable<\Errors\Result<StartSchemaExtensionResult>>;
  public function UnshareDirectory(UnshareDirectoryRequest $in): Awaitable<\Errors\Result<UnshareDirectoryResult>>;
  public function UpdateConditionalForwarder(UpdateConditionalForwarderRequest $in): Awaitable<\Errors\Result<UpdateConditionalForwarderResult>>;
  public function UpdateNumberOfDomainControllers(UpdateNumberOfDomainControllersRequest $in): Awaitable<\Errors\Result<UpdateNumberOfDomainControllersResult>>;
  public function UpdateRadius(UpdateRadiusRequest $in): Awaitable<\Errors\Result<UpdateRadiusResult>>;
  public function UpdateTrust(UpdateTrustRequest $in): Awaitable<\Errors\Result<UpdateTrustResult>>;
  public function VerifyTrust(VerifyTrustRequest $in): Awaitable<\Errors\Result<VerifyTrustResult>>;
}

class AcceptSharedDirectoryRequest {
  public ?DirectoryId $shared_directory_id;

  public function __construct(shape(
    ?'shared_directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->shared_directory_id = $s['shared_directory_id'] ?? '';
  }
}

class AcceptSharedDirectoryResult {
  public ?SharedDirectory $shared_directory;

  public function __construct(shape(
    ?'shared_directory' => ?SharedDirectory,
  ) $s = shape()) {
    $this->shared_directory = $s['shared_directory'] ?? null;
  }
}

class AccessDeniedException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type AccessUrl = string;

class AddIpRoutesRequest {
  public ?DirectoryId $directory_id;
  public ?IpRoutes $ip_routes;
  public ?UpdateSecurityGroupForDirectoryControllers $update_security_group_for_directory_controllers;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'ip_routes' => ?IpRoutes,
    ?'update_security_group_for_directory_controllers' => ?UpdateSecurityGroupForDirectoryControllers,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->ip_routes = $s['ip_routes'] ?? vec[];
    $this->update_security_group_for_directory_controllers = $s['update_security_group_for_directory_controllers'] ?? false;
  }
}

class AddIpRoutesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AddTagsToResourceRequest {
  public ?ResourceId $resource_id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class AddTagsToResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AddedDateTime = int;

type AliasName = string;

class Attribute {
  public ?AttributeName $name;
  public ?AttributeValue $value;

  public function __construct(shape(
    ?'name' => ?AttributeName,
    ?'value' => ?AttributeValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type AttributeName = string;

type AttributeValue = string;

type Attributes = vec<Attribute>;

class AuthenticationFailedException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type AvailabilityZone = string;

type AvailabilityZones = vec<AvailabilityZone>;

class CancelSchemaExtensionRequest {
  public ?DirectoryId $directory_id;
  public ?SchemaExtensionId $schema_extension_id;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'schema_extension_id' => ?SchemaExtensionId,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->schema_extension_id = $s['schema_extension_id'] ?? '';
  }
}

class CancelSchemaExtensionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Certificate {
  public ?CertificateId $certificate_id;
  public ?CertificateCN $common_name;
  public ?CertificateExpiryDateTime $expiry_date_time;
  public ?CertificateRegisteredDateTime $registered_date_time;
  public ?CertificateState $state;
  public ?CertificateStateReason $state_reason;

  public function __construct(shape(
    ?'certificate_id' => ?CertificateId,
    ?'common_name' => ?CertificateCN,
    ?'expiry_date_time' => ?CertificateExpiryDateTime,
    ?'registered_date_time' => ?CertificateRegisteredDateTime,
    ?'state' => ?CertificateState,
    ?'state_reason' => ?CertificateStateReason,
  ) $s = shape()) {
    $this->certificate_id = $s['certificate_id'] ?? '';
    $this->common_name = $s['common_name'] ?? '';
    $this->expiry_date_time = $s['expiry_date_time'] ?? 0;
    $this->registered_date_time = $s['registered_date_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->state_reason = $s['state_reason'] ?? '';
  }
}

class CertificateAlreadyExistsException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type CertificateCN = string;

type CertificateData = string;

class CertificateDoesNotExistException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type CertificateExpiryDateTime = int;

type CertificateId = string;

class CertificateInUseException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class CertificateInfo {
  public ?CertificateId $certificate_id;
  public ?CertificateCN $common_name;
  public ?CertificateExpiryDateTime $expiry_date_time;
  public ?CertificateState $state;

  public function __construct(shape(
    ?'certificate_id' => ?CertificateId,
    ?'common_name' => ?CertificateCN,
    ?'expiry_date_time' => ?CertificateExpiryDateTime,
    ?'state' => ?CertificateState,
  ) $s = shape()) {
    $this->certificate_id = $s['certificate_id'] ?? '';
    $this->common_name = $s['common_name'] ?? '';
    $this->expiry_date_time = $s['expiry_date_time'] ?? 0;
    $this->state = $s['state'] ?? '';
  }
}

class CertificateLimitExceededException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type CertificateRegisteredDateTime = int;

type CertificateState = string;

type CertificateStateReason = string;

type CertificatesInfo = vec<CertificateInfo>;

type CidrIp = string;

type CidrIps = vec<CidrIp>;

class ClientException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type CloudOnlyDirectoriesLimitReached = bool;

class Computer {
  public ?Attributes $computer_attributes;
  public ?SID $computer_id;
  public ?ComputerName $computer_name;

  public function __construct(shape(
    ?'computer_attributes' => ?Attributes,
    ?'computer_id' => ?SID,
    ?'computer_name' => ?ComputerName,
  ) $s = shape()) {
    $this->computer_attributes = $s['computer_attributes'] ?? vec[];
    $this->computer_id = $s['computer_id'] ?? '';
    $this->computer_name = $s['computer_name'] ?? '';
  }
}

type ComputerName = string;

type ComputerPassword = string;

class ConditionalForwarder {
  public ?DnsIpAddrs $dns_ip_addrs;
  public ?RemoteDomainName $remote_domain_name;
  public ?ReplicationScope $replication_scope;

  public function __construct(shape(
    ?'dns_ip_addrs' => ?DnsIpAddrs,
    ?'remote_domain_name' => ?RemoteDomainName,
    ?'replication_scope' => ?ReplicationScope,
  ) $s = shape()) {
    $this->dns_ip_addrs = $s['dns_ip_addrs'] ?? vec[];
    $this->remote_domain_name = $s['remote_domain_name'] ?? '';
    $this->replication_scope = $s['replication_scope'] ?? '';
  }
}

type ConditionalForwarders = vec<ConditionalForwarder>;

class ConnectDirectoryRequest {
  public ?DirectoryConnectSettings $connect_settings;
  public ?Description $description;
  public ?DirectoryName $name;
  public ?ConnectPassword $password;
  public ?DirectoryShortName $short_name;
  public ?DirectorySize $size;
  public ?Tags $tags;

  public function __construct(shape(
    ?'connect_settings' => ?DirectoryConnectSettings,
    ?'description' => ?Description,
    ?'name' => ?DirectoryName,
    ?'password' => ?ConnectPassword,
    ?'short_name' => ?DirectoryShortName,
    ?'size' => ?DirectorySize,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->connect_settings = $s['connect_settings'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->short_name = $s['short_name'] ?? '';
    $this->size = $s['size'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ConnectDirectoryResult {
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

type ConnectPassword = string;

type ConnectedDirectoriesLimitReached = bool;

class CreateAliasRequest {
  public ?AliasName $alias;
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'alias' => ?AliasName,
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->alias = $s['alias'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class CreateAliasResult {
  public ?AliasName $alias;
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'alias' => ?AliasName,
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->alias = $s['alias'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class CreateComputerRequest {
  public ?Attributes $computer_attributes;
  public ?ComputerName $computer_name;
  public ?DirectoryId $directory_id;
  public ?OrganizationalUnitDN $organizational_unit_distinguished_name;
  public ?ComputerPassword $password;

  public function __construct(shape(
    ?'computer_attributes' => ?Attributes,
    ?'computer_name' => ?ComputerName,
    ?'directory_id' => ?DirectoryId,
    ?'organizational_unit_distinguished_name' => ?OrganizationalUnitDN,
    ?'password' => ?ComputerPassword,
  ) $s = shape()) {
    $this->computer_attributes = $s['computer_attributes'] ?? vec[];
    $this->computer_name = $s['computer_name'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
    $this->organizational_unit_distinguished_name = $s['organizational_unit_distinguished_name'] ?? '';
    $this->password = $s['password'] ?? '';
  }
}

class CreateComputerResult {
  public ?Computer $computer;

  public function __construct(shape(
    ?'computer' => ?Computer,
  ) $s = shape()) {
    $this->computer = $s['computer'] ?? null;
  }
}

class CreateConditionalForwarderRequest {
  public ?DirectoryId $directory_id;
  public ?DnsIpAddrs $dns_ip_addrs;
  public ?RemoteDomainName $remote_domain_name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'dns_ip_addrs' => ?DnsIpAddrs,
    ?'remote_domain_name' => ?RemoteDomainName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->dns_ip_addrs = $s['dns_ip_addrs'] ?? vec[];
    $this->remote_domain_name = $s['remote_domain_name'] ?? '';
  }
}

class CreateConditionalForwarderResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateDirectoryRequest {
  public ?Description $description;
  public ?DirectoryName $name;
  public ?Password $password;
  public ?DirectoryShortName $short_name;
  public ?DirectorySize $size;
  public ?Tags $tags;
  public ?DirectoryVpcSettings $vpc_settings;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'name' => ?DirectoryName,
    ?'password' => ?Password,
    ?'short_name' => ?DirectoryShortName,
    ?'size' => ?DirectorySize,
    ?'tags' => ?Tags,
    ?'vpc_settings' => ?DirectoryVpcSettings,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->short_name = $s['short_name'] ?? '';
    $this->size = $s['size'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_settings = $s['vpc_settings'] ?? null;
  }
}

class CreateDirectoryResult {
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class CreateLogSubscriptionRequest {
  public ?DirectoryId $directory_id;
  public ?LogGroupName $log_group_name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'log_group_name' => ?LogGroupName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->log_group_name = $s['log_group_name'] ?? '';
  }
}

class CreateLogSubscriptionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateMicrosoftADRequest {
  public ?Description $description;
  public ?DirectoryEdition $edition;
  public ?DirectoryName $name;
  public ?Password $password;
  public ?DirectoryShortName $short_name;
  public ?Tags $tags;
  public ?DirectoryVpcSettings $vpc_settings;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'edition' => ?DirectoryEdition,
    ?'name' => ?DirectoryName,
    ?'password' => ?Password,
    ?'short_name' => ?DirectoryShortName,
    ?'tags' => ?Tags,
    ?'vpc_settings' => ?DirectoryVpcSettings,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->edition = $s['edition'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->short_name = $s['short_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_settings = $s['vpc_settings'] ?? null;
  }
}

class CreateMicrosoftADResult {
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

type CreateSnapshotBeforeSchemaExtension = bool;

class CreateSnapshotRequest {
  public ?DirectoryId $directory_id;
  public ?SnapshotName $name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'name' => ?SnapshotName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateSnapshotResult {
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

class CreateTrustRequest {
  public ?DnsIpAddrs $conditional_forwarder_ip_addrs;
  public ?DirectoryId $directory_id;
  public ?RemoteDomainName $remote_domain_name;
  public ?SelectiveAuth $selective_auth;
  public ?TrustDirection $trust_direction;
  public ?TrustPassword $trust_password;
  public ?TrustType $trust_type;

  public function __construct(shape(
    ?'conditional_forwarder_ip_addrs' => ?DnsIpAddrs,
    ?'directory_id' => ?DirectoryId,
    ?'remote_domain_name' => ?RemoteDomainName,
    ?'selective_auth' => ?SelectiveAuth,
    ?'trust_direction' => ?TrustDirection,
    ?'trust_password' => ?TrustPassword,
    ?'trust_type' => ?TrustType,
  ) $s = shape()) {
    $this->conditional_forwarder_ip_addrs = $s['conditional_forwarder_ip_addrs'] ?? vec[];
    $this->directory_id = $s['directory_id'] ?? '';
    $this->remote_domain_name = $s['remote_domain_name'] ?? '';
    $this->selective_auth = $s['selective_auth'] ?? '';
    $this->trust_direction = $s['trust_direction'] ?? '';
    $this->trust_password = $s['trust_password'] ?? '';
    $this->trust_type = $s['trust_type'] ?? '';
  }
}

class CreateTrustResult {
  public ?TrustId $trust_id;

  public function __construct(shape(
    ?'trust_id' => ?TrustId,
  ) $s = shape()) {
    $this->trust_id = $s['trust_id'] ?? '';
  }
}

type CreatedDateTime = int;

type CustomerId = string;

type CustomerUserName = string;

type DeleteAssociatedConditionalForwarder = bool;

class DeleteConditionalForwarderRequest {
  public ?DirectoryId $directory_id;
  public ?RemoteDomainName $remote_domain_name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'remote_domain_name' => ?RemoteDomainName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->remote_domain_name = $s['remote_domain_name'] ?? '';
  }
}

class DeleteConditionalForwarderResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDirectoryRequest {
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class DeleteDirectoryResult {
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class DeleteLogSubscriptionRequest {
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class DeleteLogSubscriptionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSnapshotRequest {
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

class DeleteSnapshotResult {
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

class DeleteTrustRequest {
  public ?DeleteAssociatedConditionalForwarder $delete_associated_conditional_forwarder;
  public ?TrustId $trust_id;

  public function __construct(shape(
    ?'delete_associated_conditional_forwarder' => ?DeleteAssociatedConditionalForwarder,
    ?'trust_id' => ?TrustId,
  ) $s = shape()) {
    $this->delete_associated_conditional_forwarder = $s['delete_associated_conditional_forwarder'] ?? false;
    $this->trust_id = $s['trust_id'] ?? '';
  }
}

class DeleteTrustResult {
  public ?TrustId $trust_id;

  public function __construct(shape(
    ?'trust_id' => ?TrustId,
  ) $s = shape()) {
    $this->trust_id = $s['trust_id'] ?? '';
  }
}

class DeregisterCertificateRequest {
  public ?CertificateId $certificate_id;
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'certificate_id' => ?CertificateId,
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->certificate_id = $s['certificate_id'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class DeregisterCertificateResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterEventTopicRequest {
  public ?DirectoryId $directory_id;
  public ?TopicName $topic_name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'topic_name' => ?TopicName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->topic_name = $s['topic_name'] ?? '';
  }
}

class DeregisterEventTopicResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeCertificateRequest {
  public ?CertificateId $certificate_id;
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'certificate_id' => ?CertificateId,
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->certificate_id = $s['certificate_id'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class DescribeCertificateResult {
  public ?Certificate $certificate;

  public function __construct(shape(
    ?'certificate' => ?Certificate,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? null;
  }
}

class DescribeConditionalForwardersRequest {
  public ?DirectoryId $directory_id;
  public ?RemoteDomainNames $remote_domain_names;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'remote_domain_names' => ?RemoteDomainNames,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->remote_domain_names = $s['remote_domain_names'] ?? vec[];
  }
}

class DescribeConditionalForwardersResult {
  public ?ConditionalForwarders $conditional_forwarders;

  public function __construct(shape(
    ?'conditional_forwarders' => ?ConditionalForwarders,
  ) $s = shape()) {
    $this->conditional_forwarders = $s['conditional_forwarders'] ?? vec[];
  }
}

class DescribeDirectoriesRequest {
  public ?DirectoryIds $directory_ids;
  public ?Limit $limit;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'directory_ids' => ?DirectoryIds,
    ?'limit' => ?Limit,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->directory_ids = $s['directory_ids'] ?? vec[];
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeDirectoriesResult {
  public ?DirectoryDescriptions $directory_descriptions;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'directory_descriptions' => ?DirectoryDescriptions,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->directory_descriptions = $s['directory_descriptions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeDomainControllersRequest {
  public ?DirectoryId $directory_id;
  public ?DomainControllerIds $domain_controller_ids;
  public ?Limit $limit;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'domain_controller_ids' => ?DomainControllerIds,
    ?'limit' => ?Limit,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->domain_controller_ids = $s['domain_controller_ids'] ?? vec[];
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeDomainControllersResult {
  public ?DomainControllers $domain_controllers;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'domain_controllers' => ?DomainControllers,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->domain_controllers = $s['domain_controllers'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEventTopicsRequest {
  public ?DirectoryId $directory_id;
  public ?TopicNames $topic_names;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'topic_names' => ?TopicNames,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->topic_names = $s['topic_names'] ?? vec[];
  }
}

class DescribeEventTopicsResult {
  public ?EventTopics $event_topics;

  public function __construct(shape(
    ?'event_topics' => ?EventTopics,
  ) $s = shape()) {
    $this->event_topics = $s['event_topics'] ?? vec[];
  }
}

class DescribeLDAPSSettingsRequest {
  public ?DirectoryId $directory_id;
  public ?PageLimit $limit;
  public ?NextToken $next_token;
  public ?LDAPSType $type;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'limit' => ?PageLimit,
    ?'next_token' => ?NextToken,
    ?'type' => ?LDAPSType,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class DescribeLDAPSSettingsResult {
  public ?LDAPSSettingsInfo $ldaps_settings_info;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'ldaps_settings_info' => ?LDAPSSettingsInfo,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->ldaps_settings_info = $s['ldaps_settings_info'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeSharedDirectoriesRequest {
  public ?Limit $limit;
  public ?NextToken $next_token;
  public ?DirectoryId $owner_directory_id;
  public ?DirectoryIds $shared_directory_ids;

  public function __construct(shape(
    ?'limit' => ?Limit,
    ?'next_token' => ?NextToken,
    ?'owner_directory_id' => ?DirectoryId,
    ?'shared_directory_ids' => ?DirectoryIds,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->owner_directory_id = $s['owner_directory_id'] ?? '';
    $this->shared_directory_ids = $s['shared_directory_ids'] ?? vec[];
  }
}

class DescribeSharedDirectoriesResult {
  public ?NextToken $next_token;
  public ?SharedDirectories $shared_directories;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'shared_directories' => ?SharedDirectories,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->shared_directories = $s['shared_directories'] ?? vec[];
  }
}

class DescribeSnapshotsRequest {
  public ?DirectoryId $directory_id;
  public ?Limit $limit;
  public ?NextToken $next_token;
  public ?SnapshotIds $snapshot_ids;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'limit' => ?Limit,
    ?'next_token' => ?NextToken,
    ?'snapshot_ids' => ?SnapshotIds,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->snapshot_ids = $s['snapshot_ids'] ?? vec[];
  }
}

class DescribeSnapshotsResult {
  public ?NextToken $next_token;
  public ?Snapshots $snapshots;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'snapshots' => ?Snapshots,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->snapshots = $s['snapshots'] ?? vec[];
  }
}

class DescribeTrustsRequest {
  public ?DirectoryId $directory_id;
  public ?Limit $limit;
  public ?NextToken $next_token;
  public ?TrustIds $trust_ids;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'limit' => ?Limit,
    ?'next_token' => ?NextToken,
    ?'trust_ids' => ?TrustIds,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->trust_ids = $s['trust_ids'] ?? vec[];
  }
}

class DescribeTrustsResult {
  public ?NextToken $next_token;
  public ?Trusts $trusts;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'trusts' => ?Trusts,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->trusts = $s['trusts'] ?? vec[];
  }
}

type Description = string;

type DesiredNumberOfDomainControllers = int;

class DirectoryAlreadySharedException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class DirectoryConnectSettings {
  public ?DnsIpAddrs $customer_dns_ips;
  public ?UserName $customer_user_name;
  public ?SubnetIds $subnet_ids;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'customer_dns_ips' => ?DnsIpAddrs,
    ?'customer_user_name' => ?UserName,
    ?'subnet_ids' => ?SubnetIds,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->customer_dns_ips = $s['customer_dns_ips'] ?? vec[];
    $this->customer_user_name = $s['customer_user_name'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DirectoryConnectSettingsDescription {
  public ?AvailabilityZones $availability_zones;
  public ?IpAddrs $connect_ips;
  public ?UserName $customer_user_name;
  public ?SecurityGroupId $security_group_id;
  public ?SubnetIds $subnet_ids;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZones,
    ?'connect_ips' => ?IpAddrs,
    ?'customer_user_name' => ?UserName,
    ?'security_group_id' => ?SecurityGroupId,
    ?'subnet_ids' => ?SubnetIds,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->connect_ips = $s['connect_ips'] ?? vec[];
    $this->customer_user_name = $s['customer_user_name'] ?? '';
    $this->security_group_id = $s['security_group_id'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DirectoryDescription {
  public ?AccessUrl $access_url;
  public ?AliasName $alias;
  public ?DirectoryConnectSettingsDescription $connect_settings;
  public ?Description $description;
  public ?DesiredNumberOfDomainControllers $desired_number_of_domain_controllers;
  public ?DirectoryId $directory_id;
  public ?DnsIpAddrs $dns_ip_addrs;
  public ?DirectoryEdition $edition;
  public ?LaunchTime $launch_time;
  public ?DirectoryName $name;
  public ?OwnerDirectoryDescription $owner_directory_description;
  public ?RadiusSettings $radius_settings;
  public ?RadiusStatus $radius_status;
  public ?ShareMethod $share_method;
  public ?Notes $share_notes;
  public ?ShareStatus $share_status;
  public ?DirectoryShortName $short_name;
  public ?DirectorySize $size;
  public ?SsoEnabled $sso_enabled;
  public ?DirectoryStage $stage;
  public ?LastUpdatedDateTime $stage_last_updated_date_time;
  public ?StageReason $stage_reason;
  public ?DirectoryType $type;
  public ?DirectoryVpcSettingsDescription $vpc_settings;

  public function __construct(shape(
    ?'access_url' => ?AccessUrl,
    ?'alias' => ?AliasName,
    ?'connect_settings' => ?DirectoryConnectSettingsDescription,
    ?'description' => ?Description,
    ?'desired_number_of_domain_controllers' => ?DesiredNumberOfDomainControllers,
    ?'directory_id' => ?DirectoryId,
    ?'dns_ip_addrs' => ?DnsIpAddrs,
    ?'edition' => ?DirectoryEdition,
    ?'launch_time' => ?LaunchTime,
    ?'name' => ?DirectoryName,
    ?'owner_directory_description' => ?OwnerDirectoryDescription,
    ?'radius_settings' => ?RadiusSettings,
    ?'radius_status' => ?RadiusStatus,
    ?'share_method' => ?ShareMethod,
    ?'share_notes' => ?Notes,
    ?'share_status' => ?ShareStatus,
    ?'short_name' => ?DirectoryShortName,
    ?'size' => ?DirectorySize,
    ?'sso_enabled' => ?SsoEnabled,
    ?'stage' => ?DirectoryStage,
    ?'stage_last_updated_date_time' => ?LastUpdatedDateTime,
    ?'stage_reason' => ?StageReason,
    ?'type' => ?DirectoryType,
    ?'vpc_settings' => ?DirectoryVpcSettingsDescription,
  ) $s = shape()) {
    $this->access_url = $s['access_url'] ?? '';
    $this->alias = $s['alias'] ?? '';
    $this->connect_settings = $s['connect_settings'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->desired_number_of_domain_controllers = $s['desired_number_of_domain_controllers'] ?? 0;
    $this->directory_id = $s['directory_id'] ?? '';
    $this->dns_ip_addrs = $s['dns_ip_addrs'] ?? vec[];
    $this->edition = $s['edition'] ?? '';
    $this->launch_time = $s['launch_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->owner_directory_description = $s['owner_directory_description'] ?? null;
    $this->radius_settings = $s['radius_settings'] ?? null;
    $this->radius_status = $s['radius_status'] ?? '';
    $this->share_method = $s['share_method'] ?? '';
    $this->share_notes = $s['share_notes'] ?? '';
    $this->share_status = $s['share_status'] ?? '';
    $this->short_name = $s['short_name'] ?? '';
    $this->size = $s['size'] ?? '';
    $this->sso_enabled = $s['sso_enabled'] ?? false;
    $this->stage = $s['stage'] ?? '';
    $this->stage_last_updated_date_time = $s['stage_last_updated_date_time'] ?? 0;
    $this->stage_reason = $s['stage_reason'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->vpc_settings = $s['vpc_settings'] ?? null;
  }
}

type DirectoryDescriptions = vec<DirectoryDescription>;

class DirectoryDoesNotExistException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type DirectoryEdition = string;

type DirectoryId = string;

type DirectoryIds = vec<DirectoryId>;

class DirectoryLimitExceededException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class DirectoryLimits {
  public ?Limit $cloud_only_directories_current_count;
  public ?Limit $cloud_only_directories_limit;
  public ?CloudOnlyDirectoriesLimitReached $cloud_only_directories_limit_reached;
  public ?Limit $cloud_only_microsoft_ad_current_count;
  public ?Limit $cloud_only_microsoft_ad_limit;
  public ?CloudOnlyDirectoriesLimitReached $cloud_only_microsoft_ad_limit_reached;
  public ?Limit $connected_directories_current_count;
  public ?Limit $connected_directories_limit;
  public ?ConnectedDirectoriesLimitReached $connected_directories_limit_reached;

  public function __construct(shape(
    ?'cloud_only_directories_current_count' => ?Limit,
    ?'cloud_only_directories_limit' => ?Limit,
    ?'cloud_only_directories_limit_reached' => ?CloudOnlyDirectoriesLimitReached,
    ?'cloud_only_microsoft_ad_current_count' => ?Limit,
    ?'cloud_only_microsoft_ad_limit' => ?Limit,
    ?'cloud_only_microsoft_ad_limit_reached' => ?CloudOnlyDirectoriesLimitReached,
    ?'connected_directories_current_count' => ?Limit,
    ?'connected_directories_limit' => ?Limit,
    ?'connected_directories_limit_reached' => ?ConnectedDirectoriesLimitReached,
  ) $s = shape()) {
    $this->cloud_only_directories_current_count = $s['cloud_only_directories_current_count'] ?? 0;
    $this->cloud_only_directories_limit = $s['cloud_only_directories_limit'] ?? 0;
    $this->cloud_only_directories_limit_reached = $s['cloud_only_directories_limit_reached'] ?? false;
    $this->cloud_only_microsoft_ad_current_count = $s['cloud_only_microsoft_ad_current_count'] ?? 0;
    $this->cloud_only_microsoft_ad_limit = $s['cloud_only_microsoft_ad_limit'] ?? 0;
    $this->cloud_only_microsoft_ad_limit_reached = $s['cloud_only_microsoft_ad_limit_reached'] ?? false;
    $this->connected_directories_current_count = $s['connected_directories_current_count'] ?? 0;
    $this->connected_directories_limit = $s['connected_directories_limit'] ?? 0;
    $this->connected_directories_limit_reached = $s['connected_directories_limit_reached'] ?? false;
  }
}

type DirectoryName = string;

class DirectoryNotSharedException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type DirectoryShortName = string;

type DirectorySize = string;

type DirectoryStage = string;

type DirectoryType = string;

class DirectoryUnavailableException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class DirectoryVpcSettings {
  public ?SubnetIds $subnet_ids;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'subnet_ids' => ?SubnetIds,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DirectoryVpcSettingsDescription {
  public ?AvailabilityZones $availability_zones;
  public ?SecurityGroupId $security_group_id;
  public ?SubnetIds $subnet_ids;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZones,
    ?'security_group_id' => ?SecurityGroupId,
    ?'subnet_ids' => ?SubnetIds,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->security_group_id = $s['security_group_id'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DisableLDAPSRequest {
  public ?DirectoryId $directory_id;
  public ?LDAPSType $type;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'type' => ?LDAPSType,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class DisableLDAPSResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisableRadiusRequest {
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class DisableRadiusResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisableSsoRequest {
  public ?DirectoryId $directory_id;
  public ?ConnectPassword $password;
  public ?UserName $user_name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'password' => ?ConnectPassword,
    ?'user_name' => ?UserName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DisableSsoResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DnsIpAddrs = vec<IpAddr>;

class DomainController {
  public ?AvailabilityZone $availability_zone;
  public ?DirectoryId $directory_id;
  public ?IpAddr $dns_ip_addr;
  public ?DomainControllerId $domain_controller_id;
  public ?LaunchTime $launch_time;
  public ?DomainControllerStatus $status;
  public ?LastUpdatedDateTime $status_last_updated_date_time;
  public ?DomainControllerStatusReason $status_reason;
  public ?SubnetId $subnet_id;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'availability_zone' => ?AvailabilityZone,
    ?'directory_id' => ?DirectoryId,
    ?'dns_ip_addr' => ?IpAddr,
    ?'domain_controller_id' => ?DomainControllerId,
    ?'launch_time' => ?LaunchTime,
    ?'status' => ?DomainControllerStatus,
    ?'status_last_updated_date_time' => ?LastUpdatedDateTime,
    ?'status_reason' => ?DomainControllerStatusReason,
    ?'subnet_id' => ?SubnetId,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
    $this->dns_ip_addr = $s['dns_ip_addr'] ?? '';
    $this->domain_controller_id = $s['domain_controller_id'] ?? '';
    $this->launch_time = $s['launch_time'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_last_updated_date_time = $s['status_last_updated_date_time'] ?? 0;
    $this->status_reason = $s['status_reason'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type DomainControllerId = string;

type DomainControllerIds = vec<DomainControllerId>;

class DomainControllerLimitExceededException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type DomainControllerStatus = string;

type DomainControllerStatusReason = string;

type DomainControllers = vec<DomainController>;

class EnableLDAPSRequest {
  public ?DirectoryId $directory_id;
  public ?LDAPSType $type;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'type' => ?LDAPSType,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class EnableLDAPSResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableRadiusRequest {
  public ?DirectoryId $directory_id;
  public ?RadiusSettings $radius_settings;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'radius_settings' => ?RadiusSettings,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->radius_settings = $s['radius_settings'] ?? null;
  }
}

class EnableRadiusResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableSsoRequest {
  public ?DirectoryId $directory_id;
  public ?ConnectPassword $password;
  public ?UserName $user_name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'password' => ?ConnectPassword,
    ?'user_name' => ?UserName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class EnableSsoResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EndDateTime = int;

class EntityAlreadyExistsException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class EntityDoesNotExistException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class EventTopic {
  public ?CreatedDateTime $created_date_time;
  public ?DirectoryId $directory_id;
  public ?TopicStatus $status;
  public ?TopicArn $topic_arn;
  public ?TopicName $topic_name;

  public function __construct(shape(
    ?'created_date_time' => ?CreatedDateTime,
    ?'directory_id' => ?DirectoryId,
    ?'status' => ?TopicStatus,
    ?'topic_arn' => ?TopicArn,
    ?'topic_name' => ?TopicName,
  ) $s = shape()) {
    $this->created_date_time = $s['created_date_time'] ?? 0;
    $this->directory_id = $s['directory_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
    $this->topic_name = $s['topic_name'] ?? '';
  }
}

type EventTopics = vec<EventTopic>;

type ExceptionMessage = string;

class GetDirectoryLimitsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetDirectoryLimitsResult {
  public ?DirectoryLimits $directory_limits;

  public function __construct(shape(
    ?'directory_limits' => ?DirectoryLimits,
  ) $s = shape()) {
    $this->directory_limits = $s['directory_limits'] ?? null;
  }
}

class GetSnapshotLimitsRequest {
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class GetSnapshotLimitsResult {
  public ?SnapshotLimits $snapshot_limits;

  public function __construct(shape(
    ?'snapshot_limits' => ?SnapshotLimits,
  ) $s = shape()) {
    $this->snapshot_limits = $s['snapshot_limits'] ?? null;
  }
}

class InsufficientPermissionsException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class InvalidCertificateException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class InvalidLDAPSStatusException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class InvalidNextTokenException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class InvalidParameterException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class InvalidPasswordException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class InvalidTargetException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type IpAddr = string;

type IpAddrs = vec<IpAddr>;

class IpRoute {
  public ?CidrIp $cidr_ip;
  public ?Description $description;

  public function __construct(shape(
    ?'cidr_ip' => ?CidrIp,
    ?'description' => ?Description,
  ) $s = shape()) {
    $this->cidr_ip = $s['cidr_ip'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class IpRouteInfo {
  public ?AddedDateTime $added_date_time;
  public ?CidrIp $cidr_ip;
  public ?Description $description;
  public ?DirectoryId $directory_id;
  public ?IpRouteStatusMsg $ip_route_status_msg;
  public ?IpRouteStatusReason $ip_route_status_reason;

  public function __construct(shape(
    ?'added_date_time' => ?AddedDateTime,
    ?'cidr_ip' => ?CidrIp,
    ?'description' => ?Description,
    ?'directory_id' => ?DirectoryId,
    ?'ip_route_status_msg' => ?IpRouteStatusMsg,
    ?'ip_route_status_reason' => ?IpRouteStatusReason,
  ) $s = shape()) {
    $this->added_date_time = $s['added_date_time'] ?? 0;
    $this->cidr_ip = $s['cidr_ip'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
    $this->ip_route_status_msg = $s['ip_route_status_msg'] ?? '';
    $this->ip_route_status_reason = $s['ip_route_status_reason'] ?? '';
  }
}

class IpRouteLimitExceededException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type IpRouteStatusMsg = string;

type IpRouteStatusReason = string;

type IpRoutes = vec<IpRoute>;

type IpRoutesInfo = vec<IpRouteInfo>;

class LDAPSSettingInfo {
  public ?LDAPSStatus $ldaps_status;
  public ?LDAPSStatusReason $ldaps_status_reason;
  public ?LastUpdatedDateTime $last_updated_date_time;

  public function __construct(shape(
    ?'ldaps_status' => ?LDAPSStatus,
    ?'ldaps_status_reason' => ?LDAPSStatusReason,
    ?'last_updated_date_time' => ?LastUpdatedDateTime,
  ) $s = shape()) {
    $this->ldaps_status = $s['ldaps_status'] ?? '';
    $this->ldaps_status_reason = $s['ldaps_status_reason'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
  }
}

type LDAPSSettingsInfo = vec<LDAPSSettingInfo>;

type LDAPSStatus = string;

type LDAPSStatusReason = string;

type LDAPSType = string;

type LastUpdatedDateTime = int;

type LaunchTime = int;

type LdifContent = string;

type Limit = int;

class ListCertificatesRequest {
  public ?DirectoryId $directory_id;
  public ?PageLimit $limit;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'limit' => ?PageLimit,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCertificatesResult {
  public ?CertificatesInfo $certificates_info;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'certificates_info' => ?CertificatesInfo,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->certificates_info = $s['certificates_info'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIpRoutesRequest {
  public ?DirectoryId $directory_id;
  public ?Limit $limit;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'limit' => ?Limit,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIpRoutesResult {
  public ?IpRoutesInfo $ip_routes_info;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'ip_routes_info' => ?IpRoutesInfo,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->ip_routes_info = $s['ip_routes_info'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListLogSubscriptionsRequest {
  public ?DirectoryId $directory_id;
  public ?Limit $limit;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'limit' => ?Limit,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListLogSubscriptionsResult {
  public ?LogSubscriptions $log_subscriptions;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'log_subscriptions' => ?LogSubscriptions,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->log_subscriptions = $s['log_subscriptions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSchemaExtensionsRequest {
  public ?DirectoryId $directory_id;
  public ?Limit $limit;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'limit' => ?Limit,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSchemaExtensionsResult {
  public ?NextToken $next_token;
  public ?SchemaExtensionsInfo $schema_extensions_info;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'schema_extensions_info' => ?SchemaExtensionsInfo,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_extensions_info = $s['schema_extensions_info'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?Limit $limit;
  public ?NextToken $next_token;
  public ?ResourceId $resource_id;

  public function __construct(shape(
    ?'limit' => ?Limit,
    ?'next_token' => ?NextToken,
    ?'resource_id' => ?ResourceId,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class ListTagsForResourceResult {
  public ?NextToken $next_token;
  public ?Tags $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LogGroupName = string;

class LogSubscription {
  public ?DirectoryId $directory_id;
  public ?LogGroupName $log_group_name;
  public ?SubscriptionCreatedDateTime $subscription_created_date_time;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'log_group_name' => ?LogGroupName,
    ?'subscription_created_date_time' => ?SubscriptionCreatedDateTime,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->log_group_name = $s['log_group_name'] ?? '';
    $this->subscription_created_date_time = $s['subscription_created_date_time'] ?? 0;
  }
}

type LogSubscriptions = vec<LogSubscription>;

type ManualSnapshotsLimitReached = bool;

type NextToken = string;

class NoAvailableCertificateException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type Notes = string;

type OrganizationalUnitDN = string;

class OrganizationsException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class OwnerDirectoryDescription {
  public ?CustomerId $account_id;
  public ?DirectoryId $directory_id;
  public ?DnsIpAddrs $dns_ip_addrs;
  public ?RadiusSettings $radius_settings;
  public ?RadiusStatus $radius_status;
  public ?DirectoryVpcSettingsDescription $vpc_settings;

  public function __construct(shape(
    ?'account_id' => ?CustomerId,
    ?'directory_id' => ?DirectoryId,
    ?'dns_ip_addrs' => ?DnsIpAddrs,
    ?'radius_settings' => ?RadiusSettings,
    ?'radius_status' => ?RadiusStatus,
    ?'vpc_settings' => ?DirectoryVpcSettingsDescription,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
    $this->dns_ip_addrs = $s['dns_ip_addrs'] ?? vec[];
    $this->radius_settings = $s['radius_settings'] ?? null;
    $this->radius_status = $s['radius_status'] ?? '';
    $this->vpc_settings = $s['vpc_settings'] ?? null;
  }
}

type PageLimit = int;

type Password = string;

type PortNumber = int;

type RadiusAuthenticationProtocol = string;

type RadiusDisplayLabel = string;

type RadiusRetries = int;

class RadiusSettings {
  public ?RadiusAuthenticationProtocol $authentication_protocol;
  public ?RadiusDisplayLabel $display_label;
  public ?PortNumber $radius_port;
  public ?RadiusRetries $radius_retries;
  public ?Servers $radius_servers;
  public ?RadiusTimeout $radius_timeout;
  public ?RadiusSharedSecret $shared_secret;
  public ?UseSameUsername $use_same_username;

  public function __construct(shape(
    ?'authentication_protocol' => ?RadiusAuthenticationProtocol,
    ?'display_label' => ?RadiusDisplayLabel,
    ?'radius_port' => ?PortNumber,
    ?'radius_retries' => ?RadiusRetries,
    ?'radius_servers' => ?Servers,
    ?'radius_timeout' => ?RadiusTimeout,
    ?'shared_secret' => ?RadiusSharedSecret,
    ?'use_same_username' => ?UseSameUsername,
  ) $s = shape()) {
    $this->authentication_protocol = $s['authentication_protocol'] ?? '';
    $this->display_label = $s['display_label'] ?? '';
    $this->radius_port = $s['radius_port'] ?? 0;
    $this->radius_retries = $s['radius_retries'] ?? 0;
    $this->radius_servers = $s['radius_servers'] ?? vec[];
    $this->radius_timeout = $s['radius_timeout'] ?? 0;
    $this->shared_secret = $s['shared_secret'] ?? '';
    $this->use_same_username = $s['use_same_username'] ?? false;
  }
}

type RadiusSharedSecret = string;

type RadiusStatus = string;

type RadiusTimeout = int;

class RegisterCertificateRequest {
  public ?CertificateData $certificate_data;
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'certificate_data' => ?CertificateData,
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->certificate_data = $s['certificate_data'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class RegisterCertificateResult {
  public ?CertificateId $certificate_id;

  public function __construct(shape(
    ?'certificate_id' => ?CertificateId,
  ) $s = shape()) {
    $this->certificate_id = $s['certificate_id'] ?? '';
  }
}

class RegisterEventTopicRequest {
  public ?DirectoryId $directory_id;
  public ?TopicName $topic_name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'topic_name' => ?TopicName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->topic_name = $s['topic_name'] ?? '';
  }
}

class RegisterEventTopicResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RejectSharedDirectoryRequest {
  public ?DirectoryId $shared_directory_id;

  public function __construct(shape(
    ?'shared_directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->shared_directory_id = $s['shared_directory_id'] ?? '';
  }
}

class RejectSharedDirectoryResult {
  public ?DirectoryId $shared_directory_id;

  public function __construct(shape(
    ?'shared_directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->shared_directory_id = $s['shared_directory_id'] ?? '';
  }
}

type RemoteDomainName = string;

type RemoteDomainNames = vec<RemoteDomainName>;

class RemoveIpRoutesRequest {
  public ?CidrIps $cidr_ips;
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'cidr_ips' => ?CidrIps,
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->cidr_ips = $s['cidr_ips'] ?? vec[];
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class RemoveIpRoutesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemoveTagsFromResourceRequest {
  public ?ResourceId $resource_id;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'tag_keys' => ?TagKeys,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class RemoveTagsFromResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReplicationScope = string;

type RequestId = string;

class ResetUserPasswordRequest {
  public ?DirectoryId $directory_id;
  public ?UserPassword $new_password;
  public ?CustomerUserName $user_name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'new_password' => ?UserPassword,
    ?'user_name' => ?CustomerUserName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->new_password = $s['new_password'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ResetUserPasswordResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ResourceId = string;

class RestoreFromSnapshotRequest {
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

class RestoreFromSnapshotResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SID = string;

type SchemaExtensionId = string;

class SchemaExtensionInfo {
  public ?Description $description;
  public ?DirectoryId $directory_id;
  public ?EndDateTime $end_date_time;
  public ?SchemaExtensionId $schema_extension_id;
  public ?SchemaExtensionStatus $schema_extension_status;
  public ?SchemaExtensionStatusReason $schema_extension_status_reason;
  public ?StartDateTime $start_date_time;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'directory_id' => ?DirectoryId,
    ?'end_date_time' => ?EndDateTime,
    ?'schema_extension_id' => ?SchemaExtensionId,
    ?'schema_extension_status' => ?SchemaExtensionStatus,
    ?'schema_extension_status_reason' => ?SchemaExtensionStatusReason,
    ?'start_date_time' => ?StartDateTime,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
    $this->end_date_time = $s['end_date_time'] ?? 0;
    $this->schema_extension_id = $s['schema_extension_id'] ?? '';
    $this->schema_extension_status = $s['schema_extension_status'] ?? '';
    $this->schema_extension_status_reason = $s['schema_extension_status_reason'] ?? '';
    $this->start_date_time = $s['start_date_time'] ?? 0;
  }
}

type SchemaExtensionStatus = string;

type SchemaExtensionStatusReason = string;

type SchemaExtensionsInfo = vec<SchemaExtensionInfo>;

type SecurityGroupId = string;

type SelectiveAuth = string;

type Server = string;

type Servers = vec<Server>;

class ServiceException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class ShareDirectoryRequest {
  public ?DirectoryId $directory_id;
  public ?ShareMethod $share_method;
  public ?Notes $share_notes;
  public ?ShareTarget $share_target;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'share_method' => ?ShareMethod,
    ?'share_notes' => ?Notes,
    ?'share_target' => ?ShareTarget,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->share_method = $s['share_method'] ?? '';
    $this->share_notes = $s['share_notes'] ?? '';
    $this->share_target = $s['share_target'] ?? null;
  }
}

class ShareDirectoryResult {
  public ?DirectoryId $shared_directory_id;

  public function __construct(shape(
    ?'shared_directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->shared_directory_id = $s['shared_directory_id'] ?? '';
  }
}

class ShareLimitExceededException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type ShareMethod = string;

type ShareStatus = string;

class ShareTarget {
  public ?TargetId $id;
  public ?TargetType $type;

  public function __construct(shape(
    ?'id' => ?TargetId,
    ?'type' => ?TargetType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type SharedDirectories = vec<SharedDirectory>;

class SharedDirectory {
  public ?CreatedDateTime $created_date_time;
  public ?LastUpdatedDateTime $last_updated_date_time;
  public ?CustomerId $owner_account_id;
  public ?DirectoryId $owner_directory_id;
  public ?ShareMethod $share_method;
  public ?Notes $share_notes;
  public ?ShareStatus $share_status;
  public ?CustomerId $shared_account_id;
  public ?DirectoryId $shared_directory_id;

  public function __construct(shape(
    ?'created_date_time' => ?CreatedDateTime,
    ?'last_updated_date_time' => ?LastUpdatedDateTime,
    ?'owner_account_id' => ?CustomerId,
    ?'owner_directory_id' => ?DirectoryId,
    ?'share_method' => ?ShareMethod,
    ?'share_notes' => ?Notes,
    ?'share_status' => ?ShareStatus,
    ?'shared_account_id' => ?CustomerId,
    ?'shared_directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->created_date_time = $s['created_date_time'] ?? 0;
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->owner_account_id = $s['owner_account_id'] ?? '';
    $this->owner_directory_id = $s['owner_directory_id'] ?? '';
    $this->share_method = $s['share_method'] ?? '';
    $this->share_notes = $s['share_notes'] ?? '';
    $this->share_status = $s['share_status'] ?? '';
    $this->shared_account_id = $s['shared_account_id'] ?? '';
    $this->shared_directory_id = $s['shared_directory_id'] ?? '';
  }
}

class Snapshot {
  public ?DirectoryId $directory_id;
  public ?SnapshotName $name;
  public ?SnapshotId $snapshot_id;
  public ?StartTime $start_time;
  public ?SnapshotStatus $status;
  public ?SnapshotType $type;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'name' => ?SnapshotName,
    ?'snapshot_id' => ?SnapshotId,
    ?'start_time' => ?StartTime,
    ?'status' => ?SnapshotStatus,
    ?'type' => ?SnapshotType,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type SnapshotId = string;

type SnapshotIds = vec<SnapshotId>;

class SnapshotLimitExceededException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class SnapshotLimits {
  public ?Limit $manual_snapshots_current_count;
  public ?Limit $manual_snapshots_limit;
  public ?ManualSnapshotsLimitReached $manual_snapshots_limit_reached;

  public function __construct(shape(
    ?'manual_snapshots_current_count' => ?Limit,
    ?'manual_snapshots_limit' => ?Limit,
    ?'manual_snapshots_limit_reached' => ?ManualSnapshotsLimitReached,
  ) $s = shape()) {
    $this->manual_snapshots_current_count = $s['manual_snapshots_current_count'] ?? 0;
    $this->manual_snapshots_limit = $s['manual_snapshots_limit'] ?? 0;
    $this->manual_snapshots_limit_reached = $s['manual_snapshots_limit_reached'] ?? false;
  }
}

type SnapshotName = string;

type SnapshotStatus = string;

type SnapshotType = string;

type Snapshots = vec<Snapshot>;

type SsoEnabled = bool;

type StageReason = string;

type StartDateTime = int;

class StartSchemaExtensionRequest {
  public ?CreateSnapshotBeforeSchemaExtension $create_snapshot_before_schema_extension;
  public ?Description $description;
  public ?DirectoryId $directory_id;
  public ?LdifContent $ldif_content;

  public function __construct(shape(
    ?'create_snapshot_before_schema_extension' => ?CreateSnapshotBeforeSchemaExtension,
    ?'description' => ?Description,
    ?'directory_id' => ?DirectoryId,
    ?'ldif_content' => ?LdifContent,
  ) $s = shape()) {
    $this->create_snapshot_before_schema_extension = $s['create_snapshot_before_schema_extension'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
    $this->ldif_content = $s['ldif_content'] ?? '';
  }
}

class StartSchemaExtensionResult {
  public ?SchemaExtensionId $schema_extension_id;

  public function __construct(shape(
    ?'schema_extension_id' => ?SchemaExtensionId,
  ) $s = shape()) {
    $this->schema_extension_id = $s['schema_extension_id'] ?? '';
  }
}

type StartTime = int;

type StateLastUpdatedDateTime = int;

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

type SubscriptionCreatedDateTime = int;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagLimitExceededException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type TagValue = string;

type Tags = vec<Tag>;

type TargetId = string;

type TargetType = string;

type TopicArn = string;

type TopicName = string;

type TopicNames = vec<TopicName>;

type TopicStatus = string;

class Trust {
  public ?CreatedDateTime $created_date_time;
  public ?DirectoryId $directory_id;
  public ?LastUpdatedDateTime $last_updated_date_time;
  public ?RemoteDomainName $remote_domain_name;
  public ?SelectiveAuth $selective_auth;
  public ?StateLastUpdatedDateTime $state_last_updated_date_time;
  public ?TrustDirection $trust_direction;
  public ?TrustId $trust_id;
  public ?TrustState $trust_state;
  public ?TrustStateReason $trust_state_reason;
  public ?TrustType $trust_type;

  public function __construct(shape(
    ?'created_date_time' => ?CreatedDateTime,
    ?'directory_id' => ?DirectoryId,
    ?'last_updated_date_time' => ?LastUpdatedDateTime,
    ?'remote_domain_name' => ?RemoteDomainName,
    ?'selective_auth' => ?SelectiveAuth,
    ?'state_last_updated_date_time' => ?StateLastUpdatedDateTime,
    ?'trust_direction' => ?TrustDirection,
    ?'trust_id' => ?TrustId,
    ?'trust_state' => ?TrustState,
    ?'trust_state_reason' => ?TrustStateReason,
    ?'trust_type' => ?TrustType,
  ) $s = shape()) {
    $this->created_date_time = $s['created_date_time'] ?? 0;
    $this->directory_id = $s['directory_id'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->remote_domain_name = $s['remote_domain_name'] ?? '';
    $this->selective_auth = $s['selective_auth'] ?? '';
    $this->state_last_updated_date_time = $s['state_last_updated_date_time'] ?? 0;
    $this->trust_direction = $s['trust_direction'] ?? '';
    $this->trust_id = $s['trust_id'] ?? '';
    $this->trust_state = $s['trust_state'] ?? '';
    $this->trust_state_reason = $s['trust_state_reason'] ?? '';
    $this->trust_type = $s['trust_type'] ?? '';
  }
}

type TrustDirection = string;

type TrustId = string;

type TrustIds = vec<TrustId>;

type TrustPassword = string;

type TrustState = string;

type TrustStateReason = string;

type TrustType = string;

type Trusts = vec<Trust>;

class UnshareDirectoryRequest {
  public ?DirectoryId $directory_id;
  public ?UnshareTarget $unshare_target;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'unshare_target' => ?UnshareTarget,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->unshare_target = $s['unshare_target'] ?? null;
  }
}

class UnshareDirectoryResult {
  public ?DirectoryId $shared_directory_id;

  public function __construct(shape(
    ?'shared_directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->shared_directory_id = $s['shared_directory_id'] ?? '';
  }
}

class UnshareTarget {
  public ?TargetId $id;
  public ?TargetType $type;

  public function __construct(shape(
    ?'id' => ?TargetId,
    ?'type' => ?TargetType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class UnsupportedOperationException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class UpdateConditionalForwarderRequest {
  public ?DirectoryId $directory_id;
  public ?DnsIpAddrs $dns_ip_addrs;
  public ?RemoteDomainName $remote_domain_name;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'dns_ip_addrs' => ?DnsIpAddrs,
    ?'remote_domain_name' => ?RemoteDomainName,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->dns_ip_addrs = $s['dns_ip_addrs'] ?? vec[];
    $this->remote_domain_name = $s['remote_domain_name'] ?? '';
  }
}

class UpdateConditionalForwarderResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateNumberOfDomainControllersRequest {
  public ?DesiredNumberOfDomainControllers $desired_number;
  public ?DirectoryId $directory_id;

  public function __construct(shape(
    ?'desired_number' => ?DesiredNumberOfDomainControllers,
    ?'directory_id' => ?DirectoryId,
  ) $s = shape()) {
    $this->desired_number = $s['desired_number'] ?? 0;
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class UpdateNumberOfDomainControllersResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateRadiusRequest {
  public ?DirectoryId $directory_id;
  public ?RadiusSettings $radius_settings;

  public function __construct(shape(
    ?'directory_id' => ?DirectoryId,
    ?'radius_settings' => ?RadiusSettings,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
    $this->radius_settings = $s['radius_settings'] ?? null;
  }
}

class UpdateRadiusResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UpdateSecurityGroupForDirectoryControllers = bool;

class UpdateTrustRequest {
  public ?SelectiveAuth $selective_auth;
  public ?TrustId $trust_id;

  public function __construct(shape(
    ?'selective_auth' => ?SelectiveAuth,
    ?'trust_id' => ?TrustId,
  ) $s = shape()) {
    $this->selective_auth = $s['selective_auth'] ?? '';
    $this->trust_id = $s['trust_id'] ?? '';
  }
}

class UpdateTrustResult {
  public ?RequestId $request_id;
  public ?TrustId $trust_id;

  public function __construct(shape(
    ?'request_id' => ?RequestId,
    ?'trust_id' => ?TrustId,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->trust_id = $s['trust_id'] ?? '';
  }
}

type UseSameUsername = bool;

class UserDoesNotExistException {
  public ?ExceptionMessage $message;
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type UserName = string;

type UserPassword = string;

class VerifyTrustRequest {
  public ?TrustId $trust_id;

  public function __construct(shape(
    ?'trust_id' => ?TrustId,
  ) $s = shape()) {
    $this->trust_id = $s['trust_id'] ?? '';
  }
}

class VerifyTrustResult {
  public ?TrustId $trust_id;

  public function __construct(shape(
    ?'trust_id' => ?TrustId,
  ) $s = shape()) {
    $this->trust_id = $s['trust_id'] ?? '';
  }
}

type VpcId = string;

