<?hh // strict
namespace slack\aws\connect;

interface Connect {
  public function CreateUser(CreateUserRequest) Awaitable<Errors\Result<CreateUserResponse>>;
  public function DeleteUser(DeleteUserRequest) Awaitable<Errors\Error>;
  public function DescribeUser(DescribeUserRequest) Awaitable<Errors\Result<DescribeUserResponse>>;
  public function DescribeUserHierarchyGroup(DescribeUserHierarchyGroupRequest) Awaitable<Errors\Result<DescribeUserHierarchyGroupResponse>>;
  public function DescribeUserHierarchyStructure(DescribeUserHierarchyStructureRequest) Awaitable<Errors\Result<DescribeUserHierarchyStructureResponse>>;
  public function GetContactAttributes(GetContactAttributesRequest) Awaitable<Errors\Result<GetContactAttributesResponse>>;
  public function GetCurrentMetricData(GetCurrentMetricDataRequest) Awaitable<Errors\Result<GetCurrentMetricDataResponse>>;
  public function GetFederationToken(GetFederationTokenRequest) Awaitable<Errors\Result<GetFederationTokenResponse>>;
  public function GetMetricData(GetMetricDataRequest) Awaitable<Errors\Result<GetMetricDataResponse>>;
  public function ListContactFlows(ListContactFlowsRequest) Awaitable<Errors\Result<ListContactFlowsResponse>>;
  public function ListHoursOfOperations(ListHoursOfOperationsRequest) Awaitable<Errors\Result<ListHoursOfOperationsResponse>>;
  public function ListPhoneNumbers(ListPhoneNumbersRequest) Awaitable<Errors\Result<ListPhoneNumbersResponse>>;
  public function ListQueues(ListQueuesRequest) Awaitable<Errors\Result<ListQueuesResponse>>;
  public function ListRoutingProfiles(ListRoutingProfilesRequest) Awaitable<Errors\Result<ListRoutingProfilesResponse>>;
  public function ListSecurityProfiles(ListSecurityProfilesRequest) Awaitable<Errors\Result<ListSecurityProfilesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUserHierarchyGroups(ListUserHierarchyGroupsRequest) Awaitable<Errors\Result<ListUserHierarchyGroupsResponse>>;
  public function ListUsers(ListUsersRequest) Awaitable<Errors\Result<ListUsersResponse>>;
  public function StartChatContact(StartChatContactRequest) Awaitable<Errors\Result<StartChatContactResponse>>;
  public function StartOutboundVoiceContact(StartOutboundVoiceContactRequest) Awaitable<Errors\Result<StartOutboundVoiceContactResponse>>;
  public function StopContact(StopContactRequest) Awaitable<Errors\Result<StopContactResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateContactAttributes(UpdateContactAttributesRequest) Awaitable<Errors\Result<UpdateContactAttributesResponse>>;
  public function UpdateUserHierarchy(UpdateUserHierarchyRequest) Awaitable<Errors\Error>;
  public function UpdateUserIdentityInfo(UpdateUserIdentityInfoRequest) Awaitable<Errors\Error>;
  public function UpdateUserPhoneConfig(UpdateUserPhoneConfigRequest) Awaitable<Errors\Error>;
  public function UpdateUserRoutingProfile(UpdateUserRoutingProfileRequest) Awaitable<Errors\Error>;
  public function UpdateUserSecurityProfiles(UpdateUserSecurityProfilesRequest) Awaitable<Errors\Error>;
}

class ARN {
}

class AfterContactWorkTimeLimit {
}

class AgentFirstName {
}

class AgentLastName {
}

class AgentUsername {
}

class AttributeName {
}

class AttributeValue {
}

class Attributes {
}

class AutoAccept {
}

class Channel {
}

class Channels {
}

class ChatContent {
}

class ChatContentType {
}

class ChatMessage {
  public ChatContent $content;
  public ChatContentType $content_type;
}

class ClientToken {
}

class Comparison {
}

class ContactFlowId {
}

class ContactFlowName {
}

class ContactFlowSummary {
  public ARN $arn;
  public ContactFlowType $contact_flow_type;
  public ContactFlowId $id;
  public ContactFlowName $name;
}

class ContactFlowSummaryList {
}

class ContactFlowType {
}

class ContactFlowTypes {
}

class ContactId {
}

class ContactNotFoundException {
  public Message $message;
}

