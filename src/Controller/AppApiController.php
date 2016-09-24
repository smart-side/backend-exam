<?php

namespace App\Controller;

/**
 * Description of AppApiController
 *
 * @author fcorrea
 */
class AppApiController extends AppController
{
    
    public function initialize()
    {
        //parent::initialize();
        
        $this->loadComponent('RequestHandler');
        $this->response->header('Content-Type', 'application/json');
        $this->viewBuilder()->layout('ajax');
        $this->render(FALSE);
    }
    
}
