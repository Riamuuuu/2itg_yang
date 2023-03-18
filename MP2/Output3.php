<?php

class nameOfParent {
    private string $parentStringVar;

    public function setParentStringVar(string $value): void {
        $this->parentStringVar = $value;
    }

    public function getParentStringVar(): string {
        return $this->parentStringVar;
    }

    public function displayParentInfo(): void {
        echo "parentStringVar: " . $this->parentStringVar . "\n";
    }
}

class nameOfChildOne extends nameOfParent {
    private string $childOneStringVar;

    public function setChildOneStringVar(string $value): void {
        $this->childOneStringVar = $value;
    }

    public function getChildOneStringVar(): string {
        return $this->childOneStringVar;
    }

    public function displayChildOneInfo(): void {
        echo "childOneStringVar: " . $this->childOneStringVar . "\n";
    }
}

class nameOfChildTwo extends nameOfParent {
    private string $childTwoStringVar;

    public function setChildTwoStringVar(string $value): void {
        $this->childTwoStringVar = $value;
    }

    public function getChildTwoStringVar(): string {
        return $this->childTwoStringVar;
    }

    public function displayChildTwoInfo(): void {
        echo "childTwoStringVar: " . $this->childTwoStringVar . "\n";
    }
}

// Testing the hierarchical inheritance
$childOneObj = new nameOfChildOne();
$childOneObj->setParentStringVar("parent");
$childOneObj->setChildOneStringVar("childOne");

$childTwoObj = new nameOfChildTwo();
$childTwoObj->setParentStringVar("parent");
$childTwoObj->setChildTwoStringVar("childTwo");

$childOneObj->displayParentInfo();
$childOneObj->displayChildOneInfo();

$childTwoObj->displayParentInfo();
$childTwoObj->displayChildTwoInfo();
