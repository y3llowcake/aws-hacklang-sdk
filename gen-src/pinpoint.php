<?hh // strict
namespace slack\aws\pinpoint;

interface Pinpoint {
  public function CreateApp(CreateAppRequest $in): Awaitable<\Errors\Result<CreateAppResponse>>;
  public function CreateCampaign(CreateCampaignRequest $in): Awaitable<\Errors\Result<CreateCampaignResponse>>;
  public function CreateEmailTemplate(CreateEmailTemplateRequest $in): Awaitable<\Errors\Result<CreateEmailTemplateResponse>>;
  public function CreateExportJob(CreateExportJobRequest $in): Awaitable<\Errors\Result<CreateExportJobResponse>>;
  public function CreateImportJob(CreateImportJobRequest $in): Awaitable<\Errors\Result<CreateImportJobResponse>>;
  public function CreateJourney(CreateJourneyRequest $in): Awaitable<\Errors\Result<CreateJourneyResponse>>;
  public function CreatePushTemplate(CreatePushTemplateRequest $in): Awaitable<\Errors\Result<CreatePushTemplateResponse>>;
  public function CreateRecommenderConfiguration(CreateRecommenderConfigurationRequest $in): Awaitable<\Errors\Result<CreateRecommenderConfigurationResponse>>;
  public function CreateSegment(CreateSegmentRequest $in): Awaitable<\Errors\Result<CreateSegmentResponse>>;
  public function CreateSmsTemplate(CreateSmsTemplateRequest $in): Awaitable<\Errors\Result<CreateSmsTemplateResponse>>;
  public function CreateVoiceTemplate(CreateVoiceTemplateRequest $in): Awaitable<\Errors\Result<CreateVoiceTemplateResponse>>;
  public function DeleteAdmChannel(DeleteAdmChannelRequest $in): Awaitable<\Errors\Result<DeleteAdmChannelResponse>>;
  public function DeleteApnsChannel(DeleteApnsChannelRequest $in): Awaitable<\Errors\Result<DeleteApnsChannelResponse>>;
  public function DeleteApnsSandboxChannel(DeleteApnsSandboxChannelRequest $in): Awaitable<\Errors\Result<DeleteApnsSandboxChannelResponse>>;
  public function DeleteApnsVoipChannel(DeleteApnsVoipChannelRequest $in): Awaitable<\Errors\Result<DeleteApnsVoipChannelResponse>>;
  public function DeleteApnsVoipSandboxChannel(DeleteApnsVoipSandboxChannelRequest $in): Awaitable<\Errors\Result<DeleteApnsVoipSandboxChannelResponse>>;
  public function DeleteApp(DeleteAppRequest $in): Awaitable<\Errors\Result<DeleteAppResponse>>;
  public function DeleteBaiduChannel(DeleteBaiduChannelRequest $in): Awaitable<\Errors\Result<DeleteBaiduChannelResponse>>;
  public function DeleteCampaign(DeleteCampaignRequest $in): Awaitable<\Errors\Result<DeleteCampaignResponse>>;
  public function DeleteEmailChannel(DeleteEmailChannelRequest $in): Awaitable<\Errors\Result<DeleteEmailChannelResponse>>;
  public function DeleteEmailTemplate(DeleteEmailTemplateRequest $in): Awaitable<\Errors\Result<DeleteEmailTemplateResponse>>;
  public function DeleteEndpoint(DeleteEndpointRequest $in): Awaitable<\Errors\Result<DeleteEndpointResponse>>;
  public function DeleteEventStream(DeleteEventStreamRequest $in): Awaitable<\Errors\Result<DeleteEventStreamResponse>>;
  public function DeleteGcmChannel(DeleteGcmChannelRequest $in): Awaitable<\Errors\Result<DeleteGcmChannelResponse>>;
  public function DeleteJourney(DeleteJourneyRequest $in): Awaitable<\Errors\Result<DeleteJourneyResponse>>;
  public function DeletePushTemplate(DeletePushTemplateRequest $in): Awaitable<\Errors\Result<DeletePushTemplateResponse>>;
  public function DeleteRecommenderConfiguration(DeleteRecommenderConfigurationRequest $in): Awaitable<\Errors\Result<DeleteRecommenderConfigurationResponse>>;
  public function DeleteSegment(DeleteSegmentRequest $in): Awaitable<\Errors\Result<DeleteSegmentResponse>>;
  public function DeleteSmsChannel(DeleteSmsChannelRequest $in): Awaitable<\Errors\Result<DeleteSmsChannelResponse>>;
  public function DeleteSmsTemplate(DeleteSmsTemplateRequest $in): Awaitable<\Errors\Result<DeleteSmsTemplateResponse>>;
  public function DeleteUserEndpoints(DeleteUserEndpointsRequest $in): Awaitable<\Errors\Result<DeleteUserEndpointsResponse>>;
  public function DeleteVoiceChannel(DeleteVoiceChannelRequest $in): Awaitable<\Errors\Result<DeleteVoiceChannelResponse>>;
  public function DeleteVoiceTemplate(DeleteVoiceTemplateRequest $in): Awaitable<\Errors\Result<DeleteVoiceTemplateResponse>>;
  public function GetAdmChannel(GetAdmChannelRequest $in): Awaitable<\Errors\Result<GetAdmChannelResponse>>;
  public function GetApnsChannel(GetApnsChannelRequest $in): Awaitable<\Errors\Result<GetApnsChannelResponse>>;
  public function GetApnsSandboxChannel(GetApnsSandboxChannelRequest $in): Awaitable<\Errors\Result<GetApnsSandboxChannelResponse>>;
  public function GetApnsVoipChannel(GetApnsVoipChannelRequest $in): Awaitable<\Errors\Result<GetApnsVoipChannelResponse>>;
  public function GetApnsVoipSandboxChannel(GetApnsVoipSandboxChannelRequest $in): Awaitable<\Errors\Result<GetApnsVoipSandboxChannelResponse>>;
  public function GetApp(GetAppRequest $in): Awaitable<\Errors\Result<GetAppResponse>>;
  public function GetApplicationDateRangeKpi(GetApplicationDateRangeKpiRequest $in): Awaitable<\Errors\Result<GetApplicationDateRangeKpiResponse>>;
  public function GetApplicationSettings(GetApplicationSettingsRequest $in): Awaitable<\Errors\Result<GetApplicationSettingsResponse>>;
  public function GetApps(GetAppsRequest $in): Awaitable<\Errors\Result<GetAppsResponse>>;
  public function GetBaiduChannel(GetBaiduChannelRequest $in): Awaitable<\Errors\Result<GetBaiduChannelResponse>>;
  public function GetCampaign(GetCampaignRequest $in): Awaitable<\Errors\Result<GetCampaignResponse>>;
  public function GetCampaignActivities(GetCampaignActivitiesRequest $in): Awaitable<\Errors\Result<GetCampaignActivitiesResponse>>;
  public function GetCampaignDateRangeKpi(GetCampaignDateRangeKpiRequest $in): Awaitable<\Errors\Result<GetCampaignDateRangeKpiResponse>>;
  public function GetCampaignVersion(GetCampaignVersionRequest $in): Awaitable<\Errors\Result<GetCampaignVersionResponse>>;
  public function GetCampaignVersions(GetCampaignVersionsRequest $in): Awaitable<\Errors\Result<GetCampaignVersionsResponse>>;
  public function GetCampaigns(GetCampaignsRequest $in): Awaitable<\Errors\Result<GetCampaignsResponse>>;
  public function GetChannels(GetChannelsRequest $in): Awaitable<\Errors\Result<GetChannelsResponse>>;
  public function GetEmailChannel(GetEmailChannelRequest $in): Awaitable<\Errors\Result<GetEmailChannelResponse>>;
  public function GetEmailTemplate(GetEmailTemplateRequest $in): Awaitable<\Errors\Result<GetEmailTemplateResponse>>;
  public function GetEndpoint(GetEndpointRequest $in): Awaitable<\Errors\Result<GetEndpointResponse>>;
  public function GetEventStream(GetEventStreamRequest $in): Awaitable<\Errors\Result<GetEventStreamResponse>>;
  public function GetExportJob(GetExportJobRequest $in): Awaitable<\Errors\Result<GetExportJobResponse>>;
  public function GetExportJobs(GetExportJobsRequest $in): Awaitable<\Errors\Result<GetExportJobsResponse>>;
  public function GetGcmChannel(GetGcmChannelRequest $in): Awaitable<\Errors\Result<GetGcmChannelResponse>>;
  public function GetImportJob(GetImportJobRequest $in): Awaitable<\Errors\Result<GetImportJobResponse>>;
  public function GetImportJobs(GetImportJobsRequest $in): Awaitable<\Errors\Result<GetImportJobsResponse>>;
  public function GetJourney(GetJourneyRequest $in): Awaitable<\Errors\Result<GetJourneyResponse>>;
  public function GetJourneyDateRangeKpi(GetJourneyDateRangeKpiRequest $in): Awaitable<\Errors\Result<GetJourneyDateRangeKpiResponse>>;
  public function GetJourneyExecutionActivityMetrics(GetJourneyExecutionActivityMetricsRequest $in): Awaitable<\Errors\Result<GetJourneyExecutionActivityMetricsResponse>>;
  public function GetJourneyExecutionMetrics(GetJourneyExecutionMetricsRequest $in): Awaitable<\Errors\Result<GetJourneyExecutionMetricsResponse>>;
  public function GetPushTemplate(GetPushTemplateRequest $in): Awaitable<\Errors\Result<GetPushTemplateResponse>>;
  public function GetRecommenderConfiguration(GetRecommenderConfigurationRequest $in): Awaitable<\Errors\Result<GetRecommenderConfigurationResponse>>;
  public function GetRecommenderConfigurations(GetRecommenderConfigurationsRequest $in): Awaitable<\Errors\Result<GetRecommenderConfigurationsResponse>>;
  public function GetSegment(GetSegmentRequest $in): Awaitable<\Errors\Result<GetSegmentResponse>>;
  public function GetSegmentExportJobs(GetSegmentExportJobsRequest $in): Awaitable<\Errors\Result<GetSegmentExportJobsResponse>>;
  public function GetSegmentImportJobs(GetSegmentImportJobsRequest $in): Awaitable<\Errors\Result<GetSegmentImportJobsResponse>>;
  public function GetSegmentVersion(GetSegmentVersionRequest $in): Awaitable<\Errors\Result<GetSegmentVersionResponse>>;
  public function GetSegmentVersions(GetSegmentVersionsRequest $in): Awaitable<\Errors\Result<GetSegmentVersionsResponse>>;
  public function GetSegments(GetSegmentsRequest $in): Awaitable<\Errors\Result<GetSegmentsResponse>>;
  public function GetSmsChannel(GetSmsChannelRequest $in): Awaitable<\Errors\Result<GetSmsChannelResponse>>;
  public function GetSmsTemplate(GetSmsTemplateRequest $in): Awaitable<\Errors\Result<GetSmsTemplateResponse>>;
  public function GetUserEndpoints(GetUserEndpointsRequest $in): Awaitable<\Errors\Result<GetUserEndpointsResponse>>;
  public function GetVoiceChannel(GetVoiceChannelRequest $in): Awaitable<\Errors\Result<GetVoiceChannelResponse>>;
  public function GetVoiceTemplate(GetVoiceTemplateRequest $in): Awaitable<\Errors\Result<GetVoiceTemplateResponse>>;
  public function ListJourneys(ListJourneysRequest $in): Awaitable<\Errors\Result<ListJourneysResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListTemplateVersions(ListTemplateVersionsRequest $in): Awaitable<\Errors\Result<ListTemplateVersionsResponse>>;
  public function ListTemplates(ListTemplatesRequest $in): Awaitable<\Errors\Result<ListTemplatesResponse>>;
  public function PhoneNumberValidate(PhoneNumberValidateRequest $in): Awaitable<\Errors\Result<PhoneNumberValidateResponse>>;
  public function PutEventStream(PutEventStreamRequest $in): Awaitable<\Errors\Result<PutEventStreamResponse>>;
  public function PutEvents(PutEventsRequest $in): Awaitable<\Errors\Result<PutEventsResponse>>;
  public function RemoveAttributes(RemoveAttributesRequest $in): Awaitable<\Errors\Result<RemoveAttributesResponse>>;
  public function SendMessages(SendMessagesRequest $in): Awaitable<\Errors\Result<SendMessagesResponse>>;
  public function SendUsersMessages(SendUsersMessagesRequest $in): Awaitable<\Errors\Result<SendUsersMessagesResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateAdmChannel(UpdateAdmChannelRequest $in): Awaitable<\Errors\Result<UpdateAdmChannelResponse>>;
  public function UpdateApnsChannel(UpdateApnsChannelRequest $in): Awaitable<\Errors\Result<UpdateApnsChannelResponse>>;
  public function UpdateApnsSandboxChannel(UpdateApnsSandboxChannelRequest $in): Awaitable<\Errors\Result<UpdateApnsSandboxChannelResponse>>;
  public function UpdateApnsVoipChannel(UpdateApnsVoipChannelRequest $in): Awaitable<\Errors\Result<UpdateApnsVoipChannelResponse>>;
  public function UpdateApnsVoipSandboxChannel(UpdateApnsVoipSandboxChannelRequest $in): Awaitable<\Errors\Result<UpdateApnsVoipSandboxChannelResponse>>;
  public function UpdateApplicationSettings(UpdateApplicationSettingsRequest $in): Awaitable<\Errors\Result<UpdateApplicationSettingsResponse>>;
  public function UpdateBaiduChannel(UpdateBaiduChannelRequest $in): Awaitable<\Errors\Result<UpdateBaiduChannelResponse>>;
  public function UpdateCampaign(UpdateCampaignRequest $in): Awaitable<\Errors\Result<UpdateCampaignResponse>>;
  public function UpdateEmailChannel(UpdateEmailChannelRequest $in): Awaitable<\Errors\Result<UpdateEmailChannelResponse>>;
  public function UpdateEmailTemplate(UpdateEmailTemplateRequest $in): Awaitable<\Errors\Result<UpdateEmailTemplateResponse>>;
  public function UpdateEndpoint(UpdateEndpointRequest $in): Awaitable<\Errors\Result<UpdateEndpointResponse>>;
  public function UpdateEndpointsBatch(UpdateEndpointsBatchRequest $in): Awaitable<\Errors\Result<UpdateEndpointsBatchResponse>>;
  public function UpdateGcmChannel(UpdateGcmChannelRequest $in): Awaitable<\Errors\Result<UpdateGcmChannelResponse>>;
  public function UpdateJourney(UpdateJourneyRequest $in): Awaitable<\Errors\Result<UpdateJourneyResponse>>;
  public function UpdateJourneyState(UpdateJourneyStateRequest $in): Awaitable<\Errors\Result<UpdateJourneyStateResponse>>;
  public function UpdatePushTemplate(UpdatePushTemplateRequest $in): Awaitable<\Errors\Result<UpdatePushTemplateResponse>>;
  public function UpdateRecommenderConfiguration(UpdateRecommenderConfigurationRequest $in): Awaitable<\Errors\Result<UpdateRecommenderConfigurationResponse>>;
  public function UpdateSegment(UpdateSegmentRequest $in): Awaitable<\Errors\Result<UpdateSegmentResponse>>;
  public function UpdateSmsChannel(UpdateSmsChannelRequest $in): Awaitable<\Errors\Result<UpdateSmsChannelResponse>>;
  public function UpdateSmsTemplate(UpdateSmsTemplateRequest $in): Awaitable<\Errors\Result<UpdateSmsTemplateResponse>>;
  public function UpdateTemplateActiveVersion(UpdateTemplateActiveVersionRequest $in): Awaitable<\Errors\Result<UpdateTemplateActiveVersionResponse>>;
  public function UpdateVoiceChannel(UpdateVoiceChannelRequest $in): Awaitable<\Errors\Result<UpdateVoiceChannelResponse>>;
  public function UpdateVoiceTemplate(UpdateVoiceTemplateRequest $in): Awaitable<\Errors\Result<UpdateVoiceTemplateResponse>>;
}

class ADMChannelRequest {
  public ?__string $client_id;
  public ?__string $client_secret;
  public ?__boolean $enabled;

