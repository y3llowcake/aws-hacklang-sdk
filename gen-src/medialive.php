<?hh // strict
namespace slack\aws\medialive;

interface MediaLive {
  public function BatchUpdateSchedule(BatchUpdateScheduleRequest): Awaitable<Errors\Result<BatchUpdateScheduleResponse>>;
  public function CreateChannel(CreateChannelRequest): Awaitable<Errors\Result<CreateChannelResponse>>;
  public function CreateInput(CreateInputRequest): Awaitable<Errors\Result<CreateInputResponse>>;
  public function CreateInputSecurityGroup(CreateInputSecurityGroupRequest): Awaitable<Errors\Result<CreateInputSecurityGroupResponse>>;
  public function CreateMultiplex(CreateMultiplexRequest): Awaitable<Errors\Result<CreateMultiplexResponse>>;
  public function CreateMultiplexProgram(CreateMultiplexProgramRequest): Awaitable<Errors\Result<CreateMultiplexProgramResponse>>;
  public function CreateTags(CreateTagsRequest): Awaitable<Errors\Error>;
  public function DeleteChannel(DeleteChannelRequest): Awaitable<Errors\Result<DeleteChannelResponse>>;
  public function DeleteInput(DeleteInputRequest): Awaitable<Errors\Result<DeleteInputResponse>>;
  public function DeleteInputSecurityGroup(DeleteInputSecurityGroupRequest): Awaitable<Errors\Result<DeleteInputSecurityGroupResponse>>;
  public function DeleteMultiplex(DeleteMultiplexRequest): Awaitable<Errors\Result<DeleteMultiplexResponse>>;
  public function DeleteMultiplexProgram(DeleteMultiplexProgramRequest): Awaitable<Errors\Result<DeleteMultiplexProgramResponse>>;
  public function DeleteReservation(DeleteReservationRequest): Awaitable<Errors\Result<DeleteReservationResponse>>;
  public function DeleteSchedule(DeleteScheduleRequest): Awaitable<Errors\Result<DeleteScheduleResponse>>;
  public function DeleteTags(DeleteTagsRequest): Awaitable<Errors\Error>;
  public function DescribeChannel(DescribeChannelRequest): Awaitable<Errors\Result<DescribeChannelResponse>>;
  public function DescribeInput(DescribeInputRequest): Awaitable<Errors\Result<DescribeInputResponse>>;
  public function DescribeInputSecurityGroup(DescribeInputSecurityGroupRequest): Awaitable<Errors\Result<DescribeInputSecurityGroupResponse>>;
  public function DescribeMultiplex(DescribeMultiplexRequest): Awaitable<Errors\Result<DescribeMultiplexResponse>>;
  public function DescribeMultiplexProgram(DescribeMultiplexProgramRequest): Awaitable<Errors\Result<DescribeMultiplexProgramResponse>>;
  public function DescribeOffering(DescribeOfferingRequest): Awaitable<Errors\Result<DescribeOfferingResponse>>;
  public function DescribeReservation(DescribeReservationRequest): Awaitable<Errors\Result<DescribeReservationResponse>>;
  public function DescribeSchedule(DescribeScheduleRequest): Awaitable<Errors\Result<DescribeScheduleResponse>>;
  public function ListChannels(ListChannelsRequest): Awaitable<Errors\Result<ListChannelsResponse>>;
  public function ListInputSecurityGroups(ListInputSecurityGroupsRequest): Awaitable<Errors\Result<ListInputSecurityGroupsResponse>>;
  public function ListInputs(ListInputsRequest): Awaitable<Errors\Result<ListInputsResponse>>;
  public function ListMultiplexPrograms(ListMultiplexProgramsRequest): Awaitable<Errors\Result<ListMultiplexProgramsResponse>>;
  public function ListMultiplexes(ListMultiplexesRequest): Awaitable<Errors\Result<ListMultiplexesResponse>>;
  public function ListOfferings(ListOfferingsRequest): Awaitable<Errors\Result<ListOfferingsResponse>>;
  public function ListReservations(ListReservationsRequest): Awaitable<Errors\Result<ListReservationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PurchaseOffering(PurchaseOfferingRequest): Awaitable<Errors\Result<PurchaseOfferingResponse>>;
  public function StartChannel(StartChannelRequest): Awaitable<Errors\Result<StartChannelResponse>>;
  public function StartMultiplex(StartMultiplexRequest): Awaitable<Errors\Result<StartMultiplexResponse>>;
  public function StopChannel(StopChannelRequest): Awaitable<Errors\Result<StopChannelResponse>>;
  public function StopMultiplex(StopMultiplexRequest): Awaitable<Errors\Result<StopMultiplexResponse>>;
  public function UpdateChannel(UpdateChannelRequest): Awaitable<Errors\Result<UpdateChannelResponse>>;
  public function UpdateChannelClass(UpdateChannelClassRequest): Awaitable<Errors\Result<UpdateChannelClassResponse>>;
  public function UpdateInput(UpdateInputRequest): Awaitable<Errors\Result<UpdateInputResponse>>;
  public function UpdateInputSecurityGroup(UpdateInputSecurityGroupRequest): Awaitable<Errors\Result<UpdateInputSecurityGroupResponse>>;
  public function UpdateMultiplex(UpdateMultiplexRequest): Awaitable<Errors\Result<UpdateMultiplexResponse>>;
  public function UpdateMultiplexProgram(UpdateMultiplexProgramRequest): Awaitable<Errors\Result<UpdateMultiplexProgramResponse>>;
  public function UpdateReservation(UpdateReservationRequest): Awaitable<Errors\Result<UpdateReservationResponse>>;
}

type AacCodingMode = string;

type AacInputType = string;

type AacProfile = string;

type AacRateControlMode = string;

type AacRawFormat = string;

class AacSettings {
  public __double $bitrate;
  public AacCodingMode $coding_mode;
  public AacInputType $input_type;
  public AacProfile $profile;
  public AacRateControlMode $rate_control_mode;
  public AacRawFormat $raw_format;
  public __double $sample_rate;
  public AacSpec $spec;
  public AacVbrQuality $vbr_quality;

  public function __construct(shape(
  ?'bitrate' => __double,
  ?'coding_mode' => AacCodingMode,
  ?'input_type' => AacInputType,
  ?'profile' => AacProfile,
  ?'rate_control_mode' => AacRateControlMode,
  ?'raw_format' => AacRawFormat,
  ?'sample_rate' => __double,
  ?'spec' => AacSpec,
  ?'vbr_quality' => AacVbrQuality,
  ) $s = shape()) {
    $this->bitrate = $bitrate ?? ;
    $this->coding_mode = $coding_mode ?? ;
    $this->input_type = $input_type ?? "";
    $this->profile = $profile ?? ;
    $this->rate_control_mode = $rate_control_mode ?? ;
    $this->raw_format = $raw_format ?? ;
    $this->sample_rate = $sample_rate ?? ;
    $this->spec = $spec ?? ;
    $this->vbr_quality = $vbr_quality ?? ;
  }
}

type AacSpec = string;

type AacVbrQuality = string;

type Ac3BitstreamMode = string;

type Ac3CodingMode = string;

type Ac3DrcProfile = string;

type Ac3LfeFilter = string;

type Ac3MetadataControl = string;

class Ac3Settings {
  public __double $bitrate;
  public Ac3BitstreamMode $bitstream_mode;
  public Ac3CodingMode $coding_mode;
  public __integerMin1Max31 $dialnorm;
  public Ac3DrcProfile $drc_profile;
  public Ac3LfeFilter $lfe_filter;
  public Ac3MetadataControl $metadata_control;

  public function __construct(shape(
  ?'bitrate' => __double,
  ?'bitstream_mode' => Ac3BitstreamMode,
  ?'coding_mode' => Ac3CodingMode,
  ?'dialnorm' => __integerMin1Max31,
  ?'drc_profile' => Ac3DrcProfile,
  ?'lfe_filter' => Ac3LfeFilter,
  ?'metadata_control' => Ac3MetadataControl,
  ) $s = shape()) {
    $this->bitrate = $bitrate ?? ;
    $this->bitstream_mode = $bitstream_mode ?? ;
    $this->coding_mode = $coding_mode ?? ;
    $this->dialnorm = $dialnorm ?? ;
    $this->drc_profile = $drc_profile ?? ;
    $this->lfe_filter = $lfe_filter ?? ;
    $this->metadata_control = $metadata_control ?? ;
  }
}

class AccessDenied {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type AfdSignaling = string;

class ArchiveContainerSettings {
  public M2tsSettings $m_2_ts_settings;

  public function __construct(shape(
  ?'m_2_ts_settings' => M2tsSettings,
  ) $s = shape()) {
    $this->m_2_ts_settings = $m_2_ts_settings ?? null;
  }
}

class ArchiveGroupSettings {
  public OutputLocationRef $destination;
  public __integerMin1 $rollover_interval;

  public function __construct(shape(
  ?'destination' => OutputLocationRef,
  ?'rollover_interval' => __integerMin1,
  ) $s = shape()) {
    $this->destination = $destination ?? ;
    $this->rollover_interval = $rollover_interval ?? ;
  }
}

class ArchiveOutputSettings {
  public ArchiveContainerSettings $container_settings;
  public __string $extension;
  public __string $name_modifier;

  public function __construct(shape(
  ?'container_settings' => ArchiveContainerSettings,
  ?'extension' => __string,
  ?'name_modifier' => __string,
  ) $s = shape()) {
    $this->container_settings = $container_settings ?? ;
    $this->extension = $extension ?? ;
    $this->name_modifier = $name_modifier ?? ;
  }
}

class AribDestinationSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AribSourceSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AudioChannelMapping {
  public __listOfInputChannelLevel $input_channel_levels;
  public __integerMin0Max7 $output_channel;

  public function __construct(shape(
  ?'input_channel_levels' => __listOfInputChannelLevel,
  ?'output_channel' => __integerMin0Max7,
  ) $s = shape()) {
    $this->input_channel_levels = $input_channel_levels ?? ;
    $this->output_channel = $output_channel ?? ;
  }
}

class AudioCodecSettings {
  public AacSettings $aac_settings;
  public Ac3Settings $ac_3_settings;
  public Eac3Settings $eac_3_settings;
  public Mp2Settings $mp_2_settings;
  public PassThroughSettings $pass_through_settings;

  public function __construct(shape(
  ?'aac_settings' => AacSettings,
  ?'ac_3_settings' => Ac3Settings,
  ?'eac_3_settings' => Eac3Settings,
  ?'mp_2_settings' => Mp2Settings,
  ?'pass_through_settings' => PassThroughSettings,
  ) $s = shape()) {
    $this->aac_settings = $aac_settings ?? null;
    $this->ac_3_settings = $ac_3_settings ?? null;
    $this->eac_3_settings = $eac_3_settings ?? null;
    $this->mp_2_settings = $mp_2_settings ?? null;
    $this->pass_through_settings = $pass_through_settings ?? null;
  }
}

class AudioDescription {
  public AudioNormalizationSettings $audio_normalization_settings;
  public __string $audio_selector_name;
  public AudioType $audio_type;
  public AudioDescriptionAudioTypeControl $audio_type_control;
  public AudioCodecSettings $codec_settings;
  public __stringMin3Max3 $language_code;
  public AudioDescriptionLanguageCodeControl $language_code_control;
  public __string $name;
  public RemixSettings $remix_settings;
  public __string $stream_name;

  public function __construct(shape(
  ?'audio_normalization_settings' => AudioNormalizationSettings,
  ?'audio_selector_name' => __string,
  ?'audio_type' => AudioType,
  ?'audio_type_control' => AudioDescriptionAudioTypeControl,
  ?'codec_settings' => AudioCodecSettings,
  ?'language_code' => __stringMin3Max3,
  ?'language_code_control' => AudioDescriptionLanguageCodeControl,
  ?'name' => __string,
  ?'remix_settings' => RemixSettings,
  ?'stream_name' => __string,
  ) $s = shape()) {
    $this->audio_normalization_settings = $audio_normalization_settings ?? null;
    $this->audio_selector_name = $audio_selector_name ?? ;
    $this->audio_type = $audio_type ?? "";
    $this->audio_type_control = $audio_type_control ?? ;
    $this->codec_settings = $codec_settings ?? ;
    $this->language_code = $language_code ?? ;
    $this->language_code_control = $language_code_control ?? ;
    $this->name = $name ?? ;
    $this->remix_settings = $remix_settings ?? null;
    $this->stream_name = $stream_name ?? ;
  }
}

type AudioDescriptionAudioTypeControl = string;

type AudioDescriptionLanguageCodeControl = string;

class AudioLanguageSelection {
  public __string $language_code;
  public AudioLanguageSelectionPolicy $language_selection_policy;

  public function __construct(shape(
  ?'language_code' => __string,
  ?'language_selection_policy' => AudioLanguageSelectionPolicy,
  ) $s = shape()) {
    $this->language_code = $language_code ?? ;
    $this->language_selection_policy = $language_selection_policy ?? ;
  }
}

type AudioLanguageSelectionPolicy = string;

type AudioNormalizationAlgorithm = string;

type AudioNormalizationAlgorithmControl = string;

class AudioNormalizationSettings {
  public AudioNormalizationAlgorithm $algorithm;
  public AudioNormalizationAlgorithmControl $algorithm_control;
  public __doubleMinNegative59Max0 $target_lkfs;

  public function __construct(shape(
  ?'algorithm' => AudioNormalizationAlgorithm,
  ?'algorithm_control' => AudioNormalizationAlgorithmControl,
  ?'target_lkfs' => __doubleMinNegative59Max0,
  ) $s = shape()) {
    $this->algorithm = $algorithm ?? ;
    $this->algorithm_control = $algorithm_control ?? ;
    $this->target_lkfs = $target_lkfs ?? ;
  }
}

type AudioOnlyHlsSegmentType = string;

class AudioOnlyHlsSettings {
  public __string $audio_group_id;
  public InputLocation $audio_only_image;
  public AudioOnlyHlsTrackType $audio_track_type;
  public AudioOnlyHlsSegmentType $segment_type;

  public function __construct(shape(
  ?'audio_group_id' => __string,
  ?'audio_only_image' => InputLocation,
  ?'audio_track_type' => AudioOnlyHlsTrackType,
  ?'segment_type' => AudioOnlyHlsSegmentType,
  ) $s = shape()) {
    $this->audio_group_id = $audio_group_id ?? ;
    $this->audio_only_image = $audio_only_image ?? ;
    $this->audio_track_type = $audio_track_type ?? ;
    $this->segment_type = $segment_type ?? ;
  }
}

type AudioOnlyHlsTrackType = string;

class AudioPidSelection {
  public __integerMin0Max8191 $pid;

  public function __construct(shape(
  ?'pid' => __integerMin0Max8191,
  ) $s = shape()) {
    $this->pid = $pid ?? ;
  }
}

class AudioSelector {
  public __stringMin1 $name;
  public AudioSelectorSettings $selector_settings;

  public function __construct(shape(
  ?'name' => __stringMin1,
  ?'selector_settings' => AudioSelectorSettings,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->selector_settings = $selector_settings ?? ;
  }
}

class AudioSelectorSettings {
  public AudioLanguageSelection $audio_language_selection;
  public AudioPidSelection $audio_pid_selection;

  public function __construct(shape(
  ?'audio_language_selection' => AudioLanguageSelection,
  ?'audio_pid_selection' => AudioPidSelection,
  ) $s = shape()) {
    $this->audio_language_selection = $audio_language_selection ?? null;
    $this->audio_pid_selection = $audio_pid_selection ?? null;
  }
}

type AudioType = string;

type AuthenticationScheme = string;

class AutomaticInputFailoverSettings {
  public InputPreference $input_preference;
  public __string $secondary_input_id;

  public function __construct(shape(
  ?'input_preference' => InputPreference,
  ?'secondary_input_id' => __string,
  ) $s = shape()) {
    $this->input_preference = $input_preference ?? "";
    $this->secondary_input_id = $secondary_input_id ?? ;
  }
}

class AvailBlanking {
  public InputLocation $avail_blanking_image;
  public AvailBlankingState $state;

  public function __construct(shape(
  ?'avail_blanking_image' => InputLocation,
  ?'state' => AvailBlankingState,
  ) $s = shape()) {
    $this->avail_blanking_image = $avail_blanking_image ?? ;
    $this->state = $state ?? ;
  }
}

type AvailBlankingState = string;

class AvailConfiguration {
  public AvailSettings $avail_settings;

  public function __construct(shape(
  ?'avail_settings' => AvailSettings,
  ) $s = shape()) {
    $this->avail_settings = $avail_settings ?? null;
  }
}

class AvailSettings {
  public Scte35SpliceInsert $scte_35_splice_insert;
  public Scte35TimeSignalApos $scte_35_time_signal_apos;

  public function __construct(shape(
  ?'scte_35_splice_insert' => Scte35SpliceInsert,
  ?'scte_35_time_signal_apos' => Scte35TimeSignalApos,
  ) $s = shape()) {
    $this->scte_35_splice_insert = $scte_35_splice_insert ?? null;
    $this->scte_35_time_signal_apos = $scte_35_time_signal_apos ?? null;
  }
}

class BadGatewayException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class BadRequestException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class BatchScheduleActionCreateRequest {
  public __listOfScheduleAction $schedule_actions;

  public function __construct(shape(
  ?'schedule_actions' => __listOfScheduleAction,
  ) $s = shape()) {
    $this->schedule_actions = $schedule_actions ?? ;
  }
}

class BatchScheduleActionCreateResult {
  public __listOfScheduleAction $schedule_actions;

  public function __construct(shape(
  ?'schedule_actions' => __listOfScheduleAction,
  ) $s = shape()) {
    $this->schedule_actions = $schedule_actions ?? ;
  }
}

class BatchScheduleActionDeleteRequest {
  public __listOf__string $action_names;

  public function __construct(shape(
  ?'action_names' => __listOf__string,
  ) $s = shape()) {
    $this->action_names = $action_names ?? ;
  }
}

class BatchScheduleActionDeleteResult {
  public __listOfScheduleAction $schedule_actions;

  public function __construct(shape(
  ?'schedule_actions' => __listOfScheduleAction,
  ) $s = shape()) {
    $this->schedule_actions = $schedule_actions ?? ;
  }
}

class BatchUpdateScheduleRequest {
  public __string $channel_id;
  public BatchScheduleActionCreateRequest $creates;
  public BatchScheduleActionDeleteRequest $deletes;

  public function __construct(shape(
  ?'channel_id' => __string,
  ?'creates' => BatchScheduleActionCreateRequest,
  ?'deletes' => BatchScheduleActionDeleteRequest,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
    $this->creates = $creates ?? ;
    $this->deletes = $deletes ?? ;
  }
}

class BatchUpdateScheduleResponse {
  public BatchScheduleActionCreateResult $creates;
  public BatchScheduleActionDeleteResult $deletes;

  public function __construct(shape(
  ?'creates' => BatchScheduleActionCreateResult,
  ?'deletes' => BatchScheduleActionDeleteResult,
  ) $s = shape()) {
    $this->creates = $creates ?? ;
    $this->deletes = $deletes ?? ;
  }
}

class BatchUpdateScheduleResult {
  public BatchScheduleActionCreateResult $creates;
  public BatchScheduleActionDeleteResult $deletes;

  public function __construct(shape(
  ?'creates' => BatchScheduleActionCreateResult,
  ?'deletes' => BatchScheduleActionDeleteResult,
  ) $s = shape()) {
    $this->creates = $creates ?? ;
    $this->deletes = $deletes ?? ;
  }
}

class BlackoutSlate {
  public InputLocation $blackout_slate_image;
  public BlackoutSlateNetworkEndBlackout $network_end_blackout;
  public InputLocation $network_end_blackout_image;
  public __stringMin34Max34 $network_id;
  public BlackoutSlateState $state;

  public function __construct(shape(
  ?'blackout_slate_image' => InputLocation,
  ?'network_end_blackout' => BlackoutSlateNetworkEndBlackout,
  ?'network_end_blackout_image' => InputLocation,
  ?'network_id' => __stringMin34Max34,
  ?'state' => BlackoutSlateState,
  ) $s = shape()) {
    $this->blackout_slate_image = $blackout_slate_image ?? ;
    $this->network_end_blackout = $network_end_blackout ?? ;
    $this->network_end_blackout_image = $network_end_blackout_image ?? ;
    $this->network_id = $network_id ?? ;
    $this->state = $state ?? ;
  }
}

type BlackoutSlateNetworkEndBlackout = string;

type BlackoutSlateState = string;

type BurnInAlignment = string;

type BurnInBackgroundColor = string;

class BurnInDestinationSettings {
  public BurnInAlignment $alignment;
  public BurnInBackgroundColor $background_color;
  public __integerMin0Max255 $background_opacity;
  public InputLocation $font;
  public BurnInFontColor $font_color;
  public __integerMin0Max255 $font_opacity;
  public __integerMin96Max600 $font_resolution;
  public __string $font_size;
  public BurnInOutlineColor $outline_color;
  public __integerMin0Max10 $outline_size;
  public BurnInShadowColor $shadow_color;
  public __integerMin0Max255 $shadow_opacity;
  public __integer $shadow_x_offset;
  public __integer $shadow_y_offset;
  public BurnInTeletextGridControl $teletext_grid_control;
  public __integerMin0 $x_position;
  public __integerMin0 $y_position;

  public function __construct(shape(
  ?'alignment' => BurnInAlignment,
  ?'background_color' => BurnInBackgroundColor,
  ?'background_opacity' => __integerMin0Max255,
  ?'font' => InputLocation,
  ?'font_color' => BurnInFontColor,
  ?'font_opacity' => __integerMin0Max255,
  ?'font_resolution' => __integerMin96Max600,
  ?'font_size' => __string,
  ?'outline_color' => BurnInOutlineColor,
  ?'outline_size' => __integerMin0Max10,
  ?'shadow_color' => BurnInShadowColor,
  ?'shadow_opacity' => __integerMin0Max255,
  ?'shadow_x_offset' => __integer,
  ?'shadow_y_offset' => __integer,
  ?'teletext_grid_control' => BurnInTeletextGridControl,
  ?'x_position' => __integerMin0,
  ?'y_position' => __integerMin0,
  ) $s = shape()) {
    $this->alignment = $alignment ?? ;
    $this->background_color = $background_color ?? ;
    $this->background_opacity = $background_opacity ?? ;
    $this->font = $font ?? ;
    $this->font_color = $font_color ?? ;
    $this->font_opacity = $font_opacity ?? ;
    $this->font_resolution = $font_resolution ?? ;
    $this->font_size = $font_size ?? ;
    $this->outline_color = $outline_color ?? ;
    $this->outline_size = $outline_size ?? ;
    $this->shadow_color = $shadow_color ?? ;
    $this->shadow_opacity = $shadow_opacity ?? ;
    $this->shadow_x_offset = $shadow_x_offset ?? ;
    $this->shadow_y_offset = $shadow_y_offset ?? ;
    $this->teletext_grid_control = $teletext_grid_control ?? ;
    $this->x_position = $x_position ?? ;
    $this->y_position = $y_position ?? ;
  }
}

type BurnInFontColor = string;

type BurnInOutlineColor = string;

type BurnInShadowColor = string;

type BurnInTeletextGridControl = string;

class CaptionDescription {
  public __string $caption_selector_name;
  public CaptionDestinationSettings $destination_settings;
  public __string $language_code;
  public __string $language_description;
  public __string $name;

  public function __construct(shape(
  ?'caption_selector_name' => __string,
  ?'destination_settings' => CaptionDestinationSettings,
  ?'language_code' => __string,
  ?'language_description' => __string,
  ?'name' => __string,
  ) $s = shape()) {
    $this->caption_selector_name = $caption_selector_name ?? ;
    $this->destination_settings = $destination_settings ?? ;
    $this->language_code = $language_code ?? ;
    $this->language_description = $language_description ?? ;
    $this->name = $name ?? ;
  }
}

class CaptionDestinationSettings {
  public AribDestinationSettings $arib_destination_settings;
  public BurnInDestinationSettings $burn_in_destination_settings;
  public DvbSubDestinationSettings $dvb_sub_destination_settings;
  public EmbeddedDestinationSettings $embedded_destination_settings;
  public EmbeddedPlusScte20DestinationSettings $embedded_plus_scte_20_destination_settings;
  public RtmpCaptionInfoDestinationSettings $rtmp_caption_info_destination_settings;
  public Scte20PlusEmbeddedDestinationSettings $scte_20_plus_embedded_destination_settings;
  public Scte27DestinationSettings $scte_27_destination_settings;
  public SmpteTtDestinationSettings $smpte_tt_destination_settings;
  public TeletextDestinationSettings $teletext_destination_settings;
  public TtmlDestinationSettings $ttml_destination_settings;
  public WebvttDestinationSettings $webvtt_destination_settings;

