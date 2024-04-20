<?php
/**
 * CMS-IDE Visual CMS
 *
 * @category   SaveController
 * @package    CMS-IDE
 *  Copyright (C) 2010-2021  Nebojsa Tomic
 *  
 *  This file is part of CMS-IDE.
 *     
 *  CMS-IDE is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU Lesser General Public
 *  License as published by the Free Software Foundation; either
 *  version 3 of the License, or (at your option) any later version.
 *
 *  CMS-IDE is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 *  Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU Lesser General Public
 *  License along with this library; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * 
 * 
 */

require_once 'NeTFramework/NetActionController.php';

class SaveController extends NetActionController

{

    public function init()
    {
        $this->_sesija = new Zend_Session_Namespace('net');
        $this->_checkAccess(); 
    }

    public function indexAction()
    {       
        /*
        $values = $this->_request->getParams();
        print_r($values);
        $output = $values['pageCodeHtml'];

        $db = Zend_Registry::get('db');
        $db->query("INSERT IGNORE INTO pages(output) VALUES(?)", array($output));   
        */
        //$this->view->fordb = $values['fordb'];         

    }
}