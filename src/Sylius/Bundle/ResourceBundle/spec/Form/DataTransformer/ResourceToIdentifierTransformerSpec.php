<?php

namespace spec\Sylius\Bundle\ResourceBundle\Form\DataTransformer;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Component\Resource\Repository\ResourceRepositoryInterface;

// Since the root namespace "spec" is not in our autoload
require_once __DIR__ . DIRECTORY_SEPARATOR . 'FakeEntity.php';

class ResourceToIdentifierTransformerSpec extends ObjectBehavior
{
    function let(ResourceRepositoryInterface $repository)
    {
        $this->beConstructedWith($repository, 'id');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\ResourceBundle\Form\DataTransformer\ResourceToIdentifierTransformer');
    }

    function it_does_not_transform_null_value(ResourceRepositoryInterface $repository)
    {
        $repository->findOneBy(Argument::any())->shouldNotBeCalled();

        $this->transform(null)->shouldReturn(null);
    }

    function it_throws_an_exception_on_non_existing_resource(ResourceRepositoryInterface $repository)
    {
        $value = 6;

        $repository->findOneBy(array('id' => $value))->shouldBeCalled()->willReturn(null);

        $this->shouldThrow('Symfony\Component\Form\Exception\TransformationFailedException')->duringTransform($value);
    }

    function it_transforms_identifier_in_resource(ResourceRepositoryInterface $repository, FakeEntity $resource)
    {
        $value = 5;

        $repository->findOneBy(array('id' => $value))->shouldBeCalled()->willReturn($resource);

        $this->transform($value)->shouldReturn($resource);
    }

    function it_does_not_reverse_null_value()
    {
        $this->reverseTransform(null)->shouldReturn('');
    }

    function it_reverses_resource_in_identifier(FakeEntity $value)
    {
        $value->getId()->shouldBeCalled()->willReturn(6);

        $this->reverseTransform($value)->shouldReturn(6);
    }
}