<?hh // strict
namespace slack\aws\pinpoint;

interface Pinpoint {
  public function CreateApp(CreateAppRequest) Awaitable<Errors\Result<CreateAppResponse>>;
  public function CreateCampaign(CreateCampaignRequest) Awaitable<Errors\Result<CreateCampaignResponse>>;
  public function CreateEmailTemplate(CreateEmailTemplateRequest) Awaitable<Errors\Result<CreateEmailTemplateResponse>>;
  public function CreateExportJob(CreateExportJobRequest) Awaitable<Errors\Result<CreateExportJobResponse>>;
  public function CreateImportJob(CreateImportJobRequest) Awaitable<Errors\Result<CreateImportJobResponse>>;
  public function CreateJourney(CreateJourneyRequest) Awaitable<Errors\Result<CreateJourneyResponse>>;
  public function CreatePushTemplate(CreatePushTemplateRequest) Awaitable<Errors\Result<CreatePushTemplateResponse>>;
  public function CreateRecommenderConfiguration(CreateRecommenderConfigurationRequest) Awaitable<Errors\Result<CreateRecommenderConfigurationResponse>>;
  public function CreateSegment(CreateSegmentRequest) Awaitable<Errors\Result<CreateSegmentResponse>>;
  public function CreateSmsTemplate(CreateSmsTemplateRequest) Awaitable<Errors\Result<CreateSmsTemplateResponse>>;
  public function CreateVoiceTemplate(CreateVoiceTemplateRequest) Awaitable<Errors\Result<CreateVoiceTemplateResponse>>;
  public function DeleteAdmChannel(DeleteAdmChannelRequest) Awaitable<Errors\Result<DeleteAdmChannelResponse>>;
  public function DeleteApnsChannel(DeleteApnsChannelRequest) Awaitable<Errors\Result<DeleteApnsChannelResponse>>;
  public function DeleteApnsSandboxChannel(DeleteApnsSandboxChannelRequest) Awaitable<Errors\Result<DeleteApnsSandboxChannelResponse>>;
  public function DeleteApnsVoipChannel(DeleteApnsVoipChannelRequest) Awaitable<Errors\Result<DeleteApnsVoipChannelResponse>>;
  public function DeleteApnsVoipSandboxChannel(DeleteApnsVoipSandboxChannelRequest) Awaitable<Errors\Result<DeleteApnsVoipSandboxChannelResponse>>;
  public function DeleteApp(DeleteAppRequest) Awaitable<Errors\Result<DeleteAppResponse>>;
  public function DeleteBaiduChannel(DeleteBaiduChannelRequest) Awaitable<Errors\Result<DeleteBaiduChannelResponse>>;
  public function DeleteCampaign(DeleteCampaignRequest) Awaitable<Errors\Result<DeleteCampaignResponse>>;
  public function DeleteEmailChannel(DeleteEmailChannelRequest) Awaitable<Errors\Result<DeleteEmailChannelResponse>>;
  public function DeleteEmailTemplate(DeleteEmailTemplateRequest) Awaitable<Errors\Result<DeleteEmailTemplateResponse>>;
  public function DeleteEndpoint(DeleteEndpointRequest) Awaitable<Errors\Result<DeleteEndpointResponse>>;
  public function DeleteEventStream(DeleteEventStreamRequest) Awaitable<Errors\Result<DeleteEventStreamResponse>>;
  public function DeleteGcmChannel(DeleteGcmChannelRequest) Awaitable<Errors\Result<DeleteGcmChannelResponse>>;
  public function DeleteJourney(DeleteJourneyRequest) Awaitable<Errors\Result<DeleteJourneyResponse>>;
  public function DeletePushTemplate(DeletePushTemplateRequest) Awaitable<Errors\Result<DeletePushTemplateResponse>>;
  public function DeleteRecommenderConfiguration(DeleteRecommenderConfigurationRequest) Awaitable<Errors\Result<DeleteRecommenderConfigurationResponse>>;
  public function DeleteSegment(DeleteSegmentRequest) Awaitable<Errors\Result<DeleteSegmentResponse>>;
  public function DeleteSmsChannel(DeleteSmsChannelRequest) Awaitable<Errors\Result<DeleteSmsChannelResponse>>;
  public function DeleteSmsTemplate(DeleteSmsTemplateRequest) Awaitable<Errors\Result<DeleteSmsTemplateResponse>>;
  public function DeleteUserEndpoints(DeleteUserEndpointsRequest) Awaitable<Errors\Result<DeleteUserEndpointsResponse>>;
  public function DeleteVoiceChannel(DeleteVoiceChannelRequest) Awaitable<Errors\Result<DeleteVoiceChannelResponse>>;
  public function DeleteVoiceTemplate(DeleteVoiceTemplateRequest) Awaitable<Errors\Result<DeleteVoiceTemplateResponse>>;
  public function GetAdmChannel(GetAdmChannelRequest) Awaitable<Errors\Result<GetAdmChannelResponse>>;
  public function GetApnsChannel(GetApnsChannelRequest) Awaitable<Errors\Result<GetApnsChannelResponse>>;
  public function GetApnsSandboxChannel(GetApnsSandboxChannelRequest) Awaitable<Errors\Result<GetApnsSandboxChannelResponse>>;
  public function GetApnsVoipChannel(GetApnsVoipChannelRequest) Awaitable<Errors\Result<GetApnsVoipChannelResponse>>;
  public function GetApnsVoipSandboxChannel(GetApnsVoipSandboxChannelRequest) Awaitable<Errors\Result<GetApnsVoipSandboxChannelResponse>>;
  public function GetApp(GetAppRequest) Awaitable<Errors\Result<GetAppResponse>>;
  public function GetApplicationDateRangeKpi(GetApplicationDateRangeKpiRequest) Awaitable<Errors\Result<GetApplicationDateRangeKpiResponse>>;
  public function GetApplicationSettings(GetApplicationSettingsRequest) Awaitable<Errors\Result<GetApplicationSettingsResponse>>;
  public function GetApps(GetAppsRequest) Awaitable<Errors\Result<GetAppsResponse>>;
  public function GetBaiduChannel(GetBaiduChannelRequest) Awaitable<Errors\Result<GetBaiduChannelResponse>>;
  public function GetCampaign(GetCampaignRequest) Awaitable<Errors\Result<GetCampaignResponse>>;
  public function GetCampaignActivities(GetCampaignActivitiesRequest) Awaitable<Errors\Result<GetCampaignActivitiesResponse>>;
  public function GetCampaignDateRangeKpi(GetCampaignDateRangeKpiRequest) Awaitable<Errors\Result<GetCampaignDateRangeKpiResponse>>;
  public function GetCampaignVersion(GetCampaignVersionRequest) Awaitable<Errors\Result<GetCampaignVersionResponse>>;
  public function GetCampaignVersions(GetCampaignVersionsRequest) Awaitable<Errors\Result<GetCampaignVersionsResponse>>;
  public function GetCampaigns(GetCampaignsRequest) Awaitable<Errors\Result<GetCampaignsResponse>>;
  public function GetChannels(GetChannelsRequest) Awaitable<Errors\Result<GetChannelsResponse>>;
  public function GetEmailChannel(GetEmailChannelRequest) Awaitable<Errors\Result<GetEmailChannelResponse>>;
  public function GetEmailTemplate(GetEmailTemplateRequest) Awaitable<Errors\Result<GetEmailTemplateResponse>>;
  public function GetEndpoint(GetEndpointRequest) Awaitable<Errors\Result<GetEndpointResponse>>;
  public function GetEventStream(GetEventStreamRequest) Awaitable<Errors\Result<GetEventStreamResponse>>;
  public function GetExportJob(GetExportJobRequest) Awaitable<Errors\Result<GetExportJobResponse>>;
  public function GetExportJobs(GetExportJobsRequest) Awaitable<Errors\Result<GetExportJobsResponse>>;
  public function GetGcmChannel(GetGcmChannelRequest) Awaitable<Errors\Result<GetGcmChannelResponse>>;
  public function GetImportJob(GetImportJobRequest) Awaitable<Errors\Result<GetImportJobResponse>>;
  public function GetImportJobs(GetImportJobsRequest) Awaitable<Errors\Result<GetImportJobsResponse>>;
  public function GetJourney(GetJourneyRequest) Awaitable<Errors\Result<GetJourneyResponse>>;
  public function GetJourneyDateRangeKpi(GetJourneyDateRangeKpiRequest) Awaitable<Errors\Result<GetJourneyDateRangeKpiResponse>>;
  public function GetJourneyExecutionActivityMetrics(GetJourneyExecutionActivityMetricsRequest) Awaitable<Errors\Result<GetJourneyExecutionActivityMetricsResponse>>;
  public function GetJourneyExecutionMetrics(GetJourneyExecutionMetricsRequest) Awaitable<Errors\Result<GetJourneyExecutionMetricsResponse>>;
  public function GetPushTemplate(GetPushTemplateRequest) Awaitable<Errors\Result<GetPushTemplateResponse>>;
  public function GetRecommenderConfiguration(GetRecommenderConfigurationRequest) Awaitable<Errors\Result<GetRecommenderConfigurationResponse>>;
  public function GetRecommenderConfigurations(GetRecommenderConfigurationsRequest) Awaitable<Errors\Result<GetRecommenderConfigurationsResponse>>;
  public function GetSegment(GetSegmentRequest) Awaitable<Errors\Result<GetSegmentResponse>>;
  public function GetSegmentExportJobs(GetSegmentExportJobsRequest) Awaitable<Errors\Result<GetSegmentExportJobsResponse>>;
  public function GetSegmentImportJobs(GetSegmentImportJobsRequest) Awaitable<Errors\Result<GetSegmentImportJobsResponse>>;
  public function GetSegmentVersion(GetSegmentVersionRequest) Awaitable<Errors\Result<GetSegmentVersionResponse>>;
  public function GetSegmentVersions(GetSegmentVersionsRequest) Awaitable<Errors\Result<GetSegmentVersionsResponse>>;
  public function GetSegments(GetSegmentsRequest) Awaitable<Errors\Result<GetSegmentsResponse>>;
  public function GetSmsChannel(GetSmsChannelRequest) Awaitable<Errors\Result<GetSmsChannelResponse>>;
  public function GetSmsTemplate(GetSmsTemplateRequest) Awaitable<Errors\Result<GetSmsTemplateResponse>>;
  public function GetUserEndpoints(GetUserEndpointsRequest) Awaitable<Errors\Result<GetUserEndpointsResponse>>;
  public function GetVoiceChannel(GetVoiceChannelRequest) Awaitable<Errors\Result<GetVoiceChannelResponse>>;
  public function GetVoiceTemplate(GetVoiceTemplateRequest) Awaitable<Errors\Result<GetVoiceTemplateResponse>>;
  public function ListJourneys(ListJourneysRequest) Awaitable<Errors\Result<ListJourneysResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTemplateVersions(ListTemplateVersionsRequest) Awaitable<Errors\Result<ListTemplateVersionsResponse>>;
  public function ListTemplates(ListTemplatesRequest) Awaitable<Errors\Result<ListTemplatesResponse>>;
  public function PhoneNumberValidate(PhoneNumberValidateRequest) Awaitable<Errors\Result<PhoneNumberValidateResponse>>;
  public function PutEventStream(PutEventStreamRequest) Awaitable<Errors\Result<PutEventStreamResponse>>;
  public function PutEvents(PutEventsRequest) Awaitable<Errors\Result<PutEventsResponse>>;
  public function RemoveAttributes(RemoveAttributesRequest) Awaitable<Errors\Result<RemoveAttributesResponse>>;
  public function SendMessages(SendMessagesRequest) Awaitable<Errors\Result<SendMessagesResponse>>;
  public function SendUsersMessages(SendUsersMessagesRequest) Awaitable<Errors\Result<SendUsersMessagesResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateAdmChannel(UpdateAdmChannelRequest) Awaitable<Errors\Result<UpdateAdmChannelResponse>>;
  public function UpdateApnsChannel(UpdateApnsChannelRequest) Awaitable<Errors\Result<UpdateApnsChannelResponse>>;
  public function UpdateApnsSandboxChannel(UpdateApnsSandboxChannelRequest) Awaitable<Errors\Result<UpdateApnsSandboxChannelResponse>>;
  public function UpdateApnsVoipChannel(UpdateApnsVoipChannelRequest) Awaitable<Errors\Result<UpdateApnsVoipChannelResponse>>;
  public function UpdateApnsVoipSandboxChannel(UpdateApnsVoipSandboxChannelRequest) Awaitable<Errors\Result<UpdateApnsVoipSandboxChannelResponse>>;
  public function UpdateApplicationSettings(UpdateApplicationSettingsRequest) Awaitable<Errors\Result<UpdateApplicationSettingsResponse>>;
  public function UpdateBaiduChannel(UpdateBaiduChannelRequest) Awaitable<Errors\Result<UpdateBaiduChannelResponse>>;
  public function UpdateCampaign(UpdateCampaignRequest) Awaitable<Errors\Result<UpdateCampaignResponse>>;
  public function UpdateEmailChannel(UpdateEmailChannelRequest) Awaitable<Errors\Result<UpdateEmailChannelResponse>>;
  public function UpdateEmailTemplate(UpdateEmailTemplateRequest) Awaitable<Errors\Result<UpdateEmailTemplateResponse>>;
  public function UpdateEndpoint(UpdateEndpointRequest) Awaitable<Errors\Result<UpdateEndpointResponse>>;
  public function UpdateEndpointsBatch(UpdateEndpointsBatchRequest) Awaitable<Errors\Result<UpdateEndpointsBatchResponse>>;
  public function UpdateGcmChannel(UpdateGcmChannelRequest) Awaitable<Errors\Result<UpdateGcmChannelResponse>>;
  public function UpdateJourney(UpdateJourneyRequest) Awaitable<Errors\Result<UpdateJourneyResponse>>;
  public function UpdateJourneyState(UpdateJourneyStateRequest) Awaitable<Errors\Result<UpdateJourneyStateResponse>>;
  public function UpdatePushTemplate(UpdatePushTemplateRequest) Awaitable<Errors\Result<UpdatePushTemplateResponse>>;
  public function UpdateRecommenderConfiguration(UpdateRecommenderConfigurationRequest) Awaitable<Errors\Result<UpdateRecommenderConfigurationResponse>>;
  public function UpdateSegment(UpdateSegmentRequest) Awaitable<Errors\Result<UpdateSegmentResponse>>;
  public function UpdateSmsChannel(UpdateSmsChannelRequest) Awaitable<Errors\Result<UpdateSmsChannelResponse>>;
  public function UpdateSmsTemplate(UpdateSmsTemplateRequest) Awaitable<Errors\Result<UpdateSmsTemplateResponse>>;
  public function UpdateTemplateActiveVersion(UpdateTemplateActiveVersionRequest) Awaitable<Errors\Result<UpdateTemplateActiveVersionResponse>>;
  public function UpdateVoiceChannel(UpdateVoiceChannelRequest) Awaitable<Errors\Result<UpdateVoiceChannelResponse>>;
  public function UpdateVoiceTemplate(UpdateVoiceTemplateRequest) Awaitable<Errors\Result<UpdateVoiceTemplateResponse>>;
}

