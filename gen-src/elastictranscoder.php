<?hh // strict
namespace slack\aws\elastictranscoder;

interface Elastic Transcoder {
  public function ListJobsByStatus(ListJobsByStatusRequest) Awaitable<Errors\Result<ListJobsByStatusResponse>>;
  public function CancelJob(CancelJobRequest) Awaitable<Errors\Result<CancelJobResponse>>;
  public function DeletePreset(DeletePresetRequest) Awaitable<Errors\Result<DeletePresetResponse>>;
  public function ListJobsByPipeline(ListJobsByPipelineRequest) Awaitable<Errors\Result<ListJobsByPipelineResponse>>;
  public function UpdatePipeline(UpdatePipelineRequest) Awaitable<Errors\Result<UpdatePipelineResponse>>;
  public function UpdatePipelineNotifications(UpdatePipelineNotificationsRequest) Awaitable<Errors\Result<UpdatePipelineNotificationsResponse>>;
  public function UpdatePipelineStatus(UpdatePipelineStatusRequest) Awaitable<Errors\Result<UpdatePipelineStatusResponse>>;
  public function CreateJob(CreateJobRequest) Awaitable<Errors\Result<CreateJobResponse>>;
  public function CreatePreset(CreatePresetRequest) Awaitable<Errors\Result<CreatePresetResponse>>;
  public function TestRole(TestRoleRequest) Awaitable<Errors\Result<TestRoleResponse>>;
  public function ListPresets(ListPresetsRequest) Awaitable<Errors\Result<ListPresetsResponse>>;
  public function ReadPipeline(ReadPipelineRequest) Awaitable<Errors\Result<ReadPipelineResponse>>;
  public function ReadJob(ReadJobRequest) Awaitable<Errors\Result<ReadJobResponse>>;
  public function ReadPreset(ReadPresetRequest) Awaitable<Errors\Result<ReadPresetResponse>>;
  public function CreatePipeline(CreatePipelineRequest) Awaitable<Errors\Result<CreatePipelineResponse>>;
  public function DeletePipeline(DeletePipelineRequest) Awaitable<Errors\Result<DeletePipelineResponse>>;
  public function ListPipelines(ListPipelinesRequest) Awaitable<Errors\Result<ListPipelinesResponse>>;
}

class Resolution {
}

class AudioBitDepth {
}

class MaxFrameRate {
}

class NonEmptyBase64EncodedString {
}

class CreatePresetRequest {
  public Thumbnails $thumbnails;
  public Name $name;
  public Description $description;
  public PresetContainer $container;
  public VideoParameters $video;
  public AudioParameters $audio;
}

class JobContainer {
}

class KeyStoragePolicy {
}

class Target {
}

class AudioBitRate {
}

class AudioCodecProfile {
}

class Base64EncodedString {
}

class JobWatermark {
  public WatermarkKey $input_key;
  public Encryption $encryption;
  public PresetWatermarkId $preset_watermark_id;
}

class JpgOrPng {
}

class LimitExceededException {
}

class LongKey {
}

class Permissions {
}

class CancelJobRequest {
  public Id $id;
}

class CaptionMergePolicy {
}

class CreateJobRequest {
  public CreateJobOutput $output;
  public CreateJobOutputs $outputs;
  public Key $output_key_prefix;
  public CreateJobPlaylists $playlists;
  public UserMetadata $user_metadata;
  public Id $pipeline_id;
  public JobInput $input;
  public JobInputs $inputs;
}

class ResourceNotFoundException {
}

class Role {
}

class JobOutputs {
}

class Pipeline {
  public PipelineOutputConfig $thumbnail_config;
  public Name $name;
  public BucketName $input_bucket;
  public BucketName $output_bucket;
  public KeyArn $aws_kms_key_arn;
  public Notifications $notifications;
  public Id $id;
  public string $arn;
  public PipelineStatus $status;
  public Role $role;
  public PipelineOutputConfig $content_config;
}

class TestRoleRequest {
  public Role $role;
  public BucketName $input_bucket;
  public BucketName $output_bucket;
  public SnsTopics $topics;
}

class TestRoleResponse {
  public Success $success;
  public ExceptionMessages $messages;
}

