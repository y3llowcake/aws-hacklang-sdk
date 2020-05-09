<?hh // strict
namespace slack\aws\mediastore;

interface MediaStore {
  public function CreateContainer(CreateContainerInput) Awaitable<Errors\Result<CreateContainerOutput>>;
  public function DeleteContainer(DeleteContainerInput) Awaitable<Errors\Result<DeleteContainerOutput>>;
  public function DeleteContainerPolicy(DeleteContainerPolicyInput) Awaitable<Errors\Result<DeleteContainerPolicyOutput>>;
  public function DeleteCorsPolicy(DeleteCorsPolicyInput) Awaitable<Errors\Result<DeleteCorsPolicyOutput>>;
  public function DeleteLifecyclePolicy(DeleteLifecyclePolicyInput) Awaitable<Errors\Result<DeleteLifecyclePolicyOutput>>;
  public function DeleteMetricPolicy(DeleteMetricPolicyInput) Awaitable<Errors\Result<DeleteMetricPolicyOutput>>;
  public function DescribeContainer(DescribeContainerInput) Awaitable<Errors\Result<DescribeContainerOutput>>;
  public function GetContainerPolicy(GetContainerPolicyInput) Awaitable<Errors\Result<GetContainerPolicyOutput>>;
  public function GetCorsPolicy(GetCorsPolicyInput) Awaitable<Errors\Result<GetCorsPolicyOutput>>;
  public function GetLifecyclePolicy(GetLifecyclePolicyInput) Awaitable<Errors\Result<GetLifecyclePolicyOutput>>;
  public function GetMetricPolicy(GetMetricPolicyInput) Awaitable<Errors\Result<GetMetricPolicyOutput>>;
  public function ListContainers(ListContainersInput) Awaitable<Errors\Result<ListContainersOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function PutContainerPolicy(PutContainerPolicyInput) Awaitable<Errors\Result<PutContainerPolicyOutput>>;
  public function PutCorsPolicy(PutCorsPolicyInput) Awaitable<Errors\Result<PutCorsPolicyOutput>>;
  public function PutLifecyclePolicy(PutLifecyclePolicyInput) Awaitable<Errors\Result<PutLifecyclePolicyOutput>>;
  public function PutMetricPolicy(PutMetricPolicyInput) Awaitable<Errors\Result<PutMetricPolicyOutput>>;
  public function StartAccessLogging(StartAccessLoggingInput) Awaitable<Errors\Result<StartAccessLoggingOutput>>;
  public function StopAccessLogging(StopAccessLoggingInput) Awaitable<Errors\Result<StopAccessLoggingOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
}

class AllowedHeaders {
}

class AllowedMethods {
}

class AllowedOrigins {
}

class Container {
  public ContainerARN $arn;
  public ContainerAccessLoggingEnabled $access_logging_enabled;
  public TimeStamp $creation_time;
  public Endpoint $endpoint;
  public ContainerName $name;
  public ContainerStatus $status;
}

class ContainerARN {
}

class ContainerAccessLoggingEnabled {
}

class ContainerInUseException {
  public ErrorMessage $message;
}

class ContainerLevelMetrics {
}

class ContainerList {
}

class ContainerListLimit {
}

class ContainerName {
}

class ContainerNotFoundException {
  public ErrorMessage $message;
}

class ContainerPolicy {
}

class ContainerStatus {
}

class CorsPolicy {
}

class CorsPolicyNotFoundException {
  public ErrorMessage $message;
}

class CorsRule {
  public AllowedHeaders $allowed_headers;
  public AllowedMethods $allowed_methods;
  public AllowedOrigins $allowed_origins;
  public ExposeHeaders $expose_headers;
  public MaxAgeSeconds $max_age_seconds;
}

class CreateContainerInput {
  public ContainerName $container_name;
  public TagList $tags;
}

class CreateContainerOutput {
  public Container $container;
}

class DeleteContainerInput {
  public ContainerName $container_name;
}

class DeleteContainerOutput {
}

class DeleteContainerPolicyInput {
  public ContainerName $container_name;
}

class DeleteContainerPolicyOutput {
}

class DeleteCorsPolicyInput {
  public ContainerName $container_name;
}

class DeleteCorsPolicyOutput {
}

class DeleteLifecyclePolicyInput {
  public ContainerName $container_name;
}

class DeleteLifecyclePolicyOutput {
}

class DeleteMetricPolicyInput {
  public ContainerName $container_name;
}

class DeleteMetricPolicyOutput {
}

class DescribeContainerInput {
  public ContainerName $container_name;
}

class DescribeContainerOutput {
  public Container $container;
}

class Endpoint {
}

class ErrorMessage {
}

class ExposeHeaders {
}

class GetContainerPolicyInput {
  public ContainerName $container_name;
}

class GetContainerPolicyOutput {
  public ContainerPolicy $policy;
}

class GetCorsPolicyInput {
  public ContainerName $container_name;
}

class GetCorsPolicyOutput {
  public CorsPolicy $cors_policy;
}

class GetLifecyclePolicyInput {
  public ContainerName $container_name;
}

class GetLifecyclePolicyOutput {
  public LifecyclePolicy $lifecycle_policy;
}

class GetMetricPolicyInput {
  public ContainerName $container_name;
}

class GetMetricPolicyOutput {
  public MetricPolicy $metric_policy;
}

class Header {
}

class InternalServerError {
  public ErrorMessage $message;
}

class LifecyclePolicy {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListContainersInput {
  public ContainerListLimit $max_results;
  public PaginationToken $next_token;
}

class ListContainersOutput {
  public ContainerList $containers;
  public PaginationToken $next_token;
}

class ListTagsForResourceInput {
  public ContainerARN $resource;
}

class ListTagsForResourceOutput {
  public TagList $tags;
}

class MaxAgeSeconds {
}

class MethodName {
}

class MetricPolicy {
  public ContainerLevelMetrics $container_level_metrics;
  public MetricPolicyRules $metric_policy_rules;
}

class MetricPolicyRule {
  public ObjectGroup $object_group;
  public ObjectGroupName $object_group_name;
}

class MetricPolicyRules {
}

class ObjectGroup {
}

class ObjectGroupName {
}

class Origin {
}

class PaginationToken {
}

class PolicyNotFoundException {
  public ErrorMessage $message;
}

class PutContainerPolicyInput {
  public ContainerName $container_name;
  public ContainerPolicy $policy;
}

class PutContainerPolicyOutput {
}

class PutCorsPolicyInput {
  public ContainerName $container_name;
  public CorsPolicy $cors_policy;
}

class PutCorsPolicyOutput {
}

class PutLifecyclePolicyInput {
  public ContainerName $container_name;
  public LifecyclePolicy $lifecycle_policy;
}

class PutLifecyclePolicyOutput {
}

class PutMetricPolicyInput {
  public ContainerName $container_name;
  public MetricPolicy $metric_policy;
}

class PutMetricPolicyOutput {
}

class StartAccessLoggingInput {
  public ContainerName $container_name;
}

class StartAccessLoggingOutput {
}

class StopAccessLoggingInput {
  public ContainerName $container_name;
}

class StopAccessLoggingOutput {
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

class TagResourceInput {
  public ContainerARN $resource;
  public TagList $tags;
}

class TagResourceOutput {
}

class TagValue {
}

class TimeStamp {
}

class UntagResourceInput {
  public ContainerARN $resource;
  public TagKeyList $tag_keys;
}

class UntagResourceOutput {
}

