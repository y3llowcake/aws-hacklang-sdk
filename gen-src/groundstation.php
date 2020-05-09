<?hh // strict
namespace slack\aws\groundstation;

interface GroundStation {
  public function UpdateMissionProfile(UpdateMissionProfileRequest) Awaitable<Errors\Result<MissionProfileIdResponse>>;
  public function CreateConfig(CreateConfigRequest) Awaitable<Errors\Result<ConfigIdResponse>>;
  public function ListConfigs(ListConfigsRequest) Awaitable<Errors\Result<ListConfigsResponse>>;
  public function ListDataflowEndpointGroups(ListDataflowEndpointGroupsRequest) Awaitable<Errors\Result<ListDataflowEndpointGroupsResponse>>;
  public function ListGroundStations(ListGroundStationsRequest) Awaitable<Errors\Result<ListGroundStationsResponse>>;
  public function ReserveContact(ReserveContactRequest) Awaitable<Errors\Result<ContactIdResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateConfig(UpdateConfigRequest) Awaitable<Errors\Result<ConfigIdResponse>>;
  public function CreateMissionProfile(CreateMissionProfileRequest) Awaitable<Errors\Result<MissionProfileIdResponse>>;
  public function DeleteConfig(DeleteConfigRequest) Awaitable<Errors\Result<ConfigIdResponse>>;
  public function DeleteMissionProfile(DeleteMissionProfileRequest) Awaitable<Errors\Result<MissionProfileIdResponse>>;
  public function GetDataflowEndpointGroup(GetDataflowEndpointGroupRequest) Awaitable<Errors\Result<GetDataflowEndpointGroupResponse>>;
  public function ListMissionProfiles(ListMissionProfilesRequest) Awaitable<Errors\Result<ListMissionProfilesResponse>>;
  public function ListSatellites(ListSatellitesRequest) Awaitable<Errors\Result<ListSatellitesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function CancelContact(CancelContactRequest) Awaitable<Errors\Result<ContactIdResponse>>;
  public function DeleteDataflowEndpointGroup(DeleteDataflowEndpointGroupRequest) Awaitable<Errors\Result<DataflowEndpointGroupIdResponse>>;
  public function GetConfig(GetConfigRequest) Awaitable<Errors\Result<GetConfigResponse>>;
  public function GetMissionProfile(GetMissionProfileRequest) Awaitable<Errors\Result<GetMissionProfileResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function CreateDataflowEndpointGroup(CreateDataflowEndpointGroupRequest) Awaitable<Errors\Result<DataflowEndpointGroupIdResponse>>;
  public function DescribeContact(DescribeContactRequest) Awaitable<Errors\Result<DescribeContactResponse>>;
  public function GetMinuteUsage(GetMinuteUsageRequest) Awaitable<Errors\Result<GetMinuteUsageResponse>>;
  public function GetSatellite(GetSatelliteRequest) Awaitable<Errors\Result<GetSatelliteResponse>>;
  public function ListContacts(ListContactsRequest) Awaitable<Errors\Result<ListContactsResponse>>;
}

class ConfigCapabilityType {
}

class CreateConfigRequest {
  public ConfigTypeData $config_data;
  public SafeName $name;
  public TagsMap $tags;
}

class EndpointStatus {
}

class ListGroundStationsResponse {
  public GroundStationList $ground_station_list;
  public string $next_token;
}

class ListSatellitesResponse {
  public string $next_token;
  public SatelliteList $satellites;
}

class SpectrumConfig {
  public FrequencyBandwidth $bandwidth;
  public Frequency $center_frequency;
  public Polarization $polarization;
}

class Criticality {
}

class Eirp {
  public EirpUnits $units;
  public Double $value;
}

class GetSatelliteResponse {
  public Uuid $satellite_id;
  public GroundStationIdList $ground_stations;
  public noradSatelliteID $norad_satellite_id;
  public satelliteArn $satellite_arn;
}

class ListSatellitesRequest {
  public int $max_results;
  public string $next_token;
}

class SecurityGroupIdList {
}

class TagKeys {
}

class DataflowEndpoint {
  public SocketAddress $address;
  public SafeName $name;
  public EndpointStatus $status;
}

class DeleteConfigRequest {
  public string $config_id;
  public ConfigCapabilityType $config_type;
}

class DependencyException {
  public string $message;
  public string $parameter_name;
}

class InvalidParameterException {
  public string $message;
  public string $parameter_name;
}

class EirpUnits {
}

class GetConfigResponse {
  public ConfigArn $config_arn;
  public ConfigTypeData $config_data;
  public string $config_id;
  public ConfigCapabilityType $config_type;
  public string $name;
  public TagsMap $tags;
}

