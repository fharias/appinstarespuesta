<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('CakeEmail', 'Network/Email');

class MembersController extends AppController {

private $error_message = null;

public function beforeFilter() {
parent::beforeFilter();
$this->Auth->allow(array('index', 'add', 'recovery', 'sendpassword', 'login', 'logout'));
}
    
 public function index() {
            $this->layout = 'login';
      
 }
    

    public function add() {
      
        if ($this->request->is('post')) {
            $password = base_convert(uniqid('pass', true), 10, 36);
            $this->request->data['Member']['password'] = $password;
            $this->request->data['Member']['email'] = $this->request->data['Member']['username'];
            $member = $this->Member->findByEmail($this->request->data['Member']['email']);
            if (!$member) {
                if ($this->Member->save($this->request->data)) {
                    $email = new CakeEmail();
                    $email->from('noreply@instarespuesta.com');
                    $email->to($this->request->data['Member']['username']);
                    $email->subject('Bienvenido a Instarespuesta');
                    $result = $email->send('Bienvenido, Su nueva clave es: ' . $password);
                    return $this->redirect("/members?estado=1");
                 //   $this->set('popular', 123);
                 //   return  $this->layout = 'login';
                } else {
                    
                return $this->redirect("/members?estado=4");
               //     return $this->redirect(array('action' => 'index'));
                }
            } else {
                return $this->redirect("/members?estado=5");
               //     return $this->redirect(array('action' => 'index'));
                    }
        } else {
              return $this->redirect("/members?estado=4");
                 //   return $this->redirect(array('action' => 'index'));
        }
            
    } 
   
     public function login() {
       
         if ($this->request->is('post')) {
            $this->request->data['Member']['email'] = $this->request->data['Member']['username'];
             debug($this->Auth->login());
            if ($this->Auth->login()) {
            return $this->redirect("/members?estado=8");
            }else{
            return $this->redirect("/members?estado=6");
            }
        } else {
            return $this->redirect("/members?estado=7");
            
        }    
    }
    
      public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    
     public function recovery() {
        
        if ($this->request->is('post')) {
            $member = $this->Member->findByEmail($this->request->data['Member']['username']);
            if ($member) {
                debug($member);
                $password = base_convert(uniqid('pass', true), 10, 36);
                $member['Member']['password'] = $password;
                $this->request->data = $member;
                if ($this->Member->save($this->request->data)) {
                    $email = new CakeEmail();
                    $email->config('gmail');
                    $email->from('josarta@gmail.com');
                    $email->to($this->request->data['Member']['email']);
                    $email->subject('Bienvenido a Instarespuesta');
                    $result = $email->send('Bienvenido, Su nueva clave es: ' . $password);
                    if ($result) {
                        return $this->redirect("/members?estado=1");
                    } else {
                        return $this->redirect("/members?estado=3");
                    }
                     
                } else {
                    return $this->redirect("/members?estado=3");
                    
                }
            } else {
                    return $this->redirect("/members?estado=2");
                    
                    }
        } else {
                    return $this->redirect("/members?estado=3");
                   
        
        }
   

    }
 
}
?>
