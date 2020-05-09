<?hh // strict
namespace slack\aws\codestar;

interface CodeStar {
  public function DescribeUserProfile(DescribeUserProfileRequest) Awaitable<Errors\Result<DescribeUserProfileResult>>;
  public function DisassociateTeamMember(DisassociateTeamMemberRequest) Awaitable<Errors\Result<DisassociateTeamMemberResult>>;
  public function ListResources(ListResourcesRequest) Awaitable<Errors\Result<ListResourcesResult>>;
  public function ListTeamMembers(ListTeamMembersRequest) Awaitable<Errors\Result<ListTeamMembersResult>>;
  public function UntagProject(UntagProjectRequest) Awaitable<Errors\Result<UntagProjectResult>>;
  public function AssociateTeamMember(AssociateTeamMemberRequest) Awaitable<Errors\Result<AssociateTeamMemberResult>>;
  public function DeleteProject(DeleteProjectRequest) Awaitable<Errors\Result<DeleteProjectResult>>;
  public function DescribeProject(DescribeProjectRequest) Awaitable<Errors\Result<DescribeProjectResult>>;
  public function UpdateProject(UpdateProjectRequest) Awaitable<Errors\Result<UpdateProjectResult>>;
  public function UpdateTeamMember(UpdateTeamMemberRequest) Awaitable<Errors\Result<UpdateTeamMemberResult>>;
  public function UpdateUserProfile(UpdateUserProfileRequest) Awaitable<Errors\Result<UpdateUserProfileResult>>;
  public function CreateUserProfile(CreateUserProfileRequest) Awaitable<Errors\Result<CreateUserProfileResult>>;
  public function DeleteUserProfile(DeleteUserProfileRequest) Awaitable<Errors\Result<DeleteUserProfileResult>>;
  public function TagProject(TagProjectRequest) Awaitable<Errors\Result<TagProjectResult>>;
  public function CreateProject(CreateProjectRequest) Awaitable<Errors\Result<CreateProjectResult>>;
  public function ListProjects(ListProjectsRequest) Awaitable<Errors\Result<ListProjectsResult>>;
  public function ListTagsForProject(ListTagsForProjectRequest) Awaitable<Errors\Result<ListTagsForProjectResult>>;
  public function ListUserProfiles(ListUserProfilesRequest) Awaitable<Errors\Result<ListUserProfilesResult>>;
}

class DisassociateTeamMemberResult {
}

class TagKeys {
}

class TemplateParameterValue {
}

class UntagProjectResult {
}

class ConcurrentModificationException {
}

class DescribeUserProfileRequest {
  public UserArn $user_arn;
}

class RepositoryOwner {
}

class CreateProjectResult {
  public ProjectId $id;
  public ProjectArn $arn;
  public ClientRequestToken $client_request_token;
  public ProjectTemplateId $project_template_id;
}

class TemplateParameterMap {
}

class CreateUserProfileRequest {
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;
  public UserProfileDisplayName $display_name;
}

class DeleteProjectResult {
  public StackId $stack_id;
  public ProjectArn $project_arn;
}

class ListResourcesRequest {
  public ProjectId $project_id;
  public PaginationToken $next_token;
  public MaxResults $max_results;
}

class ListTeamMembersRequest {
  public ProjectId $project_id;
  public PaginationToken $next_token;
  public MaxResults $max_results;
}

class ProjectDescription {
}

class UpdateProjectRequest {
  public ProjectId $id;
  public ProjectName $name;
  public ProjectDescription $description;
}

class AssociateTeamMemberResult {
  public ClientRequestToken $client_request_token;
}

class DescribeProjectRequest {
  public ProjectId $id;
}

class UpdateUserProfileRequest {
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public UserArn $user_arn;
}

class DeleteUserProfileResult {
  public UserArn $user_arn;
}

class ResourceId {
}

class S3Location {
  public BucketKey $bucket_key;
  public BucketName $bucket_name;
}

class RepositoryDescription {
}

class RepositoryType {
}

class DeleteStack {
}

class Resource {
  public ResourceId $id;
}

class TagValue {
}

class DescribeUserProfileResult {
  public UserArn $user_arn;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public CreatedTimestamp $created_timestamp;
  public LastModifiedTimestamp $last_modified_timestamp;
}

class UserProfileAlreadyExistsException {
}

class GitHubPersonalToken {
}

class ListResourcesResult {
  public ResourcesResult $resources;
  public PaginationToken $next_token;
}

class ProjectNotFoundException {
}

class UntagProjectRequest {
  public TagKeys $tags;
  public ProjectId $id;
}

class CodeDestination {
  public CodeCommitCodeDestination $code_commit;
  public GitHubCodeDestination $git_hub;
}

class Reason {
}

class UserArn {
}

class UpdateTeamMemberRequest {
  public ProjectId $project_id;
  public UserArn $user_arn;
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
}

class ProjectsList {
}

class InvalidNextTokenException {
}

