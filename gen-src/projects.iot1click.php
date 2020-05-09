<?hh // strict
namespace slack\aws\projects.iot1click;

interface IoT 1Click Projects {
  public function CreatePlacement(CreatePlacementRequest) Awaitable<Errors\Result<CreatePlacementResponse>>;
  public function CreateProject(CreateProjectRequest) Awaitable<Errors\Result<CreateProjectResponse>>;
  public function DisassociateDeviceFromPlacement(DisassociateDeviceFromPlacementRequest) Awaitable<Errors\Result<DisassociateDeviceFromPlacementResponse>>;
  public function ListProjects(ListProjectsRequest) Awaitable<Errors\Result<ListProjectsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function AssociateDeviceWithPlacement(AssociateDeviceWithPlacementRequest) Awaitable<Errors\Result<AssociateDeviceWithPlacementResponse>>;
  public function GetDevicesInPlacement(GetDevicesInPlacementRequest) Awaitable<Errors\Result<GetDevicesInPlacementResponse>>;
  public function ListPlacements(ListPlacementsRequest) Awaitable<Errors\Result<ListPlacementsResponse>>;
  public function UpdatePlacement(UpdatePlacementRequest) Awaitable<Errors\Result<UpdatePlacementResponse>>;
  public function DeletePlacement(DeletePlacementRequest) Awaitable<Errors\Result<DeletePlacementResponse>>;
  public function DeleteProject(DeleteProjectRequest) Awaitable<Errors\Result<DeleteProjectResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateProject(UpdateProjectRequest) Awaitable<Errors\Result<UpdateProjectResponse>>;
  public function DescribePlacement(DescribePlacementRequest) Awaitable<Errors\Result<DescribePlacementResponse>>;
  public function DescribeProject(DescribeProjectRequest) Awaitable<Errors\Result<DescribeProjectResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
}

class DeviceId {
}

class TooManyRequestsException {
  public Code $code;
  public Message $message;
}

class UntagResourceRequest {
  public ProjectArn $resource_arn;
  public TagKeyList $tag_keys;
}

class DescribeProjectRequest {
  public ProjectName $project_name;
}

class DeviceTemplateName {
}

class GetDevicesInPlacementResponse {
  public DeviceMap $devices;
}

class TagResourceResponse {
}

class UpdatePlacementResponse {
}

class PlacementDescription {
  public ProjectName $project_name;
  public PlacementName $placement_name;
  public PlacementAttributeMap $attributes;
  public Time $created_date;
  public Time $updated_date;
}

class TagResourceRequest {
  public ProjectArn $resource_arn;
  public TagMap $tags;
}

class CreateProjectRequest {
  public ProjectName $project_name;
  public Description $description;
  public PlacementTemplate $placement_template;
  public TagMap $tags;
}

class Description {
}

class ListProjectsResponse {
  public ProjectSummaryList $projects;
  public NextToken $next_token;
}

class PlacementAttributeMap {
}

class DeviceMap {
}

class ProjectSummary {
  public TagMap $tags;
  public ProjectArn $arn;
  public ProjectName $project_name;
  public Time $created_date;
  public Time $updated_date;
}

class ProjectArn {
}

class TagValue {
}

class AttributeDefaultValue {
}

class Code {
}

class DeviceCallbackKey {
}

class NextToken {
}

class CreateProjectResponse {
}

class PlacementSummary {
  public ProjectName $project_name;
  public PlacementName $placement_name;
  public Time $created_date;
  public Time $updated_date;
}

class Time {
}

class InvalidRequestException {
  public Code $code;
  public Message $message;
}

class UpdatePlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;
  public PlacementAttributeMap $attributes;
}

class InternalFailureException {
  public Code $code;
  public Message $message;
}

class ResourceConflictException {
  public Code $code;
  public Message $message;
}

class DeleteProjectResponse {
}

class DeviceCallbackOverrideMap {
}

class DeviceType {
}

class DisassociateDeviceFromPlacementRequest {
  public ProjectName $project_name;
  public PlacementName $placement_name;
  public DeviceTemplateName $device_template_name;
}

class DeviceTemplateMap {
}

class PlacementTemplate {
  public DefaultPlacementAttributeMap $default_attributes;
  public DeviceTemplateMap $device_templates;
}

class AttributeName {
}

class CreatePlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;
  public PlacementAttributeMap $attributes;
}

class CreatePlacementResponse {
}

class DescribePlacementResponse {
  public PlacementDescription $placement;
}

class AssociateDeviceWithPlacementRequest {
  public DeviceTemplateName $device_template_name;
  public ProjectName $project_name;
  public PlacementName $placement_name;
  public DeviceId $device_id;
}

class ListTagsForResourceRequest {
  public ProjectArn $resource_arn;
}

class TagKey {
}

class ProjectDescription {
  public Time $updated_date;
  public PlacementTemplate $placement_template;
  public TagMap $tags;
  public ProjectArn $arn;
  public ProjectName $project_name;
  public Description $description;
  public Time $created_date;
}

class TagKeyList {
}

class DisassociateDeviceFromPlacementResponse {
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class PlacementName {
}

class PlacementSummaryList {
}

class DeletePlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;
}

class MaxResults {
}

class Message {
}

class TagMap {
}

class ProjectSummaryList {
}

class ResourceNotFoundException {
  public Message $message;
  public Code $code;
}

class UpdateProjectRequest {
  public ProjectName $project_name;
  public Description $description;
  public PlacementTemplate $placement_template;
}

class ListPlacementsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public ProjectName $project_name;
}

class ListPlacementsResponse {
  public PlacementSummaryList $placements;
  public NextToken $next_token;
}

class ProjectName {
}

class UpdateProjectResponse {
}

class AttributeValue {
}

class DeletePlacementResponse {
}

class DescribeProjectResponse {
  public ProjectDescription $project;
}

class GetDevicesInPlacementRequest {
  public ProjectName $project_name;
  public PlacementName $placement_name;
}

class DeviceCallbackValue {
}

class DeviceTemplate {
  public DeviceType $device_type;
  public DeviceCallbackOverrideMap $callback_overrides;
}

class ListProjectsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class UntagResourceResponse {
}

class AssociateDeviceWithPlacementResponse {
}

class DefaultPlacementAttributeMap {
}

class DeleteProjectRequest {
  public ProjectName $project_name;
}

class DescribePlacementRequest {
  public PlacementName $placement_name;
  public ProjectName $project_name;
}

