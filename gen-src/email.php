<?hh // strict
namespace slack\aws\email;

interface SESv2 {
  public function CreateConfigurationSet(CreateConfigurationSetRequest) Awaitable<Errors\Result<CreateConfigurationSetResponse>>;
  public function CreateConfigurationSetEventDestination(CreateConfigurationSetEventDestinationRequest) Awaitable<Errors\Result<CreateConfigurationSetEventDestinationResponse>>;
  public function CreateDedicatedIpPool(CreateDedicatedIpPoolRequest) Awaitable<Errors\Result<CreateDedicatedIpPoolResponse>>;
  public function CreateDeliverabilityTestReport(CreateDeliverabilityTestReportRequest) Awaitable<Errors\Result<CreateDeliverabilityTestReportResponse>>;
  public function CreateEmailIdentity(CreateEmailIdentityRequest) Awaitable<Errors\Result<CreateEmailIdentityResponse>>;
  public function DeleteConfigurationSet(DeleteConfigurationSetRequest) Awaitable<Errors\Result<DeleteConfigurationSetResponse>>;
  public function DeleteConfigurationSetEventDestination(DeleteConfigurationSetEventDestinationRequest) Awaitable<Errors\Result<DeleteConfigurationSetEventDestinationResponse>>;
  public function DeleteDedicatedIpPool(DeleteDedicatedIpPoolRequest) Awaitable<Errors\Result<DeleteDedicatedIpPoolResponse>>;
  public function DeleteEmailIdentity(DeleteEmailIdentityRequest) Awaitable<Errors\Result<DeleteEmailIdentityResponse>>;
  public function DeleteSuppressedDestination(DeleteSuppressedDestinationRequest) Awaitable<Errors\Result<DeleteSuppressedDestinationResponse>>;
  public function GetAccount(GetAccountRequest) Awaitable<Errors\Result<GetAccountResponse>>;
  public function GetBlacklistReports(GetBlacklistReportsRequest) Awaitable<Errors\Result<GetBlacklistReportsResponse>>;
  public function GetConfigurationSet(GetConfigurationSetRequest) Awaitable<Errors\Result<GetConfigurationSetResponse>>;
  public function GetConfigurationSetEventDestinations(GetConfigurationSetEventDestinationsRequest) Awaitable<Errors\Result<GetConfigurationSetEventDestinationsResponse>>;
  public function GetDedicatedIp(GetDedicatedIpRequest) Awaitable<Errors\Result<GetDedicatedIpResponse>>;
  public function GetDedicatedIps(GetDedicatedIpsRequest) Awaitable<Errors\Result<GetDedicatedIpsResponse>>;
  public function GetDeliverabilityDashboardOptions(GetDeliverabilityDashboardOptionsRequest) Awaitable<Errors\Result<GetDeliverabilityDashboardOptionsResponse>>;
  public function GetDeliverabilityTestReport(GetDeliverabilityTestReportRequest) Awaitable<Errors\Result<GetDeliverabilityTestReportResponse>>;
  public function GetDomainDeliverabilityCampaign(GetDomainDeliverabilityCampaignRequest) Awaitable<Errors\Result<GetDomainDeliverabilityCampaignResponse>>;
  public function GetDomainStatisticsReport(GetDomainStatisticsReportRequest) Awaitable<Errors\Result<GetDomainStatisticsReportResponse>>;
  public function GetEmailIdentity(GetEmailIdentityRequest) Awaitable<Errors\Result<GetEmailIdentityResponse>>;
  public function GetSuppressedDestination(GetSuppressedDestinationRequest) Awaitable<Errors\Result<GetSuppressedDestinationResponse>>;
  public function ListConfigurationSets(ListConfigurationSetsRequest) Awaitable<Errors\Result<ListConfigurationSetsResponse>>;
  public function ListDedicatedIpPools(ListDedicatedIpPoolsRequest) Awaitable<Errors\Result<ListDedicatedIpPoolsResponse>>;
  public function ListDeliverabilityTestReports(ListDeliverabilityTestReportsRequest) Awaitable<Errors\Result<ListDeliverabilityTestReportsResponse>>;
  public function ListDomainDeliverabilityCampaigns(ListDomainDeliverabilityCampaignsRequest) Awaitable<Errors\Result<ListDomainDeliverabilityCampaignsResponse>>;
  public function ListEmailIdentities(ListEmailIdentitiesRequest) Awaitable<Errors\Result<ListEmailIdentitiesResponse>>;
  public function ListSuppressedDestinations(ListSuppressedDestinationsRequest) Awaitable<Errors\Result<ListSuppressedDestinationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutAccountDedicatedIpWarmupAttributes(PutAccountDedicatedIpWarmupAttributesRequest) Awaitable<Errors\Result<PutAccountDedicatedIpWarmupAttributesResponse>>;
  public function PutAccountSendingAttributes(PutAccountSendingAttributesRequest) Awaitable<Errors\Result<PutAccountSendingAttributesResponse>>;
  public function PutAccountSuppressionAttributes(PutAccountSuppressionAttributesRequest) Awaitable<Errors\Result<PutAccountSuppressionAttributesResponse>>;
  public function PutConfigurationSetDeliveryOptions(PutConfigurationSetDeliveryOptionsRequest) Awaitable<Errors\Result<PutConfigurationSetDeliveryOptionsResponse>>;
  public function PutConfigurationSetReputationOptions(PutConfigurationSetReputationOptionsRequest) Awaitable<Errors\Result<PutConfigurationSetReputationOptionsResponse>>;
  public function PutConfigurationSetSendingOptions(PutConfigurationSetSendingOptionsRequest) Awaitable<Errors\Result<PutConfigurationSetSendingOptionsResponse>>;
  public function PutConfigurationSetSuppressionOptions(PutConfigurationSetSuppressionOptionsRequest) Awaitable<Errors\Result<PutConfigurationSetSuppressionOptionsResponse>>;
  public function PutConfigurationSetTrackingOptions(PutConfigurationSetTrackingOptionsRequest) Awaitable<Errors\Result<PutConfigurationSetTrackingOptionsResponse>>;
  public function PutDedicatedIpInPool(PutDedicatedIpInPoolRequest) Awaitable<Errors\Result<PutDedicatedIpInPoolResponse>>;
  public function PutDedicatedIpWarmupAttributes(PutDedicatedIpWarmupAttributesRequest) Awaitable<Errors\Result<PutDedicatedIpWarmupAttributesResponse>>;
  public function PutDeliverabilityDashboardOption(PutDeliverabilityDashboardOptionRequest) Awaitable<Errors\Result<PutDeliverabilityDashboardOptionResponse>>;
  public function PutEmailIdentityDkimAttributes(PutEmailIdentityDkimAttributesRequest) Awaitable<Errors\Result<PutEmailIdentityDkimAttributesResponse>>;
  public function PutEmailIdentityDkimSigningAttributes(PutEmailIdentityDkimSigningAttributesRequest) Awaitable<Errors\Result<PutEmailIdentityDkimSigningAttributesResponse>>;
  public function PutEmailIdentityFeedbackAttributes(PutEmailIdentityFeedbackAttributesRequest) Awaitable<Errors\Result<PutEmailIdentityFeedbackAttributesResponse>>;
  public function PutEmailIdentityMailFromAttributes(PutEmailIdentityMailFromAttributesRequest) Awaitable<Errors\Result<PutEmailIdentityMailFromAttributesResponse>>;
  public function PutSuppressedDestination(PutSuppressedDestinationRequest) Awaitable<Errors\Result<PutSuppressedDestinationResponse>>;
  public function SendEmail(SendEmailRequest) Awaitable<Errors\Result<SendEmailResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateConfigurationSetEventDestination(UpdateConfigurationSetEventDestinationRequest) Awaitable<Errors\Result<UpdateConfigurationSetEventDestinationResponse>>;
}

