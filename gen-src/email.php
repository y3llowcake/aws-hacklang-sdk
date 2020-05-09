<?hh // strict
namespace slack\aws\email;

interface SES {
  public function DeleteConfigurationSetTrackingOptions(DeleteConfigurationSetTrackingOptionsRequest) Awaitable<Errors\Result<DeleteConfigurationSetTrackingOptionsResponse>>;
  public function DeleteCustomVerificationEmailTemplate(DeleteCustomVerificationEmailTemplateRequest) Awaitable<Errors\Error>;
  public function DescribeActiveReceiptRuleSet(DescribeActiveReceiptRuleSetRequest) Awaitable<Errors\Result<DescribeActiveReceiptRuleSetResponse>>;
  public function GetIdentityVerificationAttributes(GetIdentityVerificationAttributesRequest) Awaitable<Errors\Result<GetIdentityVerificationAttributesResponse>>;
  public function PutIdentityPolicy(PutIdentityPolicyRequest) Awaitable<Errors\Result<PutIdentityPolicyResponse>>;
  public function SendRawEmail(SendRawEmailRequest) Awaitable<Errors\Result<SendRawEmailResponse>>;
  public function VerifyEmailAddress(VerifyEmailAddressRequest) Awaitable<Errors\Error>;
  public function DeleteConfigurationSetEventDestination(DeleteConfigurationSetEventDestinationRequest) Awaitable<Errors\Result<DeleteConfigurationSetEventDestinationResponse>>;
  public function UpdateConfigurationSetSendingEnabled(UpdateConfigurationSetSendingEnabledRequest) Awaitable<Errors\Error>;
  public function UpdateConfigurationSetTrackingOptions(UpdateConfigurationSetTrackingOptionsRequest) Awaitable<Errors\Result<UpdateConfigurationSetTrackingOptionsResponse>>;
  public function UpdateConfigurationSetReputationMetricsEnabled(UpdateConfigurationSetReputationMetricsEnabledRequest) Awaitable<Errors\Error>;
  public function GetTemplate(GetTemplateRequest) Awaitable<Errors\Result<GetTemplateResponse>>;
  public function ListReceiptRuleSets(ListReceiptRuleSetsRequest) Awaitable<Errors\Result<ListReceiptRuleSetsResponse>>;
  public function SetIdentityFeedbackForwardingEnabled(SetIdentityFeedbackForwardingEnabledRequest) Awaitable<Errors\Result<SetIdentityFeedbackForwardingEnabledResponse>>;
  public function GetAccountSendingEnabled() Awaitable<Errors\Result<GetAccountSendingEnabledResponse>>;
  public function GetIdentityMailFromDomainAttributes(GetIdentityMailFromDomainAttributesRequest) Awaitable<Errors\Result<GetIdentityMailFromDomainAttributesResponse>>;
  public function DeleteVerifiedEmailAddress(DeleteVerifiedEmailAddressRequest) Awaitable<Errors\Error>;
  public function GetSendStatistics() Awaitable<Errors\Result<GetSendStatisticsResponse>>;
  public function SetIdentityMailFromDomain(SetIdentityMailFromDomainRequest) Awaitable<Errors\Result<SetIdentityMailFromDomainResponse>>;
  public function UpdateConfigurationSetEventDestination(UpdateConfigurationSetEventDestinationRequest) Awaitable<Errors\Result<UpdateConfigurationSetEventDestinationResponse>>;
  public function UpdateReceiptRule(UpdateReceiptRuleRequest) Awaitable<Errors\Result<UpdateReceiptRuleResponse>>;
  public function UpdateTemplate(UpdateTemplateRequest) Awaitable<Errors\Result<UpdateTemplateResponse>>;
  public function DeleteReceiptFilter(DeleteReceiptFilterRequest) Awaitable<Errors\Result<DeleteReceiptFilterResponse>>;
  public function ListTemplates(ListTemplatesRequest) Awaitable<Errors\Result<ListTemplatesResponse>>;
  public function SendBounce(SendBounceRequest) Awaitable<Errors\Result<SendBounceResponse>>;
  public function SetReceiptRulePosition(SetReceiptRulePositionRequest) Awaitable<Errors\Result<SetReceiptRulePositionResponse>>;
  public function GetIdentityDkimAttributes(GetIdentityDkimAttributesRequest) Awaitable<Errors\Result<GetIdentityDkimAttributesResponse>>;
  public function SetIdentityNotificationTopic(SetIdentityNotificationTopicRequest) Awaitable<Errors\Result<SetIdentityNotificationTopicResponse>>;
  public function CreateCustomVerificationEmailTemplate(CreateCustomVerificationEmailTemplateRequest) Awaitable<Errors\Error>;
  public function DeleteTemplate(DeleteTemplateRequest) Awaitable<Errors\Result<DeleteTemplateResponse>>;
  public function DescribeReceiptRule(DescribeReceiptRuleRequest) Awaitable<Errors\Result<DescribeReceiptRuleResponse>>;
  public function ListConfigurationSets(ListConfigurationSetsRequest) Awaitable<Errors\Result<ListConfigurationSetsResponse>>;
  public function ListCustomVerificationEmailTemplates(ListCustomVerificationEmailTemplatesRequest) Awaitable<Errors\Result<ListCustomVerificationEmailTemplatesResponse>>;
  public function SendBulkTemplatedEmail(SendBulkTemplatedEmailRequest) Awaitable<Errors\Result<SendBulkTemplatedEmailResponse>>;
  public function VerifyEmailIdentity(VerifyEmailIdentityRequest) Awaitable<Errors\Result<VerifyEmailIdentityResponse>>;
  public function DeleteIdentity(DeleteIdentityRequest) Awaitable<Errors\Result<DeleteIdentityResponse>>;
  public function ListIdentityPolicies(ListIdentityPoliciesRequest) Awaitable<Errors\Result<ListIdentityPoliciesResponse>>;
  public function TestRenderTemplate(TestRenderTemplateRequest) Awaitable<Errors\Result<TestRenderTemplateResponse>>;
  public function DeleteIdentityPolicy(DeleteIdentityPolicyRequest) Awaitable<Errors\Result<DeleteIdentityPolicyResponse>>;
  public function DescribeConfigurationSet(DescribeConfigurationSetRequest) Awaitable<Errors\Result<DescribeConfigurationSetResponse>>;
  public function GetSendQuota() Awaitable<Errors\Result<GetSendQuotaResponse>>;
  public function ListVerifiedEmailAddresses() Awaitable<Errors\Result<ListVerifiedEmailAddressesResponse>>;
  public function ReorderReceiptRuleSet(ReorderReceiptRuleSetRequest) Awaitable<Errors\Result<ReorderReceiptRuleSetResponse>>;
  public function CreateConfigurationSetEventDestination(CreateConfigurationSetEventDestinationRequest) Awaitable<Errors\Result<CreateConfigurationSetEventDestinationResponse>>;
  public function DeleteConfigurationSet(DeleteConfigurationSetRequest) Awaitable<Errors\Result<DeleteConfigurationSetResponse>>;
  public function DeleteReceiptRule(DeleteReceiptRuleRequest) Awaitable<Errors\Result<DeleteReceiptRuleResponse>>;
  public function SetIdentityDkimEnabled(SetIdentityDkimEnabledRequest) Awaitable<Errors\Result<SetIdentityDkimEnabledResponse>>;
  public function UpdateAccountSendingEnabled(UpdateAccountSendingEnabledRequest) Awaitable<Errors\Error>;
  public function CreateConfigurationSet(CreateConfigurationSetRequest) Awaitable<Errors\Result<CreateConfigurationSetResponse>>;
  public function SendEmail(SendEmailRequest) Awaitable<Errors\Result<SendEmailResponse>>;
  public function UpdateCustomVerificationEmailTemplate(UpdateCustomVerificationEmailTemplateRequest) Awaitable<Errors\Error>;
  public function VerifyDomainDkim(VerifyDomainDkimRequest) Awaitable<Errors\Result<VerifyDomainDkimResponse>>;
  public function DeleteReceiptRuleSet(DeleteReceiptRuleSetRequest) Awaitable<Errors\Result<DeleteReceiptRuleSetResponse>>;
  public function CreateReceiptFilter(CreateReceiptFilterRequest) Awaitable<Errors\Result<CreateReceiptFilterResponse>>;
  public function DescribeReceiptRuleSet(DescribeReceiptRuleSetRequest) Awaitable<Errors\Result<DescribeReceiptRuleSetResponse>>;
  public function CreateConfigurationSetTrackingOptions(CreateConfigurationSetTrackingOptionsRequest) Awaitable<Errors\Result<CreateConfigurationSetTrackingOptionsResponse>>;
  public function CreateReceiptRuleSet(CreateReceiptRuleSetRequest) Awaitable<Errors\Result<CreateReceiptRuleSetResponse>>;
  public function GetCustomVerificationEmailTemplate(GetCustomVerificationEmailTemplateRequest) Awaitable<Errors\Result<GetCustomVerificationEmailTemplateResponse>>;
  public function GetIdentityNotificationAttributes(GetIdentityNotificationAttributesRequest) Awaitable<Errors\Result<GetIdentityNotificationAttributesResponse>>;
  public function PutConfigurationSetDeliveryOptions(PutConfigurationSetDeliveryOptionsRequest) Awaitable<Errors\Result<PutConfigurationSetDeliveryOptionsResponse>>;
  public function SendCustomVerificationEmail(SendCustomVerificationEmailRequest) Awaitable<Errors\Result<SendCustomVerificationEmailResponse>>;
  public function CreateReceiptRule(CreateReceiptRuleRequest) Awaitable<Errors\Result<CreateReceiptRuleResponse>>;
  public function GetIdentityPolicies(GetIdentityPoliciesRequest) Awaitable<Errors\Result<GetIdentityPoliciesResponse>>;
  public function ListReceiptFilters(ListReceiptFiltersRequest) Awaitable<Errors\Result<ListReceiptFiltersResponse>>;
  public function SendTemplatedEmail(SendTemplatedEmailRequest) Awaitable<Errors\Result<SendTemplatedEmailResponse>>;
  public function SetActiveReceiptRuleSet(SetActiveReceiptRuleSetRequest) Awaitable<Errors\Result<SetActiveReceiptRuleSetResponse>>;
  public function CloneReceiptRuleSet(CloneReceiptRuleSetRequest) Awaitable<Errors\Result<CloneReceiptRuleSetResponse>>;
  public function ListIdentities(ListIdentitiesRequest) Awaitable<Errors\Result<ListIdentitiesResponse>>;
  public function SetIdentityHeadersInNotificationsEnabled(SetIdentityHeadersInNotificationsEnabledRequest) Awaitable<Errors\Result<SetIdentityHeadersInNotificationsEnabledResponse>>;
  public function VerifyDomainIdentity(VerifyDomainIdentityRequest) Awaitable<Errors\Result<VerifyDomainIdentityResponse>>;
  public function CreateTemplate(CreateTemplateRequest) Awaitable<Errors\Result<CreateTemplateResponse>>;
}

