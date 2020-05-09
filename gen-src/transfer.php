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
}

class AddressAllocationId {
}

class AddressAllocationIds {
}

class Arn {
}

class Certificate {
}

class ConflictException {
  public Message $message;
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
}

class CreateServerResponse {
  public ServerId $server_id;
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
}

class CreateUserResponse {
  public ServerId $server_id;
  public UserName $user_name;
}

class DateImported {
}

class DeleteServerRequest {
  public ServerId $server_id;
}

class DeleteSshPublicKeyRequest {
  public ServerId $server_id;
  public SshPublicKeyId $ssh_public_key_id;
  public UserName $user_name;
}

class DeleteUserRequest {
  public ServerId $server_id;
  public UserName $user_name;
}

class DescribeServerRequest {
  public ServerId $server_id;
}

class DescribeServerResponse {
  public DescribedServer $server;
}

class DescribeUserRequest {
  public ServerId $server_id;
  public UserName $user_name;
}

class DescribeUserResponse {
  public ServerId $server_id;
  public DescribedUser $user;
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
}

class EndpointDetails {
  public AddressAllocationIds $address_allocation_ids;
  public SubnetIds $subnet_ids;
  public VpcEndpointId $vpc_endpoint_id;
  public VpcId $vpc_id;
}

class EndpointType {
}

class HomeDirectory {
}

class HomeDirectoryMapEntry {
  public MapEntry $entry;
  public MapTarget $target;
}

class HomeDirectoryMappings {
}

class HomeDirectoryType {
}

class HostKey {
}

class HostKeyFingerprint {
}

class IdentityProviderDetails {
  public Role $invocation_role;
  public Url $url;
}

class IdentityProviderType {
}

class ImportSshPublicKeyRequest {
  public ServerId $server_id;
  public SshPublicKeyBody $ssh_public_key_body;
  public UserName $user_name;
}

class ImportSshPublicKeyResponse {
  public ServerId $server_id;
  public SshPublicKeyId $ssh_public_key_id;
  public UserName $user_name;
}

class InternalServiceError {
  public Message $message;
}

class InvalidNextTokenException {
  public Message $message;
}

class InvalidRequestException {
  public Message $message;
}

class ListServersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListServersResponse {
  public NextToken $next_token;
  public ListedServers $servers;
}

class ListTagsForResourceRequest {
  public Arn $arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListTagsForResourceResponse {
  public Arn $arn;
  public NextToken $next_token;
  public Tags $tags;
}

class ListUsersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServerId $server_id;
}

class ListUsersResponse {
  public NextToken $next_token;
  public ServerId $server_id;
  public ListedUsers $users;
}

class ListedServer {
  public Arn $arn;
  public EndpointType $endpoint_type;
  public IdentityProviderType $identity_provider_type;
  public Role $logging_role;
  public ServerId $server_id;
  public State $state;
  public UserCount $user_count;
}

class ListedServers {
}

class ListedUser {
  public Arn $arn;
  public HomeDirectory $home_directory;
  public HomeDirectoryType $home_directory_type;
  public Role $role;
  public SshPublicKeyCount $ssh_public_key_count;
  public UserName $user_name;
}

class ListedUsers {
}

class MapEntry {
}

class MapTarget {
}

class MaxResults {
}

class Message {
}

class NextToken {
}

class NullableRole {
}

class Policy {
}

class Protocol {
}

class Protocols {
}

class Resource {
}

class ResourceExistsException {
  public Message $message;
  public Resource $resource;
  public ResourceType $resource_type;
}

class ResourceNotFoundException {
  public Message $message;
  public Resource $resource;
  public ResourceType $resource_type;
}

class ResourceType {
}

class Response {
}

class RetryAfterSeconds {
}

class Role {
}

class ServerId {
}

class ServiceErrorMessage {
}

class ServiceUnavailableException {
  public ServiceErrorMessage $message;
}

class SshPublicKey {
  public DateImported $date_imported;
  public SshPublicKeyBody $ssh_public_key_body;
  public SshPublicKeyId $ssh_public_key_id;
}

class SshPublicKeyBody {
}

class SshPublicKeyCount {
}

class SshPublicKeyId {
}

class SshPublicKeys {
}

class StartServerRequest {
  public ServerId $server_id;
}

class State {
}

class StatusCode {
}

class StopServerRequest {
  public ServerId $server_id;
}

class SubnetId {
}

class SubnetIds {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public Arn $arn;
  public Tags $tags;
}

class TagValue {
}

class Tags {
}

class TestIdentityProviderRequest {
  public ServerId $server_id;
  public Protocol $server_protocol;
  public UserName $user_name;
  public UserPassword $user_password;
}

class TestIdentityProviderResponse {
  public Message $message;
  public Response $response;
  public StatusCode $status_code;
  public Url $url;
}

class ThrottlingException {
  public RetryAfterSeconds $retry_after_seconds;
}

class UntagResourceRequest {
  public Arn $arn;
  public TagKeys $tag_keys;
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
}

class UpdateServerResponse {
  public ServerId $server_id;
}

class UpdateUserRequest {
  public HomeDirectory $home_directory;
  public HomeDirectoryMappings $home_directory_mappings;
  public HomeDirectoryType $home_directory_type;
  public Policy $policy;
  public Role $role;
  public ServerId $server_id;
  public UserName $user_name;
}

class UpdateUserResponse {
  public ServerId $server_id;
  public UserName $user_name;
}

class Url {
}

class UserCount {
}

class UserName {
}

class UserPassword {
}

class VpcEndpointId {
}

class VpcId {
}

