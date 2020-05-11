<?hh // strict
namespace slack\aws\elastictranscoder;

interface Elastic Transcoder {
  public function CancelJob(CancelJobRequest): Awaitable<Errors\Result<CancelJobResponse>>;
  public function CreateJob(CreateJobRequest): Awaitable<Errors\Result<CreateJobResponse>>;
  public function CreatePipeline(CreatePipelineRequest): Awaitable<Errors\Result<CreatePipelineResponse>>;
  public function CreatePreset(CreatePresetRequest): Awaitable<Errors\Result<CreatePresetResponse>>;
  public function DeletePipeline(DeletePipelineRequest): Awaitable<Errors\Result<DeletePipelineResponse>>;
  public function DeletePreset(DeletePresetRequest): Awaitable<Errors\Result<DeletePresetResponse>>;
  public function ListJobsByPipeline(ListJobsByPipelineRequest): Awaitable<Errors\Result<ListJobsByPipelineResponse>>;
  public function ListJobsByStatus(ListJobsByStatusRequest): Awaitable<Errors\Result<ListJobsByStatusResponse>>;
  public function ListPipelines(ListPipelinesRequest): Awaitable<Errors\Result<ListPipelinesResponse>>;
  public function ListPresets(ListPresetsRequest): Awaitable<Errors\Result<ListPresetsResponse>>;
  public function ReadJob(ReadJobRequest): Awaitable<Errors\Result<ReadJobResponse>>;
  public function ReadPipeline(ReadPipelineRequest): Awaitable<Errors\Result<ReadPipelineResponse>>;
  public function ReadPreset(ReadPresetRequest): Awaitable<Errors\Result<ReadPresetResponse>>;
  public function TestRole(TestRoleRequest): Awaitable<Errors\Result<TestRoleResponse>>;
  public function UpdatePipeline(UpdatePipelineRequest): Awaitable<Errors\Result<UpdatePipelineResponse>>;
  public function UpdatePipelineNotifications(UpdatePipelineNotificationsRequest): Awaitable<Errors\Result<UpdatePipelineNotificationsResponse>>;
  public function UpdatePipelineStatus(UpdatePipelineStatusRequest): Awaitable<Errors\Result<UpdatePipelineStatusResponse>>;
}

type AccessControl = string;

type AccessControls = vec<AccessControl>;

class AccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Artwork {
  public JpgOrPng $album_art_format;
  public Encryption $encryption;
  public WatermarkKey $input_key;
  public DigitsOrAuto $max_height;
  public DigitsOrAuto $max_width;
  public PaddingPolicy $padding_policy;
  public SizingPolicy $sizing_policy;

  public function __construct(shape(
  ?'album_art_format' => JpgOrPng,
  ?'encryption' => Encryption,
  ?'input_key' => WatermarkKey,
  ?'max_height' => DigitsOrAuto,
  ?'max_width' => DigitsOrAuto,
  ?'padding_policy' => PaddingPolicy,
  ?'sizing_policy' => SizingPolicy,
  ) $s = shape()) {
    $this->album_art_format = $album_art_format ?? ;
    $this->encryption = $encryption ?? null;
    $this->input_key = $input_key ?? ;
    $this->max_height = $max_height ?? ;
    $this->max_width = $max_width ?? ;
    $this->padding_policy = $padding_policy ?? "";
    $this->sizing_policy = $sizing_policy ?? "";
  }
}

type Artworks = vec<Artwork>;

type Ascending = string;

type AspectRatio = string;

type AudioBitDepth = string;

type AudioBitOrder = string;

type AudioBitRate = string;

type AudioChannels = string;

type AudioCodec = string;

class AudioCodecOptions {
  public AudioBitDepth $bit_depth;
  public AudioBitOrder $bit_order;
  public AudioCodecProfile $profile;
  public AudioSigned $signed;

  public function __construct(shape(
  ?'bit_depth' => AudioBitDepth,
  ?'bit_order' => AudioBitOrder,
  ?'profile' => AudioCodecProfile,
  ?'signed' => AudioSigned,
  ) $s = shape()) {
    $this->bit_depth = $bit_depth ?? ;
    $this->bit_order = $bit_order ?? ;
    $this->profile = $profile ?? ;
    $this->signed = $signed ?? ;
  }
}

type AudioCodecProfile = string;

type AudioPackingMode = string;

class AudioParameters {
  public AudioPackingMode $audio_packing_mode;
  public AudioBitRate $bit_rate;
  public AudioChannels $channels;
  public AudioCodec $codec;
  public AudioCodecOptions $codec_options;
  public AudioSampleRate $sample_rate;

  public function __construct(shape(
  ?'audio_packing_mode' => AudioPackingMode,
  ?'bit_rate' => AudioBitRate,
  ?'channels' => AudioChannels,
  ?'codec' => AudioCodec,
  ?'codec_options' => AudioCodecOptions,
  ?'sample_rate' => AudioSampleRate,
  ) $s = shape()) {
    $this->audio_packing_mode = $audio_packing_mode ?? "";
    $this->bit_rate = $bit_rate ?? ;
    $this->channels = $channels ?? ;
    $this->codec = $codec ?? ;
    $this->codec_options = $codec_options ?? [];
    $this->sample_rate = $sample_rate ?? ;
  }
}

type AudioSampleRate = string;

type AudioSigned = string;

type Base64EncodedString = string;

type BucketName = string;

