<?hh // strict
namespace slack\aws\rekognition;

interface Rekognition {
  public function CompareFaces(CompareFacesRequest): Awaitable<Errors\Result<CompareFacesResponse>>;
  public function CreateCollection(CreateCollectionRequest): Awaitable<Errors\Result<CreateCollectionResponse>>;
  public function CreateProject(CreateProjectRequest): Awaitable<Errors\Result<CreateProjectResponse>>;
  public function CreateProjectVersion(CreateProjectVersionRequest): Awaitable<Errors\Result<CreateProjectVersionResponse>>;
  public function CreateStreamProcessor(CreateStreamProcessorRequest): Awaitable<Errors\Result<CreateStreamProcessorResponse>>;
  public function DeleteCollection(DeleteCollectionRequest): Awaitable<Errors\Result<DeleteCollectionResponse>>;
  public function DeleteFaces(DeleteFacesRequest): Awaitable<Errors\Result<DeleteFacesResponse>>;
  public function DeleteProject(DeleteProjectRequest): Awaitable<Errors\Result<DeleteProjectResponse>>;
  public function DeleteProjectVersion(DeleteProjectVersionRequest): Awaitable<Errors\Result<DeleteProjectVersionResponse>>;
  public function DeleteStreamProcessor(DeleteStreamProcessorRequest): Awaitable<Errors\Result<DeleteStreamProcessorResponse>>;
  public function DescribeCollection(DescribeCollectionRequest): Awaitable<Errors\Result<DescribeCollectionResponse>>;
  public function DescribeProjectVersions(DescribeProjectVersionsRequest): Awaitable<Errors\Result<DescribeProjectVersionsResponse>>;
  public function DescribeProjects(DescribeProjectsRequest): Awaitable<Errors\Result<DescribeProjectsResponse>>;
  public function DescribeStreamProcessor(DescribeStreamProcessorRequest): Awaitable<Errors\Result<DescribeStreamProcessorResponse>>;
  public function DetectCustomLabels(DetectCustomLabelsRequest): Awaitable<Errors\Result<DetectCustomLabelsResponse>>;
  public function DetectFaces(DetectFacesRequest): Awaitable<Errors\Result<DetectFacesResponse>>;
  public function DetectLabels(DetectLabelsRequest): Awaitable<Errors\Result<DetectLabelsResponse>>;
  public function DetectModerationLabels(DetectModerationLabelsRequest): Awaitable<Errors\Result<DetectModerationLabelsResponse>>;
  public function DetectText(DetectTextRequest): Awaitable<Errors\Result<DetectTextResponse>>;
  public function GetCelebrityInfo(GetCelebrityInfoRequest): Awaitable<Errors\Result<GetCelebrityInfoResponse>>;
  public function GetCelebrityRecognition(GetCelebrityRecognitionRequest): Awaitable<Errors\Result<GetCelebrityRecognitionResponse>>;
  public function GetContentModeration(GetContentModerationRequest): Awaitable<Errors\Result<GetContentModerationResponse>>;
  public function GetFaceDetection(GetFaceDetectionRequest): Awaitable<Errors\Result<GetFaceDetectionResponse>>;
  public function GetFaceSearch(GetFaceSearchRequest): Awaitable<Errors\Result<GetFaceSearchResponse>>;
  public function GetLabelDetection(GetLabelDetectionRequest): Awaitable<Errors\Result<GetLabelDetectionResponse>>;
  public function GetPersonTracking(GetPersonTrackingRequest): Awaitable<Errors\Result<GetPersonTrackingResponse>>;
  public function GetTextDetection(GetTextDetectionRequest): Awaitable<Errors\Result<GetTextDetectionResponse>>;
  public function IndexFaces(IndexFacesRequest): Awaitable<Errors\Result<IndexFacesResponse>>;
  public function ListCollections(ListCollectionsRequest): Awaitable<Errors\Result<ListCollectionsResponse>>;
  public function ListFaces(ListFacesRequest): Awaitable<Errors\Result<ListFacesResponse>>;
  public function ListStreamProcessors(ListStreamProcessorsRequest): Awaitable<Errors\Result<ListStreamProcessorsResponse>>;
  public function RecognizeCelebrities(RecognizeCelebritiesRequest): Awaitable<Errors\Result<RecognizeCelebritiesResponse>>;
  public function SearchFaces(SearchFacesRequest): Awaitable<Errors\Result<SearchFacesResponse>>;
  public function SearchFacesByImage(SearchFacesByImageRequest): Awaitable<Errors\Result<SearchFacesByImageResponse>>;
  public function StartCelebrityRecognition(StartCelebrityRecognitionRequest): Awaitable<Errors\Result<StartCelebrityRecognitionResponse>>;
  public function StartContentModeration(StartContentModerationRequest): Awaitable<Errors\Result<StartContentModerationResponse>>;
  public function StartFaceDetection(StartFaceDetectionRequest): Awaitable<Errors\Result<StartFaceDetectionResponse>>;
  public function StartFaceSearch(StartFaceSearchRequest): Awaitable<Errors\Result<StartFaceSearchResponse>>;
  public function StartLabelDetection(StartLabelDetectionRequest): Awaitable<Errors\Result<StartLabelDetectionResponse>>;
  public function StartPersonTracking(StartPersonTrackingRequest): Awaitable<Errors\Result<StartPersonTrackingResponse>>;
  public function StartProjectVersion(StartProjectVersionRequest): Awaitable<Errors\Result<StartProjectVersionResponse>>;
  public function StartStreamProcessor(StartStreamProcessorRequest): Awaitable<Errors\Result<StartStreamProcessorResponse>>;
  public function StartTextDetection(StartTextDetectionRequest): Awaitable<Errors\Result<StartTextDetectionResponse>>;
  public function StopProjectVersion(StopProjectVersionRequest): Awaitable<Errors\Result<StopProjectVersionResponse>>;
  public function StopStreamProcessor(StopStreamProcessorRequest): Awaitable<Errors\Result<StopStreamProcessorResponse>>;
}

