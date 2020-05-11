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

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type AttributeKey = string;

type AttributeValue = string;

type Attributes = dict<AttributeKey, AttributeValue>;

class BadRequestException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Boolean = bool;

type BundleDescription = string;

class BundleDetails {
  public Platforms $available_platforms;
  public BundleId $bundle_id;
  public BundleDescription $description;
  public IconUrl $icon_url;
  public BundleTitle $title;
  public BundleVersion $version;

  public function __construct(shape(
  ?'available_platforms' => Platforms,
  ?'bundle_id' => BundleId,
  ?'description' => BundleDescription,
  ?'icon_url' => IconUrl,
  ?'title' => BundleTitle,
  ?'version' => BundleVersion,
  ) $s = shape()) {
    $this->available_platforms = $available_platforms ?? ;
    $this->bundle_id = $bundle_id ?? ;
    $this->description = $description ?? ;
    $this->icon_url = $icon_url ?? ;
    $this->title = $title ?? ;
    $this->version = $version ?? ;
  }
}

type BundleId = string;

type BundleList = vec<BundleDetails>;

type BundleTitle = string;

type BundleVersion = string;

type ConsoleUrl = string;

type Contents = string;

class CreateProjectRequest {
  public Contents $contents;
  public ProjectName $name;
  public ProjectRegion $region;
  public SnapshotId $snapshot_id;

  public function __construct(shape(
  ?'contents' => Contents,
  ?'name' => ProjectName,
  ?'region' => ProjectRegion,
  ?'snapshot_id' => SnapshotId,
  ) $s = shape()) {
    $this->contents = $contents ?? ;
    $this->name = $name ?? ;
    $this->region = $region ?? ;
    $this->snapshot_id = $snapshot_id ?? ;
  }
}

class CreateProjectResult {
  public ProjectDetails $details;

  public function __construct(shape(
  ?'details' => ProjectDetails,
  ) $s = shape()) {
    $this->details = $details ?? ;
  }
}

type Date = int;

class DeleteProjectRequest {
  public ProjectId $project_id;

  public function __construct(shape(
  ?'project_id' => ProjectId,
  ) $s = shape()) {
    $this->project_id = $project_id ?? ;
  }
}

class DeleteProjectResult {
  public Resources $deleted_resources;
  public Resources $orphaned_resources;

  public function __construct(shape(
  ?'deleted_resources' => Resources,
  ?'orphaned_resources' => Resources,
  ) $s = shape()) {
    $this->deleted_resources = $deleted_resources ?? ;
    $this->orphaned_resources = $orphaned_resources ?? ;
  }
}

class DescribeBundleRequest {
  public BundleId $bundle_id;

  public function __construct(shape(
  ?'bundle_id' => BundleId,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? ;
  }
}

class DescribeBundleResult {
  public BundleDetails $details;

  public function __construct(shape(
  ?'details' => BundleDetails,
  ) $s = shape()) {
    $this->details = $details ?? ;
  }
}

class DescribeProjectRequest {
  public ProjectId $project_id;
  public boolean $sync_from_resources;

  public function __construct(shape(
  ?'project_id' => ProjectId,
  ?'sync_from_resources' => boolean,
  ) $s = shape()) {
    $this->project_id = $project_id ?? ;
    $this->sync_from_resources = $sync_from_resources ?? ;
  }
}

class DescribeProjectResult {
  public ProjectDetails $details;

  public function __construct(shape(
  ?'details' => ProjectDetails,
  ) $s = shape()) {
    $this->details = $details ?? ;
  }
}

type DownloadUrl = string;

type ErrorMessage = string;

class ExportBundleRequest {
  public BundleId $bundle_id;
  public Platform $platform;
  public ProjectId $project_id;

  public function __construct(shape(
  ?'bundle_id' => BundleId,
  ?'platform' => Platform,
  ?'project_id' => ProjectId,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? ;
    $this->platform = $platform ?? ;
    $this->project_id = $project_id ?? ;
  }
}

class ExportBundleResult {
  public DownloadUrl $download_url;

  public function __construct(shape(
  ?'download_url' => DownloadUrl,
  ) $s = shape()) {
    $this->download_url = $download_url ?? ;
  }
}

class ExportProjectRequest {
  public ProjectId $project_id;

