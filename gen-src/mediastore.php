<?hh // strict
namespace slack\aws\mediastore;

interface MediaStore {
  public function CreateContainer(CreateContainerInput $in): Awaitable<\Errors\Result<CreateContainerOutput>>;
  public function DeleteContainer(DeleteContainerInput $in): Awaitable<\Errors\Result<DeleteContainerOutput>>;
  public function DeleteContainerPolicy(DeleteContainerPolicyInput $in): Awaitable<\Errors\Result<DeleteContainerPolicyOutput>>;
  public function DeleteCorsPolicy(DeleteCorsPolicyInput $in): Awaitable<\Errors\Result<DeleteCorsPolicyOutput>>;
  public function DeleteLifecyclePolicy(DeleteLifecyclePolicyInput $in): Awaitable<\Errors\Result<DeleteLifecyclePolicyOutput>>;
  public function DeleteMetricPolicy(DeleteMetricPolicyInput $in): Awaitable<\Errors\Result<DeleteMetricPolicyOutput>>;
  public function DescribeContainer(DescribeContainerInput $in): Awaitable<\Errors\Result<DescribeContainerOutput>>;
  public function GetContainerPolicy(GetContainerPolicyInput $in): Awaitable<\Errors\Result<GetContainerPolicyOutput>>;
  public function GetCorsPolicy(GetCorsPolicyInput $in): Awaitable<\Errors\Result<GetCorsPolicyOutput>>;
  public function GetLifecyclePolicy(GetLifecyclePolicyInput $in): Awaitable<\Errors\Result<GetLifecyclePolicyOutput>>;
  public function GetMetricPolicy(GetMetricPolicyInput $in): Awaitable<\Errors\Result<GetMetricPolicyOutput>>;
  public function ListContainers(ListContainersInput $in): Awaitable<\Errors\Result<ListContainersOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput $in): Awaitable<\Errors\Result<ListTagsForResourceOutput>>;
  public function PutContainerPolicy(PutContainerPolicyInput $in): Awaitable<\Errors\Result<PutContainerPolicyOutput>>;
  public function PutCorsPolicy(PutCorsPolicyInput $in): Awaitable<\Errors\Result<PutCorsPolicyOutput>>;
  public function PutLifecyclePolicy(PutLifecyclePolicyInput $in): Awaitable<\Errors\Result<PutLifecyclePolicyOutput>>;
  public function PutMetricPolicy(PutMetricPolicyInput $in): Awaitable<\Errors\Result<PutMetricPolicyOutput>>;
  public function StartAccessLogging(StartAccessLoggingInput $in): Awaitable<\Errors\Result<StartAccessLoggingOutput>>;
  public function StopAccessLogging(StopAccessLoggingInput $in): Awaitable<\Errors\Result<StopAccessLoggingOutput>>;
  public function TagResource(TagResourceInput $in): Awaitable<\Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput $in): Awaitable<\Errors\Result<UntagResourceOutput>>;
}

type AllowedHeaders = vec<Header>;

type AllowedMethods = vec<MethodName>;

type AllowedOrigins = vec<Origin>;

class Container {
  public ?ContainerARN $arn;
  public ?ContainerAccessLoggingEnabled $access_logging_enabled;
  public ?TimeStamp $creation_time;
  public ?Endpoint $endpoint;
  public ?ContainerName $name;
  public ?ContainerStatus $status;

