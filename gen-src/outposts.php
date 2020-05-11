<?hh // strict
namespace slack\aws\outposts;

interface Outposts {
  public function CreateOutpost(CreateOutpostInput): Awaitable<Errors\Result<CreateOutpostOutput>>;
  public function DeleteOutpost(DeleteOutpostInput): Awaitable<Errors\Result<DeleteOutpostOutput>>;
  public function DeleteSite(DeleteSiteInput): Awaitable<Errors\Result<DeleteSiteOutput>>;
  public function GetOutpost(GetOutpostInput): Awaitable<Errors\Result<GetOutpostOutput>>;
  public function GetOutpostInstanceTypes(GetOutpostInstanceTypesInput): Awaitable<Errors\Result<GetOutpostInstanceTypesOutput>>;
  public function ListOutposts(ListOutpostsInput): Awaitable<Errors\Result<ListOutpostsOutput>>;
  public function ListSites(ListSitesInput): Awaitable<Errors\Result<ListSitesOutput>>;
}

class AccessDeniedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AccountId = string;

type AvailabilityZone = string;

type AvailabilityZoneId = string;

class CreateOutpostInput {
  public AvailabilityZone $availability_zone;
  public AvailabilityZoneId $availability_zone_id;
  public OutpostDescription $description;
  public OutpostName $name;
  public SiteId $site_id;

  public function __construct(shape(
  ?'availability_zone' => AvailabilityZone,
  ?'availability_zone_id' => AvailabilityZoneId,
  ?'description' => OutpostDescription,
  ?'name' => OutpostName,
  ?'site_id' => SiteId,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->availability_zone_id = $availability_zone_id ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->site_id = $site_id ?? "";
  }
}

class CreateOutpostOutput {
  public Outpost $outpost;

  public function __construct(shape(
  ?'outpost' => Outpost,
  ) $s = shape()) {
    $this->outpost = $outpost ?? null;
  }
}

class DeleteOutpostInput {
  public OutpostId $outpost_id;

  public function __construct(shape(
  ?'outpost_id' => OutpostId,
  ) $s = shape()) {
    $this->outpost_id = $outpost_id ?? "";
  }
}

class DeleteOutpostOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSiteInput {
  public SiteId $site_id;

  public function __construct(shape(
  ?'site_id' => SiteId,
  ) $s = shape()) {
    $this->site_id = $site_id ?? "";
  }
}

class DeleteSiteOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ErrorMessage = string;

class GetOutpostInput {
  public OutpostId $outpost_id;

  public function __construct(shape(
  ?'outpost_id' => OutpostId,
  ) $s = shape()) {
    $this->outpost_id = $outpost_id ?? "";
  }
}

class GetOutpostInstanceTypesInput {
  public MaxResults1000 $max_results;
  public Token $next_token;
  public OutpostId $outpost_id;

  public function __construct(shape(
  ?'max_results' => MaxResults1000,
  ?'next_token' => Token,
  ?'outpost_id' => OutpostId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->outpost_id = $outpost_id ?? "";
  }
}

class GetOutpostInstanceTypesOutput {
  public InstanceTypeListDefinition $instance_types;
  public Token $next_token;
  public OutpostArn $outpost_arn;
  public OutpostId $outpost_id;

  public function __construct(shape(
  ?'instance_types' => InstanceTypeListDefinition,
  ?'next_token' => Token,
  ?'outpost_arn' => OutpostArn,
  ?'outpost_id' => OutpostId,
  ) $s = shape()) {
    $this->instance_types = $instance_types ?? [];
    $this->next_token = $next_token ?? "";
    $this->outpost_arn = $outpost_arn ?? "";
    $this->outpost_id = $outpost_id ?? "";
  }
}

class GetOutpostOutput {
  public Outpost $outpost;

  public function __construct(shape(
  ?'outpost' => Outpost,
  ) $s = shape()) {
    $this->outpost = $outpost ?? null;
  }
}

type InstanceType = string;

class InstanceTypeItem {
  public InstanceType $instance_type;

  public function __construct(shape(
  ?'instance_type' => InstanceType,
  ) $s = shape()) {
    $this->instance_type = $instance_type ?? "";
  }
}

type InstanceTypeListDefinition = vec<InstanceTypeItem>;

class InternalServerException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LifeCycleStatus = string;

class ListOutpostsInput {
  public MaxResults1000 $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults1000,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListOutpostsOutput {
  public Token $next_token;
  public outpostListDefinition $outposts;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'outposts' => outpostListDefinition,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->outposts = $outposts ?? [];
  }
}

class ListSitesInput {
  public MaxResults1000 $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults1000,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListSitesOutput {
  public Token $next_token;
  public siteListDefinition $sites;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'sites' => siteListDefinition,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->sites = $sites ?? [];
  }
}

type MaxResults1000 = int;

class NotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Outpost {
  public AvailabilityZone $availability_zone;
  public AvailabilityZoneId $availability_zone_id;
  public OutpostDescription $description;
  public LifeCycleStatus $life_cycle_status;
  public OutpostName $name;
  public OutpostArn $outpost_arn;
  public OutpostId $outpost_id;
  public OwnerId $owner_id;
  public SiteId $site_id;

  public function __construct(shape(
  ?'availability_zone' => AvailabilityZone,
  ?'availability_zone_id' => AvailabilityZoneId,
  ?'description' => OutpostDescription,
  ?'life_cycle_status' => LifeCycleStatus,
  ?'name' => OutpostName,
  ?'outpost_arn' => OutpostArn,
  ?'outpost_id' => OutpostId,
  ?'owner_id' => OwnerId,
  ?'site_id' => SiteId,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->availability_zone_id = $availability_zone_id ?? "";
    $this->description = $description ?? "";
    $this->life_cycle_status = $life_cycle_status ?? "";
    $this->name = $name ?? "";
    $this->outpost_arn = $outpost_arn ?? "";
    $this->outpost_id = $outpost_id ?? "";
    $this->owner_id = $owner_id ?? "";
    $this->site_id = $site_id ?? "";
  }
}

type OutpostArn = string;

type OutpostDescription = string;

type OutpostId = string;

type OutpostName = string;

type OwnerId = string;

class ServiceQuotaExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Site {
  public AccountId $account_id;
  public SiteDescription $description;
  public SiteName $name;
  public SiteId $site_id;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'description' => SiteDescription,
  ?'name' => SiteName,
  ?'site_id' => SiteId,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->site_id = $site_id ?? "";
  }
}

type SiteDescription = string;

type SiteId = string;

type SiteName = string;

type Token = string;

class ValidationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type outpostListDefinition = vec<Outpost>;

type siteListDefinition = vec<Site>;

