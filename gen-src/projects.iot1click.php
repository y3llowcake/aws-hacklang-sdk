<?hh // strict
namespace slack\aws\projects.iot1click;

interface IoT 1Click Projects {
  public function AssociateDeviceWithPlacement(AssociateDeviceWithPlacementRequest): Awaitable<Errors\Result<AssociateDeviceWithPlacementResponse>>;
  public function CreatePlacement(CreatePlacementRequest): Awaitable<Errors\Result<CreatePlacementResponse>>;
  public function CreateProject(CreateProjectRequest): Awaitable<Errors\Result<CreateProjectResponse>>;
  public function DeletePlacement(DeletePlacementRequest): Awaitable<Errors\Result<DeletePlacementResponse>>;
  public function DeleteProject(DeleteProjectRequest): Awaitable<Errors\Result<DeleteProjectResponse>>;
  public function DescribePlacement(DescribePlacementRequest): Awaitable<Errors\Result<DescribePlacementResponse>>;
  public function DescribeProject(DescribeProjectRequest): Awaitable<Errors\Result<DescribeProjectResponse>>;
  public function DisassociateDeviceFromPlacement(DisassociateDeviceFromPlacementRequest): Awaitable<Errors\Result<DisassociateDeviceFromPlacementResponse>>;
  public function GetDevicesInPlacement(GetDevicesInPlacementRequest): Awaitable<Errors\Result<GetDevicesInPlacementResponse>>;
  public function ListPlacements(ListPlacementsRequest): Awaitable<Errors\Result<ListPlacementsResponse>>;
  public function ListProjects(ListProjectsRequest): Awaitable<Errors\Result<ListProjectsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdatePlacement(UpdatePlacementRequest): Awaitable<Errors\Result<UpdatePlacementResponse>>;
  public function UpdateProject(UpdateProjectRequest): Awaitable<Errors\Result<UpdateProjectResponse>>;
}

class AssociateDeviceWithPlacementRequest {
  public DeviceId $device_id;
  public DeviceTemplateName $device_template_name;
  public PlacementName $placement_name;
  public ProjectName $project_name;

  public function __construct(shape(
  ?'device_id' => DeviceId,
  ?'device_template_name' => DeviceTemplateName,
  ?'placement_name' => PlacementName,
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->device_id = $device_id ?? ;
    $this->device_template_name = $device_template_name ?? ;
    $this->placement_name = $placement_name ?? ;
    $this->project_name = $project_name ?? ;
  }
}

class AssociateDeviceWithPlacementResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AttributeDefaultValue = string;

type AttributeName = string;

type AttributeValue = string;

type Code = string;

class CreatePlacementRequest {
  public PlacementAttributeMap $attributes;
  public PlacementName $placement_name;
  public ProjectName $project_name;

  public function __construct(shape(
  ?'attributes' => PlacementAttributeMap,
  ?'placement_name' => PlacementName,
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->placement_name = $placement_name ?? ;
    $this->project_name = $project_name ?? ;
  }
}

class CreatePlacementResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateProjectRequest {
  public Description $description;
  public PlacementTemplate $placement_template;
  public ProjectName $project_name;
  public TagMap $tags;

