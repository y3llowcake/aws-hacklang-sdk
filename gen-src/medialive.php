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

class AacCodingMode {
}

class AacInputType {
}

class AacProfile {
}

class AacRateControlMode {
}

class AacRawFormat {
}

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
}

class AacSpec {
}

class AacVbrQuality {
}

class Ac3BitstreamMode {
}

class Ac3CodingMode {
}

class Ac3DrcProfile {
}

class Ac3LfeFilter {
}

class Ac3MetadataControl {
}

class Ac3Settings {
  public __double $bitrate;
  public Ac3BitstreamMode $bitstream_mode;
  public Ac3CodingMode $coding_mode;
  public __integerMin1Max31 $dialnorm;
  public Ac3DrcProfile $drc_profile;
  public Ac3LfeFilter $lfe_filter;
  public Ac3MetadataControl $metadata_control;
}

class AccessDenied {
  public __string $message;
}

class AfdSignaling {
}

class ArchiveContainerSettings {
  public M2tsSettings $m_2_ts_settings;
}

class ArchiveGroupSettings {
  public OutputLocationRef $destination;
  public __integerMin1 $rollover_interval;
}

class ArchiveOutputSettings {
  public ArchiveContainerSettings $container_settings;
  public __string $extension;
  public __string $name_modifier;
}

class AribDestinationSettings {
}

class AribSourceSettings {
}

class AudioChannelMapping {
  public __listOfInputChannelLevel $input_channel_levels;
  public __integerMin0Max7 $output_channel;
}

class AudioCodecSettings {
  public AacSettings $aac_settings;
  public Ac3Settings $ac_3_settings;
  public Eac3Settings $eac_3_settings;
  public Mp2Settings $mp_2_settings;
  public PassThroughSettings $pass_through_settings;
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
}

class AudioDescriptionAudioTypeControl {
}

class AudioDescriptionLanguageCodeControl {
}

class AudioLanguageSelection {
  public __string $language_code;
  public AudioLanguageSelectionPolicy $language_selection_policy;
}

class AudioLanguageSelectionPolicy {
}

class AudioNormalizationAlgorithm {
}

class AudioNormalizationAlgorithmControl {
}

class AudioNormalizationSettings {
  public AudioNormalizationAlgorithm $algorithm;
  public AudioNormalizationAlgorithmControl $algorithm_control;
  public __doubleMinNegative59Max0 $target_lkfs;
}

class AudioOnlyHlsSegmentType {
}

class AudioOnlyHlsSettings {
  public __string $audio_group_id;
  public InputLocation $audio_only_image;
  public AudioOnlyHlsTrackType $audio_track_type;
  public AudioOnlyHlsSegmentType $segment_type;
}

class AudioOnlyHlsTrackType {
}

class AudioPidSelection {
  public __integerMin0Max8191 $pid;
}

class AudioSelector {
  public __stringMin1 $name;
  public AudioSelectorSettings $selector_settings;
}

class AudioSelectorSettings {
  public AudioLanguageSelection $audio_language_selection;
  public AudioPidSelection $audio_pid_selection;
}

class AudioType {
}

class AuthenticationScheme {
}

class AutomaticInputFailoverSettings {
  public InputPreference $input_preference;
  public __string $secondary_input_id;
}

class AvailBlanking {
  public InputLocation $avail_blanking_image;
  public AvailBlankingState $state;
}

class AvailBlankingState {
}

class AvailConfiguration {
  public AvailSettings $avail_settings;
}

class AvailSettings {
  public Scte35SpliceInsert $scte_35_splice_insert;
  public Scte35TimeSignalApos $scte_35_time_signal_apos;
}

class BadGatewayException {
  public __string $message;
}

class BadRequestException {
  public __string $message;
}

class BatchScheduleActionCreateRequest {
  public __listOfScheduleAction $schedule_actions;
}

class BatchScheduleActionCreateResult {
  public __listOfScheduleAction $schedule_actions;
}

class BatchScheduleActionDeleteRequest {
  public __listOf__string $action_names;
}

class BatchScheduleActionDeleteResult {
  public __listOfScheduleAction $schedule_actions;
}

class BatchUpdateScheduleRequest {
  public __string $channel_id;
  public BatchScheduleActionCreateRequest $creates;
  public BatchScheduleActionDeleteRequest $deletes;
}

class BatchUpdateScheduleResponse {
  public BatchScheduleActionCreateResult $creates;
  public BatchScheduleActionDeleteResult $deletes;
}

class BatchUpdateScheduleResult {
  public BatchScheduleActionCreateResult $creates;
  public BatchScheduleActionDeleteResult $deletes;
}

class BlackoutSlate {
  public InputLocation $blackout_slate_image;
  public BlackoutSlateNetworkEndBlackout $network_end_blackout;
  public InputLocation $network_end_blackout_image;
  public __stringMin34Max34 $network_id;
  public BlackoutSlateState $state;
}

class BlackoutSlateNetworkEndBlackout {
}

class BlackoutSlateState {
}

class BurnInAlignment {
}

class BurnInBackgroundColor {
}

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
}

class BurnInFontColor {
}

class BurnInOutlineColor {
}

class BurnInShadowColor {
}

class BurnInTeletextGridControl {
}

class CaptionDescription {
  public __string $caption_selector_name;
  public CaptionDestinationSettings $destination_settings;
  public __string $language_code;
  public __string $language_description;
  public __string $name;
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
}

class CaptionLanguageMapping {
  public __integerMin1Max4 $caption_channel;
  public __stringMin3Max3 $language_code;
  public __stringMin1 $language_description;
}

class CaptionSelector {
  public __string $language_code;
  public __stringMin1 $name;
  public CaptionSelectorSettings $selector_settings;
}

