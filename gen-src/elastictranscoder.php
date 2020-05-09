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

class AccessControl {
}

class AccessControls {
}

class AccessDeniedException {
}

class Artwork {
  public JpgOrPng $album_art_format;
  public Encryption $encryption;
  public WatermarkKey $input_key;
  public DigitsOrAuto $max_height;
  public DigitsOrAuto $max_width;
  public PaddingPolicy $padding_policy;
  public SizingPolicy $sizing_policy;
}

class Artworks {
}

class Ascending {
}

class AspectRatio {
}

class AudioBitDepth {
}

class AudioBitOrder {
}

class AudioBitRate {
}

class AudioChannels {
}

class AudioCodec {
}

class AudioCodecOptions {
  public AudioBitDepth $bit_depth;
  public AudioBitOrder $bit_order;
  public AudioCodecProfile $profile;
  public AudioSigned $signed;
}

class AudioCodecProfile {
}

class AudioPackingMode {
}

class AudioParameters {
  public AudioPackingMode $audio_packing_mode;
  public AudioBitRate $bit_rate;
  public AudioChannels $channels;
  public AudioCodec $codec;
  public AudioCodecOptions $codec_options;
  public AudioSampleRate $sample_rate;
}

class AudioSampleRate {
}

class AudioSigned {
}

class Base64EncodedString {
}

class BucketName {
}

class CancelJobRequest {
  public Id $id;
}

class CancelJobResponse {
}

class CaptionFormat {
  public Encryption $encryption;
  public CaptionFormatFormat $format;
  public CaptionFormatPattern $pattern;
}

class CaptionFormatFormat {
}

class CaptionFormatPattern {
}

class CaptionFormats {
}

class CaptionMergePolicy {
}

class CaptionSource {
  public Encryption $encryption;
  public LongKey $key;
  public Name $label;
  public Key $language;
  public TimeOffset $time_offset;
}

class CaptionSources {
}

class Captions {
  public CaptionFormats $caption_formats;
  public CaptionSources $caption_sources;
  public CaptionMergePolicy $merge_policy;
}

class Clip {
  public TimeSpan $time_span;
}

class CodecOption {
}

class CodecOptions {
}

class Composition {
}

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
}

class CreateJobOutputs {
}

class CreateJobPlaylist {
  public PlaylistFormat $format;
  public HlsContentProtection $hls_content_protection;
  public Filename $name;
  public OutputKeys $output_keys;
  public PlayReadyDrm $play_ready_drm;
}

class CreateJobPlaylists {
}

class CreateJobRequest {
  public JobInput $input;
  public JobInputs $inputs;
  public CreateJobOutput $output;
  public Key $output_key_prefix;
  public CreateJobOutputs $outputs;
  public Id $pipeline_id;
  public CreateJobPlaylists $playlists;
  public UserMetadata $user_metadata;
}

class CreateJobResponse {
  public Job $job;
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
}

class CreatePipelineResponse {
  public Pipeline $pipeline;
  public Warnings $warnings;
}

class CreatePresetRequest {
  public AudioParameters $audio;
  public PresetContainer $container;
  public Description $description;
  public Name $name;
  public Thumbnails $thumbnails;
  public VideoParameters $video;
}

class CreatePresetResponse {
  public Preset $preset;
  public string $warning;
}

class DeletePipelineRequest {
  public Id $id;
}

class DeletePipelineResponse {
}

class DeletePresetRequest {
  public Id $id;
}

class DeletePresetResponse {
}

class Description {
}

class DetectedProperties {
  public NullableLong $duration_millis;
  public NullableLong $file_size;
  public FloatString $frame_rate;
  public NullableInteger $height;
  public NullableInteger $width;
}

class Digits {
}

class DigitsOrAuto {
}

class Encryption {
  public ZeroTo255String $initialization_vector;
  public Base64EncodedString $key;
  public Base64EncodedString $key_md_5;
  public EncryptionMode $mode;
}

class EncryptionMode {
}

class ExceptionMessages {
}

class Filename {
}

class FixedGOP {
}

class FloatString {
}

class FrameRate {
}

class Grantee {
}

class GranteeType {
}

class HlsContentProtection {
  public ZeroTo255String $initialization_vector;
  public Base64EncodedString $key;
  public Base64EncodedString $key_md_5;
  public KeyStoragePolicy $key_storage_policy;
  public ZeroTo512String $license_acquisition_url;
  public HlsContentProtectionMethod $method;
}

class HlsContentProtectionMethod {
}

class HorizontalAlign {
}

class Id {
}

class IncompatibleVersionException {
}

class InputCaptions {
  public CaptionSources $caption_sources;
  public CaptionMergePolicy $merge_policy;
}

class Interlaced {
}

class InternalServiceException {
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
}

class JobAlbumArt {
  public Artworks $artwork;
  public MergePolicy $merge_policy;
}

class JobContainer {
}

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
}

class JobInputs {
}

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
}

class JobOutputs {
}

class JobStatus {
}

class JobWatermark {
  public Encryption $encryption;
  public WatermarkKey $input_key;
  public PresetWatermarkId $preset_watermark_id;
}

class JobWatermarks {
}

class Jobs {
}

class JpgOrPng {
}

