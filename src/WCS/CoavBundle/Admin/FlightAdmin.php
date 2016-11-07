<?php
// src/WCS/CoavBundle/Admin/FlightAdmin.php

namespace WCS\CoavBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;


class FlightAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            //->add('arrival')

            ->add('departure')
            ->add('arrival')
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeTime')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('departure')
            ->add('arrival')
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeTime')

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('departure')
            ->add('arrival')
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeTime')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('departures')
            ->add('arrivals')
            ->add('pilot')
            ->add('free_seats')
            ->add('take_time')
        ;
    }
}