class S3Action {
  public AmazonResourceName $topic_arn;
  public S3BucketName $bucket_name;
  public S3KeyPrefix $object_key_prefix;
  public AmazonResourceName $kms_key_arn;
}

class FromAddress {
}

class ConfigurationSetSendingPausedException {
  public ConfigurationSetName $configuration_set_name;
}

class MessageId {
}

class BouncedRecipientInfoList {
}

class ReceiptFilterPolicy {
}

class UpdateConfigurationSetTrackingOptionsResponse {
}

class ExtensionFieldName {
}

class DeleteIdentityRequest {
  public Identity $identity;
}

class DescribeReceiptRuleResponse {
  public ReceiptRule $rule;
}

class InvalidTrackingOptionsException {
}

class ListReceiptFiltersRequest {
}

class MailFromDomainName {
}

class NotificationTopic {
}

class StopAction {
  public StopScope $scope;
  public AmazonResourceName $topic_arn;
}

class BulkEmailDestinationStatus {
  public BulkEmailStatus $status;
  public Error $error;
  public MessageId $message_id;
}

class NextToken {
}

class RecipientDsnFields {
  public ExtensionFieldList $extension_fields;
  public Address $final_recipient;
  public DsnAction $action;
  public RemoteMta $remote_mta;
  public DsnStatus $status;
  public DiagnosticCode $diagnostic_code;
  public LastAttemptDate $last_attempt_date;
}

