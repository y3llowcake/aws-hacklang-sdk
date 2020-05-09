<?hh // strict
namespace slack\aws\appmesh;

interface App Mesh {
  public function CreateMesh(CreateMeshInput): Awaitable<Errors\Result<CreateMeshOutput>>;
  public function CreateRoute(CreateRouteInput): Awaitable<Errors\Result<CreateRouteOutput>>;
  public function CreateVirtualNode(CreateVirtualNodeInput): Awaitable<Errors\Result<CreateVirtualNodeOutput>>;
  public function CreateVirtualRouter(CreateVirtualRouterInput): Awaitable<Errors\Result<CreateVirtualRouterOutput>>;
  public function CreateVirtualService(CreateVirtualServiceInput): Awaitable<Errors\Result<CreateVirtualServiceOutput>>;
  public function DeleteMesh(DeleteMeshInput): Awaitable<Errors\Result<DeleteMeshOutput>>;
  public function DeleteRoute(DeleteRouteInput): Awaitable<Errors\Result<DeleteRouteOutput>>;
  public function DeleteVirtualNode(DeleteVirtualNodeInput): Awaitable<Errors\Result<DeleteVirtualNodeOutput>>;
  public function DeleteVirtualRouter(DeleteVirtualRouterInput): Awaitable<Errors\Result<DeleteVirtualRouterOutput>>;
  public function DeleteVirtualService(DeleteVirtualServiceInput): Awaitable<Errors\Result<DeleteVirtualServiceOutput>>;
  public function DescribeMesh(DescribeMeshInput): Awaitable<Errors\Result<DescribeMeshOutput>>;
  public function DescribeRoute(DescribeRouteInput): Awaitable<Errors\Result<DescribeRouteOutput>>;
  public function DescribeVirtualNode(DescribeVirtualNodeInput): Awaitable<Errors\Result<DescribeVirtualNodeOutput>>;
  public function DescribeVirtualRouter(DescribeVirtualRouterInput): Awaitable<Errors\Result<DescribeVirtualRouterOutput>>;
  public function DescribeVirtualService(DescribeVirtualServiceInput): Awaitable<Errors\Result<DescribeVirtualServiceOutput>>;
  public function ListMeshes(ListMeshesInput): Awaitable<Errors\Result<ListMeshesOutput>>;
  public function ListRoutes(ListRoutesInput): Awaitable<Errors\Result<ListRoutesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListVirtualNodes(ListVirtualNodesInput): Awaitable<Errors\Result<ListVirtualNodesOutput>>;
  public function ListVirtualRouters(ListVirtualRoutersInput): Awaitable<Errors\Result<ListVirtualRoutersOutput>>;
  public function ListVirtualServices(ListVirtualServicesInput): Awaitable<Errors\Result<ListVirtualServicesOutput>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UpdateMesh(UpdateMeshInput): Awaitable<Errors\Result<UpdateMeshOutput>>;
  public function UpdateRoute(UpdateRouteInput): Awaitable<Errors\Result<UpdateRouteOutput>>;
  public function UpdateVirtualNode(UpdateVirtualNodeInput): Awaitable<Errors\Result<UpdateVirtualNodeOutput>>;
  public function UpdateVirtualRouter(UpdateVirtualRouterInput): Awaitable<Errors\Result<UpdateVirtualRouterOutput>>;
  public function UpdateVirtualService(UpdateVirtualServiceInput): Awaitable<Errors\Result<UpdateVirtualServiceOutput>>;
}

class AccessLog {
  public FileAccessLog $file;
}

class AccountId {
}

class Arn {
}

class AwsCloudMapInstanceAttribute {
  public AwsCloudMapInstanceAttributeKey $key;
  public AwsCloudMapInstanceAttributeValue $value;
}

class AwsCloudMapInstanceAttributeKey {
}

class AwsCloudMapInstanceAttributeValue {
}

class AwsCloudMapInstanceAttributes {
}

class AwsCloudMapName {
}

class AwsCloudMapServiceDiscovery {
  public AwsCloudMapInstanceAttributes $attributes;
  public AwsCloudMapName $namespace_name;
  public AwsCloudMapName $service_name;
}

class Backend {
  public VirtualServiceBackend $virtual_service;
}

class BackendDefaults {
  public ClientPolicy $client_policy;
}

class Backends {
}

class BadRequestException {
  public string $message;
}

class Boolean {
}

class CertificateAuthorityArns {
}

class ClientPolicy {
  public ClientPolicyTls $tls;
}

class ClientPolicyTls {
  public boolean $enforce;
  public PortSet $ports;
  public TlsValidationContext $validation;
}

class ConflictException {
  public string $message;
}

class CreateMeshInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public MeshSpec $spec;
  public TagList $tags;
}

class CreateMeshOutput {
  public MeshData $mesh;
}

class CreateRouteInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public RouteSpec $spec;
  public TagList $tags;
  public ResourceName $virtual_router_name;
}

class CreateRouteOutput {
  public RouteData $route;
}

class CreateVirtualNodeInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualNodeSpec $spec;
  public TagList $tags;
  public ResourceName $virtual_node_name;
}

class CreateVirtualNodeOutput {
  public VirtualNodeData $virtual_node;
}

class CreateVirtualRouterInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualRouterSpec $spec;
  public TagList $tags;
  public ResourceName $virtual_router_name;
}

class CreateVirtualRouterOutput {
  public VirtualRouterData $virtual_router;
}

class CreateVirtualServiceInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualServiceSpec $spec;
  public TagList $tags;
  public ServiceName $virtual_service_name;
}

class CreateVirtualServiceOutput {
  public VirtualServiceData $virtual_service;
}

class DeleteMeshInput {
  public ResourceName $mesh_name;
}

class DeleteMeshOutput {
  public MeshData $mesh;
}

class DeleteRouteInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public ResourceName $virtual_router_name;
}

class DeleteRouteOutput {
  public RouteData $route;
}

class DeleteVirtualNodeInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_node_name;
}

class DeleteVirtualNodeOutput {
  public VirtualNodeData $virtual_node;
}

class DeleteVirtualRouterInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_router_name;
}

class DeleteVirtualRouterOutput {
  public VirtualRouterData $virtual_router;
}

class DeleteVirtualServiceInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ServiceName $virtual_service_name;
}

class DeleteVirtualServiceOutput {
  public VirtualServiceData $virtual_service;
}

class DescribeMeshInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
}

class DescribeMeshOutput {
  public MeshData $mesh;
}

class DescribeRouteInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public ResourceName $virtual_router_name;
}

class DescribeRouteOutput {
  public RouteData $route;
}

class DescribeVirtualNodeInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_node_name;
}

class DescribeVirtualNodeOutput {
  public VirtualNodeData $virtual_node;
}

class DescribeVirtualRouterInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_router_name;
}

class DescribeVirtualRouterOutput {
  public VirtualRouterData $virtual_router;
}

class DescribeVirtualServiceInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ServiceName $virtual_service_name;
}

class DescribeVirtualServiceOutput {
  public VirtualServiceData $virtual_service;
}

class DnsServiceDiscovery {
  public Hostname $hostname;
}

class Duration {
  public DurationUnit $unit;
  public DurationValue $value;
}

class DurationUnit {
}

class DurationValue {
}

class EgressFilter {
  public EgressFilterType $type;
}

class EgressFilterType {
}

class FileAccessLog {
  public FilePath $path;
}

class FilePath {
}

class ForbiddenException {
  public string $message;
}

class GrpcRetryPolicy {
  public GrpcRetryPolicyEvents $grpc_retry_events;
  public HttpRetryPolicyEvents $http_retry_events;
  public MaxRetries $max_retries;
  public Duration $per_retry_timeout;
  public TcpRetryPolicyEvents $tcp_retry_events;
}

class GrpcRetryPolicyEvent {
}

class GrpcRetryPolicyEvents {
}

class GrpcRoute {
  public GrpcRouteAction $action;
  public GrpcRouteMatch $match;
  public GrpcRetryPolicy $retry_policy;
}

class GrpcRouteAction {
  public WeightedTargets $weighted_targets;
}

class GrpcRouteMatch {
  public GrpcRouteMetadataList $metadata;
  public MethodName $method_name;
  public ServiceName $service_name;
}

class GrpcRouteMetadata {
  public boolean $invert;
  public GrpcRouteMetadataMatchMethod $match;
  public HeaderName $name;
}

class GrpcRouteMetadataList {
}

class GrpcRouteMetadataMatchMethod {
  public HeaderMatch $exact;
  public HeaderMatch $prefix;
  public MatchRange $range;
  public HeaderMatch $regex;
  public HeaderMatch $suffix;
}

class HeaderMatch {
}

class HeaderMatchMethod {
  public HeaderMatch $exact;
  public HeaderMatch $prefix;
  public MatchRange $range;
  public HeaderMatch $regex;
  public HeaderMatch $suffix;
}

class HeaderName {
}

class HealthCheckIntervalMillis {
}

class HealthCheckPolicy {
  public HealthCheckThreshold $healthy_threshold;
  public HealthCheckIntervalMillis $interval_millis;
  public string $path;
  public PortNumber $port;
  public PortProtocol $protocol;
  public HealthCheckTimeoutMillis $timeout_millis;
  public HealthCheckThreshold $unhealthy_threshold;
}

