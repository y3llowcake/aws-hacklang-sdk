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

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => ResourceIdType,
  ?'version_id' => DocumentVersionIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class ActivateUserRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $user_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'user_id' => IdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class ActivateUserResponse {
  public User $user;

  public function __construct(shape(
  ?'user' => User,
  ) $s = shape()) {
    $this->user = $user ?? null;
  }
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

  public function __construct(shape(
  ?'comment_metadata' => CommentMetadata,
  ?'initiator' => UserMetadata,
  ?'is_indirect_activity' => BooleanType,
  ?'organization_id' => IdType,
  ?'original_parent' => ResourceMetadata,
  ?'participants' => Participants,
  ?'resource_metadata' => ResourceMetadata,
  ?'time_stamp' => TimestampType,
  ?'type' => ActivityType,
  ) $s = shape()) {
    $this->comment_metadata = $comment_metadata ?? null;
    $this->initiator = $initiator ?? null;
    $this->is_indirect_activity = $is_indirect_activity ?? false;
    $this->organization_id = $organization_id ?? "";
    $this->original_parent = $original_parent ?? null;
    $this->participants = $participants ?? null;
    $this->resource_metadata = $resource_metadata ?? null;
    $this->time_stamp = $time_stamp ?? 0;
    $this->type = $type ?? "";
  }
}

type ActivityNamesFilterType = string;

type ActivityType = string;

class AddResourcePermissionsRequest {
  public AuthenticationHeaderType $authentication_token;
  public NotificationOptions $notification_options;
  public SharePrincipalList $principals;
  public ResourceIdType $resource_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'notification_options' => NotificationOptions,
  ?'principals' => SharePrincipalList,
  ?'resource_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->notification_options = $notification_options ?? null;
    $this->principals = $principals ?? [];
    $this->resource_id = $resource_id ?? "";
  }
}

class AddResourcePermissionsResponse {
  public ShareResultsList $share_results;

  public function __construct(shape(
  ?'share_results' => ShareResultsList,
  ) $s = shape()) {
    $this->share_results = $share_results ?? [];
  }
}

type AuthenticationHeaderType = string;

type BooleanEnumType = string;

type BooleanType = bool;

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

  public function __construct(shape(
  ?'comment_id' => CommentIdType,
  ?'contributor' => User,
  ?'created_timestamp' => TimestampType,
  ?'parent_id' => CommentIdType,
  ?'recipient_id' => IdType,
  ?'status' => CommentStatusType,
  ?'text' => CommentTextType,
  ?'thread_id' => CommentIdType,
  ?'visibility' => CommentVisibilityType,
  ) $s = shape()) {
    $this->comment_id = $comment_id ?? "";
    $this->contributor = $contributor ?? null;
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->parent_id = $parent_id ?? "";
    $this->recipient_id = $recipient_id ?? "";
    $this->status = $status ?? "";
    $this->text = $text ?? "";
    $this->thread_id = $thread_id ?? "";
    $this->visibility = $visibility ?? "";
  }
}

type CommentIdType = string;

type CommentList = vec<Comment>;

class CommentMetadata {
  public CommentIdType $comment_id;
  public CommentStatusType $comment_status;
  public User $contributor;
  public TimestampType $created_timestamp;
  public IdType $recipient_id;

  public function __construct(shape(
  ?'comment_id' => CommentIdType,
  ?'comment_status' => CommentStatusType,
  ?'contributor' => User,
  ?'created_timestamp' => TimestampType,
  ?'recipient_id' => IdType,
  ) $s = shape()) {
    $this->comment_id = $comment_id ?? "";
    $this->comment_status = $comment_status ?? "";
    $this->contributor = $contributor ?? null;
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->recipient_id = $recipient_id ?? "";
  }
}

type CommentStatusType = string;

type CommentTextType = string;

type CommentVisibilityType = string;

class ConcurrentModificationException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ConflictingOperationException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => ResourceIdType,
  ?'notify_collaborators' => BooleanType,
  ?'parent_id' => CommentIdType,
  ?'text' => CommentTextType,
  ?'thread_id' => CommentIdType,
  ?'version_id' => DocumentVersionIdType,
  ?'visibility' => CommentVisibilityType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
    $this->notify_collaborators = $notify_collaborators ?? false;
    $this->parent_id = $parent_id ?? "";
    $this->text = $text ?? "";
    $this->thread_id = $thread_id ?? "";
    $this->version_id = $version_id ?? "";
    $this->visibility = $visibility ?? "";
  }
}

class CreateCommentResponse {
  public Comment $comment;

  public function __construct(shape(
  ?'comment' => Comment,
  ) $s = shape()) {
    $this->comment = $comment ?? null;
  }
}

