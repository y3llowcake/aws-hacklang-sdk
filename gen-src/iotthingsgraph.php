<?hh // strict
namespace slack\aws\iotthingsgraph;

interface IoTThingsGraph {
  public function AssociateEntityToThing(AssociateEntityToThingRequest): Awaitable<Errors\Result<AssociateEntityToThingResponse>>;
  public function CreateFlowTemplate(CreateFlowTemplateRequest): Awaitable<Errors\Result<CreateFlowTemplateResponse>>;
  public function CreateSystemInstance(CreateSystemInstanceRequest): Awaitable<Errors\Result<CreateSystemInstanceResponse>>;
  public function CreateSystemTemplate(CreateSystemTemplateRequest): Awaitable<Errors\Result<CreateSystemTemplateResponse>>;
  public function DeleteFlowTemplate(DeleteFlowTemplateRequest): Awaitable<Errors\Result<DeleteFlowTemplateResponse>>;
  public function DeleteNamespace(DeleteNamespaceRequest): Awaitable<Errors\Result<DeleteNamespaceResponse>>;
  public function DeleteSystemInstance(DeleteSystemInstanceRequest): Awaitable<Errors\Result<DeleteSystemInstanceResponse>>;
  public function DeleteSystemTemplate(DeleteSystemTemplateRequest): Awaitable<Errors\Result<DeleteSystemTemplateResponse>>;
  public function DeploySystemInstance(DeploySystemInstanceRequest): Awaitable<Errors\Result<DeploySystemInstanceResponse>>;
  public function DeprecateFlowTemplate(DeprecateFlowTemplateRequest): Awaitable<Errors\Result<DeprecateFlowTemplateResponse>>;
  public function DeprecateSystemTemplate(DeprecateSystemTemplateRequest): Awaitable<Errors\Result<DeprecateSystemTemplateResponse>>;
  public function DescribeNamespace(DescribeNamespaceRequest): Awaitable<Errors\Result<DescribeNamespaceResponse>>;
  public function DissociateEntityFromThing(DissociateEntityFromThingRequest): Awaitable<Errors\Result<DissociateEntityFromThingResponse>>;
  public function GetEntities(GetEntitiesRequest): Awaitable<Errors\Result<GetEntitiesResponse>>;
  public function GetFlowTemplate(GetFlowTemplateRequest): Awaitable<Errors\Result<GetFlowTemplateResponse>>;
  public function GetFlowTemplateRevisions(GetFlowTemplateRevisionsRequest): Awaitable<Errors\Result<GetFlowTemplateRevisionsResponse>>;
  public function GetNamespaceDeletionStatus(GetNamespaceDeletionStatusRequest): Awaitable<Errors\Result<GetNamespaceDeletionStatusResponse>>;
  public function GetSystemInstance(GetSystemInstanceRequest): Awaitable<Errors\Result<GetSystemInstanceResponse>>;
  public function GetSystemTemplate(GetSystemTemplateRequest): Awaitable<Errors\Result<GetSystemTemplateResponse>>;
  public function GetSystemTemplateRevisions(GetSystemTemplateRevisionsRequest): Awaitable<Errors\Result<GetSystemTemplateRevisionsResponse>>;
  public function GetUploadStatus(GetUploadStatusRequest): Awaitable<Errors\Result<GetUploadStatusResponse>>;
  public function ListFlowExecutionMessages(ListFlowExecutionMessagesRequest): Awaitable<Errors\Result<ListFlowExecutionMessagesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function SearchEntities(SearchEntitiesRequest): Awaitable<Errors\Result<SearchEntitiesResponse>>;
  public function SearchFlowExecutions(SearchFlowExecutionsRequest): Awaitable<Errors\Result<SearchFlowExecutionsResponse>>;
  public function SearchFlowTemplates(SearchFlowTemplatesRequest): Awaitable<Errors\Result<SearchFlowTemplatesResponse>>;
  public function SearchSystemInstances(SearchSystemInstancesRequest): Awaitable<Errors\Result<SearchSystemInstancesResponse>>;
  public function SearchSystemTemplates(SearchSystemTemplatesRequest): Awaitable<Errors\Result<SearchSystemTemplatesResponse>>;
  public function SearchThings(SearchThingsRequest): Awaitable<Errors\Result<SearchThingsResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UndeploySystemInstance(UndeploySystemInstanceRequest): Awaitable<Errors\Result<UndeploySystemInstanceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateFlowTemplate(UpdateFlowTemplateRequest): Awaitable<Errors\Result<UpdateFlowTemplateResponse>>;
  public function UpdateSystemTemplate(UpdateSystemTemplateRequest): Awaitable<Errors\Result<UpdateSystemTemplateResponse>>;
  public function UploadEntityDefinitions(UploadEntityDefinitionsRequest): Awaitable<Errors\Result<UploadEntityDefinitionsResponse>>;
}

