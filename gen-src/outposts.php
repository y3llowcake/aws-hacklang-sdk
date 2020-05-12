<?hh // strict
namespace slack\aws\outposts;

interface Outposts {
  public function CreateOutpost(CreateOutpostInput $in): Awaitable<\Errors\Result<CreateOutpostOutput>>;
  public function DeleteOutpost(DeleteOutpostInput $in): Awaitable<\Errors\Result<DeleteOutpostOutput>>;
  public function DeleteSite(DeleteSiteInput $in): Awaitable<\Errors\Result<DeleteSiteOutput>>;
  public function GetOutpost(GetOutpostInput $in): Awaitable<\Errors\Result<GetOutpostOutput>>;
  public function GetOutpostInstanceTypes(GetOutpostInstanceTypesInput $in): Awaitable<\Errors\Result<GetOutpostInstanceTypesOutput>>;
  public function ListOutposts(ListOutpostsInput $in): Awaitable<\Errors\Result<ListOutpostsOutput>>;
  public function ListSites(ListSitesInput $in): Awaitable<\Errors\Result<ListSitesOutput>>;
}

class AccessDeniedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type AccountId = string;

type AvailabilityZone = string;

type AvailabilityZoneId = string;

class CreateOutpostInput {
  public ?AvailabilityZone $availability_zone;
  public ?AvailabilityZoneId $availability_zone_id;
  public ?OutpostDescription $description;
  public ?OutpostName $name;
  public ?SiteId $site_id;

  public function __construct(shape(
    ?'availability_zone' => ?AvailabilityZone,
    ?'availability_zone_id' => ?AvailabilityZoneId,
    ?'description' => ?OutpostDescription,
    ?'name' => ?OutpostName,
    ?'site_id' => ?SiteId,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->availability_zone_id = $s['availability_zone_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->site_id = $s['site_id'] ?? '';
  }
}

class CreateOutpostOutput {
  public ?Outpost $outpost;

  public function __construct(shape(
    ?'outpost' => ?Outpost,
  ) $s = shape()) {
    $this->outpost = $s['outpost'] ?? null;
  }
}

class DeleteOutpostInput {
  public ?OutpostId $outpost_id;

  public function __construct(shape(
    ?'outpost_id' => ?OutpostId,
  ) $s = shape()) {
    $this->outpost_id = $s['outpost_id'] ?? '';
  }
}

class DeleteOutpostOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSiteInput {
  public ?SiteId $site_id;

  public function __construct(shape(
    ?'site_id' => ?SiteId,
  ) $s = shape()) {
    $this->site_id = $s['site_id'] ?? '';
  }
}

class DeleteSiteOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ErrorMessage = string;

class GetOutpostInput {
  public ?OutpostId $outpost_id;

  public function __construct(shape(
    ?'outpost_id' => ?OutpostId,
  ) $s = shape()) {
    $this->outpost_id = $s['outpost_id'] ?? '';
  }
}

class GetOutpostInstanceTypesInput {
  public ?MaxResults1000 $max_results;
  public ?Token $next_token;
  public ?OutpostId $outpost_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults1000,
    ?'next_token' => ?Token,
    ?'outpost_id' => ?OutpostId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->outpost_id = $s['outpost_id'] ?? '';
  }
}

class GetOutpostInstanceTypesOutput {
  public ?InstanceTypeListDefinition $instance_types;
  public ?Token $next_token;
  public ?OutpostArn $outpost_arn;
  public ?OutpostId $outpost_id;

  public function __construct(shape(
    ?'instance_types' => ?InstanceTypeListDefinition,
    ?'next_token' => ?Token,
    ?'outpost_arn' => ?OutpostArn,
    ?'outpost_id' => ?OutpostId,
  ) $s = shape()) {
    $this->instance_types = $s['instance_types'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->outpost_id = $s['outpost_id'] ?? '';
  }
}

class GetOutpostOutput {
  public ?Outpost $outpost;

  public function __construct(shape(
    ?'outpost' => ?Outpost,
  ) $s = shape()) {
    $this->outpost = $s['outpost'] ?? null;
  }
}

type InstanceType = string;

class InstanceTypeItem {
  public ?InstanceType $instance_type;

  public function __construct(shape(
    ?'instance_type' => ?InstanceType,
  ) $s = shape()) {
    $this->instance_type = $s['instance_type'] ?? '';
  }
}

type InstanceTypeListDefinition = vec<InstanceTypeItem>;

class InternalServerException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LifeCycleStatus = string;

class ListOutpostsInput {
  public ?MaxResults1000 $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults1000,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOutpostsOutput {
  public ?Token $next_token;
  public ?outpostListDefinition $outposts;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'outposts' => ?outpostListDefinition,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->outposts = $s['outposts'] ?? vec[];
  }
}

class ListSitesInput {
  public ?MaxResults1000 $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults1000,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSitesOutput {
  public ?Token $next_token;
  public ?siteListDefinition $sites;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'sites' => ?siteListDefinition,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->sites = $s['sites'] ?? vec[];
  }
}

type MaxResults1000 = int;

class NotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Outpost {
  public ?AvailabilityZone $availability_zone;
  public ?AvailabilityZoneId $availability_zone_id;
  public ?OutpostDescription $description;
  public ?LifeCycleStatus $life_cycle_status;
  public ?OutpostName $name;
  public ?OutpostArn $outpost_arn;
  public ?OutpostId $outpost_id;
  public ?OwnerId $owner_id;
  public ?SiteId $site_id;

  public function __construct(shape(
    ?'availability_zone' => ?AvailabilityZone,
    ?'availability_zone_id' => ?AvailabilityZoneId,
    ?'description' => ?OutpostDescription,
    ?'life_cycle_status' => ?LifeCycleStatus,
    ?'name' => ?OutpostName,
    ?'outpost_arn' => ?OutpostArn,
    ?'outpost_id' => ?OutpostId,
    ?'owner_id' => ?OwnerId,
    ?'site_id' => ?SiteId,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->availability_zone_id = $s['availability_zone_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->life_cycle_status = $s['life_cycle_status'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->outpost_id = $s['outpost_id'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->site_id = $s['site_id'] ?? '';
  }
}

type OutpostArn = string;

type OutpostDescription = string;

type OutpostId = string;

type OutpostName = string;

type OwnerId = string;

class ServiceQuotaExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Site {
  public ?AccountId $account_id;
  public ?SiteDescription $description;
  public ?SiteName $name;
  public ?SiteId $site_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'description' => ?SiteDescription,
    ?'name' => ?SiteName,
    ?'site_id' => ?SiteId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->site_id = $s['site_id'] ?? '';
  }
}

type SiteDescription = string;

type SiteId = string;

type SiteName = string;

type Token = string;

class ValidationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type outpostListDefinition = vec<Outpost>;

type siteListDefinition = vec<Site>;