  public function __construct(shape(
    ?'arn' => ?ContainerARN,
    ?'access_logging_enabled' => ?ContainerAccessLoggingEnabled,
    ?'creation_time' => ?TimeStamp,
    ?'endpoint' => ?Endpoint,
    ?'name' => ?ContainerName,
    ?'status' => ?ContainerStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->access_logging_enabled = $s['access_logging_enabled'] ?? false;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->endpoint = $s['endpoint'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type ContainerARN = string;

type ContainerAccessLoggingEnabled = bool;

class ContainerInUseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ContainerLevelMetrics = string;

type ContainerList = vec<Container>;

type ContainerListLimit = int;

type ContainerName = string;

class ContainerNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ContainerPolicy = string;

type ContainerStatus = string;

type CorsPolicy = vec<CorsRule>;

class CorsPolicyNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CorsRule {
  public ?AllowedHeaders $allowed_headers;
  public ?AllowedMethods $allowed_methods;
  public ?AllowedOrigins $allowed_origins;
  public ?ExposeHeaders $expose_headers;
  public ?MaxAgeSeconds $max_age_seconds;

  public function __construct(shape(
    ?'allowed_headers' => ?AllowedHeaders,
    ?'allowed_methods' => ?AllowedMethods,
    ?'allowed_origins' => ?AllowedOrigins,
    ?'expose_headers' => ?ExposeHeaders,
    ?'max_age_seconds' => ?MaxAgeSeconds,
  ) $s = shape()) {
    $this->allowed_headers = $s['allowed_headers'] ?? vec[];
    $this->allowed_methods = $s['allowed_methods'] ?? vec[];
    $this->allowed_origins = $s['allowed_origins'] ?? vec[];
    $this->expose_headers = $s['expose_headers'] ?? vec[];
    $this->max_age_seconds = $s['max_age_seconds'] ?? 0;
  }
}

class CreateContainerInput {
  public ?ContainerName $container_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateContainerOutput {
  public ?Container $container;

  public function __construct(shape(
    ?'container' => ?Container,
  ) $s = shape()) {
    $this->container = $s['container'] ?? null;
  }
}

class DeleteContainerInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class DeleteContainerOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteContainerPolicyInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class DeleteContainerPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteCorsPolicyInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class DeleteCorsPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteLifecyclePolicyInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class DeleteLifecyclePolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteMetricPolicyInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class DeleteMetricPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeContainerInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class DescribeContainerOutput {
  public ?Container $container;

  public function __construct(shape(
    ?'container' => ?Container,
  ) $s = shape()) {
    $this->container = $s['container'] ?? null;
  }
}

type Endpoint = string;

type ErrorMessage = string;

type ExposeHeaders = vec<Header>;

class GetContainerPolicyInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class GetContainerPolicyOutput {
  public ?ContainerPolicy $policy;

  public function __construct(shape(
    ?'policy' => ?ContainerPolicy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
  }
}

class GetCorsPolicyInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class GetCorsPolicyOutput {
  public ?CorsPolicy $cors_policy;

  public function __construct(shape(
    ?'cors_policy' => ?CorsPolicy,
  ) $s = shape()) {
    $this->cors_policy = $s['cors_policy'] ?? vec[];
  }
}

class GetLifecyclePolicyInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class GetLifecyclePolicyOutput {
  public ?LifecyclePolicy $lifecycle_policy;

  public function __construct(shape(
    ?'lifecycle_policy' => ?LifecyclePolicy,
  ) $s = shape()) {
    $this->lifecycle_policy = $s['lifecycle_policy'] ?? '';
  }
}

class GetMetricPolicyInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class GetMetricPolicyOutput {
  public ?MetricPolicy $metric_policy;

  public function __construct(shape(
    ?'metric_policy' => ?MetricPolicy,
  ) $s = shape()) {
    $this->metric_policy = $s['metric_policy'] ?? null;
  }
}

type Header = string;

class InternalServerError {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LifecyclePolicy = string;

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListContainersInput {
  public ?ContainerListLimit $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?ContainerListLimit,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListContainersOutput {
  public ?ContainerList $containers;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'containers' => ?ContainerList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->containers = $s['containers'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceInput {
  public ?ContainerARN $resource;

  public function __construct(shape(
    ?'resource' => ?ContainerARN,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? '';
  }
}

class ListTagsForResourceOutput {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

type MaxAgeSeconds = int;

type MethodName = string;

class MetricPolicy {
  public ?ContainerLevelMetrics $container_level_metrics;
  public ?MetricPolicyRules $metric_policy_rules;

  public function __construct(shape(
    ?'container_level_metrics' => ?ContainerLevelMetrics,
    ?'metric_policy_rules' => ?MetricPolicyRules,
  ) $s = shape()) {
    $this->container_level_metrics = $s['container_level_metrics'] ?? '';
    $this->metric_policy_rules = $s['metric_policy_rules'] ?? vec[];
  }
}

class MetricPolicyRule {
  public ?ObjectGroup $object_group;
  public ?ObjectGroupName $object_group_name;

  public function __construct(shape(
    ?'object_group' => ?ObjectGroup,
    ?'object_group_name' => ?ObjectGroupName,
  ) $s = shape()) {
    $this->object_group = $s['object_group'] ?? '';
    $this->object_group_name = $s['object_group_name'] ?? '';
  }
}

type MetricPolicyRules = vec<MetricPolicyRule>;

type ObjectGroup = string;

type ObjectGroupName = string;

type Origin = string;

type PaginationToken = string;

class PolicyNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PutContainerPolicyInput {
  public ?ContainerName $container_name;
  public ?ContainerPolicy $policy;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
    ?'policy' => ?ContainerPolicy,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
    $this->policy = $s['policy'] ?? '';
  }
}

class PutContainerPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutCorsPolicyInput {
  public ?ContainerName $container_name;
  public ?CorsPolicy $cors_policy;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
    ?'cors_policy' => ?CorsPolicy,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
    $this->cors_policy = $s['cors_policy'] ?? vec[];
  }
}

class PutCorsPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutLifecyclePolicyInput {
  public ?ContainerName $container_name;
  public ?LifecyclePolicy $lifecycle_policy;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
    ?'lifecycle_policy' => ?LifecyclePolicy,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
    $this->lifecycle_policy = $s['lifecycle_policy'] ?? '';
  }
}

class PutLifecyclePolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutMetricPolicyInput {
  public ?ContainerName $container_name;
  public ?MetricPolicy $metric_policy;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
    ?'metric_policy' => ?MetricPolicy,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
    $this->metric_policy = $s['metric_policy'] ?? null;
  }
}

class PutMetricPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartAccessLoggingInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class StartAccessLoggingOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopAccessLoggingInput {
  public ?ContainerName $container_name;

  public function __construct(shape(
    ?'container_name' => ?ContainerName,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
  }
}

class StopAccessLoggingOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

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

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceInput {
  public ?ContainerARN $resource;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource' => ?ContainerARN,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
  public ?ContainerARN $resource;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource' => ?ContainerARN,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