class TimeSpan {
  public Time $start_time;
  public Time $duration;
}

class Ascending {
}

class CaptionFormat {
  public Encryption $encryption;
  public CaptionFormatFormat $format;
  public CaptionFormatPattern $pattern;
}

class CaptionFormatFormat {
}

class Playlists {
}

class Presets {
}

class Thumbnails {
  public DigitsOrAuto $max_height;
  public SizingPolicy $sizing_policy;
  public PaddingPolicy $padding_policy;
  public JpgOrPng $format;
  public Digits $interval;
  public ThumbnailResolution $resolution;
  public AspectRatio $aspect_ratio;
  public DigitsOrAuto $max_width;
}

class UpdatePipelineStatusResponse {
  public Pipeline $pipeline;
}

class Composition {
}

class GranteeType {
}

class ListPresetsResponse {
  public Presets $presets;
  public Id $next_page_token;
}

class ReadPipelineResponse {
  public Pipeline $pipeline;
  public Warnings $warnings;
}

class AudioParameters {
  public AudioChannels $channels;
  public AudioPackingMode $audio_packing_mode;
  public AudioCodecOptions $codec_options;
  public AudioCodec $codec;
  public AudioSampleRate $sample_rate;
  public AudioBitRate $bit_rate;
}

class CreateJobPlaylists {
}

class JobStatus {
}

class Permission {
  public GranteeType $grantee_type;
  public Grantee $grantee;
  public AccessControls $access;
}

class VideoBitRate {
}

class CreatePresetResponse {
  public Preset $preset;
  public string $warning;
}

class JobOutput {
  public NullableLong $duration_millis;
  public Captions $captions;
  public string $id;
  public Id $preset_id;
  public NullableLong $file_size;
  public JobWatermarks $watermarks;
  public Encryption $encryption;
  public Key $key;
  public NullableInteger $width;
  public FloatString $frame_rate;
  public NullableLong $duration;
  public NullableInteger $height;
  public JobAlbumArt $album_art;
  public string $applied_color_space_conversion;
  public ThumbnailPattern $thumbnail_pattern;
  public Encryption $thumbnail_encryption;
  public JobStatus $status;
  public Composition $composition;
  public Rotate $rotate;
  public FloatString $segment_duration;
  public Description $status_detail;
}

class OneTo512String {
}

class KeyArn {
}

class ListJobsByStatusResponse {
  public Jobs $jobs;
  public Id $next_page_token;
}

class ReadPipelineRequest {
  public Id $id;
}

class WatermarkSizingPolicy {
}

class CancelJobResponse {
}

class CodecOptions {
}

class Description {
}

class HlsContentProtection {
  public ZeroTo255String $initialization_vector;
  public ZeroTo512String $license_acquisition_url;
  public KeyStoragePolicy $key_storage_policy;
  public HlsContentProtectionMethod $method;
  public Base64EncodedString $key;
  public Base64EncodedString $key_md_5;
}

class HorizontalAlign {
}

class ThumbnailPattern {
}

class PresetContainer {
}

class Job {
  public JobStatus $status;
  public Id $pipeline_id;
  public JobInput $input;
  public JobInputs $inputs;
  public JobOutput $output;
  public JobOutputs $outputs;
  public Key $output_key_prefix;
  public Playlists $playlists;
  public UserMetadata $user_metadata;
  public Id $id;
  public string $arn;
  public Timing $timing;
}

class JobInput {
  public DetectedProperties $detected_properties;
  public LongKey $key;
  public AspectRatio $aspect_ratio;
  public Encryption $encryption;
  public TimeSpan $time_span;
  public InputCaptions $input_captions;
  public FrameRate $frame_rate;
  public Resolution $resolution;
  public Interlaced $interlaced;
  public JobContainer $container;
}

class NullableInteger {
}

class SnsTopic {
}

class WatermarkKey {
}

class DigitsOrAuto {
}

class EncryptionMode {
}

class HlsContentProtectionMethod {
}

class InternalServiceException {
}

class ListJobsByPipelineRequest {
  public Ascending $ascending;
  public Id $page_token;
  public Id $pipeline_id;
}

class PaddingPolicy {
}

class DeletePresetResponse {
}

class String {
}

class CaptionFormatPattern {
}