class AccountSuspendedException {
}

class AlreadyExistsException {
}

class AmazonResourceName {
}

class BadRequestException {
}

class BehaviorOnMxFailure {
}

class BlacklistEntries {
}

class BlacklistEntry {
  public BlacklistingDescription $description;
  public Timestamp $listing_time;
  public RblName $rbl_name;
}

class BlacklistItemName {
}

class BlacklistItemNames {
}

class BlacklistReport {
}

class BlacklistingDescription {
}

class Body {
  public Content $html;
  public Content $text;
}

class CampaignId {
}

class Charset {
}

class CloudWatchDestination {
  public CloudWatchDimensionConfigurations $dimension_configurations;
}

class CloudWatchDimensionConfiguration {
  public DefaultDimensionValue $default_dimension_value;
  public DimensionName $dimension_name;
  public DimensionValueSource $dimension_value_source;
}

class CloudWatchDimensionConfigurations {
}

class ConcurrentModificationException {
}

class ConfigurationSetName {
}

class ConfigurationSetNameList {
}

class Content {
  public Charset $charset;
  public MessageData $data;
}

class CreateConfigurationSetEventDestinationRequest {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationDefinition $event_destination;
  public EventDestinationName $event_destination_name;
}

class CreateConfigurationSetEventDestinationResponse {
}

