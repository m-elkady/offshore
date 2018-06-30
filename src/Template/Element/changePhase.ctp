<?php

use App\Helper\CertificateHelper;

echo $this->Form->select('phase', CertificateHelper::getCertificatePhases(),
    [
        'value'   => $value,
        'class'   => 'form-control certificate-phase',
        'empty'   => __('Select Phase'),
        'data-id' => $id,
    ]
);
?>