class CreateCustomMetadataRequest {
  public AuthenticationHeaderType $authentication_token;
  public CustomMetadataMap $custom_metadata;
  public ResourceIdType $resource_id;
  public DocumentVersionIdType $version_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'custom_metadata' => CustomMetadataMap,
  ?'resource_id' => ResourceIdType,
  ?'version_id' => DocumentVersionIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->custom_metadata = $custom_metadata ?? [];
    $this->resource_id = $resource_id ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class CreateCustomMetadataResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateFolderRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceNameType $name;
  public ResourceIdType $parent_folder_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'name' => ResourceNameType,
  ?'parent_folder_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->name = $name ?? "";
    $this->parent_folder_id = $parent_folder_id ?? "";
  }
}

class CreateFolderResponse {
  public FolderMetadata $metadata;

  public function __construct(shape(
  ?'metadata' => FolderMetadata,
  ) $s = shape()) {
    $this->metadata = $metadata ?? null;
  }
}

class CreateLabelsRequest {
  public AuthenticationHeaderType $authentication_token;
  public SharedLabels $labels;
  public ResourceIdType $resource_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'labels' => SharedLabels,
  ?'resource_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->labels = $labels ?? [];
    $this->resource_id = $resource_id ?? "";
  }
}

class CreateLabelsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateNotificationSubscriptionRequest {
  public SubscriptionEndPointType $endpoint;
  public IdType $organization_id;
  public SubscriptionProtocolType $protocol;
  public SubscriptionType $subscription_type;

  public function __construct(shape(
  ?'endpoint' => SubscriptionEndPointType,
  ?'organization_id' => IdType,
  ?'protocol' => SubscriptionProtocolType,
  ?'subscription_type' => SubscriptionType,
  ) $s = shape()) {
    $this->endpoint = $endpoint ?? "";
    $this->organization_id = $organization_id ?? "";
    $this->protocol = $protocol ?? "";
    $this->subscription_type = $subscription_type ?? "";
  }
}

class CreateNotificationSubscriptionResponse {
  public Subscription $subscription;

  public function __construct(shape(
  ?'subscription' => Subscription,
  ) $s = shape()) {
    $this->subscription = $subscription ?? null;
  }
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

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'email_address' => EmailAddressType,
  ?'given_name' => UserAttributeValueType,
  ?'organization_id' => IdType,
  ?'password' => PasswordType,
  ?'storage_rule' => StorageRuleType,
  ?'surname' => UserAttributeValueType,
  ?'time_zone_id' => TimeZoneIdType,
  ?'username' => UsernameType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->email_address = $email_address ?? "";
    $this->given_name = $given_name ?? "";
    $this->organization_id = $organization_id ?? "";
    $this->password = $password ?? "";
    $this->storage_rule = $storage_rule ?? null;
    $this->surname = $surname ?? "";
    $this->time_zone_id = $time_zone_id ?? "";
    $this->username = $username ?? "";
  }
}

class CreateUserResponse {
  public User $user;

  public function __construct(shape(
  ?'user' => User,
  ) $s = shape()) {
    $this->user = $user ?? null;
  }
}

type CustomMetadataKeyList = vec<CustomMetadataKeyType>;

type CustomMetadataKeyType = string;

class CustomMetadataLimitExceededException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type CustomMetadataMap = dict<CustomMetadataKeyType, CustomMetadataValueType>;

type CustomMetadataValueType = string;

class DeactivateUserRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $user_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'user_id' => IdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class DeactivatingLastSystemUserException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteCommentRequest {
  public AuthenticationHeaderType $authentication_token;
  public CommentIdType $comment_id;
  public ResourceIdType $document_id;
  public DocumentVersionIdType $version_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'comment_id' => CommentIdType,
  ?'document_id' => ResourceIdType,
  ?'version_id' => DocumentVersionIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->comment_id = $comment_id ?? "";
    $this->document_id = $document_id ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DeleteCustomMetadataRequest {
  public AuthenticationHeaderType $authentication_token;
  public BooleanType $delete_all;
  public CustomMetadataKeyList $keys;
  public ResourceIdType $resource_id;
  public DocumentVersionIdType $version_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'delete_all' => BooleanType,
  ?'keys' => CustomMetadataKeyList,
  ?'resource_id' => ResourceIdType,
  ?'version_id' => DocumentVersionIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->delete_all = $delete_all ?? false;
    $this->keys = $keys ?? [];
    $this->resource_id = $resource_id ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DeleteCustomMetadataResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDocumentRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
  }
}

class DeleteFolderContentsRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $folder_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'folder_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->folder_id = $folder_id ?? "";
  }
}

class DeleteFolderRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $folder_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'folder_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->folder_id = $folder_id ?? "";
  }
}

class DeleteLabelsRequest {
  public AuthenticationHeaderType $authentication_token;
  public BooleanType $delete_all;
  public SharedLabels $labels;
  public ResourceIdType $resource_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'delete_all' => BooleanType,
  ?'labels' => SharedLabels,
  ?'resource_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->delete_all = $delete_all ?? false;
    $this->labels = $labels ?? [];
    $this->resource_id = $resource_id ?? "";
  }
}

class DeleteLabelsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteNotificationSubscriptionRequest {
  public IdType $organization_id;
  public IdType $subscription_id;

