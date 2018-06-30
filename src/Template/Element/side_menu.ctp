<?php

use Cake\Routing\Router;
use Cake\Utility\Inflector;

$admin_menu = [
    'Certificates'    => [
        'icon' => '<i class="fa fa-file"></i>',
        'subs' => [
            'Fire Extinguisher'    => [
                'icon' => '<i class="fa fa-fire-extinguisher" aria-hidden="true"></i>',
                'id'   => 'FireExtinguisherCertificates',
                'subs' => [
                    __('List')            => ['url' => ['controller' => 'fire-extinguisher-certificates', 'action' => 'index']],
                    __('Add')             => ['url' => ['controller' => 'fire-extinguisher-certificates', 'action' => 'add']],
                    __('Item Types') => [
                        'id'=>'FireExtinguisherItemTypes',
                        'subs' => [
                            __('List') => ['url' => ['controller' => 'fire-extinguisher-item-types', 'action' => 'index']],
                            __('Add')   => ['url' => ['controller' => 'fire-extinguisher-item-types', 'action' => 'add']],
                        ],
                    ],
                ],
            ],
            'Life Raft'            => [
                'icon' => '<i class="fa fa-life-ring" aria-hidden="true"></i>',
                'id'   => 'LifeRaftCertificates',
                'subs' => [
                    __('List') => ['url' => ['controller' => 'life-raft-certificates', 'action' => 'index']],
                    __('Add')  => ['url' => ['controller' => 'life-raft-certificates', 'action' => 'add']],
                ],
            ],
            'Fixed System'         => [
                'icon' => '<i class="fa fa-bell-o" aria-hidden="true"></i>',
                'id'   => 'FixedSystemCertificates',
                'subs' => [
                    __('List') => ['url' => ['controller' => 'fixed-system-certificates', 'action' => 'index']],
                    __('Add')  => ['url' => ['controller' => 'fixed-system-certificates', 'action' => 'add']],
                ],
            ],
            'EEBD'                 => [
                'icon' => '<i class="fa fa-bell-o" aria-hidden="true"></i>',
                'id'   => 'EebdCertificates',
                'subs' => [
                    __('List') => ['url' => ['controller' => 'eebd-certificates', 'action' => 'index']],
                    __('Add')  => ['url' => ['controller' => 'eebd-certificates', 'action' => 'add']],
                ],
            ],
            'SCAPA'                => [
                'icon' => '<i class="fa fa-bell-o" aria-hidden="true"></i>',
                'id'   => 'ScapaCertificates',
                'subs' => [
                    __('List') => ['url' => ['controller' => 'scapa-certificates', 'action' => 'index']],
                    __('Add')  => ['url' => ['controller' => 'scapa-certificates', 'action' => 'add']],
                ],
            ],
            'Life Boat'            => [
                'icon' => '<i class="fa fa-ship" aria-hidden="true"></i>',
                'id'   => 'LifeBoatCertificates',
                'subs' => [
                    __('List') => ['url' => ['controller' => 'life-boat-certificates', 'action' => 'index']],
                    __('Add')  => ['url' => ['controller' => 'life-boat-certificates', 'action' => 'add']],
                ],
            ],
            'Rescue Boat'          => [
                'icon' => '<i class="fa fa-ship" aria-hidden="true"></i>',
                'id'   => 'RescueBoatCertificates',
                'subs' => [
                    __('List') => ['url' => ['controller' => 'rescue-boat-certificates', 'action' => 'index']],
                    __('Add')  => ['url' => ['controller' => 'rescue-boat-certificates', 'action' => 'add']],
                ],
            ],
            'Medical Oxygen'       => [
                'icon' => '<i class="fa fa-bomb" aria-hidden="true"></i>',
                'id'   => 'MedicalOxygenCertificates',
                'subs' => [
                    __('List') => ['url' => ['controller' => 'medical-oxygen-certificates', 'action' => 'index']],
                    __('Add')  => ['url' => ['controller' => 'medical-oxygen-certificates', 'action' => 'add']],
                ],
            ],
            'Hydro Static Release' => [
                'icon' => '<i class="fa fa-ship" aria-hidden="true"></i>',
                'id'   => 'HydroStaticReleaseUnitCertificates',
                'subs' => [
                    __('List') => ['url' => ['controller' => 'hydro-static-release-unit-certificates', 'action' => 'index']],
                    __('Add')  => ['url' => ['controller' => 'hydro-static-release-unit-certificates', 'action' => 'add']],
                ],
            ],

        ],
    ],
    'Delivery Notes'  => [
        'icon' => '<i class="fa fa fa-sticky-note-o" aria-hidden="true"></i>',
        'subs' => [
            __('List') => ['url' => ['controller' => 'delivery-notes', 'action' => 'index']],
            __('Add')  => ['url' => ['controller' => 'delivery-notes', 'action' => 'add']],
        ],
    ],
    'Purchase Orders' => [
        'icon' => '<i class="fa fa-credit-card" aria-hidden="true"></i>',
        'subs' => [
            __('List') => ['url' => ['controller' => 'purchase-orders', 'action' => 'index']],
            __('Add')  => ['url' => ['controller' => 'purchase-orders', 'action' => 'add']],
        ],
    ],
    'Quotations'      => [
        'icon' => '<i class="fa fa-quote-left" aria-hidden="true"></i>',
        'subs' => [
            __('List') => ['url' => ['controller' => 'quotations', 'action' => 'index']],
            __('Add')  => ['url' => ['controller' => 'quotations', 'action' => 'add']],
        ],
    ],
    'Price Lists'     => [
        'icon' => '<i class="fa fa-dollar" aria-hidden="true"></i>',
        'subs' => [
            __('List') => ['url' => ['controller' => 'price-lists', 'action' => 'index']],
            __('Add')  => ['url' => ['controller' => 'price-lists', 'action' => 'add']],
        ],
    ],
    'clients'         => [
        'icon' => '<i class="fa fa-user-circle" aria-hidden="true"></i>',
        'subs' => [
            __('List') => ['url' => ['controller' => 'clients', 'action' => 'index']],
            __('Add')  => ['url' => ['controller' => 'clients', 'action' => 'add']],
        ],
    ],
    'Vessels'         => [
        'icon' => '<i class="fa fa-ship" aria-hidden="true"></i>',
        'subs' => [
            __('List') => ['url' => ['controller' => 'vessels', 'action' => 'index']],
            __('Add')  => ['url' => ['controller' => 'vessels', 'action' => 'add']],
        ],
    ],
    'vendors'         => [
        'icon' => '<i class="fa fa-user-circle" aria-hidden="true"></i>',
        'subs' => [
            __('List') => ['url' => ['controller' => 'vendors', 'action' => 'index']],
            __('Add')  => ['url' => ['controller' => 'vendors', 'action' => 'add']],
        ],
    ],
    'Employees'       => [
        'icon' => '<i class="fa fa-user-circle" aria-hidden="true"></i>',
        'subs' => [
            __('List') => ['url' => ['controller' => 'employees', 'action' => 'index']],
            __('Add')  => ['url' => ['controller' => 'employees', 'action' => 'add']],
        ],
    ],
    'Annual Leaves'   => [
        'icon' => '<i class="fa fa-calendar-check-o" aria-hidden="true"></i>',
        'subs' => [
            __('List') => ['url' => ['controller' => 'annual-leaves', 'action' => 'index']],
            __('Add')  => ['url' => ['controller' => 'annual-leaves', 'action' => 'add']],
        ],
    ],
    'Admins'          => [
        'icon' => '<i class="fa fa-users"></i>',
        'id'   => 'Admins',
        'subs' => [
            __('List Admins') => ['url' => ['controller' => 'users', 'action' => 'index', 1]],
            __('Add User')    => ['url' => ['controller' => 'users', 'action' => 'add', 1]],
        ],
    ],
    'Settings'        => [
        'icon' => '<i class="fa fa-cogs"></i>',
        'subs' => [
            __('Certificate Texts') => [
                'icon' => '<i class="fa fa-file-text"></i>',
                'subs' => [
                    __('List') => ['url' => ['controller' => 'certificate_texts', 'action' => 'index']],
                    __('Add')  => ['url' => ['controller' => 'certificate_texts', 'action' => 'add']],
                ],
            ],

            __('General configuration') => ['url' => ['controller' => 'settings', 'action' => 'edit-configs', 'general']],
            __('Social network links')  => ['url' => ['controller' => 'settings', 'action' => 'edit-configs', 'social_networks']],
            __('Contact information')   => ['url' => ['controller' => 'settings', 'action' => 'edit-configs', 'contact']],

        ],
    ],
];
?>


