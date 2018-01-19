<?php
namespace App\Form\Tools;

use Symfony\Component\Validator\Constraint;

class ContainsRecaptcha extends Constraint
{
    public $message = 'ReCaptcha non valide';
    public $recaptchaPrivateKey = '';

    public function getRequiredOptions()
    {
        return ['recaptchaPrivateKey'];
    }
}
{

}