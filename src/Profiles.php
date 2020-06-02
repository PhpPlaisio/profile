<?php
declare(strict_types=1);

namespace Plaisio\Profile;

/**
 * Interface for classes for profile handling.
 */
interface Profiles
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Changes a profile.
   *
   * Note: Because a profile is defined by the IDs of its underlying roles the IDs of the underlying roles of the
   * profile have not changed. However, one or more underlying roles can be changed.
   *
   * @param int $proId The ID of the profile.
   */
  public function change(int $proId): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates a new profile.
   *
   * @param array $roles
   *
   * @return int
   */
  public function create(array $roles): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of a profile given the underlying roles. If the profile does not exists it will be created.
   *
   * @param array $roles
   *
   * @return int
   */
  public function fetch(array $roles): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Deletes an obsolete profile.
   *
   * @param int $proId The ID of the profile.
   */
  public function delete(int $proId): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
