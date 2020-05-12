<?hh // strict
namespace slack\aws\ebs;

interface EBS {
  public function GetSnapshotBlock(GetSnapshotBlockRequest $in): Awaitable<\Errors\Result<GetSnapshotBlockResponse>>;
  public function ListChangedBlocks(ListChangedBlocksRequest $in): Awaitable<\Errors\Result<ListChangedBlocksResponse>>;
  public function ListSnapshotBlocks(ListSnapshotBlocksRequest $in): Awaitable<\Errors\Result<ListSnapshotBlocksResponse>>;
}

class Block {
  public ?BlockIndex $block_index;
  public ?BlockToken $block_token;

  public function __construct(shape(
    ?'block_index' => ?BlockIndex,
    ?'block_token' => ?BlockToken,
  ) $s = shape()) {
    $this->block_index = $s['block_index'] ?? 0;
    $this->block_token = $s['block_token'] ?? '';
  }
}

type BlockData = string;

type BlockIndex = int;

type BlockSize = int;

type BlockToken = string;

type Blocks = vec<Block>;

class ChangedBlock {
  public ?BlockIndex $block_index;
  public ?BlockToken $first_block_token;
  public ?BlockToken $second_block_token;

  public function __construct(shape(
    ?'block_index' => ?BlockIndex,
    ?'first_block_token' => ?BlockToken,
    ?'second_block_token' => ?BlockToken,
  ) $s = shape()) {
    $this->block_index = $s['block_index'] ?? 0;
    $this->first_block_token = $s['first_block_token'] ?? '';
    $this->second_block_token = $s['second_block_token'] ?? '';
  }
}

type ChangedBlocks = vec<ChangedBlock>;

type Checksum = string;

type ChecksumAlgorithm = string;

type DataLength = int;

type ErrorMessage = string;

class GetSnapshotBlockRequest {
  public ?BlockIndex $block_index;
  public ?BlockToken $block_token;
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'block_index' => ?BlockIndex,
    ?'block_token' => ?BlockToken,
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->block_index = $s['block_index'] ?? 0;
    $this->block_token = $s['block_token'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

class GetSnapshotBlockResponse {
  public ?BlockData $block_data;
  public ?Checksum $checksum;
  public ?ChecksumAlgorithm $checksum_algorithm;
  public ?DataLength $data_length;

  public function __construct(shape(
    ?'block_data' => ?BlockData,
    ?'checksum' => ?Checksum,
    ?'checksum_algorithm' => ?ChecksumAlgorithm,
    ?'data_length' => ?DataLength,
  ) $s = shape()) {
    $this->block_data = $s['block_data'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->checksum_algorithm = $s['checksum_algorithm'] ?? '';
    $this->data_length = $s['data_length'] ?? 0;
  }
}

class ListChangedBlocksRequest {
  public ?SnapshotId $first_snapshot_id;
  public ?MaxResults $max_results;
  public ?PageToken $next_token;
  public ?SnapshotId $second_snapshot_id;
  public ?BlockIndex $starting_block_index;

  public function __construct(shape(
    ?'first_snapshot_id' => ?SnapshotId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PageToken,
    ?'second_snapshot_id' => ?SnapshotId,
    ?'starting_block_index' => ?BlockIndex,
  ) $s = shape()) {
    $this->first_snapshot_id = $s['first_snapshot_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->second_snapshot_id = $s['second_snapshot_id'] ?? '';
    $this->starting_block_index = $s['starting_block_index'] ?? 0;
  }
}

class ListChangedBlocksResponse {
  public ?BlockSize $block_size;
  public ?ChangedBlocks $changed_blocks;
  public ?TimeStamp $expiry_time;
  public ?PageToken $next_token;
  public ?VolumeSize $volume_size;

  public function __construct(shape(
    ?'block_size' => ?BlockSize,
    ?'changed_blocks' => ?ChangedBlocks,
    ?'expiry_time' => ?TimeStamp,
    ?'next_token' => ?PageToken,
    ?'volume_size' => ?VolumeSize,
  ) $s = shape()) {
    $this->block_size = $s['block_size'] ?? 0;
    $this->changed_blocks = $s['changed_blocks'] ?? vec[];
    $this->expiry_time = $s['expiry_time'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->volume_size = $s['volume_size'] ?? 0;
  }
}

class ListSnapshotBlocksRequest {
  public ?MaxResults $max_results;
  public ?PageToken $next_token;
  public ?SnapshotId $snapshot_id;
  public ?BlockIndex $starting_block_index;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PageToken,
    ?'snapshot_id' => ?SnapshotId,
    ?'starting_block_index' => ?BlockIndex,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->starting_block_index = $s['starting_block_index'] ?? 0;
  }
}

class ListSnapshotBlocksResponse {
  public ?BlockSize $block_size;
  public ?Blocks $blocks;
  public ?TimeStamp $expiry_time;
  public ?PageToken $next_token;
  public ?VolumeSize $volume_size;

  public function __construct(shape(
    ?'block_size' => ?BlockSize,
    ?'blocks' => ?Blocks,
    ?'expiry_time' => ?TimeStamp,
    ?'next_token' => ?PageToken,
    ?'volume_size' => ?VolumeSize,
  ) $s = shape()) {
    $this->block_size = $s['block_size'] ?? 0;
    $this->blocks = $s['blocks'] ?? vec[];
    $this->expiry_time = $s['expiry_time'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->volume_size = $s['volume_size'] ?? 0;
  }
}

type MaxResults = int;

type PageToken = string;

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SnapshotId = string;

type TimeStamp = int;

class ValidationException {
  public ?ErrorMessage $message;
  public ?ValidationExceptionReason $reason;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'reason' => ?ValidationExceptionReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

type ValidationExceptionReason = string;

type VolumeSize = int;

