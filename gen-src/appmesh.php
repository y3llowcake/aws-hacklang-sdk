<?hh // strict
namespace slack\aws\appmesh;

interface App Mesh {
  public function CreateMesh(CreateMeshInput) Awaitable<Errors\Result<CreateMeshOutput>>;
  public function DeleteVirtualRouter(DeleteVirtualRouterInput) Awaitable<Errors\Result<DeleteVirtualRouterOutput>>;
  public function DescribeVirtualNode(DescribeVirtualNodeInput) Awaitable<Errors\Result<DescribeVirtualNodeOutput>>;
  public function ListVirtualRouters(ListVirtualRoutersInput) Awaitable<Errors\Result<ListVirtualRoutersOutput>>;
  public function UpdateMesh(UpdateMeshInput) Awaitable<Errors\Result<UpdateMeshOutput>>;
  public function UpdateRoute(UpdateRouteInput) Awaitable<Errors\Result<UpdateRouteOutput>>;
  public function DeleteVirtualNode(DeleteVirtualNodeInput) Awaitable<Errors\Result<DeleteVirtualNodeOutput>>;
  public function ListVirtualNodes(ListVirtualNodesInput) Awaitable<Errors\Result<ListVirtualNodesOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function CreateVirtualRouter(CreateVirtualRouterInput) Awaitable<Errors\Result<CreateVirtualRouterOutput>>;
  public function ListRoutes(ListRoutesInput) Awaitable<Errors\Result<ListRoutesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function UpdateVirtualService(UpdateVirtualServiceInput) Awaitable<Errors\Result<UpdateVirtualServiceOutput>>;
  public function CreateVirtualService(CreateVirtualServiceInput) Awaitable<Errors\Result<CreateVirtualServiceOutput>>;
  public function DescribeRoute(DescribeRouteInput) Awaitable<Errors\Result<DescribeRouteOutput>>;
  public function ListMeshes(ListMeshesInput) Awaitable<Errors\Result<ListMeshesOutput>>;
  public function UpdateVirtualRouter(UpdateVirtualRouterInput) Awaitable<Errors\Result<UpdateVirtualRouterOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
  public function DeleteRoute(DeleteRouteInput) Awaitable<Errors\Result<DeleteRouteOutput>>;
  public function DescribeVirtualRouter(DescribeVirtualRouterInput) Awaitable<Errors\Result<DescribeVirtualRouterOutput>>;
  public function UpdateVirtualNode(UpdateVirtualNodeInput) Awaitable<Errors\Result<UpdateVirtualNodeOutput>>;
  public function CreateRoute(CreateRouteInput) Awaitable<Errors\Result<CreateRouteOutput>>;
  public function CreateVirtualNode(CreateVirtualNodeInput) Awaitable<Errors\Result<CreateVirtualNodeOutput>>;
  public function DeleteVirtualService(DeleteVirtualServiceInput) Awaitable<Errors\Result<DeleteVirtualServiceOutput>>;
  public function DescribeVirtualService(DescribeVirtualServiceInput) Awaitable<Errors\Result<DescribeVirtualServiceOutput>>;
  public function DeleteMesh(DeleteMeshInput) Awaitable<Errors\Result<DeleteMeshOutput>>;
  public function DescribeMesh(DescribeMeshInput) Awaitable<Errors\Result<DescribeMeshOutput>>;
  public function ListVirtualServices(ListVirtualServicesInput) Awaitable<Errors\Result<ListVirtualServicesOutput>>;
}

class DnsServiceDiscovery {
  public Hostname $hostname;
}

class CreateVirtualServiceInput {
  public VirtualServiceSpec $spec;
  public TagList $tags;
  public ServiceName $virtual_service_name;
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
}

class PortProtocol {
}

class ListVirtualNodesLimit {
}

class HttpRetryPolicy {
  public HttpRetryPolicyEvents $http_retry_events;
  public MaxRetries $max_retries;
  public Duration $per_retry_timeout;
  public TcpRetryPolicyEvents $tcp_retry_events;
}

class UpdateRouteInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public RouteSpec $spec;
  public ResourceName $virtual_router_name;
}

class MeshStatus {
  public MeshStatusCode $status;
}

class FileAccessLog {
  public FilePath $path;
}

class VirtualServiceRef {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ServiceName $virtual_service_name;
  public Arn $arn;
}

class GrpcRouteAction {
  public WeightedTargets $weighted_targets;
}

class ListVirtualServicesLimit {
}

class AwsCloudMapInstanceAttribute {
  public AwsCloudMapInstanceAttributeKey $key;
  public AwsCloudMapInstanceAttributeValue $value;
}

class MeshStatusCode {
}

class ListTagsForResourceOutput {
  public string $next_token;
  public TagList $tags;
}

