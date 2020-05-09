<?hh // strict
namespace slack\aws\entitlement.marketplace;

interface  {
  public function GetEntitlements(GetEntitlementsRequest): Awaitable<Errors\Result<GetEntitlementsResult>>;
}

class Boolean {
}

class Double {
}

class Entitlement {
  public NonEmptyString $customer_identifier;
  public NonEmptyString $dimension;
  public Timestamp $expiration_date;
  public ProductCode $product_code;
  public EntitlementValue $value;
}

class EntitlementList {
}

class EntitlementValue {
  public boolean $boolean_value;
  public Double $double_value;
  public int $integer_value;
  public string $string_value;
}

class ErrorMessage {
}

class FilterValue {
}

class FilterValueList {
}

class GetEntitlementFilterName {
}

class GetEntitlementFilters {
}

class GetEntitlementsRequest {
  public GetEntitlementFilters $filter;
  public int $max_results;
  public NonEmptyString $next_token;
  public ProductCode $product_code;
}

class GetEntitlementsResult {
  public EntitlementList $entitlements;
  public NonEmptyString $next_token;
}

class Integer {
}

class InternalServiceErrorException {
  public ErrorMessage $message;
}

class InvalidParameterException {
  public ErrorMessage $message;
}

class NonEmptyString {
}

class ProductCode {
}

class String {
}

class ThrottlingException {
  public ErrorMessage $message;
}

class Timestamp {
}

