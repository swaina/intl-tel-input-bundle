<?php

/*
 * This file is part of the Webit package.
 *
 * (c) Alaa Kanaan <kanaan278@gmail.com>
 *
 */

namespace Spike\IntlTelBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Tele type.
 *
 * @author Alaa Kanaan <kanaan278@gmail.com>
 */
class TeleType extends AbstractType {

    public function getParent() {
        return 'text';
    }

    public function getName() {
        return 'tele';
    }

}
