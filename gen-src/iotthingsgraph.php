<?hh // strict
namespace slack\aws\iotthingsgraph;

interface IoTThingsGraph {
  public function CreateSystemTemplate(CreateSystemTemplateRequest) Awaitable<Errors\Result<CreateSystemTemplateResponse>>;
  public function GetFlowTemplate(GetFlowTemplateRequest) Awaitable<Errors\Result<GetFlowTemplateResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function DeprecateSystemTemplate(DeprecateSystemTemplateRequest) Awaitable<Errors\Result<DeprecateSystemTemplateResponse>>;
  public function UploadEntityDefinitions(UploadEntityDefinitionsRequest) Awaitable<Errors\Result<UploadEntityDefinitionsResponse>>;
  public function UpdateSystemTemplate(UpdateSystemTemplateRequest) Awaitable<Errors\Result<UpdateSystemTemplateResponse>>;
  public function DeleteFlowTemplate(DeleteFlowTemplateRequest) Awaitable<Errors\Result<DeleteFlowTemplateResponse>>;
  public function GetFlowTemplateRevisions(GetFlowTemplateRevisionsRequest) Awaitable<Errors\Result<GetFlowTemplateRevisionsResponse>>;
  public function GetSystemInstance(GetSystemInstanceRequest) Awaitable<Errors\Result<GetSystemInstanceResponse>>;
  public function GetSystemTemplate(GetSystemTemplateRequest) Awaitable<Errors\Result<GetSystemTemplateResponse>>;
  public function SearchEntities(SearchEntitiesRequest) Awaitable<Errors\Result<SearchEntitiesResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UndeploySystemInstance(UndeploySystemInstanceRequest) Awaitable<Errors\Result<UndeploySystemInstanceResponse>>;
  public function DeploySystemInstance(DeploySystemInstanceRequest) Awaitable<Errors\Result<DeploySystemInstanceResponse>>;
  public function DescribeNamespace(DescribeNamespaceRequest) Awaitable<Errors\Result<DescribeNamespaceResponse>>;
  public function DissociateEntityFromThing(DissociateEntityFromThingRequest) Awaitable<Errors\Result<DissociateEntityFromThingResponse>>;
  public function SearchFlowTemplates(SearchFlowTemplatesRequest) Awaitable<Errors\Result<SearchFlowTemplatesResponse>>;
  public function SearchThings(SearchThingsRequest) Awaitable<Errors\Result<SearchThingsResponse>>;
  public function CreateSystemInstance(CreateSystemInstanceRequest) Awaitable<Errors\Result<CreateSystemInstanceResponse>>;
  public function GetUploadStatus(GetUploadStatusRequest) Awaitable<Errors\Result<GetUploadStatusResponse>>;
  public function ListFlowExecutionMessages(ListFlowExecutionMessagesRequest) Awaitable<Errors\Result<ListFlowExecutionMessagesResponse>>;
  public function DeleteNamespace(DeleteNamespaceRequest) Awaitable<Errors\Result<DeleteNamespaceResponse>>;
  public function GetSystemTemplateRevisions(GetSystemTemplateRevisionsRequest) Awaitable<Errors\Result<GetSystemTemplateRevisionsResponse>>;
  public function SearchFlowExecutions(SearchFlowExecutionsRequest) Awaitable<Errors\Result<SearchFlowExecutionsResponse>>;
  public function SearchSystemTemplates(SearchSystemTemplatesRequest) Awaitable<Errors\Result<SearchSystemTemplatesResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateFlowTemplate(UpdateFlowTemplateRequest) Awaitable<Errors\Result<UpdateFlowTemplateResponse>>;
  public function DeprecateFlowTemplate(DeprecateFlowTemplateRequest) Awaitable<Errors\Result<DeprecateFlowTemplateResponse>>;
  public function GetEntities(GetEntitiesRequest) Awaitable<Errors\Result<GetEntitiesResponse>>;
  public function GetNamespaceDeletionStatus(GetNamespaceDeletionStatusRequest) Awaitable<Errors\Result<GetNamespaceDeletionStatusResponse>>;
  public function SearchSystemInstances(SearchSystemInstancesRequest) Awaitable<Errors\Result<SearchSystemInstancesResponse>>;
  public function AssociateEntityToThing(AssociateEntityToThingRequest) Awaitable<Errors\Result<AssociateEntityToThingResponse>>;
  public function CreateFlowTemplate(CreateFlowTemplateRequest) Awaitable<Errors\Result<CreateFlowTemplateResponse>>;
  public function DeleteSystemInstance(DeleteSystemInstanceRequest) Awaitable<Errors\Result<DeleteSystemInstanceResponse>>;
  public function DeleteSystemTemplate(DeleteSystemTemplateRequest) Awaitable<Errors\Result<DeleteSystemTemplateResponse>>;
}

