<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LifeRaftCertificate Entity
 *
 * @property int                      $id
 * @property string                   $serial_no
 * @property int                      $work_status
 * @property int                      $client_id
 * @property string                   $vessel_name
 * @property int                      $vessel_flag
 * @property int                      $imo_no
 * @property \Cake\I18n\FrozenDate    $order_date
 * @property \Cake\I18n\FrozenDate    $arrival_date
 * @property \Cake\I18n\FrozenDate    $finish_date
 * @property \Cake\I18n\FrozenDate    $delivery_date
 * @property int                      $status
 * @property int                      $inspected_by
 * @property \Cake\I18n\FrozenTime    $created
 * @property \Cake\I18n\FrozenTime    $modified
 * @property string                   $manufacturer
 * @property string                   $type
 * @property \Cake\I18n\FrozenDate    $manufacture_date
 * @property string                   $painter_line
 * @property string                   $stowage_height
 * @property string                   $outside_line
 * @property int                      $id_container
 * @property int                      $paint_status
 * @property int                      $cylinder_count
 * @property string                   $radar_reflector_type
 * @property string                   $radar_reflector_serial_no
 * @property string                   $first_cylinder_serial_no
 * @property string                   $first_cylinder_co2_charge
 * @property string                   $first_cylinder_n2_charge
 * @property string                   $firts_cylinder_gross_weight
 * @property \Cake\I18n\FrozenDate    $first_cylinder_last_hydro_test
 * @property string                   $second_cylinder_serial_no
 * @property string                   $second_cylinder_co2_charge
 * @property string                   $second_cylinder_n2_charge
 * @property string                   $second_cylinder_gross_weight
 * @property \Cake\I18n\FrozenDate    $second_cylinder_last_hydro_test
 * @property int                      $emergency_pack_type
 * @property int                      $emergency_pack_capacity
 * @property int                      $food_rations_status
 * @property \Cake\I18n\FrozenDate    $food_rations_expiry_date
 * @property int                      $water_rations_status
 * @property \Cake\I18n\FrozenDate    $water_rations_expiry_date
 * @property int                      $hand_flare_status
 * @property \Cake\I18n\FrozenDate    $hand_flare_expiry_date
 * @property int                      $rocket_parachute_status
 * @property \Cake\I18n\FrozenDate    $rocket_parachute_expiry_date
 * @property int                      $smoke_signal_status
 * @property \Cake\I18n\FrozenDate    $smoke_signal_expiry_date
 * @property int                      $first_aid_kit_status
 * @property \Cake\I18n\FrozenDate    $first_aid_kit_expiry_date
 * @property int                      $anti_sea_sickness_medicine_status
 * @property \Cake\I18n\FrozenDate    $anti_sea_sickness_medicine_expiry_date
 * @property int                      $flashlight_batteries_medicine_status
 * @property int                      $flashlight_batteries_medicine_qty
 * @property \Cake\I18n\FrozenDate    $flashlight_batteries_expiry_date
 * @property int                      $gas_Inflation_test_status
 * @property \Cake\I18n\FrozenDate    $gas_Inflation_test_date
 * @property int                      $working_pressure_test_upper_status
 * @property string                   $working_pressure_test_upper_time_on
 * @property string                   $working_pressure_test_upper_time_off
 * @property int                      $working_pressure_test_upper_starting_temp
 * @property int                      $working_pressure_test_upper_ending_temp
 * @property int                      $working_pressure_test_upper_starting_reading
 * @property int                      $working_pressure_test_upper_ending_reading
 * @property int                      $working_pressure_test_lower_status
 * @property string                   $working_pressure_test_lower_time_on
 * @property string                   $working_pressure_test_lower_time_off
 * @property int                      $working_pressure_test_lower_starting_temp
 * @property int                      $working_pressure_test_lower_ending_temp
 * @property int                      $working_pressure_test_lower_starting_reading
 * @property int                      $working_pressure_test_lower_ending_reading
 * @property int                      $necessary_additional_pressure_test_upper_status
 * @property string                   $necessary_additional_pressure_test_upper_time_on
 * @property string                   $necessary_additional_pressure_test_upper_time_off
 * @property int                      $necessary_additional_pressure_test_upper_starting_temp
 * @property int                      $necessary_additional_pressure_test_upper_ending_temp
 * @property int                      $necessary_additional_pressure_test_upper_starting_reading
 * @property int                      $necessary_additional_pressure_test_upper_ending_reading
 * @property int                      $necessary_additional_pressure_test_lower_status
 * @property string                   $necessary_additional_pressure_test_lower_time_on
 * @property string                   $necessary_additional_pressure_test_lower_time_off
 * @property int                      $necessary_additional_pressure_test_lower_starting_temp
 * @property int                      $necessary_additional_pressure_test_lower_ending_temp
 * @property int                      $necessary_additional_pressure_test_lower_starting_reading
 * @property int                      $necessary_additional_pressure_test_lower_ending_reading
 * @property int                      $floor_seam_test_status
 * @property string                   $floor_seam_test_time_on
 * @property string                   $floor_seam_test_time_off
 * @property int                      $floor_seam_test_starting_temp
 * @property int                      $floor_seam_test_ending_temp
 * @property int                      $floor_seam_test_starting_reading
 * @property int                      $floor_seam_test_ending_reading
 *
 * @property \App\Model\Entity\Client $client
 */
