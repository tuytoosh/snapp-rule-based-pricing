<?php

namespace App\Snapp;

class CheckConditions {

    public $condition;
    public $oldPrice;
    public $conditionsRequest;
    public function __construct($condition, $conditionsRequest, $oldPrice)
    {
        $this->condition = $condition;
        $this->oldPrice = $oldPrice;
        $this->conditionsRequest = $conditionsRequest;
    }

    public function CheckAll() {
        return
        $this->checkMinPrice() &&
        $this->CheckUserType() &&
        $this->CheckChannelType();
    }

    public function CheckUserType() {
        return $this->conditionsRequest['userType'] == $this->condition->userType;
    }

    public function CheckChannelType() {
        return $this->conditionsRequest['channelType'] == $this->condition->channelType;
    }

    public function checkMinPrice() {
        return $this->oldPrice >= $this->condition->minPrice;
    }
}