class EntityFilterValue {
}

class NextToken {
}

class UploadStatus {
}

class Urns {
}

class DeleteFlowTemplateRequest {
  public Urn $id;
}

class EntityFilters {
}

class MetricsConfiguration {
  public RoleArn $metric_rule_role_arn;
  public Enabled $cloud_metric_enabled;
}

class SystemTemplateFilterValues {
}

class SystemTemplateSummary {
  public Urn $id;
  public Arn $arn;
  public Version $revision_number;
  public Timestamp $created_at;
}

class EntityType {
}

class GetSystemTemplateRevisionsResponse {
  public SystemTemplateSummaries $summaries;
  public NextToken $next_token;
}

class RoleArn {
}

class ListTagsForResourceResponse {
  public TagList $tags;
  public NextToken $next_token;
}

class StringList {
}

class SystemInstanceDeploymentStatus {
}

class AssociateEntityToThingResponse {
}

class FlowExecutionId {
}

class FlowExecutionSummaries {
}

class FlowTemplateSummary {
  public Urn $id;
  public Arn $arn;
  public Version $revision_number;
  public Timestamp $created_at;
}

class GreengrassGroupId {
}

class SystemTemplateFilter {
  public SystemTemplateFilterName $name;
  public SystemTemplateFilterValues $value;
}

class UploadEntityDefinitionsResponse {
  public UploadId $upload_id;
}

class DeploySystemInstanceResponse {
  public SystemInstanceSummary $summary;
  public GreengrassDeploymentId $greengrass_deployment_id;
}

class EntityDescription {
  public EntityType $type;
  public Timestamp $created_at;
  public DefinitionDocument $definition;
  public Urn $id;
  public Arn $arn;
}

class FlowExecutionMessage {
  public FlowExecutionMessagePayload $payload;
  public FlowExecutionMessageId $message_id;
  public FlowExecutionEventType $event_type;
  public Timestamp $timestamp;
}

class FlowExecutionMessageId {
}

class SyncWithPublicNamespace {
}

class DeprecateSystemTemplateRequest {
  public Urn $id;
}

class FlowExecutionEventType {
}

class GetFlowTemplateRevisionsResponse {
  public NextToken $next_token;
  public FlowTemplateSummaries $summaries;
}

class MaxResults {
}

class SearchSystemTemplatesResponse {
  public SystemTemplateSummaries $summaries;
  public NextToken $next_token;
}

class TagValue {
}

class EntityFilterName {
}

class FlowExecutionSummary {
  public Timestamp $updated_at;
  public FlowExecutionId $flow_execution_id;
  public FlowExecutionStatus $status;
  public Urn $system_instance_id;
  public Urn $flow_template_id;
  public Timestamp $created_at;
}

class FlowTemplateSummaries {
}

