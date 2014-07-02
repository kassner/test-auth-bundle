<?php

namespace Kassner\AuthBundle\Security;

use Symfony\Component\Security\Core\Authorization\Voter\RoleVoter;

class Voter extends RoleVoter
{

    public function supportsAttribute($attribute)
    {
        return true;
    }

    public function supportsClass($class)
    {
        return true;
    }

    /** @TODO extend `vote` method and cache the decisions, since too many calls
     * to the same role will be calculated each time, even in the same request
     */
}
