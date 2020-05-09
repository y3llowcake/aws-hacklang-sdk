<?hh // strict
namespace slack\aws\connect;

interface Connect {
  public function GetCurrentMetricData(GetCurrentMetricDataRequest) Awaitable<Errors\Result<GetCurrentMetricDataResponse>>;
  public function ListHoursOfOperations(ListHoursOfOperationsRequest) Awaitable<Errors\Result<ListHoursOfOperationsResponse>>;
  public function ListRoutingProfiles(ListRoutingProfilesRequest) Awaitable<Errors\Result<ListRoutingProfilesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function DeleteUser(DeleteUserRequest) Awaitable<Errors\Error>;
  public function GetContactAttributes(GetContactAttributesRequest) Awaitable<Errors\Result<GetContactAttributesResponse>>;
  public function UpdateUserPhoneConfig(UpdateUserPhoneConfigRequest) Awaitable<Errors\Error>;
  public function ListQueues(ListQueuesRequest) Awaitable<Errors\Result<ListQueuesResponse>>;
  public function StartChatContact(StartChatContactRequest) Awaitable<Errors\Result<StartChatContactResponse>>;
  public function UpdateUserHierarchy(UpdateUserHierarchyRequest) Awaitable<Errors\Error>;
  public function UpdateUserIdentityInfo(UpdateUserIdentityInfoRequest) Awaitable<Errors\Error>;
  public function ListSecurityProfiles(ListSecurityProfilesRequest) Awaitable<Errors\Result<ListSecurityProfilesResponse>>;
  public function StartOutboundVoiceContact(StartOutboundVoiceContactRequest) Awaitable<Errors\Result<StartOutboundVoiceContactResponse>>;
  public function DescribeUserHierarchyStructure(DescribeUserHierarchyStructureRequest) Awaitable<Errors\Result<DescribeUserHierarchyStructureResponse>>;
  public function GetFederationToken(GetFederationTokenRequest) Awaitable<Errors\Result<GetFederationTokenResponse>>;
  public function ListContactFlows(ListContactFlowsRequest) Awaitable<Errors\Result<ListContactFlowsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function CreateUser(CreateUserRequest) Awaitable<Errors\Result<CreateUserResponse>>;
  public function DescribeUser(DescribeUserRequest) Awaitable<Errors\Result<DescribeUserResponse>>;
  public function ListUsers(ListUsersRequest) Awaitable<Errors\Result<ListUsersResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateContactAttributes(UpdateContactAttributesRequest) Awaitable<Errors\Result<UpdateContactAttributesResponse>>;
  public function UpdateUserRoutingProfile(UpdateUserRoutingProfileRequest) Awaitable<Errors\Error>;
  public function DescribeUserHierarchyGroup(DescribeUserHierarchyGroupRequest) Awaitable<Errors\Result<DescribeUserHierarchyGroupResponse>>;
  public function ListUserHierarchyGroups(ListUserHierarchyGroupsRequest) Awaitable<Errors\Result<ListUserHierarchyGroupsResponse>>;
  public function StopContact(StopContactRequest) Awaitable<Errors\Result<StopContactResponse>>;
  public function UpdateUserSecurityProfiles(UpdateUserSecurityProfilesRequest) Awaitable<Errors\Error>;
  public function GetMetricData(GetMetricDataRequest) Awaitable<Errors\Result<GetMetricDataResponse>>;
  public function ListPhoneNumbers(ListPhoneNumbersRequest) Awaitable<Errors\Result<ListPhoneNumbersResponse>>;
}

class GetCurrentMetricDataRequest {
  public Filters $filters;
  public Groupings $groupings;
  public CurrentMetrics $current_metrics;
  public NextToken $next_token;
  public MaxResult100 $max_results;
  public InstanceId $instance_id;
}

class Groupings {
}

class HierarchyLevelId {
}

class ListQueuesRequest {
  public QueueTypes $queue_types;
  public NextToken $next_token;
  public MaxResult1000 $max_results;
  public InstanceId $instance_id;
}

class ParticipantDetails {
  public DisplayName $display_name;
}

class SecurityProfileId {
}

class ARN {
}

class ClientToken {
}

class TagMap {
}

class UpdateUserHierarchyRequest {
  public HierarchyGroupId $hierarchy_group_id;
  public UserId $user_id;
  public InstanceId $instance_id;
}

class HierarchyStructure {
  public HierarchyLevel $level_one;
  public HierarchyLevel $level_two;
  public HierarchyLevel $level_three;
  public HierarchyLevel $level_four;
  public HierarchyLevel $level_five;
}

