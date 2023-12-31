<?php

class Admin_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getOrder()
  {
    $this->db->order_by('ID_Sewa', 'DESC');
    return $this->db->get('penyewaan')->result();
  }

  public function getDataUser()
  {
    $this->db->where_in('Role', array('Pelanggan', 'Admin'));
    return $this->db->get('user')->result();
  }
  public function terimaPesanan($idSewa)
  {
    $this->db->where('ID_Sewa', $idSewa);
    $this->db->update('penyewaan', ['status' => 'diterima']);
  }

  public function tolakPesanan($idSewa)
  {
    $this->db->where('ID_Sewa', $idSewa);
    $this->db->update('penyewaan', ['status' => 'ditolak']);
  }


  public function getPaket()
  {
    return $this->db->get('paket')->result();
  }

  public function tambahPaket()
  {
    $namakendaraan = $this->input->post("nama_kendaraan");
    $jumlah_kendaraan = $this->input->post("jumlah_kendaraan");
    $tempat = $this->input->post("tempat");
    $jumlahpengunjung = $this->input->post("jumlah_pengunjung");
    $jumlahmc = $this->input->post("jumlah_mc");
    $namahiburan = $this->input->post("nama_hiburan");
    $namadekorasi = $this->input->post("nama_dekorasi");
    $namamakeup = $this->input->post("nama_makeup");
    $namapaket = $this->input->post("namapaket");
    $deskripsi = $this->input->post("deskripsi");
    $harga = $this->input->post("harga");
    $keterangan = $this->input->post("keterangan");

    $paket = array(
      "nama_kendaraan" => $namakendaraan,
      "jumlah_kendaraan" => $jumlah_kendaraan,
      "tempat" => $tempat,
      "jumlah_pengunjung" => $jumlahpengunjung,
      "jumlah_mc" => $jumlahmc,
      "nama_hiburan" => $namahiburan,
      "nama_dekorasi" => $namadekorasi,
      "nama_makeup" => $namamakeup,
      "namapaket" => $namapaket,
      "deskripsi" => $deskripsi,
      "harga" => $harga,
      "keterangan" => $keterangan,
    );

    $config['upload_path'] = './asset/photo'; // Lokasi penyimpanan gambar di server
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
      $upload_data = $this->upload->data();
      $paket['gambar'] = 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/' . $upload_data['file_name']; // Path lokasi gambar

      return $this->db->insert("paket", $paket);
    } else {
      // Handle jika upload gagal
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
      return false;
    }
  }

  public function hapusPaket($idPaket)
  {
    $this->db->where('IdPaket', $idPaket);
    $this->db->delete('paket');
  }

  public function getPaketById($idPaket)
  {
    $this->db->where('IdPaket', $idPaket);
    return $this->db->get('paket')->row();
  }

  public function updatePaket($idPaket, $dataPaket)
  {
    $this->db->where('IdPaket', $idPaket);
    $this->db->update('paket', $dataPaket);
  }
}