class SendCustomVerificationEmailResponse {
  public MessageId $message_id;
}

class SetIdentityDkimEnabledResponse {
}

class VerificationStatus {
}

class InvalidFirehoseDestinationException {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationName $event_destination_name;
}

class Destination {
  public AddressList $to_addresses;
  public AddressList $cc_addresses;
  public AddressList $bcc_addresses;
}

class DiagnosticCode {
}

class Domain {
}

class LambdaAction {
  public AmazonResourceName $topic_arn;
  public AmazonResourceName $function_arn;
  public InvocationType $invocation_type;
}

class UpdateReceiptRuleRequest {
  public ReceiptRule $rule;
  public ReceiptRuleSetName $rule_set_name;
}

class AlreadyExistsException {
  public RuleOrRuleSetName $name;
}

class GetIdentityMailFromDomainAttributesResponse {
  public MailFromDomainAttributes $mail_from_domain_attributes;
}

class InvalidPolicyException {
}

class MaxResults {
}

class ReceiptRulesList {
}

class DescribeActiveReceiptRuleSetRequest {
}

class CustomRedirectDomain {
}

class EventDestinationName {
}

class GetIdentityNotificationAttributesResponse {
  public NotificationAttributes $notification_attributes;
}

class ReceiptRuleNamesList {
}

class CannotDeleteException {
  public RuleOrRuleSetName $name;
}

class InvalidDeliveryOptionsException {
}

class ReceiptRuleSetName {
}

class SetIdentityMailFromDomainResponse {
}

