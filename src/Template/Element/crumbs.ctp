<?php

use Cake\Utility\Inflector;

/* @var $this->Html HtmlHelper */

if (isset($currentDepartment)) {
    $this->Html->addCrumb($currentDepartment['text'], $currentDepartment['url'], ['escape' => false]);
}

$params = $this->request->params;
if (!isset($crumbs['prefix'])) {
    if (isset($params['prefix']))
        $this->Html->addCrumb(__(Inflector::humanize($params['prefix'])), "/{$params['prefix']}");
} else if (!empty($crumbs['prefix'][0]))
    $this->Html->addCrumb(__($crumbs['prefix'][0]), "/{$crumbs['prefix'][1]}");

if (!isset($crumbs['controller']))
    $this->Html->addCrumb(__(Inflector::humanize(Inflector::underscore($params['controller']))), array('controller' => $params['controller'], 'action' => 'index'));
else if (!empty($crumbs['controller'])) {
    foreach ($crumbs['controller'] as $controller => $url) {
        $this->Html->addCrumb(__($controller), $url);
    }
}

if (!isset($crumbs['action'])) {
    $action = $params['action'];
    if ($action != 'index') {
        $this->Html->addCrumb(__(Inflector::humanize($action)));
    }
} else if (!empty($crumbs['action'])) {
    $this->Html->addCrumb(__($crumbs['action']));
}



if (isset($crumbs['more'])) {
    foreach ($crumbs['more'] as $crumb)
        $this->Html->addCrumb($crumb[0], $crumb[1] ? "/{$crumb[1]}" : null);
}

$out_crumbs = explode(' / ', $this->Html->getCrumbs(' / '));
//echo $this->Html->getCrumbs(' / ');
foreach ($out_crumbs as $key => &$value) {
    if (!isset($out_crumbs[$key + 1])) {
        $value = '<b class="text-info">' . strip_tags($value) . '</b>';
    }
}
echo implode(' / ', $out_crumbs);
?>