class CodecOption {
}

class ListPresetsRequest {
  public Ascending $ascending;
  public Id $page_token;
}

class Name {
}

class PlayReadyDrm {
  public PlayReadyDrmFormatString $format;
  public NonEmptyBase64EncodedString $key;
  public NonEmptyBase64EncodedString $key_md_5;
  public KeyIdGuid $key_id;
  public ZeroTo255String $initialization_vector;
  public OneTo512String $license_acquisition_url;
}

class AspectRatio {
}

class AudioBitOrder {
}

class AudioSigned {
}

class UpdatePipelineResponse {
  public Pipeline $pipeline;
  public Warnings $warnings;
}

class ListPipelinesResponse {
  public Pipelines $pipelines;
  public Id $next_page_token;
}

class UpdatePipelineStatusRequest {
  public Id $id;
  public PipelineStatus $status;
}

class VideoParameters {
  public DigitsOrAuto $max_height;
  public AspectRatio $display_aspect_ratio;
  public Resolution $resolution;
  public FixedGOP $fixed_gop;
  public MaxFrameRate $max_frame_rate;
  public SizingPolicy $sizing_policy;
  public PresetWatermarks $watermarks;
  public FrameRate $frame_rate;
  public DigitsOrAuto $max_width;
  public KeyframesMaxDist $keyframes_max_dist;
  public VideoBitRate $bit_rate;
  public AspectRatio $aspect_ratio;
  public PaddingPolicy $padding_policy;
  public VideoCodec $codec;
  public CodecOptions $codec_options;
}

class Rotate {
}

class Timing {
  public NullableLong $submit_time_millis;
  public NullableLong $start_time_millis;
  public NullableLong $finish_time_millis;
}

class UpdatePipelineNotificationsResponse {
  public Pipeline $pipeline;
}

class CreateJobOutput {
  public Encryption $thumbnail_encryption;
  public Id $preset_id;
  public JobWatermarks $watermarks;
  public Composition $composition;
  public Encryption $encryption;
  public Key $key;
  public ThumbnailPattern $thumbnail_pattern;
  public Rotate $rotate;
  public FloatString $segment_duration;
  public JobAlbumArt $album_art;
  public Captions $captions;
}

class IncompatibleVersionException {
}

class ReadJobRequest {
  public Id $id;
}

class JobWatermarks {
}

class Jobs {
}

class ValidationException {
}

class BucketName {
}

class ExceptionMessages {
}

class Grantee {
}

class DetectedProperties {
  public NullableInteger $width;
  public NullableInteger $height;
  public FloatString $frame_rate;
  public NullableLong $file_size;
  public NullableLong $duration_millis;
}

class Id {
}

class PresetWatermark {
  public VerticalAlign $vertical_align;
  public Target $target;
  public WatermarkSizingPolicy $sizing_policy;
  public PixelsOrPercent $horizontal_offset;
  public PixelsOrPercent $max_height;
  public HorizontalAlign $horizontal_align;
  public PixelsOrPercent $vertical_offset;
  public Opacity $opacity;
  public PresetWatermarkId $id;
  public PixelsOrPercent $max_width;
}

class UserMetadata {
}

class AccessControl {
}

class AudioChannels {
}

class CaptionFormats {
}

class ReadJobResponse {
  public Job $job;
}

class Warning {
  public string $code;
  public string $message;
}

class CreatePipelineRequest {
  public BucketName $input_bucket;
  public BucketName $output_bucket;
  public Role $role;
  public KeyArn $aws_kms_key_arn;
  public Notifications $notifications;
  public PipelineOutputConfig $content_config;
  public PipelineOutputConfig $thumbnail_config;
  public Name $name;
}

class PipelineStatus {
}

class Pipelines {
}

class JobInputs {
}

class Key {
}

class Artwork {
  public WatermarkKey $input_key;
  public DigitsOrAuto $max_width;
  public DigitsOrAuto $max_height;
  public SizingPolicy $sizing_policy;
  public PaddingPolicy $padding_policy;
  public JpgOrPng $album_art_format;
  public Encryption $encryption;
}

class Clip {
  public TimeSpan $time_span;
}

class FloatString {
}

class FixedGOP {
}