class AccessDeniedException {
}

class AgeRange {
  public UInteger $high;
  public UInteger $low;
}

class Asset {
  public GroundTruthManifest $ground_truth_manifest;
}

class Assets {
}

class Attribute {
}

class Attributes {
}

class Beard {
  public Percent $confidence;
  public boolean $value;
}

class Boolean {
}

class BoundingBox {
  public Float $height;
  public Float $left;
  public Float $top;
  public Float $width;
}

class BoundingBoxHeight {
}

class BoundingBoxWidth {
}

class Celebrity {
  public ComparedFace $face;
  public RekognitionUniqueId $id;
  public Percent $match_confidence;
  public string $name;
  public Urls $urls;
}

class CelebrityDetail {
  public BoundingBox $bounding_box;
  public Percent $confidence;
  public FaceDetail $face;
  public RekognitionUniqueId $id;
  public string $name;
  public Urls $urls;
}

class CelebrityList {
}

class CelebrityRecognition {
  public CelebrityDetail $celebrity;
  public Timestamp $timestamp;
}

class CelebrityRecognitionSortBy {
}

class CelebrityRecognitions {
}

class ClientRequestToken {
}

class CollectionId {
}

class CollectionIdList {
}

class CompareFacesMatch {
  public ComparedFace $face;
  public Percent $similarity;
}

class CompareFacesMatchList {
}

class CompareFacesRequest {
  public QualityFilter $quality_filter;
  public Percent $similarity_threshold;
  public Image $source_image;
  public Image $target_image;
}

class CompareFacesResponse {
  public CompareFacesMatchList $face_matches;
  public ComparedSourceImageFace $source_image_face;
  public OrientationCorrection $source_image_orientation_correction;
  public OrientationCorrection $target_image_orientation_correction;
  public CompareFacesUnmatchList $unmatched_faces;
}

class CompareFacesUnmatchList {
}

class ComparedFace {
  public BoundingBox $bounding_box;
  public Percent $confidence;
  public Landmarks $landmarks;
  public Pose $pose;
  public ImageQuality $quality;
}

class ComparedFaceList {
}

class ComparedSourceImageFace {
  public BoundingBox $bounding_box;
  public Percent $confidence;
}

