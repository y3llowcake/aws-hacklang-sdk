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

type AacAudioDescriptionBroadcasterMix = string;

type AacCodecProfile = string;

type AacCodingMode = string;

type AacRateControlMode = string;

type AacRawFormat = string;

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

  public function __construct(shape(
  ?'audio_description_broadcaster_mix' => AacAudioDescriptionBroadcasterMix,
  ?'bitrate' => __integerMin6000Max1024000,
  ?'codec_profile' => AacCodecProfile,
  ?'coding_mode' => AacCodingMode,
  ?'rate_control_mode' => AacRateControlMode,
  ?'raw_format' => AacRawFormat,
  ?'sample_rate' => __integerMin8000Max96000,
  ?'specification' => AacSpecification,
  ?'vbr_quality' => AacVbrQuality,
  ) $s = shape()) {
    $this->audio_description_broadcaster_mix = $audio_description_broadcaster_mix ?? "";
    $this->bitrate = $bitrate ?? 0;
    $this->codec_profile = $codec_profile ?? "";
    $this->coding_mode = $coding_mode ?? "";
    $this->rate_control_mode = $rate_control_mode ?? "";
    $this->raw_format = $raw_format ?? "";
    $this->sample_rate = $sample_rate ?? 0;
    $this->specification = $specification ?? "";
    $this->vbr_quality = $vbr_quality ?? "";
  }
}

type AacSpecification = string;

type AacVbrQuality = string;

type Ac3BitstreamMode = string;

type Ac3CodingMode = string;

type Ac3DynamicRangeCompressionProfile = string;

type Ac3LfeFilter = string;

type Ac3MetadataControl = string;

class Ac3Settings {
  public __integerMin64000Max640000 $bitrate;
  public Ac3BitstreamMode $bitstream_mode;
  public Ac3CodingMode $coding_mode;
  public __integerMin1Max31 $dialnorm;
  public Ac3DynamicRangeCompressionProfile $dynamic_range_compression_profile;
  public Ac3LfeFilter $lfe_filter;
  public Ac3MetadataControl $metadata_control;
  public __integerMin48000Max48000 $sample_rate;

  public function __construct(shape(
  ?'bitrate' => __integerMin64000Max640000,
  ?'bitstream_mode' => Ac3BitstreamMode,
  ?'coding_mode' => Ac3CodingMode,
  ?'dialnorm' => __integerMin1Max31,
  ?'dynamic_range_compression_profile' => Ac3DynamicRangeCompressionProfile,
  ?'lfe_filter' => Ac3LfeFilter,
  ?'metadata_control' => Ac3MetadataControl,
  ?'sample_rate' => __integerMin48000Max48000,
  ) $s = shape()) {
    $this->bitrate = $bitrate ?? 0;
    $this->bitstream_mode = $bitstream_mode ?? "";
    $this->coding_mode = $coding_mode ?? "";
    $this->dialnorm = $dialnorm ?? 0;
    $this->dynamic_range_compression_profile = $dynamic_range_compression_profile ?? "";
    $this->lfe_filter = $lfe_filter ?? "";
    $this->metadata_control = $metadata_control ?? "";
    $this->sample_rate = $sample_rate ?? 0;
  }
}

type AccelerationMode = string;

class AccelerationSettings {
  public AccelerationMode $mode;

  public function __construct(shape(
  ?'mode' => AccelerationMode,
  ) $s = shape()) {
    $this->mode = $mode ?? "";
  }
}

type AccelerationStatus = string;

type AfdSignaling = string;

class AiffSettings {
  public __integerMin16Max24 $bit_depth;
  public __integerMin1Max64 $channels;
  public __integerMin8000Max192000 $sample_rate;

  public function __construct(shape(
  ?'bit_depth' => __integerMin16Max24,
  ?'channels' => __integerMin1Max64,
  ?'sample_rate' => __integerMin8000Max192000,
  ) $s = shape()) {
    $this->bit_depth = $bit_depth ?? 0;
    $this->channels = $channels ?? 0;
    $this->sample_rate = $sample_rate ?? 0;
  }
}

type AlphaBehavior = string;

type AncillaryConvert608To708 = string;

class AncillarySourceSettings {
  public AncillaryConvert608To708 $convert_608_to_708;
  public __integerMin1Max4 $source_ancillary_channel_number;
  public AncillaryTerminateCaptions $terminate_captions;

  public function __construct(shape(
  ?'convert_608_to_708' => AncillaryConvert608To708,
  ?'source_ancillary_channel_number' => __integerMin1Max4,
  ?'terminate_captions' => AncillaryTerminateCaptions,
  ) $s = shape()) {
    $this->convert_608_to_708 = $convert_608_to_708 ?? "";
    $this->source_ancillary_channel_number = $source_ancillary_channel_number ?? 0;
    $this->terminate_captions = $terminate_captions ?? "";
  }
}

type AncillaryTerminateCaptions = string;

type AntiAlias = string;

class AssociateCertificateRequest {
  public __string $arn;

  public function __construct(shape(
  ?'arn' => __string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class AssociateCertificateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AudioCodec = string;

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

  public function __construct(shape(
  ?'aac_settings' => AacSettings,
  ?'ac_3_settings' => Ac3Settings,
  ?'aiff_settings' => AiffSettings,
  ?'codec' => AudioCodec,
  ?'eac_3_atmos_settings' => Eac3AtmosSettings,
  ?'eac_3_settings' => Eac3Settings,
  ?'mp_2_settings' => Mp2Settings,
  ?'mp_3_settings' => Mp3Settings,
  ?'wav_settings' => WavSettings,
  ) $s = shape()) {
    $this->aac_settings = $aac_settings ?? null;
    $this->ac_3_settings = $ac_3_settings ?? null;
    $this->aiff_settings = $aiff_settings ?? null;
    $this->codec = $codec ?? "";
    $this->eac_3_atmos_settings = $eac_3_atmos_settings ?? null;
    $this->eac_3_settings = $eac_3_settings ?? null;
    $this->mp_2_settings = $mp_2_settings ?? null;
    $this->mp_3_settings = $mp_3_settings ?? null;
    $this->wav_settings = $wav_settings ?? null;
  }
}

type AudioDefaultSelection = string;

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

  public function __construct(shape(
  ?'audio_normalization_settings' => AudioNormalizationSettings,
  ?'audio_source_name' => __string,
  ?'audio_type' => __integerMin0Max255,
  ?'audio_type_control' => AudioTypeControl,
  ?'codec_settings' => AudioCodecSettings,
  ?'custom_language_code' => __stringPatternAZaZ23AZaZ,
  ?'language_code' => LanguageCode,
  ?'language_code_control' => AudioLanguageCodeControl,
  ?'remix_settings' => RemixSettings,
  ?'stream_name' => __stringPatternWS,
  ) $s = shape()) {
    $this->audio_normalization_settings = $audio_normalization_settings ?? null;
    $this->audio_source_name = $audio_source_name ?? "";
    $this->audio_type = $audio_type ?? 0;
    $this->audio_type_control = $audio_type_control ?? "";
    $this->codec_settings = $codec_settings ?? null;
    $this->custom_language_code = $custom_language_code ?? "";
    $this->language_code = $language_code ?? "";
    $this->language_code_control = $language_code_control ?? "";
    $this->remix_settings = $remix_settings ?? null;
    $this->stream_name = $stream_name ?? "";
  }
}

type AudioLanguageCodeControl = string;

type AudioNormalizationAlgorithm = string;

type AudioNormalizationAlgorithmControl = string;

type AudioNormalizationLoudnessLogging = string;

type AudioNormalizationPeakCalculation = string;

class AudioNormalizationSettings {
  public AudioNormalizationAlgorithm $algorithm;
  public AudioNormalizationAlgorithmControl $algorithm_control;
  public __integerMinNegative70Max0 $correction_gate_level;
  public AudioNormalizationLoudnessLogging $loudness_logging;
  public AudioNormalizationPeakCalculation $peak_calculation;
  public __doubleMinNegative59Max0 $target_lkfs;

  public function __construct(shape(
  ?'algorithm' => AudioNormalizationAlgorithm,
  ?'algorithm_control' => AudioNormalizationAlgorithmControl,
  ?'correction_gate_level' => __integerMinNegative70Max0,
  ?'loudness_logging' => AudioNormalizationLoudnessLogging,
  ?'peak_calculation' => AudioNormalizationPeakCalculation,
  ?'target_lkfs' => __doubleMinNegative59Max0,
  ) $s = shape()) {
    $this->algorithm = $algorithm ?? "";
    $this->algorithm_control = $algorithm_control ?? "";
    $this->correction_gate_level = $correction_gate_level ?? 0;
    $this->loudness_logging = $loudness_logging ?? "";
    $this->peak_calculation = $peak_calculation ?? "";
    $this->target_lkfs = $target_lkfs ?? 0.0;
  }
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

  public function __construct(shape(
  ?'custom_language_code' => __stringMin3Max3PatternAZaZ3,
  ?'default_selection' => AudioDefaultSelection,
  ?'external_audio_file_input' => __stringPatternS3MM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEEHttpsMM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEE,
  ?'language_code' => LanguageCode,
  ?'offset' => __integerMinNegative2147483648Max2147483647,
  ?'pids' => __listOf__integerMin1Max2147483647,
  ?'program_selection' => __integerMin0Max8,
  ?'remix_settings' => RemixSettings,
  ?'selector_type' => AudioSelectorType,
  ?'tracks' => __listOf__integerMin1Max2147483647,
  ) $s = shape()) {
    $this->custom_language_code = $custom_language_code ?? "";
    $this->default_selection = $default_selection ?? "";
    $this->external_audio_file_input = $external_audio_file_input ?? "";
    $this->language_code = $language_code ?? "";
    $this->offset = $offset ?? 0;
    $this->pids = $pids ?? [];
    $this->program_selection = $program_selection ?? 0;
    $this->remix_settings = $remix_settings ?? null;
    $this->selector_type = $selector_type ?? "";
    $this->tracks = $tracks ?? [];
  }
}

class AudioSelectorGroup {
  public __listOf__stringMin1 $audio_selector_names;

  public function __construct(shape(
  ?'audio_selector_names' => __listOf__stringMin1,
  ) $s = shape()) {
    $this->audio_selector_names = $audio_selector_names ?? [];
  }
}

type AudioSelectorType = string;

type AudioTypeControl = string;

type Av1AdaptiveQuantization = string;

type Av1FramerateControl = string;

type Av1FramerateConversionAlgorithm = string;

class Av1QvbrSettings {
  public __integerMin1Max10 $qvbr_quality_level;
  public __doubleMin0Max1 $qvbr_quality_level_fine_tune;

  public function __construct(shape(
  ?'qvbr_quality_level' => __integerMin1Max10,
  ?'qvbr_quality_level_fine_tune' => __doubleMin0Max1,
  ) $s = shape()) {
    $this->qvbr_quality_level = $qvbr_quality_level ?? 0;
    $this->qvbr_quality_level_fine_tune = $qvbr_quality_level_fine_tune ?? 0.0;
  }
}

type Av1RateControlMode = string;

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

  public function __construct(shape(
  ?'adaptive_quantization' => Av1AdaptiveQuantization,
  ?'framerate_control' => Av1FramerateControl,
  ?'framerate_conversion_algorithm' => Av1FramerateConversionAlgorithm,
  ?'framerate_denominator' => __integerMin1Max2147483647,
  ?'framerate_numerator' => __integerMin1Max2147483647,
  ?'gop_size' => __doubleMin0,
  ?'max_bitrate' => __integerMin1000Max1152000000,
  ?'number_b_frames_between_reference_frames' => __integerMin7Max15,
  ?'qvbr_settings' => Av1QvbrSettings,
  ?'rate_control_mode' => Av1RateControlMode,
  ?'slices' => __integerMin1Max32,
  ?'spatial_adaptive_quantization' => Av1SpatialAdaptiveQuantization,
  ) $s = shape()) {
    $this->adaptive_quantization = $adaptive_quantization ?? "";
    $this->framerate_control = $framerate_control ?? "";
    $this->framerate_conversion_algorithm = $framerate_conversion_algorithm ?? "";
    $this->framerate_denominator = $framerate_denominator ?? 0;
    $this->framerate_numerator = $framerate_numerator ?? 0;
    $this->gop_size = $gop_size ?? 0.0;
    $this->max_bitrate = $max_bitrate ?? 0;
    $this->number_b_frames_between_reference_frames = $number_b_frames_between_reference_frames ?? 0;
    $this->qvbr_settings = $qvbr_settings ?? null;
    $this->rate_control_mode = $rate_control_mode ?? "";
    $this->slices = $slices ?? 0;
    $this->spatial_adaptive_quantization = $spatial_adaptive_quantization ?? "";
  }
}

type Av1SpatialAdaptiveQuantization = string;

class AvailBlanking {
  public __stringMin14PatternS3BmpBMPPngPNGHttpsBmpBMPPngPNG $avail_blanking_image;

  public function __construct(shape(
  ?'avail_blanking_image' => __stringMin14PatternS3BmpBMPPngPNGHttpsBmpBMPPngPNG,
  ) $s = shape()) {
    $this->avail_blanking_image = $avail_blanking_image ?? "";
  }
}

class BadRequestException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type BillingTagsSource = string;

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

  public function __construct(shape(
  ?'alignment' => BurninSubtitleAlignment,
  ?'background_color' => BurninSubtitleBackgroundColor,
  ?'background_opacity' => __integerMin0Max255,
  ?'font_color' => BurninSubtitleFontColor,
  ?'font_opacity' => __integerMin0Max255,
  ?'font_resolution' => __integerMin96Max600,
  ?'font_script' => FontScript,
  ?'font_size' => __integerMin0Max96,
  ?'outline_color' => BurninSubtitleOutlineColor,
  ?'outline_size' => __integerMin0Max10,
  ?'shadow_color' => BurninSubtitleShadowColor,
  ?'shadow_opacity' => __integerMin0Max255,
  ?'shadow_x_offset' => __integerMinNegative2147483648Max2147483647,
  ?'shadow_y_offset' => __integerMinNegative2147483648Max2147483647,
  ?'teletext_spacing' => BurninSubtitleTeletextSpacing,
  ?'x_position' => __integerMin0Max2147483647,
  ?'y_position' => __integerMin0Max2147483647,
  ) $s = shape()) {
    $this->alignment = $alignment ?? "";
    $this->background_color = $background_color ?? "";
    $this->background_opacity = $background_opacity ?? 0;
    $this->font_color = $font_color ?? "";
    $this->font_opacity = $font_opacity ?? 0;
    $this->font_resolution = $font_resolution ?? 0;
    $this->font_script = $font_script ?? "";
    $this->font_size = $font_size ?? 0;
    $this->outline_color = $outline_color ?? "";
    $this->outline_size = $outline_size ?? 0;
    $this->shadow_color = $shadow_color ?? "";
    $this->shadow_opacity = $shadow_opacity ?? 0;
    $this->shadow_x_offset = $shadow_x_offset ?? 0;
    $this->shadow_y_offset = $shadow_y_offset ?? 0;
    $this->teletext_spacing = $teletext_spacing ?? "";
    $this->x_position = $x_position ?? 0;
    $this->y_position = $y_position ?? 0;
  }
}

type BurninSubtitleAlignment = string;

type BurninSubtitleBackgroundColor = string;

type BurninSubtitleFontColor = string;

type BurninSubtitleOutlineColor = string;

type BurninSubtitleShadowColor = string;

type BurninSubtitleTeletextSpacing = string;

class CancelJobRequest {
  public __string $id;