class CaptionSelectorSettings {
  public AribSourceSettings $arib_source_settings;
  public DvbSubSourceSettings $dvb_sub_source_settings;
  public EmbeddedSourceSettings $embedded_source_settings;
  public Scte20SourceSettings $scte_20_source_settings;
  public Scte27SourceSettings $scte_27_source_settings;
  public TeletextSourceSettings $teletext_source_settings;
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
}

class ChannelClass {
}

class ChannelConfigurationValidationError {
  public __string $message;
  public __listOfValidationError $validation_errors;
}

class ChannelEgressEndpoint {
  public __string $source_ip;
}

class ChannelState {
}

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
}

class ColorSpacePassthroughSettings {
}

class ConflictException {
  public __string $message;
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
}

class CreateChannelResponse {
  public Channel $channel;
}

class CreateChannelResultModel {
  public Channel $channel;
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
}

class CreateInputResponse {
  public Input $input;
}

class CreateInputResultModel {
  public Input $input;
}

class CreateInputSecurityGroupRequest {
  public Tags $tags;
  public __listOfInputWhitelistRuleCidr $whitelist_rules;
}

class CreateInputSecurityGroupResponse {
  public InputSecurityGroup $security_group;
}

class CreateInputSecurityGroupResultModel {
  public InputSecurityGroup $security_group;
}

class CreateMultiplex {
  public __listOf__string $availability_zones;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
  public __string $request_id;
  public Tags $tags;
}

class CreateMultiplexProgram {
  public MultiplexProgramSettings $multiplex_program_settings;
  public __string $program_name;
  public __string $request_id;
}

class CreateMultiplexProgramRequest {
  public __string $multiplex_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public __string $program_name;
  public __string $request_id;
}

class CreateMultiplexProgramResponse {
  public MultiplexProgram $multiplex_program;
}

class CreateMultiplexProgramResultModel {
  public MultiplexProgram $multiplex_program;
}

class CreateMultiplexRequest {
  public __listOf__string $availability_zones;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
  public __string $request_id;
  public Tags $tags;
}

class CreateMultiplexResponse {
  public Multiplex $multiplex;
}

class CreateMultiplexResultModel {
  public Multiplex $multiplex;
}

class CreateTagsRequest {
  public __string $resource_arn;
  public Tags $tags;
}

class DeleteChannelRequest {
  public __string $channel_id;
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
}

class DeleteInputRequest {
  public __string $input_id;
}

class DeleteInputResponse {
}

class DeleteInputSecurityGroupRequest {
  public __string $input_security_group_id;
}

class DeleteInputSecurityGroupResponse {
}

class DeleteMultiplexProgramRequest {
  public __string $multiplex_id;
  public __string $program_name;
}

class DeleteMultiplexProgramResponse {
  public __string $channel_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public MultiplexProgramPacketIdentifiersMap $packet_identifiers_map;
  public __string $program_name;
}

class DeleteMultiplexRequest {
  public __string $multiplex_id;
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
}

class DeleteReservationRequest {
  public __string $reservation_id;
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
}

class DeleteScheduleRequest {
  public __string $channel_id;
}

class DeleteScheduleResponse {
}

class DeleteTagsRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class DescribeChannelRequest {
  public __string $channel_id;
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
}

class DescribeInputRequest {
  public __string $input_id;
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
}

class DescribeInputSecurityGroupRequest {
  public __string $input_security_group_id;
}

class DescribeInputSecurityGroupResponse {
  public __string $arn;
  public __string $id;
  public __listOf__string $inputs;
  public InputSecurityGroupState $state;
  public Tags $tags;
  public __listOfInputWhitelistRule $whitelist_rules;
}

class DescribeMultiplexProgramRequest {
  public __string $multiplex_id;
  public __string $program_name;
}

class DescribeMultiplexProgramResponse {
  public __string $channel_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public MultiplexProgramPacketIdentifiersMap $packet_identifiers_map;
  public __string $program_name;
}

class DescribeMultiplexRequest {
  public __string $multiplex_id;
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
}

class DescribeOfferingRequest {
  public __string $offering_id;
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
}

class DescribeReservationRequest {
  public __string $reservation_id;
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
}

class DescribeScheduleRequest {
  public __string $channel_id;
  public MaxResults $max_results;
  public __string $next_token;
}

class DescribeScheduleResponse {
  public __string $next_token;
  public __listOfScheduleAction $schedule_actions;
}

class DvbNitSettings {
  public __integerMin0Max65536 $network_id;
  public __stringMin1Max256 $network_name;
  public __integerMin25Max10000 $rep_interval;
}

class DvbSdtOutputSdt {
}

class DvbSdtSettings {
  public DvbSdtOutputSdt $output_sdt;
  public __integerMin25Max2000 $rep_interval;
  public __stringMin1Max256 $service_name;
  public __stringMin1Max256 $service_provider_name;
}

class DvbSubDestinationAlignment {
}

class DvbSubDestinationBackgroundColor {
}

class DvbSubDestinationFontColor {
}

class DvbSubDestinationOutlineColor {
}

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
}

class DvbSubDestinationShadowColor {
}

class DvbSubDestinationTeletextGridControl {
}

class DvbSubSourceSettings {
  public __integerMin1 $pid;
}

class DvbTdtSettings {
  public __integerMin1000Max30000 $rep_interval;
}

class Eac3AttenuationControl {
}

class Eac3BitstreamMode {
}

class Eac3CodingMode {
}

class Eac3DcFilter {
}

class Eac3DrcLine {
}

class Eac3DrcRf {
}

class Eac3LfeControl {
}

class Eac3LfeFilter {
}

class Eac3MetadataControl {
}

class Eac3PassthroughControl {
}

class Eac3PhaseControl {
}

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
}

class Eac3StereoDownmix {
}

class Eac3SurroundExMode {
}

class Eac3SurroundMode {
}