class CreateConfigurationSetRequest {
  public ConfigurationSetName $configuration_set_name;
  public DeliveryOptions $delivery_options;
  public ReputationOptions $reputation_options;
  public SendingOptions $sending_options;
  public SuppressionOptions $suppression_options;
  public TagList $tags;
  public TrackingOptions $tracking_options;
}

class CreateConfigurationSetResponse {
}

class CreateDedicatedIpPoolRequest {
  public PoolName $pool_name;
  public TagList $tags;
}

class CreateDedicatedIpPoolResponse {
}

class CreateDeliverabilityTestReportRequest {
  public EmailContent $content;
  public EmailAddress $from_email_address;
  public ReportName $report_name;
  public TagList $tags;
}

class CreateDeliverabilityTestReportResponse {
  public DeliverabilityTestStatus $deliverability_test_status;
  public ReportId $report_id;
}

class CreateEmailIdentityRequest {
  public DkimSigningAttributes $dkim_signing_attributes;
  public Identity $email_identity;
  public TagList $tags;
}

class CreateEmailIdentityResponse {
  public DkimAttributes $dkim_attributes;
  public IdentityType $identity_type;
  public Enabled $verified_for_sending_status;
}

class CustomRedirectDomain {
}

class DailyVolume {
  public DomainIspPlacements $domain_isp_placements;
  public Timestamp $start_date;
  public VolumeStatistics $volume_statistics;
}

class DailyVolumes {
}

class DedicatedIp {
  public Ip $ip;
  public PoolName $pool_name;
  public Percentage100Wrapper $warmup_percentage;
  public WarmupStatus $warmup_status;
}

class DedicatedIpList {
}

class DefaultDimensionValue {
}

class DeleteConfigurationSetEventDestinationRequest {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationName $event_destination_name;
}

class DeleteConfigurationSetEventDestinationResponse {
}

class DeleteConfigurationSetRequest {
  public ConfigurationSetName $configuration_set_name;
}

class DeleteConfigurationSetResponse {
}

class DeleteDedicatedIpPoolRequest {
  public PoolName $pool_name;
}

class DeleteDedicatedIpPoolResponse {
}

class DeleteEmailIdentityRequest {
  public Identity $email_identity;
}

class DeleteEmailIdentityResponse {
}

class DeleteSuppressedDestinationRequest {
  public EmailAddress $email_address;
}

class DeleteSuppressedDestinationResponse {
}

class DeliverabilityDashboardAccountStatus {
}

class DeliverabilityTestReport {
  public Timestamp $create_date;
  public DeliverabilityTestStatus $deliverability_test_status;
  public EmailAddress $from_email_address;
  public ReportId $report_id;
  public ReportName $report_name;
  public DeliverabilityTestSubject $subject;
}

class DeliverabilityTestReports {
}

class DeliverabilityTestStatus {
}

class DeliverabilityTestSubject {
}

