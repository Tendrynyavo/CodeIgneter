<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

/// Fonction pour donner les listes de clients vers la vue 'liste_client'
    public function liste() {
        $this->load->model('client_model');

        $data = [];
        $data['title'] = 'Client';
        $data['clients'] = $this->client_model->get_client();
        $data['contents'] = 'liste_client'; // corps de la page

        $this->load->view('template', $data);
    }

/// Fonction pour donner les payements vers la vue 'liste_payement'
    public function liste_payement() {
        $this->load->model('client_model');

        $data = [];
        $data['title'] = 'Payement';
        $data['payements'] = $this->client_model->get_payement($this->input->get('customer_id'));
        $data['contents'] = 'liste_payement'; // corps de la page

        $this->load->view('template', $data);
    }

/// Fonction pour donner les valeurs de recherche de clients vers la vue 'liste_client'
    public function search() {
        $this->load->model('client_model');

        $data = [];
        $data['title'] = 'Search';
        $data['clients'] = $this->client_model->get_client_by_name($this->input->post('customer_name'));
        $data['contents'] = 'liste_client'; // corps de la page

        $this->load->view('template', $data);
    }

}