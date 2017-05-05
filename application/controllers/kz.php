<?php
class Pages extends CI_Controller {

        public function view($page = 'kz')
        {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page.'.php', $data);
                $this->load->view('templates/footer', $data);
        }
}