class ContentClassifier {
}

class ContentClassifiers {
}

class ContentModerationDetection {
  public ModerationLabel $moderation_label;
  public Timestamp $timestamp;
}

class ContentModerationDetections {
}

class ContentModerationSortBy {
}

class CreateCollectionRequest {
  public CollectionId $collection_id;
}

class CreateCollectionResponse {
  public string $collection_arn;
  public string $face_model_version;
  public UInteger $status_code;
}

class CreateProjectRequest {
  public ProjectName $project_name;
}

class CreateProjectResponse {
  public ProjectArn $project_arn;
}

class CreateProjectVersionRequest {
  public OutputConfig $output_config;
  public ProjectArn $project_arn;
  public TestingData $testing_data;
  public TrainingData $training_data;
  public VersionName $version_name;
}

class CreateProjectVersionResponse {
  public ProjectVersionArn $project_version_arn;
}

class CreateStreamProcessorRequest {
  public StreamProcessorInput $input;
  public StreamProcessorName $name;
  public StreamProcessorOutput $output;
  public RoleArn $role_arn;
  public StreamProcessorSettings $settings;
}

class CreateStreamProcessorResponse {
  public StreamProcessorArn $stream_processor_arn;
}

class CustomLabel {
  public Percent $confidence;
  public Geometry $geometry;
  public string $name;
}

class CustomLabels {
}

class DateTime {
}

class Degree {
}

class DeleteCollectionRequest {
  public CollectionId $collection_id;
}

class DeleteCollectionResponse {
  public UInteger $status_code;
}

class DeleteFacesRequest {
  public CollectionId $collection_id;
  public FaceIdList $face_ids;
}

class DeleteFacesResponse {
  public FaceIdList $deleted_faces;
}

class DeleteProjectRequest {
  public ProjectArn $project_arn;
}

class DeleteProjectResponse {
  public ProjectStatus $status;
}

class DeleteProjectVersionRequest {
  public ProjectVersionArn $project_version_arn;
}

class DeleteProjectVersionResponse {
  public ProjectVersionStatus $status;
}

class DeleteStreamProcessorRequest {
  public StreamProcessorName $name;
}

class DeleteStreamProcessorResponse {
}

class DescribeCollectionRequest {
  public CollectionId $collection_id;
}

class DescribeCollectionResponse {
  public string $collection_arn;
  public DateTime $creation_timestamp;
  public ULong $face_count;
  public string $face_model_version;
}

class DescribeProjectVersionsRequest {
  public ProjectVersionsPageSize $max_results;
  public ExtendedPaginationToken $next_token;
  public ProjectArn $project_arn;
  public VersionNames $version_names;
}

class DescribeProjectVersionsResponse {
  public ExtendedPaginationToken $next_token;
  public ProjectVersionDescriptions $project_version_descriptions;
}

class DescribeProjectsRequest {
  public ProjectsPageSize $max_results;
  public ExtendedPaginationToken $next_token;
}

class DescribeProjectsResponse {
  public ExtendedPaginationToken $next_token;
  public ProjectDescriptions $project_descriptions;
}

class DescribeStreamProcessorRequest {
  public StreamProcessorName $name;
}

class DescribeStreamProcessorResponse {
  public DateTime $creation_timestamp;
  public StreamProcessorInput $input;
  public DateTime $last_update_timestamp;
  public StreamProcessorName $name;
  public StreamProcessorOutput $output;
  public RoleArn $role_arn;
  public StreamProcessorSettings $settings;
  public StreamProcessorStatus $status;
  public string $status_message;
  public StreamProcessorArn $stream_processor_arn;
}

class DetectCustomLabelsRequest {
  public Image $image;
  public UInteger $max_results;
  public Percent $min_confidence;
  public ProjectVersionArn $project_version_arn;
}

class DetectCustomLabelsResponse {
  public CustomLabels $custom_labels;
}

class DetectFacesRequest {
  public Attributes $attributes;
  public Image $image;
}

class DetectFacesResponse {
  public FaceDetailList $face_details;
  public OrientationCorrection $orientation_correction;
}

