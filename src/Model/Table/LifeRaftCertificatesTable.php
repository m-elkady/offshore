<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LifeRaftCertificates Model
 *
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\LifeRaftCertificate get($primaryKey, $options = [])
 * @method \App\Model\Entity\LifeRaftCertificate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LifeRaftCertificate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LifeRaftCertificate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LifeRaftCertificate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LifeRaftCertificate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LifeRaftCertificate findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LifeRaftCertificatesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('life_raft_certificates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('serial_no')
            ->requirePresence('serial_no', 'create')
            ->notEmpty('serial_no');

        $validator
            ->integer('work_status')
            ->allowEmpty('work_status');

        $validator
            ->scalar('vessel_name')
            ->requirePresence('vessel_name', 'create')
            ->notEmpty('vessel_name');

        $validator
            ->integer('vessel_flag')
            ->allowEmpty('vessel_flag');

        $validator
            ->integer('imo_no')
            ->allowEmpty('imo_no');

        $validator
            ->date('order_date')
            ->allowEmpty('order_date');

        $validator
            ->date('arrival_date')
            ->allowEmpty('arrival_date');

        $validator
            ->date('finish_date')
            ->allowEmpty('finish_date');

        $validator
            ->date('delivery_date')
            ->allowEmpty('delivery_date');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->integer('inspected_by')
            ->allowEmpty('inspected_by');

        $validator
            ->scalar('manufacturer')
            ->allowEmpty('manufacturer');

        $validator
            ->scalar('type')
            ->allowEmpty('type');

        $validator
            ->date('manufacture_date')
            ->allowEmpty('manufacture_date');

        $validator
            ->scalar('painter_line')
            ->allowEmpty('painter_line');

        $validator
            ->scalar('stowage_height')
            ->allowEmpty('stowage_height');

        $validator
            ->scalar('outside_line')
            ->allowEmpty('outside_line');

        $validator
            ->integer('id_container')
            ->allowEmpty('id_container');

        $validator
            ->integer('paint_status')
            ->allowEmpty('paint_status');

        $validator
            ->integer('cylinder_count')
            ->allowEmpty('cylinder_count');

        $validator
            ->scalar('radar_reflector_type')
            ->allowEmpty('radar_reflector_type');

        $validator
            ->scalar('radar_reflector_serial_no')
            ->allowEmpty('radar_reflector_serial_no');

        $validator
            ->scalar('first_cylinder_serial_no')
            ->allowEmpty('first_cylinder_serial_no');

        $validator
            ->scalar('first_cylinder_co2_charge')
            ->allowEmpty('first_cylinder_co2_charge');

        $validator
            ->scalar('first_cylinder_n2_charge')
            ->allowEmpty('first_cylinder_n2_charge');

        $validator
            ->scalar('firts_cylinder_gross_weight')
            ->allowEmpty('firts_cylinder_gross_weight');

        $validator
            ->date('first_cylinder_last_hydro_test')
            ->allowEmpty('first_cylinder_last_hydro_test');

        $validator
            ->scalar('second_cylinder_serial_no')
            ->allowEmpty('second_cylinder_serial_no');

        $validator
            ->scalar('second_cylinder_co2_charge')
            ->allowEmpty('second_cylinder_co2_charge');

        $validator
            ->scalar('second_cylinder_n2_charge')
            ->allowEmpty('second_cylinder_n2_charge');

        $validator
            ->scalar('second_cylinder_gross_weight')
            ->allowEmpty('second_cylinder_gross_weight');

        $validator
            ->date('second_cylinder_last_hydro_test')
            ->allowEmpty('second_cylinder_last_hydro_test');

        $validator
            ->integer('emergency_pack_type')
            ->allowEmpty('emergency_pack_type');

        $validator
            ->integer('emergency_pack_capacity')
            ->allowEmpty('emergency_pack_capacity');

        $validator
            ->integer('food_rations_status')
            ->allowEmpty('food_rations_status');

        $validator
            ->date('food_rations_expiry_date')
            ->allowEmpty('food_rations_expiry_date');

        $validator
            ->integer('water_rations_status')
            ->allowEmpty('water_rations_status');

        $validator
            ->date('water_rations_expiry_date')
            ->allowEmpty('water_rations_expiry_date');

        $validator
            ->integer('hand_flare_status')
            ->allowEmpty('hand_flare_status');

        $validator
            ->date('hand_flare_expiry_date')
            ->allowEmpty('hand_flare_expiry_date');

        $validator
            ->integer('rocket_parachute_status')
            ->allowEmpty('rocket_parachute_status');

        $validator
            ->date('rocket_parachute_expiry_date')
            ->allowEmpty('rocket_parachute_expiry_date');

        $validator
            ->integer('smoke_signal_status')
            ->allowEmpty('smoke_signal_status');

        $validator
            ->date('smoke_signal_expiry_date')
            ->allowEmpty('smoke_signal_expiry_date');

        $validator
            ->integer('first_aid_kit_status')
            ->allowEmpty('first_aid_kit_status');

        $validator
            ->date('first_aid_kit_expiry_date')
            ->allowEmpty('first_aid_kit_expiry_date');

        $validator
            ->integer('anti_sea_sickness_medicine_status')
            ->allowEmpty('anti_sea_sickness_medicine_status');

        $validator
            ->date('anti_sea_sickness_medicine_expiry_date')
            ->allowEmpty('anti_sea_sickness_medicine_expiry_date');

        $validator
            ->integer('flashlight_batteries_medicine_status')
            ->allowEmpty('flashlight_batteries_medicine_status');

        $validator
            ->integer('flashlight_batteries_medicine_qty')
            ->allowEmpty('flashlight_batteries_medicine_qty');

        $validator
            ->date('flashlight_batteries_expiry_date')
            ->allowEmpty('flashlight_batteries_expiry_date');

        $validator
            ->integer('gas_Inflation_test_status')
            ->allowEmpty('gas_Inflation_test_status');

        $validator
            ->date('gas_Inflation_test_date')
            ->allowEmpty('gas_Inflation_test_date');

        $validator
            ->integer('working_pressure_test_upper_status')
            ->allowEmpty('working_pressure_test_upper_status');

        $validator
            ->scalar('working_pressure_test_upper_time_on')
            ->allowEmpty('working_pressure_test_upper_time_on');

        $validator
            ->scalar('working_pressure_test_upper_time_off')
            ->allowEmpty('working_pressure_test_upper_time_off');

        $validator
            ->integer('working_pressure_test_upper_starting_temp')
            ->allowEmpty('working_pressure_test_upper_starting_temp');

        $validator
            ->integer('working_pressure_test_upper_ending_temp')
            ->allowEmpty('working_pressure_test_upper_ending_temp');

        $validator
            ->integer('working_pressure_test_upper_starting_reading')
            ->allowEmpty('working_pressure_test_upper_starting_reading');

        $validator
            ->integer('working_pressure_test_upper_ending_reading')
            ->allowEmpty('working_pressure_test_upper_ending_reading');

        $validator
            ->integer('working_pressure_test_lower_status')
            ->allowEmpty('working_pressure_test_lower_status');

        $validator
            ->scalar('working_pressure_test_lower_time_on')
            ->allowEmpty('working_pressure_test_lower_time_on');

        $validator
            ->scalar('working_pressure_test_lower_time_off')
            ->allowEmpty('working_pressure_test_lower_time_off');

        $validator
            ->integer('working_pressure_test_lower_starting_temp')
            ->allowEmpty('working_pressure_test_lower_starting_temp');

        $validator
            ->integer('working_pressure_test_lower_ending_temp')
            ->allowEmpty('working_pressure_test_lower_ending_temp');

        $validator
            ->integer('working_pressure_test_lower_starting_reading')
            ->allowEmpty('working_pressure_test_lower_starting_reading');

        $validator
            ->integer('working_pressure_test_lower_ending_reading')
            ->allowEmpty('working_pressure_test_lower_ending_reading');

        $validator
            ->integer('necessary_additional_pressure_test_upper_status')
            ->allowEmpty('necessary_additional_pressure_test_upper_status');

        $validator
            ->scalar('necessary_additional_pressure_test_upper_time_on')
            ->allowEmpty('necessary_additional_pressure_test_upper_time_on');

        $validator
            ->scalar('necessary_additional_pressure_test_upper_time_off')
            ->allowEmpty('necessary_additional_pressure_test_upper_time_off');

        $validator
            ->integer('necessary_additional_pressure_test_upper_starting_temp')
            ->allowEmpty('necessary_additional_pressure_test_upper_starting_temp');

        $validator
            ->integer('necessary_additional_pressure_test_upper_ending_temp')
            ->allowEmpty('necessary_additional_pressure_test_upper_ending_temp');

        $validator
            ->integer('necessary_additional_pressure_test_upper_starting_reading')
            ->allowEmpty('necessary_additional_pressure_test_upper_starting_reading');

        $validator
            ->integer('necessary_additional_pressure_test_upper_ending_reading')
            ->allowEmpty('necessary_additional_pressure_test_upper_ending_reading');

        $validator
            ->integer('necessary_additional_pressure_test_lower_status')
            ->allowEmpty('necessary_additional_pressure_test_lower_status');

        $validator
            ->scalar('necessary_additional_pressure_test_lower_time_on')
            ->allowEmpty('necessary_additional_pressure_test_lower_time_on');

        $validator
            ->scalar('necessary_additional_pressure_test_lower_time_off')
            ->allowEmpty('necessary_additional_pressure_test_lower_time_off');

        $validator
            ->integer('necessary_additional_pressure_test_lower_starting_temp')
            ->allowEmpty('necessary_additional_pressure_test_lower_starting_temp');

        $validator
            ->integer('necessary_additional_pressure_test_lower_ending_temp')
            ->allowEmpty('necessary_additional_pressure_test_lower_ending_temp');

        $validator
            ->integer('necessary_additional_pressure_test_lower_starting_reading')
            ->allowEmpty('necessary_additional_pressure_test_lower_starting_reading');

        $validator
            ->integer('necessary_additional_pressure_test_lower_ending_reading')
            ->allowEmpty('necessary_additional_pressure_test_lower_ending_reading');

        $validator
            ->integer('floor_seam_test_status')
            ->allowEmpty('floor_seam_test_status');

        $validator
            ->scalar('floor_seam_test_time_on')
            ->allowEmpty('floor_seam_test_time_on');

        $validator
            ->scalar('floor_seam_test_time_off')
            ->allowEmpty('floor_seam_test_time_off');

        $validator
            ->integer('floor_seam_test_starting_temp')
            ->allowEmpty('floor_seam_test_starting_temp');

        $validator
            ->integer('floor_seam_test_ending_temp')
            ->allowEmpty('floor_seam_test_ending_temp');

        $validator
            ->integer('floor_seam_test_starting_reading')
            ->allowEmpty('floor_seam_test_starting_reading');

        $validator
            ->integer('floor_seam_test_ending_reading')
            ->allowEmpty('floor_seam_test_ending_reading');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
