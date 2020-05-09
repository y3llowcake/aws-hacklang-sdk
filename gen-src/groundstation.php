<?hh // strict
namespace slack\aws\groundstation;

interface GroundStation {
  public function CancelContact(CancelContactRequest): Awaitable<Errors\Result<ContactIdResponse>>;
  public function CreateConfig(CreateConfigRequest): Awaitable<Errors\Result<ConfigIdResponse>>;
  public function CreateDataflowEndpointGroup(CreateDataflowEndpointGroupRequest): Awaitable<Errors\Result<DataflowEndpointGroupIdResponse>>;
  public function CreateMissionProfile(CreateMissionProfileRequest): Awaitable<Errors\Result<MissionProfileIdResponse>>;
  public function DeleteConfig(DeleteConfigRequest): Awaitable<Errors\Result<ConfigIdResponse>>;
  public function DeleteDataflowEndpointGroup(DeleteDataflowEndpointGroupRequest): Awaitable<Errors\Result<DataflowEndpointGroupIdResponse>>;
  public function DeleteMissionProfile(DeleteMissionProfileRequest): Awaitable<Errors\Result<MissionProfileIdResponse>>;
  public function DescribeContact(DescribeContactRequest): Awaitable<Errors\Result<DescribeContactResponse>>;
  public function GetConfig(GetConfigRequest): Awaitable<Errors\Result<GetConfigResponse>>;
  public function GetDataflowEndpointGroup(GetDataflowEndpointGroupRequest): Awaitable<Errors\Result<GetDataflowEndpointGroupResponse>>;
  public function GetMinuteUsage(GetMinuteUsageRequest): Awaitable<Errors\Result<GetMinuteUsageResponse>>;
  public function GetMissionProfile(GetMissionProfileRequest): Awaitable<Errors\Result<GetMissionProfileResponse>>;
  public function GetSatellite(GetSatelliteRequest): Awaitable<Errors\Result<GetSatelliteResponse>>;
  public function ListConfigs(ListConfigsRequest): Awaitable<Errors\Result<ListConfigsResponse>>;
  public function ListContacts(ListContactsRequest): Awaitable<Errors\Result<ListContactsResponse>>;
  public function ListDataflowEndpointGroups(ListDataflowEndpointGroupsRequest): Awaitable<Errors\Result<ListDataflowEndpointGroupsResponse>>;
  public function ListGroundStations(ListGroundStationsRequest): Awaitable<Errors\Result<ListGroundStationsResponse>>;
  public function ListMissionProfiles(ListMissionProfilesRequest): Awaitable<Errors\Result<ListMissionProfilesResponse>>;
  public function ListSatellites(ListSatellitesRequest): Awaitable<Errors\Result<ListSatellitesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ReserveContact(ReserveContactRequest): Awaitable<Errors\Result<ContactIdResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateConfig(UpdateConfigRequest): Awaitable<Errors\Result<ConfigIdResponse>>;
  public function UpdateMissionProfile(UpdateMissionProfileRequest): Awaitable<Errors\Result<MissionProfileIdResponse>>;
}

class AngleUnits {
}

class AntennaDownlinkConfig {
  public SpectrumConfig $spectrum_config;
}

class AntennaDownlinkDemodDecodeConfig {
  public DecodeConfig $decode_config;
  public DemodulationConfig $demodulation_config;
  public SpectrumConfig $spectrum_config;
}

class AntennaUplinkConfig {
  public UplinkSpectrumConfig $spectrum_config;
  public Eirp $target_eirp;
}

class BandwidthUnits {
}

class Boolean {
}

class CancelContactRequest {
  public string $contact_id;
}

class ConfigArn {
}

class ConfigCapabilityType {
}

class ConfigIdResponse {
  public ConfigArn $config_arn;
  public string $config_id;
  public ConfigCapabilityType $config_type;
}

class ConfigList {
}

class ConfigListItem {
  public ConfigArn $config_arn;
  public string $config_id;
  public ConfigCapabilityType $config_type;
  public string $name;
}

class ConfigTypeData {
  public AntennaDownlinkConfig $antenna_downlink_config;
  public AntennaDownlinkDemodDecodeConfig $antenna_downlink_demod_decode_config;
  public AntennaUplinkConfig $antenna_uplink_config;
  public DataflowEndpointConfig $dataflow_endpoint_config;
  public TrackingConfig $tracking_config;
  public UplinkEchoConfig $uplink_echo_config;
}

class ContactData {
  public string $contact_id;
  public ContactStatus $contact_status;
  public Timestamp $end_time;
  public string $error_message;
  public string $ground_station;
  public Elevation $maximum_elevation;
  public MissionProfileArn $mission_profile_arn;
  public Timestamp $post_pass_end_time;
  public Timestamp $pre_pass_start_time;
  public string $region;
  public satelliteArn $satellite_arn;
  public Timestamp $start_time;
  public TagsMap $tags;
}

