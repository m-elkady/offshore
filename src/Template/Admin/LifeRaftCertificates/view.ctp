<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LifeRaftCertificate $lifeRaftCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Life Raft Certificate'), ['action' => 'edit', $lifeRaftCertificate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Life Raft Certificate'), ['action' => 'delete', $lifeRaftCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lifeRaftCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Life Raft Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Life Raft Certificate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lifeRaftCertificates view large-9 medium-8 columns content">
    <h3><?= h($lifeRaftCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($lifeRaftCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $lifeRaftCertificate->has('client') ? $this->Html->link($lifeRaftCertificate->client->name, ['controller' => 'Clients', 'action' => 'view', $lifeRaftCertificate->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($lifeRaftCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manufacturer') ?></th>
            <td><?= h($lifeRaftCertificate->manufacturer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($lifeRaftCertificate->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Painter Line') ?></th>
            <td><?= h($lifeRaftCertificate->painter_line) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stowage Height') ?></th>
            <td><?= h($lifeRaftCertificate->stowage_height) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Outside Line') ?></th>
            <td><?= h($lifeRaftCertificate->outside_line) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Radar Reflector Type') ?></th>
            <td><?= h($lifeRaftCertificate->radar_reflector_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Radar Reflector Serial No') ?></th>
            <td><?= h($lifeRaftCertificate->radar_reflector_serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Cylinder Serial No') ?></th>
            <td><?= h($lifeRaftCertificate->first_cylinder_serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Cylinder Co2 Charge') ?></th>
            <td><?= h($lifeRaftCertificate->first_cylinder_co2_charge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Cylinder N2 Charge') ?></th>
            <td><?= h($lifeRaftCertificate->first_cylinder_n2_charge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firts Cylinder Gross Weight') ?></th>
            <td><?= h($lifeRaftCertificate->firts_cylinder_gross_weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Second Cylinder Serial No') ?></th>
            <td><?= h($lifeRaftCertificate->second_cylinder_serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Second Cylinder Co2 Charge') ?></th>
            <td><?= h($lifeRaftCertificate->second_cylinder_co2_charge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Second Cylinder N2 Charge') ?></th>
            <td><?= h($lifeRaftCertificate->second_cylinder_n2_charge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Second Cylinder Gross Weight') ?></th>
            <td><?= h($lifeRaftCertificate->second_cylinder_gross_weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Upper Time On') ?></th>
            <td><?= h($lifeRaftCertificate->working_pressure_test_upper_time_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Upper Time Off') ?></th>
            <td><?= h($lifeRaftCertificate->working_pressure_test_upper_time_off) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Lower Time On') ?></th>
            <td><?= h($lifeRaftCertificate->working_pressure_test_lower_time_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Lower Time Off') ?></th>
            <td><?= h($lifeRaftCertificate->working_pressure_test_lower_time_off) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Upper Time On') ?></th>
            <td><?= h($lifeRaftCertificate->necessary_additional_pressure_test_upper_time_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Upper Time Off') ?></th>
            <td><?= h($lifeRaftCertificate->necessary_additional_pressure_test_upper_time_off) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Lower Time On') ?></th>
            <td><?= h($lifeRaftCertificate->necessary_additional_pressure_test_lower_time_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Lower Time Off') ?></th>
            <td><?= h($lifeRaftCertificate->necessary_additional_pressure_test_lower_time_off) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor Seam Test Time On') ?></th>
            <td><?= h($lifeRaftCertificate->floor_seam_test_time_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor Seam Test Time Off') ?></th>
            <td><?= h($lifeRaftCertificate->floor_seam_test_time_off) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->work_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Flag') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->vessel_flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imo No') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->imo_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inspected By') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->inspected_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Container') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->id_container) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paint Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->paint_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cylinder Count') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->cylinder_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emergency Pack Type') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->emergency_pack_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emergency Pack Capacity') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->emergency_pack_capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Food Rations Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->food_rations_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Water Rations Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->water_rations_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hand Flare Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->hand_flare_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rocket Parachute Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->rocket_parachute_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Smoke Signal Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->smoke_signal_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Aid Kit Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->first_aid_kit_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anti Sea Sickness Medicine Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->anti_sea_sickness_medicine_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flashlight Batteries Medicine Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->flashlight_batteries_medicine_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flashlight Batteries Medicine Qty') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->flashlight_batteries_medicine_qty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gas Inflation Test Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->gas_Inflation_test_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Upper Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Upper Starting Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_starting_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Upper Ending Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_ending_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Upper Starting Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_starting_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Upper Ending Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_ending_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Lower Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Lower Starting Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_starting_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Lower Ending Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_ending_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Lower Starting Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_starting_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Pressure Test Lower Ending Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_ending_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Upper Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Upper Starting Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_starting_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Upper Ending Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_ending_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Upper Starting Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_starting_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Upper Ending Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_ending_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Lower Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Lower Starting Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_starting_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Lower Ending Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_ending_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Lower Starting Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_starting_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Necessary Additional Pressure Test Lower Ending Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_ending_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor Seam Test Status') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor Seam Test Starting Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_starting_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor Seam Test Ending Temp') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_ending_temp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor Seam Test Starting Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_starting_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor Seam Test Ending Reading') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_ending_reading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Date') ?></th>
            <td><?= h($lifeRaftCertificate->order_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arrival Date') ?></th>
            <td><?= h($lifeRaftCertificate->arrival_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Finish Date') ?></th>
            <td><?= h($lifeRaftCertificate->finish_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date') ?></th>
            <td><?= h($lifeRaftCertificate->delivery_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lifeRaftCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lifeRaftCertificate->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manufacture Date') ?></th>
            <td><?= h($lifeRaftCertificate->manufacture_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Cylinder Last Hydro Test') ?></th>
            <td><?= h($lifeRaftCertificate->first_cylinder_last_hydro_test) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Second Cylinder Last Hydro Test') ?></th>
            <td><?= h($lifeRaftCertificate->second_cylinder_last_hydro_test) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Food Rations Expiry Date') ?></th>
            <td><?= h($lifeRaftCertificate->food_rations_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Water Rations Expiry Date') ?></th>
            <td><?= h($lifeRaftCertificate->water_rations_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hand Flare Expiry Date') ?></th>
            <td><?= h($lifeRaftCertificate->hand_flare_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rocket Parachute Expiry Date') ?></th>
            <td><?= h($lifeRaftCertificate->rocket_parachute_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Smoke Signal Expiry Date') ?></th>
            <td><?= h($lifeRaftCertificate->smoke_signal_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Aid Kit Expiry Date') ?></th>
            <td><?= h($lifeRaftCertificate->first_aid_kit_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anti Sea Sickness Medicine Expiry Date') ?></th>
            <td><?= h($lifeRaftCertificate->anti_sea_sickness_medicine_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flashlight Batteries Expiry Date') ?></th>
            <td><?= h($lifeRaftCertificate->flashlight_batteries_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gas Inflation Test Date') ?></th>
            <td><?= h($lifeRaftCertificate->gas_Inflation_test_date) ?></td>
        </tr>
    </table>
</div>
