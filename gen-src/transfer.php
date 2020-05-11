<?hh // strict
namespace slack\aws\transfer;

interface Transfer {
  public function CreateServer(CreateServerRequest): Awaitable<Errors\Result<CreateServerResponse>>;
  public function CreateUser(CreateUserRequest): Awaitable<Errors\Result<CreateUserResponse>>;
  public function DeleteServer(DeleteServerRequest): Awaitable<Errors\Error>;
  public function DeleteSshPublicKey(DeleteSshPublicKeyRequest): Awaitable<Errors\Error>;
  public function DeleteUser(DeleteUserRequest): Awaitable<Errors\Error>;
  public function DescribeServer(DescribeServerRequest): Awaitable<Errors\Result<DescribeServerResponse>>;
  public function DescribeUser(DescribeUserRequest): Awaitable<Errors\Result<DescribeUserResponse>>;
  public function ImportSshPublicKey(ImportSshPublicKeyRequest): Awaitable<Errors\Result<ImportSshPublicKeyResponse>>;
  public function ListServers(ListServersRequest): Awaitable<Errors\Result<ListServersResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUsers(ListUsersRequest): Awaitable<Errors\Result<ListUsersResponse>>;
  public function StartServer(StartServerRequest): Awaitable<Errors\Error>;
  public function StopServer(StopServerRequest): Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function TestIdentityProvider(TestIdentityProviderRequest): Awaitable<Errors\Result<TestIdentityProviderResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateServer(UpdateServerRequest): Awaitable<Errors\Result<UpdateServerResponse>>;
  public function UpdateUser(UpdateUserRequest): Awaitable<Errors\Result<UpdateUserResponse>>;
}

class AccessDeniedException {
  public ServiceErrorMessage $message;