class CreateUserRequest {
  public DirectoryUserId $directory_user_id;
  public HierarchyGroupId $hierarchy_group_id;
  public UserIdentityInfo $identity_info;
  public InstanceId $instance_id;
  public Password $password;
  public UserPhoneConfig $phone_config;
  public RoutingProfileId $routing_profile_id;
  public SecurityProfileIds $security_profile_ids;
  public TagMap $tags;
  public AgentUsername $username;
}

class CreateUserResponse {
  public ARN $user_arn;
  public UserId $user_id;
}

class Credentials {
  public SecurityToken $access_token;
  public timestamp $access_token_expiration;
  public SecurityToken $refresh_token;
  public timestamp $refresh_token_expiration;
}

class CurrentMetric {
  public CurrentMetricName $name;
  public Unit $unit;
}

class CurrentMetricData {
  public CurrentMetric $metric;
  public Value $value;
}

class CurrentMetricDataCollections {
}

class CurrentMetricName {
}

class CurrentMetricResult {
  public CurrentMetricDataCollections $collections;
  public Dimensions $dimensions;
}

class CurrentMetricResults {
}

class CurrentMetrics {
}

class DeleteUserRequest {
  public InstanceId $instance_id;
  public UserId $user_id;
}

class DescribeUserHierarchyGroupRequest {
  public HierarchyGroupId $hierarchy_group_id;
  public InstanceId $instance_id;
}

class DescribeUserHierarchyGroupResponse {
  public HierarchyGroup $hierarchy_group;
}

class DescribeUserHierarchyStructureRequest {
  public InstanceId $instance_id;
}

class DescribeUserHierarchyStructureResponse {
  public HierarchyStructure $hierarchy_structure;
}

class DescribeUserRequest {
  public InstanceId $instance_id;
  public UserId $user_id;
}

class DescribeUserResponse {
  public User $user;
}

class DestinationNotAllowedException {
  public Message $message;
}

class Dimensions {
  public Channel $channel;
  public QueueReference $queue;
}

class DirectoryUserId {
}

class DisplayName {
}

class DuplicateResourceException {
  public Message $message;
}

class Email {
}

class Filters {
  public Channels $channels;
  public Queues $queues;
}

class GetContactAttributesRequest {
  public ContactId $initial_contact_id;
  public InstanceId $instance_id;
}

class GetContactAttributesResponse {
  public Attributes $attributes;
}

class GetCurrentMetricDataRequest {
  public CurrentMetrics $current_metrics;
  public Filters $filters;
  public Groupings $groupings;
  public InstanceId $instance_id;
  public MaxResult100 $max_results;
  public NextToken $next_token;
}

class GetCurrentMetricDataResponse {
  public timestamp $data_snapshot_time;
  public CurrentMetricResults $metric_results;
  public NextToken $next_token;
}

class GetFederationTokenRequest {
  public InstanceId $instance_id;
}

class GetFederationTokenResponse {
  public Credentials $credentials;
}

class GetMetricDataRequest {
  public timestamp $end_time;
  public Filters $filters;
  public Groupings $groupings;
  public HistoricalMetrics $historical_metrics;
  public InstanceId $instance_id;
  public MaxResult100 $max_results;
  public NextToken $next_token;
  public timestamp $start_time;
}

class GetMetricDataResponse {
  public HistoricalMetricResults $metric_results;
  public NextToken $next_token;
}

class Grouping {
}

class Groupings {
}

class HierarchyGroup {
  public ARN $arn;
  public HierarchyPath $hierarchy_path;
  public HierarchyGroupId $id;
  public HierarchyLevelId $level_id;
  public HierarchyGroupName $name;
}

class HierarchyGroupId {
}

class HierarchyGroupName {
}

class HierarchyGroupSummary {
  public ARN $arn;
  public HierarchyGroupId $id;
  public HierarchyGroupName $name;
}

class HierarchyGroupSummaryList {
}

class HierarchyLevel {
  public ARN $arn;
  public HierarchyLevelId $id;
  public HierarchyLevelName $name;
}

class HierarchyLevelId {
}

class HierarchyLevelName {
}

class HierarchyPath {
  public HierarchyGroupSummary $level_five;
  public HierarchyGroupSummary $level_four;
  public HierarchyGroupSummary $level_one;
  public HierarchyGroupSummary $level_three;
  public HierarchyGroupSummary $level_two;
}

class HierarchyStructure {
  public HierarchyLevel $level_five;
  public HierarchyLevel $level_four;
  public HierarchyLevel $level_one;
  public HierarchyLevel $level_three;
  public HierarchyLevel $level_two;
}

