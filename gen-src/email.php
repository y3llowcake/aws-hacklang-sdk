<?hh // strict
namespace slack\aws\email;

interface SESv2 {
  public function CreateConfigurationSet(CreateConfigurationSetRequest): Awaitable<Errors\Result<CreateConfigurationSetResponse>>;
  public function CreateConfigurationSetEventDestination(CreateConfigurationSetEventDestinationRequest): Awaitable<Errors\Result<CreateConfigurationSetEventDestinationResponse>>;
  public function CreateDedicatedIpPool(CreateDedicatedIpPoolRequest): Awaitable<Errors\Result<CreateDedicatedIpPoolResponse>>;
  public function CreateDeliverabilityTestReport(CreateDeliverabilityTestReportRequest): Awaitable<Errors\Result<CreateDeliverabilityTestReportResponse>>;
  public function CreateEmailIdentity(CreateEmailIdentityRequest): Awaitable<Errors\Result<CreateEmailIdentityResponse>>;
  public function DeleteConfigurationSet(DeleteConfigurationSetRequest): Awaitable<Errors\Result<DeleteConfigurationSetResponse>>;
  public function DeleteConfigurationSetEventDestination(DeleteConfigurationSetEventDestinationRequest): Awaitable<Errors\Result<DeleteConfigurationSetEventDestinationResponse>>;
  public function DeleteDedicatedIpPool(DeleteDedicatedIpPoolRequest): Awaitable<Errors\Result<DeleteDedicatedIpPoolResponse>>;
  public function DeleteEmailIdentity(DeleteEmailIdentityRequest): Awaitable<Errors\Result<DeleteEmailIdentityResponse>>;
  public function DeleteSuppressedDestination(DeleteSuppressedDestinationRequest): Awaitable<Errors\Result<DeleteSuppressedDestinationResponse>>;
  public function GetAccount(GetAccountRequest): Awaitable<Errors\Result<GetAccountResponse>>;
  public function GetBlacklistReports(GetBlacklistReportsRequest): Awaitable<Errors\Result<GetBlacklistReportsResponse>>;
  public function GetConfigurationSet(GetConfigurationSetRequest): Awaitable<Errors\Result<GetConfigurationSetResponse>>;
  public function GetConfigurationSetEventDestinations(GetConfigurationSetEventDestinationsRequest): Awaitable<Errors\Result<GetConfigurationSetEventDestinationsResponse>>;
  public function GetDedicatedIp(GetDedicatedIpRequest): Awaitable<Errors\Result<GetDedicatedIpResponse>>;
  public function GetDedicatedIps(GetDedicatedIpsRequest): Awaitable<Errors\Result<GetDedicatedIpsResponse>>;
  public function GetDeliverabilityDashboardOptions(GetDeliverabilityDashboardOptionsRequest): Awaitable<Errors\Result<GetDeliverabilityDashboardOptionsResponse>>;
  public function GetDeliverabilityTestReport(GetDeliverabilityTestReportRequest): Awaitable<Errors\Result<GetDeliverabilityTestReportResponse>>;
  public function GetDomainDeliverabilityCampaign(GetDomainDeliverabilityCampaignRequest): Awaitable<Errors\Result<GetDomainDeliverabilityCampaignResponse>>;
  public function GetDomainStatisticsReport(GetDomainStatisticsReportRequest): Awaitable<Errors\Result<GetDomainStatisticsReportResponse>>;
  public function GetEmailIdentity(GetEmailIdentityRequest): Awaitable<Errors\Result<GetEmailIdentityResponse>>;
  public function GetSuppressedDestination(GetSuppressedDestinationRequest): Awaitable<Errors\Result<GetSuppressedDestinationResponse>>;
  public function ListConfigurationSets(ListConfigurationSetsRequest): Awaitable<Errors\Result<ListConfigurationSetsResponse>>;
  public function ListDedicatedIpPools(ListDedicatedIpPoolsRequest): Awaitable<Errors\Result<ListDedicatedIpPoolsResponse>>;
  public function ListDeliverabilityTestReports(ListDeliverabilityTestReportsRequest): Awaitable<Errors\Result<ListDeliverabilityTestReportsResponse>>;
  public function ListDomainDeliverabilityCampaigns(ListDomainDeliverabilityCampaignsRequest): Awaitable<Errors\Result<ListDomainDeliverabilityCampaignsResponse>>;
  public function ListEmailIdentities(ListEmailIdentitiesRequest): Awaitable<Errors\Result<ListEmailIdentitiesResponse>>;
  public function ListSuppressedDestinations(ListSuppressedDestinationsRequest): Awaitable<Errors\Result<ListSuppressedDestinationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutAccountDedicatedIpWarmupAttributes(PutAccountDedicatedIpWarmupAttributesRequest): Awaitable<Errors\Result<PutAccountDedicatedIpWarmupAttributesResponse>>;
  public function PutAccountSendingAttributes(PutAccountSendingAttributesRequest): Awaitable<Errors\Result<PutAccountSendingAttributesResponse>>;
  public function PutAccountSuppressionAttributes(PutAccountSuppressionAttributesRequest): Awaitable<Errors\Result<PutAccountSuppressionAttributesResponse>>;
  public function PutConfigurationSetDeliveryOptions(PutConfigurationSetDeliveryOptionsRequest): Awaitable<Errors\Result<PutConfigurationSetDeliveryOptionsResponse>>;
  public function PutConfigurationSetReputationOptions(PutConfigurationSetReputationOptionsRequest): Awaitable<Errors\Result<PutConfigurationSetReputationOptionsResponse>>;
  public function PutConfigurationSetSendingOptions(PutConfigurationSetSendingOptionsRequest): Awaitable<Errors\Result<PutConfigurationSetSendingOptionsResponse>>;
  public function PutConfigurationSetSuppressionOptions(PutConfigurationSetSuppressionOptionsRequest): Awaitable<Errors\Result<PutConfigurationSetSuppressionOptionsResponse>>;
  public function PutConfigurationSetTrackingOptions(PutConfigurationSetTrackingOptionsRequest): Awaitable<Errors\Result<PutConfigurationSetTrackingOptionsResponse>>;
  public function PutDedicatedIpInPool(PutDedicatedIpInPoolRequest): Awaitable<Errors\Result<PutDedicatedIpInPoolResponse>>;
  public function PutDedicatedIpWarmupAttributes(PutDedicatedIpWarmupAttributesRequest): Awaitable<Errors\Result<PutDedicatedIpWarmupAttributesResponse>>;
  public function PutDeliverabilityDashboardOption(PutDeliverabilityDashboardOptionRequest): Awaitable<Errors\Result<PutDeliverabilityDashboardOptionResponse>>;
  public function PutEmailIdentityDkimAttributes(PutEmailIdentityDkimAttributesRequest): Awaitable<Errors\Result<PutEmailIdentityDkimAttributesResponse>>;
  public function PutEmailIdentityDkimSigningAttributes(PutEmailIdentityDkimSigningAttributesRequest): Awaitable<Errors\Result<PutEmailIdentityDkimSigningAttributesResponse>>;
  public function PutEmailIdentityFeedbackAttributes(PutEmailIdentityFeedbackAttributesRequest): Awaitable<Errors\Result<PutEmailIdentityFeedbackAttributesResponse>>;
  public function PutEmailIdentityMailFromAttributes(PutEmailIdentityMailFromAttributesRequest): Awaitable<Errors\Result<PutEmailIdentityMailFromAttributesResponse>>;
  public function PutSuppressedDestination(PutSuppressedDestinationRequest): Awaitable<Errors\Result<PutSuppressedDestinationResponse>>;
  public function SendEmail(SendEmailRequest): Awaitable<Errors\Result<SendEmailResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateConfigurationSetEventDestination(UpdateConfigurationSetEventDestinationRequest): Awaitable<Errors\Result<UpdateConfigurationSetEventDestinationResponse>>;
}

class AccountSuspendedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AmazonResourceName = string;

class BadRequestException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type BehaviorOnMxFailure = string;

type BlacklistEntries = vec<BlacklistEntry>;

class BlacklistEntry {
  public BlacklistingDescription $description;
  public Timestamp $listing_time;
  public RblName $rbl_name;

  public function __construct(shape(
  ?'description' => BlacklistingDescription,
  ?'listing_time' => Timestamp,
  ?'rbl_name' => RblName,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->listing_time = $listing_time ?? 0;
    $this->rbl_name = $rbl_name ?? "";
  }
}

type BlacklistItemName = string;

type BlacklistItemNames = vec<BlacklistItemName>;

type BlacklistReport = dict<BlacklistItemName, BlacklistEntries>;

type BlacklistingDescription = string;

class Body {
  public Content $html;
  public Content $text;

  public function __construct(shape(
  ?'html' => Content,
  ?'text' => Content,
  ) $s = shape()) {
    $this->html = $html ?? null;
    $this->text = $text ?? null;
  }
}

type CampaignId = string;

type Charset = string;

class CloudWatchDestination {
  public CloudWatchDimensionConfigurations $dimension_configurations;

  public function __construct(shape(
  ?'dimension_configurations' => CloudWatchDimensionConfigurations,
  ) $s = shape()) {
    $this->dimension_configurations = $dimension_configurations ?? [];
  }
}

class CloudWatchDimensionConfiguration {
  public DefaultDimensionValue $default_dimension_value;
  public DimensionName $dimension_name;
  public DimensionValueSource $dimension_value_source;

  public function __construct(shape(
  ?'default_dimension_value' => DefaultDimensionValue,
  ?'dimension_name' => DimensionName,
  ?'dimension_value_source' => DimensionValueSource,
  ) $s = shape()) {
    $this->default_dimension_value = $default_dimension_value ?? "";
    $this->dimension_name = $dimension_name ?? "";
    $this->dimension_value_source = $dimension_value_source ?? "";
  }
}

type CloudWatchDimensionConfigurations = vec<CloudWatchDimensionConfiguration>;

class ConcurrentModificationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ConfigurationSetName = string;

type ConfigurationSetNameList = vec<ConfigurationSetName>;

class Content {
  public Charset $charset;
  public MessageData $data;

  public function __construct(shape(
  ?'charset' => Charset,
  ?'data' => MessageData,
  ) $s = shape()) {
    $this->charset = $charset ?? "";
    $this->data = $data ?? "";
  }
}

class CreateConfigurationSetEventDestinationRequest {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationDefinition $event_destination;
  public EventDestinationName $event_destination_name;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'event_destination' => EventDestinationDefinition,
  ?'event_destination_name' => EventDestinationName,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->event_destination = $event_destination ?? null;
    $this->event_destination_name = $event_destination_name ?? "";
  }
}

class CreateConfigurationSetEventDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateConfigurationSetRequest {
  public ConfigurationSetName $configuration_set_name;
  public DeliveryOptions $delivery_options;
  public ReputationOptions $reputation_options;
  public SendingOptions $sending_options;
  public SuppressionOptions $suppression_options;
  public TagList $tags;
  public TrackingOptions $tracking_options;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'delivery_options' => DeliveryOptions,
  ?'reputation_options' => ReputationOptions,
  ?'sending_options' => SendingOptions,
  ?'suppression_options' => SuppressionOptions,
  ?'tags' => TagList,
  ?'tracking_options' => TrackingOptions,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->delivery_options = $delivery_options ?? null;
    $this->reputation_options = $reputation_options ?? null;
    $this->sending_options = $sending_options ?? null;
    $this->suppression_options = $suppression_options ?? null;
    $this->tags = $tags ?? [];
    $this->tracking_options = $tracking_options ?? null;
  }
}

class CreateConfigurationSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateDedicatedIpPoolRequest {
  public PoolName $pool_name;
  public TagList $tags;

