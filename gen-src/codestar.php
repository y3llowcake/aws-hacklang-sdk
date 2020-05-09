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
}

class AssociateTeamMemberResult {
  public ClientRequestToken $client_request_token;
}

class BucketKey {
}

class BucketName {
}

class ClientRequestToken {
}

class Code {
  public CodeDestination $destination;
  public CodeSource $source;
}

class CodeCommitCodeDestination {
  public RepositoryName $name;
}

class CodeDestination {
  public CodeCommitCodeDestination $code_commit;
  public GitHubCodeDestination $git_hub;
}

class CodeSource {
  public S3Location $s_3;
}

class ConcurrentModificationException {
}

class CreateProjectRequest {
  public ClientRequestToken $client_request_token;
  public ProjectDescription $description;
  public ProjectId $id;
  public ProjectName $name;
  public SourceCode $source_code;
  public Tags $tags;
  public Toolchain $toolchain;
}

class CreateProjectResult {
  public ProjectArn $arn;
  public ClientRequestToken $client_request_token;
  public ProjectId $id;
  public ProjectTemplateId $project_template_id;
}

class CreateUserProfileRequest {
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;
}

class CreateUserProfileResult {
  public CreatedTimestamp $created_timestamp;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public LastModifiedTimestamp $last_modified_timestamp;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;
}

class CreatedTimestamp {
}

class DeleteProjectRequest {
  public ClientRequestToken $client_request_token;
  public DeleteStack $delete_stack;
  public ProjectId $id;
}

class DeleteProjectResult {
  public ProjectArn $project_arn;
  public StackId $stack_id;
}

class DeleteStack {
}

class DeleteUserProfileRequest {
  public UserArn $user_arn;
}

class DeleteUserProfileResult {
  public UserArn $user_arn;
}

class DescribeProjectRequest {
  public ProjectId $id;
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
}

class DescribeUserProfileRequest {
  public UserArn $user_arn;
}

class DescribeUserProfileResult {
  public CreatedTimestamp $created_timestamp;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public LastModifiedTimestamp $last_modified_timestamp;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;
}

class DisassociateTeamMemberRequest {
  public ProjectId $project_id;
  public UserArn $user_arn;
}

class DisassociateTeamMemberResult {
}

class Email {
}

class GitHubCodeDestination {
  public RepositoryDescription $description;
  public RepositoryEnableIssues $issues_enabled;
  public RepositoryName $name;
  public RepositoryOwner $owner;
  public RepositoryIsPrivate $private_repository;
  public GitHubPersonalToken $token;
  public RepositoryType $type;
}

class GitHubPersonalToken {
}

class InvalidNextTokenException {
}

class InvalidServiceRoleException {
}

class LastModifiedTimestamp {
}

class LimitExceededException {
}

class ListProjectsRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListProjectsResult {
  public PaginationToken $next_token;
  public ProjectsList $projects;
}

class ListResourcesRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public ProjectId $project_id;
}

class ListResourcesResult {
  public PaginationToken $next_token;
  public ResourcesResult $resources;
}

class ListTagsForProjectRequest {
  public ProjectId $id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListTagsForProjectResult {
  public PaginationToken $next_token;
  public Tags $tags;
}

class ListTeamMembersRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public ProjectId $project_id;
}

class ListTeamMembersResult {
  public PaginationToken $next_token;
  public TeamMemberResult $team_members;
}

class ListUserProfilesRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListUserProfilesResult {
  public PaginationToken $next_token;
  public UserProfilesList $user_profiles;
}

class MaxResults {
}

class PaginationToken {
}

class ProjectAlreadyExistsException {
}

class ProjectArn {
}

class ProjectConfigurationException {
}

class ProjectCreationFailedException {
}

class ProjectDescription {
}

class ProjectId {
}

class ProjectName {
}

class ProjectNotFoundException {
}

class ProjectStatus {
  public Reason $reason;
  public State $state;
}

class ProjectSummary {
  public ProjectArn $project_arn;
  public ProjectId $project_id;
}

class ProjectTemplateId {
}

class ProjectsList {
}

class Reason {
}

class RemoteAccessAllowed {
}

class RepositoryDescription {
}

class RepositoryEnableIssues {
}

class RepositoryIsPrivate {
}

class RepositoryName {
}

class RepositoryOwner {
}

class RepositoryType {
}

class Resource {
  public ResourceId $id;
}

class ResourceId {
}

class ResourcesResult {
}

class Role {
}

class RoleArn {
}

class S3Location {
  public BucketKey $bucket_key;
  public BucketName $bucket_name;
}

class SourceCode {
}

class SshPublicKey {
}

class StackId {
}

class State {
}

class TagKey {
}

class TagKeys {
}

class TagProjectRequest {
  public ProjectId $id;
  public Tags $tags;
}

class TagProjectResult {
  public Tags $tags;
}

class TagValue {
}

class Tags {
}

class TeamMember {
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
  public UserArn $user_arn;
}

class TeamMemberAlreadyAssociatedException {
}

class TeamMemberNotFoundException {
}

class TeamMemberResult {
}

class TemplateParameterKey {
}

class TemplateParameterMap {
}

class TemplateParameterValue {
}

class Toolchain {
  public RoleArn $role_arn;
  public ToolchainSource $source;
  public TemplateParameterMap $stack_parameters;
}

class ToolchainSource {
  public S3Location $s_3;
}

class UntagProjectRequest {
  public ProjectId $id;
  public TagKeys $tags;
}

class UntagProjectResult {
}

class UpdateProjectRequest {
  public ProjectDescription $description;
  public ProjectId $id;
  public ProjectName $name;
}

class UpdateProjectResult {
}

class UpdateTeamMemberRequest {
  public ProjectId $project_id;
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
  public UserArn $user_arn;
}

class UpdateTeamMemberResult {
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
  public UserArn $user_arn;
}

class UpdateUserProfileRequest {
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;
}

class UpdateUserProfileResult {
  public CreatedTimestamp $created_timestamp;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public LastModifiedTimestamp $last_modified_timestamp;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;
}

class UserArn {
}

class UserProfileAlreadyExistsException {
}

class UserProfileDisplayName {
}

class UserProfileNotFoundException {
}

class UserProfileSummary {
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;
}

class UserProfilesList {
}

class ValidationException {
}

