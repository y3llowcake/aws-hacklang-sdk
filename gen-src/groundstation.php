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

type AngleUnits = string;

class AntennaDownlinkConfig {
  public SpectrumConfig $spectrum_config;

  public function __construct(shape(
  ?'spectrum_config' => SpectrumConfig,
  ) $s = shape()) {
    $this->spectrum_config = $spectrum_config ?? null;
  }
}

class AntennaDownlinkDemodDecodeConfig {
  public DecodeConfig $decode_config;
  public DemodulationConfig $demodulation_config;
  public SpectrumConfig $spectrum_config;

  public function __construct(shape(
  ?'decode_config' => DecodeConfig,
  ?'demodulation_config' => DemodulationConfig,
  ?'spectrum_config' => SpectrumConfig,
  ) $s = shape()) {
    $this->decode_config = $decode_config ?? null;
    $this->demodulation_config = $demodulation_config ?? null;
    $this->spectrum_config = $spectrum_config ?? null;
  }
}

class AntennaUplinkConfig {
  public UplinkSpectrumConfig $spectrum_config;
  public Eirp $target_eirp;

  public function __construct(shape(
  ?'spectrum_config' => UplinkSpectrumConfig,
  ?'target_eirp' => Eirp,
  ) $s = shape()) {
    $this->spectrum_config = $spectrum_config ?? null;
    $this->target_eirp = $target_eirp ?? null;
  }
}

type BandwidthUnits = string;

type Boolean = bool;

class CancelContactRequest {
  public string $contact_id;

  public function __construct(shape(
  ?'contact_id' => string,
  ) $s = shape()) {
    $this->contact_id = $contact_id ?? "";
  }
}

type ConfigArn = string;

type ConfigCapabilityType = string;

class ConfigIdResponse {
  public ConfigArn $config_arn;
  public string $config_id;
  public ConfigCapabilityType $config_type;

  public function __construct(shape(
  ?'config_arn' => ConfigArn,
  ?'config_id' => string,
  ?'config_type' => ConfigCapabilityType,
  ) $s = shape()) {
    $this->config_arn = $config_arn ?? "";
    $this->config_id = $config_id ?? "";
    $this->config_type = $config_type ?? "";
  }
}

type ConfigList = vec<ConfigListItem>;

class ConfigListItem {
  public ConfigArn $config_arn;
  public string $config_id;
  public ConfigCapabilityType $config_type;
  public string $name;

  public function __construct(shape(
  ?'config_arn' => ConfigArn,
  ?'config_id' => string,
  ?'config_type' => ConfigCapabilityType,
  ?'name' => string,
  ) $s = shape()) {
    $this->config_arn = $config_arn ?? "";
    $this->config_id = $config_id ?? "";
    $this->config_type = $config_type ?? "";
    $this->name = $name ?? "";
  }
}

class ConfigTypeData {
  public AntennaDownlinkConfig $antenna_downlink_config;
  public AntennaDownlinkDemodDecodeConfig $antenna_downlink_demod_decode_config;
  public AntennaUplinkConfig $antenna_uplink_config;
  public DataflowEndpointConfig $dataflow_endpoint_config;
  public TrackingConfig $tracking_config;
  public UplinkEchoConfig $uplink_echo_config;

  public function __construct(shape(
  ?'antenna_downlink_config' => AntennaDownlinkConfig,
  ?'antenna_downlink_demod_decode_config' => AntennaDownlinkDemodDecodeConfig,
  ?'antenna_uplink_config' => AntennaUplinkConfig,
  ?'dataflow_endpoint_config' => DataflowEndpointConfig,
  ?'tracking_config' => TrackingConfig,
  ?'uplink_echo_config' => UplinkEchoConfig,
  ) $s = shape()) {
    $this->antenna_downlink_config = $antenna_downlink_config ?? null;
    $this->antenna_downlink_demod_decode_config = $antenna_downlink_demod_decode_config ?? null;
    $this->antenna_uplink_config = $antenna_uplink_config ?? null;
    $this->dataflow_endpoint_config = $dataflow_endpoint_config ?? null;
    $this->tracking_config = $tracking_config ?? null;
    $this->uplink_echo_config = $uplink_echo_config ?? null;
  }
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

