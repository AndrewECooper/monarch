<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/TCPDF/tcpdf.php';

class Invoices extends MY_Controller {

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();

        // load the users model
        $this->load->model('users_model');
        $this->load->model('invoices_model');

        // load the language files
        $this->lang->load('dashboard');
    }


    /**
     * Dashboard
     */
    function index() {
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );

        $data = $this->includes;

        // load views
        $data["user"] = $this->user;
        $data['content'] = $this->load->view('invoices', $data, TRUE);

        $this->load->view($this->template, $data);

    }

    function view($invoice_num) {
        $this->load->model("leads_model");
        
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );

        $data = $this->includes;
        $data["invoice"] = $this->invoices_model->get_invoice($invoice_num);
        
        // load views
        $data["user"] = $this->user;
        $data['content'] = $this->load->view('invoice', $data, TRUE);

        $this->load->view($this->template, $data);
    }

    function download($invoice_num) {
        $data = $this->includes;
        $data["invoice"] = $this->invoices_model->get_invoice($invoice_num);
        
        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetDefaultMonospacedFont(PDF_FONT_NAME_DATA);
        $pdf->SetMargins(5, PDF_MARGIN_TOP, 5);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('dejavusans', '', 10, '', true);
        $pdf->AddPage();
        $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
        
        $html = "<html><head><title>Invoice</title><style>";
        $html .= file_get_contents("themes/core/css/invoice_pdf.css");
        $html .= "</style></head><body>";
        $html .= $this->load->view("invoice_pdf", $data, true);
        $html .= "</body></html>";
        
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        
        $pdf->Output('example_001.pdf', 'I');
    }

}