class UpdateConfigurationSetEventDestinationRequest {
  public ConfigurationSetName $configuration_set_name;
  public EventDestination $event_destination;
}

class BounceMessage {
}

class PutIdentityPolicyRequest {
  public Policy $policy;
  public Identity $identity;
  public PolicyName $policy_name;
}

class PolicyNameList {
}

class SetReceiptRulePositionResponse {
}

class Subject {
}

class InvalidRenderingParameterException {
  public TemplateName $template_name;
}

class SendCustomVerificationEmailRequest {
  public Address $email_address;
  public TemplateName $template_name;
  public ConfigurationSetName $configuration_set_name;
}

class SendBounceResponse {
  public MessageId $message_id;
}

class TextPart {
}

class EventDestinations {
}

class FromEmailAddressNotVerifiedException {
  public FromAddress $from_email_address;
}

class LastAttemptDate {
}

class ListConfigurationSetsRequest {
  public MaxItems $max_items;
  public NextToken $next_token;
}

class ListIdentityPoliciesRequest {
  public Identity $identity;
}

class MaxSendRate {
}

class CloudWatchDestination {
  public CloudWatchDimensionConfigurations $dimension_configurations;
}

class CreateReceiptFilterRequest {
  public ReceiptFilter $filter;
}

class CustomVerificationEmailTemplates {
}

class EventDestinationDoesNotExistException {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationName $event_destination_name;
}

class GetIdentityVerificationAttributesResponse {
  public VerificationAttributes $verification_attributes;
}

class IdentityDkimAttributes {
  public Enabled $dkim_enabled;
  public VerificationStatus $dkim_verification_status;
  public VerificationTokenList $dkim_tokens;
}

class UpdateTemplateRequest {
  public Template $template;
}

class AccountSendingPausedException {
}

class InvalidCloudWatchDestinationException {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationName $event_destination_name;
}

class MessageData {
}

class RuleSetDoesNotExistException {
  public RuleOrRuleSetName $name;
}

class TlsPolicy {
}

class UpdateConfigurationSetSendingEnabledRequest {
  public ConfigurationSetName $configuration_set_name;
  public Enabled $enabled;
}

class DeleteReceiptRuleSetRequest {
  public ReceiptRuleSetName $rule_set_name;
}

class ListTemplatesRequest {
  public NextToken $next_token;
  public MaxItems $max_items;
}

class Policy {
}

class RawMessage {
  public RawMessageData $data;
}

class S3KeyPrefix {
}

class SendBulkTemplatedEmailRequest {
  public AddressList $reply_to_addresses;
  public Address $return_path;
  public AmazonResourceName $template_arn;
  public TemplateData $default_template_data;
  public Address $source;
  public AmazonResourceName $return_path_arn;
  public ConfigurationSetName $configuration_set_name;
  public MessageTagList $default_tags;
  public TemplateName $template;
  public BulkEmailDestinationList $destinations;
  public AmazonResourceName $source_arn;
}

class UpdateAccountSendingEnabledRequest {
  public Enabled $enabled;
}

class VerifyEmailIdentityRequest {
  public Address $email_address;
}

class InvocationType {
}

class VerifyEmailIdentityResponse {
}

class CustomVerificationEmailTemplate {
  public SuccessRedirectionURL $success_redirection_url;
  public FailureRedirectionURL $failure_redirection_url;
  public TemplateName $template_name;
  public FromAddress $from_email_address;
  public Subject $template_subject;
}

class ListCustomVerificationEmailTemplatesResponse {
  public CustomVerificationEmailTemplates $custom_verification_email_templates;
  public NextToken $next_token;
}

class PutIdentityPolicyResponse {
}

class ReceiptFilterName {
}

class SentLast24Hours {
}

class SetIdentityFeedbackForwardingEnabledResponse {
}

class Charset {
}

class MailFromDomainNotVerifiedException {
}

class ProductionAccessNotGrantedException {
}

class ReceiptActionsList {
}

class SendDataPoint {
  public Counter $bounces;
  public Counter $complaints;
  public Counter $rejects;
  public Timestamp $timestamp;
  public Counter $delivery_attempts;
}

class SetIdentityNotificationTopicResponse {
}

class SetReceiptRulePositionRequest {
  public ReceiptRuleSetName $rule_set_name;
  public ReceiptRuleName $rule_name;
  public ReceiptRuleName $after;
}

class Template {
  public SubjectPart $subject_part;
  public TextPart $text_part;
  public HtmlPart $html_part;
  public TemplateName $template_name;
}

class ListReceiptRuleSetsRequest {
  public NextToken $next_token;
}

class TestRenderTemplateResponse {
  public RenderedTemplate $rendered_template;
}

