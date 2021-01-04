<?php

/*
 * This file is part of User.
 *
 * (c) Mobizel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Symfony\Component\Security\Core\User;

if (!class_exists(AdvancedUserInterface::class)) {
    interface AdvancedUserInterface extends UserInterface
    {
    }
}