class EmbeddedConvert608To708 {
}

class EmbeddedDestinationSettings {
}

class EmbeddedPlusScte20DestinationSettings {
}

class EmbeddedScte20Detection {
}

class EmbeddedSourceSettings {
  public EmbeddedConvert608To708 $convert_608_to_708;
  public EmbeddedScte20Detection $scte_20_detection;
  public __integerMin1Max4 $source_608_channel_number;
  public __integerMin1Max5 $source_608_track_number;
}

class Empty {
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
}

class FecOutputIncludeFec {
}

class FecOutputSettings {
  public __integerMin4Max20 $column_depth;
  public FecOutputIncludeFec $include_fec;
  public __integerMin1Max20 $row_length;
}

class FixedAfd {
}

class FixedModeScheduleActionStartSettings {
  public __string $time;
}

class Fmp4HlsSettings {
  public __string $audio_rendition_sets;
}

class FollowModeScheduleActionStartSettings {
  public FollowPoint $follow_point;
  public __string $reference_action_name;
}

class FollowPoint {
}

class ForbiddenException {
  public __string $message;
}

class FrameCaptureGroupSettings {
  public OutputLocationRef $destination;
}

class FrameCaptureIntervalUnit {
}

class FrameCaptureOutputSettings {
  public __string $name_modifier;
}

class FrameCaptureSettings {
  public __integerMin1Max3600000 $capture_interval;
  public FrameCaptureIntervalUnit $capture_interval_units;
}

class GatewayTimeoutException {
  public __string $message;
}

class GlobalConfiguration {
  public __integerMinNegative60Max60 $initial_audio_gain;
  public GlobalConfigurationInputEndAction $input_end_action;
  public InputLossBehavior $input_loss_behavior;
  public GlobalConfigurationOutputLockingMode $output_locking_mode;
  public GlobalConfigurationOutputTimingSource $output_timing_source;
  public GlobalConfigurationLowFramerateInputs $support_low_framerate_inputs;
}

class GlobalConfigurationInputEndAction {
}

class GlobalConfigurationLowFramerateInputs {
}

class GlobalConfigurationOutputLockingMode {
}

class GlobalConfigurationOutputTimingSource {
}

class H264AdaptiveQuantization {
}

class H264ColorMetadata {
}

class H264ColorSpaceSettings {
  public ColorSpacePassthroughSettings $color_space_passthrough_settings;
  public Rec601Settings $rec_601_settings;
  public Rec709Settings $rec_709_settings;
}

class H264EntropyEncoding {
}

class H264FlickerAq {
}

class H264ForceFieldPictures {
}

class H264FramerateControl {
}

class H264GopBReference {
}

class H264GopSizeUnits {
}

class H264Level {
}

class H264LookAheadRateControl {
}

class H264ParControl {
}

class H264Profile {
}

class H264RateControlMode {
}

class H264ScanType {
}

class H264SceneChangeDetect {
}

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
}

class H264SpatialAq {
}

class H264SubGopLength {
}

class H264Syntax {
}

class H264TemporalAq {
}

class H264TimecodeInsertionBehavior {
}

class H265AdaptiveQuantization {
}

class H265AlternativeTransferFunction {
}

class H265ColorMetadata {
}

class H265ColorSpaceSettings {
  public ColorSpacePassthroughSettings $color_space_passthrough_settings;
  public Hdr10Settings $hdr_10_settings;
  public Rec601Settings $rec_601_settings;
  public Rec709Settings $rec_709_settings;
}

class H265FlickerAq {
}

class H265GopSizeUnits {
}

class H265Level {
}

class H265LookAheadRateControl {
}

class H265Profile {
}

class H265RateControlMode {
}

class H265ScanType {
}

class H265SceneChangeDetect {
}

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
}

class H265Tier {
}

class H265TimecodeInsertionBehavior {
}

class Hdr10Settings {
  public __integerMin0Max32768 $max_cll;
  public __integerMin0Max32768 $max_fall;
}

class HlsAdMarkers {
}

class HlsAkamaiHttpTransferMode {
}

class HlsAkamaiSettings {
  public __integerMin0 $connection_retry_interval;
  public __integerMin0Max600 $filecache_duration;
  public HlsAkamaiHttpTransferMode $http_transfer_mode;
  public __integerMin0 $num_retries;
  public __integerMin0Max15 $restart_delay;
  public __string $salt;
  public __string $token;
}

class HlsBasicPutSettings {
  public __integerMin0 $connection_retry_interval;
  public __integerMin0Max600 $filecache_duration;
  public __integerMin0 $num_retries;
  public __integerMin0Max15 $restart_delay;
}

class HlsCaptionLanguageSetting {
}

class HlsCdnSettings {
  public HlsAkamaiSettings $hls_akamai_settings;
  public HlsBasicPutSettings $hls_basic_put_settings;
  public HlsMediaStoreSettings $hls_media_store_settings;
  public HlsWebdavSettings $hls_webdav_settings;
}

class HlsClientCache {
}

class HlsCodecSpecification {
}

class HlsDirectoryStructure {
}

class HlsEncryptionType {
}

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
}

class HlsH265PackagingType {
}

class HlsId3SegmentTaggingScheduleActionSettings {
  public __string $tag;
}

class HlsId3SegmentTaggingState {
}

class HlsInputSettings {
  public __integerMin0 $bandwidth;
  public __integerMin0 $buffer_segments;
  public __integerMin0 $retries;
  public __integerMin0 $retry_interval;
}

class HlsIvInManifest {
}

class HlsIvSource {
}

class HlsManifestCompression {
}

class HlsManifestDurationFormat {
}

class HlsMediaStoreSettings {
  public __integerMin0 $connection_retry_interval;
  public __integerMin0Max600 $filecache_duration;
  public HlsMediaStoreStorageClass $media_store_storage_class;
  public __integerMin0 $num_retries;
  public __integerMin0Max15 $restart_delay;
}