class DeliveryOptions {
  public PoolName $sending_pool_name;
  public TlsPolicy $tls_policy;
}

class Destination {
  public EmailAddressList $bcc_addresses;
  public EmailAddressList $cc_addresses;
  public EmailAddressList $to_addresses;
}

class DimensionName {
}

class DimensionValueSource {
}

class DkimAttributes {
  public DkimSigningAttributesOrigin $signing_attributes_origin;
  public Enabled $signing_enabled;
  public DkimStatus $status;
  public DnsTokenList $tokens;
}

class DkimSigningAttributes {
  public PrivateKey $domain_signing_private_key;
  public Selector $domain_signing_selector;
}

class DkimSigningAttributesOrigin {
}

class DkimStatus {
}

class DnsToken {
}

class DnsTokenList {
}

class Domain {
}

class DomainDeliverabilityCampaign {
  public CampaignId $campaign_id;
  public Percentage $delete_rate;
  public Esps $esps;
  public Timestamp $first_seen_date_time;
  public Identity $from_address;
  public ImageUrl $image_url;
  public Volume $inbox_count;
  public Timestamp $last_seen_date_time;
  public Volume $projected_volume;
  public Percentage $read_delete_rate;
  public Percentage $read_rate;
  public IpList $sending_ips;
  public Volume $spam_count;
  public Subject $subject;
}

class DomainDeliverabilityCampaignList {
}

class DomainDeliverabilityTrackingOption {
  public Domain $domain;
  public InboxPlacementTrackingOption $inbox_placement_tracking_option;
  public Timestamp $subscription_start_date;
}

class DomainDeliverabilityTrackingOptions {
}

class DomainIspPlacement {
  public Percentage $inbox_percentage;
  public Volume $inbox_raw_count;
  public IspName $isp_name;
  public Percentage $spam_percentage;
  public Volume $spam_raw_count;
}

class DomainIspPlacements {
}

class EmailAddress {
}

class EmailAddressList {
}

class EmailContent {
  public RawMessage $raw;
  public Message $simple;
  public Template $template;
}

class Enabled {
}

class Esp {
}

class Esps {
}

class EventDestination {
  public CloudWatchDestination $cloud_watch_destination;
  public Enabled $enabled;
  public KinesisFirehoseDestination $kinesis_firehose_destination;
  public EventTypes $matching_event_types;
  public EventDestinationName $name;
  public PinpointDestination $pinpoint_destination;
  public SnsDestination $sns_destination;
}

class EventDestinationDefinition {
  public CloudWatchDestination $cloud_watch_destination;
  public Enabled $enabled;
  public KinesisFirehoseDestination $kinesis_firehose_destination;
  public EventTypes $matching_event_types;
  public PinpointDestination $pinpoint_destination;
  public SnsDestination $sns_destination;
}

class EventDestinationName {
}

class EventDestinations {
}

class EventType {
}

class EventTypes {
}

class FeedbackId {
}

class GeneralEnforcementStatus {
}

class GetAccountRequest {
}

class GetAccountResponse {
  public Enabled $dedicated_ip_auto_warmup_enabled;
  public GeneralEnforcementStatus $enforcement_status;
  public Enabled $production_access_enabled;
  public SendQuota $send_quota;
  public Enabled $sending_enabled;
  public SuppressionAttributes $suppression_attributes;
}

class GetBlacklistReportsRequest {
  public BlacklistItemNames $blacklist_item_names;
}

class GetBlacklistReportsResponse {
  public BlacklistReport $blacklist_report;
}

class GetConfigurationSetEventDestinationsRequest {
  public ConfigurationSetName $configuration_set_name;
}

class GetConfigurationSetEventDestinationsResponse {
  public EventDestinations $event_destinations;
}

class GetConfigurationSetRequest {
  public ConfigurationSetName $configuration_set_name;
}

class GetConfigurationSetResponse {
  public ConfigurationSetName $configuration_set_name;
  public DeliveryOptions $delivery_options;
  public ReputationOptions $reputation_options;
  public SendingOptions $sending_options;
  public SuppressionOptions $suppression_options;
  public TagList $tags;
  public TrackingOptions $tracking_options;
}