  public function __construct(shape(
  ?'id' => __string,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class CancelJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CaptionDescription {
  public __stringMin1 $caption_selector_name;
  public __stringPatternAZaZ23AZaZ $custom_language_code;
  public CaptionDestinationSettings $destination_settings;
  public LanguageCode $language_code;
  public __string $language_description;

  public function __construct(shape(
  ?'caption_selector_name' => __stringMin1,
  ?'custom_language_code' => __stringPatternAZaZ23AZaZ,
  ?'destination_settings' => CaptionDestinationSettings,
  ?'language_code' => LanguageCode,
  ?'language_description' => __string,
  ) $s = shape()) {
    $this->caption_selector_name = $caption_selector_name ?? "";
    $this->custom_language_code = $custom_language_code ?? "";
    $this->destination_settings = $destination_settings ?? null;
    $this->language_code = $language_code ?? "";
    $this->language_description = $language_description ?? "";
  }
}

class CaptionDescriptionPreset {
  public __stringPatternAZaZ23AZaZ $custom_language_code;
  public CaptionDestinationSettings $destination_settings;
  public LanguageCode $language_code;
  public __string $language_description;

  public function __construct(shape(
  ?'custom_language_code' => __stringPatternAZaZ23AZaZ,
  ?'destination_settings' => CaptionDestinationSettings,
  ?'language_code' => LanguageCode,
  ?'language_description' => __string,
  ) $s = shape()) {
    $this->custom_language_code = $custom_language_code ?? "";
    $this->destination_settings = $destination_settings ?? null;
    $this->language_code = $language_code ?? "";
    $this->language_description = $language_description ?? "";
  }
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

  public function __construct(shape(
  ?'burnin_destination_settings' => BurninDestinationSettings,
  ?'destination_type' => CaptionDestinationType,
  ?'dvb_sub_destination_settings' => DvbSubDestinationSettings,
  ?'embedded_destination_settings' => EmbeddedDestinationSettings,
  ?'imsc_destination_settings' => ImscDestinationSettings,
  ?'scc_destination_settings' => SccDestinationSettings,
  ?'teletext_destination_settings' => TeletextDestinationSettings,
  ?'ttml_destination_settings' => TtmlDestinationSettings,
  ) $s = shape()) {
    $this->burnin_destination_settings = $burnin_destination_settings ?? null;
    $this->destination_type = $destination_type ?? "";
    $this->dvb_sub_destination_settings = $dvb_sub_destination_settings ?? null;
    $this->embedded_destination_settings = $embedded_destination_settings ?? null;
    $this->imsc_destination_settings = $imsc_destination_settings ?? null;
    $this->scc_destination_settings = $scc_destination_settings ?? null;
    $this->teletext_destination_settings = $teletext_destination_settings ?? null;
    $this->ttml_destination_settings = $ttml_destination_settings ?? null;
  }
}

type CaptionDestinationType = string;

class CaptionSelector {
  public __stringMin3Max3PatternAZaZ3 $custom_language_code;
  public LanguageCode $language_code;
  public CaptionSourceSettings $source_settings;

  public function __construct(shape(
  ?'custom_language_code' => __stringMin3Max3PatternAZaZ3,
  ?'language_code' => LanguageCode,
  ?'source_settings' => CaptionSourceSettings,
  ) $s = shape()) {
    $this->custom_language_code = $custom_language_code ?? "";
    $this->language_code = $language_code ?? "";
    $this->source_settings = $source_settings ?? null;
  }
}

class CaptionSourceFramerate {
  public __integerMin1Max1001 $framerate_denominator;
  public __integerMin1Max60000 $framerate_numerator;

  public function __construct(shape(
  ?'framerate_denominator' => __integerMin1Max1001,
  ?'framerate_numerator' => __integerMin1Max60000,
  ) $s = shape()) {
    $this->framerate_denominator = $framerate_denominator ?? 0;
    $this->framerate_numerator = $framerate_numerator ?? 0;
  }
}

class CaptionSourceSettings {
  public AncillarySourceSettings $ancillary_source_settings;
  public DvbSubSourceSettings $dvb_sub_source_settings;
  public EmbeddedSourceSettings $embedded_source_settings;
  public FileSourceSettings $file_source_settings;
  public CaptionSourceType $source_type;
  public TeletextSourceSettings $teletext_source_settings;
  public TrackSourceSettings $track_source_settings;

  public function __construct(shape(
  ?'ancillary_source_settings' => AncillarySourceSettings,
  ?'dvb_sub_source_settings' => DvbSubSourceSettings,
  ?'embedded_source_settings' => EmbeddedSourceSettings,
  ?'file_source_settings' => FileSourceSettings,
  ?'source_type' => CaptionSourceType,
  ?'teletext_source_settings' => TeletextSourceSettings,
  ?'track_source_settings' => TrackSourceSettings,
  ) $s = shape()) {
    $this->ancillary_source_settings = $ancillary_source_settings ?? null;
    $this->dvb_sub_source_settings = $dvb_sub_source_settings ?? null;
    $this->embedded_source_settings = $embedded_source_settings ?? null;
    $this->file_source_settings = $file_source_settings ?? null;
    $this->source_type = $source_type ?? "";
    $this->teletext_source_settings = $teletext_source_settings ?? null;
    $this->track_source_settings = $track_source_settings ?? null;
  }
}

type CaptionSourceType = string;

class ChannelMapping {
  public __listOfOutputChannelMapping $output_channels;

  public function __construct(shape(
  ?'output_channels' => __listOfOutputChannelMapping,
  ) $s = shape()) {
    $this->output_channels = $output_channels ?? [];
  }
}

class CmafAdditionalManifest {
  public __stringMin1 $manifest_name_modifier;
  public __listOf__stringMin1 $selected_outputs;

  public function __construct(shape(
  ?'manifest_name_modifier' => __stringMin1,
  ?'selected_outputs' => __listOf__stringMin1,
  ) $s = shape()) {
    $this->manifest_name_modifier = $manifest_name_modifier ?? "";
    $this->selected_outputs = $selected_outputs ?? [];
  }
}

type CmafClientCache = string;

type CmafCodecSpecification = string;

class CmafEncryptionSettings {
  public __stringMin32Max32Pattern09aFAF32 $constant_initialization_vector;
  public CmafEncryptionType $encryption_method;
  public CmafInitializationVectorInManifest $initialization_vector_in_manifest;
  public SpekeKeyProviderCmaf $speke_key_provider;
  public StaticKeyProvider $static_key_provider;
  public CmafKeyProviderType $type;

  public function __construct(shape(
  ?'constant_initialization_vector' => __stringMin32Max32Pattern09aFAF32,
  ?'encryption_method' => CmafEncryptionType,
  ?'initialization_vector_in_manifest' => CmafInitializationVectorInManifest,
  ?'speke_key_provider' => SpekeKeyProviderCmaf,
  ?'static_key_provider' => StaticKeyProvider,
  ?'type' => CmafKeyProviderType,
  ) $s = shape()) {
    $this->constant_initialization_vector = $constant_initialization_vector ?? "";
    $this->encryption_method = $encryption_method ?? "";
    $this->initialization_vector_in_manifest = $initialization_vector_in_manifest ?? "";
    $this->speke_key_provider = $speke_key_provider ?? null;
    $this->static_key_provider = $static_key_provider ?? null;
    $this->type = $type ?? "";
  }
}

type CmafEncryptionType = string;

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

  public function __construct(shape(
  ?'additional_manifests' => __listOfCmafAdditionalManifest,
  ?'base_url' => __string,
  ?'client_cache' => CmafClientCache,
  ?'codec_specification' => CmafCodecSpecification,
  ?'destination' => __stringPatternS3,
  ?'destination_settings' => DestinationSettings,
  ?'encryption' => CmafEncryptionSettings,
  ?'fragment_length' => __integerMin1Max2147483647,
  ?'manifest_compression' => CmafManifestCompression,
  ?'manifest_duration_format' => CmafManifestDurationFormat,
  ?'min_buffer_time' => __integerMin0Max2147483647,
  ?'min_final_segment_length' => __doubleMin0Max2147483647,
  ?'mpd_profile' => CmafMpdProfile,
  ?'segment_control' => CmafSegmentControl,
  ?'segment_length' => __integerMin1Max2147483647,
  ?'stream_inf_resolution' => CmafStreamInfResolution,
  ?'write_dash_manifest' => CmafWriteDASHManifest,
  ?'write_hls_manifest' => CmafWriteHLSManifest,
  ?'write_segment_timeline_in_representation' => CmafWriteSegmentTimelineInRepresentation,
  ) $s = shape()) {
    $this->additional_manifests = $additional_manifests ?? [];
    $this->base_url = $base_url ?? "";
    $this->client_cache = $client_cache ?? "";
    $this->codec_specification = $codec_specification ?? "";
    $this->destination = $destination ?? "";
    $this->destination_settings = $destination_settings ?? null;
    $this->encryption = $encryption ?? null;
    $this->fragment_length = $fragment_length ?? 0;
    $this->manifest_compression = $manifest_compression ?? "";
    $this->manifest_duration_format = $manifest_duration_format ?? "";
    $this->min_buffer_time = $min_buffer_time ?? 0;
    $this->min_final_segment_length = $min_final_segment_length ?? 0.0;
    $this->mpd_profile = $mpd_profile ?? "";
    $this->segment_control = $segment_control ?? "";
    $this->segment_length = $segment_length ?? 0;
    $this->stream_inf_resolution = $stream_inf_resolution ?? "";
    $this->write_dash_manifest = $write_dash_manifest ?? "";
    $this->write_hls_manifest = $write_hls_manifest ?? "";
    $this->write_segment_timeline_in_representation = $write_segment_timeline_in_representation ?? "";
  }
}

type CmafInitializationVectorInManifest = string;

type CmafKeyProviderType = string;

type CmafManifestCompression = string;

type CmafManifestDurationFormat = string;

type CmafMpdProfile = string;

type CmafSegmentControl = string;

type CmafStreamInfResolution = string;

type CmafWriteDASHManifest = string;

type CmafWriteHLSManifest = string;

type CmafWriteSegmentTimelineInRepresentation = string;

type CmfcScte35Esam = string;

type CmfcScte35Source = string;

class CmfcSettings {
  public CmfcScte35Esam $scte_35_esam;
  public CmfcScte35Source $scte_35_source;

  public function __construct(shape(
  ?'scte_35_esam' => CmfcScte35Esam,
  ?'scte_35_source' => CmfcScte35Source,
  ) $s = shape()) {
    $this->scte_35_esam = $scte_35_esam ?? "";
    $this->scte_35_source = $scte_35_source ?? "";
  }
}

class ColorCorrector {
  public __integerMin1Max100 $brightness;
  public ColorSpaceConversion $color_space_conversion;
  public __integerMin1Max100 $contrast;
  public Hdr10Metadata $hdr_10_metadata;
  public __integerMinNegative180Max180 $hue;
  public __integerMin1Max100 $saturation;

  public function __construct(shape(
  ?'brightness' => __integerMin1Max100,
  ?'color_space_conversion' => ColorSpaceConversion,
  ?'contrast' => __integerMin1Max100,
  ?'hdr_10_metadata' => Hdr10Metadata,
  ?'hue' => __integerMinNegative180Max180,
  ?'saturation' => __integerMin1Max100,
  ) $s = shape()) {
    $this->brightness = $brightness ?? 0;
    $this->color_space_conversion = $color_space_conversion ?? "";
    $this->contrast = $contrast ?? 0;
    $this->hdr_10_metadata = $hdr_10_metadata ?? null;
    $this->hue = $hue ?? 0;
    $this->saturation = $saturation ?? 0;
  }
}

type ColorMetadata = string;

type ColorSpace = string;

type ColorSpaceConversion = string;

type ColorSpaceUsage = string;

type Commitment = string;

class ConflictException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'cmfc_settings' => CmfcSettings,
  ?'container' => ContainerType,
  ?'f_4_v_settings' => F4vSettings,
  ?'m_2_ts_settings' => M2tsSettings,
  ?'m_3_u8_settings' => M3u8Settings,
  ?'mov_settings' => MovSettings,
  ?'mp_4_settings' => Mp4Settings,
  ?'mpd_settings' => MpdSettings,
  ) $s = shape()) {
    $this->cmfc_settings = $cmfc_settings ?? null;
    $this->container = $container ?? "";
    $this->f_4_v_settings = $f_4_v_settings ?? null;
    $this->m_2_ts_settings = $m_2_ts_settings ?? null;
    $this->m_3_u8_settings = $m_3_u8_settings ?? null;
    $this->mov_settings = $mov_settings ?? null;
    $this->mp_4_settings = $mp_4_settings ?? null;
    $this->mpd_settings = $mpd_settings ?? null;
  }
}

type ContainerType = string;

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

  public function __construct(shape(
  ?'acceleration_settings' => AccelerationSettings,
  ?'billing_tags_source' => BillingTagsSource,
  ?'client_request_token' => __string,
  ?'hop_destinations' => __listOfHopDestination,
  ?'job_template' => __string,
  ?'priority' => __integerMinNegative50Max50,
  ?'queue' => __string,
  ?'role' => __string,
  ?'settings' => JobSettings,
  ?'simulate_reserved_queue' => SimulateReservedQueue,
  ?'status_update_interval' => StatusUpdateInterval,
  ?'tags' => __mapOf__string,
  ?'user_metadata' => __mapOf__string,
  ) $s = shape()) {
    $this->acceleration_settings = $acceleration_settings ?? null;
    $this->billing_tags_source = $billing_tags_source ?? "";
    $this->client_request_token = $client_request_token ?? "";
    $this->hop_destinations = $hop_destinations ?? [];
    $this->job_template = $job_template ?? "";
    $this->priority = $priority ?? 0;
    $this->queue = $queue ?? "";
    $this->role = $role ?? "";
    $this->settings = $settings ?? null;
    $this->simulate_reserved_queue = $simulate_reserved_queue ?? "";
    $this->status_update_interval = $status_update_interval ?? "";
    $this->tags = $tags ?? [];
    $this->user_metadata = $user_metadata ?? [];
  }
}

class CreateJobResponse {
  public Job $job;

  public function __construct(shape(
  ?'job' => Job,
  ) $s = shape()) {
    $this->job = $job ?? null;
  }
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

