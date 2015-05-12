<?php

namespace orcsis\angularui\bootstrap;

/**
 * This is just an example.
 */
class BootstrapExample extends \yii\base\Widget
{
    public function run()
    {

$html = '<div ng-app="ui.bootstrap.demo">
<div ng-controller="AlertDemoCtrl">
  <alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.msg}}</alert>
  <button class="btn btn-default" ng-click="addAlert()">Add Alert</button>
</div>
</div>
<script type="text/javascript">
angular.module(\'ui.bootstrap.demo\', [\'ui.bootstrap\']);
angular.module(\'ui.bootstrap.demo\').controller(\'AlertDemoCtrl\', function ($scope) {
  $scope.alerts = [
    { type: \'danger\', msg: \'Oh snap! Change a few things up and try submitting again.\' },
    { type: \'success\', msg: \'Well done! You successfully read this important alert message.\' }
  ];

  $scope.addAlert = function() {
    $scope.alerts.push({msg: \'Another alert!\'});
  };

  $scope.closeAlert = function(index) {
    $scope.alerts.splice(index, 1);
  };
});
</script>';
        return $html;
    }
}
