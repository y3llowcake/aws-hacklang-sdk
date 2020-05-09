<?hh // strict
namespace slack\aws\mediaconvert;

interface MediaConvert {
  public function AssociateCertificate(AssociateCertificateRequest): Awaitable<Errors\Result<AssociateCertificateResponse>>;
  public function CancelJob(CancelJobRequest): Awaitable<Errors\Result<CancelJobResponse>>;
  public function CreateJob(CreateJobRequest): Awaitable<Errors\Result<CreateJobResponse>>;
  public function CreateJobTemplate(CreateJobTemplateRequest): Awaitable<Errors\Result<CreateJobTemplateResponse>>;
  public function CreatePreset(CreatePresetRequest): Awaitable<Errors\Result<CreatePresetResponse>>;
  public function CreateQueue(CreateQueueRequest): Awaitable<Errors\Result<CreateQueueResponse>>;
  public function DeleteJobTemplate(DeleteJobTemplateRequest): Awaitable<Errors\Result<DeleteJobTemplateResponse>>;
  public function DeletePreset(DeletePresetRequest): Awaitable<Errors\Result<DeletePresetResponse>>;
  public function DeleteQueue(DeleteQueueRequest): Awaitable<Errors\Result<DeleteQueueResponse>>;
  public function DescribeEndpoints(DescribeEndpointsRequest): Awaitable<Errors\Result<DescribeEndpointsResponse>>;
  public function DisassociateCertificate(DisassociateCertificateRequest): Awaitable<Errors\Result<DisassociateCertificateResponse>>;
  public function GetJob(GetJobRequest): Awaitable<Errors\Result<GetJobResponse>>;
  public function GetJobTemplate(GetJobTemplateRequest): Awaitable<Errors\Result<GetJobTemplateResponse>>;
  public function GetPreset(GetPresetRequest): Awaitable<Errors\Result<GetPresetResponse>>;
  public function GetQueue(GetQueueRequest): Awaitable<Errors\Result<GetQueueResponse>>;
  public function ListJobTemplates(ListJobTemplatesRequest): Awaitable<Errors\Result<ListJobTemplatesResponse>>;
  public function ListJobs(ListJobsRequest): Awaitable<Errors\Result<ListJobsResponse>>;
  public function ListPresets(ListPresetsRequest): Awaitable<Errors\Result<ListPresetsResponse>>;
  public function ListQueues(ListQueuesRequest): Awaitable<Errors\Result<ListQueuesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateJobTemplate(UpdateJobTemplateRequest): Awaitable<Errors\Result<UpdateJobTemplateResponse>>;
  public function UpdatePreset(UpdatePresetRequest): Awaitable<Errors\Result<UpdatePresetResponse>>;
  public function UpdateQueue(UpdateQueueRequest): Awaitable<Errors\Result<UpdateQueueResponse>>;
}

class AacAudioDescriptionBroadcasterMix {
}

class AacCodecProfile {
}

class AacCodingMode {
}

class AacRateControlMode {
}

class AacRawFormat {
}

class AacSettings {
  public AacAudioDescriptionBroadcasterMix $audio_description_broadcaster_mix;
  public __integerMin6000Max1024000 $bitrate;
  public AacCodecProfile $codec_profile;
  public AacCodingMode $coding_mode;
  public AacRateControlMode $rate_control_mode;
  public AacRawFormat $raw_format;
  public __integerMin8000Max96000 $sample_rate;
  public AacSpecification $specification;
  public AacVbrQuality $vbr_quality;
}

class AacSpecification {
}

class AacVbrQuality {
}

class Ac3BitstreamMode {
}

class Ac3CodingMode {
}

class Ac3DynamicRangeCompressionProfile {
}

class Ac3LfeFilter {
}

class Ac3MetadataControl {
}

class Ac3Settings {
  public __integerMin64000Max640000 $bitrate;
  public Ac3BitstreamMode $bitstream_mode;
  public Ac3CodingMode $coding_mode;
  public __integerMin1Max31 $dialnorm;
  public Ac3DynamicRangeCompressionProfile $dynamic_range_compression_profile;
  public Ac3LfeFilter $lfe_filter;
  public Ac3MetadataControl $metadata_control;
  public __integerMin48000Max48000 $sample_rate;
}

class AccelerationMode {
}

class AccelerationSettings {
  public AccelerationMode $mode;
}

class AccelerationStatus {
}

class AfdSignaling {
}

class AiffSettings {
  public __integerMin16Max24 $bit_depth;
  public __integerMin1Max64 $channels;
  public __integerMin8000Max192000 $sample_rate;
}

class AlphaBehavior {
}

class AncillaryConvert608To708 {
}

class AncillarySourceSettings {
  public AncillaryConvert608To708 $convert_608_to_708;
  public __integerMin1Max4 $source_ancillary_channel_number;
  public AncillaryTerminateCaptions $terminate_captions;
}

class AncillaryTerminateCaptions {
}

class AntiAlias {
}

class AssociateCertificateRequest {
  public __string $arn;
}

class AssociateCertificateResponse {
}

class AudioCodec {
}

class AudioCodecSettings {
  public AacSettings $aac_settings;
  public Ac3Settings $ac_3_settings;
  public AiffSettings $aiff_settings;
  public AudioCodec $codec;
  public Eac3AtmosSettings $eac_3_atmos_settings;
  public Eac3Settings $eac_3_settings;
  public Mp2Settings $mp_2_settings;
  public Mp3Settings $mp_3_settings;
  public WavSettings $wav_settings;
}

class AudioDefaultSelection {
}

class AudioDescription {
  public AudioNormalizationSettings $audio_normalization_settings;
  public __string $audio_source_name;
  public __integerMin0Max255 $audio_type;
  public AudioTypeControl $audio_type_control;
  public AudioCodecSettings $codec_settings;
  public __stringPatternAZaZ23AZaZ $custom_language_code;
  public LanguageCode $language_code;
  public AudioLanguageCodeControl $language_code_control;
  public RemixSettings $remix_settings;
  public __stringPatternWS $stream_name;
}

class AudioLanguageCodeControl {
}

class AudioNormalizationAlgorithm {
}

class AudioNormalizationAlgorithmControl {
}

class AudioNormalizationLoudnessLogging {
}

class AudioNormalizationPeakCalculation {
}

class AudioNormalizationSettings {
  public AudioNormalizationAlgorithm $algorithm;
  public AudioNormalizationAlgorithmControl $algorithm_control;
  public __integerMinNegative70Max0 $correction_gate_level;
  public AudioNormalizationLoudnessLogging $loudness_logging;
  public AudioNormalizationPeakCalculation $peak_calculation;
  public __doubleMinNegative59Max0 $target_lkfs;
}

class AudioSelector {
  public __stringMin3Max3PatternAZaZ3 $custom_language_code;
  public AudioDefaultSelection $default_selection;
  public __stringPatternS3MM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEEHttpsMM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEE $external_audio_file_input;
  public LanguageCode $language_code;
  public __integerMinNegative2147483648Max2147483647 $offset;
  public __listOf__integerMin1Max2147483647 $pids;
  public __integerMin0Max8 $program_selection;
  public RemixSettings $remix_settings;
  public AudioSelectorType $selector_type;
  public __listOf__integerMin1Max2147483647 $tracks;
}

class AudioSelectorGroup {
  public __listOf__stringMin1 $audio_selector_names;
}

class AudioSelectorType {
}

class AudioTypeControl {
}

class Av1AdaptiveQuantization {
}

class Av1FramerateControl {
}

class Av1FramerateConversionAlgorithm {
}

class Av1QvbrSettings {
  public __integerMin1Max10 $qvbr_quality_level;
  public __doubleMin0Max1 $qvbr_quality_level_fine_tune;
}

class Av1RateControlMode {
}

class Av1Settings {
  public Av1AdaptiveQuantization $adaptive_quantization;
  public Av1FramerateControl $framerate_control;
  public Av1FramerateConversionAlgorithm $framerate_conversion_algorithm;
  public __integerMin1Max2147483647 $framerate_denominator;
  public __integerMin1Max2147483647 $framerate_numerator;
  public __doubleMin0 $gop_size;
  public __integerMin1000Max1152000000 $max_bitrate;
  public __integerMin7Max15 $number_b_frames_between_reference_frames;
  public Av1QvbrSettings $qvbr_settings;
  public Av1RateControlMode $rate_control_mode;
  public __integerMin1Max32 $slices;
  public Av1SpatialAdaptiveQuantization $spatial_adaptive_quantization;
}

class Av1SpatialAdaptiveQuantization {
}

class AvailBlanking {
  public __stringMin14PatternS3BmpBMPPngPNGHttpsBmpBMPPngPNG $avail_blanking_image;
}

class BadRequestException {
  public __string $message;
}

class BillingTagsSource {
}