class GreengrassGroupVersionId {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class AssociateEntityToThingRequest {
  public ThingName $thing_name;
  public Urn $entity_id;
  public Version $namespace_version;
}

class DefinitionDocument {
  public DefinitionLanguage $language;
  public DefinitionText $text;
}

class Enabled {
}

class EntityTypes {
}

class ThingName {
}

class CreateSystemTemplateRequest {
  public DefinitionDocument $definition;
  public Version $compatible_namespace_version;
}

class DeleteSystemInstanceResponse {
}

class DependencyRevision {
  public Urn $id;
  public Version $revision_number;
}

class DeploymentTarget {
}

class EntityDescriptions {
}

class FlowTemplateFilters {
}

class GreengrassDeploymentId {
}

class InternalFailureException {
  public ErrorMessage $message;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class GetEntitiesResponse {
  public EntityDescriptions $descriptions;
}

class GetSystemInstanceRequest {
  public Urn $id;
}

class UndeploySystemInstanceRequest {
  public Urn $id;
}

class GetFlowTemplateRequest {
  public Version $revision_number;
  public Urn $id;
}

class GetNamespaceDeletionStatusResponse {
  public Arn $namespace_arn;
  public NamespaceName $namespace_name;
  public NamespaceDeletionStatus $status;
  public NamespaceDeletionStatusErrorCodes $error_code;
  public string $error_message;
}

class GetUploadStatusResponse {
  public Timestamp $created_date;
  public UploadId $upload_id;
  public UploadStatus $upload_status;
  public Arn $namespace_arn;
  public NamespaceName $namespace_name;
  public Version $namespace_version;
  public StringList $failure_reason;
}

class SystemInstanceFilterValues {
}

class Thing {
  public ThingArn $thing_arn;
  public ThingName $thing_name;
}

class UploadEntityDefinitionsRequest {
  public DefinitionDocument $document;
  public SyncWithPublicNamespace $sync_with_public_namespace;
  public DeprecateExistingEntities $deprecate_existing_entities;
}

class GetEntitiesRequest {
  public Urns $ids;
  public Version $namespace_version;
}

class GetSystemTemplateResponse {
  public SystemTemplateDescription $description;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class SearchThingsResponse {
  public Things $things;
  public NextToken $next_token;
}

class SystemInstanceDescription {
  public DefinitionDocument $definition;
  public S3BucketName $s_3_bucket_name;
  public MetricsConfiguration $metrics_configuration;
  public Version $validated_namespace_version;
  public DependencyRevisions $validated_dependency_revisions;
  public RoleArn $flow_actions_role_arn;
  public SystemInstanceSummary $summary;
}

class TagKey {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class Version {
}

class DeleteSystemTemplateResponse {
}

class GetFlowTemplateRevisionsRequest {
  public Urn $id;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ResourceArn {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class SearchSystemInstancesRequest {
  public SystemInstanceFilters $filters;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class UpdateSystemTemplateResponse {
  public SystemTemplateSummary $summary;
}

class CreateSystemInstanceRequest {
  public DefinitionDocument $definition;
  public DeploymentTarget $target;
  public GroupName $greengrass_group_name;
  public S3BucketName $s_3_bucket_name;
  public MetricsConfiguration $metrics_configuration;
  public RoleArn $flow_actions_role_arn;
  public TagList $tags;
}

class DeleteFlowTemplateResponse {
}

class InvalidRequestException {
  public ErrorMessage $message;
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
}

class SystemInstanceFilters {
}

class ThrottlingException {
  public ErrorMessage $message;
}

class UploadId {
}

class Arn {
}

class FlowTemplateFilterValue {
}

class GetNamespaceDeletionStatusRequest {
}

class ListFlowExecutionMessagesResponse {
  public FlowExecutionMessages $messages;
  public NextToken $next_token;
}

class SystemInstanceFilter {
  public SystemInstanceFilterName $name;
  public SystemInstanceFilterValues $value;
}

class EntityFilter {
  public EntityFilterName $name;
  public EntityFilterValues $value;
}

class GetUploadStatusRequest {
  public UploadId $upload_id;
}

class SearchFlowTemplatesRequest {
  public FlowTemplateFilters $filters;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class TagKeyList {
}

class SystemTemplateFilters {
}

class Timestamp {
}

class UndeploySystemInstanceResponse {
  public SystemInstanceSummary $summary;
}

class DeprecateExistingEntities {
}

class ErrorMessage {
}

class SystemTemplateFilterValue {
}

class NamespaceName {
}

class SearchFlowTemplatesResponse {
  public FlowTemplateSummaries $summaries;
  public NextToken $next_token;
}

class SearchSystemInstancesResponse {
  public SystemInstanceSummaries $summaries;
  public NextToken $next_token;
}

class DeleteSystemInstanceRequest {
  public Urn $id;
}

class DescribeNamespaceResponse {
  public Arn $namespace_arn;
  public NamespaceName $namespace_name;
  public NamespaceName $tracking_namespace_name;
  public Version $tracking_namespace_version;
  public Version $namespace_version;
}

class EntityFilterValues {
}

class GetSystemInstanceResponse {
  public SystemInstanceDescription $description;
}

class GetSystemTemplateRequest {
  public Urn $id;
  public Version $revision_number;
}

class String {
}

class ThingArn {
}

class Things {
}

class Urn {
}

class UpdateFlowTemplateRequest {
  public Version $compatible_namespace_version;
  public Urn $id;
  public DefinitionDocument $definition;
}

class UpdateFlowTemplateResponse {
  public FlowTemplateSummary $summary;
}

class DependencyRevisions {
}

class DeploySystemInstanceRequest {
  public Urn $id;
}

class DescribeNamespaceRequest {
  public NamespaceName $namespace_name;
}

class FlowExecutionMessages {
}

class SearchSystemTemplatesRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public SystemTemplateFilters $filters;
}

class CreateFlowTemplateRequest {
  public Version $compatible_namespace_version;
  public DefinitionDocument $definition;
}

class SystemInstanceFilterValue {
}

class DeleteNamespaceRequest {
}

class ListFlowExecutionMessagesRequest {
  public FlowExecutionId $flow_execution_id;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class DeleteSystemTemplateRequest {
  public Urn $id;
}

class FlowExecutionMessagePayload {
}

class NamespaceDeletionStatusErrorCodes {
}

class SearchFlowExecutionsResponse {
  public FlowExecutionSummaries $summaries;
  public NextToken $next_token;
}

class SystemInstanceSummaries {
}

class DeprecateSystemTemplateResponse {
}

class SearchFlowExecutionsRequest {
  public Timestamp $end_time;
  public NextToken $next_token;
  public MaxResults $max_results;
  public Urn $system_instance_id;
  public FlowExecutionId $flow_execution_id;
  public Timestamp $start_time;
}

class SystemInstanceFilterName {
}

class SystemInstanceSummary {
  public GreengrassGroupId $greengrass_group_id;
  public DeploymentTarget $target;
  public Timestamp $updated_at;
  public SystemInstanceDeploymentStatus $status;
  public GroupName $greengrass_group_name;
  public Timestamp $created_at;
  public GreengrassGroupVersionId $greengrass_group_version_id;
  public Urn $id;
  public Arn $arn;
}

class CreateFlowTemplateResponse {
  public FlowTemplateSummary $summary;
}

class FlowTemplateFilterValues {
}

class GetFlowTemplateResponse {
  public FlowTemplateDescription $description;
}

class SearchThingsRequest {
  public Urn $entity_id;
  public NextToken $next_token;
  public MaxResults $max_results;
  public Version $namespace_version;
}

class TagResourceResponse {
}

class FlowTemplateFilter {
  public FlowTemplateFilterName $name;
  public FlowTemplateFilterValues $value;
}

class SearchEntitiesRequest {
  public EntityFilters $filters;
  public NextToken $next_token;
  public MaxResults $max_results;
  public Version $namespace_version;
  public EntityTypes $entity_types;
}

class SystemTemplateDescription {
  public SystemTemplateSummary $summary;
  public DefinitionDocument $definition;
  public Version $validated_namespace_version;
}

class SystemTemplateFilterName {
}

class CreateSystemInstanceResponse {
  public SystemInstanceSummary $summary;
}

class DefinitionText {
}

class SearchEntitiesResponse {
  public EntityDescriptions $descriptions;
  public NextToken $next_token;
}

class UntagResourceResponse {
}

class UpdateSystemTemplateRequest {
  public Version $compatible_namespace_version;
  public Urn $id;
  public DefinitionDocument $definition;
}

class DeleteNamespaceResponse {
  public Arn $namespace_arn;
  public NamespaceName $namespace_name;
}

class TagList {
}

class CreateSystemTemplateResponse {
  public SystemTemplateSummary $summary;
}

class DissociateEntityFromThingRequest {
  public ThingName $thing_name;
  public EntityType $entity_type;
}

class FlowExecutionStatus {
}

class FlowTemplateDescription {
  public FlowTemplateSummary $summary;
  public DefinitionDocument $definition;
  public Version $validated_namespace_version;
}

class FlowTemplateFilterName {
}

class SystemTemplateSummaries {
}

class DefinitionLanguage {
}

class DissociateEntityFromThingResponse {
}

class GroupName {
}

class NamespaceDeletionStatus {
}

class S3BucketName {
}

class DeprecateFlowTemplateRequest {
  public Urn $id;
}

class DeprecateFlowTemplateResponse {
}

class GetSystemTemplateRevisionsRequest {
  public Urn $id;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