class DetectLabelsRequest {
  public Image $image;
  public UInteger $max_labels;
  public Percent $min_confidence;
}

class DetectLabelsResponse {
  public string $label_model_version;
  public Labels $labels;
  public OrientationCorrection $orientation_correction;
}

class DetectModerationLabelsRequest {
  public HumanLoopConfig $human_loop_config;
  public Image $image;
  public Percent $min_confidence;
}

class DetectModerationLabelsResponse {
  public HumanLoopActivationOutput $human_loop_activation_output;
  public ModerationLabels $moderation_labels;
  public string $moderation_model_version;
}

class DetectTextFilters {
  public RegionsOfInterest $regions_of_interest;
  public DetectionFilter $word_filter;
}

class DetectTextRequest {
  public DetectTextFilters $filters;
  public Image $image;
}

class DetectTextResponse {
  public TextDetectionList $text_detections;
  public string $text_model_version;
}

class DetectionFilter {
  public BoundingBoxHeight $min_bounding_box_height;
  public BoundingBoxWidth $min_bounding_box_width;
  public Percent $min_confidence;
}

class Emotion {
  public Percent $confidence;
  public EmotionName $type;
}

class EmotionName {
}

class Emotions {
}

class EvaluationResult {
  public Float $f_1_score;
  public Summary $summary;
}

class ExtendedPaginationToken {
}

class ExternalImageId {
}

class EyeOpen {
  public Percent $confidence;
  public boolean $value;
}

class Eyeglasses {
  public Percent $confidence;
  public boolean $value;
}

class Face {
  public BoundingBox $bounding_box;
  public Percent $confidence;
  public ExternalImageId $external_image_id;
  public FaceId $face_id;
  public ImageId $image_id;
}

class FaceAttributes {
}

class FaceDetail {
  public AgeRange $age_range;
  public Beard $beard;
  public BoundingBox $bounding_box;
  public Percent $confidence;
  public Emotions $emotions;
  public Eyeglasses $eyeglasses;
  public EyeOpen $eyes_open;
  public Gender $gender;
  public Landmarks $landmarks;
  public MouthOpen $mouth_open;
  public Mustache $mustache;
  public Pose $pose;
  public ImageQuality $quality;
  public Smile $smile;
  public Sunglasses $sunglasses;
}

class FaceDetailList {
}

class FaceDetection {
  public FaceDetail $face;
  public Timestamp $timestamp;
}

class FaceDetections {
}

class FaceId {
}

class FaceIdList {
}

class FaceList {
}

class FaceMatch {
  public Face $face;
  public Percent $similarity;
}

class FaceMatchList {
}

class FaceModelVersionList {
}

class FaceRecord {
  public Face $face;
  public FaceDetail $face_detail;
}

class FaceRecordList {
}

class FaceSearchSettings {
  public CollectionId $collection_id;
  public Percent $face_match_threshold;
}

class FaceSearchSortBy {
}

class Float {
}

class FlowDefinitionArn {
}

class Gender {
  public Percent $confidence;
  public GenderType $value;
}

class GenderType {
}

class Geometry {
  public BoundingBox $bounding_box;
  public Polygon $polygon;
}

class GetCelebrityInfoRequest {
  public RekognitionUniqueId $id;
}

class GetCelebrityInfoResponse {
  public string $name;
  public Urls $urls;
}

class GetCelebrityRecognitionRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public CelebrityRecognitionSortBy $sort_by;
}

class GetCelebrityRecognitionResponse {
  public CelebrityRecognitions $celebrities;
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;
}

class GetContentModerationRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public ContentModerationSortBy $sort_by;
}

class GetContentModerationResponse {
  public VideoJobStatus $job_status;
  public ContentModerationDetections $moderation_labels;
  public string $moderation_model_version;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;
}

class GetFaceDetectionRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class GetFaceDetectionResponse {
  public FaceDetections $faces;
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;
}

class GetFaceSearchRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public FaceSearchSortBy $sort_by;
}

class GetFaceSearchResponse {
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public PersonMatches $persons;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;
}

class GetLabelDetectionRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public LabelDetectionSortBy $sort_by;
}

