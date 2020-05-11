<?hh // strict
namespace slack\aws\migrationhub-config;

interface MigrationHub Config {
  public function CreateHomeRegionControl(CreateHomeRegionControlRequest): Awaitable<Errors\Result<CreateHomeRegionControlResult>>;
  public function DescribeHomeRegionControls(DescribeHomeRegionControlsRequest): Awaitable<Errors\Result<DescribeHomeRegionControlsResult>>;
  public function GetHomeRegion(GetHomeRegionRequest): Awaitable<Errors\Result<GetHomeRegionResult>>;
}

class AccessDeniedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ControlId = string;

class CreateHomeRegionControlRequest {
  public DryRun $dry_run;
  public HomeRegion $home_region;
  public Target $target;

  public function __construct(shape(
  ?'dry_run' => DryRun,
  ?'home_region' => HomeRegion,
  ?'target' => Target,
  ) $s = shape()) {
    $this->dry_run = $dry_run ?? false;
    $this->home_region = $home_region ?? "";
    $this->target = $target ?? null;
  }
}

class CreateHomeRegionControlResult {
  public HomeRegionControl $home_region_control;

  public function __construct(shape(
  ?'home_region_control' => HomeRegionControl,
  ) $s = shape()) {
    $this->home_region_control = $home_region_control ?? null;
  }
}

type DescribeHomeRegionControlsMaxResults = int;

class DescribeHomeRegionControlsRequest {
  public ControlId $control_id;
  public HomeRegion $home_region;
  public DescribeHomeRegionControlsMaxResults $max_results;
  public Token $next_token;
  public Target $target;

  public function __construct(shape(
  ?'control_id' => ControlId,
  ?'home_region' => HomeRegion,
  ?'max_results' => DescribeHomeRegionControlsMaxResults,
  ?'next_token' => Token,
  ?'target' => Target,
  ) $s = shape()) {
    $this->control_id = $control_id ?? "";
    $this->home_region = $home_region ?? "";
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->target = $target ?? null;
  }
}

class DescribeHomeRegionControlsResult {
  public HomeRegionControls $home_region_controls;
  public Token $next_token;

  public function __construct(shape(
  ?'home_region_controls' => HomeRegionControls,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->home_region_controls = $home_region_controls ?? [];
    $this->next_token = $next_token ?? ;
  }
}

type DryRun = bool;

class DryRunOperation {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ErrorMessage = string;

class GetHomeRegionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetHomeRegionResult {
  public HomeRegion $home_region;

  public function __construct(shape(
  ?'home_region' => HomeRegion,
  ) $s = shape()) {
    $this->home_region = $home_region ?? "";
  }
}

type HomeRegion = string;

class HomeRegionControl {
  public ControlId $control_id;
  public HomeRegion $home_region;
  public RequestedTime $requested_time;
  public Target $target;

  public function __construct(shape(
  ?'control_id' => ControlId,
  ?'home_region' => HomeRegion,
  ?'requested_time' => RequestedTime,
  ?'target' => Target,
  ) $s = shape()) {
    $this->control_id = $control_id ?? "";
    $this->home_region = $home_region ?? "";
    $this->requested_time = $requested_time ?? 0;
    $this->target = $target ?? null;
  }
}

type HomeRegionControls = vec<HomeRegionControl>;

class InternalServerError {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidInputException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type RequestedTime = int;

type RetryAfterSeconds = int;

class ServiceUnavailableException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Target {
  public TargetId $id;
  public TargetType $type;

  public function __construct(shape(
  ?'id' => TargetId,
  ?'type' => TargetType,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->type = $type ?? ;
  }
}

type TargetId = string;

type TargetType = string;

class ThrottlingException {
  public ErrorMessage $message;
  public RetryAfterSeconds $retry_after_seconds;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'retry_after_seconds' => RetryAfterSeconds,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->retry_after_seconds = $retry_after_seconds ?? 0;
  }
}

type Token = string;

