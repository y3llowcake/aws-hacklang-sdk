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
}

class AccountId {
}

class AvailabilityZone {
}

class AvailabilityZoneId {
}

class CreateOutpostInput {
  public AvailabilityZone $availability_zone;
  public AvailabilityZoneId $availability_zone_id;
  public OutpostDescription $description;
  public OutpostName $name;
  public SiteId $site_id;
}

class CreateOutpostOutput {
  public Outpost $outpost;
}

class DeleteOutpostInput {
  public OutpostId $outpost_id;
}

class DeleteOutpostOutput {
}

class DeleteSiteInput {
  public SiteId $site_id;
}

class DeleteSiteOutput {
}

class ErrorMessage {
}

class GetOutpostInput {
  public OutpostId $outpost_id;
}

class GetOutpostInstanceTypesInput {
  public MaxResults1000 $max_results;
  public Token $next_token;
  public OutpostId $outpost_id;
}

class GetOutpostInstanceTypesOutput {
  public InstanceTypeListDefinition $instance_types;
  public Token $next_token;
  public OutpostArn $outpost_arn;
  public OutpostId $outpost_id;
}

class GetOutpostOutput {
  public Outpost $outpost;
}

class InstanceType {
}

class InstanceTypeItem {
  public InstanceType $instance_type;
}

class InstanceTypeListDefinition {
}

class InternalServerException {
  public ErrorMessage $message;
}

class LifeCycleStatus {
}

class ListOutpostsInput {
  public MaxResults1000 $max_results;
  public Token $next_token;
}

class ListOutpostsOutput {
  public Token $next_token;
  public outpostListDefinition $outposts;
}

class ListSitesInput {
  public MaxResults1000 $max_results;
  public Token $next_token;
}

class ListSitesOutput {
  public Token $next_token;
  public siteListDefinition $sites;
}

class MaxResults1000 {
}

class NotFoundException {
  public ErrorMessage $message;
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
}

class OutpostArn {
}

class OutpostDescription {
}

class OutpostId {
}

class OutpostName {
}

class OwnerId {
}

class ServiceQuotaExceededException {
  public ErrorMessage $message;
}

class Site {
  public AccountId $account_id;
  public SiteDescription $description;
  public SiteName $name;
  public SiteId $site_id;
}

class SiteDescription {
}

class SiteId {
}

class SiteName {
}

class Token {
}

class ValidationException {
  public ErrorMessage $message;
}

class outpostListDefinition {
}

class siteListDefinition {
}

