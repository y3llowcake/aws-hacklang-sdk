<?hh // strict
namespace slack\aws\migrationhub-config;

interface MigrationHub Config {
  public function CreateHomeRegionControl(CreateHomeRegionControlRequest): Awaitable<Errors\Result<CreateHomeRegionControlResult>>;
  public function DescribeHomeRegionControls(DescribeHomeRegionControlsRequest): Awaitable<Errors\Result<DescribeHomeRegionControlsResult>>;
  public function GetHomeRegion(GetHomeRegionRequest): Awaitable<Errors\Result<GetHomeRegionResult>>;
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class ControlId {
}

class CreateHomeRegionControlRequest {
  public DryRun $dry_run;
  public HomeRegion $home_region;
  public Target $target;
}

class CreateHomeRegionControlResult {
  public HomeRegionControl $home_region_control;
}

class DescribeHomeRegionControlsMaxResults {
}

class DescribeHomeRegionControlsRequest {
  public ControlId $control_id;
  public HomeRegion $home_region;
  public DescribeHomeRegionControlsMaxResults $max_results;
  public Token $next_token;
  public Target $target;
}

class DescribeHomeRegionControlsResult {
  public HomeRegionControls $home_region_controls;
  public Token $next_token;
}

class DryRun {
}

class DryRunOperation {
  public ErrorMessage $message;
}

class ErrorMessage {
}

class GetHomeRegionRequest {
}

class GetHomeRegionResult {
  public HomeRegion $home_region;
}

class HomeRegion {
}

class HomeRegionControl {
  public ControlId $control_id;
  public HomeRegion $home_region;
  public RequestedTime $requested_time;
  public Target $target;
}

class HomeRegionControls {
}

class InternalServerError {
  public ErrorMessage $message;
}

class InvalidInputException {
  public ErrorMessage $message;
}

class RequestedTime {
}

class RetryAfterSeconds {
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class Target {
  public TargetId $id;
  public TargetType $type;
}

class TargetId {
}

class TargetType {
}

class ThrottlingException {
  public ErrorMessage $message;
  public RetryAfterSeconds $retry_after_seconds;
}

class Token {
}