class ListTagsForProjectResult {
  public Tags $tags;
  public PaginationToken $next_token;
}

class State {
}

class Toolchain {
  public ToolchainSource $source;
  public RoleArn $role_arn;
  public TemplateParameterMap $stack_parameters;
}

class ToolchainSource {
  public S3Location $s_3;
}

class UpdateTeamMemberResult {
  public UserArn $user_arn;
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
}

class CreateProjectRequest {
  public ProjectName $name;
  public ProjectId $id;
  public ProjectDescription $description;
  public ClientRequestToken $client_request_token;
  public SourceCode $source_code;
  public Toolchain $toolchain;
  public Tags $tags;
}

class CreateUserProfileResult {
  public LastModifiedTimestamp $last_modified_timestamp;
  public UserArn $user_arn;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public CreatedTimestamp $created_timestamp;
}

class RepositoryIsPrivate {
}

class ResourcesResult {
}

class RoleArn {
}

class StackId {
}

class CodeSource {
  public S3Location $s_3;
}

class CreatedTimestamp {
}

class DeleteUserProfileRequest {
  public UserArn $user_arn;
}

class ListProjectsResult {
  public ProjectsList $projects;
  public PaginationToken $next_token;
}

class TagProjectResult {
  public Tags $tags;
}

class ProjectStatus {
  public State $state;
  public Reason $reason;
}

class UserProfilesList {
}

class GitHubCodeDestination {
  public RepositoryEnableIssues $issues_enabled;
  public GitHubPersonalToken $token;
  public RepositoryName $name;
  public RepositoryDescription $description;
  public RepositoryType $type;
  public RepositoryOwner $owner;
  public RepositoryIsPrivate $private_repository;
}

class ProjectName {
}

class Role {
}

class UserProfileNotFoundException {
}

class UserProfileDisplayName {
}

class ListTeamMembersResult {
  public TeamMemberResult $team_members;
  public PaginationToken $next_token;
}

class SshPublicKey {
}

class UserProfileSummary {
  public UserArn $user_arn;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
}

class CodeCommitCodeDestination {
  public RepositoryName $name;
}

class ListUserProfilesRequest {
  public PaginationToken $next_token;
  public MaxResults $max_results;
}

class ProjectCreationFailedException {
}

class TagKey {
}

class Tags {
}

class BucketName {
}

class ListProjectsRequest {
  public PaginationToken $next_token;
  public MaxResults $max_results;
}

class TeamMemberAlreadyAssociatedException {
}

class SourceCode {
}

class TagProjectRequest {
  public ProjectId $id;
  public Tags $tags;
}

class TemplateParameterKey {
}

class UpdateUserProfileResult {
  public UserArn $user_arn;
  public UserProfileDisplayName $display_name;
  public Email $email_address;
  public SshPublicKey $ssh_public_key;
  public CreatedTimestamp $created_timestamp;
  public LastModifiedTimestamp $last_modified_timestamp;
}

class ListTagsForProjectRequest {
  public ProjectId $id;
  public PaginationToken $next_token;
  public MaxResults $max_results;
}

class ProjectSummary {
  public ProjectId $project_id;
  public ProjectArn $project_arn;
}

class ProjectArn {
}

class LimitExceededException {
}

class ListUserProfilesResult {
  public UserProfilesList $user_profiles;
  public PaginationToken $next_token;
}

class RepositoryEnableIssues {
}

class DescribeProjectResult {
  public CreatedTimestamp $created_time_stamp;
  public StackId $stack_id;
  public ProjectTemplateId $project_template_id;
  public ProjectStatus $status;
  public ProjectArn $arn;
  public ProjectId $id;
  public ProjectDescription $description;
  public ClientRequestToken $client_request_token;
  public ProjectName $name;
}

class LastModifiedTimestamp {
}

class ProjectAlreadyExistsException {
}

class RepositoryName {
}

class ValidationException {
}

class BucketKey {
}

class Code {
  public CodeSource $source;
  public CodeDestination $destination;
}

class DeleteProjectRequest {
  public ProjectId $id;
  public ClientRequestToken $client_request_token;
  public DeleteStack $delete_stack;
}

class Email {
}

class MaxResults {
}

class TeamMemberResult {
}

class PaginationToken {
}

class RemoteAccessAllowed {
}

class AssociateTeamMemberRequest {
  public ProjectId $project_id;
  public ClientRequestToken $client_request_token;
  public UserArn $user_arn;
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
}

class ClientRequestToken {
}

class ProjectConfigurationException {
}

class ProjectId {
}

class ProjectTemplateId {
}

class UpdateProjectResult {
}

class DisassociateTeamMemberRequest {
  public ProjectId $project_id;
  public UserArn $user_arn;
}

class InvalidServiceRoleException {
}

class TeamMember {
  public UserArn $user_arn;
  public Role $project_role;
  public RemoteAccessAllowed $remote_access_allowed;
}

class TeamMemberNotFoundException {
}