class HistoricalMetric {
  public HistoricalMetricName $name;
  public Statistic $statistic;
  public Threshold $threshold;
  public Unit $unit;
}

class HistoricalMetricData {
  public HistoricalMetric $metric;
  public Value $value;
}

class HistoricalMetricDataCollections {
}

class HistoricalMetricName {
}

class HistoricalMetricResult {
  public HistoricalMetricDataCollections $collections;
  public Dimensions $dimensions;
}

class HistoricalMetricResults {
}

class HistoricalMetrics {
}

class HoursOfOperationId {
}

class HoursOfOperationName {
}

class HoursOfOperationSummary {
  public ARN $arn;
  public HoursOfOperationId $id;
  public HoursOfOperationName $name;
}

class HoursOfOperationSummaryList {
}

class InstanceId {
}

class InternalServiceException {
  public Message $message;
}

class InvalidParameterException {
  public Message $message;
}

class InvalidRequestException {
  public Message $message;
}

class LimitExceededException {
  public Message $message;
}

class ListContactFlowsRequest {
  public ContactFlowTypes $contact_flow_types;
  public InstanceId $instance_id;
  public MaxResult1000 $max_results;
  public NextToken $next_token;
}

class ListContactFlowsResponse {
  public ContactFlowSummaryList $contact_flow_summary_list;
  public NextToken $next_token;
}

class ListHoursOfOperationsRequest {
  public InstanceId $instance_id;
  public MaxResult1000 $max_results;
  public NextToken $next_token;
}

class ListHoursOfOperationsResponse {
  public HoursOfOperationSummaryList $hours_of_operation_summary_list;
  public NextToken $next_token;
}

class ListPhoneNumbersRequest {
  public InstanceId $instance_id;
  public MaxResult1000 $max_results;
  public NextToken $next_token;
  public PhoneNumberCountryCodes $phone_number_country_codes;
  public PhoneNumberTypes $phone_number_types;
}

class ListPhoneNumbersResponse {
  public NextToken $next_token;
  public PhoneNumberSummaryList $phone_number_summary_list;
}

class ListQueuesRequest {
  public InstanceId $instance_id;
  public MaxResult1000 $max_results;
  public NextToken $next_token;
  public QueueTypes $queue_types;
}

class ListQueuesResponse {
  public NextToken $next_token;
  public QueueSummaryList $queue_summary_list;
}

class ListRoutingProfilesRequest {
  public InstanceId $instance_id;
  public MaxResult1000 $max_results;
  public NextToken $next_token;
}

class ListRoutingProfilesResponse {
  public NextToken $next_token;
  public RoutingProfileSummaryList $routing_profile_summary_list;
}

class ListSecurityProfilesRequest {
  public InstanceId $instance_id;
  public MaxResult1000 $max_results;
  public NextToken $next_token;
}

class ListSecurityProfilesResponse {
  public NextToken $next_token;
  public SecurityProfileSummaryList $security_profile_summary_list;
}

