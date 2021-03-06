<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\InstallerBundle\Requirement;

use PHPSpec2\ObjectBehavior;

class SyliusRequirements extends ObjectBehavior
{
    /**
     * @param Sylius\Bundle\InstallerBundle\Requirement\RequirementCollection $requirementCollection
     */
    function let($requirementCollection)
    {
        $this->beConstructedWith(array($requirementCollection));
    }

    function it_is_a_iterator_aggregate()
    {
        $this->shouldBeAnInstanceOf('IteratorAggregate');
    }

    function it_gets_iterator()
    {
        $this->getIterator()->shouldHaveType('ArrayIterator');
    }

    function its_add_should_have_fluent_interface($requirementCollection)
    {
        $this->add($requirementCollection)->shouldHaveType('Sylius\Bundle\InstallerBundle\Requirement\SyliusRequirements');
    }
}
