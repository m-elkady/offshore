<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LifeRaftCertificate $lifeRaftCertificate
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$lifeRaftCertificate->id) {
                        echo __('Add Life Raft Certificate');
                    } else {
                        echo __('Edit Life Raft Certificate');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($lifeRaftCertificate) ?>
                <?php
                                            echo $this->Form->control('serial_no');
                                                        echo $this->Form->control('work_status');
                                                        echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                                                        echo $this->Form->control('vessel_name');
                                                        echo $this->Form->control('vessel_flag');
                                                        echo $this->Form->control('imo_no');
                                                        echo $this->Form->control('order_date', ['empty' => true]);
                                                        echo $this->Form->control('arrival_date', ['empty' => true]);
                                                        echo $this->Form->control('finish_date', ['empty' => true]);
                                                        echo $this->Form->control('delivery_date', ['empty' => true]);
                                                        echo $this->Form->control('status');
                                                        echo $this->Form->control('inspected_by');
                                                        echo $this->Form->control('manufacturer');
                                                        echo $this->Form->control('type');
                                                        echo $this->Form->control('manufacture_date', ['empty' => true]);
                                                        echo $this->Form->control('painter_line');
                                                        echo $this->Form->control('stowage_height');
                                                        echo $this->Form->control('outside_line');
                                                        echo $this->Form->control('id_container');
                                                        echo $this->Form->control('paint_status');
                                                        echo $this->Form->control('cylinder_count');
                                                        echo $this->Form->control('radar_reflector_type');
                                                        echo $this->Form->control('radar_reflector_serial_no');
                                                        echo $this->Form->control('first_cylinder_serial_no');
                                                        echo $this->Form->control('first_cylinder_co2_charge');
                                                        echo $this->Form->control('first_cylinder_n2_charge');
                                                        echo $this->Form->control('firts_cylinder_gross_weight');
                                                        echo $this->Form->control('first_cylinder_last_hydro_test', ['empty' => true]);
                                                        echo $this->Form->control('second_cylinder_serial_no');
                                                        echo $this->Form->control('second_cylinder_co2_charge');
                                                        echo $this->Form->control('second_cylinder_n2_charge');
                                                        echo $this->Form->control('second_cylinder_gross_weight');
                                                        echo $this->Form->control('second_cylinder_last_hydro_test', ['empty' => true]);
                                                        echo $this->Form->control('emergency_pack_type');
                                                        echo $this->Form->control('emergency_pack_capacity');
                                                        echo $this->Form->control('food_rations_status');
                                                        echo $this->Form->control('food_rations_expiry_date', ['empty' => true]);
                                                        echo $this->Form->control('water_rations_status');
                                                        echo $this->Form->control('water_rations_expiry_date', ['empty' => true]);
                                                        echo $this->Form->control('hand_flare_status');
                                                        echo $this->Form->control('hand_flare_expiry_date', ['empty' => true]);
                                                        echo $this->Form->control('rocket_parachute_status');
                                                        echo $this->Form->control('rocket_parachute_expiry_date', ['empty' => true]);
                                                        echo $this->Form->control('smoke_signal_status');
                                                        echo $this->Form->control('smoke_signal_expiry_date', ['empty' => true]);
                                                        echo $this->Form->control('first_aid_kit_status');
                                                        echo $this->Form->control('first_aid_kit_expiry_date', ['empty' => true]);
                                                        echo $this->Form->control('anti_sea_sickness_medicine_status');
                                                        echo $this->Form->control('anti_sea_sickness_medicine_expiry_date', ['empty' => true]);
                                                        echo $this->Form->control('flashlight_batteries_medicine_status');
                                                        echo $this->Form->control('flashlight_batteries_medicine_qty');
                                                        echo $this->Form->control('flashlight_batteries_expiry_date', ['empty' => true]);
                                                        echo $this->Form->control('gas_Inflation_test_status');
                                                        echo $this->Form->control('gas_Inflation_test_date', ['empty' => true]);
                                                        echo $this->Form->control('working_pressure_test_upper_status');
                                                        echo $this->Form->control('working_pressure_test_upper_time_on');
                                                        echo $this->Form->control('working_pressure_test_upper_time_off');
                                                        echo $this->Form->control('working_pressure_test_upper_starting_temp');
                                                        echo $this->Form->control('working_pressure_test_upper_ending_temp');
                                                        echo $this->Form->control('working_pressure_test_upper_starting_reading');
                                                        echo $this->Form->control('working_pressure_test_upper_ending_reading');
                                                        echo $this->Form->control('working_pressure_test_lower_status');
                                                        echo $this->Form->control('working_pressure_test_lower_time_on');
                                                        echo $this->Form->control('working_pressure_test_lower_time_off');
                                                        echo $this->Form->control('working_pressure_test_lower_starting_temp');
                                                        echo $this->Form->control('working_pressure_test_lower_ending_temp');
                                                        echo $this->Form->control('working_pressure_test_lower_starting_reading');
                                                        echo $this->Form->control('working_pressure_test_lower_ending_reading');
                                                        echo $this->Form->control('necessary_additional_pressure_test_upper_status');
                                                        echo $this->Form->control('necessary_additional_pressure_test_upper_time_on');
                                                        echo $this->Form->control('necessary_additional_pressure_test_upper_time_off');
                                                        echo $this->Form->control('necessary_additional_pressure_test_upper_starting_temp');
                                                        echo $this->Form->control('necessary_additional_pressure_test_upper_ending_temp');
                                                        echo $this->Form->control('necessary_additional_pressure_test_upper_starting_reading');
                                                        echo $this->Form->control('necessary_additional_pressure_test_upper_ending_reading');
                                                        echo $this->Form->control('necessary_additional_pressure_test_lower_status');
                                                        echo $this->Form->control('necessary_additional_pressure_test_lower_time_on');
                                                        echo $this->Form->control('necessary_additional_pressure_test_lower_time_off');
                                                        echo $this->Form->control('necessary_additional_pressure_test_lower_starting_temp');
                                                        echo $this->Form->control('necessary_additional_pressure_test_lower_ending_temp');
                                                        echo $this->Form->control('necessary_additional_pressure_test_lower_starting_reading');
                                                        echo $this->Form->control('necessary_additional_pressure_test_lower_ending_reading');
                                                        echo $this->Form->control('floor_seam_test_status');
                                                        echo $this->Form->control('floor_seam_test_time_on');
                                                        echo $this->Form->control('floor_seam_test_time_off');
                                                        echo $this->Form->control('floor_seam_test_starting_temp');
                                                        echo $this->Form->control('floor_seam_test_ending_temp');
                                                        echo $this->Form->control('floor_seam_test_starting_reading');
                                                        echo $this->Form->control('floor_seam_test_ending_reading');
                                            ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
