<?hh // strict
namespace slack\aws\workdocs;

interface WorkDocs {
  public function AbortDocumentVersionUpload(AbortDocumentVersionUploadRequest): Awaitable<Errors\Error>;
  public function ActivateUser(ActivateUserRequest): Awaitable<Errors\Result<ActivateUserResponse>>;
  public function AddResourcePermissions(AddResourcePermissionsRequest): Awaitable<Errors\Result<AddResourcePermissionsResponse>>;
  public function CreateComment(CreateCommentRequest): Awaitable<Errors\Result<CreateCommentResponse>>;
  public function CreateCustomMetadata(CreateCustomMetadataRequest): Awaitable<Errors\Result<CreateCustomMetadataResponse>>;
  public function CreateFolder(CreateFolderRequest): Awaitable<Errors\Result<CreateFolderResponse>>;
  public function CreateLabels(CreateLabelsRequest): Awaitable<Errors\Result<CreateLabelsResponse>>;
  public function CreateNotificationSubscription(CreateNotificationSubscriptionRequest): Awaitable<Errors\Result<CreateNotificationSubscriptionResponse>>;
  public function CreateUser(CreateUserRequest): Awaitable<Errors\Result<CreateUserResponse>>;
  public function DeactivateUser(DeactivateUserRequest): Awaitable<Errors\Error>;
  public function DeleteComment(DeleteCommentRequest): Awaitable<Errors\Error>;
  public function DeleteCustomMetadata(DeleteCustomMetadataRequest): Awaitable<Errors\Result<DeleteCustomMetadataResponse>>;
  public function DeleteDocument(DeleteDocumentRequest): Awaitable<Errors\Error>;
  public function DeleteFolder(DeleteFolderRequest): Awaitable<Errors\Error>;
  public function DeleteFolderContents(DeleteFolderContentsRequest): Awaitable<Errors\Error>;
  public function DeleteLabels(DeleteLabelsRequest): Awaitable<Errors\Result<DeleteLabelsResponse>>;
  public function DeleteNotificationSubscription(DeleteNotificationSubscriptionRequest): Awaitable<Errors\Error>;
  public function DeleteUser(DeleteUserRequest): Awaitable<Errors\Error>;
  public function DescribeActivities(DescribeActivitiesRequest): Awaitable<Errors\Result<DescribeActivitiesResponse>>;
  public function DescribeComments(DescribeCommentsRequest): Awaitable<Errors\Result<DescribeCommentsResponse>>;
  public function DescribeDocumentVersions(DescribeDocumentVersionsRequest): Awaitable<Errors\Result<DescribeDocumentVersionsResponse>>;
  public function DescribeFolderContents(DescribeFolderContentsRequest): Awaitable<Errors\Result<DescribeFolderContentsResponse>>;
  public function DescribeGroups(DescribeGroupsRequest): Awaitable<Errors\Result<DescribeGroupsResponse>>;
  public function DescribeNotificationSubscriptions(DescribeNotificationSubscriptionsRequest): Awaitable<Errors\Result<DescribeNotificationSubscriptionsResponse>>;
  public function DescribeResourcePermissions(DescribeResourcePermissionsRequest): Awaitable<Errors\Result<DescribeResourcePermissionsResponse>>;
  public function DescribeRootFolders(DescribeRootFoldersRequest): Awaitable<Errors\Result<DescribeRootFoldersResponse>>;
  public function DescribeUsers(DescribeUsersRequest): Awaitable<Errors\Result<DescribeUsersResponse>>;
  public function GetCurrentUser(GetCurrentUserRequest): Awaitable<Errors\Result<GetCurrentUserResponse>>;
  public function GetDocument(GetDocumentRequest): Awaitable<Errors\Result<GetDocumentResponse>>;
  public function GetDocumentPath(GetDocumentPathRequest): Awaitable<Errors\Result<GetDocumentPathResponse>>;
  public function GetDocumentVersion(GetDocumentVersionRequest): Awaitable<Errors\Result<GetDocumentVersionResponse>>;
  public function GetFolder(GetFolderRequest): Awaitable<Errors\Result<GetFolderResponse>>;
  public function GetFolderPath(GetFolderPathRequest): Awaitable<Errors\Result<GetFolderPathResponse>>;
  public function GetResources(GetResourcesRequest): Awaitable<Errors\Result<GetResourcesResponse>>;
  public function InitiateDocumentVersionUpload(InitiateDocumentVersionUploadRequest): Awaitable<Errors\Result<InitiateDocumentVersionUploadResponse>>;
  public function RemoveAllResourcePermissions(RemoveAllResourcePermissionsRequest): Awaitable<Errors\Error>;
  public function RemoveResourcePermission(RemoveResourcePermissionRequest): Awaitable<Errors\Error>;
  public function UpdateDocument(UpdateDocumentRequest): Awaitable<Errors\Error>;
  public function UpdateDocumentVersion(UpdateDocumentVersionRequest): Awaitable<Errors\Error>;
  public function UpdateFolder(UpdateFolderRequest): Awaitable<Errors\Error>;
  public function UpdateUser(UpdateUserRequest): Awaitable<Errors\Result<UpdateUserResponse>>;
}

class AbortDocumentVersionUploadRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public DocumentVersionIdType $version_id;
}

class ActivateUserRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $user_id;
}

class ActivateUserResponse {
  public User $user;
}

class Activity {
  public CommentMetadata $comment_metadata;
  public UserMetadata $initiator;
  public BooleanType $is_indirect_activity;
  public IdType $organization_id;
  public ResourceMetadata $original_parent;
  public Participants $participants;
  public ResourceMetadata $resource_metadata;
  public TimestampType $time_stamp;
  public ActivityType $type;
}

class ActivityNamesFilterType {
}

class ActivityType {
}

class AddResourcePermissionsRequest {
  public AuthenticationHeaderType $authentication_token;
  public NotificationOptions $notification_options;
  public SharePrincipalList $principals;
  public ResourceIdType $resource_id;
}

class AddResourcePermissionsResponse {
  public ShareResultsList $share_results;
}

class AuthenticationHeaderType {
}

class BooleanEnumType {
}

class BooleanType {
}

class Comment {
  public CommentIdType $comment_id;
  public User $contributor;
  public TimestampType $created_timestamp;
  public CommentIdType $parent_id;
  public IdType $recipient_id;
  public CommentStatusType $status;
  public CommentTextType $text;
  public CommentIdType $thread_id;
  public CommentVisibilityType $visibility;
}

class CommentIdType {
}

class CommentList {
}

class CommentMetadata {
  public CommentIdType $comment_id;
  public CommentStatusType $comment_status;
  public User $contributor;
  public TimestampType $created_timestamp;
  public IdType $recipient_id;
}

class CommentStatusType {
}

class CommentTextType {
}

class CommentVisibilityType {
}

class ConcurrentModificationException {
  public ErrorMessageType $message;
}

class ConflictingOperationException {
  public ErrorMessageType $message;
}

class CreateCommentRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public BooleanType $notify_collaborators;
  public CommentIdType $parent_id;
  public CommentTextType $text;
  public CommentIdType $thread_id;
  public DocumentVersionIdType $version_id;
  public CommentVisibilityType $visibility;
}

class CreateCommentResponse {
  public Comment $comment;
}

class CreateCustomMetadataRequest {
  public AuthenticationHeaderType $authentication_token;
  public CustomMetadataMap $custom_metadata;
  public ResourceIdType $resource_id;
  public DocumentVersionIdType $version_id;
}

class CreateCustomMetadataResponse {
}

class CreateFolderRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceNameType $name;
  public ResourceIdType $parent_folder_id;
}

class CreateFolderResponse {
  public FolderMetadata $metadata;
}

class CreateLabelsRequest {
  public AuthenticationHeaderType $authentication_token;
  public SharedLabels $labels;
  public ResourceIdType $resource_id;
}

class CreateLabelsResponse {
}