  public function __construct(shape(
  ?'project_id' => ProjectId,
  ) $s = shape()) {
    $this->project_id = $project_id ?? ;
  }
}

class ExportProjectResult {
  public DownloadUrl $download_url;
  public ShareUrl $share_url;
  public SnapshotId $snapshot_id;

  public function __construct(shape(
  ?'download_url' => DownloadUrl,
  ?'share_url' => ShareUrl,
  ?'snapshot_id' => SnapshotId,
  ) $s = shape()) {
    $this->download_url = $download_url ?? ;
    $this->share_url = $share_url ?? ;
    $this->snapshot_id = $snapshot_id ?? ;
  }
}

type Feature = string;

type IconUrl = string;

class InternalFailureException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class LimitExceededException {
  public ErrorMessage $message;
  public ErrorMessage $retry_after_seconds;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'retry_after_seconds' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->retry_after_seconds = $retry_after_seconds ?? ;
  }
}

class ListBundlesRequest {
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

class ListBundlesResult {
  public BundleList $bundle_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'bundle_list' => BundleList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->bundle_list = $bundle_list ?? ;
    $this->next_token = $next_token ?? ;
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

class ListProjectsResult {
  public NextToken $next_token;
  public ProjectSummaries $projects;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'projects' => ProjectSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->projects = $projects ?? ;
  }
}

type MaxResults = int;

type NextToken = string;

class NotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Platform = string;

type Platforms = vec<Platform>;

class ProjectDetails {
  public ConsoleUrl $console_url;
  public Date $created_date;
  public Date $last_updated_date;
  public ProjectName $name;
  public ProjectId $project_id;
  public ProjectRegion $region;
  public Resources $resources;
  public ProjectState $state;

  public function __construct(shape(
  ?'console_url' => ConsoleUrl,
  ?'created_date' => Date,
  ?'last_updated_date' => Date,
  ?'name' => ProjectName,
  ?'project_id' => ProjectId,
  ?'region' => ProjectRegion,
  ?'resources' => Resources,
  ?'state' => ProjectState,
  ) $s = shape()) {
    $this->console_url = $console_url ?? ;
    $this->created_date = $created_date ?? ;
    $this->last_updated_date = $last_updated_date ?? ;
    $this->name = $name ?? ;
    $this->project_id = $project_id ?? ;
    $this->region = $region ?? ;
    $this->resources = $resources ?? ;
    $this->state = $state ?? ;
  }
}

type ProjectId = string;

type ProjectName = string;

type ProjectRegion = string;

type ProjectState = string;

type ProjectSummaries = vec<ProjectSummary>;

class ProjectSummary {
  public ProjectName $name;
  public ProjectId $project_id;

  public function __construct(shape(
  ?'name' => ProjectName,
  ?'project_id' => ProjectId,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->project_id = $project_id ?? ;
  }
}

class Resource {
  public ResourceArn $arn;
  public Attributes $attributes;
  public Feature $feature;
  public ResourceName $name;
  public ResourceType $type;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'attributes' => Attributes,
  ?'feature' => Feature,
  ?'name' => ResourceName,
  ?'type' => ResourceType,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->attributes = $attributes ?? ;
    $this->feature = $feature ?? ;
    $this->name = $name ?? ;
    $this->type = $type ?? ;
  }
}

type ResourceArn = string;

type ResourceName = string;

type ResourceType = string;

type Resources = vec<Resource>;

class ServiceUnavailableException {
  public ErrorMessage $message;
  public ErrorMessage $retry_after_seconds;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'retry_after_seconds' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->retry_after_seconds = $retry_after_seconds ?? ;
  }
}

type ShareUrl = string;

type SnapshotId = string;

class TooManyRequestsException {
  public ErrorMessage $message;
  public ErrorMessage $retry_after_seconds;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'retry_after_seconds' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->retry_after_seconds = $retry_after_seconds ?? ;
  }
}

class UnauthorizedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UpdateProjectRequest {
  public Contents $contents;
  public ProjectId $project_id;

  public function __construct(shape(
  ?'contents' => Contents,
  ?'project_id' => ProjectId,
  ) $s = shape()) {
    $this->contents = $contents ?? ;
    $this->project_id = $project_id ?? ;
  }
}

class UpdateProjectResult {
  public ProjectDetails $details;

  public function __construct(shape(
  ?'details' => ProjectDetails,
  ) $s = shape()) {
    $this->details = $details ?? ;
  }
}