class VerifyEmailAddressRequest {
  public Address $email_address;
}

class TemplateDoesNotExistException {
  public TemplateName $template_name;
}

class ExtensionFieldValue {
}

class MessageTagName {
}

class MissingRenderingAttributeException {
  public TemplateName $template_name;
}

class ReceiptAction {
  public BounceAction $bounce_action;
  public WorkmailAction $workmail_action;
  public LambdaAction $lambda_action;
  public StopAction $stop_action;
  public AddHeaderAction $add_header_action;
  public SNSAction $sns_action;
  public S3Action $s_3_action;
}

class RecipientsList {
}

class DescribeConfigurationSetRequest {
  public ConfigurationSetName $configuration_set_name;
  public ConfigurationSetAttributeList $configuration_set_attribute_names;
}

class EventTypes {
}

class RuleDoesNotExistException {
  public RuleOrRuleSetName $name;
}

class SetIdentityMailFromDomainRequest {
  public Identity $identity;
  public MailFromDomainName $mail_from_domain;
  public BehaviorOnMXFailure $behavior_on_mx_failure;
}

class VerificationAttributes {
}

class DeleteReceiptRuleResponse {
}

class ListCustomVerificationEmailTemplatesRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class SetIdentityFeedbackForwardingEnabledRequest {
  public Identity $identity;
  public Enabled $forwarding_enabled;
}

class VerifyDomainDkimRequest {
  public Domain $domain;
}

class CreateCustomVerificationEmailTemplateRequest {
  public Subject $template_subject;
  public TemplateContent $template_content;
  public SuccessRedirectionURL $success_redirection_url;
  public FailureRedirectionURL $failure_redirection_url;
  public TemplateName $template_name;
  public FromAddress $from_email_address;
}

class DescribeActiveReceiptRuleSetResponse {
  public ReceiptRuleSetMetadata $metadata;
  public ReceiptRulesList $rules;
}

class DescribeReceiptRuleRequest {
  public ReceiptRuleName $rule_name;
  public ReceiptRuleSetName $rule_set_name;
}

class GetIdentityVerificationAttributesRequest {
  public IdentityList $identities;
}

class InvalidConfigurationSetException {
}

class ListIdentitiesResponse {
  public NextToken $next_token;
  public IdentityList $identities;
}

class SendDataPointList {
}

class VerifyDomainDkimResponse {
  public VerificationTokenList $dkim_tokens;
}

class ConfigurationSet {
  public ConfigurationSetName $name;
}

class VerifyDomainIdentityResponse {
  public VerificationToken $verification_token;
}

class BouncedRecipientInfo {
  public Address $recipient;
  public AmazonResourceName $recipient_arn;
  public BounceType $bounce_type;
  public RecipientDsnFields $recipient_dsn_fields;
}

class CreateReceiptFilterResponse {
}

class DeleteIdentityResponse {
}

class DeleteTemplateRequest {
  public TemplateName $template_name;
}

class ListIdentityPoliciesResponse {
  public PolicyNameList $policy_names;
}

class SNSAction {
  public AmazonResourceName $topic_arn;
  public SNSActionEncoding $encoding;
}

class UpdateCustomVerificationEmailTemplateRequest {
  public TemplateName $template_name;
  public FromAddress $from_email_address;
  public Subject $template_subject;
  public TemplateContent $template_content;
  public SuccessRedirectionURL $success_redirection_url;
  public FailureRedirectionURL $failure_redirection_url;
}

class BounceStatusCode {
}

class MessageTagValue {
}

class SendTemplatedEmailRequest {
  public AmazonResourceName $return_path_arn;
  public ConfigurationSetName $configuration_set_name;
  public TemplateName $template;
  public Address $source;
  public Destination $destination;
  public AmazonResourceName $source_arn;
  public MessageTagList $tags;
  public AmazonResourceName $template_arn;
  public TemplateData $template_data;
  public AddressList $reply_to_addresses;
  public Address $return_path;
}

class CloneReceiptRuleSetRequest {
  public ReceiptRuleSetName $rule_set_name;
  public ReceiptRuleSetName $original_rule_set_name;
}

class BulkEmailDestinationStatusList {
}

class GetIdentityPoliciesRequest {
  public Identity $identity;
  public PolicyNameList $policy_names;
}

class PolicyName {
}

class BounceType {
}

class Explanation {
}

class HeaderName {
}

class ListConfigurationSetsResponse {
  public ConfigurationSets $configuration_sets;
  public NextToken $next_token;
}

class Address {
}

class SetActiveReceiptRuleSetResponse {
}

class HtmlPart {
}

class IdentityList {
}

class ReceiptRuleSetsLists {
}

