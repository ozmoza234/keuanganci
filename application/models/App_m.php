<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_m extends ci_model
{
    public function c_nsb()
    {
        $data = "SELECT
        COUNT(nasabah.id_nasabah) tot
        FROM
        nasabah";
        $query = $this->db->query($data);
        return $query->result();
    }

    public function c_pinj()
    {
        $data = "SELECT
        COUNT(pinjaman.id_pinjaman) tot
        FROM
        pinjaman";
        $query = $this->db->query($data);
        return $query->result();
    }

    public function c_tab()
    {
        $data = "SELECT
        COUNT(tabungan.id_tabungn) tot
        FROM
        tabungan";
        $query = $this->db->query($data);
        return $query->result();
    }

    public function c_lns()
    {
        $data = "SELECT
        COUNT(pelunasan.id_pelunasan) tot
        FROM
        pelunasan";
        $query = $this->db->query($data);
        return $query->result();
    }

    public function c_usr()
    {
        $data = "SELECT
        COUNT(pengguna.id_pengguna) tot
        FROM
        pengguna";
        $query = $this->db->query($data);
        return $query->result();
    }

    public function load_nsb()
    {
        $data = "SELECT
        nasabah.id_nasabah,
        nasabah.nama_nasabah,
        nasabah.pekerjaan_nasabah,
        nasabah.alamat_nasabah,
        nasabah.telepon
        FROM
        nasabah";
        $query = $this->db->query($data);
        return $query->result();
    }

    public function load_pnj()
    {
        $data = "SELECT
        pinjaman.id_pinjaman,
        pinjaman.nama_nasabah,
        pinjaman.jumlah_pinjaman,
        pinjaman.tanggal_pinjaman
        FROM
        pinjaman";
        $query = $this->db->query($data);
        return $query->result();
    }

    public function load_pln($id_pinjaman)
    {
        $data = "SELECT
        pelunasan.id_pelunasan,
        pelunasan.nama_nasabah,
        pelunasan.jumlah_pinjaman,
        pelunasan.tanggal_pelunasan,
        pelunasan.id_pinjaman,
        pelunasan.cicilan
        FROM
        pelunasan
        WHERE pelunasan.id_pinjaman = $id_pinjaman";
        $query = $this->db->query($data);
        return $query->result();
    }

    public function load_total_c($id_pinjaman)
    {
        $data = "SELECT
        pelunasan.id_pinjaman,
        CAST( SUM( Pelunasan.cicilan ) AS UNSIGNED ) AS total_cicilan 
        FROM
        pelunasan 
        WHERE
        pelunasan.id_pinjaman = $id_pinjaman 
        GROUP BY
        pelunasan.id_pinjaman";
        $query = $this->db->query($data);
        return $query->result();
    }

    public function add_new_nsb($data)
    {
        $this->db->insert('nasabah', $data);
    }

    public function add_new_pel($data)
    {
        $this->db->insert('pelunasan', $data);
    }

    public function add_new_usr($data)
    {
        $this->db->insert('nasabah', $data);
    }

    public function add_new_pin($data)
    {
        $this->db->insert('pinjaman', $data);
    }

    public function add_new_tab($data)
    {
        $this->db->insert('nasabah', $data);
    }

    public function update_data_nasabah($id_nasabah, $data)
    {
        $this->db->where('id_nasabah', $id_nasabah);
        $this->db->update('nasabah', $data);
    }

    public function update_data_pinjaman($id_pinjaman, $data)
    {
        $this->db->where('id_pinjaman', $id_pinjaman);
        $this->db->update('pinjaman', $data);
    }

    public function hapus_data_cicilan($id_pelunasan)
    {
        $this->db->where('id_pelunasan', $id_pelunasan);
        $this->db->delete('pelunasan');
    }

    public function hapus_data_nasabah($id_nasabah)
    {
        $this->db->where('id_nasabah', $id_nasabah);
        $this->db->delete('nasabah');
    }

    public function hapus_data_pinjaman($id_pinjaman)
    {
        $this->db->where('id_pinjaman', $id_pinjaman);
        $this->db->delete('pinjaman');
    }

    public function load_daftar_nasabah()
    {
        $data = "SELECT
        nasabah.id_nasabah,
        nasabah.nama_nasabah
        FROM
        nasabah";
        $query = $this->db->query($data);
        return $query->result();
    }
}