<ul class="mainNav">

    <?php
    side_menu($this, $admin_menu);
    ?>

</ul>

<?php $this->append('script'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        var $id = '<?php echo isset($menuId) ? $menuId : Inflector::camelize($this->request->params['controller']); ?>';
        $('#' + $id).addClass('active');
        if ($('#' + $id).parents('#Certificates').length !== 0) {
            $('#Certificates > ul').show();
        }
        if ($('#' + $id).parents('#Settings').length !== 0) {
            $('#Settings > ul').show();
        }
    });
</script>
<?php $this->end(); ?>

<?php

function side_menu($view, $menu = [])
{
//    debug($view->request);
    foreach ($menu as $key => $item) {
        $id     = (isset($item['id'])) ? Inflector::camelize($item['id']) : Inflector::camelize($key);
        $url    = (!empty($item['url'])) ? Router::url($item['url']) : "#";
        $class  = (!empty($item['subs'])) ? 'folder' : 'file';
        $class2 = (!empty($item['class'])) ? $item['class'] : '';
//        if (hasCabalities($view, $item)) {
        ?>
      <li id="<?php echo $id ?>">
        <a href="<?php echo $url; ?>" <?php echo $url == '/' . $view->request->url ? 'class="active"' : ''; ?>>
            <?php
            if (!empty($item['icon'])) {
                echo $item['icon'];
            }
            if ($class == 'folder') {
                echo $view->Html->tag('span', __($key));
            } else {
                echo __($key);
            }
            ?>
        </a>
          <?php
          if ($class == 'folder') {
              echo '<ul>';
              side_menu($view, $item['subs']);
              echo '</ul>';
          }
          ?>
      </li>

        <?php
//        }
    }
}

function hasCabalities($view, $items)
{
    $user = $view->viewVars['user'];

    if (!empty($items['subs'])) {
        foreach ($items['subs'] as $key => $item) {
            if (isset($item['url'])) {
                return hasCapablity($item['url']['controller'], $item['url']['action'], $user);
            }
        }
    } else {
        return hasCapablity($items['url']['controller'], $items['url']['action'], $user);
    }
//    return false;
}

?>






