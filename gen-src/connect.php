<?hh // strict
namespace slack\aws\connect;

interface Connect {
  public function CreateUser(CreateUserRequest $in): Awaitable<\Errors\Result<CreateUserResponse>>;
  public function DeleteUser(DeleteUserRequest $in): Awaitable<\Errors\Error>;
  public function DescribeUser(DescribeUserRequest $in): Awaitable<\Errors\Result<DescribeUserResponse>>;
  public function DescribeUserHierarchyGroup(DescribeUserHierarchyGroupRequest $in): Awaitable<\Errors\Result<DescribeUserHierarchyGroupResponse>>;
  public function DescribeUserHierarchyStructure(DescribeUserHierarchyStructureRequest $in): Awaitable<\Errors\Result<DescribeUserHierarchyStructureResponse>>;
  public function GetContactAttributes(GetContactAttributesRequest $in): Awaitable<\Errors\Result<GetContactAttributesResponse>>;
  public function GetCurrentMetricData(GetCurrentMetricDataRequest $in): Awaitable<\Errors\Result<GetCurrentMetricDataResponse>>;
  public function GetFederationToken(GetFederationTokenRequest $in): Awaitable<\Errors\Result<GetFederationTokenResponse>>;
  public function GetMetricData(GetMetricDataRequest $in): Awaitable<\Errors\Result<GetMetricDataResponse>>;
  public function ListContactFlows(ListContactFlowsRequest $in): Awaitable<\Errors\Result<ListContactFlowsResponse>>;
  public function ListHoursOfOperations(ListHoursOfOperationsRequest $in): Awaitable<\Errors\Result<ListHoursOfOperationsResponse>>;
  public function ListPhoneNumbers(ListPhoneNumbersRequest $in): Awaitable<\Errors\Result<ListPhoneNumbersResponse>>;
  public function ListQueues(ListQueuesRequest $in): Awaitable<\Errors\Result<ListQueuesResponse>>;
  public function ListRoutingProfiles(ListRoutingProfilesRequest $in): Awaitable<\Errors\Result<ListRoutingProfilesResponse>>;
  public function ListSecurityProfiles(ListSecurityProfilesRequest $in): Awaitable<\Errors\Result<ListSecurityProfilesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListUserHierarchyGroups(ListUserHierarchyGroupsRequest $in): Awaitable<\Errors\Result<ListUserHierarchyGroupsResponse>>;
  public function ListUsers(ListUsersRequest $in): Awaitable<\Errors\Result<ListUsersResponse>>;
  public function StartChatContact(StartChatContactRequest $in): Awaitable<\Errors\Result<StartChatContactResponse>>;
  public function StartOutboundVoiceContact(StartOutboundVoiceContactRequest $in): Awaitable<\Errors\Result<StartOutboundVoiceContactResponse>>;
  public function StopContact(StopContactRequest $in): Awaitable<\Errors\Result<StopContactResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateContactAttributes(UpdateContactAttributesRequest $in): Awaitable<\Errors\Result<UpdateContactAttributesResponse>>;
  public function UpdateUserHierarchy(UpdateUserHierarchyRequest $in): Awaitable<\Errors\Error>;
  public function UpdateUserIdentityInfo(UpdateUserIdentityInfoRequest $in): Awaitable<\Errors\Error>;
  public function UpdateUserPhoneConfig(UpdateUserPhoneConfigRequest $in): Awaitable<\Errors\Error>;
  public function UpdateUserRoutingProfile(UpdateUserRoutingProfileRequest $in): Awaitable<\Errors\Error>;
  public function UpdateUserSecurityProfiles(UpdateUserSecurityProfilesRequest $in): Awaitable<\Errors\Error>;
}

type ARN = string;

type AfterContactWorkTimeLimit = int;

type AgentFirstName = string;

type AgentLastName = string;

type AgentUsername = string;

type AttributeName = string;

type AttributeValue = string;

type Attributes = dict<AttributeName, AttributeValue>;

type AutoAccept = bool;

type Channel = string;

type Channels = vec<Channel>;

type ChatContent = string;

type ChatContentType = string;

class ChatMessage {
  public ?ChatContent $content;
  public ?ChatContentType $content_type;