class LifeRaftCertificate extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'serial_no'                                                 => true,
        'work_status'                                               => true,
        'client_id'                                                 => true,
        'vessel_id'                                                 => true,
        'order_date'                                                => true,
        'arrival_date'                                              => true,
        'finish_date'                                               => true,
        'delivery_date'                                             => true,
        'status'                                                    => true,
        'inspected_by'                                              => true,
        'created'                                                   => true,
        'modified'                                                  => true,
        'manufacturer'                                              => true,
        'type'                                                      => true,
        'manufacture_date'                                          => true,
        'painter_line'                                              => true,
        'stowage_height'                                            => true,
        'outside_line'                                              => true,
        'id_container'                                              => true,
        'paint_status'                                              => true,
        'cylinder_count'                                            => true,
        'radar_reflector_type'                                      => true,
        'radar_reflector_serial_no'                                 => true,
        'first_cylinder_serial_no'                                  => true,
        'first_cylinder_co2_charge'                                 => true,
        'first_cylinder_n2_charge'                                  => true,
        'firts_cylinder_gross_weight'                               => true,
        'first_cylinder_last_hydro_test'                            => true,
        'second_cylinder_serial_no'                                 => true,
        'second_cylinder_co2_charge'                                => true,
        'second_cylinder_n2_charge'                                 => true,
        'second_cylinder_gross_weight'                              => true,
        'second_cylinder_last_hydro_test'                           => true,
        'emergency_pack_type'                                       => true,
        'emergency_pack_capacity'                                   => true,
        'food_rations_status'                                       => true,
        'food_rations_expiry_date'                                  => true,
        'water_rations_status'                                      => true,
        'water_rations_expiry_date'                                 => true,
        'hand_flare_status'                                         => true,
        'hand_flare_expiry_date'                                    => true,
        'rocket_parachute_status'                                   => true,
        'rocket_parachute_expiry_date'                              => true,
        'smoke_signal_status'                                       => true,
        'smoke_signal_expiry_date'                                  => true,
        'first_aid_kit_status'                                      => true,
        'first_aid_kit_expiry_date'                                 => true,
        'anti_sea_sickness_medicine_status'                         => true,
        'anti_sea_sickness_medicine_expiry_date'                    => true,
        'flashlight_batteries_medicine_status'                      => true,
        'flashlight_batteries_medicine_qty'                         => true,
        'flashlight_batteries_expiry_date'                          => true,
        'gas_Inflation_test_status'                                 => true,
        'gas_Inflation_test_date'                                   => true,
        'working_pressure_test_upper_status'                        => true,
        'working_pressure_test_upper_time_on'                       => true,
        'working_pressure_test_upper_time_off'                      => true,
        'working_pressure_test_upper_starting_temp'                 => true,
        'working_pressure_test_upper_ending_temp'                   => true,
        'working_pressure_test_upper_starting_reading'              => true,
        'working_pressure_test_upper_ending_reading'                => true,
        'working_pressure_test_lower_status'                        => true,
        'working_pressure_test_lower_time_on'                       => true,
        'working_pressure_test_lower_time_off'                      => true,
        'working_pressure_test_lower_starting_temp'                 => true,
        'working_pressure_test_lower_ending_temp'                   => true,
        'working_pressure_test_lower_starting_reading'              => true,
        'working_pressure_test_lower_ending_reading'                => true,
        'necessary_additional_pressure_test_upper_status'           => true,
        'necessary_additional_pressure_test_upper_time_on'          => true,
        'necessary_additional_pressure_test_upper_time_off'         => true,
        'necessary_additional_pressure_test_upper_starting_temp'    => true,
        'necessary_additional_pressure_test_upper_ending_temp'      => true,
        'necessary_additional_pressure_test_upper_starting_reading' => true,
        'necessary_additional_pressure_test_upper_ending_reading'   => true,
        'necessary_additional_pressure_test_lower_status'           => true,
        'necessary_additional_pressure_test_lower_time_on'          => true,
        'necessary_additional_pressure_test_lower_time_off'         => true,
        'necessary_additional_pressure_test_lower_starting_temp'    => true,
        'necessary_additional_pressure_test_lower_ending_temp'      => true,
        'necessary_additional_pressure_test_lower_starting_reading' => true,
        'necessary_additional_pressure_test_lower_ending_reading'   => true,
        'floor_seam_test_status'                                    => true,
        'floor_seam_test_time_on'                                   => true,
        'floor_seam_test_time_off'                                  => true,
        'floor_seam_test_starting_temp'                             => true,
        'floor_seam_test_ending_temp'                               => true,
        'floor_seam_test_starting_reading'                          => true,
        'floor_seam_test_ending_reading'                            => true,
        'client'                                                    => true,
    ];
}