  public function __construct(shape(
  ?'description' => Description,
  ?'placement_template' => PlacementTemplate,
  ?'project_name' => ProjectName,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->placement_template = $placement_template ?? ;
    $this->project_name = $project_name ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateProjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DefaultPlacementAttributeMap = dict<AttributeName, AttributeDefaultValue>;

class DeletePlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;

  public function __construct(shape(
  ?'placement_name' => PlacementName,
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->placement_name = $placement_name ?? ;
    $this->project_name = $project_name ?? ;
  }
}

class DeletePlacementResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteProjectRequest {
  public ProjectName $project_name;

  public function __construct(shape(
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->project_name = $project_name ?? ;
  }
}

class DeleteProjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribePlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;

  public function __construct(shape(
  ?'placement_name' => PlacementName,
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->placement_name = $placement_name ?? ;
    $this->project_name = $project_name ?? ;
  }
}

class DescribePlacementResponse {
  public PlacementDescription $placement;

  public function __construct(shape(
  ?'placement' => PlacementDescription,
  ) $s = shape()) {
    $this->placement = $placement ?? ;
  }
}

class DescribeProjectRequest {
  public ProjectName $project_name;

  public function __construct(shape(
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->project_name = $project_name ?? ;
  }
}

class DescribeProjectResponse {
  public ProjectDescription $project;

  public function __construct(shape(
  ?'project' => ProjectDescription,
  ) $s = shape()) {
    $this->project = $project ?? ;
  }
}

type Description = string;

type DeviceCallbackKey = string;

type DeviceCallbackOverrideMap = dict<DeviceCallbackKey, DeviceCallbackValue>;

type DeviceCallbackValue = string;

type DeviceId = string;

type DeviceMap = dict<DeviceTemplateName, DeviceId>;

class DeviceTemplate {
  public DeviceCallbackOverrideMap $callback_overrides;
  public DeviceType $device_type;

  public function __construct(shape(
  ?'callback_overrides' => DeviceCallbackOverrideMap,
  ?'device_type' => DeviceType,
  ) $s = shape()) {
    $this->callback_overrides = $callback_overrides ?? ;
    $this->device_type = $device_type ?? ;
  }
}

type DeviceTemplateMap = dict<DeviceTemplateName, DeviceTemplate>;

type DeviceTemplateName = string;

type DeviceType = string;

class DisassociateDeviceFromPlacementRequest {
  public DeviceTemplateName $device_template_name;
  public PlacementName $placement_name;
  public ProjectName $project_name;

  public function __construct(shape(
  ?'device_template_name' => DeviceTemplateName,
  ?'placement_name' => PlacementName,
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->device_template_name = $device_template_name ?? ;
    $this->placement_name = $placement_name ?? ;
    $this->project_name = $project_name ?? ;
  }
}

class DisassociateDeviceFromPlacementResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetDevicesInPlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;

  public function __construct(shape(
  ?'placement_name' => PlacementName,
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->placement_name = $placement_name ?? ;
    $this->project_name = $project_name ?? ;
  }
}

class GetDevicesInPlacementResponse {
  public DeviceMap $devices;

  public function __construct(shape(
  ?'devices' => DeviceMap,
  ) $s = shape()) {
    $this->devices = $devices ?? ;
  }
}

class InternalFailureException {
  public Code $code;
  public Message $message;

  public function __construct(shape(
  ?'code' => Code,
  ?'message' => Message,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public Code $code;
  public Message $message;

  public function __construct(shape(
  ?'code' => Code,
  ?'message' => Message,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class ListPlacementsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ProjectName $project_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->project_name = $project_name ?? ;
  }
}

class ListPlacementsResponse {
  public NextToken $next_token;
  public PlacementSummaryList $placements;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'placements' => PlacementSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->placements = $placements ?? ;
  }
}

class ListProjectsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListProjectsResponse {
  public NextToken $next_token;
  public ProjectSummaryList $projects;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'projects' => ProjectSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->projects = $projects ?? ;
  }
}

class ListTagsForResourceRequest {
  public ProjectArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ProjectArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

type MaxResults = int;

type Message = string;

type NextToken = string;

type PlacementAttributeMap = dict<AttributeName, AttributeValue>;

class PlacementDescription {
  public PlacementAttributeMap $attributes;
  public Time $created_date;
  public PlacementName $placement_name;
  public ProjectName $project_name;
  public Time $updated_date;

  public function __construct(shape(
  ?'attributes' => PlacementAttributeMap,
  ?'created_date' => Time,
  ?'placement_name' => PlacementName,
  ?'project_name' => ProjectName,
  ?'updated_date' => Time,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->created_date = $created_date ?? ;
    $this->placement_name = $placement_name ?? ;
    $this->project_name = $project_name ?? ;
    $this->updated_date = $updated_date ?? ;
  }
}

type PlacementName = string;

class PlacementSummary {
  public Time $created_date;
  public PlacementName $placement_name;
  public ProjectName $project_name;
  public Time $updated_date;

  public function __construct(shape(
  ?'created_date' => Time,
  ?'placement_name' => PlacementName,
  ?'project_name' => ProjectName,
  ?'updated_date' => Time,
  ) $s = shape()) {
    $this->created_date = $created_date ?? ;
    $this->placement_name = $placement_name ?? ;
    $this->project_name = $project_name ?? ;
    $this->updated_date = $updated_date ?? ;
  }
}

type PlacementSummaryList = vec<PlacementSummary>;

class PlacementTemplate {
  public DefaultPlacementAttributeMap $default_attributes;
  public DeviceTemplateMap $device_templates;

  public function __construct(shape(
  ?'default_attributes' => DefaultPlacementAttributeMap,
  ?'device_templates' => DeviceTemplateMap,
  ) $s = shape()) {
    $this->default_attributes = $default_attributes ?? ;
    $this->device_templates = $device_templates ?? ;
  }
}

type ProjectArn = string;

class ProjectDescription {
  public ProjectArn $arn;
  public Time $created_date;
  public Description $description;
  public PlacementTemplate $placement_template;
  public ProjectName $project_name;
  public TagMap $tags;
  public Time $updated_date;

  public function __construct(shape(
  ?'arn' => ProjectArn,
  ?'created_date' => Time,
  ?'description' => Description,
  ?'placement_template' => PlacementTemplate,
  ?'project_name' => ProjectName,
  ?'tags' => TagMap,
  ?'updated_date' => Time,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created_date = $created_date ?? ;
    $this->description = $description ?? ;
    $this->placement_template = $placement_template ?? ;
    $this->project_name = $project_name ?? ;
    $this->tags = $tags ?? ;
    $this->updated_date = $updated_date ?? ;
  }
}

type ProjectName = string;

class ProjectSummary {
  public ProjectArn $arn;
  public Time $created_date;
  public ProjectName $project_name;
  public TagMap $tags;
  public Time $updated_date;

  public function __construct(shape(
  ?'arn' => ProjectArn,
  ?'created_date' => Time,
  ?'project_name' => ProjectName,
  ?'tags' => TagMap,
  ?'updated_date' => Time,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created_date = $created_date ?? ;
    $this->project_name = $project_name ?? ;
    $this->tags = $tags ?? ;
    $this->updated_date = $updated_date ?? ;
  }
}

type ProjectSummaryList = vec<ProjectSummary>;

class ResourceConflictException {
  public Code $code;
  public Message $message;

  public function __construct(shape(
  ?'code' => Code,
  ?'message' => Message,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public Code $code;
  public Message $message;

  public function __construct(shape(
  ?'code' => Code,
  ?'message' => Message,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ProjectArn $resource_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn' => ProjectArn,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Time = int;

class TooManyRequestsException {
  public Code $code;
  public Message $message;

  public function __construct(shape(
  ?'code' => Code,
  ?'message' => Message,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class UntagResourceRequest {
  public ProjectArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ProjectArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdatePlacementRequest {
  public PlacementAttributeMap $attributes;
  public PlacementName $placement_name;
  public ProjectName $project_name;

  public function __construct(shape(
  ?'attributes' => PlacementAttributeMap,
  ?'placement_name' => PlacementName,
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->placement_name = $placement_name ?? ;
    $this->project_name = $project_name ?? ;
  }
}

class UpdatePlacementResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateProjectRequest {
  public Description $description;
  public PlacementTemplate $placement_template;
  public ProjectName $project_name;

  public function __construct(shape(
  ?'description' => Description,
  ?'placement_template' => PlacementTemplate,
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->placement_template = $placement_template ?? ;
    $this->project_name = $project_name ?? ;
  }
}

class UpdateProjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