  public function __construct(shape(
  ?'acceleration_settings' => AccelerationSettings,
  ?'category' => __string,
  ?'description' => __string,
  ?'hop_destinations' => __listOfHopDestination,
  ?'name' => __string,
  ?'priority' => __integerMinNegative50Max50,
  ?'queue' => __string,
  ?'settings' => JobTemplateSettings,
  ?'status_update_interval' => StatusUpdateInterval,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->acceleration_settings = $acceleration_settings ?? null;
    $this->category = $category ?? "";
    $this->description = $description ?? "";
    $this->hop_destinations = $hop_destinations ?? [];
    $this->name = $name ?? "";
    $this->priority = $priority ?? 0;
    $this->queue = $queue ?? "";
    $this->settings = $settings ?? null;
    $this->status_update_interval = $status_update_interval ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateJobTemplateResponse {
  public JobTemplate $job_template;

  public function __construct(shape(
  ?'job_template' => JobTemplate,
  ) $s = shape()) {
    $this->job_template = $job_template ?? null;
  }
}

class CreatePresetRequest {
  public __string $category;
  public __string $description;
  public __string $name;
  public PresetSettings $settings;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'category' => __string,
  ?'description' => __string,
  ?'name' => __string,
  ?'settings' => PresetSettings,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->settings = $settings ?? null;
    $this->tags = $tags ?? [];
  }
}

class CreatePresetResponse {
  public Preset $preset;

  public function __construct(shape(
  ?'preset' => Preset,
  ) $s = shape()) {
    $this->preset = $preset ?? null;
  }
}

class CreateQueueRequest {
  public __string $description;
  public __string $name;
  public PricingPlan $pricing_plan;
  public ReservationPlanSettings $reservation_plan_settings;
  public QueueStatus $status;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'description' => __string,
  ?'name' => __string,
  ?'pricing_plan' => PricingPlan,
  ?'reservation_plan_settings' => ReservationPlanSettings,
  ?'status' => QueueStatus,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->pricing_plan = $pricing_plan ?? "";
    $this->reservation_plan_settings = $reservation_plan_settings ?? null;
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateQueueResponse {
  public Queue $queue;

  public function __construct(shape(
  ?'queue' => Queue,
  ) $s = shape()) {
    $this->queue = $queue ?? null;
  }
}

class DashAdditionalManifest {
  public __stringMin1 $manifest_name_modifier;
  public __listOf__stringMin1 $selected_outputs;

  public function __construct(shape(
  ?'manifest_name_modifier' => __stringMin1,
  ?'selected_outputs' => __listOf__stringMin1,
  ) $s = shape()) {
    $this->manifest_name_modifier = $manifest_name_modifier ?? "";
    $this->selected_outputs = $selected_outputs ?? [];
  }
}

class DashIsoEncryptionSettings {
  public DashIsoPlaybackDeviceCompatibility $playback_device_compatibility;
  public SpekeKeyProvider $speke_key_provider;

  public function __construct(shape(
  ?'playback_device_compatibility' => DashIsoPlaybackDeviceCompatibility,
  ?'speke_key_provider' => SpekeKeyProvider,
  ) $s = shape()) {
    $this->playback_device_compatibility = $playback_device_compatibility ?? "";
    $this->speke_key_provider = $speke_key_provider ?? null;
  }
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

  public function __construct(shape(
  ?'additional_manifests' => __listOfDashAdditionalManifest,
  ?'base_url' => __string,
  ?'destination' => __stringPatternS3,
  ?'destination_settings' => DestinationSettings,
  ?'encryption' => DashIsoEncryptionSettings,
  ?'fragment_length' => __integerMin1Max2147483647,
  ?'hbbtv_compliance' => DashIsoHbbtvCompliance,
  ?'min_buffer_time' => __integerMin0Max2147483647,
  ?'mpd_profile' => DashIsoMpdProfile,
  ?'segment_control' => DashIsoSegmentControl,
  ?'segment_length' => __integerMin1Max2147483647,
  ?'write_segment_timeline_in_representation' => DashIsoWriteSegmentTimelineInRepresentation,
  ) $s = shape()) {
    $this->additional_manifests = $additional_manifests ?? [];
    $this->base_url = $base_url ?? "";
    $this->destination = $destination ?? "";
    $this->destination_settings = $destination_settings ?? null;
    $this->encryption = $encryption ?? null;
    $this->fragment_length = $fragment_length ?? 0;
    $this->hbbtv_compliance = $hbbtv_compliance ?? "";
    $this->min_buffer_time = $min_buffer_time ?? 0;
    $this->mpd_profile = $mpd_profile ?? "";
    $this->segment_control = $segment_control ?? "";
    $this->segment_length = $segment_length ?? 0;
    $this->write_segment_timeline_in_representation = $write_segment_timeline_in_representation ?? "";
  }
}

type DashIsoHbbtvCompliance = string;

type DashIsoMpdProfile = string;

type DashIsoPlaybackDeviceCompatibility = string;

type DashIsoSegmentControl = string;

type DashIsoWriteSegmentTimelineInRepresentation = string;

type DecryptionMode = string;

type DeinterlaceAlgorithm = string;

class Deinterlacer {
  public DeinterlaceAlgorithm $algorithm;
  public DeinterlacerControl $control;
  public DeinterlacerMode $mode;

  public function __construct(shape(
  ?'algorithm' => DeinterlaceAlgorithm,
  ?'control' => DeinterlacerControl,
  ?'mode' => DeinterlacerMode,
  ) $s = shape()) {
    $this->algorithm = $algorithm ?? "";
    $this->control = $control ?? "";
    $this->mode = $mode ?? "";
  }
}

type DeinterlacerControl = string;

type DeinterlacerMode = string;

class DeleteJobTemplateRequest {
  public __string $name;

  public function __construct(shape(
  ?'name' => __string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteJobTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePresetRequest {
  public __string $name;

  public function __construct(shape(
  ?'name' => __string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeletePresetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteQueueRequest {
  public __string $name;

  public function __construct(shape(
  ?'name' => __string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteQueueResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DescribeEndpointsMode = string;

class DescribeEndpointsRequest {
  public __integer $max_results;
  public DescribeEndpointsMode $mode;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => __integer,
  ?'mode' => DescribeEndpointsMode,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->mode = $mode ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class DescribeEndpointsResponse {
  public __listOfEndpoint $endpoints;
  public __string $next_token;

  public function __construct(shape(
  ?'endpoints' => __listOfEndpoint,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->endpoints = $endpoints ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DestinationSettings {
  public S3DestinationSettings $s_3_settings;

  public function __construct(shape(
  ?'s_3_settings' => S3DestinationSettings,
  ) $s = shape()) {
    $this->s_3_settings = $s_3_settings ?? null;
  }
}

class DisassociateCertificateRequest {
  public __string $arn;

  public function __construct(shape(
  ?'arn' => __string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class DisassociateCertificateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DolbyVision {
  public DolbyVisionLevel6Metadata $l_6_metadata;
  public DolbyVisionLevel6Mode $l_6_mode;
  public DolbyVisionProfile $profile;

  public function __construct(shape(
  ?'l_6_metadata' => DolbyVisionLevel6Metadata,
  ?'l_6_mode' => DolbyVisionLevel6Mode,
  ?'profile' => DolbyVisionProfile,
  ) $s = shape()) {
    $this->l_6_metadata = $l_6_metadata ?? null;
    $this->l_6_mode = $l_6_mode ?? "";
    $this->profile = $profile ?? "";
  }
}

class DolbyVisionLevel6Metadata {
  public __integerMin0Max65535 $max_cll;
  public __integerMin0Max65535 $max_fall;

  public function __construct(shape(
  ?'max_cll' => __integerMin0Max65535,
  ?'max_fall' => __integerMin0Max65535,
  ) $s = shape()) {
    $this->max_cll = $max_cll ?? 0;
    $this->max_fall = $max_fall ?? 0;
  }
}

type DolbyVisionLevel6Mode = string;

type DolbyVisionProfile = string;

type DropFrameTimecode = string;

class DvbNitSettings {
  public __integerMin0Max65535 $network_id;
  public __stringMin1Max256 $network_name;
  public __integerMin25Max10000 $nit_interval;

  public function __construct(shape(
  ?'network_id' => __integerMin0Max65535,
  ?'network_name' => __stringMin1Max256,
  ?'nit_interval' => __integerMin25Max10000,
  ) $s = shape()) {
    $this->network_id = $network_id ?? 0;
    $this->network_name = $network_name ?? "";
    $this->nit_interval = $nit_interval ?? 0;
  }
}

class DvbSdtSettings {
  public OutputSdt $output_sdt;
  public __integerMin25Max2000 $sdt_interval;
  public __stringMin1Max256 $service_name;
  public __stringMin1Max256 $service_provider_name;

  public function __construct(shape(
  ?'output_sdt' => OutputSdt,
  ?'sdt_interval' => __integerMin25Max2000,
  ?'service_name' => __stringMin1Max256,
  ?'service_provider_name' => __stringMin1Max256,
  ) $s = shape()) {
    $this->output_sdt = $output_sdt ?? "";
    $this->sdt_interval = $sdt_interval ?? 0;
    $this->service_name = $service_name ?? "";
    $this->service_provider_name = $service_provider_name ?? "";
  }
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

  public function __construct(shape(
  ?'alignment' => DvbSubtitleAlignment,
  ?'background_color' => DvbSubtitleBackgroundColor,
  ?'background_opacity' => __integerMin0Max255,
  ?'font_color' => DvbSubtitleFontColor,
  ?'font_opacity' => __integerMin0Max255,
  ?'font_resolution' => __integerMin96Max600,
  ?'font_script' => FontScript,
  ?'font_size' => __integerMin0Max96,
  ?'outline_color' => DvbSubtitleOutlineColor,
  ?'outline_size' => __integerMin0Max10,
  ?'shadow_color' => DvbSubtitleShadowColor,
  ?'shadow_opacity' => __integerMin0Max255,
  ?'shadow_x_offset' => __integerMinNegative2147483648Max2147483647,
  ?'shadow_y_offset' => __integerMinNegative2147483648Max2147483647,
  ?'subtitling_type' => DvbSubtitlingType,
  ?'teletext_spacing' => DvbSubtitleTeletextSpacing,
  ?'x_position' => __integerMin0Max2147483647,
  ?'y_position' => __integerMin0Max2147483647,
  ) $s = shape()) {
    $this->alignment = $alignment ?? "";
    $this->background_color = $background_color ?? "";
    $this->background_opacity = $background_opacity ?? 0;
    $this->font_color = $font_color ?? "";
    $this->font_opacity = $font_opacity ?? 0;
    $this->font_resolution = $font_resolution ?? 0;
    $this->font_script = $font_script ?? "";
    $this->font_size = $font_size ?? 0;
    $this->outline_color = $outline_color ?? "";
    $this->outline_size = $outline_size ?? 0;
    $this->shadow_color = $shadow_color ?? "";
    $this->shadow_opacity = $shadow_opacity ?? 0;
    $this->shadow_x_offset = $shadow_x_offset ?? 0;
    $this->shadow_y_offset = $shadow_y_offset ?? 0;
    $this->subtitling_type = $subtitling_type ?? "";
    $this->teletext_spacing = $teletext_spacing ?? "";
    $this->x_position = $x_position ?? 0;
    $this->y_position = $y_position ?? 0;
  }
}

class DvbSubSourceSettings {
  public __integerMin1Max2147483647 $pid;

  public function __construct(shape(
  ?'pid' => __integerMin1Max2147483647,
  ) $s = shape()) {
    $this->pid = $pid ?? 0;
  }
}

type DvbSubtitleAlignment = string;

type DvbSubtitleBackgroundColor = string;

type DvbSubtitleFontColor = string;

type DvbSubtitleOutlineColor = string;

type DvbSubtitleShadowColor = string;

type DvbSubtitleTeletextSpacing = string;

type DvbSubtitlingType = string;

class DvbTdtSettings {
  public __integerMin1000Max30000 $tdt_interval;

  public function __construct(shape(
  ?'tdt_interval' => __integerMin1000Max30000,
  ) $s = shape()) {
    $this->tdt_interval = $tdt_interval ?? 0;
  }
}

type Eac3AtmosBitstreamMode = string;

type Eac3AtmosCodingMode = string;

type Eac3AtmosDialogueIntelligence = string;

type Eac3AtmosDynamicRangeCompressionLine = string;

type Eac3AtmosDynamicRangeCompressionRf = string;

type Eac3AtmosMeteringMode = string;

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

  public function __construct(shape(
  ?'bitrate' => __integerMin384000Max768000,
  ?'bitstream_mode' => Eac3AtmosBitstreamMode,
  ?'coding_mode' => Eac3AtmosCodingMode,
  ?'dialogue_intelligence' => Eac3AtmosDialogueIntelligence,
  ?'dynamic_range_compression_line' => Eac3AtmosDynamicRangeCompressionLine,
  ?'dynamic_range_compression_rf' => Eac3AtmosDynamicRangeCompressionRf,
  ?'lo_ro_center_mix_level' => __doubleMinNegative6Max3,
  ?'lo_ro_surround_mix_level' => __doubleMinNegative60MaxNegative1,
  ?'lt_rt_center_mix_level' => __doubleMinNegative6Max3,
  ?'lt_rt_surround_mix_level' => __doubleMinNegative60MaxNegative1,
  ?'metering_mode' => Eac3AtmosMeteringMode,
  ?'sample_rate' => __integerMin48000Max48000,
  ?'speech_threshold' => __integerMin1Max100,
  ?'stereo_downmix' => Eac3AtmosStereoDownmix,
  ?'surround_ex_mode' => Eac3AtmosSurroundExMode,
  ) $s = shape()) {
    $this->bitrate = $bitrate ?? 0;
    $this->bitstream_mode = $bitstream_mode ?? "";
    $this->coding_mode = $coding_mode ?? "";
    $this->dialogue_intelligence = $dialogue_intelligence ?? "";
    $this->dynamic_range_compression_line = $dynamic_range_compression_line ?? "";
    $this->dynamic_range_compression_rf = $dynamic_range_compression_rf ?? "";
    $this->lo_ro_center_mix_level = $lo_ro_center_mix_level ?? 0.0;
    $this->lo_ro_surround_mix_level = $lo_ro_surround_mix_level ?? 0.0;
    $this->lt_rt_center_mix_level = $lt_rt_center_mix_level ?? 0.0;
    $this->lt_rt_surround_mix_level = $lt_rt_surround_mix_level ?? 0.0;
    $this->metering_mode = $metering_mode ?? "";
    $this->sample_rate = $sample_rate ?? 0;
    $this->speech_threshold = $speech_threshold ?? 0;
    $this->stereo_downmix = $stereo_downmix ?? "";
    $this->surround_ex_mode = $surround_ex_mode ?? "";
  }
}

type Eac3AtmosStereoDownmix = string;

type Eac3AtmosSurroundExMode = string;

type Eac3AttenuationControl = string;

type Eac3BitstreamMode = string;

type Eac3CodingMode = string;

type Eac3DcFilter = string;

type Eac3DynamicRangeCompressionLine = string;

type Eac3DynamicRangeCompressionRf = string;

type Eac3LfeControl = string;

type Eac3LfeFilter = string;

type Eac3MetadataControl = string;

type Eac3PassthroughControl = string;

type Eac3PhaseControl = string;

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

  public function __construct(shape(
  ?'attenuation_control' => Eac3AttenuationControl,
  ?'bitrate' => __integerMin64000Max640000,
  ?'bitstream_mode' => Eac3BitstreamMode,
  ?'coding_mode' => Eac3CodingMode,
  ?'dc_filter' => Eac3DcFilter,
  ?'dialnorm' => __integerMin1Max31,
  ?'dynamic_range_compression_line' => Eac3DynamicRangeCompressionLine,
  ?'dynamic_range_compression_rf' => Eac3DynamicRangeCompressionRf,
  ?'lfe_control' => Eac3LfeControl,
  ?'lfe_filter' => Eac3LfeFilter,
  ?'lo_ro_center_mix_level' => __doubleMinNegative60Max3,
  ?'lo_ro_surround_mix_level' => __doubleMinNegative60MaxNegative1,
  ?'lt_rt_center_mix_level' => __doubleMinNegative60Max3,
  ?'lt_rt_surround_mix_level' => __doubleMinNegative60MaxNegative1,
  ?'metadata_control' => Eac3MetadataControl,
  ?'passthrough_control' => Eac3PassthroughControl,
  ?'phase_control' => Eac3PhaseControl,
  ?'sample_rate' => __integerMin48000Max48000,
  ?'stereo_downmix' => Eac3StereoDownmix,
  ?'surround_ex_mode' => Eac3SurroundExMode,
  ?'surround_mode' => Eac3SurroundMode,
  ) $s = shape()) {
    $this->attenuation_control = $attenuation_control ?? "";
    $this->bitrate = $bitrate ?? 0;
    $this->bitstream_mode = $bitstream_mode ?? "";
    $this->coding_mode = $coding_mode ?? "";
    $this->dc_filter = $dc_filter ?? "";
    $this->dialnorm = $dialnorm ?? 0;
    $this->dynamic_range_compression_line = $dynamic_range_compression_line ?? "";
    $this->dynamic_range_compression_rf = $dynamic_range_compression_rf ?? "";
    $this->lfe_control = $lfe_control ?? "";
    $this->lfe_filter = $lfe_filter ?? "";
    $this->lo_ro_center_mix_level = $lo_ro_center_mix_level ?? 0.0;
    $this->lo_ro_surround_mix_level = $lo_ro_surround_mix_level ?? 0.0;
    $this->lt_rt_center_mix_level = $lt_rt_center_mix_level ?? 0.0;
    $this->lt_rt_surround_mix_level = $lt_rt_surround_mix_level ?? 0.0;
    $this->metadata_control = $metadata_control ?? "";
    $this->passthrough_control = $passthrough_control ?? "";
    $this->phase_control = $phase_control ?? "";
    $this->sample_rate = $sample_rate ?? 0;
    $this->stereo_downmix = $stereo_downmix ?? "";
    $this->surround_ex_mode = $surround_ex_mode ?? "";
    $this->surround_mode = $surround_mode ?? "";
  }
}

type Eac3StereoDownmix = string;

type Eac3SurroundExMode = string;

type Eac3SurroundMode = string;

type EmbeddedConvert608To708 = string;

class EmbeddedDestinationSettings {
  public __integerMin1Max4 $destination_608_channel_number;
  public __integerMin1Max6 $destination_708_service_number;

  public function __construct(shape(
  ?'destination_608_channel_number' => __integerMin1Max4,
  ?'destination_708_service_number' => __integerMin1Max6,
  ) $s = shape()) {
    $this->destination_608_channel_number = $destination_608_channel_number ?? 0;
    $this->destination_708_service_number = $destination_708_service_number ?? 0;
  }
}

class EmbeddedSourceSettings {
  public EmbeddedConvert608To708 $convert_608_to_708;
  public __integerMin1Max4 $source_608_channel_number;
  public __integerMin1Max1 $source_608_track_number;
  public EmbeddedTerminateCaptions $terminate_captions;

  public function __construct(shape(
  ?'convert_608_to_708' => EmbeddedConvert608To708,
  ?'source_608_channel_number' => __integerMin1Max4,
  ?'source_608_track_number' => __integerMin1Max1,
  ?'terminate_captions' => EmbeddedTerminateCaptions,
  ) $s = shape()) {
    $this->convert_608_to_708 = $convert_608_to_708 ?? "";
    $this->source_608_channel_number = $source_608_channel_number ?? 0;
    $this->source_608_track_number = $source_608_track_number ?? 0;
    $this->terminate_captions = $terminate_captions ?? "";
  }
}

type EmbeddedTerminateCaptions = string;

class Endpoint {
  public __string $url;

  public function __construct(shape(
  ?'url' => __string,
  ) $s = shape()) {
    $this->url = $url ?? "";
  }
}

class EsamManifestConfirmConditionNotification {
  public __stringPatternSNManifestConfirmConditionNotificationNS $mcc_xml;

  public function __construct(shape(
  ?'mcc_xml' => __stringPatternSNManifestConfirmConditionNotificationNS,
  ) $s = shape()) {
    $this->mcc_xml = $mcc_xml ?? "";
  }
}

class EsamSettings {
  public EsamManifestConfirmConditionNotification $manifest_confirm_condition_notification;
  public __integerMin0Max30000 $response_signal_preroll;
  public EsamSignalProcessingNotification $signal_processing_notification;

  public function __construct(shape(
  ?'manifest_confirm_condition_notification' => EsamManifestConfirmConditionNotification,
  ?'response_signal_preroll' => __integerMin0Max30000,
  ?'signal_processing_notification' => EsamSignalProcessingNotification,
  ) $s = shape()) {
    $this->manifest_confirm_condition_notification = $manifest_confirm_condition_notification ?? null;
    $this->response_signal_preroll = $response_signal_preroll ?? 0;
    $this->signal_processing_notification = $signal_processing_notification ?? null;
  }
}

class EsamSignalProcessingNotification {
  public __stringPatternSNSignalProcessingNotificationNS $scc_xml;

  public function __construct(shape(
  ?'scc_xml' => __stringPatternSNSignalProcessingNotificationNS,
  ) $s = shape()) {
    $this->scc_xml = $scc_xml ?? "";
  }
}

class ExceptionBody {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type F4vMoovPlacement = string;

class F4vSettings {
  public F4vMoovPlacement $moov_placement;

  public function __construct(shape(
  ?'moov_placement' => F4vMoovPlacement,
  ) $s = shape()) {
    $this->moov_placement = $moov_placement ?? "";
  }
}

class FileGroupSettings {
  public __stringPatternS3 $destination;
  public DestinationSettings $destination_settings;

  public function __construct(shape(
  ?'destination' => __stringPatternS3,
  ?'destination_settings' => DestinationSettings,
  ) $s = shape()) {
    $this->destination = $destination ?? "";
    $this->destination_settings = $destination_settings ?? null;
  }
}

type FileSourceConvert608To708 = string;

class FileSourceSettings {
  public FileSourceConvert608To708 $convert_608_to_708;
  public CaptionSourceFramerate $framerate;
  public __stringMin14PatternS3SccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMIHttpsSccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMI $source_file;
  public __integerMinNegative2147483648Max2147483647 $time_delta;

  public function __construct(shape(
  ?'convert_608_to_708' => FileSourceConvert608To708,
  ?'framerate' => CaptionSourceFramerate,
  ?'source_file' => __stringMin14PatternS3SccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMIHttpsSccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMI,
  ?'time_delta' => __integerMinNegative2147483648Max2147483647,
  ) $s = shape()) {
    $this->convert_608_to_708 = $convert_608_to_708 ?? "";
    $this->framerate = $framerate ?? null;
    $this->source_file = $source_file ?? "";
    $this->time_delta = $time_delta ?? 0;
  }
}

type FontScript = string;

class ForbiddenException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class FrameCaptureSettings {
  public __integerMin1Max2147483647 $framerate_denominator;
  public __integerMin1Max2147483647 $framerate_numerator;
  public __integerMin1Max10000000 $max_captures;
  public __integerMin1Max100 $quality;

  public function __construct(shape(
  ?'framerate_denominator' => __integerMin1Max2147483647,
  ?'framerate_numerator' => __integerMin1Max2147483647,
  ?'max_captures' => __integerMin1Max10000000,
  ?'quality' => __integerMin1Max100,
  ) $s = shape()) {
    $this->framerate_denominator = $framerate_denominator ?? 0;
    $this->framerate_numerator = $framerate_numerator ?? 0;
    $this->max_captures = $max_captures ?? 0;
    $this->quality = $quality ?? 0;
  }
}

class GetJobRequest {
  public __string $id;

  public function __construct(shape(
  ?'id' => __string,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class GetJobResponse {
  public Job $job;

  public function __construct(shape(
  ?'job' => Job,
  ) $s = shape()) {
    $this->job = $job ?? null;
  }
}

class GetJobTemplateRequest {
  public __string $name;

  public function __construct(shape(
  ?'name' => __string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class GetJobTemplateResponse {
  public JobTemplate $job_template;

  public function __construct(shape(
  ?'job_template' => JobTemplate,
  ) $s = shape()) {
    $this->job_template = $job_template ?? null;
  }
}

class GetPresetRequest {
  public __string $name;

  public function __construct(shape(
  ?'name' => __string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class GetPresetResponse {
  public Preset $preset;

  public function __construct(shape(
  ?'preset' => Preset,
  ) $s = shape()) {
    $this->preset = $preset ?? null;
  }
}

class GetQueueRequest {
  public __string $name;

  public function __construct(shape(
  ?'name' => __string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class GetQueueResponse {
  public Queue $queue;

  public function __construct(shape(
  ?'queue' => Queue,
  ) $s = shape()) {
    $this->queue = $queue ?? null;
  }
}

type H264AdaptiveQuantization = string;

type H264CodecLevel = string;

type H264CodecProfile = string;

type H264DynamicSubGop = string;

type H264EntropyEncoding = string;

type H264FieldEncoding = string;

type H264FlickerAdaptiveQuantization = string;

type H264FramerateControl = string;

type H264FramerateConversionAlgorithm = string;

type H264GopBReference = string;

type H264GopSizeUnits = string;

type H264InterlaceMode = string;

type H264ParControl = string;

type H264QualityTuningLevel = string;

class H264QvbrSettings {
  public __integerMin1000Max1152000000 $max_average_bitrate;
  public __integerMin1Max10 $qvbr_quality_level;
  public __doubleMin0Max1 $qvbr_quality_level_fine_tune;

  public function __construct(shape(
  ?'max_average_bitrate' => __integerMin1000Max1152000000,
  ?'qvbr_quality_level' => __integerMin1Max10,
  ?'qvbr_quality_level_fine_tune' => __doubleMin0Max1,
  ) $s = shape()) {
    $this->max_average_bitrate = $max_average_bitrate ?? 0;
    $this->qvbr_quality_level = $qvbr_quality_level ?? 0;
    $this->qvbr_quality_level_fine_tune = $qvbr_quality_level_fine_tune ?? 0.0;
  }
}

type H264RateControlMode = string;

type H264RepeatPps = string;

type H264SceneChangeDetect = string;

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

  public function __construct(shape(
  ?'adaptive_quantization' => H264AdaptiveQuantization,
  ?'bitrate' => __integerMin1000Max1152000000,
  ?'codec_level' => H264CodecLevel,
  ?'codec_profile' => H264CodecProfile,
  ?'dynamic_sub_gop' => H264DynamicSubGop,
  ?'entropy_encoding' => H264EntropyEncoding,
  ?'field_encoding' => H264FieldEncoding,
  ?'flicker_adaptive_quantization' => H264FlickerAdaptiveQuantization,
  ?'framerate_control' => H264FramerateControl,
  ?'framerate_conversion_algorithm' => H264FramerateConversionAlgorithm,
  ?'framerate_denominator' => __integerMin1Max2147483647,
  ?'framerate_numerator' => __integerMin1Max2147483647,
  ?'gop_b_reference' => H264GopBReference,
  ?'gop_closed_cadence' => __integerMin0Max2147483647,
  ?'gop_size' => __doubleMin0,
  ?'gop_size_units' => H264GopSizeUnits,
  ?'hrd_buffer_initial_fill_percentage' => __integerMin0Max100,
  ?'hrd_buffer_size' => __integerMin0Max1152000000,
  ?'interlace_mode' => H264InterlaceMode,
  ?'max_bitrate' => __integerMin1000Max1152000000,
  ?'min_i_interval' => __integerMin0Max30,
  ?'number_b_frames_between_reference_frames' => __integerMin0Max7,
  ?'number_reference_frames' => __integerMin1Max6,
  ?'par_control' => H264ParControl,
  ?'par_denominator' => __integerMin1Max2147483647,
  ?'par_numerator' => __integerMin1Max2147483647,
  ?'quality_tuning_level' => H264QualityTuningLevel,
  ?'qvbr_settings' => H264QvbrSettings,
  ?'rate_control_mode' => H264RateControlMode,
  ?'repeat_pps' => H264RepeatPps,
  ?'scene_change_detect' => H264SceneChangeDetect,
  ?'slices' => __integerMin1Max32,
  ?'slow_pal' => H264SlowPal,
  ?'softness' => __integerMin0Max128,
  ?'spatial_adaptive_quantization' => H264SpatialAdaptiveQuantization,
  ?'syntax' => H264Syntax,
  ?'telecine' => H264Telecine,
  ?'temporal_adaptive_quantization' => H264TemporalAdaptiveQuantization,
  ?'unregistered_sei_timecode' => H264UnregisteredSeiTimecode,
  ) $s = shape()) {
    $this->adaptive_quantization = $adaptive_quantization ?? "";
    $this->bitrate = $bitrate ?? 0;
    $this->codec_level = $codec_level ?? "";
    $this->codec_profile = $codec_profile ?? "";
    $this->dynamic_sub_gop = $dynamic_sub_gop ?? "";
    $this->entropy_encoding = $entropy_encoding ?? "";
    $this->field_encoding = $field_encoding ?? "";
    $this->flicker_adaptive_quantization = $flicker_adaptive_quantization ?? "";
    $this->framerate_control = $framerate_control ?? "";
    $this->framerate_conversion_algorithm = $framerate_conversion_algorithm ?? "";
    $this->framerate_denominator = $framerate_denominator ?? 0;
    $this->framerate_numerator = $framerate_numerator ?? 0;
    $this->gop_b_reference = $gop_b_reference ?? "";
    $this->gop_closed_cadence = $gop_closed_cadence ?? 0;
    $this->gop_size = $gop_size ?? 0.0;
    $this->gop_size_units = $gop_size_units ?? "";
    $this->hrd_buffer_initial_fill_percentage = $hrd_buffer_initial_fill_percentage ?? 0;
    $this->hrd_buffer_size = $hrd_buffer_size ?? 0;
    $this->interlace_mode = $interlace_mode ?? "";
    $this->max_bitrate = $max_bitrate ?? 0;
    $this->min_i_interval = $min_i_interval ?? 0;
    $this->number_b_frames_between_reference_frames = $number_b_frames_between_reference_frames ?? 0;
    $this->number_reference_frames = $number_reference_frames ?? 0;
    $this->par_control = $par_control ?? "";
    $this->par_denominator = $par_denominator ?? 0;
    $this->par_numerator = $par_numerator ?? 0;
    $this->quality_tuning_level = $quality_tuning_level ?? "";
    $this->qvbr_settings = $qvbr_settings ?? null;
    $this->rate_control_mode = $rate_control_mode ?? "";
    $this->repeat_pps = $repeat_pps ?? "";
    $this->scene_change_detect = $scene_change_detect ?? "";
    $this->slices = $slices ?? 0;
    $this->slow_pal = $slow_pal ?? "";
    $this->softness = $softness ?? 0;
    $this->spatial_adaptive_quantization = $spatial_adaptive_quantization ?? "";
    $this->syntax = $syntax ?? "";
    $this->telecine = $telecine ?? "";
    $this->temporal_adaptive_quantization = $temporal_adaptive_quantization ?? "";
    $this->unregistered_sei_timecode = $unregistered_sei_timecode ?? "";
  }
}

type H264SlowPal = string;

type H264SpatialAdaptiveQuantization = string;

type H264Syntax = string;

type H264Telecine = string;

type H264TemporalAdaptiveQuantization = string;

type H264UnregisteredSeiTimecode = string;

type H265AdaptiveQuantization = string;

type H265AlternateTransferFunctionSei = string;

type H265CodecLevel = string;

type H265CodecProfile = string;

type H265DynamicSubGop = string;

type H265FlickerAdaptiveQuantization = string;

type H265FramerateControl = string;

type H265FramerateConversionAlgorithm = string;

type H265GopBReference = string;

type H265GopSizeUnits = string;

type H265InterlaceMode = string;

type H265ParControl = string;

type H265QualityTuningLevel = string;

class H265QvbrSettings {
  public __integerMin1000Max1466400000 $max_average_bitrate;
  public __integerMin1Max10 $qvbr_quality_level;
  public __doubleMin0Max1 $qvbr_quality_level_fine_tune;

  public function __construct(shape(
  ?'max_average_bitrate' => __integerMin1000Max1466400000,
  ?'qvbr_quality_level' => __integerMin1Max10,
  ?'qvbr_quality_level_fine_tune' => __doubleMin0Max1,
  ) $s = shape()) {
    $this->max_average_bitrate = $max_average_bitrate ?? 0;
    $this->qvbr_quality_level = $qvbr_quality_level ?? 0;
    $this->qvbr_quality_level_fine_tune = $qvbr_quality_level_fine_tune ?? 0.0;
  }
}

type H265RateControlMode = string;

type H265SampleAdaptiveOffsetFilterMode = string;

type H265SceneChangeDetect = string;

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

  public function __construct(shape(
  ?'adaptive_quantization' => H265AdaptiveQuantization,
  ?'alternate_transfer_function_sei' => H265AlternateTransferFunctionSei,
  ?'bitrate' => __integerMin1000Max1466400000,
  ?'codec_level' => H265CodecLevel,
  ?'codec_profile' => H265CodecProfile,
  ?'dynamic_sub_gop' => H265DynamicSubGop,
  ?'flicker_adaptive_quantization' => H265FlickerAdaptiveQuantization,
  ?'framerate_control' => H265FramerateControl,
  ?'framerate_conversion_algorithm' => H265FramerateConversionAlgorithm,
  ?'framerate_denominator' => __integerMin1Max2147483647,
  ?'framerate_numerator' => __integerMin1Max2147483647,
  ?'gop_b_reference' => H265GopBReference,
  ?'gop_closed_cadence' => __integerMin0Max2147483647,
  ?'gop_size' => __doubleMin0,
  ?'gop_size_units' => H265GopSizeUnits,
  ?'hrd_buffer_initial_fill_percentage' => __integerMin0Max100,
  ?'hrd_buffer_size' => __integerMin0Max1466400000,
  ?'interlace_mode' => H265InterlaceMode,
  ?'max_bitrate' => __integerMin1000Max1466400000,
  ?'min_i_interval' => __integerMin0Max30,
  ?'number_b_frames_between_reference_frames' => __integerMin0Max7,
  ?'number_reference_frames' => __integerMin1Max6,
  ?'par_control' => H265ParControl,
  ?'par_denominator' => __integerMin1Max2147483647,
  ?'par_numerator' => __integerMin1Max2147483647,
  ?'quality_tuning_level' => H265QualityTuningLevel,
  ?'qvbr_settings' => H265QvbrSettings,
  ?'rate_control_mode' => H265RateControlMode,
  ?'sample_adaptive_offset_filter_mode' => H265SampleAdaptiveOffsetFilterMode,
  ?'scene_change_detect' => H265SceneChangeDetect,
  ?'slices' => __integerMin1Max32,
  ?'slow_pal' => H265SlowPal,
  ?'spatial_adaptive_quantization' => H265SpatialAdaptiveQuantization,
  ?'telecine' => H265Telecine,
  ?'temporal_adaptive_quantization' => H265TemporalAdaptiveQuantization,
  ?'temporal_ids' => H265TemporalIds,
  ?'tiles' => H265Tiles,
  ?'unregistered_sei_timecode' => H265UnregisteredSeiTimecode,
  ?'write_mp_4_packaging_type' => H265WriteMp4PackagingType,
  ) $s = shape()) {
    $this->adaptive_quantization = $adaptive_quantization ?? "";
    $this->alternate_transfer_function_sei = $alternate_transfer_function_sei ?? "";
    $this->bitrate = $bitrate ?? 0;
    $this->codec_level = $codec_level ?? "";
    $this->codec_profile = $codec_profile ?? "";
    $this->dynamic_sub_gop = $dynamic_sub_gop ?? "";
    $this->flicker_adaptive_quantization = $flicker_adaptive_quantization ?? "";
    $this->framerate_control = $framerate_control ?? "";
    $this->framerate_conversion_algorithm = $framerate_conversion_algorithm ?? "";
    $this->framerate_denominator = $framerate_denominator ?? 0;
    $this->framerate_numerator = $framerate_numerator ?? 0;
    $this->gop_b_reference = $gop_b_reference ?? "";
    $this->gop_closed_cadence = $gop_closed_cadence ?? 0;
    $this->gop_size = $gop_size ?? 0.0;
    $this->gop_size_units = $gop_size_units ?? "";
    $this->hrd_buffer_initial_fill_percentage = $hrd_buffer_initial_fill_percentage ?? 0;
    $this->hrd_buffer_size = $hrd_buffer_size ?? 0;
    $this->interlace_mode = $interlace_mode ?? "";
    $this->max_bitrate = $max_bitrate ?? 0;
    $this->min_i_interval = $min_i_interval ?? 0;
    $this->number_b_frames_between_reference_frames = $number_b_frames_between_reference_frames ?? 0;
    $this->number_reference_frames = $number_reference_frames ?? 0;
    $this->par_control = $par_control ?? "";
    $this->par_denominator = $par_denominator ?? 0;
    $this->par_numerator = $par_numerator ?? 0;
    $this->quality_tuning_level = $quality_tuning_level ?? "";
    $this->qvbr_settings = $qvbr_settings ?? null;
    $this->rate_control_mode = $rate_control_mode ?? "";
    $this->sample_adaptive_offset_filter_mode = $sample_adaptive_offset_filter_mode ?? "";
    $this->scene_change_detect = $scene_change_detect ?? "";
    $this->slices = $slices ?? 0;
    $this->slow_pal = $slow_pal ?? "";
    $this->spatial_adaptive_quantization = $spatial_adaptive_quantization ?? "";
    $this->telecine = $telecine ?? "";
    $this->temporal_adaptive_quantization = $temporal_adaptive_quantization ?? "";
    $this->temporal_ids = $temporal_ids ?? "";
    $this->tiles = $tiles ?? "";
    $this->unregistered_sei_timecode = $unregistered_sei_timecode ?? "";
    $this->write_mp_4_packaging_type = $write_mp_4_packaging_type ?? "";
  }
}

type H265SlowPal = string;

type H265SpatialAdaptiveQuantization = string;

type H265Telecine = string;

type H265TemporalAdaptiveQuantization = string;

type H265TemporalIds = string;

type H265Tiles = string;

type H265UnregisteredSeiTimecode = string;

type H265WriteMp4PackagingType = string;

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

  public function __construct(shape(
  ?'blue_primary_x' => __integerMin0Max50000,
  ?'blue_primary_y' => __integerMin0Max50000,
  ?'green_primary_x' => __integerMin0Max50000,
  ?'green_primary_y' => __integerMin0Max50000,
  ?'max_content_light_level' => __integerMin0Max65535,
  ?'max_frame_average_light_level' => __integerMin0Max65535,
  ?'max_luminance' => __integerMin0Max2147483647,
  ?'min_luminance' => __integerMin0Max2147483647,
  ?'red_primary_x' => __integerMin0Max50000,
  ?'red_primary_y' => __integerMin0Max50000,
  ?'white_point_x' => __integerMin0Max50000,
  ?'white_point_y' => __integerMin0Max50000,
  ) $s = shape()) {
    $this->blue_primary_x = $blue_primary_x ?? 0;
    $this->blue_primary_y = $blue_primary_y ?? 0;
    $this->green_primary_x = $green_primary_x ?? 0;
    $this->green_primary_y = $green_primary_y ?? 0;
    $this->max_content_light_level = $max_content_light_level ?? 0;
    $this->max_frame_average_light_level = $max_frame_average_light_level ?? 0;
    $this->max_luminance = $max_luminance ?? 0;
    $this->min_luminance = $min_luminance ?? 0;
    $this->red_primary_x = $red_primary_x ?? 0;
    $this->red_primary_y = $red_primary_y ?? 0;
    $this->white_point_x = $white_point_x ?? 0;
    $this->white_point_y = $white_point_y ?? 0;
  }
}

type HlsAdMarkers = string;

class HlsAdditionalManifest {
  public __stringMin1 $manifest_name_modifier;
  public __listOf__stringMin1 $selected_outputs;

  public function __construct(shape(
  ?'manifest_name_modifier' => __stringMin1,
  ?'selected_outputs' => __listOf__stringMin1,
  ) $s = shape()) {
    $this->manifest_name_modifier = $manifest_name_modifier ?? "";
    $this->selected_outputs = $selected_outputs ?? [];
  }
}

type HlsAudioOnlyContainer = string;

type HlsAudioTrackType = string;

class HlsCaptionLanguageMapping {
  public __integerMinNegative2147483648Max2147483647 $caption_channel;
  public __stringMin3Max3PatternAZaZ3 $custom_language_code;
  public LanguageCode $language_code;
  public __string $language_description;

  public function __construct(shape(
  ?'caption_channel' => __integerMinNegative2147483648Max2147483647,
  ?'custom_language_code' => __stringMin3Max3PatternAZaZ3,
  ?'language_code' => LanguageCode,
  ?'language_description' => __string,
  ) $s = shape()) {
    $this->caption_channel = $caption_channel ?? 0;
    $this->custom_language_code = $custom_language_code ?? "";
    $this->language_code = $language_code ?? "";
    $this->language_description = $language_description ?? "";
  }
}

type HlsCaptionLanguageSetting = string;

type HlsClientCache = string;

type HlsCodecSpecification = string;

type HlsDirectoryStructure = string;

class HlsEncryptionSettings {
  public __stringMin32Max32Pattern09aFAF32 $constant_initialization_vector;
  public HlsEncryptionType $encryption_method;
  public HlsInitializationVectorInManifest $initialization_vector_in_manifest;
  public HlsOfflineEncrypted $offline_encrypted;
  public SpekeKeyProvider $speke_key_provider;
  public StaticKeyProvider $static_key_provider;
  public HlsKeyProviderType $type;

  public function __construct(shape(
  ?'constant_initialization_vector' => __stringMin32Max32Pattern09aFAF32,
  ?'encryption_method' => HlsEncryptionType,
  ?'initialization_vector_in_manifest' => HlsInitializationVectorInManifest,
  ?'offline_encrypted' => HlsOfflineEncrypted,
  ?'speke_key_provider' => SpekeKeyProvider,
  ?'static_key_provider' => StaticKeyProvider,
  ?'type' => HlsKeyProviderType,
  ) $s = shape()) {
    $this->constant_initialization_vector = $constant_initialization_vector ?? "";
    $this->encryption_method = $encryption_method ?? "";
    $this->initialization_vector_in_manifest = $initialization_vector_in_manifest ?? "";
    $this->offline_encrypted = $offline_encrypted ?? "";
    $this->speke_key_provider = $speke_key_provider ?? null;
    $this->static_key_provider = $static_key_provider ?? null;
    $this->type = $type ?? "";
  }
}

type HlsEncryptionType = string;

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

  public function __construct(shape(
  ?'ad_markers' => __listOfHlsAdMarkers,
  ?'additional_manifests' => __listOfHlsAdditionalManifest,
  ?'base_url' => __string,
  ?'caption_language_mappings' => __listOfHlsCaptionLanguageMapping,
  ?'caption_language_setting' => HlsCaptionLanguageSetting,
  ?'client_cache' => HlsClientCache,
  ?'codec_specification' => HlsCodecSpecification,
  ?'destination' => __stringPatternS3,
  ?'destination_settings' => DestinationSettings,
  ?'directory_structure' => HlsDirectoryStructure,
  ?'encryption' => HlsEncryptionSettings,
  ?'manifest_compression' => HlsManifestCompression,
  ?'manifest_duration_format' => HlsManifestDurationFormat,
  ?'min_final_segment_length' => __doubleMin0Max2147483647,
  ?'min_segment_length' => __integerMin0Max2147483647,
  ?'output_selection' => HlsOutputSelection,
  ?'program_date_time' => HlsProgramDateTime,
  ?'program_date_time_period' => __integerMin0Max3600,
  ?'segment_control' => HlsSegmentControl,
  ?'segment_length' => __integerMin1Max2147483647,
  ?'segments_per_subdirectory' => __integerMin1Max2147483647,
  ?'stream_inf_resolution' => HlsStreamInfResolution,
  ?'timed_metadata_id_3_frame' => HlsTimedMetadataId3Frame,
  ?'timed_metadata_id_3_period' => __integerMinNegative2147483648Max2147483647,
  ?'timestamp_delta_milliseconds' => __integerMinNegative2147483648Max2147483647,
  ) $s = shape()) {
    $this->ad_markers = $ad_markers ?? [];
    $this->additional_manifests = $additional_manifests ?? [];
    $this->base_url = $base_url ?? "";
    $this->caption_language_mappings = $caption_language_mappings ?? [];
    $this->caption_language_setting = $caption_language_setting ?? "";
    $this->client_cache = $client_cache ?? "";
    $this->codec_specification = $codec_specification ?? "";
    $this->destination = $destination ?? "";
    $this->destination_settings = $destination_settings ?? null;
    $this->directory_structure = $directory_structure ?? "";
    $this->encryption = $encryption ?? null;
    $this->manifest_compression = $manifest_compression ?? "";
    $this->manifest_duration_format = $manifest_duration_format ?? "";
    $this->min_final_segment_length = $min_final_segment_length ?? 0.0;
    $this->min_segment_length = $min_segment_length ?? 0;
    $this->output_selection = $output_selection ?? "";
    $this->program_date_time = $program_date_time ?? "";
    $this->program_date_time_period = $program_date_time_period ?? 0;
    $this->segment_control = $segment_control ?? "";
    $this->segment_length = $segment_length ?? 0;
    $this->segments_per_subdirectory = $segments_per_subdirectory ?? 0;
    $this->stream_inf_resolution = $stream_inf_resolution ?? "";
    $this->timed_metadata_id_3_frame = $timed_metadata_id_3_frame ?? "";
    $this->timed_metadata_id_3_period = $timed_metadata_id_3_period ?? 0;
    $this->timestamp_delta_milliseconds = $timestamp_delta_milliseconds ?? 0;
  }
}

type HlsIFrameOnlyManifest = string;

type HlsInitializationVectorInManifest = string;

type HlsKeyProviderType = string;

type HlsManifestCompression = string;

type HlsManifestDurationFormat = string;

type HlsOfflineEncrypted = string;

type HlsOutputSelection = string;

type HlsProgramDateTime = string;

type HlsSegmentControl = string;

class HlsSettings {
  public __string $audio_group_id;
  public HlsAudioOnlyContainer $audio_only_container;
  public __string $audio_rendition_sets;
  public HlsAudioTrackType $audio_track_type;
  public HlsIFrameOnlyManifest $i_frame_only_manifest;
  public __string $segment_modifier;

  public function __construct(shape(
  ?'audio_group_id' => __string,
  ?'audio_only_container' => HlsAudioOnlyContainer,
  ?'audio_rendition_sets' => __string,
  ?'audio_track_type' => HlsAudioTrackType,
  ?'i_frame_only_manifest' => HlsIFrameOnlyManifest,
  ?'segment_modifier' => __string,
  ) $s = shape()) {
    $this->audio_group_id = $audio_group_id ?? "";
    $this->audio_only_container = $audio_only_container ?? "";
    $this->audio_rendition_sets = $audio_rendition_sets ?? "";
    $this->audio_track_type = $audio_track_type ?? "";
    $this->i_frame_only_manifest = $i_frame_only_manifest ?? "";
    $this->segment_modifier = $segment_modifier ?? "";
  }
}

type HlsStreamInfResolution = string;

type HlsTimedMetadataId3Frame = string;

class HopDestination {
  public __integerMinNegative50Max50 $priority;
  public __string $queue;
  public __integer $wait_minutes;

  public function __construct(shape(
  ?'priority' => __integerMinNegative50Max50,
  ?'queue' => __string,
  ?'wait_minutes' => __integer,
  ) $s = shape()) {
    $this->priority = $priority ?? 0;
    $this->queue = $queue ?? "";
    $this->wait_minutes = $wait_minutes ?? 0;
  }
}

class Id3Insertion {
  public __stringPatternAZaZ0902 $id_3;
  public __stringPattern010920405090509092 $timecode;

  public function __construct(shape(
  ?'id_3' => __stringPatternAZaZ0902,
  ?'timecode' => __stringPattern010920405090509092,
  ) $s = shape()) {
    $this->id_3 = $id_3 ?? "";
    $this->timecode = $timecode ?? "";
  }
}

class ImageInserter {
  public __listOfInsertableImage $insertable_images;

  public function __construct(shape(
  ?'insertable_images' => __listOfInsertableImage,
  ) $s = shape()) {
    $this->insertable_images = $insertable_images ?? [];
  }
}

class ImscDestinationSettings {
  public ImscStylePassthrough $style_passthrough;

  public function __construct(shape(
  ?'style_passthrough' => ImscStylePassthrough,
  ) $s = shape()) {
    $this->style_passthrough = $style_passthrough ?? "";
  }
}

type ImscStylePassthrough = string;

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

  public function __construct(shape(
  ?'audio_selector_groups' => __mapOfAudioSelectorGroup,
  ?'audio_selectors' => __mapOfAudioSelector,
  ?'caption_selectors' => __mapOfCaptionSelector,
  ?'crop' => Rectangle,
  ?'deblock_filter' => InputDeblockFilter,
  ?'decryption_settings' => InputDecryptionSettings,
  ?'denoise_filter' => InputDenoiseFilter,
  ?'file_input' => __stringPatternS3MM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8WWEEBBMMLLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLLHttpsMM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8WWEEBBMMLLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLL,
  ?'filter_enable' => InputFilterEnable,
  ?'filter_strength' => __integerMinNegative5Max5,
  ?'image_inserter' => ImageInserter,
  ?'input_clippings' => __listOfInputClipping,
  ?'position' => Rectangle,
  ?'program_number' => __integerMin1Max2147483647,
  ?'psi_control' => InputPsiControl,
  ?'supplemental_imps' => __listOf__stringPatternS3ASSETMAPXml,
  ?'timecode_source' => InputTimecodeSource,
  ?'timecode_start' => __stringMin11Max11Pattern01D20305D205D,
  ?'video_selector' => VideoSelector,
  ) $s = shape()) {
    $this->audio_selector_groups = $audio_selector_groups ?? [];
    $this->audio_selectors = $audio_selectors ?? [];
    $this->caption_selectors = $caption_selectors ?? [];
    $this->crop = $crop ?? null;
    $this->deblock_filter = $deblock_filter ?? "";
    $this->decryption_settings = $decryption_settings ?? null;
    $this->denoise_filter = $denoise_filter ?? "";
    $this->file_input = $file_input ?? "";
    $this->filter_enable = $filter_enable ?? "";
    $this->filter_strength = $filter_strength ?? 0;
    $this->image_inserter = $image_inserter ?? null;
    $this->input_clippings = $input_clippings ?? [];
    $this->position = $position ?? null;
    $this->program_number = $program_number ?? 0;
    $this->psi_control = $psi_control ?? "";
    $this->supplemental_imps = $supplemental_imps ?? [];
    $this->timecode_source = $timecode_source ?? "";
    $this->timecode_start = $timecode_start ?? "";
    $this->video_selector = $video_selector ?? null;
  }
}

class InputClipping {
  public __stringPattern010920405090509092 $end_timecode;
  public __stringPattern010920405090509092 $start_timecode;

  public function __construct(shape(
  ?'end_timecode' => __stringPattern010920405090509092,
  ?'start_timecode' => __stringPattern010920405090509092,
  ) $s = shape()) {
    $this->end_timecode = $end_timecode ?? "";
    $this->start_timecode = $start_timecode ?? "";
  }
}

type InputDeblockFilter = string;

class InputDecryptionSettings {
  public DecryptionMode $decryption_mode;
  public __stringMin24Max512PatternAZaZ0902 $encrypted_decryption_key;
  public __stringMin16Max24PatternAZaZ0922AZaZ0916 $initialization_vector;
  public __stringMin9Max19PatternAZ26EastWestCentralNorthSouthEastWest1912 $kms_key_region;

  public function __construct(shape(
  ?'decryption_mode' => DecryptionMode,
  ?'encrypted_decryption_key' => __stringMin24Max512PatternAZaZ0902,
  ?'initialization_vector' => __stringMin16Max24PatternAZaZ0922AZaZ0916,
  ?'kms_key_region' => __stringMin9Max19PatternAZ26EastWestCentralNorthSouthEastWest1912,
  ) $s = shape()) {
    $this->decryption_mode = $decryption_mode ?? "";
    $this->encrypted_decryption_key = $encrypted_decryption_key ?? "";
    $this->initialization_vector = $initialization_vector ?? "";
    $this->kms_key_region = $kms_key_region ?? "";
  }
}

type InputDenoiseFilter = string;

type InputFilterEnable = string;

type InputPsiControl = string;

type InputRotate = string;

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

  public function __construct(shape(
  ?'audio_selector_groups' => __mapOfAudioSelectorGroup,
  ?'audio_selectors' => __mapOfAudioSelector,
  ?'caption_selectors' => __mapOfCaptionSelector,
  ?'crop' => Rectangle,
  ?'deblock_filter' => InputDeblockFilter,
  ?'denoise_filter' => InputDenoiseFilter,
  ?'filter_enable' => InputFilterEnable,
  ?'filter_strength' => __integerMinNegative5Max5,
  ?'image_inserter' => ImageInserter,
  ?'input_clippings' => __listOfInputClipping,
  ?'position' => Rectangle,
  ?'program_number' => __integerMin1Max2147483647,
  ?'psi_control' => InputPsiControl,
  ?'timecode_source' => InputTimecodeSource,
  ?'timecode_start' => __stringMin11Max11Pattern01D20305D205D,
  ?'video_selector' => VideoSelector,
  ) $s = shape()) {
    $this->audio_selector_groups = $audio_selector_groups ?? [];
    $this->audio_selectors = $audio_selectors ?? [];
    $this->caption_selectors = $caption_selectors ?? [];
    $this->crop = $crop ?? null;
    $this->deblock_filter = $deblock_filter ?? "";
    $this->denoise_filter = $denoise_filter ?? "";
    $this->filter_enable = $filter_enable ?? "";
    $this->filter_strength = $filter_strength ?? 0;
    $this->image_inserter = $image_inserter ?? null;
    $this->input_clippings = $input_clippings ?? [];
    $this->position = $position ?? null;
    $this->program_number = $program_number ?? 0;
    $this->psi_control = $psi_control ?? "";
    $this->timecode_source = $timecode_source ?? "";
    $this->timecode_start = $timecode_start ?? "";
    $this->video_selector = $video_selector ?? null;
  }
}

type InputTimecodeSource = string;

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

  public function __construct(shape(
  ?'duration' => __integerMin0Max2147483647,
  ?'fade_in' => __integerMin0Max2147483647,
  ?'fade_out' => __integerMin0Max2147483647,
  ?'height' => __integerMin0Max2147483647,
  ?'image_inserter_input' => __stringMin14PatternS3BmpBMPPngPNGTgaTGAHttpsBmpBMPPngPNGTgaTGA,
  ?'image_x' => __integerMin0Max2147483647,
  ?'image_y' => __integerMin0Max2147483647,
  ?'layer' => __integerMin0Max99,
  ?'opacity' => __integerMin0Max100,
  ?'start_time' => __stringPattern01D20305D205D,
  ?'width' => __integerMin0Max2147483647,
  ) $s = shape()) {
    $this->duration = $duration ?? 0;
    $this->fade_in = $fade_in ?? 0;
    $this->fade_out = $fade_out ?? 0;
    $this->height = $height ?? 0;
    $this->image_inserter_input = $image_inserter_input ?? "";
    $this->image_x = $image_x ?? 0;
    $this->image_y = $image_y ?? 0;
    $this->layer = $layer ?? 0;
    $this->opacity = $opacity ?? 0;
    $this->start_time = $start_time ?? "";
    $this->width = $width ?? 0;
  }
}

class InternalServerErrorException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'acceleration_settings' => AccelerationSettings,
  ?'acceleration_status' => AccelerationStatus,
  ?'arn' => __string,
  ?'billing_tags_source' => BillingTagsSource,
  ?'created_at' => __timestampUnix,
  ?'current_phase' => JobPhase,
  ?'error_code' => __integer,
  ?'error_message' => __string,
  ?'hop_destinations' => __listOfHopDestination,
  ?'id' => __string,
  ?'job_percent_complete' => __integer,
  ?'job_template' => __string,
  ?'messages' => JobMessages,
  ?'output_group_details' => __listOfOutputGroupDetail,
  ?'priority' => __integerMinNegative50Max50,
  ?'queue' => __string,
  ?'queue_transitions' => __listOfQueueTransition,
  ?'retry_count' => __integer,
  ?'role' => __string,
  ?'settings' => JobSettings,
  ?'simulate_reserved_queue' => SimulateReservedQueue,
  ?'status' => JobStatus,
  ?'status_update_interval' => StatusUpdateInterval,
  ?'timing' => Timing,
  ?'user_metadata' => __mapOf__string,
  ) $s = shape()) {
    $this->acceleration_settings = $acceleration_settings ?? null;
    $this->acceleration_status = $acceleration_status ?? "";
    $this->arn = $arn ?? "";
    $this->billing_tags_source = $billing_tags_source ?? "";
    $this->created_at = $created_at ?? 0;
    $this->current_phase = $current_phase ?? "";
    $this->error_code = $error_code ?? 0;
    $this->error_message = $error_message ?? "";
    $this->hop_destinations = $hop_destinations ?? [];
    $this->id = $id ?? "";
    $this->job_percent_complete = $job_percent_complete ?? 0;
    $this->job_template = $job_template ?? "";
    $this->messages = $messages ?? null;
    $this->output_group_details = $output_group_details ?? [];
    $this->priority = $priority ?? 0;
    $this->queue = $queue ?? "";
    $this->queue_transitions = $queue_transitions ?? [];
    $this->retry_count = $retry_count ?? 0;
    $this->role = $role ?? "";
    $this->settings = $settings ?? null;
    $this->simulate_reserved_queue = $simulate_reserved_queue ?? "";
    $this->status = $status ?? "";
    $this->status_update_interval = $status_update_interval ?? "";
    $this->timing = $timing ?? null;
    $this->user_metadata = $user_metadata ?? [];
  }
}

class JobMessages {
  public __listOf__string $info;
  public __listOf__string $warning;

  public function __construct(shape(
  ?'info' => __listOf__string,
  ?'warning' => __listOf__string,
  ) $s = shape()) {
    $this->info = $info ?? [];
    $this->warning = $warning ?? [];
  }
}

type JobPhase = string;

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

  public function __construct(shape(
  ?'ad_avail_offset' => __integerMinNegative1000Max1000,
  ?'avail_blanking' => AvailBlanking,
  ?'esam' => EsamSettings,
  ?'inputs' => __listOfInput,
  ?'motion_image_inserter' => MotionImageInserter,
  ?'nielsen_configuration' => NielsenConfiguration,
  ?'output_groups' => __listOfOutputGroup,
  ?'timecode_config' => TimecodeConfig,
  ?'timed_metadata_insertion' => TimedMetadataInsertion,
  ) $s = shape()) {
    $this->ad_avail_offset = $ad_avail_offset ?? 0;
    $this->avail_blanking = $avail_blanking ?? null;
    $this->esam = $esam ?? null;
    $this->inputs = $inputs ?? [];
    $this->motion_image_inserter = $motion_image_inserter ?? null;
    $this->nielsen_configuration = $nielsen_configuration ?? null;
    $this->output_groups = $output_groups ?? [];
    $this->timecode_config = $timecode_config ?? null;
    $this->timed_metadata_insertion = $timed_metadata_insertion ?? null;
  }
}

type JobStatus = string;

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

  public function __construct(shape(
  ?'acceleration_settings' => AccelerationSettings,
  ?'arn' => __string,
  ?'category' => __string,
  ?'created_at' => __timestampUnix,
  ?'description' => __string,
  ?'hop_destinations' => __listOfHopDestination,
  ?'last_updated' => __timestampUnix,
  ?'name' => __string,
  ?'priority' => __integerMinNegative50Max50,
  ?'queue' => __string,
  ?'settings' => JobTemplateSettings,
  ?'status_update_interval' => StatusUpdateInterval,
  ?'type' => Type,
  ) $s = shape()) {
    $this->acceleration_settings = $acceleration_settings ?? null;
    $this->arn = $arn ?? "";
    $this->category = $category ?? "";
    $this->created_at = $created_at ?? 0;
    $this->description = $description ?? "";
    $this->hop_destinations = $hop_destinations ?? [];
    $this->last_updated = $last_updated ?? 0;
    $this->name = $name ?? "";
    $this->priority = $priority ?? 0;
    $this->queue = $queue ?? "";
    $this->settings = $settings ?? null;
    $this->status_update_interval = $status_update_interval ?? "";
    $this->type = $type ?? "";
  }
}

type JobTemplateListBy = string;

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

  public function __construct(shape(
  ?'ad_avail_offset' => __integerMinNegative1000Max1000,
  ?'avail_blanking' => AvailBlanking,
  ?'esam' => EsamSettings,
  ?'inputs' => __listOfInputTemplate,
  ?'motion_image_inserter' => MotionImageInserter,
  ?'nielsen_configuration' => NielsenConfiguration,
  ?'output_groups' => __listOfOutputGroup,
  ?'timecode_config' => TimecodeConfig,
  ?'timed_metadata_insertion' => TimedMetadataInsertion,
  ) $s = shape()) {
    $this->ad_avail_offset = $ad_avail_offset ?? 0;
    $this->avail_blanking = $avail_blanking ?? null;
    $this->esam = $esam ?? null;
    $this->inputs = $inputs ?? [];
    $this->motion_image_inserter = $motion_image_inserter ?? null;
    $this->nielsen_configuration = $nielsen_configuration ?? null;
    $this->output_groups = $output_groups ?? [];
    $this->timecode_config = $timecode_config ?? null;
    $this->timed_metadata_insertion = $timed_metadata_insertion ?? null;
  }
}

type LanguageCode = string;

class ListJobTemplatesRequest {
  public __string $category;
  public JobTemplateListBy $list_by;
  public __integerMin1Max20 $max_results;
  public __string $next_token;
  public Order $order;

  public function __construct(shape(
  ?'category' => __string,
  ?'list_by' => JobTemplateListBy,
  ?'max_results' => __integerMin1Max20,
  ?'next_token' => __string,
  ?'order' => Order,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->list_by = $list_by ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->order = $order ?? "";
  }
}

class ListJobTemplatesResponse {
  public __listOfJobTemplate $job_templates;
  public __string $next_token;

  public function __construct(shape(
  ?'job_templates' => __listOfJobTemplate,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->job_templates = $job_templates ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListJobsRequest {
  public __integerMin1Max20 $max_results;
  public __string $next_token;
  public Order $order;
  public __string $queue;
  public JobStatus $status;

  public function __construct(shape(
  ?'max_results' => __integerMin1Max20,
  ?'next_token' => __string,
  ?'order' => Order,
  ?'queue' => __string,
  ?'status' => JobStatus,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->order = $order ?? "";
    $this->queue = $queue ?? "";
    $this->status = $status ?? "";
  }
}

class ListJobsResponse {
  public __listOfJob $jobs;
  public __string $next_token;

  public function __construct(shape(
  ?'jobs' => __listOfJob,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->jobs = $jobs ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListPresetsRequest {
  public __string $category;
  public PresetListBy $list_by;
  public __integerMin1Max20 $max_results;
  public __string $next_token;
  public Order $order;

  public function __construct(shape(
  ?'category' => __string,
  ?'list_by' => PresetListBy,
  ?'max_results' => __integerMin1Max20,
  ?'next_token' => __string,
  ?'order' => Order,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->list_by = $list_by ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->order = $order ?? "";
  }
}

class ListPresetsResponse {
  public __string $next_token;
  public __listOfPreset $presets;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'presets' => __listOfPreset,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->presets = $presets ?? [];
  }
}

class ListQueuesRequest {
  public QueueListBy $list_by;
  public __integerMin1Max20 $max_results;
  public __string $next_token;
  public Order $order;

  public function __construct(shape(
  ?'list_by' => QueueListBy,
  ?'max_results' => __integerMin1Max20,
  ?'next_token' => __string,
  ?'order' => Order,
  ) $s = shape()) {
    $this->list_by = $list_by ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->order = $order ?? "";
  }
}

class ListQueuesResponse {
  public __string $next_token;
  public __listOfQueue $queues;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'queues' => __listOfQueue,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->queues = $queues ?? [];
  }
}

class ListTagsForResourceRequest {
  public __string $arn;

  public function __construct(shape(
  ?'arn' => __string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public ResourceTags $resource_tags;

  public function __construct(shape(
  ?'resource_tags' => ResourceTags,
  ) $s = shape()) {
    $this->resource_tags = $resource_tags ?? null;
  }
}

type M2tsAudioBufferModel = string;

type M2tsBufferModel = string;

type M2tsEbpAudioInterval = string;

type M2tsEbpPlacement = string;

type M2tsEsRateInPes = string;

type M2tsForceTsVideoEbpOrder = string;

type M2tsNielsenId3 = string;

type M2tsPcrControl = string;

type M2tsRateMode = string;

class M2tsScte35Esam {
  public __integerMin32Max8182 $scte_35_esam_pid;

  public function __construct(shape(
  ?'scte_35_esam_pid' => __integerMin32Max8182,
  ) $s = shape()) {
    $this->scte_35_esam_pid = $scte_35_esam_pid ?? 0;
  }
}

type M2tsScte35Source = string;

type M2tsSegmentationMarkers = string;

type M2tsSegmentationStyle = string;

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

  public function __construct(shape(
  ?'audio_buffer_model' => M2tsAudioBufferModel,
  ?'audio_frames_per_pes' => __integerMin0Max2147483647,
  ?'audio_pids' => __listOf__integerMin32Max8182,
  ?'bitrate' => __integerMin0Max2147483647,
  ?'buffer_model' => M2tsBufferModel,
  ?'dvb_nit_settings' => DvbNitSettings,
  ?'dvb_sdt_settings' => DvbSdtSettings,
  ?'dvb_sub_pids' => __listOf__integerMin32Max8182,
  ?'dvb_tdt_settings' => DvbTdtSettings,
  ?'dvb_teletext_pid' => __integerMin32Max8182,
  ?'ebp_audio_interval' => M2tsEbpAudioInterval,
  ?'ebp_placement' => M2tsEbpPlacement,
  ?'es_rate_in_pes' => M2tsEsRateInPes,
  ?'force_ts_video_ebp_order' => M2tsForceTsVideoEbpOrder,
  ?'fragment_time' => __doubleMin0,
  ?'max_pcr_interval' => __integerMin0Max500,
  ?'min_ebp_interval' => __integerMin0Max10000,
  ?'nielsen_id_3' => M2tsNielsenId3,
  ?'null_packet_bitrate' => __doubleMin0,
  ?'pat_interval' => __integerMin0Max1000,
  ?'pcr_control' => M2tsPcrControl,
  ?'pcr_pid' => __integerMin32Max8182,
  ?'pmt_interval' => __integerMin0Max1000,
  ?'pmt_pid' => __integerMin32Max8182,
  ?'private_metadata_pid' => __integerMin32Max8182,
  ?'program_number' => __integerMin0Max65535,
  ?'rate_mode' => M2tsRateMode,
  ?'scte_35_esam' => M2tsScte35Esam,
  ?'scte_35_pid' => __integerMin32Max8182,
  ?'scte_35_source' => M2tsScte35Source,
  ?'segmentation_markers' => M2tsSegmentationMarkers,
  ?'segmentation_style' => M2tsSegmentationStyle,
  ?'segmentation_time' => __doubleMin0,
  ?'timed_metadata_pid' => __integerMin32Max8182,
  ?'transport_stream_id' => __integerMin0Max65535,
  ?'video_pid' => __integerMin32Max8182,
  ) $s = shape()) {
    $this->audio_buffer_model = $audio_buffer_model ?? "";
    $this->audio_frames_per_pes = $audio_frames_per_pes ?? 0;
    $this->audio_pids = $audio_pids ?? [];
    $this->bitrate = $bitrate ?? 0;
    $this->buffer_model = $buffer_model ?? "";
    $this->dvb_nit_settings = $dvb_nit_settings ?? null;
    $this->dvb_sdt_settings = $dvb_sdt_settings ?? null;
    $this->dvb_sub_pids = $dvb_sub_pids ?? [];
    $this->dvb_tdt_settings = $dvb_tdt_settings ?? null;
    $this->dvb_teletext_pid = $dvb_teletext_pid ?? 0;
    $this->ebp_audio_interval = $ebp_audio_interval ?? "";
    $this->ebp_placement = $ebp_placement ?? "";
    $this->es_rate_in_pes = $es_rate_in_pes ?? "";
    $this->force_ts_video_ebp_order = $force_ts_video_ebp_order ?? "";
    $this->fragment_time = $fragment_time ?? 0.0;
    $this->max_pcr_interval = $max_pcr_interval ?? 0;
    $this->min_ebp_interval = $min_ebp_interval ?? 0;
    $this->nielsen_id_3 = $nielsen_id_3 ?? "";
    $this->null_packet_bitrate = $null_packet_bitrate ?? 0.0;
    $this->pat_interval = $pat_interval ?? 0;
    $this->pcr_control = $pcr_control ?? "";
    $this->pcr_pid = $pcr_pid ?? 0;
    $this->pmt_interval = $pmt_interval ?? 0;
    $this->pmt_pid = $pmt_pid ?? 0;
    $this->private_metadata_pid = $private_metadata_pid ?? 0;
    $this->program_number = $program_number ?? 0;
    $this->rate_mode = $rate_mode ?? "";
    $this->scte_35_esam = $scte_35_esam ?? null;
    $this->scte_35_pid = $scte_35_pid ?? 0;
    $this->scte_35_source = $scte_35_source ?? "";
    $this->segmentation_markers = $segmentation_markers ?? "";
    $this->segmentation_style = $segmentation_style ?? "";
    $this->segmentation_time = $segmentation_time ?? 0.0;
    $this->timed_metadata_pid = $timed_metadata_pid ?? 0;
    $this->transport_stream_id = $transport_stream_id ?? 0;
    $this->video_pid = $video_pid ?? 0;
  }
}

type M3u8NielsenId3 = string;

type M3u8PcrControl = string;

type M3u8Scte35Source = string;

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

  public function __construct(shape(
  ?'audio_frames_per_pes' => __integerMin0Max2147483647,
  ?'audio_pids' => __listOf__integerMin32Max8182,
  ?'nielsen_id_3' => M3u8NielsenId3,
  ?'pat_interval' => __integerMin0Max1000,
  ?'pcr_control' => M3u8PcrControl,
  ?'pcr_pid' => __integerMin32Max8182,
  ?'pmt_interval' => __integerMin0Max1000,
  ?'pmt_pid' => __integerMin32Max8182,
  ?'private_metadata_pid' => __integerMin32Max8182,
  ?'program_number' => __integerMin0Max65535,
  ?'scte_35_pid' => __integerMin32Max8182,
  ?'scte_35_source' => M3u8Scte35Source,
  ?'timed_metadata' => TimedMetadata,
  ?'timed_metadata_pid' => __integerMin32Max8182,
  ?'transport_stream_id' => __integerMin0Max65535,
  ?'video_pid' => __integerMin32Max8182,
  ) $s = shape()) {
    $this->audio_frames_per_pes = $audio_frames_per_pes ?? 0;
    $this->audio_pids = $audio_pids ?? [];
    $this->nielsen_id_3 = $nielsen_id_3 ?? "";
    $this->pat_interval = $pat_interval ?? 0;
    $this->pcr_control = $pcr_control ?? "";
    $this->pcr_pid = $pcr_pid ?? 0;
    $this->pmt_interval = $pmt_interval ?? 0;
    $this->pmt_pid = $pmt_pid ?? 0;
    $this->private_metadata_pid = $private_metadata_pid ?? 0;
    $this->program_number = $program_number ?? 0;
    $this->scte_35_pid = $scte_35_pid ?? 0;
    $this->scte_35_source = $scte_35_source ?? "";
    $this->timed_metadata = $timed_metadata ?? "";
    $this->timed_metadata_pid = $timed_metadata_pid ?? 0;
    $this->transport_stream_id = $transport_stream_id ?? 0;
    $this->video_pid = $video_pid ?? 0;
  }
}

class MotionImageInserter {
  public MotionImageInsertionFramerate $framerate;
  public __stringMin14Max1285PatternS3Mov09PngHttpsMov09Png $input;
  public MotionImageInsertionMode $insertion_mode;
  public MotionImageInsertionOffset $offset;
  public MotionImagePlayback $playback;
  public __stringMin11Max11Pattern01D20305D205D $start_time;

  public function __construct(shape(
  ?'framerate' => MotionImageInsertionFramerate,
  ?'input' => __stringMin14Max1285PatternS3Mov09PngHttpsMov09Png,
  ?'insertion_mode' => MotionImageInsertionMode,
  ?'offset' => MotionImageInsertionOffset,
  ?'playback' => MotionImagePlayback,
  ?'start_time' => __stringMin11Max11Pattern01D20305D205D,
  ) $s = shape()) {
    $this->framerate = $framerate ?? null;
    $this->input = $input ?? "";
    $this->insertion_mode = $insertion_mode ?? "";
    $this->offset = $offset ?? null;
    $this->playback = $playback ?? "";
    $this->start_time = $start_time ?? "";
  }
}

class MotionImageInsertionFramerate {
  public __integerMin1Max17895697 $framerate_denominator;
  public __integerMin1Max2147483640 $framerate_numerator;

  public function __construct(shape(
  ?'framerate_denominator' => __integerMin1Max17895697,
  ?'framerate_numerator' => __integerMin1Max2147483640,
  ) $s = shape()) {
    $this->framerate_denominator = $framerate_denominator ?? 0;
    $this->framerate_numerator = $framerate_numerator ?? 0;
  }
}

type MotionImageInsertionMode = string;

class MotionImageInsertionOffset {
  public __integerMin0Max2147483647 $image_x;
  public __integerMin0Max2147483647 $image_y;

  public function __construct(shape(
  ?'image_x' => __integerMin0Max2147483647,
  ?'image_y' => __integerMin0Max2147483647,
  ) $s = shape()) {
    $this->image_x = $image_x ?? 0;
    $this->image_y = $image_y ?? 0;
  }
}

type MotionImagePlayback = string;

type MovClapAtom = string;

type MovCslgAtom = string;

type MovMpeg2FourCCControl = string;

type MovPaddingControl = string;

type MovReference = string;

class MovSettings {
  public MovClapAtom $clap_atom;
  public MovCslgAtom $cslg_atom;
  public MovMpeg2FourCCControl $mpeg_2_four_cc_control;
  public MovPaddingControl $padding_control;
  public MovReference $reference;

  public function __construct(shape(
  ?'clap_atom' => MovClapAtom,
  ?'cslg_atom' => MovCslgAtom,
  ?'mpeg_2_four_cc_control' => MovMpeg2FourCCControl,
  ?'padding_control' => MovPaddingControl,
  ?'reference' => MovReference,
  ) $s = shape()) {
    $this->clap_atom = $clap_atom ?? "";
    $this->cslg_atom = $cslg_atom ?? "";
    $this->mpeg_2_four_cc_control = $mpeg_2_four_cc_control ?? "";
    $this->padding_control = $padding_control ?? "";
    $this->reference = $reference ?? "";
  }
}

class Mp2Settings {
  public __integerMin32000Max384000 $bitrate;
  public __integerMin1Max2 $channels;
  public __integerMin32000Max48000 $sample_rate;

  public function __construct(shape(
  ?'bitrate' => __integerMin32000Max384000,
  ?'channels' => __integerMin1Max2,
  ?'sample_rate' => __integerMin32000Max48000,
  ) $s = shape()) {
    $this->bitrate = $bitrate ?? 0;
    $this->channels = $channels ?? 0;
    $this->sample_rate = $sample_rate ?? 0;
  }
}

type Mp3RateControlMode = string;

class Mp3Settings {
  public __integerMin16000Max320000 $bitrate;
  public __integerMin1Max2 $channels;
  public Mp3RateControlMode $rate_control_mode;
  public __integerMin22050Max48000 $sample_rate;
  public __integerMin0Max9 $vbr_quality;

  public function __construct(shape(
  ?'bitrate' => __integerMin16000Max320000,
  ?'channels' => __integerMin1Max2,
  ?'rate_control_mode' => Mp3RateControlMode,
  ?'sample_rate' => __integerMin22050Max48000,
  ?'vbr_quality' => __integerMin0Max9,
  ) $s = shape()) {
    $this->bitrate = $bitrate ?? 0;
    $this->channels = $channels ?? 0;
    $this->rate_control_mode = $rate_control_mode ?? "";
    $this->sample_rate = $sample_rate ?? 0;
    $this->vbr_quality = $vbr_quality ?? 0;
  }
}

type Mp4CslgAtom = string;

type Mp4FreeSpaceBox = string;

type Mp4MoovPlacement = string;

class Mp4Settings {
  public Mp4CslgAtom $cslg_atom;
  public __integerMin0Max1 $ctts_version;
  public Mp4FreeSpaceBox $free_space_box;
  public Mp4MoovPlacement $moov_placement;
  public __string $mp_4_major_brand;

  public function __construct(shape(
  ?'cslg_atom' => Mp4CslgAtom,
  ?'ctts_version' => __integerMin0Max1,
  ?'free_space_box' => Mp4FreeSpaceBox,
  ?'moov_placement' => Mp4MoovPlacement,
  ?'mp_4_major_brand' => __string,
  ) $s = shape()) {
    $this->cslg_atom = $cslg_atom ?? "";
    $this->ctts_version = $ctts_version ?? 0;
    $this->free_space_box = $free_space_box ?? "";
    $this->moov_placement = $moov_placement ?? "";
    $this->mp_4_major_brand = $mp_4_major_brand ?? "";
  }
}

type MpdCaptionContainerType = string;

type MpdScte35Esam = string;

type MpdScte35Source = string;

class MpdSettings {
  public MpdCaptionContainerType $caption_container_type;
  public MpdScte35Esam $scte_35_esam;
  public MpdScte35Source $scte_35_source;

  public function __construct(shape(
  ?'caption_container_type' => MpdCaptionContainerType,
  ?'scte_35_esam' => MpdScte35Esam,
  ?'scte_35_source' => MpdScte35Source,
  ) $s = shape()) {
    $this->caption_container_type = $caption_container_type ?? "";
    $this->scte_35_esam = $scte_35_esam ?? "";
    $this->scte_35_source = $scte_35_source ?? "";
  }
}

type Mpeg2AdaptiveQuantization = string;

type Mpeg2CodecLevel = string;

type Mpeg2CodecProfile = string;

type Mpeg2DynamicSubGop = string;

type Mpeg2FramerateControl = string;

type Mpeg2FramerateConversionAlgorithm = string;

type Mpeg2GopSizeUnits = string;

type Mpeg2InterlaceMode = string;

type Mpeg2IntraDcPrecision = string;

type Mpeg2ParControl = string;

type Mpeg2QualityTuningLevel = string;

type Mpeg2RateControlMode = string;

type Mpeg2SceneChangeDetect = string;

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

  public function __construct(shape(
  ?'adaptive_quantization' => Mpeg2AdaptiveQuantization,
  ?'bitrate' => __integerMin1000Max288000000,
  ?'codec_level' => Mpeg2CodecLevel,
  ?'codec_profile' => Mpeg2CodecProfile,
  ?'dynamic_sub_gop' => Mpeg2DynamicSubGop,
  ?'framerate_control' => Mpeg2FramerateControl,
  ?'framerate_conversion_algorithm' => Mpeg2FramerateConversionAlgorithm,
  ?'framerate_denominator' => __integerMin1Max1001,
  ?'framerate_numerator' => __integerMin24Max60000,
  ?'gop_closed_cadence' => __integerMin0Max2147483647,
  ?'gop_size' => __doubleMin0,
  ?'gop_size_units' => Mpeg2GopSizeUnits,
  ?'hrd_buffer_initial_fill_percentage' => __integerMin0Max100,
  ?'hrd_buffer_size' => __integerMin0Max47185920,
  ?'interlace_mode' => Mpeg2InterlaceMode,
  ?'intra_dc_precision' => Mpeg2IntraDcPrecision,
  ?'max_bitrate' => __integerMin1000Max300000000,
  ?'min_i_interval' => __integerMin0Max30,
  ?'number_b_frames_between_reference_frames' => __integerMin0Max7,
  ?'par_control' => Mpeg2ParControl,
  ?'par_denominator' => __integerMin1Max2147483647,
  ?'par_numerator' => __integerMin1Max2147483647,
  ?'quality_tuning_level' => Mpeg2QualityTuningLevel,
  ?'rate_control_mode' => Mpeg2RateControlMode,
  ?'scene_change_detect' => Mpeg2SceneChangeDetect,
  ?'slow_pal' => Mpeg2SlowPal,
  ?'softness' => __integerMin0Max128,
  ?'spatial_adaptive_quantization' => Mpeg2SpatialAdaptiveQuantization,
  ?'syntax' => Mpeg2Syntax,
  ?'telecine' => Mpeg2Telecine,
  ?'temporal_adaptive_quantization' => Mpeg2TemporalAdaptiveQuantization,
  ) $s = shape()) {
    $this->adaptive_quantization = $adaptive_quantization ?? "";
    $this->bitrate = $bitrate ?? 0;
    $this->codec_level = $codec_level ?? "";
    $this->codec_profile = $codec_profile ?? "";
    $this->dynamic_sub_gop = $dynamic_sub_gop ?? "";
    $this->framerate_control = $framerate_control ?? "";
    $this->framerate_conversion_algorithm = $framerate_conversion_algorithm ?? "";
    $this->framerate_denominator = $framerate_denominator ?? 0;
    $this->framerate_numerator = $framerate_numerator ?? 0;
    $this->gop_closed_cadence = $gop_closed_cadence ?? 0;
    $this->gop_size = $gop_size ?? 0.0;
    $this->gop_size_units = $gop_size_units ?? "";
    $this->hrd_buffer_initial_fill_percentage = $hrd_buffer_initial_fill_percentage ?? 0;
    $this->hrd_buffer_size = $hrd_buffer_size ?? 0;
    $this->interlace_mode = $interlace_mode ?? "";
    $this->intra_dc_precision = $intra_dc_precision ?? "";
    $this->max_bitrate = $max_bitrate ?? 0;
    $this->min_i_interval = $min_i_interval ?? 0;
    $this->number_b_frames_between_reference_frames = $number_b_frames_between_reference_frames ?? 0;
    $this->par_control = $par_control ?? "";
    $this->par_denominator = $par_denominator ?? 0;
    $this->par_numerator = $par_numerator ?? 0;
    $this->quality_tuning_level = $quality_tuning_level ?? "";
    $this->rate_control_mode = $rate_control_mode ?? "";
    $this->scene_change_detect = $scene_change_detect ?? "";
    $this->slow_pal = $slow_pal ?? "";
    $this->softness = $softness ?? 0;
    $this->spatial_adaptive_quantization = $spatial_adaptive_quantization ?? "";
    $this->syntax = $syntax ?? "";
    $this->telecine = $telecine ?? "";
    $this->temporal_adaptive_quantization = $temporal_adaptive_quantization ?? "";
  }
}

type Mpeg2SlowPal = string;

type Mpeg2SpatialAdaptiveQuantization = string;

type Mpeg2Syntax = string;

type Mpeg2Telecine = string;

type Mpeg2TemporalAdaptiveQuantization = string;

class MsSmoothAdditionalManifest {
  public __stringMin1 $manifest_name_modifier;
  public __listOf__stringMin1 $selected_outputs;

  public function __construct(shape(
  ?'manifest_name_modifier' => __stringMin1,
  ?'selected_outputs' => __listOf__stringMin1,
  ) $s = shape()) {
    $this->manifest_name_modifier = $manifest_name_modifier ?? "";
    $this->selected_outputs = $selected_outputs ?? [];
  }
}

type MsSmoothAudioDeduplication = string;

class MsSmoothEncryptionSettings {
  public SpekeKeyProvider $speke_key_provider;

  public function __construct(shape(
  ?'speke_key_provider' => SpekeKeyProvider,
  ) $s = shape()) {
    $this->speke_key_provider = $speke_key_provider ?? null;
  }
}

class MsSmoothGroupSettings {
  public __listOfMsSmoothAdditionalManifest $additional_manifests;
  public MsSmoothAudioDeduplication $audio_deduplication;
  public __stringPatternS3 $destination;
  public DestinationSettings $destination_settings;
  public MsSmoothEncryptionSettings $encryption;
  public __integerMin1Max2147483647 $fragment_length;
  public MsSmoothManifestEncoding $manifest_encoding;

  public function __construct(shape(
  ?'additional_manifests' => __listOfMsSmoothAdditionalManifest,
  ?'audio_deduplication' => MsSmoothAudioDeduplication,
  ?'destination' => __stringPatternS3,
  ?'destination_settings' => DestinationSettings,
  ?'encryption' => MsSmoothEncryptionSettings,
  ?'fragment_length' => __integerMin1Max2147483647,
  ?'manifest_encoding' => MsSmoothManifestEncoding,
  ) $s = shape()) {
    $this->additional_manifests = $additional_manifests ?? [];
    $this->audio_deduplication = $audio_deduplication ?? "";
    $this->destination = $destination ?? "";
    $this->destination_settings = $destination_settings ?? null;
    $this->encryption = $encryption ?? null;
    $this->fragment_length = $fragment_length ?? 0;
    $this->manifest_encoding = $manifest_encoding ?? "";
  }
}

type MsSmoothManifestEncoding = string;

class NielsenConfiguration {
  public __integerMin0Max0 $breakout_code;
  public __string $distributor_id;

  public function __construct(shape(
  ?'breakout_code' => __integerMin0Max0,
  ?'distributor_id' => __string,
  ) $s = shape()) {
    $this->breakout_code = $breakout_code ?? 0;
    $this->distributor_id = $distributor_id ?? "";
  }
}

class NoiseReducer {
  public NoiseReducerFilter $filter;
  public NoiseReducerFilterSettings $filter_settings;
  public NoiseReducerSpatialFilterSettings $spatial_filter_settings;
  public NoiseReducerTemporalFilterSettings $temporal_filter_settings;

  public function __construct(shape(
  ?'filter' => NoiseReducerFilter,
  ?'filter_settings' => NoiseReducerFilterSettings,
  ?'spatial_filter_settings' => NoiseReducerSpatialFilterSettings,
  ?'temporal_filter_settings' => NoiseReducerTemporalFilterSettings,
  ) $s = shape()) {
    $this->filter = $filter ?? "";
    $this->filter_settings = $filter_settings ?? null;
    $this->spatial_filter_settings = $spatial_filter_settings ?? null;
    $this->temporal_filter_settings = $temporal_filter_settings ?? null;
  }
}

type NoiseReducerFilter = string;

class NoiseReducerFilterSettings {
  public __integerMin0Max3 $strength;

  public function __construct(shape(
  ?'strength' => __integerMin0Max3,
  ) $s = shape()) {
    $this->strength = $strength ?? 0;
  }
}

class NoiseReducerSpatialFilterSettings {
  public __integerMin0Max3 $post_filter_sharpen_strength;
  public __integerMinNegative2Max3 $speed;
  public __integerMin0Max16 $strength;

  public function __construct(shape(
  ?'post_filter_sharpen_strength' => __integerMin0Max3,
  ?'speed' => __integerMinNegative2Max3,
  ?'strength' => __integerMin0Max16,
  ) $s = shape()) {
    $this->post_filter_sharpen_strength = $post_filter_sharpen_strength ?? 0;
    $this->speed = $speed ?? 0;
    $this->strength = $strength ?? 0;
  }
}

class NoiseReducerTemporalFilterSettings {
  public __integerMin0Max4 $aggressive_mode;
  public __integerMinNegative1Max3 $speed;
  public __integerMin0Max16 $strength;

  public function __construct(shape(
  ?'aggressive_mode' => __integerMin0Max4,
  ?'speed' => __integerMinNegative1Max3,
  ?'strength' => __integerMin0Max16,
  ) $s = shape()) {
    $this->aggressive_mode = $aggressive_mode ?? 0;
    $this->speed = $speed ?? 0;
    $this->strength = $strength ?? 0;
  }
}

class NotFoundException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Order = string;

class Output {
  public __listOfAudioDescription $audio_descriptions;
  public __listOfCaptionDescription $caption_descriptions;
  public ContainerSettings $container_settings;
  public __string $extension;
  public __stringMin1 $name_modifier;
  public OutputSettings $output_settings;
  public __stringMin0 $preset;
  public VideoDescription $video_description;

  public function __construct(shape(
  ?'audio_descriptions' => __listOfAudioDescription,
  ?'caption_descriptions' => __listOfCaptionDescription,
  ?'container_settings' => ContainerSettings,
  ?'extension' => __string,
  ?'name_modifier' => __stringMin1,
  ?'output_settings' => OutputSettings,
  ?'preset' => __stringMin0,
  ?'video_description' => VideoDescription,
  ) $s = shape()) {
    $this->audio_descriptions = $audio_descriptions ?? [];
    $this->caption_descriptions = $caption_descriptions ?? [];
    $this->container_settings = $container_settings ?? null;
    $this->extension = $extension ?? "";
    $this->name_modifier = $name_modifier ?? "";
    $this->output_settings = $output_settings ?? null;
    $this->preset = $preset ?? "";
    $this->video_description = $video_description ?? null;
  }
}

class OutputChannelMapping {
  public __listOf__integerMinNegative60Max6 $input_channels;

  public function __construct(shape(
  ?'input_channels' => __listOf__integerMinNegative60Max6,
  ) $s = shape()) {
    $this->input_channels = $input_channels ?? [];
  }
}

class OutputDetail {
  public __integer $duration_in_ms;
  public VideoDetail $video_details;

  public function __construct(shape(
  ?'duration_in_ms' => __integer,
  ?'video_details' => VideoDetail,
  ) $s = shape()) {
    $this->duration_in_ms = $duration_in_ms ?? 0;
    $this->video_details = $video_details ?? null;
  }
}

class OutputGroup {
  public __string $custom_name;
  public __string $name;
  public OutputGroupSettings $output_group_settings;
  public __listOfOutput $outputs;

  public function __construct(shape(
  ?'custom_name' => __string,
  ?'name' => __string,
  ?'output_group_settings' => OutputGroupSettings,
  ?'outputs' => __listOfOutput,
  ) $s = shape()) {
    $this->custom_name = $custom_name ?? "";
    $this->name = $name ?? "";
    $this->output_group_settings = $output_group_settings ?? null;
    $this->outputs = $outputs ?? [];
  }
}

class OutputGroupDetail {
  public __listOfOutputDetail $output_details;

  public function __construct(shape(
  ?'output_details' => __listOfOutputDetail,
  ) $s = shape()) {
    $this->output_details = $output_details ?? [];
  }
}

class OutputGroupSettings {
  public CmafGroupSettings $cmaf_group_settings;
  public DashIsoGroupSettings $dash_iso_group_settings;
  public FileGroupSettings $file_group_settings;
  public HlsGroupSettings $hls_group_settings;
  public MsSmoothGroupSettings $ms_smooth_group_settings;
  public OutputGroupType $type;

  public function __construct(shape(
  ?'cmaf_group_settings' => CmafGroupSettings,
  ?'dash_iso_group_settings' => DashIsoGroupSettings,
  ?'file_group_settings' => FileGroupSettings,
  ?'hls_group_settings' => HlsGroupSettings,
  ?'ms_smooth_group_settings' => MsSmoothGroupSettings,
  ?'type' => OutputGroupType,
  ) $s = shape()) {
    $this->cmaf_group_settings = $cmaf_group_settings ?? null;
    $this->dash_iso_group_settings = $dash_iso_group_settings ?? null;
    $this->file_group_settings = $file_group_settings ?? null;
    $this->hls_group_settings = $hls_group_settings ?? null;
    $this->ms_smooth_group_settings = $ms_smooth_group_settings ?? null;
    $this->type = $type ?? "";
  }
}

type OutputGroupType = string;

type OutputSdt = string;

class OutputSettings {
  public HlsSettings $hls_settings;

  public function __construct(shape(
  ?'hls_settings' => HlsSettings,
  ) $s = shape()) {
    $this->hls_settings = $hls_settings ?? null;
  }
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

  public function __construct(shape(
  ?'arn' => __string,
  ?'category' => __string,
  ?'created_at' => __timestampUnix,
  ?'description' => __string,
  ?'last_updated' => __timestampUnix,
  ?'name' => __string,
  ?'settings' => PresetSettings,
  ?'type' => Type,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->category = $category ?? "";
    $this->created_at = $created_at ?? 0;
    $this->description = $description ?? "";
    $this->last_updated = $last_updated ?? 0;
    $this->name = $name ?? "";
    $this->settings = $settings ?? null;
    $this->type = $type ?? "";
  }
}

type PresetListBy = string;

class PresetSettings {
  public __listOfAudioDescription $audio_descriptions;
  public __listOfCaptionDescriptionPreset $caption_descriptions;
  public ContainerSettings $container_settings;
  public VideoDescription $video_description;

  public function __construct(shape(
  ?'audio_descriptions' => __listOfAudioDescription,
  ?'caption_descriptions' => __listOfCaptionDescriptionPreset,
  ?'container_settings' => ContainerSettings,
  ?'video_description' => VideoDescription,
  ) $s = shape()) {
    $this->audio_descriptions = $audio_descriptions ?? [];
    $this->caption_descriptions = $caption_descriptions ?? [];
    $this->container_settings = $container_settings ?? null;
    $this->video_description = $video_description ?? null;
  }
}

type PricingPlan = string;

type ProresCodecProfile = string;

type ProresFramerateControl = string;

type ProresFramerateConversionAlgorithm = string;

type ProresInterlaceMode = string;

type ProresParControl = string;

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

  public function __construct(shape(
  ?'codec_profile' => ProresCodecProfile,
  ?'framerate_control' => ProresFramerateControl,
  ?'framerate_conversion_algorithm' => ProresFramerateConversionAlgorithm,
  ?'framerate_denominator' => __integerMin1Max2147483647,
  ?'framerate_numerator' => __integerMin1Max2147483647,
  ?'interlace_mode' => ProresInterlaceMode,
  ?'par_control' => ProresParControl,
  ?'par_denominator' => __integerMin1Max2147483647,
  ?'par_numerator' => __integerMin1Max2147483647,
  ?'slow_pal' => ProresSlowPal,
  ?'telecine' => ProresTelecine,
  ) $s = shape()) {
    $this->codec_profile = $codec_profile ?? "";
    $this->framerate_control = $framerate_control ?? "";
    $this->framerate_conversion_algorithm = $framerate_conversion_algorithm ?? "";
    $this->framerate_denominator = $framerate_denominator ?? 0;
    $this->framerate_numerator = $framerate_numerator ?? 0;
    $this->interlace_mode = $interlace_mode ?? "";
    $this->par_control = $par_control ?? "";
    $this->par_denominator = $par_denominator ?? 0;
    $this->par_numerator = $par_numerator ?? 0;
    $this->slow_pal = $slow_pal ?? "";
    $this->telecine = $telecine ?? "";
  }
}

type ProresSlowPal = string;

type ProresTelecine = string;

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

  public function __construct(shape(
  ?'arn' => __string,
  ?'created_at' => __timestampUnix,
  ?'description' => __string,
  ?'last_updated' => __timestampUnix,
  ?'name' => __string,
  ?'pricing_plan' => PricingPlan,
  ?'progressing_jobs_count' => __integer,
  ?'reservation_plan' => ReservationPlan,
  ?'status' => QueueStatus,
  ?'submitted_jobs_count' => __integer,
  ?'type' => Type,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_at = $created_at ?? 0;
    $this->description = $description ?? "";
    $this->last_updated = $last_updated ?? 0;
    $this->name = $name ?? "";
    $this->pricing_plan = $pricing_plan ?? "";
    $this->progressing_jobs_count = $progressing_jobs_count ?? 0;
    $this->reservation_plan = $reservation_plan ?? null;
    $this->status = $status ?? "";
    $this->submitted_jobs_count = $submitted_jobs_count ?? 0;
    $this->type = $type ?? "";
  }
}

type QueueListBy = string;

type QueueStatus = string;

class QueueTransition {
  public __string $destination_queue;
  public __string $source_queue;
  public __timestampUnix $timestamp;

  public function __construct(shape(
  ?'destination_queue' => __string,
  ?'source_queue' => __string,
  ?'timestamp' => __timestampUnix,
  ) $s = shape()) {
    $this->destination_queue = $destination_queue ?? "";
    $this->source_queue = $source_queue ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

class Rectangle {
  public __integerMin2Max2147483647 $height;
  public __integerMin2Max2147483647 $width;
  public __integerMin0Max2147483647 $x;
  public __integerMin0Max2147483647 $y;

  public function __construct(shape(
  ?'height' => __integerMin2Max2147483647,
  ?'width' => __integerMin2Max2147483647,
  ?'x' => __integerMin0Max2147483647,
  ?'y' => __integerMin0Max2147483647,
  ) $s = shape()) {
    $this->height = $height ?? 0;
    $this->width = $width ?? 0;
    $this->x = $x ?? 0;
    $this->y = $y ?? 0;
  }
}

class RemixSettings {
  public ChannelMapping $channel_mapping;
  public __integerMin1Max64 $channels_in;
  public __integerMin1Max64 $channels_out;

  public function __construct(shape(
  ?'channel_mapping' => ChannelMapping,
  ?'channels_in' => __integerMin1Max64,
  ?'channels_out' => __integerMin1Max64,
  ) $s = shape()) {
    $this->channel_mapping = $channel_mapping ?? null;
    $this->channels_in = $channels_in ?? 0;
    $this->channels_out = $channels_out ?? 0;
  }
}

type RenewalType = string;

class ReservationPlan {
  public Commitment $commitment;
  public __timestampUnix $expires_at;
  public __timestampUnix $purchased_at;
  public RenewalType $renewal_type;
  public __integer $reserved_slots;
  public ReservationPlanStatus $status;

  public function __construct(shape(
  ?'commitment' => Commitment,
  ?'expires_at' => __timestampUnix,
  ?'purchased_at' => __timestampUnix,
  ?'renewal_type' => RenewalType,
  ?'reserved_slots' => __integer,
  ?'status' => ReservationPlanStatus,
  ) $s = shape()) {
    $this->commitment = $commitment ?? "";
    $this->expires_at = $expires_at ?? 0;
    $this->purchased_at = $purchased_at ?? 0;
    $this->renewal_type = $renewal_type ?? "";
    $this->reserved_slots = $reserved_slots ?? 0;
    $this->status = $status ?? "";
  }
}

class ReservationPlanSettings {
  public Commitment $commitment;
  public RenewalType $renewal_type;
  public __integer $reserved_slots;

  public function __construct(shape(
  ?'commitment' => Commitment,
  ?'renewal_type' => RenewalType,
  ?'reserved_slots' => __integer,
  ) $s = shape()) {
    $this->commitment = $commitment ?? "";
    $this->renewal_type = $renewal_type ?? "";
    $this->reserved_slots = $reserved_slots ?? 0;
  }
}

type ReservationPlanStatus = string;

class ResourceTags {
  public __string $arn;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tags = $tags ?? [];
  }
}

type RespondToAfd = string;

class S3DestinationAccessControl {
  public S3ObjectCannedAcl $canned_acl;

  public function __construct(shape(
  ?'canned_acl' => S3ObjectCannedAcl,
  ) $s = shape()) {
    $this->canned_acl = $canned_acl ?? "";
  }
}

class S3DestinationSettings {
  public S3DestinationAccessControl $access_control;
  public S3EncryptionSettings $encryption;

  public function __construct(shape(
  ?'access_control' => S3DestinationAccessControl,
  ?'encryption' => S3EncryptionSettings,
  ) $s = shape()) {
    $this->access_control = $access_control ?? null;
    $this->encryption = $encryption ?? null;
  }
}

class S3EncryptionSettings {
  public S3ServerSideEncryptionType $encryption_type;
  public __stringPatternArnAwsUsGovCnKmsAZ26EastWestCentralNorthSouthEastWest1912D12KeyAFAF098AFAF094AFAF094AFAF094AFAF0912 $kms_key_arn;

  public function __construct(shape(
  ?'encryption_type' => S3ServerSideEncryptionType,
  ?'kms_key_arn' => __stringPatternArnAwsUsGovCnKmsAZ26EastWestCentralNorthSouthEastWest1912D12KeyAFAF098AFAF094AFAF094AFAF094AFAF0912,
  ) $s = shape()) {
    $this->encryption_type = $encryption_type ?? "";
    $this->kms_key_arn = $kms_key_arn ?? "";
  }
}

type S3ObjectCannedAcl = string;

type S3ServerSideEncryptionType = string;

type ScalingBehavior = string;

type SccDestinationFramerate = string;

class SccDestinationSettings {
  public SccDestinationFramerate $framerate;

  public function __construct(shape(
  ?'framerate' => SccDestinationFramerate,
  ) $s = shape()) {
    $this->framerate = $framerate ?? "";
  }
}

type SimulateReservedQueue = string;

class SpekeKeyProvider {
  public __stringPatternArnAwsUsGovAcm $certificate_arn;
  public __string $resource_id;
  public __listOf__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12 $system_ids;
  public __stringPatternHttps $url;

  public function __construct(shape(
  ?'certificate_arn' => __stringPatternArnAwsUsGovAcm,
  ?'resource_id' => __string,
  ?'system_ids' => __listOf__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12,
  ?'url' => __stringPatternHttps,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->system_ids = $system_ids ?? [];
    $this->url = $url ?? "";
  }
}

class SpekeKeyProviderCmaf {
  public __stringPatternArnAwsUsGovAcm $certificate_arn;
  public __listOf__stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12 $dash_signaled_system_ids;
  public __listOf__stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12 $hls_signaled_system_ids;
  public __stringPatternW $resource_id;
  public __stringPatternHttps $url;

  public function __construct(shape(
  ?'certificate_arn' => __stringPatternArnAwsUsGovAcm,
  ?'dash_signaled_system_ids' => __listOf__stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12,
  ?'hls_signaled_system_ids' => __listOf__stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12,
  ?'resource_id' => __stringPatternW,
  ?'url' => __stringPatternHttps,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
    $this->dash_signaled_system_ids = $dash_signaled_system_ids ?? [];
    $this->hls_signaled_system_ids = $hls_signaled_system_ids ?? [];
    $this->resource_id = $resource_id ?? "";
    $this->url = $url ?? "";
  }
}

class StaticKeyProvider {
  public __stringPatternIdentityAZaZ26AZaZ09163 $key_format;
  public __stringPatternDD $key_format_versions;
  public __stringPatternAZaZ0932 $static_key_value;
  public __string $url;

  public function __construct(shape(
  ?'key_format' => __stringPatternIdentityAZaZ26AZaZ09163,
  ?'key_format_versions' => __stringPatternDD,
  ?'static_key_value' => __stringPatternAZaZ0932,
  ?'url' => __string,
  ) $s = shape()) {
    $this->key_format = $key_format ?? "";
    $this->key_format_versions = $key_format_versions ?? "";
    $this->static_key_value = $static_key_value ?? "";
    $this->url = $url ?? "";
  }
}

type StatusUpdateInterval = string;

class TagResourceRequest {
  public __string $arn;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TeletextDestinationSettings {
  public __stringMin3Max3Pattern1809aFAF09aEAE $page_number;
  public __listOfTeletextPageType $page_types;

  public function __construct(shape(
  ?'page_number' => __stringMin3Max3Pattern1809aFAF09aEAE,
  ?'page_types' => __listOfTeletextPageType,
  ) $s = shape()) {
    $this->page_number = $page_number ?? "";
    $this->page_types = $page_types ?? [];
  }
}

type TeletextPageType = string;

class TeletextSourceSettings {
  public __stringMin3Max3Pattern1809aFAF09aEAE $page_number;

  public function __construct(shape(
  ?'page_number' => __stringMin3Max3Pattern1809aFAF09aEAE,
  ) $s = shape()) {
    $this->page_number = $page_number ?? "";
  }
}

class TimecodeBurnin {
  public __integerMin10Max48 $font_size;
  public TimecodeBurninPosition $position;
  public __stringPattern $prefix;

  public function __construct(shape(
  ?'font_size' => __integerMin10Max48,
  ?'position' => TimecodeBurninPosition,
  ?'prefix' => __stringPattern,
  ) $s = shape()) {
    $this->font_size = $font_size ?? 0;
    $this->position = $position ?? "";
    $this->prefix = $prefix ?? "";
  }
}

type TimecodeBurninPosition = string;

class TimecodeConfig {
  public __stringPattern010920405090509092 $anchor;
  public TimecodeSource $source;
  public __stringPattern010920405090509092 $start;
  public __stringPattern0940191020191209301 $timestamp_offset;

  public function __construct(shape(
  ?'anchor' => __stringPattern010920405090509092,
  ?'source' => TimecodeSource,
  ?'start' => __stringPattern010920405090509092,
  ?'timestamp_offset' => __stringPattern0940191020191209301,
  ) $s = shape()) {
    $this->anchor = $anchor ?? "";
    $this->source = $source ?? "";
    $this->start = $start ?? "";
    $this->timestamp_offset = $timestamp_offset ?? "";
  }
}

type TimecodeSource = string;

type TimedMetadata = string;

class TimedMetadataInsertion {
  public __listOfId3Insertion $id_3_insertions;

  public function __construct(shape(
  ?'id_3_insertions' => __listOfId3Insertion,
  ) $s = shape()) {
    $this->id_3_insertions = $id_3_insertions ?? [];
  }
}

class Timing {
  public __timestampUnix $finish_time;
  public __timestampUnix $start_time;
  public __timestampUnix $submit_time;

  public function __construct(shape(
  ?'finish_time' => __timestampUnix,
  ?'start_time' => __timestampUnix,
  ?'submit_time' => __timestampUnix,
  ) $s = shape()) {
    $this->finish_time = $finish_time ?? 0;
    $this->start_time = $start_time ?? 0;
    $this->submit_time = $submit_time ?? 0;
  }
}

class TooManyRequestsException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TrackSourceSettings {
  public __integerMin1Max2147483647 $track_number;

  public function __construct(shape(
  ?'track_number' => __integerMin1Max2147483647,
  ) $s = shape()) {
    $this->track_number = $track_number ?? 0;
  }
}

class TtmlDestinationSettings {
  public TtmlStylePassthrough $style_passthrough;

  public function __construct(shape(
  ?'style_passthrough' => TtmlStylePassthrough,
  ) $s = shape()) {
    $this->style_passthrough = $style_passthrough ?? "";
  }
}

type TtmlStylePassthrough = string;

type Type = string;

class UntagResourceRequest {
  public __string $arn;
  public __listOf__string $tag_keys;

  public function __construct(shape(
  ?'arn' => __string,
  ?'tag_keys' => __listOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'acceleration_settings' => AccelerationSettings,
  ?'category' => __string,
  ?'description' => __string,
  ?'hop_destinations' => __listOfHopDestination,
  ?'name' => __string,
  ?'priority' => __integerMinNegative50Max50,
  ?'queue' => __string,
  ?'settings' => JobTemplateSettings,
  ?'status_update_interval' => StatusUpdateInterval,
  ) $s = shape()) {
    $this->acceleration_settings = $acceleration_settings ?? null;
    $this->category = $category ?? "";
    $this->description = $description ?? "";
    $this->hop_destinations = $hop_destinations ?? [];
    $this->name = $name ?? "";
    $this->priority = $priority ?? 0;
    $this->queue = $queue ?? "";
    $this->settings = $settings ?? null;
    $this->status_update_interval = $status_update_interval ?? "";
  }
}

class UpdateJobTemplateResponse {
  public JobTemplate $job_template;

  public function __construct(shape(
  ?'job_template' => JobTemplate,
  ) $s = shape()) {
    $this->job_template = $job_template ?? null;
  }
}

class UpdatePresetRequest {
  public __string $category;
  public __string $description;
  public __string $name;
  public PresetSettings $settings;

  public function __construct(shape(
  ?'category' => __string,
  ?'description' => __string,
  ?'name' => __string,
  ?'settings' => PresetSettings,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->settings = $settings ?? null;
  }
}

class UpdatePresetResponse {
  public Preset $preset;

  public function __construct(shape(
  ?'preset' => Preset,
  ) $s = shape()) {
    $this->preset = $preset ?? null;
  }
}

class UpdateQueueRequest {
  public __string $description;
  public __string $name;
  public ReservationPlanSettings $reservation_plan_settings;
  public QueueStatus $status;

  public function __construct(shape(
  ?'description' => __string,
  ?'name' => __string,
  ?'reservation_plan_settings' => ReservationPlanSettings,
  ?'status' => QueueStatus,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->reservation_plan_settings = $reservation_plan_settings ?? null;
    $this->status = $status ?? "";
  }
}

class UpdateQueueResponse {
  public Queue $queue;

  public function __construct(shape(
  ?'queue' => Queue,
  ) $s = shape()) {
    $this->queue = $queue ?? null;
  }
}

type VideoCodec = string;

class VideoCodecSettings {
  public Av1Settings $av_1_settings;
  public VideoCodec $codec;
  public FrameCaptureSettings $frame_capture_settings;
  public H264Settings $h_264_settings;
  public H265Settings $h_265_settings;
  public Mpeg2Settings $mpeg_2_settings;
  public ProresSettings $prores_settings;

  public function __construct(shape(
  ?'av_1_settings' => Av1Settings,
  ?'codec' => VideoCodec,
  ?'frame_capture_settings' => FrameCaptureSettings,
  ?'h_264_settings' => H264Settings,
  ?'h_265_settings' => H265Settings,
  ?'mpeg_2_settings' => Mpeg2Settings,
  ?'prores_settings' => ProresSettings,
  ) $s = shape()) {
    $this->av_1_settings = $av_1_settings ?? null;
    $this->codec = $codec ?? "";
    $this->frame_capture_settings = $frame_capture_settings ?? null;
    $this->h_264_settings = $h_264_settings ?? null;
    $this->h_265_settings = $h_265_settings ?? null;
    $this->mpeg_2_settings = $mpeg_2_settings ?? null;
    $this->prores_settings = $prores_settings ?? null;
  }
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

  public function __construct(shape(
  ?'afd_signaling' => AfdSignaling,
  ?'anti_alias' => AntiAlias,
  ?'codec_settings' => VideoCodecSettings,
  ?'color_metadata' => ColorMetadata,
  ?'crop' => Rectangle,
  ?'drop_frame_timecode' => DropFrameTimecode,
  ?'fixed_afd' => __integerMin0Max15,
  ?'height' => __integerMin32Max8192,
  ?'position' => Rectangle,
  ?'respond_to_afd' => RespondToAfd,
  ?'scaling_behavior' => ScalingBehavior,
  ?'sharpness' => __integerMin0Max100,
  ?'timecode_insertion' => VideoTimecodeInsertion,
  ?'video_preprocessors' => VideoPreprocessor,
  ?'width' => __integerMin32Max8192,
  ) $s = shape()) {
    $this->afd_signaling = $afd_signaling ?? "";
    $this->anti_alias = $anti_alias ?? "";
    $this->codec_settings = $codec_settings ?? null;
    $this->color_metadata = $color_metadata ?? "";
    $this->crop = $crop ?? null;
    $this->drop_frame_timecode = $drop_frame_timecode ?? "";
    $this->fixed_afd = $fixed_afd ?? 0;
    $this->height = $height ?? 0;
    $this->position = $position ?? null;
    $this->respond_to_afd = $respond_to_afd ?? "";
    $this->scaling_behavior = $scaling_behavior ?? "";
    $this->sharpness = $sharpness ?? 0;
    $this->timecode_insertion = $timecode_insertion ?? "";
    $this->video_preprocessors = $video_preprocessors ?? null;
    $this->width = $width ?? 0;
  }
}

class VideoDetail {
  public __integer $height_in_px;
  public __integer $width_in_px;

  public function __construct(shape(
  ?'height_in_px' => __integer,
  ?'width_in_px' => __integer,
  ) $s = shape()) {
    $this->height_in_px = $height_in_px ?? 0;
    $this->width_in_px = $width_in_px ?? 0;
  }
}

class VideoPreprocessor {
  public ColorCorrector $color_corrector;
  public Deinterlacer $deinterlacer;
  public DolbyVision $dolby_vision;
  public ImageInserter $image_inserter;
  public NoiseReducer $noise_reducer;
  public TimecodeBurnin $timecode_burnin;

  public function __construct(shape(
  ?'color_corrector' => ColorCorrector,
  ?'deinterlacer' => Deinterlacer,
  ?'dolby_vision' => DolbyVision,
  ?'image_inserter' => ImageInserter,
  ?'noise_reducer' => NoiseReducer,
  ?'timecode_burnin' => TimecodeBurnin,
  ) $s = shape()) {
    $this->color_corrector = $color_corrector ?? null;
    $this->deinterlacer = $deinterlacer ?? null;
    $this->dolby_vision = $dolby_vision ?? null;
    $this->image_inserter = $image_inserter ?? null;
    $this->noise_reducer = $noise_reducer ?? null;
    $this->timecode_burnin = $timecode_burnin ?? null;
  }
}

class VideoSelector {
  public AlphaBehavior $alpha_behavior;
  public ColorSpace $color_space;
  public ColorSpaceUsage $color_space_usage;
  public Hdr10Metadata $hdr_10_metadata;
  public __integerMin1Max2147483647 $pid;
  public __integerMinNegative2147483648Max2147483647 $program_number;
  public InputRotate $rotate;

  public function __construct(shape(
  ?'alpha_behavior' => AlphaBehavior,
  ?'color_space' => ColorSpace,
  ?'color_space_usage' => ColorSpaceUsage,
  ?'hdr_10_metadata' => Hdr10Metadata,
  ?'pid' => __integerMin1Max2147483647,
  ?'program_number' => __integerMinNegative2147483648Max2147483647,
  ?'rotate' => InputRotate,
  ) $s = shape()) {
    $this->alpha_behavior = $alpha_behavior ?? "";
    $this->color_space = $color_space ?? "";
    $this->color_space_usage = $color_space_usage ?? "";
    $this->hdr_10_metadata = $hdr_10_metadata ?? null;
    $this->pid = $pid ?? 0;
    $this->program_number = $program_number ?? 0;
    $this->rotate = $rotate ?? "";
  }
}

type VideoTimecodeInsertion = string;

type WavFormat = string;

class WavSettings {
  public __integerMin16Max24 $bit_depth;
  public __integerMin1Max64 $channels;
  public WavFormat $format;
  public __integerMin8000Max192000 $sample_rate;

  public function __construct(shape(
  ?'bit_depth' => __integerMin16Max24,
  ?'channels' => __integerMin1Max64,
  ?'format' => WavFormat,
  ?'sample_rate' => __integerMin8000Max192000,
  ) $s = shape()) {
    $this->bit_depth = $bit_depth ?? 0;
    $this->channels = $channels ?? 0;
    $this->format = $format ?? "";
    $this->sample_rate = $sample_rate ?? 0;
  }
}

type __boolean = bool;

type __double = float;

type __doubleMin0 = float;

type __doubleMin0Max1 = float;

type __doubleMin0Max2147483647 = float;

type __doubleMinNegative59Max0 = float;

type __doubleMinNegative60Max3 = float;

type __doubleMinNegative60MaxNegative1 = float;

type __doubleMinNegative6Max3 = float;

type __integer = int;

type __integerMin0Max0 = int;

type __integerMin0Max1 = int;

type __integerMin0Max10 = int;

type __integerMin0Max100 = int;

type __integerMin0Max1000 = int;

type __integerMin0Max10000 = int;

type __integerMin0Max1152000000 = int;

type __integerMin0Max128 = int;

type __integerMin0Max1466400000 = int;

type __integerMin0Max15 = int;

type __integerMin0Max16 = int;

type __integerMin0Max2147483647 = int;

type __integerMin0Max255 = int;

type __integerMin0Max3 = int;

type __integerMin0Max30 = int;

type __integerMin0Max30000 = int;

type __integerMin0Max3600 = int;

type __integerMin0Max4 = int;

type __integerMin0Max47185920 = int;

type __integerMin0Max500 = int;

type __integerMin0Max50000 = int;

type __integerMin0Max65535 = int;

type __integerMin0Max7 = int;

type __integerMin0Max8 = int;

type __integerMin0Max9 = int;

type __integerMin0Max96 = int;

type __integerMin0Max99 = int;

type __integerMin1000Max1152000000 = int;

type __integerMin1000Max1466400000 = int;

type __integerMin1000Max288000000 = int;

type __integerMin1000Max30000 = int;

type __integerMin1000Max300000000 = int;

type __integerMin10Max48 = int;

type __integerMin16000Max320000 = int;

type __integerMin16Max24 = int;

type __integerMin1Max1 = int;

type __integerMin1Max10 = int;

type __integerMin1Max100 = int;

type __integerMin1Max10000000 = int;

type __integerMin1Max1001 = int;

type __integerMin1Max17895697 = int;

type __integerMin1Max2 = int;

type __integerMin1Max20 = int;

type __integerMin1Max2147483640 = int;

type __integerMin1Max2147483647 = int;

type __integerMin1Max31 = int;

type __integerMin1Max32 = int;

type __integerMin1Max4 = int;

type __integerMin1Max6 = int;

type __integerMin1Max60000 = int;

type __integerMin1Max64 = int;

type __integerMin22050Max48000 = int;

type __integerMin24Max60000 = int;

type __integerMin25Max10000 = int;

type __integerMin25Max2000 = int;

type __integerMin2Max2147483647 = int;

type __integerMin32000Max384000 = int;

type __integerMin32000Max48000 = int;

type __integerMin32Max8182 = int;

type __integerMin32Max8192 = int;

type __integerMin384000Max768000 = int;

type __integerMin48000Max48000 = int;

type __integerMin6000Max1024000 = int;

type __integerMin64000Max640000 = int;

type __integerMin7Max15 = int;

type __integerMin8000Max192000 = int;

type __integerMin8000Max96000 = int;

type __integerMin96Max600 = int;

type __integerMinNegative1000Max1000 = int;

type __integerMinNegative180Max180 = int;

type __integerMinNegative1Max3 = int;

type __integerMinNegative2147483648Max2147483647 = int;

type __integerMinNegative2Max3 = int;

type __integerMinNegative50Max50 = int;

type __integerMinNegative5Max5 = int;

type __integerMinNegative60Max6 = int;

type __integerMinNegative70Max0 = int;

type __listOfAudioDescription = vec<AudioDescription>;

type __listOfCaptionDescription = vec<CaptionDescription>;

type __listOfCaptionDescriptionPreset = vec<CaptionDescriptionPreset>;

type __listOfCmafAdditionalManifest = vec<CmafAdditionalManifest>;

type __listOfDashAdditionalManifest = vec<DashAdditionalManifest>;

type __listOfEndpoint = vec<Endpoint>;

type __listOfHlsAdMarkers = vec<HlsAdMarkers>;

type __listOfHlsAdditionalManifest = vec<HlsAdditionalManifest>;

type __listOfHlsCaptionLanguageMapping = vec<HlsCaptionLanguageMapping>;

type __listOfHopDestination = vec<HopDestination>;

type __listOfId3Insertion = vec<Id3Insertion>;

type __listOfInput = vec<Input>;

type __listOfInputClipping = vec<InputClipping>;

type __listOfInputTemplate = vec<InputTemplate>;

type __listOfInsertableImage = vec<InsertableImage>;

type __listOfJob = vec<Job>;

type __listOfJobTemplate = vec<JobTemplate>;

type __listOfMsSmoothAdditionalManifest = vec<MsSmoothAdditionalManifest>;

type __listOfOutput = vec<Output>;

type __listOfOutputChannelMapping = vec<OutputChannelMapping>;

type __listOfOutputDetail = vec<OutputDetail>;

type __listOfOutputGroup = vec<OutputGroup>;

type __listOfOutputGroupDetail = vec<OutputGroupDetail>;

type __listOfPreset = vec<Preset>;

type __listOfQueue = vec<Queue>;

type __listOfQueueTransition = vec<QueueTransition>;

type __listOfTeletextPageType = vec<TeletextPageType>;

type __listOf__integerMin1Max2147483647 = vec<__integerMin1Max2147483647>;

type __listOf__integerMin32Max8182 = vec<__integerMin32Max8182>;

type __listOf__integerMinNegative60Max6 = vec<__integerMinNegative60Max6>;

type __listOf__string = vec<__string>;

type __listOf__stringMin1 = vec<__stringMin1>;

type __listOf__stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12 = vec<__stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12>;

type __listOf__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12 = vec<__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12>;

type __listOf__stringPatternS3ASSETMAPXml = vec<__stringPatternS3ASSETMAPXml>;

type __mapOfAudioSelector = dict<__string, AudioSelector>;

type __mapOfAudioSelectorGroup = dict<__string, AudioSelectorGroup>;

type __mapOfCaptionSelector = dict<__string, CaptionSelector>;

type __mapOf__string = dict<__string, __string>;

type __string = string;

type __stringMin0 = string;

type __stringMin1 = string;

type __stringMin11Max11Pattern01D20305D205D = string;

type __stringMin14Max1285PatternS3Mov09PngHttpsMov09Png = string;

type __stringMin14PatternS3BmpBMPPngPNGHttpsBmpBMPPngPNG = string;

type __stringMin14PatternS3BmpBMPPngPNGTgaTGAHttpsBmpBMPPngPNGTgaTGA = string;

type __stringMin14PatternS3SccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMIHttpsSccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTXmlXMLSmiSMI = string;

type __stringMin16Max24PatternAZaZ0922AZaZ0916 = string;

type __stringMin1Max256 = string;

type __stringMin24Max512PatternAZaZ0902 = string;

type __stringMin32Max32Pattern09aFAF32 = string;

type __stringMin36Max36Pattern09aFAF809aFAF409aFAF409aFAF409aFAF12 = string;

type __stringMin3Max3Pattern1809aFAF09aEAE = string;

type __stringMin3Max3PatternAZaZ3 = string;

type __stringMin9Max19PatternAZ26EastWestCentralNorthSouthEastWest1912 = string;

type __stringPattern = string;

type __stringPattern010920405090509092 = string;

type __stringPattern01D20305D205D = string;

type __stringPattern0940191020191209301 = string;

type __stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12 = string;

type __stringPatternAZaZ0902 = string;

type __stringPatternAZaZ0932 = string;

type __stringPatternAZaZ23AZaZ = string;

type __stringPatternArnAwsUsGovAcm = string;

type __stringPatternArnAwsUsGovCnKmsAZ26EastWestCentralNorthSouthEastWest1912D12KeyAFAF098AFAF094AFAF094AFAF094AFAF0912 = string;

type __stringPatternDD = string;

type __stringPatternHttps = string;

type __stringPatternIdentityAZaZ26AZaZ09163 = string;

type __stringPatternS3 = string;

type __stringPatternS3ASSETMAPXml = string;

type __stringPatternS3MM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEEHttpsMM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEE = string;

type __stringPatternS3MM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8WWEEBBMMLLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLLHttpsMM2VVMMPPEEGGMMPP3AAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8WWEEBBMMLLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLL = string;

type __stringPatternSNManifestConfirmConditionNotificationNS = string;

type __stringPatternSNSignalProcessingNotificationNS = string;

type __stringPatternW = string;

type __stringPatternWS = string;

type __timestampIso8601 = int;

type __timestampUnix = int;