class GetLabelDetectionResponse {
  public VideoJobStatus $job_status;
  public string $label_model_version;
  public LabelDetections $labels;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;
}

class GetPersonTrackingRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public PersonTrackingSortBy $sort_by;
}

class GetPersonTrackingResponse {
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public PersonDetections $persons;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;
}

class GetTextDetectionRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class GetTextDetectionResponse {
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public TextDetectionResults $text_detections;
  public string $text_model_version;
  public VideoMetadata $video_metadata;
}

class GroundTruthManifest {
  public S3Object $s_3_object;
}

class HumanLoopActivationConditionsEvaluationResults {
}

class HumanLoopActivationOutput {
  public HumanLoopActivationConditionsEvaluationResults $human_loop_activation_conditions_evaluation_results;
  public HumanLoopActivationReasons $human_loop_activation_reasons;
  public HumanLoopArn $human_loop_arn;
}

class HumanLoopActivationReason {
}

class HumanLoopActivationReasons {
}

class HumanLoopArn {
}

class HumanLoopConfig {
  public HumanLoopDataAttributes $data_attributes;
  public FlowDefinitionArn $flow_definition_arn;
  public HumanLoopName $human_loop_name;
}

class HumanLoopDataAttributes {
  public ContentClassifiers $content_classifiers;
}

class HumanLoopName {
}

class HumanLoopQuotaExceededException {
  public string $quota_code;
  public string $resource_type;
  public string $service_code;
}

class IdempotentParameterMismatchException {
}

class Image {
  public ImageBlob $bytes;
  public S3Object $s_3_object;
}

class ImageBlob {
}

class ImageId {
}

class ImageQuality {
  public Float $brightness;
  public Float $sharpness;
}

class ImageTooLargeException {
}

class IndexFacesRequest {
  public CollectionId $collection_id;
  public Attributes $detection_attributes;
  public ExternalImageId $external_image_id;
  public Image $image;
  public MaxFacesToIndex $max_faces;
  public QualityFilter $quality_filter;
}

class IndexFacesResponse {
  public string $face_model_version;
  public FaceRecordList $face_records;
  public OrientationCorrection $orientation_correction;
  public UnindexedFaces $unindexed_faces;
}

class InferenceUnits {
}

class Instance {
  public BoundingBox $bounding_box;
  public Percent $confidence;
}

class Instances {
}

class InternalServerError {
}

class InvalidImageFormatException {
}

class InvalidPaginationTokenException {
}

class InvalidParameterException {
}

class InvalidS3ObjectException {
}

class JobId {
}

class JobTag {
}

class KinesisDataArn {
}

class KinesisDataStream {
  public KinesisDataArn $arn;
}

class KinesisVideoArn {
}

class KinesisVideoStream {
  public KinesisVideoArn $arn;
}

class Label {
  public Percent $confidence;
  public Instances $instances;
  public string $name;
  public Parents $parents;
}

class LabelDetection {
  public Label $label;
  public Timestamp $timestamp;
}

class LabelDetectionSortBy {
}

class LabelDetections {
}

class Labels {
}

class Landmark {
  public LandmarkType $type;
  public Float $x;
  public Float $y;
}

class LandmarkType {
}

class Landmarks {
}

class LimitExceededException {
}

class ListCollectionsRequest {
  public PageSize $max_results;
  public PaginationToken $next_token;
}

class ListCollectionsResponse {
  public CollectionIdList $collection_ids;
  public FaceModelVersionList $face_model_versions;
  public PaginationToken $next_token;
}

class ListFacesRequest {
  public CollectionId $collection_id;
  public PageSize $max_results;
  public PaginationToken $next_token;
}

class ListFacesResponse {
  public string $face_model_version;
  public FaceList $faces;
  public string $next_token;
}

class ListStreamProcessorsRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListStreamProcessorsResponse {
  public PaginationToken $next_token;
  public StreamProcessorList $stream_processors;
}

class MaxFaces {
}

class MaxFacesToIndex {
}

class MaxResults {
}

class ModerationLabel {
  public Percent $confidence;
  public string $name;
  public string $parent_name;
}

class ModerationLabels {
}