class HlsMediaStoreStorageClass {
}

class HlsMode {
}

class HlsOutputSelection {
}

class HlsOutputSettings {
  public HlsH265PackagingType $h_265_packaging_type;
  public HlsSettings $hls_settings;
  public __stringMin1 $name_modifier;
  public __string $segment_modifier;
}

class HlsProgramDateTime {
}

class HlsRedundantManifest {
}

class HlsSegmentationMode {
}

class HlsSettings {
  public AudioOnlyHlsSettings $audio_only_hls_settings;
  public Fmp4HlsSettings $fmp_4_hls_settings;
  public StandardHlsSettings $standard_hls_settings;
}

class HlsStreamInfResolution {
}

class HlsTimedMetadataId3Frame {
}

class HlsTimedMetadataScheduleActionSettings {
  public __string $id_3;
}

class HlsTsFileMode {
}

class HlsWebdavHttpTransferMode {
}

class HlsWebdavSettings {
  public __integerMin0 $connection_retry_interval;
  public __integerMin0Max600 $filecache_duration;
  public HlsWebdavHttpTransferMode $http_transfer_mode;
  public __integerMin0 $num_retries;
  public __integerMin0Max15 $restart_delay;
}

class IFrameOnlyPlaylistType {
}

class ImmediateModeScheduleActionStartSettings {
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
}

class InputAttachment {
  public AutomaticInputFailoverSettings $automatic_input_failover_settings;
  public __string $input_attachment_name;
  public __string $input_id;
  public InputSettings $input_settings;
}

class InputChannelLevel {
  public __integerMinNegative60Max6 $gain;
  public __integerMin0Max15 $input_channel;
}

class InputClass {
}

class InputClippingSettings {
  public InputTimecodeSource $input_timecode_source;
  public StartTimecode $start_timecode;
  public StopTimecode $stop_timecode;
}

class InputCodec {
}

class InputDeblockFilter {
}

class InputDenoiseFilter {
}

class InputDestination {
  public __string $ip;
  public __string $port;
  public __string $url;
  public InputDestinationVpc $vpc;
}

class InputDestinationRequest {
  public __string $stream_name;
}

class InputDestinationVpc {
  public __string $availability_zone;
  public __string $network_interface_id;
}

class InputFilter {
}

class InputLocation {
  public __string $password_param;
  public __string $uri;
  public __string $username;
}

class InputLossActionForHlsOut {
}

class InputLossActionForMsSmoothOut {
}

class InputLossActionForRtmpOut {
}

class InputLossActionForUdpOut {
}

class InputLossBehavior {
  public __integerMin0Max1000000 $black_frame_msec;
  public __stringMin6Max6 $input_loss_image_color;
  public InputLocation $input_loss_image_slate;
  public InputLossImageType $input_loss_image_type;
  public __integerMin0Max1000000 $repeat_frame_msec;
}

class InputLossImageType {
}

class InputMaximumBitrate {
}

class InputPreference {
}

class InputResolution {
}

class InputSecurityGroup {
  public __string $arn;
  public __string $id;
  public __listOf__string $inputs;
  public InputSecurityGroupState $state;
  public Tags $tags;
  public __listOfInputWhitelistRule $whitelist_rules;
}

class InputSecurityGroupState {
}

class InputSecurityGroupWhitelistRequest {
  public Tags $tags;
  public __listOfInputWhitelistRuleCidr $whitelist_rules;
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
}

class InputSource {
  public __string $password_param;
  public __string $url;
  public __string $username;
}

class InputSourceEndBehavior {
}

class InputSourceRequest {
  public __string $password_param;
  public __string $url;
  public __string $username;
}

class InputSourceType {
}

class InputSpecification {
  public InputCodec $codec;
  public InputMaximumBitrate $maximum_bitrate;
  public InputResolution $resolution;
}

class InputState {
}

class InputSwitchScheduleActionSettings {
  public __string $input_attachment_name_reference;
  public InputClippingSettings $input_clipping_settings;
  public __listOf__string $url_path;
}

class InputTimecodeSource {
}

class InputType {
}

class InputVpcRequest {
  public __listOf__string $security_group_ids;
  public __listOf__string $subnet_ids;
}

class InputWhitelistRule {
  public __string $cidr;
}

class InputWhitelistRuleCidr {
  public __string $cidr;
}

class InternalServerErrorException {
  public __string $message;
}

class InternalServiceError {
  public __string $message;
}

class InvalidRequest {
  public __string $message;
}

class KeyProviderSettings {
  public StaticKeySettings $static_key_settings;
}

class LastFrameClippingBehavior {
}

class LimitExceeded {
  public __string $message;
}

class ListChannelsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListChannelsResponse {
  public __listOfChannelSummary $channels;
  public __string $next_token;
}

class ListChannelsResultModel {
  public __listOfChannelSummary $channels;
  public __string $next_token;
}

class ListInputSecurityGroupsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListInputSecurityGroupsResponse {
  public __listOfInputSecurityGroup $input_security_groups;
  public __string $next_token;
}

class ListInputSecurityGroupsResultModel {
  public __listOfInputSecurityGroup $input_security_groups;
  public __string $next_token;
}

class ListInputsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListInputsResponse {
  public __listOfInput $inputs;
  public __string $next_token;
}

class ListInputsResultModel {
  public __listOfInput $inputs;
  public __string $next_token;
}

class ListMultiplexProgramsRequest {
  public MaxResults $max_results;
  public __string $multiplex_id;
  public __string $next_token;
}

class ListMultiplexProgramsResponse {
  public __listOfMultiplexProgramSummary $multiplex_programs;
  public __string $next_token;
}

