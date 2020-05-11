<?hh // strict
namespace slack\aws\mediastore;

interface MediaStore {
  public function CreateContainer(CreateContainerInput): Awaitable<Errors\Result<CreateContainerOutput>>;
  public function DeleteContainer(DeleteContainerInput): Awaitable<Errors\Result<DeleteContainerOutput>>;
  public function DeleteContainerPolicy(DeleteContainerPolicyInput): Awaitable<Errors\Result<DeleteContainerPolicyOutput>>;
  public function DeleteCorsPolicy(DeleteCorsPolicyInput): Awaitable<Errors\Result<DeleteCorsPolicyOutput>>;
  public function DeleteLifecyclePolicy(DeleteLifecyclePolicyInput): Awaitable<Errors\Result<DeleteLifecyclePolicyOutput>>;
  public function DeleteMetricPolicy(DeleteMetricPolicyInput): Awaitable<Errors\Result<DeleteMetricPolicyOutput>>;
  public function DescribeContainer(DescribeContainerInput): Awaitable<Errors\Result<DescribeContainerOutput>>;
  public function GetContainerPolicy(GetContainerPolicyInput): Awaitable<Errors\Result<GetContainerPolicyOutput>>;
  public function GetCorsPolicy(GetCorsPolicyInput): Awaitable<Errors\Result<GetCorsPolicyOutput>>;
  public function GetLifecyclePolicy(GetLifecyclePolicyInput): Awaitable<Errors\Result<GetLifecyclePolicyOutput>>;
  public function GetMetricPolicy(GetMetricPolicyInput): Awaitable<Errors\Result<GetMetricPolicyOutput>>;
  public function ListContainers(ListContainersInput): Awaitable<Errors\Result<ListContainersOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function PutContainerPolicy(PutContainerPolicyInput): Awaitable<Errors\Result<PutContainerPolicyOutput>>;
  public function PutCorsPolicy(PutCorsPolicyInput): Awaitable<Errors\Result<PutCorsPolicyOutput>>;
  public function PutLifecyclePolicy(PutLifecyclePolicyInput): Awaitable<Errors\Result<PutLifecyclePolicyOutput>>;
  public function PutMetricPolicy(PutMetricPolicyInput): Awaitable<Errors\Result<PutMetricPolicyOutput>>;
  public function StartAccessLogging(StartAccessLoggingInput): Awaitable<Errors\Result<StartAccessLoggingOutput>>;
  public function StopAccessLogging(StopAccessLoggingInput): Awaitable<Errors\Result<StopAccessLoggingOutput>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceOutput>>;
}

type AllowedHeaders = vec<Header>;

type AllowedMethods = vec<MethodName>;

type AllowedOrigins = vec<Origin>;

class Container {
  public ContainerARN $arn;
  public ContainerAccessLoggingEnabled $access_logging_enabled;
  public TimeStamp $creation_time;
  public Endpoint $endpoint;
  public ContainerName $name;
  public ContainerStatus $status;