class CreateVirtualRouterOutput {
  public VirtualRouterData $virtual_router;
}

class VirtualServiceStatus {
  public VirtualServiceStatusCode $status;
}

class RouteStatusCode {
}

class ListTagsForResourceInput {
  public TagsLimit $limit;
  public string $next_token;
  public Arn $resource_arn;
}

class CreateMeshInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public MeshSpec $spec;
  public TagList $tags;
}

class HttpRouteMatch {
  public HttpRouteHeaders $headers;
  public HttpMethod $method;
  public string $prefix;
  public HttpScheme $scheme;
}

class RouteList {
}

class CertificateAuthorityArns {
}

class AwsCloudMapInstanceAttributeKey {
}

class VirtualRouterListeners {
}

class DeleteVirtualNodeInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_node_name;
}

class CreateVirtualNodeInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualNodeSpec $spec;
  public TagList $tags;
  public ResourceName $virtual_node_name;
}

class TcpRetryPolicyEvents {
}

class HealthCheckIntervalMillis {
}

class DeleteVirtualNodeOutput {
  public VirtualNodeData $virtual_node;
}

class GrpcRetryPolicyEvents {
}

class MethodName {
}

class HttpRouteHeader {
  public boolean $invert;
  public HeaderMatchMethod $match;
  public HeaderName $name;
}

class DescribeRouteOutput {
  public RouteData $route;
}

class ListVirtualNodesOutput {
  public string $next_token;
  public VirtualNodeList $virtual_nodes;
}

class TagKey {
}

class VirtualServiceList {
}

class UpdateMeshInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public MeshSpec $spec;
}

class RoutePriority {
}

class HttpRoute {
  public HttpRouteAction $action;
  public HttpRouteMatch $match;
  public HttpRetryPolicy $retry_policy;
}

class ListRoutesOutput {
  public string $next_token;
  public RouteList $routes;
}

class AwsCloudMapName {
}

class ListenerTlsCertificate {
  public ListenerTlsAcmCertificate $acm;
  public ListenerTlsFileCertificate $file;
}

class HttpRouteAction {
  public WeightedTargets $weighted_targets;
}

class UpdateVirtualRouterOutput {
  public VirtualRouterData $virtual_router;
}

class ResourceMetadata {
  public Timestamp $last_updated_at;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public string $uid;
  public Long $version;
  public Arn $arn;
  public Timestamp $created_at;
}

class ResourceInUseException {
  public string $message;
}

class HttpRetryPolicyEvents {
}

class RouteData {
  public ResourceName $route_name;
  public RouteSpec $spec;
  public RouteStatus $status;
  public ResourceName $virtual_router_name;
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
}

class ListMeshesOutput {
  public MeshList $meshes;
  public string $next_token;
}

class HeaderMatchMethod {
  public HeaderMatch $exact;
  public HeaderMatch $prefix;
  public MatchRange $range;
  public HeaderMatch $regex;
  public HeaderMatch $suffix;
}

class RouteStatus {
  public RouteStatusCode $status;
}

class HealthCheckThreshold {
}

class BackendDefaults {
  public ClientPolicy $client_policy;
}

class VirtualServiceStatusCode {
}

class AccountId {
}

class VirtualServiceBackend {
  public ClientPolicy $client_policy;
  public ServiceName $virtual_service_name;
}

class UntagResourceOutput {
}

class CreateMeshOutput {
  public MeshData $mesh;
}

class PortSet {
}

class InternalServerErrorException {
  public string $message;
}

class DescribeMeshOutput {
  public MeshData $mesh;
}

class UpdateRouteOutput {
  public RouteData $route;
}

class TcpRouteAction {
  public WeightedTargets $weighted_targets;
}

class DescribeVirtualNodeInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_node_name;
}

class VirtualNodeServiceProvider {
  public ResourceName $virtual_node_name;
}

class MeshSpec {
  public EgressFilter $egress_filter;
}

class ListVirtualRoutersOutput {
  public string $next_token;
  public VirtualRouterList $virtual_routers;
}

class ServiceUnavailableException {
  public string $message;
}

class EgressFilterType {
}

class AwsCloudMapServiceDiscovery {
  public AwsCloudMapInstanceAttributes $attributes;
  public AwsCloudMapName $namespace_name;
  public AwsCloudMapName $service_name;
}

class NotFoundException {
  public string $message;
}

class ClientPolicyTls {
  public PortSet $ports;
  public TlsValidationContext $validation;
  public boolean $enforce;
}

class Boolean {
}

class ConflictException {
  public string $message;
}

class ListVirtualServicesInput {
  public ListVirtualServicesLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;
}

class DescribeVirtualServiceOutput {
  public VirtualServiceData $virtual_service;
}

class HttpMethod {
}