class BurninDestinationSettings {
  public BurninSubtitleAlignment $alignment;
  public BurninSubtitleBackgroundColor $background_color;
  public __integerMin0Max255 $background_opacity;
  public BurninSubtitleFontColor $font_color;
  public __integerMin0Max255 $font_opacity;
  public __integerMin96Max600 $font_resolution;
  public FontScript $font_script;
  public __integerMin0Max96 $font_size;
  public BurninSubtitleOutlineColor $outline_color;
  public __integerMin0Max10 $outline_size;
  public BurninSubtitleShadowColor $shadow_color;
  public __integerMin0Max255 $shadow_opacity;
  public __integerMinNegative2147483648Max2147483647 $shadow_x_offset;
  public __integerMinNegative2147483648Max2147483647 $shadow_y_offset;
  public BurninSubtitleTeletextSpacing $teletext_spacing;
  public __integerMin0Max2147483647 $x_position;
  public __integerMin0Max2147483647 $y_position;
}

class BurninSubtitleAlignment {
}

class BurninSubtitleBackgroundColor {
}

class BurninSubtitleFontColor {
}

class BurninSubtitleOutlineColor {
}

class BurninSubtitleShadowColor {
}

class BurninSubtitleTeletextSpacing {
}

class CancelJobRequest {
  public __string $id;
}

class CancelJobResponse {
}

class CaptionDescription {
  public __stringMin1 $caption_selector_name;
  public __stringPatternAZaZ23AZaZ $custom_language_code;
  public CaptionDestinationSettings $destination_settings;
  public LanguageCode $language_code;
  public __string $language_description;
}

class CaptionDescriptionPreset {
  public __stringPatternAZaZ23AZaZ $custom_language_code;
  public CaptionDestinationSettings $destination_settings;
  public LanguageCode $language_code;
  public __string $language_description;
}

class CaptionDestinationSettings {
  public BurninDestinationSettings $burnin_destination_settings;
  public CaptionDestinationType $destination_type;
  public DvbSubDestinationSettings $dvb_sub_destination_settings;
  public EmbeddedDestinationSettings $embedded_destination_settings;
  public ImscDestinationSettings $imsc_destination_settings;
  public SccDestinationSettings $scc_destination_settings;
  public TeletextDestinationSettings $teletext_destination_settings;
  public TtmlDestinationSettings $ttml_destination_settings;
}

class CaptionDestinationType {
}

class CaptionSelector {
  public __stringMin3Max3PatternAZaZ3 $custom_language_code;
  public LanguageCode $language_code;
  public CaptionSourceSettings $source_settings;
}

class CaptionSourceFramerate {
  public __integerMin1Max1001 $framerate_denominator;
  public __integerMin1Max60000 $framerate_numerator;
}

class CaptionSourceSettings {
  public AncillarySourceSettings $ancillary_source_settings;
  public DvbSubSourceSettings $dvb_sub_source_settings;
  public EmbeddedSourceSettings $embedded_source_settings;
  public FileSourceSettings $file_source_settings;
  public CaptionSourceType $source_type;
  public TeletextSourceSettings $teletext_source_settings;
  public TrackSourceSettings $track_source_settings;
}

class CaptionSourceType {
}

class ChannelMapping {
  public __listOfOutputChannelMapping $output_channels;
}

class CmafAdditionalManifest {
  public __stringMin1 $manifest_name_modifier;
  public __listOf__stringMin1 $selected_outputs;
}

class CmafClientCache {
}

class CmafCodecSpecification {
}

class CmafEncryptionSettings {
  public __stringMin32Max32Pattern09aFAF32 $constant_initialization_vector;
  public CmafEncryptionType $encryption_method;
  public CmafInitializationVectorInManifest $initialization_vector_in_manifest;
  public SpekeKeyProviderCmaf $speke_key_provider;
  public StaticKeyProvider $static_key_provider;
  public CmafKeyProviderType $type;
}

class CmafEncryptionType {
}

class CmafGroupSettings {
  public __listOfCmafAdditionalManifest $additional_manifests;
  public __string $base_url;
  public CmafClientCache $client_cache;
  public CmafCodecSpecification $codec_specification;
  public __stringPatternS3 $destination;
  public DestinationSettings $destination_settings;
  public CmafEncryptionSettings $encryption;
  public __integerMin1Max2147483647 $fragment_length;
  public CmafManifestCompression $manifest_compression;
  public CmafManifestDurationFormat $manifest_duration_format;
  public __integerMin0Max2147483647 $min_buffer_time;
  public __doubleMin0Max2147483647 $min_final_segment_length;
  public CmafMpdProfile $mpd_profile;
  public CmafSegmentControl $segment_control;
  public __integerMin1Max2147483647 $segment_length;
  public CmafStreamInfResolution $stream_inf_resolution;
  public CmafWriteDASHManifest $write_dash_manifest;
  public CmafWriteHLSManifest $write_hls_manifest;
  public CmafWriteSegmentTimelineInRepresentation $write_segment_timeline_in_representation;
}

class CmafInitializationVectorInManifest {
}

class CmafKeyProviderType {
}

class CmafManifestCompression {
}

class CmafManifestDurationFormat {
}

class CmafMpdProfile {
}

class CmafSegmentControl {
}

class CmafStreamInfResolution {
}

class CmafWriteDASHManifest {
}

class CmafWriteHLSManifest {
}

class CmafWriteSegmentTimelineInRepresentation {
}

class CmfcScte35Esam {
}

class CmfcScte35Source {
}

class CmfcSettings {
  public CmfcScte35Esam $scte_35_esam;
  public CmfcScte35Source $scte_35_source;
}

class ColorCorrector {
  public __integerMin1Max100 $brightness;
  public ColorSpaceConversion $color_space_conversion;
  public __integerMin1Max100 $contrast;
  public Hdr10Metadata $hdr_10_metadata;
  public __integerMinNegative180Max180 $hue;
  public __integerMin1Max100 $saturation;
}

class ColorMetadata {
}

class ColorSpace {
}

class ColorSpaceConversion {
}

class ColorSpaceUsage {
}

class Commitment {
}

class ConflictException {
  public __string $message;
}

class ContainerSettings {
  public CmfcSettings $cmfc_settings;
  public ContainerType $container;
  public F4vSettings $f_4_v_settings;
  public M2tsSettings $m_2_ts_settings;
  public M3u8Settings $m_3_u8_settings;
  public MovSettings $mov_settings;
  public Mp4Settings $mp_4_settings;
  public MpdSettings $mpd_settings;
}

class ContainerType {
}

class CreateJobRequest {
  public AccelerationSettings $acceleration_settings;
  public BillingTagsSource $billing_tags_source;
  public __string $client_request_token;
  public __listOfHopDestination $hop_destinations;
  public __string $job_template;
  public __integerMinNegative50Max50 $priority;
  public __string $queue;
  public __string $role;
  public JobSettings $settings;
  public SimulateReservedQueue $simulate_reserved_queue;
  public StatusUpdateInterval $status_update_interval;
  public __mapOf__string $tags;
  public __mapOf__string $user_metadata;
}

class CreateJobResponse {
  public Job $job;
}

class CreateJobTemplateRequest {
  public AccelerationSettings $acceleration_settings;
  public __string $category;
  public __string $description;
  public __listOfHopDestination $hop_destinations;
  public __string $name;
  public __integerMinNegative50Max50 $priority;
  public __string $queue;
  public JobTemplateSettings $settings;
  public StatusUpdateInterval $status_update_interval;
  public __mapOf__string $tags;
}

class CreateJobTemplateResponse {
  public JobTemplate $job_template;
}

class CreatePresetRequest {
  public __string $category;
  public __string $description;
  public __string $name;
  public PresetSettings $settings;
  public __mapOf__string $tags;
}

class CreatePresetResponse {
  public Preset $preset;
}

class CreateQueueRequest {
  public __string $description;
  public __string $name;
  public PricingPlan $pricing_plan;
  public ReservationPlanSettings $reservation_plan_settings;
  public QueueStatus $status;
  public __mapOf__string $tags;
}

class CreateQueueResponse {
  public Queue $queue;
}

class DashAdditionalManifest {
  public __stringMin1 $manifest_name_modifier;
  public __listOf__stringMin1 $selected_outputs;
}

class DashIsoEncryptionSettings {
  public DashIsoPlaybackDeviceCompatibility $playback_device_compatibility;
  public SpekeKeyProvider $speke_key_provider;
}

class DashIsoGroupSettings {
  public __listOfDashAdditionalManifest $additional_manifests;
  public __string $base_url;
  public __stringPatternS3 $destination;
  public DestinationSettings $destination_settings;
  public DashIsoEncryptionSettings $encryption;
  public __integerMin1Max2147483647 $fragment_length;
  public DashIsoHbbtvCompliance $hbbtv_compliance;
  public __integerMin0Max2147483647 $min_buffer_time;
  public DashIsoMpdProfile $mpd_profile;
  public DashIsoSegmentControl $segment_control;
  public __integerMin1Max2147483647 $segment_length;
  public DashIsoWriteSegmentTimelineInRepresentation $write_segment_timeline_in_representation;
}

class DashIsoHbbtvCompliance {
}

class DashIsoMpdProfile {
}

class DashIsoPlaybackDeviceCompatibility {
}

class DashIsoSegmentControl {
}

class DashIsoWriteSegmentTimelineInRepresentation {
}

class DecryptionMode {
}

class DeinterlaceAlgorithm {
}

class Deinterlacer {
  public DeinterlaceAlgorithm $algorithm;
  public DeinterlacerControl $control;
  public DeinterlacerMode $mode;
}

class DeinterlacerControl {
}