class PlaylistFormat {
}

class SnsTopics {
}

class CreateJobPlaylist {
  public HlsContentProtection $hls_content_protection;
  public PlayReadyDrm $play_ready_drm;
  public Filename $name;
  public PlaylistFormat $format;
  public OutputKeys $output_keys;
}

class DeletePipelineRequest {
  public Id $id;
}

class Digits {
}

class SizingPolicy {
}

class VideoCodec {
}

class ZeroTo512String {
}

class AudioPackingMode {
}

class PipelineOutputConfig {
  public StorageClass $storage_class;
  public Permissions $permissions;
  public BucketName $bucket;
}

class ReadPresetResponse {
  public Preset $preset;
}

class AudioSampleRate {
}

class Playlist {
  public OutputKeys $output_keys;
  public HlsContentProtection $hls_content_protection;
  public PlayReadyDrm $play_ready_drm;
  public JobStatus $status;
  public Description $status_detail;
  public Filename $name;
  public PlaylistFormat $format;
}

class Filename {
}

class UpdatePipelineNotificationsRequest {
  public Id $id;
  public Notifications $notifications;
}

class CaptionSource {
  public LongKey $key;
  public Key $language;
  public TimeOffset $time_offset;
  public Name $label;
  public Encryption $encryption;
}

class DeletePresetRequest {
  public Id $id;
}

class Encryption {
  public Base64EncodedString $key_md_5;
  public ZeroTo255String $initialization_vector;
  public EncryptionMode $mode;
  public Base64EncodedString $key;
}

class PlayReadyDrmFormatString {
}

class ReadPresetRequest {
  public Id $id;
}

class ThumbnailResolution {
}

class Time {
}

class TimeOffset {
}

class AccessDeniedException {
}

class CaptionSources {
}

class DeletePipelineResponse {
}

class Notifications {
  public SnsTopic $progressing;
  public SnsTopic $completed;
  public SnsTopic $warning;
  public SnsTopic $error;
}

class Opacity {
}

class PresetWatermarkId {
}

class Success {
}

class FrameRate {
}

class JobAlbumArt {
  public MergePolicy $merge_policy;
  public Artworks $artwork;
}

class ListPipelinesRequest {
  public Ascending $ascending;
  public Id $page_token;
}

class VerticalAlign {
}

class CreatePipelineResponse {
  public Pipeline $pipeline;
  public Warnings $warnings;
}

class PresetType {
}

class UpdatePipelineRequest {
  public Notifications $notifications;
  public PipelineOutputConfig $content_config;
  public PipelineOutputConfig $thumbnail_config;
  public Id $id;
  public Name $name;
  public BucketName $input_bucket;
  public Role $role;
  public KeyArn $aws_kms_key_arn;
}

class InputCaptions {
  public CaptionMergePolicy $merge_policy;
  public CaptionSources $caption_sources;
}

class KeyIdGuid {
}

class PresetWatermarks {
}

class ResourceInUseException {
}

class ListJobsByStatusRequest {
  public JobStatus $status;
  public Ascending $ascending;
  public Id $page_token;
}

class MergePolicy {
}

class PixelsOrPercent {
}

class KeyframesMaxDist {
}

class ListJobsByPipelineResponse {
  public Jobs $jobs;
  public Id $next_page_token;
}

class NullableLong {
}

class OutputKeys {
}

class StorageClass {
}

class AudioCodecOptions {
  public AudioCodecProfile $profile;
  public AudioBitDepth $bit_depth;
  public AudioBitOrder $bit_order;
  public AudioSigned $signed;
}

class CreateJobResponse {
  public Job $job;
}

class Interlaced {
}

class Warnings {
}

class ZeroTo255String {
}

class Captions {
  public CaptionMergePolicy $merge_policy;
  public CaptionSources $caption_sources;
  public CaptionFormats $caption_formats;
}

class CreateJobOutputs {
}

class Preset {
  public string $arn;
  public Description $description;
  public AudioParameters $audio;
  public VideoParameters $video;
  public Id $id;
  public PresetContainer $container;
  public Thumbnails $thumbnails;
  public PresetType $type;
  public Name $name;
}

class AccessControls {
}

class Artworks {
}

class AudioCodec {
}

