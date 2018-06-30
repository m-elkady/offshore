<?php
/**
 * @var \App\View\AppView                             $this
 * @var \App\Model\Entity\FireExtinguisherCertificate $fireExtinguisherCertificate
 */
?>
<div class="container-fluid" id="content">
  <div class="row">
    <div class="col">
      <h2 class="text-center"><u><strong>Certificate</strong></u></h2>
      <h6 class="text-muted text-center">of
        <h4 class="text-center"><strong>Fire Extinguishers</strong></h4>
      </h6>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-sm table-bordered mt-2">
        <thead>
        <tr class="text-center">
          <th width="25%">Vessel Name</th>
          <th width="25%">Vessel Flag</th>
          <th width="25%">IMO Number</th>
          <th width="25%">Certificate Number</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
          <td><?php echo $fireExtinguisherCertificate->vessel->name ?></td>
          <td><?php echo $fireExtinguisherCertificate->vessel->country->name ?></td>
          <td><?php echo $fireExtinguisherCertificate->vessel->imo_number ?></td>
          <td><?php echo $fireExtinguisherCertificate->certificate_number ?></td>
        </tr>
        </tbody>
      </table>
      <table class="table table-sm table-bordered">
        <thead>
        <tr class="text-center">
          <th colspan="4">Inspection Details</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
          <th width="25%">Inspection Date</th>
          <td width="25%"><?php echo $fireExtinguisherCertificate->inspection_date->format('d / m / Y') ?></td>
          <th width="25%">Next Inspection Date</th>
          <td width="25%"><?php echo $fireExtinguisherCertificate->next_inspection_date->format('d / m / Y') ?></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="row">
    <div class="col-md-9 d-flex align-items-center">
      <p><strong><?php echo nl2br($fireExtinguisherCertificate->certificate_text->content) ?></strong></p>
    </div>
    <div class="col-md-3">
      <table class="table table-sm table-bordered table-condensed  mt-2 float-right">
        <thead>
        <tr class="text-center">
          <th id="no-padding">No.</th>
          <th id="no-padding">Class</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($statuses as $key => $value) { ?>
          <tr class="text-center">
            <td id="no-padding"><?php echo $key ?></td>
            <td id="no-padding"><?php echo $value ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-sm table-bordered table-condensed mt-2">
        <thead>
        <tr class="text-center">
          <th rowspan="2" id="doublerow">
            <div>No.</div>
          </th>
          <th rowspan="2" id="doublerow">
            <div><?php echo $fireExtinguisherCertificate->certificate_type == 1 ? 'Serial No.' : 'QTY' ?></div>
          </th>
          <th rowspan="2" id="doublerow">
            <div>Type</div>
          </th>
          <th rowspan="2" id="doublerow">
            <div>Capacity</div>
          </th>
          <th rowspan="2" id="doublerow">
            <div>Last Hydro Test</div>
          </th>
          <th colspan="5">Status</th>
        </tr>
        <tr class="text-center">
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
          <th>5</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $items = $fireExtinguisherCertificate->fire_extinguisher_certificate_items ? $fireExtinguisherCertificate->fire_extinguisher_certificate_items : [];

        for ($i = 0; $i < count($items); $i++) {
            ?>
          <tr class="text-center">
            <td><?php echo $i + 1 ?></td>
            <td><?php echo $fireExtinguisherCertificate->certificate_type == 1 ? $items[$i]->serial_no : $items[$i]->quantity ?></td>
            <td><?php echo $items[$i]->fire_extinguisher_item_type->name; ?></td>
            <td><?php echo $items[$i]->capacity . ' ' . (isset($capacityUnits[$items[0]->capacity_unit]) ? $capacityUnits[$items[0]->capacity_unit] : ''); ?></td>
            <td><?php echo $items[$i]->last_hydro_test->format('d / m / Y') ?></td>
              <?php foreach ($statuses as $key => $value) {
                  ?>
                <td><?php echo in_array($key, explode(',', $items[$i]->status)) ? 'x' : ''; ?></td>
              <?php } ?>
          </tr>
            <?php
        }
        if (count($items) < 20) {
            $diff = 20 - count($items);
            for ($j = count($items); $j < 20; $j++) {
                ?>
              <tr class="text-center">
                <td><?php echo $j + 1 ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                  <?php foreach ($statuses as $key => $value) {
                      ?>
                    <td></td>
                  <?php } ?>
              </tr>
                <?php
            }
        } ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <table class="table table-sm table-bordered">
        <thead>
        <tr class="text-center">
          <th colspan="6">Type Codes</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
          <th width="33%">ABC ---> Dry Powder</th>
          <th width="33%">AFFF ---> Chemical Foam</th>
          <th width="33%">CO2 ---> Carbon Dioxide</th>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <p style="padding-bottom: 50px; padding-left: 60%;">Signature and Stamp</p>
    </div>
  </div>
  <div class="row d-print-none mt-5">
    <div class="col float-right text-right">
      <button type="button" class="btn btn-outline-info" onclick="window.print();">Print Certificate</button>
    </div>
    <div class="col float-left text-left">
      <button type="button" class="btn btn-outline-success" onclick="javascript: history.go(-1);">Back</button>
    </div>
  </div>
</div>