class DeinterlacerMode {
}

class DeleteJobTemplateRequest {
  public __string $name;
}

class DeleteJobTemplateResponse {
}

class DeletePresetRequest {
  public __string $name;
}

class DeletePresetResponse {
}

class DeleteQueueRequest {
  public __string $name;
}

class DeleteQueueResponse {
}

class DescribeEndpointsMode {
}

class DescribeEndpointsRequest {
  public __integer $max_results;
  public DescribeEndpointsMode $mode;
  public __string $next_token;
}

class DescribeEndpointsResponse {
  public __listOfEndpoint $endpoints;
  public __string $next_token;
}

class DestinationSettings {
  public S3DestinationSettings $s_3_settings;
}

class DisassociateCertificateRequest {
  public __string $arn;
}

class DisassociateCertificateResponse {
}

class DolbyVision {
  public DolbyVisionLevel6Metadata $l_6_metadata;
  public DolbyVisionLevel6Mode $l_6_mode;
  public DolbyVisionProfile $profile;
}

class DolbyVisionLevel6Metadata {
  public __integerMin0Max65535 $max_cll;
  public __integerMin0Max65535 $max_fall;
}

class DolbyVisionLevel6Mode {
}

class DolbyVisionProfile {
}

class DropFrameTimecode {
}

class DvbNitSettings {
  public __integerMin0Max65535 $network_id;
  public __stringMin1Max256 $network_name;
  public __integerMin25Max10000 $nit_interval;
}

class DvbSdtSettings {
  public OutputSdt $output_sdt;
  public __integerMin25Max2000 $sdt_interval;
  public __stringMin1Max256 $service_name;
  public __stringMin1Max256 $service_provider_name;
}

class DvbSubDestinationSettings {
  public DvbSubtitleAlignment $alignment;
  public DvbSubtitleBackgroundColor $background_color;
  public __integerMin0Max255 $background_opacity;
  public DvbSubtitleFontColor $font_color;
  public __integerMin0Max255 $font_opacity;
  public __integerMin96Max600 $font_resolution;
  public FontScript $font_script;
  public __integerMin0Max96 $font_size;
  public DvbSubtitleOutlineColor $outline_color;
  public __integerMin0Max10 $outline_size;
  public DvbSubtitleShadowColor $shadow_color;
  public __integerMin0Max255 $shadow_opacity;
  public __integerMinNegative2147483648Max2147483647 $shadow_x_offset;
  public __integerMinNegative2147483648Max2147483647 $shadow_y_offset;
  public DvbSubtitlingType $subtitling_type;
  public DvbSubtitleTeletextSpacing $teletext_spacing;
  public __integerMin0Max2147483647 $x_position;
  public __integerMin0Max2147483647 $y_position;
}

class DvbSubSourceSettings {
  public __integerMin1Max2147483647 $pid;
}

class DvbSubtitleAlignment {
}

class DvbSubtitleBackgroundColor {
}

class DvbSubtitleFontColor {
}

class DvbSubtitleOutlineColor {
}

class DvbSubtitleShadowColor {
}

class DvbSubtitleTeletextSpacing {
}

class DvbSubtitlingType {
}

class DvbTdtSettings {
  public __integerMin1000Max30000 $tdt_interval;
}

class Eac3AtmosBitstreamMode {
}

class Eac3AtmosCodingMode {
}

class Eac3AtmosDialogueIntelligence {
}

class Eac3AtmosDynamicRangeCompressionLine {
}

class Eac3AtmosDynamicRangeCompressionRf {
}

class Eac3AtmosMeteringMode {
}

class Eac3AtmosSettings {
  public __integerMin384000Max768000 $bitrate;
  public Eac3AtmosBitstreamMode $bitstream_mode;
  public Eac3AtmosCodingMode $coding_mode;
  public Eac3AtmosDialogueIntelligence $dialogue_intelligence;
  public Eac3AtmosDynamicRangeCompressionLine $dynamic_range_compression_line;
  public Eac3AtmosDynamicRangeCompressionRf $dynamic_range_compression_rf;
  public __doubleMinNegative6Max3 $lo_ro_center_mix_level;
  public __doubleMinNegative60MaxNegative1 $lo_ro_surround_mix_level;
  public __doubleMinNegative6Max3 $lt_rt_center_mix_level;
  public __doubleMinNegative60MaxNegative1 $lt_rt_surround_mix_level;
  public Eac3AtmosMeteringMode $metering_mode;
  public __integerMin48000Max48000 $sample_rate;
  public __integerMin1Max100 $speech_threshold;
  public Eac3AtmosStereoDownmix $stereo_downmix;
  public Eac3AtmosSurroundExMode $surround_ex_mode;
}

class Eac3AtmosStereoDownmix {
}

class Eac3AtmosSurroundExMode {
}

class Eac3AttenuationControl {
}

class Eac3BitstreamMode {
}

class Eac3CodingMode {
}

class Eac3DcFilter {
}

class Eac3DynamicRangeCompressionLine {
}

class Eac3DynamicRangeCompressionRf {
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
  public __integerMin64000Max640000 $bitrate;
  public Eac3BitstreamMode $bitstream_mode;
  public Eac3CodingMode $coding_mode;
  public Eac3DcFilter $dc_filter;
  public __integerMin1Max31 $dialnorm;
  public Eac3DynamicRangeCompressionLine $dynamic_range_compression_line;
  public Eac3DynamicRangeCompressionRf $dynamic_range_compression_rf;
  public Eac3LfeControl $lfe_control;
  public Eac3LfeFilter $lfe_filter;
  public __doubleMinNegative60Max3 $lo_ro_center_mix_level;
  public __doubleMinNegative60MaxNegative1 $lo_ro_surround_mix_level;
  public __doubleMinNegative60Max3 $lt_rt_center_mix_level;
  public __doubleMinNegative60MaxNegative1 $lt_rt_surround_mix_level;
  public Eac3MetadataControl $metadata_control;
  public Eac3PassthroughControl $passthrough_control;
  public Eac3PhaseControl $phase_control;
  public __integerMin48000Max48000 $sample_rate;
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
  public __integerMin1Max4 $destination_608_channel_number;
  public __integerMin1Max6 $destination_708_service_number;
}

class EmbeddedSourceSettings {
  public EmbeddedConvert608To708 $convert_608_to_708;
  public __integerMin1Max4 $source_608_channel_number;
  public __integerMin1Max1 $source_608_track_number;
  public EmbeddedTerminateCaptions $terminate_captions;
}

class EmbeddedTerminateCaptions {
}

class Endpoint {
  public __string $url;
}

class EsamManifestConfirmConditionNotification {
  public __stringPatternSNManifestConfirmConditionNotificationNS $mcc_xml;
}

class EsamSettings {
  public EsamManifestConfirmConditionNotification $manifest_confirm_condition_notification;
  public __integerMin0Max30000 $response_signal_preroll;
  public EsamSignalProcessingNotification $signal_processing_notification;
}

class EsamSignalProcessingNotification {
  public __stringPatternSNSignalProcessingNotificationNS $scc_xml;
}

class ExceptionBody {
  public __string $message;
}

class F4vMoovPlacement {
}

class F4vSettings {
  public F4vMoovPlacement $moov_placement;
}

class FileGroupSettings {
  public __stringPatternS3 $destination;
  public DestinationSettings $destination_settings;
}

class FileSourceConvert608To708 {
}

class FileSourceSettings {
  public FileSourceConvert608To708 $convert_608_to_708;
  public CaptionSourceFramerate $framerate;
  public __stringMin14PatternS3SccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMIHttpsSccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMI $source_file;
  public __integerMinNegative2147483648Max2147483647 $time_delta;
}

class FontScript {
}

class ForbiddenException {
  public __string $message;
}

class FrameCaptureSettings {
  public __integerMin1Max2147483647 $framerate_denominator;
  public __integerMin1Max2147483647 $framerate_numerator;
  public __integerMin1Max10000000 $max_captures;
  public __integerMin1Max100 $quality;
}

class GetJobRequest {
  public __string $id;
}

class GetJobResponse {
  public Job $job;
}

class GetJobTemplateRequest {
  public __string $name;
}

class GetJobTemplateResponse {
  public JobTemplate $job_template;
}

class GetPresetRequest {
  public __string $name;
}

class GetPresetResponse {
  public Preset $preset;
}

class GetQueueRequest {
  public __string $name;
}

class GetQueueResponse {
  public Queue $queue;
}

class H264AdaptiveQuantization {
}

class H264CodecLevel {
}

class H264CodecProfile {
}

class H264DynamicSubGop {
}

class H264EntropyEncoding {
}

class H264FieldEncoding {
}

class H264FlickerAdaptiveQuantization {
}

class H264FramerateControl {
}

class H264FramerateConversionAlgorithm {
}

class H264GopBReference {
}

class H264GopSizeUnits {
}

class H264InterlaceMode {
}

class H264ParControl {
}

class H264QualityTuningLevel {
}

class H264QvbrSettings {
  public __integerMin1000Max1152000000 $max_average_bitrate;
  public __integerMin1Max10 $qvbr_quality_level;
  public __doubleMin0Max1 $qvbr_quality_level_fine_tune;
}

class H264RateControlMode {
}

