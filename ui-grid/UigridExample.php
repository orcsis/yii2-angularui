<?php

namespace orcsis\angularui\bootstrap;

/**
 * This is just an example.
 */
class BootstrapExample extends \yii\base\Widget
{
	public function init()
	{
		$view = $this->getView();
		BootstrapAsset::register($view);
		$jst = $this->getJst();
		$view->registerJs($jst,\yii\web\View::POS_END, 'app-boot');
		parent::init();
	}

    public function run()
    {

$html = '<div ng-app="ui.bootstrap.demo">
<div ng-controller="AccordionDemoCtrl">
  <p>
    <button class="btn btn-default btn-sm" ng-click="status.open = !status.open">Toggle last panel</button>
    <button class="btn btn-default btn-sm" ng-click="status.isFirstDisabled = ! status.isFirstDisabled">Enable / Disable first panel</button>
  </p>

  <label class="checkbox">
    <input type="checkbox" ng-model="oneAtATime">
    Open only one at a time
  </label>
  <accordion close-others="oneAtATime">
    <accordion-group heading="Static Header, initially expanded" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled">
      This content is straight in the template.
    </accordion-group>
    <accordion-group heading="{{group.title}}" ng-repeat="group in groups">
      {{group.content}}
    </accordion-group>
    <accordion-group heading="Dynamic Body Content">
      <p>The body of the accordion group grows to fit the contents</p>
        <button class="btn btn-default btn-sm" ng-click="addItem()">Add Item</button>
        <div ng-repeat="item in items">{{item}}</div>
    </accordion-group>
    <accordion-group is-open="status.open">
        <accordion-heading>
            I can have markup, too! <i class="pull-right glyphicon" ng-class="{\'glyphicon-chevron-down\': status.open, \'glyphicon-chevron-right\': !status.open}"></i>
        </accordion-heading>
        This is just some content to illustrate fancy headings.
    </accordion-group>
  </accordion>
</div>
</div>';
        return $html;
    }

    public function getJst()
    {
    	return 'angular.module(\'ui.bootstrap.demo\', [\'ui.bootstrap\']);
angular.module(\'ui.bootstrap.demo\').controller(\'AccordionDemoCtrl\', function ($scope) {
  $scope.oneAtATime = true;

  $scope.groups = [
    {
      title: \'Dynamic Group Header - 1\',
      content: \'Dynamic Group Body - 1\'
    },
    {
      title: \'Dynamic Group Header - 2\',
      content: \'Dynamic Group Body - 2\'
    }
  ];

  $scope.items = [\'Item 1\', \'Item 2\', \'Item 3\'];

  $scope.addItem = function() {
    var newItemNo = $scope.items.length + 1;
    $scope.items.push(\'Item \' + newItemNo);
  };

  $scope.status = {
    isFirstOpen: true,
    isFirstDisabled: false
  };
});';
    }
}