class MouthOpen {
  public Percent $confidence;
  public boolean $value;
}

class Mustache {
  public Percent $confidence;
  public boolean $value;
}

class NotificationChannel {
  public RoleArn $role_arn;
  public SNSTopicArn $sns_topic_arn;
}

class OrientationCorrection {
}

class OutputConfig {
  public S3Bucket $s_3_bucket;
  public S3KeyPrefix $s_3_key_prefix;
}

class PageSize {
}

class PaginationToken {
}

class Parent {
  public string $name;
}

class Parents {
}

class Percent {
}

class PersonDetail {
  public BoundingBox $bounding_box;
  public FaceDetail $face;
  public PersonIndex $index;
}

class PersonDetection {
  public PersonDetail $person;
  public Timestamp $timestamp;
}

class PersonDetections {
}

class PersonIndex {
}

class PersonMatch {
  public FaceMatchList $face_matches;
  public PersonDetail $person;
  public Timestamp $timestamp;
}

class PersonMatches {
}

class PersonTrackingSortBy {
}

class Point {
  public Float $x;
  public Float $y;
}

class Polygon {
}

class Pose {
  public Degree $pitch;
  public Degree $roll;
  public Degree $yaw;
}

class ProjectArn {
}

class ProjectDescription {
  public DateTime $creation_timestamp;
  public ProjectArn $project_arn;
  public ProjectStatus $status;
}

class ProjectDescriptions {
}

class ProjectName {
}

class ProjectStatus {
}

class ProjectVersionArn {
}

class ProjectVersionDescription {
  public ULong $billable_training_time_in_seconds;
  public DateTime $creation_timestamp;
  public EvaluationResult $evaluation_result;
  public InferenceUnits $min_inference_units;
  public OutputConfig $output_config;
  public ProjectVersionArn $project_version_arn;
  public ProjectVersionStatus $status;
  public StatusMessage $status_message;
  public TestingDataResult $testing_data_result;
  public TrainingDataResult $training_data_result;
  public DateTime $training_end_timestamp;
}

class ProjectVersionDescriptions {
}

class ProjectVersionStatus {
}

class ProjectVersionsPageSize {
}

class ProjectsPageSize {
}

class ProvisionedThroughputExceededException {
}

class QualityFilter {
}

class Reason {
}

class Reasons {
}

class RecognizeCelebritiesRequest {
  public Image $image;
}

class RecognizeCelebritiesResponse {
  public CelebrityList $celebrity_faces;
  public OrientationCorrection $orientation_correction;
  public ComparedFaceList $unrecognized_faces;
}

class RegionOfInterest {
  public BoundingBox $bounding_box;
}

class RegionsOfInterest {
}

class RekognitionUniqueId {
}

class ResourceAlreadyExistsException {
}

class ResourceInUseException {
}

class ResourceNotFoundException {
}

class ResourceNotReadyException {
}

class RoleArn {
}

class S3Bucket {
}

class S3KeyPrefix {
}

class S3Object {
  public S3Bucket $bucket;
  public S3ObjectName $name;
  public S3ObjectVersion $version;
}

class S3ObjectName {
}

class S3ObjectVersion {
}

class SNSTopicArn {
}

class SearchFacesByImageRequest {
  public CollectionId $collection_id;
  public Percent $face_match_threshold;
  public Image $image;
  public MaxFaces $max_faces;
  public QualityFilter $quality_filter;
}

class SearchFacesByImageResponse {
  public FaceMatchList $face_matches;
  public string $face_model_version;
  public BoundingBox $searched_face_bounding_box;
  public Percent $searched_face_confidence;
}

class SearchFacesRequest {
  public CollectionId $collection_id;
  public FaceId $face_id;
  public Percent $face_match_threshold;
  public MaxFaces $max_faces;
}

class SearchFacesResponse {
  public FaceMatchList $face_matches;
  public string $face_model_version;
  public FaceId $searched_face_id;
}

class Smile {
  public Percent $confidence;
  public boolean $value;
}

class StartCelebrityRecognitionRequest {
  public ClientRequestToken $client_request_token;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;
}

class StartCelebrityRecognitionResponse {
  public JobId $job_id;
}