class H264RepeatPps {
}

class H264SceneChangeDetect {
}

class H264Settings {
  public H264AdaptiveQuantization $adaptive_quantization;
  public __integerMin1000Max1152000000 $bitrate;
  public H264CodecLevel $codec_level;
  public H264CodecProfile $codec_profile;
  public H264DynamicSubGop $dynamic_sub_gop;
  public H264EntropyEncoding $entropy_encoding;
  public H264FieldEncoding $field_encoding;
  public H264FlickerAdaptiveQuantization $flicker_adaptive_quantization;
  public H264FramerateControl $framerate_control;
  public H264FramerateConversionAlgorithm $framerate_conversion_algorithm;
  public __integerMin1Max2147483647 $framerate_denominator;
  public __integerMin1Max2147483647 $framerate_numerator;
  public H264GopBReference $gop_b_reference;
  public __integerMin0Max2147483647 $gop_closed_cadence;
  public __doubleMin0 $gop_size;
  public H264GopSizeUnits $gop_size_units;
  public __integerMin0Max100 $hrd_buffer_initial_fill_percentage;
  public __integerMin0Max1152000000 $hrd_buffer_size;
  public H264InterlaceMode $interlace_mode;
  public __integerMin1000Max1152000000 $max_bitrate;
  public __integerMin0Max30 $min_i_interval;
  public __integerMin0Max7 $number_b_frames_between_reference_frames;
  public __integerMin1Max6 $number_reference_frames;
  public H264ParControl $par_control;
  public __integerMin1Max2147483647 $par_denominator;
  public __integerMin1Max2147483647 $par_numerator;
  public H264QualityTuningLevel $quality_tuning_level;
  public H264QvbrSettings $qvbr_settings;
  public H264RateControlMode $rate_control_mode;
  public H264RepeatPps $repeat_pps;
  public H264SceneChangeDetect $scene_change_detect;
  public __integerMin1Max32 $slices;
  public H264SlowPal $slow_pal;
  public __integerMin0Max128 $softness;
  public H264SpatialAdaptiveQuantization $spatial_adaptive_quantization;
  public H264Syntax $syntax;
  public H264Telecine $telecine;
  public H264TemporalAdaptiveQuantization $temporal_adaptive_quantization;
  public H264UnregisteredSeiTimecode $unregistered_sei_timecode;
}

class H264SlowPal {
}

class H264SpatialAdaptiveQuantization {
}

class H264Syntax {
}

class H264Telecine {
}

class H264TemporalAdaptiveQuantization {
}

class H264UnregisteredSeiTimecode {
}

class H265AdaptiveQuantization {
}

class H265AlternateTransferFunctionSei {
}

class H265CodecLevel {
}

class H265CodecProfile {
}

class H265DynamicSubGop {
}

class H265FlickerAdaptiveQuantization {
}

class H265FramerateControl {
}

class H265FramerateConversionAlgorithm {
}

class H265GopBReference {
}

class H265GopSizeUnits {
}

class H265InterlaceMode {
}

class H265ParControl {
}

class H265QualityTuningLevel {
}

class H265QvbrSettings {
  public __integerMin1000Max1466400000 $max_average_bitrate;
  public __integerMin1Max10 $qvbr_quality_level;
  public __doubleMin0Max1 $qvbr_quality_level_fine_tune;
}

class H265RateControlMode {
}

class H265SampleAdaptiveOffsetFilterMode {
}

class H265SceneChangeDetect {
}

class H265Settings {
  public H265AdaptiveQuantization $adaptive_quantization;
  public H265AlternateTransferFunctionSei $alternate_transfer_function_sei;
  public __integerMin1000Max1466400000 $bitrate;
  public H265CodecLevel $codec_level;
  public H265CodecProfile $codec_profile;
  public H265DynamicSubGop $dynamic_sub_gop;
  public H265FlickerAdaptiveQuantization $flicker_adaptive_quantization;
  public H265FramerateControl $framerate_control;
  public H265FramerateConversionAlgorithm $framerate_conversion_algorithm;
  public __integerMin1Max2147483647 $framerate_denominator;
  public __integerMin1Max2147483647 $framerate_numerator;
  public H265GopBReference $gop_b_reference;
  public __integerMin0Max2147483647 $gop_closed_cadence;
  public __doubleMin0 $gop_size;
  public H265GopSizeUnits $gop_size_units;
  public __integerMin0Max100 $hrd_buffer_initial_fill_percentage;
  public __integerMin0Max1466400000 $hrd_buffer_size;
  public H265InterlaceMode $interlace_mode;
  public __integerMin1000Max1466400000 $max_bitrate;
  public __integerMin0Max30 $min_i_interval;
  public __integerMin0Max7 $number_b_frames_between_reference_frames;
  public __integerMin1Max6 $number_reference_frames;
  public H265ParControl $par_control;
  public __integerMin1Max2147483647 $par_denominator;
  public __integerMin1Max2147483647 $par_numerator;
  public H265QualityTuningLevel $quality_tuning_level;
  public H265QvbrSettings $qvbr_settings;
  public H265RateControlMode $rate_control_mode;
  public H265SampleAdaptiveOffsetFilterMode $sample_adaptive_offset_filter_mode;
  public H265SceneChangeDetect $scene_change_detect;
  public __integerMin1Max32 $slices;
  public H265SlowPal $slow_pal;
  public H265SpatialAdaptiveQuantization $spatial_adaptive_quantization;
  public H265Telecine $telecine;
  public H265TemporalAdaptiveQuantization $temporal_adaptive_quantization;
  public H265TemporalIds $temporal_ids;
  public H265Tiles $tiles;
  public H265UnregisteredSeiTimecode $unregistered_sei_timecode;
  public H265WriteMp4PackagingType $write_mp_4_packaging_type;
}

class H265SlowPal {
}

class H265SpatialAdaptiveQuantization {
}

class H265Telecine {
}

class H265TemporalAdaptiveQuantization {
}

class H265TemporalIds {
}

class H265Tiles {
}

class H265UnregisteredSeiTimecode {
}

class H265WriteMp4PackagingType {
}

class Hdr10Metadata {
  public __integerMin0Max50000 $blue_primary_x;
  public __integerMin0Max50000 $blue_primary_y;
  public __integerMin0Max50000 $green_primary_x;
  public __integerMin0Max50000 $green_primary_y;
  public __integerMin0Max65535 $max_content_light_level;
  public __integerMin0Max65535 $max_frame_average_light_level;
  public __integerMin0Max2147483647 $max_luminance;
  public __integerMin0Max2147483647 $min_luminance;
  public __integerMin0Max50000 $red_primary_x;
  public __integerMin0Max50000 $red_primary_y;
  public __integerMin0Max50000 $white_point_x;
  public __integerMin0Max50000 $white_point_y;
}

class HlsAdMarkers {
}

class HlsAdditionalManifest {
  public __stringMin1 $manifest_name_modifier;
  public __listOf__stringMin1 $selected_outputs;
}

class HlsAudioOnlyContainer {
}

class HlsAudioTrackType {
}

class HlsCaptionLanguageMapping {
  public __integerMinNegative2147483648Max2147483647 $caption_channel;
  public __stringMin3Max3PatternAZaZ3 $custom_language_code;
  public LanguageCode $language_code;
  public __string $language_description;
}

class HlsCaptionLanguageSetting {
}

class HlsClientCache {
}

class HlsCodecSpecification {
}

class HlsDirectoryStructure {
}

class HlsEncryptionSettings {
  public __stringMin32Max32Pattern09aFAF32 $constant_initialization_vector;
  public HlsEncryptionType $encryption_method;
  public HlsInitializationVectorInManifest $initialization_vector_in_manifest;
  public HlsOfflineEncrypted $offline_encrypted;
  public SpekeKeyProvider $speke_key_provider;
  public StaticKeyProvider $static_key_provider;
  public HlsKeyProviderType $type;
}

class HlsEncryptionType {
}

class HlsGroupSettings {
  public __listOfHlsAdMarkers $ad_markers;
  public __listOfHlsAdditionalManifest $additional_manifests;
  public __string $base_url;
  public __listOfHlsCaptionLanguageMapping $caption_language_mappings;
  public HlsCaptionLanguageSetting $caption_language_setting;
  public HlsClientCache $client_cache;
  public HlsCodecSpecification $codec_specification;
  public __stringPatternS3 $destination;
  public DestinationSettings $destination_settings;
  public HlsDirectoryStructure $directory_structure;
  public HlsEncryptionSettings $encryption;
  public HlsManifestCompression $manifest_compression;
  public HlsManifestDurationFormat $manifest_duration_format;
  public __doubleMin0Max2147483647 $min_final_segment_length;
  public __integerMin0Max2147483647 $min_segment_length;
  public HlsOutputSelection $output_selection;
  public HlsProgramDateTime $program_date_time;
  public __integerMin0Max3600 $program_date_time_period;
  public HlsSegmentControl $segment_control;
  public __integerMin1Max2147483647 $segment_length;
  public __integerMin1Max2147483647 $segments_per_subdirectory;
  public HlsStreamInfResolution $stream_inf_resolution;
  public HlsTimedMetadataId3Frame $timed_metadata_id_3_frame;
  public __integerMinNegative2147483648Max2147483647 $timed_metadata_id_3_period;
  public __integerMinNegative2147483648Max2147483647 $timestamp_delta_milliseconds;
}

