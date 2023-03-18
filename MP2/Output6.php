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

    public function printInfo(string $param): void {
        echo "Param: " . $param . "\n";
        $this->displayInfo();
    }
}

// Instantiate three objects and set their properties
$parentObj = new nameOfParent();
$parentObj->setParentStringVar("parent");
$parentObj->setParentIntVar(123);

$childObj = new nameOfChild();
$childObj->setParentStringVar("parent");
$childObj->setParentIntVar(456);
$childObj->setChildStringVar("child");

$secondChildObj = new nameOfChild();
$secondChildObj->setParentStringVar("another parent");
$secondChildObj->setParentIntVar(789);
$secondChildObj->setChildStringVar("another child");

// Use their methods to display their properties
echo "Parent Object:\n";
$parentObj->displayInfo();

echo "\nChild Object:\n";
$childObj->printInfo("test");

echo "\nSecond Child Object:\n";
$secondChildObj->printInfo("testing");