class ADMChannelRequest {
  public __string $client_id;
  public __string $client_secret;
  public __boolean $enabled;
}

class ADMChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __string $platform;
  public __integer $version;
}

class ADMMessage {
  public Action $action;
  public __string $body;
  public __string $consolidation_key;
  public MapOf__string $data;
  public __string $expires_after;
  public __string $icon_reference;
  public __string $image_icon_url;
  public __string $image_url;
  public __string $md_5;
  public __string $raw_content;
  public __boolean $silent_push;
  public __string $small_image_icon_url;
  public __string $sound;
  public MapOfListOf__string $substitutions;
  public __string $title;
  public __string $url;
}

class APNSChannelRequest {
  public __string $bundle_id;
  public __string $certificate;
  public __string $default_authentication_method;
  public __boolean $enabled;
  public __string $private_key;
  public __string $team_id;
  public __string $token_key;
  public __string $token_key_id;
}

class APNSChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __string $default_authentication_method;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __boolean $has_token_key;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __string $platform;
  public __integer $version;
}

class APNSMessage {
  public __string $apns_push_type;
  public Action $action;
  public __integer $badge;
  public __string $body;
  public __string $category;
  public __string $collapse_id;
  public MapOf__string $data;
  public __string $media_url;
  public __string $preferred_authentication_method;
  public __string $priority;
  public __string $raw_content;
  public __boolean $silent_push;
  public __string $sound;
  public MapOfListOf__string $substitutions;
  public __string $thread_id;
  public __integer $time_to_live;
  public __string $title;
  public __string $url;
}

class APNSPushNotificationTemplate {
  public Action $action;
  public __string $body;
  public __string $media_url;
  public __string $raw_content;
  public __string $sound;
  public __string $title;
  public __string $url;
}

class APNSSandboxChannelRequest {
  public __string $bundle_id;
  public __string $certificate;
  public __string $default_authentication_method;
  public __boolean $enabled;
  public __string $private_key;
  public __string $team_id;
  public __string $token_key;
  public __string $token_key_id;
}

class APNSSandboxChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __string $default_authentication_method;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __boolean $has_token_key;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __string $platform;
  public __integer $version;
}

class APNSVoipChannelRequest {
  public __string $bundle_id;
  public __string $certificate;
  public __string $default_authentication_method;
  public __boolean $enabled;
  public __string $private_key;
  public __string $team_id;
  public __string $token_key;
  public __string $token_key_id;
}

class APNSVoipChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __string $default_authentication_method;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __boolean $has_token_key;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __string $platform;
  public __integer $version;
}

class APNSVoipSandboxChannelRequest {
  public __string $bundle_id;
  public __string $certificate;
  public __string $default_authentication_method;
  public __boolean $enabled;
  public __string $private_key;
  public __string $team_id;
  public __string $token_key;
  public __string $token_key_id;
}

class APNSVoipSandboxChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __string $default_authentication_method;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __boolean $has_token_key;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __string $platform;
  public __integer $version;
}

class Action {
}

class ActivitiesResponse {
  public ListOfActivityResponse $item;
  public __string $next_token;
}