class HlsIFrameOnlyManifest {
}

class HlsInitializationVectorInManifest {
}

class HlsKeyProviderType {
}

class HlsManifestCompression {
}

class HlsManifestDurationFormat {
}

class HlsOfflineEncrypted {
}

class HlsOutputSelection {
}

class HlsProgramDateTime {
}

class HlsSegmentControl {
}

class HlsSettings {
  public __string $audio_group_id;
  public HlsAudioOnlyContainer $audio_only_container;
  public __string $audio_rendition_sets;
  public HlsAudioTrackType $audio_track_type;
  public HlsIFrameOnlyManifest $i_frame_only_manifest;
  public __string $segment_modifier;
}

class HlsStreamInfResolution {
}

class HlsTimedMetadataId3Frame {
}

class HopDestination {
  public __integerMinNegative50Max50 $priority;
  public __string $queue;
  public __integer $wait_minutes;
}

class Id3Insertion {
  public __stringPatternAZaZ0902 $id_3;
  public __stringPattern010920405090509092 $timecode;
}

class ImageInserter {
  public __listOfInsertableImage $insertable_images;
}

class ImscDestinationSettings {
  public ImscStylePassthrough $style_passthrough;
}

class ImscStylePassthrough {
}

class Input {
  public __mapOfAudioSelectorGroup $audio_selector_groups;
  public __mapOfAudioSelector $audio_selectors;
  public __mapOfCaptionSelector $caption_selectors;
  public Rectangle $crop;
  public InputDeblockFilter $deblock_filter;
  public InputDecryptionSettings $decryption_settings;
  public InputDenoiseFilter $denoise_filter;
  public __stringPatternS3MM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8WWEEBBMMLLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLLHttpsMM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8WWEEBBMMLLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLL $file_input;
  public InputFilterEnable $filter_enable;
  public __integerMinNegative5Max5 $filter_strength;
  public ImageInserter $image_inserter;
  public __listOfInputClipping $input_clippings;
  public Rectangle $position;
  public __integerMin1Max2147483647 $program_number;
  public InputPsiControl $psi_control;
  public __listOf__stringPatternS3ASSETMAPXml $supplemental_imps;
  public InputTimecodeSource $timecode_source;
  public __stringMin11Max11Pattern01D20305D205D $timecode_start;
  public VideoSelector $video_selector;
}

class InputClipping {
  public __stringPattern010920405090509092 $end_timecode;
  public __stringPattern010920405090509092 $start_timecode;
}

class InputDeblockFilter {
}

class InputDecryptionSettings {
  public DecryptionMode $decryption_mode;
  public __stringMin24Max512PatternAZaZ0902 $encrypted_decryption_key;
  public __stringMin16Max24PatternAZaZ0922AZaZ0916 $initialization_vector;
  public __stringMin9Max19PatternAZ26EastWestCentralNorthSouthEastWest1912 $kms_key_region;
}

class InputDenoiseFilter {
}

class InputFilterEnable {
}

class InputPsiControl {
}

class InputRotate {
}

class InputTemplate {
  public __mapOfAudioSelectorGroup $audio_selector_groups;
  public __mapOfAudioSelector $audio_selectors;
  public __mapOfCaptionSelector $caption_selectors;
  public Rectangle $crop;
  public InputDeblockFilter $deblock_filter;
  public InputDenoiseFilter $denoise_filter;
  public InputFilterEnable $filter_enable;
  public __integerMinNegative5Max5 $filter_strength;
  public ImageInserter $image_inserter;
  public __listOfInputClipping $input_clippings;
  public Rectangle $position;
  public __integerMin1Max2147483647 $program_number;
  public InputPsiControl $psi_control;
  public InputTimecodeSource $timecode_source;
  public __stringMin11Max11Pattern01D20305D205D $timecode_start;
  public VideoSelector $video_selector;
}

class InputTimecodeSource {
}

class InsertableImage {
  public __integerMin0Max2147483647 $duration;
  public __integerMin0Max2147483647 $fade_in;
  public __integerMin0Max2147483647 $fade_out;
  public __integerMin0Max2147483647 $height;
  public __stringMin14PatternS3BmpBMPPngPNGTgaTGAHttpsBmpBMPPngPNGTgaTGA $image_inserter_input;
  public __integerMin0Max2147483647 $image_x;
  public __integerMin0Max2147483647 $image_y;
  public __integerMin0Max99 $layer;
  public __integerMin0Max100 $opacity;
  public __stringPattern01D20305D205D $start_time;
  public __integerMin0Max2147483647 $width;
}

class InternalServerErrorException {
  public __string $message;
}

class Job {
  public AccelerationSettings $acceleration_settings;
  public AccelerationStatus $acceleration_status;
  public __string $arn;
  public BillingTagsSource $billing_tags_source;
  public __timestampUnix $created_at;
  public JobPhase $current_phase;
  public __integer $error_code;
  public __string $error_message;
  public __listOfHopDestination $hop_destinations;
  public __string $id;
  public __integer $job_percent_complete;
  public __string $job_template;
  public JobMessages $messages;
  public __listOfOutputGroupDetail $output_group_details;
  public __integerMinNegative50Max50 $priority;
  public __string $queue;
  public __listOfQueueTransition $queue_transitions;
  public __integer $retry_count;
  public __string $role;
  public JobSettings $settings;
  public SimulateReservedQueue $simulate_reserved_queue;
  public JobStatus $status;
  public StatusUpdateInterval $status_update_interval;
  public Timing $timing;
  public __mapOf__string $user_metadata;
}

class JobMessages {
  public __listOf__string $info;
  public __listOf__string $warning;
}

class JobPhase {
}

class JobSettings {
  public __integerMinNegative1000Max1000 $ad_avail_offset;
  public AvailBlanking $avail_blanking;
  public EsamSettings $esam;
  public __listOfInput $inputs;
  public MotionImageInserter $motion_image_inserter;
  public NielsenConfiguration $nielsen_configuration;
  public __listOfOutputGroup $output_groups;
  public TimecodeConfig $timecode_config;
  public TimedMetadataInsertion $timed_metadata_insertion;
}

class JobStatus {
}

class JobTemplate {
  public AccelerationSettings $acceleration_settings;
  public __string $arn;
  public __string $category;
  public __timestampUnix $created_at;
  public __string $description;
  public __listOfHopDestination $hop_destinations;
  public __timestampUnix $last_updated;
  public __string $name;
  public __integerMinNegative50Max50 $priority;
  public __string $queue;
  public JobTemplateSettings $settings;
  public StatusUpdateInterval $status_update_interval;
  public Type $type;
}

class JobTemplateListBy {
}

class JobTemplateSettings {
  public __integerMinNegative1000Max1000 $ad_avail_offset;
  public AvailBlanking $avail_blanking;
  public EsamSettings $esam;
  public __listOfInputTemplate $inputs;
  public MotionImageInserter $motion_image_inserter;
  public NielsenConfiguration $nielsen_configuration;
  public __listOfOutputGroup $output_groups;
  public TimecodeConfig $timecode_config;
  public TimedMetadataInsertion $timed_metadata_insertion;
}

class LanguageCode {
}

class ListJobTemplatesRequest {
  public __string $category;
  public JobTemplateListBy $list_by;
  public __integerMin1Max20 $max_results;
  public __string $next_token;
  public Order $order;
}

class ListJobTemplatesResponse {
  public __listOfJobTemplate $job_templates;
  public __string $next_token;
}

class ListJobsRequest {
  public __integerMin1Max20 $max_results;
  public __string $next_token;
  public Order $order;
  public __string $queue;
  public JobStatus $status;
}

class ListJobsResponse {
  public __listOfJob $jobs;
  public __string $next_token;
}

class ListPresetsRequest {
  public __string $category;
  public PresetListBy $list_by;
  public __integerMin1Max20 $max_results;
  public __string $next_token;
  public Order $order;
}

class ListPresetsResponse {
  public __string $next_token;
  public __listOfPreset $presets;
}

class ListQueuesRequest {
  public QueueListBy $list_by;
  public __integerMin1Max20 $max_results;
  public __string $next_token;
  public Order $order;
}

class ListQueuesResponse {
  public __string $next_token;
  public __listOfQueue $queues;
}

class ListTagsForResourceRequest {
  public __string $arn;
}

class ListTagsForResourceResponse {
  public ResourceTags $resource_tags;
}

class M2tsAudioBufferModel {
}

class M2tsBufferModel {
}

class M2tsEbpAudioInterval {
}

class M2tsEbpPlacement {
}

class M2tsEsRateInPes {
}

class M2tsForceTsVideoEbpOrder {
}

class M2tsNielsenId3 {
}

class M2tsPcrControl {
}

class M2tsRateMode {
}

class M2tsScte35Esam {
  public __integerMin32Max8182 $scte_35_esam_pid;
}

class M2tsScte35Source {
}

class M2tsSegmentationMarkers {
}

class M2tsSegmentationStyle {
}

