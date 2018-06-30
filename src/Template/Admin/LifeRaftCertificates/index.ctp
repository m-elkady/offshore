<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LifeRaftCertificate[]|\Cake\Collection\CollectionInterface $lifeRaftCertificates
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Life Raft Certificates') ?></h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo $this->Url->build(array("action" => "do-operation")) ?>" method="post">
                    <!--Table Wrapper Start-->
                    <div class="table-responsive ls-table">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                                                <th><input type="checkbox" id="checkall" /></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('serial_no') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('work_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('vessel_name') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('vessel_flag') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('imo_no') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('order_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('arrival_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('finish_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('delivery_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('inspected_by') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('manufacturer') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('manufacture_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('painter_line') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('stowage_height') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('outside_line') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('id_container') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('paint_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('cylinder_count') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('radar_reflector_type') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('radar_reflector_serial_no') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('first_cylinder_serial_no') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('first_cylinder_co2_charge') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('first_cylinder_n2_charge') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('firts_cylinder_gross_weight') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('first_cylinder_last_hydro_test') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('second_cylinder_serial_no') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('second_cylinder_co2_charge') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('second_cylinder_n2_charge') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('second_cylinder_gross_weight') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('second_cylinder_last_hydro_test') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('emergency_pack_type') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('emergency_pack_capacity') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('food_rations_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('food_rations_expiry_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('water_rations_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('water_rations_expiry_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('hand_flare_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('hand_flare_expiry_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('rocket_parachute_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('rocket_parachute_expiry_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('smoke_signal_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('smoke_signal_expiry_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('first_aid_kit_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('first_aid_kit_expiry_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('anti_sea_sickness_medicine_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('anti_sea_sickness_medicine_expiry_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('flashlight_batteries_medicine_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('flashlight_batteries_medicine_qty') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('flashlight_batteries_expiry_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('gas_Inflation_test_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('gas_Inflation_test_date') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_upper_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_upper_time_on') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_upper_time_off') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_upper_starting_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_upper_ending_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_upper_starting_reading') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_upper_ending_reading') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_lower_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_lower_time_on') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_lower_time_off') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_lower_starting_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_lower_ending_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_lower_starting_reading') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('working_pressure_test_lower_ending_reading') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_upper_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_upper_time_on') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_upper_time_off') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_upper_starting_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_upper_ending_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_upper_starting_reading') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_upper_ending_reading') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_lower_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_lower_time_on') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_lower_time_off') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_lower_starting_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_lower_ending_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_lower_starting_reading') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('necessary_additional_pressure_test_lower_ending_reading') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('floor_seam_test_status') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('floor_seam_test_time_on') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('floor_seam_test_time_off') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('floor_seam_test_starting_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('floor_seam_test_ending_temp') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('floor_seam_test_starting_reading') ?></th>
                                                                                                <th scope="col"><?= $this->Paginator->sort('floor_seam_test_ending_reading') ?></th>
                                                                                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($lifeRaftCertificates as $lifeRaftCertificate): ?>
                            <tr>
                                                                <td> <input  type="checkbox" name="chk[]" value="<?php echo $lifeRaftCertificate->id ?>" /> </td>
                                                                <td><?= h($lifeRaftCertificate->serial_no) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->work_status) ?></td>
                                                                <td><?= $lifeRaftCertificate->has('client') ? $this->Html->link($lifeRaftCertificate->client->name, ['controller' => 'Clients', 'action' => 'view', $lifeRaftCertificate->client->id]) : '' ?></td>
                                                                <td><?= h($lifeRaftCertificate->vessel_name) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->vessel_flag) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->imo_no) ?></td>
                                                                <td><?= h($lifeRaftCertificate->order_date) ?></td>
                                                                <td><?= h($lifeRaftCertificate->arrival_date) ?></td>
                                                                <td><?= h($lifeRaftCertificate->finish_date) ?></td>
                                                                <td><?= h($lifeRaftCertificate->delivery_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->status) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->inspected_by) ?></td>
                                                                <td><?= h($lifeRaftCertificate->created) ?></td>
                                                                <td><?= h($lifeRaftCertificate->modified) ?></td>
                                                                <td><?= h($lifeRaftCertificate->manufacturer) ?></td>
                                                                <td><?= h($lifeRaftCertificate->type) ?></td>
                                                                <td><?= h($lifeRaftCertificate->manufacture_date) ?></td>
                                                                <td><?= h($lifeRaftCertificate->painter_line) ?></td>
                                                                <td><?= h($lifeRaftCertificate->stowage_height) ?></td>
                                                                <td><?= h($lifeRaftCertificate->outside_line) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->id_container) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->paint_status) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->cylinder_count) ?></td>
                                                                <td><?= h($lifeRaftCertificate->radar_reflector_type) ?></td>
                                                                <td><?= h($lifeRaftCertificate->radar_reflector_serial_no) ?></td>
                                                                <td><?= h($lifeRaftCertificate->first_cylinder_serial_no) ?></td>
                                                                <td><?= h($lifeRaftCertificate->first_cylinder_co2_charge) ?></td>
                                                                <td><?= h($lifeRaftCertificate->first_cylinder_n2_charge) ?></td>
                                                                <td><?= h($lifeRaftCertificate->firts_cylinder_gross_weight) ?></td>
                                                                <td><?= h($lifeRaftCertificate->first_cylinder_last_hydro_test) ?></td>
                                                                <td><?= h($lifeRaftCertificate->second_cylinder_serial_no) ?></td>
                                                                <td><?= h($lifeRaftCertificate->second_cylinder_co2_charge) ?></td>
                                                                <td><?= h($lifeRaftCertificate->second_cylinder_n2_charge) ?></td>
                                                                <td><?= h($lifeRaftCertificate->second_cylinder_gross_weight) ?></td>
                                                                <td><?= h($lifeRaftCertificate->second_cylinder_last_hydro_test) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->emergency_pack_type) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->emergency_pack_capacity) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->food_rations_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->food_rations_expiry_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->water_rations_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->water_rations_expiry_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->hand_flare_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->hand_flare_expiry_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->rocket_parachute_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->rocket_parachute_expiry_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->smoke_signal_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->smoke_signal_expiry_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->first_aid_kit_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->first_aid_kit_expiry_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->anti_sea_sickness_medicine_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->anti_sea_sickness_medicine_expiry_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->flashlight_batteries_medicine_status) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->flashlight_batteries_medicine_qty) ?></td>
                                                                <td><?= h($lifeRaftCertificate->flashlight_batteries_expiry_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->gas_Inflation_test_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->gas_Inflation_test_date) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->working_pressure_test_upper_time_on) ?></td>
                                                                <td><?= h($lifeRaftCertificate->working_pressure_test_upper_time_off) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_starting_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_ending_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_starting_reading) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_upper_ending_reading) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->working_pressure_test_lower_time_on) ?></td>
                                                                <td><?= h($lifeRaftCertificate->working_pressure_test_lower_time_off) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_starting_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_ending_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_starting_reading) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->working_pressure_test_lower_ending_reading) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->necessary_additional_pressure_test_upper_time_on) ?></td>
                                                                <td><?= h($lifeRaftCertificate->necessary_additional_pressure_test_upper_time_off) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_starting_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_ending_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_starting_reading) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_upper_ending_reading) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->necessary_additional_pressure_test_lower_time_on) ?></td>
                                                                <td><?= h($lifeRaftCertificate->necessary_additional_pressure_test_lower_time_off) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_starting_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_ending_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_starting_reading) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->necessary_additional_pressure_test_lower_ending_reading) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_status) ?></td>
                                                                <td><?= h($lifeRaftCertificate->floor_seam_test_time_on) ?></td>
                                                                <td><?= h($lifeRaftCertificate->floor_seam_test_time_off) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_starting_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_ending_temp) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_starting_reading) ?></td>
                                                                <td><?= $this->Number->format($lifeRaftCertificate->floor_seam_test_ending_reading) ?></td>
                                                                <td class="actions">

                                    <?= $this->Html->link('<i class="fa fa-pencil"></i> ' .__('Edit'), ['action' => 'edit', $lifeRaftCertificate->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i> ' .__('Delete'), ['action' => 'delete', $lifeRaftCertificate->id], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $lifeRaftCertificate->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-control" id="acts" name="operation">
                                    <option value=""><?php echo __("Choose Operation") ?></option>
                                    <option value="delete"><?php echo __("Delete") ?></option>
                                </select>
                            </div>
                            <div class="col-md-9 text-right">
                                <ul class="pagination ls-pagination">
                                    <?php
                                    if ($this->Paginator->hasPrev()) {
                                    echo $this->Paginator->prev('< ' . __('previous'));
                                    }
                                    echo $this->Paginator->numbers();
                                    if ($this->Paginator->hasNext()) {
                                    echo $this->Paginator->next(__('next') . ' >');
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
