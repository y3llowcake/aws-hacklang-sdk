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
}

class AssociateDeviceWithPlacementResponse {
}

class AttributeDefaultValue {
}

class AttributeName {
}

class AttributeValue {
}

class Code {
}

class CreatePlacementRequest {
  public PlacementAttributeMap $attributes;
  public PlacementName $placement_name;
  public ProjectName $project_name;
}

class CreatePlacementResponse {
}

class CreateProjectRequest {
  public Description $description;
  public PlacementTemplate $placement_template;
  public ProjectName $project_name;
  public TagMap $tags;
}

class CreateProjectResponse {
}

class DefaultPlacementAttributeMap {
}

class DeletePlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;
}

class DeletePlacementResponse {
}

class DeleteProjectRequest {
  public ProjectName $project_name;
}

class DeleteProjectResponse {
}

class DescribePlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;
}

class DescribePlacementResponse {
  public PlacementDescription $placement;
}

class DescribeProjectRequest {
  public ProjectName $project_name;
}

class DescribeProjectResponse {
  public ProjectDescription $project;
}

class Description {
}

class DeviceCallbackKey {
}

class DeviceCallbackOverrideMap {
}

class DeviceCallbackValue {
}

class DeviceId {
}

class DeviceMap {
}

class DeviceTemplate {
  public DeviceCallbackOverrideMap $callback_overrides;
  public DeviceType $device_type;
}

class DeviceTemplateMap {
}

class DeviceTemplateName {
}

class DeviceType {
}

class DisassociateDeviceFromPlacementRequest {
  public DeviceTemplateName $device_template_name;
  public PlacementName $placement_name;
  public ProjectName $project_name;
}

class DisassociateDeviceFromPlacementResponse {
}

class GetDevicesInPlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;
}

class GetDevicesInPlacementResponse {
  public DeviceMap $devices;
}

class InternalFailureException {
  public Code $code;
  public Message $message;
}

class InvalidRequestException {
  public Code $code;
  public Message $message;
}

class ListPlacementsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ProjectName $project_name;
}

class ListPlacementsResponse {
  public NextToken $next_token;
  public PlacementSummaryList $placements;
}

class ListProjectsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListProjectsResponse {
  public NextToken $next_token;
  public ProjectSummaryList $projects;
}

class ListTagsForResourceRequest {
  public ProjectArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class MaxResults {
}

class Message {
}

class NextToken {
}

class PlacementAttributeMap {
}

class PlacementDescription {
  public PlacementAttributeMap $attributes;
  public Time $created_date;
  public PlacementName $placement_name;
  public ProjectName $project_name;
  public Time $updated_date;
}

class PlacementName {
}

class PlacementSummary {
  public Time $created_date;
  public PlacementName $placement_name;
  public ProjectName $project_name;
  public Time $updated_date;
}

class PlacementSummaryList {
}

class PlacementTemplate {
  public DefaultPlacementAttributeMap $default_attributes;
  public DeviceTemplateMap $device_templates;
}

class ProjectArn {
}

class ProjectDescription {
  public ProjectArn $arn;
  public Time $created_date;
  public Description $description;
  public PlacementTemplate $placement_template;
  public ProjectName $project_name;
  public TagMap $tags;
  public Time $updated_date;
}

class ProjectName {
}

class ProjectSummary {
  public ProjectArn $arn;
  public Time $created_date;
  public ProjectName $project_name;
  public TagMap $tags;
  public Time $updated_date;
}

class ProjectSummaryList {
}

class ResourceConflictException {
  public Code $code;
  public Message $message;
}

class ResourceNotFoundException {
  public Code $code;
  public Message $message;
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public ProjectArn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Time {
}

class TooManyRequestsException {
  public Code $code;
  public Message $message;
}

class UntagResourceRequest {
  public ProjectArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdatePlacementRequest {
  public PlacementAttributeMap $attributes;
  public PlacementName $placement_name;
  public ProjectName $project_name;
}

class UpdatePlacementResponse {
}

class UpdateProjectRequest {
  public Description $description;
  public PlacementTemplate $placement_template;
  public ProjectName $project_name;
}

class UpdateProjectResponse {
}