class M2tsSettings {
  public M2tsAudioBufferModel $audio_buffer_model;
  public __integerMin0Max2147483647 $audio_frames_per_pes;
  public __listOf__integerMin32Max8182 $audio_pids;
  public __integerMin0Max2147483647 $bitrate;
  public M2tsBufferModel $buffer_model;
  public DvbNitSettings $dvb_nit_settings;
  public DvbSdtSettings $dvb_sdt_settings;
  public __listOf__integerMin32Max8182 $dvb_sub_pids;
  public DvbTdtSettings $dvb_tdt_settings;
  public __integerMin32Max8182 $dvb_teletext_pid;
  public M2tsEbpAudioInterval $ebp_audio_interval;
  public M2tsEbpPlacement $ebp_placement;
  public M2tsEsRateInPes $es_rate_in_pes;
  public M2tsForceTsVideoEbpOrder $force_ts_video_ebp_order;
  public __doubleMin0 $fragment_time;
  public __integerMin0Max500 $max_pcr_interval;
  public __integerMin0Max10000 $min_ebp_interval;
  public M2tsNielsenId3 $nielsen_id_3;
  public __doubleMin0 $null_packet_bitrate;
  public __integerMin0Max1000 $pat_interval;
  public M2tsPcrControl $pcr_control;
  public __integerMin32Max8182 $pcr_pid;
  public __integerMin0Max1000 $pmt_interval;
  public __integerMin32Max8182 $pmt_pid;
  public __integerMin32Max8182 $private_metadata_pid;
  public __integerMin0Max65535 $program_number;
  public M2tsRateMode $rate_mode;
  public M2tsScte35Esam $scte_35_esam;
  public __integerMin32Max8182 $scte_35_pid;
  public M2tsScte35Source $scte_35_source;
  public M2tsSegmentationMarkers $segmentation_markers;
  public M2tsSegmentationStyle $segmentation_style;
  public __doubleMin0 $segmentation_time;
  public __integerMin32Max8182 $timed_metadata_pid;
  public __integerMin0Max65535 $transport_stream_id;
  public __integerMin32Max8182 $video_pid;
}

class M3u8NielsenId3 {
}

class M3u8PcrControl {
}

class M3u8Scte35Source {
}

class M3u8Settings {
  public __integerMin0Max2147483647 $audio_frames_per_pes;
  public __listOf__integerMin32Max8182 $audio_pids;
  public M3u8NielsenId3 $nielsen_id_3;
  public __integerMin0Max1000 $pat_interval;
  public M3u8PcrControl $pcr_control;
  public __integerMin32Max8182 $pcr_pid;
  public __integerMin0Max1000 $pmt_interval;
  public __integerMin32Max8182 $pmt_pid;
  public __integerMin32Max8182 $private_metadata_pid;
  public __integerMin0Max65535 $program_number;
  public __integerMin32Max8182 $scte_35_pid;
  public M3u8Scte35Source $scte_35_source;
  public TimedMetadata $timed_metadata;
  public __integerMin32Max8182 $timed_metadata_pid;
  public __integerMin0Max65535 $transport_stream_id;
  public __integerMin32Max8182 $video_pid;
}

class MotionImageInserter {
  public MotionImageInsertionFramerate $framerate;
  public __stringMin14Max1285PatternS3Mov09PngHttpsMov09Png $input;
  public MotionImageInsertionMode $insertion_mode;
  public MotionImageInsertionOffset $offset;
  public MotionImagePlayback $playback;
  public __stringMin11Max11Pattern01D20305D205D $start_time;
}

class MotionImageInsertionFramerate {
  public __integerMin1Max17895697 $framerate_denominator;
  public __integerMin1Max2147483640 $framerate_numerator;
}

class MotionImageInsertionMode {
}

class MotionImageInsertionOffset {
  public __integerMin0Max2147483647 $image_x;
  public __integerMin0Max2147483647 $image_y;
}

class MotionImagePlayback {
}

class MovClapAtom {
}

class MovCslgAtom {
}

class MovMpeg2FourCCControl {
}

class MovPaddingControl {
}

class MovReference {
}

class MovSettings {
  public MovClapAtom $clap_atom;
  public MovCslgAtom $cslg_atom;
  public MovMpeg2FourCCControl $mpeg_2_four_cc_control;
  public MovPaddingControl $padding_control;
  public MovReference $reference;
}

class Mp2Settings {
  public __integerMin32000Max384000 $bitrate;
  public __integerMin1Max2 $channels;
  public __integerMin32000Max48000 $sample_rate;
}

class Mp3RateControlMode {
}

class Mp3Settings {
  public __integerMin16000Max320000 $bitrate;
  public __integerMin1Max2 $channels;
  public Mp3RateControlMode $rate_control_mode;
  public __integerMin22050Max48000 $sample_rate;
  public __integerMin0Max9 $vbr_quality;
}

class Mp4CslgAtom {
}

class Mp4FreeSpaceBox {
}

class Mp4MoovPlacement {
}

class Mp4Settings {
  public Mp4CslgAtom $cslg_atom;
  public __integerMin0Max1 $ctts_version;
  public Mp4FreeSpaceBox $free_space_box;
  public Mp4MoovPlacement $moov_placement;
  public __string $mp_4_major_brand;
}

class MpdCaptionContainerType {
}

class MpdScte35Esam {
}

class MpdScte35Source {
}

class MpdSettings {
  public MpdCaptionContainerType $caption_container_type;
  public MpdScte35Esam $scte_35_esam;
  public MpdScte35Source $scte_35_source;
}

class Mpeg2AdaptiveQuantization {
}

class Mpeg2CodecLevel {
}

class Mpeg2CodecProfile {
}

class Mpeg2DynamicSubGop {
}

class Mpeg2FramerateControl {
}

class Mpeg2FramerateConversionAlgorithm {
}

class Mpeg2GopSizeUnits {
}

class Mpeg2InterlaceMode {
}

class Mpeg2IntraDcPrecision {
}

class Mpeg2ParControl {
}

class Mpeg2QualityTuningLevel {
}

class Mpeg2RateControlMode {
}

class Mpeg2SceneChangeDetect {
}

class Mpeg2Settings {
  public Mpeg2AdaptiveQuantization $adaptive_quantization;
  public __integerMin1000Max288000000 $bitrate;
  public Mpeg2CodecLevel $codec_level;
  public Mpeg2CodecProfile $codec_profile;
  public Mpeg2DynamicSubGop $dynamic_sub_gop;
  public Mpeg2FramerateControl $framerate_control;
  public Mpeg2FramerateConversionAlgorithm $framerate_conversion_algorithm;
  public __integerMin1Max1001 $framerate_denominator;
  public __integerMin24Max60000 $framerate_numerator;
  public __integerMin0Max2147483647 $gop_closed_cadence;
  public __doubleMin0 $gop_size;
  public Mpeg2GopSizeUnits $gop_size_units;
  public __integerMin0Max100 $hrd_buffer_initial_fill_percentage;
  public __integerMin0Max47185920 $hrd_buffer_size;
  public Mpeg2InterlaceMode $interlace_mode;
  public Mpeg2IntraDcPrecision $intra_dc_precision;
  public __integerMin1000Max300000000 $max_bitrate;
  public __integerMin0Max30 $min_i_interval;
  public __integerMin0Max7 $number_b_frames_between_reference_frames;
  public Mpeg2ParControl $par_control;
  public __integerMin1Max2147483647 $par_denominator;
  public __integerMin1Max2147483647 $par_numerator;
  public Mpeg2QualityTuningLevel $quality_tuning_level;
  public Mpeg2RateControlMode $rate_control_mode;
  public Mpeg2SceneChangeDetect $scene_change_detect;
  public Mpeg2SlowPal $slow_pal;
  public __integerMin0Max128 $softness;
  public Mpeg2SpatialAdaptiveQuantization $spatial_adaptive_quantization;
  public Mpeg2Syntax $syntax;
  public Mpeg2Telecine $telecine;
  public Mpeg2TemporalAdaptiveQuantization $temporal_adaptive_quantization;
}

class Mpeg2SlowPal {
}

class Mpeg2SpatialAdaptiveQuantization {
}

class Mpeg2Syntax {
}

class Mpeg2Telecine {
}

class Mpeg2TemporalAdaptiveQuantization {
}

class MsSmoothAdditionalManifest {
  public __stringMin1 $manifest_name_modifier;
  public __listOf__stringMin1 $selected_outputs;
}

class MsSmoothAudioDeduplication {
}

class MsSmoothEncryptionSettings {
  public SpekeKeyProvider $speke_key_provider;
}

class MsSmoothGroupSettings {
  public __listOfMsSmoothAdditionalManifest $additional_manifests;
  public MsSmoothAudioDeduplication $audio_deduplication;
  public __stringPatternS3 $destination;
  public DestinationSettings $destination_settings;
  public MsSmoothEncryptionSettings $encryption;
  public __integerMin1Max2147483647 $fragment_length;
  public MsSmoothManifestEncoding $manifest_encoding;
}

class MsSmoothManifestEncoding {
}

class NielsenConfiguration {
  public __integerMin0Max0 $breakout_code;
  public __string $distributor_id;
}

class NoiseReducer {
  public NoiseReducerFilter $filter;
  public NoiseReducerFilterSettings $filter_settings;
  public NoiseReducerSpatialFilterSettings $spatial_filter_settings;
  public NoiseReducerTemporalFilterSettings $temporal_filter_settings;
}

