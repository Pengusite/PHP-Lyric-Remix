<!--Catanghal, Justine Chollo C | CYB 201-->

<?php
class Customer {
    public string $foreName;
    public string $surName;
    public string $email;
    public string $password;
    public array $portfolio; // Step 2: Property for array of objects

    public function __construct(string $foreName, string $surName, string $email, string $password, array $portfolio) {
        $this->foreName = $foreName;
        $this->surName = $surName;
        $this->email = $email;
        $this->password = $password;
        $this->portfolio = $portfolio; // Step 3 & 4, account is being added in the constructor method
    }

    // Step 5: Returning the customer full name
    public function getFullName():string {
        return strtoupper($this->foreName . " " . $this->surName); //using strtoupper to make all Uppercase Letter
    }
}
?>