  public function __construct(shape(
  ?'contact_id' => string,
  ?'contact_status' => ContactStatus,
  ?'end_time' => Timestamp,
  ?'error_message' => string,
  ?'ground_station' => string,
  ?'maximum_elevation' => Elevation,
  ?'mission_profile_arn' => MissionProfileArn,
  ?'post_pass_end_time' => Timestamp,
  ?'pre_pass_start_time' => Timestamp,
  ?'region' => string,
  ?'satellite_arn' => satelliteArn,
  ?'start_time' => Timestamp,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->contact_id = $contact_id ?? "";
    $this->contact_status = $contact_status ?? "";
    $this->end_time = $end_time ?? 0;
    $this->error_message = $error_message ?? "";
    $this->ground_station = $ground_station ?? "";
    $this->maximum_elevation = $maximum_elevation ?? null;
    $this->mission_profile_arn = $mission_profile_arn ?? "";
    $this->post_pass_end_time = $post_pass_end_time ?? 0;
    $this->pre_pass_start_time = $pre_pass_start_time ?? 0;
    $this->region = $region ?? "";
    $this->satellite_arn = $satellite_arn ?? "";
    $this->start_time = $start_time ?? 0;
    $this->tags = $tags ?? [];
  }
}

class ContactIdResponse {
  public string $contact_id;

  public function __construct(shape(
  ?'contact_id' => string,
  ) $s = shape()) {
    $this->contact_id = $contact_id ?? "";
  }
}

type ContactList = vec<ContactData>;

type ContactStatus = string;

class CreateConfigRequest {
  public ConfigTypeData $config_data;
  public SafeName $name;
  public TagsMap $tags;