class HealthCheckThreshold {
}

class HealthCheckTimeoutMillis {
}

class Hostname {
}

class HttpMethod {
}

class HttpRetryPolicy {
  public HttpRetryPolicyEvents $http_retry_events;
  public MaxRetries $max_retries;
  public Duration $per_retry_timeout;
  public TcpRetryPolicyEvents $tcp_retry_events;
}

class HttpRetryPolicyEvent {
}

class HttpRetryPolicyEvents {
}

class HttpRoute {
  public HttpRouteAction $action;
  public HttpRouteMatch $match;
  public HttpRetryPolicy $retry_policy;
}

class HttpRouteAction {
  public WeightedTargets $weighted_targets;
}

class HttpRouteHeader {
  public boolean $invert;
  public HeaderMatchMethod $match;
  public HeaderName $name;
}

class HttpRouteHeaders {
}

class HttpRouteMatch {
  public HttpRouteHeaders $headers;
  public HttpMethod $method;
  public string $prefix;
  public HttpScheme $scheme;
}

class HttpScheme {
}

class InternalServerErrorException {
  public string $message;
}

class LimitExceededException {
  public string $message;
}

class ListMeshesInput {
  public ListMeshesLimit $limit;
  public string $next_token;
}

class ListMeshesLimit {
}

class ListMeshesOutput {
  public MeshList $meshes;
  public string $next_token;
}

class ListRoutesInput {
  public ListRoutesLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;
  public ResourceName $virtual_router_name;
}

class ListRoutesLimit {
}

class ListRoutesOutput {
  public string $next_token;
  public RouteList $routes;
}

class ListTagsForResourceInput {
  public TagsLimit $limit;
  public string $next_token;
  public Arn $resource_arn;
}

class ListTagsForResourceOutput {
  public string $next_token;
  public TagList $tags;
}

class ListVirtualNodesInput {
  public ListVirtualNodesLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;
}

class ListVirtualNodesLimit {
}

class ListVirtualNodesOutput {
  public string $next_token;
  public VirtualNodeList $virtual_nodes;
}

class ListVirtualRoutersInput {
  public ListVirtualRoutersLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;
}

class ListVirtualRoutersLimit {
}

class ListVirtualRoutersOutput {
  public string $next_token;
  public VirtualRouterList $virtual_routers;
}

class ListVirtualServicesInput {
  public ListVirtualServicesLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;
}

class ListVirtualServicesLimit {
}

class ListVirtualServicesOutput {
  public string $next_token;
  public VirtualServiceList $virtual_services;
}

class Listener {
  public HealthCheckPolicy $health_check;
  public PortMapping $port_mapping;
  public ListenerTls $tls;
}

class ListenerTls {
  public ListenerTlsCertificate $certificate;
  public ListenerTlsMode $mode;
}

class ListenerTlsAcmCertificate {
  public Arn $certificate_arn;
}

class ListenerTlsCertificate {
  public ListenerTlsAcmCertificate $acm;
  public ListenerTlsFileCertificate $file;
}

class ListenerTlsFileCertificate {
  public FilePath $certificate_chain;
  public FilePath $private_key;
}

class ListenerTlsMode {
}

class Listeners {
}

class Logging {
  public AccessLog $access_log;
}

class Long {
}

class MatchRange {
  public Long $end;
  public Long $start;
}

class MaxRetries {
}

class MeshData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public MeshSpec $spec;
  public MeshStatus $status;
}

class MeshList {
}

class MeshRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
}

class MeshSpec {
  public EgressFilter $egress_filter;
}

class MeshStatus {
  public MeshStatusCode $status;
}

class MeshStatusCode {
}

class MethodName {
}

class NotFoundException {
  public string $message;
}

class PercentInt {
}

class PortMapping {
  public PortNumber $port;
  public PortProtocol $protocol;
}

class PortNumber {
}

class PortProtocol {
}

class PortSet {
}

class ResourceInUseException {
  public string $message;
}

class ResourceMetadata {
  public Arn $arn;
  public Timestamp $created_at;
  public Timestamp $last_updated_at;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public string $uid;
  public Long $version;
}

class ResourceName {
}

class RouteData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public ResourceName $route_name;
  public RouteSpec $spec;
  public RouteStatus $status;
  public ResourceName $virtual_router_name;
}

class RouteList {
}

class RoutePriority {
}

class RouteRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ResourceName $route_name;
  public ResourceName $virtual_router_name;
}

