<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <table class="table-invoice center-element">
        <tr>
            <td class="cell-invoice" width="400px">
                <span>Monarch Calendar and Printing, Inc</span><br>
                <span>P.O. Box 579</span><br>
                <span>New Market, TN 37820 US</span>
                <br><br>
                <span>(423) 839-1818</span><br>
            </td>
            <td class="cell-invoice" width="275px">
                <table>
                    <tr>
                        <td class="cell-invoice cell-invoice-title cell-invoice-small-info">Date</td>
                        <td class="cell-invoice cell-invoice-title cell-invoice-small-info">Invoice #</td>
                    </tr>
                    <tr>
                        <td class="cell-invoice cell-invoice-info-body cell-invoice-small-info"><?php echo $invoice["created"]; ?></td>
                        <td class="cell-invoice cell-invoice-info-body cell-invoice-small-info"><?php echo $invoice["invoice_number"]; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="cell-invoice cell-invoice-title cell-invoice-small-info">Terms</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="cell-invoice cell-invoice-info-body cell-invoice-small-info">????</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice">
                <table class="center-element">
                    <tr>
                        <td class="cell-invoice-title cell-invoice-bill-to">Bill To:</td>
                    </tr>
                    <tr>
                        <td class="cell-invoice-info-body cell-invoice-bill-to">
                            <span><?php echo $invoice["lead_name"]; ?></span><br>
                            <span><?php echo $invoice["lead_address"]; ?></span><br>
                            <span><?php echo $invoice["lead_city"]; ?>, <?php echo $invoice["lead_state"]; ?> <?php echo $invoice["lead_zip"]; ?></span>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="cell-invoice">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td class="cell-invoice cell-invoice-title cell-invoice-small-info">Amount Due</td>
                        <td class="cell-invoice cell-invoice-title cell-invoice-small-info">Enclosed</td>
                    </tr>
                    <tr>
                        <td class="cell-invoice cell-invoice-info-body cell-invoice-small-info">$<?php echo $invoice["amount"]; ?></td>
                        <td class="cell-invoice cell-invoice-info-body cell-invoice-small-info"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="6">
                <table border="1">
                    <thead>
                        <tr>
                            <th class="cell-invoice cell-invoice-title" style="width: 110px">&nbsp;Date</th>
                            <th class="cell-invoice cell-invoice-title" style="width: 285px">&nbsp;Activity</th>
                            <th class="cell-invoice cell-invoice-title" style="width: 75px">&nbsp;Quantity</th>
                            <th class="cell-invoice cell-invoice-title" style="width: 100px">&nbsp;Rate</th>
                            <th class="cell-invoice cell-invoice-title" style="width: 100px">&nbsp;Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&nbsp;08/17/2016</td>
                            <td>&nbsp;<?php echo $invoice["year"] . " " . $invoice["job_name"]; ?> Calendar Donation</td>
                            <td>&nbsp;1</td>
                            <td>&nbsp;$<?php echo $invoice["amount"]; ?></td>
                            <td>&nbsp;$<?php echo $invoice["amount"]; ?></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="cell-invoice-title" colspan="3" style="text-align: center">
                                Please make check payable to <?php echo $invoice["job_name"]; ?> Calendar. Thank you!
                            </td>
                            <th class="cell-invoice cell-invoice-title">&nbsp;Total</th>
                            <th>&nbsp;$<?php echo $invoice["amount"]; ?></th>
                        </tr>
                    </tfoot>
                </table>
            </td>
        </tr>
    </table>
</div>
