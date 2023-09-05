<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Entities;

use DateTimeImmutable;

interface DeviceCodeEntityInterface extends TokenInterface
{
    public function getUserCode(): string;

    public function setUserCode(string $userCode);

    public function getVerificationUri(): string;

    public function setVerificationUri(string $verificationUri);

    public function getLastPolledAt(): ?DateTimeImmutable;

    public function setLastPolledAt(DateTimeImmutable $lastPolledAt): void;

    public function getInterval(): int;

    public function setInterval(int $interval): void;

    public function getIntervalInAuthResponse(): bool;

    public function setIntervalInAuthResponse(bool $intervalInAuthResponse): bool;

    public function getUserApproved(): bool;

    public function setUserApproved(bool $userApproved): void;
}