class GetDedicatedIpRequest {
  public Ip $ip;
}

class GetDedicatedIpResponse {
  public DedicatedIp $dedicated_ip;
}

class GetDedicatedIpsRequest {
  public NextToken $next_token;
  public MaxItems $page_size;
  public PoolName $pool_name;
}

class GetDedicatedIpsResponse {
  public DedicatedIpList $dedicated_ips;
  public NextToken $next_token;
}

class GetDeliverabilityDashboardOptionsRequest {
}

class GetDeliverabilityDashboardOptionsResponse {
  public DeliverabilityDashboardAccountStatus $account_status;
  public DomainDeliverabilityTrackingOptions $active_subscribed_domains;
  public Enabled $dashboard_enabled;
  public DomainDeliverabilityTrackingOptions $pending_expiration_subscribed_domains;
  public Timestamp $subscription_expiry_date;
}

class GetDeliverabilityTestReportRequest {
  public ReportId $report_id;
}

class GetDeliverabilityTestReportResponse {
  public DeliverabilityTestReport $deliverability_test_report;
  public IspPlacements $isp_placements;
  public MessageContent $message;
  public PlacementStatistics $overall_placement;
  public TagList $tags;
}

class GetDomainDeliverabilityCampaignRequest {
  public CampaignId $campaign_id;
}

class GetDomainDeliverabilityCampaignResponse {
  public DomainDeliverabilityCampaign $domain_deliverability_campaign;
}

class GetDomainStatisticsReportRequest {
  public Identity $domain;
  public Timestamp $end_date;
  public Timestamp $start_date;
}

class GetDomainStatisticsReportResponse {
  public DailyVolumes $daily_volumes;
  public OverallVolume $overall_volume;
}

class GetEmailIdentityRequest {
  public Identity $email_identity;
}

class GetEmailIdentityResponse {
  public DkimAttributes $dkim_attributes;
  public Enabled $feedback_forwarding_status;
  public IdentityType $identity_type;
  public MailFromAttributes $mail_from_attributes;
  public TagList $tags;
  public Enabled $verified_for_sending_status;
}

class GetSuppressedDestinationRequest {
  public EmailAddress $email_address;
}

class GetSuppressedDestinationResponse {
  public SuppressedDestination $suppressed_destination;
}

class Identity {
}

class IdentityInfo {
  public Identity $identity_name;
  public IdentityType $identity_type;
  public Enabled $sending_enabled;
}

class IdentityInfoList {
}

class IdentityType {
}

class ImageUrl {
}

class InboxPlacementTrackingOption {
  public Enabled $global;
  public IspNameList $tracked_isps;
}

class InvalidNextTokenException {
}

class Ip {
}

class IpList {
}

class IspName {
}

class IspNameList {
}

class IspPlacement {
  public IspName $isp_name;
  public PlacementStatistics $placement_statistics;
}

class IspPlacements {
}

class KinesisFirehoseDestination {
  public AmazonResourceName $delivery_stream_arn;
  public AmazonResourceName $iam_role_arn;
}

class LastFreshStart {
}

class LimitExceededException {
}

class ListConfigurationSetsRequest {
  public NextToken $next_token;
  public MaxItems $page_size;
}

class ListConfigurationSetsResponse {
  public ConfigurationSetNameList $configuration_sets;
  public NextToken $next_token;
}

class ListDedicatedIpPoolsRequest {
  public NextToken $next_token;
  public MaxItems $page_size;
}

class ListDedicatedIpPoolsResponse {
  public ListOfDedicatedIpPools $dedicated_ip_pools;
  public NextToken $next_token;
}

class ListDeliverabilityTestReportsRequest {
  public NextToken $next_token;
  public MaxItems $page_size;
}

class ListDeliverabilityTestReportsResponse {
  public DeliverabilityTestReports $deliverability_test_reports;
  public NextToken $next_token;
}

class ListDomainDeliverabilityCampaignsRequest {
  public Timestamp $end_date;
  public NextToken $next_token;
  public MaxItems $page_size;
  public Timestamp $start_date;
  public Domain $subscribed_domain;
}