class CancelJobRequest {
  public Id $id;

  public function __construct(shape(
  ?'id' => Id,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class CancelJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CaptionFormat {
  public Encryption $encryption;
  public CaptionFormatFormat $format;
  public CaptionFormatPattern $pattern;

  public function __construct(shape(
  ?'encryption' => Encryption,
  ?'format' => CaptionFormatFormat,
  ?'pattern' => CaptionFormatPattern,
  ) $s = shape()) {
    $this->encryption = $encryption ?? null;
    $this->format = $format ?? ;
    $this->pattern = $pattern ?? ;
  }
}

type CaptionFormatFormat = string;

type CaptionFormatPattern = string;

type CaptionFormats = vec<CaptionFormat>;

type CaptionMergePolicy = string;

class CaptionSource {
  public Encryption $encryption;
  public LongKey $key;
  public Name $label;
  public Key $language;
  public TimeOffset $time_offset;

  public function __construct(shape(
  ?'encryption' => Encryption,
  ?'key' => LongKey,
  ?'label' => Name,
  ?'language' => Key,
  ?'time_offset' => TimeOffset,
  ) $s = shape()) {
    $this->encryption = $encryption ?? null;
    $this->key = $key ?? "";
    $this->label = $label ?? ;
    $this->language = $language ?? ;
    $this->time_offset = $time_offset ?? "";
  }
}

type CaptionSources = vec<CaptionSource>;

class Captions {
  public CaptionFormats $caption_formats;
  public CaptionSources $caption_sources;
  public CaptionMergePolicy $merge_policy;

  public function __construct(shape(
  ?'caption_formats' => CaptionFormats,
  ?'caption_sources' => CaptionSources,
  ?'merge_policy' => CaptionMergePolicy,
  ) $s = shape()) {
    $this->caption_formats = $caption_formats ?? [];
    $this->caption_sources = $caption_sources ?? [];
    $this->merge_policy = $merge_policy ?? "";
  }
}

class Clip {
  public TimeSpan $time_span;

  public function __construct(shape(
  ?'time_span' => TimeSpan,
  ) $s = shape()) {
    $this->time_span = $time_span ?? null;
  }
}

type CodecOption = string;

type CodecOptions = dict<CodecOption, CodecOption>;

type Composition = vec<Clip>;

class CreateJobOutput {
  public JobAlbumArt $album_art;
  public Captions $captions;
  public Composition $composition;
  public Encryption $encryption;
  public Key $key;
  public Id $preset_id;
  public Rotate $rotate;
  public FloatString $segment_duration;
  public Encryption $thumbnail_encryption;
  public ThumbnailPattern $thumbnail_pattern;
  public JobWatermarks $watermarks;

  public function __construct(shape(
  ?'album_art' => JobAlbumArt,
  ?'captions' => Captions,
  ?'composition' => Composition,
  ?'encryption' => Encryption,
  ?'key' => Key,
  ?'preset_id' => Id,
  ?'rotate' => Rotate,
  ?'segment_duration' => FloatString,
  ?'thumbnail_encryption' => Encryption,
  ?'thumbnail_pattern' => ThumbnailPattern,
  ?'watermarks' => JobWatermarks,
  ) $s = shape()) {
    $this->album_art = $album_art ?? ;
    $this->captions = $captions ?? null;
    $this->composition = $composition ?? [];
    $this->encryption = $encryption ?? null;
    $this->key = $key ?? "";
    $this->preset_id = $preset_id ?? ;
    $this->rotate = $rotate ?? "";
    $this->segment_duration = $segment_duration ?? ;
    $this->thumbnail_encryption = $thumbnail_encryption ?? ;
    $this->thumbnail_pattern = $thumbnail_pattern ?? "";
    $this->watermarks = $watermarks ?? ;
  }
}

type CreateJobOutputs = vec<CreateJobOutput>;

class CreateJobPlaylist {
  public PlaylistFormat $format;
  public HlsContentProtection $hls_content_protection;
  public Filename $name;
  public OutputKeys $output_keys;
  public PlayReadyDrm $play_ready_drm;

  public function __construct(shape(
  ?'format' => PlaylistFormat,
  ?'hls_content_protection' => HlsContentProtection,
  ?'name' => Filename,
  ?'output_keys' => OutputKeys,
  ?'play_ready_drm' => PlayReadyDrm,
  ) $s = shape()) {
    $this->format = $format ?? ;
    $this->hls_content_protection = $hls_content_protection ?? null;
    $this->name = $name ?? "";
    $this->output_keys = $output_keys ?? [];
    $this->play_ready_drm = $play_ready_drm ?? null;
  }
}

type CreateJobPlaylists = vec<CreateJobPlaylist>;

class CreateJobRequest {
  public JobInput $input;
  public JobInputs $inputs;
  public CreateJobOutput $output;
  public Key $output_key_prefix;
  public CreateJobOutputs $outputs;
  public Id $pipeline_id;
  public CreateJobPlaylists $playlists;
  public UserMetadata $user_metadata;

  public function __construct(shape(
  ?'input' => JobInput,
  ?'inputs' => JobInputs,
  ?'output' => CreateJobOutput,
  ?'output_key_prefix' => Key,
  ?'outputs' => CreateJobOutputs,
  ?'pipeline_id' => Id,
  ?'playlists' => CreateJobPlaylists,
  ?'user_metadata' => UserMetadata,
  ) $s = shape()) {
    $this->input = $input ?? ;
    $this->inputs = $inputs ?? ;
    $this->output = $output ?? ;
    $this->output_key_prefix = $output_key_prefix ?? ;
    $this->outputs = $outputs ?? ;
    $this->pipeline_id = $pipeline_id ?? ;
    $this->playlists = $playlists ?? [];
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

class CreatePipelineRequest {
  public KeyArn $aws_kms_key_arn;
  public PipelineOutputConfig $content_config;
  public BucketName $input_bucket;
  public Name $name;
  public Notifications $notifications;
  public BucketName $output_bucket;
  public Role $role;
  public PipelineOutputConfig $thumbnail_config;

  public function __construct(shape(
  ?'aws_kms_key_arn' => KeyArn,
  ?'content_config' => PipelineOutputConfig,
  ?'input_bucket' => BucketName,
  ?'name' => Name,
  ?'notifications' => Notifications,
  ?'output_bucket' => BucketName,
  ?'role' => Role,
  ?'thumbnail_config' => PipelineOutputConfig,
  ) $s = shape()) {
    $this->aws_kms_key_arn = $aws_kms_key_arn ?? ;
    $this->content_config = $content_config ?? ;
    $this->input_bucket = $input_bucket ?? ;
    $this->name = $name ?? "";
    $this->notifications = $notifications ?? null;
    $this->output_bucket = $output_bucket ?? ;
    $this->role = $role ?? "";
    $this->thumbnail_config = $thumbnail_config ?? ;
  }
}

class CreatePipelineResponse {
  public Pipeline $pipeline;
  public Warnings $warnings;

  public function __construct(shape(
  ?'pipeline' => Pipeline,
  ?'warnings' => Warnings,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? null;
    $this->warnings = $warnings ?? [];
  }
}

class CreatePresetRequest {
  public AudioParameters $audio;
  public PresetContainer $container;
  public Description $description;
  public Name $name;
  public Thumbnails $thumbnails;
  public VideoParameters $video;

  public function __construct(shape(
  ?'audio' => AudioParameters,
  ?'container' => PresetContainer,
  ?'description' => Description,
  ?'name' => Name,
  ?'thumbnails' => Thumbnails,
  ?'video' => VideoParameters,
  ) $s = shape()) {
    $this->audio = $audio ?? ;
    $this->container = $container ?? ;
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->thumbnails = $thumbnails ?? null;
    $this->video = $video ?? ;
  }
}

class CreatePresetResponse {
  public Preset $preset;
  public string $warning;

  public function __construct(shape(
  ?'preset' => Preset,
  ?'warning' => string,
  ) $s = shape()) {
    $this->preset = $preset ?? null;
    $this->warning = $warning ?? null;
  }
}

class DeletePipelineRequest {
  public Id $id;

  public function __construct(shape(
  ?'id' => Id,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DeletePipelineResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePresetRequest {
  public Id $id;

  public function __construct(shape(
  ?'id' => Id,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DeletePresetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Description = string;

class DetectedProperties {
  public NullableLong $duration_millis;
  public NullableLong $file_size;
  public FloatString $frame_rate;
  public NullableInteger $height;
  public NullableInteger $width;

  public function __construct(shape(
  ?'duration_millis' => NullableLong,
  ?'file_size' => NullableLong,
  ?'frame_rate' => FloatString,
  ?'height' => NullableInteger,
  ?'width' => NullableInteger,
  ) $s = shape()) {
    $this->duration_millis = $duration_millis ?? ;
    $this->file_size = $file_size ?? ;
    $this->frame_rate = $frame_rate ?? "";
    $this->height = $height ?? ;
    $this->width = $width ?? ;
  }
}

type Digits = string;

type DigitsOrAuto = string;

class Encryption {
  public ZeroTo255String $initialization_vector;
  public Base64EncodedString $key;
  public Base64EncodedString $key_md_5;
  public EncryptionMode $mode;

  public function __construct(shape(
  ?'initialization_vector' => ZeroTo255String,
  ?'key' => Base64EncodedString,
  ?'key_md_5' => Base64EncodedString,
  ?'mode' => EncryptionMode,
  ) $s = shape()) {
    $this->initialization_vector = $initialization_vector ?? ;
    $this->key = $key ?? "";
    $this->key_md_5 = $key_md_5 ?? ;
    $this->mode = $mode ?? ;
  }
}

type EncryptionMode = string;

type ExceptionMessages = vec<String>;

type Filename = string;

type FixedGOP = string;

type FloatString = string;

type FrameRate = string;

type Grantee = string;

type GranteeType = string;

class HlsContentProtection {
  public ZeroTo255String $initialization_vector;
  public Base64EncodedString $key;
  public Base64EncodedString $key_md_5;
  public KeyStoragePolicy $key_storage_policy;
  public ZeroTo512String $license_acquisition_url;
  public HlsContentProtectionMethod $method;

  public function __construct(shape(
  ?'initialization_vector' => ZeroTo255String,
  ?'key' => Base64EncodedString,
  ?'key_md_5' => Base64EncodedString,
  ?'key_storage_policy' => KeyStoragePolicy,
  ?'license_acquisition_url' => ZeroTo512String,
  ?'method' => HlsContentProtectionMethod,
  ) $s = shape()) {
    $this->initialization_vector = $initialization_vector ?? ;
    $this->key = $key ?? "";
    $this->key_md_5 = $key_md_5 ?? ;
    $this->key_storage_policy = $key_storage_policy ?? "";
    $this->license_acquisition_url = $license_acquisition_url ?? ;
    $this->method = $method ?? ;
  }
}

type HlsContentProtectionMethod = string;

type HorizontalAlign = string;

type Id = string;

class IncompatibleVersionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InputCaptions {
  public CaptionSources $caption_sources;
  public CaptionMergePolicy $merge_policy;

  public function __construct(shape(
  ?'caption_sources' => CaptionSources,
  ?'merge_policy' => CaptionMergePolicy,
  ) $s = shape()) {
    $this->caption_sources = $caption_sources ?? [];
    $this->merge_policy = $merge_policy ?? "";
  }
}

type Interlaced = string;

class InternalServiceException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Job {
  public string $arn;
  public Id $id;
  public JobInput $input;
  public JobInputs $inputs;
  public JobOutput $output;
  public Key $output_key_prefix;
  public JobOutputs $outputs;
  public Id $pipeline_id;
  public Playlists $playlists;
  public JobStatus $status;
  public Timing $timing;
  public UserMetadata $user_metadata;

  public function __construct(shape(
  ?'arn' => string,
  ?'id' => Id,
  ?'input' => JobInput,
  ?'inputs' => JobInputs,
  ?'output' => JobOutput,
  ?'output_key_prefix' => Key,
  ?'outputs' => JobOutputs,
  ?'pipeline_id' => Id,
  ?'playlists' => Playlists,
  ?'status' => JobStatus,
  ?'timing' => Timing,
  ?'user_metadata' => UserMetadata,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->id = $id ?? "";
    $this->input = $input ?? ;
    $this->inputs = $inputs ?? ;
    $this->output = $output ?? ;
    $this->output_key_prefix = $output_key_prefix ?? ;
    $this->outputs = $outputs ?? ;
    $this->pipeline_id = $pipeline_id ?? ;
    $this->playlists = $playlists ?? [];
    $this->status = $status ?? ;
    $this->timing = $timing ?? null;
    $this->user_metadata = $user_metadata ?? [];
  }
}

class JobAlbumArt {
  public Artworks $artwork;
  public MergePolicy $merge_policy;

  public function __construct(shape(
  ?'artwork' => Artworks,
  ?'merge_policy' => MergePolicy,
  ) $s = shape()) {
    $this->artwork = $artwork ?? null;
    $this->merge_policy = $merge_policy ?? "";
  }
}

type JobContainer = string;

class JobInput {
  public AspectRatio $aspect_ratio;
  public JobContainer $container;
  public DetectedProperties $detected_properties;
  public Encryption $encryption;
  public FrameRate $frame_rate;
  public InputCaptions $input_captions;
  public Interlaced $interlaced;
  public LongKey $key;
  public Resolution $resolution;
  public TimeSpan $time_span;

  public function __construct(shape(
  ?'aspect_ratio' => AspectRatio,
  ?'container' => JobContainer,
  ?'detected_properties' => DetectedProperties,
  ?'encryption' => Encryption,
  ?'frame_rate' => FrameRate,
  ?'input_captions' => InputCaptions,
  ?'interlaced' => Interlaced,
  ?'key' => LongKey,
  ?'resolution' => Resolution,
  ?'time_span' => TimeSpan,
  ) $s = shape()) {
    $this->aspect_ratio = $aspect_ratio ?? "";
    $this->container = $container ?? ;
    $this->detected_properties = $detected_properties ?? null;
    $this->encryption = $encryption ?? null;
    $this->frame_rate = $frame_rate ?? "";
    $this->input_captions = $input_captions ?? null;
    $this->interlaced = $interlaced ?? "";
    $this->key = $key ?? "";
    $this->resolution = $resolution ?? "";
    $this->time_span = $time_span ?? null;
  }
}

type JobInputs = vec<JobInput>;

class JobOutput {
  public JobAlbumArt $album_art;
  public string $applied_color_space_conversion;
  public Captions $captions;
  public Composition $composition;
  public NullableLong $duration;
  public NullableLong $duration_millis;
  public Encryption $encryption;
  public NullableLong $file_size;
  public FloatString $frame_rate;
  public NullableInteger $height;
  public string $id;
  public Key $key;
  public Id $preset_id;
  public Rotate $rotate;
  public FloatString $segment_duration;
  public JobStatus $status;
  public Description $status_detail;
  public Encryption $thumbnail_encryption;
  public ThumbnailPattern $thumbnail_pattern;
  public JobWatermarks $watermarks;
  public NullableInteger $width;

  public function __construct(shape(
  ?'album_art' => JobAlbumArt,
  ?'applied_color_space_conversion' => string,
  ?'captions' => Captions,
  ?'composition' => Composition,
  ?'duration' => NullableLong,
  ?'duration_millis' => NullableLong,
  ?'encryption' => Encryption,
  ?'file_size' => NullableLong,
  ?'frame_rate' => FloatString,
  ?'height' => NullableInteger,
  ?'id' => string,
  ?'key' => Key,
  ?'preset_id' => Id,
  ?'rotate' => Rotate,
  ?'segment_duration' => FloatString,
  ?'status' => JobStatus,
  ?'status_detail' => Description,
  ?'thumbnail_encryption' => Encryption,
  ?'thumbnail_pattern' => ThumbnailPattern,
  ?'watermarks' => JobWatermarks,
  ?'width' => NullableInteger,
  ) $s = shape()) {
    $this->album_art = $album_art ?? ;
    $this->applied_color_space_conversion = $applied_color_space_conversion ?? ;
    $this->captions = $captions ?? null;
    $this->composition = $composition ?? [];
    $this->duration = $duration ?? ;
    $this->duration_millis = $duration_millis ?? ;
    $this->encryption = $encryption ?? null;
    $this->file_size = $file_size ?? ;
    $this->frame_rate = $frame_rate ?? "";
    $this->height = $height ?? ;
    $this->id = $id ?? "";
    $this->key = $key ?? "";
    $this->preset_id = $preset_id ?? ;
    $this->rotate = $rotate ?? "";
    $this->segment_duration = $segment_duration ?? ;
    $this->status = $status ?? ;
    $this->status_detail = $status_detail ?? ;
    $this->thumbnail_encryption = $thumbnail_encryption ?? ;
    $this->thumbnail_pattern = $thumbnail_pattern ?? "";
    $this->watermarks = $watermarks ?? ;
    $this->width = $width ?? ;
  }
}

type JobOutputs = vec<JobOutput>;

type JobStatus = string;

class JobWatermark {
  public Encryption $encryption;
  public WatermarkKey $input_key;
  public PresetWatermarkId $preset_watermark_id;

  public function __construct(shape(
  ?'encryption' => Encryption,
  ?'input_key' => WatermarkKey,
  ?'preset_watermark_id' => PresetWatermarkId,
  ) $s = shape()) {
    $this->encryption = $encryption ?? null;
    $this->input_key = $input_key ?? ;
    $this->preset_watermark_id = $preset_watermark_id ?? "";
  }
}

type JobWatermarks = vec<JobWatermark>;

type Jobs = vec<Job>;

type JpgOrPng = string;

type Key = string;

type KeyArn = string;

type KeyIdGuid = string;

type KeyStoragePolicy = string;

type KeyframesMaxDist = string;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListJobsByPipelineRequest {
  public Ascending $ascending;
  public Id $page_token;
  public Id $pipeline_id;

  public function __construct(shape(
  ?'ascending' => Ascending,
  ?'page_token' => Id,
  ?'pipeline_id' => Id,
  ) $s = shape()) {
    $this->ascending = $ascending ?? "";
    $this->page_token = $page_token ?? ;
    $this->pipeline_id = $pipeline_id ?? ;
  }
}

class ListJobsByPipelineResponse {
  public Jobs $jobs;
  public Id $next_page_token;

  public function __construct(shape(
  ?'jobs' => Jobs,
  ?'next_page_token' => Id,
  ) $s = shape()) {
    $this->jobs = $jobs ?? [];
    $this->next_page_token = $next_page_token ?? ;
  }
}

class ListJobsByStatusRequest {
  public Ascending $ascending;
  public Id $page_token;
  public JobStatus $status;

  public function __construct(shape(
  ?'ascending' => Ascending,
  ?'page_token' => Id,
  ?'status' => JobStatus,
  ) $s = shape()) {
    $this->ascending = $ascending ?? "";
    $this->page_token = $page_token ?? ;
    $this->status = $status ?? ;
  }
}

class ListJobsByStatusResponse {
  public Jobs $jobs;
  public Id $next_page_token;

  public function __construct(shape(
  ?'jobs' => Jobs,
  ?'next_page_token' => Id,
  ) $s = shape()) {
    $this->jobs = $jobs ?? [];
    $this->next_page_token = $next_page_token ?? ;
  }
}

class ListPipelinesRequest {
  public Ascending $ascending;
  public Id $page_token;

  public function __construct(shape(
  ?'ascending' => Ascending,
  ?'page_token' => Id,
  ) $s = shape()) {
    $this->ascending = $ascending ?? "";
    $this->page_token = $page_token ?? ;
  }
}

class ListPipelinesResponse {
  public Id $next_page_token;
  public Pipelines $pipelines;

  public function __construct(shape(
  ?'next_page_token' => Id,
  ?'pipelines' => Pipelines,
  ) $s = shape()) {
    $this->next_page_token = $next_page_token ?? ;
    $this->pipelines = $pipelines ?? [];
  }
}

class ListPresetsRequest {
  public Ascending $ascending;
  public Id $page_token;

  public function __construct(shape(
  ?'ascending' => Ascending,
  ?'page_token' => Id,
  ) $s = shape()) {
    $this->ascending = $ascending ?? "";
    $this->page_token = $page_token ?? ;
  }
}

class ListPresetsResponse {
  public Id $next_page_token;
  public Presets $presets;

  public function __construct(shape(
  ?'next_page_token' => Id,
  ?'presets' => Presets,
  ) $s = shape()) {
    $this->next_page_token = $next_page_token ?? ;
    $this->presets = $presets ?? [];
  }
}

type LongKey = string;

type MaxFrameRate = string;

type MergePolicy = string;

type Name = string;

type NonEmptyBase64EncodedString = string;

class Notifications {
  public SnsTopic $completed;
  public SnsTopic $error;
  public SnsTopic $progressing;
  public SnsTopic $warning;

  public function __construct(shape(
  ?'completed' => SnsTopic,
  ?'error' => SnsTopic,
  ?'progressing' => SnsTopic,
  ?'warning' => SnsTopic,
  ) $s = shape()) {
    $this->completed = $completed ?? ;
    $this->error = $error ?? ;
    $this->progressing = $progressing ?? ;
    $this->warning = $warning ?? null;
  }
}

type NullableInteger = int;

type NullableLong = int;

type OneTo512String = string;

type Opacity = string;

type OutputKeys = vec<Key>;

type PaddingPolicy = string;

class Permission {
  public AccessControls $access;
  public Grantee $grantee;
  public GranteeType $grantee_type;

  public function __construct(shape(
  ?'access' => AccessControls,
  ?'grantee' => Grantee,
  ?'grantee_type' => GranteeType,
  ) $s = shape()) {
    $this->access = $access ?? ;
    $this->grantee = $grantee ?? "";
    $this->grantee_type = $grantee_type ?? "";
  }
}

type Permissions = vec<Permission>;

class Pipeline {
  public string $arn;
  public KeyArn $aws_kms_key_arn;
  public PipelineOutputConfig $content_config;
  public Id $id;
  public BucketName $input_bucket;
  public Name $name;
  public Notifications $notifications;
  public BucketName $output_bucket;
  public Role $role;
  public PipelineStatus $status;
  public PipelineOutputConfig $thumbnail_config;

  public function __construct(shape(
  ?'arn' => string,
  ?'aws_kms_key_arn' => KeyArn,
  ?'content_config' => PipelineOutputConfig,
  ?'id' => Id,
  ?'input_bucket' => BucketName,
  ?'name' => Name,
  ?'notifications' => Notifications,
  ?'output_bucket' => BucketName,
  ?'role' => Role,
  ?'status' => PipelineStatus,
  ?'thumbnail_config' => PipelineOutputConfig,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->aws_kms_key_arn = $aws_kms_key_arn ?? ;
    $this->content_config = $content_config ?? ;
    $this->id = $id ?? "";
    $this->input_bucket = $input_bucket ?? ;
    $this->name = $name ?? "";
    $this->notifications = $notifications ?? null;
    $this->output_bucket = $output_bucket ?? ;
    $this->role = $role ?? "";
    $this->status = $status ?? ;
    $this->thumbnail_config = $thumbnail_config ?? ;
  }
}

class PipelineOutputConfig {
  public BucketName $bucket;
  public Permissions $permissions;
  public StorageClass $storage_class;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'permissions' => Permissions,
  ?'storage_class' => StorageClass,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->permissions = $permissions ?? [];
    $this->storage_class = $storage_class ?? "";
  }
}

type PipelineStatus = string;

type Pipelines = vec<Pipeline>;

type PixelsOrPercent = string;

class PlayReadyDrm {
  public PlayReadyDrmFormatString $format;
  public ZeroTo255String $initialization_vector;
  public NonEmptyBase64EncodedString $key;
  public KeyIdGuid $key_id;
  public NonEmptyBase64EncodedString $key_md_5;
  public OneTo512String $license_acquisition_url;

  public function __construct(shape(
  ?'format' => PlayReadyDrmFormatString,
  ?'initialization_vector' => ZeroTo255String,
  ?'key' => NonEmptyBase64EncodedString,
  ?'key_id' => KeyIdGuid,
  ?'key_md_5' => NonEmptyBase64EncodedString,
  ?'license_acquisition_url' => OneTo512String,
  ) $s = shape()) {
    $this->format = $format ?? ;
    $this->initialization_vector = $initialization_vector ?? ;
    $this->key = $key ?? "";
    $this->key_id = $key_id ?? ;
    $this->key_md_5 = $key_md_5 ?? ;
    $this->license_acquisition_url = $license_acquisition_url ?? ;
  }
}

type PlayReadyDrmFormatString = string;

class Playlist {
  public PlaylistFormat $format;
  public HlsContentProtection $hls_content_protection;
  public Filename $name;
  public OutputKeys $output_keys;
  public PlayReadyDrm $play_ready_drm;
  public JobStatus $status;
  public Description $status_detail;

  public function __construct(shape(
  ?'format' => PlaylistFormat,
  ?'hls_content_protection' => HlsContentProtection,
  ?'name' => Filename,
  ?'output_keys' => OutputKeys,
  ?'play_ready_drm' => PlayReadyDrm,
  ?'status' => JobStatus,
  ?'status_detail' => Description,
  ) $s = shape()) {
    $this->format = $format ?? ;
    $this->hls_content_protection = $hls_content_protection ?? null;
    $this->name = $name ?? "";
    $this->output_keys = $output_keys ?? [];
    $this->play_ready_drm = $play_ready_drm ?? null;
    $this->status = $status ?? ;
    $this->status_detail = $status_detail ?? ;
  }
}

type PlaylistFormat = string;

type Playlists = vec<Playlist>;

class Preset {
  public string $arn;
  public AudioParameters $audio;
  public PresetContainer $container;
  public Description $description;
  public Id $id;
  public Name $name;
  public Thumbnails $thumbnails;
  public PresetType $type;
  public VideoParameters $video;

  public function __construct(shape(
  ?'arn' => string,
  ?'audio' => AudioParameters,
  ?'container' => PresetContainer,
  ?'description' => Description,
  ?'id' => Id,
  ?'name' => Name,
  ?'thumbnails' => Thumbnails,
  ?'type' => PresetType,
  ?'video' => VideoParameters,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->audio = $audio ?? ;
    $this->container = $container ?? ;
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->thumbnails = $thumbnails ?? null;
    $this->type = $type ?? ;
    $this->video = $video ?? ;
  }
}

type PresetContainer = string;

type PresetType = string;

class PresetWatermark {
  public HorizontalAlign $horizontal_align;
  public PixelsOrPercent $horizontal_offset;
  public PresetWatermarkId $id;
  public PixelsOrPercent $max_height;
  public PixelsOrPercent $max_width;
  public Opacity $opacity;
  public WatermarkSizingPolicy $sizing_policy;
  public Target $target;
  public VerticalAlign $vertical_align;
  public PixelsOrPercent $vertical_offset;

  public function __construct(shape(
  ?'horizontal_align' => HorizontalAlign,
  ?'horizontal_offset' => PixelsOrPercent,
  ?'id' => PresetWatermarkId,
  ?'max_height' => PixelsOrPercent,
  ?'max_width' => PixelsOrPercent,
  ?'opacity' => Opacity,
  ?'sizing_policy' => WatermarkSizingPolicy,
  ?'target' => Target,
  ?'vertical_align' => VerticalAlign,
  ?'vertical_offset' => PixelsOrPercent,
  ) $s = shape()) {
    $this->horizontal_align = $horizontal_align ?? "";
    $this->horizontal_offset = $horizontal_offset ?? ;
    $this->id = $id ?? "";
    $this->max_height = $max_height ?? ;
    $this->max_width = $max_width ?? ;
    $this->opacity = $opacity ?? "";
    $this->sizing_policy = $sizing_policy ?? "";
    $this->target = $target ?? "";
    $this->vertical_align = $vertical_align ?? "";
    $this->vertical_offset = $vertical_offset ?? ;
  }
}

type PresetWatermarkId = string;

type PresetWatermarks = vec<PresetWatermark>;

type Presets = vec<Preset>;

class ReadJobRequest {
  public Id $id;

  public function __construct(shape(
  ?'id' => Id,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class ReadJobResponse {
  public Job $job;

  public function __construct(shape(
  ?'job' => Job,
  ) $s = shape()) {
    $this->job = $job ?? null;
  }
}

class ReadPipelineRequest {
  public Id $id;

  public function __construct(shape(
  ?'id' => Id,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class ReadPipelineResponse {
  public Pipeline $pipeline;
  public Warnings $warnings;

  public function __construct(shape(
  ?'pipeline' => Pipeline,
  ?'warnings' => Warnings,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? null;
    $this->warnings = $warnings ?? [];
  }
}

class ReadPresetRequest {
  public Id $id;

  public function __construct(shape(
  ?'id' => Id,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class ReadPresetResponse {
  public Preset $preset;

  public function __construct(shape(
  ?'preset' => Preset,
  ) $s = shape()) {
    $this->preset = $preset ?? null;
  }
}

type Resolution = string;

class ResourceInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Role = string;

type Rotate = string;

type SizingPolicy = string;

type SnsTopic = string;

type SnsTopics = vec<SnsTopic>;

type StorageClass = string;

type String = string;

type Success = string;

type Target = string;

class TestRoleRequest {
  public BucketName $input_bucket;
  public BucketName $output_bucket;
  public Role $role;
  public SnsTopics $topics;

  public function __construct(shape(
  ?'input_bucket' => BucketName,
  ?'output_bucket' => BucketName,
  ?'role' => Role,
  ?'topics' => SnsTopics,
  ) $s = shape()) {
    $this->input_bucket = $input_bucket ?? ;
    $this->output_bucket = $output_bucket ?? ;
    $this->role = $role ?? "";
    $this->topics = $topics ?? ;
  }
}

class TestRoleResponse {
  public ExceptionMessages $messages;
  public Success $success;

  public function __construct(shape(
  ?'messages' => ExceptionMessages,
  ?'success' => Success,
  ) $s = shape()) {
    $this->messages = $messages ?? ;
    $this->success = $success ?? "";
  }
}

type ThumbnailPattern = string;

type ThumbnailResolution = string;

class Thumbnails {
  public AspectRatio $aspect_ratio;
  public JpgOrPng $format;
  public Digits $interval;
  public DigitsOrAuto $max_height;
  public DigitsOrAuto $max_width;
  public PaddingPolicy $padding_policy;
  public ThumbnailResolution $resolution;
  public SizingPolicy $sizing_policy;

  public function __construct(shape(
  ?'aspect_ratio' => AspectRatio,
  ?'format' => JpgOrPng,
  ?'interval' => Digits,
  ?'max_height' => DigitsOrAuto,
  ?'max_width' => DigitsOrAuto,
  ?'padding_policy' => PaddingPolicy,
  ?'resolution' => ThumbnailResolution,
  ?'sizing_policy' => SizingPolicy,
  ) $s = shape()) {
    $this->aspect_ratio = $aspect_ratio ?? "";
    $this->format = $format ?? ;
    $this->interval = $interval ?? ;
    $this->max_height = $max_height ?? ;
    $this->max_width = $max_width ?? ;
    $this->padding_policy = $padding_policy ?? "";
    $this->resolution = $resolution ?? "";
    $this->sizing_policy = $sizing_policy ?? "";
  }
}

type Time = string;

type TimeOffset = string;

class TimeSpan {
  public Time $duration;
  public Time $start_time;

  public function __construct(shape(
  ?'duration' => Time,
  ?'start_time' => Time,
  ) $s = shape()) {
    $this->duration = $duration ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class Timing {
  public NullableLong $finish_time_millis;
  public NullableLong $start_time_millis;
  public NullableLong $submit_time_millis;

  public function __construct(shape(
  ?'finish_time_millis' => NullableLong,
  ?'start_time_millis' => NullableLong,
  ?'submit_time_millis' => NullableLong,
  ) $s = shape()) {
    $this->finish_time_millis = $finish_time_millis ?? ;
    $this->start_time_millis = $start_time_millis ?? ;
    $this->submit_time_millis = $submit_time_millis ?? ;
  }
}

class UpdatePipelineNotificationsRequest {
  public Id $id;
  public Notifications $notifications;

  public function __construct(shape(
  ?'id' => Id,
  ?'notifications' => Notifications,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->notifications = $notifications ?? null;
  }
}

class UpdatePipelineNotificationsResponse {
  public Pipeline $pipeline;

  public function __construct(shape(
  ?'pipeline' => Pipeline,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? null;
  }
}

class UpdatePipelineRequest {
  public KeyArn $aws_kms_key_arn;
  public PipelineOutputConfig $content_config;
  public Id $id;
  public BucketName $input_bucket;
  public Name $name;
  public Notifications $notifications;
  public Role $role;
  public PipelineOutputConfig $thumbnail_config;

  public function __construct(shape(
  ?'aws_kms_key_arn' => KeyArn,
  ?'content_config' => PipelineOutputConfig,
  ?'id' => Id,
  ?'input_bucket' => BucketName,
  ?'name' => Name,
  ?'notifications' => Notifications,
  ?'role' => Role,
  ?'thumbnail_config' => PipelineOutputConfig,
  ) $s = shape()) {
    $this->aws_kms_key_arn = $aws_kms_key_arn ?? ;
    $this->content_config = $content_config ?? ;
    $this->id = $id ?? "";
    $this->input_bucket = $input_bucket ?? ;
    $this->name = $name ?? "";
    $this->notifications = $notifications ?? null;
    $this->role = $role ?? "";
    $this->thumbnail_config = $thumbnail_config ?? ;
  }
}

class UpdatePipelineResponse {
  public Pipeline $pipeline;
  public Warnings $warnings;

  public function __construct(shape(
  ?'pipeline' => Pipeline,
  ?'warnings' => Warnings,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? null;
    $this->warnings = $warnings ?? [];
  }
}

class UpdatePipelineStatusRequest {
  public Id $id;
  public PipelineStatus $status;

  public function __construct(shape(
  ?'id' => Id,
  ?'status' => PipelineStatus,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->status = $status ?? ;
  }
}

class UpdatePipelineStatusResponse {
  public Pipeline $pipeline;

  public function __construct(shape(
  ?'pipeline' => Pipeline,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? null;
  }
}

type UserMetadata = dict<String, String>;

class ValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type VerticalAlign = string;

type VideoBitRate = string;

type VideoCodec = string;

class VideoParameters {
  public AspectRatio $aspect_ratio;
  public VideoBitRate $bit_rate;
  public VideoCodec $codec;
  public CodecOptions $codec_options;
  public AspectRatio $display_aspect_ratio;
  public FixedGOP $fixed_gop;
  public FrameRate $frame_rate;
  public KeyframesMaxDist $keyframes_max_dist;
  public MaxFrameRate $max_frame_rate;
  public DigitsOrAuto $max_height;
  public DigitsOrAuto $max_width;
  public PaddingPolicy $padding_policy;
  public Resolution $resolution;
  public SizingPolicy $sizing_policy;
  public PresetWatermarks $watermarks;

  public function __construct(shape(
  ?'aspect_ratio' => AspectRatio,
  ?'bit_rate' => VideoBitRate,
  ?'codec' => VideoCodec,
  ?'codec_options' => CodecOptions,
  ?'display_aspect_ratio' => AspectRatio,
  ?'fixed_gop' => FixedGOP,
  ?'frame_rate' => FrameRate,
  ?'keyframes_max_dist' => KeyframesMaxDist,
  ?'max_frame_rate' => MaxFrameRate,
  ?'max_height' => DigitsOrAuto,
  ?'max_width' => DigitsOrAuto,
  ?'padding_policy' => PaddingPolicy,
  ?'resolution' => Resolution,
  ?'sizing_policy' => SizingPolicy,
  ?'watermarks' => PresetWatermarks,
  ) $s = shape()) {
    $this->aspect_ratio = $aspect_ratio ?? "";
    $this->bit_rate = $bit_rate ?? ;
    $this->codec = $codec ?? ;
    $this->codec_options = $codec_options ?? [];
    $this->display_aspect_ratio = $display_aspect_ratio ?? ;
    $this->fixed_gop = $fixed_gop ?? "";
    $this->frame_rate = $frame_rate ?? "";
    $this->keyframes_max_dist = $keyframes_max_dist ?? "";
    $this->max_frame_rate = $max_frame_rate ?? "";
    $this->max_height = $max_height ?? ;
    $this->max_width = $max_width ?? ;
    $this->padding_policy = $padding_policy ?? "";
    $this->resolution = $resolution ?? "";
    $this->sizing_policy = $sizing_policy ?? "";
    $this->watermarks = $watermarks ?? ;
  }
}

class Warning {
  public string $code;
  public string $message;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type Warnings = vec<Warning>;

type WatermarkKey = string;

type WatermarkSizingPolicy = string;

type ZeroTo255String = string;

type ZeroTo512String = string;

