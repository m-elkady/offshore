<?php

use Cake\Routing\Router;

$orders = [
    ['title' => __('Financial Commitment Letter'), 'icon' => 'icon-flip_to_front', 'class' => 'btn btn-info', 'url' => Router::url(['controller' => 'financialCommitmentLetters', 'action' => 'add'])],
    ['title' => __('Trust Order'), 'icon' => 'icon-filter_tilt_shift', 'class' => 'btn btn-info', 'url' => Router::url(['controller' => 'TrustOrders', 'action' => 'add'])],
    ['title' => __('Contract'), 'icon' => 'icon-paper', 'class' => 'btn btn-info', 'url' => Router::url(['controller' => 'Contracts', 'action' => 'add'])],
    ['title' => __('Invoice'), 'icon' => 'icon-create_new_folder', 'class' => 'btn btn-info', 'url' => Router::url(['controller' => 'Invoices', 'action' => 'add'])],
    ['title' => __('FinancialItems'), 'icon' => 'icon-present_to_all', 'class' => 'btn btn-info', 'url' => Router::url(['controller' => 'FinancialItems', 'action' => 'add'])],
];
return [
    'Buttons' => [
/// <editor-fold defaultstate="collapsed" desc="BUDGETS">
  'FinancialYears' =>
        [
            'index' => [
                ['title' => __('Add Financial Year'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-success', 'url' => Router::url(['action' => 'add'])],
            ],
            'add' => [
                ['title' => __('Financial Year'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
            'edit' => [
                ['title' => __('Financial Year'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
        ],
        'BudgetItems' =>
        [
            'index' => [
                ['title' => __('Add Budget Item'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-success', 'url' => Router::url(['action' => 'add'])],
            ],
            'add' => [
                ['title' => __('Budget Items'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
            'edit' => [
                ['title' => __('Budget Items'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
        ],
        'TransactionsTypes' =>
        [
            'index' => [
                ['title' => __('Add Transactions Type'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-success', 'url' => Router::url(['action' => 'add'])],
            ],
            'add' => [
                ['title' => __('Transactions Types'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
            'edit' => [
                ['title' => __('Transactions Types'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
        ],
        'Contractors' =>
        [
            'index' => [
                ['title' => __('Add Contractor'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-success', 'url' => Router::url(['action' => 'add'])],
            ],
            'add' => [
                ['title' => __('Contractors'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
            'edit' => [
                ['title' => __('Contractors'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
        ],
        'Purposes' =>
        [
            'index' => [
                ['title' => __('Add Purpose'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-success', 'url' => Router::url(['action' => 'add'])],
            ],
            'add' => [
                ['title' => __('Purposes'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
            'edit' => [
                ['title' => __('Purposes'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
        ],
        'Transactions' =>
        [
            'index' => [
                ['title' => __('Add Transaction'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-success', 'url' => Router::url(['action' => 'add'])],
                ['title' => __('Contractors'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['controller' => 'contractors', 'action' => 'index'])],
                ['title' => __('Purposes'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['controller' => 'purposes', 'action' => 'index'])],
            ],
            'add' => [
                ['title' => __('Transactions'), 'icon' => 'icon-settings', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'index'])],
            ],
            'edit' => $orders,
        ],
        'FinancialCommitmentLetters' => [
            'add' => $orders
        ],
        'TrustOrders' => [
            'add' => $orders
        ],
        'Contracts' => [
            'add' => $orders
        ],
        'FinancialItems' =>
        [
            'add' => $orders
        ],
        'Invoices' => [
            'add' => $orders
        ],
        // </editor-fold>
/// <editor-fold defaultstate="collapsed" desc="Warehouses">
        'WarehouseManagements' =>
        [
            'index' => [
                ['title' => __('Add WarehouseManagements'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'RecievedOrdersItemsForm7' =>
        [
            'index' => [
                ['title' => __('Add RecievedOrdersItemsForm7'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'WarehouseAddOrdersItemsForm7' =>
        [
            'index' => [
                ['title' => __('Add WarehouseAddOrdersItemsForm7'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'WarehouseCustodyEmployers' =>
        [
            'index' => [
                ['title' => __('Add WarehouseCustodyEmployers'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'WarehouseEmployers' =>
        [
            'index' => [
                ['title' => __('Add WarehouseEmployers'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'WarehouseItemsInfo' =>
        [
            'index' => [
                ['title' => __('Add WarehouseItemsInfo'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'WarehouseStores' =>
        [
            'index' => [
                ['title' => __('Add WarehouseStores'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'WarehouseSites' =>
        [
            'index' => [
                ['title' => __('Add WarehouseSites'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'WarehouseCategoriesItems' =>
        [
            'index' => [
                ['title' => __('Add WarehouseCategoriesItems'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'WarehouseItems' =>
        [
            'index' => [
                ['title' => __('Add WarehouseItems'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
        'WarehouseSuppliers' =>
        [
            'index' => [
                ['title' => __('Add WarehouseSuppliers'), 'icon' => 'icon-marquee-plus', 'class' => 'btn btn-info', 'url' => Router::url(['action' => 'add'])],
            ],
        ],
    // </editor-fold>
    ]
];