class CreateNotificationSubscriptionRequest {
  public SubscriptionEndPointType $endpoint;
  public IdType $organization_id;
  public SubscriptionProtocolType $protocol;
  public SubscriptionType $subscription_type;
}

class CreateNotificationSubscriptionResponse {
  public Subscription $subscription;
}

class CreateUserRequest {
  public AuthenticationHeaderType $authentication_token;
  public EmailAddressType $email_address;
  public UserAttributeValueType $given_name;
  public IdType $organization_id;
  public PasswordType $password;
  public StorageRuleType $storage_rule;
  public UserAttributeValueType $surname;
  public TimeZoneIdType $time_zone_id;
  public UsernameType $username;
}

class CreateUserResponse {
  public User $user;
}

class CustomMetadataKeyList {
}

class CustomMetadataKeyType {
}

class CustomMetadataLimitExceededException {
  public ErrorMessageType $message;
}

class CustomMetadataMap {
}

class CustomMetadataValueType {
}

class DeactivateUserRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $user_id;
}

class DeactivatingLastSystemUserException {
}

class DeleteCommentRequest {
  public AuthenticationHeaderType $authentication_token;
  public CommentIdType $comment_id;
  public ResourceIdType $document_id;
  public DocumentVersionIdType $version_id;
}

class DeleteCustomMetadataRequest {
  public AuthenticationHeaderType $authentication_token;
  public BooleanType $delete_all;
  public CustomMetadataKeyList $keys;
  public ResourceIdType $resource_id;
  public DocumentVersionIdType $version_id;
}

class DeleteCustomMetadataResponse {
}

class DeleteDocumentRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
}

class DeleteFolderContentsRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $folder_id;
}

class DeleteFolderRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $folder_id;
}

class DeleteLabelsRequest {
  public AuthenticationHeaderType $authentication_token;
  public BooleanType $delete_all;
  public SharedLabels $labels;
  public ResourceIdType $resource_id;
}

class DeleteLabelsResponse {
}

class DeleteNotificationSubscriptionRequest {
  public IdType $organization_id;
  public IdType $subscription_id;
}

class DeleteUserRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $user_id;
}

class DescribeActivitiesRequest {
  public ActivityNamesFilterType $activity_types;
  public AuthenticationHeaderType $authentication_token;
  public TimestampType $end_time;
  public BooleanType $include_indirect_activities;
  public LimitType $limit;
  public MarkerType $marker;
  public IdType $organization_id;
  public IdType $resource_id;
  public TimestampType $start_time;
  public IdType $user_id;
}

class DescribeActivitiesResponse {
  public MarkerType $marker;
  public UserActivities $user_activities;
}

class DescribeCommentsRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public LimitType $limit;
  public MarkerType $marker;
  public DocumentVersionIdType $version_id;
}

class DescribeCommentsResponse {
  public CommentList $comments;
  public MarkerType $marker;
}

class DescribeDocumentVersionsRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public FieldNamesType $fields;
  public FieldNamesType $include;
  public LimitType $limit;
  public PageMarkerType $marker;
}

class DescribeDocumentVersionsResponse {
  public DocumentVersionMetadataList $document_versions;
  public PageMarkerType $marker;
}

class DescribeFolderContentsRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $folder_id;
  public FieldNamesType $include;
  public LimitType $limit;
  public PageMarkerType $marker;
  public OrderType $order;
  public ResourceSortType $sort;
  public FolderContentType $type;
}

class DescribeFolderContentsResponse {
  public DocumentMetadataList $documents;
  public FolderMetadataList $folders;
  public PageMarkerType $marker;
}

class DescribeGroupsRequest {
  public AuthenticationHeaderType $authentication_token;
  public PositiveIntegerType $limit;
  public MarkerType $marker;
  public IdType $organization_id;
  public SearchQueryType $search_query;
}

class DescribeGroupsResponse {
  public GroupMetadataList $groups;
  public MarkerType $marker;
}

class DescribeNotificationSubscriptionsRequest {
  public LimitType $limit;
  public PageMarkerType $marker;
  public IdType $organization_id;
}