  public function __construct(shape(
  ?'arib_destination_settings' => AribDestinationSettings,
  ?'burn_in_destination_settings' => BurnInDestinationSettings,
  ?'dvb_sub_destination_settings' => DvbSubDestinationSettings,
  ?'embedded_destination_settings' => EmbeddedDestinationSettings,
  ?'embedded_plus_scte_20_destination_settings' => EmbeddedPlusScte20DestinationSettings,
  ?'rtmp_caption_info_destination_settings' => RtmpCaptionInfoDestinationSettings,
  ?'scte_20_plus_embedded_destination_settings' => Scte20PlusEmbeddedDestinationSettings,
  ?'scte_27_destination_settings' => Scte27DestinationSettings,
  ?'smpte_tt_destination_settings' => SmpteTtDestinationSettings,
  ?'teletext_destination_settings' => TeletextDestinationSettings,
  ?'ttml_destination_settings' => TtmlDestinationSettings,
  ?'webvtt_destination_settings' => WebvttDestinationSettings,
  ) $s = shape()) {
    $this->arib_destination_settings = $arib_destination_settings ?? null;
    $this->burn_in_destination_settings = $burn_in_destination_settings ?? null;
    $this->dvb_sub_destination_settings = $dvb_sub_destination_settings ?? null;
    $this->embedded_destination_settings = $embedded_destination_settings ?? null;
    $this->embedded_plus_scte_20_destination_settings = $embedded_plus_scte_20_destination_settings ?? null;
    $this->rtmp_caption_info_destination_settings = $rtmp_caption_info_destination_settings ?? null;
    $this->scte_20_plus_embedded_destination_settings = $scte_20_plus_embedded_destination_settings ?? null;
    $this->scte_27_destination_settings = $scte_27_destination_settings ?? null;
    $this->smpte_tt_destination_settings = $smpte_tt_destination_settings ?? null;
    $this->teletext_destination_settings = $teletext_destination_settings ?? null;
    $this->ttml_destination_settings = $ttml_destination_settings ?? null;
    $this->webvtt_destination_settings = $webvtt_destination_settings ?? null;
  }
}

class CaptionLanguageMapping {
  public __integerMin1Max4 $caption_channel;
  public __stringMin3Max3 $language_code;
  public __stringMin1 $language_description;

  public function __construct(shape(
  ?'caption_channel' => __integerMin1Max4,
  ?'language_code' => __stringMin3Max3,
  ?'language_description' => __stringMin1,
  ) $s = shape()) {
    $this->caption_channel = $caption_channel ?? ;
    $this->language_code = $language_code ?? ;
    $this->language_description = $language_description ?? ;
  }
}

class CaptionSelector {
  public __string $language_code;
  public __stringMin1 $name;
  public CaptionSelectorSettings $selector_settings;

  public function __construct(shape(
  ?'language_code' => __string,
  ?'name' => __stringMin1,
  ?'selector_settings' => CaptionSelectorSettings,
  ) $s = shape()) {
    $this->language_code = $language_code ?? ;
    $this->name = $name ?? ;
    $this->selector_settings = $selector_settings ?? ;
  }
}

class CaptionSelectorSettings {
  public AribSourceSettings $arib_source_settings;
  public DvbSubSourceSettings $dvb_sub_source_settings;
  public EmbeddedSourceSettings $embedded_source_settings;
  public Scte20SourceSettings $scte_20_source_settings;
  public Scte27SourceSettings $scte_27_source_settings;
  public TeletextSourceSettings $teletext_source_settings;

  public function __construct(shape(
  ?'arib_source_settings' => AribSourceSettings,
  ?'dvb_sub_source_settings' => DvbSubSourceSettings,
  ?'embedded_source_settings' => EmbeddedSourceSettings,
  ?'scte_20_source_settings' => Scte20SourceSettings,
  ?'scte_27_source_settings' => Scte27SourceSettings,
  ?'teletext_source_settings' => TeletextSourceSettings,
  ) $s = shape()) {
    $this->arib_source_settings = $arib_source_settings ?? null;
    $this->dvb_sub_source_settings = $dvb_sub_source_settings ?? null;
    $this->embedded_source_settings = $embedded_source_settings ?? null;
    $this->scte_20_source_settings = $scte_20_source_settings ?? null;
    $this->scte_27_source_settings = $scte_27_source_settings ?? null;
    $this->teletext_source_settings = $teletext_source_settings ?? null;
  }
}

class Channel {
  public __string $arn;
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;
  public __listOfChannelEgressEndpoint $egress_endpoints;
  public EncoderSettings $encoder_settings;
  public __string $id;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __listOfPipelineDetail $pipeline_details;
  public __integer $pipelines_running_count;
  public __string $role_arn;
  public ChannelState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'channel_class' => ChannelClass,
  ?'destinations' => __listOfOutputDestination,
  ?'egress_endpoints' => __listOfChannelEgressEndpoint,
  ?'encoder_settings' => EncoderSettings,
  ?'id' => __string,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'pipeline_details' => __listOfPipelineDetail,
  ?'pipelines_running_count' => __integer,
  ?'role_arn' => __string,
  ?'state' => ChannelState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->channel_class = $channel_class ?? "";
    $this->destinations = $destinations ?? ;
    $this->egress_endpoints = $egress_endpoints ?? ;
    $this->encoder_settings = $encoder_settings ?? null;
    $this->id = $id ?? ;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->pipeline_details = $pipeline_details ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

type ChannelClass = string;

class ChannelConfigurationValidationError {
  public __string $message;
  public __listOfValidationError $validation_errors;

  public function __construct(shape(
  ?'message' => __string,
  ?'validation_errors' => __listOfValidationError,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->validation_errors = $validation_errors ?? ;
  }
}

class ChannelEgressEndpoint {
  public __string $source_ip;

