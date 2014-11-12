<?php
class CarType
{
    
    function __construct($car_type, $test, $lead)
    {
        $this->car_type = $car_type;
        $this->test     = $test;
        $this->lead     = $lead;
        
        if ($test == "Downpayment") {
            $this->monthly     = "$99";
            $this->downpayment = "$999";
            $this->offer       = "24 mo/$999 down";
            $this->disclaimer  = "Payment with $999 down plus tax, title, license, documentation fee and first month's payment, with approved credit and 10,000 miles per year.  Requires a currently leased vehicle in your home. MSRP: $21,365. Expires 11/3/14.";
            if ($this->lead == 'Display') {
                $this->tel = "855.389.8831";
            } else {
                $this->tel = "855.389.9822";
            }
        } else {
            $this->monthly     = "$139";
            $this->downpayment = "$0";
            $this->offer       = "24 months / $0 down";
            $this->disclaimer  = "Plus tax, title, license, documentation fee and first month's payment, with approved credit and 10,000 miles per year.  Requires a currently leased vehicle in your home. MSRP: $21,365. Expires 11/3/14.";
            if ($this->lead == 'Display') {
                $this->tel = "855.389.8823";
            } else {
                $this->tel = "855.389.8835";
            }
        }
    }
    public $car_type;
    public $test;
    public $lead;
    public $monthly;
    public $downpayment;
    public $offer;
    public $tel;
    public $car_name = "CRUZE";
    public $cruze_sup = "LT";
    public $car_img = "cruze.png";
    public $year = "2014";
    public $tag1 = "Bigger selection on better cars.";
    public $tag2 = "It’s better in every way at Matick.";
    public $key_features = "<li>Turbocharged ECOTEC 1.4L engine</li>
          	 <li>16” aluminum wheels</li>
          	 <li>Bluetooth integration, OnStar and SiriusXM Radio</li>
          	 <li>Power windows and door locks with remote keyless entry</li>
          	 <li>Cruise control</li>
          	 <li>2-year free maintenance package</li>";
}
?>