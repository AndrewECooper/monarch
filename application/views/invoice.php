<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <table class="table-invoice center-element">
        <tr>
            <td class="cell-invoice" width="45%" rowspan="4">
                <span>Monarch Calendar and Printing, Inc</span><br>
                <span>P.O. Box 579</span><br>
                <span>New Market, TN 37820 US</span>
                <br><br>
                <span>(423) 839-1818</span><br>
            </td>
            <td class="cell-invoice" width="1px" rowspan="4"></td>
            <td class="cell-invoice"></td>
            <td class="cell-invoice"></td>
            <td class="cell-invoice cell-invoice-title cell-invoice-small-info">Date</td>
            <td class="cell-invoice cell-invoice-title cell-invoice-small-info">Invoice #</td>
        </tr>
        <tr>
            <td class="cell-invoice"></td>
            <td class="cell-invoice"></td>
            <td class="cell-invoice cell-invoice-info-body cell-invoice-small-info"><?php echo $invoice["created"]; ?></td>
            <td class="cell-invoice cell-invoice-info-body cell-invoice-small-info"><?php echo $invoice["invoice_number"]; ?></td>
        </tr>
        <tr>
            <td class="cell-invoice"></td>
            <td class="cell-invoice"></td>
            <td class="cell-invoice"></td>
            <td class="cell-invoice cell-invoice-title cell-invoice-small-info">Terms</td>
        </tr>
        <tr>
            <td class="cell-invoice"></td>
            <td class="cell-invoice"></td>
            <td class="cell-invoice"></td>
            <td class="cell-invoice cell-invoice-info-body cell-invoice-small-info">Net 30</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="6">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">
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
            <td class="cell-invoice">&nbsp;</td>
            <td class="cell-invoice">&nbsp;</td>
            <td class="cell-invoice">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">&nbsp;</td>
            <td class="cell-invoice">&nbsp;</td>
            <td class="cell-invoice">&nbsp;</td>
            <td class="cell-invoice cell-invoice-small-info cell-invoice-title">
                Amount Due
            </td>
            <td class="cell-invoice cell-invoice-small-info cell-invoice-title">
                Enclosed
            </td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="2">&nbsp;</td>
            <td class="cell-invoice">&nbsp;</td>
            <td class="cell-invoice">&nbsp;</td>
            <td class="cell-invoice cell-invoice-small-info cell-invoice-info-body">
                $<?php echo $invoice["amount"]; ?>
            </td>
            <td class="cell-invoice cell-invoice-small-info cell-invoice-info-body">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="6">&nbsp;</td>
        </tr>
        <tr>
            <td class="cell-invoice" colspan="6">
                <table class="table-striped table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 110px">Date</th>
                            <th style="width: 285px">Activity</th>
                            <th style="width: 75px">Quantity</th>
                            <th style="width: 100px">Rate</th>
                            <th style="width: 100px">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>08/17/2016</td>
                            <td><?php echo $invoice["year"] . " " . $invoice["job_name"]; ?> Calendar Donation</td>
                            <td>1</td>
                            <td>$<?php echo $invoice["amount"]; ?></td>
                            <td>$<?php echo $invoice["amount"]; ?></td>
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
                            <td colspan="3" style="text-align: center">
                                Please make check payable to <?php echo $invoice["job_name"]; ?> Calendar. Thank you!
                            </td>
                            <th>Total</th>
                            <th>$<?php echo $invoice["amount"]; ?></th>
                        </tr>
                    </tfoot>
                </table>
            </td>
        </tr>
    </table>
</div>