class ListDomainDeliverabilityCampaignsResponse {
  public DomainDeliverabilityCampaignList $domain_deliverability_campaigns;
  public NextToken $next_token;
}

class ListEmailIdentitiesRequest {
  public NextToken $next_token;
  public MaxItems $page_size;
}

class ListEmailIdentitiesResponse {
  public IdentityInfoList $email_identities;
  public NextToken $next_token;
}

class ListOfDedicatedIpPools {
}

class ListSuppressedDestinationsRequest {
  public Timestamp $end_date;
  public NextToken $next_token;
  public MaxItems $page_size;
  public SuppressionListReasons $reasons;
  public Timestamp $start_date;
}

class ListSuppressedDestinationsResponse {
  public NextToken $next_token;
  public SuppressedDestinationSummaries $suppressed_destination_summaries;
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class MailFromAttributes {
  public BehaviorOnMxFailure $behavior_on_mx_failure;
  public MailFromDomainName $mail_from_domain;
  public MailFromDomainStatus $mail_from_domain_status;
}

class MailFromDomainName {
}

class MailFromDomainNotVerifiedException {
}

class MailFromDomainStatus {
}

class Max24HourSend {
}

class MaxItems {
}

class MaxSendRate {
}

class Message {
  public Body $body;
  public Content $subject;
}

class MessageContent {
}

class MessageData {
}

class MessageRejected {
}

class MessageTag {
  public MessageTagName $name;
  public MessageTagValue $value;
}

class MessageTagList {
}

class MessageTagName {
}

class MessageTagValue {
}

class NextToken {
}

class NotFoundException {
}

class OutboundMessageId {
}

class OverallVolume {
  public DomainIspPlacements $domain_isp_placements;
  public Percentage $read_rate_percent;
  public VolumeStatistics $volume_statistics;
}

class Percentage {
}

class Percentage100Wrapper {
}

class PinpointDestination {
  public AmazonResourceName $application_arn;
}

class PlacementStatistics {
  public Percentage $dkim_percentage;
  public Percentage $inbox_percentage;
  public Percentage $missing_percentage;
  public Percentage $spam_percentage;
  public Percentage $spf_percentage;
}

class PoolName {
}

class PrivateKey {
}

class PutAccountDedicatedIpWarmupAttributesRequest {
  public Enabled $auto_warmup_enabled;
}

class PutAccountDedicatedIpWarmupAttributesResponse {
}

class PutAccountSendingAttributesRequest {
  public Enabled $sending_enabled;
}

class PutAccountSendingAttributesResponse {
}

class PutAccountSuppressionAttributesRequest {
  public SuppressionListReasons $suppressed_reasons;
}

class PutAccountSuppressionAttributesResponse {
}

class PutConfigurationSetDeliveryOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public SendingPoolName $sending_pool_name;
  public TlsPolicy $tls_policy;
}

class PutConfigurationSetDeliveryOptionsResponse {
}

class PutConfigurationSetReputationOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public Enabled $reputation_metrics_enabled;
}

class PutConfigurationSetReputationOptionsResponse {
}

class PutConfigurationSetSendingOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public Enabled $sending_enabled;
}

class PutConfigurationSetSendingOptionsResponse {
}

class PutConfigurationSetSuppressionOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public SuppressionListReasons $suppressed_reasons;
}

class PutConfigurationSetSuppressionOptionsResponse {
}

class PutConfigurationSetTrackingOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public CustomRedirectDomain $custom_redirect_domain;
}

class PutConfigurationSetTrackingOptionsResponse {
}

class PutDedicatedIpInPoolRequest {
  public PoolName $destination_pool_name;
  public Ip $ip;
}

class PutDedicatedIpInPoolResponse {
}

class PutDedicatedIpWarmupAttributesRequest {
  public Ip $ip;
  public Percentage100Wrapper $warmup_percentage;
}

class PutDedicatedIpWarmupAttributesResponse {
}