class ListMultiplexProgramsResultModel {
  public __listOfMultiplexProgramSummary $multiplex_programs;
  public __string $next_token;
}

class ListMultiplexesRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListMultiplexesResponse {
  public __listOfMultiplexSummary $multiplexes;
  public __string $next_token;
}

class ListMultiplexesResultModel {
  public __listOfMultiplexSummary $multiplexes;
  public __string $next_token;
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
}

class ListOfferingsResponse {
  public __string $next_token;
  public __listOfOffering $offerings;
}

class ListOfferingsResultModel {
  public __string $next_token;
  public __listOfOffering $offerings;
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
}

class ListReservationsResponse {
  public __string $next_token;
  public __listOfReservation $reservations;
}

class ListReservationsResultModel {
  public __string $next_token;
  public __listOfReservation $reservations;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class LogLevel {
}

class M2tsAbsentInputAudioBehavior {
}

class M2tsArib {
}

class M2tsAribCaptionsPidControl {
}

class M2tsAudioBufferModel {
}

class M2tsAudioInterval {
}

class M2tsAudioStreamType {
}

class M2tsBufferModel {
}

class M2tsCcDescriptor {
}

class M2tsEbifControl {
}

class M2tsEbpPlacement {
}

class M2tsEsRateInPes {
}

class M2tsKlv {
}

class M2tsNielsenId3Behavior {
}

class M2tsPcrControl {
}

class M2tsRateMode {
}

class M2tsScte35Control {
}

class M2tsSegmentationMarkers {
}

class M2tsSegmentationStyle {
}

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
}

class M2tsTimedMetadataBehavior {
}

class M3u8NielsenId3Behavior {
}

class M3u8PcrControl {
}

class M3u8Scte35Behavior {
}

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
}

class M3u8TimedMetadataBehavior {
}

class MaxResults {
}

class MediaConnectFlow {
  public __string $flow_arn;
}

class MediaConnectFlowRequest {
  public __string $flow_arn;
}

class MediaPackageGroupSettings {
  public OutputLocationRef $destination;
}

class MediaPackageOutputDestinationSettings {
  public __stringMin1 $channel_id;
}

class MediaPackageOutputSettings {
}

class Mp2CodingMode {
}

class Mp2Settings {
  public __double $bitrate;
  public Mp2CodingMode $coding_mode;
  public __double $sample_rate;
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
}

class MsSmoothH265PackagingType {
}

class MsSmoothOutputSettings {
  public MsSmoothH265PackagingType $h_265_packaging_type;
  public __string $name_modifier;
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
}

class MultiplexConfigurationValidationError {
  public __string $message;
  public __listOfMultiplexValidationError $validation_errors;
}

class MultiplexGroupSettings {
}

class MultiplexMediaConnectOutputDestinationSettings {
  public __stringMin1 $entitlement_arn;
}

class MultiplexOutputDestination {
  public MultiplexMediaConnectOutputDestinationSettings $media_connect_settings;
}

class MultiplexOutputSettings {
  public OutputLocationRef $destination;
}

class MultiplexProgram {
  public __string $channel_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public MultiplexProgramPacketIdentifiersMap $packet_identifiers_map;
  public __string $program_name;
}

class MultiplexProgramChannelDestinationSettings {
  public __stringMin1 $multiplex_id;
  public __stringMin1 $program_name;
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
}

class MultiplexProgramServiceDescriptor {
  public __stringMax256 $provider_name;
  public __stringMax256 $service_name;
}

class MultiplexProgramSettings {
  public PreferredChannelPipeline $preferred_channel_pipeline;
  public __integerMin0Max65535 $program_number;
  public MultiplexProgramServiceDescriptor $service_descriptor;
  public MultiplexVideoSettings $video_settings;
}

class MultiplexProgramSummary {
  public __string $channel_id;
  public __string $program_name;
}

class MultiplexSettings {
  public __integerMin1000Max3000 $maximum_video_buffer_delay_milliseconds;
  public __integerMin1000000Max100000000 $transport_stream_bitrate;
  public __integerMin0Max65535 $transport_stream_id;
  public __integerMin0Max100000000 $transport_stream_reserved_bitrate;
}

class MultiplexSettingsSummary {
  public __integerMin1000000Max100000000 $transport_stream_bitrate;
}

class MultiplexState {
}

class MultiplexStatmuxVideoSettings {
  public __integerMin100000Max100000000 $maximum_bitrate;
  public __integerMin100000Max100000000 $minimum_bitrate;
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
}

class MultiplexValidationError {
  public __string $element_path;
  public __string $error_message;
}

class MultiplexVideoSettings {
  public __integerMin100000Max100000000 $constant_bitrate;
  public MultiplexStatmuxVideoSettings $statmux_settings;
}

class NetworkInputServerValidation {
}

class NetworkInputSettings {
  public HlsInputSettings $hls_input_settings;
  public NetworkInputServerValidation $server_validation;
}

class NielsenConfiguration {
  public __string $distributor_id;
  public NielsenPcmToId3TaggingState $nielsen_pcm_to_id_3_tagging;
}

class NielsenPcmToId3TaggingState {
}

class NotFoundException {
  public __string $message;
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
}

class OfferingDurationUnits {
}

class OfferingType {
}

class Output {
  public __listOf__string $audio_description_names;
  public __listOf__string $caption_description_names;
  public __stringMin1Max255 $output_name;
  public OutputSettings $output_settings;
  public __string $video_description_name;
}

class OutputDestination {
  public __string $id;
  public __listOfMediaPackageOutputDestinationSettings $media_package_settings;
  public MultiplexProgramChannelDestinationSettings $multiplex_settings;
  public __listOfOutputDestinationSettings $settings;
}

class OutputDestinationSettings {
  public __string $password_param;
  public __string $stream_name;
  public __string $url;
  public __string $username;
}

