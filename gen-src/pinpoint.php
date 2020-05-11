<?hh // strict
namespace slack\aws\pinpoint;

interface Pinpoint {
  public function CreateApp(CreateAppRequest): Awaitable<Errors\Result<CreateAppResponse>>;
  public function CreateCampaign(CreateCampaignRequest): Awaitable<Errors\Result<CreateCampaignResponse>>;
  public function CreateEmailTemplate(CreateEmailTemplateRequest): Awaitable<Errors\Result<CreateEmailTemplateResponse>>;
  public function CreateExportJob(CreateExportJobRequest): Awaitable<Errors\Result<CreateExportJobResponse>>;
  public function CreateImportJob(CreateImportJobRequest): Awaitable<Errors\Result<CreateImportJobResponse>>;
  public function CreateJourney(CreateJourneyRequest): Awaitable<Errors\Result<CreateJourneyResponse>>;
  public function CreatePushTemplate(CreatePushTemplateRequest): Awaitable<Errors\Result<CreatePushTemplateResponse>>;
  public function CreateRecommenderConfiguration(CreateRecommenderConfigurationRequest): Awaitable<Errors\Result<CreateRecommenderConfigurationResponse>>;
  public function CreateSegment(CreateSegmentRequest): Awaitable<Errors\Result<CreateSegmentResponse>>;
  public function CreateSmsTemplate(CreateSmsTemplateRequest): Awaitable<Errors\Result<CreateSmsTemplateResponse>>;
  public function CreateVoiceTemplate(CreateVoiceTemplateRequest): Awaitable<Errors\Result<CreateVoiceTemplateResponse>>;
  public function DeleteAdmChannel(DeleteAdmChannelRequest): Awaitable<Errors\Result<DeleteAdmChannelResponse>>;
  public function DeleteApnsChannel(DeleteApnsChannelRequest): Awaitable<Errors\Result<DeleteApnsChannelResponse>>;
  public function DeleteApnsSandboxChannel(DeleteApnsSandboxChannelRequest): Awaitable<Errors\Result<DeleteApnsSandboxChannelResponse>>;
  public function DeleteApnsVoipChannel(DeleteApnsVoipChannelRequest): Awaitable<Errors\Result<DeleteApnsVoipChannelResponse>>;
  public function DeleteApnsVoipSandboxChannel(DeleteApnsVoipSandboxChannelRequest): Awaitable<Errors\Result<DeleteApnsVoipSandboxChannelResponse>>;
  public function DeleteApp(DeleteAppRequest): Awaitable<Errors\Result<DeleteAppResponse>>;
  public function DeleteBaiduChannel(DeleteBaiduChannelRequest): Awaitable<Errors\Result<DeleteBaiduChannelResponse>>;
  public function DeleteCampaign(DeleteCampaignRequest): Awaitable<Errors\Result<DeleteCampaignResponse>>;
  public function DeleteEmailChannel(DeleteEmailChannelRequest): Awaitable<Errors\Result<DeleteEmailChannelResponse>>;
  public function DeleteEmailTemplate(DeleteEmailTemplateRequest): Awaitable<Errors\Result<DeleteEmailTemplateResponse>>;
  public function DeleteEndpoint(DeleteEndpointRequest): Awaitable<Errors\Result<DeleteEndpointResponse>>;
  public function DeleteEventStream(DeleteEventStreamRequest): Awaitable<Errors\Result<DeleteEventStreamResponse>>;
  public function DeleteGcmChannel(DeleteGcmChannelRequest): Awaitable<Errors\Result<DeleteGcmChannelResponse>>;
  public function DeleteJourney(DeleteJourneyRequest): Awaitable<Errors\Result<DeleteJourneyResponse>>;
  public function DeletePushTemplate(DeletePushTemplateRequest): Awaitable<Errors\Result<DeletePushTemplateResponse>>;
  public function DeleteRecommenderConfiguration(DeleteRecommenderConfigurationRequest): Awaitable<Errors\Result<DeleteRecommenderConfigurationResponse>>;
  public function DeleteSegment(DeleteSegmentRequest): Awaitable<Errors\Result<DeleteSegmentResponse>>;
  public function DeleteSmsChannel(DeleteSmsChannelRequest): Awaitable<Errors\Result<DeleteSmsChannelResponse>>;
  public function DeleteSmsTemplate(DeleteSmsTemplateRequest): Awaitable<Errors\Result<DeleteSmsTemplateResponse>>;
  public function DeleteUserEndpoints(DeleteUserEndpointsRequest): Awaitable<Errors\Result<DeleteUserEndpointsResponse>>;
  public function DeleteVoiceChannel(DeleteVoiceChannelRequest): Awaitable<Errors\Result<DeleteVoiceChannelResponse>>;
  public function DeleteVoiceTemplate(DeleteVoiceTemplateRequest): Awaitable<Errors\Result<DeleteVoiceTemplateResponse>>;
  public function GetAdmChannel(GetAdmChannelRequest): Awaitable<Errors\Result<GetAdmChannelResponse>>;
  public function GetApnsChannel(GetApnsChannelRequest): Awaitable<Errors\Result<GetApnsChannelResponse>>;
  public function GetApnsSandboxChannel(GetApnsSandboxChannelRequest): Awaitable<Errors\Result<GetApnsSandboxChannelResponse>>;
  public function GetApnsVoipChannel(GetApnsVoipChannelRequest): Awaitable<Errors\Result<GetApnsVoipChannelResponse>>;
  public function GetApnsVoipSandboxChannel(GetApnsVoipSandboxChannelRequest): Awaitable<Errors\Result<GetApnsVoipSandboxChannelResponse>>;
  public function GetApp(GetAppRequest): Awaitable<Errors\Result<GetAppResponse>>;
  public function GetApplicationDateRangeKpi(GetApplicationDateRangeKpiRequest): Awaitable<Errors\Result<GetApplicationDateRangeKpiResponse>>;
  public function GetApplicationSettings(GetApplicationSettingsRequest): Awaitable<Errors\Result<GetApplicationSettingsResponse>>;
  public function GetApps(GetAppsRequest): Awaitable<Errors\Result<GetAppsResponse>>;
  public function GetBaiduChannel(GetBaiduChannelRequest): Awaitable<Errors\Result<GetBaiduChannelResponse>>;
  public function GetCampaign(GetCampaignRequest): Awaitable<Errors\Result<GetCampaignResponse>>;
  public function GetCampaignActivities(GetCampaignActivitiesRequest): Awaitable<Errors\Result<GetCampaignActivitiesResponse>>;
  public function GetCampaignDateRangeKpi(GetCampaignDateRangeKpiRequest): Awaitable<Errors\Result<GetCampaignDateRangeKpiResponse>>;
  public function GetCampaignVersion(GetCampaignVersionRequest): Awaitable<Errors\Result<GetCampaignVersionResponse>>;
  public function GetCampaignVersions(GetCampaignVersionsRequest): Awaitable<Errors\Result<GetCampaignVersionsResponse>>;
  public function GetCampaigns(GetCampaignsRequest): Awaitable<Errors\Result<GetCampaignsResponse>>;
  public function GetChannels(GetChannelsRequest): Awaitable<Errors\Result<GetChannelsResponse>>;
  public function GetEmailChannel(GetEmailChannelRequest): Awaitable<Errors\Result<GetEmailChannelResponse>>;
  public function GetEmailTemplate(GetEmailTemplateRequest): Awaitable<Errors\Result<GetEmailTemplateResponse>>;
  public function GetEndpoint(GetEndpointRequest): Awaitable<Errors\Result<GetEndpointResponse>>;
  public function GetEventStream(GetEventStreamRequest): Awaitable<Errors\Result<GetEventStreamResponse>>;
  public function GetExportJob(GetExportJobRequest): Awaitable<Errors\Result<GetExportJobResponse>>;
  public function GetExportJobs(GetExportJobsRequest): Awaitable<Errors\Result<GetExportJobsResponse>>;
  public function GetGcmChannel(GetGcmChannelRequest): Awaitable<Errors\Result<GetGcmChannelResponse>>;
  public function GetImportJob(GetImportJobRequest): Awaitable<Errors\Result<GetImportJobResponse>>;
  public function GetImportJobs(GetImportJobsRequest): Awaitable<Errors\Result<GetImportJobsResponse>>;
  public function GetJourney(GetJourneyRequest): Awaitable<Errors\Result<GetJourneyResponse>>;
  public function GetJourneyDateRangeKpi(GetJourneyDateRangeKpiRequest): Awaitable<Errors\Result<GetJourneyDateRangeKpiResponse>>;
  public function GetJourneyExecutionActivityMetrics(GetJourneyExecutionActivityMetricsRequest): Awaitable<Errors\Result<GetJourneyExecutionActivityMetricsResponse>>;
  public function GetJourneyExecutionMetrics(GetJourneyExecutionMetricsRequest): Awaitable<Errors\Result<GetJourneyExecutionMetricsResponse>>;
  public function GetPushTemplate(GetPushTemplateRequest): Awaitable<Errors\Result<GetPushTemplateResponse>>;
  public function GetRecommenderConfiguration(GetRecommenderConfigurationRequest): Awaitable<Errors\Result<GetRecommenderConfigurationResponse>>;
  public function GetRecommenderConfigurations(GetRecommenderConfigurationsRequest): Awaitable<Errors\Result<GetRecommenderConfigurationsResponse>>;
  public function GetSegment(GetSegmentRequest): Awaitable<Errors\Result<GetSegmentResponse>>;
  public function GetSegmentExportJobs(GetSegmentExportJobsRequest): Awaitable<Errors\Result<GetSegmentExportJobsResponse>>;
  public function GetSegmentImportJobs(GetSegmentImportJobsRequest): Awaitable<Errors\Result<GetSegmentImportJobsResponse>>;
  public function GetSegmentVersion(GetSegmentVersionRequest): Awaitable<Errors\Result<GetSegmentVersionResponse>>;
  public function GetSegmentVersions(GetSegmentVersionsRequest): Awaitable<Errors\Result<GetSegmentVersionsResponse>>;
  public function GetSegments(GetSegmentsRequest): Awaitable<Errors\Result<GetSegmentsResponse>>;
  public function GetSmsChannel(GetSmsChannelRequest): Awaitable<Errors\Result<GetSmsChannelResponse>>;
  public function GetSmsTemplate(GetSmsTemplateRequest): Awaitable<Errors\Result<GetSmsTemplateResponse>>;
  public function GetUserEndpoints(GetUserEndpointsRequest): Awaitable<Errors\Result<GetUserEndpointsResponse>>;
  public function GetVoiceChannel(GetVoiceChannelRequest): Awaitable<Errors\Result<GetVoiceChannelResponse>>;
  public function GetVoiceTemplate(GetVoiceTemplateRequest): Awaitable<Errors\Result<GetVoiceTemplateResponse>>;
  public function ListJourneys(ListJourneysRequest): Awaitable<Errors\Result<ListJourneysResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTemplateVersions(ListTemplateVersionsRequest): Awaitable<Errors\Result<ListTemplateVersionsResponse>>;
  public function ListTemplates(ListTemplatesRequest): Awaitable<Errors\Result<ListTemplatesResponse>>;
  public function PhoneNumberValidate(PhoneNumberValidateRequest): Awaitable<Errors\Result<PhoneNumberValidateResponse>>;
  public function PutEventStream(PutEventStreamRequest): Awaitable<Errors\Result<PutEventStreamResponse>>;
  public function PutEvents(PutEventsRequest): Awaitable<Errors\Result<PutEventsResponse>>;
  public function RemoveAttributes(RemoveAttributesRequest): Awaitable<Errors\Result<RemoveAttributesResponse>>;
  public function SendMessages(SendMessagesRequest): Awaitable<Errors\Result<SendMessagesResponse>>;
  public function SendUsersMessages(SendUsersMessagesRequest): Awaitable<Errors\Result<SendUsersMessagesResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateAdmChannel(UpdateAdmChannelRequest): Awaitable<Errors\Result<UpdateAdmChannelResponse>>;
  public function UpdateApnsChannel(UpdateApnsChannelRequest): Awaitable<Errors\Result<UpdateApnsChannelResponse>>;
  public function UpdateApnsSandboxChannel(UpdateApnsSandboxChannelRequest): Awaitable<Errors\Result<UpdateApnsSandboxChannelResponse>>;
  public function UpdateApnsVoipChannel(UpdateApnsVoipChannelRequest): Awaitable<Errors\Result<UpdateApnsVoipChannelResponse>>;
  public function UpdateApnsVoipSandboxChannel(UpdateApnsVoipSandboxChannelRequest): Awaitable<Errors\Result<UpdateApnsVoipSandboxChannelResponse>>;
  public function UpdateApplicationSettings(UpdateApplicationSettingsRequest): Awaitable<Errors\Result<UpdateApplicationSettingsResponse>>;
  public function UpdateBaiduChannel(UpdateBaiduChannelRequest): Awaitable<Errors\Result<UpdateBaiduChannelResponse>>;
  public function UpdateCampaign(UpdateCampaignRequest): Awaitable<Errors\Result<UpdateCampaignResponse>>;
  public function UpdateEmailChannel(UpdateEmailChannelRequest): Awaitable<Errors\Result<UpdateEmailChannelResponse>>;
  public function UpdateEmailTemplate(UpdateEmailTemplateRequest): Awaitable<Errors\Result<UpdateEmailTemplateResponse>>;
  public function UpdateEndpoint(UpdateEndpointRequest): Awaitable<Errors\Result<UpdateEndpointResponse>>;
  public function UpdateEndpointsBatch(UpdateEndpointsBatchRequest): Awaitable<Errors\Result<UpdateEndpointsBatchResponse>>;
  public function UpdateGcmChannel(UpdateGcmChannelRequest): Awaitable<Errors\Result<UpdateGcmChannelResponse>>;
  public function UpdateJourney(UpdateJourneyRequest): Awaitable<Errors\Result<UpdateJourneyResponse>>;
  public function UpdateJourneyState(UpdateJourneyStateRequest): Awaitable<Errors\Result<UpdateJourneyStateResponse>>;
  public function UpdatePushTemplate(UpdatePushTemplateRequest): Awaitable<Errors\Result<UpdatePushTemplateResponse>>;
  public function UpdateRecommenderConfiguration(UpdateRecommenderConfigurationRequest): Awaitable<Errors\Result<UpdateRecommenderConfigurationResponse>>;
  public function UpdateSegment(UpdateSegmentRequest): Awaitable<Errors\Result<UpdateSegmentResponse>>;
  public function UpdateSmsChannel(UpdateSmsChannelRequest): Awaitable<Errors\Result<UpdateSmsChannelResponse>>;
  public function UpdateSmsTemplate(UpdateSmsTemplateRequest): Awaitable<Errors\Result<UpdateSmsTemplateResponse>>;
  public function UpdateTemplateActiveVersion(UpdateTemplateActiveVersionRequest): Awaitable<Errors\Result<UpdateTemplateActiveVersionResponse>>;
  public function UpdateVoiceChannel(UpdateVoiceChannelRequest): Awaitable<Errors\Result<UpdateVoiceChannelResponse>>;
  public function UpdateVoiceTemplate(UpdateVoiceTemplateRequest): Awaitable<Errors\Result<UpdateVoiceTemplateResponse>>;
}

class ADMChannelRequest {
  public __string $client_id;
  public __string $client_secret;
  public __boolean $enabled;

  public function __construct(shape(
  ?'client_id' => __string,
  ?'client_secret' => __string,
  ?'enabled' => __boolean,
  ) $s = shape()) {
    $this->client_id = $client_id ?? ;
    $this->client_secret = $client_secret ?? ;
    $this->enabled = $enabled ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'platform' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->platform = $platform ?? ;
    $this->version = $version ?? ;
  }
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