  public function __construct(shape(
  ?'message' => ServiceErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AddressAllocationId = string;

type AddressAllocationIds = vec<AddressAllocationId>;

type Arn = string;

type Certificate = string;

class ConflictException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CreateServerRequest {
  public Certificate $certificate;
  public EndpointDetails $endpoint_details;
  public EndpointType $endpoint_type;
  public HostKey $host_key;
  public IdentityProviderDetails $identity_provider_details;
  public IdentityProviderType $identity_provider_type;
  public Role $logging_role;
  public Protocols $protocols;
  public Tags $tags;

  public function __construct(shape(
  ?'certificate' => Certificate,
  ?'endpoint_details' => EndpointDetails,
  ?'endpoint_type' => EndpointType,
  ?'host_key' => HostKey,
  ?'identity_provider_details' => IdentityProviderDetails,
  ?'identity_provider_type' => IdentityProviderType,
  ?'logging_role' => Role,
  ?'protocols' => Protocols,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->endpoint_details = $endpoint_details ?? null;
    $this->endpoint_type = $endpoint_type ?? "";
    $this->host_key = $host_key ?? "";
    $this->identity_provider_details = $identity_provider_details ?? null;
    $this->identity_provider_type = $identity_provider_type ?? "";
    $this->logging_role = $logging_role ?? "";
    $this->protocols = $protocols ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateServerResponse {
  public ServerId $server_id;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
  }
}

class CreateUserRequest {
  public HomeDirectory $home_directory;
  public HomeDirectoryMappings $home_directory_mappings;
  public HomeDirectoryType $home_directory_type;
  public Policy $policy;
  public Role $role;
  public ServerId $server_id;
  public SshPublicKeyBody $ssh_public_key_body;
  public Tags $tags;
  public UserName $user_name;

  public function __construct(shape(
  ?'home_directory' => HomeDirectory,
  ?'home_directory_mappings' => HomeDirectoryMappings,
  ?'home_directory_type' => HomeDirectoryType,
  ?'policy' => Policy,
  ?'role' => Role,
  ?'server_id' => ServerId,
  ?'ssh_public_key_body' => SshPublicKeyBody,
  ?'tags' => Tags,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->home_directory = $home_directory ?? "";
    $this->home_directory_mappings = $home_directory_mappings ?? [];
    $this->home_directory_type = $home_directory_type ?? "";
    $this->policy = $policy ?? "";
    $this->role = $role ?? "";
    $this->server_id = $server_id ?? "";
    $this->ssh_public_key_body = $ssh_public_key_body ?? "";
    $this->tags = $tags ?? [];
    $this->user_name = $user_name ?? "";
  }
}

class CreateUserResponse {
  public ServerId $server_id;
  public UserName $user_name;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type DateImported = int;

class DeleteServerRequest {
  public ServerId $server_id;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
  }
}

class DeleteSshPublicKeyRequest {
  public ServerId $server_id;
  public SshPublicKeyId $ssh_public_key_id;
  public UserName $user_name;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ?'ssh_public_key_id' => SshPublicKeyId,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
    $this->ssh_public_key_id = $ssh_public_key_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DeleteUserRequest {
  public ServerId $server_id;
  public UserName $user_name;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DescribeServerRequest {
  public ServerId $server_id;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
  }
}

class DescribeServerResponse {
  public DescribedServer $server;

  public function __construct(shape(
  ?'server' => DescribedServer,
  ) $s = shape()) {
    $this->server = $server ?? null;
  }
}

class DescribeUserRequest {
  public ServerId $server_id;
  public UserName $user_name;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DescribeUserResponse {
  public ServerId $server_id;
  public DescribedUser $user;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ?'user' => DescribedUser,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
    $this->user = $user ?? null;
  }
}

class DescribedServer {
  public Arn $arn;
  public Certificate $certificate;
  public EndpointDetails $endpoint_details;
  public EndpointType $endpoint_type;
  public HostKeyFingerprint $host_key_fingerprint;
  public IdentityProviderDetails $identity_provider_details;
  public IdentityProviderType $identity_provider_type;
  public Role $logging_role;
  public Protocols $protocols;
  public ServerId $server_id;
  public State $state;
  public Tags $tags;
  public UserCount $user_count;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'certificate' => Certificate,
  ?'endpoint_details' => EndpointDetails,
  ?'endpoint_type' => EndpointType,
  ?'host_key_fingerprint' => HostKeyFingerprint,
  ?'identity_provider_details' => IdentityProviderDetails,
  ?'identity_provider_type' => IdentityProviderType,
  ?'logging_role' => Role,
  ?'protocols' => Protocols,
  ?'server_id' => ServerId,
  ?'state' => State,
  ?'tags' => Tags,
  ?'user_count' => UserCount,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->certificate = $certificate ?? "";
    $this->endpoint_details = $endpoint_details ?? null;
    $this->endpoint_type = $endpoint_type ?? "";
    $this->host_key_fingerprint = $host_key_fingerprint ?? "";
    $this->identity_provider_details = $identity_provider_details ?? null;
    $this->identity_provider_type = $identity_provider_type ?? "";
    $this->logging_role = $logging_role ?? "";
    $this->protocols = $protocols ?? [];
    $this->server_id = $server_id ?? "";
    $this->state = $state ?? "";
    $this->tags = $tags ?? [];
    $this->user_count = $user_count ?? 0;
  }
}

class DescribedUser {
  public Arn $arn;
  public HomeDirectory $home_directory;
  public HomeDirectoryMappings $home_directory_mappings;
  public HomeDirectoryType $home_directory_type;
  public Policy $policy;
  public Role $role;
  public SshPublicKeys $ssh_public_keys;
  public Tags $tags;
  public UserName $user_name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'home_directory' => HomeDirectory,
  ?'home_directory_mappings' => HomeDirectoryMappings,
  ?'home_directory_type' => HomeDirectoryType,
  ?'policy' => Policy,
  ?'role' => Role,
  ?'ssh_public_keys' => SshPublicKeys,
  ?'tags' => Tags,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->home_directory = $home_directory ?? "";
    $this->home_directory_mappings = $home_directory_mappings ?? [];
    $this->home_directory_type = $home_directory_type ?? "";
    $this->policy = $policy ?? "";
    $this->role = $role ?? "";
    $this->ssh_public_keys = $ssh_public_keys ?? [];
    $this->tags = $tags ?? [];
    $this->user_name = $user_name ?? "";
  }
}

class EndpointDetails {
  public AddressAllocationIds $address_allocation_ids;
  public SubnetIds $subnet_ids;
  public VpcEndpointId $vpc_endpoint_id;
  public VpcId $vpc_id;

  public function __construct(shape(
  ?'address_allocation_ids' => AddressAllocationIds,
  ?'subnet_ids' => SubnetIds,
  ?'vpc_endpoint_id' => VpcEndpointId,
  ?'vpc_id' => VpcId,
  ) $s = shape()) {
    $this->address_allocation_ids = $address_allocation_ids ?? [];
    $this->subnet_ids = $subnet_ids ?? [];
    $this->vpc_endpoint_id = $vpc_endpoint_id ?? "";
    $this->vpc_id = $vpc_id ?? "";
  }
}

type EndpointType = string;

type HomeDirectory = string;

class HomeDirectoryMapEntry {
  public MapEntry $entry;
  public MapTarget $target;

  public function __construct(shape(
  ?'entry' => MapEntry,
  ?'target' => MapTarget,
  ) $s = shape()) {
    $this->entry = $entry ?? "";
    $this->target = $target ?? "";
  }
}

type HomeDirectoryMappings = vec<HomeDirectoryMapEntry>;

type HomeDirectoryType = string;

type HostKey = string;

type HostKeyFingerprint = string;

class IdentityProviderDetails {
  public Role $invocation_role;
  public Url $url;

  public function __construct(shape(
  ?'invocation_role' => Role,
  ?'url' => Url,
  ) $s = shape()) {
    $this->invocation_role = $invocation_role ?? "";
    $this->url = $url ?? "";
  }
}

type IdentityProviderType = string;

class ImportSshPublicKeyRequest {
  public ServerId $server_id;
  public SshPublicKeyBody $ssh_public_key_body;
  public UserName $user_name;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ?'ssh_public_key_body' => SshPublicKeyBody,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
    $this->ssh_public_key_body = $ssh_public_key_body ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class ImportSshPublicKeyResponse {
  public ServerId $server_id;
  public SshPublicKeyId $ssh_public_key_id;
  public UserName $user_name;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ?'ssh_public_key_id' => SshPublicKeyId,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
    $this->ssh_public_key_id = $ssh_public_key_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class InternalServiceError {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidNextTokenException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidRequestException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListServersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListServersResponse {
  public NextToken $next_token;
  public ListedServers $servers;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'servers' => ListedServers,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->servers = $servers ?? [];
  }
}

class ListTagsForResourceRequest {
  public Arn $arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceResponse {
  public Arn $arn;
  public NextToken $next_token;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'next_token' => NextToken,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListUsersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServerId $server_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'server_id' => ServerId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->server_id = $server_id ?? "";
  }
}

class ListUsersResponse {
  public NextToken $next_token;
  public ServerId $server_id;
  public ListedUsers $users;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'server_id' => ServerId,
  ?'users' => ListedUsers,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->server_id = $server_id ?? "";
    $this->users = $users ?? [];
  }
}

class ListedServer {
  public Arn $arn;
  public EndpointType $endpoint_type;
  public IdentityProviderType $identity_provider_type;
  public Role $logging_role;
  public ServerId $server_id;
  public State $state;
  public UserCount $user_count;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'endpoint_type' => EndpointType,
  ?'identity_provider_type' => IdentityProviderType,
  ?'logging_role' => Role,
  ?'server_id' => ServerId,
  ?'state' => State,
  ?'user_count' => UserCount,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->endpoint_type = $endpoint_type ?? "";
    $this->identity_provider_type = $identity_provider_type ?? "";
    $this->logging_role = $logging_role ?? "";
    $this->server_id = $server_id ?? "";
    $this->state = $state ?? "";
    $this->user_count = $user_count ?? 0;
  }
}

type ListedServers = vec<ListedServer>;

class ListedUser {
  public Arn $arn;
  public HomeDirectory $home_directory;
  public HomeDirectoryType $home_directory_type;
  public Role $role;
  public SshPublicKeyCount $ssh_public_key_count;
  public UserName $user_name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'home_directory' => HomeDirectory,
  ?'home_directory_type' => HomeDirectoryType,
  ?'role' => Role,
  ?'ssh_public_key_count' => SshPublicKeyCount,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->home_directory = $home_directory ?? "";
    $this->home_directory_type = $home_directory_type ?? "";
    $this->role = $role ?? "";
    $this->ssh_public_key_count = $ssh_public_key_count ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

type ListedUsers = vec<ListedUser>;

type MapEntry = string;

type MapTarget = string;

type MaxResults = int;

type Message = string;

type NextToken = string;

type NullableRole = string;

type Policy = string;

type Protocol = string;

type Protocols = vec<Protocol>;

type Resource = string;

class ResourceExistsException {
  public Message $message;
  public Resource $resource;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'message' => Message,
  ?'resource' => Resource,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class ResourceNotFoundException {
  public Message $message;
  public Resource $resource;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'message' => Message,
  ?'resource' => Resource,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type ResourceType = string;

type Response = string;

type RetryAfterSeconds = string;

type Role = string;

type ServerId = string;

type ServiceErrorMessage = string;

class ServiceUnavailableException {
  public ServiceErrorMessage $message;

  public function __construct(shape(
  ?'message' => ServiceErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SshPublicKey {
  public DateImported $date_imported;
  public SshPublicKeyBody $ssh_public_key_body;
  public SshPublicKeyId $ssh_public_key_id;

  public function __construct(shape(
  ?'date_imported' => DateImported,
  ?'ssh_public_key_body' => SshPublicKeyBody,
  ?'ssh_public_key_id' => SshPublicKeyId,
  ) $s = shape()) {
    $this->date_imported = $date_imported ?? 0;
    $this->ssh_public_key_body = $ssh_public_key_body ?? "";
    $this->ssh_public_key_id = $ssh_public_key_id ?? "";
  }
}

type SshPublicKeyBody = string;

type SshPublicKeyCount = int;

type SshPublicKeyId = string;

type SshPublicKeys = vec<SshPublicKey>;

class StartServerRequest {
  public ServerId $server_id;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
  }
}

type State = string;

type StatusCode = int;

class StopServerRequest {
  public ServerId $server_id;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
  }
}

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public Arn $arn;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagValue = string;

type Tags = vec<Tag>;

class TestIdentityProviderRequest {
  public ServerId $server_id;
  public Protocol $server_protocol;
  public UserName $user_name;
  public UserPassword $user_password;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ?'server_protocol' => Protocol,
  ?'user_name' => UserName,
  ?'user_password' => UserPassword,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
    $this->server_protocol = $server_protocol ?? "";
    $this->user_name = $user_name ?? "";
    $this->user_password = $user_password ?? "";
  }
}

class TestIdentityProviderResponse {
  public Message $message;
  public Response $response;
  public StatusCode $status_code;
  public Url $url;

  public function __construct(shape(
  ?'message' => Message,
  ?'response' => Response,
  ?'status_code' => StatusCode,
  ?'url' => Url,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->response = $response ?? "";
    $this->status_code = $status_code ?? 0;
    $this->url = $url ?? "";
  }
}

class ThrottlingException {
  public RetryAfterSeconds $retry_after_seconds;

  public function __construct(shape(
  ?'retry_after_seconds' => RetryAfterSeconds,
  ) $s = shape()) {
    $this->retry_after_seconds = $retry_after_seconds ?? "";
  }
}

class UntagResourceRequest {
  public Arn $arn;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UpdateServerRequest {
  public Certificate $certificate;
  public EndpointDetails $endpoint_details;
  public EndpointType $endpoint_type;
  public HostKey $host_key;
  public IdentityProviderDetails $identity_provider_details;
  public NullableRole $logging_role;
  public Protocols $protocols;
  public ServerId $server_id;

  public function __construct(shape(
  ?'certificate' => Certificate,
  ?'endpoint_details' => EndpointDetails,
  ?'endpoint_type' => EndpointType,
  ?'host_key' => HostKey,
  ?'identity_provider_details' => IdentityProviderDetails,
  ?'logging_role' => NullableRole,
  ?'protocols' => Protocols,
  ?'server_id' => ServerId,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->endpoint_details = $endpoint_details ?? null;
    $this->endpoint_type = $endpoint_type ?? "";
    $this->host_key = $host_key ?? "";
    $this->identity_provider_details = $identity_provider_details ?? null;
    $this->logging_role = $logging_role ?? "";
    $this->protocols = $protocols ?? [];
    $this->server_id = $server_id ?? "";
  }
}

class UpdateServerResponse {
  public ServerId $server_id;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
  }
}

class UpdateUserRequest {
  public HomeDirectory $home_directory;
  public HomeDirectoryMappings $home_directory_mappings;
  public HomeDirectoryType $home_directory_type;
  public Policy $policy;
  public Role $role;
  public ServerId $server_id;
  public UserName $user_name;

  public function __construct(shape(
  ?'home_directory' => HomeDirectory,
  ?'home_directory_mappings' => HomeDirectoryMappings,
  ?'home_directory_type' => HomeDirectoryType,
  ?'policy' => Policy,
  ?'role' => Role,
  ?'server_id' => ServerId,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->home_directory = $home_directory ?? "";
    $this->home_directory_mappings = $home_directory_mappings ?? [];
    $this->home_directory_type = $home_directory_type ?? "";
    $this->policy = $policy ?? "";
    $this->role = $role ?? "";
    $this->server_id = $server_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class UpdateUserResponse {
  public ServerId $server_id;
  public UserName $user_name;

  public function __construct(shape(
  ?'server_id' => ServerId,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->server_id = $server_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type Url = string;

type UserCount = int;

type UserName = string;

type UserPassword = string;

type VpcEndpointId = string;

type VpcId = string;

