<?php
/**
 * Created by IntelliJ IDEA.
 * User: jiami
 * Date: 4/13/2019
 * Time: 12:23 PM
 */

/**
 * Interface IUser
 *
 * Use of interface that allows us to later extend properties of players
 * i.e. perhaps we would want implement different privileges for players
 *    for ex: a different player-class called admin, which has a set of adminstrative rules
 *    that the players don't have
 *  We can then define an abstract getRole method in this interface that allows us to then create a adminPlayer
 */
interface IUser
{
  public function getName(): string;
}