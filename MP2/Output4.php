<?php

class nameOfParent {
    private string $parentStringVar;
    private int $parentIntVar;

    public function setParentStringVar(string $value): void {
        $this->parentStringVar = $value;
    }

    public function getParentStringVar(): string {
        return $this->parentStringVar;
    }

    public function setParentIntVar(int $value): void {
        $this->parentIntVar = $value;
    }

    public function getParentIntVar(): int {
        return $this->parentIntVar;
    }

    public function displayInfo(): void {
        echo "parentStringVar: " . $this->parentStringVar . "\n";
        echo "parentIntVar: " . $this->parentIntVar . "\n";
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

    public function displayInfo(): void {
        parent::displayInfo();
        echo "childStringVar: " . $this->childStringVar . "\n";
    }
}

// Testing the inheritance and method override
$childObj = new nameOfChild();
$childObj->setParentStringVar("parent");
$childObj->setParentIntVar(123);
$childObj->setChildStringVar("child");

$childObj->displayInfo();
