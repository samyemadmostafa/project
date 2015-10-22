<?php

namespace ArticleBundle\Form\Admin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ArticleType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder,array $options)
{
$builder->add('name','text',array('label' => false,'attr' => array('class' => 'form-control','placeholder' => 'please enter your article name'),'translation_domain' => 'article'))
->add('image','file',array('data_class' => null,'required' => false))
->add('description','textarea',array('label' => false,'attr' => array('class' => 'textsize','placeholder' => 'please enter your article description'),'translation_domain' => 'article')) 
->add('category_id','entity',array('attr' => array('class' => 'form-control'),'class' => 'CategoryBundle:category','choice_label' => 'getName',
		'label' => false,))		
->add('save','submit',array('attr' => array('class' => 'width-35 pull-right btn btn-sm btn-primary'),'translation_domain' => 'article'));
}
public function confiqureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('data_class' => 'ArticleBundle\Entity\article'));		
}
public function getName()	
{
return 'article';		
}
}
