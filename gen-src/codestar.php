<?hh // strict
namespace slack\aws\codestar;

interface CodeStar {
  public function AssociateTeamMember(AssociateTeamMemberRequest): Awaitable<Errors\Result<AssociateTeamMemberResult>>;
  public function CreateProject(CreateProjectRequest): Awaitable<Errors\Result<CreateProjectResult>>;
  public function CreateUserProfile(CreateUserProfileRequest): Awaitable<Errors\Result<CreateUserProfileResult>>;
  public function DeleteProject(DeleteProjectRequest): Awaitable<Errors\Result<DeleteProjectResult>>;
  public function DeleteUserProfile(DeleteUserProfileRequest): Awaitable<Errors\Result<DeleteUserProfileResult>>;
  public function DescribeProject(DescribeProjectRequest): Awaitable<Errors\Result<DescribeProjectResult>>;
  public function DescribeUserProfile(DescribeUserProfileRequest): Awaitable<Errors\Result<DescribeUserProfileResult>>;
  public function DisassociateTeamMember(DisassociateTeamMemberRequest): Awaitable<Errors\Result<DisassociateTeamMemberResult>>;
  public function ListProjects(ListProjectsRequest): Awaitable<Errors\Result<ListProjectsResult>>;
  public function ListResources(ListResourcesRequest): Awaitable<Errors\Result<ListResourcesResult>>;
  public function ListTagsForProject(ListTagsForProjectRequest): Awaitable<Errors\Result<ListTagsForProjectResult>>;
  public function ListTeamMembers(ListTeamMembersRequest): Awaitable<Errors\Result<ListTeamMembersResult>>;
  public function ListUserProfiles(ListUserProfilesRequest): Awaitable<Errors\Result<ListUserProfilesResult>>;
  public function TagProject(TagProjectRequest): Awaitable<Errors\Result<TagProjectResult>>;
  public function UntagProject(UntagProjectRequest): Awaitable<Errors\Result<UntagProjectResult>>;
  public function UpdateProject(UpdateProjectRequest): Awaitable<Errors\Result<UpdateProjectResult>>;
  public function UpdateTeamMember(UpdateTeamMemberRequest): Awaitable<Errors\Result<UpdateTeamMemberResult>>;
  public function UpdateUserProfile(UpdateUserProfileRequest): Awaitable<Errors\Result<UpdateUserProfileResult>>;
}

class AssociateTeamMemberRequest {
  public ClientRequestToken $client_request_token;
  public ProjectId $project_id;
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'project_id' => ProjectId,
  ?'project_role' => Role,
  ?'remote_access_allowed' => RemoteAccessAllowed,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->project_id = $project_id ?? ;
    $this->project_role = $project_role ?? ;
    $this->remote_access_allowed = $remote_access_allowed ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

class AssociateTeamMemberResult {
  public ClientRequestToken $client_request_token;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
  }
}

type BucketKey = string;

type BucketName = string;

type ClientRequestToken = string;

class Code {
  public CodeDestination $destination;
  public CodeSource $source;

  public function __construct(shape(
  ?'destination' => CodeDestination,
  ?'source' => CodeSource,
  ) $s = shape()) {
    $this->destination = $destination ?? ;
    $this->source = $source ?? ;
  }
}

class CodeCommitCodeDestination {
  public RepositoryName $name;