class ListTagsForResourceRequest {
  public ARN $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class ListUserHierarchyGroupsRequest {
  public InstanceId $instance_id;
  public MaxResult1000 $max_results;
  public NextToken $next_token;
}

class ListUserHierarchyGroupsResponse {
  public NextToken $next_token;
  public HierarchyGroupSummaryList $user_hierarchy_group_summary_list;
}

class ListUsersRequest {
  public InstanceId $instance_id;
  public MaxResult1000 $max_results;
  public NextToken $next_token;
}

class ListUsersResponse {
  public NextToken $next_token;
  public UserSummaryList $user_summary_list;
}

class MaxResult100 {
}

class MaxResult1000 {
}

class Message {
}

class NextToken {
}

class OutboundContactNotPermittedException {
  public Message $message;
}

class ParticipantDetails {
  public DisplayName $display_name;
}

class ParticipantId {
}

class ParticipantToken {
}

class Password {
}

class PhoneNumber {
}

class PhoneNumberCountryCode {
}

class PhoneNumberCountryCodes {
}

class PhoneNumberId {
}

class PhoneNumberSummary {
  public ARN $arn;
  public PhoneNumberId $id;
  public PhoneNumber $phone_number;
  public PhoneNumberCountryCode $phone_number_country_code;
  public PhoneNumberType $phone_number_type;
}

class PhoneNumberSummaryList {
}

class PhoneNumberType {
}

class PhoneNumberTypes {
}

class PhoneType {
}

class QueueId {
}

class QueueName {
}

class QueueReference {
  public ARN $arn;
  public QueueId $id;
}

class QueueSummary {
  public ARN $arn;
  public QueueId $id;
  public QueueName $name;
  public QueueType $queue_type;
}

class QueueSummaryList {
}

class QueueType {
}

class QueueTypes {
}

class Queues {
}

class ResourceNotFoundException {
  public Message $message;
}

class RoutingProfileId {
}

class RoutingProfileName {
}

class RoutingProfileSummary {
  public ARN $arn;
  public RoutingProfileId $id;
  public RoutingProfileName $name;
}

class RoutingProfileSummaryList {
}

class SecurityProfileId {
}

class SecurityProfileIds {
}

class SecurityProfileName {
}

class SecurityProfileSummary {
  public ARN $arn;
  public SecurityProfileId $id;
  public SecurityProfileName $name;
}

class SecurityProfileSummaryList {
}

class SecurityToken {
}

class StartChatContactRequest {
  public Attributes $attributes;
  public ClientToken $client_token;
  public ContactFlowId $contact_flow_id;
  public ChatMessage $initial_message;
  public InstanceId $instance_id;
  public ParticipantDetails $participant_details;
}

class StartChatContactResponse {
  public ContactId $contact_id;
  public ParticipantId $participant_id;
  public ParticipantToken $participant_token;
}

class StartOutboundVoiceContactRequest {
  public Attributes $attributes;
  public ClientToken $client_token;
  public ContactFlowId $contact_flow_id;
  public PhoneNumber $destination_phone_number;
  public InstanceId $instance_id;
  public QueueId $queue_id;
  public PhoneNumber $source_phone_number;
}

class StartOutboundVoiceContactResponse {
  public ContactId $contact_id;
}

class Statistic {
}

class StopContactRequest {
  public ContactId $contact_id;
  public InstanceId $instance_id;
}

class StopContactResponse {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public ARN $resource_arn;
  public TagMap $tags;
}

class TagValue {
}

class Threshold {
  public Comparison $comparison;
  public ThresholdValue $threshold_value;
}

class ThresholdValue {
}

class ThrottlingException {
  public Message $message;
}

class Unit {
}

class UntagResourceRequest {
  public ARN $resource_arn;
  public TagKeyList $tag_keys;
}

class UpdateContactAttributesRequest {
  public Attributes $attributes;
  public ContactId $initial_contact_id;
  public InstanceId $instance_id;
}

class UpdateContactAttributesResponse {
}

class UpdateUserHierarchyRequest {
  public HierarchyGroupId $hierarchy_group_id;
  public InstanceId $instance_id;
  public UserId $user_id;
}

class UpdateUserIdentityInfoRequest {
  public UserIdentityInfo $identity_info;
  public InstanceId $instance_id;
  public UserId $user_id;
}

class UpdateUserPhoneConfigRequest {
  public InstanceId $instance_id;
  public UserPhoneConfig $phone_config;
  public UserId $user_id;
}

class UpdateUserRoutingProfileRequest {
  public InstanceId $instance_id;
  public RoutingProfileId $routing_profile_id;
  public UserId $user_id;
}

class UpdateUserSecurityProfilesRequest {
  public InstanceId $instance_id;
  public SecurityProfileIds $security_profile_ids;
  public UserId $user_id;
}

class User {
  public ARN $arn;
  public DirectoryUserId $directory_user_id;
  public HierarchyGroupId $hierarchy_group_id;
  public UserId $id;
  public UserIdentityInfo $identity_info;
  public UserPhoneConfig $phone_config;
  public RoutingProfileId $routing_profile_id;
  public SecurityProfileIds $security_profile_ids;
  public TagMap $tags;
  public AgentUsername $username;
}

class UserId {
}

class UserIdentityInfo {
  public Email $email;
  public AgentFirstName $first_name;
  public AgentLastName $last_name;
}

class UserNotFoundException {
  public Message $message;
}

class UserPhoneConfig {
  public AfterContactWorkTimeLimit $after_contact_work_time_limit;
  public AutoAccept $auto_accept;
  public PhoneNumber $desk_phone_number;
  public PhoneType $phone_type;
}

class UserSummary {
  public ARN $arn;
  public UserId $id;
  public AgentUsername $username;
}

class UserSummaryList {
}

class Value {
}

class timestamp {
}

