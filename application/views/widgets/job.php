<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="panel panel-default col-md-2" style="margin-right: 10px">
    <div class="panel-body">
        <table>
            <tr>
                <td>
                    <!-- TODO: Move styles to external CSS" -->
                    <span class="label label-primary" style="padding-top: 10px; font-size: 24px; margin-right: 10px">
                        <span class="glyphicon glyphicon-globe" style="font-size: 24px"></span> 
                    </span>
                </td>
                <td>
                    <p class="text-center">
                        <strong>Websites</strong> <br/>
                        <?php echo $x; ?>
                        /
                        <?php echo $x % 6; ?>
                    </p>
                </td>
            </tr>
        </table>
    </div>
</div>