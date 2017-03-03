<?php
namespace UserBundle\Form\Type;

use Doctrine\ORM\Query\Expr\Base;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseFormType;

class RegistrationFormType extends BaseFormType {

    /**
     * @var string
     */
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class) {
        parent::__construct($class);
    }

}