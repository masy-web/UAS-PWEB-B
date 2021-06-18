<?php
class Tampil extends Controller
{
    public function index()
    {
        $data['title'] = 'Tampilan';
        $data['hewan'] = $this->model('HewanModel')->getAllHewan();

        $this->view('tampil/index', $data);
    }

}