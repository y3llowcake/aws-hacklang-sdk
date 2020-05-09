<?hh // strict
namespace slack\aws\personalize-runtime;

interface Personalize Runtime {
  public function GetPersonalizedRanking(GetPersonalizedRankingRequest): Awaitable<Errors\Result<GetPersonalizedRankingResponse>>;
  public function GetRecommendations(GetRecommendationsRequest): Awaitable<Errors\Result<GetRecommendationsResponse>>;
}

class Arn {
}

class AttributeName {
}

class AttributeValue {
}

class Context {
}

class ErrorMessage {
}

class GetPersonalizedRankingRequest {
  public Arn $campaign_arn;
  public Context $context;
  public InputList $input_list;
  public UserID $user_id;
}

class GetPersonalizedRankingResponse {
  public ItemList $personalized_ranking;
}

class GetRecommendationsRequest {
  public Arn $campaign_arn;
  public Context $context;
  public ItemID $item_id;
  public NumResults $num_results;
  public UserID $user_id;
}

class GetRecommendationsResponse {
  public ItemList $item_list;
}

class InputList {
}

class InvalidInputException {
  public ErrorMessage $message;
}

class ItemID {
}

class ItemList {
}

class NumResults {
}

class PredictedItem {
  public ItemID $item_id;
  public Score $score;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class Score {
}

class UserID {
}