class RouteSpec {
  public GrpcRoute $grpc_route;
  public HttpRoute $http_2_route;
  public HttpRoute $http_route;
  public RoutePriority $priority;
  public TcpRoute $tcp_route;
}

class RouteStatus {
  public RouteStatusCode $status;
}

class RouteStatusCode {
}

class ServiceDiscovery {
  public AwsCloudMapServiceDiscovery $aws_cloud_map;
  public DnsServiceDiscovery $dns;
}

class ServiceName {
}

class ServiceUnavailableException {
  public string $message;
}

class String {
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagRef {
  public TagKey $key;
  public TagValue $value;
}

class TagResourceInput {
  public Arn $resource_arn;
  public TagList $tags;
}

class TagResourceOutput {
}

class TagValue {
}

class TagsLimit {
}

class TcpRetryPolicyEvent {
}

class TcpRetryPolicyEvents {
}

class TcpRoute {
  public TcpRouteAction $action;
}

class TcpRouteAction {
  public WeightedTargets $weighted_targets;
}

class Timestamp {
}

class TlsValidationContext {
  public TlsValidationContextTrust $trust;
}

class TlsValidationContextAcmTrust {
  public CertificateAuthorityArns $certificate_authority_arns;
}

class TlsValidationContextFileTrust {
  public FilePath $certificate_chain;
}

class TlsValidationContextTrust {
  public TlsValidationContextAcmTrust $acm;
  public TlsValidationContextFileTrust $file;
}

class TooManyRequestsException {
  public string $message;
}

class TooManyTagsException {
  public string $message;
}

class UntagResourceInput {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceOutput {
}

class UpdateMeshInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public MeshSpec $spec;
}

class UpdateMeshOutput {
  public MeshData $mesh;
}

class UpdateRouteInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public RouteSpec $spec;
  public ResourceName $virtual_router_name;
}

class UpdateRouteOutput {
  public RouteData $route;
}

class UpdateVirtualNodeInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualNodeSpec $spec;
  public ResourceName $virtual_node_name;
}

class UpdateVirtualNodeOutput {
  public VirtualNodeData $virtual_node;
}

class UpdateVirtualRouterInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualRouterSpec $spec;
  public ResourceName $virtual_router_name;
}

class UpdateVirtualRouterOutput {
  public VirtualRouterData $virtual_router;
}

class UpdateVirtualServiceInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualServiceSpec $spec;
  public ServiceName $virtual_service_name;
}

class UpdateVirtualServiceOutput {
  public VirtualServiceData $virtual_service;
}

class VirtualNodeData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public VirtualNodeSpec $spec;
  public VirtualNodeStatus $status;
  public ResourceName $virtual_node_name;
}

class VirtualNodeList {
}

class VirtualNodeRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ResourceName $virtual_node_name;
}

class VirtualNodeServiceProvider {
  public ResourceName $virtual_node_name;
}

class VirtualNodeSpec {
  public BackendDefaults $backend_defaults;
  public Backends $backends;
  public Listeners $listeners;
  public Logging $logging;
  public ServiceDiscovery $service_discovery;
}

class VirtualNodeStatus {
  public VirtualNodeStatusCode $status;
}

class VirtualNodeStatusCode {
}

class VirtualRouterData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public VirtualRouterSpec $spec;
  public VirtualRouterStatus $status;
  public ResourceName $virtual_router_name;
}

class VirtualRouterList {
}

class VirtualRouterListener {
  public PortMapping $port_mapping;
}

class VirtualRouterListeners {
}

class VirtualRouterRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ResourceName $virtual_router_name;
}

class VirtualRouterServiceProvider {
  public ResourceName $virtual_router_name;
}

class VirtualRouterSpec {
  public VirtualRouterListeners $listeners;
}

class VirtualRouterStatus {
  public VirtualRouterStatusCode $status;
}

class VirtualRouterStatusCode {
}

class VirtualServiceBackend {
  public ClientPolicy $client_policy;
  public ServiceName $virtual_service_name;
}

class VirtualServiceData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public VirtualServiceSpec $spec;
  public VirtualServiceStatus $status;
  public ServiceName $virtual_service_name;
}

class VirtualServiceList {
}

class VirtualServiceProvider {
  public VirtualNodeServiceProvider $virtual_node;
  public VirtualRouterServiceProvider $virtual_router;
}

class VirtualServiceRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ServiceName $virtual_service_name;
}

class VirtualServiceSpec {
  public VirtualServiceProvider $provider;
}

class VirtualServiceStatus {
  public VirtualServiceStatusCode $status;
}

class VirtualServiceStatusCode {
}

class WeightedTarget {
  public ResourceName $virtual_node;
  public PercentInt $weight;
}

class WeightedTargets {
}