  public function __construct(shape(
    ?'content' => ?ChatContent,
    ?'content_type' => ?ChatContentType,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
  }
}

type ClientToken = string;

type Comparison = string;

type ContactFlowId = string;

type ContactFlowName = string;

class ContactFlowSummary {
  public ?ARN $arn;
  public ?ContactFlowType $contact_flow_type;
  public ?ContactFlowId $id;
  public ?ContactFlowName $name;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'contact_flow_type' => ?ContactFlowType,
    ?'id' => ?ContactFlowId,
    ?'name' => ?ContactFlowName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->contact_flow_type = $s['contact_flow_type'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type ContactFlowSummaryList = vec<ContactFlowSummary>;

type ContactFlowType = string;

type ContactFlowTypes = vec<ContactFlowType>;

type ContactId = string;

class ContactNotFoundException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CreateUserRequest {
  public ?DirectoryUserId $directory_user_id;
  public ?HierarchyGroupId $hierarchy_group_id;
  public ?UserIdentityInfo $identity_info;
  public ?InstanceId $instance_id;
  public ?Password $password;
  public ?UserPhoneConfig $phone_config;
  public ?RoutingProfileId $routing_profile_id;
  public ?SecurityProfileIds $security_profile_ids;
  public ?TagMap $tags;
  public ?AgentUsername $username;

  public function __construct(shape(
    ?'directory_user_id' => ?DirectoryUserId,
    ?'hierarchy_group_id' => ?HierarchyGroupId,
    ?'identity_info' => ?UserIdentityInfo,
    ?'instance_id' => ?InstanceId,
    ?'password' => ?Password,
    ?'phone_config' => ?UserPhoneConfig,
    ?'routing_profile_id' => ?RoutingProfileId,
    ?'security_profile_ids' => ?SecurityProfileIds,
    ?'tags' => ?TagMap,
    ?'username' => ?AgentUsername,
  ) $s = shape()) {
    $this->directory_user_id = $s['directory_user_id'] ?? '';
    $this->hierarchy_group_id = $s['hierarchy_group_id'] ?? '';
    $this->identity_info = $s['identity_info'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->phone_config = $s['phone_config'] ?? null;
    $this->routing_profile_id = $s['routing_profile_id'] ?? '';
    $this->security_profile_ids = $s['security_profile_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->username = $s['username'] ?? '';
  }
}

class CreateUserResponse {
  public ?ARN $user_arn;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'user_arn' => ?ARN,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->user_arn = $s['user_arn'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class Credentials {
  public ?SecurityToken $access_token;
  public ?timestamp $access_token_expiration;
  public ?SecurityToken $refresh_token;
  public ?timestamp $refresh_token_expiration;

  public function __construct(shape(
    ?'access_token' => ?SecurityToken,
    ?'access_token_expiration' => ?timestamp,
    ?'refresh_token' => ?SecurityToken,
    ?'refresh_token_expiration' => ?timestamp,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->access_token_expiration = $s['access_token_expiration'] ?? 0;
    $this->refresh_token = $s['refresh_token'] ?? '';
    $this->refresh_token_expiration = $s['refresh_token_expiration'] ?? 0;
  }
}

class CurrentMetric {
  public ?CurrentMetricName $name;
  public ?Unit $unit;

  public function __construct(shape(
    ?'name' => ?CurrentMetricName,
    ?'unit' => ?Unit,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

class CurrentMetricData {
  public ?CurrentMetric $metric;
  public ?Value $value;

  public function __construct(shape(
    ?'metric' => ?CurrentMetric,
    ?'value' => ?Value,
  ) $s = shape()) {
    $this->metric = $s['metric'] ?? null;
    $this->value = $s['value'] ?? 0.0;
  }
}

type CurrentMetricDataCollections = vec<CurrentMetricData>;

type CurrentMetricName = string;

class CurrentMetricResult {
  public ?CurrentMetricDataCollections $collections;
  public ?Dimensions $dimensions;

  public function __construct(shape(
    ?'collections' => ?CurrentMetricDataCollections,
    ?'dimensions' => ?Dimensions,
  ) $s = shape()) {
    $this->collections = $s['collections'] ?? vec[];
    $this->dimensions = $s['dimensions'] ?? null;
  }
}

type CurrentMetricResults = vec<CurrentMetricResult>;

type CurrentMetrics = vec<CurrentMetric>;

class DeleteUserRequest {
  public ?InstanceId $instance_id;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class DescribeUserHierarchyGroupRequest {
  public ?HierarchyGroupId $hierarchy_group_id;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'hierarchy_group_id' => ?HierarchyGroupId,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->hierarchy_group_id = $s['hierarchy_group_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class DescribeUserHierarchyGroupResponse {
  public ?HierarchyGroup $hierarchy_group;

  public function __construct(shape(
    ?'hierarchy_group' => ?HierarchyGroup,
  ) $s = shape()) {
    $this->hierarchy_group = $s['hierarchy_group'] ?? null;
  }
}

class DescribeUserHierarchyStructureRequest {
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class DescribeUserHierarchyStructureResponse {
  public ?HierarchyStructure $hierarchy_structure;

  public function __construct(shape(
    ?'hierarchy_structure' => ?HierarchyStructure,
  ) $s = shape()) {
    $this->hierarchy_structure = $s['hierarchy_structure'] ?? null;
  }
}

class DescribeUserRequest {
  public ?InstanceId $instance_id;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class DescribeUserResponse {
  public ?User $user;

  public function __construct(shape(
    ?'user' => ?User,
  ) $s = shape()) {
    $this->user = $s['user'] ?? null;
  }
}

class DestinationNotAllowedException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Dimensions {
  public ?Channel $channel;
  public ?QueueReference $queue;

  public function __construct(shape(
    ?'channel' => ?Channel,
    ?'queue' => ?QueueReference,
  ) $s = shape()) {
    $this->channel = $s['channel'] ?? '';
    $this->queue = $s['queue'] ?? null;
  }
}

type DirectoryUserId = string;

type DisplayName = string;

class DuplicateResourceException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Email = string;

class Filters {
  public ?Channels $channels;
  public ?Queues $queues;

  public function __construct(shape(
    ?'channels' => ?Channels,
    ?'queues' => ?Queues,
  ) $s = shape()) {
    $this->channels = $s['channels'] ?? vec[];
    $this->queues = $s['queues'] ?? vec[];
  }
}

class GetContactAttributesRequest {
  public ?ContactId $initial_contact_id;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'initial_contact_id' => ?ContactId,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->initial_contact_id = $s['initial_contact_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class GetContactAttributesResponse {
  public ?Attributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
  }
}

class GetCurrentMetricDataRequest {
  public ?CurrentMetrics $current_metrics;
  public ?Filters $filters;
  public ?Groupings $groupings;
  public ?InstanceId $instance_id;
  public ?MaxResult100 $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'current_metrics' => ?CurrentMetrics,
    ?'filters' => ?Filters,
    ?'groupings' => ?Groupings,
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult100,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->current_metrics = $s['current_metrics'] ?? vec[];
    $this->filters = $s['filters'] ?? null;
    $this->groupings = $s['groupings'] ?? vec[];
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetCurrentMetricDataResponse {
  public ?timestamp $data_snapshot_time;
  public ?CurrentMetricResults $metric_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'data_snapshot_time' => ?timestamp,
    ?'metric_results' => ?CurrentMetricResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->data_snapshot_time = $s['data_snapshot_time'] ?? 0;
    $this->metric_results = $s['metric_results'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetFederationTokenRequest {
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class GetFederationTokenResponse {
  public ?Credentials $credentials;

  public function __construct(shape(
    ?'credentials' => ?Credentials,
  ) $s = shape()) {
    $this->credentials = $s['credentials'] ?? null;
  }
}

class GetMetricDataRequest {
  public ?timestamp $end_time;
  public ?Filters $filters;
  public ?Groupings $groupings;
  public ?HistoricalMetrics $historical_metrics;
  public ?InstanceId $instance_id;
  public ?MaxResult100 $max_results;
  public ?NextToken $next_token;
  public ?timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?timestamp,
    ?'filters' => ?Filters,
    ?'groupings' => ?Groupings,
    ?'historical_metrics' => ?HistoricalMetrics,
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult100,
    ?'next_token' => ?NextToken,
    ?'start_time' => ?timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->filters = $s['filters'] ?? null;
    $this->groupings = $s['groupings'] ?? vec[];
    $this->historical_metrics = $s['historical_metrics'] ?? vec[];
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetMetricDataResponse {
  public ?HistoricalMetricResults $metric_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'metric_results' => ?HistoricalMetricResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->metric_results = $s['metric_results'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Grouping = string;

type Groupings = vec<Grouping>;

class HierarchyGroup {
  public ?ARN $arn;
  public ?HierarchyPath $hierarchy_path;
  public ?HierarchyGroupId $id;
  public ?HierarchyLevelId $level_id;
  public ?HierarchyGroupName $name;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'hierarchy_path' => ?HierarchyPath,
    ?'id' => ?HierarchyGroupId,
    ?'level_id' => ?HierarchyLevelId,
    ?'name' => ?HierarchyGroupName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->hierarchy_path = $s['hierarchy_path'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->level_id = $s['level_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type HierarchyGroupId = string;

type HierarchyGroupName = string;

class HierarchyGroupSummary {
  public ?ARN $arn;
  public ?HierarchyGroupId $id;
  public ?HierarchyGroupName $name;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'id' => ?HierarchyGroupId,
    ?'name' => ?HierarchyGroupName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type HierarchyGroupSummaryList = vec<HierarchyGroupSummary>;

class HierarchyLevel {
  public ?ARN $arn;
  public ?HierarchyLevelId $id;
  public ?HierarchyLevelName $name;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'id' => ?HierarchyLevelId,
    ?'name' => ?HierarchyLevelName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type HierarchyLevelId = string;

type HierarchyLevelName = string;

class HierarchyPath {
  public ?HierarchyGroupSummary $level_five;
  public ?HierarchyGroupSummary $level_four;
  public ?HierarchyGroupSummary $level_one;
  public ?HierarchyGroupSummary $level_three;
  public ?HierarchyGroupSummary $level_two;

  public function __construct(shape(
    ?'level_five' => ?HierarchyGroupSummary,
    ?'level_four' => ?HierarchyGroupSummary,
    ?'level_one' => ?HierarchyGroupSummary,
    ?'level_three' => ?HierarchyGroupSummary,
    ?'level_two' => ?HierarchyGroupSummary,
  ) $s = shape()) {
    $this->level_five = $s['level_five'] ?? null;
    $this->level_four = $s['level_four'] ?? null;
    $this->level_one = $s['level_one'] ?? null;
    $this->level_three = $s['level_three'] ?? null;
    $this->level_two = $s['level_two'] ?? null;
  }
}

class HierarchyStructure {
  public ?HierarchyLevel $level_five;
  public ?HierarchyLevel $level_four;
  public ?HierarchyLevel $level_one;
  public ?HierarchyLevel $level_three;
  public ?HierarchyLevel $level_two;

  public function __construct(shape(
    ?'level_five' => ?HierarchyLevel,
    ?'level_four' => ?HierarchyLevel,
    ?'level_one' => ?HierarchyLevel,
    ?'level_three' => ?HierarchyLevel,
    ?'level_two' => ?HierarchyLevel,
  ) $s = shape()) {
    $this->level_five = $s['level_five'] ?? null;
    $this->level_four = $s['level_four'] ?? null;
    $this->level_one = $s['level_one'] ?? null;
    $this->level_three = $s['level_three'] ?? null;
    $this->level_two = $s['level_two'] ?? null;
  }
}

class HistoricalMetric {
  public ?HistoricalMetricName $name;
  public ?Statistic $statistic;
  public ?Threshold $threshold;
  public ?Unit $unit;

  public function __construct(shape(
    ?'name' => ?HistoricalMetricName,
    ?'statistic' => ?Statistic,
    ?'threshold' => ?Threshold,
    ?'unit' => ?Unit,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->statistic = $s['statistic'] ?? '';
    $this->threshold = $s['threshold'] ?? null;
    $this->unit = $s['unit'] ?? '';
  }
}

class HistoricalMetricData {
  public ?HistoricalMetric $metric;
  public ?Value $value;

  public function __construct(shape(
    ?'metric' => ?HistoricalMetric,
    ?'value' => ?Value,
  ) $s = shape()) {
    $this->metric = $s['metric'] ?? null;
    $this->value = $s['value'] ?? 0.0;
  }
}

type HistoricalMetricDataCollections = vec<HistoricalMetricData>;

type HistoricalMetricName = string;

class HistoricalMetricResult {
  public ?HistoricalMetricDataCollections $collections;
  public ?Dimensions $dimensions;

  public function __construct(shape(
    ?'collections' => ?HistoricalMetricDataCollections,
    ?'dimensions' => ?Dimensions,
  ) $s = shape()) {
    $this->collections = $s['collections'] ?? vec[];
    $this->dimensions = $s['dimensions'] ?? null;
  }
}

type HistoricalMetricResults = vec<HistoricalMetricResult>;

type HistoricalMetrics = vec<HistoricalMetric>;

type HoursOfOperationId = string;

type HoursOfOperationName = string;

class HoursOfOperationSummary {
  public ?ARN $arn;
  public ?HoursOfOperationId $id;
  public ?HoursOfOperationName $name;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'id' => ?HoursOfOperationId,
    ?'name' => ?HoursOfOperationName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type HoursOfOperationSummaryList = vec<HoursOfOperationSummary>;

type InstanceId = string;

class InternalServiceException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LimitExceededException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListContactFlowsRequest {
  public ?ContactFlowTypes $contact_flow_types;
  public ?InstanceId $instance_id;
  public ?MaxResult1000 $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'contact_flow_types' => ?ContactFlowTypes,
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult1000,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->contact_flow_types = $s['contact_flow_types'] ?? vec[];
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListContactFlowsResponse {
  public ?ContactFlowSummaryList $contact_flow_summary_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'contact_flow_summary_list' => ?ContactFlowSummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->contact_flow_summary_list = $s['contact_flow_summary_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHoursOfOperationsRequest {
  public ?InstanceId $instance_id;
  public ?MaxResult1000 $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult1000,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHoursOfOperationsResponse {
  public ?HoursOfOperationSummaryList $hours_of_operation_summary_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'hours_of_operation_summary_list' => ?HoursOfOperationSummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->hours_of_operation_summary_list = $s['hours_of_operation_summary_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPhoneNumbersRequest {
  public ?InstanceId $instance_id;
  public ?MaxResult1000 $max_results;
  public ?NextToken $next_token;
  public ?PhoneNumberCountryCodes $phone_number_country_codes;
  public ?PhoneNumberTypes $phone_number_types;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult1000,
    ?'next_token' => ?NextToken,
    ?'phone_number_country_codes' => ?PhoneNumberCountryCodes,
    ?'phone_number_types' => ?PhoneNumberTypes,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->phone_number_country_codes = $s['phone_number_country_codes'] ?? vec[];
    $this->phone_number_types = $s['phone_number_types'] ?? vec[];
  }
}

class ListPhoneNumbersResponse {
  public ?NextToken $next_token;
  public ?PhoneNumberSummaryList $phone_number_summary_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'phone_number_summary_list' => ?PhoneNumberSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->phone_number_summary_list = $s['phone_number_summary_list'] ?? vec[];
  }
}

class ListQueuesRequest {
  public ?InstanceId $instance_id;
  public ?MaxResult1000 $max_results;
  public ?NextToken $next_token;
  public ?QueueTypes $queue_types;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult1000,
    ?'next_token' => ?NextToken,
    ?'queue_types' => ?QueueTypes,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->queue_types = $s['queue_types'] ?? vec[];
  }
}

class ListQueuesResponse {
  public ?NextToken $next_token;
  public ?QueueSummaryList $queue_summary_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'queue_summary_list' => ?QueueSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->queue_summary_list = $s['queue_summary_list'] ?? vec[];
  }
}

class ListRoutingProfilesRequest {
  public ?InstanceId $instance_id;
  public ?MaxResult1000 $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult1000,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRoutingProfilesResponse {
  public ?NextToken $next_token;
  public ?RoutingProfileSummaryList $routing_profile_summary_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'routing_profile_summary_list' => ?RoutingProfileSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->routing_profile_summary_list = $s['routing_profile_summary_list'] ?? vec[];
  }
}

class ListSecurityProfilesRequest {
  public ?InstanceId $instance_id;
  public ?MaxResult1000 $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult1000,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSecurityProfilesResponse {
  public ?NextToken $next_token;
  public ?SecurityProfileSummaryList $security_profile_summary_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'security_profile_summary_list' => ?SecurityProfileSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->security_profile_summary_list = $s['security_profile_summary_list'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?ARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ListUserHierarchyGroupsRequest {
  public ?InstanceId $instance_id;
  public ?MaxResult1000 $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult1000,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListUserHierarchyGroupsResponse {
  public ?NextToken $next_token;
  public ?HierarchyGroupSummaryList $user_hierarchy_group_summary_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'user_hierarchy_group_summary_list' => ?HierarchyGroupSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->user_hierarchy_group_summary_list = $s['user_hierarchy_group_summary_list'] ?? vec[];
  }
}

class ListUsersRequest {
  public ?InstanceId $instance_id;
  public ?MaxResult1000 $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'max_results' => ?MaxResult1000,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListUsersResponse {
  public ?NextToken $next_token;
  public ?UserSummaryList $user_summary_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'user_summary_list' => ?UserSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->user_summary_list = $s['user_summary_list'] ?? vec[];
  }
}

type MaxResult100 = int;

type MaxResult1000 = int;

type Message = string;

type NextToken = string;

class OutboundContactNotPermittedException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ParticipantDetails {
  public ?DisplayName $display_name;

  public function __construct(shape(
    ?'display_name' => ?DisplayName,
  ) $s = shape()) {
    $this->display_name = $s['display_name'] ?? '';
  }
}

type ParticipantId = string;

type ParticipantToken = string;

type Password = string;

type PhoneNumber = string;

type PhoneNumberCountryCode = string;

type PhoneNumberCountryCodes = vec<PhoneNumberCountryCode>;

type PhoneNumberId = string;

class PhoneNumberSummary {
  public ?ARN $arn;
  public ?PhoneNumberId $id;
  public ?PhoneNumber $phone_number;
  public ?PhoneNumberCountryCode $phone_number_country_code;
  public ?PhoneNumberType $phone_number_type;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'id' => ?PhoneNumberId,
    ?'phone_number' => ?PhoneNumber,
    ?'phone_number_country_code' => ?PhoneNumberCountryCode,
    ?'phone_number_type' => ?PhoneNumberType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
    $this->phone_number_country_code = $s['phone_number_country_code'] ?? '';
    $this->phone_number_type = $s['phone_number_type'] ?? '';
  }
}

type PhoneNumberSummaryList = vec<PhoneNumberSummary>;

type PhoneNumberType = string;

type PhoneNumberTypes = vec<PhoneNumberType>;

type PhoneType = string;

type QueueId = string;

type QueueName = string;

class QueueReference {
  public ?ARN $arn;
  public ?QueueId $id;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'id' => ?QueueId,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class QueueSummary {
  public ?ARN $arn;
  public ?QueueId $id;
  public ?QueueName $name;
  public ?QueueType $queue_type;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'id' => ?QueueId,
    ?'name' => ?QueueName,
    ?'queue_type' => ?QueueType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->queue_type = $s['queue_type'] ?? '';
  }
}

type QueueSummaryList = vec<QueueSummary>;

type QueueType = string;

type QueueTypes = vec<QueueType>;

type Queues = vec<QueueId>;

class ResourceNotFoundException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RoutingProfileId = string;

type RoutingProfileName = string;

class RoutingProfileSummary {
  public ?ARN $arn;
  public ?RoutingProfileId $id;
  public ?RoutingProfileName $name;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'id' => ?RoutingProfileId,
    ?'name' => ?RoutingProfileName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type RoutingProfileSummaryList = vec<RoutingProfileSummary>;

type SecurityProfileId = string;

type SecurityProfileIds = vec<SecurityProfileId>;

type SecurityProfileName = string;

class SecurityProfileSummary {
  public ?ARN $arn;
  public ?SecurityProfileId $id;
  public ?SecurityProfileName $name;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'id' => ?SecurityProfileId,
    ?'name' => ?SecurityProfileName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type SecurityProfileSummaryList = vec<SecurityProfileSummary>;

type SecurityToken = string;

class StartChatContactRequest {
  public ?Attributes $attributes;
  public ?ClientToken $client_token;
  public ?ContactFlowId $contact_flow_id;
  public ?ChatMessage $initial_message;
  public ?InstanceId $instance_id;
  public ?ParticipantDetails $participant_details;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'client_token' => ?ClientToken,
    ?'contact_flow_id' => ?ContactFlowId,
    ?'initial_message' => ?ChatMessage,
    ?'instance_id' => ?InstanceId,
    ?'participant_details' => ?ParticipantDetails,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->client_token = $s['client_token'] ?? '';
    $this->contact_flow_id = $s['contact_flow_id'] ?? '';
    $this->initial_message = $s['initial_message'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->participant_details = $s['participant_details'] ?? null;
  }
}

class StartChatContactResponse {
  public ?ContactId $contact_id;
  public ?ParticipantId $participant_id;
  public ?ParticipantToken $participant_token;

  public function __construct(shape(
    ?'contact_id' => ?ContactId,
    ?'participant_id' => ?ParticipantId,
    ?'participant_token' => ?ParticipantToken,
  ) $s = shape()) {
    $this->contact_id = $s['contact_id'] ?? '';
    $this->participant_id = $s['participant_id'] ?? '';
    $this->participant_token = $s['participant_token'] ?? '';
  }
}

class StartOutboundVoiceContactRequest {
  public ?Attributes $attributes;
  public ?ClientToken $client_token;
  public ?ContactFlowId $contact_flow_id;
  public ?PhoneNumber $destination_phone_number;
  public ?InstanceId $instance_id;
  public ?QueueId $queue_id;
  public ?PhoneNumber $source_phone_number;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'client_token' => ?ClientToken,
    ?'contact_flow_id' => ?ContactFlowId,
    ?'destination_phone_number' => ?PhoneNumber,
    ?'instance_id' => ?InstanceId,
    ?'queue_id' => ?QueueId,
    ?'source_phone_number' => ?PhoneNumber,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->client_token = $s['client_token'] ?? '';
    $this->contact_flow_id = $s['contact_flow_id'] ?? '';
    $this->destination_phone_number = $s['destination_phone_number'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->queue_id = $s['queue_id'] ?? '';
    $this->source_phone_number = $s['source_phone_number'] ?? '';
  }
}

class StartOutboundVoiceContactResponse {
  public ?ContactId $contact_id;

  public function __construct(shape(
    ?'contact_id' => ?ContactId,
  ) $s = shape()) {
    $this->contact_id = $s['contact_id'] ?? '';
  }
}

type Statistic = string;

class StopContactRequest {
  public ?ContactId $contact_id;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'contact_id' => ?ContactId,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->contact_id = $s['contact_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class StopContactResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ?ARN $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ARN,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type TagValue = string;

class Threshold {
  public ?Comparison $comparison;
  public ?ThresholdValue $threshold_value;

  public function __construct(shape(
    ?'comparison' => ?Comparison,
    ?'threshold_value' => ?ThresholdValue,
  ) $s = shape()) {
    $this->comparison = $s['comparison'] ?? '';
    $this->threshold_value = $s['threshold_value'] ?? 0.0;
  }
}

type ThresholdValue = float;

class ThrottlingException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Unit = string;

class UntagResourceRequest {
  public ?ARN $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ARN,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateContactAttributesRequest {
  public ?Attributes $attributes;
  public ?ContactId $initial_contact_id;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'initial_contact_id' => ?ContactId,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->initial_contact_id = $s['initial_contact_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class UpdateContactAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateUserHierarchyRequest {
  public ?HierarchyGroupId $hierarchy_group_id;
  public ?InstanceId $instance_id;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'hierarchy_group_id' => ?HierarchyGroupId,
    ?'instance_id' => ?InstanceId,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->hierarchy_group_id = $s['hierarchy_group_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class UpdateUserIdentityInfoRequest {
  public ?UserIdentityInfo $identity_info;
  public ?InstanceId $instance_id;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'identity_info' => ?UserIdentityInfo,
    ?'instance_id' => ?InstanceId,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->identity_info = $s['identity_info'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class UpdateUserPhoneConfigRequest {
  public ?InstanceId $instance_id;
  public ?UserPhoneConfig $phone_config;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'phone_config' => ?UserPhoneConfig,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->phone_config = $s['phone_config'] ?? null;
    $this->user_id = $s['user_id'] ?? '';
  }
}

class UpdateUserRoutingProfileRequest {
  public ?InstanceId $instance_id;
  public ?RoutingProfileId $routing_profile_id;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'routing_profile_id' => ?RoutingProfileId,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->routing_profile_id = $s['routing_profile_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class UpdateUserSecurityProfilesRequest {
  public ?InstanceId $instance_id;
  public ?SecurityProfileIds $security_profile_ids;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'instance_id' => ?InstanceId,
    ?'security_profile_ids' => ?SecurityProfileIds,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->security_profile_ids = $s['security_profile_ids'] ?? vec[];
    $this->user_id = $s['user_id'] ?? '';
  }
}

class User {
  public ?ARN $arn;
  public ?DirectoryUserId $directory_user_id;
  public ?HierarchyGroupId $hierarchy_group_id;
  public ?UserId $id;
  public ?UserIdentityInfo $identity_info;
  public ?UserPhoneConfig $phone_config;
  public ?RoutingProfileId $routing_profile_id;
  public ?SecurityProfileIds $security_profile_ids;
  public ?TagMap $tags;
  public ?AgentUsername $username;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'directory_user_id' => ?DirectoryUserId,
    ?'hierarchy_group_id' => ?HierarchyGroupId,
    ?'id' => ?UserId,
    ?'identity_info' => ?UserIdentityInfo,
    ?'phone_config' => ?UserPhoneConfig,
    ?'routing_profile_id' => ?RoutingProfileId,
    ?'security_profile_ids' => ?SecurityProfileIds,
    ?'tags' => ?TagMap,
    ?'username' => ?AgentUsername,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->directory_user_id = $s['directory_user_id'] ?? '';
    $this->hierarchy_group_id = $s['hierarchy_group_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->identity_info = $s['identity_info'] ?? null;
    $this->phone_config = $s['phone_config'] ?? null;
    $this->routing_profile_id = $s['routing_profile_id'] ?? '';
    $this->security_profile_ids = $s['security_profile_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->username = $s['username'] ?? '';
  }
}

type UserId = string;

class UserIdentityInfo {
  public ?Email $email;
  public ?AgentFirstName $first_name;
  public ?AgentLastName $last_name;

  public function __construct(shape(
    ?'email' => ?Email,
    ?'first_name' => ?AgentFirstName,
    ?'last_name' => ?AgentLastName,
  ) $s = shape()) {
    $this->email = $s['email'] ?? '';
    $this->first_name = $s['first_name'] ?? '';
    $this->last_name = $s['last_name'] ?? '';
  }
}

class UserNotFoundException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UserPhoneConfig {
  public ?AfterContactWorkTimeLimit $after_contact_work_time_limit;
  public ?AutoAccept $auto_accept;
  public ?PhoneNumber $desk_phone_number;
  public ?PhoneType $phone_type;

  public function __construct(shape(
    ?'after_contact_work_time_limit' => ?AfterContactWorkTimeLimit,
    ?'auto_accept' => ?AutoAccept,
    ?'desk_phone_number' => ?PhoneNumber,
    ?'phone_type' => ?PhoneType,
  ) $s = shape()) {
    $this->after_contact_work_time_limit = $s['after_contact_work_time_limit'] ?? 0;
    $this->auto_accept = $s['auto_accept'] ?? false;
    $this->desk_phone_number = $s['desk_phone_number'] ?? '';
    $this->phone_type = $s['phone_type'] ?? '';
  }
}

class UserSummary {
  public ?ARN $arn;
  public ?UserId $id;
  public ?AgentUsername $username;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'id' => ?UserId,
    ?'username' => ?AgentUsername,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

type UserSummaryList = vec<UserSummary>;

type Value = float;

type timestamp = int;