class Activity {
  public ConditionalSplitActivity $conditional_split;
  public __string $description;
  public EmailMessageActivity $email;
  public HoldoutActivity $holdout;
  public MultiConditionalSplitActivity $multi_condition;
  public RandomSplitActivity $random_split;
  public WaitActivity $wait;
}

class ActivityResponse {
  public __string $application_id;
  public __string $campaign_id;
  public __string $end;
  public __string $id;
  public __string $result;
  public __string $scheduled_start;
  public __string $start;
  public __string $state;
  public __integer $successful_endpoint_count;
  public __integer $timezones_completed_count;
  public __integer $timezones_total_count;
  public __integer $total_endpoint_count;
  public __string $treatment_id;
}

class AddressConfiguration {
  public __string $body_override;
  public ChannelType $channel_type;
  public MapOf__string $context;
  public __string $raw_content;
  public MapOfListOf__string $substitutions;
  public __string $title_override;
}

class AndroidPushNotificationTemplate {
  public Action $action;
  public __string $body;
  public __string $image_icon_url;
  public __string $image_url;
  public __string $raw_content;
  public __string $small_image_icon_url;
  public __string $sound;
  public __string $title;
  public __string $url;
}

class ApplicationDateRangeKpiResponse {
  public __string $application_id;
  public __timestampIso8601 $end_time;
  public __string $kpi_name;
  public BaseKpiResult $kpi_result;
  public __string $next_token;
  public __timestampIso8601 $start_time;
}

class ApplicationResponse {
  public __string $arn;
  public __string $id;
  public __string $name;
  public MapOf__string $tags;
}

class ApplicationSettingsResource {
  public __string $application_id;
  public CampaignHook $campaign_hook;
  public __string $last_modified_date;
  public CampaignLimits $limits;
  public QuietTime $quiet_time;
}

class ApplicationsResponse {
  public ListOfApplicationResponse $item;
  public __string $next_token;
}

class AttributeDimension {
  public AttributeType $attribute_type;
  public ListOf__string $values;
}

class AttributeType {
}

class AttributesResource {
  public __string $application_id;
  public __string $attribute_type;
  public ListOf__string $attributes;
}

class BadRequestException {
  public __string $message;
  public __string $request_id;
}

class BaiduChannelRequest {
  public __string $api_key;
  public __boolean $enabled;
  public __string $secret_key;
}

class BaiduChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __string $credential;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __string $platform;
  public __integer $version;
}

class BaiduMessage {
  public Action $action;
  public __string $body;
  public MapOf__string $data;
  public __string $icon_reference;
  public __string $image_icon_url;
  public __string $image_url;
  public __string $raw_content;
  public __boolean $silent_push;
  public __string $small_image_icon_url;
  public __string $sound;
  public MapOfListOf__string $substitutions;
  public __integer $time_to_live;
  public __string $title;
  public __string $url;
}

class BaseKpiResult {
  public ListOfResultRow $rows;
}

class CampaignCustomMessage {
  public __string $data;
}

class CampaignDateRangeKpiResponse {
  public __string $application_id;
  public __string $campaign_id;
  public __timestampIso8601 $end_time;
  public __string $kpi_name;
  public BaseKpiResult $kpi_result;
  public __string $next_token;
  public __timestampIso8601 $start_time;
}

class CampaignEmailMessage {
  public __string $body;
  public __string $from_address;
  public __string $html_body;
  public __string $title;
}

class CampaignEventFilter {
  public EventDimensions $dimensions;
  public FilterType $filter_type;
}

class CampaignHook {
  public __string $lambda_function_name;
  public Mode $mode;
  public __string $web_url;
}

class CampaignLimits {
  public __integer $daily;
  public __integer $maximum_duration;
  public __integer $messages_per_second;
  public __integer $total;
}

class CampaignResponse {
  public ListOfTreatmentResource $additional_treatments;
  public __string $application_id;
  public __string $arn;
  public __string $creation_date;
  public CustomDeliveryConfiguration $custom_delivery_configuration;
  public CampaignState $default_state;
  public __string $description;
  public __integer $holdout_percent;
  public CampaignHook $hook;
  public __string $id;
  public __boolean $is_paused;
  public __string $last_modified_date;
  public CampaignLimits $limits;
  public MessageConfiguration $message_configuration;
  public __string $name;
  public Schedule $schedule;
  public __string $segment_id;
  public __integer $segment_version;
  public CampaignState $state;
  public TemplateConfiguration $template_configuration;
  public __string $treatment_description;
  public __string $treatment_name;
  public __integer $version;
  public MapOf__string $tags;
}

class CampaignSmsMessage {
  public __string $body;
  public MessageType $message_type;
  public __string $sender_id;
}

class CampaignState {
  public CampaignStatus $campaign_status;
}

class CampaignStatus {
}

class CampaignsResponse {
  public ListOfCampaignResponse $item;
  public __string $next_token;
}

class ChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __integer $version;
}

class ChannelType {
}

class ChannelsResponse {
  public MapOfChannelResponse $channels;
}

class Condition {
  public ListOfSimpleCondition $conditions;
  public Operator $operator;
}

class ConditionalSplitActivity {
  public Condition $condition;
  public WaitTime $evaluation_wait_time;
  public __string $false_activity;
  public __string $true_activity;
}

class CreateAppRequest {
  public CreateApplicationRequest $create_application_request;
}

class CreateAppResponse {
  public ApplicationResponse $application_response;
}

class CreateApplicationRequest {
  public __string $name;
  public MapOf__string $tags;
}

class CreateCampaignRequest {
  public __string $application_id;
  public WriteCampaignRequest $write_campaign_request;
}

class CreateCampaignResponse {
  public CampaignResponse $campaign_response;
}

class CreateEmailTemplateRequest {
  public EmailTemplateRequest $email_template_request;
  public __string $template_name;
}

class CreateEmailTemplateResponse {
  public CreateTemplateMessageBody $create_template_message_body;
}

class CreateExportJobRequest {
  public __string $application_id;
  public ExportJobRequest $export_job_request;
}

class CreateExportJobResponse {
  public ExportJobResponse $export_job_response;
}

class CreateImportJobRequest {
  public __string $application_id;
  public ImportJobRequest $import_job_request;
}

class CreateImportJobResponse {
  public ImportJobResponse $import_job_response;
}

class CreateJourneyRequest {
  public __string $application_id;
  public WriteJourneyRequest $write_journey_request;
}

class CreateJourneyResponse {
  public JourneyResponse $journey_response;
}

class CreatePushTemplateRequest {
  public PushNotificationTemplateRequest $push_notification_template_request;
  public __string $template_name;
}

class CreatePushTemplateResponse {
  public CreateTemplateMessageBody $create_template_message_body;
}

class CreateRecommenderConfiguration {
  public MapOf__string $attributes;
  public __string $description;
  public __string $name;
  public __string $recommendation_provider_id_type;
  public __string $recommendation_provider_role_arn;
  public __string $recommendation_provider_uri;
  public __string $recommendation_transformer_uri;
  public __string $recommendations_display_name;
  public __integer $recommendations_per_message;
}

class CreateRecommenderConfigurationRequest {
  public CreateRecommenderConfiguration $create_recommender_configuration;
}

class CreateRecommenderConfigurationResponse {
  public RecommenderConfigurationResponse $recommender_configuration_response;
}

class CreateSegmentRequest {
  public __string $application_id;
  public WriteSegmentRequest $write_segment_request;
}

class CreateSegmentResponse {
  public SegmentResponse $segment_response;
}

class CreateSmsTemplateRequest {
  public SMSTemplateRequest $sms_template_request;
  public __string $template_name;
}

class CreateSmsTemplateResponse {
  public CreateTemplateMessageBody $create_template_message_body;
}

class CreateTemplateMessageBody {
  public __string $arn;
  public __string $message;
  public __string $request_id;
}

class CreateVoiceTemplateRequest {
  public __string $template_name;
  public VoiceTemplateRequest $voice_template_request;
}

class CreateVoiceTemplateResponse {
  public CreateTemplateMessageBody $create_template_message_body;
}

class CustomDeliveryConfiguration {
  public __string $delivery_uri;
  public ListOf__EndpointTypesElement $endpoint_types;
}

class DefaultMessage {
  public __string $body;
  public MapOfListOf__string $substitutions;
}

class DefaultPushNotificationMessage {
  public Action $action;
  public __string $body;
  public MapOf__string $data;
  public __boolean $silent_push;
  public MapOfListOf__string $substitutions;
  public __string $title;
  public __string $url;
}

class DefaultPushNotificationTemplate {
  public Action $action;
  public __string $body;
  public __string $sound;
  public __string $title;
  public __string $url;
}

class DeleteAdmChannelRequest {
  public __string $application_id;
}

class DeleteAdmChannelResponse {
  public ADMChannelResponse $adm_channel_response;
}

class DeleteApnsChannelRequest {
  public __string $application_id;
}

class DeleteApnsChannelResponse {
  public APNSChannelResponse $apns_channel_response;
}

class DeleteApnsSandboxChannelRequest {
  public __string $application_id;
}

class DeleteApnsSandboxChannelResponse {
  public APNSSandboxChannelResponse $apns_sandbox_channel_response;
}

