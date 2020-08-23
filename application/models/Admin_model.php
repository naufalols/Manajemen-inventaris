<?php
class Admin_model  extends CI_Model
{
    public function get_all_lantai()
    {
        $query = $this->db->get('lantai');
        return $query->result_array();
    }
    public function get_all_ruang()
    {
        $query = $this->db->get('ruangan');
        return $query->result_array();
    }
    public function get_ruang_lantai()
    {
        $query = $this->db->select('*')
            ->from('ruangan')
            ->join('lantai', 'lantai.id_lantai = ruangan.id_lantai')
            ->get();
        return $query->result_array();
    }
    public function get_all_pengguna1()
    {
        $query = $this->db->get_where('pengguna', array('role_id' => 1));
        return $query->result_array();
    }
    public function get_all_pengguna2()
    {
        $query = $this->db->get_where('pengguna', array('role_id' => 2));
        return $query->result_array();
    }

    public function get_all_pengguna_log()
    {
        $query = $this->db->select('*')
            ->from('pengguna')
            ->join('log_pengguna', 'pengguna.id = log_pengguna.id_pengguna')
            ->order_by('log_pengguna.log_pengguna', 'DESC')
            ->get();
        return $query->result_array();
    }
    public function get_kondisi()
    {
        $query = $this->db->get('kondisi');
        return $query->result_array();
    }
    public function get_lantai($lantai)
    {
        $id = array('id_lantai' => $lantai);
        $query = $this->db->get_where('ruangan', $id);
        return $query->result_array();
    }
    public function get_ruang($ruang)
    {
        $id = array('barang.ruang' => $ruang);
        $query = $this->db->select('*')
            ->from('barang')
            ->join('kondisi', 'kondisi.id_kondisi = barang.kondisi')
            ->join('ruangan', 'ruangan.id_ruang = barang.ruang')
            ->where($id)
            ->get();
        return $query->result_array();
    }
    public function get_count_ruang($lantai)
    {
        $id = array('id_lantai' => $lantai);
        $query = $this->db->get_where('ruangan', $id);
        return $query->num_row();
    }
    public function get_ruang_inventaris()
    {
        // $id = array('ruang' => $ruang);
        $query = $this->db->select('*')
            ->from('barang')
            ->join('kondisi', 'kondisi.id_kondisi = barang.kondisi')
            ->join('ruangan', 'ruangan.id_ruang = barang.ruang')
            ->get();
        return $query->result_array();
    }
    public function get_edit_inventaris($edit)
    {
        $id = array('id_barang' => $edit);
        $query = $this->db->get_where('barang', $id);
        return $query->row_array();
    }
    public function getlokasi($edit = null)
    {
        $id = array('id_lantai' => $edit);
        $query = $this->db->get_where('ruangan', $id);
        return $query->result_array();
    }
    public function update_barang($data)
    {
        $query = $this->db->replace('barang', $data);
        return $this->db->affected_rows() > 0;
    }
    public function insert_barang($data)
    {
        $query = $this->db->insert('barang', $data);
        return $this->db->affected_rows() > 0;
    }
    public function tambah_banyak_barang($data)
    {
        for ($i = 0; $i < $data['banyak']; $i++) {
            $query = $this->db->insert('barang', $data['query']);
            // print_r($data['query']);
        }
        return $this->db->affected_rows() > 0;
    }
    public function edit_banyak_barang($data)
    {
        $query = $this->db
            ->where('id_barang >=', $data['id0'])
            ->where('id_barang <=', $data['id1'])
            ->update('barang', $data['query']);
        return $this->db->affected_rows() > 0;
    }
    public function delete_banyak_barang($data0, $data1)
    {
        $query = $this->db->select('*')
            ->from('barang')
            ->where('id_barang >=', $data0)
            ->where('id_barang <=', $data1)
            ->delete();
        return $this->db->affected_rows() > 0;
    }
    public function tambah_kondisi($data)
    {
        $query = $this->db->insert('kondisi', $data);
        return $this->db->affected_rows() > 0;
    }
    public function tambah_lantai($data)
    {
        $query = $this->db->insert('lantai', $data);
        return $this->db->affected_rows() > 0;
    }
    public function tambah_ruang($data)
    {
        $query = $this->db->insert('ruangan', $data);
        return $this->db->affected_rows() > 0;
    }

    public function get_ruangan($data)
    {
        $id = array('id_ruang' => $data);
        $query = $this->db->select('*')
            ->from('ruangan')
            ->where($id)
            ->get();
        return $query->row_array();
    }

    public function update_ruang($data)
    {
        $query = $this->db->replace('ruangan', $data);
        return $this->db->affected_rows() > 0;
    }

    public function hapus_alat_inventaris($id = null)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
        return $this->db->affected_rows() > 0;
    }

    public function hapus_kondisi($id = null)
    {
        $this->db->where('id_kondisi', $id);
        $this->db->delete('kondisi');
        return $this->db->affected_rows() > 0;
    }

    public function hapus_lantai($id = null)
    {
        $this->db->where('id_lantai', $id);
        $this->db->delete('lantai');
        return $this->db->affected_rows() > 0;
    }

    public function hapus_ruang($id = null)
    {
        $this->db->where('id_ruang', $id);
        $this->db->delete('ruangan');
        return $this->db->affected_rows() > 0;
    }

    public function tambah_pengguna($data = null)
    {
        $this->db->insert('pengguna', $data);
        return $this->db->affected_rows() > 0;
    }

    public function hapus_pengguna($id = null)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengguna');
        return $this->db->affected_rows() > 0;
    }

    public function edit_pengguna($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('pengguna', $data);
        return $this->db->affected_rows() > 0;
    }

    public function get_all_alat()
    {
        $i = 0;
        $query = $this->db->get('kondisi')->result_array();
        foreach ($query as $row) {
            $row1 = $row['id_kondisi'];
            $this->db->get_where('barang', array('kondisi' => $row1));
            $kondisi[$i++] = $this->db->affected_rows();
        };
        return $kondisi;
        // return $query;
        // $id = array('id_kondisi' => 1);
        // $query = $this->db->get_where('barang', $id);
        // return $query->result_array();
        // var_dump($kondisi);
        // exit();
    }
}