  public function __construct(shape(
    ?'client_id' => ?__string,
    ?'client_secret' => ?__string,
    ?'enabled' => ?__boolean,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->client_secret = $s['client_secret'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
  }
}

class ADMChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__string $platform;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'platform' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class ADMMessage {
  public ?Action $action;
  public ?__string $body;
  public ?__string $consolidation_key;
  public ?MapOf__string $data;
  public ?__string $expires_after;
  public ?__string $icon_reference;
  public ?__string $image_icon_url;
  public ?__string $image_url;
  public ?__string $md_5;
  public ?__string $raw_content;
  public ?__boolean $silent_push;
  public ?__string $small_image_icon_url;
  public ?__string $sound;
  public ?MapOfListOf__string $substitutions;
  public ?__string $title;
  public ?__string $url;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'body' => ?__string,
    ?'consolidation_key' => ?__string,
    ?'data' => ?MapOf__string,
    ?'expires_after' => ?__string,
    ?'icon_reference' => ?__string,
    ?'image_icon_url' => ?__string,
    ?'image_url' => ?__string,
    ?'md_5' => ?__string,
    ?'raw_content' => ?__string,
    ?'silent_push' => ?__boolean,
    ?'small_image_icon_url' => ?__string,
    ?'sound' => ?__string,
    ?'substitutions' => ?MapOfListOf__string,
    ?'title' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->consolidation_key = $s['consolidation_key'] ?? '';
    $this->data = $s['data'] ?? dict[];
    $this->expires_after = $s['expires_after'] ?? '';
    $this->icon_reference = $s['icon_reference'] ?? '';
    $this->image_icon_url = $s['image_icon_url'] ?? '';
    $this->image_url = $s['image_url'] ?? '';
    $this->md_5 = $s['md_5'] ?? '';
    $this->raw_content = $s['raw_content'] ?? '';
    $this->silent_push = $s['silent_push'] ?? false;
    $this->small_image_icon_url = $s['small_image_icon_url'] ?? '';
    $this->sound = $s['sound'] ?? '';
    $this->substitutions = $s['substitutions'] ?? dict[];
    $this->title = $s['title'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class APNSChannelRequest {
  public ?__string $bundle_id;
  public ?__string $certificate;
  public ?__string $default_authentication_method;
  public ?__boolean $enabled;
  public ?__string $private_key;
  public ?__string $team_id;
  public ?__string $token_key;
  public ?__string $token_key_id;

  public function __construct(shape(
    ?'bundle_id' => ?__string,
    ?'certificate' => ?__string,
    ?'default_authentication_method' => ?__string,
    ?'enabled' => ?__boolean,
    ?'private_key' => ?__string,
    ?'team_id' => ?__string,
    ?'token_key' => ?__string,
    ?'token_key_id' => ?__string,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->certificate = $s['certificate'] ?? '';
    $this->default_authentication_method = $s['default_authentication_method'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->private_key = $s['private_key'] ?? '';
    $this->team_id = $s['team_id'] ?? '';
    $this->token_key = $s['token_key'] ?? '';
    $this->token_key_id = $s['token_key_id'] ?? '';
  }
}

class APNSChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__string $default_authentication_method;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__boolean $has_token_key;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__string $platform;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'default_authentication_method' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'has_token_key' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'platform' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default_authentication_method = $s['default_authentication_method'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->has_token_key = $s['has_token_key'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class APNSMessage {
  public ?__string $apns_push_type;
  public ?Action $action;
  public ?__integer $badge;
  public ?__string $body;
  public ?__string $category;
  public ?__string $collapse_id;
  public ?MapOf__string $data;
  public ?__string $media_url;
  public ?__string $preferred_authentication_method;
  public ?__string $priority;
  public ?__string $raw_content;
  public ?__boolean $silent_push;
  public ?__string $sound;
  public ?MapOfListOf__string $substitutions;
  public ?__string $thread_id;
  public ?__integer $time_to_live;
  public ?__string $title;
  public ?__string $url;

  public function __construct(shape(
    ?'apns_push_type' => ?__string,
    ?'action' => ?Action,
    ?'badge' => ?__integer,
    ?'body' => ?__string,
    ?'category' => ?__string,
    ?'collapse_id' => ?__string,
    ?'data' => ?MapOf__string,
    ?'media_url' => ?__string,
    ?'preferred_authentication_method' => ?__string,
    ?'priority' => ?__string,
    ?'raw_content' => ?__string,
    ?'silent_push' => ?__boolean,
    ?'sound' => ?__string,
    ?'substitutions' => ?MapOfListOf__string,
    ?'thread_id' => ?__string,
    ?'time_to_live' => ?__integer,
    ?'title' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->apns_push_type = $s['apns_push_type'] ?? '';
    $this->action = $s['action'] ?? '';
    $this->badge = $s['badge'] ?? 0;
    $this->body = $s['body'] ?? '';
    $this->category = $s['category'] ?? '';
    $this->collapse_id = $s['collapse_id'] ?? '';
    $this->data = $s['data'] ?? dict[];
    $this->media_url = $s['media_url'] ?? '';
    $this->preferred_authentication_method = $s['preferred_authentication_method'] ?? '';
    $this->priority = $s['priority'] ?? '';
    $this->raw_content = $s['raw_content'] ?? '';
    $this->silent_push = $s['silent_push'] ?? false;
    $this->sound = $s['sound'] ?? '';
    $this->substitutions = $s['substitutions'] ?? dict[];
    $this->thread_id = $s['thread_id'] ?? '';
    $this->time_to_live = $s['time_to_live'] ?? 0;
    $this->title = $s['title'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class APNSPushNotificationTemplate {
  public ?Action $action;
  public ?__string $body;
  public ?__string $media_url;
  public ?__string $raw_content;
  public ?__string $sound;
  public ?__string $title;
  public ?__string $url;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'body' => ?__string,
    ?'media_url' => ?__string,
    ?'raw_content' => ?__string,
    ?'sound' => ?__string,
    ?'title' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->media_url = $s['media_url'] ?? '';
    $this->raw_content = $s['raw_content'] ?? '';
    $this->sound = $s['sound'] ?? '';
    $this->title = $s['title'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class APNSSandboxChannelRequest {
  public ?__string $bundle_id;
  public ?__string $certificate;
  public ?__string $default_authentication_method;
  public ?__boolean $enabled;
  public ?__string $private_key;
  public ?__string $team_id;
  public ?__string $token_key;
  public ?__string $token_key_id;

  public function __construct(shape(
    ?'bundle_id' => ?__string,
    ?'certificate' => ?__string,
    ?'default_authentication_method' => ?__string,
    ?'enabled' => ?__boolean,
    ?'private_key' => ?__string,
    ?'team_id' => ?__string,
    ?'token_key' => ?__string,
    ?'token_key_id' => ?__string,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->certificate = $s['certificate'] ?? '';
    $this->default_authentication_method = $s['default_authentication_method'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->private_key = $s['private_key'] ?? '';
    $this->team_id = $s['team_id'] ?? '';
    $this->token_key = $s['token_key'] ?? '';
    $this->token_key_id = $s['token_key_id'] ?? '';
  }
}

class APNSSandboxChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__string $default_authentication_method;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__boolean $has_token_key;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__string $platform;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'default_authentication_method' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'has_token_key' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'platform' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default_authentication_method = $s['default_authentication_method'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->has_token_key = $s['has_token_key'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class APNSVoipChannelRequest {
  public ?__string $bundle_id;
  public ?__string $certificate;
  public ?__string $default_authentication_method;
  public ?__boolean $enabled;
  public ?__string $private_key;
  public ?__string $team_id;
  public ?__string $token_key;
  public ?__string $token_key_id;

  public function __construct(shape(
    ?'bundle_id' => ?__string,
    ?'certificate' => ?__string,
    ?'default_authentication_method' => ?__string,
    ?'enabled' => ?__boolean,
    ?'private_key' => ?__string,
    ?'team_id' => ?__string,
    ?'token_key' => ?__string,
    ?'token_key_id' => ?__string,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->certificate = $s['certificate'] ?? '';
    $this->default_authentication_method = $s['default_authentication_method'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->private_key = $s['private_key'] ?? '';
    $this->team_id = $s['team_id'] ?? '';
    $this->token_key = $s['token_key'] ?? '';
    $this->token_key_id = $s['token_key_id'] ?? '';
  }
}

class APNSVoipChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__string $default_authentication_method;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__boolean $has_token_key;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__string $platform;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'default_authentication_method' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'has_token_key' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'platform' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default_authentication_method = $s['default_authentication_method'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->has_token_key = $s['has_token_key'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class APNSVoipSandboxChannelRequest {
  public ?__string $bundle_id;
  public ?__string $certificate;
  public ?__string $default_authentication_method;
  public ?__boolean $enabled;
  public ?__string $private_key;
  public ?__string $team_id;
  public ?__string $token_key;
  public ?__string $token_key_id;

  public function __construct(shape(
    ?'bundle_id' => ?__string,
    ?'certificate' => ?__string,
    ?'default_authentication_method' => ?__string,
    ?'enabled' => ?__boolean,
    ?'private_key' => ?__string,
    ?'team_id' => ?__string,
    ?'token_key' => ?__string,
    ?'token_key_id' => ?__string,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->certificate = $s['certificate'] ?? '';
    $this->default_authentication_method = $s['default_authentication_method'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->private_key = $s['private_key'] ?? '';
    $this->team_id = $s['team_id'] ?? '';
    $this->token_key = $s['token_key'] ?? '';
    $this->token_key_id = $s['token_key_id'] ?? '';
  }
}

class APNSVoipSandboxChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__string $default_authentication_method;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__boolean $has_token_key;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__string $platform;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'default_authentication_method' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'has_token_key' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'platform' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default_authentication_method = $s['default_authentication_method'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->has_token_key = $s['has_token_key'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

type Action = string;

class ActivitiesResponse {
  public ?ListOfActivityResponse $item;
  public ?__string $next_token;

  public function __construct(shape(
    ?'item' => ?ListOfActivityResponse,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class Activity {
  public ?ConditionalSplitActivity $conditional_split;
  public ?__string $description;
  public ?EmailMessageActivity $email;
  public ?HoldoutActivity $holdout;
  public ?MultiConditionalSplitActivity $multi_condition;
  public ?RandomSplitActivity $random_split;
  public ?WaitActivity $wait;

  public function __construct(shape(
    ?'conditional_split' => ?ConditionalSplitActivity,
    ?'description' => ?__string,
    ?'email' => ?EmailMessageActivity,
    ?'holdout' => ?HoldoutActivity,
    ?'multi_condition' => ?MultiConditionalSplitActivity,
    ?'random_split' => ?RandomSplitActivity,
    ?'wait' => ?WaitActivity,
  ) $s = shape()) {
    $this->conditional_split = $s['conditional_split'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->email = $s['email'] ?? null;
    $this->holdout = $s['holdout'] ?? null;
    $this->multi_condition = $s['multi_condition'] ?? null;
    $this->random_split = $s['random_split'] ?? null;
    $this->wait = $s['wait'] ?? null;
  }
}

class ActivityResponse {
  public ?__string $application_id;
  public ?__string $campaign_id;
  public ?__string $end;
  public ?__string $id;
  public ?__string $result;
  public ?__string $scheduled_start;
  public ?__string $start;
  public ?__string $state;
  public ?__integer $successful_endpoint_count;
  public ?__integer $timezones_completed_count;
  public ?__integer $timezones_total_count;
  public ?__integer $total_endpoint_count;
  public ?__string $treatment_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_id' => ?__string,
    ?'end' => ?__string,
    ?'id' => ?__string,
    ?'result' => ?__string,
    ?'scheduled_start' => ?__string,
    ?'start' => ?__string,
    ?'state' => ?__string,
    ?'successful_endpoint_count' => ?__integer,
    ?'timezones_completed_count' => ?__integer,
    ?'timezones_total_count' => ?__integer,
    ?'total_endpoint_count' => ?__integer,
    ?'treatment_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_id = $s['campaign_id'] ?? '';
    $this->end = $s['end'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->result = $s['result'] ?? '';
    $this->scheduled_start = $s['scheduled_start'] ?? '';
    $this->start = $s['start'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->successful_endpoint_count = $s['successful_endpoint_count'] ?? 0;
    $this->timezones_completed_count = $s['timezones_completed_count'] ?? 0;
    $this->timezones_total_count = $s['timezones_total_count'] ?? 0;
    $this->total_endpoint_count = $s['total_endpoint_count'] ?? 0;
    $this->treatment_id = $s['treatment_id'] ?? '';
  }
}

class AddressConfiguration {
  public ?__string $body_override;
  public ?ChannelType $channel_type;
  public ?MapOf__string $context;
  public ?__string $raw_content;
  public ?MapOfListOf__string $substitutions;
  public ?__string $title_override;

  public function __construct(shape(
    ?'body_override' => ?__string,
    ?'channel_type' => ?ChannelType,
    ?'context' => ?MapOf__string,
    ?'raw_content' => ?__string,
    ?'substitutions' => ?MapOfListOf__string,
    ?'title_override' => ?__string,
  ) $s = shape()) {
    $this->body_override = $s['body_override'] ?? '';
    $this->channel_type = $s['channel_type'] ?? '';
    $this->context = $s['context'] ?? dict[];
    $this->raw_content = $s['raw_content'] ?? '';
    $this->substitutions = $s['substitutions'] ?? dict[];
    $this->title_override = $s['title_override'] ?? '';
  }
}

class AndroidPushNotificationTemplate {
  public ?Action $action;
  public ?__string $body;
  public ?__string $image_icon_url;
  public ?__string $image_url;
  public ?__string $raw_content;
  public ?__string $small_image_icon_url;
  public ?__string $sound;
  public ?__string $title;
  public ?__string $url;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'body' => ?__string,
    ?'image_icon_url' => ?__string,
    ?'image_url' => ?__string,
    ?'raw_content' => ?__string,
    ?'small_image_icon_url' => ?__string,
    ?'sound' => ?__string,
    ?'title' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->image_icon_url = $s['image_icon_url'] ?? '';
    $this->image_url = $s['image_url'] ?? '';
    $this->raw_content = $s['raw_content'] ?? '';
    $this->small_image_icon_url = $s['small_image_icon_url'] ?? '';
    $this->sound = $s['sound'] ?? '';
    $this->title = $s['title'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class ApplicationDateRangeKpiResponse {
  public ?__string $application_id;
  public ?__timestampIso8601 $end_time;
  public ?__string $kpi_name;
  public ?BaseKpiResult $kpi_result;
  public ?__string $next_token;
  public ?__timestampIso8601 $start_time;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'end_time' => ?__timestampIso8601,
    ?'kpi_name' => ?__string,
    ?'kpi_result' => ?BaseKpiResult,
    ?'next_token' => ?__string,
    ?'start_time' => ?__timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->kpi_name = $s['kpi_name'] ?? '';
    $this->kpi_result = $s['kpi_result'] ?? null;
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class ApplicationResponse {
  public ?__string $arn;
  public ?__string $id;
  public ?__string $name;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'id' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ApplicationSettingsResource {
  public ?__string $application_id;
  public ?CampaignHook $campaign_hook;
  public ?__string $last_modified_date;
  public ?CampaignLimits $limits;
  public ?QuietTime $quiet_time;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_hook' => ?CampaignHook,
    ?'last_modified_date' => ?__string,
    ?'limits' => ?CampaignLimits,
    ?'quiet_time' => ?QuietTime,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_hook = $s['campaign_hook'] ?? null;
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->limits = $s['limits'] ?? null;
    $this->quiet_time = $s['quiet_time'] ?? null;
  }
}

class ApplicationsResponse {
  public ?ListOfApplicationResponse $item;
  public ?__string $next_token;

  public function __construct(shape(
    ?'item' => ?ListOfApplicationResponse,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class AttributeDimension {
  public ?AttributeType $attribute_type;
  public ?ListOf__string $values;

  public function __construct(shape(
    ?'attribute_type' => ?AttributeType,
    ?'values' => ?ListOf__string,
  ) $s = shape()) {
    $this->attribute_type = $s['attribute_type'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type AttributeType = string;

class AttributesResource {
  public ?__string $application_id;
  public ?__string $attribute_type;
  public ?ListOf__string $attributes;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'attribute_type' => ?__string,
    ?'attributes' => ?ListOf__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->attribute_type = $s['attribute_type'] ?? '';
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class BadRequestException {
  public ?__string $message;
  public ?__string $request_id;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class BaiduChannelRequest {
  public ?__string $api_key;
  public ?__boolean $enabled;
  public ?__string $secret_key;

  public function __construct(shape(
    ?'api_key' => ?__string,
    ?'enabled' => ?__boolean,
    ?'secret_key' => ?__string,
  ) $s = shape()) {
    $this->api_key = $s['api_key'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->secret_key = $s['secret_key'] ?? '';
  }
}

class BaiduChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__string $credential;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__string $platform;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'credential' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'platform' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->credential = $s['credential'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class BaiduMessage {
  public ?Action $action;
  public ?__string $body;
  public ?MapOf__string $data;
  public ?__string $icon_reference;
  public ?__string $image_icon_url;
  public ?__string $image_url;
  public ?__string $raw_content;
  public ?__boolean $silent_push;
  public ?__string $small_image_icon_url;
  public ?__string $sound;
  public ?MapOfListOf__string $substitutions;
  public ?__integer $time_to_live;
  public ?__string $title;
  public ?__string $url;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'body' => ?__string,
    ?'data' => ?MapOf__string,
    ?'icon_reference' => ?__string,
    ?'image_icon_url' => ?__string,
    ?'image_url' => ?__string,
    ?'raw_content' => ?__string,
    ?'silent_push' => ?__boolean,
    ?'small_image_icon_url' => ?__string,
    ?'sound' => ?__string,
    ?'substitutions' => ?MapOfListOf__string,
    ?'time_to_live' => ?__integer,
    ?'title' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->data = $s['data'] ?? dict[];
    $this->icon_reference = $s['icon_reference'] ?? '';
    $this->image_icon_url = $s['image_icon_url'] ?? '';
    $this->image_url = $s['image_url'] ?? '';
    $this->raw_content = $s['raw_content'] ?? '';
    $this->silent_push = $s['silent_push'] ?? false;
    $this->small_image_icon_url = $s['small_image_icon_url'] ?? '';
    $this->sound = $s['sound'] ?? '';
    $this->substitutions = $s['substitutions'] ?? dict[];
    $this->time_to_live = $s['time_to_live'] ?? 0;
    $this->title = $s['title'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class BaseKpiResult {
  public ?ListOfResultRow $rows;

  public function __construct(shape(
    ?'rows' => ?ListOfResultRow,
  ) $s = shape()) {
    $this->rows = $s['rows'] ?? vec[];
  }
}

class CampaignCustomMessage {
  public ?__string $data;

  public function __construct(shape(
    ?'data' => ?__string,
  ) $s = shape()) {
    $this->data = $s['data'] ?? '';
  }
}

class CampaignDateRangeKpiResponse {
  public ?__string $application_id;
  public ?__string $campaign_id;
  public ?__timestampIso8601 $end_time;
  public ?__string $kpi_name;
  public ?BaseKpiResult $kpi_result;
  public ?__string $next_token;
  public ?__timestampIso8601 $start_time;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_id' => ?__string,
    ?'end_time' => ?__timestampIso8601,
    ?'kpi_name' => ?__string,
    ?'kpi_result' => ?BaseKpiResult,
    ?'next_token' => ?__string,
    ?'start_time' => ?__timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_id = $s['campaign_id'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->kpi_name = $s['kpi_name'] ?? '';
    $this->kpi_result = $s['kpi_result'] ?? null;
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class CampaignEmailMessage {
  public ?__string $body;
  public ?__string $from_address;
  public ?__string $html_body;
  public ?__string $title;

  public function __construct(shape(
    ?'body' => ?__string,
    ?'from_address' => ?__string,
    ?'html_body' => ?__string,
    ?'title' => ?__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
    $this->from_address = $s['from_address'] ?? '';
    $this->html_body = $s['html_body'] ?? '';
    $this->title = $s['title'] ?? '';
  }
}

class CampaignEventFilter {
  public ?EventDimensions $dimensions;
  public ?FilterType $filter_type;

  public function __construct(shape(
    ?'dimensions' => ?EventDimensions,
    ?'filter_type' => ?FilterType,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? null;
    $this->filter_type = $s['filter_type'] ?? '';
  }
}

class CampaignHook {
  public ?__string $lambda_function_name;
  public ?Mode $mode;
  public ?__string $web_url;

  public function __construct(shape(
    ?'lambda_function_name' => ?__string,
    ?'mode' => ?Mode,
    ?'web_url' => ?__string,
  ) $s = shape()) {
    $this->lambda_function_name = $s['lambda_function_name'] ?? '';
    $this->mode = $s['mode'] ?? '';
    $this->web_url = $s['web_url'] ?? '';
  }
}

class CampaignLimits {
  public ?__integer $daily;
  public ?__integer $maximum_duration;
  public ?__integer $messages_per_second;
  public ?__integer $total;

  public function __construct(shape(
    ?'daily' => ?__integer,
    ?'maximum_duration' => ?__integer,
    ?'messages_per_second' => ?__integer,
    ?'total' => ?__integer,
  ) $s = shape()) {
    $this->daily = $s['daily'] ?? 0;
    $this->maximum_duration = $s['maximum_duration'] ?? 0;
    $this->messages_per_second = $s['messages_per_second'] ?? 0;
    $this->total = $s['total'] ?? 0;
  }
}

class CampaignResponse {
  public ?ListOfTreatmentResource $additional_treatments;
  public ?__string $application_id;
  public ?__string $arn;
  public ?__string $creation_date;
  public ?CustomDeliveryConfiguration $custom_delivery_configuration;
  public ?CampaignState $default_state;
  public ?__string $description;
  public ?__integer $holdout_percent;
  public ?CampaignHook $hook;
  public ?__string $id;
  public ?__boolean $is_paused;
  public ?__string $last_modified_date;
  public ?CampaignLimits $limits;
  public ?MessageConfiguration $message_configuration;
  public ?__string $name;
  public ?Schedule $schedule;
  public ?__string $segment_id;
  public ?__integer $segment_version;
  public ?CampaignState $state;
  public ?TemplateConfiguration $template_configuration;
  public ?__string $treatment_description;
  public ?__string $treatment_name;
  public ?__integer $version;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'additional_treatments' => ?ListOfTreatmentResource,
    ?'application_id' => ?__string,
    ?'arn' => ?__string,
    ?'creation_date' => ?__string,
    ?'custom_delivery_configuration' => ?CustomDeliveryConfiguration,
    ?'default_state' => ?CampaignState,
    ?'description' => ?__string,
    ?'holdout_percent' => ?__integer,
    ?'hook' => ?CampaignHook,
    ?'id' => ?__string,
    ?'is_paused' => ?__boolean,
    ?'last_modified_date' => ?__string,
    ?'limits' => ?CampaignLimits,
    ?'message_configuration' => ?MessageConfiguration,
    ?'name' => ?__string,
    ?'schedule' => ?Schedule,
    ?'segment_id' => ?__string,
    ?'segment_version' => ?__integer,
    ?'state' => ?CampaignState,
    ?'template_configuration' => ?TemplateConfiguration,
    ?'treatment_description' => ?__string,
    ?'treatment_name' => ?__string,
    ?'version' => ?__integer,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->additional_treatments = $s['additional_treatments'] ?? vec[];
    $this->application_id = $s['application_id'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->custom_delivery_configuration = $s['custom_delivery_configuration'] ?? null;
    $this->default_state = $s['default_state'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->holdout_percent = $s['holdout_percent'] ?? 0;
    $this->hook = $s['hook'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->is_paused = $s['is_paused'] ?? false;
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->limits = $s['limits'] ?? null;
    $this->message_configuration = $s['message_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->schedule = $s['schedule'] ?? null;
    $this->segment_id = $s['segment_id'] ?? '';
    $this->segment_version = $s['segment_version'] ?? 0;
    $this->state = $s['state'] ?? null;
    $this->template_configuration = $s['template_configuration'] ?? null;
    $this->treatment_description = $s['treatment_description'] ?? '';
    $this->treatment_name = $s['treatment_name'] ?? '';
    $this->version = $s['version'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CampaignSmsMessage {
  public ?__string $body;
  public ?MessageType $message_type;
  public ?__string $sender_id;

  public function __construct(shape(
    ?'body' => ?__string,
    ?'message_type' => ?MessageType,
    ?'sender_id' => ?__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
    $this->message_type = $s['message_type'] ?? '';
    $this->sender_id = $s['sender_id'] ?? '';
  }
}

class CampaignState {
  public ?CampaignStatus $campaign_status;

  public function __construct(shape(
    ?'campaign_status' => ?CampaignStatus,
  ) $s = shape()) {
    $this->campaign_status = $s['campaign_status'] ?? '';
  }
}

type CampaignStatus = string;

class CampaignsResponse {
  public ?ListOfCampaignResponse $item;
  public ?__string $next_token;

  public function __construct(shape(
    ?'item' => ?ListOfCampaignResponse,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

type ChannelType = string;

class ChannelsResponse {
  public ?MapOfChannelResponse $channels;

  public function __construct(shape(
    ?'channels' => ?MapOfChannelResponse,
  ) $s = shape()) {
    $this->channels = $s['channels'] ?? dict[];
  }
}

class Condition {
  public ?ListOfSimpleCondition $conditions;
  public ?Operator $operator;

  public function __construct(shape(
    ?'conditions' => ?ListOfSimpleCondition,
    ?'operator' => ?Operator,
  ) $s = shape()) {
    $this->conditions = $s['conditions'] ?? vec[];
    $this->operator = $s['operator'] ?? '';
  }
}

class ConditionalSplitActivity {
  public ?Condition $condition;
  public ?WaitTime $evaluation_wait_time;
  public ?__string $false_activity;
  public ?__string $true_activity;

  public function __construct(shape(
    ?'condition' => ?Condition,
    ?'evaluation_wait_time' => ?WaitTime,
    ?'false_activity' => ?__string,
    ?'true_activity' => ?__string,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? null;
    $this->evaluation_wait_time = $s['evaluation_wait_time'] ?? null;
    $this->false_activity = $s['false_activity'] ?? '';
    $this->true_activity = $s['true_activity'] ?? '';
  }
}

class CreateAppRequest {
  public ?CreateApplicationRequest $create_application_request;

  public function __construct(shape(
    ?'create_application_request' => ?CreateApplicationRequest,
  ) $s = shape()) {
    $this->create_application_request = $s['create_application_request'] ?? null;
  }
}

class CreateAppResponse {
  public ?ApplicationResponse $application_response;

  public function __construct(shape(
    ?'application_response' => ?ApplicationResponse,
  ) $s = shape()) {
    $this->application_response = $s['application_response'] ?? null;
  }
}

class CreateApplicationRequest {
  public ?__string $name;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'name' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateCampaignRequest {
  public ?__string $application_id;
  public ?WriteCampaignRequest $write_campaign_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'write_campaign_request' => ?WriteCampaignRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->write_campaign_request = $s['write_campaign_request'] ?? null;
  }
}

class CreateCampaignResponse {
  public ?CampaignResponse $campaign_response;

  public function __construct(shape(
    ?'campaign_response' => ?CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $s['campaign_response'] ?? null;
  }
}

class CreateEmailTemplateRequest {
  public ?EmailTemplateRequest $email_template_request;
  public ?__string $template_name;

  public function __construct(shape(
    ?'email_template_request' => ?EmailTemplateRequest,
    ?'template_name' => ?__string,
  ) $s = shape()) {
    $this->email_template_request = $s['email_template_request'] ?? null;
    $this->template_name = $s['template_name'] ?? '';
  }
}

class CreateEmailTemplateResponse {
  public ?CreateTemplateMessageBody $create_template_message_body;

  public function __construct(shape(
    ?'create_template_message_body' => ?CreateTemplateMessageBody,
  ) $s = shape()) {
    $this->create_template_message_body = $s['create_template_message_body'] ?? null;
  }
}

class CreateExportJobRequest {
  public ?__string $application_id;
  public ?ExportJobRequest $export_job_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'export_job_request' => ?ExportJobRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->export_job_request = $s['export_job_request'] ?? null;
  }
}

class CreateExportJobResponse {
  public ?ExportJobResponse $export_job_response;

  public function __construct(shape(
    ?'export_job_response' => ?ExportJobResponse,
  ) $s = shape()) {
    $this->export_job_response = $s['export_job_response'] ?? null;
  }
}

class CreateImportJobRequest {
  public ?__string $application_id;
  public ?ImportJobRequest $import_job_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'import_job_request' => ?ImportJobRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->import_job_request = $s['import_job_request'] ?? null;
  }
}

class CreateImportJobResponse {
  public ?ImportJobResponse $import_job_response;

  public function __construct(shape(
    ?'import_job_response' => ?ImportJobResponse,
  ) $s = shape()) {
    $this->import_job_response = $s['import_job_response'] ?? null;
  }
}

class CreateJourneyRequest {
  public ?__string $application_id;
  public ?WriteJourneyRequest $write_journey_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'write_journey_request' => ?WriteJourneyRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->write_journey_request = $s['write_journey_request'] ?? null;
  }
}

class CreateJourneyResponse {
  public ?JourneyResponse $journey_response;

  public function __construct(shape(
    ?'journey_response' => ?JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $s['journey_response'] ?? null;
  }
}

class CreatePushTemplateRequest {
  public ?PushNotificationTemplateRequest $push_notification_template_request;
  public ?__string $template_name;

  public function __construct(shape(
    ?'push_notification_template_request' => ?PushNotificationTemplateRequest,
    ?'template_name' => ?__string,
  ) $s = shape()) {
    $this->push_notification_template_request = $s['push_notification_template_request'] ?? null;
    $this->template_name = $s['template_name'] ?? '';
  }
}

class CreatePushTemplateResponse {
  public ?CreateTemplateMessageBody $create_template_message_body;

  public function __construct(shape(
    ?'create_template_message_body' => ?CreateTemplateMessageBody,
  ) $s = shape()) {
    $this->create_template_message_body = $s['create_template_message_body'] ?? null;
  }
}

class CreateRecommenderConfiguration {
  public ?MapOf__string $attributes;
  public ?__string $description;
  public ?__string $name;
  public ?__string $recommendation_provider_id_type;
  public ?__string $recommendation_provider_role_arn;
  public ?__string $recommendation_provider_uri;
  public ?__string $recommendation_transformer_uri;
  public ?__string $recommendations_display_name;
  public ?__integer $recommendations_per_message;

  public function __construct(shape(
    ?'attributes' => ?MapOf__string,
    ?'description' => ?__string,
    ?'name' => ?__string,
    ?'recommendation_provider_id_type' => ?__string,
    ?'recommendation_provider_role_arn' => ?__string,
    ?'recommendation_provider_uri' => ?__string,
    ?'recommendation_transformer_uri' => ?__string,
    ?'recommendations_display_name' => ?__string,
    ?'recommendations_per_message' => ?__integer,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->recommendation_provider_id_type = $s['recommendation_provider_id_type'] ?? '';
    $this->recommendation_provider_role_arn = $s['recommendation_provider_role_arn'] ?? '';
    $this->recommendation_provider_uri = $s['recommendation_provider_uri'] ?? '';
    $this->recommendation_transformer_uri = $s['recommendation_transformer_uri'] ?? '';
    $this->recommendations_display_name = $s['recommendations_display_name'] ?? '';
    $this->recommendations_per_message = $s['recommendations_per_message'] ?? 0;
  }
}

class CreateRecommenderConfigurationRequest {
  public ?CreateRecommenderConfiguration $create_recommender_configuration;

  public function __construct(shape(
    ?'create_recommender_configuration' => ?CreateRecommenderConfiguration,
  ) $s = shape()) {
    $this->create_recommender_configuration = $s['create_recommender_configuration'] ?? null;
  }
}

class CreateRecommenderConfigurationResponse {
  public ?RecommenderConfigurationResponse $recommender_configuration_response;

  public function __construct(shape(
    ?'recommender_configuration_response' => ?RecommenderConfigurationResponse,
  ) $s = shape()) {
    $this->recommender_configuration_response = $s['recommender_configuration_response'] ?? null;
  }
}

class CreateSegmentRequest {
  public ?__string $application_id;
  public ?WriteSegmentRequest $write_segment_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'write_segment_request' => ?WriteSegmentRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->write_segment_request = $s['write_segment_request'] ?? null;
  }
}

class CreateSegmentResponse {
  public ?SegmentResponse $segment_response;

  public function __construct(shape(
    ?'segment_response' => ?SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $s['segment_response'] ?? null;
  }
}

class CreateSmsTemplateRequest {
  public ?SMSTemplateRequest $sms_template_request;
  public ?__string $template_name;

  public function __construct(shape(
    ?'sms_template_request' => ?SMSTemplateRequest,
    ?'template_name' => ?__string,
  ) $s = shape()) {
    $this->sms_template_request = $s['sms_template_request'] ?? null;
    $this->template_name = $s['template_name'] ?? '';
  }
}

class CreateSmsTemplateResponse {
  public ?CreateTemplateMessageBody $create_template_message_body;

  public function __construct(shape(
    ?'create_template_message_body' => ?CreateTemplateMessageBody,
  ) $s = shape()) {
    $this->create_template_message_body = $s['create_template_message_body'] ?? null;
  }
}

class CreateTemplateMessageBody {
  public ?__string $arn;
  public ?__string $message;
  public ?__string $request_id;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'message' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class CreateVoiceTemplateRequest {
  public ?__string $template_name;
  public ?VoiceTemplateRequest $voice_template_request;

  public function __construct(shape(
    ?'template_name' => ?__string,
    ?'voice_template_request' => ?VoiceTemplateRequest,
  ) $s = shape()) {
    $this->template_name = $s['template_name'] ?? '';
    $this->voice_template_request = $s['voice_template_request'] ?? null;
  }
}

class CreateVoiceTemplateResponse {
  public ?CreateTemplateMessageBody $create_template_message_body;

  public function __construct(shape(
    ?'create_template_message_body' => ?CreateTemplateMessageBody,
  ) $s = shape()) {
    $this->create_template_message_body = $s['create_template_message_body'] ?? null;
  }
}

class CustomDeliveryConfiguration {
  public ?__string $delivery_uri;
  public ?ListOf__EndpointTypesElement $endpoint_types;

  public function __construct(shape(
    ?'delivery_uri' => ?__string,
    ?'endpoint_types' => ?ListOf__EndpointTypesElement,
  ) $s = shape()) {
    $this->delivery_uri = $s['delivery_uri'] ?? '';
    $this->endpoint_types = $s['endpoint_types'] ?? vec[];
  }
}

class DefaultMessage {
  public ?__string $body;
  public ?MapOfListOf__string $substitutions;

  public function __construct(shape(
    ?'body' => ?__string,
    ?'substitutions' => ?MapOfListOf__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
    $this->substitutions = $s['substitutions'] ?? dict[];
  }
}

class DefaultPushNotificationMessage {
  public ?Action $action;
  public ?__string $body;
  public ?MapOf__string $data;
  public ?__boolean $silent_push;
  public ?MapOfListOf__string $substitutions;
  public ?__string $title;
  public ?__string $url;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'body' => ?__string,
    ?'data' => ?MapOf__string,
    ?'silent_push' => ?__boolean,
    ?'substitutions' => ?MapOfListOf__string,
    ?'title' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->data = $s['data'] ?? dict[];
    $this->silent_push = $s['silent_push'] ?? false;
    $this->substitutions = $s['substitutions'] ?? dict[];
    $this->title = $s['title'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class DefaultPushNotificationTemplate {
  public ?Action $action;
  public ?__string $body;
  public ?__string $sound;
  public ?__string $title;
  public ?__string $url;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'body' => ?__string,
    ?'sound' => ?__string,
    ?'title' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->sound = $s['sound'] ?? '';
    $this->title = $s['title'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class DeleteAdmChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteAdmChannelResponse {
  public ?ADMChannelResponse $adm_channel_response;

  public function __construct(shape(
    ?'adm_channel_response' => ?ADMChannelResponse,
  ) $s = shape()) {
    $this->adm_channel_response = $s['adm_channel_response'] ?? null;
  }
}

class DeleteApnsChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteApnsChannelResponse {
  public ?APNSChannelResponse $apns_channel_response;

  public function __construct(shape(
    ?'apns_channel_response' => ?APNSChannelResponse,
  ) $s = shape()) {
    $this->apns_channel_response = $s['apns_channel_response'] ?? null;
  }
}

class DeleteApnsSandboxChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteApnsSandboxChannelResponse {
  public ?APNSSandboxChannelResponse $apns_sandbox_channel_response;

  public function __construct(shape(
    ?'apns_sandbox_channel_response' => ?APNSSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_sandbox_channel_response = $s['apns_sandbox_channel_response'] ?? null;
  }
}

class DeleteApnsVoipChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteApnsVoipChannelResponse {
  public ?APNSVoipChannelResponse $apns_voip_channel_response;

  public function __construct(shape(
    ?'apns_voip_channel_response' => ?APNSVoipChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_channel_response = $s['apns_voip_channel_response'] ?? null;
  }
}

class DeleteApnsVoipSandboxChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteApnsVoipSandboxChannelResponse {
  public ?APNSVoipSandboxChannelResponse $apns_voip_sandbox_channel_response;

  public function __construct(shape(
    ?'apns_voip_sandbox_channel_response' => ?APNSVoipSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_sandbox_channel_response = $s['apns_voip_sandbox_channel_response'] ?? null;
  }
}

class DeleteAppRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteAppResponse {
  public ?ApplicationResponse $application_response;

  public function __construct(shape(
    ?'application_response' => ?ApplicationResponse,
  ) $s = shape()) {
    $this->application_response = $s['application_response'] ?? null;
  }
}

class DeleteBaiduChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteBaiduChannelResponse {
  public ?BaiduChannelResponse $baidu_channel_response;

  public function __construct(shape(
    ?'baidu_channel_response' => ?BaiduChannelResponse,
  ) $s = shape()) {
    $this->baidu_channel_response = $s['baidu_channel_response'] ?? null;
  }
}

class DeleteCampaignRequest {
  public ?__string $application_id;
  public ?__string $campaign_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_id = $s['campaign_id'] ?? '';
  }
}

class DeleteCampaignResponse {
  public ?CampaignResponse $campaign_response;

  public function __construct(shape(
    ?'campaign_response' => ?CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $s['campaign_response'] ?? null;
  }
}

class DeleteEmailChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteEmailChannelResponse {
  public ?EmailChannelResponse $email_channel_response;

  public function __construct(shape(
    ?'email_channel_response' => ?EmailChannelResponse,
  ) $s = shape()) {
    $this->email_channel_response = $s['email_channel_response'] ?? null;
  }
}

class DeleteEmailTemplateRequest {
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class DeleteEmailTemplateResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class DeleteEndpointRequest {
  public ?__string $application_id;
  public ?__string $endpoint_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'endpoint_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->endpoint_id = $s['endpoint_id'] ?? '';
  }
}

class DeleteEndpointResponse {
  public ?EndpointResponse $endpoint_response;

  public function __construct(shape(
    ?'endpoint_response' => ?EndpointResponse,
  ) $s = shape()) {
    $this->endpoint_response = $s['endpoint_response'] ?? null;
  }
}

class DeleteEventStreamRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteEventStreamResponse {
  public ?EventStream $event_stream;

  public function __construct(shape(
    ?'event_stream' => ?EventStream,
  ) $s = shape()) {
    $this->event_stream = $s['event_stream'] ?? null;
  }
}

class DeleteGcmChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteGcmChannelResponse {
  public ?GCMChannelResponse $gcm_channel_response;

  public function __construct(shape(
    ?'gcm_channel_response' => ?GCMChannelResponse,
  ) $s = shape()) {
    $this->gcm_channel_response = $s['gcm_channel_response'] ?? null;
  }
}

class DeleteJourneyRequest {
  public ?__string $application_id;
  public ?__string $journey_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'journey_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->journey_id = $s['journey_id'] ?? '';
  }
}

class DeleteJourneyResponse {
  public ?JourneyResponse $journey_response;

  public function __construct(shape(
    ?'journey_response' => ?JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $s['journey_response'] ?? null;
  }
}

class DeletePushTemplateRequest {
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class DeletePushTemplateResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class DeleteRecommenderConfigurationRequest {
  public ?__string $recommender_id;

  public function __construct(shape(
    ?'recommender_id' => ?__string,
  ) $s = shape()) {
    $this->recommender_id = $s['recommender_id'] ?? '';
  }
}

class DeleteRecommenderConfigurationResponse {
  public ?RecommenderConfigurationResponse $recommender_configuration_response;

  public function __construct(shape(
    ?'recommender_configuration_response' => ?RecommenderConfigurationResponse,
  ) $s = shape()) {
    $this->recommender_configuration_response = $s['recommender_configuration_response'] ?? null;
  }
}

class DeleteSegmentRequest {
  public ?__string $application_id;
  public ?__string $segment_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'segment_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
  }
}

class DeleteSegmentResponse {
  public ?SegmentResponse $segment_response;

  public function __construct(shape(
    ?'segment_response' => ?SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $s['segment_response'] ?? null;
  }
}

class DeleteSmsChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteSmsChannelResponse {
  public ?SMSChannelResponse $sms_channel_response;

  public function __construct(shape(
    ?'sms_channel_response' => ?SMSChannelResponse,
  ) $s = shape()) {
    $this->sms_channel_response = $s['sms_channel_response'] ?? null;
  }
}

class DeleteSmsTemplateRequest {
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class DeleteSmsTemplateResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class DeleteUserEndpointsRequest {
  public ?__string $application_id;
  public ?__string $user_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'user_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class DeleteUserEndpointsResponse {
  public ?EndpointsResponse $endpoints_response;

  public function __construct(shape(
    ?'endpoints_response' => ?EndpointsResponse,
  ) $s = shape()) {
    $this->endpoints_response = $s['endpoints_response'] ?? null;
  }
}

class DeleteVoiceChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteVoiceChannelResponse {
  public ?VoiceChannelResponse $voice_channel_response;

  public function __construct(shape(
    ?'voice_channel_response' => ?VoiceChannelResponse,
  ) $s = shape()) {
    $this->voice_channel_response = $s['voice_channel_response'] ?? null;
  }
}

class DeleteVoiceTemplateRequest {
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class DeleteVoiceTemplateResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

type DeliveryStatus = string;

type DimensionType = string;

class DirectMessageConfiguration {
  public ?ADMMessage $adm_message;
  public ?APNSMessage $apns_message;
  public ?BaiduMessage $baidu_message;
  public ?DefaultMessage $default_message;
  public ?DefaultPushNotificationMessage $default_push_notification_message;
  public ?EmailMessage $email_message;
  public ?GCMMessage $gcm_message;
  public ?SMSMessage $sms_message;
  public ?VoiceMessage $voice_message;

  public function __construct(shape(
    ?'adm_message' => ?ADMMessage,
    ?'apns_message' => ?APNSMessage,
    ?'baidu_message' => ?BaiduMessage,
    ?'default_message' => ?DefaultMessage,
    ?'default_push_notification_message' => ?DefaultPushNotificationMessage,
    ?'email_message' => ?EmailMessage,
    ?'gcm_message' => ?GCMMessage,
    ?'sms_message' => ?SMSMessage,
    ?'voice_message' => ?VoiceMessage,
  ) $s = shape()) {
    $this->adm_message = $s['adm_message'] ?? null;
    $this->apns_message = $s['apns_message'] ?? null;
    $this->baidu_message = $s['baidu_message'] ?? null;
    $this->default_message = $s['default_message'] ?? null;
    $this->default_push_notification_message = $s['default_push_notification_message'] ?? null;
    $this->email_message = $s['email_message'] ?? null;
    $this->gcm_message = $s['gcm_message'] ?? null;
    $this->sms_message = $s['sms_message'] ?? null;
    $this->voice_message = $s['voice_message'] ?? null;
  }
}

type Duration = string;

class EmailChannelRequest {
  public ?__string $configuration_set;
  public ?__boolean $enabled;
  public ?__string $from_address;
  public ?__string $identity;
  public ?__string $role_arn;

  public function __construct(shape(
    ?'configuration_set' => ?__string,
    ?'enabled' => ?__boolean,
    ?'from_address' => ?__string,
    ?'identity' => ?__string,
    ?'role_arn' => ?__string,
  ) $s = shape()) {
    $this->configuration_set = $s['configuration_set'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->from_address = $s['from_address'] ?? '';
    $this->identity = $s['identity'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class EmailChannelResponse {
  public ?__string $application_id;
  public ?__string $configuration_set;
  public ?__string $creation_date;
  public ?__boolean $enabled;
  public ?__string $from_address;
  public ?__boolean $has_credential;
  public ?__string $id;
  public ?__string $identity;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__integer $messages_per_second;
  public ?__string $platform;
  public ?__string $role_arn;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'configuration_set' => ?__string,
    ?'creation_date' => ?__string,
    ?'enabled' => ?__boolean,
    ?'from_address' => ?__string,
    ?'has_credential' => ?__boolean,
    ?'id' => ?__string,
    ?'identity' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'messages_per_second' => ?__integer,
    ?'platform' => ?__string,
    ?'role_arn' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->configuration_set = $s['configuration_set'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->from_address = $s['from_address'] ?? '';
    $this->has_credential = $s['has_credential'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->identity = $s['identity'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->messages_per_second = $s['messages_per_second'] ?? 0;
    $this->platform = $s['platform'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class EmailMessage {
  public ?__string $body;
  public ?__string $feedback_forwarding_address;
  public ?__string $from_address;
  public ?RawEmail $raw_email;
  public ?ListOf__string $reply_to_addresses;
  public ?SimpleEmail $simple_email;
  public ?MapOfListOf__string $substitutions;

  public function __construct(shape(
    ?'body' => ?__string,
    ?'feedback_forwarding_address' => ?__string,
    ?'from_address' => ?__string,
    ?'raw_email' => ?RawEmail,
    ?'reply_to_addresses' => ?ListOf__string,
    ?'simple_email' => ?SimpleEmail,
    ?'substitutions' => ?MapOfListOf__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
    $this->feedback_forwarding_address = $s['feedback_forwarding_address'] ?? '';
    $this->from_address = $s['from_address'] ?? '';
    $this->raw_email = $s['raw_email'] ?? null;
    $this->reply_to_addresses = $s['reply_to_addresses'] ?? vec[];
    $this->simple_email = $s['simple_email'] ?? null;
    $this->substitutions = $s['substitutions'] ?? dict[];
  }
}

class EmailMessageActivity {
  public ?JourneyEmailMessage $message_config;
  public ?__string $next_activity;
  public ?__string $template_name;
  public ?__string $template_version;

  public function __construct(shape(
    ?'message_config' => ?JourneyEmailMessage,
    ?'next_activity' => ?__string,
    ?'template_name' => ?__string,
    ?'template_version' => ?__string,
  ) $s = shape()) {
    $this->message_config = $s['message_config'] ?? null;
    $this->next_activity = $s['next_activity'] ?? '';
    $this->template_name = $s['template_name'] ?? '';
    $this->template_version = $s['template_version'] ?? '';
  }
}

class EmailTemplateRequest {
  public ?__string $default_substitutions;
  public ?__string $html_part;
  public ?__string $recommender_id;
  public ?__string $subject;
  public ?__string $template_description;
  public ?__string $text_part;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'default_substitutions' => ?__string,
    ?'html_part' => ?__string,
    ?'recommender_id' => ?__string,
    ?'subject' => ?__string,
    ?'template_description' => ?__string,
    ?'text_part' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->html_part = $s['html_part'] ?? '';
    $this->recommender_id = $s['recommender_id'] ?? '';
    $this->subject = $s['subject'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->text_part = $s['text_part'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class EmailTemplateResponse {
  public ?__string $arn;
  public ?__string $creation_date;
  public ?__string $default_substitutions;
  public ?__string $html_part;
  public ?__string $last_modified_date;
  public ?__string $recommender_id;
  public ?__string $subject;
  public ?__string $template_description;
  public ?__string $template_name;
  public ?TemplateType $template_type;
  public ?__string $text_part;
  public ?__string $version;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_date' => ?__string,
    ?'default_substitutions' => ?__string,
    ?'html_part' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'recommender_id' => ?__string,
    ?'subject' => ?__string,
    ?'template_description' => ?__string,
    ?'template_name' => ?__string,
    ?'template_type' => ?TemplateType,
    ?'text_part' => ?__string,
    ?'version' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->html_part = $s['html_part'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->recommender_id = $s['recommender_id'] ?? '';
    $this->subject = $s['subject'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->template_name = $s['template_name'] ?? '';
    $this->template_type = $s['template_type'] ?? '';
    $this->text_part = $s['text_part'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class EndpointBatchItem {
  public ?__string $address;
  public ?MapOfListOf__string $attributes;
  public ?ChannelType $channel_type;
  public ?EndpointDemographic $demographic;
  public ?__string $effective_date;
  public ?__string $endpoint_status;
  public ?__string $id;
  public ?EndpointLocation $location;
  public ?MapOf__double $metrics;
  public ?__string $opt_out;
  public ?__string $request_id;
  public ?EndpointUser $user;

  public function __construct(shape(
    ?'address' => ?__string,
    ?'attributes' => ?MapOfListOf__string,
    ?'channel_type' => ?ChannelType,
    ?'demographic' => ?EndpointDemographic,
    ?'effective_date' => ?__string,
    ?'endpoint_status' => ?__string,
    ?'id' => ?__string,
    ?'location' => ?EndpointLocation,
    ?'metrics' => ?MapOf__double,
    ?'opt_out' => ?__string,
    ?'request_id' => ?__string,
    ?'user' => ?EndpointUser,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->channel_type = $s['channel_type'] ?? '';
    $this->demographic = $s['demographic'] ?? null;
    $this->effective_date = $s['effective_date'] ?? '';
    $this->endpoint_status = $s['endpoint_status'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->metrics = $s['metrics'] ?? dict[];
    $this->opt_out = $s['opt_out'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->user = $s['user'] ?? null;
  }
}

class EndpointBatchRequest {
  public ?ListOfEndpointBatchItem $item;

  public function __construct(shape(
    ?'item' => ?ListOfEndpointBatchItem,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
  }
}

class EndpointDemographic {
  public ?__string $app_version;
  public ?__string $locale;
  public ?__string $make;
  public ?__string $model;
  public ?__string $model_version;
  public ?__string $platform;
  public ?__string $platform_version;
  public ?__string $timezone;

  public function __construct(shape(
    ?'app_version' => ?__string,
    ?'locale' => ?__string,
    ?'make' => ?__string,
    ?'model' => ?__string,
    ?'model_version' => ?__string,
    ?'platform' => ?__string,
    ?'platform_version' => ?__string,
    ?'timezone' => ?__string,
  ) $s = shape()) {
    $this->app_version = $s['app_version'] ?? '';
    $this->locale = $s['locale'] ?? '';
    $this->make = $s['make'] ?? '';
    $this->model = $s['model'] ?? '';
    $this->model_version = $s['model_version'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->platform_version = $s['platform_version'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
  }
}

class EndpointItemResponse {
  public ?__string $message;
  public ?__integer $status_code;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'status_code' => ?__integer,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->status_code = $s['status_code'] ?? 0;
  }
}

class EndpointLocation {
  public ?__string $city;
  public ?__string $country;
  public ?__double $latitude;
  public ?__double $longitude;
  public ?__string $postal_code;
  public ?__string $region;

  public function __construct(shape(
    ?'city' => ?__string,
    ?'country' => ?__string,
    ?'latitude' => ?__double,
    ?'longitude' => ?__double,
    ?'postal_code' => ?__string,
    ?'region' => ?__string,
  ) $s = shape()) {
    $this->city = $s['city'] ?? '';
    $this->country = $s['country'] ?? '';
    $this->latitude = $s['latitude'] ?? 0.0;
    $this->longitude = $s['longitude'] ?? 0.0;
    $this->postal_code = $s['postal_code'] ?? '';
    $this->region = $s['region'] ?? '';
  }
}

class EndpointMessageResult {
  public ?__string $address;
  public ?DeliveryStatus $delivery_status;
  public ?__string $message_id;
  public ?__integer $status_code;
  public ?__string $status_message;
  public ?__string $updated_token;

  public function __construct(shape(
    ?'address' => ?__string,
    ?'delivery_status' => ?DeliveryStatus,
    ?'message_id' => ?__string,
    ?'status_code' => ?__integer,
    ?'status_message' => ?__string,
    ?'updated_token' => ?__string,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->delivery_status = $s['delivery_status'] ?? '';
    $this->message_id = $s['message_id'] ?? '';
    $this->status_code = $s['status_code'] ?? 0;
    $this->status_message = $s['status_message'] ?? '';
    $this->updated_token = $s['updated_token'] ?? '';
  }
}

class EndpointRequest {
  public ?__string $address;
  public ?MapOfListOf__string $attributes;
  public ?ChannelType $channel_type;
  public ?EndpointDemographic $demographic;
  public ?__string $effective_date;
  public ?__string $endpoint_status;
  public ?EndpointLocation $location;
  public ?MapOf__double $metrics;
  public ?__string $opt_out;
  public ?__string $request_id;
  public ?EndpointUser $user;

  public function __construct(shape(
    ?'address' => ?__string,
    ?'attributes' => ?MapOfListOf__string,
    ?'channel_type' => ?ChannelType,
    ?'demographic' => ?EndpointDemographic,
    ?'effective_date' => ?__string,
    ?'endpoint_status' => ?__string,
    ?'location' => ?EndpointLocation,
    ?'metrics' => ?MapOf__double,
    ?'opt_out' => ?__string,
    ?'request_id' => ?__string,
    ?'user' => ?EndpointUser,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->channel_type = $s['channel_type'] ?? '';
    $this->demographic = $s['demographic'] ?? null;
    $this->effective_date = $s['effective_date'] ?? '';
    $this->endpoint_status = $s['endpoint_status'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->metrics = $s['metrics'] ?? dict[];
    $this->opt_out = $s['opt_out'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->user = $s['user'] ?? null;
  }
}

class EndpointResponse {
  public ?__string $address;
  public ?__string $application_id;
  public ?MapOfListOf__string $attributes;
  public ?ChannelType $channel_type;
  public ?__string $cohort_id;
  public ?__string $creation_date;
  public ?EndpointDemographic $demographic;
  public ?__string $effective_date;
  public ?__string $endpoint_status;
  public ?__string $id;
  public ?EndpointLocation $location;
  public ?MapOf__double $metrics;
  public ?__string $opt_out;
  public ?__string $request_id;
  public ?EndpointUser $user;

  public function __construct(shape(
    ?'address' => ?__string,
    ?'application_id' => ?__string,
    ?'attributes' => ?MapOfListOf__string,
    ?'channel_type' => ?ChannelType,
    ?'cohort_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'demographic' => ?EndpointDemographic,
    ?'effective_date' => ?__string,
    ?'endpoint_status' => ?__string,
    ?'id' => ?__string,
    ?'location' => ?EndpointLocation,
    ?'metrics' => ?MapOf__double,
    ?'opt_out' => ?__string,
    ?'request_id' => ?__string,
    ?'user' => ?EndpointUser,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->application_id = $s['application_id'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->channel_type = $s['channel_type'] ?? '';
    $this->cohort_id = $s['cohort_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->demographic = $s['demographic'] ?? null;
    $this->effective_date = $s['effective_date'] ?? '';
    $this->endpoint_status = $s['endpoint_status'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->metrics = $s['metrics'] ?? dict[];
    $this->opt_out = $s['opt_out'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->user = $s['user'] ?? null;
  }
}

class EndpointSendConfiguration {
  public ?__string $body_override;
  public ?MapOf__string $context;
  public ?__string $raw_content;
  public ?MapOfListOf__string $substitutions;
  public ?__string $title_override;

  public function __construct(shape(
    ?'body_override' => ?__string,
    ?'context' => ?MapOf__string,
    ?'raw_content' => ?__string,
    ?'substitutions' => ?MapOfListOf__string,
    ?'title_override' => ?__string,
  ) $s = shape()) {
    $this->body_override = $s['body_override'] ?? '';
    $this->context = $s['context'] ?? dict[];
    $this->raw_content = $s['raw_content'] ?? '';
    $this->substitutions = $s['substitutions'] ?? dict[];
    $this->title_override = $s['title_override'] ?? '';
  }
}

class EndpointUser {
  public ?MapOfListOf__string $user_attributes;
  public ?__string $user_id;

  public function __construct(shape(
    ?'user_attributes' => ?MapOfListOf__string,
    ?'user_id' => ?__string,
  ) $s = shape()) {
    $this->user_attributes = $s['user_attributes'] ?? dict[];
    $this->user_id = $s['user_id'] ?? '';
  }
}

class EndpointsResponse {
  public ?ListOfEndpointResponse $item;

  public function __construct(shape(
    ?'item' => ?ListOfEndpointResponse,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
  }
}

class Event {
  public ?__string $app_package_name;
  public ?__string $app_title;
  public ?__string $app_version_code;
  public ?MapOf__string $attributes;
  public ?__string $client_sdk_version;
  public ?__string $event_type;
  public ?MapOf__double $metrics;
  public ?__string $sdk_name;
  public ?Session $session;
  public ?__string $timestamp;

  public function __construct(shape(
    ?'app_package_name' => ?__string,
    ?'app_title' => ?__string,
    ?'app_version_code' => ?__string,
    ?'attributes' => ?MapOf__string,
    ?'client_sdk_version' => ?__string,
    ?'event_type' => ?__string,
    ?'metrics' => ?MapOf__double,
    ?'sdk_name' => ?__string,
    ?'session' => ?Session,
    ?'timestamp' => ?__string,
  ) $s = shape()) {
    $this->app_package_name = $s['app_package_name'] ?? '';
    $this->app_title = $s['app_title'] ?? '';
    $this->app_version_code = $s['app_version_code'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->client_sdk_version = $s['client_sdk_version'] ?? '';
    $this->event_type = $s['event_type'] ?? '';
    $this->metrics = $s['metrics'] ?? dict[];
    $this->sdk_name = $s['sdk_name'] ?? '';
    $this->session = $s['session'] ?? null;
    $this->timestamp = $s['timestamp'] ?? '';
  }
}

class EventCondition {
  public ?EventDimensions $dimensions;
  public ?__string $message_activity;

  public function __construct(shape(
    ?'dimensions' => ?EventDimensions,
    ?'message_activity' => ?__string,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? null;
    $this->message_activity = $s['message_activity'] ?? '';
  }
}

class EventDimensions {
  public ?MapOfAttributeDimension $attributes;
  public ?SetDimension $event_type;
  public ?MapOfMetricDimension $metrics;

  public function __construct(shape(
    ?'attributes' => ?MapOfAttributeDimension,
    ?'event_type' => ?SetDimension,
    ?'metrics' => ?MapOfMetricDimension,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->event_type = $s['event_type'] ?? null;
    $this->metrics = $s['metrics'] ?? dict[];
  }
}

class EventItemResponse {
  public ?__string $message;
  public ?__integer $status_code;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'status_code' => ?__integer,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->status_code = $s['status_code'] ?? 0;
  }
}

class EventStream {
  public ?__string $application_id;
  public ?__string $destination_stream_arn;
  public ?__string $external_id;
  public ?__string $last_modified_date;
  public ?__string $last_updated_by;
  public ?__string $role_arn;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'destination_stream_arn' => ?__string,
    ?'external_id' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'last_updated_by' => ?__string,
    ?'role_arn' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->destination_stream_arn = $s['destination_stream_arn'] ?? '';
    $this->external_id = $s['external_id'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->last_updated_by = $s['last_updated_by'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class EventsBatch {
  public ?PublicEndpoint $endpoint;
  public ?MapOfEvent $events;

  public function __construct(shape(
    ?'endpoint' => ?PublicEndpoint,
    ?'events' => ?MapOfEvent,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? null;
    $this->events = $s['events'] ?? dict[];
  }
}

class EventsRequest {
  public ?MapOfEventsBatch $batch_item;

  public function __construct(shape(
    ?'batch_item' => ?MapOfEventsBatch,
  ) $s = shape()) {
    $this->batch_item = $s['batch_item'] ?? dict[];
  }
}

class EventsResponse {
  public ?MapOfItemResponse $results;

  public function __construct(shape(
    ?'results' => ?MapOfItemResponse,
  ) $s = shape()) {
    $this->results = $s['results'] ?? dict[];
  }
}

class ExportJobRequest {
  public ?__string $role_arn;
  public ?__string $s_3_url_prefix;
  public ?__string $segment_id;
  public ?__integer $segment_version;

  public function __construct(shape(
    ?'role_arn' => ?__string,
    ?'s_3_url_prefix' => ?__string,
    ?'segment_id' => ?__string,
    ?'segment_version' => ?__integer,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_url_prefix = $s['s_3_url_prefix'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
    $this->segment_version = $s['segment_version'] ?? 0;
  }
}

class ExportJobResource {
  public ?__string $role_arn;
  public ?__string $s_3_url_prefix;
  public ?__string $segment_id;
  public ?__integer $segment_version;

  public function __construct(shape(
    ?'role_arn' => ?__string,
    ?'s_3_url_prefix' => ?__string,
    ?'segment_id' => ?__string,
    ?'segment_version' => ?__integer,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_url_prefix = $s['s_3_url_prefix'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
    $this->segment_version = $s['segment_version'] ?? 0;
  }
}

class ExportJobResponse {
  public ?__string $application_id;
  public ?__integer $completed_pieces;
  public ?__string $completion_date;
  public ?__string $creation_date;
  public ?ExportJobResource $definition;
  public ?__integer $failed_pieces;
  public ?ListOf__string $failures;
  public ?__string $id;
  public ?JobStatus $job_status;
  public ?__integer $total_failures;
  public ?__integer $total_pieces;
  public ?__integer $total_processed;
  public ?__string $type;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'completed_pieces' => ?__integer,
    ?'completion_date' => ?__string,
    ?'creation_date' => ?__string,
    ?'definition' => ?ExportJobResource,
    ?'failed_pieces' => ?__integer,
    ?'failures' => ?ListOf__string,
    ?'id' => ?__string,
    ?'job_status' => ?JobStatus,
    ?'total_failures' => ?__integer,
    ?'total_pieces' => ?__integer,
    ?'total_processed' => ?__integer,
    ?'type' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->completed_pieces = $s['completed_pieces'] ?? 0;
    $this->completion_date = $s['completion_date'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->failed_pieces = $s['failed_pieces'] ?? 0;
    $this->failures = $s['failures'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->job_status = $s['job_status'] ?? '';
    $this->total_failures = $s['total_failures'] ?? 0;
    $this->total_pieces = $s['total_pieces'] ?? 0;
    $this->total_processed = $s['total_processed'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

class ExportJobsResponse {
  public ?ListOfExportJobResponse $item;
  public ?__string $next_token;

  public function __construct(shape(
    ?'item' => ?ListOfExportJobResponse,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type FilterType = string;

class ForbiddenException {
  public ?__string $message;
  public ?__string $request_id;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type Format = string;

type Frequency = string;

class GCMChannelRequest {
  public ?__string $api_key;
  public ?__boolean $enabled;

  public function __construct(shape(
    ?'api_key' => ?__string,
    ?'enabled' => ?__boolean,
  ) $s = shape()) {
    $this->api_key = $s['api_key'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
  }
}

class GCMChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__string $credential;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__string $platform;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'credential' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'platform' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->credential = $s['credential'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class GCMMessage {
  public ?Action $action;
  public ?__string $body;
  public ?__string $collapse_key;
  public ?MapOf__string $data;
  public ?__string $icon_reference;
  public ?__string $image_icon_url;
  public ?__string $image_url;
  public ?__string $priority;
  public ?__string $raw_content;
  public ?__string $restricted_package_name;
  public ?__boolean $silent_push;
  public ?__string $small_image_icon_url;
  public ?__string $sound;
  public ?MapOfListOf__string $substitutions;
  public ?__integer $time_to_live;
  public ?__string $title;
  public ?__string $url;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'body' => ?__string,
    ?'collapse_key' => ?__string,
    ?'data' => ?MapOf__string,
    ?'icon_reference' => ?__string,
    ?'image_icon_url' => ?__string,
    ?'image_url' => ?__string,
    ?'priority' => ?__string,
    ?'raw_content' => ?__string,
    ?'restricted_package_name' => ?__string,
    ?'silent_push' => ?__boolean,
    ?'small_image_icon_url' => ?__string,
    ?'sound' => ?__string,
    ?'substitutions' => ?MapOfListOf__string,
    ?'time_to_live' => ?__integer,
    ?'title' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->collapse_key = $s['collapse_key'] ?? '';
    $this->data = $s['data'] ?? dict[];
    $this->icon_reference = $s['icon_reference'] ?? '';
    $this->image_icon_url = $s['image_icon_url'] ?? '';
    $this->image_url = $s['image_url'] ?? '';
    $this->priority = $s['priority'] ?? '';
    $this->raw_content = $s['raw_content'] ?? '';
    $this->restricted_package_name = $s['restricted_package_name'] ?? '';
    $this->silent_push = $s['silent_push'] ?? false;
    $this->small_image_icon_url = $s['small_image_icon_url'] ?? '';
    $this->sound = $s['sound'] ?? '';
    $this->substitutions = $s['substitutions'] ?? dict[];
    $this->time_to_live = $s['time_to_live'] ?? 0;
    $this->title = $s['title'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class GPSCoordinates {
  public ?__double $latitude;
  public ?__double $longitude;

  public function __construct(shape(
    ?'latitude' => ?__double,
    ?'longitude' => ?__double,
  ) $s = shape()) {
    $this->latitude = $s['latitude'] ?? 0.0;
    $this->longitude = $s['longitude'] ?? 0.0;
  }
}

class GPSPointDimension {
  public ?GPSCoordinates $coordinates;
  public ?__double $range_in_kilometers;

  public function __construct(shape(
    ?'coordinates' => ?GPSCoordinates,
    ?'range_in_kilometers' => ?__double,
  ) $s = shape()) {
    $this->coordinates = $s['coordinates'] ?? null;
    $this->range_in_kilometers = $s['range_in_kilometers'] ?? 0.0;
  }
}

class GetAdmChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetAdmChannelResponse {
  public ?ADMChannelResponse $adm_channel_response;

  public function __construct(shape(
    ?'adm_channel_response' => ?ADMChannelResponse,
  ) $s = shape()) {
    $this->adm_channel_response = $s['adm_channel_response'] ?? null;
  }
}

class GetApnsChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetApnsChannelResponse {
  public ?APNSChannelResponse $apns_channel_response;

  public function __construct(shape(
    ?'apns_channel_response' => ?APNSChannelResponse,
  ) $s = shape()) {
    $this->apns_channel_response = $s['apns_channel_response'] ?? null;
  }
}

class GetApnsSandboxChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetApnsSandboxChannelResponse {
  public ?APNSSandboxChannelResponse $apns_sandbox_channel_response;

  public function __construct(shape(
    ?'apns_sandbox_channel_response' => ?APNSSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_sandbox_channel_response = $s['apns_sandbox_channel_response'] ?? null;
  }
}

class GetApnsVoipChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetApnsVoipChannelResponse {
  public ?APNSVoipChannelResponse $apns_voip_channel_response;

  public function __construct(shape(
    ?'apns_voip_channel_response' => ?APNSVoipChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_channel_response = $s['apns_voip_channel_response'] ?? null;
  }
}

class GetApnsVoipSandboxChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetApnsVoipSandboxChannelResponse {
  public ?APNSVoipSandboxChannelResponse $apns_voip_sandbox_channel_response;

  public function __construct(shape(
    ?'apns_voip_sandbox_channel_response' => ?APNSVoipSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_sandbox_channel_response = $s['apns_voip_sandbox_channel_response'] ?? null;
  }
}

class GetAppRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetAppResponse {
  public ?ApplicationResponse $application_response;

  public function __construct(shape(
    ?'application_response' => ?ApplicationResponse,
  ) $s = shape()) {
    $this->application_response = $s['application_response'] ?? null;
  }
}

class GetApplicationDateRangeKpiRequest {
  public ?__string $application_id;
  public ?__timestampIso8601 $end_time;
  public ?__string $kpi_name;
  public ?__string $next_token;
  public ?__string $page_size;
  public ?__timestampIso8601 $start_time;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'end_time' => ?__timestampIso8601,
    ?'kpi_name' => ?__string,
    ?'next_token' => ?__string,
    ?'page_size' => ?__string,
    ?'start_time' => ?__timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->kpi_name = $s['kpi_name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetApplicationDateRangeKpiResponse {
  public ?ApplicationDateRangeKpiResponse $application_date_range_kpi_response;

  public function __construct(shape(
    ?'application_date_range_kpi_response' => ?ApplicationDateRangeKpiResponse,
  ) $s = shape()) {
    $this->application_date_range_kpi_response = $s['application_date_range_kpi_response'] ?? null;
  }
}

class GetApplicationSettingsRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetApplicationSettingsResponse {
  public ?ApplicationSettingsResource $application_settings_resource;

  public function __construct(shape(
    ?'application_settings_resource' => ?ApplicationSettingsResource,
  ) $s = shape()) {
    $this->application_settings_resource = $s['application_settings_resource'] ?? null;
  }
}

class GetAppsRequest {
  public ?__string $page_size;
  public ?__string $token;

  public function __construct(shape(
    ?'page_size' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->page_size = $s['page_size'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetAppsResponse {
  public ?ApplicationsResponse $applications_response;

  public function __construct(shape(
    ?'applications_response' => ?ApplicationsResponse,
  ) $s = shape()) {
    $this->applications_response = $s['applications_response'] ?? null;
  }
}

class GetBaiduChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetBaiduChannelResponse {
  public ?BaiduChannelResponse $baidu_channel_response;

  public function __construct(shape(
    ?'baidu_channel_response' => ?BaiduChannelResponse,
  ) $s = shape()) {
    $this->baidu_channel_response = $s['baidu_channel_response'] ?? null;
  }
}

class GetCampaignActivitiesRequest {
  public ?__string $application_id;
  public ?__string $campaign_id;
  public ?__string $page_size;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_id' => ?__string,
    ?'page_size' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_id = $s['campaign_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetCampaignActivitiesResponse {
  public ?ActivitiesResponse $activities_response;

  public function __construct(shape(
    ?'activities_response' => ?ActivitiesResponse,
  ) $s = shape()) {
    $this->activities_response = $s['activities_response'] ?? null;
  }
}

class GetCampaignDateRangeKpiRequest {
  public ?__string $application_id;
  public ?__string $campaign_id;
  public ?__timestampIso8601 $end_time;
  public ?__string $kpi_name;
  public ?__string $next_token;
  public ?__string $page_size;
  public ?__timestampIso8601 $start_time;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_id' => ?__string,
    ?'end_time' => ?__timestampIso8601,
    ?'kpi_name' => ?__string,
    ?'next_token' => ?__string,
    ?'page_size' => ?__string,
    ?'start_time' => ?__timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_id = $s['campaign_id'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->kpi_name = $s['kpi_name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetCampaignDateRangeKpiResponse {
  public ?CampaignDateRangeKpiResponse $campaign_date_range_kpi_response;

  public function __construct(shape(
    ?'campaign_date_range_kpi_response' => ?CampaignDateRangeKpiResponse,
  ) $s = shape()) {
    $this->campaign_date_range_kpi_response = $s['campaign_date_range_kpi_response'] ?? null;
  }
}

class GetCampaignRequest {
  public ?__string $application_id;
  public ?__string $campaign_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_id = $s['campaign_id'] ?? '';
  }
}

class GetCampaignResponse {
  public ?CampaignResponse $campaign_response;

  public function __construct(shape(
    ?'campaign_response' => ?CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $s['campaign_response'] ?? null;
  }
}

class GetCampaignVersionRequest {
  public ?__string $application_id;
  public ?__string $campaign_id;
  public ?__string $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_id = $s['campaign_id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetCampaignVersionResponse {
  public ?CampaignResponse $campaign_response;

  public function __construct(shape(
    ?'campaign_response' => ?CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $s['campaign_response'] ?? null;
  }
}

class GetCampaignVersionsRequest {
  public ?__string $application_id;
  public ?__string $campaign_id;
  public ?__string $page_size;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_id' => ?__string,
    ?'page_size' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_id = $s['campaign_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetCampaignVersionsResponse {
  public ?CampaignsResponse $campaigns_response;

  public function __construct(shape(
    ?'campaigns_response' => ?CampaignsResponse,
  ) $s = shape()) {
    $this->campaigns_response = $s['campaigns_response'] ?? null;
  }
}

class GetCampaignsRequest {
  public ?__string $application_id;
  public ?__string $page_size;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'page_size' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetCampaignsResponse {
  public ?CampaignsResponse $campaigns_response;

  public function __construct(shape(
    ?'campaigns_response' => ?CampaignsResponse,
  ) $s = shape()) {
    $this->campaigns_response = $s['campaigns_response'] ?? null;
  }
}

class GetChannelsRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetChannelsResponse {
  public ?ChannelsResponse $channels_response;

  public function __construct(shape(
    ?'channels_response' => ?ChannelsResponse,
  ) $s = shape()) {
    $this->channels_response = $s['channels_response'] ?? null;
  }
}

class GetEmailChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetEmailChannelResponse {
  public ?EmailChannelResponse $email_channel_response;

  public function __construct(shape(
    ?'email_channel_response' => ?EmailChannelResponse,
  ) $s = shape()) {
    $this->email_channel_response = $s['email_channel_response'] ?? null;
  }
}

class GetEmailTemplateRequest {
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetEmailTemplateResponse {
  public ?EmailTemplateResponse $email_template_response;

  public function __construct(shape(
    ?'email_template_response' => ?EmailTemplateResponse,
  ) $s = shape()) {
    $this->email_template_response = $s['email_template_response'] ?? null;
  }
}

class GetEndpointRequest {
  public ?__string $application_id;
  public ?__string $endpoint_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'endpoint_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->endpoint_id = $s['endpoint_id'] ?? '';
  }
}

class GetEndpointResponse {
  public ?EndpointResponse $endpoint_response;

  public function __construct(shape(
    ?'endpoint_response' => ?EndpointResponse,
  ) $s = shape()) {
    $this->endpoint_response = $s['endpoint_response'] ?? null;
  }
}

class GetEventStreamRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetEventStreamResponse {
  public ?EventStream $event_stream;

  public function __construct(shape(
    ?'event_stream' => ?EventStream,
  ) $s = shape()) {
    $this->event_stream = $s['event_stream'] ?? null;
  }
}

class GetExportJobRequest {
  public ?__string $application_id;
  public ?__string $job_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'job_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetExportJobResponse {
  public ?ExportJobResponse $export_job_response;

  public function __construct(shape(
    ?'export_job_response' => ?ExportJobResponse,
  ) $s = shape()) {
    $this->export_job_response = $s['export_job_response'] ?? null;
  }
}

class GetExportJobsRequest {
  public ?__string $application_id;
  public ?__string $page_size;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'page_size' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetExportJobsResponse {
  public ?ExportJobsResponse $export_jobs_response;

  public function __construct(shape(
    ?'export_jobs_response' => ?ExportJobsResponse,
  ) $s = shape()) {
    $this->export_jobs_response = $s['export_jobs_response'] ?? null;
  }
}

class GetGcmChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetGcmChannelResponse {
  public ?GCMChannelResponse $gcm_channel_response;

  public function __construct(shape(
    ?'gcm_channel_response' => ?GCMChannelResponse,
  ) $s = shape()) {
    $this->gcm_channel_response = $s['gcm_channel_response'] ?? null;
  }
}

class GetImportJobRequest {
  public ?__string $application_id;
  public ?__string $job_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'job_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetImportJobResponse {
  public ?ImportJobResponse $import_job_response;

  public function __construct(shape(
    ?'import_job_response' => ?ImportJobResponse,
  ) $s = shape()) {
    $this->import_job_response = $s['import_job_response'] ?? null;
  }
}

class GetImportJobsRequest {
  public ?__string $application_id;
  public ?__string $page_size;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'page_size' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetImportJobsResponse {
  public ?ImportJobsResponse $import_jobs_response;

  public function __construct(shape(
    ?'import_jobs_response' => ?ImportJobsResponse,
  ) $s = shape()) {
    $this->import_jobs_response = $s['import_jobs_response'] ?? null;
  }
}

class GetJourneyDateRangeKpiRequest {
  public ?__string $application_id;
  public ?__timestampIso8601 $end_time;
  public ?__string $journey_id;
  public ?__string $kpi_name;
  public ?__string $next_token;
  public ?__string $page_size;
  public ?__timestampIso8601 $start_time;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'end_time' => ?__timestampIso8601,
    ?'journey_id' => ?__string,
    ?'kpi_name' => ?__string,
    ?'next_token' => ?__string,
    ?'page_size' => ?__string,
    ?'start_time' => ?__timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->journey_id = $s['journey_id'] ?? '';
    $this->kpi_name = $s['kpi_name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetJourneyDateRangeKpiResponse {
  public ?JourneyDateRangeKpiResponse $journey_date_range_kpi_response;

  public function __construct(shape(
    ?'journey_date_range_kpi_response' => ?JourneyDateRangeKpiResponse,
  ) $s = shape()) {
    $this->journey_date_range_kpi_response = $s['journey_date_range_kpi_response'] ?? null;
  }
}

class GetJourneyExecutionActivityMetricsRequest {
  public ?__string $application_id;
  public ?__string $journey_activity_id;
  public ?__string $journey_id;
  public ?__string $next_token;
  public ?__string $page_size;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'journey_activity_id' => ?__string,
    ?'journey_id' => ?__string,
    ?'next_token' => ?__string,
    ?'page_size' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->journey_activity_id = $s['journey_activity_id'] ?? '';
    $this->journey_id = $s['journey_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
  }
}

class GetJourneyExecutionActivityMetricsResponse {
  public ?JourneyExecutionActivityMetricsResponse $journey_execution_activity_metrics_response;

  public function __construct(shape(
    ?'journey_execution_activity_metrics_response' => ?JourneyExecutionActivityMetricsResponse,
  ) $s = shape()) {
    $this->journey_execution_activity_metrics_response = $s['journey_execution_activity_metrics_response'] ?? null;
  }
}

class GetJourneyExecutionMetricsRequest {
  public ?__string $application_id;
  public ?__string $journey_id;
  public ?__string $next_token;
  public ?__string $page_size;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'journey_id' => ?__string,
    ?'next_token' => ?__string,
    ?'page_size' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->journey_id = $s['journey_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
  }
}

class GetJourneyExecutionMetricsResponse {
  public ?JourneyExecutionMetricsResponse $journey_execution_metrics_response;

  public function __construct(shape(
    ?'journey_execution_metrics_response' => ?JourneyExecutionMetricsResponse,
  ) $s = shape()) {
    $this->journey_execution_metrics_response = $s['journey_execution_metrics_response'] ?? null;
  }
}

class GetJourneyRequest {
  public ?__string $application_id;
  public ?__string $journey_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'journey_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->journey_id = $s['journey_id'] ?? '';
  }
}

class GetJourneyResponse {
  public ?JourneyResponse $journey_response;

  public function __construct(shape(
    ?'journey_response' => ?JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $s['journey_response'] ?? null;
  }
}

class GetPushTemplateRequest {
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetPushTemplateResponse {
  public ?PushNotificationTemplateResponse $push_notification_template_response;

  public function __construct(shape(
    ?'push_notification_template_response' => ?PushNotificationTemplateResponse,
  ) $s = shape()) {
    $this->push_notification_template_response = $s['push_notification_template_response'] ?? null;
  }
}

class GetRecommenderConfigurationRequest {
  public ?__string $recommender_id;

  public function __construct(shape(
    ?'recommender_id' => ?__string,
  ) $s = shape()) {
    $this->recommender_id = $s['recommender_id'] ?? '';
  }
}

class GetRecommenderConfigurationResponse {
  public ?RecommenderConfigurationResponse $recommender_configuration_response;

  public function __construct(shape(
    ?'recommender_configuration_response' => ?RecommenderConfigurationResponse,
  ) $s = shape()) {
    $this->recommender_configuration_response = $s['recommender_configuration_response'] ?? null;
  }
}

class GetRecommenderConfigurationsRequest {
  public ?__string $page_size;
  public ?__string $token;

  public function __construct(shape(
    ?'page_size' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->page_size = $s['page_size'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetRecommenderConfigurationsResponse {
  public ?ListRecommenderConfigurationsResponse $list_recommender_configurations_response;

  public function __construct(shape(
    ?'list_recommender_configurations_response' => ?ListRecommenderConfigurationsResponse,
  ) $s = shape()) {
    $this->list_recommender_configurations_response = $s['list_recommender_configurations_response'] ?? null;
  }
}

class GetSegmentExportJobsRequest {
  public ?__string $application_id;
  public ?__string $page_size;
  public ?__string $segment_id;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'page_size' => ?__string,
    ?'segment_id' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetSegmentExportJobsResponse {
  public ?ExportJobsResponse $export_jobs_response;

  public function __construct(shape(
    ?'export_jobs_response' => ?ExportJobsResponse,
  ) $s = shape()) {
    $this->export_jobs_response = $s['export_jobs_response'] ?? null;
  }
}

class GetSegmentImportJobsRequest {
  public ?__string $application_id;
  public ?__string $page_size;
  public ?__string $segment_id;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'page_size' => ?__string,
    ?'segment_id' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetSegmentImportJobsResponse {
  public ?ImportJobsResponse $import_jobs_response;

  public function __construct(shape(
    ?'import_jobs_response' => ?ImportJobsResponse,
  ) $s = shape()) {
    $this->import_jobs_response = $s['import_jobs_response'] ?? null;
  }
}

class GetSegmentRequest {
  public ?__string $application_id;
  public ?__string $segment_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'segment_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
  }
}

class GetSegmentResponse {
  public ?SegmentResponse $segment_response;

  public function __construct(shape(
    ?'segment_response' => ?SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $s['segment_response'] ?? null;
  }
}

class GetSegmentVersionRequest {
  public ?__string $application_id;
  public ?__string $segment_id;
  public ?__string $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'segment_id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetSegmentVersionResponse {
  public ?SegmentResponse $segment_response;

  public function __construct(shape(
    ?'segment_response' => ?SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $s['segment_response'] ?? null;
  }
}

class GetSegmentVersionsRequest {
  public ?__string $application_id;
  public ?__string $page_size;
  public ?__string $segment_id;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'page_size' => ?__string,
    ?'segment_id' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetSegmentVersionsResponse {
  public ?SegmentsResponse $segments_response;

  public function __construct(shape(
    ?'segments_response' => ?SegmentsResponse,
  ) $s = shape()) {
    $this->segments_response = $s['segments_response'] ?? null;
  }
}

class GetSegmentsRequest {
  public ?__string $application_id;
  public ?__string $page_size;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'page_size' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class GetSegmentsResponse {
  public ?SegmentsResponse $segments_response;

  public function __construct(shape(
    ?'segments_response' => ?SegmentsResponse,
  ) $s = shape()) {
    $this->segments_response = $s['segments_response'] ?? null;
  }
}

class GetSmsChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetSmsChannelResponse {
  public ?SMSChannelResponse $sms_channel_response;

  public function __construct(shape(
    ?'sms_channel_response' => ?SMSChannelResponse,
  ) $s = shape()) {
    $this->sms_channel_response = $s['sms_channel_response'] ?? null;
  }
}

class GetSmsTemplateRequest {
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetSmsTemplateResponse {
  public ?SMSTemplateResponse $sms_template_response;

  public function __construct(shape(
    ?'sms_template_response' => ?SMSTemplateResponse,
  ) $s = shape()) {
    $this->sms_template_response = $s['sms_template_response'] ?? null;
  }
}

class GetUserEndpointsRequest {
  public ?__string $application_id;
  public ?__string $user_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'user_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class GetUserEndpointsResponse {
  public ?EndpointsResponse $endpoints_response;

  public function __construct(shape(
    ?'endpoints_response' => ?EndpointsResponse,
  ) $s = shape()) {
    $this->endpoints_response = $s['endpoints_response'] ?? null;
  }
}

class GetVoiceChannelRequest {
  public ?__string $application_id;

  public function __construct(shape(
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetVoiceChannelResponse {
  public ?VoiceChannelResponse $voice_channel_response;

  public function __construct(shape(
    ?'voice_channel_response' => ?VoiceChannelResponse,
  ) $s = shape()) {
    $this->voice_channel_response = $s['voice_channel_response'] ?? null;
  }
}

class GetVoiceTemplateRequest {
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetVoiceTemplateResponse {
  public ?VoiceTemplateResponse $voice_template_response;

  public function __construct(shape(
    ?'voice_template_response' => ?VoiceTemplateResponse,
  ) $s = shape()) {
    $this->voice_template_response = $s['voice_template_response'] ?? null;
  }
}

class HoldoutActivity {
  public ?__string $next_activity;
  public ?__integer $percentage;

  public function __construct(shape(
    ?'next_activity' => ?__string,
    ?'percentage' => ?__integer,
  ) $s = shape()) {
    $this->next_activity = $s['next_activity'] ?? '';
    $this->percentage = $s['percentage'] ?? 0;
  }
}

class ImportJobRequest {
  public ?__boolean $define_segment;
  public ?__string $external_id;
  public ?Format $format;
  public ?__boolean $register_endpoints;
  public ?__string $role_arn;
  public ?__string $s_3_url;
  public ?__string $segment_id;
  public ?__string $segment_name;

  public function __construct(shape(
    ?'define_segment' => ?__boolean,
    ?'external_id' => ?__string,
    ?'format' => ?Format,
    ?'register_endpoints' => ?__boolean,
    ?'role_arn' => ?__string,
    ?'s_3_url' => ?__string,
    ?'segment_id' => ?__string,
    ?'segment_name' => ?__string,
  ) $s = shape()) {
    $this->define_segment = $s['define_segment'] ?? false;
    $this->external_id = $s['external_id'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->register_endpoints = $s['register_endpoints'] ?? false;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_url = $s['s_3_url'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
    $this->segment_name = $s['segment_name'] ?? '';
  }
}

class ImportJobResource {
  public ?__boolean $define_segment;
  public ?__string $external_id;
  public ?Format $format;
  public ?__boolean $register_endpoints;
  public ?__string $role_arn;
  public ?__string $s_3_url;
  public ?__string $segment_id;
  public ?__string $segment_name;

  public function __construct(shape(
    ?'define_segment' => ?__boolean,
    ?'external_id' => ?__string,
    ?'format' => ?Format,
    ?'register_endpoints' => ?__boolean,
    ?'role_arn' => ?__string,
    ?'s_3_url' => ?__string,
    ?'segment_id' => ?__string,
    ?'segment_name' => ?__string,
  ) $s = shape()) {
    $this->define_segment = $s['define_segment'] ?? false;
    $this->external_id = $s['external_id'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->register_endpoints = $s['register_endpoints'] ?? false;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_url = $s['s_3_url'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
    $this->segment_name = $s['segment_name'] ?? '';
  }
}

class ImportJobResponse {
  public ?__string $application_id;
  public ?__integer $completed_pieces;
  public ?__string $completion_date;
  public ?__string $creation_date;
  public ?ImportJobResource $definition;
  public ?__integer $failed_pieces;
  public ?ListOf__string $failures;
  public ?__string $id;
  public ?JobStatus $job_status;
  public ?__integer $total_failures;
  public ?__integer $total_pieces;
  public ?__integer $total_processed;
  public ?__string $type;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'completed_pieces' => ?__integer,
    ?'completion_date' => ?__string,
    ?'creation_date' => ?__string,
    ?'definition' => ?ImportJobResource,
    ?'failed_pieces' => ?__integer,
    ?'failures' => ?ListOf__string,
    ?'id' => ?__string,
    ?'job_status' => ?JobStatus,
    ?'total_failures' => ?__integer,
    ?'total_pieces' => ?__integer,
    ?'total_processed' => ?__integer,
    ?'type' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->completed_pieces = $s['completed_pieces'] ?? 0;
    $this->completion_date = $s['completion_date'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->failed_pieces = $s['failed_pieces'] ?? 0;
    $this->failures = $s['failures'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->job_status = $s['job_status'] ?? '';
    $this->total_failures = $s['total_failures'] ?? 0;
    $this->total_pieces = $s['total_pieces'] ?? 0;
    $this->total_processed = $s['total_processed'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

class ImportJobsResponse {
  public ?ListOfImportJobResponse $item;
  public ?__string $next_token;

  public function __construct(shape(
    ?'item' => ?ListOfImportJobResponse,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Include = string;

class InternalServerErrorException {
  public ?__string $message;
  public ?__string $request_id;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class ItemResponse {
  public ?EndpointItemResponse $endpoint_item_response;
  public ?MapOfEventItemResponse $events_item_response;

  public function __construct(shape(
    ?'endpoint_item_response' => ?EndpointItemResponse,
    ?'events_item_response' => ?MapOfEventItemResponse,
  ) $s = shape()) {
    $this->endpoint_item_response = $s['endpoint_item_response'] ?? null;
    $this->events_item_response = $s['events_item_response'] ?? dict[];
  }
}

type JobStatus = string;

class JourneyDateRangeKpiResponse {
  public ?__string $application_id;
  public ?__timestampIso8601 $end_time;
  public ?__string $journey_id;
  public ?__string $kpi_name;
  public ?BaseKpiResult $kpi_result;
  public ?__string $next_token;
  public ?__timestampIso8601 $start_time;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'end_time' => ?__timestampIso8601,
    ?'journey_id' => ?__string,
    ?'kpi_name' => ?__string,
    ?'kpi_result' => ?BaseKpiResult,
    ?'next_token' => ?__string,
    ?'start_time' => ?__timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->journey_id = $s['journey_id'] ?? '';
    $this->kpi_name = $s['kpi_name'] ?? '';
    $this->kpi_result = $s['kpi_result'] ?? null;
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class JourneyEmailMessage {
  public ?__string $from_address;

  public function __construct(shape(
    ?'from_address' => ?__string,
  ) $s = shape()) {
    $this->from_address = $s['from_address'] ?? '';
  }
}

class JourneyExecutionActivityMetricsResponse {
  public ?__string $activity_type;
  public ?__string $application_id;
  public ?__string $journey_activity_id;
  public ?__string $journey_id;
  public ?__string $last_evaluated_time;
  public ?MapOf__string $metrics;

  public function __construct(shape(
    ?'activity_type' => ?__string,
    ?'application_id' => ?__string,
    ?'journey_activity_id' => ?__string,
    ?'journey_id' => ?__string,
    ?'last_evaluated_time' => ?__string,
    ?'metrics' => ?MapOf__string,
  ) $s = shape()) {
    $this->activity_type = $s['activity_type'] ?? '';
    $this->application_id = $s['application_id'] ?? '';
    $this->journey_activity_id = $s['journey_activity_id'] ?? '';
    $this->journey_id = $s['journey_id'] ?? '';
    $this->last_evaluated_time = $s['last_evaluated_time'] ?? '';
    $this->metrics = $s['metrics'] ?? dict[];
  }
}

class JourneyExecutionMetricsResponse {
  public ?__string $application_id;
  public ?__string $journey_id;
  public ?__string $last_evaluated_time;
  public ?MapOf__string $metrics;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'journey_id' => ?__string,
    ?'last_evaluated_time' => ?__string,
    ?'metrics' => ?MapOf__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->journey_id = $s['journey_id'] ?? '';
    $this->last_evaluated_time = $s['last_evaluated_time'] ?? '';
    $this->metrics = $s['metrics'] ?? dict[];
  }
}

class JourneyLimits {
  public ?__integer $daily_cap;
  public ?__integer $endpoint_reentry_cap;
  public ?__integer $messages_per_second;

  public function __construct(shape(
    ?'daily_cap' => ?__integer,
    ?'endpoint_reentry_cap' => ?__integer,
    ?'messages_per_second' => ?__integer,
  ) $s = shape()) {
    $this->daily_cap = $s['daily_cap'] ?? 0;
    $this->endpoint_reentry_cap = $s['endpoint_reentry_cap'] ?? 0;
    $this->messages_per_second = $s['messages_per_second'] ?? 0;
  }
}

class JourneyResponse {
  public ?MapOfActivity $activities;
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__string $id;
  public ?__string $last_modified_date;
  public ?JourneyLimits $limits;
  public ?__boolean $local_time;
  public ?__string $name;
  public ?QuietTime $quiet_time;
  public ?__string $refresh_frequency;
  public ?JourneySchedule $schedule;
  public ?__string $start_activity;
  public ?StartCondition $start_condition;
  public ?State $state;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'activities' => ?MapOfActivity,
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'id' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'limits' => ?JourneyLimits,
    ?'local_time' => ?__boolean,
    ?'name' => ?__string,
    ?'quiet_time' => ?QuietTime,
    ?'refresh_frequency' => ?__string,
    ?'schedule' => ?JourneySchedule,
    ?'start_activity' => ?__string,
    ?'start_condition' => ?StartCondition,
    ?'state' => ?State,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->activities = $s['activities'] ?? dict[];
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->limits = $s['limits'] ?? null;
    $this->local_time = $s['local_time'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->quiet_time = $s['quiet_time'] ?? null;
    $this->refresh_frequency = $s['refresh_frequency'] ?? '';
    $this->schedule = $s['schedule'] ?? null;
    $this->start_activity = $s['start_activity'] ?? '';
    $this->start_condition = $s['start_condition'] ?? null;
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class JourneySchedule {
  public ?__timestampIso8601 $end_time;
  public ?__timestampIso8601 $start_time;
  public ?__string $timezone;

  public function __construct(shape(
    ?'end_time' => ?__timestampIso8601,
    ?'start_time' => ?__timestampIso8601,
    ?'timezone' => ?__string,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
    $this->timezone = $s['timezone'] ?? '';
  }
}

class JourneyStateRequest {
  public ?State $state;

  public function __construct(shape(
    ?'state' => ?State,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
  }
}

class JourneysResponse {
  public ?ListOfJourneyResponse $item;
  public ?__string $next_token;

  public function __construct(shape(
    ?'item' => ?ListOfJourneyResponse,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJourneysRequest {
  public ?__string $application_id;
  public ?__string $page_size;
  public ?__string $token;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'page_size' => ?__string,
    ?'token' => ?__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class ListJourneysResponse {
  public ?JourneysResponse $journeys_response;

  public function __construct(shape(
    ?'journeys_response' => ?JourneysResponse,
  ) $s = shape()) {
    $this->journeys_response = $s['journeys_response'] ?? null;
  }
}

type ListOfActivityResponse = vec<ActivityResponse>;

type ListOfApplicationResponse = vec<ApplicationResponse>;

type ListOfCampaignResponse = vec<CampaignResponse>;

type ListOfEndpointBatchItem = vec<EndpointBatchItem>;

type ListOfEndpointResponse = vec<EndpointResponse>;

type ListOfExportJobResponse = vec<ExportJobResponse>;

type ListOfImportJobResponse = vec<ImportJobResponse>;

type ListOfJourneyResponse = vec<JourneyResponse>;

type ListOfMultiConditionalBranch = vec<MultiConditionalBranch>;

type ListOfRandomSplitEntry = vec<RandomSplitEntry>;

type ListOfRecommenderConfigurationResponse = vec<RecommenderConfigurationResponse>;

type ListOfResultRow = vec<ResultRow>;

type ListOfResultRowValue = vec<ResultRowValue>;

type ListOfSegmentDimensions = vec<SegmentDimensions>;

type ListOfSegmentGroup = vec<SegmentGroup>;

type ListOfSegmentReference = vec<SegmentReference>;

type ListOfSegmentResponse = vec<SegmentResponse>;

type ListOfSimpleCondition = vec<SimpleCondition>;

type ListOfTemplateResponse = vec<TemplateResponse>;

type ListOfTemplateVersionResponse = vec<TemplateVersionResponse>;

type ListOfTreatmentResource = vec<TreatmentResource>;

type ListOfWriteTreatmentResource = vec<WriteTreatmentResource>;

type ListOf__EndpointTypesElement = vec<__EndpointTypesElement>;

type ListOf__string = vec<__string>;

class ListRecommenderConfigurationsResponse {
  public ?ListOfRecommenderConfigurationResponse $item;
  public ?__string $next_token;

  public function __construct(shape(
    ?'item' => ?ListOfRecommenderConfigurationResponse,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?__string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagsModel $tags_model;

  public function __construct(shape(
    ?'tags_model' => ?TagsModel,
  ) $s = shape()) {
    $this->tags_model = $s['tags_model'] ?? null;
  }
}

class ListTemplateVersionsRequest {
  public ?__string $next_token;
  public ?__string $page_size;
  public ?__string $template_name;
  public ?__string $template_type;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'page_size' => ?__string,
    ?'template_name' => ?__string,
    ?'template_type' => ?__string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->template_name = $s['template_name'] ?? '';
    $this->template_type = $s['template_type'] ?? '';
  }
}

class ListTemplateVersionsResponse {
  public ?TemplateVersionsResponse $template_versions_response;

  public function __construct(shape(
    ?'template_versions_response' => ?TemplateVersionsResponse,
  ) $s = shape()) {
    $this->template_versions_response = $s['template_versions_response'] ?? null;
  }
}

class ListTemplatesRequest {
  public ?__string $next_token;
  public ?__string $page_size;
  public ?__string $prefix;
  public ?__string $template_type;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'page_size' => ?__string,
    ?'prefix' => ?__string,
    ?'template_type' => ?__string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->template_type = $s['template_type'] ?? '';
  }
}

class ListTemplatesResponse {
  public ?TemplatesResponse $templates_response;

  public function __construct(shape(
    ?'templates_response' => ?TemplatesResponse,
  ) $s = shape()) {
    $this->templates_response = $s['templates_response'] ?? null;
  }
}

type MapOfActivity = dict<__string, Activity>;

type MapOfAddressConfiguration = dict<__string, AddressConfiguration>;

type MapOfAttributeDimension = dict<__string, AttributeDimension>;

type MapOfChannelResponse = dict<__string, ChannelResponse>;

type MapOfEndpointMessageResult = dict<__string, EndpointMessageResult>;

type MapOfEndpointSendConfiguration = dict<__string, EndpointSendConfiguration>;

type MapOfEvent = dict<__string, Event>;

type MapOfEventItemResponse = dict<__string, EventItemResponse>;

type MapOfEventsBatch = dict<__string, EventsBatch>;

type MapOfItemResponse = dict<__string, ItemResponse>;

type MapOfListOf__string = dict<__string, ListOf__string>;

type MapOfMapOfEndpointMessageResult = dict<__string, MapOfEndpointMessageResult>;

type MapOfMessageResult = dict<__string, MessageResult>;

type MapOfMetricDimension = dict<__string, MetricDimension>;

type MapOf__double = dict<__string, __double>;

type MapOf__integer = dict<__string, __integer>;

type MapOf__string = dict<__string, __string>;

class Message {
  public ?Action $action;
  public ?__string $body;
  public ?__string $image_icon_url;
  public ?__string $image_small_icon_url;
  public ?__string $image_url;
  public ?__string $json_body;
  public ?__string $media_url;
  public ?__string $raw_content;
  public ?__boolean $silent_push;
  public ?__integer $time_to_live;
  public ?__string $title;
  public ?__string $url;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'body' => ?__string,
    ?'image_icon_url' => ?__string,
    ?'image_small_icon_url' => ?__string,
    ?'image_url' => ?__string,
    ?'json_body' => ?__string,
    ?'media_url' => ?__string,
    ?'raw_content' => ?__string,
    ?'silent_push' => ?__boolean,
    ?'time_to_live' => ?__integer,
    ?'title' => ?__string,
    ?'url' => ?__string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->image_icon_url = $s['image_icon_url'] ?? '';
    $this->image_small_icon_url = $s['image_small_icon_url'] ?? '';
    $this->image_url = $s['image_url'] ?? '';
    $this->json_body = $s['json_body'] ?? '';
    $this->media_url = $s['media_url'] ?? '';
    $this->raw_content = $s['raw_content'] ?? '';
    $this->silent_push = $s['silent_push'] ?? false;
    $this->time_to_live = $s['time_to_live'] ?? 0;
    $this->title = $s['title'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class MessageBody {
  public ?__string $message;
  public ?__string $request_id;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class MessageConfiguration {
  public ?Message $adm_message;
  public ?Message $apns_message;
  public ?Message $baidu_message;
  public ?CampaignCustomMessage $custom_message;
  public ?Message $default_message;
  public ?CampaignEmailMessage $email_message;
  public ?Message $gcm_message;
  public ?CampaignSmsMessage $sms_message;

  public function __construct(shape(
    ?'adm_message' => ?Message,
    ?'apns_message' => ?Message,
    ?'baidu_message' => ?Message,
    ?'custom_message' => ?CampaignCustomMessage,
    ?'default_message' => ?Message,
    ?'email_message' => ?CampaignEmailMessage,
    ?'gcm_message' => ?Message,
    ?'sms_message' => ?CampaignSmsMessage,
  ) $s = shape()) {
    $this->adm_message = $s['adm_message'] ?? null;
    $this->apns_message = $s['apns_message'] ?? null;
    $this->baidu_message = $s['baidu_message'] ?? null;
    $this->custom_message = $s['custom_message'] ?? null;
    $this->default_message = $s['default_message'] ?? null;
    $this->email_message = $s['email_message'] ?? null;
    $this->gcm_message = $s['gcm_message'] ?? null;
    $this->sms_message = $s['sms_message'] ?? null;
  }
}

class MessageRequest {
  public ?MapOfAddressConfiguration $addresses;
  public ?MapOf__string $context;
  public ?MapOfEndpointSendConfiguration $endpoints;
  public ?DirectMessageConfiguration $message_configuration;
  public ?TemplateConfiguration $template_configuration;
  public ?__string $trace_id;

  public function __construct(shape(
    ?'addresses' => ?MapOfAddressConfiguration,
    ?'context' => ?MapOf__string,
    ?'endpoints' => ?MapOfEndpointSendConfiguration,
    ?'message_configuration' => ?DirectMessageConfiguration,
    ?'template_configuration' => ?TemplateConfiguration,
    ?'trace_id' => ?__string,
  ) $s = shape()) {
    $this->addresses = $s['addresses'] ?? dict[];
    $this->context = $s['context'] ?? dict[];
    $this->endpoints = $s['endpoints'] ?? dict[];
    $this->message_configuration = $s['message_configuration'] ?? null;
    $this->template_configuration = $s['template_configuration'] ?? null;
    $this->trace_id = $s['trace_id'] ?? '';
  }
}

class MessageResponse {
  public ?__string $application_id;
  public ?MapOfEndpointMessageResult $endpoint_result;
  public ?__string $request_id;
  public ?MapOfMessageResult $result;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'endpoint_result' => ?MapOfEndpointMessageResult,
    ?'request_id' => ?__string,
    ?'result' => ?MapOfMessageResult,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->endpoint_result = $s['endpoint_result'] ?? dict[];
    $this->request_id = $s['request_id'] ?? '';
    $this->result = $s['result'] ?? dict[];
  }
}

class MessageResult {
  public ?DeliveryStatus $delivery_status;
  public ?__string $message_id;
  public ?__integer $status_code;
  public ?__string $status_message;
  public ?__string $updated_token;

  public function __construct(shape(
    ?'delivery_status' => ?DeliveryStatus,
    ?'message_id' => ?__string,
    ?'status_code' => ?__integer,
    ?'status_message' => ?__string,
    ?'updated_token' => ?__string,
  ) $s = shape()) {
    $this->delivery_status = $s['delivery_status'] ?? '';
    $this->message_id = $s['message_id'] ?? '';
    $this->status_code = $s['status_code'] ?? 0;
    $this->status_message = $s['status_message'] ?? '';
    $this->updated_token = $s['updated_token'] ?? '';
  }
}

type MessageType = string;

class MethodNotAllowedException {
  public ?__string $message;
  public ?__string $request_id;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class MetricDimension {
  public ?__string $comparison_operator;
  public ?__double $value;

  public function __construct(shape(
    ?'comparison_operator' => ?__string,
    ?'value' => ?__double,
  ) $s = shape()) {
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->value = $s['value'] ?? 0.0;
  }
}

type Mode = string;

class MultiConditionalBranch {
  public ?SimpleCondition $condition;
  public ?__string $next_activity;

  public function __construct(shape(
    ?'condition' => ?SimpleCondition,
    ?'next_activity' => ?__string,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? null;
    $this->next_activity = $s['next_activity'] ?? '';
  }
}

class MultiConditionalSplitActivity {
  public ?ListOfMultiConditionalBranch $branches;
  public ?__string $default_activity;
  public ?WaitTime $evaluation_wait_time;

  public function __construct(shape(
    ?'branches' => ?ListOfMultiConditionalBranch,
    ?'default_activity' => ?__string,
    ?'evaluation_wait_time' => ?WaitTime,
  ) $s = shape()) {
    $this->branches = $s['branches'] ?? vec[];
    $this->default_activity = $s['default_activity'] ?? '';
    $this->evaluation_wait_time = $s['evaluation_wait_time'] ?? null;
  }
}

class NotFoundException {
  public ?__string $message;
  public ?__string $request_id;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class NumberValidateRequest {
  public ?__string $iso_country_code;
  public ?__string $phone_number;

  public function __construct(shape(
    ?'iso_country_code' => ?__string,
    ?'phone_number' => ?__string,
  ) $s = shape()) {
    $this->iso_country_code = $s['iso_country_code'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
  }
}

class NumberValidateResponse {
  public ?__string $carrier;
  public ?__string $city;
  public ?__string $cleansed_phone_number_e_164;
  public ?__string $cleansed_phone_number_national;
  public ?__string $country;
  public ?__string $country_code_iso_2;
  public ?__string $country_code_numeric;
  public ?__string $county;
  public ?__string $original_country_code_iso_2;
  public ?__string $original_phone_number;
  public ?__string $phone_type;
  public ?__integer $phone_type_code;
  public ?__string $timezone;
  public ?__string $zip_code;

  public function __construct(shape(
    ?'carrier' => ?__string,
    ?'city' => ?__string,
    ?'cleansed_phone_number_e_164' => ?__string,
    ?'cleansed_phone_number_national' => ?__string,
    ?'country' => ?__string,
    ?'country_code_iso_2' => ?__string,
    ?'country_code_numeric' => ?__string,
    ?'county' => ?__string,
    ?'original_country_code_iso_2' => ?__string,
    ?'original_phone_number' => ?__string,
    ?'phone_type' => ?__string,
    ?'phone_type_code' => ?__integer,
    ?'timezone' => ?__string,
    ?'zip_code' => ?__string,
  ) $s = shape()) {
    $this->carrier = $s['carrier'] ?? '';
    $this->city = $s['city'] ?? '';
    $this->cleansed_phone_number_e_164 = $s['cleansed_phone_number_e_164'] ?? '';
    $this->cleansed_phone_number_national = $s['cleansed_phone_number_national'] ?? '';
    $this->country = $s['country'] ?? '';
    $this->country_code_iso_2 = $s['country_code_iso_2'] ?? '';
    $this->country_code_numeric = $s['country_code_numeric'] ?? '';
    $this->county = $s['county'] ?? '';
    $this->original_country_code_iso_2 = $s['original_country_code_iso_2'] ?? '';
    $this->original_phone_number = $s['original_phone_number'] ?? '';
    $this->phone_type = $s['phone_type'] ?? '';
    $this->phone_type_code = $s['phone_type_code'] ?? 0;
    $this->timezone = $s['timezone'] ?? '';
    $this->zip_code = $s['zip_code'] ?? '';
  }
}

type Operator = string;

class PayloadTooLargeException {
  public ?__string $message;
  public ?__string $request_id;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class PhoneNumberValidateRequest {
  public ?NumberValidateRequest $number_validate_request;

  public function __construct(shape(
    ?'number_validate_request' => ?NumberValidateRequest,
  ) $s = shape()) {
    $this->number_validate_request = $s['number_validate_request'] ?? null;
  }
}

class PhoneNumberValidateResponse {
  public ?NumberValidateResponse $number_validate_response;

  public function __construct(shape(
    ?'number_validate_response' => ?NumberValidateResponse,
  ) $s = shape()) {
    $this->number_validate_response = $s['number_validate_response'] ?? null;
  }
}

class PublicEndpoint {
  public ?__string $address;
  public ?MapOfListOf__string $attributes;
  public ?ChannelType $channel_type;
  public ?EndpointDemographic $demographic;
  public ?__string $effective_date;
  public ?__string $endpoint_status;
  public ?EndpointLocation $location;
  public ?MapOf__double $metrics;
  public ?__string $opt_out;
  public ?__string $request_id;
  public ?EndpointUser $user;

  public function __construct(shape(
    ?'address' => ?__string,
    ?'attributes' => ?MapOfListOf__string,
    ?'channel_type' => ?ChannelType,
    ?'demographic' => ?EndpointDemographic,
    ?'effective_date' => ?__string,
    ?'endpoint_status' => ?__string,
    ?'location' => ?EndpointLocation,
    ?'metrics' => ?MapOf__double,
    ?'opt_out' => ?__string,
    ?'request_id' => ?__string,
    ?'user' => ?EndpointUser,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->channel_type = $s['channel_type'] ?? '';
    $this->demographic = $s['demographic'] ?? null;
    $this->effective_date = $s['effective_date'] ?? '';
    $this->endpoint_status = $s['endpoint_status'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->metrics = $s['metrics'] ?? dict[];
    $this->opt_out = $s['opt_out'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->user = $s['user'] ?? null;
  }
}

class PushNotificationTemplateRequest {
  public ?AndroidPushNotificationTemplate $adm;
  public ?APNSPushNotificationTemplate $apns;
  public ?AndroidPushNotificationTemplate $baidu;
  public ?DefaultPushNotificationTemplate $default;
  public ?__string $default_substitutions;
  public ?AndroidPushNotificationTemplate $gcm;
  public ?__string $recommender_id;
  public ?__string $template_description;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'adm' => ?AndroidPushNotificationTemplate,
    ?'apns' => ?APNSPushNotificationTemplate,
    ?'baidu' => ?AndroidPushNotificationTemplate,
    ?'default' => ?DefaultPushNotificationTemplate,
    ?'default_substitutions' => ?__string,
    ?'gcm' => ?AndroidPushNotificationTemplate,
    ?'recommender_id' => ?__string,
    ?'template_description' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->adm = $s['adm'] ?? null;
    $this->apns = $s['apns'] ?? null;
    $this->baidu = $s['baidu'] ?? null;
    $this->default = $s['default'] ?? null;
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->gcm = $s['gcm'] ?? null;
    $this->recommender_id = $s['recommender_id'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class PushNotificationTemplateResponse {
  public ?AndroidPushNotificationTemplate $adm;
  public ?APNSPushNotificationTemplate $apns;
  public ?__string $arn;
  public ?AndroidPushNotificationTemplate $baidu;
  public ?__string $creation_date;
  public ?DefaultPushNotificationTemplate $default;
  public ?__string $default_substitutions;
  public ?AndroidPushNotificationTemplate $gcm;
  public ?__string $last_modified_date;
  public ?__string $recommender_id;
  public ?__string $template_description;
  public ?__string $template_name;
  public ?TemplateType $template_type;
  public ?__string $version;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'adm' => ?AndroidPushNotificationTemplate,
    ?'apns' => ?APNSPushNotificationTemplate,
    ?'arn' => ?__string,
    ?'baidu' => ?AndroidPushNotificationTemplate,
    ?'creation_date' => ?__string,
    ?'default' => ?DefaultPushNotificationTemplate,
    ?'default_substitutions' => ?__string,
    ?'gcm' => ?AndroidPushNotificationTemplate,
    ?'last_modified_date' => ?__string,
    ?'recommender_id' => ?__string,
    ?'template_description' => ?__string,
    ?'template_name' => ?__string,
    ?'template_type' => ?TemplateType,
    ?'version' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->adm = $s['adm'] ?? null;
    $this->apns = $s['apns'] ?? null;
    $this->arn = $s['arn'] ?? '';
    $this->baidu = $s['baidu'] ?? null;
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default = $s['default'] ?? null;
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->gcm = $s['gcm'] ?? null;
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->recommender_id = $s['recommender_id'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->template_name = $s['template_name'] ?? '';
    $this->template_type = $s['template_type'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class PutEventStreamRequest {
  public ?__string $application_id;
  public ?WriteEventStream $write_event_stream;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'write_event_stream' => ?WriteEventStream,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->write_event_stream = $s['write_event_stream'] ?? null;
  }
}

class PutEventStreamResponse {
  public ?EventStream $event_stream;

  public function __construct(shape(
    ?'event_stream' => ?EventStream,
  ) $s = shape()) {
    $this->event_stream = $s['event_stream'] ?? null;
  }
}

class PutEventsRequest {
  public ?__string $application_id;
  public ?EventsRequest $events_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'events_request' => ?EventsRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->events_request = $s['events_request'] ?? null;
  }
}

class PutEventsResponse {
  public ?EventsResponse $events_response;

  public function __construct(shape(
    ?'events_response' => ?EventsResponse,
  ) $s = shape()) {
    $this->events_response = $s['events_response'] ?? null;
  }
}

class QuietTime {
  public ?__string $end;
  public ?__string $start;

  public function __construct(shape(
    ?'end' => ?__string,
    ?'start' => ?__string,
  ) $s = shape()) {
    $this->end = $s['end'] ?? '';
    $this->start = $s['start'] ?? '';
  }
}

class RandomSplitActivity {
  public ?ListOfRandomSplitEntry $branches;

  public function __construct(shape(
    ?'branches' => ?ListOfRandomSplitEntry,
  ) $s = shape()) {
    $this->branches = $s['branches'] ?? vec[];
  }
}

class RandomSplitEntry {
  public ?__string $next_activity;
  public ?__integer $percentage;

  public function __construct(shape(
    ?'next_activity' => ?__string,
    ?'percentage' => ?__integer,
  ) $s = shape()) {
    $this->next_activity = $s['next_activity'] ?? '';
    $this->percentage = $s['percentage'] ?? 0;
  }
}

class RawEmail {
  public ?__blob $data;

  public function __construct(shape(
    ?'data' => ?__blob,
  ) $s = shape()) {
    $this->data = $s['data'] ?? '';
  }
}

class RecencyDimension {
  public ?Duration $duration;
  public ?RecencyType $recency_type;

  public function __construct(shape(
    ?'duration' => ?Duration,
    ?'recency_type' => ?RecencyType,
  ) $s = shape()) {
    $this->duration = $s['duration'] ?? '';
    $this->recency_type = $s['recency_type'] ?? '';
  }
}

type RecencyType = string;

class RecommenderConfigurationResponse {
  public ?MapOf__string $attributes;
  public ?__string $creation_date;
  public ?__string $description;
  public ?__string $id;
  public ?__string $last_modified_date;
  public ?__string $name;
  public ?__string $recommendation_provider_id_type;
  public ?__string $recommendation_provider_role_arn;
  public ?__string $recommendation_provider_uri;
  public ?__string $recommendation_transformer_uri;
  public ?__string $recommendations_display_name;
  public ?__integer $recommendations_per_message;

  public function __construct(shape(
    ?'attributes' => ?MapOf__string,
    ?'creation_date' => ?__string,
    ?'description' => ?__string,
    ?'id' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'name' => ?__string,
    ?'recommendation_provider_id_type' => ?__string,
    ?'recommendation_provider_role_arn' => ?__string,
    ?'recommendation_provider_uri' => ?__string,
    ?'recommendation_transformer_uri' => ?__string,
    ?'recommendations_display_name' => ?__string,
    ?'recommendations_per_message' => ?__integer,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->creation_date = $s['creation_date'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->recommendation_provider_id_type = $s['recommendation_provider_id_type'] ?? '';
    $this->recommendation_provider_role_arn = $s['recommendation_provider_role_arn'] ?? '';
    $this->recommendation_provider_uri = $s['recommendation_provider_uri'] ?? '';
    $this->recommendation_transformer_uri = $s['recommendation_transformer_uri'] ?? '';
    $this->recommendations_display_name = $s['recommendations_display_name'] ?? '';
    $this->recommendations_per_message = $s['recommendations_per_message'] ?? 0;
  }
}

class RemoveAttributesRequest {
  public ?__string $application_id;
  public ?__string $attribute_type;
  public ?UpdateAttributesRequest $update_attributes_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'attribute_type' => ?__string,
    ?'update_attributes_request' => ?UpdateAttributesRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->attribute_type = $s['attribute_type'] ?? '';
    $this->update_attributes_request = $s['update_attributes_request'] ?? null;
  }
}

class RemoveAttributesResponse {
  public ?AttributesResource $attributes_resource;

  public function __construct(shape(
    ?'attributes_resource' => ?AttributesResource,
  ) $s = shape()) {
    $this->attributes_resource = $s['attributes_resource'] ?? null;
  }
}

class ResultRow {
  public ?ListOfResultRowValue $grouped_bys;
  public ?ListOfResultRowValue $values;

  public function __construct(shape(
    ?'grouped_bys' => ?ListOfResultRowValue,
    ?'values' => ?ListOfResultRowValue,
  ) $s = shape()) {
    $this->grouped_bys = $s['grouped_bys'] ?? vec[];
    $this->values = $s['values'] ?? vec[];
  }
}

class ResultRowValue {
  public ?__string $key;
  public ?__string $type;
  public ?__string $value;

  public function __construct(shape(
    ?'key' => ?__string,
    ?'type' => ?__string,
    ?'value' => ?__string,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class SMSChannelRequest {
  public ?__boolean $enabled;
  public ?__string $sender_id;
  public ?__string $short_code;

  public function __construct(shape(
    ?'enabled' => ?__boolean,
    ?'sender_id' => ?__string,
    ?'short_code' => ?__string,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->sender_id = $s['sender_id'] ?? '';
    $this->short_code = $s['short_code'] ?? '';
  }
}

class SMSChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__string $platform;
  public ?__integer $promotional_messages_per_second;
  public ?__string $sender_id;
  public ?__string $short_code;
  public ?__integer $transactional_messages_per_second;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'platform' => ?__string,
    ?'promotional_messages_per_second' => ?__integer,
    ?'sender_id' => ?__string,
    ?'short_code' => ?__string,
    ?'transactional_messages_per_second' => ?__integer,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->promotional_messages_per_second = $s['promotional_messages_per_second'] ?? 0;
    $this->sender_id = $s['sender_id'] ?? '';
    $this->short_code = $s['short_code'] ?? '';
    $this->transactional_messages_per_second = $s['transactional_messages_per_second'] ?? 0;
    $this->version = $s['version'] ?? 0;
  }
}

class SMSMessage {
  public ?__string $body;
  public ?__string $keyword;
  public ?__string $media_url;
  public ?MessageType $message_type;
  public ?__string $origination_number;
  public ?__string $sender_id;
  public ?MapOfListOf__string $substitutions;

  public function __construct(shape(
    ?'body' => ?__string,
    ?'keyword' => ?__string,
    ?'media_url' => ?__string,
    ?'message_type' => ?MessageType,
    ?'origination_number' => ?__string,
    ?'sender_id' => ?__string,
    ?'substitutions' => ?MapOfListOf__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
    $this->keyword = $s['keyword'] ?? '';
    $this->media_url = $s['media_url'] ?? '';
    $this->message_type = $s['message_type'] ?? '';
    $this->origination_number = $s['origination_number'] ?? '';
    $this->sender_id = $s['sender_id'] ?? '';
    $this->substitutions = $s['substitutions'] ?? dict[];
  }
}

class SMSTemplateRequest {
  public ?__string $body;
  public ?__string $default_substitutions;
  public ?__string $recommender_id;
  public ?__string $template_description;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'body' => ?__string,
    ?'default_substitutions' => ?__string,
    ?'recommender_id' => ?__string,
    ?'template_description' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->recommender_id = $s['recommender_id'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class SMSTemplateResponse {
  public ?__string $arn;
  public ?__string $body;
  public ?__string $creation_date;
  public ?__string $default_substitutions;
  public ?__string $last_modified_date;
  public ?__string $recommender_id;
  public ?__string $template_description;
  public ?__string $template_name;
  public ?TemplateType $template_type;
  public ?__string $version;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'body' => ?__string,
    ?'creation_date' => ?__string,
    ?'default_substitutions' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'recommender_id' => ?__string,
    ?'template_description' => ?__string,
    ?'template_name' => ?__string,
    ?'template_type' => ?TemplateType,
    ?'version' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->recommender_id = $s['recommender_id'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->template_name = $s['template_name'] ?? '';
    $this->template_type = $s['template_type'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class Schedule {
  public ?__string $end_time;
  public ?CampaignEventFilter $event_filter;
  public ?Frequency $frequency;
  public ?__boolean $is_local_time;
  public ?QuietTime $quiet_time;
  public ?__string $start_time;
  public ?__string $timezone;

  public function __construct(shape(
    ?'end_time' => ?__string,
    ?'event_filter' => ?CampaignEventFilter,
    ?'frequency' => ?Frequency,
    ?'is_local_time' => ?__boolean,
    ?'quiet_time' => ?QuietTime,
    ?'start_time' => ?__string,
    ?'timezone' => ?__string,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? '';
    $this->event_filter = $s['event_filter'] ?? null;
    $this->frequency = $s['frequency'] ?? '';
    $this->is_local_time = $s['is_local_time'] ?? false;
    $this->quiet_time = $s['quiet_time'] ?? null;
    $this->start_time = $s['start_time'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
  }
}

class SegmentBehaviors {
  public ?RecencyDimension $recency;

  public function __construct(shape(
    ?'recency' => ?RecencyDimension,
  ) $s = shape()) {
    $this->recency = $s['recency'] ?? null;
  }
}

class SegmentCondition {
  public ?__string $segment_id;

  public function __construct(shape(
    ?'segment_id' => ?__string,
  ) $s = shape()) {
    $this->segment_id = $s['segment_id'] ?? '';
  }
}

class SegmentDemographics {
  public ?SetDimension $app_version;
  public ?SetDimension $channel;
  public ?SetDimension $device_type;
  public ?SetDimension $make;
  public ?SetDimension $model;
  public ?SetDimension $platform;

  public function __construct(shape(
    ?'app_version' => ?SetDimension,
    ?'channel' => ?SetDimension,
    ?'device_type' => ?SetDimension,
    ?'make' => ?SetDimension,
    ?'model' => ?SetDimension,
    ?'platform' => ?SetDimension,
  ) $s = shape()) {
    $this->app_version = $s['app_version'] ?? null;
    $this->channel = $s['channel'] ?? null;
    $this->device_type = $s['device_type'] ?? null;
    $this->make = $s['make'] ?? null;
    $this->model = $s['model'] ?? null;
    $this->platform = $s['platform'] ?? null;
  }
}

class SegmentDimensions {
  public ?MapOfAttributeDimension $attributes;
  public ?SegmentBehaviors $behavior;
  public ?SegmentDemographics $demographic;
  public ?SegmentLocation $location;
  public ?MapOfMetricDimension $metrics;
  public ?MapOfAttributeDimension $user_attributes;

  public function __construct(shape(
    ?'attributes' => ?MapOfAttributeDimension,
    ?'behavior' => ?SegmentBehaviors,
    ?'demographic' => ?SegmentDemographics,
    ?'location' => ?SegmentLocation,
    ?'metrics' => ?MapOfMetricDimension,
    ?'user_attributes' => ?MapOfAttributeDimension,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->behavior = $s['behavior'] ?? null;
    $this->demographic = $s['demographic'] ?? null;
    $this->location = $s['location'] ?? null;
    $this->metrics = $s['metrics'] ?? dict[];
    $this->user_attributes = $s['user_attributes'] ?? dict[];
  }
}

class SegmentGroup {
  public ?ListOfSegmentDimensions $dimensions;
  public ?ListOfSegmentReference $source_segments;
  public ?SourceType $source_type;
  public ?Type $type;

  public function __construct(shape(
    ?'dimensions' => ?ListOfSegmentDimensions,
    ?'source_segments' => ?ListOfSegmentReference,
    ?'source_type' => ?SourceType,
    ?'type' => ?Type,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->source_segments = $s['source_segments'] ?? vec[];
    $this->source_type = $s['source_type'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class SegmentGroupList {
  public ?ListOfSegmentGroup $groups;
  public ?Include $include;

  public function __construct(shape(
    ?'groups' => ?ListOfSegmentGroup,
    ?'include' => ?Include,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->include = $s['include'] ?? '';
  }
}

class SegmentImportResource {
  public ?MapOf__integer $channel_counts;
  public ?__string $external_id;
  public ?Format $format;
  public ?__string $role_arn;
  public ?__string $s_3_url;
  public ?__integer $size;

  public function __construct(shape(
    ?'channel_counts' => ?MapOf__integer,
    ?'external_id' => ?__string,
    ?'format' => ?Format,
    ?'role_arn' => ?__string,
    ?'s_3_url' => ?__string,
    ?'size' => ?__integer,
  ) $s = shape()) {
    $this->channel_counts = $s['channel_counts'] ?? dict[];
    $this->external_id = $s['external_id'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_url = $s['s_3_url'] ?? '';
    $this->size = $s['size'] ?? 0;
  }
}

class SegmentLocation {
  public ?SetDimension $country;
  public ?GPSPointDimension $gps_point;

  public function __construct(shape(
    ?'country' => ?SetDimension,
    ?'gps_point' => ?GPSPointDimension,
  ) $s = shape()) {
    $this->country = $s['country'] ?? null;
    $this->gps_point = $s['gps_point'] ?? null;
  }
}

class SegmentReference {
  public ?__string $id;
  public ?__integer $version;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class SegmentResponse {
  public ?__string $application_id;
  public ?__string $arn;
  public ?__string $creation_date;
  public ?SegmentDimensions $dimensions;
  public ?__string $id;
  public ?SegmentImportResource $import_definition;
  public ?__string $last_modified_date;
  public ?__string $name;
  public ?SegmentGroupList $segment_groups;
  public ?SegmentType $segment_type;
  public ?__integer $version;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'arn' => ?__string,
    ?'creation_date' => ?__string,
    ?'dimensions' => ?SegmentDimensions,
    ?'id' => ?__string,
    ?'import_definition' => ?SegmentImportResource,
    ?'last_modified_date' => ?__string,
    ?'name' => ?__string,
    ?'segment_groups' => ?SegmentGroupList,
    ?'segment_type' => ?SegmentType,
    ?'version' => ?__integer,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->dimensions = $s['dimensions'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->import_definition = $s['import_definition'] ?? null;
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->segment_groups = $s['segment_groups'] ?? null;
    $this->segment_type = $s['segment_type'] ?? '';
    $this->version = $s['version'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
  }
}

type SegmentType = string;

class SegmentsResponse {
  public ?ListOfSegmentResponse $item;
  public ?__string $next_token;

  public function __construct(shape(
    ?'item' => ?ListOfSegmentResponse,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SendMessagesRequest {
  public ?__string $application_id;
  public ?MessageRequest $message_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'message_request' => ?MessageRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->message_request = $s['message_request'] ?? null;
  }
}

class SendMessagesResponse {
  public ?MessageResponse $message_response;

  public function __construct(shape(
    ?'message_response' => ?MessageResponse,
  ) $s = shape()) {
    $this->message_response = $s['message_response'] ?? null;
  }
}

class SendUsersMessageRequest {
  public ?MapOf__string $context;
  public ?DirectMessageConfiguration $message_configuration;
  public ?TemplateConfiguration $template_configuration;
  public ?__string $trace_id;
  public ?MapOfEndpointSendConfiguration $users;

  public function __construct(shape(
    ?'context' => ?MapOf__string,
    ?'message_configuration' => ?DirectMessageConfiguration,
    ?'template_configuration' => ?TemplateConfiguration,
    ?'trace_id' => ?__string,
    ?'users' => ?MapOfEndpointSendConfiguration,
  ) $s = shape()) {
    $this->context = $s['context'] ?? dict[];
    $this->message_configuration = $s['message_configuration'] ?? null;
    $this->template_configuration = $s['template_configuration'] ?? null;
    $this->trace_id = $s['trace_id'] ?? '';
    $this->users = $s['users'] ?? dict[];
  }
}

class SendUsersMessageResponse {
  public ?__string $application_id;
  public ?__string $request_id;
  public ?MapOfMapOfEndpointMessageResult $result;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'request_id' => ?__string,
    ?'result' => ?MapOfMapOfEndpointMessageResult,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->result = $s['result'] ?? dict[];
  }
}

class SendUsersMessagesRequest {
  public ?__string $application_id;
  public ?SendUsersMessageRequest $send_users_message_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'send_users_message_request' => ?SendUsersMessageRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->send_users_message_request = $s['send_users_message_request'] ?? null;
  }
}

class SendUsersMessagesResponse {
  public ?SendUsersMessageResponse $send_users_message_response;

  public function __construct(shape(
    ?'send_users_message_response' => ?SendUsersMessageResponse,
  ) $s = shape()) {
    $this->send_users_message_response = $s['send_users_message_response'] ?? null;
  }
}

class Session {
  public ?__integer $duration;
  public ?__string $id;
  public ?__string $start_timestamp;
  public ?__string $stop_timestamp;

  public function __construct(shape(
    ?'duration' => ?__integer,
    ?'id' => ?__string,
    ?'start_timestamp' => ?__string,
    ?'stop_timestamp' => ?__string,
  ) $s = shape()) {
    $this->duration = $s['duration'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->start_timestamp = $s['start_timestamp'] ?? '';
    $this->stop_timestamp = $s['stop_timestamp'] ?? '';
  }
}

class SetDimension {
  public ?DimensionType $dimension_type;
  public ?ListOf__string $values;

  public function __construct(shape(
    ?'dimension_type' => ?DimensionType,
    ?'values' => ?ListOf__string,
  ) $s = shape()) {
    $this->dimension_type = $s['dimension_type'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

class SimpleCondition {
  public ?EventCondition $event_condition;
  public ?SegmentCondition $segment_condition;
  public ?SegmentDimensions $segment_dimensions;

  public function __construct(shape(
    ?'event_condition' => ?EventCondition,
    ?'segment_condition' => ?SegmentCondition,
    ?'segment_dimensions' => ?SegmentDimensions,
  ) $s = shape()) {
    $this->event_condition = $s['event_condition'] ?? null;
    $this->segment_condition = $s['segment_condition'] ?? null;
    $this->segment_dimensions = $s['segment_dimensions'] ?? null;
  }
}

class SimpleEmail {
  public ?SimpleEmailPart $html_part;
  public ?SimpleEmailPart $subject;
  public ?SimpleEmailPart $text_part;

  public function __construct(shape(
    ?'html_part' => ?SimpleEmailPart,
    ?'subject' => ?SimpleEmailPart,
    ?'text_part' => ?SimpleEmailPart,
  ) $s = shape()) {
    $this->html_part = $s['html_part'] ?? null;
    $this->subject = $s['subject'] ?? null;
    $this->text_part = $s['text_part'] ?? null;
  }
}

class SimpleEmailPart {
  public ?__string $charset;
  public ?__string $data;

  public function __construct(shape(
    ?'charset' => ?__string,
    ?'data' => ?__string,
  ) $s = shape()) {
    $this->charset = $s['charset'] ?? '';
    $this->data = $s['data'] ?? '';
  }
}

type SourceType = string;

class StartCondition {
  public ?__string $description;
  public ?SegmentCondition $segment_start_condition;

  public function __construct(shape(
    ?'description' => ?__string,
    ?'segment_start_condition' => ?SegmentCondition,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->segment_start_condition = $s['segment_start_condition'] ?? null;
  }
}

type State = string;

class TagResourceRequest {
  public ?__string $resource_arn;
  public ?TagsModel $tags_model;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tags_model' => ?TagsModel,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags_model = $s['tags_model'] ?? null;
  }
}

class TagsModel {
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class Template {
  public ?__string $name;
  public ?__string $version;

  public function __construct(shape(
    ?'name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class TemplateActiveVersionRequest {
  public ?__string $version;

  public function __construct(shape(
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->version = $s['version'] ?? '';
  }
}

class TemplateConfiguration {
  public ?Template $email_template;
  public ?Template $push_template;
  public ?Template $sms_template;
  public ?Template $voice_template;

  public function __construct(shape(
    ?'email_template' => ?Template,
    ?'push_template' => ?Template,
    ?'sms_template' => ?Template,
    ?'voice_template' => ?Template,
  ) $s = shape()) {
    $this->email_template = $s['email_template'] ?? null;
    $this->push_template = $s['push_template'] ?? null;
    $this->sms_template = $s['sms_template'] ?? null;
    $this->voice_template = $s['voice_template'] ?? null;
  }
}

class TemplateResponse {
  public ?__string $arn;
  public ?__string $creation_date;
  public ?__string $default_substitutions;
  public ?__string $last_modified_date;
  public ?__string $template_description;
  public ?__string $template_name;
  public ?TemplateType $template_type;
  public ?__string $version;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_date' => ?__string,
    ?'default_substitutions' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'template_description' => ?__string,
    ?'template_name' => ?__string,
    ?'template_type' => ?TemplateType,
    ?'version' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->template_name = $s['template_name'] ?? '';
    $this->template_type = $s['template_type'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type TemplateType = string;

class TemplateVersionResponse {
  public ?__string $creation_date;
  public ?__string $default_substitutions;
  public ?__string $last_modified_date;
  public ?__string $template_description;
  public ?__string $template_name;
  public ?__string $template_type;
  public ?__string $version;

  public function __construct(shape(
    ?'creation_date' => ?__string,
    ?'default_substitutions' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'template_description' => ?__string,
    ?'template_name' => ?__string,
    ?'template_type' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->template_name = $s['template_name'] ?? '';
    $this->template_type = $s['template_type'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class TemplateVersionsResponse {
  public ?ListOfTemplateVersionResponse $item;
  public ?__string $message;
  public ?__string $next_token;
  public ?__string $request_id;

  public function __construct(shape(
    ?'item' => ?ListOfTemplateVersionResponse,
    ?'message' => ?__string,
    ?'next_token' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->message = $s['message'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class TemplatesResponse {
  public ?ListOfTemplateResponse $item;
  public ?__string $next_token;

  public function __construct(shape(
    ?'item' => ?ListOfTemplateResponse,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->item = $s['item'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class TooManyRequestsException {
  public ?__string $message;
  public ?__string $request_id;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'request_id' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class TreatmentResource {
  public ?CustomDeliveryConfiguration $custom_delivery_configuration;
  public ?__string $id;
  public ?MessageConfiguration $message_configuration;
  public ?Schedule $schedule;
  public ?__integer $size_percent;
  public ?CampaignState $state;
  public ?TemplateConfiguration $template_configuration;
  public ?__string $treatment_description;
  public ?__string $treatment_name;

  public function __construct(shape(
    ?'custom_delivery_configuration' => ?CustomDeliveryConfiguration,
    ?'id' => ?__string,
    ?'message_configuration' => ?MessageConfiguration,
    ?'schedule' => ?Schedule,
    ?'size_percent' => ?__integer,
    ?'state' => ?CampaignState,
    ?'template_configuration' => ?TemplateConfiguration,
    ?'treatment_description' => ?__string,
    ?'treatment_name' => ?__string,
  ) $s = shape()) {
    $this->custom_delivery_configuration = $s['custom_delivery_configuration'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->message_configuration = $s['message_configuration'] ?? null;
    $this->schedule = $s['schedule'] ?? null;
    $this->size_percent = $s['size_percent'] ?? 0;
    $this->state = $s['state'] ?? null;
    $this->template_configuration = $s['template_configuration'] ?? null;
    $this->treatment_description = $s['treatment_description'] ?? '';
    $this->treatment_name = $s['treatment_name'] ?? '';
  }
}

type Type = string;

class UntagResourceRequest {
  public ?__string $resource_arn;
  public ?ListOf__string $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tag_keys' => ?ListOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateAdmChannelRequest {
  public ?ADMChannelRequest $adm_channel_request;
  public ?__string $application_id;

  public function __construct(shape(
    ?'adm_channel_request' => ?ADMChannelRequest,
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->adm_channel_request = $s['adm_channel_request'] ?? null;
    $this->application_id = $s['application_id'] ?? '';
  }
}

class UpdateAdmChannelResponse {
  public ?ADMChannelResponse $adm_channel_response;

  public function __construct(shape(
    ?'adm_channel_response' => ?ADMChannelResponse,
  ) $s = shape()) {
    $this->adm_channel_response = $s['adm_channel_response'] ?? null;
  }
}

class UpdateApnsChannelRequest {
  public ?APNSChannelRequest $apns_channel_request;
  public ?__string $application_id;

  public function __construct(shape(
    ?'apns_channel_request' => ?APNSChannelRequest,
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->apns_channel_request = $s['apns_channel_request'] ?? null;
    $this->application_id = $s['application_id'] ?? '';
  }
}

class UpdateApnsChannelResponse {
  public ?APNSChannelResponse $apns_channel_response;

  public function __construct(shape(
    ?'apns_channel_response' => ?APNSChannelResponse,
  ) $s = shape()) {
    $this->apns_channel_response = $s['apns_channel_response'] ?? null;
  }
}

class UpdateApnsSandboxChannelRequest {
  public ?APNSSandboxChannelRequest $apns_sandbox_channel_request;
  public ?__string $application_id;

  public function __construct(shape(
    ?'apns_sandbox_channel_request' => ?APNSSandboxChannelRequest,
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->apns_sandbox_channel_request = $s['apns_sandbox_channel_request'] ?? null;
    $this->application_id = $s['application_id'] ?? '';
  }
}

class UpdateApnsSandboxChannelResponse {
  public ?APNSSandboxChannelResponse $apns_sandbox_channel_response;

  public function __construct(shape(
    ?'apns_sandbox_channel_response' => ?APNSSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_sandbox_channel_response = $s['apns_sandbox_channel_response'] ?? null;
  }
}

class UpdateApnsVoipChannelRequest {
  public ?APNSVoipChannelRequest $apns_voip_channel_request;
  public ?__string $application_id;

  public function __construct(shape(
    ?'apns_voip_channel_request' => ?APNSVoipChannelRequest,
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->apns_voip_channel_request = $s['apns_voip_channel_request'] ?? null;
    $this->application_id = $s['application_id'] ?? '';
  }
}

class UpdateApnsVoipChannelResponse {
  public ?APNSVoipChannelResponse $apns_voip_channel_response;

  public function __construct(shape(
    ?'apns_voip_channel_response' => ?APNSVoipChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_channel_response = $s['apns_voip_channel_response'] ?? null;
  }
}

class UpdateApnsVoipSandboxChannelRequest {
  public ?APNSVoipSandboxChannelRequest $apns_voip_sandbox_channel_request;
  public ?__string $application_id;

  public function __construct(shape(
    ?'apns_voip_sandbox_channel_request' => ?APNSVoipSandboxChannelRequest,
    ?'application_id' => ?__string,
  ) $s = shape()) {
    $this->apns_voip_sandbox_channel_request = $s['apns_voip_sandbox_channel_request'] ?? null;
    $this->application_id = $s['application_id'] ?? '';
  }
}

class UpdateApnsVoipSandboxChannelResponse {
  public ?APNSVoipSandboxChannelResponse $apns_voip_sandbox_channel_response;

  public function __construct(shape(
    ?'apns_voip_sandbox_channel_response' => ?APNSVoipSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_sandbox_channel_response = $s['apns_voip_sandbox_channel_response'] ?? null;
  }
}

class UpdateApplicationSettingsRequest {
  public ?__string $application_id;
  public ?WriteApplicationSettingsRequest $write_application_settings_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'write_application_settings_request' => ?WriteApplicationSettingsRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->write_application_settings_request = $s['write_application_settings_request'] ?? null;
  }
}

class UpdateApplicationSettingsResponse {
  public ?ApplicationSettingsResource $application_settings_resource;

  public function __construct(shape(
    ?'application_settings_resource' => ?ApplicationSettingsResource,
  ) $s = shape()) {
    $this->application_settings_resource = $s['application_settings_resource'] ?? null;
  }
}

class UpdateAttributesRequest {
  public ?ListOf__string $blacklist;

  public function __construct(shape(
    ?'blacklist' => ?ListOf__string,
  ) $s = shape()) {
    $this->blacklist = $s['blacklist'] ?? vec[];
  }
}

class UpdateBaiduChannelRequest {
  public ?__string $application_id;
  public ?BaiduChannelRequest $baidu_channel_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'baidu_channel_request' => ?BaiduChannelRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->baidu_channel_request = $s['baidu_channel_request'] ?? null;
  }
}

class UpdateBaiduChannelResponse {
  public ?BaiduChannelResponse $baidu_channel_response;

  public function __construct(shape(
    ?'baidu_channel_response' => ?BaiduChannelResponse,
  ) $s = shape()) {
    $this->baidu_channel_response = $s['baidu_channel_response'] ?? null;
  }
}

class UpdateCampaignRequest {
  public ?__string $application_id;
  public ?__string $campaign_id;
  public ?WriteCampaignRequest $write_campaign_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'campaign_id' => ?__string,
    ?'write_campaign_request' => ?WriteCampaignRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->campaign_id = $s['campaign_id'] ?? '';
    $this->write_campaign_request = $s['write_campaign_request'] ?? null;
  }
}

class UpdateCampaignResponse {
  public ?CampaignResponse $campaign_response;

  public function __construct(shape(
    ?'campaign_response' => ?CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $s['campaign_response'] ?? null;
  }
}

class UpdateEmailChannelRequest {
  public ?__string $application_id;
  public ?EmailChannelRequest $email_channel_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'email_channel_request' => ?EmailChannelRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->email_channel_request = $s['email_channel_request'] ?? null;
  }
}

class UpdateEmailChannelResponse {
  public ?EmailChannelResponse $email_channel_response;

  public function __construct(shape(
    ?'email_channel_response' => ?EmailChannelResponse,
  ) $s = shape()) {
    $this->email_channel_response = $s['email_channel_response'] ?? null;
  }
}

class UpdateEmailTemplateRequest {
  public ?__boolean $create_new_version;
  public ?EmailTemplateRequest $email_template_request;
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'create_new_version' => ?__boolean,
    ?'email_template_request' => ?EmailTemplateRequest,
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->create_new_version = $s['create_new_version'] ?? false;
    $this->email_template_request = $s['email_template_request'] ?? null;
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class UpdateEmailTemplateResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class UpdateEndpointRequest {
  public ?__string $application_id;
  public ?__string $endpoint_id;
  public ?EndpointRequest $endpoint_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'endpoint_id' => ?__string,
    ?'endpoint_request' => ?EndpointRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->endpoint_id = $s['endpoint_id'] ?? '';
    $this->endpoint_request = $s['endpoint_request'] ?? null;
  }
}

class UpdateEndpointResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class UpdateEndpointsBatchRequest {
  public ?__string $application_id;
  public ?EndpointBatchRequest $endpoint_batch_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'endpoint_batch_request' => ?EndpointBatchRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->endpoint_batch_request = $s['endpoint_batch_request'] ?? null;
  }
}

class UpdateEndpointsBatchResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class UpdateGcmChannelRequest {
  public ?__string $application_id;
  public ?GCMChannelRequest $gcm_channel_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'gcm_channel_request' => ?GCMChannelRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->gcm_channel_request = $s['gcm_channel_request'] ?? null;
  }
}

class UpdateGcmChannelResponse {
  public ?GCMChannelResponse $gcm_channel_response;

  public function __construct(shape(
    ?'gcm_channel_response' => ?GCMChannelResponse,
  ) $s = shape()) {
    $this->gcm_channel_response = $s['gcm_channel_response'] ?? null;
  }
}

class UpdateJourneyRequest {
  public ?__string $application_id;
  public ?__string $journey_id;
  public ?WriteJourneyRequest $write_journey_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'journey_id' => ?__string,
    ?'write_journey_request' => ?WriteJourneyRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->journey_id = $s['journey_id'] ?? '';
    $this->write_journey_request = $s['write_journey_request'] ?? null;
  }
}

class UpdateJourneyResponse {
  public ?JourneyResponse $journey_response;

  public function __construct(shape(
    ?'journey_response' => ?JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $s['journey_response'] ?? null;
  }
}

class UpdateJourneyStateRequest {
  public ?__string $application_id;
  public ?__string $journey_id;
  public ?JourneyStateRequest $journey_state_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'journey_id' => ?__string,
    ?'journey_state_request' => ?JourneyStateRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->journey_id = $s['journey_id'] ?? '';
    $this->journey_state_request = $s['journey_state_request'] ?? null;
  }
}

class UpdateJourneyStateResponse {
  public ?JourneyResponse $journey_response;

  public function __construct(shape(
    ?'journey_response' => ?JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $s['journey_response'] ?? null;
  }
}

class UpdatePushTemplateRequest {
  public ?__boolean $create_new_version;
  public ?PushNotificationTemplateRequest $push_notification_template_request;
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'create_new_version' => ?__boolean,
    ?'push_notification_template_request' => ?PushNotificationTemplateRequest,
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->create_new_version = $s['create_new_version'] ?? false;
    $this->push_notification_template_request = $s['push_notification_template_request'] ?? null;
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class UpdatePushTemplateResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class UpdateRecommenderConfiguration {
  public ?MapOf__string $attributes;
  public ?__string $description;
  public ?__string $name;
  public ?__string $recommendation_provider_id_type;
  public ?__string $recommendation_provider_role_arn;
  public ?__string $recommendation_provider_uri;
  public ?__string $recommendation_transformer_uri;
  public ?__string $recommendations_display_name;
  public ?__integer $recommendations_per_message;

  public function __construct(shape(
    ?'attributes' => ?MapOf__string,
    ?'description' => ?__string,
    ?'name' => ?__string,
    ?'recommendation_provider_id_type' => ?__string,
    ?'recommendation_provider_role_arn' => ?__string,
    ?'recommendation_provider_uri' => ?__string,
    ?'recommendation_transformer_uri' => ?__string,
    ?'recommendations_display_name' => ?__string,
    ?'recommendations_per_message' => ?__integer,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->recommendation_provider_id_type = $s['recommendation_provider_id_type'] ?? '';
    $this->recommendation_provider_role_arn = $s['recommendation_provider_role_arn'] ?? '';
    $this->recommendation_provider_uri = $s['recommendation_provider_uri'] ?? '';
    $this->recommendation_transformer_uri = $s['recommendation_transformer_uri'] ?? '';
    $this->recommendations_display_name = $s['recommendations_display_name'] ?? '';
    $this->recommendations_per_message = $s['recommendations_per_message'] ?? 0;
  }
}

class UpdateRecommenderConfigurationRequest {
  public ?__string $recommender_id;
  public ?UpdateRecommenderConfiguration $update_recommender_configuration;

  public function __construct(shape(
    ?'recommender_id' => ?__string,
    ?'update_recommender_configuration' => ?UpdateRecommenderConfiguration,
  ) $s = shape()) {
    $this->recommender_id = $s['recommender_id'] ?? '';
    $this->update_recommender_configuration = $s['update_recommender_configuration'] ?? null;
  }
}

class UpdateRecommenderConfigurationResponse {
  public ?RecommenderConfigurationResponse $recommender_configuration_response;

  public function __construct(shape(
    ?'recommender_configuration_response' => ?RecommenderConfigurationResponse,
  ) $s = shape()) {
    $this->recommender_configuration_response = $s['recommender_configuration_response'] ?? null;
  }
}

class UpdateSegmentRequest {
  public ?__string $application_id;
  public ?__string $segment_id;
  public ?WriteSegmentRequest $write_segment_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'segment_id' => ?__string,
    ?'write_segment_request' => ?WriteSegmentRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->segment_id = $s['segment_id'] ?? '';
    $this->write_segment_request = $s['write_segment_request'] ?? null;
  }
}

class UpdateSegmentResponse {
  public ?SegmentResponse $segment_response;

  public function __construct(shape(
    ?'segment_response' => ?SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $s['segment_response'] ?? null;
  }
}

class UpdateSmsChannelRequest {
  public ?__string $application_id;
  public ?SMSChannelRequest $sms_channel_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'sms_channel_request' => ?SMSChannelRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->sms_channel_request = $s['sms_channel_request'] ?? null;
  }
}

class UpdateSmsChannelResponse {
  public ?SMSChannelResponse $sms_channel_response;

  public function __construct(shape(
    ?'sms_channel_response' => ?SMSChannelResponse,
  ) $s = shape()) {
    $this->sms_channel_response = $s['sms_channel_response'] ?? null;
  }
}

class UpdateSmsTemplateRequest {
  public ?__boolean $create_new_version;
  public ?SMSTemplateRequest $sms_template_request;
  public ?__string $template_name;
  public ?__string $version;

  public function __construct(shape(
    ?'create_new_version' => ?__boolean,
    ?'sms_template_request' => ?SMSTemplateRequest,
    ?'template_name' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->create_new_version = $s['create_new_version'] ?? false;
    $this->sms_template_request = $s['sms_template_request'] ?? null;
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class UpdateSmsTemplateResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class UpdateTemplateActiveVersionRequest {
  public ?TemplateActiveVersionRequest $template_active_version_request;
  public ?__string $template_name;
  public ?__string $template_type;

  public function __construct(shape(
    ?'template_active_version_request' => ?TemplateActiveVersionRequest,
    ?'template_name' => ?__string,
    ?'template_type' => ?__string,
  ) $s = shape()) {
    $this->template_active_version_request = $s['template_active_version_request'] ?? null;
    $this->template_name = $s['template_name'] ?? '';
    $this->template_type = $s['template_type'] ?? '';
  }
}

class UpdateTemplateActiveVersionResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class UpdateVoiceChannelRequest {
  public ?__string $application_id;
  public ?VoiceChannelRequest $voice_channel_request;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'voice_channel_request' => ?VoiceChannelRequest,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->voice_channel_request = $s['voice_channel_request'] ?? null;
  }
}

class UpdateVoiceChannelResponse {
  public ?VoiceChannelResponse $voice_channel_response;

  public function __construct(shape(
    ?'voice_channel_response' => ?VoiceChannelResponse,
  ) $s = shape()) {
    $this->voice_channel_response = $s['voice_channel_response'] ?? null;
  }
}

class UpdateVoiceTemplateRequest {
  public ?__boolean $create_new_version;
  public ?__string $template_name;
  public ?__string $version;
  public ?VoiceTemplateRequest $voice_template_request;

  public function __construct(shape(
    ?'create_new_version' => ?__boolean,
    ?'template_name' => ?__string,
    ?'version' => ?__string,
    ?'voice_template_request' => ?VoiceTemplateRequest,
  ) $s = shape()) {
    $this->create_new_version = $s['create_new_version'] ?? false;
    $this->template_name = $s['template_name'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->voice_template_request = $s['voice_template_request'] ?? null;
  }
}

class UpdateVoiceTemplateResponse {
  public ?MessageBody $message_body;

  public function __construct(shape(
    ?'message_body' => ?MessageBody,
  ) $s = shape()) {
    $this->message_body = $s['message_body'] ?? null;
  }
}

class VoiceChannelRequest {
  public ?__boolean $enabled;

  public function __construct(shape(
    ?'enabled' => ?__boolean,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

class VoiceChannelResponse {
  public ?__string $application_id;
  public ?__string $creation_date;
  public ?__boolean $enabled;
  public ?__boolean $has_credential;
  public ?__string $id;
  public ?__boolean $is_archived;
  public ?__string $last_modified_by;
  public ?__string $last_modified_date;
  public ?__string $platform;
  public ?__integer $version;

  public function __construct(shape(
    ?'application_id' => ?__string,
    ?'creation_date' => ?__string,
    ?'enabled' => ?__boolean,
    ?'has_credential' => ?__boolean,
    ?'id' => ?__string,
    ?'is_archived' => ?__boolean,
    ?'last_modified_by' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'platform' => ?__string,
    ?'version' => ?__integer,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->has_credential = $s['has_credential'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->is_archived = $s['is_archived'] ?? false;
    $this->last_modified_by = $s['last_modified_by'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class VoiceMessage {
  public ?__string $body;
  public ?__string $language_code;
  public ?__string $origination_number;
  public ?MapOfListOf__string $substitutions;
  public ?__string $voice_id;

  public function __construct(shape(
    ?'body' => ?__string,
    ?'language_code' => ?__string,
    ?'origination_number' => ?__string,
    ?'substitutions' => ?MapOfListOf__string,
    ?'voice_id' => ?__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
    $this->language_code = $s['language_code'] ?? '';
    $this->origination_number = $s['origination_number'] ?? '';
    $this->substitutions = $s['substitutions'] ?? dict[];
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class VoiceTemplateRequest {
  public ?__string $body;
  public ?__string $default_substitutions;
  public ?__string $language_code;
  public ?__string $template_description;
  public ?__string $voice_id;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'body' => ?__string,
    ?'default_substitutions' => ?__string,
    ?'language_code' => ?__string,
    ?'template_description' => ?__string,
    ?'voice_id' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->language_code = $s['language_code'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class VoiceTemplateResponse {
  public ?__string $arn;
  public ?__string $body;
  public ?__string $creation_date;
  public ?__string $default_substitutions;
  public ?__string $language_code;
  public ?__string $last_modified_date;
  public ?__string $template_description;
  public ?__string $template_name;
  public ?TemplateType $template_type;
  public ?__string $version;
  public ?__string $voice_id;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'body' => ?__string,
    ?'creation_date' => ?__string,
    ?'default_substitutions' => ?__string,
    ?'language_code' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'template_description' => ?__string,
    ?'template_name' => ?__string,
    ?'template_type' => ?TemplateType,
    ?'version' => ?__string,
    ?'voice_id' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->default_substitutions = $s['default_substitutions'] ?? '';
    $this->language_code = $s['language_code'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->template_description = $s['template_description'] ?? '';
    $this->template_name = $s['template_name'] ?? '';
    $this->template_type = $s['template_type'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class WaitActivity {
  public ?__string $next_activity;
  public ?WaitTime $wait_time;

  public function __construct(shape(
    ?'next_activity' => ?__string,
    ?'wait_time' => ?WaitTime,
  ) $s = shape()) {
    $this->next_activity = $s['next_activity'] ?? '';
    $this->wait_time = $s['wait_time'] ?? null;
  }
}

class WaitTime {
  public ?__string $wait_for;
  public ?__string $wait_until;

  public function __construct(shape(
    ?'wait_for' => ?__string,
    ?'wait_until' => ?__string,
  ) $s = shape()) {
    $this->wait_for = $s['wait_for'] ?? '';
    $this->wait_until = $s['wait_until'] ?? '';
  }
}

class WriteApplicationSettingsRequest {
  public ?CampaignHook $campaign_hook;
  public ?__boolean $cloud_watch_metrics_enabled;
  public ?CampaignLimits $limits;
  public ?QuietTime $quiet_time;

  public function __construct(shape(
    ?'campaign_hook' => ?CampaignHook,
    ?'cloud_watch_metrics_enabled' => ?__boolean,
    ?'limits' => ?CampaignLimits,
    ?'quiet_time' => ?QuietTime,
  ) $s = shape()) {
    $this->campaign_hook = $s['campaign_hook'] ?? null;
    $this->cloud_watch_metrics_enabled = $s['cloud_watch_metrics_enabled'] ?? false;
    $this->limits = $s['limits'] ?? null;
    $this->quiet_time = $s['quiet_time'] ?? null;
  }
}

class WriteCampaignRequest {
  public ?ListOfWriteTreatmentResource $additional_treatments;
  public ?CustomDeliveryConfiguration $custom_delivery_configuration;
  public ?__string $description;
  public ?__integer $holdout_percent;
  public ?CampaignHook $hook;
  public ?__boolean $is_paused;
  public ?CampaignLimits $limits;
  public ?MessageConfiguration $message_configuration;
  public ?__string $name;
  public ?Schedule $schedule;
  public ?__string $segment_id;
  public ?__integer $segment_version;
  public ?TemplateConfiguration $template_configuration;
  public ?__string $treatment_description;
  public ?__string $treatment_name;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'additional_treatments' => ?ListOfWriteTreatmentResource,
    ?'custom_delivery_configuration' => ?CustomDeliveryConfiguration,
    ?'description' => ?__string,
    ?'holdout_percent' => ?__integer,
    ?'hook' => ?CampaignHook,
    ?'is_paused' => ?__boolean,
    ?'limits' => ?CampaignLimits,
    ?'message_configuration' => ?MessageConfiguration,
    ?'name' => ?__string,
    ?'schedule' => ?Schedule,
    ?'segment_id' => ?__string,
    ?'segment_version' => ?__integer,
    ?'template_configuration' => ?TemplateConfiguration,
    ?'treatment_description' => ?__string,
    ?'treatment_name' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->additional_treatments = $s['additional_treatments'] ?? vec[];
    $this->custom_delivery_configuration = $s['custom_delivery_configuration'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->holdout_percent = $s['holdout_percent'] ?? 0;
    $this->hook = $s['hook'] ?? null;
    $this->is_paused = $s['is_paused'] ?? false;
    $this->limits = $s['limits'] ?? null;
    $this->message_configuration = $s['message_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->schedule = $s['schedule'] ?? null;
    $this->segment_id = $s['segment_id'] ?? '';
    $this->segment_version = $s['segment_version'] ?? 0;
    $this->template_configuration = $s['template_configuration'] ?? null;
    $this->treatment_description = $s['treatment_description'] ?? '';
    $this->treatment_name = $s['treatment_name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class WriteEventStream {
  public ?__string $destination_stream_arn;
  public ?__string $role_arn;

  public function __construct(shape(
    ?'destination_stream_arn' => ?__string,
    ?'role_arn' => ?__string,
  ) $s = shape()) {
    $this->destination_stream_arn = $s['destination_stream_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class WriteJourneyRequest {
  public ?MapOfActivity $activities;
  public ?__string $creation_date;
  public ?__string $last_modified_date;
  public ?JourneyLimits $limits;
  public ?__boolean $local_time;
  public ?__string $name;
  public ?QuietTime $quiet_time;
  public ?__string $refresh_frequency;
  public ?JourneySchedule $schedule;
  public ?__string $start_activity;
  public ?StartCondition $start_condition;
  public ?State $state;

  public function __construct(shape(
    ?'activities' => ?MapOfActivity,
    ?'creation_date' => ?__string,
    ?'last_modified_date' => ?__string,
    ?'limits' => ?JourneyLimits,
    ?'local_time' => ?__boolean,
    ?'name' => ?__string,
    ?'quiet_time' => ?QuietTime,
    ?'refresh_frequency' => ?__string,
    ?'schedule' => ?JourneySchedule,
    ?'start_activity' => ?__string,
    ?'start_condition' => ?StartCondition,
    ?'state' => ?State,
  ) $s = shape()) {
    $this->activities = $s['activities'] ?? dict[];
    $this->creation_date = $s['creation_date'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->limits = $s['limits'] ?? null;
    $this->local_time = $s['local_time'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->quiet_time = $s['quiet_time'] ?? null;
    $this->refresh_frequency = $s['refresh_frequency'] ?? '';
    $this->schedule = $s['schedule'] ?? null;
    $this->start_activity = $s['start_activity'] ?? '';
    $this->start_condition = $s['start_condition'] ?? null;
    $this->state = $s['state'] ?? '';
  }
}

class WriteSegmentRequest {
  public ?SegmentDimensions $dimensions;
  public ?__string $name;
  public ?SegmentGroupList $segment_groups;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'dimensions' => ?SegmentDimensions,
    ?'name' => ?__string,
    ?'segment_groups' => ?SegmentGroupList,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->segment_groups = $s['segment_groups'] ?? null;
    $this->tags = $s['tags'] ?? dict[];
  }
}

class WriteTreatmentResource {
  public ?CustomDeliveryConfiguration $custom_delivery_configuration;
  public ?MessageConfiguration $message_configuration;
  public ?Schedule $schedule;
  public ?__integer $size_percent;
  public ?TemplateConfiguration $template_configuration;
  public ?__string $treatment_description;
  public ?__string $treatment_name;

  public function __construct(shape(
    ?'custom_delivery_configuration' => ?CustomDeliveryConfiguration,
    ?'message_configuration' => ?MessageConfiguration,
    ?'schedule' => ?Schedule,
    ?'size_percent' => ?__integer,
    ?'template_configuration' => ?TemplateConfiguration,
    ?'treatment_description' => ?__string,
    ?'treatment_name' => ?__string,
  ) $s = shape()) {
    $this->custom_delivery_configuration = $s['custom_delivery_configuration'] ?? null;
    $this->message_configuration = $s['message_configuration'] ?? null;
    $this->schedule = $s['schedule'] ?? null;
    $this->size_percent = $s['size_percent'] ?? 0;
    $this->template_configuration = $s['template_configuration'] ?? null;
    $this->treatment_description = $s['treatment_description'] ?? '';
    $this->treatment_name = $s['treatment_name'] ?? '';
  }
}

type __EndpointTypesElement = string;

type __blob = string;

type __boolean = bool;

type __double = float;

type __integer = int;

type __long = int;

type __string = string;

type __timestampIso8601 = int;

type __timestampUnix = int;