class ListHoursOfOperationsResponse {
  public HoursOfOperationSummaryList $hours_of_operation_summary_list;
  public NextToken $next_token;
}

class MaxResult1000 {
}

class UpdateContactAttributesRequest {
  public ContactId $initial_contact_id;
  public InstanceId $instance_id;
  public Attributes $attributes;
}

class AutoAccept {
}

class DescribeUserHierarchyGroupResponse {
  public HierarchyGroup $hierarchy_group;
}

class PhoneNumber {
}

class PhoneNumberTypes {
}

class StartOutboundVoiceContactResponse {
  public ContactId $contact_id;
}

class User {
  public AgentUsername $username;
  public DirectoryUserId $directory_user_id;
  public HierarchyGroupId $hierarchy_group_id;
  public TagMap $tags;
  public UserId $id;
  public ARN $arn;
  public UserIdentityInfo $identity_info;
  public UserPhoneConfig $phone_config;
  public SecurityProfileIds $security_profile_ids;
  public RoutingProfileId $routing_profile_id;
}

class UserSummary {
  public UserId $id;
  public ARN $arn;
  public AgentUsername $username;
}

class CurrentMetrics {
}

class DirectoryUserId {
}

class HoursOfOperationSummaryList {
}

class PhoneNumberSummary {
  public PhoneNumberId $id;
  public ARN $arn;
  public PhoneNumber $phone_number;
  public PhoneNumberType $phone_number_type;
  public PhoneNumberCountryCode $phone_number_country_code;
}

class TagResourceRequest {
  public ARN $resource_arn;
  public TagMap $tags;
}

class CurrentMetric {
  public CurrentMetricName $name;
  public Unit $unit;
}

class HistoricalMetricResult {
  public Dimensions $dimensions;
  public HistoricalMetricDataCollections $collections;
}

class PhoneNumberType {
}

class Unit {
}

class UpdateUserSecurityProfilesRequest {
  public SecurityProfileIds $security_profile_ids;
  public UserId $user_id;
  public InstanceId $instance_id;
}

class HierarchyLevelName {
}

class Message {
}

class ListSecurityProfilesRequest {
  public NextToken $next_token;
  public MaxResult1000 $max_results;
  public InstanceId $instance_id;
}

class ParticipantToken {
}

class HierarchyGroupName {
}

class HoursOfOperationId {
}

class ListContactFlowsResponse {
  public NextToken $next_token;
  public ContactFlowSummaryList $contact_flow_summary_list;
}

class SecurityProfileName {
}

class DescribeUserRequest {
  public UserId $user_id;
  public InstanceId $instance_id;
}

class Email {
}

class InstanceId {
}

class OutboundContactNotPermittedException {
  public Message $message;
}

class RoutingProfileName {
}

class AgentLastName {
}

class DescribeUserHierarchyGroupRequest {
  public HierarchyGroupId $hierarchy_group_id;
  public InstanceId $instance_id;
}

class GetMetricDataResponse {
  public HistoricalMetricResults $metric_results;
  public NextToken $next_token;
}

class HistoricalMetricName {
}

class InternalServiceException {
  public Message $message;
}

class ListRoutingProfilesRequest {
  public InstanceId $instance_id;
  public NextToken $next_token;
  public MaxResult1000 $max_results;
}

class AgentFirstName {
}

class CurrentMetricData {
  public CurrentMetric $metric;
  public Value $value;
}