  public function __construct(shape(
  ?'organization_id' => IdType,
  ?'subscription_id' => IdType,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
    $this->subscription_id = $subscription_id ?? "";
  }
}

class DeleteUserRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $user_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'user_id' => IdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->user_id = $user_id ?? "";
  }
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

  public function __construct(shape(
  ?'activity_types' => ActivityNamesFilterType,
  ?'authentication_token' => AuthenticationHeaderType,
  ?'end_time' => TimestampType,
  ?'include_indirect_activities' => BooleanType,
  ?'limit' => LimitType,
  ?'marker' => MarkerType,
  ?'organization_id' => IdType,
  ?'resource_id' => IdType,
  ?'start_time' => TimestampType,
  ?'user_id' => IdType,
  ) $s = shape()) {
    $this->activity_types = $activity_types ?? "";
    $this->authentication_token = $authentication_token ?? "";
    $this->end_time = $end_time ?? 0;
    $this->include_indirect_activities = $include_indirect_activities ?? false;
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
    $this->organization_id = $organization_id ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->start_time = $start_time ?? 0;
    $this->user_id = $user_id ?? "";
  }
}

class DescribeActivitiesResponse {
  public MarkerType $marker;
  public UserActivities $user_activities;

  public function __construct(shape(
  ?'marker' => MarkerType,
  ?'user_activities' => UserActivities,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->user_activities = $user_activities ?? [];
  }
}

class DescribeCommentsRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public LimitType $limit;
  public MarkerType $marker;
  public DocumentVersionIdType $version_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => ResourceIdType,
  ?'limit' => LimitType,
  ?'marker' => MarkerType,
  ?'version_id' => DocumentVersionIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DescribeCommentsResponse {
  public CommentList $comments;
  public MarkerType $marker;

  public function __construct(shape(
  ?'comments' => CommentList,
  ?'marker' => MarkerType,
  ) $s = shape()) {
    $this->comments = $comments ?? [];
    $this->marker = $marker ?? "";
  }
}

class DescribeDocumentVersionsRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public FieldNamesType $fields;
  public FieldNamesType $include;
  public LimitType $limit;
  public PageMarkerType $marker;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => ResourceIdType,
  ?'fields' => FieldNamesType,
  ?'include' => FieldNamesType,
  ?'limit' => LimitType,
  ?'marker' => PageMarkerType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
    $this->fields = $fields ?? "";
    $this->include = $include ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class DescribeDocumentVersionsResponse {
  public DocumentVersionMetadataList $document_versions;
  public PageMarkerType $marker;

  public function __construct(shape(
  ?'document_versions' => DocumentVersionMetadataList,
  ?'marker' => PageMarkerType,
  ) $s = shape()) {
    $this->document_versions = $document_versions ?? [];
    $this->marker = $marker ?? "";
  }
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

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'folder_id' => ResourceIdType,
  ?'include' => FieldNamesType,
  ?'limit' => LimitType,
  ?'marker' => PageMarkerType,
  ?'order' => OrderType,
  ?'sort' => ResourceSortType,
  ?'type' => FolderContentType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->folder_id = $folder_id ?? "";
    $this->include = $include ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
    $this->order = $order ?? "";
    $this->sort = $sort ?? "";
    $this->type = $type ?? "";
  }
}

class DescribeFolderContentsResponse {
  public DocumentMetadataList $documents;
  public FolderMetadataList $folders;
  public PageMarkerType $marker;

  public function __construct(shape(
  ?'documents' => DocumentMetadataList,
  ?'folders' => FolderMetadataList,
  ?'marker' => PageMarkerType,
  ) $s = shape()) {
    $this->documents = $documents ?? [];
    $this->folders = $folders ?? [];
    $this->marker = $marker ?? "";
  }
}

class DescribeGroupsRequest {
  public AuthenticationHeaderType $authentication_token;
  public PositiveIntegerType $limit;
  public MarkerType $marker;
  public IdType $organization_id;
  public SearchQueryType $search_query;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'limit' => PositiveIntegerType,
  ?'marker' => MarkerType,
  ?'organization_id' => IdType,
  ?'search_query' => SearchQueryType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
    $this->organization_id = $organization_id ?? "";
    $this->search_query = $search_query ?? "";
  }
}

class DescribeGroupsResponse {
  public GroupMetadataList $groups;
  public MarkerType $marker;

  public function __construct(shape(
  ?'groups' => GroupMetadataList,
  ?'marker' => MarkerType,
  ) $s = shape()) {
    $this->groups = $groups ?? [];
    $this->marker = $marker ?? "";
  }
}

class DescribeNotificationSubscriptionsRequest {
  public LimitType $limit;
  public PageMarkerType $marker;
  public IdType $organization_id;

  public function __construct(shape(
  ?'limit' => LimitType,
  ?'marker' => PageMarkerType,
  ?'organization_id' => IdType,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
    $this->organization_id = $organization_id ?? "";
  }
}

class DescribeNotificationSubscriptionsResponse {
  public PageMarkerType $marker;
  public SubscriptionList $subscriptions;

