<?php
namespace Hesam\ShamsiDate\Form\Type;

use Hesam\ShamsiDate\Transformer\DateTimObjectTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatePickerType extends AbstractType
{
    private $transformer;

    public function __construct()
    {
        $this->transformer = new DateTimObjectTransformer;
    }

    public function configureOptions(OptionsResolver $resolver)
    {}

    public function getParent()
    {
        return HiddenType::class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer($this->transformer);
    }


}
