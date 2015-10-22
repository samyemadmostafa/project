<?php

namespace CategoryBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class CategoryAdmin extends AbstractType
{
public function buildForm(FormBuilderInterface $builder,array $options)
{	
$builder->add('name','text',array('label' => false,'attr' =>  array('placeholder' => 'please enter your category','class' => 'textsize'),
'translation_domain' => 'category'))
->add('save','submit',array('attr' => array('class' => 'btn btn-info'),'translation_domain' => 'category'))
;		
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('data_class' => 'CategoryBundle\Entity\category'));		
}
public 	function getName()
{
return 'category';	
}
}
