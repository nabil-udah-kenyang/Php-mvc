<?php

class About extends Controller
{
    public function index($nama = 'nabil', $job = 'presiden')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $job;
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['title'] = 'About Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');

    }
}