class DeleteApnsVoipChannelRequest {
  public __string $application_id;
}

class DeleteApnsVoipChannelResponse {
  public APNSVoipChannelResponse $apns_voip_channel_response;
}

class DeleteApnsVoipSandboxChannelRequest {
  public __string $application_id;
}

class DeleteApnsVoipSandboxChannelResponse {
  public APNSVoipSandboxChannelResponse $apns_voip_sandbox_channel_response;
}

class DeleteAppRequest {
  public __string $application_id;
}

class DeleteAppResponse {
  public ApplicationResponse $application_response;
}

class DeleteBaiduChannelRequest {
  public __string $application_id;
}

class DeleteBaiduChannelResponse {
  public BaiduChannelResponse $baidu_channel_response;
}

class DeleteCampaignRequest {
  public __string $application_id;
  public __string $campaign_id;
}

class DeleteCampaignResponse {
  public CampaignResponse $campaign_response;
}

class DeleteEmailChannelRequest {
  public __string $application_id;
}

class DeleteEmailChannelResponse {
  public EmailChannelResponse $email_channel_response;
}

class DeleteEmailTemplateRequest {
  public __string $template_name;
  public __string $version;
}

class DeleteEmailTemplateResponse {
  public MessageBody $message_body;
}

class DeleteEndpointRequest {
  public __string $application_id;
  public __string $endpoint_id;
}

class DeleteEndpointResponse {
  public EndpointResponse $endpoint_response;
}

class DeleteEventStreamRequest {
  public __string $application_id;
}

class DeleteEventStreamResponse {
  public EventStream $event_stream;
}

class DeleteGcmChannelRequest {
  public __string $application_id;
}

class DeleteGcmChannelResponse {
  public GCMChannelResponse $gcm_channel_response;
}

class DeleteJourneyRequest {
  public __string $application_id;
  public __string $journey_id;
}

class DeleteJourneyResponse {
  public JourneyResponse $journey_response;
}

class DeletePushTemplateRequest {
  public __string $template_name;
  public __string $version;
}

class DeletePushTemplateResponse {
  public MessageBody $message_body;
}

class DeleteRecommenderConfigurationRequest {
  public __string $recommender_id;
}

class DeleteRecommenderConfigurationResponse {
  public RecommenderConfigurationResponse $recommender_configuration_response;
}

class DeleteSegmentRequest {
  public __string $application_id;
  public __string $segment_id;
}

class DeleteSegmentResponse {
  public SegmentResponse $segment_response;
}

class DeleteSmsChannelRequest {
  public __string $application_id;
}

class DeleteSmsChannelResponse {
  public SMSChannelResponse $sms_channel_response;
}

class DeleteSmsTemplateRequest {
  public __string $template_name;
  public __string $version;
}

class DeleteSmsTemplateResponse {
  public MessageBody $message_body;
}

class DeleteUserEndpointsRequest {
  public __string $application_id;
  public __string $user_id;
}

class DeleteUserEndpointsResponse {
  public EndpointsResponse $endpoints_response;
}

class DeleteVoiceChannelRequest {
  public __string $application_id;
}

class DeleteVoiceChannelResponse {
  public VoiceChannelResponse $voice_channel_response;
}

class DeleteVoiceTemplateRequest {
  public __string $template_name;
  public __string $version;
}

class DeleteVoiceTemplateResponse {
  public MessageBody $message_body;
}

class DeliveryStatus {
}

class DimensionType {
}

class DirectMessageConfiguration {
  public ADMMessage $adm_message;
  public APNSMessage $apns_message;
  public BaiduMessage $baidu_message;
  public DefaultMessage $default_message;
  public DefaultPushNotificationMessage $default_push_notification_message;
  public EmailMessage $email_message;
  public GCMMessage $gcm_message;
  public SMSMessage $sms_message;
  public VoiceMessage $voice_message;
}

class Duration {
}

class EmailChannelRequest {
  public __string $configuration_set;
  public __boolean $enabled;
  public __string $from_address;
  public __string $identity;
  public __string $role_arn;
}

class EmailChannelResponse {
  public __string $application_id;
  public __string $configuration_set;
  public __string $creation_date;
  public __boolean $enabled;
  public __string $from_address;
  public __boolean $has_credential;
  public __string $id;
  public __string $identity;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __integer $messages_per_second;
  public __string $platform;
  public __string $role_arn;
  public __integer $version;
}

class EmailMessage {
  public __string $body;
  public __string $feedback_forwarding_address;
  public __string $from_address;
  public RawEmail $raw_email;
  public ListOf__string $reply_to_addresses;
  public SimpleEmail $simple_email;
  public MapOfListOf__string $substitutions;
}

class EmailMessageActivity {
  public JourneyEmailMessage $message_config;
  public __string $next_activity;
  public __string $template_name;
  public __string $template_version;
}

class EmailTemplateRequest {
  public __string $default_substitutions;
  public __string $html_part;
  public __string $recommender_id;
  public __string $subject;
  public __string $template_description;
  public __string $text_part;
  public MapOf__string $tags;
}

class EmailTemplateResponse {
  public __string $arn;
  public __string $creation_date;
  public __string $default_substitutions;
  public __string $html_part;
  public __string $last_modified_date;
  public __string $recommender_id;
  public __string $subject;
  public __string $template_description;
  public __string $template_name;
  public TemplateType $template_type;
  public __string $text_part;
  public __string $version;
  public MapOf__string $tags;
}

class EndpointBatchItem {
  public __string $address;
  public MapOfListOf__string $attributes;
  public ChannelType $channel_type;
  public EndpointDemographic $demographic;
  public __string $effective_date;
  public __string $endpoint_status;
  public __string $id;
  public EndpointLocation $location;
  public MapOf__double $metrics;
  public __string $opt_out;
  public __string $request_id;
  public EndpointUser $user;
}

class EndpointBatchRequest {
  public ListOfEndpointBatchItem $item;
}

class EndpointDemographic {
  public __string $app_version;
  public __string $locale;
  public __string $make;
  public __string $model;
  public __string $model_version;
  public __string $platform;
  public __string $platform_version;
  public __string $timezone;
}

class EndpointItemResponse {
  public __string $message;
  public __integer $status_code;
}

class EndpointLocation {
  public __string $city;
  public __string $country;
  public __double $latitude;
  public __double $longitude;
  public __string $postal_code;
  public __string $region;
}

class EndpointMessageResult {
  public __string $address;
  public DeliveryStatus $delivery_status;
  public __string $message_id;
  public __integer $status_code;
  public __string $status_message;
  public __string $updated_token;
}

class EndpointRequest {
  public __string $address;
  public MapOfListOf__string $attributes;
  public ChannelType $channel_type;
  public EndpointDemographic $demographic;
  public __string $effective_date;
  public __string $endpoint_status;
  public EndpointLocation $location;
  public MapOf__double $metrics;
  public __string $opt_out;
  public __string $request_id;
  public EndpointUser $user;
}

class EndpointResponse {
  public __string $address;
  public __string $application_id;
  public MapOfListOf__string $attributes;
  public ChannelType $channel_type;
  public __string $cohort_id;
  public __string $creation_date;
  public EndpointDemographic $demographic;
  public __string $effective_date;
  public __string $endpoint_status;
  public __string $id;
  public EndpointLocation $location;
  public MapOf__double $metrics;
  public __string $opt_out;
  public __string $request_id;
  public EndpointUser $user;
}

class EndpointSendConfiguration {
  public __string $body_override;
  public MapOf__string $context;
  public __string $raw_content;
  public MapOfListOf__string $substitutions;
  public __string $title_override;
}

class EndpointUser {
  public MapOfListOf__string $user_attributes;
  public __string $user_id;
}

class EndpointsResponse {
  public ListOfEndpointResponse $item;
}

class Event {
  public __string $app_package_name;
  public __string $app_title;
  public __string $app_version_code;
  public MapOf__string $attributes;
  public __string $client_sdk_version;
  public __string $event_type;
  public MapOf__double $metrics;
  public __string $sdk_name;
  public Session $session;
  public __string $timestamp;
}

class EventCondition {
  public EventDimensions $dimensions;
  public __string $message_activity;
}

class EventDimensions {
  public MapOfAttributeDimension $attributes;
  public SetDimension $event_type;
  public MapOfMetricDimension $metrics;
}

class EventItemResponse {
  public __string $message;
  public __integer $status_code;
}

class EventStream {
  public __string $application_id;
  public __string $destination_stream_arn;
  public __string $external_id;
  public __string $last_modified_date;
  public __string $last_updated_by;
  public __string $role_arn;
}

class EventsBatch {
  public PublicEndpoint $endpoint;
  public MapOfEvent $events;
}

class EventsRequest {
  public MapOfEventsBatch $batch_item;
}

class EventsResponse {
  public MapOfItemResponse $results;
}

class ExportJobRequest {
  public __string $role_arn;
  public __string $s_3_url_prefix;
  public __string $segment_id;
  public __integer $segment_version;
}

class ExportJobResource {
  public __string $role_arn;
  public __string $s_3_url_prefix;
  public __string $segment_id;
  public __integer $segment_version;
}

