<?hh // strict
namespace slack\aws\mobile;

interface  {
  public function CreateProject(CreateProjectRequest $in): Awaitable<\Errors\Result<CreateProjectResult>>;
  public function DeleteProject(DeleteProjectRequest $in): Awaitable<\Errors\Result<DeleteProjectResult>>;
  public function DescribeBundle(DescribeBundleRequest $in): Awaitable<\Errors\Result<DescribeBundleResult>>;
  public function DescribeProject(DescribeProjectRequest $in): Awaitable<\Errors\Result<DescribeProjectResult>>;
  public function ExportBundle(ExportBundleRequest $in): Awaitable<\Errors\Result<ExportBundleResult>>;
  public function ExportProject(ExportProjectRequest $in): Awaitable<\Errors\Result<ExportProjectResult>>;
  public function ListBundles(ListBundlesRequest $in): Awaitable<\Errors\Result<ListBundlesResult>>;
  public function ListProjects(ListProjectsRequest $in): Awaitable<\Errors\Result<ListProjectsResult>>;
  public function UpdateProject(UpdateProjectRequest $in): Awaitable<\Errors\Result<UpdateProjectResult>>;
}

class AccountActionRequiredException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type AttributeKey = string;

type AttributeValue = string;

type Attributes = dict<AttributeKey, AttributeValue>;

class BadRequestException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Boolean = bool;

type BundleDescription = string;

class BundleDetails {
  public ?Platforms $available_platforms;
  public ?BundleId $bundle_id;
  public ?BundleDescription $description;
  public ?IconUrl $icon_url;
  public ?BundleTitle $title;
  public ?BundleVersion $version;

