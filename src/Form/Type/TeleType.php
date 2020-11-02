<?php



namespace IntlTelInputBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Tele type.
 *
 */
class TeleType extends AbstractType {

    public function getParent() {
        return 'text';
    }

    public function getName() {
        return 'tele';
    }

}
