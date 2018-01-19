<?php
namespace App\Form\Tools;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;

class ReCaptchaType extends AbstractType
{
    //TODO retrouver comment gérer les key dans parameters.yml
    /*private $recaptchaPublicKey = "xxxxxxxxxxxxxx";
    private $recaptchaPrivateKey = "xxxxxxxxxxxxxxx";

    public function __construct(string $recaptchaPublicKey, string $recaptchaPrivateKey)
    {
        $this->recaptchaPublicKey = $recaptchaPublicKey;
        $this->recaptchaPrivateKey = $recaptchaPrivateKey;
    }*/

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gRecaptchaResponse', Type\HiddenType::class,
                [   'constraints' => [new ContainsRecaptcha(['recaptchaPrivateKey' => "xxxxxxxxxxxxx"])],
                    'attr' => [
                        'class' => 'g-recaptcha-response'
                    ]])
            ->add('submit', Type\SubmitType::class,
                [
                    'attr' => [
                        'class' => 'btn btn-primary g-recaptcha',
                        'data-sitekey' => "xxxxxxxxxxxx",
                        'data-callback' => "onSubmit"]])
        ;
    }
}