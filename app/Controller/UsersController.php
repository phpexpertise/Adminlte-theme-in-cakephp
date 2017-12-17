<?php 
class UsersController extends AppController 
{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
    public $uses = array('User', 'Country', 'State', 'City');

    public function index()
    {
        $this->paginate = array(
            'conditions' => array('status' => '1'),
            'limit' => 3,
            'order' => array('id' => 'desc')
        );
        $users = $this->paginate('User');
        $this->set('users', $users);
    }

    public function view($id = null)
    {
        $countries = $this->Country->find('all');
        $country_arr = array('' => '--Select one--');
        foreach ($countries as &$country) {
            $country_arr[$country['Country']['id']] = $country['Country']['country_name'];
        }
        unset($country);
        $this->set('countries', $country_arr);

        $states = $this->State->find('all');
        $state_arr = array('' => '--Select one--');
        foreach ($states as &$state) {
            $state_arr[$state['State']['id']] = $state['State']['state_name'];
        }
        unset($state);
        $this->set('states', $state_arr);

        $cities = $this->City->find('all');
        $city_arr = array('' => '--Select one--');
        foreach ($cities as &$city) {
            $city_arr[$city['City']['id']] = $city['City']['city_name'];
        }
        unset($city);
        $this->set('cities', $city_arr);

        if (!$id) {
            throw new NotFoundException(__('Invalid user'));
        }

        $user = $this->User->findById($id);
        if (!$user) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $user);
    }

    public function add()
    {   
        $countries = $this->Country->find('all');
        $country_arr = array('' => '--Select one--');
        foreach ($countries as &$country) {
            $country_arr[$country['Country']['id']] = $country['Country']['country_name'];
        }
        unset($country);
        $this->set('countries', $country_arr);
        if ($this->request->is('post')) {
            $this->User->create();
            $this->User->set($this->request->data);            
            if ($this->User->validates()) {
                if ($this->User->save($this->request->data, $validate=false)) {
                    $this->Flash->success(__("User has been saved successfully"));
                    return $this->redirect(array('action'=>'index'));
                }
                $this->Flash->error(__('Unable to add user'));
            } else {
                $errors = $this->User->validationErrors;
            }            
        }
    }

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__("Invalid user"));
        }

        $user = $this->User->findById($id);
        if (!$user) {
            throw new NotFoundException(__("Invalid user"));
        }

        $countries = $this->Country->find('all');
        $country_arr = array('' => '--Select one--');
        foreach ($countries as &$country) {
            $country_arr[$country['Country']['id']] = $country['Country']['country_name'];
        }
        unset($country);
        $this->set('countries', $country_arr);

        $states = $this->State->find('all');
        $state_arr = array('' => '--Select one--');
        foreach ($states as &$state) {
            $state_arr[$state['State']['id']] = $state['State']['state_name'];
        }
        unset($state);
        $this->set('states', $state_arr);

        $cities = $this->City->find('all');
        $city_arr = array('' => '--Select one--');
        foreach ($cities as &$city) {
            $city_arr[$city['City']['id']] = $city['City']['city_name'];
        }
        unset($city);
        $this->set('cities', $city_arr);

        if ($this->request->is(array('post', 'put'))) {
            $this->User->id = $id;
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('User has been updated successfully'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__("Unable to update user"));
        }

        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function delete($id)
    {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        $this->User->id = $id;
        if ($this->User->saveField('status', 0)) {
            $this->Flash->success(__("User has been deleted successfully"));
        } else {
            $this->Flash->error(__("The user with id: %s could not be deletd", h($id)));
        }

        return $this->redirect(array('action' => 'index'));
    }

    public function getStates($country_id)
    {
        $states = $this->State->find('all', array('conditions'=>array('country_id =' => $country_id)));
        $state_arr = array();
        foreach ($states as &$state) {
            $state_arr[$state['State']['id']] = $state['State']['state_name'];
        }
        unset($state);
        echo json_encode($state_arr);
        exit;
    }
    
    public function getCity($state_id)
    {
        $cities = $this->City->find('all', array('conditions'=>array('state_id =' => $state_id)));
        $city_arr = array();
        foreach ($cities as &$city) {
            $city_arr[$city['City']['id']] = $city['City']['city_name'];
        }
        unset($city);
        arsort($city_arr);
        echo json_encode($city_arr);
        exit;
    }
}