  public function __construct(shape(
  ?'pool_name' => PoolName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->pool_name = $pool_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateDedicatedIpPoolResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateDeliverabilityTestReportRequest {
  public EmailContent $content;
  public EmailAddress $from_email_address;
  public ReportName $report_name;
  public TagList $tags;

  public function __construct(shape(
  ?'content' => EmailContent,
  ?'from_email_address' => EmailAddress,
  ?'report_name' => ReportName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->content = $content ?? null;
    $this->from_email_address = $from_email_address ?? "";
    $this->report_name = $report_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateDeliverabilityTestReportResponse {
  public DeliverabilityTestStatus $deliverability_test_status;
  public ReportId $report_id;

  public function __construct(shape(
  ?'deliverability_test_status' => DeliverabilityTestStatus,
  ?'report_id' => ReportId,
  ) $s = shape()) {
    $this->deliverability_test_status = $deliverability_test_status ?? "";
    $this->report_id = $report_id ?? "";
  }
}

class CreateEmailIdentityRequest {
  public DkimSigningAttributes $dkim_signing_attributes;
  public Identity $email_identity;
  public TagList $tags;

  public function __construct(shape(
  ?'dkim_signing_attributes' => DkimSigningAttributes,
  ?'email_identity' => Identity,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->dkim_signing_attributes = $dkim_signing_attributes ?? null;
    $this->email_identity = $email_identity ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateEmailIdentityResponse {
  public DkimAttributes $dkim_attributes;
  public IdentityType $identity_type;
  public Enabled $verified_for_sending_status;

  public function __construct(shape(
  ?'dkim_attributes' => DkimAttributes,
  ?'identity_type' => IdentityType,
  ?'verified_for_sending_status' => Enabled,
  ) $s = shape()) {
    $this->dkim_attributes = $dkim_attributes ?? null;
    $this->identity_type = $identity_type ?? "";
    $this->verified_for_sending_status = $verified_for_sending_status ?? false;
  }
}

type CustomRedirectDomain = string;

class DailyVolume {
  public DomainIspPlacements $domain_isp_placements;
  public Timestamp $start_date;
  public VolumeStatistics $volume_statistics;

  public function __construct(shape(
  ?'domain_isp_placements' => DomainIspPlacements,
  ?'start_date' => Timestamp,
  ?'volume_statistics' => VolumeStatistics,
  ) $s = shape()) {
    $this->domain_isp_placements = $domain_isp_placements ?? [];
    $this->start_date = $start_date ?? 0;
    $this->volume_statistics = $volume_statistics ?? null;
  }
}

type DailyVolumes = vec<DailyVolume>;

class DedicatedIp {
  public Ip $ip;
  public PoolName $pool_name;
  public Percentage100Wrapper $warmup_percentage;
  public WarmupStatus $warmup_status;

  public function __construct(shape(
  ?'ip' => Ip,
  ?'pool_name' => PoolName,
  ?'warmup_percentage' => Percentage100Wrapper,
  ?'warmup_status' => WarmupStatus,
  ) $s = shape()) {
    $this->ip = $ip ?? "";
    $this->pool_name = $pool_name ?? "";
    $this->warmup_percentage = $warmup_percentage ?? 0;
    $this->warmup_status = $warmup_status ?? "";
  }
}

type DedicatedIpList = vec<DedicatedIp>;

type DefaultDimensionValue = string;

class DeleteConfigurationSetEventDestinationRequest {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationName $event_destination_name;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'event_destination_name' => EventDestinationName,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->event_destination_name = $event_destination_name ?? "";
  }
}

class DeleteConfigurationSetEventDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteConfigurationSetRequest {
  public ConfigurationSetName $configuration_set_name;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
  }
}

class DeleteConfigurationSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDedicatedIpPoolRequest {
  public PoolName $pool_name;

  public function __construct(shape(
  ?'pool_name' => PoolName,
  ) $s = shape()) {
    $this->pool_name = $pool_name ?? "";
  }
}

class DeleteDedicatedIpPoolResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteEmailIdentityRequest {
  public Identity $email_identity;

  public function __construct(shape(
  ?'email_identity' => Identity,
  ) $s = shape()) {
    $this->email_identity = $email_identity ?? "";
  }
}

class DeleteEmailIdentityResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSuppressedDestinationRequest {
  public EmailAddress $email_address;

  public function __construct(shape(
  ?'email_address' => EmailAddress,
  ) $s = shape()) {
    $this->email_address = $email_address ?? "";
  }
}

class DeleteSuppressedDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeliverabilityDashboardAccountStatus = string;

class DeliverabilityTestReport {
  public Timestamp $create_date;
  public DeliverabilityTestStatus $deliverability_test_status;
  public EmailAddress $from_email_address;
  public ReportId $report_id;
  public ReportName $report_name;
  public DeliverabilityTestSubject $subject;

  public function __construct(shape(
  ?'create_date' => Timestamp,
  ?'deliverability_test_status' => DeliverabilityTestStatus,
  ?'from_email_address' => EmailAddress,
  ?'report_id' => ReportId,
  ?'report_name' => ReportName,
  ?'subject' => DeliverabilityTestSubject,
  ) $s = shape()) {
    $this->create_date = $create_date ?? 0;
    $this->deliverability_test_status = $deliverability_test_status ?? "";
    $this->from_email_address = $from_email_address ?? "";
    $this->report_id = $report_id ?? "";
    $this->report_name = $report_name ?? "";
    $this->subject = $subject ?? "";
  }
}

type DeliverabilityTestReports = vec<DeliverabilityTestReport>;

type DeliverabilityTestStatus = string;

type DeliverabilityTestSubject = string;

class DeliveryOptions {
  public PoolName $sending_pool_name;
  public TlsPolicy $tls_policy;

  public function __construct(shape(
  ?'sending_pool_name' => PoolName,
  ?'tls_policy' => TlsPolicy,
  ) $s = shape()) {
    $this->sending_pool_name = $sending_pool_name ?? "";
    $this->tls_policy = $tls_policy ?? "";
  }
}

class Destination {
  public EmailAddressList $bcc_addresses;
  public EmailAddressList $cc_addresses;
  public EmailAddressList $to_addresses;

  public function __construct(shape(
  ?'bcc_addresses' => EmailAddressList,
  ?'cc_addresses' => EmailAddressList,
  ?'to_addresses' => EmailAddressList,
  ) $s = shape()) {
    $this->bcc_addresses = $bcc_addresses ?? [];
    $this->cc_addresses = $cc_addresses ?? [];
    $this->to_addresses = $to_addresses ?? [];
  }
}

type DimensionName = string;

type DimensionValueSource = string;

class DkimAttributes {
  public DkimSigningAttributesOrigin $signing_attributes_origin;
  public Enabled $signing_enabled;
  public DkimStatus $status;
  public DnsTokenList $tokens;

  public function __construct(shape(
  ?'signing_attributes_origin' => DkimSigningAttributesOrigin,
  ?'signing_enabled' => Enabled,
  ?'status' => DkimStatus,
  ?'tokens' => DnsTokenList,
  ) $s = shape()) {
    $this->signing_attributes_origin = $signing_attributes_origin ?? "";
    $this->signing_enabled = $signing_enabled ?? false;
    $this->status = $status ?? "";
    $this->tokens = $tokens ?? [];
  }
}

class DkimSigningAttributes {
  public PrivateKey $domain_signing_private_key;
  public Selector $domain_signing_selector;

  public function __construct(shape(
  ?'domain_signing_private_key' => PrivateKey,
  ?'domain_signing_selector' => Selector,
  ) $s = shape()) {
    $this->domain_signing_private_key = $domain_signing_private_key ?? "";
    $this->domain_signing_selector = $domain_signing_selector ?? "";
  }
}

type DkimSigningAttributesOrigin = string;

type DkimStatus = string;

type DnsToken = string;

type DnsTokenList = vec<DnsToken>;

type Domain = string;

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

  public function __construct(shape(
  ?'campaign_id' => CampaignId,
  ?'delete_rate' => Percentage,
  ?'esps' => Esps,
  ?'first_seen_date_time' => Timestamp,
  ?'from_address' => Identity,
  ?'image_url' => ImageUrl,
  ?'inbox_count' => Volume,
  ?'last_seen_date_time' => Timestamp,
  ?'projected_volume' => Volume,
  ?'read_delete_rate' => Percentage,
  ?'read_rate' => Percentage,
  ?'sending_ips' => IpList,
  ?'spam_count' => Volume,
  ?'subject' => Subject,
  ) $s = shape()) {
    $this->campaign_id = $campaign_id ?? "";
    $this->delete_rate = $delete_rate ?? 0.0;
    $this->esps = $esps ?? [];
    $this->first_seen_date_time = $first_seen_date_time ?? 0;
    $this->from_address = $from_address ?? "";
    $this->image_url = $image_url ?? "";
    $this->inbox_count = $inbox_count ?? 0;
    $this->last_seen_date_time = $last_seen_date_time ?? 0;
    $this->projected_volume = $projected_volume ?? 0;
    $this->read_delete_rate = $read_delete_rate ?? 0.0;
    $this->read_rate = $read_rate ?? 0.0;
    $this->sending_ips = $sending_ips ?? [];
    $this->spam_count = $spam_count ?? 0;
    $this->subject = $subject ?? "";
  }
}

type DomainDeliverabilityCampaignList = vec<DomainDeliverabilityCampaign>;

class DomainDeliverabilityTrackingOption {
  public Domain $domain;
  public InboxPlacementTrackingOption $inbox_placement_tracking_option;
  public Timestamp $subscription_start_date;

  public function __construct(shape(
  ?'domain' => Domain,
  ?'inbox_placement_tracking_option' => InboxPlacementTrackingOption,
  ?'subscription_start_date' => Timestamp,
  ) $s = shape()) {
    $this->domain = $domain ?? "";
    $this->inbox_placement_tracking_option = $inbox_placement_tracking_option ?? null;
    $this->subscription_start_date = $subscription_start_date ?? 0;
  }
}

type DomainDeliverabilityTrackingOptions = vec<DomainDeliverabilityTrackingOption>;

class DomainIspPlacement {
  public Percentage $inbox_percentage;
  public Volume $inbox_raw_count;
  public IspName $isp_name;
  public Percentage $spam_percentage;
  public Volume $spam_raw_count;

  public function __construct(shape(
  ?'inbox_percentage' => Percentage,
  ?'inbox_raw_count' => Volume,
  ?'isp_name' => IspName,
  ?'spam_percentage' => Percentage,
  ?'spam_raw_count' => Volume,
  ) $s = shape()) {
    $this->inbox_percentage = $inbox_percentage ?? 0.0;
    $this->inbox_raw_count = $inbox_raw_count ?? 0;
    $this->isp_name = $isp_name ?? "";
    $this->spam_percentage = $spam_percentage ?? 0.0;
    $this->spam_raw_count = $spam_raw_count ?? 0;
  }
}

type DomainIspPlacements = vec<DomainIspPlacement>;

type EmailAddress = string;

type EmailAddressList = vec<EmailAddress>;

class EmailContent {
  public RawMessage $raw;
  public Message $simple;
  public Template $template;

  public function __construct(shape(
  ?'raw' => RawMessage,
  ?'simple' => Message,
  ?'template' => Template,
  ) $s = shape()) {
    $this->raw = $raw ?? null;
    $this->simple = $simple ?? null;
    $this->template = $template ?? null;
  }
}

type Enabled = bool;

type Esp = string;

type Esps = vec<Esp>;

class EventDestination {
  public CloudWatchDestination $cloud_watch_destination;
  public Enabled $enabled;
  public KinesisFirehoseDestination $kinesis_firehose_destination;
  public EventTypes $matching_event_types;
  public EventDestinationName $name;
  public PinpointDestination $pinpoint_destination;
  public SnsDestination $sns_destination;

  public function __construct(shape(
  ?'cloud_watch_destination' => CloudWatchDestination,
  ?'enabled' => Enabled,
  ?'kinesis_firehose_destination' => KinesisFirehoseDestination,
  ?'matching_event_types' => EventTypes,
  ?'name' => EventDestinationName,
  ?'pinpoint_destination' => PinpointDestination,
  ?'sns_destination' => SnsDestination,
  ) $s = shape()) {
    $this->cloud_watch_destination = $cloud_watch_destination ?? null;
    $this->enabled = $enabled ?? false;
    $this->kinesis_firehose_destination = $kinesis_firehose_destination ?? null;
    $this->matching_event_types = $matching_event_types ?? [];
    $this->name = $name ?? "";
    $this->pinpoint_destination = $pinpoint_destination ?? null;
    $this->sns_destination = $sns_destination ?? null;
  }
}

class EventDestinationDefinition {
  public CloudWatchDestination $cloud_watch_destination;
  public Enabled $enabled;
  public KinesisFirehoseDestination $kinesis_firehose_destination;
  public EventTypes $matching_event_types;
  public PinpointDestination $pinpoint_destination;
  public SnsDestination $sns_destination;

  public function __construct(shape(
  ?'cloud_watch_destination' => CloudWatchDestination,
  ?'enabled' => Enabled,
  ?'kinesis_firehose_destination' => KinesisFirehoseDestination,
  ?'matching_event_types' => EventTypes,
  ?'pinpoint_destination' => PinpointDestination,
  ?'sns_destination' => SnsDestination,
  ) $s = shape()) {
    $this->cloud_watch_destination = $cloud_watch_destination ?? null;
    $this->enabled = $enabled ?? false;
    $this->kinesis_firehose_destination = $kinesis_firehose_destination ?? null;
    $this->matching_event_types = $matching_event_types ?? [];
    $this->pinpoint_destination = $pinpoint_destination ?? null;
    $this->sns_destination = $sns_destination ?? null;
  }
}

type EventDestinationName = string;

type EventDestinations = vec<EventDestination>;

type EventType = string;

type EventTypes = vec<EventType>;

type FeedbackId = string;

type GeneralEnforcementStatus = string;

class GetAccountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetAccountResponse {
  public Enabled $dedicated_ip_auto_warmup_enabled;
  public GeneralEnforcementStatus $enforcement_status;
  public Enabled $production_access_enabled;
  public SendQuota $send_quota;
  public Enabled $sending_enabled;
  public SuppressionAttributes $suppression_attributes;

  public function __construct(shape(
  ?'dedicated_ip_auto_warmup_enabled' => Enabled,
  ?'enforcement_status' => GeneralEnforcementStatus,
  ?'production_access_enabled' => Enabled,
  ?'send_quota' => SendQuota,
  ?'sending_enabled' => Enabled,
  ?'suppression_attributes' => SuppressionAttributes,
  ) $s = shape()) {
    $this->dedicated_ip_auto_warmup_enabled = $dedicated_ip_auto_warmup_enabled ?? false;
    $this->enforcement_status = $enforcement_status ?? "";
    $this->production_access_enabled = $production_access_enabled ?? false;
    $this->send_quota = $send_quota ?? null;
    $this->sending_enabled = $sending_enabled ?? false;
    $this->suppression_attributes = $suppression_attributes ?? null;
  }
}

class GetBlacklistReportsRequest {
  public BlacklistItemNames $blacklist_item_names;

  public function __construct(shape(
  ?'blacklist_item_names' => BlacklistItemNames,
  ) $s = shape()) {
    $this->blacklist_item_names = $blacklist_item_names ?? [];
  }
}

class GetBlacklistReportsResponse {
  public BlacklistReport $blacklist_report;

  public function __construct(shape(
  ?'blacklist_report' => BlacklistReport,
  ) $s = shape()) {
    $this->blacklist_report = $blacklist_report ?? [];
  }
}

class GetConfigurationSetEventDestinationsRequest {
  public ConfigurationSetName $configuration_set_name;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
  }
}

class GetConfigurationSetEventDestinationsResponse {
  public EventDestinations $event_destinations;

  public function __construct(shape(
  ?'event_destinations' => EventDestinations,
  ) $s = shape()) {
    $this->event_destinations = $event_destinations ?? [];
  }
}

class GetConfigurationSetRequest {
  public ConfigurationSetName $configuration_set_name;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
  }
}

class GetConfigurationSetResponse {
  public ConfigurationSetName $configuration_set_name;
  public DeliveryOptions $delivery_options;
  public ReputationOptions $reputation_options;
  public SendingOptions $sending_options;
  public SuppressionOptions $suppression_options;
  public TagList $tags;
  public TrackingOptions $tracking_options;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'delivery_options' => DeliveryOptions,
  ?'reputation_options' => ReputationOptions,
  ?'sending_options' => SendingOptions,
  ?'suppression_options' => SuppressionOptions,
  ?'tags' => TagList,
  ?'tracking_options' => TrackingOptions,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->delivery_options = $delivery_options ?? null;
    $this->reputation_options = $reputation_options ?? null;
    $this->sending_options = $sending_options ?? null;
    $this->suppression_options = $suppression_options ?? null;
    $this->tags = $tags ?? [];
    $this->tracking_options = $tracking_options ?? null;
  }
}

class GetDedicatedIpRequest {
  public Ip $ip;

  public function __construct(shape(
  ?'ip' => Ip,
  ) $s = shape()) {
    $this->ip = $ip ?? "";
  }
}

class GetDedicatedIpResponse {
  public DedicatedIp $dedicated_ip;

  public function __construct(shape(
  ?'dedicated_ip' => DedicatedIp,
  ) $s = shape()) {
    $this->dedicated_ip = $dedicated_ip ?? null;
  }
}

class GetDedicatedIpsRequest {
  public NextToken $next_token;
  public MaxItems $page_size;
  public PoolName $pool_name;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'page_size' => MaxItems,
  ?'pool_name' => PoolName,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->page_size = $page_size ?? 0;
    $this->pool_name = $pool_name ?? "";
  }
}

class GetDedicatedIpsResponse {
  public DedicatedIpList $dedicated_ips;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dedicated_ips' => DedicatedIpList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dedicated_ips = $dedicated_ips ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetDeliverabilityDashboardOptionsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetDeliverabilityDashboardOptionsResponse {
  public DeliverabilityDashboardAccountStatus $account_status;
  public DomainDeliverabilityTrackingOptions $active_subscribed_domains;
  public Enabled $dashboard_enabled;
  public DomainDeliverabilityTrackingOptions $pending_expiration_subscribed_domains;
  public Timestamp $subscription_expiry_date;

  public function __construct(shape(
  ?'account_status' => DeliverabilityDashboardAccountStatus,
  ?'active_subscribed_domains' => DomainDeliverabilityTrackingOptions,
  ?'dashboard_enabled' => Enabled,
  ?'pending_expiration_subscribed_domains' => DomainDeliverabilityTrackingOptions,
  ?'subscription_expiry_date' => Timestamp,
  ) $s = shape()) {
    $this->account_status = $account_status ?? "";
    $this->active_subscribed_domains = $active_subscribed_domains ?? [];
    $this->dashboard_enabled = $dashboard_enabled ?? false;
    $this->pending_expiration_subscribed_domains = $pending_expiration_subscribed_domains ?? [];
    $this->subscription_expiry_date = $subscription_expiry_date ?? 0;
  }
}

class GetDeliverabilityTestReportRequest {
  public ReportId $report_id;

  public function __construct(shape(
  ?'report_id' => ReportId,
  ) $s = shape()) {
    $this->report_id = $report_id ?? "";
  }
}

class GetDeliverabilityTestReportResponse {
  public DeliverabilityTestReport $deliverability_test_report;
  public IspPlacements $isp_placements;
  public MessageContent $message;
  public PlacementStatistics $overall_placement;
  public TagList $tags;

  public function __construct(shape(
  ?'deliverability_test_report' => DeliverabilityTestReport,
  ?'isp_placements' => IspPlacements,
  ?'message' => MessageContent,
  ?'overall_placement' => PlacementStatistics,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->deliverability_test_report = $deliverability_test_report ?? null;
    $this->isp_placements = $isp_placements ?? [];
    $this->message = $message ?? "";
    $this->overall_placement = $overall_placement ?? null;
    $this->tags = $tags ?? [];
  }
}

class GetDomainDeliverabilityCampaignRequest {
  public CampaignId $campaign_id;

  public function __construct(shape(
  ?'campaign_id' => CampaignId,
  ) $s = shape()) {
    $this->campaign_id = $campaign_id ?? "";
  }
}

class GetDomainDeliverabilityCampaignResponse {
  public DomainDeliverabilityCampaign $domain_deliverability_campaign;

  public function __construct(shape(
  ?'domain_deliverability_campaign' => DomainDeliverabilityCampaign,
  ) $s = shape()) {
    $this->domain_deliverability_campaign = $domain_deliverability_campaign ?? null;
  }
}

class GetDomainStatisticsReportRequest {
  public Identity $domain;
  public Timestamp $end_date;
  public Timestamp $start_date;

  public function __construct(shape(
  ?'domain' => Identity,
  ?'end_date' => Timestamp,
  ?'start_date' => Timestamp,
  ) $s = shape()) {
    $this->domain = $domain ?? "";
    $this->end_date = $end_date ?? 0;
    $this->start_date = $start_date ?? 0;
  }
}

class GetDomainStatisticsReportResponse {
  public DailyVolumes $daily_volumes;
  public OverallVolume $overall_volume;

  public function __construct(shape(
  ?'daily_volumes' => DailyVolumes,
  ?'overall_volume' => OverallVolume,
  ) $s = shape()) {
    $this->daily_volumes = $daily_volumes ?? [];
    $this->overall_volume = $overall_volume ?? null;
  }
}

class GetEmailIdentityRequest {
  public Identity $email_identity;

  public function __construct(shape(
  ?'email_identity' => Identity,
  ) $s = shape()) {
    $this->email_identity = $email_identity ?? "";
  }
}

class GetEmailIdentityResponse {
  public DkimAttributes $dkim_attributes;
  public Enabled $feedback_forwarding_status;
  public IdentityType $identity_type;
  public MailFromAttributes $mail_from_attributes;
  public TagList $tags;
  public Enabled $verified_for_sending_status;

  public function __construct(shape(
  ?'dkim_attributes' => DkimAttributes,
  ?'feedback_forwarding_status' => Enabled,
  ?'identity_type' => IdentityType,
  ?'mail_from_attributes' => MailFromAttributes,
  ?'tags' => TagList,
  ?'verified_for_sending_status' => Enabled,
  ) $s = shape()) {
    $this->dkim_attributes = $dkim_attributes ?? null;
    $this->feedback_forwarding_status = $feedback_forwarding_status ?? false;
    $this->identity_type = $identity_type ?? "";
    $this->mail_from_attributes = $mail_from_attributes ?? null;
    $this->tags = $tags ?? [];
    $this->verified_for_sending_status = $verified_for_sending_status ?? false;
  }
}

class GetSuppressedDestinationRequest {
  public EmailAddress $email_address;

  public function __construct(shape(
  ?'email_address' => EmailAddress,
  ) $s = shape()) {
    $this->email_address = $email_address ?? "";
  }
}

class GetSuppressedDestinationResponse {
  public SuppressedDestination $suppressed_destination;

  public function __construct(shape(
  ?'suppressed_destination' => SuppressedDestination,
  ) $s = shape()) {
    $this->suppressed_destination = $suppressed_destination ?? null;
  }
}

type Identity = string;

class IdentityInfo {
  public Identity $identity_name;
  public IdentityType $identity_type;
  public Enabled $sending_enabled;

  public function __construct(shape(
  ?'identity_name' => Identity,
  ?'identity_type' => IdentityType,
  ?'sending_enabled' => Enabled,
  ) $s = shape()) {
    $this->identity_name = $identity_name ?? "";
    $this->identity_type = $identity_type ?? "";
    $this->sending_enabled = $sending_enabled ?? false;
  }
}

type IdentityInfoList = vec<IdentityInfo>;

type IdentityType = string;

type ImageUrl = string;

class InboxPlacementTrackingOption {
  public Enabled $global;
  public IspNameList $tracked_isps;

  public function __construct(shape(
  ?'global' => Enabled,
  ?'tracked_isps' => IspNameList,
  ) $s = shape()) {
    $this->global = $global ?? false;
    $this->tracked_isps = $tracked_isps ?? [];
  }
}

class InvalidNextTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Ip = string;

type IpList = vec<Ip>;

type IspName = string;

type IspNameList = vec<IspName>;

class IspPlacement {
  public IspName $isp_name;
  public PlacementStatistics $placement_statistics;

  public function __construct(shape(
  ?'isp_name' => IspName,
  ?'placement_statistics' => PlacementStatistics,
  ) $s = shape()) {
    $this->isp_name = $isp_name ?? "";
    $this->placement_statistics = $placement_statistics ?? null;
  }
}

type IspPlacements = vec<IspPlacement>;

class KinesisFirehoseDestination {
  public AmazonResourceName $delivery_stream_arn;
  public AmazonResourceName $iam_role_arn;

  public function __construct(shape(
  ?'delivery_stream_arn' => AmazonResourceName,
  ?'iam_role_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->delivery_stream_arn = $delivery_stream_arn ?? "";
    $this->iam_role_arn = $iam_role_arn ?? "";
  }
}

type LastFreshStart = int;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListConfigurationSetsRequest {
  public NextToken $next_token;
  public MaxItems $page_size;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'page_size' => MaxItems,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->page_size = $page_size ?? 0;
  }
}

class ListConfigurationSetsResponse {
  public ConfigurationSetNameList $configuration_sets;
  public NextToken $next_token;

  public function __construct(shape(
  ?'configuration_sets' => ConfigurationSetNameList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->configuration_sets = $configuration_sets ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDedicatedIpPoolsRequest {
  public NextToken $next_token;
  public MaxItems $page_size;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'page_size' => MaxItems,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->page_size = $page_size ?? 0;
  }
}

class ListDedicatedIpPoolsResponse {
  public ListOfDedicatedIpPools $dedicated_ip_pools;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dedicated_ip_pools' => ListOfDedicatedIpPools,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dedicated_ip_pools = $dedicated_ip_pools ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDeliverabilityTestReportsRequest {
  public NextToken $next_token;
  public MaxItems $page_size;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'page_size' => MaxItems,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->page_size = $page_size ?? 0;
  }
}

class ListDeliverabilityTestReportsResponse {
  public DeliverabilityTestReports $deliverability_test_reports;
  public NextToken $next_token;

  public function __construct(shape(
  ?'deliverability_test_reports' => DeliverabilityTestReports,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->deliverability_test_reports = $deliverability_test_reports ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDomainDeliverabilityCampaignsRequest {
  public Timestamp $end_date;
  public NextToken $next_token;
  public MaxItems $page_size;
  public Timestamp $start_date;
  public Domain $subscribed_domain;

  public function __construct(shape(
  ?'end_date' => Timestamp,
  ?'next_token' => NextToken,
  ?'page_size' => MaxItems,
  ?'start_date' => Timestamp,
  ?'subscribed_domain' => Domain,
  ) $s = shape()) {
    $this->end_date = $end_date ?? 0;
    $this->next_token = $next_token ?? "";
    $this->page_size = $page_size ?? 0;
    $this->start_date = $start_date ?? 0;
    $this->subscribed_domain = $subscribed_domain ?? "";
  }
}

class ListDomainDeliverabilityCampaignsResponse {
  public DomainDeliverabilityCampaignList $domain_deliverability_campaigns;
  public NextToken $next_token;

  public function __construct(shape(
  ?'domain_deliverability_campaigns' => DomainDeliverabilityCampaignList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->domain_deliverability_campaigns = $domain_deliverability_campaigns ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListEmailIdentitiesRequest {
  public NextToken $next_token;
  public MaxItems $page_size;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'page_size' => MaxItems,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->page_size = $page_size ?? 0;
  }
}

class ListEmailIdentitiesResponse {
  public IdentityInfoList $email_identities;
  public NextToken $next_token;

  public function __construct(shape(
  ?'email_identities' => IdentityInfoList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->email_identities = $email_identities ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type ListOfDedicatedIpPools = vec<PoolName>;

class ListSuppressedDestinationsRequest {
  public Timestamp $end_date;
  public NextToken $next_token;
  public MaxItems $page_size;
  public SuppressionListReasons $reasons;
  public Timestamp $start_date;

  public function __construct(shape(
  ?'end_date' => Timestamp,
  ?'next_token' => NextToken,
  ?'page_size' => MaxItems,
  ?'reasons' => SuppressionListReasons,
  ?'start_date' => Timestamp,
  ) $s = shape()) {
    $this->end_date = $end_date ?? 0;
    $this->next_token = $next_token ?? "";
    $this->page_size = $page_size ?? 0;
    $this->reasons = $reasons ?? [];
    $this->start_date = $start_date ?? 0;
  }
}

class ListSuppressedDestinationsResponse {
  public NextToken $next_token;
  public SuppressedDestinationSummaries $suppressed_destination_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'suppressed_destination_summaries' => SuppressedDestinationSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->suppressed_destination_summaries = $suppressed_destination_summaries ?? [];
  }
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class MailFromAttributes {
  public BehaviorOnMxFailure $behavior_on_mx_failure;
  public MailFromDomainName $mail_from_domain;
  public MailFromDomainStatus $mail_from_domain_status;

  public function __construct(shape(
  ?'behavior_on_mx_failure' => BehaviorOnMxFailure,
  ?'mail_from_domain' => MailFromDomainName,
  ?'mail_from_domain_status' => MailFromDomainStatus,
  ) $s = shape()) {
    $this->behavior_on_mx_failure = $behavior_on_mx_failure ?? "";
    $this->mail_from_domain = $mail_from_domain ?? "";
    $this->mail_from_domain_status = $mail_from_domain_status ?? "";
  }
}

type MailFromDomainName = string;

class MailFromDomainNotVerifiedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type MailFromDomainStatus = string;

type Max24HourSend = float;

type MaxItems = int;

type MaxSendRate = float;

class Message {
  public Body $body;
  public Content $subject;

  public function __construct(shape(
  ?'body' => Body,
  ?'subject' => Content,
  ) $s = shape()) {
    $this->body = $body ?? null;
    $this->subject = $subject ?? null;
  }
}

type MessageContent = string;

type MessageData = string;

class MessageRejected {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MessageTag {
  public MessageTagName $name;
  public MessageTagValue $value;

  public function __construct(shape(
  ?'name' => MessageTagName,
  ?'value' => MessageTagValue,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type MessageTagList = vec<MessageTag>;

type MessageTagName = string;

type MessageTagValue = string;

type NextToken = string;

class NotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type OutboundMessageId = string;

class OverallVolume {
  public DomainIspPlacements $domain_isp_placements;
  public Percentage $read_rate_percent;
  public VolumeStatistics $volume_statistics;

  public function __construct(shape(
  ?'domain_isp_placements' => DomainIspPlacements,
  ?'read_rate_percent' => Percentage,
  ?'volume_statistics' => VolumeStatistics,
  ) $s = shape()) {
    $this->domain_isp_placements = $domain_isp_placements ?? [];
    $this->read_rate_percent = $read_rate_percent ?? 0.0;
    $this->volume_statistics = $volume_statistics ?? null;
  }
}

type Percentage = float;

type Percentage100Wrapper = int;

class PinpointDestination {
  public AmazonResourceName $application_arn;

  public function __construct(shape(
  ?'application_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->application_arn = $application_arn ?? "";
  }
}

class PlacementStatistics {
  public Percentage $dkim_percentage;
  public Percentage $inbox_percentage;
  public Percentage $missing_percentage;
  public Percentage $spam_percentage;
  public Percentage $spf_percentage;

  public function __construct(shape(
  ?'dkim_percentage' => Percentage,
  ?'inbox_percentage' => Percentage,
  ?'missing_percentage' => Percentage,
  ?'spam_percentage' => Percentage,
  ?'spf_percentage' => Percentage,
  ) $s = shape()) {
    $this->dkim_percentage = $dkim_percentage ?? 0.0;
    $this->inbox_percentage = $inbox_percentage ?? 0.0;
    $this->missing_percentage = $missing_percentage ?? 0.0;
    $this->spam_percentage = $spam_percentage ?? 0.0;
    $this->spf_percentage = $spf_percentage ?? 0.0;
  }
}

type PoolName = string;

type PrivateKey = string;

class PutAccountDedicatedIpWarmupAttributesRequest {
  public Enabled $auto_warmup_enabled;

  public function __construct(shape(
  ?'auto_warmup_enabled' => Enabled,
  ) $s = shape()) {
    $this->auto_warmup_enabled = $auto_warmup_enabled ?? false;
  }
}

class PutAccountDedicatedIpWarmupAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutAccountSendingAttributesRequest {
  public Enabled $sending_enabled;

  public function __construct(shape(
  ?'sending_enabled' => Enabled,
  ) $s = shape()) {
    $this->sending_enabled = $sending_enabled ?? false;
  }
}

class PutAccountSendingAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutAccountSuppressionAttributesRequest {
  public SuppressionListReasons $suppressed_reasons;

  public function __construct(shape(
  ?'suppressed_reasons' => SuppressionListReasons,
  ) $s = shape()) {
    $this->suppressed_reasons = $suppressed_reasons ?? [];
  }
}

class PutAccountSuppressionAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutConfigurationSetDeliveryOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public SendingPoolName $sending_pool_name;
  public TlsPolicy $tls_policy;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'sending_pool_name' => SendingPoolName,
  ?'tls_policy' => TlsPolicy,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->sending_pool_name = $sending_pool_name ?? "";
    $this->tls_policy = $tls_policy ?? "";
  }
}

class PutConfigurationSetDeliveryOptionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutConfigurationSetReputationOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public Enabled $reputation_metrics_enabled;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'reputation_metrics_enabled' => Enabled,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->reputation_metrics_enabled = $reputation_metrics_enabled ?? false;
  }
}

class PutConfigurationSetReputationOptionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutConfigurationSetSendingOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public Enabled $sending_enabled;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'sending_enabled' => Enabled,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->sending_enabled = $sending_enabled ?? false;
  }
}

class PutConfigurationSetSendingOptionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutConfigurationSetSuppressionOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public SuppressionListReasons $suppressed_reasons;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'suppressed_reasons' => SuppressionListReasons,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->suppressed_reasons = $suppressed_reasons ?? [];
  }
}

class PutConfigurationSetSuppressionOptionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutConfigurationSetTrackingOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public CustomRedirectDomain $custom_redirect_domain;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'custom_redirect_domain' => CustomRedirectDomain,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->custom_redirect_domain = $custom_redirect_domain ?? "";
  }
}

class PutConfigurationSetTrackingOptionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutDedicatedIpInPoolRequest {
  public PoolName $destination_pool_name;
  public Ip $ip;

  public function __construct(shape(
  ?'destination_pool_name' => PoolName,
  ?'ip' => Ip,
  ) $s = shape()) {
    $this->destination_pool_name = $destination_pool_name ?? "";
    $this->ip = $ip ?? "";
  }
}

class PutDedicatedIpInPoolResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutDedicatedIpWarmupAttributesRequest {
  public Ip $ip;
  public Percentage100Wrapper $warmup_percentage;

  public function __construct(shape(
  ?'ip' => Ip,
  ?'warmup_percentage' => Percentage100Wrapper,
  ) $s = shape()) {
    $this->ip = $ip ?? "";
    $this->warmup_percentage = $warmup_percentage ?? 0;
  }
}

class PutDedicatedIpWarmupAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutDeliverabilityDashboardOptionRequest {
  public Enabled $dashboard_enabled;
  public DomainDeliverabilityTrackingOptions $subscribed_domains;

  public function __construct(shape(
  ?'dashboard_enabled' => Enabled,
  ?'subscribed_domains' => DomainDeliverabilityTrackingOptions,
  ) $s = shape()) {
    $this->dashboard_enabled = $dashboard_enabled ?? false;
    $this->subscribed_domains = $subscribed_domains ?? [];
  }
}

class PutDeliverabilityDashboardOptionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutEmailIdentityDkimAttributesRequest {
  public Identity $email_identity;
  public Enabled $signing_enabled;

  public function __construct(shape(
  ?'email_identity' => Identity,
  ?'signing_enabled' => Enabled,
  ) $s = shape()) {
    $this->email_identity = $email_identity ?? "";
    $this->signing_enabled = $signing_enabled ?? false;
  }
}

class PutEmailIdentityDkimAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutEmailIdentityDkimSigningAttributesRequest {
  public Identity $email_identity;
  public DkimSigningAttributes $signing_attributes;
  public DkimSigningAttributesOrigin $signing_attributes_origin;

  public function __construct(shape(
  ?'email_identity' => Identity,
  ?'signing_attributes' => DkimSigningAttributes,
  ?'signing_attributes_origin' => DkimSigningAttributesOrigin,
  ) $s = shape()) {
    $this->email_identity = $email_identity ?? "";
    $this->signing_attributes = $signing_attributes ?? null;
    $this->signing_attributes_origin = $signing_attributes_origin ?? "";
  }
}

class PutEmailIdentityDkimSigningAttributesResponse {
  public DkimStatus $dkim_status;
  public DnsTokenList $dkim_tokens;

  public function __construct(shape(
  ?'dkim_status' => DkimStatus,
  ?'dkim_tokens' => DnsTokenList,
  ) $s = shape()) {
    $this->dkim_status = $dkim_status ?? "";
    $this->dkim_tokens = $dkim_tokens ?? [];
  }
}

class PutEmailIdentityFeedbackAttributesRequest {
  public Enabled $email_forwarding_enabled;
  public Identity $email_identity;

  public function __construct(shape(
  ?'email_forwarding_enabled' => Enabled,
  ?'email_identity' => Identity,
  ) $s = shape()) {
    $this->email_forwarding_enabled = $email_forwarding_enabled ?? false;
    $this->email_identity = $email_identity ?? "";
  }
}

class PutEmailIdentityFeedbackAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutEmailIdentityMailFromAttributesRequest {
  public BehaviorOnMxFailure $behavior_on_mx_failure;
  public Identity $email_identity;
  public MailFromDomainName $mail_from_domain;

  public function __construct(shape(
  ?'behavior_on_mx_failure' => BehaviorOnMxFailure,
  ?'email_identity' => Identity,
  ?'mail_from_domain' => MailFromDomainName,
  ) $s = shape()) {
    $this->behavior_on_mx_failure = $behavior_on_mx_failure ?? "";
    $this->email_identity = $email_identity ?? "";
    $this->mail_from_domain = $mail_from_domain ?? "";
  }
}

class PutEmailIdentityMailFromAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutSuppressedDestinationRequest {
  public EmailAddress $email_address;
  public SuppressionListReason $reason;

  public function __construct(shape(
  ?'email_address' => EmailAddress,
  ?'reason' => SuppressionListReason,
  ) $s = shape()) {
    $this->email_address = $email_address ?? "";
    $this->reason = $reason ?? "";
  }
}

class PutSuppressedDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RawMessage {
  public RawMessageData $data;

  public function __construct(shape(
  ?'data' => RawMessageData,
  ) $s = shape()) {
    $this->data = $data ?? "";
  }
}

type RawMessageData = string;

type RblName = string;

type ReportId = string;

type ReportName = string;

class ReputationOptions {
  public LastFreshStart $last_fresh_start;
  public Enabled $reputation_metrics_enabled;

  public function __construct(shape(
  ?'last_fresh_start' => LastFreshStart,
  ?'reputation_metrics_enabled' => Enabled,
  ) $s = shape()) {
    $this->last_fresh_start = $last_fresh_start ?? 0;
    $this->reputation_metrics_enabled = $reputation_metrics_enabled ?? false;
  }
}

type Selector = string;

class SendEmailRequest {
  public ConfigurationSetName $configuration_set_name;
  public EmailContent $content;
  public Destination $destination;
  public MessageTagList $email_tags;
  public EmailAddress $feedback_forwarding_email_address;
  public EmailAddress $from_email_address;
  public EmailAddressList $reply_to_addresses;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'content' => EmailContent,
  ?'destination' => Destination,
  ?'email_tags' => MessageTagList,
  ?'feedback_forwarding_email_address' => EmailAddress,
  ?'from_email_address' => EmailAddress,
  ?'reply_to_addresses' => EmailAddressList,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->content = $content ?? null;
    $this->destination = $destination ?? null;
    $this->email_tags = $email_tags ?? [];
    $this->feedback_forwarding_email_address = $feedback_forwarding_email_address ?? "";
    $this->from_email_address = $from_email_address ?? "";
    $this->reply_to_addresses = $reply_to_addresses ?? [];
  }
}

class SendEmailResponse {
  public OutboundMessageId $message_id;

  public function __construct(shape(
  ?'message_id' => OutboundMessageId,
  ) $s = shape()) {
    $this->message_id = $message_id ?? "";
  }
}

class SendQuota {
  public Max24HourSend $max_24_hour_send;
  public MaxSendRate $max_send_rate;
  public SentLast24Hours $sent_last_24_hours;

  public function __construct(shape(
  ?'max_24_hour_send' => Max24HourSend,
  ?'max_send_rate' => MaxSendRate,
  ?'sent_last_24_hours' => SentLast24Hours,
  ) $s = shape()) {
    $this->max_24_hour_send = $max_24_hour_send ?? 0.0;
    $this->max_send_rate = $max_send_rate ?? 0.0;
    $this->sent_last_24_hours = $sent_last_24_hours ?? 0.0;
  }
}

class SendingOptions {
  public Enabled $sending_enabled;

  public function __construct(shape(
  ?'sending_enabled' => Enabled,
  ) $s = shape()) {
    $this->sending_enabled = $sending_enabled ?? false;
  }
}

class SendingPausedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SendingPoolName = string;

type SentLast24Hours = float;

class SnsDestination {
  public AmazonResourceName $topic_arn;

  public function __construct(shape(
  ?'topic_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->topic_arn = $topic_arn ?? "";
  }
}

type Subject = string;

class SuppressedDestination {
  public SuppressedDestinationAttributes $attributes;
  public EmailAddress $email_address;
  public Timestamp $last_update_time;
  public SuppressionListReason $reason;

  public function __construct(shape(
  ?'attributes' => SuppressedDestinationAttributes,
  ?'email_address' => EmailAddress,
  ?'last_update_time' => Timestamp,
  ?'reason' => SuppressionListReason,
  ) $s = shape()) {
    $this->attributes = $attributes ?? null;
    $this->email_address = $email_address ?? "";
    $this->last_update_time = $last_update_time ?? 0;
    $this->reason = $reason ?? "";
  }
}

class SuppressedDestinationAttributes {
  public FeedbackId $feedback_id;
  public OutboundMessageId $message_id;

  public function __construct(shape(
  ?'feedback_id' => FeedbackId,
  ?'message_id' => OutboundMessageId,
  ) $s = shape()) {
    $this->feedback_id = $feedback_id ?? "";
    $this->message_id = $message_id ?? "";
  }
}

type SuppressedDestinationSummaries = vec<SuppressedDestinationSummary>;

class SuppressedDestinationSummary {
  public EmailAddress $email_address;
  public Timestamp $last_update_time;
  public SuppressionListReason $reason;

  public function __construct(shape(
  ?'email_address' => EmailAddress,
  ?'last_update_time' => Timestamp,
  ?'reason' => SuppressionListReason,
  ) $s = shape()) {
    $this->email_address = $email_address ?? "";
    $this->last_update_time = $last_update_time ?? 0;
    $this->reason = $reason ?? "";
  }
}

class SuppressionAttributes {
  public SuppressionListReasons $suppressed_reasons;

  public function __construct(shape(
  ?'suppressed_reasons' => SuppressionListReasons,
  ) $s = shape()) {
    $this->suppressed_reasons = $suppressed_reasons ?? [];
  }
}

type SuppressionListReason = string;

type SuppressionListReasons = vec<SuppressionListReason>;

class SuppressionOptions {
  public SuppressionListReasons $suppressed_reasons;

  public function __construct(shape(
  ?'suppressed_reasons' => SuppressionListReasons,
  ) $s = shape()) {
    $this->suppressed_reasons = $suppressed_reasons ?? [];
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class Template {
  public TemplateArn $template_arn;
  public TemplateData $template_data;

  public function __construct(shape(
  ?'template_arn' => TemplateArn,
  ?'template_data' => TemplateData,
  ) $s = shape()) {
    $this->template_arn = $template_arn ?? "";
    $this->template_data = $template_data ?? "";
  }
}

type TemplateArn = string;

type TemplateData = string;

type Timestamp = int;

type TlsPolicy = string;

class TooManyRequestsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TrackingOptions {
  public CustomRedirectDomain $custom_redirect_domain;

  public function __construct(shape(
  ?'custom_redirect_domain' => CustomRedirectDomain,
  ) $s = shape()) {
    $this->custom_redirect_domain = $custom_redirect_domain ?? "";
  }
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateConfigurationSetEventDestinationRequest {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationDefinition $event_destination;
  public EventDestinationName $event_destination_name;

  public function __construct(shape(
  ?'configuration_set_name' => ConfigurationSetName,
  ?'event_destination' => EventDestinationDefinition,
  ?'event_destination_name' => EventDestinationName,
  ) $s = shape()) {
    $this->configuration_set_name = $configuration_set_name ?? "";
    $this->event_destination = $event_destination ?? null;
    $this->event_destination_name = $event_destination_name ?? "";
  }
}

class UpdateConfigurationSetEventDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Volume = int;

class VolumeStatistics {
  public Volume $inbox_raw_count;
  public Volume $projected_inbox;
  public Volume $projected_spam;
  public Volume $spam_raw_count;

  public function __construct(shape(
  ?'inbox_raw_count' => Volume,
  ?'projected_inbox' => Volume,
  ?'projected_spam' => Volume,
  ?'spam_raw_count' => Volume,
  ) $s = shape()) {
    $this->inbox_raw_count = $inbox_raw_count ?? 0;
    $this->projected_inbox = $projected_inbox ?? 0;
    $this->projected_spam = $projected_spam ?? 0;
    $this->spam_raw_count = $spam_raw_count ?? 0;
  }
}

type WarmupStatus = string;

