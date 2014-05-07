<?php

App::uses('AppController', 'Controller');
App::uses('Mandrill', 'Lib/Mandril');

/**
 * Members Controller
 *
 * @property Member $Member
 * @property PaginatorComponent $Paginator
 */
class MembersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    
    public function team(){
        $this->layout='team';
    }
    public function registerMember() {

        $this->layout = 'register';

        if ($this->request->is('post')) {
//            $password = base_convert(uniqid('pass', true), 10, 36);
            $password = $this->request->data['Member']['password'];
//            $this->request->data['Member']['password'] = $password;
            $member = $this->Member->findByUsername($this->request->data['Member']['username']);

            $user = $this->request->data['Member']['username'];
            $names = $this->request->data['Member']['names'] . " " . $this->request->data['Member']['lastnames'];
            if (!$member) {
                $this->Member->expert=0;
                $this->Member->create();
                $profile = 'Miembro';
                if ($this->Member->save($this->request->data)) {
                    $this->sendEmailRegisterToAdministrator($password, $user, $names);
                    $this->Session->setFlash(__('Registro exitoso.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                }
            } else {
                $this->Member->id = $member['Member']['id'];
                if ($this->Member->save($this->request->data)) {
                    $this->sendEmailRegisterToAdministrator($password, $user, $names,$profile);
                    $this->Session->setFlash(__('Ya se encontraba registrado.  Se han actualizado sus datos con la información ingresada.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                } else {
                    $this->Session->setFlash(__('No se puedo procesar su solicitud. Intente de nuevo.'));
                }
            }
        }
    }
    
    public function registerExpert() {

        $this->layout = 'register';

        if ($this->request->is('post')) {
//            $password = base_convert(uniqid('pass', true), 10, 36);
            $password = $this->request->data['Member']['password'];
//            $this->request->data['Member']['password'] = $password;
            $member = $this->Member->findByUsername($this->request->data['Member']['username']);

            $user = $this->request->data['Member']['username'];
            $names = $this->request->data['Member']['names'] . " " . $this->request->data['Member']['lastnames'];
            if (!$member) {
                $this->Member->expert=1;
                $this->Member->create();
                $profile = 'Experto';
                if ($this->Member->save($this->request->data)) {
                    $this->sendEmailRegisterToAdministrator($password, $user, $names,$profile);
                    $this->Session->setFlash(__('Registro exitoso.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                }
            } else {
                $this->Member->id = $member['Member']['id'];
                if ($this->Member->save($this->request->data)) {
                    $this->sendEmailRegisterToAdministrator($password, $user, $names);
                    $this->Session->setFlash(__('Ya se encontraba registrado.  Se han actualizado sus datos con la información ingresada.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                } else {
                    $this->Session->setFlash(__('No se puedo procesar su solicitud. Intente de nuevo.'));
                }
            }
        }
    }


    public function how() {

        $this->layout = 'how';
    }

    public function dashboard() {
        
    }

    public function query() {

        $this->layout = 'query';

        if ($this->request->is('post')) {

            
            $query = $this->request->data['Member']['query'];
            $member = $this->Member->findByUsername($this->request->data['Member']['username']);
            
            $user = $this->request->data['Member']['username'];
            if (!$member) {
                $this->Member->create();
                if ($this->Member->save($this->request->data)) {
                    $this->sendEmailQueryToAdministrator($user, $query);
                    $this->Session->setFlash(__('Su solicitud ha sido enviada. Gracias por contactarnos.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                }
            } else {
                $this->Member->id = $member['Member']['id'];
                if ($this->Member->save($this->request->data)) {
                    $user = $this->request->data['Member']['username'];
                    $this->sendEmailQueryToAdministrator($user, $query);
                    $this->Session->setFlash(__('Su solicitud ha sido enviada. Gracias por contactarnos.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                } else {
                    $this->Session->setFlash(__('No se puedo procesar su solicitud. Intente de nuevo.'));
                }
            }
        }
        $administrators = $this->Member->Administrator->find('list');
        $companies = $this->Member->Company->find('list');
        $titles = $this->Member->Title->find('list');
        $categories = $this->Member->Category->find('list');
        $cities = $this->Member->City->find('list');
        $expertratings = $this->Member->ExpertRating->find('list');
        $languages = $this->Member->Language->find('list');
        $skills = $this->Member->Skill->find('list');
        $this->set(compact('administrators', 'companies', 'titles', 'categories', 'cities', 'expertratings', 'languages', 'skills'));
    }

    public function home() {

        $this->layout = 'home';
        $skills = $this->Member->Skill->find('list');
        $this->set(compact('skills'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Member->exists($id)) {
            throw new NotFoundException(__('Invalid member'));
        }
        $options = array('conditions' => array('Member.' . $this->Member->primaryKey => $id));
        $this->set('member', $this->Member->find('first', $options));
    }

    public function postulate() {

        $this->layout = 'add';

        $skills = $this->Member->Skill->find('list');
        if ($this->request->is('post')) {

            $member = $this->Member->findByUsername($this->request->data['Member']['username']);
//            $password = $this->Member->data['Member']['password'];
            $user = $this->request->data['Member']['username'];
            
            $names = $this->request->data['Member']['names'];
            if (!$member) {
                $this->Member->create();
                if ($this->Member->save($this->request->data)) {
                    $this->sendEmailPostulateToAdministrator( $user, $names);
                    $this->Session->setFlash(__('Su solicitud ha sido enviada. Gracias por contactarnos.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                }
            } else {
                $this->Member->id = $member['Member']['id'];
                if ($this->Member->save($this->request->data)) {
                    $this->sendEmailPostulateToAdministrator( $user, $names);
                    $this->Session->setFlash(__('Su solicitud ha sido enviada. Gracias por contactarnos.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                } else {
                    $this->Session->setFlash(__('No se puedo procesar su solicitud. Intente de nuevo.'));
                }
            }
        }
        $this->set(compact('skills'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

        $this->layout = 'add';

        if ($this->request->is('post')) {

            $member = $this->Member->findByEmail($this->request->data['Member']['username']);
            $password = $this->Member->data['Member']['password'];
            $user = $this->request->data['Member']['username'];
            $names = $this->request->data['Member']['names'] . " " . $this->request->data['Member']['lastnames'];
            if (!$member) {
                $this->Member->create();
                if ($this->Member->save($this->request->data)) {
                    $this->sendEmailRegisterToAdministrator($password, $user, $names);
                    $this->Session->setFlash(__('Su solicitud ha sido enviada. Gracias por contactarnos.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                }
            } else {
                $this->Member->id = $member['Member']['id'];
                if ($this->Member->save($this->request->data)) {
                    $this->sendEmailRegisterToAdministrator($password, $user, $names);
                    $this->Session->setFlash(__('Su solicitud ha sido enviada. Gracias por contactarnos.'));
                    return $this->redirect(array('controller' => 'members', 'action' => 'home'));
                } else {
                    $this->Session->setFlash(__('No se puedo procesar su solicitud. Intente de nuevo.'));
                }
            }
        }
        $administrators = $this->Member->Administrator->find('list');
        $companies = $this->Member->Company->find('list');
        $titles = $this->Member->Title->find('list');
        $categories = $this->Member->Category->find('list');
        $cities = $this->Member->City->find('list');
        $expertratings = $this->Member->ExpertRating->find('list');
        $languages = $this->Member->Language->find('list');
        $skills = $this->Member->Skill->find('list');
        $this->set(compact('administrators', 'companies', 'titles', 'categories', 'cities', 'expertratings', 'languages', 'skills'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Member->exists($id)) {
            throw new NotFoundException(__('Miembro Inválido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->Member->id = $id;
            if ($this->Member->save($this->request->data)) {
                $this->Session->setFlash(__('Información Actualizada.'));
            }
        } else {
            $options = array('conditions' => array('Member.' . $this->Member->primaryKey => $id));
            $this->request->data = $this->Member->find('first', $options);
        }
        $administrators = $this->Member->Administrator->find('list');
        $companies = $this->Member->Company->find('list');
        $titles = $this->Member->Title->find('list');
        $categories = $this->Member->Category->find('list');
        $cities = $this->Member->City->find('list');
        $expertratings = $this->Member->ExpertRating->find('list');
        $languages = $this->Member->Language->find('list');
        $skills = $this->Member->Skill->find('list');
        $this->set(compact('administrators', 'companies', 'titles', 'categories', 'cities', 'expertratings', 'languages', 'skills'));
    }

    public function sendEmailPostulateToAdministrator($user, $names) {
        $mandrill = new Mandrill("P8cGiA-elEPpgRQpwq7r5A");
//        $mandrill = new Mandrill("j83E8NeSOmPAg53");

        $url = "/messages/send"; // URL PARA ENVIO

        $params = array(
            'message' => array(
                "html" => 'Se ha postulado un usuario: ' . $names . '<br>' . ' email: ' . $user,
                "subject" => 'Postulación de nuevo usuario',
                "from_email" => 'app@instarespuesta.com',
                "from_name" => "App Insta Respuesta",
                "to" => array(
                    array(
                        "email" => "postular@instarespuesta.com",
                        "name" => "Postulate",
                        "type" => "to"
                    ),
                      array(
                        "email" => "wilmeralzateroman@gmail.com",
                        "name" => "Postulate",
                        "type" => "to"
                    )
                ),
                "headers" => array(
                    "Reply-To" => "noreply@instarespuesta.com"
                )
            )
        );
        $return = $mandrill->call($url, $params);
    }

    public function sendEmailRegisterToAdministrator($password, $user, $names,$profile) {
        $mandrill = new Mandrill("P8cGiA-elEPpgRQpwq7r5A");
//        $mandrill = new Mandrill("j83E8NeSOmPAg53");

        $url = "/messages/send"; // URL PARA ENVIO

        $params = array(
            'message' => array(
                "html" => 'Se ha registrado un nuevo usuario: ' . $names . '<br>' . ' email: ' . $user.'<br> Perfil: '.$profile,
                "subject" => 'Registro de nuevo usuario',
                "from_email" => 'app@instarespuesta.com',
                "from_name" => "App Insta Respuesta",
                "to" => array(
                    array(
                        "email" => "registar@instarespuesta.com",
                        "name" => "Registro",
                        "type" => "to"
                    ),
                    array(
                        "email" => "wilmeralzateroman@gmail.com",
                        "name" => "Registro",
                        "type" => "to"
                    )
                ),
                "headers" => array(
                    "Reply-To" => "noreply@instarespuesta.com"
                )
            )
        );
        $return = $mandrill->call($url, $params);
    }

    public function sendEmailQueryToAdministrator($user, $query) {
        $mandrill = new Mandrill("P8cGiA-elEPpgRQpwq7r5A");
//        $mandrill = new Mandrill("j83E8NeSOmPAg53");

        $url = "/messages/send"; // URL PARA ENVIO

        $params = array(
            'message' => array(
                "html" => 'Un usuario ha hecho una consulta: <br> email: ' . $user . '<br>Texto de Consulta: ' . $query,
                "subject" => 'Consulta de usuario',
                "from_email" => 'app@instarespuesta.com',
                "from_name" => "App Insta Respuesta",
                "to" => array(
                    array(
                        "email" => "consultar@instarespuesta.com",
                        "name" => "Cosulta",
                        "type" => "to"
                    ),
                      array(
                        "email" => "wilmeralzateroman@gmail.com",
                        "name" => "Cosulta",
                        "type" => "to"
                    )
                ),
                "headers" => array(
                    "Reply-To" => "noreply@instarespuesta.com"
                )
            )
        );
        $return = $mandrill->call($url, $params);
    }

    public function sendEmailToAdministratorUpdateUser($password, $user, $names) {
        $mandrill = new Mandrill("P8cGiA-elEPpgRQpwq7r5A");
//        $mandrill = new Mandrill("j83E8NeSOmPAg53");

        $url = "/messages/send"; // URL PARA ENVIO

        $params = array(
            'message' => array(
                "html" => 'Se han actualizado los datos de un usuario: ' . $names . '<br>' . ' email: ' . $user,
                "subject" => 'Seguimiento de usuarios',
                "from_email" => 'noreply@instarespuesta.com',
                "from_name" => "App Insta Respuesta",
                "to" => array(
                    array(
//                        "email" => "wilmeralzateroman@gmail.com",
                        "email" => "greg.tully@instarespuesta.com",
                        "name" => "Administrator",
                        "type" => "to"
                    )
                ),
                "headers" => array(
                    "Reply-To" => "noreply@instarespuesta.com"
                )
            )
        );
        $return = $mandrill->call($url, $params);
    }

    public function skill() {

        if (!$this->Member->exists($this->Session->read('Auth.User.id'))) {
            throw new NotFoundException(__('Invalid member'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->Member->id = $this->Session->read('Auth.User.id');
            if ($this->Member->save($this->request->data)) {

                $this->Session->setFlash(__('Aptitudes Actualizadas'));
            }
        } else {
            $options = array('conditions' => array('Member.' . $this->Member->primaryKey => $this->Session->read('Auth.User.id')));
            $this->request->data = $this->Member->find('first', $options);
        }
        $administrators = $this->Member->Administrator->find('list');
        $companies = $this->Member->Company->find('list');
        $titles = $this->Member->Title->find('list');
        $categories = $this->Member->Category->find('list');
        $cities = $this->Member->City->find('list');
        $expertratings = $this->Member->ExpertRating->find('list');
        $languages = $this->Member->Language->find('list');
        $skills = $this->Member->Skill->find('list');
        $this->set(compact('administrators', 'companies', 'titles', 'categories', 'cities', 'expertratings', 'languages', 'skills'));
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function login() {
        $this->layout = 'myaccount';

        if ($this->request->is('post')) {

            if ($this->Auth->login()) {
                $member = $this->Session->read('Auth.User');
                $this->redirect($this->Auth->loginRedirect);
            } else {

                $this->Session->setFlash(__('Usuario invalido, intente nuevamente'));
            }
        }
    }

    public function recovery() {
        $this->layout = 'login';
        if ($this->request->is('post')) {
            $member = $this->Member->findByEmail($this->request->data['Member']['username']);
            if ($member) {
//debug($member);
                $password = base_convert(uniqid('pass', true), 10, 36);
                $member['Member']['password'] = $password;
                $this->request->data = $member;

                if ($this->Member->save($this->request->data)) {

                    $mandrill = new Mandrill("P8cGiA-elEPpgRQpwq7r5A");
                    $url = "/messages/send"; // URL PARA ENVIO

                    $params = array(
                        'message' => array(
                            "html" => 'Su nueva clave es: ' . $password,
                            "subject" => 'Bienvenido a Instarespuesta',
                            "from_email" => 'noreply@instarespuesta.com',
                            "from_name" => "App Insta Respuesta",
                            "to" => array(
                                array(
                                    "email" => $this->request->data['Member']['username'],
                                    "name" => $this->request->data['Member']['names'],
                                    "type" => "to"
                                )
                            ),
                            "headers" => array(
                                "Reply-To" => "noreply@instarespuesta.com"
                            )
                        )
                    );
                    $return = $mandrill->call($url, $params);

                    $this->Session->setFlash(__('Hemos enviado un correo electronico con tu nueva clave'));
                    return $this->redirect($this->Auth->loginRedirect);
                } else {
                    $this->Session->setFlash(__('No se pudo recuperar su clave de acceso'));
                }
            } else {
                $this->Session->setFlash(__('El correo electronico no se encuentra registrado'));
            }
        }
    }

    public function restart() {

        $this->Member->id = $this->Session->read('Auth.User.id');
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->validar_clave($this->request->data['Member']['newpassword'], $this->error_message)) {
                if ($this->request->data['Member']['newpassword'] == $this->request->data['Member']['newpassword_']) {

                    if (strlen($this->request->data['Member']['lastpassword']) > 0) {
                        $r = $this->Member->findByIdAndPassword($this->Member->id, Security::hash($this->request->data['Member']['lastpassword']));
                        if ($r) {
                            $this->Member->set(array('password' => $this->request->data['Member']['newpassword']));
                            if ($this->Member->save()) {
                                $this->Session->setFlash("Se ha guardado correctamente su nueva contraseña");
                            } else {
                                $this->Session->setFlash("No se ha podido actualizar su contraseña");
                            }
                        } else {
                            $this->Session->setFlash("No ha suministrado una clave valida para su usuario");
                        }
                    } else {
                        $this->Session->setFlash("Debe suministrar su clave anterior");
                    }
                } else {
                    $this->Session->setFlash("No coinciden las nuevas claves");
                }
            } else {
                $this->Session->setFlash($this->error_message);
            }
        }
    }

    protected function validar_clave($clave, &$error_clave) {
        if (strlen($clave) < 7) {
            $error_clave = "La clave debe tener al menos 7 caracteres";
            return false;
        }
        if (strlen($clave) > 16) {
            $error_clave = "La clave no puede tener más de 16 caracteres";
            return false;
        }
        if (!preg_match('`[a-z]`', $clave)) {
            $error_clave = "La clave debe tener al menos una letra minúscula";
            return false;
        }
        if (!preg_match('`[A-Z]`', $clave)) {
            $error_clave = "La clave debe tener al menos una letra mayúscula";
            return false;
        }
        if (!preg_match('`[0-9]`', $clave)) {
            $error_clave = "La clave debe tener al menos un caracter numérico";
            return false;
        }
        $error_clave = "";
        return true;
    }

    public function search() {
        if ($this->request->is('post')) {

            if ($search = $this->Member->query("SELECT Member.*, Title.*, Company.*, ExpertRating.* FROM members Member, "
                    . "members_skills Member_Skill, titles Title, companies Company, skills Skill, expert_ratings ExpertRating where "
                    . "Member.company_id = Company.id and "
                    . "Member.title_id = Title.id and "
                    . "Member.id = Member_Skill.member_id and "
                    . "Skill.id=Member_Skill.skill_id and Skill.description "
                    . "like '%" . $this->request->data['search'] . "%'")) {

//                debug($search);
                if (isset($search)) {

                    $this->set('results', $search);
                } else {
                    $this->Session->setFlash(__('No hay resultados'));
                }
            }
        } else
            return $this->redirect('url', array('action' => 'dashboard'));
    }

    public function updateAvatar() {

        if ($this->request->is('post')) {

            $url = $this->comprobateDirectory($this->Session->read('Auth.User.id'));

            if ($url != null) {

                $resultado = $this->uploadImage($url, $this->data['Member']['file']);

                if ($resultado) {
                    $this->request->data['Member']['image'] = $this->data['Member']['file']['name'];
                    if ($this->Member->query('update members set image ="' . $this->request->data['Member']['image'] . '" '
                                    . 'where members.id=' . $this->Session->read('Auth.User.id'))) {
                        $this->Session->setFlash(__('Imagen Actualizada'));
                    }
                } else {
                    $this->Session->setFlash(__('No se pudo subir la imagen'));
                }
            } else {
                $this->Session->setFlash(__('No se pudo crear el directorio'));
            }
        }

        $user = $this->Member->find('all', array('conditions' => array('Member.id' => $this->Session->read('Auth.User.id'))));
        $this->set('user', $user);
    }

    public function uploadImage($url = null, $image = null) {
//        define('SITE_ROOT', realpath(dirname(__FILE__)));
        if ($image["error"] > 0) {
            return false;
        } else {
            move_uploaded_file($image['tmp_name'], $url . "/" . $image['name']);
            return true;
        }
    }

    public function comprobateDirectory($id = null) {

        $serv = $_SERVER['DOCUMENT_ROOT'] . "/";

        $ruta = $serv . "instarespuesta/app/webroot/img/avatars/$id";

        if (!file_exists($ruta)) {
            mkdir($ruta, 0777);
            return $ruta;
        } else {
            return $ruta;
        }
    }

    public function expert() {

        $skills = $this->Member->Skill->find('list');
        $languages = $this->Member->Language->find('list');
        $titles = $this->Member->Title->find('list');
        $companies = $this->Member->Company->find('list');
        $cities = $this->Member->City->find('list');
        $this->set('cities', $cities);
        $this->set('companies', $companies);
        $this->set('skills', $skills);
        $this->set('titles', $titles);
        $this->set('languages', $languages);

        if ($this->request->is('post')) {
            
        }
    }

    public function makeCall() {
        
    }

    public function termsandconditionsClient() {

        $this->layout = 'terms';
    }
    public function termsandconditionsExpert() {

        $this->layout = 'terms';
    }

}
