<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * This is the Base Model,
 * This class serves as the base model for all the module controllers in this application
 * This model is design for common database CRUD transactions.
 */
class CoursesModel extends MY_Model
{
    protected $table = 'courses';
    protected $pkey = 'courseId';

    public function __construct()
    {
        parent::__construct();
    }
}
