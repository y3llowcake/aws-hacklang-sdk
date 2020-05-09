<?hh // strict
namespace slack\aws\api.tunneling.iot;

interface IoTSecureTunneling {
  public function CloseTunnel(CloseTunnelRequest) Awaitable<Errors\Result<CloseTunnelResponse>>;
  public function DescribeTunnel(DescribeTunnelRequest) Awaitable<Errors\Result<DescribeTunnelResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTunnels(ListTunnelsRequest) Awaitable<Errors\Result<ListTunnelsResponse>>;
  public function OpenTunnel(OpenTunnelRequest) Awaitable<Errors\Result<OpenTunnelResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
}

class AmazonResourceName {
}

class ClientAccessToken {
}

class CloseTunnelRequest {
  public DeleteFlag $delete;
  public TunnelId $tunnel_id;
}

class CloseTunnelResponse {
}

class ConnectionState {
  public DateType $last_updated_at;
  public ConnectionStatus $status;
}

class ConnectionStatus {
}

class DateType {
}

class DeleteFlag {
}

class DescribeTunnelRequest {
  public TunnelId $tunnel_id;
}

class DescribeTunnelResponse {
  public Tunnel $tunnel;
}

class Description {
}

class DestinationConfig {
  public ServiceList $services;
  public ThingName $thing_name;
}

class ErrorMessage {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class ListTunnelsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ThingName $thing_name;
}

class ListTunnelsResponse {
  public NextToken $next_token;
  public TunnelSummaryList $tunnel_summaries;
}

class MaxResults {
}

class NextToken {
}

class OpenTunnelRequest {
  public Description $description;
  public DestinationConfig $destination_config;
  public TagList $tags;
  public TimeoutConfig $timeout_config;
}

class OpenTunnelResponse {
  public ClientAccessToken $destination_access_token;
  public ClientAccessToken $source_access_token;
  public TunnelArn $tunnel_arn;
  public TunnelId $tunnel_id;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class Service {
}

class ServiceList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class ThingName {
}

class TimeoutConfig {
  public TimeoutInMin $max_lifetime_timeout_minutes;
}

class TimeoutInMin {
}

class Tunnel {
  public DateType $created_at;
  public Description $description;
  public DestinationConfig $destination_config;
  public ConnectionState $destination_connection_state;
  public DateType $last_updated_at;
  public ConnectionState $source_connection_state;
  public TunnelStatus $status;
  public TagList $tags;
  public TimeoutConfig $timeout_config;
  public TunnelArn $tunnel_arn;
  public TunnelId $tunnel_id;
}

class TunnelArn {
}

class TunnelId {
}

class TunnelStatus {
}

class TunnelSummary {
  public DateType $created_at;
  public Description $description;
  public DateType $last_updated_at;
  public TunnelStatus $status;
  public TunnelArn $tunnel_arn;
  public TunnelId $tunnel_id;
}

class TunnelSummaryList {
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