class DescribeNotificationSubscriptionsResponse {
  public PageMarkerType $marker;
  public SubscriptionList $subscriptions;
}

class DescribeResourcePermissionsRequest {
  public AuthenticationHeaderType $authentication_token;
  public LimitType $limit;
  public PageMarkerType $marker;
  public IdType $principal_id;
  public ResourceIdType $resource_id;
}

class DescribeResourcePermissionsResponse {
  public PageMarkerType $marker;
  public PrincipalList $principals;
}

class DescribeRootFoldersRequest {
  public AuthenticationHeaderType $authentication_token;
  public LimitType $limit;
  public PageMarkerType $marker;
}

class DescribeRootFoldersResponse {
  public FolderMetadataList $folders;
  public PageMarkerType $marker;
}

class DescribeUsersRequest {
  public AuthenticationHeaderType $authentication_token;
  public FieldNamesType $fields;
  public UserFilterType $include;
  public LimitType $limit;
  public PageMarkerType $marker;
  public OrderType $order;
  public IdType $organization_id;
  public SearchQueryType $query;
  public UserSortType $sort;
  public UserIdsType $user_ids;
}

class DescribeUsersResponse {
  public PageMarkerType $marker;
  public SizeType $total_number_of_users;
  public OrganizationUserList $users;
}

class DocumentContentType {
}

class DocumentLockedForCommentsException {
  public ErrorMessageType $message;
}

class DocumentMetadata {
  public TimestampType $created_timestamp;
  public IdType $creator_id;
  public ResourceIdType $id;
  public SharedLabels $labels;
  public DocumentVersionMetadata $latest_version_metadata;
  public TimestampType $modified_timestamp;
  public ResourceIdType $parent_folder_id;
  public ResourceStateType $resource_state;
}

class DocumentMetadataList {
}

class DocumentSourceType {
}

class DocumentSourceUrlMap {
}

class DocumentStatusType {
}

class DocumentThumbnailType {
}

class DocumentThumbnailUrlMap {
}

class DocumentVersionIdType {
}

class DocumentVersionMetadata {
  public TimestampType $content_created_timestamp;
  public TimestampType $content_modified_timestamp;
  public DocumentContentType $content_type;
  public TimestampType $created_timestamp;
  public IdType $creator_id;
  public DocumentVersionIdType $id;
  public TimestampType $modified_timestamp;
  public ResourceNameType $name;
  public HashType $signature;
  public SizeType $size;
  public DocumentSourceUrlMap $source;
  public DocumentStatusType $status;
  public DocumentThumbnailUrlMap $thumbnail;
}

class DocumentVersionMetadataList {
}

class DocumentVersionStatus {
}

class DraftUploadOutOfSyncException {
  public ErrorMessageType $message;
}

class EmailAddressType {
}

class EntityAlreadyExistsException {
  public ErrorMessageType $message;
}

class EntityIdList {
}

class EntityNotExistsException {
  public EntityIdList $entity_ids;
  public ErrorMessageType $message;
}

class ErrorMessageType {
}

class FailedDependencyException {
  public ErrorMessageType $message;
}

class FieldNamesType {
}

class FolderContentType {
}

class FolderMetadata {
  public TimestampType $created_timestamp;
  public IdType $creator_id;
  public ResourceIdType $id;
  public SharedLabels $labels;
  public SizeType $latest_version_size;
  public TimestampType $modified_timestamp;
  public ResourceNameType $name;
  public ResourceIdType $parent_folder_id;
  public ResourceStateType $resource_state;
  public HashType $signature;
  public SizeType $size;
}

class FolderMetadataList {
}

class GetCurrentUserRequest {
  public AuthenticationHeaderType $authentication_token;
}

class GetCurrentUserResponse {
  public User $user;
}

class GetDocumentPathRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $document_id;
  public FieldNamesType $fields;
  public LimitType $limit;
  public PageMarkerType $marker;
}

class GetDocumentPathResponse {
  public ResourcePath $path;
}

class GetDocumentRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public BooleanType $include_custom_metadata;
}

