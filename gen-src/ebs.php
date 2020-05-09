<?hh // strict
namespace slack\aws\ebs;

interface EBS {
  public function GetSnapshotBlock(GetSnapshotBlockRequest) Awaitable<Errors\Result<GetSnapshotBlockResponse>>;
  public function ListChangedBlocks(ListChangedBlocksRequest) Awaitable<Errors\Result<ListChangedBlocksResponse>>;
  public function ListSnapshotBlocks(ListSnapshotBlocksRequest) Awaitable<Errors\Result<ListSnapshotBlocksResponse>>;
}

class Block {
  public BlockToken $block_token;
  public BlockIndex $block_index;
}

class BlockData {
}

class BlockIndex {
}

class GetSnapshotBlockRequest {
  public SnapshotId $snapshot_id;
  public BlockIndex $block_index;
  public BlockToken $block_token;
}

class PageToken {
}

class ValidationException {
  public ErrorMessage $message;
  public ValidationExceptionReason $reason;
}

class ListChangedBlocksResponse {
  public ChangedBlocks $changed_blocks;
  public TimeStamp $expiry_time;
  public VolumeSize $volume_size;
  public BlockSize $block_size;
  public PageToken $next_token;
}

class SnapshotId {
}

class BlockToken {
}

class Blocks {
}

class ChangedBlock {
  public BlockIndex $block_index;
  public BlockToken $first_block_token;
  public BlockToken $second_block_token;
}

class ChangedBlocks {
}

class Checksum {
}

class GetSnapshotBlockResponse {
  public DataLength $data_length;
  public BlockData $block_data;
  public Checksum $checksum;
  public ChecksumAlgorithm $checksum_algorithm;
}

class ValidationExceptionReason {
}

class BlockSize {
}

class ChecksumAlgorithm {
}

class DataLength {
}

class ListChangedBlocksRequest {
  public SnapshotId $first_snapshot_id;
  public SnapshotId $second_snapshot_id;
  public PageToken $next_token;
  public MaxResults $max_results;
  public BlockIndex $starting_block_index;
}

class MaxResults {
}

class TimeStamp {
}

class ErrorMessage {
}

class ListSnapshotBlocksRequest {
  public SnapshotId $snapshot_id;
  public PageToken $next_token;
  public MaxResults $max_results;
  public BlockIndex $starting_block_index;
}

class ListSnapshotBlocksResponse {
  public Blocks $blocks;
  public TimeStamp $expiry_time;
  public VolumeSize $volume_size;
  public BlockSize $block_size;
  public PageToken $next_token;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class VolumeSize {
}

