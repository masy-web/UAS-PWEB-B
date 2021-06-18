<?php
class Tampil extends Controller
{
    public function index()
    {
        $data['title'] = 'Tampilan';

        $this->view('tampil/index', $data);
    }
}