  public function __construct(shape(
  ?'marker' => PageMarkerType,
  ?'subscriptions' => SubscriptionList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->subscriptions = $subscriptions ?? [];
  }
}

class DescribeResourcePermissionsRequest {
  public AuthenticationHeaderType $authentication_token;
  public LimitType $limit;
  public PageMarkerType $marker;
  public IdType $principal_id;
  public ResourceIdType $resource_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'limit' => LimitType,
  ?'marker' => PageMarkerType,
  ?'principal_id' => IdType,
  ?'resource_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
    $this->principal_id = $principal_id ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class DescribeResourcePermissionsResponse {
  public PageMarkerType $marker;
  public PrincipalList $principals;

  public function __construct(shape(
  ?'marker' => PageMarkerType,
  ?'principals' => PrincipalList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->principals = $principals ?? [];
  }
}

class DescribeRootFoldersRequest {
  public AuthenticationHeaderType $authentication_token;
  public LimitType $limit;
  public PageMarkerType $marker;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'limit' => LimitType,
  ?'marker' => PageMarkerType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class DescribeRootFoldersResponse {
  public FolderMetadataList $folders;
  public PageMarkerType $marker;

  public function __construct(shape(
  ?'folders' => FolderMetadataList,
  ?'marker' => PageMarkerType,
  ) $s = shape()) {
    $this->folders = $folders ?? [];
    $this->marker = $marker ?? "";
  }
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

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'fields' => FieldNamesType,
  ?'include' => UserFilterType,
  ?'limit' => LimitType,
  ?'marker' => PageMarkerType,
  ?'order' => OrderType,
  ?'organization_id' => IdType,
  ?'query' => SearchQueryType,
  ?'sort' => UserSortType,
  ?'user_ids' => UserIdsType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->fields = $fields ?? "";
    $this->include = $include ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
    $this->order = $order ?? "";
    $this->organization_id = $organization_id ?? "";
    $this->query = $query ?? "";
    $this->sort = $sort ?? "";
    $this->user_ids = $user_ids ?? "";
  }
}

class DescribeUsersResponse {
  public PageMarkerType $marker;
  public SizeType $total_number_of_users;
  public OrganizationUserList $users;

  public function __construct(shape(
  ?'marker' => PageMarkerType,
  ?'total_number_of_users' => SizeType,
  ?'users' => OrganizationUserList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->total_number_of_users = $total_number_of_users ?? 0;
    $this->users = $users ?? [];
  }
}

type DocumentContentType = string;

class DocumentLockedForCommentsException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'created_timestamp' => TimestampType,
  ?'creator_id' => IdType,
  ?'id' => ResourceIdType,
  ?'labels' => SharedLabels,
  ?'latest_version_metadata' => DocumentVersionMetadata,
  ?'modified_timestamp' => TimestampType,
  ?'parent_folder_id' => ResourceIdType,
  ?'resource_state' => ResourceStateType,
  ) $s = shape()) {
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->creator_id = $creator_id ?? "";
    $this->id = $id ?? "";
    $this->labels = $labels ?? [];
    $this->latest_version_metadata = $latest_version_metadata ?? null;
    $this->modified_timestamp = $modified_timestamp ?? 0;
    $this->parent_folder_id = $parent_folder_id ?? "";
    $this->resource_state = $resource_state ?? "";
  }
}

type DocumentMetadataList = vec<DocumentMetadata>;

type DocumentSourceType = string;

type DocumentSourceUrlMap = dict<DocumentSourceType, UrlType>;

type DocumentStatusType = string;

type DocumentThumbnailType = string;

type DocumentThumbnailUrlMap = dict<DocumentThumbnailType, UrlType>;

type DocumentVersionIdType = string;

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

  public function __construct(shape(
  ?'content_created_timestamp' => TimestampType,
  ?'content_modified_timestamp' => TimestampType,
  ?'content_type' => DocumentContentType,
  ?'created_timestamp' => TimestampType,
  ?'creator_id' => IdType,
  ?'id' => DocumentVersionIdType,
  ?'modified_timestamp' => TimestampType,
  ?'name' => ResourceNameType,
  ?'signature' => HashType,
  ?'size' => SizeType,
  ?'source' => DocumentSourceUrlMap,
  ?'status' => DocumentStatusType,
  ?'thumbnail' => DocumentThumbnailUrlMap,
  ) $s = shape()) {
    $this->content_created_timestamp = $content_created_timestamp ?? 0;
    $this->content_modified_timestamp = $content_modified_timestamp ?? 0;
    $this->content_type = $content_type ?? "";
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->creator_id = $creator_id ?? "";
    $this->id = $id ?? "";
    $this->modified_timestamp = $modified_timestamp ?? 0;
    $this->name = $name ?? "";
    $this->signature = $signature ?? "";
    $this->size = $size ?? 0;
    $this->source = $source ?? [];
    $this->status = $status ?? "";
    $this->thumbnail = $thumbnail ?? [];
  }
}

type DocumentVersionMetadataList = vec<DocumentVersionMetadata>;

type DocumentVersionStatus = string;

class DraftUploadOutOfSyncException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type EmailAddressType = string;

class EntityAlreadyExistsException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type EntityIdList = vec<IdType>;

class EntityNotExistsException {
  public EntityIdList $entity_ids;
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'entity_ids' => EntityIdList,
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->entity_ids = $entity_ids ?? [];
    $this->message = $message ?? "";
  }
}