class NoiseReducerFilter {
}

class NoiseReducerFilterSettings {
  public __integerMin0Max3 $strength;
}

class NoiseReducerSpatialFilterSettings {
  public __integerMin0Max3 $post_filter_sharpen_strength;
  public __integerMinNegative2Max3 $speed;
  public __integerMin0Max16 $strength;
}

class NoiseReducerTemporalFilterSettings {
  public __integerMin0Max4 $aggressive_mode;
  public __integerMinNegative1Max3 $speed;
  public __integerMin0Max16 $strength;
}

class NotFoundException {
  public __string $message;
}

class Order {
}

class Output {
  public __listOfAudioDescription $audio_descriptions;
  public __listOfCaptionDescription $caption_descriptions;
  public ContainerSettings $container_settings;
  public __string $extension;
  public __stringMin1 $name_modifier;
  public OutputSettings $output_settings;
  public __stringMin0 $preset;
  public VideoDescription $video_description;
}

class OutputChannelMapping {
  public __listOf__integerMinNegative60Max6 $input_channels;
}

class OutputDetail {
  public __integer $duration_in_ms;
  public VideoDetail $video_details;
}

class OutputGroup {
  public __string $custom_name;
  public __string $name;
  public OutputGroupSettings $output_group_settings;
  public __listOfOutput $outputs;
}

class OutputGroupDetail {
  public __listOfOutputDetail $output_details;
}

class OutputGroupSettings {
  public CmafGroupSettings $cmaf_group_settings;
  public DashIsoGroupSettings $dash_iso_group_settings;
  public FileGroupSettings $file_group_settings;
  public HlsGroupSettings $hls_group_settings;
  public MsSmoothGroupSettings $ms_smooth_group_settings;
  public OutputGroupType $type;
}

class OutputGroupType {
}

class OutputSdt {
}

class OutputSettings {
  public HlsSettings $hls_settings;
}

class Preset {
  public __string $arn;
  public __string $category;
  public __timestampUnix $created_at;
  public __string $description;
  public __timestampUnix $last_updated;
  public __string $name;
  public PresetSettings $settings;
  public Type $type;
}

class PresetListBy {
}

class PresetSettings {
  public __listOfAudioDescription $audio_descriptions;
  public __listOfCaptionDescriptionPreset $caption_descriptions;
  public ContainerSettings $container_settings;
  public VideoDescription $video_description;
}

class PricingPlan {
}

class ProresCodecProfile {
}

class ProresFramerateControl {
}

class ProresFramerateConversionAlgorithm {
}

class ProresInterlaceMode {
}

class ProresParControl {
}

class ProresSettings {
  public ProresCodecProfile $codec_profile;
  public ProresFramerateControl $framerate_control;
  public ProresFramerateConversionAlgorithm $framerate_conversion_algorithm;
  public __integerMin1Max2147483647 $framerate_denominator;
  public __integerMin1Max2147483647 $framerate_numerator;
  public ProresInterlaceMode $interlace_mode;
  public ProresParControl $par_control;
  public __integerMin1Max2147483647 $par_denominator;
  public __integerMin1Max2147483647 $par_numerator;
  public ProresSlowPal $slow_pal;
  public ProresTelecine $telecine;
}

class ProresSlowPal {
}

class ProresTelecine {
}

class Queue {
  public __string $arn;
  public __timestampUnix $created_at;
  public __string $description;
  public __timestampUnix $last_updated;
  public __string $name;
  public PricingPlan $pricing_plan;
  public __integer $progressing_jobs_count;
  public ReservationPlan $reservation_plan;
  public QueueStatus $status;
  public __integer $submitted_jobs_count;
  public Type $type;
}

class QueueListBy {
}

class QueueStatus {
}

class QueueTransition {
  public __string $destination_queue;
  public __string $source_queue;
  public __timestampUnix $timestamp;
}

class Rectangle {
  public __integerMin2Max2147483647 $height;
  public __integerMin2Max2147483647 $width;
  public __integerMin0Max2147483647 $x;
  public __integerMin0Max2147483647 $y;
}

class RemixSettings {
  public ChannelMapping $channel_mapping;
  public __integerMin1Max64 $channels_in;
  public __integerMin1Max64 $channels_out;
}

class RenewalType {
}

class ReservationPlan {
  public Commitment $commitment;
  public __timestampUnix $expires_at;
  public __timestampUnix $purchased_at;
  public RenewalType $renewal_type;
  public __integer $reserved_slots;
  public ReservationPlanStatus $status;
}

class ReservationPlanSettings {
  public Commitment $commitment;
  public RenewalType $renewal_type;
  public __integer $reserved_slots;
}

class ReservationPlanStatus {
}

class ResourceTags {
  public __string $arn;
  public __mapOf__string $tags;
}

class RespondToAfd {
}

class S3DestinationAccessControl {
  public S3ObjectCannedAcl $canned_acl;
}

class S3DestinationSettings {
  public S3DestinationAccessControl $access_control;
  public S3EncryptionSettings $encryption;
}

class S3EncryptionSettings {
  public S3ServerSideEncryptionType $encryption_type;
  public __stringPatternArnAwsUsGovCnKmsAZ26EastWestCentralNorthSouthEastWest1912D12KeyAFAF098AFAF094AFAF094AFAF094AFAF0912 $kms_key_arn;
}

class S3ObjectCannedAcl {
}

class S3ServerSideEncryptionType {
}

class ScalingBehavior {
}

class SccDestinationFramerate {
}

class SccDestinationSettings {
  public SccDestinationFramerate $framerate;
}

class SimulateReservedQueue {
}

class SpekeKeyProvider {
  public __stringPatternArnAwsUsGovAcm $certificate_arn;
  public __string $resource_id;
  public __listOf__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12 $system_ids;
  public __stringPatternHttps $url;
}

class SpekeKeyProviderCmaf {
  public __stringPatternArnAwsUsGovAcm $certificate_arn;
  public __listOf__stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12 $dash_signaled_system_ids;
  public __listOf__stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12 $hls_signaled_system_ids;
  public __stringPatternW $resource_id;
  public __stringPatternHttps $url;
}

class StaticKeyProvider {
  public __stringPatternIdentityAZaZ26AZaZ09163 $key_format;
  public __stringPatternDD $key_format_versions;
  public __stringPatternAZaZ0932 $static_key_value;
  public __string $url;
}

class StatusUpdateInterval {
}

class TagResourceRequest {
  public __string $arn;
  public __mapOf__string $tags;
}

class TagResourceResponse {
}

class TeletextDestinationSettings {
  public __stringMin3Max3Pattern1809aFAF09aEAE $page_number;
  public __listOfTeletextPageType $page_types;
}

class TeletextPageType {
}

class TeletextSourceSettings {
  public __stringMin3Max3Pattern1809aFAF09aEAE $page_number;
}

class TimecodeBurnin {
  public __integerMin10Max48 $font_size;
  public TimecodeBurninPosition $position;
  public __stringPattern $prefix;
}

class TimecodeBurninPosition {
}

class TimecodeConfig {
  public __stringPattern010920405090509092 $anchor;
  public TimecodeSource $source;
  public __stringPattern010920405090509092 $start;
  public __stringPattern0940191020191209301 $timestamp_offset;
}

class TimecodeSource {
}

class TimedMetadata {
}

class TimedMetadataInsertion {
  public __listOfId3Insertion $id_3_insertions;
}

class Timing {
  public __timestampUnix $finish_time;
  public __timestampUnix $start_time;
  public __timestampUnix $submit_time;
}

class TooManyRequestsException {
  public __string $message;
}

class TrackSourceSettings {
  public __integerMin1Max2147483647 $track_number;
}

class TtmlDestinationSettings {
  public TtmlStylePassthrough $style_passthrough;
}

class TtmlStylePassthrough {
}

class Type {
}

class UntagResourceRequest {
  public __string $arn;
  public __listOf__string $tag_keys;
}

class UntagResourceResponse {
}

class UpdateJobTemplateRequest {
  public AccelerationSettings $acceleration_settings;
  public __string $category;
  public __string $description;
  public __listOfHopDestination $hop_destinations;
  public __string $name;
  public __integerMinNegative50Max50 $priority;
  public __string $queue;
  public JobTemplateSettings $settings;
  public StatusUpdateInterval $status_update_interval;
}

class UpdateJobTemplateResponse {
  public JobTemplate $job_template;
}

class UpdatePresetRequest {
  public __string $category;
  public __string $description;
  public __string $name;
  public PresetSettings $settings;
}

class UpdatePresetResponse {
  public Preset $preset;
}

class UpdateQueueRequest {
  public __string $description;
  public __string $name;
  public ReservationPlanSettings $reservation_plan_settings;
  public QueueStatus $status;
}

class UpdateQueueResponse {
  public Queue $queue;
}

class VideoCodec {
}

class VideoCodecSettings {
  public Av1Settings $av_1_settings;
  public VideoCodec $codec;
  public FrameCaptureSettings $frame_capture_settings;
  public H264Settings $h_264_settings;
  public H265Settings $h_265_settings;
  public Mpeg2Settings $mpeg_2_settings;
  public ProresSettings $prores_settings;
}