class GetDocumentResponse {
  public CustomMetadataMap $custom_metadata;
  public DocumentMetadata $metadata;
}

class GetDocumentVersionRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public FieldNamesType $fields;
  public BooleanType $include_custom_metadata;
  public DocumentVersionIdType $version_id;
}

class GetDocumentVersionResponse {
  public CustomMetadataMap $custom_metadata;
  public DocumentVersionMetadata $metadata;
}

class GetFolderPathRequest {
  public AuthenticationHeaderType $authentication_token;
  public FieldNamesType $fields;
  public IdType $folder_id;
  public LimitType $limit;
  public PageMarkerType $marker;
}

class GetFolderPathResponse {
  public ResourcePath $path;
}

class GetFolderRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $folder_id;
  public BooleanType $include_custom_metadata;
}

class GetFolderResponse {
  public CustomMetadataMap $custom_metadata;
  public FolderMetadata $metadata;
}

class GetResourcesRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceCollectionType $collection_type;
  public LimitType $limit;
  public PageMarkerType $marker;
  public IdType $user_id;
}

class GetResourcesResponse {
  public DocumentMetadataList $documents;
  public FolderMetadataList $folders;
  public PageMarkerType $marker;
}

class GroupMetadata {
  public IdType $id;
  public GroupNameType $name;
}

class GroupMetadataList {
}

class GroupNameType {
}

class HashType {
}

class HeaderNameType {
}

class HeaderValueType {
}

class IdType {
}

class IllegalUserStateException {
  public ErrorMessageType $message;
}

class InitiateDocumentVersionUploadRequest {
  public AuthenticationHeaderType $authentication_token;
  public TimestampType $content_created_timestamp;
  public TimestampType $content_modified_timestamp;
  public DocumentContentType $content_type;
  public SizeType $document_size_in_bytes;
  public ResourceIdType $id;
  public ResourceNameType $name;
  public ResourceIdType $parent_folder_id;
}

class InitiateDocumentVersionUploadResponse {
  public DocumentMetadata $metadata;
  public UploadMetadata $upload_metadata;
}

class InvalidArgumentException {
  public ErrorMessageType $message;
}

class InvalidCommentOperationException {
  public ErrorMessageType $message;
}

class InvalidOperationException {
  public ErrorMessageType $message;
}

class InvalidPasswordException {
  public ErrorMessageType $message;
}

class LimitExceededException {
  public ErrorMessageType $message;
}

class LimitType {
}

class LocaleType {
}

class MarkerType {
}

class MessageType {
}

class NotificationOptions {
  public MessageType $email_message;
  public BooleanType $send_email;
}

class OrderType {
}

class OrganizationUserList {
}

class PageMarkerType {
}

class Participants {
  public GroupMetadataList $groups;
  public UserMetadataList $users;
}

class PasswordType {
}

class PermissionInfo {
  public RoleType $role;
  public RolePermissionType $type;
}

class PermissionInfoList {
}

class PositiveIntegerType {
}

class PositiveSizeType {
}

class Principal {
  public IdType $id;
  public PermissionInfoList $roles;
  public PrincipalType $type;
}

class PrincipalList {
}

class PrincipalType {
}

class ProhibitedStateException {
  public ErrorMessageType $message;
}

class RemoveAllResourcePermissionsRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $resource_id;
}

class RemoveResourcePermissionRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $principal_id;
  public PrincipalType $principal_type;
  public ResourceIdType $resource_id;
}

class RequestedEntityTooLargeException {
  public ErrorMessageType $message;
}

class ResourceAlreadyCheckedOutException {
  public ErrorMessageType $message;
}

class ResourceCollectionType {
}

class ResourceIdType {
}

class ResourceMetadata {
  public ResourceIdType $id;
  public ResourceNameType $name;
  public ResourceNameType $original_name;
  public UserMetadata $owner;
  public ResourceIdType $parent_id;
  public ResourceType $type;
  public DocumentVersionIdType $version_id;
}

class ResourceNameType {
}

class ResourcePath {
  public ResourcePathComponentList $components;
}

