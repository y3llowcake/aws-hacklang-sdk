<?hh // strict
namespace slack\aws\mobile;

interface  {
  public function CreateProject(CreateProjectRequest): Awaitable<Errors\Result<CreateProjectResult>>;
  public function DeleteProject(DeleteProjectRequest): Awaitable<Errors\Result<DeleteProjectResult>>;
  public function DescribeBundle(DescribeBundleRequest): Awaitable<Errors\Result<DescribeBundleResult>>;
  public function DescribeProject(DescribeProjectRequest): Awaitable<Errors\Result<DescribeProjectResult>>;
  public function ExportBundle(ExportBundleRequest): Awaitable<Errors\Result<ExportBundleResult>>;
  public function ExportProject(ExportProjectRequest): Awaitable<Errors\Result<ExportProjectResult>>;
  public function ListBundles(ListBundlesRequest): Awaitable<Errors\Result<ListBundlesResult>>;
  public function ListProjects(ListProjectsRequest): Awaitable<Errors\Result<ListProjectsResult>>;
  public function UpdateProject(UpdateProjectRequest): Awaitable<Errors\Result<UpdateProjectResult>>;
}

class AccountActionRequiredException {
  public ErrorMessage $message;
}

class AttributeKey {
}

class AttributeValue {
}

class Attributes {
}

class BadRequestException {
  public ErrorMessage $message;
}

class Boolean {
}

class BundleDescription {
}

class BundleDetails {
  public Platforms $available_platforms;
  public BundleId $bundle_id;
  public BundleDescription $description;
  public IconUrl $icon_url;
  public BundleTitle $title;
  public BundleVersion $version;
}

class BundleId {
}

class BundleList {
}

class BundleTitle {
}

class BundleVersion {
}

class ConsoleUrl {
}

class Contents {
}

class CreateProjectRequest {
  public Contents $contents;
  public ProjectName $name;
  public ProjectRegion $region;
  public SnapshotId $snapshot_id;
}

class CreateProjectResult {
  public ProjectDetails $details;
}

class Date {
}

class DeleteProjectRequest {
  public ProjectId $project_id;
}

class DeleteProjectResult {
  public Resources $deleted_resources;
  public Resources $orphaned_resources;
}

class DescribeBundleRequest {
  public BundleId $bundle_id;
}

class DescribeBundleResult {
  public BundleDetails $details;
}

class DescribeProjectRequest {
  public ProjectId $project_id;
  public boolean $sync_from_resources;
}

class DescribeProjectResult {
  public ProjectDetails $details;
}

class DownloadUrl {
}

class ErrorMessage {
}

class ExportBundleRequest {
  public BundleId $bundle_id;
  public Platform $platform;
  public ProjectId $project_id;
}

class ExportBundleResult {
  public DownloadUrl $download_url;
}

class ExportProjectRequest {
  public ProjectId $project_id;
}

class ExportProjectResult {
  public DownloadUrl $download_url;
  public ShareUrl $share_url;
  public SnapshotId $snapshot_id;
}

class Feature {
}

class IconUrl {
}

class InternalFailureException {
  public ErrorMessage $message;
}

class LimitExceededException {
  public ErrorMessage $message;
  public ErrorMessage $retry_after_seconds;
}

class ListBundlesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListBundlesResult {
  public BundleList $bundle_list;
  public NextToken $next_token;
}

class ListProjectsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListProjectsResult {
  public NextToken $next_token;
  public ProjectSummaries $projects;
}

class MaxResults {
}

class NextToken {
}

class NotFoundException {
  public ErrorMessage $message;
}

class Platform {
}

class Platforms {
}

class ProjectDetails {
  public ConsoleUrl $console_url;
  public Date $created_date;
  public Date $last_updated_date;
  public ProjectName $name;
  public ProjectId $project_id;
  public ProjectRegion $region;
  public Resources $resources;
  public ProjectState $state;
}

class ProjectId {
}

class ProjectName {
}

class ProjectRegion {
}

class ProjectState {
}

class ProjectSummaries {
}

class ProjectSummary {
  public ProjectName $name;
  public ProjectId $project_id;
}

class Resource {
  public ResourceArn $arn;
  public Attributes $attributes;
  public Feature $feature;
  public ResourceName $name;
  public ResourceType $type;
}

class ResourceArn {
}

class ResourceName {
}

class ResourceType {
}

class Resources {
}

class ServiceUnavailableException {
  public ErrorMessage $message;
  public ErrorMessage $retry_after_seconds;
}

class ShareUrl {
}

class SnapshotId {
}

class TooManyRequestsException {
  public ErrorMessage $message;
  public ErrorMessage $retry_after_seconds;
}

class UnauthorizedException {
  public ErrorMessage $message;
}

class UpdateProjectRequest {
  public Contents $contents;
  public ProjectId $project_id;
}

class UpdateProjectResult {
  public ProjectDetails $details;
}