  public function __construct(shape(
  ?'config_data' => ConfigTypeData,
  ?'name' => SafeName,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->config_data = $config_data ?? null;
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateDataflowEndpointGroupRequest {
  public EndpointDetailsList $endpoint_details;
  public TagsMap $tags;

  public function __construct(shape(
  ?'endpoint_details' => EndpointDetailsList,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->endpoint_details = $endpoint_details ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateMissionProfileRequest {
  public DurationInSeconds $contact_post_pass_duration_seconds;
  public DurationInSeconds $contact_pre_pass_duration_seconds;
  public DataflowEdgeList $dataflow_edges;
  public DurationInSeconds $minimum_viable_contact_duration_seconds;
  public SafeName $name;
  public TagsMap $tags;
  public ConfigArn $tracking_config_arn;

  public function __construct(shape(
  ?'contact_post_pass_duration_seconds' => DurationInSeconds,
  ?'contact_pre_pass_duration_seconds' => DurationInSeconds,
  ?'dataflow_edges' => DataflowEdgeList,
  ?'minimum_viable_contact_duration_seconds' => DurationInSeconds,
  ?'name' => SafeName,
  ?'tags' => TagsMap,
  ?'tracking_config_arn' => ConfigArn,
  ) $s = shape()) {
    $this->contact_post_pass_duration_seconds = $contact_post_pass_duration_seconds ?? 0;
    $this->contact_pre_pass_duration_seconds = $contact_pre_pass_duration_seconds ?? 0;
    $this->dataflow_edges = $dataflow_edges ?? [];
    $this->minimum_viable_contact_duration_seconds = $minimum_viable_contact_duration_seconds ?? 0;
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
    $this->tracking_config_arn = $tracking_config_arn ?? "";
  }
}

type Criticality = string;

type DataflowEdge = vec<ConfigArn>;

type DataflowEdgeList = vec<DataflowEdge>;

class DataflowEndpoint {
  public SocketAddress $address;
  public SafeName $name;
  public EndpointStatus $status;

  public function __construct(shape(
  ?'address' => SocketAddress,
  ?'name' => SafeName,
  ?'status' => EndpointStatus,
  ) $s = shape()) {
    $this->address = $address ?? null;
    $this->name = $name ?? "";
    $this->status = $status ?? "";
  }
}

class DataflowEndpointConfig {
  public string $dataflow_endpoint_name;
  public string $dataflow_endpoint_region;

  public function __construct(shape(
  ?'dataflow_endpoint_name' => string,
  ?'dataflow_endpoint_region' => string,
  ) $s = shape()) {
    $this->dataflow_endpoint_name = $dataflow_endpoint_name ?? "";
    $this->dataflow_endpoint_region = $dataflow_endpoint_region ?? "";
  }
}

type DataflowEndpointGroupArn = string;

class DataflowEndpointGroupIdResponse {
  public string $dataflow_endpoint_group_id;

  public function __construct(shape(
  ?'dataflow_endpoint_group_id' => string,
  ) $s = shape()) {
    $this->dataflow_endpoint_group_id = $dataflow_endpoint_group_id ?? "";
  }
}

type DataflowEndpointGroupList = vec<DataflowEndpointListItem>;

class DataflowEndpointListItem {
  public DataflowEndpointGroupArn $dataflow_endpoint_group_arn;
  public string $dataflow_endpoint_group_id;

  public function __construct(shape(
  ?'dataflow_endpoint_group_arn' => DataflowEndpointGroupArn,
  ?'dataflow_endpoint_group_id' => string,
  ) $s = shape()) {
    $this->dataflow_endpoint_group_arn = $dataflow_endpoint_group_arn ?? "";
    $this->dataflow_endpoint_group_id = $dataflow_endpoint_group_id ?? "";
  }
}

class DecodeConfig {
  public JsonString $unvalidated_json;

  public function __construct(shape(
  ?'unvalidated_json' => JsonString,
  ) $s = shape()) {
    $this->unvalidated_json = $unvalidated_json ?? "";
  }
}

class DeleteConfigRequest {
  public string $config_id;
  public ConfigCapabilityType $config_type;

  public function __construct(shape(
  ?'config_id' => string,
  ?'config_type' => ConfigCapabilityType,
  ) $s = shape()) {
    $this->config_id = $config_id ?? "";
    $this->config_type = $config_type ?? "";
  }
}

class DeleteDataflowEndpointGroupRequest {
  public string $dataflow_endpoint_group_id;

  public function __construct(shape(
  ?'dataflow_endpoint_group_id' => string,
  ) $s = shape()) {
    $this->dataflow_endpoint_group_id = $dataflow_endpoint_group_id ?? "";
  }
}

class DeleteMissionProfileRequest {
  public string $mission_profile_id;

  public function __construct(shape(
  ?'mission_profile_id' => string,
  ) $s = shape()) {
    $this->mission_profile_id = $mission_profile_id ?? "";
  }
}

class DemodulationConfig {
  public JsonString $unvalidated_json;

  public function __construct(shape(
  ?'unvalidated_json' => JsonString,
  ) $s = shape()) {
    $this->unvalidated_json = $unvalidated_json ?? "";
  }
}

class DependencyException {
  public string $message;
  public string $parameter_name;

  public function __construct(shape(
  ?'message' => string,
  ?'parameter_name' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->parameter_name = $parameter_name ?? "";
  }
}

class DescribeContactRequest {
  public string $contact_id;

  public function __construct(shape(
  ?'contact_id' => string,
  ) $s = shape()) {
    $this->contact_id = $contact_id ?? "";
  }
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

  public function __construct(shape(
  ?'contact_id' => string,
  ?'contact_status' => ContactStatus,
  ?'end_time' => Timestamp,
  ?'error_message' => string,
  ?'ground_station' => string,
  ?'maximum_elevation' => Elevation,
  ?'mission_profile_arn' => MissionProfileArn,
  ?'post_pass_end_time' => Timestamp,
  ?'pre_pass_start_time' => Timestamp,
  ?'region' => string,
  ?'satellite_arn' => satelliteArn,
  ?'start_time' => Timestamp,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->contact_id = $contact_id ?? "";
    $this->contact_status = $contact_status ?? "";
    $this->end_time = $end_time ?? 0;
    $this->error_message = $error_message ?? "";
    $this->ground_station = $ground_station ?? "";
    $this->maximum_elevation = $maximum_elevation ?? null;
    $this->mission_profile_arn = $mission_profile_arn ?? "";
    $this->post_pass_end_time = $post_pass_end_time ?? 0;
    $this->pre_pass_start_time = $pre_pass_start_time ?? 0;
    $this->region = $region ?? "";
    $this->satellite_arn = $satellite_arn ?? "";
    $this->start_time = $start_time ?? 0;
    $this->tags = $tags ?? [];
  }
}

type Double = float;

type DurationInSeconds = int;

class Eirp {
  public EirpUnits $units;
  public Double $value;

  public function __construct(shape(
  ?'units' => EirpUnits,
  ?'value' => Double,
  ) $s = shape()) {
    $this->units = $units ?? "";
    $this->value = $value ?? 0.0;
  }
}

type EirpUnits = string;

class Elevation {
  public AngleUnits $unit;
  public Double $value;

  public function __construct(shape(
  ?'unit' => AngleUnits,
  ?'value' => Double,
  ) $s = shape()) {
    $this->unit = $unit ?? "";
    $this->value = $value ?? 0.0;
  }
}

class EndpointDetails {
  public DataflowEndpoint $endpoint;
  public SecurityDetails $security_details;

  public function __construct(shape(
  ?'endpoint' => DataflowEndpoint,
  ?'security_details' => SecurityDetails,
  ) $s = shape()) {
    $this->endpoint = $endpoint ?? null;
    $this->security_details = $security_details ?? null;
  }
}

type EndpointDetailsList = vec<EndpointDetails>;

type EndpointStatus = string;

class Frequency {
  public FrequencyUnits $units;
  public Double $value;

  public function __construct(shape(
  ?'units' => FrequencyUnits,
  ?'value' => Double,
  ) $s = shape()) {
    $this->units = $units ?? "";
    $this->value = $value ?? 0.0;
  }
}

class FrequencyBandwidth {
  public BandwidthUnits $units;
  public Double $value;

  public function __construct(shape(
  ?'units' => BandwidthUnits,
  ?'value' => Double,
  ) $s = shape()) {
    $this->units = $units ?? "";
    $this->value = $value ?? 0.0;
  }
}

type FrequencyUnits = string;

class GetConfigRequest {
  public string $config_id;
  public ConfigCapabilityType $config_type;

  public function __construct(shape(
  ?'config_id' => string,
  ?'config_type' => ConfigCapabilityType,
  ) $s = shape()) {
    $this->config_id = $config_id ?? "";
    $this->config_type = $config_type ?? "";
  }
}

class GetConfigResponse {
  public ConfigArn $config_arn;
  public ConfigTypeData $config_data;
  public string $config_id;
  public ConfigCapabilityType $config_type;
  public string $name;
  public TagsMap $tags;

  public function __construct(shape(
  ?'config_arn' => ConfigArn,
  ?'config_data' => ConfigTypeData,
  ?'config_id' => string,
  ?'config_type' => ConfigCapabilityType,
  ?'name' => string,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->config_arn = $config_arn ?? "";
    $this->config_data = $config_data ?? null;
    $this->config_id = $config_id ?? "";
    $this->config_type = $config_type ?? "";
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class GetDataflowEndpointGroupRequest {
  public string $dataflow_endpoint_group_id;

  public function __construct(shape(
  ?'dataflow_endpoint_group_id' => string,
  ) $s = shape()) {
    $this->dataflow_endpoint_group_id = $dataflow_endpoint_group_id ?? "";
  }
}

class GetDataflowEndpointGroupResponse {
  public DataflowEndpointGroupArn $dataflow_endpoint_group_arn;
  public string $dataflow_endpoint_group_id;
  public EndpointDetailsList $endpoints_details;
  public TagsMap $tags;

  public function __construct(shape(
  ?'dataflow_endpoint_group_arn' => DataflowEndpointGroupArn,
  ?'dataflow_endpoint_group_id' => string,
  ?'endpoints_details' => EndpointDetailsList,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->dataflow_endpoint_group_arn = $dataflow_endpoint_group_arn ?? "";
    $this->dataflow_endpoint_group_id = $dataflow_endpoint_group_id ?? "";
    $this->endpoints_details = $endpoints_details ?? [];
    $this->tags = $tags ?? [];
  }
}

class GetMinuteUsageRequest {
  public int $month;
  public int $year;

  public function __construct(shape(
  ?'month' => int,
  ?'year' => int,
  ) $s = shape()) {
    $this->month = $month ?? 0;
    $this->year = $year ?? 0;
  }
}

class GetMinuteUsageResponse {
  public int $estimated_minutes_remaining;
  public boolean $is_reserved_minutes_customer;
  public int $total_reserved_minute_allocation;
  public int $total_scheduled_minutes;
  public int $upcoming_minutes_scheduled;

  public function __construct(shape(
  ?'estimated_minutes_remaining' => int,
  ?'is_reserved_minutes_customer' => boolean,
  ?'total_reserved_minute_allocation' => int,
  ?'total_scheduled_minutes' => int,
  ?'upcoming_minutes_scheduled' => int,
  ) $s = shape()) {
    $this->estimated_minutes_remaining = $estimated_minutes_remaining ?? 0;
    $this->is_reserved_minutes_customer = $is_reserved_minutes_customer ?? false;
    $this->total_reserved_minute_allocation = $total_reserved_minute_allocation ?? 0;
    $this->total_scheduled_minutes = $total_scheduled_minutes ?? 0;
    $this->upcoming_minutes_scheduled = $upcoming_minutes_scheduled ?? 0;
  }
}

class GetMissionProfileRequest {
  public string $mission_profile_id;

  public function __construct(shape(
  ?'mission_profile_id' => string,
  ) $s = shape()) {
    $this->mission_profile_id = $mission_profile_id ?? "";
  }
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

  public function __construct(shape(
  ?'contact_post_pass_duration_seconds' => DurationInSeconds,
  ?'contact_pre_pass_duration_seconds' => DurationInSeconds,
  ?'dataflow_edges' => DataflowEdgeList,
  ?'minimum_viable_contact_duration_seconds' => DurationInSeconds,
  ?'mission_profile_arn' => MissionProfileArn,
  ?'mission_profile_id' => string,
  ?'name' => string,
  ?'region' => string,
  ?'tags' => TagsMap,
  ?'tracking_config_arn' => ConfigArn,
  ) $s = shape()) {
    $this->contact_post_pass_duration_seconds = $contact_post_pass_duration_seconds ?? 0;
    $this->contact_pre_pass_duration_seconds = $contact_pre_pass_duration_seconds ?? 0;
    $this->dataflow_edges = $dataflow_edges ?? [];
    $this->minimum_viable_contact_duration_seconds = $minimum_viable_contact_duration_seconds ?? 0;
    $this->mission_profile_arn = $mission_profile_arn ?? "";
    $this->mission_profile_id = $mission_profile_id ?? "";
    $this->name = $name ?? "";
    $this->region = $region ?? "";
    $this->tags = $tags ?? [];
    $this->tracking_config_arn = $tracking_config_arn ?? "";
  }
}

class GetSatelliteRequest {
  public string $satellite_id;

  public function __construct(shape(
  ?'satellite_id' => string,
  ) $s = shape()) {
    $this->satellite_id = $satellite_id ?? "";
  }
}

class GetSatelliteResponse {
  public GroundStationIdList $ground_stations;
  public noradSatelliteID $norad_satellite_id;
  public satelliteArn $satellite_arn;
  public Uuid $satellite_id;

  public function __construct(shape(
  ?'ground_stations' => GroundStationIdList,
  ?'norad_satellite_id' => noradSatelliteID,
  ?'satellite_arn' => satelliteArn,
  ?'satellite_id' => Uuid,
  ) $s = shape()) {
    $this->ground_stations = $ground_stations ?? [];
    $this->norad_satellite_id = $norad_satellite_id ?? 0;
    $this->satellite_arn = $satellite_arn ?? "";
    $this->satellite_id = $satellite_id ?? "";
  }
}

class GroundStationData {
  public string $ground_station_id;
  public string $ground_station_name;
  public string $region;

  public function __construct(shape(
  ?'ground_station_id' => string,
  ?'ground_station_name' => string,
  ?'region' => string,
  ) $s = shape()) {
    $this->ground_station_id = $ground_station_id ?? "";
    $this->ground_station_name = $ground_station_name ?? "";
    $this->region = $region ?? "";
  }
}

type GroundStationIdList = vec<String>;

type GroundStationList = vec<GroundStationData>;

type Integer = int;

class InvalidParameterException {
  public string $message;
  public string $parameter_name;

  public function __construct(shape(
  ?'message' => string,
  ?'parameter_name' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->parameter_name = $parameter_name ?? "";
  }
}

type JsonString = string;

class ListConfigsRequest {
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListConfigsResponse {
  public ConfigList $config_list;
  public string $next_token;

  public function __construct(shape(
  ?'config_list' => ConfigList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->config_list = $config_list ?? [];
    $this->next_token = $next_token ?? "";
  }
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

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'ground_station' => string,
  ?'max_results' => int,
  ?'mission_profile_arn' => MissionProfileArn,
  ?'next_token' => string,
  ?'satellite_arn' => satelliteArn,
  ?'start_time' => Timestamp,
  ?'status_list' => StatusList,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->ground_station = $ground_station ?? "";
    $this->max_results = $max_results ?? 0;
    $this->mission_profile_arn = $mission_profile_arn ?? "";
    $this->next_token = $next_token ?? "";
    $this->satellite_arn = $satellite_arn ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status_list = $status_list ?? [];
  }
}

class ListContactsResponse {
  public ContactList $contact_list;
  public string $next_token;

  public function __construct(shape(
  ?'contact_list' => ContactList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->contact_list = $contact_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDataflowEndpointGroupsRequest {
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDataflowEndpointGroupsResponse {
  public DataflowEndpointGroupList $dataflow_endpoint_group_list;
  public string $next_token;

  public function __construct(shape(
  ?'dataflow_endpoint_group_list' => DataflowEndpointGroupList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->dataflow_endpoint_group_list = $dataflow_endpoint_group_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListGroundStationsRequest {
  public int $max_results;
  public string $next_token;
  public string $satellite_id;

  public function __construct(shape(
  ?'max_results' => int,
  ?'next_token' => string,
  ?'satellite_id' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->satellite_id = $satellite_id ?? "";
  }
}

class ListGroundStationsResponse {
  public GroundStationList $ground_station_list;
  public string $next_token;

  public function __construct(shape(
  ?'ground_station_list' => GroundStationList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->ground_station_list = $ground_station_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListMissionProfilesRequest {
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListMissionProfilesResponse {
  public MissionProfileList $mission_profile_list;
  public string $next_token;

  public function __construct(shape(
  ?'mission_profile_list' => MissionProfileList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->mission_profile_list = $mission_profile_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListSatellitesRequest {
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListSatellitesResponse {
  public string $next_token;
  public SatelliteList $satellites;

  public function __construct(shape(
  ?'next_token' => string,
  ?'satellites' => SatelliteList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->satellites = $satellites ?? [];
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagsMap $tags;

  public function __construct(shape(
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type MissionProfileArn = string;

class MissionProfileIdResponse {
  public string $mission_profile_id;

  public function __construct(shape(
  ?'mission_profile_id' => string,
  ) $s = shape()) {
    $this->mission_profile_id = $mission_profile_id ?? "";
  }
}

type MissionProfileList = vec<MissionProfileListItem>;

class MissionProfileListItem {
  public MissionProfileArn $mission_profile_arn;
  public string $mission_profile_id;
  public string $name;
  public string $region;

  public function __construct(shape(
  ?'mission_profile_arn' => MissionProfileArn,
  ?'mission_profile_id' => string,
  ?'name' => string,
  ?'region' => string,
  ) $s = shape()) {
    $this->mission_profile_arn = $mission_profile_arn ?? "";
    $this->mission_profile_id = $mission_profile_id ?? "";
    $this->name = $name ?? "";
    $this->region = $region ?? "";
  }
}

type Polarization = string;

class ReserveContactRequest {
  public Timestamp $end_time;
  public string $ground_station;
  public MissionProfileArn $mission_profile_arn;
  public satelliteArn $satellite_arn;
  public Timestamp $start_time;
  public TagsMap $tags;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'ground_station' => string,
  ?'mission_profile_arn' => MissionProfileArn,
  ?'satellite_arn' => satelliteArn,
  ?'start_time' => Timestamp,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->ground_station = $ground_station ?? "";
    $this->mission_profile_arn = $mission_profile_arn ?? "";
    $this->satellite_arn = $satellite_arn ?? "";
    $this->start_time = $start_time ?? 0;
    $this->tags = $tags ?? [];
  }
}

class ResourceLimitExceededException {
  public string $message;
  public string $parameter_name;

  public function __construct(shape(
  ?'message' => string,
  ?'parameter_name' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->parameter_name = $parameter_name ?? "";
  }
}

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type RoleArn = string;

type SafeName = string;

type SatelliteList = vec<SatelliteListItem>;

class SatelliteListItem {
  public GroundStationIdList $ground_stations;
  public noradSatelliteID $norad_satellite_id;
  public satelliteArn $satellite_arn;
  public Uuid $satellite_id;

  public function __construct(shape(
  ?'ground_stations' => GroundStationIdList,
  ?'norad_satellite_id' => noradSatelliteID,
  ?'satellite_arn' => satelliteArn,
  ?'satellite_id' => Uuid,
  ) $s = shape()) {
    $this->ground_stations = $ground_stations ?? [];
    $this->norad_satellite_id = $norad_satellite_id ?? 0;
    $this->satellite_arn = $satellite_arn ?? "";
    $this->satellite_id = $satellite_id ?? "";
  }
}

class SecurityDetails {
  public RoleArn $role_arn;
  public SecurityGroupIdList $security_group_ids;
  public SubnetList $subnet_ids;

  public function __construct(shape(
  ?'role_arn' => RoleArn,
  ?'security_group_ids' => SecurityGroupIdList,
  ?'subnet_ids' => SubnetList,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? "";
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnet_ids = $subnet_ids ?? [];
  }
}

type SecurityGroupIdList = vec<String>;

class SocketAddress {
  public string $name;
  public int $port;

  public function __construct(shape(
  ?'name' => string,
  ?'port' => int,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->port = $port ?? 0;
  }
}

class SpectrumConfig {
  public FrequencyBandwidth $bandwidth;
  public Frequency $center_frequency;
  public Polarization $polarization;

  public function __construct(shape(
  ?'bandwidth' => FrequencyBandwidth,
  ?'center_frequency' => Frequency,
  ?'polarization' => Polarization,
  ) $s = shape()) {
    $this->bandwidth = $bandwidth ?? null;
    $this->center_frequency = $center_frequency ?? null;
    $this->polarization = $polarization ?? "";
  }
}

type StatusList = vec<ContactStatus>;

type String = string;

type SubnetList = vec<String>;

type TagKeys = vec<String>;

class TagResourceRequest {
  public string $resource_arn;
  public TagsMap $tags;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagsMap = dict<String, String>;

type Timestamp = int;

class TrackingConfig {
  public Criticality $autotrack;

  public function __construct(shape(
  ?'autotrack' => Criticality,
  ) $s = shape()) {
    $this->autotrack = $autotrack ?? "";
  }
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateConfigRequest {
  public ConfigTypeData $config_data;
  public string $config_id;
  public ConfigCapabilityType $config_type;
  public SafeName $name;

  public function __construct(shape(
  ?'config_data' => ConfigTypeData,
  ?'config_id' => string,
  ?'config_type' => ConfigCapabilityType,
  ?'name' => SafeName,
  ) $s = shape()) {
    $this->config_data = $config_data ?? null;
    $this->config_id = $config_id ?? "";
    $this->config_type = $config_type ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateMissionProfileRequest {
  public DurationInSeconds $contact_post_pass_duration_seconds;
  public DurationInSeconds $contact_pre_pass_duration_seconds;
  public DataflowEdgeList $dataflow_edges;
  public DurationInSeconds $minimum_viable_contact_duration_seconds;
  public string $mission_profile_id;
  public SafeName $name;
  public ConfigArn $tracking_config_arn;

  public function __construct(shape(
  ?'contact_post_pass_duration_seconds' => DurationInSeconds,
  ?'contact_pre_pass_duration_seconds' => DurationInSeconds,
  ?'dataflow_edges' => DataflowEdgeList,
  ?'minimum_viable_contact_duration_seconds' => DurationInSeconds,
  ?'mission_profile_id' => string,
  ?'name' => SafeName,
  ?'tracking_config_arn' => ConfigArn,
  ) $s = shape()) {
    $this->contact_post_pass_duration_seconds = $contact_post_pass_duration_seconds ?? 0;
    $this->contact_pre_pass_duration_seconds = $contact_pre_pass_duration_seconds ?? 0;
    $this->dataflow_edges = $dataflow_edges ?? [];
    $this->minimum_viable_contact_duration_seconds = $minimum_viable_contact_duration_seconds ?? 0;
    $this->mission_profile_id = $mission_profile_id ?? "";
    $this->name = $name ?? "";
    $this->tracking_config_arn = $tracking_config_arn ?? "";
  }
}

class UplinkEchoConfig {
  public ConfigArn $antenna_uplink_config_arn;
  public boolean $enabled;

  public function __construct(shape(
  ?'antenna_uplink_config_arn' => ConfigArn,
  ?'enabled' => boolean,
  ) $s = shape()) {
    $this->antenna_uplink_config_arn = $antenna_uplink_config_arn ?? "";
    $this->enabled = $enabled ?? false;
  }
}

class UplinkSpectrumConfig {
  public Frequency $center_frequency;
  public Polarization $polarization;

  public function __construct(shape(
  ?'center_frequency' => Frequency,
  ?'polarization' => Polarization,
  ) $s = shape()) {
    $this->center_frequency = $center_frequency ?? null;
    $this->polarization = $polarization ?? "";
  }
}

type Uuid = string;

type noradSatelliteID = int;

type satelliteArn = string;