class MeshList {
}

class FilePath {
}

class ListVirtualRoutersInput {
  public ListVirtualRoutersLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;
}

class ListenerTlsFileCertificate {
  public FilePath $certificate_chain;
  public FilePath $private_key;
}

class PortNumber {
}

class TagKeyList {
}

class ListMeshesInput {
  public string $next_token;
  public ListMeshesLimit $limit;
}

class VirtualRouterData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public VirtualRouterSpec $spec;
  public VirtualRouterStatus $status;
  public ResourceName $virtual_router_name;
}

class GrpcRetryPolicyEvent {
}

class ForbiddenException {
  public string $message;
}

class UpdateVirtualServiceOutput {
  public VirtualServiceData $virtual_service;
}

class MeshData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public MeshSpec $spec;
  public MeshStatus $status;
}

class DescribeMeshInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
}

class VirtualRouterListener {
  public PortMapping $port_mapping;
}

class VirtualRouterStatusCode {
}

class Logging {
  public AccessLog $access_log;
}

class CreateVirtualRouterInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualRouterSpec $spec;
  public TagList $tags;
  public ResourceName $virtual_router_name;
}

class DeleteVirtualServiceInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ServiceName $virtual_service_name;
}

class HealthCheckTimeoutMillis {
}

class TagResourceOutput {
}

class CreateRouteOutput {
  public RouteData $route;
}

class ListVirtualServicesOutput {
  public string $next_token;
  public VirtualServiceList $virtual_services;
}

class RouteRef {
  public ResourceName $route_name;
  public ResourceName $virtual_router_name;
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
}

class TooManyTagsException {
  public string $message;
}

class GrpcRouteMetadataList {
}

class ListMeshesLimit {
}

class RouteSpec {
  public GrpcRoute $grpc_route;
  public HttpRoute $http_2_route;
  public HttpRoute $http_route;
  public RoutePriority $priority;
  public TcpRoute $tcp_route;
}

class ListRoutesInput {
  public ListRoutesLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;
  public ResourceName $virtual_router_name;
}

class VirtualRouterList {
}

class DescribeVirtualRouterInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_router_name;
}

class ListVirtualNodesInput {
  public ListVirtualNodesLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;
}

class WeightedTarget {
  public ResourceName $virtual_node;
  public PercentInt $weight;
}

class VirtualServiceProvider {
  public VirtualNodeServiceProvider $virtual_node;
  public VirtualRouterServiceProvider $virtual_router;
}

class CreateVirtualServiceOutput {
  public VirtualServiceData $virtual_service;
}

class TagsLimit {
}

class DeleteMeshInput {
  public ResourceName $mesh_name;
}

class TagValue {
}

class VirtualNodeStatus {
  public VirtualNodeStatusCode $status;
}

class Listener {
  public HealthCheckPolicy $health_check;
  public PortMapping $port_mapping;
  public ListenerTls $tls;
}

class HeaderName {
}

class GrpcRouteMatch {
  public GrpcRouteMetadataList $metadata;
  public MethodName $method_name;
  public ServiceName $service_name;
}

class VirtualServiceData {
  public VirtualServiceStatus $status;
  public ServiceName $virtual_service_name;
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public VirtualServiceSpec $spec;
}

class GrpcRetryPolicy {
  public HttpRetryPolicyEvents $http_retry_events;
  public MaxRetries $max_retries;
  public Duration $per_retry_timeout;
  public TcpRetryPolicyEvents $tcp_retry_events;
  public GrpcRetryPolicyEvents $grpc_retry_events;
}

class Long {
}

class ListenerTlsMode {
}

class MatchRange {
  public Long $end;
  public Long $start;
}

class Arn {
}

class GrpcRoute {
  public GrpcRouteAction $action;
  public GrpcRouteMatch $match;
  public GrpcRetryPolicy $retry_policy;
}

class DurationUnit {
}

class EgressFilter {
  public EgressFilterType $type;
}

class ClientPolicy {
  public ClientPolicyTls $tls;
}

class VirtualNodeSpec {
  public ServiceDiscovery $service_discovery;
  public BackendDefaults $backend_defaults;
  public Backends $backends;
  public Listeners $listeners;
  public Logging $logging;
}

class TlsValidationContextTrust {
  public TlsValidationContextAcmTrust $acm;
  public TlsValidationContextFileTrust $file;
}

class PortMapping {
  public PortNumber $port;
  public PortProtocol $protocol;
}

class Hostname {
}

class TcpRoute {
  public TcpRouteAction $action;
}

class ListenerTlsAcmCertificate {
  public Arn $certificate_arn;
}

class ResourceName {
}

class Backend {
  public VirtualServiceBackend $virtual_service;
}

