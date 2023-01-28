<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model {

/// Fonction pour prendre tous les actors limités à 10
    public function get_client() {
        $query = $this->db->query('SELECT * FROM customer LIMIT 10'); 
        return convert_to_array($query);
    }

/// Fonction pour prendre tous les payements de ce client
    public function get_payement($customer_id = '') {
        $sql = 'SELECT * FROM payment WHERE customer_id = %s';
        $sql = sprintf($sql, $this->db->escape($customer_id));
        $query = $this->db->query($sql);
        return convert_to_array($query);
    }

/// Fonction pour chercher le client par son nom
    public function get_client_by_name($customer_name = '') {
        $sql = 'SELECT * FROM customer WHERE first_name = %s OR last_name = %s';
        $sql = sprintf($sql, $this->db->escape($customer_name), $this->db->escape($customer_name));
        $query = $this->db->query($sql);
        return convert_to_array($query);
    }
}