  public function __construct(shape(
  ?'action' => Action,
  ?'body' => __string,
  ?'consolidation_key' => __string,
  ?'data' => MapOf__string,
  ?'expires_after' => __string,
  ?'icon_reference' => __string,
  ?'image_icon_url' => __string,
  ?'image_url' => __string,
  ?'md_5' => __string,
  ?'raw_content' => __string,
  ?'silent_push' => __boolean,
  ?'small_image_icon_url' => __string,
  ?'sound' => __string,
  ?'substitutions' => MapOfListOf__string,
  ?'title' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->body = $body ?? ;
    $this->consolidation_key = $consolidation_key ?? ;
    $this->data = $data ?? ;
    $this->expires_after = $expires_after ?? ;
    $this->icon_reference = $icon_reference ?? ;
    $this->image_icon_url = $image_icon_url ?? ;
    $this->image_url = $image_url ?? ;
    $this->md_5 = $md_5 ?? ;
    $this->raw_content = $raw_content ?? ;
    $this->silent_push = $silent_push ?? ;
    $this->small_image_icon_url = $small_image_icon_url ?? ;
    $this->sound = $sound ?? ;
    $this->substitutions = $substitutions ?? ;
    $this->title = $title ?? ;
    $this->url = $url ?? ;
  }
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

  public function __construct(shape(
  ?'bundle_id' => __string,
  ?'certificate' => __string,
  ?'default_authentication_method' => __string,
  ?'enabled' => __boolean,
  ?'private_key' => __string,
  ?'team_id' => __string,
  ?'token_key' => __string,
  ?'token_key_id' => __string,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? ;
    $this->certificate = $certificate ?? ;
    $this->default_authentication_method = $default_authentication_method ?? ;
    $this->enabled = $enabled ?? ;
    $this->private_key = $private_key ?? ;
    $this->team_id = $team_id ?? ;
    $this->token_key = $token_key ?? ;
    $this->token_key_id = $token_key_id ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'default_authentication_method' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'has_token_key' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'platform' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->default_authentication_method = $default_authentication_method ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->has_token_key = $has_token_key ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->platform = $platform ?? ;
    $this->version = $version ?? ;
  }
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

  public function __construct(shape(
  ?'apns_push_type' => __string,
  ?'action' => Action,
  ?'badge' => __integer,
  ?'body' => __string,
  ?'category' => __string,
  ?'collapse_id' => __string,
  ?'data' => MapOf__string,
  ?'media_url' => __string,
  ?'preferred_authentication_method' => __string,
  ?'priority' => __string,
  ?'raw_content' => __string,
  ?'silent_push' => __boolean,
  ?'sound' => __string,
  ?'substitutions' => MapOfListOf__string,
  ?'thread_id' => __string,
  ?'time_to_live' => __integer,
  ?'title' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->apns_push_type = $apns_push_type ?? ;
    $this->action = $action ?? "";
    $this->badge = $badge ?? ;
    $this->body = $body ?? ;
    $this->category = $category ?? ;
    $this->collapse_id = $collapse_id ?? ;
    $this->data = $data ?? ;
    $this->media_url = $media_url ?? ;
    $this->preferred_authentication_method = $preferred_authentication_method ?? ;
    $this->priority = $priority ?? ;
    $this->raw_content = $raw_content ?? ;
    $this->silent_push = $silent_push ?? ;
    $this->sound = $sound ?? ;
    $this->substitutions = $substitutions ?? ;
    $this->thread_id = $thread_id ?? ;
    $this->time_to_live = $time_to_live ?? ;
    $this->title = $title ?? ;
    $this->url = $url ?? ;
  }
}

class APNSPushNotificationTemplate {
  public Action $action;
  public __string $body;
  public __string $media_url;
  public __string $raw_content;
  public __string $sound;
  public __string $title;
  public __string $url;

  public function __construct(shape(
  ?'action' => Action,
  ?'body' => __string,
  ?'media_url' => __string,
  ?'raw_content' => __string,
  ?'sound' => __string,
  ?'title' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->body = $body ?? ;
    $this->media_url = $media_url ?? ;
    $this->raw_content = $raw_content ?? ;
    $this->sound = $sound ?? ;
    $this->title = $title ?? ;
    $this->url = $url ?? ;
  }
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

  public function __construct(shape(
  ?'bundle_id' => __string,
  ?'certificate' => __string,
  ?'default_authentication_method' => __string,
  ?'enabled' => __boolean,
  ?'private_key' => __string,
  ?'team_id' => __string,
  ?'token_key' => __string,
  ?'token_key_id' => __string,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? ;
    $this->certificate = $certificate ?? ;
    $this->default_authentication_method = $default_authentication_method ?? ;
    $this->enabled = $enabled ?? ;
    $this->private_key = $private_key ?? ;
    $this->team_id = $team_id ?? ;
    $this->token_key = $token_key ?? ;
    $this->token_key_id = $token_key_id ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'default_authentication_method' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'has_token_key' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'platform' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->default_authentication_method = $default_authentication_method ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->has_token_key = $has_token_key ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->platform = $platform ?? ;
    $this->version = $version ?? ;
  }
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

  public function __construct(shape(
  ?'bundle_id' => __string,
  ?'certificate' => __string,
  ?'default_authentication_method' => __string,
  ?'enabled' => __boolean,
  ?'private_key' => __string,
  ?'team_id' => __string,
  ?'token_key' => __string,
  ?'token_key_id' => __string,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? ;
    $this->certificate = $certificate ?? ;
    $this->default_authentication_method = $default_authentication_method ?? ;
    $this->enabled = $enabled ?? ;
    $this->private_key = $private_key ?? ;
    $this->team_id = $team_id ?? ;
    $this->token_key = $token_key ?? ;
    $this->token_key_id = $token_key_id ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'default_authentication_method' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'has_token_key' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'platform' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->default_authentication_method = $default_authentication_method ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->has_token_key = $has_token_key ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->platform = $platform ?? ;
    $this->version = $version ?? ;
  }
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

  public function __construct(shape(
  ?'bundle_id' => __string,
  ?'certificate' => __string,
  ?'default_authentication_method' => __string,
  ?'enabled' => __boolean,
  ?'private_key' => __string,
  ?'team_id' => __string,
  ?'token_key' => __string,
  ?'token_key_id' => __string,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? ;
    $this->certificate = $certificate ?? ;
    $this->default_authentication_method = $default_authentication_method ?? ;
    $this->enabled = $enabled ?? ;
    $this->private_key = $private_key ?? ;
    $this->team_id = $team_id ?? ;
    $this->token_key = $token_key ?? ;
    $this->token_key_id = $token_key_id ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'default_authentication_method' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'has_token_key' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'platform' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->default_authentication_method = $default_authentication_method ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->has_token_key = $has_token_key ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->platform = $platform ?? ;
    $this->version = $version ?? ;
  }
}

type Action = string;

class ActivitiesResponse {
  public ListOfActivityResponse $item;
  public __string $next_token;

  public function __construct(shape(
  ?'item' => ListOfActivityResponse,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class Activity {
  public ConditionalSplitActivity $conditional_split;
  public __string $description;
  public EmailMessageActivity $email;
  public HoldoutActivity $holdout;
  public MultiConditionalSplitActivity $multi_condition;
  public RandomSplitActivity $random_split;
  public WaitActivity $wait;

  public function __construct(shape(
  ?'conditional_split' => ConditionalSplitActivity,
  ?'description' => __string,
  ?'email' => EmailMessageActivity,
  ?'holdout' => HoldoutActivity,
  ?'multi_condition' => MultiConditionalSplitActivity,
  ?'random_split' => RandomSplitActivity,
  ?'wait' => WaitActivity,
  ) $s = shape()) {
    $this->conditional_split = $conditional_split ?? ;
    $this->description = $description ?? ;
    $this->email = $email ?? ;
    $this->holdout = $holdout ?? ;
    $this->multi_condition = $multi_condition ?? ;
    $this->random_split = $random_split ?? ;
    $this->wait = $wait ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_id' => __string,
  ?'end' => __string,
  ?'id' => __string,
  ?'result' => __string,
  ?'scheduled_start' => __string,
  ?'start' => __string,
  ?'state' => __string,
  ?'successful_endpoint_count' => __integer,
  ?'timezones_completed_count' => __integer,
  ?'timezones_total_count' => __integer,
  ?'total_endpoint_count' => __integer,
  ?'treatment_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_id = $campaign_id ?? ;
    $this->end = $end ?? ;
    $this->id = $id ?? ;
    $this->result = $result ?? ;
    $this->scheduled_start = $scheduled_start ?? ;
    $this->start = $start ?? ;
    $this->state = $state ?? "";
    $this->successful_endpoint_count = $successful_endpoint_count ?? ;
    $this->timezones_completed_count = $timezones_completed_count ?? ;
    $this->timezones_total_count = $timezones_total_count ?? ;
    $this->total_endpoint_count = $total_endpoint_count ?? ;
    $this->treatment_id = $treatment_id ?? ;
  }
}

class AddressConfiguration {
  public __string $body_override;
  public ChannelType $channel_type;
  public MapOf__string $context;
  public __string $raw_content;
  public MapOfListOf__string $substitutions;
  public __string $title_override;

  public function __construct(shape(
  ?'body_override' => __string,
  ?'channel_type' => ChannelType,
  ?'context' => MapOf__string,
  ?'raw_content' => __string,
  ?'substitutions' => MapOfListOf__string,
  ?'title_override' => __string,
  ) $s = shape()) {
    $this->body_override = $body_override ?? ;
    $this->channel_type = $channel_type ?? "";
    $this->context = $context ?? ;
    $this->raw_content = $raw_content ?? ;
    $this->substitutions = $substitutions ?? ;
    $this->title_override = $title_override ?? ;
  }
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

  public function __construct(shape(
  ?'action' => Action,
  ?'body' => __string,
  ?'image_icon_url' => __string,
  ?'image_url' => __string,
  ?'raw_content' => __string,
  ?'small_image_icon_url' => __string,
  ?'sound' => __string,
  ?'title' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->body = $body ?? ;
    $this->image_icon_url = $image_icon_url ?? ;
    $this->image_url = $image_url ?? ;
    $this->raw_content = $raw_content ?? ;
    $this->small_image_icon_url = $small_image_icon_url ?? ;
    $this->sound = $sound ?? ;
    $this->title = $title ?? ;
    $this->url = $url ?? ;
  }
}

class ApplicationDateRangeKpiResponse {
  public __string $application_id;
  public __timestampIso8601 $end_time;
  public __string $kpi_name;
  public BaseKpiResult $kpi_result;
  public __string $next_token;
  public __timestampIso8601 $start_time;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'end_time' => __timestampIso8601,
  ?'kpi_name' => __string,
  ?'kpi_result' => BaseKpiResult,
  ?'next_token' => __string,
  ?'start_time' => __timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->end_time = $end_time ?? ;
    $this->kpi_name = $kpi_name ?? ;
    $this->kpi_result = $kpi_result ?? ;
    $this->next_token = $next_token ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class ApplicationResponse {
  public __string $arn;
  public __string $id;
  public __string $name;
  public MapOf__string $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'id' => __string,
  ?'name' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->tags = $tags ?? ;
  }
}

class ApplicationSettingsResource {
  public __string $application_id;
  public CampaignHook $campaign_hook;
  public __string $last_modified_date;
  public CampaignLimits $limits;
  public QuietTime $quiet_time;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_hook' => CampaignHook,
  ?'last_modified_date' => __string,
  ?'limits' => CampaignLimits,
  ?'quiet_time' => QuietTime,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_hook = $campaign_hook ?? null;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->limits = $limits ?? ;
    $this->quiet_time = $quiet_time ?? null;
  }
}

class ApplicationsResponse {
  public ListOfApplicationResponse $item;
  public __string $next_token;

  public function __construct(shape(
  ?'item' => ListOfApplicationResponse,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class AttributeDimension {
  public AttributeType $attribute_type;
  public ListOf__string $values;

  public function __construct(shape(
  ?'attribute_type' => AttributeType,
  ?'values' => ListOf__string,
  ) $s = shape()) {
    $this->attribute_type = $attribute_type ?? "";
    $this->values = $values ?? ;
  }
}

type AttributeType = string;

class AttributesResource {
  public __string $application_id;
  public __string $attribute_type;
  public ListOf__string $attributes;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'attribute_type' => __string,
  ?'attributes' => ListOf__string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->attribute_type = $attribute_type ?? "";
    $this->attributes = $attributes ?? ;
  }
}

class BadRequestException {
  public __string $message;
  public __string $request_id;

  public function __construct(shape(
  ?'message' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->request_id = $request_id ?? ;
  }
}

class BaiduChannelRequest {
  public __string $api_key;
  public __boolean $enabled;
  public __string $secret_key;

  public function __construct(shape(
  ?'api_key' => __string,
  ?'enabled' => __boolean,
  ?'secret_key' => __string,
  ) $s = shape()) {
    $this->api_key = $api_key ?? ;
    $this->enabled = $enabled ?? ;
    $this->secret_key = $secret_key ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'credential' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'platform' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->credential = $credential ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->platform = $platform ?? ;
    $this->version = $version ?? ;
  }
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

  public function __construct(shape(
  ?'action' => Action,
  ?'body' => __string,
  ?'data' => MapOf__string,
  ?'icon_reference' => __string,
  ?'image_icon_url' => __string,
  ?'image_url' => __string,
  ?'raw_content' => __string,
  ?'silent_push' => __boolean,
  ?'small_image_icon_url' => __string,
  ?'sound' => __string,
  ?'substitutions' => MapOfListOf__string,
  ?'time_to_live' => __integer,
  ?'title' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->body = $body ?? ;
    $this->data = $data ?? ;
    $this->icon_reference = $icon_reference ?? ;
    $this->image_icon_url = $image_icon_url ?? ;
    $this->image_url = $image_url ?? ;
    $this->raw_content = $raw_content ?? ;
    $this->silent_push = $silent_push ?? ;
    $this->small_image_icon_url = $small_image_icon_url ?? ;
    $this->sound = $sound ?? ;
    $this->substitutions = $substitutions ?? ;
    $this->time_to_live = $time_to_live ?? ;
    $this->title = $title ?? ;
    $this->url = $url ?? ;
  }
}

class BaseKpiResult {
  public ListOfResultRow $rows;

  public function __construct(shape(
  ?'rows' => ListOfResultRow,
  ) $s = shape()) {
    $this->rows = $rows ?? ;
  }
}

class CampaignCustomMessage {
  public __string $data;

  public function __construct(shape(
  ?'data' => __string,
  ) $s = shape()) {
    $this->data = $data ?? ;
  }
}

class CampaignDateRangeKpiResponse {
  public __string $application_id;
  public __string $campaign_id;
  public __timestampIso8601 $end_time;
  public __string $kpi_name;
  public BaseKpiResult $kpi_result;
  public __string $next_token;
  public __timestampIso8601 $start_time;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_id' => __string,
  ?'end_time' => __timestampIso8601,
  ?'kpi_name' => __string,
  ?'kpi_result' => BaseKpiResult,
  ?'next_token' => __string,
  ?'start_time' => __timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_id = $campaign_id ?? ;
    $this->end_time = $end_time ?? ;
    $this->kpi_name = $kpi_name ?? ;
    $this->kpi_result = $kpi_result ?? ;
    $this->next_token = $next_token ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class CampaignEmailMessage {
  public __string $body;
  public __string $from_address;
  public __string $html_body;
  public __string $title;

  public function __construct(shape(
  ?'body' => __string,
  ?'from_address' => __string,
  ?'html_body' => __string,
  ?'title' => __string,
  ) $s = shape()) {
    $this->body = $body ?? ;
    $this->from_address = $from_address ?? ;
    $this->html_body = $html_body ?? ;
    $this->title = $title ?? ;
  }
}

class CampaignEventFilter {
  public EventDimensions $dimensions;
  public FilterType $filter_type;

  public function __construct(shape(
  ?'dimensions' => EventDimensions,
  ?'filter_type' => FilterType,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? ;
    $this->filter_type = $filter_type ?? "";
  }
}

class CampaignHook {
  public __string $lambda_function_name;
  public Mode $mode;
  public __string $web_url;

  public function __construct(shape(
  ?'lambda_function_name' => __string,
  ?'mode' => Mode,
  ?'web_url' => __string,
  ) $s = shape()) {
    $this->lambda_function_name = $lambda_function_name ?? ;
    $this->mode = $mode ?? "";
    $this->web_url = $web_url ?? ;
  }
}

class CampaignLimits {
  public __integer $daily;
  public __integer $maximum_duration;
  public __integer $messages_per_second;
  public __integer $total;

  public function __construct(shape(
  ?'daily' => __integer,
  ?'maximum_duration' => __integer,
  ?'messages_per_second' => __integer,
  ?'total' => __integer,
  ) $s = shape()) {
    $this->daily = $daily ?? ;
    $this->maximum_duration = $maximum_duration ?? ;
    $this->messages_per_second = $messages_per_second ?? ;
    $this->total = $total ?? ;
  }
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

  public function __construct(shape(
  ?'additional_treatments' => ListOfTreatmentResource,
  ?'application_id' => __string,
  ?'arn' => __string,
  ?'creation_date' => __string,
  ?'custom_delivery_configuration' => CustomDeliveryConfiguration,
  ?'default_state' => CampaignState,
  ?'description' => __string,
  ?'holdout_percent' => __integer,
  ?'hook' => CampaignHook,
  ?'id' => __string,
  ?'is_paused' => __boolean,
  ?'last_modified_date' => __string,
  ?'limits' => CampaignLimits,
  ?'message_configuration' => MessageConfiguration,
  ?'name' => __string,
  ?'schedule' => Schedule,
  ?'segment_id' => __string,
  ?'segment_version' => __integer,
  ?'state' => CampaignState,
  ?'template_configuration' => TemplateConfiguration,
  ?'treatment_description' => __string,
  ?'treatment_name' => __string,
  ?'version' => __integer,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->additional_treatments = $additional_treatments ?? ;
    $this->application_id = $application_id ?? ;
    $this->arn = $arn ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->custom_delivery_configuration = $custom_delivery_configuration ?? null;
    $this->default_state = $default_state ?? ;
    $this->description = $description ?? ;
    $this->holdout_percent = $holdout_percent ?? ;
    $this->hook = $hook ?? ;
    $this->id = $id ?? ;
    $this->is_paused = $is_paused ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->limits = $limits ?? ;
    $this->message_configuration = $message_configuration ?? null;
    $this->name = $name ?? ;
    $this->schedule = $schedule ?? null;
    $this->segment_id = $segment_id ?? ;
    $this->segment_version = $segment_version ?? ;
    $this->state = $state ?? "";
    $this->template_configuration = $template_configuration ?? null;
    $this->treatment_description = $treatment_description ?? ;
    $this->treatment_name = $treatment_name ?? ;
    $this->version = $version ?? ;
    $this->tags = $tags ?? ;
  }
}

class CampaignSmsMessage {
  public __string $body;
  public MessageType $message_type;
  public __string $sender_id;

  public function __construct(shape(
  ?'body' => __string,
  ?'message_type' => MessageType,
  ?'sender_id' => __string,
  ) $s = shape()) {
    $this->body = $body ?? ;
    $this->message_type = $message_type ?? "";
    $this->sender_id = $sender_id ?? ;
  }
}

class CampaignState {
  public CampaignStatus $campaign_status;

  public function __construct(shape(
  ?'campaign_status' => CampaignStatus,
  ) $s = shape()) {
    $this->campaign_status = $campaign_status ?? "";
  }
}

type CampaignStatus = string;

class CampaignsResponse {
  public ListOfCampaignResponse $item;
  public __string $next_token;

  public function __construct(shape(
  ?'item' => ListOfCampaignResponse,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->next_token = $next_token ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->version = $version ?? ;
  }
}

type ChannelType = string;

class ChannelsResponse {
  public MapOfChannelResponse $channels;

  public function __construct(shape(
  ?'channels' => MapOfChannelResponse,
  ) $s = shape()) {
    $this->channels = $channels ?? ;
  }
}

class Condition {
  public ListOfSimpleCondition $conditions;
  public Operator $operator;

  public function __construct(shape(
  ?'conditions' => ListOfSimpleCondition,
  ?'operator' => Operator,
  ) $s = shape()) {
    $this->conditions = $conditions ?? ;
    $this->operator = $operator ?? "";
  }
}

class ConditionalSplitActivity {
  public Condition $condition;
  public WaitTime $evaluation_wait_time;
  public __string $false_activity;
  public __string $true_activity;

  public function __construct(shape(
  ?'condition' => Condition,
  ?'evaluation_wait_time' => WaitTime,
  ?'false_activity' => __string,
  ?'true_activity' => __string,
  ) $s = shape()) {
    $this->condition = $condition ?? null;
    $this->evaluation_wait_time = $evaluation_wait_time ?? ;
    $this->false_activity = $false_activity ?? ;
    $this->true_activity = $true_activity ?? ;
  }
}

class CreateAppRequest {
  public CreateApplicationRequest $create_application_request;

  public function __construct(shape(
  ?'create_application_request' => CreateApplicationRequest,
  ) $s = shape()) {
    $this->create_application_request = $create_application_request ?? null;
  }
}

class CreateAppResponse {
  public ApplicationResponse $application_response;

  public function __construct(shape(
  ?'application_response' => ApplicationResponse,
  ) $s = shape()) {
    $this->application_response = $application_response ?? null;
  }
}

class CreateApplicationRequest {
  public __string $name;
  public MapOf__string $tags;

  public function __construct(shape(
  ?'name' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateCampaignRequest {
  public __string $application_id;
  public WriteCampaignRequest $write_campaign_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'write_campaign_request' => WriteCampaignRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->write_campaign_request = $write_campaign_request ?? null;
  }
}

class CreateCampaignResponse {
  public CampaignResponse $campaign_response;

  public function __construct(shape(
  ?'campaign_response' => CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $campaign_response ?? null;
  }
}

class CreateEmailTemplateRequest {
  public EmailTemplateRequest $email_template_request;
  public __string $template_name;

  public function __construct(shape(
  ?'email_template_request' => EmailTemplateRequest,
  ?'template_name' => __string,
  ) $s = shape()) {
    $this->email_template_request = $email_template_request ?? null;
    $this->template_name = $template_name ?? ;
  }
}

class CreateEmailTemplateResponse {
  public CreateTemplateMessageBody $create_template_message_body;

  public function __construct(shape(
  ?'create_template_message_body' => CreateTemplateMessageBody,
  ) $s = shape()) {
    $this->create_template_message_body = $create_template_message_body ?? null;
  }
}

class CreateExportJobRequest {
  public __string $application_id;
  public ExportJobRequest $export_job_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'export_job_request' => ExportJobRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->export_job_request = $export_job_request ?? null;
  }
}

class CreateExportJobResponse {
  public ExportJobResponse $export_job_response;

  public function __construct(shape(
  ?'export_job_response' => ExportJobResponse,
  ) $s = shape()) {
    $this->export_job_response = $export_job_response ?? null;
  }
}

class CreateImportJobRequest {
  public __string $application_id;
  public ImportJobRequest $import_job_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'import_job_request' => ImportJobRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->import_job_request = $import_job_request ?? null;
  }
}

class CreateImportJobResponse {
  public ImportJobResponse $import_job_response;

  public function __construct(shape(
  ?'import_job_response' => ImportJobResponse,
  ) $s = shape()) {
    $this->import_job_response = $import_job_response ?? null;
  }
}

class CreateJourneyRequest {
  public __string $application_id;
  public WriteJourneyRequest $write_journey_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'write_journey_request' => WriteJourneyRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->write_journey_request = $write_journey_request ?? null;
  }
}

class CreateJourneyResponse {
  public JourneyResponse $journey_response;

  public function __construct(shape(
  ?'journey_response' => JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $journey_response ?? null;
  }
}

class CreatePushTemplateRequest {
  public PushNotificationTemplateRequest $push_notification_template_request;
  public __string $template_name;

  public function __construct(shape(
  ?'push_notification_template_request' => PushNotificationTemplateRequest,
  ?'template_name' => __string,
  ) $s = shape()) {
    $this->push_notification_template_request = $push_notification_template_request ?? null;
    $this->template_name = $template_name ?? ;
  }
}

class CreatePushTemplateResponse {
  public CreateTemplateMessageBody $create_template_message_body;

  public function __construct(shape(
  ?'create_template_message_body' => CreateTemplateMessageBody,
  ) $s = shape()) {
    $this->create_template_message_body = $create_template_message_body ?? null;
  }
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

  public function __construct(shape(
  ?'attributes' => MapOf__string,
  ?'description' => __string,
  ?'name' => __string,
  ?'recommendation_provider_id_type' => __string,
  ?'recommendation_provider_role_arn' => __string,
  ?'recommendation_provider_uri' => __string,
  ?'recommendation_transformer_uri' => __string,
  ?'recommendations_display_name' => __string,
  ?'recommendations_per_message' => __integer,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->recommendation_provider_id_type = $recommendation_provider_id_type ?? ;
    $this->recommendation_provider_role_arn = $recommendation_provider_role_arn ?? ;
    $this->recommendation_provider_uri = $recommendation_provider_uri ?? ;
    $this->recommendation_transformer_uri = $recommendation_transformer_uri ?? ;
    $this->recommendations_display_name = $recommendations_display_name ?? ;
    $this->recommendations_per_message = $recommendations_per_message ?? ;
  }
}

class CreateRecommenderConfigurationRequest {
  public CreateRecommenderConfiguration $create_recommender_configuration;

  public function __construct(shape(
  ?'create_recommender_configuration' => CreateRecommenderConfiguration,
  ) $s = shape()) {
    $this->create_recommender_configuration = $create_recommender_configuration ?? null;
  }
}

class CreateRecommenderConfigurationResponse {
  public RecommenderConfigurationResponse $recommender_configuration_response;

  public function __construct(shape(
  ?'recommender_configuration_response' => RecommenderConfigurationResponse,
  ) $s = shape()) {
    $this->recommender_configuration_response = $recommender_configuration_response ?? null;
  }
}

class CreateSegmentRequest {
  public __string $application_id;
  public WriteSegmentRequest $write_segment_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'write_segment_request' => WriteSegmentRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->write_segment_request = $write_segment_request ?? null;
  }
}

class CreateSegmentResponse {
  public SegmentResponse $segment_response;

  public function __construct(shape(
  ?'segment_response' => SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $segment_response ?? null;
  }
}

class CreateSmsTemplateRequest {
  public SMSTemplateRequest $sms_template_request;
  public __string $template_name;

  public function __construct(shape(
  ?'sms_template_request' => SMSTemplateRequest,
  ?'template_name' => __string,
  ) $s = shape()) {
    $this->sms_template_request = $sms_template_request ?? null;
    $this->template_name = $template_name ?? ;
  }
}

class CreateSmsTemplateResponse {
  public CreateTemplateMessageBody $create_template_message_body;

  public function __construct(shape(
  ?'create_template_message_body' => CreateTemplateMessageBody,
  ) $s = shape()) {
    $this->create_template_message_body = $create_template_message_body ?? null;
  }
}

class CreateTemplateMessageBody {
  public __string $arn;
  public __string $message;
  public __string $request_id;

  public function __construct(shape(
  ?'arn' => __string,
  ?'message' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->message = $message ?? null;
    $this->request_id = $request_id ?? ;
  }
}

class CreateVoiceTemplateRequest {
  public __string $template_name;
  public VoiceTemplateRequest $voice_template_request;

  public function __construct(shape(
  ?'template_name' => __string,
  ?'voice_template_request' => VoiceTemplateRequest,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->voice_template_request = $voice_template_request ?? null;
  }
}

class CreateVoiceTemplateResponse {
  public CreateTemplateMessageBody $create_template_message_body;

  public function __construct(shape(
  ?'create_template_message_body' => CreateTemplateMessageBody,
  ) $s = shape()) {
    $this->create_template_message_body = $create_template_message_body ?? null;
  }
}

class CustomDeliveryConfiguration {
  public __string $delivery_uri;
  public ListOf__EndpointTypesElement $endpoint_types;

  public function __construct(shape(
  ?'delivery_uri' => __string,
  ?'endpoint_types' => ListOf__EndpointTypesElement,
  ) $s = shape()) {
    $this->delivery_uri = $delivery_uri ?? ;
    $this->endpoint_types = $endpoint_types ?? ;
  }
}

class DefaultMessage {
  public __string $body;
  public MapOfListOf__string $substitutions;

  public function __construct(shape(
  ?'body' => __string,
  ?'substitutions' => MapOfListOf__string,
  ) $s = shape()) {
    $this->body = $body ?? ;
    $this->substitutions = $substitutions ?? ;
  }
}

class DefaultPushNotificationMessage {
  public Action $action;
  public __string $body;
  public MapOf__string $data;
  public __boolean $silent_push;
  public MapOfListOf__string $substitutions;
  public __string $title;
  public __string $url;

  public function __construct(shape(
  ?'action' => Action,
  ?'body' => __string,
  ?'data' => MapOf__string,
  ?'silent_push' => __boolean,
  ?'substitutions' => MapOfListOf__string,
  ?'title' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->body = $body ?? ;
    $this->data = $data ?? ;
    $this->silent_push = $silent_push ?? ;
    $this->substitutions = $substitutions ?? ;
    $this->title = $title ?? ;
    $this->url = $url ?? ;
  }
}

class DefaultPushNotificationTemplate {
  public Action $action;
  public __string $body;
  public __string $sound;
  public __string $title;
  public __string $url;

  public function __construct(shape(
  ?'action' => Action,
  ?'body' => __string,
  ?'sound' => __string,
  ?'title' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->body = $body ?? ;
    $this->sound = $sound ?? ;
    $this->title = $title ?? ;
    $this->url = $url ?? ;
  }
}

class DeleteAdmChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteAdmChannelResponse {
  public ADMChannelResponse $adm_channel_response;

  public function __construct(shape(
  ?'adm_channel_response' => ADMChannelResponse,
  ) $s = shape()) {
    $this->adm_channel_response = $adm_channel_response ?? null;
  }
}

class DeleteApnsChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteApnsChannelResponse {
  public APNSChannelResponse $apns_channel_response;

  public function __construct(shape(
  ?'apns_channel_response' => APNSChannelResponse,
  ) $s = shape()) {
    $this->apns_channel_response = $apns_channel_response ?? null;
  }
}

class DeleteApnsSandboxChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteApnsSandboxChannelResponse {
  public APNSSandboxChannelResponse $apns_sandbox_channel_response;

  public function __construct(shape(
  ?'apns_sandbox_channel_response' => APNSSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_sandbox_channel_response = $apns_sandbox_channel_response ?? null;
  }
}

class DeleteApnsVoipChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteApnsVoipChannelResponse {
  public APNSVoipChannelResponse $apns_voip_channel_response;

  public function __construct(shape(
  ?'apns_voip_channel_response' => APNSVoipChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_channel_response = $apns_voip_channel_response ?? null;
  }
}

class DeleteApnsVoipSandboxChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteApnsVoipSandboxChannelResponse {
  public APNSVoipSandboxChannelResponse $apns_voip_sandbox_channel_response;

  public function __construct(shape(
  ?'apns_voip_sandbox_channel_response' => APNSVoipSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_sandbox_channel_response = $apns_voip_sandbox_channel_response ?? null;
  }
}

class DeleteAppRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteAppResponse {
  public ApplicationResponse $application_response;

  public function __construct(shape(
  ?'application_response' => ApplicationResponse,
  ) $s = shape()) {
    $this->application_response = $application_response ?? null;
  }
}

class DeleteBaiduChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteBaiduChannelResponse {
  public BaiduChannelResponse $baidu_channel_response;

  public function __construct(shape(
  ?'baidu_channel_response' => BaiduChannelResponse,
  ) $s = shape()) {
    $this->baidu_channel_response = $baidu_channel_response ?? null;
  }
}

class DeleteCampaignRequest {
  public __string $application_id;
  public __string $campaign_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_id = $campaign_id ?? ;
  }
}

class DeleteCampaignResponse {
  public CampaignResponse $campaign_response;

  public function __construct(shape(
  ?'campaign_response' => CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $campaign_response ?? null;
  }
}

class DeleteEmailChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteEmailChannelResponse {
  public EmailChannelResponse $email_channel_response;

  public function __construct(shape(
  ?'email_channel_response' => EmailChannelResponse,
  ) $s = shape()) {
    $this->email_channel_response = $email_channel_response ?? null;
  }
}

class DeleteEmailTemplateRequest {
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class DeleteEmailTemplateResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

class DeleteEndpointRequest {
  public __string $application_id;
  public __string $endpoint_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'endpoint_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->endpoint_id = $endpoint_id ?? ;
  }
}

class DeleteEndpointResponse {
  public EndpointResponse $endpoint_response;

  public function __construct(shape(
  ?'endpoint_response' => EndpointResponse,
  ) $s = shape()) {
    $this->endpoint_response = $endpoint_response ?? null;
  }
}

class DeleteEventStreamRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteEventStreamResponse {
  public EventStream $event_stream;

  public function __construct(shape(
  ?'event_stream' => EventStream,
  ) $s = shape()) {
    $this->event_stream = $event_stream ?? null;
  }
}

class DeleteGcmChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteGcmChannelResponse {
  public GCMChannelResponse $gcm_channel_response;

  public function __construct(shape(
  ?'gcm_channel_response' => GCMChannelResponse,
  ) $s = shape()) {
    $this->gcm_channel_response = $gcm_channel_response ?? null;
  }
}

class DeleteJourneyRequest {
  public __string $application_id;
  public __string $journey_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'journey_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->journey_id = $journey_id ?? ;
  }
}

class DeleteJourneyResponse {
  public JourneyResponse $journey_response;

  public function __construct(shape(
  ?'journey_response' => JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $journey_response ?? null;
  }
}

class DeletePushTemplateRequest {
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class DeletePushTemplateResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

class DeleteRecommenderConfigurationRequest {
  public __string $recommender_id;

  public function __construct(shape(
  ?'recommender_id' => __string,
  ) $s = shape()) {
    $this->recommender_id = $recommender_id ?? ;
  }
}

class DeleteRecommenderConfigurationResponse {
  public RecommenderConfigurationResponse $recommender_configuration_response;

  public function __construct(shape(
  ?'recommender_configuration_response' => RecommenderConfigurationResponse,
  ) $s = shape()) {
    $this->recommender_configuration_response = $recommender_configuration_response ?? null;
  }
}

class DeleteSegmentRequest {
  public __string $application_id;
  public __string $segment_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'segment_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->segment_id = $segment_id ?? ;
  }
}

class DeleteSegmentResponse {
  public SegmentResponse $segment_response;

  public function __construct(shape(
  ?'segment_response' => SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $segment_response ?? null;
  }
}

class DeleteSmsChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteSmsChannelResponse {
  public SMSChannelResponse $sms_channel_response;

  public function __construct(shape(
  ?'sms_channel_response' => SMSChannelResponse,
  ) $s = shape()) {
    $this->sms_channel_response = $sms_channel_response ?? null;
  }
}

class DeleteSmsTemplateRequest {
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class DeleteSmsTemplateResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

class DeleteUserEndpointsRequest {
  public __string $application_id;
  public __string $user_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'user_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->user_id = $user_id ?? ;
  }
}

class DeleteUserEndpointsResponse {
  public EndpointsResponse $endpoints_response;

  public function __construct(shape(
  ?'endpoints_response' => EndpointsResponse,
  ) $s = shape()) {
    $this->endpoints_response = $endpoints_response ?? null;
  }
}

class DeleteVoiceChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class DeleteVoiceChannelResponse {
  public VoiceChannelResponse $voice_channel_response;

  public function __construct(shape(
  ?'voice_channel_response' => VoiceChannelResponse,
  ) $s = shape()) {
    $this->voice_channel_response = $voice_channel_response ?? null;
  }
}

class DeleteVoiceTemplateRequest {
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class DeleteVoiceTemplateResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

type DeliveryStatus = string;

type DimensionType = string;

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

  public function __construct(shape(
  ?'adm_message' => ADMMessage,
  ?'apns_message' => APNSMessage,
  ?'baidu_message' => BaiduMessage,
  ?'default_message' => DefaultMessage,
  ?'default_push_notification_message' => DefaultPushNotificationMessage,
  ?'email_message' => EmailMessage,
  ?'gcm_message' => GCMMessage,
  ?'sms_message' => SMSMessage,
  ?'voice_message' => VoiceMessage,
  ) $s = shape()) {
    $this->adm_message = $adm_message ?? null;
    $this->apns_message = $apns_message ?? null;
    $this->baidu_message = $baidu_message ?? null;
    $this->default_message = $default_message ?? null;
    $this->default_push_notification_message = $default_push_notification_message ?? null;
    $this->email_message = $email_message ?? null;
    $this->gcm_message = $gcm_message ?? null;
    $this->sms_message = $sms_message ?? null;
    $this->voice_message = $voice_message ?? null;
  }
}

type Duration = string;

class EmailChannelRequest {
  public __string $configuration_set;
  public __boolean $enabled;
  public __string $from_address;
  public __string $identity;
  public __string $role_arn;

  public function __construct(shape(
  ?'configuration_set' => __string,
  ?'enabled' => __boolean,
  ?'from_address' => __string,
  ?'identity' => __string,
  ?'role_arn' => __string,
  ) $s = shape()) {
    $this->configuration_set = $configuration_set ?? ;
    $this->enabled = $enabled ?? ;
    $this->from_address = $from_address ?? ;
    $this->identity = $identity ?? ;
    $this->role_arn = $role_arn ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'configuration_set' => __string,
  ?'creation_date' => __string,
  ?'enabled' => __boolean,
  ?'from_address' => __string,
  ?'has_credential' => __boolean,
  ?'id' => __string,
  ?'identity' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'messages_per_second' => __integer,
  ?'platform' => __string,
  ?'role_arn' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->configuration_set = $configuration_set ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->enabled = $enabled ?? ;
    $this->from_address = $from_address ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->id = $id ?? ;
    $this->identity = $identity ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->messages_per_second = $messages_per_second ?? ;
    $this->platform = $platform ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->version = $version ?? ;
  }
}

class EmailMessage {
  public __string $body;
  public __string $feedback_forwarding_address;
  public __string $from_address;
  public RawEmail $raw_email;
  public ListOf__string $reply_to_addresses;
  public SimpleEmail $simple_email;
  public MapOfListOf__string $substitutions;

  public function __construct(shape(
  ?'body' => __string,
  ?'feedback_forwarding_address' => __string,
  ?'from_address' => __string,
  ?'raw_email' => RawEmail,
  ?'reply_to_addresses' => ListOf__string,
  ?'simple_email' => SimpleEmail,
  ?'substitutions' => MapOfListOf__string,
  ) $s = shape()) {
    $this->body = $body ?? ;
    $this->feedback_forwarding_address = $feedback_forwarding_address ?? ;
    $this->from_address = $from_address ?? ;
    $this->raw_email = $raw_email ?? null;
    $this->reply_to_addresses = $reply_to_addresses ?? ;
    $this->simple_email = $simple_email ?? null;
    $this->substitutions = $substitutions ?? ;
  }
}

class EmailMessageActivity {
  public JourneyEmailMessage $message_config;
  public __string $next_activity;
  public __string $template_name;
  public __string $template_version;

  public function __construct(shape(
  ?'message_config' => JourneyEmailMessage,
  ?'next_activity' => __string,
  ?'template_name' => __string,
  ?'template_version' => __string,
  ) $s = shape()) {
    $this->message_config = $message_config ?? ;
    $this->next_activity = $next_activity ?? ;
    $this->template_name = $template_name ?? ;
    $this->template_version = $template_version ?? ;
  }
}

class EmailTemplateRequest {
  public __string $default_substitutions;
  public __string $html_part;
  public __string $recommender_id;
  public __string $subject;
  public __string $template_description;
  public __string $text_part;
  public MapOf__string $tags;

  public function __construct(shape(
  ?'default_substitutions' => __string,
  ?'html_part' => __string,
  ?'recommender_id' => __string,
  ?'subject' => __string,
  ?'template_description' => __string,
  ?'text_part' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->default_substitutions = $default_substitutions ?? ;
    $this->html_part = $html_part ?? ;
    $this->recommender_id = $recommender_id ?? ;
    $this->subject = $subject ?? ;
    $this->template_description = $template_description ?? ;
    $this->text_part = $text_part ?? ;
    $this->tags = $tags ?? ;
  }
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

  public function __construct(shape(
  ?'arn' => __string,
  ?'creation_date' => __string,
  ?'default_substitutions' => __string,
  ?'html_part' => __string,
  ?'last_modified_date' => __string,
  ?'recommender_id' => __string,
  ?'subject' => __string,
  ?'template_description' => __string,
  ?'template_name' => __string,
  ?'template_type' => TemplateType,
  ?'text_part' => __string,
  ?'version' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->default_substitutions = $default_substitutions ?? ;
    $this->html_part = $html_part ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->recommender_id = $recommender_id ?? ;
    $this->subject = $subject ?? ;
    $this->template_description = $template_description ?? ;
    $this->template_name = $template_name ?? ;
    $this->template_type = $template_type ?? "";
    $this->text_part = $text_part ?? ;
    $this->version = $version ?? ;
    $this->tags = $tags ?? ;
  }
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

  public function __construct(shape(
  ?'address' => __string,
  ?'attributes' => MapOfListOf__string,
  ?'channel_type' => ChannelType,
  ?'demographic' => EndpointDemographic,
  ?'effective_date' => __string,
  ?'endpoint_status' => __string,
  ?'id' => __string,
  ?'location' => EndpointLocation,
  ?'metrics' => MapOf__double,
  ?'opt_out' => __string,
  ?'request_id' => __string,
  ?'user' => EndpointUser,
  ) $s = shape()) {
    $this->address = $address ?? ;
    $this->attributes = $attributes ?? ;
    $this->channel_type = $channel_type ?? "";
    $this->demographic = $demographic ?? ;
    $this->effective_date = $effective_date ?? ;
    $this->endpoint_status = $endpoint_status ?? ;
    $this->id = $id ?? ;
    $this->location = $location ?? ;
    $this->metrics = $metrics ?? ;
    $this->opt_out = $opt_out ?? ;
    $this->request_id = $request_id ?? ;
    $this->user = $user ?? ;
  }
}

class EndpointBatchRequest {
  public ListOfEndpointBatchItem $item;

  public function __construct(shape(
  ?'item' => ListOfEndpointBatchItem,
  ) $s = shape()) {
    $this->item = $item ?? ;
  }
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

  public function __construct(shape(
  ?'app_version' => __string,
  ?'locale' => __string,
  ?'make' => __string,
  ?'model' => __string,
  ?'model_version' => __string,
  ?'platform' => __string,
  ?'platform_version' => __string,
  ?'timezone' => __string,
  ) $s = shape()) {
    $this->app_version = $app_version ?? ;
    $this->locale = $locale ?? ;
    $this->make = $make ?? ;
    $this->model = $model ?? ;
    $this->model_version = $model_version ?? ;
    $this->platform = $platform ?? ;
    $this->platform_version = $platform_version ?? ;
    $this->timezone = $timezone ?? ;
  }
}

class EndpointItemResponse {
  public __string $message;
  public __integer $status_code;

  public function __construct(shape(
  ?'message' => __string,
  ?'status_code' => __integer,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->status_code = $status_code ?? ;
  }
}

class EndpointLocation {
  public __string $city;
  public __string $country;
  public __double $latitude;
  public __double $longitude;
  public __string $postal_code;
  public __string $region;

  public function __construct(shape(
  ?'city' => __string,
  ?'country' => __string,
  ?'latitude' => __double,
  ?'longitude' => __double,
  ?'postal_code' => __string,
  ?'region' => __string,
  ) $s = shape()) {
    $this->city = $city ?? ;
    $this->country = $country ?? ;
    $this->latitude = $latitude ?? ;
    $this->longitude = $longitude ?? ;
    $this->postal_code = $postal_code ?? ;
    $this->region = $region ?? ;
  }
}

class EndpointMessageResult {
  public __string $address;
  public DeliveryStatus $delivery_status;
  public __string $message_id;
  public __integer $status_code;
  public __string $status_message;
  public __string $updated_token;

  public function __construct(shape(
  ?'address' => __string,
  ?'delivery_status' => DeliveryStatus,
  ?'message_id' => __string,
  ?'status_code' => __integer,
  ?'status_message' => __string,
  ?'updated_token' => __string,
  ) $s = shape()) {
    $this->address = $address ?? ;
    $this->delivery_status = $delivery_status ?? "";
    $this->message_id = $message_id ?? ;
    $this->status_code = $status_code ?? ;
    $this->status_message = $status_message ?? ;
    $this->updated_token = $updated_token ?? ;
  }
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

  public function __construct(shape(
  ?'address' => __string,
  ?'attributes' => MapOfListOf__string,
  ?'channel_type' => ChannelType,
  ?'demographic' => EndpointDemographic,
  ?'effective_date' => __string,
  ?'endpoint_status' => __string,
  ?'location' => EndpointLocation,
  ?'metrics' => MapOf__double,
  ?'opt_out' => __string,
  ?'request_id' => __string,
  ?'user' => EndpointUser,
  ) $s = shape()) {
    $this->address = $address ?? ;
    $this->attributes = $attributes ?? ;
    $this->channel_type = $channel_type ?? "";
    $this->demographic = $demographic ?? ;
    $this->effective_date = $effective_date ?? ;
    $this->endpoint_status = $endpoint_status ?? ;
    $this->location = $location ?? ;
    $this->metrics = $metrics ?? ;
    $this->opt_out = $opt_out ?? ;
    $this->request_id = $request_id ?? ;
    $this->user = $user ?? ;
  }
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

  public function __construct(shape(
  ?'address' => __string,
  ?'application_id' => __string,
  ?'attributes' => MapOfListOf__string,
  ?'channel_type' => ChannelType,
  ?'cohort_id' => __string,
  ?'creation_date' => __string,
  ?'demographic' => EndpointDemographic,
  ?'effective_date' => __string,
  ?'endpoint_status' => __string,
  ?'id' => __string,
  ?'location' => EndpointLocation,
  ?'metrics' => MapOf__double,
  ?'opt_out' => __string,
  ?'request_id' => __string,
  ?'user' => EndpointUser,
  ) $s = shape()) {
    $this->address = $address ?? ;
    $this->application_id = $application_id ?? ;
    $this->attributes = $attributes ?? ;
    $this->channel_type = $channel_type ?? "";
    $this->cohort_id = $cohort_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->demographic = $demographic ?? ;
    $this->effective_date = $effective_date ?? ;
    $this->endpoint_status = $endpoint_status ?? ;
    $this->id = $id ?? ;
    $this->location = $location ?? ;
    $this->metrics = $metrics ?? ;
    $this->opt_out = $opt_out ?? ;
    $this->request_id = $request_id ?? ;
    $this->user = $user ?? ;
  }
}

class EndpointSendConfiguration {
  public __string $body_override;
  public MapOf__string $context;
  public __string $raw_content;
  public MapOfListOf__string $substitutions;
  public __string $title_override;

  public function __construct(shape(
  ?'body_override' => __string,
  ?'context' => MapOf__string,
  ?'raw_content' => __string,
  ?'substitutions' => MapOfListOf__string,
  ?'title_override' => __string,
  ) $s = shape()) {
    $this->body_override = $body_override ?? ;
    $this->context = $context ?? ;
    $this->raw_content = $raw_content ?? ;
    $this->substitutions = $substitutions ?? ;
    $this->title_override = $title_override ?? ;
  }
}

class EndpointUser {
  public MapOfListOf__string $user_attributes;
  public __string $user_id;

  public function __construct(shape(
  ?'user_attributes' => MapOfListOf__string,
  ?'user_id' => __string,
  ) $s = shape()) {
    $this->user_attributes = $user_attributes ?? ;
    $this->user_id = $user_id ?? ;
  }
}

class EndpointsResponse {
  public ListOfEndpointResponse $item;

  public function __construct(shape(
  ?'item' => ListOfEndpointResponse,
  ) $s = shape()) {
    $this->item = $item ?? ;
  }
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

  public function __construct(shape(
  ?'app_package_name' => __string,
  ?'app_title' => __string,
  ?'app_version_code' => __string,
  ?'attributes' => MapOf__string,
  ?'client_sdk_version' => __string,
  ?'event_type' => __string,
  ?'metrics' => MapOf__double,
  ?'sdk_name' => __string,
  ?'session' => Session,
  ?'timestamp' => __string,
  ) $s = shape()) {
    $this->app_package_name = $app_package_name ?? ;
    $this->app_title = $app_title ?? ;
    $this->app_version_code = $app_version_code ?? ;
    $this->attributes = $attributes ?? ;
    $this->client_sdk_version = $client_sdk_version ?? ;
    $this->event_type = $event_type ?? ;
    $this->metrics = $metrics ?? ;
    $this->sdk_name = $sdk_name ?? ;
    $this->session = $session ?? null;
    $this->timestamp = $timestamp ?? ;
  }
}

class EventCondition {
  public EventDimensions $dimensions;
  public __string $message_activity;

  public function __construct(shape(
  ?'dimensions' => EventDimensions,
  ?'message_activity' => __string,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? ;
    $this->message_activity = $message_activity ?? ;
  }
}

class EventDimensions {
  public MapOfAttributeDimension $attributes;
  public SetDimension $event_type;
  public MapOfMetricDimension $metrics;

  public function __construct(shape(
  ?'attributes' => MapOfAttributeDimension,
  ?'event_type' => SetDimension,
  ?'metrics' => MapOfMetricDimension,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->event_type = $event_type ?? ;
    $this->metrics = $metrics ?? ;
  }
}

class EventItemResponse {
  public __string $message;
  public __integer $status_code;

  public function __construct(shape(
  ?'message' => __string,
  ?'status_code' => __integer,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->status_code = $status_code ?? ;
  }
}

class EventStream {
  public __string $application_id;
  public __string $destination_stream_arn;
  public __string $external_id;
  public __string $last_modified_date;
  public __string $last_updated_by;
  public __string $role_arn;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'destination_stream_arn' => __string,
  ?'external_id' => __string,
  ?'last_modified_date' => __string,
  ?'last_updated_by' => __string,
  ?'role_arn' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->destination_stream_arn = $destination_stream_arn ?? ;
    $this->external_id = $external_id ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->last_updated_by = $last_updated_by ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class EventsBatch {
  public PublicEndpoint $endpoint;
  public MapOfEvent $events;

  public function __construct(shape(
  ?'endpoint' => PublicEndpoint,
  ?'events' => MapOfEvent,
  ) $s = shape()) {
    $this->endpoint = $endpoint ?? ;
    $this->events = $events ?? ;
  }
}

class EventsRequest {
  public MapOfEventsBatch $batch_item;

  public function __construct(shape(
  ?'batch_item' => MapOfEventsBatch,
  ) $s = shape()) {
    $this->batch_item = $batch_item ?? ;
  }
}

class EventsResponse {
  public MapOfItemResponse $results;

  public function __construct(shape(
  ?'results' => MapOfItemResponse,
  ) $s = shape()) {
    $this->results = $results ?? ;
  }
}

class ExportJobRequest {
  public __string $role_arn;
  public __string $s_3_url_prefix;
  public __string $segment_id;
  public __integer $segment_version;

  public function __construct(shape(
  ?'role_arn' => __string,
  ?'s_3_url_prefix' => __string,
  ?'segment_id' => __string,
  ?'segment_version' => __integer,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? ;
    $this->s_3_url_prefix = $s_3_url_prefix ?? ;
    $this->segment_id = $segment_id ?? ;
    $this->segment_version = $segment_version ?? ;
  }
}

class ExportJobResource {
  public __string $role_arn;
  public __string $s_3_url_prefix;
  public __string $segment_id;
  public __integer $segment_version;

  public function __construct(shape(
  ?'role_arn' => __string,
  ?'s_3_url_prefix' => __string,
  ?'segment_id' => __string,
  ?'segment_version' => __integer,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? ;
    $this->s_3_url_prefix = $s_3_url_prefix ?? ;
    $this->segment_id = $segment_id ?? ;
    $this->segment_version = $segment_version ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'completed_pieces' => __integer,
  ?'completion_date' => __string,
  ?'creation_date' => __string,
  ?'definition' => ExportJobResource,
  ?'failed_pieces' => __integer,
  ?'failures' => ListOf__string,
  ?'id' => __string,
  ?'job_status' => JobStatus,
  ?'total_failures' => __integer,
  ?'total_pieces' => __integer,
  ?'total_processed' => __integer,
  ?'type' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->completed_pieces = $completed_pieces ?? ;
    $this->completion_date = $completion_date ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->definition = $definition ?? ;
    $this->failed_pieces = $failed_pieces ?? ;
    $this->failures = $failures ?? ;
    $this->id = $id ?? ;
    $this->job_status = $job_status ?? "";
    $this->total_failures = $total_failures ?? ;
    $this->total_pieces = $total_pieces ?? ;
    $this->total_processed = $total_processed ?? ;
    $this->type = $type ?? "";
  }
}

class ExportJobsResponse {
  public ListOfExportJobResponse $item;
  public __string $next_token;

  public function __construct(shape(
  ?'item' => ListOfExportJobResponse,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type FilterType = string;

class ForbiddenException {
  public __string $message;
  public __string $request_id;

  public function __construct(shape(
  ?'message' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->request_id = $request_id ?? ;
  }
}

type Format = string;

type Frequency = string;

class GCMChannelRequest {
  public __string $api_key;
  public __boolean $enabled;

  public function __construct(shape(
  ?'api_key' => __string,
  ?'enabled' => __boolean,
  ) $s = shape()) {
    $this->api_key = $api_key ?? ;
    $this->enabled = $enabled ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'credential' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'platform' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->credential = $credential ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->platform = $platform ?? ;
    $this->version = $version ?? ;
  }
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

  public function __construct(shape(
  ?'action' => Action,
  ?'body' => __string,
  ?'collapse_key' => __string,
  ?'data' => MapOf__string,
  ?'icon_reference' => __string,
  ?'image_icon_url' => __string,
  ?'image_url' => __string,
  ?'priority' => __string,
  ?'raw_content' => __string,
  ?'restricted_package_name' => __string,
  ?'silent_push' => __boolean,
  ?'small_image_icon_url' => __string,
  ?'sound' => __string,
  ?'substitutions' => MapOfListOf__string,
  ?'time_to_live' => __integer,
  ?'title' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->body = $body ?? ;
    $this->collapse_key = $collapse_key ?? ;
    $this->data = $data ?? ;
    $this->icon_reference = $icon_reference ?? ;
    $this->image_icon_url = $image_icon_url ?? ;
    $this->image_url = $image_url ?? ;
    $this->priority = $priority ?? ;
    $this->raw_content = $raw_content ?? ;
    $this->restricted_package_name = $restricted_package_name ?? ;
    $this->silent_push = $silent_push ?? ;
    $this->small_image_icon_url = $small_image_icon_url ?? ;
    $this->sound = $sound ?? ;
    $this->substitutions = $substitutions ?? ;
    $this->time_to_live = $time_to_live ?? ;
    $this->title = $title ?? ;
    $this->url = $url ?? ;
  }
}

class GPSCoordinates {
  public __double $latitude;
  public __double $longitude;

  public function __construct(shape(
  ?'latitude' => __double,
  ?'longitude' => __double,
  ) $s = shape()) {
    $this->latitude = $latitude ?? ;
    $this->longitude = $longitude ?? ;
  }
}

class GPSPointDimension {
  public GPSCoordinates $coordinates;
  public __double $range_in_kilometers;

  public function __construct(shape(
  ?'coordinates' => GPSCoordinates,
  ?'range_in_kilometers' => __double,
  ) $s = shape()) {
    $this->coordinates = $coordinates ?? ;
    $this->range_in_kilometers = $range_in_kilometers ?? ;
  }
}

class GetAdmChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetAdmChannelResponse {
  public ADMChannelResponse $adm_channel_response;

  public function __construct(shape(
  ?'adm_channel_response' => ADMChannelResponse,
  ) $s = shape()) {
    $this->adm_channel_response = $adm_channel_response ?? null;
  }
}

class GetApnsChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetApnsChannelResponse {
  public APNSChannelResponse $apns_channel_response;

  public function __construct(shape(
  ?'apns_channel_response' => APNSChannelResponse,
  ) $s = shape()) {
    $this->apns_channel_response = $apns_channel_response ?? null;
  }
}

class GetApnsSandboxChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetApnsSandboxChannelResponse {
  public APNSSandboxChannelResponse $apns_sandbox_channel_response;

  public function __construct(shape(
  ?'apns_sandbox_channel_response' => APNSSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_sandbox_channel_response = $apns_sandbox_channel_response ?? null;
  }
}

class GetApnsVoipChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetApnsVoipChannelResponse {
  public APNSVoipChannelResponse $apns_voip_channel_response;

  public function __construct(shape(
  ?'apns_voip_channel_response' => APNSVoipChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_channel_response = $apns_voip_channel_response ?? null;
  }
}

class GetApnsVoipSandboxChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetApnsVoipSandboxChannelResponse {
  public APNSVoipSandboxChannelResponse $apns_voip_sandbox_channel_response;

  public function __construct(shape(
  ?'apns_voip_sandbox_channel_response' => APNSVoipSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_sandbox_channel_response = $apns_voip_sandbox_channel_response ?? null;
  }
}

class GetAppRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetAppResponse {
  public ApplicationResponse $application_response;

  public function __construct(shape(
  ?'application_response' => ApplicationResponse,
  ) $s = shape()) {
    $this->application_response = $application_response ?? null;
  }
}

class GetApplicationDateRangeKpiRequest {
  public __string $application_id;
  public __timestampIso8601 $end_time;
  public __string $kpi_name;
  public __string $next_token;
  public __string $page_size;
  public __timestampIso8601 $start_time;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'end_time' => __timestampIso8601,
  ?'kpi_name' => __string,
  ?'next_token' => __string,
  ?'page_size' => __string,
  ?'start_time' => __timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->end_time = $end_time ?? ;
    $this->kpi_name = $kpi_name ?? ;
    $this->next_token = $next_token ?? ;
    $this->page_size = $page_size ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class GetApplicationDateRangeKpiResponse {
  public ApplicationDateRangeKpiResponse $application_date_range_kpi_response;

  public function __construct(shape(
  ?'application_date_range_kpi_response' => ApplicationDateRangeKpiResponse,
  ) $s = shape()) {
    $this->application_date_range_kpi_response = $application_date_range_kpi_response ?? null;
  }
}

class GetApplicationSettingsRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetApplicationSettingsResponse {
  public ApplicationSettingsResource $application_settings_resource;

  public function __construct(shape(
  ?'application_settings_resource' => ApplicationSettingsResource,
  ) $s = shape()) {
    $this->application_settings_resource = $application_settings_resource ?? null;
  }
}

class GetAppsRequest {
  public __string $page_size;
  public __string $token;

  public function __construct(shape(
  ?'page_size' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->page_size = $page_size ?? ;
    $this->token = $token ?? ;
  }
}

class GetAppsResponse {
  public ApplicationsResponse $applications_response;

  public function __construct(shape(
  ?'applications_response' => ApplicationsResponse,
  ) $s = shape()) {
    $this->applications_response = $applications_response ?? null;
  }
}

class GetBaiduChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetBaiduChannelResponse {
  public BaiduChannelResponse $baidu_channel_response;

  public function __construct(shape(
  ?'baidu_channel_response' => BaiduChannelResponse,
  ) $s = shape()) {
    $this->baidu_channel_response = $baidu_channel_response ?? null;
  }
}

class GetCampaignActivitiesRequest {
  public __string $application_id;
  public __string $campaign_id;
  public __string $page_size;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_id' => __string,
  ?'page_size' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_id = $campaign_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->token = $token ?? ;
  }
}

class GetCampaignActivitiesResponse {
  public ActivitiesResponse $activities_response;

  public function __construct(shape(
  ?'activities_response' => ActivitiesResponse,
  ) $s = shape()) {
    $this->activities_response = $activities_response ?? null;
  }
}

class GetCampaignDateRangeKpiRequest {
  public __string $application_id;
  public __string $campaign_id;
  public __timestampIso8601 $end_time;
  public __string $kpi_name;
  public __string $next_token;
  public __string $page_size;
  public __timestampIso8601 $start_time;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_id' => __string,
  ?'end_time' => __timestampIso8601,
  ?'kpi_name' => __string,
  ?'next_token' => __string,
  ?'page_size' => __string,
  ?'start_time' => __timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_id = $campaign_id ?? ;
    $this->end_time = $end_time ?? ;
    $this->kpi_name = $kpi_name ?? ;
    $this->next_token = $next_token ?? ;
    $this->page_size = $page_size ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class GetCampaignDateRangeKpiResponse {
  public CampaignDateRangeKpiResponse $campaign_date_range_kpi_response;

  public function __construct(shape(
  ?'campaign_date_range_kpi_response' => CampaignDateRangeKpiResponse,
  ) $s = shape()) {
    $this->campaign_date_range_kpi_response = $campaign_date_range_kpi_response ?? null;
  }
}

class GetCampaignRequest {
  public __string $application_id;
  public __string $campaign_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_id = $campaign_id ?? ;
  }
}

class GetCampaignResponse {
  public CampaignResponse $campaign_response;

  public function __construct(shape(
  ?'campaign_response' => CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $campaign_response ?? null;
  }
}

class GetCampaignVersionRequest {
  public __string $application_id;
  public __string $campaign_id;
  public __string $version;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_id' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_id = $campaign_id ?? ;
    $this->version = $version ?? ;
  }
}

class GetCampaignVersionResponse {
  public CampaignResponse $campaign_response;

  public function __construct(shape(
  ?'campaign_response' => CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $campaign_response ?? null;
  }
}

class GetCampaignVersionsRequest {
  public __string $application_id;
  public __string $campaign_id;
  public __string $page_size;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_id' => __string,
  ?'page_size' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_id = $campaign_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->token = $token ?? ;
  }
}

class GetCampaignVersionsResponse {
  public CampaignsResponse $campaigns_response;

  public function __construct(shape(
  ?'campaigns_response' => CampaignsResponse,
  ) $s = shape()) {
    $this->campaigns_response = $campaigns_response ?? null;
  }
}

class GetCampaignsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'page_size' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->token = $token ?? ;
  }
}

class GetCampaignsResponse {
  public CampaignsResponse $campaigns_response;

  public function __construct(shape(
  ?'campaigns_response' => CampaignsResponse,
  ) $s = shape()) {
    $this->campaigns_response = $campaigns_response ?? null;
  }
}

class GetChannelsRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetChannelsResponse {
  public ChannelsResponse $channels_response;

  public function __construct(shape(
  ?'channels_response' => ChannelsResponse,
  ) $s = shape()) {
    $this->channels_response = $channels_response ?? null;
  }
}

class GetEmailChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetEmailChannelResponse {
  public EmailChannelResponse $email_channel_response;

  public function __construct(shape(
  ?'email_channel_response' => EmailChannelResponse,
  ) $s = shape()) {
    $this->email_channel_response = $email_channel_response ?? null;
  }
}

class GetEmailTemplateRequest {
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class GetEmailTemplateResponse {
  public EmailTemplateResponse $email_template_response;

  public function __construct(shape(
  ?'email_template_response' => EmailTemplateResponse,
  ) $s = shape()) {
    $this->email_template_response = $email_template_response ?? null;
  }
}

class GetEndpointRequest {
  public __string $application_id;
  public __string $endpoint_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'endpoint_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->endpoint_id = $endpoint_id ?? ;
  }
}

class GetEndpointResponse {
  public EndpointResponse $endpoint_response;

  public function __construct(shape(
  ?'endpoint_response' => EndpointResponse,
  ) $s = shape()) {
    $this->endpoint_response = $endpoint_response ?? null;
  }
}

class GetEventStreamRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetEventStreamResponse {
  public EventStream $event_stream;

  public function __construct(shape(
  ?'event_stream' => EventStream,
  ) $s = shape()) {
    $this->event_stream = $event_stream ?? null;
  }
}

class GetExportJobRequest {
  public __string $application_id;
  public __string $job_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'job_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class GetExportJobResponse {
  public ExportJobResponse $export_job_response;

  public function __construct(shape(
  ?'export_job_response' => ExportJobResponse,
  ) $s = shape()) {
    $this->export_job_response = $export_job_response ?? null;
  }
}

class GetExportJobsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'page_size' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->token = $token ?? ;
  }
}

class GetExportJobsResponse {
  public ExportJobsResponse $export_jobs_response;

  public function __construct(shape(
  ?'export_jobs_response' => ExportJobsResponse,
  ) $s = shape()) {
    $this->export_jobs_response = $export_jobs_response ?? null;
  }
}

class GetGcmChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetGcmChannelResponse {
  public GCMChannelResponse $gcm_channel_response;

  public function __construct(shape(
  ?'gcm_channel_response' => GCMChannelResponse,
  ) $s = shape()) {
    $this->gcm_channel_response = $gcm_channel_response ?? null;
  }
}

class GetImportJobRequest {
  public __string $application_id;
  public __string $job_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'job_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class GetImportJobResponse {
  public ImportJobResponse $import_job_response;

  public function __construct(shape(
  ?'import_job_response' => ImportJobResponse,
  ) $s = shape()) {
    $this->import_job_response = $import_job_response ?? null;
  }
}

class GetImportJobsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'page_size' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->token = $token ?? ;
  }
}

class GetImportJobsResponse {
  public ImportJobsResponse $import_jobs_response;

  public function __construct(shape(
  ?'import_jobs_response' => ImportJobsResponse,
  ) $s = shape()) {
    $this->import_jobs_response = $import_jobs_response ?? null;
  }
}

class GetJourneyDateRangeKpiRequest {
  public __string $application_id;
  public __timestampIso8601 $end_time;
  public __string $journey_id;
  public __string $kpi_name;
  public __string $next_token;
  public __string $page_size;
  public __timestampIso8601 $start_time;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'end_time' => __timestampIso8601,
  ?'journey_id' => __string,
  ?'kpi_name' => __string,
  ?'next_token' => __string,
  ?'page_size' => __string,
  ?'start_time' => __timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->end_time = $end_time ?? ;
    $this->journey_id = $journey_id ?? ;
    $this->kpi_name = $kpi_name ?? ;
    $this->next_token = $next_token ?? ;
    $this->page_size = $page_size ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class GetJourneyDateRangeKpiResponse {
  public JourneyDateRangeKpiResponse $journey_date_range_kpi_response;

  public function __construct(shape(
  ?'journey_date_range_kpi_response' => JourneyDateRangeKpiResponse,
  ) $s = shape()) {
    $this->journey_date_range_kpi_response = $journey_date_range_kpi_response ?? null;
  }
}

class GetJourneyExecutionActivityMetricsRequest {
  public __string $application_id;
  public __string $journey_activity_id;
  public __string $journey_id;
  public __string $next_token;
  public __string $page_size;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'journey_activity_id' => __string,
  ?'journey_id' => __string,
  ?'next_token' => __string,
  ?'page_size' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->journey_activity_id = $journey_activity_id ?? ;
    $this->journey_id = $journey_id ?? ;
    $this->next_token = $next_token ?? ;
    $this->page_size = $page_size ?? ;
  }
}

class GetJourneyExecutionActivityMetricsResponse {
  public JourneyExecutionActivityMetricsResponse $journey_execution_activity_metrics_response;

  public function __construct(shape(
  ?'journey_execution_activity_metrics_response' => JourneyExecutionActivityMetricsResponse,
  ) $s = shape()) {
    $this->journey_execution_activity_metrics_response = $journey_execution_activity_metrics_response ?? null;
  }
}

class GetJourneyExecutionMetricsRequest {
  public __string $application_id;
  public __string $journey_id;
  public __string $next_token;
  public __string $page_size;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'journey_id' => __string,
  ?'next_token' => __string,
  ?'page_size' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->journey_id = $journey_id ?? ;
    $this->next_token = $next_token ?? ;
    $this->page_size = $page_size ?? ;
  }
}

class GetJourneyExecutionMetricsResponse {
  public JourneyExecutionMetricsResponse $journey_execution_metrics_response;

  public function __construct(shape(
  ?'journey_execution_metrics_response' => JourneyExecutionMetricsResponse,
  ) $s = shape()) {
    $this->journey_execution_metrics_response = $journey_execution_metrics_response ?? null;
  }
}

class GetJourneyRequest {
  public __string $application_id;
  public __string $journey_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'journey_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->journey_id = $journey_id ?? ;
  }
}

class GetJourneyResponse {
  public JourneyResponse $journey_response;

  public function __construct(shape(
  ?'journey_response' => JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $journey_response ?? null;
  }
}

class GetPushTemplateRequest {
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class GetPushTemplateResponse {
  public PushNotificationTemplateResponse $push_notification_template_response;

  public function __construct(shape(
  ?'push_notification_template_response' => PushNotificationTemplateResponse,
  ) $s = shape()) {
    $this->push_notification_template_response = $push_notification_template_response ?? null;
  }
}

class GetRecommenderConfigurationRequest {
  public __string $recommender_id;

  public function __construct(shape(
  ?'recommender_id' => __string,
  ) $s = shape()) {
    $this->recommender_id = $recommender_id ?? ;
  }
}

class GetRecommenderConfigurationResponse {
  public RecommenderConfigurationResponse $recommender_configuration_response;

  public function __construct(shape(
  ?'recommender_configuration_response' => RecommenderConfigurationResponse,
  ) $s = shape()) {
    $this->recommender_configuration_response = $recommender_configuration_response ?? null;
  }
}

class GetRecommenderConfigurationsRequest {
  public __string $page_size;
  public __string $token;

  public function __construct(shape(
  ?'page_size' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->page_size = $page_size ?? ;
    $this->token = $token ?? ;
  }
}

class GetRecommenderConfigurationsResponse {
  public ListRecommenderConfigurationsResponse $list_recommender_configurations_response;

  public function __construct(shape(
  ?'list_recommender_configurations_response' => ListRecommenderConfigurationsResponse,
  ) $s = shape()) {
    $this->list_recommender_configurations_response = $list_recommender_configurations_response ?? null;
  }
}

class GetSegmentExportJobsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $segment_id;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'page_size' => __string,
  ?'segment_id' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->segment_id = $segment_id ?? ;
    $this->token = $token ?? ;
  }
}

class GetSegmentExportJobsResponse {
  public ExportJobsResponse $export_jobs_response;

  public function __construct(shape(
  ?'export_jobs_response' => ExportJobsResponse,
  ) $s = shape()) {
    $this->export_jobs_response = $export_jobs_response ?? null;
  }
}

class GetSegmentImportJobsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $segment_id;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'page_size' => __string,
  ?'segment_id' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->segment_id = $segment_id ?? ;
    $this->token = $token ?? ;
  }
}

class GetSegmentImportJobsResponse {
  public ImportJobsResponse $import_jobs_response;

  public function __construct(shape(
  ?'import_jobs_response' => ImportJobsResponse,
  ) $s = shape()) {
    $this->import_jobs_response = $import_jobs_response ?? null;
  }
}

class GetSegmentRequest {
  public __string $application_id;
  public __string $segment_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'segment_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->segment_id = $segment_id ?? ;
  }
}

class GetSegmentResponse {
  public SegmentResponse $segment_response;

  public function __construct(shape(
  ?'segment_response' => SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $segment_response ?? null;
  }
}

class GetSegmentVersionRequest {
  public __string $application_id;
  public __string $segment_id;
  public __string $version;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'segment_id' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->segment_id = $segment_id ?? ;
    $this->version = $version ?? ;
  }
}

class GetSegmentVersionResponse {
  public SegmentResponse $segment_response;

  public function __construct(shape(
  ?'segment_response' => SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $segment_response ?? null;
  }
}

class GetSegmentVersionsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $segment_id;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'page_size' => __string,
  ?'segment_id' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->segment_id = $segment_id ?? ;
    $this->token = $token ?? ;
  }
}

class GetSegmentVersionsResponse {
  public SegmentsResponse $segments_response;

  public function __construct(shape(
  ?'segments_response' => SegmentsResponse,
  ) $s = shape()) {
    $this->segments_response = $segments_response ?? null;
  }
}

class GetSegmentsRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'page_size' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->token = $token ?? ;
  }
}

class GetSegmentsResponse {
  public SegmentsResponse $segments_response;

  public function __construct(shape(
  ?'segments_response' => SegmentsResponse,
  ) $s = shape()) {
    $this->segments_response = $segments_response ?? null;
  }
}

class GetSmsChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetSmsChannelResponse {
  public SMSChannelResponse $sms_channel_response;

  public function __construct(shape(
  ?'sms_channel_response' => SMSChannelResponse,
  ) $s = shape()) {
    $this->sms_channel_response = $sms_channel_response ?? null;
  }
}

class GetSmsTemplateRequest {
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class GetSmsTemplateResponse {
  public SMSTemplateResponse $sms_template_response;

  public function __construct(shape(
  ?'sms_template_response' => SMSTemplateResponse,
  ) $s = shape()) {
    $this->sms_template_response = $sms_template_response ?? null;
  }
}

class GetUserEndpointsRequest {
  public __string $application_id;
  public __string $user_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'user_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->user_id = $user_id ?? ;
  }
}

class GetUserEndpointsResponse {
  public EndpointsResponse $endpoints_response;

  public function __construct(shape(
  ?'endpoints_response' => EndpointsResponse,
  ) $s = shape()) {
    $this->endpoints_response = $endpoints_response ?? null;
  }
}

class GetVoiceChannelRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class GetVoiceChannelResponse {
  public VoiceChannelResponse $voice_channel_response;

  public function __construct(shape(
  ?'voice_channel_response' => VoiceChannelResponse,
  ) $s = shape()) {
    $this->voice_channel_response = $voice_channel_response ?? null;
  }
}

class GetVoiceTemplateRequest {
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class GetVoiceTemplateResponse {
  public VoiceTemplateResponse $voice_template_response;

  public function __construct(shape(
  ?'voice_template_response' => VoiceTemplateResponse,
  ) $s = shape()) {
    $this->voice_template_response = $voice_template_response ?? null;
  }
}

class HoldoutActivity {
  public __string $next_activity;
  public __integer $percentage;

  public function __construct(shape(
  ?'next_activity' => __string,
  ?'percentage' => __integer,
  ) $s = shape()) {
    $this->next_activity = $next_activity ?? ;
    $this->percentage = $percentage ?? ;
  }
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

  public function __construct(shape(
  ?'define_segment' => __boolean,
  ?'external_id' => __string,
  ?'format' => Format,
  ?'register_endpoints' => __boolean,
  ?'role_arn' => __string,
  ?'s_3_url' => __string,
  ?'segment_id' => __string,
  ?'segment_name' => __string,
  ) $s = shape()) {
    $this->define_segment = $define_segment ?? ;
    $this->external_id = $external_id ?? ;
    $this->format = $format ?? "";
    $this->register_endpoints = $register_endpoints ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->s_3_url = $s_3_url ?? ;
    $this->segment_id = $segment_id ?? ;
    $this->segment_name = $segment_name ?? ;
  }
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

  public function __construct(shape(
  ?'define_segment' => __boolean,
  ?'external_id' => __string,
  ?'format' => Format,
  ?'register_endpoints' => __boolean,
  ?'role_arn' => __string,
  ?'s_3_url' => __string,
  ?'segment_id' => __string,
  ?'segment_name' => __string,
  ) $s = shape()) {
    $this->define_segment = $define_segment ?? ;
    $this->external_id = $external_id ?? ;
    $this->format = $format ?? "";
    $this->register_endpoints = $register_endpoints ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->s_3_url = $s_3_url ?? ;
    $this->segment_id = $segment_id ?? ;
    $this->segment_name = $segment_name ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'completed_pieces' => __integer,
  ?'completion_date' => __string,
  ?'creation_date' => __string,
  ?'definition' => ImportJobResource,
  ?'failed_pieces' => __integer,
  ?'failures' => ListOf__string,
  ?'id' => __string,
  ?'job_status' => JobStatus,
  ?'total_failures' => __integer,
  ?'total_pieces' => __integer,
  ?'total_processed' => __integer,
  ?'type' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->completed_pieces = $completed_pieces ?? ;
    $this->completion_date = $completion_date ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->definition = $definition ?? ;
    $this->failed_pieces = $failed_pieces ?? ;
    $this->failures = $failures ?? ;
    $this->id = $id ?? ;
    $this->job_status = $job_status ?? "";
    $this->total_failures = $total_failures ?? ;
    $this->total_pieces = $total_pieces ?? ;
    $this->total_processed = $total_processed ?? ;
    $this->type = $type ?? "";
  }
}

class ImportJobsResponse {
  public ListOfImportJobResponse $item;
  public __string $next_token;

  public function __construct(shape(
  ?'item' => ListOfImportJobResponse,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type Include = string;

class InternalServerErrorException {
  public __string $message;
  public __string $request_id;

  public function __construct(shape(
  ?'message' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->request_id = $request_id ?? ;
  }
}

class ItemResponse {
  public EndpointItemResponse $endpoint_item_response;
  public MapOfEventItemResponse $events_item_response;

  public function __construct(shape(
  ?'endpoint_item_response' => EndpointItemResponse,
  ?'events_item_response' => MapOfEventItemResponse,
  ) $s = shape()) {
    $this->endpoint_item_response = $endpoint_item_response ?? null;
    $this->events_item_response = $events_item_response ?? ;
  }
}

type JobStatus = string;

class JourneyDateRangeKpiResponse {
  public __string $application_id;
  public __timestampIso8601 $end_time;
  public __string $journey_id;
  public __string $kpi_name;
  public BaseKpiResult $kpi_result;
  public __string $next_token;
  public __timestampIso8601 $start_time;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'end_time' => __timestampIso8601,
  ?'journey_id' => __string,
  ?'kpi_name' => __string,
  ?'kpi_result' => BaseKpiResult,
  ?'next_token' => __string,
  ?'start_time' => __timestampIso8601,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->end_time = $end_time ?? ;
    $this->journey_id = $journey_id ?? ;
    $this->kpi_name = $kpi_name ?? ;
    $this->kpi_result = $kpi_result ?? ;
    $this->next_token = $next_token ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class JourneyEmailMessage {
  public __string $from_address;

  public function __construct(shape(
  ?'from_address' => __string,
  ) $s = shape()) {
    $this->from_address = $from_address ?? ;
  }
}

class JourneyExecutionActivityMetricsResponse {
  public __string $activity_type;
  public __string $application_id;
  public __string $journey_activity_id;
  public __string $journey_id;
  public __string $last_evaluated_time;
  public MapOf__string $metrics;

  public function __construct(shape(
  ?'activity_type' => __string,
  ?'application_id' => __string,
  ?'journey_activity_id' => __string,
  ?'journey_id' => __string,
  ?'last_evaluated_time' => __string,
  ?'metrics' => MapOf__string,
  ) $s = shape()) {
    $this->activity_type = $activity_type ?? ;
    $this->application_id = $application_id ?? ;
    $this->journey_activity_id = $journey_activity_id ?? ;
    $this->journey_id = $journey_id ?? ;
    $this->last_evaluated_time = $last_evaluated_time ?? ;
    $this->metrics = $metrics ?? ;
  }
}

class JourneyExecutionMetricsResponse {
  public __string $application_id;
  public __string $journey_id;
  public __string $last_evaluated_time;
  public MapOf__string $metrics;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'journey_id' => __string,
  ?'last_evaluated_time' => __string,
  ?'metrics' => MapOf__string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->journey_id = $journey_id ?? ;
    $this->last_evaluated_time = $last_evaluated_time ?? ;
    $this->metrics = $metrics ?? ;
  }
}

class JourneyLimits {
  public __integer $daily_cap;
  public __integer $endpoint_reentry_cap;
  public __integer $messages_per_second;

  public function __construct(shape(
  ?'daily_cap' => __integer,
  ?'endpoint_reentry_cap' => __integer,
  ?'messages_per_second' => __integer,
  ) $s = shape()) {
    $this->daily_cap = $daily_cap ?? ;
    $this->endpoint_reentry_cap = $endpoint_reentry_cap ?? ;
    $this->messages_per_second = $messages_per_second ?? ;
  }
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

  public function __construct(shape(
  ?'activities' => MapOfActivity,
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'id' => __string,
  ?'last_modified_date' => __string,
  ?'limits' => JourneyLimits,
  ?'local_time' => __boolean,
  ?'name' => __string,
  ?'quiet_time' => QuietTime,
  ?'refresh_frequency' => __string,
  ?'schedule' => JourneySchedule,
  ?'start_activity' => __string,
  ?'start_condition' => StartCondition,
  ?'state' => State,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->activities = $activities ?? ;
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->id = $id ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->limits = $limits ?? ;
    $this->local_time = $local_time ?? ;
    $this->name = $name ?? ;
    $this->quiet_time = $quiet_time ?? null;
    $this->refresh_frequency = $refresh_frequency ?? ;
    $this->schedule = $schedule ?? null;
    $this->start_activity = $start_activity ?? ;
    $this->start_condition = $start_condition ?? null;
    $this->state = $state ?? "";
    $this->tags = $tags ?? ;
  }
}

class JourneySchedule {
  public __timestampIso8601 $end_time;
  public __timestampIso8601 $start_time;
  public __string $timezone;

  public function __construct(shape(
  ?'end_time' => __timestampIso8601,
  ?'start_time' => __timestampIso8601,
  ?'timezone' => __string,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->start_time = $start_time ?? ;
    $this->timezone = $timezone ?? ;
  }
}

class JourneyStateRequest {
  public State $state;

  public function __construct(shape(
  ?'state' => State,
  ) $s = shape()) {
    $this->state = $state ?? "";
  }
}

class JourneysResponse {
  public ListOfJourneyResponse $item;
  public __string $next_token;

  public function __construct(shape(
  ?'item' => ListOfJourneyResponse,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListJourneysRequest {
  public __string $application_id;
  public __string $page_size;
  public __string $token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'page_size' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->page_size = $page_size ?? ;
    $this->token = $token ?? ;
  }
}

class ListJourneysResponse {
  public JourneysResponse $journeys_response;

  public function __construct(shape(
  ?'journeys_response' => JourneysResponse,
  ) $s = shape()) {
    $this->journeys_response = $journeys_response ?? null;
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
  public ListOfRecommenderConfigurationResponse $item;
  public __string $next_token;

  public function __construct(shape(
  ?'item' => ListOfRecommenderConfigurationResponse,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListTagsForResourceRequest {
  public __string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public TagsModel $tags_model;

  public function __construct(shape(
  ?'tags_model' => TagsModel,
  ) $s = shape()) {
    $this->tags_model = $tags_model ?? null;
  }
}

class ListTemplateVersionsRequest {
  public __string $next_token;
  public __string $page_size;
  public __string $template_name;
  public __string $template_type;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'page_size' => __string,
  ?'template_name' => __string,
  ?'template_type' => __string,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->page_size = $page_size ?? ;
    $this->template_name = $template_name ?? ;
    $this->template_type = $template_type ?? "";
  }
}

class ListTemplateVersionsResponse {
  public TemplateVersionsResponse $template_versions_response;

  public function __construct(shape(
  ?'template_versions_response' => TemplateVersionsResponse,
  ) $s = shape()) {
    $this->template_versions_response = $template_versions_response ?? null;
  }
}

class ListTemplatesRequest {
  public __string $next_token;
  public __string $page_size;
  public __string $prefix;
  public __string $template_type;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'page_size' => __string,
  ?'prefix' => __string,
  ?'template_type' => __string,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->page_size = $page_size ?? ;
    $this->prefix = $prefix ?? ;
    $this->template_type = $template_type ?? "";
  }
}

class ListTemplatesResponse {
  public TemplatesResponse $templates_response;

  public function __construct(shape(
  ?'templates_response' => TemplatesResponse,
  ) $s = shape()) {
    $this->templates_response = $templates_response ?? null;
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

  public function __construct(shape(
  ?'action' => Action,
  ?'body' => __string,
  ?'image_icon_url' => __string,
  ?'image_small_icon_url' => __string,
  ?'image_url' => __string,
  ?'json_body' => __string,
  ?'media_url' => __string,
  ?'raw_content' => __string,
  ?'silent_push' => __boolean,
  ?'time_to_live' => __integer,
  ?'title' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->body = $body ?? ;
    $this->image_icon_url = $image_icon_url ?? ;
    $this->image_small_icon_url = $image_small_icon_url ?? ;
    $this->image_url = $image_url ?? ;
    $this->json_body = $json_body ?? ;
    $this->media_url = $media_url ?? ;
    $this->raw_content = $raw_content ?? ;
    $this->silent_push = $silent_push ?? ;
    $this->time_to_live = $time_to_live ?? ;
    $this->title = $title ?? ;
    $this->url = $url ?? ;
  }
}

class MessageBody {
  public __string $message;
  public __string $request_id;

  public function __construct(shape(
  ?'message' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->request_id = $request_id ?? ;
  }
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

  public function __construct(shape(
  ?'adm_message' => Message,
  ?'apns_message' => Message,
  ?'baidu_message' => Message,
  ?'custom_message' => CampaignCustomMessage,
  ?'default_message' => Message,
  ?'email_message' => CampaignEmailMessage,
  ?'gcm_message' => Message,
  ?'sms_message' => CampaignSmsMessage,
  ) $s = shape()) {
    $this->adm_message = $adm_message ?? null;
    $this->apns_message = $apns_message ?? null;
    $this->baidu_message = $baidu_message ?? null;
    $this->custom_message = $custom_message ?? ;
    $this->default_message = $default_message ?? null;
    $this->email_message = $email_message ?? null;
    $this->gcm_message = $gcm_message ?? null;
    $this->sms_message = $sms_message ?? null;
  }
}

class MessageRequest {
  public MapOfAddressConfiguration $addresses;
  public MapOf__string $context;
  public MapOfEndpointSendConfiguration $endpoints;
  public DirectMessageConfiguration $message_configuration;
  public TemplateConfiguration $template_configuration;
  public __string $trace_id;

  public function __construct(shape(
  ?'addresses' => MapOfAddressConfiguration,
  ?'context' => MapOf__string,
  ?'endpoints' => MapOfEndpointSendConfiguration,
  ?'message_configuration' => DirectMessageConfiguration,
  ?'template_configuration' => TemplateConfiguration,
  ?'trace_id' => __string,
  ) $s = shape()) {
    $this->addresses = $addresses ?? ;
    $this->context = $context ?? ;
    $this->endpoints = $endpoints ?? ;
    $this->message_configuration = $message_configuration ?? null;
    $this->template_configuration = $template_configuration ?? null;
    $this->trace_id = $trace_id ?? ;
  }
}

class MessageResponse {
  public __string $application_id;
  public MapOfEndpointMessageResult $endpoint_result;
  public __string $request_id;
  public MapOfMessageResult $result;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'endpoint_result' => MapOfEndpointMessageResult,
  ?'request_id' => __string,
  ?'result' => MapOfMessageResult,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->endpoint_result = $endpoint_result ?? ;
    $this->request_id = $request_id ?? ;
    $this->result = $result ?? ;
  }
}

class MessageResult {
  public DeliveryStatus $delivery_status;
  public __string $message_id;
  public __integer $status_code;
  public __string $status_message;
  public __string $updated_token;

  public function __construct(shape(
  ?'delivery_status' => DeliveryStatus,
  ?'message_id' => __string,
  ?'status_code' => __integer,
  ?'status_message' => __string,
  ?'updated_token' => __string,
  ) $s = shape()) {
    $this->delivery_status = $delivery_status ?? "";
    $this->message_id = $message_id ?? ;
    $this->status_code = $status_code ?? ;
    $this->status_message = $status_message ?? ;
    $this->updated_token = $updated_token ?? ;
  }
}

type MessageType = string;

class MethodNotAllowedException {
  public __string $message;
  public __string $request_id;

  public function __construct(shape(
  ?'message' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->request_id = $request_id ?? ;
  }
}

class MetricDimension {
  public __string $comparison_operator;
  public __double $value;

  public function __construct(shape(
  ?'comparison_operator' => __string,
  ?'value' => __double,
  ) $s = shape()) {
    $this->comparison_operator = $comparison_operator ?? ;
    $this->value = $value ?? ;
  }
}

type Mode = string;

class MultiConditionalBranch {
  public SimpleCondition $condition;
  public __string $next_activity;

  public function __construct(shape(
  ?'condition' => SimpleCondition,
  ?'next_activity' => __string,
  ) $s = shape()) {
    $this->condition = $condition ?? null;
    $this->next_activity = $next_activity ?? ;
  }
}

class MultiConditionalSplitActivity {
  public ListOfMultiConditionalBranch $branches;
  public __string $default_activity;
  public WaitTime $evaluation_wait_time;

  public function __construct(shape(
  ?'branches' => ListOfMultiConditionalBranch,
  ?'default_activity' => __string,
  ?'evaluation_wait_time' => WaitTime,
  ) $s = shape()) {
    $this->branches = $branches ?? ;
    $this->default_activity = $default_activity ?? ;
    $this->evaluation_wait_time = $evaluation_wait_time ?? ;
  }
}

class NotFoundException {
  public __string $message;
  public __string $request_id;

  public function __construct(shape(
  ?'message' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->request_id = $request_id ?? ;
  }
}

class NumberValidateRequest {
  public __string $iso_country_code;
  public __string $phone_number;

  public function __construct(shape(
  ?'iso_country_code' => __string,
  ?'phone_number' => __string,
  ) $s = shape()) {
    $this->iso_country_code = $iso_country_code ?? ;
    $this->phone_number = $phone_number ?? ;
  }
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

  public function __construct(shape(
  ?'carrier' => __string,
  ?'city' => __string,
  ?'cleansed_phone_number_e_164' => __string,
  ?'cleansed_phone_number_national' => __string,
  ?'country' => __string,
  ?'country_code_iso_2' => __string,
  ?'country_code_numeric' => __string,
  ?'county' => __string,
  ?'original_country_code_iso_2' => __string,
  ?'original_phone_number' => __string,
  ?'phone_type' => __string,
  ?'phone_type_code' => __integer,
  ?'timezone' => __string,
  ?'zip_code' => __string,
  ) $s = shape()) {
    $this->carrier = $carrier ?? ;
    $this->city = $city ?? ;
    $this->cleansed_phone_number_e_164 = $cleansed_phone_number_e_164 ?? ;
    $this->cleansed_phone_number_national = $cleansed_phone_number_national ?? ;
    $this->country = $country ?? ;
    $this->country_code_iso_2 = $country_code_iso_2 ?? ;
    $this->country_code_numeric = $country_code_numeric ?? ;
    $this->county = $county ?? ;
    $this->original_country_code_iso_2 = $original_country_code_iso_2 ?? ;
    $this->original_phone_number = $original_phone_number ?? ;
    $this->phone_type = $phone_type ?? ;
    $this->phone_type_code = $phone_type_code ?? ;
    $this->timezone = $timezone ?? ;
    $this->zip_code = $zip_code ?? ;
  }
}

type Operator = string;

class PayloadTooLargeException {
  public __string $message;
  public __string $request_id;

  public function __construct(shape(
  ?'message' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->request_id = $request_id ?? ;
  }
}

class PhoneNumberValidateRequest {
  public NumberValidateRequest $number_validate_request;

  public function __construct(shape(
  ?'number_validate_request' => NumberValidateRequest,
  ) $s = shape()) {
    $this->number_validate_request = $number_validate_request ?? null;
  }
}

class PhoneNumberValidateResponse {
  public NumberValidateResponse $number_validate_response;

  public function __construct(shape(
  ?'number_validate_response' => NumberValidateResponse,
  ) $s = shape()) {
    $this->number_validate_response = $number_validate_response ?? null;
  }
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

  public function __construct(shape(
  ?'address' => __string,
  ?'attributes' => MapOfListOf__string,
  ?'channel_type' => ChannelType,
  ?'demographic' => EndpointDemographic,
  ?'effective_date' => __string,
  ?'endpoint_status' => __string,
  ?'location' => EndpointLocation,
  ?'metrics' => MapOf__double,
  ?'opt_out' => __string,
  ?'request_id' => __string,
  ?'user' => EndpointUser,
  ) $s = shape()) {
    $this->address = $address ?? ;
    $this->attributes = $attributes ?? ;
    $this->channel_type = $channel_type ?? "";
    $this->demographic = $demographic ?? ;
    $this->effective_date = $effective_date ?? ;
    $this->endpoint_status = $endpoint_status ?? ;
    $this->location = $location ?? ;
    $this->metrics = $metrics ?? ;
    $this->opt_out = $opt_out ?? ;
    $this->request_id = $request_id ?? ;
    $this->user = $user ?? ;
  }
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

  public function __construct(shape(
  ?'adm' => AndroidPushNotificationTemplate,
  ?'apns' => APNSPushNotificationTemplate,
  ?'baidu' => AndroidPushNotificationTemplate,
  ?'default' => DefaultPushNotificationTemplate,
  ?'default_substitutions' => __string,
  ?'gcm' => AndroidPushNotificationTemplate,
  ?'recommender_id' => __string,
  ?'template_description' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->adm = $adm ?? ;
    $this->apns = $apns ?? ;
    $this->baidu = $baidu ?? ;
    $this->default = $default ?? ;
    $this->default_substitutions = $default_substitutions ?? ;
    $this->gcm = $gcm ?? ;
    $this->recommender_id = $recommender_id ?? ;
    $this->template_description = $template_description ?? ;
    $this->tags = $tags ?? ;
  }
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

  public function __construct(shape(
  ?'adm' => AndroidPushNotificationTemplate,
  ?'apns' => APNSPushNotificationTemplate,
  ?'arn' => __string,
  ?'baidu' => AndroidPushNotificationTemplate,
  ?'creation_date' => __string,
  ?'default' => DefaultPushNotificationTemplate,
  ?'default_substitutions' => __string,
  ?'gcm' => AndroidPushNotificationTemplate,
  ?'last_modified_date' => __string,
  ?'recommender_id' => __string,
  ?'template_description' => __string,
  ?'template_name' => __string,
  ?'template_type' => TemplateType,
  ?'version' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->adm = $adm ?? ;
    $this->apns = $apns ?? ;
    $this->arn = $arn ?? ;
    $this->baidu = $baidu ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->default = $default ?? ;
    $this->default_substitutions = $default_substitutions ?? ;
    $this->gcm = $gcm ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->recommender_id = $recommender_id ?? ;
    $this->template_description = $template_description ?? ;
    $this->template_name = $template_name ?? ;
    $this->template_type = $template_type ?? "";
    $this->version = $version ?? ;
    $this->tags = $tags ?? ;
  }
}

class PutEventStreamRequest {
  public __string $application_id;
  public WriteEventStream $write_event_stream;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'write_event_stream' => WriteEventStream,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->write_event_stream = $write_event_stream ?? null;
  }
}

class PutEventStreamResponse {
  public EventStream $event_stream;

  public function __construct(shape(
  ?'event_stream' => EventStream,
  ) $s = shape()) {
    $this->event_stream = $event_stream ?? null;
  }
}

class PutEventsRequest {
  public __string $application_id;
  public EventsRequest $events_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'events_request' => EventsRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->events_request = $events_request ?? null;
  }
}

class PutEventsResponse {
  public EventsResponse $events_response;

  public function __construct(shape(
  ?'events_response' => EventsResponse,
  ) $s = shape()) {
    $this->events_response = $events_response ?? null;
  }
}

class QuietTime {
  public __string $end;
  public __string $start;

  public function __construct(shape(
  ?'end' => __string,
  ?'start' => __string,
  ) $s = shape()) {
    $this->end = $end ?? ;
    $this->start = $start ?? ;
  }
}

class RandomSplitActivity {
  public ListOfRandomSplitEntry $branches;

  public function __construct(shape(
  ?'branches' => ListOfRandomSplitEntry,
  ) $s = shape()) {
    $this->branches = $branches ?? ;
  }
}

class RandomSplitEntry {
  public __string $next_activity;
  public __integer $percentage;

  public function __construct(shape(
  ?'next_activity' => __string,
  ?'percentage' => __integer,
  ) $s = shape()) {
    $this->next_activity = $next_activity ?? ;
    $this->percentage = $percentage ?? ;
  }
}

class RawEmail {
  public __blob $data;

  public function __construct(shape(
  ?'data' => __blob,
  ) $s = shape()) {
    $this->data = $data ?? ;
  }
}

class RecencyDimension {
  public Duration $duration;
  public RecencyType $recency_type;

  public function __construct(shape(
  ?'duration' => Duration,
  ?'recency_type' => RecencyType,
  ) $s = shape()) {
    $this->duration = $duration ?? "";
    $this->recency_type = $recency_type ?? "";
  }
}

type RecencyType = string;

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

  public function __construct(shape(
  ?'attributes' => MapOf__string,
  ?'creation_date' => __string,
  ?'description' => __string,
  ?'id' => __string,
  ?'last_modified_date' => __string,
  ?'name' => __string,
  ?'recommendation_provider_id_type' => __string,
  ?'recommendation_provider_role_arn' => __string,
  ?'recommendation_provider_uri' => __string,
  ?'recommendation_transformer_uri' => __string,
  ?'recommendations_display_name' => __string,
  ?'recommendations_per_message' => __integer,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->name = $name ?? ;
    $this->recommendation_provider_id_type = $recommendation_provider_id_type ?? ;
    $this->recommendation_provider_role_arn = $recommendation_provider_role_arn ?? ;
    $this->recommendation_provider_uri = $recommendation_provider_uri ?? ;
    $this->recommendation_transformer_uri = $recommendation_transformer_uri ?? ;
    $this->recommendations_display_name = $recommendations_display_name ?? ;
    $this->recommendations_per_message = $recommendations_per_message ?? ;
  }
}

class RemoveAttributesRequest {
  public __string $application_id;
  public __string $attribute_type;
  public UpdateAttributesRequest $update_attributes_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'attribute_type' => __string,
  ?'update_attributes_request' => UpdateAttributesRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->attribute_type = $attribute_type ?? "";
    $this->update_attributes_request = $update_attributes_request ?? null;
  }
}

class RemoveAttributesResponse {
  public AttributesResource $attributes_resource;

  public function __construct(shape(
  ?'attributes_resource' => AttributesResource,
  ) $s = shape()) {
    $this->attributes_resource = $attributes_resource ?? null;
  }
}

class ResultRow {
  public ListOfResultRowValue $grouped_bys;
  public ListOfResultRowValue $values;

  public function __construct(shape(
  ?'grouped_bys' => ListOfResultRowValue,
  ?'values' => ListOfResultRowValue,
  ) $s = shape()) {
    $this->grouped_bys = $grouped_bys ?? ;
    $this->values = $values ?? ;
  }
}

class ResultRowValue {
  public __string $key;
  public __string $type;
  public __string $value;

  public function __construct(shape(
  ?'key' => __string,
  ?'type' => __string,
  ?'value' => __string,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->type = $type ?? "";
    $this->value = $value ?? ;
  }
}

class SMSChannelRequest {
  public __boolean $enabled;
  public __string $sender_id;
  public __string $short_code;

  public function __construct(shape(
  ?'enabled' => __boolean,
  ?'sender_id' => __string,
  ?'short_code' => __string,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->sender_id = $sender_id ?? ;
    $this->short_code = $short_code ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'platform' => __string,
  ?'promotional_messages_per_second' => __integer,
  ?'sender_id' => __string,
  ?'short_code' => __string,
  ?'transactional_messages_per_second' => __integer,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->platform = $platform ?? ;
    $this->promotional_messages_per_second = $promotional_messages_per_second ?? ;
    $this->sender_id = $sender_id ?? ;
    $this->short_code = $short_code ?? ;
    $this->transactional_messages_per_second = $transactional_messages_per_second ?? ;
    $this->version = $version ?? ;
  }
}

class SMSMessage {
  public __string $body;
  public __string $keyword;
  public __string $media_url;
  public MessageType $message_type;
  public __string $origination_number;
  public __string $sender_id;
  public MapOfListOf__string $substitutions;

  public function __construct(shape(
  ?'body' => __string,
  ?'keyword' => __string,
  ?'media_url' => __string,
  ?'message_type' => MessageType,
  ?'origination_number' => __string,
  ?'sender_id' => __string,
  ?'substitutions' => MapOfListOf__string,
  ) $s = shape()) {
    $this->body = $body ?? ;
    $this->keyword = $keyword ?? ;
    $this->media_url = $media_url ?? ;
    $this->message_type = $message_type ?? "";
    $this->origination_number = $origination_number ?? ;
    $this->sender_id = $sender_id ?? ;
    $this->substitutions = $substitutions ?? ;
  }
}

class SMSTemplateRequest {
  public __string $body;
  public __string $default_substitutions;
  public __string $recommender_id;
  public __string $template_description;
  public MapOf__string $tags;

  public function __construct(shape(
  ?'body' => __string,
  ?'default_substitutions' => __string,
  ?'recommender_id' => __string,
  ?'template_description' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->body = $body ?? ;
    $this->default_substitutions = $default_substitutions ?? ;
    $this->recommender_id = $recommender_id ?? ;
    $this->template_description = $template_description ?? ;
    $this->tags = $tags ?? ;
  }
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

  public function __construct(shape(
  ?'arn' => __string,
  ?'body' => __string,
  ?'creation_date' => __string,
  ?'default_substitutions' => __string,
  ?'last_modified_date' => __string,
  ?'recommender_id' => __string,
  ?'template_description' => __string,
  ?'template_name' => __string,
  ?'template_type' => TemplateType,
  ?'version' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->body = $body ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->default_substitutions = $default_substitutions ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->recommender_id = $recommender_id ?? ;
    $this->template_description = $template_description ?? ;
    $this->template_name = $template_name ?? ;
    $this->template_type = $template_type ?? "";
    $this->version = $version ?? ;
    $this->tags = $tags ?? ;
  }
}

class Schedule {
  public __string $end_time;
  public CampaignEventFilter $event_filter;
  public Frequency $frequency;
  public __boolean $is_local_time;
  public QuietTime $quiet_time;
  public __string $start_time;
  public __string $timezone;

  public function __construct(shape(
  ?'end_time' => __string,
  ?'event_filter' => CampaignEventFilter,
  ?'frequency' => Frequency,
  ?'is_local_time' => __boolean,
  ?'quiet_time' => QuietTime,
  ?'start_time' => __string,
  ?'timezone' => __string,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->event_filter = $event_filter ?? ;
    $this->frequency = $frequency ?? "";
    $this->is_local_time = $is_local_time ?? ;
    $this->quiet_time = $quiet_time ?? null;
    $this->start_time = $start_time ?? ;
    $this->timezone = $timezone ?? ;
  }
}

class SegmentBehaviors {
  public RecencyDimension $recency;

  public function __construct(shape(
  ?'recency' => RecencyDimension,
  ) $s = shape()) {
    $this->recency = $recency ?? ;
  }
}

class SegmentCondition {
  public __string $segment_id;

  public function __construct(shape(
  ?'segment_id' => __string,
  ) $s = shape()) {
    $this->segment_id = $segment_id ?? ;
  }
}

class SegmentDemographics {
  public SetDimension $app_version;
  public SetDimension $channel;
  public SetDimension $device_type;
  public SetDimension $make;
  public SetDimension $model;
  public SetDimension $platform;

  public function __construct(shape(
  ?'app_version' => SetDimension,
  ?'channel' => SetDimension,
  ?'device_type' => SetDimension,
  ?'make' => SetDimension,
  ?'model' => SetDimension,
  ?'platform' => SetDimension,
  ) $s = shape()) {
    $this->app_version = $app_version ?? ;
    $this->channel = $channel ?? ;
    $this->device_type = $device_type ?? ;
    $this->make = $make ?? ;
    $this->model = $model ?? ;
    $this->platform = $platform ?? ;
  }
}

class SegmentDimensions {
  public MapOfAttributeDimension $attributes;
  public SegmentBehaviors $behavior;
  public SegmentDemographics $demographic;
  public SegmentLocation $location;
  public MapOfMetricDimension $metrics;
  public MapOfAttributeDimension $user_attributes;

  public function __construct(shape(
  ?'attributes' => MapOfAttributeDimension,
  ?'behavior' => SegmentBehaviors,
  ?'demographic' => SegmentDemographics,
  ?'location' => SegmentLocation,
  ?'metrics' => MapOfMetricDimension,
  ?'user_attributes' => MapOfAttributeDimension,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->behavior = $behavior ?? ;
    $this->demographic = $demographic ?? ;
    $this->location = $location ?? ;
    $this->metrics = $metrics ?? ;
    $this->user_attributes = $user_attributes ?? ;
  }
}

class SegmentGroup {
  public ListOfSegmentDimensions $dimensions;
  public ListOfSegmentReference $source_segments;
  public SourceType $source_type;
  public Type $type;

  public function __construct(shape(
  ?'dimensions' => ListOfSegmentDimensions,
  ?'source_segments' => ListOfSegmentReference,
  ?'source_type' => SourceType,
  ?'type' => Type,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? ;
    $this->source_segments = $source_segments ?? ;
    $this->source_type = $source_type ?? "";
    $this->type = $type ?? "";
  }
}

class SegmentGroupList {
  public ListOfSegmentGroup $groups;
  public Include $include;

  public function __construct(shape(
  ?'groups' => ListOfSegmentGroup,
  ?'include' => Include,
  ) $s = shape()) {
    $this->groups = $groups ?? ;
    $this->include = $include ?? "";
  }
}

class SegmentImportResource {
  public MapOf__integer $channel_counts;
  public __string $external_id;
  public Format $format;
  public __string $role_arn;
  public __string $s_3_url;
  public __integer $size;

  public function __construct(shape(
  ?'channel_counts' => MapOf__integer,
  ?'external_id' => __string,
  ?'format' => Format,
  ?'role_arn' => __string,
  ?'s_3_url' => __string,
  ?'size' => __integer,
  ) $s = shape()) {
    $this->channel_counts = $channel_counts ?? ;
    $this->external_id = $external_id ?? ;
    $this->format = $format ?? "";
    $this->role_arn = $role_arn ?? ;
    $this->s_3_url = $s_3_url ?? ;
    $this->size = $size ?? ;
  }
}

class SegmentLocation {
  public SetDimension $country;
  public GPSPointDimension $gps_point;

  public function __construct(shape(
  ?'country' => SetDimension,
  ?'gps_point' => GPSPointDimension,
  ) $s = shape()) {
    $this->country = $country ?? ;
    $this->gps_point = $gps_point ?? ;
  }
}

class SegmentReference {
  public __string $id;
  public __integer $version;

  public function __construct(shape(
  ?'id' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->version = $version ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'arn' => __string,
  ?'creation_date' => __string,
  ?'dimensions' => SegmentDimensions,
  ?'id' => __string,
  ?'import_definition' => SegmentImportResource,
  ?'last_modified_date' => __string,
  ?'name' => __string,
  ?'segment_groups' => SegmentGroupList,
  ?'segment_type' => SegmentType,
  ?'version' => __integer,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->arn = $arn ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->dimensions = $dimensions ?? ;
    $this->id = $id ?? ;
    $this->import_definition = $import_definition ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->name = $name ?? ;
    $this->segment_groups = $segment_groups ?? ;
    $this->segment_type = $segment_type ?? "";
    $this->version = $version ?? ;
    $this->tags = $tags ?? ;
  }
}

type SegmentType = string;

class SegmentsResponse {
  public ListOfSegmentResponse $item;
  public __string $next_token;

  public function __construct(shape(
  ?'item' => ListOfSegmentResponse,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class SendMessagesRequest {
  public __string $application_id;
  public MessageRequest $message_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'message_request' => MessageRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->message_request = $message_request ?? null;
  }
}

class SendMessagesResponse {
  public MessageResponse $message_response;

  public function __construct(shape(
  ?'message_response' => MessageResponse,
  ) $s = shape()) {
    $this->message_response = $message_response ?? null;
  }
}

class SendUsersMessageRequest {
  public MapOf__string $context;
  public DirectMessageConfiguration $message_configuration;
  public TemplateConfiguration $template_configuration;
  public __string $trace_id;
  public MapOfEndpointSendConfiguration $users;

  public function __construct(shape(
  ?'context' => MapOf__string,
  ?'message_configuration' => DirectMessageConfiguration,
  ?'template_configuration' => TemplateConfiguration,
  ?'trace_id' => __string,
  ?'users' => MapOfEndpointSendConfiguration,
  ) $s = shape()) {
    $this->context = $context ?? ;
    $this->message_configuration = $message_configuration ?? null;
    $this->template_configuration = $template_configuration ?? null;
    $this->trace_id = $trace_id ?? ;
    $this->users = $users ?? ;
  }
}

class SendUsersMessageResponse {
  public __string $application_id;
  public __string $request_id;
  public MapOfMapOfEndpointMessageResult $result;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'request_id' => __string,
  ?'result' => MapOfMapOfEndpointMessageResult,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->result = $result ?? ;
  }
}

class SendUsersMessagesRequest {
  public __string $application_id;
  public SendUsersMessageRequest $send_users_message_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'send_users_message_request' => SendUsersMessageRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->send_users_message_request = $send_users_message_request ?? null;
  }
}

class SendUsersMessagesResponse {
  public SendUsersMessageResponse $send_users_message_response;

  public function __construct(shape(
  ?'send_users_message_response' => SendUsersMessageResponse,
  ) $s = shape()) {
    $this->send_users_message_response = $send_users_message_response ?? null;
  }
}

class Session {
  public __integer $duration;
  public __string $id;
  public __string $start_timestamp;
  public __string $stop_timestamp;

  public function __construct(shape(
  ?'duration' => __integer,
  ?'id' => __string,
  ?'start_timestamp' => __string,
  ?'stop_timestamp' => __string,
  ) $s = shape()) {
    $this->duration = $duration ?? "";
    $this->id = $id ?? ;
    $this->start_timestamp = $start_timestamp ?? ;
    $this->stop_timestamp = $stop_timestamp ?? ;
  }
}

class SetDimension {
  public DimensionType $dimension_type;
  public ListOf__string $values;

  public function __construct(shape(
  ?'dimension_type' => DimensionType,
  ?'values' => ListOf__string,
  ) $s = shape()) {
    $this->dimension_type = $dimension_type ?? "";
    $this->values = $values ?? ;
  }
}

class SimpleCondition {
  public EventCondition $event_condition;
  public SegmentCondition $segment_condition;
  public SegmentDimensions $segment_dimensions;

  public function __construct(shape(
  ?'event_condition' => EventCondition,
  ?'segment_condition' => SegmentCondition,
  ?'segment_dimensions' => SegmentDimensions,
  ) $s = shape()) {
    $this->event_condition = $event_condition ?? null;
    $this->segment_condition = $segment_condition ?? null;
    $this->segment_dimensions = $segment_dimensions ?? null;
  }
}

class SimpleEmail {
  public SimpleEmailPart $html_part;
  public SimpleEmailPart $subject;
  public SimpleEmailPart $text_part;

  public function __construct(shape(
  ?'html_part' => SimpleEmailPart,
  ?'subject' => SimpleEmailPart,
  ?'text_part' => SimpleEmailPart,
  ) $s = shape()) {
    $this->html_part = $html_part ?? ;
    $this->subject = $subject ?? ;
    $this->text_part = $text_part ?? ;
  }
}

class SimpleEmailPart {
  public __string $charset;
  public __string $data;

  public function __construct(shape(
  ?'charset' => __string,
  ?'data' => __string,
  ) $s = shape()) {
    $this->charset = $charset ?? ;
    $this->data = $data ?? ;
  }
}

type SourceType = string;

class StartCondition {
  public __string $description;
  public SegmentCondition $segment_start_condition;

  public function __construct(shape(
  ?'description' => __string,
  ?'segment_start_condition' => SegmentCondition,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->segment_start_condition = $segment_start_condition ?? ;
  }
}

type State = string;

class TagResourceRequest {
  public __string $resource_arn;
  public TagsModel $tags_model;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tags_model' => TagsModel,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags_model = $tags_model ?? null;
  }
}

class TagsModel {
  public MapOf__string $tags;

  public function __construct(shape(
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

class Template {
  public __string $name;
  public __string $version;

  public function __construct(shape(
  ?'name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->version = $version ?? ;
  }
}

class TemplateActiveVersionRequest {
  public __string $version;

  public function __construct(shape(
  ?'version' => __string,
  ) $s = shape()) {
    $this->version = $version ?? ;
  }
}

class TemplateConfiguration {
  public Template $email_template;
  public Template $push_template;
  public Template $sms_template;
  public Template $voice_template;

  public function __construct(shape(
  ?'email_template' => Template,
  ?'push_template' => Template,
  ?'sms_template' => Template,
  ?'voice_template' => Template,
  ) $s = shape()) {
    $this->email_template = $email_template ?? ;
    $this->push_template = $push_template ?? ;
    $this->sms_template = $sms_template ?? ;
    $this->voice_template = $voice_template ?? ;
  }
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

  public function __construct(shape(
  ?'arn' => __string,
  ?'creation_date' => __string,
  ?'default_substitutions' => __string,
  ?'last_modified_date' => __string,
  ?'template_description' => __string,
  ?'template_name' => __string,
  ?'template_type' => TemplateType,
  ?'version' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->default_substitutions = $default_substitutions ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->template_description = $template_description ?? ;
    $this->template_name = $template_name ?? ;
    $this->template_type = $template_type ?? "";
    $this->version = $version ?? ;
    $this->tags = $tags ?? ;
  }
}

type TemplateType = string;

class TemplateVersionResponse {
  public __string $creation_date;
  public __string $default_substitutions;
  public __string $last_modified_date;
  public __string $template_description;
  public __string $template_name;
  public __string $template_type;
  public __string $version;

  public function __construct(shape(
  ?'creation_date' => __string,
  ?'default_substitutions' => __string,
  ?'last_modified_date' => __string,
  ?'template_description' => __string,
  ?'template_name' => __string,
  ?'template_type' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->default_substitutions = $default_substitutions ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->template_description = $template_description ?? ;
    $this->template_name = $template_name ?? ;
    $this->template_type = $template_type ?? "";
    $this->version = $version ?? ;
  }
}

class TemplateVersionsResponse {
  public ListOfTemplateVersionResponse $item;
  public __string $message;
  public __string $next_token;
  public __string $request_id;

  public function __construct(shape(
  ?'item' => ListOfTemplateVersionResponse,
  ?'message' => __string,
  ?'next_token' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->message = $message ?? null;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class TemplatesResponse {
  public ListOfTemplateResponse $item;
  public __string $next_token;

  public function __construct(shape(
  ?'item' => ListOfTemplateResponse,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->item = $item ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class TooManyRequestsException {
  public __string $message;
  public __string $request_id;

  public function __construct(shape(
  ?'message' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->message = $message ?? null;
    $this->request_id = $request_id ?? ;
  }
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

  public function __construct(shape(
  ?'custom_delivery_configuration' => CustomDeliveryConfiguration,
  ?'id' => __string,
  ?'message_configuration' => MessageConfiguration,
  ?'schedule' => Schedule,
  ?'size_percent' => __integer,
  ?'state' => CampaignState,
  ?'template_configuration' => TemplateConfiguration,
  ?'treatment_description' => __string,
  ?'treatment_name' => __string,
  ) $s = shape()) {
    $this->custom_delivery_configuration = $custom_delivery_configuration ?? null;
    $this->id = $id ?? ;
    $this->message_configuration = $message_configuration ?? null;
    $this->schedule = $schedule ?? null;
    $this->size_percent = $size_percent ?? ;
    $this->state = $state ?? "";
    $this->template_configuration = $template_configuration ?? null;
    $this->treatment_description = $treatment_description ?? ;
    $this->treatment_name = $treatment_name ?? ;
  }
}

type Type = string;

class UntagResourceRequest {
  public __string $resource_arn;
  public ListOf__string $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tag_keys' => ListOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UpdateAdmChannelRequest {
  public ADMChannelRequest $adm_channel_request;
  public __string $application_id;

  public function __construct(shape(
  ?'adm_channel_request' => ADMChannelRequest,
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->adm_channel_request = $adm_channel_request ?? null;
    $this->application_id = $application_id ?? ;
  }
}

class UpdateAdmChannelResponse {
  public ADMChannelResponse $adm_channel_response;

  public function __construct(shape(
  ?'adm_channel_response' => ADMChannelResponse,
  ) $s = shape()) {
    $this->adm_channel_response = $adm_channel_response ?? null;
  }
}

class UpdateApnsChannelRequest {
  public APNSChannelRequest $apns_channel_request;
  public __string $application_id;

  public function __construct(shape(
  ?'apns_channel_request' => APNSChannelRequest,
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->apns_channel_request = $apns_channel_request ?? null;
    $this->application_id = $application_id ?? ;
  }
}

class UpdateApnsChannelResponse {
  public APNSChannelResponse $apns_channel_response;

  public function __construct(shape(
  ?'apns_channel_response' => APNSChannelResponse,
  ) $s = shape()) {
    $this->apns_channel_response = $apns_channel_response ?? null;
  }
}

class UpdateApnsSandboxChannelRequest {
  public APNSSandboxChannelRequest $apns_sandbox_channel_request;
  public __string $application_id;

  public function __construct(shape(
  ?'apns_sandbox_channel_request' => APNSSandboxChannelRequest,
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->apns_sandbox_channel_request = $apns_sandbox_channel_request ?? null;
    $this->application_id = $application_id ?? ;
  }
}

class UpdateApnsSandboxChannelResponse {
  public APNSSandboxChannelResponse $apns_sandbox_channel_response;

  public function __construct(shape(
  ?'apns_sandbox_channel_response' => APNSSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_sandbox_channel_response = $apns_sandbox_channel_response ?? null;
  }
}

class UpdateApnsVoipChannelRequest {
  public APNSVoipChannelRequest $apns_voip_channel_request;
  public __string $application_id;

  public function __construct(shape(
  ?'apns_voip_channel_request' => APNSVoipChannelRequest,
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->apns_voip_channel_request = $apns_voip_channel_request ?? null;
    $this->application_id = $application_id ?? ;
  }
}

class UpdateApnsVoipChannelResponse {
  public APNSVoipChannelResponse $apns_voip_channel_response;

  public function __construct(shape(
  ?'apns_voip_channel_response' => APNSVoipChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_channel_response = $apns_voip_channel_response ?? null;
  }
}

class UpdateApnsVoipSandboxChannelRequest {
  public APNSVoipSandboxChannelRequest $apns_voip_sandbox_channel_request;
  public __string $application_id;

  public function __construct(shape(
  ?'apns_voip_sandbox_channel_request' => APNSVoipSandboxChannelRequest,
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->apns_voip_sandbox_channel_request = $apns_voip_sandbox_channel_request ?? null;
    $this->application_id = $application_id ?? ;
  }
}

class UpdateApnsVoipSandboxChannelResponse {
  public APNSVoipSandboxChannelResponse $apns_voip_sandbox_channel_response;

  public function __construct(shape(
  ?'apns_voip_sandbox_channel_response' => APNSVoipSandboxChannelResponse,
  ) $s = shape()) {
    $this->apns_voip_sandbox_channel_response = $apns_voip_sandbox_channel_response ?? null;
  }
}

class UpdateApplicationSettingsRequest {
  public __string $application_id;
  public WriteApplicationSettingsRequest $write_application_settings_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'write_application_settings_request' => WriteApplicationSettingsRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->write_application_settings_request = $write_application_settings_request ?? null;
  }
}

class UpdateApplicationSettingsResponse {
  public ApplicationSettingsResource $application_settings_resource;

  public function __construct(shape(
  ?'application_settings_resource' => ApplicationSettingsResource,
  ) $s = shape()) {
    $this->application_settings_resource = $application_settings_resource ?? null;
  }
}

class UpdateAttributesRequest {
  public ListOf__string $blacklist;

  public function __construct(shape(
  ?'blacklist' => ListOf__string,
  ) $s = shape()) {
    $this->blacklist = $blacklist ?? ;
  }
}

class UpdateBaiduChannelRequest {
  public __string $application_id;
  public BaiduChannelRequest $baidu_channel_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'baidu_channel_request' => BaiduChannelRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->baidu_channel_request = $baidu_channel_request ?? null;
  }
}

class UpdateBaiduChannelResponse {
  public BaiduChannelResponse $baidu_channel_response;

  public function __construct(shape(
  ?'baidu_channel_response' => BaiduChannelResponse,
  ) $s = shape()) {
    $this->baidu_channel_response = $baidu_channel_response ?? null;
  }
}

class UpdateCampaignRequest {
  public __string $application_id;
  public __string $campaign_id;
  public WriteCampaignRequest $write_campaign_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'campaign_id' => __string,
  ?'write_campaign_request' => WriteCampaignRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->campaign_id = $campaign_id ?? ;
    $this->write_campaign_request = $write_campaign_request ?? null;
  }
}

class UpdateCampaignResponse {
  public CampaignResponse $campaign_response;

  public function __construct(shape(
  ?'campaign_response' => CampaignResponse,
  ) $s = shape()) {
    $this->campaign_response = $campaign_response ?? null;
  }
}

class UpdateEmailChannelRequest {
  public __string $application_id;
  public EmailChannelRequest $email_channel_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'email_channel_request' => EmailChannelRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->email_channel_request = $email_channel_request ?? null;
  }
}

class UpdateEmailChannelResponse {
  public EmailChannelResponse $email_channel_response;

  public function __construct(shape(
  ?'email_channel_response' => EmailChannelResponse,
  ) $s = shape()) {
    $this->email_channel_response = $email_channel_response ?? null;
  }
}

class UpdateEmailTemplateRequest {
  public __boolean $create_new_version;
  public EmailTemplateRequest $email_template_request;
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'create_new_version' => __boolean,
  ?'email_template_request' => EmailTemplateRequest,
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->create_new_version = $create_new_version ?? ;
    $this->email_template_request = $email_template_request ?? null;
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class UpdateEmailTemplateResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

class UpdateEndpointRequest {
  public __string $application_id;
  public __string $endpoint_id;
  public EndpointRequest $endpoint_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'endpoint_id' => __string,
  ?'endpoint_request' => EndpointRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->endpoint_id = $endpoint_id ?? ;
    $this->endpoint_request = $endpoint_request ?? null;
  }
}

class UpdateEndpointResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

class UpdateEndpointsBatchRequest {
  public __string $application_id;
  public EndpointBatchRequest $endpoint_batch_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'endpoint_batch_request' => EndpointBatchRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->endpoint_batch_request = $endpoint_batch_request ?? null;
  }
}

class UpdateEndpointsBatchResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

class UpdateGcmChannelRequest {
  public __string $application_id;
  public GCMChannelRequest $gcm_channel_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'gcm_channel_request' => GCMChannelRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->gcm_channel_request = $gcm_channel_request ?? null;
  }
}

class UpdateGcmChannelResponse {
  public GCMChannelResponse $gcm_channel_response;

  public function __construct(shape(
  ?'gcm_channel_response' => GCMChannelResponse,
  ) $s = shape()) {
    $this->gcm_channel_response = $gcm_channel_response ?? null;
  }
}

class UpdateJourneyRequest {
  public __string $application_id;
  public __string $journey_id;
  public WriteJourneyRequest $write_journey_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'journey_id' => __string,
  ?'write_journey_request' => WriteJourneyRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->journey_id = $journey_id ?? ;
    $this->write_journey_request = $write_journey_request ?? null;
  }
}

class UpdateJourneyResponse {
  public JourneyResponse $journey_response;

  public function __construct(shape(
  ?'journey_response' => JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $journey_response ?? null;
  }
}

class UpdateJourneyStateRequest {
  public __string $application_id;
  public __string $journey_id;
  public JourneyStateRequest $journey_state_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'journey_id' => __string,
  ?'journey_state_request' => JourneyStateRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->journey_id = $journey_id ?? ;
    $this->journey_state_request = $journey_state_request ?? null;
  }
}

class UpdateJourneyStateResponse {
  public JourneyResponse $journey_response;

  public function __construct(shape(
  ?'journey_response' => JourneyResponse,
  ) $s = shape()) {
    $this->journey_response = $journey_response ?? null;
  }
}

class UpdatePushTemplateRequest {
  public __boolean $create_new_version;
  public PushNotificationTemplateRequest $push_notification_template_request;
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'create_new_version' => __boolean,
  ?'push_notification_template_request' => PushNotificationTemplateRequest,
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->create_new_version = $create_new_version ?? ;
    $this->push_notification_template_request = $push_notification_template_request ?? null;
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class UpdatePushTemplateResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
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

  public function __construct(shape(
  ?'attributes' => MapOf__string,
  ?'description' => __string,
  ?'name' => __string,
  ?'recommendation_provider_id_type' => __string,
  ?'recommendation_provider_role_arn' => __string,
  ?'recommendation_provider_uri' => __string,
  ?'recommendation_transformer_uri' => __string,
  ?'recommendations_display_name' => __string,
  ?'recommendations_per_message' => __integer,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->recommendation_provider_id_type = $recommendation_provider_id_type ?? ;
    $this->recommendation_provider_role_arn = $recommendation_provider_role_arn ?? ;
    $this->recommendation_provider_uri = $recommendation_provider_uri ?? ;
    $this->recommendation_transformer_uri = $recommendation_transformer_uri ?? ;
    $this->recommendations_display_name = $recommendations_display_name ?? ;
    $this->recommendations_per_message = $recommendations_per_message ?? ;
  }
}

class UpdateRecommenderConfigurationRequest {
  public __string $recommender_id;
  public UpdateRecommenderConfiguration $update_recommender_configuration;

  public function __construct(shape(
  ?'recommender_id' => __string,
  ?'update_recommender_configuration' => UpdateRecommenderConfiguration,
  ) $s = shape()) {
    $this->recommender_id = $recommender_id ?? ;
    $this->update_recommender_configuration = $update_recommender_configuration ?? null;
  }
}

class UpdateRecommenderConfigurationResponse {
  public RecommenderConfigurationResponse $recommender_configuration_response;

  public function __construct(shape(
  ?'recommender_configuration_response' => RecommenderConfigurationResponse,
  ) $s = shape()) {
    $this->recommender_configuration_response = $recommender_configuration_response ?? null;
  }
}

class UpdateSegmentRequest {
  public __string $application_id;
  public __string $segment_id;
  public WriteSegmentRequest $write_segment_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'segment_id' => __string,
  ?'write_segment_request' => WriteSegmentRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->segment_id = $segment_id ?? ;
    $this->write_segment_request = $write_segment_request ?? null;
  }
}

class UpdateSegmentResponse {
  public SegmentResponse $segment_response;

  public function __construct(shape(
  ?'segment_response' => SegmentResponse,
  ) $s = shape()) {
    $this->segment_response = $segment_response ?? null;
  }
}

class UpdateSmsChannelRequest {
  public __string $application_id;
  public SMSChannelRequest $sms_channel_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'sms_channel_request' => SMSChannelRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->sms_channel_request = $sms_channel_request ?? null;
  }
}

class UpdateSmsChannelResponse {
  public SMSChannelResponse $sms_channel_response;

  public function __construct(shape(
  ?'sms_channel_response' => SMSChannelResponse,
  ) $s = shape()) {
    $this->sms_channel_response = $sms_channel_response ?? null;
  }
}

class UpdateSmsTemplateRequest {
  public __boolean $create_new_version;
  public SMSTemplateRequest $sms_template_request;
  public __string $template_name;
  public __string $version;

  public function __construct(shape(
  ?'create_new_version' => __boolean,
  ?'sms_template_request' => SMSTemplateRequest,
  ?'template_name' => __string,
  ?'version' => __string,
  ) $s = shape()) {
    $this->create_new_version = $create_new_version ?? ;
    $this->sms_template_request = $sms_template_request ?? null;
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
  }
}

class UpdateSmsTemplateResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

class UpdateTemplateActiveVersionRequest {
  public TemplateActiveVersionRequest $template_active_version_request;
  public __string $template_name;
  public __string $template_type;

  public function __construct(shape(
  ?'template_active_version_request' => TemplateActiveVersionRequest,
  ?'template_name' => __string,
  ?'template_type' => __string,
  ) $s = shape()) {
    $this->template_active_version_request = $template_active_version_request ?? null;
    $this->template_name = $template_name ?? ;
    $this->template_type = $template_type ?? "";
  }
}

class UpdateTemplateActiveVersionResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

class UpdateVoiceChannelRequest {
  public __string $application_id;
  public VoiceChannelRequest $voice_channel_request;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'voice_channel_request' => VoiceChannelRequest,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->voice_channel_request = $voice_channel_request ?? null;
  }
}

class UpdateVoiceChannelResponse {
  public VoiceChannelResponse $voice_channel_response;

  public function __construct(shape(
  ?'voice_channel_response' => VoiceChannelResponse,
  ) $s = shape()) {
    $this->voice_channel_response = $voice_channel_response ?? null;
  }
}

class UpdateVoiceTemplateRequest {
  public __boolean $create_new_version;
  public __string $template_name;
  public __string $version;
  public VoiceTemplateRequest $voice_template_request;

  public function __construct(shape(
  ?'create_new_version' => __boolean,
  ?'template_name' => __string,
  ?'version' => __string,
  ?'voice_template_request' => VoiceTemplateRequest,
  ) $s = shape()) {
    $this->create_new_version = $create_new_version ?? ;
    $this->template_name = $template_name ?? ;
    $this->version = $version ?? ;
    $this->voice_template_request = $voice_template_request ?? null;
  }
}

class UpdateVoiceTemplateResponse {
  public MessageBody $message_body;

  public function __construct(shape(
  ?'message_body' => MessageBody,
  ) $s = shape()) {
    $this->message_body = $message_body ?? null;
  }
}

class VoiceChannelRequest {
  public __boolean $enabled;

  public function __construct(shape(
  ?'enabled' => __boolean,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_date' => __string,
  ?'enabled' => __boolean,
  ?'has_credential' => __boolean,
  ?'id' => __string,
  ?'is_archived' => __boolean,
  ?'last_modified_by' => __string,
  ?'last_modified_date' => __string,
  ?'platform' => __string,
  ?'version' => __integer,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->enabled = $enabled ?? ;
    $this->has_credential = $has_credential ?? ;
    $this->id = $id ?? ;
    $this->is_archived = $is_archived ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->platform = $platform ?? ;
    $this->version = $version ?? ;
  }
}

class VoiceMessage {
  public __string $body;
  public __string $language_code;
  public __string $origination_number;
  public MapOfListOf__string $substitutions;
  public __string $voice_id;

  public function __construct(shape(
  ?'body' => __string,
  ?'language_code' => __string,
  ?'origination_number' => __string,
  ?'substitutions' => MapOfListOf__string,
  ?'voice_id' => __string,
  ) $s = shape()) {
    $this->body = $body ?? ;
    $this->language_code = $language_code ?? ;
    $this->origination_number = $origination_number ?? ;
    $this->substitutions = $substitutions ?? ;
    $this->voice_id = $voice_id ?? ;
  }
}

class VoiceTemplateRequest {
  public __string $body;
  public __string $default_substitutions;
  public __string $language_code;
  public __string $template_description;
  public __string $voice_id;
  public MapOf__string $tags;

  public function __construct(shape(
  ?'body' => __string,
  ?'default_substitutions' => __string,
  ?'language_code' => __string,
  ?'template_description' => __string,
  ?'voice_id' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->body = $body ?? ;
    $this->default_substitutions = $default_substitutions ?? ;
    $this->language_code = $language_code ?? ;
    $this->template_description = $template_description ?? ;
    $this->voice_id = $voice_id ?? ;
    $this->tags = $tags ?? ;
  }
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

  public function __construct(shape(
  ?'arn' => __string,
  ?'body' => __string,
  ?'creation_date' => __string,
  ?'default_substitutions' => __string,
  ?'language_code' => __string,
  ?'last_modified_date' => __string,
  ?'template_description' => __string,
  ?'template_name' => __string,
  ?'template_type' => TemplateType,
  ?'version' => __string,
  ?'voice_id' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->body = $body ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->default_substitutions = $default_substitutions ?? ;
    $this->language_code = $language_code ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->template_description = $template_description ?? ;
    $this->template_name = $template_name ?? ;
    $this->template_type = $template_type ?? "";
    $this->version = $version ?? ;
    $this->voice_id = $voice_id ?? ;
    $this->tags = $tags ?? ;
  }
}

class WaitActivity {
  public __string $next_activity;
  public WaitTime $wait_time;

  public function __construct(shape(
  ?'next_activity' => __string,
  ?'wait_time' => WaitTime,
  ) $s = shape()) {
    $this->next_activity = $next_activity ?? ;
    $this->wait_time = $wait_time ?? null;
  }
}

class WaitTime {
  public __string $wait_for;
  public __string $wait_until;

  public function __construct(shape(
  ?'wait_for' => __string,
  ?'wait_until' => __string,
  ) $s = shape()) {
    $this->wait_for = $wait_for ?? ;
    $this->wait_until = $wait_until ?? ;
  }
}

class WriteApplicationSettingsRequest {
  public CampaignHook $campaign_hook;
  public __boolean $cloud_watch_metrics_enabled;
  public CampaignLimits $limits;
  public QuietTime $quiet_time;

  public function __construct(shape(
  ?'campaign_hook' => CampaignHook,
  ?'cloud_watch_metrics_enabled' => __boolean,
  ?'limits' => CampaignLimits,
  ?'quiet_time' => QuietTime,
  ) $s = shape()) {
    $this->campaign_hook = $campaign_hook ?? null;
    $this->cloud_watch_metrics_enabled = $cloud_watch_metrics_enabled ?? ;
    $this->limits = $limits ?? ;
    $this->quiet_time = $quiet_time ?? null;
  }
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

  public function __construct(shape(
  ?'additional_treatments' => ListOfWriteTreatmentResource,
  ?'custom_delivery_configuration' => CustomDeliveryConfiguration,
  ?'description' => __string,
  ?'holdout_percent' => __integer,
  ?'hook' => CampaignHook,
  ?'is_paused' => __boolean,
  ?'limits' => CampaignLimits,
  ?'message_configuration' => MessageConfiguration,
  ?'name' => __string,
  ?'schedule' => Schedule,
  ?'segment_id' => __string,
  ?'segment_version' => __integer,
  ?'template_configuration' => TemplateConfiguration,
  ?'treatment_description' => __string,
  ?'treatment_name' => __string,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->additional_treatments = $additional_treatments ?? ;
    $this->custom_delivery_configuration = $custom_delivery_configuration ?? null;
    $this->description = $description ?? ;
    $this->holdout_percent = $holdout_percent ?? ;
    $this->hook = $hook ?? ;
    $this->is_paused = $is_paused ?? ;
    $this->limits = $limits ?? ;
    $this->message_configuration = $message_configuration ?? null;
    $this->name = $name ?? ;
    $this->schedule = $schedule ?? null;
    $this->segment_id = $segment_id ?? ;
    $this->segment_version = $segment_version ?? ;
    $this->template_configuration = $template_configuration ?? null;
    $this->treatment_description = $treatment_description ?? ;
    $this->treatment_name = $treatment_name ?? ;
    $this->tags = $tags ?? ;
  }
}

class WriteEventStream {
  public __string $destination_stream_arn;
  public __string $role_arn;

  public function __construct(shape(
  ?'destination_stream_arn' => __string,
  ?'role_arn' => __string,
  ) $s = shape()) {
    $this->destination_stream_arn = $destination_stream_arn ?? ;
    $this->role_arn = $role_arn ?? ;
  }
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

  public function __construct(shape(
  ?'activities' => MapOfActivity,
  ?'creation_date' => __string,
  ?'last_modified_date' => __string,
  ?'limits' => JourneyLimits,
  ?'local_time' => __boolean,
  ?'name' => __string,
  ?'quiet_time' => QuietTime,
  ?'refresh_frequency' => __string,
  ?'schedule' => JourneySchedule,
  ?'start_activity' => __string,
  ?'start_condition' => StartCondition,
  ?'state' => State,
  ) $s = shape()) {
    $this->activities = $activities ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->last_modified_date = $last_modified_date ?? ;
    $this->limits = $limits ?? ;
    $this->local_time = $local_time ?? ;
    $this->name = $name ?? ;
    $this->quiet_time = $quiet_time ?? null;
    $this->refresh_frequency = $refresh_frequency ?? ;
    $this->schedule = $schedule ?? null;
    $this->start_activity = $start_activity ?? ;
    $this->start_condition = $start_condition ?? null;
    $this->state = $state ?? "";
  }
}

class WriteSegmentRequest {
  public SegmentDimensions $dimensions;
  public __string $name;
  public SegmentGroupList $segment_groups;
  public MapOf__string $tags;

  public function __construct(shape(
  ?'dimensions' => SegmentDimensions,
  ?'name' => __string,
  ?'segment_groups' => SegmentGroupList,
  ?'tags' => MapOf__string,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? ;
    $this->name = $name ?? ;
    $this->segment_groups = $segment_groups ?? ;
    $this->tags = $tags ?? ;
  }
}

class WriteTreatmentResource {
  public CustomDeliveryConfiguration $custom_delivery_configuration;
  public MessageConfiguration $message_configuration;
  public Schedule $schedule;
  public __integer $size_percent;
  public TemplateConfiguration $template_configuration;
  public __string $treatment_description;
  public __string $treatment_name;

  public function __construct(shape(
  ?'custom_delivery_configuration' => CustomDeliveryConfiguration,
  ?'message_configuration' => MessageConfiguration,
  ?'schedule' => Schedule,
  ?'size_percent' => __integer,
  ?'template_configuration' => TemplateConfiguration,
  ?'treatment_description' => __string,
  ?'treatment_name' => __string,
  ) $s = shape()) {
    $this->custom_delivery_configuration = $custom_delivery_configuration ?? null;
    $this->message_configuration = $message_configuration ?? null;
    $this->schedule = $schedule ?? null;
    $this->size_percent = $size_percent ?? ;
    $this->template_configuration = $template_configuration ?? null;
    $this->treatment_description = $treatment_description ?? ;
    $this->treatment_name = $treatment_name ?? ;
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

