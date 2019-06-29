<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Webservice
 *
 * @author Lenovo
 */
class Webservice extends CI_Controller{
    
   //Semua Webservice Balita
    function select_balita() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Balita_m->select_db();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['gender'] = $value->gender;
                $response['jumlah'] = $value->jumlah;
               

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_balita($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Balita_m->select_balita_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['gender'] = $value->gender;
                $response['jumlah'] = $value->jumlah;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    //WEBSERVICE BERITA
    function select_berita() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Berita_m->select_berita();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_berita'] = $value->id_berita;
                $response['judul'] = $value->judul;
                $response['kategori'] = $value->kategori;
                $response['isi'] = $value->isi;
                $response['gambar'] = $value->gambar;
                $response['tanggal'] = $this->Format_m->tgl($value->tanggal).",".$this->Format_m->jam($value->tanggal);
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_berita($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Berita_m->select_berita_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_berita'] = $value->id_berita;
                $response['judul'] = $value->judul;
                $response['kategori'] = $value->kategori;
                $response['isi'] = $value->isi;
                $response['gambar'] = $value->gambar;
                $response['tanggal'] = $this->Format_m->tgl($value->tanggal).",".$this->Format_m->jam($value->tanggal);
                
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE GALERI
    function select_galeri() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Galeri_m->select_db();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_galeri'] = $value->id_galeri;
                $response['keterangan'] = $value->keterangan;
                $response['gambar'] = $value->gambar;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_galeri($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Galeri_m->select_galeri_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_galeri'] = $value->id_galeri;
                $response['keterangan'] = $value->keterangan;
                $response['gambar'] = $value->gambar;
                
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE KATEGORI
    function select_kategori() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Kategori_m->select_kategori();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_kategori'] = $value->id_kategori;
                $response['kategori'] = $value->kategori;
               
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_kategori($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Kategori_m->select_kategori_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_kategori'] = $value->id_kategori;
                $response['kategori'] = $value->kategori;
               
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE KELUARGA
     function select_keluarga() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Keluarga_m->select_keluarga();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_keluarga'] = $value->id_keluarga;
                $response['status'] = $value->status;
                $response['jumlah'] = $value->jumlah;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_keluarga($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Keluarga_m->select_keluarga_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_keluarga'] = $value->id_keluarga;
                $response['status'] = $value->status;
                $response['jumlah'] = $value->jumlah;
                
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE LANSIA
    function select_lansia() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Lansia_m->select_lansia();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['gender'] = $value->gender;
                $response['jumlah'] = $value->jumlah;
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    function select_by_get_lansia($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Lansia_m->select_lansia_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['gender'] = $value->gender;
                $response['jumlah'] = $value->jumlah;
                
                

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE LAYANAN
    function select_layanan() {
            //menampilkan semua data dari tabel berita
            $response = array();
            $data['data'] = array();

            $result = $this->Layanan_m->select_db();

            if (sizeof($result) > 0) {
                foreach ($result as $value) {
                    $response['id_layanan'] = $value->id_layanan;
                    $response['nama_layanan'] = $value->nama_layanan;
                    $response['isi_layanan'] = $value->isi_layanan;
                    $response['gambar'] = $value->gambar;

                    array_push($data['data'], $response);
                }

                $data['status'] = 0;
                $data['response'] = 'Data Ditemukan';

                die(json_encode($data));
            } else {
                $response['status'] = 1;
                $response['response'] = 'Tidak data yang ditampilkan';

                die(json_encode($response));
            }
        }

    function select_by_get_layanan($id) {
            //menampilkan data dari tabel berita berdasarkan id_berita
            //id_berita dapat dari get
            $response = array();
            $data['data'] = array();

            $result = $this->Layanan_m->select_layanan_where($id);

            if (sizeof($result) > 0) {
                foreach ($result as $value) {
                    $response['id_layanan'] = $value->id_layanan;
                    $response['nama_layanan'] = $value->nama_layanan;
                    $response['isi_layanan'] = $value->isi_layanan;
                    $response['gambar'] = $value->gambar;

                    array_push($data['data'], $response);
                }

                $data['status'] = 0;
                $data['response'] = 'Data Ditemukan';

                die(json_encode($data));
            } else {
                $response['status'] = 1;
                $response['response'] = 'Tidak data yang ditampilkan';

                die(json_encode($response));
            }
        }
        
    //WEBSERVICE LEMBAGA
    function select_lembaga() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Lembaga_m->select_lembaga();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_lembaga'] = $value->id_lembaga;
                $response['nama_lembaga'] = $value->nama_lembaga;
                $response['detail_lembaga'] = $value->detail_lembaga;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_lembaga($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Lembaga_m->select_lembaga_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_lembaga'] = $value->id_lembaga;
                $response['nama_lembaga'] = $value->nama_lembaga;
                $response['detail_lembaga'] = $value->detail_lembaga;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE PENDIDIKAN
    function select_pendidikan() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Pendidikan_m->select_pendidikan();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_pendidikan'] = $value->id_pendidikan;
                $response['status'] = $value->status;
                $response['jumlah'] = $value->jumlah;
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_pendidikan($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Pendidikan_m->select_pendidikan_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_pendidikan'] = $value->id_pendidikan;
                $response['status'] = $value->status;
                $response['jumlah'] = $value->jumlah;



                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE PENDUDUK
    function select_penduduk() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Penduduk_m->select_penduduk();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['gender'] = $value->gender;
                $response['jumlah'] = $value->jumlah;
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_penduduk($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Penduduk_m->select_penduduk_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['gender'] = $value->gender;
                $response['jumlah'] = $value->jumlah;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE PENGADUAN
     function select_pengaduan() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Pengaduan_m->select_pengaduan();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_pengaduan'] = $value->id_pengaduan;
                $response['username'] = $value->username;
                $response['keluhan'] = $value->keluhan;
                $response['tanggal'] = $value->tanggal;
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

     function insert_pengaduan() {
            //menampilkan semua data dari tabel berita
            $response = array();
            $data['data'] = array();
            $username=$this->input->post('username');
            $keluhan=$this->input->post('keluhan');
            $data=array('username'=>$username,'keluhan'=>$keluhan);
            $result = $this->Pengaduan_m->insert_db($data);

            
        }
    
    function select_by_get_pengaduan($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Pengaduan_m->select_pengaduan_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_pengaduan'] = $value->id_pengaduan;
                $response['username'] = $value->username;
                $response['keluhan'] = $value->keluhan;
                $response['tanggal'] = $value->tanggal;
                
                

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
     //WEBSERVICE PENGUMUMAN
    function select_pengumuman() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Pengumuman_m->select_pengumuman();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_pengumuman'] = $value->id_pengumuman;
                $response['judul'] = $value->judul;
                $response['isi'] = $value->isi;
                $response['gambar'] = $value->gambar;
                $response['tanggal'] = $this->Format_m->tgl($value->tanggal).",".$this->Format_m->jam($value->tanggal);

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    function select_by_get_pengumuman($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Pengumuman_m->select_pengumuman_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_pengumuman'] = $value->id_pengumuman;
                $response['judul'] = $value->judul;
                $response['isi'] = $value->isi;
                $response['gambar'] = $value->gambar;
               $response['tanggal'] = $this->Format_m->tgl($value->tanggal).",".$this->Format_m->jam($value->tanggal);
                
                

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE POTENSIDESA
    function select_potensidesa() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Potensidesa_m->select_db();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_potensi'] = $value->id_potensi;
                $response['gambar'] = $value->gambar;
                $response['nama_desa'] = $value->nama_desa;
                $response['keterangan'] = $value->keterangan;


                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_potensidesa($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Potensidesa_m->select_potensi_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_potensi'] = $value->id_potensi;
                $response['gambar'] = $value->gambar;
                $response['nama_desa'] = $value->nama_desa;
                $response['keterangan'] = $value->keterangan;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    //WEBSERVICE PRIVACY
    function select_privacy() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Privacy_m->select_db();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_privacy'] = $value->id_privacy;
                $response['isi'] = $value->isi;
                
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_privacy($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Programdesa_m->select_privacy_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_privacy'] = $value->id_privacy;
                $response['isi'] = $value->isi;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    //WEBSERVICE PROGRAMDESA
    function select_programdesa() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Programdesa_m->select_db();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_program'] = $value->id_program;
                $response['lokasi'] = $value->lokasi;
                $response['pekerjaan'] = $value->pekerjaan;
                $response['keterangan'] = $value->keterangan;
                
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_programdesa($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Programdesa_m->select_programdesa_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_program'] = $value->id_program;
                $response['lokasi'] = $value->lokasi;
                $response['pekerjaan'] = $value->pekerjaan;
                $response['keterangan'] = $value->keterangan;
                
                
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }



}