class ListContactsRequest {
  public satelliteArn $satellite_arn;
  public Timestamp $start_time;
  public StatusList $status_list;
  public Timestamp $end_time;
  public string $ground_station;
  public int $max_results;
  public MissionProfileArn $mission_profile_arn;
  public string $next_token;
}

class ReserveContactRequest {
  public Timestamp $start_time;
  public TagsMap $tags;
  public Timestamp $end_time;
  public string $ground_station;
  public MissionProfileArn $mission_profile_arn;
  public satelliteArn $satellite_arn;
}

class GroundStationIdList {
}

class UntagResourceResponse {
}

class AntennaDownlinkDemodDecodeConfig {
  public DecodeConfig $decode_config;
  public DemodulationConfig $demodulation_config;
  public SpectrumConfig $spectrum_config;
}

class ConfigIdResponse {
  public ConfigArn $config_arn;
  public string $config_id;
  public ConfigCapabilityType $config_type;
}

class ListConfigsResponse {
  public ConfigList $config_list;
  public string $next_token;
}

class MissionProfileListItem {
  public string $name;
  public string $region;
  public MissionProfileArn $mission_profile_arn;
  public string $mission_profile_id;
}

class SocketAddress {
  public string $name;
  public int $port;
}

class DecodeConfig {
  public JsonString $unvalidated_json;
}

class GetMissionProfileRequest {
  public string $mission_profile_id;
}

class String {
}

class satelliteArn {
}

class CreateMissionProfileRequest {
  public SafeName $name;
  public TagsMap $tags;
  public ConfigArn $tracking_config_arn;
  public DurationInSeconds $contact_post_pass_duration_seconds;
  public DurationInSeconds $contact_pre_pass_duration_seconds;
  public DataflowEdgeList $dataflow_edges;
  public DurationInSeconds $minimum_viable_contact_duration_seconds;
}

class Elevation {
  public Double $value;
  public AngleUnits $unit;
}

class ConfigList {
}

class DataflowEndpointConfig {
  public string $dataflow_endpoint_name;
  public string $dataflow_endpoint_region;
}

class JsonString {
}

class UplinkSpectrumConfig {
  public Frequency $center_frequency;
  public Polarization $polarization;
}

class noradSatelliteID {
}

class AntennaUplinkConfig {
  public UplinkSpectrumConfig $spectrum_config;
  public Eirp $target_eirp;
}

class CancelContactRequest {
  public string $contact_id;
}

class ConfigTypeData {
  public DataflowEndpointConfig $dataflow_endpoint_config;
  public TrackingConfig $tracking_config;
  public UplinkEchoConfig $uplink_echo_config;
  public AntennaDownlinkConfig $antenna_downlink_config;
  public AntennaDownlinkDemodDecodeConfig $antenna_downlink_demod_decode_config;
  public AntennaUplinkConfig $antenna_uplink_config;
}

class Integer {
}

class ListGroundStationsRequest {
  public string $satellite_id;
  public int $max_results;
  public string $next_token;
}

class MissionProfileList {
}

class DescribeContactRequest {
  public string $contact_id;
}

class GetSatelliteRequest {
  public string $satellite_id;
}

class ListContactsResponse {
  public ContactList $contact_list;
  public string $next_token;
}

class UpdateConfigRequest {
  public ConfigTypeData $config_data;
  public string $config_id;
  public ConfigCapabilityType $config_type;
  public SafeName $name;
}

class GetConfigRequest {
  public string $config_id;
  public ConfigCapabilityType $config_type;
}

class ConfigArn {
}

class ContactStatus {
}

class Double {
}

class TagsMap {
}

class ListConfigsRequest {
  public int $max_results;
  public string $next_token;
}

class AngleUnits {
}

class GetMinuteUsageRequest {
  public int $month;
  public int $year;
}

class Boolean {
}

class ResourceNotFoundException {
  public string $message;
}

class StatusList {
}

class ListDataflowEndpointGroupsRequest {
  public int $max_results;
  public string $next_token;
}

class ListMissionProfilesResponse {
  public MissionProfileList $mission_profile_list;
  public string $next_token;
}

class MissionProfileArn {
}

class SatelliteList {
}

class SatelliteListItem {
  public Uuid $satellite_id;
  public GroundStationIdList $ground_stations;
  public noradSatelliteID $norad_satellite_id;
  public satelliteArn $satellite_arn;
}

class TrackingConfig {
  public Criticality $autotrack;
}

class Frequency {
  public FrequencyUnits $units;
  public Double $value;
}

class ResourceLimitExceededException {
  public string $message;
  public string $parameter_name;
}

class UplinkEchoConfig {
  public ConfigArn $antenna_uplink_config_arn;
  public boolean $enabled;
}

class GetMinuteUsageResponse {
  public int $estimated_minutes_remaining;
  public boolean $is_reserved_minutes_customer;
  public int $total_reserved_minute_allocation;
  public int $total_scheduled_minutes;
  public int $upcoming_minutes_scheduled;
}