class OutputGroup {
  public __stringMax32 $name;
  public OutputGroupSettings $output_group_settings;
  public __listOfOutput $outputs;
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
}

class OutputLocationRef {
  public __string $destination_ref_id;
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
}

class PassThroughSettings {
}

class PauseStateScheduleActionSettings {
  public __listOfPipelinePauseStateSettings $pipelines;
}

class PipelineDetail {
  public __string $active_input_attachment_name;
  public __string $active_input_switch_action_name;
  public __string $pipeline_id;
}

class PipelineId {
}

class PipelinePauseStateSettings {
  public PipelineId $pipeline_id;
}

class PreferredChannelPipeline {
}

class PurchaseOffering {
  public __integerMin1 $count;
  public __string $name;
  public __string $request_id;
  public __string $start;
  public Tags $tags;
}

class PurchaseOfferingRequest {
  public __integerMin1 $count;
  public __string $name;
  public __string $offering_id;
  public __string $request_id;
  public __string $start;
  public Tags $tags;
}

class PurchaseOfferingResponse {
  public Reservation $reservation;
}

class PurchaseOfferingResultModel {
  public Reservation $reservation;
}

class Rec601Settings {
}

class Rec709Settings {
}

class RemixSettings {
  public __listOfAudioChannelMapping $channel_mappings;
  public __integerMin1Max16 $channels_in;
  public __integerMin1Max8 $channels_out;
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
}

class ReservationCodec {
}

class ReservationMaximumBitrate {
}

class ReservationMaximumFramerate {
}

class ReservationResolution {
}

class ReservationResourceSpecification {
  public ChannelClass $channel_class;
  public ReservationCodec $codec;
  public ReservationMaximumBitrate $maximum_bitrate;
  public ReservationMaximumFramerate $maximum_framerate;
  public ReservationResolution $resolution;
  public ReservationResourceType $resource_type;
  public ReservationSpecialFeature $special_feature;
  public ReservationVideoQuality $video_quality;
}

class ReservationResourceType {
}

class ReservationSpecialFeature {
}

class ReservationState {
}

class ReservationVideoQuality {
}

class ResourceConflict {
  public __string $message;
}

class ResourceNotFound {
  public __string $message;
}

class RtmpCacheFullBehavior {
}

class RtmpCaptionData {
}

class RtmpCaptionInfoDestinationSettings {
}

class RtmpGroupSettings {
  public AuthenticationScheme $authentication_scheme;
  public RtmpCacheFullBehavior $cache_full_behavior;
  public __integerMin30 $cache_length;
  public RtmpCaptionData $caption_data;
  public InputLossActionForRtmpOut $input_loss_action;
  public __integerMin0 $restart_delay;
}

class RtmpOutputCertificateMode {
}

class RtmpOutputSettings {
  public RtmpOutputCertificateMode $certificate_mode;
  public __integerMin1 $connection_retry_interval;
  public OutputLocationRef $destination;
  public __integerMin0 $num_retries;
}

class ScheduleAction {
  public __string $action_name;
  public ScheduleActionSettings $schedule_action_settings;
  public ScheduleActionStartSettings $schedule_action_start_settings;
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
}

class ScheduleActionStartSettings {
  public FixedModeScheduleActionStartSettings $fixed_mode_schedule_action_start_settings;
  public FollowModeScheduleActionStartSettings $follow_mode_schedule_action_start_settings;
  public ImmediateModeScheduleActionStartSettings $immediate_mode_schedule_action_start_settings;
}

class ScheduleDeleteResultModel {
}

class ScheduleDescribeResultModel {
  public __string $next_token;
  public __listOfScheduleAction $schedule_actions;
}

class Scte20Convert608To708 {
}

class Scte20PlusEmbeddedDestinationSettings {
}

class Scte20SourceSettings {
  public Scte20Convert608To708 $convert_608_to_708;
  public __integerMin1Max4 $source_608_channel_number;
}

class Scte27DestinationSettings {
}

class Scte27SourceSettings {
  public __integerMin1 $pid;
}

class Scte35AposNoRegionalBlackoutBehavior {
}

class Scte35AposWebDeliveryAllowedBehavior {
}

class Scte35ArchiveAllowedFlag {
}

class Scte35DeliveryRestrictions {
  public Scte35ArchiveAllowedFlag $archive_allowed_flag;
  public Scte35DeviceRestrictions $device_restrictions;
  public Scte35NoRegionalBlackoutFlag $no_regional_blackout_flag;
  public Scte35WebDeliveryAllowedFlag $web_delivery_allowed_flag;
}

class Scte35Descriptor {
  public Scte35DescriptorSettings $scte_35_descriptor_settings;
}

class Scte35DescriptorSettings {
  public Scte35SegmentationDescriptor $segmentation_descriptor_scte_35_descriptor_settings;
}

class Scte35DeviceRestrictions {
}

class Scte35NoRegionalBlackoutFlag {
}

class Scte35ReturnToNetworkScheduleActionSettings {
  public __longMin0Max4294967295 $splice_event_id;
}

class Scte35SegmentationCancelIndicator {
}

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
}

class Scte35SpliceInsert {
  public __integerMinNegative1000Max1000 $ad_avail_offset;
  public Scte35SpliceInsertNoRegionalBlackoutBehavior $no_regional_blackout_flag;
  public Scte35SpliceInsertWebDeliveryAllowedBehavior $web_delivery_allowed_flag;
}

class Scte35SpliceInsertNoRegionalBlackoutBehavior {
}

class Scte35SpliceInsertScheduleActionSettings {
  public __longMin0Max8589934591 $duration;
  public __longMin0Max4294967295 $splice_event_id;
}

class Scte35SpliceInsertWebDeliveryAllowedBehavior {
}