class ExportJobResponse {
  public __string $application_id;
  public __integer $completed_pieces;
  public __string $completion_date;
  public __string $creation_date;
  public ExportJobResource $definition;
  public __integer $failed_pieces;
  public ListOf__string $failures;
  public __string $id;
  public JobStatus $job_status;
  public __integer $total_failures;
  public __integer $total_pieces;
  public __integer $total_processed;
  public __string $type;
}

class ExportJobsResponse {
  public ListOfExportJobResponse $item;
  public __string $next_token;
}

class FilterType {
}

class ForbiddenException {
  public __string $message;
  public __string $request_id;
}

class Format {
}

class Frequency {
}

class GCMChannelRequest {
  public __string $api_key;
  public __boolean $enabled;
}

class GCMChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __string $credential;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __string $platform;
  public __integer $version;
}

class GCMMessage {
  public Action $action;
  public __string $body;
  public __string $collapse_key;
  public MapOf__string $data;
  public __string $icon_reference;
  public __string $image_icon_url;
  public __string $image_url;
  public __string $priority;
  public __string $raw_content;
  public __string $restricted_package_name;
  public __boolean $silent_push;
  public __string $small_image_icon_url;
  public __string $sound;
  public MapOfListOf__string $substitutions;
  public __integer $time_to_live;
  public __string $title;
  public __string $url;
}

class GPSCoordinates {
  public __double $latitude;
  public __double $longitude;
}

class GPSPointDimension {
  public GPSCoordinates $coordinates;
  public __double $range_in_kilometers;
}

class GetAdmChannelRequest {
  public __string $application_id;
}

class GetAdmChannelResponse {
  public ADMChannelResponse $adm_channel_response;
}

class GetApnsChannelRequest {
  public __string $application_id;
}

class GetApnsChannelResponse {
  public APNSChannelResponse $apns_channel_response;
}

class GetApnsSandboxChannelRequest {
  public __string $application_id;
}

class GetApnsSandboxChannelResponse {
  public APNSSandboxChannelResponse $apns_sandbox_channel_response;
}

class GetApnsVoipChannelRequest {
  public __string $application_id;
}

class GetApnsVoipChannelResponse {
  public APNSVoipChannelResponse $apns_voip_channel_response;
}

class GetApnsVoipSandboxChannelRequest {
  public __string $application_id;
}

class GetApnsVoipSandboxChannelResponse {
  public APNSVoipSandboxChannelResponse $apns_voip_sandbox_channel_response;
}

class GetAppRequest {
  public __string $application_id;
}

class GetAppResponse {
  public ApplicationResponse $application_response;
}

class GetApplicationDateRangeKpiRequest {
  public __string $application_id;
  public __timestampIso8601 $end_time;
  public __string $kpi_name;
  public __string $next_token;
  public __string $page_size;
  public __timestampIso8601 $start_time;
}

class GetApplicationDateRangeKpiResponse {
  public ApplicationDateRangeKpiResponse $application_date_range_kpi_response;
}

class GetApplicationSettingsRequest {
  public __string $application_id;
}

class GetApplicationSettingsResponse {
  public ApplicationSettingsResource $application_settings_resource;
}

class GetAppsRequest {
  public __string $page_size;
  public __string $token;
}

class GetAppsResponse {
  public ApplicationsResponse $applications_response;
}

class GetBaiduChannelRequest {
  public __string $application_id;
}

class GetBaiduChannelResponse {
  public BaiduChannelResponse $baidu_channel_response;
}

class GetCampaignActivitiesRequest {
  public __string $application_id;
  public __string $campaign_id;
  public __string $page_size;
  public __string $token;
}

class GetCampaignActivitiesResponse {
  public ActivitiesResponse $activities_response;
}

class GetCampaignDateRangeKpiRequest {
  public __string $application_id;
  public __string $campaign_id;
  public __timestampIso8601 $end_time;
  public __string $kpi_name;
  public __string $next_token;
  public __string $page_size;
  public __timestampIso8601 $start_time;
}

class GetCampaignDateRangeKpiResponse {
  public CampaignDateRangeKpiResponse $campaign_date_range_kpi_response;
}

class GetCampaignRequest {
  public __string $application_id;
  public __string $campaign_id;
}

class GetCampaignResponse {
  public CampaignResponse $campaign_response;
}

class GetCampaignVersionRequest {
  public __string $application_id;
  public __string $campaign_id;
  public __string $version;
}

class GetCampaignVersionResponse {
  public CampaignResponse $campaign_response;
}

class GetCampaignVersionsRequest {
  public __string $application_id;
  public __string $campaign_id;
  public __string $page_size;
  public __string $token;
}

class GetCampaignVersionsResponse {
  public CampaignsResponse $campaigns_response;
}

class GetCampaignsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;
}

class GetCampaignsResponse {
  public CampaignsResponse $campaigns_response;
}

class GetChannelsRequest {
  public __string $application_id;
}

class GetChannelsResponse {
  public ChannelsResponse $channels_response;
}

class GetEmailChannelRequest {
  public __string $application_id;
}

class GetEmailChannelResponse {
  public EmailChannelResponse $email_channel_response;
}

class GetEmailTemplateRequest {
  public __string $template_name;
  public __string $version;
}

class GetEmailTemplateResponse {
  public EmailTemplateResponse $email_template_response;
}

class GetEndpointRequest {
  public __string $application_id;
  public __string $endpoint_id;
}

class GetEndpointResponse {
  public EndpointResponse $endpoint_response;
}

class GetEventStreamRequest {
  public __string $application_id;
}

class GetEventStreamResponse {
  public EventStream $event_stream;
}

class GetExportJobRequest {
  public __string $application_id;
  public __string $job_id;
}

class GetExportJobResponse {
  public ExportJobResponse $export_job_response;
}

class GetExportJobsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;
}

class GetExportJobsResponse {
  public ExportJobsResponse $export_jobs_response;
}

class GetGcmChannelRequest {
  public __string $application_id;
}

class GetGcmChannelResponse {
  public GCMChannelResponse $gcm_channel_response;
}

class GetImportJobRequest {
  public __string $application_id;
  public __string $job_id;
}

class GetImportJobResponse {
  public ImportJobResponse $import_job_response;
}

class GetImportJobsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;
}

class GetImportJobsResponse {
  public ImportJobsResponse $import_jobs_response;
}

class GetJourneyDateRangeKpiRequest {
  public __string $application_id;
  public __timestampIso8601 $end_time;
  public __string $journey_id;
  public __string $kpi_name;
  public __string $next_token;
  public __string $page_size;
  public __timestampIso8601 $start_time;
}

class GetJourneyDateRangeKpiResponse {
  public JourneyDateRangeKpiResponse $journey_date_range_kpi_response;
}

class GetJourneyExecutionActivityMetricsRequest {
  public __string $application_id;
  public __string $journey_activity_id;
  public __string $journey_id;
  public __string $next_token;
  public __string $page_size;
}

class GetJourneyExecutionActivityMetricsResponse {
  public JourneyExecutionActivityMetricsResponse $journey_execution_activity_metrics_response;
}

class GetJourneyExecutionMetricsRequest {
  public __string $application_id;
  public __string $journey_id;
  public __string $next_token;
  public __string $page_size;
}

class GetJourneyExecutionMetricsResponse {
  public JourneyExecutionMetricsResponse $journey_execution_metrics_response;
}

class GetJourneyRequest {
  public __string $application_id;
  public __string $journey_id;
}

class GetJourneyResponse {
  public JourneyResponse $journey_response;
}

class GetPushTemplateRequest {
  public __string $template_name;
  public __string $version;
}

class GetPushTemplateResponse {
  public PushNotificationTemplateResponse $push_notification_template_response;
}

class GetRecommenderConfigurationRequest {
  public __string $recommender_id;
}

class GetRecommenderConfigurationResponse {
  public RecommenderConfigurationResponse $recommender_configuration_response;
}

class GetRecommenderConfigurationsRequest {
  public __string $page_size;
  public __string $token;
}

class GetRecommenderConfigurationsResponse {
  public ListRecommenderConfigurationsResponse $list_recommender_configurations_response;
}

class GetSegmentExportJobsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $segment_id;
  public __string $token;
}

class GetSegmentExportJobsResponse {
  public ExportJobsResponse $export_jobs_response;
}

class GetSegmentImportJobsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $segment_id;
  public __string $token;
}

class GetSegmentImportJobsResponse {
  public ImportJobsResponse $import_jobs_response;
}

class GetSegmentRequest {
  public __string $application_id;
  public __string $segment_id;
}

class GetSegmentResponse {
  public SegmentResponse $segment_response;
}

class GetSegmentVersionRequest {
  public __string $application_id;
  public __string $segment_id;
  public __string $version;
}

class GetSegmentVersionResponse {
  public SegmentResponse $segment_response;
}

class GetSegmentVersionsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $segment_id;
  public __string $token;
}

class GetSegmentVersionsResponse {
  public SegmentsResponse $segments_response;
}

class GetSegmentsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;
}

class GetSegmentsResponse {
  public SegmentsResponse $segments_response;
}

class GetSmsChannelRequest {
  public __string $application_id;
}

class GetSmsChannelResponse {
  public SMSChannelResponse $sms_channel_response;
}