type ErrorMessageType = string;

class FailedDependencyException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type FieldNamesType = string;

type FolderContentType = string;

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

  public function __construct(shape(
  ?'created_timestamp' => TimestampType,
  ?'creator_id' => IdType,
  ?'id' => ResourceIdType,
  ?'labels' => SharedLabels,
  ?'latest_version_size' => SizeType,
  ?'modified_timestamp' => TimestampType,
  ?'name' => ResourceNameType,
  ?'parent_folder_id' => ResourceIdType,
  ?'resource_state' => ResourceStateType,
  ?'signature' => HashType,
  ?'size' => SizeType,
  ) $s = shape()) {
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->creator_id = $creator_id ?? "";
    $this->id = $id ?? "";
    $this->labels = $labels ?? [];
    $this->latest_version_size = $latest_version_size ?? 0;
    $this->modified_timestamp = $modified_timestamp ?? 0;
    $this->name = $name ?? "";
    $this->parent_folder_id = $parent_folder_id ?? "";
    $this->resource_state = $resource_state ?? "";
    $this->signature = $signature ?? "";
    $this->size = $size ?? 0;
  }
}

type FolderMetadataList = vec<FolderMetadata>;

class GetCurrentUserRequest {
  public AuthenticationHeaderType $authentication_token;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
  }
}

class GetCurrentUserResponse {
  public User $user;

  public function __construct(shape(
  ?'user' => User,
  ) $s = shape()) {
    $this->user = $user ?? null;
  }
}

class GetDocumentPathRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $document_id;
  public FieldNamesType $fields;
  public LimitType $limit;
  public PageMarkerType $marker;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => IdType,
  ?'fields' => FieldNamesType,
  ?'limit' => LimitType,
  ?'marker' => PageMarkerType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
    $this->fields = $fields ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class GetDocumentPathResponse {
  public ResourcePath $path;

  public function __construct(shape(
  ?'path' => ResourcePath,
  ) $s = shape()) {
    $this->path = $path ?? null;
  }
}

class GetDocumentRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public BooleanType $include_custom_metadata;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => ResourceIdType,
  ?'include_custom_metadata' => BooleanType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
    $this->include_custom_metadata = $include_custom_metadata ?? false;
  }
}

class GetDocumentResponse {
  public CustomMetadataMap $custom_metadata;
  public DocumentMetadata $metadata;

  public function __construct(shape(
  ?'custom_metadata' => CustomMetadataMap,
  ?'metadata' => DocumentMetadata,
  ) $s = shape()) {
    $this->custom_metadata = $custom_metadata ?? [];
    $this->metadata = $metadata ?? null;
  }
}

class GetDocumentVersionRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public FieldNamesType $fields;
  public BooleanType $include_custom_metadata;
  public DocumentVersionIdType $version_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => ResourceIdType,
  ?'fields' => FieldNamesType,
  ?'include_custom_metadata' => BooleanType,
  ?'version_id' => DocumentVersionIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
    $this->fields = $fields ?? "";
    $this->include_custom_metadata = $include_custom_metadata ?? false;
    $this->version_id = $version_id ?? "";
  }
}

class GetDocumentVersionResponse {
  public CustomMetadataMap $custom_metadata;
  public DocumentVersionMetadata $metadata;

  public function __construct(shape(
  ?'custom_metadata' => CustomMetadataMap,
  ?'metadata' => DocumentVersionMetadata,
  ) $s = shape()) {
    $this->custom_metadata = $custom_metadata ?? [];
    $this->metadata = $metadata ?? null;
  }
}

class GetFolderPathRequest {
  public AuthenticationHeaderType $authentication_token;
  public FieldNamesType $fields;
  public IdType $folder_id;
  public LimitType $limit;
  public PageMarkerType $marker;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'fields' => FieldNamesType,
  ?'folder_id' => IdType,
  ?'limit' => LimitType,
  ?'marker' => PageMarkerType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->fields = $fields ?? "";
    $this->folder_id = $folder_id ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class GetFolderPathResponse {
  public ResourcePath $path;

  public function __construct(shape(
  ?'path' => ResourcePath,
  ) $s = shape()) {
    $this->path = $path ?? null;
  }
}

class GetFolderRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $folder_id;
  public BooleanType $include_custom_metadata;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'folder_id' => ResourceIdType,
  ?'include_custom_metadata' => BooleanType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->folder_id = $folder_id ?? "";
    $this->include_custom_metadata = $include_custom_metadata ?? false;
  }
}

class GetFolderResponse {
  public CustomMetadataMap $custom_metadata;
  public FolderMetadata $metadata;

