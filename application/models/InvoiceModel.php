<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 23/10/16
 * Time: 9:28 PM
 */

/**
 * @property InventoryModel $InventoryModel
 * @property ProductModel $ProductModel
 * @property CategoryModel $CategoryModel
 * @property FilterModel $FilterModel
 * @property AdminModel $AdminModel
 * @property AttributeModel $AttributeModel
 * @property EmailModel $EmailModel
 * @property LanguageModel $LanguageModel
 * @property UsersModel $UsersModel
 * @property CI_Session $session
 * @property VisitorModel $VisitorModel
 * @property CartModel $CartModel
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property TaxModel $TaxModel
 * @property OrdersModel $OrdersModel
 * @property CommissionModel $CommissionModel
 * @property NotificationModel $NotificationModel
 */

class InvoiceModel extends CI_Model
{
    public function __construct() {
        parent::__construct();

        $this->load->library('PDFLIB');
        $this->load->model('OrdersModel');
        $this->load->model('FilterModel');
    }

    public function generateInvoice($order_id) {

        if($order_id === null) {
            show_404();
        }

        $order = $this->OrdersModel->getOrder($order_id);
        if($order == null) {
            //the order doesn't exist
            show_404();
        }

        $user_id = $this->session->userdata('user_id');

        if(!($order->zemoser_id == $user_id || $order->user_id == $user_id)) {
            redirect('Error/authority');
        }

        $product = $this->ProductModel->getProductObject($order->product_id);
        $inv = $this->InventoryModel->getSingle($order->inventory_id);

        $order_term = $order->rent_price . '/' . ($order->rent_term) . ' x ' . $order->rent_for . ' ' . $order->rent_term;

        $data = array(
            'order_code' => $order->order_code,
            'order_content' => array(
                'Deposit for ' . $product->name,
                $product->name . '( '.$order_term.' )',
                'Skilled Labour',
                'Tax'
            ),
            'order_price' => array(
                $order->deposit,
                $order->amount - ($order->tax + $order->deposit),
                ($order->skill_term == null) ? 0 : ($order->skill_for * $order->skill_price),
                $order->tax
            ),
            'total' => $order->amount
        );

        $text = '';
        foreach ($data['order_content'] as $key => $content) {
            $text .= '<tr>';
            $text .= '<td>'.$content.'</td><td>1</td><td>'.$data['order_price'][$key].'</td>';
            $text .= '</tr>';
        }

        $html = '
        <page>
            <h1 style="text-align: center;">Invoice</h1>
            <div style="width: 100%;">
                <p style="float: right;">Order : '. $order->order_code .'</p>
                <table style="width: 100%; border: 1px solid #000;">
        <tr>
        <td style="text-align: center">Particular</td>
        <td style="text-align: center">Qty</td>
        <td style="text-align: center">Amount</td>
        </tr>
        '.$text.'
    </table>
    
                <p style="float: right;">Total : '. $data['total'] .'</p>
            </div>
        </page>
        ';

        //echo $html;

        $html2pdf = new HTML2PDF('P','Letter','en');
        $html2pdf->writeHTML($html);
        $html2pdf->Output('Invoice-'. $order_id .'.pdf');
    }

}