class TlsValidationContextAcmTrust {
  public CertificateAuthorityArns $certificate_authority_arns;
}

class DeleteMeshOutput {
  public MeshData $mesh;
}

class UpdateVirtualRouterInput {
  public ResourceName $virtual_router_name;
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualRouterSpec $spec;
}

class DeleteVirtualRouterInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_router_name;
}

class DeleteRouteOutput {
  public RouteData $route;
}

class VirtualRouterRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ResourceName $virtual_router_name;
}

class GrpcRouteMetadata {
  public GrpcRouteMetadataMatchMethod $match;
  public HeaderName $name;
  public boolean $invert;
}

class BadRequestException {
  public string $message;
}

class HealthCheckPolicy {
  public HealthCheckIntervalMillis $interval_millis;
  public string $path;
  public PortNumber $port;
  public PortProtocol $protocol;
  public HealthCheckTimeoutMillis $timeout_millis;
  public HealthCheckThreshold $unhealthy_threshold;
  public HealthCheckThreshold $healthy_threshold;
}

class TcpRetryPolicyEvent {
}

class AwsCloudMapInstanceAttributeValue {
}

class GrpcRouteMetadataMatchMethod {
  public MatchRange $range;
  public HeaderMatch $regex;
  public HeaderMatch $suffix;
  public HeaderMatch $exact;
  public HeaderMatch $prefix;
}

class AccessLog {
  public FileAccessLog $file;
}

class String {
}

class TagRef {
  public TagKey $key;
  public TagValue $value;
}

class DescribeVirtualRouterOutput {
  public VirtualRouterData $virtual_router;
}

class TagResourceInput {
  public Arn $resource_arn;
  public TagList $tags;
}

class Backends {
}

class UpdateVirtualServiceInput {
  public VirtualServiceSpec $spec;
  public ServiceName $virtual_service_name;
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
}

class AwsCloudMapInstanceAttributes {
}

class UpdateMeshOutput {
  public MeshData $mesh;
}

class TooManyRequestsException {
  public string $message;
}

class DeleteVirtualServiceOutput {
  public VirtualServiceData $virtual_service;
}

class TlsValidationContextFileTrust {
  public FilePath $certificate_chain;
}

class HttpRouteHeaders {
}

class VirtualNodeData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public VirtualNodeSpec $spec;
  public VirtualNodeStatus $status;
  public ResourceName $virtual_node_name;
}

class TagList {
}

class DeleteVirtualRouterOutput {
  public VirtualRouterData $virtual_router;
}

class ListenerTls {
  public ListenerTlsMode $mode;
  public ListenerTlsCertificate $certificate;
}

class LimitExceededException {
  public string $message;
}

class Duration {
  public DurationUnit $unit;
  public DurationValue $value;
}

class HttpScheme {
}

class UntagResourceInput {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class CreateVirtualNodeOutput {
  public VirtualNodeData $virtual_node;
}

class HttpRetryPolicyEvent {
}

class Listeners {
}

class ServiceName {
}

class PercentInt {
}

class WeightedTargets {
}

class ServiceDiscovery {
  public DnsServiceDiscovery $dns;
  public AwsCloudMapServiceDiscovery $aws_cloud_map;
}

class VirtualRouterServiceProvider {
  public ResourceName $virtual_router_name;
}

class Timestamp {
}

class HeaderMatch {
}

class MeshRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
}

class CreateRouteInput {
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public RouteSpec $spec;
  public TagList $tags;
  public ResourceName $virtual_router_name;
  public string $client_token;
  public ResourceName $mesh_name;
}

class UpdateVirtualNodeOutput {
  public VirtualNodeData $virtual_node;
}

class TlsValidationContext {
  public TlsValidationContextTrust $trust;
}

class VirtualRouterStatus {
  public VirtualRouterStatusCode $status;
}

class ListRoutesLimit {
}

class DeleteRouteInput {
  public ResourceName $route_name;
  public ResourceName $virtual_router_name;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
}

class VirtualRouterSpec {
  public VirtualRouterListeners $listeners;
}

class MaxRetries {
}

class UpdateVirtualNodeInput {
  public VirtualNodeSpec $spec;
  public ResourceName $virtual_node_name;
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
}

class VirtualNodeStatusCode {
}

class DescribeVirtualServiceInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ServiceName $virtual_service_name;
}

class ListVirtualRoutersLimit {
}

class DescribeVirtualNodeOutput {
  public VirtualNodeData $virtual_node;
}

class DurationValue {
}

class DescribeRouteInput {
  public ResourceName $route_name;
  public ResourceName $virtual_router_name;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
}

class VirtualNodeRef {
  public ResourceName $virtual_node_name;
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
}

class VirtualServiceSpec {
  public VirtualServiceProvider $provider;
}

class VirtualNodeList {
}

