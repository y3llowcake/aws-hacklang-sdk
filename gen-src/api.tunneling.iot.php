<?hh // strict
namespace slack\aws\api.tunneling.iot;

interface IoTSecureTunneling {
  public function CloseTunnel(CloseTunnelRequest): Awaitable<Errors\Result<CloseTunnelResponse>>;
  public function DescribeTunnel(DescribeTunnelRequest): Awaitable<Errors\Result<DescribeTunnelResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTunnels(ListTunnelsRequest): Awaitable<Errors\Result<ListTunnelsResponse>>;
  public function OpenTunnel(OpenTunnelRequest): Awaitable<Errors\Result<OpenTunnelResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
}

type AmazonResourceName = string;

type ClientAccessToken = string;

class CloseTunnelRequest {
  public DeleteFlag $delete;
  public TunnelId $tunnel_id;

  public function __construct(shape(
  ?'delete' => DeleteFlag,
  ?'tunnel_id' => TunnelId,
  ) $s = shape()) {
    $this->delete = $delete ?? false;
    $this->tunnel_id = $tunnel_id ?? "";
  }
}

class CloseTunnelResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ConnectionState {
  public DateType $last_updated_at;
  public ConnectionStatus $status;

  public function __construct(shape(
  ?'last_updated_at' => DateType,
  ?'status' => ConnectionStatus,
  ) $s = shape()) {
    $this->last_updated_at = $last_updated_at ?? 0;
    $this->status = $status ?? "";
  }
}

type ConnectionStatus = string;

type DateType = int;

type DeleteFlag = bool;

class DescribeTunnelRequest {
  public TunnelId $tunnel_id;

  public function __construct(shape(
  ?'tunnel_id' => TunnelId,
  ) $s = shape()) {
    $this->tunnel_id = $tunnel_id ?? "";
  }
}

class DescribeTunnelResponse {
  public Tunnel $tunnel;

  public function __construct(shape(
  ?'tunnel' => Tunnel,
  ) $s = shape()) {
    $this->tunnel = $tunnel ?? null;
  }
}

type Description = string;

class DestinationConfig {
  public ServiceList $services;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'services' => ServiceList,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->services = $services ?? [];
    $this->thing_name = $thing_name ?? "";
  }
}

type ErrorMessage = string;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListTunnelsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->thing_name = $thing_name ?? "";
  }
}

class ListTunnelsResponse {
  public NextToken $next_token;
  public TunnelSummaryList $tunnel_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tunnel_summaries' => TunnelSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tunnel_summaries = $tunnel_summaries ?? [];
  }
}

type MaxResults = int;

type NextToken = string;

class OpenTunnelRequest {
  public Description $description;
  public DestinationConfig $destination_config;
  public TagList $tags;
  public TimeoutConfig $timeout_config;

  public function __construct(shape(
  ?'description' => Description,
  ?'destination_config' => DestinationConfig,
  ?'tags' => TagList,
  ?'timeout_config' => TimeoutConfig,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->destination_config = $destination_config ?? null;
    $this->tags = $tags ?? [];
    $this->timeout_config = $timeout_config ?? null;
  }
}

class OpenTunnelResponse {
  public ClientAccessToken $destination_access_token;
  public ClientAccessToken $source_access_token;
  public TunnelArn $tunnel_arn;
  public TunnelId $tunnel_id;

  public function __construct(shape(
  ?'destination_access_token' => ClientAccessToken,
  ?'source_access_token' => ClientAccessToken,
  ?'tunnel_arn' => TunnelArn,
  ?'tunnel_id' => TunnelId,
  ) $s = shape()) {
    $this->destination_access_token = $destination_access_token ?? "";
    $this->source_access_token = $source_access_token ?? "";
    $this->tunnel_arn = $tunnel_arn ?? "";
    $this->tunnel_id = $tunnel_id ?? "";
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Service = string;

type ServiceList = vec<Service>;

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

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type ThingName = string;

class TimeoutConfig {
  public TimeoutInMin $max_lifetime_timeout_minutes;

  public function __construct(shape(
  ?'max_lifetime_timeout_minutes' => TimeoutInMin,
  ) $s = shape()) {
    $this->max_lifetime_timeout_minutes = $max_lifetime_timeout_minutes ?? 0;
  }
}

type TimeoutInMin = int;

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

  public function __construct(shape(
  ?'created_at' => DateType,
  ?'description' => Description,
  ?'destination_config' => DestinationConfig,
  ?'destination_connection_state' => ConnectionState,
  ?'last_updated_at' => DateType,
  ?'source_connection_state' => ConnectionState,
  ?'status' => TunnelStatus,
  ?'tags' => TagList,
  ?'timeout_config' => TimeoutConfig,
  ?'tunnel_arn' => TunnelArn,
  ?'tunnel_id' => TunnelId,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->description = $description ?? "";
    $this->destination_config = $destination_config ?? null;
    $this->destination_connection_state = $destination_connection_state ?? null;
    $this->last_updated_at = $last_updated_at ?? 0;
    $this->source_connection_state = $source_connection_state ?? null;
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
    $this->timeout_config = $timeout_config ?? null;
    $this->tunnel_arn = $tunnel_arn ?? "";
    $this->tunnel_id = $tunnel_id ?? "";
  }
}

type TunnelArn = string;

type TunnelId = string;

type TunnelStatus = string;

class TunnelSummary {
  public DateType $created_at;
  public Description $description;
  public DateType $last_updated_at;
  public TunnelStatus $status;
  public TunnelArn $tunnel_arn;
  public TunnelId $tunnel_id;

  public function __construct(shape(
  ?'created_at' => DateType,
  ?'description' => Description,
  ?'last_updated_at' => DateType,
  ?'status' => TunnelStatus,
  ?'tunnel_arn' => TunnelArn,
  ?'tunnel_id' => TunnelId,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->description = $description ?? "";
    $this->last_updated_at = $last_updated_at ?? 0;
    $this->status = $status ?? "";
    $this->tunnel_arn = $tunnel_arn ?? "";
    $this->tunnel_id = $tunnel_id ?? "";
  }
}

type TunnelSummaryList = vec<TunnelSummary>;

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