  public function __construct(shape(
  ?'custom_metadata' => CustomMetadataMap,
  ?'metadata' => FolderMetadata,
  ) $s = shape()) {
    $this->custom_metadata = $custom_metadata ?? [];
    $this->metadata = $metadata ?? null;
  }
}

class GetResourcesRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceCollectionType $collection_type;
  public LimitType $limit;
  public PageMarkerType $marker;
  public IdType $user_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'collection_type' => ResourceCollectionType,
  ?'limit' => LimitType,
  ?'marker' => PageMarkerType,
  ?'user_id' => IdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->collection_type = $collection_type ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class GetResourcesResponse {
  public DocumentMetadataList $documents;
  public FolderMetadataList $folders;
  public PageMarkerType $marker;

  public function __construct(shape(
  ?'documents' => DocumentMetadataList,
  ?'folders' => FolderMetadataList,
  ?'marker' => PageMarkerType,
  ) $s = shape()) {
    $this->documents = $documents ?? [];
    $this->folders = $folders ?? [];
    $this->marker = $marker ?? "";
  }
}

class GroupMetadata {
  public IdType $id;
  public GroupNameType $name;

  public function __construct(shape(
  ?'id' => IdType,
  ?'name' => GroupNameType,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->name = $name ?? "";
  }
}

type GroupMetadataList = vec<GroupMetadata>;

type GroupNameType = string;

type HashType = string;

type HeaderNameType = string;

type HeaderValueType = string;

type IdType = string;

class IllegalUserStateException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'content_created_timestamp' => TimestampType,
  ?'content_modified_timestamp' => TimestampType,
  ?'content_type' => DocumentContentType,
  ?'document_size_in_bytes' => SizeType,
  ?'id' => ResourceIdType,
  ?'name' => ResourceNameType,
  ?'parent_folder_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->content_created_timestamp = $content_created_timestamp ?? 0;
    $this->content_modified_timestamp = $content_modified_timestamp ?? 0;
    $this->content_type = $content_type ?? "";
    $this->document_size_in_bytes = $document_size_in_bytes ?? 0;
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->parent_folder_id = $parent_folder_id ?? "";
  }
}

class InitiateDocumentVersionUploadResponse {
  public DocumentMetadata $metadata;
  public UploadMetadata $upload_metadata;

  public function __construct(shape(
  ?'metadata' => DocumentMetadata,
  ?'upload_metadata' => UploadMetadata,
  ) $s = shape()) {
    $this->metadata = $metadata ?? null;
    $this->upload_metadata = $upload_metadata ?? null;
  }
}

class InvalidArgumentException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidCommentOperationException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidOperationException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidPasswordException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LimitExceededException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LimitType = int;

type LocaleType = string;

type MarkerType = string;

type MessageType = string;

class NotificationOptions {
  public MessageType $email_message;
  public BooleanType $send_email;

  public function __construct(shape(
  ?'email_message' => MessageType,
  ?'send_email' => BooleanType,
  ) $s = shape()) {
    $this->email_message = $email_message ?? "";
    $this->send_email = $send_email ?? false;
  }
}

type OrderType = string;

type OrganizationUserList = vec<User>;

type PageMarkerType = string;

class Participants {
  public GroupMetadataList $groups;
  public UserMetadataList $users;

  public function __construct(shape(
  ?'groups' => GroupMetadataList,
  ?'users' => UserMetadataList,
  ) $s = shape()) {
    $this->groups = $groups ?? [];
    $this->users = $users ?? [];
  }
}

type PasswordType = string;

class PermissionInfo {
  public RoleType $role;
  public RolePermissionType $type;

  public function __construct(shape(
  ?'role' => RoleType,
  ?'type' => RolePermissionType,
  ) $s = shape()) {
    $this->role = $role ?? "";
    $this->type = $type ?? "";
  }
}

type PermissionInfoList = vec<PermissionInfo>;

type PositiveIntegerType = int;

type PositiveSizeType = int;

class Principal {
  public IdType $id;
  public PermissionInfoList $roles;
  public PrincipalType $type;

  public function __construct(shape(
  ?'id' => IdType,
  ?'roles' => PermissionInfoList,
  ?'type' => PrincipalType,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->roles = $roles ?? [];
    $this->type = $type ?? "";
  }
}

type PrincipalList = vec<Principal>;

type PrincipalType = string;

class ProhibitedStateException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class RemoveAllResourcePermissionsRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $resource_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'resource_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class RemoveResourcePermissionRequest {
  public AuthenticationHeaderType $authentication_token;
  public IdType $principal_id;
  public PrincipalType $principal_type;
  public ResourceIdType $resource_id;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'principal_id' => IdType,
  ?'principal_type' => PrincipalType,
  ?'resource_id' => ResourceIdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->principal_id = $principal_id ?? "";
    $this->principal_type = $principal_type ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class RequestedEntityTooLargeException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceAlreadyCheckedOutException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceCollectionType = string;

type ResourceIdType = string;

class ResourceMetadata {
  public ResourceIdType $id;
  public ResourceNameType $name;
  public ResourceNameType $original_name;
  public UserMetadata $owner;
  public ResourceIdType $parent_id;
  public ResourceType $type;
  public DocumentVersionIdType $version_id;