class ContactIdResponse {
  public string $contact_id;
}

class ContactList {
}

class ContactStatus {
}

class CreateConfigRequest {
  public ConfigTypeData $config_data;
  public SafeName $name;
  public TagsMap $tags;
}

class CreateDataflowEndpointGroupRequest {
  public EndpointDetailsList $endpoint_details;
  public TagsMap $tags;
}

class CreateMissionProfileRequest {
  public DurationInSeconds $contact_post_pass_duration_seconds;
  public DurationInSeconds $contact_pre_pass_duration_seconds;
  public DataflowEdgeList $dataflow_edges;
  public DurationInSeconds $minimum_viable_contact_duration_seconds;
  public SafeName $name;
  public TagsMap $tags;
  public ConfigArn $tracking_config_arn;
}

class Criticality {
}

class DataflowEdge {
}

class DataflowEdgeList {
}

class DataflowEndpoint {
  public SocketAddress $address;
  public SafeName $name;
  public EndpointStatus $status;
}

class DataflowEndpointConfig {
  public string $dataflow_endpoint_name;
  public string $dataflow_endpoint_region;
}

class DataflowEndpointGroupArn {
}

class DataflowEndpointGroupIdResponse {
  public string $dataflow_endpoint_group_id;
}

class DataflowEndpointGroupList {
}

class DataflowEndpointListItem {
  public DataflowEndpointGroupArn $dataflow_endpoint_group_arn;
  public string $dataflow_endpoint_group_id;
}

class DecodeConfig {
  public JsonString $unvalidated_json;
}

class DeleteConfigRequest {
  public string $config_id;
  public ConfigCapabilityType $config_type;
}

class DeleteDataflowEndpointGroupRequest {
  public string $dataflow_endpoint_group_id;
}

class DeleteMissionProfileRequest {
  public string $mission_profile_id;
}

class DemodulationConfig {
  public JsonString $unvalidated_json;
}

class DependencyException {
  public string $message;
  public string $parameter_name;
}

class DescribeContactRequest {
  public string $contact_id;
}

class DescribeContactResponse {
  public string $contact_id;
  public ContactStatus $contact_status;
  public Timestamp $end_time;
  public string $error_message;
  public string $ground_station;
  public Elevation $maximum_elevation;
  public MissionProfileArn $mission_profile_arn;
  public Timestamp $post_pass_end_time;
  public Timestamp $pre_pass_start_time;
  public string $region;
  public satelliteArn $satellite_arn;
  public Timestamp $start_time;
  public TagsMap $tags;
}

class Double {
}

class DurationInSeconds {
}

class Eirp {
  public EirpUnits $units;
  public Double $value;
}

class EirpUnits {
}

class Elevation {
  public AngleUnits $unit;
  public Double $value;
}

class EndpointDetails {
  public DataflowEndpoint $endpoint;
  public SecurityDetails $security_details;
}

class EndpointDetailsList {
}

class EndpointStatus {
}

class Frequency {
  public FrequencyUnits $units;
  public Double $value;
}

class FrequencyBandwidth {
  public BandwidthUnits $units;
  public Double $value;
}

class FrequencyUnits {
}

class GetConfigRequest {
  public string $config_id;
  public ConfigCapabilityType $config_type;
}

class GetConfigResponse {
  public ConfigArn $config_arn;
  public ConfigTypeData $config_data;
  public string $config_id;
  public ConfigCapabilityType $config_type;
  public string $name;
  public TagsMap $tags;
}

class GetDataflowEndpointGroupRequest {
  public string $dataflow_endpoint_group_id;
}

class GetDataflowEndpointGroupResponse {
  public DataflowEndpointGroupArn $dataflow_endpoint_group_arn;
  public string $dataflow_endpoint_group_id;
  public EndpointDetailsList $endpoints_details;
  public TagsMap $tags;
}

class GetMinuteUsageRequest {
  public int $month;
  public int $year;
}

class GetMinuteUsageResponse {
  public int $estimated_minutes_remaining;
  public boolean $is_reserved_minutes_customer;
  public int $total_reserved_minute_allocation;
  public int $total_scheduled_minutes;
  public int $upcoming_minutes_scheduled;
}

class GetMissionProfileRequest {
  public string $mission_profile_id;
}

class GetMissionProfileResponse {
  public DurationInSeconds $contact_post_pass_duration_seconds;
  public DurationInSeconds $contact_pre_pass_duration_seconds;
  public DataflowEdgeList $dataflow_edges;
  public DurationInSeconds $minimum_viable_contact_duration_seconds;
  public MissionProfileArn $mission_profile_arn;
  public string $mission_profile_id;
  public string $name;
  public string $region;
  public TagsMap $tags;
  public ConfigArn $tracking_config_arn;
}