class ResourcePathComponent {
  public IdType $id;
  public ResourceNameType $name;
}

class ResourcePathComponentList {
}

class ResourceSortType {
}

class ResourceStateType {
}

class ResourceType {
}

class RolePermissionType {
}

class RoleType {
}

class SearchQueryType {
}

class ServiceUnavailableException {
  public ErrorMessageType $message;
}

class SharePrincipal {
  public IdType $id;
  public RoleType $role;
  public PrincipalType $type;
}

class SharePrincipalList {
}

class ShareResult {
  public IdType $invitee_principal_id;
  public IdType $principal_id;
  public RoleType $role;
  public ResourceIdType $share_id;
  public ShareStatusType $status;
  public MessageType $status_message;
}

class ShareResultsList {
}

class ShareStatusType {
}

class SharedLabel {
}

class SharedLabels {
}

class SignedHeaderMap {
}

class SizeType {
}

class StorageLimitExceededException {
  public ErrorMessageType $message;
}

class StorageLimitWillExceedException {
  public ErrorMessageType $message;
}

class StorageRuleType {
  public PositiveSizeType $storage_allocated_in_bytes;
  public StorageType $storage_type;
}

class StorageType {
}

class Subscription {
  public SubscriptionEndPointType $end_point;
  public SubscriptionProtocolType $protocol;
  public IdType $subscription_id;
}

class SubscriptionEndPointType {
}

class SubscriptionList {
}

class SubscriptionProtocolType {
}

class SubscriptionType {
}

class TimeZoneIdType {
}

class TimestampType {
}

class TooManyLabelsException {
  public ErrorMessageType $message;
}

class TooManySubscriptionsException {
  public ErrorMessageType $message;
}

class UnauthorizedOperationException {
}

class UnauthorizedResourceAccessException {
  public ErrorMessageType $message;
}

class UpdateDocumentRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public ResourceNameType $name;
  public ResourceIdType $parent_folder_id;
  public ResourceStateType $resource_state;
}

class UpdateDocumentVersionRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public DocumentVersionIdType $version_id;
  public DocumentVersionStatus $version_status;
}

class UpdateFolderRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $folder_id;
  public ResourceNameType $name;
  public ResourceIdType $parent_folder_id;
  public ResourceStateType $resource_state;
}

class UpdateUserRequest {
  public AuthenticationHeaderType $authentication_token;
  public UserAttributeValueType $given_name;
  public BooleanEnumType $grant_poweruser_privileges;
  public LocaleType $locale;
  public StorageRuleType $storage_rule;
  public UserAttributeValueType $surname;
  public TimeZoneIdType $time_zone_id;
  public UserType $type;
  public IdType $user_id;
}

class UpdateUserResponse {
  public User $user;
}

class UploadMetadata {
  public SignedHeaderMap $signed_headers;
  public UrlType $upload_url;
}

class UrlType {
}

class User {
  public TimestampType $created_timestamp;
  public EmailAddressType $email_address;
  public UserAttributeValueType $given_name;
  public IdType $id;
  public LocaleType $locale;
  public TimestampType $modified_timestamp;
  public IdType $organization_id;
  public ResourceIdType $recycle_bin_folder_id;
  public ResourceIdType $root_folder_id;
  public UserStatusType $status;
  public UserStorageMetadata $storage;
  public UserAttributeValueType $surname;
  public TimeZoneIdType $time_zone_id;
  public UserType $type;
  public UsernameType $username;
}

class UserActivities {
}

class UserAttributeValueType {
}

class UserFilterType {
}

class UserIdsType {
}

class UserMetadata {
  public EmailAddressType $email_address;
  public UserAttributeValueType $given_name;
  public IdType $id;
  public UserAttributeValueType $surname;
  public UsernameType $username;
}

class UserMetadataList {
}

class UserSortType {
}

class UserStatusType {
}

class UserStorageMetadata {
  public StorageRuleType $storage_rule;
  public SizeType $storage_utilized_in_bytes;
}

class UserType {
}

class UsernameType {
}