class GetSmsTemplateRequest {
  public __string $template_name;
  public __string $version;
}

class GetSmsTemplateResponse {
  public SMSTemplateResponse $sms_template_response;
}

class GetUserEndpointsRequest {
  public __string $application_id;
  public __string $user_id;
}

class GetUserEndpointsResponse {
  public EndpointsResponse $endpoints_response;
}

class GetVoiceChannelRequest {
  public __string $application_id;
}

class GetVoiceChannelResponse {
  public VoiceChannelResponse $voice_channel_response;
}

class GetVoiceTemplateRequest {
  public __string $template_name;
  public __string $version;
}

class GetVoiceTemplateResponse {
  public VoiceTemplateResponse $voice_template_response;
}

class HoldoutActivity {
  public __string $next_activity;
  public __integer $percentage;
}

class ImportJobRequest {
  public __boolean $define_segment;
  public __string $external_id;
  public Format $format;
  public __boolean $register_endpoints;
  public __string $role_arn;
  public __string $s_3_url;
  public __string $segment_id;
  public __string $segment_name;
}

class ImportJobResource {
  public __boolean $define_segment;
  public __string $external_id;
  public Format $format;
  public __boolean $register_endpoints;
  public __string $role_arn;
  public __string $s_3_url;
  public __string $segment_id;
  public __string $segment_name;
}

class ImportJobResponse {
  public __string $application_id;
  public __integer $completed_pieces;
  public __string $completion_date;
  public __string $creation_date;
  public ImportJobResource $definition;
  public __integer $failed_pieces;
  public ListOf__string $failures;
  public __string $id;
  public JobStatus $job_status;
  public __integer $total_failures;
  public __integer $total_pieces;
  public __integer $total_processed;
  public __string $type;
}

class ImportJobsResponse {
  public ListOfImportJobResponse $item;
  public __string $next_token;
}

class Include {
}

class InternalServerErrorException {
  public __string $message;
  public __string $request_id;
}

class ItemResponse {
  public EndpointItemResponse $endpoint_item_response;
  public MapOfEventItemResponse $events_item_response;
}

class JobStatus {
}

class JourneyDateRangeKpiResponse {
  public __string $application_id;
  public __timestampIso8601 $end_time;
  public __string $journey_id;
  public __string $kpi_name;
  public BaseKpiResult $kpi_result;
  public __string $next_token;
  public __timestampIso8601 $start_time;
}

class JourneyEmailMessage {
  public __string $from_address;
}

class JourneyExecutionActivityMetricsResponse {
  public __string $activity_type;
  public __string $application_id;
  public __string $journey_activity_id;
  public __string $journey_id;
  public __string $last_evaluated_time;
  public MapOf__string $metrics;
}

class JourneyExecutionMetricsResponse {
  public __string $application_id;
  public __string $journey_id;
  public __string $last_evaluated_time;
  public MapOf__string $metrics;
}

class JourneyLimits {
  public __integer $daily_cap;
  public __integer $endpoint_reentry_cap;
  public __integer $messages_per_second;
}

class JourneyResponse {
  public MapOfActivity $activities;
  public __string $application_id;
  public __string $creation_date;
  public __string $id;
  public __string $last_modified_date;
  public JourneyLimits $limits;
  public __boolean $local_time;
  public __string $name;
  public QuietTime $quiet_time;
  public __string $refresh_frequency;
  public JourneySchedule $schedule;
  public __string $start_activity;
  public StartCondition $start_condition;
  public State $state;
  public MapOf__string $tags;
}

class JourneySchedule {
  public __timestampIso8601 $end_time;
  public __timestampIso8601 $start_time;
  public __string $timezone;
}

class JourneyStateRequest {
  public State $state;
}

class JourneysResponse {
  public ListOfJourneyResponse $item;
  public __string $next_token;
}

class ListJourneysRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;
}

class ListJourneysResponse {
  public JourneysResponse $journeys_response;
}

class ListOfActivityResponse {
}

class ListOfApplicationResponse {
}

class ListOfCampaignResponse {
}

class ListOfEndpointBatchItem {
}

class ListOfEndpointResponse {
}

class ListOfExportJobResponse {
}

class ListOfImportJobResponse {
}

class ListOfJourneyResponse {
}

class ListOfMultiConditionalBranch {
}

class ListOfRandomSplitEntry {
}

class ListOfRecommenderConfigurationResponse {
}

class ListOfResultRow {
}

class ListOfResultRowValue {
}

class ListOfSegmentDimensions {
}

class ListOfSegmentGroup {
}

class ListOfSegmentReference {
}

class ListOfSegmentResponse {
}

class ListOfSimpleCondition {
}

class ListOfTemplateResponse {
}

class ListOfTemplateVersionResponse {
}

class ListOfTreatmentResource {
}

class ListOfWriteTreatmentResource {
}

class ListOf__EndpointTypesElement {
}

class ListOf__string {
}

class ListRecommenderConfigurationsResponse {
  public ListOfRecommenderConfigurationResponse $item;
  public __string $next_token;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public TagsModel $tags_model;
}

class ListTemplateVersionsRequest {
  public __string $next_token;
  public __string $page_size;
  public __string $template_name;
  public __string $template_type;
}

class ListTemplateVersionsResponse {
  public TemplateVersionsResponse $template_versions_response;
}

class ListTemplatesRequest {
  public __string $next_token;
  public __string $page_size;
  public __string $prefix;
  public __string $template_type;
}

class ListTemplatesResponse {
  public TemplatesResponse $templates_response;
}

class MapOfActivity {
}

class MapOfAddressConfiguration {
}

class MapOfAttributeDimension {
}

class MapOfChannelResponse {
}

class MapOfEndpointMessageResult {
}

class MapOfEndpointSendConfiguration {
}

class MapOfEvent {
}

class MapOfEventItemResponse {
}

class MapOfEventsBatch {
}

class MapOfItemResponse {
}

class MapOfListOf__string {
}

class MapOfMapOfEndpointMessageResult {
}

class MapOfMessageResult {
}

class MapOfMetricDimension {
}

class MapOf__double {
}

class MapOf__integer {
}

class MapOf__string {
}

class Message {
  public Action $action;
  public __string $body;
  public __string $image_icon_url;
  public __string $image_small_icon_url;
  public __string $image_url;
  public __string $json_body;
  public __string $media_url;
  public __string $raw_content;
  public __boolean $silent_push;
  public __integer $time_to_live;
  public __string $title;
  public __string $url;
}

class MessageBody {
  public __string $message;
  public __string $request_id;
}

class MessageConfiguration {
  public Message $adm_message;
  public Message $apns_message;
  public Message $baidu_message;
  public CampaignCustomMessage $custom_message;
  public Message $default_message;
  public CampaignEmailMessage $email_message;
  public Message $gcm_message;
  public CampaignSmsMessage $sms_message;
}

class MessageRequest {
  public MapOfAddressConfiguration $addresses;
  public MapOf__string $context;
  public MapOfEndpointSendConfiguration $endpoints;
  public DirectMessageConfiguration $message_configuration;
  public TemplateConfiguration $template_configuration;
  public __string $trace_id;
}

class MessageResponse {
  public __string $application_id;
  public MapOfEndpointMessageResult $endpoint_result;
  public __string $request_id;
  public MapOfMessageResult $result;
}

class MessageResult {
  public DeliveryStatus $delivery_status;
  public __string $message_id;
  public __integer $status_code;
  public __string $status_message;
  public __string $updated_token;
}

class MessageType {
}

class MethodNotAllowedException {
  public __string $message;
  public __string $request_id;
}

class MetricDimension {
  public __string $comparison_operator;
  public __double $value;
}

class Mode {
}

class MultiConditionalBranch {
  public SimpleCondition $condition;
  public __string $next_activity;
}

class MultiConditionalSplitActivity {
  public ListOfMultiConditionalBranch $branches;
  public __string $default_activity;
  public WaitTime $evaluation_wait_time;
}

class NotFoundException {
  public __string $message;
  public __string $request_id;
}

class NumberValidateRequest {
  public __string $iso_country_code;
  public __string $phone_number;
}

class NumberValidateResponse {
  public __string $carrier;
  public __string $city;
  public __string $cleansed_phone_number_e_164;
  public __string $cleansed_phone_number_national;
  public __string $country;
  public __string $country_code_iso_2;
  public __string $country_code_numeric;
  public __string $county;
  public __string $original_country_code_iso_2;
  public __string $original_phone_number;
  public __string $phone_type;
  public __integer $phone_type_code;
  public __string $timezone;
  public __string $zip_code;
}

class Operator {
}

class PayloadTooLargeException {
  public __string $message;
  public __string $request_id;
}

class PhoneNumberValidateRequest {
  public NumberValidateRequest $number_validate_request;
}

class PhoneNumberValidateResponse {
  public NumberValidateResponse $number_validate_response;
}

class PublicEndpoint {
  public __string $address;
  public MapOfListOf__string $attributes;
  public ChannelType $channel_type;
  public EndpointDemographic $demographic;
  public __string $effective_date;
  public __string $endpoint_status;
  public EndpointLocation $location;
  public MapOf__double $metrics;
  public __string $opt_out;
  public __string $request_id;
  public EndpointUser $user;
}