class Scte35TimeSignalApos {
  public __integerMinNegative1000Max1000 $ad_avail_offset;
  public Scte35AposNoRegionalBlackoutBehavior $no_regional_blackout_flag;
  public Scte35AposWebDeliveryAllowedBehavior $web_delivery_allowed_flag;
}

class Scte35TimeSignalScheduleActionSettings {
  public __listOfScte35Descriptor $scte_35_descriptors;
}

class Scte35WebDeliveryAllowedFlag {
}

class SmoothGroupAudioOnlyTimecodeControl {
}

class SmoothGroupCertificateMode {
}

class SmoothGroupEventIdMode {
}

class SmoothGroupEventStopBehavior {
}

class SmoothGroupSegmentationMode {
}

class SmoothGroupSparseTrackType {
}

class SmoothGroupStreamManifestBehavior {
}

class SmoothGroupTimestampOffsetMode {
}

class SmpteTtDestinationSettings {
}

class StandardHlsSettings {
  public __string $audio_rendition_sets;
  public M3u8Settings $m_3_u8_settings;
}

class StartChannelRequest {
  public __string $channel_id;
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
}

class StartMultiplexRequest {
  public __string $multiplex_id;
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
}

class StartTimecode {
  public __string $timecode;
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
}

class StaticImageDeactivateScheduleActionSettings {
  public __integerMin0 $fade_out;
  public __integerMin0Max7 $layer;
}

class StaticKeySettings {
  public InputLocation $key_provider_server;
  public __stringMin32Max32 $static_key_value;
}

class StopChannelRequest {
  public __string $channel_id;
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
}

class StopMultiplexRequest {
  public __string $multiplex_id;
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
}

class StopTimecode {
  public LastFrameClippingBehavior $last_frame_clipping_behavior;
  public __string $timecode;
}

class Tags {
}

class TagsModel {
  public Tags $tags;
}

class TeletextDestinationSettings {
}

class TeletextSourceSettings {
  public __string $page_number;
}

class TimecodeConfig {
  public TimecodeConfigSource $source;
  public __integerMin1Max1000000 $sync_threshold;
}

class TimecodeConfigSource {
}

class TooManyRequestsException {
  public __string $message;
}

class TtmlDestinationSettings {
  public TtmlDestinationStyleControl $style_control;
}

class TtmlDestinationStyleControl {
}

class UdpContainerSettings {
  public M2tsSettings $m_2_ts_settings;
}

class UdpGroupSettings {
  public InputLossActionForUdpOut $input_loss_action;
  public UdpTimedMetadataId3Frame $timed_metadata_id_3_frame;
  public __integerMin0 $timed_metadata_id_3_period;
}

class UdpOutputSettings {
  public __integerMin0Max10000 $buffer_msec;
  public UdpContainerSettings $container_settings;
  public OutputLocationRef $destination;
  public FecOutputSettings $fec_output_settings;
}

class UdpTimedMetadataId3Frame {
}

class UnprocessableEntityException {
  public __string $message;
  public __listOfValidationError $validation_errors;
}

class UpdateChannel {
  public __listOfOutputDestination $destinations;
  public EncoderSettings $encoder_settings;
  public __listOfInputAttachment $input_attachments;
  public InputSpecification $input_specification;
  public LogLevel $log_level;
  public __string $name;
  public __string $role_arn;
}

class UpdateChannelClass {
  public ChannelClass $channel_class;
  public __listOfOutputDestination $destinations;
}

class UpdateChannelClassRequest {
  public ChannelClass $channel_class;
  public __string $channel_id;
  public __listOfOutputDestination $destinations;
}

class UpdateChannelClassResponse {
  public Channel $channel;
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
}

class UpdateChannelResponse {
  public Channel $channel;
}

class UpdateChannelResultModel {
  public Channel $channel;
}

class UpdateInput {
  public __listOfInputDestinationRequest $destinations;
  public __listOf__string $input_security_groups;
  public __listOfMediaConnectFlowRequest $media_connect_flows;
  public __string $name;
  public __string $role_arn;
  public __listOfInputSourceRequest $sources;
}

class UpdateInputRequest {
  public __listOfInputDestinationRequest $destinations;
  public __string $input_id;
  public __listOf__string $input_security_groups;
  public __listOfMediaConnectFlowRequest $media_connect_flows;
  public __string $name;
  public __string $role_arn;
  public __listOfInputSourceRequest $sources;
}

class UpdateInputResponse {
  public Input $input;
}

class UpdateInputResultModel {
  public Input $input;
}

class UpdateInputSecurityGroupRequest {
  public __string $input_security_group_id;
  public Tags $tags;
  public __listOfInputWhitelistRuleCidr $whitelist_rules;
}

class UpdateInputSecurityGroupResponse {
  public InputSecurityGroup $security_group;
}

class UpdateInputSecurityGroupResultModel {
  public InputSecurityGroup $security_group;
}

class UpdateMultiplex {
  public MultiplexSettings $multiplex_settings;
  public __string $name;
}

class UpdateMultiplexProgram {
  public MultiplexProgramSettings $multiplex_program_settings;
}

class UpdateMultiplexProgramRequest {
  public __string $multiplex_id;
  public MultiplexProgramSettings $multiplex_program_settings;
  public __string $program_name;
}

class UpdateMultiplexProgramResponse {
  public MultiplexProgram $multiplex_program;
}

class UpdateMultiplexProgramResultModel {
  public MultiplexProgram $multiplex_program;
}

class UpdateMultiplexRequest {
  public __string $multiplex_id;
  public MultiplexSettings $multiplex_settings;
  public __string $name;
}

class UpdateMultiplexResponse {
  public Multiplex $multiplex;
}

class UpdateMultiplexResultModel {
  public Multiplex $multiplex;
}

class UpdateReservation {
  public __string $name;
}