class TagResourceResponse {
}

class ConfigListItem {
  public string $config_id;
  public ConfigCapabilityType $config_type;
  public string $name;
  public ConfigArn $config_arn;
}

class ContactIdResponse {
  public string $contact_id;
}

class DataflowEdgeList {
}

class DataflowEndpointGroupIdResponse {
  public string $dataflow_endpoint_group_id;
}

class DataflowEndpointListItem {
  public DataflowEndpointGroupArn $dataflow_endpoint_group_arn;
  public string $dataflow_endpoint_group_id;
}

class DemodulationConfig {
  public JsonString $unvalidated_json;
}

class DescribeContactResponse {
  public string $ground_station;
  public Timestamp $post_pass_end_time;
  public Timestamp $pre_pass_start_time;
  public string $region;
  public Timestamp $start_time;
  public string $contact_id;
  public Timestamp $end_time;
  public Elevation $maximum_elevation;
  public MissionProfileArn $mission_profile_arn;
  public satelliteArn $satellite_arn;
  public TagsMap $tags;
  public ContactStatus $contact_status;
  public string $error_message;
}

class DurationInSeconds {
}

class FrequencyUnits {
}

class EndpointDetailsList {
}

class TagResourceRequest {
  public string $resource_arn;
  public TagsMap $tags;
}

class ContactData {
  public Timestamp $pre_pass_start_time;
  public satelliteArn $satellite_arn;
  public TagsMap $tags;
  public string $contact_id;
  public Elevation $maximum_elevation;
  public MissionProfileArn $mission_profile_arn;
  public string $ground_station;
  public Timestamp $post_pass_end_time;
  public string $region;
  public Timestamp $start_time;
  public ContactStatus $contact_status;
  public Timestamp $end_time;
  public string $error_message;
}

class GetMissionProfileResponse {
  public DataflowEdgeList $dataflow_edges;
  public DurationInSeconds $minimum_viable_contact_duration_seconds;
  public string $mission_profile_id;
  public ConfigArn $tracking_config_arn;
  public DurationInSeconds $contact_post_pass_duration_seconds;
  public DurationInSeconds $contact_pre_pass_duration_seconds;
  public MissionProfileArn $mission_profile_arn;
  public string $name;
  public string $region;
  public TagsMap $tags;
}

class GroundStationData {
  public string $ground_station_name;
  public string $region;
  public string $ground_station_id;
}

class ListDataflowEndpointGroupsResponse {
  public DataflowEndpointGroupList $dataflow_endpoint_group_list;
  public string $next_token;
}

class Uuid {
}

class ContactList {
}

class DataflowEndpointGroupArn {
}

class FrequencyBandwidth {
  public BandwidthUnits $units;
  public Double $value;
}

class SubnetList {
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeys $tag_keys;
}

class DeleteDataflowEndpointGroupRequest {
  public string $dataflow_endpoint_group_id;
}

class DeleteMissionProfileRequest {
  public string $mission_profile_id;
}

class GetDataflowEndpointGroupRequest {
  public string $dataflow_endpoint_group_id;
}

class SecurityDetails {
  public RoleArn $role_arn;
  public SecurityGroupIdList $security_group_ids;
  public SubnetList $subnet_ids;
}

class DataflowEdge {
}

class EndpointDetails {
  public DataflowEndpoint $endpoint;
  public SecurityDetails $security_details;
}

class GroundStationList {
}

class ListTagsForResourceResponse {
  public TagsMap $tags;
}

class MissionProfileIdResponse {
  public string $mission_profile_id;
}

class RoleArn {
}

class SafeName {
}

class UpdateMissionProfileRequest {
  public SafeName $name;
  public ConfigArn $tracking_config_arn;
  public DurationInSeconds $contact_post_pass_duration_seconds;
  public DurationInSeconds $contact_pre_pass_duration_seconds;
  public DataflowEdgeList $dataflow_edges;
  public DurationInSeconds $minimum_viable_contact_duration_seconds;
  public string $mission_profile_id;
}

class BandwidthUnits {
}

class CreateDataflowEndpointGroupRequest {
  public EndpointDetailsList $endpoint_details;
  public TagsMap $tags;
}

class DataflowEndpointGroupList {
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class ListMissionProfilesRequest {
  public int $max_results;
  public string $next_token;
}

class Timestamp {
}

class AntennaDownlinkConfig {
  public SpectrumConfig $spectrum_config;
}

class GetDataflowEndpointGroupResponse {
  public DataflowEndpointGroupArn $dataflow_endpoint_group_arn;
  public string $dataflow_endpoint_group_id;
  public EndpointDetailsList $endpoints_details;
  public TagsMap $tags;
}

class Polarization {
}