class GetSatelliteRequest {
  public string $satellite_id;
}

class GetSatelliteResponse {
  public GroundStationIdList $ground_stations;
  public noradSatelliteID $norad_satellite_id;
  public satelliteArn $satellite_arn;
  public Uuid $satellite_id;
}

class GroundStationData {
  public string $ground_station_id;
  public string $ground_station_name;
  public string $region;
}

class GroundStationIdList {
}

class GroundStationList {
}

class Integer {
}

class InvalidParameterException {
  public string $message;
  public string $parameter_name;
}

class JsonString {
}

class ListConfigsRequest {
  public int $max_results;
  public string $next_token;
}

class ListConfigsResponse {
  public ConfigList $config_list;
  public string $next_token;
}

class ListContactsRequest {
  public Timestamp $end_time;
  public string $ground_station;
  public int $max_results;
  public MissionProfileArn $mission_profile_arn;
  public string $next_token;
  public satelliteArn $satellite_arn;
  public Timestamp $start_time;
  public StatusList $status_list;
}

class ListContactsResponse {
  public ContactList $contact_list;
  public string $next_token;
}

class ListDataflowEndpointGroupsRequest {
  public int $max_results;
  public string $next_token;
}

class ListDataflowEndpointGroupsResponse {
  public DataflowEndpointGroupList $dataflow_endpoint_group_list;
  public string $next_token;
}

class ListGroundStationsRequest {
  public int $max_results;
  public string $next_token;
  public string $satellite_id;
}

class ListGroundStationsResponse {
  public GroundStationList $ground_station_list;
  public string $next_token;
}

class ListMissionProfilesRequest {
  public int $max_results;
  public string $next_token;
}

class ListMissionProfilesResponse {
  public MissionProfileList $mission_profile_list;
  public string $next_token;
}

class ListSatellitesRequest {
  public int $max_results;
  public string $next_token;
}

class ListSatellitesResponse {
  public string $next_token;
  public SatelliteList $satellites;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class ListTagsForResourceResponse {
  public TagsMap $tags;
}

class MissionProfileArn {
}

class MissionProfileIdResponse {
  public string $mission_profile_id;
}

class MissionProfileList {
}

class MissionProfileListItem {
  public MissionProfileArn $mission_profile_arn;
  public string $mission_profile_id;
  public string $name;
  public string $region;
}

class Polarization {
}

class ReserveContactRequest {
  public Timestamp $end_time;
  public string $ground_station;
  public MissionProfileArn $mission_profile_arn;
  public satelliteArn $satellite_arn;
  public Timestamp $start_time;
  public TagsMap $tags;
}

class ResourceLimitExceededException {
  public string $message;
  public string $parameter_name;
}

class ResourceNotFoundException {
  public string $message;
}

class RoleArn {
}

class SafeName {
}

class SatelliteList {
}

class SatelliteListItem {
  public GroundStationIdList $ground_stations;
  public noradSatelliteID $norad_satellite_id;
  public satelliteArn $satellite_arn;
  public Uuid $satellite_id;
}

class SecurityDetails {
  public RoleArn $role_arn;
  public SecurityGroupIdList $security_group_ids;
  public SubnetList $subnet_ids;
}

class SecurityGroupIdList {
}

class SocketAddress {
  public string $name;
  public int $port;
}

class SpectrumConfig {
  public FrequencyBandwidth $bandwidth;
  public Frequency $center_frequency;
  public Polarization $polarization;
}

class StatusList {
}

class String {
}

class SubnetList {
}

class TagKeys {
}

class TagResourceRequest {
  public string $resource_arn;
  public TagsMap $tags;
}

class TagResourceResponse {
}

class TagsMap {
}

class Timestamp {
}

class TrackingConfig {
  public Criticality $autotrack;
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeys $tag_keys;
}

class UntagResourceResponse {
}

class UpdateConfigRequest {
  public ConfigTypeData $config_data;
  public string $config_id;
  public ConfigCapabilityType $config_type;
  public SafeName $name;
}

class UpdateMissionProfileRequest {
  public DurationInSeconds $contact_post_pass_duration_seconds;
  public DurationInSeconds $contact_pre_pass_duration_seconds;
  public DataflowEdgeList $dataflow_edges;
  public DurationInSeconds $minimum_viable_contact_duration_seconds;
  public string $mission_profile_id;
  public SafeName $name;
  public ConfigArn $tracking_config_arn;
}

class UplinkEchoConfig {
  public ConfigArn $antenna_uplink_config_arn;
  public boolean $enabled;
}

class UplinkSpectrumConfig {
  public Frequency $center_frequency;
  public Polarization $polarization;
}

class Uuid {
}

class noradSatelliteID {
}

class satelliteArn {
}

