<?hh // strict
namespace slack\aws\api.tunneling.iot;

interface IoTSecureTunneling {
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function CloseTunnel(CloseTunnelRequest) Awaitable<Errors\Result<CloseTunnelResponse>>;
  public function DescribeTunnel(DescribeTunnelRequest) Awaitable<Errors\Result<DescribeTunnelResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTunnels(ListTunnelsRequest) Awaitable<Errors\Result<ListTunnelsResponse>>;
  public function OpenTunnel(OpenTunnelRequest) Awaitable<Errors\Result<OpenTunnelResponse>>;
}

class DeleteFlag {
}

class DescribeTunnelRequest {
  public TunnelId $tunnel_id;
}

class Description {
}

class TimeoutInMin {
}

class AmazonResourceName {
}

class DescribeTunnelResponse {
  public Tunnel $tunnel;
}

class ListTunnelsResponse {
  public TunnelSummaryList $tunnel_summaries;
  public NextToken $next_token;
}

class OpenTunnelRequest {
  public Description $description;
  public TagList $tags;
  public DestinationConfig $destination_config;
  public TimeoutConfig $timeout_config;
}

class Service {
}

class ServiceList {
}

class TagKey {
}

class MaxResults {
}

class TagValue {
}

class CloseTunnelResponse {
}

class ListTunnelsRequest {
  public ThingName $thing_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class TagList {
}

class TimeoutConfig {
  public TimeoutInMin $max_lifetime_timeout_minutes;
}

class CloseTunnelRequest {
  public TunnelId $tunnel_id;
  public DeleteFlag $delete;
}

class DateType {
}

class ErrorMessage {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class ThingName {
}

class TunnelArn {
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class Tunnel {
  public TunnelStatus $status;
  public ConnectionState $destination_connection_state;
  public TagList $tags;
  public DateType $last_updated_at;
  public DestinationConfig $destination_config;
  public TimeoutConfig $timeout_config;
  public DateType $created_at;
  public TunnelId $tunnel_id;
  public TunnelArn $tunnel_arn;
  public ConnectionState $source_connection_state;
  public Description $description;
}

class TunnelStatus {
}

class TunnelSummary {
  public TunnelId $tunnel_id;
  public TunnelArn $tunnel_arn;
  public TunnelStatus $status;
  public Description $description;
  public DateType $created_at;
  public DateType $last_updated_at;
}

class TunnelId {
}

class ClientAccessToken {
}

class ConnectionState {
  public ConnectionStatus $status;
  public DateType $last_updated_at;
}

class ConnectionStatus {
}

class DestinationConfig {
  public ServiceList $services;
  public ThingName $thing_name;
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TunnelSummaryList {
}

class UntagResourceResponse {
}

class NextToken {
}

class OpenTunnelResponse {
  public TunnelId $tunnel_id;
  public TunnelArn $tunnel_arn;
  public ClientAccessToken $source_access_token;
  public ClientAccessToken $destination_access_token;
}

class TagKeyList {
}

