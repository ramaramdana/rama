<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_event extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_event');
	}

	public  function index()
	{
		$data['events'] = $this->M_event->get_data('events')->result();
		$this->load->view('vw_event', $data);
	}

	public function tambah()
	{
		$this->load->view('tambah_event');
	}

	public function tambah_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah();
		} else {
			$data = array(
				'event_name' => $this->input->post('event_name'),
				'event_date' => $this->input->post('event_date'),
				'location' => $this->input->post('location'),
				'organizer' => $this->input->post('organizer'),
			);


			$this->M_event->insert_data($data, 'events');
			$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data Berhasil Di Tambahkan!
		  </div>');
			redirect('data_event');
		}
	}

	public function edit($event_id)
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(
				'event_id' => $event_id,
				'event_name' => $this->input->post('event_name'),
				'event_date' => $this->input->post('event_date'),
				'location' => $this->input->post('location'),
				'organizer' => $this->input->post('organizer'),
			);

			$this->M_event->update_data($data, 'events');
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
			</button></div>');
			redirect('data_event');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('event_name', 'Event Name', 'required', array(
			'required' => '%s harus diisi !!'
		));
		$this->form_validation->set_rules('event_date', 'Event Date', 'required', array(
			'required' => '%s harus diisi !!'
		));
		$this->form_validation->set_rules('location', 'Location', 'required', array(
			'required' => '%s harus diisi !!'
		));
		$this->form_validation->set_rules('organizer', 'Organizer', 'required', array(
			'required' => '%s harus diisi !!'
		));
	}

	public function delete($id)
	{
		$where = array('event_id' => $id);

		$this->M_event->delete($where, 'events');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
		</button></div>');
		redirect('data_event');
	}
}
