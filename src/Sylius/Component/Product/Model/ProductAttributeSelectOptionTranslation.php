<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Product\Model;

use Sylius\Component\Attribute\Model\AttributeSelectOptionTranslation as BaseAttributeSelectOptionTranslation;

/**
 * @author Asier Marqués <asier@simettric.com>
 */
class ProductAttributeSelectOptionTranslation extends BaseAttributeSelectOptionTranslation
    implements ProductAttributeSelectOptionTranslationInterface
{
}