  public function __construct(shape(
  ?'id' => ResourceIdType,
  ?'name' => ResourceNameType,
  ?'original_name' => ResourceNameType,
  ?'owner' => UserMetadata,
  ?'parent_id' => ResourceIdType,
  ?'type' => ResourceType,
  ?'version_id' => DocumentVersionIdType,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->original_name = $original_name ?? "";
    $this->owner = $owner ?? null;
    $this->parent_id = $parent_id ?? "";
    $this->type = $type ?? "";
    $this->version_id = $version_id ?? "";
  }
}

type ResourceNameType = string;

class ResourcePath {
  public ResourcePathComponentList $components;

  public function __construct(shape(
  ?'components' => ResourcePathComponentList,
  ) $s = shape()) {
    $this->components = $components ?? [];
  }
}

class ResourcePathComponent {
  public IdType $id;
  public ResourceNameType $name;

  public function __construct(shape(
  ?'id' => IdType,
  ?'name' => ResourceNameType,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->name = $name ?? "";
  }
}

type ResourcePathComponentList = vec<ResourcePathComponent>;

type ResourceSortType = string;

type ResourceStateType = string;

type ResourceType = string;

type RolePermissionType = string;

type RoleType = string;

type SearchQueryType = string;

class ServiceUnavailableException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SharePrincipal {
  public IdType $id;
  public RoleType $role;
  public PrincipalType $type;

  public function __construct(shape(
  ?'id' => IdType,
  ?'role' => RoleType,
  ?'type' => PrincipalType,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->role = $role ?? "";
    $this->type = $type ?? "";
  }
}

type SharePrincipalList = vec<SharePrincipal>;

class ShareResult {
  public IdType $invitee_principal_id;
  public IdType $principal_id;
  public RoleType $role;
  public ResourceIdType $share_id;
  public ShareStatusType $status;
  public MessageType $status_message;

  public function __construct(shape(
  ?'invitee_principal_id' => IdType,
  ?'principal_id' => IdType,
  ?'role' => RoleType,
  ?'share_id' => ResourceIdType,
  ?'status' => ShareStatusType,
  ?'status_message' => MessageType,
  ) $s = shape()) {
    $this->invitee_principal_id = $invitee_principal_id ?? "";
    $this->principal_id = $principal_id ?? "";
    $this->role = $role ?? "";
    $this->share_id = $share_id ?? "";
    $this->status = $status ?? "";
    $this->status_message = $status_message ?? "";
  }
}

type ShareResultsList = vec<ShareResult>;

type ShareStatusType = string;

type SharedLabel = string;

type SharedLabels = vec<SharedLabel>;

type SignedHeaderMap = dict<HeaderNameType, HeaderValueType>;

type SizeType = int;

class StorageLimitExceededException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class StorageLimitWillExceedException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class StorageRuleType {
  public PositiveSizeType $storage_allocated_in_bytes;
  public StorageType $storage_type;

  public function __construct(shape(
  ?'storage_allocated_in_bytes' => PositiveSizeType,
  ?'storage_type' => StorageType,
  ) $s = shape()) {
    $this->storage_allocated_in_bytes = $storage_allocated_in_bytes ?? 0;
    $this->storage_type = $storage_type ?? "";
  }
}

type StorageType = string;

class Subscription {
  public SubscriptionEndPointType $end_point;
  public SubscriptionProtocolType $protocol;
  public IdType $subscription_id;

  public function __construct(shape(
  ?'end_point' => SubscriptionEndPointType,
  ?'protocol' => SubscriptionProtocolType,
  ?'subscription_id' => IdType,
  ) $s = shape()) {
    $this->end_point = $end_point ?? "";
    $this->protocol = $protocol ?? "";
    $this->subscription_id = $subscription_id ?? "";
  }
}

type SubscriptionEndPointType = string;

type SubscriptionList = vec<Subscription>;

type SubscriptionProtocolType = string;

type SubscriptionType = string;

type TimeZoneIdType = string;

type TimestampType = int;

class TooManyLabelsException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TooManySubscriptionsException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnauthorizedOperationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UnauthorizedResourceAccessException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UpdateDocumentRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public ResourceNameType $name;
  public ResourceIdType $parent_folder_id;
  public ResourceStateType $resource_state;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => ResourceIdType,
  ?'name' => ResourceNameType,
  ?'parent_folder_id' => ResourceIdType,
  ?'resource_state' => ResourceStateType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
    $this->name = $name ?? "";
    $this->parent_folder_id = $parent_folder_id ?? "";
    $this->resource_state = $resource_state ?? "";
  }
}

class UpdateDocumentVersionRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $document_id;
  public DocumentVersionIdType $version_id;
  public DocumentVersionStatus $version_status;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'document_id' => ResourceIdType,
  ?'version_id' => DocumentVersionIdType,
  ?'version_status' => DocumentVersionStatus,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->document_id = $document_id ?? "";
    $this->version_id = $version_id ?? "";
    $this->version_status = $version_status ?? "";
  }
}