  public function __construct(shape(
  ?'arn' => ContainerARN,
  ?'access_logging_enabled' => ContainerAccessLoggingEnabled,
  ?'creation_time' => TimeStamp,
  ?'endpoint' => Endpoint,
  ?'name' => ContainerName,
  ?'status' => ContainerStatus,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->access_logging_enabled = $access_logging_enabled ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->endpoint = $endpoint ?? "";
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type ContainerARN = string;

type ContainerAccessLoggingEnabled = bool;

class ContainerInUseException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ContainerLevelMetrics = string;

type ContainerList = vec<Container>;

type ContainerListLimit = int;

type ContainerName = string;

class ContainerNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ContainerPolicy = string;

type ContainerStatus = string;

type CorsPolicy = vec<CorsRule>;

class CorsPolicyNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CorsRule {
  public AllowedHeaders $allowed_headers;
  public AllowedMethods $allowed_methods;
  public AllowedOrigins $allowed_origins;
  public ExposeHeaders $expose_headers;
  public MaxAgeSeconds $max_age_seconds;

  public function __construct(shape(
  ?'allowed_headers' => AllowedHeaders,
  ?'allowed_methods' => AllowedMethods,
  ?'allowed_origins' => AllowedOrigins,
  ?'expose_headers' => ExposeHeaders,
  ?'max_age_seconds' => MaxAgeSeconds,
  ) $s = shape()) {
    $this->allowed_headers = $allowed_headers ?? [];
    $this->allowed_methods = $allowed_methods ?? [];
    $this->allowed_origins = $allowed_origins ?? [];
    $this->expose_headers = $expose_headers ?? [];
    $this->max_age_seconds = $max_age_seconds ?? 0;
  }
}

class CreateContainerInput {
  public ContainerName $container_name;
  public TagList $tags;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateContainerOutput {
  public Container $container;

  public function __construct(shape(
  ?'container' => Container,
  ) $s = shape()) {
    $this->container = $container ?? null;
  }
}

class DeleteContainerInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class DeleteContainerOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteContainerPolicyInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class DeleteContainerPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteCorsPolicyInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class DeleteCorsPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteLifecyclePolicyInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class DeleteLifecyclePolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteMetricPolicyInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class DeleteMetricPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeContainerInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class DescribeContainerOutput {
  public Container $container;

  public function __construct(shape(
  ?'container' => Container,
  ) $s = shape()) {
    $this->container = $container ?? null;
  }
}

type Endpoint = string;

type ErrorMessage = string;

type ExposeHeaders = vec<Header>;

class GetContainerPolicyInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class GetContainerPolicyOutput {
  public ContainerPolicy $policy;

  public function __construct(shape(
  ?'policy' => ContainerPolicy,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
  }
}

class GetCorsPolicyInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class GetCorsPolicyOutput {
  public CorsPolicy $cors_policy;

  public function __construct(shape(
  ?'cors_policy' => CorsPolicy,
  ) $s = shape()) {
    $this->cors_policy = $cors_policy ?? [];
  }
}

class GetLifecyclePolicyInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class GetLifecyclePolicyOutput {
  public LifecyclePolicy $lifecycle_policy;

  public function __construct(shape(
  ?'lifecycle_policy' => LifecyclePolicy,
  ) $s = shape()) {
    $this->lifecycle_policy = $lifecycle_policy ?? "";
  }
}

class GetMetricPolicyInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class GetMetricPolicyOutput {
  public MetricPolicy $metric_policy;

  public function __construct(shape(
  ?'metric_policy' => MetricPolicy,
  ) $s = shape()) {
    $this->metric_policy = $metric_policy ?? null;
  }
}

type Header = string;

class InternalServerError {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type LifecyclePolicy = string;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListContainersInput {
  public ContainerListLimit $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => ContainerListLimit,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListContainersOutput {
  public ContainerList $containers;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'containers' => ContainerList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->containers = $containers ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListTagsForResourceInput {
  public ContainerARN $resource;

  public function __construct(shape(
  ?'resource' => ContainerARN,
  ) $s = shape()) {
    $this->resource = $resource ?? ;
  }
}

class ListTagsForResourceOutput {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

type MaxAgeSeconds = int;

type MethodName = string;

class MetricPolicy {
  public ContainerLevelMetrics $container_level_metrics;
  public MetricPolicyRules $metric_policy_rules;

  public function __construct(shape(
  ?'container_level_metrics' => ContainerLevelMetrics,
  ?'metric_policy_rules' => MetricPolicyRules,
  ) $s = shape()) {
    $this->container_level_metrics = $container_level_metrics ?? "";
    $this->metric_policy_rules = $metric_policy_rules ?? [];
  }
}

class MetricPolicyRule {
  public ObjectGroup $object_group;
  public ObjectGroupName $object_group_name;

  public function __construct(shape(
  ?'object_group' => ObjectGroup,
  ?'object_group_name' => ObjectGroupName,
  ) $s = shape()) {
    $this->object_group = $object_group ?? "";
    $this->object_group_name = $object_group_name ?? "";
  }
}

type MetricPolicyRules = vec<MetricPolicyRule>;

type ObjectGroup = string;

type ObjectGroupName = string;

type Origin = string;

type PaginationToken = string;

class PolicyNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class PutContainerPolicyInput {
  public ContainerName $container_name;
  public ContainerPolicy $policy;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ?'policy' => ContainerPolicy,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
    $this->policy = $policy ?? ;
  }
}

class PutContainerPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutCorsPolicyInput {
  public ContainerName $container_name;
  public CorsPolicy $cors_policy;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ?'cors_policy' => CorsPolicy,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
    $this->cors_policy = $cors_policy ?? [];
  }
}

class PutCorsPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutLifecyclePolicyInput {
  public ContainerName $container_name;
  public LifecyclePolicy $lifecycle_policy;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ?'lifecycle_policy' => LifecyclePolicy,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
    $this->lifecycle_policy = $lifecycle_policy ?? "";
  }
}

class PutLifecyclePolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutMetricPolicyInput {
  public ContainerName $container_name;
  public MetricPolicy $metric_policy;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ?'metric_policy' => MetricPolicy,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
    $this->metric_policy = $metric_policy ?? null;
  }
}

class PutMetricPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartAccessLoggingInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class StartAccessLoggingOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopAccessLoggingInput {
  public ContainerName $container_name;

  public function __construct(shape(
  ?'container_name' => ContainerName,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
  }
}

class StopAccessLoggingOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceInput {
  public ContainerARN $resource;
  public TagList $tags;

  public function __construct(shape(
  ?'resource' => ContainerARN,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource = $resource ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type TimeStamp = int;

class UntagResourceInput {
  public ContainerARN $resource;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource' => ContainerARN,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource = $resource ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

