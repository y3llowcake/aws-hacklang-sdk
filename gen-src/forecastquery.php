<?hh // strict
namespace slack\aws\forecastquery;

interface forecastquery {
  public function QueryForecast(QueryForecastRequest) Awaitable<Errors\Result<QueryForecastResponse>>;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class DataPoint {
  public Timestamp $timestamp;
  public Double $value;
}

class DateTime {
}

class Forecast {
  public Predictions $predictions;
}

class Predictions {
}

class AttributeName {
}

class Double {
}

class Timestamp {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class QueryForecastRequest {
  public Filters $filters;
  public NextToken $next_token;
  public Arn $forecast_arn;
  public DateTime $start_date;
  public DateTime $end_date;
}

class QueryForecastResponse {
  public Forecast $forecast;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class Arn {
}

class ErrorMessage {
}

class Filters {
}

class InvalidInputException {
  public ErrorMessage $message;
}

class Statistic {
}

class AttributeValue {
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class NextToken {
}

class TimeSeries {
}