class UpdateFolderRequest {
  public AuthenticationHeaderType $authentication_token;
  public ResourceIdType $folder_id;
  public ResourceNameType $name;
  public ResourceIdType $parent_folder_id;
  public ResourceStateType $resource_state;

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'folder_id' => ResourceIdType,
  ?'name' => ResourceNameType,
  ?'parent_folder_id' => ResourceIdType,
  ?'resource_state' => ResourceStateType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->folder_id = $folder_id ?? "";
    $this->name = $name ?? "";
    $this->parent_folder_id = $parent_folder_id ?? "";
    $this->resource_state = $resource_state ?? "";
  }
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

  public function __construct(shape(
  ?'authentication_token' => AuthenticationHeaderType,
  ?'given_name' => UserAttributeValueType,
  ?'grant_poweruser_privileges' => BooleanEnumType,
  ?'locale' => LocaleType,
  ?'storage_rule' => StorageRuleType,
  ?'surname' => UserAttributeValueType,
  ?'time_zone_id' => TimeZoneIdType,
  ?'type' => UserType,
  ?'user_id' => IdType,
  ) $s = shape()) {
    $this->authentication_token = $authentication_token ?? "";
    $this->given_name = $given_name ?? "";
    $this->grant_poweruser_privileges = $grant_poweruser_privileges ?? "";
    $this->locale = $locale ?? "";
    $this->storage_rule = $storage_rule ?? null;
    $this->surname = $surname ?? "";
    $this->time_zone_id = $time_zone_id ?? "";
    $this->type = $type ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class UpdateUserResponse {
  public User $user;

  public function __construct(shape(
  ?'user' => User,
  ) $s = shape()) {
    $this->user = $user ?? null;
  }
}

class UploadMetadata {
  public SignedHeaderMap $signed_headers;
  public UrlType $upload_url;

  public function __construct(shape(
  ?'signed_headers' => SignedHeaderMap,
  ?'upload_url' => UrlType,
  ) $s = shape()) {
    $this->signed_headers = $signed_headers ?? [];
    $this->upload_url = $upload_url ?? "";
  }
}

type UrlType = string;

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

  public function __construct(shape(
  ?'created_timestamp' => TimestampType,
  ?'email_address' => EmailAddressType,
  ?'given_name' => UserAttributeValueType,
  ?'id' => IdType,
  ?'locale' => LocaleType,
  ?'modified_timestamp' => TimestampType,
  ?'organization_id' => IdType,
  ?'recycle_bin_folder_id' => ResourceIdType,
  ?'root_folder_id' => ResourceIdType,
  ?'status' => UserStatusType,
  ?'storage' => UserStorageMetadata,
  ?'surname' => UserAttributeValueType,
  ?'time_zone_id' => TimeZoneIdType,
  ?'type' => UserType,
  ?'username' => UsernameType,
  ) $s = shape()) {
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->email_address = $email_address ?? "";
    $this->given_name = $given_name ?? "";
    $this->id = $id ?? "";
    $this->locale = $locale ?? "";
    $this->modified_timestamp = $modified_timestamp ?? 0;
    $this->organization_id = $organization_id ?? "";
    $this->recycle_bin_folder_id = $recycle_bin_folder_id ?? "";
    $this->root_folder_id = $root_folder_id ?? "";
    $this->status = $status ?? "";
    $this->storage = $storage ?? null;
    $this->surname = $surname ?? "";
    $this->time_zone_id = $time_zone_id ?? "";
    $this->type = $type ?? "";
    $this->username = $username ?? "";
  }
}

type UserActivities = vec<Activity>;

type UserAttributeValueType = string;

type UserFilterType = string;

type UserIdsType = string;

class UserMetadata {
  public EmailAddressType $email_address;
  public UserAttributeValueType $given_name;
  public IdType $id;
  public UserAttributeValueType $surname;
  public UsernameType $username;

  public function __construct(shape(
  ?'email_address' => EmailAddressType,
  ?'given_name' => UserAttributeValueType,
  ?'id' => IdType,
  ?'surname' => UserAttributeValueType,
  ?'username' => UsernameType,
  ) $s = shape()) {
    $this->email_address = $email_address ?? "";
    $this->given_name = $given_name ?? "";
    $this->id = $id ?? "";
    $this->surname = $surname ?? "";
    $this->username = $username ?? "";
  }
}

type UserMetadataList = vec<UserMetadata>;

type UserSortType = string;

type UserStatusType = string;

class UserStorageMetadata {
  public StorageRuleType $storage_rule;
  public SizeType $storage_utilized_in_bytes;

  public function __construct(shape(
  ?'storage_rule' => StorageRuleType,
  ?'storage_utilized_in_bytes' => SizeType,
  ) $s = shape()) {
    $this->storage_rule = $storage_rule ?? null;
    $this->storage_utilized_in_bytes = $storage_utilized_in_bytes ?? 0;
  }
}

type UserType = string;

type UsernameType = string;

