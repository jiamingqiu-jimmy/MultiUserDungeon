<?php
/**
 * Created by IntelliJ IDEA.
 * User: jiami
 * Date: 4/13/2019
 * Time: 12:13 PM
 */

/**
 * Interface IRoom
 *
 * Interface that describes the abstract properties that a typical room should have
 */
interface IRoom
{

  public function getName(): ?string;

  public function getDescription(): ?string;

  public function getRoomObjectList(): ?array;

  public function getRoomPlayerList(): ?array;

}