  public function __construct(shape(
    ?'available_platforms' => ?Platforms,
    ?'bundle_id' => ?BundleId,
    ?'description' => ?BundleDescription,
    ?'icon_url' => ?IconUrl,
    ?'title' => ?BundleTitle,
    ?'version' => ?BundleVersion,
  ) $s = shape()) {
    $this->available_platforms = $s['available_platforms'] ?? vec[];
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->icon_url = $s['icon_url'] ?? '';
    $this->title = $s['title'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type BundleId = string;

type BundleList = vec<BundleDetails>;

type BundleTitle = string;

type BundleVersion = string;

type ConsoleUrl = string;

type Contents = string;

class CreateProjectRequest {
  public ?Contents $contents;
  public ?ProjectName $name;
  public ?ProjectRegion $region;
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'contents' => ?Contents,
    ?'name' => ?ProjectName,
    ?'region' => ?ProjectRegion,
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->contents = $s['contents'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

class CreateProjectResult {
  public ?ProjectDetails $details;

  public function __construct(shape(
    ?'details' => ?ProjectDetails,
  ) $s = shape()) {
    $this->details = $s['details'] ?? null;
  }
}

type Date = int;

class DeleteProjectRequest {
  public ?ProjectId $project_id;

  public function __construct(shape(
    ?'project_id' => ?ProjectId,
  ) $s = shape()) {
    $this->project_id = $s['project_id'] ?? '';
  }
}

class DeleteProjectResult {
  public ?Resources $deleted_resources;
  public ?Resources $orphaned_resources;

  public function __construct(shape(
    ?'deleted_resources' => ?Resources,
    ?'orphaned_resources' => ?Resources,
  ) $s = shape()) {
    $this->deleted_resources = $s['deleted_resources'] ?? vec[];
    $this->orphaned_resources = $s['orphaned_resources'] ?? vec[];
  }
}

class DescribeBundleRequest {
  public ?BundleId $bundle_id;

  public function __construct(shape(
    ?'bundle_id' => ?BundleId,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
  }
}

class DescribeBundleResult {
  public ?BundleDetails $details;

  public function __construct(shape(
    ?'details' => ?BundleDetails,
  ) $s = shape()) {
    $this->details = $s['details'] ?? null;
  }
}

class DescribeProjectRequest {
  public ?ProjectId $project_id;
  public bool $sync_from_resources;

  public function __construct(shape(
    ?'project_id' => ?ProjectId,
    ?'sync_from_resources' => bool,
  ) $s = shape()) {
    $this->project_id = $s['project_id'] ?? '';
    $this->sync_from_resources = $s['sync_from_resources'] ?? false;
  }
}

class DescribeProjectResult {
  public ?ProjectDetails $details;

  public function __construct(shape(
    ?'details' => ?ProjectDetails,
  ) $s = shape()) {
    $this->details = $s['details'] ?? null;
  }
}

type DownloadUrl = string;

type ErrorMessage = string;

class ExportBundleRequest {
  public ?BundleId $bundle_id;
  public ?Platform $platform;
  public ?ProjectId $project_id;

  public function __construct(shape(
    ?'bundle_id' => ?BundleId,
    ?'platform' => ?Platform,
    ?'project_id' => ?ProjectId,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->project_id = $s['project_id'] ?? '';
  }
}

class ExportBundleResult {
  public ?DownloadUrl $download_url;

  public function __construct(shape(
    ?'download_url' => ?DownloadUrl,
  ) $s = shape()) {
    $this->download_url = $s['download_url'] ?? '';
  }
}

class ExportProjectRequest {
  public ?ProjectId $project_id;

  public function __construct(shape(
    ?'project_id' => ?ProjectId,
  ) $s = shape()) {
    $this->project_id = $s['project_id'] ?? '';
  }
}

class ExportProjectResult {
  public ?DownloadUrl $download_url;
  public ?ShareUrl $share_url;
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'download_url' => ?DownloadUrl,
    ?'share_url' => ?ShareUrl,
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->download_url = $s['download_url'] ?? '';
    $this->share_url = $s['share_url'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

type Feature = string;

type IconUrl = string;

class InternalFailureException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LimitExceededException {
  public ?ErrorMessage $message;
  public ?ErrorMessage $retry_after_seconds;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'retry_after_seconds' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->retry_after_seconds = $s['retry_after_seconds'] ?? '';
  }
}

class ListBundlesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBundlesResult {
  public ?BundleList $bundle_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'bundle_list' => ?BundleList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->bundle_list = $s['bundle_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListProjectsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListProjectsResult {
  public ?NextToken $next_token;
  public ?ProjectSummaries $projects;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'projects' => ?ProjectSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->projects = $s['projects'] ?? vec[];
  }
}

type MaxResults = int;

type NextToken = string;

class NotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Platform = string;

type Platforms = vec<Platform>;

class ProjectDetails {
  public ?ConsoleUrl $console_url;
  public ?Date $created_date;
  public ?Date $last_updated_date;
  public ?ProjectName $name;
  public ?ProjectId $project_id;
  public ?ProjectRegion $region;
  public ?Resources $resources;
  public ?ProjectState $state;

  public function __construct(shape(
    ?'console_url' => ?ConsoleUrl,
    ?'created_date' => ?Date,
    ?'last_updated_date' => ?Date,
    ?'name' => ?ProjectName,
    ?'project_id' => ?ProjectId,
    ?'region' => ?ProjectRegion,
    ?'resources' => ?Resources,
    ?'state' => ?ProjectState,
  ) $s = shape()) {
    $this->console_url = $s['console_url'] ?? '';
    $this->created_date = $s['created_date'] ?? 0;
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->project_id = $s['project_id'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->resources = $s['resources'] ?? vec[];
    $this->state = $s['state'] ?? '';
  }
}

type ProjectId = string;

type ProjectName = string;

type ProjectRegion = string;

type ProjectState = string;

type ProjectSummaries = vec<ProjectSummary>;

class ProjectSummary {
  public ?ProjectName $name;
  public ?ProjectId $project_id;

  public function __construct(shape(
    ?'name' => ?ProjectName,
    ?'project_id' => ?ProjectId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->project_id = $s['project_id'] ?? '';
  }
}

class Resource {
  public ?ResourceArn $arn;
  public ?Attributes $attributes;
  public ?Feature $feature;
  public ?ResourceName $name;
  public ?ResourceType $type;

  public function __construct(shape(
    ?'arn' => ?ResourceArn,
    ?'attributes' => ?Attributes,
    ?'feature' => ?Feature,
    ?'name' => ?ResourceName,
    ?'type' => ?ResourceType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->feature = $s['feature'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ResourceArn = string;

type ResourceName = string;

type ResourceType = string;

type Resources = vec<Resource>;

class ServiceUnavailableException {
  public ?ErrorMessage $message;
  public ?ErrorMessage $retry_after_seconds;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'retry_after_seconds' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->retry_after_seconds = $s['retry_after_seconds'] ?? '';
  }
}

type ShareUrl = string;

type SnapshotId = string;

class TooManyRequestsException {
  public ?ErrorMessage $message;
  public ?ErrorMessage $retry_after_seconds;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'retry_after_seconds' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->retry_after_seconds = $s['retry_after_seconds'] ?? '';
  }
}

class UnauthorizedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UpdateProjectRequest {
  public ?Contents $contents;
  public ?ProjectId $project_id;

  public function __construct(shape(
    ?'contents' => ?Contents,
    ?'project_id' => ?ProjectId,
  ) $s = shape()) {
    $this->contents = $s['contents'] ?? '';
    $this->project_id = $s['project_id'] ?? '';
  }
}

class UpdateProjectResult {
  public ?ProjectDetails $details;

  public function __construct(shape(
    ?'details' => ?ProjectDetails,
  ) $s = shape()) {
    $this->details = $s['details'] ?? null;
  }
}