class StartChatContactRequest {
  public Attributes $attributes;
  public ParticipantDetails $participant_details;
  public ChatMessage $initial_message;
  public ClientToken $client_token;
  public InstanceId $instance_id;
  public ContactFlowId $contact_flow_id;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class MaxResult100 {
}

class Dimensions {
  public QueueReference $queue;
  public Channel $channel;
}

class GetContactAttributesResponse {
  public Attributes $attributes;
}

class StartOutboundVoiceContactRequest {
  public PhoneNumber $destination_phone_number;
  public ContactFlowId $contact_flow_id;
  public InstanceId $instance_id;
  public ClientToken $client_token;
  public PhoneNumber $source_phone_number;
  public QueueId $queue_id;
  public Attributes $attributes;
}

class ContactFlowType {
}

class DestinationNotAllowedException {
  public Message $message;
}

class ListPhoneNumbersResponse {
  public PhoneNumberSummaryList $phone_number_summary_list;
  public NextToken $next_token;
}

class ListQueuesResponse {
  public QueueSummaryList $queue_summary_list;
  public NextToken $next_token;
}

class ListUsersResponse {
  public UserSummaryList $user_summary_list;
  public NextToken $next_token;
}

class Password {
}

class PhoneNumberSummaryList {
}

class DeleteUserRequest {
  public UserId $user_id;
  public InstanceId $instance_id;
}

class Grouping {
}

class HierarchyGroupId {
}

class InvalidRequestException {
  public Message $message;
}

class RoutingProfileSummaryList {
}

class UntagResourceRequest {
  public ARN $resource_arn;
  public TagKeyList $tag_keys;
}

class UserId {
}

class AttributeValue {
}

class GetContactAttributesRequest {
  public InstanceId $instance_id;
  public ContactId $initial_contact_id;
}

class CurrentMetricResults {
}

class HierarchyGroup {
  public HierarchyGroupId $id;
  public ARN $arn;
  public HierarchyGroupName $name;
  public HierarchyLevelId $level_id;
  public HierarchyPath $hierarchy_path;
}

class PhoneNumberCountryCode {
}

class UserSummaryList {
}

class ContactFlowId {
}

class CreateUserRequest {
  public InstanceId $instance_id;
  public AgentUsername $username;
  public Password $password;
  public UserPhoneConfig $phone_config;
  public DirectoryUserId $directory_user_id;
  public RoutingProfileId $routing_profile_id;
  public HierarchyGroupId $hierarchy_group_id;
  public UserIdentityInfo $identity_info;
  public SecurityProfileIds $security_profile_ids;
  public TagMap $tags;
}

class ListUserHierarchyGroupsResponse {
  public HierarchyGroupSummaryList $user_hierarchy_group_summary_list;
  public NextToken $next_token;
}

class Queues {
}

class AfterContactWorkTimeLimit {
}

class HistoricalMetricDataCollections {
}

class HistoricalMetric {
  public HistoricalMetricName $name;
  public Threshold $threshold;
  public Statistic $statistic;
  public Unit $unit;
}

class QueueReference {
  public QueueId $id;
  public ARN $arn;
}

class UpdateUserPhoneConfigRequest {
  public UserPhoneConfig $phone_config;
  public UserId $user_id;
  public InstanceId $instance_id;
}

class Channel {
}

class DescribeUserHierarchyStructureResponse {
  public HierarchyStructure $hierarchy_structure;
}

class UserIdentityInfo {
  public AgentFirstName $first_name;
  public AgentLastName $last_name;
  public Email $email;
}

class NextToken {
}

class PhoneNumberCountryCodes {
}

class ListSecurityProfilesResponse {
  public SecurityProfileSummaryList $security_profile_summary_list;
  public NextToken $next_token;
}

class QueueSummaryList {
}

class SecurityToken {
}

class StopContactRequest {
  public ContactId $contact_id;
  public InstanceId $instance_id;
}

class ContactFlowSummary {
  public ContactFlowId $id;
  public ARN $arn;
  public ContactFlowName $name;
  public ContactFlowType $contact_flow_type;
}

class HierarchyGroupSummary {
  public HierarchyGroupId $id;
  public ARN $arn;
  public HierarchyGroupName $name;
}

class HierarchyPath {
  public HierarchyGroupSummary $level_two;
  public HierarchyGroupSummary $level_three;
  public HierarchyGroupSummary $level_four;
  public HierarchyGroupSummary $level_five;
  public HierarchyGroupSummary $level_one;
}

class ListUsersRequest {
  public InstanceId $instance_id;
  public NextToken $next_token;
  public MaxResult1000 $max_results;
}

class TagValue {
}

class Threshold {
  public Comparison $comparison;
  public ThresholdValue $threshold_value;
}

class ChatContentType {
}

class GetMetricDataRequest {
  public Filters $filters;
  public Groupings $groupings;
  public HistoricalMetrics $historical_metrics;
  public NextToken $next_token;
  public MaxResult100 $max_results;
  public InstanceId $instance_id;
  public timestamp $start_time;
  public timestamp $end_time;
}

class SecurityProfileIds {
}

class Filters {
  public Queues $queues;
  public Channels $channels;
}

class GetFederationTokenRequest {
  public InstanceId $instance_id;
}

class GetFederationTokenResponse {
  public Credentials $credentials;
}

class HistoricalMetrics {
}

class ListTagsForResourceRequest {
  public ARN $resource_arn;
}

class Credentials {
  public SecurityToken $refresh_token;
  public timestamp $refresh_token_expiration;
  public SecurityToken $access_token;
  public timestamp $access_token_expiration;
}

class CurrentMetricDataCollections {
}

class TagKeyList {
}

class ThrottlingException {
  public Message $message;
}

class LimitExceededException {
  public Message $message;
}

class RoutingProfileSummary {
  public RoutingProfileId $id;
  public ARN $arn;
  public RoutingProfileName $name;
}

class Comparison {
}

class ContactFlowName {
}

class ContactId {
}

class CurrentMetricResult {
  public Dimensions $dimensions;
  public CurrentMetricDataCollections $collections;
}

class HierarchyGroupSummaryList {
}

class HoursOfOperationSummary {
  public HoursOfOperationId $id;
  public ARN $arn;
  public HoursOfOperationName $name;
}

class AgentUsername {
}

class ChatContent {
}

class UserPhoneConfig {
  public AutoAccept $auto_accept;
  public AfterContactWorkTimeLimit $after_contact_work_time_limit;
  public PhoneNumber $desk_phone_number;
  public PhoneType $phone_type;
}

class QueueSummary {
  public QueueId $id;
  public ARN $arn;
  public QueueName $name;
  public QueueType $queue_type;
}

class UpdateUserIdentityInfoRequest {
  public InstanceId $instance_id;
  public UserIdentityInfo $identity_info;
  public UserId $user_id;
}

class SecurityProfileSummaryList {
}

class StopContactResponse {
}

class Value {
}

class InvalidParameterException {
  public Message $message;
}

class QueueName {
}

class RoutingProfileId {
}

class StartChatContactResponse {
  public ContactId $contact_id;
  public ParticipantId $participant_id;
  public ParticipantToken $participant_token;
}

class Statistic {
}

class TagKey {
}

class HistoricalMetricData {
  public HistoricalMetric $metric;
  public Value $value;
}

class ListRoutingProfilesResponse {
  public RoutingProfileSummaryList $routing_profile_summary_list;
  public NextToken $next_token;
}

class DescribeUserResponse {
  public User $user;
}

class ListUserHierarchyGroupsRequest {
  public InstanceId $instance_id;
  public NextToken $next_token;
  public MaxResult1000 $max_results;
}

class ParticipantId {
}

class UpdateUserRoutingProfileRequest {
  public RoutingProfileId $routing_profile_id;
  public UserId $user_id;
  public InstanceId $instance_id;
}

class ChatMessage {
  public ChatContentType $content_type;
  public ChatContent $content;
}

class ContactNotFoundException {
  public Message $message;
}

class ResourceNotFoundException {
  public Message $message;
}

class SecurityProfileSummary {
  public SecurityProfileId $id;
  public ARN $arn;
  public SecurityProfileName $name;
}

class CreateUserResponse {
  public UserId $user_id;
  public ARN $user_arn;
}

class ListHoursOfOperationsRequest {
  public InstanceId $instance_id;
  public NextToken $next_token;
  public MaxResult1000 $max_results;
}

class CurrentMetricName {
}

class PhoneType {
}

class QueueTypes {
}

class timestamp {
}

class ContactFlowSummaryList {
}

class ContactFlowTypes {
}

class ListPhoneNumbersRequest {
  public MaxResult1000 $max_results;
  public InstanceId $instance_id;
  public PhoneNumberTypes $phone_number_types;
  public PhoneNumberCountryCodes $phone_number_country_codes;
  public NextToken $next_token;
}

class UpdateContactAttributesResponse {
}

class Channels {
}

class DuplicateResourceException {
  public Message $message;
}

class HierarchyLevel {
  public HierarchyLevelId $id;
  public ARN $arn;
  public HierarchyLevelName $name;
}

class Attributes {
}

class DescribeUserHierarchyStructureRequest {
  public InstanceId $instance_id;
}

class HistoricalMetricResults {
}

class HoursOfOperationName {
}

class ListContactFlowsRequest {
  public InstanceId $instance_id;
  public ContactFlowTypes $contact_flow_types;
  public NextToken $next_token;
  public MaxResult1000 $max_results;
}

class QueueId {
}

class UserNotFoundException {
  public Message $message;
}

class AttributeName {
}

class DisplayName {
}

class QueueType {
}

class ThresholdValue {
}

class GetCurrentMetricDataResponse {
  public NextToken $next_token;
  public CurrentMetricResults $metric_results;
  public timestamp $data_snapshot_time;
}

class PhoneNumberId {
}