class Arn {
}

class AssociateEntityToThingRequest {
  public Urn $entity_id;
  public Version $namespace_version;
  public ThingName $thing_name;
}

class AssociateEntityToThingResponse {
}

class CreateFlowTemplateRequest {
  public Version $compatible_namespace_version;
  public DefinitionDocument $definition;
}

class CreateFlowTemplateResponse {
  public FlowTemplateSummary $summary;
}

class CreateSystemInstanceRequest {
  public DefinitionDocument $definition;
  public RoleArn $flow_actions_role_arn;
  public GroupName $greengrass_group_name;
  public MetricsConfiguration $metrics_configuration;
  public S3BucketName $s_3_bucket_name;
  public TagList $tags;
  public DeploymentTarget $target;
}

class CreateSystemInstanceResponse {
  public SystemInstanceSummary $summary;
}

class CreateSystemTemplateRequest {
  public Version $compatible_namespace_version;
  public DefinitionDocument $definition;
}

class CreateSystemTemplateResponse {
  public SystemTemplateSummary $summary;
}

class DefinitionDocument {
  public DefinitionLanguage $language;
  public DefinitionText $text;
}

class DefinitionLanguage {
}

class DefinitionText {
}

class DeleteFlowTemplateRequest {
  public Urn $id;
}

class DeleteFlowTemplateResponse {
}

class DeleteNamespaceRequest {
}

class DeleteNamespaceResponse {
  public Arn $namespace_arn;
  public NamespaceName $namespace_name;
}

class DeleteSystemInstanceRequest {
  public Urn $id;
}

class DeleteSystemInstanceResponse {
}

class DeleteSystemTemplateRequest {
  public Urn $id;
}

class DeleteSystemTemplateResponse {
}

class DependencyRevision {
  public Urn $id;
  public Version $revision_number;
}

class DependencyRevisions {
}

class DeploySystemInstanceRequest {
  public Urn $id;
}

class DeploySystemInstanceResponse {
  public GreengrassDeploymentId $greengrass_deployment_id;
  public SystemInstanceSummary $summary;
}

class DeploymentTarget {
}

class DeprecateExistingEntities {
}

class DeprecateFlowTemplateRequest {
  public Urn $id;
}

class DeprecateFlowTemplateResponse {
}

class DeprecateSystemTemplateRequest {
  public Urn $id;
}

class DeprecateSystemTemplateResponse {
}

class DescribeNamespaceRequest {
  public NamespaceName $namespace_name;
}

class DescribeNamespaceResponse {
  public Arn $namespace_arn;
  public NamespaceName $namespace_name;
  public Version $namespace_version;
  public NamespaceName $tracking_namespace_name;
  public Version $tracking_namespace_version;
}

class DissociateEntityFromThingRequest {
  public EntityType $entity_type;
  public ThingName $thing_name;
}

class DissociateEntityFromThingResponse {
}

class Enabled {
}

class EntityDescription {
  public Arn $arn;
  public Timestamp $created_at;
  public DefinitionDocument $definition;
  public Urn $id;
  public EntityType $type;
}

class EntityDescriptions {
}

class EntityFilter {
  public EntityFilterName $name;
  public EntityFilterValues $value;
}

class EntityFilterName {
}

class EntityFilterValue {
}

class EntityFilterValues {
}

class EntityFilters {
}

class EntityType {
}

class EntityTypes {
}

class ErrorMessage {
}

class FlowExecutionEventType {
}

class FlowExecutionId {
}