class Key {
}

class KeyArn {
}

class KeyIdGuid {
}

class KeyStoragePolicy {
}

class KeyframesMaxDist {
}

class LimitExceededException {
}

class ListJobsByPipelineRequest {
  public Ascending $ascending;
  public Id $page_token;
  public Id $pipeline_id;
}

class ListJobsByPipelineResponse {
  public Jobs $jobs;
  public Id $next_page_token;
}

class ListJobsByStatusRequest {
  public Ascending $ascending;
  public Id $page_token;
  public JobStatus $status;
}

class ListJobsByStatusResponse {
  public Jobs $jobs;
  public Id $next_page_token;
}

class ListPipelinesRequest {
  public Ascending $ascending;
  public Id $page_token;
}

class ListPipelinesResponse {
  public Id $next_page_token;
  public Pipelines $pipelines;
}

class ListPresetsRequest {
  public Ascending $ascending;
  public Id $page_token;
}

class ListPresetsResponse {
  public Id $next_page_token;
  public Presets $presets;
}

class LongKey {
}

class MaxFrameRate {
}

class MergePolicy {
}

class Name {
}

class NonEmptyBase64EncodedString {
}

class Notifications {
  public SnsTopic $completed;
  public SnsTopic $error;
  public SnsTopic $progressing;
  public SnsTopic $warning;
}

class NullableInteger {
}

class NullableLong {
}

class OneTo512String {
}

class Opacity {
}

class OutputKeys {
}

class PaddingPolicy {
}

class Permission {
  public AccessControls $access;
  public Grantee $grantee;
  public GranteeType $grantee_type;
}

class Permissions {
}

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
}

class PipelineOutputConfig {
  public BucketName $bucket;
  public Permissions $permissions;
  public StorageClass $storage_class;
}

class PipelineStatus {
}

class Pipelines {
}

class PixelsOrPercent {
}

class PlayReadyDrm {
  public PlayReadyDrmFormatString $format;
  public ZeroTo255String $initialization_vector;
  public NonEmptyBase64EncodedString $key;
  public KeyIdGuid $key_id;
  public NonEmptyBase64EncodedString $key_md_5;
  public OneTo512String $license_acquisition_url;
}

class PlayReadyDrmFormatString {
}

class Playlist {
  public PlaylistFormat $format;
  public HlsContentProtection $hls_content_protection;
  public Filename $name;
  public OutputKeys $output_keys;
  public PlayReadyDrm $play_ready_drm;
  public JobStatus $status;
  public Description $status_detail;
}

class PlaylistFormat {
}

class Playlists {
}

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
}

class PresetContainer {
}

class PresetType {
}

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
}

class PresetWatermarkId {
}

class PresetWatermarks {
}

class Presets {
}

class ReadJobRequest {
  public Id $id;
}

class ReadJobResponse {
  public Job $job;
}

class ReadPipelineRequest {
  public Id $id;
}

class ReadPipelineResponse {
  public Pipeline $pipeline;
  public Warnings $warnings;
}

class ReadPresetRequest {
  public Id $id;
}

class ReadPresetResponse {
  public Preset $preset;
}

class Resolution {
}

class ResourceInUseException {
}

class ResourceNotFoundException {
}

class Role {
}

class Rotate {
}

class SizingPolicy {
}

class SnsTopic {
}

class SnsTopics {
}

class StorageClass {
}

class String {
}

class Success {
}

class Target {
}

class TestRoleRequest {
  public BucketName $input_bucket;
  public BucketName $output_bucket;
  public Role $role;
  public SnsTopics $topics;
}

class TestRoleResponse {
  public ExceptionMessages $messages;
  public Success $success;
}

class ThumbnailPattern {
}

class ThumbnailResolution {
}

class Thumbnails {
  public AspectRatio $aspect_ratio;
  public JpgOrPng $format;
  public Digits $interval;
  public DigitsOrAuto $max_height;
  public DigitsOrAuto $max_width;
  public PaddingPolicy $padding_policy;
  public ThumbnailResolution $resolution;
  public SizingPolicy $sizing_policy;
}

class Time {
}

class TimeOffset {
}

class TimeSpan {
  public Time $duration;
  public Time $start_time;
}

class Timing {
  public NullableLong $finish_time_millis;
  public NullableLong $start_time_millis;
  public NullableLong $submit_time_millis;
}

class UpdatePipelineNotificationsRequest {
  public Id $id;
  public Notifications $notifications;
}

class UpdatePipelineNotificationsResponse {
  public Pipeline $pipeline;
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
}

class UpdatePipelineResponse {
  public Pipeline $pipeline;
  public Warnings $warnings;
}

class UpdatePipelineStatusRequest {
  public Id $id;
  public PipelineStatus $status;
}

class UpdatePipelineStatusResponse {
  public Pipeline $pipeline;
}

class UserMetadata {
}

class ValidationException {
}

class VerticalAlign {
}

class VideoBitRate {
}

class VideoCodec {
}

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
}

class Warning {
  public string $code;
  public string $message;
}

class Warnings {
}

class WatermarkKey {
}

class WatermarkSizingPolicy {
}

class ZeroTo255String {
}

class ZeroTo512String {
}

