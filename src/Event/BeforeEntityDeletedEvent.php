<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Event;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class BeforeEntityDeletedEvent
{
    private $entityInstance;

    public function __construct($entityInstance)
    {
        $this->entityInstance = $entityInstance;
    }

    public function getEntityInstance()
    {
        return $this->entityInstance;
    }
}