class UpdateReservationRequest {
  public __string $name;
  public __string $reservation_id;
}

class UpdateReservationResponse {
  public Reservation $reservation;
}

class UpdateReservationResultModel {
  public Reservation $reservation;
}

class ValidationError {
  public __string $element_path;
  public __string $error_message;
}

class VideoCodecSettings {
  public FrameCaptureSettings $frame_capture_settings;
  public H264Settings $h_264_settings;
  public H265Settings $h_265_settings;
}

class VideoDescription {
  public VideoCodecSettings $codec_settings;
  public __integer $height;
  public __string $name;
  public VideoDescriptionRespondToAfd $respond_to_afd;
  public VideoDescriptionScalingBehavior $scaling_behavior;
  public __integerMin0Max100 $sharpness;
  public __integer $width;
}

class VideoDescriptionRespondToAfd {
}

class VideoDescriptionScalingBehavior {
}

class VideoSelector {
  public VideoSelectorColorSpace $color_space;
  public VideoSelectorColorSpaceUsage $color_space_usage;
  public VideoSelectorSettings $selector_settings;
}

class VideoSelectorColorSpace {
}

class VideoSelectorColorSpaceUsage {
}

class VideoSelectorPid {
  public __integerMin0Max8191 $pid;
}

class VideoSelectorProgramId {
  public __integerMin0Max65536 $program_id;
}

class VideoSelectorSettings {
  public VideoSelectorPid $video_selector_pid;
  public VideoSelectorProgramId $video_selector_program_id;
}

class WebvttDestinationSettings {
}

class __boolean {
}

class __double {
}

class __doubleMin0 {
}

class __doubleMin1 {
}

class __doubleMinNegative59Max0 {
}

class __integer {
}

class __integerMin0 {
}

class __integerMin0Max10 {
}

class __integerMin0Max100 {
}

class __integerMin0Max1000 {
}

class __integerMin0Max10000 {
}

class __integerMin0Max1000000 {
}

class __integerMin0Max100000000 {
}

class __integerMin0Max128 {
}

class __integerMin0Max15 {
}

class __integerMin0Max255 {
}

class __integerMin0Max30 {
}

class __integerMin0Max32768 {
}

class __integerMin0Max3600 {
}

class __integerMin0Max500 {
}

class __integerMin0Max600 {
}

class __integerMin0Max65535 {
}

class __integerMin0Max65536 {
}

class __integerMin0Max7 {
}

class __integerMin0Max8191 {
}

class __integerMin1 {
}

class __integerMin1000 {
}

class __integerMin1000000Max100000000 {
}

class __integerMin100000Max100000000 {
}

class __integerMin100000Max40000000 {
}

class __integerMin100000Max80000000 {
}

class __integerMin1000Max3000 {
}

class __integerMin1000Max30000 {
}

class __integerMin1Max10 {
}

class __integerMin1Max1000000 {
}

class __integerMin1Max16 {
}

class __integerMin1Max20 {
}

class __integerMin1Max3003 {
}

class __integerMin1Max31 {
}

class __integerMin1Max32 {
}

class __integerMin1Max3600000 {
}

class __integerMin1Max4 {
}

class __integerMin1Max5 {
}

class __integerMin1Max6 {
}

class __integerMin1Max8 {
}

class __integerMin25Max10000 {
}

class __integerMin25Max2000 {
}

class __integerMin3 {
}

class __integerMin30 {
}

class __integerMin4Max20 {
}

class __integerMin96Max600 {
}

class __integerMinNegative1000Max1000 {
}

class __integerMinNegative60Max6 {
}

class __integerMinNegative60Max60 {
}

class __listOfAudioChannelMapping {
}

class __listOfAudioDescription {
}

class __listOfAudioSelector {
}

class __listOfCaptionDescription {
}

class __listOfCaptionLanguageMapping {
}

class __listOfCaptionSelector {
}

class __listOfChannelEgressEndpoint {
}

class __listOfChannelSummary {
}

class __listOfHlsAdMarkers {
}

class __listOfInput {
}

class __listOfInputAttachment {
}

class __listOfInputChannelLevel {
}

class __listOfInputDestination {
}

class __listOfInputDestinationRequest {
}

class __listOfInputSecurityGroup {
}

class __listOfInputSource {
}

class __listOfInputSourceRequest {
}

class __listOfInputWhitelistRule {
}

class __listOfInputWhitelistRuleCidr {
}

class __listOfMediaConnectFlow {
}

class __listOfMediaConnectFlowRequest {
}

class __listOfMediaPackageOutputDestinationSettings {
}

class __listOfMultiplexOutputDestination {
}

class __listOfMultiplexProgramSummary {
}

class __listOfMultiplexSummary {
}

class __listOfMultiplexValidationError {
}

class __listOfOffering {
}

class __listOfOutput {
}

class __listOfOutputDestination {
}

class __listOfOutputDestinationSettings {
}

class __listOfOutputGroup {
}

class __listOfPipelineDetail {
}

class __listOfPipelinePauseStateSettings {
}

class __listOfReservation {
}

class __listOfScheduleAction {
}

class __listOfScte35Descriptor {
}

class __listOfValidationError {
}

class __listOfVideoDescription {
}

class __listOf__integer {
}

class __listOf__string {
}

class __long {
}

class __longMin0Max1099511627775 {
}

class __longMin0Max4294967295 {
}

class __longMin0Max8589934591 {
}

class __string {
}

class __stringMax256 {
}

class __stringMax32 {
}

class __stringMin1 {
}

class __stringMin1Max255 {
}

class __stringMin1Max256 {
}

class __stringMin32Max32 {
}

class __stringMin34Max34 {
}

class __stringMin3Max3 {
}

class __stringMin6Max6 {
}

class __timestampIso8601 {
}

class __timestampUnix {
}

