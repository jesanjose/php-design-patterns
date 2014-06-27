<?php
require_once 'sample_service.php';

class ServiceLocator
{
    public function getSampleService()
    {
        return new SampleService;
    }
}