class SendBounceRequest {
  public AmazonResourceName $bounce_sender_arn;
  public MessageId $original_message_id;
  public Address $bounce_sender;
  public Explanation $explanation;
  public MessageDsn $message_dsn;
  public BouncedRecipientInfoList $bounced_recipient_info_list;
}

class AmazonResourceName {
}

class CustomMailFromStatus {
}

class TemplateMetadataList {
}

class BulkEmailStatus {
}

class SendRawEmailResponse {
  public MessageId $message_id;
}

class GetCustomVerificationEmailTemplateResponse {
  public FailureRedirectionURL $failure_redirection_url;
  public TemplateName $template_name;
  public FromAddress $from_email_address;
  public Subject $template_subject;
  public TemplateContent $template_content;
  public SuccessRedirectionURL $success_redirection_url;
}

class GetSendStatisticsResponse {
  public SendDataPointList $send_data_points;
}

class ReorderReceiptRuleSetRequest {
  public ReceiptRuleSetName $rule_set_name;
  public ReceiptRuleNamesList $rule_names;
}

class AddressList {
}

class DeleteTemplateResponse {
}

class FailureRedirectionURL {
}

class RawMessageData {
}

class ReceiptRule {
  public TlsPolicy $tls_policy;
  public RecipientsList $recipients;
  public ReceiptActionsList $actions;
  public Enabled $scan_enabled;
  public ReceiptRuleName $name;
  public Enabled $enabled;
}

class SendRawEmailRequest {
  public AmazonResourceName $return_path_arn;
  public MessageTagList $tags;
  public ConfigurationSetName $configuration_set_name;
  public Address $source;
  public AddressList $destinations;
  public RawMessage $raw_message;
  public AmazonResourceName $from_arn;
  public AmazonResourceName $source_arn;
}

class CreateTemplateRequest {
  public Template $template;
}

class ConfigurationSets {
}

class DeleteConfigurationSetEventDestinationResponse {
}

class DeleteConfigurationSetRequest {
  public ConfigurationSetName $configuration_set_name;
}

class UpdateConfigurationSetReputationMetricsEnabledRequest {
  public ConfigurationSetName $configuration_set_name;
  public Enabled $enabled;
}

class CloudWatchDimensionConfiguration {
  public DefaultDimensionValue $default_dimension_value;
  public DimensionName $dimension_name;
  public DimensionValueSource $dimension_value_source;
}

class DeleteReceiptRuleRequest {
  public ReceiptRuleSetName $rule_set_name;
  public ReceiptRuleName $rule_name;
}

class MaxItems {
}

class RemoteMta {
}

class SendEmailRequest {
  public AddressList $reply_to_addresses;
  public Address $return_path;
  public Address $source;
  public Destination $destination;
  public Message $message;
  public ConfigurationSetName $configuration_set_name;
  public AmazonResourceName $source_arn;
  public AmazonResourceName $return_path_arn;
  public MessageTagList $tags;
}

class UpdateConfigurationSetEventDestinationResponse {
}

class CreateConfigurationSetTrackingOptionsResponse {
}

class ReceiptFilter {
  public ReceiptFilterName $name;
  public ReceiptIpFilter $ip_filter;
}

class ReceiptRuleSetMetadata {
  public ReceiptRuleSetName $name;
  public Timestamp $created_timestamp;
}

class SetActiveReceiptRuleSetRequest {
  public ReceiptRuleSetName $rule_set_name;
}

class DeleteCustomVerificationEmailTemplateRequest {
  public TemplateName $template_name;
}

class SetIdentityDkimEnabledRequest {
  public Enabled $dkim_enabled;
  public Identity $identity;
}

class UpdateReceiptRuleResponse {
}

class GetAccountSendingEnabledResponse {
  public Enabled $enabled;
}

class CloneReceiptRuleSetResponse {
}

class DeleteReceiptRuleSetResponse {
}

class HeaderValue {
}

class LimitExceededException {
}

class Max24HourSend {
}

class MessageDsn {
  public ReportingMta $reporting_mta;
  public ArrivalDate $arrival_date;
  public ExtensionFieldList $extension_fields;
}

class TemplateData {
}

class BulkEmailDestinationList {
}

class ConfigurationSetDoesNotExistException {
  public ConfigurationSetName $configuration_set_name;
}

class DsnAction {
}

class DsnStatus {
}

class EventDestinationAlreadyExistsException {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationName $event_destination_name;
}

class ReorderReceiptRuleSetResponse {
}

class BounceSmtpReplyCode {
}

class MessageTagList {
}

class VerificationTokenList {
}

class ListReceiptFiltersResponse {
  public ReceiptFilterList $filters;
}

class CreateConfigurationSetEventDestinationRequest {
  public ConfigurationSetName $configuration_set_name;
  public EventDestination $event_destination;
}

