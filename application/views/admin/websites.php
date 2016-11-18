<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<table class="table-striped" width="100%">
    <thead>
        <tr>
            <th>Domain Name</th>
            <th>DNS Provider</th>
            <th>StatusCake Check</th>
            <th>Primary Server</th>
            <th>Secondary Server</th>
            <th>DNS Records</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>acme-inc.com</td>
            <td>Amazon Route53</td>
            <td>ACME, Inc</td>
            <td>web6</td>
            <td>web10</td>
            <td><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">View</button></td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
        </tr>
        <tr>
            <td>acme-inc.com</td>
            <td>Amazon Route53</td>
            <td>ACME, Inc</td>
            <td>web6</td>
            <td>web10</td>
            <td><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">View</button></td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
        </tr>
        <tr>
            <td>acme-inc.com</td>
            <td>Amazon Route53</td>
            <td>ACME, Inc</td>
            <td>web6</td>
            <td>web10</td>
            <td><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">View</button></td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
        </tr>
    </tbody>
</table>
<div style="margin-top: 10px">
    <button class="btn btn-primary" type="button">Add New</button>
</div>

<!-- Modals -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">DNS Records</h4>
      </div>
      <div class="modal-body">
        <p>
            acme-inc.com <br/>
            www.acme-inc.com <br/>
            mx1.inc.com <br/>
            acme.co <br/>
            www.acme.co <br/>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>