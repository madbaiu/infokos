<?php

namespace App\Http\Livewire;

use App\Models\Foto;
use Livewire\Component;
use App\Models\Alternatif;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class AlternatifKomponen extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nama, $alamat, $kontak, $keterangan;
    public $foto = [];
    public $search = "";
    public $idTerpilih, $old_foto;
    public $options = "Tambah";
    public $idHapus;


    public function render()
    {
        // $fasilitas = ['Ruang Kelas', 'Toilet', 'Taman Bermain', 'Ruang UKS', 'Aula', 'Perpustakaan', 'Gudang', 'Dapur', 'Ruang Administrasi', 'Ruang Makan', 'Kebun'];

        // dd(count($fasilitas));
        return view('livewire.alternatif-komponen', ['lists' => Alternatif::where(function ($query) {
            $query->orWhere('nama', 'LIKE', '%' . $this->search . '%')
                ->orWhere('alamat', 'LIKE', '%' . $this->search . '%')
                ->orWhere('kontak', 'LIKE', '%' . $this->search . '%');
        })->paginate(10)])->extends('layouts.app')->section('content');
    }

    public function resetInput()
    {
        $this->reset(['nama', 'alamat', 'kontak', 'keterangan', 'foto', 'options', 'old_foto', 'idTerpilih', 'idHapus']);
    }

    public function store()
    {

        if ($this->idTerpilih) {

            $dataAlternatif = $this->validate(
                [
                    'nama' => 'required|string',
                    'alamat' => 'required|string',
                    'kontak' => 'required|numeric',
                    'keterangan' => 'string',
                ],
                [
                    '*.required' => 'Harap mengisi kolom ini',
                    '*.numeric' => 'Harap mengisi angka saja',
                ]
            );


            $dataFoto = $this->validate([
                'foto.*' => 'sometimes|image|mimes:jpg,png,JPG,PNG',
            ]);


            Alternatif::updateOrCreate(['id' => $this->idTerpilih], $dataAlternatif);

            if ($this->foto) {
                $hapusData = Foto::where('alternatif_id', $this->idTerpilih)->get();
                foreach ($hapusData as $hapus) {
                    unlink('storage/' . $hapus->foto);
                }
                Foto::where('alternatif_id', $this->idTerpilih)->delete();

                foreach ($dataFoto['foto'] as $key => $foto) {
                    $dataFoto['foto'][$key] = $foto->store('foto', 'public');
                }

                foreach ($dataFoto['foto'] as $foto) {
                    Foto::create(['alternatif_id' => $this->idTerpilih, 'foto' => $foto]);
                }
            }
        } else {
            $dataAlternatif = $this->validate(
                [
                    'nama' => 'required|string',
                    'alamat' => 'required|string',
                    'kontak' => 'required|numeric',
                    'keterangan' => 'string',
                ],
                [
                    '*.required' => 'Harap mengisi kolom ini',
                    '*.numeric' => 'Harap mengisi angka saja',
                ]
            );
            $dataFoto = $this->validate(
                [
                    'foto' => 'required',
                    'foto.*' => 'image|mimes:jpg,png,JPG,PNG',
                ],
                [
                    'foto.required' => 'Harap mengunggah gambar',
                ]
            );

            // dd($dataAlternatif, $dataFasilitas, $dataFoto);

            foreach ($dataFoto['foto'] as $key => $foto) {
                $dataFoto['foto'][$key] = $foto->store('foto', 'public');
            }

            // dd($dataFoto);
            $id = Alternatif::create($dataAlternatif);


            foreach ($dataFoto['foto'] as $foto) {
                Foto::create([
                    'alternatif_id' => $id->id,
                    'foto' => $foto,
                ]);
            }
        }

        session()->flash('message', $this->idTerpilih ? 'Data berhasil di rubah' : 'Data berhasil ditambah');

        $this->resetInput();
        $this->dispatchBrowserEvent('modal-store');
    }

    public function show($id)
    {
        $this->idTerpilih = $id;
        $dataAlternatif = Alternatif::find($id);
        $this->nama = $dataAlternatif->nama;
        $this->alamat = $dataAlternatif->alamat;
        $this->kontak = $dataAlternatif->kontak;
        $this->keterangan = $dataAlternatif->keterangan;


        // dd($this->fasilitas);
        $dataFoto = Foto::where('alternatif_id', $id)->get();
        foreach ($dataFoto as $data) {
            $this->foto[] = $data->foto;
        }
        $this->options = "Info";
    }

    public function edit($id)
    {
        $this->reset(['idTerpilih', 'old_foto', 'foto', 'idHapus', 'options']);
        $this->idTerpilih = $id;
        $dataAlternatif = Alternatif::find($id);
        $this->nama = $dataAlternatif->nama;
        $this->alamat = $dataAlternatif->alamat;
        $this->kontak = $dataAlternatif->kontak;
        $this->keterangan = $dataAlternatif->keterangan;

        $dataFoto = Foto::where('alternatif_id', $id)->get();
        foreach ($dataFoto as $data) {
            $this->old_foto[] = $data->foto;
        }
        $this->options = "Edit";

        $this->dispatchBrowserEvent('modal-edit');
    }

    public function deleteConfirm($id)
    {
        $this->idHapus = $id;
        $this->dispatchBrowserEvent('modal-deleteConfirm');
    }
    public function delete($id)
    {

        $dataFoto = Foto::where('alternatif_id', $id)->get();

        foreach ($dataFoto as $data) {
            unlink('storage/' . $data->foto);
        }

        Foto::where('alternatif_id', $id)->delete();

        Alternatif::destroy($id);

        session()->flash('message', 'Data berhasil di hapus');

        $this->dispatchBrowserEvent('modal-delete');
    }
}