class VideoDescription {
  public AfdSignaling $afd_signaling;
  public AntiAlias $anti_alias;
  public VideoCodecSettings $codec_settings;
  public ColorMetadata $color_metadata;
  public Rectangle $crop;
  public DropFrameTimecode $drop_frame_timecode;
  public __integerMin0Max15 $fixed_afd;
  public __integerMin32Max8192 $height;
  public Rectangle $position;
  public RespondToAfd $respond_to_afd;
  public ScalingBehavior $scaling_behavior;
  public __integerMin0Max100 $sharpness;
  public VideoTimecodeInsertion $timecode_insertion;
  public VideoPreprocessor $video_preprocessors;
  public __integerMin32Max8192 $width;
}

class VideoDetail {
  public __integer $height_in_px;
  public __integer $width_in_px;
}

class VideoPreprocessor {
  public ColorCorrector $color_corrector;
  public Deinterlacer $deinterlacer;
  public DolbyVision $dolby_vision;
  public ImageInserter $image_inserter;
  public NoiseReducer $noise_reducer;
  public TimecodeBurnin $timecode_burnin;
}

class VideoSelector {
  public AlphaBehavior $alpha_behavior;
  public ColorSpace $color_space;
  public ColorSpaceUsage $color_space_usage;
  public Hdr10Metadata $hdr_10_metadata;
  public __integerMin1Max2147483647 $pid;
  public __integerMinNegative2147483648Max2147483647 $program_number;
  public InputRotate $rotate;
}

class VideoTimecodeInsertion {
}

class WavFormat {
}

class WavSettings {
  public __integerMin16Max24 $bit_depth;
  public __integerMin1Max64 $channels;
  public WavFormat $format;
  public __integerMin8000Max192000 $sample_rate;
}

class __boolean {
}

class __double {
}

class __doubleMin0 {
}

class __doubleMin0Max1 {
}

class __doubleMin0Max2147483647 {
}

class __doubleMinNegative59Max0 {
}

class __doubleMinNegative60Max3 {
}

class __doubleMinNegative60MaxNegative1 {
}

class __doubleMinNegative6Max3 {
}

class __integer {
}

class __integerMin0Max0 {
}

class __integerMin0Max1 {
}

class __integerMin0Max10 {
}

class __integerMin0Max100 {
}

class __integerMin0Max1000 {
}

class __integerMin0Max10000 {
}

class __integerMin0Max1152000000 {
}

class __integerMin0Max128 {
}

class __integerMin0Max1466400000 {
}

class __integerMin0Max15 {
}

class __integerMin0Max16 {
}

class __integerMin0Max2147483647 {
}

class __integerMin0Max255 {
}

class __integerMin0Max3 {
}

class __integerMin0Max30 {
}

class __integerMin0Max30000 {
}

class __integerMin0Max3600 {
}

class __integerMin0Max4 {
}

class __integerMin0Max47185920 {
}

class __integerMin0Max500 {
}

class __integerMin0Max50000 {
}

class __integerMin0Max65535 {
}

class __integerMin0Max7 {
}

class __integerMin0Max8 {
}

class __integerMin0Max9 {
}

class __integerMin0Max96 {
}

class __integerMin0Max99 {
}

class __integerMin1000Max1152000000 {
}

class __integerMin1000Max1466400000 {
}

class __integerMin1000Max288000000 {
}

class __integerMin1000Max30000 {
}

class __integerMin1000Max300000000 {
}

class __integerMin10Max48 {
}

class __integerMin16000Max320000 {
}

class __integerMin16Max24 {
}

class __integerMin1Max1 {
}

class __integerMin1Max10 {
}

class __integerMin1Max100 {
}

class __integerMin1Max10000000 {
}

class __integerMin1Max1001 {
}

class __integerMin1Max17895697 {
}

class __integerMin1Max2 {
}

class __integerMin1Max20 {
}

class __integerMin1Max2147483640 {
}

class __integerMin1Max2147483647 {
}

class __integerMin1Max31 {
}

class __integerMin1Max32 {
}

class __integerMin1Max4 {
}

class __integerMin1Max6 {
}

class __integerMin1Max60000 {
}

class __integerMin1Max64 {
}

class __integerMin22050Max48000 {
}

class __integerMin24Max60000 {
}

class __integerMin25Max10000 {
}

class __integerMin25Max2000 {
}

class __integerMin2Max2147483647 {
}

class __integerMin32000Max384000 {
}

class __integerMin32000Max48000 {
}

class __integerMin32Max8182 {
}

class __integerMin32Max8192 {
}

class __integerMin384000Max768000 {
}

class __integerMin48000Max48000 {
}

class __integerMin6000Max1024000 {
}

class __integerMin64000Max640000 {
}

class __integerMin7Max15 {
}

class __integerMin8000Max192000 {
}

class __integerMin8000Max96000 {
}

class __integerMin96Max600 {
}

class __integerMinNegative1000Max1000 {
}

class __integerMinNegative180Max180 {
}

class __integerMinNegative1Max3 {
}

class __integerMinNegative2147483648Max2147483647 {
}

class __integerMinNegative2Max3 {
}

class __integerMinNegative50Max50 {
}

class __integerMinNegative5Max5 {
}

class __integerMinNegative60Max6 {
}

class __integerMinNegative70Max0 {
}

class __listOfAudioDescription {
}

class __listOfCaptionDescription {
}

class __listOfCaptionDescriptionPreset {
}

class __listOfCmafAdditionalManifest {
}

class __listOfDashAdditionalManifest {
}

class __listOfEndpoint {
}

class __listOfHlsAdMarkers {
}

class __listOfHlsAdditionalManifest {
}

class __listOfHlsCaptionLanguageMapping {
}

class __listOfHopDestination {
}

class __listOfId3Insertion {
}

class __listOfInput {
}

class __listOfInputClipping {
}

class __listOfInputTemplate {
}

class __listOfInsertableImage {
}

class __listOfJob {
}

class __listOfJobTemplate {
}

class __listOfMsSmoothAdditionalManifest {
}

class __listOfOutput {
}

class __listOfOutputChannelMapping {
}

class __listOfOutputDetail {
}

class __listOfOutputGroup {
}

class __listOfOutputGroupDetail {
}

class __listOfPreset {
}

class __listOfQueue {
}

class __listOfQueueTransition {
}

class __listOfTeletextPageType {
}

class __listOf__integerMin1Max2147483647 {
}

class __listOf__integerMin32Max8182 {
}

class __listOf__integerMinNegative60Max6 {
}

class __listOf__string {
}

class __listOf__stringMin1 {
}

class __listOf__stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12 {
}

class __listOf__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12 {
}

class __listOf__stringPatternS3ASSETMAPXml {
}

class __mapOfAudioSelector {
}

class __mapOfAudioSelectorGroup {
}

class __mapOfCaptionSelector {
}

class __mapOf__string {
}

class __string {
}

class __stringMin0 {
}

class __stringMin1 {
}

class __stringMin11Max11Pattern01D20305D205D {
}

class __stringMin14Max1285PatternS3Mov09PngHttpsMov09Png {
}

class __stringMin14PatternS3BmpBMPPngPNGHttpsBmpBMPPngPNG {
}

class __stringMin14PatternS3BmpBMPPngPNGTgaTGAHttpsBmpBMPPngPNGTgaTGA {
}

class __stringMin14PatternS3SccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMIHttpsSccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMI {
}

class __stringMin16Max24PatternAZaZ0922AZaZ0916 {
}

class __stringMin1Max256 {
}

class __stringMin24Max512PatternAZaZ0902 {
}

class __stringMin32Max32Pattern09aFAF32 {
}

class __stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12 {
}

class __stringMin3Max3Pattern1809aFAF09aEAE {
}

class __stringMin3Max3PatternAZaZ3 {
}

class __stringMin9Max19PatternAZ26EastWestCentralNorthSouthEastWest1912 {
}

class __stringPattern {
}

class __stringPattern010920405090509092 {
}

class __stringPattern01D20305D205D {
}

class __stringPattern0940191020191209301 {
}

class __stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12 {
}

class __stringPatternAZaZ0902 {
}

class __stringPatternAZaZ0932 {
}

class __stringPatternAZaZ23AZaZ {
}

class __stringPatternArnAwsUsGovAcm {
}

class __stringPatternArnAwsUsGovCnKmsAZ26EastWestCentralNorthSouthEastWest1912D12KeyAFAF098AFAF094AFAF094AFAF094AFAF0912 {
}

class __stringPatternDD {
}

class __stringPatternHttps {
}

class __stringPatternIdentityAZaZ26AZaZ09163 {
}

class __stringPatternS3 {
}

class __stringPatternS3ASSETMAPXml {
}

class __stringPatternS3MM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEEHttpsMM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEE {
}

class __stringPatternS3MM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8WWEEBBMMLLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLLHttpsMM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8WWEEBBMMLLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLL {
}

class __stringPatternSNManifestConfirmConditionNotificationNS {
}

class __stringPatternSNSignalProcessingNotificationNS {
}

class __stringPatternW {
}

class __stringPatternWS {
}

class __timestampIso8601 {
}

class __timestampUnix {
}