  public function __construct(shape(
  ?'name' => RepositoryName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class CodeDestination {
  public CodeCommitCodeDestination $code_commit;
  public GitHubCodeDestination $git_hub;

  public function __construct(shape(
  ?'code_commit' => CodeCommitCodeDestination,
  ?'git_hub' => GitHubCodeDestination,
  ) $s = shape()) {
    $this->code_commit = $code_commit ?? ;
    $this->git_hub = $git_hub ?? ;
  }
}

class CodeSource {
  public S3Location $s_3;

  public function __construct(shape(
  ?'s_3' => S3Location,
  ) $s = shape()) {
    $this->s_3 = $s_3 ?? ;
  }
}

class ConcurrentModificationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateProjectRequest {
  public ClientRequestToken $client_request_token;
  public ProjectDescription $description;
  public ProjectId $id;
  public ProjectName $name;
  public SourceCode $source_code;
  public Tags $tags;
  public Toolchain $toolchain;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'description' => ProjectDescription,
  ?'id' => ProjectId,
  ?'name' => ProjectName,
  ?'source_code' => SourceCode,
  ?'tags' => Tags,
  ?'toolchain' => Toolchain,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->source_code = $source_code ?? ;
    $this->tags = $tags ?? ;
    $this->toolchain = $toolchain ?? ;
  }
}

class CreateProjectResult {
  public ProjectArn $arn;
  public ClientRequestToken $client_request_token;
  public ProjectId $id;
  public ProjectTemplateId $project_template_id;

  public function __construct(shape(
  ?'arn' => ProjectArn,
  ?'client_request_token' => ClientRequestToken,
  ?'id' => ProjectId,
  ?'project_template_id' => ProjectTemplateId,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->client_request_token = $client_request_token ?? ;
    $this->id = $id ?? ;
    $this->project_template_id = $project_template_id ?? ;
  }
}

class CreateUserProfileRequest {
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'display_name' => UserProfileDisplayName,
  ?'email_address' => Email,
  ?'ssh_public_key' => SshPublicKey,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->email_address = $email_address ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

class CreateUserProfileResult {
  public CreatedTimestamp $created_timestamp;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public LastModifiedTimestamp $last_modified_timestamp;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'created_timestamp' => CreatedTimestamp,
  ?'display_name' => UserProfileDisplayName,
  ?'email_address' => Email,
  ?'last_modified_timestamp' => LastModifiedTimestamp,
  ?'ssh_public_key' => SshPublicKey,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->created_timestamp = $created_timestamp ?? ;
    $this->display_name = $display_name ?? ;
    $this->email_address = $email_address ?? ;
    $this->last_modified_timestamp = $last_modified_timestamp ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

type CreatedTimestamp = int;

class DeleteProjectRequest {
  public ClientRequestToken $client_request_token;
  public DeleteStack $delete_stack;
  public ProjectId $id;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'delete_stack' => DeleteStack,
  ?'id' => ProjectId,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->delete_stack = $delete_stack ?? ;
    $this->id = $id ?? ;
  }
}

class DeleteProjectResult {
  public ProjectArn $project_arn;
  public StackId $stack_id;

  public function __construct(shape(
  ?'project_arn' => ProjectArn,
  ?'stack_id' => StackId,
  ) $s = shape()) {
    $this->project_arn = $project_arn ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

type DeleteStack = bool;

class DeleteUserProfileRequest {
  public UserArn $user_arn;

  public function __construct(shape(
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->user_arn = $user_arn ?? ;
  }
}

class DeleteUserProfileResult {
  public UserArn $user_arn;

  public function __construct(shape(
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->user_arn = $user_arn ?? ;
  }
}

class DescribeProjectRequest {
  public ProjectId $id;

  public function __construct(shape(
  ?'id' => ProjectId,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class DescribeProjectResult {
  public ProjectArn $arn;
  public ClientRequestToken $client_request_token;
  public CreatedTimestamp $created_time_stamp;
  public ProjectDescription $description;
  public ProjectId $id;
  public ProjectName $name;
  public ProjectTemplateId $project_template_id;
  public StackId $stack_id;
  public ProjectStatus $status;

  public function __construct(shape(
  ?'arn' => ProjectArn,
  ?'client_request_token' => ClientRequestToken,
  ?'created_time_stamp' => CreatedTimestamp,
  ?'description' => ProjectDescription,
  ?'id' => ProjectId,
  ?'name' => ProjectName,
  ?'project_template_id' => ProjectTemplateId,
  ?'stack_id' => StackId,
  ?'status' => ProjectStatus,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->client_request_token = $client_request_token ?? ;
    $this->created_time_stamp = $created_time_stamp ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->project_template_id = $project_template_id ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeUserProfileRequest {
  public UserArn $user_arn;

  public function __construct(shape(
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->user_arn = $user_arn ?? ;
  }
}

class DescribeUserProfileResult {
  public CreatedTimestamp $created_timestamp;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public LastModifiedTimestamp $last_modified_timestamp;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'created_timestamp' => CreatedTimestamp,
  ?'display_name' => UserProfileDisplayName,
  ?'email_address' => Email,
  ?'last_modified_timestamp' => LastModifiedTimestamp,
  ?'ssh_public_key' => SshPublicKey,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->created_timestamp = $created_timestamp ?? ;
    $this->display_name = $display_name ?? ;
    $this->email_address = $email_address ?? ;
    $this->last_modified_timestamp = $last_modified_timestamp ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

class DisassociateTeamMemberRequest {
  public ProjectId $project_id;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'project_id' => ProjectId,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->project_id = $project_id ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

class DisassociateTeamMemberResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Email = string;

class GitHubCodeDestination {
  public RepositoryDescription $description;
  public RepositoryEnableIssues $issues_enabled;
  public RepositoryName $name;
  public RepositoryOwner $owner;
  public RepositoryIsPrivate $private_repository;
  public GitHubPersonalToken $token;
  public RepositoryType $type;

  public function __construct(shape(
  ?'description' => RepositoryDescription,
  ?'issues_enabled' => RepositoryEnableIssues,
  ?'name' => RepositoryName,
  ?'owner' => RepositoryOwner,
  ?'private_repository' => RepositoryIsPrivate,
  ?'token' => GitHubPersonalToken,
  ?'type' => RepositoryType,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->issues_enabled = $issues_enabled ?? ;
    $this->name = $name ?? ;
    $this->owner = $owner ?? ;
    $this->private_repository = $private_repository ?? ;
    $this->token = $token ?? ;
    $this->type = $type ?? ;
  }
}

type GitHubPersonalToken = string;

class InvalidNextTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidServiceRoleException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type LastModifiedTimestamp = int;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListProjectsRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListProjectsResult {
  public PaginationToken $next_token;
  public ProjectsList $projects;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'projects' => ProjectsList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->projects = $projects ?? ;
  }
}

class ListResourcesRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public ProjectId $project_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'project_id' => ProjectId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->project_id = $project_id ?? ;
  }
}

class ListResourcesResult {
  public PaginationToken $next_token;
  public ResourcesResult $resources;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'resources' => ResourcesResult,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->resources = $resources ?? ;
  }
}

class ListTagsForProjectRequest {
  public ProjectId $id;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'id' => ProjectId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListTagsForProjectResult {
  public PaginationToken $next_token;
  public Tags $tags;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->tags = $tags ?? ;
  }
}

class ListTeamMembersRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public ProjectId $project_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'project_id' => ProjectId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->project_id = $project_id ?? ;
  }
}

class ListTeamMembersResult {
  public PaginationToken $next_token;
  public TeamMemberResult $team_members;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'team_members' => TeamMemberResult,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->team_members = $team_members ?? ;
  }
}

class ListUserProfilesRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListUserProfilesResult {
  public PaginationToken $next_token;
  public UserProfilesList $user_profiles;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'user_profiles' => UserProfilesList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->user_profiles = $user_profiles ?? ;
  }
}

type MaxResults = int;

type PaginationToken = string;

class ProjectAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ProjectArn = string;

class ProjectConfigurationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ProjectCreationFailedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ProjectDescription = string;

type ProjectId = string;

type ProjectName = string;

class ProjectNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ProjectStatus {
  public Reason $reason;
  public State $state;

  public function __construct(shape(
  ?'reason' => Reason,
  ?'state' => State,
  ) $s = shape()) {
    $this->reason = $reason ?? ;
    $this->state = $state ?? ;
  }
}

class ProjectSummary {
  public ProjectArn $project_arn;
  public ProjectId $project_id;

  public function __construct(shape(
  ?'project_arn' => ProjectArn,
  ?'project_id' => ProjectId,
  ) $s = shape()) {
    $this->project_arn = $project_arn ?? ;
    $this->project_id = $project_id ?? ;
  }
}

type ProjectTemplateId = string;

type ProjectsList = vec<ProjectSummary>;

type Reason = string;

type RemoteAccessAllowed = bool;

type RepositoryDescription = string;

type RepositoryEnableIssues = bool;

type RepositoryIsPrivate = bool;

type RepositoryName = string;

type RepositoryOwner = string;

type RepositoryType = string;

class Resource {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

type ResourceId = string;

type ResourcesResult = vec<Resource>;

type Role = string;

type RoleArn = string;

class S3Location {
  public BucketKey $bucket_key;
  public BucketName $bucket_name;

  public function __construct(shape(
  ?'bucket_key' => BucketKey,
  ?'bucket_name' => BucketName,
  ) $s = shape()) {
    $this->bucket_key = $bucket_key ?? ;
    $this->bucket_name = $bucket_name ?? ;
  }
}

type SourceCode = vec<Code>;

type SshPublicKey = string;

type StackId = string;

type State = string;

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagProjectRequest {
  public ProjectId $id;
  public Tags $tags;

  public function __construct(shape(
  ?'id' => ProjectId,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagProjectResult {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

type TagValue = string;

type Tags = dict<TagKey, TagValue>;

class TeamMember {
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'project_role' => Role,
  ?'remote_access_allowed' => RemoteAccessAllowed,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->project_role = $project_role ?? ;
    $this->remote_access_allowed = $remote_access_allowed ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

class TeamMemberAlreadyAssociatedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TeamMemberNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TeamMemberResult = vec<TeamMember>;

type TemplateParameterKey = string;

type TemplateParameterMap = dict<TemplateParameterKey, TemplateParameterValue>;

type TemplateParameterValue = string;

class Toolchain {
  public RoleArn $role_arn;
  public ToolchainSource $source;
  public TemplateParameterMap $stack_parameters;

  public function __construct(shape(
  ?'role_arn' => RoleArn,
  ?'source' => ToolchainSource,
  ?'stack_parameters' => TemplateParameterMap,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? ;
    $this->source = $source ?? ;
    $this->stack_parameters = $stack_parameters ?? ;
  }
}

class ToolchainSource {
  public S3Location $s_3;

  public function __construct(shape(
  ?'s_3' => S3Location,
  ) $s = shape()) {
    $this->s_3 = $s_3 ?? ;
  }
}

class UntagProjectRequest {
  public ProjectId $id;
  public TagKeys $tags;

  public function __construct(shape(
  ?'id' => ProjectId,
  ?'tags' => TagKeys,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->tags = $tags ?? ;
  }
}

class UntagProjectResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateProjectRequest {
  public ProjectDescription $description;
  public ProjectId $id;
  public ProjectName $name;

  public function __construct(shape(
  ?'description' => ProjectDescription,
  ?'id' => ProjectId,
  ?'name' => ProjectName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
  }
}

class UpdateProjectResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateTeamMemberRequest {
  public ProjectId $project_id;
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'project_id' => ProjectId,
  ?'project_role' => Role,
  ?'remote_access_allowed' => RemoteAccessAllowed,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->project_id = $project_id ?? ;
    $this->project_role = $project_role ?? ;
    $this->remote_access_allowed = $remote_access_allowed ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

class UpdateTeamMemberResult {
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'project_role' => Role,
  ?'remote_access_allowed' => RemoteAccessAllowed,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->project_role = $project_role ?? ;
    $this->remote_access_allowed = $remote_access_allowed ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

class UpdateUserProfileRequest {
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'display_name' => UserProfileDisplayName,
  ?'email_address' => Email,
  ?'ssh_public_key' => SshPublicKey,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->email_address = $email_address ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

class UpdateUserProfileResult {
  public CreatedTimestamp $created_timestamp;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public LastModifiedTimestamp $last_modified_timestamp;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'created_timestamp' => CreatedTimestamp,
  ?'display_name' => UserProfileDisplayName,
  ?'email_address' => Email,
  ?'last_modified_timestamp' => LastModifiedTimestamp,
  ?'ssh_public_key' => SshPublicKey,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->created_timestamp = $created_timestamp ?? ;
    $this->display_name = $display_name ?? ;
    $this->email_address = $email_address ?? ;
    $this->last_modified_timestamp = $last_modified_timestamp ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

type UserArn = string;

class UserProfileAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UserProfileDisplayName = string;

class UserProfileNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UserProfileSummary {
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;

  public function __construct(shape(
  ?'display_name' => UserProfileDisplayName,
  ?'email_address' => Email,
  ?'ssh_public_key' => SshPublicKey,
  ?'user_arn' => UserArn,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->email_address = $email_address ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

type UserProfilesList = vec<UserProfileSummary>;

class ValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

