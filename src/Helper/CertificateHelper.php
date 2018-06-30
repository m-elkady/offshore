<?php

namespace App\Helper;


class CertificateHelper
{
    const FE_PREFIX    = 'FE';
    const LR_PREFIX    = 'LR';
    const FS_PREFIX    = 'FS';
    const EEBD_PREFIX  = 'EEBD';
    const SCAPA_PREFIX = 'SCAPA';
    const LB_PREFIX    = 'LB';
    const RB_PREFIX    = 'RB';
    const MO_PREFIX    = 'MO';
    const HSR_PREFIX   = 'HSR';

    const FE_START_SERIAL = 5000;

    /**
     * Get Certificate Types
     *
     * @return array
     * @author Mohammed Elkady <m.elkady365@gmail.com>
     */
    public static function getCertificateTypes()
    {
        return [
            1 => 'Fire Extinguisher',
            2 => 'Life Raft',
            3 => 'Fixed System',
            4 => 'EEBD',
            5 => 'SCAPA',
            6 => 'Life Boat',
            7 => 'Rescue Boat',
            8 => 'Medical Oxygen',
            9 => 'Hydro Static Release',
        ];
    }

    /**
     * Get Certificate Statuses
     *
     * @return array
     * @author Mohammed Elkady <m.elkady365@gmail.com>
     */
    public static function getCertificateStatuses()
    {
        return [
            1 => 'Passed',
            2 => 'Failed',
            3 => 'Certified',
            4 => 'Invoiced',
        ];
    }

    /**
     * Get Certificate Statuses
     *
     * @return array
     * @author Mohammed Elkady <m.elkady365@gmail.com>
     */
    public static function getCertificatePhases()
    {
        return [
            1 => 'Ordered',
            2 => 'On hold',
            3 => 'Under inspection',
            4 => 'Ready for delivery',
            5 => 'Delivered',
        ];
    }

    public static function getCertificateSerialNo($prefix, $maxNumber)
    {
        $certificateNo = $prefix . '-' . ++$maxNumber;

        return $certificateNo;
    }


}