<?php

namespace SilverHead\Form\DataTransformer;

use SilverHead\TagBundle\Service\TagEntityManagerForDataTransformerInterface;
use Symfony\Component\Form\DataTransformerInterface;

class TagTransformer implements DataTransformerInterface
{
    /**
     * @var TagEntityManagerForDataTransformerInterface
     */
    private TagEntityManagerForDataTransformerInterface $manager;

    public function __construct(TagEntityManagerForDataTransformerInterface $entityManagerForDataTransformer)
    {
        $this->manager = $entityManagerForDataTransformer;
    }

    public function transform($value): string
    {
        return implode(',', $value);
    }

    public function reverseTransform($value): array
    {
        $labels = explode(',', $value);
        $tags = $this->manager->getExistTagsForLabels($labels);

        $newTags = array_diff($labels, $tags);
        foreach ($newTags as $newTag) {
            $tag = $this->manager->getNewEntityTag();
            $tag->setTagLabel($newTag);

            $tags[] = $tag;
        }
        return $tags;
    }
}