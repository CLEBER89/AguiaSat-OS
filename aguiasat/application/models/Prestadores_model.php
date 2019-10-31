<?php
class Prestadores_model extends CI_Model
{

    
    function __construct()
    {
        parent::__construct();
    }

    
    function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by('idClientes', 'desc');
        $this->db->limit($perpage, $start);
        if ($where) {
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }


    function getById($id)
    {
        $this->db->where('idClientes', $id);
        $this->db->limit(1);
        return $this->db->get('prestadores')->row();
    }
    
    function add($table, $data)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            return true;
        }
        
        return false;
    }
    
    function edit($table, $data, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return true;
        }
        
        return false;
    }
    
    function delete($table, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return true;
        }
        
        return false;
    }

    function count($table)
    {
        return $this->db->count_all($table);
    }

    public function search($pesquisa, $cidade, $regiao)
    {
        
        if ($pesquisa != null) {
            $this->db->like('prestadorPre', $pesquisa);
        }

        if ($cidade != null) {
            $this->db->like('cidadePre', $cidade);
        }

        if ($regiao != null) {
            $this->db->like('regiao', $regiao);
        }
        
        $this->db->limit(10);
        return $this->db->get('prestadores')->result();
    }
    
    public function getOsByPrestadores($id)
    {
        $this->db->where('clientes_id', $id);
        $this->db->order_by('idOs', 'desc');
        $this->db->limit(10);
        return $this->db->get('os')->result();
    }
}