class PushNotificationTemplateRequest {
  public AndroidPushNotificationTemplate $adm;
  public APNSPushNotificationTemplate $apns;
  public AndroidPushNotificationTemplate $baidu;
  public DefaultPushNotificationTemplate $default;
  public __string $default_substitutions;
  public AndroidPushNotificationTemplate $gcm;
  public __string $recommender_id;
  public __string $template_description;
  public MapOf__string $tags;
}

class PushNotificationTemplateResponse {
  public AndroidPushNotificationTemplate $adm;
  public APNSPushNotificationTemplate $apns;
  public __string $arn;
  public AndroidPushNotificationTemplate $baidu;
  public __string $creation_date;
  public DefaultPushNotificationTemplate $default;
  public __string $default_substitutions;
  public AndroidPushNotificationTemplate $gcm;
  public __string $last_modified_date;
  public __string $recommender_id;
  public __string $template_description;
  public __string $template_name;
  public TemplateType $template_type;
  public __string $version;
  public MapOf__string $tags;
}

class PutEventStreamRequest {
  public __string $application_id;
  public WriteEventStream $write_event_stream;
}

class PutEventStreamResponse {
  public EventStream $event_stream;
}

class PutEventsRequest {
  public __string $application_id;
  public EventsRequest $events_request;
}

class PutEventsResponse {
  public EventsResponse $events_response;
}

class QuietTime {
  public __string $end;
  public __string $start;
}

class RandomSplitActivity {
  public ListOfRandomSplitEntry $branches;
}

class RandomSplitEntry {
  public __string $next_activity;
  public __integer $percentage;
}

class RawEmail {
  public __blob $data;
}

class RecencyDimension {
  public Duration $duration;
  public RecencyType $recency_type;
}

class RecencyType {
}

class RecommenderConfigurationResponse {
  public MapOf__string $attributes;
  public __string $creation_date;
  public __string $description;
  public __string $id;
  public __string $last_modified_date;
  public __string $name;
  public __string $recommendation_provider_id_type;
  public __string $recommendation_provider_role_arn;
  public __string $recommendation_provider_uri;
  public __string $recommendation_transformer_uri;
  public __string $recommendations_display_name;
  public __integer $recommendations_per_message;
}

class RemoveAttributesRequest {
  public __string $application_id;
  public __string $attribute_type;
  public UpdateAttributesRequest $update_attributes_request;
}

class RemoveAttributesResponse {
  public AttributesResource $attributes_resource;
}

class ResultRow {
  public ListOfResultRowValue $grouped_bys;
  public ListOfResultRowValue $values;
}

class ResultRowValue {
  public __string $key;
  public __string $type;
  public __string $value;
}

class SMSChannelRequest {
  public __boolean $enabled;
  public __string $sender_id;
  public __string $short_code;
}

class SMSChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __string $platform;
  public __integer $promotional_messages_per_second;
  public __string $sender_id;
  public __string $short_code;
  public __integer $transactional_messages_per_second;
  public __integer $version;
}

class SMSMessage {
  public __string $body;
  public __string $keyword;
  public __string $media_url;
  public MessageType $message_type;
  public __string $origination_number;
  public __string $sender_id;
  public MapOfListOf__string $substitutions;
}

class SMSTemplateRequest {
  public __string $body;
  public __string $default_substitutions;
  public __string $recommender_id;
  public __string $template_description;
  public MapOf__string $tags;
}

class SMSTemplateResponse {
  public __string $arn;
  public __string $body;
  public __string $creation_date;
  public __string $default_substitutions;
  public __string $last_modified_date;
  public __string $recommender_id;
  public __string $template_description;
  public __string $template_name;
  public TemplateType $template_type;
  public __string $version;
  public MapOf__string $tags;
}

class Schedule {
  public __string $end_time;
  public CampaignEventFilter $event_filter;
  public Frequency $frequency;
  public __boolean $is_local_time;
  public QuietTime $quiet_time;
  public __string $start_time;
  public __string $timezone;
}

class SegmentBehaviors {
  public RecencyDimension $recency;
}

class SegmentCondition {
  public __string $segment_id;
}

class SegmentDemographics {
  public SetDimension $app_version;
  public SetDimension $channel;
  public SetDimension $device_type;
  public SetDimension $make;
  public SetDimension $model;
  public SetDimension $platform;
}

class SegmentDimensions {
  public MapOfAttributeDimension $attributes;
  public SegmentBehaviors $behavior;
  public SegmentDemographics $demographic;
  public SegmentLocation $location;
  public MapOfMetricDimension $metrics;
  public MapOfAttributeDimension $user_attributes;
}

class SegmentGroup {
  public ListOfSegmentDimensions $dimensions;
  public ListOfSegmentReference $source_segments;
  public SourceType $source_type;
  public Type $type;
}

class SegmentGroupList {
  public ListOfSegmentGroup $groups;
  public Include $include;
}

class SegmentImportResource {
  public MapOf__integer $channel_counts;
  public __string $external_id;
  public Format $format;
  public __string $role_arn;
  public __string $s_3_url;
  public __integer $size;
}

class SegmentLocation {
  public SetDimension $country;
  public GPSPointDimension $gps_point;
}

class SegmentReference {
  public __string $id;
  public __integer $version;
}

class SegmentResponse {
  public __string $application_id;
  public __string $arn;
  public __string $creation_date;
  public SegmentDimensions $dimensions;
  public __string $id;
  public SegmentImportResource $import_definition;
  public __string $last_modified_date;
  public __string $name;
  public SegmentGroupList $segment_groups;
  public SegmentType $segment_type;
  public __integer $version;
  public MapOf__string $tags;
}

class SegmentType {
}

class SegmentsResponse {
  public ListOfSegmentResponse $item;
  public __string $next_token;
}

class SendMessagesRequest {
  public __string $application_id;
  public MessageRequest $message_request;
}

class SendMessagesResponse {
  public MessageResponse $message_response;
}

class SendUsersMessageRequest {
  public MapOf__string $context;
  public DirectMessageConfiguration $message_configuration;
  public TemplateConfiguration $template_configuration;
  public __string $trace_id;
  public MapOfEndpointSendConfiguration $users;
}

class SendUsersMessageResponse {
  public __string $application_id;
  public __string $request_id;
  public MapOfMapOfEndpointMessageResult $result;
}

class SendUsersMessagesRequest {
  public __string $application_id;
  public SendUsersMessageRequest $send_users_message_request;
}

class SendUsersMessagesResponse {
  public SendUsersMessageResponse $send_users_message_response;
}

class Session {
  public __integer $duration;
  public __string $id;
  public __string $start_timestamp;
  public __string $stop_timestamp;
}

class SetDimension {
  public DimensionType $dimension_type;
  public ListOf__string $values;
}

class SimpleCondition {
  public EventCondition $event_condition;
  public SegmentCondition $segment_condition;
  public SegmentDimensions $segment_dimensions;
}

class SimpleEmail {
  public SimpleEmailPart $html_part;
  public SimpleEmailPart $subject;
  public SimpleEmailPart $text_part;
}

class SimpleEmailPart {
  public __string $charset;
  public __string $data;
}

class SourceType {
}

class StartCondition {
  public __string $description;
  public SegmentCondition $segment_start_condition;
}

class State {
}

class TagResourceRequest {
  public __string $resource_arn;
  public TagsModel $tags_model;
}

class TagsModel {
  public MapOf__string $tags;
}

class Template {
  public __string $name;
  public __string $version;
}

class TemplateActiveVersionRequest {
  public __string $version;
}

class TemplateConfiguration {
  public Template $email_template;
  public Template $push_template;
  public Template $sms_template;
  public Template $voice_template;
}

class TemplateResponse {
  public __string $arn;
  public __string $creation_date;
  public __string $default_substitutions;
  public __string $last_modified_date;
  public __string $template_description;
  public __string $template_name;
  public TemplateType $template_type;
  public __string $version;
  public MapOf__string $tags;
}

class TemplateType {
}

class TemplateVersionResponse {
  public __string $creation_date;
  public __string $default_substitutions;
  public __string $last_modified_date;
  public __string $template_description;
  public __string $template_name;
  public __string $template_type;
  public __string $version;
}

class TemplateVersionsResponse {
  public ListOfTemplateVersionResponse $item;
  public __string $message;
  public __string $next_token;
  public __string $request_id;
}

class TemplatesResponse {
  public ListOfTemplateResponse $item;
  public __string $next_token;
}

class TooManyRequestsException {
  public __string $message;
  public __string $request_id;
}

class TreatmentResource {
  public CustomDeliveryConfiguration $custom_delivery_configuration;
  public __string $id;
  public MessageConfiguration $message_configuration;
  public Schedule $schedule;
  public __integer $size_percent;
  public CampaignState $state;
  public TemplateConfiguration $template_configuration;
  public __string $treatment_description;
  public __string $treatment_name;
}

class Type {
}

class UntagResourceRequest {
  public __string $resource_arn;
  public ListOf__string $tag_keys;
}

class UpdateAdmChannelRequest {
  public ADMChannelRequest $adm_channel_request;
  public __string $application_id;
}

