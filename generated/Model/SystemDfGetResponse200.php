<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SystemDfGetResponse200
{
    /**
     * @var int
     */
    protected $layersSize;
    /**
     * @var ImageSummary[]
     */
    protected $images;
    /**
     * @var ContainerSummaryItem[][]
     */
    protected $containers;
    /**
     * @var Volume[]
     */
    protected $volumes;
    /**
     * @var BuildCache[]
     */
    protected $buildCache;

    /**
     * @return int
     */
    public function getLayersSize(): ?int
    {
        return $this->layersSize;
    }

    /**
     * @param int $layersSize
     */
    public function setLayersSize(?int $layersSize): self
    {
        $this->layersSize = $layersSize;

        return $this;
    }

    /**
     * @return ImageSummary[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param ImageSummary[] $images
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return ContainerSummaryItem[][]
     */
    public function getContainers(): ?array
    {
        return $this->containers;
    }

    /**
     * @param ContainerSummaryItem[][] $containers
     */
    public function setContainers(?array $containers): self
    {
        $this->containers = $containers;

        return $this;
    }

    /**
     * @return Volume[]
     */
    public function getVolumes(): ?array
    {
        return $this->volumes;
    }

    /**
     * @param Volume[] $volumes
     */
    public function setVolumes(?array $volumes): self
    {
        $this->volumes = $volumes;

        return $this;
    }

    /**
     * @return BuildCache[]
     */
    public function getBuildCache(): ?array
    {
        return $this->buildCache;
    }

    /**
     * @param BuildCache[] $buildCache
     */
    public function setBuildCache(?array $buildCache): self
    {
        $this->buildCache = $buildCache;

        return $this;
    }
}
