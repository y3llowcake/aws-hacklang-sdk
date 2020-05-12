<?hh // strict
namespace slack\aws\iotthingsgraph;

interface IoTThingsGraph {
  public function AssociateEntityToThing(AssociateEntityToThingRequest $in): Awaitable<\Errors\Result<AssociateEntityToThingResponse>>;
  public function CreateFlowTemplate(CreateFlowTemplateRequest $in): Awaitable<\Errors\Result<CreateFlowTemplateResponse>>;
  public function CreateSystemInstance(CreateSystemInstanceRequest $in): Awaitable<\Errors\Result<CreateSystemInstanceResponse>>;
  public function CreateSystemTemplate(CreateSystemTemplateRequest $in): Awaitable<\Errors\Result<CreateSystemTemplateResponse>>;
  public function DeleteFlowTemplate(DeleteFlowTemplateRequest $in): Awaitable<\Errors\Result<DeleteFlowTemplateResponse>>;
  public function DeleteNamespace(DeleteNamespaceRequest $in): Awaitable<\Errors\Result<DeleteNamespaceResponse>>;
  public function DeleteSystemInstance(DeleteSystemInstanceRequest $in): Awaitable<\Errors\Result<DeleteSystemInstanceResponse>>;
  public function DeleteSystemTemplate(DeleteSystemTemplateRequest $in): Awaitable<\Errors\Result<DeleteSystemTemplateResponse>>;
  public function DeploySystemInstance(DeploySystemInstanceRequest $in): Awaitable<\Errors\Result<DeploySystemInstanceResponse>>;
  public function DeprecateFlowTemplate(DeprecateFlowTemplateRequest $in): Awaitable<\Errors\Result<DeprecateFlowTemplateResponse>>;
  public function DeprecateSystemTemplate(DeprecateSystemTemplateRequest $in): Awaitable<\Errors\Result<DeprecateSystemTemplateResponse>>;
  public function DescribeNamespace(DescribeNamespaceRequest $in): Awaitable<\Errors\Result<DescribeNamespaceResponse>>;
  public function DissociateEntityFromThing(DissociateEntityFromThingRequest $in): Awaitable<\Errors\Result<DissociateEntityFromThingResponse>>;
  public function GetEntities(GetEntitiesRequest $in): Awaitable<\Errors\Result<GetEntitiesResponse>>;
  public function GetFlowTemplate(GetFlowTemplateRequest $in): Awaitable<\Errors\Result<GetFlowTemplateResponse>>;
  public function GetFlowTemplateRevisions(GetFlowTemplateRevisionsRequest $in): Awaitable<\Errors\Result<GetFlowTemplateRevisionsResponse>>;
  public function GetNamespaceDeletionStatus(GetNamespaceDeletionStatusRequest $in): Awaitable<\Errors\Result<GetNamespaceDeletionStatusResponse>>;
  public function GetSystemInstance(GetSystemInstanceRequest $in): Awaitable<\Errors\Result<GetSystemInstanceResponse>>;
  public function GetSystemTemplate(GetSystemTemplateRequest $in): Awaitable<\Errors\Result<GetSystemTemplateResponse>>;
  public function GetSystemTemplateRevisions(GetSystemTemplateRevisionsRequest $in): Awaitable<\Errors\Result<GetSystemTemplateRevisionsResponse>>;
  public function GetUploadStatus(GetUploadStatusRequest $in): Awaitable<\Errors\Result<GetUploadStatusResponse>>;
  public function ListFlowExecutionMessages(ListFlowExecutionMessagesRequest $in): Awaitable<\Errors\Result<ListFlowExecutionMessagesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function SearchEntities(SearchEntitiesRequest $in): Awaitable<\Errors\Result<SearchEntitiesResponse>>;
  public function SearchFlowExecutions(SearchFlowExecutionsRequest $in): Awaitable<\Errors\Result<SearchFlowExecutionsResponse>>;
  public function SearchFlowTemplates(SearchFlowTemplatesRequest $in): Awaitable<\Errors\Result<SearchFlowTemplatesResponse>>;
  public function SearchSystemInstances(SearchSystemInstancesRequest $in): Awaitable<\Errors\Result<SearchSystemInstancesResponse>>;
  public function SearchSystemTemplates(SearchSystemTemplatesRequest $in): Awaitable<\Errors\Result<SearchSystemTemplatesResponse>>;
  public function SearchThings(SearchThingsRequest $in): Awaitable<\Errors\Result<SearchThingsResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UndeploySystemInstance(UndeploySystemInstanceRequest $in): Awaitable<\Errors\Result<UndeploySystemInstanceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateFlowTemplate(UpdateFlowTemplateRequest $in): Awaitable<\Errors\Result<UpdateFlowTemplateResponse>>;
  public function UpdateSystemTemplate(UpdateSystemTemplateRequest $in): Awaitable<\Errors\Result<UpdateSystemTemplateResponse>>;
  public function UploadEntityDefinitions(UploadEntityDefinitionsRequest $in): Awaitable<\Errors\Result<UploadEntityDefinitionsResponse>>;
}