  public function __construct(shape(
  ?'source_ip' => __string,
  ) $s = shape()) {
    $this->source_ip = $source_ip ?? ;
  }
}

type ChannelState = string;

class ChannelSummary {
  public __string $arn;
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;
  public __listOfChannelEgressEndpoint $egress_endpoints;
  public __string $id;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __integer $pipelines_running_count;
  public __string $role_arn;
  public ChannelState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'channel_class' => ChannelClass,
  ?'destinations' => __listOfOutputDestination,
  ?'egress_endpoints' => __listOfChannelEgressEndpoint,
  ?'id' => __string,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'pipelines_running_count' => __integer,
  ?'role_arn' => __string,
  ?'state' => ChannelState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->channel_class = $channel_class ?? "";
    $this->destinations = $destinations ?? ;
    $this->egress_endpoints = $egress_endpoints ?? ;
    $this->id = $id ?? ;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class ColorSpacePassthroughSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ConflictException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CreateChannel {
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;
  public EncoderSettings $encoder_settings;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __string $request_id;
  public __string $reserved;
  public __string $role_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'channel_class' => ChannelClass,
  ?'destinations' => __listOfOutputDestination,
  ?'encoder_settings' => EncoderSettings,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'request_id' => __string,
  ?'reserved' => __string,
  ?'role_arn' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->channel_class = $channel_class ?? "";
    $this->destinations = $destinations ?? ;
    $this->encoder_settings = $encoder_settings ?? null;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->request_id = $request_id ?? ;
    $this->reserved = $reserved ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateChannelRequest {
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;
  public EncoderSettings $encoder_settings;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __string $request_id;
  public __string $reserved;
  public __string $role_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'channel_class' => ChannelClass,
  ?'destinations' => __listOfOutputDestination,
  ?'encoder_settings' => EncoderSettings,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'request_id' => __string,
  ?'reserved' => __string,
  ?'role_arn' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->channel_class = $channel_class ?? "";
    $this->destinations = $destinations ?? ;
    $this->encoder_settings = $encoder_settings ?? null;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->request_id = $request_id ?? ;
    $this->reserved = $reserved ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateChannelResponse {
  public Channel $channel;

  public function __construct(shape(
  ?'channel' => Channel,
  ) $s = shape()) {
    $this->channel = $channel ?? null;
  }
}

class CreateChannelResultModel {
  public Channel $channel;

  public function __construct(shape(
  ?'channel' => Channel,
  ) $s = shape()) {
    $this->channel = $channel ?? null;
  }
}

class CreateInput {
  public __listOfInputDestinationRequest $destinations;
  public __listOf__string $input_security_groups;
  public __listOfMediaConnectFlowRequest $media_connect_flows;
  public __string $name;
  public __string $request_id;
  public __string $role_arn;
  public __listOfInputSourceRequest $sources;
  public Tags $tags;
  public InputType $type;
  public InputVpcRequest $vpc;

  public function __construct(shape(
  ?'destinations' => __listOfInputDestinationRequest,
  ?'input_security_groups' => __listOf__string,
  ?'media_connect_flows' => __listOfMediaConnectFlowRequest,
  ?'name' => __string,
  ?'request_id' => __string,
  ?'role_arn' => __string,
  ?'sources' => __listOfInputSourceRequest,
  ?'tags' => Tags,
  ?'type' => InputType,
  ?'vpc' => InputVpcRequest,
  ) $s = shape()) {
    $this->destinations = $destinations ?? ;
    $this->input_security_groups = $input_security_groups ?? ;
    $this->media_connect_flows = $media_connect_flows ?? ;
    $this->name = $name ?? ;
    $this->request_id = $request_id ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->sources = $sources ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? ;
    $this->vpc = $vpc ?? ;
  }
}

class CreateInputRequest {
  public __listOfInputDestinationRequest $destinations;
  public __listOf__string $input_security_groups;
  public __listOfMediaConnectFlowRequest $media_connect_flows;
  public __string $name;
  public __string $request_id;
  public __string $role_arn;
  public __listOfInputSourceRequest $sources;
  public Tags $tags;
  public InputType $type;
  public InputVpcRequest $vpc;

  public function __construct(shape(
  ?'destinations' => __listOfInputDestinationRequest,
  ?'input_security_groups' => __listOf__string,
  ?'media_connect_flows' => __listOfMediaConnectFlowRequest,
  ?'name' => __string,
  ?'request_id' => __string,
  ?'role_arn' => __string,
  ?'sources' => __listOfInputSourceRequest,
  ?'tags' => Tags,
  ?'type' => InputType,
  ?'vpc' => InputVpcRequest,
  ) $s = shape()) {
    $this->destinations = $destinations ?? ;
    $this->input_security_groups = $input_security_groups ?? ;
    $this->media_connect_flows = $media_connect_flows ?? ;
    $this->name = $name ?? ;
    $this->request_id = $request_id ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->sources = $sources ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? ;
    $this->vpc = $vpc ?? ;
  }
}

class CreateInputResponse {
  public Input $input;

  public function __construct(shape(
  ?'input' => Input,
  ) $s = shape()) {
    $this->input = $input ?? null;
  }
}

class CreateInputResultModel {
  public Input $input;

  public function __construct(shape(
  ?'input' => Input,
  ) $s = shape()) {
    $this->input = $input ?? null;
  }
}

class CreateInputSecurityGroupRequest {
  public Tags $tags;
  public __listOfInputWhitelistRuleCidr $whitelist_rules;

  public function __construct(shape(
  ?'tags' => Tags,
  ?'whitelist_rules' => __listOfInputWhitelistRuleCidr,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
    $this->whitelist_rules = $whitelist_rules ?? ;
  }
}

class CreateInputSecurityGroupResponse {
  public InputSecurityGroup $security_group;

  public function __construct(shape(
  ?'security_group' => InputSecurityGroup,
  ) $s = shape()) {
    $this->security_group = $security_group ?? ;
  }
}

class CreateInputSecurityGroupResultModel {
  public InputSecurityGroup $security_group;

  public function __construct(shape(
  ?'security_group' => InputSecurityGroup,
  ) $s = shape()) {
    $this->security_group = $security_group ?? ;
  }
}

class CreateMultiplex {
  public __listOf__string $availability_zones;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
  public __string $request_id;
  public Tags $tags;

  public function __construct(shape(
  ?'availability_zones' => __listOf__string,
  ?'multiplex_settings' => MultiplexSettings,
  ?'name' => __string,
  ?'request_id' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->availability_zones = $availability_zones ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
    $this->request_id = $request_id ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateMultiplexProgram {
  public MultiplexProgramSettings $multiplex_program_settings;
  public __string $program_name;
  public __string $request_id;

  public function __construct(shape(
  ?'multiplex_program_settings' => MultiplexProgramSettings,
  ?'program_name' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->multiplex_program_settings = $multiplex_program_settings ?? null;
    $this->program_name = $program_name ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class CreateMultiplexProgramRequest {
  public __string $multiplex_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public __string $program_name;
  public __string $request_id;

  public function __construct(shape(
  ?'multiplex_id' => __string,
  ?'multiplex_program_settings' => MultiplexProgramSettings,
  ?'program_name' => __string,
  ?'request_id' => __string,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
    $this->multiplex_program_settings = $multiplex_program_settings ?? null;
    $this->program_name = $program_name ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class CreateMultiplexProgramResponse {
  public MultiplexProgram $multiplex_program;

  public function __construct(shape(
  ?'multiplex_program' => MultiplexProgram,
  ) $s = shape()) {
    $this->multiplex_program = $multiplex_program ?? null;
  }
}

class CreateMultiplexProgramResultModel {
  public MultiplexProgram $multiplex_program;

  public function __construct(shape(
  ?'multiplex_program' => MultiplexProgram,
  ) $s = shape()) {
    $this->multiplex_program = $multiplex_program ?? null;
  }
}

class CreateMultiplexRequest {
  public __listOf__string $availability_zones;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
  public __string $request_id;
  public Tags $tags;

  public function __construct(shape(
  ?'availability_zones' => __listOf__string,
  ?'multiplex_settings' => MultiplexSettings,
  ?'name' => __string,
  ?'request_id' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->availability_zones = $availability_zones ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
    $this->request_id = $request_id ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateMultiplexResponse {
  public Multiplex $multiplex;

  public function __construct(shape(
  ?'multiplex' => Multiplex,
  ) $s = shape()) {
    $this->multiplex = $multiplex ?? null;
  }
}

class CreateMultiplexResultModel {
  public Multiplex $multiplex;

  public function __construct(shape(
  ?'multiplex' => Multiplex,
  ) $s = shape()) {
    $this->multiplex = $multiplex ?? null;
  }
}

class CreateTagsRequest {
  public __string $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? [];
  }
}

class DeleteChannelRequest {
  public __string $channel_id;

  public function __construct(shape(
  ?'channel_id' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
  }
}

class DeleteChannelResponse {
  public __string $arn;
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;
  public __listOfChannelEgressEndpoint $egress_endpoints;
  public EncoderSettings $encoder_settings;
  public __string $id;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __listOfPipelineDetail $pipeline_details;
  public __integer $pipelines_running_count;
  public __string $role_arn;
  public ChannelState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'channel_class' => ChannelClass,
  ?'destinations' => __listOfOutputDestination,
  ?'egress_endpoints' => __listOfChannelEgressEndpoint,
  ?'encoder_settings' => EncoderSettings,
  ?'id' => __string,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'pipeline_details' => __listOfPipelineDetail,
  ?'pipelines_running_count' => __integer,
  ?'role_arn' => __string,
  ?'state' => ChannelState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->channel_class = $channel_class ?? "";
    $this->destinations = $destinations ?? ;
    $this->egress_endpoints = $egress_endpoints ?? ;
    $this->encoder_settings = $encoder_settings ?? null;
    $this->id = $id ?? ;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->pipeline_details = $pipeline_details ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class DeleteInputRequest {
  public __string $input_id;

  public function __construct(shape(
  ?'input_id' => __string,
  ) $s = shape()) {
    $this->input_id = $input_id ?? ;
  }
}

class DeleteInputResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteInputSecurityGroupRequest {
  public __string $input_security_group_id;

  public function __construct(shape(
  ?'input_security_group_id' => __string,
  ) $s = shape()) {
    $this->input_security_group_id = $input_security_group_id ?? ;
  }
}

class DeleteInputSecurityGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteMultiplexProgramRequest {
  public __string $multiplex_id;
  public __string $program_name;

  public function __construct(shape(
  ?'multiplex_id' => __string,
  ?'program_name' => __string,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
    $this->program_name = $program_name ?? ;
  }
}

class DeleteMultiplexProgramResponse {
  public __string $channel_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public MultiplexProgramPacketIdentifiersMap $packet_identifiers_map;
  public __string $program_name;

  public function __construct(shape(
  ?'channel_id' => __string,
  ?'multiplex_program_settings' => MultiplexProgramSettings,
  ?'packet_identifiers_map' => MultiplexProgramPacketIdentifiersMap,
  ?'program_name' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
    $this->multiplex_program_settings = $multiplex_program_settings ?? null;
    $this->packet_identifiers_map = $packet_identifiers_map ?? ;
    $this->program_name = $program_name ?? ;
  }
}

class DeleteMultiplexRequest {
  public __string $multiplex_id;

  public function __construct(shape(
  ?'multiplex_id' => __string,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
  }
}

class DeleteMultiplexResponse {
  public __string $arn;
  public __listOf__string $availability_zones;
  public __listOfMultiplexOutputDestination $destinations;
  public __string $id;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
  public __integer $pipelines_running_count;
  public __integer $program_count;
  public MultiplexState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'availability_zones' => __listOf__string,
  ?'destinations' => __listOfMultiplexOutputDestination,
  ?'id' => __string,
  ?'multiplex_settings' => MultiplexSettings,
  ?'name' => __string,
  ?'pipelines_running_count' => __integer,
  ?'program_count' => __integer,
  ?'state' => MultiplexState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->availability_zones = $availability_zones ?? ;
    $this->destinations = $destinations ?? ;
    $this->id = $id ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->program_count = $program_count ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class DeleteReservationRequest {
  public __string $reservation_id;

  public function __construct(shape(
  ?'reservation_id' => __string,
  ) $s = shape()) {
    $this->reservation_id = $reservation_id ?? ;
  }
}

class DeleteReservationResponse {
  public __string $arn;
  public __integer $count;
  public __string $currency_code;
  public __integer $duration;
  public OfferingDurationUnits $duration_units;
  public __string $end;
  public __double $fixed_price;
  public __string $name;
  public __string $offering_description;
  public __string $offering_id;
  public OfferingType $offering_type;
  public __string $region;
  public __string $reservation_id;
  public ReservationResourceSpecification $resource_specification;
  public __string $start;
  public ReservationState $state;
  public Tags $tags;
  public __double $usage_price;

  public function __construct(shape(
  ?'arn' => __string,
  ?'count' => __integer,
  ?'currency_code' => __string,
  ?'duration' => __integer,
  ?'duration_units' => OfferingDurationUnits,
  ?'end' => __string,
  ?'fixed_price' => __double,
  ?'name' => __string,
  ?'offering_description' => __string,
  ?'offering_id' => __string,
  ?'offering_type' => OfferingType,
  ?'region' => __string,
  ?'reservation_id' => __string,
  ?'resource_specification' => ReservationResourceSpecification,
  ?'start' => __string,
  ?'state' => ReservationState,
  ?'tags' => Tags,
  ?'usage_price' => __double,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->count = $count ?? ;
    $this->currency_code = $currency_code ?? ;
    $this->duration = $duration ?? ;
    $this->duration_units = $duration_units ?? ;
    $this->end = $end ?? ;
    $this->fixed_price = $fixed_price ?? ;
    $this->name = $name ?? ;
    $this->offering_description = $offering_description ?? ;
    $this->offering_id = $offering_id ?? ;
    $this->offering_type = $offering_type ?? "";
    $this->region = $region ?? ;
    $this->reservation_id = $reservation_id ?? ;
    $this->resource_specification = $resource_specification ?? ;
    $this->start = $start ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
    $this->usage_price = $usage_price ?? ;
  }
}

class DeleteScheduleRequest {
  public __string $channel_id;

  public function __construct(shape(
  ?'channel_id' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
  }
}

class DeleteScheduleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTagsRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tag_keys' => __listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class DescribeChannelRequest {
  public __string $channel_id;

  public function __construct(shape(
  ?'channel_id' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
  }
}

class DescribeChannelResponse {
  public __string $arn;
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;
  public __listOfChannelEgressEndpoint $egress_endpoints;
  public EncoderSettings $encoder_settings;
  public __string $id;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __listOfPipelineDetail $pipeline_details;
  public __integer $pipelines_running_count;
  public __string $role_arn;
  public ChannelState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'channel_class' => ChannelClass,
  ?'destinations' => __listOfOutputDestination,
  ?'egress_endpoints' => __listOfChannelEgressEndpoint,
  ?'encoder_settings' => EncoderSettings,
  ?'id' => __string,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'pipeline_details' => __listOfPipelineDetail,
  ?'pipelines_running_count' => __integer,
  ?'role_arn' => __string,
  ?'state' => ChannelState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->channel_class = $channel_class ?? "";
    $this->destinations = $destinations ?? ;
    $this->egress_endpoints = $egress_endpoints ?? ;
    $this->encoder_settings = $encoder_settings ?? null;
    $this->id = $id ?? ;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->pipeline_details = $pipeline_details ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class DescribeInputRequest {
  public __string $input_id;

  public function __construct(shape(
  ?'input_id' => __string,
  ) $s = shape()) {
    $this->input_id = $input_id ?? ;
  }
}

class DescribeInputResponse {
  public __string $arn;
  public __listOf__string $attached_channels;
  public __listOfInputDestination $destinations;
  public __string $id;
  public InputClass $input_class;
  public InputSourceType $input_source_type;
  public __listOfMediaConnectFlow $media_connect_flows;
  public __string $name;
  public __string $role_arn;
  public __listOf__string $security_groups;
  public __listOfInputSource $sources;
  public InputState $state;
  public Tags $tags;
  public InputType $type;

  public function __construct(shape(
  ?'arn' => __string,
  ?'attached_channels' => __listOf__string,
  ?'destinations' => __listOfInputDestination,
  ?'id' => __string,
  ?'input_class' => InputClass,
  ?'input_source_type' => InputSourceType,
  ?'media_connect_flows' => __listOfMediaConnectFlow,
  ?'name' => __string,
  ?'role_arn' => __string,
  ?'security_groups' => __listOf__string,
  ?'sources' => __listOfInputSource,
  ?'state' => InputState,
  ?'tags' => Tags,
  ?'type' => InputType,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->attached_channels = $attached_channels ?? ;
    $this->destinations = $destinations ?? ;
    $this->id = $id ?? ;
    $this->input_class = $input_class ?? "";
    $this->input_source_type = $input_source_type ?? "";
    $this->media_connect_flows = $media_connect_flows ?? ;
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->security_groups = $security_groups ?? ;
    $this->sources = $sources ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? ;
  }
}

class DescribeInputSecurityGroupRequest {
  public __string $input_security_group_id;

  public function __construct(shape(
  ?'input_security_group_id' => __string,
  ) $s = shape()) {
    $this->input_security_group_id = $input_security_group_id ?? ;
  }
}

class DescribeInputSecurityGroupResponse {
  public __string $arn;
  public __string $id;
  public __listOf__string $inputs;
  public InputSecurityGroupState $state;
  public Tags $tags;
  public __listOfInputWhitelistRule $whitelist_rules;

  public function __construct(shape(
  ?'arn' => __string,
  ?'id' => __string,
  ?'inputs' => __listOf__string,
  ?'state' => InputSecurityGroupState,
  ?'tags' => Tags,
  ?'whitelist_rules' => __listOfInputWhitelistRule,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->id = $id ?? ;
    $this->inputs = $inputs ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
    $this->whitelist_rules = $whitelist_rules ?? ;
  }
}

class DescribeMultiplexProgramRequest {
  public __string $multiplex_id;
  public __string $program_name;

  public function __construct(shape(
  ?'multiplex_id' => __string,
  ?'program_name' => __string,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
    $this->program_name = $program_name ?? ;
  }
}

class DescribeMultiplexProgramResponse {
  public __string $channel_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public MultiplexProgramPacketIdentifiersMap $packet_identifiers_map;
  public __string $program_name;

  public function __construct(shape(
  ?'channel_id' => __string,
  ?'multiplex_program_settings' => MultiplexProgramSettings,
  ?'packet_identifiers_map' => MultiplexProgramPacketIdentifiersMap,
  ?'program_name' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
    $this->multiplex_program_settings = $multiplex_program_settings ?? null;
    $this->packet_identifiers_map = $packet_identifiers_map ?? ;
    $this->program_name = $program_name ?? ;
  }
}

class DescribeMultiplexRequest {
  public __string $multiplex_id;

  public function __construct(shape(
  ?'multiplex_id' => __string,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
  }
}

class DescribeMultiplexResponse {
  public __string $arn;
  public __listOf__string $availability_zones;
  public __listOfMultiplexOutputDestination $destinations;
  public __string $id;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
  public __integer $pipelines_running_count;
  public __integer $program_count;
  public MultiplexState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'availability_zones' => __listOf__string,
  ?'destinations' => __listOfMultiplexOutputDestination,
  ?'id' => __string,
  ?'multiplex_settings' => MultiplexSettings,
  ?'name' => __string,
  ?'pipelines_running_count' => __integer,
  ?'program_count' => __integer,
  ?'state' => MultiplexState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->availability_zones = $availability_zones ?? ;
    $this->destinations = $destinations ?? ;
    $this->id = $id ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->program_count = $program_count ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class DescribeOfferingRequest {
  public __string $offering_id;

  public function __construct(shape(
  ?'offering_id' => __string,
  ) $s = shape()) {
    $this->offering_id = $offering_id ?? ;
  }
}

class DescribeOfferingResponse {
  public __string $arn;
  public __string $currency_code;
  public __integer $duration;
  public OfferingDurationUnits $duration_units;
  public __double $fixed_price;
  public __string $offering_description;
  public __string $offering_id;
  public OfferingType $offering_type;
  public __string $region;
  public ReservationResourceSpecification $resource_specification;
  public __double $usage_price;

  public function __construct(shape(
  ?'arn' => __string,
  ?'currency_code' => __string,
  ?'duration' => __integer,
  ?'duration_units' => OfferingDurationUnits,
  ?'fixed_price' => __double,
  ?'offering_description' => __string,
  ?'offering_id' => __string,
  ?'offering_type' => OfferingType,
  ?'region' => __string,
  ?'resource_specification' => ReservationResourceSpecification,
  ?'usage_price' => __double,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->currency_code = $currency_code ?? ;
    $this->duration = $duration ?? ;
    $this->duration_units = $duration_units ?? ;
    $this->fixed_price = $fixed_price ?? ;
    $this->offering_description = $offering_description ?? ;
    $this->offering_id = $offering_id ?? ;
    $this->offering_type = $offering_type ?? "";
    $this->region = $region ?? ;
    $this->resource_specification = $resource_specification ?? ;
    $this->usage_price = $usage_price ?? ;
  }
}

class DescribeReservationRequest {
  public __string $reservation_id;

  public function __construct(shape(
  ?'reservation_id' => __string,
  ) $s = shape()) {
    $this->reservation_id = $reservation_id ?? ;
  }
}

class DescribeReservationResponse {
  public __string $arn;
  public __integer $count;
  public __string $currency_code;
  public __integer $duration;
  public OfferingDurationUnits $duration_units;
  public __string $end;
  public __double $fixed_price;
  public __string $name;
  public __string $offering_description;
  public __string $offering_id;
  public OfferingType $offering_type;
  public __string $region;
  public __string $reservation_id;
  public ReservationResourceSpecification $resource_specification;
  public __string $start;
  public ReservationState $state;
  public Tags $tags;
  public __double $usage_price;

  public function __construct(shape(
  ?'arn' => __string,
  ?'count' => __integer,
  ?'currency_code' => __string,
  ?'duration' => __integer,
  ?'duration_units' => OfferingDurationUnits,
  ?'end' => __string,
  ?'fixed_price' => __double,
  ?'name' => __string,
  ?'offering_description' => __string,
  ?'offering_id' => __string,
  ?'offering_type' => OfferingType,
  ?'region' => __string,
  ?'reservation_id' => __string,
  ?'resource_specification' => ReservationResourceSpecification,
  ?'start' => __string,
  ?'state' => ReservationState,
  ?'tags' => Tags,
  ?'usage_price' => __double,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->count = $count ?? ;
    $this->currency_code = $currency_code ?? ;
    $this->duration = $duration ?? ;
    $this->duration_units = $duration_units ?? ;
    $this->end = $end ?? ;
    $this->fixed_price = $fixed_price ?? ;
    $this->name = $name ?? ;
    $this->offering_description = $offering_description ?? ;
    $this->offering_id = $offering_id ?? ;
    $this->offering_type = $offering_type ?? "";
    $this->region = $region ?? ;
    $this->reservation_id = $reservation_id ?? ;
    $this->resource_specification = $resource_specification ?? ;
    $this->start = $start ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
    $this->usage_price = $usage_price ?? ;
  }
}

class DescribeScheduleRequest {
  public __string $channel_id;
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'channel_id' => __string,
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeScheduleResponse {
  public __string $next_token;
  public __listOfScheduleAction $schedule_actions;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'schedule_actions' => __listOfScheduleAction,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->schedule_actions = $schedule_actions ?? ;
  }
}

class DvbNitSettings {
  public __integerMin0Max65536 $network_id;
  public __stringMin1Max256 $network_name;
  public __integerMin25Max10000 $rep_interval;

  public function __construct(shape(
  ?'network_id' => __integerMin0Max65536,
  ?'network_name' => __stringMin1Max256,
  ?'rep_interval' => __integerMin25Max10000,
  ) $s = shape()) {
    $this->network_id = $network_id ?? ;
    $this->network_name = $network_name ?? ;
    $this->rep_interval = $rep_interval ?? ;
  }
}

type DvbSdtOutputSdt = string;

class DvbSdtSettings {
  public DvbSdtOutputSdt $output_sdt;
  public __integerMin25Max2000 $rep_interval;
  public __stringMin1Max256 $service_name;
  public __stringMin1Max256 $service_provider_name;

  public function __construct(shape(
  ?'output_sdt' => DvbSdtOutputSdt,
  ?'rep_interval' => __integerMin25Max2000,
  ?'service_name' => __stringMin1Max256,
  ?'service_provider_name' => __stringMin1Max256,
  ) $s = shape()) {
    $this->output_sdt = $output_sdt ?? ;
    $this->rep_interval = $rep_interval ?? ;
    $this->service_name = $service_name ?? ;
    $this->service_provider_name = $service_provider_name ?? ;
  }
}

type DvbSubDestinationAlignment = string;

type DvbSubDestinationBackgroundColor = string;

type DvbSubDestinationFontColor = string;

type DvbSubDestinationOutlineColor = string;

class DvbSubDestinationSettings {
  public DvbSubDestinationAlignment $alignment;
  public DvbSubDestinationBackgroundColor $background_color;
  public __integerMin0Max255 $background_opacity;
  public InputLocation $font;
  public DvbSubDestinationFontColor $font_color;
  public __integerMin0Max255 $font_opacity;
  public __integerMin96Max600 $font_resolution;
  public __string $font_size;
  public DvbSubDestinationOutlineColor $outline_color;
  public __integerMin0Max10 $outline_size;
  public DvbSubDestinationShadowColor $shadow_color;
  public __integerMin0Max255 $shadow_opacity;
  public __integer $shadow_x_offset;
  public __integer $shadow_y_offset;
  public DvbSubDestinationTeletextGridControl $teletext_grid_control;
  public __integerMin0 $x_position;
  public __integerMin0 $y_position;

  public function __construct(shape(
  ?'alignment' => DvbSubDestinationAlignment,
  ?'background_color' => DvbSubDestinationBackgroundColor,
  ?'background_opacity' => __integerMin0Max255,
  ?'font' => InputLocation,
  ?'font_color' => DvbSubDestinationFontColor,
  ?'font_opacity' => __integerMin0Max255,
  ?'font_resolution' => __integerMin96Max600,
  ?'font_size' => __string,
  ?'outline_color' => DvbSubDestinationOutlineColor,
  ?'outline_size' => __integerMin0Max10,
  ?'shadow_color' => DvbSubDestinationShadowColor,
  ?'shadow_opacity' => __integerMin0Max255,
  ?'shadow_x_offset' => __integer,
  ?'shadow_y_offset' => __integer,
  ?'teletext_grid_control' => DvbSubDestinationTeletextGridControl,
  ?'x_position' => __integerMin0,
  ?'y_position' => __integerMin0,
  ) $s = shape()) {
    $this->alignment = $alignment ?? ;
    $this->background_color = $background_color ?? ;
    $this->background_opacity = $background_opacity ?? ;
    $this->font = $font ?? ;
    $this->font_color = $font_color ?? ;
    $this->font_opacity = $font_opacity ?? ;
    $this->font_resolution = $font_resolution ?? ;
    $this->font_size = $font_size ?? ;
    $this->outline_color = $outline_color ?? ;
    $this->outline_size = $outline_size ?? ;
    $this->shadow_color = $shadow_color ?? ;
    $this->shadow_opacity = $shadow_opacity ?? ;
    $this->shadow_x_offset = $shadow_x_offset ?? ;
    $this->shadow_y_offset = $shadow_y_offset ?? ;
    $this->teletext_grid_control = $teletext_grid_control ?? ;
    $this->x_position = $x_position ?? ;
    $this->y_position = $y_position ?? ;
  }
}

type DvbSubDestinationShadowColor = string;

type DvbSubDestinationTeletextGridControl = string;

class DvbSubSourceSettings {
  public __integerMin1 $pid;

  public function __construct(shape(
  ?'pid' => __integerMin1,
  ) $s = shape()) {
    $this->pid = $pid ?? ;
  }
}

class DvbTdtSettings {
  public __integerMin1000Max30000 $rep_interval;

  public function __construct(shape(
  ?'rep_interval' => __integerMin1000Max30000,
  ) $s = shape()) {
    $this->rep_interval = $rep_interval ?? ;
  }
}

type Eac3AttenuationControl = string;

type Eac3BitstreamMode = string;

type Eac3CodingMode = string;

type Eac3DcFilter = string;

type Eac3DrcLine = string;

type Eac3DrcRf = string;

type Eac3LfeControl = string;

type Eac3LfeFilter = string;

type Eac3MetadataControl = string;

type Eac3PassthroughControl = string;

type Eac3PhaseControl = string;

class Eac3Settings {
  public Eac3AttenuationControl $attenuation_control;
  public __double $bitrate;
  public Eac3BitstreamMode $bitstream_mode;
  public Eac3CodingMode $coding_mode;
  public Eac3DcFilter $dc_filter;
  public __integerMin1Max31 $dialnorm;
  public Eac3DrcLine $drc_line;
  public Eac3DrcRf $drc_rf;
  public Eac3LfeControl $lfe_control;
  public Eac3LfeFilter $lfe_filter;
  public __double $lo_ro_center_mix_level;
  public __double $lo_ro_surround_mix_level;
  public __double $lt_rt_center_mix_level;
  public __double $lt_rt_surround_mix_level;
  public Eac3MetadataControl $metadata_control;
  public Eac3PassthroughControl $passthrough_control;
  public Eac3PhaseControl $phase_control;
  public Eac3StereoDownmix $stereo_downmix;
  public Eac3SurroundExMode $surround_ex_mode;
  public Eac3SurroundMode $surround_mode;

  public function __construct(shape(
  ?'attenuation_control' => Eac3AttenuationControl,
  ?'bitrate' => __double,
  ?'bitstream_mode' => Eac3BitstreamMode,
  ?'coding_mode' => Eac3CodingMode,
  ?'dc_filter' => Eac3DcFilter,
  ?'dialnorm' => __integerMin1Max31,
  ?'drc_line' => Eac3DrcLine,
  ?'drc_rf' => Eac3DrcRf,
  ?'lfe_control' => Eac3LfeControl,
  ?'lfe_filter' => Eac3LfeFilter,
  ?'lo_ro_center_mix_level' => __double,
  ?'lo_ro_surround_mix_level' => __double,
  ?'lt_rt_center_mix_level' => __double,
  ?'lt_rt_surround_mix_level' => __double,
  ?'metadata_control' => Eac3MetadataControl,
  ?'passthrough_control' => Eac3PassthroughControl,
  ?'phase_control' => Eac3PhaseControl,
  ?'stereo_downmix' => Eac3StereoDownmix,
  ?'surround_ex_mode' => Eac3SurroundExMode,
  ?'surround_mode' => Eac3SurroundMode,
  ) $s = shape()) {
    $this->attenuation_control = $attenuation_control ?? ;
    $this->bitrate = $bitrate ?? ;
    $this->bitstream_mode = $bitstream_mode ?? ;
    $this->coding_mode = $coding_mode ?? ;
    $this->dc_filter = $dc_filter ?? ;
    $this->dialnorm = $dialnorm ?? ;
    $this->drc_line = $drc_line ?? ;
    $this->drc_rf = $drc_rf ?? ;
    $this->lfe_control = $lfe_control ?? ;
    $this->lfe_filter = $lfe_filter ?? ;
    $this->lo_ro_center_mix_level = $lo_ro_center_mix_level ?? ;
    $this->lo_ro_surround_mix_level = $lo_ro_surround_mix_level ?? ;
    $this->lt_rt_center_mix_level = $lt_rt_center_mix_level ?? ;
    $this->lt_rt_surround_mix_level = $lt_rt_surround_mix_level ?? ;
    $this->metadata_control = $metadata_control ?? ;
    $this->passthrough_control = $passthrough_control ?? ;
    $this->phase_control = $phase_control ?? ;
    $this->stereo_downmix = $stereo_downmix ?? ;
    $this->surround_ex_mode = $surround_ex_mode ?? ;
    $this->surround_mode = $surround_mode ?? ;
  }
}

type Eac3StereoDownmix = string;

type Eac3SurroundExMode = string;

type Eac3SurroundMode = string;

type EmbeddedConvert608To708 = string;

class EmbeddedDestinationSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EmbeddedPlusScte20DestinationSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EmbeddedScte20Detection = string;

class EmbeddedSourceSettings {
  public EmbeddedConvert608To708 $convert_608_to_708;
  public EmbeddedScte20Detection $scte_20_detection;
  public __integerMin1Max4 $source_608_channel_number;
  public __integerMin1Max5 $source_608_track_number;

  public function __construct(shape(
  ?'convert_608_to_708' => EmbeddedConvert608To708,
  ?'scte_20_detection' => EmbeddedScte20Detection,
  ?'source_608_channel_number' => __integerMin1Max4,
  ?'source_608_track_number' => __integerMin1Max5,
  ) $s = shape()) {
    $this->convert_608_to_708 = $convert_608_to_708 ?? ;
    $this->scte_20_detection = $scte_20_detection ?? ;
    $this->source_608_channel_number = $source_608_channel_number ?? ;
    $this->source_608_track_number = $source_608_track_number ?? ;
  }
}

class Empty {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EncoderSettings {
  public __listOfAudioDescription $audio_descriptions;
  public AvailBlanking $avail_blanking;
  public AvailConfiguration $avail_configuration;
  public BlackoutSlate $blackout_slate;
  public __listOfCaptionDescription $caption_descriptions;
  public GlobalConfiguration $global_configuration;
  public NielsenConfiguration $nielsen_configuration;
  public __listOfOutputGroup $output_groups;
  public TimecodeConfig $timecode_config;
  public __listOfVideoDescription $video_descriptions;

  public function __construct(shape(
  ?'audio_descriptions' => __listOfAudioDescription,
  ?'avail_blanking' => AvailBlanking,
  ?'avail_configuration' => AvailConfiguration,
  ?'blackout_slate' => BlackoutSlate,
  ?'caption_descriptions' => __listOfCaptionDescription,
  ?'global_configuration' => GlobalConfiguration,
  ?'nielsen_configuration' => NielsenConfiguration,
  ?'output_groups' => __listOfOutputGroup,
  ?'timecode_config' => TimecodeConfig,
  ?'video_descriptions' => __listOfVideoDescription,
  ) $s = shape()) {
    $this->audio_descriptions = $audio_descriptions ?? ;
    $this->avail_blanking = $avail_blanking ?? null;
    $this->avail_configuration = $avail_configuration ?? null;
    $this->blackout_slate = $blackout_slate ?? null;
    $this->caption_descriptions = $caption_descriptions ?? ;
    $this->global_configuration = $global_configuration ?? null;
    $this->nielsen_configuration = $nielsen_configuration ?? null;
    $this->output_groups = $output_groups ?? ;
    $this->timecode_config = $timecode_config ?? null;
    $this->video_descriptions = $video_descriptions ?? ;
  }
}

type FecOutputIncludeFec = string;

class FecOutputSettings {
  public __integerMin4Max20 $column_depth;
  public FecOutputIncludeFec $include_fec;
  public __integerMin1Max20 $row_length;

  public function __construct(shape(
  ?'column_depth' => __integerMin4Max20,
  ?'include_fec' => FecOutputIncludeFec,
  ?'row_length' => __integerMin1Max20,
  ) $s = shape()) {
    $this->column_depth = $column_depth ?? ;
    $this->include_fec = $include_fec ?? ;
    $this->row_length = $row_length ?? ;
  }
}

type FixedAfd = string;

class FixedModeScheduleActionStartSettings {
  public __string $time;

  public function __construct(shape(
  ?'time' => __string,
  ) $s = shape()) {
    $this->time = $time ?? ;
  }
}

class Fmp4HlsSettings {
  public __string $audio_rendition_sets;

  public function __construct(shape(
  ?'audio_rendition_sets' => __string,
  ) $s = shape()) {
    $this->audio_rendition_sets = $audio_rendition_sets ?? ;
  }
}

class FollowModeScheduleActionStartSettings {
  public FollowPoint $follow_point;
  public __string $reference_action_name;

  public function __construct(shape(
  ?'follow_point' => FollowPoint,
  ?'reference_action_name' => __string,
  ) $s = shape()) {
    $this->follow_point = $follow_point ?? "";
    $this->reference_action_name = $reference_action_name ?? ;
  }
}

type FollowPoint = string;

class ForbiddenException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class FrameCaptureGroupSettings {
  public OutputLocationRef $destination;

  public function __construct(shape(
  ?'destination' => OutputLocationRef,
  ) $s = shape()) {
    $this->destination = $destination ?? ;
  }
}

type FrameCaptureIntervalUnit = string;

class FrameCaptureOutputSettings {
  public __string $name_modifier;

  public function __construct(shape(
  ?'name_modifier' => __string,
  ) $s = shape()) {
    $this->name_modifier = $name_modifier ?? ;
  }
}

class FrameCaptureSettings {
  public __integerMin1Max3600000 $capture_interval;
  public FrameCaptureIntervalUnit $capture_interval_units;

  public function __construct(shape(
  ?'capture_interval' => __integerMin1Max3600000,
  ?'capture_interval_units' => FrameCaptureIntervalUnit,
  ) $s = shape()) {
    $this->capture_interval = $capture_interval ?? ;
    $this->capture_interval_units = $capture_interval_units ?? ;
  }
}

class GatewayTimeoutException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class GlobalConfiguration {
  public __integerMinNegative60Max60 $initial_audio_gain;
  public GlobalConfigurationInputEndAction $input_end_action;
  public InputLossBehavior $input_loss_behavior;
  public GlobalConfigurationOutputLockingMode $output_locking_mode;
  public GlobalConfigurationOutputTimingSource $output_timing_source;
  public GlobalConfigurationLowFramerateInputs $support_low_framerate_inputs;

  public function __construct(shape(
  ?'initial_audio_gain' => __integerMinNegative60Max60,
  ?'input_end_action' => GlobalConfigurationInputEndAction,
  ?'input_loss_behavior' => InputLossBehavior,
  ?'output_locking_mode' => GlobalConfigurationOutputLockingMode,
  ?'output_timing_source' => GlobalConfigurationOutputTimingSource,
  ?'support_low_framerate_inputs' => GlobalConfigurationLowFramerateInputs,
  ) $s = shape()) {
    $this->initial_audio_gain = $initial_audio_gain ?? ;
    $this->input_end_action = $input_end_action ?? ;
    $this->input_loss_behavior = $input_loss_behavior ?? null;
    $this->output_locking_mode = $output_locking_mode ?? ;
    $this->output_timing_source = $output_timing_source ?? ;
    $this->support_low_framerate_inputs = $support_low_framerate_inputs ?? ;
  }
}

type GlobalConfigurationInputEndAction = string;

type GlobalConfigurationLowFramerateInputs = string;

type GlobalConfigurationOutputLockingMode = string;

type GlobalConfigurationOutputTimingSource = string;

type H264AdaptiveQuantization = string;

type H264ColorMetadata = string;

class H264ColorSpaceSettings {
  public ColorSpacePassthroughSettings $color_space_passthrough_settings;
  public Rec601Settings $rec_601_settings;
  public Rec709Settings $rec_709_settings;

  public function __construct(shape(
  ?'color_space_passthrough_settings' => ColorSpacePassthroughSettings,
  ?'rec_601_settings' => Rec601Settings,
  ?'rec_709_settings' => Rec709Settings,
  ) $s = shape()) {
    $this->color_space_passthrough_settings = $color_space_passthrough_settings ?? null;
    $this->rec_601_settings = $rec_601_settings ?? null;
    $this->rec_709_settings = $rec_709_settings ?? null;
  }
}

type H264EntropyEncoding = string;

type H264FlickerAq = string;

type H264ForceFieldPictures = string;

type H264FramerateControl = string;

type H264GopBReference = string;

type H264GopSizeUnits = string;

type H264Level = string;

type H264LookAheadRateControl = string;

type H264ParControl = string;

type H264Profile = string;

type H264RateControlMode = string;

type H264ScanType = string;

type H264SceneChangeDetect = string;

class H264Settings {
  public H264AdaptiveQuantization $adaptive_quantization;
  public AfdSignaling $afd_signaling;
  public __integerMin1000 $bitrate;
  public __integerMin0Max100 $buf_fill_pct;
  public __integerMin0 $buf_size;
  public H264ColorMetadata $color_metadata;
  public H264ColorSpaceSettings $color_space_settings;
  public H264EntropyEncoding $entropy_encoding;
  public FixedAfd $fixed_afd;
  public H264FlickerAq $flicker_aq;
  public H264ForceFieldPictures $force_field_pictures;
  public H264FramerateControl $framerate_control;
  public __integerMin1 $framerate_denominator;
  public __integerMin1 $framerate_numerator;
  public H264GopBReference $gop_b_reference;
  public __integerMin0 $gop_closed_cadence;
  public __integerMin0Max7 $gop_num_b_frames;
  public __double $gop_size;
  public H264GopSizeUnits $gop_size_units;
  public H264Level $level;
  public H264LookAheadRateControl $look_ahead_rate_control;
  public __integerMin1000 $max_bitrate;
  public __integerMin0Max30 $min_i_interval;
  public __integerMin1Max6 $num_ref_frames;
  public H264ParControl $par_control;
  public __integerMin1 $par_denominator;
  public __integer $par_numerator;
  public H264Profile $profile;
  public __integerMin1Max10 $qvbr_quality_level;
  public H264RateControlMode $rate_control_mode;
  public H264ScanType $scan_type;
  public H264SceneChangeDetect $scene_change_detect;
  public __integerMin1Max32 $slices;
  public __integerMin0Max128 $softness;
  public H264SpatialAq $spatial_aq;
  public H264SubGopLength $subgop_length;
  public H264Syntax $syntax;
  public H264TemporalAq $temporal_aq;
  public H264TimecodeInsertionBehavior $timecode_insertion;

  public function __construct(shape(
  ?'adaptive_quantization' => H264AdaptiveQuantization,
  ?'afd_signaling' => AfdSignaling,
  ?'bitrate' => __integerMin1000,
  ?'buf_fill_pct' => __integerMin0Max100,
  ?'buf_size' => __integerMin0,
  ?'color_metadata' => H264ColorMetadata,
  ?'color_space_settings' => H264ColorSpaceSettings,
  ?'entropy_encoding' => H264EntropyEncoding,
  ?'fixed_afd' => FixedAfd,
  ?'flicker_aq' => H264FlickerAq,
  ?'force_field_pictures' => H264ForceFieldPictures,
  ?'framerate_control' => H264FramerateControl,
  ?'framerate_denominator' => __integerMin1,
  ?'framerate_numerator' => __integerMin1,
  ?'gop_b_reference' => H264GopBReference,
  ?'gop_closed_cadence' => __integerMin0,
  ?'gop_num_b_frames' => __integerMin0Max7,
  ?'gop_size' => __double,
  ?'gop_size_units' => H264GopSizeUnits,
  ?'level' => H264Level,
  ?'look_ahead_rate_control' => H264LookAheadRateControl,
  ?'max_bitrate' => __integerMin1000,
  ?'min_i_interval' => __integerMin0Max30,
  ?'num_ref_frames' => __integerMin1Max6,
  ?'par_control' => H264ParControl,
  ?'par_denominator' => __integerMin1,
  ?'par_numerator' => __integer,
  ?'profile' => H264Profile,
  ?'qvbr_quality_level' => __integerMin1Max10,
  ?'rate_control_mode' => H264RateControlMode,
  ?'scan_type' => H264ScanType,
  ?'scene_change_detect' => H264SceneChangeDetect,
  ?'slices' => __integerMin1Max32,
  ?'softness' => __integerMin0Max128,
  ?'spatial_aq' => H264SpatialAq,
  ?'subgop_length' => H264SubGopLength,
  ?'syntax' => H264Syntax,
  ?'temporal_aq' => H264TemporalAq,
  ?'timecode_insertion' => H264TimecodeInsertionBehavior,
  ) $s = shape()) {
    $this->adaptive_quantization = $adaptive_quantization ?? ;
    $this->afd_signaling = $afd_signaling ?? "";
    $this->bitrate = $bitrate ?? ;
    $this->buf_fill_pct = $buf_fill_pct ?? ;
    $this->buf_size = $buf_size ?? ;
    $this->color_metadata = $color_metadata ?? ;
    $this->color_space_settings = $color_space_settings ?? ;
    $this->entropy_encoding = $entropy_encoding ?? ;
    $this->fixed_afd = $fixed_afd ?? "";
    $this->flicker_aq = $flicker_aq ?? ;
    $this->force_field_pictures = $force_field_pictures ?? ;
    $this->framerate_control = $framerate_control ?? ;
    $this->framerate_denominator = $framerate_denominator ?? ;
    $this->framerate_numerator = $framerate_numerator ?? ;
    $this->gop_b_reference = $gop_b_reference ?? ;
    $this->gop_closed_cadence = $gop_closed_cadence ?? ;
    $this->gop_num_b_frames = $gop_num_b_frames ?? ;
    $this->gop_size = $gop_size ?? ;
    $this->gop_size_units = $gop_size_units ?? ;
    $this->level = $level ?? ;
    $this->look_ahead_rate_control = $look_ahead_rate_control ?? ;
    $this->max_bitrate = $max_bitrate ?? ;
    $this->min_i_interval = $min_i_interval ?? ;
    $this->num_ref_frames = $num_ref_frames ?? ;
    $this->par_control = $par_control ?? ;
    $this->par_denominator = $par_denominator ?? ;
    $this->par_numerator = $par_numerator ?? ;
    $this->profile = $profile ?? ;
    $this->qvbr_quality_level = $qvbr_quality_level ?? ;
    $this->rate_control_mode = $rate_control_mode ?? ;
    $this->scan_type = $scan_type ?? ;
    $this->scene_change_detect = $scene_change_detect ?? ;
    $this->slices = $slices ?? ;
    $this->softness = $softness ?? ;
    $this->spatial_aq = $spatial_aq ?? ;
    $this->subgop_length = $subgop_length ?? ;
    $this->syntax = $syntax ?? ;
    $this->temporal_aq = $temporal_aq ?? ;
    $this->timecode_insertion = $timecode_insertion ?? ;
  }
}

type H264SpatialAq = string;

type H264SubGopLength = string;

type H264Syntax = string;

type H264TemporalAq = string;

type H264TimecodeInsertionBehavior = string;

type H265AdaptiveQuantization = string;

type H265AlternativeTransferFunction = string;

type H265ColorMetadata = string;

class H265ColorSpaceSettings {
  public ColorSpacePassthroughSettings $color_space_passthrough_settings;
  public Hdr10Settings $hdr_10_settings;
  public Rec601Settings $rec_601_settings;
  public Rec709Settings $rec_709_settings;

  public function __construct(shape(
  ?'color_space_passthrough_settings' => ColorSpacePassthroughSettings,
  ?'hdr_10_settings' => Hdr10Settings,
  ?'rec_601_settings' => Rec601Settings,
  ?'rec_709_settings' => Rec709Settings,
  ) $s = shape()) {
    $this->color_space_passthrough_settings = $color_space_passthrough_settings ?? null;
    $this->hdr_10_settings = $hdr_10_settings ?? null;
    $this->rec_601_settings = $rec_601_settings ?? null;
    $this->rec_709_settings = $rec_709_settings ?? null;
  }
}

type H265FlickerAq = string;

type H265GopSizeUnits = string;

type H265Level = string;

type H265LookAheadRateControl = string;

type H265Profile = string;

type H265RateControlMode = string;

type H265ScanType = string;

type H265SceneChangeDetect = string;

class H265Settings {
  public H265AdaptiveQuantization $adaptive_quantization;
  public AfdSignaling $afd_signaling;
  public H265AlternativeTransferFunction $alternative_transfer_function;
  public __integerMin100000Max40000000 $bitrate;
  public __integerMin100000Max80000000 $buf_size;
  public H265ColorMetadata $color_metadata;
  public H265ColorSpaceSettings $color_space_settings;
  public FixedAfd $fixed_afd;
  public H265FlickerAq $flicker_aq;
  public __integerMin1Max3003 $framerate_denominator;
  public __integerMin1 $framerate_numerator;
  public __integerMin0 $gop_closed_cadence;
  public __double $gop_size;
  public H265GopSizeUnits $gop_size_units;
  public H265Level $level;
  public H265LookAheadRateControl $look_ahead_rate_control;
  public __integerMin100000Max40000000 $max_bitrate;
  public __integerMin0Max30 $min_i_interval;
  public __integerMin1 $par_denominator;
  public __integerMin1 $par_numerator;
  public H265Profile $profile;
  public __integerMin1Max10 $qvbr_quality_level;
  public H265RateControlMode $rate_control_mode;
  public H265ScanType $scan_type;
  public H265SceneChangeDetect $scene_change_detect;
  public __integerMin1Max16 $slices;
  public H265Tier $tier;
  public H265TimecodeInsertionBehavior $timecode_insertion;

  public function __construct(shape(
  ?'adaptive_quantization' => H265AdaptiveQuantization,
  ?'afd_signaling' => AfdSignaling,
  ?'alternative_transfer_function' => H265AlternativeTransferFunction,
  ?'bitrate' => __integerMin100000Max40000000,
  ?'buf_size' => __integerMin100000Max80000000,
  ?'color_metadata' => H265ColorMetadata,
  ?'color_space_settings' => H265ColorSpaceSettings,
  ?'fixed_afd' => FixedAfd,
  ?'flicker_aq' => H265FlickerAq,
  ?'framerate_denominator' => __integerMin1Max3003,
  ?'framerate_numerator' => __integerMin1,
  ?'gop_closed_cadence' => __integerMin0,
  ?'gop_size' => __double,
  ?'gop_size_units' => H265GopSizeUnits,
  ?'level' => H265Level,
  ?'look_ahead_rate_control' => H265LookAheadRateControl,
  ?'max_bitrate' => __integerMin100000Max40000000,
  ?'min_i_interval' => __integerMin0Max30,
  ?'par_denominator' => __integerMin1,
  ?'par_numerator' => __integerMin1,
  ?'profile' => H265Profile,
  ?'qvbr_quality_level' => __integerMin1Max10,
  ?'rate_control_mode' => H265RateControlMode,
  ?'scan_type' => H265ScanType,
  ?'scene_change_detect' => H265SceneChangeDetect,
  ?'slices' => __integerMin1Max16,
  ?'tier' => H265Tier,
  ?'timecode_insertion' => H265TimecodeInsertionBehavior,
  ) $s = shape()) {
    $this->adaptive_quantization = $adaptive_quantization ?? ;
    $this->afd_signaling = $afd_signaling ?? "";
    $this->alternative_transfer_function = $alternative_transfer_function ?? ;
    $this->bitrate = $bitrate ?? ;
    $this->buf_size = $buf_size ?? ;
    $this->color_metadata = $color_metadata ?? ;
    $this->color_space_settings = $color_space_settings ?? ;
    $this->fixed_afd = $fixed_afd ?? "";
    $this->flicker_aq = $flicker_aq ?? ;
    $this->framerate_denominator = $framerate_denominator ?? ;
    $this->framerate_numerator = $framerate_numerator ?? ;
    $this->gop_closed_cadence = $gop_closed_cadence ?? ;
    $this->gop_size = $gop_size ?? ;
    $this->gop_size_units = $gop_size_units ?? ;
    $this->level = $level ?? ;
    $this->look_ahead_rate_control = $look_ahead_rate_control ?? ;
    $this->max_bitrate = $max_bitrate ?? ;
    $this->min_i_interval = $min_i_interval ?? ;
    $this->par_denominator = $par_denominator ?? ;
    $this->par_numerator = $par_numerator ?? ;
    $this->profile = $profile ?? ;
    $this->qvbr_quality_level = $qvbr_quality_level ?? ;
    $this->rate_control_mode = $rate_control_mode ?? ;
    $this->scan_type = $scan_type ?? ;
    $this->scene_change_detect = $scene_change_detect ?? ;
    $this->slices = $slices ?? ;
    $this->tier = $tier ?? ;
    $this->timecode_insertion = $timecode_insertion ?? ;
  }
}

type H265Tier = string;

type H265TimecodeInsertionBehavior = string;

class Hdr10Settings {
  public __integerMin0Max32768 $max_cll;
  public __integerMin0Max32768 $max_fall;

  public function __construct(shape(
  ?'max_cll' => __integerMin0Max32768,
  ?'max_fall' => __integerMin0Max32768,
  ) $s = shape()) {
    $this->max_cll = $max_cll ?? ;
    $this->max_fall = $max_fall ?? ;
  }
}

type HlsAdMarkers = string;

type HlsAkamaiHttpTransferMode = string;

class HlsAkamaiSettings {
  public __integerMin0 $connection_retry_interval;
  public __integerMin0Max600 $filecache_duration;
  public HlsAkamaiHttpTransferMode $http_transfer_mode;
  public __integerMin0 $num_retries;
  public __integerMin0Max15 $restart_delay;
  public __string $salt;
  public __string $token;

  public function __construct(shape(
  ?'connection_retry_interval' => __integerMin0,
  ?'filecache_duration' => __integerMin0Max600,
  ?'http_transfer_mode' => HlsAkamaiHttpTransferMode,
  ?'num_retries' => __integerMin0,
  ?'restart_delay' => __integerMin0Max15,
  ?'salt' => __string,
  ?'token' => __string,
  ) $s = shape()) {
    $this->connection_retry_interval = $connection_retry_interval ?? ;
    $this->filecache_duration = $filecache_duration ?? ;
    $this->http_transfer_mode = $http_transfer_mode ?? ;
    $this->num_retries = $num_retries ?? ;
    $this->restart_delay = $restart_delay ?? ;
    $this->salt = $salt ?? ;
    $this->token = $token ?? ;
  }
}

class HlsBasicPutSettings {
  public __integerMin0 $connection_retry_interval;
  public __integerMin0Max600 $filecache_duration;
  public __integerMin0 $num_retries;
  public __integerMin0Max15 $restart_delay;

  public function __construct(shape(
  ?'connection_retry_interval' => __integerMin0,
  ?'filecache_duration' => __integerMin0Max600,
  ?'num_retries' => __integerMin0,
  ?'restart_delay' => __integerMin0Max15,
  ) $s = shape()) {
    $this->connection_retry_interval = $connection_retry_interval ?? ;
    $this->filecache_duration = $filecache_duration ?? ;
    $this->num_retries = $num_retries ?? ;
    $this->restart_delay = $restart_delay ?? ;
  }
}

type HlsCaptionLanguageSetting = string;

class HlsCdnSettings {
  public HlsAkamaiSettings $hls_akamai_settings;
  public HlsBasicPutSettings $hls_basic_put_settings;
  public HlsMediaStoreSettings $hls_media_store_settings;
  public HlsWebdavSettings $hls_webdav_settings;

  public function __construct(shape(
  ?'hls_akamai_settings' => HlsAkamaiSettings,
  ?'hls_basic_put_settings' => HlsBasicPutSettings,
  ?'hls_media_store_settings' => HlsMediaStoreSettings,
  ?'hls_webdav_settings' => HlsWebdavSettings,
  ) $s = shape()) {
    $this->hls_akamai_settings = $hls_akamai_settings ?? null;
    $this->hls_basic_put_settings = $hls_basic_put_settings ?? null;
    $this->hls_media_store_settings = $hls_media_store_settings ?? null;
    $this->hls_webdav_settings = $hls_webdav_settings ?? null;
  }
}

type HlsClientCache = string;

type HlsCodecSpecification = string;

type HlsDirectoryStructure = string;

type HlsEncryptionType = string;

class HlsGroupSettings {
  public __listOfHlsAdMarkers $ad_markers;
  public __string $base_url_content;
  public __string $base_url_content_1;
  public __string $base_url_manifest;
  public __string $base_url_manifest_1;
  public __listOfCaptionLanguageMapping $caption_language_mappings;
  public HlsCaptionLanguageSetting $caption_language_setting;
  public HlsClientCache $client_cache;
  public HlsCodecSpecification $codec_specification;
  public __stringMin32Max32 $constant_iv;
  public OutputLocationRef $destination;
  public HlsDirectoryStructure $directory_structure;
  public HlsEncryptionType $encryption_type;
  public HlsCdnSettings $hls_cdn_settings;
  public HlsId3SegmentTaggingState $hls_id_3_segment_tagging;
  public IFrameOnlyPlaylistType $i_frame_only_playlists;
  public __integerMin3 $index_n_segments;
  public InputLossActionForHlsOut $input_loss_action;
  public HlsIvInManifest $iv_in_manifest;
  public HlsIvSource $iv_source;
  public __integerMin1 $keep_segments;
  public __string $key_format;
  public __string $key_format_versions;
  public KeyProviderSettings $key_provider_settings;
  public HlsManifestCompression $manifest_compression;
  public HlsManifestDurationFormat $manifest_duration_format;
  public __integerMin0 $min_segment_length;
  public HlsMode $mode;
  public HlsOutputSelection $output_selection;
  public HlsProgramDateTime $program_date_time;
  public __integerMin0Max3600 $program_date_time_period;
  public HlsRedundantManifest $redundant_manifest;
  public __integerMin1 $segment_length;
  public HlsSegmentationMode $segmentation_mode;
  public __integerMin1 $segments_per_subdirectory;
  public HlsStreamInfResolution $stream_inf_resolution;
  public HlsTimedMetadataId3Frame $timed_metadata_id_3_frame;
  public __integerMin0 $timed_metadata_id_3_period;
  public __integerMin0 $timestamp_delta_milliseconds;
  public HlsTsFileMode $ts_file_mode;

  public function __construct(shape(
  ?'ad_markers' => __listOfHlsAdMarkers,
  ?'base_url_content' => __string,
  ?'base_url_content_1' => __string,
  ?'base_url_manifest' => __string,
  ?'base_url_manifest_1' => __string,
  ?'caption_language_mappings' => __listOfCaptionLanguageMapping,
  ?'caption_language_setting' => HlsCaptionLanguageSetting,
  ?'client_cache' => HlsClientCache,
  ?'codec_specification' => HlsCodecSpecification,
  ?'constant_iv' => __stringMin32Max32,
  ?'destination' => OutputLocationRef,
  ?'directory_structure' => HlsDirectoryStructure,
  ?'encryption_type' => HlsEncryptionType,
  ?'hls_cdn_settings' => HlsCdnSettings,
  ?'hls_id_3_segment_tagging' => HlsId3SegmentTaggingState,
  ?'i_frame_only_playlists' => IFrameOnlyPlaylistType,
  ?'index_n_segments' => __integerMin3,
  ?'input_loss_action' => InputLossActionForHlsOut,
  ?'iv_in_manifest' => HlsIvInManifest,
  ?'iv_source' => HlsIvSource,
  ?'keep_segments' => __integerMin1,
  ?'key_format' => __string,
  ?'key_format_versions' => __string,
  ?'key_provider_settings' => KeyProviderSettings,
  ?'manifest_compression' => HlsManifestCompression,
  ?'manifest_duration_format' => HlsManifestDurationFormat,
  ?'min_segment_length' => __integerMin0,
  ?'mode' => HlsMode,
  ?'output_selection' => HlsOutputSelection,
  ?'program_date_time' => HlsProgramDateTime,
  ?'program_date_time_period' => __integerMin0Max3600,
  ?'redundant_manifest' => HlsRedundantManifest,
  ?'segment_length' => __integerMin1,
  ?'segmentation_mode' => HlsSegmentationMode,
  ?'segments_per_subdirectory' => __integerMin1,
  ?'stream_inf_resolution' => HlsStreamInfResolution,
  ?'timed_metadata_id_3_frame' => HlsTimedMetadataId3Frame,
  ?'timed_metadata_id_3_period' => __integerMin0,
  ?'timestamp_delta_milliseconds' => __integerMin0,
  ?'ts_file_mode' => HlsTsFileMode,
  ) $s = shape()) {
    $this->ad_markers = $ad_markers ?? ;
    $this->base_url_content = $base_url_content ?? ;
    $this->base_url_content_1 = $base_url_content_1 ?? ;
    $this->base_url_manifest = $base_url_manifest ?? ;
    $this->base_url_manifest_1 = $base_url_manifest_1 ?? ;
    $this->caption_language_mappings = $caption_language_mappings ?? ;
    $this->caption_language_setting = $caption_language_setting ?? ;
    $this->client_cache = $client_cache ?? ;
    $this->codec_specification = $codec_specification ?? ;
    $this->constant_iv = $constant_iv ?? ;
    $this->destination = $destination ?? ;
    $this->directory_structure = $directory_structure ?? ;
    $this->encryption_type = $encryption_type ?? ;
    $this->hls_cdn_settings = $hls_cdn_settings ?? null;
    $this->hls_id_3_segment_tagging = $hls_id_3_segment_tagging ?? ;
    $this->i_frame_only_playlists = $i_frame_only_playlists ?? ;
    $this->index_n_segments = $index_n_segments ?? ;
    $this->input_loss_action = $input_loss_action ?? ;
    $this->iv_in_manifest = $iv_in_manifest ?? ;
    $this->iv_source = $iv_source ?? ;
    $this->keep_segments = $keep_segments ?? ;
    $this->key_format = $key_format ?? ;
    $this->key_format_versions = $key_format_versions ?? ;
    $this->key_provider_settings = $key_provider_settings ?? null;
    $this->manifest_compression = $manifest_compression ?? ;
    $this->manifest_duration_format = $manifest_duration_format ?? ;
    $this->min_segment_length = $min_segment_length ?? ;
    $this->mode = $mode ?? ;
    $this->output_selection = $output_selection ?? ;
    $this->program_date_time = $program_date_time ?? ;
    $this->program_date_time_period = $program_date_time_period ?? ;
    $this->redundant_manifest = $redundant_manifest ?? ;
    $this->segment_length = $segment_length ?? ;
    $this->segmentation_mode = $segmentation_mode ?? ;
    $this->segments_per_subdirectory = $segments_per_subdirectory ?? ;
    $this->stream_inf_resolution = $stream_inf_resolution ?? ;
    $this->timed_metadata_id_3_frame = $timed_metadata_id_3_frame ?? ;
    $this->timed_metadata_id_3_period = $timed_metadata_id_3_period ?? ;
    $this->timestamp_delta_milliseconds = $timestamp_delta_milliseconds ?? ;
    $this->ts_file_mode = $ts_file_mode ?? ;
  }
}

type HlsH265PackagingType = string;

class HlsId3SegmentTaggingScheduleActionSettings {
  public __string $tag;

  public function __construct(shape(
  ?'tag' => __string,
  ) $s = shape()) {
    $this->tag = $tag ?? ;
  }
}

type HlsId3SegmentTaggingState = string;

class HlsInputSettings {
  public __integerMin0 $bandwidth;
  public __integerMin0 $buffer_segments;
  public __integerMin0 $retries;
  public __integerMin0 $retry_interval;

  public function __construct(shape(
  ?'bandwidth' => __integerMin0,
  ?'buffer_segments' => __integerMin0,
  ?'retries' => __integerMin0,
  ?'retry_interval' => __integerMin0,
  ) $s = shape()) {
    $this->bandwidth = $bandwidth ?? ;
    $this->buffer_segments = $buffer_segments ?? ;
    $this->retries = $retries ?? ;
    $this->retry_interval = $retry_interval ?? ;
  }
}

type HlsIvInManifest = string;

type HlsIvSource = string;

type HlsManifestCompression = string;

type HlsManifestDurationFormat = string;

class HlsMediaStoreSettings {
  public __integerMin0 $connection_retry_interval;
  public __integerMin0Max600 $filecache_duration;
  public HlsMediaStoreStorageClass $media_store_storage_class;
  public __integerMin0 $num_retries;
  public __integerMin0Max15 $restart_delay;

  public function __construct(shape(
  ?'connection_retry_interval' => __integerMin0,
  ?'filecache_duration' => __integerMin0Max600,
  ?'media_store_storage_class' => HlsMediaStoreStorageClass,
  ?'num_retries' => __integerMin0,
  ?'restart_delay' => __integerMin0Max15,
  ) $s = shape()) {
    $this->connection_retry_interval = $connection_retry_interval ?? ;
    $this->filecache_duration = $filecache_duration ?? ;
    $this->media_store_storage_class = $media_store_storage_class ?? ;
    $this->num_retries = $num_retries ?? ;
    $this->restart_delay = $restart_delay ?? ;
  }
}

type HlsMediaStoreStorageClass = string;

type HlsMode = string;

type HlsOutputSelection = string;

class HlsOutputSettings {
  public HlsH265PackagingType $h_265_packaging_type;
  public HlsSettings $hls_settings;
  public __stringMin1 $name_modifier;
  public __string $segment_modifier;

  public function __construct(shape(
  ?'h_265_packaging_type' => HlsH265PackagingType,
  ?'hls_settings' => HlsSettings,
  ?'name_modifier' => __stringMin1,
  ?'segment_modifier' => __string,
  ) $s = shape()) {
    $this->h_265_packaging_type = $h_265_packaging_type ?? ;
    $this->hls_settings = $hls_settings ?? null;
    $this->name_modifier = $name_modifier ?? ;
    $this->segment_modifier = $segment_modifier ?? ;
  }
}

type HlsProgramDateTime = string;

type HlsRedundantManifest = string;

type HlsSegmentationMode = string;

class HlsSettings {
  public AudioOnlyHlsSettings $audio_only_hls_settings;
  public Fmp4HlsSettings $fmp_4_hls_settings;
  public StandardHlsSettings $standard_hls_settings;

  public function __construct(shape(
  ?'audio_only_hls_settings' => AudioOnlyHlsSettings,
  ?'fmp_4_hls_settings' => Fmp4HlsSettings,
  ?'standard_hls_settings' => StandardHlsSettings,
  ) $s = shape()) {
    $this->audio_only_hls_settings = $audio_only_hls_settings ?? null;
    $this->fmp_4_hls_settings = $fmp_4_hls_settings ?? null;
    $this->standard_hls_settings = $standard_hls_settings ?? null;
  }
}

type HlsStreamInfResolution = string;

type HlsTimedMetadataId3Frame = string;

class HlsTimedMetadataScheduleActionSettings {
  public __string $id_3;

  public function __construct(shape(
  ?'id_3' => __string,
  ) $s = shape()) {
    $this->id_3 = $id_3 ?? ;
  }
}

type HlsTsFileMode = string;

type HlsWebdavHttpTransferMode = string;

class HlsWebdavSettings {
  public __integerMin0 $connection_retry_interval;
  public __integerMin0Max600 $filecache_duration;
  public HlsWebdavHttpTransferMode $http_transfer_mode;
  public __integerMin0 $num_retries;
  public __integerMin0Max15 $restart_delay;

  public function __construct(shape(
  ?'connection_retry_interval' => __integerMin0,
  ?'filecache_duration' => __integerMin0Max600,
  ?'http_transfer_mode' => HlsWebdavHttpTransferMode,
  ?'num_retries' => __integerMin0,
  ?'restart_delay' => __integerMin0Max15,
  ) $s = shape()) {
    $this->connection_retry_interval = $connection_retry_interval ?? ;
    $this->filecache_duration = $filecache_duration ?? ;
    $this->http_transfer_mode = $http_transfer_mode ?? ;
    $this->num_retries = $num_retries ?? ;
    $this->restart_delay = $restart_delay ?? ;
  }
}

type IFrameOnlyPlaylistType = string;

class ImmediateModeScheduleActionStartSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Input {
  public __string $arn;
  public __listOf__string $attached_channels;
  public __listOfInputDestination $destinations;
  public __string $id;
  public InputClass $input_class;
  public InputSourceType $input_source_type;
  public __listOfMediaConnectFlow $media_connect_flows;
  public __string $name;
  public __string $role_arn;
  public __listOf__string $security_groups;
  public __listOfInputSource $sources;
  public InputState $state;
  public Tags $tags;
  public InputType $type;

  public function __construct(shape(
  ?'arn' => __string,
  ?'attached_channels' => __listOf__string,
  ?'destinations' => __listOfInputDestination,
  ?'id' => __string,
  ?'input_class' => InputClass,
  ?'input_source_type' => InputSourceType,
  ?'media_connect_flows' => __listOfMediaConnectFlow,
  ?'name' => __string,
  ?'role_arn' => __string,
  ?'security_groups' => __listOf__string,
  ?'sources' => __listOfInputSource,
  ?'state' => InputState,
  ?'tags' => Tags,
  ?'type' => InputType,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->attached_channels = $attached_channels ?? ;
    $this->destinations = $destinations ?? ;
    $this->id = $id ?? ;
    $this->input_class = $input_class ?? "";
    $this->input_source_type = $input_source_type ?? "";
    $this->media_connect_flows = $media_connect_flows ?? ;
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->security_groups = $security_groups ?? ;
    $this->sources = $sources ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? ;
  }
}

class InputAttachment {
  public AutomaticInputFailoverSettings $automatic_input_failover_settings;
  public __string $input_attachment_name;
  public __string $input_id;
  public InputSettings $input_settings;

  public function __construct(shape(
  ?'automatic_input_failover_settings' => AutomaticInputFailoverSettings,
  ?'input_attachment_name' => __string,
  ?'input_id' => __string,
  ?'input_settings' => InputSettings,
  ) $s = shape()) {
    $this->automatic_input_failover_settings = $automatic_input_failover_settings ?? null;
    $this->input_attachment_name = $input_attachment_name ?? ;
    $this->input_id = $input_id ?? ;
    $this->input_settings = $input_settings ?? null;
  }
}

class InputChannelLevel {
  public __integerMinNegative60Max6 $gain;
  public __integerMin0Max15 $input_channel;

  public function __construct(shape(
  ?'gain' => __integerMinNegative60Max6,
  ?'input_channel' => __integerMin0Max15,
  ) $s = shape()) {
    $this->gain = $gain ?? ;
    $this->input_channel = $input_channel ?? ;
  }
}

type InputClass = string;

class InputClippingSettings {
  public InputTimecodeSource $input_timecode_source;
  public StartTimecode $start_timecode;
  public StopTimecode $stop_timecode;

  public function __construct(shape(
  ?'input_timecode_source' => InputTimecodeSource,
  ?'start_timecode' => StartTimecode,
  ?'stop_timecode' => StopTimecode,
  ) $s = shape()) {
    $this->input_timecode_source = $input_timecode_source ?? "";
    $this->start_timecode = $start_timecode ?? null;
    $this->stop_timecode = $stop_timecode ?? null;
  }
}

type InputCodec = string;

type InputDeblockFilter = string;

type InputDenoiseFilter = string;

class InputDestination {
  public __string $ip;
  public __string $port;
  public __string $url;
  public InputDestinationVpc $vpc;

  public function __construct(shape(
  ?'ip' => __string,
  ?'port' => __string,
  ?'url' => __string,
  ?'vpc' => InputDestinationVpc,
  ) $s = shape()) {
    $this->ip = $ip ?? ;
    $this->port = $port ?? ;
    $this->url = $url ?? ;
    $this->vpc = $vpc ?? ;
  }
}

class InputDestinationRequest {
  public __string $stream_name;

  public function __construct(shape(
  ?'stream_name' => __string,
  ) $s = shape()) {
    $this->stream_name = $stream_name ?? ;
  }
}

class InputDestinationVpc {
  public __string $availability_zone;
  public __string $network_interface_id;

  public function __construct(shape(
  ?'availability_zone' => __string,
  ?'network_interface_id' => __string,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? ;
    $this->network_interface_id = $network_interface_id ?? ;
  }
}

type InputFilter = string;

class InputLocation {
  public __string $password_param;
  public __string $uri;
  public __string $username;

  public function __construct(shape(
  ?'password_param' => __string,
  ?'uri' => __string,
  ?'username' => __string,
  ) $s = shape()) {
    $this->password_param = $password_param ?? ;
    $this->uri = $uri ?? ;
    $this->username = $username ?? ;
  }
}

type InputLossActionForHlsOut = string;

type InputLossActionForMsSmoothOut = string;

type InputLossActionForRtmpOut = string;

type InputLossActionForUdpOut = string;

class InputLossBehavior {
  public __integerMin0Max1000000 $black_frame_msec;
  public __stringMin6Max6 $input_loss_image_color;
  public InputLocation $input_loss_image_slate;
  public InputLossImageType $input_loss_image_type;
  public __integerMin0Max1000000 $repeat_frame_msec;

  public function __construct(shape(
  ?'black_frame_msec' => __integerMin0Max1000000,
  ?'input_loss_image_color' => __stringMin6Max6,
  ?'input_loss_image_slate' => InputLocation,
  ?'input_loss_image_type' => InputLossImageType,
  ?'repeat_frame_msec' => __integerMin0Max1000000,
  ) $s = shape()) {
    $this->black_frame_msec = $black_frame_msec ?? ;
    $this->input_loss_image_color = $input_loss_image_color ?? ;
    $this->input_loss_image_slate = $input_loss_image_slate ?? ;
    $this->input_loss_image_type = $input_loss_image_type ?? "";
    $this->repeat_frame_msec = $repeat_frame_msec ?? ;
  }
}

type InputLossImageType = string;

type InputMaximumBitrate = string;

type InputPreference = string;

type InputResolution = string;

class InputSecurityGroup {
  public __string $arn;
  public __string $id;
  public __listOf__string $inputs;
  public InputSecurityGroupState $state;
  public Tags $tags;
  public __listOfInputWhitelistRule $whitelist_rules;

  public function __construct(shape(
  ?'arn' => __string,
  ?'id' => __string,
  ?'inputs' => __listOf__string,
  ?'state' => InputSecurityGroupState,
  ?'tags' => Tags,
  ?'whitelist_rules' => __listOfInputWhitelistRule,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->id = $id ?? ;
    $this->inputs = $inputs ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
    $this->whitelist_rules = $whitelist_rules ?? ;
  }
}

type InputSecurityGroupState = string;

class InputSecurityGroupWhitelistRequest {
  public Tags $tags;
  public __listOfInputWhitelistRuleCidr $whitelist_rules;

  public function __construct(shape(
  ?'tags' => Tags,
  ?'whitelist_rules' => __listOfInputWhitelistRuleCidr,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
    $this->whitelist_rules = $whitelist_rules ?? ;
  }
}

class InputSettings {
  public __listOfAudioSelector $audio_selectors;
  public __listOfCaptionSelector $caption_selectors;
  public InputDeblockFilter $deblock_filter;
  public InputDenoiseFilter $denoise_filter;
  public __integerMin1Max5 $filter_strength;
  public InputFilter $input_filter;
  public NetworkInputSettings $network_input_settings;
  public InputSourceEndBehavior $source_end_behavior;
  public VideoSelector $video_selector;

  public function __construct(shape(
  ?'audio_selectors' => __listOfAudioSelector,
  ?'caption_selectors' => __listOfCaptionSelector,
  ?'deblock_filter' => InputDeblockFilter,
  ?'denoise_filter' => InputDenoiseFilter,
  ?'filter_strength' => __integerMin1Max5,
  ?'input_filter' => InputFilter,
  ?'network_input_settings' => NetworkInputSettings,
  ?'source_end_behavior' => InputSourceEndBehavior,
  ?'video_selector' => VideoSelector,
  ) $s = shape()) {
    $this->audio_selectors = $audio_selectors ?? ;
    $this->caption_selectors = $caption_selectors ?? ;
    $this->deblock_filter = $deblock_filter ?? ;
    $this->denoise_filter = $denoise_filter ?? ;
    $this->filter_strength = $filter_strength ?? ;
    $this->input_filter = $input_filter ?? "";
    $this->network_input_settings = $network_input_settings ?? null;
    $this->source_end_behavior = $source_end_behavior ?? ;
    $this->video_selector = $video_selector ?? null;
  }
}

class InputSource {
  public __string $password_param;
  public __string $url;
  public __string $username;

  public function __construct(shape(
  ?'password_param' => __string,
  ?'url' => __string,
  ?'username' => __string,
  ) $s = shape()) {
    $this->password_param = $password_param ?? ;
    $this->url = $url ?? ;
    $this->username = $username ?? ;
  }
}

type InputSourceEndBehavior = string;

class InputSourceRequest {
  public __string $password_param;
  public __string $url;
  public __string $username;

  public function __construct(shape(
  ?'password_param' => __string,
  ?'url' => __string,
  ?'username' => __string,
  ) $s = shape()) {
    $this->password_param = $password_param ?? ;
    $this->url = $url ?? ;
    $this->username = $username ?? ;
  }
}

type InputSourceType = string;

class InputSpecification {
  public InputCodec $codec;
  public InputMaximumBitrate $maximum_bitrate;
  public InputResolution $resolution;

  public function __construct(shape(
  ?'codec' => InputCodec,
  ?'maximum_bitrate' => InputMaximumBitrate,
  ?'resolution' => InputResolution,
  ) $s = shape()) {
    $this->codec = $codec ?? ;
    $this->maximum_bitrate = $maximum_bitrate ?? ;
    $this->resolution = $resolution ?? ;
  }
}

type InputState = string;

class InputSwitchScheduleActionSettings {
  public __string $input_attachment_name_reference;
  public InputClippingSettings $input_clipping_settings;
  public __listOf__string $url_path;

  public function __construct(shape(
  ?'input_attachment_name_reference' => __string,
  ?'input_clipping_settings' => InputClippingSettings,
  ?'url_path' => __listOf__string,
  ) $s = shape()) {
    $this->input_attachment_name_reference = $input_attachment_name_reference ?? ;
    $this->input_clipping_settings = $input_clipping_settings ?? null;
    $this->url_path = $url_path ?? ;
  }
}

type InputTimecodeSource = string;

type InputType = string;

class InputVpcRequest {
  public __listOf__string $security_group_ids;
  public __listOf__string $subnet_ids;

  public function __construct(shape(
  ?'security_group_ids' => __listOf__string,
  ?'subnet_ids' => __listOf__string,
  ) $s = shape()) {
    $this->security_group_ids = $security_group_ids ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
  }
}

class InputWhitelistRule {
  public __string $cidr;

  public function __construct(shape(
  ?'cidr' => __string,
  ) $s = shape()) {
    $this->cidr = $cidr ?? ;
  }
}

class InputWhitelistRuleCidr {
  public __string $cidr;

  public function __construct(shape(
  ?'cidr' => __string,
  ) $s = shape()) {
    $this->cidr = $cidr ?? ;
  }
}

class InternalServerErrorException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InternalServiceError {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequest {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class KeyProviderSettings {
  public StaticKeySettings $static_key_settings;

  public function __construct(shape(
  ?'static_key_settings' => StaticKeySettings,
  ) $s = shape()) {
    $this->static_key_settings = $static_key_settings ?? null;
  }
}

type LastFrameClippingBehavior = string;

class LimitExceeded {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListChannelsRequest {
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListChannelsResponse {
  public __listOfChannelSummary $channels;
  public __string $next_token;

  public function __construct(shape(
  ?'channels' => __listOfChannelSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->channels = $channels ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListChannelsResultModel {
  public __listOfChannelSummary $channels;
  public __string $next_token;

  public function __construct(shape(
  ?'channels' => __listOfChannelSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->channels = $channels ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListInputSecurityGroupsRequest {
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListInputSecurityGroupsResponse {
  public __listOfInputSecurityGroup $input_security_groups;
  public __string $next_token;

  public function __construct(shape(
  ?'input_security_groups' => __listOfInputSecurityGroup,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->input_security_groups = $input_security_groups ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListInputSecurityGroupsResultModel {
  public __listOfInputSecurityGroup $input_security_groups;
  public __string $next_token;

  public function __construct(shape(
  ?'input_security_groups' => __listOfInputSecurityGroup,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->input_security_groups = $input_security_groups ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListInputsRequest {
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListInputsResponse {
  public __listOfInput $inputs;
  public __string $next_token;

  public function __construct(shape(
  ?'inputs' => __listOfInput,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->inputs = $inputs ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListInputsResultModel {
  public __listOfInput $inputs;
  public __string $next_token;

  public function __construct(shape(
  ?'inputs' => __listOfInput,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->inputs = $inputs ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMultiplexProgramsRequest {
  public MaxResults $max_results;
  public __string $multiplex_id;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'multiplex_id' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->multiplex_id = $multiplex_id ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMultiplexProgramsResponse {
  public __listOfMultiplexProgramSummary $multiplex_programs;
  public __string $next_token;

  public function __construct(shape(
  ?'multiplex_programs' => __listOfMultiplexProgramSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->multiplex_programs = $multiplex_programs ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMultiplexProgramsResultModel {
  public __listOfMultiplexProgramSummary $multiplex_programs;
  public __string $next_token;

  public function __construct(shape(
  ?'multiplex_programs' => __listOfMultiplexProgramSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->multiplex_programs = $multiplex_programs ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMultiplexesRequest {
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListMultiplexesResponse {
  public __listOfMultiplexSummary $multiplexes;
  public __string $next_token;

  public function __construct(shape(
  ?'multiplexes' => __listOfMultiplexSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->multiplexes = $multiplexes ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMultiplexesResultModel {
  public __listOfMultiplexSummary $multiplexes;
  public __string $next_token;

  public function __construct(shape(
  ?'multiplexes' => __listOfMultiplexSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->multiplexes = $multiplexes ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListOfferingsRequest {
  public __string $channel_class;
  public __string $channel_configuration;
  public __string $codec;
  public __string $duration;
  public MaxResults $max_results;
  public __string $maximum_bitrate;
  public __string $maximum_framerate;
  public __string $next_token;
  public __string $resolution;
  public __string $resource_type;
  public __string $special_feature;
  public __string $video_quality;

  public function __construct(shape(
  ?'channel_class' => __string,
  ?'channel_configuration' => __string,
  ?'codec' => __string,
  ?'duration' => __string,
  ?'max_results' => MaxResults,
  ?'maximum_bitrate' => __string,
  ?'maximum_framerate' => __string,
  ?'next_token' => __string,
  ?'resolution' => __string,
  ?'resource_type' => __string,
  ?'special_feature' => __string,
  ?'video_quality' => __string,
  ) $s = shape()) {
    $this->channel_class = $channel_class ?? "";
    $this->channel_configuration = $channel_configuration ?? ;
    $this->codec = $codec ?? ;
    $this->duration = $duration ?? ;
    $this->max_results = $max_results ?? 0;
    $this->maximum_bitrate = $maximum_bitrate ?? ;
    $this->maximum_framerate = $maximum_framerate ?? ;
    $this->next_token = $next_token ?? ;
    $this->resolution = $resolution ?? ;
    $this->resource_type = $resource_type ?? ;
    $this->special_feature = $special_feature ?? ;
    $this->video_quality = $video_quality ?? ;
  }
}

class ListOfferingsResponse {
  public __string $next_token;
  public __listOfOffering $offerings;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'offerings' => __listOfOffering,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->offerings = $offerings ?? ;
  }
}

class ListOfferingsResultModel {
  public __string $next_token;
  public __listOfOffering $offerings;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'offerings' => __listOfOffering,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->offerings = $offerings ?? ;
  }
}

class ListReservationsRequest {
  public __string $channel_class;
  public __string $codec;
  public MaxResults $max_results;
  public __string $maximum_bitrate;
  public __string $maximum_framerate;
  public __string $next_token;
  public __string $resolution;
  public __string $resource_type;
  public __string $special_feature;
  public __string $video_quality;

  public function __construct(shape(
  ?'channel_class' => __string,
  ?'codec' => __string,
  ?'max_results' => MaxResults,
  ?'maximum_bitrate' => __string,
  ?'maximum_framerate' => __string,
  ?'next_token' => __string,
  ?'resolution' => __string,
  ?'resource_type' => __string,
  ?'special_feature' => __string,
  ?'video_quality' => __string,
  ) $s = shape()) {
    $this->channel_class = $channel_class ?? "";
    $this->codec = $codec ?? ;
    $this->max_results = $max_results ?? 0;
    $this->maximum_bitrate = $maximum_bitrate ?? ;
    $this->maximum_framerate = $maximum_framerate ?? ;
    $this->next_token = $next_token ?? ;
    $this->resolution = $resolution ?? ;
    $this->resource_type = $resource_type ?? ;
    $this->special_feature = $special_feature ?? ;
    $this->video_quality = $video_quality ?? ;
  }
}

class ListReservationsResponse {
  public __string $next_token;
  public __listOfReservation $reservations;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'reservations' => __listOfReservation,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->reservations = $reservations ?? ;
  }
}

class ListReservationsResultModel {
  public __string $next_token;
  public __listOfReservation $reservations;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'reservations' => __listOfReservation,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->reservations = $reservations ?? ;
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
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type LogLevel = string;

type M2tsAbsentInputAudioBehavior = string;

type M2tsArib = string;

type M2tsAribCaptionsPidControl = string;

type M2tsAudioBufferModel = string;

type M2tsAudioInterval = string;

type M2tsAudioStreamType = string;

type M2tsBufferModel = string;

type M2tsCcDescriptor = string;

type M2tsEbifControl = string;

type M2tsEbpPlacement = string;

type M2tsEsRateInPes = string;

type M2tsKlv = string;

type M2tsNielsenId3Behavior = string;

type M2tsPcrControl = string;

type M2tsRateMode = string;

type M2tsScte35Control = string;

type M2tsSegmentationMarkers = string;

type M2tsSegmentationStyle = string;

class M2tsSettings {
  public M2tsAbsentInputAudioBehavior $absent_input_audio_behavior;
  public M2tsArib $arib;
  public __string $arib_captions_pid;
  public M2tsAribCaptionsPidControl $arib_captions_pid_control;
  public M2tsAudioBufferModel $audio_buffer_model;
  public __integerMin0 $audio_frames_per_pes;
  public __string $audio_pids;
  public M2tsAudioStreamType $audio_stream_type;
  public __integerMin0 $bitrate;
  public M2tsBufferModel $buffer_model;
  public M2tsCcDescriptor $cc_descriptor;
  public DvbNitSettings $dvb_nit_settings;
  public DvbSdtSettings $dvb_sdt_settings;
  public __string $dvb_sub_pids;
  public DvbTdtSettings $dvb_tdt_settings;
  public __string $dvb_teletext_pid;
  public M2tsEbifControl $ebif;
  public M2tsAudioInterval $ebp_audio_interval;
  public __integerMin0Max10000 $ebp_lookahead_ms;
  public M2tsEbpPlacement $ebp_placement;
  public __string $ecm_pid;
  public M2tsEsRateInPes $es_rate_in_pes;
  public __string $etv_platform_pid;
  public __string $etv_signal_pid;
  public __doubleMin0 $fragment_time;
  public M2tsKlv $klv;
  public __string $klv_data_pids;
  public M2tsNielsenId3Behavior $nielsen_id_3_behavior;
  public __doubleMin0 $null_packet_bitrate;
  public __integerMin0Max1000 $pat_interval;
  public M2tsPcrControl $pcr_control;
  public __integerMin0Max500 $pcr_period;
  public __string $pcr_pid;
  public __integerMin0Max1000 $pmt_interval;
  public __string $pmt_pid;
  public __integerMin0Max65535 $program_num;
  public M2tsRateMode $rate_mode;
  public __string $scte_27_pids;
  public M2tsScte35Control $scte_35_control;
  public __string $scte_35_pid;
  public M2tsSegmentationMarkers $segmentation_markers;
  public M2tsSegmentationStyle $segmentation_style;
  public __doubleMin1 $segmentation_time;
  public M2tsTimedMetadataBehavior $timed_metadata_behavior;
  public __string $timed_metadata_pid;
  public __integerMin0Max65535 $transport_stream_id;
  public __string $video_pid;

  public function __construct(shape(
  ?'absent_input_audio_behavior' => M2tsAbsentInputAudioBehavior,
  ?'arib' => M2tsArib,
  ?'arib_captions_pid' => __string,
  ?'arib_captions_pid_control' => M2tsAribCaptionsPidControl,
  ?'audio_buffer_model' => M2tsAudioBufferModel,
  ?'audio_frames_per_pes' => __integerMin0,
  ?'audio_pids' => __string,
  ?'audio_stream_type' => M2tsAudioStreamType,
  ?'bitrate' => __integerMin0,
  ?'buffer_model' => M2tsBufferModel,
  ?'cc_descriptor' => M2tsCcDescriptor,
  ?'dvb_nit_settings' => DvbNitSettings,
  ?'dvb_sdt_settings' => DvbSdtSettings,
  ?'dvb_sub_pids' => __string,
  ?'dvb_tdt_settings' => DvbTdtSettings,
  ?'dvb_teletext_pid' => __string,
  ?'ebif' => M2tsEbifControl,
  ?'ebp_audio_interval' => M2tsAudioInterval,
  ?'ebp_lookahead_ms' => __integerMin0Max10000,
  ?'ebp_placement' => M2tsEbpPlacement,
  ?'ecm_pid' => __string,
  ?'es_rate_in_pes' => M2tsEsRateInPes,
  ?'etv_platform_pid' => __string,
  ?'etv_signal_pid' => __string,
  ?'fragment_time' => __doubleMin0,
  ?'klv' => M2tsKlv,
  ?'klv_data_pids' => __string,
  ?'nielsen_id_3_behavior' => M2tsNielsenId3Behavior,
  ?'null_packet_bitrate' => __doubleMin0,
  ?'pat_interval' => __integerMin0Max1000,
  ?'pcr_control' => M2tsPcrControl,
  ?'pcr_period' => __integerMin0Max500,
  ?'pcr_pid' => __string,
  ?'pmt_interval' => __integerMin0Max1000,
  ?'pmt_pid' => __string,
  ?'program_num' => __integerMin0Max65535,
  ?'rate_mode' => M2tsRateMode,
  ?'scte_27_pids' => __string,
  ?'scte_35_control' => M2tsScte35Control,
  ?'scte_35_pid' => __string,
  ?'segmentation_markers' => M2tsSegmentationMarkers,
  ?'segmentation_style' => M2tsSegmentationStyle,
  ?'segmentation_time' => __doubleMin1,
  ?'timed_metadata_behavior' => M2tsTimedMetadataBehavior,
  ?'timed_metadata_pid' => __string,
  ?'transport_stream_id' => __integerMin0Max65535,
  ?'video_pid' => __string,
  ) $s = shape()) {
    $this->absent_input_audio_behavior = $absent_input_audio_behavior ?? ;
    $this->arib = $arib ?? ;
    $this->arib_captions_pid = $arib_captions_pid ?? ;
    $this->arib_captions_pid_control = $arib_captions_pid_control ?? ;
    $this->audio_buffer_model = $audio_buffer_model ?? ;
    $this->audio_frames_per_pes = $audio_frames_per_pes ?? ;
    $this->audio_pids = $audio_pids ?? ;
    $this->audio_stream_type = $audio_stream_type ?? ;
    $this->bitrate = $bitrate ?? ;
    $this->buffer_model = $buffer_model ?? ;
    $this->cc_descriptor = $cc_descriptor ?? ;
    $this->dvb_nit_settings = $dvb_nit_settings ?? null;
    $this->dvb_sdt_settings = $dvb_sdt_settings ?? null;
    $this->dvb_sub_pids = $dvb_sub_pids ?? ;
    $this->dvb_tdt_settings = $dvb_tdt_settings ?? null;
    $this->dvb_teletext_pid = $dvb_teletext_pid ?? ;
    $this->ebif = $ebif ?? ;
    $this->ebp_audio_interval = $ebp_audio_interval ?? ;
    $this->ebp_lookahead_ms = $ebp_lookahead_ms ?? ;
    $this->ebp_placement = $ebp_placement ?? ;
    $this->ecm_pid = $ecm_pid ?? ;
    $this->es_rate_in_pes = $es_rate_in_pes ?? ;
    $this->etv_platform_pid = $etv_platform_pid ?? ;
    $this->etv_signal_pid = $etv_signal_pid ?? ;
    $this->fragment_time = $fragment_time ?? ;
    $this->klv = $klv ?? ;
    $this->klv_data_pids = $klv_data_pids ?? ;
    $this->nielsen_id_3_behavior = $nielsen_id_3_behavior ?? ;
    $this->null_packet_bitrate = $null_packet_bitrate ?? ;
    $this->pat_interval = $pat_interval ?? ;
    $this->pcr_control = $pcr_control ?? ;
    $this->pcr_period = $pcr_period ?? ;
    $this->pcr_pid = $pcr_pid ?? ;
    $this->pmt_interval = $pmt_interval ?? ;
    $this->pmt_pid = $pmt_pid ?? ;
    $this->program_num = $program_num ?? ;
    $this->rate_mode = $rate_mode ?? ;
    $this->scte_27_pids = $scte_27_pids ?? ;
    $this->scte_35_control = $scte_35_control ?? ;
    $this->scte_35_pid = $scte_35_pid ?? ;
    $this->segmentation_markers = $segmentation_markers ?? ;
    $this->segmentation_style = $segmentation_style ?? ;
    $this->segmentation_time = $segmentation_time ?? ;
    $this->timed_metadata_behavior = $timed_metadata_behavior ?? ;
    $this->timed_metadata_pid = $timed_metadata_pid ?? ;
    $this->transport_stream_id = $transport_stream_id ?? ;
    $this->video_pid = $video_pid ?? ;
  }
}

type M2tsTimedMetadataBehavior = string;

type M3u8NielsenId3Behavior = string;

type M3u8PcrControl = string;

type M3u8Scte35Behavior = string;

class M3u8Settings {
  public __integerMin0 $audio_frames_per_pes;
  public __string $audio_pids;
  public __string $ecm_pid;
  public M3u8NielsenId3Behavior $nielsen_id_3_behavior;
  public __integerMin0Max1000 $pat_interval;
  public M3u8PcrControl $pcr_control;
  public __integerMin0Max500 $pcr_period;
  public __string $pcr_pid;
  public __integerMin0Max1000 $pmt_interval;
  public __string $pmt_pid;
  public __integerMin0Max65535 $program_num;
  public M3u8Scte35Behavior $scte_35_behavior;
  public __string $scte_35_pid;
  public M3u8TimedMetadataBehavior $timed_metadata_behavior;
  public __string $timed_metadata_pid;
  public __integerMin0Max65535 $transport_stream_id;
  public __string $video_pid;

  public function __construct(shape(
  ?'audio_frames_per_pes' => __integerMin0,
  ?'audio_pids' => __string,
  ?'ecm_pid' => __string,
  ?'nielsen_id_3_behavior' => M3u8NielsenId3Behavior,
  ?'pat_interval' => __integerMin0Max1000,
  ?'pcr_control' => M3u8PcrControl,
  ?'pcr_period' => __integerMin0Max500,
  ?'pcr_pid' => __string,
  ?'pmt_interval' => __integerMin0Max1000,
  ?'pmt_pid' => __string,
  ?'program_num' => __integerMin0Max65535,
  ?'scte_35_behavior' => M3u8Scte35Behavior,
  ?'scte_35_pid' => __string,
  ?'timed_metadata_behavior' => M3u8TimedMetadataBehavior,
  ?'timed_metadata_pid' => __string,
  ?'transport_stream_id' => __integerMin0Max65535,
  ?'video_pid' => __string,
  ) $s = shape()) {
    $this->audio_frames_per_pes = $audio_frames_per_pes ?? ;
    $this->audio_pids = $audio_pids ?? ;
    $this->ecm_pid = $ecm_pid ?? ;
    $this->nielsen_id_3_behavior = $nielsen_id_3_behavior ?? ;
    $this->pat_interval = $pat_interval ?? ;
    $this->pcr_control = $pcr_control ?? ;
    $this->pcr_period = $pcr_period ?? ;
    $this->pcr_pid = $pcr_pid ?? ;
    $this->pmt_interval = $pmt_interval ?? ;
    $this->pmt_pid = $pmt_pid ?? ;
    $this->program_num = $program_num ?? ;
    $this->scte_35_behavior = $scte_35_behavior ?? ;
    $this->scte_35_pid = $scte_35_pid ?? ;
    $this->timed_metadata_behavior = $timed_metadata_behavior ?? ;
    $this->timed_metadata_pid = $timed_metadata_pid ?? ;
    $this->transport_stream_id = $transport_stream_id ?? ;
    $this->video_pid = $video_pid ?? ;
  }
}

type M3u8TimedMetadataBehavior = string;

type MaxResults = int;

class MediaConnectFlow {
  public __string $flow_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? ;
  }
}

class MediaConnectFlowRequest {
  public __string $flow_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? ;
  }
}

class MediaPackageGroupSettings {
  public OutputLocationRef $destination;

  public function __construct(shape(
  ?'destination' => OutputLocationRef,
  ) $s = shape()) {
    $this->destination = $destination ?? ;
  }
}

class MediaPackageOutputDestinationSettings {
  public __stringMin1 $channel_id;

  public function __construct(shape(
  ?'channel_id' => __stringMin1,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
  }
}

class MediaPackageOutputSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Mp2CodingMode = string;

class Mp2Settings {
  public __double $bitrate;
  public Mp2CodingMode $coding_mode;
  public __double $sample_rate;

  public function __construct(shape(
  ?'bitrate' => __double,
  ?'coding_mode' => Mp2CodingMode,
  ?'sample_rate' => __double,
  ) $s = shape()) {
    $this->bitrate = $bitrate ?? ;
    $this->coding_mode = $coding_mode ?? ;
    $this->sample_rate = $sample_rate ?? ;
  }
}

class MsSmoothGroupSettings {
  public __string $acquisition_point_id;
  public SmoothGroupAudioOnlyTimecodeControl $audio_only_timecode_control;
  public SmoothGroupCertificateMode $certificate_mode;
  public __integerMin0 $connection_retry_interval;
  public OutputLocationRef $destination;
  public __string $event_id;
  public SmoothGroupEventIdMode $event_id_mode;
  public SmoothGroupEventStopBehavior $event_stop_behavior;
  public __integerMin0 $filecache_duration;
  public __integerMin1 $fragment_length;
  public InputLossActionForMsSmoothOut $input_loss_action;
  public __integerMin0 $num_retries;
  public __integerMin0 $restart_delay;
  public SmoothGroupSegmentationMode $segmentation_mode;
  public __integerMin0Max10000 $send_delay_ms;
  public SmoothGroupSparseTrackType $sparse_track_type;
  public SmoothGroupStreamManifestBehavior $stream_manifest_behavior;
  public __string $timestamp_offset;
  public SmoothGroupTimestampOffsetMode $timestamp_offset_mode;

  public function __construct(shape(
  ?'acquisition_point_id' => __string,
  ?'audio_only_timecode_control' => SmoothGroupAudioOnlyTimecodeControl,
  ?'certificate_mode' => SmoothGroupCertificateMode,
  ?'connection_retry_interval' => __integerMin0,
  ?'destination' => OutputLocationRef,
  ?'event_id' => __string,
  ?'event_id_mode' => SmoothGroupEventIdMode,
  ?'event_stop_behavior' => SmoothGroupEventStopBehavior,
  ?'filecache_duration' => __integerMin0,
  ?'fragment_length' => __integerMin1,
  ?'input_loss_action' => InputLossActionForMsSmoothOut,
  ?'num_retries' => __integerMin0,
  ?'restart_delay' => __integerMin0,
  ?'segmentation_mode' => SmoothGroupSegmentationMode,
  ?'send_delay_ms' => __integerMin0Max10000,
  ?'sparse_track_type' => SmoothGroupSparseTrackType,
  ?'stream_manifest_behavior' => SmoothGroupStreamManifestBehavior,
  ?'timestamp_offset' => __string,
  ?'timestamp_offset_mode' => SmoothGroupTimestampOffsetMode,
  ) $s = shape()) {
    $this->acquisition_point_id = $acquisition_point_id ?? ;
    $this->audio_only_timecode_control = $audio_only_timecode_control ?? ;
    $this->certificate_mode = $certificate_mode ?? ;
    $this->connection_retry_interval = $connection_retry_interval ?? ;
    $this->destination = $destination ?? ;
    $this->event_id = $event_id ?? ;
    $this->event_id_mode = $event_id_mode ?? ;
    $this->event_stop_behavior = $event_stop_behavior ?? ;
    $this->filecache_duration = $filecache_duration ?? ;
    $this->fragment_length = $fragment_length ?? ;
    $this->input_loss_action = $input_loss_action ?? ;
    $this->num_retries = $num_retries ?? ;
    $this->restart_delay = $restart_delay ?? ;
    $this->segmentation_mode = $segmentation_mode ?? ;
    $this->send_delay_ms = $send_delay_ms ?? ;
    $this->sparse_track_type = $sparse_track_type ?? ;
    $this->stream_manifest_behavior = $stream_manifest_behavior ?? ;
    $this->timestamp_offset = $timestamp_offset ?? ;
    $this->timestamp_offset_mode = $timestamp_offset_mode ?? ;
  }
}

type MsSmoothH265PackagingType = string;

class MsSmoothOutputSettings {
  public MsSmoothH265PackagingType $h_265_packaging_type;
  public __string $name_modifier;

  public function __construct(shape(
  ?'h_265_packaging_type' => MsSmoothH265PackagingType,
  ?'name_modifier' => __string,
  ) $s = shape()) {
    $this->h_265_packaging_type = $h_265_packaging_type ?? ;
    $this->name_modifier = $name_modifier ?? ;
  }
}

class Multiplex {
  public __string $arn;
  public __listOf__string $availability_zones;
  public __listOfMultiplexOutputDestination $destinations;
  public __string $id;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
  public __integer $pipelines_running_count;
  public __integer $program_count;
  public MultiplexState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'availability_zones' => __listOf__string,
  ?'destinations' => __listOfMultiplexOutputDestination,
  ?'id' => __string,
  ?'multiplex_settings' => MultiplexSettings,
  ?'name' => __string,
  ?'pipelines_running_count' => __integer,
  ?'program_count' => __integer,
  ?'state' => MultiplexState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->availability_zones = $availability_zones ?? ;
    $this->destinations = $destinations ?? ;
    $this->id = $id ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->program_count = $program_count ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class MultiplexConfigurationValidationError {
  public __string $message;
  public __listOfMultiplexValidationError $validation_errors;

  public function __construct(shape(
  ?'message' => __string,
  ?'validation_errors' => __listOfMultiplexValidationError,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->validation_errors = $validation_errors ?? ;
  }
}

class MultiplexGroupSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MultiplexMediaConnectOutputDestinationSettings {
  public __stringMin1 $entitlement_arn;

  public function __construct(shape(
  ?'entitlement_arn' => __stringMin1,
  ) $s = shape()) {
    $this->entitlement_arn = $entitlement_arn ?? ;
  }
}

class MultiplexOutputDestination {
  public MultiplexMediaConnectOutputDestinationSettings $media_connect_settings;

  public function __construct(shape(
  ?'media_connect_settings' => MultiplexMediaConnectOutputDestinationSettings,
  ) $s = shape()) {
    $this->media_connect_settings = $media_connect_settings ?? ;
  }
}

class MultiplexOutputSettings {
  public OutputLocationRef $destination;

  public function __construct(shape(
  ?'destination' => OutputLocationRef,
  ) $s = shape()) {
    $this->destination = $destination ?? ;
  }
}

class MultiplexProgram {
  public __string $channel_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public MultiplexProgramPacketIdentifiersMap $packet_identifiers_map;
  public __string $program_name;

  public function __construct(shape(
  ?'channel_id' => __string,
  ?'multiplex_program_settings' => MultiplexProgramSettings,
  ?'packet_identifiers_map' => MultiplexProgramPacketIdentifiersMap,
  ?'program_name' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
    $this->multiplex_program_settings = $multiplex_program_settings ?? null;
    $this->packet_identifiers_map = $packet_identifiers_map ?? ;
    $this->program_name = $program_name ?? ;
  }
}

class MultiplexProgramChannelDestinationSettings {
  public __stringMin1 $multiplex_id;
  public __stringMin1 $program_name;

  public function __construct(shape(
  ?'multiplex_id' => __stringMin1,
  ?'program_name' => __stringMin1,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
    $this->program_name = $program_name ?? ;
  }
}

class MultiplexProgramPacketIdentifiersMap {
  public __listOf__integer $audio_pids;
  public __listOf__integer $dvb_sub_pids;
  public __integer $dvb_teletext_pid;
  public __integer $etv_platform_pid;
  public __integer $etv_signal_pid;
  public __listOf__integer $klv_data_pids;
  public __integer $pcr_pid;
  public __integer $pmt_pid;
  public __integer $private_metadata_pid;
  public __listOf__integer $scte_27_pids;
  public __integer $scte_35_pid;
  public __integer $timed_metadata_pid;
  public __integer $video_pid;

  public function __construct(shape(
  ?'audio_pids' => __listOf__integer,
  ?'dvb_sub_pids' => __listOf__integer,
  ?'dvb_teletext_pid' => __integer,
  ?'etv_platform_pid' => __integer,
  ?'etv_signal_pid' => __integer,
  ?'klv_data_pids' => __listOf__integer,
  ?'pcr_pid' => __integer,
  ?'pmt_pid' => __integer,
  ?'private_metadata_pid' => __integer,
  ?'scte_27_pids' => __listOf__integer,
  ?'scte_35_pid' => __integer,
  ?'timed_metadata_pid' => __integer,
  ?'video_pid' => __integer,
  ) $s = shape()) {
    $this->audio_pids = $audio_pids ?? ;
    $this->dvb_sub_pids = $dvb_sub_pids ?? ;
    $this->dvb_teletext_pid = $dvb_teletext_pid ?? ;
    $this->etv_platform_pid = $etv_platform_pid ?? ;
    $this->etv_signal_pid = $etv_signal_pid ?? ;
    $this->klv_data_pids = $klv_data_pids ?? ;
    $this->pcr_pid = $pcr_pid ?? ;
    $this->pmt_pid = $pmt_pid ?? ;
    $this->private_metadata_pid = $private_metadata_pid ?? ;
    $this->scte_27_pids = $scte_27_pids ?? ;
    $this->scte_35_pid = $scte_35_pid ?? ;
    $this->timed_metadata_pid = $timed_metadata_pid ?? ;
    $this->video_pid = $video_pid ?? ;
  }
}

class MultiplexProgramServiceDescriptor {
  public __stringMax256 $provider_name;
  public __stringMax256 $service_name;

  public function __construct(shape(
  ?'provider_name' => __stringMax256,
  ?'service_name' => __stringMax256,
  ) $s = shape()) {
    $this->provider_name = $provider_name ?? ;
    $this->service_name = $service_name ?? ;
  }
}

class MultiplexProgramSettings {
  public PreferredChannelPipeline $preferred_channel_pipeline;
  public __integerMin0Max65535 $program_number;
  public MultiplexProgramServiceDescriptor $service_descriptor;
  public MultiplexVideoSettings $video_settings;

  public function __construct(shape(
  ?'preferred_channel_pipeline' => PreferredChannelPipeline,
  ?'program_number' => __integerMin0Max65535,
  ?'service_descriptor' => MultiplexProgramServiceDescriptor,
  ?'video_settings' => MultiplexVideoSettings,
  ) $s = shape()) {
    $this->preferred_channel_pipeline = $preferred_channel_pipeline ?? "";
    $this->program_number = $program_number ?? ;
    $this->service_descriptor = $service_descriptor ?? ;
    $this->video_settings = $video_settings ?? ;
  }
}

class MultiplexProgramSummary {
  public __string $channel_id;
  public __string $program_name;

  public function __construct(shape(
  ?'channel_id' => __string,
  ?'program_name' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
    $this->program_name = $program_name ?? ;
  }
}

class MultiplexSettings {
  public __integerMin1000Max3000 $maximum_video_buffer_delay_milliseconds;
  public __integerMin1000000Max100000000 $transport_stream_bitrate;
  public __integerMin0Max65535 $transport_stream_id;
  public __integerMin0Max100000000 $transport_stream_reserved_bitrate;

  public function __construct(shape(
  ?'maximum_video_buffer_delay_milliseconds' => __integerMin1000Max3000,
  ?'transport_stream_bitrate' => __integerMin1000000Max100000000,
  ?'transport_stream_id' => __integerMin0Max65535,
  ?'transport_stream_reserved_bitrate' => __integerMin0Max100000000,
  ) $s = shape()) {
    $this->maximum_video_buffer_delay_milliseconds = $maximum_video_buffer_delay_milliseconds ?? ;
    $this->transport_stream_bitrate = $transport_stream_bitrate ?? ;
    $this->transport_stream_id = $transport_stream_id ?? ;
    $this->transport_stream_reserved_bitrate = $transport_stream_reserved_bitrate ?? ;
  }
}

class MultiplexSettingsSummary {
  public __integerMin1000000Max100000000 $transport_stream_bitrate;

  public function __construct(shape(
  ?'transport_stream_bitrate' => __integerMin1000000Max100000000,
  ) $s = shape()) {
    $this->transport_stream_bitrate = $transport_stream_bitrate ?? ;
  }
}

type MultiplexState = string;

class MultiplexStatmuxVideoSettings {
  public __integerMin100000Max100000000 $maximum_bitrate;
  public __integerMin100000Max100000000 $minimum_bitrate;

  public function __construct(shape(
  ?'maximum_bitrate' => __integerMin100000Max100000000,
  ?'minimum_bitrate' => __integerMin100000Max100000000,
  ) $s = shape()) {
    $this->maximum_bitrate = $maximum_bitrate ?? ;
    $this->minimum_bitrate = $minimum_bitrate ?? ;
  }
}

class MultiplexSummary {
  public __string $arn;
  public __listOf__string $availability_zones;
  public __string $id;
  public MultiplexSettingsSummary $multiplex_settings;
  public __string $name;
  public __integer $pipelines_running_count;
  public __integer $program_count;
  public MultiplexState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'availability_zones' => __listOf__string,
  ?'id' => __string,
  ?'multiplex_settings' => MultiplexSettingsSummary,
  ?'name' => __string,
  ?'pipelines_running_count' => __integer,
  ?'program_count' => __integer,
  ?'state' => MultiplexState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->availability_zones = $availability_zones ?? ;
    $this->id = $id ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->program_count = $program_count ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class MultiplexValidationError {
  public __string $element_path;
  public __string $error_message;

  public function __construct(shape(
  ?'element_path' => __string,
  ?'error_message' => __string,
  ) $s = shape()) {
    $this->element_path = $element_path ?? ;
    $this->error_message = $error_message ?? ;
  }
}

class MultiplexVideoSettings {
  public __integerMin100000Max100000000 $constant_bitrate;
  public MultiplexStatmuxVideoSettings $statmux_settings;

  public function __construct(shape(
  ?'constant_bitrate' => __integerMin100000Max100000000,
  ?'statmux_settings' => MultiplexStatmuxVideoSettings,
  ) $s = shape()) {
    $this->constant_bitrate = $constant_bitrate ?? ;
    $this->statmux_settings = $statmux_settings ?? ;
  }
}

type NetworkInputServerValidation = string;

class NetworkInputSettings {
  public HlsInputSettings $hls_input_settings;
  public NetworkInputServerValidation $server_validation;

  public function __construct(shape(
  ?'hls_input_settings' => HlsInputSettings,
  ?'server_validation' => NetworkInputServerValidation,
  ) $s = shape()) {
    $this->hls_input_settings = $hls_input_settings ?? null;
    $this->server_validation = $server_validation ?? ;
  }
}

class NielsenConfiguration {
  public __string $distributor_id;
  public NielsenPcmToId3TaggingState $nielsen_pcm_to_id_3_tagging;

  public function __construct(shape(
  ?'distributor_id' => __string,
  ?'nielsen_pcm_to_id_3_tagging' => NielsenPcmToId3TaggingState,
  ) $s = shape()) {
    $this->distributor_id = $distributor_id ?? ;
    $this->nielsen_pcm_to_id_3_tagging = $nielsen_pcm_to_id_3_tagging ?? ;
  }
}

type NielsenPcmToId3TaggingState = string;

class NotFoundException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Offering {
  public __string $arn;
  public __string $currency_code;
  public __integer $duration;
  public OfferingDurationUnits $duration_units;
  public __double $fixed_price;
  public __string $offering_description;
  public __string $offering_id;
  public OfferingType $offering_type;
  public __string $region;
  public ReservationResourceSpecification $resource_specification;
  public __double $usage_price;

  public function __construct(shape(
  ?'arn' => __string,
  ?'currency_code' => __string,
  ?'duration' => __integer,
  ?'duration_units' => OfferingDurationUnits,
  ?'fixed_price' => __double,
  ?'offering_description' => __string,
  ?'offering_id' => __string,
  ?'offering_type' => OfferingType,
  ?'region' => __string,
  ?'resource_specification' => ReservationResourceSpecification,
  ?'usage_price' => __double,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->currency_code = $currency_code ?? ;
    $this->duration = $duration ?? ;
    $this->duration_units = $duration_units ?? ;
    $this->fixed_price = $fixed_price ?? ;
    $this->offering_description = $offering_description ?? ;
    $this->offering_id = $offering_id ?? ;
    $this->offering_type = $offering_type ?? "";
    $this->region = $region ?? ;
    $this->resource_specification = $resource_specification ?? ;
    $this->usage_price = $usage_price ?? ;
  }
}

type OfferingDurationUnits = string;

type OfferingType = string;

class Output {
  public __listOf__string $audio_description_names;
  public __listOf__string $caption_description_names;
  public __stringMin1Max255 $output_name;
  public OutputSettings $output_settings;
  public __string $video_description_name;

  public function __construct(shape(
  ?'audio_description_names' => __listOf__string,
  ?'caption_description_names' => __listOf__string,
  ?'output_name' => __stringMin1Max255,
  ?'output_settings' => OutputSettings,
  ?'video_description_name' => __string,
  ) $s = shape()) {
    $this->audio_description_names = $audio_description_names ?? ;
    $this->caption_description_names = $caption_description_names ?? ;
    $this->output_name = $output_name ?? ;
    $this->output_settings = $output_settings ?? null;
    $this->video_description_name = $video_description_name ?? ;
  }
}

class OutputDestination {
  public __string $id;
  public __listOfMediaPackageOutputDestinationSettings $media_package_settings;
  public MultiplexProgramChannelDestinationSettings $multiplex_settings;
  public __listOfOutputDestinationSettings $settings;

  public function __construct(shape(
  ?'id' => __string,
  ?'media_package_settings' => __listOfMediaPackageOutputDestinationSettings,
  ?'multiplex_settings' => MultiplexProgramChannelDestinationSettings,
  ?'settings' => __listOfOutputDestinationSettings,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->media_package_settings = $media_package_settings ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->settings = $settings ?? ;
  }
}

class OutputDestinationSettings {
  public __string $password_param;
  public __string $stream_name;
  public __string $url;
  public __string $username;

  public function __construct(shape(
  ?'password_param' => __string,
  ?'stream_name' => __string,
  ?'url' => __string,
  ?'username' => __string,
  ) $s = shape()) {
    $this->password_param = $password_param ?? ;
    $this->stream_name = $stream_name ?? ;
    $this->url = $url ?? ;
    $this->username = $username ?? ;
  }
}

class OutputGroup {
  public __stringMax32 $name;
  public OutputGroupSettings $output_group_settings;
  public __listOfOutput $outputs;

  public function __construct(shape(
  ?'name' => __stringMax32,
  ?'output_group_settings' => OutputGroupSettings,
  ?'outputs' => __listOfOutput,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->output_group_settings = $output_group_settings ?? null;
    $this->outputs = $outputs ?? ;
  }
}

class OutputGroupSettings {
  public ArchiveGroupSettings $archive_group_settings;
  public FrameCaptureGroupSettings $frame_capture_group_settings;
  public HlsGroupSettings $hls_group_settings;
  public MediaPackageGroupSettings $media_package_group_settings;
  public MsSmoothGroupSettings $ms_smooth_group_settings;
  public MultiplexGroupSettings $multiplex_group_settings;
  public RtmpGroupSettings $rtmp_group_settings;
  public UdpGroupSettings $udp_group_settings;

  public function __construct(shape(
  ?'archive_group_settings' => ArchiveGroupSettings,
  ?'frame_capture_group_settings' => FrameCaptureGroupSettings,
  ?'hls_group_settings' => HlsGroupSettings,
  ?'media_package_group_settings' => MediaPackageGroupSettings,
  ?'ms_smooth_group_settings' => MsSmoothGroupSettings,
  ?'multiplex_group_settings' => MultiplexGroupSettings,
  ?'rtmp_group_settings' => RtmpGroupSettings,
  ?'udp_group_settings' => UdpGroupSettings,
  ) $s = shape()) {
    $this->archive_group_settings = $archive_group_settings ?? null;
    $this->frame_capture_group_settings = $frame_capture_group_settings ?? null;
    $this->hls_group_settings = $hls_group_settings ?? null;
    $this->media_package_group_settings = $media_package_group_settings ?? null;
    $this->ms_smooth_group_settings = $ms_smooth_group_settings ?? null;
    $this->multiplex_group_settings = $multiplex_group_settings ?? null;
    $this->rtmp_group_settings = $rtmp_group_settings ?? null;
    $this->udp_group_settings = $udp_group_settings ?? null;
  }
}

class OutputLocationRef {
  public __string $destination_ref_id;

  public function __construct(shape(
  ?'destination_ref_id' => __string,
  ) $s = shape()) {
    $this->destination_ref_id = $destination_ref_id ?? ;
  }
}

class OutputSettings {
  public ArchiveOutputSettings $archive_output_settings;
  public FrameCaptureOutputSettings $frame_capture_output_settings;
  public HlsOutputSettings $hls_output_settings;
  public MediaPackageOutputSettings $media_package_output_settings;
  public MsSmoothOutputSettings $ms_smooth_output_settings;
  public MultiplexOutputSettings $multiplex_output_settings;
  public RtmpOutputSettings $rtmp_output_settings;
  public UdpOutputSettings $udp_output_settings;

  public function __construct(shape(
  ?'archive_output_settings' => ArchiveOutputSettings,
  ?'frame_capture_output_settings' => FrameCaptureOutputSettings,
  ?'hls_output_settings' => HlsOutputSettings,
  ?'media_package_output_settings' => MediaPackageOutputSettings,
  ?'ms_smooth_output_settings' => MsSmoothOutputSettings,
  ?'multiplex_output_settings' => MultiplexOutputSettings,
  ?'rtmp_output_settings' => RtmpOutputSettings,
  ?'udp_output_settings' => UdpOutputSettings,
  ) $s = shape()) {
    $this->archive_output_settings = $archive_output_settings ?? null;
    $this->frame_capture_output_settings = $frame_capture_output_settings ?? null;
    $this->hls_output_settings = $hls_output_settings ?? null;
    $this->media_package_output_settings = $media_package_output_settings ?? null;
    $this->ms_smooth_output_settings = $ms_smooth_output_settings ?? null;
    $this->multiplex_output_settings = $multiplex_output_settings ?? null;
    $this->rtmp_output_settings = $rtmp_output_settings ?? null;
    $this->udp_output_settings = $udp_output_settings ?? null;
  }
}

class PassThroughSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PauseStateScheduleActionSettings {
  public __listOfPipelinePauseStateSettings $pipelines;

  public function __construct(shape(
  ?'pipelines' => __listOfPipelinePauseStateSettings,
  ) $s = shape()) {
    $this->pipelines = $pipelines ?? ;
  }
}

class PipelineDetail {
  public __string $active_input_attachment_name;
  public __string $active_input_switch_action_name;
  public __string $pipeline_id;

  public function __construct(shape(
  ?'active_input_attachment_name' => __string,
  ?'active_input_switch_action_name' => __string,
  ?'pipeline_id' => __string,
  ) $s = shape()) {
    $this->active_input_attachment_name = $active_input_attachment_name ?? ;
    $this->active_input_switch_action_name = $active_input_switch_action_name ?? ;
    $this->pipeline_id = $pipeline_id ?? "";
  }
}

type PipelineId = string;

class PipelinePauseStateSettings {
  public PipelineId $pipeline_id;

  public function __construct(shape(
  ?'pipeline_id' => PipelineId,
  ) $s = shape()) {
    $this->pipeline_id = $pipeline_id ?? "";
  }
}

type PreferredChannelPipeline = string;

class PurchaseOffering {
  public __integerMin1 $count;
  public __string $name;
  public __string $request_id;
  public __string $start;
  public Tags $tags;

  public function __construct(shape(
  ?'count' => __integerMin1,
  ?'name' => __string,
  ?'request_id' => __string,
  ?'start' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->count = $count ?? ;
    $this->name = $name ?? ;
    $this->request_id = $request_id ?? ;
    $this->start = $start ?? ;
    $this->tags = $tags ?? [];
  }
}

class PurchaseOfferingRequest {
  public __integerMin1 $count;
  public __string $name;
  public __string $offering_id;
  public __string $request_id;
  public __string $start;
  public Tags $tags;

  public function __construct(shape(
  ?'count' => __integerMin1,
  ?'name' => __string,
  ?'offering_id' => __string,
  ?'request_id' => __string,
  ?'start' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->count = $count ?? ;
    $this->name = $name ?? ;
    $this->offering_id = $offering_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->start = $start ?? ;
    $this->tags = $tags ?? [];
  }
}

class PurchaseOfferingResponse {
  public Reservation $reservation;

  public function __construct(shape(
  ?'reservation' => Reservation,
  ) $s = shape()) {
    $this->reservation = $reservation ?? null;
  }
}

class PurchaseOfferingResultModel {
  public Reservation $reservation;

  public function __construct(shape(
  ?'reservation' => Reservation,
  ) $s = shape()) {
    $this->reservation = $reservation ?? null;
  }
}

class Rec601Settings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Rec709Settings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemixSettings {
  public __listOfAudioChannelMapping $channel_mappings;
  public __integerMin1Max16 $channels_in;
  public __integerMin1Max8 $channels_out;

  public function __construct(shape(
  ?'channel_mappings' => __listOfAudioChannelMapping,
  ?'channels_in' => __integerMin1Max16,
  ?'channels_out' => __integerMin1Max8,
  ) $s = shape()) {
    $this->channel_mappings = $channel_mappings ?? ;
    $this->channels_in = $channels_in ?? ;
    $this->channels_out = $channels_out ?? ;
  }
}

class Reservation {
  public __string $arn;
  public __integer $count;
  public __string $currency_code;
  public __integer $duration;
  public OfferingDurationUnits $duration_units;
  public __string $end;
  public __double $fixed_price;
  public __string $name;
  public __string $offering_description;
  public __string $offering_id;
  public OfferingType $offering_type;
  public __string $region;
  public __string $reservation_id;
  public ReservationResourceSpecification $resource_specification;
  public __string $start;
  public ReservationState $state;
  public Tags $tags;
  public __double $usage_price;

  public function __construct(shape(
  ?'arn' => __string,
  ?'count' => __integer,
  ?'currency_code' => __string,
  ?'duration' => __integer,
  ?'duration_units' => OfferingDurationUnits,
  ?'end' => __string,
  ?'fixed_price' => __double,
  ?'name' => __string,
  ?'offering_description' => __string,
  ?'offering_id' => __string,
  ?'offering_type' => OfferingType,
  ?'region' => __string,
  ?'reservation_id' => __string,
  ?'resource_specification' => ReservationResourceSpecification,
  ?'start' => __string,
  ?'state' => ReservationState,
  ?'tags' => Tags,
  ?'usage_price' => __double,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->count = $count ?? ;
    $this->currency_code = $currency_code ?? ;
    $this->duration = $duration ?? ;
    $this->duration_units = $duration_units ?? ;
    $this->end = $end ?? ;
    $this->fixed_price = $fixed_price ?? ;
    $this->name = $name ?? ;
    $this->offering_description = $offering_description ?? ;
    $this->offering_id = $offering_id ?? ;
    $this->offering_type = $offering_type ?? "";
    $this->region = $region ?? ;
    $this->reservation_id = $reservation_id ?? ;
    $this->resource_specification = $resource_specification ?? ;
    $this->start = $start ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
    $this->usage_price = $usage_price ?? ;
  }
}

type ReservationCodec = string;

type ReservationMaximumBitrate = string;

type ReservationMaximumFramerate = string;

type ReservationResolution = string;

class ReservationResourceSpecification {
  public ChannelClass $channel_class;
  public ReservationCodec $codec;
  public ReservationMaximumBitrate $maximum_bitrate;
  public ReservationMaximumFramerate $maximum_framerate;
  public ReservationResolution $resolution;
  public ReservationResourceType $resource_type;
  public ReservationSpecialFeature $special_feature;
  public ReservationVideoQuality $video_quality;

  public function __construct(shape(
  ?'channel_class' => ChannelClass,
  ?'codec' => ReservationCodec,
  ?'maximum_bitrate' => ReservationMaximumBitrate,
  ?'maximum_framerate' => ReservationMaximumFramerate,
  ?'resolution' => ReservationResolution,
  ?'resource_type' => ReservationResourceType,
  ?'special_feature' => ReservationSpecialFeature,
  ?'video_quality' => ReservationVideoQuality,
  ) $s = shape()) {
    $this->channel_class = $channel_class ?? "";
    $this->codec = $codec ?? ;
    $this->maximum_bitrate = $maximum_bitrate ?? ;
    $this->maximum_framerate = $maximum_framerate ?? ;
    $this->resolution = $resolution ?? ;
    $this->resource_type = $resource_type ?? ;
    $this->special_feature = $special_feature ?? ;
    $this->video_quality = $video_quality ?? ;
  }
}

type ReservationResourceType = string;

type ReservationSpecialFeature = string;

type ReservationState = string;

type ReservationVideoQuality = string;

class ResourceConflict {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotFound {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type RtmpCacheFullBehavior = string;

type RtmpCaptionData = string;

class RtmpCaptionInfoDestinationSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RtmpGroupSettings {
  public AuthenticationScheme $authentication_scheme;
  public RtmpCacheFullBehavior $cache_full_behavior;
  public __integerMin30 $cache_length;
  public RtmpCaptionData $caption_data;
  public InputLossActionForRtmpOut $input_loss_action;
  public __integerMin0 $restart_delay;

  public function __construct(shape(
  ?'authentication_scheme' => AuthenticationScheme,
  ?'cache_full_behavior' => RtmpCacheFullBehavior,
  ?'cache_length' => __integerMin30,
  ?'caption_data' => RtmpCaptionData,
  ?'input_loss_action' => InputLossActionForRtmpOut,
  ?'restart_delay' => __integerMin0,
  ) $s = shape()) {
    $this->authentication_scheme = $authentication_scheme ?? "";
    $this->cache_full_behavior = $cache_full_behavior ?? ;
    $this->cache_length = $cache_length ?? ;
    $this->caption_data = $caption_data ?? ;
    $this->input_loss_action = $input_loss_action ?? ;
    $this->restart_delay = $restart_delay ?? ;
  }
}

type RtmpOutputCertificateMode = string;

class RtmpOutputSettings {
  public RtmpOutputCertificateMode $certificate_mode;
  public __integerMin1 $connection_retry_interval;
  public OutputLocationRef $destination;
  public __integerMin0 $num_retries;

  public function __construct(shape(
  ?'certificate_mode' => RtmpOutputCertificateMode,
  ?'connection_retry_interval' => __integerMin1,
  ?'destination' => OutputLocationRef,
  ?'num_retries' => __integerMin0,
  ) $s = shape()) {
    $this->certificate_mode = $certificate_mode ?? ;
    $this->connection_retry_interval = $connection_retry_interval ?? ;
    $this->destination = $destination ?? ;
    $this->num_retries = $num_retries ?? ;
  }
}

class ScheduleAction {
  public __string $action_name;
  public ScheduleActionSettings $schedule_action_settings;
  public ScheduleActionStartSettings $schedule_action_start_settings;

  public function __construct(shape(
  ?'action_name' => __string,
  ?'schedule_action_settings' => ScheduleActionSettings,
  ?'schedule_action_start_settings' => ScheduleActionStartSettings,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
    $this->schedule_action_settings = $schedule_action_settings ?? null;
    $this->schedule_action_start_settings = $schedule_action_start_settings ?? null;
  }
}

class ScheduleActionSettings {
  public HlsId3SegmentTaggingScheduleActionSettings $hls_id_3_segment_tagging_settings;
  public HlsTimedMetadataScheduleActionSettings $hls_timed_metadata_settings;
  public InputSwitchScheduleActionSettings $input_switch_settings;
  public PauseStateScheduleActionSettings $pause_state_settings;
  public Scte35ReturnToNetworkScheduleActionSettings $scte_35_return_to_network_settings;
  public Scte35SpliceInsertScheduleActionSettings $scte_35_splice_insert_settings;
  public Scte35TimeSignalScheduleActionSettings $scte_35_time_signal_settings;
  public StaticImageActivateScheduleActionSettings $static_image_activate_settings;
  public StaticImageDeactivateScheduleActionSettings $static_image_deactivate_settings;

  public function __construct(shape(
  ?'hls_id_3_segment_tagging_settings' => HlsId3SegmentTaggingScheduleActionSettings,
  ?'hls_timed_metadata_settings' => HlsTimedMetadataScheduleActionSettings,
  ?'input_switch_settings' => InputSwitchScheduleActionSettings,
  ?'pause_state_settings' => PauseStateScheduleActionSettings,
  ?'scte_35_return_to_network_settings' => Scte35ReturnToNetworkScheduleActionSettings,
  ?'scte_35_splice_insert_settings' => Scte35SpliceInsertScheduleActionSettings,
  ?'scte_35_time_signal_settings' => Scte35TimeSignalScheduleActionSettings,
  ?'static_image_activate_settings' => StaticImageActivateScheduleActionSettings,
  ?'static_image_deactivate_settings' => StaticImageDeactivateScheduleActionSettings,
  ) $s = shape()) {
    $this->hls_id_3_segment_tagging_settings = $hls_id_3_segment_tagging_settings ?? ;
    $this->hls_timed_metadata_settings = $hls_timed_metadata_settings ?? ;
    $this->input_switch_settings = $input_switch_settings ?? ;
    $this->pause_state_settings = $pause_state_settings ?? ;
    $this->scte_35_return_to_network_settings = $scte_35_return_to_network_settings ?? ;
    $this->scte_35_splice_insert_settings = $scte_35_splice_insert_settings ?? ;
    $this->scte_35_time_signal_settings = $scte_35_time_signal_settings ?? ;
    $this->static_image_activate_settings = $static_image_activate_settings ?? ;
    $this->static_image_deactivate_settings = $static_image_deactivate_settings ?? ;
  }
}

class ScheduleActionStartSettings {
  public FixedModeScheduleActionStartSettings $fixed_mode_schedule_action_start_settings;
  public FollowModeScheduleActionStartSettings $follow_mode_schedule_action_start_settings;
  public ImmediateModeScheduleActionStartSettings $immediate_mode_schedule_action_start_settings;

  public function __construct(shape(
  ?'fixed_mode_schedule_action_start_settings' => FixedModeScheduleActionStartSettings,
  ?'follow_mode_schedule_action_start_settings' => FollowModeScheduleActionStartSettings,
  ?'immediate_mode_schedule_action_start_settings' => ImmediateModeScheduleActionStartSettings,
  ) $s = shape()) {
    $this->fixed_mode_schedule_action_start_settings = $fixed_mode_schedule_action_start_settings ?? null;
    $this->follow_mode_schedule_action_start_settings = $follow_mode_schedule_action_start_settings ?? null;
    $this->immediate_mode_schedule_action_start_settings = $immediate_mode_schedule_action_start_settings ?? null;
  }
}

class ScheduleDeleteResultModel {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ScheduleDescribeResultModel {
  public __string $next_token;
  public __listOfScheduleAction $schedule_actions;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'schedule_actions' => __listOfScheduleAction,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->schedule_actions = $schedule_actions ?? ;
  }
}

type Scte20Convert608To708 = string;

class Scte20PlusEmbeddedDestinationSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Scte20SourceSettings {
  public Scte20Convert608To708 $convert_608_to_708;
  public __integerMin1Max4 $source_608_channel_number;

  public function __construct(shape(
  ?'convert_608_to_708' => Scte20Convert608To708,
  ?'source_608_channel_number' => __integerMin1Max4,
  ) $s = shape()) {
    $this->convert_608_to_708 = $convert_608_to_708 ?? ;
    $this->source_608_channel_number = $source_608_channel_number ?? ;
  }
}

class Scte27DestinationSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Scte27SourceSettings {
  public __integerMin1 $pid;

  public function __construct(shape(
  ?'pid' => __integerMin1,
  ) $s = shape()) {
    $this->pid = $pid ?? ;
  }
}

type Scte35AposNoRegionalBlackoutBehavior = string;

type Scte35AposWebDeliveryAllowedBehavior = string;

type Scte35ArchiveAllowedFlag = string;

class Scte35DeliveryRestrictions {
  public Scte35ArchiveAllowedFlag $archive_allowed_flag;
  public Scte35DeviceRestrictions $device_restrictions;
  public Scte35NoRegionalBlackoutFlag $no_regional_blackout_flag;
  public Scte35WebDeliveryAllowedFlag $web_delivery_allowed_flag;

  public function __construct(shape(
  ?'archive_allowed_flag' => Scte35ArchiveAllowedFlag,
  ?'device_restrictions' => Scte35DeviceRestrictions,
  ?'no_regional_blackout_flag' => Scte35NoRegionalBlackoutFlag,
  ?'web_delivery_allowed_flag' => Scte35WebDeliveryAllowedFlag,
  ) $s = shape()) {
    $this->archive_allowed_flag = $archive_allowed_flag ?? ;
    $this->device_restrictions = $device_restrictions ?? ;
    $this->no_regional_blackout_flag = $no_regional_blackout_flag ?? ;
    $this->web_delivery_allowed_flag = $web_delivery_allowed_flag ?? ;
  }
}

class Scte35Descriptor {
  public Scte35DescriptorSettings $scte_35_descriptor_settings;

  public function __construct(shape(
  ?'scte_35_descriptor_settings' => Scte35DescriptorSettings,
  ) $s = shape()) {
    $this->scte_35_descriptor_settings = $scte_35_descriptor_settings ?? null;
  }
}

class Scte35DescriptorSettings {
  public Scte35SegmentationDescriptor $segmentation_descriptor_scte_35_descriptor_settings;

  public function __construct(shape(
  ?'segmentation_descriptor_scte_35_descriptor_settings' => Scte35SegmentationDescriptor,
  ) $s = shape()) {
    $this->segmentation_descriptor_scte_35_descriptor_settings = $segmentation_descriptor_scte_35_descriptor_settings ?? ;
  }
}

type Scte35DeviceRestrictions = string;

type Scte35NoRegionalBlackoutFlag = string;

class Scte35ReturnToNetworkScheduleActionSettings {
  public __longMin0Max4294967295 $splice_event_id;

  public function __construct(shape(
  ?'splice_event_id' => __longMin0Max4294967295,
  ) $s = shape()) {
    $this->splice_event_id = $splice_event_id ?? ;
  }
}

type Scte35SegmentationCancelIndicator = string;

class Scte35SegmentationDescriptor {
  public Scte35DeliveryRestrictions $delivery_restrictions;
  public __integerMin0Max255 $segment_num;
  public Scte35SegmentationCancelIndicator $segmentation_cancel_indicator;
  public __longMin0Max1099511627775 $segmentation_duration;
  public __longMin0Max4294967295 $segmentation_event_id;
  public __integerMin0Max255 $segmentation_type_id;
  public __string $segmentation_upid;
  public __integerMin0Max255 $segmentation_upid_type;
  public __integerMin0Max255 $segments_expected;
  public __integerMin0Max255 $sub_segment_num;
  public __integerMin0Max255 $sub_segments_expected;

  public function __construct(shape(
  ?'delivery_restrictions' => Scte35DeliveryRestrictions,
  ?'segment_num' => __integerMin0Max255,
  ?'segmentation_cancel_indicator' => Scte35SegmentationCancelIndicator,
  ?'segmentation_duration' => __longMin0Max1099511627775,
  ?'segmentation_event_id' => __longMin0Max4294967295,
  ?'segmentation_type_id' => __integerMin0Max255,
  ?'segmentation_upid' => __string,
  ?'segmentation_upid_type' => __integerMin0Max255,
  ?'segments_expected' => __integerMin0Max255,
  ?'sub_segment_num' => __integerMin0Max255,
  ?'sub_segments_expected' => __integerMin0Max255,
  ) $s = shape()) {
    $this->delivery_restrictions = $delivery_restrictions ?? ;
    $this->segment_num = $segment_num ?? ;
    $this->segmentation_cancel_indicator = $segmentation_cancel_indicator ?? ;
    $this->segmentation_duration = $segmentation_duration ?? ;
    $this->segmentation_event_id = $segmentation_event_id ?? ;
    $this->segmentation_type_id = $segmentation_type_id ?? ;
    $this->segmentation_upid = $segmentation_upid ?? ;
    $this->segmentation_upid_type = $segmentation_upid_type ?? ;
    $this->segments_expected = $segments_expected ?? ;
    $this->sub_segment_num = $sub_segment_num ?? ;
    $this->sub_segments_expected = $sub_segments_expected ?? ;
  }
}

class Scte35SpliceInsert {
  public __integerMinNegative1000Max1000 $ad_avail_offset;
  public Scte35SpliceInsertNoRegionalBlackoutBehavior $no_regional_blackout_flag;
  public Scte35SpliceInsertWebDeliveryAllowedBehavior $web_delivery_allowed_flag;

  public function __construct(shape(
  ?'ad_avail_offset' => __integerMinNegative1000Max1000,
  ?'no_regional_blackout_flag' => Scte35SpliceInsertNoRegionalBlackoutBehavior,
  ?'web_delivery_allowed_flag' => Scte35SpliceInsertWebDeliveryAllowedBehavior,
  ) $s = shape()) {
    $this->ad_avail_offset = $ad_avail_offset ?? ;
    $this->no_regional_blackout_flag = $no_regional_blackout_flag ?? ;
    $this->web_delivery_allowed_flag = $web_delivery_allowed_flag ?? ;
  }
}

type Scte35SpliceInsertNoRegionalBlackoutBehavior = string;

class Scte35SpliceInsertScheduleActionSettings {
  public __longMin0Max8589934591 $duration;
  public __longMin0Max4294967295 $splice_event_id;

  public function __construct(shape(
  ?'duration' => __longMin0Max8589934591,
  ?'splice_event_id' => __longMin0Max4294967295,
  ) $s = shape()) {
    $this->duration = $duration ?? ;
    $this->splice_event_id = $splice_event_id ?? ;
  }
}

type Scte35SpliceInsertWebDeliveryAllowedBehavior = string;

class Scte35TimeSignalApos {
  public __integerMinNegative1000Max1000 $ad_avail_offset;
  public Scte35AposNoRegionalBlackoutBehavior $no_regional_blackout_flag;
  public Scte35AposWebDeliveryAllowedBehavior $web_delivery_allowed_flag;

  public function __construct(shape(
  ?'ad_avail_offset' => __integerMinNegative1000Max1000,
  ?'no_regional_blackout_flag' => Scte35AposNoRegionalBlackoutBehavior,
  ?'web_delivery_allowed_flag' => Scte35AposWebDeliveryAllowedBehavior,
  ) $s = shape()) {
    $this->ad_avail_offset = $ad_avail_offset ?? ;
    $this->no_regional_blackout_flag = $no_regional_blackout_flag ?? ;
    $this->web_delivery_allowed_flag = $web_delivery_allowed_flag ?? ;
  }
}

class Scte35TimeSignalScheduleActionSettings {
  public __listOfScte35Descriptor $scte_35_descriptors;

  public function __construct(shape(
  ?'scte_35_descriptors' => __listOfScte35Descriptor,
  ) $s = shape()) {
    $this->scte_35_descriptors = $scte_35_descriptors ?? ;
  }
}

type Scte35WebDeliveryAllowedFlag = string;

type SmoothGroupAudioOnlyTimecodeControl = string;

type SmoothGroupCertificateMode = string;

type SmoothGroupEventIdMode = string;

type SmoothGroupEventStopBehavior = string;

type SmoothGroupSegmentationMode = string;

type SmoothGroupSparseTrackType = string;

type SmoothGroupStreamManifestBehavior = string;

type SmoothGroupTimestampOffsetMode = string;

class SmpteTtDestinationSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StandardHlsSettings {
  public __string $audio_rendition_sets;
  public M3u8Settings $m_3_u8_settings;

  public function __construct(shape(
  ?'audio_rendition_sets' => __string,
  ?'m_3_u8_settings' => M3u8Settings,
  ) $s = shape()) {
    $this->audio_rendition_sets = $audio_rendition_sets ?? ;
    $this->m_3_u8_settings = $m_3_u8_settings ?? null;
  }
}

class StartChannelRequest {
  public __string $channel_id;

  public function __construct(shape(
  ?'channel_id' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
  }
}

class StartChannelResponse {
  public __string $arn;
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;
  public __listOfChannelEgressEndpoint $egress_endpoints;
  public EncoderSettings $encoder_settings;
  public __string $id;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __listOfPipelineDetail $pipeline_details;
  public __integer $pipelines_running_count;
  public __string $role_arn;
  public ChannelState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'channel_class' => ChannelClass,
  ?'destinations' => __listOfOutputDestination,
  ?'egress_endpoints' => __listOfChannelEgressEndpoint,
  ?'encoder_settings' => EncoderSettings,
  ?'id' => __string,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'pipeline_details' => __listOfPipelineDetail,
  ?'pipelines_running_count' => __integer,
  ?'role_arn' => __string,
  ?'state' => ChannelState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->channel_class = $channel_class ?? "";
    $this->destinations = $destinations ?? ;
    $this->egress_endpoints = $egress_endpoints ?? ;
    $this->encoder_settings = $encoder_settings ?? null;
    $this->id = $id ?? ;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->pipeline_details = $pipeline_details ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class StartMultiplexRequest {
  public __string $multiplex_id;

  public function __construct(shape(
  ?'multiplex_id' => __string,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
  }
}

class StartMultiplexResponse {
  public __string $arn;
  public __listOf__string $availability_zones;
  public __listOfMultiplexOutputDestination $destinations;
  public __string $id;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
  public __integer $pipelines_running_count;
  public __integer $program_count;
  public MultiplexState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'availability_zones' => __listOf__string,
  ?'destinations' => __listOfMultiplexOutputDestination,
  ?'id' => __string,
  ?'multiplex_settings' => MultiplexSettings,
  ?'name' => __string,
  ?'pipelines_running_count' => __integer,
  ?'program_count' => __integer,
  ?'state' => MultiplexState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->availability_zones = $availability_zones ?? ;
    $this->destinations = $destinations ?? ;
    $this->id = $id ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->program_count = $program_count ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class StartTimecode {
  public __string $timecode;

  public function __construct(shape(
  ?'timecode' => __string,
  ) $s = shape()) {
    $this->timecode = $timecode ?? ;
  }
}

class StaticImageActivateScheduleActionSettings {
  public __integerMin0 $duration;
  public __integerMin0 $fade_in;
  public __integerMin0 $fade_out;
  public __integerMin1 $height;
  public InputLocation $image;
  public __integerMin0 $image_x;
  public __integerMin0 $image_y;
  public __integerMin0Max7 $layer;
  public __integerMin0Max100 $opacity;
  public __integerMin1 $width;

  public function __construct(shape(
  ?'duration' => __integerMin0,
  ?'fade_in' => __integerMin0,
  ?'fade_out' => __integerMin0,
  ?'height' => __integerMin1,
  ?'image' => InputLocation,
  ?'image_x' => __integerMin0,
  ?'image_y' => __integerMin0,
  ?'layer' => __integerMin0Max7,
  ?'opacity' => __integerMin0Max100,
  ?'width' => __integerMin1,
  ) $s = shape()) {
    $this->duration = $duration ?? ;
    $this->fade_in = $fade_in ?? ;
    $this->fade_out = $fade_out ?? ;
    $this->height = $height ?? ;
    $this->image = $image ?? ;
    $this->image_x = $image_x ?? ;
    $this->image_y = $image_y ?? ;
    $this->layer = $layer ?? ;
    $this->opacity = $opacity ?? ;
    $this->width = $width ?? ;
  }
}

class StaticImageDeactivateScheduleActionSettings {
  public __integerMin0 $fade_out;
  public __integerMin0Max7 $layer;

  public function __construct(shape(
  ?'fade_out' => __integerMin0,
  ?'layer' => __integerMin0Max7,
  ) $s = shape()) {
    $this->fade_out = $fade_out ?? ;
    $this->layer = $layer ?? ;
  }
}

class StaticKeySettings {
  public InputLocation $key_provider_server;
  public __stringMin32Max32 $static_key_value;

  public function __construct(shape(
  ?'key_provider_server' => InputLocation,
  ?'static_key_value' => __stringMin32Max32,
  ) $s = shape()) {
    $this->key_provider_server = $key_provider_server ?? ;
    $this->static_key_value = $static_key_value ?? ;
  }
}

class StopChannelRequest {
  public __string $channel_id;

  public function __construct(shape(
  ?'channel_id' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
  }
}

class StopChannelResponse {
  public __string $arn;
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;
  public __listOfChannelEgressEndpoint $egress_endpoints;
  public EncoderSettings $encoder_settings;
  public __string $id;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __listOfPipelineDetail $pipeline_details;
  public __integer $pipelines_running_count;
  public __string $role_arn;
  public ChannelState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'channel_class' => ChannelClass,
  ?'destinations' => __listOfOutputDestination,
  ?'egress_endpoints' => __listOfChannelEgressEndpoint,
  ?'encoder_settings' => EncoderSettings,
  ?'id' => __string,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'pipeline_details' => __listOfPipelineDetail,
  ?'pipelines_running_count' => __integer,
  ?'role_arn' => __string,
  ?'state' => ChannelState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->channel_class = $channel_class ?? "";
    $this->destinations = $destinations ?? ;
    $this->egress_endpoints = $egress_endpoints ?? ;
    $this->encoder_settings = $encoder_settings ?? null;
    $this->id = $id ?? ;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->pipeline_details = $pipeline_details ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class StopMultiplexRequest {
  public __string $multiplex_id;

  public function __construct(shape(
  ?'multiplex_id' => __string,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
  }
}

class StopMultiplexResponse {
  public __string $arn;
  public __listOf__string $availability_zones;
  public __listOfMultiplexOutputDestination $destinations;
  public __string $id;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
  public __integer $pipelines_running_count;
  public __integer $program_count;
  public MultiplexState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'availability_zones' => __listOf__string,
  ?'destinations' => __listOfMultiplexOutputDestination,
  ?'id' => __string,
  ?'multiplex_settings' => MultiplexSettings,
  ?'name' => __string,
  ?'pipelines_running_count' => __integer,
  ?'program_count' => __integer,
  ?'state' => MultiplexState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->availability_zones = $availability_zones ?? ;
    $this->destinations = $destinations ?? ;
    $this->id = $id ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
    $this->pipelines_running_count = $pipelines_running_count ?? ;
    $this->program_count = $program_count ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class StopTimecode {
  public LastFrameClippingBehavior $last_frame_clipping_behavior;
  public __string $timecode;

  public function __construct(shape(
  ?'last_frame_clipping_behavior' => LastFrameClippingBehavior,
  ?'timecode' => __string,
  ) $s = shape()) {
    $this->last_frame_clipping_behavior = $last_frame_clipping_behavior ?? "";
    $this->timecode = $timecode ?? ;
  }
}

type Tags = dict<__string, __string>;

class TagsModel {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class TeletextDestinationSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TeletextSourceSettings {
  public __string $page_number;

  public function __construct(shape(
  ?'page_number' => __string,
  ) $s = shape()) {
    $this->page_number = $page_number ?? ;
  }
}

class TimecodeConfig {
  public TimecodeConfigSource $source;
  public __integerMin1Max1000000 $sync_threshold;

  public function __construct(shape(
  ?'source' => TimecodeConfigSource,
  ?'sync_threshold' => __integerMin1Max1000000,
  ) $s = shape()) {
    $this->source = $source ?? ;
    $this->sync_threshold = $sync_threshold ?? ;
  }
}

type TimecodeConfigSource = string;

class TooManyRequestsException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TtmlDestinationSettings {
  public TtmlDestinationStyleControl $style_control;

  public function __construct(shape(
  ?'style_control' => TtmlDestinationStyleControl,
  ) $s = shape()) {
    $this->style_control = $style_control ?? ;
  }
}

type TtmlDestinationStyleControl = string;

class UdpContainerSettings {
  public M2tsSettings $m_2_ts_settings;

  public function __construct(shape(
  ?'m_2_ts_settings' => M2tsSettings,
  ) $s = shape()) {
    $this->m_2_ts_settings = $m_2_ts_settings ?? null;
  }
}

class UdpGroupSettings {
  public InputLossActionForUdpOut $input_loss_action;
  public UdpTimedMetadataId3Frame $timed_metadata_id_3_frame;
  public __integerMin0 $timed_metadata_id_3_period;

  public function __construct(shape(
  ?'input_loss_action' => InputLossActionForUdpOut,
  ?'timed_metadata_id_3_frame' => UdpTimedMetadataId3Frame,
  ?'timed_metadata_id_3_period' => __integerMin0,
  ) $s = shape()) {
    $this->input_loss_action = $input_loss_action ?? ;
    $this->timed_metadata_id_3_frame = $timed_metadata_id_3_frame ?? ;
    $this->timed_metadata_id_3_period = $timed_metadata_id_3_period ?? ;
  }
}

class UdpOutputSettings {
  public __integerMin0Max10000 $buffer_msec;
  public UdpContainerSettings $container_settings;
  public OutputLocationRef $destination;
  public FecOutputSettings $fec_output_settings;

  public function __construct(shape(
  ?'buffer_msec' => __integerMin0Max10000,
  ?'container_settings' => UdpContainerSettings,
  ?'destination' => OutputLocationRef,
  ?'fec_output_settings' => FecOutputSettings,
  ) $s = shape()) {
    $this->buffer_msec = $buffer_msec ?? ;
    $this->container_settings = $container_settings ?? ;
    $this->destination = $destination ?? ;
    $this->fec_output_settings = $fec_output_settings ?? null;
  }
}

type UdpTimedMetadataId3Frame = string;

class UnprocessableEntityException {
  public __string $message;
  public __listOfValidationError $validation_errors;

  public function __construct(shape(
  ?'message' => __string,
  ?'validation_errors' => __listOfValidationError,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->validation_errors = $validation_errors ?? ;
  }
}

class UpdateChannel {
  public __listOfOutputDestination $destinations;
  public EncoderSettings $encoder_settings;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __string $role_arn;

  public function __construct(shape(
  ?'destinations' => __listOfOutputDestination,
  ?'encoder_settings' => EncoderSettings,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'role_arn' => __string,
  ) $s = shape()) {
    $this->destinations = $destinations ?? ;
    $this->encoder_settings = $encoder_settings ?? null;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class UpdateChannelClass {
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;

  public function __construct(shape(
  ?'channel_class' => ChannelClass,
  ?'destinations' => __listOfOutputDestination,
  ) $s = shape()) {
    $this->channel_class = $channel_class ?? "";
    $this->destinations = $destinations ?? ;
  }
}

class UpdateChannelClassRequest {
  public ChannelClass $channel_class;
  public __string $channel_id;
  public __listOfOutputDestination $destinations;

  public function __construct(shape(
  ?'channel_class' => ChannelClass,
  ?'channel_id' => __string,
  ?'destinations' => __listOfOutputDestination,
  ) $s = shape()) {
    $this->channel_class = $channel_class ?? "";
    $this->channel_id = $channel_id ?? ;
    $this->destinations = $destinations ?? ;
  }
}

class UpdateChannelClassResponse {
  public Channel $channel;

  public function __construct(shape(
  ?'channel' => Channel,
  ) $s = shape()) {
    $this->channel = $channel ?? null;
  }
}

class UpdateChannelRequest {
  public __string $channel_id;
  public __listOfOutputDestination $destinations;
  public EncoderSettings $encoder_settings;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __string $role_arn;

  public function __construct(shape(
  ?'channel_id' => __string,
  ?'destinations' => __listOfOutputDestination,
  ?'encoder_settings' => EncoderSettings,
  ?'input_attachments' => __listOfInputAttachment,
  ?'input_specification' => InputSpecification,
  ?'log_level' => LogLevel,
  ?'name' => __string,
  ?'role_arn' => __string,
  ) $s = shape()) {
    $this->channel_id = $channel_id ?? ;
    $this->destinations = $destinations ?? ;
    $this->encoder_settings = $encoder_settings ?? null;
    $this->input_attachments = $input_attachments ?? ;
    $this->input_specification = $input_specification ?? null;
    $this->log_level = $log_level ?? "";
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class UpdateChannelResponse {
  public Channel $channel;

  public function __construct(shape(
  ?'channel' => Channel,
  ) $s = shape()) {
    $this->channel = $channel ?? null;
  }
}

class UpdateChannelResultModel {
  public Channel $channel;

  public function __construct(shape(
  ?'channel' => Channel,
  ) $s = shape()) {
    $this->channel = $channel ?? null;
  }
}

class UpdateInput {
  public __listOfInputDestinationRequest $destinations;
  public __listOf__string $input_security_groups;
  public __listOfMediaConnectFlowRequest $media_connect_flows;
  public __string $name;
  public __string $role_arn;
  public __listOfInputSourceRequest $sources;

  public function __construct(shape(
  ?'destinations' => __listOfInputDestinationRequest,
  ?'input_security_groups' => __listOf__string,
  ?'media_connect_flows' => __listOfMediaConnectFlowRequest,
  ?'name' => __string,
  ?'role_arn' => __string,
  ?'sources' => __listOfInputSourceRequest,
  ) $s = shape()) {
    $this->destinations = $destinations ?? ;
    $this->input_security_groups = $input_security_groups ?? ;
    $this->media_connect_flows = $media_connect_flows ?? ;
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->sources = $sources ?? ;
  }
}

class UpdateInputRequest {
  public __listOfInputDestinationRequest $destinations;
  public __string $input_id;
  public __listOf__string $input_security_groups;
  public __listOfMediaConnectFlowRequest $media_connect_flows;
  public __string $name;
  public __string $role_arn;
  public __listOfInputSourceRequest $sources;

  public function __construct(shape(
  ?'destinations' => __listOfInputDestinationRequest,
  ?'input_id' => __string,
  ?'input_security_groups' => __listOf__string,
  ?'media_connect_flows' => __listOfMediaConnectFlowRequest,
  ?'name' => __string,
  ?'role_arn' => __string,
  ?'sources' => __listOfInputSourceRequest,
  ) $s = shape()) {
    $this->destinations = $destinations ?? ;
    $this->input_id = $input_id ?? ;
    $this->input_security_groups = $input_security_groups ?? ;
    $this->media_connect_flows = $media_connect_flows ?? ;
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->sources = $sources ?? ;
  }
}

class UpdateInputResponse {
  public Input $input;

  public function __construct(shape(
  ?'input' => Input,
  ) $s = shape()) {
    $this->input = $input ?? null;
  }
}

class UpdateInputResultModel {
  public Input $input;

  public function __construct(shape(
  ?'input' => Input,
  ) $s = shape()) {
    $this->input = $input ?? null;
  }
}

class UpdateInputSecurityGroupRequest {
  public __string $input_security_group_id;
  public Tags $tags;
  public __listOfInputWhitelistRuleCidr $whitelist_rules;

  public function __construct(shape(
  ?'input_security_group_id' => __string,
  ?'tags' => Tags,
  ?'whitelist_rules' => __listOfInputWhitelistRuleCidr,
  ) $s = shape()) {
    $this->input_security_group_id = $input_security_group_id ?? ;
    $this->tags = $tags ?? [];
    $this->whitelist_rules = $whitelist_rules ?? ;
  }
}

class UpdateInputSecurityGroupResponse {
  public InputSecurityGroup $security_group;

  public function __construct(shape(
  ?'security_group' => InputSecurityGroup,
  ) $s = shape()) {
    $this->security_group = $security_group ?? ;
  }
}

class UpdateInputSecurityGroupResultModel {
  public InputSecurityGroup $security_group;

  public function __construct(shape(
  ?'security_group' => InputSecurityGroup,
  ) $s = shape()) {
    $this->security_group = $security_group ?? ;
  }
}

class UpdateMultiplex {
  public MultiplexSettings $multiplex_settings;
  public __string $name;

  public function __construct(shape(
  ?'multiplex_settings' => MultiplexSettings,
  ?'name' => __string,
  ) $s = shape()) {
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
  }
}

class UpdateMultiplexProgram {
  public MultiplexProgramSettings $multiplex_program_settings;

  public function __construct(shape(
  ?'multiplex_program_settings' => MultiplexProgramSettings,
  ) $s = shape()) {
    $this->multiplex_program_settings = $multiplex_program_settings ?? null;
  }
}

class UpdateMultiplexProgramRequest {
  public __string $multiplex_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public __string $program_name;

  public function __construct(shape(
  ?'multiplex_id' => __string,
  ?'multiplex_program_settings' => MultiplexProgramSettings,
  ?'program_name' => __string,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
    $this->multiplex_program_settings = $multiplex_program_settings ?? null;
    $this->program_name = $program_name ?? ;
  }
}

class UpdateMultiplexProgramResponse {
  public MultiplexProgram $multiplex_program;

  public function __construct(shape(
  ?'multiplex_program' => MultiplexProgram,
  ) $s = shape()) {
    $this->multiplex_program = $multiplex_program ?? null;
  }
}

class UpdateMultiplexProgramResultModel {
  public MultiplexProgram $multiplex_program;

  public function __construct(shape(
  ?'multiplex_program' => MultiplexProgram,
  ) $s = shape()) {
    $this->multiplex_program = $multiplex_program ?? null;
  }
}

class UpdateMultiplexRequest {
  public __string $multiplex_id;
  public MultiplexSettings $multiplex_settings;
  public __string $name;

  public function __construct(shape(
  ?'multiplex_id' => __string,
  ?'multiplex_settings' => MultiplexSettings,
  ?'name' => __string,
  ) $s = shape()) {
    $this->multiplex_id = $multiplex_id ?? ;
    $this->multiplex_settings = $multiplex_settings ?? null;
    $this->name = $name ?? ;
  }
}

class UpdateMultiplexResponse {
  public Multiplex $multiplex;

  public function __construct(shape(
  ?'multiplex' => Multiplex,
  ) $s = shape()) {
    $this->multiplex = $multiplex ?? null;
  }
}

class UpdateMultiplexResultModel {
  public Multiplex $multiplex;

  public function __construct(shape(
  ?'multiplex' => Multiplex,
  ) $s = shape()) {
    $this->multiplex = $multiplex ?? null;
  }
}

class UpdateReservation {
  public __string $name;

  public function __construct(shape(
  ?'name' => __string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class UpdateReservationRequest {
  public __string $name;
  public __string $reservation_id;

  public function __construct(shape(
  ?'name' => __string,
  ?'reservation_id' => __string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->reservation_id = $reservation_id ?? ;
  }
}

class UpdateReservationResponse {
  public Reservation $reservation;

  public function __construct(shape(
  ?'reservation' => Reservation,
  ) $s = shape()) {
    $this->reservation = $reservation ?? null;
  }
}

class UpdateReservationResultModel {
  public Reservation $reservation;

  public function __construct(shape(
  ?'reservation' => Reservation,
  ) $s = shape()) {
    $this->reservation = $reservation ?? null;
  }
}

class ValidationError {
  public __string $element_path;
  public __string $error_message;

  public function __construct(shape(
  ?'element_path' => __string,
  ?'error_message' => __string,
  ) $s = shape()) {
    $this->element_path = $element_path ?? ;
    $this->error_message = $error_message ?? ;
  }
}

class VideoCodecSettings {
  public FrameCaptureSettings $frame_capture_settings;
  public H264Settings $h_264_settings;
  public H265Settings $h_265_settings;

  public function __construct(shape(
  ?'frame_capture_settings' => FrameCaptureSettings,
  ?'h_264_settings' => H264Settings,
  ?'h_265_settings' => H265Settings,
  ) $s = shape()) {
    $this->frame_capture_settings = $frame_capture_settings ?? null;
    $this->h_264_settings = $h_264_settings ?? null;
    $this->h_265_settings = $h_265_settings ?? null;
  }
}

class VideoDescription {
  public VideoCodecSettings $codec_settings;
  public __integer $height;
  public __string $name;
  public VideoDescriptionRespondToAfd $respond_to_afd;
  public VideoDescriptionScalingBehavior $scaling_behavior;
  public __integerMin0Max100 $sharpness;
  public __integer $width;

  public function __construct(shape(
  ?'codec_settings' => VideoCodecSettings,
  ?'height' => __integer,
  ?'name' => __string,
  ?'respond_to_afd' => VideoDescriptionRespondToAfd,
  ?'scaling_behavior' => VideoDescriptionScalingBehavior,
  ?'sharpness' => __integerMin0Max100,
  ?'width' => __integer,
  ) $s = shape()) {
    $this->codec_settings = $codec_settings ?? ;
    $this->height = $height ?? ;
    $this->name = $name ?? ;
    $this->respond_to_afd = $respond_to_afd ?? ;
    $this->scaling_behavior = $scaling_behavior ?? ;
    $this->sharpness = $sharpness ?? ;
    $this->width = $width ?? ;
  }
}

type VideoDescriptionRespondToAfd = string;

type VideoDescriptionScalingBehavior = string;

class VideoSelector {
  public VideoSelectorColorSpace $color_space;
  public VideoSelectorColorSpaceUsage $color_space_usage;
  public VideoSelectorSettings $selector_settings;

  public function __construct(shape(
  ?'color_space' => VideoSelectorColorSpace,
  ?'color_space_usage' => VideoSelectorColorSpaceUsage,
  ?'selector_settings' => VideoSelectorSettings,
  ) $s = shape()) {
    $this->color_space = $color_space ?? ;
    $this->color_space_usage = $color_space_usage ?? ;
    $this->selector_settings = $selector_settings ?? ;
  }
}

type VideoSelectorColorSpace = string;

type VideoSelectorColorSpaceUsage = string;

class VideoSelectorPid {
  public __integerMin0Max8191 $pid;

  public function __construct(shape(
  ?'pid' => __integerMin0Max8191,
  ) $s = shape()) {
    $this->pid = $pid ?? ;
  }
}

class VideoSelectorProgramId {
  public __integerMin0Max65536 $program_id;

  public function __construct(shape(
  ?'program_id' => __integerMin0Max65536,
  ) $s = shape()) {
    $this->program_id = $program_id ?? ;
  }
}

class VideoSelectorSettings {
  public VideoSelectorPid $video_selector_pid;
  public VideoSelectorProgramId $video_selector_program_id;

  public function __construct(shape(
  ?'video_selector_pid' => VideoSelectorPid,
  ?'video_selector_program_id' => VideoSelectorProgramId,
  ) $s = shape()) {
    $this->video_selector_pid = $video_selector_pid ?? null;
    $this->video_selector_program_id = $video_selector_program_id ?? null;
  }
}

class WebvttDestinationSettings {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type __boolean = bool;

type __double = float;

type __doubleMin0 = float;

type __doubleMin1 = float;

type __doubleMinNegative59Max0 = float;

type __integer = int;

type __integerMin0 = int;

type __integerMin0Max10 = int;

type __integerMin0Max100 = int;

type __integerMin0Max1000 = int;

type __integerMin0Max10000 = int;

type __integerMin0Max1000000 = int;

type __integerMin0Max100000000 = int;

type __integerMin0Max128 = int;

type __integerMin0Max15 = int;

type __integerMin0Max255 = int;

type __integerMin0Max30 = int;

type __integerMin0Max32768 = int;

type __integerMin0Max3600 = int;

type __integerMin0Max500 = int;

type __integerMin0Max600 = int;

type __integerMin0Max65535 = int;

type __integerMin0Max65536 = int;

type __integerMin0Max7 = int;

type __integerMin0Max8191 = int;

type __integerMin1 = int;

type __integerMin1000 = int;

type __integerMin1000000Max100000000 = int;

type __integerMin100000Max100000000 = int;

type __integerMin100000Max40000000 = int;

type __integerMin100000Max80000000 = int;

type __integerMin1000Max3000 = int;

type __integerMin1000Max30000 = int;

type __integerMin1Max10 = int;

type __integerMin1Max1000000 = int;

type __integerMin1Max16 = int;

type __integerMin1Max20 = int;

type __integerMin1Max3003 = int;

type __integerMin1Max31 = int;

type __integerMin1Max32 = int;

type __integerMin1Max3600000 = int;

type __integerMin1Max4 = int;

type __integerMin1Max5 = int;

type __integerMin1Max6 = int;

type __integerMin1Max8 = int;

type __integerMin25Max10000 = int;

type __integerMin25Max2000 = int;

type __integerMin3 = int;

type __integerMin30 = int;

type __integerMin4Max20 = int;

type __integerMin96Max600 = int;

type __integerMinNegative1000Max1000 = int;

type __integerMinNegative60Max6 = int;

type __integerMinNegative60Max60 = int;

type __listOfAudioChannelMapping = vec<AudioChannelMapping>;

type __listOfAudioDescription = vec<AudioDescription>;

type __listOfAudioSelector = vec<AudioSelector>;

type __listOfCaptionDescription = vec<CaptionDescription>;

type __listOfCaptionLanguageMapping = vec<CaptionLanguageMapping>;

type __listOfCaptionSelector = vec<CaptionSelector>;

type __listOfChannelEgressEndpoint = vec<ChannelEgressEndpoint>;

type __listOfChannelSummary = vec<ChannelSummary>;

type __listOfHlsAdMarkers = vec<HlsAdMarkers>;

type __listOfInput = vec<Input>;

type __listOfInputAttachment = vec<InputAttachment>;

type __listOfInputChannelLevel = vec<InputChannelLevel>;

type __listOfInputDestination = vec<InputDestination>;

type __listOfInputDestinationRequest = vec<InputDestinationRequest>;

type __listOfInputSecurityGroup = vec<InputSecurityGroup>;

type __listOfInputSource = vec<InputSource>;

type __listOfInputSourceRequest = vec<InputSourceRequest>;

type __listOfInputWhitelistRule = vec<InputWhitelistRule>;

type __listOfInputWhitelistRuleCidr = vec<InputWhitelistRuleCidr>;

type __listOfMediaConnectFlow = vec<MediaConnectFlow>;

type __listOfMediaConnectFlowRequest = vec<MediaConnectFlowRequest>;

type __listOfMediaPackageOutputDestinationSettings = vec<MediaPackageOutputDestinationSettings>;

type __listOfMultiplexOutputDestination = vec<MultiplexOutputDestination>;

type __listOfMultiplexProgramSummary = vec<MultiplexProgramSummary>;

type __listOfMultiplexSummary = vec<MultiplexSummary>;

type __listOfMultiplexValidationError = vec<MultiplexValidationError>;

type __listOfOffering = vec<Offering>;

type __listOfOutput = vec<Output>;

type __listOfOutputDestination = vec<OutputDestination>;

type __listOfOutputDestinationSettings = vec<OutputDestinationSettings>;

type __listOfOutputGroup = vec<OutputGroup>;

type __listOfPipelineDetail = vec<PipelineDetail>;

type __listOfPipelinePauseStateSettings = vec<PipelinePauseStateSettings>;

type __listOfReservation = vec<Reservation>;

type __listOfScheduleAction = vec<ScheduleAction>;

type __listOfScte35Descriptor = vec<Scte35Descriptor>;

type __listOfValidationError = vec<ValidationError>;

type __listOfVideoDescription = vec<VideoDescription>;

type __listOf__integer = vec<__integer>;

type __listOf__string = vec<__string>;

type __long = int;

type __longMin0Max1099511627775 = int;

type __longMin0Max4294967295 = int;

type __longMin0Max8589934591 = int;

type __string = string;

type __stringMax256 = string;

type __stringMax32 = string;

type __stringMin1 = string;

type __stringMin1Max255 = string;

type __stringMin1Max256 = string;

type __stringMin32Max32 = string;

type __stringMin34Max34 = string;

type __stringMin3Max3 = string;

type __stringMin6Max6 = string;

type __timestampIso8601 = int;

type __timestampUnix = int;