class StartContentModerationRequest {
  public ClientRequestToken $client_request_token;
  public JobTag $job_tag;
  public Percent $min_confidence;
  public NotificationChannel $notification_channel;
  public Video $video;
}

class StartContentModerationResponse {
  public JobId $job_id;
}

class StartFaceDetectionRequest {
  public ClientRequestToken $client_request_token;
  public FaceAttributes $face_attributes;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;
}

class StartFaceDetectionResponse {
  public JobId $job_id;
}

class StartFaceSearchRequest {
  public ClientRequestToken $client_request_token;
  public CollectionId $collection_id;
  public Percent $face_match_threshold;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;
}

class StartFaceSearchResponse {
  public JobId $job_id;
}

class StartLabelDetectionRequest {
  public ClientRequestToken $client_request_token;
  public JobTag $job_tag;
  public Percent $min_confidence;
  public NotificationChannel $notification_channel;
  public Video $video;
}

class StartLabelDetectionResponse {
  public JobId $job_id;
}

class StartPersonTrackingRequest {
  public ClientRequestToken $client_request_token;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;
}

class StartPersonTrackingResponse {
  public JobId $job_id;
}

class StartProjectVersionRequest {
  public InferenceUnits $min_inference_units;
  public ProjectVersionArn $project_version_arn;
}

class StartProjectVersionResponse {
  public ProjectVersionStatus $status;
}

class StartStreamProcessorRequest {
  public StreamProcessorName $name;
}

class StartStreamProcessorResponse {
}

class StartTextDetectionFilters {
  public RegionsOfInterest $regions_of_interest;
  public DetectionFilter $word_filter;
}

class StartTextDetectionRequest {
  public ClientRequestToken $client_request_token;
  public StartTextDetectionFilters $filters;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;
}

class StartTextDetectionResponse {
  public JobId $job_id;
}

class StatusMessage {
}

class StopProjectVersionRequest {
  public ProjectVersionArn $project_version_arn;
}

class StopProjectVersionResponse {
  public ProjectVersionStatus $status;
}

class StopStreamProcessorRequest {
  public StreamProcessorName $name;
}

class StopStreamProcessorResponse {
}

class StreamProcessor {
  public StreamProcessorName $name;
  public StreamProcessorStatus $status;
}

class StreamProcessorArn {
}

class StreamProcessorInput {
  public KinesisVideoStream $kinesis_video_stream;
}

class StreamProcessorList {
}

class StreamProcessorName {
}

class StreamProcessorOutput {
  public KinesisDataStream $kinesis_data_stream;
}

class StreamProcessorSettings {
  public FaceSearchSettings $face_search;
}

class StreamProcessorStatus {
}

class String {
}

class Summary {
  public S3Object $s_3_object;
}

class Sunglasses {
  public Percent $confidence;
  public boolean $value;
}

class TestingData {
  public Assets $assets;
  public boolean $auto_create;
}

class TestingDataResult {
  public TestingData $input;
  public TestingData $output;
}

class TextDetection {
  public Percent $confidence;
  public string $detected_text;
  public Geometry $geometry;
  public UInteger $id;
  public UInteger $parent_id;
  public TextTypes $type;
}

class TextDetectionList {
}

class TextDetectionResult {
  public TextDetection $text_detection;
  public Timestamp $timestamp;
}

class TextDetectionResults {
}

class TextTypes {
}

class ThrottlingException {
}

class Timestamp {
}

class TrainingData {
  public Assets $assets;
}

class TrainingDataResult {
  public TrainingData $input;
  public TrainingData $output;
}

class UInteger {
}

class ULong {
}

class UnindexedFace {
  public FaceDetail $face_detail;
  public Reasons $reasons;
}

class UnindexedFaces {
}

class Url {
}

class Urls {
}

class VersionName {
}

class VersionNames {
}

class Video {
  public S3Object $s_3_object;
}

class VideoJobStatus {
}

class VideoMetadata {
  public string $codec;
  public ULong $duration_millis;
  public string $format;
  public ULong $frame_height;
  public Float $frame_rate;
  public ULong $frame_width;
}

class VideoTooLargeException {
}