type Arn = string;

class AssociateEntityToThingRequest {
  public ?Urn $entity_id;
  public ?Version $namespace_version;
  public ?ThingName $thing_name;

  public function __construct(shape(
    ?'entity_id' => ?Urn,
    ?'namespace_version' => ?Version,
    ?'thing_name' => ?ThingName,
  ) $s = shape()) {
    $this->entity_id = $s['entity_id'] ?? '';
    $this->namespace_version = $s['namespace_version'] ?? 0;
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

class AssociateEntityToThingResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateFlowTemplateRequest {
  public ?Version $compatible_namespace_version;
  public ?DefinitionDocument $definition;

  public function __construct(shape(
    ?'compatible_namespace_version' => ?Version,
    ?'definition' => ?DefinitionDocument,
  ) $s = shape()) {
    $this->compatible_namespace_version = $s['compatible_namespace_version'] ?? 0;
    $this->definition = $s['definition'] ?? null;
  }
}

class CreateFlowTemplateResponse {
  public ?FlowTemplateSummary $summary;

  public function __construct(shape(
    ?'summary' => ?FlowTemplateSummary,
  ) $s = shape()) {
    $this->summary = $s['summary'] ?? null;
  }
}

class CreateSystemInstanceRequest {
  public ?DefinitionDocument $definition;
  public ?RoleArn $flow_actions_role_arn;
  public ?GroupName $greengrass_group_name;
  public ?MetricsConfiguration $metrics_configuration;
  public ?S3BucketName $s_3_bucket_name;
  public ?TagList $tags;
  public ?DeploymentTarget $target;

  public function __construct(shape(
    ?'definition' => ?DefinitionDocument,
    ?'flow_actions_role_arn' => ?RoleArn,
    ?'greengrass_group_name' => ?GroupName,
    ?'metrics_configuration' => ?MetricsConfiguration,
    ?'s_3_bucket_name' => ?S3BucketName,
    ?'tags' => ?TagList,
    ?'target' => ?DeploymentTarget,
  ) $s = shape()) {
    $this->definition = $s['definition'] ?? null;
    $this->flow_actions_role_arn = $s['flow_actions_role_arn'] ?? '';
    $this->greengrass_group_name = $s['greengrass_group_name'] ?? '';
    $this->metrics_configuration = $s['metrics_configuration'] ?? null;
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target = $s['target'] ?? '';
  }
}

class CreateSystemInstanceResponse {
  public ?SystemInstanceSummary $summary;

  public function __construct(shape(
    ?'summary' => ?SystemInstanceSummary,
  ) $s = shape()) {
    $this->summary = $s['summary'] ?? null;
  }
}

class CreateSystemTemplateRequest {
  public ?Version $compatible_namespace_version;
  public ?DefinitionDocument $definition;

  public function __construct(shape(
    ?'compatible_namespace_version' => ?Version,
    ?'definition' => ?DefinitionDocument,
  ) $s = shape()) {
    $this->compatible_namespace_version = $s['compatible_namespace_version'] ?? 0;
    $this->definition = $s['definition'] ?? null;
  }
}

class CreateSystemTemplateResponse {
  public ?SystemTemplateSummary $summary;

  public function __construct(shape(
    ?'summary' => ?SystemTemplateSummary,
  ) $s = shape()) {
    $this->summary = $s['summary'] ?? null;
  }
}

class DefinitionDocument {
  public ?DefinitionLanguage $language;
  public ?DefinitionText $text;

  public function __construct(shape(
    ?'language' => ?DefinitionLanguage,
    ?'text' => ?DefinitionText,
  ) $s = shape()) {
    $this->language = $s['language'] ?? '';
    $this->text = $s['text'] ?? '';
  }
}

type DefinitionLanguage = string;

type DefinitionText = string;

class DeleteFlowTemplateRequest {
  public ?Urn $id;

  public function __construct(shape(
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteFlowTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteNamespaceRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteNamespaceResponse {
  public ?Arn $namespace_arn;
  public ?NamespaceName $namespace_name;

  public function __construct(shape(
    ?'namespace_arn' => ?Arn,
    ?'namespace_name' => ?NamespaceName,
  ) $s = shape()) {
    $this->namespace_arn = $s['namespace_arn'] ?? '';
    $this->namespace_name = $s['namespace_name'] ?? '';
  }
}

class DeleteSystemInstanceRequest {
  public ?Urn $id;

  public function __construct(shape(
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteSystemInstanceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSystemTemplateRequest {
  public ?Urn $id;

  public function __construct(shape(
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteSystemTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DependencyRevision {
  public ?Urn $id;
  public ?Version $revision_number;

  public function __construct(shape(
    ?'id' => ?Urn,
    ?'revision_number' => ?Version,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->revision_number = $s['revision_number'] ?? 0;
  }
}

type DependencyRevisions = vec<DependencyRevision>;

class DeploySystemInstanceRequest {
  public ?Urn $id;

  public function __construct(shape(
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeploySystemInstanceResponse {
  public ?GreengrassDeploymentId $greengrass_deployment_id;
  public ?SystemInstanceSummary $summary;

  public function __construct(shape(
    ?'greengrass_deployment_id' => ?GreengrassDeploymentId,
    ?'summary' => ?SystemInstanceSummary,
  ) $s = shape()) {
    $this->greengrass_deployment_id = $s['greengrass_deployment_id'] ?? '';
    $this->summary = $s['summary'] ?? null;
  }
}

type DeploymentTarget = string;

type DeprecateExistingEntities = bool;

class DeprecateFlowTemplateRequest {
  public ?Urn $id;

  public function __construct(shape(
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeprecateFlowTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeprecateSystemTemplateRequest {
  public ?Urn $id;

  public function __construct(shape(
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeprecateSystemTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeNamespaceRequest {
  public ?NamespaceName $namespace_name;

  public function __construct(shape(
    ?'namespace_name' => ?NamespaceName,
  ) $s = shape()) {
    $this->namespace_name = $s['namespace_name'] ?? '';
  }
}

class DescribeNamespaceResponse {
  public ?Arn $namespace_arn;
  public ?NamespaceName $namespace_name;
  public ?Version $namespace_version;
  public ?NamespaceName $tracking_namespace_name;
  public ?Version $tracking_namespace_version;

  public function __construct(shape(
    ?'namespace_arn' => ?Arn,
    ?'namespace_name' => ?NamespaceName,
    ?'namespace_version' => ?Version,
    ?'tracking_namespace_name' => ?NamespaceName,
    ?'tracking_namespace_version' => ?Version,
  ) $s = shape()) {
    $this->namespace_arn = $s['namespace_arn'] ?? '';
    $this->namespace_name = $s['namespace_name'] ?? '';
    $this->namespace_version = $s['namespace_version'] ?? 0;
    $this->tracking_namespace_name = $s['tracking_namespace_name'] ?? '';
    $this->tracking_namespace_version = $s['tracking_namespace_version'] ?? 0;
  }
}

class DissociateEntityFromThingRequest {
  public ?EntityType $entity_type;
  public ?ThingName $thing_name;

  public function __construct(shape(
    ?'entity_type' => ?EntityType,
    ?'thing_name' => ?ThingName,
  ) $s = shape()) {
    $this->entity_type = $s['entity_type'] ?? '';
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

class DissociateEntityFromThingResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Enabled = bool;

class EntityDescription {
  public ?Arn $arn;
  public ?Timestamp $created_at;
  public ?DefinitionDocument $definition;
  public ?Urn $id;
  public ?EntityType $type;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'definition' => ?DefinitionDocument,
    ?'id' => ?Urn,
    ?'type' => ?EntityType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type EntityDescriptions = vec<EntityDescription>;

class EntityFilter {
  public ?EntityFilterName $name;
  public ?EntityFilterValues $value;

  public function __construct(shape(
    ?'name' => ?EntityFilterName,
    ?'value' => ?EntityFilterValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? vec[];
  }
}

type EntityFilterName = string;

type EntityFilterValue = string;

type EntityFilterValues = vec<EntityFilterValue>;

type EntityFilters = vec<EntityFilter>;

type EntityType = string;

type EntityTypes = vec<EntityType>;

type ErrorMessage = string;

type FlowExecutionEventType = string;

type FlowExecutionId = string;

class FlowExecutionMessage {
  public ?FlowExecutionEventType $event_type;
  public ?FlowExecutionMessageId $message_id;
  public ?FlowExecutionMessagePayload $payload;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'event_type' => ?FlowExecutionEventType,
    ?'message_id' => ?FlowExecutionMessageId,
    ?'payload' => ?FlowExecutionMessagePayload,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->event_type = $s['event_type'] ?? '';
    $this->message_id = $s['message_id'] ?? '';
    $this->payload = $s['payload'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type FlowExecutionMessageId = string;

type FlowExecutionMessagePayload = string;

type FlowExecutionMessages = vec<FlowExecutionMessage>;

type FlowExecutionStatus = string;

type FlowExecutionSummaries = vec<FlowExecutionSummary>;

class FlowExecutionSummary {
  public ?Timestamp $created_at;
  public ?FlowExecutionId $flow_execution_id;
  public ?Urn $flow_template_id;
  public ?FlowExecutionStatus $status;
  public ?Urn $system_instance_id;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'flow_execution_id' => ?FlowExecutionId,
    ?'flow_template_id' => ?Urn,
    ?'status' => ?FlowExecutionStatus,
    ?'system_instance_id' => ?Urn,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->flow_execution_id = $s['flow_execution_id'] ?? '';
    $this->flow_template_id = $s['flow_template_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->system_instance_id = $s['system_instance_id'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class FlowTemplateDescription {
  public ?DefinitionDocument $definition;
  public ?FlowTemplateSummary $summary;
  public ?Version $validated_namespace_version;

  public function __construct(shape(
    ?'definition' => ?DefinitionDocument,
    ?'summary' => ?FlowTemplateSummary,
    ?'validated_namespace_version' => ?Version,
  ) $s = shape()) {
    $this->definition = $s['definition'] ?? null;
    $this->summary = $s['summary'] ?? null;
    $this->validated_namespace_version = $s['validated_namespace_version'] ?? 0;
  }
}

class FlowTemplateFilter {
  public ?FlowTemplateFilterName $name;
  public ?FlowTemplateFilterValues $value;

  public function __construct(shape(
    ?'name' => ?FlowTemplateFilterName,
    ?'value' => ?FlowTemplateFilterValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? vec[];
  }
}

type FlowTemplateFilterName = string;

type FlowTemplateFilterValue = string;

type FlowTemplateFilterValues = vec<FlowTemplateFilterValue>;

type FlowTemplateFilters = vec<FlowTemplateFilter>;

type FlowTemplateSummaries = vec<FlowTemplateSummary>;

class FlowTemplateSummary {
  public ?Arn $arn;
  public ?Timestamp $created_at;
  public ?Urn $id;
  public ?Version $revision_number;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'id' => ?Urn,
    ?'revision_number' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->revision_number = $s['revision_number'] ?? 0;
  }
}

class GetEntitiesRequest {
  public ?Urns $ids;
  public ?Version $namespace_version;

  public function __construct(shape(
    ?'ids' => ?Urns,
    ?'namespace_version' => ?Version,
  ) $s = shape()) {
    $this->ids = $s['ids'] ?? vec[];
    $this->namespace_version = $s['namespace_version'] ?? 0;
  }
}

class GetEntitiesResponse {
  public ?EntityDescriptions $descriptions;

  public function __construct(shape(
    ?'descriptions' => ?EntityDescriptions,
  ) $s = shape()) {
    $this->descriptions = $s['descriptions'] ?? vec[];
  }
}

class GetFlowTemplateRequest {
  public ?Urn $id;
  public ?Version $revision_number;

  public function __construct(shape(
    ?'id' => ?Urn,
    ?'revision_number' => ?Version,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->revision_number = $s['revision_number'] ?? 0;
  }
}

class GetFlowTemplateResponse {
  public ?FlowTemplateDescription $description;

  public function __construct(shape(
    ?'description' => ?FlowTemplateDescription,
  ) $s = shape()) {
    $this->description = $s['description'] ?? null;
  }
}

class GetFlowTemplateRevisionsRequest {
  public ?Urn $id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'id' => ?Urn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetFlowTemplateRevisionsResponse {
  public ?NextToken $next_token;
  public ?FlowTemplateSummaries $summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'summaries' => ?FlowTemplateSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->summaries = $s['summaries'] ?? vec[];
  }
}

class GetNamespaceDeletionStatusRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetNamespaceDeletionStatusResponse {
  public ?NamespaceDeletionStatusErrorCodes $error_code;
  public string $error_message;
  public ?Arn $namespace_arn;
  public ?NamespaceName $namespace_name;
  public ?NamespaceDeletionStatus $status;

  public function __construct(shape(
    ?'error_code' => ?NamespaceDeletionStatusErrorCodes,
    ?'error_message' => string,
    ?'namespace_arn' => ?Arn,
    ?'namespace_name' => ?NamespaceName,
    ?'status' => ?NamespaceDeletionStatus,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->namespace_arn = $s['namespace_arn'] ?? '';
    $this->namespace_name = $s['namespace_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class GetSystemInstanceRequest {
  public ?Urn $id;

  public function __construct(shape(
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class GetSystemInstanceResponse {
  public ?SystemInstanceDescription $description;

  public function __construct(shape(
    ?'description' => ?SystemInstanceDescription,
  ) $s = shape()) {
    $this->description = $s['description'] ?? null;
  }
}

class GetSystemTemplateRequest {
  public ?Urn $id;
  public ?Version $revision_number;

  public function __construct(shape(
    ?'id' => ?Urn,
    ?'revision_number' => ?Version,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->revision_number = $s['revision_number'] ?? 0;
  }
}

class GetSystemTemplateResponse {
  public ?SystemTemplateDescription $description;

  public function __construct(shape(
    ?'description' => ?SystemTemplateDescription,
  ) $s = shape()) {
    $this->description = $s['description'] ?? null;
  }
}

class GetSystemTemplateRevisionsRequest {
  public ?Urn $id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'id' => ?Urn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetSystemTemplateRevisionsResponse {
  public ?NextToken $next_token;
  public ?SystemTemplateSummaries $summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'summaries' => ?SystemTemplateSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->summaries = $s['summaries'] ?? vec[];
  }
}

class GetUploadStatusRequest {
  public ?UploadId $upload_id;

  public function __construct(shape(
    ?'upload_id' => ?UploadId,
  ) $s = shape()) {
    $this->upload_id = $s['upload_id'] ?? '';
  }
}

class GetUploadStatusResponse {
  public ?Timestamp $created_date;
  public ?StringList $failure_reason;
  public ?Arn $namespace_arn;
  public ?NamespaceName $namespace_name;
  public ?Version $namespace_version;
  public ?UploadId $upload_id;
  public ?UploadStatus $upload_status;

  public function __construct(shape(
    ?'created_date' => ?Timestamp,
    ?'failure_reason' => ?StringList,
    ?'namespace_arn' => ?Arn,
    ?'namespace_name' => ?NamespaceName,
    ?'namespace_version' => ?Version,
    ?'upload_id' => ?UploadId,
    ?'upload_status' => ?UploadStatus,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? vec[];
    $this->namespace_arn = $s['namespace_arn'] ?? '';
    $this->namespace_name = $s['namespace_name'] ?? '';
    $this->namespace_version = $s['namespace_version'] ?? 0;
    $this->upload_id = $s['upload_id'] ?? '';
    $this->upload_status = $s['upload_status'] ?? '';
  }
}

type GreengrassDeploymentId = string;

type GreengrassGroupId = string;

type GreengrassGroupVersionId = string;

type GroupName = string;

class InternalFailureException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListFlowExecutionMessagesRequest {
  public ?FlowExecutionId $flow_execution_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'flow_execution_id' => ?FlowExecutionId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->flow_execution_id = $s['flow_execution_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFlowExecutionMessagesResponse {
  public ?FlowExecutionMessages $messages;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'messages' => ?FlowExecutionMessages,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->messages = $s['messages'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?NextToken $next_token;
  public ?TagList $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type MaxResults = int;

class MetricsConfiguration {
  public ?Enabled $cloud_metric_enabled;
  public ?RoleArn $metric_rule_role_arn;

  public function __construct(shape(
    ?'cloud_metric_enabled' => ?Enabled,
    ?'metric_rule_role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->cloud_metric_enabled = $s['cloud_metric_enabled'] ?? false;
    $this->metric_rule_role_arn = $s['metric_rule_role_arn'] ?? '';
  }
}

type NamespaceDeletionStatus = string;

type NamespaceDeletionStatusErrorCodes = string;

type NamespaceName = string;

type NextToken = string;

class ResourceAlreadyExistsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceArn = string;

class ResourceInUseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RoleArn = string;

type S3BucketName = string;

class SearchEntitiesRequest {
  public ?EntityTypes $entity_types;
  public ?EntityFilters $filters;
  public ?MaxResults $max_results;
  public ?Version $namespace_version;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'entity_types' => ?EntityTypes,
    ?'filters' => ?EntityFilters,
    ?'max_results' => ?MaxResults,
    ?'namespace_version' => ?Version,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->entity_types = $s['entity_types'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->namespace_version = $s['namespace_version'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SearchEntitiesResponse {
  public ?EntityDescriptions $descriptions;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'descriptions' => ?EntityDescriptions,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->descriptions = $s['descriptions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SearchFlowExecutionsRequest {
  public ?Timestamp $end_time;
  public ?FlowExecutionId $flow_execution_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?Timestamp $start_time;
  public ?Urn $system_instance_id;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'flow_execution_id' => ?FlowExecutionId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'start_time' => ?Timestamp,
    ?'system_instance_id' => ?Urn,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->flow_execution_id = $s['flow_execution_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->system_instance_id = $s['system_instance_id'] ?? '';
  }
}

class SearchFlowExecutionsResponse {
  public ?NextToken $next_token;
  public ?FlowExecutionSummaries $summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'summaries' => ?FlowExecutionSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->summaries = $s['summaries'] ?? vec[];
  }
}

class SearchFlowTemplatesRequest {
  public ?FlowTemplateFilters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?FlowTemplateFilters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SearchFlowTemplatesResponse {
  public ?NextToken $next_token;
  public ?FlowTemplateSummaries $summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'summaries' => ?FlowTemplateSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->summaries = $s['summaries'] ?? vec[];
  }
}

class SearchSystemInstancesRequest {
  public ?SystemInstanceFilters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?SystemInstanceFilters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SearchSystemInstancesResponse {
  public ?NextToken $next_token;
  public ?SystemInstanceSummaries $summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'summaries' => ?SystemInstanceSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->summaries = $s['summaries'] ?? vec[];
  }
}

class SearchSystemTemplatesRequest {
  public ?SystemTemplateFilters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?SystemTemplateFilters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SearchSystemTemplatesResponse {
  public ?NextToken $next_token;
  public ?SystemTemplateSummaries $summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'summaries' => ?SystemTemplateSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->summaries = $s['summaries'] ?? vec[];
  }
}

class SearchThingsRequest {
  public ?Urn $entity_id;
  public ?MaxResults $max_results;
  public ?Version $namespace_version;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'entity_id' => ?Urn,
    ?'max_results' => ?MaxResults,
    ?'namespace_version' => ?Version,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->entity_id = $s['entity_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->namespace_version = $s['namespace_version'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SearchThingsResponse {
  public ?NextToken $next_token;
  public ?Things $things;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'things' => ?Things,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->things = $s['things'] ?? vec[];
  }
}

type String = string;

type StringList = vec<String>;

type SyncWithPublicNamespace = bool;

type SystemInstanceDeploymentStatus = string;

class SystemInstanceDescription {
  public ?DefinitionDocument $definition;
  public ?RoleArn $flow_actions_role_arn;
  public ?MetricsConfiguration $metrics_configuration;
  public ?S3BucketName $s_3_bucket_name;
  public ?SystemInstanceSummary $summary;
  public ?DependencyRevisions $validated_dependency_revisions;
  public ?Version $validated_namespace_version;

  public function __construct(shape(
    ?'definition' => ?DefinitionDocument,
    ?'flow_actions_role_arn' => ?RoleArn,
    ?'metrics_configuration' => ?MetricsConfiguration,
    ?'s_3_bucket_name' => ?S3BucketName,
    ?'summary' => ?SystemInstanceSummary,
    ?'validated_dependency_revisions' => ?DependencyRevisions,
    ?'validated_namespace_version' => ?Version,
  ) $s = shape()) {
    $this->definition = $s['definition'] ?? null;
    $this->flow_actions_role_arn = $s['flow_actions_role_arn'] ?? '';
    $this->metrics_configuration = $s['metrics_configuration'] ?? null;
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->summary = $s['summary'] ?? null;
    $this->validated_dependency_revisions = $s['validated_dependency_revisions'] ?? vec[];
    $this->validated_namespace_version = $s['validated_namespace_version'] ?? 0;
  }
}

class SystemInstanceFilter {
  public ?SystemInstanceFilterName $name;
  public ?SystemInstanceFilterValues $value;

  public function __construct(shape(
    ?'name' => ?SystemInstanceFilterName,
    ?'value' => ?SystemInstanceFilterValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? vec[];
  }
}

type SystemInstanceFilterName = string;

type SystemInstanceFilterValue = string;

type SystemInstanceFilterValues = vec<SystemInstanceFilterValue>;

type SystemInstanceFilters = vec<SystemInstanceFilter>;

type SystemInstanceSummaries = vec<SystemInstanceSummary>;

class SystemInstanceSummary {
  public ?Arn $arn;
  public ?Timestamp $created_at;
  public ?GreengrassGroupId $greengrass_group_id;
  public ?GroupName $greengrass_group_name;
  public ?GreengrassGroupVersionId $greengrass_group_version_id;
  public ?Urn $id;
  public ?SystemInstanceDeploymentStatus $status;
  public ?DeploymentTarget $target;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'greengrass_group_id' => ?GreengrassGroupId,
    ?'greengrass_group_name' => ?GroupName,
    ?'greengrass_group_version_id' => ?GreengrassGroupVersionId,
    ?'id' => ?Urn,
    ?'status' => ?SystemInstanceDeploymentStatus,
    ?'target' => ?DeploymentTarget,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->greengrass_group_id = $s['greengrass_group_id'] ?? '';
    $this->greengrass_group_name = $s['greengrass_group_name'] ?? '';
    $this->greengrass_group_version_id = $s['greengrass_group_version_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->target = $s['target'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class SystemTemplateDescription {
  public ?DefinitionDocument $definition;
  public ?SystemTemplateSummary $summary;
  public ?Version $validated_namespace_version;

  public function __construct(shape(
    ?'definition' => ?DefinitionDocument,
    ?'summary' => ?SystemTemplateSummary,
    ?'validated_namespace_version' => ?Version,
  ) $s = shape()) {
    $this->definition = $s['definition'] ?? null;
    $this->summary = $s['summary'] ?? null;
    $this->validated_namespace_version = $s['validated_namespace_version'] ?? 0;
  }
}

class SystemTemplateFilter {
  public ?SystemTemplateFilterName $name;
  public ?SystemTemplateFilterValues $value;

  public function __construct(shape(
    ?'name' => ?SystemTemplateFilterName,
    ?'value' => ?SystemTemplateFilterValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? vec[];
  }
}

type SystemTemplateFilterName = string;

type SystemTemplateFilterValue = string;

type SystemTemplateFilterValues = vec<SystemTemplateFilterValue>;

type SystemTemplateFilters = vec<SystemTemplateFilter>;

type SystemTemplateSummaries = vec<SystemTemplateSummary>;

class SystemTemplateSummary {
  public ?Arn $arn;
  public ?Timestamp $created_at;
  public ?Urn $id;
  public ?Version $revision_number;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'id' => ?Urn,
    ?'revision_number' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->revision_number = $s['revision_number'] ?? 0;
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

class TagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class Thing {
  public ?ThingArn $thing_arn;
  public ?ThingName $thing_name;

  public function __construct(shape(
    ?'thing_arn' => ?ThingArn,
    ?'thing_name' => ?ThingName,
  ) $s = shape()) {
    $this->thing_arn = $s['thing_arn'] ?? '';
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

type ThingArn = string;

type ThingName = string;

type Things = vec<Thing>;

class ThrottlingException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Timestamp = int;

class UndeploySystemInstanceRequest {
  public ?Urn $id;

  public function __construct(shape(
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class UndeploySystemInstanceResponse {
  public ?SystemInstanceSummary $summary;

  public function __construct(shape(
    ?'summary' => ?SystemInstanceSummary,
  ) $s = shape()) {
    $this->summary = $s['summary'] ?? null;
  }
}

class UntagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateFlowTemplateRequest {
  public ?Version $compatible_namespace_version;
  public ?DefinitionDocument $definition;
  public ?Urn $id;

  public function __construct(shape(
    ?'compatible_namespace_version' => ?Version,
    ?'definition' => ?DefinitionDocument,
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->compatible_namespace_version = $s['compatible_namespace_version'] ?? 0;
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
  }
}

class UpdateFlowTemplateResponse {
  public ?FlowTemplateSummary $summary;

  public function __construct(shape(
    ?'summary' => ?FlowTemplateSummary,
  ) $s = shape()) {
    $this->summary = $s['summary'] ?? null;
  }
}

class UpdateSystemTemplateRequest {
  public ?Version $compatible_namespace_version;
  public ?DefinitionDocument $definition;
  public ?Urn $id;

  public function __construct(shape(
    ?'compatible_namespace_version' => ?Version,
    ?'definition' => ?DefinitionDocument,
    ?'id' => ?Urn,
  ) $s = shape()) {
    $this->compatible_namespace_version = $s['compatible_namespace_version'] ?? 0;
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
  }
}

class UpdateSystemTemplateResponse {
  public ?SystemTemplateSummary $summary;

  public function __construct(shape(
    ?'summary' => ?SystemTemplateSummary,
  ) $s = shape()) {
    $this->summary = $s['summary'] ?? null;
  }
}

class UploadEntityDefinitionsRequest {
  public ?DeprecateExistingEntities $deprecate_existing_entities;
  public ?DefinitionDocument $document;
  public ?SyncWithPublicNamespace $sync_with_public_namespace;

  public function __construct(shape(
    ?'deprecate_existing_entities' => ?DeprecateExistingEntities,
    ?'document' => ?DefinitionDocument,
    ?'sync_with_public_namespace' => ?SyncWithPublicNamespace,
  ) $s = shape()) {
    $this->deprecate_existing_entities = $s['deprecate_existing_entities'] ?? false;
    $this->document = $s['document'] ?? null;
    $this->sync_with_public_namespace = $s['sync_with_public_namespace'] ?? false;
  }
}

class UploadEntityDefinitionsResponse {
  public ?UploadId $upload_id;

  public function __construct(shape(
    ?'upload_id' => ?UploadId,
  ) $s = shape()) {
    $this->upload_id = $s['upload_id'] ?? '';
  }
}

type UploadId = string;

type UploadStatus = string;

type Urn = string;

type Urns = vec<Urn>;

type Version = int;

