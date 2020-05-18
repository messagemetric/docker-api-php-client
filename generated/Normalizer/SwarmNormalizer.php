<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SwarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Swarm';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\Swarm;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\Swarm();
        if (property_exists($data, 'ID') && $data->{'ID'} !== null) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Version') && $data->{'Version'} !== null) {
            $object->setVersion($this->denormalizer->denormalize($data->{'Version'}, 'Docker\\API\\Model\\ObjectVersion', 'json', $context));
        }
        if (property_exists($data, 'CreatedAt') && $data->{'CreatedAt'} !== null) {
            $object->setCreatedAt($data->{'CreatedAt'});
        }
        if (property_exists($data, 'UpdatedAt') && $data->{'UpdatedAt'} !== null) {
            $object->setUpdatedAt($data->{'UpdatedAt'});
        }
        if (property_exists($data, 'Spec') && $data->{'Spec'} !== null) {
            $object->setSpec($this->denormalizer->denormalize($data->{'Spec'}, 'Docker\\API\\Model\\SwarmSpec', 'json', $context));
        }
        if (property_exists($data, 'TLSInfo') && $data->{'TLSInfo'} !== null) {
            $object->setTLSInfo($this->denormalizer->denormalize($data->{'TLSInfo'}, 'Docker\\API\\Model\\TLSInfo', 'json', $context));
        }
        if (property_exists($data, 'RootRotationInProgress') && $data->{'RootRotationInProgress'} !== null) {
            $object->setRootRotationInProgress($data->{'RootRotationInProgress'});
        }
        if (property_exists($data, 'DataPathPort') && $data->{'DataPathPort'} !== null) {
            $object->setDataPathPort($data->{'DataPathPort'});
        }
        if (property_exists($data, 'DefaultAddrPool') && $data->{'DefaultAddrPool'} !== null) {
            $values = [];
            foreach ($data->{'DefaultAddrPool'} as $value) {
                $values[] = $value;
            }
            $object->setDefaultAddrPool($values);
        }
        if (property_exists($data, 'SubnetSize') && $data->{'SubnetSize'} !== null) {
            $object->setSubnetSize($data->{'SubnetSize'});
        }
        if (property_exists($data, 'JoinTokens') && $data->{'JoinTokens'} !== null) {
            $object->setJoinTokens($this->denormalizer->denormalize($data->{'JoinTokens'}, 'Docker\\API\\Model\\JoinTokens', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'CreatedAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'UpdatedAt'} = $object->getUpdatedAt();
        }
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getTLSInfo()) {
            $data->{'TLSInfo'} = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
        }
        if (null !== $object->getRootRotationInProgress()) {
            $data->{'RootRotationInProgress'} = $object->getRootRotationInProgress();
        }
        if (null !== $object->getDataPathPort()) {
            $data->{'DataPathPort'} = $object->getDataPathPort();
        }
        if (null !== $object->getDefaultAddrPool()) {
            $values = [];
            foreach ($object->getDefaultAddrPool() as $value) {
                $values[] = $value;
            }
            $data->{'DefaultAddrPool'} = $values;
        }
        if (null !== $object->getSubnetSize()) {
            $data->{'SubnetSize'} = $object->getSubnetSize();
        }
        if (null !== $object->getJoinTokens()) {
            $data->{'JoinTokens'} = $this->normalizer->normalize($object->getJoinTokens(), 'json', $context);
        }

        return $data;
    }
}