class FlowExecutionMessage {
  public FlowExecutionEventType $event_type;
  public FlowExecutionMessageId $message_id;
  public FlowExecutionMessagePayload $payload;
  public Timestamp $timestamp;
}

class FlowExecutionMessageId {
}

class FlowExecutionMessagePayload {
}

class FlowExecutionMessages {
}

class FlowExecutionStatus {
}

class FlowExecutionSummaries {
}

class FlowExecutionSummary {
  public Timestamp $created_at;
  public FlowExecutionId $flow_execution_id;
  public Urn $flow_template_id;
  public FlowExecutionStatus $status;
  public Urn $system_instance_id;
  public Timestamp $updated_at;
}

class FlowTemplateDescription {
  public DefinitionDocument $definition;
  public FlowTemplateSummary $summary;
  public Version $validated_namespace_version;
}

class FlowTemplateFilter {
  public FlowTemplateFilterName $name;
  public FlowTemplateFilterValues $value;
}

class FlowTemplateFilterName {
}

class FlowTemplateFilterValue {
}

class FlowTemplateFilterValues {
}

class FlowTemplateFilters {
}

class FlowTemplateSummaries {
}

class FlowTemplateSummary {
  public Arn $arn;
  public Timestamp $created_at;
  public Urn $id;
  public Version $revision_number;
}

class GetEntitiesRequest {
  public Urns $ids;
  public Version $namespace_version;
}

class GetEntitiesResponse {
  public EntityDescriptions $descriptions;
}

class GetFlowTemplateRequest {
  public Urn $id;
  public Version $revision_number;
}

class GetFlowTemplateResponse {
  public FlowTemplateDescription $description;
}

