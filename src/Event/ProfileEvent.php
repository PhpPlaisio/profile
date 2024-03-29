<?php
declare(strict_types=1);

namespace Plaisio\Profile\Event;

/**
 * Abstract parent class for events about profiles.
 */
abstract class ProfileEvent
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * @var int
   */
  protected int $proId;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Object constructor.
   *
   * @param int $proId
   */
  public function __construct(int $proId)
  {
    $this->proId = $proId;
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the profile.
   *
   * @return int
   */
  public function getProId(): int
  {
    return $this->proId;
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