class DescribeReceiptRuleSetRequest {
  public ReceiptRuleSetName $rule_set_name;
}

class Identity {
}

class ListReceiptRuleSetsResponse {
  public ReceiptRuleSetsLists $rule_sets;
  public NextToken $next_token;
}

class ArrivalDate {
}

class DeleteConfigurationSetEventDestinationRequest {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationName $event_destination_name;
}

class DeleteReceiptFilterRequest {
  public ReceiptFilterName $filter_name;
}

class IdentityType {
}

class S3BucketName {
}

class Counter {
}

class ReceiptFilterList {
}

class Message {
  public Content $subject;
  public Body $body;
}

class DescribeConfigurationSetResponse {
  public ReputationOptions $reputation_options;
  public ConfigurationSet $configuration_set;
  public EventDestinations $event_destinations;
  public TrackingOptions $tracking_options;
  public DeliveryOptions $delivery_options;
}

class MailFromDomainAttributes {
}

class SendBulkTemplatedEmailResponse {
  public BulkEmailDestinationStatusList $status;
}

class SetIdentityHeadersInNotificationsEnabledResponse {
}

class TemplateContent {
}

class DeliveryOptions {
  public TlsPolicy $tls_policy;
}

class DimensionValueSource {
}

class InvalidSnsTopicException {
  public AmazonResourceName $topic;
}

class WorkmailAction {
  public AmazonResourceName $topic_arn;
  public AmazonResourceName $organization_arn;
}

class CreateReceiptRuleSetRequest {
  public ReceiptRuleSetName $rule_set_name;
}

class GetIdentityNotificationAttributesRequest {
  public IdentityList $identities;
}

class ReputationOptions {
  public Enabled $sending_enabled;
  public Enabled $reputation_metrics_enabled;
  public LastFreshStart $last_fresh_start;
}

class SetIdentityNotificationTopicRequest {
  public Identity $identity;
  public NotificationType $notification_type;
  public NotificationTopic $sns_topic;
}

class TemplateMetadata {
  public TemplateName $name;
  public Timestamp $created_timestamp;
}

class DeleteConfigurationSetTrackingOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
}

class DkimAttributes {
}

class CustomVerificationEmailTemplateAlreadyExistsException {
  public TemplateName $custom_verification_email_template_name;
}

class Content {
  public MessageData $data;
  public Charset $charset;
}

class CreateReceiptRuleResponse {
}

class DeleteConfigurationSetTrackingOptionsResponse {
}

class IdentityVerificationAttributes {
  public VerificationStatus $verification_status;
  public VerificationToken $verification_token;
}

class SubjectPart {
}

class ConfigurationSetAttributeList {
}

class CreateConfigurationSetEventDestinationResponse {
}

class CreateConfigurationSetResponse {
}

class GetCustomVerificationEmailTemplateRequest {
  public TemplateName $template_name;
}

class GetIdentityDkimAttributesResponse {
  public DkimAttributes $dkim_attributes;
}

class ListTemplatesResponse {
  public NextToken $next_token;
  public TemplateMetadataList $templates_metadata;
}

class ListVerifiedEmailAddressesResponse {
  public AddressList $verified_email_addresses;
}

class TemplateName {
}

class CloudWatchDimensionConfigurations {
}

class CreateConfigurationSetTrackingOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public TrackingOptions $tracking_options;
}

class DeleteIdentityPolicyResponse {
}

class GetTemplateResponse {
  public Template $template;
}

class SendTemplatedEmailResponse {
  public MessageId $message_id;
}

class SetIdentityHeadersInNotificationsEnabledRequest {
  public Identity $identity;
  public NotificationType $notification_type;
  public Enabled $enabled;
}

class ConfigurationSetAttribute {
}

class DeleteVerifiedEmailAddressRequest {
  public Address $email_address;
}

class ExtensionField {
  public ExtensionFieldName $name;
  public ExtensionFieldValue $value;
}

class ExtensionFieldList {
}

class Timestamp {
}

class DeleteReceiptFilterResponse {
}

class MessageRejected {
}

class VerifyDomainIdentityRequest {
  public Domain $domain;
}

class LastFreshStart {
}

class BulkEmailDestination {
  public TemplateData $replacement_template_data;
  public Destination $destination;
  public MessageTagList $replacement_tags;
}

class GetIdentityPoliciesResponse {
  public PolicyMap $policies;
}

class GetTemplateRequest {
  public TemplateName $template_name;
}

class IdentityMailFromDomainAttributes {
  public MailFromDomainName $mail_from_domain;
  public CustomMailFromStatus $mail_from_domain_status;
  public BehaviorOnMXFailure $behavior_on_mx_failure;
}

class InvalidLambdaFunctionException {
  public AmazonResourceName $function_arn;
}

class PutConfigurationSetDeliveryOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public DeliveryOptions $delivery_options;
}

class SendEmailResponse {
  public MessageId $message_id;
}

class Body {
  public Content $text;
  public Content $html;
}

class SuccessRedirectionURL {
}

class PolicyMap {
}

class ReceiptIpFilter {
  public ReceiptFilterPolicy $policy;
  public Cidr $cidr;
}

class SNSActionEncoding {
}

class SNSDestination {
  public AmazonResourceName $topic_arn;
}

class TestRenderTemplateRequest {
  public TemplateData $template_data;
  public TemplateName $template_name;
}

class TrackingOptionsAlreadyExistsException {
  public ConfigurationSetName $configuration_set_name;
}

class CreateConfigurationSetRequest {
  public ConfigurationSet $configuration_set;
}

class EventDestination {
  public CloudWatchDestination $cloud_watch_destination;
  public SNSDestination $sns_destination;
  public EventDestinationName $name;
  public Enabled $enabled;
  public EventTypes $matching_event_types;
  public KinesisFirehoseDestination $kinesis_firehose_destination;
}

class GetIdentityMailFromDomainAttributesRequest {
  public IdentityList $identities;
}

class RuleOrRuleSetName {
}

class TrackingOptions {
  public CustomRedirectDomain $custom_redirect_domain;
}

class AddHeaderAction {
  public HeaderName $header_name;
  public HeaderValue $header_value;
}

class DeleteConfigurationSetResponse {
}

class DescribeReceiptRuleSetResponse {
  public ReceiptRuleSetMetadata $metadata;
  public ReceiptRulesList $rules;
}

class DimensionName {
}

class ReceiptRuleName {
}

class CreateTemplateResponse {
}

class DeleteIdentityPolicyRequest {
  public Identity $identity;
  public PolicyName $policy_name;
}

class GetSendQuotaResponse {
  public Max24HourSend $max_24_hour_send;
  public MaxSendRate $max_send_rate;
  public SentLast24Hours $sent_last_24_hours;
}

class InvalidS3ConfigurationException {
  public S3BucketName $bucket;
}

class RenderedTemplate {
}

class Cidr {
}

class EventType {
}

class GetIdentityDkimAttributesRequest {
  public IdentityList $identities;
}

class InvalidTemplateException {
  public TemplateName $template_name;
}

class MessageTag {
  public MessageTagName $name;
  public MessageTagValue $value;
}

class PutConfigurationSetDeliveryOptionsResponse {
}

class ConfigurationSetName {
}

class BounceAction {
  public AmazonResourceName $topic_arn;
  public BounceSmtpReplyCode $smtp_reply_code;
  public BounceStatusCode $status_code;
  public BounceMessage $message;
  public Address $sender;
}

class CreateReceiptRuleRequest {
  public ReceiptRule $rule;
  public ReceiptRuleSetName $rule_set_name;
  public ReceiptRuleName $after;
}

class CreateReceiptRuleSetResponse {
}

class Recipient {
}

class ReportingMta {
}

class StopScope {
}

class BehaviorOnMXFailure {
}

class DefaultDimensionValue {
}

class Error {
}

class UpdateConfigurationSetTrackingOptionsRequest {
  public ConfigurationSetName $configuration_set_name;
  public TrackingOptions $tracking_options;
}

class UpdateTemplateResponse {
}

class CustomVerificationEmailTemplateDoesNotExistException {
  public TemplateName $custom_verification_email_template_name;
}

class IdentityNotificationAttributes {
  public Enabled $headers_in_delivery_notifications_enabled;
  public NotificationTopic $bounce_topic;
  public NotificationTopic $complaint_topic;
  public NotificationTopic $delivery_topic;
  public Enabled $forwarding_enabled;
  public Enabled $headers_in_bounce_notifications_enabled;
  public Enabled $headers_in_complaint_notifications_enabled;
}

class KinesisFirehoseDestination {
  public AmazonResourceName $delivery_stream_arn;
  public AmazonResourceName $iam_role_arn;
}

class TrackingOptionsDoesNotExistException {
  public ConfigurationSetName $configuration_set_name;
}

class ConfigurationSetAlreadyExistsException {
  public ConfigurationSetName $configuration_set_name;
}

class NotificationAttributes {
}

class NotificationType {
}

class VerificationToken {
}

class CustomVerificationEmailInvalidContentException {
}

class InvalidSNSDestinationException {
  public ConfigurationSetName $configuration_set_name;
  public EventDestinationName $event_destination_name;
}

class ListIdentitiesRequest {
  public NextToken $next_token;
  public MaxItems $max_items;
  public IdentityType $identity_type;
}

class Enabled {
}