class UpdateAdmChannelResponse {
  public ADMChannelResponse $adm_channel_response;
}

class UpdateApnsChannelRequest {
  public APNSChannelRequest $apns_channel_request;
  public __string $application_id;
}

class UpdateApnsChannelResponse {
  public APNSChannelResponse $apns_channel_response;
}

class UpdateApnsSandboxChannelRequest {
  public APNSSandboxChannelRequest $apns_sandbox_channel_request;
  public __string $application_id;
}

class UpdateApnsSandboxChannelResponse {
  public APNSSandboxChannelResponse $apns_sandbox_channel_response;
}

class UpdateApnsVoipChannelRequest {
  public APNSVoipChannelRequest $apns_voip_channel_request;
  public __string $application_id;
}

class UpdateApnsVoipChannelResponse {
  public APNSVoipChannelResponse $apns_voip_channel_response;
}

class UpdateApnsVoipSandboxChannelRequest {
  public APNSVoipSandboxChannelRequest $apns_voip_sandbox_channel_request;
  public __string $application_id;
}

class UpdateApnsVoipSandboxChannelResponse {
  public APNSVoipSandboxChannelResponse $apns_voip_sandbox_channel_response;
}

class UpdateApplicationSettingsRequest {
  public __string $application_id;
  public WriteApplicationSettingsRequest $write_application_settings_request;
}

class UpdateApplicationSettingsResponse {
  public ApplicationSettingsResource $application_settings_resource;
}

class UpdateAttributesRequest {
  public ListOf__string $blacklist;
}

class UpdateBaiduChannelRequest {
  public __string $application_id;
  public BaiduChannelRequest $baidu_channel_request;
}

class UpdateBaiduChannelResponse {
  public BaiduChannelResponse $baidu_channel_response;
}

class UpdateCampaignRequest {
  public __string $application_id;
  public __string $campaign_id;
  public WriteCampaignRequest $write_campaign_request;
}

class UpdateCampaignResponse {
  public CampaignResponse $campaign_response;
}

class UpdateEmailChannelRequest {
  public __string $application_id;
  public EmailChannelRequest $email_channel_request;
}

class UpdateEmailChannelResponse {
  public EmailChannelResponse $email_channel_response;
}

class UpdateEmailTemplateRequest {
  public __boolean $create_new_version;
  public EmailTemplateRequest $email_template_request;
  public __string $template_name;
  public __string $version;
}

class UpdateEmailTemplateResponse {
  public MessageBody $message_body;
}

class UpdateEndpointRequest {
  public __string $application_id;
  public __string $endpoint_id;
  public EndpointRequest $endpoint_request;
}

class UpdateEndpointResponse {
  public MessageBody $message_body;
}

class UpdateEndpointsBatchRequest {
  public __string $application_id;
  public EndpointBatchRequest $endpoint_batch_request;
}

class UpdateEndpointsBatchResponse {
  public MessageBody $message_body;
}

class UpdateGcmChannelRequest {
  public __string $application_id;
  public GCMChannelRequest $gcm_channel_request;
}

class UpdateGcmChannelResponse {
  public GCMChannelResponse $gcm_channel_response;
}

class UpdateJourneyRequest {
  public __string $application_id;
  public __string $journey_id;
  public WriteJourneyRequest $write_journey_request;
}

class UpdateJourneyResponse {
  public JourneyResponse $journey_response;
}

class UpdateJourneyStateRequest {
  public __string $application_id;
  public __string $journey_id;
  public JourneyStateRequest $journey_state_request;
}

class UpdateJourneyStateResponse {
  public JourneyResponse $journey_response;
}

class UpdatePushTemplateRequest {
  public __boolean $create_new_version;
  public PushNotificationTemplateRequest $push_notification_template_request;
  public __string $template_name;
  public __string $version;
}

class UpdatePushTemplateResponse {
  public MessageBody $message_body;
}

class UpdateRecommenderConfiguration {
  public MapOf__string $attributes;
  public __string $description;
  public __string $name;
  public __string $recommendation_provider_id_type;
  public __string $recommendation_provider_role_arn;
  public __string $recommendation_provider_uri;
  public __string $recommendation_transformer_uri;
  public __string $recommendations_display_name;
  public __integer $recommendations_per_message;
}

class UpdateRecommenderConfigurationRequest {
  public __string $recommender_id;
  public UpdateRecommenderConfiguration $update_recommender_configuration;
}

class UpdateRecommenderConfigurationResponse {
  public RecommenderConfigurationResponse $recommender_configuration_response;
}

class UpdateSegmentRequest {
  public __string $application_id;
  public __string $segment_id;
  public WriteSegmentRequest $write_segment_request;
}

class UpdateSegmentResponse {
  public SegmentResponse $segment_response;
}

class UpdateSmsChannelRequest {
  public __string $application_id;
  public SMSChannelRequest $sms_channel_request;
}

class UpdateSmsChannelResponse {
  public SMSChannelResponse $sms_channel_response;
}

class UpdateSmsTemplateRequest {
  public __boolean $create_new_version;
  public SMSTemplateRequest $sms_template_request;
  public __string $template_name;
  public __string $version;
}

class UpdateSmsTemplateResponse {
  public MessageBody $message_body;
}

class UpdateTemplateActiveVersionRequest {
  public TemplateActiveVersionRequest $template_active_version_request;
  public __string $template_name;
  public __string $template_type;
}

class UpdateTemplateActiveVersionResponse {
  public MessageBody $message_body;
}

class UpdateVoiceChannelRequest {
  public __string $application_id;
  public VoiceChannelRequest $voice_channel_request;
}

class UpdateVoiceChannelResponse {
  public VoiceChannelResponse $voice_channel_response;
}

class UpdateVoiceTemplateRequest {
  public __boolean $create_new_version;
  public __string $template_name;
  public __string $version;
  public VoiceTemplateRequest $voice_template_request;
}

class UpdateVoiceTemplateResponse {
  public MessageBody $message_body;
}

class VoiceChannelRequest {
  public __boolean $enabled;
}

class VoiceChannelResponse {
  public __string $application_id;
  public __string $creation_date;
  public __boolean $enabled;
  public __boolean $has_credential;
  public __string $id;
  public __boolean $is_archived;
  public __string $last_modified_by;
  public __string $last_modified_date;
  public __string $platform;
  public __integer $version;
}

class VoiceMessage {
  public __string $body;
  public __string $language_code;
  public __string $origination_number;
  public MapOfListOf__string $substitutions;
  public __string $voice_id;
}

class VoiceTemplateRequest {
  public __string $body;
  public __string $default_substitutions;
  public __string $language_code;
  public __string $template_description;
  public __string $voice_id;
  public MapOf__string $tags;
}

class VoiceTemplateResponse {
  public __string $arn;
  public __string $body;
  public __string $creation_date;
  public __string $default_substitutions;
  public __string $language_code;
  public __string $last_modified_date;
  public __string $template_description;
  public __string $template_name;
  public TemplateType $template_type;
  public __string $version;
  public __string $voice_id;
  public MapOf__string $tags;
}

class WaitActivity {
  public __string $next_activity;
  public WaitTime $wait_time;
}

class WaitTime {
  public __string $wait_for;
  public __string $wait_until;
}

class WriteApplicationSettingsRequest {
  public CampaignHook $campaign_hook;
  public __boolean $cloud_watch_metrics_enabled;
  public CampaignLimits $limits;
  public QuietTime $quiet_time;
}

class WriteCampaignRequest {
  public ListOfWriteTreatmentResource $additional_treatments;
  public CustomDeliveryConfiguration $custom_delivery_configuration;
  public __string $description;
  public __integer $holdout_percent;
  public CampaignHook $hook;
  public __boolean $is_paused;
  public CampaignLimits $limits;
  public MessageConfiguration $message_configuration;
  public __string $name;
  public Schedule $schedule;
  public __string $segment_id;
  public __integer $segment_version;
  public TemplateConfiguration $template_configuration;
  public __string $treatment_description;
  public __string $treatment_name;
  public MapOf__string $tags;
}

class WriteEventStream {
  public __string $destination_stream_arn;
  public __string $role_arn;
}

class WriteJourneyRequest {
  public MapOfActivity $activities;
  public __string $creation_date;
  public __string $last_modified_date;
  public JourneyLimits $limits;
  public __boolean $local_time;
  public __string $name;
  public QuietTime $quiet_time;
  public __string $refresh_frequency;
  public JourneySchedule $schedule;
  public __string $start_activity;
  public StartCondition $start_condition;
  public State $state;
}

class WriteSegmentRequest {
  public SegmentDimensions $dimensions;
  public __string $name;
  public SegmentGroupList $segment_groups;
  public MapOf__string $tags;
}

class WriteTreatmentResource {
  public CustomDeliveryConfiguration $custom_delivery_configuration;
  public MessageConfiguration $message_configuration;
  public Schedule $schedule;
  public __integer $size_percent;
  public TemplateConfiguration $template_configuration;
  public __string $treatment_description;
  public __string $treatment_name;
}

class __EndpointTypesElement {
}

class __blob {
}

class __boolean {
}

class __double {
}

class __integer {
}

class __long {
}

class __string {
}

class __timestampIso8601 {
}

class __timestampUnix {
}

