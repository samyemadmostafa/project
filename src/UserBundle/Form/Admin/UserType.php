<?php

namespace UserBundle\Form\Admin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder,array $options)
{
$builder->add('username','text',array('label' => false,'attr' => array('class' => 'form-control','placeholder' => 'please enter your name'),'translation_domain' => 'user'))
->add('password', 'repeated', array(
    'type' => 'password',
    'invalid_message' => 'The password fields must match',
    'options' => array('attr' => array('class' => 'form-control')),
    'required' => true,
    'first_options'  => array('label' => 'Password'),
    'second_options' => array('label' => 'Repeat Password'),
	'translation_domain' => 'public',
))
->add('email','email',array('label' => false,'attr' => array('class' => 'form-control','placeholder' => 'please enter your email'),'translation_domain' => 'user'))
->add('image','file',array('data_class' => null,'required' => false))
->add('facebook','text',array('label' => false,'attr' => array('class' => 'form-control','placeholder' => 'please enter your FB'),'translation_domain' => 'user'))
->add('twitter','text',array('label' => false,'attr' => array('class' => 'form-control','placeholder' => 'please enter your twitter'),'translation_domain' => 'user'))
->add('google_plus','text',array('label' => false,'attr' => array('class' => 'form-control','placeholder' => 'please enter your google plus'),'translation_domain' => 'user'))
->add('linkedin','text',array('label' =>false,'attr' => array('class' => 'form-control','placeholder' => 'please enter your linkedin'),'translation_domain' => 'user'))
->add('youtube','text',array('label' => false,'attr' => array('class' => 'form-control','placeholder' => 'please enter your youtube'),'translation_domain' => 'user'))
->add('save','submit',array('attr' => array('class' => 'width-35 pull-right btn btn-sm btn-primary'),'translation_domain' => 'user'));
}
public function confiqureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('data_class' => 'UserBundle:Entity:user'));		
}
public function getName()	
{
return 'newuser';		
}
}
