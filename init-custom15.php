<?php Yii::app()->hooks->addFilter('campaign_model_get_lists_dropdown_array_criteria', function($criteria){
    $criteria->order = 'date_added DESC';
    return $criteria;
});
Yii::app()->hooks->addAction('console_command_send_campaigns_after_send_to_subscriber', function(){
sleep(rand(0, 15));
});