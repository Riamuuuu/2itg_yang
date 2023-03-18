<?php

class nameOfGrandParent {
    private string $grandParentStringVar;

    public function setGrandParentStringVar(string $value): void {
        $this->grandParentStringVar = $value;
    }

    public function getGrandParentStringVar(): string {
        return $this->grandParentStringVar;
    }

    public function displayGrandParentInfo(): void {
        echo "grandParentStringVar: " . $this->grandParentStringVar . "\n";
    }
}

class nameOfParent extends nameOfGrandParent {
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

class nameOfChild extends nameOfParent {
    private string $childStringVar;

    public function setChildStringVar(string $value): void {
        $this->childStringVar = $value;
    }

    public function getChildStringVar(): string {
        return $this->childStringVar;
    }

    public function displayChildInfo(): void {
        echo "childStringVar: " . $this->childStringVar . "\n";
    }

    public function __construct(string $value) {
        $this->childStringVar = $value;
    }
}

// Testing the multilevel inheritance
$childObj = new nameOfChild("hello");
$childObj->setParentStringVar("world");
$childObj->setGrandParentStringVar("hello world");
$childObj->displayChildInfo();
$childObj->displayParentInfo();
$childObj->displayGrandParentInfo();