class GetFlowTemplateRevisionsRequest {
  public Urn $id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class GetFlowTemplateRevisionsResponse {
  public NextToken $next_token;
  public FlowTemplateSummaries $summaries;
}

class GetNamespaceDeletionStatusRequest {
}

class GetNamespaceDeletionStatusResponse {
  public NamespaceDeletionStatusErrorCodes $error_code;
  public string $error_message;
  public Arn $namespace_arn;
  public NamespaceName $namespace_name;
  public NamespaceDeletionStatus $status;
}

class GetSystemInstanceRequest {
  public Urn $id;
}

class GetSystemInstanceResponse {
  public SystemInstanceDescription $description;
}

class GetSystemTemplateRequest {
  public Urn $id;
  public Version $revision_number;
}

class GetSystemTemplateResponse {
  public SystemTemplateDescription $description;
}

class GetSystemTemplateRevisionsRequest {
  public Urn $id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class GetSystemTemplateRevisionsResponse {
  public NextToken $next_token;
  public SystemTemplateSummaries $summaries;
}

class GetUploadStatusRequest {
  public UploadId $upload_id;
}

class GetUploadStatusResponse {
  public Timestamp $created_date;
  public StringList $failure_reason;
  public Arn $namespace_arn;
  public NamespaceName $namespace_name;
  public Version $namespace_version;
  public UploadId $upload_id;
  public UploadStatus $upload_status;
}

class GreengrassDeploymentId {
}

class GreengrassGroupId {
}

class GreengrassGroupVersionId {
}

class GroupName {
}

class InternalFailureException {
  public ErrorMessage $message;
}

class InvalidRequestException {
  public ErrorMessage $message;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListFlowExecutionMessagesRequest {
  public FlowExecutionId $flow_execution_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListFlowExecutionMessagesResponse {
  public FlowExecutionMessages $messages;
  public NextToken $next_token;
}

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class MaxResults {
}

class MetricsConfiguration {
  public Enabled $cloud_metric_enabled;
  public RoleArn $metric_rule_role_arn;
}

class NamespaceDeletionStatus {
}

class NamespaceDeletionStatusErrorCodes {
}

class NamespaceName {
}

class NextToken {
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
}

class ResourceArn {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class RoleArn {
}

class S3BucketName {
}

class SearchEntitiesRequest {
  public EntityTypes $entity_types;
  public EntityFilters $filters;
  public MaxResults $max_results;
  public Version $namespace_version;
  public NextToken $next_token;
}

class SearchEntitiesResponse {
  public EntityDescriptions $descriptions;
  public NextToken $next_token;
}

class SearchFlowExecutionsRequest {
  public Timestamp $end_time;
  public FlowExecutionId $flow_execution_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Timestamp $start_time;
  public Urn $system_instance_id;
}

class SearchFlowExecutionsResponse {
  public NextToken $next_token;
  public FlowExecutionSummaries $summaries;
}

class SearchFlowTemplatesRequest {
  public FlowTemplateFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class SearchFlowTemplatesResponse {
  public NextToken $next_token;
  public FlowTemplateSummaries $summaries;
}

class SearchSystemInstancesRequest {
  public SystemInstanceFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class SearchSystemInstancesResponse {
  public NextToken $next_token;
  public SystemInstanceSummaries $summaries;
}

class SearchSystemTemplatesRequest {
  public SystemTemplateFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class SearchSystemTemplatesResponse {
  public NextToken $next_token;
  public SystemTemplateSummaries $summaries;
}

class SearchThingsRequest {
  public Urn $entity_id;
  public MaxResults $max_results;
  public Version $namespace_version;
  public NextToken $next_token;
}

class SearchThingsResponse {
  public NextToken $next_token;
  public Things $things;
}

class String {
}

class StringList {
}

class SyncWithPublicNamespace {
}

class SystemInstanceDeploymentStatus {
}

class SystemInstanceDescription {
  public DefinitionDocument $definition;
  public RoleArn $flow_actions_role_arn;
  public MetricsConfiguration $metrics_configuration;
  public S3BucketName $s_3_bucket_name;
  public SystemInstanceSummary $summary;
  public DependencyRevisions $validated_dependency_revisions;
  public Version $validated_namespace_version;
}

class SystemInstanceFilter {
  public SystemInstanceFilterName $name;
  public SystemInstanceFilterValues $value;
}

class SystemInstanceFilterName {
}

class SystemInstanceFilterValue {
}

class SystemInstanceFilterValues {
}

class SystemInstanceFilters {
}

class SystemInstanceSummaries {
}

class SystemInstanceSummary {
  public Arn $arn;
  public Timestamp $created_at;
  public GreengrassGroupId $greengrass_group_id;
  public GroupName $greengrass_group_name;
  public GreengrassGroupVersionId $greengrass_group_version_id;
  public Urn $id;
  public SystemInstanceDeploymentStatus $status;
  public DeploymentTarget $target;
  public Timestamp $updated_at;
}

class SystemTemplateDescription {
  public DefinitionDocument $definition;
  public SystemTemplateSummary $summary;
  public Version $validated_namespace_version;
}

class SystemTemplateFilter {
  public SystemTemplateFilterName $name;
  public SystemTemplateFilterValues $value;
}

class SystemTemplateFilterName {
}

class SystemTemplateFilterValue {
}

class SystemTemplateFilterValues {
}

class SystemTemplateFilters {
}

class SystemTemplateSummaries {
}

class SystemTemplateSummary {
  public Arn $arn;
  public Timestamp $created_at;
  public Urn $id;
  public Version $revision_number;
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
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Thing {
  public ThingArn $thing_arn;
  public ThingName $thing_name;
}

class ThingArn {
}

class ThingName {
}

class Things {
}

class ThrottlingException {
  public ErrorMessage $message;
}

class Timestamp {
}

class UndeploySystemInstanceRequest {
  public Urn $id;
}

class UndeploySystemInstanceResponse {
  public SystemInstanceSummary $summary;
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateFlowTemplateRequest {
  public Version $compatible_namespace_version;
  public DefinitionDocument $definition;
  public Urn $id;
}

class UpdateFlowTemplateResponse {
  public FlowTemplateSummary $summary;
}

class UpdateSystemTemplateRequest {
  public Version $compatible_namespace_version;
  public DefinitionDocument $definition;
  public Urn $id;
}

class UpdateSystemTemplateResponse {
  public SystemTemplateSummary $summary;
}

class UploadEntityDefinitionsRequest {
  public DeprecateExistingEntities $deprecate_existing_entities;
  public DefinitionDocument $document;
  public SyncWithPublicNamespace $sync_with_public_namespace;
}

class UploadEntityDefinitionsResponse {
  public UploadId $upload_id;
}

class UploadId {
}

class UploadStatus {
}

class Urn {
}

class Urns {
}

class Version {
}