class PutDeliverabilityDashboardOptionRequest {
  public Enabled $dashboard_enabled;
  public DomainDeliverabilityTrackingOptions $subscribed_domains;
}

class PutDeliverabilityDashboardOptionResponse {
}

class PutEmailIdentityDkimAttributesRequest {
  public Identity $email_identity;
  public Enabled $signing_enabled;
}

class PutEmailIdentityDkimAttributesResponse {
}

class PutEmailIdentityDkimSigningAttributesRequest {
  public Identity $email_identity;
  public DkimSigningAttributes $signing_attributes;
  public DkimSigningAttributesOrigin $signing_attributes_origin;
}

class PutEmailIdentityDkimSigningAttributesResponse {
  public DkimStatus $dkim_status;
  public DnsTokenList $dkim_tokens;
}

class PutEmailIdentityFeedbackAttributesRequest {
  public Enabled $email_forwarding_enabled;
  public Identity $email_identity;
}

class PutEmailIdentityFeedbackAttributesResponse {
}

class PutEmailIdentityMailFromAttributesRequest {
  public BehaviorOnMxFailure $behavior_on_mx_failure;
  public Identity $email_identity;
  public MailFromDomainName $mail_from_domain;
}

class PutEmailIdentityMailFromAttributesResponse {
}

class PutSuppressedDestinationRequest {
  public EmailAddress $email_address;
  public SuppressionListReason $reason;
}

class PutSuppressedDestinationResponse {
}

class RawMessage {
  public RawMessageData $data;
}

class RawMessageData {
}

class RblName {
}

class ReportId {
}

class ReportName {
}

class ReputationOptions {
  public LastFreshStart $last_fresh_start;
  public Enabled $reputation_metrics_enabled;
}

class Selector {
}

class SendEmailRequest {
  public ConfigurationSetName $configuration_set_name;
  public EmailContent $content;
  public Destination $destination;
  public MessageTagList $email_tags;
  public EmailAddress $feedback_forwarding_email_address;
  public EmailAddress $from_email_address;
  public EmailAddressList $reply_to_addresses;
}

class SendEmailResponse {
  public OutboundMessageId $message_id;
}

class SendQuota {
  public Max24HourSend $max_24_hour_send;
  public MaxSendRate $max_send_rate;
  public SentLast24Hours $sent_last_24_hours;
}

class SendingOptions {
  public Enabled $sending_enabled;
}

class SendingPausedException {
}

class SendingPoolName {
}

class SentLast24Hours {
}

class SnsDestination {
  public AmazonResourceName $topic_arn;
}

class Subject {
}

class SuppressedDestination {
  public SuppressedDestinationAttributes $attributes;
  public EmailAddress $email_address;
  public Timestamp $last_update_time;
  public SuppressionListReason $reason;
}

class SuppressedDestinationAttributes {
  public FeedbackId $feedback_id;
  public OutboundMessageId $message_id;
}

class SuppressedDestinationSummaries {
}

class SuppressedDestinationSummary {
  public EmailAddress $email_address;
  public Timestamp $last_update_time;
  public SuppressionListReason $reason;
}

class SuppressionAttributes {
  public SuppressionListReasons $suppressed_reasons;
}

class SuppressionListReason {
}

class SuppressionListReasons {
}

class SuppressionOptions {
  public SuppressionListReasons $suppressed_reasons;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Template {
  public TemplateArn $template_arn;
  public TemplateData $template_data;
}

class TemplateArn {
}

class TemplateData {
}

class Timestamp {
}

class TlsPolicy {
}

class TooManyRequestsException {
}

class TrackingOptions {
  public CustomRedirectDomain $custom_redirect_domain;
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateConfigurationSetEventDestinationRequest {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationDefinition $event_destination;
  public EventDestinationName $event_destination_name;
}

class UpdateConfigurationSetEventDestinationResponse {
}

class Volume {
}

class VolumeStatistics {
  public Volume $inbox_raw_count;
  public Volume $projected_inbox;
  public Volume $projected_spam;
  public Volume $spam_raw_count;
}

class WarmupStatus {
}

