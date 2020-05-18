<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskSpecContainerSpecPrivilegesCredentialSpec
{
    /**
     * Load credential spec from a Swarm Config with the given ID.

    > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`, and `CredentialSpec.Config` are mutually exclusive.
     *
     * @var string
     */
    protected $config;
    /**
     * Load credential spec from this file. The file is read by the daemon, and must be present in the.

    > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`, and `CredentialSpec.Config` are mutually exclusive.
     *
     * @var string
     */
    protected $file;
    /**
     * Load credential spec from this value in the Windows registry. The specified registry value must be.

    > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`, and `CredentialSpec.Config` are mutually exclusive.
     *
     * @var string
     */
    protected $registry;

    /**
     * Load credential spec from a Swarm Config with the given ID.

    > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`, and `CredentialSpec.Config` are mutually exclusive.
     *
     * @return string
     */
    public function getConfig(): ?string
    {
        return $this->config;
    }

    /**
     * Load credential spec from a Swarm Config with the given ID.

    > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`, and `CredentialSpec.Config` are mutually exclusive.
     *
     * @param string $config
     */
    public function setConfig(?string $config): self
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Load credential spec from this file. The file is read by the daemon, and must be present in the.

    > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`, and `CredentialSpec.Config` are mutually exclusive.
     *
     * @return string
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * Load credential spec from this file. The file is read by the daemon, and must be present in the.

    > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`, and `CredentialSpec.Config` are mutually exclusive.
     *
     * @param string $file
     */
    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Load credential spec from this value in the Windows registry. The specified registry value must be.

    > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`, and `CredentialSpec.Config` are mutually exclusive.
     *
     * @return string
     */
    public function getRegistry(): ?string
    {
        return $this->registry;
    }

    /**
     * Load credential spec from this value in the Windows registry. The specified registry value must be.

    > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`, and `CredentialSpec.Config` are mutually exclusive.
     *
     * @param string $registry
     */
    public function setRegistry(?string $registry): self
    {
        $this->registry = $registry;

        return $this;
    }
}
